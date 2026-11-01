<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(10);

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'member_code' => 'required|string|max:50|unique:members,member_code',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:members,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ], [
            'member_code.required' => 'Kode anggota wajib diisi.',
            'member_code.unique' => 'Kode anggota sudah digunakan.',
            'name.required' => 'Nama anggota wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
        ]);

        Member::create($validated);

        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'member_code' => [
                'required',
                'string',
                'max:50',
                Rule::unique('members', 'member_code')->ignore($member->id),
            ],
            'name' => 'required|string|max:255',
            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('members', 'email')->ignore($member->id),
            ],
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ], [
            'member_code.required' => 'Kode anggota wajib diisi.',
            'member_code.unique' => 'Kode anggota sudah digunakan.',
            'name.required' => 'Nama anggota wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
        ]);

        $member->update($validated);

        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil dihapus.');
    }
}

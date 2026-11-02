<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Validation\Rule;
=======
>>>>>>> origin/fitur/anggota-b

class MemberController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $members = Member::latest()->paginate(10);

=======
        $members = Member::all();
>>>>>>> origin/fitur/anggota-b
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
<<<<<<< HEAD
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
=======
            'member_code' => 'required|string|unique:members,member_code',
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:members,email',
            'phone'       => 'required|string',
            'address'     => 'required|string',
>>>>>>> origin/fitur/anggota-b
        ]);

        Member::create($validated);

<<<<<<< HEAD
        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
=======
        return redirect()->route('members.index')->with('success', 'Anggota berhasil ditambahkan.');
>>>>>>> origin/fitur/anggota-b
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
<<<<<<< HEAD
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
=======
            'member_code' => 'required|string|unique:members,member_code,' . $member->id,
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:members,email,' . $member->id,
            'phone'       => 'required|string',
            'address'     => 'required|string',
>>>>>>> origin/fitur/anggota-b
        ]);

        $member->update($validated);

<<<<<<< HEAD
        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
=======
        return redirect()->route('members.index')->with('success', 'Data anggota berhasil diperbarui.');
>>>>>>> origin/fitur/anggota-b
    }

    public function destroy(Member $member)
    {
        $member->delete();
<<<<<<< HEAD

        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil dihapus.');
    }
}
=======
        return redirect()->route('members.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
>>>>>>> origin/fitur/anggota-b

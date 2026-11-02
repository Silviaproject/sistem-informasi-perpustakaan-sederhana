public function up(): void
{
    Schema::create('borrowings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
        $table->date('borrow_date');
        $table->date('return_date');
        $table->enum('status', ['borrowed', 'returned'])->default('borrowed');
        $table->timestamps();
    });
}
public function up(): void
{
    Schema::create('borrowing_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('borrowing_id')->constrained('borrowings')->onDelete('cascade');
        $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
        $table->integer('quantity')->default(1);
        $table->timestamps();
    });
}
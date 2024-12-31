<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Borrow;
use Faker\Factory as Faker;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $readerIds = DB::table('readers')->pluck('id')->toArray();
        $bookIds = DB::table('books')->pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            $borrowDate = $faker->dateTimeBetween('-1 month', 'now');
            $returnDate = $faker->dateTimeBetween($borrowDate, '+1 month');

            Borrow::create([
                'reader_id' => $faker->randomElement($readerIds),
                'book_id' => $faker->randomElement($bookIds),
                'borrow_date' => $borrowDate,
                'return_date' => $returnDate,
                'status' => $faker->boolean(50), // 50% chance for returned status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

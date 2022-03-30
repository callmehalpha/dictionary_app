<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddExistingLibraryToDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('word_lists')->truncate();
        $words = json_decode(file_get_contents(public_path() . "/data.json"), true);
        foreach ($words as $key => $item) {

            $new_record = [
                'word' => $key,
                'meaning' => $item[0]
            ];

            DB::table('word_lists')->insert($new_record);


        }
    }
}

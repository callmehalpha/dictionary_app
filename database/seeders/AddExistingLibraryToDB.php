<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'meaning' => json_encode($item),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            DB::table('word_lists')->insert($new_record);


        }
    }
}

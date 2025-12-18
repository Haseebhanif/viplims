<?php

use Illuminate\Database\Seeder;

class GenreralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('general_settings')->truncate();

        \App\Models\GeneralSetting::create([
            'logo'=>null
        ]);
    }
}

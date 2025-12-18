<?php

use Illuminate\Database\Seeder;

class PoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('policies')->truncate();

        $policies = array('privacy_policy', 'terms_&_conditions');
        foreach ($policies as $policy) {
            \App\Models\Policy::create([
                'name' => $policy
            ]);
        }
    }
}

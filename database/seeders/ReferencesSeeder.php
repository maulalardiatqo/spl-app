<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('references')->insert(
            [
                'code' => 'om1',
                'name' => 'Salary / 173',
                'expression' => '(salary / 173) * overtime_duration_total',
            ],
            [
                'code' => 'om2',
                'name' => 'Fixed',
                'expression' => '10000 * overtime_duration_total',
            ]
        );
    }
}

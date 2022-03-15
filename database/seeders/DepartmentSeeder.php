<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(array(array(
            'name' => "MBBS"
        ),
array(

    'name' => 'Cardiologists'
),
array(

    'name' => 'Endocrinologists'
),
array(

    'name' => 'Gastroenterologists'
),
        )

        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KubunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model::class, 5) ->create();
    }
}

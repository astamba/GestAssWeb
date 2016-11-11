<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('anaassociazione')->insert([
            'id' => 1,
            'associazione' => 'Ragione sociale',
            'indirizzo' => '',
            'indirizzo2' => '',
            'cap' => '',
            'localita' => '',
            'provincia' => '',
            'presidente' => '',
            'logo' => 0
        ]);
    }
}

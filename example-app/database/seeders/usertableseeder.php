<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'=>'ram',
            'date'=>'2002-09-17',
            'email'=>'ram@gmail.com'
        ]);
    }
}

<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'asdf',
                'email'     => 'asdf@asdf.asdf',
                'password'  => Hash::make('asdf'),
                'value'     => 6567
            ],
            [
                'name'      => 'qwer',
                'email'     => 'qwer@qwer.qwer',
                'password'  => Hash::make('qwer'),
                'value'     => 435
            ],
            [
                'name'      => 'zxcv',
                'email'     => 'zxcv@zxcv.zxcv',
                'password'  => Hash::make('zxcv'),
                'value'     => 789
            ],
            [
                'name'      => 'uiop',
                'email'     => 'uiop@uiop.uiop',
                'password'  => Hash::make('uiop'),
                'value'     => 23
            ],
            [
                'name'      => 'mnbv',
                'email'     => 'mnbv@mnbv.mnbv',
                'password'  => Hash::make('mnbv'),
                'value'     => 887
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Profile User',
            'email' => 'profile@example.com',
            'api_token' => 'K7VnGvcGB2WOzETeSwRe1Hhi9PHnmYGIQFK19uKsY8e4yXPfACOOt1sxx2MqYvvy',
        ]);
    }
}

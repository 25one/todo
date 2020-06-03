<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Users
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => str_random(10),
                'api_token' => str_random(8),
            ]
        ); 
        User::create(
            [
                'name' => 'alex',
                'email' => 'alex@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'redac',               
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                   
            ]
        ); 
        User::create(
            [
                'name' => 'serg',
                'email' => 'serg@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',                
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                  
            ]
        ); 
        User::create(
            [
                'name' => 'helen',
                'email' => 'helen@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',                
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                   
            ]
        );

        // Tasks
        Task::create(
            [
                'user_id' => 2,
                'task' => 'task1',
                'result' => 0,
                'datecreate' => '2020-05-30 09:00:00',
                'dateresult' => '0000-00-00 00:00:00',
            ]
        ); 
        Task::create(
            [
                'user_id' => 2,
                'task' => 'task2',
                'result' => 1,
                'datecreate' => '2020-05-30 09:00:00',
                'dateresult' => '2020-05-30 10:30:00',
            ]
        ); 
        Task::create(
            [
                'user_id' => 3,
                'task' => 'task3',
                'result' => 0,
                'datecreate' => '2020-05-30 09:00:00',
                'dateresult' => '0000-00-00 00:00:00',
            ]
        );          
    }
}

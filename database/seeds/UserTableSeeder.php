<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = [
            ['name' => 'Admin','email' => 'admin@admin.com','phone' => '23412-231203012','image' => '967326465.png','role' => 1,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker','email' => 'worker@gmail.com','phone' => '1230-123456','image' => '1058908973.jpg','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'user','email' => 'user@gmail.com','phone' => '212321312','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker1','email' => 'worker1@gmail.com','phone' => '0300123456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'test','email' => 'test@gmail.com','phone' => '03089101303','image' => '515843107.jpg','role' => 3,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'client1','email' => 'client1@gmail.com','phone' => '0300123456','image' => 'dummy.png','role' => 3,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}

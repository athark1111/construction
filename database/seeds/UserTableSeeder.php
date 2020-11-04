<?php

use App\Services;
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
            ['name' => 'Admin', 'area_id' => null,'email' => 'admin@admin.com','phone' => '23412-231203012','image' => '967326465.png','role' => 1,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker', 'area_id' => 2,'email' => 'worker@gmail.com','phone' => '1230-123456','image' => '1058908973.jpg','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'user', 'area_id' => 3,'email' => 'user@gmail.com','phone' => '212321312','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker1', 'area_id' => 1,'email' => 'worker1@gmail.com','phone' => '0300123456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker2', 'area_id' => 2,'email' => 'worker2@gmail.com','phone' => '0301123456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker3', 'area_id' => 1,'email' => 'worker3@gmail.com','phone' => '0302123456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker4', 'area_id' => 4,'email' => 'worker4@gmail.com','phone' => '0303123456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker5', 'area_id' => 4,'email' => 'worker5@gmail.com','phone' => '0300143456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker6', 'area_id' => 5,'email' => 'worker6@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker7', 'area_id' => 5,'email' => 'worker7@gmail.com','phone' => '0300124456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker8', 'area_id' => 6,'email' => 'worker8@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker9', 'area_id' => 7,'email' => 'worker9@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker10', 'area_id' => 7,'email' => 'worker10@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker11', 'area_id' => 3,'email' => 'worker11@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker12', 'area_id' => 6,'email' => 'worker12@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker13', 'area_id' => 8,'email' => 'worker13@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'worker14', 'area_id' => 8,'email' => 'worker14@gmail.com','phone' => '0300122456','image' => 'dummy.png','role' => 2,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'test', 'area_id' => null,'email' => 'test@gmail.com','phone' => '03089101303','image' => '515843107.jpg','role' => 3,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
            ['name' => 'client1', 'area_id' => null,'email' => 'client1@gmail.com','phone' => '0300123456','image' => 'dummy.png','role' => 3,'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']
        ];
        foreach($users as $user){
            User::create($user);
        }

        factory(Services::class,55)->create();

    }
}

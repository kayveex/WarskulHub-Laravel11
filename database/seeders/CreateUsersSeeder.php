<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin Aldi',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('admin123'),
               'ulangPassword'=> 'admin123',
            ],
            [
               'name'=>'Manager Topan',
               'email'=>'manager@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
               'ulangPassword'=> '123456',
            ],
            [
               'name'=>'Elisa',
               'email'=>'elisa45@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
               'ulangPassword'=> '123456',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
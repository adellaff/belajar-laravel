<?php
use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@toko.id',
            'password' => bcrypt('12345678')
        ]);
        
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'adella',
            'email' => 'adella@toko.id',
            'password' => bcrypt('12345678')
        ]);
        
        $user->assignRole('user');
    }
}

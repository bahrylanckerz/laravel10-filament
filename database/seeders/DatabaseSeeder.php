<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user1 = User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $user2 = User::factory()->create([
            'name'     => 'User',
            'email'    => 'user@gmail.com',
            'password' => bcrypt('user123'),
        ]);

        $role1 = Role::create(['name' => 'Admin']);
        $user1->assignRole($role1);

        $role2 = Role::create(['name' => 'User']);
        $user2->assignRole($role2);
    }
}

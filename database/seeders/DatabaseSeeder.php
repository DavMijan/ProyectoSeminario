<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role1 = Role::where('name', 'admin')->first();
        if (!$role1) {
            $role1 = Role::create(['name' => 'admin']);
        }
        $user = new User();
        $user->nombre = 'David';
        $user->apellido = 'Mijangos';
        $user->edad = 30;
        $user->email = 'admin@mail.com';
        $user->password = Hash::make('q1w2e3r4'); // Asegúrate de cambiar esto por la contraseña real
        $user->estado = 1; // Puedes establecer el estado según tus necesidades
        $user->save();
        $user->assignRole($role1); // Asignar el rol $role1 al usuario

        
    }
}

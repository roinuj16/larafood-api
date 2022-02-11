<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use LarAPI\Models\Auth\Role;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = new Carbon();
        DB::table('users')->insert([
            [
                'uuid'       => Uuid::uuid4(),
                'name'       => 'Edson',
                'email'      => 'junior.si16@gmail.com',
                'password'   => encrypt('larafood'),
                'active'     => 1,
                'role_id'    => 1,
                'settings'   => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}

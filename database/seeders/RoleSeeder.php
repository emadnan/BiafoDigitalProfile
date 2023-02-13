<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = [
            '1',
            '2',
            '3',
            '4'
        ];
        $roles = [
            'Super Admin',
            'Company Admin',
            'Company User',
            'Individual User'
        ];
        foreach($ids as $key => $id){
            DB::table('roles')->insert([
                'id' => $id,
                'role' => $roles[$key],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

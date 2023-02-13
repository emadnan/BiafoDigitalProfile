<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'can_view_dashboard',
            'can_view_card',
            'can_create_card',
            'can_edit_card',
            'can_delete_card',
            'can_customize_card',
            'can_download_card',
            'can_create_visting_card',
            'can_add_profile',
            'can_edit_profile',
            'can_view_profile',
            'can_view_roles',
            'can_create_roles',
            'can_edit_roles',
            'can_delete_roles',
            'can_view_permissions',
            'can_create_permissions',
            'can_edit_permissions',
            'can_delete_permissions',
            'can_assign_permissions',
            'can_view_feature_requests',
            'can_delete_feature_requests',
        ];

        foreach($permissions as $permission){
            DB::table('permissions')->insert([
                'permission' => $permission,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

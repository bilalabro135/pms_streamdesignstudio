<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'province-list',
            'province-create',
            'province-edit',
            'province-delete',

            'city-list',
            'city-create',
            'city-edit',
            'city-delete',

            'people-list',
            'people-create',
            'people-edit',
            'people-delete',

            'complaint_tag-list',
            'complaint_tag-create',
            'complaint_tag-edit',
            'complaint_tag-delete',

            'complaint-list',
            'complaint-create',
            'complaint-edit',
            'complaint-delete',

            'rating-list',
            'rating-create',
            'rating-edit',
            'rating-delete',

            'reason-list',
            'reason-create',
            'reason-edit',
            'reason-delete',

            'status-list',
            'status-create',
            'status-edit',
            'status-delete',

            'area-list',
            'area-create',
            'area-edit',
            'area-delete',

            'chat-list',
            'chat-create',
            'chat-edit',
            'chat-delete'

         ];
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
     }
}

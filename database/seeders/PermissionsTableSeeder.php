<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'portfolio_create',
            ],
            [
                'id'    => 18,
                'title' => 'portfolio_edit',
            ],
            [
                'id'    => 19,
                'title' => 'portfolio_show',
            ],
            [
                'id'    => 20,
                'title' => 'portfolio_delete',
            ],
            [
                'id'    => 21,
                'title' => 'portfolio_access',
            ],
            [
                'id'    => 22,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 23,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 24,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 25,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 26,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 27,
                'title' => 'logo_create',
            ],
            [
                'id'    => 28,
                'title' => 'logo_edit',
            ],
            [
                'id'    => 29,
                'title' => 'logo_show',
            ],
            [
                'id'    => 30,
                'title' => 'logo_delete',
            ],
            [
                'id'    => 31,
                'title' => 'logo_access',
            ],
            [
                'id'    => 32,
                'title' => 'blog_create',
            ],
            [
                'id'    => 33,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 34,
                'title' => 'blog_show',
            ],
            [
                'id'    => 35,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 36,
                'title' => 'blog_access',
            ],
            [
                'id'    => 37,
                'title' => 'pixel_create',
            ],
            [
                'id'    => 38,
                'title' => 'pixel_edit',
            ],
            [
                'id'    => 39,
                'title' => 'pixel_show',
            ],
            [
                'id'    => 40,
                'title' => 'pixel_delete',
            ],
            [
                'id'    => 41,
                'title' => 'pixel_access',
            ],
            [
                'id'    => 42,
                'title' => 'info_create',
            ],
            [
                'id'    => 43,
                'title' => 'info_edit',
            ],
            [
                'id'    => 44,
                'title' => 'info_show',
            ],
            [
                'id'    => 45,
                'title' => 'info_delete',
            ],
            [
                'id'    => 46,
                'title' => 'info_access',
            ],
            [
                'id'    => 47,
                'title' => 'menu_create',
            ],
            [
                'id'    => 48,
                'title' => 'menu_edit',
            ],
            [
                'id'    => 49,
                'title' => 'menu_show',
            ],
            [
                'id'    => 50,
                'title' => 'menu_delete',
            ],
            [
                'id'    => 51,
                'title' => 'menu_access',
            ],
            [
                'id'    => 52,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}

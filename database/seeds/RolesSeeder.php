<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => json_encode([
                'create_post' => true
            ])
        ]);
        $editor = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => json_encode([
                'update-post' => true,
                'publish-post' => true,
            ])
        ]);

        $administrator = Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => json_encode([
                'create' => true,
                'update' => true,
                'delete' => true,
                'show' => true,
            ])
        ]);
    }
}

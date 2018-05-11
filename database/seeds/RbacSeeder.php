<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RbacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Permission::create(['name' => 'dashboard','display_name'=>'控制台','description'=>'进入控制台']);


      // 创建角色并赋予已创建的权限
      $role = Role::create(['name' => 'admin','display_name'=>'管理员','description'=>'系统管理员']);
      $role->givePermissionTo('dashboard');

      $user=User::create([
        'name' => 'admin',
        'nickname' => 'admin',
        'email' => 'worldtongfb@gmail.com',
        'password' => Hash::make('123456'),
      ]);

      $user->assignRole('admin');




    }
}

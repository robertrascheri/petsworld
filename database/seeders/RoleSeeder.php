<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name', '=', 'admin')->first();
		if ($role === null) {
	        $role_admin = Role::create(['name' => "admin"]);
	        $role_debugger = Role::create(['name' => "debugger"]);
	        $role_tester = Role::create(['name' => "tester"]);
	        $role_editor = Role::create(['name' => "editor"]);
	        $role_player = Role::create(['name' => "player"]);
	        $role_blocked = Role::create(['name' => "blocked"]);

		}

	        $permission_create_role = Permission::create(['name' => "create roles"]);
	        $permission_read_role = Permission::create(['name' => "read roles"]);
	        $permission_update_role = Permission::create(['name' => "update roles"]);
	        $permission_delete_role = Permission::create(['name' => "delete roles"]);

	        $permission_create_type = Permission::create(['name' => "create types"]);
	        $permission_read_type = Permission::create(['name' => "read types"]);
	        $permission_update_type = Permission::create(['name' => "update types"]);
	        $permission_delete_type = Permission::create(['name' => "delete types"]);

	        $permission_create_pet = Permission::create(['name' => "create pets"]);
	        $permission_read_pet = Permission::create(['name' => "read pets"]);
	        $permission_update_pet = Permission::create(['name' => "update pets"]);
	        $permission_delete_pet = Permission::create(['name' => "delete pets"]);

			$permission_see_logs = Permission::create(['name' => "see logs"]);
	        $permission_send_message = Permission::create(['name' => "send message"]);

	        $permission_view_ticket = Permission::create(['name' => "view ticket"]);
	        $permission_request_ticket = Permission::create(['name' => "request ticket"]);
			$permission_close_ticket = Permission::create(['name' => "close ticket"]);        

	        $permission_create_world = Permission::create(['name' => "create worlds"]);
	        $permission_read_world = Permission::create(['name' => "read worlds"]);
	        $permission_update_world = Permission::create(['name' => "update worlds"]);
	        $permission_delete_world = Permission::create(['name' => "delete worlds"]);

	        $permission_play_worlds = Permission::create(['name' => "play worlds"]);
	        $permission_play_pets = Permission::create(['name' => "play pets"]);
	        $permission_open_ticket = Permission::create(['name' => "open ticket"]);

	        $permission_admin = [ 
	        	$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role, 
	        	$permission_create_type, $permission_read_type, $permission_update_type, $permission_delete_type,
	        	$permission_create_pet, $permission_read_pet, $permission_update_pet, $permission_delete_pet, 
				$permission_see_logs, $permission_send_message, $permission_view_ticket, $permission_request_ticket, 
				$permission_close_ticket, $permission_create_world, $permission_read_world, $permission_update_world, 
				$permission_delete_world, $permission_play_worlds, $permission_play_pets, $permission_open_ticket ];
			$permission_debugger = [ 
	        	$permission_create_type, $permission_read_type, $permission_update_type, $permission_delete_type,
	        	$permission_create_pet, $permission_read_pet, $permission_update_pet, $permission_delete_pet, 
				$permission_see_logs, $permission_send_message, $permission_view_ticket, $permission_request_ticket, 
				$permission_close_ticket, $permission_create_world, $permission_read_world, $permission_update_world, 
				$permission_delete_world, $permission_play_worlds, $permission_play_pets];
			$permission_editor = [ 
	        	$permission_create_pet, $permission_read_pet, $permission_update_pet, $permission_delete_pet, 
				$permission_create_world, $permission_read_world, $permission_update_world, $permission_delete_world,
				$permission_play_worlds, $permission_play_pets];
			$permission_tester = [ 
	        	$permission_see_logs, $permission_send_message, $permission_play_worlds, $permission_play_pets, 
	        	$permission_open_ticket ];
	        $permission_player = [ 
	        	$permission_send_message, $permission_play_worlds, $permission_play_pets, $permission_open_ticket ];
	        	
	        $role_admin->syncPermissions($permission_admin);
	        $role_debugger->syncPermissions($permission_debugger);
	        $role_editor->syncPermissions($permission_editor);
	        $role_tester->syncPermissions($permission_tester);
	        $role_player->syncPermissions($permission_player);
		
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('name', '=', 'robert')->first();
		if ($user === null) {
	        $admin = User::create([
	        	'name' => 'robert',
	        	'email' => 'robert.rascheri@gmail.com',
	        	'password' => Hash::make('trevor15')
	        ]);
	        $admin->assignRole('admin');

	        $editor = User::create([
	        	'name' => 'editor',
	        	'email' => 'robert.rascheri@editor.com',
	        	'password' => Hash::make('trevor16')
	        ]);
	        $editor->assignRole('editor');
	    }
    }
}

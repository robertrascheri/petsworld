<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
    	$type = Type::where('id', '=', 1)->first();
		if ($type === null) {
	        Type::create([
	        	'id' => 1,
	        	'name' => 'Water',
	        	'history' => 'Ap (áp-) es el término sánscrito védico para "agua"',
	        	'strength_type_id' => 5,
	        	'weakness_type_id' => 2
	        ]);
	        Type::create([
	        	'id' => 2,
	        	'name' => 'Energy',
	        	'history' => 'El akasha o ākāśa es un término sánscrito que significa ‘éter’, ‘espacio’ o ‘cielo’.',
	        	'strength_type_id' => 1,
	        	'weakness_type_id' => 3
	        ]);
	        Type::create([
	        	'id' => 3,
	        	'name' => 'Earth',
	        	'history' => 'En el marco del hinduismo, Prituí era el nombre de la diosa del planeta Tierra y una diosa madre.',
	        	'strength_type_id' => 2,
	        	'weakness_type_id' => 4
	        ]);
	        Type::create([
	        	'id' => 4,
	        	'name' => 'Air',
	        	'history' => 'En el marco del hinduismo, Vaiu es el dios del viento.',
	        	'strength_type_id' => 3,
	        	'weakness_type_id' => 5
	        ]);
	        Type::create([
	        	'id' => 5,
	        	'name' => 'Fire',
	        	'history' => 'En el marco del hinduismo, Agni es el dios védico del fuego.',
	        	'strength_type_id' => 4,
	        	'weakness_type_id' => 1
	        ]);
        }

    }
}

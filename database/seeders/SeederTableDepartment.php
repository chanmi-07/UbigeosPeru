<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTableDepartment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = 
        [
            "Amazonas",
            "Ancash",
            "Apurimac",
            "Arequipa",
            "Ayacucho",
            "Cajamarca",
            "Cusco",
            "Huancavelica",
            "Huanuco",
            "Ica",
            "Junin",
            "La Libertad",
            "Lambayeque",
            "Lima",
            "Loreto",
            "Madre de Dios",
            "Moquegua",
            "Pasco",
            "Piura",
            "Puno",
            "San Martin",
            "Tacna",
            "Tumbes",
            "Ucayali"
        ];

        foreach ($departments as $key => $department) 
        {
            Department::create
            ([
                'id' => 'D-' . $key + 1,
                'name' => $department
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTableProvinces extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = 
        [
            // amazonas
            [
                "id" => "D-1",
                "provinces" =>
                [
                    "Bagua",
                    "Bongara",
                    "Chachapoyas",
                    "Condorcanqui",
                    "Luya",
                    "Rodriguez de Mendoza",
                    "Utcubamba",
                ],
            ],
            // ancash
            [
                "id" => "D-2",
                "provinces" =>
                [
                    "Aija",
                    "Antonio Raymondi",
                    "Asunción",
                    "Bolognesi",
                    "Carhuaz",
                    "Carlos Fermín Fitzcarrald",
                    "Casma",
                    "Corongo",
                    "Huaraz",
                    "Huari",
                    "Huarmey",
                    "Huaylas",
                    "Mariscal Luzuriaga",
                    "Ocros",
                    "Pallasca",
                    "Pomabamba",
                    "Recuay",
                    "Santa",
                    "Sihuas",
                    "Yungay",
                ],
            ],
            // apurimac
            [
                "id" => "D-3",
                "provinces" =>
                [
                    "Abancay",
                    "Andahuaylas",
                    "Antabamba",
                    "Aymaraes",
                    "Cotabambas",
                    "Chincheros",
                    "Grau",
                ],
            ],
            // arequipa
            [
                "id" => "D-4",
                "provinces" =>
                [
                    "Arequipa",
                    "Camaná",
                    "Caravelí",
                    "Castilla",
                    "Caylloma",
                    "Condesuyos",
                    "Islay",
                    "La Uniòn",
                ],
            ],
            // ayacucho
            [
                "id" => "D-5",
                "provinces" =>
                [
                    "Cangallo",
                    "Huamanga",
                    "Huanca Sancos",
                    "Huanta",
                    "La Mar",
                    "Lucanas",
                    "Parinacochas",
                    "Pàucar del Sara Sara",
                    "Sucre",
                    "Víctor Fajardo",
                    "Vilcas Huamán",
                ],
            ],
            // cajamarca
            [
                "id" => "D-6",
                "provinces" =>
                [
                    "Cajabamba",
                    "Cajamarca",
                    "Celendín",
                    "Chota",
                    "Contumazá",
                    "Cutervo",
                    "Hualgayoc",
                    "Jaén",
                    "San Ignacio",
                    "San Marcos",
                    "San Miguel",
                    "San Pablo",
                    "Santa Cruz",
                ],
            ],
            // cusco
            [
                "id" => "D-7",
                "provinces" =>
                [
                    "Acomayo",
                    "Anta",
                    "Calca",
                    "Canas",
                    "Canchis",
                    "Chumbivilcas",
                    "Cusco",
                    "Espinar",
                    "La Convención",
                    "Paruro",
                    "Paucartambo",
                    "Quispicanchi",
                    "Urubamba",
                ],
            ],
            // huancavelica
            [
                "id" => "D-8",
                "provinces" =>
                [
                    "Acobamba",
                    "Angaraes",
                    "Castrovirreyna",
                    "Churcampa",
                    "Huancavelica",
                    "Huaytará",
                    "Tayacaja",
                ],
            ],
            // huanuco
            [
                "id" => "D-9",
                "provinces" =>
                [
                    "Ambo",
                    "Dos de Mayo",
                    "Huacaybamba",
                    "Huamalíes",
                    "Huanuco",
                    "Lauricocha",
                    "Leoncio Prado",
                    "Marañón",
                    "Pachitea",
                    "Puerto Inca",
                    "Yarowilca",
                ],
            ],
            // ica
            [
                "id" => "D-10",
                "provinces" =>
                [
                    "Chincha",
                    "Ica",
                    "Nazca",
                    "Palpa",
                    "Pisco",
                ],
            ],
            // junin
            [
                "id" => "D-11",
                "provinces" =>
                [
                    "Chanchamayo",
                    "Chupaca",
                    "Concepción",
                    "Huancayo",
                    "Jauja",
                    "Junín",
                    "Satipo",
                    "Tarma",
                    "Yauli",
                ],
            ],
            // la libertad
            [
                "id" => "D-12",
                "provinces" =>
                [
                    "Ascope",
                    "Bolívar",
                    "Chepén",
                    "Gran Chimú",
                    "Julcán",
                    "Otuzco",
                    "Pacasmayo",
                    "Pataz",
                    "Sánchez Carrión",
                    "Santiago de Chuco",
                    "Trujillo",
                    "Virú",
                ],
            ],
            // lambayeque
            [
                "id" => "D-13",
                "provinces" =>
                [
                    "Chiclayo",
                    "Ferreñafe",
                    "Lambayeque",
                ],
            ],
            // lima
            [
                "id" => "D-14",
                "provinces" =>
                [
                    "Barranca",
                    "Cajatambo",
                    "Callao",
                    "Canta",
                    "Cañete",
                    "Huaral",
                    "Huarochirí",
                    "Huaura",
                    "Lima",
                    "Oyón",
                    "Yauyos",
                ],
            ],
            // loreto
            [
                "id" => "D-15",
                "provinces" =>
                [
                    "Alto Amazonas",
                    "Datem del Marañón",
                    "Loreto",
                    "Mariscal Ramón Castilla",
                    "Maynas",
                    "Requena",
                    "Ucayali",
                ],
            ],
            // madre de dios
            [
                "id" => "D-16",
                "provinces" =>
                [
                    "Manu",
                    "Tahuamanu",
                    "Tambopata",
                ],
            ],
            // moquegua
            [
                "id" => "D-17",
                "provinces" =>
                [
                    "General Sánchez Cerro",
                    "Ilo",
                    "Mariscal Nieto",
                ],
            ],
            // pasco
            [
                "id" => "D-18",
                "provinces" =>
                [
                    "Daniel Alcides Carrión",
                    "Oxapampa",
                    "Pasco",
                ],
            ],
            // piura
            [
                "id" => "D-19",
                "provinces" =>
                [
                    "Ayabaca",
                    "Huancabamba",
                    "Morropón",
                    "Paita",
                    "Piura",
                    "Sechura",
                    "Sullana",
                    "Talara",
                ],
            ],
            // puno
            [
                "id" => "D-20",
                "provinces" =>
                [
                    "Azángaro",
                    "Carabaya",
                    "Chucuito",
                    "El Collao",
                    "Huancané",
                    "Lampa",
                    "Melgar",
                    "Moho",
                    "Puno",
                    "San Antonio de Putina",
                    "San Román",
                    "Sandia",
                    "Yunguyo",
                ],
            ],
            // san martin
            [
                "id" => "D-21",
                "provinces" =>
                [
                    "Bellavista",
                    "El Dorado",
                    "Huallaga",
                    "Lamas",
                    "Mariscal Cáceres",
                    "Moyobamba",
                    "Picota",
                    "Rioja",
                    "San Martín",
                    "Tocache",
                ],
            ],
            // tacna
            [
                "id" => "D-22",
                "provinces" =>
                [
                    "Candarave",
                    "Jorge Basadre",
                    "Tacna",
                    "Tarata",
                ],
            ],
            // tumbes
            [
                "id" => "D-23",
                "provinces" =>
                [
                    "Contralmirante Villar",
                    "Tumbes",
                    "Zarumilla",
                ],
            ],
            // ucayali
            [
                "id" => "D-24",
                "provinces" =>
                [
                    "Atalaya",
                    "Coronel Portillo",
                    "Padre Abad",
                    "Purús",
                ],
            ],
        ];

        $count = 1;
        foreach ($departments as $department) 
        {
            foreach ($department['provinces'] as $province) 
            {
                Province::create
                ([
                    'id' => 'P-' . $count,
                    'name' => $province,
                    'department_id' => $department['id']
                ]);

                $count++;
            }
        }
    }
}

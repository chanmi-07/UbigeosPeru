<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTableDistricts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces =
        [
            // amazonas Bagua
            [
                'id' => 'P-1',
                'districts' =>
                [
                    'Aramango',
                    'Bagua',
                    'Copallin',
                    'El Parco',
                    'Imaza',
                    'La Peca'
                ]
            ],
            // amazonas Bongara
            [
                'id' => 'P-2',
                'districts' =>
                [
                    'Chisquilla',
                    'Churuja',
                    'Corosha',
                    'Cuispes',
                    'Florida',
                    'Jazan',
                    'Jumbilla',
                    'Recta',
                    'San Carlos',
                    'Shipasbamba',
                    'Valera',
                    'Yambrasbamba'
                ]
            ],
            // amazonas Chachapoyas
            [
                'id' => 'P-3',
                'districts' =>
                [
                    'Asuncion',
                    'Balsas',
                    'Chachapoyas',
                    'Cheto',
                    'Chiliquin',
                    'Chuquibamba',
                    'Granada',
                    'Huancas',
                    'La Jalca',
                    'Leimebamba',
                    'Levanto',
                    'Magdalena',
                    'Mariscal Castilla',
                    'Molinopampa',
                    'Montevideo',
                    'Olleros',
                    'Quinjalca',
                    'San Francisco de Daguas',
                    'San Isidro de Maino',
                    'Soloco',
                    'Sonche'
                ]
            ],
        ];
    }
}

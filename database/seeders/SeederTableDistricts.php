<?php

namespace Database\Seeders;

use App\Models\District;
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
            // amazonas Condorcanqui
            [
                'id' => 'P-4',
                'districts' =>
                [
                    'El Cenepa',
                    'Nieva',
                    'Rio Santiago'
                ]
            ],
            // amazonas Luya
            [
                'id' => 'P-5',
                'districts' =>
                [
                    'Camporredondo',
                    'Cocabamba',
                    'Colcamar',
                    'Conila',
                    'Inguilpata',
                    'Lamud',
                    'Longuita',
                    'Lonya Chico',
                    'Luya',
                    'Luya Viejo',
                    'Maria',
                    'Ocalli',
                    'Ocumal',
                    'Pisuquia',
                    'Providencia',
                    'San Cristobal',
                    'San Francisco de Yeso',
                    'San Jeronimo',
                    'San Juan de Lopecancha',
                    'Santa Catalina',
                    'Santo Tomas',
                    'Tingo',
                    'Trita'
                ]
            ],
            // amazonas Rodriguez de Mendoza
            [
                'id' => 'P-6',
                'districts' =>
                [
                    'Chirimoto',
                    'Cochamal',
                    'Huambo',
                    'Limabamba',
                    'Longar',
                    'Mariscal Benavides',
                    'Milpuc',
                    'Omia',
                    'San Nicolas',
                    'Santa Rosa',
                    'Totora',
                    'Vista Alegre'
                ]
            ],
            // amazonas Utcubamba
            [
                'id' => 'P-7',
                'districts' =>
                [
                    'Bagua Grande',
                    'Cajaruro',
                    'Cumba',
                    'El Milagro',
                    'Jamalca',
                    'Lonya Grande',
                    'Yamon'
                ]
            ],
            // ancash Aija
            [
                'id' => 'P-8',
                'districts' =>
                [
                    'Aija',
                    'Coris',
                    'Huacllan',
                    'La Merced',
                    'Succha'
                ]
            ],
            // ancash Antonio Raymondi
            [
                'id' => 'P-9',
                'districts' =>
                [
                    'Llamellin',
                    'Aczo',
                    'Chaccho',
                    'Chingas',
                    'Mirgas',
                    'San Juan de Rontoy'
                ]
            ],
            // ancash Asuncion
            [
                'id' => 'P-10',
                'districts' =>
                [
                    'Chacas',
                    'Acochaca'
                ]
            ],
            // ancash Bolognesi
            [
                'id' => 'P-11',
                'districts' =>
                [
                    'Abelardo Pardo Lezameta',
                    'Antonio Raymondi',
                    'Aquia',
                    'Cajacay',
                    'Canis',
                    'Chiquian',
                    'Colquioc',
                    'Huallanca',
                    'Huasta',
                    'Huayllacayan',
                    'La Primavera',
                    'Mangas',
                    'Pacllon',
                    'San Miguel de Corpanqui',
                    'Ticllos'
                ]
                ],
            // ancash Carhuaz
            [
                'id' => 'P-12',
                'districts' =>
                [
                    'Acopampa',
                    'Amashca',
                    'Anta',
                    'Ataquero',
                    'Carhuaz',
                    'Marcara',
                    'Pariahuanca',
                    'San Miguel de Aco',
                    'Shilla',
                    'Tinco',
                    'Yungar'
                ]
            ],
            // ancash Carlos Fermin Fitzcarrald
            [
                'id' => 'P-13',
                'districts' =>
                [
                    'San Luis',
                    'San Nicolas',
                    'Yauya'
                ]
            ],
            // ancash Casma
            [
                'id' => 'P-14',
                'districts' =>
                [
                    'Buena Vista Alta',
                    'Casma',
                    'Comandante Noel',
                    'Yautan'
                ]
            ],
            // ancash Corongo
            [
                'id' => 'P-15',
                'districts' =>
                [
                    'Aco',
                    'Bambas',
                    'Corongo',
                    'Cusca',
                    'La Pampa',
                    'Yanac',
                    'Yupan'
                ]
            ],
            // ancash Huaraz
            [
                'id' => 'P-16',
                'districts' =>
                [
                    'Cochabamba',
                    'Colcabamba',
                    'Huanchay',
                    'Huaraz',
                    'Independencia',
                    'Jangas',
                    'La Libertad',
                    'Olleros',
                    'Pampas Grande',
                    'Pariacoto',
                    'Pira',
                    'Tarica'
                ]
            ],
            // ancash Huari
            [
                'id' => 'P-17',
                'districts' =>
                [
                    'Anra',
                    'Cajay',
                    'Chavin de Huantar',
                    'Huacachi',
                    'Huacchis',
                    'Huachis',
                    'Huantar',
                    'Huari',
                    'Masin',
                    'Paucas',
                    'Ponto',
                    'Rahuapampa',
                    'Rapayan',
                    'San Marcos',
                    'San Pedro de Chana',
                    'Uco'
                ]
            ],
            // ancash Huarmey
            [
                'id' => 'P-18',
                'districts' =>
                [
                    'Cochapeti',
                    'Culebras',
                    'Huarmey',
                    'Huayan',
                    'Malvas'
                ]
            ],
            // ancash Huaylas
            [
                'id' => 'P-19',
                'districts' =>
                [
                    'Caraz',
                    'Huallanca',
                    'Huata',
                    'Huaylas',
                    'Mato',
                    'Pamparomas',
                    'Pueblo Libre',
                    'Santa Cruz',
                    'Santo Toribio',
                    'Yuracmarca'
                ]
            ],
            // ancash Mariscal Luzuriaga
            [
                'id' => 'P-20',
                'districts' =>
                [
                    'Casca',
                    'Eleazar Guzman Barron',
                    'Fidel Olivas Escudero',
                    'Llama',
                    'Llumpa',
                    'Lucma',
                    'Musga',
                    'Piscobamba'
                ]
            ],
            // ancash Ocros
            [
                'id' => 'P-21',
                'districts' =>
                [
                    'Acas',
                    'Cajamarquilla',
                    'Carhuapampa',
                    'Cochas',
                    'Congas',
                    'Llipa',
                    'Ocros',
                    'San Cristobal de Rajan',
                    'San Pedro',
                    'Santiago de Chilcas'
                ]
            ],
            // ancash Pallasca
            [
                'id' => 'P-22',
                'districts' =>
                [
                    'Bolognesi',
                    'Cabana',
                    'Conchucos',
                    'Huacaschuque',
                    'Huandoval',
                    'Lacabamba',
                    'Llapo',
                    'Pallasca',
                    'Pampas',
                    'Santa Rosa',
                    'Tauca'
                ]
            ],
            // ancash Pomabamba
            [
                'id' => 'P-23',
                'districts' =>
                [
                    'Huayllan',
                    'Parobamba',
                    'Pomabamba',
                    'Quinuabamba'
                ]
            ],
            // ancash Recuay
            [
                'id' => 'P-24',
                'districts' =>
                [
                    'Catac',
                    'Cotaparaco',
                    'Huayllapampa',
                    'Llacllin',
                    'Marca',
                    'Pampas Chico',
                    'Pararin',
                    'Recuay',
                    'Tapacocha',
                    'Ticapampa'
                ]
            ],
            // ancash Santa
            [
                'id' => 'P-25',
                'districts' =>
                [
                    'Caceres del Peru',
                    'Chimbote',
                    'Coishco',
                    'Macate',
                    'Moro',
                    'Nepeña',
                    'Nuevo Chimbote',
                    'Samanco',
                    'Santa',
                    'Sihuas',
                    'Vinchos'
                ]
            ],
            // ancash Sihuas
            [
                'id' => 'P-26',
                'districts' =>
                [
                    'Acobamba',
                    'Alfonso Ugarte',
                    'Cashapampa',
                    'Chingalpo',
                    'Huayllabamba',
                    'Quiches',
                    'Ragash',
                    'San Juan',
                    'Sicsibamba',
                    'Sihuas'
                ]
            ],
            // ancash Yungay
            [
                'id' => 'P-27',
                'districts' =>
                [
                    'Cascapara',
                    'Mancos',
                    'Matacoto',
                    'Quillo',
                    'Ranrahirca',
                    'Shupluy',
                    'Yanama',
                    'Yungay'
                ]
            ],
            // apurimac Abancay
            [
                'id' => 'P-28',
                'districts' =>
                [
                    'Abancay',
                    'Chacoche',
                    'Circa',
                    'Curahuasi',
                    'Huanipaca',
                    'Lambrama',
                    'Pichirhua',
                    'San Pedro de Cachora',
                    'Tamburco'
                ]
            ],
            // apurimac Andahuaylas
            [
                'id' => 'P-29',
                'districts' =>
                [
                    'Andarapa',
                    'Chiara',
                    'Huancarama',
                    'Huancaray',
                    'Huayana',
                    'Kishuara',
                    'Pacobamba',
                    'Pacucha',
                    'Pampachiri',
                    'Pomacocha',
                    'San Antonio de Cachi',
                    'San Jeronimo',
                    'San Miguel de Chaccrampa',
                    'Santa Maria de Chicmo',
                    'Talavera',
                    'Tumay Huaraca',
                    'Turpo'
                ]
            ],
            // apurimac Antabamba
            [
                'id' => 'P-30',
                'districts' =>
                [
                    'Antabamba',
                    'El Oro',
                    'Huaquirca',
                    'Juan Espinoza Medrano',
                    'Oropesa',
                    'Pachaconas',
                    'Sabaino'
                ]
            ],
            // apurimac Aymaraes
            [
                'id' => 'P-31',
                'districts' =>
                [
                    'Capaya',
                    'Caraybamba',
                    'Chalhuanca',
                    'Chapimarca',
                    'Colcabamba',
                    'Cotaruse',
                    'Huayllo',
                    'Justo Apu Sahuaraura',
                    'Lucre',
                    'Pocohuanca',
                    'San Juan de Chacña',
                    'Sañayca',
                    'Soraya',
                    'Tapairihua',
                    'Tintay',
                    'Toraya',
                    'Yanaca'
                ]
            ],
            // apurimac Chincheros
            [
                'id' => 'P-32',
                'districts' =>
                [
                    'Anco-Huallo',
                    'Chincheros',
                    'Cocharcas',
                    'El Porvenir',
                    'Huaccana',
                    'Los Chankas',
                    'Ocobamba',
                    'Ongoy',
                    'Ranracancha',
                    'Rocchacc',
                    'Uranmarca'
                ]
            ],
            // apurimac Cotabambas
            [
                'id' => 'P-33',
                'districts' =>
                [
                    'Challhuahuacho',
                    'Cotabambas',
                    'Coyllurqui',
                    'Haquira',
                    'Mara',
                    'Tambobamba'
                ]
            ],
            // apurimac Grau
            [
                'id' => 'P-34',
                'districts' =>
                [
                    'Chuquibambilla',
                    'Curasco',
                    'Curpahuasi',
                    'Huayllati',
                    'Mamara',
                    'Mariscal Gamarra',
                    'Micaela Bastidas',
                    'Pataypampa',
                    'Progreso',
                    'San Antonio',
                    'Santa Rosa',
                    'Turpay',
                    'Vilcabamba',
                    'Virundo',
                ]
            ],
            // arequipa Arequipa
            [
                'id' => 'P-35',
                'districts' =>
                [
                    'Alto Selva Alegre',
                    'Arequipa',
                    'Cayma',
                    'Cerro Colorado',
                    'Characato',
                    'Chiguata',
                    'Jacobo Hunter',
                    'Jose Luis Bustamante y Rivero',
                    'La Joya',
                    'Mariano Melgar',
                    'Miraflores',
                    'Mollebaya',
                    'Paucarpata',
                    'Pocsi',
                    'Polobaya',
                    'Quequeña',
                    'Sabandia',
                    'Sachaca',
                    'San Juan de Siguas',
                    'San Juan de Tarucani',
                    'Santa Isabel de Siguas',
                    'Santa Rita de Siguas',
                    'Socabaya',
                    'Tiabaya',
                    'Uchumayo',
                    'Vitor',
                    'Yanahuara',
                    'Yarabamba',
                    'Yura'
                ]
            ],
            // arequipa Camana
            [
                'id' => 'P-36',
                'districts' =>
                [
                    'Camaná',
                    'Jose María Quimper',
                    'Mariano Nicolás Valcarcel',
                    'Mariscal Cáceres',
                    'Nicolas de Piárola',
                    'Ocoña',
                    'Quilca',
                    'Samuel Pastor'
                ]
            ],
            // arequipa Caraveli
            [
                'id' => 'P-37',
                'districts' =>
                [
                    'Acarí',
                    'Atico',
                    'Atiquipa',
                    'Bella Union',
                    'Cahuacho',
                    'Caraveli',
                    'Chala',
                    'Chaparra',
                    'Huanuhuanu',
                    'Jaqui',
                    'Lomas',
                    'Quicacha',
                    'Yauca'
                ]
            ],
            // arequipa Castilla
            [
                'id' => 'P-38',
                'districts' =>
                [
                    'Andagua',
                    'Aplao',
                    'Ayo',
                    'Chachas',
                    'Chilcaymarca',
                    'Choco',
                    'Huancarqui',
                    'Machaguay',
                    'Orcopampa',
                    'Pampacolca',
                    'Tipan',
                    'Uñon',
                    'Uraca',
                    'Viraco',
                    'Yanque'
                ]
            ],
            // arequipa Caylloma
            [
                'id' => 'P-39',
                'districts' =>
                [
                    'Achoma',
                    'Cabanaconde',
                    'Callalli',
                    'Caylloma',
                    'Chivay',
                    'Coporaque',
                    'Huambo',
                    'Huanca',
                    'Ichupampa',
                    'Lari',
                    'Lluta',
                    'Maca',
                    'Madrigal',
                    'Majes',
                    'San Antonio de Chuca',
                    'Sibayo',
                    'Tapay',
                    'Tisco',
                    'Tuti',
                    'Yanque'
                ]
            ],
            // arequipa Condesuyos
            [
                'id' => 'P-40',
                'districts' =>
                [
                    'Andaray',
                    'Cayarani',
                    'Chichas',
                    'Chuquibamba',
                    'Iray',
                    'Rio Grande',
                    'Salamanca',
                    'Yanaquihua'
                ]
            ],
            // arequipa Islay
            [
                'id' => 'P-41',
                'districts' =>
                [
                    'Cocachacra',
                    'Dean Valdivia',
                    'Islay',
                    'Mejia',
                    'Mollendo',
                    'Punta de Bombon'
                ]
            ],
            // arequipa La Unión
            [
                'id' => 'P-42',
                'districts' =>
                [
                    'Alca',
                    'Charcana',
                    'Cotahuasi',
                    'Huaynacotas',
                    'Pampamarca',
                    'Puyca',
                    'Quechualla',
                    'Sayla',
                    'Tauría',
                    'Tomepampa',
                    'Toro'
                ]
            ],
            // ayacucho Cangallo
            [
                'id' => 'P-43',
                'districts' =>
                [
                    'Cangallo',
                    'Chuschi',
                    'Los Morochucos',
                    'Maria Parado de Bellido',
                    'Paras',
                    'Totos'
                ]
            ],
            // ayacucho Huamanga
            [
                'id' => 'P-44',
                'districts' =>
                [
                    'Acocro',
                    'Acos Vinchos',
                    'Ayacucho',
                    'Carmen Alto',
                    'Chiara',
                    'Jesús Nazareno',
                    'Ocros',
                    'Pacaycasa',
                    'Quinua',
                    'San Jose de Ticllas',
                    'San Juan Bautista',
                    'Santiago de Pischa',
                    'Socos',
                    'Tambillo',
                    'Vinchos',
                ]
            ],
            // ayacucho Huanca Sancos
            [
                'id' => 'P-45',
                'districts' =>
                [
                    'Carapo',
                    'Sacsamarca',
                    'Sancos',
                    'Santiago de Lucanamarca'
                ]
            ],
            // ayacucho Huanta
            [
                'id' => 'P-46',
                'districts' =>
                [
                    'Ayahuanco',
                    'Huamanguilla',
                    'Huanta',
                    'Iguain',
                    'Llochegua',
                    'Luricocha',
                    'Santillana',
                    'Sivia'
                ]
            ],
            // ayacucho La Mar
            [
                'id' => 'P-47',
                'districts' =>
                [
                    'Anchihuay',
                    'Anco',
                    'Ayna',
                    'Chilcas',
                    'Chungui',
                    'Luis Carranza',
                    'Oronccoy',
                    'Samugari',
                    'San Miguel',
                    'Santa Rosa',
                    'Tambo'
                ]
            ],
            // ayacucho Lucanas
            [
                'id' => 'P-48',
                'districts' =>
                [
                    'Aucara',
                    'Cabana Sur',
                    'Carmen Salcedo',
                    'Chaviña',
                    'Chipao',
                    'Huacuas',
                    'Laramate',
                    'Leoncio Prado',
                    'Llauta',
                    'Lucanas',
                    'Ocaña',
                    'Otoca',
                    'Puquio',
                    'Saisa',
                    'San Cristobal',
                    'San Juan',
                    'San Pedro',
                    'San Pedro de Palco',
                    'Sancos',
                    'Santa Ana de Huaycahuacho',
                    'Santa Lucía',
                ]
            ],
            // ayacucho Parinacochas
            [
                'id' => 'P-49',
                'districts' =>
                [
                    'Coracora',
                    'Chumpi',
                    'Coronel Castañeda',
                    'Pacapausa',
                    'Pullo',
                    'Puyusca',
                    'San Francisco de Ravacayco',
                    'Upahuacho'
                ]
            ],
            // ayacucho Paucar del Sara Sara
            [
                'id' => 'P-50',
                'districts' =>
                [
                    'Colta',
                    'Corculla',
                    'Lampa',
                    'Marcabamba',
                    'Oyolo',
                    'Pararca',
                    'Pausa',
                    'San Javier de Alpabamba',
                    'San Jose de Ushua',
                    'Sara Sara'
                ]
            ],
            // ayacucho Sucre
            [
                'id' => 'P-51',
                'districts' =>
                [
                    'Belén',
                    'Chalcos',
                    'Chilcayoc',
                    'Huacaña',
                    'Morcolla',
                    'Paico',
                    'Querobamba',
                    'San Pedro de Larcay',
                    'San Salvador de Quije',
                    'Santiago de Paucaray',
                    'Soras'
                ]
            ],
            // ayacucho Victor Fajardo
            [
                'id' => 'P-52',
                'districts' =>
                [
                    'Alcamenca',
                    'Apongo',
                    'Asquipata',
                    'Canaria',
                    'Cayara',
                    'Colca',
                    'Huamanquiquia',
                    'Huancapi',
                    'Huancaraylla',
                    'Huaya',
                    'Sarhua',
                    'Vilcanchos'
                ]
            ],
            // ayacucho Vilcas Huaman
            [
                'id' => 'P-53',
                'districts' =>
                [
                    'Accomarca',
                    'Carhuanca',
                    'Concepción',
                    'Huambalpa',
                    'Independencia',
                    'Saurama',
                    'Vilcashuamán',
                    'Vischongo'
                ]
            ],
            // cajamarca Cajabamba
            [
                'id' => 'P-54',
                'districts' =>
                [
                    'Cajabamba',
                    'Cachachi',
                    'Condebamba',
                    'Sitacocha'
                ]
            ],
            // cajamarca Cajamarca
            [
                'id' => 'P-55',
                'districts' =>
                [
                    'Asunción',
                    'Cajamarca',
                    'Chetilla',
                    'Cospán',
                    'La Encañada',
                    'Jesús',
                    'Llacanora',
                    'Los Baños del Inca',
                    'Magdalena',
                    'Matara',
                    'Namora',
                    'San Juan'
                ]
            ],
            // cajamarca Celendín
            [
                'id' => 'P-56',
                'districts' =>
                [
                    'Celendín',
                    'Chumuch',
                    'Cortegana',
                    'Huasmin',
                    'Jorge Chávez',
                    'José Gálvez',
                    'La Libertad de Pallán',
                    'Miguel Iglesias',
                    'Oxamarca',
                    'Sorochuco',
                    'Sucre',
                    'Utco'
                ]
            ],
            // cajamarca Chota
            [
                'id' => 'P-57',
                'districts' =>
                [
                    'Anguía',
                    'Chadín',
                    'Chalamarca',
                    'Chiguirip',
                    'Chimban',
                    'Choropampa',
                    'Cochabamba',
                    'Conchán',
                    'Chota',
                    'Huambos',
                    'Lajas',
                    'Llama',
                    'Miracosta',
                    'Paccha',
                    'Pion',
                    'Querocoto',
                    'San Juan de Licupis',
                    'Tacabamba',
                    'Tocmoche'
                ]
            ],
            // cajamarca Contumazá
            [
                'id' => 'P-58',
                'districts' =>
                [
                    'Chilete',
                    'Contumazá',
                    'Cupisnique',
                    'Guzmango',
                    'San Benito',
                    'Santa Cruz de Toledo',
                    'Tantarica',
                    'Yonán'
                ]
            ],
            // cajamarca Cutervo
            [
                'id' => 'P-59',
                'districts' =>
                [
                    'Callayuc',
                    'Choros',
                    'Cujillo',
                    'Cutervo',
                    'La Ramada',
                    'Pimpingos',
                    'Querocotillo',
                    'San Andrés de Cutervo',
                    'San Juan de Cutervo',
                    'San Luis de Lucma',
                    'Santa Cruz',
                    'Santo Domingo de la Capilla',
                    'Santo Tomas',
                    'Socota',
                    'Toribio Casanova'
                ]
            ],
            // cajamarca Hualgayoc
            [
                'id' => 'P-60',
                'districts' =>
                [
                    'Bambamarca',
                    'Chugur',
                    'Hualgayoc'
                ]
            ],
            // cajamarca Jaén
            [
                'id' => 'P-61',
                'districts' =>
                [
                    'Bellavista',
                    'Chontalí',
                    'Colasay',
                    'Huabal',
                    'Jaén',
                    'Las Pirias',
                    'Pomahuaca',
                    'Pucará',
                    'Sallique',
                    'San Felipe',
                    'San José del Alto',
                    'Santa Rosa'
                ]
            ],
            // cajamarca San Ignacio
            [
                'id' => 'P-62',
                'districts' =>
                [
                    'Chirinos',
                    'Huarango',
                    'La Coipa',
                    'Namballe',
                    'San Ignacio',
                    'San José de Lourdes',
                    'Tabaconas'
                ]
            ],
            // cajamarca San Marcos
            [
                'id' => 'P-63',
                'districts' =>
                [
                    'Chancay',
                    'Eduardo Villanueva',
                    'Gregorio Pita',
                    'Ichocán',
                    'José Manuel Quiroz',
                    'José Sabogal',
                    'Pedro Gálvez'
                ]
            ],
            // cajamarca San Miguel
            [
                'id' => 'P-64',
                'districts' =>
                [
                    'Bolívar',
                    'Calquis',
                    'Catilluc',
                    'El Prado',
                    'La Florida',
                    'Llapa',
                    'Nanchoc',
                    'Niepos',
                    'San Gregorio',
                    'San Miguel',
                    'San Silvestre de Cochan',
                    'Tongod',
                    'Unión Agua Blanca'
                ]
            ],
            // cajamarca San Pablo
            [
                'id' => 'P-65',
                'districts' =>
                [
                    'San Bernardino',
                    'San Luis',
                    'San Pablo',
                    'Tumbaden'
                ]
            ],
            // cajamarca Santa Cruz
            [
                'id' => 'P-66',
                'districts' =>
                [
                    'Andabamba',
                    'Catache',
                    'Chancaybaños',
                    'La Esperanza',
                    'Ninabamba',
                    'Pulan',
                    'Santa Cruz',
                    'Saucepampa',
                    'Sexi',
                    'Uticyacu',
                    'Yauyucan'
                ]
            ],
            // cusco Acomayo
            [
                'id' => 'P-67',
                'districts' =>
                [
                    'Acomayo',
                    'Acopia',
                    'Acos',
                    'Mosoc Llacta',
                    'Pomacanchi',
                    'Rondocan',
                    'Sangarara'
                ]
            ],
            // cusco Anta
            [
                'id' => 'P-68',
                'districts' =>
                [
                    'Ancahuasi',
                    'Anta',
                    'Cachimayo',
                    'Chinchaypujio',
                    'Huarocondo',
                    'Limatambo',
                    'Mollepata',
                    'Pucyura',
                    'Zurite'
                ]
            ],
            // cuzco Calca
            [
                'id' => 'P-69',
                'districts' =>
                [
                    'Calca',
                    'Coya',
                    'Lamay',
                    'Lares',
                    'Pisac',
                    'San Salvador',
                    'Taray',
                    'Yanatile'
                ]
            ],
            // cusco Canas
            [
                'id' => 'P-70',
                'districts' =>
                [
                    'Checca',
                    'Kunturkanki',
                    'Langui',
                    'Layo',
                    'Pampamarca',
                    'Quehue',
                    'Tupac Amaru',
                    'Yanaoca'
                ]
            ],
            // cusco Canchis
            [
                'id' => 'P-71',
                'districts' =>
                [
                    'Combapata',
                    'Marangani',
                    'Pitumarca',
                    'San Pablo',
                    'San Pedro',
                    'Sicuani',
                    'Tinta'
                ]
            ],
            // cusco Chumbivilcas
            [
                'id' => 'P-72',
                'districts' =>
                [
                    'Capacmarca',
                    'Chamaca',
                    'Colquemarca',
                    'Livitaca',
                    'Llusco',
                    'Quiñota',
                    'Velille'
                ]
            ],
            // cusco Cusco
            [
                'id' => 'P-73',
                'districts' =>
                [
                    'Ccorca',
                    'Cusco',
                    'Poroy',
                    'San Jerónimo',
                    'San Sebastian',
                    'Santiago',
                    'Saylla',
                    'Wanchaq'
                ]
            ],
            // cusco Espinar
            [
                'id' => 'P-74',
                'districts' =>
                [
                    'Alto Pichigua',
                    'Condoroma',
                    'Coporaque',
                    'Espinar',
                    'Ocoruro',
                    'Pallpata',
                    'Pichigua',
                    'Suyckutambo',
                    'Yauri'
                ]
            ],
            // cusco La Convención
            [
                'id' => 'P-75',
                'districts' =>
                [
                    'Echarati',
                    'Huayopata',
                    'Inkawasi',
                    'Kimbiri',
                    'Maranura',
                    'Megantoni',
                    'Ocobamba',
                    'Pichari',
                    'Quellouno',
                    'Santa Ana',
                    'Santa Teresa',
                    'Vilcabamba',
                    'Villa Kintiarina',
                    'Villa Virgen'
                ]
            ],
            // cuzco Paruro
            [
                'id' => 'P-76',
                'districts' =>
                [
                    'Accha',
                    'Ccapi',
                    'Colcha',
                    'Huanoquite',
                    'Omacha',
                    'Paccaritambo',
                    'Paruro',
                    'Pillpinto',
                    'Yaurisque'
                ]
            ],
            // cusco Paucartambo
            [
                'id' => 'P-77',
                'districts' =>
                [
                    'Caicay',
                    'Challabamba',
                    'Colquepata',
                    'Huancarani',
                    'Kosñipata',
                    'Paucartambo'
                ]
            ],
            // cusco Quispicanchi
            [
                'id' => 'P-78',
                'districts' =>
                [
                    'Andahuaylillas',
                    'Camanti',
                    'Ccarhuayo',
                    'Ccatca',
                    'Cusipata',
                    'Huaro',
                    'Lucre',
                    'Marcapata',
                    'Ocongate',
                    'Oropesa',
                    'Quiquijana',
                    'Urcos'
                ]
            ],
            // cusco Urubamba
            [
                'id' => 'P-79',
                'districts' =>
                [
                    'Chinchero',
                    'Huayllabamba',
                    'Machupicchu',
                    'Maras',
                    'Ollantaytambo',
                    'Urubamba',
                    'Yucay'
                ]
            ],
            // huancavelica Acobamba
            [
                'id' => 'P-80',
                'districts' =>
                [
                    'Acobamba',
                    'Andabamba',
                    'Anta',
                    'Caja',
                    'Marcas',
                    'Paucara',
                    'Pomacocha',
                    'Rosario'
                ]
            ],
            // huancavelica Angaraes
            [
                'id' => 'P-81',
                'districts' =>
                [
                    'Anchonga',
                    'Callanmarca',
                    'Ccochaccasa',
                    'Chincho',
                    'Congalla',
                    'Huanca Huanca',
                    'Huayllay Grande',
                    'Julcamarca',
                    'Lircay',
                    'San Antonio de Antaparco',
                    'Santo Tomas de Pata',
                    'Secclla'
                ]
            ],
            // huancavelica Castrovirreyna
            [
                'id' => 'P-82',
                'districts' =>
                [
                    'Arma',
                    'Aurahua',
                    'Capillas',
                    'Castrovirreyna',
                    'Chupamarca',
                    'Cocas',
                    'Huachos',
                    'Huamatambo',
                    'Mollepampa',
                    'San Juan',
                    'Santa Ana',
                    'Tantara',
                    'Ticrapo'
                ]
            ],
            // huancavelica Churcampa
            [
                'id' => 'P-83',
                'districts' =>
                [
                    'Anco',
                    'Chinchihuasi',
                    'Churcampa',
                    'Cosme',
                    'El Carmen',
                    'La Merced',
                    'Locroja',
                    'Pachamarca',
                    'Paucarbamba',
                    'San Miguel de Mayocc',
                    'San Pedro de Coris'
                ]
            ],
            // huancavelica Huancavelica
            [
                'id' => 'P-84',
                'districts' =>
                [
                    'Acobambilla',
                    'Acoria',
                    'Conayca',
                    'Cuenca',
                    'Huachocolpa',
                    'Huancavelica',
                    'Huando',
                    'Huayllahuara',
                    'Izcuchaca',
                    'Laria',
                    'Manta',
                    'Mariscal Cáceres',
                    'Moya',
                    'Nuevo Occoro',
                    'Palca',
                    'Pilchaca',
                    'Vilca',
                    'Yauli'
                ]
            ],
            // huancavelica Huaytará
            [
                'id' => 'P-85',
                'districts' =>
                [
                    'Ayavi',
                    'Córdova',
                    'Huayacundo Arma',
                    'Huaytará',
                    'Laramarca',
                    'Ocoyo',
                    'Pilpichaca',
                    'Querco',
                    'Quito-Arma',
                    'San Antonio de Cusicancha',
                    'San Francisco de Sangayaico',
                    'San Isidro',
                    'Santiago de Chocorvos',
                    'Santiago de Quirahuara',
                    'Santo Domingo de Capillas',
                    'Tambo'
                ]
            ],
            // huancavelica Tayacaja
            [
                'id' => 'P-86',
                'districts' =>
                [
                    'Acostambo',
                    'Acraquía',
                    'Ahuaycha',
                    'Andaymarca',
                    'Colcabamba',
                    'Daniel Hernández',
                    'Huachocolpa',
                    'Huaribamba',
                    'Ñahuimpuquio',
                    'Pampas',
                    'Pazos',
                    'Pichos',
                    'Quichuas',
                    'Quishuar',
                    'Roble',
                    'Salcabamba',
                    'Salcahuasi',
                    'San Marcos de Rocchac',
                    'Santiago de Tucuma',
                    'Surcubamba',
                    'Tintay Puncu'
                ]
            ],
            // huanuco Ambo
            [
                'id' => 'P-87',
                'districts' =>
                [
                    'Ambo',
                    'Cayna',
                    'Colpas',
                    'Conchamarca',
                    'Huacar',
                    'San Francisco',
                    'San Rafael',
                    'Tomay Kichwa'
                ]
            ],
            // huanuco Dos de Mayo
            [
                'id' => 'P-88',
                'districts' =>
                [
                    'Chuquis',
                    'La Unión',
                    'Marias',
                    'Pachas',
                    'Quivilla',
                    'Ripan',
                    'Shunqui',
                    'Sillapata',
                    'Yanas'
                ]
            ],
            // huanuco Huacaybamba
            [
                'id' => 'P-89',
                'districts' =>
                [
                    'Canchabamba',
                    'Cochabamba',
                    'Huacaybamba',
                    'Pinra'
                ]
            ],
            // huanuco Huamalíes
            [
                'id' => 'P-90',
                'districts' =>
                [
                    'Arancay',
                    'Chavín de Pariarca',
                    'Jacas Chico',
                    'Jircan',
                    'Llata',
                    'Miraflores',
                    'Monzón',
                    'Punchao',
                    'Puños',
                    'Singa',
                    'Tantamayo'
                ]
            ],
            // huanuco Huánuco
            [
                'id' => 'P-91',
                'districts' =>
                [
                    'Amarilis',
                    'Chinchao',
                    'Churubamba',
                    'Huánuco',
                    'Margos',
                    'Pillco Marca',
                    'Quisqui (Kichki)',
                    'San Francisco de Cayrán',
                    'San Pedro de Chaulán',
                    'Santa María del Valle',
                    'Yacus',
                    'Yarumayo'
                ]
            ],
            // huanuco Lauricocha
            [
                'id' => 'P-92',
                'districts' =>
                [
                    'Baños',
                    'Jesus',
                    'Jivia',
                    'Queropalca',
                    'Rondos',
                    'San Francisco de Asís',
                    'San Miguel de Cauri'
                ]
            ],
            // huanuco Leoncio Prado
            [
                'id' => 'P-93',
                'districts' =>
                [
                    'Daniel Alomía Robles',
                    'Hermilio Valdizán',
                    'José Crespo y Castillo',
                    'Luyando',
                    'Mariano Damaso Beraun',
                    'Pucayacu',
                    'Castillo Grande',
                    'Pueblo Nuevo',
                    'Rupa-Rupa'
                ]
            ],
            // huanuco Marañón
            [
                'id' => 'P-94',
                'districts' =>
                [
                    'Cholón',
                    'Huacrachuco',
                    'San Buenaventura',
                    'La Morada',
                    'Santa Rosa de Alto Yanajanca'
                ]
            ],
            // huanuco Pachitea
            [
                'id' => 'P-95',
                'districts' =>
                [
                    'Chaglla',
                    'Molino',
                    'Panao',
                    'Umari'
                ]
            ],
            // huanuco Puerto Inca
            [
                'id' => 'P-96',
                'districts' =>
                [
                    'Codo del Pozuzo',
                    'Honoria',
                    'Puerto Inca',
                    'Tournavista',
                    'Yuyapichis'
                ]
            ],
            // huanuco Yarowilca
            [
                'id' => 'P-97',
                'districts' =>
                [
                    'Aparicio Pomares',
                    'Cáhuac',
                    'Chacabamba',
                    'Chavinillo',
                    'Choras',
                    'Jacas Chico',
                    'Obas',
                    'Pampamarca'
                ]
            ],
            // ica Chincha
            [
                'id' => 'P-98',
                'districts' =>
                [
                    'Alto Laran',
                    'Chavín',
                    'Chincha Alta',
                    'Chincha Baja',
                    'El Carmen',
                    'Grocio Prado',
                    'Pueblo Nuevo',
                    'San Juan de Yanac',
                    'San Pedro de Huacarpana',
                    'Sunampe',
                    'Tambo de Mora'
                ]
            ],
            // ica Ica
            [
                'id' => 'P-99',
                'districts' =>
                [
                    'Ica',
                    'La Tinguiña',
                    'Los Aquijes',
                    'Ocucaje',
                    'Pachacutec',
                    'Parcona',
                    'Pueblo Nuevo',
                    'Salas',
                    'San José de Los Molinos',
                    'San Juan Bautista',
                    'Santiago',
                    'Subtanjalla',
                    'Tate',
                    'Yauca del Rosario'
                ]
            ],
            // ica Nazca
            [
                'id' => 'P-100',
                'districts' =>
                [
                    'Changuillo',
                    'El Ingenio',
                    'Marcona',
                    'Nazca',
                    'Vista Alegre'
                ]
            ],
            // ica Palpa
            [
                'id' => 'P-101',
                'districts' =>
                [
                    'Llipata',
                    'Palpa',
                    'Río Grande',
                    'Santa Cruz',
                    'Tibillo'
                ]
            ],
            // ica Pisco
            [
                'id' => 'P-102',
                'districts' =>
                [
                    'Huancano',
                    'Humay',
                    'Independencia',
                    'Paracas',
                    'Pisco',
                    'San Andrés',
                    'San Clemente',
                    'Tupac Amaru Inca'
                ]
            ],
            // junin Chanchamayo
            [
                'id' => 'P-103',
                'districts' =>
                [
                    'Chanchamayo',
                    'Perene',
                    'Pichanaqui',
                    'San Luis de Shuaro',
                    'San Ramón',
                    'Vitoc'
                ]
            ],
            // junin Chupaca
            [
                'id' => 'P-104',
                'districts' =>
                [
                    'Ahuac',
                    'Chongos Bajo',
                    'Chupaca',
                    'Huachac',
                    'Huamancaca Chico',
                    'San Juan de Iscos',
                    'San Juan de Jarpa',
                    'Tres de Diciembre',
                    'Yanacancha'
                ]
            ],
            // junin Concepción
            [
                'id' => 'P-105',
                'districts' =>
                [
                    'Aco',
                    'Andamarca',
                    'Chambara',
                    'Cochas',
                    'Comas',
                    'Concepción',
                    'Heroinas Toledo',
                    'Manzanares',
                    'Mariscal Castilla',
                    'Matahuasi',
                    'Mito',
                    'Nueve de Julio',
                    'Orcotuna',
                    'San José de Quero',
                    'Santa Rosa de Ocopa'
                ]
            ],
            // junin Huancayo
            [
                'id' => 'P-106',
                'districts' =>
                [
                    'Carhuacallanga',
                    'Chacapampa',
                    'Chicche',
                    'Chilca',
                    'Chongos Alto',
                    'Chupuro',
                    'Colca',
                    'Cullhuas',
                    'El Tambo',
                    'Huacrapuquio',
                    'Hualhuas',
                    'Huancan',
                    'Huancayo',
                    'Huasicancha',
                    'Huayucachi',
                    'Ingenio',
                    'Pariahuanca',
                    'Pilcomayo',
                    'Pucara',
                    'Quichuay',
                    'Quilcas',
                    'San Agustín',
                    'San Jerónimo de Tunan',
                    'Saño',
                    'Sapallanga',
                    'Sicaya',
                    'Viques'
                ]
            ],
            // junin Jauja
            [
                'id' => 'P-107',
                'districts' =>
                [
                    'Acolla',
                    'Apata',
                    'Ataura',
                    'Canchayllo',
                    'Curicaca',
                    'El Mantaro',
                    'Huamali',
                    'Huaripampa',
                    'Huertas',
                    'Janjaillo',
                    'Jauja',
                    'Julcán',
                    'Leonor Ordóñez',
                    'Llocllapampa',
                    'Marco',
                    'Masma',
                    'Masma Chicche',
                    'Molinos',
                    'Monobamba',
                    'Muqui',
                    'Muquiyauyo',
                    'Paca',
                    'Paccha',
                    'Pancan',
                    'Parco',
                    'Pomacancha',
                    'Ricran',
                    'San Lorenzo',
                    'San Pedro de Chunan',
                    'Sausa',
                    'Sincos',
                    'Tunan Marca',
                    'Yauli',
                    'Yauyos'
                ]
            ],
            // junin Junín
            [
                'id' => 'P-108',
                'districts' =>
                [
                    'Carhuamayo',
                    'Junín',
                    'Ondores',
                    'Ulcumayo'
                ]
            ],
            // junin Satipo
            [
                'id' => 'P-109',
                'districts' =>
                [
                    'Coviriali',
                    'Llaylla',
                    'Mazamari',
                    'Pampa Hermosa',
                    'Pangoa',
                    'Río Negro',
                    'Río Tambo',
                    'Satipo'
                ]
            ],
            // junin Tarma
            [
                'id' => 'P-110',
                'districts' => 
                [
                    'Acobamba',
                    'Huaricolca',
                    'Huasahuasi',
                    'La Unión',
                    'Palca',
                    'Palcamayo',
                    'San Pedro de Cajas',   
                    'Tapo',
                    'Tarma'
                ]
            ],
            // junin Yauli
            [
                'id' => 'P-111',
                'districts' => 
                [
                    'Chacapalpa',
                    'Huay-Huay',
                    'La Oroya',
                    'Marcapomacocha',
                    'Morococha',
                    'Paccha',
                    'Santa Barbara de Carhuacayan',
                    'Santa Rosa de Sacco',
                    'Suitucancha',
                    'Yauli'
                ]
            ],
            // la libertad Ascope
            [
                'id' => 'P-112',
                'districts' => 
                [
                    'Ascope',
                    'Casa Grande',
                    'Chicama',
                    'Chocope',
                    'Magdalena de Cao',
                    'Paiján',
                    'Rázuri',
                    'Santiago de Cao'
                ]
            ],
            // la libertad Bolívar
            [
                'id' => 'P-113',
                'districts' => 
                [
                    'Bambamarca',
                    'Bolívar',
                    'Condormarca',
                    'Longotea',
                    'Uchumarca',
                    'Ucuncha'
                ]
            ],
            // la libertad Chepén
            [
                'id' => 'P-114',
                'districts' => 
                [
                    'Chepén',
                    'Pacanga',
                    'Pueblo Nuevo'
                ]
            ],
            // la libertad Gran Chimú
            [
                'id' => 'P-115',
                'districts' => 
                [
                    'Cascas',
                    'Lucma',
                    'Marmot',
                    'Sayapullo'
                ]
            ],
            // la libertad Julcán
            [
                'id' => 'P-116',
                'districts' => 
                [
                    'Calamarca',
                    'Carabamba',
                    'Huaso',
                    'Julcán'
                ]
            ],
            // la libertad Otuzco
            [
                'id' => 'P-117',
                'districts' => 
                [
                    'Agallpampa',
                    'Charat',
                    'Huaranchal',
                    'La Cuesta',
                    'Mache',
                    'Otuzco',
                    'Paranday',
                    'Salpo',
                    'Sinsicap',
                    'Usquil'
                ]
            ],
            // la libertad Pacasmayo
            [
                'id' => 'P-118',
                'districts' => 
                [
                    'Guadalupe',
                    'Jequetepeque',
                    'Pacasmayo',
                    'San José',
                    'San Pedro de Lloc'
                ]
            ],
            // la libertad Pataz
            [
                'id' => 'P-119',
                'districts' => 
                [
                    'Buldibuyo',
                    'Chillia',
                    'Huancaspata',
                    'Huaylillas',
                    'Huayo',
                    'Ongón',
                    'Parcoy',
                    'Pataz',
                    'Pias',
                    'Santiago de Challas',
                    'Taurija',
                    'Tayabamba',
                    'Urpay'
                ]
            ],
            // la libertad Sánchez Carrión
            [
                'id' => 'P-120',
                'districts' => 
                [
                    'Chugay',
                    'Cochorco',
                    'Curgos',
                    'Huamachuco',
                    'Marcabal',
                    'Sanagorán',
                    'Sarin',
                    'Sartimbamba'
                ]
            ],
            // la libertad Santiago de Chuco
            [
                'id' => 'P-121',
                'districts' => 
                [
                    'Angasmarca',
                    'Cachicadán',
                    'Mollebamba',
                    'Mollepata',
                    'Quiruvilca',
                    'Santa Cruz de Chuca',
                    'Santiago de Chuco',
                    'Sitabamba'
                ]
            ],
            // la libertad Trujillo
            [
                'id' => 'P-122',
                'districts' => 
                [
                    'El Porvenir',
                    'Florencia de Mora',
                    'Huanchaco',
                    'La Esperanza',
                    'Laredo',
                    'Moche',
                    'Poroto',
                    'Salaverry',
                    'Simbal',
                    'Trujillo',
                    'Victor Larco Herrera'
                ]
            ],
            // la libertad Viru
            [
                'id' => 'P-123',
                'districts' => 
                [
                    'Chao',
                    'Guadalupito',
                    'Virú'
                ]
            ],
            // lambayeque Chiclayo
            [
                'id' => 'P-124',
                'districts' => 
                [
                    'Cayaltí',
                    'Chiclayo',
                    'Chongoyape',
                    'Eten',
                    'Eten Puerto',
                    'José Leonardo Ortiz',
                    'La Victoria',
                    'Lagunas',
                    'Monsefú',
                    'Nueva Arica',
                    'Oyotún',
                    'Pátapo',
                    'Picsi',
                    'Pimentel',
                    'Reque',
                    'Santa Rosa',
                    'Saña',
                    'Pomalca',
                    'Pucalá',
                    'Tumán'
                ]
            ],
            // lambayeque Ferreñafe
            [
                'id' => 'P-125',
                'districts' => 
                [
                    'Cañaris',
                    'Ferreñafe',
                    'Incahuasi',
                    'Manuel Antonio Mesones Muro',
                    'Pítipo',
                    'Pueblo Nuevo'
                ]
            ],
            // lambayeque Lambayeque
            [
                'id' => 'P-126',
                'districts' => 
                [
                    'Chochope',
                    'Illimo',
                    'Jayanca',
                    'Lambayeque',
                    'Mochumí',
                    'Morrope',
                    'Motupe',
                    'Olmos',
                    'Pacora',
                    'Salas',
                    'San José',
                    'Túcume'
                ]
            ],
            // lima Barranca
            [
                'id' => 'P-127',
                'districts' => 
                [
                    'Barranca',
                    'Paramonga',
                    'Pativilca',
                    'Supe',
                    'Supe Puerto'
                ]
            ],
            // lima Cajatambo
            [
                'id' => 'P-128',
                'districts' => 
                [
                    'Cajatambo',
                    'Copa',
                    'Gorgor',
                    'Huancapon',
                    'Manas',
                    'Cahuapampa'
                ]
            ],
            // lima Callao
            [
                'id' => 'P-129',
                'districts' => 
                [
                    'Bellavista',
                    'Callao',
                    'Carmen de la Legua Reynoso',
                    'La Perla',
                    'La Punta',
                    'Mi Perú',
                    'Ventanilla'
                ]
            ],
            // lima Canta
            [
                'id' => 'P-130',
                'districts' => 
                [
                    'Arahuay',
                    'Canta',
                    'Huamantanga',
                    'Huaros',
                    'Lachaqui',
                    'San Buenaventura',
                    'Santa Rosa de Quives'
                ]
            ],
            // lima Cañete
            [
                'id' => 'P-131',
                'districts' => 
                [
                    'Asia',
                    'Calango',
                    'Cerro Azul',
                    'Chilca',
                    'Coayllo',
                    'Imperial',
                    'Lunahuaná',
                    'Mala',
                    'Nuevo Imperial',
                    'Pacarán',
                    'Quilmaná',
                    'San Antonio',
                    'San Luis',
                    'San Vicente de Cañete',
                    'Santa Cruz de Flores',
                    'Zúñiga'
                ]
            ],
            // lima Huaral
            [
                'id' => 'P-132',
                'districts' => 
                [
                    'Atavillos Alto',
                    'Atavillos Bajo',
                    'Aucallama',
                    'Chancay',
                    'Huaral',
                    'Ihuari',
                    'Lampian',
                    'Pacaraos',
                    'San Miguel de Acos',
                    'Santa Cruz de Andamarca',
                    'Sumbilca',
                    'Veintisiete de Noviembre'
                ]
            ],
            // lima Huarochirí
            [
                'id' => 'P-133',
                'districts' => 
                [
                    'Antioquía',
                    'Callahuanca',
                    'Carampoma',
                    'Chicla',
                    'Cuenca',
                    'Huachupampa',
                    'Huanza',
                    'Huarochirí',
                    'Lahuaytambo',
                    'Langa',
                    'Laraos',
                    'Mariatana',
                    'Matucana',
                    'Ricardo Palma',
                    'San Andrés de Tupicocha',
                    'San Antonio',
                    'San Bartolomé',
                    'San Damián',
                    'San Juan de Iris',
                    'San Juan de Tantaranche',
                    'San Lorenzo de Quinti',
                    'San Mateo',
                    'San Mateo de Otao',
                    'San Pedro de Casta',
                    'San Pedro de Huancayre',
                    'Sangallaya',
                    'Santa Cruz de Cocachacra',
                    'Santa Eulalia',
                    'Santiago de Anchucaya',
                    'Santiago de Tuna',
                    'Santo Domingo de los Olleros',
                    'Surco'
                ]
            ],
            // lima Huaura
            [
                'id' => 'P-134',
                'districts' => 
                [
                    'Ámbar',
                    'Caleta de Carquín',
                    'Checras',
                    'Huacho',
                    'Hualmay',
                    'Huaura',
                    'Leoncio Prado',
                    'Paccho',
                    'Santa Leonor',
                    'Santa María',
                    'Sayan',
                    'Végueta'
                ]
            ],
            // lima Lima
            [
                'id' => 'P-135',
                'districts' => 
                [
                    'Ancón',
                    'Ate',
                    'Barranco',
                    'Breña',
                    'Carabayllo',
                    'Chaclacayo',
                    'Chorrillos',
                    'Cieneguilla',
                    'Comas',
                    'El Agustino',
                    'Huaycán',
                    'Independencia',
                    'Jesús María',
                    'La Molina',
                    'La Victoria',
                    'Lima',
                    'Lince',
                    'Los Olivos',
                    'Lurigancho-Chosica',
                    'Lurín',
                    'Magdalena del Mar',
                    'Miraflores',
                    'Pachacamac',
                    'Pucusana',
                    'Pueblo Libre',
                    'Puente Piedra',
                    'Punta Hermosa',
                    'Punta Negra',
                    'Rímac',
                    'San Bartolo',
                    'San Borja',
                    'San Isidro',
                    'San Juan de Lurigancho',
                    'San Juan de Miraflores',
                    'San Luis',
                    'San Martín de Porres',
                    'San Miguel',
                    'Santa Anita',
                    'Santa María del Mar',
                    'Santa Rosa',
                    'Santiago de Surco',
                    'Surquillo',
                    'Villa El Salvador',
                    'Villa María del Triunfo'
                ]
            ],
            // lima Oyón
            [
                'id' => 'P-136',
                'districts' => 
                [
                    'Andajes',
                    'Caujul',
                    'Cochamarca',
                    'Naván',
                    'Oyón',
                    'Pachangara'
                ]
            ],
            // lima Yauyos
            [
                'id' => 'P-137',
                'districts' => 
                [
                    'Alis',
                    'Allauca',
                    'Ayaviri',
                    'Azángaro',
                    'Cacra',
                    'Carania',
                    'Catahuasi',
                    'Chocos',
                    'Cochas',
                    'Colonia',
                    'Hongos',
                    'Huampara',
                    'Huancaya',
                    'Huangáscar',
                    'Huantán',
                    'Huañec',
                    'Laraos',
                    'Lincha',
                    'Madeán',
                    'Miraflores',
                    'Omas',
                    'Putinza',
                    'Quinches',
                    'Quinocay',
                    'San Joaquín',
                    'San Pedro de Pilas',
                    'Tanta',
                    'Tauripampa',
                    'Tomas',
                    'Tupe',
                    'Viñac',
                    'Vitis',
                    'Yauyos'
                ]
            ],
            // loreto Alto Amazonas
            [
                'id' => 'P-138',
                'districts' => 
                [
                    'Barranca',
                    'Cahuapanas',
                    'Jeberos',
                    'Lagunas',
                    'Manseriche',
                    'Morona',
                    'Pastaza',
                    'Santa Cruz',
                    'Teniente Cesar López Rojas',
                    'Yurimaguas'
                ]
            ],
            // loreto Datem del Marañón
            [
                'id' => 'P-139',
                'districts' => 
                [
                    'Andoas',
                    'Barranca',
                    'Cahuapanas',
                    'Jeberos',
                    'Lagunas',
                    'Manseriche',
                    'Morona',
                    'Pastaza',
                    'Santa Cruz',
                    'Teniente Cesar López Rojas',
                    'Yurimaguas'
                ]
            ],
            // loreto Loreto
            [
                'id' => 'P-140',
                'districts' => 
                [
                    'Nauta',
                    'Parinari',
                    'Tigre',
                    'Trompeteros',
                    'Urarinas'
                ]
            ],
            // loreto Mariscal Ramón Castilla
            [
                'id' => 'P-141',
                'districts' => 
                [
                    'Pebas',
                    'Ramon Castilla',
                    'San Pablo',
                    'Yavari'
                ]
            ],
            // loreto Maynas
            [
                'id' => 'P-142',
                'districts' => 
                [
                    'Alto Nanay',
                    'Belén',
                    'Fernando Lores',
                    'Indiana',
                    'Iquitos',
                    'Las Amazonas',
                    'Mazán',
                    'Napo',
                    'Punchana',
                    'San Juan Bautista',
                    'Torres Causana',
                ]
            ],
            // loreto Requena
            [
                'id' => 'P-143',
                'districts' => 
                [
                    'Alto Tapiche',
                    'Capelo',
                    'Emilio San Martín',
                    'Maquía',
                    'Puinahua',
                    'Requena',
                    'Saquena',
                    'Soplin',
                    'Tapiche',
                    'Jenaro Herrera',
                    'Yaquerana'
                ]
            ],
            // loreto Ucayali
            [
                'id' => 'P-144',
                'districts' => 
                [
                    'Contamana',
                    'Inahuaya',
                    'Padre Márquez',
                    'Pampa Hermosa',
                    'Sarayacu',
                    'Vargas Guerra'
                ]
            ],
            // madre de dios Manu
            [
                'id' => 'P-145',
                'districts' => 
                [
                    'Fitzcarrald',
                    'Huepetuhe',
                    'Madre de Dios',
                    'Manu'
                ]
            ],
            // madre de dios Tahuamanu
            [
                'id' => 'P-146',
                'districts' => 
                [
                    'Iberia',
                    'Iñapari',
                    'Tahuamanu'
                ]
            ],
            // madre de dios Tambopata
            [
                'id' => 'P-147',
                'districts' => 
                [
                    'Inambari',
                    'Laberinto',
                    'Las Piedras',
                    'Tambopata'
                ]
            ],
            // moquegua General Sánchez Cerro
            [
                'id' => 'P-148',
                'districts' => 
                [
                    'Chojata',
                    'Coalaque',
                    'Ichuña',
                    'La Capilla',
                    'Lloque',
                    'Matalaque',
                    'Omate',
                    'Puquina',
                    'Quinistaquillas',
                    'Ubinas',
                    'Yunga'
                ]
            ],
            // moquegua Ilo
            [
                'id' => 'P-149',
                'districts' => 
                [
                    'El Algarrobal',
                    'Ilo',
                    'Pacocha'
                ]
            ],
            // moquegua Mariscal Nieto
            [
                'id' => 'P-150',
                'districts' => 
                [
                    'Carumas',
                    'Cuchumbaya',
                    'Moquegua',
                    'Samegua',
                    'San Cristóbal',
                    'Torata'
                ]
            ],
            // pasco Daniel Alcides Carrión
            [
                'id' => 'P-151',
                'districts' => 
                [
                    'Chacayán',
                    'Goyllarisquizga',
                    'Paucar',
                    'San Pedro de Pillao',
                    'Santa Ana de Tusi',
                    'Tapuc',
                    'Vilcabamba',
                    'Yanahuanca'
                ]
            ],
            // pasco Oxapampa
            [
                'id' => 'P-152',
                'districts' => 
                [
                    'Chontabamba',
                    'Huancabamba',
                    'Oxapampa',
                    'Palcazu',
                    'Pozuzo',
                    'Puerto Bermúdez',
                    'Villa Rica'
                ]
            ],
            // pasco Pasco
            [
                'id' => 'P-153',
                'districts' => 
                [
                    'Chaupimarca',
                    'Huachón',
                    'Huariaca',
                    'Huayllay',
                    'Ninacaca',
                    'Pallanchacra',
                    'Paucartambo',
                    'San Francisco de Asís de Yarusyacán',
                    'Simón Bolívar',
                    'Ticlacayán',
                    'Tinyahuarco',
                    'Vicco',
                    'Yanacancha'
                ]
            ],
            // piura Ayabaca
            [
                'id' => 'P-154',
                'districts' => 
                [
                    'Ayabaca',
                    'Frias',
                    'Jilili',
                    'Lagunas',
                    'Montero',
                    'Pacaipampa',
                    'Paimas',
                    'Sapillica',
                    'Sicchez',
                    'Suyo'
                ]
            ],
            // piura Huancabamba
            [
                'id' => 'P-155',
                'districts' => 
                [
                    'Canchaque',
                    'El Carmen de la Frontera',
                    'Huancabamba',
                    'Huarmaca',
                    'Lalaquiz',
                    'San Miguel de El Faique',
                    'Sondor',
                    'Sondorillo'
                ]
            ],
            // piura Morropón
            [
                'id' => 'P-156',
                'districts' => 
                [
                    'Buenos Aires',
                    'Chalaco',
                    'Chulucanas',
                    'La Matanza',
                    'Morropón',
                    'Salitral',
                    'San Juan de Bigote',
                    'Santa Catalina de Mossa',
                    'Santo Domingo',
                    'Yamango'
                ]
            ],
            // piura Paita
            [
                'id' => 'P-157',
                'districts' => 
                [
                    'Amotape',
                    'Arenal',
                    'Colán',
                    'La Huaca',
                    'Paita',
                    'Tamarindo',
                    'Vichayal'
                ]
            ],
            // piura Piura
            [
                'id' => 'P-158',
                'districts' => 
                [
                    'Castilla',
                    'Catacaos',
                    'Cura Mori',
                    'El Tallán',
                    'La Arena',
                    'La Unión',
                    'Las Lomas',
                    'Piura',
                    'Tambo Grande'
                ]
            ],
            // piura Sechura
            [
                'id' => 'P-159',
                'districts' => 
                [
                    'Bellavista de la Unión',
                    'Bernal',
                    'Cristo Nos Valga',
                    'Rinconada Llicuar',
                    'Sechura',
                    'Vice'
                ]
            ],
            // piura Sullana
            [
                'id' => 'P-160',
                'districts' => 
                [
                    'Bellavista',
                    'Ignacio Escudero',
                    'Lancones',
                    'Marcavelica',
                    'Miguel Checa',
                    'Querecotillo',
                    'Salitral',
                    'Sullana'
                ]
            ],
            // piura Talara
            [
                'id' => 'P-161',
                'districts' => 
                [
                    'El Alto',
                    'La Brea',
                    'Lobitos',
                    'Los Órganos',
                    'Máncora',
                    'Pariñas',
                ]
            ],
            // puno Azángaro
            [
                'id' => 'P-162',
                'districts' => 
                [
                    'Achaya',
                    'Arapa',
                    'Asillo',
                    'Azángaro',
                    'Caminaca',
                    'Chupa',
                    'José Domingo Choquehuanca',
                    'Muñani',
                    'Potoni',
                    'Saman',
                    'San Antón',
                    'San José',
                    'San Juan de Salinas',
                    'Santiago de Pupuja',
                    'Tirapata'
                ]
            ],
            // puno Carabaya
            [
                'id' => 'P-163',
                'districts' => 
                [
                    'Ajoyani',
                    'Ayapata',
                    'Coasa',
                    'Corani',
                    'Crucero',
                    'Ituata',
                    'Macusani',
                    'Ollachea',
                    'San Gabán',
                    'Usicayos'
                ]
            ],
            // puno Chucuito
            [
                'id' => 'P-164',
                'districts' => 
                [
                    'Desaguadero',
                    'Huacullani',
                    'Juli',
                    'Kelluyo',
                    'Pisacoma',
                    'Pomata',
                    'Zepita'
                ]
            ],
            // puno El Collao
            [
                'id' => 'P-165',
                'districts' => 
                [
                    'Capazo',
                    'Conduriri',
                    'Ilave',
                    'Pilcuyo',
                    'Santa Rosa'
                ]
            ],
            // puno Huancané
            [
                'id' => 'P-166',
                'districts' => 
                [
                    'Cojata',
                    'Huancané',
                    'Huatasani',
                    'Inchupalla',
                    'Pusi',
                    'Rosaspata',
                    'Taraco',
                    'Vilque Chico'
                ]
            ],
            // puno Lampa
            [
                'id' => 'P-167',
                'districts' => 
                [
                    'Cabanilla',
                    'Calapuja',
                    'Lampa',
                    'Nicasio',
                    'Ocuviri',
                    'Palca',
                    'Paratia',
                    'Pucará',
                    'Santa Lucía',
                    'Vilavila'
                ]
            ],
            // puno Melgar
            [
                'id' => 'P-168',
                'districts' => 
                [
                    'Antauta',
                    'Ayaviri',
                    'Cupi',
                    'Llalli',
                    'Macari',
                    'Nuñoa',
                    'Orurillo',
                    'Santa Rosa',
                    'Umachiri'
                ]
            ],
            // puno Moho
            [
                'id' => 'P-169',
                'districts' => 
                [
                    'Conima',
                    'Huayrapata',
                    'Moho',
                    'Tilali'
                ]
            ],
            // puno Puno
            [
                'id' => 'P-170',
                'districts' => 
                [
                    'Acora',
                    'Amantani',
                    'Atuncolla',
                    'Capachica',
                    'Chucuito',
                    'Coata',
                    'Huata',
                    'Mañazo',
                    'Paucarcolla',
                    'Pichacani',
                    'Plateria',
                    'San Antonio',
                    'Tiquillaca',
                    'Vilque'
                ]
            ],
            // puno San Antonio de Putina
            [
                'id' => 'P-171',
                'districts' => 
                [
                    'Ananea',
                    'Pedro Vilca Apaza',
                    'Putina',
                    'Quilcapuncu',
                    'Sina'
                ]
            ],
            // puno San Román
            [
                'id' => 'P-172',
                'districts' => 
                [
                    'Cabana',
                    'Cabanillas',
                    'Caracoto',
                    'Juliaca',
                    'San Miguel'
                ]
            ],
            // puno Sandia
            [
                'id' => 'P-173',
                'districts' => 
                [
                    'Alto Inambari',
                    'Cuyocuyo',
                    'Limbani',
                    'Patambuco',
                    'Phara',
                    'Quiaca',
                    'San Juan del Oro',
                    'Sandia',
                    'Yanahuaya'
                ]
            ],
            // puno Yunguyo
            [
                'id' => 'P-174',
                'districts' => 
                [
                    'Anapia',
                    'Copani',
                    'Cuturapi',
                    'Ollaraya',
                    'Tinicachi',
                    'Unicachi',
                    'Yunguyo'
                ]
            ],
            // san martín Bellavista
            [
                'id' => 'P-175',
                'districts' => 
                [
                    'Alto Biavo',
                    'Bajo Biavo',
                    'Bellavista',
                    'Huallaga',
                    'San Pablo',
                    'San Rafael'
                ]
            ],
            // san martín El Dorado
            [
                'id' => 'P-176',
                'districts' => 
                [
                    'Agua Blanca',
                    'San José de Sisa',
                    'San Martín',
                    'Santa Rosa',
                    'Shatoja'
                ]
            ],
            // san martín Huallaga
            [
                'id' => 'P-177',
                'districts' => 
                [
                    'Alto Saposoa',
                    'El Eslabón',   
                    'Piscoyacu',
                    'Sacanche',
                    'Saposoa',
                    'Tingo de Saposoa'
                ]
            ],
            // san martín Lamas
            [
                'id' => 'P-178',
                'districts' => 
                [
                    'Alonso de Alvarado',
                    'Barranquita',
                    'Caynarachi',
                    'Cuñumbuqui',
                    'Lamas',
                    'Pinto Recodo',
                    'Rumisapa',
                    'San Roque de Cumbaza',
                    'Shanao',
                    'Tabalosos',
                    'Zapatero'
                ]
            ],
            // san martín Mariscal Cáceres
            [
                'id' => 'P-179',
                'districts' => 
                [
                    'Campanilla',
                    'Huicungo',
                    'Juanjuí',
                    'Pachiza',
                    'Pajarillo'
                ]
            ],
            // san martín Moyobamba
            [
                'id' => 'P-180',
                'districts' => 
                [
                    'Calzada',
                    'Habana',
                    'Jepelacio',
                    'Moyobamba',
                    'Soritor',
                    'Yantalo'
                ]
            ],
            // san martín Picota
            [
                'id' => 'P-181',
                'districts' => 
                [
                    'Buenos Aires',
                    'Caspisapa',
                    'Picota',
                    'Pilluana',
                    'Pucacaca',
                    'San Cristóbal',
                    'San Hilarión',
                    'Shamboyacu',
                    'Tingo de Ponasa',
                    'Tres Unidos'
                ]
            ],
            // san martín Rioja
            [
                'id' => 'P-182',
                'districts' => 
                [
                    'Awajún',
                    'Elias Soplin Vargas',
                    'Nueva Cajamarca',
                    'Pardo Miguel',
                    'Posic',
                    'Rioja',
                    'San Fernando',
                    'Yorongos',
                    'Yuracyacu'
                ]
            ],
            // san martín San Martín
            [
                'id' => 'P-183',
                'districts' => 
                [
                    'Alberto Leveau',
                    'Cacatachi',
                    'Chazuta',
                    'Chipurana',
                    'El Porvenir',
                    'Huimbayoc',
                    'Juan Guerra',
                    'La Banda de Shilcayo',
                    'Morales',
                    'Papaplaya',
                    'San Antonio',
                    'Sauce',
                    'Shapaja',
                    'Tarapoto'
                ]
            ],
            // san martín Tocache
            [
                'id' => 'P-184',
                'districts' => 
                [
                    'Nuevo Progreso',
                    'Pólvora',
                    'Shunte',
                    'Tocache',
                    'Uchiza'
                ]
            ],
            // tacna Candarave
            [
                'id' => 'P-185',
                'districts' => 
                [
                    'Cairani',
                    'Camilaca',
                    'Candarave',
                    'Curibaya',
                    'Huanuara',
                    'Quilahuani'
                ]
            ],
            // tacna Jorge Basadre
            [
                'id' => 'P-186',
                'districts' => 
                [
                    'Ilabaya',
                    'Ite',
                    'Locumba'
                ]
            ],
            // tacna Tacna
            [
                'id' => 'P-187',
                'districts' => 
                [
                    'Alto de la Alianza',
                    'Calana',
                    'Ciudad Nueva',
                    'Inclán',
                    'Pachía',
                    'Palca',
                    'Pocollay',
                    'Sama',
                    'Tacna'
                ]
            ],
            // tacna Tarata
            [
                'id' => 'P-188',
                'districts' => 
                [
                    'Estique',
                    'Estique-Pampa',
                    'Héroes Albarracín',
                    'Sitajara',
                    'Susapaya',
                    'Tarata',
                    'Tarucachi',
                    'Ticaco'
                ]
            ],
            // tumbes Contralmirante Villar
            [
                'id' => 'P-189',
                'districts' => 
                [
                    'Casitas',
                    'Zorritos'
                ]
            ],
            // tumbes Tumbes
            [
                'id' => 'P-190',
                'districts' => 
                [
                    'Corrales',
                    'La Cruz',
                    'Pampas de Hospital',
                    'San Jacinto',
                    'San Juan de la Virgen',
                    'Tumbes'
                ]
            ],
            // tumbes Zarumilla
            [
                'id' => 'P-191',
                'districts' => 
                [
                    'Aguas Verdes',
                    'Matapalo',
                    'Papayal',
                    'Zarumilla'
                ]
            ],
            // ucayali Atalaya
            [
                'id' => 'P-192',
                'districts' => 
                [
                    'Raymondi',
                    'Sepahua',
                    'Tahuania',
                    'Yurúa'
                ]
            ],
            // ucayali Coronel Portillo
            [
                'id' => 'P-193',
                'districts' => 
                [
                    'Calleria',
                    'Campoverde',
                    'Iparía',
                    'Masisea',
                    'Nueva Requena',
                    'Yarinacocha'
                ]
            ],
            // ucayali Padre Abad
            [
                'id' => 'P-194',
                'districts' => 
                [
                    'Alexander Von Humboldt',
                    'Curimaná',
                    'Irázola',
                    'Neshuya',
                    'Padre Abad'
                ]
            ],
            // ucayali Purús
            [
                'id' => 'P-195',
                'districts' => 
                [
                    'Purús'
                ]
            ]
        ];

        $count = 1;
        foreach ($provinces as $province) 
        {
            foreach ($province['districts'] as $district) 
            {
                District::create
                ([
                    'id' => 'D-' . $count,
                    'name' => $district,
                    'province_id' => $province['id']
                ]);

                $count++;
            }
        }
    }
}

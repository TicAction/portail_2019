<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 53,
                'firstname' => 'Étienne',
                'lastname' => 'Dolbec',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:41',
                'updated_at' => '2018-10-22 20:09:41',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Nathan',
                'lastname' => 'Forest-Stébenne',
                'user_id' => 2,
                'created_at' => '2018-10-18 00:32:50',
                'updated_at' => '2018-10-18 00:32:50',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Jimmy',
                'lastname' => 'Gagnon',
                'user_id' => 2,
                'created_at' => '2018-10-18 00:32:57',
                'updated_at' => '2018-10-18 00:32:57',
            ),
            3 => 
            array (
                'id' => 24,
                'firstname' => 'Alexis',
                'lastname' => 'Beaudoin',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:03:40',
                'updated_at' => '2018-10-22 20:03:40',
            ),
            4 => 
            array (
                'id' => 6,
                'firstname' => 'Émilie',
                'lastname' => 'Gelesko',
                'user_id' => 2,
                'created_at' => '2018-10-18 02:21:04',
                'updated_at' => '2018-10-18 02:21:04',
            ),
            5 => 
            array (
                'id' => 7,
                'firstname' => 'Élie',
                'lastname' => 'Hamel',
                'user_id' => 2,
                'created_at' => '2018-10-18 02:21:17',
                'updated_at' => '2018-10-18 02:21:17',
            ),
            6 => 
            array (
                'id' => 8,
                'firstname' => 'Emrick',
                'lastname' => 'Spina',
                'user_id' => 2,
                'created_at' => '2018-10-18 02:33:43',
                'updated_at' => '2018-10-18 02:33:43',
            ),
            7 => 
            array (
                'id' => 25,
                'firstname' => 'Mya',
                'lastname' => 'Belval',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:03:45',
                'updated_at' => '2018-10-22 20:03:45',
            ),
            8 => 
            array (
                'id' => 10,
                'firstname' => 'Charlotte',
                'lastname' => 'Hébert',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:03:40',
                'updated_at' => '2018-10-22 18:03:40',
            ),
            9 => 
            array (
                'id' => 11,
                'firstname' => 'Thomas',
                'lastname' => 'Jeannotte-Dion',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:03:52',
                'updated_at' => '2018-10-22 18:03:52',
            ),
            10 => 
            array (
                'id' => 12,
                'firstname' => 'Jean-Félix',
                'lastname' => 'Lachance',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:00',
                'updated_at' => '2018-10-22 18:04:00',
            ),
            11 => 
            array (
                'id' => 13,
                'firstname' => 'Laurélie',
                'lastname' => 'Lebrun',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:13',
                'updated_at' => '2018-10-22 18:04:13',
            ),
            12 => 
            array (
                'id' => 14,
                'firstname' => 'Gabrielle',
                'lastname' => 'Léonard',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:27',
                'updated_at' => '2018-10-22 18:04:27',
            ),
            13 => 
            array (
                'id' => 15,
                'firstname' => 'Jules',
                'lastname' => 'Loncol-Leblanc',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:37',
                'updated_at' => '2018-10-22 18:04:37',
            ),
            14 => 
            array (
                'id' => 16,
                'firstname' => 'Amélia',
                'lastname' => 'Potvin',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:47',
                'updated_at' => '2018-10-22 18:04:47',
            ),
            15 => 
            array (
                'id' => 17,
                'firstname' => 'Raphaël',
                'lastname' => 'Rajotte',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:04:57',
                'updated_at' => '2018-10-22 18:04:57',
            ),
            16 => 
            array (
                'id' => 18,
                'firstname' => 'Maëlie',
                'lastname' => 'Raymond',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:05:17',
                'updated_at' => '2018-10-22 18:05:17',
            ),
            17 => 
            array (
                'id' => 19,
                'firstname' => 'Laurianne',
                'lastname' => 'Reid',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:05:26',
                'updated_at' => '2018-10-22 18:05:26',
            ),
            18 => 
            array (
                'id' => 20,
                'firstname' => 'Michel',
                'lastname' => 'Riendeau',
                'user_id' => 2,
                'created_at' => '2018-10-22 18:05:36',
                'updated_at' => '2018-10-22 18:05:36',
            ),
            19 => 
            array (
                'id' => 23,
                'firstname' => 'Antoine',
                'lastname' => 'Barceloux',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:03:32',
                'updated_at' => '2018-10-22 20:03:32',
            ),
            20 => 
            array (
                'id' => 26,
                'firstname' => 'Molly',
                'lastname' => 'Blais-Nadeau',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:03:55',
                'updated_at' => '2018-10-22 20:03:55',
            ),
            21 => 
            array (
                'id' => 27,
                'firstname' => 'Léonie',
                'lastname' => 'Bouthillette',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:04:09',
                'updated_at' => '2018-10-22 20:04:09',
            ),
            22 => 
            array (
                'id' => 28,
                'firstname' => 'Ludovyck',
                'lastname' => 'Brodeur',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:04:17',
                'updated_at' => '2018-10-22 20:04:17',
            ),
            23 => 
            array (
                'id' => 29,
                'firstname' => 'Magalie',
                'lastname' => 'Deschênes',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:04:40',
                'updated_at' => '2018-10-22 20:04:40',
            ),
            24 => 
            array (
                'id' => 30,
                'firstname' => 'Junior',
                'lastname' => 'Fournier-Vig',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:04:59',
                'updated_at' => '2018-10-22 20:04:59',
            ),
            25 => 
            array (
                'id' => 31,
                'firstname' => 'Ariane',
                'lastname' => 'Gelesko',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:04',
                'updated_at' => '2018-10-22 20:05:04',
            ),
            26 => 
            array (
                'id' => 32,
                'firstname' => 'Mikaël',
                'lastname' => 'Gelesko',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:12',
                'updated_at' => '2018-10-22 20:05:12',
            ),
            27 => 
            array (
                'id' => 33,
                'firstname' => 'Livia',
                'lastname' => 'Girard',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:21',
                'updated_at' => '2018-10-22 20:05:21',
            ),
            28 => 
            array (
                'id' => 34,
                'firstname' => 'Lorie',
                'lastname' => 'Girard',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:27',
                'updated_at' => '2018-10-22 20:05:27',
            ),
            29 => 
            array (
                'id' => 35,
                'firstname' => 'Théo',
                'lastname' => 'Laforce',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:33',
                'updated_at' => '2018-10-22 20:05:33',
            ),
            30 => 
            array (
                'id' => 36,
                'firstname' => 'Nathan',
                'lastname' => 'Picard',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:39',
                'updated_at' => '2018-10-22 20:05:39',
            ),
            31 => 
            array (
                'id' => 37,
                'firstname' => 'Jacob',
                'lastname' => 'Puppynck',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:05:53',
                'updated_at' => '2018-10-22 20:05:53',
            ),
            32 => 
            array (
                'id' => 38,
                'firstname' => 'Zachary',
                'lastname' => 'Reid',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:06:09',
                'updated_at' => '2018-10-22 20:06:09',
            ),
            33 => 
            array (
                'id' => 39,
                'firstname' => 'Manoé',
                'lastname' => 'Ratté',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:06:18',
                'updated_at' => '2018-10-22 20:06:18',
            ),
            34 => 
            array (
                'id' => 40,
                'firstname' => 'Charlie',
                'lastname' => 'Robichaud',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:06:30',
                'updated_at' => '2018-10-22 20:06:30',
            ),
            35 => 
            array (
                'id' => 41,
                'firstname' => 'Marily',
                'lastname' => 'Witty',
                'user_id' => 5,
                'created_at' => '2018-10-22 20:06:39',
                'updated_at' => '2018-10-22 20:06:39',
            ),
            36 => 
            array (
                'id' => 42,
                'firstname' => 'Mickaël',
                'lastname' => 'Archambault',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:06:54',
                'updated_at' => '2018-10-22 20:06:54',
            ),
            37 => 
            array (
                'id' => 43,
                'firstname' => 'Karolyne',
                'lastname' => 'Beauregard',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:07:15',
                'updated_at' => '2018-10-22 20:07:15',
            ),
            38 => 
            array (
                'id' => 44,
                'firstname' => 'Annabel',
                'lastname' => 'Bisson',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:07:29',
                'updated_at' => '2018-10-22 20:07:29',
            ),
            39 => 
            array (
                'id' => 45,
                'firstname' => 'Joliane',
                'lastname' => 'Bourque',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:08:26',
                'updated_at' => '2018-10-22 20:08:26',
            ),
            40 => 
            array (
                'id' => 46,
                'firstname' => 'Lexie',
                'lastname' => 'Chabot',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:08:33',
                'updated_at' => '2018-10-22 20:08:33',
            ),
            41 => 
            array (
                'id' => 47,
                'firstname' => 'Samuel',
                'lastname' => 'Daigle',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:08:41',
                'updated_at' => '2018-10-22 20:08:41',
            ),
            42 => 
            array (
                'id' => 48,
                'firstname' => 'Elly',
                'lastname' => 'Daunais-Bouchard',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:08:53',
                'updated_at' => '2018-10-22 20:08:53',
            ),
            43 => 
            array (
                'id' => 49,
                'firstname' => 'Léa-Rose',
                'lastname' => 'Fortier',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:02',
                'updated_at' => '2018-10-22 20:09:02',
            ),
            44 => 
            array (
                'id' => 50,
                'firstname' => 'Éloïse',
                'lastname' => 'Lebrun',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:11',
                'updated_at' => '2018-10-22 20:09:11',
            ),
            45 => 
            array (
                'id' => 51,
                'firstname' => 'Anabel',
                'lastname' => 'Martin',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:18',
                'updated_at' => '2018-10-22 20:09:18',
            ),
            46 => 
            array (
                'id' => 52,
                'firstname' => 'Maïka',
                'lastname' => 'Potvin',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:27',
                'updated_at' => '2018-10-22 20:09:27',
            ),
            47 => 
            array (
                'id' => 54,
                'firstname' => 'Nathan',
                'lastname' => 'Blais Nadeau',
                'user_id' => 2,
                'created_at' => '2018-10-22 20:09:47',
                'updated_at' => '2018-10-22 20:09:47',
            ),
            48 => 
            array (
                'id' => 55,
                'firstname' => 'Pier-Olivier',
                'lastname' => 'Leblanc',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:49',
                'updated_at' => '2018-10-22 20:09:49',
            ),
            49 => 
            array (
                'id' => 56,
                'firstname' => 'Charles',
                'lastname' => 'Morin',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:09:57',
                'updated_at' => '2018-10-22 20:09:57',
            ),
            50 => 
            array (
                'id' => 57,
                'firstname' => 'Nathan',
                'lastname' => 'Tessier',
                'user_id' => 6,
                'created_at' => '2018-10-22 20:10:10',
                'updated_at' => '2018-10-22 20:10:10',
            ),
            51 => 
            array (
                'id' => 78,
                'firstname' => 'Léa',
                'lastname' => 'Belanger',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:37:03',
                'updated_at' => '2018-10-23 19:37:03',
            ),
            52 => 
            array (
                'id' => 59,
                'firstname' => 'Olivier',
                'lastname' => 'Belval',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:02:51',
                'updated_at' => '2018-10-23 18:02:51',
            ),
            53 => 
            array (
                'id' => 60,
                'firstname' => 'Magaly',
                'lastname' => 'Bleau',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:03:04',
                'updated_at' => '2018-10-23 18:03:04',
            ),
            54 => 
            array (
                'id' => 61,
                'firstname' => 'Kael',
                'lastname' => 'Brasseur',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:03:35',
                'updated_at' => '2018-10-23 18:03:35',
            ),
            55 => 
            array (
                'id' => 62,
                'firstname' => 'Daliah',
                'lastname' => 'Charpentier',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:07:09',
                'updated_at' => '2018-10-23 18:07:09',
            ),
            56 => 
            array (
                'id' => 63,
                'firstname' => 'Marilou',
                'lastname' => 'Cloutier',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:36:19',
                'updated_at' => '2018-10-23 18:36:19',
            ),
            57 => 
            array (
                'id' => 64,
                'firstname' => 'Juliet',
                'lastname' => 'Devost',
                'user_id' => 10,
                'created_at' => '2018-10-23 18:36:36',
                'updated_at' => '2018-10-23 18:36:36',
            ),
            58 => 
            array (
                'id' => 65,
                'firstname' => 'Kyana',
                'lastname' => 'Dussault',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:14:37',
                'updated_at' => '2018-10-23 19:14:37',
            ),
            59 => 
            array (
                'id' => 66,
                'firstname' => 'Zack',
                'lastname' => 'Forest-Stébenne',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:15:03',
                'updated_at' => '2018-10-23 19:15:03',
            ),
            60 => 
            array (
                'id' => 67,
                'firstname' => 'Rosabelle',
                'lastname' => 'Gazaille',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:22:44',
                'updated_at' => '2018-10-23 19:22:44',
            ),
            61 => 
            array (
                'id' => 68,
                'firstname' => 'Henry-James',
                'lastname' => 'Hamel-Marcoux',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:31:16',
                'updated_at' => '2018-10-23 19:31:16',
            ),
            62 => 
            array (
                'id' => 69,
                'firstname' => 'Mya',
                'lastname' => 'Jeannotte-Dion',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:32:14',
                'updated_at' => '2018-10-23 19:32:14',
            ),
            63 => 
            array (
                'id' => 70,
                'firstname' => 'Zackary',
                'lastname' => 'Lafleur',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:32:44',
                'updated_at' => '2018-10-23 19:32:44',
            ),
            64 => 
            array (
                'id' => 71,
                'firstname' => 'Justin',
                'lastname' => 'Leblanc',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:32:57',
                'updated_at' => '2018-10-23 19:32:57',
            ),
            65 => 
            array (
                'id' => 72,
                'firstname' => 'Maude',
                'lastname' => 'Lépine',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:33:07',
                'updated_at' => '2018-10-23 19:33:07',
            ),
            66 => 
            array (
                'id' => 73,
                'firstname' => 'Émile',
                'lastname' => 'Paré',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:33:18',
                'updated_at' => '2018-10-23 19:33:18',
            ),
            67 => 
            array (
                'id' => 74,
                'firstname' => 'Danick',
                'lastname' => 'Rocheleau',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:33:43',
                'updated_at' => '2018-10-23 19:33:43',
            ),
            68 => 
            array (
                'id' => 75,
                'firstname' => 'Danaé',
                'lastname' => 'Séguin',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:33:57',
                'updated_at' => '2018-10-23 19:33:57',
            ),
            69 => 
            array (
                'id' => 76,
                'firstname' => 'Félix',
                'lastname' => 'Tessier',
                'user_id' => 10,
                'created_at' => '2018-10-23 19:34:06',
                'updated_at' => '2018-10-23 19:34:06',
            ),
            70 => 
            array (
                'id' => 79,
                'firstname' => 'Samuel',
                'lastname' => 'Cloutier',
                'user_id' => 11,
                'created_at' => '2018-10-24 16:12:28',
                'updated_at' => '2018-10-24 16:12:28',
            ),
            71 => 
            array (
                'id' => 80,
                'firstname' => 'Ulrick',
                'lastname' => 'Rivet',
                'user_id' => 11,
                'created_at' => '2018-10-24 16:18:47',
                'updated_at' => '2018-10-24 16:18:47',
            ),
            72 => 
            array (
                'id' => 81,
                'firstname' => 'Juliette',
                'lastname' => 'Barrette',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:35:46',
                'updated_at' => '2018-10-24 16:35:46',
            ),
            73 => 
            array (
                'id' => 82,
                'firstname' => 'Coraly',
                'lastname' => 'Bélensky',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:36:32',
                'updated_at' => '2018-10-24 16:36:32',
            ),
            74 => 
            array (
                'id' => 83,
                'firstname' => 'Mathis',
                'lastname' => 'Belval',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:36:41',
                'updated_at' => '2018-10-24 16:36:41',
            ),
            75 => 
            array (
                'id' => 84,
                'firstname' => 'Zackary',
                'lastname' => 'Belval',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:36:52',
                'updated_at' => '2018-10-24 16:36:52',
            ),
            76 => 
            array (
                'id' => 85,
                'firstname' => 'Simon',
                'lastname' => 'Bérubé',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:37:04',
                'updated_at' => '2018-10-24 16:37:04',
            ),
            77 => 
            array (
                'id' => 86,
                'firstname' => 'Maélie',
                'lastname' => 'Bourque',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:37:18',
                'updated_at' => '2018-10-24 16:37:18',
            ),
            78 => 
            array (
                'id' => 87,
                'firstname' => 'Chelsy',
                'lastname' => 'Chabot',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:37:30',
                'updated_at' => '2018-10-24 16:37:30',
            ),
            79 => 
            array (
                'id' => 88,
                'firstname' => 'Anabelle',
                'lastname' => 'Dolbec',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:07',
                'updated_at' => '2018-10-24 16:38:07',
            ),
            80 => 
            array (
                'id' => 89,
                'firstname' => 'Mathieu',
                'lastname' => 'Doucet',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:17',
                'updated_at' => '2018-10-24 16:38:17',
            ),
            81 => 
            array (
                'id' => 90,
                'firstname' => 'Juliette',
                'lastname' => 'Hébert',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:26',
                'updated_at' => '2018-10-24 16:38:26',
            ),
            82 => 
            array (
                'id' => 91,
                'firstname' => 'Emeric',
                'lastname' => 'Laforce',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:36',
                'updated_at' => '2018-10-24 16:38:36',
            ),
            83 => 
            array (
                'id' => 92,
                'firstname' => 'Angélik',
                'lastname' => 'Lambert',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:44',
                'updated_at' => '2018-10-24 16:38:44',
            ),
            84 => 
            array (
                'id' => 93,
                'firstname' => 'Livia',
                'lastname' => 'Lebrun',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:38:53',
                'updated_at' => '2018-10-24 16:38:53',
            ),
            85 => 
            array (
                'id' => 94,
                'firstname' => 'Annabelle',
                'lastname' => 'Lépine',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:02',
                'updated_at' => '2018-10-24 16:39:02',
            ),
            86 => 
            array (
                'id' => 95,
                'firstname' => 'Janie',
                'lastname' => 'Riendeau',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:12',
                'updated_at' => '2018-10-24 16:39:12',
            ),
            87 => 
            array (
                'id' => 96,
                'firstname' => 'Léo',
                'lastname' => 'Rivet',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:17',
                'updated_at' => '2018-10-24 16:39:17',
            ),
            88 => 
            array (
                'id' => 97,
                'firstname' => 'Emile',
                'lastname' => 'Savard',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:25',
                'updated_at' => '2018-10-24 16:39:25',
            ),
            89 => 
            array (
                'id' => 98,
                'firstname' => 'Karina',
                'lastname' => 'Séguin',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:35',
                'updated_at' => '2018-10-24 16:39:35',
            ),
            90 => 
            array (
                'id' => 99,
                'firstname' => 'Alexandre',
                'lastname' => 'Viens',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:39:44',
                'updated_at' => '2018-10-24 16:39:44',
            ),
            91 => 
            array (
                'id' => 100,
                'firstname' => 'Daphnée',
                'lastname' => 'Desjardins-Moreau',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:42:13',
                'updated_at' => '2018-10-24 16:42:13',
            ),
            92 => 
            array (
                'id' => 101,
                'firstname' => 'Raphaël',
                'lastname' => 'Gelesko',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:42:25',
                'updated_at' => '2018-10-24 16:42:25',
            ),
            93 => 
            array (
                'id' => 102,
                'firstname' => 'Christophe',
                'lastname' => 'Hébert',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:42:34',
                'updated_at' => '2018-10-24 16:42:34',
            ),
            94 => 
            array (
                'id' => 103,
                'firstname' => 'Félix',
                'lastname' => 'Jeannotte-Dion',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:42:59',
                'updated_at' => '2018-10-24 16:42:59',
            ),
            95 => 
            array (
                'id' => 104,
                'firstname' => 'Jesse',
                'lastname' => 'Matteau',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:43:07',
                'updated_at' => '2018-10-24 16:43:07',
            ),
            96 => 
            array (
                'id' => 105,
                'firstname' => 'Justine',
                'lastname' => 'Daigle',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:25:34',
                'updated_at' => '2018-10-26 12:25:34',
            ),
            97 => 
            array (
                'id' => 106,
                'firstname' => 'Vincent',
                'lastname' => 'Daigle',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:25:45',
                'updated_at' => '2018-10-26 12:25:45',
            ),
            98 => 
            array (
                'id' => 107,
                'firstname' => 'Mégane',
                'lastname' => 'De Simone Fortin',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:26:03',
                'updated_at' => '2018-10-26 12:26:03',
            ),
            99 => 
            array (
                'id' => 108,
                'firstname' => 'Olivia',
                'lastname' => 'Lapierre',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:26:16',
                'updated_at' => '2018-10-26 12:26:16',
            ),
            100 => 
            array (
                'id' => 109,
                'firstname' => 'Mathis',
                'lastname' => 'Senez',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:26:25',
                'updated_at' => '2018-10-26 12:26:25',
            ),
            101 => 
            array (
                'id' => 110,
                'firstname' => 'Marie-Michèle',
                'lastname' => 'Girard',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:26:47',
                'updated_at' => '2018-10-26 12:26:47',
            ),
            102 => 
            array (
                'id' => 111,
                'firstname' => 'Zach',
                'lastname' => 'Dubé',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:26:55',
                'updated_at' => '2018-10-26 12:26:55',
            ),
            103 => 
            array (
                'id' => 112,
                'firstname' => 'Jays',
                'lastname' => 'Potvin',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:27:04',
                'updated_at' => '2018-10-26 12:27:04',
            ),
            104 => 
            array (
                'id' => 113,
                'firstname' => 'Alexis',
                'lastname' => 'Mathieu-Boivin',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:27:14',
                'updated_at' => '2018-10-26 12:27:14',
            ),
            105 => 
            array (
                'id' => 114,
                'firstname' => 'Cédrick',
                'lastname' => 'Lachance',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:27:22',
                'updated_at' => '2018-10-26 12:27:22',
            ),
            106 => 
            array (
                'id' => 115,
                'firstname' => 'Cédrick',
                'lastname' => 'Rocheleau',
                'user_id' => 13,
                'created_at' => '2018-10-26 12:27:32',
                'updated_at' => '2018-10-26 12:27:32',
            ),
            107 => 
            array (
                'id' => 116,
                'firstname' => 'Marie-Jeanne',
                'lastname' => 'Côté',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:37:37',
                'updated_at' => '2018-10-26 12:37:37',
            ),
            108 => 
            array (
                'id' => 117,
                'firstname' => 'Magalie',
                'lastname' => 'Daigle',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:37:53',
                'updated_at' => '2018-10-26 12:37:53',
            ),
            109 => 
            array (
                'id' => 118,
                'firstname' => 'Édouard',
                'lastname' => 'Bourque',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:38:02',
                'updated_at' => '2018-10-26 12:38:02',
            ),
            110 => 
            array (
                'id' => 119,
                'firstname' => 'Charles',
                'lastname' => 'Goudreau',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:38:19',
                'updated_at' => '2018-10-26 12:38:19',
            ),
            111 => 
            array (
                'id' => 120,
                'firstname' => 'Ammanda',
                'lastname' => 'Desmarais Morel',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:38:43',
                'updated_at' => '2018-10-26 12:38:43',
            ),
            112 => 
            array (
                'id' => 121,
                'firstname' => 'Amélia',
                'lastname' => 'Spina',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:38:52',
                'updated_at' => '2018-10-26 12:38:52',
            ),
            113 => 
            array (
                'id' => 122,
                'firstname' => 'Élie',
                'lastname' => 'Duchaine',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:39:43',
                'updated_at' => '2018-10-26 12:39:43',
            ),
            114 => 
            array (
                'id' => 123,
                'firstname' => 'Léonie',
                'lastname' => 'Girard',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:39:54',
                'updated_at' => '2018-10-26 12:39:54',
            ),
            115 => 
            array (
                'id' => 124,
                'firstname' => 'Jérémie',
                'lastname' => 'Tardif',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:40:15',
                'updated_at' => '2018-10-26 12:40:15',
            ),
            116 => 
            array (
                'id' => 125,
                'firstname' => 'Joey',
                'lastname' => 'Lapierre',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:40:25',
                'updated_at' => '2018-10-26 12:40:25',
            ),
            117 => 
            array (
                'id' => 126,
                'firstname' => 'Milan',
                'lastname' => 'Girard',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:40:35',
                'updated_at' => '2018-10-26 12:40:35',
            ),
            118 => 
            array (
                'id' => 127,
                'firstname' => 'Alek',
                'lastname' => 'Dussault',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:40:51',
                'updated_at' => '2018-10-26 12:40:51',
            ),
            119 => 
            array (
                'id' => 128,
                'firstname' => 'Nathan',
                'lastname' => 'Hébert',
                'user_id' => 15,
                'created_at' => '2018-10-26 12:41:21',
                'updated_at' => '2018-10-26 12:41:21',
            ),
            120 => 
            array (
                'id' => 130,
                'firstname' => 'Anthony',
                'lastname' => 'Bastien',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:52:43',
                'updated_at' => '2018-10-30 16:52:43',
            ),
            121 => 
            array (
                'id' => 131,
                'firstname' => 'Raphaël',
                'lastname' => 'Berthiaume',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:52:55',
                'updated_at' => '2018-10-30 16:52:55',
            ),
            122 => 
            array (
                'id' => 132,
                'firstname' => 'Mathias',
                'lastname' => 'Boissy',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:53:04',
                'updated_at' => '2018-10-30 16:53:04',
            ),
            123 => 
            array (
                'id' => 133,
                'firstname' => 'Charles',
                'lastname' => 'Chevalier',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:53:12',
                'updated_at' => '2018-10-30 16:53:12',
            ),
            124 => 
            array (
                'id' => 134,
                'firstname' => 'Alexine',
                'lastname' => 'Clermont',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:53:33',
                'updated_at' => '2018-10-30 16:53:33',
            ),
            125 => 
            array (
                'id' => 135,
                'firstname' => 'Christaubald',
                'lastname' => 'Daigle Nadeau',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:53:48',
                'updated_at' => '2018-10-30 16:53:48',
            ),
            126 => 
            array (
                'id' => 136,
                'firstname' => 'Henrick',
                'lastname' => 'Daviau',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:53:57',
                'updated_at' => '2018-10-30 16:53:57',
            ),
            127 => 
            array (
                'id' => 137,
                'firstname' => 'Maude',
                'lastname' => 'De Simone Fortin',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:54:13',
                'updated_at' => '2018-10-30 16:54:13',
            ),
            128 => 
            array (
                'id' => 138,
                'firstname' => 'Élyzabeth',
                'lastname' => 'Dontigny',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:54:28',
                'updated_at' => '2018-10-30 16:54:28',
            ),
            129 => 
            array (
                'id' => 139,
                'firstname' => 'William',
                'lastname' => 'Fernandez Michaud',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:54:40',
                'updated_at' => '2018-10-30 16:54:40',
            ),
            130 => 
            array (
                'id' => 140,
                'firstname' => 'Shawn',
                'lastname' => 'Fournier',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:54:50',
                'updated_at' => '2018-10-30 16:54:50',
            ),
            131 => 
            array (
                'id' => 141,
                'firstname' => 'Mahyna',
                'lastname' => 'Guilbault',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:00',
                'updated_at' => '2018-10-30 16:55:00',
            ),
            132 => 
            array (
                'id' => 142,
                'firstname' => 'Milo',
                'lastname' => 'Hamel',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:08',
                'updated_at' => '2018-10-30 16:55:08',
            ),
            133 => 
            array (
                'id' => 143,
                'firstname' => 'Brandon',
                'lastname' => 'Lambert',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:17',
                'updated_at' => '2018-10-30 16:55:17',
            ),
            134 => 
            array (
                'id' => 144,
                'firstname' => 'Sofiane',
                'lastname' => 'Larose',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:26',
                'updated_at' => '2018-10-30 16:55:26',
            ),
            135 => 
            array (
                'id' => 145,
                'firstname' => 'Édouard',
                'lastname' => 'Lemaire',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:35',
                'updated_at' => '2018-10-30 16:55:35',
            ),
            136 => 
            array (
                'id' => 146,
                'firstname' => 'Léanne',
                'lastname' => 'Pétrin',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:46',
                'updated_at' => '2018-10-30 16:55:46',
            ),
            137 => 
            array (
                'id' => 147,
                'firstname' => 'Mélodie',
                'lastname' => 'Poirier',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:55:56',
                'updated_at' => '2018-10-30 16:55:56',
            ),
            138 => 
            array (
                'id' => 148,
                'firstname' => 'Isaac',
                'lastname' => 'Richard',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:56:05',
                'updated_at' => '2018-10-30 16:56:05',
            ),
            139 => 
            array (
                'id' => 149,
                'firstname' => 'Anrick',
                'lastname' => 'Riendeau',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:56:14',
                'updated_at' => '2018-10-30 16:56:14',
            ),
            140 => 
            array (
                'id' => 150,
                'firstname' => 'Ulrick',
                'lastname' => 'Rivet',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:56:23',
                'updated_at' => '2018-10-30 16:56:23',
            ),
            141 => 
            array (
                'id' => 151,
                'firstname' => 'Amy',
                'lastname' => 'Tétreault',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:56:31',
                'updated_at' => '2018-10-30 16:56:31',
            ),
            142 => 
            array (
                'id' => 152,
                'firstname' => 'Alexis',
                'lastname' => 'Turgeon',
                'user_id' => 18,
                'created_at' => '2018-10-30 16:56:42',
                'updated_at' => '2018-10-30 16:56:42',
            ),
        ));
        
        
    }
}
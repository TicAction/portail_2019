<?php

use Illuminate\Database\Seeder;

class ObservationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('observations')->delete();
        
        \DB::table('observations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'observation' => ' Briser son matériel, celui de ses pairs ou celui prêté par l’école',
                'severity_id' => 2,
                'created_at' => '2018-12-12 10:52:00',
                'updated_at' => '2018-12-12 10:52:00',
            ),
            1 => 
            array (
                'id' => 2,
                'observation' => 'Utiliser un langage blessant',
                'severity_id' => 2,
                'created_at' => '2018-12-13 10:52:00',
                'updated_at' => '2018-12-13 10:52:00',
            ),
            2 => 
            array (
                'id' => 3,
                'observation' => 'Agacer avec une certaine persistance',
                'severity_id' => 2,
                'created_at' => '2018-12-14 10:52:00',
                'updated_at' => '2018-12-14 10:52:00',
            ),
            3 => 
            array (
                'id' => 4,
                'observation' => 'Manque de respect face à un pair',
                'severity_id' => 2,
                'created_at' => '2018-12-15 10:52:00',
                'updated_at' => '2018-12-15 10:52:00',
            ),
            4 => 
            array (
                'id' => 5,
                'observation' => 'Blasphémer',
                'severity_id' => 2,
                'created_at' => '2018-12-16 10:52:00',
                'updated_at' => '2018-12-16 10:52:00',
            ),
            5 => 
            array (
                'id' => 6,
                'observation' => 'Faire des gestes irrespectueux ou à caractère sexuel',
                'severity_id' => 2,
                'created_at' => '2018-12-17 10:52:00',
                'updated_at' => '2018-12-17 10:52:00',
            ),
            6 => 
            array (
                'id' => 7,
                'observation' => 'Provoquer par des gestes ou des paroles',
                'severity_id' => 2,
                'created_at' => '2018-12-18 10:52:00',
                'updated_at' => '2018-12-18 10:52:00',
            ),
            7 => 
            array (
                'id' => 8,
                'observation' => 'Ne pas respecter l’intimité des autres ou toucher un autre élève de manière inappropriée',
                'severity_id' => 2,
                'created_at' => '2018-12-19 10:52:00',
                'updated_at' => '2018-12-19 10:52:00',
            ),
            8 => 
            array (
                'id' => 9,
                'observation' => 'Mentir à un adulte',
                'severity_id' => 2,
                'created_at' => '2018-12-20 10:52:00',
                'updated_at' => '2018-12-20 10:52:00',
            ),
            9 => 
            array (
                'id' => 10,
                'observation' => 'Répliquer à un adulte',
                'severity_id' => 2,
                'created_at' => '2018-12-21 10:52:00',
                'updated_at' => '2018-12-21 10:52:00',
            ),
            10 => 
            array (
                'id' => 11,
                'observation' => 'Agir de façon arrogante envers un adulte',
                'severity_id' => 2,
                'created_at' => '2018-12-22 10:52:00',
                'updated_at' => '2018-12-22 10:52:00',
            ),
            11 => 
            array (
                'id' => 12,
                'observation' => 'Tricher ou plagier',
                'severity_id' => 2,
                'created_at' => '2018-12-23 10:52:00',
                'updated_at' => '2018-12-23 10:52:00',
            ),
            12 => 
            array (
                'id' => 13,
                'observation' => 'Imiter la signature de quelqu’un',
                'severity_id' => 2,
                'created_at' => '2018-12-24 10:52:00',
                'updated_at' => '2018-12-24 10:52:00',
            ),
            13 => 
            array (
                'id' => 14,
                'observation' => 'Ne pas accepter les conséquences reliées à ses gestes et à ses paroles.',
                'severity_id' => 2,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            14 => 
            array (
                'id' => 15,
                'observation' => ' Quitter l’école sans permission',
                'severity_id' => 3,
                'created_at' => '2018-12-12 10:52:00',
                'updated_at' => '2018-12-12 10:52:00',
            ),
            15 => 
            array (
                'id' => 16,
                'observation' => 'Fuir un adulte qui intervient ',
                'severity_id' => 3,
                'created_at' => '2018-12-13 10:52:00',
                'updated_at' => '2018-12-13 10:52:00',
            ),
            16 => 
            array (
                'id' => 17,
                'observation' => 'Adopter une conduite imprudente dont les conséquences peuvent être graves',
                'severity_id' => 3,
                'created_at' => '2018-12-14 10:52:00',
                'updated_at' => '2018-12-14 10:52:00',
            ),
            17 => 
            array (
                'id' => 18,
                'observation' => 'Vandaliser',
                'severity_id' => 3,
                'created_at' => '2018-12-15 10:52:00',
                'updated_at' => '2018-12-15 10:52:00',
            ),
            18 => 
            array (
                'id' => 19,
                'observation' => 'Voler',
                'severity_id' => 3,
                'created_at' => '2018-12-16 10:52:00',
                'updated_at' => '2018-12-16 10:52:00',
            ),
            19 => 
            array (
                'id' => 20,
            'observation' => 'Utiliser des objets menaçant la santé ou la sécurité (canif, allumettes, cigarettes, drogues, boissons alcoolisées, boissons énergisantes)',
                'severity_id' => 3,
                'created_at' => '2018-12-17 10:52:00',
                'updated_at' => '2018-12-17 10:52:00',
            ),
            20 => 
            array (
                'id' => 21,
                'observation' => 'Faire une crise de colère, s’automutiler',
                'severity_id' => 3,
                'created_at' => '2018-12-18 10:52:00',
                'updated_at' => '2018-12-18 10:52:00',
            ),
            21 => 
            array (
                'id' => 22,
                'observation' => 'Manquer gravement de respect face aux adultes',
                'severity_id' => 3,
                'created_at' => '2018-12-19 10:52:00',
                'updated_at' => '2018-12-19 10:52:00',
            ),
            22 => 
            array (
                'id' => 23,
                'observation' => 'Faire du harcèlement sexuel ou psychologique',
                'severity_id' => 3,
                'created_at' => '2018-12-20 10:52:00',
                'updated_at' => '2018-12-20 10:52:00',
            ),
            23 => 
            array (
                'id' => 24,
            'observation' => 'Être intolérant face aux autres (racisme, homophobie)',
                'severity_id' => 3,
                'created_at' => '2018-12-21 10:52:00',
                'updated_at' => '2018-12-21 10:52:00',
            ),
            24 => 
            array (
                'id' => 25,
                'observation' => ' Être gravement impoli',
                'severity_id' => 3,
                'created_at' => '2018-12-22 10:52:00',
                'updated_at' => '2018-12-22 10:52:00',
            ),
            25 => 
            array (
                'id' => 26,
                'observation' => 'Insulter ou agacer d’une manière harcelante',
                'severity_id' => 3,
                'created_at' => '2018-12-23 10:52:00',
                'updated_at' => '2018-12-23 10:52:00',
            ),
            26 => 
            array (
                'id' => 27,
                'observation' => 'Menacer de faire du tort',
                'severity_id' => 3,
                'created_at' => '2018-12-24 10:52:00',
                'updated_at' => '2018-12-24 10:52:00',
            ),
            27 => 
            array (
                'id' => 28,
                'observation' => 'Lancer un objet agressivement',
                'severity_id' => 3,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            28 => 
            array (
                'id' => 29,
                'observation' => 'Se batailler',
                'severity_id' => 3,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            29 => 
            array (
                'id' => 30,
            'observation' => 'Agresser physiquement un élève ou un adulte (coup, mordre, frapper)',
                'severity_id' => 3,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            30 => 
            array (
                'id' => 31,
                'observation' => 'Intimider*',
                'severity_id' => 3,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            31 => 
            array (
                'id' => 32,
            'observation' => 'Parler à des moments inappropriés (au vestiaire, dans les déplacements)',
                'severity_id' => 1,
                'created_at' => '2018-12-12 10:52:00',
                'updated_at' => '2018-12-12 10:52:00',
            ),
            32 => 
            array (
                'id' => 33,
                'observation' => 'Ne pas écoute',
                'severity_id' => 1,
                'created_at' => '2018-12-13 10:52:00',
                'updated_at' => '2018-12-13 10:52:00',
            ),
            33 => 
            array (
                'id' => 34,
                'observation' => 'Ne pas suivre les directives demandées par un adulte',
                'severity_id' => 1,
                'created_at' => '2018-12-14 10:52:00',
                'updated_at' => '2018-12-14 10:52:00',
            ),
            34 => 
            array (
                'id' => 35,
                'observation' => 'Avoir un comportement dérangeant.',
                'severity_id' => 1,
                'created_at' => '2018-12-15 10:52:00',
                'updated_at' => '2018-12-15 10:52:00',
            ),
            35 => 
            array (
                'id' => 36,
                'observation' => 'Faire des bruits à des moments inappropriés',
                'severity_id' => 1,
                'created_at' => '2018-12-16 10:52:00',
                'updated_at' => '2018-12-16 10:52:00',
            ),
            36 => 
            array (
                'id' => 37,
                'observation' => 'Ne pas suivre la routine de la cour de récréation',
                'severity_id' => 1,
                'created_at' => '2018-12-17 10:52:00',
                'updated_at' => '2018-12-17 10:52:00',
            ),
            37 => 
            array (
                'id' => 38,
                'observation' => 'Ne pas ranger le matériel lors des récréations',
                'severity_id' => 1,
                'created_at' => '2018-12-18 10:52:00',
                'updated_at' => '2018-12-18 10:52:00',
            ),
            38 => 
            array (
                'id' => 39,
                'observation' => 'Perdre son temps au son de la cloche',
                'severity_id' => 1,
                'created_at' => '2018-12-19 10:52:00',
                'updated_at' => '2018-12-19 10:52:00',
            ),
            39 => 
            array (
                'id' => 40,
                'observation' => 'Apporter des objets de la maison sans autorisation',
                'severity_id' => 1,
                'created_at' => '2018-12-20 10:52:00',
                'updated_at' => '2018-12-20 10:52:00',
            ),
            40 => 
            array (
                'id' => 41,
                'observation' => 'Ne pas ranger ses effets personnels aux endroits désignés',
                'severity_id' => 1,
                'created_at' => '2018-12-21 10:52:00',
                'updated_at' => '2018-12-21 10:52:00',
            ),
            41 => 
            array (
                'id' => 42,
                'observation' => 'Effectuer des déplacements inutiles ou bruyants',
                'severity_id' => 1,
                'created_at' => '2018-12-22 10:52:00',
                'updated_at' => '2018-12-22 10:52:00',
            ),
            42 => 
            array (
                'id' => 43,
            'observation' => 'S’habiller de manière inappropriée (voir dans l’agenda)',
                'severity_id' => 1,
                'created_at' => '2018-12-23 10:52:00',
                'updated_at' => '2018-12-23 10:52:00',
            ),
            43 => 
            array (
                'id' => 44,
                'observation' => 'Agacer',
                'severity_id' => 1,
                'created_at' => '2018-12-24 10:52:00',
                'updated_at' => '2018-12-24 10:52:00',
            ),
            44 => 
            array (
                'id' => 45,
                'observation' => 'Utiliser un langage inapproprié',
                'severity_id' => 1,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            45 => 
            array (
                'id' => 46,
                'observation' => 'Bousculer',
                'severity_id' => 1,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
            46 => 
            array (
                'id' => 47,
            'observation' => 'Ne pas garder son environnement propre à l’intérieur ou à l’extérieur (crayonner sur le pupitre, jeter des déchets par terre)',
                'severity_id' => 1,
                'created_at' => '2018-12-25 10:52:00',
                'updated_at' => '2018-12-25 10:52:00',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class BehaviorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('behaviors')->delete();
        
        \DB::table('behaviors')->insert(array (
            0 => 
            array (
                'id' => 19,
                'behavior_date' => '2018-10-23',
                'behavior_content' => 'Comportement difficile ce matin. Parle et donne les réponse sans lever la main. Ce qui dérange les amis autour de lui. S\'obstine aussi beaucoup.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-23 14:54:14',
                'updated_at' => '2018-10-23 14:54:21',
            ),
            1 => 
            array (
                'id' => 20,
                'behavior_date' => '2018-10-23',
                'behavior_content' => 'Nathan et Jean-Félix, ne voulaient pas que les autres prennent leurs feuilles. Ils les menacent.

Julie Legendre a fait un retour avec eux sur le bon moyen à prendre dans cette situation la prochaine fois. Elle a fait un rappel que les feuilles sont à tout le monde et qu\'ils peuvent partager.

C\'était un premier avertissement. La prochaine fois il y aura une conséquence et la direction sera avisée.

Nathan lors de la récré du matin à donné des coups de pied et de branches.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-23 19:14:11',
                'updated_at' => '2018-10-23 19:14:11',
            ),
            2 => 
            array (
                'id' => 21,
                'behavior_date' => '2018-10-23',
                'behavior_content' => 'Jean-Félix et Nathan BN, ne voulaient pas que les autres prennent leurs feuilles. Ils les menacent.

Julie Legendre a fait un retour avec eux sur le bon moyen à prendre dans cette situation la prochaine fois. Elle a fait un rappel que les feuilles sont à tout le monde et qu\'ils peuvent partager.

C\'était un premier avertissement. La prochaine fois il y aura une conséquence et la direction sera avisée.

Jean-Félix lors de la récré du matin à donné des coups de pied et de branches.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-23 19:14:58',
                'updated_at' => '2018-10-23 19:14:58',
            ),
            3 => 
            array (
                'id' => 22,
                'behavior_date' => '2018-10-24',
                'behavior_content' => 'Aujourd\'hui, Nathan et Jean-Félix ont énervé 2 amis de la classe de 5e année qui jouaient au ballon.
Les grands ont alors commencé à dire des mots à Nathan et à bousculer les 2 plus jeunes. 
Nathan a alors lancé une balle de neige sur Mathis B.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-24 16:13:07',
                'updated_at' => '2018-10-24 16:13:07',
            ),
            4 => 
            array (
                'id' => 23,
                'behavior_date' => '2018-10-24',
                'behavior_content' => 'Aujourd\'hui, Nathan et Jean-Félix ont énervé 2 amis de la classe de 5e année qui jouaient au ballon.
Les grands ont alors commencé à dire des mots à Nathan et à bousculer les 2 plus jeunes.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-24 16:13:43',
                'updated_at' => '2018-10-24 16:13:43',
            ),
            5 => 
            array (
                'id' => 24,
                'behavior_date' => '2018-10-24',
                'behavior_content' => 'Samuel a donné un coup de poing sur le nez de sa soeur dans l\'autobus ce matin.

J\'ai fait un retour avec lui sur la situation. Il ne semblait pas regretter son geste et était peu collaborateur lors de la discussion.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-10-24 16:16:56',
                'updated_at' => '2018-10-24 16:16:56',
            ),
            6 => 
            array (
                'id' => 25,
                'behavior_date' => '2018-10-22',
            'behavior_content' => 'Ulrick a poussé un élève de maternelle sur la cours (matin SDG)

J\'ai fait un retour, mais il ne collaborait pas. Il ne semble pas réaliser l\'importance de son geste.

La direction a été informé.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-10-24 16:22:24',
                'updated_at' => '2018-10-24 16:22:24',
            ),
            7 => 
            array (
                'id' => 26,
                'behavior_date' => '2018-10-24',
            'behavior_content' => 'À la récréation, Mathis joue avec d\'autres élèves au ballon. Nathan B-L et Jean-Félix (de la classe de Ghislain) dérangent le jeu des 5e. S\'en suit des insultes (se traitent de "Jambon") et Nathan lance une balle de neige à Mathis ensuite, Mathis poussent Jean-Félix et Nathan.

Conséquence : Récré à l\'intérieur (25 octobre).',
                'respect' => '0',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:47:09',
                'updated_at' => '2018-10-24 16:47:09',
            ),
            8 => 
            array (
                'id' => 27,
                'behavior_date' => '2018-10-24',
            'behavior_content' => 'À la récréation, Zachary joue avec d\'autres élèves au ballon. Nathan B-L et Jean-Félix (de la classe de Ghislain) dérangent le jeu des 5e. S\'en suit des insultes (se traitent de "Jambon") et Zachary poussent Jean-Félix et Nathan.

Conséquence : Récré à l\'intérieur (25 octobre).',
                'respect' => '0',
                'user_id' => 12,
                'created_at' => '2018-10-24 16:48:13',
                'updated_at' => '2018-10-24 16:48:13',
            ),
            9 => 
            array (
                'id' => 28,
                'behavior_date' => '2018-10-30',
            'behavior_content' => 'À la récréation, Juliette, Livia, Angélique et Janie bousculent une amie de première année (la soeur de Livia)  parce que cette dernière veut jouer avec elles.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-30 14:48:09',
                'updated_at' => '2018-10-30 14:48:09',
            ),
            10 => 
            array (
                'id' => 29,
                'behavior_date' => '2018-10-30',
            'behavior_content' => 'À la récréation,Janie, Livia, Angélique et Juliette bousculent une amie de première année (la soeur de Livia)  parce que cette dernière veut jouer avec elles.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-30 14:49:06',
                'updated_at' => '2018-10-30 14:49:06',
            ),
            11 => 
            array (
                'id' => 30,
                'behavior_date' => '2018-10-30',
            'behavior_content' => 'À la récréation, Angélik, Livia, Janie et Juliette bousculent une amie de première année (la soeur de Livia)  parce que cette dernière veut jouer avec elles.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-30 14:49:52',
                'updated_at' => '2018-10-30 14:49:52',
            ),
            12 => 
            array (
                'id' => 31,
                'behavior_date' => '2018-10-30',
            'behavior_content' => 'À la récréation, Livia, Angélik, Janie et Juliette bousculent une amie de première année (la soeur de Livia)  parce que cette dernière veut jouer avec elles.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-30 14:50:21',
                'updated_at' => '2018-10-30 14:50:21',
            ),
            13 => 
            array (
                'id' => 32,
                'behavior_date' => '2018-10-18',
                'behavior_content' => 'Avertissement de ne plus grimper sur le poteau noir de la porte du près de la passerelle.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-10-30 16:28:44',
                'updated_at' => '2018-10-30 16:28:44',
            ),
            14 => 
            array (
                'id' => 33,
                'behavior_date' => '2018-10-30',
                'behavior_content' => 'Nathan refuse de suivre les consignes en éducation physique.
Sortie du groupe par M. Harold',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-10-30 16:29:00',
                'updated_at' => '2018-10-30 16:29:16',
            ),
            15 => 
            array (
                'id' => 34,
                'behavior_date' => '2018-10-30',
                'behavior_content' => 'Autobus 8

Selon le chauffeur, Junior est agité.

J\'ai fait un retour avec lui concernant les comportements adéquats attendus dans l\'autobus.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-10-30 16:36:09',
                'updated_at' => '2018-10-30 16:36:09',
            ),
            16 => 
            array (
                'id' => 35,
                'behavior_date' => '2018-10-30',
                'behavior_content' => 'Autobus 8

Selon le chauffeur, Nathan est agité dans l\'autobus.

J\'ai fait un retour avec lui sur les comportements attendus dans l\'autobus.

Premier avis.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-10-30 16:37:34',
                'updated_at' => '2018-10-30 16:37:34',
            ),
            17 => 
            array (
                'id' => 36,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'Ludovyck joue à Ninja Go... qui consiste à se bousculer et à ce sauter dessus. Un retour avec lui a été fait et il passera la récréation du 2 novembre avec Julie Legendre pour apprendre à faire des jeux intelligents aux récréations. 

Il a aussi craché par terre et il a dit des gros mots.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:24:28',
                'updated_at' => '2018-11-01 16:24:28',
            ),
            18 => 
            array (
                'id' => 37,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'joue à Ninja Go... qui consiste à se bousculer et à ce sauter dessus. Un retour avec lui a été fait et il passera la récréation du 2 novembre avec Julie Legendre pour apprendre à faire des jeux intelligents aux récréations.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:25:18',
                'updated_at' => '2018-11-01 16:25:18',
            ),
            19 => 
            array (
                'id' => 38,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'Ludovyck joue à Ninja Go... qui consiste à se bousculer et à ce sauter dessus. Un retour avec lui a été fait et il passera la récréation du 2 novembre avec Julie Legendre pour apprendre à faire des jeux intelligents aux récréations.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:25:29',
                'updated_at' => '2018-11-01 16:25:29',
            ),
            20 => 
            array (
                'id' => 39,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'joue à Ninja Go... qui consiste à se bousculer et à ce sauter dessus. Un retour avec lui a été fait et il passera la récréation du 2 novembre avec Julie Legendre pour apprendre à faire des jeux intelligents aux récréations.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:25:46',
                'updated_at' => '2018-11-01 16:25:46',
            ),
            21 => 
            array (
                'id' => 40,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'donne un coup de poing à Lorie parce que Lorie l\'a frappée. 
Elle marchera pour la récréation avec moi demain.
Elle a cependant avoué ce qu\'elle a fait très facilement lors du retour.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:27:38',
                'updated_at' => '2018-11-01 16:27:38',
            ),
            22 => 
            array (
                'id' => 41,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'a frappé Magalie parce qu\'elle ne voulait pas jouer avec elle. 
Elle a bien avoué son geste lors du retour. 
Elle marchera avec moi demain à la récré.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-01 16:29:08',
                'updated_at' => '2018-11-01 16:29:08',
            ),
            23 => 
            array (
                'id' => 42,
                'behavior_date' => '2018-11-02',
                'behavior_content' => 'Malgré plusieurs avertissements, Léo continue de faire de mauvais choix. Se lève lors de la récréation intérieur, lance le sac d\'un ami et refuse de faire ce qu\'on lui demande.

Prochaine récréation intérieur il doit rester au secrétariat.

Julie Leblanc et Moi',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-02 14:25:30',
                'updated_at' => '2018-11-02 14:25:30',
            ),
            24 => 
            array (
                'id' => 43,
                'behavior_date' => '2018-11-01',
                'behavior_content' => 'J\'ai avisé Ulrick de ne plus apporter de bonbons à l\'école.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2018-11-02 19:02:51',
                'updated_at' => '2018-11-02 19:02:51',
            ),
            25 => 
            array (
                'id' => 44,
                'behavior_date' => '2018-11-05',
                'behavior_content' => 'Ce matin, dans l\'autobus 7, Michel a fait des menaces à Mickael Gélesko.  Il lui a dit qu\'il lui donnait rendez-vous à l\'école pour le battre. Sur la cour, en ma présence, il lui a dit: Tu veux te battre? sur un ton menaçant.

Je crois qu\'il faudrait le rencontrer "officiellement" à ce sujet car mon intervention fut brève.

J\'ai fait toutefois un retour avec Mickael. Je lui ai dit de m\'aviser si Michel lui faisait encore des menaces.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-11-05 13:11:33',
                'updated_at' => '2018-11-05 13:11:33',
            ),
            26 => 
            array (
                'id' => 73,
                'behavior_date' => '2017-11-27',
                'behavior_content' => 'Intervention au diner avec Véronique: Maggie pousse une autre élève violemment en bas de la butte de neige et lorsque l\'adulte intervient elle fait une crise. Elle refuse de s\'excuser et recommence; elle est retirée du jeu pour les dernières minutes de la récré du midi.',
                'respect' => '0',
                'user_id' => 29,
                'created_at' => '2018-11-28 02:28:56',
                'updated_at' => '2018-11-28 02:28:56',
            ),
            27 => 
            array (
                'id' => 74,
                'behavior_date' => '2018-11-28',
                'behavior_content' => 'Hier midi, je suis intervenue avec Jean-Félix car il se bataillait avec Jimmy. Il lui a sauté dessus car il lui a dit quelque chose qui l\'a fâché.

Il a refusé de me suivre et de collaborer. Il a été impoli envers moi et a utilisé un ton de voix  non respectueux.

Un retour a été fait par l\'enseignant et la fiche de comportement a été envoyé à la maison.

Conséquence: marcher 30 minutes avec l\'adulte demain midi.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-11-29 17:53:40',
                'updated_at' => '2018-11-29 17:53:40',
            ),
            28 => 
            array (
                'id' => 46,
                'behavior_date' => '2018-11-05',
            'behavior_content' => 'Comportement difficile avec les amis. Elle dit des choses blessante à une amie de la classe ( Gabrielle ). Elle dit à qui veut l\'entendre qu\'elle est conne et a ces amies elle leurs demande de ne pas jouer avec elle si elles désirent rester son amie.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-06 14:51:10',
                'updated_at' => '2018-11-06 14:51:10',
            ),
            29 => 
            array (
                'id' => 47,
                'behavior_date' => '2018-11-06',
                'behavior_content' => 'Lors de la rentrée de la récré du matin, Henrick court, crie, transporte quelqu\'un sur son dos au lieu de prendre son rang adéquatement. Conséquence: mercredi 7 novembre Henrick n\'ira pas à la récréation.',
                'respect' => '0',
                'user_id' => 6,
                'created_at' => '2018-11-06 17:41:25',
                'updated_at' => '2018-11-06 17:41:25',
            ),
            30 => 
            array (
                'id' => 48,
                'behavior_date' => '2018-11-06',
                'behavior_content' => 'À l\'entrée de la récréation, William criait, grimpait sur le dos d\'un autre élève et ne prenait pas son rang adéquatement. Conséquence: mercredi 7 novembre il devra rester à l\'intérieur à la récréation.',
                'respect' => '0',
                'user_id' => 6,
                'created_at' => '2018-11-06 17:47:02',
                'updated_at' => '2018-11-06 17:47:02',
            ),
            31 => 
            array (
                'id' => 49,
                'behavior_date' => '2018-11-06',
                'behavior_content' => 'À la récréation, au lieu de prendre son rang, Ulrick court partout et crie. Conséquence: mercredi 7 novembre, il ne va pas à la récréation.',
                'respect' => '0',
                'user_id' => 6,
                'created_at' => '2018-11-06 17:49:00',
                'updated_at' => '2018-11-06 17:49:00',
            ),
            32 => 
            array (
                'id' => 50,
                'behavior_date' => '2018-11-06',
            'behavior_content' => 'Lors que la cloche a sonné pour signaler la fin de la récréation, au lieu de prendre son rang Léo décide de courir partout (même au travers du rang) et de crier. Conséquence: mercredi 7 novembre, il n\'aura pas de récréation.',
                'respect' => '0',
                'user_id' => 6,
                'created_at' => '2018-11-06 17:50:17',
                'updated_at' => '2018-11-06 17:50:17',
            ),
            33 => 
            array (
                'id' => 51,
                'behavior_date' => '2018-11-06',
                'behavior_content' => 'Un ami et lui se crachent dans les mains et ensuite demande à des amis plus jeunes de leur taper dans la main pour faire rire les autres.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-06 18:59:49',
                'updated_at' => '2018-11-06 18:59:49',
            ),
            34 => 
            array (
                'id' => 52,
                'behavior_date' => '2018-11-06',
                'behavior_content' => 'Un ami et lui se crachent dans les mains et ensuite demande à des amis plus jeunes de leur taper dans la main pour faire rire les autres.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-06 18:59:59',
                'updated_at' => '2018-11-06 18:59:59',
            ),
            35 => 
            array (
                'id' => 53,
                'behavior_date' => '2018-11-07',
                'behavior_content' => 'Difficile en classe depuis le début de la semaine. Il est bougons et ne fait pas les bons choix.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-07 15:23:50',
                'updated_at' => '2018-11-07 15:23:50',
            ),
            36 => 
            array (
                'id' => 54,
                'behavior_date' => '2018-11-07',
                'behavior_content' => 'Un message a été inscrit à l\'agenda pour informer les parents que plusieurs interventions ont été faites car Junior n\'a pas un comportement adéquat dans l\'autobus. Un suivi sera fait pour une semaine pour assurer un changement du comportement. 

Je vais probablement laisser dans l\'autobus des choses pour l\'occuper durant le trajet.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-11-07 15:29:58',
                'updated_at' => '2018-11-07 15:29:58',
            ),
            37 => 
            array (
                'id' => 55,
                'behavior_date' => '2018-11-08',
            'behavior_content' => 'Lors de la prise des présences par le service de garde en fin de journée (dans la classe) Nathan a donné un coup de boîte à lunch au visage et un coup de bouteille d’eau dans le ventre à Raphaël Rajotte. Il s’est ensuite sauvé et Stéphanie (Technicienne SDG) l’a retenu et maintenu. Il a mis plusieurs minutes à se calmer. Stéphanie a fait un retour avec les deux élèves.',
                'respect' => '0',
                'user_id' => 22,
                'created_at' => '2018-11-09 14:48:25',
                'updated_at' => '2018-11-09 14:48:25',
            ),
            38 => 
            array (
                'id' => 58,
                'behavior_date' => '2018-11-13',
                'behavior_content' => 'Anrick se bouscule dans le rang avec Shawn malgré des avertissements.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-15 14:31:29',
                'updated_at' => '2018-11-15 14:32:28',
            ),
            39 => 
            array (
                'id' => 59,
                'behavior_date' => '2018-11-13',
                'behavior_content' => 'Shawn se bouscule dans le rang avec Anrick malgré des avertissements.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-15 14:32:11',
                'updated_at' => '2018-11-15 14:32:11',
            ),
            40 => 
            array (
                'id' => 60,
                'behavior_date' => '2018-11-15',
                'behavior_content' => 'Jimmy utilise un langage inapproprié dans le cours de M. Harold',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-15 14:33:30',
                'updated_at' => '2018-11-15 14:33:30',
            ),
            41 => 
            array (
                'id' => 61,
                'behavior_date' => '2018-11-21',
                'behavior_content' => 'Il arrive en classe très énervé et refuse de travailler avec Aurélie  pour son évaluation.

Nathan se chicane encore à propos d\'un fort et menace de casser la gueule à un ami de 6e année. Lorsque je fais le retour avec lui il refuse de me parler et dit qu\'il n\'a rien dit. Julie Legendre à dû intervenir pour le calmer. Une période.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-21 19:23:29',
                'updated_at' => '2018-11-21 19:23:29',
            ),
            42 => 
            array (
                'id' => 62,
                'behavior_date' => '2018-11-21',
                'behavior_content' => 'Jimmy lance une balle de neige sur un ami de la classe.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-21 19:25:49',
                'updated_at' => '2018-11-21 19:25:49',
            ),
            43 => 
            array (
                'id' => 63,
                'behavior_date' => '2018-11-21',
                'behavior_content' => 'Il achale un ami en chantant des chansons et en jouant dans son dos avec un crayons.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-21 19:26:47',
                'updated_at' => '2018-11-21 19:26:47',
            ),
            44 => 
            array (
                'id' => 64,
                'behavior_date' => '2018-11-21',
                'behavior_content' => 'William a tardé avant de commencé son travail, il est allé voir un autre élève de la classe, il lui parlait et a pris son aiguisoir. Je lui ai demandé de retourner à sa place mais il n\'était pas content parce qu\'il disait que l\'aiguisoir était la sienne et qu\'il avait le droit de l\'utiliser. Je lui ai fait comprendre qu\'il ne respectait pas les consignes que j\'avais dites, soit de travailler seul et en silence sans déranger les autres. Il est donc retourné à sa place, il a lancé son aiguisoir et quand il s\'est assis, il a m\'a dit Fuck you...',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-21 22:11:06',
                'updated_at' => '2018-11-21 22:11:06',
            ),
            45 => 
            array (
                'id' => 65,
                'behavior_date' => '2018-11-22',
            'behavior_content' => 'à la récréation Geneviève lui demande d\'entrée car il fait (jambetter) un autre élève.
Il refuse de collaborer avec Geneviève et Moi.
Après un temps de réflexion dans la classe d\'accueil , il collabore davantage.

Fiche de réflexion

isabelle',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2018-11-23 17:53:59',
                'updated_at' => '2018-11-23 17:54:36',
            ),
            46 => 
            array (
                'id' => 66,
                'behavior_date' => '2018-11-23',
            'behavior_content' => 'Ce midi au service de garde, plusieurs interventions ont été faites auprès de Ludovyck pour jeux inadéquats et violents. Malgré les avertissements et un encadrement par Julie Legendre ( j\'ai fait un rappel des jeux qu\'il pourrait faire pour bien s\'occuper avec ses amis.) Ludovyck ne change pas son comportement.

De plus, il a poussé un élève et  il a lancé de la glace à un autre élève. Il a été retiré à l\'interne cet après-midi. 

Un message a été écrit dans l\'agenda.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2018-11-23 18:11:05',
                'updated_at' => '2018-11-23 18:11:05',
            ),
            47 => 
            array (
                'id' => 67,
                'behavior_date' => '2018-11-22',
            'behavior_content' => 'Dès le début de la période, il s\'oppose à ce que je lui demande de faire. Il me manque de respect, argumente constamment et a un langage inapproprié (un sacre après l\'autre). De plus, il ne se mêle pas de ses affaires. Il me dit que mon système d\'émulation est un système de bébé. Tout au long de la journée, il a refusé de faire le travail demandé. En fin de journée, il s\'est même couché sur son bureau pour dormir.',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-25 21:07:58',
                'updated_at' => '2018-11-25 21:07:58',
            ),
            48 => 
            array (
                'id' => 68,
                'behavior_date' => '2018-11-23',
                'behavior_content' => 'Aussitôt que la journée a débuté, il argumentait et ne respectait pas mes consignes. De plus, il ne faisait pas le travail demandé. Il s\'est mis à faire des bruits de bouche, je lui ai demandé d\'arrêter et il continuait quand même. Après plusieurs avertissements en peu de temps et puisqu\'il dérangeait tout le monde, j\'ai pris la décision de le sortir de la classe. Il est allé dans la classe de Ghislain pour compléter sa réflexion et son travail. Cependant, en après-midi, rien avait changé. J\'ai dû le sortir à nouveau pour la période de lecture.',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-25 21:14:07',
                'updated_at' => '2018-11-25 21:14:07',
            ),
            49 => 
            array (
                'id' => 69,
                'behavior_date' => '2018-11-22',
                'behavior_content' => 'J\'ai dû sortir Ulrick de la classe en PM car en plus de ne pas faire son travail, il dérangeait tous les élèves. De plus, il argumente et fait exprès de faire tout le contraire de ce que je demande dans mes consignes.',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-25 21:16:40',
                'updated_at' => '2018-11-25 21:18:02',
            ),
            50 => 
            array (
                'id' => 70,
                'behavior_date' => '2018-11-22',
                'behavior_content' => 'Shawn n\'arrête pas d\'argumenter à chaque fois que je lui donne un avertissement. Il nie avoir fait ce que je dis. Il réagit de façon impulsive en claquant sa palette de bureau parce qu\'il n\'est pas content. Il est arrogant et me dit souvent qu\'il s\'en fou lorsque je lui parle.',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-25 21:22:16',
                'updated_at' => '2018-11-25 21:22:16',
            ),
            51 => 
            array (
                'id' => 71,
                'behavior_date' => '2018-11-22',
                'behavior_content' => 'Alexis argumente beaucoup lorsque je l\'avertis, il manifeste son désaccord face à ce que je lui dis et il se met à rire alors que c\'est complètement déplacé. Il n\'écoute pas lorsque j\'explique un travail, il préfère s\'amuser avec un autre élève. Il réagit aussi de façon impulsive lorsque je lui demande de corriger son travail qu\'il avait fait beaucoup trop vite sans lire attentivement les consignes.',
                'respect' => '0',
                'user_id' => 18,
                'created_at' => '2018-11-25 21:26:52',
                'updated_at' => '2018-11-25 21:26:52',
            ),
            52 => 
            array (
                'id' => 72,
                'behavior_date' => '2018-11-21',
                'behavior_content' => 'Jimmy grafigne un ami de la classe sans raison majeur.
Retiré de la classe et travaux a faire.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-26 15:39:06',
                'updated_at' => '2018-11-26 15:39:06',
            ),
            53 => 
            array (
                'id' => 75,
                'behavior_date' => '2018-11-30',
                'behavior_content' => 'Ce matin lors de la récréation, Michel a sauté sur une amie qui lui avait donné un surnom comme Jackie Michel. Je peux comprendre que cela l\'a insulté, mais pas au point de la faire tomber et de lui sauter dessus. Un autre ami est intervenu et l\'a bousculé. Michel a alors reçu et donné des coups de poing. Par la suite, il lui a dit des mots inappropriés suceur de queue, tes cons, etc.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-30 17:22:10',
                'updated_at' => '2018-11-30 17:22:10',
            ),
            54 => 
            array (
                'id' => 76,
                'behavior_date' => '2018-11-30',
            'behavior_content' => 'Ce matin lors de la récréation, Jimmy a sauté sur un ami sans raison (il voulait défendre une amie). Il lui a aussi donné trois coups de poing selon lui. Par la suite, il lui a dit des mots inappropriés " Va niquer ta mère", "tes cons", etc.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-11-30 17:22:24',
                'updated_at' => '2018-11-30 17:22:24',
            ),
            55 => 
            array (
                'id' => 77,
                'behavior_date' => '2018-12-04',
                'behavior_content' => 'Aujourd\'hui Nathan refuse de faire tous les travaux. Problème au SDG ce matin avec sa soeur.

trois période sans travailler',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-12-04 14:45:37',
                'updated_at' => '2018-12-04 15:50:38',
            ),
            56 => 
            array (
                'id' => 78,
                'behavior_date' => '2018-12-03',
            'behavior_content' => 'Lors du dîner, il a été très arrogants avec une enseignante (surveillance pour aider le sdg) qui a dû intervenir avec lui.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-12-04 14:53:28',
                'updated_at' => '2018-12-04 14:53:28',
            ),
            57 => 
            array (
                'id' => 79,
                'behavior_date' => '2018-12-04',
                'behavior_content' => 'depuis quelques récréation Léa-Rose agace une autre élève en compagnie de son amie.
Il traite l\'élève de conne.

conséqunce: excuse lettre-dessin',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2018-12-04 15:31:39',
                'updated_at' => '2018-12-04 15:31:39',
            ),
            58 => 
            array (
                'id' => 80,
                'behavior_date' => '2018-12-04',
                'behavior_content' => 'depuis quelques récréation Léa-Rose agace une autre élève en compagnie de son amie.
Il traite l\'élève de conne.

conséquence: excuse lettre-dessin',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2018-12-04 15:32:16',
                'updated_at' => '2018-12-04 15:32:16',
            ),
            59 => 
            array (
                'id' => 81,
                'behavior_date' => '2018-12-04',
                'behavior_content' => 'Jean-Félix refuse de faire son travail de correction de texte.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-12-04 15:44:15',
                'updated_at' => '2018-12-04 15:44:15',
            ),
            60 => 
            array (
                'id' => 82,
                'behavior_date' => '2018-12-04',
                'behavior_content' => 'Refuse de faire sa période lecture',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-12-04 18:57:00',
                'updated_at' => '2018-12-04 18:57:12',
            ),
            61 => 
            array (
                'id' => 83,
                'behavior_date' => '2018-12-11',
                'behavior_content' => 'Jimmy saute sur le cadre de porte pour atteindre l\'horloge de la classe. Cette dernière a failli tomber au sol. Quand je lui remets son agenda, ce dernier le lance dans son bureau en disant à voix haute. Et c\'est le but. 
Il a passé du temps dans le couloir et voyant qu\'il ne se calmait pas, je l\'ai mis dans la classe de Mme Valérie.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2018-12-11 18:03:05',
                'updated_at' => '2018-12-11 18:03:05',
            ),
            62 => 
            array (
                'id' => 84,
                'behavior_date' => '2019-01-08',
                'behavior_content' => 'Ce matin, dans le rang, Samuel a poussé Gabriel Dontigny et il est tombé sur le dos. Je l\'ai retiré sur le bord de l\'école et j\'ai fait un retour avec lui.
Il a été retiré ce midi du SDG et il a fait de la copie.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2019-01-08 17:29:31',
                'updated_at' => '2019-01-08 17:29:31',
            ),
            63 => 
            array (
                'id' => 85,
                'behavior_date' => '2019-01-18',
            'behavior_content' => 'Mauvais comportement en classe il refuse de faire son travail (écrire les devoirs). C\'est la première fois que cela arrive.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2019-01-18 19:04:39',
                'updated_at' => '2019-01-18 19:04:39',
            ),
            64 => 
            array (
                'id' => 87,
                'behavior_date' => '2019-02-01',
                'behavior_content' => 'Nathan frappe un élève durant le Carnaval. Puis lorsqu’il rentre à l’intérieur, il fouette un ami avec son foulard.

Il frappe un ami sur l’heure du dîner.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-04 23:08:46',
                'updated_at' => '2019-02-04 23:08:46',
            ),
            65 => 
            array (
                'id' => 88,
                'behavior_date' => '2019-01-31',
                'behavior_content' => 'Nathan crache une bouchée de son repas dans celui de son ami.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-04 23:09:54',
                'updated_at' => '2019-02-04 23:09:54',
            ),
            66 => 
            array (
                'id' => 89,
                'behavior_date' => '2019-01-29',
                'behavior_content' => 'Nathan frappe un ami dans le ventre.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-04 23:10:28',
                'updated_at' => '2019-02-04 23:10:28',
            ),
            67 => 
            array (
                'id' => 90,
                'behavior_date' => '2019-02-04',
                'behavior_content' => 'Nathan frappe une amie sur l’heure du dîner dans le ventre.

Son éducatrice avait décidé de le laisser jouer sur l’heure du dîner, malgré les avertissements de l’enseignante de Nathan qui avait mentionné qu’il était privé de dîner avec les autres élèves.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-04 23:11:45',
                'updated_at' => '2019-02-04 23:11:45',
            ),
            68 => 
            array (
                'id' => 91,
                'behavior_date' => '2019-02-05',
                'behavior_content' => 'Au retour de la récré, est passé entre moi et une autre élève. Nous étions en train de discuter et il est passé entre nous deux, coupant notre conversation, alors qu\'il y avait amplement de place pour passer derrière. J\'ai expliqué que c\'était impoli et demandé des excuses. Il a répliqué sur un ton arrogant et les excuses sont venues seulement quelques minutes plus tard.',
                'respect' => '0',
                'user_id' => 8,
                'created_at' => '2019-02-05 18:49:59',
                'updated_at' => '2019-02-05 18:49:59',
            ),
            69 => 
            array (
                'id' => 92,
                'behavior_date' => '2019-02-08',
                'behavior_content' => 'À la récréation Léo a utilisé un langage inapproprié "Calice" quand je lui ai demandé d\'aller s\'asseoir près du mur. Par la suite, il s\'est relevé pour retourner à sa place du début sans permission. Très mauvaise attitude lors du retour en pm aussi. Pour lui il n\'a rien fait.',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2019-02-08 18:02:18',
                'updated_at' => '2019-02-08 18:02:18',
            ),
            70 => 
            array (
                'id' => 93,
                'behavior_date' => '2019-02-12',
                'behavior_content' => 'Lors du départ en fin de journée, Jesse refuse de quitter. Il s\'associe avec William pour continuer de rester à l\'intérieur et me manque de respect.

Conséquence, il sera le dernier à quitter la classe le 13 février.',
                'respect' => '0',
                'user_id' => 12,
                'created_at' => '2019-02-12 20:11:10',
                'updated_at' => '2019-02-12 20:11:10',
            ),
            71 => 
            array (
                'id' => 94,
                'behavior_date' => '2019-02-12',
                'behavior_content' => 'Lors du départ en fin de journée, William refuse de quitter. Perd son temps à la salle de toilettes. Il s\'associe avec Jesse pour continuer de rester à l\'intérieur et me manque de respect. Conséquence, il rendra au secrétariat à la fin de la journée du 13 fév.',
                'respect' => '0',
                'user_id' => 12,
                'created_at' => '2019-02-12 20:14:07',
                'updated_at' => '2019-02-12 20:14:07',
            ),
            72 => 
            array (
                'id' => 95,
                'behavior_date' => '2019-02-12',
                'behavior_content' => 'À la 3e période, Julien lisait son livre plutôt que de corriger son devoir. Nous nous étions entendus pour qu\'il puisse dessiner pendant une correction en grand groupe plutôt que lire, car il était plus facile de suivre ce qui se passait de cette façon. Malgré mes demandes, il a poursuivi sa lecture et il n\'a pas sorti son document de dessins. Je lui ai retiré le livre. Il s\'est mis à marcher le long du tableau blanc et à l\'arrière de la classe en faisant des allez-retours. Je lui ai demandé de s\'asseoir. Il ne l\'a pas fait après plusieurs demandes. Je l\'ai donc retiré dans la classe de Ghislain en lui demandant de faire une page de math dans un document d\'enrichissements. Il pouvait revenir après. Il n\'a rien fait et il a déchiré  une partie de la feuille. 

En pm, il est allé faire la page demandée au secrétariat. Il l\'a fait et il a pu rejoindre le groupe ensuite.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-12 20:45:13',
                'updated_at' => '2019-02-12 20:45:13',
            ),
            73 => 
            array (
                'id' => 96,
                'behavior_date' => '2019-02-12',
                'behavior_content' => 'J\'ai demandé à Jacob de venir en récupération, car il éprouvait des difficultés avec les fractions. Il est venu, mais il a boudé pendant plusieurs minutes. Même si je lui ai proposé de descendre s\'il avait l\'intention de ne rien faire, il est resté et n\'a pratiquement rien fait. Il a bougonné.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-12 20:47:05',
                'updated_at' => '2019-02-12 20:47:05',
            ),
            74 => 
            array (
                'id' => 97,
                'behavior_date' => '2019-02-14',
                'behavior_content' => 'jeudi 14 février  le midi.  Henry-James veut gérer un conflit entre deux amis.
Il dit à Kael,  qu\'il va aller chercher quelqu\'un pour lui peter la gueule .

Conséquence

Mot agenda
excuses à Kael
marche avec adulte à la récré.
jeu près de l\'adulte le midi
trouver des mots agréables à faire avec isabelle lundi

isabelle',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-14 21:07:32',
                'updated_at' => '2019-02-14 21:07:32',
            ),
            75 => 
            array (
                'id' => 98,
                'behavior_date' => '2019-02-14',
                'behavior_content' => '12 février

Marilou part à pied à la maison le soir.

Hélène va la chercher avec Mya',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-14 21:08:19',
                'updated_at' => '2019-02-14 21:08:19',
            ),
            76 => 
            array (
                'id' => 99,
                'behavior_date' => '2019-02-14',
                'behavior_content' => '12 février

Mya part à pied de l\'école.
Hélène va la chercher avec Marilou',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-14 21:09:18',
                'updated_at' => '2019-02-14 21:09:18',
            ),
            77 => 
            array (
                'id' => 100,
                'behavior_date' => '2019-02-14',
                'behavior_content' => 'Période 1: Il est debout près de son bureau, beaucoup de difficulté à rester assis. Dans un travail portant sur les inférences, il écrit natation plutôt que plongeon dans une réponse. Je lui dis que ce n\'est pas tout à fait la réponse, il s\'obstine avec moi prétextant qu\'il fait du plongeon dans son cours de natation. Il conserve sa réponse initiale.

Période 2: Je fais un retour sur une évaluation pratique qui a été plutôt manquée. Julien n\'avait pas réussit. Pourtant, il n\'écoute pas mes explications. Il a le nez dans son livre et il boude. Je distribue un travail presque identique avec de nouvelles données pour mettre en pratique ce que je viens de voir. Julien ne fait pas le travail. Après quelques demandes, il le fait mais très rapidement. Je le corrige. Il n\'a pas les bonnes réponses, mais il refuse de se questionner et de persévérer.

Période 3: Julien donne la réponse à haute voix pour la première question du jogging mathématique de la récitation. Il n\'écrit pas en lettres cursives, ni la date même s\'il s\'est très bien que s\'est obligatoire.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-14 21:10:24',
                'updated_at' => '2019-02-14 21:10:24',
            ),
            78 => 
            array (
                'id' => 101,
                'behavior_date' => '2019-02-15',
                'behavior_content' => 'Période 1: 
Julien est allé se chercher un jeu dans le coin jeux autonomes sans ma permission. Il a profité du fait d\'avoir un paravent (nous venions de faire une évaluation) pour se dissimuler derrière. 

Julien a descendu les marches d\'escalier entièrement sur les fesses. Il a été vu par Ghislain. Dorénavant, il devra toujours circuler près de moi. (Message envoyé aux parents).',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-15 14:30:34',
                'updated_at' => '2019-02-15 14:30:34',
            ),
            79 => 
            array (
                'id' => 102,
                'behavior_date' => '2019-02-15',
                'behavior_content' => '<p>Jimmy intervient lors d\'une bagarre et il utilise un langage inapproprié sur l\'heure du midi. Il sacre et insulte un ami le menaçant de le frapper.</p>',
                'respect' => 'on',
                'user_id' => 2,
                'created_at' => '2019-02-15 18:19:57',
                'updated_at' => '2019-03-14 13:34:22',
            ),
            80 => 
            array (
                'id' => 103,
                'behavior_date' => '2019-02-15',
                'behavior_content' => 'Sur l\'heure du midi,

Après une altercation verbale entre Thomas et Nathan, ce dernier se fâche et prend la tuque de Thomas. Il l\'a met dans l\'eau la piétine et part à courir avec. Le tout se termine par un placage au sol. Plusieurs coups sont alors donnés. Une fois à l\'intérieur, Nathan continue de menacer Thomas .',
                'respect' => '0',
                'user_id' => 2,
                'created_at' => '2019-02-15 18:24:31',
                'updated_at' => '2019-02-15 18:24:31',
            ),
            81 => 
            array (
                'id' => 104,
                'behavior_date' => '2019-02-28',
                'behavior_content' => '<p>Sur l&#39;heure du midi, Apr&egrave;s une altercation verbale entre Nathan et Thomas, plusieurs coups sont donn&eacute;s.</p>',
                'respect' => NULL,
                'user_id' => 2,
                'created_at' => '2019-02-15 18:25:57',
                'updated_at' => '2019-03-25 20:52:48',
            ),
            82 => 
            array (
                'id' => 105,
                'behavior_date' => '2019-02-15',
                'behavior_content' => 'Arrogance et impolitesse lors de l\'attente du rang d\'autobus. Lorsque je lui demande si j\'ai l\'air de le trouver drôle, il me répond que "oui" devant 3-4 de ses amis. Je le fais entrer à l\'intérieur afin de discuter. Un retour sera fait lundi matin afin d\'obtenir des excuses.',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2019-02-18 20:41:03',
                'updated_at' => '2019-02-18 20:41:03',
            ),
            83 => 
            array (
                'id' => 106,
                'behavior_date' => '2019-02-19',
                'behavior_content' => 'Récréation: Julien est resté en classe plutôt que de sortir à l\'extérieur. Il savait qu\'il devait sortir. Je surveillais alors j\'étais à l\'extérieur.

Retour du dîner: Manon est venue me voir pour me dire que Julien n\'était pas venu prendre son rang à la cloche. Ils l\'ont cherché (info à confirmer).

Période 5: Julien aurait dit à un élève : « je l\'ai lu le colisse » en parlant d\'un livre. Il a été retiré devant le secrétariat.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-19 20:50:09',
                'updated_at' => '2019-02-19 20:50:09',
            ),
            84 => 
            array (
                'id' => 107,
                'behavior_date' => '2019-02-19',
                'behavior_content' => 'Il était très agité aujourd\'hui. 

Il a tardé à sortir à l\'extérieur.

Il est allé lire dans le local d\'orthopédagogie pendant la période de bibliothèque, car il était trop agité.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-19 20:54:16',
                'updated_at' => '2019-02-19 20:54:16',
            ),
            85 => 
            array (
                'id' => 108,
                'behavior_date' => '2019-02-19',
                'behavior_content' => 'Samuel a avoué ne pas avoir pris sa médication.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-20 15:25:21',
                'updated_at' => '2019-02-20 15:25:21',
            ),
            86 => 
            array (
                'id' => 109,
                'behavior_date' => '2019-02-20',
                'behavior_content' => 'J\'ai questionné Samuel à la suite de la lecture du courriel de maman concernant l\'intimidation de Samuel par certains amis. Il était très peu précis et n\'a pas été en mesure de m\'expliquer ce qui se passait. En lui demandant quand les événements avaient eu lieu, il m\'a répondu le mois passé.

Je lui ai parlé du site internet et de l\'importance de venir chercher de l\'aide tout de suite. Je lui ai aussi dit qu\'il sera important d\'avoir des faits précis pour aider les adultes à intervenir.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-20 15:27:50',
                'updated_at' => '2019-02-20 15:27:50',
            ),
            87 => 
            array (
                'id' => 110,
                'behavior_date' => '2019-02-20',
            'behavior_content' => 'Julien a eu un super matin (période 1 et 2). Il est arrivé avec une attitude  positive et il était très poli. Il a fait sa routine et le travail de recherche de façon pertinente. À la récréation, Alexy Lafleur lui a demandé de rester avec lui à l\'intérieur. Je lui ai dit non, étant donné que la veille il s\'était caché deux fois sans aviser les adultes et que je surveillais. 

Il était en colère. Il est allé à la récréation en boudant et il est allé en musique ensuite.

Période 4: J\'ai distribué un document à Julien dans lequel j\'avais fait quelques corrections. Il devait corriger ses erreurs et  poursuivre le travail. Il n\'était pas d\'accord avec les erreurs alors il a décidé de ne pas poursuivre le travail. Il bougeait, montait sur sa chaise pour regarder au-dessus de classeur. Cela a duré environ 40 minutes. Il ne dérangeait pas tant les autres, mais il n\'a rien fait.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-20 15:30:20',
                'updated_at' => '2019-02-20 20:05:03',
            ),
            88 => 
            array (
                'id' => 111,
                'behavior_date' => '2019-02-20',
            'behavior_content' => 'Marilou refuse de faire le travail demandé. Elle doit sortir de classe et faire le travail avec Julie Le. Elle refuse à nouveau et a une attitude arrogante avec Julie. Je dois intervenir pour qu\'elle accepte de faire son travail. (Hélène)',
                'respect' => '0',
                'user_id' => 33,
                'created_at' => '2019-02-20 16:24:07',
                'updated_at' => '2019-02-20 16:24:07',
            ),
            89 => 
            array (
                'id' => 112,
                'behavior_date' => '2019-02-18',
                'behavior_content' => 'Julien a eu une période difficile lundi matin en Anglais. Il n\'écoutait pas les consignes, dérangeait les autres pendants les présentations orales. Depuis quelque temps, Julien semble désorganisé et on dirait que le respect des consignes ne s\'applique pas pour lui.',
                'respect' => '0',
                'user_id' => 17,
                'created_at' => '2019-02-20 17:17:49',
                'updated_at' => '2019-02-20 17:17:49',
            ),
            90 => 
            array (
                'id' => 113,
                'behavior_date' => '2019-02-20',
                'behavior_content' => 'Période 4: Jensy a un travail à faire de façon autonome. Il ne fait rien les 30 premières minutes, jusqu\'à ce que Hélène monte en classe. 

15H00: Il a été entendu avec maman que Jensy restait à l\'école jusqu\'à 16h30 pour terminer une série de travaux qu\'il n\'avait pas terminé (refus de faire le travail). Jensy s\'asseoit par terre et ne travaille pas.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-20 20:06:41',
                'updated_at' => '2019-02-20 20:06:41',
            ),
            91 => 
            array (
                'id' => 114,
                'behavior_date' => '2019-02-20',
                'behavior_content' => 'Samuel a «oublié» son sac en classe. Je crois que ce geste est volontaire, car cette situation est déjà arrivée. Il a aussi verbalisé qu\'il était pour dire à maman qu\'il n\'avait pas de devoirs. Heureusement, un élève lui a descendu son sac.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-20 20:14:14',
                'updated_at' => '2019-02-20 20:14:14',
            ),
            92 => 
            array (
                'id' => 115,
                'behavior_date' => '2019-01-30',
                'behavior_content' => 'Il bouscule, pousse à la récréation am. Nous avions fait une causerie à ce sujet en début de semaine et j\'étais aussi intervenue auprès de lui suite à ce comportement rapporté par une surveillante. Il a du marcher pendant la récréation suivante et observer à quoi il peut jouer et comment.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:23:06',
                'updated_at' => '2019-02-20 20:23:06',
            ),
            93 => 
            array (
                'id' => 116,
                'behavior_date' => '2018-01-31',
                'behavior_content' => 'Il se bataille à la récréation am. Retrait et il doit marcher pendant le reste de la récré.  Suite à cela, Julie Legendre a animé une activité sur la façon de jouer et de se comporter pendant les récréations.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:27:50',
                'updated_at' => '2019-02-20 20:27:50',
            ),
            94 => 
            array (
                'id' => 117,
                'behavior_date' => '2019-01-09',
                'behavior_content' => 'À la récréation du midi, Charles a touché aux parties intimes d\'une élèves. Il a été retiré et Julie Legendre est intervenue et a discuté avec lui pendant le reste de la récréation. Dessin d\'excuses et marche avec l\'adulte le lendemain pour observer comment jouer et à quoi.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:33:47',
                'updated_at' => '2019-02-20 20:33:47',
            ),
            95 => 
            array (
                'id' => 118,
                'behavior_date' => '2019-01-21',
                'behavior_content' => 'Très agité en classe. Parle beaucoup lorsque ce n\'est pas le temps. Il veut faire rire. 2 retraits en am dans la classe.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:36:37',
                'updated_at' => '2019-02-20 20:36:37',
            ),
            96 => 
            array (
                'id' => 119,
                'behavior_date' => '2019-01-22',
                'behavior_content' => 'Même comportement que la journée précédente.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:38:01',
                'updated_at' => '2019-02-20 20:38:01',
            ),
            97 => 
            array (
                'id' => 120,
                'behavior_date' => '2019-01-29',
                'behavior_content' => 'En classe très agité, parle et bouge beaucoup en am. Retrait en classe
Récréation am, il s\'amuse à pousser, bousculer. Retrait du jeu et marche avec l\'adulte pour observer les autres.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:42:41',
                'updated_at' => '2019-02-20 20:42:41',
            ),
            98 => 
            array (
                'id' => 121,
                'behavior_date' => '2019-01-31',
                'behavior_content' => 'Il se bataille pendant la récréation am. Des retours ont été faits en classe à ce sujet avant. Julie Legendre anime une activité sur la façon de se comporter dehors et à quoi jouer.',
                'respect' => '0',
                'user_id' => 15,
                'created_at' => '2019-02-20 20:46:47',
                'updated_at' => '2019-02-20 20:46:47',
            ),
            99 => 
            array (
                'id' => 122,
                'behavior_date' => '2019-02-21',
                'behavior_content' => 'Nathan bouscule des amis dans le rang.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-21 15:24:20',
                'updated_at' => '2019-02-21 15:24:20',
            ),
            100 => 
            array (
                'id' => 123,
                'behavior_date' => '2019-02-21',
                'behavior_content' => 'Mikaël donne un coup de poing dans le ventre de Nathan.',
                'respect' => '0',
                'user_id' => 5,
                'created_at' => '2019-02-21 15:25:00',
                'updated_at' => '2019-02-21 15:25:00',
            ),
            101 => 
            array (
                'id' => 124,
                'behavior_date' => '2019-02-21',
                'behavior_content' => 'Au retour de la récréation, je demande à Annabelle d\'être en silence à son crochet. Elle me fait une face "d\'attitude" et un sourire en coin . J\'interviens en lui mentionnant que cette attitude est impolie. Je l\'avise que je noterai notre intervention et en informe l\'enseignante. 
Julie Leblanc',
                'respect' => '0',
                'user_id' => 9,
                'created_at' => '2019-02-21 15:45:23',
                'updated_at' => '2019-02-21 15:45:23',
            ),
            102 => 
            array (
                'id' => 125,
                'behavior_date' => '2019-02-21',
            'behavior_content' => 'Brandon dit qu\'un petit lui a lancé de la neige dans la figure. Il y avait 3 petits dans ce coin-là (que faisait-il là premièrement?) Il a riposté en lançant la pelle du petit de l\'autre côté de la butte. Je lui ai demandé d\'aller rendre la pelle au petit et de rentrer à l\'intérieur. Il a rendu la pelle mais ensuite il est retourné jouer avec les grands. J\'ai dû le rappeler pour le faire rentrer. Il est rentré en bougonnant («l\'école c\'est de la merde», bla-bla-bla, etc)',
                'respect' => '0',
                'user_id' => 8,
                'created_at' => '2019-02-21 15:45:23',
                'updated_at' => '2019-02-21 15:45:23',
            ),
            103 => 
            array (
                'id' => 126,
                'behavior_date' => '2019-02-21',
            'behavior_content' => 'Jesse refuse de venir en musique depuis 2 cours (depuis que je l\'ai changé de place). Il descend par lui-même au secrétariat et passe la période là. Même quand Karine est venue porter son groupe aujourd\'hui, il est entré et quand je lui ai rappelé sa nouvelle place, il est sorti en passant devant Karine et moi. Personnellement, ça ne me dérange pas du tout, il ne fait pas le travail les 3/4 du temps pareil et refuse de faire les évaluations. Quand il n\'y est pas, le reste du groupe fonctionne mieux.',
                'respect' => '0',
                'user_id' => 8,
                'created_at' => '2019-02-21 17:34:20',
                'updated_at' => '2019-02-21 17:34:20',
            ),
            104 => 
            array (
                'id' => 127,
                'behavior_date' => '2019-02-21',
                'behavior_content' => 'Traite un ami de gros sans raison',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-21 19:34:30',
                'updated_at' => '2019-02-21 19:34:30',
            ),
            105 => 
            array (
                'id' => 128,
                'behavior_date' => '2019-02-22',
                'behavior_content' => 'À la récréation, Alexis a donné un coup de pied à un élève et s\'est caché au moment de rentrer. Suite à l\'événement, il a été retiré de la classe et a fait le travail avec la TES. Il a également été retiré du groupe tout le dîner et accompagné par la TES.

Hier, il était très fragile et peu tolérant. Il pleurait et était peu fonctionnel en classe. Il a été sorti de classe pour un repos avec la TES. Il a aussi mordu un élève de la classe. Au SDG, il était peu fonctionnel et il ne collaborait pas au moment de prendre son transport. L\'éducatrice a du l\'amener et l\'embarquer dans le véhicule.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2019-02-22 17:30:42',
                'updated_at' => '2019-02-22 17:30:42',
            ),
            106 => 
            array (
                'id' => 129,
                'behavior_date' => '2019-02-22',
                'behavior_content' => 'Ce matin, lors de ma surveillance, Jensy n\'a pas respecté la consigne de jeu sur la glace malgré mon avertissement et ma surveillance. Il a refusé de collaboré lorsque je lui ai demandé de venir me voir. 

Je lui ai fait un billet du SDG.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2019-02-22 17:33:44',
                'updated_at' => '2019-02-22 17:33:44',
            ),
            107 => 
            array (
                'id' => 130,
                'behavior_date' => '2019-02-22',
                'behavior_content' => 'À deux reprises, elle a été impoli envers moi.

J\'ai fait un retour avec elle et avisé son enseignante.',
                'respect' => '0',
                'user_id' => 11,
                'created_at' => '2019-02-22 17:35:04',
                'updated_at' => '2019-02-22 17:35:04',
            ),
            108 => 
            array (
                'id' => 131,
                'behavior_date' => '2019-02-25',
                'behavior_content' => 'à la récréation Edouard fait l\'étoile dans le rang.  Il est couché par terre sans salopette et il fait l\'étoile au beau milieu du rang.

Conséquence:  petit moment en 1er année.  Discussion, message agenda et vérification de son rang le midi avec moi.  


Isabelle',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-25 18:23:55',
                'updated_at' => '2019-02-25 18:23:55',
            ),
            109 => 
            array (
                'id' => 132,
                'behavior_date' => '2019-02-25',
                'behavior_content' => 'refuse de collaborer lors de la lecture du roman.  elle lit son livre de bibliothèque et elle ne suit pas les consignes de Kelly.

9
isabelle',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-25 18:25:43',
                'updated_at' => '2019-02-25 18:25:43',
            ),
            110 => 
            array (
                'id' => 133,
                'behavior_date' => '2019-02-25',
                'behavior_content' => 'Félix traite Kelly de chienne car il ne veut pas être dans le groupe du roman en lecture.',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-25 18:26:25',
                'updated_at' => '2019-02-25 18:26:25',
            ),
            111 => 
            array (
                'id' => 134,
                'behavior_date' => '2019-02-27',
                'behavior_content' => 'Julien n\'écoute pas les consignes en anglais, dérange les autres et ne veux pas compléter son test. Il ce reprend vers la fin de la période est complète sa dictée. Difficile pour Julien de rester constant avec son comportement.',
                'respect' => '0',
                'user_id' => 17,
                'created_at' => '2019-02-27 14:50:01',
                'updated_at' => '2019-02-27 14:50:01',
            ),
            112 => 
            array (
                'id' => 135,
                'behavior_date' => '2019-02-27',
            'behavior_content' => 'Jensy perd son temps à la toilette(15 mins) et ne fini pas son test d\'anglais. Je dois faire de la récupération avec lui car il n\'étudie pas et prend beaucoup de retard.',
                'respect' => '0',
                'user_id' => 17,
                'created_at' => '2019-02-27 14:54:23',
                'updated_at' => '2019-02-27 14:54:23',
            ),
            113 => 
            array (
                'id' => 136,
                'behavior_date' => '2019-02-27',
            'behavior_content' => 'Après les présentations orales (stands), pendant que les élèves rangent, Samuel fait un gros tourbillon sur le tableau blanc de la classe. Son dessin prend toute la place. 

Il a dû laver le tableau en entier avant de quitter la classe avec le produit.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-27 18:29:31',
                'updated_at' => '2019-02-27 18:29:31',
            ),
            114 => 
            array (
                'id' => 137,
                'behavior_date' => '2019-02-26',
                'behavior_content' => 'Brandon était en retrait dans ma classe à la dernière période. Vers la fait de la période, des élèves m\'ont avisée que Brandon avait fait un doigt d\'honneur à un élève de ma classe. Selon Brandon, l\'autre élève lui en aurait fait un en premier. Mon élève affirme l\'avoir pointé du doigt, mais dit ne pas lui avoir fait de doigt d\'honneur.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-27 18:36:50',
                'updated_at' => '2019-02-27 18:36:50',
            ),
            115 => 
            array (
                'id' => 138,
                'behavior_date' => '2019-02-27',
                'behavior_content' => 'À la fin de la journée, j\'ai croisé Juliette. Elle avait un drôle de visage. Je me demandais si elle pleurait ou si elle riait. Je l\'ai donc arrêté pour savoir ce qui se passait. Elle avait dans ses mains une mèche de cheveux. Elle m\'a dit que quelqu\'un l\'avait trouvée par terre et que c\'était à elle, qu\'un élève lui avait coupé les cheveux. Elle pensait que c\'était Léo.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-27 20:08:55',
                'updated_at' => '2019-02-27 20:08:55',
            ),
            116 => 
            array (
                'id' => 139,
                'behavior_date' => '2019-02-27',
                'behavior_content' => 'Je suis allée questionner Léo pour savoir s\'il avait quelque chose à dire concernant la mèche de cheveux que j\'avais dans les mains. Il m\'a dit qu\'il n\'avait rien fait. Il a dit que c\'était peut-être Mathis. 

Je lui ai dit que je ferais mon enquête. 

Avant que je quitte, il est venu me dire qu\'il avait coupé une très petite mèche des cheveux de Juliette, mais pas une aussi grosse que cela.',
                'respect' => '0',
                'user_id' => 30,
                'created_at' => '2019-02-27 20:10:46',
                'updated_at' => '2019-02-27 20:10:46',
            ),
            117 => 
            array (
                'id' => 150,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'À l’heure du dîner, Léo pleure à la cafétéria et refuse de dire pourquoi. Je lui demande s’il est triste ou en colère, il ne répond pas. Je lui dis alors qu’il peut aller au secrétariat ou dans mon bureau le temps de retrouver son calme. Il refuse. Il se fâche et dit qu’il veut aller dehors. Dans son état, et comme il refuse de me dire pourquoi il pleure, je refuse de le laisser sortir. Stéphanie prend ma place quelques instants et Léo profite d’un moment où elle doit aller voir un autre élève pour sortir dehors. Elle doit sortir et le ramener à mon bureau. Il fait alors une crise, refuse de nous parler. Comme sa crise dure alors depuis plus d’une heure, le parent est appelé pour qu’il vienne le chercher.',
                'respect' => '0',
                'user_id' => 33,
                'created_at' => '2019-02-28 22:48:50',
                'updated_at' => '2019-02-28 22:48:50',
            ),
            118 => 
            array (
                'id' => 142,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Elle dit des paroles blessantes à Lili-Maude.

Nous avons eu une discussion et des excuses ont été faites.

isa',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 15:58:14',
                'updated_at' => '2019-02-28 15:58:14',
            ),
            119 => 
            array (
                'id' => 143,
                'behavior_date' => '2019-02-28',
            'behavior_content' => 'Brandon ajoute des commentaires aux conflit entre filles. (Lili-Maude, Anais, Anabelle)',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 15:59:23',
                'updated_at' => '2019-02-28 15:59:23',
            ),
            120 => 
            array (
                'id' => 144,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Lili-Maude s\'exprime mal et cela cause un conflit avec Anaïs.

On s\'explique pour régler le conflit',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 16:00:26',
                'updated_at' => '2019-02-28 16:00:26',
            ),
            121 => 
            array (
                'id' => 145,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Brandon alimente le conflit entre les filles.
Il lance des blocs de glace .',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 16:01:43',
                'updated_at' => '2019-02-28 16:01:43',
            ),
            122 => 
            array (
                'id' => 146,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Anaïs dit des paroles blessantes a Lili-Maude.
Elle lui lance des blocs de glace.

Discussion  et excuses ont été faites

isa',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 16:03:30',
                'updated_at' => '2019-02-28 16:03:30',
            ),
            123 => 
            array (
                'id' => 147,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Lili-Maude s\'exprime mal et cela amène un conflit avec Anaïs.

Discussion pour bien expliquer

isa',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 16:04:23',
                'updated_at' => '2019-02-28 16:04:23',
            ),
            124 => 
            array (
                'id' => 148,
                'behavior_date' => '2019-02-28',
                'behavior_content' => 'Elle cache de la gomme dans ses poches et des collations.',
                'respect' => '0',
                'user_id' => 10,
                'created_at' => '2019-02-28 16:04:50',
                'updated_at' => '2019-02-28 16:04:50',
            ),
            125 => 
            array (
                'id' => 151,
                'behavior_date' => '2019-02-20',
                'behavior_content' => 'À l’heure du départ à la fin de la journée, Shawn a lancé des blocs de glace sur un autobus. Une plainte du service des transports a été faite. Pour les deux jours suivants, Shawn doit quitter après le départ des autobus. Le parent a été avisé par Marc-Antoine.',
                'respect' => '0',
                'user_id' => 33,
                'created_at' => '2019-02-28 23:09:08',
                'updated_at' => '2019-02-28 23:09:08',
            ),
            126 => 
            array (
                'id' => 152,
                'behavior_date' => '2019-03-01',
                'behavior_content' => '<p>En pm nous nous appr&ecirc;tions &agrave; regarder un film quand j&#39;ai demand&eacute; &agrave; Jimmy et un autre ami de ne pas &ecirc;tre assis un &agrave; c&ocirc;t&eacute; de l&#39;autre, pour &eacute;viter les probl&egrave;mes et de faire de la discipline. Il a alors exprim&eacute; son m&eacute;contentement en disant: &quot;C&#39;est de la merde.&quot; Je lui ai alors demand&eacute; d&#39;aller se calmer dans le local de Mme Julie. Il m&#39;a alors dit: &quot;Je suis tann&eacute; de ta face.&quot; Arriv&eacute; au local de Mme Julie il a bousculer les meubles et crier une fois de plus qu&#39;il &eacute;tait tann&eacute; de ma face.</p>',
                'respect' => NULL,
                'user_id' => 2,
                'created_at' => '2019-03-01 18:07:42',
                'updated_at' => '2019-03-27 13:58:32',
            ),
            127 => 
            array (
                'id' => 162,
                'behavior_date' => '2019-03-11',
            'behavior_content' => 'Il joue dans l\'immense trou d\'eau (zone qui était fermée) au son de la cloche du diner sans prendre le rang.  Karine et moi avons discuté avec lui afin de bien lui faire comprendre que ce n\'était pas une bonne idée. Il a été avisé que ce serait le seul avertissement auquel il avait droit.',
                'respect' => NULL,
                'user_id' => 9,
                'created_at' => '2019-03-12 08:33:37',
                'updated_at' => '2019-03-12 08:33:37',
            ),
            128 => 
            array (
                'id' => 163,
                'behavior_date' => '2019-03-11',
            'behavior_content' => 'Il joue dans l\'immense trou d\'eau (zone qui était fermée) au son de la cloche du diner sans prendre le rang.  Karine et moi avons discuté avec lui afin de bien lui faire comprendre que ce n\'était pas une bonne idée. Il a été avisé que ce serait le seul avertissement auquel il avait droit.',
                'respect' => NULL,
                'user_id' => 9,
                'created_at' => '2019-03-12 08:35:33',
                'updated_at' => '2019-03-12 08:35:33',
            ),
            129 => 
            array (
                'id' => 164,
                'behavior_date' => '2019-03-11',
            'behavior_content' => 'Il joue dans l\'immense trou d\'eau (zone qui était fermée) au son de la cloche du diner sans prendre le rang.  Karine et moi avons discuté avec lui afin de bien lui faire comprendre que ce n\'était pas une bonne idée. Il a été avisé que ce serait le seul avertissement auquel il avait droit.',
                'respect' => NULL,
                'user_id' => 9,
                'created_at' => '2019-03-12 08:36:15',
                'updated_at' => '2019-03-12 08:36:15',
            ),
            130 => 
            array (
                'id' => 169,
                'behavior_date' => '2019-03-13',
                'behavior_content' => 'passe des commentaires à voix haute à plusieurs reprises pendant le cours de musique.',
                'respect' => NULL,
                'user_id' => 8,
                'created_at' => '2019-03-13 14:00:09',
                'updated_at' => '2019-03-13 14:00:09',
            ),
            131 => 
            array (
                'id' => 170,
                'behavior_date' => '2019-03-13',
            'behavior_content' => 'Continue de lire après le 5 min de lecture (1er avertissement). Continue de lire en cachette sous son bureau (2e-livre confisqué). Se prend un dictionnaire pour continuer de lire au lieu de participer. Nette opposition. Temps repris avec un autre groupe.',
                'respect' => NULL,
                'user_id' => 8,
                'created_at' => '2019-03-13 14:04:38',
                'updated_at' => '2019-03-13 14:04:38',
            ),
        ));
        
        
    }
}
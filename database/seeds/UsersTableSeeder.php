<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Ghislain Girard',
                'email' => 'ghislain.girard@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$ChoCTL0Hb.h.7hbBMJnj4efQBf4cCsyMlT3/57C42rW8h4/ccD1vC',
                'remember_token' => 'TrLKb7LaSoOMvMegQv7sRsU5YcxgeUlrfr0T9sCnA9dhS4wcyxeMDL06TZiF',
                'created_at' => '2018-10-18 00:32:25',
                'updated_at' => '2018-10-18 00:32:25',
            ),
            1 => 
            array (
                'id' => 10,
                'name' => 'Isabelle Allard',
                'email' => 'isabelle.allard@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$BfifKS3ZLRWAWaEQggHFje7xzPxJjjbkMj39cJQ5bVGyZC.RRE3jO',
                'remember_token' => 'cGMs3ektvktB3qvnpjXhOl9Gc2ZHAMDKuzpwIkGwP8tl1KNpFx5H7i8rHuk0',
                'created_at' => '2018-10-23 17:38:30',
                'updated_at' => '2018-10-23 17:38:30',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Julie',
                'email' => 'julie.leblanc@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$BTA3R7J1eOnbTLfq/IZea.RPsYH83YaVKwaT7rSLEXl5wazocjmXS',
                'remember_token' => '5eNeCWh6Ahm8A3zDz1h3sXx6G6vcjIqARUV85TAQ0Tpx9UZoxxL3fdcZzvry',
                'created_at' => '2018-10-23 16:51:56',
                'updated_at' => '2018-10-23 16:51:56',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Geneviève Côté',
                'email' => 'cote_genevieve@live.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$HYH8Xdrk2sNX1yKVjSRVKeMLj/LGb4Va/XOib78URBuQDg6hzyucK',
                'remember_token' => NULL,
                'created_at' => '2018-10-22 20:00:18',
                'updated_at' => '2018-10-22 20:00:18',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Christine',
                'email' => 'christine.marquis@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$CHD6xuSsJqzafH/ZfQM2Ser9I7Dx96nJQnTCCE26.UIkugJclzUpy',
                'remember_token' => 'npa3TZ3T8mcnMWwuKmIy4GduphhD0NQo39jD8nP4ZyWysnriTmxY197ThTSn',
                'created_at' => '2018-10-22 20:06:10',
                'updated_at' => '2018-10-22 20:06:10',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Alexandre Desjardins',
                'email' => 'alexandre.desjardins@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$ajXR3umU77cP5O2dziZ6PuVrstfppqfCv3O3wD.6dm57rd3yXv91O',
                'remember_token' => NULL,
                'created_at' => '2018-10-22 20:06:42',
                'updated_at' => '2018-10-22 20:06:42',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Marie-Pierre Champigny',
                'email' => 'marie-pierre.champigny@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$fLfGTZ6RHNM5HWeUkoIO1OxD9QXA.q8mukzxUmHwfS6F3vex5XDFq',
                'remember_token' => NULL,
                'created_at' => '2018-10-22 20:08:34',
                'updated_at' => '2018-10-22 20:08:34',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Julie Legendre',
                'email' => 'julie.legendre@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$etXvuz12iGJQJ.oM43ct2.WbdUvfzeEKwTL4rA80nG0YM0SpKBGB6',
                'remember_token' => 'kEUoigmQH4HCXapzVcUYiKTodk6w0SlLuqpYVvgehNrY5A78PT5Gz5PS3Mrj',
                'created_at' => '2018-10-24 16:10:33',
                'updated_at' => '2018-10-24 16:10:33',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Karine Bousquet',
                'email' => 'kbousquet@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$pMQkbPyytHvu8L96XL8UdevRXYU80m57jQS254iG6MQlrdH/IoZ9S',
                'remember_token' => 'Y8LB79jDLPx4kt019ge20BUjDg37Dd7TUfnC8qOefF4tPItWsntw518tDeEN',
                'created_at' => '2018-10-24 16:34:46',
                'updated_at' => '2018-10-24 16:34:46',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Lyne Bouthillette',
                'email' => 'lyne.bouthillette@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$3I32c6gUZb3L6tcIUSHP5OP4DG9RZd0vVLnbOseZcT5n1kCBYzt/y',
                'remember_token' => 'Nst98JSCxtNPbkt2hPz6UX1ZuRbcMhE4U9f89DsT4aTy03xlgDblb4ttUGUS',
                'created_at' => '2018-10-26 12:24:55',
                'updated_at' => '2018-10-26 12:24:55',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Geneviève Plante',
                'email' => 'genevieve.plante@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$1yJ9nPZh.N5QGGCdVQH0keLhLaCQS.4oP4YaWJJvg4A.m11xtrIm6',
                'remember_token' => 'HPe805ONuTQOm21TiMw1XUiD7BD2QjN367LlKmL0MIimwRQfIOxUFjehWEeS',
                'created_at' => '2018-10-26 12:29:52',
                'updated_at' => '2018-10-26 12:29:52',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Nathalie Pelland',
                'email' => 'nathalie.pelland@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$YO4cm1VixqsVeay9VlIBN.1KXFqW7XxOn8XeodLqKiGr4EWcHkjYy',
                'remember_token' => 'hZ00k1T4aPWKVETghqQmVKV0OuECggIc7nmiky2Rm9jBApptFweorRoPTh9p',
                'created_at' => '2018-10-26 12:36:58',
                'updated_at' => '2018-10-26 12:36:58',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Joannie',
                'email' => 'joannie.joyal@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$UvWZA1No9kv6bK8fzc6ETeRNf7/1oMNpbrHuABLwlp4eeiAMaLpDK',
                'remember_token' => '2DJjhpvknwoHQCH80sifA3ELNRKDopZ47pDDstqkMvXjbq7IGdc38vCmignv',
                'created_at' => '2018-10-29 23:24:40',
                'updated_at' => '2018-10-29 23:24:40',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'Patrick Duquette',
                'email' => 'patrick.duquette@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$Eg5a1yImdTy7SXBvpMkfqeZ9rDp/QFHZQKoewbJ7b4zbIP1ffVY5G',
                'remember_token' => 'misRwp1HdB8G2IKTCk1bCdjG4CcVEZOL7yiBiNydiF9j5bbaWaqkcK8IPglx',
                'created_at' => '2018-10-30 16:29:12',
                'updated_at' => '2018-10-30 16:29:12',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'Eve Bouchard',
                'email' => 'eve.bouchard@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$k4tyj4S7mhB4gGywVdoqN.KH8H/X6Txj5.sSwA1NvOK97Sm92jmgW',
                'remember_token' => 'AZReJleHHandwB0hvZFqvIBBy11QmkeSvOKPL3AzFZQxMWaKpGr18EO6mYYX',
                'created_at' => '2018-10-30 16:52:11',
                'updated_at' => '2018-10-30 16:52:11',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'Hélène Laforest',
                'email' => 'hlaforest@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Direction',
                'password' => '$2y$10$v0D.ef.DCM9EPrvp2r5d3OpUt2BpYJKdVtLlLxMT0djZBmuIqu33.',
                'remember_token' => 'rnekc1ugtKvhLN5rMC7c4PBTOGLkVLXS1fsIbChNY0iUAxInEZRqd0NbFhrB',
                'created_at' => '2018-11-01 18:54:50',
                'updated_at' => '2018-11-01 18:54:50',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Alexandre Desjardins',
                'email' => 'tilex_desjardins@hotmail.com',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$EApECZt6cZRL34sc8XH6jev19Mlq3i0rcJx5SARc8xfE44bAuhBMa',
                'remember_token' => NULL,
                'created_at' => '2018-11-02 12:49:06',
                'updated_at' => '2018-11-02 12:49:06',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'Sdg Soleil',
                'email' => 'stephanie.graveline@hotmail.com',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$3eZJoKX7hiKKn.lhVBJhsOWktqZTiN02BbnonUvq18/8D6VQXgxnq',
                'remember_token' => NULL,
                'created_at' => '2018-11-13 20:26:36',
                'updated_at' => '2018-11-13 20:26:36',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'Technicienne Sdg',
                'email' => 'stephanie.graveline@cssh.qc.ca',
                'email_verified_at' => NULL,
                'role' => 'Direction',
                'password' => '$2y$10$ttmUsbpBgUFw6zLlQ0kocefE7PJGumE8OZhnNGKvukcupN7QycO72',
                'remember_token' => NULL,
                'created_at' => '2018-11-13 20:30:46',
                'updated_at' => '2018-11-13 20:30:46',
            ),
            19 => 
            array (
                'id' => 25,
                'name' => '123',
                'email' => 'tata@tata.tata',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$N5LtJIpevmWlh81cj5k1vuUN.CFb1ePahNF/aYPST10Z4mcvE38Hu',
                'remember_token' => 'VBPxxW3owNGMR3a8k5jlxOqHqFoZCaSzmOCzPPPEPUhnjco1zytrHS5W68hi',
                'created_at' => '2019-03-24 14:54:05',
                'updated_at' => '2019-03-24 14:54:05',
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'Ghislain',
                'email' => 'toto@toto.toto',
                'email_verified_at' => NULL,
                'role' => 'Enseignant',
                'password' => '$2y$10$dr5dtegKMn2QdZx4RtG2Oe.LcG7tAodL6h1OkBKhqAzfVmnIX.aVu',
                'remember_token' => 'XlRsp4sohOrzKzAsGjwgDiLZY3JEIoa2UDptPP7dEtaBDimWnIkJPwV4IwpQ',
                'created_at' => '2019-03-24 14:56:16',
                'updated_at' => '2019-03-24 14:56:16',
            ),
        ));
        
        
    }
}
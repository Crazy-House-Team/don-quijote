<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()->create([
            'title' => 'TEST',
            'date' => '2025-08-12',
            'max_participants' => 1,
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Taller de Sevillanas',
            'resume' => ' Cursillo de Sevillanas.',
            'description' => 'Curso de sevillanas.',
            'place' => 'Casa de la Cultura',
            'address' => 'Ortiguera - Asturias.',
            'date' =>'2022-09-07', 
            'time' => '19:00 ',
            'img' => '/img/img_11.jpg',
            'favorite' => true,
        ]);
        Event::factory()->create([
            'title' => 'Fiesta de Halloween para niños',
            'resume' => 'Fiesta de Halloween para niños Esfoyaza y Magüestu.',
            'description' => 'En este taller, realizaremos disfraces y preparaemos el tradicional Magüestu.',
            'place' => 'Sede Vecinal',
            'address' => 'C/ Instituto 23, Gijón.',
            'date' =>'2022-10-29', 
            'time' => '17:00 ',
            'img' => '/img/img_13.jpg',
            'favorite' => true,
        ]);
        Event::factory()->create([
            'title' => 'La vendimia del vino de calidad de Cangas',
            'resume' => 'CATAS, MERCADO, ARTESANÍA...',
            'description' => 'La escenificación del transporte de la uva en un carro del país y la tradicional pisada de uva es uno de sus principales actos, que se complementa con catas, mercadillo, puestos de artesanía, venta de productos tradicionales y actividades para niños.',
            'place' => 'Cangas del Narcea.',
            'address' => 'Cangas del Narcea - Asturias.',
            'date' =>'2022-10-07', 
            'time' => '10:00 ',
            'img' => '/img/img_12.jpg',
            'favorite' => true,
        ]);
        Event::factory()->create([
            'title' => 'Descubre el Centro Niemeyer',
            'resume' => 'Eve Arnold, Inge Morath y Cristina García Rodero ',
            'description' => 'Las visitas guiadas a Centro Niemeyer, son recorridos acompañados por un guía que, edificio a edificio, va desgranando la historia, curiosidades y eventos señalados en la única obra de Oscar Niemeyer en España.',
            'place' => 'Centro Niemeyer.',
            'address' => 'Av. del Zinc, s/n, 33490 Avilés, Asturias.',
            'date' =>'2022-10-16', 
            'time' => '11:00 ',
            'img' => '/img/img_17.jpg',
            'favorite' => true,
        ]);
        
        
        Event::factory()->create([
            'title' => 'Festival de la Manzana',
            'resume' => 'Festival de la Manzana y la Sidra.',
            'description' => 'Se llevan a cabo diferentes actividades para todos los públicos, entre las que destaca su famosa exposición de manzanas, el mercado de otoño o el tren de la manzana.',
            'place' => 'Villaviciosa.',
            'address' => 'Villaviciosa - Asturias.',
            'date' =>'2022-10-12', 
            'time' => '19:00',
            'img' => '/img/img_10.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Club de la lectura',
            'resume' => 'Aquitania.',
            'description' => 'Tenemos poco tiempo pero suficiente. El libro recomendado es AQUITANIA de Eva García Sáenz de Urturi, ganadora del premio Planeta 2020. Es una mezcla del género histórico con el thriller.',
            'place' => 'Sede Vecinal',
            'address' => 'Camino de los Claveles 324,Somio-Gijon.',
            'date' =>'2021-11-28', 
            'time' => '17:00 ',
            'img' => '/img/img_14.jpg',
            'favorite' => false,
        ]);
	   Event::factory()->create([
            'title' => 'Ambientadores solidos de cera de soja',
            'resume' => 'Taller.',
            'description' => 'En este taller, realizaremos ambietadores solidos de cera de soja.',
            'place' => 'LA CÓSMICA ',
            'address' => 'C/ Instituto 23, Gijón.',
            'date' =>'2022-09-05', 
            'time' => '17:00 ',
            'img' => '/img/img_15.jpg',
            'favorite' => false,
       ]);
       Event::factory()->create([
        'title' => 'Aviles.Sabor de verano',
        'resume' => 'XVII Semana de la Tapa',
        'description' => 'Los pequeños bocados para acompañar la bebida, o sin ella, serán una vez más los grandes protagonistas del certamen que pondrá el punto y final del verano gastronómico de Avilés.',
        'place' => 'Casco Antiguo.',
        'address' => 'Avilés - Asturias.',
        'date' =>'2022-09-01', 
        'time' => '10:00 ',
        'img' => '/img/img_16.jpg',
        'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Tres mujeres Magnum',
            'resume' => 'Eve Arnold, Inge Morath y Cristina García Rodero ',
            'description' => 'Esta exposición es un homenaje a estas tres mujeres en la fotografía, que han roto los límites y los tópicos del oficio de fotógrafo, además de demostrar que la mujer sabe contar el mundo, representar la realidad y los sueños de la vida de hombres y mujeres.',
            'place' => 'Centro Niemeyer.',
            'address' => 'Av. del Zinc, s/n, 33490 Avilés, Asturias.',
            'date' =>'2022-06-16', 
            'time' => '17:00 ',
            'img' => '/img/img_18.jpg',
            'favorite' => false,
        ]);
     
        Event::factory()->create([
            'title' => 'Romería de los Santos Mártires de Valdecuna',
            'resume' => 'Romería de los Santos Mártires de Valdecuna ',
            'description' => 'La Romería de los Santos Mártires de Cuna se celebra el día 27 de Septiembre en el entorno del Santuario de San Cosme y San Damián ubicado en las cercanías de la localidad de Insierto.
            ',
            'place' => 'Mieres',
            'address' => 'Mieres - Asturias.',
            'date' =>'2022-08-27', 
            'time' => '10:00 ',
            'img' => '/img/img_20.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Oktoberfest en Gijón',
            'resume' => 'Ribeseya acoge una nueva edición de esta fiesta ',
            'description' => 'El Parque de los Hermanos Castro de Gijón / Xixón acoge este festival en cuyas cervecerías se servirán una gran selección de marcas internacionales con animación y música en directo.',
            'place' => 'Parque de los Hermanos Castro',
            'address' => 'Parque de los Hermanos Castro - Gijón',
            'date' =>'2022-09-11', 
            'time' => '17:00 ',
            'img' => '/img/img_21.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'La Plazoleta Rula de Ribadesella',
            'resume' => 'Ribeseya acoge una nueva edición de esta fiesta ',
            'description' => 'II Concurso de Gaiter@s Gelu Cuervo.Final VI Concursu Sidre Caseru y preba popular.Ronda previa VI Concursu Sidre Caseru. Noche Folk: Felpeyu, Baxel y Abéu .Nueche de DJ’s: DJ Juanra + Basi.',
            'place' => 'Plazoleta Rula',
            'address' => ' Plazoleta Rula, Ribadesella',
            'date' =>'2022-08-31', 
            'time' => '17:00 ',
            'img' => '/img/img_22.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Mercado Artesano y Ecológico.',
            'resume' => ' Mercado Artesano y talleres.',
            'description' => 'Mercado Artesano y Ecológico junto con las actividades y talleres,que permiten a gijoneses y turistas acercarse a la cultura y realidad asturiana de una forma participativa y didáctica. ',
            'place' => 'Plaza Mayor',
            'address' => 'Plaza Mayor - Gijón.',
            'date' =>'2022-10-01', 
            'time' => '11:00 ',
            'img' => '/img/img_23.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Su Excelencia La Fabada.',
            'resume' => ' Taller.',
            'description' => 'La Felguera acoge la celebración de la Fiesta Gastronómica Su Excelencia La Fabada.',
            'place' => 'Casa de la Cultura',
            'address' => 'Langreo - Asturias.',
            'date' =>'2021-12-03', 
            'time' => '11:00 ',
            'img' => '/img/img_24.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Carreras de Caballos de la Playa de Ribadesella',
            'resume' => 'Carreras de Caballos.',
            'description' => 'Playa de Santa Marina - Ribadesella.',
            'place' => 'Playa de Santa Marina - Ribadesella.',
            'address' => 'Ribadesella- Asturias.',
            'date' =>'2022-04-15', 
            'time' => '11:00 ',
            'img' => '/img/img_25.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Festival Internacional Longboard Surf Salinas.',
            'resume' => 'Longboard Surf Salinas.',
            'description' => 'El festival con mayor tradición y solera que existe en Europa, y se encuentra en la actualidad entre los tres más importantes del mundo. Además fue el primero en Asturias en realizar un maridaje lúdico-deportivo..',
            'place' => 'Playa de Salinas',
            'address' => 'Salinas - Castrillon - Asturias.',
            'date' =>'2022-07-27', 
            'time' => '11:00 ',
            'img' => '/img/img_26.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Tenis-Playa Luanco.',
            'resume' => 'Torneo de tenis en Gozón.',
            'description' => 'Torneo único en el mundo sobre la arena de una playa.',
            'place' => 'La playa de La Ribera ',
            'address' => ' Luanco - Gozón- Asturias.',
            'date' =>'2022-07-29', 
            'time' => '12:00 ',
            'img' => '/img/img_30.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'CometCon.',
            'resume' => 'LABoral Centro de Arte .',
            'description' => 'Décima edición de este festival que contará concursos, videojuegos, literatura, cine, cosplay, cómic, arte, ilustración, rol, conciertos....',
            'place' => 'RECINTO FERIAL LUIS ADARO',
            'address' => 'Paseo Dr. Fleming, 481, 33203 Gijón, Asturias.',
            'date' =>'2022-09-04', 
            'time' => '19:00 ',
            'img' => '/img/img_31.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Parque de la Prehistoria',
            'resume' => 'Prehistoria y Prehistofauna.',
            'description' => 'Programa de actividades: recorrido guiado por los cercados de animales .',
            'place' => 'Parque de la Prehistoria.',
            'address' => 'San Salvador de Alesga - Teverga - Asturias.',
            'date' =>'2022-07-17', 
            'time' => '11:00 ',
            'img' => '/img/img_33.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Conoce nuestros osos.',
            'resume' => 'Itinerarios de verano en Proaza.',
            'description' => 'Visita guiada a la Casa del Oso de Proaza, donde se proyectará un breve vídeo, y un paseo por la Senda del Oso hasta llegar a los cercados donde habitan Paca y Molina.',
            'place' => 'Casa del Oso.',
            'address' => 'Proaza - Asturias.',
            'date' =>'2022-08-07', 
            'time' => '10:30 ',
            'img' => '/img/img_34.jpg',
            'favorite' => false,
        ]);

        Event::factory()->create([
            'title' => 'La Sierra del Sueve',
            'resume' => 'Programa de rutas.',
            'description' => 'Programa de rutas y visitas guiadas al patrimonio natural y cultural del concejo de Colunga y la Sierra del Sueve durante este verano.',
            'place' => 'El Centro de Interpretación de la Sierra del Sueve.',
            'address' => 'Colunga - Asturias.',
            'date' =>'2022-09-15', 
            'time' => '11:00 ',
            'img' => '/img/img_35.jpg',
            'favorite' => false,
        ]);
        Event::factory()->create([
            'title' => 'Meditación',
            'resume' => 'Taller.',
            'description' => 'Aprende a gestionar las situaciones de stress atraves de la meditaión .',
            'place' => 'Centro Social Laviada.',
            'address' => 'C/Carlos Marx 24 - Gijón.',
            'date' =>'2022-08-17', 
            'time' => '17:00 ',
            'img' => '/img/img_37.jpg',
            'favorite' => false,
        ]);

        User::factory()->create([
            'name' => 'admin',
            'is_admin' => true,
            'email' => 'admin@admin.com',
        ]);
        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@user1.com',
        ]);
        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@user2.com',
        ]);
        
    }
}

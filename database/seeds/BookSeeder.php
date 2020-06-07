<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_name' => 'El Mundo y sus Demonios',
            'book_author' => 'Carl Sagan',
            'book_description' => 'El mundo y sus demonios. La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico. Explica métodos que ayudan a distinguir entre ideas que son consideradas ciencia válida e ideas consideradas pseudociencia; según él, indica que cuando una nueva idea se plantea, ésta debe ser sometida a consideración, para luego ser probada rigurosamente. El pensamiento escéptico da medios para construir, entender, razonar y reconocer ideas válidas o erróneas hasta donde la verificación sea posible.',
            'category_id' => 1,
            'book_image' => 'elmundoysusdemonios.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Camino de las Lágrimas',
            'book_author' => 'Jorge Bucay',
            'book_description' => 'El camino de las lágrimas, comienza cuando nos conectamos con lo doloroso; con la pérdida de alguien, (ya sea muerte o alejamiento) o algún objeto; debido a la cultura en la que vivimos, en donde nos han enseñado a sufrir por la muerte de un ser querido, a depender de alguien para realizar ciertas actividades, a tener una “muleta” para seguir adelante y si no la tenemos, no podemos continuar y nos enfrentaremos a caminar por el “oscuro” camino de las lagrimas aunque este alejamiento o perdida de objeto sea para mejorar o crecer, no evita la pena; el dolor que ocasiona: él se fue, él ya no estará, él se perdió.',
            'category_id' => 1,
            'book_image' => 'elcaminodelaslagrimas.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Caballero de la Armadura Oxidada',
            'book_author' => 'Robert Fisher',
            'book_description' => 'El relato gira en torno a un heroico caballero medieval, quien portaba una bella armadura, la cual reflejaba los rayos de sol. Con el tiempo, el caballero se habituó a llevarla siempre puesta sin quitársela ni para dormir. Un día, tras las súplicas de su esposa, decide quitársela y descubre que no puede. Así es como comienza un largo peregrinaje para encontrar ayuda para poder deshacerse de su armadura. En esta jornada recibirá la ayuda del mago Merlín y de otros personajes del cuento popular europeo.',
            'category_id' => 1,
            'book_image' => 'elcaballerodelaarmaduraoxidada.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Harry Potter y la Piedra Filosofal',
            'book_author' => 'Joanne Kathleen Rowling',
            'book_description' => 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería. A partir de ese momento, la suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar de quidditch, especie de fútbol aéreo que se juega montado sobre escobas, y se hará un puñado de buenos amigos...',
            'category_id' => 1,
            'book_image' => 'harrypotterylapiedrafilosofal.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Diario de Ana Frank',
            'book_author' => 'Ana Frank',
            'book_description' => 'ras la invasión de Holanda, los Frank, comerciantes judíos alemanes emigrados a Amsterdam en 1933, se ocultaron de la Gestapo en una buhardilla anexa al edificio donde el padre de Ana tenía sus oficinas. Eran ocho personas y permanecieron recluidas desde junio de 1942 hasta agosto de 1944, fecha en que fueron detenidos y enviados a campos de concentración. En ese lugar y en las más precarias condiciones, Ana, a la sazón una niña de trece años, escribió su estremecedor Diario: un testimonio único en su género sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompañantes.',
            'category_id' => 3,
            'book_image' => 'eldiariodeanafrank.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Samurai Chess',
            'book_author' => 'Michael J. Gelb y Raymond Keene',
            'book_description' => 'Suggests ways of using martial arts principle and strategies, including attack, follow-through, impenetrable defense, timing, distance, surprise and deception, and artful surrender, to improve chess skills',
            'category_id' => 4,
            'book_image' => 'samuraichess.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Nudo de Víboras',
            'book_author' => 'Francois Mauriac',
            'book_description' => 'Es una larga carta en la que un rico abogado de sesenta y ocho años, hombre avaro por naturaleza, presintiendo la cercanía de la muerte, relata de manera fiel los sentimientos de toda una vida. Tras un matrimonio infeliz con la hija de una familia de la alta burguesía venida a menos, cuya única dote era su apellido, se ha sentido siempre despreciado por su esposa y también por sus hijos que solo desean su herencia. Paso a paso va introduciendo al lector en su vida donde el cariño, que el nunca dio, brilla por su ausencia y donde el dinero acumulado en sus negocios es lo único que interesa a su familia.',
            'category_id' => 2,
            'book_image' => 'nudodeviboras.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Inteligencia Genial',
            'book_author' => 'Michael J. Gelb',
            'book_description' => 'Aunque es difícil exagerar cuando se habla de lo brillante que era Leonardo da Vinci, investigaciones científicas recientes indican que probablemente subestimamos nuestras propias capacidades. Hemos sido dotados de un potencial creativo y de aprendizaje prácticamente ilimitado. El 95% de lo que sabemos sobre la capacidad del cerebro humano ha sido descubierto en lo últimos veinte años. Para aprender a pensar como Leonardo deberíamos comenzar por trae a escena la concepción actual de la inteligencia y algunos resultados de la investigación acerca de la naturaleza y extensión del potenical del cerebro.',
            'category_id' => 1,
            'book_image' => 'inteligenciagenial.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Hacedor de Estrellas',
            'book_author' => 'Olaf Stapledon',
            'book_description' => 'Una noche de amargura y desengaño, un hombre contempla el firmamento desde lo alto de una colina. De pronto se ve inmerso en una suerte de viaje astral que lo traslada por toda la galaxia, de la que explorará el nacimiento y el ocaso, con la meta última de comprender la naturaleza de la fuerza primigenia, el enigmático "hacedor de estrellas". Stapledon abre un gran angular cuyo protagonista es la inmensidad del tiempo y del espacio, invitándonos a una auténtica aventura existencial. Entre la cosmogonía y la fábula científica, ésta es, en palabras de Borges, una "novela prodigiosa" que ha merecido un lugar privilegiado entre los clásicos de la ciencia ficción.',
            'category_id' => 3,
            'book_image' => 'elhacedordeestrellas.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'La Rebelión de las Ratas',
            'book_author' => 'Fernando Soto Aparicio',
            'book_description' => 'Esta novela, escrita con un lirismo que sorprende, desnuda descarnadamente el drama de un campesino dedicado, por la fuerza de la fatalidad, a trabajar en las oscuras y fétidas galerías de una mina de carbón para no morir de hambre. Los sombríos socavones simbolizan la vida misma: laberinto indescifrable, donde la esperanza ha cambiado su color por el de la fría y negra roca milenaria.',
            'category_id' => 1,
            'book_image' => 'larebeliondelasratas.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => '1984',
            'book_author' => 'George Orwell',
            'book_description' => 'Londres, 1984: Winston Smith decide rebelarse ante un gobierno totalitario que controla cada uno de los movimientos de sus ciudadanos y castiga incluso a aquellos que delinquen con el pensamiento. Consciente de las terribles consecuencias que puede acarrear la disidencia, Winston se une a la ambigua Hermandad por mediación del líder O’ Brien.',
            'category_id' => 2,
            'book_image' => 'milnovecientosochentaycuatro.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Inteligencia Matemática',
            'book_author' => 'Eduardo Sáenz de Cabezón',
            'book_description' => '¿Quién leería un libro sobre matemáticas sin que le obliguen?", se preguntará el lector de este libro. Porque al leer sobre ellas se corren varios riesgos... Tal vez cambiemos nuestra idea sobre las matemáticas, con las que hemos vivido tan cómodamente todo este tiempo, y es posible que terminen por gustarnos.',
            'category_id' => 1,
            'book_image' => 'inteligenciamatematica.jpg'
        ]);

        /*
        Plantilla:
        DB::table('books')->insert([
            'book_name' => '',
            'book_author' => '',
            'book_description' => '',
            'category_id' => ,
            'book_image' => ''
        ]);
        */
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'codigo' => '111111',
            'nombre' => 'Narrativo',
            'descripcion' => ' historia narrada que incluye una serie de acciones realizadas por ciertos personajes en un espacio e intervalo de tiempo específicos. Las acciones, los personajes y los lugares pueden ser reales o ficticios.', 
        ]);
        Categoria::create([
            'codigo' => '111112',
            'nombre' => 'Cuento',
            'descripcion' => 'Narración breve de ficción.'
        ]);
        Categoria::create([
            'codigo' => '111113',
            'nombre' => 'Novela',
            'descripcion' => '. Obra literaria en prosa en la que se narra una acción fingida en todo o en parte, y cuyo fin es causar placer estético a los lectores ',
        ]);
        Categoria::create([
            'codigo' => '111114',
            'nombre' => 'Fábula',
            'descripcion' => 'Breve relato ficticio, en prosa o verso, con intención didáctica o crítica frecuentemente manifestada en una moraleja final',          
        ]);


        Categoria::create([
            'codigo' => '222221',
            'nombre' => 'Lírico' ,
            'descripcion' => 'Son textos a través de los cuales el autor puede transmitir los sentimientos, emociones o sensaciones de personas relacionados con la persona o la inspiración',
        ]);
        Categoria::create([
            'codigo' => '222222',
            'nombre' => 'Oda' ,
            'descripcion' => 'La oda es un subgénero de la poesía lírica que se caracteriza por ser un canto de celebración o alabanza dirigido a alguien o algo',  
        ]);
        Categoria::create([
            'codigo' => '222223',
            'nombre' => 'Satira' ,
            'descripcion' => 'género literario que expresa indignación hacia alguien o algo, con propósito moralizador, lúdico o meramente burlesco',
        ]);

        Categoria::create([
            'codigo' => '222224',
            'nombre' => 'Soneto' ,
            'descripcion' => ' Composición poética que consta de catorce versos endecasílabos distribuidos en dos cuartetos y dos tercetosn',      
     
        ]);


        Categoria::create([
            'codigo' => '333331',
            'nombre' => 'Dramático' ,
            'descripcion' => 'El género denominado dramático debe representarse en forma de tragedia o comedia. Explican ciertos eventos o conflictos en la vida humana',
        ]);

        Categoria::create([
            'codigo' => '333332',
            'nombre' => 'Tragedia' ,
            'descripcion' => 'se define como una obra dramática de asunto terrible y desenlace funesto en la que intervienen personajes ilustres o heroicos',
            'subcategorias' => ['tragedia', 'comedia', 'melodrama', 'tragicomedia', 'farsa'], 
        ]);
        Categoria::create([
            'codigo' => '333333',
            'nombre' => 'Comedia' ,
            'descripcion' => ', opuesto en su temática a la tragedia, es decir, caracterizado por tramas y narraciones que evocan a la risa y que tienen un final feliz',
            'subcategorias' => ['tragedia', 'comedia', 'melodrama', 'tragicomedia', 'farsa'], 
        ]);


        Categoria::create([
            'codigo' => '444441',
            'nombre' => 'Didáctico' ,
            'descripcion' => 'tiene el objetivo de transmitir un conocimiento y su valor no se encuentra en la narración si no en el aprendizaje que se expresa en el escrito',
        ]);
        Categoria::create([
            'codigo' => '444442',
            'nombre' => 'Ensayo' ,
            'descripcion' => 'Un ensayo es un texto predominantemente argumentativo, cuyo propósito es persuadir al lector de adoptar una postura frente a un tema mediante argumentos lógicos y racionales.',
        ]);
        Categoria::create([
            'codigo' => '444443',
            'nombre' => 'Biografía' ,
            'descripcion' => ' biografía es un texto narrativo que cuenta los sucesos relevantes en la vida de una persona en orden cronológico para entender su personalidad, motivaciones, problemas y el trasfondo de sus éxitos y fracasos',
        ]);
        Categoria::create([
            'codigo' => '444444',
            'nombre' => 'Tratado cientifico o filósofico' ,
            'descripcion' => 'El tratado filosófico es considerado como un subgénero dentro del género ensayístico; tiene un propósito didáctico, por lo que es usado con frecuencia como herramienta pedagógica, del mismo modo en que se usa el articulo científico o la enciclopedia.',
        ]);
    }
}

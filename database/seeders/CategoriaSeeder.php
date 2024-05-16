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
            'subcategorias' => ['épica', 'epopeya', 'cantar de gesta', 'cuento', 'novela', 'fábula'], 
            
        ]);


        Categoria::create([
            'codigo' => '222222',
            'nombre' => 'Lírico' ,
            'descripcion' => 'Son textos a través de los cuales el autor puede transmitir los sentimientos, emociones o sensaciones de personas relacionados con la persona o la inspiración',
            'subcategorias' => ['canción', 'himno', 'oda', 'elegía', 'satira', 'epigrama', 'romance', 'soneto'], 
            
            
        ]);

        Categoria::create([
            'codigo' => '333333',
            'nombre' => 'Dramático' ,
            'descripcion' => 'El género denominado dramático debe representarse en forma de tragedia o comedia. Explican ciertos eventos o conflictos en la vida humana',
            'subcategorias' => ['tragedia', 'comedia', 'melodrama', 'tragicomedia', 'farsa'], 
        ]);

        Categoria::create([
            'codigo' => '444444',
            'nombre' => 'Didáctico' ,
            'descripcion' => 'tiene el objetivo de transmitir un conocimiento y su valor no se encuentra en la narración si no en el aprendizaje que se expresa en el escrito',
            'subcategorias' => ['ensayo', 'biografia', 'crónica', 'memoría escrita', 'oratoria', 'carta', 'tratado científico', 'tratado filosófico'], 
        ]);
    }
}

<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PalabraClave;

class PalabrasClaveSeeder extends Seeder
{
    public function run()
    {
        $keywords = ['golpes', 'amenazas', 'empujones','gritos','agresion','maltarto','tortura','acosos','hostigamiento','intimidacion','discriminacion','humillacion','manipulacion','golpiza','patadas','insultos'];

        foreach ($keywords as $keyword) {
            PalabraClave::create(['keyword' => $keyword]);
        }
    }
}

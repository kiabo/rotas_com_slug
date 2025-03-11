<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Product;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            'São Paulo',
            'Rio de Janeiro',
            'Belo Horizonte',
            'Porto Alegre',
        ];

        foreach ($cidades as $nomeCidade) {
            $city = City::create([
                'name' => $nomeCidade,
                'slug' => Str::slug($nomeCidade),
            ]);

            Product::factory(5)->create(['city_id' => $city->id]);
        }

    }
}

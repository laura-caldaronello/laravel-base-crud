<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class DressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //inserisco un po' di dati che ho in un file da me impostato
        $vestiti = config('vestiti');

        foreach ($vestiti as $vestito) {
            $new_dress = new Dress();
            $new_dress->type = $vestito['type'];
            $new_dress->size = $vestito['size'];
            $new_dress->price = $vestito['price'];
            $new_dress->save();
        }

        //e inserisco altri dati tramite faker
        for ($i = 0; $i < 3; $i++) {
            $new_dress = new Dress();
            $new_dress->type = $faker->word();
            $new_dress->size = $faker->randomElement(['XS','S','M','L','XL','UNI']);
            $new_dress->price = $faker->randomFloat(2,0.01,9999.99);
            $new_dress->save();
        }
    }
}

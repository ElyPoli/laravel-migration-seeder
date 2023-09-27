<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $currentDate = now();

        for ($i = 0; $i < 50; $i++) {
            $treno = new Train(); // Creo una nuova istanza di train()

            $treno->azienda = $faker->word();
            $treno->stazione_di_partenza = $faker->sentence(3);
            $treno->stazione_di_arrivo = $faker->sentence(3);
            $treno->data_di_partenza = $faker->dateTimeBetween($currentDate, "+1 month")->format('Y-m-d');
            $treno->orario_di_partenza = $faker->time('H:i');

            $addMinutes = $faker->numberBetween(1, 60); // Genero dei numeri casuali
            $treno->orario_di_arrivo = date('H:i', strtotime($treno->orario_di_partenza . " + $addMinutes minutes")); // aggiungo questi minuti all'orario di partenza

            $treno->codice_treno = $faker->bothify('##??##?#'); // Creo una stringa con numeri e lettere casuali
            $treno->numero_carrozze = $faker->numberBetween(0, 100);

            $treno->in_orario = $faker->boolean();
            // Verifico se "in orario" è true, "cancellato" lo imposto come false
            if ($treno->in_orario) {
                $treno->cancellato = false;
            } else {
                $treno->cancellato = $faker->boolean();
            }

            $treno->save(); // Salvo i dati nel database
        }
    }
}

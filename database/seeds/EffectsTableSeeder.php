<?php

use Illuminate\Database\Seeder;
use App\Effect;

class EffectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $effects = ['chorus', 'delay', 'reverb'];

        foreach ($effects as $effect) {
            Effect::create(['name' => $effect]);
        }
    }
}

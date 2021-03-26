<?php

use Illuminate\Database\Seeder;

use App\Character;

use Faker\Generator as Faker;

class CharacterSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 10; $i++) {
      $character = new Character();
      $character->name = $faker->name();
      $character->from = $faker->state();
      $character->save();
    }
  }
}

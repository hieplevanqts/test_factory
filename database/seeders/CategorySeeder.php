<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->count(20)->create();
        $faker = Faker::create();
        $parent_id = [0, 1, 2];

        $list = Category::factory()->count(20)->create();
        foreach ($list as $key => $value) {
            $fake = $faker->randomElement($parent_id);
                if($value->id==1 || $value->id==2)
                {
                    $fake=0;
                }
                $list[$key]['parent_id'] = Category::find($value->id)->update(["parent_id"=>$fake]);
            }

        }
}

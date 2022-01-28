<?php
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++) { 
            $product = new Product();
            $product->name = $faker->sentence();
            $product->image = $faker->imageUrl(600, 400, 'Products');
            $product->price = $faker->randomFloat(2, 100, 300);
            $product->description = $faker->text();
            $product->quantity = $faker->numberBetween(1, 100);
            $product->save();
        }
    }
}

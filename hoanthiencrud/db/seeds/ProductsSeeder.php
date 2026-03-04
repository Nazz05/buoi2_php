<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Phinx\Seed\AbstractSeed;
use Faker\Factory;

class ProductsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $faker = Factory::create('vi_VN');
        $data = [];
        
        // Tạo 30 sản phẩm ngẫu nhiên
        for ($i = 0; $i < 30; $i++) {
            $data[] = [
                'name' => $faker->words(3, true),
                'price' => $faker->randomFloat(2, 100000, 50000000),
                'quantity' => $faker->numberBetween(0, 100)
            ];
        }
        
        $this->table('products')->insert($data)->saveData();
    }
}



<?php


use Phinx\Seed\AbstractSeed;

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
        $data = [
            [
                'name' => 'Laptop Dell XPS 13',
                'price' => 25000000.00,
                'quantity' => 10
            ],
            [
                'name' => 'iPhone 15 Pro Max',
                'price' => 35000000.00,
                'quantity' => 15
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'price' => 22000000.00,
                'quantity' => 20
            ],
            [
                'name' => 'AirPods Pro 2',
                'price' => 6000000.00,
                'quantity' => 30
            ],
            [
                'name' => 'MacBook Pro M3',
                'price' => 45000000.00,
                'quantity' => 8
            ]
        ];

        $this->table('products')->insert($data)->saveData();
    }
}

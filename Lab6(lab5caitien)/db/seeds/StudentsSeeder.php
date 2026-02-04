<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Phinx\Seed\AbstractSeed;
use Faker\Factory;

class StudentsSeeder extends AbstractSeed
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
        
        // Tạo 20 sinh viên ngẫu nhiên
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'fullname' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ];
        }
        
        $this->table('students')->insert($data)->saveData();
    }
}



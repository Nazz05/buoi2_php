<?php


use Phinx\Seed\AbstractSeed;

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
        $data = [
            [
                'fullname' => 'Nguyễn Văn An',
                'email' => 'nguyenvanan@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ],
            [
                'fullname' => 'Trần Thị Bình',
                'email' => 'tranthibinh@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ],
            [
                'fullname' => 'Lê Văn Cường',
                'email' => 'levancuong@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ],
            [
                'fullname' => 'Phạm Thị Dung',
                'email' => 'phamthidung@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ],
            [
                'fullname' => 'Hoàng Văn Em',
                'email' => 'hoangvanem@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ]
        ];

        $this->table('students')->insert($data)->saveData();
    }
}

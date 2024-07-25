<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;
use Hidehalo\Nanoid\Client as NanoidClient;

class UsersSeed extends AbstractSeed
{
    public function run(): void
    {
        //id nanoid
        $nanoid = new NanoidClient();
        $data = [
            [
                'id' => $nanoid->generateId(),
                'name' => 'John Doe',
                'email' => 'email@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $users = $this->table('users');
        $users->insert($data)->saveData();
    }
}

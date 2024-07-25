<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    public function change(): void
    {
        $users = $this->table('users', ['id' => false]);

        $users
            ->addColumn('id', 'string', ['limit' => 21])
            ->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('verified', 'boolean', ['default' => false])
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addIndex(['id'], ['unique' => true])
            ->addIndex(['email'], ['unique' => true])
            ->create();
    }
}

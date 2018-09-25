<?php


use Phinx\Seed\AbstractSeed;

class UsersTruncator extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $users = $this->table('users_xxxxx');
        $users->truncate();
    }
}

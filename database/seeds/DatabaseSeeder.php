<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(contentBlocksSeeder::class);
         $this->call(AllPagesSeeder::class);
         $this->call(contentHomeSeeder::class);
         $this->call(contentKbmCheckSeeder::class);
         $this->call(contentKbmRestoreSeeder::class);
         $this->call(contentMulctCheckSeeder::class);
         $this->call(contentUserAgreementSeeder::class);
    }
}

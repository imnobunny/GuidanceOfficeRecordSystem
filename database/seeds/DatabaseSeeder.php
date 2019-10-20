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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RelationshipsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(AdvisersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql_file = public_path('course_ecommerce_world.sql');
        DB::unprepared(file_get_contents($sql_file));

    }
}
//
//$sql_file = public_path('course_ecommerce_world.sql');
//$db = [
//    'host' => '127.0.0.1',
//    'database' => 'course_ecommerce',
//    'username' => 'root',
//    'password' => null,
//];
//
//exec("mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database={$db['database']} < $sql_file");

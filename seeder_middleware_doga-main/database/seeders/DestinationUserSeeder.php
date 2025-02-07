<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class DestinationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

$destinations = Destination::all();


foreach ($users as $user) {

DB::table('destination_users')->insert([

'user_id' => $user->id,

'destination_id' => $destinations->random()->id,

]);

DB::table('destination_users')->insert([

'user_id' => $user->id,

'destination_id' => $destinations->random()->id,

]);

DB::table('destination_users')->insert([

'user_id' => $user->id,

'destination_id' => $destinations->random()->id,

]);

}
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Feed;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('FeedsTableSeeder');

        Model::reguard();
    }
}



class FeedsTableSeeder extends Seeder  // ③
{
    public function run()
    {
        DB::table('feeds')->delete();  // ④
        // DELETE FROM feeds WHERE 1
 
        $faker = Faker::create('en_US');  // ⑤
 
        for ($i = 0; $i < 10; $i++) {  // ⑥
            Feed::create([
                'feed' => $faker->text(),
                'user_id' => 1,
                'created_at' => Carbon::today()
            ]);
            // INSERT INTO feeds SET feed=?, user_id=?, created_at=NOW()
        }
    }
 
}












<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Reply;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topic_ids = Topic::all()->pluck('id');

        $user_ids = User::all()->pluck('id');

        $faker = app(Faker\Generator::class);

        $replies = factory(Reply::class)
            ->times(100)
            ->make()
            ->each(function ($reply, $index) use ($topic_ids, $user_ids, $faker) {
                $reply->topic_id = $faker->randomElement($topic_ids);
                $reply->user_id = $faker->randomElement($user_ids);
            });

        Reply::insert($replies->toArray());
    }
}

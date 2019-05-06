<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Support\Facades\DB;

class TagTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取所有的标签 ID
        $tag_ids = Tag::all()->pluck('id');

        $topic_ids = Topic::all()->pluck('id');

        $faker = app(Faker\Generator::class);

        for ($i = 0; $i < 100; $i++) {
            DB::table('tag_topic')->insert([
                'topic_id' => $faker->randomElement($topic_ids),
                'tag_id' => $faker->randomElement($tag_ids)
            ]);
        }
    }
}

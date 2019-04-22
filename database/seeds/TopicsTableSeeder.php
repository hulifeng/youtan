<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组，如：[1,2,3,4]
        $category_ids = Category::all()->pluck('id')->toArray();

        // 文章图片数组
        $topics_images = [
            '/images/article-1.jpg',
            '/images/article-2.jpg',
            '/images/article-3.jpg',
            '/images/article-4.jpg',
            '/images/article-5.jpg',
            '/images/article-6.jpg',
            '/images/article-7.jpg',
            '/images/article-8.jpg'
        ];

        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $topics = factory(Topic::class)
            ->times(100)
            ->make()
            ->each(function ($topic, $index)
            use ($user_ids, $category_ids, $topics_images, $faker)
            {
                // 从用户 ID 数组中随机取出一个并赋值
                $topic->user_id = $faker->randomElement($user_ids);

                // 话题分类，同上
                $topic->category_id = $faker->randomElement($category_ids);

                // 文章封面
                $topic->cover = $faker->randomElement($topics_images);
            });

        // 将数据集合转换为数组，并插入到数据库中
        Topic::insert($topics->toArray());
    }
}
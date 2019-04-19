<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '首页',
                'description' => '欢迎来到友叹社区',
            ],
            [
                'name'        => '发现',
                'description' => '开阔视野，惊人发现',
            ],
            [
                'name'        => '文章',
                'description' => '高品质文章输出',
            ],
            [
                'name'        => '每日精进',
                'description' => '日复一日，积极向上',
            ],
            [
                'name'        => '分类',
                'description' => '分享创造，分享发现',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}

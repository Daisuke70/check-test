<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'categories' => '商品のお届けについて'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'categories' => '商品の交換について'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'categories' => '商品トラブル'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'categories' => 'ショップへのお問い合わせ'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'categories' => 'その他'
        ];
        DB::table('contacts')->insert($param);
    }
}

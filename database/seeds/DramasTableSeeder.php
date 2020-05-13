<?php

use Illuminate\Database\Seeder;

class DramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dramas')->insert([
            'title' => 'モダン・ラブ ～今日もNYの街角で～',
            'subtitle' => 'Modern Love',
            'image_path' => 'https://i.gyazo.com/a25761d3835aea29331a931adbee7e06.png',
            'story' => '思いも寄らない人物との友情。失恋のやり直し。転換期を迎えた結婚生活。デートとは言えないかもしれないデート。型にはまらない形の家族。これらすべては、ニューヨーク・タイムズ紙の人気コラム「Modern Love」に実際に投稿されたエッセーに基づく、愛の喜びや苦悩についてのユニークな物語だ。',
            'genre' => ' ロマンティック・コメディ',
            'releaseDate' => '2019年10月18日',
            'country' => 'アメリカ',
            'cast' => 'アン・ハサウェイ / ティナ・フェイ / デヴ・パテル / キャサリン・キーナー',
            'video_path' => 'https://www.youtube.com/embed/m3MjhYFpJMk'
        ]);
      
    }
}


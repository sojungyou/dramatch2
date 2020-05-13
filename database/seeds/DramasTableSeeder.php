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
            'title' => 'ロマンスは別冊付録',
            'subtitle' => '로맨스는 별책부록/Romance Is a Bonus Book',
            'image_path' => 'https://i.gyazo.com/5b88960c63cb75a6c75f0d6b24bca1db.png',
            'story' => '記録的な若さで編集長の座についた天才作家と、どうしても仕事が欲しい元人気コピーライター。出版社の中でつづられるのは、どんな小説よりも甘く切ない恋物語。',
            'genre' => 'コメディ/恋愛',
            'releaseDate' => '2019年03月18日',
            'country' => '韓国',
            'cast' => 'イ・ジョンソク/ イ・ナヨン /チョン・ユジン',
            'video_path' => 'https://www.youtube.com/embed/SvL_9__KTFw'
        ]);
      
    }
}


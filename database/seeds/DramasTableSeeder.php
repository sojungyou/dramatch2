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
            'genre' => ' コメディ/恋愛',
            'releaseDate' => '2019年03月18日',
            'country' => '韓国',
            'cast' => 'イ・ジョンソク/ イ・ナヨン /チョン・ユジン',
            'video_path' => 'https://www.youtube.com/embed/SvL_9__KTFw'
        ]);
        DB::table('dramas')->insert([
            'title' => 'ザ・ボーイズ',
            'subtitle' => 'The Boys',
            'image_path' => 'https://i.gyazo.com/06742ab5892070190c7e28936d498c43.png',
            'story' => '欲と名声にとりつかれたスーパーヒーローたち。非公式に「ザ・ボーイズ」と呼ばれるグループが腐敗したスーパーヒーローたちを倒そうとする。特殊能力を持たない彼らは根性と信念で悪しきヒーローに立ち向かう。',
            'genre' => 'アクションドラマ',
            'releaseDate' => '2019年07月26日',
            'country' => 'アメリカ',
            'cast' => 'カール・アーバン / ジャック・クエイド / アントニー・スター / ジェニファー・エスポジート',
            'video_path' => 'https://www.youtube.com/embed/06rueu_fh30'
        ]);
        DB::table('dramas')->insert([
            'title' => 'ブラック・ミラー シーズン1',
            'subtitle' => 'Black Mirror ',
            'image_path' => 'https://i.gyazo.com/a06cd52f89545c0ec55ada2cb0110063.png',
            'story' => '自分の存在を投げ出すことを要求された人間、記憶装置が埋め込まれる近未来など、あり得そうな現実を描いたSFドラマ・シリーズ。',
            'genre' => 'SFドラマ',
            'releaseDate' => '2011年12月4日',
            'country' => 'イギリス',
            'cast' => 'ロリー・キニアリンゼイ・ダンカンドナルド・サンプタートム・グッドマン=ヒル',
            'video_path' => 'https://www.youtube.com/embed/nSDviEdvw4U'
        ]);
    }
}


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
            'title' => '愛の不時着',
            'subtitle' => '사랑의 불시착／CRASH LANDING ON YOU',
            'image_path' => 'https://i.gyazo.com/706e7c0e5b96c4283f1bff9e0df63cbe.png',
            'story' => 'パラグライダー中に思わぬ事故に巻き込まれ、北朝鮮に不時着してしまった韓国の財閥令嬢。そこで出会った堅物の将校の家で、身分を隠して暮らすことになるが...。',
            'genre' => 'コメディ/恋愛',
            'releaseDate' => '2020年02月23日',
            'country' => '韓国',
            'cast' => 'ヒョンビン / ソン・イェジン /  ソ・ジヘ  / キム・ジョンヒョン',
            'video_path' => 'https://www.youtube.com/embed/zPe5AdGCszc'
        ]);
        DB::table('dramas')->insert([
            'title' => 'プリズン・ブレイク',
            'subtitle' => 'Prison Break ',
            'image_path' => 'https://i.gyazo.com/046f8b17cc1cfec07a10be0e119d450d.png',
            'story' => 'マイケルは何不自由なく暮らす優秀な建築設計士。しかしある日、兄のリンカーンが副大統領の兄弟殺しの罪で逮捕され、死刑判決を受けたことから人生が一変する。異例のスピード判決、無罪を主張し続ける兄……得体の知れない陰謀に巻き込まれた兄を合法的に助けることは不可能だと知ったマイケルは、武装強盗を犯し自ら犯罪者となって兄と同じ刑務所へ入る。兄とともに脱出するために……。',
            'genre' => 'アクションサスペンスドラマ',
            'releaseDate' => '2005年8月29日',
            'country' => 'アメリカ',
            'cast' => 'ウェントワース・ミラードミニク・パーセルピーター・ストーメアロバート・ネッパー',
            'video_path' => 'https://www.youtube.com/embed/AL9zLctDJaU	'
        ]);
    }
}


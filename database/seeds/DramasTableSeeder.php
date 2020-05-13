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
            'title' => 'ザ・ソプラノズ 哀愁のマフィア',
            'subtitle' => 'The Sopranos',
            'image_path' => 'https://i.gyazo.com/d18f16fc6c8c6274c01ee69bbff96d83.png',
            'story' => 'すべてはここから始まる！HBOヒットシリーズ「ザ・ソプラノズ　哀愁のマフィア」のシーズン1では、ニュージャージー州郊外に住むマフィアのボス、トニー・ソプラノとそのファミリーのリアルな世界が、ブラックなユーモアとともに繰り広げられる。主演：ジェームズ・ガンドルフィーニ。',
            'genre' => 'ドラマ',
            'releaseDate' => '1999年1月10日',
            'country' => 'アメリカ',
            'cast' => 'ジェームズ・ガンドルフィーニ',
            'video_path' => 'https://www.youtube.com/embed/wrN2k3qGbVA'
        ]);
        DB::table('dramas')->insert([
            'title' => 'フレンズ',
            'subtitle' => 'Friends',
            'image_path' => 'https://i.gyazo.com/ebc0fadd462fd9d89dca75c2a3e33b59.png',
            'story' => 'シェフの助手として働くモニカ、俳優志望のジョーイ。ジョーク好きのチャンドラー、シンガー･ソングライターのフィービーが、"セントラル･パーク"カフェでおしゃべり中。そこにモニカの兄で古生物学者のロスが。愛妻がレズに目覚めて離婚したことを嘆いていると、モニカの高校時代の友人レイチェルが花嫁姿で駆け込んでくる。挙式をドタキャンして逃げ出してきたのだが？！',
            'genre' => 'コメディ',
            'releaseDate' => '1994年9月22日',
            'country' => 'アメリカ',
            'cast' => 'ジェニファー・アニストンコートニー・コックスリサ・クドローマット・ルブランクマシュー・ペリー',
            'video_path' => 'https://www.youtube.com/embed/SHvzX2pl2ec'
        ]);

}


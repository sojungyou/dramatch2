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
    }
}


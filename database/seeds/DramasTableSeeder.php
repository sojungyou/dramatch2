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
            'title' => 'ジ・エディ',
            'subtitle' => 'The Eddy',
            'image_path' => 'https://i.gyazo.com/023883be5ca60cafb205eb9c1a9e1f8f.png',
            'story' => '多彩な文化が咲き誇る花の都パリで、危機に直面したジャズ・クラブの運命を描く。「ラ・ラ・ランド」のデイミアン・チャゼル監督が贈るミュージカルドラマ。',
            'genre' => 'ミュージカルドラマ',
            'releaseDate' => '2020年05月08日',
            'country' => 'イギリス・ドイツ ・アメリカ',
            'cast' => 'アンドレ・ホランド  / ヨアンナ・クーリグ/ アマンドル・ステンバーグ/ レイラ・ベクティ',
            'video_path' => 'https://www.youtube.com/embed/BMUPp_hNMlM'
        ]);
      
    }
}


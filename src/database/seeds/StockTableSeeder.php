<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    public function run()
    {
        //2回目実行時にシーダー情報をクリア
        DB::table('stocks')->truncate(); 
        DB::table('stocks')->insert([
            'name' => '現役エンジニアによるプログラミング講座',
            'detail' => '【オンラインにてキャリアプランを描くためのサポートを贈る】サブスク 月額料金',
            'fee' => 8000,
            'imgpath' => 'programming.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '起業家に会いに行くチケット',
            'detail' => '【新たなビジネスアイディアを贈る、夢を見つけるきっかけは人に対する興味かもしれない】全15回',
            'fee' => 45000,
            'imgpath' => 'business.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '小さな夢を掲げるためのオンラインコーチング',
            'detail' => '【小さな夢を掲げ継続するための仕組みづくりをサポート】サブスク 月額料金',
            'fee' => 7000,
            'imgpath' => 'coaching.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '定額で、世界中に住み放題のシェアハウス',
            'detail' => '【日常生活に人との出会いを贈る、好きな時に好きな場所で働く環境を贈る】サブスク 月額料金',
            'fee' => 85000,
            'imgpath' => 'sharehouse.jpg',
        ]);
 
 
        DB::table('stocks')->insert([
            'name' => 'いつでも自宅で受渡し、ランドリー・クリーニングサービス',
            'detail' => '【夢探しのため自分の時間を大切にしたいあなたに贈る】サブスク 月額料金',
            'fee' => 20000,
            'imgpath' => 'laundry.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '幼い頃の思い出を映像化',
            'detail' => '【記憶を遡って小学生の時に感じた言葉にできない圧倒的なワクワク感、あなたの中にそんな原体験が眠ってはいないだろうか?】映像レコード１時間毎の料金',
            'fee' => 3500,
            'imgpath' => 'filming.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '世界の教養を知る書籍おすすめ５選',
            'detail' => '【夢探しに必要なのは、あと少しの知識かもしれない】電子書籍5選',
            'fee' => 7500,
            'imgpath' => 'book.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '感情を知る映画おすすめ５選',
            'detail' => '【あなたの夢探しに必要なのは、沸き起こる感情の理解かもしれない】電子映画5選',
            'fee' => 1000,
            'imgpath' => 'movie.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '海外インターンシップお役立ちパック',
            'detail' => '【気づかぬうちに習慣や常識が、
            世界を見る目にフィルターをかけていないだろうか? 学校探しや家探しに役立つ情報提供をサポート】手配から帰国までのサポートプラン(学費および賃料を除く)',
            'fee' => 30000,
            'imgpath' => 'internship.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '親子で参加 化学実験教室',
            'detail' => '【幼少期の原体験が、自分だけの生き方をつくる】全3
            回講座',
            'fee' => 15000,
            'imgpath' => 'science.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '静岡県の茶農家と連携し、訪日外国人に向けて茶摘み体験企画を提供',
            'detail' => '【日本文化を理解して、日本文化をおもてなししてみませんか?】1泊2日',
            'fee' => 7000,
            'imgpath' => 'greentea.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '発祥地インドでヨガ資格取得',
            'detail' => '【本場での体験を贈る】1ヶ月滞在費・学費(資格取得費用を除く)',
            'fee' => 200000,
            'imgpath' => 'yoga.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'キャンプ体験一式セット',
            'detail' => '【親子へ感動体験を贈る】2泊3日 キャンプサイト区画量含む',
            'fee' => 25000,
            'imgpath' => 'camp.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '経験者によるサーフィン教室',
            'detail' => '【あなた自身がプレーヤーとして体験してみませんか?】半日(ボード・ウェットスーツの貸出し含む)',
            'fee' => 8000,
            'imgpath' => 'surfing.jpeg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '米作り体験パック',
            'detail' => '【プロセスを重視してみませんか?】田植えから収穫までの料金',
            'fee' => 25000,
            'imgpath' => 'rice.jpeg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '建築家による家づくりコンサルティング',
            'detail' => '【家を借りるでも買うでもなく、自らのアイディアで設計したいあなたに贈る】家づくりコンサルティング料1回当たりの料金',
            'fee' => 10000,
            'imgpath' => 'home.jpg',
        ]);
    }
 }

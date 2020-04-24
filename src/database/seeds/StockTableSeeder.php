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
            'detail' => '【エンジニアを目指すあなたの夢探しをサポート】サブスク 月額',
            'fee' => 8000,
            'imgpath' => 'webdev.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '起業家に会いに行くチケット',
            'detail' => '【新たなビジネスアイディアを贈る、夢を見つけるきっかけは人に対する興味かもしれない】全15回',
            'fee' => 45000,
            'imgpath' => 'business.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '夢探しオンラインコーチング',
            'detail' => '【小さな夢を掲げ継続するための仕組みづくりをサポート】サブスク 月額',
            'fee' => 7000,
            'imgpath' => 'coaching.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '定額で、世界中に住み放題のシェアハウス',
            'detail' => '【人と人とのつながりがあなたの夢をうむ、好きな時に好きな場所で働く環境を贈る】サブスク 月額',
            'fee' => 85000,
            'imgpath' => 'sharehouse.jpg',
        ]);
 
 
        DB::table('stocks')->insert([
            'name' => '自宅で受渡し、ランドリー・クリーニングサービスで時間革命',
            'detail' => '【夢探しのため自分の時間を大切にしたいあなたに贈る】サブスク 月額',
            'fee' => 20000,
            'imgpath' => 'laundry.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '幼い頃の思い出を映像化',
            'detail' => '【幼少期に感じた言葉にできない圧倒的なワクワク感、あなたの中にそんな原体験が眠ってはいないだろうか?】',
            'fee' => 3500,
            'imgpath' => 'film.jpg',
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
            世界を見る目にフィルターをかけていないだろうか? 異文化体験をサポート】',
            'fee' => 30000,
            'imgpath' => 'internship.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '親子で参加する化学実験教室',
            'detail' => '【幼少期の原体験が、自分だけの生き方をつくる】全3
            回講座',
            'fee' => 15000,
            'imgpath' => 'science.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '静岡県の茶農家と連携し、訪日外国人へ茶摘み体験を提供',
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
            'name' => 'キャンプ体験パック',
            'detail' => '【親子へ感動体験を贈る、あなたオリジナルの行動の組み合わせがあなたの価値観をうむ】2泊3日',
            'fee' => 25000,
            'imgpath' => 'camp.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '経験者によるサーフィン教室',
            'detail' => '【あなた自身がプレーヤーとして体験してみませんか?原体験が夢をうむ】半日パック',
            'fee' => 8000,
            'imgpath' => 'surf.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '農業の未来を考える米作り体験',
            'detail' => '【プロセスを重視してみませんか?新しい挑戦が夢をうむ】田植えから収穫まで',
            'fee' => 25000,
            'imgpath' => 'rice.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '建築家による家づくりコンサルティング',
            'detail' => '【家を借りるでも買うでもなく、自らのアイディアで設計したいあなたに贈る】家づくりコンサルティング',
            'fee' => 10000,
            'imgpath' => 'home.jpg',
        ]);
    }
 }

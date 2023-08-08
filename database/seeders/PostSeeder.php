<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // DBファサードをインポート
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => '食品名',
            'password' => 'パスワード',
            'email' => 'メールアドレス',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

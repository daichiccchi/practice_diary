<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'email' => 'hanako@yamada.jp',
            'age' => 13,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'yosio',
            'email' => 'yosio@tanaka.jp',
            'age' => 14,
        ];
        DB::table('people')->insert($param);
    }
}

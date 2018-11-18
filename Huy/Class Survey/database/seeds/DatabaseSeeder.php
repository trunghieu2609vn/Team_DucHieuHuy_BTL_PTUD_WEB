<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
    }
}

class StudentSeeder extends Seeder {
    public function run() {
        DB::table('sinh_vien')->insert([
            'username' => '16022374',
            'password' => bcrypt('16022374'),
            'ho_ten' => 'Nguyễn Mậu Đức Huy',
            'email' => '16022374@vnu.edu.vn',
            'lop_khoa_hoc' => 'k61t'
        ]);
    }
}

class TeacherSeeder extends Seeder {
    public function run() {
        DB::table('giang_vien')->insert([
            'username' => 'thanhld',
            'password' => bcrypt('thanhld'),
            'ho_ten' => 'Lê Đình Thanh',
            'email' => 'thanhld@vnu.edu.vn',
        ]);
    }
}
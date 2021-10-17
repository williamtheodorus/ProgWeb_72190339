<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim' => '301','nama' => 'William Theodorus','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris,Mandarin'],
            ['nim' => '302','nama' => 'Ray Prasetya','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '303','nama' => 'Ronald Steven','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '304','nama' => 'Mecko Kaunang','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '305','nama' => 'Jessenia Alexa','jenis_kelamin' => 'Perempuan','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '306','nama' => 'Jevan Alexander','jenis_kelamin' => 'Laki-laki','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '307','nama' => 'Ivan Alidyan','jenis_kelamin' => 'Laki-laki','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '308','nama' => 'Anggi Marito','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '309','nama' => 'Lyodra Ginting','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nim' => '310','nama' => 'Tiara Andini','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris,Mandarin']
        ]);
    }
}

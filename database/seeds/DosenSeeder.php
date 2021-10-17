<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            ['nid' => '801','nama' => 'Drs. Jong Jek Siang, M.Sc.','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris,Mandarin'],
            ['nid' => '802','nama' => 'Argo Wibowo, S.T., MT','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '803','nama' => 'Drs. Wimmie Handiwidjojo, MIT','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '804','nama' => 'Erick Kurniawan, M.Kom.','jenis_kelamin' => 'Laki-laki','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '805','nama' => 'Yetli Oslan, S.Kom., M.T','jenis_kelamin' => 'Perempuan','jurusan' => 'Sistem Informasi','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '806','nama' => 'Restyandito, S.Kom, MSIS., Ph.D','jenis_kelamin' => 'Laki-laki','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '807','nama' => 'Joko Purwadi, S.Kom., M.Kom.','jenis_kelamin' => 'Laki-laki','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '808','nama' => 'Dra. Widi Hapsari, M.T','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '809','nama' => 'Rosa Delima, S.Kom., M.Kom','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris'],
            ['nid' => '810','nama' => 'Gloria Virginia, S.Kom., MAI., Ph.D','jenis_kelamin' => 'Perempuan','jurusan' => 'Informatika','bahasa' => 'Indonesia,Inggris,Mandarin']
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \DB::table('settings')->insert(
            [
                [
                    'service_kurir_agta_sameday' => 'REG',
                    'harga_kurir_agta_sameday' => 10000,
                    'estimasi_kurir_agta_sameday' => '1-3',
                    'service_kurir_agta_cargo' => 'REG',
                    'harga_kurir_agta_cargo' => 30000,
                    'estimasi_kurir_agta_cargo' => '1-1',
                    'link_shopee' => 'https://shopee.co.id/',
                    'link_tentang_kami' => null,
                    'link_whatsapp' => 'https://wa.me/6287877425258',
                ]
            ]
        );

        \DB::table('roles')->insert(
            [
                [
                    'nama' => 'Administrator',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'nama' => 'User',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
            ]
        );

        \DB::table('users')->insert(
            [
                [
                    'id_role' => 1,
                    'name' => 'Administrator',
                    'username' => 'admin',
                    'email' => 'admin@agta.com',
                    'password' => bcrypt('asdasd'),
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'id_province' => 6,
                    'id_city' => 152,
                    'id_subdistrict' => 2095,
                    'phone' => '085737125437',
                    'address' => 'Cempaka Putih, Jakarta Pusat',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'id_role' => 2,
                    'name' => 'User',
                    'username' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => bcrypt('asdasd'),
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'id_province' => 1,
                    'id_city' => 114,
                    'id_subdistrict' => 1574,
                    'phone' => '085737125437',
                    'address' => 'Jalan tukad irawadi no 105',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
            ]
        );

        \DB::table('banners')->insert(
            [
                [
                    'id_produk' => 1,
                    'gambar' => 'banner.jpg',
                    'judul' => null,
                    'deskripsi' => null,
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'id_produk' => 2,
                    'gambar' => 'banner2.jpg',
                    'judul' => null,
                    'deskripsi' => null,
                    'created_at' =>  date('Y-m-d H:i:s')
                ]
            ]
        );

        \DB::table('blogs')->insert(
            [
                [
                    'gambar' => 'banner.jpg',
                    'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'gambar' => 'banner.jpg',
                    'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
            ]
        );

        \DB::table('products')->insert(
            [
                [
                    'nama_produk' => 'Sendal Mario Catur',
                    'slug' => Str::slug('Sendal Mario Catur'),
                    'harga_produk' => 79000,
                    'deskripsi_produk' => 'Gemeshhh motifnyaaa. Merk oke pulaaa😍',
                    'jenis_produk' => 'Rumah Tangga',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'nama_produk' => 'Space Big Adventur Astronot',
                    'slug' => Str::slug('Space Big Adventur Astronot'),
                    'harga_produk' => 161000,
                    'deskripsi_produk' => 'Temanya bagus bangeet jangan dilewatkaaan',
                    'jenis_produk' => 'Mainan Anak',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
            ]
        );

        \DB::table('modelproducts')->insert(
            [
                [
                    'id_produk' => 1,
                    'nama_model' => 'Model A',
                    'stok_produk' => 50,
                    'ukuran_produk' => 'S',
                    'berat_produk' => 50,
                    'gambar_produk' => 'produk1.jpeg',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'id_produk' => 1,
                    'nama_model' => 'Model B',
                    'stok_produk' => 100,
                    'ukuran_produk' => 'M',
                    'berat_produk' => 100,
                    'gambar_produk' => 'produk2.jpeg',
                    'created_at' =>  date('Y-m-d H:i:s')
                ],
                [
                    'id_produk' => 2,
                    'nama_model' => 'Model A',
                    'stok_produk' => 150,
                    'ukuran_produk' => 'L',
                    'berat_produk' => 150,
                    'gambar_produk' => 'produk3.jpeg',
                    'created_at' =>  date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}

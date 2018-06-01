<?php

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->insert(
            [[
                'name' => 'Apartment 1',
                'add' => 'Add 1',
                'price' => random_int(100,1000),
                'info' => 'info 1',
                'infodetail' => 'infodetail 1',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 2',
                'add' => 'Add 2',
                'price' => random_int(100,1000),
                'info' => 'info 2',
                'infodetail' => 'infodetail 2',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 3',
                'add' => 'Add 3',
                'price' => random_int(100,1000),
                'info' => 'info 3',
                'infodetail' => 'infodetail 3',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 4',
                'add' => 'Add 4',
                'price' => random_int(100,1000),
                'info' => 'info 4',
                'infodetail' => 'infodetail 4',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 5',
                'add' => 'Add 5',
                'price' => random_int(100,1000),
                'info' => 'info 5',
                'infodetail' => 'infodetail 5',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 6',
                'add' => 'Add 6',
                'price' => random_int(100,1000),
                'info' => 'info 6',
                'infodetail' => 'infodetail 6',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 7',
                'add' => 'Add 7',
                'price' => random_int(100,1000),
                'info' => 'info 7',
                'infodetail' => 'infodetail 7',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 8',
                'add' => 'Add 8',
                'price' => random_int(100,1000),
                'info' => 'info 8',
                'infodetail' => 'infodetail 8',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 9',
                'add' => 'Add 9',
                'price' => random_int(100,1000),
                'info' => 'info 9',
                'infodetail' => 'infodetail 9',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 10',
                'add' => 'Add 10',
                'price' => random_int(100,1000),
                'info' => 'info 10',
                'infodetail' => 'infodetail 10',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 11',
                'add' => 'Add 11',
                'price' => random_int(100,1000),
                'info' => 'info 11',
                'infodetail' => 'infodetail 11',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 12',
                'add' => 'Add 12',
                'price' => random_int(100,1000),
                'info' => 'info 12',
                'infodetail' => 'infodetail 12',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 13',
                'add' => 'Add 13',
                'price' => random_int(100,1000),
                'info' => 'info 13',
                'infodetail' => 'infodetail 13',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 14',
                'add' => 'Add 14',
                'price' => random_int(100,1000),
                'info' => 'info 14',
                'infodetail' => 'infodetail 14',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 15',
                'add' => 'Add 15',
                'price' => random_int(100,1000),
                'info' => 'info 15',
                'infodetail' => 'infodetail 15',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 16',
                'add' => 'Add 16',
                'price' => random_int(100,1000),
                'info' => 'info 16',
                'infodetail' => 'infodetail 16',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 17',
                'add' => 'Add 17',
                'price' => random_int(100,1000),
                'info' => 'info 17',
                'infodetail' => 'infodetail 17',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 18',
                'add' => 'Add 18',
                'price' => random_int(100,1000),
                'info' => 'info 18',
                'infodetail' => 'infodetail 18',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ],[
                'name' => 'Apartment 19',
                'add' => 'Add 19',
                'price' => random_int(100,1000),
                'info' => 'info 19',
                'infodetail' => 'infodetail 19',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 1
            ],[
                'name' => 'Apartment 20',
                'add' => 'Add 20',
                'price' => random_int(100,1000),
                'info' => 'info 20',
                'infodetail' => 'infodetail 20',
                'imgurl' => 'http://staticl.enternews.vn/images/big/pic1.png',
                'status' => 0
            ]
            ]


        );
    }
}

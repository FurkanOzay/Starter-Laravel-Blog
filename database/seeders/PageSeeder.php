<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyon','Misyon','İletişim'];
        $count=0;
        foreach ($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>Str::slug($page),
                'image'=>'https://picsum.photos/id/2/500/200',
                'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting
                 industry. Lorem Ipsum has been the industrys standard dummy text ever since
                 the 1500s, when an unknown printer took a galley of type and scrambled it to
                 make a type specimen book.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}

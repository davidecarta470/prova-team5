<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts= [
            [
                'title'=> 'primoTitolo',
                'content' => 'primoContent',
            ],
            [
                'title'=> 'secondoTitolo',
                'content' => 'secondoContent',
            ],
            [
                'title'=> 'terzoTitolo',
                'content' => 'terzoContent',
            ],
        ];

        foreach($posts as $post){
            $new_post = new Post();

            $new_post->title = $post['title'];
            $new_post->content = $post['content'];
            $new_post->save();
        }
    }
}

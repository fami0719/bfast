<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <= 10; $i++) {
          Post::create([
              'user_id'    => $i,
              'text'       => 'これはテスト投稿' .$i,
              'post_image' => '',
              'created_at' => now(),
              'updated_at' => now()
          ]);
    }
  }
}

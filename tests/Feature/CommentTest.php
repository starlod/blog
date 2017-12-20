<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;
use App\Models\Comment;

class CommentTest extends TestCase
{
    /**
     * コメントAPIテスト
     *
     * @return void
     */
    public function testIndex()
    {
        factory(Post::class)->create()->each(function(Post $post) {
            factory(Comment::class, 10)->create([
                'post_id' => $post->id,
            ]);
        });

        $post = Post::latest()->first();

        $response = $this->get("/api/posts/$post->id/comments");
        $response->assertStatus(200);
    }
}

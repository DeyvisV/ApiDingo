<?php 

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

/**
 * Class PostTransformer
 * @package App\Transformers
 */
class PostTransformer extends TransformerAbstract
{
    /**
     * @param  Post   $post
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'id' => $post->uuid,
            'body' => $post->body,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at
        ];
    }
}
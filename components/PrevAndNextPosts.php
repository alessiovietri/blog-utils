<?php namespace Al3xTig3r\BlogUtils\Components;

use Cms\Classes\ComponentBase;

use Lang;

use RainLab\Blog\Models\Post;

class PrevAndNextPosts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('al3xtig3r.blogutils::lang.components.prevnextposts.name'),
            'description' => Lang::get('al3xtig3r.blogutils::lang.components.prevnextposts.description')
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getPrev($postId)
    {
        $post = Post::find($postId);

        $prevPost = Post::where('published', true)
                        ->where('published_at', '<', $post->published_at)
                        ->max('id');

        if($prevPost)
            $prevPost = Post::find($prevPost);

        return $prevPost;
    }

    public function getNext($postId)
    {
        $post = Post::find($postId);

        $nextPost = Post::where('published', true)
                        ->where('published_at', '>', $post->published_at)
                        ->min('id');

        if($nextPost)
            $nextPost = Post::find($nextPost);

        return $nextPost;
    }
}

<?php namespace Al3xTig3r\BlogUtils\Components;

use Cms\Classes\ComponentBase;

use Lang;

use RainLab\Blog\Models\Post;

class LastPost extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('al3xtig3r.blogutils::lang.components.lastpost.name'),
            'description' => Lang::get('al3xtig3r.blogutils::lang.components.lastpost.description')
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function get()
    {
        $lastPost = Post::where('published', true)
                        ->orderBy('published_at', 'DESC')
                        ->first();

        return $lastPost;
    }
}

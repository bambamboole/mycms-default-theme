<?php

namespace Bambamboole\MyCmsDefaultTheme;

use Bambamboole\MyCms\Models\Page;
use Bambamboole\MyCms\Models\Post;
use Bambamboole\MyCms\Theme\ThemeInterface;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Spatie\Tags\Tag;

class MyCmsDefaultTheme implements ThemeInterface
{
    public function __construct(Repository $config)
    {
        $config->set('blade-icons.sets.default-theme', [
            'path' => 'vendor/bambamboole/mycms-default-theme/resources/svg',
            'prefix' => 'dt',
        ]);
    }

    public function registeredSettings(): array
    {
        return [
            SocialSettings::class,
        ];
    }

    public function menuLocations(): array
    {
        return [
            'header' => 'Header',
            'footer' => 'Footer',
        ];
    }

    public function getPageView(Page $page): View
    {
        return \view('mycms-default-theme::pages.show', ['page' => $page]);
    }

    public function getPostIndexView(LengthAwarePaginator $posts): View
    {
        return \view('mycms-default-theme::posts.index', ['posts' => $posts]);
    }

    public function getPostView(Post $post): View
    {
        return \view('mycms-default-theme::posts.show', ['post' => $post]);
    }

    public function getTagView(Tag $tag, LengthAwarePaginator $posts): View
    {
        return \view('mycms-default-theme::tags.show', ['tag' => $tag, 'posts' => $posts]);
    }
}

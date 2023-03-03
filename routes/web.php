<?php

use Illuminate\Support\Facades\Route;

Route::get('social-image/{entry}', function ($entry) {
    $entry = \Statamic\Entries\Entry::find($entry);

    $content = null;
    $subtitle = $entry->seo_image_subtitle;

    if ($entry->collection->handle === 'articles') {
        $content = $entry->content;
        $subtitle ??= 'Published on ' . $entry->date->format('M j, Y');
    }

    return (new \Statamic\View\View)
        ->template('social_image')
        ->with([
            'title' => $entry->seo_image_title ?: $entry->title,
            'subtitle' => $subtitle,
            'content' => $content,
        ]);
})->name('social-image');

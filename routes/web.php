<?php

use Illuminate\Support\Facades\Route;

Route::get('social-image/{entry}', function ($entry) {
    $entry = \Statamic\Entries\Entry::find($entry);

    $subtitle = $entry->seo_image_subtitle ?? ($entry->collection->handle === 'articles' ? 'Published on ' . $entry->date->format('M j, Y') : null);

    return (new \Statamic\View\View)
        ->template('social_image')
        ->with([
            'title' => $entry->seo_image_title ?: $entry->title,
            'subtitle' => $subtitle,
        ]);
})->name('social-image');

//Route::statamic('social-image/{entry}', 'social_image');

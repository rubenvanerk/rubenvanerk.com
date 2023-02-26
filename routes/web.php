<?php

use Illuminate\Support\Facades\Route;

Route::get('social-image/{entry}', function ($entry) {
    $entry = \Statamic\Entries\Entry::find($entry);
    return (new \Statamic\View\View)
        ->template('social_image')
        ->with([
            'title' => $entry->title,
            'date' => $entry->date,
        ]);
})->name('social-image');

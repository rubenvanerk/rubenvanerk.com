<?php

namespace App\Actions;

use Spatie\Browsershot\Browsershot;
use Statamic\Facades\Entry;
use Storage;

class CreateSocialImageAction {
    public function handle(string $entryId): void
    {
        $screenshot = Browsershot::url(route('social-image', $entryId))
            ->setScreenshotType('png')
            ->windowSize(1200, 630)
            ->screenshot();

        Storage::disk('public')->put("social-images/$entryId.png", $screenshot);

        file_put_contents(public_path("assets/social/$entryId.png"), $screenshot);
    }
}

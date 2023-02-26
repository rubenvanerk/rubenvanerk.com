<?php

namespace App\Console\Commands;

use App\Actions\CreateSocialImageAction;
use App\Listeners\CreateSocialImageListener;
use Illuminate\Console\Command;
use Statamic\Entries\Entry;

class GenerateSocialImages extends Command
{
    /**
     * @var string
     */
    protected $signature = 'social-images:generate';

    /**
     * @var string
     */
    protected $description = '(re)creates social images for all entries';

    public function handle(): int
    {
        $createSocialImage = resolve(CreateSocialImageAction::class);
        $bar = $this->output->createProgressBar(Entry::all()->count());

        Entry::all()->each(function (Entry $entry) use ($bar, $createSocialImage) {
            $bar->advance();
            $createSocialImage->handle($entry->id);
        });

        $bar->finish();

        return Command::SUCCESS;
    }
}

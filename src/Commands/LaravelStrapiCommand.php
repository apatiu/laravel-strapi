<?php

namespace Apatiu\LaravelStrapi\Commands;

use Illuminate\Console\Command;

class LaravelStrapiCommand extends Command
{
    public $signature = 'laravel-strapi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

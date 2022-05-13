<?php

namespace Parables\LaravelApiGenerator\Commands;

use Illuminate\Console\Command;

class LaravelApiGeneratorCommand extends Command
{
    public $signature = 'laravel-api-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

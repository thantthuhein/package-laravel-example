<?php

namespace ThantDev\PackageLaravelExample\Commands;

use Illuminate\Console\Command;

class PackageLaravelExampleCommand extends Command
{
    public $signature = 'package-laravel-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

<?php

namespace Teguhpermadi\SiakadPackage\Commands;

use Illuminate\Console\Command;

class SiakadPackageCommand extends Command
{
    public $signature = 'siakad-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

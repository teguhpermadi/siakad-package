<?php

namespace Teguhpermadi\SiakadPackage\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SiakadPackageCommand extends Command
{
    public $signature = 'siakad:factory';

    public $description = 'Copy factory files';

    public function handle(): int
    {        
        $this->comment('All done');

        return self::SUCCESS;
    }
}

<?php

namespace AliSaleem\Evaporator\Commands;

use AliSaleem\Evaporator\Evaporator;
use AliSaleem\Evaporator\FileSelection;
use Illuminate\Console\Command;

class UploadCommand extends Command
{
    public $signature = 'evaporator:upload';

    public $description = 'Upload files to cloud storage';

    public function handle(): int
    {
        $fileSelector = FileSelection::create(config('evaporator.include'))
            ->excludeFilesFrom(config('evaporator.exclude'))
            ->shouldFollowLinks(false)
            ->shouldIgnoreUnreadableDirs();

        $evaporator = new Evaporator(
            $fileSelector,
            config('evaporator.strip_path'),
            config('evaporator.prefix_path'),
            config('evaporator.disk')
        );

        $evaporator->upload();

        $this->comment('All done');

        return self::SUCCESS;
    }
}

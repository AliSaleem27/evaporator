<?php

namespace AliSaleem\Evaporator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Evaporator
{
    public function __construct(
        protected FileSelection $fileSelection,
        protected string $stripPath,
        protected string $prefixPath,
        protected string $disk
    ) {
    }

    public function upload()
    {
        foreach ($this->fileSelection->selectedFiles() as $file) {
            $relativePath = Str::of($file)
                ->replaceFirst($this->stripPath, '')
                ->ltrim('/')
                ->prepend(rtrim($this->prefixPath, '/').'/');

            $basename  = pathinfo($relativePath, PATHINFO_BASENAME);
            $directory = pathinfo($relativePath, PATHINFO_DIRNAME);

            echo "$directory.$basename".PHP_EOL;

            Storage::disk($this->disk)->putFileAs($directory, $file, $basename);
        }
    }
}

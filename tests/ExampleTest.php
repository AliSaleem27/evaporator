<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can get all files', function(){
    expect(true)->toBeTrue();
    \Illuminate\Support\Facades\Artisan::call(\AliSaleem\Evaporator\Commands\UploadCommand::class);
});

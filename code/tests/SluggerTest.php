<?php

use App\Slugger;

it('covers the core slug operations', function () {
    $slugger = new Slugger;

    expect($slugger->slug('Parity Checks Everything'))->toBe('parity-checks-everything')
        ->and($slugger->normalize('  Parity Checks  '))->toBe('parity checks');
})->covers(Slugger::class);

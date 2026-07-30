<?php

use App\DiscountPolicy;
use App\Slugger;

it('applies a standard discount', function () {
    $slugger = new Slugger;
    $customer = 'Ada Lovelace';

    expect($slugger->initials($customer))->toBe('AL')
        ->and($slugger->wordCount($customer))->toBe(2)
        ->and((new DiscountPolicy)->apply(100.0))->toBe(90.0);
})->covers(DiscountPolicy::class)->covers(Slugger::class);

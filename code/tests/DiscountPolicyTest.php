<?php

use App\DiscountPolicy;

it('applies a standard discount')
    ->covers(DiscountPolicy::class)
    ->expect(fn () => (new DiscountPolicy)->apply(100.0))
    ->toBe(90.0);

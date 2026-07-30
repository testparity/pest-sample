<?php

declare(strict_types=1);

namespace App;

final class Slugger
{
    public function slug(string $title): string
    {
        return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $title), '-'));
    }

    public function normalize(string $title): string
    {
        return strtolower(trim($title));
    }

    public function initials(string $title): string
    {
        return implode('', array_map(static fn (string $part): string => $part[0], preg_split('/\s+/', trim($title))));
    }

    public function wordCount(string $title): int
    {
        return count(preg_split('/\s+/', trim($title)));
    }

    public function reverse(string $title): string
    {
        return strrev($title);
    }
}

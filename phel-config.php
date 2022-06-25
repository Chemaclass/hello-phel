<?php

declare(strict_types=1);

use Gacela\Framework\ClassResolver\Cache\GacelaCache;

return [
    'src-dirs' => ['src'],
    'test-dirs' => ['tests'],
    'vendor-dir' => 'vendor',
    GacelaCache::KEY_ENABLED => false,
];
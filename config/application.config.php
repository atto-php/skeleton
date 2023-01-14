<?php

declare(strict_types=1);

return [
    'modules' => [
        \Atto\Framework\Module::class,
        \Atto\Membrane\Module::class,
    ],
    'globalConfig' => [
        'membrane' => [
            'openAPISpec' => __DIR__ . '/../api/openapi.yaml',
        ],
    ],
    'debug' => true,
    'application' => \Atto\Membrane\MembraneOpenApi::class
];
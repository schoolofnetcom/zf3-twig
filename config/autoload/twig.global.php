<?php

return [
    'zend_twig' => [
        'suffix' => 'twig',
        'force_twig_strategy' => false,
        'helpers' => [
            'configs' => [
                \Application\View\TwigHelper::class
            ]
        ],
        'environment' => [
            'debug' => false,
            'cache' => __DIR__ . '/../../data/cache/twig',
        ]
    ],
];
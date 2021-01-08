<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/lib')
    ->in(__DIR__.'/test')
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'phpdoc_order' => true,
        'ordered_imports' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder)
    ;
<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->files()
    ->name('*.php')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules(array(
        '@Symfony' => true,
        'binary_operator_spaces' => array(
            'align_double_arrow' => false,
        ),
        'combine_consecutive_unsets' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_imports' => true,
        'php_unit_strict' => true,
        'phpdoc_summary' => false,
        'strict_comparison' => false,
    ))
;

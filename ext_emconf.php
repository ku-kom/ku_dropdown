<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'KU Bootstrap Dropdowns',
    'description' => 'Standalone Bootstrap Dropdowns',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.99-12.1.0',
            'bootstrap_package' => '*'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\KuDropDown\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'private',
    'version' => '1.0.0',
];

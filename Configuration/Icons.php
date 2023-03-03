<?php

/*
 * This file is part of the package ku_dropdown.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * Sep 2022 Nanna Ellegaard, University of Copenhagen.
 */

/**
 * Icon registry
 */

defined('TYPO3_MODE') || die();

return [
    // icon identifier
    'ku-bootstrap-dropdown-icon' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:ku_dropdown/Resources/Public/Icons/Extension.svg',
    ],
];

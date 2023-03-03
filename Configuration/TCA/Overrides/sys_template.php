<?php

/*
 * This file is part of the package ku_dropdown.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Add extension to template list
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ku_dropdown',
    'Configuration/TypoScript',
    'KU Bootstrap dropdown'
);

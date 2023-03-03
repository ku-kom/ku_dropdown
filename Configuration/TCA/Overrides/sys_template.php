<?php
defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ku_dropdown',
    'Configuration/TypoScript',
    'KU Bootstrap dropdown'
);
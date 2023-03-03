<?php

/*
 * This file is part of the package ku_dropdown.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey ='ku_dropdown', $contentType ='ku_dropdown') {
    // Add Content Element
    if (!is_array($GLOBALS['TCA']['tt_content']['types'][$contentType] ?? false)) {
        $GLOBALS['TCA']['tt_content']['types'][$contentType] = [];
    }

    // Add content element PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $contentType,
        'Configuration/TsConfig/Page/tx_KuDropdown.tsconfig',
        'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:title'
    );

    // Add content element to selector list
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:title',
            $contentType,
            'ku-bootstrap-dropdown-icon',
            $extKey
        ]
    );

    // Assign Icon
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$contentType] = 'ku-bootstrap-dropdown-icon';

    // Configure element type
    $GLOBALS['TCA']['tt_content']['types'][$contentType] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types'][$contentType],
        [
            'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_ku_dropdown_btn,tx_ku_dropdown_items,
            --div--;LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:settings;
            LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
        'tx_ku_dropdown_btn' => [
            'exclude' => true,
            'label' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:dropdown_btn',
            'description' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:dropdown_btn_description',
            'config' => [
                'type' => 'input',
                'max' => 50,
                'eval' => 'trim,required',
                'autocomplete' => true
            ],
        ],
        'tx_ku_dropdown_items' => [
             'exclude' => true,
             'label' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:add_link',
             'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tt_content',
                'maxitems' => 20,
                'minitems' => 1,
                'size' => 5,
                'default' => 0,
                'suggestOptions' => [
                    'default' => [
                        'additionalSearchFields' => 'header, subheader'
                    ],
                ],
         ],
      ],
    ]);
});
<?php

/*
 * This file is part of the package KU Bootstrap buttons.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

/**
 * Registers backend previewRenderer for custom content element "KU Bootstrap buttons".
 */

$GLOBALS['TCA']['tt_content']['types']['ku_dropdown']['previewRenderer'] = \UniversityOfCopenhagen\KuDropDown\Backend\Preview\KuDropDownPreviewRenderer::class;
<?php

/*
 * This file is part of the "Static Info Tables (CS)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

defined('TYPO3') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesCs\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['zn_name_en' => 'zn_name_cs'],
    'static_country_zones'
);

<?php

define('__LablnetAdsDetector__', ossn_route()->com . 'LablnetAdsDetector/');

// Init
function lablnet_init()
{
    if (!ossn_isLoggedIn()) {
        ossn_extend_view('ossn/page/footer', 'page/cdn');
    }
}

ossn_register_callback('ossn', 'init', 'lablnet_init');

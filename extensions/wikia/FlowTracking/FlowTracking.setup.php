<?php

$wgAutoloadClasses['FlowTrackingHooks'] =  __DIR__ . '/FlowTracking.hooks.php';
$wgHooks['BeforePageDisplay'][] = 'FlowTrackingHooks::onBeforePageDisplay';
$wgHooks['ArticleInsertComplete'][] = 'FlowTrackingHooks::onArticleInsertComplete';
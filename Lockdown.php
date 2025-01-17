<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Lockdown' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Lockdown'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['LockdownAlias'] = __DIR__ . '/Lockdown.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for the Lockdown extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Lockdown extension requires MediaWiki 1.31+' );
}

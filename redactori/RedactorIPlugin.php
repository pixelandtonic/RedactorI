<?php
namespace Craft;

/**
 * Redactor I plugin class
 */
class RedactorIPlugin extends BasePlugin
{
	public function getName()
	{
	    return 'Redactor I';
	}

	public function getVersion()
	{
	    return '1.0';
	}

	public function getDeveloper()
	{
	    return 'Pixel & Tonic';
	}

	public function getDeveloperUrl()
	{
	    return 'http://pixelandtonic.com';
	}

	public function onAfterInstall()
	{
		// Convert all existing Rich Text fields to Redactor I
		craft()->db->createCommand()->update(
			'fields',
			array('type' => 'RedactorI'),
			array('type' => 'RichText')
		);
	}

	public function onBeforeUninstall()
	{
		// Convert all existing Redactor I fields back to Rich Text
		craft()->db->createCommand()->update(
			'fields',
			array('type' => 'RichText'),
			array('type' => 'RedactorI')
		);
	}
}

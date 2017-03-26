<?php
namespace Craft;

/**
 * Redactor I plugin class
 */
class RedactorIPlugin extends BasePlugin
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Redactor I';
	}

	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '1.1.2';
	}

	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Pixel & Tonic';
	}

	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://pixelandtonic.com';
	}

	/**
	 * @return string
	 */
	public function getPluginUrl()
	{
		return 'https://github.com/pixelandtonic/RedactorI';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return $this->getPluginUrl().'/blob/master/README.md';
	}

	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/pixelandtonic/RedactorI/master/releases.json';
	}

	/**
	 *
	 */
	public function onAfterInstall()
	{
		// Convert all existing Rich Text fields to Redactor I
		craft()->db->createCommand()->update(
			'fields',
			array('type' => 'RedactorI'),
			array('type' => 'RichText')
		);
	}

	/**
	 *
	 */
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

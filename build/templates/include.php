<?php
/**
 *  @package     FrameworkOnFramework
 *  @subpackage  include
 *  @copyright   Copyright (c)2010-2014 Nicholas K. Dionysopoulos
 *  @license     GNU General Public License version 2, or later
 *
 *  Initializes FOF
 */

defined('_JEXEC') or die();

if (!defined('FOF_INCLUDED'))
{
    define('FOF_INCLUDED', '##VERSION##');

	// Register the FOF autoloader
    require_once __DIR__ . '/autoloader/fof.php';
	FOFAutoloaderFof::init();

	// Register a debug log
	if (defined('JDEBUG') && JDEBUG)
	{
		FOFPlatform::getInstance()->logAddLogger('fof.log.php');
	}
}
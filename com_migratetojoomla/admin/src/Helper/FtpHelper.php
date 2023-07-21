<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_migratetojoomla
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\MigrateToJoomla\Administrator\Helper;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

class FtpHelper
{

    /**
     * Method to check Enter base url connection
     * 
     * @param string Base url of live website
     * @return boolean True on success
     * 
     * @since 1.0
     */
    public static function testConnection($path = NULL)
    {
    }

    /**
     * Method to list files in a directory
     * 
     * @param string Directory
     * @return array List of files
     * 
     * @since  1.0
     */
    public static function listDirectory($directory)
    {
    }

    /** Method to check given path is directory
     * 
     * @param string $path Path
     * @return boolean
     * 
     * @since  1.0
     */
    public static function isDir($path)
    {
    }

    /**
     *  Method to get content of File with File system
     * 
     * @param string Source 
     * @return string File content
     * 
     * @since  1.0
     */

    public static function getContent($source)
    {
    }
}

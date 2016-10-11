<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sebastiaan de Jonge (SebastiaanDeJonge.com) <szebi.eger@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   44: class tx_realurlclearcache
 *   50:     public static function clear()
 *
 * TOTAL FUNCTIONS: 1
 */

/**
 * Main class file for the 'RealURL: Clear cache' extension
 *
 * @author Sebastiaan de Jonge (SebastiaanDeJonge.com) <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage tx_realurlclearcache
 */
class tx_realurlclearcache {
	/**
	 * Clears the actual RealURL cache tables inside the database
	 *
	 * @return	void
	 */
	public static function clear() {
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_pathdata;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_uniqalias;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_uniqalias_cache_map;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_urldata;');
	}

}

/**
 * XCLASS Inclusion
 */
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurl_clearcache/class.tx_realurlclearcache.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurl_clearcache/class.tx_realurlclearcache.php']);
}
?>

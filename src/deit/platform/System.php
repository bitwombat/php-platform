<?php

namespace deit\platform;

/**
 * Utility class to make detecting platform information easier
 * @author 	James Newell <james@digitaledgeit.com.au>
 */
class System {

	/**
	 * Gets the name of the OS
	 * @return 	string
	 */
	public static function getName() {
		return php_uname('s');
	}

	/**
	 * Gets the version of the OS
	 * @return 	string
	 */
	public static function getVersion() {
		return php_uname('v');
	}

	/**
	 * Gets whether the OS is a version of Microsoft Windows
	 * @return 	bool
	 */
	public static function isWin() {
		return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
	}

	/**
	 * Gets whether the OS is a version of Apple OS
	 * @return 	bool
	 */
	public static function isMac() {
		return strtoupper(self::getName()) === 'DARWIN';
	}

	/**
	 * Gets whether the OS is a version of Linux
	 * @return 	bool
	 */
	public static function isLinux() {
		return strtoupper(self::getName()) === 'LINUX';
	}

	/**
	 * Gets whether the OS is a version of Unix
	 * @return 	bool
	 */
	public static function isUnix() {
		return strtoupper(self::getName()) === 'UNIX' || substr(strtoupper(self::getName()), -3) === 'BSD' || (self::isMac());
	}

}
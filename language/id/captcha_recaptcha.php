<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'id',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Untuk menggunakan reCaptcha, anda harus membuat satu akun di <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Konfirmasi visual yang anda berikan tidak tepat',

	'RECAPTCHA_PUBLIC'				=> 'Public reCaptcha key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Public reCaptcha key anda. Key dapat diperoleh di <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Private reCaptcha key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Private reCaptcha anda. Key dapat diperoleh di <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Untuk pencegahan submisi otomatis, anda harus memasukkan kedua kata yang ditampilkan pada kotak isian di bawah ini.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'There was a problem connecting to the RECAPTCHA service: could not open socket. Try again later.',
));

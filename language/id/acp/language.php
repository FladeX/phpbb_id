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
	'ACP_FILES'						=> 'File-file bahasa admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Di sini anda bisa menginstal/menyingkirkan file bahasa.',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Are you sure you wish to delete “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Paket bahasa yang diinstall',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Keterangan-keterangan bahasa telah berhasil diperbarui.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Paket bahasa ini telah diinstal.',
	'LANGUAGE_PACK_DELETED'				=> 'Paket bahasa <strong>%s</strong> telah berhasil disingkirkan. Semua pengguna yang memakai bahasa ini akan diubah menjadi bahasa default halaman.',
	'LANGUAGE_PACK_DETAILS'				=> 'Keterangan paket bahasa',
	'LANGUAGE_PACK_INSTALLED'			=> 'Paket bahasa <strong>%s</strong> telah berhasil diinstal.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'The custom profile fields’ language strings were copied from the default language. Please change them if necessary.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nama lokal',
	'LANGUAGE_PACK_NAME'				=> 'Nama',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Paket bahasa yang dipilih tidak ada.',
	'LANGUAGE_PACK_USED_BY'				=> 'Digunakan oleh (termasuk robot)',
	'LANGUAGE_VARIABLE'					=> 'Variabel bahasa',
	'LANG_AUTHOR'						=> 'Pencipta paket bahasa',
	'LANG_ENGLISH_NAME'					=> 'Nama dalam bahasa Inggris',
	'LANG_ISO_CODE'						=> 'Kode ISO',
	'LANG_LOCAL_NAME'					=> 'Nama lokal',

	'MISSING_LANG_FILES'		=> 'File bahasa hilang',
	'MISSING_LANG_VARIABLES'	=> 'Variable bahasa hilang',

	'NO_FILE_SELECTED'				=> 'Anda belum menentukan file bahasa.',
	'NO_LANG_ID'					=> 'Anda belum menentukan paket bahasa.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Anda tidak dapat menyingkirkan pake bahasa default.<br />Jika anda ingin menyingkirkan paket bahasa ini, silahkan ubah bahasa default halaman terlebih dahulu.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Tidak ada paket bahasa yang diuninstal',

	'THOSE_MISSING_LANG_FILES'			=> 'File bahasa berikut ini hilang dari %s folder bahasa',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Variabel bahasa berikut ini hilang dari <strong>%s</strong> paket bahasa',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paket bahasa diuninstal',
));

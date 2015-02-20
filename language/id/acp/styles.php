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
	'ACP_STYLES_EXPLAIN'	=> 'Here you can manage the available styles on your board. You may alter existing styles, delete, deactivate, reactivate, install new ones. You can also see what a style will look like using the preview function. Also listed is the total user count for each style, note that overriding user styles will not be reflected here.',

	'CANNOT_BE_INSTALLED'			=> 'Cannot be installed',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Are you sure you wish to uninstall selected styles?',
	'COPYRIGHT'						=> 'Hak cipta',

	'DEACTIVATE_DEFAULT'		=> 'Anda tidak dapat menonaktifkan gaya ini.',
	'DELETE_FROM_FS'			=> 'Hapus dari sistem file',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.',
	'DETAILS'					=> 'Keterangan',

	'INHERITING_FROM'			=> 'Berasal dari',
	'INSTALL_STYLE'				=> 'Instal gaya',
	'INSTALL_STYLES'			=> 'Instal gaya',
	'INSTALL_STYLES_EXPLAIN'	=> 'Di sini anda dapat menginstal gaya baru dan gaya jika sesuai dengan elemen gaya. Jika anda sudah memiliki elemen gaya yang diinstal, maka tidak akan ditulis ulang lagi. Beberapa gaya membutukan elmemen yang sudah ada sebelumnya diinstal. Jika anda mencoba menginstall sebuah gaya namun tidak memiliki elemen yang dibutuhkan, maka anda akan diberitahukan.',
	'INVALID_STYLE_ID'			=> 'Invalid style ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'No styles match your query.',
	'NO_UNINSTALLED_STYLE'		=> 'Tidak ada gaya yang diuninstal.',

	'PURGED_CACHE'				=> 'Cache was purged.',

	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.',

	'STYLE_ACTIVATE'			=> 'Aktifkan',
	'STYLE_ACTIVE'				=> 'Aktif',
	'STYLE_DEACTIVATE'			=> 'Nonaktifkan',
	'STYLE_DEFAULT'				=> 'Jadikan gaya default',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid parent style.',
	'STYLE_ERR_NAME_EXIST'		=> 'Gaya dengan nama tersebut sudah ada.',
	'STYLE_ERR_STYLE_NAME'		=> 'Anda harus memberikan sebuah nama untuk gaya ini.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Return to installed styles list',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Install more styles',
	'STYLE_NAME'				=> 'Nama gaya',
	'STYLE_NAME_RESERVED'		=> 'Style "%s" can not be installed, because the name is reserved.',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.',
	'STYLE_PATH'				=> 'Style path',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Digunakan oleh (termasuk robot)',

	'UNINSTALL_DEFAULT'		=> 'You cannot uninstall the default style.',
));

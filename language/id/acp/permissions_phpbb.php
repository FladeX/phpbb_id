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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Tindakan',
	'ACL_CAT_CONTENT'		=> 'Konten',
	'ACL_CAT_FORUMS'		=> 'Forum',
	'ACL_CAT_MISC'			=> 'Lain-lain',
	'ACL_CAT_PERMISSIONS'	=> 'Perijinan',
	'ACL_CAT_PM'			=> 'Pesan pribadi',
	'ACL_CAT_POLLS'			=> 'Pemungutan suara',
	'ACL_CAT_POST'			=> 'Post',
	'ACL_CAT_POST_ACTIONS'	=> 'Tindakan post',
	'ACL_CAT_POSTING'		=> 'Posting',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Pengaturan',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Tindakan topik',
	'ACL_CAT_USER_GROUP'	=> 'Pengguna &amp; Grup',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Dapat melihat profil, daftar anggota dan daftar online',
	'ACL_U_CHGNAME'		=> 'Dapat mengganti nama pengguna',
	'ACL_U_CHGPASSWD'	=> 'Dapat mengubah kata sandi',
	'ACL_U_CHGEMAIL'	=> 'Dapat mengubah alamat e-mail',
	'ACL_U_CHGAVATAR'	=> 'Dapat mengubah avatar',
	'ACL_U_CHGGRP'		=> 'Dapat mengubah grup default pengguna',
	'ACL_U_CHGPROFILEINFO'	=> 'Can change profile field information',

	'ACL_U_ATTACH'		=> 'Dapat melampirkan file-file',
	'ACL_U_DOWNLOAD'	=> 'Dapat mendownload file-file',
	'ACL_U_SAVEDRAFTS'	=> 'Dapat menyimpan naskah',
	'ACL_U_CHGCENSORS'	=> 'Dapat menonaktifkan sensor kata',
	'ACL_U_SIG'			=> 'Dapat menggunakan tanda tangan',

	'ACL_U_SENDPM'		=> 'Dapat mengirim pesan pribadi',
	'ACL_U_MASSPM'		=> 'Dapat mengirim pesan ke banyak pengguna',
	'ACL_U_MASSPM_GROUP'=> 'Dapat mengirimkan pesan ke grup',
	'ACL_U_READPM'		=> 'Dapat membaca pesan pribadi',
	'ACL_U_PM_EDIT'		=> 'Dapat mengubah pesan pribadinya sendiri',
	'ACL_U_PM_DELETE'	=> 'Dapat menyingkirkan pesan pribadinya dari foldernya sendiri',
	'ACL_U_PM_FORWARD'	=> 'Dapat mengalihkan pesan pribadi',
	'ACL_U_PM_EMAILPM'	=> 'Dapat mengirim e-mail pesan pribadi',
	'ACL_U_PM_PRINTPM'	=> 'Dapat mencetak pesan pribadi',
	'ACL_U_PM_ATTACH'	=> 'Dapat melampirkan file-file pada pesan pribadi',
	'ACL_U_PM_DOWNLOAD'	=> 'Dapat mendownload file-file pada pesan pribadi',
	'ACL_U_PM_BBCODE'	=> 'Dapat mempost BBCode pada pesan pribadi',
	'ACL_U_PM_SMILIES'	=> 'Dapat mempost tanda senyuman pada pesan pribadi',
	'ACL_U_PM_IMG'		=> 'Dapat mempost gambar pada pesan pribadi',
	'ACL_U_PM_FLASH'	=> 'Dapat mempost Flash pada pesan pribadi',

	'ACL_U_SENDEMAIL'	=> 'Dapat mengirim e-mail',
	'ACL_U_SENDIM'		=> 'Dapat mengirim pesan singkat',
	'ACL_U_IGNOREFLOOD'	=> 'Dapat mengabaikan batas flood',
	'ACL_U_HIDEONLINE'	=> 'Dapat menyembunyikan status online',
	'ACL_U_VIEWONLINE'	=> 'Dapat melihat pengguna tersembunyi yang online',
	'ACL_U_SEARCH'		=> 'Dapat mencari halaman',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Dapat melihat forum',
	'ACL_F_READ'		=> 'Dapat membaca forum',
	'ACL_F_SEARCH'		=> 'Dapat mencari forum',
	'ACL_F_SUBSCRIBE'	=> 'Dapat berlangganan forum',
	'ACL_F_PRINT'		=> 'Dapat mencetak post',
	'ACL_F_EMAIL'		=> 'Dapat menge-mail topik',
	'ACL_F_BUMP'		=> 'Dapat menggeser topik',
	'ACL_F_USER_LOCK'	=> 'Dapat mengunci topiknya sendiri',
	'ACL_F_DOWNLOAD'	=> 'Dapat mendownload file-file',
	'ACL_F_REPORT'		=> 'Dapat melaporkan post',

	'ACL_F_POST'		=> 'Dapat memulai topik baru',
	'ACL_F_STICKY'		=> 'Dapat mempost sticky',
	'ACL_F_ANNOUNCE'	=> 'Dapat mempost pengumuman',
	'ACL_F_REPLY'		=> 'Dapat membalas topik',
	'ACL_F_EDIT'		=> 'Dapat mengubah postnya sendiri',
	'ACL_F_DELETE'		=> 'Dapat menghapus postnya sendiri',
	'ACL_F_SOFTDELETE'	=> 'Can soft delete own posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'ACL_F_IGNOREFLOOD' => 'Dapat mengabaikan batas flood',
	'ACL_F_POSTCOUNT'	=> 'Kenaikan penghitung post<br /><em>Mohon dicatat bahwa pengaturan ini hanya akan bekerja pada post baru.</em>',
	'ACL_F_NOAPPROVE'	=> 'Dapat mempost tanpa persetujuan',

	'ACL_F_ATTACH'		=> 'Dapat melampirkan file-file',
	'ACL_F_ICONS'		=> 'Can use topic/post icons',
	'ACL_F_BBCODE'		=> 'Dapat mempost BBCode',
	'ACL_F_FLASH'		=> 'Dapat mempost Flash',
	'ACL_F_IMG'			=> 'Dapat mempost gambar',
	'ACL_F_SIGS'		=> 'Dapat menggunakan tanda tangan',
	'ACL_F_SMILIES'		=> 'Dapat mempost tanda senyuman',

	'ACL_F_POLL'		=> 'Dapat membuat pemungutan suara',
	'ACL_F_VOTE'		=> 'Dapat memberikan suara pada pemungutan suara',
	'ACL_F_VOTECHG'		=> 'Dapat mengubah suara yang telah diberikan',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Dapat mengubah post',
	'ACL_M_DELETE'		=> 'Dapat menghapus post',
	'ACL_M_SOFTDELETE'	=> 'Can soft delete posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'ACL_M_APPROVE'		=> 'Dapat menyetujui bos',
	'ACL_M_REPORT'		=> 'Dapat menutup dan menghapus laporan',
	'ACL_M_CHGPOSTER'	=> 'Dapat mengubah pengarang post',

	'ACL_M_MOVE'	=> 'Dapat memindahkan topik',
	'ACL_M_LOCK'	=> 'Dapat mengunci topik',
	'ACL_M_SPLIT'	=> 'Dapat memisahkan topik',
	'ACL_M_MERGE'	=> 'Dapat menggabungkan topik',

	'ACL_M_INFO'	=> 'Dapat melihat keterangan post',
	'ACL_M_WARN'	=> 'Dapat memberikan peringatan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Dapat mengatur larangan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Dapat mengubah pengaturan halaman/memeriksa pembaruan',
	'ACL_A_SERVER'		=> 'Dapat mengubah server/pengaturan komunikasi',
	'ACL_A_JABBER'		=> 'Dapat mengubah pengaturan Jabber',
	'ACL_A_PHPINFO'		=> 'Dapat melihat pengaturan php',

	'ACL_A_FORUM'		=> 'Dapat mengatur forum',
	'ACL_A_FORUMADD'	=> 'Dapat menambahkan forum baru',
	'ACL_A_FORUMDEL'	=> 'Dapat menghapus forum',
	'ACL_A_PRUNE'		=> 'Dapat mengurangi forum',

	'ACL_A_ICONS'		=> 'Dapat mengubah topik/ikon post dan tanda senyuman',
	'ACL_A_WORDS'		=> 'Dapat mengubah sensor kata',
	'ACL_A_BBCODE'		=> 'Dapat menentukan tag BBCode',
	'ACL_A_ATTACH'		=> 'Dapat mengubah pengaturan yang berhubungan dengan lampiran',

	'ACL_A_USER'		=> 'Dapat mengatur pengguna<br /><em>Termasuk melihat agen browser pengguna pada daftar pengguna yang online.</em>',
	'ACL_A_USERDEL'		=> 'Dapat menghapus/mengurangi pengguna',
	'ACL_A_GROUP'		=> 'Dapat mengatur grup',
	'ACL_A_GROUPADD'	=> 'Dapat menambahkan grup baru',
	'ACL_A_GROUPDEL'	=> 'Dapat menghapus grup',
	'ACL_A_RANKS'		=> 'Dapat mengatur ranking',
	'ACL_A_PROFILE'		=> 'Dapat mengatur profil tambahan',
	'ACL_A_NAMES'		=> 'Dapat mengatur nama pengguna yang tidak diijinkan',
	'ACL_A_BAN'			=> 'Dapat mengatur larangan',

	'ACL_A_VIEWAUTH'	=> 'Dapat melihat mask perijinan',
	'ACL_A_AUTHGROUPS'	=> 'Dapat mengubah perijinan untuk grup individu',
	'ACL_A_AUTHUSERS'	=> 'Dapat mengubah perijinan untuk pengguna individu',
	'ACL_A_FAUTH'		=> 'Dapat mengubah kelas perijinan forum',
	'ACL_A_MAUTH'		=> 'Dapat mengubah kelas perijinan moderator',
	'ACL_A_AAUTH'		=> 'Dapat mengubah kelas perijinan admin',
	'ACL_A_UAUTH'		=> 'Dapat mengubah kelas perijinan pengguna',
	'ACL_A_ROLES'		=> 'Dapat mengatur peranan',
	'ACL_A_SWITCHPERM'	=> 'Dapat menggunakan perijinan yang lain',

	'ACL_A_STYLES'		=> 'Dapat mengatur gaya',
	'ACL_A_EXTENSIONS'	=> 'Can manage extensions',
	'ACL_A_VIEWLOGS'	=> 'Dapat melihat log',
	'ACL_A_CLEARLOGS'	=> 'Dapat membersihkan log',
	'ACL_A_MODULES'		=> 'Dapat mengatur module',
	'ACL_A_LANGUAGE'	=> 'Dapat mengatur paket bahasa',
	'ACL_A_EMAIL'		=> 'Dapat mengirim e-mail massa',
	'ACL_A_BOTS'		=> 'Dapat mengatur bots',
	'ACL_A_REASONS'		=> 'Dapat mengatur laporan/alasan penolakan',
	'ACL_A_BACKUP'		=> 'Dapat membackup/mengembalikan database',
	'ACL_A_SEARCH'		=> 'Dapat mengatur backend pencarian dan pengaturan',
));

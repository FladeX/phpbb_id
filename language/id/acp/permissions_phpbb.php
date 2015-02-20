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
	'ACL_CAT_ACTIONS'		=> 'Actions',
	'ACL_CAT_CONTENT'		=> 'Content',
	'ACL_CAT_FORUMS'		=> 'Forums',
	'ACL_CAT_MISC'			=> 'Misc',
	'ACL_CAT_PERMISSIONS'	=> 'Permissions',
	'ACL_CAT_PM'			=> 'Private messages',
	'ACL_CAT_POLLS'			=> 'Polls',
	'ACL_CAT_POST'			=> 'Post',
	'ACL_CAT_POST_ACTIONS'	=> 'Post actions',
	'ACL_CAT_POSTING'		=> 'Posting',
	'ACL_CAT_PROFILE'		=> 'Profile',
	'ACL_CAT_SETTINGS'		=> 'Settings',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Topic actions',
	'ACL_CAT_USER_GROUP'	=> 'Users &amp; Groups',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Can view profiles, memberlist and online list',
	'ACL_U_CHGNAME'		=> 'Can change username',
	'ACL_U_CHGPASSWD'	=> 'Can change password',
	'ACL_U_CHGEMAIL'	=> 'Can change email address',
	'ACL_U_CHGAVATAR'	=> 'Can change avatar',
	'ACL_U_CHGGRP'		=> 'Can change default usergroup',
	'ACL_U_CHGPROFILEINFO'	=> 'Can change profile field information',

	'ACL_U_ATTACH'		=> 'Can attach files',
	'ACL_U_DOWNLOAD'	=> 'Can download files',
	'ACL_U_SAVEDRAFTS'	=> 'Can save drafts',
	'ACL_U_CHGCENSORS'	=> 'Can disable word censors',
	'ACL_U_SIG'			=> 'Can use signature',

	'ACL_U_SENDPM'		=> 'Can send private messages',
	'ACL_U_MASSPM'		=> 'Can send messages to multiple users',
	'ACL_U_MASSPM_GROUP'=> 'Can send messages to groups',
	'ACL_U_READPM'		=> 'Can read private messages',
	'ACL_U_PM_EDIT'		=> 'Can edit own private messages',
	'ACL_U_PM_DELETE'	=> 'Can remove private messages from own folder',
	'ACL_U_PM_FORWARD'	=> 'Can forward private messages',
	'ACL_U_PM_EMAILPM'	=> 'Can email private messages',
	'ACL_U_PM_PRINTPM'	=> 'Can print private messages',
	'ACL_U_PM_ATTACH'	=> 'Can attach files in private messages',
	'ACL_U_PM_DOWNLOAD'	=> 'Can download files in private messages',
	'ACL_U_PM_BBCODE'	=> 'Can use BBCode in private messages',
	'ACL_U_PM_SMILIES'	=> 'Can use smilies in private messages',
	'ACL_U_PM_IMG'		=> 'Can use [img] BBCode tag in private messages',
	'ACL_U_PM_FLASH'	=> 'Can use [flash] BBCode tag in private messages',

	'ACL_U_SENDEMAIL'	=> 'Can send emails',
	'ACL_U_SENDIM'		=> 'Can send instant messages',
	'ACL_U_IGNOREFLOOD'	=> 'Can ignore flood limit',
	'ACL_U_HIDEONLINE'	=> 'Can hide online status',
	'ACL_U_VIEWONLINE'	=> 'Can view hidden online users',
	'ACL_U_SEARCH'		=> 'Can search board',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Can see forum',
	'ACL_F_READ'		=> 'Can read forum',
	'ACL_F_SEARCH'		=> 'Can search the forum',
	'ACL_F_SUBSCRIBE'	=> 'Can subscribe forum',
	'ACL_F_PRINT'		=> 'Can print topics',
	'ACL_F_EMAIL'		=> 'Can email topics',
	'ACL_F_BUMP'		=> 'Can bump topics',
	'ACL_F_USER_LOCK'	=> 'Can lock own topics',
	'ACL_F_DOWNLOAD'	=> 'Can download files',
	'ACL_F_REPORT'		=> 'Can report posts',

	'ACL_F_POST'		=> 'Can start new topics',
	'ACL_F_STICKY'		=> 'Can post stickies',
	'ACL_F_ANNOUNCE'	=> 'Can post announcements',
	'ACL_F_REPLY'		=> 'Can reply to topics',
	'ACL_F_EDIT'		=> 'Can edit own posts',
	'ACL_F_DELETE'		=> 'Can permanently delete own posts',
	'ACL_F_SOFTDELETE'	=> 'Can soft delete own posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'ACL_F_IGNOREFLOOD' => 'Can ignore flood limit',
	'ACL_F_POSTCOUNT'	=> 'Increment post counter<br /><em>Please note that this setting only affects new posts.</em>',
	'ACL_F_NOAPPROVE'	=> 'Can post without approval',

	'ACL_F_ATTACH'		=> 'Can attach files',
	'ACL_F_ICONS'		=> 'Can use topic/post icons',
	'ACL_F_BBCODE'		=> 'Can use BBCode',
	'ACL_F_FLASH'		=> 'Can use [flash] BBCode tag',
	'ACL_F_IMG'			=> 'Can use [img] BBCode tag',
	'ACL_F_SIGS'		=> 'Can use signatures',
	'ACL_F_SMILIES'		=> 'Can use smilies',

	'ACL_F_POLL'		=> 'Can create polls',
	'ACL_F_VOTE'		=> 'Can vote in polls',
	'ACL_F_VOTECHG'		=> 'Can change existing vote',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Can edit posts',
	'ACL_M_DELETE'		=> 'Can permanently delete posts',
	'ACL_M_SOFTDELETE'	=> 'Can soft delete posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'ACL_M_APPROVE'		=> 'Can approve and restore posts',
	'ACL_M_REPORT'		=> 'Can close and delete reports',
	'ACL_M_CHGPOSTER'	=> 'Can change post author',

	'ACL_M_MOVE'	=> 'Can move topics',
	'ACL_M_LOCK'	=> 'Can lock topics',
	'ACL_M_SPLIT'	=> 'Can split topics',
	'ACL_M_MERGE'	=> 'Can merge topics',

	'ACL_M_INFO'	=> 'Can view post details',
	'ACL_M_WARN'	=> 'Can issue warnings<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Can manage bans<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
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

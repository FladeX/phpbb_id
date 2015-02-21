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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Aktif di forum',
	'ACTIVE_IN_TOPIC'		=> 'Aktif di topik',
	'ADD_FOE'				=> 'Jadikan lawan',
	'ADD_FRIEND'			=> 'Jadikan teman',
	'AFTER'					=> 'Setelah',

	'ALL'					=> 'Semua',

	'BEFORE'				=> 'Sebelum',

	'CC_SENDER'				=> 'Send a copy of this email to yourself.',
	'CONTACT_ADMIN'			=> 'Contact a Board Administrator',

	'DEST_LANG'				=> 'Bahasa',
	'DEST_LANG_EXPLAIN'		=> 'Pilih bahasa yang sesuai (jika tersedia) untuk penerima pesan ini.',

	'EDIT_PROFILE'			=> 'Edit profile',

	'EMAIL_BODY_EXPLAIN'	=> 'Pesan ini akan dikirimkan sebagai teks biasa, tidak mengikutsertakan HTML ataupun BBCode. Alamat pengirim untuk pesan ini akan diatur ke alamat e-mail anda.',
	'EMAIL_DISABLED'		=> 'Maaf, semua fungsi yang berhubungan dengan e-mail tidak diperbolehkan.',
	'EMAIL_SENT'			=> 'E-mail telah dikirim.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Pesan ini akan dikirimkan sebagai teks biasa, tidak mengikutsertakan HTML ataupun BBCode. Harap dicatat bahwa informasi topik telah dimasukkan kedalam pesan. Alamat pengirim untuk pesan ini akan ditujukan ke alamat e-mail anda.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Anda harus memberikan alamat e-mail yang sah untuk penerima.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Anda harus menuliskan pesan untuk dikirim melalui e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Anda harus menuliskan pesan untuk dikirimkan.',
	'EMPTY_NAME_EMAIL'		=> 'Anda harus memasukkan nama lengkap penerima.',
	'EMPTY_SENDER_EMAIL'	=> 'You must provide a valid email address.',
	'EMPTY_SENDER_NAME'		=> 'You must provide a name.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Anda harus menentukan subjek e-mail.',
	'EQUAL_TO'				=> 'Sama dengan',

	'FIND_USERNAME_EXPLAIN'	=> 'Gunakan halaman ini untuk mencari anggota. Anda tidak perlu melengkapi semua isian. Untuk mencocokkan hanya sebagian data saja, gunakan simbol * sebagai wildcard. Pada saat memasukkan tanggal gunakanlah format <kbd>TTTT-BB-HH</kbd>, contoh. <samp>2004-02-29</samp>. Gunakan tanda centang untuk memilih satu atau lebih nama pengguna (nama pengguna yang lain bisa dipilih sekaligus) dan klik Pilih untuk kembali kehalaman sebelumnya.',
	'FLOOD_EMAIL_LIMIT'		=> 'Anda tidak dapat mengirimkan e-mail yang lain sekarang ini. Silahkan dicoba lagi dalam beberapa saat.',

	'GROUP_LEADER'			=> 'Pemimpin grup',

	'HIDE_MEMBER_SEARCH'	=> 'Sembunyikan pencarian anggota',

	'IM_ADD_CONTACT'		=> 'Tambahkan Contak',
	'IM_DOWNLOAD_APP'		=> 'Download aplikasi',
	'IM_JABBER'				=> 'Mohon dicatat bahwa pengguna mungkin telah memilih untuk tidak menerima pesan-pesan singkat.',
	'IM_JABBER_SUBJECT'		=> 'Ini adalah pesan otomatis, mohon untuk tidak mengirimkan balasan! Pesan dari pengguna %1$s dari %2$s.',
	'IM_MESSAGE'			=> 'Pesan anda',
	'IM_NAME'				=> 'Nama Anda',
	'IM_NO_DATA'			=> 'Tidak ada informasi kontak dari yang sesuai dari pengguna ini.',
	'IM_NO_JABBER'			=> 'Maaf, perpesanan secara langsung bagi pengguna-pengguna Jabber tidak didukung dihalaman ini. Anda membutuhkan klien Jabber yang sudah diinstal di sistem anda untuk menghubungi penerima di atas ini.',
	'IM_RECIPIENT'			=> 'Penerima',
	'IM_SEND'				=> 'Kirim pesan',
	'IM_SEND_MESSAGE'		=> 'Kirim pesan',
	'IM_SENT_JABBER'		=> 'Pesan anda yang ditujukan untuk %1$s telah berhasil dikirim.',
	'IM_USER'				=> 'Kirim pesan singkat',

	'LAST_ACTIVE'				=> 'Terakhir aktif',
	'LESS_THAN'					=> 'Lebih dari',
	'LIST_USERS'				=> array(
		1	=> '%d pengguna',
		2	=> '%d pengguna',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Halaman ini membutuhkan anda untuk didaftarkan dan dimasukkan agar dapat mengakses daftar anggota.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Halaman ini membutuhkan anda untuk didaftarkan dan dimasukkan agar dapat mencari pengguna.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Halaman ini membutuhkan anda untuk didaftarkan dan dimasukkan agar dapat melihat profil.',

	'MORE_THAN'				=> 'Lebih dari',

	'NO_CONTACT_FORM'		=> 'The board administrator contact form has been disabled.',
	'NO_CONTACT_PAGE'		=> 'The board administrator contact page has been disabled.',
	'NO_EMAIL'				=> 'Anda tidak diijinkan untuk mengirim e-mail kepengguna ini.',
	'NO_VIEW_USERS'			=> 'Anda tidak berhak melihat daftar atau profil anggota.',

	'ORDER'					=> 'Urutkan',
	'OTHER'					=> 'Lainnya',

	'POST_IP'				=> 'Posted dari IP/domain',

	'REAL_NAME'				=> 'Nama penerima',
	'RECIPIENT'				=> 'Penerima',
	'REMOVE_FOE'			=> 'Singkirkan lawan',
	'REMOVE_FRIEND'			=> 'Singkirkan teman',

	'SELECT_MARKED'			=> 'Pilih yang ditandai',
	'SELECT_SORT_METHOD'	=> 'Pilih cara urutan',
	'SENDER_EMAIL_ADDRESS'	=> 'Your email address',
	'SENDER_NAME'			=> 'Your name',
	'SEND_ICQ_MESSAGE'		=> 'Kirim pesan ICQ',
	'SEND_IM'				=> 'Perpesanan singkat',
	'SEND_JABBER_MESSAGE'	=> 'Kirim pesan Jabber',
	'SEND_MESSAGE'			=> 'Pesan',
	'SEND_YIM_MESSAGE'		=> 'Kirim pesan YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Terakhir aktif',
	'SORT_POST_COUNT'		=> 'Jumlah post',

	'USERNAME_BEGINS_WITH'	=> 'Nama pengguna yang dimulai dengan',
	'USER_ADMIN'			=> 'Admin',
	'USER_BAN'				=> 'Larang pengguna',
	'USER_FORUM'			=> 'Statistik pengguna',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Kehadiran pengguna',
	'USERS_PER_PAGE'		=> 'Users per page',

	'VIEWING_PROFILE'		=> 'Lihat profile - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'View Facebook Profile',
	'VIEW_SKYPE_PROFILE'	=> 'View Skype Profile',
	'VIEW_TWITTER_PROFILE'	=> 'View Twitter Profile',
	'VIEW_YOUTUBE_CHANNEL'	=> 'View YouTube Channel',
	'VIEW_GOOGLEPLUS_PROFILE' => 'View Google+ Profile',
));

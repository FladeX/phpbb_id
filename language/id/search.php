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
	'ALL_AVAILABLE'			=> 'Semua tersedia',
	'ALL_RESULTS'			=> 'Semua hasil',

	'DISPLAY_RESULTS'		=> 'Tampilkan hasil sebagai',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Ditemukan %d pencarian yang cocok',
		2	=> 'Ditemukan %d pencarian yang cocok',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Ditemukan lebih dari %d pencarian yang cocok',
		2	=> 'Ditemukan lebih dari %d pencarian yang cocok',
	),

	'GLOBAL'				=> 'Pengumuman Global',

	'IGNORED_TERMS'			=> 'diabaikan',
	'IGNORED_TERMS_EXPLAIN'	=> 'Kata-kata yang ada di query pencarian anda diabaikan, karena merupakan kata-kata yang terlalu umum: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Lompat ke post',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Halaman membutuhkan anda untuk didaftarkan dan dimasukkan untuk melihat post anda sendiri.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Halaman membutuhkan anda untuk didaftarkan dan dimasukkan untuk melihat post anda yang belum terbaca.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Papan membutuhkan anda untuk terdaftar dan masuk untuk melihat post baru sejak kunjungan terakhir anda.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Kata-kata yang anda masukkan terlalu banyak. Silahkan masukkan dengan tidak lebih dari %1$d kata.',
		2	=> 'Kata-kata yang anda masukkan terlalu banyak. Silahkan masukkan dengan tidak lebih dari %1$d kata.',
	),

	'NO_KEYWORDS'			=> 'Anda harus menetukan paling sedikitnya satu kata untuk dicari. Setiap kata paling sedikitnya harus terdiri dari %d karakter dan tidak melebihi %d karakter termasuk wildcard.',
	'NO_RECENT_SEARCHES'	=> 'Tidak ada pencarian yang dimuat akhir ini.',
	'NO_SEARCH'				=> 'Maaf, anda tidak diijinkan untuk menggunakan sistem pencarian.',
	'NO_SEARCH_RESULTS'		=> 'Pencarian tidak ditemukan.',
	'NO_SEARCH_LOAD'		=> 'Sorry but you cannot use search at this time. The server has high load. Please try again later.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sorry but you cannot use search at this time. Please try again in %d second.',
		2	=> 'Sorry but you cannot use search at this time. Please try again in %d seconds.',
	),
	'NO_SEARCH_UNREADS'		=> 'Maaf, pencarian untuk post tak terbaca sudah dinonaktifkan di halaman ini.',
	'WORD_IN_NO_POST'		=> 'Tidak ada post yang ditemukan karena kata pencarian <strong>%s</strong> tidak ditemukan di post lainnya.',
	'WORDS_IN_NO_POST'		=> 'Tidak ada post yang ditemukan karena kata-kata pencarian <strong>%s</strong> tidak ditemukan di post lainnya.',

	'POST_CHARACTERS'		=> 'karakter post',
	'PHRASE_SEARCH_DISABLED'	=> 'Searching by exact phrase is not supported on this board.',

	'RECENT_SEARCHES'		=> 'Pencarian-pencarian terakhir',
	'RESULT_DAYS'			=> 'Batas hasil',
	'RESULT_SORT'			=> 'Urutkan hasil dengan',
	'RETURN_FIRST'			=> 'Kembali ke awal',
	'GO_TO_SEARCH_ADV'	=> 'Kembali ke pencarian lanjutan',

	'SEARCHED_FOR'				=> 'Cari istilah yang digunakan',
	'SEARCHED_TOPIC'			=> 'Topik tercari',
	'SEARCHED_QUERY'			=> 'Searched query',
	'SEARCH_ALL_TERMS'			=> 'Cari semua istilah atau gunakan query yang dimasukan',
	'SEARCH_ANY_TERMS'			=> 'Cari semua istilah',
	'SEARCH_AUTHOR'				=> 'Cari pengarang',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Gunakan * sebagai wildcard untuk pencocokan bagian.',
	'SEARCH_FIRST_POST'			=> 'Hanya post pertama dari topik',
	'SEARCH_FORUMS'				=> 'Cari di forum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Pilih forum atau forum yang ingin anda cari. Subforum dicari secara otomatis, jika anda tidak memakai “cari subforum“ dibawah ini.',
	'SEARCH_IN_RESULTS'			=> 'Cari ini',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Tempatkan <strong>+</strong> di depan kata yang akan dicari dan <strong>-</strong> di depan kata yang harus ditemukan. Letakkan sebuah daftar yang dipisahkan dengan <strong>|</strong> kedalam kurung jika hanya satu dari kata-kata tersebut yang harus dicari. Gunakan tanda * untuk mencari secara perbagian saja.',
	'SEARCH_MSG_ONLY'			=> 'Hanya pesan teks',
	'SEARCH_OPTIONS'			=> 'Pilihan-pilihan pencarian',
	'SEARCH_QUERY'				=> 'Cari query',
	'SEARCH_SUBFORUMS'			=> 'Cari subforum',
	'SEARCH_TITLE_MSG'			=> 'Subjek post dan pesan teks',
	'SEARCH_TITLE_ONLY'			=> 'Hanya judul topik',
	'SEARCH_WITHIN'				=> 'Cari di dalam',
	'SORT_ASCENDING'			=> 'Urutkan menaik',
	'SORT_AUTHOR'				=> 'Pengarang',
	'SORT_DESCENDING'			=> 'Urutkan menurun',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Subjek post',
	'SORT_TIME'					=> 'Waktu post',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Anda harus menentukan paling sedikitnya %d karakter dai nama pengarang.',
		2	=> 'Anda harus menentukan paling sedikitnya %d karakter dai nama pengarang.',
	),
));

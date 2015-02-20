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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrator',
	'ACP_ADMIN_LOGS'			=> 'Log admin',
	'ACP_ADMIN_ROLES'			=> 'Peran admin',
	'ACP_ATTACHMENTS'			=> 'Lampiran',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Pengaturan lampiran',
	'ACP_AUTH_SETTINGS'			=> 'Otentifikasi',
	'ACP_AUTOMATION'			=> 'Otomatisasi',
	'ACP_AVATAR_SETTINGS'		=> 'Pengaturan avatar',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Pelarangan',
	'ACP_BAN_EMAILS'			=> 'Larang e-mail',
	'ACP_BAN_IPS'				=> 'Larang IP',
	'ACP_BAN_USERNAMES'			=> 'Larang nama pengguna',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurasi halaman',
	'ACP_BOARD_FEATURES'		=> 'Fitur halaman',
	'ACP_BOARD_MANAGEMENT'		=> 'Manajemen halaman',
	'ACP_BOARD_SETTINGS'		=> 'Pengaturan halaman',
	'ACP_BOTS'					=> 'Spider/Robot',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Customise',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Forum',
	'ACP_CAT_GENERAL'			=> 'Umum',
	'ACP_CAT_MAINTENANCE'		=> 'Perawatan',
	'ACP_CAT_PERMISSIONS'		=> 'Perijinan',
	'ACP_CAT_POSTING'			=> 'Posting',
	'ACP_CAT_STYLES'			=> 'Gaya',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Pengguna dan Grup',
	'ACP_CAT_USERS'				=> 'Pengguna',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikasi klien',
	'ACP_COOKIE_SETTINGS'		=> 'Pengaturan cookie',
	'ACP_CONTACT'				=> 'Contact page',
	'ACP_CONTACT_SETTINGS'		=> 'Contact page settings',
	'ACP_CRITICAL_LOGS'			=> 'Log error',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Kustom isian profil',

	'ACP_DATABASE'				=> 'Manajemen database',
	'ACP_DISALLOW'				=> 'Tolak',
	'ACP_DISALLOW_USERNAMES'	=> 'Tolak nama pengguna',

	'ACP_EMAIL_SETTINGS'		=> 'Pengaturan e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Atur ekstensi grup',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extension management',
	'ACP_EXTENSIONS'			=> 'Manage extensions',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Perijinan dasar forum',
	'ACP_FORUM_LOGS'				=> 'Log forum',
	'ACP_FORUM_MANAGEMENT'			=> 'Manajemen forum',
	'ACP_FORUM_MODERATORS'			=> 'Forum moderator',
	'ACP_FORUM_PERMISSIONS'			=> 'Perijinan forum',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Salin perijinan forum',
	'ACP_FORUM_ROLES'				=> 'Peranan forum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Konfigurasi umum',
	'ACP_GENERAL_TASKS'				=> 'Tugas umum',
	'ACP_GLOBAL_MODERATORS'			=> 'Global moderator',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Perijinan global',
	'ACP_GROUPS'					=> 'Grup',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Perijinan forum grup',
	'ACP_GROUPS_MANAGE'				=> 'Pengaturan grup',
	'ACP_GROUPS_MANAGEMENT'			=> 'Manajemen grup',
	'ACP_GROUPS_PERMISSIONS'		=> 'Perijinan grups',
	'ACP_GROUPS_POSITION'			=> 'Manage group positions',

	'ACP_ICONS'					=> 'Ikon topik',
	'ACP_ICONS_SMILIES'			=> 'Ikon/tanda senyuman topik',
	'ACP_INACTIVE_USERS'		=> 'Pengguna nonaktif',
	'ACP_INDEX'					=> 'Indeks ACP',

	'ACP_JABBER_SETTINGS'		=> 'Pengaturan Jabber',

	'ACP_LANGUAGE'				=> 'Manajemen bahasa',
	'ACP_LANGUAGE_PACKS'		=> 'Kemasan bahasa',
	'ACP_LOAD_SETTINGS'			=> 'Pengaturan load',
	'ACP_LOGGING'				=> 'Logging',

	'ACP_MAIN'					=> 'Indeks ACP',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Manage attachments',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Here you can list and delete files attached to posts and private messages.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Atur ekstensi',
	'ACP_MANAGE_FORUMS'			=> 'Pengaturan forum',
	'ACP_MANAGE_RANKS'			=> 'Atur ranking',
	'ACP_MANAGE_REASONS'		=> 'Atur laporan/alasan penolakan',
	'ACP_MANAGE_USERS'			=> 'Pengaturan pengguna',
	'ACP_MASS_EMAIL'			=> 'E-mail massa',
	'ACP_MESSAGES'				=> 'Perpesanan',
	'ACP_MESSAGE_SETTINGS'		=> 'Pengaturan pesan pribadi',
	'ACP_MODULE_MANAGEMENT'		=> 'Manajemen modul',
	'ACP_MOD_LOGS'				=> 'Log moderator',
	'ACP_MOD_ROLES'				=> 'Peranan moderator',

	'ACP_NO_ITEMS'				=> 'Belum ada item.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Lampiran tanpa kepemilikan',

	'ACP_PERMISSIONS'			=> 'Perijinan',
	'ACP_PERMISSION_MASKS'		=> 'Mask perijinan',
	'ACP_PERMISSION_ROLES'		=> 'Peranan perijinan',
	'ACP_PERMISSION_TRACE'		=> 'Jejak perijinan',
	'ACP_PHP_INFO'				=> 'Informasi PHP',
	'ACP_POST_SETTINGS'			=> 'Pengaturan post',
	'ACP_PRUNE_FORUMS'			=> 'Kurangi forum',
	'ACP_PRUNE_USERS'			=> 'Kurangi pengguna',
	'ACP_PRUNING'				=> 'Pengurangan',

	'ACP_QUICK_ACCESS'			=> 'Akses cepat',

	'ACP_RANKS'					=> 'Ranking',
	'ACP_REASONS'				=> 'Laporan/alasan penolakan',
	'ACP_REGISTER_SETTINGS'		=> 'Pengaturan pendaftaran pengguna',

	'ACP_RESTORE'				=> 'Restore',

	'ACP_FEED'					=> 'Menejemen Pengumpan',
	'ACP_FEED_SETTINGS'			=> 'Pengaturan pengumpan',

	'ACP_SEARCH'				=> 'Konfigurasi pencarian',
	'ACP_SEARCH_INDEX'			=> 'Indeks pencarian',
	'ACP_SEARCH_SETTINGS'		=> 'Pengaturan pencarian',

	'ACP_SECURITY_SETTINGS'		=> 'Pengaturan keamanan',
	'ACP_SEND_STATISTICS'		=> 'Kirim informasi statistik',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurasi server',
	'ACP_SERVER_SETTINGS'		=> 'Pengaturan server',
	'ACP_SIGNATURE_SETTINGS'	=> 'Pengaturan tanda tangan',
	'ACP_SMILIES'				=> 'Tanda senyuman',
	'ACP_STYLE_MANAGEMENT'		=> 'Manajemen gaya',
	'ACP_STYLES'				=> 'Gaya',
	'ACP_STYLES_CACHE'			=> 'Purge Cache',
	'ACP_STYLES_INSTALL'		=> 'Install Styles',

	'ACP_SUBMIT_CHANGES'		=> 'Ajukan pengubahan',

	'ACP_TEMPLATES'				=> 'Template',
	'ACP_THEMES'				=> 'Thema',

	'ACP_UPDATE'					=> 'Memperbaharui',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Perijinan forum pengguna',
	'ACP_USERS_LOGS'				=> 'Log pengguna',
	'ACP_USERS_PERMISSIONS'			=> 'Perijinan pengguna',
	'ACP_USER_ATTACH'				=> 'Lampiran',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Umpan balik',
	'ACP_USER_GROUPS'				=> 'Grup',
	'ACP_USER_MANAGEMENT'			=> 'Manajemen pengguna',
	'ACP_USER_OVERVIEW'				=> 'Ikhtisar',
	'ACP_USER_PERM'					=> 'Perijinan',
	'ACP_USER_PREFS'				=> 'Preferensi',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Ranking',
	'ACP_USER_ROLES'				=> 'Peranan pengguna',
	'ACP_USER_SECURITY'				=> 'Keamanan pengguna',
	'ACP_USER_SIG'					=> 'Tanda tangan',
	'ACP_USER_WARNINGS'				=> 'Peringatan',

	'ACP_VC_SETTINGS'					=> 'Pengaturan anti spambot',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Tampilan gambar CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Periksa update',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Lihat perijinan administrasi',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Lihat perijinan moderasi forum',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Lihat perijinan dasar forum',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Lihat perijinan moderasi global',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Lihat perijinan dasar pengguna',

	'ACP_WORDS'					=> 'Sensor kata',

	'ACTION'				=> 'Aksi',
	'ACTIONS'				=> 'Aksi',
	'ACTIVATE'				=> 'Aktif',
	'ADD'					=> 'Tambahkan',
	'ADMIN'					=> 'Administrasi',
	'ADMIN_INDEX'			=> 'Indeks admin',
	'ADMIN_PANEL'			=> 'Papan Pengaturan Administrasi',

	'ADM_LOGOUT'			=> 'Keluar&nbsp;Papan Pengaturan Administrasi',
	'ADM_LOGGED_OUT'		=> 'Berhasil keluar dari Papan Pengaturan Administrasi',

	'BACK'					=> 'Kembali',

	'COLOUR_SWATCH'			=> 'Contoh warna Web-safe',
	'CONFIG_UPDATED'		=> 'Konfigurasi berhasil diperbarui.',
	'CRON_LOCK_ERROR'		=> 'Could not obtain cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Could not find cron task “%s”.',
	'CRON_NO_TASK'			=> 'No cron tasks need to be run right now.',
	'CRON_NO_TASKS'			=> 'No cron tasks could be found.',

	'DEACTIVATE'				=> 'Nonaktifkan',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Path yang dimasukkan “%s” tidak ada.',
	'DIRECTORY_NOT_DIR'			=> 'Path yang dimasukkan “%s” bukan merupakan suatu direktori.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Path yang dimasukkan “%s” tidak bisa ditulis.',
	'DISABLE'					=> 'Tidak digunakan',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download sebagai',
	'DOWNLOAD_STORE'			=> 'Download atau simpan file',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Anda bisa secara langsung mendownload file tersebut ataupun menyimpannya di folder <samp>store/</samp> anda.',
	'DOWNLOADS'					=> 'Download',

	'EDIT'					=> 'Ubah',
	'ENABLE'				=> 'Gunakan',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Store',

	'GENERAL_OPTIONS'		=> 'Pilihan general',
	'GENERAL_SETTINGS'		=> 'Pengaturan general',
	'GLOBAL_MASK'			=> 'Mask perijinan global',

	'INSTALL'				=> 'Instal',
	'IP'					=> 'IP pengguna',
	'IP_HOSTNAME'			=> 'Almat IP atau nama host',

	'LOAD_NOTIFICATIONS'			=> 'Display Notifications',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Display the notifications list on every page (typically in the header).',
	'LOGGED_IN_AS'			=> 'Anda dimasukkan sebagai:',
	'LOGIN_ADMIN'			=> 'Untuk mengadministrasi halaman ini anda harus menjadi pengguna yang terotentifikasi.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Silahkan otentifikasikan ulang diri anda untuk mengadministrasi halaman ini.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Anda berhasil diotentifikasi dan sekarang akan dialihkan ke Papan Pengaturan Administrasi.',
	'LOOK_UP_FORUM'			=> 'Pilih sebuah forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Anda bisa memilih lebih dari satu forum.',

	'MANAGE'				=> 'Atur',
	'MENU_TOGGLE'			=> 'Sembunyikan atau tampilkan menu samping',
	'MORE'					=> 'Selengkapnya',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Informasi lebih lanjut »',
	'MOVE_DOWN'				=> 'Naikkan',
	'MOVE_UP'				=> 'Turunkan',

	'NOTIFY'				=> 'Pemberitahuan',
	'NO_ADMIN'				=> 'Anda tidak memiliki otorisasi untuk mengatur halaman ini.',
	'NO_EMAILS_DEFINED'		=> 'Tidak ada alamat e-mail ditemukan.',
	'NO_FILES_TO_DELETE'	=> 'Attachments you selected for deletion do not exist.',
	'NO_PASSWORD_SUPPLIED'	=> 'Anda harus memasukkan kata sandi anda untuk bisa mengakses Papan Pengaturan Administrasi.',

	'OFF'					=> 'Hidup',
	'ON'					=> 'Mati',

	'PARSE_BBCODE'						=> 'Uraikan BBCode',
	'PARSE_SMILIES'						=> 'Uraikan tanda senyuman',
	'PARSE_URLS'						=> 'Uraikan link',
	'PERMISSIONS_TRANSFERRED'			=> 'Perijinan ditransfer',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Sekarang anda memiliki perijinan dari %1$s. Anda bisa menelusuri halaman dengan perijinan pengguna tersebut, tetapi tidak bisa mengakses papan pengaturan administrator apabila perijinan admin tidak ditransfer. Anda dapat <a href="%2$s"><strong>kembali ke perijinan anda</strong></a> kapan saja.',
	'PROCEED_TO_ACP'					=> '%sMengalihkan ke Papan Pengaturan Administrator%s',

	'REMIND'							=> 'Mengingatkan',
	'RESYNC'							=> 'Sinkronisasi ulang',

	'RUNNING_TASK'			=> 'Running task: %s.',
	'SELECT_ANONYMOUS'		=> 'Pilih pengguna anonim',
	'SELECT_OPTION'			=> 'Gunakan pilihan',

	'SETTING_TOO_LOW'		=> 'Nilai yang dimasukkan untuk pengaturan “%1$s” terlalu rendah. Nilai minimalnya adalah %2$d.',
	'SETTING_TOO_BIG'		=> 'Nilai yang dimasukkan untuk pengaturan “%1$s” terlalu besar. Nilai maksimal yang diijinkan adalah %2$d.',
	'SETTING_TOO_LONG'		=> 'Nilai yang dimasukkan untuk pengaturan “%1$s” terlalu panjang. Panjang maksimal yang diijinkan adalah %2$d.',
	'SETTING_TOO_SHORT'		=> 'Nilai yang dimasukkan untuk pengaturan “%1$s” is not long enough. Panjang minimal yang diijinkan adalah %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Tampilkan semua operasi',

	'TASKS_NOT_READY'			=> 'Not ready tasks:',
	'TASKS_READY'			=> 'Ready tasks:',
	'TOTAL_SIZE'			=> 'Total size',

	'UCP'					=> 'Papan Pengaturan Pengguna',
	'USERNAMES_EXPLAIN'		=> 'Tempatkan setiap nama pengguna di baris baru.',
	'USER_CONTROL_PANEL'	=> 'Papan Pengaturan Pengguna',

	'WARNING'				=> 'Peringatan',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Halaman ini menampilkan informasi versi dari PHP yang diinstal di server. Halaman ini juga menampilkan modul-modul yang dimuat, variabel-variabel yang tersedia dan pengaturan defaultnya. Informasi ini mungkin berguna untuk mendiagnosa permasalahan. Mohon dicatat bahwa beberapa perusahaan hosting akan membatasi informasi apa yang akan ditampilkan di sini demi alasan keamanan mereka. Anda juga disarankan agar tidak memberikan informasi apapun dari halaman ini kecuali <a href="http://www.phpbb.com/about/team/">official team members</a> di support forum.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informasi mengenai konfigurasi PHP anda tidak dapat ditentukan. Phpinfo() tidak dapat digunakan untuk alasan keamanan.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tindakan yang dibuat oleh administrator halaman ditampilkan di sini. Anda depat mengurutkan sesuai dengan nama pengguna, tanggal, alamat IP atau tindakan. Jika anda memiliki perijinan yang dibutuhkan, anda juga dapat membersihkan operasi individu atau keseluruhan dari log ini.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tindakan yang dibuat oleh halaman ini ditampilkan di sini. Log ini menyediakan informasi yang bisa anda gunakan untuk menyelesaikan masalah yang spesifik, sebagai contoh e-mail yang tidak terkirim. Anda depat mengurutkan sesuai dengan nama pengguna, tanggal, alamat IP atau jenis tindakan. Jika anda memiliki perijinan yang dibutuhkan, anda juga dapat membersihkan operasi perorangan atau keseluruhan dari log ini.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tindakan yang diselesaikan di halaman ditampilkan di sini, topik dan post sebagai tindakan yang dibawa pengguna oleh moderator dan termasuk larangan. Anda dapat mengurutkan sesuai dengan nama pengguna, tanggal, alamat IP atau jenis tindakan. Jika anda memiliki perijinan yang dibutuhkan, anda juga dapat membersihkan operasi perorangan atau keseluruhan dari log ini.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Tindakan yang dibuat oleh pengguna ditampilkan di sini (laporan, peringatan dan catatan pengguna).',
	'ALL_ENTRIES'				=> 'Semua masukan',

	'DISPLAY_LOG'	=> 'Tampilkan masukan sebelumnya',

	'NO_ENTRIES'	=> 'Tidak ada log masukan untuk periode ini.',

	'SORT_IP'		=> 'Alamat IP',
	'SORT_DATE'		=> 'Tanggal',
	'SORT_ACTION'	=> 'Tindakan log',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Terima kasih telah menggunakan phpBB sebagai sebuah solusi papan. Halaman ini akan memberikan anda gambaran singkat mengenai berbagai statistik dari halaman. Tautan yang berada di sebelah kiri dari halaman ini memberikan kontrol untuk setiap aspek halaman. Setiap halaman memiliki instruksinya masing-masing mengenai cara penggunaan.',
	'ADMIN_LOG'					=> 'Log administrator',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Berikut ini adalah penjelasan untuk lima tindakan terakhir yang dilakukan oleh administrator halaman. Salinan lengkap dari log tersebut dapat dilihat pada item menu atau dari tautan berikut ini.',
	'AVATAR_DIR_SIZE'			=> 'Ukuran direktori avatar',

	'BOARD_STARTED'		=> 'Dimulai pada',
	'BOARD_VERSION'		=> 'Versi',

	'DATABASE_SERVER_INFO'	=> 'Server database',
	'DATABASE_SIZE'			=> 'Ukuran database',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Function overloading is improperly configured',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> must be set to either 0 or 4. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding is improperly configured',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> must be set to 0. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input character conversion is improperly configured',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> must be set to <samp>pass</samp>. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion is improperly configured',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> must be set to <samp>pass</samp>. You can check the current value on the <samp>PHP information</samp> page.',

	'FILES_PER_DAY'		=> 'Lampiran per hari',
	'FORUM_STATS'		=> 'Statistik',

	'GZIP_COMPRESSION'	=> 'Kompresi GZip',

	'NO_SEARCH_INDEX'	=> 'The selected search backend does not have a search index.<br />Please create the index for “%1$s” in the %2$ssearch index%3$s section.',
	'NOT_AVAILABLE'		=> 'Tidak tersedia',
	'NUMBER_FILES'		=> 'Jumlah lampiran',
	'NUMBER_POSTS'		=> 'Jumlah post',
	'NUMBER_TOPICS'		=> 'Jumlah topik',
	'NUMBER_USERS'		=> 'Jumlah pengguna',
	'NUMBER_ORPHAN'		=> 'Lampiran tanpa kepemilikan',

	'PHP_VERSION_OLD'	=> 'Versi PHP di server ini tidak mendukung versi terbaru phpBB. %sDetails%s',

	'POSTS_PER_DAY'		=> 'Post per hari',

	'PURGE_CACHE'			=> 'Bersihkan tembolok',
	'PURGE_CACHE_CONFIRM'	=> 'Apakah anda yakin ingin membersihkan tembolok?',
	'PURGE_CACHE_EXPLAIN'	=> 'Bersihkan semua tembolok yang berhubungan, juga termasuk semua file template ataupun query.',
	'PURGE_CACHE_SUCCESS'	=> 'Cache successfully purged.',

	'PURGE_SESSIONS'			=> 'Bersihkan semua sesi',
	'PURGE_SESSIONS_CONFIRM'	=> 'Apakah anda yakin ingin membersihkan semua sesi? Tindakan ini akan mengeluarkan semua pengguna yang sudah masuk.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Bersihkan semua sesi. Tindakan ini akan mengeluarkan semua pengguna yang sudah masuk dengan memotong semua tabel.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessions successfully purged.',

	'RESET_DATE'					=> 'Reset tanggal awal halaman',
	'RESET_DATE_CONFIRM'			=> 'Apakah anda yakin ingin mereset tanggal awal halaman?',
	'RESET_DATE_SUCCESS'				=> 'Board’s start date reset',
	'RESET_ONLINE'					=> 'Reset pengguna terbanyak yang pernah online',
	'RESET_ONLINE_CONFIRM'			=> 'Apakah anda yakin ingin mereset penghitungan pengguna terbanyak yang pernah online?',
	'RESET_ONLINE_SUCCESS'				=> 'Most users ever online reset',
	'RESYNC_POSTCOUNTS'				=> 'Sinkronisasi ulang penghitungan post',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Hanya post yang ada yang akan diambil untuk dipertimbangkan. Pengurangan post tidak akan dihitung.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Apakah anda yakin ingin mensinkronisasi ulang penghitungan post?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Resynchronised post counts',
	'RESYNC_POST_MARKING'			=> 'Sinkronisasi ulang topik yang ditandai',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Apakah anda yakin ingin mensinkronisasi ulang topik yang ditandai?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Yang tidak ditandai pertama sekali dan topik yang ditandai yang terlihat memiliki aktifitas selama enam bulan belakangan.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Resynchronised dotted topics',
	'RESYNC_STATS'					=> 'Sinkronisasi ulang statistik',
	'RESYNC_STATS_CONFIRM'			=> 'Apakah anda yakin ingin mensinkronisasi ulang statistik?',
	'RESYNC_STATS_EXPLAIN'			=> 'Penghitungan ulang jumlah total post, topik, pengguna dan file.',
	'RESYNC_STATS_SUCCESS'			=> 'Resynchronised statistics',
	'RUN'							=> 'Jalankan sekarang',

	'STATISTIC'					=> 'Statistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Sinkronisasi ulang atau reset statistik',

	'TIMEZONE_INVALID'	=> 'The timezone you selected is invalid.',
	'TIMEZONE_SELECTED'	=> '(currently selected)',
	'TOPICS_PER_DAY'	=> 'Topik per hari',

	'UPLOAD_DIR_SIZE'	=> 'Ukuran lampiran yang dipost',
	'USERS_PER_DAY'		=> 'Pengguna per hari',

	'VALUE'						=> 'Nilai',
	'VERSIONCHECK_FAIL'			=> 'Gagal memperoleh informasi versi terbaru.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Cek ulang versi',
	'VIEW_ADMIN_LOG'			=> 'Lihat log administrator',
	'VIEW_INACTIVE_USERS'		=> 'Lihat pengguna nonaktif',

	'WELCOME_PHPBB'			=> 'Selamat datang di phpBB',
	'WRITABLE_CONFIG'		=> 'File konfigurasi anda (config.php) bisa ditulisi sekarang ini. Kami sangat menyarankan untuk mengubah perijinan file tersebut menjadi 640 atau paling tidak menjadi 644 (sebagai contoh: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Tanggal nonaktif',
	'INACTIVE_REASON'				=> 'Alasan',
	'INACTIVE_REASON_MANUAL'		=> 'Account dinonaktifkan oleh administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Keterngan profil diubah',
	'INACTIVE_REASON_REGISTER'		=> 'Account yang baru saja terdaftar',
	'INACTIVE_REASON_REMIND'		=> 'Paksa pengaktifan ulang account',
	'INACTIVE_REASON_UNKNOWN'		=> 'Tidak diketahui',
	'INACTIVE_USERS'				=> 'Pengguna-pengguna nonaktif',
	'INACTIVE_USERS_EXPLAIN'		=> 'Berikut ini adalah daftar pengguna-pengguna yang telah mendaftar dengan account yang belum aktif. Anda dapat mengaktifkan, menghapus ataupun mengingatkan (dengan mengrimkan e-mail) semua pengguna ini jika anda inginkan.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Berikut ini adalah daftar dari 10 pengguna dengan akun yang belum aktif. Daftar lengkap tersedia dari menu yang sesuai atau dengan link berikut ini dimana anda dapat mengaktifkan, menghapus ataupun mengingatkan (dengan mengrimkan e-mail) semua pengguna ini jika anda inginkan.',

	'NO_INACTIVE_USERS'	=> 'Tidak ada pengguna yang nonaktif',

	'SORT_INACTIVE'		=> 'Tanggal nonaktif',
	'SORT_LAST_VISIT'	=> 'Kunjungan terakhir',
	'SORT_REASON'		=> 'Alasan',
	'SORT_REG_DATE'		=> 'Tanggal pendaftaran',
	'SORT_LAST_REMINDER'=> 'Yang terakhir diingatkan',
	'SORT_REMINDER'		=> 'Pengingat terkirim',

	'USER_IS_INACTIVE'		=> 'Pengguna ini nonaktif',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Mohon kirim informasi tentang server dan konfigurasi halaman anda ke phpBB untuk analisis statistik. Semua informasi yang bisa mengenali anda ataupun situs anda sudah dihapus - keseluruhan data adalah <strong>anonim</strong>. Kami berdasarkan keputusan tentang versi phpBB yang akan datang untuk informasi ini. Statistik tersedia secara publik. Kami juga membagi data ini dengan proyek PHP, bahasa pemrograman phpBB yang digunakan.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Dengan menggunakan tombol di bawah ini anda bisa melihat semua variabel yang akan dikirimkan.',
	'DONT_SEND_STATISTICS'		=> 'Kembali ke ACP jika anda tidak ingin mengirim informasi statistik ke phpBB.',
	'GO_ACP_MAIN'				=> 'Pergi ke halaman awal ACP',
	'HIDE_STATISTICS'			=> 'Sembunyikan keterangan',
	'SEND_STATISTICS'			=> 'Kirim informasi statistik',
	'SHOW_STATISTICS'			=> 'Tampilkan keterangan',
	'THANKS_SEND_STATISTICS'	=> 'Terima kasih telah mengajukan informasi anda.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Menambah atau mengubah users’ perijinan pengguna</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Menambah atau mengubah groups’ perijinan pengguna</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Menambah atau mengubah users’ perijinan global moderator</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Menambah atau mengubah groups’ perijinan global moderator</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Menambah atau mengubah users’ perijinan administrator/strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Menambah atau mengubah groups’ perijinan administrator</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Menambah atau mengubah Administrator</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Menambah atau mengubah Global Moderators</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Menambah atau mengubah users’ forum access</strong> dari %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Menambah atau mengubah users’ forum moderator access</strong> dari %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Menambah atau mengubah groups’ akses forum</strong> dari %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Menambah atau mengubah groups’ akses forum moderator</strong> dari %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Menambah atau mengubah Moderators</strong> dari %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Menambah atau mengubah perijinan forum</strong> dari %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Menyingkirkan Administrator</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Menyingkirkan Global Moderator</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Menyingkirkan Moderator</strong> dari %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Menyingkirkan perijinan forum Pengguna/Grup</strong> dari %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Perijinan ditransfer dari</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Perijinan pribadi digunakan kembali setelah menggunakan perijinan dari</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Gagal mencoba masuk ke administrasi</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Berhasil masuk ke administrasi</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Menyingkirkan lampiran pengguna</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Menambah atau mengubah ekstensi lampiran</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Menyingkirkan ekstensi lampiran</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Memperbaharui ekstensi lampiran</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Menambah ekstensi grup</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Mengubah ekstensi grup</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Menyingkirkan ekstensi grup</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>File tanpa kepemilikan diupload ke post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>File tanpa kepemilikan dihapus</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Mengeluarkan pengguna dari daftar larangan</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Mengeluarkan IP dari daftar larangan</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Mengeluarkan e-mail dari daftar larangan</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Melarang user</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Melarang IP</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Melarang e-mail</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Menghapus larangan pengguna</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Menghapus larangan IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Menghapus larangan e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Menambahkan BBCode baru</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Mengubah BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Menghapus BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Menambahkan bot baru</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Menghapus bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Memperbaharui bot yang sudah ada</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Membersihkan log admin</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Membersihkan log error</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Membersihkan log moderator</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Membersihkan log pengguna</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Membersihkan log pengguna</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Mengubah pengaturan lampiran</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Mengubah pengaturan otentifikasi</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Mengubah pengaturan avatar</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Mengubah pengaturan cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Mengubah pengaturan e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Mengubah pengaturan fitur-fitur halaman</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Mengubah pengaturan load</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Mengubah pengaturan pesan pribadi</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Mengubah pengaturan post</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Mengubah pengaturan pendaftaran</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Mengubah pengaturan sindikasi pengumpan</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Mengubah pengaturan pencarian</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Mengubah pengaturan keamanan</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Mengubah pengaturan server</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Mengubah pengaturan halaman</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Mengubah pengaturan tanda tangan</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Mengubah pengaturan anti spambot</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Menyetujui topik</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Menggeser topik</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Menghapus pesan</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Menghapus topik bayangan</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Menghapus topik</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Menyalin topik</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Mengunci topik</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mengunci topik</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Menggabungkan post</strong> ke topik<br />» %s',
	'LOG_MOVE'					=> '<strong>Menggeser topik</strong><br />» dari %1$s to %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Moved topic</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Laporan PM yang ditutup</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Laporan PM yang dihapus</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Menyetujui topik</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Tidak menyetujui post “%1$s” dengan alasan sebagai berikut</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Mengubah post “%1$s” yang ditulis oleh</strong><br />» %2$s',
	'LOG_POST_RESTORED'			=> '<strong>Restored post</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Menutup laporan</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Menghapus laporan</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Restored topic “%1$s” written by</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Soft deleted post “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Soft deleted topic “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>memindahkan post yang dipecah</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Memecah post</strong><br />» dari %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Menyetujui topik</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Restored topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tidak menyetujui topik “%1$s” dengan alasan sebagai berikut</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Melakukan sinkronisasi ulang penghitung topik</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Merubah tipe topik</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Membuka topik yang terkunci</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Membuka post yang terkunci/strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Menambahkan nama pengguna yang ditolak</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Menghapus nama pengguna yang pengguna yang ditolak</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Backup database</strong>',
	'LOG_DB_DELETE'			=> '<strong>Menghapus backup database</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Merestore backup database</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Mengeluarkan IP/nama host dari daftar download</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Menambahkan IP/nama host ke daftar download</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Menyingkirkan IP/nama host dari daftar download</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Error dari Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Error dari e-mail</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Menciptakan forum baru</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Menyalin perijinan forum</strong> dari %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Menghapus forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Menghapus forum dan subforumnya</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Menghapus forum dan memindahkan subforumnya</strong> ke %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Menghapus forum dan memindahkan postnya </strong> ke %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Menghapus forum dan subforumnya, post dipindahkan</strong> ke %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Menghapus forum, meindahkan post</strong> ke %1$s <strong>dan subforumnya</strong> ke %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Menghapus forum dan postnya</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Menghapus forum dan postnya</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Menghapus forum dan postnya, memindahkan subforum</strong> ke %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Mengubah keterangan forum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Memindahkan forum</strong> %1$s <strong>kebawah</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Memindahkan forum</strong> %1$s <strong>jkeatas</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Sinkronisasi ulang forum</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Sebuah permasalah umum terjadi</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Menciptakan grup pengguna baru</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Menjadikan default grup “%1$s” untuk anggota</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Menghapus grup pengguna</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Menurunkan pimpinan di grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Mempromosikan anggota menjadi pemimpin untuk grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Menyingkirkan anggota dari grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Memperbaharui keterangan grup pengguna</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Menambahkan pimpinan baru ke grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Menambahkan anggota baru ke grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Menyetujui pengguna di grup pengguna</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Pengguna memohon untuk bergabung dengan grup “%1$s” dan membutuhkan persetujuan</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error pada saat pembuatan gambar</strong><br />» Error pada %1$s di baris %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Mengaktifkan pengguna yang belum aktif</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Menghapus pengguna yang belum aktif</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Mengingatkan pengguna dengan mengirim e-mails kepengguna yang belu aktif</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Mengkonversikan phpBB dari %1$s ke %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Menginstal phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Gagal memeriksa sesi IP/browser/X_FORWARDED_FOR</strong><br />» IP pengguna “<em>%1$s</em>” memeriksa dengan sesi IP “<em>%2$s</em>” string browser pengguna “<em>%3$s</em>” memeriksa string sesi browser “<em>%4$s</em>” dan string pengguna X_FORWARDED_FOR “<em>%5$s</em>” memeriksa string sesi X_FORWARDED_FOR “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Mengubah account Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Mengubah kata sandi Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Mendaftarkan akun Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Mengubah pengaturan Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Menghapus bahasa</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Menginstal bahasa</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Memperbaharui keterangan file bahasa</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Mengganti file bahasa</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Mengajukan file bahasa dan menempatkannya di folder penyimpanan </strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Mengirimkan e-mail massa</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Mengubah penulis di topik “%1$s”</strong><br />» dari %2$s menjadi %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Menonaktifkan modul</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Mengaktifkan modul</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Memindahkan module ke bawah </strong><br />» %1$s dibawah %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Memindahkan module ke atas</strong><br />» %1$s diatas %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Menyingkirkan module</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Menambahkan modul</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Mengubah modul</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Menambah peranan admin</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Mengubah peranan admin</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Menyingkirkan peranan admin</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Menambahkan peranan forum</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Mengubah peranan forum</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Menyingkirkan peranan forum</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Menambahkan peranan moderator</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Mengubah peranan moderator</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Menyingkirkan peranan moderator</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Menambahkan peranan pengguna</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Mengubah peranan pengguna</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Menyingkirkan peranan pengguna</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Unable to open %1$s for tidying, check permissions.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Mengaktifkan isian profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Menambahkan isian profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Menonaktifkan isian profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Mengubah isian profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Menyingkirkan isian profil</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Mengurangi forum</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Mengurangi forum secara otomatis</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Auto-pruned shadow topics</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Menonaktifkan pengguna</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Mengurangi pengguna dan menghapus post</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Mengurangi pengguna dan mempertahankan post</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Cache yang dibersihkan</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sesi yang dibersihkan</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Menambahkan ranking baru</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Menyingkirkan ranking</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Memperbaharui ranking</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Menambah laporan/alasan penolakan</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Menyingkirkan laporan/alasan penolakan</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Memperbaharui laporan/alasan penolakan</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Gagal memberlakukan referer</strong><br />»Referer “<em>%1$s</em>”. Permintaan ditolak dan menghentikan sesi.',
	'LOG_RESET_DATE'			=> '<strong>Melakukan reset tanggal awal halaman</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Melakukan rest pengguna yang pernah online</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>File statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Melakukan sinkronisasi ulang penghitung post</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Melakukan sinkronisasi ulang topik yang ditandai</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Melakukan sinkronisasi ulang post, topik dan statistik pengguna</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Membuat indeks untuk pencarian untuk</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Menyingkirkan indeks pencarian untuk</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Menambahkan gaya baru</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Menghapus gaya</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Mengubah gaya</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Mengekspor gaya</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Menambahkan template baru ke database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Menambahkan template baru ke filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Menghapus versi cache dari file template di <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Menghapus template </strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Mengubah template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Mengubah keterangan template </strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Mengekspor template</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Melakukan refresh template</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Menambah thema baru ke database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Menambah thema baru ke filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Menghapus thema</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Mengubah keterangan thema</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Mengubah thema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Mengubah thema <em>%1$s</em></strong><br />» Memodifikasi file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Mengekspor thema</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Melakukan refresh thema</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Memperbaharui database dari versi %1$s ke versi %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Memperbaharui phpBB dari versi %1$s ke versi %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Mengaktifkan pengguna</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Melarang pengguna melalui manajemen pengguna</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Melarang IP melalui manajemen pengguna</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Melarang e-mail melalui manajemen pengguna</strong> dengan alasan “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Menghapus pengguna</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Menyingkirkan semua lampiran yang dibuat oleh pengguna</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Menyingkirkan avatar pengguna</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Mengosongkan kotak keluar pengguna</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Menyingkirkan semua post yang dibuat pengguna</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Menyingkirkan tanda tangan pengguna</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Menonaktifkan pengguna</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Memindahkan post pengguna</strong><br />» yang dibuat oleh “%1$s” ke forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Melakukan pengaktifan ulang account pengguna secara paksa</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Menyingkirkan flag baru terdaftar dari pengguna</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Pengguna “%1$s” mengubah alamat email</strong><br />» dari “%2$s” menjadi “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Mengubah nama pengguna</strong><br />» dari “%1$s” menjadi “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Membarui keterangan pengguna</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Mengaktifkan account pengguna</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Menyingkirkan avatar pengguna</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Menyingkirkan tanda tangan pengguna</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Menambahkan umpan balik pengguna</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Menambahkan masukan:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Menonaktifkan account pengguna</strong>',
	'LOG_USER_LOCK'				=> '<strong>Pengguna mengunci topiknya sendiri</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Memindahkan semua post ke forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Memaksakan pengaktifan kembali account pengguna</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Pengguna membuka topiknya sendiri</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Menambahkan peringatan pengguna</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Peringatan berikut telah dikeluarkan ke pengguna ini</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Pengguna mengubah default grupnya</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Pengguna menurunkan pangkatnya sebagi pimpinan dari grup pengguna</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Pengguna bergabung dengan grup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Pengguna bergabung dengan grup dan perlu disetujui</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Pengguna berhenti dari keanggotaan dari grup</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Menghapus peringatan pengguna</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Menghapus %2$s peringatan pengguna</strong><br />» %1$s',
		2 => '<strong>Menghapus %2$s peringatan pengguna</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Menghapus semua peringatan pengguna</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Manambahkan sensor kata</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Menghapus sensor kata</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Mengubah sensor kata</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Extension enabled</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Extension disabled</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Extension’s data deleted</strong><br />» %s',
));

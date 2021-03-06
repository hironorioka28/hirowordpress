<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
if ($_SERVER['HTTP_HOST'] === 'localhost:8888') {
    /** WordPress のためのデータベース名 */
    define('DB_NAME', 'hirowordpress');
    /** MySQL データベースのユーザー名 */
    define('DB_USER', 'hirowordpress');
    /** MySQL データベースのパスワード */
    define('DB_PASSWORD', 'hirowordpress');
    /** MySQL のホスト名 */
    define('DB_HOST', 'localhost');
} else {
    /** WordPress のためのデータベース名 */
    define('DB_NAME', $_ENV['DB_NAME']);
    /** MySQL データベースのユーザー名 */
    define('DB_USER', $_ENV['DB_USER']);
    /** MySQL データベースのパスワード */
    define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
    /** MySQL のホスト名 */
    define('DB_HOST', $_ENV['DB_HOST']);
}




/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
if ($_SERVER['HTTP_HOST'] === 'localhost:8888') {
    define('AUTH_KEY',         '&_,+-YR3psmZL0.OPq2:F%Y$Fz1E3=FL{}>d^BW@$nE~;U,SqROG1a6CG@|P+zhI');
    define('SECURE_AUTH_KEY',  'hR!)#iG)3JB;hS`Z&Tq-HHz?8 Ys$6{+]mfOhua-Wd90)hlyGp-8RRVYge-ojxG>');
    define('LOGGED_IN_KEY',    'Gf^`oMlQMZ1>Cfw|rg9wQgzDuWcqaX}AnD-p~-s!ilh{A6,_y=nMU6o[Ua9IBh+e');
    define('NONCE_KEY',        '?;{p=3+<^Wv<3|o4/4%u|T#n?@-P[1o:E2|($Qa+3k_9|II-80KHe${k%Dp3m@k^');
    define('AUTH_SALT',        '@%<PUy2z.6@q0U7g]UI-9tTM.Ia_CdP|hJkD!.]p#gReP].wU_=x<wZkPi!J&$a7');
    define('SECURE_AUTH_SALT', '6@<E|*H>D$Vsi}3u6 R?%`X2I}uH(ej5z5nZA#:0Ksx6;^?hN9]-0E=7}DoOje;~');
    define('LOGGED_IN_SALT',   'IS49-!;=)4f=z`]sP-~GDWJm@Tu<Zgi{+C@(3!+ce1?9jGQ@zaAnFvNa;Ye.~7<K');
    define('NONCE_SALT',       '~&a|)z]d=t68K72>?|1tHwS{9 2,`f|E~ct7ke/e*~m+$L5w5fSm^uVq2t;B<stm');
} else {
    define('AUTH_KEY',         $_ENV['AUTH_KEY']);
    define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
    define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
    define('NONCE_KEY',        $_ENV['NONCE_KEY']);
    define('AUTH_SALT',        $_ENV['AUTH_SALT']);
    define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
    define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
    define('NONCE_SALT',       $_ENV['NONCE_SALT']);
}

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

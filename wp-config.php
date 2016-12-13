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
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_7817c31afee2291');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b9bee5457a9594');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '931d57d4');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');

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
define('AUTH_KEY',         '}>HJDXyz[#*X,*`,RP?;~@IzWJ!_+-3N$|[S#`nnR^F;O w}3ir<1ydOyt^<<%|-');
define('SECURE_AUTH_KEY',  '+ZvBSz4+!Pu$(Az .,74_+fXInPh,oR[W3AP=F:|{gwR%~C4-qPvDBqhl<Bp*|+8');
define('LOGGED_IN_KEY',    'd-jQcxmt](ns=Hw=Tg*_Q8vsrBdLa/D2D|^UP|RzNNW~FQu1B7lD2|_-2M/V7)~n');
define('NONCE_KEY',        '16>gy2Or)3mNEmfsY_:|zC|Utj+%J-D#1q>~r-{IjsmI6+k)7PF]qcCd~,|M1|qn');
define('AUTH_SALT',        '-0poKI^!?4 iuA`eAT?=83?O@V~06v&0ZFQ6{tCwlz-}Hm88F3X[{Z{^Iy-zqr{,');
define('SECURE_AUTH_SALT', '*-/==I|8.YPJz)6>KB+r4dER`l$l$2$-Tlj|A~YnucWPy@M8=v$RI?O6RqTRy4;P');
define('LOGGED_IN_SALT',   'SQ LPt^xFw^{R:>-d(]0e_I}f&qRnawl-KoiTVk+lzk*+AtJoSocC6s|^ubqi:e}');
define('NONCE_SALT',       'hXS{MKIH:G6;T3:8wf)z|[?W+|3)@[GPU0rh=VaKpV;n-AUC-ebiZU1be31NRZ8h');

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

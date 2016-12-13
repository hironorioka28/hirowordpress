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
define('AUTH_KEY',         '( P5Y?Z8?CJeC6b*c;w/s(suyRSAJcZ-tiuypZOh&7SLMwJ)gsH0Cw*U,%4xWB!_');
define('SECURE_AUTH_KEY',  'IcRx6Ia8+O`|!|:(5P`UXk@x0kys&A?c/!=Ml+#f}8@<&adRg_PcpwY!c8;qwwXs');
define('LOGGED_IN_KEY',    'Z`/ )P!5bimfb|9L >/f7K.Il2zih|H*2HzS)[!|)BRl-6PAs[)Zz&NojfrL@CKG');
define('NONCE_KEY',        '$qw#Y#FfWR(-&A:2I]BDg|ISDP|lB+loyR+yxyV$o93_AcDYD8t`qlU3kLzxC^43');
define('AUTH_SALT',        'eF7za(hu_(Zb:pil.&_,4qbA5R~Ha]2T/]+u]|@xb@JJorTLDM#7-oT>hAEMeGL/');
define('SECURE_AUTH_SALT', '.w7!z6) /uUUBAf-2K|+X|#lCd(pDN>Vb7U&X(Tcxp:}8ip+u%sQ?[WUbNyK|stW');
define('LOGGED_IN_SALT',   'S7%uo_bjAEY8jfzzR=UTzELg-BUmD%9q2!(.^@odK5TmCU3j*U}f=Xnxl|Jj3yTG');
define('NONCE_SALT',       '+[}P5i-<+8e}taH~X{x.z#j`GjA_;eB];j-/Y;7<qD<&EOszf}#|Hd^5x)>[b[t,');

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

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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_techis' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NK9gULIj0$d5%Nq9H>*G(AC$@;W!FVK8NE[!C@;}X0bhZIFsN:xN6L)nnc0n4F_l' );
define( 'SECURE_AUTH_KEY',  '?rR{<7K=cxLM*yf[`q}Y}hQb+Ar{oAtar4r<0L&99F=wDVX6vL>nT645^x2H):,o' );
define( 'LOGGED_IN_KEY',    'w !/kYgorXGN+j:eT*>)WOl;47VcA}7hy8q[0M7VE)yY!*nku@{ucgy#=AfmS@r0' );
define( 'NONCE_KEY',        '6vkZFG&L,bLgFsJqh6LipGR$S;P6NJ%IZiqw~P VsD~)#q$`QK4_jUF#lc!DL !5' );
define( 'AUTH_SALT',        'O{1*:]-sUuYQF0}p9qqCyecYm5yNG.QZfp~}t2g^8Kvpsk8[G[}N-T`4_^fvpDmb' );
define( 'SECURE_AUTH_SALT', 'vyim<y0h[H>V,58We7U/MeqQ,v;?%/g=(n-[tm[w-9ew}L%Vq@LS!o&1vB}^Dd?S' );
define( 'LOGGED_IN_SALT',   '&L@U?%]B{!y-rg[&O-(IcVp8W5a>&?DC(%.KI6`|L4U=&[n`XR)G2zG7U8(R>>4N' );
define( 'NONCE_SALT',       'XN3XEXOXu>qO6++V~[Va4qtq+N-ASyJ}^23`Pi8Wld{F=61#po2um`<O-~(rc0L(' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'techis_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

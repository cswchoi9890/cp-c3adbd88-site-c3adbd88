<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         '36yrqynahviomndaqk6b8uz9gdfa9zpqx7cciy3ec5uuh5xfaku5n40radtsft3v' );
define( 'SECURE_AUTH_KEY',  '6dxopcsd2cb5w80n5yn5smcfjzjd01cqp5en8jdjbzxfdy0r4tbmhzexok2q9r2q' );
define( 'LOGGED_IN_KEY',    'rhaqqkhg1otaetxdttwi5k0uexxmmaqksp3in233sbylewwsdy28v6wno7dckd8r' );
define( 'NONCE_KEY',        'ry2lt2ubgoowqdktlve0hvijndfsuog8p5gjmc9usy307kzjr51azygib6fhrj2p' );
define( 'AUTH_SALT',        'tpt4ex0u3wmn6fzp4cg7b19pf9sbgg2y61jx8i97hfkk87mwnmvka46i2ofe24g3' );
define( 'SECURE_AUTH_SALT', 'y2tcrnjn1n4hgh21foafkyy56awubt6r73aj6ro5ahnbd436gqyc8far6568x2ma' );
define( 'LOGGED_IN_SALT',   '3pr5xsqooobsoxnm7qebeqyr1iwvhaky7cnmgjskj1uxwpis688elicukc2besnh' );
define( 'NONCE_SALT',       'el15at0ggyv8a65zw1l85ct97h2319cy54koy4poyenblhdbnjp6oq6tgks89y1a' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-c3adbd88-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-c3adbd88-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';

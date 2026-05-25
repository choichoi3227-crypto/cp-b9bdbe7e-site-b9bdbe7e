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
define( 'AUTH_KEY',         'uid8zh367woao6y7yiwtdcf6dwt0i3sx4c11mz18qz3zu6cgh9ecp6qxnc9s45zl' );
define( 'SECURE_AUTH_KEY',  '888kys9zi3uug3o24ddnm3vkov14lstafy2seehmqqw536u1djln1eczmtrf340i' );
define( 'LOGGED_IN_KEY',    'xcdfdat1vt9sylv7x59odrs4cgjjowgo5lgg50mfjlka0ld1wsy288zw0vyva1bo' );
define( 'NONCE_KEY',        'nzwyglqbbwr1crn00godfx2eam28wcj8y875rkcuzkel0dtsj09300jw1p65c7kr' );
define( 'AUTH_SALT',        'uwj8m9drapqdp7ehd41px2li330s8mw8qctr3tqun9skj66a4a7mgty2ps6m5nf4' );
define( 'SECURE_AUTH_SALT', 'knsuno0xbgyhzy3hn9y5srm7rjgn6mxpf6y308fky7iyuk98eywcbn44xwr2ajms' );
define( 'LOGGED_IN_SALT',   '3lmi7p47lv049xxgny5c2y3rbnb34ar7l2r4s4evd83qq5m00975zk9mybn0zi90' );
define( 'NONCE_SALT',       'ulb5idrk7g9qaqckd4agq705y687tdp1p2rvvoym9ahiaqgmrj74n8wia6b2g18u' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-b9bdbe7e-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-b9bdbe7e-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';

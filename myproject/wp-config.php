<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mybd');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9+Sg#x!^H5R{/t.>) R81~?iP:Ir{;0Ldx$OAVJ8.S?d@l58+1(XJft1kE19ZM2}');
define('SECURE_AUTH_KEY',  'b:l>=3U.Kz1R`f:zo7BXnNEr;H/;*wl[CbS!o|WHU?2iV~z0]OT;)=JnKY82#.U|');
define('LOGGED_IN_KEY',    'FS.hX_Xqs ^7kEWE|v0T<:TYxwjJR!UC57uQ=?x P,BKy/#GjON*[02CEwz<+8.I');
define('NONCE_KEY',        'BM(*DH?K[rDl;zz**.vI?.b<(N%T&@^pxK-wM~$Xfr:*Q]a1nZxP@[$W.*j_V#al');
define('AUTH_SALT',        'b#Zk`2PfH/gsI()e6:6L-B]-C.jPGBCS?<|Aw?8<I[VZ61(Jde(1!nFa*}Bw]wRE');
define('SECURE_AUTH_SALT', 'dw|f:!UM7><[r*z(GAwA,HC0,/I.pQ=B)Ps%(,grP92WT5n7rlObHQl<5Vr@[:UR');
define('LOGGED_IN_SALT',   't&99XVOn{N4m;<%i(R/ZfWvF*]Jw[k&JqoAI1%%>%(m!:Iws<(KIhjOf&s3bf14r');
define('NONCE_SALT',       '~J=s#2[<l(Ho[ge`idD]k7*(mErC3Y7r`8v0GMm1c!xMs,z6lbNIantOkPH.LQp!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

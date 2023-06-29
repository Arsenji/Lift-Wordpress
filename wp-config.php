<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lift' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y@iA.e!!T~M43Y1k}WTxg4F.p8.P53x*xSSOeOl&}D:2OlvVITB5NRqH=[~#|| e' );
define( 'SECURE_AUTH_KEY',  '!}@`^3U$FSo6{u87V:!f%{8;#=`#OA2tj`i?iP=4ZcxwFvODuwyot;7vXL5e>VVj' );
define( 'LOGGED_IN_KEY',    'c5n>_B-X!mQD=S&]?3:3+d1Aj{Z zPN6q7(#JH%kbdp%{[O$9wD]j4B*?yj<8z;6' );
define( 'NONCE_KEY',        'rvU6--QCH 7oYc#c?!uteIdk@%@Q7b!!M-*rJ4U7p{9[!:p&Z8e-]#8i kFN71sz' );
define( 'AUTH_SALT',        'bn!EP<#Th9^qc>^EFZ [W{d{;!*4HB0*Ech.Q9z+[U1KB+1M9`Es.uB1Ee#^pos|' );
define( 'SECURE_AUTH_SALT', '7KYM@f5?KhwrAV!^Gs]#9#iiD%iT}xG}RC+$v#/,5C,(ivrK tFQY9VU8jm#xd98' );
define( 'LOGGED_IN_SALT',   '_J+Lpwc.V#F%}#QR1o}%qs!0vx.HQKvBj4#`.ogJBpX343+WO.*JI>`]u{<SgG9U' );
define( 'NONCE_SALT',       'q4n&`u *sjwcK*%PQ7Ny8&WV6M)! l}(]-/cD<X=<9na*-x$djM%{,#GbQIIfny&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

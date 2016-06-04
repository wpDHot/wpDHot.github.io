<?php
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
define('DB_NAME', 'airfly-bis');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'MkEi/>H]0exU0!8%K={qiH{ye$7L`SepY/rv05SJ;[ }17yQO<k/f6?DsLT~N+kO');
define('SECURE_AUTH_KEY',  ' {9Dq$EwM]1Xd0?$h3G6]5BoWNELxGwyrCc8Gl^X5p`M[S,uOcsunJk$8/{bhv0F');
define('LOGGED_IN_KEY',    ',3L;d-,rAwJ4`a%7KcaxfDjF$~k}R#/mcgAr1QRa5mIi<+FE:,)(bP.&NW9KEb5)');
define('NONCE_KEY',        'xd~~`R!A`@Z;0RlMF)< Nedv{]Gdp}Le=2N2;Zj_k1Z@Br/N8FU{LzV:,dx#C[!3');
define('AUTH_SALT',        'c#w6McXs%R;$D@0n`OR8Tudvb18FtuhuDKRXx;XnI:X};1M#utcYDqO: +z_ZlS=');
define('SECURE_AUTH_SALT', '6H$(vKqUX4LWc:NTIT*b~Zl4Oo)F&tC@R81kwgj7aMx#H(N7bGL(8Q_?,QaYeYFX');
define('LOGGED_IN_SALT',   '),u>!zCLmQPj23}.*qy|E%>uAg2g8|!Fb!]Uc2P<0<ewqH}h2`69Z_RV{<~*qr0q');
define('NONCE_SALT',       'MP?NIH!Nh0n{)_b5)lNr&VFG_TEvx.!F}XKv<C 4dq?@ia@Ac(rIk_GfaGws+o3X');

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

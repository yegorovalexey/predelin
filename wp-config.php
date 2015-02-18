<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'wp_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wp_passwd');

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
define('AUTH_KEY',         'XuQ*bZ eakGBiu-BpG:&QY^nyEsI#qz2braJMc()B?s};o(G`JoxtBVj>%@Adc|n');
define('SECURE_AUTH_KEY',  'a(J)^IZD{/PAS8:u=BHR}}.45+A]M]_9R%yp$-S`k!xa{/0P1+D8i#TTw4T`(WFP');
define('LOGGED_IN_KEY',    'wh+{3%+5~HiYa:aHOeZKQ-KL<+pW_3:uA_GWQk`iGfg3?+.q[5|.q+h/r`tuBVGq');
define('NONCE_KEY',        'F.<8%o*;Ehu~ApA,%^Qg~gaXoJ^6Ap)`|L-PQS;5Qr!<~Dm`x<[q++d*|x6Efr2R');
define('AUTH_SALT',        'g-n006zgE=91-wu|-yeiV%mY|gvG!9N]ho[sOo+QSL_Wah;rl@_JRqsk%x)h:nQp');
define('SECURE_AUTH_SALT', '-P3~Rs[cshG]6K]>+H^is8_!s@-&}rq?f<q&wN?pzYH,*45[b0yX2|q&p#Dm{:&-');
define('LOGGED_IN_SALT',   'PZA*<+ot x[Cbg)o!i:kPiykv{pG+rku[qY[||hr(3P0C=nFH+mXP|eq=(gt&7EY');
define('NONCE_SALT',       '^S`96m*#|LQ{C+yy3WFbnvB|U]~4 9A+UGHfgD~n>1QI^Ylm3?P Iamv&aY|x0E|');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

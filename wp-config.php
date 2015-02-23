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
define('AUTH_KEY',         '[yWReK-f&kN+^3]-]EyB& nMRw+OkpDBv/AViGWRoni[v<LKIXuko>yWX?iS)?K.');
define('SECURE_AUTH_KEY',  ',=m.@Xr<3|x+nMCx1s@C}XcuC|(AOW2Jz^,.mPE6dG=+}?(^48(< /1 q@<4Ci{K');
define('LOGGED_IN_KEY',    '1ZI6/WHHO2$sr7JWnA~TQ~vdHL?P,qTZ<Nx886rym4Uii*7[[dAv@p2z7N^%+Fl|');
define('NONCE_KEY',        ',WmO=B5eb}++ h|qjJGX8ua&)bR]+2+bmZ9wbu4cq?E?O:IO%rV)!&ju2L/f}GDO');
define('AUTH_SALT',        'HL>08.O}kY>mn|A50SPf?c|2&-n7Ec2SC/_i]k+jk&V}+%%MIv-c3#:s_z 2Q/v`');
define('SECURE_AUTH_SALT', '0f+xOj:@u/L|G/VDlHD!yZn#uJf}F*|eFM5)xy$31|,_!NWCz]o`F{mqC@L?AYv_');
define('LOGGED_IN_SALT',   '4oN?89$t/Qc+FfTL!JGY`ae hJ,K-UR`x`K}I=CHy$o( #<GQCf|8[4sN=L!*eG$');
define('NONCE_SALT',       'ogNX`3S)HAG~`!N7eOHsjI:EiSi{L<Da5?-2&aV2<8m-_UjrL0S@E=ucGaM*]p-5');

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

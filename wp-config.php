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
define('DB_NAME', 'host1593542');

/** Имя пользователя MySQL */
define('DB_USER', 'host1593542');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'e136c791');

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
define('AUTH_KEY',         'S+]R)n+Kj#%ug+)bEHEKt,ExT@p>S!;sl;`l_Wuu/P~-5`yFV$7O*4P#&:ca!2/H');
define('SECURE_AUTH_KEY',  ',xGX)Gh9Ag{kBd:Ffy3d1-2NHn~;l_GV= sG_:,a|<-L4h} _uI>LfX%O$`SiTj@');
define('LOGGED_IN_KEY',    'f1eigQ0G]w+EO7N/<fn8$v=LdAZ#}I7L?r>NQXP*&#F$a9&pm3Zicu]2##-J~rlY');
define('NONCE_KEY',        '<3*Nr;PBYs!Hd5a5W(}RO}`EORXJ.^dY3dnYuELj3 Q&}e}4&Cym8j/z_XnFbO4}');
define('AUTH_SALT',        '+xFC5cV:U],dy*2Spp;ZsF !tay-^2SgZh3h)@sKTcZZarJiugDyjJ@TE)XbgCB+');
define('SECURE_AUTH_SALT', 'P+~7t[c&$fDTh$mvNjkf>C)bqk3fg#OBQabU0ne9Qj:B, {Ph+^eF%$v5Q?$Z|p2');
define('LOGGED_IN_SALT',   'E0Balg%L6U0/:69w0A2ND.d{[,r<&a=_|fB2vvT(:^Pc0}W~F?5O>;xidL`!2L*X');
define('NONCE_SALT',       'AuT,G6)&t5~CJ5C?z/`s&YMxYkh9-ba,r96y=0,2tl:*fT/dWs2C9@lcT0sGBqB(');

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

;<? exit(); ?>


[database]



db_server = "pdodessa.mysql.ukraine.com.ua"

;Пользователь базы данных
db_user = "pdodessa_db"

;Пароль к базе
db_password = "BWLAqsfR"

;Имя базы
db_name = "pdodessa_db"


;������� ��� ������
db_prefix = s_;

;��������� ���� ������
db_charset = UTF8;

;����� SQL
db_sql_mode =;

;�������� �������� �����
;db_timezone = '+04:00';


[php]
error_reporting = E_ALL;
php_charset = UTF8;
php_locale_collate = ru_RU;
php_locale_ctype = ru_RU;
php_locale_monetary = ru_RU;
php_locale_numeric = ru_RU;
php_locale_time = ru_RU;
;php_timezone = 'Europe/Moscow';

logfile = admin/log/log.txt;

[smarty]

smarty_compile_check = true;
smarty_caching = false;
smarty_cache_lifetime = 0;
smarty_debugging = false;
smarty_html_minify = false;

[images]
;������������ imagemagick ��� ��������� ����������� (������ gd)
use_imagick = true;

;���������� ���������� �����������
original_images_dir = files/originals/;

;���������� ��������
resized_images_dir = files/products/;

;����������� ���������
categories_images_dir = files/categories/;

;����������� �������
brands_images_dir = files/brands/;

;���� ����������� � ������� ������
watermark_file = simpla/files/watermark/watermark.png;

[files]

;���������� �������� �������� �������
downloads_dir = files/downloads/;

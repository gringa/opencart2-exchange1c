<?php
// Заголовок
$_['heading_title']							= 'Обмен данными с 1C v8.x';

// Наименования опций
// Вкладка "Основное"
// Таблица каталог
$_['entry_catalog_1c']						= 'Имя каталога в 1С';
$_['entry_store']							= 'Магазин';
$_['entry_action']							= 'Действия';
// Авторизация
$_['entry_username']						= 'Логин:';
$_['placeholder_username']					= 'Имя пользователя';
$_['desc_username']							= 'Если не указан логин, то выполняется обмен без проверки логин/пароль, т.е. под любым.';
$_['entry_password']						= 'Пароль:';
$_['placeholder_password']					= 'Введите пароль';
// Безопасность
$_['entry_allow_ip']						= 'Разрешенные IP адреса (Разделять переносом строки. Если пусто, разрешены все адреса.):';
$_['desc_allow_ip']							= 'Указывать IP адреса переносом строки, если пусто разрешено с любых.';
$_['entry_status']							= 'Статус:';
$_['desc_status']							= 'Если модуль выключен, то обмен проходить не будет. При отключенном модуле 1С будет выдавать ошибку что авторизация не пройдена!';
// Прочее
$_['entry_file_zip']						= 'Формат загрузки данных';
$_['desc_file_zip']							= 'По умолчанию каждый файл передается по отдельности, то есть, сначала закачиваются картинки, затем xml файлы. При большом количестве картинок загрузка может быть очень долгой, чем загрузка одного файла. <br />Если выбран формат загрузки <strong>архив ZIP</strong>, то начале обмена модуль сообщает 1С что хочет принять в ZIP архиве и максимальный размер загружаемого файла, в ответ 1С формирует файл архива один или несколько, если размер файла превышает максимально допустимый для загрузки на сервер.';
$_['entry_full_log']						= 'Включить подробный лог загрузки';
$_['desc_full_log']							= 'Выводит в лог подробные записи, нужен только для отладки, т.к. расходует больше памяти и дольше выполняется обмен. При отключенной опции в лог будут выводиться только сообщения с ошибками.';

// Товары
// Таблица цен
$_['entry_config_price_type']				= 'Тип цены в 1С';
$_['entry_customer_group']					= 'Группа покупателей';
$_['entry_quantity']						= 'Количество';
$_['entry_priority']						= 'Приоритет';
$_['text_price_default']					= 'Цена на сайте';
// Кнопка очистить
$_['entry_cleaning_db']						= 'Очистка базы данных';
$_['desc_cleaning_db']						= 'Очищает товары, категории, опции, характеристики, производителей, остатки и цены <strong>во всех магазинах</strong>!';
$_['entry_clean_button']					= 'Очистить таблицы';
// Остатки
$_['entry_flush_quantity']					= 'Устанавливать остаток товаров в 0:';
$_['desc_flush_quantity']					= 'Перед началом обмена <strong>только у загружаемых товаров из каталога</strong> (файл import.xml) будет установлен остаток нулевой..';
// Картинки
// Водяные знаки
$_['entry_apply_watermark']					= 'Накладывать водяные знаки при загрузке';
$_['desc_apply_watermark']					= 'При обмене на картинку товара накладывается это изображение. Изображение должно быть с прозрачным фоном, рекомендуемый формат PNG';
// Обновление
$_['entry_product_fields_update']			= 'Обновлять поля товара при импорте:';
$_['desc_product_fields_update']			= 'Если опция выбрана то будет обновлено';
// Типы номенклатуры
$_['entry_parse_only_types_item']			= 'Обрабатывать только типы номенклатуры:';
$_['desc_parse_only_types_item']			= 'В этой опции указываются какие <strong>типы номенклатуры</strong> из 1С будут обрабатываться, не путаем с <strong>видами номенклатуры</strong>. Типы номенклатуры указываются точно также как в 1С в одну строку, разделяя любым символом. Например: товар, запас, услуга';
// Родительские категории
$_['entry_fill_parent_cats']				= 'Заполнять родительские категории:';
$_['desc_fill_parent_cats']					= 'ВРЕМЕННО НЕ РАБОТАЕТ. Заполняет связи в товаре со всеми категорями в которую входит основная. Например, товар находится в категории <strong>Категория 1->Категория 2->Категория 3</strong>, то основная категория будет <strong>категория 3</strong>, а в связях будут указаны категории <strong>Категоря 1</strong> и <strong>Категория 2</strong>. То есть на сайте товар будет отображаться во всех трех категориях.';
// Статус товара
$_['entry_default_stock_status']			= 'Статус при отстутствии на складе:';
$_['desc_default_stock_status']				= 'Эксперементальная опция. Устанавливает статус у товара, если у товара остаток равен нулю.';
// Отключение товара
$_['entry_product_disable_if_zero']			= 'Не показывает товар на сайте если остаток равен или меньше нуля.';
$_['desc_product_disable_if_zero']			= 'Отключает вывод товара в каталоге сайта, если при обмене этот товар выгрузился и остаток у него меньше или равен нулю.';
// Артикул
$_['entry_dont_use_artsync'] 				= 'Не искать товары по артикулам:';
$_['desc_dont_use_artsync'] 				= 'При обмене ищется товар по внутреннему идентификатору в 1С, если такого нет (товар ранее не выгружался на сайт), при отключенной опции модуль будет искать товар по артикулу (SKU), ну если не найдет ни там и ни там, то будет создан новый товар.<br /><strong>ВНИМАНИЕ! При отключенной опции, если у товара пустые артикулы, то модуль будет находить один и тот же товар по пустому артикулу! Поэтому если нет артикулов, включите эту опцию.</strong>';
// Наименование товара
$_['entry_product_name_field']				= 'Наименование товара читать из:';
$_['desc_product_name_field']				= 'Загружает в наименование товара из 1С поля "Наименование" или "Наименование полное"';
$_['text_product_name']						= 'Наименование';
$_['text_product_fullname']					= 'Полное наименование';
// SEO
$_['text_legend_seo_product']				= 'SEO настройки товара';
$_['text_legend_seo_category']				= 'SEO настройки категории';
$_['text_legend_seo_manyfacturer']			= 'SEO настройки производителя';
// Заголовок таблицы
$_['label_available_patterns']				= 'Доступные паттерны: ';
$_['label_property_name_from_1c']			= 'Название свойства для импорта шаблона из 1С: ';
// Overwrite
$_['text_seo_overwrite']					= 'Перезаписать';
$_['text_seo_if_empty']						= 'Если поле пустое';
// Товар
$_['entry_seo_product_overwrite']			= 'Перезаписывать:';
$_['entry_seo_product_seo_url']				= 'SEO URL:';
$_['entry_seo_product_seo_url_template']	= 'Шаблон:';
$_['placeholder_seo_product_url_template']	= 'Шаблон. Пример: {prod_id}.html';
$_['entry_seo_product_meta_title']			= 'Мета-тег Title:';
$_['entry_seo_product_meta_description']	= 'Мета-тег Description:';
$_['placeholder_seo_product_meta_description_template']	= 'Шаблон. Пример: Товар {name}';
// Категория
$_['entry_seo_category_overwrite']			= 'Перезаписывать:';
$_['entry_seo_category_seo_url']			= 'SEO URL:';
$_['entry_seo_category_meta_title']			= 'Мета-тег Title:';
$_['entry_seo_category_meta_description']	= 'Мета-тег Description:';
$_['entry_seo_category_description']		= 'Описание:';
$_['entry_seo_category_keywords']			= 'Мета-тег Keyword:';
// производитель
$_['entry_seo_manufacturer_overwrite']		= 'Перезаписать:';
$_['entry_seo_manufacturer_seo_url_template']	= 'Шаблон:';
$_['entry_seo_manufacturer_seo_url']			= 'SEO URL:';

// ЗАКАЗЫ
$_['text_order_status_to_exchange_not'] 	= '- не использовать -';
$_['entry_order_status_to_exchange'] 		= 'Выгружать заказы со статусом:';
$_['entry_order_status_change']				= 'Статус выгруженых заказов:';
$_['entry_order_status_canceled'] 			= 'Статус отмененных заказов:';
$_['entry_order_status_completed']			= 'Статус выполненных заказов:';
$_['entry_order_notify']					= 'Уведомлять пользователей о смене статуса:';
$_['entry_order_currency'] 					= 'Обозначение валюты (руб.):';
$_['placeholder_order_currency'] 			= 'руб.';



// Кнопки
$_['button_upload']							= 'Загрузить';
$_['button_add']							= 'Добавить';
$_['button_download_orders']				= 'Скачать заказы';



// Подвал модуля
$_['text_homepage']							= 'Домашняя страничка модуля';
$_['source_code']       					= 'Исходный код на GitHub';
$_['text_source_code']						= 'Исходный код на GitHub';
$_['text_change']							= 'Доработка и поддержка: Кириллов Виталий (Skype: KirilLoveVE, ICQ: 39927648, Viber: +79144306000, email: vitaly.kirillove@mail.ru)';















// Text
$_['text_module']							= 'Модули';
$_['text_success']							= 'Настройки модуля обновлены!';

$_['text_tab_store']						= 'Магазин';
$_['text_tab_general']						= 'Основное';
$_['text_tab_product']						= 'Обмен товарами';
$_['text_tab_order']						= 'Обмен заказами';
$_['text_tab_manual']						= 'Ручная обработка';
$_['text_tab_developing']					= 'Разработка';
$_['text_tab_seo']							= 'SEO';

$_['text_upload_success']					= 'Импорт завершен';
$_['text_upload_error']						= 'Что-то пошло не так. Загляните в &laquo;Система &rarr; Журнал ошибок&raquo;';
$_['text_max_filesize']						= 'Загружаемый файл не должен превышать %s Мб';

$_['text_empty']							= 'Настроек пока нет';




$_['text_image_manager']					= 'Менеджер изображений';
$_['text_browse']							= 'Обзор';
$_['text_clear']							= 'Очистить';

$_['entry_relatedoptions']					= 'Загружать характеристики как связанные опции (требуется модуль <a href="http://opencartforum.ru/files/file/1501-связанные-опции/">Связанные опции</a>):';
$_['entry_relatedoptions_help']				= 'в настройках связанных опций обязательно должна быть включены галки: "Пересчитывать количество", "Обновлять опции", "Использовать различные варианты связанных опций" ';

$_['entry_upload']							= 'Выберите файл *.XML для загрузки';
$_['entry_download_orders']					= 'Скачать orders.xml';
$_['entry_no_image']						= 'Картинка при отсутствии:';

// Error
$_['error_permission']						= 'У Вас нет прав для управления этим модулем!';

// Справка
$_['help_allow_ip']							= 'С каких IP разрешен доступ';
$_['help_upload']							= 'Принимается import.xml, offers.xml, orders.xml.';
$_['help_download_orders']					= 'Скачивание выбранных заказов в ХМЛ формате.';
$_['help_synchronize_uuid_to_id']			= 'ВНИМАНИЕ! Для работы этой опции 1С должна в Ид выгружать код товара а не Ид объекта.';

$_['text_legend_store']						= 'Связь каталога в 1С с магазином';
$_['text_legend_auth']						= 'Авторизация';
$_['text_legend_security']					= 'Безопасность';
$_['text_legend_other']						= 'Прочее';
$_['text_legend_price']						= 'Связь типов цен (соглашений) в 1С с группами покупателей';
$_['text_legend_cleaning_db']				= 'Очистка базы данных';
$_['text_legend_images']					= 'Картинки';
$_['text_legend_export_orders']				= 'Выгрузка заказов в 1С';
$_['text_legend_import_orders']				= 'Загрузка заказов из 1С';
$_['text_legend_fields_update']				= 'Обновление полей при импорте';

$_['text_product_field_column']				= 'Колонки товара';
$_['text_product_field_sort_order']			= 'Порядок сортировки';
$_['text_product_field_images']				= 'Картинки товара';
$_['text_product_field_category']			= 'Категории товара';
$_['text_product_field_name']				= 'Название товара';
$_['text_in_developing']					= 'В разработке';


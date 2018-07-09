<?php
$_['heading_title']           = 'Интеркасса';

// Tab 
$_['tab_settings']            = 'Настройка платежей';
$_['tab_log']                 = 'Журнал';
$_['tab_information']         = 'Информация';

// Text 
$_['text_extension']          = 'Расширения';
$_['text_success']            = 'Настройки модуля "%s" обновлены!';
$_['text_clear_log_success']  = 'Журнал запросов модуля успешно очищен!';
$_['text_confirm']            = 'Удаление журнала невозможно отменить! Вы уверены, что хотите это сделать?';
$_['text_interkassa']         = '<a style="cursor: pointer;" onclick="window.open(\'https://new.interkassa.com\');"><img src="view/image/payment/interkassa.gif" alt="new.interkassa.com" title="Interkassa"/></a>';
$_['text_log_off']            = 'Выключен';
$_['text_log_short']          = 'Частичный (Только результаты операций)';
$_['text_log_full']           = 'Полный (Все запросы)';

$_['text_currency_auto']      = 'Определять автоматически';
$_['text_currency_rub']       = 'Российские рубли (RUB-643)';
$_['text_currency_uah']       = 'Украинские гривны (UAH-980)';
$_['text_currency_usd']       = 'Доллары США (USD-840)';
$_['text_currency_eur']       = 'Евро (EUR-978)';
$_['text_info']               =  'После <a href="https://www.interkassa.com/registration" target="_blank">регистрации</a> учетной записи интернет-магазина в «INTERKASSA»
необходимо настроить магазин для приема платежей. Сделать это можно в <a href="https://www.interkassa.com/login" target="_blank">личном кабинете</a> раздела <a href="https://www.interkassa.com/account/checkout" target="_blank">Мои Кассы</a>, нажав на кнопку "Настройки"
напротив своего магазина. Данные которые необходимо ввести в настройках магазина:';
$_['text_info_content']       = 'В разделе "Мои кассы -> Настройки кассы -> Настройки платежей" необходимо установить следующие значения:<br />
<b>"Проверять уникальность платежей" - вкл.<br />
<b>"Передавать описание на платежную систему" - вкл.</b><br />
"Время жизни платежа (в минутах)" - вкл. "разрешить переопределять в запросе "</b><br /><br />
В разделе "Мои кассы -> Настройки кассы -> Интерфейс" необходимо везде установить следующие значения:<br />
<b>"Тип запроса" - "POST"<br />
везде выключить "Разрешить переопределять в запросе "</b><br /><br />
В разделе "Мои кассы -> Настройки кассы -> Безопасность" необходимо установить следующие значения:<br />
<b>"Алгоритм подписи" - "MD5"<br />
"Проверять подпись в форме запроса платежа" - вкл.</b>';

// Entry
$_['entry_status']                  = 'Статус';
$_['entry_geo_zone']                = 'Географическая зона';
$_['entry_sort_order']              = 'Порядок сортировки';
$_['entry_minimal_order']           = 'Минимальная стоимость заказа';
$_['entry_order_confirm_status']    = 'Статус заказа после подтверждения';
$_['entry_order_status']            = 'Статус заказа после удачной оплаты';
$_['entry_order_fail_status']       = 'Статус заказа после неудачной оплаты';
$_['entry_title']                   = 'Название';

$_['entry_cashbox_id']              = 'Идентификатор кассы';
$_['entry_secret_key']              = 'Секретный ключ';
$_['entry_test_key']                = 'Тестовый ключ';
$_['entry_test_mode']               = 'Тестовый режим';
$_['entry_api_enable']              = 'API режим';
$_['entry_api_id']                  = 'API идентификатор';
$_['entry_api_key']                 = 'API ключ';
$_['entry_currency']                = 'Валюта магазина';

$_['entry_log']                     = 'Журнал';
$_['entry_log_file']                = 'Файл журнала';

$_['entry_success_url']        = 'URL успешной оплаты';
$_['entry_fail_url']           = 'URL неуспешной оплаты';
$_['entry_callback_url']       = 'URL взаимодействия';

// Help
$_['help_order_confirm_status'] = 'При нажатии на кнопку "Подтвердить" на последнем этапе оформления заказа, заказу будет установлен выбранный статус';
$_['help_order_status']         = 'После успешной оплаты заказа, заказу будет установлен выбранный статус.';
$_['help_minimal_order']        = 'Если сумма заказа меньше указанной суммы, и сумма не пустая и не равна нулю, то этот метод оплаты не будет доступен, при оформлении заказа.<br />Например: 190.90';
$_['help_order_fail_status']    = 'Если Интеркасса вернет покупателя после неудачного платежа, заказу будет установлен выбранный статус.';
$_['help_title']                = 'Название метода оплаты на странице оформления заказа';

$_['help_cashbox_id']    = 'Идентификатор кассы зарегистрированного в системе «INTERKASSA». Узнать его можно в разделе «Мои кассы». Пример: 529a6e08bf4efcae2d1b8488';
$_['help_secret_key']    = 'Используется SCI (Интеркассой) при формировании цифровой подписи. Должен совпадать с секретным ключем в разделе "Мои кассы -> Настройки кассы -> Безопасность -> Секретный ключ".';
$_['help_test_key']      = 'Используется SCI (Интеркассой) при формировании цифровой подписи, если платеж был совершен через тестовую платежную систему. Должен совпадать с тестовым ключем в разделе "Мои кассы -> Настройки кассы -> Безопасность -> Тестовый ключ".';
$_['help_test_mode']     = 'В тестовом режиме можно проверить настройки модуля и Интеркассы через тестовую валюту Интеркассы, выбрав при оплате "Тестовая платежная система". В этом случае для подписывания ЭЦП (электронной цифровой подписи) используется тестовый ключ. Для приема реальных платежей - тестовый режим необходимо выключить.';
$_['help_currency']      = 'Валюта, в которой магазин передает сумму платежа на платежный шлюз "Интеркасса". Интеркасса принимает следующие валюты: RUB, UAH, EUR, USD.';
$_['help_log_file']      = 'Последние %d строк из файла журнала.';
$_['help_log']           = 'Журнал запросов от Интеркассы сохраняется в файле: /system/storage/logs/%s';

// Error
$_['error_permission']   = 'У Вас нет прав для управления модулем "%s"!';
$_['error_clear_log']    = 'У Вас нет прав для очистки журнала модуля!';
$_['error_form']         = 'Необходимо заполнить поле "%s" (вкладка "%s")!';
<?php

return [
    'account' => 'Аккаунт',
    'personal_details' => 'Личные данные',
    'security' => 'Безопасность',
    'credits' => 'Кредиты',

    'change_password' => 'Изменить пароль',

    'two_factor_authentication' => 'Двухфакторная аутентификация',
    'two_factor_authentication_description' => 'Добавьте дополнительный уровень безопасности к вашему аккаунту, включив двухфакторную аутентификацию.',
    'two_factor_authentication_enabled' => 'Двухфакторная аутентификация включена для вашего аккаунта.',
    'two_factor_authentication_enable' => 'Включить двухфакторную аутентификацию',
    'two_factor_authentication_disable' => 'Отключить двухфакторную аутентификацию',
    'two_factor_authentication_disable_description' => 'Вы уверены, что хотите отключить двухфакторную аутентификацию? Это удалит дополнительный уровень безопасности из вашего аккаунта.',
    'two_factor_authentication_enable_description' => 'Чтобы включить двухфакторную аутентификацию, вам необходимо отсканировать QR-код ниже с помощью приложения-аутентификатора, такого как Google Authenticator или Authy.',
    'two_factor_authentication_qr_code' => 'Отсканируйте QR-код ниже с помощью вашего приложения-аутентификатора:',
    'two_factor_authentication_secret' => 'Или введите следующий код вручную:',

    'sessions' => 'Сеансы',
    'sessions_description' => 'Управляйте и завершайте свои активные сеансы в других браузерах и на других устройствах.',
    'logout_sessions' => 'Завершить этот сеанс',
    'current_device' => 'Текущее устройство',

    'input' => [
        'current_password' => 'Текущий пароль',
        'current_password_placeholder' => 'Ваш текущий пароль',
        'new_password' => 'Новый пароль',
        'new_password_placeholder' => 'Ваш новый пароль',
        'confirm_password' => 'Подтвердите пароль',
        'confirm_password_placeholder' => 'Подтвердите ваш новый пароль',

        'two_factor_code' => 'Введите код из вашего приложения-аутентификатора',
        'two_factor_code_placeholder' => 'Ваш код двухфакторной аутентификации',

        'currency' => 'Валюта',
        'amount' => 'Сумма',
        'payment_gateway' => 'Платежный шлюз',
    ],

    'notifications' => [
        'password_changed' => 'Пароль был изменен.',
        'password_incorrect' => 'Текущий пароль неверен.',
        'two_factor_enabled' => 'Двухфакторная аутентификация была включена.',
        'two_factor_disabled' => 'Двухфакторная аутентификация была отключена.',
        'two_factor_code_incorrect' => 'Код неверен.',
        'session_logged_out' => 'Сеанс был завершен.',
    ],

    'no_credit' => 'У вас нет кредитов.',
    'add_credit' => 'Добавить кредиты',
    'credit_deposit' => 'Пополнение кредитов (:currency)',

    'payment_methods' => 'Способы оплаты',
    'recent_transactions' => 'Недавние транзакции',
    'saved_payment_methods' => 'Сохраненные способы оплаты',
    'setup_payment_method' => 'Настроить новый способ оплаты',
    'no_saved_payment_methods' => 'У вас нет сохраненных способов оплаты.',
    'saved_payment_methods_description' => 'Управляйте своими сохраненными способами оплаты для быстрой оплаты и автоматических платежей.',
    'no_saved_payment_methods_description' => 'Вы можете добавить способ оплаты, чтобы будущие платежи были быстрее и проще, а также включить автоматические платежи для ваших услуг.',
    'add_payment_method' => 'Добавить способ оплаты',
    'payment_method_statuses' => [
        'active' => 'Активный',
        'inactive' => 'Неактивный',
        'expired' => 'Истекший',
        'pending' => 'Ожидание',
    ],
    'payment_method_added' => 'Способ оплаты был добавлен.',
    'payment_method_add_failed' => 'Не удалось добавить способ оплаты. Пожалуйста, попробуйте еще раз.',
    'services_linked' => ':count услуга(и) привязана(ы)',
    'remove' => 'Удалить',
    'remove_payment_method' => 'Удалить способ оплаты',
    'remove_payment_method_confirm' => 'Вы уверены, что хотите удалить :name? Это действие нельзя отменить.',
    'expires' => 'Истекает :date',
    'cancel' => 'Отмена',
    'confirm' => 'Да, удалить',
    'email_notifications' => 'Email-уведомления',
    'in_app_notifications' => 'Уведомления в приложении',
    'notifications_description' => 'Управляйте своими настройками уведомлений. Вы можете выбрать получение уведомлений по электронной почте, в приложении (push) или обоими способами.',
    'notification' => 'Уведомление',

    'push_notifications' => 'Push-уведомления',
    'push_notifications_description' => 'Включите push-уведомления для получения обновлений в реальном времени прямо в вашем браузере, даже когда вы не на сайте.',
    'enable_push_notifications' => 'Включить Push-уведомления',
    'push_status' => [
        'not_supported' => 'Push-уведомления не поддерживаются вашим браузером.',
        'denied' => 'Push-уведомления заблокированы. Пожалуйста, включите их в настройках браузера.',
        'subscribed' => 'Push-уведомления включены.',
    ],
];


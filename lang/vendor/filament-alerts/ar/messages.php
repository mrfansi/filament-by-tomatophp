<?php

return [
    "group" => "الإعدادات",
    "back" => "رجوع",
    "notifications" => [
        "title" => "التنبيهات",
        "single" => "تنبيه",
        "create" => "إنشاء تنبيه",
        "logs" => "سجل التنبيهات",
        "form" => [
            "user" => "المستخدم",
            "template" => "القالب",
            "privacy" => "الخصوصية",
            "user_type" => "نوع المستخدم",
            "createdBy" => "تم الإنشاء بواسطة",
            "created_at" => "تم إنشاءه في",
            "updated_at" => "تم تحديثه في",
        ]
    ],
    "templates" => [
        "title" => "القوالب",
        "single" => "قالب",
        "create" => "إنشاء قالب",
        "edit" => "تعديل قالب",
        "actions" => [
            "clone" => "تكرار",
            "try" => "تجربة",
            "clone-notification" => "تم تكرار القالب بنجاح",
            "try-notification" => "تم ارسال القالب بنجاح",
            "try-notification-danger" => "عفواً حديث خطا اثناء تجربة القالب",
        ],
        "form" => [
            "image" => "الصورة",
            "name" => "الاسم",
            "key" => "المفتاح",
            "title" => "العنوان",
            "body" => "الرسالة",
            "url" => "الرابط",
            "icon" => "الايقونة",
            "providers" => "المزودين",
            "type" => "النوع",
            "action" => "يتم ارساله بواسطة",
            "manual" => "يدوي",
            "system" => "النظام",
            "created_at" => "تم إنشاءه في",
            "updated_at" => "تم تحديثه في",
        ]
    ],
    "logs" => [
        "title" => "سجل التنبيهات",
        "form" => [
            "user" => "المستخدم",
            "title" => "العنوان",
            "type" => "النوع",
            "provider" => "المزود",
            "created_at" => "تم إنشاءه في",
            "updated_at" => "تم تحديثه في",
        ]
    ],
    "settings" => [
        "group" => "التنبيهات",
        "notifications_sound" => "صوت التنبيهات",
        "firebase" => [
            "title" => "إعدادات فايربيز",
            "description" => "تحديث الاعدادات الخاصة بالفايربيز",
            "notifications_allow" => "تفعيل التنبيهات",
            "fcm_apiKey" => "FCM API Key",
            "fcm_authDomain" => "FCM Auth Domain",
            "fcm_projectId" => "FCM Project Id",
            "fcm_storageBucket" => "FCM Storage Bucket",
            "fcm_messagingSenderId" => "FCM Messaging Sender Id",
            "fcm_appId" => "FCM App Id",
            "fcm_measurementId" => "FCM Measurement Id",
            "fcm_cr" => "FCM Admin Json",
            "fcm_database_url" => "FCM Database Url",
            "fcm_vapid" => "FCM Vapid",
        ],
        "email" => [
            "title" => "إعدادات البريد الالكتروني",
            "description" => "تحديث وربط البريد الالكتروني",
            "mail_mailer" => "Mailer",
            "mail_host" => "Host",
            "mail_port" => "Port",
            "mail_username" => "Username",
            "mail_password" => "Password",
            "mail_encryption" => "Encryption",
            "mail_from_address" => "From address",
            "mail_from_name" => "From Name",
        ]
    ]
];

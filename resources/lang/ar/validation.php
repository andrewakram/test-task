<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute No يُمثّل رابطًا صحيحًا.',
    'after' => 'يجب على :attribute أن يكون وقتا Noحقًا لوقت :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً Noحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن No يحتوي :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن No يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون :attribute ًمصفوفة.',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم ملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف نّص :attribute بين :min و :max.',
        'array' => 'يجب أن يحتوي :attribute على عدد من عناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed' => 'حقل Confirmation Not مُطابق لــ :attribute.',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'No يتوافق :attribute مع شكل :format.',
    'different' => 'يجب أن يكون Rowان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا / أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا / أرقام .',
    'dimensions' => 'ـ :attribute يحتوي على أبعاد Image Not صحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح بُنية.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد قيم Nextة: :values',
    'exists' => 'قيمة محددة :attribute Not Existة.',
    'file' => 'ـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نّص :attribute أكثر من :value حروف ٍ/ حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر / عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute على أقل :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute على أقل :value حروفٍ / حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل على :value عُنصرًا / عناصر.',
    ],
    'image' => 'يجب أن يكون :attribute Imageً.',
    'in' => ':attribute Not Exist.',
    'in_array' => ':attribute Not Exist في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصًا من نوع JSON.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أصغر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نّص :attribute أقل من :value حروفٍ / حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر / عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file' => 'يجب أن No يتجاوز حجم ملف :attribute :value كيلوبايت.',
        'string' => 'يجب أن No يتجاوز طول نّص :attribute :value حروفٍ / حرفًا.',
        'array' => 'يجب أن No يحتوي :attribute على أكثر من :value عناصر / عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن No يتجاوز حجم ملف :attribute :max كيلوبايت.',
        'string' => 'يجب أن No يتجاوز طول نّص :attribute :max حروفٍ / حرفًا.',
        'array' => 'يجب أن No يحتوي :attribute على أكثر من :max عناصر / عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم ملف :attribute على أقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute على أقل :min حروفٍ / حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل على :min عُنصرًا / عناصر.',
    ],
    'not_in' => 'عنصر :attribute Not صحيح.',
    'not_regex' => 'صيغة :attribute Not صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا.',
    'password' => 'كلمة مرور Not صحيحة.',
    'present' => 'يجب تقديم :attribute.',
    'regex' => 'صيغة :attribute .Not صحيحة.',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب في ح ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في ح ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file' => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي نص :attribute على :size حروفٍ / حرفًا بضبط.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ / عناصر بضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد قيم Nextة: :values',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل ـ :attribute.',
    'url' => 'صيغة رابط :attribute Not صحيحة.',
    'uuid' => ':attribute يجب أن يكون بصيغة UUID سليمة.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Name ',
        'username' => 'Name ofمُستخدم',
        'email' => 'بريد كتروني',
        'first_name' => 'Name First',
        'last_name' => 'Name ofعائلة',
        'password' => 'كلمة مرور',
        'password_confirmation' => 'Confirmation كلمة مرور',
        'city' => 'City',
        'country' => 'Countries',
        'country_id' => 'City',
        'city_id' => 'حي',
        'address' => 'عنوان',
        'phone' => 'رقم جو',
        'mobile' => 'جو',
        'age' => 'عمر',
        'sex' => 'جنس',
        'gender' => 'نوع',
        'day' => 'يوم',
        'month' => 'شهر',
        'year' => 'سنة',
        'hour' => 'ساعة',
        'minute' => 'دقيقة',
        'second' => 'ثانية',
        'title' => 'عنوان',
        'content' => 'مُحتوى',
        'description' => 'وصف',
        'excerpt' => 'مُلخص',
        'date' => 'تاريخ',
        'time' => 'وقت',
        'available' => 'مُتاح',
        'size' => 'حجم',
        'salary' => 'راتب',
        'dept_id' => 'قسم',
        'job_id' => 'وظيفه',
        'work_hour' => 'ساعات عمل',
        'permission_date' => ' تاريخ',
        'from' => ' من ',
        'to' => ' ى  ',
        'reason' => ' سبب',
        'from_date' => ' بداية اجازه',
        'to_date' => ' انتهاء اجازه',
        'open_to' => 'وقت غلق',
        'open_from' => 'فتح',
        'overtime' => ' احتساب ساعه عمل اضافيه ',
        'late' => ' احتساب ساعه تاخير',
        'early' => ' احتساب ساعه خروج مبكر',
        'notsign' => ' احتساب عدم توقيع',
        'absence' => ' احتساب يوم غياب',
        'annual' => ' رصيد اجازات سنوي',
        'monthly' => ' عدد ساعات طلب استئذان شهريه',
        'daily' => '  عدد ساعات طلب استئذان يوميه ',
        'workplace_name' => ' Name مكان عمل ',
        'network_name' => 'IP v4 DNS Server',
        'mac_address' => ' IP v4 subnet mask ',
        'notes' => 'مNoحظات',
        'system_name_ar' => ' Name ofنظام بعربيه ',
        'system_name_en' => ' Name ofنظام بenه ',
        'contacts' => 'عنوان وارقام تواصل',
        'delayallowed' => 'سماح بتاخير',
        'leaveallowed' => 'سماح بانصراف',
        'vacation_date' => 'تاريخ اجازة',
        'price' => 'Price',
        'period' => 'فترة',
        'limit' => 'شركة',
        'package_id' => 'باقه',
        'cat_id' => 'تصنيف',
        'type' => 'نوع ',
        'employee_id' => 'موظف ',
        'religion_id' => 'منطقة ',
        'city_id' => 'City ',

        'device_token' => 'رقم تعريفي للجهاز ',
        'user_id' => ' مستخدم ',
        'project_id' => 'مشروع',
        'projectname' => 'Name ofمشروع ',
        'area' => 'نطاق',
        'lat' => ' خط طول',
        'lng' => 'خط عرض ',
        'manager_phone' => ' رقم جو مدير',
        'code' => ' رمز',
        'product_id' => ' منتج',
        'main_category_id' => ' فئة Dashboard',
        'count' => ' كمية',
        'search' => ' بحث',
        'message' => ' رسة',
        'file' => ' ملف',
        'receiver_id' => ' مرسل ية',
        'order_id' => ' طلبية',
        'delivery_time_id' => 'وقت توصبل ',
        'delivery_date' => ' تاريخ توصيل',
        'manager_email' => ' بريد يكترونى للمدير',
        'image'=>'Image',
        'deligate_name'=>'Name ofمندوب',
        'deligate_phone'=>'رقم جو مندوب',
        'branch_name'=>'Name ofفرع',
        'branch_email'=>'بريد يكترونى للفرع',
        'branch_phone'=>'رقم جو فرع',
        'branch_password'=>'رقم سري للفرع',
        'selected_date'=>'يوم مختار',
        'coupon_code'=>'كوبون خصم',
        'old_date'=>'تاريخ قديم',
        'new_date'=>'تاريخ جديد',












    ],
];

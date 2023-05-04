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

    'accepted' => 'يجب قبول السمة :',
    'accepted_if' => 'يجب قبول السمة :other هي :value.',
    'active_url' => 'السمة :ليست عنوان URL صالحا.',
    'after' => 'يجب أن تكون السمة :بتاريخ بعد:تاريخ',
    'after_or_equal' => 'يجب أن تكون السمة :تاريخ بعد أو يساوي :تاريخ .',
    'alpha' => 'يجب أن تحتوي السمة : على أحرف فقط.',
    'alpha_dash' => 'يجب أن تحتوي السمة : على أحرف فقط, أرقام, شرطات وتسطيرات سفلية.',
    'alpha_num' => 'يجب أن تحتوي السمة : على أحرف فقط وأرقام.',
    'array' => 'يجب أن تكون السمة: مصفوفة.',
    'before' => 'يجب أن تكون السمة - تاريخ قبل :تاريخ .',
    'before_or_equal' => 'يجب أن تكون السمة :تاريخ قبل أو يساوي :تاريخ .',
    'between' => [
        'numeric' => 'هو: يجب أن تكون السمة بين :أقل و :أكثر .',
        'file' => 'يجب أن تكون السمة :بين :أقل و:أكثر كيلوبايت.',
        'string' => 'يجب أن تكون السمة :بين :أقل و:أكثر حرفين.',
        'array' => 'يجب أن تحتوي السمة :بين :أقل و:أكثر العناصر.',
    ],
    'boolean' => 'يجب أن يكون الحقل :سمة true or false.',
    'confirmed' => 'تأكيد السمة :غير مطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'السمة :ليس تاريخا صالحا.',
    'date_equals' => 'يجب أن تكون السمة : تاريخ يساوي :تاريخ.',
    'date_format' => 'السمة :السمة لا تتطابق مع التنسيق : التنسيق . ',
    'different' => 'ال :السمة و : الأخرى يجب أن تكون مختلفة.',
    'digits' => 'يجب أن تكون السمة :: أرقام أرقام.',
    'digits_between' => 'يجب أن تكون السمة : بين : أقل و : أعلي  أرقام. ',
    'dimensions' => 'تحتوي السمة : على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي الحقل : سمة على قيمة مكررة.',
    'email' => 'يجب أن تكون السمة :عنوان بريد إلكتروني صالح.',
    'ends_with' => 'يجب أن تنتهي السمة :بأحد ما يلي: : القيم.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'يجب أن تكون السمة : ملفا.',
    'filled' => 'يجب أن يكون لحقل السمة : قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون السمة :أكبر من : القيمة.',
        'file' => 'يجب أن تكون السمة :أكبر من :value كيلوبايت.',
        'string' => 'يجب أن تكون السمة :أكبر من : أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة : على أكثر من : عناصر القيمة.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون السمة :أكبر من أو تساوي : القيمة. ',
        'file' => 'يجب أن تكون السمة : أكبر من أو تساوي : قيمة كيلوبايت.',
        'string' => 'يجب أن تكون السمة :أكبر من أو تساوي : أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة : عناصر القيمة أو أكثر.',
    ],
    'image' => 'يجب أن تكون السمة :صورة .',
    'in' => 'السمة :المختارة غير صالحة.',
    'in_array' => 'الحقل : السمة غير موجود في: أخرى.',
    'integer' => 'يجب أن تكون السمة : عددا صحيحا.',
    'ip' => 'يجب أن تكون السمة : عنوان IP صالحا.',
    'ipv4' => 'يجب أن تكون السمة : عنوان IPv4 صالحا.',
    'ipv6' => 'يجب أن تكون السمة :عنوان IPv6 صالحا.',
    'json' => 'يجب أن تكون السمة :سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن تكون السمة :أقل من : القيمة.',
        'file' => 'يجب أن تكون السمة :أقل من: كيلوبايت القيمة.',
        'string' => 'يجب أن تكون السمة :أقل من : أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة : على أقل من : عناصر القيمة.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون السمة : أقل من أو تساوي : القيمة.',
        'file' => 'يجب أن تكون السمة : أقل من أو تساوي : كيلوبايت القيمة.',
        'string' => 'يجب أن تكون السمة :السمة أقل من أو تساوي : أحرف القيمة.',
        'array' => 'يجب ألا تحتوي السمة : على أكثر من : عناصر القيمة.',
    ],
    'max' => [
        'numeric' => 'يجب ألا تكون السمة :أكبر من: الحد الأقصى.',
        'file' => 'يجب ألا تكون السمة : أكبر من : الحد الأقصى للكيلوبايت.',
        'string' => 'يجب ألا تكون السمة : أكبر من : الحد الأقصى للأحرف.',
        'array' => 'يجب ألا تحتوي السمة : على أكثر من : الحد الأقصى للعناصر.',
    ],
    'mimes' => 'يجب أن تكون السمة : ملف من النوع : : القيم.',
    'mimetypes' => 'يجب أن تكون السمة : ملف من النوع : : القيم.',
    'min' => [
        'numeric' => 'يجب أن تكون السمة : على الأقل : min .',
        'file' => 'يجب أن تكون السمة : على الأقل: دقيقة كيلوبايت.',
        'string' => 'يجب أن تكون السمة : على الأقل : الحد الأدنى للأحرف.',
        'array' => 'يجب أن تحتوي السمة : على الأقل : الحد الأدنى للعناصر.',
    ],
    'multiple_of' => 'يجب أن تكون السمة : مضاعف ل : القيمة.',
    'not_in' => 'السمة : المحددة غير صالحة.',
    'not_regex' => 'تنسيق :سمة غير صالح.',
    'numeric' => 'يجب أن تكون السمة : رقما.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل السمة : موجودا.',
    'regex' => 'تنسيق السمة : غير صالح.',
    'required' => 'الحقل :سمة مطلوب.',
    'required_if' => 'الحقل : السمة مطلوب عندما: آخر هو : القيمة.',
    'required_unless' => 'الحقل : السمة مطلوب ما لم يكن : الآخر في : القيم.',
    'required_with' => 'الحقل : السمة مطلوب عند وجود : القيم.',
    'required_with_all' => 'الحقل : السمة مطلوب عند وجود : القيم.',
    'required_without' => 'يكون الحقل : السمة مطلوبا عند عدم وجود : القيم.',
    'required_without_all' => 'الحقل : السمة مطلوب عند عدم وجود أي من : القيم.',
    'prohibited' => 'حقل : السمة محظور.',
    'prohibited_if' => 'يحظر الحقل : السمة عندما يكون : الآخر هو : القيمة.',
    'prohibited_unless' => 'الحقل : السمة محظور ما لم يكن : الآخر في : القيم.',
    'prohibits' => 'الحقل : السمة يمنع: الآخرين من التواجد.',
    'same' => 'يجب أن تتطابق السمة :و : أخرى.',
    'size' => [
        'numeric' => 'يجب أن تكون السمة : الحجم .',
        'file' => 'يجب أن تكون السمة : حجم كيلوبايت.',
        'string' => 'يجب أن تكون السمة : حجم الأحرف.',
        'array' => 'يجب أن تحتوي السمة :: حجم العناصر .',
    ],
    'starts_with' => 'يجب أن تبدأ السمة : بأحد القيم التالية: :.',
    'string' => 'يجب أن تكون السمة :كلمة.',
    'timezone' => 'يجب أن تكون السمة : منطقة زمنية صالحة.',
    'unique' => 'تم بالفعل أخذ السمة :.',
    'uploaded' => 'فشل تحميل السمة : .',
    'url' => 'يجب أن تكون السمة :عنوان URL صالحا.',
    'uuid' => 'يجب أن تكون السمة : UUID صالحة.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
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
'active_url' => ':attribute ليس عنوان URL صحيحًا.',
'after' => ':attribute يجب أن يكون تاريخًا بعد :date.',
'after_or_equal' => ':attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
'alpha' => ':attribute يجب أن يحتوي على أحرف فقط.',
'alpha_dash' => ':attribute يجب أن يحتوي على أحرف، أرقام، وعلامات ناقص وتحتية فقط.',
'alpha_num' => ':attribute يجب أن يحتوي على أحرف وأرقام فقط.',
'array' => ':attribute يجب أن يكون مصفوفة.',
'before' => ':attribute يجب أن يكون تاريخًا قبل :date.',
'before_or_equal' => ':attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
'between' => [
    'numeric' => ':attribute يجب أن يكون بين :min و :max.',
    'file' => ':attribute يجب أن يكون بين :min و :max كيلوبايت.',
    'string' => ':attribute يجب أن يكون بين :min و :max حرفًا.',
    'array' => ':attribute يجب أن يحتوي على :min إلى :max عنصر.',
],
'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خاطئًا.',
'confirmed' => ':attribute غير متطابق مع تأكيد كلمة المرور.',
'date' => ':attribute ليس تاريخًا صحيحًا.',
'date_equals' => ':attribute يجب أن يكون تاريخًا مساويًا لـ :date.',
'date_format' => ':attribute لا يتطابق مع الصيغة :format.',
'different' => ':attribute و :other يجب أن يكونوا مختلفين.',
'digits' => ':attribute يجب أن يتكون من :digits أرقام.',
'digits_between' => ':attribute يجب أن يكون بين :min و :max أرقام.',
'dimensions' => ':attribute يحتوي على أبعاد صورة غير صالحة.',
'distinct' => ':attribute لديه قيمة مكررة.',
'email' => 'برجاء إدخال عنوان بريد إلكتروني صحيح في :attribute.',
'ends_with' => ':attribute يجب أن ينتهي بأحد القيم التالية: :values.',
'exists' => ':attribute المحدد غير صالح.',
'file' => ':attribute يجب أن يكون ملفًا.',
'filled' => 'يجب أن يكون حقل :attribute مملوءًا.',
'gt' => [
    'numeric' => ':attribute يجب أن يكون أكبر من :value.',
    'file' => ':attribute يجب أن يكون أكبر من :value كيلوبايت.',
    'string' => ':attribute يجب أن يكون أكبر من :value حرفًا.',
    'array' => ':attribute يجب أن يحتوي على أكثر من :value عنصر.',
],
'gte' => [
    'numeric' => ':attribute يجب أن يكون أكبر من أو يساوي :value.',
    'file' => ':attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
    'string' => ':attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
    'array' => ':attribute يجب أن يحتوي على :value عنصر أو أكثر.',
],
'image' => ':attribute يجب أن يكون صورة.',
'in' => ':attribute المحدد غير صالح.',
'in_array' => 'حقل :attribute غير موجود في :other.',
'integer' => ':attribute يجب أن يكون عددًا صحيحًا.',
'ip' => ':attribute يجب أن يكون عنوان IP صحيحًا.',
'ipv4' => ':attribute يجب أن يكون عنوان IPv4 صحيحًا.',
'ipv6' => ':attribute يجب أن يكون عنوان IPv6 صحيحًا.',
'json' => ':attribute يجب أن يكون نص JSON صحيحًا.',
'lt' => [
    'numeric' => ':attribute يجب أن يكون أقل من :value.',
    'file' => ':attribute يجب أن يكون أقل من :value كيلوبايت.',
    'string' => ':attribute يجب أن يكون أقل من :value حرفًا.',
    'array' => ':attribute يجب أن يحتوي على أقل من :value عنصر.',
],
'lte' => [
    'numeric' => ':attribute يجب أن يكون أقل من أو يساوي :value.',
    'file' => ':attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
    'string' => ':attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
    'array' => ':attribute يجب أن لا يحتوي على أكثر من :value عنصر.',
],
'max' => [
    'numeric' => ':attribute يجب ألا يكون أكثر من :max.',
    'file' => ':attribute يجب ألا يكون أكبر من :max كيلوبايت.',
    'string' => ':attribute يجب ألا يكون أكبر من :max حرفًا.',
    'array' => ':attribute يجب ألا يحتوي على أكثر من :max عنصر.',
],
'mimes' => ':attribute يجب أن يكون ملف من النوع: :values.',
'mimetypes' => ':attribute يجب أن يكون ملف من النوع: :values.',
'min' => [
    'numeric' => ':attribute يجب أن يكون على الأقل :min.',
    'file' => ':attribute يجب أن يكون على الأقل :min كيلوبايت.',
    'string' => ':attribute يجب أن يكون على الأقل :min حرفًا.',
    'array' => ':attribute يجب أن يحتوي على الأقل :min عنصر.',
],
'multiple_of' => ':attribute يجب أن يكون مضاعفًا للقيمة :value.',
'not_in' => ':attribute المحدد غير صالح.',
'not_regex' => 'صيغة :attribute غير صالحة.',
'numeric' => ':attribute يجب أن يكون رقمًا.',
'password' => 'كلمة المرور غير صحيحة.',
'present' => 'يجب أن يكون حقل :attribute موجودًا.',
'regex' => 'صيغة :attribute غير صالحة.',
'required' => 'حقل :attribute مطلوب.',
'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
'required_unless' => 'حقل :attribute مطلوب ما لم يكون :other ضمن :values.',
'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
'required_with_all' => 'حقل :attribute مطلوب عند وجود :values.',
'required_without' => 'حقل :attribute مطلوب عند عدم وجود :values.',
'required_without_all' => 'حقل :attribute مطلوب عند عدم وجود أي من :values.',
'prohibited' => 'حقل :attribute ممنوع.',
'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكون :other ضمن :values.',
'same' => ':attribute و :other يجب أن يتطابقا.',
'size' => [
    'numeric' => ':attribute يجب أن يكون :size.',
    'file' => ':attribute يجب أن يكون :size كيلوبايت.',
    'string' => ':attribute يجب أن يكون :size حرفًا.',
    'array' => ':attribute يجب أن يحتوي على :size عنصر.',
],
'starts_with' => ':attribute يجب أن يبدأ بأحد القيم التالية: :values.',
'string' => ':attribute يجب أن يكون نصًا.',
'timezone' => ':attribute يجب أن يكون منطقة زمنية صحيحة.',
'unique' => ':attribute تم استخدامه مسبقًا.',
'uploaded' => 'فشل في تحميل :attribute.',
'url' => 'صيغة :attribute غير صالحة.',
'uuid' => ':attribute يجب أن يكون UUID صحيحًا.',
'max' => ':attribute يجب أن يكون أقل من 255 حرفًا.',


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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

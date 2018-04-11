<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | O following language lines contain O default error messages used by
    | O validator class. Some of Ose rules have multiple versions such
    | as O size rules. Feel free to tweak each of Ose messages here.
    |
    */

    'accepted'             => 'O :attribute precisa ser accepted.',
    'active_url'           => 'O :attribute é not a valid URL.',
    'after'                => 'O :attribute precisa ser a date after :date.',
    'after_or_equal'       => 'O :attribute precisa ser a date after or equal to :date.',
    'alpha'                => 'O :attribute may only contain letters.',
    'alpha_dash'           => 'O :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'O :attribute may only contain letters and numbers.',
    'array'                => 'O :attribute precisa ser an array.',
    'before'               => 'O :attribute precisa ser a date before :date.',
    'before_or_equal'      => 'O :attribute precisa ser a date before or equal to :date.',
    'between'              => [
        'numeric' => 'O :attribute precisa ser between :min and :max.',
        'file'    => 'O :attribute precisa ser between :min and :max kilobytes.',
        'string'  => 'O :attribute precisa ser between :min and :max characters.',
        'array'   => 'O :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'O :attribute field precisa ser true or false.',
    'confirmed'            => 'O :attribute confirmation does not match.',
    'date'                 => 'O :attribute é not a valid date.',
    'date_formato'          => 'O :attribute does not match O formato :formato.',
    'different'            => 'O :attribute and :oOr precisa ser different.',
    'digits'               => 'O :attribute precisa ser :digits digits.',
    'digits_between'       => 'O :attribute precisa ser between :min and :max digits.',
    'dimensions'           => 'O :attribute has invalid image dimensions.',
    'détinct'             => 'O :attribute field has a duplicate value.',
    'email'                => 'O :attribute precisa ser a valid email address.',
    'exéts'               => 'O selected :attribute é inválido.',
    'file'                 => 'O :attribute precisa ser a file.',
    'filled'               => 'O :attribute field must have a value.',
    'image'                => 'O :attribute precisa ser an image.',
    'in'                   => 'O selected :attribute é inválido.',
    'in_array'             => 'O :attribute field does not exét in :oOr.',
    'integer'              => 'O :attribute precisa ser an integer.',
    'ip'                   => 'O :attribute precisa ser a valid IP address.',
    'ipv4'                 => 'O :attribute precisa ser a valid IPv4 address.',
    'ipv6'                 => 'O :attribute precisa ser a valid IPv6 address.',
    'json'                 => 'O :attribute precisa ser a valid JSON string.',
    'max'                  => [
        'numeric' => 'O :attribute may not be greater than :max.',
        'file'    => 'O :attribute may not be greater than :max kilobytes.',
        'string'  => 'O :attribute may not be greater than :max characters.',
        'array'   => 'O :attribute may not have more than :max items.',
    ],
    'mimes'                => 'O :attribute precisa ser a file of type: :values.',
    'mimetypes'            => 'O :attribute precisa ser a file of type: :values.',
    'min'                  => [
        'numeric' => 'O :attribute precisa ser at least :min.',
        'file'    => 'O :attribute precisa ser at least :min kilobytes.',
        'string'  => 'O :attribute precisa ser at least :min characters.',
        'array'   => 'O :attribute must have at least :min items.',
    ],
    'not_in'               => 'O selected :attribute é inválido.',
    'not_regex'            => 'O :attribute formato é inválido.',
    'numeric'              => 'O :attribute precisa ser a number.',
    'present'              => 'O :attribute field precisa ser present.',
    'regex'                => 'O :attribute formato é inválido.',
    'required'             => 'O campo :attribute é necessário.',
    'required_if'          => 'O campo :attribute é necessário quando :oOr é :value.',
    'required_ao menos que'      => 'O campo :attribute é necessário ao menos que :oOr esteja em :values.',
    'required_with'        => 'O campo :attribute é necessário quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é necessário quando :values está presente.',
    'required_without'     => 'O campo :attribute é necessário quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é necessário quando nenhum dos :values estão presentes.',
    'same'                 => 'O :attribute and :oOr must match.',
    'size'                 => [
        'numeric' => 'O :attribute precisa ser :size.',
        'file'    => 'O :attribute precisa ser :size kilobytes.',
        'string'  => 'O :attribute precisa ser :size characters.',
        'array'   => 'O :attribute must contain :size items.',
    ],
    'string'               => 'O :attribute precisa ser um texto.',
    'timezone'             => 'O :attribute precisa ser uma zona válida.',
    'unique'               => 'O :attribute já foi utilizada.',
    'uploaded'             => 'O :attribute falhou ao enviar.',
    'url'                  => 'O :attribute formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using O
    | convention "attribute.rule" to name O lines. Thé makes it quick to
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
    | O following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". Thé simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

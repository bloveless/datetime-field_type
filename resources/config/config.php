<?php

return [
    'mode'        => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'disabled' => 'edit',
        'config'   => [
            'options' => [
                'datetime' => 'anomaly.field_type.datetime::config.mode.datetime',
                'date'     => 'anomaly.field_type.datetime::config.mode.date',
                'time'     => 'anomaly.field_type.datetime::config.mode.time'
            ]
        ]
    ],
    'date_format' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'l, j F, Y|DD, d MM, yy' => function () {
                    return date('l, j F, Y'); // Friday, 10 July, 2015
                },
                'j F, Y|d MM, yy'        => function () {
                    return date('j F, Y'); // 10 July, 2015
                },
                'j M, y|d M, y'          => function () {
                    return date('j M, y'); // 10 Jul, 15
                },
                'm/d/Y|mm/dd/yy'         => function () {
                    return date('m/d/Y'); // 07/10/2015
                },
                'Y-m-d|mm/dd/yy'         => function () {
                    return date('Y-m-d'); // 2015-07-10
                }
            ]
        ]
    ],
    'time_format' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'g:i A|h:i A' => function () {
                    return date('g:00 A'); // 4:00 PM
                },
                'G:i|H:i'     => function () {
                    return date('G:00'); // 16:00
                }
            ]
        ]
    ],
    'step'        => [
        'type'     => 'anomaly.field_type.integer',
        'required' => true,
        'config'   => [
            'default_value' => 15,
            'min'           => 1
        ]
    ],
    'min'         => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => false
        ]
    ],
    'max'         => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => false
        ]
    ]
];

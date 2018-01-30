<?php

/**
 * General info
 */
use deflou\interfaces\services\IServiceConfig as Schema;

return [
    Schema::CONFIG__ROOT => [
        Schema::CONFIG__NAME => '',
        Schema::CONFIG__TITLE => '',
        Schema::CONFIG__DESCRIPTION => '',
        Schema::CONFIG__SERVICE_RESOLVER => 'class',
        Schema::CONFIG__SERVICE_DESCRIBER => 'class',
        Schema::CONFIG__SERVICE_VERSION => '',
        Schema::CONFIG__SERVICE_AUTHORS => [
            [
                "name" => "DeFlou developer",
                "email" => "deflou.dev@gmail.com"
            ]
        ],
        Schema::CONFIG__SERVICE_OPTIONS => [
            [
                Schema::CONFIG__NAME => '',
                Schema::CONFIG__TITLE => '',
                Schema::CONFIG__DESCRIPTION => ''
            ]
        ],
        Schema::CONFIG__SERVICE_EVENTS => [
            [
                Schema::CONFIG__NAME => '',
                Schema::CONFIG__TITLE => '',
                Schema::CONFIG__DESCRIPTION =>'',
                Schema::CONFIG__SERVICE_EVENT_PARAMETERS => [
                    [
                        Schema::CONFIG__NAME => '',
                        Schema::CONFIG__TITLE => '',
                        Schema::CONFIG__DESCRIPTION => '',
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,// or use defined class
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__GREATER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LOWER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ]
                ],
                Schema::CONFIG__SERVICE_EVENT_DISPATCHERS => [
                    'class name' => [
                        // options
                    ]
                ]
            ]
        ],
        Schema::CONFIG__SERVICE_ACTIONS => [
            [
                // definitely the same as events
            ]
        ],
    ]
];

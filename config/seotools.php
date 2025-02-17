<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Juan Eduardo Gómez", // set false to total remove
            'description'  => 'Pagina web del  ingeniero de sistemas Juan Eduardo Gómez', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => 'http://juangomez.gridsoft.co', // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Juan Eduardo Gómez', // set false to total remove
            'description' => 'Pagina web del  ingeniero de sistemas Juan Eduardo Gómez', // set false to total remove
            'url'         => 'http://juangomez.gridsoft.co', // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];

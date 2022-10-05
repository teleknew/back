<?php
return [
    'api/pageOne/save'                                        => [
        'controller' => 'PageOne',
        'action'     => 'saveList',
        'pathType'   => 1,
    ],
    'api/manualCorrection/list'                                        => [
        'controller' => 'manualCorrection',
        'action'     => 'loadList',
        'auth'       => true,
        'pathType'   => 1,
    ],
        'api/desktop/widgets/data'                                         => [
        'controller' => 'Desktop',
        'action'     => 'getWidgetData',
        'pathType'   => 2,
        'auth'       => true,
    ],
    'api/auth/captcha'                                                 => [
        'controller' => 'Auth\\Controllers\\LoginController',
        'action'     => 'getCaptcha',
        'auth'       => false,
        'pathType'   => 3,
        'user_info_provider' => 'User'
    ],
    'api/dt/books/dsInquiry'                                           => [
        'controller' => 'DtBook',
        'action'     => 'getDsInquiryBook',
        'pathType'   => 1,
    ],
    'api/dt/books/dsListLoad'                                          => [
        'controller' => 'DtBook',
        'action'     => 'getDsListLoadBook',
        'pathType'   => 1,
    ],
    'api/dt/books/dsUpListLoad'                                        => [
        'controller' => 'DtBook',
        'action'     => 'getDsUpListLoadBook',
        'pathType'   => 1,
    ],
];
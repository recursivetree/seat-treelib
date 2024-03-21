<?php
return [
    'profile' => [
        'name'          => 'user',
        'label'         => 'treelib::treelib.user_sidebar_menu',
        'icon'          => 'fas fa-user',
        'route_segment' => 'profile',
        'entries'       => [
            //hack user profile link into seat
            [
                'name'  => 'profile',
                'label' => 'web::seat.profile',
                'icon'  => 'fas fa-user',
                'route' => 'seatcore::profile.view',
            ],
        ]
    ]
];
<?php defined('SYSPATH') or die('No direct script access.');

    return array(
        'like'              => array(
            'data-href'          => URL::site(NULL, TRUE),
            'data-send'          => 'true',
//            'layout'        => 'standard',
            'data-show-faces'    => 'true',
            'data-width'         => 450, //px
//            'action'        => 'like',
//            'font'          => 'verdana',
//            'colorscheme'   => 'light'
        ),
        'send'              => array(
            'href'          => URL::site(NULL, TRUE),
            'font'          => 'verdana',
            'colorscheme'   => 'light'            
        ),
        'subscribe'         => array(
            'href'          => 'https://www.facebook.com/zuck', // Valid Facebook User profile URL
            'layout'        => 'standard',
            'show_faces'    => 'true',
            'colorscheme'   => 'light',
            'font'          => 'verdana',
            'width'         => 450
        ),
        'comments'          => array(
            'href'          => URL::site(NULL, TRUE),
            'num_posts'     => 2,
            'width'         => 500,
            'colorscheme'   => 'light',
            'mobile'        => 'false'
        ),
        'activity'          => array(
            'site'          => URL::site(NULL, TRUE),
            'width'         => 300,
            'height'        => 300,
            'header'        => 'true',
            'colorscheme'   => 'light',
            'font'          => 'verdana',
            'border_color'  => '#1A3C6C',
            'recommendations'   => 'false',
            'linktarget'    => '_blank',
        ),
        'recommendations'   => array(
            'site'          => URL::site(NULL, TRUE),
            'width'         => 300,
            'height'        => 300,
            'header'        => 'true',
            'colorscheme'   => 'light',
            'font'          => 'verdana',
            'border_color'  => '#1A3C6C',
            'linktarget'    => '_blank',
        ),
        'like-box'          => array(
            'data-href'          => URL::site(NULL, TRUE),
            'data-width'         => 300,
            'data-height'        => '',
//            'colorscheme'   => 'light',
            'data-show-faces'    => 'true',
            'data-stream'        => 'true',
            'data-header'        => 'true',
            'data-border-color'  => '#1A3C6C',
//            'force_wall'    => 'false'
        ),
        'login'             => array(
            'show-faces'    => 'true',
            'width'         => 200,
            'max-rows'      => 1,
            'scope'         => '',
            'registration-url'  => ''
        ),
        'registration'      => array(
            'fields'        => 'name,email',
            'redirect-uri'  => '',
            'width'         => 615,
            'onvalidate'    => ''
        ),
        'facepile'          => array(
            'href'          => URL::site(NULL, TRUE),
            'app_id'        => Kohana_Facebook::instance()->getAppID(),
            'max_rows'      => 1,
            'width'         => 200,
            'size'          => 'small',
            'colorscheme'   => 'light'
        ),
        'live-stream'       => array(
            'event_app_id'  => Kohana_Facebook::instance()->getAppID(),
            'width'         => 400,
            'height'        => 500,
            'xid'           => '',
            'via_url'       => '',
            'always_post_to_friends' => 'false'
        )
    );
    
<?php defined('SYSPATH') or die('No direct script access.');

    $facebookFonts          = array('arial', 'lucida grande', 'segoe ui', 'tahoma', 'trebuchet ms', 'verdana');
    $facebookColorscheme    = array('light', 'dark');
    $facebookLayouts        = array('standard', 'button_count', 'box_count');
    $facebookBoolean        = array('true', 'false');
    $facebookLinkTargets    = array('_blank', '_top', '_parent');
    $facebookScope          = array(
        'user_about_me', 'friends_about_me', 'user_activities', 'friends_activities', 'user_birthday', 'friends_birthday',
        'user_checkins', 'friends_checkins', 'user_education_history', 'friends_education_history', 'user_events', 'friends_events',
        'user_groups', 'friends_groups', 'user_hometown', 'friends_hometown', 'user_interests', 'friends_interests',
        'user_likes', 'friends_likes', 'user_location', 'friends_location', 'user_notes', 'friends_notes', 'user_online_presence',
        'friends_online_presence', 'user_photo_video_tags', 'friends_photo_video_tags', 'user_photos', 'friends_photos',
        'user_questions', 'friends_questions', 'user_relationships', 'friends_relationships', 'user_relationship_details',
        'friends_relationship_details', 'user_religion_politics', 'friends_religion_politics', 'user_status', 'friends_status',
        'user_videos', 'friends_videos', 'user_website', 'friends_website', 'user_work_history', 'friends_work_history',
        'email', 'read_friendlists', 'read_insights', 'read_mailbox', 'read_requests', 'read_stream', 'xmpp_login', 'ads_management',
        'create_event', 'manage_friendlists', 'manage_notifications', 'offline_access', 'publish_checkins', 'publish_stream',
        'rsvp_event', 'sms', 'publish_actions', 'manage_pages'
    );
    $facebookBasicInformation = array('name', 'email', 'location', 'birthday', 'gender');
    $facebookSize = array('small', 'large');
    
    
//    <div class="fb-like" data-href="http://dev.bw-foto.pl" data-send="true" data-width="450" data-show-faces="true"></div>
    
    return array(
        'like'              => array(
            'data-send'     => $facebookBoolean,
//            'layout'        => $facebookLayouts,
            'data-show-faces'   => $facebookBoolean,
//            'action'        => array(
//                'like',
//                'recommend'
//            ),
//            'font'          => $facebookFonts,
//            'colorscheme'   => $facebookColorscheme,
        ),
        'send'              => array(
            'font'          => $facebookFonts,
            'colorscheme'   => $facebookColorscheme,
        ),
        'subscribe'         => array(
            'layout'        => $facebookLayouts,
            'show_faces'    => $facebookBoolean,
            'colorscheme'   => $facebookColorscheme,
            'font'          => $facebookFonts,
        ),
        'comments'          => array(
            'colorscheme'   => $facebookColorscheme,
            'mobile'        => $facebookBoolean,
        ),
        'activity'          => array(
            'header'        => $facebookBoolean,
            'colorscheme'   => $facebookColorscheme,
            'font'          => $facebookFonts,
            'recommendations'   => $facebookBoolean,
            'linktarget'    => $facebookLinkTargets,
        ),
        'recommendations'   => array(
            'header'        => $facebookBoolean,
            'colorscheme'   => $facebookColorscheme,
            'font'          => $facebookFonts,
            'linktarget'    => $facebookLinkTargets,
        ),
        
//        <div class="fb-like-box" data-href="http://www.facebook.com/platform" data-width="292"></div>
        'like-box'          => array(
//            'colorscheme'       => $facebookColorscheme,
            'data-show-faces'    => $facebookBoolean,
            'data-stream'        => $facebookBoolean,
            'data-header'        => $facebookBoolean,
        ),
        'login'             => array(
            'show-faces'    => $facebookBoolean,
            'scope'         => $facebookScope
        ),
        'registration'      => array(),
        'facepile'          => array(
            'size'          => $facebookSize,
            'colorscheme'   => $facebookColorscheme
        ),
        'live-stream'       => array(
            'always_post_to_friends' => $facebookBoolean
        )        
    );
<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'vayvo_child_progression_studios_enqueue_styles' );
function vayvo_child_progression_studios_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
#页面跳转
//function custom_external_redirect() {
	
 //   if (is_page('Home')) {
 //       wp_redirect('https://www.google.com', 301);
//        exit(); // 确保脚本在重定向后停止执行
//    }
//}
//add_action('template_redirect', 'custom_external_redirect');

// Your code goes below
//

// 在主题文件中使用的代码，比如functions.php
/*
function check_referer() {
    $target_site = 'https://www.52ypws.xyz'; // 目标网站的URL
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    // 如果HTTP引用存在并且与目标网站匹配
    if (!empty($referer) && strpos($referer, $target_site) !== false) {
        // 执行你的操作，比如显示特定内容或执行特定逻辑
        echo 'Welcome from the target site!';
    } else {
        // 执行其他操作，比如显示默认内容或重定向到其他页面
        echo 'Welcome from elsewhere!';
    }
}

// 在需要的地方调用这个函数
check_referer();
*/
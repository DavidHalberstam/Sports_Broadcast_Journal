## Feed Merge Tags
Automatically generate links from RSS feed

    <div class="mcnTextContent">
    *|FEED:http://www.sportsbroadcastjournal.com/feed/ [$count=8,$content=titles,$constrain_rss_img=150]|*
    </div>

MailChimp RSS Feed Tags

     <div class="mcnTextContent">
    *|FEEDBLOCK:http://www.sportsbroadcastjournal.com/feed/|*

    *|FEEDITEMS:[$count=6]|*

    <a href="*|FEEDITEM:URL|*">*|FEEDITEM:TITLE|*</a><br>

    By *|FEEDITEM:AUTHOR|* on *|FEEDITEM:DATE|*<br><br>

    *|FEEDITEM:IMAGE|*

    *|FEEDITEM:SHARE:Facebook,Twitter,Digg|*<br><br>

    *|END:FEEDITEMS|*  
       
 Send images to RSS in functions.php
 
    function rss_post_thumbnail($content) {
    global $post;
    if(has_post_thumbnail($post->ID)) {
    $content = '<p>' . get_the_post_thumbnail($post->ID) .
    '</p>' . get_the_content();
    }
    return $content;
    }
    add_filter('the_excerpt_rss', 'rss_post_thumbnail');
    add_filter('the_content_feed', 'rss_post_thumbnail');

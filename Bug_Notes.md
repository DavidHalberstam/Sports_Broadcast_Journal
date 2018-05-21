## Bug Notes: 

<em>Note: To enable the full Error Log, enable Debug options in the wp-config file via FTP.</em>

- *4/14/18*- The posts should not duplicate.  This can only be done if the plugins are removed and substituted to go in the main loop.
- *4/14/18*- The related posts encounter a bug if more than 3 are displayed.  Instead of floating to the left, the containers sometimes do not load correctly in a straight line.  This is likely caused by the different lengths of titles, that can range from 1-3 lines.  Setting a height for the container and using inline-block constraints might fix this.  Use a wrapper div with overlay:hidden to fix.

## Theme Status:

- The child theme has some minor wp translation issues that need to be cleaned up via search and replace
- www.sports-announcers.com is verified with Google Webmasters for both http and https versions of the site.  www.sportsbroadcastjournal needs to a ssl certificate before it can be moved to https

## Database Maintenance and Backups:

- The database was last optimized on 4/18/2018
- The site files and database were backed up on 4/18/2018
- Github Theme backup on 5/20/2018

## Theme Customization Notes:

- Some unnecessary flashy features in the parent theme were removed, modified, or overwritten in the settings of the child theme.  This could cause complications if the premium theme options are purchased.
- The SSL https version of the site is stored in the /secure folder, separate from the /public repository.  The public directory has a file called .well-known, while the secure directory does not.  The public .htaccess file redirects to force https. If https is removed, the .htaccess should be adjusted
- If the Redux framework and config demo are registered in the functions.php, the settings options work correctly, but a critical bug sometimes occurs with the dashboard theme editor.
- To adapt to premium features, most likely the pre_get_posts settings would need to be removed from functions.php, and the grid in index loop would need to be removed in favor of the default index.php in the parent theme.
- Modified main index loop to include a lightbox grid with a post offset workaround.  This is untested with the built-in premium theme options, and could cause complications.
- A Must-use theme plugin for caching has been removed, since other caching and optimization plugins are in use
- Some extra PHP files for Jetpack are unnecessary and can be removed
- The default comments section has been overridden by a plugin.  The database for the comments will need to be monitored.  If the site gets a lot of traffic, it may be necessary to backup data or move to a private server.

## Resolved:

- *5/21/18*- Responsive images set to proportionally scale aspect ratio.  Fix involved using a hack that takes advantage of the fact that padding percentages are calculated relative to element width.  Setting a 56% padding with 100% width and height will lock the aspect ratio and scale without deformation or squashing.  The background image still needs a link overlay to be applied by wrapping the image in the overlay container.
- *5/20/18*- Added Facebook Like JS to header and single post
- *5/11/18*- A 302 Temporary Redirect chain appeared, adding a string to a stylesheet.css file.  The root of the issue was traced back to the header.php file.  The href link needed to be changed to point to the entire root of the style.css directory.
- *4/30/18*- The text overlay was causing the bottom portion of the permalink overlay on the grid images to become unselectable, due to the linked div using position:block.  Copying the div with the permalink again after the text div seems to cover the entire photo with a link overlay. 
- *4/25/18*- Comments imported
- *4/18/18*- The Yoast generated sitemap exprienced an issue where it would not display the www part of the web address.  This had to be resolved by disabling the XML sitemap, clearing out browser caching, refreshing the permalinks, and then turning the XML sitemap generator back on.
- *4/17/18*- Insecure mixed content was changed to https.  Code to force https was inserted into the .htaccess and wp-config files, redirecting all content to https.
- *4/17/18*- Image backgrounf thumbs needed to be center-aligned using background-position CSS.
- *4/16/18*- The pagination is adding an extra blank page at the end, again.  It is likely another issue related to the offset.  The $offset=$option_offset; seems to be the culprit.  Inexplicably this adds an offset to the last page, even though switching the customizer control $option_offset; with a regular number value works without adding the blank page. 
- *4/15/18*- The customizer extension for grid settings needed to be declared as a variable.  This was fixed by getting rid of the action hook and just setting the return variable as $option_pg_number = get_theme_mod('np_posts_per_page', '5');.  The  $option_pg_number variable then gets substituted with the $posts_per_page variable. 
- *4/14/18*- The Top 10 plugin has not performed as well as expected in testing.  The settings need to be adjusted to update more frequently than 24-48 hour intervals, but not so frequently that empty space occurs when visitors are scarce
- *4/14/18*- Adjusted the boxed layout settings to work responsively and removed the superfluous menu masthead that was hidden in the .np-header-menu-wrapper::before and ::after CSS.
- *4/5/18*- The parent template-functions.php file needs to be overridden by the child-theme to display the modified underline color tags.  The color tag can be switched to background to create a button look.  This was achieved by deregistering an action hook in the template-functions.php, then requiring a custom template with a different function name in the child theme.
- *4/4/18*- Tags were mysteriously appearing in the fourth footer widget, despite lacking any evident divs or hooks. The source turned out to be an innocuous snippet the_tags() buried in the sidebar-footer.php
- *4/8/18*- When switching to Cloudflare's free flexible https encryption, the admin dashboard would disappear or the theme editor would break completely.  At the time, the bug was thought to have something to do with a misconfigured SSL certificate.  It was later determined that adding the demo version of Redux caused an error with the theme editor in the admin dashboard, despite the user-end website performance being unaffected in any negative manner.  The bug prevented the editor from loading properly, resulting in a blank page for css and php files.  It was likely a development mode issue, as that version of the Redux core was intended to be used as a framework for developers, not an add on extension plugin.
- *4/7/18*- Certain plugins need to add !important to override styling settings in CSS.
- *4/7/18*- The featured posts grid needed to be nested inside a container div with overflow:hidden in order to fix a bug where the first post in the offset main loop would disappear into the grid div when placed in the same primary section.
- *4/6/18*- The search results pagination also needed to be fixed using the pre_get_posts method.
- *4/6/18*- The categories archive pagination is being offset by the pre_get_posts main loop function, causing posts to be skipped or causing a 404 on the second page if the numer of posts is less than the offset number.  The fix involved creating a separate pre_get_posts function for the archives, avoiding conflicting shared arguments with the main pre_get_posts function, which would fix one issue but overwrite the offset of the other.
- *4/5/18*- The tag color is controlled via css in the template-functions.php file.  The background variable was changed to border-bottom.  !important is needed if overriding the default white text color.
- *4/4/18*- The Yoast XML sitemap is hidden in the settings
- *3/25/18*- Fixed bug with same dates not displaying on following posts by adding an extra filter to the default get_the_date function.
- *3/24/18*- Long post titles cause double spacing to occur on main feed posts.  Added max and min widths for media queries.
- *3/24/18*- On smaller responsive screens, the first offset entry in the main loop disappears. 
- *3/23/18*- Body captions are not aligning with center aligned images
- *3/22/18*- The background behind the main text areas is clear.  These need to be filled in with a solid background color for when the background is in use.
- *3/22/18*- Caching causes delays for development, as older cached versions of the site will often not update immediately when refreshed.  The CloudFlare status needs to be put in developer mode before purging the cache
- *3/22/18*- 301 Redirect loop for images appeared, then somehow went away.  It may be linked to autoptimize plugin.
- *3/16/18*- Offset Pagination requires a special fix in the functions.php file

<?php

/**
 * Github : 
 * 
 */
// echo "# baagicha_blog" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/codingtarun/baagicha_blog.git
// git push -u origin main


/**
 * GET PATH TO THE THEME FOLDER : 

1. echo get_template_directory_uri()
2. bloginfo('template_directory');

Custom menu : 

1. register_nav_menus()
2. wp_nav_menu()

the_title(); -> show current page title 


Show data on page which is stored to the page from admin panel.

the_content(); -> print data to the page.
get_the_content(); -> store data but does't show , use 'echo' to show data.

Any page we create in admin panel the default template which opens up is 'page.php'

By default 'thumbnail-image' is not enabled for custom themes.To enable add following wp function in functions.php file : 

add_theme_support('post-thumbnails');

Displaying thumbnail in front end (page / post)

the_post_thumbnail(); -> default image size
the_post_thumbnail('thumbnail'); -> 150x150
the_post_thumbnail('medium'); -> 300x300
the_post_thumbnail('large'); -> 1024x1024
the_post_thumbnail('full'); -> Original image resolution
the_post_thumbnail(array(100,100)); -> Custom image size

Get image path : 

wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

wp_get_attachment_image_src(the_post_thumbnail(array(100,100)))

Adding custom header image logo : 

1. add_theme_support('custom-header');


Using a custom template for page : 

1. add a new file named 'template-pageName.php' .
2. to the top of the page add comment // Template Name : TemplateName
3. go to the page and select desired template.

To show post we need to create a file name 'single.php' which will be called by default for every post type.
For specific post type create 'single-postTypeName.php' file for single post page. 

Highlighting active menu :  
1. ul#custom_link_class

Comments : 
1. comments_template();
2. style using classes declared

Displaying Posts Category wise : 
1. create 'category.php' page and use same code and 'index.php' page.

Creating Dynamic title : 
1. wp_title();
2. bloginfo('name');
3. bloginfo('description);


GITHUB : 

or create a new repository on the command line
echo "# wp_baagicha_template" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/codingtarun/wp_baagicha_template.git
git push -u origin main
…or push an existing repository from the command line
git remote add origin https://github.com/codingtarun/wp_baagicha_template.git
git branch -M main
git push -u origin main
 * 
 * 
 * 
 */

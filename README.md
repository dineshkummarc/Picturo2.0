Picturo
=======

## About the Application
Picturo is a stupidly simple, blazing fast, flat file photo cum Album gallery running. No admin, you just need to drop your pictures in the content to publish your pictures. Picturo is heavily inspired by [Pico](https://github.com/gilbitron/Pico), but it’s for Photos and Albums.

## Demo
You can try Picturo here [Demo](http://picturomobile.infinityfreeapp.com/), actually the demo is private but you can login with the following credentials : <br/>
<b>
``user : admin`` <br/>
``password : admin``
</b>

## Requirements
To run Picturo you will need <b>``PHP 5.2.4+``</b> and <b>``GD Library``</b> on your server. If you’re running Apache you will also require <b>``mod_rewrite``</b> to be enabled.

## Installation
First download Picturo and extract it on your server. Change ownership and permission of the cache folder to the user of your web server <b>``set permissions to 777``</b> so you’ll be able to delete cache if needed.

### Upload your folders of pictures into content.
Customize settings by editing config.php in the root folder of Picturo. To override a setting simply uncomment it in config.php and set your custom value.

### Privatize your site
Picturo can keep your galleries private, you just have to edit config.php and set private variable to true and add a user. <b>``By default, there is an admin user with the password “admin” in the configuration file``</b>. Just uncomment the two following lines to enable private galleries : <br/>
<b>``$config['private'] = true;`` <br/>
``$config['private_pass']['admin'] = 'd033e22ae348aeb5660fc2140aec35850c4da997';`` <br/></b>
Passwords are SHA-1 strings, you can generate your passwords online here.

### Add galleries
Your photos must be stored in content folder, if you want to add a gallery you just need to create a folder within your content folder. Galleries thumbnail are generated with the first picture found in the folder.

### Create your own theme
Picturo supports themes with Twig as templating engine they are located in the themes folder. All themes must include two files : <br/>
<b>``gallery.html`` <br/>
``detail.html`` <br/></b>
If you want to keep your galleries private, you will need a third file <b>“login.html”</b>. Each file will have a basic set of variable, plus specific variable.

Default variables, available for all files : <br/>
<b>
``{{ base_url }} : The URL of your site`` <br/>
``{{ theme_url }} : The URL of your active theme`` <br/>
``{{ site_title }} : The title of your website`` <br/>
``{{ username }} : The logged in username (if you use private gallery)`` <br/></b>

Variables for gallery.html, which will list all folders and pictures : <br/>
<b>
``{{ url }} : The current url`` <br/>
``{{ breadcrumb }} : An hash containing a splitted array of URL. Keys are URL and values are folders name`` <br/>
``{{ folders }} : An array containing folder objects for current url. Each folder has 3 attributes (url, thumbnail_url, name)`` <br/>
``{{ images }} : An array containing image objects for current url. Each image has 3 attributes (url, thumbnail_url, name)`` <br/>
``{{ page_count }} : The total count of pages for current url.`` <br/>
``{{ current_page }} : The current page`` <br/>
</b>

Variables for detail.html, which will display one picture : <br/>
<b>
``{{ breadcrumb }} : An hash containing a splitted array of URL. Keys are URL and values are folders name`` <br/>
``{{ image_url }} : The URL of the current image`` <br/>
``{{ image_previous_url }} : The URL of the previous image`` <br/>
``{{ image_next_url }} : The URL of the next image`` <br/>
</b>

Variables for login.html, which will display the login form : <br/>
<b>
``{{ login_error }} : Tell if login attempt was valid or not`` <br/>
``{{ username }} : The username entered in login form input`` <br/>
</b>

### Thumbnail generation
For easy thumbnail generation in your theme, there is an helper function available in your views. You should use the function picturo_thumbnail in your views. For example, if you want to generate a squared 300px by 300px thumbnail, insert the following line in your view : <br/>
<b>``{% picturo_thumbnail(thumbnail_url, 300, 300) %}`` <br/></b>
Thumbnail will be be automagically created in a folder matching the size of the thumbnail !

### Other themes
I plan to release some others theme later, but if your want to create your own I recommend to check the default theme and use Twig template for easy theming.
And please, show me your theme if you want to share it.

### Contribute
Help make Picturo better by checking out the GitHub repoistory and submitting pull requests. If you find a bug please report it on the [Issue page](https://github.com/dineshkummarc/Picturo/issues).

## So Far Developers Credit:-
1. Creator -> https://github.com/jbleuzen
2. Modifications -> https://github.com/jerrywham
3. Modifications -> https://github.com/dineshkummarc

## TODO:
 - [ ] Responsive theme
 - [ ] Add settings -> Add Users, Manage Users
 - [x] Support GIF (.gif),
 - [x] Support PNG (.png),
 - [ ] Support TIFF (.tiff, .tif),
 - [ ] Support BMP (.bmp, .dib, .rle),
 - [x] Support JPEG (.jpeg, .jpg, .jpe, .jfif),
 - [ ] Support TGA (.tga, .vda, .vst, .icb),
 - [ ] Support DDS (.dds)
 - [x] Better authentification method
 - [x] Add ban functions to avoid spam (writen by Seb Sauvage at sebsauvage.net)
 - [x] Add administrator status
 - [x] Add multiple users
 - [x] Add possibility to hide folders to users via administration. By default, a new folder is available for all users.
 - [x] Administrator can manage pictures (rotate, cropped, cut, reduce, setWidth, setHeight). Modifications are made on thumbnails. Originals are not modified.
 - [x] Add error view
 - [x] Update theme (footer is always at the bottom of the page -not bottom of the screen- whatever the height of content)
 - [x] Pictures (originals) can be download one by one by users
 - [x] javascript preloader for big pictures
 - [x] generate method of thumbnail replace by auto_thumb method (writen by Bronco at warriordudimanche.net)
 - [x] pictures and folders are sorting with natural case insensitive sort
Optional: 
 - [ ] Convert all of the image types to a single image source (.jpeg/.png) while viewing on the album
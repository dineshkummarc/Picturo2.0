Picturo
=======

## About the Application
[Picturo](https://github.com/dineshkummarc/Picturo) is a stupidly simple, blazing fast, flat file photo cum Album gallery running. No admin, you just need to drop your pictures in the content to publish your pictures. Picturo is heavily inspired by [Pico](https://github.com/gilbitron/Pico), but it’s for Photos and Albums.

## Demo
You can try Picturo at [Demo](http://picturomobile.infinityfreeapp.com/), actually the demo is private but you can login with the following credentials : <br/>
~~~
user : admin
password : admin
~~~

### Screenshots
Login
![login.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/login.png)

Login Fail
![login-fail.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/login-fail.png)

Albums
![Albums.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/Albums.png)

Albums+Photos
![album-photos.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/album-photos.png)

Album View
![album-view.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/album-view.png)

Photo View
![photo.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/photo.png)

Error View
![error.png](https://github.com/dineshkummarc/picturo/blob/master/screenshots/error.png)

## Requirements
To run Picturo you will need <b>``PHP 5.2.4+``</b> and <b>``GD Library``</b> on your server. If you’re running Apache you will also require <b>``mod_rewrite``</b> to be enabled.

## Installation
First download Picturo and extract it on your server. Change ownership and permission of the cache folder to the user of your web server <b>``set permissions to 777``</b> so you’ll be able to delete cache if needed.

## Test Server
1. Apache/2.4.41
2. ~~PHP 5.2.4~~ PHP/7.1.33 or greater
3. ~~MySQL 5~~ MySQL/5.0.12-dev
4. [GD Library](https://www.php.net/manual/en/book.image.php)

### Upload your folders of pictures into content.
Customize settings by editing config.php in the root folder of Picturo. To override a setting simply uncomment it in config.php and set your custom value.

### Privatize your site
Picturo can keep your galleries private, you just have to edit config.php and set private variable to true and add a user. <b>``By default, there is an admin user with the password “admin” in the configuration file``</b>. Just uncomment the two following lines to enable private galleries : <br/>
~~~
$config['private'] = true;
$config['admin_pass']['admin'] = 'sha512:1000:2Gp+SOuwkWQpMsemFvMyxfPtEfY/M77l:GrHLycEBPATCSmFCmd4onEynvfSoNR3Q';
$config['private_pass']['user'] = 'sha512:1000:2Gp+SOuwkWQpMsemFvMyxfPtEfY/M77l:GrHLycEBPATCSmFCmd4onEynvfSoNR3Q';
~~~
Passwords are SHA-1 strings, you can generate your passwords online here at [sha1-online](http://www.sha1-online.com/).

### Add galleries
Your photos must be stored in content folder, if you want to add a gallery you just need to create a folder within your content folder. Galleries thumbnail are generated with the first picture found in the folder.

### Create your own theme
Picturo supports themes with [Twig](https://twig.symfony.com/) as templating engine they are located in the themes folder. All themes must include two files : <br/>
~~~
gallery.html
detail.html
~~~
If you want to keep your galleries private, you will need a third file <b>“login.html”</b>. Each file will have a basic set of variable, plus specific variable.

Default variables, available for all files : <br/>
~~~
{{ base_url }} : The URL of your site
{{ theme_url }} : The URL of your active theme
{{ site_title }} : The title of your website
{{ username }} : The logged in username (if you use private gallery)
~~~

Variables for gallery.html, which will list all folders and pictures : <br/>
~~~
{{ url }} : The current url
{{ breadcrumb }} : An hash containing a splitted array of URL. Keys are URL and values are folders name
{{ folders }} : An array containing folder objects for current url. Each folder has 3 attributes (url, thumbnail_url, name)
{{ images }} : An array containing image objects for current url. Each image has 3 attributes (url, thumbnail_url, name)
{{ page_count }} : The total count of pages for current url.
{{ current_page }} : The current page
~~~

Variables for detail.html, which will display one picture : <br/>
~~~
{{ breadcrumb }} : An hash containing a splitted array of URL. Keys are URL and values are folders name
{{ image_url }} : The URL of the current image
{{ image_previous_url }} : The URL of the previous image
{{ image_next_url }} : The URL of the next image
~~~

Variables for login.html, which will display the login form : <br/>
~~~
{{ login_error }} : Tell if login attempt was valid or not
{{ username }} : The username entered in login form input
~~~

### Thumbnail generation
For easy thumbnail generation in your theme, there is an helper function available in your views. You should use the function picturo_thumbnail in your views. For example, if you want to generate a squared 300px by 300px thumbnail, insert the following line in your view : <br/>
~~~
{% picturo_thumbnail(thumbnail_url, 300, 300) %}
~~~
Thumbnail will be be automagically created in a folder matching the size of the thumbnail !

### Other themes
I plan to release some others theme later, but if your want to create your own I recommend to check the default theme and use [Twig template](https://twig.symfony.com/doc/3.x/templates.html#template-inheritance) for easy theming. And please, show me your theme if you want to share it.

### Contribute
Help make Picturo better by checking out the GitHub repoistory and submitting pull requests. If you find a bug please report it on the [Issue page](https://github.com/dineshkummarc/Picturo/issues).

## Developers Credit:-
- [ ] Creator -> https://github.com/jbleuzen
- [ ] Modifications -> https://github.com/jerrywham
- [ ] Modifications -> https://github.com/dineshkummarc

## TODO:
 - [x] Desktop Friendly theme (Support for Resolution 1024×600, 1024×768, 1280x600, 1280x800, 1280x960, 1280x1024, 1366x768)
 - [ ] Television Friendly theme (Support for Resolution 1440x900, 1600x1200, 1920x1080, 1920x1200)
 - [ ] Mobile Friendly theme (Support for Resolution 480x853, 600x960, 800x1280, 900x1280)
 - [ ] Add settings -> Add Users, Manage Users
 - [ ] Add new Themes with new Designs
 - [x] Support GIF (.gif)
 - [x] Support PNG (.png)
 - [ ] Support TIFF (.tiff, .tif)
 - [x] Support BMP (.bmp)
 - [ ] Support Other BMP Types (.dib, .rle)
 - [x] Support JPEG (.jpeg, .jpg)
 - [ ] Support Other JPEG Types (.jpe, .jfif, .jfi, .jif)
 - [ ] Support TGA (.tga, .vda, .vst, .icb)
 - [ ] Support DDS (.dds)
 - [x] Better authentification method
 - [x] User Friendly Error Messages
 - [ ] User Friendly Language - English
 - [x] Add ban functions to avoid spam (writen by Seb Sauvage at sebsauvage.net)
 - [x] Add administrator status
 - [x] Add multiple users
 - [x] Add possibility to hide folders to users via administration. By default, a new folder is available for all users.
 - [x] Administrator can manage pictures (rotate, cropped, cut, reduce, setWidth, setHeight). Modifications are made on thumbnails. Originals are not modified.
 - [x] Add error view
 - [x] Added a new design for error view
 - [x] Updated Default theme (footer is always at the bottom of the page -not bottom of the screen- whatever the height of content)
 - [x] Pictures (originals) can be download one by one by users
 - [x] Javascript preloader for big pictures
 - [x] generate method of thumbnail replace by auto_thumb method (writen by Bronco at warriordudimanche.net)
 - [x] Pictures and folders are sorting with natural case insensitive sort
Optional: 
 - [ ] Convert all of the image types to a single image source (.jpeg/.png) while viewing on the album
itzy-base Version 1.0 28/03/2014
==================

This is the base for Anax, which is my version based on the course material in the university course http://dbwebb.se/oophp.
This Anax is based on Anax-oophp which builds upon Anax-base.

This version is built by Julia Sivartsson.

License
---------------------

This software is free software and carries a MIT license.

Use of external libraries
--------------------------

The following external modules are included and subject to its own license.

PHP Markdown

Website: http://michelf.ca/projects/php-markdown/
Version: 1.4.0, November 29, 2013
License: PHP Markdown Lib Copyright © 2004-2013 Michel Fortin http://michelf.ca/
Path: included in 3pp/php-markdown



General usage notes
---------------------

A boilerplate for smaller websites or webbapplications using PHP.

- This is an Anax-base which gives you a good start when developing a website.
No installation needed, just copy and open with the editor you find suitable (PhpStorm 7.1.2 works perfectly).

There are two ways to interact with it:

1. Read the code. Much effort has gone into making the example code readable,
not only in terms of the code itself, but also the extensive inline comments
and documentation blocks.

2. Browse the code and documentation on the web.

---------------------

- This base includes the following maps:
        src
            - CDatabase
            - CNavigation
            - CSource
            - CTextFilter
            - CUser

            ( this is where you put your classes, bootstrap.php is included.)
        theme

            ( the three files you find here is the basic. Mod them as you like.)

        webroot
            - cache
            - img
            - js
            - style

            ( here you put all the sites that your page is made of, the basic is included such as viewsource.php,
            config.php and some other. Change to fit your purpose.)

------------------
Contact

E-mail: julia.sivartsson@gmail.com
Web site: http://itzz.webs.com

------------------

Copyright (c) 2014 Julia Sivartsson.

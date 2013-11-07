CSIT2230
========

Project code for CSIT 2230: Intro to Internet Software Dev at Pellissippi State Community College

/DB_MASTER
---------

Master files for my DB interaction classes: DB.php, User.php, and UserTools.php

/dirTest
-------

Test pages for figuring out how includes in php work.

/site
----

Collection Manager is a web-based application for cataloguing, searching, and displaying collections. This first version is made specifically for movie collections, but once completed it will be expanded for collections of any sort.

Collection Manager will allow you to keep track of your movies, what format you have them in, and other important information such as release year, director, actors, and much more.

Planned features include:

*   Search movies by title, year, director, genre, etc.
*   Custom tags for movies
*   Rating system for your movies
*   Display your libray on a virtual shelf
*   Stream digital media directly to your browser
*   Pick a movie to watch at random
*   Mobile intergration: do all this from your Android (and maybe iOS) device

This is a semester-long project for CSIT 2230: Intro to Internet Software Dev at Pelllissippi State Community College.

/userTest
---------

Pages for testing user account creation and login.

/week6, /week7, /week8
----------------------

Work done on weeks 6, 7, and 8, respectively.
Include pages for testing various acpects of PHP and MySQL

/week9
------

Work for week 9.
A test page for AJAX search.
The table it looks at contains the members of the Flying Circus.

/week10

Work for week 10.
Basic scripts for handling file uploads.

/winsxs
-------

Side project started for getting the hang of PHP/MySQL database interaction and fully testing my DB connection handling class.

The idea behind it is a way to keep track of which events affect the size of the winsxs folder in Windows.
The page allows you to create an entry for a machine, and create events.  
When you create a machine, you must enter a machine name and a description.  
When you create an event, you must select a machine which the event is for, and enter some information about the event.  
If the date or time are left blank, the current date or time is entered instead.  
If any of the other fields are left blank, the result is a malformed sql statment.
I put the script that processes input for each input oage in a separate file from the form.  This was a bad idea and makes validating input a hassle, and since this was just a test to make sure my database interaction worked I didn't bother to go back and fix it.

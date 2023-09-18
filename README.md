## Project Overview
This is a e commerce website made using html, css, js, php and mysql. this website has an admin panel for product uploading and products management.
live website https://sdelectronics.000webhostapp.com/

## Technologies Used
html
css
js
php
mysql
bootstrap

## Steps to setup the code in a local environment
first download the all files to the pc
next make a folder on xampp -> htdocs  
next paste all the files in to that folder
next there are three database files
login to localhost/phpmyadmin and make a database called sdelectronics
next import that three databses into the that database
next turn on the xampp server and call our website

there is a live website on https://sdelectronics.000webhostapp.com
(use test@gmail.com as a email and test@123 as a password)
or
goto register page and make a new account 
there is no admin panel for now and ou can edit data in mysql database products database

To create new product navigate to http://localhost/sdElectronics/upload/file_upload.html and select your image and sumbit
then you can copy your image name.
after copying that name goto the database select products -> insert -> id(keep that empty), key_id = 200453, cat = (if product is a phone enter 1, pc or laptop enter 2 else enter 3) and as image paste that image you copied
then type 1 to active, status, isTop(if it is a top selling product), isApple(if product is apple), isSamsung(if product is Samsung).
then submit and refresh your website.

## Future Plan
to make a ordering system and an admin panel

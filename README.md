Installation Guide
===============================

Tech Stack:
● Cakephp 2.9 (MVC)
● Mysql 5.7

Installation :

Set up virtual host and enable rewrite mode on (refer link)

Set Up Database :
1.create a database name as auth_demo.
2.Import app>Config->Schema->auth_demo.sql
3.Update app>Config->database.php with your mysql setting (host,user,password )
4.Change the tmp folder permission to 777


References
1. CakePHP 2 ­ https://book.cakephp.org/2.0/en/index.html
2. Create virtual host
https://www.digitalocean.com/community/tutorials/how­to­set­up­apache­virtual­hosts
­on­ubuntu­14­04­lts


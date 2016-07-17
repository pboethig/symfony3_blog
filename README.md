blog2
=====

A Symfony project created on July 16, 2016, 1:51 pm.

this is a symfony 3.1 trainingsproject to test the franework.


- uses symfony3.1
- mysql 5.6
- php 7 (or >=5.5)
- twitter bootstrap (bundle)
- phpunit


- configure you vhost to point to the application (/var/www/symfony3_blog)

- start serer with:
  - php bin/console server:run

- users:
  - localhost:8000/user

- posts:
  - localhost:8000/post

- replies:
  - localhost:8000/replies

- user restapi (postman)
  - localhost:8000/api/user

- run tests: 
  - phpunit -c phpunit.xml from projectroot

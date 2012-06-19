li3_users
=========

Add this to a Lithium MVC project via:

    git submodule add https://github.com/fastmover/li3_users.git libraries/li3_users
  
Then edit file:

    /your_app/config/libraries.php
  
Add the following line to the end of the file:

    Libraries::add('li3_users');

Next step is to configure li3_users to connect to the database.  Edit file:

    your_app_name\config\bootstrap\connections.php
    
Add another connection named li3_users.


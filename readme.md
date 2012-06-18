li3_users
=========
Add this to a Lithium MVC project via:

    git submodule add https://github.com/fastmover/li3_users.git libraries/li3_users
  
Then edit file:

    /your_app/config/libraries.php
  
and add the following line to the end of the file:

    Libraries::add('li3_users');
Last step is to configure li3_users to connect to the database.  Edit file:

    libraries\li3_users\config\bootstrap\connections.php
    
and edit Connections:add command to match up with your database.


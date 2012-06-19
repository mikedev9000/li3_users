li3_users
=========

For [Download Instructions Click Here](https://github.com/fastmover/li3_users/wiki/Installation)

Add this to a Lithium MVC project via:

    git submodule add https://github.com/fastmover/li3_users.git libraries/li3_users
  
To add li3_users module to your current lithium application, edit:

    /your_app/config/libraries.php
  
Add the following line near the end of the file:

    Libraries::add('li3_users');

Next step is to configure li3_users to connect to the database.  Edit file:

    your_app_name\config\bootstrap\connections.php
    
Add another connection named li3_users.


li3_users
=========
Add this to a Lithium MVC project via:

  git submodule add https://github.com/fastmover/li3_users.git libraries/li3_users
  
Then edit file:

  /your_app/config/libraries.php
  
and add the following line to the end of the file:

  Libraries::add('li3_users');
  
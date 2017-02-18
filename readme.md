## Short-Vide 

This is a simple endpoint that returns a set of video chat messages

## Install it on your local Machine

 - clone the repo
 - $ composer install
 - php artisan key:generate
 - set your .env file with your preferred database.
 - $ php artisan migrate
 - $ php artisan db:seed
## Functionality
**Get** 
<hostname>/topic/{id}
**Get** 
<hostname>/topic/1

should return a json containing the the video chat on the topic.
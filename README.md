# <span style="color:red;">CGTEST Version 2.0!</span>

# New Features

<li>Edit the photographers profile (notice the edit button near the contact info)</li>
<li>Models have been further defined. A basemodel has been implemented to allow for general functionality that all child models can use. Including routes that are appended to the data for efficient front-end dev.</li>
<li>The hearts actually save to the DB now, via a patch call</li>

# Backend
<li>For the API error handling, I created a trait that we can re-use in all of our API's.  I used a somewhat standard structure for the response JSON which is the data, status, message and code.  The message can be sent to the front end for the user to see.  Navigate to the photographer profile edit page to see the communication to the server.</li>
<li>We'll also create a base api controller that the other api's can extend from to make use of the error handling.  I've also included a general validator method that all the api's have access to.  We can see this in action when attempting to submit invalid info on the profile edit page.</li>
<li>I've also created an abstract BaseModel class for the other models to extend from. This will allow us to define parent methods that they can all make use of.  I've included common RESTful and ui paths so that we can easily access them at any time from anywhere in the application. (editPath, indexPath, etc)</li>
<li>As for the schema definitions.  The tables, columns, datatypes were all defined in the migrations in the original version: /Database/Migrations.  From my experience with Laravel, we wouldn't need to duplicate these definitions anywhere as an object.  if we are to make changes, we would create a new migration altering what ever is necessary.  I'm happy to explore other routes on this subject.</li>
<li>There is also a database seeder that inserts all the data as supplied originally</li>

# Frontend

I haven't revamped much on the front end since we are focusing on the backend.
<ul>
<li>Right now everything is kind of just sitting in the "public" folder in the views directory.  In the real world we'd have a clear hierarchy with specific modules broken into different folders -- the same goes for routing.  (Profile, Auth, Photos, Configuration, etc.). </li>
<li>Also I would have re-used the photographer axios request in some way,  (parent component, mixin, store)</li>
<li>I would also add in some kind of global mixin for the alert box that lines up with the status types (error, success, etc...).</li>
</ul>

<a href="https://cgtest.webfly.io/">LIVE DEMO</a>


<br/><br/>
Change log:
	modified:   app/Http/Controllers/AlbumsController.php
	modified:   app/Http/Controllers/PhotoController.php
	modified:   app/Http/Controllers/PhotographerController.php
	modified:   app/Models/Albums.php
	modified:   app/Models/Photographer.php
	modified:   app/Models/Photos.php
	modified:   package-lock.json
	modified:   package.json
	modified:   resources/js/pages/errors/404.vue
	modified:   resources/js/pages/public/albums.vue
	modified:   resources/js/pages/public/components/carousel.vue
	modified:   resources/js/pages/public/home.vue
	modified:   resources/js/plugins/fontawesome.js
	modified:   resources/js/router/routes.js
	modified:   routes/api.php
	modified:   storage/logs/laravel.log

# The Guild

#### Chat application
<ul>Created by: Oliver Simon (Rolemor)</ul>

#### Used Technologies:
<ul>Frontend:
    <ul>Vue.js</ul>
    <ul>Tailwind CSS</ul></ul>
<ul>Backend:
    <ul>PHP(Laravel)</ul>
    <ul>MYSQL(database)</ul></ul>
<ul>3rd party app for Broadcasting:
    <ul>Pusher</ul></ul>


#### Small description:
I wanted to know how hard is to create a social network like Facebook and that's why started this project.<br>

First step was to create a chat app. I decided to created it with PHP(Laravel) as backend and Vue.js for frontend.<br>
The Vue is new to me so this is my first program with it and I use Tailwind CSS as a new framework for styling too.<br>




#### Setup & Run the app
<ul>Preparation:
<ul>Install packages and dependencies with Composer and NPM</ul>
     
     composer install
     npm install
     
<ul>Create a MYSQL database on your device and update the .env file with the parameters and than use the artisan command to migrate the database.</ul>

    php artisan migrate

<ul>Register on Pusher website and create az App to get the API keys that you will use in the .env file</ul>
<ul>Link for Pusher: <a href="https://pusher.com/">https://pusher.com/</a></ul>

    PUSHER_APP_ID="App id here"
    PUSHER_APP_KEY="App key here"
    PUSHER_APP_SECRET="Secret key here"
    PUSHER_APP_CLUSTER="Continent abbreviation like: eu or us"
    
<ul>And write 'pusher' as broadcast driver</ul>

    BROADCAST_DRIVER=pusher

</ul>
<ul>Run the program:
<ul>Use apache to run the server or the laravel artisan command on 1 terminal</ul>

    php artisan serve
    
<ul>Open a second terminal to use npm run hot</ul>

    npm run hot
</ul>

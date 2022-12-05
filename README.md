To run this project, you will need installed: Composer, php, node, mysql

to launch this project:

1. Clone repository
2. Run composer install comand
3. Rename .env.example to .env
4. Run php artisan key:generate
5. Create database mysql
6. Enter user and password from database to .env fill\
6.1 DB_USERNAME="your username"\
6.2 DB_PASSWORD="your password"
7. Create new schema in database with naming you want
8. Write naming of schema to .env file \
8.1 DB_DATABASE= "Your name of schema"
9. run php artisan migrate

Now everything is set up, and you can launch site. Run php artisan serve\
http://127.0.0.1:8000/clients this is your URL to the site.

Some example scinshots: 
![image](https://user-images.githubusercontent.com/102927355/205639018-80cf5f5c-afbb-4a61-b7df-aa736273cbea.png)
![image](https://user-images.githubusercontent.com/102927355/205639129-062632ae-2faf-4c91-beb9-cb7c6a50e365.png)
![image](https://user-images.githubusercontent.com/102927355/205639350-8f9da9d7-726b-4ae1-b46a-3c632a089041.png)

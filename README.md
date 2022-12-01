<p align="center"> 
<img src="https://user-images.githubusercontent.com/114992405/204537107-2eca7c3c-aa95-466a-a511-02cdfed7a3f3.PNG" width="200" 
     </p>

## About High Definition Clothing

 The aim of our project is to sell high quality clothing to our consumers through a user friendly website that is easy to navigate through the use of many features. An example of these features are: 
 
 - Navigation bar so that the website is easy manuvered.
 -Baskett, so that users can add and remove items they would like to purchase.

 ## What Tools We Used to Add These Features in Our Code
 
 - [Laveral](https://laravel.com/) as the framework to PHP to build the website. 
 - [Composer](https://getcomposer.org/) is a dependancy manager for PHP. 
 - [Node.js](https://nodejs.org/en/) this was used to downlaod the NPM dependancies.
 - [GitHub](https://github.com/SamA-22/Team-01) to pull and push code between the group.
 - [XAMPP](https://www.apachefriends.org/) to run the local host.


## How To Set up This Laravel Project 

Clone this repo to your local machine using 
```
git clone https://github.com/SamA-22/Team-01.git projectName
```

Make sure that you are cd' into the correct folder using the terminal:
```
cd "Project Name"
```

install composer dependencies using:
```
composer install
```

install NPM dependencies using:
```
npm install
```

copy the .env file that we have used:
```
cp .env.example .env
```

Now generate your encryption key using:
```
php artisan key:generate
```

Once this is done run your XAMPP local host(Apache and MySQL)

And, lastly migrate our databases using:
``` 
php artisan migrate
```

To test if this works run the following command in the terminal:
```
php artisan serve
```

## Contrabution 
- Ruth Amponsah
- Wisam Abdo
- Raheeb Abdulsalam
- Ikram Ahmed
- Orkhan Aghayev
- Iltija Afzal
- Junnayd Ahmed
- Walyhee Akinwale

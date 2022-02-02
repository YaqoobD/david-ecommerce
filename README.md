# David E-commerce [![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=YaqoobD_david-ecommerce&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=YaqoobD_david-ecommerce)![68747470733a2f2f7472617669732d63692e636f6d2f6368616e64726176616d7368692f65636f6d6d657263652e7376673f6272616e63683d6d6173746572](https://user-images.githubusercontent.com/52135942/151912755-49d3cad3-0646-47ff-b96d-a551f9bd891d.svg)

## About

E-commerce website allows people to buy and sell physical goods, services, and digital products over the internet rather than at a brick-and-mortar location. It’s tough to imagine daily life without e-commerce. We order food, clothes, and furniture; we register for classes and other online services; we download books, music, and movies; and so much more. E-commerce has taken root and is here to stay.

In winter semester 21/22 for the cource of Advance Software Engeneering offered and taught by "Prof. Dr. Stefan Edlich". I am developing this simple E-commerce website with the basic functionalities, I have found this cource very informative and I have learned a lot during the developmemt of this project. I hope this project will help many others as it have helped me.   

## Demo
### Home
![home](https://user-images.githubusercontent.com/52135942/151783109-394e480b-805d-4247-93c9-9e06071231b0.jpeg)
### Product Added to Cart
![product-add-to-cart](https://user-images.githubusercontent.com/52135942/151783200-006ef65d-5235-4c82-a358-b40003d9e2a8.jpeg)
### Product Brands
![products-brands](https://user-images.githubusercontent.com/52135942/151783225-e8ed3e4b-b602-498e-9053-4401480b6513.jpeg)
### Products Categories
![products-categories](https://user-images.githubusercontent.com/52135942/151783233-615a5516-ba37-48c1-8ca8-bf601b665469.jpeg)
### Product Searched by Keywords
![products-search-by-keywords](https://user-images.githubusercontent.com/52135942/151783242-69ea2dcb-685a-41b6-8da3-81ef4ec65add.jpeg)
### Register
![register](https://user-images.githubusercontent.com/52135942/151783256-81a7973e-d8bc-4d73-9495-24c403a1eed0.jpeg)
### Cart
![cart](https://user-images.githubusercontent.com/52135942/151783356-e12d18ed-a613-486d-ba19-40aed103fdaf.jpeg)

## Database tables
![daatabase-tables](https://user-images.githubusercontent.com/52135942/151783518-d0f62eab-d14b-427d-8b75-dab8248b2268.jpeg)

## Features
* register (validation added)
* login & logout
* search
* categories
* cart (add edit delete update) /only login user 
* payment with paypal
* pagenation 
* sessions 
* payment success fail landing pages 

## Tools
* bootstrap 3.7
* jquery 
* js
* fontawesome
* mysqli 

## 1) UML Diagrams
### Database Diagram
![Database Diagram](https://user-images.githubusercontent.com/52135942/152168913-16f0f201-ad45-4f68-9d53-a2aa2790af93.jpeg)
### Sequence Diagram
![Sequence Diagram](https://user-images.githubusercontent.com/52135942/152171002-4f2690fa-c705-442c-83c2-61f40e5bfb82.jpeg)

## 2) SonarCloud
[![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/project/overview?id=YaqoobD_david-ecommerce)

SonarCloud is a cloud service offered by SonarSource and based on SonarQube. SonarQube is a widely adopted open source platform to inspect continuously the quality of source code and detect bugs, vulnerabilities and code smells in more than 20 different languages.

## 3) Build Management (Semaphore) ![68747470733a2f2f6368616e64726176616d7368692e73656d6170686f726563692e636f6d2f6261646765732f65636f6d6d657263652f6272616e636865732f6d61737465722e737667](https://user-images.githubusercontent.com/52135942/151913497-b29b588d-cfda-4b26-8d6f-74783fa89d6f.svg)

![Screenshot 2022-01-30 at 22 02 33](https://user-images.githubusercontent.com/52135942/151913568-8f7b7891-c0ca-49cf-8fbc-c16de8775c44.png)

I used semaphore which is very easy and simple to understand.
In semaphore build I did
* (installing dependencies) where all the dependencies related to application are installed.
* (code analysis) it runs the PHP Copy Paste Detector from online repository.
* (unit test) runs the unit tests from the phpunit binary in vendor folder.
* (browser test) Here it runs the browser test by openeing the application in browser and checks the response.
* (security check) ensioLabs security checker, will scan the project dependencies which are  known for vulnerabilities.

## 4) Clean code development
* used only crud operations.
* to make it work on live server change credentials in db.php
* custom made, no framework used


## 5) IDE
PhpStorm is Usd as IDE in this Project it is a PHP IDE. It provides on-the-fly error prevention, autocompletion and code refactoring, zero configuration debugging and an extended HTML, CSS, and JavaScript editor. PhpStorm also provides powerful built-in tools for debugging, testing and profiling your applications.

* Intelligent coding assistance
* Smart PHP Code Editor
* Code Quality Analysis
* Debugging, Testing and Profiling
* HTML/CSS/JavaScript Editor
* JavaScript Editor 
* Development Environment 
* Databases & SQL

## 6) DSL

## 7) Functional Programming

 I used only create, read, update, delete functions which are very actual things in any application.
 
 * In that we have normal functions
 * functions with parameters.
 * side effect free function.
 * high order functions




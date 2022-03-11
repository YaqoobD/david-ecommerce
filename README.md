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

### Database Diagram
<img width="573" alt="image" src="https://user-images.githubusercontent.com/52135942/157491589-b9189cd2-23c3-4ac1-b51d-4b4297b0a059.png">


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

## 1) Git!
Git is a free, open-source version control software. It was created by Linus Torvalds in 2005. This tool is a version control system that was initially developed to work with several developers on the Linux kernel.

![1_BtPsoEy04N6uszgwbwYRjQ](https://user-images.githubusercontent.com/52135942/157486286-dda260e0-3e00-40ae-bd9a-8ca46ca826bd.png)

### GitHub
![download](https://user-images.githubusercontent.com/52135942/157489020-508768cc-f293-4994-8b59-f775f134bd62.png)

 Matthew McCullough, a trainer at GitHub, explains that Git, like other version control systems, manages and stores revisions of projects. Although it’s mostly used for code but Git could be used to manage any other type of file, such as Word documents or Final Cut projects. Think of it as a filing system for every draft of a document. GitHub is a Git repository hosting service, but it adds many of its own features. While Git is a command line tool, GitHub provides a Web-based graphical interface. It also provides access control and several collaboration features, such as a wikis and basic task management tools for every project.

## 2) UML Diagrams
A UML diagram is a diagram based on the UML (Unified Modeling Language) with the purpose of visually representing a system along with its main actors, roles, actions, artifacts or classes, in order to better understand, alter, maintain, or document information about the system. Mainly, UML has been used as a general-purpose modeling language in the field of software engineering, for the purpose of this project I have used 3 Diagrams to illustrate my design.

### Sequence Diagram
![Sequence Diagram](https://user-images.githubusercontent.com/52135942/152171002-4f2690fa-c705-442c-83c2-61f40e5bfb82.jpeg)
### Customer Usecase Diagram
![UseCase Diagram](https://user-images.githubusercontent.com/52135942/152224341-d453954e-d4c6-4061-88cc-5bde28024376.jpeg)

## 3) DDD 

## 4) Metrics 

### SonarCloud
[![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/project/overview?id=YaqoobD_david-ecommerce)

SonarCloud is a cloud service offered by SonarSource and based on SonarQube. SonarQube is a widely adopted open source platform to inspect continuously the quality of source code and detect bugs, vulnerabilities and code smells in more than 20 different languages.
![Screenshot 2022-02-07 at 11 26 21](https://user-images.githubusercontent.com/52135942/152770488-0f1d4880-9c25-4e9d-8415-1737ab4e2daa.png)

### Codacy
Codacy Automatically identify issues through static code review analysis. Therefore we can be notified on security issues, code coverage, code duplication, and code complexity in every commit and pull request, directly from your current workflow https://app.codacy.com/gh/YaqoobD/david-ecommerce/dashboard

![Screenshot 2022-02-07 at 11 22 27](https://user-images.githubusercontent.com/52135942/152770719-a21cf5f7-cfea-4c09-b285-839716fa2172.png)

## 5) Clean code development
Functional programming is a paradigm, or style, that values immutability, first-class functions, referential transparency, and pure functions. functions as machines — they take an input, or arguments, and then output something, the return value. Throughout this project, good practices for functional programming have been adopted, for this project i have used followings.

* used only crud operations.
* to make it work on live server change credentials in db.php
* custom made, no framework used

## 6) Build Management (Semaphore) ![68747470733a2f2f6368616e64726176616d7368692e73656d6170686f726563692e636f6d2f6261646765732f65636f6d6d657263652f6272616e636865732f6d61737465722e737667](https://user-images.githubusercontent.com/52135942/151913497-b29b588d-cfda-4b26-8d6f-74783fa89d6f.svg)

![Screenshot 2022-01-30 at 22 02 33](https://user-images.githubusercontent.com/52135942/151913568-8f7b7891-c0ca-49cf-8fbc-c16de8775c44.png)

I used semaphore which is very easy and simple to understand.
In semaphore build I did
* (installing dependencies) where all the dependencies related to application are installed.
* (code analysis) it runs the PHP Copy Paste Detector from online repository.
* (unit test) runs the unit tests from the phpunit binary in vendor folder.
* (browser test) Here it runs the browser test by openeing the application in browser and checks the response.
* (security check) ensioLabs security checker, will scan the project dependencies which are  known for vulnerabilities.


## 7) Unit-Tests

## 8) Continuous Delivery

Continuous Delivery (CD) is a software engineering approach in which teams produce software in short cycles, ensuring that the software can be reliably released at any time and, when releasing the software, without doing so manually.

### GitHub Action

GitHub Action is a continuous integration service used to build and test software projects hosted at GitHub by GitHub.

GitHub Action is configured by adding a file named python-app.yml, which is a YAML format text file, to the .github/workflows directory of the repository.This file specifies the programming language used, the desired building and testing environment (including dependencies which must be installed before the software can be built and tested), and various other parameters.

![MicrosoftTeams-image (1)](https://user-images.githubusercontent.com/52135942/157917465-abe7b882-85fd-4902-9571-0aade4db9973.png)

![Screenshot 2022-03-11 at 18 32 57](https://user-images.githubusercontent.com/52135942/157918488-cf2ebd1e-be46-473c-8aa6-d43f7c461ed2.png)

### TeamCity

TeamCity is a general-purpose CI/CD solution that allows the most flexibility for all sorts of workflows and development practices. The Projects Overview lets you quickly check the status of your builds, see what triggered them, download the latest build artifacts, and more.

![Screenshot 2022-03-11 at 18 39 19](https://user-images.githubusercontent.com/52135942/157920764-f13ac1b9-911e-48ae-b312-81d5149ed461.png)
![Screenshot 2022-03-11 at 18 39 55](https://user-images.githubusercontent.com/52135942/157920825-c7b450f7-6af8-402b-8e73-802bb413fc85.png)
![Screenshot 2022-03-11 at 18 40 24](https://user-images.githubusercontent.com/52135942/157920865-562e2fdd-e5aa-4e65-b3c2-e4d43ff163c7.png)



## 9) IDE
PhpStorm is Usd as IDE in this Project it is a PHP IDE. It provides on-the-fly error prevention, autocompletion and code refactoring, zero configuration debugging and an extended HTML, CSS, and JavaScript editor. PhpStorm also provides powerful built-in tools for debugging, testing and profiling your applications.

* Intelligent coding assistance
* Smart PHP Code Editor
* Code Quality Analysis
* Debugging, Testing and Profiling
* HTML/CSS/JavaScript Editor
* JavaScript Editor 
* Development Environment 
* Databases & SQL

## 10) DSL

Small Example of the Domain Specific Language.

![Screenshot 2022-02-11 at 13 24 25](https://user-images.githubusercontent.com/52135942/153591043-d25e5252-5ddc-40fe-995b-02f17a7a68dc.png)


## 11) Functional Programming

 I used only create, read, update, delete functions which are very actual things in any application.
 
 * In that we have normal functions
 * functions with parameters.
 * side effect free function.
 * high order functions




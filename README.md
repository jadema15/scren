## About Laravel

Laravel is a web application framework with elegant and expressive syntax. We believe that development should be an enjoyable and creative experience to be truly satisfying. Laravel takes the hassle out of development by facilitating common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Proyect Screen

This Test project on the Laravel Framework aims to experiment with the **spatie/browsershot** library for capturing images given a URL, working with Chromium-based web browsers.

The **spatie/browsershot** library has a repository on github [spatie/browsershot](https://github.com/spatie/browsershot), in which the community makes contributions on bug fixes, documentation and extension of tool capabilities.

Regarding the **Screen** project, it has a basic application where the visual aspect is relegated to give way to testing functionalities such as:

- Screenshot of a web page through its url
- Generation of image names based on your domain.
- List of screenshots stored on the server
- Preview of captures made through the web browser configured by default.

## Install
The project is installed via composer.
````
composer install
````

Library installation via npm in proyect.
````
npm install puppeteer
````

Library installation.
````
composer require spatie/browsershot in proyect
````

### Home Page

The initial page presents a form in which the url is allowed to be entered.

### Captures taken
Here all the screenshots stored on the server are listed, presenting each of them with a link, which can be clicked.

### Viewing images

By clicking on the link of each image, you can view the generated image. This visualization is carried out thanks to the web browser installed and configured by default.

````
http://localhost:8000/
````
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

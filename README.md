# Weather Query 🌦️

This project allows users to check the current weather of any city in the world using the [OpenWeather](https://openweathermap.org/) API. It is built with **PHP** for server-side logic, **Bootstrap** for responsive design, and uses **cURL** to fetch data from the API.

## Features ✨
- Enter a city name to get real-time weather information.
- Displays data such as temperature, humidity, atmospheric pressure, cloud coverage, and more.
- Responsive and user-friendly design thanks to **Bootstrap**.
- Validates user input.
- Easy to install and customize.

## Requirements 🛠️
Before using this project, make sure you have the following installed:
- [XAMPP](https://www.apachefriends.org/index.html) (or any local server supporting PHP).
- PHP version 7.4 or higher.
- Internet connection (to fetch data from the OpenWeather API).

## Installation 🚀
1. Clone this repository to your local server:
   ```bash
   git clone https://github.com/yourusername/weather-query.git
   Place the project files in the htdocs folder of XAMPP (or the public folder of your web server).
Start Apache and MySQL services from the XAMPP control panel.
Open your browser and access the project at http://localhost/weather-query.
## Usage 🖥️
    On the main page, enter the name of a city in the input field.
    Click the "Query" button.
    View detailed weather information, including:
    Current temperature.
    Minimum and maximum temperature.
    Humidity.
    Atmospheric pressure.
    Wind speed and direction.
    Cloud coverage percentage.
    To perform another query, click the "Back" button.
    Technologies Used 🛠️
    Programming language: PHP.
    Styling: CSS, Bootstrap.
    Weather API: OpenWeather.
    Local server: XAMPP.
Customization 🛠️
If you want to customize the project:

Register at OpenWeather and get your own API Key.
  Replace the API Key in the resultado.php file:
  $apiKey = "YOUR_API_KEY_HERE";

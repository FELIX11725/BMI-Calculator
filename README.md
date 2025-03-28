# BMI Calculator

## Description
This is a simple **Body Mass Index (BMI) Calculator** developed using **HTML, PHP, and CSS**. The calculator allows users to input their weight and height, then calculates their BMI and provides an interpretation based on standard BMI categories.

## Features
- User-friendly interface with a responsive design.
- Calculates BMI based on weight (kg) and height (cm).
- Displays BMI category (Underweight, Normal weight, Overweight, Obese).
- Error handling for invalid inputs.

## Technologies Used
- **HTML** - For structuring the web page.
- **CSS** - For styling and enhancing the UI.
- **PHP** - For processing the BMI calculation.

## Installation and Usage
1. **Download or Clone the Repository:**  
   ```sh
   git clone https://github.com/yourusername/bmi-calculator.git
   ```
2. **Ensure PHP is installed on your local machine or server.**
3. **Place the files in a server directory** (e.g., `htdocs` for XAMPP).
4. **Start the server** (e.g., using XAMPP, WAMP, or Laravel Herd).
5. **Open the browser** and go to:  
   ```
   http://localhost/bmi-calculator/
   ```
6. **Enter weight and height** in the provided fields and click "Calculate".

## Project Structure
```
BMI-Calculator/
│── index.php       # Main page with the BMI form and result display
│── style.css       # CSS file for styling the page
│── bmi.php         # PHP script for processing BMI calculation
│── README.md       # Project documentation
```

## BMI Calculation Formula
The BMI is calculated using the formula:
```php
BMI = weight (kg) / (height (m) * height (m))
```
**BMI Categories:**
- Underweight: BMI < 18.5
- Normal weight: 18.5 - 24.9
- Overweight: 25 - 29.9
- Obesity: BMI >= 30

## Screenshots
(Add screenshots of the UI here if available)

## License
This project is open-source and licensed under the [MIT License](LICENSE).



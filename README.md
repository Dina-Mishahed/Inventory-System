# Inventory System

This project is an inventory management system that allows you to store and manage data for various products. It provides functionalities such as adding new products, searching for products, generating customer bills, and monitoring inventory quantities.

## Technologies Used

- HTML
- CSS
- PHP
- JavaScript
- MySQL

## Prerequisites

Before running the project, ensure that you have the following dependencies installed:

- Web server (e.g., Apache, Nginx)
- PHP (version X.X.X)
- MySQL (version X.X.X)
- Web browser (e.g., Chrome, Firefox)

## Installation

1. Clone the repository:

git clone https://github.com/Dina-Mishahed/Inventory-System.git

2. Configure the database:

- Create a new MySQL database for the inventory system.
- Import the provided SQL schema (`DataBaseModel.sql`) into your MySQL database.

3. Configure the application:

- Open `connection.php` file.
- Update the database connection details (hostname, username, password, database name) to match your MySQL configuration.

4. Start the web server:

- Configure your web server to serve the project from the cloned directory.
- Start the web server.

5. Access the application:

- Open your web browser and navigate to `http://localhost/inventory-system` (replace `localhost` with your web server's hostname if necessary).

## Usage

- Add a new product:
  - Fill in the required fields (product ID, product name, price, quantity stored, minimum quantity) in the provided form and submit.
  - The new product will be added to the inventory.

- Search for a product:
  - Enter the product name or ID in the search bar.
  - Click the search button.
  - The product's data will be displayed if found.

- Make a customer bill:
  - Select the desired products and specify the quantities in the provided form.
  - Click the "Generate Bill" button.
  - The bill with the total cost will be displayed.

- Updating inventory quantity:
  - When a customer buys a product with a certain quantity, the quantity stored in the inventory will automatically decrease by the bought quantity.

- Inventory quantity notification:
  - If the quantity stored in the inventory becomes less than the minimum quantity, the manager will be notified.
## Demo
<video width="560" height="315" controls>
  <source src="https://github.com/Dina-Mishahed/Inventory-System/bandicam 2019-05-01 23-17-57-812.mp4" type="video/mp4">
</video>

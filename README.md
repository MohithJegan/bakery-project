# The Artisan Bakery Website

## Overview
"The Artisan Bakery" is a fully functional, multi-page website designed to showcase the bakery’s products, story, and contact information. The website features a responsive design, dynamic content rendering, and an administrative interface for managing products. It is built using **HTML5, CSS3, JavaScript, PHP, and MariaDB**, with **Bootstrap** for styling and responsiveness.

## Features
- **Multi-Page Layout:** Home, About, Menu, Contact, and Admin pages.
- **Dynamic Content:** Menu items are dynamically pulled from a MariaDB database.
- **CRUD Operations:** Admin can add, update, and delete products.
- **Responsive Design:** Optimized for desktop, tablet, and mobile devices.
- **Client-Side Validation:** JavaScript ensures proper form inputs.
- **Server-Side Validation:** PHP handles secure data processing.

## Technologies Used
- **Front-End:** HTML5, CSS3, JavaScript, Bootstrap.
- **Back-End:** PHP, MariaDB.
- **Development Tools:** Visual Studio Code, MAMPP, Git.

## Project Structure
### /css
- **style.css**
- **contact.css**

### /img
- **carousel images**
- **featured product images**
- **About images**

### /SQL
- **products.sql**

### /js
- **index.js** (client-side validation)
- **login.js** (admin login validation)

### /reusables
- **connection.php** (database connection)
- **navbar.php** (navigation bar)
- **footer.php** (footer)

### /php
- **index.php** (home page)
- **about.php** (about page)
- **addproduct.php** (admin add product page)
- **admin.php** (admin login page)
- **contact.php** (contact page)
- **deleteproduct.php** (admin delete product page)
- **menu.php** (menu page)
- **operation.php** (admin home page)
- **updateproduct.php** (admin update product page)

## Design Decisions

### Visual Design and Branding
- **Color Scheme:**  
  - Primary: `#8b5a2b` (brown) for headings and buttons.  
  - Secondary: `#f4e7d3` (light beige) for backgrounds.  
  - Accent: `#dc3545` (red) for error messages.  
  - The colors reflect the warm, inviting, and artisanal nature of the bakery.

- **Typography:**  
  - Headings: Modern, clean fonts (e.g., Lato or Montserrat).  
  - Body Text: Readable sans-serif fonts (e.g., Open Sans).  
  - The typography ensures readability and aligns with the bakery’s brand.

- **Imagery:**  
  - High-quality images of baked goods are used in the carousel and menu to create an appetizing and engaging user experience.

### Layout and Navigation
- **Responsive Design:**  
  - The website is fully responsive, adapting seamlessly to desktop, tablet, and mobile devices using Bootstrap’s grid system.

- **Navigation Structure:**  
  - A consistent navigation bar is included across all pages, providing easy access to Home, About, Menu, Contact, and Admin pages.

### User Experience (UX)
- **Accessibility:**  
  - Proper labeling for form inputs.  
  - High color contrast for readability.  
  - Form field validation.

 ## Assumptions

1. **Admin Credentials:**  
   - The admin login credentials are hardcoded for simplicity:  
     - Username: `admin`  
     - Password: `admin123`

2. **Database Setup:**  
   - The database is pre-configured with a table named `products` to store product information.  
   - The table structure is as follows:  
     ```sql
     CREATE TABLE products (
         product_id INT AUTO_INCREMENT PRIMARY KEY,
         product_name VARCHAR(255) NOT NULL,
         product_description TEXT NOT NULL,
         product_price DECIMAL(10, 2) NOT NULL,
         product_imgurl VARCHAR(255) NOT NULL
     );
     ```

3. **Local Development Environment:**  
   - The project is developed and tested using **MAMPP** with Apache and MariaDB.  
   - The project assumes the use of a local server environment for deployment.

4. **Form Validation:**  
   - Client-side validation is performed using JavaScript.  
   - Server-side validation is handled using PHP.

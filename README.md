# MovieMagnet

MovieMagnet is a responsive, Netflix-inspired web application built with PHP and MySQL that allows users to browse a curated catalog of movies and TV shows, view detailed information, and watch trailers.

## ✨ Features
* **Dynamic Content Generation:** Movie categories (Popular, Trending, TV Shows, Originals) are fetched dynamically from a local MySQL database.
* **Immersive Detail Pages:** Clicking a movie poster opens a dedicated page displaying the title, release year, rating, full plot description, and an embedded YouTube trailer.
* **Responsive Grid UI:** A sleek, dark-themed interface built with CSS Grid that seamlessly adapts to desktop, tablet, and mobile screens.
* **Base64 Image Rendering:** Movie posters are stored directly in the database as `LONGBLOB` data and rendered on the frontend using Base64 encoding.
* **Authentication Interface:** Includes a stylized "Sign In" page template for future user authentication integration.

## 🛠️ Tech Stack
* **Frontend:** HTML5, CSS3, FontAwesome (Icons)
* **Backend:** PHP
* **Database:** MySQL (`Dump20231223.sql`)

## 🗂️ Database Structure
The application uses a MySQL database named `movie_list` containing a single `movies` table. The table stores the following columns:
* `idMovies` (INT, Primary Key)
* `movieName` (VARCHAR)
* `movieImage` (LONGBLOB)
* `movieDescription` (LONGTEXT)
* `movieRating` & `movieReleaseYear` (VARCHAR)
* `movieTrailer` (VARCHAR - stores the YouTube embed URL)

## 🚀 Getting Started

### Prerequisites
* A local web server environment like XAMPP, WAMP, or MAMP to run PHP and MySQL.

### Installation
1. Clone the repository and place the project folder inside your local server's root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
2. Start your local Apache and MySQL services.
3. Open your MySQL management tool (e.g., phpMyAdmin or MySQL Workbench).
4. Create a new database named `movie_list`.
5. Import the provided `Dump20231223.sql` file into the new database to build the `movies` table and populate it with initial data.
6. Update the database credentials. In both `index.php` and `movie-detail.php`, ensure the `mysqli_connect` parameters match your local database credentials (the code currently defaults to user `"root"` and password `"denxero"`).
   ```php
   $con = mysqli_connect("localhost", "root", "your_password", "movie_list"); 
   ```
7. Open your web browser and navigate to `http://localhost/movie-magnet/index.php` (or your specific local path) to view the application.
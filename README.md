# field_rent Laravel Project

Welcome to the "field_rent" Laravel project! This repository showcases my skills and experience in building a web application using Laravel.

## Prerequisites

- PHP and Composer installed on your system.
- A database server (e.g., MySQL, PostgreSQL) installed and running.

## Getting Started

1. **Clone the Repository**
   - Clone the "field_rent" repository to your local machine:
     ```
     git clone https://github.com/your-username/field_rent.git
     ```

2. **Install Dependencies**
   - Navigate to the project directory and install the required dependencies using Composer:
     ```
     cd field_rent
     composer install
     ```

3. **Configure Environment Variables**
   - Create a copy of the `.env.example` file and rename it to `.env`:
     ```
     cp .env.example .env
     ```
   - Open the `.env` file in a text editor and configure the database connection settings to match your local database server. Set the following variables:
     ```
     DB_CONNECTION=mysql
     DB_HOST=your_database_host
     DB_PORT=your_database_port
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```
   - Save the changes.

4. **Run Migrations**
   - Now, run the database migrations to create the necessary tables in your database for the "field_rent" project:
     ```
     php artisan migrate
     ```

5. **Seed the Database (Optional)**
   - If you want to populate the database with sample data, run the database seeders:
     ```
     php artisan db:seed
     ```

6. **Start the Development Server**
   - Finally, start the local development server to access the "field_rent" Laravel project:
     ```
     php artisan serve
     ```
   - Open your web browser and visit `http://127.0.0.1:8000` to see the "field_rent" project in action.

## Important Notes

- Ensure that you have set up the database credentials correctly in the `.env` file. Double-check the values for `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.
- If you want to reset the database and re-run the migrations, use the following command:

This will drop all tables and re-run the migrations along with seeders (if available).
- For SQLite Database (Optional):
- If you decided to use SQLite, no additional database configuration is needed. Laravel will automatically create an SQLite database file for you. However, ensure the file has appropriate write permissions in your "field_rent" project directory.

## Explore the "field_rent" Project

You can now explore the different features and functionality of the "field_rent" project, which are now set up with the database structure you provided using migrations.

**Note**: Please remember that the provided database credentials and data are for demonstration purposes only and should not be used in a production environment.

Feel free to reach out to me if you have any questions or feedback regarding the "field_rent" project. Happy exploring!


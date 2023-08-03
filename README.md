# Patient Registration Project

This is a simple Laravel application for managing patient registrations.

## Getting Started

To get started with this project, follow the steps below:

### Prerequisites

- PHP 7.4 or later
- Composer ([https://getcomposer.org/](https://getcomposer.org/))

### Installation

1. Clone the repository:
   
   ```bash
   git clone https://github.com/gibs-on/Patient-registration.git
      cd patient-registration
   ```

2. Install the dependencies:
   
   ```bash
   composer install
   ```

3. Create a `.env` file by copying the example:
   
   ```bash
   cp .env.example .env
   ```

4. Generate an application key:
   
   ```bash
   php artisan key:generate
   ```

5. Set up your database configuration in the `.env` file:
   
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

6. Run the database migrations:
   
   ```bash
   php artisan migrate
   ```

7. (Optional) Seed the database with sample data:
   
   ```bash
   php artisan db:seed
   ```

### Usage

To run the development server, use the following command:

```bash
php artisan serve
```

The application will be accessible at `http://localhost:8000`.

### How to Use

1. Access the application in your web browser.
2. Fill out the patient details and the next of kin details in the form.
3. Submit the form to register a new patient.

### License

This project is licensed under the [MIT License](LICENSE).

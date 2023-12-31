## Example Runner App

This GitHub repository provides a collection of simple code examples for executing various tasks, e.g. the implementation of dynamic sortable lists and more. Whether you're a beginner or an experienced developer, these code samples serve as a handy reference for learning and experimenting with different tasks. Explore the repository to enhance your coding skills and streamline your development process.

$~~~~~~~~~~~$
### Key Experiments
Below are existing experiments in the app:


#### Sortable lists
The experiment shows how you can build a sortable list and also persist changes in the database.

$~~~~~~~~~~~$
### Getting Started

1. Clone the Repository:

```bash
git clone https://gitlab.com/mobidev-internal/example-runner-app.git
```

2. Install Dependencies:

```bash
composer install
```

3. Environment Configuration:

Save`.env.example` file in the root directory as `.env`.

Open the `.env` file and configure the database connection settings according to your local environment. Set the database name, username, and password for your database server.

4. Application Key:

```bash
php artisan migrate
```

5. Database Migration:

```bash
php artisan migrate
```

6. Seed Database

```bash
php artisan db:seed
```

7. Run the Application:

```bash
php artisan serve
```
NB: By default, the application will be accessible at `http://localhost:8000`.

8. Verify the Installation:

Open your web browser and visit `http://localhost:8000` (or the specified port).

If everything is set up correctly, you should see the Example App home page.

$~~~~~~~~~~~$
### Feedback and Support

We value your feedback! If you have any questions, suggestions, or encounter any issues while using the app, please don't hesitate to reach out to our support team. You can contact us at projects@devs.mobi

Happy experimenting!

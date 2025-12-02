# WordPress Development Environment

This is a reusable WordPress development template with Docker support.

## Using as a Template for Multiple Projects

When creating multiple projects from this template, each project will have **isolated volumes and containers** to prevent data overlap.

### Setup Steps:

1. **Copy this template** to a new project directory
2. **Rename `.env.example` to `.env`** and configure:

   - `PROJECT_NAME` - Unique name for this project (e.g., `my-client-site`)
   - Database credentials as needed
   - Port numbers (if running multiple projects simultaneously):
     - `DB_PORT` - MySQL port (default: 3306)
     - `WP_PORT` - WordPress port (default: 8080)
     - `PMA_PORT` - phpMyAdmin port (default: 8081)

3. **Start the containers:**

   ```bash
   docker compose up --build -d
   ```

4. **Install composer dependencies:**

   ```bash
   cd wp-content/themes/my-theme
   composer install
   npm run build
   ```

5. **Install NPM dependencies**

   ```bash
   cd wp-content/themes/my-theme
   npm install
   ```

6. **Start dev server**

   ```bash
   cd wp-content/themes/my-theme
   npm start
   ```

7. **Install Wordpress**

   Go to [localhost:8080](http://localhost:8080) (or other configured port) and run the installation. After that, switch to 'my-theme'.

### How Volume Isolation Works

The `PROJECT_NAME` environment variable ensures each project gets its own:

- Docker volumes (e.g., `my-project_db_data`, `my-project_wordpress_data`)
- Container names (e.g., `my-project_db`, `my-project_app`)
- Network (e.g., `my-project_wp_network`)

This means you can have multiple instances running simultaneously without any data conflicts.

### Example: Running Multiple Projects

**Project 1 (.env):**

```env
PROJECT_NAME=client-website
DB_PORT=3306
WP_PORT=8080
PMA_PORT=8081
```

**Project 2 (.env):**

```env
PROJECT_NAME=personal-blog
DB_PORT=3307
WP_PORT=8082
PMA_PORT=8083
```

Both projects can run simultaneously with completely isolated data.

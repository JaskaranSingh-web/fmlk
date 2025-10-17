# Fatmanlittlekitchen

## Overview

This project is a WordPress development environment using Docker and the Sage theme with Acorn. The goal is to make local development easy and consistent across all team members.

---

## Prerequisites

Make sure you have the following installed on your local machine:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Node.js](https://nodejs.org/) (version 16+ recommended)
- [Yarn](https://yarnpkg.com/getting-started/install) (preferred package manager for this project)
- [PHP (optional)] if you want to run WP-CLI locally (not required if you use the wpcli container)

### On macOS and Linux

All the commands (git, docker compose, yarn, etc.) will work as-is in the Terminal.

You just need to make sure Docker, Git, Node.js, and Yarn are installed and in your PATH.

### On Windows

If you use Windows Terminal, PowerShell, or Command Prompt, most commands will work but:

Commands like sudo won’t work natively unless you're in a WSL (Windows Subsystem for Linux) environment.

The redirection operator > (e.g., for dumping database) works but permissions and path formats differ slightly.

File paths use backslashes (\) instead of forward slashes (/), so be aware when specifying paths.

### Recommended setup on Windows:

Use Windows Subsystem for Linux (WSL2) — a Linux environment within Windows where you can run almost all Linux commands natively, including sudo.

Alternatively, run Docker Desktop and use the integrated PowerShell or Windows Terminal with some minor command adjustments (mainly around sudo usage).

---

## Getting Started


### 1. Fork the repository

Click the Fork button at the top right. This creates your own copy of the repo under your GitHub account.

Clone that repo to you local machine.


### 2. Copy the database dump file

Make sure you have the latest dev.sql database dump file in the root of the project directory (reach out if you need a fresh db dump from the dev server).

### 3. Start Docker containers

Run:

    sudo docker compose up -d

This will start:

    - WordPress (on port 8000)

    - MySQL database

    - WP-CLI container for command line WordPress commands

### 4. Import the database

Import the database dump into the running MySQL container:

    sudo docker compose exec db mysql -u root -proot wordpress < dev.sql


### 5. Install Node dependencies & build theme assets

Install dependencies and start the development watcher for your Sage theme:

    yarn install
    yarn dev

This will:

    - Compile theme assets

    - Start Vite’s hot module reload (HMR) server

### 6. Access the site

Open your browser and go to:

    http://localhost:8000

You should see the WordPress site running locally.

### 7. Logging in (Database updates will not be saved, so if you're adding content do it on the dev server and ask me for a new db dump)

Use the following credentials:

    Admin URL: http://localhost:8000/wp-admin

    Username: (same as dev server)

    Password: (same as dev server)

Common Commands

    Stop containers:

    sudo docker compose down

Dump your database:

    sudo docker compose exec db mysqldump -u root -proot wordpress > dev.sql

Notes

    Keep the yarn dev process running while working to enable hot reloading.

    The wp-config.php file is configured to connect to the db service for the database.

    Database changes are persistent due to Docker volumes configured for the MySQL data.

    Avoid committing sensitive files like your database dump (dev.sql) with credentials to public repos. Share privately.

Troubleshooting

If you get a blank white page, check Docker container logs:

    sudo docker compose logs wordpress


If you face issues with theme activation or Sage/Acorn errors, ensure you ran:

    yarn install
    yarn dev






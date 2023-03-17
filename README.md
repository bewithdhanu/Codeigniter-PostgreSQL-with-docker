
# CodeIgniter PostgreSQL with Docker

This repository contains a sample application that demonstrates how to use the CodeIgniter PHP framework with a PostgreSQL database, all running within Docker containers.

## Requirements

-   Docker
-   Docker Compose

## Installation

1.  Clone the repository to your local machine:

`git clone https://github.com/bewithdhanu/Codeigniter-PostgreSQL-with-docker.git` 

2.  Navigate to the project directory:

`cd Codeigniter-PostgreSQL-with-docker` 

3.  Build and start the Docker containers:

`docker-compose up -d` 

4.  Install the required dependencies using Composer:

`docker-compose run --rm php composer install` 

5.  Visit the application in your web browser at `http://localhost:8080`.

## Configuration

The application is configured to use the following environment variables:

-   `DB_HOST`: The hostname of the PostgreSQL server.
-   `DB_PORT`: The port number of the PostgreSQL server.
-   `DB_NAME`: The name of the PostgreSQL database.
-   `DB_USER`: The username to use when connecting to the PostgreSQL database.
-   `DB_PASS`: The password to use when connecting to the PostgreSQL database.

These environment variables can be set in the `docker-compose.yml` file.

## License

This repository is licensed under the MIT License. See the [LICENSE](https://chat.openai.com/chat/LICENSE) file for more information.

## Credits

This repository was created by [Dhanu K](https://github.com/bewithdhanu).

### References

-   [CodeIgniter User Guide](https://codeigniter.com/user_guide/)
-   [PostgreSQL](https://www.postgresql.org/)
-   [Docker Documentation](https://docs.docker.com/)
-   [Docker Compose Documentation](https://docs.docker.com/compose/)

## Conclusion

This is a basic example of how to use CodeIgniter with PostgreSQL and Docker. Feel free to use this as a starting point for your own applications!

# docker-php-postgres
```
$ docker-compose up -d
```
Access PHP app on http://localhost:80 and submit the form:


The docker-compose.yaml is very flexible. By editing the enviroment variables inside the file you can define the following:
* POSTGRES_USER (default = dev)
* POSTGRES_PASSWORD (default = secret)
* POSTGRES_DB (default = db)
* DEFAULT_USER (default = pgadmin@mail.com)
* DEFAULT_PASSWORD (default = mypassword)

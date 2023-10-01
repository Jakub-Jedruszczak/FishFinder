# FishFinder

A testing environment for learning Docker, securing applications and penetration testing. I aim to to increase the security gradually to learn about securing networks as well as developing my penetration testing skills against harder endpoints.

## How to use

Security patches will be progressively rolled out which will increase the difficulty. To access easier versions of the project, please use earlier versions.

``` bash
docker-compose up /path/to/main/folder
```

*Note: Since the Docker images used within this project are Debian based please run these containers on a Linux environment.*
*Please do not expose this intentionally vulnerable container cluser to the Internet!*

## How to start

* The webserver is accessible through `localhost:8080`
* The webserver's IP address is `10.10.1.1`
* The database's IP address is `10.10.1.2`

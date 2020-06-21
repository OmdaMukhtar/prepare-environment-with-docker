# lara-docker
it's just configuration environment using docker for laravel applications

what is the problem I have faces during prepare this configuratrion :
- sturcutre of the yaml file I put the ports, container_nam, volumens
into the builder of php service.
- the `docker-compose build && docker-compose up -d` is not work because need a persmision `sudo`
- the docker is not build the container because need a proxy 

#!/bin/bash


function deploy {
    echo do deploy
}

function local_dev {
    echo local_dev
    docker rm -f local_dev_server \
    && docker build -t local_dev -f $(pwd)/Dockerfile_dev . \
    && docker run -tid -p 80:80 --name="local_dev_server" -v $(pwd):/var/www local_dev
}

function build_push {
    echo build and push image to ECS
    docker build -t louis-php . \
    && docker tag louis-php:latest 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:latest \
    && docker push 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:latest
}

function help_message {
    echo l for local_dev
    echo p for build and push image to ECS
    echo d for deploy new image to ECS
}

function main {
  	case $1 in
		l) local_dev ;;
		p) build_push ;;
		d) deploy ;;
		*) help_message ;;
	esac
}

main $@

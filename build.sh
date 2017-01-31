#!/bin/bash

function deploy_80_80 {
    version=${1:-latest}
    echo deploy to ECS with version: $version
    BUILD_NUMBER=$version SERVICE_NAME=php-service3 TASK_FAMILY=louis-php-task ./update-service.sh \
    && BUILD_NUMBER=$version SERVICE_NAME=php-service5 TASK_FAMILY=louis-php-task2 ./update-service.sh
}

function deploy {
    version=${1:-latest}
    echo deploy to ECS with version: $version
    BUILD_NUMBER=$version SERVICE_NAME=php-service3 TASK_FAMILY=louis-php-task ./update-service.sh
}

function local_dev {
    echo local_dev
    docker rm -f local_dev_server \
    && docker build -t local_dev -f $(pwd)/Dockerfile_dev . \
    && docker run -tid -p 80:80 --name="local_dev_server" -v $(pwd):/var/www local_dev
}

function build_push_80_80 {
    version=${1:-latest}
    echo build and push image to ECS with version: $version
    echo version = $version
    docker build -t louis-php . \
    && docker tag louis-php:latest 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:$version \
    && docker push 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:$version

    docker build -t louis-php2 -f -f $(pwd)/Dockerfile_PROD_B . \
    && docker tag louis-php2:latest 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php2:$version \
    && docker push 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php2:$version
}

function build_push {
    version=${1:-latest}
    echo build and push image to ECS with version: $version
    echo version = $version
    docker build -t louis-php . \
    && docker tag louis-php:latest 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:$version \
    && docker push 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:$version
}

function test_script {
    version=${1:-latest}
    echo build and push image to ECS with version: $version
    echo version = $version
}

function help_message {
    echo l for local_dev
    echo p for build and push image to ECS
    echo d for deploy new image to ECS
}

function main {
  	case $1 in
		l) local_dev ;;
		p) build_push "${@:2}" ;;
		d) deploy "${@:2}";;
		a) build_push "${@:2}" && deploy "${@:2}";;
		a80) build_push_80_80 "${@:2}" && deploy_80_80 "${@:2}";;
		t) test_script "${@:2}" ;;
		*) help_message ;;
	esac
}

main $@

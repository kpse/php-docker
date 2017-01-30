#/bin/bash

docker build -t louis-php . \
&& docker tag louis-php:latest 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:latest \
&& docker push 993146248788.dkr.ecr.ap-southeast-2.amazonaws.com/louis-php:latest
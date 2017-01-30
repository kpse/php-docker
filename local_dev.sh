#/bin/bash

docker rm -f local_dev_server \
&& docker build -t local_dev -f $(pwd)/Dockerfile_dev . \
&& docker run -tid -p 80:80 --name="local_dev_server" -v $(pwd):/var/www local_dev
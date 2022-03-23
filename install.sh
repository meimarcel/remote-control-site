#!/bin/bash

composer install
npm install
npm run dev

LINK="/usr/bin/remotecontrolsite"

DIR=$(pwd)

IP="127.0.0.1"

ips=($(hostname -I))

for ip in "${ips[@]}"
do
    if [ ${ip:0:7} == "192.168" ]; then
        IP=$ip
    fi
done


if [ ! -e "$DIR/bin" ]; then
    mkdir bin
fi

echo "#!/usr/bin/env sh" > bin/remotecontrolsite
echo "php $DIR/artisan --host=$IP --port=8000 serve" >> bin/remotecontrolsite

sudo chmod +x $DIR/bin/remotecontrolsite

if [[ ! -L $LINK ]]; then
    sudo ln -s $DIR/bin/remotecontrolsite /usr/bin/remotecontrolsite
fi

echo ""
echo "################################################################"
echo "#   To Start the application run \"remotecontrolsite\" command   #"
echo "################################################################"
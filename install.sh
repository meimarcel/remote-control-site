#!/bin/bash

composer install
npm install
npm run dev

LINK="/usr/bin/remotecontrolsite"

DIR=$(pwd)

if [ ! -e "$DIR/bin" ]; then
    mkdir bin
fi

echo "#!/usr/bin/env sh" > bin/remotecontrolsite
echo "php $DIR/artisan serve" >> bin/remotecontrolsite

sudo chmod +x $DIR/bin/remotecontrolsite

if [[ ! -L $LINK ]]; then
    sudo ln -s $DIR/bin/remotecontrolsite /usr/bin/remotecontrolsite
fi

echo ""
echo "################################################################"
echo "#   To Start the application run \"remotecontrolsite\" command   #"
echo "################################################################"
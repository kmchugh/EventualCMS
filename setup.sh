#!/bin/bash
# Setup of environment for development

# Install macports for mac?
# install php
# install openssl for php

# install composer
curl -sS https://getcomposer.org/installer | php -d detect_unicode=Off -- --install-dir=php/eventual

# install the required modules
cd ./php/eventual/
php composer.phar install
cd ../..
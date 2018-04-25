#!/usr/bin/env bash

# app dir permission
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache


# config init
sed -i "s/'timezone' =>.*/'timezone' => 'Asia\/Seoul',/" config/app.php
sed -i "s/'locale' =>.*/'locale' => 'ko',/" config/app.php
sed -i "s/'fallback_locale' =>.*/'fallback_locale' => 'ko',/" config/app.php

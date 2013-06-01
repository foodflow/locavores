# prepare config files
run "ln -s #{release_path}/web/app.php #{release_path}/web/index.php"

# set timezone
sudo "echo 'date.timezone = America/Los_Angeles' > /etc/php/cgi-php5.4/ext-active/timezone.ini"
sudo "echo 'date.timezone = America/Los_Angeles' > /etc/php/cli-php5.4/ext-active/timezone.ini"
sudo "echo 'date.timezone = America/Los_Angeles' > /etc/php/fpm-php5.4/ext-active/timezone.ini"

# get environment vars
run "source #{shared_path}/config/cli.env"

# kick composer install
run "curl -s https://getcomposer.org/installer | php -d allow_url_fopen=on"
run "php -d allow_url_fopen=on composer.phar install"
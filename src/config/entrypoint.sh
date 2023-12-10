chown -R www-data:www-data /var/www/html/api/storage
chmod -R www-data:www-data /var/www/html/api
chmod -R 755 /var/www/html/api

cd /var/www/html/admin/

wp --allow-root cli update

wp --allow-root config create \
  --dbname="wpdb" \
  --dbuser="wpuser" \
  --dbpass="wppass" \
  --dbhost="db" \
  --extra-php <<PHP

  define('SERVER_NAME', 'localhost');

PHP

wp --allow-root plugin delete akismet hello

wp --allow-root plugin install advanced-custom-fields --activate

exec apache2-foreground

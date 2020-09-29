mysql -u root -e "create database mapa"
cp .env.example .env
sed -i "s|APP_URL=|APP_URL=${GITPOD_WORKSPACE_URL}|g" .env
sed -i "s|APP_URL=https://|APP_URL=https://8000-|g" .env
composer install
npm install
npm run dev
php artisan key:generate

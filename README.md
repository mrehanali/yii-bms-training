# Yii Framework Learning

### Requirements
* PHP 5.4+ with mod rewrites enabled
* PDO with pdo_mysqli extension
* PHP GD Library `sudo apt-get install php5-gd`
* FreeType `sudo apt-get install freetype*`

## Installation (Basic)

### Fresh Install
```sh
sudo -s
cd /home/coeus/projects
composer global require "fxp/composer-asset-plugin:~1.0.0"
composer create-project --prefer-dist yiisoft/yii2-app-basic bms-learning
Provide a token (if required)
https://github.com/settings/tokens/new?scopes=repo
chown -R $USER:$USER /home/coeus/projects/bms-learning
chmod -R 777 /home/coeus/projects/bms-learning
```

### By Cloning Git Repository
```sh
sudo -s
cd /home/coeus/projects
git clone https://github.com/mrehanali/yii-bms-training.git
cd yii-bms-training/
git branch
git branch -a
git checkout feature/YOUR_NAME
composer update
```

Create a database, rename `/db/config-default.php` to `/db/config.php` and configure accordingly. After this run following commands

```sh
sudo -s
cd /home/coeus/projects
php yii migrate
chown -R $USER:$USER /home/coeus/projects/bms-learning
chmod -R 777 /home/coeus/projects/bms-learning
```
## Create a Virtual Host (http://bms-learning.dev)
```sh
sudo -s
apt-get update
cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/bms-learning.dev.conf
gedit /etc/apache2/sites-available/bms-learning.dev.conf
a2ensite bms-learning.dev.conf
service apache2 restart
gedit /etc/hosts
```
Add
127.0.0.1   bms-learning.dev

## Git Versioning
### Push Changes to Git
```sh
sudo -s
cd /home/coeus/projects/bms-learning
git add -A
git commit -m [comments]
git push origin feature/YOUR_NAME
```
### Pull Changes from Git
```sh
sudo -s
cd /home/coeus/projects/bms-learning
git pull origin feature/YOUR_NAME
```

## ngrok Installation and Usage
```sh
sudo gedit /etc/apache2/sites-available/bms-learning.dev.conf
```
Update the IP Address for localhost (e.g. 127.0.0.3)
```sh
service apache2 restart
sudo gedit /etc/hosts
```
Update
127.0.0.3   bms-learning.dev
```sh
cd /home/coeus/projects/
wget "https://dl.ngrok.com/ngrok_2.0.19_linux_amd64.zip"
unzip ngrok_2.0.19_linux_amd64.zip
./ngrok http 127.0.0.3:80
```
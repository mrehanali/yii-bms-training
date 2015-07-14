# Yii Framework Learning
## Installation (Basic)
```sh
sudo -s
cd /home/coeus/projects
composer global require "fxp/composer-asset-plugin:~1.0.0"
composer create-project --prefer-dist yiisoft/yii2-app-basic bms-learning
Provide a token (if required)
https://github.com/settings/tokens/new?scopes=repo
chown -R $USER:$USER /home/coeus/projects/bms-learning
chmod -R 777 /home/coeus/projects/bms-learning
apt-get update
cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/bms-learning.dev.conf
gedit /etc/apache2/sites-available/bms-learning.dev.conf
a2ensite bms-learning.dev.conf
service apache2 restart
gedit /etc/hosts
Add
127.0.0.1   bms-learning.dev
```
## Documentation
### Requirements
PHP 5.4 + with mod rewrites
PDO with pdo_mysqli
### Prerequisites
Yii requires basic knowledge of object-oriented programming (OOP), as Yii is a pure OOP-based framework. Yii 2.0 also makes use of the latest features of PHP, such as namespaces and traits. Understanding these concepts will help you more easily pick up Yii 2.0.
### Updates
```sh
git clone https://github.com/mrehanali/yii-bms-training.git
cd yii-bms-training/
//to check current branch
git branch
git branch -a
git checkout feature/Abdullah
git branch
git add -A
git commit -m [comments]
git push origin feature/Abdullah
```

# Getting started

1. Installer l'extension Mongo DB
   1. Télécharger et installer MongoDB : https://www.mongodb.com/try/download/community
   2. Configurer MongoDB :
      1. Créer un dossier pour stocker les données de la base de données, par exemple C:\data\db. 
      2. Ouvrer une invite de commande en tant qu'administrateur et naviguez vers le dossier d'installation de MongoDB (par exemple, C:\Program Files\MongoDB\Server\4.4\bin). 
      3. Démarrer le serveur MongoDB avec la commande : `./mongod --dbpath C:\data\db`

1. Installer l'extension MongoDB pour PHP
   1. Télécharger driver pour Windows 64 bits et php 7.4 :
      https://pecl.php.net/package/mongodb/1.13.0/windows
      Prendre la version 7.4 Thread Safe (TS) x64
   2. La copier dans `C:\wamp64\bin\php\php7.4.33\ext\php_mongodb.dll`
   3. Ajouter la ligne `extension=php_mongodb.dll`
       - Dans C:\wamp64\bin\php\php7.4.33\php.ini
       - Dans C:\wamp64\bin\php\php7.4.33\phpForApache.ini
1. `composer install`
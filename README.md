# Carpintería Sarabia

Proyecto final para la EE Desarrollo de sistemas web.
Este sistema consta de un inventario de muebles para la carpintería Sarabia. Su función principal es exhibir el catálogo de muebles disponibles en la carpintería, con el objetivo de promover de manera más efectiva los productos que se pretenden comercializar. Además, facilita la obtención de información de contacto con el propietario de la empresa. Para los empleados, se proporciona un inicio de sesión que les permite realizar modificaciones en los muebles presentados y gestionar las cuentas registradas en el sistema.

## Equipo
- <a href="https://github.com/LeoMe34">Leonardo Alejandro Mendez Miranda</a> 
- <a href="https://github.com/Ronny12301">Ronny Pérez Juárez </a>
- <a href="https://github.com/JarikAnota">Jarik Ernesto Reyes Anota</a>

## Documentos
- <a href="https://docs.google.com/document/d/1S_1tJ4ldyJcTt_EZMbKfYPTDRYoHf7-WRIwUyohMjJY/edit?usp=sharing">Documentación</a>
- <a href="https://docs.google.com/document/d/1gQE64macSAvNFxgwgUGa_J3GsiqWsPcPMhnCZVla6Y4/edit?usp=sharing">Propuesta</a>

## Capturas
![menu principal](https://github.com/Ronny12301/carpinteria-sarabia/assets/100802754/c42a91b1-9d92-4cab-9ef7-288844e75104)
![image](https://github.com/Ronny12301/carpinteria-sarabia/assets/100802754/5602257a-4c20-45aa-b9b5-5da61538368b)
![datos de contacto](https://github.com/Ronny12301/carpinteria-sarabia/assets/100802754/f78d0391-69cc-4e3b-b0e5-c5ef9e69e855)
![inicio de sesión](https://github.com/Ronny12301/carpinteria-sarabia/assets/100802754/317f11fc-b2ba-40f3-96dd-3737dc5fa948)
![lista de empleados](https://github.com/Ronny12301/carpinteria-sarabia/assets/100802754/46f2740b-094f-41ee-ba7c-05bd60e1a546)

## Dependencias a instalar

- [PHP](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [NodeJS](https://nodejs.org/en)
- [MySQL](https://www.mysql.com/downloads/)

### Ejecutar el sistema en local

```
composer update
npm run build
php artisan serve
```

## Desplegar en un servidor Linux

Para desplegar un servidor en Apache2 en una maquina Linux se deben ejecutar los siguientes comandos

```
sudo apt update

sudo apt install nodejs -y

# instalar git wget y unzip para descargar PhpMyAdmin de su pagina oficial
sudo apt install git wget unzip -y

# instalar servidor apache
sudo apt install apache2 -y
sudo ufw allow 'Apache Full'
sudo ufw enable

# instalar mysql server
sudo apt install mysql-server -y
sudo bash -c "echo -e 'n\ny\ny\ny\ny\n' | mysql_secure_installation"
sudo mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY ''; FLUSH PRIVILEGES;"
sudo mysql -u root -e "CREATE DATABASE carpinteria_sarabia;"

# instalar PHP y librerias para conectarse a MySQL, apache pueda manejar los archivos, comprimir zips, usar artisan y correr los seeders
sudo apt install php libapache2-mod-php php-mysql php-zip php-xml php-mbstring php-gd php-curl -y

# composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


# PhpMyAdmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip
unzip phpMyAdmin-5.2.1-all-languages.zip
sudo mv phpMyAdmin-5.2.1-all-languages /var/www/phpmyadmin
rm phpMyAdmin-5.2.1-all-languages.zip
# cambiar dueño de carpeta
sudo chown -R $USER:$USER /var/www/phpmyadmin


# agregar a localhost/phpmyadmin
PHPMYADMIN='

# phpmyadmin
Alias /phpmyadmin /var/www/phpmyadmin
<Directory "/var/www/phpmyadmin">
   Options None
   AllowOverride None
   Require local
</Directory>
'
echo "$PHPMYADMIN" | sudo tee -a /etc/apache2/apache2.conf

sudo cp /var/www/phpmyadmin/config.sample.inc.php /var/www/phpmyadmin/config.inc.php
sudo sed -i "s/\$cfg\['Servers'\]\[\$i\]\['AllowNoPassword'\] = false;/\$cfg\['Servers'\]\[\$i\]\['AllowNoPassword'\] = true;/" "/var/www/phpmyadmin/config.inc.php"

# permisos
sudo chown -R $USER:$USER /var/www/
sudo usermod -a -G $USER www-data
sudo chmod -R 775 /var/www/


# firewall al puerto 3336, para bloquear conexiones externas a la BD
sudo iptables -A INPUT -p tcp --dport 3306 -j DROP
sudo debconf-set-selections <<< "iptables-persistent iptables-persistent/autosave_v4 boolean true"
sudo debconf-set-selections <<< "iptables-persistent iptables-persistent/autosave_v6 boolean true"

sudo apt install iptables-persistent -y
sudo netfilter-persistent save


```

Despues de configurar el servidor, se debe clonar el repositorio

```
git clone https://github.com/Ronny12301/carpinteria-sarabia.git /var/www/carpinteria-sarabia.ddns.net
```

Habilitar el sitio en el servidor apache
```
CARPINTERIA='<VirtualHost *:80>
   ServerName carpinteria-sarabia.ddns.net
   ServerAdmin webmaster@localhost
   DocumentRoot /var/www/carpinteria-sarabia.ddns.net/public
   
   <Directory /var/www/carpinteria-sarabia.ddns.net/public>
       AllowOverride All
       Require all granted
   </Directory>
   
   ErrorLog ${APACHE_LOG_DIR}/error.log
   CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>'

# Crea el archivo de configuración con el texto
echo "$CARPINTERIA" | sudo tee /etc/apache2/sites-available/carpinteria-sarabia.ddns.net.conf

# habilitar el sitio
sudo a2ensite carpinteria-sarabia.ddns.net

# generar tablas de la BD
php /var/www/carpinteria-sarabia.ddns.net/artisan migrate:fresh


```

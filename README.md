# Basic Symfony 4.4 project with docker

## Services :
    - php-fpm-alpine
    - Composer:latest
    - MySQL:5.7
    - Nginx:latest
    - Adminer:latest
    
## Commands with Makefile

### Docker Commands

#### Start services : 
 - **make start**
    
#### Restart services : 
 - **make restart**
    
#### Stop services : 
 - **make stop**
    
### Composer Commands

#### Delete the generated files and clean the project folder : 
 - **make clean**
    
#### Composer install : 
 - **make install**
    
#### Composer update
 - **make update**
    
#### Composer require
 - **make require ${PACKAGE}**
    
#### Composer require --dev
 - **make require-dev ${PACKAGE}**
    
#### Composer remove
 - **make remove ${PACKAGE}**    
    
#### Composer autoload       
 - **make autoload**
 
### Symfony Commands

#### Clear cache
 - **make cache:clear**    
      
Details of each commands are in the **Makefile**.

### PHPStan Command 
 - **vendor/bin/phpstan analyse src**
 
### PHPCodesniffer Commands
 - **vendor/bin/phpcs**
 - **vendor/bin/phpcbf**  

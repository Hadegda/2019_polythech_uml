# Installation

## Download

* https://dev.mysql.com/downloads/mysql/
* https://windows.php.net/download
* https://xdebug.org/download.php
* https://code.visualstudio.com/download

## Installation

### setpath.cmd

    set PATH=D:\php-master-class\soft\mysql\bin;D:\php-master-class\soft\php;%PATH%

1. запуск cmd
1. php -v
1. php -S localhost:9999

### Debug

1. Скопировать php_xdebug-2.7.0RC2-7.3-vc15-x86_64.dll в **php/ext**
1. Изменить **php.ini**

        zend_extension="D:/php-master-class/soft/php/ext/php_xdebug-2.7.0RC2-7.3-vc15-x86_64.dll"

        xdebug.remote_autostart=on
        xdebug.remote_enable=on
        xdebug.remote_handler="dbgp"
        xdebug.remote_host="localhost"
        xdebug.remote_port=8999
        xdebug.idekey="PHP"


## Chrome
* Ctrl+Shift+I или Menu>More Tools>Developer Tools

## PHP Storm

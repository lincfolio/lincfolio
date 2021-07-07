FROM php:latest

RUN apt update
RUN apt install nano -y
RUN apt install wget -y
RUN apt install git -y
# Redis to be used in the future
 # RUN apt install redis -y

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && php composer-setup.php && php -r "unlink('composer-setup.php');" && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www

RUN git clone https://github.com/lincfolio/lincfolio.git
RUN mv public html
RUN mv html/public/* html
RUN rm -r html/public
RUN chmod 770 .
RUN chmod 775 html
RUN composer require klein/klein

WORKDIR /

COPY ./entrypoint.sh .
RUN chmod +x entrypoint.sh

ENTRYPOINT bash entrypoint.sh
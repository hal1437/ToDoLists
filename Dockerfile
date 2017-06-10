
# centosをpullする
FROM centos:centos6.9

# リポジトリをyumに追加
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
RUN rpm -Uvh http://dev.mysql.com/get/mysql57-community-release-el6-7.noarch.rpm

# apacheのインストール
RUN yum update -y && yum clean all
RUN yum -y install httpd

# PEARをインストール
RUN yum -y install php-pear

#xmlwriterをインストール
RUN yum -y install php-xml
# PHP-CodeSnifferをインストール
RUN pear install PHP_CodeSniffer

# PHP5.6をインストール
RUN yum -y install --enablerepo=remi,remi-php56 php
RUN yum -y install --enablerepo=remi,remi-php56 php-mbstring 
RUN yum -y install --enablerepo=remi,remi-php56 php-intl
RUN yum -y install --enablerepo=remi,remi-php56 php-pdo
RUN yum -y install --enablerepo=remi,remi-php56 php-mysqlnd

#mysqlをインストール
RUN yum -y install mysql-community-server

#composerのインストール
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# ディレクトリのコピー
COPY bin/      /var/www/html/bin/
COPY config/   /var/www/html/config/
COPY plugins/  /var/www/html/plugins/
COPY src/      /var/www/html/src/
COPY tests/    /var/www/html/tests/
COPY vendor/   /var/www/html/vendor/
COPY webroot/  /var/www/html/webroot/

# ファイルのコピー
COPY index.php     /var/www/html/
COPY composer.json /var/www/html/
COPY composer.lock /var/www/html/

# HTMLディレクトリに移動
WORKDIR /var/www/html/

# composer起動
RUN yes | composer install

# サーバーの設定ファイルを一部変更
RUN sed -i -e "s/#ServerName www.example.com:80/ServerName ToDoLists:80/" /etc/httpd/conf/httpd.conf 
RUN sed -i -e "s/\/var\/www\/html/\/var\/www\/html\/webroot/" /etc/httpd/conf/httpd.conf 

# 自動起動に設定
RUN chkconfig httpd on
RUN chkconfig mysqld on



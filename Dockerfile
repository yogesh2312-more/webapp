FROM centos:7
MAINTAINER yogesh@more
RUN yum install httpd -y
COPY ./index.php /var/www/html
EXPOSE 80
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
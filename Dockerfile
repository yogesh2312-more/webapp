FROM centos:7
MAINTAINER yogesh@more2312
RUN yum install httpd -y
COPY ./index.php /var/www/html
EXPOSE 80
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]

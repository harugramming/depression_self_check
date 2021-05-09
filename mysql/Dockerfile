FROM mysql:8.0

# 以下追加
RUN apt-get update \
    && apt-get install -y locales \
    && locale-gen ja_JP.UTF-8 \
    && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc
# ここまで

COPY my.cnf /etc/mysql/conf.d/my.cnf

CMD ["mysqld"]
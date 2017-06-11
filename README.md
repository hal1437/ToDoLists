# ToDoLists

[![Build Status](https://travis-ci.org/hal1437/ToDoLists.svg?branch=master)](https://travis-ci.org/hal1437/ToDoLists)

ToDoListsはToDoリストを管理できるWebアプリケーションです。  
ブラウザからアクセスでき、あなたのやるべきことのリストを作成できます。

# 環境

+ cakePHP 3.4
+ mysql
+ Docker

# インストール方法

1. リポジトリをダウンロードし、ディレクトリを移動します。
```
git pull https://github.com/hal1437/ToDoLists/
cd ToDoLists/
```

2. Dockerファイルをビルドします。（**非常に時間がかかります。**）
```
docker-compose build
```

3. Dockerコンテナを起動します。
```
docker-compose up 
```

4. ブラウザの[localhost](http://localhost/)にアクセスすることで、ToDoListsを利用できます。


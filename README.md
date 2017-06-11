# 概要
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
docker-composeup 
```

4. ブラウザの[localhost](http://localhost/)にアクセスすることで、ToDoListsを利用できます。


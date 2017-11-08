# 仮想開発環境構築手順書

## 環境構築

```
$ mkdir ~/projects;
$ git clone https://github.com/starlod/blog ~/projects/blog
$ cd ~/projects/blog
$ vagrant up
```

以上で環境構築は完了です。

## ビルドインサーバ

```
$ vagrant ssh
$ cd ~/blog
$ php artisan serve --host 0.0.0.0
```

http://192.168.33.11:8000

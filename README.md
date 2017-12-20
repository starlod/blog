## 準備

Vagrant, VirtualBoxインストール済みの人は準備不要です。

```
$ brew tap caskroom/cask
$ brew cask install virtualbox
$ brew cask install vagrant

$ vagrant -v
Vagrant 2.0.1
$ VBoxManage -v
5.2.0r118431

$ vagrant plugin install vagrant-hostsupdater
```

## 環境構築

```
$ git clone https://github.com/starlod/blog
$ cd blog
$ cp Vagrantfile.example Vagrantfile
$ vagrant up
$ vagrant ssh-config --host=blog-dev >> ~/.ssh/config
```

## ビルトインサーバ起動

```
$ vagrant ssh -c "cd blog; php artisan serve --host 0.0.0.0"
$ open http://blog.local:8000
```

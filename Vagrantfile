Vagrant.configure('2') do |config|
  # Boxの設定
  config.vm.box = 'centos/7'
  # ホスト名
  config.vm.hostname = 'blog.dev'
  # ネットワーク設定
  config.vm.network :private_network, ip: '192.168.33.11'
  # 共有フォルダ設定
  config.vm.synced_folder '.', '/home/vagrant/blog', create: true, mount_options: ['dmode=777', 'fmode=777']
  # プロビジョン
  config.vm.provision :bootstrap, type: :shell, :path => 'provision/bootstrap.sh'
  config.vm.provision :bootstrap_default_user, type: :shell, :path => 'provision/bootstrap_default_user.sh', privileged: false
end

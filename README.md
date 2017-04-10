# ansible-docker

My docker-hosting ubuntu provisioner with ansible.

## Usage

### 1. remote side

```
$ apt-get install -y python 
```

### 2. local side

```
$ echo {remote hostname} > hosts
$ ANSIBLE_USER_PASSWORD={password for new user} ansible-playbook -i hosts -u root playbook.yml
```

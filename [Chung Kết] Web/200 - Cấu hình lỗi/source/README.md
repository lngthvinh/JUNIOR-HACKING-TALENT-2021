# devops

## Sơ đồ Setup

![Sơ đồ Setup](./sodo.svg)

## Note

`internal.kid.cyberjutsu-lab.tech` là domain sử dụng nội bộ.
```
$ nslookup internal.kid.cyberjutsu-lab.tech
Server:         8.8.8.8
Address:        8.8.8.8#53

Non-authoritative answer:
Name:   internal.kid.cyberjutsu-lab.tech
Address: 127.0.0.1
```

Chạy lệnh sau để start docker
```
sudo docker build . -t web-devops
sudo docker run -d -p 0.0.0.0:3111:80 --name web-devops web-devops
```
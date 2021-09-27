# Trốn tìm
200 điểm

Lần theo manh mối của các thử thách trước, em phát hiện ra có một máy tính đang được khởi động. Bỗng nhiên bảng điều khiển của hệ điều hành Linux được bật lên.

Một dòng chữ hướng dẫn hiện ra...

#
Thông tin truy cập: ssh player@178.128.19.56 -p 9595

Mật khẩu: "player"

```
player@5d320c7128ed:~$ find / -name getFlag 2> /dev/null
/secret/secret2/getFlag
player@5d320c7128ed:~$ cd /secret/secret2
player@5d320c7128ed:/secret/secret2$ ./getFlag | grep "CTF{"
CTF{now_you_know_grep}
```

> CTF{now_you_know_grep}


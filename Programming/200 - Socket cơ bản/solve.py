# !/usr/bin/python
"""
nc 178.128.19.56 20001
Xin chào, ở thử thách này bạn sẽ được làm quen với socket programming. Bước 1: bạn hãy thử nhận thêm 1 hàng từ phản hồi của server nhé
Bước 2: Bạn có thể gửi cho server số 100 không? (Sau khi gửi, bạn hãy nhớ nhận thêm 1 hàng từ phản hồi của server nhé)
Bạn đã hết giờ để trả lời
"""

import socket

s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
s.connect(('178.128.19.56',20001))

data = s.recv(999999)
print(data.decode())

data = s.recv(999999)
print(data.decode())
i1 = data.index('số'.encode())
i2 = data.index('không?'.encode())
str = data[(i1+5):(i2-1)]
print(str.decode())
s.sendall(f"{str.decode()}\n".encode())

data = s.recv(999999)
print(data.decode())
i1 = data.index('số'.encode())
i2 = data.index('không?'.encode())
str = data[(i1+5):(i2-1)]
print(str.decode())
s.sendall(f"{str.decode()}\n".encode())

data = s.recv(999999)
print(data.decode())
data = s.recv(999999)
print(data.decode())
data = s.recv(999999)
print(data.decode())


# CTF{can_you_write_your_own_script?}

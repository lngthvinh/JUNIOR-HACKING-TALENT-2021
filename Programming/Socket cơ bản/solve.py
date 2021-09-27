# !/usr/bin/python

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


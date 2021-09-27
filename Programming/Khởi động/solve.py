# !/usr/bin/python

def solver(d1, d2, d3):
    # xu ly d2
    if d2 == "2":
        d1 = "0b" + d1
    if d2 == "8":
        d1 = "0o" + d1
    if d2 == "16":
        d1 = "0x" + d1

    # xu ly d3
    if d3 == "2":
        return bin(int(d1, int(d2)))[2:]
    if d3 == "8":
        return oct(int(d1, int(d2)))[2:]
    if d3 == "10":
        return int(d1, int(d2))
    if d3 == "16":
        return hex(int(d1, int(d2)))[2:]

    return 1

import socket

s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
s.connect(('178.128.19.56',9797))

data = s.recv(999999)
print(data.decode())

while True:
    data = s.recv(999999)
    print(data.decode())
    if 'CTF{'.encode() in data:
        break
    i1 = data.index('chuyển'.encode())
    i2 = data.index('từ'.encode())
    i3 = data.index('sang'.encode())
    
    d1 = data[(i1+9):(i2-1)].decode()
    d2 = data[(i2+10):(i3-1)].decode()
    d3 = data[(i3+10):(len(data)-1)].decode()
    
    str = solver(d1, d2, d3)
    print(str)

    s.sendall(f"{str}\n".encode())


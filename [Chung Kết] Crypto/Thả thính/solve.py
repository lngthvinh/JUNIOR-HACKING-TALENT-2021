# !/usr/bin/python
# nc 178.128.19.56 25555
'''
Như các em đã biết, thư viện random được dùng để tạo ra các số ngẫu nhiên. Tuy nhiên, nó sẽ "không 
thực sự" ngẫu nhiên như chúng ta nghĩ ở trong trường hợp này. Vì sao?

Trước đó, tác giả đã gọi hàm random.seed. Seed (hạt giống) trong random là một con số được gieo vào 
để khởi tạo trạng thái bắt đầu trong cỗ máy random. Hạt giống này sẽ quyết định các kết quả random 
sau đó.

Vì vậy, với một seed giống nhau, thì ở bất kì lần chạy nào, cũng sẽ cho ra các kết quả random sau đó 
giống nhau.

Tham khảo: https://www.geeksforgeeks.org/random-seed-in-python/
'''

def print_fl(s: str):
    print(s, flush=True)

def shuffle(arr):
    res = []
    while len(arr) > 0:
        randIndex = random.randint(0, len(arr) - 1)
        res.append(arr[randIndex])
        arr.pop(randIndex)
    return res

def get_fish() -> str:
    arr = [
        {"type": "Cá vàng"},
        {"type": "Cá mập"},
        {"type": "Cá cơm"},
    ]
    return shuffle(arr)

def solver():
    for index, item in enumerate(get_fish()):
        if item["type"] == "Cá vàng":
            return index + 1

import socket
import random

s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
s.connect(('178.128.19.56',25555))

data = s.recv(999999)
print(data.decode())

'''
Break hear to debug
in calcSeed.py change your t1 and t2, user_id
run it to get random.seed value
then change it here
                 ||
                \||/
                 \/
'''
random.seed(418003423461)
random.randint(1000000, 9999999)
for i in range(62):
    data = s.recv(999999)
    print(data.decode())
    
    bait = solver()
    print(bait)
    s.sendall(f"{bait}\n".encode())

# Bạn được nhà vua ban thưởng:
# "CTF{https://stackoverflow.com/search?q=27284943} Read that link plz, not so random huh?"


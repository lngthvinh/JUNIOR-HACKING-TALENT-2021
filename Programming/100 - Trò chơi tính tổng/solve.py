f1 = open("dayso.txt", "r")
arr = f1.read().split()

tong = 0
for i in arr:
    tong += int(i)
print(tong)
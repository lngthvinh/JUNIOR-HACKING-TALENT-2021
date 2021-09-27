def myDef(a, b):
    return 65 + (ord(a)-ord(b)) % 26

p = "HELLOWORLDCRYPTOGRAPHERS"
c = "HRNTSJHTTSJVPHTFKRWTZSDW"

for i in range(len(p)):
    print(chr(myDef(c[i], p[i])), end='')

# CTF{ANCIENTCIPHERSAREAWESOME}

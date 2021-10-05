# WRITEUP

Looking at file access.log, i search "/files/" to see successful file responses. Then i see this so weird.
```
14.73.88.95 - - [09/Sep/2021:14:54:44 +0000] "GET /files/14ec09bb925ed43775d1f8c1b0c87a74.zip HTTP/1.1" 304 0
```

Then i go to web and paste this. I get Minh's homework but this have a pass for extract.

Use Wireshark to read file pcapng. 

tcp.stream eq 0 > Follow > TCP Stream
```
kaka
```
tcp.stream eq 1 > Follow > TCP Stream
```
hi Minh
hi Nam
lam bai tap chua?
chua ~~
hic
```
tcp.stream eq 2 > Follow > TCP Stream
```
e password giai nen bai tap la gi vay?
cho t chut nha ban hien
```
tcp.stream eq 3 > Follow > TCP Stream
```
lau qua vay?
tim ra rui`
passwd ne`: emyeukhoahoc***2003
ok ban hien^`
gud luck
```

Then i get password and extract homework zip. I got flag.
> CTF{1-l0ve-m4th-b9247d7608a7e63ae119982ff59db431}


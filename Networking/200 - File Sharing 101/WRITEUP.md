# WRITEUP

```
C:\Users\HP>ftp 178.128.19.56
Connected to 178.128.19.56.
220 (vsFTPd 3.0.3)
200 Always in UTF8 mode.
User (178.128.19.56:(none)): user
331 Please specify the password.
Password:
230 Login successful.
ftp> ls
200 PORT command successful. Consider using PASV.
150 Here comes the directory listing.
flag.txt
226 Directory send OK.
ftp: 13 bytes received in 0.00Seconds 13000.00Kbytes/sec.
ftp> get flag.txt
200 PORT command successful. Consider using PASV.
150 Opening BINARY mode data connection for flag.txt (28 bytes).
226 Transfer complete.
ftp: 28 bytes received in 0.00Seconds 28000.00Kbytes/sec.
ftp> quit
221 Goodbye.

C:\Users\HP>type flag.txt
CTF{File_Transfer_Protocol}
```

> CTF{File_Transfer_Protocol}


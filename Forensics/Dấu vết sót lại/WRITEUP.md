# WRITEUP

```
# ssh player@178.128.19.56 -p 9595
player@178.128.19.56's password: 
******************************************************
******************************************************
*                                                    *
* Trong may nay co mot file thuc thi ten la "getFlag"*
* Ban hay tim va chay no de co them manh moi ve flag *
* Chuc may man!                                      *
*                                                    *
******************************************************
******************************************************
player@5d320c7128ed:/$ ls -l /home
total 12
drwxr-xr-x 1 admin  admin  4096 Sep 20 11:14 admin
drwxr-xr-x 1 player player 4096 Sep 27 18:16 player
drwxr-xr-x 2 psec   psec   4096 Sep 20 11:14 psec
player@5d320c7128ed:/$ ls -la /home/admin
total 28
drwxr-xr-x 1 admin admin 4096 Sep 20 11:14 .
drwxr-xr-x 1 root  root  4096 Sep 20 11:14 ..
-rw-r--r-- 1 admin admin 1791 Sep 11 10:12 .bash_history
-rw-r--r-- 1 admin admin  220 Feb 25  2020 .bash_logout
-rw-r--r-- 1 admin admin 3771 Feb 25  2020 .bashrc
-rw-r--r-- 1 admin admin  807 Feb 25  2020 .profile
player@5d320c7128ed:/$ cat /home/admin/.bash_history
ls -al ~
exit
bash_logout
cat ~/.profile
ls -al ~
cat ~/.bash_history
exit
cat ~/.bash_history
ssh
exit
cat ~/.bash_history
echo "CTF{s0mething_sn34ky_hidd3n}"
nano ~/.bash_history
apt install nano
chmod +x vmware-install.pl
...
```

> CTF{s0mething_sn34ky_hidd3n}


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
player@5d320c7128ed:~$ find / -name getFlag 2> /dev/null
/secret/secret2/getFlag
player@5d320c7128ed:~$ cd /secret/secret2
player@5d320c7128ed:/secret/secret2$ ./getFlag | grep "CTF{"
CTF{now_you_know_grep}
```

> CTF{now_you_know_grep}


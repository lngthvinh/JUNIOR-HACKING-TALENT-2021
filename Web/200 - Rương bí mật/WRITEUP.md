# WRITEUP

Read function checkPass

```javascript
<script>

    function checkPass(password) {
        if (password[0] != "3")
            return false;
        if (password[1] + 1 != String.fromCharCode(53, 49))
            return false;
        if (password.charCodeAt(5) != 8 * 6)
            return false;
        if (password[2] + password[3] != "62")
            return false;
        if (password[4] - password[0] != 4)
            return false;
        return true;
    }

    function check() {
        password = combo.getCombination(); // Get user password
        console.log(password)
        if (checkPass(password)) {
            document.location = document.location.origin + document.location.pathname + "?p=" + password;
        }
        else {
            $(".lockContainer").addClass("shake");
            setTimeout(() => ($(".lockContainer").removeClass("shake")), 500);
        }
    }
</script>
```

password[0] != "3" > password[0] = '3' <br>
String.fromCharCode(53, 49) = '51' > '5' + 1 = '51' > password[1] = '5' <br>
password.charCodeAt(5) != 8 * 6 > ASCII table > password[5] = '0' <br>
password[2] + password[3] != "62" > '6' + '2' = '62' > password[2] = '6' and password[3] = '2' <br>
password[4] - password[0] != 4 > '7' - '3' = 4 > password[4] = '7'

-> password = '356270'

> CTF{wHy_1+1=11_iN_JS?}


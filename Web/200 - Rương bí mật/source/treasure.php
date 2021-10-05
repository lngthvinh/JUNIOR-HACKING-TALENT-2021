<html>
<head>
<title>Treasure</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Share+Tech|Orbitron:500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lock.css">
</head>
<body>
    <div class="room4">
        <svg width="100%" height="auto" viewBox="0 0 728 384">
            <svg width="100%" height="100%">
                <image href="img/room4.png" width="100%" height="100%"/>
            </svg>
            <svg x="310" y="240" width="100%" height="auto">
                <image class="treasure" href="img/chest.png" width="150" height="70" onclick="$('.modal').show()"/>
            </svg>
        </svg>
    </div>
    <div class="modal" hidden>
        <div class="lockContainer">
            <div class="lockDigitContainer digit0">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
            <div class="lockDigitContainer digit1">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
            <div class="lockDigitContainer digit2">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
            <div class="lockDigitContainer digit3">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
            <div class="lockDigitContainer digit4">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
            <div class="lockDigitContainer digit5">
                <div class="lockDigit lockDigitPrev">9</div>
                <div class="lockDigit lockDigitCur">0</div>
                <div class="lockDigit lockDigitNext">1</div>
            </div>
        </div>
        <div class="btnContainer">
            <button id="getBtn" onclick="check()">Mở khóa</button>
        </div>
    </div>
</body>
<script src="lock.js"></script>
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
</html>
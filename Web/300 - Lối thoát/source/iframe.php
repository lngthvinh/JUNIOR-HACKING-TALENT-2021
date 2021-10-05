<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <svg width="100%" viewBox="0 0 2880 1300">
            <svg width="100%" height="100%">
                <image href="img/bg.jpg" width="100%" height="100%"/>
            </svg>
            <svg x="1100" y="180" width="100%">
                <image href="img/talking.png" width="400" height="210"/>
                <foreignObject x="100" y="50" width="220" height="100">
                    <textarea class="chat" oninput="document.getElementById('check').contentWindow.check(this.value)" placeholder="Nói ám hiệu với bên kia..."></textarea>
                </foreignObject>
            </svg>
            <svg x="2150" y="300" width="100%">
                <image href="img/talking.png" width="400" height="210"/>
                <foreignObject x="80" y="25" width="250" height="100">
                    <p style="font-size: 24; width: 250; height: 100; word-break: break-all;" id="msg"></p>
                </foreignObject>
            </svg>
    </div>
    <iframe id="check" src="javascript:eval(decodeURIComponent(atob('ZnVuY3Rpb24lMjBjaGVjayh2YWx1ZSklMjAlN0IlMEElMjAlMjAlMjAlMjBjaGVja19zdHIlMjA9JTIwdmFsdWUuc3BsaXQoJTIyJTIyKS5yZXZlcnNlKCkuam9pbiglMjIlMjIpOyUwQSUyMCUyMCUyMCUyMHN1bSUyMD0lMjAwOyUwQSUyMCUyMCUyMCUyMHZhbHVlLnNwbGl0KCUyMiUyMikuZm9yRWFjaCgoY2hhciklMjA9JTNFJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwc3VtJTIwPSUyMHN1bSUyMCslMjBjaGFyLmNoYXJDb2RlQXQoMCklMEElMjAlMjAlMjAlMjAlN0QpJTBBJTIwJTIwJTIwJTIwdmFyJTIwXzB4MzkzMGU2PV8weDc5ODg7ZnVuY3Rpb24lMjBfMHg3OTg4KF8weDIxOTYyNixfMHgyODg0MjEpJTdCdmFyJTIwXzB4MzdhZDE2PV8weDM3YWQoKTtyZXR1cm4lMjBfMHg3OTg4PWZ1bmN0aW9uKF8weDc5ODhjYSxfMHg0ZjhhODYpJTdCXzB4Nzk4OGNhPV8weDc5ODhjYS0weGUwO3ZhciUyMF8weDQ1M2U4Nj1fMHgzN2FkMTYlNUJfMHg3OTg4Y2ElNUQ7cmV0dXJuJTIwXzB4NDUzZTg2OyU3RCxfMHg3OTg4KF8weDIxOTYyNixfMHgyODg0MjEpOyU3RGZ1bmN0aW9uJTIwXzB4MzdhZCgpJTdCdmFyJTIwXzB4MjQ4NzMwJTIwPSUyMHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQ7JTIwdmFyJTIwXzB4NGE1ZDBhPSU1QicycXNOVkhUJyxfMHgyNDg3MzAuZ2V0RWxlbWVudEJ5SWQoJ3FiYXMnKS5pbm5lclRleHQsJzlQY3Z3cUknLCc1cnZTQ3pIJywnMTBmYlFKbkonLF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgncXdlcicpLmlubmVyVGV4dCwnNDMyNzkxOEFuRnloeicsJzUzNjI3OW1od1hGaScsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCd6bnh5JykuaW5uZXJUZXh0LF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgnYmNheicpLmlubmVyVGV4dCwnMzA1NzZUQWp3WVMnLF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgnbnVxcCcpLmlubmVyVGV4dCwnNzQzMjEyOFNHQWtKSicsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCdtaHp4JykuaW5uZXJUZXh0LF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgncGV3bScpLmlubmVyVGV4dCwnMTIzNDkwOFh3VnFkSicsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCd2aGRmJykuaW5uZXJUZXh0LCczODk4MjQyb3d3Sk1SJyxfMHgyNDg3MzAuZ2V0RWxlbWVudEJ5SWQoJ2VybngnKS5pbm5lclRleHQsJzU0Mzc1OTJzR0dwSWknJTVEO18weDM3YWQ9ZnVuY3Rpb24oKSU3QnJldHVybiUyMF8weDRhNWQwYTslN0Q7cmV0dXJuJTIwXzB4MzdhZCgpOyU3RChmdW5jdGlvbihfMHg3MTYxYzksXzB4NDI4ZDRjKSU3QnZhciUyMF8weDMwOTMwNT1fMHg3OTg4LF8weDQ5NTI1MD1fMHg3MTYxYzkoKTt3aGlsZSghISU1QiU1RCklN0J0cnklN0J2YXIlMjBfMHg0NDc0YTg9cGFyc2VJbnQoXzB4MzA5MzA1KCcweGVkJykpLzB4MSooLXBhcnNlSW50KF8weDMwOTMwNSgnMHhlNicpKS8weDIpK3BhcnNlSW50KF8weDMwOTMwNSgnMHhlOCcpKS8weDMqKC1wYXJzZUludChfMHgzMDkzMDUoJzB4ZjAnKSkvMHg0KStwYXJzZUludChfMHgzMDkzMDUoJzB4ZTknKSkvMHg1KihwYXJzZUludChfMHgzMDkzMDUoJzB4ZTMnKSkvMHg2KStwYXJzZUludChfMHgzMDkzMDUoJzB4ZWMnKSkvMHg3Ky1wYXJzZUludChfMHgzMDkzMDUoJzB4ZTUnKSkvMHg4Ky1wYXJzZUludChfMHgzMDkzMDUoJzB4ZTEnKSkvMHg5KihwYXJzZUludChfMHgzMDkzMDUoJzB4ZWEnKSkvMHhhKStwYXJzZUludChfMHgzMDkzMDUoJzB4ZjInKSkvMHhiO2lmKF8weDQ0NzRhOD09PV8weDQyOGQ0YylicmVhaztlbHNlJTIwXzB4NDk1MjUwJTVCJ3B1c2gnJTVEKF8weDQ5NTI1MCU1QidzaGlmdCclNUQoKSk7JTdEY2F0Y2goXzB4MmE1ODVmKSU3Ql8weDQ5NTI1MCU1QidwdXNoJyU1RChfMHg0OTUyNTAlNUInc2hpZnQnJTVEKCkpOyU3RCU3RCU3RChfMHgzN2FkLDB4OGE4ZDMpLCU1Ql8weDM5MzBlNignMHhlYicpLF8weDM5MzBlNignMHhlZScpLHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VheGgnKS5pbm5lclRleHQsXzB4MzkzMGU2KCcweGYzJyksd2luZG93LnBhcmVudC5kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHducycpLmlubmVyVGV4dCxfMHgzOTMwZTYoJzB4ZTQnKSx3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdnc3RzJykuaW5uZXJUZXh0LF8weDM5MzBlNignMHhmMScpLF8weDM5MzBlNignMHhlMCcpLF8weDM5MzBlNignMHhlNycpLF8weDM5MzBlNignMHhlZicpLF8weDM5MzBlNignMHhlMicpJTVEKTslMEElMjAlMjAlMjAlMjBpZihjaGVja19zdHIlMjA9PSUyMF8weDM5MzBlNigoc3VtJTIwLSUyMDY5KS85KSklMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjB3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCUyMm1zZyUyMikuaW5uZXJUZXh0JTIwPSUyMCUyMkVtJTIwJUM0JTkxYSVDQyU4MyUyMHRpJUNDJTgwbSUyMCVDNCU5MSVDNiVCMCVDNiVBMSVDQyVBM2MlMjBtYW5oJTIwbSVDMyVCNCVDQyU4MWklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjBzZXRUaW1lb3V0KCgpJTIwPSUzRSUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJTIybXNnJTIyKS5pbm5lclRleHQlMjA9JTIwJTIyQ1RGJTdCJTIyJTIwKyUyMHZhbHVlJTIwKyUyMCUyMiU3RCUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCwlMjAyMDAwKSUwQSUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMGVsc2UlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjB3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCUyMm1zZyUyMikuaW5uZXJUZXh0JTIwPSUyMCUyMlNhaSUyMGElQ0MlODFtJTIwaGklQzMlQUElQ0MlQTN1JTIwciVDMyVCNCVDQyU4MGklMjI7JTBBJTIwJTIwJTIwJTIwJTdEJTIwJTBBJTdE')))" style="position: absolute;width:0;height:0;border:0;"></iframe>
    <div hidden>
        <div id='qbas'>CTF{galf_ton_suoivbo}</div>
        <div id='qwer'>esrever_eht_esrever</div>
        <div id='znxy'>galf_laer_eht_ton</div>
        <div id='bcaz'>taht_od_uoy_did_woh</div>
        <div id='nuqp'>tnemucod_tnerap_wodniw</div>
        <div id='mhzx'>emarfi_neewteb_noitacinummoc</div>
        <div id='pewm'>siht_dnif_uoy_epoh</div>
        <div id='vhdf'>ti_edam_uoy</div>
        <div id='ernx'>noitacinummoc_emarfi</div>
        <div id='uaxh'>dnuof_eb_tonnac_terces</div>
        <div id='twns'>noitacsufbo_tpircsavaj</div>
        <div id='gsts'>kcehc_elpmis</div>
    </div>
</body>
</html>


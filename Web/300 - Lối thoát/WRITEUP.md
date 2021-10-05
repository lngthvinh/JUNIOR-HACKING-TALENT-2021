# WRITEUP

Use JS console to read this.
```
> decodeURIComponent(atob('ZnVuY3Rpb24lMjBjaGVjayh2YWx1ZSklMjAlN0IlMEElMjAlMjAlMjAlMjBjaGVja19zdHIlMjA9JTIwdmFsdWUuc3BsaXQoJTIyJTIyKS5yZXZlcnNlKCkuam9pbiglMjIlMjIpOyUwQSUyMCUyMCUyMCUyMHN1bSUyMD0lMjAwOyUwQSUyMCUyMCUyMCUyMHZhbHVlLnNwbGl0KCUyMiUyMikuZm9yRWFjaCgoY2hhciklMjA9JTNFJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwc3VtJTIwPSUyMHN1bSUyMCslMjBjaGFyLmNoYXJDb2RlQXQoMCklMEElMjAlMjAlMjAlMjAlN0QpJTBBJTIwJTIwJTIwJTIwdmFyJTIwXzB4MzkzMGU2PV8weDc5ODg7ZnVuY3Rpb24lMjBfMHg3OTg4KF8weDIxOTYyNixfMHgyODg0MjEpJTdCdmFyJTIwXzB4MzdhZDE2PV8weDM3YWQoKTtyZXR1cm4lMjBfMHg3OTg4PWZ1bmN0aW9uKF8weDc5ODhjYSxfMHg0ZjhhODYpJTdCXzB4Nzk4OGNhPV8weDc5ODhjYS0weGUwO3ZhciUyMF8weDQ1M2U4Nj1fMHgzN2FkMTYlNUJfMHg3OTg4Y2ElNUQ7cmV0dXJuJTIwXzB4NDUzZTg2OyU3RCxfMHg3OTg4KF8weDIxOTYyNixfMHgyODg0MjEpOyU3RGZ1bmN0aW9uJTIwXzB4MzdhZCgpJTdCdmFyJTIwXzB4MjQ4NzMwJTIwPSUyMHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQ7JTIwdmFyJTIwXzB4NGE1ZDBhPSU1QicycXNOVkhUJyxfMHgyNDg3MzAuZ2V0RWxlbWVudEJ5SWQoJ3FiYXMnKS5pbm5lclRleHQsJzlQY3Z3cUknLCc1cnZTQ3pIJywnMTBmYlFKbkonLF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgncXdlcicpLmlubmVyVGV4dCwnNDMyNzkxOEFuRnloeicsJzUzNjI3OW1od1hGaScsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCd6bnh5JykuaW5uZXJUZXh0LF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgnYmNheicpLmlubmVyVGV4dCwnMzA1NzZUQWp3WVMnLF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgnbnVxcCcpLmlubmVyVGV4dCwnNzQzMjEyOFNHQWtKSicsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCdtaHp4JykuaW5uZXJUZXh0LF8weDI0ODczMC5nZXRFbGVtZW50QnlJZCgncGV3bScpLmlubmVyVGV4dCwnMTIzNDkwOFh3VnFkSicsXzB4MjQ4NzMwLmdldEVsZW1lbnRCeUlkKCd2aGRmJykuaW5uZXJUZXh0LCczODk4MjQyb3d3Sk1SJyxfMHgyNDg3MzAuZ2V0RWxlbWVudEJ5SWQoJ2VybngnKS5pbm5lclRleHQsJzU0Mzc1OTJzR0dwSWknJTVEO18weDM3YWQ9ZnVuY3Rpb24oKSU3QnJldHVybiUyMF8weDRhNWQwYTslN0Q7cmV0dXJuJTIwXzB4MzdhZCgpOyU3RChmdW5jdGlvbihfMHg3MTYxYzksXzB4NDI4ZDRjKSU3QnZhciUyMF8weDMwOTMwNT1fMHg3OTg4LF8weDQ5NTI1MD1fMHg3MTYxYzkoKTt3aGlsZSghISU1QiU1RCklN0J0cnklN0J2YXIlMjBfMHg0NDc0YTg9cGFyc2VJbnQoXzB4MzA5MzA1KCcweGVkJykpLzB4MSooLXBhcnNlSW50KF8weDMwOTMwNSgnMHhlNicpKS8weDIpK3BhcnNlSW50KF8weDMwOTMwNSgnMHhlOCcpKS8weDMqKC1wYXJzZUludChfMHgzMDkzMDUoJzB4ZjAnKSkvMHg0KStwYXJzZUludChfMHgzMDkzMDUoJzB4ZTknKSkvMHg1KihwYXJzZUludChfMHgzMDkzMDUoJzB4ZTMnKSkvMHg2KStwYXJzZUludChfMHgzMDkzMDUoJzB4ZWMnKSkvMHg3Ky1wYXJzZUludChfMHgzMDkzMDUoJzB4ZTUnKSkvMHg4Ky1wYXJzZUludChfMHgzMDkzMDUoJzB4ZTEnKSkvMHg5KihwYXJzZUludChfMHgzMDkzMDUoJzB4ZWEnKSkvMHhhKStwYXJzZUludChfMHgzMDkzMDUoJzB4ZjInKSkvMHhiO2lmKF8weDQ0NzRhOD09PV8weDQyOGQ0YylicmVhaztlbHNlJTIwXzB4NDk1MjUwJTVCJ3B1c2gnJTVEKF8weDQ5NTI1MCU1QidzaGlmdCclNUQoKSk7JTdEY2F0Y2goXzB4MmE1ODVmKSU3Ql8weDQ5NTI1MCU1QidwdXNoJyU1RChfMHg0OTUyNTAlNUInc2hpZnQnJTVEKCkpOyU3RCU3RCU3RChfMHgzN2FkLDB4OGE4ZDMpLCU1Ql8weDM5MzBlNignMHhlYicpLF8weDM5MzBlNignMHhlZScpLHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VheGgnKS5pbm5lclRleHQsXzB4MzkzMGU2KCcweGYzJyksd2luZG93LnBhcmVudC5kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHducycpLmlubmVyVGV4dCxfMHgzOTMwZTYoJzB4ZTQnKSx3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdnc3RzJykuaW5uZXJUZXh0LF8weDM5MzBlNignMHhmMScpLF8weDM5MzBlNignMHhlMCcpLF8weDM5MzBlNignMHhlNycpLF8weDM5MzBlNignMHhlZicpLF8weDM5MzBlNignMHhlMicpJTVEKTslMEElMjAlMjAlMjAlMjBpZihjaGVja19zdHIlMjA9PSUyMF8weDM5MzBlNigoc3VtJTIwLSUyMDY5KS85KSklMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjB3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCUyMm1zZyUyMikuaW5uZXJUZXh0JTIwPSUyMCUyMkVtJTIwJUM0JTkxYSVDQyU4MyUyMHRpJUNDJTgwbSUyMCVDNCU5MSVDNiVCMCVDNiVBMSVDQyVBM2MlMjBtYW5oJTIwbSVDMyVCNCVDQyU4MWklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjBzZXRUaW1lb3V0KCgpJTIwPSUzRSUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJTIybXNnJTIyKS5pbm5lclRleHQlMjA9JTIwJTIyQ1RGJTdCJTIyJTIwKyUyMHZhbHVlJTIwKyUyMCUyMiU3RCUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCwlMjAyMDAwKSUwQSUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMGVsc2UlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjB3aW5kb3cucGFyZW50LmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCUyMm1zZyUyMikuaW5uZXJUZXh0JTIwPSUyMCUyMlNhaSUyMGElQ0MlODFtJTIwaGklQzMlQUElQ0MlQTN1JTIwciVDMyVCNCVDQyU4MGklMjI7JTBBJTIwJTIwJTIwJTIwJTdEJTIwJTBBJTdE'))

function check(value) {
    check_str = value.split('').reverse().join('');
    sum = 0;
    value.split('').forEach((char) => {
        sum = sum + char.charCodeAt(0)
    })
    var _0x3930e6=_0x7988;function _0x7988(_0x219626,_0x288421){var _0x37ad16=_0x37ad();return _0x7988=function(_0x7988ca,_0x4f8a86){_0x7988ca=_0x7988ca-0xe0;var _0x453e86=_0x37ad16[_0x7988ca];return _0x453e86;},_0x7988(_0x219626,_0x288421);}function _0x37ad(){var _0x248730 = window.parent.document; var _0x4a5d0a=['2qsNVHT',_0x248730.getElementById('qbas').innerText,'9PcvwqI','5rvSCzH','10fbQJnJ',_0x248730.getElementById('qwer').innerText,'4327918AnFyhz','536279mhwXFi',_0x248730.getElementById('znxy').innerText,_0x248730.getElementById('bcaz').innerText,'30576TAjwYS',_0x248730.getElementById('nuqp').innerText,'7432128SGAkJJ',_0x248730.getElementById('mhzx').innerText,_0x248730.getElementById('pewm').innerText,'1234908XwVqdJ',_0x248730.getElementById('vhdf').innerText,'3898242owwJMR',_0x248730.getElementById('ernx').innerText,'5437592sGGpIi'];_0x37ad=function(){return _0x4a5d0a;};return _0x37ad();}(function(_0x7161c9,_0x428d4c){var _0x309305=_0x7988,_0x495250=_0x7161c9();while(!![]){try{var _0x4474a8=parseInt(_0x309305('0xed'))/0x1*(-parseInt(_0x309305('0xe6'))/0x2)+parseInt(_0x309305('0xe8'))/0x3*(-parseInt(_0x309305('0xf0'))/0x4)+parseInt(_0x309305('0xe9'))/0x5*(parseInt(_0x309305('0xe3'))/0x6)+parseInt(_0x309305('0xec'))/0x7+-parseInt(_0x309305('0xe5'))/0x8+-parseInt(_0x309305('0xe1'))/0x9*(parseInt(_0x309305('0xea'))/0xa)+parseInt(_0x309305('0xf2'))/0xb;if(_0x4474a8===_0x428d4c)break;else _0x495250['push'](_0x495250['shift']());}catch(_0x2a585f){_0x495250['push'](_0x495250['shift']());}}}(_0x37ad,0x8a8d3),[_0x3930e6('0xeb'),_0x3930e6('0xee'),window.parent.document.getElementById('uaxh').innerText,_0x3930e6('0xf3'),window.parent.document.getElementById('twns').innerText,_0x3930e6('0xe4'),window.parent.document.getElementById('gsts').innerText,_0x3930e6('0xf1'),_0x3930e6('0xe0'),_0x3930e6('0xe7'),_0x3930e6('0xef'),_0x3930e6('0xe2')]);
    if(check_str == _0x3930e6((sum - 69)/9)) {
        window.parent.document.getElementById('msg').innerText = 'Em đã tìm được manh mối'
        setTimeout(() => {
            window.parent.document.getElementById('msg').innerText = 'CTF{' + value + '}'
        }, 2000)
    }
    else {
        window.parent.document.getElementById('msg').innerText = 'Sai ám hiệu rồi';
    }
}
```

See this: check_str = value.split('').reverse().join('');

Reverse all this
```html
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
```

Then you get.

```
obvious_not_flag{FTC
reverse_the_reverse
not_the_real_flag
how_did_you_do_that
window_parent_document
communication_between_iframe
hope_you_find_this
you_made_it
iframe_communication
secret_cannot_be_found
javascript_obfuscation
simple_check
```

Answer is "iframe_communication".
> CTF{iframe_communication}


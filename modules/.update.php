<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m

\033[1;32m██████╗ ██╗  ██╗███████╗\033[1;37m
 \033[1;32m██╔══██╗╚██╗██╔╝██╔════╝\033[1;37m
 \033[1;32m██████╔╝ ╚███╔╝ ███████╗\033[1;37m
 \033[1;32m██╔══██╗ ██╔██╗ ╚════██║\033[1;37m
 \033[1;32m██║  ██║██╔╝ ██╗███████║\033[1;37m
 \033[1;32m╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝\033[1;37m \033[1;36m2.0\033[1;37m
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m
\033[1;37m Owner   :            REYAD X SHIPU
\033[1;37m Facebook:            MD REYAD HOSSAIN SHANTO
\033[1;37m Github  :            BINOD-XD
\033[1;37m WhatsApp  :          +8801989861704
                    \033[1;36mTrack Any Ip Address
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m

\033[00m
EOL;
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating Ip-Tracker.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/BINOD-XD/Ip-Tracker.git");
  system("cd ~/ && sudo git clone https://github.com/BINOD-XD/Ip-Tracker.git");
  system("cd ~/Ip-Tracker && sh install");
  logo();
  echo "\n\033[01;32m              Ip-Tracker updated !!!\033[01;37m\n";
  sleep(1);
}
upd();
?>

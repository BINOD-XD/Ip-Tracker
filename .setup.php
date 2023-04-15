<?php
include("modules/system.php");
class set {
  public function Setup() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/Ip-Tracker");
      system("rm -rf /data/data/com.termux/files/usr/bin/Ip-Tracker");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/Ip-Tracker");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/Ip-Tracker");
    } else {
      system("rm -rf /usr/bin/Ip-Tracker");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/Ip-Tracker");
    }
    
    // adding bin file
    if ($system=="termux") {
      system("mv -v modules/Ip-Tracker /data/data/com.termux/files/usr/bin/");
      system("mv -v modules/trace /data/data/com.termux/files/usr/bin/");
      system("chmod +x /data/data/com.termux/files/usr/bin/Ip-Tracker trace");
      system("chmod +x /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo mv -v modules/Ip-Tracker /usr/bin/");
      system("sudo mv -v modules/trace /usr/bin/");
      system("sudo chmod +x /usr/bin/Ip-Tracker");
      system("sudo chmod +x /usr/bin/trace");
    } else {
      system("mv -v modules/Ip-Tracker /usr/bin/");
      system("mv -v modules/trace /usr/bin/");
      system("chmod +x /usr/bin/Ip-Tracker");
      system("chmod +x /usr/bin/trace");
    }

    // copy files from Ip-Tracker to .Ip-Tracker directory.
    if ($system=="termux") {
      system("mkdir /data/data/com.termux/files/usr/share/Ip-Tracker");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /data/data/com.termux/files/usr/share/Ip-Tracker/");
    } elseif ($system=="ubuntu") {
      system("sudo mkdir /usr/share/Ip-Tracker/");
      system("sudo chmod +x * *.* .*.*");
      system("sudo mv -v * *.* .*.* /usr/share/Ip-Tracker/");
    } else {
      system("mkdir /usr/share/Ip-Tracker");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /usr/share/Ip-Tracker/");
    }
    
    // removing Ip-Tracker directory
    if ($system=="termux") {
      system("cd .. && rm -rf Ip-Tracker");
    } elseif ($system=="ubuntu") {
      system("cd .. && sudo rm -rf Ip-Tracker");
    } else {
      system("cd .. && rm -rf Ip-Tracker");
    }
  }
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

    if (file_exists("/usr/bin/Ip-Tracker") || file_exists("/data/data/com.termux/files/usr/bin/Ip-Tracker")) {
      echo "\033[01;32m      Ip-Tracker installed Successfully !!!\033[00m\n";
      echo <<<EOL

\033[01;37m ----------------------------------------------
|         \033[01;36mcommand\033[01;37m       |        \033[01;36mUse\033[01;37m           |
 ----------------------------------------------
| \033[01;32mtrace -m\033[01;37m              | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mtrace -t <traget-ip>\033[01;37m  | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mtracer --help\033[01;37m         | \033[01;33mFor more information\033[01;37m |
 ----------------------------------------------

\033[01;31mNote :- ip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
    } else {
      echo "\n\n\033[01;31m  Sorry Ip-Tracker is not installed !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>

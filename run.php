<?php

$Username = "" ;
$Password = "" ;

system( " clear " );
echo "\e[0;33mLogin Dulu Bos\n" ;
echo "\e[0;32mUsername :\e[0;32m " ;
$User = trim(fgets(STDIN));
echo "Password : " ;
$Pass = trim(fgets(STDIN));
echo "Password : " ;
if($User == $Username && $Pass == $Password)
{
echo "\e[0;33mPassword Benar\n" ;
sleep(1.5);
system(" clear ") ;
echo " \e[0;32m                  Recode Mati Aja Lu\n" ;
echo " \e[0;31m              Bikin Nya Pake Otak Goblok\n" ;
echo "\e[0;34m======================================================
\e[0;31m# AUTHOR  : ALDI
\e[0;33m# CONTACT : 082231589330
\e[0;32m# GITHUB  : https://github.com/Mr4LD1
\e[0m======================================================\n" ;
sleep(1);
echo "\e[0;33m[1].Dark-Fb v1.6
\e[0;34m[2].Install ToolsV1
\e[0m[3].SpamSms
\e[0;31m[4].DefaceWeb
\e[0;32m[5].MBF
\e[0;33m[6].BotFb
\e[0;34m[7].Install toolaldi
\e[0m[8].Dark-Fb v2.0
\e[0;32m[9].exit\n" ;
echo "\e[0;31mMasukan Pilihan Anda :\e[0;32m \n" ;
$menu = trim(fgets(STDIN)) ;
if($menu == 1)
{
system("git clone https://github.com/Mr4LD1/Dark-Fb") ;
}
if($menu == 2)
{
system("git clone https://github.com/Mr4LD1/ToolsV1") ;
}
if($menu == 3)
{
system("git clone https://github.com/Mr4LD1/SpamSms") ;
}
if($menu == 4)
{
system("git clone https://github.com/Mr4LD1/DefaceWeb") ;
}
if($menu == 5)
{
system("git clone https://github.com/Mr4LD1/MBF") ;
}
if($menu == 6)
{
system("git clone https://github.com/Mr4LD1/BOT") ;
}
if($menu == 7)
{
system("git clone https://github.com/Mr4LD1/toolaldi") ;
}
if($menu == 8)
{
system("git clone https://github.con/Mr4LD1/Hack-Fb") ;
}
if($menu == 9)
{
echo "\e[0;31m☆LOADING...\n" ;
sleep(2);
echo "\e[0;33m☆Mr.4LD1 is here\n" ;
sleep(1);
echo "\e[0;32m☆Thanks\n" ;
sleep(1.9);
}

}
else
{
echo "\e[0;31mPassword Salah\n" ;
}

?>

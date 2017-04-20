<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.2-dev
*/error_reporting(6135);$Qc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Qc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$hi=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($hi)$$X=$hi;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress(" ‚ \$I´ào9#AÐèp9Ž…âói„ðc2…Æ#y¼ès:Œ'ÄhÆo6‹ÌÆóqÐZa;™Nrƒ(¼h.‹†óÌç*–K¦) ¸Úi“O„B	°Ø;Ž'¹9²:˜ÇªÕ@Âc5™ÎFó©¸ÉX\rÆF!˜Àw+–Ž‡#(¼b.\rDc)ÈÈa7E„‘¦š,\$M‡c)ÐÒcÁð1iÎúi3â§#= un>˜j†ú±Ê±\\­ŽgC)â\\d2ÉäXé`èÝ,2ŽÏ¢ã„Ï2¦ŽÆ“™§XdÑékS(ÔÌ5î·›î„tl¤ù5q†E»®·`Ük\røÃ—oMYŒÆA®¯[¯ØÂ;CpêÊØO3r1+ë\nÆÿ«„¼Ž»²á8Ž0Ê2,á¸®;Òõ¯¯r°ùAksX×­ƒdý-«þ¾ÀJòÀ±,‹4´]ŽÛÙ>\rCíDÏÓøÛ7 \\5£˜ÐPáCª«¸Ô+£èÐk‚\\âC(t†«£40³ŒòÜÞŒƒ\"3‡App2¡\0c8*D\0£ˆrQ/ŽÀ@™» @‡4*Þ …©ˆÒ3¡² äŠ©ò“ß*5P\$_ÆAÒµ­­ÐÐK4D¹/L6Î¿¡€AUA„ú¡ˆq>‡sDÔ7M“tá9Nˆâü¾Ïðé=†5}\0004ÐAI4íJ»-Q#-F¶ôz›@ÑŠÏM-Kc@4u\n[hÚqÍ«HP÷G/­¡,Ç2¿³œãU4¥:#Ø2c½:\rüwTó3u|_Wæx×um_zNµûL·WÓ½‡'Ø³õA3 P™DaN#;ßc4sŒÏí%c£?æ†I“ZZçw·°Y€xªúÏäöFev6]ŽøöEšæú(å`ÏClùiy†›™iùKZŒ3L×6†UÞI:g£FƒÆ@F†¡˜Â1ú„ìïîR:`ònÂhÂ_¼?£Ê–¯»Å\\l›0k´`.ÿŸr<žÕK[;vÊóPú3\r,PÈËƒÜÔ9Ž`Â<‡JDZö1Ì€ÙÁÑoî/ÅVõÏ8×CmßTM³yÝÕu^¥«å´\rBº#èà=á~WOØ†ïrøkZ¨(Î=öz›Úo!Ò4ß~=ëA{Þ‚-Dßø\r[êLcÄ™ii×çî\$í†Ö¥ÖÐ:\$&LÞ‡'ßb=5,¨‡—\0iQìpP:@Ø”“€rí±L-°hAª`&è8@gÜ¼ú»b:3óî™’âel»‚ôI`ou|Ü½ÐÜ¨taÐ<‡\0ÊH)Ô¯€¾»ÆS]«æY‘ôÃè€q°Á„:†ÇJG²Jl!¼;¼†XË7Fè¤Ep]ƒˆu\r0äF*#eŒê½–GHÙâ	F\"Ëí\\4íƒ\$dŒÑñWÇè­ C»«\rçÈ=½•b‚Õ¡C(¤þ¯•aé*ÅÓGRêÁÒú\rå€éÃŠKâ”])l4¥Ðt\rÁ«<HáÌàÑÜ8,ÆÜ5KÉvKaStòÖpÝ(f,½*¡Ô6†à÷&Ž4œRxÒJ\0wO‘™s\r´³ØÃ(4AÜ62ð\rÕÚsOÍy»òX¸:³½´L8ÈHƒ„˜FÜ;Ð4ÏÃ\$þ ¤~ËóXeMë†P–PÐº½¨j¢ñG.ƒv_Kí'0ç±9\$æ4‡pƒ f'AÒ¤ 'þæg,ç¥ÔÀÜ­þW:×7a´™#~P9È*“ÁÚTr›};¦4|9R…Q	ñÔší…Ü¦×ˆïg³N,9ê¼cvãÅ\"¥jMg9è²~×ä	–T|7MIc[Nb)	©Ò3šsÞh.\ré¦	×r´ƒ%M[U<î9·:t¦ˆ.­Ä5¯•÷4’i`Bt\n]Ù‹)eƒ-ž³KÞ\rÀÿc|„ Ö›³QñÅ1n%œËT¼\rÓ»Å”1ŸÀöà¢ƒåhä4éWPÚíÀp€êá·Ãv_Íe¯_—*(ÜÓ¥\"2ý~/hÖƒµüÛˆ!¼.XÞä¼2ËîÞÝ«Àü…Ý»÷†.,;Ë+]w†FV\"/·Z¾Äì7e|ÇË÷OÔi\r–\$Ý‡0âê 1¢¾lƒ…Ý8êrÌ€aºÀbZtŒ|°Âi}Y‡€v“W.\$V˜bÅ¬ÃƒÎ \$çö¡ÜYiÖdŽÊŽ÷^mwMÚM\r<1‡PäLà‚N:Fôß‡9¯¦Éµtá	§VªÑÈ2^SµÆ=¼LÐ3,co-CW*ñéÍk+\0Ä1§0dŽ‘æ\rró	PàËFè• „ÜÖ÷qVå‘Ò½yòÚµÊ	nÉ½>Kv~47¶q	ž»ÙžFèÔJë“äÙµÑ³yèƒ¨ñS=\\lkÐÖjï;úNd·b0b[FpáÔEØNª'Æ±ògU+†¨°Ú¶ÃÄÇ`_Àó¦rNË<ì‡‘˜ÁCkmiÍ=¯†;99[&½ŽžöSRÜí[15³¶÷†œ‹'!ÀäŠ´e—é¥ÃÂ@G¼÷&Åû¯?åý¦ÔöªÄiO*%PG Š@s€„/¼œó¶xKÙè‘ƒ½í¾\$Uõ\rúsˆaÂ™Äø©Õå‚õÙ­šÚ›[ÚsšÂ[¯Ìóe^o-'MÊã52¯¬€ƒ¡š`üØÑ›ÒnšÍ`“Ëv´h	ûâ’îð²â¹	Ç-‡ÐF°ˆdaÊjSn1F¡ÞyŸüw¥M­GÓ´‡S¬©ýe¾`ZêÅçu2‘ûÚêüûõxïžŽ¬UJÇéÄ¯a [‚H&Îmmg³¯ñÆŠÊé9~×X6ëº¿RWšÃ“\"¼à7=ŽæŽA³ôí¦Ö:¬\nnAl8@µ\$¬ÖlW2EZ!ˆ5œoxešŸ¿·©géÏR“H¬½å-ƒív³lgYðÀÉZd\\ŽUáÁŒÑZ†NôÍÓº÷ÏN†^À`Ì_\\;†Üš/·~i½×²Ïö–OôìÀúÎy‹s@ÊsŠ^ûL¼òè¶(é’|Èrí#r÷b6\0ðKã¤! Ø>õñŽ„Ôí'\0@	…NS é \\¦`åT«\nŒaDÈxäÕˆ~ƒwM(Ðh‚’¯^hŒüäP/%æ¨Žtèjb~MŽ‚¬®†¬‡.¾ì.Æì°|î„ÏÎzñfLÅ`VF¬Èßƒ¦É°²G0¶Å0»\n`@© ’I({0Ö).AMNŽW\\Pm¿\r+ÄX`vÒCt\nˆMOØ)°20*~Ã`8g~Þ@p¨ ÷âe„ëÐþÿ`t\$PŒGâ²(0ŽÓ0	îHé\r@Ê#û‡bÝIòÝ°PÎ¼ì\$ìNÈ¸ñ<¼pÝŒ1…0‰'æç®ÏÑ]©†Ã\nñÑ ûÄ&0ÐF0®o`Îâpþ™gT™¤ŠëÐ¾õ­4×1¥Ð±§|7n8¢ä(¡J`\n\nìê\n:¨@úM@ík~>äJ?/(6¯,Á¬†DæP€BDÃˆ\n€ãt‡b4I”2¬çú®,Ôá p\0B ¢!#\0o%!DQ!‘ÎHä’\rO&R:ÁÑ˜R8Irq\$´#&ÒhFÒv~ì†ò»%¤NHr(C‚ÆªÔª	e)D„›DV@.ÿ#.](@Z¸ÄxqàÄÀh3#w( à\r\0àèâ\ròu&`[-rÛ#²Öãq.\$—,òÒ¢=.Â^ òù'¢G-’¹'\$ó/ò?.#òô’øRÄ++ŒŠ\$öÎR¾@ÄÆÂHÒ‹2m­*/3&ÿ\$â!ðÃòË-Òðó!+ŽÁ(2Š\r¢}#ó_1°5’Ô ß)<ùS¼ë|ÌÄ}\"IÎ g,@hÏŒüg¹8	8Ó|ƒy\0lÒª	Ð@hÀSœ6³A8O#!'%ãû*äZ‘çK;Â»8’FnSŽ@w‰PuÎþO	F\rløá&¬-Ê|¨!Ðº‡Êo`v|'d|ƒú|è¨7%†ªÐ%ëz›B*\rÀÒˆl“‰¾ÈÌ¢`Þ)XG^méÒk¼ã2¯´e¶©l/¸Ùsæð&VÑ\rÔ\$DÔI u9ŒM<Àt%s':sÔª\n\\@l<-Ô\$hDSÁ%Ò™ðàG3»\$ieH+¥´ŠR®\"`FÍÀ`¥ÈþŠé·AìÐ„h“ÐR¨8Å²GHt¯HòGK”¼øoŠ%É	Œ®\"1§‹G@@ËÆ´iÆjd ]EÀjdÔê'ZÃ”ôUTùOÆbff»PbòdÔxÀ€Ò1“¥Ló¨¥(EÀbnƒêÌµI.<ˆ4ËOÎDVbøGÄ’Ï­ÌRUK3æ’`Ìt‰õEíüå,ST¨=êZ¥êc*’?²(å‚™HÒÇÖªCsŽéGUwYC­J2¤Ìõ›:ªYDs²nÒ)r¬,ÄY+ û\$(\\5Ò!7’M%M%u7\"l6Ã²1<À¶0*ˆ D6ö5€D YIõî5ó_bÆÿ:pšyüŒïÿâÜûÔ2 ô8¶…D¶ÄÚ×ç`Uðˆõö1Cµþƒ…cµô–du°;ŠH°¾ˆ6`­Ð–SVEIOÐb.ûãMb‡CÔXKÀ]cVcdö	cÖjˆ6XÞÄyeêLªŠB•.æ!øZ\r0Â‚\"b&jˆòìø%¬)ær¿®7?Å¯>Y>IŸ>‰W>Õ‰<UI£\nT. DŠ—3@E9LR©jÂV„Öµ`–¸u–¼%¶À(–Ç?lR¨6ÐTVÕ \"ŸmÕê‰T•–êHb‘oŒë/\\î\$soª–µ—¬SZŽ¼àþå×k(`¶\rÜUôÍç_@ºH€èww·7×„7‰x×xîw|@Lå7—v÷Q·k¶¿l\"il“ùlÅÑm-ŸmvÏ=éM·;>w?n”—\\Cktc/oQ—uvüÍ€auñ×Vóv@Ãxîæ—’Á÷…zÖ³{{W!{—&QËsO.\$Ç×9nï}uÁ<7D\r×I~Nm~€Í~×ð^ôQ·ùÀÍz7€š€á€k‘q8\n\\w³q×·rJ{—¿×ÄÚÙswÏ> ÝsÓë‚ô˜›Wáo)¿ox<¾6EpWö{—ûyàÍ€¤˜U…–¯zøa€øe8i{×+‡xs7-|ÇQ})nWA}²«}ø5~8~`uu˜•„-9x„ØQ]ÂŠØ\\¿xbW—#lXj\\xŒxs|…Ñ‚x}Xƒt8‰¸uXãoËâ˜èžøíGxžýØ¤Øô˜ùký‹Y†y	‹ÊŒ‚X{mùn8-’Ùƒxßƒ¹*©d'“/[“lâÜb™~ìg\$5™G‹]ùw»r™W|¹[ŒyˆçˆWÜ?¸‹t¹)Ž@i~ø™„‡¹X;yƒŠP„µ/k€ÊÉ¹…ù“”Ù—Y\n%Ù•—1‚9¥•÷Ó–YU‹nøÝ›vü-`Å—˜FG7d×Jê±œ·‘zW•a79‚Î@?c®õìO†àbÅivó-mu4Öï4”H‡&›\rw¡€Ó¡×¡y6@·¸*	 úMšãý\\’°ùµ~+¯DþÌhÐÍúˆÎU¡z“º_¢c”VG…¹Iqp‹yžYU?¹¡žøu|¹§‘Ù«–•ŒHº©g\rp55‘œš•„÷’õ@Ã¹KªyO‹™S™Ú±|:µ‘VÛŸXÏ–yýnÙ³ƒˆ—+â\r—ÚÑ~zÕ„Ù>ºò#-®¥qºçª¸»®×ÀZù£Œ»Ÿš¿¯ø3–ÚÇ„¿¡¸`]­—¥zšŸŠùÜ¹••›†Ø¿«%ÕŒ[9¯™c‚¹û¦ø×›%›X‘°šË´´sœ7U±yÍwñ·©×‡ª‘¶á¶XØo‘ó•ØË‡Ù©;}Ÿû–ûŽ@j»v'¸Ü6šG;¡µûc®›gºÛk¯oŸs»ya»·Ù»û¸;o™,\n²g:sS#¢\r²|\r²ø\$ü2BQ'Ãa/’ë+“V‘ Ç/“WÁÜ5-è™òø˜¼>¼B`¿Ã<,GWÀ’;/;-)žü^ëvšÈ@†e\nb•·SšFS',Ü=1R‹È’Ý.|+ÈRó/r¹0ó\r“\r/ÜŸ0¼(²{ÈÒo1‚=Å(ß¼.ü=0*\0rÊ™Ëà[5ræÄÉÆ|Ù¼žüÞô2óLÅœÁ-3—¼•7 ßÎ\\ÛÂÜÂ üù5\\=Î{7|¼Ñ5hð‹ÅA§¥¹È[\$}Íðò@'Òø?`éÓ)(½9ÏÝ6!Ý=Ð²;Ô<«-ÝB'½?Õ]IÍ€ÙY‹M[ƒÞæE;ÒÃ|é‹Ô}:²=AÔœ°I}C×Ý]Ó½SÔýIØ‘Ó½aÁ¢}×U{\$rÁ,IÅÇ´µÖÜƒ-Ý//€ð\r¼¡Òü\rÉ¢Û½0ÝÇÜ]zâ]ÑÓÝxâ!äyÇt.|ð%ý7]ÛØý…ÕâšG€n_ Æ>]ëèßàÅà2É+œD\r`Ê<JþÒ¹Ø [á~ÔÝ„ ýýàÍD€Ç¿¬ý-2qãÓÈ}ñä`¿ä¾Uß^OäŒB^MÍ^SÏ³5žgÐsÏ àþYÏ¾)5~{çý\rÏ\\¥Ï³eèœ[åwè ¿é,ç>é¾—-#ôk/å^ƒÃÞ¯ë<ûÌ] ÀŒ^ÉÛ2;5¼ûíÝ6²¹ê¡íœ­æ3q-sC3L+‹Á Ù*#¹ÚrÇÏ—äRv)’¸ÿ\"©C®ÿ=ëä³a-Ò{\$2kî3o(5çÞ£ñ²;íß#-Þ»ò“%öÞu—³	R4žïæÞ£ëSuó~«åSëý4_IŒ}pÿYßbó2\rÿo-ÿW÷^_Ê?yøiø|g1 eð,Õ¼<¿ ÏÏÃ(¼Á|%«ÁUÑ+œ“éÜ1Æ|9å_·#¼Eü\$—Ä\\PYœTÆ=-gÆ<gÆ½ãÇ<w^<o¤ëø²ùâœ‘ÄU1½6ôwÇ\$}åÏ7+ð“lê'8¦5ËÌsýÞtæ72¹õNs{›ù'@µ•®v|ž¦õ'?@eÆn{yS¢²ûG•:4Žv³ý]\$ø'm:åÕŽíucÉBñGU„úÎ¤yt]Zì·@:ÅWÐ-qùÌßjív»)÷uûº`vìh\0A	Növ`aÓ\$ìòb¥|©a{û¤°ïWm¥qÛ®ß\róô]ŠîG(:r	.ê‚k»Öîó\")­þNôsD\rÞjìX;­Öx;ÇR¸ðD‘¼áõx³Ãžâgˆ¼™â…³Æž\nñÇ„¥ãìëƒ3ë^”ç˜&=:ïÁyrjà	­¼Áòp „ë‡ž†ú÷§B„ð§ASì©	‡Í@MÆp±…sŒß;\n;¾¶ï-xÓØ^ÆöWz½©õ°Â[ÜÜöäÖ‰6É…{¡@j™‡»;Õï)’{Ü ¹	™¿)Ò„~jQÜøe‰>\$ÉNh|dß üO¿òÉ9{jláØ”X[Ã¡ôèÛh?“>žP¨}jZß{	è~BaÏo²‡»]Ê„•ÇK¾õÓ‘\n}‹þ_8†ÀNî~D6‚®Þf´¢>\$à\n.Ð'\$ü²FF0ð\0¦¶¢É­RÞHêg“*”È¦tI&ÖÀ„ƒû60C:	›~hóßžÐ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$be=substr($u,-1);return
str_replace($be.$be,$be,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Xf,$Qc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Xf)){foreach($X
as$Pd=>$W){unset($Xf[$y][$Pd]);if(is_array($W)){$Xf[$y][stripslashes($Pd)]=$W;$Xf[]=&$Xf[$y][stripslashes($Pd)];}else$Xf[$y][stripslashes($Pd)]=($Qc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Oa=false){static$Qh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Oa?array_flip($Qh):$Qh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$fb,$Xd="",$cf="",$kb="",$Yd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($fb?" checked":"").($Yd?" aria-labelledby='$Yd'":"").($cf?' onclick="'.h($cf).'"':'').">";return($Xd!=""||$kb?"<label".($kb?" class='$kb'":"").">$J".h($Xd)."</label>":$J);}function
optionlist($if,$Ig=null,$pi=false){$J="";foreach($if
as$Pd=>$W){$jf=array($Pd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Pd).'">';$jf=$W;}foreach($jf
as$y=>$X)$J.='<option'.($pi||is_string($y)?' value="'.h($y).'"':'').(($pi||is_string($y)?(string)$y:$X)===$Ig?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$if,$Y="",$bf=true,$Yd=""){if($bf)return"<select name='".h($C)."'".(is_string($bf)?' onchange="'.h($bf).'"':"").($Yd?" aria-labelledby='$Yd'":"").">".optionlist($if,$Y)."</select>";$J="";foreach($if
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ka,$if,$Y="",$Jf=""){return($if?"<select$Ka><option value=''>$Jf".optionlist($if,$Y,true)."</select>":"<input$Ka size='10' value='".h($Y)."' placeholder='$Jf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$ge,$Bi=false,$cf=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($cf)."return !toggle('fieldset-$t');\">$ge</a></legend><div id='fieldset-$t'".($Bi?"":" class='hidden'").">\n";}function
bold($Wa,$kb=""){return($Wa?" class='active $kb'":($kb?" class='$kb'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Rc=true;if($Rc)echo"{";if($y!=""){echo($Rc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Rc=false;}else{echo"\n}\n";$Rc=true;}}function
ini_bool($Bd){$X=ini_get($Bd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($wi,$N,$V,$G){$_SESSION["pwds"][$wi][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$Fh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Fh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$_b=(is_object($h)?$h:$g);$J=array();$I=$_b->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$J[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$db);remove_slashes(array(&$db));return
where($db,$p);}function
where_link($s,$d,$Y,$ef="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$ef:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$M=array()){$J="";foreach($e
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Ha=convert_field($p[$y]);if($Ha)$J.=", $Ha AS ".idf_escape($y);}return$J;}function
cookie($C,$Y,$je=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($je?"; expires=".gmdate("D, d M Y H:i:s",time()+$je)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($wi,$N,$V,$m=null){global$dc;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($dc))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($wi!="server"||$N!=""?urlencode($wi)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ye=null){if($ye!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ye;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$ye,$hg=true,$Bc=true,$Jc=false,$Eh=""){global$g,$n,$b;if($Bc){$fh=microtime(true);$Jc=!$g->query($H);$Eh=format_time($fh);}$ch="";if($H)$ch=$b->messageQuery($H,$Eh);if($Jc){$n=error().$ch;return
false;}if($hg)redirect($A,$ye.$ch);return
true;}function
queries($H){global$g;static$bg=array();static$fh;if(!$fh)$fh=microtime(true);if($H===null)return
array(implode("\n",$bg),format_time($fh));$bg[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$yc='table'){foreach($T
as$R){if(!queries("$H ".$yc($R)))return
false;}return
true;}function
queries_redirect($A,$ye,$hg){list($bg,$Eh)=queries(null);return
query_redirect($bg,$A,$ye,$hg,false,!$hg,$Eh);}function
format_time($fh){return
lang(1,max(0,microtime(true)-$fh));}function
remove_from_uri($xf=""){return
substr(preg_replace("~(?<=[?&])($xf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Jb){return" ".($E==$Jb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Qb=false){$Oc=$_FILES[$y];if(!$Oc)return
null;foreach($Oc
as$y=>$X)$Oc[$y]=(array)$X;$J='';foreach($Oc["error"]as$y=>$n){if($n)return$n;$C=$Oc["name"][$y];$Mh=$Oc["tmp_name"][$y];$Bb=file_get_contents($Qb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Mh":$Mh);if($Qb){$fh=substr($Bb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$fh,$ng))$Bb=iconv("utf-16","utf-8",$Bb);elseif($fh=="\xEF\xBB\xBF")$Bb=substr($Bb,3);$J.=$Bb."\n\n";}else$J.=$Bb;}return$J;}function
upload_error($n){$ve=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($ve?" ".lang(3,$ve):""):lang(4));}function
repeat_pattern($Hf,$he){return
str_repeat("$Hf{0,65535}",$he/65535)."$Hf{0,".($he%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$he=80,$lh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$he).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$he).")($)?)",$Q,$B);return
h($B[1]).$lh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Xf,$vd=array()){while(list($y,$X)=each($Xf)){if(!in_array($y,$vd)){if(is_array($X)){foreach($X
as$Pd=>$W)$Xf[$y."[$Pd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Kc=false){$J=table_status($R,$Kc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ka,$o,$Y,$sc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$qe);$J=($sc!==null?"<label><input type='$U'$Ka value='$sc'".((is_array($Y)?in_array($sc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($qe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ka value='".($s+1)."'".($fb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$ci,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$qg=($x=="mssql"&&$o["auto_increment"]);if($qg&&!$_POST["save"])$r=null;$ed=(isset($_GET["select"])||$qg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ka=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($ed[""])."<td>".$b->editInput($_GET["edit"],$o,$Ka,$Y);else{$Rc=0;foreach($ed
as$y=>$X){if($y===""||!$X)break;$Rc++;}$bf=($Rc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Rc > f.selectedIndex) f.selectedIndex = $Rc;\" onkeyup='keyupChange.call(this);'":"");$Ka.=$bf;$md=(in_array($r,$ed)||isset($ed[$r]));echo(count($ed)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($ed,$r===null||$md?$r:"")."</select>":nbsp(reset($ed))).'<td>';$Dd=$b->editInput($_GET["edit"],$o,$Ka,$Y);if($Dd!="")echo$Dd;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ka value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ka value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$qe);foreach($qe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($fb?' checked':'')."$bf>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$bf>";elseif(($Ch=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Ch&&$x!="sqlite")$Ka.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ka.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ka>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ka cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$xe=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($ci[$o["type"]]?$ci[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$xe+=7;echo"<input".((!$md||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($xe?" data-maxlength='$xe'":"").(preg_match('~char|binary~',$o["type"])&&$xe>20?" size='40'":"")."$Ka>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Oc=get_file("fields-$u");if(!is_string($Oc))return
false;return
q($Oc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$cc;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$cc->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$ad=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$ad){echo"<ul>\n";$ad=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($ad?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($td,$He=false){global$b;$J=$b->dumpHeaders($td,$He);$vf=$_POST["output"];if($vf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($td).".$J".($vf!="file"&&!preg_match('~[^0-9a-z]~',$vf)?".$vf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Pc=@tempnam("","");if(!$Pc)return
false;$J=dirname($Pc);unlink($Pc);}}return$J;}function
password_file($i){$Pc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Pc);if($J||!$i)return$J;$cd=@fopen($Pc,"w");if($cd){chmod($Pc,0660);$J=rand_string();fwrite($cd,$J);fclose($cd);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Dh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Pd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Pd):"")."<td>".select_value($W,$_,$o,$Dh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Zf=is_url($X))$_=(($Zf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($Dh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$Dh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($pc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Hf="$Ia+(\\.$Ia+)*@($bc?\\.)+$bc";return
is_string($pc)&&preg_match("(^$Hf(,\\s*$Hf)*\$)i",$pc);}function
is_url($Q){$bc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bc?\\.)+$bc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea|json~',$o["type"]);}function
count_rows($R,$Z,$Jd,$hd){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Jd&&($x=="sql"||count($hd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$hd).")$H":"SELECT COUNT(*)".($Jd?" FROM (SELECT 1$H$id) x":$H));}function
slow_query($H){global$b,$Nh;$m=$b->database();$Fh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Vd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Nh,'&kill=',$Vd,'\');
}, ',1000*$Fh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Fh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$eg=rand(1,1e6);return($eg^$_SESSION["token"]).":$eg";}function
verify_token(){list($Nh,$eg)=explode(":",$_POST["token"]);return($eg^$_SESSION["token"])==$Nh;}function
lzw_decompress($Sa){$Xb=256;$Ta=8;$mb=array();$sg=0;$tg=0;for($s=0;$s<strlen($Sa);$s++){$sg=($sg<<8)+ord($Sa[$s]);$tg+=8;if($tg>=$Ta){$tg-=$Ta;$mb[]=$sg>>$tg;$sg&=(1<<$tg)-1;$Xb++;if($Xb>>$Ta)$Ta++;}}$Wb=range("\0","\xFF");$J="";foreach($mb
as$s=>$lb){$oc=$Wb[$lb];if(!isset($oc))$oc=$Hi.$Hi[0];$J.=$oc;if($s)$Wb[]=$Hi.$oc[0];$Hi=$oc;}return$J;}function
on_help($vb,$Tg=0){return" onmouseover='helpMouseover(this, event, ".h($vb).", $Tg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$ki){global$b,$x,$Nh,$n;$qh=$b->tableName(table_status1($a,true));page_header(($ki?lang(10):lang(11)),$n,array("select"=>array($a,$qh)),$qh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Rb=$_GET["set"][bracket_escape($C)];if($Rb===null){$Rb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Rb,$ng))$Rb=$ng[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$ki&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Rb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($ki&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ki?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($ki?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Nh,'">
</form>
';}global$b,$g,$dc,$lc,$vc,$n,$ed,$jd,$ba,$Cd,$x,$ca,$ae,$af,$If,$ih,$nd,$Nh,$Sh,$ci,$ji,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Qc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$ae=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Re=null){if(is_string($u)){$Lf=array_search($u,get_translations("en"));if($Lf!==false)$u=$Lf;}global$ca,$Sh;$Rh=($Sh[$u]?$Sh[$u]:$u);if(is_array($Rh)){$Lf=($Re==1?0:($ca=='cs'||$ca=='sk'?($Re&&$Re<5?1:2):($ca=='fr'?(!$Re?0:1):($ca=='pl'?($Re%10>1&&$Re%10<5&&$Re/10%10!=1?1:2):($ca=='sl'?($Re%100==1?0:($Re%100==2?1:($Re%100==3||$Re%100==4?2:3))):($ca=='lt'?($Re%10==1&&$Re%100!=11?0:($Re%10>1&&$Re/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Re%10==1&&$Re%100!=11?0:($Re%10>1&&$Re%10<5&&$Re/10%10!=1?1:2)):1)))))));$Rh=$Rh[$Lf];}$Ea=func_get_args();array_shift($Ea);$Zc=str_replace("%d","%s",$Rh);if($Zc!=$Rh)$Ea[0]=format_number($Re);return
vsprintf($Zc,$Ea);}function
switch_lang(){global$ca,$ae;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$ae,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($ae[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($ae[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$qe,PREG_SET_ORDER);foreach($qe
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$ag){if(isset($ae[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($ae[$y])){$ca=$y;break;}}}$Sh=$_SESSION["translations"];if($_SESSION["translations_version"]!=1731299125){$Sh=array();$_SESSION["translations_version"]=1731299125;}function
get_translations($Zd){switch($Zd){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´Œç>•û.y8RmÒóûè\"3ˆz¶#kN!-cä²‰Ã(è;¬ãX#Œ£|ø,¢bzöµÊ¢°µó9>£’):Ž¸çC \0.#®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FàPx‘Ì„C@è:˜t…ã¼¤\$jÖ¿Ë8ÎÇ²ãÅŽo(Ü„MäÊŽ’@¾‹7£XD	+/6à^0‡Éú}|®À¦(ÃLëHä£šÍ®-Dú; ï€ëE!-8‚63£@ÉŒ£¸KÓ-\n,ÓÁ´‚ñ©Ä<³ MRUlëè!ãb_\nÃOZ\r³¢ò Ž¬Âö1 5ô^2ŒÃëLSc\rlÓŠtEÃ¨ÝELO ‚3ŒèÎÎLQ1\0Sz<ŽïÔ,ëÈÈ¤Œqêîù9ikl*8±üz3»ôý°×Ú–XÙQ'˜ÆÞµ @×W°ÌüÇ›MOÓµŠÆx¥Cƒ<Ø! 0\nr,#^ÎcÆ9’ºŒ“(ýN#…Ú£Æd¿ãù;‚4ø¼déŠy&<¾¢ö114îÃ0Ù+¥¨Î‚¯\" ÞGcpò¯”â9Žc5—ÆÎ\0XËÁi¾µ·ãr~ÊÃu‚Ñ:¶±sëˆ@Ç¯ì;³mÛ 0í›e_¸îl2ö;YÃJB!ŠbŒËã\\z‹|ï C2Î˜pk^£jˆ>¼¤ï£bP*1cpÖŸsÔÕÜ„É¸¯Û;\\ò]ôÔ†ÅHÒB7¨è£bùNÓÅ°LOXà4 #&ÎŽŒ±žÉí\\ Ü”%Pý48EQbB§ùþ1ßÈ¶D‘%I’t¡)ò§o+ŽRÌÏ.Ln,Á1L“4Ðš“c®MìÅ9£ÐèòSÉ@	ñ?9H\\±¿)§ä95˜òÓ	¯tÁÁ›”Ò\\TU´\"ŠŒ2ƒþ#\0-çÓ.x Ü& €(€ zÏ/€€\0RHˆ	\"q„˜Ñ‡ãMkÑ€Á¥gbTK	q0nA´þ©¨\\³‰œ3\$§ 2âž¼I©5sUê‚Ö±#)=èˆB]É	K)¥õÍ™ò|@C‰³„˜Á“lîÓœmÁŒƒ¾h•um]X˜hÂ˜T]Ì\"j¤ÌñFeµMFvC!¡„\nwd”ç%Á‹¹[4”4–oLÉ\$ŠF†w2Â‰¹2dŒ#Hn€Íùb]°H’GÒˆ’ÂÔ,á”´¶ç,‡€Q®&Rðœ¨P*P5\0D¡0\"ÍÖ>­U¹Ã( ( ©Öƒ²'F‹í~„òÆ¶TødŽ'”†óTG'éª(áÝI`Û?<Giä…Ÿ#2PŒI–1f¨þ£Ù&`àäbD-E²†~®ÙÔšF,d(6øÐØ\n\nÈ*&*3è{ÌâRXŽ†–lX\nDpè'¨^`Ã¨g\rÒC‡÷ŠËFÆTz{Rd´|)+•ZM:p®\r/'JíçFÔIEÁŒ Üã([#c¡…î ÐãIÙ!SŠx+•:‚¡¢¬Ë¼<¥@}‹]|?AL‚‡%ã^RhcEú|“i—3AÏ¯¡nëÚI•DA#Ä|ÓÝtßX5x¼„g>g)›TJçÐ\"˜Ó`ÙC9z¬í@ØÉ¸C	\0‚<—êìOšYÃ)ÅvÑ ŠŒmÖõÂBÁÎ0FWa@PQ6m¤§¨–æHBxKlê¾ë’&›Xc	»Eù­ÝÐÇwÁá¼wXÂ\\Î¢¨Ñaf.ÀëÜÜÉB¯¹—¶¾ÞúÅ|BX.º¶òíÛó×w°=á.¸¯¡¤¬Sn¹ô(„àŽK\$]†È#÷öà—v%	\nÆ8(ŒpÊ±Yö—)ê™­bHQMAµ·ë’£Œ&<\r—¶äsèÙg,¡ë\"Bì^	‰m	&t˜²}E[rï94k)–uá\r#Š3.eH•³n8ú±:³E—ò¸e¢Á’Œ˜KbpÍ\$ÅLÑªóžsFXat‡;çòq<‹òJëd¬²›Z#Ò)/åáæª½\$lj¹ôºN«Î¤QJÖyô/vŸQ2 –v}ÎúŒ§‚r~g:¶\r­¸säwÁInìž‘œ²Îu£TBç­@g–wØ[_ÑhÐ€vUÙ™ƒT1WÌjDÚ›‹†ú3Ú\rkØÛsgæÝ±¸¶knÕ%ú8±jV\nWÜ{:,[çtÔ€a¾ù´…+U7L¯&[Ù·ï‹ì¯Fw´ÄÈLýç°vöv(v<3ÌàÊÖøëÚü.fq[#Åø~ƒ¶tjÂ•âjÐ%‰AÌ.tk4ö Jn¦…ä	‰ i'&Ë!ùlîr ÁòšM[m¯˜ó™¿îW4•½À7Év-xfÅà_0=ho‰ðÎ=d«ÊgåhÄ‹±÷Zt]±­å¨âº©ÞCÆ¨×eR:qÓ]»^ÛÙÚ”2F¦ûƒ4µÜÇ¹q\r¾]{ßgÚ×ÀðËF«úš½îÙ2/±Ê\n/!Öw«Ù7ä]9/4È”™‘¼9í›;ïíãÀ;î|Ýž—ú/Sáó¿‰\$‹Y£ddCzñŠWÆ³¶Äµê¿½ ^ãÝ{É,Knç+@2ÛÞÈ{oD?;“ønéôÍŸÏã>Øíiõ)w/¿‚¼+¯¡é_æúÜîª—ð¾°\n–RÍ~~Ý¡¡öûz©Õÿ•4ým %d>2±ŽìdP²¤H\n‚Z4ëZò\0ª8/ìúP\"ÿORíï¯þõï®	®<\\ôÏBBiL6\nfñg*4å^ø‡Pä Ö\$Â.„¬†À¢CLÏp^àlîÉƒ¶ºFØ#\"â- —R:æ6./¥àÙâ¢¦#èUåNÊ°.ßkÓ\n¨Ô°nÕ©cà\r€VŠl\rnˆ\$m #°OÀÒÆ¶/Ò'|„&Ú›\0¨ÀZœZðÐ>L¾ŽâÎ*,%¨eKÈ¾¬¾¢¹‹(F'0hŠÂè®¸4à›\rÕð–Ó\"À.âó¢JPuÈ âï\rH^4Ê%	Ú:0–**”\$s¦à™nnQ¥ÒV¢ \"Sð.q\nÔí¸RE¯\0001wÑ¢Ê1­\n«1zÏc\\yìýNdÐO¢âQ‡ŠmÍ¼@ª·*\\åðSª^z«¨n¡ê²f8x\$`˜ž…ÊÕ€ðÚÖåÊ¢\0@Â4íü»\nV½â^›éîJÂvSâØ2cÀd\$¦‡	`äö„ 0Ì…®yj#\"IÎÊZ/À¥æH÷nº\"š-K\\2ðº@Ê¤v\$ÎBŽ‚¤ÁrS%`ÙÑ|¢Ò\\À";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœô§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6»c(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈH=ËsºŒ2NAª¥D–êÅÔ\n	r\\ÓìeE]\r¥Lij«&î²\$‹[2B€Ý¯ÚZ¬Æ’ÄQ?ió®A_Å–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅÊÊã'	j>\\¦—²lU­HóÒE*èŒõ\\¹¬‘>ÈfÁdöAx©oÍˆAk”¸MÊóB6T6WŽJ9Œv\$ÂDIÍ¼&-HqZš8Ï0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼ÌŠaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl<’;Î¿±tâÈo“µÓ<ê7l0†òVå…Fƒè6LóA^´£xÌ3\r•K\nü+WÓ©MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎíŽach9{£Î0»aêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèDl„†£tÖ›[ê1z…Â“•ô\\*ƒ„hu;˜Òú[ ƒ×4KÙ†eZ÷•¹ÜSªäûƒ¹Vá‘U&¥Tº™)‹2+“tvÃ:ÐZE=Ö—±BX	AJ`Fqå—1.d§Bôô)(*1“0šC™»F¦80î«VÈeÀ4©`Éb8hRÊaM)Å<¨¤TÏéU*Å\\¬”zVªÝ\\‚õvpUòÀK6,EŒ²RÌYÑIi”À@µƒBØ[Rœ0†³J¸MJª{a¹g.2êD©)?kèÆ¥¤K”!(\\þ! +àQU\$¨e•¶*çÈr3]†¤4\$ÏÙƒ!®Ú•i˜V˜¡õ)îmÜ®ˆØ£¦L ŒA“aRLÙ 0Ð¼­±âuäÈ:„¡”RŽ|ŽZSQÐFe¤ É<º‹ËP™„’4Lø ¥lšvX·rÙ7¦ü)`âÌcˆ ÁÈ7†Øwe¤s7ªÄ7Ò·\r¡¾6aÁùYàCXÊ†ƒ±`(ð¦Yoë•ÛcAšc^Åí)±¢ˆA	³=šôæmM2sêJwjN…:·£6Ö£–hÈÐºiïB€H\nvˆ¶Ü÷–XoTÀJ ÒÁo¤F¸ÒšÕ(‚ P®”eû,¥ZË%…#¤¤mUEV{N:*¢¶2¢ßÒ2ƒ^L„Š€Âp \n¡@\"¨lý¡&[N˜a2ƒbS:Ø&7vC¦êp:]ÙVFmYŽP¶(¥ÛY¤T]ˆ:Ro42’á‰®Q¹‡à”¤V|“´@÷ ÎG=íÌëó‰¨&2l,	}ÊgHÉt]åØ…Ü:òoWj®·åÔî\\Yå2¢ì§;·]Åßvi°9æ½~ÝÅ-ÔÎ“e}‚eYa¥´‡Epñ=è;J`uXX,_qÄˆ#Ç‚‘š<¦ÁËËÔKÒPsÂ¯dFNqs¿uM‡4Õêw›AL4‡¦dé(pŒÈ)†S^ÍØdn„ˆ”97z-çK…ÆøäY~E«dÖ†PîMà¶ÈåCÛqH‘îø`7˜üãmÝK«C]¢®\rÃƒä´”™’keIÅ—d§Q©¸\$»ZíÂ'w‚hÙŽM2öËM’&XáÝ0¬F¥ŸK2P^«5¿íª™ˆ*¡üs®µÆßÄÊa“:`´ÁP „0(úª\r&Êº)cLè¹·1ÏšP#” µ‰¤ ç ~›j`\0€‚eO{‰·Eí1—´NJOx°ƒ[]‚—‚û¶Û˜ŸJ\rîmÓ¡AæL¼²:È3:M¤,Ÿ-ÍuHø°„»–äˆ«º¶²c( ¥°Ô’B!y5À&]ÏÃ÷_Û3Oxñv!/á )p*†YI¹Ä”)“ìýÌÉTCUZðŸÃU%7 ë¡.˜„ÁÍI|¦C8‹¢¥ôØ`ìíÐ%<AÝ¡¤`¡’šá@ê;blÎFÀ« ŽôQœ¡p@„\rÞ›I×ÝR†ä‘¶\$G.L÷·<åŒ£‡Ürô!¹ðÁ‰'Œûç¼#öÖ¼/ÓäOP®…‚A}õ€»	âÓxPEP?­/ß•ÍÚú,„á‰²óÃ)LëÛfÛ¡KilÉÈ4Åo^öÔüì¢ZèÐ±=^ö¯ú¿‹Ç{¼j?ù×ÄÜ’²ŠsvpF¶ÍŠ\0QnØ)F¸ßOw¿'z[Ýÿ¾Ø÷ÞX±§É\n^o©ù‘ôíd\\ÅÜ.W¹\ny/AÛ\rõsWÞïù/2p‹¤ÿ'2»¯øü¯¼â~¶ì®þÇô'\ro0_ï\n? @i¢0æÀù6˜ÏÒqÃ¨Õ#ÇÜÞEÐÞ¬FíDÔß\"äÃ¨þÅë®²„È8í\rÖÑ'nÿÐ\$ùD2öa«-ï?§_0xÐíYÄð)ëš!¯ôMLò™dÏcëB>/¡PŒŽ†d%è0lDâãŽf²EÜ*°­¾10¶èb\0Hip?˜™nÚ°–üP¤Ï¤vüg\0ªËn‚†\nýÂ\n¤=,D/pÓæ&œ¶èP‹c	\rPo;MníúÏåÐ-&o¯¨Bp\"ð”]ÅÌðP^ñÂÚÐ¿P†¶QJŠ…ÌÓÄËŒ¸@áW<óbäëîÃç]ÉÛ‡Ÿî¸\"lxþð=QŠaÂ&ì§X¹(®lÒ`†ê9ö1­æ((ªí2ûÐïÊ+mTÑlóEÑ¯Pƒ|ÕÁ1ƒƒ¨0-õÑ>k¢útÃ%±Ô=ƒkó±ùÏb2+ ùï™ÅïŒ©Èµ!°Wj]Hº’±àPr'\"möù#§#1çR\0 ’=Ð!pÂùò!Ä0DòQ‹¥%‚Uò\"ùÒc\$¯(Ñ†¢ñÇ\0ÐÒÄ½%1R(2|Cò8Ò²s&P(f*C|pKÇ©®EŽ'læ¶ò¨Kòcÿ+\"„¯æ*¦+Â²áÆ9£æ¿lÐ@ñ®.RôømªûÃck‡N*žÃm¾ëgg¦/²ðÒ`èâˆ¨â7@ê#€¦“£H#c‚“-¢'-ìB2ÿH>)2ö@†€ä\r€V¥Ì(\r`@W*èe¦^f)V\r¥°\r Ì{¥Â&`Œ¯‰O1¦XI^­àª\n€Œ pbˆ*&;%l/ÍâÞÆ¾#¦ 0âFíKâ¬¯Lv@›6sjÍÚdeÚÿíÍ°'±Ê2\r4\0E#…v=PrºH®½MX?’6(¢RÄj„J\n>À˜®S’;³þ®sdØÃr8\$L³†ýæ”æ²'+²q/ óŒ‚óÎ:¹*šôBBÎöÃDCCòòm4)O<\nƒ„5ãf4S#7ÊX\rààÂÅPÈÐZ:ŠD+¥\n\"‚\\‚¶ÍFhm©DN¶ïR\"h·‘\$0æ®fÁT)ô‘ÜÎ	‰+£ ÅÐõ%îís @¬ Æ ê\r¥ü&Ï},¦ä–äJ8âlkm>:Tªvt\$º3-BŒ¾kü¾¯èüèDÄ‹ŸC­/¤\nF²&ÆôÓäç,FŠi°‹ùDh	\0@š	 t\n`¦";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß9‰{/¢­Ê^ä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi4=æ„Î›¹-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKí\r%4!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÙpÂ2\r£HÜ2ŽApÞ9áxÊ7ZÃÀékŽcHßlA\0è0Úƒ(é_ãØ0ÃXD	#hà6£m®:xÂpA{ƒ@Þ2\\Cx@:Žc(@)Š\"`Óm®4›’˜²Ð£€²«ÒSS”4«¤Oè;*“étøá¬¤®¡ïÎI“7m.R²G´»ËC\r¼Y-Šú±>ÅÄ1‚RëJ&„º#U£+hù5+Éä¬Õ¦†Ÿ>GQê’Ú)¬:“0ŸIò+W5ª5¤ª€5J„§/q¤´–UŽ›/.ºu­7‰Ô[S‚¹0h[ø——aÂ)zM¸0ùEF¤ŠÆôÐ0H“J¤pížþ€Ã­®óµÇpVä–\"ú•#í‹óíeÀ¤q³rÁÉ©º¿ä¼:š•'ÄzïG.ô[š<O\$óÇ V&!±ƒˆ”¿Lš½ŠBûò>ëAv_Næ9VS¥ÂøÍJ”ð´–`^eh‰UyüÑ¦íœ;/oØÇ{U,}ö¸Ÿ¶ŠøSJ¤;Ê’›sº†ŠZ&!L¡g`– [B~(]ú>7†iÞ+g<ä}ðbÆ•2‡mñý%§~õ`°\n\rÐ953¢ÜNù›(=!Òâ„\n›£8ïm×”Ätï\r1Ú3Ä¬œ’7|IŠ©(Gd4äŸ2(}Ÿ	\r0PèZ\"2½Š\n,n‡íÞ³ãŽ¿Z!bEÄ­‚àù”³Ôe­Ž •è†^b2‰/’&=“juUSU‘Z&©ˆ²—âÙ0‹±¬ZF…é#‰éD¬ CÊ©‘>Gý˜ÒúóK¨Ž&€¸†±\"JoÚ~;ñ@™s(ûÉ€'êP„¾„žˆDyP‰† í'n…ä{Ø8\r´¶6BI\n±˜(P4.ÀÖÁ\0fZln†àÎ\nÌYËA†5¾·C\"Ð\nÝ\\«µz‹rï‹|0‡Eœ×Êû.\$& )bVåêRQDÆ¹ˆR‹ÅN@)B)-IQqOPÐÂÈI‰›Ü†“é#ø/#aóT+2rn+¥x¯–ÂX‹du•4–zÑZkUk­•¶–êßë…q®UÎ—Jë]«¼hC….UOÂ,+ñiDé\"´€DøG±‰?£ò-I4Í³*&ÉaÇn;±HúËû„<0,Òš£»Õz6åNœ•zžHÏF¦Z`£—\$KÛù! o9ˆLlÝ*	ÝàE  …kB2MK#³HAn%æxšnœè:¢FG›8—ú–o\ne»âc!ä.%ý”—žîÏñ\r,À\\·E=(ŠåJ8ÎÚ`¹)84\n2'Ÿ&\r³XùRtQû\\7±‹Ã[)j<¨ g”ðª( uŽã¿:JX[Í\nA5#ÁÐNR-3S.}›‹Ÿ<Æ\rJb ¢¢Y\$+’œ¬F¨\n\\Bˆ…ÛrBTN{>‹ExÕ>â¸Êo¥ID—2Þ}(‹lÈ0r´—Ufšñè¬¸˜T ‡ÎJwÁ‚õ¡:¬MRñßˆx8°°¶YË¡k&‡ê„`©`HeC+±¥A\0çŒ­ûFoÞ½(ò ÄN65|¼ãfŽR£‡‘BS²zœÎcF1”ªT—½jkOŸóÎ!ç&ƒ? Ÿ_õ:jÅ?×¬ ž­y¦,j|OIóû“9Ø'\n§AsŠï¤!¾/°ñ÷\$ÃPýJÎ3*™òŸC\r\0hÂ!zç¿Œ¬Hl™«T}Q>(kÈú¡b¸…à¡jåŠ«ÃªYXª¼»¦2»w•úª=<á ¦s‚Ú³JáÆ7”‰pâéÞÝ5(k§kå€¥y ¹íœ40©¯‘*… Ê¼ÃHcœ«x7‰r [¾?Àé~í{ØT°-Ú¶œgC‚\\s¯\$b&×eB±fð6Ü-Ä6–wt^Nª9!Ä)÷\\T^5ã|¹¢/H…?YîÄ™Z›Z³n/tbhUz<°Hä®xÜ\$¼ˆ\0ß‹\$YYž—•–-ÓÀ ×z«mCÌœ÷•ksXW–ê–ÚšÝ\n›rçºÔ–rm/§;kâ±ˆ¦J<„™ÒEÓS5üÎ}ûeNN*›©¥”íþïÝI`*r½­A\"æ‡N\$Ê&o`U&E®\ræð?ÝGK¾V:ü ;ýv%Ê’hBT\n!„€@CªÐ\r!–d.Fƒxt#¡Ô8¦¶Ã%»„¡ŠE+³tj³Mi €‚†OËH`‡èñÂgƒý\raD—™Ý’²ˆý¬ž7Aßƒ=—c7®ô¢Øû9?íN·Þ±Ö\$…Gï¿¹G2´ª7~H^G»?–üˆ~íÊ'£€ÃÙ2¿ºWþI<ŒßŠè~KÀïŠåÈüò†ÑrOçí·9d¼±WfhRÄ°H¤XÉg~Mm4âÐÕ\0Œ>ïJ~ê°-Oš÷cRsêÞÂâÂð/lzQ­’QÅGLPHBÖÞmRøïÐûî÷RQæáã¾”è  ªÊìö„äRÖkÔ4ËˆTph\$ãzÓ‚>¦`;L¶+®ææÌ@ÐÈRTï&@@P`è£¶ÛDÖÈ BÈÖØ¨¿«jön¬\"bãGòk)à¦ð¾êJ\0¶Èà°Ì JzÔðHƒv×b²6¢âßælxïˆµP€¶MHâPîŒ®OkÆÂPÐ*í|k\nÞ­ãÓ®g»ìxÖ\"¢æoÔV8¨2fè6)+ŒQfØkð3`Éˆ€DÊ¤¬e.x\$\n6&*æi`'&0ì1bÀÈDËñ6°Gç c±Hmå(I§ÊB²åŒ<gLÔQ§ÏðÕtj‡üæQÊ®+ì¸,ÀPªOjNìÖ\0SFþÓHí=ÈçÊ&mLø‚ã‹¡ÇÆ²ð½K’+jrL\n;ÑT\r*€1Ï(^I1,’\nÏúï(BÓñ(¹1ñúc®5ë#ŒÑ±Ú=	ÖýqÓ±{è\"28í0Ï\"±Õ!ïÒãm†¹bp3ÍóÒ>¹2\\Ã2Ge?\"F2¯põp‚f÷¢ºøÎT2gQ°¯ro!ÒríÂ¡'¯PT„¨ùÂ¸ú}mPØnŽ¼î“!2PèÎÓ#\$zÈ,ëïb+’¿!Ñ%qû+K’:Ï¿’7ðŽ°ÉúÊf¾ç0MNÚÅK28j¼ÕÃNþ	fnGV40&Éôj„FcÊº7Ì8DŠÔ3òv²j²Ó|vèÚ®dÆLjHƒxlÒì´ç+,ƒ+mQ\"<ó?®rçÇÐÉî¢èC¶Î³6SÑ²Ê\nläCdTrÒÉ²ÖGIn2ó„urÑ!­¿#9.K9’åRé\$2†Ía;þ\$/9hv‚nä·è‰8²/MO\ra<p RS8ð/#g=‰y=Ò@ï2í=NÖççÕ0îâÇo;nó;±+=†t&bj²‡PjÃ¦#rr0‚UÄb§ê\$‰»#¶R	‚ÊÍ†íƒe'r½9ÓÏ’±-¦M)§Jíò)DG¸Ø²G,CôU#Òç “±.ÔME§Ò¿ðp,*?¥?snæ\rGF2uET‚§…|pp’îò@’˜í´R*Â+Æ.¢¶íF%BÓ†Jƒ LL0iÓŸ=Üë4¼utÀQGvëD%\$ñ):óñEôÔÏ¾ÏK9Ltã8”XØˆÔ`åæfTj–‹Ð•ÄqŽÕJ¸ÖfUPìóM´÷Qˆ%,e8®Ÿ,3¢…Ãõ:²7”o9mGgüvÓÃQÔRSUªé‚^3ÊqOÒDgðøBud–Sí-T]\rŽ—WU79²?N†5?”y•„ë'Qô–ã3V.ŸAñssþÄ4omÝ´Ü°õ{LôIW¹ZmÞïéaTßWâb.ú³UÑ\\¿XÂqY‡\\â×E@Ê4ÛB	'mð@°4ŸñÖ7ÄÉ²r>•Â8Ç0\$’‰a4NØÔµQ—PÖ/‡|Ôáp.&Ÿ/0¤…/Är¤&¤`Ð–wÇ¬	 Âe¶B:\\`èa”]`ìaV\\œ¶hüTÄÏ¦ƒ]O?(O¤+OÖh–{-p»bòªM£+:@†…€Øbú:bbÐxÙQKRÄz¨38ª‹WÏ¾E„€Å(0«….«ìdI\0@\n ¨ÀZ	0t–BÉ+È÷2W¬jLn‰æóh²£Sñ”Ô.b4ÖøÇÇiâ@\$Bˆð€)Ë]ê±;ƒÑT³põÃáLkNžO˜´´€?ðODPB„V\0Et4~ÅÂŠ5}TÆTÓÖÈQ•¦¯¨6‚ðug\$UÄí!FÖ>7~´0©PHím!c&”DÅƒD4¶‚S`å3=ppçn4©tÕ§Ñ“Q™í\nIªßqW»—«|¬ŠöBxò57¨¿wÕH²;,IâŸ·æŽ¢Z‰ìÔBõó{—á{ÉHøÓÀÈõsCR„b÷g5h¡k7*àP S(Jà·3—y'É‚x1±¿nV½«ÔQàRöérbÙT¯*C”ßL¸\$…<¢XoìÛ¯øexj¸K‡P,çÐ!.”“Ìß³€B7²…c-Åbvµ g‘V0raÆ*ÒÍnØSÎÏÃ	±¯ð›K·w…É-R±†6´/e;\0ÐšT1XëÞŠX²#ã€";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊSÁ°³“TŒJzÜDÉ‹d†¾6­ò[Àí\$ßK’+¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWFóò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’2xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Æƒ(ä\rãÎŒ£v8<?Cpæ4øðDùŒ8ÐÊ:`¢ü0ÃXD	#hà÷\r¸èèã|¸¾YËø7Œ›ê9¼‚˜¢&\r/Ô	aÞõaHl+r¼\"í¥!‘j}äSãF4‘|°Œ5lÞâ/”_BúâŸ9-ÍÍ‘DYpýÀâíÉ-i\"«ÚÕWdAwÍWf°È\"7¢ÃŽ-l„¼eVíYÛÊ—3%`nuU'·³z=Ôw®­\\ÇLÞëÑSÂ×ìl*¯Yˆ˜Â:ƒ @;#`ê2ïú¢¦¶k7¤¨âÀó¬ÍËüÇAF/üDØV\nñ Ã(ÝñJö¿I|{¸µ­£Lü©„ÉÕ§e2…ö8¥Åê@}¶Vé70ª¤€2\$E›ÄÁD4Oáê,„\\ŠÎ@Fw±” #ÈÃ0F-,¦âb¾Uú§â\0Ñ›4N²ŽSÔBD\n=LºŽ*ìt…¸¸ Vô)›cü;.™@,‡¬ôÐBÈHEÑ¼²jÜŽ\no&°Ù8—ü†;[}DÉu–Ã9\\B#XÔGX)’Ëw6êø·?%°LÁaj©Ä§¦ˆF²ãÿR.uF7cyŸüIM1ÄÓ‹Òd4M1äu‘Üš%^Žä9\0£ºwÙIä\rá˜3Æ*Ó×à¦%‚™l	ðyç\r¬À<‚\0êÈƒ¨cgÄ9†gp`oèÐ9‚Ãæ¤èaá…	jäA\rÁÔý€æ\nZy[t‘S‚\0†ÂFS¯„Ö–â SK4j Ä­Æ§èp^\n/\nHÉ9*Ú‘#Mï-÷¿uvä¹áf'È31™<ÈÑ¨ ,MŠ‡)\\Ù+#ŒX/öÀØ)rfa‘’Ÿ”hÙã>iæ·'Rð­QÉ4º¢DÔ`·(*åFb÷+ˆ“jôD—Šf¿3›‰J3<§ÐÂÏÐr=¼9‡v2ÑC(x¥@]?X\0h`Lƒ0†ÃsbRé‹1†4Çõ9d,’‚öN€S,L¸63dÍ³8gT%Ÿ§v„#F—!„5žFšz´›\rÌê…›w”«PÁ…|,¨Æx¯éJl¤.6Œ%ód Î“bŒÅýr•C›o\$ï¬é‚\0 …x‘dTÏ\\æ±æ\0 S5Ñé\\¨µ|?µºbÍŒX¥Q¾¬µÇ\n¤êPs®¥@XQš+	+RggÉ±ÕŒS;5VP*¡€Qa:;Ÿ¦œJ{äyQÓ4¼¶tšì>åÀóf’«+)Ýv»\"ìˆmÚ¥sl§’>Nð ¥¢žgtÒsE?‡ø0 âïé€ ÁÈ7†Ùå=+2?Œt9RÒ™ý>AÂYVž¨’‰@q° ^Y`žÂ¡…DªÞë\nb,!uHLŒ“aJPÍá ‘«´.R‹:Èkëš†Ù1 \ruÆº&ûŽì‡Â¬ÂO3pÞÄ\0A¤3‚”0Qí<‡±€`©fYƒE\r,ÙŒ»ªß‚ði bÇ‹—gÿJtP	X°ÌÒ\$t1Ó‚’gu(É- ^\\(‹KC¦˜>WÔáÙ ÑV­#Š°VE¸6ërÉ\ne¾Øâ<€€.—@œG”¨ñaI¯J7µ7kÑlÓ¥tÂº1`ßàÙC»iÁ{k-|è‘ÉO˜G¨éhLg’‹xÅnT¼G…² öZj‰Ñn9tùD¯)	QFAú6)¨­ÞQÖÇhÂ­UŒxgâåÓ¶l[!ÄSê¥ž¼‹»ÌÒ•†ü‰Q95*&çD#tñƒñAH2³pÓC£\$\rÍž\r?“\0\\Ó@•ÉÞËÙ›‘ìjŒ´s‹Héâ­\0ˆuÁµEŸ\$øF6*íÛnnòBrŸÌÒ“Q‚ÙÍgÄÝ‘RrÎ¤að=¬û‘ˆiO\0!àÐá/\0S§¸1Ÿ ÈóÒŽÚš;v%Ši„g&&°†¯Öú\0ª]LCK½éA•¢žÀÊø¢È1±ºôEêÈ¾¹yœ^w„µoCîœ\rí¶Ã5®@Äq‚^Â¥ôoí«}ª;¶#[±’JÕ^YÿµÞ…¾ršž‚î)¤‘ª_D>ó±éòÃ–:!e>o9S0”tlnœV…?ÿpF\nWFð.eCéœQ_Âï›——Z¶N¶üÞ±Çw¨C	\0ƒ±`Ò|rË<¡¾ÿŸ`á›{cO±0cÞ.gèâyžÈòOmvYpÁ‹:ºX_¹\$æ(rmNøýe\$OOÜðh`D&Äœ£nÛN6ÿåt7G¦~¨q«„åè0-Ïê) ‚ÎVÒ¯¨ð	Âð§Äðÿhmó§Æð0œÐ6¶/…hdpH~ôÇÚ³ÇT²¨ü½,’\"F¦rƒËè+°>ý°BYbÎDð\\‰ð8ip?BŽÿÌ¼‚<ýŽ/\0s«	¢zÚmw¦÷\npK\n¢\0ÛO(\"ó…F˜b‡tÁ€î\$'Žr…šsgÂ]òPÆðÐbô,+ŽÝ(HWkÊ€ÄT°&à°iÎì¤\n\\ÃÅ¸j\"Ü™¢ž¶ãn70\0,¸pô%BäÎÇæ²XÂØF\0çOKÎ-Ä¬æq0ÒXlÌþp#&·ÂØÞƒTúQ\\r£°lbÜl¢ñœºÎ^÷¥–/VÝÄ\n&¦ñÐû†ß^Ç\nMq<‡ŠTÛëM¹H‹Ð¬Üe^XQ¶q§Þ6ë]+¼Ð3\rk¾¶/ugÇùM®º/PúTAÐe.éÈÞJð×c5‘ëÒ„î«‰\n0[±£qï%œÏto\rèÞÈ7#°c²\"òÎJÓ­>øäÞI¥ÕxëŠN-°|¨ªâ±„ÏçTŠHäÃŠ2ox¢r{’~ÍNð‹ÒMeyM7m&ì…c ˆ.üïR°24oƒ³%%QÑ+MtŽvcV„Ñ¤X\0@›\$Ã\nÔd¾'‚[ÍÞá-â]ÑÀë\$¦òŽ¹\"pÕ\$\rÈÞdS%¶jqÜÈÍ.‰D+,R)0’òÅˆîÞG\$Èå’20g2m™0âß+ñ¬ˆ³5#Ò,­x0¨†~²û\"®·\"S6£‘Ï\"ÓRìr‰ òKs6-ÀERÉ6‡5so4PoóvÛíÃ6q\$ÑÎn¼r¡ñ4²SðSPU\0002àïdø´ëÏ­¦XPy3‘ó¤1òjBó¢z“c#ð.'%*®:òßó·‡©	âÉ4Ó9bÎSo9\$â¿/Ò J±Ë0s:xóýõRœ8Ò98ó§9E?«|å7(‘2\r%mxŒKUCrE;'ËÈÐÓÐXþ±bÚÅMáDpôBõ¥\0ÞŽfLHž¤\r¥D‹ºVÔO1³µÎgESá,ÁLï(äMB!ÔP¤1&N,„ôXÐÐtùíˆ(‹8TÑ‡FE“ƒr°¤ô!”&ò´\$ç;GQä™r0nòzŠèvØ‚ÑÒÝ Sz|-Vî%¯8”8Èç@³ÙCˆ³Nô5ÑÆ¤³×4óiOé(úS1CTû5m3/	prJïŠ±Ï‘5©Ï5õ	?PO9bÜøÇBR4ðòR:RÇS¥Sõ,Më]C‡33ÕS”\$¶5TäU/A‘«8³Hõu+VÕYQU%W’˜¼d†0Ú8¬lXa~ß©Ç½5Ž/“<+S7¡L	¬ÕÏNAÎB’\nŽ•‹)g—!Õ3PniP³öPuÃG3ÏWßAô÷0U6•×9çUÔ^5ÑUcI‡’lQ©]ôõRo='à*%‘&áLW“]Ò7`u…_Ò€yuñ@÷R–ß6‰……a…¹bµa(3êòlHT-Ç>ÑÆ¯Ë²äÑÃ/ò#Sq—92+9kÄp6XÓÕ\0004 ¼Õ¬QufØGBJ6rÕG,6zLVi2VUgËhÖ,á`–„œV‰iöw>Kµ`¶N%µ1S6‘7ÕùL´_k+ã_VÇZõÒ¶6º†qM‹Ò‡±±môaR43koGdnk[6]@Ngf5ÏVVk\$1ô¯£j3GµM<SQ\0¨sqýdPÓ—r®Èr‡`6WvDÚGàô7Žóbö\nøMV´œŒ…[›oÕÉlÛÔ#pµhðï¡o×9jV! ×	iuÔ§r–“CsP}ð”Yq<µÄkË±wu—\"¶I˜ÿS­;§¨¡ƒ>t~3¹\"”ñ²uxµæ¾±zö3{#n¹+·¾÷WÃVöÕv·€Œî}Mâ¢¹b¾,\$ÖsÝDu—%·ãWöô¥Ê`ŸŠ`? ê\$ ¦«£Æ\$\0˜zÕØuÑÔåqúØ	>Ä?ÁwðØ`è@Øl,áàÖJË'vw§~­@Úh€ÒÉ:i¢êÌÄ—8w@Ä­ÀÜ\0ª\n€Œ p:ŸöF¢ê—Ñâ;7Ü!ÂÜŒfçV7éwÏ‚±'x +ç1{ø¦¼ô=€—çTöƒ%‘²o”ÝDÞ¹Û1Ôh0,g-<ìØe†ÚmkÒW—WO&MfzÆÄH1M­jt.JÕnQôòˆ¯bÁ2Wl–÷„ÃJv	9c0vÄl›-Ö£ÜðäÊø’FÀ™”Érc#È?d@ð)\0BÒp-›!xÖ!ÂŒ8±^;W+7ùq\$nÄÔ´Öq½a¸ÏiVÉ7AM(Þ&£‰w6Wm˜.‰>P5Ël6eª\n„=Ãä<8‡¬(\rààâ&(éj}šÒ2¹“e…R»È´×g´ ¹ÜÂ‰&\0Åó)oÇú½2è9…¬V-4>¹¹ ¶JÚÜžtf¢Kõ0Œði5–\nÀÂ`ê Ûj£‰^ÙùÇ»4½%Øì„ÙïUºùª'=Pv)ùv/z²v›£9 s@‹™‡˜­‘9‘jŽÇm|}4Ü[šŒM9£j«z´VÓîgôˆk8}\$DUœ *ñ9 	\0@š	 t\n`¦";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰p¨© Ï{ö‡(cZù«\r*ò9+`R¢:¿ ìº#Œbò»!«ˆšÉ˜¥ðÂã(ÞÆ‘dn&>N€§ ¨¸Ê9&c”4ºpáý8±p˜œ¨ª¢ò· *Â0ÊÂ„|ËB¢Ú5(ÍÔÏFáâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇƒDÖ\$ãš)Š2ÁKüŽ‚KHúFKÏhÃ»±èê5Žˆ`ê1ª4ÌpÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´¬Àƒb:7\0Aq\rKõËpÜvÔný\r‘B0#„5P/ÒP‚:¤kF¶½ó~\"£0Â:ƒ @Ë^/%jÀ.€PŒ:ÃXÆÃÈRàëOLî}xÉÇ£ÏŒM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡q¸ˆ:Ø\n2DäY³Šc[&‡fé3õN´ìsc[4è½büÇhÒ<¹‰Þ\"”ÀÌM’_YvmÄ=3uÊý+kûˆô£mŽ#.l5›¶mÀQŠPm¨Æ«Àhü¹')Þ¢*§cÐÂp©xÂ¶94ƒx[³¾ìñ¾ï¼CN[XL”Ì³tŠ7ŒÃ2«%Â~S4L#{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐT	?_ƒ(P9…)pœ2²Ñ«Ä‚b˜¤#jƒ \\KÊË¾Ê?»âà„6â:¥ÂªR2½\n43²Ð³;ŠµPåV¨£8@SéEHï1¨Åx_Új3‰µ7”Õ4N	ùó:jR’à¬¯Å	UÊ)3ŸòCYx)˜äŸå\\„Ÿ9-A5wöÌ˜såÍPða”{ð)60TÞœSšuNéä;§¸ŸÔ\n’PŠ6(…£rRF5J©v*¦”âžm§9Q*ELSA©Ud‚0¥È>Â‰PrvYP’ãê[Oò;w¬ÌCŸÕp€Ã‘è\rfmZSTÆ	qz/„á-¥`œÆóÉUij<£b\0H\nÊ7ó@Æ\$¡cdié=E~/p\$ð2’ä¼Þ[cÉ\$ÎÀ5¨§`rçDªJ¢xb\$X'¦R~\réâ\\d!¸r*LÑG\r(¸0¥\\!²6†H2‡êj˜PfD‡â\0'äŽ_CAÎŒ–By¤jÙ©”ÆL žÒxS\nˆJB½øÞGÈìepÿ6d¸qH&dÖa°´Xej¸3¢XºŒ#°åbIˆÉs œh’ÄøÑ\n\nÀ&>“LB\r)ÁRIµd¢V“\n?¯¦mÇä‘ÍË!–0„531õHS-¡ØšB4Ê‚xNT(@‚( Œ´´Éš5Ml0‚RA\0D¡0\"Õ\n¥Uj;–FÒ£Õ×#T^!´«VúâÌj<-¨™žâíWÃƒeA¾ËC½\"»+;JÝ‚\0ÎË,S.–4œ88B£KÓ6Ž2¢7¤±=ñT%¹¾HX4fÜÑæ­Ž¡Ã¹²è›on+0â[@åH¼8sü¶÷onØú;c¸žÑb._–(sAH2©àÒÎOšŒ\"&­\$×Î•:\r¡¼š™°¡\$¤¡HA%2å+×èwHAT\r÷`¦Õú°ü+ñ¨uË1à¨Ôš:\r‡›kKû7.'”óž–ìÞ„—\$Önù™xYƒIw¿HÒ†PîÊÖy”L-A„™ †òÓ¶’Ð¢žZÃšÐ\nf˜ß¶•¨Ë¬!°Ôè‚SÊ}WÐñ(f'œ@ßŽN\naLe™«WJM£n\$~å¯È‰é»\$ÄÄ…úÅÉzÚÆ¨lö¬€¨C	\0‚k+sUH™ \$\$Ó÷‘Â4(\$Í±³ú±×0/E0Èºæ¡Ðùw¨pÂ‰1(‡qøš×4ŠåKÁ\\ÙúRDÍÁp	\nºJè¦1£N):\"„çi,úe->–l¼Ÿé7LôNHÑ‚„ÐèýG©^V]ÚVO¶¢á L‹KjÄ>ëcÑVÈá.\\ÙÛD=¬õ®¢•:geè}S³ß†´ÑÛKRjÝ³±Ñ{ghé\r»\nœF£1)\0Ã0¤HîQ¨óä©%`žU®Ùf†„“íæQÐi\"2æê›\$–uÀP}Ù·l,2†.\n‘Ñ¾VhÇ8‚„ÀPZ`è\\J«Zƒ>rWjôª6KnÝŽäG@\$#â™Ã¥_ÇgòÖØ¹c{î9ž¼p|=Z«w«yÊÞÜ<ó›î·PL`ß¬ÂT™{îãú¡çÄk§aÍ*æº)Îê½CJµÎšô‹uqZÍDƒK6Vkd±wÖ”PpÉBOŸgc¬w\"8ÔTå¥îg@+vîàbpö&QY³Põ’…—«ÈðK¼ž/\"\n%}.Õ{¼¥xû?¹ßRIRÑùy+æK`e>ç9wt\0…güÇQëÛtËú=iº¹…¸}—9|‚ùï›èÛÕtÏYípGQëÏ­Jbs–™Y:êšT9dâ©´¼Òòpåo”Q‰7Í‚A‡ègíS¯ua]ú®åýŸ÷5Î„[d›ð[MqÙ¾5'´ûØõ0ÝN‰ùþeØøoð#Oä§¯øéh09ÅhkB¬;.'°^ä!¶Lc6d£æ8¢´Ä@ýL‚Êè 0\"¤0*Ä¬@fâ .f|êÐB ¤ø‘¢>ŽëÄç‰ÆÅ‹X\nlhÿP¬UÂìdnøcÊd®EäXì¬Ã\$÷üÃ þ¯tøÐ”ë¯}\0Ç³ˆï	L daˆÊih÷ì*££‰	ˆþð¶ÊPÊ!W\nÌ\\Äi)½\nê†â°Çl¬(cKƒÞLb.AãNÐX\$jÜÃã\0¤üð µc/o¶ÿ°Ïñ\0Ž¾ZMWtb«XðÞY«zvï\"ù¬”Q4b†„§±JnC‰#(XÆVEb>–\$@%ç5®~zQn\$ÇõÐâùÂ|'Â]ãˆ!Ç&°’ç\n¢DA\n\rŒ–‘j`Š!ÃÐCåêÇ	–81p“‘ÀÇAQ‡\nÀžÈ\r«Ï¦–Œ\"‡páqÌNúc\\°äeÃàI‚\rqÇ\r6’€?R=±¨Ú`	\r²ýÂã\nþ°‰l k\0øäD\\Ñ\\5mCÀÜ_¨@’BÚòH_ƒÐRÓ²V\$ £¬FE†ccB\\d£~…‚›ã¹\".##?(\"PÏ…¸çN¢ý°M\$ò’[ÐØt/¦u\r\0@ä<úQ2ÀB\\dz\r€V„2 ÈŽüBq\rïd'ÇØbJNŒ\"PaC\0y\n–\n€Œ pœ€ È­”Ôð–ÙÊ²”îÐmPð‰‚zÍ¼Òc(×m/ïH“¨ÂŽn\0Ô%l2cðìeŽ0€Ú'Ã uJ10„â„–>DT/hù,Îl3e´í©ïïþ^b°°ãÀ«ƒÇeºåf(“j?\0Ô\rãÐ¶æþGn5£&l†ÉŽž%r£ÇF£žµ“Ž4ïô32Û-ö”¬6qó’^Sy0­9ó’µ/u;«ðð€Þæ0Àôô³Å;°+”Ê¦@`\nü¶âF\$ç0'`þJgfzrkL¯“úñD0h‚XD4/R¹sL.`êE<ç4¬Z'â®ü| ì#†\"ÊÐ°Èç-óàm¦0?“ìí\0ê!eÎ-ÆÊóî#2”Jî#.ÓÒD@¤@Ê`Ã@«,®, Ñø:¬";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îú†\nƒHàù„\nxØ¾cªJ4²ãhÄÊn Â’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¹óhÓ7µjÂ7;ã &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»ô¤\nï£0H^1	+b:P\"ú7;a|Š>£*„‘‡xÂAi¬€4\rã#fü á\0¦(‰‰c8£ƒÑ¨°ÌZ&¢òÈA¨rê1ŽˆS!d1É[e¦riÖ£M­5&ŒKË´©EU<¡µ°Ä<·\0HKu]Ü®6£jõCÏœ­¤q¼Ê1²•Xè?OBön Ê3,V;/c¨Ë`¶{ˆÉ†ÉBÎÏ3Dß+%ì(š10ØƒŽÃzR6\rƒ~'ŽJ5ï1Œnþm=	†Z›gJñhÖÊ2RÜ@¸î-‘ã9…:ß Ì(Üfƒ#)]W‹¤W‰Ìvå«3Ü\0Å/Ä3ŒZ–öÁe„êSU2(ÿ\rÉ8ç·½(ñ\0[É0ìâƒZ×¡¢&Š®© \"°åÅnC.épá·Ç\\ð»âOK=\nH0ØÙ MJ’££xÌ3?“Ã€¡ŒpLñh2 Þ®'ÒãòÉYùÊ031VXÞ¼2OÄ‚<£Ã8Â¼¸Û­Þš¯/ÐÊaJcÛ\rnø@!ŠbæŽÈø2Ál9/HòN75É*N«.£kõãŸb7O	äéØŽL§hõÌn\rd3Upt\0AŠ<—Ÿ‡îFJ1&O†	?¨¢©’qz=¸3ªÕ^LIšl#	ÌYšbºHrEïº¾“¬™“A%©áÝ˜ÆÐ–Á&	h9‡rê­\$(2A4üÂÔ\nƒPªD¨°î£`Yy%à¹I)@Ü¥2™Šêp’%>¨UTÊ Ž0(<¬\nŠ²7JÕ[“ç²q˜@Nå<¡rö{v=„\$ÀÇ\"t**#D<ƒÂ4ƒ±†+±fsfL\$ŠDFÉHÉ€H\n7¸ä^±\0(* ¥¡B,™òˆg~²·Àø‰¼ˆ\n`œÍCÆ\\KyZ=\rlš“²zÙLØa\"¨0/öžI¡Q&!\$ˆ‡“I)U±[`im[¤(£o \$¨9ˆTˆ\rh1³s5 a60€Ù&#dxS\n„7·R|F	£Nó)PÈÄ‹\nË²€®–\0¹×ë}1Ïøö1	€ýÉY	…LŠÌ§K3Ú‘ù>¡¼¾ Ä]ÚÀL)p>Ð@‚¤›NêØž¸æ.4Ý\r©°9‚`•´Fiá»+:‘µj8P Tµ@Š-JJˆÂ2åê½Ëõ3hÆ¬’2„èI‘‹‹Ä|ÈðàÆÑhAÄ í“¸wŽrÈtè„½§ªåGžY–<&°ž™P›ûfLr¼P>8m,à	<Dö\\ &ý!fî–K™‹,K˜,ònpÖËÙÎ‘|5ŒÉ6‘p‘8a7È´€Dõ?O«`=ˆ&Ó’ôÝET:±˜A‰¶IU1	&™“eE}¿†+kŒÙèH,OÚbì‰è‡oÈÐ¨åPÙñLM+‘W¤Å„þ9ö,òfôça{á°¤Ü˜„Ô^KÓIü»jØ×Pïií\nr¦@aˆÐÜQƒÂÇ[«}÷V}Ð\"-Éa…|Ú0`cµ¬ØÐþfÏ±*§f@ ­\0ÒÄpr­8På\"=‡±O¡¹˜†)Ó¬sNë )¸’nd0^2µçê)ZÃPHÑhDlîEº+„¨Š*HT!\$G†\$]“¨—SLÚÒéüUì{I®°ã óÁx ]3aÂš\0Ê»•³ŸÌÈµ+»ÇF„‰pc?U’ä¿Û0“Éøyù©Ð“\\\"aC .9µ)æòºÅs™8Î´3<<õšs+¡ ¡·?¢ù†=>¥dü¬ MI‹ÏËºOg\"I¢ŸæŒ`ZQHv%3Ž‰6Z§;ê·¬\\R½h`7‡zÒH	0ÄÅ\\¥ N6\0n¢“b[hô@Û)DÅª7S¶“	ºOÈ<“Fš¶dÒlá”1k}>„qXLuhÂ§Öb&ëc\$Ø˜—ÍÝÖ²\r4+dè¦àRO–q\n	€a‹\$…xëååqg00‚ÕhlÓÕˆ&‰LÖkµ™c©Ï–„Ñ­öX¡£°KîG\"`T[‰X®c\\£ó&<·J5ý\0ßW‡ãfm¹òbbÉY˜	¯œ€­(}¨f8‹¶Z×x@PF6PíÇ¦v.AND‡A@’°Ž¯TÐ	?ë½Y‘ô¢ê‘øÜöÒ¬”`a[‚0×_%8à|\0¾×¢ö&€¡˜ÁÂXC )E<—‰ÞNag\\ÉCæ|í©>ÞØJwßC&Ž^ÌWDÇâÌÕEí÷ÊYï/á3÷6ói¯Îø™eÎø¡ã±­µÎ70a9í½õ¤û×úÕÍÖg³†ÍËúùôØÇ…ëGæC?Ÿy¯·Eú–ûónßC—Ã?>\"Ïl·Ã§§3^¦Æ|ÊÃpÔ*/^×äý†û÷Í,ü\\ëÌû¹†Rw†Á3YÕeìl‹©w{F1!Z4Æê‚²«b|7\n=„>cðËì}/úgÈLX‹§šÀè0+²LÈ­c(ÙDÒ°kD& (RBïàÃkô~k\"Y¬CØÉHÂÇÒv.ò^îhífú[BHö¯¸âÅ²´/jóOƒOv³l/A¯V¬~änôNBm°›/Ý\nN2m,YšJÐŒÚÐ¶»£¾Åì80¦Æ‘\"p¸­À}ÉÈºB8‹°’ðÏ‚ú(6ý‚s×Dm\n‡%/¤½­*o§ÆGÖ(ëFg#`P¸rK9*„È‡v5i»\nú9Ä;,ÈéÐEðÞåï‚ àâ;¡†=ŽyfûEˆbüìâ`Ë!yqKÏE1cqKg&M‘eˆc¯TñãîpôóbçÏ”—1”Í»°OºmŽ:Ãâ>.±]\n¬ÚlCð£ìR¦ñZäGQ²Ýq ÄÑÐÄ\$8UEqp¶å°•\n\$J~@ü«dm‘î.ÑÁ„§\0KIÆ‹šú@ïÄµð˜\rç²ô^ZFyñ)„.\$n²\"…R&VÑ´­.ï¬¾ˆêéH/€‚Ý¥¦‡²[e¢Hã5µÅõ	ï•#§Þäo˜í/¯gž\\Æ‘¤ ¬Ld‚\r€Vœ¤Î}LLb–é±ô0 ä¦b&-¶¤‡ä›`Ä#§˜\n ¨ÀZÖv#ƒj¥§ólöÒ#C#y--M øäX™g„f  å‚cgÜè‹öÂª+š%ªëIü1ãÔ?cú·¬X1l^J3Ùhå'²¤#É´aâ÷N¶1fn\$£(…Bd£’Ê:`™4Lüjãn2L@i\\EŒ¼û/ÚÇì0ÐÄä#d\\O6-¢>¬\\ïG6ë°ûDî¹(Q7ãy8/^n±ê SŽ1SrºëV4Òe+g´“£Ø&Ëæzó‚F0t^FJX«Ës9ÌSBïÆˆèjsSK=\0ènêíîî wø!F'*ä6µä^¦¨®?¦:/CøƒÞ¶¢ì[óêƒ  9L7Å)ˆ\\tmÜô«2È\"‡BS|JÎ8¤ãñX\r\$6	fJ ƒ-(`DBX„ô	\0@š	 t\n`¦";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¯ÀÊ:4ƒÐÆ2¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡ÂÒžŽM0)¦¦)Jã(Þ6ÂcÓ\nc(ô\r±(¦<¨Ñ\0ÛŒ£’€9C,„6 B@Ë\rñkZÀ-°À ‹\r#C¤PŽmèç\n’°Âé/£„Ñ5\$Núx»¾(Ôì‹ÏôÓ@!\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Æò¨\\”ŒáxÆ9…êËö7M£xÜ„KðÂ9ð\"/ŒQXÜ5„Aò`8'r Ý¿aà^0‡ÁˆØ °@æ•ŠÑæã¢‹ø-\rïsÉ7ŠXÖ×©`P 7CkH77¨”ÔÔ\\W%ÌÒ·­›5Ž¨{Vê\"MÀ×£ @1/Ð~ßøEßØô¹ÇhÈê8£*D`P—!§ƒ¤òLB`	0ä2ØLX¬a—£Ñr&¡V·öµ£K<Â0ë]ÂøèÏ‘Œîd1hÝv¨5Œ2t4ŽÒ¢-O23z¶84dØDÔX‰0mûö<˜`‚5ç/Šç•\"a/:VM£	Ñ	».VßcÐ˜Œ£¶ÞÅ°C{ðø]×;{jÌ…ôç\\w.ü£åR”YhŽ‰ÌÑÄ\rTwÄ•/¹1ŒS(€\$-£	#j\$91b(ñÑäÃÏ½\"ísyÞ¼3ÁI£ÆÖ“Ì6[¯:ŒÏÃ2„7©Xž2P3ká·¨Ný”7\rù[zk˜A?Nó]š…\0õê?kò5%µoû‚Ts`Û392šù©ðÛèzH—©ë{´PÏeoº÷Ã«¿|OyègÌ‚óé6ö¼ÀÒóŸ›ÑOÇ\0¿†Üþ“Ëü4ÏýðÃc+Þ|ð%›4DQXt&‚õñ²xS\nAŽNù;|!˜”†ÓÆáxÏ!ý¿Òn|ƒ¤MDh;.e¡+jíÀ<Â#ìÞÙhASê„¥¿óXcß\nŒeÌH\" ¯Sú) µŒ²\nš_U¡¸Ÿ¢0äž‘[ÝOé¥÷Â›â9ó§ÕòD%Å\n^FeÈ¬ÑW¤ú+Ž¤<k”teRjUK©•6Ôì[x„©R*ePª‰äsV\nÉZ+`D®Ò¼Î…`2F2W*ÇY+,‰”Â ÷LUX´Œ¤¢(IÜqqÎ@®ðÜ\\Te®d^’BpN“Ø©%eä½ÍäŽú=/ô‡Ä`ÈQM{PDX_MÙÖ€dtg² @@P~pŠÒ-AP0žaÂ©×ÓQ'1²Ñ†.ˆ¢Aä6At|Ž\$/<d¼Î6[5ÉÜ+8fk¢k\rBÓ¹Äp€È#ê‚Wjô_Áª*¸>DŒzž h«‘\$TœÃKÞiô¥PÂ÷Kú5ð|£9Õvù›´ã?d­÷?OŠƒ:@'…0¨åËý(XIéð¸®Jõ*3¬¸‰½^€Upf\r!œ:œ1¡\rK#[í\"*Ó\0¬PPü,Pá0’’r¬K™BdpEICho¡¤Ø#IôoÕù)6(n¶=â8›Ò²U6À(!†ôËN‰5£%¬”š²z‰:}ÕÃSH¸“A\r<vœP£ œ™bj`aìæß»Hš˜aYk…«Š–²c	ÐbD¶Íj¹s¼xm¸œaÍ›’bIcIJõ}É~î›¸N˜d7[F,ˆ3A#Ió²L±IÌ&UÿE\"©©¡…Ï˜SÙzëpg±Õ¸üìðIIw*@¡wª+×ò™ÅÁ—ö’¡@isWÄªŠz—YÔX9Ïyó>×\$ýŸê¨]¨ùaxj%,ç6 )‘\\gÊø[z]Â£¯0h–¿”\"ˆQ‘Ù8„Ô¿˜°Ÿ‚èÎx÷ít^Ä¿{æ€svÒX–Ôªj\0zžŒ à4Û™²jEŒ…¢‡‹¦ßW\$Fùµ… È|ƒU¤~^gc¤ÑuNm§&Ö¤VœF&‘ƒ:µWO?œu»\\ôV‡5‡J6âcCOAØü#dEuŠ¦ü33vÀ†¨d&S ç\"ædêœs­Ý-eâv‹Y‰é¨aP*†\n½4\$ÇyZÓX\\	XC\r´ìÞrþ—«å}‚DöŠØA–}ñ@<í¬ØeUn’@Ä‘6šŽE8Ûa‘z=Û¥Em«Ÿx¶¤À]_~ãž\"%Q[ŽëÀuÝ×áïLåÏ_Wõ¼Ái7{î&ã¹wîéàC_r3ÁW:ç#L…\$Âç6Ì™•;ê* wr€­'!û‘ðú[¹·FÿÛï±‚rÝuË÷ìUæ[®(ížm8Üü_ð©Hj†÷k bGês-)p„î H±ò„êe)ë<E	H	ào%ajÏ¥T®½J§TÄdxpÊJ-ƒ•#v…p…0á\0C¢nAk]aeÓnYQí¶ëam8:JqfÙwI.†’ŒJR9ì8ž;¼›£ëv‹µ}ýÞoÃ»¶9qqùÞ,oñ™¯Ì+ÞÞúBtÞ…òû*œŸ›‚y—3JóóÔPßß¥»?¸ÈKïÚo‚JýËYöŽçÎ2<f®i^h–‡›ÈýmÙ;)ez\n¶3D‚’ä†¡RPÉ­Þ>ª¡±Ü\\AHŸê\r‹Ô\$VÖb‰saYŠ»¾*ücJ¿Æ(\0@Îb²íb\0Æ\0PÕKœ_`R!ë€LCf¾Ï>zàÈÊL#*OàÊ\rE„õŸLxŽ¯šöëéghø®4¬¸\nl¶âÂ4÷ÂsîÄrg\"r¯vè`uŽÂ*pfÝçÇç ìb'CÌO¤. ¢ø°’Mb<àmáÍæã«”á£å	ªë£~<¢s\nJŽâÏûÎÞ‡Iˆ	C	ð+\nLõ°©®24®6á-ê¹N>´‹Lµ¤Ð¡âÐ-JÙ0úÐpþ8‘ÿÀÝÏ¸Ð‘ÝðPÖ\"xìlî\ràÔ^âú7ë&#.â!°Bé¢fZ&!Z(ãö\rJDZ¥î…„Dº#Åý±ZT@\$Àà9±FšfP\$†Š®H\n¶0\rÌÚ7Ð,n,Æ¾\$ÇcNAÃŒ‘ËT¬ôýoXúKžLúyb.º«…Î'f¢Ž0¶Ñ#QPløÎ\\fƒO™‘Àb]'£CžÕIig>ËRÕi\rð ô#2ñãFp±¶Örèuƒz²\"É\0´,–3£Öbçˆb@–\"¡|ÕO´]«Î@L¢e£Êl„6Óð¹\rÐOÐ3\rÑËîŽÔjùp~Ål¹G\rJg(âÁ°Ú^§¢I(fÀ9Ò—\"‰­r“B=ñZ/Æ*I Ö(É%&P`Ž2º'‘E²'ÒÉ+ÒÏñõÍâMÄ\r-’¡'­dMòÊ@c\0001Õï~sïDqá.Ñ*]²â5Æ+*,\ríÒ«/±	dã1ÄQù\rÑS1ç(Ìª/Ó2J²'1sBKNF‘ó CtCMm2þ\\ã\r5„9p6-k6q%-/	\0Ð¡LÆ.2i¥Û###\$>pCÌ¢j*²P¨^æ²¨Yà9H«9…\\Ê0Î¥¬“”#S¬4sœz\rç;D¿`–#(\n<Ælè\\Jc¡:á2\"Zwä(Ä^!À¦‘‹>É¨S”zã´i\räãò\r­ï:”\0(CDàð¯@³¸¢k@4Ô\r0ôí’[ Øc¢(f¢|.Ø_1¦(‡º[äªfTBçÃ0äíH}‚lš‚H‰¤>iÎë&Z\n ¨ÀZW?ë2tEB®@î	H+6¶0Ï:t!\0gD³PEðÐápö\"	â\"¢.âé\0w&huÆÔ^³<2 ¬BþÙ`aâó	b8ÿÂüD>eêÜ˜BL?ô3ÍØÜ”Ô11 Âªœ_kXECP·Î®4#¨Mîž±ÂFºÉúÀ lìÈ¶{P®bo†ÿn	KÇ:-Ëúù3ŒHfèTÕSOØ{Âˆjé{\0Bÿ‘5ïÿTÏ§TC>ï#Æ(LÄë5aTñŒ]QÄÈ€òh%©hš^J´&TA†O¬\$o°(\"‡†„Èµª‘P\nÂtšLñä\"3º/&(Ã\" tõrZ\"<ý•z<À´@EºõòZs”ü=ƒASÌü»kËÂ4\rDnkäv‹´¼‡ 6¯Uu[ä©/&Ã\nCrêDFbx€";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%Î äÇ4{ŽÚ¦##°µ°8œ2Žƒ´\"5¸C*É\n-\0P˜§¦°8¦<ª(¦…<;²ÿK`ì7\"czD³ÁÂ#@ºŒ*<ä-pp …2(¸ÜÐ£ëT`!\0ÐžŒÁèD42ã€æáxï+…ÉÚµ¯+8Î©S\0ðšÈ0Þ7áè9.C¤œ/ŒI˜Ü5„Að’6£Í‚”:xÂ(c˜@âƒDd˜ACª€\nbŒ>š¤â³66£\$n\nÊz\nüŽ£Xè:ÀæÒ#°Ò2ŽàUER5)ð'-`‹¡£ @1V#(ÖÕÂj9Æ(ú,þ\nø%¬Ž\$†0§°8‚:¬aà1§¶S\"£0Â:ì¶Ž¯å\$SR€PŒŠÓÃLÎ¿ŠcÛe[C Üµ»‚štî\r²Î9¬ŒÒ~é·ý´6\$O¤<4Ël0¨¦§cF3¤@PÉƒsà•hØŽc\$èQÁh×dâƒ}TB®ÑƒeUTc#KK‘ÄuUåÈÀæ„² PžêÂˆ.p0ÁˆÅ¾¹ø(-2ðµ/ó¸á€Àâ*W§ŽL6vËc@Va™?‚žLØì,è%˜Œ\rã0Í‹*‘Ûj:ÁÂ ßH#Ê92Ž£ÆúŽc5¸H«Xæ&–ì0Œã\nÖä¨u´¶7Z(P9…)8ª38\"ÒÐˆb˜¤#«¥…¡_y¹JUlÛŽVRN&98@ð5cË:\$â ÐÉ%m²ÎŽ Ëˆ@ ŒœzÂs:‘ 2D•&IÊ\$ê2Líé>Ïï¾ùuHJb¸aÅÂìÐô½ƒ¾ð¼mzŒ±	:R¨Ye\rIeïâ©×Æt–¶RrP‰I*%d°–’àrÉy0&€Ê˜ÊRfM	©˜¦Ä(›Ó‹¼N­8¼-bösPÍß‰	Lù¡äé—³ÔëL’{{AÎ	R:Õ\r7-®Í³f)Yé\$åÀÄÀÈ©Z:ˆ…ÍÙ&îó	Á:2æl\0kp‰ø PQKÞ&–Šcöx‹“–sh¹8x`N9DŽ ß¾âTK	qŸYfx3åäQ{hE,ÜÞ³×J½Ý›èç÷–ò\"[)\r*Ø7ørê‰€hSDô8®ÈŽ±/x€¨RæÈú‹Pªh88†ÚJ]èP	áL*\$oƒ|ƒ\rrÜö@ÛÙ\r¬=‚™ò\"ÖÊa«(R\"(“²z{\nXiP/È7@Î¨²ë5¦8‚³\$Gñ ‰ÅÌœ;õiéva¥\$„`¨YO\r@ŒLY@’bê))Ejœ@ÈsEÀg2€)~5R½ÐNT(@‚-	\"„À‹D\ngHR˜»¡í£ˆzb.\"Úwa„A„”ÑLsÂ0lV1ÅsS#˜_0j= )Ë¹“}-šD\$èÚ ”PP“ˆe<äéWp¦š•Fí\r5vzÖê¡üi½½‡3ÄsÂ²Ì•%3>°Ù\r,x˜¦r ¤ÜJu¤˜­\"Ô“‹„`¢6äÚrU²ü\rµÎ¾ºtzÃ©x\nad¬Üµ\n©w]¤=À†Yƒ‘Sk`áO#Y¾‡,þ;\"Øx¬ª¶TÊ¡L*uSd\rQ€\$D¬¿³CJXa	d•ˆ„Ñ†)Ku¶X„”3 Ôm§é| 	b€Îoîl¸¢âãŸ’ÒoÚ:@†)\rÀ´0^ÃšÜ¬Ë˜³™–„	bFŽ\$—úˆÐ*±¡Gx¿Ðð¨BHvƒŸS>id¬9†ì2pÊŒôÒu‡Ô8BÂä{¨ åY^ÃBUÚ¶1B˜Æ p–[U³pºmTð–á0®1€ƒŠULˆK¸8}Œâ(Xhq6(ÃX\\¡bÜ_Œbû)lw²R„h\"6#m¸VocPÉˆñÀKØddÜC“ñ¾%ÊDN0voxwX ÏÒ>HW5,ÌÓŠ1Uë~Ïg¼üŸ ¿…pÊ§É\n4²¾„¸Xm‰)Ð,aÂDº¼[›U\"¦ÛC±\$@YÈ=Š'E–_—â[KÀ\n¡´‹¿rSP¡'Ózv\\`Tj~£°œ¡<]Í‘™E/Vê\nŸl,–´ 7°ËkTk5)–©ÚøŸ\"ä`d±gÐLQfDt\"_Kýj¡¦¶”³À–a1Ú»GlíG¸ö5PÏÕS rálâíG×q™šÔýÎÃ£+‹\\I)UôŽ÷Õt­ËÅKÓèSa´¸RÝÙ¸±\0æS=Pê›Dßá½žE:Ÿ¿x”b×š„è3ö{­x'kÆÀ0ñòÅ6\"ãÚ{Ôühƒ¯A1{¥°éŽ°¶#xø4ã\rByŠ\\ßüÕªóŒTBH<çÕ<#\\™þ½ö âÓðØOë—ÔwZ¤é;«—2…Ê9.·•Òœ‰‡pÂ\"äçvx*î8•\0Ð,góô;BÛŒ Íèïqjƒ·ìo´Ñ¢”áDÈ°Fñl•z Œïy3Ì1¨»îWP?–úà4%]p¬UÄ¸ÙT7ö¥Åk¹1¢ÝšöÖªSW»\n‘õ{°u5_LíZ©	²½ïÿaí½Þì÷¼kÕñÏ‚}&†Áö,±Vy„/ŠJùèèüm“ ƒE*`¾e¹–	Ý{Võ)f\0®ƒÌûf¶/W§ôz®µúù—^äüW‚Ü/¼œö¯Ìf¸°ë7²'¦tâ¯î]*Üú#ª«‚øTø/e>j¥Œ:š<ÊþNöÄN\rp\$¨Ï•Ð\"‚0(å¢NþÂ#\0&±p2±EŒ÷ÏÕDâoèãìÞ#øú0h±KœºXù`©\"¢ßðA¯ð6þ¦Z4«¬¹âÿÐ|@à¨’kÖøL Epu®\n‰0°?Hâå*žb`æ3KÎýƒøàÒÏùâ’iœÅHÆ\r††.L#\0êº˜Ê¼Z\r†ÊèoŒŽÐîöÀ–XL\",fb-ÀƒÏ°0ÇÞD%64úé\0fÊÍì*Vb0éL€Ê‘,é+~Çî8cò\r€V\rcÄ\rlX·ãÊ‡Æ/¨PÉ64É¶Ì‰ÈÉ±T¶ê\n€ŒB ÎNdd^‚NÅ,xŒF‡\rPÊq„çB„*Iæ ÏXÃé¢ÅnöR‚0óÍfÿP\0/bfÛd7­,?£kÃ~¦-ÇX…/Üÿf\nÞŽöÜƒî¯J’cžÜë‹«e¥*.èEü#¼C@B‹ÖC(ÝN\0©Fz<æF Ío ƒÚ(\"©.mebà­p™D[\"àFF\rË!­!ìÛ²/ ²5\"Fzâ‚b2*¿ò\$.N;ë\\Xì .è#&4 `šÙ\$½íîbøÝâW'æ\"é©¤koÌ\$%Ø'!pËÂ;†w%bÚ)ëê-ŠeÀ¨§K¾©ZY ò0Êb¦o\"b‚æ«ˆ¦¥bF2<];pB<cà¡Ô(ÆAÂ.\r@";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½âÐÂ•=ê^ç pã\0<å ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÔ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Âï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3)„Að’6Ž|Žø‡xÂ*˜A#ŽÊ:\rísh‚\n2bHªM-Øë1³Qƒ”:C«z:º²“:¢½â²´;„ÒäKêþÛÚ¥%®ñÇƒ(ê†(SHæ‘Hz!) ÝwjZð'I%³¯5WNGbø7…¢L¦áß`P­H4rž”)Ë{&Ë„zb\$\0PŒò·£J@÷ˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®Q6H/ÏU ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç);uèZ%ßRÈ7æºK‡ÉãLÐÅÍr¥­¹NBsnÛû\n±¡SnÆ2úì02§ SRÕÉU8á2Â¨cÞ\"¼Ìá=öÓ¤í)&×­Ê”„)ìC‰=ãeí«H:ã0Ì6Q©˜‚1Hãb6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Á\0…\0 Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïww½ÿ‚áø|¯‹ãÞ•±aœ…z#w¦™ˆb˜¤\0T\ræ˜ò3“\"äŠ+æw†ÅÊ„dÊC©DËä®\"žÌHQ	€ŽyÐ\0È‰ãªuŒ|¯0¨h’š²ugUaÎdQ…ì9ÐÆHB	é>TüŠŠ¥ja¹‘3•Z«ÌùŠgœ9†@Â¸Öhb%„ø”ãZÊßD!/gðÝ¿¨<„	²&§¨9Ôä˜ÛÃÆ)Æî)Ÿ]Ì;Oa¡>§õ Ô*‡Q*-F‡%”‰RŠY‘©– ò TN)R·eTGËìˆêÀÐ\"ƒj>VÁ”Ö£7Šqƒ‘9d…<Ü«3ðBÌU>.ÈÄ²NdN¨P	@…2Z¥ÌÂ³XjÈÞ!WNVÈ9z&eåF‚\0ŠŽ‘Š!‡øÒœNœá[2“S¨SŒ‰œ~²ÊZLy’u&aDÆ¢žGÃ”(tdÎUx…Id0‹Îˆ2°Ý\nÉÊcf\"9RrMÞœ!'Å\0ƒn‹ÉÜ:Ñ|ê¡Eª/ørCÑô'uÐa\r\"T0®Gi’Êîƒcï<Jé«b„vÃ5ÈK\r¢×)æˆ¿Åf”JŠÑJ4’TÙim2‰˜P	áL*Ö B„¥(Á¼¥;“SÃÓ€¤00ƒrŽRJX \rðé-È\n¯Nr®ŒQôêƒ<:jÜ¢¬ÆD†œ¡\re 72GòAª]:W2£5A(\0F\n@Ð¼ò3Y)‰ÕÕŠ	lªëÆU\râ©0ŒÁ\"gÂñ1ò`kyŒ	á8P T¥ÊÒ@Š-ª^ŽJŽ-µ\"x©€û«FÒ’ÙúJ	áÂ}2ð@MÉí2a:SÕªknÄÖogÄù²öÚâŽ|î 3¬¸â wY•’H]RÀâUØ‰ëR,kÐ×aj0IÅß™ÔÄçS0á¥¤U8oƒ›rª¤„ÚÚY±JÅY˜ A7lÞ:s-œ«‚Î[„_‚á±Baf„oŽxV|ŒÜU²m¯V)è²tàRh+–u‹mò‚­™¸'ºRWÁÚ»„ÌšKøçé—áÝƒ-<N¶Ëx\n`FÊûe\"o³dl\0(*Ñ'|€PZu\0(aˆFÊÅ¬Åš26t†‹nS.Œx¸…LæK®nfùÀÈµˆ hƒ1Ô	16LrXŠîÒ„‘· ÞiŒ˜í_D›KÐ~Ÿ¢%¾.ùÚ¨BHÆ(3vpß°oBáÔ87âH,±)-ô5.@¦Óœý&&	)ø‚òÄüLºç3‹¼ì4ƒÚb×SÆõ’ÃÛ¡­Ø™t Õæc€	×4œƒlØ|dv†ÒØ«›c™Ý¬ïÜÒ˜„u¨ÙDÔØ¤éjHC[×Í·®áÜ„ãolôÌõ_Žõ»Ý‰½¸FpÊòÂ{;poüf÷òNRÛ”ƒölg[e~'»7k(ð©Zå(†¿S½Qñ3`ö9->¥\\ˆH¨¸‚Mzø‰Œ0¤š…£š´19fXd¹sW=÷§&Póp³o1ns„øÊ–Ú·‰Wƒ\0RÅçØ=nñõæ¾VîñØAéuÂ6þxa’¼î	nvçµuOsÅ»dËÙøwti=õÂ¸;Ïs9±\\ž	%Ã›B+9Q¬„öA˜`taÇ¾Þ![‹TrXó¦)‘žÿn¥‰‡óÌŒVeí”òÃÅ%žóå6xB¢ø9| €™pAM¸¶÷])ÊO;ÁãìI¦øwÓ_MR‘ñí7§âøJ%§>]ßú¿Ù­äyÜcgO}ö)öVgÜoÆëºoÃ~Åú»Ý[÷Rlà{Â–B¥ïømÜhÛáxÜ'äNÔÚ¢þÚíÒ&@ÿ- ÿŽúß®Ú0ØÃ6ÜÐÝàÍà³\"0Ích'où/¥@Û‚UÃ\0ÿ®üö‹,Í0:³?O\n0+Î\n%Æ0 ZF€@ÌC\0`àå:\r°P#¢>6\0Î-ãš\$\$Ò„˜\"5§Š‚Ä9í¬xÃ~èGòl&+.@±*¨úxJ¢+cHb…Ö+	\"B/lÕ\r€ØÌ'PSŒ ILÊÌïv¶ƒBÍìâ1…¤¥¨üŽþûÎÐÉ±	PD¼ñ¯g\$åE¦ý‡ÒbŠÑ1ÇO”&q0ñ5ÐX1®›O®ý±HÒ‘Nð\r%±5KüõCà#`	@ËË˜t_Î á¨@£P€ÑÐï‘#¢g÷ÏÖþO¿/ô˜¯¬¾KÎbä¦¸¬´[\0 ¾±rè±\\bÆ1d1‘¶\rì’è±Æ^ààñEd\nC\"`Öd/-\r–ÍH#€õOÊê/ÎK1îfñQƒ>±ÿ1EÅÇ ¿!QñËæ÷1×Æ}‚¾„Ð›o±#×ò%\"ä(¬ñkÌ„Ìî\\’þrM\$RQ1S’VÎƒ«#ÒN:±ÒFÅ1W\"šÓ¼:°CFK¤(¹òU'Ò‹ 26\"¤Â!`É‘—Š=à®\r\$\nY(ª]L¦¦pÕ¢ÀØ’»ÉnëÎ›,I†uÆ^~)œ¦lLêè#´Œm™ì\0;b2Kb¿å‡+€‚oãL'p.Û e\r€V	g9\"Fc\n;±ŠË‚¨r¤%\nEd\n ¨ÀZJ«d-	ÃÚn´3Tãn>ßòÉ„ÿ¢;5Fÿ1|êñCªñ‚NÖNL%Mv1öËcRÄ¯Jeêé”çDã\nÄ·B:Ð„¨7#a23~ªFx¯\\%²™BÜGÀô^À˜#D”“(é\0‚:°ãÞH…Î\r£¨ÐíÉç¼.Ê#¨¦.ê<¦–\$€R„Î÷†Ò!G€B#®ì# Ö\rààBÓý4\r>o‘(Bž\0Èwàá?³àms`«Kˆ'C#Q§n)‚;@£ÀC¯ òBö½ŒÅb–ÊÂ6^«•#„wFô+ËÐ30*I@¬?\0ê5âåC¥Äj'D¬ÆQ¶22¶50~I'ØIsì4“ðY Ý?`Êø&‹¤\n2Ï˜»\nºCTZ4ÍÀÊ¹æ¡AlG!Æ¬tƒ¦U&˜t®~%#ƒI'\0/b";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD ±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1t‰KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³18¯§¤‡iÓ×ú¯‡ƒ@4C(Ì„C@è:˜t…ã¾<# Ú4Ã(ä\rãÎŒ£vX<™hæ4ùpDƒT2Ž˜ ¾1\rƒÜ5„Að’6Ž`Ê6å£ xŒ!ð@Á`è4\rã&p7„¨æ2„˜¢&\r9‹~É.EÚÌ_<‰rFÇ[·ÂT\nãêŸ¾»T™{n7:ø¾RQ9B(R¼ø§Ðô‹oè«ç\nðh\\9/ðu²N¬Ñ2z‡9óQŸ,ºA.´19ˆÑ&bá¹\rÓ´ûçiZ“‚kµ.MNÈ¿ëÕJ¶!•\\7Én›´O´¤hrž¨§šƒ:HÑ×¾²]›#¨LŒV”7¶”²\\xÖúõ	À¥³ïRøŒ’vª¢j–º8k•ó'øs1M7R“š5µMŒ3„â4¤AA›ÃìòÒ‰9EÔ®ã²ÜÓ;¯?Q9‚ò¥N£…zdàV+óØ¾È\$}I°¶2AW)ryP@™!T€ƒÞ!†nÎÈ?V¼‰\n†n=94AJ:\r[±Æ,®}ŸÓÛ=ñÄ7²ítB.pàJVêâ™eD°-ñ%cØõ¡	Ã‹ÇE*DwröŠ’¶pÈÌÝÁd¼×±=n•æ/¥ù_Çz‘6@äH‘Õ!ip‚ø¯ÏùDøœ0\$w]Ùó ²28Ã€VIÚuñ#E&MéY9‹H,ópáÈ©RˆZ½ÙÂ˜Ã@±·SJÁ”CmÑˆ”ŠÃ¯!š£¯”&°\0—¥&	J´mRq¹Jâè%®”§XÔ¸	Tdåaö•ÅRJHä\"E¥£|AÒáhYy%ù	˜-ªaqXaRÊ†\"GÅ\"?¤þJIhC\naH#G¨~Èb]OnýÏ“B¸¶	4ç2h!ÀU‹#I/&IíX\$Ù£)\n:.)AP44 ÖÁ\0fe-u™†àÎ\"dŒšZ6jÌÃ#&5‡±&ŒEŒÔ0‡FHÚ{Q0¢]PöÞuK™Q™rì„KGÔ•Ü²\\KÕXM’E(Tï\$\"adRI‹\"ìSïúeØ{uKÎš1\$Å³cLqvAJ™+'e,­–²öb™›5ìÝœ³¶z™ûAhm£DV©rT‡î µ'±õn\rN\$J{‹Ü#\$¨:z(/\$)/íœ>Ld9ºFÆ<â+ }¢;Ì`îL×Ê’«êòC*•9Ã˜#‰!…6fÖSi.HÖ“?*)u—Bž­‘b@*…[Ò!!S“þÅ}M­-t=Ó»@\$\0@\n)mÇ€¤9TŒ¯‰Yi;…åƒvÎARÉ+mRt¹’\$JÚ'+¼|ïøX˜QJdŽá.îI>â´•ç”era¿BÄED+ÀUE•öÆ¸ä³àüpM&6à*¦‹)Ã²s\09 ‚mQ\0%\rª‰Èl`k	ˆYä#¢hZM2\r(¯° Ðj(igbÏ§ó\$Ê¢[Q(1Ø5º8§_/£ŒâÀ…ì(ð¦#„O&¯) BVUŠxLxzØr‰Œ_>mT¨&£ìir±m_Ï	ñ!ÅHó\"‰æŠòtJIé?Q›[¤L”tmF Ê–øJ0©T €#KÝTR6Ž}’ñAØ.²:€(M¹mÀ8´´q¿©†'=æ4‰”K’¾€*—ÆƒO™­Õ&S’b˜«Äê7Ë9gl´d%öVÌ;8gTE‚&U8ÎFB‡p¿}°3—\"÷´2Ì¸‹º[ŽoM7X¨,´¥¢ j9OOM•#¸´¢¼©BÈ4Ò¡Â»y-¦÷€Q5ÆÇ	p¥EeF·žMñŸ¸iºáîOˆÈ®'i	˜‰GØgè¸c<cGŠ†OÚþW­£ºIeZ!ázÙå¯*-²Šr¸Ë±\r9›Ÿm<¥ÇÕò±8ÉÍ/N.\\Nî ûþêãÙrAÎ:\nA•¤†ÇOY n#6t¨šVàäÕœÔ\$Q¢~Êdyk½—¸ÁGzŒÀ8–m§QEºÍ–åQv7ìnÁ²`²GkJ\0áj#¾†vB»÷—›P¼7ß9Ê0¯K%E·Ì’ÂZÜ¢y”Ò©KÖzŠ‚M`N8ñ›ÄµˆØ·¬»âLE^¤¢è½×d6àÝàô;‘B´Œþƒx	ïá¤=ø^Îï÷ž!ãEÈ–`±‘~‰´g}Ö5)ÿ,‹:ÇÔ!p¿ƒaòeùôOÑ¥ƒVV7X^\$ˆ¨àˆu9„!e°ß -§@\$\rÈB7O|ÜG’@Gæ÷FÞ^ï:ˆÎ€‰(Ò.eÐÏ%J@‚\n€¨ †	\0@ êdÀÒª@gFÀ\rÀÞ‚< àRf È0¥¨K-4=¬0I¢ÚKï·\0'Pà@#&´½B¸‡O¥;MêZE8…sâæP£ÈçE¬CLå¡4œ)B*bÚÑk¤¼°uŒ\"‰Þ˜ÐžEP¢õ°¦‘FmKöÏcy!l4(°Àêé4æÆ§	DŽµªÖJƒÀRk¤RÃ²åò(HHÎ°¨ 	Øœ¢Q¢­\rP}\r‚öuÑÍëPæÐ´˜­˜sB‹¬Šâq1°ßpä™ðèMtº*”ÿ%LMâ\"§üòî=	qFéÍÂDG8êM)¦Ä\n¶”¤Œ…«héGNé4-\"úÉ)ž,Ì&üìŒÓ¬Ö¹\$|»OÂ¦â[ë~GÑ!‚†˜-bæ­p\0î Äq`ÿçC,%ÀÑ¸2L¬5®°@kzƒ,T,\0›‚0sBÀsñ¢%Ì>±H¢œµ%\$ëA^‰È ,0¸Å~ŽªBÌX|QpZKž8KjébòVÂ¾K¨>UÉs„¯!ö¿“Òæ¢¨r[&dXt\r‘(BÒl²q¯A&	‚;\"?Ž-+ü\$>opE…&Nd2ŽhCY*\n÷#p+g\0‡‹\"Bò™++G++†ÜŒÎ‚Ed,cx0­áB³*%²VbÜ“'¢à#ë§so¸¼ÅŽˆŠ)…fþ1–>¨|`é2Øm˜)è¤Ç¥³.1ƒ0ˆšý )†ê‘<µîð÷ƒÈãÒ½0ïY-°ö™ètvBÔ¾e…gZBé–½âÊà‚Ô'øJ(òÛÎ_d­&’¯-å\\ŽrYQ\\¢ŸRƒ(sr1ÒÕÄ—(ÈÛ®ˆÈrÉ²¿0ãí4“Ž}å\$‰“Òu*ÓK(S´DQ3•¨Ñ9²Ý&óÆôó*´3Bø*²S7ÈCñLÊˆ†cü’÷°­Š›ð¾\$spý)Íöpú¶I@á\nãyŒ@¢{@ðù‘u\$,’H×¤·BÈÊÀ1Á_;Ò«&³Ÿ\r-vûPÙD¾ôQ:“E>rÅ<4>û…Dd£FcíF¥í9sÓG3³3r\0·ïþ‚Ê+/”ÎÍPÉ\$ôù¯L•¸Î^ÑÍêùÄBÈ,nËHÉ³PêJË\\Õ#ß±­3‚º(*Ç+„Ý‰6Ç4©D²¶	Ì@ÆôCFrÎ®ðŽlÆ×O²-´|,t€Ø%Zñ2·*BLùƒ[K…¤ÙfÔÇˆÈLèf//ÙN\rÚ–RXš¯hËÌ­>/£,3±9óöâ'o4¡*E“íU/aTRÓ=K=Ttçå½-p.ÍõgU†üÙ‚á²­TUUó{=•„\$È¶ÈD^m>Q™Tóí	õš!Õ‹Z‡VÎ…Z•”ˆw:ÓàÕ¯ÌœòEH•nèbÏYÐþAœ«‚þ+ƒ†TÅœAµêº¨;ÎªPäV‹GU‰l‚CTÂ“t·äâ?5?AÂ«Bu;õaYTè0OI,¯>¶\$!Vb´µ<õw9”EµÂ¶õÆ\$Í€ˆ•ÖEÓd¯‚ãs¼]ÄY\$ò¥WH‘H«°YÒ{6Wf°)d6p.refCe’DÁÀÃŠ\nÎ»+¥ªvrX.•*“M62*3hD«b“<S¡jI6õb%jäMdo]u½k¼ÀV¿j¶ÂèmíT¶3=v¹\\«dÏ„Ñö¦™NƒlP!]N„»Ô©vØ-Ö,¢gLiaôWkr³pç*pØŒöÍcVçeÈkf>d§göËoãÞ+wspžÒÄ…<Ö³qusYfä?°s÷-Zw)GwWt¶±oÒÙv/¡cN¶ßu¬zù÷9rW= Õæþ-xWP/Õ²ˆ²ž\\äÈZ×UÓyu7Ÿ,gMößcénR³zÒ¼§r5yWŽ¬ñ¶€sGr\rb“üË¬X&DàKè(†.þ›LãgÞV2, t'púæ•h¢U™“-ÑW€0é.…€‡ºSöû·.x”8D,¼='j2Ò@­@	 ÂfbB<g èkÀ\nf‚ÆÁ„Š{…IÌ91VFµ(’^t@¹ãµ†´5‘N*RŠK-þŠÃí\$öhü\r€V`ØëÀÖ\$ø³ó1Õ˜O¶,“C!bó¬²Cò<—d×‘çJ¢¹JäH´ÃÄ:]¬ÿ\\Vî\n ¨ÀZ””Ã&Õ’’-Ò˜˜´9ð›‚ó)R€IoTù?Ó9ƒzooÚß„IrÌÅ·sŽôa RE¥²I€dZ‚2áïë4iËJI&–[D\\E8”dL.\"æÕX¼¶øÀ;öûxºµMr_‘SLÅD2ê\\\$ï\0oŒÒY™\n\rPÏàÉn\$Ðs%LoP0\$„RW%/LÖk²\"¯ý?(òå¥C.u›lá#EÞ5/¶æÎXCç(©8RvÞ¢)=bwùË‘„‚“èDyöµ4¹ó)Ùàç2Î¼×Y‘’®™Â~'ª*i—GÏoœ÷CÄ/UW\nÕ&|§ÎÈ–\r›âŽ¨?Nô”ùøZ-ðNB/\rñ6Oì^µ_ìáziq/w\rÅM¦Ù³KBí¶¥²y3E2¿-çƒï0Á%\rå#8*L×îÓD„TÊ¸óbÝx|ü9žAy¢Ë±k}B²z,Ôî³\0xö?9¨uó_ª¤Š®žë­“ïóˆ¯ER–×oe™SôË\"Úœˆº!5A`z™­’@nE\$NÚÞQR\"X";break;case"es":$f="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&BÂ ¿@P¨4£HÂ‚Â¬Îr0’%/Àæä@ˆšÔ6Œ¬¸#©köàpÂO4J)9MàÊõ£ äa•±˜™¤Ã˜ÀŽ‹ú1/Éú×I20§´®svöÄŽx†âGÒjsˆRkù'5èØ&\rëˆÜê·ÉC†âŽRñc‡ØÐÆÁèD4ƒ à9‡Ax^;Ðt&6¬ñH\\·ázóG8âáö“µ¤ô/¯£pÖÂJFÅ(xŒ!ð@¤@éŒTD\nbŒ†¼&B´Ü<ƒÓ7ÀCK#£rë’Ë£è„ÆlÂ°éCJ€Ù¬Ã7í¤f'£*‹2±óžÖ#ò¼7 As/4¶6£l+£@T·R¤Ë{ž\$Ã|\"£ë\$§…ŒáB ÊùŽ£`èË»b2Ì@ŒüŒp Ü‹±,[^Î#Œ˜eœÖç9©\r‰ã”(Ä(#˜Æ¼°oË3¼¯Ð´\r6]bþ¯‹ž Œy&Má©¨ÂeL<×{Œ.j+Z‰€PÛbÎ-Ü˜X–}°”L/¼Ÿ2ÈÖu¯h¨Ãºõˆlc~‹íC+Ö€n)¼ÇuÌ[¢\n\r#LƒÀ’5D’_)˜ñÂ1hËléoø&lS&÷ºmq›)\"EXsvÍ3‰:@7ŒÃ3ÉÂ1N²‚¢ãNK5Šƒzw¨¸/ÌG¢¢ã˜Í†¿ÓJÎ9…‹ØäàŒ#8Â³»5]cD\rØÊaJeÖl†)ŠB3²; o#œµº6b)Z,74­øØ¿›\$Æ•ËpÛ†¤ð\"e)£[ä¹W°›÷7„RO’KÏ3ÊxŒ>ÒP}Ž˜ !‘ä\"—z›ÈáA%	ÔÎ§„ôR(5çMSª—æê_±‡‹%ý;Ô@|É‚Ç_Ätý¢3„Íwy+x˜¤rü^	@p/ÁÌ;–åbU€i1‘îADîÂÓÒ|OÊA(@î¡ b‰J,9(ÕU“Rª^*£Õ6§Tú¡TmÈðÁÕT«r°VDÝè’I7cg™0 Ädˆºù3­,Ó3×ôFù ÊM™ƒgŽX/2‰3ò~Ïì@2- \rî ×€PRIF DÁ‡24Yša2KÄŠ‡^EC0IÅ	Ú2*YÎr1‹(0”°ðÌÌ®?Ïí¨œc\\ñÉé\"’€Ã’7Ñ’ˆ˜ÄmîQ\n‹_€ ’DCÉ›?‹&AŽi±AæL2·|ˆPmQE’…^d¥‰\$\n¾uÃ£PL‚€O\naQô’dÆMÈâ\"¦-¨”¸Ž!z0è„›‚t\nñfÓqË³ŒøOêo0¤!8´bõ7\\áÂj'à8>t&øƒp\rQû‘ö OØF\n’f†’œIctð=N 9¦½¥‘‘AÈý\$c†é1‰	(!…@ªB`IA)U @‚xR\nUpº†ÐÄc½O^(TŠVjÐB' j¸…&sˆ\\Yð\n	áÁŒ TŒbŒ¡ˆ05•Ë¨X±,#K!¨ç“CÊ~Ûa–tôK‚ÝG¥ê4I¨iÉ>€ÊyDƒä}¢±£d›ºPLÎ*Ó·›:‘’ÔnáÀ…39l‘‚³ñq¬p€e†Ž)jØ8ÇdRýY2«P)ñ%×°*lå‘H\rûW	1r«±¨¡GõðuvÀf1ŒÉÄ†ú êš8Tq¥øèôÍ×¸pyGBÏ¢Òð1Q¹²ÎöÚ†¡4×¢šp¯NU7¡Þâ¤Dgz‹ìÞ9¦Ž6e oË;#cŒ´¸–K9ÏÂÍ}ŽØÝ,¤LFaÃ¤â•˜å€1¤¢RâênÂ(nª‚hG&ltšÂFa÷&VùmNQå<)˜\"šŠ™‚#d^Í¸”JµôbB T!\$â[ÍKžœ¡¾sšÇrŠ\\º›\$¨2†¤ZÀÕùÄDl9® ^VWS—2Á½t«ô¸—vra´6æû|]îypì•†kíBp	KgkA ÜÜó®Ñ9ûEè\r£Ðñ21æ¥‘Úm¡tÄz,Å µ£‡žÙ\rV3¡1˜Zsf—Ó/îËèù·¤WV´/:ÚAk‚-®´9—6c_“=bÒ2a¼;¸*šÚûÚá†“7}³g™ž#Ñ÷CÇR.NÚU-Æ\$§B€Ê’¢Â>!Ü2†+°vy(;´¨7ÂNÛõq~Ýä[5³ÅID¶?óo‚«Æ‚BDd¥½„[mŽZÙ0I™p9‚§h–±ãº1«µèE\ryâUŽíÛèk„ù)¿F¹çÞµZµ°¿4BÜÙ8¾u[k=“æ+i«fM×n_=ã4g)ÇB™«‰%0Öšî¾¢ÁäªFè¼u~¦êî)s-Ìq~a¢1·^AWÚ…!Ž0›3d+Áy°PùÙã>5— Ù§#e*W ?\\êÔ7§Ðc\n•nDËÂÚó„Û¼%®ðß“x²fÛª\rðZCËùŸÏ¡­ünÜ•³ùÀ™Âï.”Î›CBW;	\nÓòñíé-êõF»Ó~Ãv}í&¥H3ä‚¥Ÿ®ehyÐCÅýúNsf~WÃÅ?žù`˜€+Wuº%»—£‚ÌN1¢(1Ü½·Ö«P{W/}¹Þþ?ˆ]âø/]Ã\r>4|H\$—Ù©¿Ÿðb€D,þöDðE-†§œLhî2ˆþ\"l¦'ü\rÄ\"ùe\"E%ææÄžÄØÄe¢Ä¬f»ŽèB¥t¶Oœ[u-ópJÁÏ>òËXZL&lœI/Žéâ—\"vçHô0mmcC~É¬–Êg%€Éì\$êcžÂÎ^Çô1\"TÕêZG£~ŽDE,Ž\ré€ÉLŸo†¦û’Q–òJÖ0¿0Åo«°pm._«ÐMp|‡,0pÒI0„7çoÁ£Gì<Œ^Žb.’nàì{âL¾1\0¯4æk2Jqöò\"Íñž0Ú;±1òá1>ØŽÚ#P¸ó‘	Œ©ìíÑBýeêÅ‰Lßä­ícLm°FäèêÅ±h>0×o*%qãvÆG…‘|ÅíÖBæä^°‹¬@‘l†±§ï*Ö1¯Bd	ü\r\0\nF.FB_®˜<âFÉ#v]Ki	lLe‚ö±ØÉoòÞC0ùCˆ1Ô2D’\$ÂèaPªàÈnE\"\n\$Å–JLPZ’ÖBRŒ¶/~åÍ€‡åHÉo|Ô‚d|\r€V–#“N‚D1>,l\"Î2GÎ&P”¦ÇÞðx€ª\n€Œ p|c†0bÐ&Mö)nÛqäÓ’|#D“‚Ôd>#mLÞH¯« £ŽˆÂÀó+>ÛŽ²è±†=ƒŒ<†fD\"òÇfîÉ-»\$æÜ\$Ü*Ìp*\0 dÔFbÔaÂ~®Ä&:räxîÆ §,\"í+\0ð #ððúãf½b0€b\nÞF!*ËD¾Žn4¤R8‰‡0\"ú3`û	7\0Âüæ³#Ó.çf™0o¤Žã\$“cŒQÞˆ“8’C‚ZdŠFƒìmT©Bô[FÊèÃvgjð¦~µêìï3pnïèÂ.‡Jú?Â:1’©(nÂÓâ¯@á4kÜ1\0‚?RÌd\"F!D˜7k€ßãvâÊpàÀÞ±*0K¦ðïó^±¬Kh‚1\$[±(¯ãP9¤fÇ\$Bjæ\0;&F¡N 	\0t	 š@¦\n`";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj*@(Ò2<ªß,…â<1A`Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nˆ(\\‚ÿ )0Þ7´ñx§3qz-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€PxßÊ3¡Ð:ƒ€æáxïC…É#·ËHÎ¾”€ðÖ\rÉÐÞ7áM4ƒ¤ú/¶L`ÖÂHÚ8 ²Ü:xÂ?‚×\rè;N(ÉH¦(ÈÍbj+\$mã1®°³‚©7ì*Š5ªj\"Î&¯­û\$’¯ˆP+	\"(¯Z\n£~Ø¡¨å”:ÙŠÔHÃœJ4ŽCPÊˆ ïò¤„·Š2:,â³Æì®ò<8;²TÃEÀP‚óÈ6>*ˆúD@P‰=Œ#®2C`ëw»Ì’.õÙ”µ/\nÈÊ•	ã¢t2CEª•%ŒÓÜì[2žã# (\r7bÿ'7ÂT4cZŒ¸4qŽ#bÃe6Ù%#˜ÆÆ0àZ(;h7Xíä5Š°kR-u:\rÛ~Ÿ©£rÿn¯Á‡2I«å¼ŠÈw%›sÌìõÇr¨˜4”2É‰Ò+£ha’«]sTÉXä’B*sÇrÍp£iï&ßÀL¬ë¾Eú6=†Eì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍqJŽ£ÆÂc6,¼MPæ4Ã—t0ŒèËØ…?’óŒ¡@æ¶ƒ|(6Œ*˜@!ŠbäSØ•ÁL3IŒ-#o.Ý5ûƒÚ&^-Ž–£rzÂ¨Ð>nNA\0f-*ààÎ\nc%Éä5.Nˆ`r	ÜÌ'¤øŠB¤Š]îœÕZ«Í£À\r)<ö)vÜhÏYT|™âÇÖPß‚j1!”š“s\n	QhåÇ‚\0Ê‚ì Àº	§ˆ,ŸSúPjC‡u‰èrQ§eH)ˆ~¥²˜SFì­U>¨Cr£TªTŸEX«•H8«T4+SLgžâ&H• G¸OU\\!10‘pàLÑ\$ j¤ß±£ü^‰¨E*<½ Ò}!ß0	Q&`AHè¼OæŒŽuª÷J  \n (Hé }Œ*5)aÈŸàÖZSÓ!1Îl½“t÷	á-~fø†6àäˆÈñ0Ò\"QBÆžˆ[Ì%'ä’(L° \$¤Î°Ù ix OAÅÊÌ—ßt	QpH×@@Ã`o0sbK>SHMB€O\naP¹³Xîù=„l4“&¹¢!écG±Ù2é’úÜÚc½q.i!2•‰*\rÀ˜5¨¤Ñjg°ÔÎ™oÐ¤Wa2\0š&1?A\0F\n’•aÇ5NÌã™ñ›é\0ŠÉH¤Œ	z2%ÂÔäàQ\0“Ñk=ˆ˜<£ÂÈ)rà-á<'\0ª A\n”TÐˆB`EªhÁ}™t¶IÙÚ.)Í!‘Ê¾—Z#F\"Ë\0™•EÐuN\0¤;,’†sÎoæ	„%lÆº×vÜ	{ ®EÂ“\"ü\\Zc”\r¹¿¸j˜›„ŸPúH˜¶/Z /u°Ž9·º¹C VyÎ…¾Ê¡½«èv,óŽeãžX-)UPZšøRä@%VDÒ±y-,HÙG)CjO’!²à”ƒ\0šÉLé-…êæ‘`ªÆæJý©|¹–òãwP©K¼!¤\0àõ\$™f±çøxB›Ú&/x9¸G¹\r^ì•&A¦ñsBCº0X,ü¹@’cP\nm†ü…Âr±B\r€h„ç§ù^ŸÛ•‡]+Jœ‹Y~K×Ã;8'4b\n+(g4Éa²UˆÅ&%F¡P)ŽÂ(RG`^§ZéÃ³\rV\$‹¾Õ‚Îí9ƒ’+92<’œZ5¡X\"„à¨ÑåC®ZÑÔ°íjT!\$	¹%M+¨TŠš—{'ƒY€Î`Â‹zZËúõ\0¼/	´‚ËûX®G5ü?£vQž@m%ùaÙ¬ÿ\$ni{	x‘^r¨I®zDYEÉ?ˆBÇ43ªåé³•v>\$OÙ}D²\$AÝÕç…#sâ—Ã¹)„nL’PIY>»Ad¦¼’G°	E“p„‹X¥9%NV»¦»=±]]d)N£låÈô´¤>€®ÁF:´ˆÍþÛÛ­\$æ5]™Øu3&ã¢ZBPõï¬{\$—ègøÉ­×¡ïß~¿²§Àêì]ÑªjË,|J\rš@ø§pÛ+¨,ÅwÖ7}pØÅˆAø¶­>'ª-]J\\8¥“áÚ‚t«^OÇ5ågV‘&Ü” ZpDKŽ	ÙŽ‡RòøeQñ-ÖåÐ­úè%K¤æ´¹yó‹™¸ OyiÊ¸»†'Xà|àŠÿ«ˆ‚ˆ‚ÑJ2<	Ý?-8±ÈˆAßã\\Ÿ¶¦^ßÃäÊ‡¯R¾ê@{¿,¹]ÒÆ¦UÄçÛ¹ëeû‚?žÿ\\òËnþË÷.úm<BæòœCÁ—°§æJ'›8¥÷“i-g rN¬ô5a´.VÃ4N‹îdµi¢ü…­:Äs÷Ž3åéÇ¹ÃÔîžñäƒÈg¯ä~“X£…‡ð÷¼ù=gÎrâö›¨‘5'ó6%%Ù\0Ãy*÷>ã	ý«ôOeü/\"È'_y}×bÓ¿bvâã\0äÑÌA.œÓ£BÐ	êïÄ2OÈ'OÌ-Kîø/t§‚Î0\$þª”ÞªÞ]F0þ¬Z„j[´/Dä‚ù­Ž%%®[%¶ôO~âP:—°S/Då©\"úëBs§@[c\0ÉäÆszã-ÌœŒ n¯.´»Väð‹ðfó¨jZ\"+Ã	þdn @ç\nÇ0¦Ê ¨Ë&4Þ°¨þ< ’y¥Ð%ðÒßf®#y°ëF°É ÉO5	Cã­b´ÐöõBÔøÃÏFä±õ,–‚QŽNÁhd†„‹\\n`á…Ì,ì¸s„Œ1*·q: Q3qåšßîÂþÚ\$ƒ\0äà•Ð¢úÂkfÛHô°¦nixH§oåúBOá†ãoÞk±zm±Vˆ+@3ÑžÄAHÄ…ðF‘aîNÐQ¬h‡NoïÓÎðñp\\ºñHÆeð¤Þ¬_¬cñ¾X´50ÓqºF€PÆŒlÇt`ÄU	ðìAªî:q²ßMbJò7ð’únár=Ä³òï\"Ö Ä‚Ì‘ P	eÀÈÇq4o¤’mK{€Ø°ñµôOÄï©U#íL³‰²T²@P^°E[À–å Ü`.ÐÒ-º{¦Ö #X‚Cpàã\0\$C6n‰@\"ÀšöR\\!%Ú.­\"~QÜèås#Ü¨\0d†\r€V\rbf\\DN!¢–¤Ð®>\"æŽcØ\n ¨ÀZ|\rÈ\$¨&§-\"JhLôö ÂâkÀcö~ç8à­*j\r Ì)&D;‚þF2²çò¸90¸Šüä’º\$\"!'^¦\\\ri‚9Ð\nŽåÞLâHkSTNBÒ%#VgåŽ\\,L4Æ,p®¤³js\"7/”4ÂÊ]Î¸äòd”*”¡Qg­UÎa9&ã\0Þé+Â6‘³7Ï¨î2åâä\$03BR.iÍ:%ð\$ëû0EÂ ã¦ZkØe†!Ñ+\"@IšŒ‡\nŒÇº·æüX‰îìêÔên¾#“ühå€?É´(jÀ\nD¬te\0á<¥ö,ä’&OÞe`–Rä† ‚6èÅ‡6I58L59Jü5ËÇ”H<43:EÏ	zÀÊÌòì0Œ²7ÃcÄ“\0ã|©\$L-à	\0t	 š@¦\n`";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿c,×¡É‚vW<ê¢	41\"Èˆ=ÑYP¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë°/‚­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾ñ‚ÂÀE‹\nôˆ•±zhú^­ëF·c®Çi!²_\\ÊâÒ[Eðœ*“08zV•b¢Æ€âŒlNÉêXÆ¬iNŽ +L)Æ¬Âqªl|¦Å Š=òö¢%SßQXû½n¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÇ·cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e¶îfC ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀïzDF(X+úA&ÄgrmJý‰[{^\$c’ËÞ’º³úÎ°A{Lûh÷ZØ|)?‘çÊùÛáNE´¾õÈüNH\naL)ežÕø ‡±£À§JCt,-Á>¦Â.I“c‚,½xÕI*Þ8¢°’¢·ÐZ€PT\r\nÜ5‡0@”òÑUˆ0¦ƒ,U*€È¦ÁƒPªD‚\"†®ƒ\"ª!Ðð†uˆ±ŠÚEh´\$€¹\\?D-ðòUáK§MœTJl[ÃÍK¤î˜ƒ!ˆ87ˆ4Ú\"xBž—±C\$¦v(¨E¢RŒQÊAI)@î¥¢8nSjuOªFU*§U*­VªðÎ¬Ušµ‡Šé““·/	1‹ëÑ;5Öðž:\\…@ UÐTà‹'nmƒt\n÷<c!Ç©z¢sRMaP'	ÌÌC‰„”X”Lm£v|€Û!K:ÌdF6‚Ñk÷\n (FTW1dÆ|\r;‚\0PPÁL-,&®m@÷’û’zÛM°tÜ ¤+£™ i˜å@’RÊi\$G¨ép“2²ƒ_¹qöA·g=!n@2*]Ng:Ç`(‡‚!\$ÞA\0d\r+87ðèFÕÎYa¦(pâC(s¦á˜9ðÛdÌPYpd1†ÀÞ´Õhh§€€8OCL“\0NÎÍ2®ˆþÛŠ%ƒè £U™w!)cÉÝ\r–HÐq™hY•õJ×&RËI'A §•Æ8à«cÌ9FÅ!¼‰æÌ•mCåxœ-`™YhA^`1SN™ÞÈF\n“¶94&Ç\rDmþE¤yæCSéadÅ…Ð/»SI>JÆzšë\"ÌH&| ('„à@B€D!P\"ÛË|(L·¦&ÎÅZ\\ÛLS	2¦zŽú?ªW!Æ¤C£=Hè÷-ÃôGæ‘)vsÆ;›Îa\$'ŽŽHß®Ó–|®¤	rµžzÝ*ÊÛ’vQÑéÏ:¶›p†­Îgt·ïËéN—ñÌ/WYS“}Â‰àÅ’fqWé^¯m‹£¤•Ì˜¶=kø Ê¯ƒHc‹r¦Ñ\\J\$P:®lÊ•VQ<ÊI®ÈqèšÄÜ›Ë>Øè¡¶ùbçAîB†Ÿ(•ácBjEÏy›âBï•îeè^z9ŒãœY0ƒLân’8Â¹JôtHmQqçy–Ëi+©=¥]i›ËþÏuï>Û6ˆTY£>1Ây£vh)1T,¯Ø¼Ëj™m½×0•+éŒp¢gš‡á£H\nÎ ^tˆÓ9žDM-ž‰óËxÕ.ÈN,Þ¸aP „0)ú›\r5*õ©Mi¸s¡À8)åLQƒ4è=õ\$ÂÂ)­\0¼¶@ByeØK4Î7k[Bmm”†Ð‡on:\$…11ÚLqØå%+¹Ó3÷%{¦¸O´ü“ÍsÍ€›—l&}ÑIwYøß\r¨œ&©2öüsÓ°‘9’ó‘l^zâ„¹O=âSŠäÑ8•Ž=ÛP›äQûDO2r{UÂ´xËîè>l™­)Ù¶»LŽ¿²k©AµÚz½È#÷aC÷›Jb-àí¿âš×âþ ”øó~61\nZ=V¤©È·<°_‡Ýc©U¨gØNS®k/{ªöŒðÓÎŽè=_µr7WEiÍêl×rÂÌ’ú\"½=È²’hÊòqƒII=ãÂâhïŒÎ8¡ê÷²Uâ´?ƒ†÷aãhB—Ÿ·ëÐPÚ€çV&o±Ï¬9Ïk²MÁOzKxGá¾¨»ûÍÒÃéóë'Ö68ù\$tXØá§iW;¹üíÞÓã`~ã W·yvÎ`žÝôÜ‡¨8?+éK÷nn4Mú=\\Z”‚J}ë—¥•¼ok;ô|7>Ëµ§D{@	Õ¥ö®”bþ(lþn\"dÇ4%oðï-*q(d4d\núÐ,:D°,CRéíÐKl˜ï’q.®ùÂ%C,:Šâü¤JJ¦ ¶i˜K'6ÁlªE¯, \nö(2Òèf=Îê'¬?­Ä¤;KÀÒFæ¹æº(ïÃïsîƒÎ~”ÂÎðêð¤ùP c¯ÔÐìöî¬Á«RÖ0­ÎçÐ´ï«É­Gç˜\\-jûg\r‡h_€@ÎŽ•Ë¢IÄDOI\nDÞ?a°	–ä+à«¾ÿi	ÐÈþu\rOG±pð§\r/Dú'Ñ0’è\"äÑÄnºL+¤K#×\rì.˜<K¯+lœ³ÈìÁËÄÉF(1.oˆõµïÈ]ñ6pPŸ£‘Lï…P¸ùeÈôñ(û‘è2f)âÍKpÔGÔípêíBÓožüF=KBš‘s§›­l\$ó‘D÷ñ¬q¦šHf–ÖÚ?€×\nòú«ï§›ÎqÅìšŽdÈ×(=o¤¾BIGäYŽ¸sqâFKrá‡ÚJÜ–£î€ÚÄ\$žþÃæÏ®Djc8(,Ž²ÆØM/æ¾ÎÛ#c~5àš*„Š\n„‹e¤@¦VÀìZ’j’nÛÎ²_ïí\0ÈÝmÂxNË(bC\0î®¬iÆ<Fîr5/®@Æ€ä\r€V©¬b\rdÆžI¬ðâNeC`ª\n€Œ p™ƒx‚-Ú·+Và/ó./êŽ£0ùo4RÁÄ(†LÉ\"s†*Ôfd\0ÀŒQ\r ™ â•°•)Ð+ÏPxêâd±?B®­ 'K01i0øCjLæÔ¢L¾8Ž6¤í²³¤æ´%i%i¢âª˜géðö,åÖunÞ_PTLËdMIs‚&ó†¼Â=oœÌ³ï“„AÒ¾ÇîÂô³¥9S©õ;s8kä7çg8ì;ó¨­Ð®&Óhc‚gcV@³ŸðrÐîþMï^Mi>ó.óÂmI^6‹¸s“Q\0mº“\"qQ:mâ<I`{Œ¥&žãCŠ-\"è1j& JÜ¥Ö%0½Óš½2N@aR÷l\$¿oŽN­7CËÐm\$™:Ô:pÕä„ÁÊôÎ‘Þ>Æ´…DyÃ8";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ‰«›Š4¾Csæô=MAHÉ§‹@ò84àPœ:¦C”&(4¯Pæß„>ÄIÛR\rË¸+AÈ #Œ£zd:'L@˜: C¢_	‰K`äý£IxÚÇ\n	b\\˜/sÖöC	ˆÒ›%ƒÛ¢ˆ²6Ã\rÎSË#¶ ê		cdžÈæ<µÃXÓ24C¬b»±â:4C(Ì„CB€8aÐ^ŽôH\\“¹ˆä\rãÎ®ô ñ!\rÏú˜„M}\$PøÄ“\rÃXD	#hà€¦SxŒ!óíÇc@Þ2(h(êí„˜¢ÅHI¨¬–4õâPÄ	Ð«\\î´pÁ´HèÜ¶\rcÌ–ì­¶‚R×¶,@«]¯rô€†×	Hì:!-Ê0Üì@¦„-(<ÃpãÑUª è-tÃ¨²xëÄÀR\0Wh@ì7Æv èíB4ì5¨˜‚3ŒóèÏ€\r0œÒ2L3?9%ŽP˜ý4ò·9£*Jâ“ôÜ¯ò‰64éÂ&*\$Ul82dZ‚¯‹ö¶Cƒ[Õ0Êõð˜ —Îv0ë;u.[Hêˆ)Ãªë!ŒƒÇÌ&Äï7ö»¯ìl@žÏ´:ö*0šdf‹nÑþˆØ/Ë>Õ0L[@ƒ§ø€Ù`Èè¥ŒÃ4 2…ª\"M6s\0:ÌÁúŒ±#HÓ¯j™mŒ£‚Ø¦\rÎLìÑ[oû°¶T³Ÿ. ¹zt´#K`Y±)û:œhAut,»Dú®ò€ÙÀKÏ§¾tÅ'QÕ\rÝb;×5=ŒéÚ1cÏo7=Ú“ß¼×02øJmqF§¾ÄØùm˜­9*g¦‚0-eä¥ ð\\al'°ÅþhS@:eÜš…XÓ“ßDñë‘ êJˆhkÇøe\"æønà€ †E\\ÝØc)‡ý  @ž|OÊ\0§*r0mÙ¸gUêÄš„˜<˜H)\rÏå0º°èù’e(O\0™¿ Ü`’ÒB@µ¹6¼UŒÙ.æ¤“´‚à<8‡Iý@¨5\n¡ÔHwQp¸»(õ\"¤Ô¨eRåÝMå8§ƒ: J‰R*`|ÏÑˆjÈû£µnHÚf¨ Å³SþjoËPÿÄXŽFÊ\nr@¥asE°sa5/P4ÃŸ³v®ÎPM4ït¡¤‚€\0P	@üJÓø¥À()À¤Í‡ÒÒzBBÆ™J–îŸËû;n.»86Ì\n˜t&¡,»°îONc)(EÜ˜­sµÒ1®\$ý ‡˜ÒÑ[l(Ž+2jŒãŠ°) »ÖjÅ\"×“Ñ0Œ1m#¢Ž@ì9—Ó÷@(ÿ\\äÕçº\nNI\0P	áL*Õ:!t2’å¼c\\±ÚÒ*láÎyÙèGJs¼\rÁ˜4†rrHšc[@df4#2DâÉ2Ç\"Dá>“ÆœäJ)T)€€#@ ‰á†{H  «w·7Ïù@›ä¬–’òbKÉJÂ\"Çtà\"’W×Ù9Œq†ðœ¨P*V\r[Â E	º¥…˜h&û©9x#´`,W\nå]¯É¦f›uæ¨í“—e“\"®ƒ;0¬ÒY\"g…\0%Ö¸à#b%ä­\0·ö½%p<S( ¬&¯Ú_kÌ™³[–Ör‚‚\";h(4ybüJ	€nwÄ'JLÀc¥â˜’àä¦Ò³—2î^Ÿ©~vëZ³q\$	±Eêöf¢JŽÀ¶]’3Ó“¹=³æ¶Gè½Ñ³'ƒa“óDx-™ämÐËY\"ÓŸ:ôþ'X…¨µŒrÉ‹UkßfúCs@˜í°“¼4vÌ™‰M{†ŒHÖl”d4ÅÍ-VdT^y+1u£­ˆç±”)<	¸<É³T”ysdLÁŸ6ž9;C¦ä•¨\$@p\0PD8\r”‚Ì„¦[1\rt\n!„€@R:}ˆ¥>ØƒçPÃ…²I2V)¡1Óq/MÇar\0^3©‘\r+¥\\g£óˆl(ÔÁàÒùƒ~&uDâg¢vótàÐpv[è¡¶}\r&›G˜÷xÔõ\rR& µCnM^\"ÕÒZE¼ÝS SªÒ|Ê˜GosOÕ?#¹êR#€ªSÊjîL\$ê¼LŽ¦§rºV“Žÿ*âO«çNQ¾Ëi;‘š5\rûGc“2;a|[L\niÊLbPêIGÛ!Èâí½Œ”)ÕJ¼DßQ­³Ù…B‚nÄzÓf÷ÙòÊ5UœžoÙ¢¾ÂAÉÔfà´Êå¦¶N!ÆlìÏÚb‚úm‘ÉH.z+ñd&\r.¤`:t©qzbÁ'#ã¦äØÛfC©Qo†ÊQœ3EÌ9—-©eøùó,¬BVNˆù‘²uxÊ\nL-}„õ4H'¥k`Êk¦ÇÞƒ`ÂKBxc†S'Í_8]rKuéšZjð‚\0¡v\nP÷Bä¶üŽÔ¾2’^YQµÏN¥Ø)Ûb¬âÝÒQóËkàíGuz=‡¼žŒÝí§›xÃy/ÕŒ(št%š*srK©~l=Ö],4^™:+€œ‘æýpô/Óú¦ü³÷Åˆª^íËüoº;§µ·Rùµ´çßûÔÀÌ'‡\"“9PA>¯J^&€‘Íò‚@_Mô'¤)­6¤5ÚÓ¼û=«îóë÷ßÑX38{²¢ŠPîÏ’¶à®x”ìàÜwcØ=eèþGì¬ošàŒJnNfYçâGÃŒ´^L\$ÂˆÈù4çÐ&Â\rdM€ðð2 Nvú.|oLÂp46Œšv“:çÌ˜,œüŽÀæïðcoçÆÂ%0RÉì¨5ðz!EøÆr\"`˜Ûf\"ið0Âl.­|§æà¢Xv õî83p8ãO\nÌ•o’ìP¸ôPBç£¨Jbf*¸å¢“„\"êˆâ°HÐÐc£lÀá\r¤Ì£\$Äê#NÎ^À¦f¢\\S).÷ð´ðñ\rq¸C+Hø?ã]ÐhðæÂ;q Ò1ÐI?åæ^¢@ò6äþ\$*Ó°wñ8·±Ns ÒÇ/}.ðúLpEHRøï°GìfùèÐ\rba1pøÐ±d/\0‚EpQTB‰’½cUŽT›kÔËÉñ¯L®Bã].:M æ É\n¯BJàšNl7lþ<ÀØ1Ç‰â2}‰.ÂäùM\\Wè¸cþ\$°‘I¶Â˜j­RED: #	¨².b\$ÿ«\nbL%Ò\"8hM.–ïT·\$€ßè(24õ\r0x’<C¶ð@†G€ØcnPƒ`žn´ó'´^+†„\r”Ø*\0M&¼ ª\nˆ\0Z8en§ƒföãL–£æòLøõop5Êªör/ËRafr Æ!°&ÀêPGô_rˆ8¦ªJH,#Œ?vAã\\ù-œ?ÇØ/cX5Ê^2­6Lí8&F1\"NÊf½/MœÆë&\nPd&†–¨.çí˜{Hpê”bÐ-Cl²¦4IFýËA2N~qj– „8Á“&7Ñ\r°\\æs4@Àà(‡Dg3&qc|áð(å\$Ð'Ò¥¸/ËJ	 Þè­FÊ,¦gÜ\"nÈ˜|gFµÐ\$Ð«)âÚ³mÓN&\"D_ƒnÐ@ç:#rÝ‹JhDÈá“!Ó–sËA*ÄŠÍÐ´ëw!K>¤Eï3¦›C±š0ÆŠLîJ-E\$VK‚>";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT @£\nÜBpÞ6ŒLª:\"FÉCv\rK*KðÓB“82Œ#¨#²qÛ&±'	Ü\n#¢˜òç˜eCt\nhcS@Q ç ÇR¢¤µt\r\$5Ð¬*ìÌšÀAÒ+´Æ¦±´6û0#¤üí«T²Ö!Š\ní Pxž¨Ì„CCx8aÐ^Žõ\\0Œƒj œ¥Ã8^2Õ\\1V\$ŽÈ^'Ãä3·tÀ¾“#pÖÈøà“½ xŒ!ð@ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü)Š”2OÒ;m«R*º6'®xäÁÅ\"Å1Œr»\n´xPŠzÃ¤ñÊÈ2&62v*.2xÆ€HK„aXb:!ãdñHÅñŒOØ¨|Ž\$Ã6TØ¡¢:Gtã\0\nÊ<8«£#&üÁÓ&2át\nèˆÎÎs0>F3ÑO°¥œ\\É³Ó%‰\n_„˜eÈ*Jà™9ßÍoM±S IÛ²ÿåã êŸµ{Ÿ¾Â˜Ç^ªVŒ”]ªÏ&Œ¹Y†U A¬&/C¨íªº5c›-¾\0Uñy&)èÅ:î7\0Ý<•3ß&Cšm‚Œ1>F˜0ˆç7’s»pÑÎn;¯r7*ŽŠªï‚Â;a%È¢\"wuÏOW›»_½\\ì”õÓßMÎP2O…Lû¢Ñ¡ø¥\r	s^¾0©ÐˆÉ»žÓAêká¸ü,*‹`ZÏ²:ÜAb¼‘Œ#ËU8uÿ(¥5ì:Â0nn`¸µ@ÞùÓƒé|o±ð>÷âüÓ[ö5fü?§”8dË.\0Ä¸N‚ o\rj°0¦‚1í,¨¤T‚Š÷2¡¸ƒ?eÎVIpm3Ìym6s*A’X -M«â‰rÓ\$‡øJ©Ã“ò|\$¤•Õ&‘²˜*‹É(#ü±ÖI:L¤A¢0à’ÓÓòLè-ûgªÉÔ:ù+°R”¢‡ÖhoMä Ö’2PO[LgdgV+©PÊ¥ÔÊ›Sª}P‡uGÙØ.U*­V¶”2¬Uj´!ÊÝ\\‚%vºòÀXL’*Â£Ên¡µ+½”à³	43)À™C3ej½”Æ‰ÆÃV~ŽÙ©†ä%FD8r•zQe„±¸#¤LºôBÈŽK¨2@P#Ô8;åÄAT\"†˜¯˜ÀæHCq%9)ñCJe\0ÛÏ	™¤=G‡ôªÍ(„°:†×ÐŠIO9ä¤ÉÇÓ\$*at½†2ü:†uŠLòd\r+ÔÒASNjM\\}+ÐÐ7‡“&BÛ}2­éë• à‚ˆLN€\$1ùw´LÔk÷8­ôÖ«‡¼òf¸O\naPŸ>`@Ð•ê:©8T¶d jÛ©?†%HØÓ†ÙÒ”ÏÝºÂ¶ÊTÍŒn¯„šðäÑ[ŒØ\nŠŠ›z0´ÖoTŽ€Ì´\"DRÊÙ0oìÀ`©6’°AMõ	4×rL\nM'@¤Ä” `ä™Î¢'”„%+Õóü˜Raa!tGæÂp \n¡@\"¨@U˜\"„À‹g×ôþ–„ôì1gÅjIKg5µ~V\nƒzØñÝG<8OÆp›œ75‡Í‘\0÷ÅJÃ?DÂaòPŠY­È¹Gíz”ëY÷?'í::Äàäœ¡J\"¬¼\"b°B^1±NîNo’¢•èù›­VV:øÄÍÛc;q·aÈ]úpð«Â%ÖÞÇ^–‘-L¸l(™Ò:ËZ¬ÏK¦š´u† gˆ\nAÊL7˜–Y	.äõ	Ieak!‘ÄšQøHCŽÐ ed£D›,jú++gE;«(œƒ+\n˜I©øb‰Ê9ƒ\rŒØT¼ùãxA@s)’n\"XcÞ[¤…Eòš#»>ƒ¡ï\r9rƒ©¬€2wd\$<8£¬!	\"±22‰çRïÍëÈÀ\\t´Þ”£ö5^†{ ¤nE”U(Ü[òŸÝXÑL…\"£…±	ˆrQÒ›:Ô²ÏtÒ6Iº=S‘Ñ†\"C²a0«ßð†çÞÓAé­<C	ÈîµR”­‰Cú*7ÉßPÈrƒ‘•7ôÈßºFü»\0¼m\$Ì+a]·ŠHß[KàAÉé“Ç6ÃcL!Íù0òb÷	@mÏa¦z€–·ÒxÜY…ÊîVqº7P¨Ýswí‚•¼—Žô¾ÉðÌƒ°Trp‚›…¬Üu»¶{{ÜëŠïÈÿ¹¸ë€œa¼í¸ˆ÷Üß5üÎîžDt¸áƒwí}lÌ>·]Á/Ö+•«ÂVKHm`Nð˜NS90N©r¯x2Ø+œG2FAÑbÙì5ˆ\\2†.a¾Öõp)ºÛdñ®Šf[y±ä3ev‡P3ÙSg½²R1		l½ã;µrÎŒ!AÑç„˜þ|ÀØ/u'·ÀTÍ»æK™Wþ\"Rã*wç„PDù<›âNÔ°}¾dˆPyN×ÜÏdÞƒõ=}CÄþ³Æð7ÒýŠüö~0…2?`Ž­Stõ-ßyk\\4Ë´mtkÐ:\0  ­ŽÞO&Ïç}i5­…«fEò2ÒO£L†lóX´T‡8@Œ©+\rÙÑŠZç†\n-sd7Oà{	°6¿öž;+_[ÌqËú½kÂ!/.ó(fc`'‹ø»ÐåOödC'0‡ÿ0ÿolü‹Ì°§F(oV÷ˆ¾8+Dtìµ\0ª?Sp9Ð=jÞo8)º`'©š;g‡Pã¨Òà¸Þ0dé`PrTð>ó\\æ-Ær­ÚÛmà!02áB*ëX”F±Í	ó‰»p\$!P°Ð‹w	Pbá0ÂÐO·°÷Ïp¼âb¦.½B8ÎÄ„j™N„kcRÆ.4Ÿ&ÌY¦ö7B|ýä(6€@-ÊkmbÎfÒ›nlµ°îr\" /Éâ=ƒa°3Ff=í›åÀé.ê|dJ± ‡o1MÈ¢Î^¤\nOLÜð­lÏÊØáÐìµð^ÐÎó0§1	/3ï_b{°yO`Õç‚ÐQ:2mR\rVñO÷/ ¡ª1¯/-†òQ¬ÕNéoyÑ¼rêØ}±Ã/›Ðá¹†ïQ¨ DäRïÆ(2.¢+¦V¨0ê\$	Hßcðwl«Q”3MI!ïyr'!Ñƒ0äDÑÜ\\âz‰BÃ2>¿cäaC¾]ÌbfgÌ3’Y\$íÔ¨²Tc'Ž2¦PÒÅÒ2lfd26ñ±¸ÿÐ¬#’x;²}Ò92& òz!r‘\r/o#Íæ_Rˆ2šR2`ÀR«*âv0ÏÑ)ïù\"Hð’¿°ä12¦¸RÈcR³ÒÖR0HÒBNÒ†_’ƒŠk2æÑ‚»’0äÑm+/°ã)RÑí02èG\0ƒMc1Røjl‚S€Ôñâ`Î|FdÖ’êÿq‘&o%3DjÖ²Á/ï;4S8ÙrÍ0À	õÍFFc\nJkù¦Ž ÈFÚRdÁ¨Þÿel3føò-´Áb\$gª½Ó|ì³‚ü¢u£²1íÜ†P!Ì–3”wàš5Ìþ9äl!È]R#Œ(#­Üò†K/ÑË8sÌ”Â9/oÌDâÄ\r€V²€ÒÆcV3²´ªÍ–6ò@üb¸CèŽê¬9±½æøŸ-1c8£k4\n€Œ pâð àÒÀ¯ÂÞ­Ý3ÛPÐ,€ãÓâwÉdà ìœgR¨÷QnæŠoÐ·À\ncM36ª†è'2ThEi?Ô\0&\ngo±/žW®!‰Ó\$PVÅp`Ôš“ƒâ\r‡ªÿFF3£>FÊ6;o)OuC«ßCâÄ;&ôápéL&CÏ2k¦\\TöTÅè\n“ãM,%MtÇï]&p«+¢MSTtÿh;eLÌ³âÍ1>Hq€#¦Ži@åRM˜¹ÕÈ„Üê@˜lktf%¾¿õ6·*®&/ÔÎ€Šœë–=³P2d´àÌ¼«B·¢XB\rl\rÂŽKäÌLø¨‹f1è\rÌf:+¤]¨¹±¤dÄŸ/ï¬Xo\0chÎËŠÑdö	\\‡“*ìÞFJ>GÀ@ @Ü";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„BòßˆNêQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷DŽ¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‡Œ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûª5„Að’’\$HÜ:xÂ@Áƒ‰¼DäŠb‹ÔÒ¦‚˜ÊcJ¾¥3V ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è£wlpÆî»\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9:õÕy_\"¬xŒü×Ð\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦<‚b* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(dÓ+k\r6ŠR!Køj§E{ÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tYº£¹úñÜ-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÃIqÒÀßiSŒ=øAà¥~ÓW;¾<’*\rã_†!ŠbÞÈÙÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFào&PÂàÖ_ù)>ç¬È¢\nS»tdt¡’”êŒSÂz*Ê„¨Òœ`UJ«BHQe@v\0r cÕ#GÈ3CälSiÃlÏq:4²–Ë©§;ªø8D–J!¨u~0;°äôŸò€PJ;¨h>wJR‹J5G´\$¯Ôª—ŒjiN)è,¨\\*à{ÅVÒ0˜ÙùV5Ç ù¦ÔBRJYÕfdÐ ŸØë^ˆbxfqÃ£²jŒqü4E\0ä]pN=gäÂ6sû?¡@\$\nÜYü\0 «“ro\nš#dì\$fÊnWÁ…J´F¾K/†ÑôD€Ù+Žëí/¼¨ vŽ\"	O0¥y\"¥\\OÊfd¤‘¦¢š‡8 >\$¦ŸRRÀWñ!*Êåà\0jM‰0“æè¤°gZÃY‘*ƒ±}D–OCƒ©AÓÐ8M…ä‹^„â	áL*0ÒrìYû:¬½ø£¨ mÉRÚt38ncLÙ²\r!Øý½\"*KHAèc(@EžiŒèb9§å”bº³f¢F0“’vJß©…ÁRSÉ¸I˜Tø*„¬É¥ò»L v4Ñ˜9Ô’xg{L–•S6ABp\r±+ðRÇ	°AaP*„˜BÐA\nR¬'„à@B€D!P\"Öp‚M‚O\nAJ¹WJì(Lµò³‘DRÙàrï^&þÇ?p JA!LÕ”Ðêxp¥lmù²\n@r½Z«u7‚ô]-]RœåÐ½pŠûÔAlñÊP˜–yÓ‘Šhöàî2w˜ýrOE³½	ØæØ«cl­õè.Öåt­åÍEi•@àB“hsEl\$½5’@’HsG!”8>öJSˆ«)Ra¥ZnÏCí4jKFxU%\$¦*ËÙ6'8±o¶GAš¯ÕÄ{VjÙ¯6E(ÓVßXë)¬áQÈ>:zN‰âí.¡ŽV\$™íÃ\$hÙÄ9vÜÞfKî~!&RsWžcï6ç-L8oZÃ§D—.ÆÔ¶	JDÈ—…•—¶hòˆ	Ý:ùZT(sIyô\$5RƒË#^”—fV´æ49ÄÓÐ”™¨idê€&©j‚™µÇ\0006„rÀ‘µèªJÐ„Éuë¹_,p*JÔt/F˜”NÐèAC¨ppÈìÅ‡\"_`q’3Äq‚\0^B±Óút–ÖMB‚k\"IL¦tÏ àð™Ø.íïêS`ÃÓAÃÀ'Ué½]¬\r³xš¡-0\rq°fs 0§Ñ4>kÏöÀ%ÑïÂ=}´q&ÁÚZàÎwµH®¬\$òWídè®hÛÓ?iSÔÎ\rÆ¶I.¼ÈÒ¶Q×ÕG\$ö³orºôC™„#òC`“L¡RÎPr©ÆT# ­ðÙªj%!Ü2†\$\r»74äáÅÞËž‚RðÙ-âlÅ*Í¬EŒraÒÈ¬\$\$Ä^˜;d.Üy£œõ²³íµÄ+ð\"}+¶ÞíI¦T€ç%îÇ\$ÆM‰“Hœó¢óüù:ñRˆèp\$Ãd…Ð¹ãPêÒÝõžªo¤ˆKi©,TÆeXJ!«æ©©¼_fk§%ÚèÃ³+Çg´¢[ˆÂ÷‚\\ëXC\n«ìpÏ”«¸I	­ÉF6ðÁ40ö¼^E^ÖKL„B™åŸ¶5{õ¥×œ“fXS9ôSÔá¿¡º„s®zƒê­ï¬µk]8z§ìfu·Å|ï¢6Ì_pœo¨{¸¹ºôžØIwÂ÷ß¨aó*Ì\"Åç„,˜_°µ©ªÖ÷]kÏ£ê>§ÖFÚÑXï-÷Ñ‹ç^¹7Õ¶¤j¯Wøåöeš¥­ëßÛ÷ÕâúÐòŠ©bôÕä`eè^wé\"Ã&¥\\3…Š&ïwb†‘CüIŠf\"Ï\"M§¶ØªÄ^\n¬ôIÊD`jO(—G˜™¦p.Ê%ù¯îËƒ~ìŠJa¬¢+ìD\rªd1ìÄË/šþo’ëÅ¦\$ïÔ÷oÙï€3p–Æ®¸ZLjóÏxñ\"ÂÏnŽöoö¯z°°‚K¬ë°»ïŒöƒp°¿0Ï\r#\"ïã®á§\\Blx&–HÚSCpMj½\n”»àÞˆ. ‚ð¢éƒOîÚ_ÐÀø1\rÑPËcpbðTtÌ¨7'k\rIÈc\0q±0¼4Ï…æñæÌ¤ŽÔa£ê3îs	N¼ ÌH0	vÿC’MaG™%¢ý‘`mÐTþPÌuqcñ89Q†—kÐýq)Â7­ÁâS‹têQÌŒÌd0bë{L¾/1œŸQÀÌñÅFÖŒ½ÏžÐÔÌ±Â2 ¨måë\r7ï>÷©~/Q£¹\nÑöD±ÆVdª&€KB`Œîúì	*GCêÁÇ¿.Dí˜(bœ4-O\"ƒZƒ\"Á#	ÀBO.1ç¾xdÆ\$äºyPö	¤´«Â\n\$ãfI ¦¬î7RbÓ®}OÎ×(\$Ôòrv£ú-ŽvD\$H@Ø`Æ½ÉNkP­Úv1ÄBA\rü)	*n‰^7áÆ~tjî\n€Œ pÔ´\$MôÖM¾ü¯´vrÎ’E¸\"â2C)j\$'4Å8œî¾jQ¤½jÈWÆ7*'CÜê‡ÞÍkþËožñ¶UÑüXãJ   Ã~3>(,DŒm3&ºšáB—¯FJ¾×Ò»Â@\\Nd(ï¹\r‹ÉœYËô¸ñj?³\\BIP@AC6H6Œ;	%5sg//Ò& à)Â˜Í“rñ“8D“5Äa	„’df`7FŸÓ˜µnÎ³0³ÄÂ÷´ó3º\"áZÉfh šB„–@Þ–‚>fŽÕ\$¼æc´3Œ6Ã\$¹>ÏŸÂ.’½ƒ^2³R&C6Z%F`»D“@Óö˜ÄÑoä’-^:+(%dš#gxñ†BB¾\rÀ";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­«¯[5 Œ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’¼ ä:iSï‰Ê»¥\"ešH9³Û¼>+âü‰E½²î»æ45\$*º³\0£\"š€MÛw¨—ç3C '°Ö8án3k˜É²£8òÅ¾¢ê­ò¹*i[Xú-â Ê3#ªRÃØ:Œ P–Ù¿ð´Ã­N11@Öœã:3Äè®D¸Û¬Î9W\0§HŒIŠ7.xBÞ¼¥c[7Gc]\"«7Ôa2mJÃ<¦)c‰©9F5;n(@9Œu3Á_¶%L¼LÎÑÁÛk“2ÊR£…jÜLÍÈð*ømÁk —*ïŠ{êc\r)ÃÁî“<«±ðÀP Ù6 Î4Ž£hß—Õc…\"½êxŠ<sÖ.op÷W7ñvÝ3nÑ#ŽÙ,\$îIKÓ5#Z7ŒÃ2€…&ùé6¾¢ Þ×á­wLŽ£ÆÂŽc65ü½2\$#ò˜ã\nî|w˜Ú»ác(P9…)¹†DË\n»Gu¡\0†)ŠB2`=Sœô,Áp 	e°6EÜzƒ‘1)Õ­0Âç¡à+Œà ×ŽtVªTå	H«µ4ƒ8 *4…'¸Ôâš.aÈ'£RŸSùLU\$70è@¬U™ÇeA¬0ªò’†C(jGÁÑîSls“šu ç¤]¨qÏâm!Ì9‡u\"»ƒ+¤\r% 2@\\ŸºP*\rB¨uÔ\\\$QêEI©X²¦ÒœSÊ€3ª D©ò§U.uW˜p­\nb¶3Jä“£ù\nQO4ä¡PÛáé)!”5 Ö[ÔSa¹ˆê\n¹Ù+F²\n’„1Ãpi8Æ<¼ÁTF‰MÁ8»ÊÓ&÷ÓYG3aÐÎ®‘BæŸ	P@€(€¡+|±:À ¦  æGßsðv¢¥ù™`ÜL‹›‘ÄìžŸöîVŒêc—á¼¥K•Š\\ \nÑj[Bµ%\nH:AdÜ\$‘òiÁ\0dG&¸¥LöˆpH,€9” Ì‰,\"P°Í?PÆ±æ}\0 ¡À0ÇU„cÁ’äÄ(ð¦&Á¾/Ùlf”rCšît…jrr¢#¢¯|ÿNºT­H9ÿ*ÍèŠÁx,×7kFa\n¾	„ÈÚšÓhLB0T˜ê™w×JRq2¡‚g¥…‚IsŽ³\\5±¦Ù-È9¬9à*ƒ”°ÞŽ[N1Ä¨[3£\\—Úý\ráÀ©†SXä›QFŠD*¿„†®—ØpeŒ¹‘1\"’œåëŠqj1½¥²N}\0PLbòå7’’(ŽÃ‚-ï½øÍCµ5©cŽ(%=(Ú¢\nJ	 bc¶±Ø&ƒ„í´²qŽÚ¸÷\\U•;æ›ç6‚±ÿ f,Y²ñ† Ca~‚\0()UZ[(t“d4‚¥’¶Š'‘L{“(^Þb^9¬¼Ì¡ÖúÖX5i))¹n—Ò(ËÂ™d!’¢Ò²x°c+!’ÎÛ×4Ÿ•§ˆî@T°Ø ƒÃK¿K¸ÚPîGV“]¾¥ú°4H³%0és\rý¼­£¾”ŠwfÁPžUÂÿ™=a6õ’³[%e`T6LÄ-Ìwae’\"˜ám„ƒfošs­dDöI/¬Q\"Ñ«™ºŒ,»Üp‹3ÍynŒ¡ \$U…›VN™P[°¨C	\0‚‘©TA]ôülfî«ÎƒôZ\rF6Á®—4S¢AÃq\r]À¼¯¯2,—’îÐú%±©3%3éZ=\nhÂçë4Ù•À+åŽ½Í\riqw+*\0›5Ÿ\n>~9mŽ	éi¯¦N›št¥è­@QõIBš›Hj%ªô£8Òå_Lš­8tö¶…š„çk¢o-ƒØšÅ|š¢U˜h¤	2ßCjÓqžô‹F&÷\$Tì]efIíY¡Ü·„d.L‰Et³Ç-•\rße÷‘Ö6ÔÊkÝ¢SlÐñK!ÈÎ \0®CÓ«Ð°¨¡‚˜Ê7»;x›;ç“|æ¤í§@(!ê6jsÅ÷\"L,îc“ärˆRú>5ÕŠ±-ÒJæÛïBpºJÁ(]5Ô•†ÃX…i‡:­±Qlóû¹ÎYíLf7€’ö©Lü\röÈ¿ó~ž·ÛÁcPG§N¡oâ¶ÔŽŸ¨áR~\\Ñ1ÁéRåÖd–™JíÅ\\Â2ð ±.Ó,SŒÖ×§BQ`-Øe·7ÀwŸ_ký¤9]Ôœ'Rïˆ¤¤ív¤þå´:pö#Elï¯Çù_AF¥à§vj]Q¶=5:ºðÈÝm±Ðj6QÊ°ƒëmo©ì¯±ûQìq'Z&Íó“aÔø…ø¨eÕDy~S~ë!Ï­œs&Áù\nYRk¶ï°+C¶´Óû/\\lÝH~ÝÚû¿_ìþ-”z.£×¥ñýïÛ²5®ü†ËóAd¬h*Æ¯Tùªÿçê¬ Ø•¯¦úªÀ¬P\0OvìN¸:àäÅC Õ`Æ” @ €ô_Ç6†ª6€Ü …ÒE„\\1€Â’ãl`É\$\rg¸&02\$1<’ïÃâ[Io§¸=öÈàèÉ)È)G^@ùŽr@iT”«¢žÆ-ìYI|T«¹GXâjóªöÌK&Ì¥¶'.ÌZo‚ú‡L2œ®¤ê„+h.ÆZ!S‹~¸+vN®.Ë0\rO,°÷Ðü´ÐYOBnÊâ?ï¦´C¿Põ§Xo`–+LÜˆê<°nÐ#\$ã*hÊä£:B¶æå–ýPöé¤ìû‘ñWà‚&Reoªx[`Š\rˆ„0-±kÑhE\nug[ñtGÃ»kg\nÊÜHƒ”Nã–%îæ+ðR'X=†~¡¡NÂìq»*ZpÌú±ñlâ‘Çñ%¦Ë_\rn\0>1åG¦bÖoqì`QñÂ{ªÈRê®œÇâ5°&YR!qbXR…‘úÇ2' 1à¬\$wæë.K¬¿Q·R>ËÄ…!„+\$¤L'ñ…\"\$c6ÀèÐ Š„ä”#îhË‘ãVïfl^`Ì¸kŠ)Cl§NŠ/í(#³(h(Ã2¶r“(F(€Ë)Ífê –ÌF±Væ.šåÚÑò¬<¨£!j\n7Ä\\<ü”’Î\$BÞ^n‚C\r˜þMK.ÔçRæÙÍ./àÿ’èã…”\r€V¡ë°’å8¨Æ:cãZ§4Ÿ@Ì{ä&àŒ©®F £Ú|‰®\n ¨ÀZ>/.<m¸ýê¬sãÿ*Æ|…Y4Â5I5e‹4îª#Â@\$BH\$p'æLTÂ^&.®F£Ë43º„Ö+`áNh0ã÷%iØ&3”:£Ð8&;2œ£šñª’ò*[BqBn;z@;±9\0˜\rå<k3=EÜsBŸ#|\\¡m+Ë^‹Œ²ZŽHâŽºu\rà\rƒ8‹))îªÃnDF£6”@ôèÔ).F¢|\"Î}@®¼j	/\$t\n8ƒlÆÃV5¢~ªö»GÎ0Hºì”,þ\rÂ²eñ*-Ð}\n´,h-	©ÈÑÀš¥ÆºóDjÎ`n†ÆH†‚À<_Ë Æ¬¤	àáDL\$qd\"?'QrˆñG'@”5e²Ë”H_Kž¡´=\"+~J¦‚-aLrÅÂ*´&m«Œ¹Á8+ Û'C|\"H˜dr3­\0-af¼\0à\0t\r Ú";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Æè :T‰'03Îâ„ºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äá=ã(Ú×%lN(@°;~€­N»ŽÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xDÓL#(é'ãh5„Að’Õ³\rÈèã|ù£“pÐ7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ:c½ã”zõÄâ«’®\r[.ïSÊ2à¹B(Ý¤Éê…Ð£è	cxÙÃ#ZÏI\$Ã\\—^¾Bxé£KÐ\"Iƒê6#c³Î:Œ U ´\0PŒŒëØ ŒòZGop¸È4£‰Êê5¢­4:/ÍÈëM5®ºàˆŠ	ÈÕ©ïj\"‰ /-¬„ WEN20¥C…¬”!‚KE	€PÅºÛavÓõloJU+Ò5ÅN€„:£H†I\"5Ù[•´¹\0 Ê2ÌÀçjÎã„ÁT½ÙÔO“å88Ù‹f	¾@)åÀPáHÛ6„NÃ±)“7ŒÃ2Ò7©h—„e8¨7²2#uC¾#¨Æ1¦˜ÍgáCxÎ„abž9*F„ÀKBËƒsn2…˜R–ëù\"‚!ŠbŒ§­ˆ‚HXÒÊ\r´;h3„4À6Ùüš–”1kÞ’\ršïÅØ)¿4™º­è@ Œ›êQ¹k*ö2%ÅIrhD¤N£\"Ëd£óäüº&CYn(…F ]/Â,¢íélw¦hÈæ9Žó\n2\\–2rÜ•&IÒ„¥*JÒÀï-v2èå/Ì3Ý2ÌãLÓ5ÄÌÔÞ“ŠsN¬å<‘äöŸSùHP&B(dˆÉÉHMŠÐˆVá±fçÈÅ©¢n„ÃHf%¡÷?—`s<E'Åt\0	Á:\\á’ PRL'*Gñožã6T1\rÐü”c0¬”˜u\r§ )¢ØÔJ†.as“Ò~N\\ÒG„òÖô\nA-	\$<<˜‚v¡L‚˜#ÊÑšT–V¡ïs!Éº÷âÖ	™£#À€1«vnSÍ!7#&j¢xS\n‹ô9WJM	‹ór+Í®…(P‹‰HDžH“´–Ê,A¸3’AÏ”aMB><­ÊB\$Ò˜1G2eÌq– a*Cr¡N`#j69ÇVn‘sZ\$!t3ÌXŠ*Þ	á8P T *i‚\0ˆB`E›@('ˆ&‚¸œ³œŒÅ´@J²úA³q)– ©9˜ë74' çÎ@Ãˆ’ó\$'|êfŠŽ{ˆE.ƒÉs–èL¹;1tG´Æ<Ìd1.elÁ±ú2ˆÑ)22QÒ\r€ ¬a‹5ÅÀõ‘¤Cik\$²ÒbQ*R¢€wl ¯èM¡HGïHˆSÝÁÑóE„Œ¦šÕk4gµ)heä=-P†‡Î¡¡E†`1šÉA«-d°è‹P´~hL¡ç'¡•B™`ÊÐb¢6ˆ1T,p{™`‹ø×D£–oäŠ¤SõÅŽœÐÝ3\n{,ÈÁ.5_=Ãk@–5W³5ÔQL‘(‚†´é:%´æÈÐ\n\nFÜ„*“kQ9hIÅ¾ Aa G fÚ‘\rê`Ï3ê¼KB9çe%sN…¨e€ à‚ä˜3(®î:è¡ìÀ67&ö«n|Œ@ˆmMD2ÿÈ™?ìI²²,¹×Ús‹\$æ±h¨ƒ	½	`Þ´3zjŒK„n:r\"IF9dÙ‡‘õ¸HÝEï&Äí\"!L¥E™À¦`¹Ž‹F©WÜœ½JÎŒ‹ÆÄ5b3Åpƒ¡ß9æš¹=FQqHR\r(H‚â’˜^ÃA~.ª­×3w8tR¬ºnŠ‰3«Õ^ÈtEsÉµ\\rB!Y.ù¬¬rCs„ªW¾øäZ)]F\\º„ì:©ü´\\³D\\ì\\ÙÖ[ê\n#¶*r*;¤P‘Þ_!È¨%ä»çŽ|ÊÓúv,úZ‚vvWäfœ˜s+W!¸Ò×jùSã¨(5‹ì‚É¨l†ÑÙV‰är]¨K†£'dùÌNH-£Ú§*¼Ø5•ÖŽƒ1®}#wšEcÖ«ŸRŸMƒ9öiÖåÑ—j­}™§‰\"Tf¶Ñ—uû2j\rm÷T£«MëEÛ©Öï¹—3lS˜Ù;eX}Ðë¶N¿Ý¶\"gn­yš¶UkJÚcWçr@5(0tê¨¸ZH8 \rJê„E7‘†˜r¤Ç¥\\MÈï‹Ë¢½žä!%ÔÑ¶z•@¹·u‰83ß4qCÀÇ	%„(Ó¥Ù–m6vÚÛióÙ\\y¹ÊÞú?eÑ¦ƒ9º	­¶ŸŸdcéÒãÞñÚ@ ìžŠÈ\0e´ýõ¤ŒV|ÿ«dÃ±4ÜN›Ï‡búžfRÍÙ·bÚ­ãuôâ[Üú¯CÊ»ÊÑZNó|5îùÍµä£6²>·ºÁ“,u±yõÇ2·õ«¤~.\"t¥\$EF´å˜’èçzËÚ›Ï¦îsÑ}/¡ðã¾u‡qè<w¯MÚLÒ÷\\¿åý¯¢Í{ëÂ^æ<w¿YV04Øî›—þ'ÆêZKä˜ž­ï<J*øª¿ÉY?¦‚ºUýS c¹ñõ20\$_åÝïÅ÷'§÷–t4VÀUßK¹õ¹Üæ\\Ÿùö\"Áà*à°üºåŽ.†	ô;Ç®­ ¥ŠÂ\nbŠ1°#JÂºèÂ-Â@¥\\»À†?ÀØhúø¢,,©dZGJ4FÂPˆBn¥% Œ—8:¯Bo\"‚\n ¨ÀZ²°ðL#âZºëœ÷/VÑé‚~oø,^àÊ,hDuÀÌ+Da`CðÇ‚Ì;cÈz&²â\n\"îÕ‹ÊG¥ÀÆ:Ò‚Šã(%£¤(¦ÄJÐ ÃHDà˜\râ†80Þ– ÚLhæ¸»®,³ÎXÌ-’,BÈa‹×¦Ù&–`,sl¶Ù\"bjìÏÏtRNìÌ Þ H€ØÿqBBé \\¬\"’ëˆr°	§’5¥ò6¥øµ#¡m8s\r,¯\\^£­N¹êL+‰Ié#Î/Â\0­CŽíH¼&.Ô0n6äâÆ,¤ÏF\$‡ ‚\n:×BqU15 ¦­KP%fC ÈBF†_+ÂBI@1*Ð>(2\0";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iOÀ4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î @´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xDÖLðé)ãØ0ÃXD	#hà&c xŒ!óÔCãBòÐ#	BB)Š.²¨–ŠÍSzéCÓÀÓ0´«¶4Ê`©ŽP@è¯ËÂô¾&â§T¯+Ú\$Ö.ü',ƒ²0ÄÑàÞƒŒ\0Ä<ª€HK`Øj¢!ãbH¶?oíf\r´\r4+XÇ'ÚÐ| 0Ž£`è6C`êý\nuä~’/Â3u½\0P‚3Œò{x?B¾¬ëÜ8ÜàPž9/V‚ô”¢¨Ò- ºpP˜ÄŒïÍDÐ<–½ð]Ïh¦¥3ÂO\"1H	€PÂÍ0®ÛkXUu›J¹Fî8UVKê1¿18‡'ÔyÄLÙçÉî^¹Ç\0P Í³¬,ú8-“ 9éƒ–Œ©†`º¯Úcth+óŽ^õÅ²’ ã0ÌéI)hŠÂ?cz1\$.[1Œl8Íp„tˆ9…\0åºŒ,jÖpö=Þ*@æ¥¢ Þ5¢¡\0†)ŠB2œ’Ü£NDÊÖÎ&»œ\r/#ì°‹’¡µCU<\"Ü)û¾òü‹)<µc2ÐÑ&£pÎ3Ä9p-ËÌA˜ÉÉòˆD£OyØÝøT\nú°òo/ÁpA(äš¦)sÜæiÒ©æŽ„e‚*Ãý'ŒŸ'J”¨•’ÂZKÝ/<d’“\"qLá¹4¦³Î›“‚rN‰Ù<'¤øŸ”<{J£(„4¢–	¡'.QÄ.4Œ’B<%¡0œrvyÏøeWF`Ã˜\"B\\Èù+4ÅU§ÀâHzIEIç‹PœaÎù><D„òTØz\0P	@†6¢\\8((À¤˜µ~Š	-jŒ)ª6¹r\$8ãpDÏó \nŽ™RÑ\rÐb<lç¨¤°òdIŠÁ\$kŽ\"BRjÒ{\0<„t‚×‰£ t?\$”1¬ãŽj\rQ™p°ð*FÈÜËÏK¤Š!<)…G@œñIî! 20¸{tÅé'¥PÒm‹Ó´\rÄx3ª…ñ\0Seä”Ñ¬ä¾	„`xl ÙD‚¤Td.!?4ØK#ñE)Œ‡“~{ßzIFå[1pž\0U\n …@ŠÀ§@D¡0\"ÎâÞ‡‰äYêÞ|I äDÐÑÏaï	‰)¦…^e©ˆ“šsÂ›LUñT×Ñ']C\0T¨\rªäÂ¡`Ž#;sèÖÉr6tÞ¸i{€ó©ºJ¾Yä­hŒÈè‘SrfH#·& (+\0Ó‘¯‹\ný§ò\$nÉ%<0Q<”`t¡åM<ÄÞ(Å3Ô¼‘ÜE/¦„Ü‘JžQ—’ô&ÁÉh,ÉÊÙs.«¡P¯”<Ú(\$Œª#C£J9&4*FaÙTè2¬8C½J/U¥Z§rþ‹Ñ*fjÅV8‹ @L(SL©)Fc-Õû4U•††<#Òï’yŒ\$®P<Ÿ²Òg‘]\r45ÁË`K‹Xk3)<YÉPb¦Wá´’ÌŒ‹Ø?AËDZHaZ¡ÞE«È*@‚Â@ ‘DDÏÇ¹ckM°­¸9IV’UµÚ\\î\r`\0^/ii+`–“òÓÃ)—ç…Ó]¶êÂ[qWÊË>ó„Ap	m÷ä:ß¶±zŒÿÀ%ú˜Ãóa±;‡d¶#“³í«!#”÷†YzRy-qWûâw\\ò¢«x0îæúa‹C©+Ÿ.Ô:ã'pÛŽ>'·	…q@î²éñ}ZÓ5|äš\0EˆÁL\$, C¢XHáÇH¨pÊ²Ò*É•_â|™PƒxpŠ¥BòÇ{&©Í#œéfËÍfH¹7-pœ“h•š§JªþšäºN˜^»ìÐªúdV\"Ñ¢[tÊtãŒ®+UéÐçP¹92éƒm”¨î¯LXÒ`¶Ú®žäQZ5€¨sÉú§«8ˆÓ‹\n”Y+0¨½©*[nÑ^¼7t'U’ã¯X¾³-\r*Ëœ­BËjÝ*Z-2ËYÜ³ƒqŠš‚UD\nv-\$¦q0éh‹„Khöã1dse}ÒÖÍÃ<ÝÈÚlök¹Í{]*—N>À§¾µFøßõéDj*¶ûÞD÷!&#qÂŽÂ¦7D3·§@O¹\\>ŸÜgÅ…[8¬/‹a¶1íP µ›î¼j«‰jC=«­×{*Î]Ê9*æ{ÇTº¸Xí6ÂI!–m…›r4TÎ¦†jìÃh”³ˆbÊeÅis”FŒ±ïËD‡–½­oLúÛ'‚ô‚Ù/án9•§¥èÃ`ÝMÙ-åá—”ÚËƒÃ}ž–Êè‡8À_­•´ìKAO:îk¨Ô¢\"8›ñëº¿©÷“«º+“ÅšhtÞòÚ3ÃðvÝåÈÇÊú›C%|C©¦Ê?_\\4ÄÀ¹\n#¿Dlh†Š[=¹<;ÌàuÃz÷Ük‡z'Wé	ƒ{íõ£äS€ÞÞC\"¨õ\rTŽ®úÑäÌ×Ï°¿IªzÈhÊFE+·ø¾Zê×OäS\\óß~•Ïùx.Ð÷ß4ãþ¢ýäÿ¯ï Çój \rr4#J<DE®XÝ§ØÿŒF×Äd\0d”ýFàÆ¬ê¯ýd	\0J²AO&7oûBW0ºi:¶Èè÷­.µèèøPO‡šôGØù£î^ƒúf­V`j|Ð@EÇØ\n°	P\0\\% 'CòFˆœHæ…>£(dùâüqO²§B0-gÞ Á0¨§'ºâ°´î\"Û¦X'\"âä-Ã*ÞÏçÜŽ…^Tâ\ndîë0â%þ#ƒ\\*†—Càän@W…¬Á\"”1k§•ë--%@Œ#Òcœ\r€V’¢·C9júŽí€þ-îEœîCÜ£b¦XQ\0\n ¨ÀZ \rÃr` ÎÅN&&dŠìÆ«ì8©ªjNL]*Xª‹øjÍ>¯bž\$çZe‚öµ¤2NíˆøGY‚8m‹tøQ:øIV‘B¦#ÊŽâZEäˆ/Ðø&Cª\rä¾8]…‚Ô)Vh`#ö¸\"Ìçæ®‰n†3â…¢Æ,®M>…¢H#ò!Š-¢C¦9 .¢‡gh?ÒÕ±ìêqð‹\rÈå©85£>2Ž².‡*Í#vL+.ïÂBUÐ4_jö­r -ÂðÖ\"\\b\n\n¥Å~ nDbn¼ #ô£ÃÒ:BèC,Ö@Â D`Im\$\n\"ØS\nY‚, …l£#ú\"gfœ¢ Þ¢g¡ð¥ê+*æ¦Í*~üoô/À §ãÐ´`‚b‰ªÖÅ^Œ¤,À	\0t	 š@¦\n`";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6¼#(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tr8I£…,‚I(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñGÓ”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsIÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²‘ám°‘¼rVÇqìt’¥¼@¼‘d®TÚ0Ùn9M`æ1ÜŽõþçdöt™g¤´@í.sÊé`”Ù?P±Š˜¶14tI~ØOd=*AuI‰O=/[Û„áxjzT/–]Q£„í/<#ë2P>‡m˜â”IeYg~Aà´ùÏÓ½B?Ø£š¦¡©?Z8äÒ4ÁºÖ\rã0Ì6Y8\\ÕéI g‚ Þ×· ò¶°êÃ¹a™£\0ØÃ9á`°Ý‡'öC8a< ‚	‚Uò²pu8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹39D3oçh R˜CÈ€ƒ7UZü	A~‰à*•Ênƒ2Í‹\\ñ\0‚±ÖHrl­pÈ²³VªÝ\\•ÎÉÁ<!x/& …Ù*#íøA”6pÇ‰ðŸwÈñ=\"\ncaú¡x“C­ä;(…º„ÐÂÎr69‡uš¾C(x¥[@]U hVÊá]+Å|°ÄXÐae,Åœ´”‘Z«]l‚õ¶ròàKˆ6.EÌºRì]Ñ•y•ê·ÃBø_KÔ0†³XÀM‚Ê!¹wFxÒ—ãYÄ˜Ÿ“Ø•d7‡(t@¡ùIêAÈA	„(`È1ž4³À ‚	Ah5¡&/Hxˆ*\$<™¢¢?3ÓbD¦h2Ä‰Œ\$9Us°ÑÂE	2l}ñéX*DŠ‘ÒHó™\nÂb|P\nDÈi¶U0Öx’ØÐ&#C\rÄùŒRø“QDB«,SnAHJd‚I/”2•òkšBü\rËäâ`@­ƒ‹M‘\0€3 ÞbtP™’(â-@à:ü7gÝ N`P	áL*9ÖŸQA&¢›ˆ Dr5¦U¹ë(’š …Õ5qÍÂ œ¸‹^ƒ T\nÔ‹Mi\rt3jÉÍéù\r;Œ\rÏñu†õŒù\0b\r!œ/à™U\r©¬6ŠÐ#@ ùª\\]K5¤LŠ«UÁüF­e—‘H%‡HƒxÎÄºˆQN×€åM¤'„à@B€D!P\"€«š E	ê”z¤åâ\n”^zß[ýŒ±Â¸î»SØ{¡\0Š9¢á&!HPDµó¡ð–‰=R>õÝuSU½N0gDÅ…öå±ùð+¡\$Ã¥ïµ8ÿO&ì<@X¾½Œ……ë+e¥P–ªÒ a÷Âžß1f²9ÄP¶Â& ÊºÃKŒ‹`7 æÌX2j¬è‡‰¢¢c áByÎ9íGŸ~¨•J\$G„¬B\n6‘Ïq®@ ×)´‘ÂüóI!Þ\r!é§:® ÓN\na”Û3„yñ>eÔB Ñ6cÉv\n\\ýHiZ^k«äÚPîU€ƒbIýæ;'œ][º`Qi¤ëXÉmn…4=u\0,£S<Ôúà\\'¶Äïs·…‰lå­)¬ô¶&,{X°á¥YKÌí1kEbGÅyyâèö	²ò/tè¼Ì¥a¶tš\nB~Ø˜rÿ¨ÖÝÑÄwL*†QYA¤Ü¾elkC}I7ÁÂÚh¸ÎòÆ×l Ao‘RLx àƒ€™´Ñ¾£b„Íà¸ÿLLl5ÑêLÏ „, ä\\š˜Ã˜™ÛÀvCÅá*….7\rða\"\$—ÀÀCHªÁÝR\"ŠUÞ|A ¸•K©ž|‰ÊA%cÝ	0tFÙ?D`çÏ³\\š´Ð¢’XQbMn5Í‚¸eUù¶u¤LQºNQèý Áq^¾š7ñcÃ”PF¸VG(ebµ±ò¡¿úÛ(\"üŠÎ)Àå)LV±‘Ì-„@åÂí\0×y°v’2Œ’²zk‚OŸÁ¬õ’2mø\$™æÊ‹˜pü}ç=4Ô2ÆcÑs-*`;nÏDÖñŒÌÆýÏ÷¾ßæ‚±¸qÒö¢<Ï¥‰%æïÌá4íqÐ)„zE¢\0úÍ€ì‹ð‚CYrim¼¥ÿã‘¹Iþ‚?ú¿*±¼ßlú6¢‰#¦ßÛm<îdÎf‰òo†üiø/%\"#`Û†Â'^÷Lÿ™Œ\0S­>R!Ê\"nâ§J Ê\\æ0&ÁðÃÌ\$ùDK\$ù«ýlÐOòd/–ÁÍ{‡fóïw'´Ðm‚tm{_‡%õÊ!x­–,\"¨¤ÇdÚÍŽâ°Œ Èß ¦eòâ^cˆ·ë‚¸f'0o-Y­^áO„,P©m]NXÜPQ\r\\ÔP,'ŒÔÂ>Õ\n\n¥Æ>oA+A 01C.Inª„ÂRˆì ÏXÐ)Ö4BÎ¯pFÔíRò0øoü„B3®J†q0db+èþM	nJ¥éÚ§ëñ¡xöáÒíVf‚L×­ b0¾t°aFÐÌôy|m\"ÒpÚù&[Ñ…‘‹ìó1€ôpÎ1/G\rÐ¶ÿC÷†ªaÊaBê¡t2Ìá¡6?B\0EfZ¡|0VsC£	e/	Ï¨zŒzp˜#‘è²¬0MªrpLzG*jäœÓñpuÊ(ØP„„¦? æDjÊPe1îÄ’H2\"‘˜eŒNOèÓäÎš&2\0ÀðÁÑ¤öÒDPI	ì±tü’G\$±ù1Ÿ%Re%’JÕrV#òZús\rÍ¼P†Oê.IåÒP¥ïˆgé(„ˆ½Š1)0x=Kßž#ò‹ò¥)—'’œQÒ¢HÒ¼r„×\rkñ}\rŠ×1oqtMíhMur¬=²ØN’èîR²å-Ï(D¨Fª'‚®ÛDï(rµ)Lö#’²HRk!Üí€àÐÑqååbwgz0PÁÈa0„3Ç|ÓáÏ¥Ä|âBX,O\$Áxæäñ½ý&\$È}æØ¢Á  Ï6Ánss É‹	8 êD€¦–£V·#“¦åFõ/W\0†€ä\r€V¬r\r`@[+@iF˜8gð_\0ÒÇö`#˜ËR^³¦i\0Ä˜ë6\n ¨ÀZ\0@Z(¨¨£Ä9Ž%€g„m“]%0BùÏ€øá\$Â†¢ÂÁ®jê¡‚Ï9³á>R9Ãï22l­ TH2#&ã‹*„\nÈ\"z'óp1À˜³Ô<tn³àÚY£X8/!\nðÁjÌÁ9Çœ\$ÓÄ¬t±ùïqB‚0aÊp4£Bn‚ãâ8Žå&ô#JQ^ø2×@¨9#l7CS:óö«ÀÞvYØ’Ô”E-ón³ºkïíEÄæß²\0ÈEIPÓ5P¢ì°*è3B¥\0\nÀÂ`ê ÛFa\0Â„’‹òG\rHç¦ÚÁ(bVxã¦cä@¨Tœ8&œG†\$ég¨sÐZ›Nô¬p\"ëVÔ®Óg!K´ó'2}\$°s\$ªÒE.c*G+Ù0dxò“U8B0@";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûäèAðaÚL«ùUÇËü<û‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo¹ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯ Ê9Ãxä3…ã(Ýd(Ü9#}–7Ã\rŽ2Ž•¾æŒ#pÖÂHÚ87#m”:xÂDaÌãã#|àmx¦(‰ƒKŠ sDÕ6K´ùØP–‘fZBOif@!…êDÃÏì^†XrVÌEKÚS‘‰‰I	#7•\nÆQÒªþKÀ3’þ^’‡YRL¹4|u‘äÉØS¯³ð\"Vê6\0ì0ƒ¨Ê¿…ÚAÌÈ9Pv'û.ƒÀÈc¤A‘1‘TT&%ªJeY“¿DCøý¬ØtgÆùBLœªÌr€ zÈŸ–«š×ŽcºðßiT–”ÎOºÏMÒ}'‰á«ý&vE!ÖS‘†+É \\¯/Ì¦u€Àx\$º[K«ù:\\Aª1‘ÄàðNØ°ÌCJcxé'Ø`·íZQô=\"¯R|ç)ËsF•¦Z\0äÓµ!¬×ã0Ì6XWå-L,Îé6AB ÞÙ\r¶èò¶xê1Œmàæ3gá\0Ø7Œï æ7Ã—ÖC8a<€‚‚Uä°Cpu8  9‚“ža»b@™„0¦‚1Í(@‹\0\\{H	\naF%ÙŽÁFJZCè…ï·À%_ä\n†±oÐÌ±ŸbÐ< € ¬„ŸàcZK@2,0@«r°VEQpE¤q g]+¬çˆC*!IË—c¢ŒFAóÜ‡kßUHn§^PBhag98ÔÃºÆ^A”<\0Ò«Ã\$‰¡W«f­Uº¹Wjõ_À…†±V:ÉYqÑg-¤Ö¡ËZëd-°Ø·Vúá\\k•sÅ5ØUrØ\rÅy®àÂÍzú6k\rô†åÏbº%IíFHUÉBI\nD‹Í0P	A óÒAT,è%1Ø.P@!(\"âÈG‹<ÀF%}\n¨%#.UM}·¡\"Sª#Å\$u”²h¡	‘7A”^â@vEáEÆÈF:ç¡í/ªÆT=.I/T2•älZ\nõ\rËÈãœ@«Ã‹F`€3 Þaä>•Ñ´ã¬ @ßºõ7Ç Þ‡\0JP	áL*Õü£“dÌJE¬V´²/M)‘¦Ï\rG”ÒžThõ‚î¢Ô,Pš\n]©ØR\$,_@¦ ²Þ=CTßƒsì\\½_½`@ƒHgÜ&QÃpkÍº­ÁRb-ÕäWÆh2ªŽÑð@½C‘®X…üL‹Ö-ŠcËkí…±„ðœ¨P*Pc\0D¡0\"ÙWG‘B€OBÀÊ°BV+n%i¤UQ@‘]	õ>åüAˆÿ~m¿Á	½Õ=7x‰±ã8êª'‰lý_—	â¦å\$å¨\n:?B€NO©´P]8q·>¤Ì×ž'e´f«¯	Æ\\[žïXó ¢QBôìe\\{L¬é5ÙmZYü\nA•r–üˆn#&õCÑ@JŠ£ü˜SvË©ŽU¬â\0éÛBÖKÐ‰Ú™â¢Å¶&îŒYá\r!é£„:> SG\na”Ü†3ŠÉû·³vo“4àòÜø\n1°4´LFW‘·¡Ýƒ;v\nîXˆ”¶‚\$“)µ4¿EŠpsL8ïW’ÒØ Ÿ¾ŽDvX[b\\õÑtVÍ˜ØjµSò:U ™ ùÛ#ð§ð¬cb,¶7BLÔND3±F*h‹G6„Y%Ey.ÒGˆúô;öAe Aa Q•†MãÖUæÀ7Ñ‚+Ö@9âýRÕ©Êëè~€À€‚BAˆ!Ô”îA.´üFûU·Z®ÂØn¹'ºìç·MpMg”Õ/ŽòÔ¶s/Ã4Ú¬vk:µ­v0‰ØUìkfê—ÊÁh4x;¢BFV*P˜µÜ2NJÉi/&\$,û¢ÌiÈH—Ÿ{Jm§|\nhQºw#ÛdpÊ¦jx%[œ¢a^VDì³àš R ¶àÅP!R©bDËfôCª]é(}6D÷Œn£Zk‚L›3*eËÓLhZé½·r¹‹BÇÛ(ˆ¶”%·ÞÜ(2‹ó®\"…ÌÝÈæûäžh ®Õè\\É1Bbõû½,ÓdŽ®É	TZcÆ‡ óŽ¼bX’P,œÆ\nt›/˜¸>ÂH«èÓ;¨‹îæ’waÙ-‰í}Í'Xa”TÝ{ŠõÉ·“ü>ReHâdZ´P\nRw‚J72â\\ç‘t*WPæÝO]mpîßŸÔö…@Õq`}Eñ•ß]Rìú‹ÍçüSì~ÏÒ£Os^:pñ^3­úMù·\\›žs×Ñ]OòëÌ-y‹7|óŸò~—Ãë_ZÂQs‡3ö€ÐHYEg¬T×–¾èþ/íün…÷rùÌ5*êf¹—l5ˆþ^ƒ)ÿ|¼ÿLp .ÄwîÈöƒ\0000Nâ=¡`ãÚ)kî\"V+Á:)†hfÂN ë‚¨„ØLøMä\0,Éò¤È¹G!Úäb<kPâP>+@ðÏª¡38	˜`b¼,+Á+0Féðþ+ìçvËg6ò‹btoÈÏ´Ø/Üç–—‹¢ù®¤ì®™\n*‘\0Ou\0xøåøâ¥\0g€åªöÙ	Ð¬ôÐ¶ª°ºýðÎspÄdÌÃ0D%¨¸FANrÅ°ƒºb Á6–g:ÂÐ\"·'cíÊddÏñÑ°ÆiÆ âÑŒÃ£Ñ('%J1x!`f2',öN„”º¡\0:Oº/êªîCÁÛo„ú†tþæÌNÂa\0O‰>àPÞÊ‘e‹ã\rpäGd\nÑŠ¬HD‰®Žæ¯	ðúGë^œ±N®hÌa\0þñ©Q¯„æ±/äl#ÑÃÑšN‘:wÔÌê Ö±^¸Ì¬×1xý°ÒF1í'Ãï±Þ)ê¡RÍ‘C\$˜ó%ÐÍ1ÏÏÃå2±Ú` @ÐÈüDGQÚ±BlrDu,læžÁÕëÖ½±~¾ø>Äº‚=ìüc©¥\0¯z»¬d#ñÈ€ÄºnÆÒu(ÒhŒcˆ¤H\ni.5Êþ9`é*FB»®x k°`è@ØjP¿ÀÖ¤¬Æ†h£Œ}â\r Ì}eô( Œ­åÝ*F‚IR¬ ª\n€Œ p”ˆJ<®†ý#>èçX\\#'îªÄÀ»Æ–¼\r‘£2Lu.2æK¡hafI®\\2Ã0rìèKSJæ&Ab¼,ôšÁ\0ræ²	ŠÉ0ãÍ6ÊÊ\r¥Œ5ã†9nTk¤\"Plaxé®¾BÒÆ}«þ±êêÎÑ2¤@Â%9Ž°ýag(D0ùó‘:.žê/¸\nƒ˜7#z5’­/ŠL\rààÀ‚Äˆó;çvŸÛj¨¦¬¾æ²4.Úóp4*O,Ðp`ÊTdä†¼Ûà¬ Æ ê\r¢þ)# Î“ FAmæš—E4`ÁjÎ'ÊS˜8†Ž'ê\0Eo~ó¯‚ñ,0Oæk!”[(.N!Qg…(DË^jC¤µîÞ„ôCÀt°áB>\0";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–æ¹lZæ¨ã*VæŒ£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:ºø  4#²\\ýL³; •-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7áV93Ã¤ö/µ£Ü5„Að’6¿r2â:xÂ@AxÔK-;D9²¢˜¢&;Ã*H ŽÖâ’âãŠRË¶†X#­†b•c“À¼¯këxÈ ô2Zn=¬â.’6à½ãª–—±C\n¸µ£ @ô»Ê\0vÝè Î‚^wuà:.Îj6¢€\"(h—ÕpšÔ Ž­@\$Ã.Ž€Pˆ2¤ª9l%ƒ¨ÊXþ#MXÇ3\rèh‚3¸×¾O‰#*¸Š¯ìØæ:Ž@P¤€+óÊ•Êë`Ô•\"Ã¥²9CÀUyEBá¢ÌâÍ&Œ¨æ•¡¹ Ø65mk*9Œu›]„¬¯6m\r+ØäíOÃ¨÷Z‹æ|X¸D½\0Ì —ª¸höÀ4HÏ\0§gg'Â¹‚%½Þ³	.—ñr<È4³lîP†Ôã‚Ç¦B*QÏB’—\n#×\næþ Vó.Ëã\$æŒ|\$dO*9œ±ìŒ&Êã0Ì6Quøè”ÎC:þ*\rè²V7;-*:Œc>9ŒØÒÞ7¬Ô¨XÓíá³¾ãrswQCv2…˜R’!ëšl³Þéx†)ŠB5l-@•3>M}\08>XÃk)o<Õ6à@‡¡Ë\$)hôHò@g?¦UõbRpÒ3)A†MQ’ðÌXÛ)):\0€ ¨•žøcRä¤2\$@“ÃOdéRžÒÐƒ:­Uä)™÷6»Ä)IÐ—¯4äÃH.^*5z}Êá–6a¨‘’TÙ\r˜(såwPð\rñzŠPà4'”öŸSúPj;¨x\\Pƒ’SŠALFe(¥”ÂšB\nq)õB¨Õ+.R!+t¬‘€hV¬8•‘£îÒIyê®\"Dd.€HŠ( !å¬vpGƒÐ8„aä´×àb¹û?¡¤4†òÖ[S¹B#ÇÐËÅƒó(QJ;C@\$ô¹þ@\0€§ÞC‘ƒ€~„xÌ¿7’Ñ [z(c|aj²\$ä¤•’Ò^\\jW,µ –\0]ÁÝAÄÚ)&²jMb±¦'F¼…‡“ Þi–6Ä0¸®ãPjŽ0qcÇ‡\$w#¼65Ä2D®\r9©%äDÏ@¡\r‹Ù´Ša<)…I²ì¸ pí\0_#X®ëËŒñ\r(8Œ> äzOÒˆm´¸ÓPÜ‹*Ð l¾>£†‰%!öŸ`)ÞÑUDÙOØoQ‰w–ZTÙ*p[€`©1 	÷U~KÐÚ®RŒ:Ep±£\"qI:1R„<½Ø˜È¡h\\ÅQ1Sp°kár_Ìi€Äªr¶gÅwMd\rYÐëNûX:A±©â\\„¤¤Hn]nL“¸winUŠú¶Šâý´DhŽä®‘ƒÈnLk¨P’ÂÎa¦‹ó:	Þ˜9ú%É#ŽoNÅÉQµDŠm¼\"¶d¥ÜÒzbß’äpá­Ä‘ë{q\"d\rïX9ÎÔƒmPK¶á…E\"ãÊ ©q,%äý†–ÂGT¹%é-ät¬X	¿˜“YYàÝMIÒcN0dà’ô<†¯¾Xé¡žF•]Q•’	Š­q¹4ˆ˜øCGaÁõ¤‚àË˜d¶k­â`çã4­Ùv©¦EâæY-¶]ÇÐ;ÍÕ´^Èn\\S éèjJu[æ÷4ò\\†( %“)µdnÎ–ó>ÀM¶YËêÛí1Xg€ñT’ˆr8–\0Ï-!_rÓiƒ´8½Ö±B‹\\Yµ]§¬*)0¸‰Ô‡p’ìÛ9®œâ4t*R\0A\nP „0(V_3ôÚP6n&!\$.Q¶ÊÙÑA.)L}zòœ½Jëkäì\$ Ó«5IŒ`(*êÒÈÆ}&hBz’w8uAÙ¼ëQ|Ú	v¸úèÂ”È§¯Š9Ø:¸l]m²NÆÌ×›<tï´í¡–å»]L\$Ù¶>¡»¥Üƒ®íÑ²\r–Ù\"šì¦jÍßº V¹Þfom¯º÷kÞ„+o²þÒÎñÅ\ráÝ¬“°ËcÄ²DøÎ!‚1Ä¿(úV”_kBK– +Š#ub~(%i,’Û‚ð%–Hã†²æ³]‘ã?_`~È++1rA1ÁÒjø°›…²†BnìÛ#˜„KÏÅ€.\\{=ôús·j<ÜéÛG³{¨éfæ:ue²œâKÆI;êúÿö™C4'mÂ“\"ãXŒ\"Zš9x„4¼¸KeÆ‰&Y†‡™ÐüÌC¦øá¬º8KiÝAÌÿ¤?äÏù˜\"VB»÷Ð×ßü=ÇæÊjmkò)(h¨i)/û\njCR&À¦Ù÷k\"Z´Ïr=ˆ–†yÔî»^L¤«!¯·ÂºK¸uÿ‘îmõÑø„G¬|€§ŠÉ_e¶¸—ë}„ï×œN-úîÚXúo‘Ëy®»eê¡l­µ³·ªí{{bgoØ´wþ»XÖÿ¨×è¢/ìÏðà.|íZÜ)@üÌZ7®¡\nâãb\"ìÎ¦›<p Xp%,­0%ì´œ/ÀìHÉ,–FF¢7â:%J5IÜõã@”åÞ•B<aÂ\"#­&#§<{ðVpZ¼†¾õÂ6\$^”ÂÉaV8Šô=¢–”¢Îôn6:ëz›pŒæÂŠ(æ|ãáCðA,›‚Îì‡TÂ«fú£Ê³Œ«åÆÌä\$\r%·oªêÛ\rë‰\\ÆÐÜÇšü)¸ºkªcò<Ï£Uo¶¼n´Ï‚)°8\$‘g(î)¸éE®ßN Ìðüu#Q	Ô,\$Ö‰ÂÂ<âîDÞnCf:°Î¡Ìîý¯´¶Ï€ýQ_\0¯þÛÊ=Ïî-ÐFùþÚ\">d¦^<~e†š‘u\0…¤ñM#Ç²Tq‡×CÀñ–K\"õf\nI=/¸üDûîâ“±¿êŽÓp\0 Ž!PþWÚF†AY/œê‘Šç àæQ¦C1ú9ŒºÌ±Î© l¾¸Ðâ›’I÷ƒÍlÈI19,Æ,ŒË€˜E\"ÕÄfIÍ\\é|êPï\$ ‹‹œz\0BrBãqzêŒ’\r ÌBüÎ±’ý­~QŽ¯ÖYÂþ^ƒ2ýcd(& r€ãÍY(k¸­çÔX#gí«(QtàŸ)4ÓbDƒ²‚]ÎPfÉl	Ò*\"þ\$È@7êŽ)Jc(Y„HÈä×!pÿ¯êüÍ¤ÿ„]p..Ø%ïâÖBHe‚\r€V¢ËÜ\r`@Rê¨èæ<VÅdK2hz#¼'£82 Ú²åÞ2§È\n ¨ÀZ\0@.(dŸ\0Î\$’þãn.´ë4â=5+[*rð1n,#3T~\0Ê#žGdîwj\\æô ›2\0Ì&t\"¸ÌŒZ¬¤	ÂÆ-‚öQCŠÊ%®8Îü/\0(´£Ú€s¢Z£’/,d²‚DÆ%Ä¨Ff\nºŒ˜iJ¥4“Øªh8ÆðÎ€fÎ68ÀôcK0-NÜð%Þ ìj\"¸+aB?ÃBì3~roŠµ”í(Â*ÎJÇsýÑeA£Â5‚à%ã&E³2¢€ÞJ¢U\rÈÔiTDÑ\rãÊf&fZë®@0Æî†>IÎôFo CdsRf¢²„g#bm@+æ¦tê«À<¤\$`ê Ú@ŸD…?#Ü\"Ðx”¨MFØ Koìè&Æà\n†Í@´ºLd“A“Z´Ãä>Ôb÷gZµkH<¦BL¤ˆ¢*G¨T²ÌØ0£\"”K¨uÃXB`";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ìb’²OcÜ†JPÊ™ËÐÒa•hkø:#‚HÉ\$Ì#\"\"(iãúÀ¼¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±Z†ÚŒ#šH<É#(Úæ¡®\$*ùC›¶0Êb¸Â1 î¦¸ TXÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€Pxî\rpÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ñÐÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—JI˜èã}„b7¥-R	'˜£#¥iªÿÊœœ¹i\\æ1«*:=¶(ê:Ž@P¬¯áè8I²uÚ£¶²OlvÐ'+Ã­ª4¥r˜J”ŒCÊVÝiÝ‰oÌ‚ÆD²(‡ ÈCrLìBë[\rÉä„»Î³0Ê3#¨ØŽÃØ:È¢\\Ã¨ÝbâìlRÈ‹Iû–º¸˜“š»XÌˆ‚3%ñ2PÃŒ±3•	\ri(@ÂŒé^ŽDøËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.›{3É•Å¯l²\"œÁ); Ô=/Î¶6»›&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ms›¶C^/‡Ú,Ê\nì¥ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæëYœðÂ3ÆŠ*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–2:Yî:ŒË²v!º@à®Œ·7-Ì#on’7ƒ8ÈšŠŒàÝš„‹Ž:À3¨@ Œ²ëkãÚ\r?P\n­HC:\n±W9eª“—	^*%Lâ2ÒÈûÔ3ÏYì.b¢`Ic™2äÝ\$œuÀÓÅ?­é¡·þ“ëP\n	B(eÔSñQ¡ÉG©Å\$”¢\0RðáMe8@”ú¡|ê‘º%úªÕj¯*ªÄ…hOœá*\$\r™6Bö¿‰¨Stˆ	X“òˆ÷Òøt\r&y’>a‹ùÂ?Ðé\"Æ’ŠP]ù@\$G\n™#hfÈ5¶“²AUwd]Þ§†ÂêË½XD›“’vOS¢)8nøá4{Ã£ÈyQ8 RjH y3G\\4•ÂœEIšµ6EM(Íƒ1L'¯Áùsbpƒ/WÄÙ­‚8MB€O\naP¸C¸lÊK)²eä˜¢äìÏäN;ÅðƒÊS®’ÚA8’p3rYß¨nC¡h@ ÊM\\p h…Öòbµ‰ÀhÏ¤ÓÃJw0TŽÅl¨ªvQßL²•ÈâPŒ]ƒ)x(¤1(\0§êa b\"á8P T´L@Š-KÔ—†Ô¶”ÂÙK„†ÒtŒLÙÊE71‰…cò~ÍŽ'é¼'†Ù¸EÃkáZGŒò·s˜F#„‡˜Í¥'VÐš`eD\rGñ¦d—Sn\rö«8RX1‘\n1Ñ›´‘Ù\r+pÂœÒLó³o%Á¥¢F*%Î\"¨%«(çcº–›äX ’tìï–°l@h¡¥ÊbNbû¢ÐÆVÊÚÃI\nKíS°4‹–!+O/)¯j!c‹k íš“uZÈñ\n%&”2‡u¤µ,©ƒneŒ<ÖL­éEjë„È„\"˜s!?/¶7Aó#Aä¸g¡a•×zÂ²ºn!¤X*]’8që‚¬D6+*¨2^Œ[—†=hÝÈPÀUc\rîŒ2-NLòþ\"ÍQ+¡w«xY\n!„€A+ˆl\\r\0€Ð0ækÝ¢ Æh»<ƒÉ% ¼a£(G×)2¦D(±L0AA`'çë/*÷Ú[‚“ '×<{ƒ¦*DX·ù*F¯\rÁØ—Âc\$pšHdimÄác‚U=±Y—^8]Ï`÷DIlÅäïb·Çˆp>&JUÐÖ\\³–ñÒe½W°È¤uƒCxw\"Åe ™ÚL	‘ÌÎ…#<’ÙÝŸMž85	‚ñ'‚jºN „4\0Å¢Ž\"\nÏ–3=ÏÌq›`S5AÁ—OÔúp \n¯n½<`K‘/ñì¯g’¥£J’â(ª<ÛSo—L“V•Iýrâà“-ÍtÄ³TdýU=\rüâkÃŠù+c€Ø)7aìµ»°æ2Ú—S[ŠÙÔ„Aßqg›âvcv/kënvøº½)ÝôÓD»¹mõ¼ÚLÇjIýô‰5#^Äô3‚V\nWö«­V{U*©Sª»j çhŸ†Ú«SÚµ†Û!¯añŠ¿Æ¶YmšëgUVµjÎæØ½üs‘r‡¾×›â{w¯(œËå}/¶hË¸íÚaý?wÎ§,<Ý\róÎñg=Äq¼†ô‡t(MÒ3’T]žÆ(E\nêwS}ò±tnÕw¼¯aÜbÄQy×¹A¯¯Ø»K\n+(¯<…ÀÌ&1*_1˜5ã¬õHÑ2eêài\$èõ¦óßí„*…öØÔpN? w|ŽšôDK;Ìz_æ¨uª™®Q‚#¶4­ÔnINéß2+NÚõÝûmýnÍêÕWÖ-^UÓ´:Ôp_Q_’rmŸ×¾õUë‰)5¿ãû}µñó€¹Ç3åý\0ÖaõhÓM%¹¡¶îÌ7&ì;gá‡”ÐÒt/dè¨ÛÙU?‡Ñ/ª6Û{øsŸËÃgŸI¬soÔþ.>¹¯úÿ&6Þ®ÿËæýp÷†Þyƒ´ïN‹Lcn×of‹ ËgFßnÉ4%‚8æðäÐ2b(øÂ>æ&³¢gox\nŽöý®_Mq‚YG4ïp^»Ç«O†»¢ð»ïÚ°|¼5£ïø¸‹±kþºËÄYtH¯ª­â¿Ã¯#ß\n'zëÐ¼Clùâþ3€æ äò\nL(Ûã!bfŠëvY‚deâ4p*cPÓlgïÕ	Ç¾\$¦’ã©Ú®‚Z%âvcT_âúûm82(8XÅ–E¢,\nb„‚d®<]¥ \\Ì8\r¢¦þo^e˜\r€V\rb<\$&’?£„Üƒ²?„‚›ÂÉãÖï8ž¥b}‚\$h.¢ ¨ÀZ^~§~N¢jÅÂ>øÈÊ#Œ‚ŸÆùì¿C,(¯€8Qœñ %o†#4(\">\$/DËB Xj¶ôÀšV€ÒÌ2mâ„¦‚,\$d|¿£æ?‚<|à@Qä1E5be±`8£a0Rl#¥)m£x„’HÌðý\0˜ÏºFÉŒL².KRAÌaä·\":0±™ N˜.B€ÙK-ï.î\"%Äù&h>8FÀï¯i\"½2OÒRê¯Üêí–.B¦3ˆ&\$lÄQ‹dÛrb8.âZ‚,d0àvBŠ©dÒÔDêÛæ¨fê`gK~?Ò´N¦u+ ¬2¦ÜÇÃÂKåžJjf'F\$*Q`#¶\r„¡-åö_Â™\$…¢	¶%bú	ƒ <2W!b¦KkÀ,r(â'yRX(b,^ à+ÅŽJ?¦¶¾¢ä7ÍöXTF 	\0t	 š@¦\n`";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B°pè»#Ã+rç·«dn(!LŠ.7:Ccž¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á’`xŒ!óìAƒ Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒxÂ\nÊ‚\0<C êåˆ­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-¹@P‚:¬‹`ÖŸZlpÊ3#¨ØéËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË:Cž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|\0002…©˜Ø	ØòÜ#z0¹Ã0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†:yæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iH¨4b\rÌÒR¾8‚2aHW.1Î(3€ÊR¤­,(³øÉ8Á÷ÍD¥&05ºVÀØŽ—m¶Ï0Îôx²*,Ã\rË:’VTC-è´)†üŸ¤…*­ô°–ƒ¢\\KÉ1&DÌrhMIÈ2¦Ò–œ’tZ‰Ý<§¶ ŸÚ²„)h¡õ¨¢è£Tzd¢›ãJiÝù;5f0é €ä’¡›í}áÑ‘BvMˆÀm8aÙ¶ŒxC\"‘€\"””—æSÂ°>eÃÅóÜ|b§‰ä‚4…\0laB„ü šàPQAIM -Éß”²æþœ§u.­ÿ?”ˆ¾H0n‡fD9®÷‚JÊy/&&I›JO×¹ï)½Erúï_¹KG¡~hºDCËz HPàÞÑ]ÂŽTÄø8®sÐƒ‘žzïf=™’˜Òr––FŠ—2iù¤lŠ‹€ÒîšCÍð”2ãñŒ\rÎ\\¼9JN‰á>>…2-ŸfPœI0gUdzG2üOŸ€iCÐÇ@Ödˆá&äˆ’I’@TÀL¤™«¦‚ PB)A5ˆ†]%ÂSšÈÀ¥”…¸ƒ n_†P#´P¾ZNT(@‚-!\"„À‹JJËIri7Åæfƒ’5Fá2l®‚Üº©ãƒBl|ê’Ö \"\$u¤‘t*™õ9xN¡Õ¢¨ƒA%-*¬ÇR0ô\n{Smì	èºj»8Œí¶ÉWRP\rí09žc¬›ài.Ôp)£õTÚËâƒ\r,™§h¤ìŽJ.ƒÝ#”c#Á'wrÀl]”ï~K‚ w‚£8:Bí7QHiI!–PàèU%?`¡\\Ô¹U]cMiªôy­Z‘V\nÉR+gi•É‡1„µ¬³Sræ±\$ì4&šbÞ­N@e¨MÈ’ÑrûF…ÃÌ-áP´¸2¤nnÑ½»ˆ\0µ \$‘Ì”3#…-ˆ—Ç¸Ðzë-E‚…%±Õ£ma\r(æÓÔŒÎ]'\n!„€A-mñý=Æ®W4PêHÚÀd)”“‘“|`	<(%½b‚\0^Uñ)Š‹Hâ£\0Ës[š! žÜ¾)1p\0Ó+\0äB`(	Æ[ãPAñÎ-1e-ãìLALe+Ñ•ÍãO‘IãÄ³ß\"LhO1°KØ°eÌe—²67%!,5D\$L™N”¹í¬¤¤âFGHý Î³ó<3@J¥C&³Ð#¢\nB‘€\n\ná”1Q2@ðí”Í‘øŸùøòì—\$÷ÑU“V°áo	œ´+šNÉºhP¿b‚–K)…º¡ÇšµŒÚU(83t\n^Ì\\=Öˆ<é\$giÍ‰tÖ•—[Ü‰»¬È2Û\\ì¢?&ÍÙ²0™^YJ?5-ð2#ü`É¿*8¡¡ä+ºIœ^/xn·»·O\"<V',¸ÝêPö–·ß¶‰gÓã˜©Œ ('SJ¸Je`='˜ÂkX¡=8|uJð’šc	\0øüš«ucˆk½±­¸Ç\$ã\\šÏFÎîÝîËå§—Í¤Pù?æ¡Þs}£Ës^1×ý%ë¼°oòJ½‹Xô4ã÷šoö~ÚÊS4f“‹ˆMé¹=uÝê2¿I²×|Z³QfF/âê|BuîÓØzŸ9ì·IÕ7\n£.´ç¦E)w AWš­(=g¹x‰Þ\r<TC%¦Ë¡\r?}nl§½Í¾îÙ«8‹|©ãEw;éM)ð!Àè^Ïwû?%WY\\†uvnÞòœt\\ncÏÕµgöÜø‚ìÏt¬½¾¼Û3ÐÝJÚ“pÕ˜EÀ]O²k•û_@À?Ch|.gëÊkÕ´Â_µ_[ã\na±l0P‘¢O\"‘rFÇ/Î%,]×)Ëê)›êüÙéüú/,÷%ï¢w¾çO°\$¥ÚÞDn»0;jæ/¦îHJØhO°ûp‚×UdA)ÆÚåbþÎiÈNÿÏ¸îc\rp>ú/÷\0\"ƒHOFÁð>Y¥žìo|yÐnçþîp&N¦Ád„¼‹Ú*Oë%š¼£§	pŽ4M¯œ¹ËØ¼Ã—C	\nä\n„(@aˆèHDd!0C	PÊÿPŸ\r-¯\n‰èc\0æ3+úÿ éž;iä)F¨9kÈ)ÃØnJ²b,K‡ Œêêü®Ÿir®‚†=ñ\0\0–Ye~RI*` ‚Ñ`¨ENAå*:ãÞ3ŠýìtéaJÉÑÉG¾òPž€†@\0Ø`Ö<ÂòÚÜÉž‡h~5v›CðìOBñCV™àª\n€Œâ»DúRò%1J×`Ò¡£~×ìÈë¡DPžŒ`ñ§˜Ó>Ví¶)o±ðÝƒ–8­Z@cÄócŒÑî‡CH8n5‚,5Ñp¢£Žj:Dä„6¨9ƒÐA‰®T@`b0óÅÄ¯ÃY±Â5Î\$¬C=æSièÙÍ“!Î9\"¤oèÛM«#\nÂâƒ¤e àßr+!¢…ï¯\"Ãe%.&¬j”&c\"®Í!ªÚãzùÖ_kÂðl<õ­’9`š•âÐ1ÅEë”brÐ¥bðmpÉmÂ'q0¥ÔhRd-Â 0\0‚-ªº ¦gÂZ±/\"f\nÊ‘l:2NŠ­æs-Y2J^0HMãÀÈed  8bÖŠ&B¢.\r ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*2(0ÞšBcÈà>ÌŒÏ\$c'£läOã0¯ð@1C\n2!\r*\0å\nhz’ã(ßƒ’ì	ŠË„\nLLbÖC\n\np\"h9;ÉŒ=£ï8‘%#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(#C 3¡Ð:ƒ€æáxïC…ÃÈº¿ƒ\\7ŽC8^ˆRcÂ7McxÜ„Mm\"2Ž“è¾1\rˆðÖÂHÚ8\r‰r :xÂA#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…Àƒšg#¼Ûj¡í¤¢M¢t.2È‰Œ‰3:!-Û&NãyÝì¨î	cxÙ¨Èá~GõxÂöBê§HÜ1²3‚`êrü´cjPM§ñábØåà#£pÖÓ­Â\n8þŒ9D =YÌX3ŒƒÒ£\rŠÎ)Ò#žÕ³±\n1ËÒ*ê:0éHêÿbêR0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çcj®‚> ¯–›šÁº5õ€&Cxè;²¸Dbç=·¯&¾dÍ“1Ì»ÕÄ9Ì‰tXïn{ªåÂ\r6)ð©èéw ;û“2Š¬àÃ\"³ë+ü³}UV>9i*uÓé¯Y½—Ù6ï“\n=ËÊÎOïfBºàPÙ ¼h*„„xÌ3\$Oâm¬LóKÙ4O²V–Ž³/°²£AèÂîˆÂ#çºãcû*Z¹¨7•oánX\\úƒ'¬«Œ¾Ïo2{…Ÿ¼ø1v|‹h9>sXúRÁ F(%v¨Æ_›õ~ïaí?ÇÌÿžúh|-žÁpÄúÔ	WÐ-÷@àèM‚qsD82%Ðî@Špk\"\0€!…0¤r¿ƒÇ‡2ROÈfR´:ªWcãÏ0\0¶>ÆˆI?!äØ*…L­¢r>©¬7p@TZ5@‘¢)€Ò  O\0=TøŠ‚¨4e\0:#PÎ¬U™6J!Ì5^Öáð‚|o±è¦¤Øß¢A-yì…ª´ØØ—\$ ä¥}5òWä€a‡1®6Æôþ T…Pæ]E(Ä£Ôˆ/UŠUK©•6§KâŸT ‰QªVLª\riUjµ‰3èð­¼?a¸bUn¨Iô*¾¡ÂæÓaJ „° ÌòRMOA=ke\0ýg’¤Kš©ÔÔ‡p@@P3èÇ†ôïP+gC]¨£ø\\çlï@ŽõqN€ }Iy1&eÙ¡7¶ÇÉLÅFu_&³è\\›äÅrÏð\0Rþ&ë“4ghLÉ±\nC,+Œð¹_&%}9S@¡¬ø#B­ÉÉ;hc\$` p2¥ü¢rÉÑrAO˜šú1Ã¹0S]ä²0TÑ.Q‚S×ÈŒChk#æ±†,V«Jì‰¥Ì“Ñ§ïCD9Z¥lùMôì&X±H)U¡ï‡W¼©ø™¨%Íkêh\0f\r)¤ŽÐ`Õ_êWõ_*ÂFj[z·&ð‚— îG\"J›‰Ð9%2Ýáq*OûB»QŒºul‡†Òl×ý›áŒ·:y*·[is(­ÒvÂ@C‚Š\$•ðÜ«|ïÕÂ\$¥±’ÈpÆÂrN:0utkÃ\\`é½P êÒDKjÂðàËŒA×š”pî£ßXO	¡œÁº¦ÛÞAo‰B4FT”ãÀx©º'ÅÄ4Òöø@«A˜IØ!ý†‚æ|Ká)™×58Í†°z§Û”>•¡Ä7GaDvÁ©#5ÊZA]#z¯Ë,¾B2©\r6E˜7¥³Uª*²Ï’ðÇDŠ‚fƒM˜GÒŽˆÈO…¢l¡“Ü¤-¼„víÒC\\«HÑ(·Žòª@ÒŒ\rÚ)e¡éMã¿|Q*3´Œ•Bò0î¡9±rH»,ÈÙšâÙ[gèìôdsâ\"ÊÅù0èÐNÓ‚4(×C“¹æ.`(³…¤©©Lä¸D!‡1&.À[äÃ=eRÐ½5z¡~¤ÌhNÎ¬q@žiçÆÁá¸pÜ9ï\röÑû\"jC3%däô©âÂ\"ÊÔúqº±˜HT\n!„€@C®t  ƒ«æªäÏ\0pu†”ÌP—~›»l#÷}÷ò¼û—J‹ÜÇ™äw¦ñ2x¤Ùî¢AÎÊÇ¬n)Z¯_q¡O]»è2Aú__\0S\\\n'ðB[ÁÈy¥ûÃ{8 ý8}¹âE{ñX£Åî#ã|/Ž™C-\n2ù¢’áç€ÒœŸçæœMªÀÇØ†ø„S!AñmÿÎù'\nçûúMt>‹Éú?5é[§ˆH•ÀL3F\r.Lør2FÈëë±ÄËqØŠªú£%”*™q±#	I\"\"¨HÕ¬Ôîvv}æk¼™üøìw|Ù\$OMdæ¹2\\0ÅBDËöÉëd,¶I¼‚A!#)†ÖƒGfÁÃÃäH0k:XÁu`ù¬ ¢Þ®A\$rß]„}‚1YáÔŸœîíÉ·¬ÞXï2zþdö¢¦W(?Ü˜GÓŒšB+Ûêï—Â8ŸÉÐŸVŸVæ¤;‡Ò»M´šðØáù£ÊLQÔ{ŸÌ¹Á?-ÁAŠœÕ_ôuØ·~;´ÿcN6\0®b¯Ü6\rBª¤Â\r\\ªO°î ¨CC|\rÍ»åú_àÚ›€PÒkÄi RDk¤D@„L\n&ÁÏ˜úÏbú\nàüP>rŒp¸’#nåB€ÁH®Jû¦©#Øû\$¿¬ï®ã,húG q§%ðNã„Lá	rü\n£	ŒE‘.47\"l\n®þW Ú=ÌN×¯—Pqdn1N”á‡æ×Mx¥£é#\rÀêðêâpÏ\nðÒå®?\rƒK\rÐÂõïê(îá.|á…ôµí<¶pøÏŸ	Oh¶æÓíC¯på0¯1Ô\n\r	Ï¿p°Ñí\"ÒgÂEÃF¶„Îºfp`‚ˆƒä¢BN?\"l\0æ»†À8BÖ|†>!ÂZ\rÄ‚Z?-B®õâˆBàÊ5‘Wâ@RœVâØ>iŒHÑ‚®nOd\"î1\$Fúo·ÑRDMÙq”º°.¾Ìþ[‹§ƒO¤\nÖÐ0	/¢*qæ·ë	ñ@úG\\ÃÈ%¼9†°ØÇz}pàWƒÁ†Ø¦ èBUhÂÀó Êåyîà›\rí’0%¬:qRA!êÉä`˜¦ž`‚ZcÐ8ŒhŒÒWÅŒ<\"òLlë>·å@@…µ‹¿Ár	Qãðý°­jT×pû\rò\$ùÒ9’>Ø&L9C™#ã9)ÍzM±ÿ\$’¬Ør¼uè)\0ä[àî°§n5D4J\"&†ÇÝÐRRßRå*/½OÃ.À×.Oï›\"’¨ZÇ.òã,r\0qs+	ÒŠN/iàáÒù\n-.Zñq\$l?-†k\rUÐá.–Ôc Ô£m\"S	3A4ìÇ2Ð¡2>Õ3\\Ì¿3³h'ÍV e!ÍŽÌÇ@tNñ4q2P³8-Ÿ\n°ö€«9@*ÓF:Ï€7h¬erlÏç,ÄDs#;¤†ÌåÄ3s»Nì@­Zç§Ü[Á\nið×<ÆÌéSÔt Ó=©á=î}>+xåã3bª0¥Ø¿CÀZÐ½> Ó&ã€ìã¤'Ú‹IžÅÄ T ì¡¬Z-“3å¨#°ò]N>ÅQã…Õ&¤H Ø`Ö*ª¶(Pi©˜\$â¢C)Ã )+^1+X±³ûÖ\$Ãð)BØ/‚Ì®ô\n ¨ÀZmD\rå\n ÂµFzƒn?IN=ê¥I¥WIó°~t¤åÉÍ!'ÙIÏÚÈ„Èæ|Dº#	³àÄ#¦1âäü¢E3#ÄÆ\rJØ”c?Óš>ãXÖ\"J9Û”])qd>ƒ ý¦šJ `0ô-\$@¯QÍ8¯+h5Œ8…ì0v.¼ /R:M(ˆG\"B´\r\"&0®›>U´©'‚Z•ÕPÊõBõâlk@À´³AUsŠ®^/Õb÷„h|ƒu{W#R!€ä[M\0[«Œõ`XÏWÕ6õä”àe¤Ê\n`Öý4nI	Ü.¦uÀ6õÇbt·¥üžå¬\rG-ÄŠ¦âƒ,=Bi«ËXF²ÎÓü\"_ƒ\nhV…¡uÈW_5JŠ·@jyG#øIŒ\\‹î3á6`ƒi?Ä£/òð-Ä¶B^j«1 žrÀÚEäbMbÜ% ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯:V	ŒËŠ1-¢[„2ÀR£q;(:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxDßC<‹?ãØža|\$£ƒ_9Áà^0‡ÐXA‰øÈÙ¶¯ð¦(É*ü²×ŒtÃ•5IˆûÎå6/8ê:³pÄ±lk”•+ÐÝ Æ&6B¼9Yvl6'\rã²3³í¢[ŒCÊ„·EÔØBÞ6«Ì8^2#.,€Ü1³µch6[â¡9ãä\"¯Ðê6ÝzH\"šJ2Ø.k#^®´x.«¯¢‚‚l1ÛÎ0âá™Z\rƒ{½‰ã”2¼¸ÐÎ\0Ø Îtƒ\$ÑˆJr§©üŒ¡4ªä ãÈÄ‡¤ÌE*lpÝ|§ƒrWb`Á¼€PÎïÍìU°Ç%²“ý(X–~Íi%­Ž\\ùk­µ¹Ãb(ç¼KûT­+C–L4µÈÚïUòÇˆ£ÇÁ8ÛªV–êL(1MgŠo[ÀÎÜ±– ã4m*Y*\rã0ÌõÃ*p€Tfp‰¶)œ*\rêz<¿ìê1 É\0Í‡æzîÉ˜åÞ#8Â¼…ÛYºHP9…=xÞ5¥\0†)ŠB7¢”¨OZbTå%ë Û‡¥‹‹T·`]t²/¨Obö·bÝûµ&ääÓ†àÖlƒ1üRá¸3°@Èìˆ;ÉaFI²ôòi“â~*\n˜¤“Ÿr°'Yür¸	ª/%Å“öÜSk~p&˜gôGL0såÑ[ÂrjuDOl5?(¡2ˆê*¨Ðä£Ôê’S(”)sš¦”âžŠQ*ELâUY(…X•f‘U²¸Va…î=\"‰‰=ŒDà ›#&þ\"U\$„	d§Cž[a2á¡	ÅDÓ‚q(\r\0‚ 2ü¥˜ù²\n (3l]Ž@’r¼„ÌXs#Èˆ’Âp{ãg-4Œ—€ìùQa'Dáœéb”\n	C(²5*åRGÈéh(Ž`ÂbÑ#è>ä´ý.#¤€#T*œ‰“H€‘ªb)Ù[«SzgYq^?\$Ø2 å	˜n ¬ÄÿMäJó_°P	áL* \$j•Iâ—p €3¦æ´ë?Ô…’ã|ÖZ4×3AŸ9°gcü¼9¸˜64Ý+Y¢šíXÿª Þ†(pb.Íq^ÒkØ‘+*IRz­Ê+ÓŒø»@äI\"zñ4ä‘-²z§¡IaA±Qœóš‚xNT(@‚-H©A\"„À‹Tê0žÇ1z/eÁV’€P%ƒQ+CÐN¨Ar	áÁ2@ÈIŠÂ%¦°a‹2ˆQ›u8‡	¸‚ËºòËÃ, Ž`4‡„|œiÀ\noÉ¥Í¾9^(_4²±IM¸HIÏ[²…H1‹,\nä”\\Í–FNHåX·4–JÕKæ±™@\"(Ÿ‰B\$†dô­R‘úª[5«…bíˆÉPJÈÜ¦é^*PùÓR±T¾É9*TAvŸl(£\\; VazNnEyÊ³®íÌ…\"M1\$äªV[báŒ„†Kqb=µo’ºX>užnL¥ÚGR”†Pî‚±™e—m¡˜EF†kDÅx-vàF…nx5 º©àÚŒÖIx.X9lœjàÆ]˜C§iQdÏê€³‚¦SÁÈŠaû>‘ƒ>+ABaG#œÌÀk;2¬V›„ûÉrdÖ´Å°\$ÖIr2F‰bÒÕ—IÓš\\©áP „0quANžmI`àãâéE\\¼Ñ8\0ÄÛÓå…éº”×b·ÍÆ€Š/'}šóYp©äæÓ=›ÈfH®\0œí™Ìyef”üåŸó¦Ðs\$ŠÈ¤\0ÿ©y«°Z+=Ó—§ôBu\$˜®g­s3ƒ~ºOœÝCµœÑ†É…j“ªÏHxÔÆ= –\"Mƒ¹q2`åÒ–z6‹£	Cc!*}h‰¸'Œž4¶™vÇ(ûU-LBZÃ(bAzç]ÌÂªS1‚n\$Ç2‰3XÉ¸–îçêI÷‰		*º—VtUKŒ1lD½µÉ 	)ì/7ÛƒšfÛÖÏÒÒ3#)}‰Ö:veþY.2axzÑâ<zðª2\nÝ¶•Ypû\0¢Œ“°z.ˆ(Ö\$õf’Åb!ÅW4ÉÎŽ}m^•ô\0Ó+9‹13¤Sá\$Q¹ŽÒQîü!Ó€UC^¤kvŠÁO*²m®Ñ N9Âì•¦ì¦p”\$HTN;Tö²ì\0•òžâ±9ªå.t:7Â´%òï¨ºxùß»ÊÒ¾Ø‰¢]Ìï¢u.‹Ïš;¶:%&I¾†ÕÌ?Èk¯\$n3ît&È0è/0ƒ<a©Ä´ü«wþqd½N\$§Ð3ÖøžF…±žXþÒò~ëd£­\\ëvT—aWºßÊöFlñ´xÎÊ1³ê¯%ú¢þMOù\$]8“Ã­ŸÃM8d7º\rœØ| ä¡`Ï¿«‰>½9ö>ëzÜÈgäÞ]DÇâîzøEìÀ+Têô²PòÎíì\0IBð®RÉªRZ£ÒÉá.p€`‹‚€â¥4÷ÏÃ†Ð}04^&ì%°2ŒBä2\"Dc\$(¥â…Lféd´N‚2º…TÐcŒÈiŽ(°T³\0¾Ðx:|É/m¢ql‹ð†89F8++¾ÿiT®fOŒÇ&?&;\np´9KY°²ê‚<Kæ&? t–ÝÄ²ea†Eþ¥P,ã¨F°ÝÛRbÐï\"	\0²PD9C'¯ÛíëÀë\rðü\"È+pã«Pœÿ‡(ê±úEðÅ\"ìÅpç^ÅF_\"€q8Æ&_	£	â[ìdÿÇgËâ 	pT>dÂLfã(\n±rp\"[‘¡Q('\00ÀÐ·\0Þƒä6ÎÉŽ¾'ƒŒzpÂ€Cf˜Gøó1­\nâ@˜ooPf&p\\ãTW/ntMèleåªY‹ÆTcSãûÍ|3oJÒq¸¦,òç6BÃÎ\r€VcÖeÆ\$!DÝÀÄ3ª\rêæÓpˆ0@Zf\"¦¤ä¨}éÄ0‡Æ©`¨ÀZºaC‚pÏÏ,¦-ˆ|ìâò¬Þ6RPqm(Bš#„<RéJv‹<ÿâãìÁÀò½åFèB)CÑŠup€Ð\r6/Gô%’(GŽCa†F (¢ä	Š?\$c»+J@(Ò7sãbó‹¦>0r\\Òx0Ç”^®¥-Žº[…þ¿²­ãe-hG(Ä¶0Ç^7ä÷#{¦…Âø'*TròMÈù2üÀ£^6S§º\ràà9å¿`É/î4@\"Ilfn@ê3%†±¢ó.îJ0ÆÜæ\nÐëëKZ'Î¬ûc Ëj°#¬#\$’Ã:½ïFæ&P@\n‘3\"òEC·ÂênÞ°-è'2äm\nþ<¥–¯Žîss¦_ á'ðùpð%lZSÆµ*\0FêøC1Âí¾äp";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œˆcÈ•Œ)ÐÒ·ØÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ Pè„ÀE‹È)°Ø#Œ¯£Þ¾Ã¢c>Å\"âœ–ƒÃ¢š–©,Ûï”1k¶•µÀP„Ç<pÜ\rFb+£³b`Þ¿Ñ8äžÉZ‘°ÐÑŒÁèD4ƒ à9‡Ax^;Ðt4¨Î#\\¾ázWGHæ¼ÁxDáŽC;ß=ãØŸ\ra|\$£ƒkº!à^0‡ÐsqŽŠ\0ÈÜÀP¦(ÉK<¶ÚŒt£ªÞ©(¸š‘=OL:Žƒ¬r#b\r4	jHÙ–rc=VE•‰Ãz¿ 4¯RôÖcòƒ7 As È¸†7ƒ«\$ UßT‘êôËmðŽ6Cè¡ªcôö¿£­h°C¨Ë]Œµë Ê×‘†SÁm½˜ÉbøÊ.(4ã¶Í¦Œh…„bÁBxå\r°,Ü7~¶èS£‡ÉJŒæÎ\n\nñ ÔŠô ã¶¦*6%,U<ñŽc}{>‰ò«[‰€SóOÃ˜ÊY¶{«/À3ë¶º`Ûäï¨‡\$lãžÓˆ»vL[Ã0Ì˜ûf4ˆòÿÔ‰\nÊ£Çø^Ûc†ÆSàPÅ0gó‚n;~²÷bYˆg3mSX—¼cxÌ3\rŒ\0Êã,Òt7¨)ðó2ã¨Æ…\$c6”Ío(X‚Ž]xÂ3õ3kVtE2…˜RœŠƒxÖ•„¦)Ï\"X¡ôªH\\LÉkªŽËàÛ…%ëËb»_;À’··[C!L“{æ5ÃpÖÜ|)„\0Àá\0‚AwlË•FPMjxOEaQ“tƒ:ªU‡Û­2ÆáŒÒ.íÁÃüLPgaÀµ\0†å¼O“ê	¦9g’Ã¹|Ve8¤‚öàBw©å=§Ôþ T…Pî™E(Å¥PA+RgAK)…4âžT\n‰Àªtå•iX\nÁY+BzóÏ tMÉÁ9cv_\rú633ó`mÏ­1mðÉ½£8GB‰0è„¸€Ñ²0ÊJ6…\0´gpr€RJ‹22AÌ†âlJ	ÉòNA¥´æŠG\0v{P0“¢uŒ¤LE¢ixÚr¥DÅ=7•\$JÃÃñ–ïlýúMÉ€a@p¥WI’*MZ*†Æ1ƒ²p£då˜þrÿà	0V/@1²¤¬Npwï¨(ð¦ŠgäõI¦@@ÑÉÙtà @êC‰‰Ãg¤rdÌ'Ò\$6*eÙÈÀDG‘ÌŸ˜ )Ï’|€•0oCTu—à@Õã|<ox`©\"‘ä–D20ÍSèE’™C¸“ sLO”Ô\"ì¤å(ËBp \n¡@\"¨iÀ &Z~F2c9ëÅy­ÔbäB/b‰X¶xOŠ-uwþ\\ÉÕœ¢”p°É<ÁW§Ö´2ƒêCÁzH´¥ç Ø›ËÖ”B…ìÊU˜³‘loà7†š8žób„˜XðäÛY.±µÝ¼94”Y¥y d0U…gÊPÉ9Ÿr–`í\$MX)´}\nÄ.*àt«¨Å”B¥£h÷kd4ˆ+\0)5X’8ÁŠ=¯·ad˜ ÒCŒÚïSò|³“n;^áÁãØ²eˆpÉ(W©G¡ZÏ%Î”=\$¢C(wAXÏ–+šãèÃ§f°1¦Ê´	-ôvŒ´¾© Ú{#€hkY41ºÀ¯‰€C¥‡¸¬S¼`É:¿ªh9Uã%cá~Â€((|œ™I€\ro¬V›ÐŸ¾®A¼éç(IÎŠ3åÄÙ*tŠ—ÒÌ\nP „09}A®‚fHàáá»”Fœ°#hŠ–r]@¼´®£F¸M:éVy]%šuÜt2„ê,ŒEdA§w•&]&A˜÷¦@\\W{±Ê&2£{™òÞi4È˜0æÌìj#ñ?@g=8YÄŽs£\">åudö:›q)Ìz*\rü—›_NoÑ¹ƒG˜â,txÎ°hÜ0m.b´Ë”ÔZQ4”b¤hƒxw\"î4RfW—Ý#1T)1kršˆM¹ÄŽ™Ú¿\\CÒ#‡™*Å˜„JùUÙˆ”˜pÊ•vªÔdÀ®Âo‡	yâ!\r89”ƒÆBÏZÃ¥äÃrÏýÐŒÂBKbÌ¾°kxQ´;”:ô¤2Ùéž—ü°¬üÚçòr÷þX|ßKÉ›·òàÍQiðØcÊfc¶Æ'wÃXbQ«Œ\rŠãW9OñÝø×¹ ãf7“/Ò]bªsxqf4pé³¬ó*4fâq@äÇ·ÈÃ •:¸Æ¹Jª;\"æs’øÆ‚y¸¾Wé¿’yÉÖºÁyˆsÑ[Õ…LFÀ£TU€Þ\njB1¯ö:Ê¢n+aÝü+vÊ9.ÝÀÍ&F=Ëµ÷[ËRG)íÚÂXcÊ+÷r­ÍvðÃv£·Š»ˆ·òî!ä›&ðýdœ/c\\OLØRÅ†Ûj¼ËÞ!¢à3>æ×´}-Ñ>ž\rúœ¹žÍÇ­Ïæ>¿à£_ƒ)~ƒ>kÈlW£‚ÞçÁ¦:#Ç`Nù±½ñ°Á³ÇåøÞå¹¥^ËO&\"ø_žƒw,Ø\n7>öPUQˆs(ä®;´7Ì>ÉÐwçîtÎxôõ4û›Ÿþ8L9Â8öîO%ezÏÞÜïâQO<÷ï’ÁÏª½îXlL„ÊÎ\rã\$“¦¸Âì©o¸¯ëØµ¯šñç#\nñÏ‹«Ú3¯*ð*ü²#ªZKÜñL`æïˆî/\"{jáoùÐr°vð^ó¥‡+P&€NBõ‘c*,!ZbLN(ÅìƒE˜·ãèTÌÚ&\nÆ6ä¦k‰èôcëøÏbô5ÐÍO¬°Ï°Ø¯œ—Æ,c¨¾êÄ³c\$_ìj:§l,0é	g¬bH\"	Eèë¢ìçG\"4nnP,ØÄ¤&‚\rÐž¢àËAU‚]Q/\$Wq+n³¼Ý‘318C°˜¥5mü\nŽ¹ÐsBCÎ3/Ø^±Z*eêá\0¨ÂfQpó±I|á}ÎUpó°ì&‚ÃBÀÌ1`ÎÃ`¨ åë	,bßÄ®_Qi‘ÂK'Í„s1ÊE±ž' 1ÀÐGðØj(H1ªp13eÕGhÜ®LYåÍÌ´³Q\$nîG#*HëEìeG4]Oþæã0n–2ˆV4\rØ1E’I¥>61#b\"Vb¤4/ÏÒ]RF2î!\n\$ÒcÔ\r€V› Òdâ,\ràÄ4ió#öÐël:àÂ¦T' Œ£H¶@Ä1‡¬§@¨ÀZU0Ï.äÍðÖ¯^Í°’Y+)Ð23¢<\$DRbN%#0W:FÎVq°Š“€òGãèâ/‡\n¢¦¼‡BÄ'ì:Ã'Â‹r§FÚ7òy€ (dØ¾!tYÂŒ/DÔCGø·Š\$x®ž\$:çm:*«NnYƒq-í<êÃEäiÄ+sFä“J/Ž®®‰H÷Ž66£pù›€Þ†¬’3Z¾¼êî? 3V½ólŽCa7\$Û7b¦*+Ê‡™5ÄL«¤¼@œ&þ03~¹ð/«šŸkÆŠ®'îºþ‹ê´iÄbâ8I@ì4ré+«Ö&D@f[9«Žkƒáã6µbû0Òé'Ã73S\"Å¼e|&%Ñ°p.®¥Þç'\0ê¼SC²C­ŒG	_ C§6\0";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¯ÀÒš/!%cÂ1¿P ¨4¤l^·ƒK\nà¯-4 AŽ@PˆÅ%ŽË€¤\$´n80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÈLBq\r‘ó¼B„&ºŒ P„Â0ÌC3òó:&\rã<&œ	šŠ7¨:%ƒCÈ3¡Ð:ƒ€æáxïM…ÊR™DArð3…ôMJ<CK¸„NS÷.Ò\"øÄ6#pÖÂHÚ82²âã|¨©ÒãŽ7ŒŽ„Ð„˜¢ÿ nk(2Æc: ÆQ#Ü¬¦‘¢:‰¶@Ò—%sÈ8<ƒÕñ¼·3r:ì‹&6& RþÐ5Šêp76LèKdö¨èßáÁ P‡V¬ìŸ…Kw\\&4Ž¸SÈ˜F©`ÂËlS:\"£666+C²ú:ÌVªèˆÈÇ0ÎòPO&‡¤4î¼ ,;¤¼]€SÕ¼\\#8?Ê`èþ #:Ñ¸ºj:æ*´€À™hØ›^P«WZºVx@8åó¡+‘Ÿn}¬ÒÝ×Ór°SÄ]= `Vãx[{PÊ¢âÛ~„oÒ¥Â¥ŒÔƒÅî,(7MàË§f5Ðá 3¢(ñËŽZX†û=®UæqSÌ]=ðãFÿ:´,®VöY\$ŠØ£t3Ómž‰(\"c›\nƒ{qC0s@:Œj¸æ9ŒÊÙ@¾c³#”à´úB2…˜Ržˆb˜¤#YC]I8Ò17pA*ËÊC4œËÂŠªÁ?G|ÍF\r?’V	èT6ŠØ§?R¼HHnà€ ”²öLÞ‘ÛC&¯(À@£™\n‘*Jà2ÃzÂ€)0¡š@PÑBÎm˜§¤”	:áØëÁ%¨d_É™0+ð:“ÐšJÉ3#ñ\09‡rð²KpEg…÷Ah0¤’”RÊaM)Å=Õ\n£T¡¹SªÒªÕiã7ÁÑX«5j­ÕÊ»W«®¬2¤QèhY(ø¾gÐV”(rPë­iBpÜäž˜eMPœ3®K”!xëDÓ!hƒ\nâò#R8Åžs\$o¼dÜ!uBd)Ãhx÷‚¤÷ÓJGaÑ£òðBÜC†\nÒJ†fþÖÑ=#IšbŠQÈò/\$«àÖ£¢šåãûìB¤±ú•’9+\rî‡á¨¼ò‡ñ&É•’¿\nÑ¡\rË\$ãœ“ÈÙ\nÁZÐÀ@Õ?Ž;ço=fNRœ	¾‡Å`0†¢†xS\n’ÔÜµŠypT/-)+rŠAÉ	QœÅ¶Ò7/	y–Du.ËÔ`w	qFH\$2¸È–I;CaÌØMÂV`NÏ)P©ö@µœ\nÚ7d°#@ G'èWm;’ÙØNC‘;T,)Õy<”@\n;jÑÁãìI`m\\K‘Ä’&OÑ¾fÌ€°ÃíGé’ˆf2íiÑµ/Z£LM=\0²òÖ	‰¡œëÌ5ÊÞŠt˜d\"Xa`‰0 šÌŠÂ»¡q¦ŒÅ—¶L›C!eNÆ¶¸ÔöGÜÍ+L`™šª€Û©…nôQ9÷ém[ŽLd–.†V¢p\nÌNK™S¤ÐRª¼np|î\0 ­iX¢ˆ%…H,Gû\$\$øi%@\$Sò¤€_É{KÆ)›uËú»†Ì8!ÞÄ*¡ªÈØÉ-3¤­j[\$\rä)²¢,iù&gð)¸S®^ÎÙäF–jŸ«¤›WRÉ7a”;¥@Êº*ê Lè*^ÒìgÌ8x!ŒÅ½·;ÿ8Ë:D2C[úÃƒz«xxÒÀÖ7_s~&WB¨1õ¨­q0MìëWµâ^C=b\0 ÃÏ5kŽ’\0)¯-ëÇ˜ö¢*G1h¼™–lŸ±ŠN0À«†L6{È;Í\$ìÂXGPIÜWÍç)Z×@uÓbnH*@‚ÂCcl¤È§;iÁaƒœ¾äô#±q2hÃe}±3¡³5’ÁŽ53}0E“0Ú!]f!E²¼RÄµÈtzLL/“DQ1Y+— 'N=<5‘ÔEGKš­L‹jÒï¸r2I˜âGÕðzq„ãO†=BOX.ŒÕúÄÅí-žµp-ËûP“aý,NkX§÷äV¡€w±‹Ý·B\\‡åêö0”•(9˜W\rÏ+Ó¤œ]¢g°±)=dÞ¤T¢}¼(ôoP»õ4mÍŒ¶ŠÞèLÌZ@A-%¹0Ñ]l¢PÞ„ÁÐé´Ï’ñt˜Q!äÌž'pZZ÷fˆHUhy›[çuîV·´Ì@åja¯Ã5f¹S“å›º7ó©œ}	œ¤€8X¡ôkGX-/K^}4–ó½Q®µWR2S˜Ë)¾”Hu¬ÍAyuµèÌef)·tÊ³—º3ÌíáŸu”×k’Ìk'b‰d°Ð÷hPÌS’2­ìWbó2íV×-ËU`“Ê{Ã-M˜°ºÒuÁBô®ip0ä¤n¥›µVzJõYiŸ4².™Çrþ¬y=eçâžú»cgúr0>ÒçÑzÏqéŠ×‹«žòþº¢‹ë½?Põ6kâº¿Vº÷Ju?;Üü-wf‚\n…2§D üW³8E¶Ë«Që])©þ®©é@'îó\r©¬²n\\<?“Zi=2k­ÞúÞ5ðTÒX©àÜ:ïrõf³@†ÿÌi\0#Üý.°úP¤¯þUgOž÷K)\0ÆQ	–+Ä¼F¨†P}p*ï¶¡> îÒËïH§¥©ÆlJ…dÂµ‹VQã\\\rÁŠc®IB}@\røªn/@Â°r»P©­‰Lj4¬*^nø;lRÃªþÇ¬`­†3«‚]&\$¬ðñ¥l#¦¡\0o•\0¯hÁÌ ÂEØcO¼ú/xµÃHÏŒ&fÌÐQ&ž N¸êËHæc.Í0ö\$Bmï‡0ôÍpú™Â”gˆ|Õ#ÁLÖp'±(K®j*ëæ:@ÌaDC²ib~Z†t:cªD£†îÜm¦lrnËÄe°æ‘`üqgÏ¯\r1nþqs\rïvÀ‘\$=ÌÄîÅÁcs%¾p0çªI‡BüQ|aÄp(cÈ\$Pš/&bAVï¬Ò  ÂAwÎæ‘¹ÅÅ°à³QÎZ‘¾qÃqtÕQ„ë¯àÇ\"Q¡1»ÒqúoCD›ƒôÛPät.Ò6èzÅQð=ÎÓò(Gnf*!JÅnŸ!hÈ;¯ôýQ ñòDDØ÷q#\"g§#„Ñ!¬&ŠFåvÛq2 @\n©XÁÞ£ÐÍ\$w'¬ä/<êðÁ\$òx•²(ðà' ˆT¿{C:\n~c< Mîndý®¬?E>»†JXý™ÒÄJC,¯ä´Æyë”vîYC\"&Åþñò³Fôˆô!\rd° ¦Vƒl¶‚D±’À™Ïö”êÔ©Š2ÒÑ\$°-¯Ìþâò|¼\r€Vžfæ\rmø7.âî\\P¢&ˆTxoÔC©\0\r¨+C'À@\n ¨ÀZ,\$åÄMY ä˜e’}':Ù­Ÿ7¢MCæ¨s‚×‡j#Ëæ\$gZ†ã³èttC)\"EÆläª½\$4CÂ3FtísD‘+>%Òøhjv©üH†c‚,Î¸ÿr\n'¤äiÂøBj•‡\0P”=úâå’«N\\8¤êåèÂ3ò1Eë	å¦ñÞäA	Aƒ+AÎa5dñÔ(­©bë¬PºFóCt-Î æt49c~6ƒl2gÎÅô¾\0ÈëD*IPël H †cn°nÊ·ÆG#»C/|o4€•”„µo\$Zƒ²:Iðjî}dÐ^ó,f+vØÎÄ@ž^]O¸/Œ¼æ4¢ê¼ë‚Bc:t ä†à\$-0\"úáD¦ð@€›MƒJah”:1¸¾±÷ `ËÑ`fb:æ¤–Wb†ØÃÉ'@	\0t	 š@¦\n`";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=	óä¦–±¾nZS±LòB„A±zD«Ð;î´(P1 W¥j¡tæ¬EŒ#\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\Sq¤Ú¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯\\Á‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!@:8(Ê:]âøÄ6#pÖÆƒ€î\$-äƒ(Gaà^0‡ÉUVÄÂKˆæ „;îäHÔ\reAØv+“˜¢&\r8bê€È²<}e¹ÓZå:S‚l@&.#	ªuòÌ†Åº––ägDÄI L&K< ?FƒvíÈ+©C9W¯A\\Ž˜J25iÒjï{êúýpæÝ¿f;7aD+²š_£\$Òò§íH{r¡Ì¨É Åq*~ íSóœöäMúú¹S–ÊŒ’ë•Ðì¶¬˜©òm?&„t‰·iU1H˜§ÊY¦Ö†‡6—ÌkÓ•á¦–RóYW%’T¨‘Ü=U—0ñÜT˜K“Õ½I“fräí}Ñ M©ª{£MäÉóD)q•7E[•¶ÍÍýÏâWÙ-uBsÛyý`)¡ÀZÝÏ:\$d’˜’–ÕZH)ˆ­¡s¦ÙÛK\\‚Î	“’£„lˆ´kE:\r#TàhÎâ˜k\$iº,\n! °GPÁÏAÂ´ `ùa„CA¦?×&€TûÍWÅ=&=Â2+NK@-PA\"¢dld\0?ƒE¸Â³X´O\\9Z°Ì†¹â2ZIXI°:\$ˆm”±bgˆ€Þ)cF„š9TJ'ÄÀèÊsØÂÌ½–G”:ŸZ¯ñ@3s‡! ÄªÀ–pLc™‚(/øð³UvwË„‡Ð‡ˆ3– Áp	WQÙ0´ç¯	#Ü}DÄÆ(H(Bm[ÁÈ®\$]H„¨,\$\\</29Þ2ƒ›Êd”'ãEÐ¡™2áŸQS“ÄØEÊFv¥+“Eæ>%hý+\$:–\nY«‰l´åÌB2ôª¥)‚Ý\$²<“ÆdÙ:Û™Ü#ïÑ: UT1caL)`[!šqò—+lÄÀ–ÆtL9\$¤2¤nW’ñ+Ž\$Î·‚¸•_ãN“„Æ6”ÃB¹H)G\n¡Ž†°æ3Õ‡àÎ\ný_ìš6 Ãƒ#¡u.ÅÜ‹“ Œ@0‡EþÙS,O	êZ¡©è}Ñ¤.()Î#\n>MŠøºf“)[žåÇ0Y9D\\.*<·!M!)\nÏˆvNRÍAÕ\\¯9OZí]ëÅy¯Uî¾Cºû¦L0FÂS\rÌ9ˆö\$Å³LiŽ1æ@Èˆk%)©>rËú’Ëa!Œ4ŒÉšLIÎWó-AÉªì–á%å‚|‹ÃþöJ	ô¬¨i\nUÒjá^!\r9êLF¸§‰åHä0¡ÔÈUg¼9ÄÄìÕä”ÐÔ©vqŠæ&(J°,Ûü#óÌ¡¡cè‡ëL6  ¹’êu]2Ý)¬õÿ:Sè¦³<P«ÏÅ’•ÏâÁ®+”U\$ILñô“½˜=‚Bü_IPŸåÒ’ÇÝq®{¥”ÑNbÏX³¤ûxrÅ²™r(Õæ%	I3‘‘*S#iŠP(šØrÄ_ðÑKhA¢Xv‰&À	f˜¯ë	VñüIORF`%²\nÔ‘cp­S<šMNkhŒŽõŽì\$aA\0P	áL*@xµ+ç\nL1Ú_½ƒåŠîic=ƒDEWQy‰l ½XŽb+Í­ã’^BÉV!äç5uóÉ²?âçD“‹Œ™•{!7%&îÓz“AÙaBe¤Ã— ,ÿ'%ôžK@‚ PR§]rà‰Ðäã{ö´½;3ÆvÊ@mk¦æk® Ñ×Z!›Í`œ±lEø¶µ”æ2êUÚ•>CÍ°·B x¤mh¡ýŽéoÒ®Ü„Ës\"Œ‚ô9X}“¸?9Ë=O£fÀîƒ´„Ž‰YsªÐî\rüB6TZÒë‚*¼ÁÑ\0·#8 áfÅM|8K®¼\\ëç…©šye·ëNÚJôÙÅn<Íwi15î8“ø÷%½Q8–E]È„1ÏPíX(é½|I+Ãª…÷ð)/hy“AÅLº»0wË&ÔQV­rÑY×	rLÈ f'ýÜŽúWsÇ’åÔäwÆ:€áõ¾Î4ó‡˜HÔŒ²5o}×²Ä<ø]õ\\]ÏÜvn0Ì-V &ÌÆ[•åòÙ¸¡Pñ³¨ µm}:á…ñvEV»úæ<’Xn–Ó\n!’ØQ–ÛÃ<	°m>ûêÜwnÖëTüH#r°oz{sáQž\$²¦«‘M=à»hki‘\$\r\r÷Ç*ÂØ¨€«'»Š!Óï ‘ó«øOŸ|¡2¬ÁEé^Ë¬Íún’n©ÃÍAâc}Ù*Ž—3–&Ìšh\\1&¤dRåîþoL@.„5æ®äjÊ!x’ÒŠAx‚\$¸UÅ\$ãïìæ…¦ßËôX‚X¿…Y  ¨\n€‚`€ì’‘Ï~H¼evÙå¼Ùbl\$á.¥¶Î#XÔÄ‚ Ê\"Føãp+¦©‚@p¬¡qÐ†WX%°P<fîá\$À®¡z«oD÷dN0	5æò™ÇZÈŽÈP¢(°¦+ðªÈnDÂÂŒ}	Î|½	Ðw\r¦Æêâ»Ð¬ƒ\$NDä­pÜVE½äzÑ(~@hÏþÆLH\$pÔE°gÐèèÄŒÂ#¨”¢ãÜ”0ýZQ(q/j*;14\$‘8pÐOd<1+gf“ÂƒÈïgwO&}î@°	¡â\\&%ÂÕbªÕ§Ü\\dxá0š\$'&\"YMQZuÑ”Ø\"‹(Fè4—âã(dÒÕ„Ö.CÔ<HÊ§	Õ¦¿Mrj1§Å´Únç\r°ÍB›ç.ì²td¦ìg£D’é‡NS1îˆ.GÎì8Cˆ»Ð8¸Cà1ã%)°³P².±€V22Û)„Ú§Ý#Ò0\$áµe,õ/^uÂêððE¤|bþäï%#¤ú%¨êƒ×&Å¥\nè5'Oc&og'â©&í¢æ¬òó¨XÜ²šß#q'ˆ¦ðrvOò¦öH	¬.vvDØv¥vçÊî£ZµN,Eä™,Å£-s)íÙ*#=˜ÐÆYm\nà¦§-æÐöÂ÷uQ,4Òbqì/Ã¸Âîq„Þ4}¢@&ç*pq¥ ã®Hçia(Þ9&B‹t›K€Æå¥‡“pø|’K430þ¤»%r”èˆŸ)±¼.ÇóFÄs9\r±4^693®I\$’Ò˜@ƒÖ¬\n¥8HS8óœ†3}(s€iâµˆ.2“¨%Ú=pQ\0fÂ“Â°f‘:o\n>Eóz³pÓ©;SL¬3»5“NÈ3ÄÑÁa<ÑU\$äa(	­(PöJ³ß;sä,S½6Ðè#ƒ?õN|QSJ-“ÿ0Q`Ø‰VØÂšú­’ÙaB\$×#e	Ô,(T0L±úô=:lßDE¯Bï©Dí”˜”S)s2.¨{\$&-„,4ÍlG¤J‰8/ß\0DPv•ê¶zIŒ£LCÙgTÎñ*þ‡MÑ/íýH/|*¶þ£\\#ñhŠ‰…¥G\$+\rc“Ää~¨Z:TGôLúÔbûždíJ×&±F#ýfÛ'§‡o•=®èùÃØü11Xôï\\lÏCÈû@Ar]QÝ6QI3Õ,Ôlõµ+8Ò¥S\r|/3“@P,æÄp	Sí¸lÐg%Dt³ý'?Åt‘ð!Rõg=“VÕ^¸5u;uF9KVÕ÷oÃ6•`Òõ]T/••X\ró2kŒ³A|r-\"(A\r[BBÆÃ¯Ìñl*¾PìïÎò@H+Pa?>Ô<’k@•iRÓo]pÃ>õÝ)ãEU#^uØžSñQÇß6•‹)ÕŽ»ñé\"x.¨w/u`ÕS_°	<†åVók;qG„;GÍ9Ÿaõë]±„Zõˆ1HÅOhºŽR¦OàAW\\%84ÚùªºaT?SS6ö8‡3–…¥Ãe¥eéåf+üÂoÎ:Vl(ö€i•Ä·†~—íKfc%m_QG6ö\nù†£h‹hVœ{öd=ÖifÕNÔBSk‘>Ú´slŠX–Åjvjr®PUã\$‹odh>04†4öRPBëk&×.r)9(¢qï²tâôû6Vë\n’bûOÉq²mj×!q\"šûq³qÔhƒöÿBˆ6üW(¶Ëb×EsOÊ '’¿YdPèÒvžùgg.üÖ£vVØÔ´SW‹E—pg·tXöÛFvF¯ùD’%>•®ÛÖ?_Õïvâ·µ#â·eM>\rZÉ0¥ñ.“SÂ·4É­{ÈL0ù\r‘\$èC()p”W´\$wË\\‚a}\n1|û}¤<.§%~FÖ{ÖÌ9ª¦×©Ùºñˆ&é‹gQ¯ô­¢ŸñÛ%v†XøOÓRìÿiÒÄµí‚Dywã(7A7Õ“Ó|lwÔG“Ï\$s…åjÈ5³ö;;±nq†º#€†Œ Øa )îSæšeÈB+¬´ÒÀ&Rº»á´¦lq+P!«_…WÀ¢3±ŽMvLãå4®”€×DöMàª\n‰ü>ÖêOG0…jp‰}è1‡¹ymÛ†‘zi¢f™ÆÑŽÔÈC«ù~æù	f›IgA-L“ÒkÔ¼¾Ç÷O²«/—APj	fwíÀl6{´ÚT×\0k¤0Çwç‰¬2Ój» Pgj0¬W‰WÛ;j4RIn\$ðjr£'ÇÁÈ4¥3!R/Ñ„&Oß˜±‚kd„Íþ¢2TÌØRP,‰1IŒ´rè›(´üär€·o†;GU0’w+H©›Ó¶·sPó‘¸ÍîU›™*¢‚‚ÃrA€b¹àðYÑ4Ð‘YÝ0¹Ìðk°3.™1‰Œ™ïòe›¦u\0005ýU˜yÅ:)Š›IH¥&ƒ”ádýn™(ðE´wŒê+ô¥6î,¼ÎÓ©È“6dDJÄzË²ô®\nøDu—†šZì0‚š? Œ\"ôYiåLC™ºùµèPÄyPo‚¾-úGÅ·!ŽinŽá×°Eç¥\0™˜%é=‰Møƒ¹¢‹nRç²K„|rNõ¨-v:v—m6a\"vÂïbgl\n‰Ee2¦Ì5ZÃ¦Dëuyˆ:¢j";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+°È<îKdŸŽcY†TµƒÈà<F!óŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´U9A\0ÉFbÐÞú½ŽË%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\fŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘P%ÈéÍ¶PË\"êÖ„L9µ˜éPCê6‰ãÆ:ÃÖPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒg—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼÷ô¸Ž‰²<ÆdnÓxÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔX'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„f;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:Œpèæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3‰Ñ{`\riÈ@!ŠbŒÅ;DÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4IHT4\n¬ÕÀr(S€nà€ †GÔÞú\nS¡¥ Dþ\nƒE9V†E>™Î²¶WDÕ)àÜKYå<a…ï§˜\$V[)4?!ÌýÀÈII+ŠP8#°æÈšõ*áÀ4±ÀÉ\0!¼9PŠD(¥£ƒº…ÊL9)Pä¥ÔËY'1Pª8î’U:©UjµÏ«&%•ÉNWi%_/V0zßËçd¬\$9<æ%¸iSí­Ž+2tŠ Jp\"Áˆ<”BjMÉÊ'%%ä½—Ó0@)çcŽuä€–sM5ò|³,S1Ž€ä*¡†/N”¯RÄVË3ÎAN~±ù¦yy‘ÜÅf%0ˆÄ.‰¼œA§äãJ—îzÉi/&/>ÎY&r%Cö™+ÀóÀ\0´tê×‚±N*”âRHXy3Ë:pÞÉVn‘ÆÐÕ±ÀâÊ\nÈ ÇäþBØ^EëúdaÊÚße%'àó¼#ÊO&E@'…0¨³–„öVg–ÓB_Î	8\"P2|O¨pFÍZ@ê|30êqDhe\rTŽ-¤Bô'ð\nw`³Äs^HáÁ^ÅÌ,@™DˆùL1DX#@ phSçVM’¬z%EbWR€(!‡PÈ¥¸k'äBr–¢&r±É–€('„à@B€D!P\"ØK(L¶1vÓC3löUÊÙxºIUá%FT #0¬Ð…ô¤KDxŽÄy1è?©—‘ˆ¯˜å«¶„è]H|\\Z†1ù72æÈ³­M\$¤\"97\\å^x@€•’Ø(\\äª>w\r½Üæü|ÜKs»©¡Ê®µ¥C	ü-a½ë‹u'‘;1(aù†–Î\$Ðn1§þ¼bœ•Ò@Á@\$Vsó2íŒ³–å:Õ¦ÈŸ9Ž	AÀ0'†(Ò’ÙùsdÂÁ'Ð¨`I„!Á¤=!à†‘ÃƒìJÄà1› Éa%Ö&vâMWê‰Èc=qe3Ÿòöð±*õ1A”;¥ ÞÎ—&0&\r±¦€cyÆ‡,ºäü¢Èj®ˆ0Ÿ®\\§ƒmiËuØ=Lúô/«àa„x3š—Ã˜kGÍ§ý-ù,­µÔ¸ÆÌr²kÀPFÚÕÞÄ·`U#”rü#E¡xD¦K™¡/cÕÆÖÂ T!\$\nQÁc”„÷J€ÉHC\rÐîË’ÿ‰H:õåy}™˜|×ù˜•¦\\ëb‚Á) ­mÓŠ+æÅ»¯~é@Åg„Þer©8\0ƒ°à¶Åœ;\"g²“tƒNÎ'2¥mÚ“Œ.Ö-›ölH3¶àî¾ÛäÜ¸Ç<ƒAM^»JôÓ‘*Ì¬®m›±Ë#ú‚R%3ƒcŸžWÜ>ÕûW†niÂ%ç çÃŠoNÃæ<ÉãZ¿Ÿ>cn?!Ü†IÂ[*[¼ºë±-â¡SÃD^[”¸:M‰ÄŸ%+J¸§SþºÊ‘GWDÌx/<âÂèÄx‡b’²œy‘éGeüÅJb=U5\\I‹R¼@Ò½ûôE!\nŒ1f’ÖQÆB­(Ã’^ºrÃ±åI%#/FMÎèy=d»R=èÕ»ú2Â%hñâI‹á{ëv^R*éÓw*E!Ä1{xõŒ®Ç˜óY.Òùß½®Ï™ažoÒùSûx}œiqÕXD\rú%\rùödHÚðS\$mAEH4\nLræ—x­\$2†ÄX¬´#2à&*AÑfN*÷D›îQ¹!\n*|ô(«ô‹2ÂCÐ–‘yŸe{®mä ~˜‹]T•ŒýñrŸÏ×Aefñâ`¹‹¼r¯ð/`òô¹ïøóÏ¾ò\0¦ÇP\nóïîô0èõæäö0v'\"õÐ\0.´èz?\rYát\$°. pD.Í˜œ0>~íÌÚkÒÚ°HC°M<1/LûÍžã-öÜëÒÝ0jÐðO0Uba¢@ÜK²÷­ô„ßÀìÕ,ÈÌÊöCŒôÐ\$ºðŸ\nÊïÑA_Ê¤0¶Ù§i\0éŽèl°\ràÔ]ÄP\"É¶'ðì³:WhP/evY¬4&dL~ãb]Çî„T{âf^°òÑRPø³KÒÜ)B™éH·Å.°\0~ìª*ê´#fÝ\0PYên\"ÉCD(+)Š\$ðÑLÒËdÀ]ÁBllBZ'2dÖÌ1*ýŒÉÐ1‚\\q†lOíÉÌðÑ…ß'ìY ò¼%ÀÈñ;\r(BˆõÑ–ÿ ÑCÇƒ—ÑŠõQÄ£‘ºóÑ¢\"obî£ª(Šíb†2gNqC—qÔo\0ÂîDÎ8fSäa`–\$Á|YïzÈÉrA	Ê'PÔ c¤˜¦?°o1¿A\"…¹	Î¤cóÒ7ñÚ™ÏTÊC€{&`\r+Íi9¥¸pñªÒ#—%»%M![\$N]o sBJ`iŽE àJÀÖ'¤Q¼Æ0&õ(‰(¢rkÒE&1ÝÄ(Ò¡Íï#\"%……)Ò&¬pr«)òla á’/æüPÝ*Iœ¯õRaÑî¼R„ÍbæÍÒÑ)Q™rðÎb(Ù°Ï/òõ-°á.¼u,ØÍÒo.Ìå1„\\GqµƒîÒdBÒÁ}/oA-D¶¤ºKâÑ‹1;3ó1Ý®´4ËÍ'KDKn€i@´\$M\0ƒá‡£!Š’âê½g¬ã«¦[%?!¬p_s€5MÒáƒ]7‰ÌäS#ãTä –\$®1…öC Ø(\$ª\n³xiH´6B(+\$Î…FBz³Ê!³ðã\"A¯L\$#V òssž\r\rRI@Ø`Öx@Ös¤é‰è£Œ('¾[B&Ç¤C¤.Q`Ð*Ã\n\"ƒÆ°à¨ÀZ\0A)â6:Îœ\"\\t±?\n-øÚ€âªÕDK8ðƒDŸ8BCD*Ùó¡\nT\\ä¬”Ä\"’NBª˜B:#è6v§n2`›C ÌE€¬™aJ\$dX5îìÃ\rFõ’6F\$/‚û;3Ã\"@1HÝ´\"P`°¼^JüF\$~À	€Þ/ƒ­M4Ö^­üÔføSµ()ñLÍnõoHjï\\v‡2-Ò™OQsè,zgÖboFÄ/¸ºotei›Õó’“3obÉBp5cA=(0@ÞðRLƒR/l«EÃ1„Y±P§hõ“n:R×(`¬¥1È¦ÇMV‘êülžpëP—…\$5CZC\rwI\0ÂÌ`êJ§1Sïöfz\"fùÕ˜1€¦A”Þƒ’1‡1IãeK¯P ·klotb#\n–¹K ·U\r\\2QÌ4g §,rŽMH\$¿@­=HÂt! 	\0t	 š@¦\n`";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›%ìºï½‹¢ì\rkÒ8/†)@€²Ã¦ƒª8Ú!#\n*!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`×<CP§œZECš@K4,ò)³\0Š P¨ÖHó'(±ð°x›µƒ(Ì„C@è:˜t…ã¼Ü6Ñ² 9ÈÐÎ¾3Àð€Ã˜Ò7ÁxDÎDLÈé2íB5„Að’6Ž¼Z7à^0‡Ïã7ŽƒCêÎ2C¨æ\nbˆ˜÷¥î¢êÊ oÀè–B€Þ5Œ)L=íhÈ1-\"š2Òi3Â3²ã#‰_Ø4\"ë%‰Ã{÷_Œ”âûIˆè„¶¥¬0ÛÐÔ’Û¡«oÙÎ\"T6(Ç+AàP—>+˜äâ(ÈÈ2Ë,“Â™¡#(ì…¨Ð¼Ä0Ž£bƒ¬«U¬ #£pÖ1Ê2¨´2C­m\n:nÂ¾\rj0äž'N\"4’Ë#l˜÷èSÆËœ.7•´´–*˜€â`Ùe2è Æ…»õ£{R‰‹PÈƒC›•YŠMjUî¢ÙiÖÒ*§×ýY¬£.M€›ê’«Êãr¨ª;\rð;©¶@úàé¯.K¢ì´ê³W±CK«†¯˜5æÅ1‘¢3ÉÒ —‰ã\$¤“Tr°ÞÉ\r¨XòÏO£¨Ç´Žc˜Í‚„	Û>½Q.0¾m£il„ê€…˜SßË´¤øÔ	kš!ŠbŒ“°Ü=á\0Ì\r¸,D;†\$ÖŽ‰|¡)&õÒì#Éx¨ÇbLßŽ93ÓðÜ3„\r¢·a¯PÇ@O×¿Á/±¨,Æ)hÉ@%.=-L5WÂnQ•i,\r…YàždüFOQá-Ø´%D¶ãÈ	/	¨x€¾\0à‡ƒ˜w#GØ2‡„ ^žðL/Í3&„Ô›pwN9§PäÓÌO‰ù@(%	ÑrˆQLIF¨õ\"°‹ûS%!Ö¢å<}Œë•(„°×*T£Ò>¨\$ÞuG\0É­\\D“\"ÀÞÙh>%Y&SzýÍ	ú\"ÅIÜ)óÂÒÃ‘%\rÞ4¬èªðB@P\0 ¤’:I’Ól7½Ú”¤T›h%ÄÀ™A\0Â\r\$€ûÈ\"ŒC#™á7\n\0+õFHŒ„€§ž*ÕøB–ùGj¤‰‡“IÃIö-ýQ†èiÙ,(Ÿ<cÌG2ra¦Ü2@¨Í¥ n¢EžWjN’,o?1Ø=p Â˜Txj'†£°µˆ‘_ÒM}*ãôúÂYÒ:pSž…#¹ýN43šgÉ¶mò4‡\$È€&á*G¢}Aì'ñ03Kô¨‰štJÆè“³pXø\n:¡¤Ø°«C™ø5ì:–EXu+\0¤ª<æhÓE³,Ö©ÃZÌÙ©##È”£ÒzIY™(7dy%PÈpLÂO#a„5›(À¼ætJ6OÜ¸8Ò|lLÏí‘'ôš©i’š¦P8³¦ßé9fkmu5:Ôq¢õ2a½Î.U|FÏ‹ÄÊÀ€0ªˆ1:hd•@ÖwI²šJhÉ”3%É7š±â=…be”›9¤ð:X»,Ã™3VÀ(-ê:•B£v2ç¿%P†‹ƒ¯J¨ÌË†2±‚ÑH‹Èc–›d‚pT4ÎšÀ}Œ\0eêÆ/¬RùjVZ	2Øèšö®I‹r÷\rnE·‘ ä˜jXõáCðnÐÉ»¢Æä„Þ:{\$Ññ|¼ÕŠKÞò±‰Ä-xºÜÎ¤G™‚—6džA)¹”¸8 Ög&VQ¤¾7&èzÒ\n>BÁ*@‚Â@ —n\0ÍN‚\nde¡Ÿ¡U†.­	Â­oÄÍ]—ÇXÊÃ¬0†¡®vIX¦>0¹\0002ä,ys1FZ°:\0=`Êö–Iõ6¯%ßùG¹Ã•`¬²–K™7+dñCr–T¾·’K¹æ2Þ<\r »/†üÃ¤áÉÙ@Ù‡¬iš²¶l>5‡8Œ¸Ús¦`ÏÙ+<\\õ™sæi9W+µ(ç\0001Ö‡@¤˜:´i¨Mó„;úC3™,Æ@‰ànC°Bžïã×Ô¤S7ÌSªÉ3¬ÕÚ/ë\rIiÖä) ë¬í¯®¾Ö[<‚\r†GÌ–ÆÌ*§^Æa0w\"¡;h+b€J‰aiÛùÔ¾Pƒ^Ž\n­FúZ	y½ªù=“´,†7AOŠÐü:9¼ÑA;1–ZÜÖRLhwEk.iL©\\^yšµ\$dQz™\"=‹Ø¶YÈ†æ1ó‚){'ä|¸Lå¢‹·S~¥Ì…½\"ô§7Qá¤/Þ‘Ÿ]Q”äD€Ø¿Ù§µj²ÌU¬‚ú1óû£º´@©e+t\rÔ¨›š\"Ë\n¦™šrì•V…JÚ°#	Q‹GVF´=/rt«ngdìÄ™Ó\"‚{)ví‰T+®ÃP.ÚOÄSSiRöyÌïMés®Çê£6 ¤˜Ðì“vê¬aÊ²ÆJ¿ÐUùè”+ÿ¦y~Ÿ[—SòN\0t•'è›Û•òVëÊš ÐØüÿQô=±z¯Kß£\"²¢Ä F—À—`ˆ^ê=Ìÿ™¥Òô¦‚KZc8ä½ïòéÍ€|b‡òzVmÖ„ßLç,éô'·Â’T7ü±éô|Ð¸üÃ’àø>Óüòý|×öt¶êû¹í­œ¢âõn†æÊ&½P\0®ïÏû\0ËÙÈöI.Ú†ØDk°9¦(7°ð¥Ôu£ÄHÄ\\»U¨ê„€	ä*¢Kˆ´»#¢6©ê¼)0ÖŠ^bˆæ6‚¤*‚mh²eŒLF>\$bL)oÿ«¿BnêÈ¼n”¾KÏ…Ð]K˜XŠ/”ŠP¬>È\0òjËEŠö&½-FöIÕl>¢‡\0O(è€Ü)h¿\rMÒöð³\r+µN¥\0Šï	ãîÂ‡¬.~ðüGër_¢X]ÍØ]nx©†Ì¬J™\0àÖ1€Þiî Á×¯Y\rÈ¥Ðæ¥°Áo­§ÃôºçŒb&&J&¬¼‰Õ‘\0­±NbF(\rNÂïèøâú5­V6BJ\nà\rbf\rÆ‡\r[ñ‚m0ðön˜Fq€>1‘ñek‡ñkG±„- ¨ð11\0pÞ]€á0Ée“±^U‘Ð®ëîGÍÔ>ª®¯ÑÃ…l¿w¢5Kí±ÝðÇ±XÍqÚ;Ì-ö\$qìGáˆ„=Ðþ<3è_BðA\$…\"Q=² =±úÑñI+r'‚ö6\"ÒVQ\\¼É/‡ë…€÷Å\0C¯¤ËJæs¿&\"¸Þ×CÌsŸ'–Ø2x®ƒ4Îoß(fù’j3Eœ%ï~P\n8&#‰(.7e³\rT•J‚‰†*„2\" ¦€c!+ÅE	ÏÑ&mZåä\\Î‘Ì>,°ûrÒç\\ËÒÚég Ú#ìZ9(ÒêÍ­/&’ôEÒš»ä^\r€V÷mÒ.ì§èî£~¯Â^Ê\0u® \\B6€ª\n€Œ pœ>£Ž/Øò¯ôù¬ºÖG\rÌÜû“Lb“P§¯Ó(SZýÆ×6“&Ø1,#4Xú:ÇòYN®§‚öÀòK\0€qfl1ÊŒÂ²0x³œgnÞjÆ K&ôÂÝ:ƒ8 30ÃU\" Ü´ƒl8\$,	€Þ6ÃŽeóÒ>È² CBBÆÒgîÈÀ¬º®ýS˜K	¾¬Óðh-‚Y\n˜éi?í'ˆ>¿Ž?-ƒÐÝ@¢è2ã61Ã .¨ÚJFËAf‚6…†¹Æ:%ûCó:³„€`Ñ\n«\n\nÎä'‰zšE^\\´XšË¶IéÌŽËì¥Â°î¬Ž\nÀÂ`êC@	ô0=ý*+Ä\"ßI&R™Ê\"âÊ0§?C*J£@c\$æ2ŒÄ­ô²©²aA+Å‘ŽmP(Gãö%\rü:jJì¢b";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-ed]H\$H·2)ã\\õ¬ºÉJjÄRH±R²I\$¡,_ª,RÆÕ¶”€Œ#LtU;²’i’PÊòX\$ŠTf·À´|˜^@­b1'¢òüe1+K!|ø5HuD)²âØ3ª‚¯4Ç2Š’ôRs!ÐfDÅ<ï”¥Y>´x0·£Ê3¡Ð:ƒ€æáxïg…ÃÈ6ÀC(ä\rãÎŒ£u¸<:ãpæ4öðDè6ÐÊ:X¢û¾0ÃXD	#hàå¶èèã|-òìã# én¦(‰ƒK®Ñ1Œë?KN•bÚšBµ‹#\"Ð0|º‹¼²å‹«Q@%¯ŒÒYÂ1ÆNÙÇó8Ï'ù1 ¢6Ê\\»^Ôá.\rš<è`Ÿ Œþ‚ÎhyþŒœ,54“©Ê²I-M{VŒÈTÉ H'ixZžÑHÂ¾Dk/@‰aŒ#¨Ø:°Â6£*IâJC\"’*5.ÉºÍ³²ãÚÄªŠûûXNÓŽÄÉÑ™£\$  ™b[ŒÌ\nCöó±ë«;V“	Ü)BW	´5¾ñ¤£ËAOYÔ™.>œi ™š;ì5YÀ²æa1ìIJkÔ)òÖ!«›6Åâp‹ÿ†FcKf<jÂ¬F@Rxñ¼­ºq—¦YNŠÅ–è¬¥U¹NhyF=µY±IÊ´°×sÃi‘y›’— 1‹¦-%1SŠRxÏ‘èöæc ·(f,Ä¸³ìðÛ©clÙ£1¾KkV¯Õ;«S\$ª™£5í¬9“vIÁ\rá˜3ÅªZÄò8Qm8*óˆW€yÕqPÆÎpsÍ¨ÀÞÐs‡@9C ÂÃ\nI¢-@ÜN¸(`¤µ”BÆ‘PAá)… ŒòQè. Œh»2ÖRK«QE…H„ˆGØEK[å\"\$øÖ!Âºø!™·(APß/ž–Ì;\\h¦µC”Kk•q†E¬úÁXk´/0È¹N²ëñ·.üH<5„EÙ³¢Ì|Ùp\$âÂ%¶Â¬ÓR5•P\\Æ½„Cs:áÈâÌæÖË¡à8•„#T™\r	b,e²–bÎZJ+-e°¶–âÞ™k…q®P^¹Îêê]€‰wÅà¼—¢ö_êR/öÀÃC`ì0†³‚ÃŽ*Ö‡¹}´V‰ŸátPè°ŠeLYT€d¨qÁET„%[~!Å¬Ì\"™äq¥V¡\$tÄ¼†)A<Ä4!A\0P	B¼Õ\\\\Qý.†Õ¸3/bé2ŒLš›X‹ùku±•TlM^[°•Š„Îc\\ÑSiïf0è\r¨XÓ0Ž5xF¤UR’/zµ£’´Ž‚I!0œ2–pÛc	\rÌì°@°ƒ‹q˜@€3 Þdl “ì­Ð@â3	:hç‡žjR€Ièµ2ÓžÂ¥*ƒ\$Î³PuqÊyné\r+EHIš  ÔEœÆ*Ú]“æO©v45ˆìd¨m§vH±á3Ü–èX,áÌ¡£x×„;^á½iB€@ƒHg,&XC”pNJÀÁRš/W²Ùm”ÂØrDµŽ×=.*Ÿ§D¸&IÙ[‹ètPºrJŒ“Öpá<'\0ª A\n‰lD­šž5HðžYºZ{‰P° +\0ˆB`EÁx7¸ò\$ï˜±QDEÃ,6ÍÞáVô d*QN2{å}Å¨…p›Ý9”q°ÄÄ»\"ò…_ý6~Eß³ÄŠDûÊnÉÒ?²ÄLå(\\\"§%^£;óPY1©®eàõià­Ž4ÙñVUPSÉM¯¦ìè…ˆ5@T1RaÅ˜ÙˆB&¢­sø{¢\r¼>ÂnûÞÚ©{Ù­ð¿ÕjI‰öep*ìŒûF\\llË-`ª`DIZË#!@()Uîn€t\\¸Žœû”b‘\n‹LW&“JLÛÞ¦TÒ­æÄ›‘õ£ˆ–êôû‘è\\Jn³-OaRdê/œµ˜cO¥¨\"ñ‚˜iMÈ!ØpáS§,1pÉóÂŠCˆ¦UJsIe„{¿ÇÊ_e¬[~Ú¬ä†Pî¬(dnjoÐ@r4äê’|¬ÁíNë4ú*MhSq2ö’)É.pˆ_J\\Œ*õùÙ‰–›¾4ø\n-(&†IVˆv§iÉÌ³j©¹“Í#¨ÆƒëDÖ­/\r@×L¦Hà%~S¥~H‹²fvìHÑŠÝ¯ÁAP „0,÷9Ð¡a ß^N˜p½[ìµ‰7EÖv<¼Ý‘‘ÖÁn6Oe¤÷:MÝ_39q¦§¶TòNãÙHÅ7;§Z&Ub[Deú^ecôUAp	€÷`xëLo…·>°x–ù¥Nuñ¥¸ýÖ\nËä»á7^3ËGÇâŸ|Ó }÷ÏwmzmüfkñÞ”ÆÑÃc„ªN™ªøiQµ©BñTúÖúÂ-à|Ç°\"PÙyñóí_?Ëúÿ	ôþ7³ôÿ,ºÚÙ\\N¾ç®ðjðy·ãéŠèü&†­FÙaƒ¹#\$²ÍÝS²ÚyédÈllT\"œ¸\$(ó/*É‚P?¢¼,ÞH£ÂÎŒ¦SÄMïÿêp`'¦IÂd*01P(V¬¢)Çl4ÃâÑ°\0v\r.%žUÈÄ«8Å\"ìâÈc\$2c=ç§\0j?.ÐB§:J¥xIM˜L…\$C¤.jê®ÙÄ*¿¦f(êpØÀÏ\$N¾£pÔ¢×é^ü?­è¾p¶.05ªŒÑ°²ÚÈB–orø°¬ÒPÂVÎ‚OÎ.‹ãM\r0ç\r©¬Èt\"¬¨,rÀ(!\rl¼T#X«êø£:R¡hdqmÌÆÄœ·Bì¢ŽÉÄZ‚ñ6á'#V´PèB¡%©D,&Î'ŠÑpî?LK\"\$å@øBàzfžÌ\"–ÁÊV=§P>L_M>3rUnP¶§°Üê™1Œ‚Í´q–&®šÌ‘(O±+,ÞÍGöÎiS°üÐð°÷ÑŽÎLÛ\"k#Y¸\rÚypÚ1ß±ß0êä`¸ñž-qñPì1ðôÐ³ g, T‘·&@\"ÄÎ>Ojñp¨eoHúÑ!Dˆ+¯*d²ÈR\"áŒèÑr(&y/% Ò dèR–†\0óò@ïOs\$oþÂãÇDäð\"ÁmÒÏJ&åqj®vv=r}ú#2…ìä2x÷1Ç’˜þN&O‘Ö!,Œ*‹Šw‘x.næ\r3ïÌ>0“\0§†M‰gbâÅtÂQx*òÂlG·,±oŽ!*ˆÿ,ÊŽDÒ4fgŠ Òär¯B1jV#\nZ¢Ñìï+RÜ.r›(’Ÿ(î\\*CR¸uP÷0Oå	„:ãnS.ˆfÑ eŒšGÐ©’–¨74Ç³)1êÏsY\"ð\nÒ¤PõLÌMOG4ð-6®ˆå3S‘*¢Ù8<ò“ sŒÉ&Y83•³qò|ÐNès’zì`éç:óè®ŽL‡€¤Hæ\nHŽV\$ZsjXb¯¾„ÜCâbpBHçò;%³a8±ß>Ë“#Q™ Qe ‚×?’?Çw:s%.{&<†ôvŒs°WAn2Ò‚ÜÒèdd‡ÔÐÑù”=¦÷-§gCnw“”Áí,{#ñ4ˆæ´ç‚fQjh??2€GJƒFo*ŽÔK74d)ó—@3B‹ŒÝè\r;sw#]H¦¨'´i\nôlzRÓ¥s¨ã†¹!ÃX·çD~\$ÍF! †.Vä´›gLB\$å´¯ ätÇMT¦&Tx|“¬åTÒ@ÍGnaNÎYO¡æ`OŽq“²= D®¡I!uL±ì-u(MsV-dcQ,O6ô©(‚Ö¯DÃ>²X>S/¤ZädÓ äÔîTQ-©VùÇÈò˜îµVÒð6H/·Uäo\$Æ‰VbÅ•],•`O¤íd[<ÆCX`gÌ¿XÐ˜	„’é„:Àê\$`¦Ã€\$Cº•¦îFvV‘ªN\$òò/u¢°c´ôuÄôÏ’ïÍ\nF=²i\$¢š(@†€ä\r€VÌ/-ï7A‹v.ê,~ñØk(@Œ»æZfØIþ\rÌ\n€Œ pº’jê@o•&^ò£ÚÂÏ¬ñR@ô'¼­bÆŒ-èïb<Õ]dlÌbÖâ&ÑkRü\"P\nÕ0jÐ€š` ÒÀòäb[`\$;`¬ÅPç+	#âæmø”\0¬\r¶±/\$¢#³NwN÷	`1q|®Mkñ©â`¤G¥C>P&‚c8!ŽÚç]0®é£:ÓV£vçÂtôLƒ¨ú)#Lù6û06ÿd¤—¶Q2+.ÿp›F¬ùqñKnÂœ12}£ïW+Vé+/tÄ:©rpu]KgPé¥jEqf\"5L…m%^ ƒ?¹X@¬j3è0úQ¿3ëAŽô@¬ Æ ê\rµL¹79uuâ¬³b}í„Žl§!73;®jÞQ\$tW·pFv>ìí#Ê¡­ÎÓx­Ó6qW±T5#KM Æ‹!Ž>jÆáƒQ`g6ÿö¦~Ä*.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæÀ.Š­'â˜èôE\\µªŠÒW\"¥u,ˆÍ±»Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­änã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑàP)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘5À•NB¤I’pD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢±^\rãÎŒ£vÑ<í3äü„OˆÃ³]º˜¾ÿŒ#pÖÂKNö]ƒpèã|¿¾cò7Œ‹ç˜¢&\r/»\"9n\r—·0¥™nMór•3^ë„ClDŠa¤C)JVêá•Ms×-ôEe’/ºZ¾á0Ö2RÒîg;U=òu%/wQå6Ñ\rsÖKŽ®ƒãØþD3 X7\$AM²!Aôò¸KÆÒ=e°üqÅ£åÇý¾eÒÚÍ”1pÕŽ›soeŸ¼ŽœAþûWÄ{ÔY* €\n•ú‰Â#Q!Ô6@@ƒl¡•Ý¹òœ_QIL¥5Z„`êƒtO©î\n ôF¯ ºi3†v Ï´#`§›#õl@Rº\"…5:\"WJæd}P™jbtÂX\\>w.™ÕCµ¤CÂ¬€êE)=Ç†²Òiy€è¸¥´—9``lnGüñ0ÆÞQC“)iö+7ôP{À‘qÄXqfY¤7„i#ÔwïXÖºµ\"í\"Y0HèEw¦h^©}6,ÑÖ?è•\"Ö‹Ñ)Z%§6…d“1}ÑåsJ%Tƒd*Ñ’ÉºE=GXæ•ê5èa	JøÜyH ÑÄ¸˜ˆ–œK<†\n©Ò“hä“Ò:Äx,5¿Ê,’DÇä¾+‘òûy¤EçÁÃ«'ž™^PÇÆY6å,æfQmäÌ)V²b\\Œ‚¤ÅØ1. ÙOYð49\0£¶w[™â\rá˜3ÆÄpùy-érc\$ ¨Ï(mo!äAðæCc=áÌ3@À@PÃ:+`°ø‡*(a‚+©ô¶ÜO¸(`¤¯0¦‚1H6fÛL4v« Ô]^Æôš@D Ar8[éÊ?\$™\0Íp®voÊD¬£ZŽÞñdiLÐFÐ‰òñ\n‡gñ6£&r‘Bf\"ôYñrDâ©JrÈ+ÁPï·£à›-Oˆ°ÉK˜}\$iù>FkOj-LÀ7ÀÈŸ¡Š,pŽ\0Ï‘nU©ük‰ÕT¿C—Zª3õœ·Æ×‚_jI£ª5MåDª€ÑHG‹ÄF4²¼C°áÂÜ‡0îÙ\\heÀ4µ\0ÉRlHhj\rIª5f°Öšã^l\rˆ96FÌÚUÂOM¹µ7úÝ£vo\ré¾L×\0Ú\\…péÝÅ‡ã\rg‰ÊžfDƒuè²µ\nË¢2@\rw„öÑ4›²ž¬Ô½CEÍ—Âmkm\\«Ñ9B«´Ûp2k-¡@Dj†cœè\n\n (ŒXÎ~MøP³ÛY†¯Iù€Ã§^¢™dˆf<U0¨â—ûŠt9Q0¡`höoäX%óX³Ó×4ÿ—‰)db1Ùüš\\r‰\nÇ³‘GËä,}ÿÊÞ©ãp¡åÒ õFcºÕFÈ¦Õ§©Q0»ˆ2èàâhBiß%¢À²[ˆ)iä½™Fˆ««j0’>Nà ¥ÆžHÇƒs?'ì5\0ãØ ÁÉu×Úÿuˆhm €1”7!¦Ï…¼=Çe|¶kt4Ã‘øó*\0žÂ¦tœëŠY‹S:´=ž¨nÁHÉÆæ±rœy9¦—ìøæó…Lhª_ÐQ`Ãpf\r!œ:‡(bŸ´•Å°„ô†\\;#óþ‹%kHÆpÝEJDq­81n7#·ìá¥§`©‰[Ë\r&žgÒ¸¨õ+b\rŒÏVºãŠ—d%šX˜FR³µþYá<'\0ª A\nr@@(L¼­T,#²±ÍA‘°÷\"¡”Ì´Ù¬Ø‹HÕ=Ò~˜aqL}õT%ê«y­QR•sŠÏLÊ¼¨\\èšr¸I<\"Œ¥2DŸYÐdíåÐI†4íôõž’’ª,ãµ³i†è;Gê;=ëG}¡±Yò¼ˆYiúÚwgö¡rý·bEúÙžBã‹)&UÍÑ0[áë<Fx½‡m<¦f}ç±+ùê¶qVxŸ]¿u¨÷ä*nz›óÖpÄìœõ°q¼–Ð£žT)U2”EÞ¾¢ëgÞ¿‚³sà‘’™³ªÄˆYÁ) H<Ç©Óú¯Í\nA”¡˜Ï“ñ>¿+Hx¨´ùÔÔ3†€Aˆñ.OpÄ/If\"wSU¿ À-–9¯ÌAËF¶ÔcÞ\r@Jƒx&ÎBTÇJ›%äëGžE\0ÒH(eÖ\n`‚€¦£Ø„ ÊŽöœ„ ƒF’¬¼4i0©ðcO€¤†ô#|#\0P	 Ü‚\nq ¦mT¢JhKp>ãÐ‚0+. îžgzâî¨y+LôœãZïìp~Î6Åæ7ËŽ’p¨ð¢Î:‰¼'ð´¸MÞ‰ÌþzÂ`BªÛn‚1Œ©Êøi\"JOrëi ƒ.2çNÆ&ÎÊÑLìwD\rŽ®ø/ÿLÀõ‚Œ ã¬‘°X‚Î‚úbÎN&z³á`*EpÛ„4÷	òêjÚ‹+Zœ¡,jŒt	”ÎüÆÊ¢I +äÚBÇØÍh\n'ÏœøËb.±tùïŽWÍ˜m”eGÀb¯ð¨ÆfM¯fÑ	:öÉ@8ÎT\n€‚`\r>aàÒ=à@ #Æ\rí.()œCî¸î*N\\ø…”Ží”Ð	ˆ7¯FIGÒ—\"6|±ÐÂ7'ÑNqï&è0ö×‰HÃîÆçïü‘F{„ó\\Ë'˜ÎJH}1þç#¨XpÐ®,!/4ÊMªÀÇÄu®zõEêo ¤ð\"\"Ê.u\$2¦AðÅ{‰ÍÑ†øTó‹÷ HôYRFëòÊ‚\0Ì‘.H×!L¦¡P¯)à¨hÄ»+I'²>Ÿ2B«O5 Ä\"²		òW#RÅr;*©Ó*\$e'ä0ô’½&ñG#ü\"v¶iÓ-þãŒr†ÂÍHâB0Œ»ªží0H'â‚(b‹³\0\$&J0Ê†¡§ª«“ß3RròòO+QUÄ€W®†TÒè‹ƒ@tòú…•Ä1(£šê£@FÉtíÒYE2Òÿ³&Äsªž*pâÙ+\\ZhâšJÁ-zh‚Þ¬C8ÂÎ¶RdzRµË4¨ËY7ðI8Š«Œ€³ˆžd€6m¼cØnf\nªå¢ô‰3;BÄ¢Ki7KZXFmS=2‘#3éJ²ó-²´h©%sìÉ±3ô'\"%1?ç»?‡Â™†Ã¤PäÈt\"ÓC'4	Ìã\n	¸Šï*Ùòß/åAÃ8!E,|yò\$¨Íã!¿D2ÂëÔmn¯4\"Åi>Á4i.À¨ôYA’“GIºu®›'N†á\\ÑvGGJRe*N	i­È­ÞÉ“t‰rÐë±M¢ß-Ìå:QèÅ4Ä–ñ};Žs²}+Ü+ñRü³|–”ÝÎµ\"£LpjÓ+„=ðÏFR)H\"ËHt>èQ%ñê©í”–°ÉP@ð\0¨ àÝÎjZççQÎ4ÛÓòêHbté\n¯Xñ”D/a\rË_“º˜rQC´FéMõTµYIríCbxµCtk,äóÇ3#ÒM4­P3ëGÔMQûXgwUþõõp‰²g\"eDõŸEKP’iÝ&ic«Dµ^ÉóAHÓü±8‘	á\\I7YiÅ\\µµ%5gH•½]t\\.¸0ðÍµc] y&.*¨ª*j€5³©?tó`ÒIbRfmy%ªÏSÐù_”gZÖª‡Y63#q•E÷UÖ2LªÖA4%VL#4‰O.bbÓo&ÿMÕ{1\nÂÚU<Óòî•bk14ôÙ2É©Q9Óõe“}[uht6129Sös_µçeÕÓjtY§Qôx~q™HHTsQpà(tMÇãb3WkÈx,ãe5lÑl4•t¾ÏÎ/;ê€J'ŽÍÅe¶(Q~ÚÌ'ð\naæÒ£Gå1 Ã§5§ú1BA³]/2ºñËHêÑo\rpÛp–Öæö1\",ú\"0Óo‘4^ÕÊÅWGS°«n®wJNzõ²Í þ^lZˆT´å@ƒRÀ²\n\0ŠÃ¬5dçøhW-Ys=sld·<ê¶£6»SôqXUSGwVS†œ„¥&“Ç?58MÖÛSðÆãW/C3½)°•ku’Ju\r2õÿbQgyko‹-i—ãQTW}v­W5•@}Gô5pWåk7ë_²JCµß€U™u©Ëú.4dâ'àŠ<'ÃµÉa×÷l·úîÑqeQt7©w\0x2½W×á\\ø`%—‘s„Ô£ƒ4šGµã3Ö¯pvŸ‚I‡‚Šƒ‚ÊÕnØSƒv«u\$¥ˆ5ˆFL_BÛØ‡‡VÃD¤CõêòW¹NÄ1wBM`¬4/P8oi‹È—wV~ì,ÃNs›ÅS\0\r€—ÓVGHÖLò•]ƒØ]•ºž¶HëDÌW¼B^…çQqcY\nYIÁ€u›ltQC×úƒÈ@ü\rïcVöJRÕ uô’ ÍWßhà“\rØÝ«lC³PÏ39”WÊÙ#ïnœ­sG¤LŠ–/mŠ4ÖçYb‘–•7i¹k7Ç˜YC˜™Wy[˜ø?zÖŸ™rb•¹E‰5€Ù\0©n–Ý™³ß0µ±”Ökœ9°ÙÏWkù¡ŽØ»õ\$SS89·õøA4už9æÝØs•™Ý\\Ô…õ¹›Ùá=îxÛÙû…wØœµ#œyØö¹£‹	ç—ie˜¹'›™ó Ä‘¢Ù	£½›U³‘6±†…¤Ezv3–•áŠíšt]^ÑzC¥’bÐ—Ý…™Í£úm¥v§™šu–¸w•ÓóÉÙ†8G‰Ô¢þÆ+8\n£qŒíÚ5^ZMQNÞzœ‡„wª6KªuM2yËoúd~Z²ØÚ¶ÀîEZ¤c©™ú% 8{ ”n	rÕPEYa8LÔ}é¯©Oh†ãGHV²Çï«ZyYnø®1XöÉš”‰÷˜÷V—²­¢[ ç¸TÑ\$ö'D—ZWY\0sÐOÕ44d-=Ó0}9¾+›=pøD€XïKp·@ä\$®û\$P\rƒÀŒ»~\$2Ç–¸??w~Æ€^6>x[/¸õ—¹8FÆ9¤§U¹ØÛíx¦¥>\r€VÕ¯¼\r`@Ý&¾\0Úq€ÒÊ(r¢¼ÃÖ<@Úû(KèÞàª\n€Œ p½„X+Ût¨®˜×·oÂ\$ÉÈá‘ÁBÒ°)Åë¬µêS1œ÷ÉeÍ¹o¯é—\0iš™ü éÜ%®z¥»·«¦m•I:t†OŒR–\"XÖë&I5Œjg ›½›Ý?ìÚÅÕ\0û{…“O›>#Š+âmd·Nèà,é-¡:Hwâ ¤œ{”Âƒ7›\nüŸv‘“\$d¸§˜í£«R	aÄL+èØZ8N@˜ßDVE¼Ú(«âl£Ä>£ûFŒ‰NvÇd›Øt\$¥E²sÅh¯ÁYÕÚ›¢~Sè>ûðCôA²Ý©áQµñ(:9²ÕÐSîNt’a›­†&+—ÂËè“IQMª]7‡Ô‘D™íšYñÓWú\nƒü=ƒà;ãÂðÕ`Þ5±ÅÒ<T6önÈ’šˆeS5]Šø÷ÕV²<:½9Hý'v{lIjzÌÉJi9 P¤XlHgµƒ‘Df|Ïµ+T5ê€ˆ>Î\nj)Ã™-\0ù Æ ê\r³ÿ Gi¢cŠ'àŸ×ÆÃÆ\n¶¯ÔÛ•5*ÜìôßÀÄ»ÉºÒg¸ƒ\"ËÙ'KÐÇ:\0¨]>Û[Ávõ»\r…X·on+?¤“²WÑ{ŽØóü^Iá´þ]Cs6.íÔgKšÅ£(Þv7Ce4‡Ú|ÐÙ´Ï(6•°•¸MpDà	\0t	 š@¦\n`";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¸0äãCŽÜºŸ+*5NeÄ·	 âÌÀMhÚÚ<)é2×Â2<DA4’ˆ€VŽlã,5È;›,+dƒµE„;˜€&iüdÇÛ(UGT6Ý­§©œÓ;ªËÉ?IééGwYü³i Z…ZÕrb¢¬¯åÅ¾ï×U“6LV\nz¤9D×SÖ€ZÎ»6‘bw”·60»Ñ+;¤ŸÄ…ïF«ùApYÞ7ó›¸Y\ná’^ÐÓƒ,EŠªg+ƒÖ9£0z\r è8aÐ^Žúh\\0Œƒlx2ŽApÞ9áxÊ7kCÄ\n7cHß®OðÃ¬£¦†/Á£Ü5„Að’6ŽÈÛ­Žà^0‡Ô¸A»ÀãxÈÿ@›Þ)Š\"`Ó¸¶š:ï»y†5]¬MÓ·D©“r­Û¬\r6-ÍYKûQFŽßIÏN3±OÑÄ]5á9uQÂàÞM=–Øõòc…Q;}Í{†·ŒrCÁªpÒ]ÛŽü±'q¡€.s±(¬Ò‰Ú{<¹´£‚\\\\ÒJàËbÛ)ÂÞSQU‘¿Õ	'pã‚ZB&‚0Ž£`èÃØC*æK!‚œ„O	ÈS¬H˜õ†ï“Š'éÄP•’lJê”Z*àº\"c¶FŽ’Ú_\n(ìª<ùYJ7*0žœ†vŸÊ~+&=ó´8õÞh¸N\$ôª\"zœJÚá.(EW²²æYbµ+©Ø®¼ŒŸÈllÈ4÷‡0ÆÛ ±\0|Ê&–€@âc°QeQ¾„‚@üV®¬\\;(Lí\rZ0LbáŠ¬%Ä˜œš£r°Ž6FçP‰c`‡X4PÚJÊ‰#†ÄòÈ0Ç!d8\n\nr>C3èïãœu.nIF1ÉJp¸æ!(’ËÓPŽy@Y>päcžwù=¼7²C\nÌšBRqÉé'\$\$D#€n@? äAêlç¼7†`Ìš•©=r&eêÉÈT\rçÊC†àò«`¡Œ1ŸÀæŸÈ \r¼3£Àæðr›á„3†x'¸%pmH7T\n\n˜)q°åo#‡=-Ýø aL)bLrŽ±\0JH¼í›bx«Žrñ•Á-Î’,„§mÎ¥5%4œ.óY³XFOá*¢‚Qáx*TÄ)ÊÀT=¼þ†f¯8\n=¨µ0å<cl!‘ªzÏÚC1\rÄ264;zo…`)ÎfÄ”s(±í7v‘”,MåZ³zÌ™×CFÚ[<UÀ[ÑwÊE`€šCšGÎÀ0îÕÜeÀ4´\0Èªs>\r\r¡4FŒÒSLiÍB~5F¬ÖÓ\\±M}°¶0^ÙP[hm@‰¶ÆÜÜ“tnÍâ­7ÓßÛHhpN¿†Ö{ÜYój“u¼*ŠhæŽj²zÅõ_¹å…êóc8§TÞ¯j4¡¡Š”LÆ>:ñuÓâˆwÉØÄ¼@P\0 Ä•…#r‰‡‡Ž‰\\ÆµÎQU*åfŽ9BÇu•IôXïžhg‹Øsñèð¨’Øæo4s,)Ù,U:‹\nél.ÇØQõxsNÜL­.úµ¦¤‘)\\˜¤j\\¬’JOH ¥ÁŸöáƒsƒ@è\$4\0ã\0, ÁÈ7†Ú‡QCuM@íl9Öáò?¡ÂzTcÒX¾Â‰Q,Ql%+etž•\\<.±¦V¸„…(\"g‰o”,wÂZ‡âut…-DX@¹æR§~¥¦oÐæ-›xBËTR©¾õé=|cëm@3àÄC<_q9üóîÏ‚0T½M¹Á†–èÕßÝÁÈyAµCÜÕbÌm¦ªt™²\"\"äK„\"¯.äñ(¤âcÐ¢ÂA<'\0ª A\naìPˆB`EÙoQPjõ&zŒz[QÉƒŸ¯/žw9§H·§aÚŒ‡Ä]b>… \"|8¡F.øß”RR†åM+SWCMayÞÌ…\r@øM˜X<%rk¤±\nã¢×àT^Ž£\n \\0yÀ’c1N%–åõGo‡ÖuO\0œ|˜;ré‹Ü~*ÇS¤©sÜ²;ª^Ã+.»wØF»æJ†°Vø^hßwHŒZ’”vD`()Vêb¸t«ä„þâBà&AÖƒErÛÁ.Ý›Û¢õ‰^œX{)„¹¼‚õžÌQÊLrÌÝÄë&[é¯`*ƒ›¢nÑ\$ƒHz€!\"‡	ý\0jéùh2%sp¤\$•¡ø\0Çñš+qð5°A¥ÿxÊàÏ¸eë&1»Ý{ßGB,®“øìK„8Ò«âçëŽ2”áŽ{7a˜(CÛŒN—Ø§Çk¡µ|YâÓ­Þj×„¬¡DêóYßÜÛÏ;yã¦ÜÇDIØðÁu;ÒNïCâg—è¹®Nü®wÈ¼£jæÃ~[+‹™ïVntQB”¯zl‘mþŽf\ndB,xkšŽm„Ù@¨ †	\0@Çæ¨\r#øÒ¦€>\0ÞÆä\rPóä&m\n¤Ã5(äJ(}Ê.[Iô\0^3^D¤¤ôÅdf„ZYårDPH-HºsNH¦å;y¸äfR”çª.n„ºjìQŽÖÁãÂËc¤1æKé®'ptëb&+fÚðK\nTIè„h—	‹è¦ÇxAð´¥°rDF\nc§jGöÈ€îb²}¡pþ¢¶÷D¨2e8îÄ ;ä9ÎâÂ¥6âÏÎrŽ¹oþ‘fRCAéª„eô_´ùà\nàÊGM^ÓƒòRï«\nFBQ.9C)ŽâTLÑ~B‡Í%Qº.Ejšej'â@D§00%j6¾^±v_c›ÅbçÃº~BP\\ÂføˆÞûdJ9E	B¯ŠQˆpQNrèPÊ¯.K\r„\rÊö^ÐÞ-ƒÂÞÇ\rpƒ\r¢²;n–‡fèEòÈFùd—ŽNDFlîékñÊrÏ±é.–q½R°\næHç!\rì5Î¢1ø‡D`1rï±èõ/lBQ çŽ<bÎjâ‹ü‹&%­èE®6àÑŠ–:B„ì„ø+g2B³%­Ì”2bH\r¸ÚÒ@9Ð×%ë·&Oöy¤ôøc\"tïŒŽ.ö¤ÂSÎM\"Í©\r'Ï'ç2CX%íbE²E§¤½mÐ.èz.áN2z¤)rãî\\¿ÑÃ'Ó!r¤õèäÂç#\r¬æÖ“Û\"ªp•ðwN#\$Rò.B®£ úB¡ räøƒ¤öO)³éP,rá/©~òRÛÒ£2É(ñïÎbàs6«“:’ÐhÖö)púvÓF\\Êa«í†,ÿÜBQñ%\rdÞófXb_ª;pk3'Ï	R=\rD¡jðO/ `Ínæ°O8ÑÇ2³™7sœ‡-lD¥ÆsÓr¹3U)Há5¯‘5ïšÖs´T§:sNIëµ4Rø8¨>5‡=\nÌR%Šl¥³Røäò~&r¸Q„8zPXÀ°¡#²¨ÏŽm-…js/œ‡DŸ@lÜå\$Xãh„SGÏ+nYpá2e÷\0ãÂEÈ’è…@Dzø*S÷\0ï‚OÓ®ùÂÈÚó¶8Ó»#®õ¼5søE¯…¥xE¸IEDÈåEäÜô ô³352æø³Æö“âô‡]:ƒJ#»JsÚ¯3ßDÌùRS‹¶w¥jÿ¨;q\0001	ä®“¬ÿŽˆ-”ÍM—<›5tŸ5Ô­LtßB\nùóKguO4é1“Äu2™G»Oq#O©KP…G'ˆ×´àîôÑ6¿@²ŠÁc¢6Ž¼ÿÑºB•&F¥Ì'r2V³Þ<#Q579MxQ#ÂPÎ˜=.¤É3?MS«1.N\nUdjuk5)'gPÓÉ)´£WIýW”þtM³XßXI \rÏêušÖTíZl>lˆœ È¦/ÒU§Z¦Ç\\N[€ß[ÕÀ€(âf…jVä)?âà'³ì‡#\n‰´Nñê»Õ¨=ô©-õq*Uú€ÿW³ÝYU5ö\nkiËaMWõ±P®<´£a¶Nubuƒbµ‰2©\$µýaõ’–¹/‘–VhG^VM–/µßÃ›e”²rö 6_>R\n*b·\råš å]¹<•áfiC%ys}6 ¨> Îü6!-Ö\\âÒi¯À©¶5Xu1Ö65ÛjÖŸkk46OY”™P–:öu·lÃhCNØj…Í¥£OU%O”ÏÔ×f\rv”¹ÓXTÒãlö·5iÖû7·<wf4WW×¦â°	\0\rlƒˆJàÔÌÃüÃbz]³dV¤°NÈÌ3„IðpèXÎs@ƒ‡ÌZ\nkY—d_\$ÄgŽPR~R\r¬QNedDøJþ°*š°\$°ô\nk\\=ÉA`éyQã80Ã–ñ\r·_QJÊòRÀ†€ä\r€VÉÎ \rlê ŸT£·Öy(ÃZ+\0ŒÓ¦ÿyGöK€¬\0ª\n€Œ ppJ±8Ó‹liL„jÝK°RÁmÂ×‚ƒtÔ(ÀrBf¿@	¸ÀòÖ-ÒE¥|ÃŸ@b\0”g˜8×Ü9E‘rwNsÏÍ8vw…WÓ(\rª¤6b}\nébRèBH.ë£\"¿nâF‡BñÆ\$Ál@˜\ræ «‘‰IöjãÞ@daˆ)oŽ`V±£9¥üS²!Yv^½wÄœ.¢ªÝ´q8Äó\0äóvÑiwb|Ø»as\"“rÖË3Ìôò6<7±Vö¨äà¨Aƒò?£Ùy×ðÉ€Þ¤jO±øÍ48d§ZÝ’SŽã?À+¸âtT»løã’C2Xê“ÒÂ8RÆ8H@Ó“¯}”mÂÝt“*ÏVöònqè0ýÄá^®ÿØ\nÀÂ`ê ÛH+½h‰¯UIB”hÆVâzÔ¤„jJ'¦J„8.òeEEŽ!*ï0ã¶_K¸×­öƒ•WFØÒI­øvd8<2ñCÉ0Û®\rœ§x'Í#iwV0œ°ôIçÌR‚ºs4ãÇ‡ô“v—8.·Ÿbæzà	\0t	 š@¦\n`";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtê„2í{äî§Ã†:/’BºŒÊ0ŽKt 4\r@ñ\r®êPX9ã`Ò*˜#Œ£z˜:A‚cJÐÁn¤V‘:ƒ¨Ü:©ð·01b\n€ÞîB²^-ãq½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ì#\"7#ÁrJ3…éŒâ<?H3–„LÔ ËŽ’à¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤ò>ˆ¦NÄŒ#‚|Á–(Â49´0ˆŽKÀÜ¼\r«Â¢2ªrQ>:=’âœ'Š’¨²×ˆ³'>qb×´¤Œ<Ž€Mš›0Mp—¹ktÄ¤£¨Ú	ìÜ3^\ra\0‚9J0ˆ‰-.Ó\n;-ƒ«¦)Ô5Œåh2HÛÂ\r}h2Ñš4•Ö9.ˆò:ê(+d¨0¼O˜9§Ï¥ˆ(od6ª˜ê¾-Ä\$ß4õüôæÃ.¥4øDÉÖ>0Ô@PÖã¸‡’Ç¥o\\Ø•éŠO\$VVwa×yö„øëb°<÷çÒË â‘ÚR•¶èô7QHbÖÓÝIòË(zöÁ_.ZN9¦B)u?¨§ÀV âw¨6Eây4CxÌ3CÓbNaéð×±,Â Þ¹Ã#pòFCœh1³˜ÌíÎac49qãÎ0¥‰e§5§C(P9…)<I®H0ô¦)ÁH@58Xê¸ä6§Öæá	\$n“ˆCÆóä(½EÃq¥JòŒ‰òN*1£uòÉ/ ƒ\rÃ=Í5 H÷<1¹h2;„JÁ±-KŠ-™Í‰EÑ©=ÂÓVñA&`÷“0Ø«ž\r…à:bbfƒ+ÇBa\$–W¬©¨\n	¡…Và@ àsä•JPð`eø¿4¶—RúaLi•3¦”Ö›Szq\rÉÍ:†”îž[|OÊï(5\n¡É‰Š8¢C€¤”¡› ‡8Ñ“\nóQ/ø‡(G`ê¹7áÐç4~†Ca>{)H“…SÄ’‰†\rdHÌ<bB›P	@èÇux‚È ` ¢»¦\n)Ø9ï?…<Â¬\"ªˆ×©vGÀ4†Ô<b¹,mÄÀÀðÌÄà aÄ9¬¦«(‹+Ø{@€&@È@âjÂ#Ò\0÷J%ÐPX©'	\$<’,Ò¥‰…RäpÑšP@–CŠòU€9\"gÏ\rØ@t\r<1—%/1LÌ 2îC˜rl^Éx\\¡@'…0¨lˆùsÒl<žö [‰&¦}GÊ\",òHÒlF]òðêC:2mH@çAtG%Ä1Dð1× ¡Ãzi”DØ4¾e20%¡¤‹„`©ê”’¡À’˜X­3&r—M¸¤=SºRò<ÌÉJ‘bw!Ae!<'\0ª A\nÚˆT–ž1ï5f.¶xÑHúv!”®\nz(Lµ¢ÔpÍRAKY`€ê¸Ø¥êª×.D\r4·zÊY”Q¬Fæ6cšôk‰°é!„ŒI9g6>0³^\"©4ôÙ62¦ÞpŸn5–H;	'&ÓÒF>Št—µÌPÈ3¦Î6òàŽ1iöfÔ4¦Ø†Ë)¸s(¼ƒGJžËÛZo… Ê¡ÃM\rW‹f&‡4­ÒsÑ6=GÈ#)ï&~œÕÊæÈü\"Ðb½¤\$^Œ5²TÞÈ®–R‘K•3:¥è4LIÔ`”1šÈ‹‹k¯òH„¦†I<U´q¥(eC(wDjÁY+FÐÎ»XE¡„)\0ÐÕÒÅ8ÁåüÇ:ŒGC5¶h˜h\"RçóLXEÏ:aPàšú[±jåÅG4£’†‘Š™óJ )Â8lvƒJ¢’«p9ù,¿ByÜz-8—£cæJ®Wm5@¨BH\$—™‰lh¦	3´‘tB¢NÓxuž‰A*-0^UÖ›3UEi¦“€²s™ÔÍ+QçªyB¨‹cˆ]2¨XÜµ)Œ.r©‡“F€NhŸdñ#gÑbôA€Æ´å)hM\r\\ó¾Š¬z2Nhüx!ô±Ó‡œîPÕÊÙi….¤iœ­'Ÿý‰ÓkAP›º,t†u6:Ú€ëuŸÅ>©Õznl¥vP@R* &f‡r\"RI©#o¼‰uU¶ÉyŒq—ÌÎŒ‘¦jCQ4;†PÅ˜‘™OrEDûµ]ºR•F™Ù:og¥ \rÊM6R•¨pˆë”~\\ÏªµI5•ä%âÂ‹àTV˜4^knpÝL´2ÒrÆFEànr‡oGrZÄ\"n*#œ–ô>GÌÞÙ¨.r9žÕMÍ[SKÊqz»ü\\Ûˆm\ræm§!	Jª›C–mj¿£5ù7Å´’Xé„\"5Öºå~ëêÓ¤#ºœ'úšêÂ­e„sÊ H56k	ã‹Ã^¶\$6ìtO‡Zªo½«n\n§›êoiÏ§‰—qvå‹Ü9/‡³YEµô3µ-+PñÇ\$˜É[›Hð¾£ð/+|¿Fô\$_ÎóîJá\rßÆ+\"›ÝõìDþ¬zDg5-¤>Ó#{r§î‰öŸÔFRG~ã‰©ƒ`\"ƒ’RÝT'å'ú^·È}h-KñGAmž¤Õ,:…¦ž e•¬óOfuf@¼V<¤Ž¶¨Ñò_•^ýg,óOKFî`Ä;DdþåR1í*àì€¢³	*ÎÕ/¼ûÀlì>KK2.LDÃ%z­C–°¬ÏæVn¶Ãzû°?.Èôg\\ÁŽRìŒ¤õ‹p@ãƒ}ì¨É#úkDä°pqï¸óçüÉOÄòÐb\\”ó…pÄe{°†‹¤˜²\$€Í¼¨ÆC4-ä2ÈæÖ¼C-ìømLˆø°~ÔÐÁ¯OO0Eî{Â*‡ÄgŠ 1)ò4/	04B0Ú_ Ò_pšÊ€³¢Eå\\Hch#bð‚Ïâþl\"=ðÄîCßÎ‰\rq!O±,W±+E´þPtú±>a\$ü‘FVÏ[qÆÉ.qŒ]o\\{lc‘LÅ…xŒO[‘[À´7¤5¬œGuÍL;\$n>‘‹®\\@q”òŽ…Öà†;£æ®Î1-H=O€¬\"Ød\"Zet¶C”_ŠÓªnm‚Ðãc±ñ®×ÑØîàà\"Ä€3eöÅšÏQÑH4ƒ…Z\"N'b\"\nc¸92\n¢\"Î%”ù€ùÏ„ØMC!íÆø'˜=Ž¤SïZ)…ÊÈ!N%Ž>=£DdP\r€VJ\"þY@Ü\$àŒ£Gˆ™`ÄŠ¢\n ¨ÀZ~åE&8hR–ñg`Æ¾±-­@Ñ2-\$†9ÆÀÙŽŽRì„QFƒRzÀòCd<,­B#h/.@ìñ\r{#Ò…\$\"dãæ²)…¨Ç#Æ'ÆªgCã)rA ò“æ&[1ƒ¤=ÂH]J`\"é>ã.³	Ã/‚øþ#}àêf.jý¢È×&ñ*‚k¼qÒç%~ý­aéG³*aÅ42vr\n\0 C\$\"0Å±fÁïÚ1íµ¶E³Bž‹0 ’¬é†lSêìïf=²jJï7à„\rè,iîLŠf\nÀÂ)å¼/¢Ÿê sR4DøW§#@ôV‚ø]dÙ9LV7²4£]8¦ÆoŸ+“\nfï6'â/2æâ-ëZó<H!6ƒœ2©,CæžŽä/8JƒU\0ä";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ4ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!®0Þ£(épï0Â7\ra|\$£ƒ¤6ß xŒ!ô°b\0Þ2:îÈæä\nbˆ˜4»ËZ©–1|<Ý¦)q-f\$Ñ ”ÚOÄ‰I\rZYÒ„&®7Ö_irÝèsži¶-HÙ´vÃjÿ¤ª¾n˜Í*\n'B‹^„»A±3Û&Ìœ¥ó™eW©©\"@†ÇHÔÎ©—û… ‡%Ìõ)™š„4˜oyËfÉIºÞZßW’–ø‡Á‚%¼0Ž£`èÃØ:Œ±Y—YkcWº-èK£\\UEi1‡LÜæ’–|e°DhF¹kUM›mi>L¬:l¡!	]„‡êÑkAH¦R·!Ak\n’X3¨rÄF)JB7*6`o39Œx\\“Cé^ºA#E”æÞ11=8”¾chôèŠOä‚lùºžRÙŠ¨i­™­4ˆ!HëÙ\$Ðƒ\$\nÎ†Œ3p*›g¨ØZÚjxë[¿Ic¨Pu(¬Íc¡¨üºÂfzû¼V/íh¡F¦éF‹V¬â\0*x9`’ Q†É—œ°rGá°CÃ0f\r‹Á•5“ZyË\r¬,<‚\0ê¿C¨cgT9†g*`oè@9£Àè¢èaá…êÙXâ§x0RZÌÑ»Ni!/µ@Â˜RÏUš·À\\AãÆ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Väb´”&¬Ýá«#l.	àT8¬0ëeé—òw/\0ä\0_Á‘x‚´·òà,ì820º„;c%­U•è#ßL,h¦D’£r¢#â.vÈÔÐ£„ÖŽÉ²´r\nKNAe+RŸ“h|†¤bxCs;ÁÈæOæ×£ ¡à8•º\$|Ç\ruo®Æ¹W:é]kµw†åâ¼×ª÷_4\r~/æ\0Øä`¬0ØÂØkb,MŠÍ&4YØã\r}±ÀÂÎC(9‹Æ-Ñ`Ü&¢ZÃDKŸ¤TTÈk2…=—Ÿæ·M\nV\"\$÷ü”ÍšŠ1„hßÒ’’…¸ \n (ÓùUÒ£|F  ³‚”y'JQN7ÈÑž:˜#›hŒ*\">p¸“ü›A.5P…¸áÐöÅ#Ø*JykOf!\"¦’˜‰(°¡;7bHl7­(¤ÔÝ&…”wÊe£ZŒ®Ût-(ÎrMärJ§ôNn4DÙ.–	àI\"áäá\0ÈYÊrìŒ72ÀxÝ.r}\0Ìƒxm—rö‹OÃÀ¾\0c,Œëž¬#e=I8IPBšš›Y\$žžÅåb	áL*;˜7m“ø­VövÚ‹ë}Ê¡3õÆÝ8ÂŽì°-FFH¶Ò¾Ì*ËÖ*FÉ¦¶æMÉ*eÎ¼KœŠùCt^bA½v‚¶ƒHg”&]c¢r‚ÛÁP(bë›˜ŠôrôêëÝ’0¼N:òBma™8ê”šÊ5xNLÎ¶ä6JÈ4 ANÀh+ƒL&!é'ÐŽe™—È!iÀ64!YÌ¦e`'†‘HYû4jZHÔõBñQz RH½è·¥hQaNÄšÔ!êàîòêJ¥EY„BÚJA{*áV-WGS4¹XlÝÏ3‹Ôâ¸\$µé¿Åïø…-jþPÊ½cRÐCS•NSV¡,ZÞS •píÿêgõUT2Ïî%Ë±­jÌÓ­(ß£ô-BmÐ-¸ßš\0AH2± ÒùC¢ÿ\rÈDÍcr–Ö¬5Ž²Öt£V­Iiwä³¹éÒ²DªCè]oú4lõ6FÑL³|û™Úª9mK&|\rÝ2\r\r!éÎ„;²#Û\na”é3¼5.½~YÐ…>âèVmwˆ%{Õâ\\×¬€èPï©ZIF7BÑ»¤h²ä\$!¥0…=tÊþv¨.e'¦YÄß\0PZ‚\$[M¹¡MnÊ>Üié–Éêf^Jrd“±WÏ(C•l™ óIUŠs²èÖ¡Üt“±{\n¯ÚòêTÑ¿sÐE÷ØÝ DÑmÅ—¡7êCºß†°ÆB¤hT4•AßI„\r~,½ z7°ïÓŠ+!P*†ÓæçW-Ó’îYÚ–½T¨<çG³eõøˆðËÔxR¦‹¦Ôn>a•?å³FÛÆé}P]áç¦ˆ'NU.‰NzÛ’©Ô^q'ùL÷æ3P\\~Ë\\û‘CZÁS'jü¨}ü—Àýf–L‰`þ´S\$û¯ê€\"Nÿ\näÉÂ>üÏúqïÔdª~°ˆ„øˆ\nmÈ\0\$ïè)¯ìßA'ˆðko·\0ð>npü/òüd@ýðJghâK%Ob¡°Ð`ldø®ApáÐv”o¼´#ZdåÞrë°â2þ,°f(j@-,%’\$d'\no<6/#I2K‰* ©²4Gœ£Ð•¥X ÅXˆd·!vÃ®bU¤\\(PÚÒO?\0£÷\"¥\nâÜcä5dÒØãà›í®HK^ø”ã-\"‘©Bêç3®À´©V0ñ\$¤#CFâ-4šäX›‰ãçB4Ï,@Ñ\$hå©pf-p40<GÍzý+×âƒéNkp#‘Xk¡¦	Åâ0¦ËIê-n,†ÎÑp®1d&1Œ#ñèÄLÛ(.v©ÊÿÐzq¦âî›‚Fìîô%byÁ`ªjÎÈjèæ¨ñ‚Â’Bp”2GœAgÒ›\"<D\$äõ(*‚44Ä ‘ªÒãâµ F¦Î‘Ò6íí!²=1æqî²„n¨ÃD‰Á,üè	„ÌM¦ér,‚‡Ï\$*4i0RÐÂJ´ S!LüˆmhÍžÖò5\$I\$ÖeFØ²mr!\r:Ng˜áDáå}'²j€%‰°â/D«Q¥)1#)h|‚2R;)€-Ÿ('-O#Èæm‹,žÙMó*rº‚r¾5qr+q·íJ2«âGDc.BGÒí«Ù/(4ê˜ˆÄy/äHr³RçOàFMs/rý.òþ)ÅtÛ/-0kp,Ð}0îÿ12å+q1²ô‚òøDÉÎÕ³)03.ó30ÑlZÐÉ&ò´«ò¸=.ÓÆdí’ìíÁ11Ÿ,sjELšü‰ “vÊS=#“i.ã6ì8®Û9dCr£'m“\$¢ÏD3|ßKˆM\$¢®.¢V*«æÃa~±‹Z­çL´ƒ,?\$6kµ;ó¹%¯v¦^òc€ŽªéÆ°óËC%„\"\nû!Ž	;c ³©ÊíÉ.¯q;«KÂì…\"½s8…	8Æ”ÊN½¤Tz‘×¬öìMPÑ‡€C=\$ÃÙ%€iN‡91w+†V>Ô\\7s},N'9”fè0+3©²¸ÛâLômBÄ4jè‘óq™6H‰r¸÷ähZôa1pxóT¢‡4}*9Ž €™®jÔ…:´¾IbºjÍT›†rf¥^ýpW¡ V@1bšÓ(:.„ðÝðLU¥(JqëOGèÒBBè;2¯*O1,òõ'\ry'R<í±Pï.h4§4ÙR\r0U-ó-1ÈÒ=K±?thXuæ­TNÆMSõ2Õh3¯HdÚZuJÒµOLõcL“óR55V>o\nÞ“Ð=>¥X.*ò¯nôÚ’VÔD¼¯4oQ³9”ÓO*ç8Uš·ó§KUAIôYJY”ñYÔ™3ó—-•TêE2²•½ZÕÂ’õr†só[°Ç[ë´îŠožØÑ£Jµ~ ô³-R¥_•Î†ƒà õÞÙsÂMìï_49Ea‚½RµË_–\"HTiaµ³`¬þ0#`–\$Hƒð®¢¦îB¼N£&ÜT“Jå-NOLµejPQÒ¹fÚôãYf•Ç9Oý9–pVQSg’Ñuec¡JB¤§?äAP³UUèŒÐ¢Rªnt0ÊÏUe}Qi³\rÔûS50ò¢‚ýëgS¶»TüÿæÁU¶È³¶Í1Ñ…Ov¼g«zWéël3SlmµæànT&V¥—® (ôê#ñYn§KõxZ Ÿ	ô˜©ô; ê# ¦¤ãŽ#È—+kvÑ1U-p4Hvãk—Ab¶õå5\0vÏnuÉgâ•5ÑZ¶ hÞ\r€Ví­«^µ±¢S\"4ÿ@5„=SgUb'MW*`ŒÆæ9r§.JrÅ ª\n€Œ pð˜+ŽB0IÙ%m­:c|#È\\Ï40\0ú-‡k’‰](OCð^ú—¿Óch·Û|³±P1\"d¾(û¦ZˆÖÑÚ[\0šcàÒÀòBadYãt%16>¤J@ô(S”fô¶s|ÃVYI?}Ôð0À®ëx®¥2Éè2qèâ‰¨H¦þ)&ëA(k@	ŒY{d%†ŒZ\r¥è9¸<‡ÚÛI0>­œ´…¢ñ²?€ˆq;öŠ2\$6i=#Ñ“˜“12…-e«c¸£DD3‰x )®6™b¨ã·/IIGŒªn‹‰M¤Ô\$÷`§òífQ»QÛ@3¾iŽL¡PgÔO=D2ôCŒÙ \n˜À‘âáÔÁòÚ‘Ëì+ñ\$'têÎ5Ô<q&ˆ*/+ð›Dè\nÀÂ`ê ÚÑ8â®Ã}ˆwL§þÐÇ–NÚCêåÖI‚ÄÐÐ\$:t!=D6åm\"ÚuŒâ(4)FœqÃ¨­šÖÒ™‘\r9ŠÙ†#E\rÁ‚µ“^s…†&p\0krúxÃ]=I\rMF¼±@";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÈ!ªpK(«0³N)b()Á7&hÐÐb,+]’/ÄP!\0Ï“ P›k¼<ÈH\n3°Ã|•/Ð\"1‚'\0\0P¦¦‹RÙ!”1êdœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘9Ü˜„ˆA¯¯™Z8B<NË(4=9%3÷.—sd|4Ê Px¡Ê3¡Ð:ƒ€æáxïW…ÃÈ6º(ä\rãÎŒ£ux<•èæ4¿áxDŽ5ÐÊ:T¢øÄ6J£XD	#hà6£mz:xÂBR-–4\rã\"87„¨æ2„˜¢&\r6\n\\,[/S*Ë³2Õ‚h	KŽFt†Æì @§Ž´I†V\rÏC”Ø-òcë!×0Ä<Ø!@æÃïÐèÝIÊÄ>‹—I¢`™0Ô’¤œEql¶•6?ƒ°Â6£+·lÃð\nœ)ØÝ•0ÉÁ*»#Å*an¸Öà—ìRôR¿—évTÊDÜ°EÑ^”Í¤N»(]>lNM¤š‘Ää4È	 íI/+|´¢ÊÙt&\n#©†T¿ƒ£ºP ‹t¼¯on´Í\rŠl­w	€Pñž\rÃ41î\\J¤‚¦\"r¬?;(hÉ æ™[,*˜]XÑÖã¥ÕþþàIßEÒ\\T]µëR‚Ò”N¥ÔîíÄ]¶?×”7Cb¶sÔùÞÏ5ð“7=—iË±Y ä#{5dÝƒxÌ3P#pÊ¥ÜŽö>Ð qñ†Z¢c\nH:(©\"žÈKá§pIí7 ` \"â‘ÓÒäJÃù3@•s&q•\$¹!¡–žN×-\rÑ ŒþCL	hõ)BR’‰ bDâÍ‘t*Ã©.P©ŽÑBÁÿïÁh‡0@•ÊéXeØ «5j Hc?ë2+`@§àR¢T€ˆ¤-0ÈÃt:n­ò\\@iLåPsžSIÚC'Ì_‡HT†ð‘eFmãÂò±’t>iÝ¬Ç3²q-Šê‚-*UNªUZ­UáÝXÄçÜ­ÕÊ»Wªý`†å†±V8tY!e¬Õž´V™‡=\$P“(Øc*àeÄ²=¦¬\$]@»Eá —æÐ|O™#q‰Ì‰†Pç'Éi‹4ˆh 9~‘Sê	?E°Ð@Ý]@ºçð(€ Mš#Â\\þ“„2L—AH)oõƒ®Bß\nƒP?AE®û3Ã¤{:¦\$\0QÐÈvMBìQŸÉjÛ RJƒ(àþÐ1:]Ž)?JtLÒ.*N!þ?x¼Ã8j@aÀ)%Á\$‰—ÌzƒJæ\rÁ¼þ.°Ü¹ˆèiˆÊˆÔLcøñ×‰ªÒK“EzAC`o]s‚#\0Ã)	pD^êÌ’èQ	`/\n<)…Hw¡y9‘A\"<)¶ÊÁÙ93#´ÂQ;¦Ñ;Ÿ* Ò¯éÄÂÒ°(.J§\nHR)Ÿ¡S2ú0Ž)=%D°õ&âì‚¤ß7Å‹©ëb×CÕOg%?TµYì­°øò2ì[XŠEC,’OyëcS¤ï&kÕÛ›'\\ä£•\n~¬+u0Èˆ]„Æ.Äk\rbf\$ì%ˆ\rL  –«0XÈîI âÞ²6+\"%;–µÝ„Éáf]Ó£»ÑÉ¼Ë«W¥é¸ ‚î´Wa{/SJ¤Ì9¥‹Š/împK!	¨\\\"ÒhJ‘³áH2­pÒã\nÄa±¢5XG¦„‰HŸÓvo†U€°°Vc`(+óÕvHâgÃFè¢tÛ+Ó‹HÂŽð8ÃdKÉb&¤ÜœÖ˜+Qƒ#'íÃã˜ëiCí\"s‡\"I äaVÊq@‡ Ê¹Žxeæ-„›2.Ã+ÓIˆ€œ™ q˜!¯gâï/ cŽŽ­áUPï°ã—pÚsñ€žÏ\"Pð¶x^¬5Èw‰Ct»\"¹øÔ,Ö\$rVlé,'ÍŸqFè®’fRžÕL{—¹èžJ›Sx\n!P*† K˜ÀôºXDÃ¨p\nå`†Iz^2:\$?±»µº²!ñÌ\0¼èŒd’L \n`X“ºç¥¯9%¼™ã4ú]‘iÂ ›d«Ò@Eš\0!ˆVK’A_vl\n_`„—l\"\r¯²>À&w‘1(EÜA3 ÅEø2Íœ¾ÍÐiV‡ðÿr(ëìª7.5v…>‰ûáW2BÞQñ°m©6•’j3Ò2aÌi”¦qçqa9\nb#É—.ojÌ”ÉÀ«.Å>Òë„F‰xn^Ùû¬¢Ct‹¥qÉ¸öÖ°R†UÚ§Å›.Ö\nt\$%¦% :tøxblêË&ËŠ¸®/ÓItÕÛG«ºw>‡»¼…Š:Ô’ŒóLÁÌDY&~p‰I¸œ§™µU‚Ð‹¦…i—:\n45¥ùX€º%³ÂŠ\"	Z%jYîSÃ@«<Êw~AB/fL¾qø¯lÆ¹ë˜Cmse'œ÷ ³ù?Ò‹‹n¥Žy4?xºï€ì\"v|Ca.ïVC%_NüyðÜäyu7ÁÒ|+ÏVöAùßØä7ñÉ§fö.€‰ýb\\ñÚ%Ù{×‘àë¤,	#¿kåíÃ#·Œ]œ#^¢òuïŸÓ¿XþpÃÐ‰Ú9^%Â,þLèÿŽÖÿÏFíç`—ª8<¡\"'kÏå.Bìb¢Î\".äÞ`ê<)œ˜M²›oRóêÔ£JÚõÆ³°\"Oç¶Po²:âdœ0,©ãŠ*ªêCÐÿP\ndNÓæPtÏ”g@sc­F>\"ÌªŠàÿ¯þô¯¯Æar¼Ïw	Ì­	0	o¨B‹Þaža®˜³ƒ’Ò…öúo’—/¹04rO¦î¯PÔÍÂ‡\r\r*Ø\r8v&Y\r-,Ë!^?²ãr	lü:¦I!vçÂ,Ñd€Æ ÈxbÐao°é¤ÑåkÙHüÏÑ\rkßQ*¶P~ûð1P}ÇöåbJÌç ]G­~Ç/2Onþ¼Îþ/`@ÃVJjº¶°¢ëëÐû¨°¨zá\"ùÎ„(c!kjˆ‘BM±”-Q\\ŽDz¶±\"³*†‘8Ó±®³h{%\0²ñ]qª«:ºd•ÌÅëW1\r‘Øl\"01Ö˜1Ð Q]\$”sdÖ\$„~S­'éðpÓë\nMñÔaí<Æ…4>ÏàÙq‚M2Ôàƒ¯,µª¸¬C¦’¸åü%PwãX0ÊÈ'rB5fØHÄ;+òaæì„2=ndˆc˜+\"¢å)`rfH@Âe‚B&”@è]C˜Z\0ì]’€Œ2ŒØIœ>*ýqš%Àœ>aJ €†-\0Ùã~jhÜÃÄ~óO\0–p˜BŽM¢HÅr.ObôñcJD\$ì €ª\n€Œ pùËP%\0J°­“V³è*%0\$Á/Í4Ppàw êJª\$Àñu\"üJZÌRÉ*QLSrÄ¼Ãh%ÈFz‹ªüA J£fIE^ˆDë\rGo‹Ê&Ð‡šÅvþ¯\0%R4AA.þÒì+C\nð2np`àÖë4znÕ&,þó|ËP•8*\"\$ƒq9®¹0¹\n¬°iXiÆ lË,©¢Ð×‰X'sCç¬Þ¡~ï#xïcÎ	jÂ&’K5eó=Ð*¬lh¬«~õLÁ'qÃ<ºÆ—\rºI0½fÎ&–-S¤7€ñ¢¬¬\$L„DDlÌK~ã\n	ŒJšQ\n=¤Bwå\$ªîË)>G¸¤º@ ‚‚D£›8j1QžG\r 0@Èáe:3¥0SQþºf|Ð,r4b¢";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*Œb KœåaLŒ–K#Üs¹ÎX—g)<·Ì<&Â©q>så±ÒK–ˆÁtF>ÄÙÊDË!zH¸\$âÐC”*r“eñÊ^”Né.º=ç9f]¸(r\\§‘E	ÊLÉ°Ü:„‘«A^Cå–°ìJ\n]k!3—¤«vs„	Ï5Èópx0²#Ê3¡Ð:ƒ€æáxïC…ÃÈ6¹ƒ(ä\rãÎŒ£u(<5cpæ4ô°DÒ4Ê:O¢ûf0ÃXD	#hàÏ´¨èã|£4u‹Z7Œ#L9²¢˜¢&\r-[jtIÌE•1+Å%¤Á|s”…Ó‚IœÄñÛÇ1(\\9\r\"Öå½p.ªQ`r—eÕ3!õì&tIdnK¬‘EeAÒC‘OU¤QPr”DõþGB\$ö0Ž£`èÃØ:Œ U‘eY‘ù{gcDÝÆH	i Nå¤’“—g1¡—¤iÎ^•ÉiÀXcÀ§ç/AÈ‘Šx—‡5¥jO!Ç8)P€GÂ6\"6T\r›*9Œu@a	‡)\"oøIœ¥ãÒr6íÍÍoÝìQË4meÉÌTJÅæÆ×nçºá›lÏlÄÐSLg1:AéRñxêñG)³ïau&L–~þ–î›.udÙeH‰LkT,¨Þ3ÃeÚœ×éÒJ=\" ÞÌ\rµ@ò´Ðê1Œmæ3b!\0Ø7Œî`æ4ƒ—n0Œã˜yá-{F\rÃ«VaOXÂÄ¤@@!ŠbŒ\$å!ÎD‘ŠµþF¤—YHÙ	ªêr‘¤¬×væ–Eì`¨d•I£ÊEÜ)³š\n‹Q¡Éä5:¦Ã\"Ž	Ý<§´úQÕXdS¦¨æuh­¨SwÊp7,°‡ED1ÖûSšl~ÅÜ&†æjÃ‘™†ÁÌ;©zCÀp\r)è2è&žBzO‰ù@(%¡”BŠzŠ9H)%(¥¢™Sjt©ób¨• \"TÁ±T*¥X«•‚²ƒêÜ£‚tâ¾Á„5™UŠfTsµ\rÊÊÂ5;	…ø…\"„]ŽD*ÈH¯=¥Ø–bà\\áþ@¼¸‰Å”%zpNDè\0‘?éGÈ£ÜCAG!‚%=Á*\"p­LÆ0ta\nIq0&Fš“rr!˜æÂÕg0²¬y»ÌP+ƒH˜yta4«Ó.ÄÖ\0nW¦´×‚ôXÄ7˜9ðÛ T{‡&µJ‚\0ÆðÖ¤5ÆŒ8<ÀÊmI‹‡N\0žÂ¤¡L¦(«8áPD‹~C…è@Y•3À \"™3F¼Ø!Œ1ÆA¬ÂSNðÔS¤ˆ4†p@×'ž2¦u<`©(B½\r*¹H±8ï9'0 XÈÊ(òÐ)³¯f£˜P%a^.@PO	À€*…\0ˆB E©5,\"P˜j‰h¢^aT¸Zx‚YÕ|t‰Q~ÛÅ3Y2¤s²]aÓ0ŒEEÝuuà²\nqvx®\rù·‰4\$ƒ‘¹ß<64Æ6çlbir-ê¹tj9Å@‹^îPrˆñ0ÂË Š:B1… Ê«ÃKY‡š7Ï`Äà¬@ò¨^ÇÈzä\\ž\n‰\0+„Õ¤ZöÌ9ÑnûImEµñ®¦CÓs˜8=f3Œøc5aîØ£Ä:Dèžu¢U½¹£\raÀib×@2«Ó:C¹ã\\K’æ¤ÖTÙSsh[«}”Š+ðKEÐ,‚mnŠÜIh·D\"(P‚%ªáÖtH¥sßdÜ˜§Âo¿6.ˆ0š\"L_a`ËÛdq÷%Å·j´\$,Åšg§äì‡*¼0ÅÁC *¨@‚Â@ œ\n84š'HžŒ°o›œ8S[Úëø¥<—ùÇºñ2¼A\0/b¸Ü£”Ïà§®¸Šñ+ Ìb<K¤qb9D˜AR>KQwË!…^a®34¸bã—Å}þAÏé‚¢±˜…é.ùëD€¥ˆ£œå÷’‚>HEJ'¥6»iŒð9Ü\$‹ABw)04¦ÁR²XA\\2†-N•p¶•Öøû	\ná¬‘ûI‚eaÊ Dàæ¬¬]ˆVŒ´Ö®V<‚¼´åÆ#ÐÈæð—‚ô_\nþx^Äë[>°âÈs	±hûwâ.ðž¹]Ò+NëÛ·y&n;ô¹÷®òAâ!¼¹2ë-˜K·às	1Æ…Ø˜&ÂrˆxwWŒZËéñËÄ¸·«ü7‡Â}ï/¸¼†d²þß„>ˆxª÷•–³‹¡M*ËG\"¢À´o;dwë¢ésœo¬1ÏW²ãíÊÊØ]Çby»™nÝ~9+ËÒ÷×Céâ>Z\"ñ~1mâ?<Ž­\"óB½®ã7gåÏ¶ñáÁÕ{ûö.{^é›÷¸˜½€W¸åB3pàQÞdƒD\"ãÉmÂ.O|'Mû“¯¸XTÅG}¨üD	r>9|„.H\\\n®KÈŽ‰œ˜÷Kû	æQ	½B;® T,ßœ§C-&f/~j,ºá\\i¦oKçï;Fý÷K‘	tÕÛðÒ/·é‡ÎÛÛþi(înKè’’ïÐþ©Ýß¿e²“ÚYÚØ©HW·q]\\DCK9´Ãu	þ_¸ÂÌõ¿ž¹Ê‡ôÆ]Sà¹/òëFr1Ž†qÆ>0æâ…,bûOüð\næŒ12<a~ôa6Ïå.líFr^ï¦]®·Ž¢íÏño+\0PD[ð>ò°ÐH_àí'Ìâ®&åfúðN0.-ÌsO•\$ÂŒ,þå¿,8KiÌ+	píð”Ã°ÃP„ÕMzEäbû2|Ä´ð‰P·Œu‚î	l\rÚë/êg¬L°g-të\0Ë¶²ë2Óáv°m†§âžGÐ¡b&ÁB(Ë¸80ðI(j†è\$†ãT«Š\nhÈ2Št6 éäó­Þ³¬ÚÖ¬ÞÎ#`è@ØiÞµ ÖþO*bãXv…x\r ÌvåŠ6 Œ¥HÝ†&Hì„ ª\n€Œ p*É¨9£jÍ,Æ±^qc\0B4#z±å˜<Œ¤] ›ñc¡f†Ð.!ÙƒŒÚâú>icÄlJÄç:ÐsŽ8±ÁB«ÀI)r!.	€ÞQH:ÑÑöze\"2£R6\"Z!\0.E®[\$|Ý¦,­ü‘nzŠðß\"XIàöúÎ‚ßmèßâî\nƒd3ãF2Q!IÚ\rààµeº(Š¾®ôF~\\¯ I„ÆN¿¦ü-Dà®oÎX­Èä!+(.\\Æã!Ä^C-o\0À¬ Æ ê\r¢0‚¤,â²ÀAÌrÊ%¸&\$ºÚA!ÃÇ\"jðFåÖ­|Á²2Ï\"ŠýF™\rÊN¼hŽòàïâ\n¤`@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ˆÊ9Ãxä3…ã(ÝN\r€Ü9#}>5#\r62Ž”0¾Ü#pÖÂHÚ84ƒm<:xÂAíEtÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qód D…yÎRPa s-¯a~WÄ¡r’GALKI·ÉsZËÍÚë±\$ñÒPOdÙ\\‡ØÃòØ˜S%Û,N·&%ÙÐS”o1U¤Y+hÄÌP\"Pƒê6\0ì0ƒ¨ËlZV¢ZC—±Qqld1ÊH\nY N(KqÈ]—g1GÇÇ9{}œÄq%)öÁ2¨ÅPQŠÅÁ7§‰ò\nƒ-B\$©o)Én\$€€P•KpÍcbçY‡)\"^æï)ÌD’q²Ür·õÝr—7Œ£)ïw„Ÿy/–õÁ»—vëç¿I¼5Ã¿Mç1<[pêYX§©iWÏÇ/6råÒ[Äœü_½/7O7õSoPTqËu£i’d8ŽL“(ULÐÞ3Ãe,ÝO“ŸCª\rìèÛX!\0ëQŽ£ÆÓŽc66\rƒxÎèŽacR9y£Î0º!ÊØÔ¨Ü:àˆŒÅDBib˜¤#Xã]<¿>DYÒ!Äi×O‚ñ“ø9D°®B\" Ÿ¡>ñ]\0º2!PË«#P”ÓÎT‡H(¥ƒ“Þj™RE.‚PŠ¤+@È©yÑêõ_› ¦õ(nPY-ŒH`Œ¯þ\0˜x !E)‘	¡„9›\0äg¢`sêic5`àTdÐ¡@†…¡T:‰Qj5G©&ú”º™SjuOµeD©0/UÙUªÐD«Ãb±VjÕ[«•w\rH4,U Ãú|Ìt8)w–•Ü6‡\nš‹ôF(@èB¬r‰X|‰#H ”ƒLar,Ü]¤•Ê+Ç0Ì(€ 0…A)B\"\nA2…ø	WäMG0†# VÌ2Vy…²#\"8—düÐÐæÂÕ•?ò‰2à€'å³¿Ãæ½G(ŠBg„ÌË»¥cÆ:²CrÆ6FÐ(0âÈ¢h ÁÈ7†Ø;ä„O6Jx7²²MI³5ÁñStxS\n€È\nF PóMe\neºqÌ\"b\"©`‚æLEi!–g™3*Ú¡Ñ¬{*MÞ\0ÄC8 Ya234h”F\nAÞO—Ì­ÔÓYÔ\n‚Pe’ŒÊ˜%¢KA|!‡H¥,P\n„ÂxNT(@‚(\n­ €\"P˜k‚KeèürˆñÊ«Øç&Ka­5ÆH.¸…0Ç`O£¸w:\"‚ìödÈ¸§g‹ÌYŽ!‚S26†N!SòxÄÈ¤2.ÍjZGFâ„]®L‚Ts‰Ò*[D?)1ÔŽ\\\"™Qb\0sRÜƒ*¸\r-¨:C’Ç8‰ÈVÁ5 ‘Ø‡ÒÖ[ÊIu)¥êÁN6lFBŠ.®±H[\0ë˜1Ÿ‡5e¬îµ(.Ð¦CÓ#t8>ÆG\rÍ c6ðÚƒË(Ÿ/tî4Z­òÛz—\r,‚üUŒhƒ(w)b©t®µÚãHç‚ˆr‹Ä”9|ÄX“Ê¾9…Ð\"ëé‰—.l\\è«•z°V#Ì)ÅÄ©~×º[c2DÉÝ<¢1\0(Öñæˆ±ãßy‰Z-‚·\"é¢ŽAtvÅØ¶¾…ç\"Ÿ3ÚˆB\"U¼*†ÿÂFÞ(36ç¹¬G¡Ì'Å(è\"Šžñ>:\\Ùç<¯ ð@¿y-âÜÇçý ÂxKˆ/ Ç×Óö/EˆéâþT—6ÜÜØ¤¯®sI˜ô2…W».¤rêÑB#zÆ@(@h!D†u°ŒK5J±ÚÃž'8’g²Ši:ÙÐðs‹a'&¤àˆ‹ë–ÒîC*ÛVŠ97\0œKÂ¡	‹Å­t¦·Ý¬œ]h‰`.ÚÂ´QÑˆÅ\nÚ[›ÛE€ L.\" B±pˆíI0&\rÎQP:Dñ;•|Šèy¶-=œ‡ƒ˜M‹C¯bG:úÕâÉz®P¾§a,Ú›[Úœ@_f7‡˜¡w‹›G‚à:çóŸºä›`l%¨G-@\$)‚-å—ÞÁ‘Aáê§¯ª^­ÒÏR%½®lWÒ¥#éH‘u›w/ÚË[BšaÑ #lY´óšÚ©Ÿ\"\"ômõîÒr±Êé3®Mü¯¡¸/h»ý¦<G“›»\râ-@v5ÃøÎÊß|×–ïâG+ˆôá–­ÒäM†CÈ5¢ÔóÉÚ’Wjýa¾{žû|yî¼½°÷Þæ±yŒ	ñú¢HåcAP”~T–^â —yUÊQ`9DÕ¿vÆJ£°ùßA\rìß¥&%R\0@]Ÿ2<%:R Á^+óýB¥øPÎ;ø•”®OžæìnÇ#rôìdzóåÐ]EØ/ö¡I,=\"7¯1çe¬9EÚöŒËÌÀÏxo@fðEo¶JÌ/ŒóðVÌPRÈÐ^[,·%ÂpÁ:!ÁÌæŠü\"ŠN'Á|†ðBÐï¯PËF\\Â¢’ï‚ÈÐ›	ðZ÷¦P¸/(|ËLÊ·0®Epº^â|*Pž%¡6DÂDûÎÜòL·Cõ\n)ÎË‹w	as\rÁ/\n¦ùÐ»P<<ÔpàÎ±	Ÿ0ÿ1ðal‚,®KðéŒ“Žó%ÍÅàÉ0Èbqq9â¬FdjFäs1ä>>Ò°èÌñXDQCÉž	˜\r,\"ëph‚–Ë¦rçFK8Ñv\0  ‡¦`æN*8“dMöß¡Ð…ªaz\"áp¢\\-r‡d\"ákøH–‰¨N‰£^­’\nhò3 A€éÅø×n^ãÁ?a1bÔc\"`è@Øj¹`Ö	(P&>d#byEŠ\r Ìy¥œ7@Œ¨ÉÆ:C4| ª\n€Œ p<„iæ:Ctï‡>‰\r8Öéˆ#B8µ‡jÐD„óQÑ\"2&[.Ðá\$9ƒƒ–â„vÊÇ²µmÌ)iÂ°†;…î-†\rå&†R¦§€ÚSC45Ãl)a¸‚æpÁ<l.FááÎ,®nåaÐ¡²rÒç/4æm¯ÑPÚ¡&(E«.0‚cn4ƒP2ñå#Š\ràà¹¥*¿(´Ìg^ùpp\"Lª´Ìffj%¬Lé“î+ý†&°®ç1’ÎÞ¡,\"Í+\0¬ Æ ê\r²˜\0g<Î´rLd]\r,]Òœ.ObÊ<ÒØ²cò1\nÂke8+4<Òé.Ðôh!%ÂÁêe„lG\0	\0t	 š@¦\n`";break;}$Sh=array();foreach(explode("\n",lzw_decompress($f))as$X)$Sh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Sh;}if(!$Sh){$Sh=get_translations($ca);$_SESSION["translations"]=$Sh;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Lf=array_search("SQL",$b->operators);if($Lf!==false)unset($b->operators[$Lf]);}function
dsn($ic,$V,$G){try{parent::__construct($ic,$V,$G);}catch(Exception$_c){auth_error(h($_c->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$di=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$dc=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$hd,$kf=array(),$z=1,$E=0,$Tf=false){global$b,$x;$Jd=(count($hd)<count($M));$H=$b->selectQueryBuild($M,$Z,$hd,$kf,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$hd&&$Jd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($hd&&$Jd?"\nGROUP BY ".implode(", ",$hd):"").($kf?"\nORDER BY ".implode(", ",$kf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$fh=microtime(true);$J=$this->_conn->query($H);if($Tf)echo$b->selectQuery($H,format_time($fh));return$J;}function
delete($R,$cg,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$cg):" $H$cg"));}function
update($R,$O,$cg,$z=0,$Kg="\n"){$ui=array();foreach($O
as$y=>$X)$ui[]="$y = $X";$H=table($R)." SET$Kg".implode(",$Kg",$ui);return
queries("UPDATE".($z?limit1($H,$cg):" $H$cg"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Rf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$dc["sqlite"]="SQLite 3";$dc["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Of=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Pc){$this->_link=new
SQLite3($Pc);$xi=$this->_link->version();$this->server_info=$xi["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Pc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Pc);}function
query($H,$di=false){$De=($di?"unbufferedQuery":"query");$I=@$this->_link->$De($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Hf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Hf\\.)?$Hf\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Pc){$this->dsn(DRIVER.":$Pc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Pc){if(is_readable($Pc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Pc)?$Pc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Pc")." AS a")){parent::__construct($Pc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Rf){$ui=array();foreach($L
as$O)$ui[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$ui));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Kg=" "){return" $H$Z".($z!==null?$Kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$qb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Rf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Rb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Rb,$B)?str_replace("''","'",$B[1]):($Rb=="NULL"?null:$Rb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Rf!="")$J[$Rf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Rf=$C;}}$ch=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ch,$qe,PREG_SET_ORDER);foreach($qe
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ch=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ch,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$qe,PREG_SET_ORDER);foreach($qe
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$dh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$Ag){$v["columns"][]=$Ag["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$dh[$C],$ng)){preg_match_all('/("[^"]*+")+( DESC)?/',$ng[2],$qe);foreach($qe[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Ic="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ic)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Ic));return
false;}return
true;}function
create_database($m,$pb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$_c){$g->error=$_c->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$pb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){$oi=($R==""||$Wc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$oi=true;break;}}$c=array();$tf=array();foreach($p
as$o){if($o[1]){$c[]=($oi?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$tf[$o[0]]=$o[1][0];}}if(!$oi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$tf,$Wc))return
false;if($Ma)queries("UPDATE sqlite_sequence SET seq = $Ma WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$tf,$Wc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$tf[$y]=idf_escape($y);}}$Sf=false;foreach($p
as$o){if($o[6])$Sf=true;}$gc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$gc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Td=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$tf[$d])continue
2;$e[]=$tf[$d].($v["descs"][$y]?" DESC":"");}if(!$gc[$Td]){if($v["type"]!="PRIMARY"||!$Sf)$w[]=array($v["type"],$Td,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Wc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Td=>$q){foreach($q["source"]as$y=>$d){if(!$tf[$d])continue
2;$q["source"][$y]=idf_unescape($tf[$d]);}if(!isset($Wc[" $Td"]))$Wc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Wc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($tf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$tf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($tf)))." FROM ".table($R)))return
false;$Yh=array();foreach(triggers($R)as$Wh=>$Gh){$Vh=trigger($Wh);$Yh[]="CREATE TRIGGER ".idf_escape($Wh)." ".implode(" ",$Gh)." ON ".table($C)."\n$Vh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Yh
as$Vh){if(!queries($Vh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$Rf){if($Rf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($zi){return
apply_queries("DROP VIEW",$zi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$zi,$yh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Xh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Xh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Te=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Te?" OF":""),"Of"=>($Te[0]=='`'||$Te[0]=='"'?idf_unescape($Te):$Te),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Xh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Xh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Eg){return
true;}function
create_sql($R,$Ma){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$jh){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$hf){list($y,$X)=explode("=",$hf,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Lc);}$x="sqlite";$ci=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$ih=array_keys($ci);$ji=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$ed=array("hex","length","lower","round","unixepoch","upper");$jd=array("avg","count","count distinct","group_concat","max","min","sum");$lc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$dc["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Of=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($wc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$xi=pg_version($this->_link);$this->server_info=$xi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$di=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$d);$J->name=pg_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$d);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Rf){global$g;foreach($L
as$O){$ki=array();$Z=array();foreach($O
as$y=>$X){$ki[]="$y = $X";if(isset($Rf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$ki)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$ci,$ih;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$ih[lang(23)][]="json";$ci["json"]=4294967295;if($g->server_info>=9.4){$ih[lang(23)][]="jsonb";$ci["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Kg=" "){return" $H$Z".($z!==null?$Kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$qb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY c.oid"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$he,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$eb=$U.$wa;if(isset($Ca[$eb])){$K["type"]=$Ca[$eb];$K["full_type"]=$K["type"].$he.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$he.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$rh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $rh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $rh AND ci.oid = i.indexrelid",$h)as$K){$og=$K["relname"];$J[$og]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$og]["columns"]=array();foreach(explode(" ",$K["indkey"])as$zd)$J[$og]["columns"][]=$e[$zd];$J[$og]["descs"]=array();foreach(explode(" ",$K["indoption"])as$_d)$J[$og]["descs"][]=($_d&1?'1':null);$J[$og]["lengths"]=array();}return$J;}function
foreign_keys($R){global$af;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$pe)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$pe[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$pe[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($af)~",$B[4],$pe)?$pe[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($af)~",$B[4],$pe)?$pe[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" ENCODING ".idf_escape($pb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$pb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){$c=array();$bg=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$ti=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$bg[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$ti!="")$bg[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($ti!=""?substr($ti,9):"''");}}$c=array_merge($c,$Wc);if($R=="")array_unshift($bg,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($bg,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$bg[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$xb!="")$bg[]="COMMENT ON TABLE ".table($C)." IS ".q($xb);if($Ma!=""){}foreach($bg
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$ec=array();$bg=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$ec[]=idf_escape($X[1]);else$bg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($bg,"ALTER TABLE ".table($R).implode(",",$i));if($ec)array_unshift($bg,"DROP INDEX ".implode(", ",$ec));foreach($bg
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($zi){return
drop_tables($zi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$zi,$yh){foreach(array_merge($T,$zi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($yh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ng))return$ng[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Dg){global$g,$ci,$ih;$J=$g->query("SET search_path TO ".idf_escape($Dg));foreach(types()as$U){if(!isset($ci[$U])){$ci[$U]=0;$ih[lang(24)][]=$U;}}return$J;}function
create_sql($R,$Ma){global$g;$J='';$ug=array();$Mg=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Uc=foreign_keys($R);ksort($Uc);$Yh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Nc=>$o){$_f=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$ug[]=$_f;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$qe)){$Lg=$qe[1];$bh=reset(get_rows("SELECT * FROM $Lg"));$Mg[]="CREATE SEQUENCE $Lg INCREMENT $bh[increment_by] MINVALUE $bh[min_value] MAXVALUE $bh[max_value] START ".($Ma?$bh['last_value']:1)." CACHE $bh[cache_value];";}}if(!empty($Mg))$J=implode("\n\n",$Mg)."\n\n$J";foreach($w
as$xd=>$v){switch($v['type']){case'UNIQUE':$ug[]="CONSTRAINT ".idf_escape($xd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$ug[]="CONSTRAINT ".idf_escape($xd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Uc
as$Tc=>$Sc)$ug[]="CONSTRAINT ".idf_escape($Tc)." $Sc[definition] ".($Sc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$ug)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$xd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($xd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Nc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Nc)." IS ".q($o['comment']).";";}foreach($Yh
as$Uh=>$Th){$Vh=trigger($Uh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Vh['Trigger'])." $Vh[Timing] $Vh[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Vh[Type] $Vh[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$jh){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Lc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Lc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$ci=array();$ih=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$ci+=$X;$ih[$y]=array_keys($X);}$ji=array();$ff=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ed=array("char_length","lower","round","to_hex","to_timestamp","upper");$jd=array("avg","count","count distinct","max","min","sum");$lc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$dc["oracle"]="Oracle";if(isset($_GET["oracle"])){$Of=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($wc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$di=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$d);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$Kg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$qb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$Fg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Fg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Fg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$he="$K[DATA_PRECISION],$K[DATA_SCALE]";if($he==",")$he=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($he?"($he)":""),"type"=>strtolower($U),"length"=>$he,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$xd=$K["INDEX_NAME"];$J[$xd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$xd]["columns"][]=$K["COLUMN_NAME"];$J[$xd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$xd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){$c=$ec=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$ec[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$ec||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$ec).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($zi){return
apply_queries("DROP VIEW",$zi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Eg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Eg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Lc);}$x="oracle";$ci=array();$ih=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$ci+=$X;$ih[$y]=array_keys($X);}$ji=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$ed=array("length","lower","round","upper");$jd=array("avg","count","count distinct","max","min","sum");$lc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$dc["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Of=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$Ad=sqlsrv_server_info($this->_link);$this->server_info=$Ad['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$di=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$di=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Rf){foreach($L
as$O){$ki=array();$Z=array();foreach($O
as$y=>$X){$ki[]="$y = $X";if(isset($Rf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ki)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$D=0,$Kg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$he=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($he?"($he)":""),"type"=>$U,"length"=>$he,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$pb)$J[preg_replace('~_.*~','',$pb)][]=$pb;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$pb)?" COLLATE $pb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$pb){if(preg_match('~^[a-z0-9_]+$~i',$pb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $pb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Wc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Wc)$c[""]=$Wc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$ec=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$ec[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$ec||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$ec)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($zi){return
queries("DROP VIEW ".implode(", ",array_map('table',$zi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$zi,$yh){return
apply_queries("ALTER SCHEMA ".idf_escape($yh)." TRANSFER",array_merge($T,$zi));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Dg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Lc);}$x="mssql";$ci=array();$ih=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$ci+=$X;$ih[$y]=array_keys($X);}$ji=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ed=array("len","lower","round","upper");$jd=array("avg","count","count distinct","max","min","sum");$lc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$dc['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Of=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$mi=explode(':',$N);$this->service_link=ibase_service_attach($mi[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$di=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Vc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Kg=" "){$J='';$J.=($z!==null?$Kg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Kc=false){global$g;$J=array();$Lb=tables_list();foreach($Lb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Dg){return
true;}function
support($Lc){return
preg_match("~^(columns|sql|status|table)$~",$Lc);}$x="firebird";$ff=array("=");$ed=array();$jd=array();$lc=array();}$dc["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Of=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$di=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$mh=0;foreach($I
as$Nd)$mh+=$Nd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$mh,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Nd){$K=array();if($Nd->Name!='')$K['itemName()']=(string)$Nd->Name;foreach($Nd->Attribute
as$Ja){$C=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($oc){return(is_object($oc)&&$oc['encoding']=='base64'?base64_decode($oc):(string)$oc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ud=array_keys($this->_rows[0]);return(object)array('name'=>$Ud[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Rf="itemName()";function
_chunkRequest($ud,$va,$F,$Dc=array()){global$g;foreach(array_chunk($ud,25)as$ib){$yf=$F;foreach($ib
as$s=>$t){$yf["Item.$s.ItemName"]=$t;foreach($Dc
as$y=>$X)$yf["Item.$s.$y"]=$X;}if(!sdb_request($va,$yf))return
false;}$g->affected_rows=count($ud);return
true;}function
_extractIds($R,$cg,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$cg,$qe))$J=array_map('idf_unescape',$qe[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$cg.($z?" LIMIT 1":"")))as$Nd)$J[]=$Nd->Name;}return$J;}function
select($R,$M,$Z,$hd,$kf=array(),$z=1,$E=0,$Tf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$hd,$kf,$z,$E,$Tf);$g->next=0;return$J;}function
delete($R,$cg,$z=0){return$this->_chunkRequest($this->_extractIds($R,$cg,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$cg,$z=0,$Kg="\n"){$Sb=array();$Ed=array();$s=0;$ud=$this->_extractIds($R,$cg,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$ud))$Sb["Attribute.".count($Sb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Pd=>$W){$Ed["Attribute.$s.Name"]=$y;$Ed["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Pd)$Ed["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$Ed||$this->_chunkRequest(($t!=""?array($t):$ud),'BatchPutAttributes',$F,$Ed))&&(!$Sb||$this->_chunkRequest($ud,'BatchDeleteAttributes',$F,$Sb));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Rf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Lc){return
preg_match('~sql~',$Lc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$qb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Kc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Kc){$Ce=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Ce){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$Ce->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$D=0,$Kg=" "){return" $H$Z".($z!==null?$Kg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Lb,$y,$gg=false){$Va=64;if(strlen($y)>$Va)$y=pack("H*",$Ba($y));$y=str_pad($y,$Va,"\0");$Qd=$y^str_repeat("\x36",$Va);$Rd=$y^str_repeat("\x5C",$Va);$J=$Ba($Rd.pack("H*",$Ba($Qd.$Lb)));if($gg)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($rd,$F['AWSAccessKeyId'],$Gg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$rd)."\n/\n$H",$Gg,true)));@ini_set('track_errors',1);$Oc=@file_get_contents((preg_match('~^https?://~',$rd)?$rd:"http://$rd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Oc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Ii=simplexml_load_string($Oc);if(!$Ii){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($Ii->Errors){$n=$Ii->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$xh=$va."Result";return($Ii->$xh?$Ii->$xh:true);}function
sdb_request_all($va,$xh,$F=array(),$Fh=0){$J=array();$fh=($Fh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Ii=sdb_request($va,$F);if(!$Ii)break;foreach($Ii->$xh
as$oc)$J[]=$oc;if($z&&count($J)>=$z){$_GET["next"]=$Ii->NextToken;break;}if($Fh&&microtime(true)-$fh>$Fh)return
false;$F['NextToken']=$Ii->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Ii->NextToken);return$J;}$x="simpledb";$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$ed=array();$jd=array("count");$lc=array(array("json"));}$dc["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Of=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$if=array();if($V!=""){$if["username"]=$V;$if["password"]=$G;}if($m!="")$if["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$if);return
true;}catch(Exception$_c){$this->error=$_c->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$_c){$this->error=$_c->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Nd){$K=array();foreach($Nd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ud=array_keys($this->_rows[0]);$C=$Ud[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Rf="_id";function
select($R,$M,$Z,$hd,$kf=array(),$z=1,$E=0,$Tf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Yg=array();foreach($kf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Gb);$Yg[$X]=($Gb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Yg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$_c){$this->_conn->error=$_c->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Vc){global$g;$J=array();$Pb=$g->_link->listDBs();foreach($Pb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Kc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$rg=$g->_link->selectDB($m)->drop();if(!$rg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Vb=array();foreach($v["key"]as$d=>$U)$Vb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Vb,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$rg=$g->_db->selectCollection($R)->drop();if(!$rg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$rg=$g->_db->selectCollection($R)->remove();if(!$rg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Gb);$e[$d]=($Gb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Lc){return
preg_match("~database|indexes~",$Lc);}$x="mongo";$ff=array("=");$ed=array();$jd=array();$lc=array(array("json"));}$dc["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Of=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Ff,$Bb=array(),$De='GET'){@ini_set('track_errors',1);$Oc=@file_get_contents($this->_url.'/'.ltrim($Ff,'/'),false,stream_context_create(array('http'=>array('method'=>$De,'content'=>json_encode($Bb),'ignore_errors'=>1,))));if(!$Oc){$this->error=$php_errormsg;return$Oc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Oc;return
false;}$J=json_decode($Oc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$Ab=get_defined_constants(true);foreach($Ab['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($Ff,$Bb=array(),$De='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Ff,'/'),$Bb,$De);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$hd,$kf=array(),$z=1,$E=0,$Tf=false){global$b;$Lb=array();$H="$R/_search";if($M!=array("*"))$Lb["fields"]=$M;if($kf){$Yg=array();foreach($kf
as$nb){$nb=preg_replace('~ DESC$~','',$nb,1,$Gb);$Yg[]=($Gb?array($nb=>"desc"):$nb);}$Lb["sort"]=$Yg;}if($z){$Lb["size"]=+$z;if($E)$Lb["from"]=($E*$z);}foreach($Z
as$X){list($nb,$df,$X)=explode(" ",$X,3);if($nb=="_id")$Lb["query"]["ids"]["values"][]=$X;elseif($nb.$X!=""){$Ah=array("term"=>array(($nb!=""?$nb:"_all")=>$X));if($df=="=")$Lb["query"]["filtered"]["filter"]["and"][]=$Ah;else$Lb["query"]["filtered"]["query"]["bool"]["must"][]=$Ah;}}if($Lb["query"]&&!$Lb["query"]["filtered"]["query"]&&!$Lb["query"]["ids"])$Lb["query"]["filtered"]["query"]=array("match_all"=>array());$fh=microtime(true);$Fg=$this->_conn->query($H,$Lb);if($Tf)echo$b->selectQuery("$H: ".print_r($Lb,true),format_time($fh));if(!$Fg)return
false;$J=array();foreach($Fg['hits']['hits']as$qd){$K=array();if($M==array("*"))$K["_id"]=$qd["_id"];$p=$qd['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$qd['fields'][$y];}foreach($p
as$y=>$X){if($Lb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Lc){return
preg_match("~database|table|columns~",$Lc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Kc=false){global$g;$Fg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($Fg){foreach($Fg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$ne=$I[$R]['properties'];if(!$ne)$ne=$I[$g->_db]['mappings'][$R]['properties'];if($ne){foreach($ne
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$ff=array("=","query");$ed=array();$jd=array();$lc=array(array("json"));}$dc=array("server"=>"MySQL")+$dc;if(!defined("DRIVER")){$Of=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Kf=null,$Xg=null){mysqli_report(MYSQLI_REPORT_OFF);list($rd,$Kf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$rd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Kf)?$Kf:ini_get("mysqli.default_port")),(!is_numeric($Kf)?$Kf:$Xg));return$J;}function
set_charset($cb){if(parent::set_charset($cb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $cb");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($cb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($cb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $cb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$di=false){$I=@($di?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($cb){$this->query("SET NAMES $cb");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$di=false){$this->setAttribute(1000,!$di);return
parent::query($H,$di);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Rf){$e=array_keys(reset($L));$Pf="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$ui=array();foreach($e
as$y)$ui[$y]="$y = VALUES($y)";$lh="\nON DUPLICATE KEY UPDATE ".implode(", ",$ui);$ui=array();$he=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($ui&&(strlen($Pf)+$he+strlen($Y)+strlen($lh)>1e6)){if(!queries($Pf.implode(",\n",$ui).$lh))return
false;$ui=array();$he=0;}$ui[]=$Y;$he+=strlen($Y)+2;}return
queries($Pf.implode(",\n",$ui).$lh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$ci,$ih;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$ih[lang(23)][]="json";$ci["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Bg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Bg;return$J;}function
get_databases($Vc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Vc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Kg=" "){return" $H$Z".($z!==null?$Kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$qb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
tables_generated_columns($qh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `GENERATION_EXPRESSION`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$qh:"SHOW TABLES");}function
tables_generated_columns2($qh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$qh:"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Kc=false){global$g;$J=array();foreach(get_rows($Kc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"is_virtual"=>(strpos(strtolower($K["Extra"]),"virtual")!==false),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$af;static$Hf='`(?:[^`]|``)+`';$J=array();$Hb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Hb){preg_match_all("~CONSTRAINT ($Hf) FOREIGN KEY ?\\(((?:$Hf,? ?)+)\\) REFERENCES ($Hf)(?:\\.($Hf))? \\(((?:$Hf,? ?)+)\\)(?: ON DELETE ($af))?(?: ON UPDATE ($af))?~",$Hb,$qe,PREG_SET_ORDER);foreach($qe
as$B){preg_match_all("~$Hf~",$B[2],$Zg);preg_match_all("~$Hf~",$B[5],$yh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Zg[0]),"target"=>array_map('idf_unescape',$yh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" COLLATE ".q($pb):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$pb){$J=false;if(create_database($C,$pb)){$pg=array();foreach(tables_list()as$R=>$U)$pg[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$pg||queries("RENAME TABLE ".implode(", ",$pg)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Na=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Na="";break;}if($v["type"]=="PRIMARY")$Na=" UNIQUE";}}return" AUTO_INCREMENT$Na";}function
alter_table($R,$C,$p,$Wc,$xb,$tc,$pb,$Ma,$Cf,$Ge,$tb){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Wc);$P=($xb!==null?" COMMENT=".q($xb):"").($tc?" ENGINE=".q($tc):"").($pb?" COLLATE ".q($pb):"").($Ma!=""?" AUTO_INCREMENT=$Ma":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$Cf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);foreach($tb
as$Li){foreach($c
as$Sd=>$ab){$rb=substr($ab,7,strpos($ab,"` ")-6);$rb=substr($rb,1,strlen($rb)-2);if($Li===$rb)unset($c[$Sd]);}}if($Ge){foreach($Ge
as$y=>$Li){$eh=substr($Li,7,strpos($Li,"` ")-6);foreach($c
as$Sd=>$ab){$Ga=substr($ab,strpos($ab,"NULL")+4,strlen($ab));$rb=substr($ab,strpos($ab,"CHANGE")+7,strpos($ab,"` ")-6);if($eh===$rb){unset($c[$Sd]);$c[$Sd]=$Li.$Ga;unset($Ge[$y]);}}}foreach($Ge
as$Li)$c[]=$Li;}return($c||$Cf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Cf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($zi){return
queries("DROP VIEW ".implode(", ",array_map('table',$zi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$zi,$yh){$pg=array();foreach(array_merge($T,$zi)as$R)$pg[]=table($R)." TO ".idf_escape($yh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$pg));}function
copy_tables($T,$zi,$yh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($yh==DB?table("copy_$R"):idf_escape($yh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($zi
as$R){$C=($yh==DB?table("copy_$R"):idf_escape($yh).".".table($R));$yi=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $yi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$vc,$Cd,$ci;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ai="((".implode("|",array_merge(array_keys($ci),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$vc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Hf="\\s*(".($U=="FUNCTION"?"":$Cd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ai";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Hf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$ai\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Hf\\s*,?~is",$B[1],$qe,PREG_SET_ORDER);foreach($qe
as$xf){$C=str_replace("``","`",$xf[2]).$xf[3];$p[]=array("field"=>$C,"type"=>strtolower($xf[5]),"length"=>preg_replace_callback("~$vc~s",'normalize_enum',$xf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$xf[8] $xf[7]"))),"null"=>1,"full_type"=>$xf[4],"inout"=>strtoupper($xf[1]),"collation"=>strtolower($xf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Dg){return
true;}function
create_sql($R,$Ma){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$Ma)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$jh){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($jh=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Lc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Lc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$ci=array();$ih=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$ci+=$X;$ih[$y]=array_keys($X);}$ji=array("unsigned","zerofill","unsigned zerofill");$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$ed=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$jd=array("avg","count","count distinct","group_concat","max","min","sum");$lc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.2-dev";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Vc=true){return
get_databases($Vc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$dc;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$dc,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($le,$G){global$x;if($x=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($ph){return
h($ph["Name"]);}function
fieldName($o,$kf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($ph,$O=""){echo'<p class="links">';$ke=array("select"=>lang(39));if(support("table")||support("indexes"))$ke["table"]=lang(40);if(support("table")){if(is_view($ph))$ke["view"]=lang(41);else$ke["create"]=lang(42);}if($O!==null)$ke["edit"]=lang(43);foreach($ke
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($ph["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$oh){return
array();}function
backwardKeysPrint($Pa,$K){}function
selectQuery($H,$Eh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($Eh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Xc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$sf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(44,strlen($sf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Tf=array();foreach($v["columns"]as$y=>$X)$Tf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Tf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$ed,$jd;print_fieldset("select",lang(50),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($ed||$jd?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$ed,lang(52)=>$jd)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$bb="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$bb'",$e,$X["col"],"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$bb),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($kf,$e,$w){print_fieldset("sort",lang(55),$kf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$e),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Dh){if($Dh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Dh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($w
as$v){$Kb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Kb)$e[$Kb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($qc,$e){}function
selectColumnsProcess($e,$w){global$ed,$jd;$M=array();$hd=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$ed)||in_array($X["fun"],$jd)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$jd))$hd[]=$M[$y];}}return
array($M,$hd);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$zb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$wd=process_length($X["val"]);$zb.=" ".($wd!=""?$wd:"(NULL)");}elseif($X["op"]=="SQL")$zb=" $X[val]";elseif($X["op"]=="LIKE %%")$zb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$zb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$zb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$zb;else{$sb=array();foreach($p
as$C=>$o){$Ld=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ld)){$C=idf_escape($C);$sb[]=($x=="sql"&&$Ld&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($sb?"(".implode("$zb OR ",$sb)."$zb)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Xc){return
false;}function
selectQueryBuild($M,$Z,$hd,$kf,$z,$E){return"";}function
messageQuery($H,$Eh){global$x;restart_session();$od=&get_session("queries");$t="sql-".count($od[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$od[$_GET["db"]][]=array($H,time(),$Eh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($Eh?" <span class='time'>($Eh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($od[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$lc;$J=($o["null"]?"NULL/":"");foreach($lc
as$y=>$ed){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($ed
as$Hf=>$X){if(!$Hf||preg_match("~$Hf~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(48);return
explode("/",$J);}function
editInput($R,$o,$Ka,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ka value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ka value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ka,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$jh,$Md=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($jh)dump_csv(array_keys(fields($R)));}else{if($Md==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($jh&&$i){if($jh=="DROP+CREATE"||$Md==1)echo"DROP ".($Md==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Md==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$jh,$H){global$g,$x;$se=($x=="sqlite"?0:1048576);if($jh){if($_POST["format"]=="sql"){if($jh=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$Ed="";$Ya="";$Ud=array();$lh="";$Mc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Mc()){if(!$Ud){$ui=array();foreach($K
as$X){$o=$I->fetch_field();if($p[$o->name]['is_virtual']){$Ci[]=idf_escape($o->name);continue;}$Ud[]=$o->name;$y=idf_escape($o->name);$ui[]="$y = VALUES($y)";}$lh=($jh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$ui):"").";\n";}if($_POST["format"]!="sql"){if($jh=="table"){dump_csv($Ud);$jh="INSERT";}dump_csv($K);}else{if(!$Ed)$Ed="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Ud)).") VALUES";foreach($K
as$y=>$X){if(in_array("`".$y."`",(array)$Ci)){unset($K[$y]);continue;}$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Bg=($se?"\n":" ")."(".implode(",\t",$K).")";if(!$Ya)$Ya=$Ed.$Bg;elseif(strlen($Ya)+4+strlen($Bg)+strlen($lh)<$se)$Ya.=",$Bg";else{echo$Ya.$lh;$Ya=$Ed.$Bg;}}}if($Ya)echo$Ya.$lh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($td){return
friendly_url($td!=""?$td:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($td,$He=false){$vf=$_POST["output"];$Gc=(preg_match('~sql~',$_POST["format"])?"sql":($He?"tar":"csv"));header("Content-Type: ".($vf=="gz"?"application/x-gzip":($Gc=="tar"?"application/x-tar":($Gc=="sql"||$vf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($vf=="gz")ob_start('ob_gzencode',1e6);return$Gc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($Fe){global$ia,$x,$dc,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Fe=="auth"){$Rc=true;foreach((array)$_SESSION["pwds"]as$wi=>$Pg){foreach($Pg
as$N=>$ri){foreach($ri
as$V=>$G){if($G!==null){if($Rc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Rc=false;}$Pb=$_SESSION["db"][$wi][$N][$V];foreach(($Pb?array_keys($Pb):array(""))as$m)echo"<a href='".h(auth_url($wi,$N,$V,$m))."'>($dc[$wi]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Fe&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.2-dev",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$ke=array();foreach($T
as$R=>$U)$ke[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ke).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Fe);if(DB==""||!$Fe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$Fe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Fe){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Nb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'$Nb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Fe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'$Nb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$ff;function
page_header($Hh,$n="",$Xa=array(),$Ih=""){global$ca,$ia,$b,$dc,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Jh=$Hh.($Ih!=""?": $Ih":"");$Kh=strip_tags($Jh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Kh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.2-dev",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.2-dev",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.2-dev",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.2-dev",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(75),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Xa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$dc[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Xa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Xa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Xa
as$y=>$X){$Ub=(is_array($X)?$X[1]:h($X));if($Ub!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Ub</a> &raquo; ";}}echo"$Hh\n";}}echo"<h2>$Jh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$li=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Be=$_SESSION["messages"][$li];if($Be){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Be)."</div>\n";unset($_SESSION["messages"][$li]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Fe=""){global$b,$Nh;echo'</div>

';switch_lang();if($Fe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$Nh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Fe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Je){while($Je>=2147483648)$Je-=4294967296;while($Je<=-2147483649)$Je+=4294967296;return(int)$Je;}function
long2str($W,$Ei){$Bg='';foreach($W
as$X)$Bg.=pack('V',$X);if($Ei)return
substr($Bg,0,end($W));return$Bg;}function
str2long($Bg,$Ei){$W=array_values(unpack('V*',str_pad($Bg,4*ceil(strlen($Bg)/4),"\0")));if($Ei)$W[]=strlen($Bg);return$W;}function
xxtea_mx($Ki,$Ji,$mh,$Pd){return
int32((($Ki>>5&0x7FFFFFF)^$Ji<<2)+(($Ji>>3&0x1FFFFFFF)^$Ki<<4))^int32(($mh^$Ji)+($Pd^$Ki));}function
encrypt_string($hh,$y){if($hh=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($hh,true);$Je=count($W)-1;$Ki=$W[$Je];$Ji=$W[0];$ag=floor(6+52/($Je+1));$mh=0;while($ag-->0){$mh=int32($mh+0x9E3779B9);$kc=$mh>>2&3;for($wf=0;$wf<$Je;$wf++){$Ji=$W[$wf+1];$Ie=xxtea_mx($Ki,$Ji,$mh,$y[$wf&3^$kc]);$Ki=int32($W[$wf]+$Ie);$W[$wf]=$Ki;}$Ji=$W[0];$Ie=xxtea_mx($Ki,$Ji,$mh,$y[$wf&3^$kc]);$Ki=int32($W[$Je]+$Ie);$W[$Je]=$Ki;}return
long2str($W,false);}function
decrypt_string($hh,$y){if($hh=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($hh,false);$Je=count($W)-1;$Ki=$W[$Je];$Ji=$W[0];$ag=floor(6+52/($Je+1));$mh=int32($ag*0x9E3779B9);while($mh){$kc=$mh>>2&3;for($wf=$Je;$wf>0;$wf--){$Ki=$W[$wf-1];$Ie=xxtea_mx($Ki,$Ji,$mh,$y[$wf&3^$kc]);$Ji=int32($W[$wf]-$Ie);$W[$wf]=$Ji;}$Ki=$W[$Je];$Ie=xxtea_mx($Ki,$Ji,$mh,$y[$wf&3^$kc]);$Ji=int32($W[0]-$Ie);$W[0]=$Ji;$mh=int32($mh-0x9E3779B9);}return
long2str($W,true);}$g='';$nd=$_SESSION["token"];if(!$nd)$_SESSION["token"]=rand(1,1e6);$Nh=get_token();$If=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$If[$y]=$X;}}function
add_invalid_login(){global$b;$Pc=get_temp_dir()."/adminer.invalid";$cd=@fopen($Pc,"r+");if(!$cd){$cd=@fopen($Pc,"w");if(!$cd)return;}flock($cd,LOCK_EX);$Hd=unserialize(stream_get_contents($cd));$Eh=time();if($Hd){foreach($Hd
as$Id=>$X){if($X[0]<$Eh)unset($Hd[$Id]);}}$Gd=&$Hd[$b->bruteForceKey()];if(!$Gd)$Gd=array($Eh+30*60,0);$Gd[1]++;$Ng=serialize($Hd);rewind($cd);fwrite($cd,$Ng);ftruncate($cd,strlen($Ng));flock($cd,LOCK_UN);fclose($cd);}$La=$_POST["auth"];if($La){$Hd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Gd=$Hd[$b->bruteForceKey()];$Pe=($Gd[1]>30?$Gd[0]-time():0);if($Pe>0)auth_error(lang(78,ceil($Pe/60)));session_regenerate_id();$wi=$La["driver"];$N=$La["server"];$V=$La["username"];$G=(string)$La["password"];$m=$La["db"];set_password($wi,$N,$V,$G);$_SESSION["db"][$wi][$N][$V][$m]=true;if($La["permanent"]){$y=base64_encode($wi)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Uf=$b->permanentLogin(true);$If[$y]="$y:".base64_encode($Uf?encrypt_string($G,$Uf):"");cookie("adminer_permanent",implode(" ",$If));}if(count($_POST)==1||DRIVER!=$wi||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($wi,$N,$V,$m));}elseif($_POST["logout"]){if($nd&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80).' '.lang(81,'https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($If&&!$_SESSION["pwds"]){session_regenerate_id();$Uf=$b->permanentLogin();foreach($If
as$y=>$X){list(,$jb)=explode(":",$X);list($wi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($wi,$N,$V,decrypt_string(base64_decode($jb),$Uf));$_SESSION["db"][$wi][$N][$V][$m]=true;}}function
unset_permanent(){global$If;foreach($If
as$y=>$X){list($wi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($wi==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($If[$y]);}cookie("adminer_permanent",implode(" ",$If));}function
auth_error($n){global$b,$nd;$Qg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Qg]||$_GET[$Qg])&&!$nd)$n=lang(82);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(83,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Qg]&&$_GET[$Qg]&&ini_bool("session.use_only_cookies"))$n=lang(84);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(85),lang(86,implode(", ",$Of)),false);page_footer("auth");exit;}$g=connect();}$cc=new
Min_Driver($g);if(!is_object($g)||($le=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($le)?$le:lang(87))));if($La&&$_POST["token"])$_POST["token"]=$Nh;$n='';if($_POST){if(!verify_token()){$Bd="max_input_vars";$we=ini_get($Bd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$we||$X<$we)){$Bd=$y;$we=$X;}}}$n=(!$_POST["token"]&&$we?lang(88,"'$Bd'"):lang(79).' '.lang(89));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(90,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(91);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$nf=array(),$z=0){global$x;$ke=array();$w=array();$e=array();$Ua=array();$ci=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Od=0;$Od<count($K);$Od++){$o=$I->fetch_field();$C=$o->name;$mf=$o->orgtable;$lf=$o->orgname;$J[$o->table]=$mf;if($nf&&$x=="sql")$ke[$Od]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($mf!=""){if(!isset($w[$mf])){$w[$mf]=array();foreach(indexes($mf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$mf]=array_flip($v["columns"]);break;}}$e[$mf]=$w[$mf];}if(isset($e[$mf][$lf])){unset($e[$mf][$lf]);$w[$mf][$lf]=$Od;$ke[$Od]=$mf;}}if($o->charsetnr==63)$Ua[$Od]=true;$ci[$Od]=$o->type;echo"<th".($mf!=""||$o->name!=$lf?" title='".h(($mf!=""?"$mf.":"").$lf)."'":"").">".h($C).($nf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ua[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($ci[$y]==254)$X="<code>$X</code>";}if(isset($ke[$y])&&!$e[$ke[$y]]){if($nf&&$x=="sql"){$R=$K[array_search("table=",$ke)];$_=$ke[$y].urlencode($nf[$R]!=""?$nf[$R]:$R);}else{$_="edit=".urlencode($ke[$y]);foreach($w[$ke[$y]]as$nb=>$Od)$_.="&where".urlencode("[".bracket_escape($nb)."]")."=".urlencode($K[$Od]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Jg){$J=array();foreach(table_status('',true)as$qh=>$R){if($qh!=$Jg&&fk_support($R)){foreach(fields($qh)as$o){if($o["primary"]){if($J[$qh]){unset($J[$qh]);break;}$J[$qh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$sb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$sb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$qb,$Yc=array(),$_i){global$ih,$ci,$ji,$af;$U=$o["type"];echo'    <td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($ci[$U])&&!isset($Yc[$U]))array_unshift($ih,$U);if($Yc)$ih[lang(92)]=$Yc;echo
optionlist($ih,$U),'</select>
    <td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';if($o["is_virtual"])textarea(h($y)."[virtual1]",$_i,$L=2,$sb=40);else{echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(93).')'.optionlist($qb,$o["collation"]).'</select>',($ji?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($ji,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(94).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Yc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(95).")".optionlist(explode("|",$af),$o["on_delete"])."</select> ":" ");}}function
process_length($he){global$vc;return(preg_match("~^\\s*\\(?\\s*$vc(?:\\s*,\\s*$vc)*+\\s*\\)?\\s*\$~",$he)&&preg_match_all("~$vc~",$he,$qe)?"(".implode(",",$qe[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$he)));}function
process_type($o,$ob="COLLATE"){global$ji;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$ji)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $ob ".q($o["collation"]):"");}function
process_field($o,$Zh){global$x;$Rb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Zh),($o["null"]?" NULL":" NOT NULL"),(isset($Rb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Rb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Rb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Rb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Rb))?$Rb:q($Rb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$qb,$U="TABLE",$Yc=array(),$yb=false,$Rg){global$g,$Cd;$p=array_values($p);echo'    <thead><tr class="wrap">
        ';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'        <th id="label-name">',($U=="TABLE"?lang(96):lang(97)),'        <td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
        <td id="label-length">',lang(98),'        <td>',lang(99);echo'            ';if($U=="TABLE"){echo'        <td id="label-null">NULL
        <td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'        <td id="label-default">',lang(49),'            ',(support("comment")?"<td id='label-comment'".($yb?"":" class='hidden'").">".lang(47):""),'            ';}echo'        <td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
    </thead>
    <tbody onkeydown="return editingKeydown(event);">
    ';foreach($p
as$s=>$o){$s++;$of=$o[($_POST?"orig":"field")];$Yb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$of=="");echo'    <tr',($Yb?"":" style='display: none;'"),'>
        ',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Cd),$o["inout"]):""),'        <th>';if($Yb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'        <input type="hidden" name="fields[',$s,'][orig]" value="',h($of),'">
        ';$Ai=$Rg[$o["field"]];edit_type("fields[$s]",$o,$qb,$Yc,$Ai);echo'        ';if($U=="TABLE"){echo'        <td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'        <td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php

echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
        ',(support("comment")?"<td".($yb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":""),'    ';}echo'        ',"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.2-dev' alt='^' title='".lang(101)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.2-dev' alt='v' title='".lang(102)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($of==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.2-dev' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$be=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$be,0,array($o));break;}if(isset($o["field"]))$be=$D;$D++;}}elseif($_POST["down"]){$ad=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$ad){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($ad));break;}if(key($_POST["down"])==$y)$ad=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($fd,$Wf,$e,$Ze){if(!$Wf)return
true;if($Wf==array("ALL PRIVILEGES","GRANT OPTION"))return($fd=="GRANT"?queries("$fd ALL PRIVILEGES$Ze WITH GRANT OPTION"):queries("$fd ALL PRIVILEGES$Ze")&&queries("$fd GRANT OPTION$Ze"));return
queries("$fd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Wf).$e).$Ze);}function
drop_create($ec,$i,$fc,$Bh,$hc,$A,$Ae,$ze,$_e,$We,$Me){if($_POST["drop"])query_redirect($ec,$A,$Ae);elseif($We=="")query_redirect($i,$A,$_e);elseif($We!=$Me){$Ib=queries($i);queries_redirect($A,$ze,$Ib&&queries($ec));if($Ib)queries($fc);}else
queries_redirect($A,$ze,queries($Bh)&&queries($hc)&&queries($ec)&&queries($i));}function
create_trigger($Ze,$K){global$x;$Gh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Ze.$Gh:$Gh.$Ze).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($yg,$K){global$Cd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($Cd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $yg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$af;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($af)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($af)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Pc,$Lh){$J=pack("a100a8a8a8a12a12",$Pc,644,0,0,decoct($Lh->size),decoct(time()));$hb=8*32;for($s=0;$s<strlen($J);$s++)$hb+=ord($J[$s]);$J.=sprintf("%06o",$hb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Lh->send();echo
str_repeat("\0",511-($Lh->size+511)%512);}function
ini_bytes($Bd){$X=ini_get($Bd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Gf){global$x,$g;$ni=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Gf[$x]?"<a href='$ni[$x]$Gf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Nh,$n,$dc;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(104),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(105),drop_databases($_POST["db"]));page_header(lang(106),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(107),'privileges'=>lang(68),'processlist'=>lang(108),'variables'=>lang(109),'status'=>lang(110),'replication'=>lang(111),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(112,$dc[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(113,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Eg=support("scheme");$qb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(114)."</a>"."<td>".lang(115)."<td>".lang(116)."<td>".lang(117)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(118)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$xg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$xg' id='$m'>".h($m)."</a>";$pb=nbsp(db_collation($m,$qb));echo"<td>".(support("database")?"<a href='$xg".($Eg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$pb</a>":$pb),"<td align='right'><a href='$xg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Nh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(121),true);page_footer("ns");exit;}}$af="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Cb){$this->size+=strlen($Cb);fwrite($this->handler,$Cb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$vc="'(?:''|[^'\\\\]|\\\\.)*'";$Cd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$cc->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(122):lang(123):lang(124)).": ".h($a),$n);$b->selectLinks($S);$xb=$S["Comment"];if($xb!="")echo"<p>".lang(47).": ".h($xb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(125)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(126)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(92)."</h3>\n";$Yc=foreign_keys($a);if($Yc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(127)."<td>".lang(128)."<td>".lang(95)."<td>".lang(94)."<td>&nbsp;</thead>\n";foreach($Yc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(129).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(130)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(131)."</h3>\n";$Yh=triggers($a);if($Yh){echo"<table cellspacing='0'>\n";foreach($Yh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(129)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(132)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$sh=array();$th=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$qe,PREG_SET_ORDER);foreach($qe
as$s=>$B){$sh[$B[1]]=array($B[2],$B[3]);$th[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Oh=0;$Ra=-1;$Dg=array();$lg=array();$fe=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Lf=0;$Dg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Lf+=1.25;$o["pos"]=$Lf;$Dg[$R]["fields"][$C]=$o;}$Dg[$R]["pos"]=($sh[$R]?$sh[$R]:array($Oh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$de=$Ra;if($sh[$R][1]||$sh[$X["table"]][1])$de=min(floatval($sh[$R][1]),floatval($sh[$X["table"]][1]))-1;else$Ra-=.1;while($fe[(string)$de])$de-=.0001;$Dg[$R]["references"][$X["table"]][(string)$de]=array($X["source"],$X["target"]);$lg[$X["table"]][$R][(string)$de]=$X["target"];$fe[(string)$de]=true;}}$Oh=max($Oh,$Dg[$R]["pos"][0]+2.5+$Lf);}echo'<div id="schema" style="height: ',$Oh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$th)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Oh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Dg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$zh=>$mg){foreach($mg
as$de=>$ig){$ee=$de-$sh[$C][1];$s=0;foreach($ig[0]as$Zg)echo"\n<div class='references' title='".h($zh)."' id='refs$de-".($s++)."' style='left: $ee"."em; top: ".$R["fields"][$Zg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$ee)."em;'></div></div>";}}foreach((array)$lg[$C]as$zh=>$mg){foreach($mg
as$de=>$e){$ee=$de-$sh[$C][1];$s=0;foreach($e
as$yh)echo"\n<div class='references' title='".h($zh)."' id='refd$de-".($s++)."' style='left: $ee"."em; top: ".$R["fields"][$yh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.2-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$ee)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Dg
as$C=>$R){foreach((array)$R["references"]as$zh=>$mg){foreach($mg
as$de=>$ig){$Ee=$Oh;$ue=-10;foreach($ig[0]as$y=>$Zg){$Mf=$R["pos"][0]+$R["fields"][$Zg]["pos"];$Nf=$Dg[$zh]["pos"][0]+$Dg[$zh]["fields"][$ig[1][$y]]["pos"];$Ee=min($Ee,$Mf,$Nf);$ue=max($ue,$Mf,$Nf);}echo"<div class='references' id='refl$de' style='left: $de"."em; top: $Ee"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ue-$Ee)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(133),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Fb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Fb.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Fb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Gc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Kd=preg_match('~sql~',$_POST["format"]);if($Kd){echo"-- Adminer $ia ".$dc[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$jh=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Kd&&preg_match('~CREATE~',$jh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($jh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Kd){if($jh)echo
use_sql($m).";\n\n";$uf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$yg){foreach(get_rows("SHOW $yg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $yg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$uf.=($jh!='DROP+CREATE'?"DROP $yg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$uf.=($jh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($uf)echo"DELIMITER ;;\n\n$uf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$zi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Lb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Lb){if($Gc=="tar"){$Lh=new
TmpFile;ob_start(array($Lh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$zi[]=$C;elseif($Lb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Kd&&$_POST["triggers"]&&$R&&($Yh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Yh\nDELIMITER ;\n";if($Gc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Lh);}elseif($Kd)echo"\n";}}foreach($zi
as$yi)$b->dumpTable($yi,$_POST["table_style"],1);if($Gc=="tar")echo
pack("x512");}}}if($Kd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ob=array('','USE','DROP+CREATE','CREATE');$uh=array('','DROP+CREATE','CREATE');$Mb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Mb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(134)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(135)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Ob,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(136)):"").(support("event")?checkbox("events",1,$K["events"],lang(137)):"")),"<tr><th>".lang(116)."<td>".html_select('table_style',$uh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(131)):""),"<tr><th>".lang(138)."<td>".html_select('data_style',$Mb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$Nh,'">

<table cellspacing="0">
';$Qf=array();if(DB!=""){$fb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".lang(116)."</label>","<th style='text-align: right;'><label class='block'>".lang(138)."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$zi="";$vh=tables_list();foreach($vh
as$C=>$U){$Pf=preg_replace('~_.*~','',$C);$fb=($a==""||$a==(substr($a,-1)=="%"?"$Pf%":$C));$Tf="<tr><td>".checkbox("tables[]",$C,$fb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$zi.="$Tf\n";else
echo"$Tf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$fb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Qf[$Pf]++;}echo$zi;if($vh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Pf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Pf%",$m,"formUncheck('check-databases');","block")."\n";$Qf[$Pf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Rc=true;foreach($Qf
as$y=>$X){if($y!=""&&$X>1){echo($Rc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Rc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(139)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$fd=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($fd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$fd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$pd=&get_session("queries");$od=&$pd[DB];if(!$n&&$_POST["clear"]){$od=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$cd=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$cd=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($cd?fread($cd,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$ag=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$od||reset(end($od))!=$ag){restart_session();$od[]=array($ag,time());set_session("queries",$pd);stop_session();}}$ah="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Tb=";";$D=0;$sc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$wb=0;$xc=array();$zf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Ph=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$jc=$b->dumpFormat();unset($jc["sql"]);while($H!=""){if(!$D&&preg_match("~^$ah*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Tb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Tb)."\\s*|$zf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($ad,$Lf)=$B[0];if(!$ad&&$cd&&!feof($cd))$H.=fread($cd,1e5);else{if(!$ad&&rtrim($H)=="")break;$D=$Lf+strlen($ad);if($ad&&rtrim($ad)!=$Tb){while(preg_match('('.($ad=='/*'?'\\*/':($ad=='['?']':(preg_match('~^-- |^#~',$ad)?"\n":preg_quote($ad)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$Bg=$B[0][0];if(!$Bg&&$cd&&!feof($cd))$H.=fread($cd,1e5);else{$D=$B[0][1]+strlen($Bg);if($Bg[0]!="\\")break;}}}else{$sc=false;$ag=substr($H,0,$Lf);$wb++;$Tf="<pre id='sql-$wb'><code class='jush-$x'>".$b->sqlCommandQuery($ag)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$ah*+ATTACH\\b~i",$ag,$B)){echo$Tf,"<p class='error'>".lang(140)."\n";$xc[]=" <a href='#sql-$wb'>$wb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Tf;ob_flush();flush();}$fh=microtime(true);if($g->multi_query($ag)&&is_object($h)&&preg_match("~^$ah*+USE\\b~i",$ag))$h->query($ag);do{$I=$g->store_result();$Eh=" <span class='time'>(".format_time($fh).")</span>".(strlen($ag)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ag))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Tf:""),"<p class='error'>".lang(141).($g->errno?" ($g->errno)":"").": ".error()."\n";$xc[]=" <a href='#sql-$wb'>$wb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$nf=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Qe=$I->num_rows;echo"<p>".($Qe?($z&&$Qe>$z?lang(142,$z):"").lang(143,$Qe):""),$Eh;$t="export-$wb";$Fc=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(70)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$jc,$xa["format"])."<input type='hidden' name='query' value='".h($ag)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$Nh'></span>\n";if($h&&preg_match("~^($ah|\\()*+SELECT\\b~i",$ag)&&($Ec=explain($h,$ag))){$t="explain-$wb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$Fc","<div id='$t' class='hidden'>\n";select($Ec,$h,$nf);echo"</div>\n";}else
echo$Fc;echo"</form>\n";}}else{if(preg_match("~^$ah*+(CREATE|DROP|ALTER)$ah++(DATABASE|SCHEMA)\\b~i",$ag)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(144,$g->affected_rows)."$Eh\n";}$fh=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($sc)echo"<p class='message'>".lang(145)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(146,$wb-count($xc))," <span class='time'>(".format_time($Ph).")</span>\n";}elseif($xc&&$wb>1)echo"<p class='error'>".lang(141).": ".implode("",$xc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Bc="<input type='submit' value='".lang(147)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$ag=$_GET["sql"];if($_POST)$ag=$_POST["query"];elseif($_GET["history"]=="all")$ag=$od;elseif($_GET["history"]!="")$ag=$od[$_GET["history"]][0];echo"<p>";textarea("query",$ag,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>$Bc\n",lang(148).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(149)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Bc":lang(150)),"</div></fieldset>\n","<fieldset><legend>".lang(151)."</legend><div>",lang(152,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(153).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(154))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(155))."\n","<input type='hidden' name='token' value='$Nh'>\n";if(!isset($_GET["import"])&&$od){print_fieldset("history",lang(156),$_GET["history"]!="");for($X=end($od);$X;$X=prev($od)){$y=key($od);list($ag,$Eh,$nc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Eh)."'>".@date("H:i:s",$Eh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$ag)))),80,"</code>").($nc?" <span class='time'>($nc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(157)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(158)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$ki=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(!isset($o["privileges"][$ki?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($ki?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$fi=unique_array($_GET["where"],$w);$dg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(159),$cc->delete($a,$dg,!$fi));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($ki){if(!$O)redirect($A);queries_redirect($A,lang(160),$cc->update($a,$O,$dg,!$fi));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$cc->insert($a,$O);$ce=($I?last_id():0);queries_redirect($A,lang(161,($ce?" $ce":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(isset($o["privileges"]["select"])){$Ha=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ha="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ha="1*".idf_escape($C);$M[]=($Ha?"$Ha AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$cc->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$cc->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($cc->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$cc->primary),"auto_increment"=>($y==$cc->primary));}}}edit_form($a,$p,$K,$ki);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Af=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$Af[$y]=$y;$kg=referencable_primary($a);$Yc=array();foreach($kg
as$qh=>$o)$Yc[str_replace("`","``",$qh)."`".str_replace("`","``",$o["field"])]=$qh;$qf=array();$S=array();if($a!=""){$qf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(162),drop_tables(array($a)));else{$p=array();$Da=array();$oi=false;$Wc=array();$pf=reset($qf);$Aa=" FIRST";$Ge=array();$tb=array();$ub=array();$Rg=tables_generated_columns("'".$K["name"]."'");$Sg=tables_generated_columns2("'".$K["name"]."'");foreach($K["fields"]as$y=>$o){$q=$Yc[$o["type"]];$Zh=($q!==null?$kg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Yf=process_field($o,$Zh);$Da[]=array($o["orig"],$Yf,$Aa);if($Yf!=process_field($pf,$pf)){$p[]=array($o["orig"],$Yf,$Aa);if($o["orig"]!=""||$Aa)$oi=true;}if($q!==null)$Wc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Yc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Zh["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$oi=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$pf=next($qf);if(!$pf)$Aa="";}if($o["virtual1"]){$bi="";$tb[]=$o["orig"];if($o["length"])$bi=$o["type"]."(".$o["length"].")";else$bi=$o["type"];if(($Rg[$o["field"]]!=$o["virtual1"])||($o["field"]!=$o["orig"])||($Sg[$o["field"]]!=$bi)||($Aa)){$ub[]=$o["orig"];if($o["length"])$Ge[]="CHANGE "."`".$o["orig"]."` "."`".$o["field"]."` ".$o["type"]."(".$o["length"].") as (".$o["virtual1"].")";else$Ge[]="CHANGE "."`".$o["orig"]."` "."`".$o["field"]."` ".$o["type"]." as (".$o["virtual1"].")";}}}$Cf="";if($Af[$K["partition_by"]]){$Df=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$Df[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Cf.="\nPARTITION BY $K[partition_by]($K[partition])".($Df?" (".implode(",",$Df)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Cf.="\nREMOVE PARTITIONING";$ye=lang(163);if($a==""){cookie("adminer_engine",$K["Engine"]);$ye=lang(164);}$C=trim($K["name"]);foreach($tb
as$y=>$Ci){foreach($ub
as$Di){if($Ci==$Di)unset($tb[$y]);}}queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ye,alter_table($a,$C,($x=="sqlite"&&($oi||$Wc)?$Da:$p),$Wc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$Cf,$Ge,$tb));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ci["int"])?"int":(isset($ci["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($qf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$dd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $dd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$Df=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $dd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Df[""]="";$K["partition_names"]=array_keys($Df);$K["partition_values"]=array_values($Df);}}}$qb=collations();$uc=engines();foreach($uc
as$tc){if(!strcasecmp($tc,$K["Engine"])){$K["Engine"]=$tc;break;}}echo'
<form action="" method="post" id="form">
    <p>
        ';if(support("columns")||$a==""){echo'            ',lang(165),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
            ';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo'        ',($uc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(166).")")+$uc,$K["Engine"])."</select>":""),'        ',($qb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(93).")")+$qb,$K["Collation"]):""),'            <input type="submit" value="',lang(14),'">
        ';}echo'
        ';if(support("columns")){echo'    <table cellspacing="0" id="edit-fields" class="nowrap">
        ';$yb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$yb){foreach($K["fields"]as$o){if($o["comment"]!=""){$yb=true;break;}}}$Rg=tables_generated_columns("'".$K["name"]."'");edit_fields($K["fields"],$qb,"TABLE",$Yc,$yb,$Rg);echo'    </table>
    <p>
        ',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
        ',checkbox("defaults",1,true,lang(167),"columnShow(this.checked, 5)","jsonly"),'        ';if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo'        ',(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($yb?" checked":"").">".lang(47)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($yb?'':' class="hidden"').'>':''),'    <p>
        <input type="submit" value="',lang(14),'">
        ';}echo'
        ';if($a!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'        ';if(support("partitioning")){$Bf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(168),$K["partition_by"]);echo'    <p>
        ',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$Af,$K["partition_by"])."</select>",'        (<input name="partition" value="',h($K["partition"]),'">)
        ',lang(169),': <input type="number" name="partitions" class="size',($Bf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
    <table cellspacing="0" id="partition-table"',($Bf?"":" class='hidden'"),'>
        <thead><tr><th>',lang(170),'<th>',lang(171),'</thead>
        ';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'    </table>
    </div></fieldset>
    ';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$yd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$yd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$yd[]="SPATIAL";$w=indexes($a);$Rf=array();if($x=="mongo"){$Rf=$w["_id_"];unset($yd[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$yd)){$e=array();$ie=array();$Vb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$he=$v["lengths"][$y];$Ub=$v["descs"][$y];$O[]=idf_escape($d).($he?"(".(+$he).")":"").($Ub?" DESC":"");$e[]=$d;$ie[]=($he?$he:null);$Vb[]=$Ub;}}if($e){$Cc=$w[$C];if($Cc){ksort($Cc["columns"]);ksort($Cc["lengths"]);ksort($Cc["descs"]);if($v["type"]==$Cc["type"]&&array_values($Cc["columns"])===$e&&(!$Cc["lengths"]||array_values($Cc["lengths"])===$ie)&&array_values($Cc["descs"])===$Vb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$Cc)$c[]=array($Cc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(172),alter_indexes($a,$c));}page_header(lang(125),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(173),'<th><input type="submit" class="wayoff">',lang(174),'<th id="label-name">',lang(175);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='<?php echo
lang(100),'\'></noscript>&nbsp;
</thead>
';if($Rf){echo"<tr><td>PRIMARY<td>";foreach($Rf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Od=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Od!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Od][type]",array(-1=>"")+$yd,$v["type"],($Od==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Od][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(45)."'",($p?array_combine($p,$p):$p),$d),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Od][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(98)."'>":""),($x!="sql"?checkbox("indexes[$Od][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Od][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Od]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.2-dev' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Od++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(176),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(177),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$kh=true;$be="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$kh=false;$be=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($be),lang(178),$kh);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(179));}}page_header(DB!=""?lang(64):lang(107),$n,array(),h(DB));$qb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$qb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$fd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$fd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($qb?html_select("collation",array(""=>"(".lang(93).")")+$qb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."'>\n";echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(180));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(181));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(182));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(183).": ".h($da),$n);$yg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$wd=array();$uf=array();foreach($yg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$uf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$wd[]=$s;}if(!$n&&$_POST){$Za=array();foreach($yg["fields"]as$y=>$o){if(in_array($y,$wd)){$X=process_input($o);if($X===false)$X="''";if(isset($uf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Za[]=(isset($uf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Za).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(184,$g->affected_rows)."\n";}while($g->next_result());if($uf)select($g->query("SELECT ".implode(", ",$uf)));}}echo'
<form action="" method="post">
';if($wd){echo"<table cellspacing='0'>\n";foreach($wd
as$y){$o=$yg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(183),'">
<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ye=($_POST["drop"]?lang(185):($C!=""?lang(186):lang(187)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$yh=array();foreach($K["source"]as$y=>$X)$yh[$y]=$K["target"][$y];$K["target"]=$yh;}if($x=="sqlite")queries_redirect($A,$ye,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$ec="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$ec,$A,$ye);else{query_redirect($c.($C!=""?"$ec,":"")."\nADD".format_foreign_key($K),$A,$ye);$n=lang(188)."<br>$n";}}}page_header(lang(189),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Yc=foreign_keys($a);$K=$Yc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Zg=array_keys(fields($a));$yh=($a===$K["table"]?$Zg:array_keys(fields($K["table"])));$jg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(190),':
',html_select("table",$jg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(191),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(127),'<th id="label-target">',lang(128),'</thead>
';$Od=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Zg,$X,($Od==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$yh,$K["target"][$y],1,"label-target");$Od++;}echo'</table>
<p>
',lang(95),': ',html_select("on_delete",array(-1=>"")+explode("|",$af),$K["on_delete"]),' ',lang(94),': ',html_select("on_update",array(-1=>"")+explode("|",$af),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(192),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$rf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$rf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ha=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ye=lang(193);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$rf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ha,$A,$ye);else{$_h=$C."_adminer_".uniqid();drop_create("DROP $rf ".table($a),"CREATE $U ".table($C).$Ha,"DROP $U ".table($C),"CREATE $U ".table($_h).$Ha,"DROP $U ".table($_h),($_POST["drop"]?substr(ME,0,-1):$A),lang(194),$ye,lang(195),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($rf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(196)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(175),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(122)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Fd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$gh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(197));elseif(in_array($K["INTERVAL_FIELD"],$Fd)&&isset($gh[$K["STATUS"]])){$Cg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(198):lang(199)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Cg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$Cg)."\n".$gh[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(200).": ".h($aa):lang(201)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(175),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(202),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(203),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(204),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Fd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(110),'<td>',html_select("STATUS",$gh,$K["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(205)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$yg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$_h="$K[name]_adminer_".uniqid();drop_create("DROP $yg ".idf_escape($da),create_routine($yg,$K),"DROP $yg ".idf_escape($K["name"]),create_routine($yg,array("name"=>$_h)+$K),"DROP $yg ".idf_escape($_h),substr(ME,0,-1),lang(206),lang(207),lang(208),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(209):lang(210)).": ".h($da):(isset($_GET["function"])?lang(211):lang(212))),$n);if(!$_POST&&$da!=""){$K=routine($da,$yg);$K["name"]=$da;}$qb=get_vals("SHOW CHARACTER SET");sort($qb);$zg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(175),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($zg?lang(19).": ".html_select("language",$zg,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$qb,$yg);if(isset($_GET["function"])){echo"<tr><td>".lang(213);edit_type("returns",$K["returns"],$qb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(214));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(215));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(216));else
redirect($_);}page_header($fa!=""?lang(217).": ".h($fa):lang(218),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(219));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(220));}page_header($ga!=""?lang(221).": ".h($ga):lang(222),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Xh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Xh["Timing"])&&in_array($_POST["Event"],$Xh["Event"])&&in_array($_POST["Type"],$Xh["Type"])){$Ze=" ON ".table($a);$ec="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Ze:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($ec,$A,lang(223));else{if($C!="")queries($ec);queries_redirect($A,($C!=""?lang(224):lang(225)),queries(create_trigger($Ze,$_POST)));if($C!="")queries(create_trigger($Ze,$K+array("Type"=>reset($Xh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(226).": ".h($C):lang(227)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(228),'<td>',html_select("Timing",$Xh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(229),'<td>',html_select("Event",$Xh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Xh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$Xh["Type"],$K["Type"]),'</table>
<p>',lang(175),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Wf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$Db)$Wf[$Db][$K["Privilege"]]=$K["Comment"];}$Wf["Server Admin"]+=$Wf["File access on server"];$Wf["Databases"]["Create routine"]=$Wf["Procedures"]["Create routine"];unset($Wf["Procedures"]["Create routine"]);$Wf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Wf["Columns"][$X]=$Wf["Tables"][$X];unset($Wf["Server Admin"]["Usage"]);foreach($Wf["Tables"]as$y=>$X)unset($Wf["Databases"][$y]);$Le=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Le[$X]=(array)$Le[$X]+(array)$_POST["grants"][$y];}$gd=array();$Xe="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$qe,PREG_SET_ORDER)){foreach($qe
as$X){if($X[1]!="USAGE")$gd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$gd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Xe=$B[1];}}if($_POST&&!$n){$Ye=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ye",ME."privileges=",lang(230));else{$Ne=q($_POST["user"])."@".q($_POST["host"]);$Ef=$_POST["pass"];if($Ef!=''&&!$_POST["hashed"]){$Ef=$g->result("SELECT PASSWORD(".q($Ef).")");$n=!$Ef;}$Ib=false;if(!$n){if($Ye!=$Ne){$Ib=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ne IDENTIFIED BY PASSWORD ".q($Ef));$n=!$Ib;}elseif($Ef!=$Xe)queries("SET PASSWORD FOR $Ne = ".q($Ef));}if(!$n){$vg=array();foreach($Le
as$Se=>$fd){if(isset($_GET["grant"]))$fd=array_filter($fd);$fd=array_keys($fd);if(isset($_GET["grant"]))$vg=array_diff(array_keys(array_filter($Le[$Se],'strlen')),$fd);elseif($Ye==$Ne){$Ve=array_keys((array)$gd[$Se]);$vg=array_diff($Ve,$fd);$fd=array_diff($fd,$Ve);unset($gd[$Se]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Se,$B)&&(!grant("REVOKE",$vg,$B[2]," ON $B[1] FROM $Ne")||!grant("GRANT",$fd,$B[2]," ON $B[1] TO $Ne"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ye!=$Ne)queries("DROP USER $Ye");elseif(!isset($_GET["grant"])){foreach($gd
as$Se=>$vg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Se,$B))grant("REVOKE",array_keys($vg),$B[2]," ON $B[1] FROM $Ne");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(231):lang(232)),!$n);if($Ib)$g->query("DROP USER $Ne");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(139)),$n,array("privileges"=>array('',lang(68))));if($_POST){$K=$_POST;$gd=$Le;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Xe;if($Xe!="")$K["hashed"]=true;$gd[(DB==""||$gd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(233),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($gd
as$Se=>$fd){echo'<th>'.($Se!="*.*"?"<input name='objects[$s]' value='".h($Se)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(124),"Columns"=>lang(45),"Procedures"=>lang(234),)as$Db=>$Ub){foreach((array)$Wf[$Db]as$Vf=>$xb){echo"<tr".odd()."><td".($Ub?">$Ub<td":" colspan='2'").' lang="en" title="'.h($xb).'">'.h($Vf);$s=0;foreach($gd
as$Se=>$fd){$C="'grants[$s][".h(strtoupper($Vf))."]'";$Y=$fd[strtoupper($Vf)];if($Db=="Server Admin"&&$Se!=(isset($gd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(235)."<option value='0'".($Y=="0"?" selected":"").">".lang(236)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Vf=="All privileges"?" id='grants-$s-all'":($Vf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Wd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Wd++;}queries_redirect(ME."processlist=",lang(237,$Wd),$Wd||!$_POST["kill"]);}page_header(lang(108),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(238).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(239,max_connections()),"<p><input type='submit' value='".lang(240)."'>\n";}echo'<input type="hidden" name="token" value="',$Nh,'">
</form>
';}elseif(isset($_GET["replication"])){page_header(lang(111));echo"<h3>".lang(241).doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$oe=replication_status("MASTER");if(!$oe)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($oe[0]as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}$Wg=replication_status("SLAVE");if($Wg){echo"<h3>".lang(242).doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($Wg[0]as$Vg){echo"<table cellspacing='0'>\n";foreach($Vg
as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Yc=column_foreign_keys($a);$Ue="";if($S["Oid"]){$Ue=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ue));}parse_str($_COOKIE["adminer_import"],$ya);$wg=array();$e=array();$Dh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$Dh=$b->selectLengthProcess();}$wg+=$o["privileges"];}list($M,$hd)=$b->selectColumnsProcess($e,$w);$Jd=count($hd)<count($M);$Z=$b->selectSearchProcess($p,$w);$kf=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$dd=($M?implode(", ",$M):"*".($Ue?", $Ue":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$id=($hd&&$Jd?"\nGROUP BY ".implode(", ",$hd):"").($kf?"\nORDER BY ".implode(", ",$kf):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$gi=>$K){$Ha=convert_field($p[key($K)]);$M=array($Ha?$Ha:idf_escape(key($K)));$Z[]=where_check($gi,$p);$J=$cc->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$Gi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$gb=array();foreach($_POST["check"]as$db)$gb[]=where_check($db,$p);$Gi[]="((".implode(") OR (",$gb)."))";}$Gi=($Gi?"\nWHERE ".implode(" AND ",$Gi):"");$Rf=$ii=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Rf=array_flip($v["columns"]);$ii=($M?$Rf:array());break;}}foreach((array)$ii
as$y=>$X){if(in_array(idf_escape($y),$M))unset($ii[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ii===array())$H="SELECT $dd$Gi$id";else{$ei=array();foreach($_POST["check"]as$X)$ei[]="(SELECT".limit($dd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$id,1).")";$H=implode(" UNION ALL ",$ei);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Yc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($ii===array()&&is_array($_POST["check"]))||$Jd){$I=($_POST["delete"]?$cc->delete($a,$Gi):($_POST["clone"]?queries("INSERT $H$Gi"):$cc->update($a,$O,$Gi)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Fi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$cc->delete($a,$Fi,1):($_POST["clone"]?queries("INSERT".limit1($H,$Fi)):$cc->update($a,$O,$Fi)));if(!$I)break;$za+=$g->affected_rows;}}}$ye=lang(243,$za);if($_POST["clone"]&&$I&&$za==1){$ce=last_id();if($ce)$ye=lang(161," $ce");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ye,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(244);else{$I=true;$za=0;foreach($_POST["val"]as$gi=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$cc->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($gi,$p),!($Jd||$ii===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(243,$za),$I);}}elseif(!is_string($Oc=get_file("csv_file",true)))$n=upload_error($Oc);elseif(!preg_match('~~u',$Oc))$n=lang(245);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$sb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Oc,$qe);$za=count($qe[0]);$cc->begin();$Kg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($qe[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Kg]*)$Kg~",$X.$Kg,$re);if(!$y&&!array_diff($re[1],$sb)){$sb=$re[1];$za--;}else{$O=array();foreach($re[1]as$s=>$nb)$O[idf_escape($sb[$s])]=($nb==""&&$p[$sb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nb))));$L[]=$O;}}$I=(!$L||$cc->insertUpdate($a,$L,$Rf));if($I)$I=$cc->commit();queries_redirect(remove_from_uri("page"),lang(246,$za),$I);$cc->rollback();}}}$qh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $qh",$n);$O=null;if(isset($wg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Yc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(247).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($kf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Dh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$bd=$g->result(count_rows($a,$Z,$Jd,$hd));$E=floor(max(0,$bd-1)/$z);}$Hg=$M;if(!$Hg){$Hg[]="*";if($Ue)$Hg[]=$Ue;}$Eb=convert_fields($e,$p,$M);if($Eb)$Hg[]=substr($Eb,2);$I=$cc->select($a,$Hg,$Z,$hd,$kf,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$rc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$hd&&$Jd&&$x=="sql")$bd=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Qa=$b->backwardKeys($a,$qh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$hd&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(248)."</a>");$Ke=array();$ed=array();reset($M);$fg=1;foreach($L[0]as$y=>$X){if($y!=$Ue){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$fg):($X["fun"]?"*":$y));if($C!=""){$fg++;$Ke[$y]=$C;$d=idf_escape($y);$sd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ub="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($sd.($kf[0]==$d||$kf[0]==$y||(!$kf&&$Jd&&$hd[0]==$d)?$Ub:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($sd.$Ub)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(53).'" class="text jsonly"> =</a>';echo"</span>";}$ed[$y]=$X["fun"];next($M);}}$ie=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$ie[$y]=max($ie[$y],min(40,strlen(utf8_decode($X))));}}echo($Qa?"<th>".lang(249):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Yc)as$Je=>$K){$fi=unique_array($L[$Je],$w);if(!$fi){$fi=array();foreach($L[$Je]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$fi[$y]=$X;}}$gi="";foreach($fi
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$gi.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$hd&&$M?"":"<td>".checkbox("check[]",substr($gi,1),in_array(substr($gi,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Jd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$gi)."'>".lang(250)."</a>"));foreach($K
as$y=>$X){if(isset($Ke[$y])){$o=$p[$y];if($X!=""&&(!isset($rc[$y])||$rc[$y]!=""))$rc[$y]=(is_mail($X)?$Ke[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$gi;if(!$_&&$X!==null){foreach((array)$Yc[$y]as$q){if(count($Yc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Zg)$_.=where_link($s,$q["target"][$s],$L[$Je][$Zg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$fi))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($fi
as$Pd=>$W)$_.=where_link($s++,$Pd,$W);}$X=select_value($X,$_,$o,$Dh);$t=h("val[$gi][".bracket_escape($y)."]");$Y=$_POST["val"][$gi][bracket_escape($y)];$mc=!is_array($K[$y])&&is_utf8($X)&&$L[$Je][$y]==$K[$y]&&!$ed[$y];$Ch=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$mc)||$Y!==null){$kd=h($Y!==null?$Y:$K[$y]);echo"<td>".($Ch?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$kd</textarea>":"<input name='$t' value='$kd' size='$ie[$y]'>");}else{$me=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($me?2:($Ch?1:0)).($mc?"":", '".h(lang(251))."'").");\">$X";}}}if($Qa)echo"<td>";$b->backwardKeysPrint($Qa,$L[$Je]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$Ac=true;if($_GET["page"]!="last"){if(!+$z)$bd=count($L);elseif($x!="sql"||!$Jd){$bd=($Jd?false:found_rows($S,$Z));if($bd<max(1e4,2*($E+1)*$z))$bd=reset(slow_query(count_rows($a,$Z,$Jd,$hd)));else$Ac=false;}}if(+$z&&($bd===false||$bd>$z||$E)){echo"<p class='pages'>";$te=($bd===false?$E+(count($L)>=$z?2:1):floor(($bd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(252)."', '".($E+1)."'), event); return false;\">".lang(252)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($te,$E+5);$s++)echo
pagination($s,$E);if($te>0){echo($E+5<$te?" ...":""),($Ac&&$bd!==false?pagination($te,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$te'>".lang(253)."</a>");}echo(($bd===false?count($L)+1:$bd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(254).'...\');" class="loadmore">'.lang(255).'</a>':'');}else{echo
lang(252).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($te>$E?pagination($E+1,$E).($te>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($bd!==false?"(".($Ac?"":"~ ").lang(143,$bd).") ":"");$Zb=($Ac?"":"~ ").$bd;echo
checkbox("all",1,0,lang(256),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Zb' : checked); selectCount('selected2', this.checked || !checked ? '$Zb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(248),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(244).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(119),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(238),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Zc=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Zc['sql']);break;}}if($Zc){print_fieldset("export",lang(70)." <span id='selected2'></span>");$vf=$b->dumpOutput();echo($vf?html_select("output",$vf,$ya["output"])." ":""),html_select("format",$Zc,$ya["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$hd&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($rc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Nh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(110):lang(109));$vi=($P?show_status():show_variables());if(!$vi)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($vi
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$nh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($nh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($ch=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($nh[$y]))$nh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($nh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$wh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($wh&&!$n&&!$_POST["search"]){$I=true;$ye="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ye=lang(257);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ye=lang(258);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ye=lang(259);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ye=lang(260);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ye=lang(261);}elseif(!$_POST["tables"])$ye=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ye.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$ye,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(262)."</h3>\n";$vh=tables_list();if(!$vh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(263)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$ac=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(124),'<td>'.lang(264).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(115).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(265).$ac,'<td>'.lang(266).$ac,'<td>'.lang(267).$ac,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(268).$ac,(support("comment")?'<td>'.lang(47).$ac:''),"</thead>\n";$T=0;foreach($vh
as$C=>$U){$yi=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($yi?"views[]":"tables[]"),$C,in_array($C,$wh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($yi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(122):lang(123)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(126)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(239,count($vh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$si="<input type='submit' value='".lang(269)."'".on_help("'VACUUM'")."> ";$gf="<input type='submit' name='optimize' value='".lang(270)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>".($x=="sqlite"?$si:($x=="pgsql"?$si.$gf:($x=="sql"?"<input type='submit' value='".lang(271)."'".on_help("'ANALYZE TABLE'")."> ".$gf."<input type='submit' name='check' value='".lang(272)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(273)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(274)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(120)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(275).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(276)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(277)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Nh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(196)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(136)."</h3>\n";$_g=routines();if($_g){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(175).'<td>'.lang(46).'<td>'.lang(213)."<td>&nbsp;</thead>\n";odd('');foreach($_g
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(129)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(212).'</a>':'').'<a href="'.h(ME).'function=">'.lang(211)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(278)."</h3>\n";$Mg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Mg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."</thead>\n";odd('');foreach($Mg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(218)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$qi=types();if($qi){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."</thead>\n";odd('');foreach($qi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(222)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(137)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."<td>".lang(279)."<td>".lang(202)."<td>".lang(203)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(280)."<td>".$K["Execute at"]:lang(204)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(129).'</a>';}echo"</table>\n";$zc=$g->result("SELECT @@event_scheduler");if($zc&&$zc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($zc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(201)."</a>\n";}if($vh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();
<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.2-dev
*/error_reporting(6135);$Rc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Rc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$fi=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($fi)$$X=$fi;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress(" ‚ \$I´ào9#AÐèp9Ž…âói„ðc2…Æ#y¼ès:Œ'ÄhÆo6‹ÌÆóqÐZa;™Nrƒ(¼h.‹†óÌç*–K¦) ¸Úi“O„B	°Ø;Ž'¹9²:˜ÇªÕ@Âc5™ÎFó©¸ÉX\rÆF!˜Àw+–Ž‡#(¼b.\rDc)ÈÈa7E„‘¦š,\$M‡c)ÐÒcÁð1iÎúi3â§#= un>˜j†ú±Ê±\\­ŽgC)â\\d2ÉäXé`èÝ,2ŽÏ¢ã„Ï2¦ŽÆ“™§XdÑékS(ÔÌ5î·›î„tl¤ù5q†E»®·`Ük\røÃ—oMYŒÆA®¯[¯ØÂ;CpêÊØO3r1+ë\nÆÿ«„¼Ž»²á8Ž0Ê2,á¸®;Òõ¯¯r°ùAksX×­ƒdý-«þ¾ÀJòÀ±,‹4´]ŽÛÙ>\rCíDÏÓøÛ7 \\5£˜ÐPáCª«¸Ô+£èÐk‚\\âC(t†«£40³ŒòÜÞŒƒ\"3‡App2¡\0c8*D\0£ˆrQ/ŽÀ@™» @‡4*Þ …©ˆÒ3¡² äŠ©ò“ß*5P\$_ÆAÒµ­­ÐÐK4D¹/L6Î¿¡€AUA„ú¡ˆq>‡sDÔ7M“tá9Nˆâü¾Ïðé=†5}\0004ÐAI4íJ»-Q#-F¶ôz›@ÑŠÏM-Kc@4u\n[hÚqÍ«HP÷G/­¡,Ç2¿³œãU4¥:#Ø2c½:\rüwTó3u|_Wæx×um_zNµûL·WÓ½‡'Ø³õA3 P™DaN#;ßc4sŒÏí%c£?æ†I“ZZçw·°Y€xªúÏäöFev6]ŽøöEšæú(å`ÏClùiy†›™iùKZŒ3L×6†UÞI:g£FƒÆ@F†¡˜Â1ú„ìïîR:`ònÂhÂ_¼?£Ê–¯»Å\\l›0k´`.ÿŸr<žÕK[;vÊóPú3\r,PÈËƒÜÔ9Ž`Â<‡JDZö1Ì€ÙÁÑoî/ÅVõÏ8×CmßTM³yÝÕu^¥«å´\rBº#èà=á~WOØ†ïrøkZ¨(Î=öz›Úo!Ò4ß~=ëA{Þ‚-Dßø\r[êLcÄ™ii×çî\$í†Ö¥ÖÐ:\$&LÞ‡'ßb=5,¨‡—\0iQìpP:@Ø”“€rí±L-°hAª`&è8@gÜ¼ú»b:3óî™’âel»‚ôI`ou|Ü½ÐÜ¨taÐ<‡\0ÊH)Ô¯€¾»ÆS]«æY‘ôÃè€q°Á„:†ÇJG²Jl!¼;¼†XË7Fè¤Ep]ƒˆu\r0äF*#eŒê½–GHÙâ	F\"Ëí\\4íƒ\$dŒÑñWÇè­ C»«\rçÈ=½•b‚Õ¡C(¤þ¯•aé*ÅÓGRêÁÒú\rå€éÃŠKâ”])l4¥Ðt\rÁ«<HáÌàÑÜ8,ÆÜ5KÉvKaStòÖpÝ(f,½*¡Ô6†à÷&Ž4œRxÒJ\0wO‘™s\r´³ØÃ(4AÜ62ð\rÕÚsOÍy»òX¸:³½´L8ÈHƒ„˜FÜ;Ð4ÏÃ\$þ ¤~ËóXeMë†P–PÐº½¨j¢ñG.ƒv_Kí'0ç±9\$æ4‡pƒ f'AÒ¤ 'þæg,ç¥ÔÀÜ­þW:×7a´™#~P9È*“ÁÚTr›};¦4|9R…Q	ñÔší…Ü¦×ˆïg³N,9ê¼cvãÅ\"¥jMg9è²~×ä	–T|7MIc[Nb)	©Ò3šsÞh.\ré¦	×r´ƒ%M[U<î9·:t¦ˆ.­Ä5¯•÷4’i`Bt\n]Ù‹)eƒ-ž³KÞ\rÀÿc|„ Ö›³QñÅ1n%œËT¼\rÓ»Å”1ŸÀöà¢ƒåhä4éWPÚíÀp€êá·Ãv_Íe¯_—*(ÜÓ¥\"2ý~/hÖƒµüÛˆ!¼.XÞä¼2ËîÞÝ«Àü…Ý»÷†.,;Ë+]w†FV\"/·Z¾Äì7e|ÇË÷OÔi\r–\$Ý‡0âê 1¢¾lƒ…Ý8êrÌ€aºÀbZtŒ|°Âi}Y‡€v“W.\$V˜bÅ¬ÃƒÎ \$çö¡ÜYiÖdŽÊŽ÷^mwMÚM\r<1‡PäLà‚N:Fôß‡9¯¦Éµtá	§VªÑÈ2^SµÆ=¼LÐ3,co-CW*ñéÍk+\0Ä1§0dŽ‘æ\rró	PàËFè• „ÜÖ÷qVå‘Ò½yòÚµÊ	nÉ½>Kv~47¶q	ž»ÙžFèÔJë“äÙµÑ³yèƒ¨ñS=\\lkÐÖjï;úNd·b0b[FpáÔEØNª'Æ±ògU+†¨°Ú¶ÃÄÇ`_Àó¦rNË<ì‡‘˜ÁCkmiÍ=¯†;99[&½ŽžöSRÜí[15³¶÷†œ‹'!ÀäŠ´e—é¥ÃÂ@G¼÷&Åû¯?åý¦ÔöªÄiO*%PG Š@s€„/¼œó¶xKÙè‘ƒ½í¾\$Uõ\rúsˆaÂ™Äø©Õå‚õÙ­šÚ›[ÚsšÂ[¯Ìóe^o-'MÊã52¯¬€ƒ¡š`üØÑ›ÒnšÍ`“Ëv´h	ûâ’îð²â¹	Ç-‡ÐF°ˆdaÊjSn1F¡ÞyŸüw¥M­GÓ´‡S¬©ýe¾`ZêÅçu2‘ûÚêüûõxïžŽ¬UJÇéÄ¯a [‚H&Îmmg³¯ñÆŠÊé9~×X6ëº¿RWšÃ“\"¼à7=ŽæŽA³ôí¦Ö:¬\nnAl8@µ\$¬ÖlW2EZ!ˆ5œoxešŸ¿·©géÏR“H¬½å-ƒív³lgYðÀÉZd\\ŽUáÁŒÑZ†NôÍÓº÷ÏN†^À`Ì_\\;†Üš/·~i½×²Ïö–OôìÀúÎy‹s@ÊsŠ^ûL¼òè¶(é’|Èrí#r÷b6\0ðKã¤! Ø>õñŽ„Ôí'\0@	…NS é \\¦`åT«\nŒaDÈxäÕˆ~ƒwM(Ðh‚’¯^hŒüäP/%æ¨Žtèjb~MŽ‚¬®†¬‡.¾ì.Æì°|î„ÏÎzñfLÅ`VF¬Èßƒ¦É°²G0¶Å0»\n`@© ’I({0Ö).AMNŽW\\Pm¿\r+ÄX`vÒCt\nˆMOØ)°20*~Ã`8g~Þ@p¨ ÷âe„ëÐþÿ`t\$PŒGâ²(0ŽÓ0	îHé\r@Ê#û‡bÝIòÝ°PÎ¼ì\$ìNÈ¸ñ<¼pÝŒ1…0‰'æç®ÏÑ]©†Ã\nñÑ ûÄ&0ÐF0®o`Îâpþ™gT™¤ŠëÐ¾õ­4×1¥Ð±§|7n8¢ä(¡J`\n\nìê\n:¨@úM@ík~>äJ?/(6¯,Á¬†DæP€BDÃˆ\n€ãt‡b4I”2¬çú®,Ôá p\0B ¢!#\0o%!DQ!‘ÎHä’\rO&R:ÁÑ˜R8Irq\$´#&ÒhFÒv~ì†ò»%¤NHr(C‚ÆªÔª	e)D„›DV@.ÿ#.](@Z¸Äx>L*©ƒw( à\r\0àèâ\ròu&`[-2×#²Òãq-ä—,²Î¢=.‚^ òõ'¢G-R¹'\$òÿ/²?-Ó#òð’ôRÄ++ŒŠ\$öÎDx Ä@ll\$(³\"ÚÒ¡2³/3%\$â!ðÃòÇ-’ìó+ŽÁ(2Š\r¢}#ó_0Ã°5’Ð ß)<ùS¼ë|ÌÄ}\"IÎ fÉÔÏŒüg¹8	8Ó|ƒy\0lÒª	Ð@hÀSœ6³?8O#!'%ãû*äZ‘çK;Â»8’FnS91È•\\ïäð”`ÖÏŽjÂÜ§ÇðZ‚]¨|¦ögÂvGÈ?§ÎŠƒrX`ê­^·©´\" Ü\r(€öÉ8›ìŒÉ\n&\râ5€äxñpeæÞ)Ö»Î3 êûFY+j–Àbû—>OemÝBDMD’S˜ÄÓÌBW23§=J ¥ÀdÃÂÝHF„E<])‘Ïs;²F–T€±ª[H…*àò&lÜ\n\\è®›tÀÍ@F‰=*ƒŒ[\$t…JÔ\$t·K¯†ø¢\\èð‘(Êâ#x´r¼kFœf¦BÔZ¦MNˆòu¬9O%UOtúf&fkµ/&MGl\r#:TÍ:ŠR4Z&è>¬ÁK4ãÈƒL”úäE`&/ˆøÔzI,úÜÅ%TS>I&ÇHŸT\\ßÎRÉÕ3JcÞ¥ª^¦2©!cû! àâŽX)”Mq=j¤71Xî”sWU’:Ô¡*LÏY“ª¥”E;&í!2—*ÂÌE’²²B…Ã]\"y\$ÒQ4ÒWSR&Ãl;#Ìc¨€zC`_cX@º”^ÀÃ_ô,`á_Ó§	§‘O¨Îñ¯þ-Ï½CCkhTKlM­qv^è_C1 Ë_È1`	\0ˆV9_ É`ÖEZã¸¤‹KÈƒ`VÐM	a3aTR‘„ý6BÏ¾4Ö&q;Ed¼Ö3fM`v;fˆƒemìG–\\¤Ê¨¤)Rîb_…¡`Ó Œ( ‚&\"f¨.Á‚ZÂžg+úãsúZóÞu“â™óæ•sëXsÅQš0¨Bâ@¸©s2S”Å hÐ`:–ª%hMk6kgYk¢[kâ‰lSôÅ*ƒlåEm2)öÛQ¨•IYn„†)î8Î²õÎé1ÒG6ø©kYpšÅ5¦ëÎ\0Oî]pö®gò†`ÐýÀU_ LÞuò¤ˆ€QwWywÓ}x Sxw‹wnçw DÎSyWmq%kV¹kÖÀ&–Ç?vÊ]ÐÙöÕlÀwsvÞÎ÷=nt•\\#ktC/o1—uVúÍ€auÑ×Uçóv ÃxÎæ—Á÷ƒz¶±z÷{7{w\$QÉs/.\$Å—Ì\r×;>•¿<7B\r×G~m~@Í~—ì^ðQ·õ€Íz~š€á€+‘q\\w±q·µr*{W½—ÂÚ×sIM·9>WÓ‚´–›WÝo	¿oX8¾6Cp7ò{—÷yÀÍ×¢˜Q…V­zØ]€¸a€øe{·)‡8s+|¸w>%‡Ø)t…ƒßˆ·âWW‰>Ø—‰˜I„ÕÚ!8©…‹÷…àuqÀérÃ†eÇxÃ†÷Æ]#‚våˆØ?¸‡t—SÖú¾ ÉŽ)ïŽtu‰¯ÝŠ\0MŽàé6¯x±¸c8¸¨½Ø!ŒvÝŒ¶á‡øÑ}¸Õˆ™#ä'’Ï[“âÜb™Ž·|ìg\$5™AŠÂ]˜ý¹ryQ|™UŒ9ŒÙ–9–y!ˆÙ\$©`i~¸•„G¹X7y{‰ØL„µ-k`ÊÉ¹‡…¹‹”y%Ù	•7/ù•˜{•øÏ}r«–X3˜7šâÖYq„\$sv-t® @;Ãx÷£y6sx~äö:ï^Äøj lV—^0Ö×QMNóI\$ˆ2`ù±@×z\r:y÷‘cë{€2¡€R¤y?ÕÇ+›WÂ±:ôFÿìÆß¨,á¤ú¡Y5¥š¥Ù?dXW”7˜³ùÝ”óù™™ç‡É™ùñš9õX˜79k’g\rp3œ„·õ@Ã9EªI‹YM™Z«|¯öÙž×Ïn7?«¶ë‘ø4€ù®¾ q yu¬×ã­I“‹ _ Â2ÚÝ©÷®:¥‹zé{å¯™¸½«WÑŸ:iŸy§ŸºÃƒ Ç›Z7›”t`W­W£zz™Š¹Ô¹”¹“†˜»ªÅÕŒ7¯Y]³º¹³ú½°ý°Xß¬y· ¹»u;œW}z—xZ›˜›e›i9†¹®ùVuy¯ya¯Ø/´Y­àj»\rv¸Ü6˜G;£¶;g®[kºûo®Ûsž›w»˜É‘Zû¸ÿš›oy&²g:sS#¢\r²|\r²ô\$ü2Q'Ãa/Rç+“V‘ Ç/SWÁÜ5,Òä™òô˜¼>¼B`¿Ã<,GWÀ’;.Ü;,éžü^ëvšÈ@†e\nb•µSz@S',œ=1‹È’Ù.<+ÈRï/2¹0³\r“	/œŸ0|(²{ÈÒo1B<G„æ>dçÅ’ëÃÒÿËŽæœ¿ÀüÃ,òâÄÉÆ|Ù¼žüÞô0óLÌ\0[5rþ—¼•7 ßÎ\\ÛÂÜÄ üù5\\=Î{5|œÑÏ<<¼Tt[œˆµ°GÝ_\0Ï\$}/Cö4˜Ò‹Ó¼ýÓ‚Óý#½EÊ²ÙÔB{ÔWÔ¼Ø\r•–´Õ¶=îdS½.7À¾˜½IÓË#Ô=KË—Ô]Õý=Õ]QÔ½‹Ù==Ö<'ÝwW’FqàÅ9	ÅÇ´³Öüƒ-1/@ð\r¼¡Ó\rÉ¢ÛÝÁ0ËÜ|â]ÕÓýzâ!äyÇt.|ñÔ]„%ýKÙ‡ÖšG€n_ Æ>\\ñèà Åàc3Ñ|D\r`Ê<JþÒ¹ß>áýOØbààžÄÈ{úËÐRÏ'3ÑœÕ7\\gäÞIÊ3Ï³5žO5}ó5~b´>[ßžPààþYÏ¾kÃÞ{çý\r,þu5seèœ[È~Uå¾’ÁþgÐ~_è²ä\$@Æ²þ[è2Î?^¯çûÌ}\"ÀŒ^ÉÛr;5¼ûíÙ6²¹éü¡íœ¬Áó-3A35ÑkÁ Ù*#¹,1ìÒ‡Ürv)’¸ÿ\"©Bâ®ÿ<ñäÓa-’{\$2kî3o(5çÞ¡ñ²;íß#-ž¸²ÿ1'’P_mçY[.•#HÁž[é\\ÓÏß7é~KêsÐƒEô¸Ã× Ïõ½ú!_?/`ß÷Û7_}Ï_eÆrÓø<=1`eYE™¸\\Ñ ÏÌ-œÁ|%«ÁUÏ+œ“êœ1Æ|9å¿·#¼Eü\$—Ä\\PYœTÆ=ÅÞ[Æ<gÆ½çÇ<w^o¤<ñæž›È¿óÈóuÄ|f˜·N9IòO.M³• øäÃ¿íË.PL[™¼Mª9SŽes;Ö_úæ÷7:\0nˆnÓƒÿw©=Eå.€Ãì_zòØ7Õ«yk£€èél?ÕÒo#J+¦Üî×V¼ß\n}Ë©Úó§VúNþu’¯`bãó™¾ÙÚ.ïv\\]òìGW;2\0Ží‚k¾štÈ;@˜©•+µ@híwZ8ùH/ö}³¹Âçè»2ÎèLdØìO:µÝîñ2\"šŸäïgEÀíêpR‚8ð—%qàÉ#xCÂœðñwˆ%r'x³‰ž'§¼ã¯„SÈÏ—Õ¾©çoZü&Ÿ…¸L½ÉæP…ÎÞo()¹õèo°zw\n´=~\0ï®ûæ¡Hã8[BÊ©«|ë×ž©	È^Â¡ìG*ƒØžÈ'À	à+î3{SÙÂD—§·&²îSMÃÝ™g»>¡(¯yLƒÞÒ¾d°¾ùJQ+ÃóRˆý!'>gáé2S¢ß›g	>RòK#å’röÔÙÃÝ(°Á}ØqBú 1>‘¶Ãù0T6ž©	ç¦>õ÷o6…d_d`vì1yöÏ¾tìE†ñWàD.1ñœ—øq‡)¸BÌ\riE|IÀ\$\\% NIùdŒŒaà:Mm%’+Z¤áÎ‘ÔÎ¦L;)Là’M¬!	!öŒ^†ºh^î”áç¿< ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$ce=substr($u,-1);return
str_replace($ce.$ce,$ce,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Xf,$Rc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Xf)){foreach($X
as$Qd=>$W){unset($Xf[$y][$Qd]);if(is_array($W)){$Xf[$y][stripslashes($Qd)]=$W;$Xf[]=&$Xf[$y][stripslashes($Qd)];}else$Xf[$y][stripslashes($Qd)]=($Rc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Oa=false){static$Oh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Oa?array_flip($Oh):$Oh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$fb,$Yd="",$cf="",$kb="",$Zd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($fb?" checked":"").($Zd?" aria-labelledby='$Zd'":"").($cf?' onclick="'.h($cf).'"':'').">";return($Yd!=""||$kb?"<label".($kb?" class='$kb'":"").">$J".h($Yd)."</label>":$J);}function
optionlist($if,$Ig=null,$ni=false){$J="";foreach($if
as$Qd=>$W){$jf=array($Qd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Qd).'">';$jf=$W;}foreach($jf
as$y=>$X)$J.='<option'.($ni||is_string($y)?' value="'.h($y).'"':'').(($ni||is_string($y)?(string)$y:$X)===$Ig?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$if,$Y="",$bf=true,$Zd=""){if($bf)return"<select name='".h($C)."'".(is_string($bf)?' onchange="'.h($bf).'"':"").($Zd?" aria-labelledby='$Zd'":"").">".optionlist($if,$Y)."</select>";$J="";foreach($if
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ka,$if,$Y="",$Jf=""){return($if?"<select$Ka><option value=''>$Jf".optionlist($if,$Y,true)."</select>":"<input$Ka size='10' value='".h($Y)."' placeholder='$Jf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$he,$_i=false,$cf=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($cf)."return !toggle('fieldset-$t');\">$he</a></legend><div id='fieldset-$t'".($_i?"":" class='hidden'").">\n";}function
bold($Wa,$kb=""){return($Wa?" class='active $kb'":($kb?" class='$kb'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Sc=true;if($Sc)echo"{";if($y!=""){echo($Sc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Sc=false;}else{echo"\n}\n";$Sc=true;}}function
ini_bool($Cd){$X=ini_get($Cd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($ui,$N,$V,$G){$_SESSION["pwds"][$ui][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$Dh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Dh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$Ab=(is_object($h)?$h:$g);$J=array();$I=$Ab->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
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
cookie($C,$Y,$ke=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($ke?"; expires=".gmdate("D, d M Y H:i:s",time()+$ke)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($ui,$N,$V,$m=null){global$ec;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ec))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($ui!="server"||$N!=""?urlencode($ui)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ye=null){if($ye!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ye;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$ye,$hg=true,$Cc=true,$Kc=false,$Ch=""){global$g,$n,$b;if($Cc){$dh=microtime(true);$Kc=!$g->query($H);$Ch=format_time($dh);}$ah="";if($H)$ah=$b->messageQuery($H,$Ch);if($Kc){$n=error().$ah;return
false;}if($hg)redirect($A,$ye.$ah);return
true;}function
queries($H){global$g;static$bg=array();static$dh;if(!$dh)$dh=microtime(true);if($H===null)return
array(implode("\n",$bg),format_time($dh));$bg[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$zc='table'){foreach($T
as$R){if(!queries("$H ".$zc($R)))return
false;}return
true;}function
queries_redirect($A,$ye,$hg){list($bg,$Ch)=queries(null);return
query_redirect($bg,$A,$ye,$hg,false,!$hg,$Ch);}function
format_time($dh){return
lang(1,max(0,microtime(true)-$dh));}function
remove_from_uri($xf=""){return
substr(preg_replace("~(?<=[?&])($xf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Kb){return" ".($E==$Kb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Rb=false){$Pc=$_FILES[$y];if(!$Pc)return
null;foreach($Pc
as$y=>$X)$Pc[$y]=(array)$X;$J='';foreach($Pc["error"]as$y=>$n){if($n)return$n;$C=$Pc["name"][$y];$Kh=$Pc["tmp_name"][$y];$Cb=file_get_contents($Rb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Kh":$Kh);if($Rb){$dh=substr($Cb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$dh,$ng))$Cb=iconv("utf-16","utf-8",$Cb);elseif($dh=="\xEF\xBB\xBF")$Cb=substr($Cb,3);$J.=$Cb."\n\n";}else$J.=$Cb;}return$J;}function
upload_error($n){$ve=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($ve?" ".lang(3,$ve):""):lang(4));}function
repeat_pattern($Hf,$ie){return
str_repeat("$Hf{0,65535}",$ie/65535)."$Hf{0,".($ie%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$ie=80,$jh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$ie).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ie).")($)?)",$Q,$B);return
h($B[1]).$jh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Xf,$wd=array()){while(list($y,$X)=each($Xf)){if(!in_array($y,$wd)){if(is_array($X)){foreach($X
as$Qd=>$W)$Xf[$y."[$Qd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Lc=false){$J=table_status($R,$Lc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ka,$o,$Y,$tc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$qe);$J=($tc!==null?"<label><input type='$U'$Ka value='$tc'".((is_array($Y)?in_array($tc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($qe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ka value='".($s+1)."'".($fb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$ai,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$qg=($x=="mssql"&&$o["auto_increment"]);if($qg&&!$_POST["save"])$r=null;$fd=(isset($_GET["select"])||$qg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ka=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($fd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ka,$Y);else{$Sc=0;foreach($fd
as$y=>$X){if($y===""||!$X)break;$Sc++;}$bf=($Sc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Sc > f.selectedIndex) f.selectedIndex = $Sc;\" onkeyup='keyupChange.call(this);'":"");$Ka.=$bf;$nd=(in_array($r,$fd)||isset($fd[$r]));echo(count($fd)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($fd,$r===null||$nd?$r:"")."</select>":nbsp(reset($fd))).'<td>';$Ed=$b->editInput($_GET["edit"],$o,$Ka,$Y);if($Ed!="")echo$Ed;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ka value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ka value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$qe);foreach($qe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($fb?' checked':'')."$bf>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$bf>";elseif(($Ah=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Ah&&$x!="sqlite")$Ka.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ka.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ka>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ka cols='50' rows='12' class='jush-js'>".h(str_replace('\\/','/',json_encode(json_decode($Y),JSON_PRETTY_PRINT))).'</textarea>';else{$xe=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($ai[$o["type"]]?$ai[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$xe+=7;echo"<input".((!$nd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($xe?" data-maxlength='$xe'":"").(preg_match('~char|binary~',$o["type"])&&$xe>20?" size='40'":"")."$Ka>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Pc=get_file("fields-$u");if(!is_string($Pc))return
false;return
q($Pc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$dc;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$dc->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$bd=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$bd){echo"<ul>\n";$bd=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($bd?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($ud,$He=false){global$b;$J=$b->dumpHeaders($ud,$He);$vf=$_POST["output"];if($vf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($ud).".$J".($vf!="file"&&!preg_match('~[^0-9a-z]~',$vf)?".$vf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Qc=@tempnam("","");if(!$Qc)return
false;$J=dirname($Qc);unlink($Qc);}}return$J;}function
password_file($i){$Qc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Qc);if($J||!$i)return$J;$dd=@fopen($Qc,"w");if($dd){chmod($Qc,0660);$J=rand_string();fwrite($dd,$J);fclose($dd);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Bh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Qd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Qd):"")."<td>".select_value($W,$_,$o,$Bh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Zf=is_url($X))$_=(($Zf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($Bh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$Bh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($qc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Hf="$Ia+(\\.$Ia+)*@($cc?\\.)+$cc";return
is_string($qc)&&preg_match("(^$Hf(,\\s*$Hf)*\$)i",$qc);}function
is_url($Q){$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cc?\\.)+$cc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea|json~',$o["type"]);}function
count_rows($R,$Z,$Kd,$id){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Kd&&($x=="sql"||count($id)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$id).")$H":"SELECT COUNT(*)".($Kd?" FROM (SELECT 1$H$jd) x":$H));}function
slow_query($H){global$b,$Lh;$m=$b->database();$Dh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Wd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Lh,'&kill=',$Wd,'\');
}, ',1000*$Dh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Dh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$eg=rand(1,1e6);return($eg^$_SESSION["token"]).":$eg";}function
verify_token(){list($Lh,$eg)=explode(":",$_POST["token"]);return($eg^$_SESSION["token"])==$Lh;}function
lzw_decompress($Sa){$Yb=256;$Ta=8;$mb=array();$sg=0;$tg=0;for($s=0;$s<strlen($Sa);$s++){$sg=($sg<<8)+ord($Sa[$s]);$tg+=8;if($tg>=$Ta){$tg-=$Ta;$mb[]=$sg>>$tg;$sg&=(1<<$tg)-1;$Yb++;if($Yb>>$Ta)$Ta++;}}$Xb=range("\0","\xFF");$J="";foreach($mb
as$s=>$lb){$pc=$Xb[$lb];if(!isset($pc))$pc=$Fi.$Fi[0];$J.=$pc;if($s)$Xb[]=$Fi.$pc[0];$Fi=$pc;}return$J;}function
on_help($wb,$Tg=0){return" onmouseover='helpMouseover(this, event, ".h($wb).", $Tg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$ii){global$b,$x,$Lh,$n;$oh=$b->tableName(table_status1($a,true));page_header(($ii?lang(10):lang(11)),$n,array("select"=>array($a,$oh)),$oh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Sb=$_GET["set"][bracket_escape($C)];if($Sb===null){$Sb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Sb,$ng))$Sb=$ng[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$ii&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Sb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($ii&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ii?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($ii?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Lh,'">
</form>
';}global$b,$g,$ec,$mc,$wc,$n,$fd,$kd,$ba,$Dd,$x,$ca,$be,$af,$If,$gh,$od,$Lh,$Qh,$ai,$hi,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Rc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$be=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Re=null){if(is_string($u)){$Lf=array_search($u,get_translations("en"));if($Lf!==false)$u=$Lf;}global$ca,$Qh;$Ph=($Qh[$u]?$Qh[$u]:$u);if(is_array($Ph)){$Lf=($Re==1?0:($ca=='cs'||$ca=='sk'?($Re&&$Re<5?1:2):($ca=='fr'?(!$Re?0:1):($ca=='pl'?($Re%10>1&&$Re%10<5&&$Re/10%10!=1?1:2):($ca=='sl'?($Re%100==1?0:($Re%100==2?1:($Re%100==3||$Re%100==4?2:3))):($ca=='lt'?($Re%10==1&&$Re%100!=11?0:($Re%10>1&&$Re/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Re%10==1&&$Re%100!=11?0:($Re%10>1&&$Re%10<5&&$Re/10%10!=1?1:2)):1)))))));$Ph=$Ph[$Lf];}$Ea=func_get_args();array_shift($Ea);$ad=str_replace("%d","%s",$Ph);if($ad!=$Ph)$Ea[0]=format_number($Re);return
vsprintf($ad,$Ea);}function
switch_lang(){global$ca,$be;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$be,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($be[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($be[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$qe,PREG_SET_ORDER);foreach($qe
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$ag){if(isset($be[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($be[$y])){$ca=$y;break;}}}$Qh=$_SESSION["translations"];if($_SESSION["translations_version"]!=2027485219){$Qh=array();$_SESSION["translations_version"]=2027485219;}function
get_translations($ae){switch($ae){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´Œç>•û.y8RmÒóûè\"3ˆz¶#kN!-cä²‰Ã(è;¬ãX#Œ£|ø,¢bzöµÊ¢°µó9>£’):Ž¸çC \0.#®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FàPx‘Ì„C@è:˜t…ã¼¤\$jÖ¿Ë8ÎÇ²ãÅŽo(Ü„MäÊŽ’@¾‹7£XD	+/6à^0‡Éú}|®À¦(ÃLëHä£šÍ®-Dú; ï€ëE!-8‚63£@ÉŒ£¸KÓ-\n,ÓÁ´‚ñ©Ä<³ MRUlëè!ãb_\nÃOZ\r³¢ò Ž¬Âö1 5ô^2ŒÃëLSc\rlÓŠtEÃ¨ÝELO ‚3ŒèÎÎLQ1\0Sz<ŽïÔ,ëÈÈ¤Œqêîù9ikl*8±üz3»ôý°×Ú–XÙQ'˜ÆÞµ @×W°ÌüÇ›MOÓµŠÆx¥Cƒ<Ø! 0\nr,#^ÎcÆ9’ºŒ“(ýN#…Ú£Æd¿ãù;‚4ø¼déŠy&<¾¢ö114îÃ0Ù+¥¨Î‚¯\" ÞGcpò¯”â9Žc5—ÆÎ\0XËÁi¾µ·ãr~ÊÃu‚Ñ:¶±sëˆ@Ç¯ì;³mÛ 0í›e_¸îl2ö;YÃJB!ŠbŒËã\\z‹|ï C2Î˜pk^£jˆ>¼¤ï£bP*1cpÖŸsÔÕÜ„É¸¯Û;\\ò]ôÔ†ÅHÒB7¨è£bùNÓÅ°LOXà4 #&ÎŽŒ±žÉí\\ Ü”%Pý48EQbB§ùþ1ßÈ¶D‘%I’t¡)ò§o+ŽRÌÏ.Ln,Á1L“4Ðš“c®MìÅ9£ÐèòSÉ@	ñ?9H\\±¿)§ä95˜òÓ	¯tÁÁ›”Ò\\TU´\"ŠŒ2ƒþ#\0-çÓ.x Ü& €(€ zÏ/€€\0RHˆ	\"q„˜Ñ‡ãMkÑ€Á¥gbTK	q0nA´þ©¨\\³‰œ3\$§ 2âž¼I©5sUê‚Ö±#)=èˆB]É	K)¥õÍ™ò|@C‰³„˜Á“lîÓœmÁŒƒ¾h•um]X˜hÂ˜T]Ì\"j¤ÌñFeµMFvC!¡„\nwd”ç%Á‹¹[4”4–oLÉ\$ŠF†w2Â‰¹2dŒ#Hn€Íùb]°H’GÒˆ’ÂÔ,á”´¶ç,‡€Q®&Rðœ¨P*P5\0D¡0\"ÍÖ>­U¹Ã( ( ©Öƒ²'F‹í~„òÆ¶TødŽ'”†óTG'éª(áÝI`Û?<Giä…Ÿ#2PŒI–1f¨þ£Ù&`àäbD-E²†~®ÙÔšF,d(6øÐØ\n\nÈ*&*3è{Ìâ!„ùÃ tž¡yƒ¡œ4CHmÜ(-RBué½C’Ñð¤®Ui4Í‹\0\n†Š—“¥v…ƒƒs£j\$Î¢à‰FÐnq”-‘±ÐÂ÷	hq¤ì©Å<ƒJUMQÖÞÒ >Å®»Ÿ ¦AC’ñ®h)41¢ý>I´Ë™ ‚g×2Ð·õˆm¤Ê¢@ Ž‘â>iîºo¬²^B3Ÿ3€()5D®})6ý”3—ªÎÔ\r‡›P „0#É~®\$ù¥œ2™Wm¡ÈÁÉÖÝnPY\$ ¼\\£aq!0ffÚJz‰nd„'„¶Î«î™\"iµr1\0›¬_šÝÙwl]Û¿tŒ%¼¼j*Öbì½MÌ”*û‘zkÅë«·´%‚ë£n.½»=wkÝÒë€jÒJÅ6éŸBˆNä²EØ\\a’?~méwbP¡Ìc‚ˆÀPW¡‹Ÿirž­\"Ö\$…Ôá[q~¸ª8Âc€Ùzn!g>!\r–rÊÎ²\$.Åà˜–Ð’gI‹'ÔU·.ó“F²ya1G^Ñb8£2ÆPYK.¶ã€_ªë«4Yo)†Z,(Áù„¶\rQæÌÊLTÍ®„ã2eFHsž{1Ó¼°\$®±ÖJË)µŽ=\"’þ^j«ÑÆÆ¨—Í'¤ Ôò¥K;F—ºúO¨™ÏË;<ç=<SÁ¹?3[ÖÜ\n¹ò;à¤·hJ!Gó¶~Î¾Œç=nõ³înmÄykê=°2æ~cR3±°h¶¤/Ôi Öms°¨¾¼ÎF‘¡\$M“¶6^i5wkí*ù˜üX´–šm		­ï¹ê@0ß<Òm*ÁJû—w“-âÛ÷ò×“9Úbæ~üÛ:ô¡Ø Ï3ƒ+[ÝÙãið^Ä8–ß¢Û‡jXâjÐ%„AÌ.tjäö Jn¡…ä	‰ i'&Ë!ùlîr ÁòšM[m®øã•¿îG4•½¼7Éi­xfÅà_(=ho†ð~c8ƒLü‘v>ëN‹¶5¼•W;Â¶–èëÊC‰ë¾J«dãR@†Akå×if–«”ö¾¶ûœìžáwNÇ3zSA—ºZæEá 65AEä\"šÎórB|ƒ«%æ™“27^úÝ½Û³wòñÈì4kÏï¾'à	G‚\$‹Y£TdCzñŠWÃ3¶Äµô¯µ ^ÃÙ{I,Knæ+@2ÛžÂ¼îÔø¦Ïãú~Úˆ~7ô]óÀîyôipúÿ2Áj¯Cç3ŽzW]ÿçú¯‡î¾«\n–>ÊüÃ aöúz•Õÿ5ó»‡ÕT'ÂÊX~ÞdOø²H\n‚Z4ëRñ ª8/ÜÛJ5/äîÏFÎpþîìõ\0	®<\\ô£ˆBiL6Hð‡*4å^÷‡Pá@Ö\$Â.„¬ÆÀ¢CLÎðRßÌæÉ¶¹ÆØ#\"â- —PpÊÀÞËÊUåN\r­A-GPj>\0Øi\r Æ\rnx\$m#°OÀÒÆ¶/Ò'l„&Ú›\0¨ÀZœZð°>Kú¾ÔÍª,%¨e‹À¾,¶¢±ƒHF'0hŠ¸ç®ª4à›µ Øšƒè6¢óÂœ.âš³p¤3\n.ð´…ãA\n¢P££â¢¨‚@71<n	–åå]%j B!0Î‚ç­DÛ\$Zí˜ÍJ]Ìî ãÐ*©Í”×ŠãQjåMtýñi±„Û\rx@ª­Z˜\nÜ¥çª°*zérª†hÐÐ:¢\0@	‰è\\­N·¦N. @Â4ëJºŠV½b^›éîJÂvSâØ1âcÁ\n0B| ±ÏX@*\nÈZæ‘H¢1þœàà,¥¢û\n^dfêÀ‚)¢ÔµC/\0«œ ZGbLáHè*L\"Ò0\rÊ-#`\\";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœô§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6»c(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈH=ËsºŒ2NAª¥D–êÅÔ\n	r\\ÓìeE]\r¥Lij«&î²\$‹[2B€Ý¯ÚZ¬Æ’ÄQ?ió®A_Å–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅÊÊã'	j>\\¦—²lU­HóÒE*èŒõ\\¹¬‘>ÈfÁdöAx©oÍˆAk”¸MÊóB6T6WŽJ9Œv\$ÂDIÍ¼&-HqZš8Ï0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼ÌŠaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl<’;Î¿±tâÈo“µÓ<ê7l0†òVå…Fƒè6LóA^´£xÌ3\r•K\nü+WÓ©MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎíŽach9{£Î0»aêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèDl„†£tÖ›[ê1z…Â“•ô\\*ƒ„hu;˜Òú[ ƒ×4KÙ†eZ÷•¹ÜSªäûƒ¹Vá‘U&¥Tº™)‹2+“tvÃ:ÐZE=Ö—±BX	AJ`Fqå—1.d§Bôô)(*1“0šC™»F¦80î«VÈeÀ4©`Éb8hRÊaM)Å<¨¤TÏéU*Å\\¬”zVªÝ\\‚õvpUòÀK6,EŒ²RÌYÑIi”À@µƒBØ[Rœ0†³J¸MJª{a¹g.2êD©)?kèÆ¥¤K”!(\\þ! +àQU\$¨e•¶*çÈr3]†¤4\$ÏÙƒ!®Ú•i˜V˜¡õ)îmÜ®ˆØ£¦L ŒA“aRLÙ 0Ð¼­±âuäÈ:„¡”RŽ|ŽZSQÐFe¤ É<º‹ËP™„’4Lø ¥lšvX·rÙ7¦ü)`âÌcˆ ÁÈ7†Øwe¤s7ªÄ7Ò·\r¡¾6aÁùYàCXÊ†ƒ±`(ð¦Yoë•ÛcAšc^Åí)±¢ˆA	³=šôæmM2sêJwjN…:·£6Ö£–hÈÐºiïB€H\nvˆ¶Ü÷–XoTÀJ ÒÁo¤F¸ÒšÕ(‚ P®”eû,¥ZË%…#¤¤mUEV{N:*¢¶2¢ßÒ2ƒ^L„Š€Âp \n¡@\"¨lý¡&[N˜a2ƒbS:Ø&7vC¦êp:]ÙVFmYŽP¶(¥ÛY¤T]ˆ:Ro42’á‰®Q¹‡à”¤V|“´@÷ ÎG=íÌëó‰¨&2l,	}ÊgHÉt]åØ…Ü:òoWj®·åÔî\\Yå2¢ì§;·]Åßvi°9æ½~ÝÅ-ÔÎ“efIq=è;J`uXX,_qÄˆ#Ç‚‘š<¦ÁËËÔKÒPsÂ¯dFNq3¿uM‡4Õêw›AL4‡¦dé(pŒÈ)†S^ÍØdn„ˆ”97z-çK…ÆøäY~=«dÖ†PîMà¶ÇåCÛqH‘îø`3˜üÓmÝK«C]¢®\rÃƒä´”™’keIÅ—d§Q©¸\$»ZíÂ'w‚hYŽM2öÊM’&XáÝ0¬F¥ŸL \\ž«5¿íª™ˆ*¡üs®µÆßÄÊa“:`´ÁP „0(úª\r&Êº)cLè¹·-ÏšP#” µ‰¤ ç ~›j`\0€‚eO{‰·Eí1—´NJOx°ƒ[=‚—‚û¶›˜ŸJ\rí–mÓ¡AæL¼²:È3:M¤,Ÿ-½uHø°„»väˆ«¸¶rc( ¥°Ô’B!y5À&]¿Á÷\nÚ3Otðö!/à )p*†YI¹Ã”)“ìíÊÉTCUZðŸÃU%7 ë¡.˜„ÁËI|¦C8kž¥ôØ`ìíÐ%<!Ý¡¤`¡’šà@ê;blÎFÀ« ŽôQœ¡p@„\rÝ›)×ÝR†ä‘¶G.L÷·<ÕŠ£‡ÛRô!¹ðÁ‰'ŒûÇ¸#öÖ»Î'ÒäOL®Žÿ…zA}Õ€»	àÓxPEP?«/ßÌœæÚù¬tá‰²ó?×(ëÛfÛŸKilÉÈ4Åo^îÓì‡×U÷F€í‰ê»(‡Òú4§ïx¯oGÿ6ø’VQNfÍÖÙ±@@\n-Û(×énçâïK{¿÷Û\0ÞûË4¹!KÍõ?!’>¬‹˜»…Ê÷!Oæ;/Ú¾®jûÝÿä\\%ÒþNfîÿ_¼ø+Î'ënÉïÞq2pÐòþï£ù\$š#l‚ƒiŒüG:B1!}ÍÔ]\rÚÃnÄMMâ.L*ìNºë(LƒŽÏÐRìmvïïo†C/P†<²Ð`òðuðU¬þÔ^Ož¹¢þdÔÎ)–@Læ1¤#âúÈçfB^ƒÃN8áfk\$P}Â«	ð¢‹ã\nŽv †—øø©–àÍ›·	lêGo¸p\n¬¶è(`¯Î!pœIÒÃB÷PÀbiÀ»nuÐRF0‚Ðeò°fÕîÀÎ¬îP,òÑfúù¤'NøøeÜ\\Îõ-¡m\0«õ‹eÈ©p.Ì0NL°ZÊ„pcï&.N®ë1@uÐ.±Zyñ`ê‚&ÆáñgÆ\"nºu‹’ŠæÀM&n£_cÝb‚Š®ÁO¯\0.ì¡¶ÔA\rï\$]2:ñ·QCâƒâQº:ƒÞQº/§L2QcÐÇ0H¿1m±Þõ#\"ºðÉœ^ñªÉ‘®‹R\r‘jÕ¥ÐD‹©!-%!’Þo„:r%‘ç\"	\"ñï\0	O‘!0CO\$1ÚºRJ%Qñ!O%R<ñj!_ò]\rKÒEBƒ&ä?\"­&RW\0òxb¤0GÇ¼qzðQ¬šäXçÒhÍko)¤¿'1È?ò¤!ˆJý‚ªb±ÌË ßNc‘Œ>köÌåqãotÙ¯®1†6¸q¦á©àÂD\nÚî¦pÆzbñ.-,Â'-22#ÿh>)2è@†€ä\r€V¥ÀÒ`Ör®†Zeæb•`Ú[\0ÒÇº\\\"fÊø”àê¤ Ä•êÞ\n ¨ÀZ\0@V(‚¢c¸ñP(Á‚üÝ-Ükâ:b\$nÄ¾*ÊóÇd	³=4Àm¦F]¯ðÏÚ{Ã Ò@@R*WcÕK¤ŠëÐäØ÷ãù\"‚Š%)ÜF¨D £ì	Šå6ƒ»=Jç3­|7#‚DË8a/ÐiN[ Br»'ù/(Ç/,â«’©¯4(îcÂt\n0O%ð?ñÖòÀ¨8C^6cD4€A5*X\ràà€ÒU}Ã¨¨ÔºP”(%È+lÄaÆ†Ù”óënô\" &‹ycjælBŸF±cìÐ˜’¬2	Ü]B^îÇ7`\nÀÂ`ê Ú_Âl÷‚J	nD£Ž&Æ¶Òã¥HGg?«¡@’Æ(Ëæ¿Ëêý¯À„L8¹ôºÒìÄk!Œ_JÑ\0Nr¶h¦ê°?‘fF€	\0t	 š@¦\n`";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß9‰{/¢­Ê^ä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi4=æ„Î›¹-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKí\r%4!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÙpÂ2\r£HÜ2ŽApÞ9áxÊ7ZÃÀékŽcHßlA\0è0Úƒ(é_ãØ0ÃXD	#hà6£m®:xÂpA{ƒ@Þ2\\Cx@:Žc(@)Š\"`Óm®4›’˜²Ð£€²«ÒSS”4«¤Oè;*“étøá¬¤®¡ïÎI“7m.R²G´»ËC\r¼Y-Šú±>ÅÄ1‚RëJ&„º#U£+hù5+Éä¬Õ¦†Ÿ>GQê’Ú)¬:“0ŸIò+W5ª5¤ª€5J„§/q¤´–UŽ›/.ºu­7‰Ô[S‚¹0h[ø——aÂ)zM¸0ùEF¤ŠÆôÐ0H“J¤pížþ€Ã­®óµÇpVä–\"ú•#í‹óíeÀ¤q³rÁÉ©º¿ä¼:š•'ÄzïG.ô[š<O\$óÇ V&!±ƒˆ”¿Lš½ŠBûò>ëAv_Næ9VS¥ÂøÍJ”ð´–`^eh‰UyüÑ¦íœ;/oØÇ{U,}ö¸Ÿ¶ŠøSJ¤;Ê’›sº†ŠZ&!L¡g`– [B~(]ú>7†iÞ+g<ä}ðbÆ•2‡mñý%§~õ`°\n\rÐ953¢ÜNù›(=!Òâ„\n›£8ïm×”Ätï\r1Ú3Ä¬œ’7|IŠ©(Gd4äŸ2(}Ÿ	\r0PèZ\"2½Š\n,n‡íÞ³ãŽ¿Z!bEÄ­‚àù”³Ôe­Ž •è†^b2‰/’&=“juUSU‘Z&©ˆ²—âÙ0‹±¬ZF…é#‰éD¬ CÊ©‘>Gý˜ÒúóK¨Ž&€¸†±\"JoÚ~;ñ@™s(ûÉ€'êP„¾„žˆDyP‰† í'n…ä{Ø8\r´¶6BI\n±˜(P4.ÀÖÁ\0fZln†àÎ\nÌYËA†5¾·C\"Ð\nÝ\\«µz‹rï‹|0‡Eœ×Êû.\$& )bVåêRQDÆ¹ˆR‹ÅN@)B)-IQqOPÐÂÈI‰›Ü†“é#ø/#aóT+2rn+¥x¯–ÂX‹du•4–zÑZkUk­•¶–êßë…q®UÎ—Jë]«¼hC….UOÂ,+ñiDé\"´€DøG±‰?£ò-I4Í³*&ÉaÇn;±HúËû„<0,Òš£»Õz6åNœ•zžHÏF¦Z`£—\$KÛù! o9ˆLlÝ*	ÝàE  …kB2MK#³HAn%æxšnœè:¢FG›8—ú–o\ne»âc!ä.%ý”—žîÏñ\r,À\\·E=(ŠåJ8ÎÚ`¹)84\n2'Ÿ&\r³XùRtQû\\7±‹Ã[)j<¨ g”ðª( uŽã¿:JX[Í\nA5#ÁÐNR-3S.}›‹Ÿ<Æ\rJb ¢¢Y\$+’œ¬F¨\n\\Bˆ…ÛrBTN{>‹ExÕ>â¸Êo¥ID—2Þ}(‹lÈ0r´—Ufšñè¬¸˜T ‡ÎJwÁ‚õ¡:¬MRñßˆx8°°¶YË¡k&‡ê„`©`HeC+±¥A\0çŒ­ûFoÞ½(ò ÄN65|¼ãfŽR£‡‘BS²zœÎcF1”ªT—½jkOŸóÎ!ç&ƒ? Ÿ_õ:jÅ?×¬ ž­y¦,j|OIóû“9Ø'\n§AsŠï¤!¾/°ñ÷\$ÃPýJÎ3*™òŸC\r\0hÂ!zç¿Œ¬Hl™«T}Q>(kÈú¡b¸…à¡jåŠ«ÃªYXª¼»¦2»w•úª=<á ¦s‚Ú³JáÆ7”‰pâéÞÝ5(k§kå€¥y ¹íœ40©¯‘*ÓÔ‹ÝñþKöd\\’±ukýnÕ´ã:ãy#6»*‹7¶™n#ù´ì³»¢ðšuQÉ!Oºâ¢ñ¯åÍzD)øpšÏv\$ÊÔÚÕ›q{£B«Ñå‚G%sÀ^á%ä@Èü[ù\"ÊÌô„¼¬°Ùn\rï·óÐÜ;Fdç¼¨ó[šÂ¼“T¶ÔÖèPÈÐØ’½Ö¤ì³“i}9Û_Œ„E2PÐqä\$Î’.ˆ™¯æsçoÛ*tZqTÝL},¦ö\\“¡Ð]R•íj	4:q fQ3{©2-po79þé]ò±×å\0˜±ßê“ù.T“BB T!\$\0âV€i³!r0 ÜÃ¡¡À8-5¶(Ü%R)]›£UškI\0¼44j~ZC8ÏG‰“<æ+\n\$¼Îèœ•”Gæ½ñºø¬ì»½/—•ÇÕIÿXp=t†ôn±\$*?fX=µÊ9•¥Q¼ëòBò=Ù÷¤·ßÃ÷nQ<Ô\0ôþ¥•ýB¿ð	äfû7CíÞ|W.GÞ”6‹þ¯[·ˆø›%åŠ»3E,–6z_Éný5èsN- -OöÃîâ§î™\0Ôød5'>­á|.!</öÇ¥Ù%Q¤tÅ„-mÔÕ/|ûï¬îOþÅ%>n;éNŠ\n¬§~êNE-f½CL¸…GbN7­8#áJf´ËbºíNZÄ\r…! ë&4dîx;m¢Mlˆ,mŠ€+ú¶¯Té¢&.0¢&²ž\no\nÎ’ l­ù¢§­@ˆ7mv+#j.-ìfÇŽ÷kUëdÔŽ\rÈÊãÐä¼l%â®×Æ°­êÞ=0øßq\nìÇb*.Tü(CŠƒ&nƒb’¸Åm†¿\0#0†˜ˆLªJÆRç‚@£bb®T–rcRTQR„L¿K~lSæ;fÞR„š|¤ úFÀCÆtÍEJ|ýíP7F¨ÎSì jâ¾Ë‚Ì\n¤õ„îÍa`1\"oí4€¼ÓÐêŽpï‚fÔÏv.1¶ºº|k/\n±ÚÏæk&Ê|qT\r*€1½^I1’\nÏðèîBÓñ¹1Ñæc®#ñÙŒÑ±È=	ÖýQÁ‘iÈ ò\$ì½!qÃ ¯ÀâM†¹bp3Íá’*¹2HÃ23E?\"F2¯^ôOïbfö‚ºöèÎT2S1ž¯r[ ’^ì¢¡&o>T„¨ø¢¸øïkMPØn|¼îò<ç®Á!äzÈ,çïù#²É±‹\$1ç*¬Èr©p'qâQËŸ¬¦kî^CÔìŒT³#†«Í\\4ïÎ–fäuc@slŸF¨Df<«£|Ã„H­C?‡`Ë&¡\r8×ÇnªæAldÆ¤ˆ7†Í-kARžÈ2¥®„5.@Ôjá2Â`æ§ÐÉîç#¶Î³ SÑ Ê\nlã#dTr« ’ÂGIn2ópub¹7n«!Ðõ7î98Q¿\nÒÓ\"ñø†Ía9Ïüý/8(v‚nÒ·è‰8’-Oía;0\r?7°\"'<Iy<’,î×<ÄæÇÕ/ŽÐÇo:.á:q<Ft&bj²‡PjÃ¦#rr0pUÄb§ê\$‰»#¶R	‚ÊÍ†ìce&2Ï'³»r,fM(gJìÒ+çÎ‡ñ+MB´A\"“™S-t8{“ZäãŠ‡Â£úP3ãF&fTl›CÔ,ÊÝsô’„žpE\rƒ:MfeTzì”>*ZÚãD\"¶ì&%A“rJƒ L:0U³‹;ÑÊê°ut´QGvê\$%+Ò+9³Ý#&#H¼ÿ	QK‡MsuDTaDŠÏBsä¿ôyNLóLë9K®ÃI3óInæê4æu”·Ô‚QÆSˆèÒ¯8è\\?S—4ÜcQDÎMGpÖj“ð‚§„Çm:î†%ã<§óCñCOnqÄ'U©e=“xØ³}VŽˆ+µ]8rÑE”ßtr}5ujèÕJÖUNáë3U•”UºssêÄ3îomË”Ð°õqL5d}ôâKk4îÉaSrOq!UÃ[-ÎL¹*µ:'?Po®ìT}D\rÖ´Â\ndMÞ@°\"ŸñÄ7³I¢ÿ\\ÑÂ½¢øwÒu`´:ØÔµQ…GƒŒsHÔáp.&Ÿ-Ð’…/²r¤&¤`Ð–,wÇ¬û4¸Ï¦ƒa-'’+OÄh–S,0©br–M‘)Ö2@†…€Øbú:bbÐxÙQ9Näþ+jƒ/cŠ¨µrúÄXHRƒ\n¸Rê¾ÆD\0ª\n€Œ p“Ic¬’¼a&µpÆ¨Æèžo6c(õ5-BåMm,p|vv\$D èâœµÐ_\0®™æ=YXÔ¶£q<O†´´n?ð=\$PB„V\0Eq´lÅÂŠ5sXÇüÓÖ¢Q•ž¯¨6‚ñ7'\$UÄí Ö>7V´0—-žHím #&”2Å”¦ë‘ä'nÕ\nìn4©tÕãnŸ°ÓqÜV\$š­öïx÷|¿w–ù¨¯c§M±z³Q\"r°‘w{{—{Èê%¨žÍD/^×{pæ”{:ÌV”!'.eQïh·ß\$XQÜQHJßp¥1µv§É¡¡€P¹Ñ”äVüåN/l6úf-•J29MâË‚HSÊ%}†þÍ·Ñë‘„„±ÆW„ÓâÙâè)<Áé6Ä#xhQ\$òÉyÌÿIfyC\$Ðêb­,Öí…Zp‡\$ñÐ‰J÷OLÌõP¶„Kî/e:ÿ°ˆTSËÞŠU¦#ã€";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊSÁ°³“TŒJzÜDÉ‹d†¾6­ò[Àí\$ßK’+¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWFóò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’2xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Æƒ(ä\rãÎŒ£v8<?Cpæ4øðDùŒ8ÐÊ:`¢ü0ÃXD	#hà÷\r¸èèã|¸¾YËø7Œ›ê9¼‚˜¢&\r/Ô	aÞõaHl+r¼\"í¥!‘j}äSãF4‘|°Œ5lÞâ/”_BúâŸ9-ÍÍ‘DYpýÀâíÉ-i\"«ÚÕWdAwÍWf°È\"7¢ÃŽ-l„¼eVíYÛÊ—3%`nuU'·³z=Ôw®­\\ÇLÞëÑSÂ×ìl*¯Yˆ˜Â:ƒ @;#`ê2ïú¢¦¶k7¤¨âÀó¬ÍËüÇAF/üDØV\nñ Ã(ÝñJö¿I|{¸µ­£Lü©„ÉÕ§e2…ö8¥Åê@}¶Vé70ª¤€2\$E›ÄÁD4Oáê,„\\ŠÎ@Fw±” #ÈÃ0F-,¦âb¾Uú§â\0Ñ›4N²ŽSÔBD\n=LºŽ*ìt…¸¸ Vô)›cü;.™@,‡¬ôÐBÈHEÑ¼²jÜŽ\no&°Ù8—ü†;[}DÉu–Ã9\\B#XÔGX)’Ëw6êø·?%°LÁaj©Ä§¦ˆF²ãÿR.uF7cyŸüIM1ÄÓ‹Òd4M1äu‘Üš%^Žä9\0£ºwÙIä\rá˜3Æ*Ó×à¦%‚™l	ðyç\r¬À<‚\0êÈƒ¨cgÄ9†gp`oèÐ9‚Ãæ¤èaá…	jäA\rÁÔý€æ\nZy[t‘S‚\0†ÂFS¯„Ö–â SK4j Ä­Æ§èp^\n/\nHÉ9*Ú‘#Mï-÷¿uvä¹áf'È31™<ÈÑ¨ ,MŠ‡)\\Ù+#ŒX/öÀØ)rfa‘’Ÿ”hÙã>iæ·'Rð­QÉ4º¢DÔ`·(*åFb÷+ˆ“jôD—Šf¿3›‰J3<§ÐÂÏÐr=¼9‡v2ÑC(x¥@]?X\0h`Lƒ0†ÃsbRé‹1†4Çõ9d,’‚öN€S,L¸63dÍ³8gT%Ÿ§v„#F—!„5žFšz´›\rÌê…›w”«PÁ…|,¨Æx¯éJl¤.6Œ%ód Î“bŒÅýr•C›o\$ï¬é‚\0 …x‘dTÏ\\æ±æ\0 S5Ñé\\¨µ|?µºbÍŒX¥Q¾¬µÇ\n¤êPs®¥@XQš+	+RggÉ±ÕŒS;5VP*¡€Qa:;Ÿ¦œJ{äyQÓ4¼¶tšì>åÀóf’«+)Ýv»\"ìˆmÚ¥sl§’>Nð ¥¢žgtÒsE?‡ø0 âïé€ ÁÈ7†Ùå=+2?Œt9RÒ™ý>AÂYVž¨’‰@q° ^Y`žÂ¡…DªÞë\nb,!uHLŒ“aJPÍá ‘«´.R‹:Èkëš†Ù1 \ruÆº&ûŽì‡Â¬ÂO3pÞÄ\0A¤3‚”0Qí<‡±€`©fYƒE\r,ÙŒ»ªß‚ði bÇ‹—gÿJtP	X°ÌÒ\$t1Ó‚’gu(É- ^\\(‹KC¦˜>WÔáÙ ÑV­#Š°VE¸6ërÉ\ne¾Øâ<€€.—@œG”¨ñaI¯J7µ7kÑlÓ¥tÂº1`ßàÙC»iÁ{k-|è‘ÉO˜G¨éhLg’‹xÅnT¼G…² öZj‰Ñn9tùD¯)	QFAú6)¨­ÞQÖÇhÂ­UŒxgâåÓ¶l[!ÄSê¥ž¼‹»ÌÒ•†ü‰Q95*&çD#tñƒñlðiü˜äš®Nö^ÌÜˆÏcTe£œZGOhC®\rª(älù'Â1±WnÛsw’”ø®f”šŒÎk>&ìŠ“–tm#ŸígÜŒCHzx‡	xð˜e=ÁŒýGž”vÔÑÛ±,SL#915„5~·ÐRêb]ïA­öPïÂÖ@‰×¯TEõËÌàºó·¤m«ztàom¶­r#Œð´/£x_m[ì}P™Ý±ØåŒ’Vªñ¯ý®óó”Ôlò÷qM\$Rú!÷”O¼nä±Ðy)óyÊ™„££ctâ°Ü)ÿúò0R¹ïxs*ÏLâˆšýÏsÜ»ü¼êÕ²u·æõŽ;¸ …@¨BH‹“ã–Xå\r÷üûÛØÚ}‰ƒÍs?GÊ¶Do’{k®K€^YÕÒÂýÈ9.Q[WsüJI=~^ô†BlIÊ6í´âOìWCtzgàZ‡¸NLƒÜý‚š(,äM*ùnîœ.øpPÜA\0Ïä€°ß0ploéÍKb÷04†G‡ï:}«<uK*ËÒÉ\"\$jg(1Œ¾‚°iÏÉ–,äO¨žÿãˆÖÐ\"(ïêËÈ)¯Æÿ¨âîç0:°ˆ'­¦×pXop•˜ \r´ðÂˆñ&P i†(wLâBxç(Pé©\06|%Ño\r/BÂ¸íÒ„…v¼¨EKnœî¸@¥Ì0°J[†¢-Éš)ën6ãrþé«‡\"T.LìqÈÞk%Œ-„`pböÐ¼âÜJÎUí µ†ÌÏç2k|-è5O“§*;Æ-ÆÊ/Fø«¬äÏhYbðmÜ@¢jo»6mñÁLp¤×¨x¥M°p.¢Û‘Rˆ°;	­ÆUå…Gq\rè0æÐƒnµÐ`°KÍÄ»ëbö1Äpñªp/‚Úë¢óïŽô\$ÑÛ1àípä¡ív3Q·‘» ÉÐç.Ø¸‘\0%»ª7ÑPiÌö&ðÞìƒr)	 2 pêã:Óï|MäšY\rXÑGŽ¸¤âÛÊŠ®,þpEH¤Ž:8£&öj'&‘&ÁLÔîö½\$ÖY”ÓptÒn¶V1îçè‚î®ã)ás\"&ø;2?òCò¢×AÇf5hM%€\0PÉ²:0­FKàRx%¼ÝîÞ%Ýî Joêr2.Üàå%2[f§¬ŒÒè”B²³!r÷.XŽíäp:ŽQ×ÓSÙ’ü-ò­¨‹22+ ¸×ƒ\nˆgë.’êR2J9Ò4µ'qý#E0³PÜU+sVqE5Ó3Ñ6M¾Ü3U-åËÇ(ðÎo9\$=s/ñ,îäO‹N¼ðHÚe…s'(CM%„/9©5-\0¢ârR9Ã¯,Ð­:PFzŒ,“;6Ó„,å6òr<+òë ä«’õ2‡>°^_P3(£\"s}9S‚Psè±ÇÀŽS`‰?²D×ˆÄ±…T7!S²j¼\r;å.Ë-¬TÞ5!T!ÏHP\rèåDÄ‰ê@ÚT6»¥mCÓ	:1ÚåTC<òºÎàŽDÑC@\nCRá¨ODm\r/ŒØ‚ˆ³…MTRY0æ7+\nOBAO@2<s´c)—!æï&ˆ®‡m€ç\r,±ó6‡ÂÕnÐZów@³zŽsù<t&‹4Ý?KJK<S=5tì’“1ô#N“?OæÓ1Ð…®÷‹÷óHœóMOsãÓ„-Ïzt%#MïÓ“+U(Pu-Q¤ÞµÔHs!<5'A+cT.3QÔ“y3oEQ•[TuQ5g(kÆHaƒŠÆÅ†íðz‘j{Ñ!WÂñX°µ3hÈšÍ\\óÄŒä)ˆéW’„yrRôåtù>E[a;Õ_Ô\rNRóP“W\\SŒpUK@UÑ[õ>¶4†y&ÅuÍN5ò°\0~¢Y\\Åp¹5Ë\"UõW5ë&ç—]óïNU_­ó_è˜XV[–TðÐ€³,¯&Ä…BÜsí¼jü».;í!%S!“„¼Gdm=Vïñ@ëÍY¥UM„t\$£f]SR±f„Åesd6^¼¶{`²¯\\õ÷g)ÅgvfSÒ»UùcÂ[Qñ³.óO7ók^t¹DÖ ¾5ãkU\\cjˆ`‡Æ½({öÍDõB¤óV4å•¡d³òåVQ[ÕSe’1O8ù‘3QÙS³³3ïø‡6ÿn¶/Ptû8WŠì‡'Uñ`Õec-¤~1pán_rÑµYH¨ÈPÅ°I¶ë[v¯o-½AùUnüøöërv“`ñûov†ø·KIWh%3çß%—ó¹[&¼».öWGqd™ã9³¨zŠ0SÕFÁs:q )O	&7y]Ké	÷b 6áqzr©zÏc{]l7YvèÎæ´Ì*+–+âÂMa<´5XRI}mn)q{ñääQèØ	=¤=ó¯vÐÆ`è@Øl,\r Æ\r`@d¬²wgzwêÔ\r¦ˆ\r Ì“¦š. ŒÌIr¬JÜ\rÀ@\n ¨ÀZ\0@c©ð¿dj.·û\\sÐ!³¡|¢-ÈÀ6iUQ}pU{ØmPE‡\"¾s­‡‹ÏB·÷}U=gGð)MÔMë˜Ý³EcÆq\0ÓÎ»ƒx;†Ö½%yp5bñDÐåG¬lD€#ÈÖ§BãVãøÑNŠõL%vÉofL4•_s„3a{&Àø—àÝj0-Áo\r,¯†Dl	™—&2<ƒð@ÈDð-%âÙ’Š‚(Ã‹Ãµq“m”24ë!MJ-g¶	Šƒkx¥rôÀâj8‘up“Su¹TçsÖï4ñ[–±e8£—À¨@#Ü>CÂ<`A„Ì(\rààŒÖìJ}—ò ¹E…P÷©›´×g´ ¹âÜÂ‰%m\0Åón§ú½2Ö9…¬V-,¹¹ö8ÙâÜžtf¢KõŒðW„\nÀÂ`ê Ûiƒ‰]¸Úø§»«\$¸¾„ØÞî5¨øŠ'<0d)ùH/L²v‰ V'³.‹™Y•ÍŽYcinÇm|}4Ê[š`M9ui‹z´VÓî{fÔvk7ñ|DUŠ *ñ8\0	\0@š	 t\n`¦";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰p¨© Ï{ö‡(cZù«\r*ò9+`R¢:¿ ìº#Œbò»!«ˆšÉ˜¥ðÂã(ÞÆ‘dn&>N€§ ¨¸Ê9&c”4ºpáý8±p˜œ¨ª¢ò· *Â0ÊÂ„|ËB¢Ú5(ÍÔÏFáâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇƒDÖ\$ãš)Š2ÁKüŽ‚KHúFKÏhÃ»±èê5Žˆ`ê1ª4ÌpÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´¬Àƒb:7\0Aq\rKõËpÜvÔný\r‘B0#„5P/ÒP‚:¤kF¶½ó~\"£0Â:ƒ @Ë^/%jÀ.€PŒ:ÃXÆÃÈRàëOLî}xÉÇ£ÏŒM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡q¸ˆ:Ø\n2DäY³Šc[&‡fé3õN´ìsc[4è½büÇhÒ<¹‰Þ\"”ÀÌM’_YvmÄ=3uÊý+kûˆô£mŽ#.l5›¶mÀQŠPm¨Æ«Àhü¹')Þ¢*§cÐÂp©xÂ¶94ƒx[³¾ìñ¾ï¼CN[XL”Ì³tŠ7ŒÃ2«%Â~S4L#{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐT	?_ƒ(P9…)pœ2²Ñ«Ä‚b˜¤#jƒ \\KÊË¾Ê?»âà„6â:¥ÂªR2½\n43²Ð³;ŠµPåV¨£8@SéEHï1¨Åx_Új3‰µ7”Õ4N	ùó:jR’à¬¯Å	UÊ)3ŸòCYx)˜äŸå\\„Ÿ9-A5wöÌ˜såÍPða”{ð)60TÞœSšuNéä;§¸ŸÔ\n’PŠ6(…£rRF5J©v*¦”âžm§9Q*ELSA©Ud‚0¥È>Â‰PrvYP’ãê[Oò;w¬ÌCŸÕp€Ã‘è\rfmZSTÆ	qz/„á-¥`œÆóÉUij<£b\0H\nÊ7ó@Æ\$¡cdié=E~/p\$ð2’ä¼Þ[cÉ\$ÎÀ5¨§`rçDªJ¢xb\$X'¦R~\réâ\\d!¸r*LÑG\r(¸0¥\\!²6†H2‡êj˜PfD‡â\0'äŽ_CAÎŒ–By¤jÙ©”ÆL žÒxS\nˆJB½øÞGÈìepÿ6d¸qH&dÖa°´Xej¸3¢XºŒ#°åbIˆÉs œh’ÄøÑ\n\nÀ&>“LB\r)ÁRIµd¢V“\n?¯¦mÇä‘ÍË!–0„531õHS-¡ØšB4Ê‚xNT(@‚( Œ´´Éš5Ml0‚RA\0D¡0\"Õ\n¥Uj;–FÒ£Õ×#T^!´«VúâÌj<-¨™žâíWÃƒeA¾ËC½\"»+;JÝ‚\0ÎË,S.–4œ88B£KÓ6Ž2¢7¤±=ñT%¹¾HX4fÜÑæ­Ž¡Ã¹²è›on+0â[@åH¼8sü¶÷onØú;c¸žÑb._–(s\"&­\$×Î•:\r¡¼š™°¡\$¤¡HA%2å+×èwHAT\r÷@¦Õú°ü+ñ¨uË1à¨Ôš:\r‡›kKû7.'”óž–ìÞ„—\$Önõ™xYƒIw¾HÒ†PîÊÖy”L-A„™ †òÓ¶’Ð¢žZÃšÐ\nf˜ß¶•¨Ë¬!°Ôè‚SÊ}WÐñ(f'œ@ßŒN\naLe™«WJM£n\$|%ù\0‘3½7bD˜˜ ßX¹/[Xµ\ržÕ Aa Menj©“4„‚±º`AÞò8F‚…™¶6V:æà€ˆ C&\\Ô#Ùç;®ãQ&%àŽ?Zæ‘\\©x+›;ÁêA†™¸.!W@híÆ41Å'QäPœíŒ¥§Ñíƒ“ý%¥)ž‚ÈPš§4óÊÏK»GIöÔ\\\$	‘imX‚GÝ^z*Ù%Ë›7è¥õf®Ór§IlM¨¶CðÕºeéÝMžv)ÕZil­µ¡SˆÓ†% f‰½Ê#|•\$¬ÊµÓ!lÐÐ’c½»\n:\r\$F\\ÝSd’Î·Òº6í…†PÅ¿’:7ÉíçBƒ£Ø\nL«‚éUkPgÍjí^•FÉaƒ\rÓ±Ülèƒä|S8t«øÌþZÛ,o=Ç3×n‡«Unõ72[Ûkšòò}¿ê	ŒÙ˜J“/{Ü<Ó\\Üt|)£œ×>9Ý;¤èæ¹Ñž‘n®+Y¨ifÊÃ!ml–.öÒŠ(Ióìb€•ŽÖGŠœ´½°ènÏÚLNÃÊ+2é®¤C²õyíw“Åä@A@d¯¥Ú¯w\$¯g÷4éi3¦Ú?!%|‘l§Üç.îr¬ÿ‘é]_kAåí7P0·Ÿ’ç/€p6òœç×ú>‹é}v\0é]GÖu9LNr›+']7G,ŽOôþzÖºBN\0œŸðÊ1&øÐH0üœï¨µ¶¥+¿9ÀüO¥ñþ®²Ï«l“}›i®.;7Å¤öŸz®˜©Ïê??°¡ú®ÿüH×ë§¿×¢AƒœV†´*Ã°bâ{\0Eà^BºdÆ3fJ>cŠ+GüDÃ\0„È 0®‚JCÌ:Ãn \"ÑægÎŸB\nO‰#èî»NjœlHµ€¦ÅæÿaÄP^ .¸Fïx1’ÅJä^EŽÉì\"@bþì ZÜöon¬öïþqK8Žð†É&FŒ˜–býâ ÉP¬8Š÷¯á\nŒ—ÂôžÄÌ6’«\nð ¨nØÉâ†1¤¸=äÆ\"ä1.&ì%€B@@V­¾1®\"ÈÏ©	+V2ñ.ÏíüšÿÎs\ršwF*°ECˆ·§nñOŒÈHÕ\r1(hJ{Æå\$IeŒedV#ébD^sQç¥LQK)/¾'Â|%Ñ0–‚pÂa\n).pÀ¨ðP³	@DÙ…¤ÔÓÆ¡¢=>^¬`™cƒ)9,d±ž	ìpÿË	ÐÃä°jn>Y¬oB†Nìc\\°ÖeÃàI‚\rq¹1ö6‘û# ?Qø=±šÚÂ\\	\r¤üâã%æ°‰l k\0øD\\Ñ4Ì\rCÀÜ_š@’6à€æÍÒ<_ƒÏ2FéE†(¥ø…FvSÌ6E†ccB\\d£~\\ÄòOÍòB[Žg§Bù‡PÏ2z Ë(ÈTdz\r€V„2ÇŽîBpÿV'ÇØbJNŒ\"PaC\0y\n–\n€Œ pœ€ È­†ÔˆØê²”àÏBï©‚zÍ®Ñƒ(Ö./:“¨ÂŽmòÓEl2cðë…Ž0€Ú'Ã uJ10vá¤–>DT/hù+^3e´ìÉïð^b°°ãÀ«ƒÆeºä3J(“N?\0Ô\rãÐ¶æþGn5£&l†ÈŽ%r‰çF£žµ“r4îúóSÚMè”¬&qóv^S].S‘83vµ/g9ëàï Þæ0ÀôóÓ©9C°+†ÉÆ@`\nü¶âF\$ç0'`ý\$JgfzrkL¯“Þðd0h‚XD4/DÈ²öL.`êE;'4¬J'â®î| ì#†\"Éð¢Çç-óÄm¦0?“Ðì ê!eÎ-ÆÊó0Ô.íC.ó¶D@¤@Ê`Â@«*î Ñì:¬";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îú†\nƒHàù„\nxØ¾cªJ4²ãhÄÊn Â’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¹óhÓ7µjÂ7;ã &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»ô¤\nï£0H^1	+b:P\"ú7;a|Š>£*„‘‡xÂAi¬€4\rã#fü á\0¦(‰‰c8£ƒÑ¨°ÌZ&¢òÈA¨rê1ŽˆS!d1É[e¦riÖ£M­5&ŒKË´©EU<¡µ°Ä<·\0HKu]Ü®6£jõCÏœ­¤q¼Ê1²•Xè?OBön Ê3,V;/c¨Ë`¶{ˆÉ†ÉBÎÏ3Dß+%ì(š10ØƒŽÃzR6\rƒ~'ŽJ5ï1Œnþm=	†Z›gJñhÖÊ2RÜ@¸î-‘ã9…:ß Ì(Üfƒ#)]W‹¤W‰Ìvå«3Ü\0Å/Ä3ŒZ–öÁe„êSU2(ÿ\rÉ8ç·½(ñ\0[É0ìâƒZ×¡¢&Š®© \"°åÅnC.épá·Ç\\ð»âOK=\nH0ØÙ MJ’££xÌ3?“Ã€¡ŒpLñh2 Þ®'ÒãòÉYùÊ031VXÞ¼2OÄ‚<£Ã8Â¼¸Û­Þš¯/ÐÊaJcÛ\rnø@!ŠbæŽÈø2Ál9/HòN75É*N«.£kõãŸb7O	äéØŽL§hõÌn\rd3Upt\0AŠ<—Ÿ‡îFJ1&O†	?¨¢©’qz=¸3ªÕ^LIšl#	ÌYšbºHrEïº¾“¬™“A%©áÝ˜ÆÐ–Á&	h9‡rê­\$(2A4üÂÔ\nƒPªD¨°î£`Yy%à¹I)@Ü¥2™Šêp’%>¨UTÊ Ž0(<¬\nŠ²7JÕ[“ç²q˜@Nå<¡rö{v=„\$ÀÇ\"t**#D<ƒÂ4ƒ±†+±fsfL\$ŠDFÉHÉ€H\n7¸ä^±\0(* ¥¡B,™òˆg~²·Àø‰¼ˆ\n`œÍCÆ\\KyZ=\rlš“²zÙLØa\"¨0/öžI¡Q&!\$ˆ‡“I)U±[`im[¤(£o \$¨9ˆTˆ\rh1³s5 a60€Ù&#dxS\n„7·R|F	£Nó)PÈÄ‹\nË²€®–\0¹×ë}1Ïøö1	€ýÉY	…LŠÌ§K3Ú‘ù>¡¼¾ Ä]ÚÀL)p>Ð@‚¤›NêØž¸æ.4Ý\r©°9‚`•´Fiá»+:‘µj8P Tµ@Š-JJˆÂ2åê½Ëõ3hÆ¬’2„èI‘‹‹Ä|ÈðàÆÑhAÄ í“¸wŽrÈtè„½§ªåGžY–<&°ž™P›ûfLr¼P>8m,à	<Dö\\ &ý!fî–K™‹,K˜,ònpÖËÙÎ‘|5ŒÉ6‘p‘8a7È´€Dô‰zn¢ªXÌ ÄÛ\$ª˜„“LÉ²¢¾ßÃµÆlô¤§í1v\rÄôC·ˆÈdhTr¨lø‡¦&•È«Òb‹Bûy³zs°½ðØRnLBj/%é¤þ]elkƒ(w´ö…9S 0Ähn(Áác­Õ¾ûÈ+>¿H„d°Âˆ>mù°1ÚÖlh	ÿ3gØ•S³ V€ib	89Vœr‰Ã8m'„PÜÌÃéÖ9§uÐÜI72§ ¤~¢•¬5„FÎä[¢¸Jˆ¢¤…@‚ÂDxbEØÙ:‰u4Í­.ŸÅQþÀg´šà{2<‚Ó6) «¹[9üÄ‹R»¼thH—3õY.#ý¸S	<Ÿ‡Ÿ™	5Á†:àšRžk+¬W7“ŒãC3¡#ÎÙ—0º\nsÚ/‘`ÃÓêVOÊÊÐ‘t˜¼ü³ ´Ön\$šþh†Ÿ´ô‡aÒS6èSe©sž§qzµÅ+Ö6xw­\$€‘#BUÊQ2á“^ê)06±D\r²”LGY\n£u;i0›¤ðŒƒÉ4i«fM&À`îC³ÓhI€äÇVŒ*}f\"n¶2MˆI|ÝÜë ÐB¶NŠn\0\$ùW€ è²HWz¾^s-V†Í=X‚h”Íf·Y‘–:œùhM\nÑ/gõñ:Ÿx±š;¾áñæE¸uŠà¶5Ê?2cÊtƒ_ÏõqX~.fÛŸå¦,˜Õ™€šù¨\nÒÑ'Ú†c‡qce­wpceÜzgbääHp	+êuM\0“þ³Ô™F.©‹Ïm\"ÀÉF¸þ=uòS>¿kíz/bh\nŒ%Ô2”SÈx}ßå–uÌ”>_ÍÚ“íí§{óòhåìÅtL~ÍPt^ß|…žò~=s/.šüÏ…–\\ßˆ;Û\\ãpò†œÛRO½_m\\ÍfzølÜ±—œ`ËMŒp^´^`3ùç˜û4_Ÿ¹O»6íô9{ðÃðsÂ,öK|:z35élg½œ¬7\nÂ¢õì~/Ôo¿lÒÀ_½Í¼¯­ËSó'xl5}V^ÆÈº—w´`S¦™ºÈB²«b|7\n=„>cðËä}/ògÈLP‹§š¿là0+²LÀ­c(ØÄÒ°kÄ& (RBïØÂËê~k\"Y¬CØÈŒ>Â'Òv.ê^î`ìæú[BHö/°âE²´/bòÏ{Ïn³l%9/N¬väfóÎ:m°“¯Õ	Î*m+þY’JÐ„ÚP®»¾ÅL.0¦Æ‘\"p¸\r¸}ÉÈ¹¢8‹°ŠðOzù¨6ýs„×\rÄm\n%\r¯œ½\r\"o§FG\n†Ö(ëFg#`P°rK9ª„Èv5i»Šú9Ä;\0¬Àè‡ÐEðÖåoz àâ;¡†5qæû‘=büäáàË¡yñCO=±[ñCç&M‘]c/Lñcíðìòâ\0ƒçOŒ—1ŒÍ³0Ï²mŽ2ÃB>.±U	‘¤Ùì9p›lH¦ñ\0ZäGÑªÜñÄ1ÈÃ„8UEqp®å0	¤J~8ü&ÁD§“\n1æ.Âb	´œ`È¹œ@ŽûÌm	\0Þ{/8Eå¤`gŸb˜A€áÆë!ÈU\"mkJÒnòËh€n®ˆ\$‚ø-Ò>oÎfyåÌÔò*ì¯§â ˆ(Ç‚béÂ\nÄ †H ØiÊLçÔÄ& èî“%Hdf2np‚j>fB:y€ª\n€Œ p}gb1È8ö*Zq/.Îí42^±2¶qòºÑ†E‰–qFjX&6}Î€¾ÌZ ò¹Pº¬ŸÃ=Cö?«pÄãÅD£/MŽŽRb0¢L)´aâ÷Î®1fn\$£(…Bd£’°:`™2Ìôjãn2F@i\\EŒ´ú¯\0ÚGì0Ð¼ã£d\\O\r4­š>¬Rï?5k¦úÄî¸ˆQ6cy6¯Vn±â Sv1SZºKV4ÃPl@Ê{I:=‚l½Ç¯6¤cÅäd¥Š°l¯6“„¿±-2®ôhŽ~ g533ºïŽ~î.Öîb\0‡p(?‚bm®@KNd ê^¦¨˜?¦:/CøƒÞ´ëÖ[òìê  9Ì6½((\\tmÔô+2Ç¢‡AdJÎ7\$ãqP\r\$6	fJ ƒ­ `DBX„ô	\0@š	 t\n`¦";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¯ÀÊ:4ƒÐÆ2¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡ÂÒžŽM0)¦¦)Jã(Þ6ÂcÓ\nc(ô\r±(¦<¨Ñ\0ÛŒ£’€9C,„6 B@Ë\rñkZÀ-°À ‹\r#C¤PŽmèç\n’°Âé/£„Ñ5\$Núx»¾(Ôì‹ÏôÓ@!\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Æò¨\\”ŒáxÆ9…êËö7M£xÜ„KðÂ9ð\"/ŒQXÜ5„Aò`8'r Ý¿aà^0‡ÁˆØ °@æ•ŠÑæã¢‹ø-\rïsÉ7ŠXÖ×©`P 7CkH77¨”ÔÔ\\W%ÌÒ·­›5Ž¨{Vê\"MÀ×£ @1/Ð~ßøEßØô¹ÇhÈê8£*D`P—!§ƒ¤òLB`	0ä2ØLX¬a—£Ñr&¡V·öµ£K<Â0ë]ÂøèÏ‘Œîd1hÝv¨5Œ2t4ŽÒ¢-O23z¶84dØDÔX‰0mûö<˜`‚5ç/Šç•\"a/:VM£	Ñ	».VßcÐ˜Œ£¶ÞÅ°C{ðø]×;{jÌ…ôç\\w.ü£åR”YhŽ‰ÌÑÄ\rTwÄ•/¹1ŒS(€\$-£	#j\$91b(ñÑäÃÏ½\"ísyÞ¼3ÁI£ÆÖ“Ì6[¯:ŒÏÃ2„7©Xž2P3ká·¨Ný”7\rù[zk˜A?Nó]š…\0õê?kò5%µoû‚Ts`Û392šù©ðÛèzH—©ë{´PÏeoº÷Ã«¿|OyègÌ‚óé6ö¼ÀÒóŸ›ÑOÇ\0¿†Üþ“Ëü4ÏýðÃc+Þ|ð%›4DQXt&‚õñ²xS\nAŽNù;|!˜”†ÓÆáxÏ!ý¿Òn|ƒ¤MDh;.e¡+jíÀ<Â#ìÞÙhASê„¥¿óXcß\nŒeÌH\" ¯Sú) µŒ²\nš_U¡¸Ÿ¢0äž‘[ÝOé¥÷Â›â9ó§ÕòD%Å\n^FeÈ¬ÑW¤ú+Ž¤<k”teRjUK©•6Ôì[x„©R*ePª‰äsV\nÉZ+`D®Ò¼Î…`2F2W*ÇY+,‰”Â ÷LUX´Œ¤¢(IÜqqÎ@®ðÜ\\Te®d^’BpN“Ø©%eä½ÍäŽú=/ô‡Ä`ÈQM{PDX_MÙÖ€dtg² @@P~pŠÒ-AP0žaÂ©×ÓQ'1²Ñ†.ˆ¢Aä6At|Ž\$/<d¼Î6[5ÉÜ+8fk¢k\rBÓ¹Äp€È#ê‚Wjô_Áª*¸>DŒzž h«‘\$TœÃKÞiô¥PÂ÷Kú5ð|£9Õvù›´ã?d­÷?OŠƒ:@'…0¨åËý(XIéð¸®Jõ*3¬¸‰½^€Upf\r!œ:œ1¡\rK#[í\"*Ó\0¬PPü,Pá0’’r¬K™BdpEICho¡¤Ø#IôoÕù)6(n¶=â8›Ò²U6À(!†ôËN‰5£%¬”š²z‰:}ÕÃSH¸“A\r<vœP£ œ™bj`aìæß»Hš˜aYk…«Š–²c	ÐbD¶Íj¹s¼xm¸œaÍ›’bIcIJõ}É~î›¸N˜d7[F,ˆ3A#Ió²L±IÌ&UÿE\"©©¡…Ï˜SÙzëpg±Õ¸üìðIIw*@¡wª+×ò™ÅÁ—ö“_Ãz)ê]gQ`ç=çÌû\\“ö¨B¡v£ä…á¨0”@t³œØb€¦EqŸ+ál-éw\nŽ¼Á¢ZþPŠ!FGdHâRþbÂ~£8QãßµÑ{ýïšÍÛIbXkR¨i¨êz2ƒ€ÐWn`Çm©2Š.›}^‘ætJƒ!ò\rV‘ø-yEÕ9¶œ›Z‘ZqšFêÔ9]<òqÖísÐšÖ(XDÛ‰Œe\r<h{cð’5Ö*›ðÌÍÛ\n¡™Nƒœ‹™“ªqÎ´tµ–	Ú-f'¦¡…@¨BH*ôÐ“	åkMap%a4Ó³yËøz^¬•ö	Ú(kaY÷Å\0ó´ö€ka•U¸IDÚj9ãj†Eè÷n•¶®~=âÚ“t\r}ûvxDˆ•En;¬3×t_‡½3—=}_Öó¤Ýã·ŽßÞû}E\rù}ÈÎÿ\\ëœ0N“œÛ2fV4ïHªÝÊ¶4œ„/î;ÂinàÜ[çl¾Æ	Éõ§)ÞñW–nX£´ù„àü+pñk¾ê¦6D	ªÝ ˆy©Ì´¤XeÂºQ\"Ç\n¦”§¬ñ% '¼•…«>•Rºõ*;‘à@Ã)(¶TÚÂÃ„‰¹­ti…—M¹eG¶Û­…´àé(uÃM›bÝ\$ºJ1)Hç°âxŽænŒ@v7­Ùþ.Õôo÷I¿vîØåeÇåø¿Å¦¿-¯{{ç‰ÓzËì¨z~n	æVÌkÏÌQC~–íü\\þË/¿]ºýÙ+ömg×;œ8Èñš¸\r¥y¢Zo#õ·dì¥•çÊØÌ\n\nK2B…IC&±xúV†ÄKqpÔM\"6/P‘[YŠ%ÌÅf*î˜«ð\r-þbÀfÒ²ìFb\0Æ\0PÔ‹œ_`R!ë€LCf¾Ï2zàÈÉÏƒŒ#OàÊ\rE„ôÏ“ŒÏlŽ¯Žö+é§h÷î\0004¬¬\nlªâ4÷sî¸rg\"r¯jçÍTuŽ¶*pZÝ'Ç' ë¢'CÌO¤. ¢÷ð†Mb<ß­Õ\rÚâë”àãåêëã~<¢s	ŠŽâïÝÇIˆÍ7	0JLôðî&4®*àmÞ¹N2´‹Lµ¤Ïáâ!CJØpîÏ°ò8øÿ\0Ý¬ÏÑÝ0DÕbxë¬â\ràÔ^âú7ë&#.Ö!°Bé¢fZ&!Z(ãö\rJDZ¥î…„Dº#ÅýñNT4\$Àà9±:šfP\$†Š®H\n¶/ú\rÌÎ7Ð n,º¾\$Ç£NAÃŒ‘T¬èü¯Lù‹žLîyb.º«…\0LÂ'f¢Ž\$¶ÐÿcQ`÷QÂ\\fƒÑÀV]'£ƒžÔ‰]§>ÊÍFÔ©\r0Qè#1û1×P:p±ªÕ²Üuƒz²È@´,Š3£Öbçˆb@–\"¡|Ô¨]«Î@L–e£Êl„6Ó0­\rC'Ð‘¿.‚ÓR^ø°rÄ¬­‡\r>g'LÖÁ°Î^§âI'¦À9Ò‹!É­\n²‡CB=ñN/Æ*I Ö(	%%TŽ2®'‘9ò'½+Ã1õ\rÖMÄ\r,Ò•&íXMò¾@cœÿqÉ/rsï„DqÕ.]²Ö5Æ+)l\r-ÑD«.ðý¤ã1‘øMÐ’ûqÛ(ž/Ó&J²0³6KNF‘çƒtCMa1Rò\\ã\r4Ä9°5m_5±,o‘@Ð¡Lº.2]\nåÛc#\"d>pCÌ¢j*²D¨^åòœYà8ˆ«8Å\\ÉpÂ¥¬“ˆ#S 4sz\rÛ:„¿ –#(\n<Ælè\\Jc¡:!23ˆzã´i\rØâÐæ\r­ã9ÓÜ(CDà0£>s¬¢_=óó÷pèí†[ Øc¢(f¢|.Ì_1š(‡º[äªfTBçÃ0\$ìˆ}Âlš‚H‰¤>iÎêfZ\n ¨ÀZW=«2t9@n>­ýEë6¶0Ã\nN\r9³üÿ§D³P90Äà°ê\"	â\"¢.â)\0w&huÆÔ^³02 ¬BþØ aâòC	b8ÿüD>eêÜ˜BL?ô3ÍÌÛÔ°11”Âªœ_kXECP·Î¢4#¨Mî’±ÂFºÉúÀ lì¼¶{NM¢bozþ­ýI‡:-ËúøUÌ<fèQÆÕQÌ{ÂˆjèKzÿUþÐû5/óR›R>îcÆ(L¸êu=R±€]Q¸ÇÀòh%©¨š^J´&TA†O \$o¤(\"‡Æ„Çõ†‘Oü\nÂtš@ñ\$\"3–/(Ã\" Pô²N\"<üÕV<À´@Eºõ2Ns”Ø=ƒAQŒð»kË4\rDnkäv‹´¼‡ 6¯S57\$©.fÃ	ƒrêDFbx€";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%Î äÇ4{ŽÚ¦##°µ°8œ2Žƒ´\"5¸C*É\n-\0P˜§¦°8¦<ª(¦…<;²ÿK`ì7\"czD³ÁÂ#@ºŒ*<ä-pp …2(¸ÜÐ£ëT`!\0ÐžŒÁèD42ã€æáxï+…ÉÚµ¯+8Î©S\0ðšÈ0Þ7áè9.C¤œ/ŒI˜Ü5„Að’6£Í‚”:xÂ(c˜@âƒDd˜ACª€\nbŒ>š¤â³66£\$n\nÊz\nüŽ£Xè:ÀæÒ#°Ò2ŽàUER5)ð'-`‹¡£ @1V#(ÖÕÂj9Æ(ú,þ\nø%¬Ž\$†0§°8‚:¬aà1§¶S\"£0Â:ì¶Ž¯å\$SR€PŒŠÓÃLÎ¿ŠcÛe[C Üµ»‚štî\r²Î9¬ŒÒ~é·ý´6\$O¤<4Ël0¨¦§cF3¤@PÉƒsà•hØŽc\$èQÁh×dâƒ}TB®ÑƒeUTc#KK‘ÄuUåÈÀæ„² PžêÂˆ.p0ÁˆÅ¾¹ø(-2ðµ/ó¸á€Àâ*W§ŽL6vËc@Va™?‚žLØì,è%˜Œ\rã0Í‹*‘Ûj:ÁÂ ßH#Ê92Ž£ÆúŽc5¸H«Xæ&–ì0Œã\nÖä¨u´¶7Z(P9…)8ª38\"ÒÐˆb˜¤#«¥…¡_y¹JUlÛŽVRN&98@ð5cË:\$â ÐÉ%m²ÎŽ Ëˆ@ ŒœzÂs:‘ 2D•&IÊ\$ê2Líé>Ïï¾ùuHJb¸aÅÂìÐô½ƒ¾ð¼mzŒ±	:R¨Ye\rIeïâ©×Æt–¶RrP‰I*%d°–’àrÉy0&€Ê˜ÊRfM	©˜¦Ä(›Ó‹¼N­8¼-bösPÍß‰	Lù¡äé—³ÔëL’{{AÎ	R:Õ\r7-®Í³f)Yé\$åÀÄÀÈ©Z:ˆ…ÍÙ&îó	Á:2æl\0kp‰ø PQKÞ&–Šcöx‹“–sh¹8x`N9DŽ ß¾âTK	qŸYfx3åäQ{hE,ÜÞ³×J½Ý›èç÷–ò\"[)\r*Ø7ørê‰€hSDô8®ÈŽ±/x€¨RæÈú‹Pªh88†ÚJ]èP	áL*\$oƒ|ƒ\rrÜö@ÛÙ\r¬=‚™ò\"ÖÊa«(R\"(“²z{\nXiP/È7@Î¨²ë5¦8‚³\$Gñ ‰ÅÌœ;õiéva¥\$„`¨YO\r@ŒLY@’bê))Ejœ@ÈsEÀg2€)~5R½ÐNT(@‚-	\"„À‹D\ngHR˜»¡í£ˆzb.\"Úwa„A„”ÑLsÂ0lV1ÅsS#˜_0j= )Ë¹“}-šD\$èÚ ”PP“ˆe<äéWp¦š•Fí\r5vzÖê¡üi½½‡3ÄsÂ²Ì•%3>°!<ƒ{€é@Î´“¢ÄZ’qpŒFÜ›NJ¶_¶¶WgNXu/L,•›–¡B¡u.ë°4‡£øË pr*b“­s¬)äk7ÐåŸÇdC;ŽVÊ™T)…NªlIª0ˆ•—öhiQë/á,’±š0Å)nµë’†bt´ý/”,BÐÍý¼\r–ø\\\\òZMûGHÅ!¸Ö†Øs[•™ss\"a‚’Ð,HÑÄ’ÿQV4!ˆïúC	\0‚NÐsêgÍ,•‡0Ý€†BŽCQžšN°ú‡X\\bµ\0¼«+ÃxbÈJ»VÆ(SÄËj¶n1ª‚\0žÜ&Â†0`aJ©ƒ‘	w\0'1œ7\rÄ8O,MŠ1TC?e-‘®öJPFÃ·Mì\\0æ1	`»	†²F0ÃÙ,‰ÂÆÂMàoë\0¤â:GÉ\næ¥™~qF*½nì÷Ÿ“áð®Cù!S¦–W`—\r±%:Œ8H—W€s`ÉÄTÛh\$ˆ9°dè²Ëòü@KixA6‘wîAjj\$úSKK€àÌ\nOÓ–” çQë¹±S(¥êm3SíM‹Õ¤ò™mTjfž2Õ;[“ä\\Œl–,ùíŠ,ÈŽ„Ké£ÍT4“ÏŸš:Ì&;8‹ }—´Þàs×õ@S?UNË…¬‹µZFfkS÷@\nŒ¬0@\n,	q\$@¥WÒ;ÑVuš·//L!MxÐZáKwdßD™LõýCªm|†öyê~÷á‘‹Zé£ ÏÙî®ßÜY¯\0ÃÆH×|sŒi~+Sñj¼\$Åî”,^NÃ¦3ÁøTãpÓŠtÐ	åis|òö«Ì±	 <ÛœTðp§ú÷×<kˆOÃa?®'KÜª“£tŽ¢\\Ê\"ã|¢Ú†WJr&¹dkj³èvîÏ]Ç Œágf3È[n”¢}î&Pváö:4Rœ!È™ìÞ-’¢OTîE0§?ÛÑú}ÃéGòÛÛ–„«­Ýƒ·¶ÿ'þÈ¸­? 4[›[ZeQèª÷[R>‡Kõ®š«é¤U!\"ò×Móê}´ÜÞÛŠzN-î¤Ð×^©–*ÀÑípMêI_!¤tbÐbH¥LÃl·2‰;®ŠÞ¥,ÀÎùi÷ÿðuŽ§¹ËÕâü1Ç‘ÔûwõÓžÔø¬×fö@Éë:áÿÁt¦ôkª«‚øTø/e>j¥Œ:š<ÊüÍúõäN\rp¨Ï‡‚0äâNýâH\"ÿæ{°&°eŒöí^w0K­þýíÖ?•«¸ë“Ïˆ\nd*-óPbºqN-n@ð_/4AÏ€¼ÃûpßäW	Pu	°zõÍþb`æ3KÀýCøàÒÏëb’i„ÃŒ`ØhbäÁP«©Œ«Å ×Œ›\r&øÈ\0Í\r^	e„ÁBÆf\"Ü0æú#ÁÅf#ˆÇ,›.†·pâÀ†? Ø`Ö<@ÖÄ«p<¨xÛ¢ú…‚â£L›lºœŒ«`¡`¨Àpt ÊäæFEè\$ìDÆ¨ÄapÔ,™®h(B¤žjô¬0š,Hî…(#.Õæÿ\"ö&m¨/ãzÑð’ð£|Îf-'X…/FU†\nÝÎèÛÃî®j’cžÜ+‹«Wå*.ÚEü#»c@B‹Õc(Üô©Fz<æF ÍaÃÚ(\"©-ømebßíb™D[Qâß†F\r¿íq,ÍñÛ!rŒQøg®&#\"«ñe!ëä#¾´å€^Êí¢2cJ	­„@ëÐÞ& ?Ò%rTb.ŽšF¶ûâB]‚r\0ì»C¸gr,-¢ž½ÂØ¦QÀ\nŠt»\0Ê•¥šPù£¦*fñF(.j°hŠjV\$c!Ùð1¸#Æ>\n&-IŒd\"àÔ";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½âÐÂ•=ê^ç pã\0<å ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÔ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Âï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3)„Að’6Ž|Žø‡xÂ*˜A#ŽÊ:\rísh‚\n2bHªM-Øë1³Qƒ”:C«z:º²“:¢½â²´;„ÒäKêþÛÚ¥%®ñÇƒ(ê†(SHæ‘Hz!) ÝwjZð'I%³¯5WNGbø7…¢L¦áß`P­H4rž”)Ë{&Ë„zb\$\0PŒò·£J@÷ˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®Q6H/ÏU ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç);uèZ%ßRÈ7æºK‡ÉãLÐÅÍr¥­¹NBsnÛû\n±¡SnÆ2úì02§ SRÕÉU8á2Â¨cÞ\"¼Ìá=öÓ¤í)&×­Ê”„)ìC‰=ãeí«H:ã0Ì6Q©˜‚1Hãb6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Á\0…\0 Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïww½ÿ‚áø|¯‹ãÞ•±aœ…z#w¦™ˆb˜¤\0T\ræ˜ò3“\"äŠ+æw†ÅÊ„dÊC©DËä®\"žÌHQ	€ŽyÐ\0È‰ãªuŒ|¯0¨h’š²ugUaÎdQ…ì9ÐÆHB	é>TüŠŠ¥ja¹‘3•Z«ÌùŠgœ9†@Â¸Öhb%„ø”ãZÊßD!/gðÝ¿¨<„	²&§¨9Ôä˜ÛÃÆ)Æî)Ÿ]Ì;Oa¡>§õ Ô*‡Q*-F‡%”‰RŠY‘©– ò TN)R·eTGËìˆêÀÐ\"ƒj>VÁ”Ö£7Šqƒ‘9d…<Ü«3ðBÌU>.ÈÄ²NdN¨P	@…2Z¥ÌÂ³XjÈÞ!WNVÈ9z&eåF‚\0ŠŽ‘Š!‡øÒœNœá[2“S¨SŒ‰œ~²ÊZLy’u&aDÆ¢žGÃ”(tdÎUx…Id0‹Îˆ2°Ý\nÉÊcf\"9RrMÞœ!'Å\0ƒn‹ÉÜ:Ñ|ê¡Eª/ørCÑô'uÐa\r\"T0®Gi’Êîƒcï<Jé«b„vÃ5ÈK\r¢×)æˆ¿Åf”JŠÑJ4’TÙim2‰˜P	áL*Ö B„¥(Á¼¥;“SÃÓ€¤00ƒrŽRJX \rðé-È\n¯Nr®ŒQôêƒ<:jÜ¢¬ÆD†œ¡\re 72GòAª]:W2£5A(\0F\n@Ð¼ò3Y)‰ÕÕŠ	lªëÆU\râ©0ŒÁ\"gÂñ1ò`kyŒ	á8P T¥ÊÒ@Š-ª^ŽJŽ-µ\"x©€û«FÒ’ÙúJ	áÂ}2ð@MÉí2a:SÕªknÄÖogÄù²öÚâŽ|î 3¬¸â wY•’H]RÀâUØ‰ëR,kÐ×aj0IÅß™ÔÄçS0á¥¤U8oƒ›m,Xƒ¥b¬ÌP ›€¶o9–ÎU‹Ag-Â/ÁpØ¡0‹B7Ç\0„<+>Fn*Ù6×Î«ŠtƒY:\rpF©4†KºÅ¶‡ÀùAVÌÜÝ)+à‚í]ÂfMN¥üs†tËðîÁ–ž\"[e¼0#e}²i\r7Ù²6\0h“¾?À(-:€0Ä#ebÖbÍ:NÃEÈ·)À—F<\\B¦n%‡W4³|ÖdZÄP4A˜ê˜›&9,Ew\0ÀéBHÛo?Š4ÆLv¯¡\r¥è?OÑß\r|íHT!\$\0ã\r™»8oØ7¡pêñ\$–X”–ú SiÎ~“”üAyb~&]s™ÅÞ@õášAí1kYãzÉaíŽÐÖëµÌºjÈs1ÀëJNA¶D>2;/fìÍ°ŒîÑwîiLB:Ôl¢jlRtµ\$!¬«æÖÖÐ…îBGñ¶vRfz¯ÇxÝäÄÞÜ#8eya=“¶÷Ö.{å')mÀA‹û63­²¿S‹[µ”xT­r”CH_©\n^¨ø™°{–‹FÒÈ.D\$T\\A&½|0ÆRMBÑ‚Í\rÆŠÚÀœ³,­\\‹9«žûŽS“(y¸Ù·˜À‚·¹ˆÁÜQKmÄ‰«Á€)bóëÎ­xúË_+wxŽkÐôƒ:¹<É^w·;KÚº‡'·b2\rÜqàeì\\'·´žðá\\ç¹‰Ø®Nú’ŽáÍŒ¡œ¨ÖÂû\n Ì0:0ãßo­ÅªF¹,yƒÈÏƒ·RÄÃù–F«2öÉÙMâ’Î÷yòs<¡Q|¾F@L¸ ¦Ü[{®”Î`'ÌñõÔÓ|;Á¯¦©HøöKÓð;ýÒÿïý…ë–ò¼î1³§¾ñúÙ«3î7àõ-àÝü½«ì-ûÎ¿©6k=áKE!R÷úöÆ/ÛBón<Ž:ì­ /í¤Ü‚d/èÑoîï\rðá\r˜ÿÍ‚3mÃ\0MÆŽÆn2#Ì6‚vïïˆù°*\r°.%P20ðï/^²ÌÉ9PJð¼à¢\\c¤hº0\0æF# Ûb:#ã`âÞ9¢BM èA)‚ #Zx¨ LCžÏªÉì/Nz @ö ðBb²ãkª€@O§„ª\"¶4†!°V=b°’\$ ²ð,Ì°Î\rŒ¸u8Éd”ÌÄöËh4,ÔÍƒZ@ÊZ¾ïO²ìl‘ð[«ÏÑ\0øP\\rNJZoÎpí(­	ìjø¢g`Ï±ãàq6)°ZúOÑíNöÑ±A±¿ÏJ>6@”±b¹‡ð‡Eüán„\n5mï‘&pþÑ‚üÏÚûQˆþ©Šú+ä¼æ.JkŠÊ¥°\nëŽ&,c§£ÀÞÈŽÅî\nV@¤2 Æ\rfBò0ÆÀ)lÓâ8PJü˜üD³Foqž3àËQé±á1â\\q÷Rq\"¾oiÑgÑî+èM	œúr'Ñµ!²Í¢ŠÎq,¼ÈLÎEÉ OÝ\$2;\$q_\$ÌÞ:²3\$C«„lPQ¹Ñ()­&KÃ«‘/ÄºAòvúñ\$²s(ù\"Â*L\"‘Ñ> cÞ\nàÒ@¥’Š¥ÔÁQ¯	Ê`W\rP,\r+Â–î²éº˜g\\eçâ™Ê`¶ÄÎ Îx;Gâ&þ4ÂwM¦B\0†Y\0Ø`–s‘Öb\$f0£°êqÎ¬±Þ*‡*BPšV@ª\n€Œ p4ª¶BÐ’0mœê£9®,ãMõ+ðAïð#³6oñ	 î¡\n:¯\$íZä\"TÖÃÌ¬5,@ôP0Î¤™NjAÎ&¬Kt#¬þJƒr67'ê¤gŠõ\"[É”-Ä|Eì	‚4II2Žþ#«=äˆ\\àÚ:ÐŒ”pkÂì:ŠbàN PYÊibH(LîÐ~m\"x ðâ:î\":\r`Þ-=ðé>óÈørz)àP‡~Ý<&×4*´¸‚q?´0PkQàvâ˜#³ì<:ño/kÐ(ÌL)l¢#`ñD\n°IPØ8GtoB¼½3”\nÃð£^.TQŒ< ÂtJÌ[Ã#*ÃSD’}„—<ãI=%’\rÓØ¯x`Hº@£,øë°«¤0eE£>LÒ«žjøÃÒjÇH:eRi‡JçBXÐB84’fBö  ";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD ±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1t‰KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³18¯§¤‡iÓ×ú¯‡ƒ@4C(Ì„C@è:˜t…ã¾<# Ú4Ã(ä\rãÎŒ£vX<™hæ4ùpDƒT2Ž˜ ¾1\rƒÜ5„Að’6Ž`Ê6å£ xŒ!ð@Á`è4\rã&p7„¨æ2„˜¢&\r9‹~É.EÚÌ_<‰rFÇ[·ÂT\nãêŸ¾»T™{n7:ø¾RQ9B(R¼ø§Ðô‹oè«ç\nðh\\9/ðu²N¬Ñ2z‡9óQŸ,ºA.´19ˆÑ&bá¹\rÓ´ûçiZ“‚kµ.MNÈ¿ëÕJ¶!•\\7Én›´O´¤hrž¨§šƒ:HÑ×¾²]›#¨LŒV”7¶”²\\xÖúõ	À¥³ïRøŒ’vª¢j–º8k•ó'øs1M7R“š5µMŒ3„â4¤AA›ÃìòÒ‰9EÔ®ã²ÜÓ;¯?Q9‚ò¥N£…zdàV+óØ¾È\$}I°¶2AW)ryP@™!T€ƒÞ!†nÎÈ?V¼‰\n†n=94AJ:\r[±Æ,®}ŸÓÛ=ñÄ7²ítB.pàJVêâ™eD°-ñ%cØõ¡	Ã‹ÇE*DwröŠ’¶pÈÌÝÁd¼×±=n•æ/¥ù_Çz‘6@äH‘Õ!ip‚ø¯ÏùDøœ0\$w]Ùó ²28Ã€VIÚuñ#E&MéY9‹H,ópáÈ©RˆZ½ÙÂ˜Ã@±·SJÁ”CmÑˆ”ŠÃ¯!š£¯”&°\0—¥&	J´mRq¹Jâè%®”§XÔ¸	Tdåaö•ÅRJHä\"E¥£|AÒáhYy%ù	˜-ªaqXaRÊ†\"GÅ\"?¤þJIhC\naH#G¨~Èb]OnýÏ“B¸¶	4ç2h!ÀU‹#I/&IíX\$Ù£)\n:.)AP44 ÖÁ\0fe-u™†àÎ\"dŒšZ6jÌÃ#&5‡±&ŒEŒÔ0‡FHÚ{Q0¢]PöÞuK™Q™rì„KGÔ•Ü²\\KÕXM’E(Tï\$\"adRI‹\"ìSïúeØ{uKÎš1\$Å³cLqvAJ™+'e,­–²öb™›5ìÝœ³¶z™ûAhm£DV©rT‡î µ'±õn\rN\$J{‹Ü#\$¨:z(/\$)/íœ>Ld9ºFÆ<â+ }¢;Ì`îL×Ê’«êòC*•9Ã˜#‰!…6fÖSi.HÖ“?*)u—Bž­‘b@*…[Ò!!S“þÅ}M­-t=Ó»@\$\0@\n)mÇ€¤9TŒ¯‰Yi;…åƒvÎARÉ+mRt¹’\$JÚ'+¼|ïøX˜QJdŽá.îI>â´•ç”era¿BÄED+ÀUE•öÆ¸ä³àüpM&6à*¦‹)Ã²s\09 ‚mQ\0%\rª‰Èl`k	ˆYä#¢hZM2\r(¯° Ðj(igbÏ§ó\$Ê¢[Q(1Ø5º8§_/£ŒâÀ…ì(ð¦#„O&¯) BVUŠxLxzØr‰Œ_>mT¨&£ìir±m_Ï	ñ!ÅHó\"‰æŠòtJIé?Q›[¤L”tmF Ê–øJ0©T €#KÝTR6Ž}’ñAØ.²:€(M¹mÀ8´´q¿©†'=æ4‰”K’¾€*—ÆƒO™­Õ&S’b˜«Äê7Ë9gl´d%öVÌ;8gTE‚&U8ÎFB‡p¿}°3—\"÷´2Ì¸‹º[ŽoM7X¨,´¥¢ j9OOM•#¸´¢¼©BÈ4Ò¡Â»y-¦÷€Q5ÆÇ	p¥EeF·žMñŸ¸iºáîOˆÈ®'i	˜‰GØgè¸c<cGŠ†OÚþW­£ºIeZ!ázÙå¯*-²Šr¸Ë±\r9›Ÿm<¥ÇÕò±8ÉÍ/N.\\Nî ûþêãÙrAÎ:˜%DÒ·\$¬æ¡ ºõÄk#Ë]ì½Æ\n;ÔfÀÜ³m:Š-Öl·*ˆ Ë°a¿cSÖh²í²GkJ\0áj#¾†vB»÷—›P¼7ß9Ê0¯K%E·Ì’ÂZÜ¢y”Ò©KÖzŠ‚M`N8ñ›ÄµˆÔ·¯OLE^¤¢è½×d6àÝ¼ô;‘B´Œþƒx	íá¤=÷^®ï÷!ãEÈ–`±‘~‰´g}Ö5)ÿ‹:ÇÌ!p¿ƒaòe÷ôOÑ¥ƒVV7X^\$ˆ¨àˆu9„BÖÆø\"µÐ\rÈB7OlÜG’@GæöFÞ^ï*ˆÎ€‰(Ò.eÐÏ%J@‚\n€¨ †	\0@ êdÀÒª@gFÀ\rÀÞ‚< àRf È0¥¨K-4=¬0I¢ÚKï¦ÿ'Pà@#&´½B¸‡O¥;MêZE8…sâæP£ÈçE¬CLå¡4œ)B*bÚÑk¤¼ u|\"‰Þ˜ÐŽEP’ô°–‘FmKöÏcy\n!\nl4(°°êé4æÆ§DŽµªÖJƒÀRk¤RÃ²åò(HHÎ°˜ 	Øœ¢Q¢­Pm‚öuÑÍëPÖÐ¤˜­˜sB‹¬Šâq!°ÏpÔ™ðØMtº*”þ%LMâ\"§üñî=q6éÍÂDG8êM)¦Ä\n¶”¤Œ…«héGNé4-\"úÉ)ž,Ì&ûìŒÓ¬Ö¹\$|»O²¦â[ë~GÐü!‚†˜-bæ­p\0î ÄqPþçC,%ÀÑ¨2L¬5®°@kzƒ,T,\0›‚0sBÀsñ’%Ì>±H¢œµ%\$ëA^‰È ,0¸Å~ŽªBÌX|Q`ZKž8KjébòVÂ¾K¨>UÉs„¯ ö¿“Ò\0æ¢¨rK%dXt‘BÒ\\²a\0¯1%	‚;\"?Ž-+ü\$>oö%%Nd2ŽhCY)`Eƒp+g\0‡‹\"Bò‰**G+)FÜŒÎ‚Ed+cx0­áB³)( VbÜ“'¢à#ë\n§so¨¼ÅŽˆŠ)…fý1†>¨|`é2Øm˜)è¤Ç¥³-1s/ˆšü)†ê‘,µîÞöƒÈãÒ­/ïI,°æ™ètvBÔ¾e…gZBé–½âÊà‚Ô'øJ(òÛÎ_d­%’Ÿ,å\\ŽbYQ\\¢ŸRs'sb1ÒÅÄ—'¸Û®ˆÈrÉ²¯/ãí3“~}å\$‰“Òe)Ó;'S¤DA3…¨Ñ8²Í%ó¶óó´32÷*²S6ÈCñLÊˆ†cü‘üö°Š›\rð®\$s}pí(½æpê¶I?Ñ	ãy\nŒ?¢{?ðé‘e,’8×”·BÈÊ°1Á_:Ò›%³-vúPÉC®ôA9“5=rµ;4.úuCd£EcíE¥í8sÃF3£2qð·ïî‚Ê+/„ÎÍPÉ\$ôø¯<•¸Î^ÑÍêøÄBÈ,nËHÉ³@êIË\\Õ#ß±2‚º(*Ç+„Ý‰6Ç4™C²¶ùÌ@Æô3ErÎ®ÞŽlÆ×O¢-´l,tpØ%Z‚2ØEâLøƒ[J…¤ÙfÔÇˆÈLèf//ÉM\rÚ–RHš¯XËÌ­=/“+3¡8óæâ'o4‘)D“ÝT/QSRÃ<;<Tdçå½,pÍõWT†üÙ‚á\0²­TETók<•t\$È¶ÈD^]=Q‰SóÝõŠ!Õ{YwUÎ…Y•„ˆw9ÓàÕŸ\0ÌœñEG•^èbÏXÐýAœ«‚þ+ƒ†TÅœAµÚº¨;ÎªPäV‹GT‰l‚CTÂ“d·äâ?5/@Â«Ae:õQXT\nè0N9+Ÿ=¶!V	a´¥;õg8”}Dµ²¶õ¶\$Í€ˆ•ÆEÒ÷c¯rãs¬]ÄY#ò©VH‘G«°YÒ€{6Ge°c6`.rUeCd’4ÁÀÃŠ\nÎ«*¥ªvrH.•“M62*3gD«aƒ;S‘iI6ôb%iäMc_\\u­j¼ÀV¯i¶²èmíS¶#<v©[›cÏtÑö–™NƒkP\\N„»Ä©vÈ-Ö}+¢gKi`ôGjr£oç)pÈŒö½bV×dÈke>d§fö»nãÞ+wrpŽÒÄ…;Ö£pucXfä?¯ñr÷YwFwGs¶¡nÒÉu/‘b>¶Ït¬zø÷)qW-ÕÖýwWP	.Õ¢ˆ²Ž\\äÈZ×TÓit7,gLöÏbÙmR£yÒ¼—q5iV~¬ñ¦€s7qýa“ìË¬X&DàKè(†.ì›<ãgÞV2 sô'pêæ…g¢U™~“~ÑG é.…‡ºSöú·x”(D,¼='~j1Ò0­O#\nÌ91FFµ'’Nt0¹ãµƒt%‘>*RzK-þŠÃí\r\$öhü\r€V`Ø\r Æ\riÒO‹?/3\rX„ûaÉ429Ë\$?#ÉuMytš+”žD‹@<1|C¥ÚÏõµmàª\n€Œ p)@I@0¬2mY(\"Ý(‰‹Bï¸Æ/2…'æðõN“í2˜ Ç¦öü­ø@D—+Ì[v8¯~FB!`dZP«#—öE¨!.ý³6œ´”’iat´0µÄS€ùDÂâ.mUˆ«oˆã°îO§ˆ‹T×%ù4°LQ\$C. EÂ@~ïö÷Í %™^ Ôüï.–âM2DÆôóHE\$rBóÍf»\"*þÓâ.ZT2×*i¶Î\$]ãRúnlå„>rˆÚ™Óu&mê\"“Æ'y­™˜æH)>„GŸjS;œšîs+ëÍpU1¡Høá©œ'âz B¦¹?cyªõùÜ™Ä<HÒåTpQgÊ|ì‰_Ù~n(êƒôÐIOœe¢ßä(òàßTýÅëOEðŽÎ£wöpÌTÚ;˜¤ 1Ðkj[!G3\$S+òÞx.òœPÎP2#¤Í}í4HEL«&-×q„³–Ä—»·Ä+'¢ÍNÎK/÷ŒCó—g_4úo9Hªéî± §0Ží/8VóUlvæY• q0,²¦¨‹¥âS÷¦z§#äRDà-­à5%€";break;case"es":$f="Â_‘NgF„@s2™Î§#xü%ÌÐpQ8Þ 2œÄyÌÒb6D“lpät0œ£Á¤Æh4âàQY(6˜Xk¹¶\nx’EÌ’)tÂe	Nd)¤\nˆr—Ìbæè¹–2Í\0¡€Äd3\rFÃqÀän4›¡U@Q¼äi3ÚL&È­V®t2›„‰„ç4&›Ì†“1¤Ç)Lç(N\"-»ÞDËŒMçQ Âv‘U#vó±¦BgŒÞâçSÃx½Ì#WÉÐŽu”ëŽ@­¾æR <ˆfóqÒÓ¸•prƒqÞ\n)çí&}ç#u‘›¡}üzi¼Þ&¦É%ËvIÁ›ç ¢©ÏP·Ùûp°@u„}ÍÆ@6/Ì‚ðí\r.#R¥)¯ÊŠ©8â¬4«	 †0¨oØ*\r(â4¡°«Cœ\$É[î9¹**a—ChÊËB0Ê—¿ŽÐ· P„óDÂ“”Þ¯PÊ:F[‰‚P9Lèø¿Ãü‘?Ít—\$\nq[Jç7olJçˆn\$'§q¨…'¿²ƒ^ŽB`Þ¸Î«|•8n(å01¨xþ\r`Ì„C@è:˜t…ã½BƒjÓ…ËpÎ¯4€ñ£Î ^/iKP:O‚úú7\ra|\$¤©Tâ‡xÂ\nPA‘˜ÈÕDi¦(È«Âh+B\rÃÈ=7óŒ4¹ÒJ;/¹,°ê1Žˆ\\jÀ°l+•4¨žÁ0Œ3~ÚF¢pê2¨ñÓ+ 9á-f1+ÀsBñ\$K£`ê6ÂÐÂ8Kµ:P·¹âHÜ1±—Ò.0Ž²Z|P¸Î\"¯˜ê6\0ì¹Ûö3,ÄÃ­ÿÈËÅ±°ýðâ0cÒa–skœæ¤HDj'ŽP«¡ŽcòÁ¼#,Òò¼SRÔ4Ùµ›ü¼Rnx‚1äÙDÛŒ‰¸Âe¬<Û|Œ.j/[‰€PÛcÎmÜ™XÖ´•LoÌ£3É…³i©¾õˆlc~ŒíÃ+Ön©ÌËvÌ›<¦\n\r#L„À²EH“_i¨ñÄ1ˆËméð\0'lÓ6ÿ¼mñ«)#E˜ƒvÍ3‰JD7ŒÃ3ÉŽÂQ^ºƒ£9>SéîªàãQ&ŒŽc6ÿÍkHæûHÂ3Œ+K³VÖtPÝ‚Œ¡@æ¦‚ Þ5²B¦)ÎÈì‚¼Žp\\\nÖøÙ‰¥¨ÀÜÒ·ãb:þí*X3-Ãn”À©¤ªiO’å_Âäâ©(	-è™å@FŸ*?LÈò‘YöN\$x¡’¤îgSÒ|)J‰•šó¦ªU[öu¯äÃ†E–ÿO²!>dÉd°>!Â@½¼µÀLÒI~/¨8àæËr³*ÁÀ4˜ÀÈ÷àºya©ñ?(¡0wQ=E‡%”z‘*ÊQŽ)u3úSê…QªVìxa¬UÊÁY+Brõ	¬œ±ÓŠM`b2De}™Öžišý#H\0…*ÇLÁ3Ç-——ðëÂqÓcGðÿHD#˜á©\n (pÞã\rq(”‚AŒs#…¡¨D´ý¸yä\\1Ã4 Q¸s\"å¤á‡#³	MØÁšãþÿš©Æ5Ï\$Ÿ’I(HŒ9%}qÌ9(©”G^ùð%P¬ø°EôH@\n	\$L<™³ú±Tb\$ æ› dÃ+u gÈ†Øé*V&JZ‘ÒD¬g|=5Ð(ð¦a(L¤ä!B.bÚ©C{èê£ˆ‰Á:'€¯6s1ç<¿8Ïÿ'\nB“›Ie*´Ì:„ÕO¸p}HQò†\"àÃú\$,H4ŸÀŒ\$í\$sH“Çèz`r4Y|Kb5#C‘ûI\r\0R¤ÚBd\raP*Õ€’‚R15d!ð¤«	u\r¡ˆÆ7º¨¼Ð±­u´ÿRAUM'¸´Ãƒ&@É ÅC`jY-—Ð½cX–žCQÏ&Ç”ý›¶Ë-èKë—…º‘Ll“ÐÛ–}a”ò<©‰Hc†þË·´¤šu¬o¶‰\$\$U¬ÞÃfÒé\$gèäXñ%+\"¹^ŠP:¥•/½±Shi@æºÉÊY^ÈS9Çõû”R€R:Æ1š¸ÐßU]rm\nŽD¿\0Ò™Òù0èZD^^!ã²†!Ì7cøZ^Ø¡{°à&šôWOUùÊ§”;€¥xµ½ìCFœÓÇ›RÒ7é[ºþ[ÍBma„´œü2ØØý†NÚKÕj„=NiaXSJ¥N2¡Æì\"†êªH¦¤ug'@¹¬DjŸŠgpèåSÂš) 8© \"6…ðÜ‰T¯_†\$*@‚Â@ n¥¼Ôº)ÒçY¬q(¦ËéºK(jEì`œDHÄªìåmv9³,×Z³ÏË‘xgfB³Žs¸a„ûg×	ŸÉhf¾ô8\0”ºv´:ÎA:í ´~„Ò:M“CjPÑ§z'NGÒÐZ‘Az8qÕïõg;&?”çVi×ýg4œßÒ«³\\tFµæ›×Äj^ÙÝ„MvS‰H³XÉ†ðîáª\$}kë÷l†¬ÞöÝ¡fxH\rÉþ;i\\·’ QŠ-JËø‡pÊ®¸EÚ&ü îò¤à	KsÖEûx‘ŒÜnÌ%Ré\0MþC/ \n		”öoµÖ<9klÁ&…Äç\n­¥.Z×é¶Ø¡,8ä«‘W;äWpáÅë/¤®ýšç£{zØÃ\\Ûó6v¬õr­–a\0)’úÖ³Fí·Ïªò3”ã§#MØ“˜kW7oTa2e\$t*é	O[iX8¹–æ=…0îeYŠú÷Ðã0½¸.d·Æó×ø\nS?h ¦µt;>ålÍOäGïžZÖüúÌaT®oôšxkhp›—…¶~œòMC›yAÞJy5ä.Ô8¿­ë“¶¿:8mæÓàŒo½<ò'‚ã!šŽ`=í-¡½f½ÑzØò4t—µ›4Ï’* ~ù¥¦ç|sùéyÝžùŸüŽåÂb­ëÑ\0ŸâÜ\\‘Áf‡Ñ8ô^ŽÛîUèA­—´2Ï·æøÅÞ\"Ÿ¨\0+{KæHŠK}º¤ýOÆÄ£€DMödôEmŒ§«¶þC HÏê'\nl€ ÜBOšRdV^®pJ(øÄ¦ÂôÃvÆÇˆNêûŒHÏžçE´çŒÑ9PLô.¶%©ÂjÊD–ù.¤)°l'°På0tÉð`Ö¬NmŒ¢Éì®qâU¬¦œBÐ°DZ-%ð£%f¦D~7èê@dVÉ`Þ˜ŒœÊppðˆpp0ºÉ¥¡0ÆÉƒðÀúð…£~wF6ìp†7ës°Ú<—CäcJ­ðñ\r¾Id.ýæöbn™'Ä%êÓónj³Ä«6Ï#Œç/*ôÎyîq/QCÍâ9/:î‚ÀäŸOßÜ^ì`•NKTÖ±jÇQq\r0|alcãã\\òÂUq…æA AfÝ¤0nÅï	QËD(qÐxòÍkQZ&€/ÀÐ¼&\n.FF_îž<âJÉ£v]ò·mâXomÌ˜·„ËO†ùƒˆ1Ø2D–%èaµ¨„TÐ€ø\rH&m%hÎÊo~ø.`3\0†H\0Øij0É<èdECâÇB0ã`ä}BhÇUãðb(ôxàª\n€Œ p|Ã†0bÔ&öIvÛ±æÔl#BH”†Ôä@#­TÞKR°K*¤¹ Ì+Â´¼ëŽ‘ÃØ8ÃÈfÄD/,~olšÛò<nGøN\0Â­g\n ‚\nM„jE (*öBƒ§-g’ìÊsB2Ó+·\n¢CÏ²6kØ#H íèbRž´ëêç#JEcˆ˜òô/®ß/k¸ˆ“æI,´‘'1f¡/¨C\$“ãŒQKàˆîz’Ã‚Z¤ŽFÃðm‹^©âô[†Òé#vgÊú¦„¶ŠöïS`onäÂï0‡«?â>1’›'nÈÓ…æ¯àá3nÛã÷+æF\$¢IÃvGLt7n0§®\rë£„¾o4ëd»1Ãw¥¿ëÄ#\\&¢ô´Žr`C²dªâ@@š	 t\n`¦";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj*@(Ò2<ªß,…â<1A`Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nˆ(\\‚ÿ )0Þ7´ñx§3qz-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€PxßÊ3¡Ð:ƒ€æáxïC…É#·ËHÎ¾”€ðÖ\rÉÐÞ7áM4ƒ¤ú/¶L`ÖÂHÚ8 ²Ü:xÂ?‚×\rè;N(ÉH¦(ÈÍbj+\$mã1®°³‚©7ì*Š5ªj\"Î&¯­û\$’¯ˆP+	\"(¯Z\n£~Ø¡¨å”:ÙŠÔHÃœJ4ŽCPÊˆ ïò¤„·Š2:,â³Æì®ò<8;²TÃEÀP‚óÈ6>*ˆúD@P‰=Œ#®2C`ëw»Ì’.õÙ”µ/\nÈÊ•	ã¢t2CEª•%ŒÓÜì[2žã# (\r7bÿ'7ÂT4cZŒ¸4qŽ#bÃe6Ù%#˜ÆÆ0àZ(;h7Xíä5Š°kR-u:\rÛ~Ÿ©£rÿn¯Á‡2I«å¼ŠÈw%›sÌìõÇr¨˜4”2É‰Ò+£ha’«]sTÉXä’B*sÇrÍp£iï&ßÀL¬ë¾Eú6=†Eì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍqJŽ£ÆÂc6,¼MPæ4Ã—t0ŒèËØ…?’óŒ¡@æ¶ƒ|(6Œ*˜@!ŠbäSØ•ÁL3IŒ-#o.Ý5ûƒÚ&^-Ž–£rzÂ¨Ð>nNA\0f-*ààÎ\nc%Éä5.Nˆ`r	ÜÌ'¤øŠB¤Š]îœÕZ«Í£À\r)<ö)vÜhÏYT|™âÇÖPß‚j1!”š“s\n	QhåÇ‚\0Ê‚ì Àº	§ˆ,ŸSúPjC‡u‰èrQ§eH)ˆ~¥²˜SFì­U>¨Cr£TªTŸEX«•H8«T4+SLgžâ&H• G¸OU\\!10‘pàLÑ\$ j¤ß±£ü^‰¨E*<½ Ò}!ß0	Q&`AHè¼OæŒŽuª÷J  \n (Hé }Œ*5)aÈŸàÖZSÓ!1Îl½“t÷	á-~fø†6àäˆÈñ0Ò\"QBÆžˆ[Ì%'ä’(L° \$¤Î°Ù ix OAÅÊÌ—ßt	QpH×@@Ã`o0sbK>SHMB€O\naP¹³Xîù=„l4“&¹¢!écG±Ù2é’úÜÚc½q.i!2•‰*\rÀ˜5¨¤Ñjg°ÔÎ™oÐ¤Wa2\0š&1?A\0F\n’•aÇ5NÌã™ñ›é\0ŠÉH¤Œ	z2%ÂÔäàQ\0“Ñk=ˆ˜<£ÂÈ)rà-á<'\0ª A\n”TÐˆB`EªhÁ}™t¶IÙÚ.)Í!‘Ê¾—Z#F\"Ë\0™•EÐuN\0¤;,’†sÎoæ	„%lÆº×vÜ	{ ®EÂ“\"ü\\Zc”\r¹¿¸j˜›„ŸPúH˜¶/Z /u°Ž9·º¹C VyÎ…¾Ê¡½«èv,óŽeãžX-5%VDÒ±y-,HÙG)CjO’!²Ü”ƒ\0šÉLé-…êâ‘`ªÆæJý©|¹–òãuP©K¼!¤\0àõ\$™f±çøxB›Ú&/x9¸G¹\r^ì•&A¦ísBCº0X,ü¹@’cP\nm†ü…Âr±B\r€h„ã§ù^ŸÛ•‡]+Jœ‹Y~K×Ã;8'4b\n+(g4Éa2U†Å&F¡P)ŽÂ(RG`^§ZéÃ³\rV\$‹¾Õ‚Îí9ƒ’+92<’œZ5¡X\"„à¨ÑåC®ZÑÔ°íjT!\$	¹%M+¨TŠš—y'ƒY€Î`Â‚h^jð\0¼g\"ÕaÚÅr9¯áý²Œòi/ÇsÍM¤n){	xq]ò¨IªõÄùêYEÉ?ˆBÇ43ªåé³Uv>\$KÙ}4²\$AÝÔç…#sâ—Ã¹)„nL’PIY>³Ad¦¼’G®	E“p„‹T¥9%NV³¦»±\\ÝT)N›låÈô´¤>€®ÁF:´ˆÍöÚÛ\$æ5]™Øu3&ã¢ZBPõç¬{—ç×øÉ­Ï¡ïßz¿²§¾êì]ÑªjK,|J\rš@÷õ§p[+¦,ÅwÕ7]pØÅˆAøv¥>'ª-]:\\8e“àÚbt«^?Å5¥gV‘&Ü ZoÓDKŽ	Ùþ‡RòøeQñ-ÖåÎ­ºç%K æ4¹Žy³‹™¸\0OyiÈ¸{†'TßüàŠÿ«ˆ‚ˆ‚ÑJ2<	Ý)8¡ÆˆAßâ\\²¦^ÏÁäÊ‡¯N¾Ú@{\$¸]²Æ¦UÄçÛ¹êeû~?üÿ\\òËnýæËö®êm<æñœ#½—°§äJ'“8¥÷h­V_í2PÈ^J£ë¶…ÈØf€Ð]¬ƒç}ô_µ§X`ŽqžáÄ|}8öXZÓÞ,xÁìõoÎj”cîð¾ö¿¨ùNL^ÂaÁ“`µ&¤þfÐ\$¡ò» o%^çÕa?…u~ì¿…äAyëë¯ºìCwÛRÂœ\\P´.A=JšÐ®žûc\$û¢tûâÔ½ïtöjx,ãOàZ©MÚ­åÔcÜ¿E¨F¥°[@RóN8!Œ×âRZå²[o4÷É{P4óNJ’/ ´'0ZpS%¶0ŽLg0öÎ ñÐNÈÁxÉ	ÖéðtêK 5n?Ð*†¥¢\"°n8Ð‚oæIpžs\0PÉlš\nŒ¢cMØú!jãÂ	,ãÄÞf®#y\nÐF°ÈDÔ3cãÍRô+PÈbÔ÷ãÏ6ã°òÈ0è‚Q®>Àhdv„‹\\n`áø,ì¨s„Œ1Rë@510çŽ@y­îë/ÒM¢H7ñ>	QO	Ož&±Xm±¯;	†æ—„Švñp_¤\$ý0KŽ&ý\0áÐ]ÆÛˆƒcML4Œ8_i1€ãìóæˆtæþø-,îëž DAÌS‰0›1¬hÐý\nq9PÅ@PÅŒ\\Æd`ÄU	ÜAªî:q¤ÞMRJñö7ð„ùŽÑ‘þ=Ä³îÕ Ã‚Ì‘ P	eÀÈÆq\$\\ÆümK{€ØÏ1/4ûnê•R.ÓË8‘±<µöÃåëq\$N	nJ\rÆì\rÚ§ºmoW\$¢]¢êÑ'åN~W19\rº€\0†H`Ø`Ö&eÄDâ)jM\nâ.hæ=€ª\n€Œ p‡ÀÜÂJ€Âjq¢Ò\$¦„ÒLî.»0¾gîsúÏÂ,	¥j\r Ì)&D;¢þF2ˆæòŽ9/ö·Šüã’\$\"!'^¦\\\ri‚9ÏüŽåÞLâHkS,NBÒ%#VgåŽ\\,<4Æ,p®”³\\s\"7O‡i4]Î¨ãòR”*”¡Qg­EîQ6’â\0Þé+â6‘³g5Oší1üäâä\$03BR.iÍ7¥ð\$ëë-¥Â ã¦ZkÈev!Ñˆp\$™¨Èp¨Ì{«noÅˆžî¾­N–êâ9=fŽXü›B†¬\0¤Ðëôsêe\0á:%ö,ä’&OÐe`–Rä† ‚6çÅ‡3ÓZ¡êÞqCx5»ÓÁAón`3|\\ñbG¬¬¿,#Ê#|1f<I)!*’DÂÞ	\0@š	 t\n`¦";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿c,×¡É‚vW<ê¢	41\"Èˆ=ÑYP¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë°/‚­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾ñ‚ÂÀE‹\nôˆ•±zhú^­ëF·c®Çi!²_\\ÊâÒ[Eðœ*“08zV•b¢Æ€âŒlNÉêXÆ¬iNŽ +L)Æ¬Âqªl|¦Å Š=òö¢%SßQXû½n¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÇ·cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e¶îfC ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀïzDF(X+úA&ÄgrmJý‰[{^\$c’ËÞ’º³úÎ°A{Lûh÷ZØ|)?‘çÊùÛáNE´¾õÈüNH\naL)ežÕø ‡±£À§JCt,-Á>¦Â.I“c‚,½xÕI*Þ8¢°’¢·ÐZ€PT\r\nÜ5‡0@”òÑUˆ0¦ƒ,U*€È¦ÁƒPªD‚\"†®ƒ\"ª!Ðð†uˆ±ŠÚEh´\$€¹\\?D-ðòUáK§MœTJl[ÃÍK¤î˜ƒ!ˆ87ˆ4Ú\"xBž—±C\$¦v(¨E¢RŒQÊAI)@î¥¢8nSjuOªFU*§U*­VªðÎ¬Ušµ‡Šé““·/	1‹ëÑ;5Öðž:\\…@ UÐTà‹'nmƒt\n÷<c!Ç©z¢sRMaP'	ÌÌC‰„”X”Lm£v|€Û!K:ÌdF6‚Ñk÷\n (FTW1dÆ|\r;‚\0PPÁL-,&®m@÷’û’zÛM°tÜ ¤+£™ i˜å@’RÊi\$G¨ép“2²ƒ_¹qöA·g=!n@2*]Ng:Ç`(‡‚!\$ÞA\0d\r+87ðèFÕÎYa¦(pâC(s¦á˜9ðÛdÌPYpd1†ÀÞ´Õhh§€€8OCL“\0NÎÍ2®ˆþÛŠ%ƒè £U™w!)cÉÝ\r–HÐq™hY•õJ×&RËI'A §•Æ8à«cÌ9FÅ!¼‰æÌ•mCåxœ-`™YhA^`1SN™ÞÈF\n“¶94&Ç\rDmþE¤yæCSéadÅ…Ð/»SI>JÆzšë\"ÌH&| ('„à@B€D!P\"ÛË|(L·¦&ÎÅZ\\ÛLS	2¦zŽú?ªW!Æ¤C£=Hè÷-ÃôGæ‘)vsÆ;›Îa\$'ŽŽHß®Ó–|®¤	rµžzÝ*ÊÛ’vQÑéÏ:¶›p†­Îgt·ïËéN—ñÌ/WYS“}Â‰àÅ’fqWé^¯m‹£¤•Ì˜¶=kù¦Ñ\\J\$P:®lÊ•VQ<ÊI®ÈqèšÄÜ›Ë>ØÈ¡¶ùbçAîB†Ÿ\$•ácBjEÏy›âBï•îeè^z9ŒãœY0ƒLân’8Â¹JôtHmQqæƒy”Ëi+©=¥]i›ËþÎuï:Û6ˆTY£>1Ây£vh)1T,¯Ø¼Ëj™m½×0•+è”Œp¢gš‡á£H\nÎ ^tˆÒ9~DM,üž‰óÊxÕ.ÈN,Þ¸aP „0)ú›\r5*õ©Mi¸s¡À8)åLQƒ4è=õ\$ÂÂ)­\0¼¶@ByeØK4Î7g[Bmm”†Ð‡kmº\$…11ÚLqØå%+·Ó3÷%{†¸O´ü“ÍsÍ€›wh&}ÁIwøÞ\r¨œ&©2ö¼sÒ°‘9’ó‘l^rá„¹O=ÒSŠäÑ8•Ž=ÛP›äQûDO.qûUÀ³ÎxËîè>l™­)Ù¶»,Ž¿²k©AµÙzÈ#÷aC÷[Jb-àí¿âš×âþ ”øòþ61\nZ=V¤©È·<°^ú‡ÝC¥U¨gÖNS®k/{¦öàÓÎ†ç=?±q·WEiÍél×rÂÌ’ú\"½È²’hÊò1ƒII=ãBàhï„Í8¡ê÷2Uà³ÿ{†÷aãgÂ—·«ÏPÚ€æÖ&o±Î¬9Ïk²MÁOrKxGá¾˜»ûÒÃéóê§Ö68¹\$tXØá§iW;yüìÞ³ß`~ÓžW·qvÎ`žÍòÜ‡ 8?åK÷nn3ÇEù=<Z”‚J}ê—¥•¼_k:Äô|7>Ëµ§D{\0	Ô¥ò®”cúa·ëá,™Í¿àî-q(d4d\nùÐ\0,:D°,CRèìÐKl˜ï‚q.žøÂ%C,:Šâû¤JJ¦ ¶i˜K'6ÁlšE¯ \nö(\"Ñèf=ÎÚ'¬?­Ä¤;KÀÑFæ¹æº(ï³ïcîs\0Î~„ÂÎàéð”øPc¯ÄÏìõîœÁ«RÕ0Î×\nÐ¤î›É­G\nç˜\\-Zúg‡h_p@Î~•Ë¢IÄDOI\nDÞ?a°	–ã+à«¾þiÐ¸ýeO7°þpð—/4ù'Ð0‚ç\"äÐÄnºL+¤K#×ì.˜,K¯lŒ³ÈìÁËÄÈF(1._ˆõ¥ï¸]ñ&pP“‘<îuP¨øeÈóñú‘oè2f)âÍKpÓGÔì`éí2ÒoŽûF=KBš‘c§›¬õl\$ò‘4öñœq¦šHf–ÕÊ?€Ö\nòù«ï\n§›ÎaÅìšŽdÈÖ(=o”¾BIGäYŽ¨sqÒFKrà‡ÚJÜ–£î€ÊÄ\$žýÃåÏžDjc8(,~²ÆØM/Ö¾ÎË\"c~5í¬ê%þýÏüMÆÛ'„ë²X\$/þéêÀ¶‘ìcÄnæ#RïJä`è@Øjš\r Æ\rdÆžI¬ïâNUC`ª\n€Œ p™ƒx‚-Ê·+Vß/ã+oÚŽ£0øo\$R\0ÁÄ(†L¹\"s†'/Äfd\0ÀŒQ\r™ â•°…&ðÏ@xêâd±\0?B®­'K01Y0èCjLæÔ¢L®8Ž&¤í¢³¤æ´\rü%i%i¢áš˜gèðæ,åÖunÎ_PDLËdM9sV&óZ¼Â=oŒË³dî“XAÒ’Æî²ó³y6“}å8Pc5«ä7çg6,93|­Ðž&Òèhc‚gcV@³sðbÏîîMïNMY<3òÂmI^6‹¸s“\$ÿlüº’öqQ*mâ9‰`{Œ•&žâCŠ-\"è1j& :Û¥Ö% ½Ón½2>@aRöl\$¿o~N­'AÐm\$™8`Ôä„ÁÊôÍ‘Î>Æ´…DyÃ8";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ‰«›Š4¾Csæô=MAHÉ§‹@ò84àPœ:¦C”&(4¯Pæß„>ÄIÛR\rË¸+AÈ #Œ£zd:'L@˜: C¢_	‰K`äý£IxÚÇ\n	b\\˜/sÖöC	ˆÒ›%ƒÛ¢ˆ²6Ã\rÎSË#¶ ê		cdžÈæ<µÃXÓ24C¬b»±â:4C(Ì„CB€8aÐ^ŽôH\\“¹ˆä\rãÎ®ô ñ!\rÏú˜„M}\$PøÄ“\rÃXD	#hà€¦SxŒ!óíÇc@Þ2(h(êí„˜¢ÅHI¨¬–4õâPÄ	Ð«\\î´pÁ´HèÜ¶\rcÌ–ì­¶‚R×¶,@«]¯rô€†×	Hì:!-Ê0Üì@¦„-(<ÃpãÑUª è-tÃ¨²xëÄÀR\0Wh@ì7Æv èíB4ì5¨˜‚3ŒóèÏ€\r0œÒ2L3?9%ŽP˜ý4ò·9£*Jâ“ôÜ¯ò‰64éÂ&*\$Ul82dZ‚¯‹ö¶Cƒ[Õ0Êõð˜ —Îv0ë;u.[Hêˆ)Ãªë!ŒƒÇÌ&Äï7ö»¯ìl@žÏ´:ö*0šdf‹nÑþˆØ/Ë>Õ0L[@ƒ§ø€Ù`Èè¥ŒÃ4 2…ª\"M6s\0:ÌÁúŒ±#HÓ¯j™mŒ£‚Ø¦\rÎLìÑ[oû°¶T³Ÿ. ¹zt´#K`Y±)û:œhAut,»Dú®ò€ÙÀKÏ§¾tÅ'QÕ\rÝb;×5=ŒéÚ1cÏo7=Ú“ß¼×02øJmqF§¾ÄØùm˜­9*g¦‚0-eä¥ ð\\al'°ÅþhS@:eÜš…XÓ“ßDñë‘ êJˆhkÇøe\"æønà€ †E\\ÝØc)‡ý  @ž|OÊ\0§*r0mÙ¸gUêÄš„˜<˜H)\rÏå0º°èù’e(O\0™¿ Ü`’ÒB@µ¹6¼UŒÙ.æ¤“´‚à<8‡Iý@¨5\n¡ÔHwQp¸»(õ\"¤Ô¨eRåÝMå8§ƒ: J‰R*`|ÏÑˆjÈû£µnHÚf¨ Å³SþjoËPÿÄXŽFÊ\nr@¥asE°sa5/P4ÃŸ³v®ÎPM4ït¡¤‚€\0P	@üJÓø¥À()À¤Í‡ÒÒzBBÆ™J–îŸËû;n.»86Ì\n˜t&¡,»°îONc)(EÜ˜­sµÒ1®\$ý ‡˜ÒÑ[l(Ž+2jŒãŠ°) »ÖjÅ\"×“Ñ0Œ1m#¢Ž@ì9—Ó÷@(ÿ\\äÕçº\nNI\0P	áL*Õ:!t2’å¼c\\±ÚÒ*láÎyÙèGJs¼\rÁ˜4†rrHšc[@df4#2DâÉ2Ç\"Dá>“ÆœäJ)T)€€#@ ‰á†{H  «w·7Ïù@›ä¬–’òbKÉJÂ\"Çtà\"’W×Ù9Œq†ðœ¨P*V\r[Â E	º¥…˜h&û©9x#´`,W\nå]¯É¦f›uæ¨í“—e“\"®ƒ;0¬ÒY\"g…\0%Ö¸à#b%ä­\0·ö½%p<S( ¬&¯Ú_kÌ™³[–Ör‚‚\";h(4ybüJ	€nwÄS\\”Ð:Vræ]ËÓõ/ÎÝkVn\$6(¢^ÌÔB©QØË¤S¦zrw'¶|ÖÃhýº6dða,2~h³<¢bš\0Ùk\"ÄZsç^ŸÄëµ±ŽY\"‘j­{ÞßBHnh}¶w„ÎÙ“10) /pÑ‡ZÍ’Œ†˜¹¥ªÌŠ‹ÃÏ%f.´b%±\\ö+…'7™6j’‚\"Žl‰˜3æÃ“Ç'htÜ’µˆ\0\n‡²Y”Ëf®P „0Š@'O±§Û|êp¶AÉ!JÅ4&:n%é¸ì.@@Án2!¥t«Œæc‚^j\råº˜<_0oÃî¨<LæNÞny»9òË} óùöÎÁ¤Óhƒï‘¾¡ªDÓ¤¨mÉ«ÄZº/>èG›¨³Òp5Z6™SíÌC2>FœŽç:AHŒr©L&+¹0“ªñ2:všÊéXJN;ü«‰>¯9Fû-¤îFhÔ7ì½‚LÈì-…ñm0)§)1ˆ9C©%i‡#‹µvP§U*í“}8¶Ïf\n	»gÃMšdVCË(ÕVry½æŠû	'N‚Ó+–šÙ8‡³²7?iŠé¶G% ¹è¯Ä˜4ºu€éb¥Äi‹œw‹›“clmšA¥E¾)FpÍ*åœž¥—ãçÊðzv±	X:#æFÉÕÜ((,90µöÔÑ ž•­ƒ)®yÝƒ=	á0LŸ/~<Èui,i×¦bi«Â„8PUØ)CÜóÛò;RøšIyeF×=:—`§lŠ°SˆvéGÍ­¯}µ½èõ¾æz/çq¶œZmßÏã<CT8^¢i`–h¨n±ÈN¥ù°÷XtxdÐšHhx®r•ó…ÃÏ<¿Cèô6”òß¢v¨}{‡)ðþÐîž<NNÖÝKæÓœ{ÌMíÐ30žŠL>äAùýxšG7Ê	}7´ž¦´Ú×bwNóéöO¬Ï¯ÙE`Ìá~¾Š)C»>JÛ¹âS²s»=‡­z~Çì¬oŽßÌ<nNZYçâGÃŒ¨^LÁ¨ÈøO(çÁ-VMtð0& NjùnpoLÁ(6ŒŒv“.çŠ,ŽûÎ´æ/0W¯\0çÂ%0FÉš5ðn!EøÆr\"`˜Ú¦\"ið0Âl.¬ö|§æßâXv õ.,3p,â\n‡¯†ë¬ó6æã\0èJbf*¸å¢“„\"êˆáð<ÐÄc£lÀáäÌ£\$Äê#NÂ^À¦f¢\\S).÷0¨ð0ö\rpú¸Žÿƒ+ˆø?ã]\\ð&Â;q	`Ò1Ð=Q\n?åæ^¢@ñN*ãÐò\$ÒÐk1,·±Bs ÒÆOq\nnäùŒbEHRø/ð;,Xù(\r¢aqdøsñX/\0‚EpEPHB‰’¼ƒUÎH›kÆÊ(É1£Œ Bã]n.M æ É	ï6JàšNl7lð<ÀØ1Ç‰\"2}‰.ÂäøNWÜ¸cþ\$°…‰¶Â˜j­DED:cÈÐODÒ'ˆ·\$€ß((&„Ò	nô’C¶ï€†G€ØcnPƒ`žn¨òg´^+†„\rˆ×j\0ÿ»@ª\nˆ\0Z8en§ƒfö#L–£æñŒêô¯d5ÊªõNf/ËRafr Æ1B&åE÷&CŠj¤¤’œ8Ãð'd5Ï†Ùü}‚ö5ƒ\\¥ã*Ò„ÎÒ¢d`C\$ì˜kÒÎÙ`²`@¥Bhij‚îrØÇ¸‡ ÉF-Ô6ÉÛ(#D”oÐ´þç'©bCŒ0}_[0äˆtFs07ÎÎFM\0Â}*P[‚ü´ š\rî~ÓŒ”É†pí&ëÉ5fta«XÜBM	òz-«0afÝ2‚b\$Eø6ìös|7-Ì´¦„LŽ\r/±Ñ7<´|<H¬ÜKN·r³êD^ói±Ä;ãh¤ÎãâÐá\$REd¸#à";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT @£\nÜBpÞ6ŒLª:\"FÉCv\rK*KðÓB“82Œ#¨#²qÛ&±'	Ü\n#¢˜òç˜eCt\nhcS@Q ç ÇR¢¤µt\r\$5Ð¬*ìÌšÀAÒ+´Æ¦±´6û0#¤üí«T²Ö!Š\ní Pxž¨Ì„CCx8aÐ^Žõ\\0Œƒj œ¥Ã8^2Õ\\1V\$ŽÈ^'Ãä3·tÀ¾“#pÖÈøà“½ xŒ!ð@ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü)Š”2OÒ;m«R*º6'®xäÁÅ\"Å1Œr»\n´xPŠzÃ¤ñÊÈ2&62v*.2xÆ€HK„aXb:!ãdñHÅñŒOØ¨|Ž\$Ã6TØ¡¢:Gtã\0\nÊ<8«£#&üÁÓ&2át\nèˆÎÎs0>F3ÑO°¥œ\\É³Ó%‰\n_„˜eÈ*Jà™9ßÍoM±S IÛ²ÿåã êŸµ{Ÿ¾Â˜Ç^ªVŒ”]ªÏ&Œ¹Y†U A¬&/C¨íªº5c›-¾\0Uñy&)èÅ:î7\0Ý<•3ß&Cšm‚Œ1>F˜0ˆç7’s»pÑÎn;¯r7*ŽŠªï‚Â;a%È¢\"wuÏOW›»_½\\ì”õÓßMÎP2O…Lû¢Ñ¡ø¥\r	s^¾0©ÐˆÉ»žÓAêká¸ü,*‹`ZÏ²:ÜAb¼‘Œ#ËU8uÿ(¥5ì:Â0nn`¸µ@ÞùÓƒé|o±ð>÷âüÓ[ö5fü?§”8dË.\0Ä¸N‚ o\rj°0¦‚1í,¨¤T‚Š÷2¡¸ƒ?eÎVIpm3Ìym6s*A’X -M«â‰rÓ\$‡øJ©Ã“ò|\$¤•Õ&‘²˜*‹É(#ü±ÖI:L¤A¢0à’ÓÓòLè-ûgªÉÔ:ù+°R”¢‡ÖhoMä Ö’2PO[LgdgV+©PÊ¥ÔÊ›Sª}P‡uGÙØ.U*­V¶”2¬Uj´!ÊÝ\\‚%vºòÀXL’*Â£Ên¡µ+½”à³	43)À™C3ej½”Æ‰ÆÃV~ŽÙ©†ä%FD8r•zQe„±¸#¤LºôBÈŽK¨2@P#Ô8;åÄAT\"†˜¯˜ÀæHCq%9)ñCJe\0ÛÏ	™¤=G‡ôªÍ(„°:†×ÐŠIO9ä¤ÉÇÓ\$*at½†2ü:†uŠLòd\r+ÔÒASNjM\\}+ÐÐ7‡“&BÛ}2­éë• à‚ˆLN€\$1ùw´LÔk÷8­ôÖ«‡¼òf¸O\naPŸ>`@Ð•ê:©8T¶d jÛ©?†%HØÓ†ÙÒ”ÏÝºÂ¶ÊTÍŒn¯„šðäÑ[ŒØ\nŠŠ›z0´ÖoTŽ€Ì´\"DRÊÙ0oìÀ`©6’°AMõ	4×rL\nM'@¤Ä” `ä™Î¢'”„%+Õóü˜Raa!tGæÂp \n¡@\"¨@U˜\"„À‹g×ôþ–„ôì1gÅjIKg5µ~V\nƒzØñÝG<8OÆp›œ75‡Í‘\0÷ÅJÃ?DÂaòPŠY­È¹Gíz”ëY÷?'í::Äàäœ¡J\"¬¼\"b°B^1±NîNo’¢•èù›­VV:øÄÍÛc;q·aÈ]úpð«Â%ÖÞÇ^–‘-L¸l(™Ò:ËZ¬ÏK¦š €å&ŠÌK,„—rz„¤²°Œµ‹NÈâM(ü\$!Çh2²Q†Ê¢M–5}•³¢ÈÕ”NA•ƒL\$ÔÈ|1DåÁ†Æl*^|ñ¼  9‚”É7‘,1ï-ÒB¢yMÝŸAÐ÷†œ¯AÔˆV@ù»²’Q‹ŽV„‘Î™Dó©wæ¥ä`.ºZoÊQû¯C=R7\"Ê*Æ”n-ùÏN…¬hVB‘QÂØ„ˆÄ9(éMœjYgºU\$Ý©ÈèÃ!Ù0˜UŠïøCsï	i ôÖÎž\n!„ŒZwZ©JVÄ¡ýäïƒ(d9AÈÊ›‡údoÝ#~]ƒ‚\0^6jæ‡0¤‹[Å\$o­¥ð äôÉHc›aŒ1¦æü˜y1{„ 6ç`Ó=@KGÛI<mÜ¸åw8Ü{”Tnx9º¶™JÝ«Çwßdøf	AØ\rª98AM¸Ön	:Ý;)½í½ëÄ7¼Ü;ïs@N&ÞvZ\\D{Úošôgw':\\\\Á»ö¾¶f\0Ûà—êÅÊÕ‚a+%¤6°'nL')œ˜§R9W¼lÎ#‰™#\0 Œˆh±löÄ\0®C+ÞËz¸Ýc±8¯@3-¼Ø‚r±N‰Š;GÃ¥™ìy)³a^Ø‰Ž„„¶^ñuÚ¹gF èóÁ9`l¸Ûà*fÝó%†L«‚)qg†;ß¿¨NüvHð‡jX>ß(D(<ƒ'kîg²o=ŠOÁúž¾âGÿOâ8–èÞ±~zïB™«GV©ºzFï»u€\ne¤ŸDWF°Í \n\n\nØíä¢alþWÌ6“ZØZ¶aó_'Ãî†C3ù\\P*Cœ FT•†ìÞÅ-sÃ¹²Œîýf¿Ø]zÿ”o­æq×öõÞòO(†f8õbx¿‹¼ÿ®JþÆD2pÿpyèÿïìö/¾¼Ë\ntb†ôÏn×ëèòâ°tGNÊ°\0£ð0=ðC0Fö\rÜòà‚›¦\0ð\"z™£¶xpVän0-þÚíÙ®Œ0…OO&Å.XÛÇ*Ý\r¬ÝbŽ\n b®µ‰HóËÐ!PŸ0në·¢\nlþ±ð®öÐ‹Ž	Œúñ¿\nÐ±OrökÎ!F*bëÔ#ŒâHHö©jç¦¶5,Xâ©òlÅšoct'ÏÆ~B€yh\0òÜ¶ÕŒÜm)¶æ+[G\"*üž#Ø6 ÿÃ4fcÞÐÉ¾\\ˆîÆD«p¼òpªÐL€,åê@¤ôÍ/\0Ö,ò­Ž+_\0¥íO)	Ð¹pˆò´õPÜ'±ðJõmTx,ö%vó&ÔPÔÏ\nþÐ8ñjSQ¨ò0'Ï-Jíñ¼öñ“'.­‡Û‘Èù1–À,÷qÆ`Ë(næï…ŠNE.òbƒ\"é‚ºejƒ@”îõ…Ñ¬Ê;£4Óòöñ}!ÒI\r¤M%Î'¨d)ãLÖn£äaC¾]ÌÂfgÒ?òQ\$mÊ¨²Lc'Ž2¦PÒ%Ò2l\\d2,ñ®ÿ0¢#’p;²u2/’ òr!r‰e#-Ü_R€2’R2XÀR£*bv0ÏÇ)oï!¨ð’·Ú12ž¸RÀcR«2ÎR0>Ñ¢NÑæ_ò{êk2ÞÐâ»ò&ÜÐÍ!/0Ù(ÒÉqã/²àG\0ƒ­Y0ÒðjlxS€ÔQØ`ÎrFdÕòâþÑ‡%ï2ÄjÖ¹/o13Ó0ØÒÅ0@	õ-<Fc\nJkù&Ž ÈFÙ²\\Á¨ÞþÅl3føñªÁb\$gª½Ótìzüu²1íÒ†P!ÌŒ3ŒwíÒñæK/QÁ7ó¬”Â8’%ÏÂDâÄ\r€V²€ÒÅÃV3²¬ªÍŒ6ò6ûÂ¸CèŽê/ø½æøŸ-1c8£k4\n€Œ pâP–à2¸¯ÂÞ\rÓ“»°Æ,vã3ÂwÉÄà ì’gR ö²@Q2>håÐ·À	ÃM3.ª†è'2THEi=Óà&\ngÆ\\7tùepjâ1XElW\rGÉ8> Øz¯æÿÀdc:3äl£c¶ð\"”ö´½ô,C²oN\r\rô¤a4ò†°ºeÅ>O[Jp€ðŸ<4´ÂT¹J‘„õ2_\n²!4·8€ÅEOì€ã¶TÌÁ<,ÉD‡b:hæ”UØëNL~MÎš	†Æ·Fb[ëÿQ‹rªâbü¬Þ©Î¹cÛ4ƒ&KNÁëÊ´+z%„ Ö Ü(ä¾@ìºÎêˆ¶c€ÀÜÅÃ¢ºEÐº‹›¦LAÉòþPÀõhïf6Œì§(-O`%Èy2!-Úd£ä|\nGô\rÀ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„BòßˆNêQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷DŽ¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‡Œ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûª5„Að’’\$HÜ:xÂ@Áƒ‰¼DäŠb‹ÔÒ¦‚˜ÊcJ¾¥3V ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è£wlpÆî»\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9:õÕy_\"¬xŒü×Ð\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦<‚b* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(dÓ+k\r6ŠR!Køj§E{ÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tYº£¹úñÜ-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÃIqÒÀßiSŒ=øAà¥~ÓW;¾<’*\rã_†!ŠbÞÈÙÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFào&PÂàÖ_ù)>ç¬È¢\nS»tdt¡’”êŒSÂz*Ê„¨Òœ`UJ«BHQe@v\0r cÕ#GÈ3CälSiÃlÏq:4²–Ë©§;ªø8D–J!¨u~0;°äôŸò€PJ;¨h>wJR‹J5G´\$¯Ôª—ŒjiN)è,¨\\*à{ÅVÒ0˜ÙùV5Ç ù¦ÔBRJYÕfdÐ ŸØë^ˆbxfqÃ£²jŒqü4E\0ä]pN=gäÂ6sû?¡@\$\nÜYü\0 «“ro\nš#dì\$fÊnWÁ…J´F¾K/†ÑôD€Ù+Žëí/¼¨ vŽ\"	O0¥y\"¥\\OÊfd¤‘¦¢š‡8 >\$¦ŸRRÀWñ!*Êåà\0jM‰0“æè¤°gZÃY‘*ƒ±}D–OCƒ©AÓÐ8M…ä‹^„â	áL*0ÒrìYû:¬½ø£¨ mÉRÚt38ncLÙ²\r!Øý½\"*KHAèc(@EžiŒèb9§å”bº³f¢F0“’vJß©…ÁRSÉ¸I˜Tø*„¬É¥ò»L v4Ñ˜9Ô’xg{L–•S6ABp\r±+ðRÇ	°AaP*„˜BÐA\nR¬'„à@B€D!P\"Öp‚M‚O\nAJ¹WJì(Lµò³‘DRÙàrï^&þÇ?p JA!LÕ”Ðêxp¥lmù²\n@r½Z«u7‚ô]-]RœåÐ½pŠûÔAlñÊP˜–yÓ‘Šhöàî2w˜ýrOE³½	ØæØ«cl­õè.Öåt­åÍEi•@àB“hsEl\$½5’@’Hsa*L `t«MÙè}¢¦IhÏJ¤¤”ÅY{&Äç–-ï¿ˆè3Uú¸jÍ[5æÈ¥jÂëe\"µœ*9ÇOIÑ<]¥Ô1À#*Ä“=£¸d8‡.Û›ÌÉ}ÏÁ„\$Ã\nNjóÌ}æÜáâÕ©…MëRb4è’åØÚ–Á)H˜öð²²öÍQ;§_ `{J…i/>„†ªPydkÒ’ìÉöœÆ‡8šz“5\r,€=PÕ ­PS6¸Ô#@ÐŽX6½IS¢º™.½w3«åŽ@©Z‚@ n…èÓ‰Ú(u˜°äRì2Fx“®0@ÁèV:cKÚÉ¦MdI)”Î™ô;B…Ý½ý<lzh8`¸êM)©õI ÕP¥¦¬uÔÎt4à\n&‡Íyþ×\$ š=øG­öV×P;GÜÓ­6qÔ¤žOê¥ªÝÀM^gì³*z™Á¸Õé%Â—™VÊ:ú¨äžÑ¶màW^ˆs0„~Hk¢i’jYÊU8Ê„d¼[5MCÄ¤;†PÄ·.ßœœ»ÙsÐJ^%¼M˜¥Yµˆ±ŽB,:=„„˜€ËÓl…Û‹´sž¶V}¶¸…~O¥vÛÝ©4É°ä½Øä˜É¡‘2išóîqg^#Qò˜lsp¹ß5j>[£þ¥Óô“±ñ	m5%Š˜Ì«	D5|Ó£µ57‹ìÍtä¢{]vex´ö”Ks­˜^âKkaU}Žò•q¶Ñ!5¹ÆÞ&†×„ÇËÚÉiPˆCs<³á–Æ¯~•’ú»’lË\ng#¢¾Šzd7óWPŽu_Ba}½ô¶­k§3týTÎ¶ø“šsÖÙŠ.ô/w·^t³Û	.÷~ßßU0eB„X¼Ô‚“õÞ®5ZÂàë=kò½ÍùèÛV«×¯þªZ1|ÏÓ¦ú£•Uê\0¢þ\\¥T¯·êôÝ_÷þŠ¼_d&áñºú¥—­PF^…ç~‘B,2gúUÃ8X¢nñv(i?Ä˜¦b,ñDÚ{m|¬EàªÏ6‘Œ–Fö¡\$ðÁ©ty‰ša°	”QOŒþª7îº¤¦ÉB¾Ã`Ú¦CËl¢Â2Y¯ØøN®ZbNüohü°€÷#7Œ\\ê¥¤ÅÏ.ö¯,,èèXø/\\öÀË\n(\$ºÎ­\nÐ°÷ïZ7\0‹µÄ2.ð:îuÄ&Æ ‚id€@‘¤Ö«Ðšøk¾\rè‚èð¤.ü!NŠ4ððìÅý/uðï1Ð¨7/gLÉ£qñv°Æœ†0ï'+Álê^olÊHìf>£>æP†êâÃ£\0—oæ9(Õ1Vy‘Z/Ë&Ýo×çWQq£•‰v½Éâœ#q[	ñ‹1 %1“Ñšön—ìºËæCN¢öÑ¦Ëóéõ,Áp¦m`ˆÊñ¾ùól½C*\n†Þ^°Ã‘ ól—âõP{\n°Ÿ„K…fJ¢h	´&\0ÈÎ ¿°ò2¤t>¬{ñ\$ãgþØ¢†)ÃBÔ5¨2,\"œ\$ò{ç†LbNK§•’<çâV-€d-°V.ocû%ªõ`†H@Ø`Æ}àÆ”æµ	ñBam’GcD\$Þâ’¦è•ãpN¾gçF®à¨ÀZ\r:úbDÞmW%mzvr¬’E¸\"â2C)j\$'4Ä'8œî°jQ–G%v6#ºI2€pà=Îš}ìÈ¿¨ð©ï…]åŽ4 A'°T\n\n7ã03â‚ÃhÆØók©®)zó€«ío)ß#®åbŽð×Ð^™Åœ¾kÃû3¤\$•3B3FÂÐ„Q54RÎüBjœ)ŒË5¹3bI3:FŠI&Ffpó‰ý7kVì8ò+<L/c9/%9‚.¬ˆf‚\0‰ ô(Id\réh#æhàÍDKÎX1ëC6£l1à‚K“ÊùÞ!Bé!\0Ëƒ+3d1ó>µ¢T`Høõ+´I3ë=@àyŒ?pI ‚Õ¢²‚VI¢6w\nd +àÜ";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­«¯[5 Œ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’¼ ä:iSï‰Ê»¥\"ešH9³Û¼>+âü‰E½²î»æ45\$*º³\0£\"š€MÛw¨—ç3C '°Ö8án3k˜É²£8òÅ¾¢ê­ò¹*i[Xú-â Ê3#ªRÃØ:Œ P–Ù¿ð´Ã­N11@Öœã:3Äè®D¸Û¬Î9W\0§HŒIŠ7.xBÞ¼¥c[7Gc]\"«7Ôa2mJÃ<¦)c‰©9F5;n(@9Œu3Á_¶%L¼LÎÑÁÛk“2ÊR£…jÜLÍÈð*ømÁk —*ïŠ{êc\r)ÃÁî“<«±ðÀP Ù6 Î4Ž£hß—Õc…\"½êxŠ<sÖ.op÷W7ñvÝ3nÑ#ŽÙ,\$îIKÓ5#Z7ŒÃ2€…&ùé6¾¢ Þ×á­wLŽ£ÆÂŽc65ü½2\$#ò˜ã\nî|w˜Ú»ác(P9…)¹†DË\n»Gu¡\0†)ŠB2`=Sœô,Áp 	e°6EÜzƒ‘1)Õ­0Âç¡à+Œà ×ŽtVªTå	H«µ4ƒ8 *4…'¸Ôâš.aÈ'£RŸSùLU\$70è@¬U™ÇeA¬0ªò’†C(jGÁÑîSls“šu ç¤]¨qÏâm!Ì9‡u\"»ƒ+¤\r% 2@\\ŸºP*\rB¨uÔ\\\$QêEI©X²¦ÒœSÊ€3ª D©ò§U.uW˜p­\nb¶3Jä“£ù\nQO4ä¡PÛáé)!”5 Ö[ÔSa¹ˆê\n¹Ù+F²\n’„1Ãpi8Æ<¼ÁTF‰MÁ8»ÊÓ&÷ÓYG3aÐÎ®‘BæŸ	P@€(€¡+|±:À ¦  æGßsðv¢¥ù™`ÜL‹›‘ÄìžŸöîVŒêc—á¼¥K•Š\\ \nÑj[Bµ%\nH:AdÜ\$‘òiÁ\0dG&¸¥LöˆpH,€9” Ì‰,\"P°Í?PÆ±æ}\0 ¡À0ÇU„cÁ’äÄ(ð¦&Á¾/Ùlf”rCšît…jrr¢#¢¯|ÿNºT­H9ÿ*ÍèŠÁx,×7kFa\n¾	„ÈÚšÓhLB0T˜ê™w×JRq2¡‚g¥…‚IsŽ³\\5±¦Ù-È9¬9à*ƒ”°ÞŽ[N1Ä¨[3£\\—Úý\ráÀ©†SXä›QFŠD*¿„†®—ØpeŒ¹‘1\"’œåëŠqj1½¥²N}\0PLbòå7’’(ŽÃ‚-ï½øÍCµ5©cŽ(%=(Ú¢\nJ	 bc¶±Ø&ƒ„í´²qŽÚ¸÷\\U•;æ›ç6‚±ÿ f,Y²ñ† Ca~‚4‚¥’¶Š'‘L{“(]’Þb^9¬»Ì¡ÖúÖX5i))¹n—Ò(ËÂ™d!’¢Ò²x°c+!’ÎÛ×4Ÿ•§ˆî@T°Ø ƒÃK¾K¸ÚPîGV“]½¥ú°4H³%0©s\rý¼­£¾”ŠwfÁPžUÂÿ™=a6õ’³[%e`T6LÄ-Ìgae’\"˜Ám„ƒfošs­dDöI/¬A\"Ñ«™AI…—{Žfy¢-Ñ”\"D\n°³jÉÓÊv Aa P25*ˆ+¾ŸŒÝÕyÐ~ƒKA¨ÆØ5ÒæŠtH8n!«¸•õæEƒ’ò]ÚA65#fd¦v+G¡MBÜýf›2¸…|±×¹Ÿàí..åeAàf³©GÎç-±Á=5ô‹‰ÒÓK½¦J>›)(SOèE¢õ&g@«é#U¥C—Õð³MífMå¡cš÷U/“TJ²Õ&@›çýLn3¦ŠhÄÞäŠ}ªìÉ=«4 ;–ðŒ…É‘(®–xå²¡º,¾ë:ÆÚ™MpèmuaCÄi,‡#:€¸eGN¯BÂ¢†\nc(Þ,íáìáœŒ-ëš“¶\0 †w¨Ù©Î7¼‰0³¹ŒO‘Ê!Kèø×V(ZÄ´T0GI+˜Go»IÂé+¡t×RV\rb¦Ò¶ÅE³În§2]gµ1˜ÛgÌKÚ¥3ð7Û-ôNzJßoA E:U¿ˆBÛNº~”…IùsDÇ¥K—Y’Ze+´sËÂ‚ÄÞì±N3[^	E€X¡¦ÅÜÞõÜÙnZ°Œ†Ò®ÞN©wÃRRv»RrÎÚ	8[\r¢¶w×ãü¯€ £RðS„;ˆµ.Ç¥ÛŽS«¯ÖÛ£àÃ×@õÖ¡—UI_]ön¿Ö8þ¦ú©€pÞ—¦ôw]IX)o®üvýïþ	å2a Ìœ™½æ»nú‚´;jÝ1±5ŽÆÓ 'ë¾?µõ~öÃ=?‡NkOËö~ŸèØ:»C~eø Ž*¬pWüNœžŠÄ~ªÊ\r‰Zúl¬Å ®´÷.¬:àäÄC Ô€Æ” @ €ô_Ç6†ª6€Ü …ÒE„\\1€Â’ãl`É\$\rg¸&0*\$14’ïÂâ[Éo'¸=öÇàèÈ)È)Oylæd•IJº0\0Åoùn-Î¢;ë’ñçXáªó*öËk&ËÅ¶'.ÀZl8êŒ\"œ®˜ÿîc¨®¸‚%¢0¼·ë‚·dêâ,¤ÿÏOl¢À0¾øÃ?PÔë¬¡ëMkD;ñ°àu†ö	b´¿ºŽ£Ëlô1\"N2¦Œ®IÚ3 ä+nbYo±ÎžNÌšû,OÇ(\"e&Vð1§…¶ ØˆACQbáÑ\\\rnûe”¸q‘iÑqg[\n\nÜHƒ”Nã–%îÚ+àR'X=‹`ø­ôgêQ|ùp0¥P‚1±jZpÌoqÇQŒocãK_®¦q€ö-õF ÷ñ`Ýãgº©qNtÆâ5o¢ê…‘XXR1Ù!ñÖqŠÂGqÀ.b²äºËQ ’2ÊÄL'ò;\$+#L®HQèùˆ\"?`æ3køýäÞ„ä”#îhË‘#Vî¦l^`Ì¸kŠ)Cl§N~/í'£³'è(C2¶r‹'Æ(\0Ë)Mòx¬³ë%nTâ)®]­*LöèNhØ¯ÚÓÅæçd1,MŽÐ²Ìýoï,n,Y@Øjï‰.SŠŒc¦>5©\nsIôÇ¾AÂnÊšãª\n=§Èšàª\n€Œ p3âð\"ãÆÚ¯ÔªÇ>?ò˜ûçÈU“*'ó/2s4X³,ßB<\$D\$‚@·~dÅL%âbê\$j<³!/Ì–MaBï àŽ\\0òXKÂ~¦óp:£Ð8&;±ƒ0©Þšñž’ñõB(qBn;z@;°k2\rå<s®¨§4)	ò7ÅÊÒ²µè¸ÊE¨ãÎêçPÝ Ø0Ãˆ²’—î°j	.F£6”Ob•l&ã„j'Â,çä[Î9°ÌXcŠÅÃV5¢~ªöÞçÎ0HºëÓèýb\r²eñ-Ðt—ËÜ Öh,ô	©ÈÐàš¥Æºòl4jÎTn†ÆH†‚¿2_Ë Æ¬”	àáAÌqd‚?&Ñhˆñ9&À”5e²Ê³ÛEÓà_Kž¡³ð=ü+hJ¦‚-aIÒjÄÂ*´&m+Œ¹Á8+ Û&Ã|\"H˜dr3¬ò-af»\0à\0t\r Ú";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Æè :T‰'03Îâ„ºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äá=ã(Ú×%lN(@°;~€­N»ŽÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xDÓL#(é'ãh5„Að’Õ³\rÈèã|ù£“pÐ7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ:c½ã”zõÄâ«’®\r[.ïSÊ2à¹B(Ý¤Éê…Ð£è	cxÙÃ#ZÏI\$Ã\\—^¾Bxé£KÐ\"Iƒê6#c³Î:Œ U ´\0PŒŒëØ ŒòZGop¸È4£‰Êê5¢­4:/ÍÈëM5®ºàˆŠ	ÈÕ©ïj\"‰ /-¬„ WEN20¥C…¬”!‚KE	€PÅºÛavÓõloJU+Ò5ÅN€„:£H†I\"5Ù[•´¹\0 Ê2ÌÀçjÎã„ÁT½ÙÔO“å88Ù‹f	¾@)åÀPáHÛ6„NÃ±)“7ŒÃ2Ò7©h—„e8¨7²2#uC¾#¨Æ1¦˜ÍgáCxÎ„abž9*F„ÀKBËƒsn2…˜R–ëù\"‚!ŠbŒ§­ˆ‚HXÒÊ\r´;h3„4À6Ùüš–”1kÞ’\ršïÅØ)¿4™º­è@ Œ›êQ¹k*ö2%ÅIrhD¤N£\"Ëd£óäüº&CYn(…F ]/Â,¢íélw¦hÈæ9Žó\n2\\–2rÜ•&IÒ„¥*JÒÀï-v2èå/Ì3Ý2ÌãLÓ5ÄÌÔÞ“ŠsN¬å<‘äöŸSùHP&B(dˆÉÉHMŠÐˆVá±fçÈÅ©¢n„ÃHf%¡÷?—`s<E'Åt\0	Á:\\á’ PRL'*Gñožã6T1\rÐü”c0¬”˜u\r§ )¢ØÔJ†.as“Ò~N\\ÒG„òÖô\nA-	\$<<˜‚v¡L‚˜#ÊÑšT–V¡ïs!Éº÷âÖ	™£#À€1«vnSÍ!7#&j¢xS\n‹ô9WJM	‹ór+Í®…(P‹‰HDžH“´–Ê,A¸3’AÏ”aMB><­ÊB\$Ò˜1G2eÌq– a*Cr¡N`#j69ÇVn‘sZ\$!t3ÌXŠ*Þ	á8P T *i‚\0ˆB`E›@('ˆ&‚¸œ³œŒÅ´@J²úA³q)– ©9˜ë74' çÎ@Ãˆ’ó\$'|êfŠŽ{ˆE.ƒÉs–èL¹;1tG´Æ<Ìd1.elÁ±ú2ˆÑ)22QÒ\r€ ¬a‹5ÅÀõ‘¬J%JTPá\r”ý	¡t0)ýé\0Ê`Û¸:>h°‘”ÓZ­fŒö¥-¼‡¥ªÐùÔ4(°Ì3B(!Õe¬–jÍ	”<äô2¨S,CºTFÑ*…€îs!c¬è”rÍü‘TŠ~µ1Óš¦aB/e™%ÀÆ«ç¸mc¨Ã*öfºŠ)’%PÖ'D¶œÙAHÛ…RcMj#G-	#¸·Â T!\$àÄÛR1á½Læ}UÉhG<ì¤¢NiÐµ¢°\0¼\\#eÝÀ]=˜ÆäÞÕmÈ‘ˆ\r©¨†_áÙ²Gý‰6CÖE—:ûNqbáÖ M•a7†Ý¬È†o­Q‰pÇ@îDB©\"(Ç,›0ò>·	¨½Ø¤B P\$)”§Ó\"xÌ	1Ñr§õø—¡	YÑ€ÑxØ†¬8x­Øt;ç<ÓV· HÊ.\"\nA¥	\\DSØh/ÅÕUºænç‚ªU—1ÑQ#¦ua«ÁXòˆ®y6«ƒNAD0+\"^²õ“ÎHnp•.ô^¬}E+kÊ·4‡U?”Ë–[Ç«‹‘¢[:Ë}KDvÁÎEGrÃ\n;Ëä9ä¼—|ñÎ¹>NÂe‹PNÍêü€¯ìÅ‘CN^qêä7Zß]jDu±}‘ðSŸY5\rÚ'Q<€K´ÑpÓ„ì‘ãS9‰É¡”{QdÒw™C¦«£µÐeÅÏ¢®»H«š¹séãé®§>¼\r:Àº2íG­òüñ\$JŒÖÙÂî¿bfFA­¾çuba	½aº•:Ýp—2æmƒs_L«¸]vÂ×šÀÌíÇ­sÃ£mi[LjîîHæ¯EU—I©]Pˆ¦ã’#Ò.T˜ï³«‰¹àytWCÜ„\$ºš6ÏC~Áò¨¶þç°G{æxá\$¯¥t¢»ÒÍ¦ÇÑ;'—ìÎe¹kW09[ÃDlJ4Ðg7:5¡Ðs|~}:\${Ý['¤”…Ï™ ¶ƒŸ‘¾¦‘‚jÏŸõP˜u°¦›ƒIÓaùÔì^ãÌÊY»6ë{9¼nNŽK{gNç™;uÙ»;Ü¯N¶ÞYš¹fÖGÖ÷Q2eŽ²¯>ªæVâÞ´”ÂCDN€tl‚@¨¨Á–“¼³]îy_Où„ÝÌ¹÷žó]çx÷^¢î<Ï‡õ	»F^Ý–<‡®óy“y÷ÒKÁ<‡÷*Â†›Ñ²Ç½÷ý/Eü#Óý¯‚E^ùWø»ó\0PWBj¿¦ßäw>ŸF‹ì|K¯öþ¹äôÖËŠÊ\n»±w>·{œË…ààß7Ãx [¦_®‚Ç.\r\$3¼ºÁM´@¥\\ºà†?ÀØhú÷Â,,©dZGJ4FÂPˆBn¥% Œ—8:¯4o\"‚\n ¨ÀZ¤°(#âZºŽöOHÑ	‚~oê,Pßê,hDu€Ì+6a`CðÆ¢Ì;cÈz&²âîÔ«¼G¥¿æ:Ñ¢Šâ­%£¤(¦ÄJÂ ÃHDà˜\râ†80º– ÚLhæ¸ºÎ²îJËM„,BÈa‹É\rfØF–`,e,¨ØBbjìÁ\rfRNÞË0çàÞ H€ØþäBBè@\\¬’ëzr°l	§’5¥ò6¥ø´C¡-*s\r®18^£­@¹\nL+‰IéãÎ/Â\0¬cŽìh¼&.Æ0n(äÆ,¤Îf\$‡ ‚\n:Öb\n11ðî5 ¦¬kB%XC ÈBF†_+´BI@1*Â>(2\0";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iOÀ4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î @´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xDÖLðé)ãØ0ÃXD	#hà&c xŒ!óÔCãBòÐ#	BB)Š.²¨–ŠÍSzéCÓÀÓ0´«¶4Ê`©ŽP@è¯ËÂô¾&â§T¯+Ú\$Ö.ü',ƒ²0ÄÑàÞƒŒ\0Ä<ª€HK`Øj¢!ãbH¶?oíf\r´\r4+XÇ'ÚÐ| 0Ž£`è6C`êý\nuä~’/Â3u½\0P‚3Œò{x?B¾¬ëÜ8ÜàPž9/V‚ô”¢¨Ò- ºpP˜ÄŒïÍDÐ<–½ð]Ïh¦¥3ÂO\"1H	€PÂÍ0®ÛkXUu›J¹Fî8UVKê1¿18‡'ÔyÄLÙçÉî^¹Ç\0P Í³¬,ú8-“ 9éƒ–Œ©†`º¯Úcth+óŽ^õÅ²’ ã0ÌéI)hŠÂ?cz1\$.[1Œl8Íp„tˆ9…\0åºŒ,jÖpö=Þ*@æ¥¢ Þ5¢¡\0†)ŠB2œ’Ü£NDÊÖÎ&»œ\r/#ì°‹’¡µCU<\"Ü)û¾òü‹)<µc2ÐÑ&£pÎ3Ä9p-ËÌA˜ÉÉòˆD£OyØÝøT\nú°òo/ÁpA(äš¦)sÜæiÒ©æŽ„e‚*Ãý'ŒŸ'J”¨•’ÂZKÝ/<d’“\"qLá¹4¦³Î›“‚rN‰Ù<'¤øŸ”<{J£(„4¢–	¡'.QÄ.4Œ’B<%¡0œrvyÏøeWF`Ã˜\"B\\Èù+4ÅU§ÀâHzIEIç‹PœaÎù><D„òTØz\0P	@†6¢\\8((À¤˜µ~Š	-jŒ)ª6¹r\$8ãpDÏó \nŽ™RÑ\rÐb<lç¨¤°òdIŠÁ\$kŽ\"BRjÒ{\0<„t‚×‰£ t?\$”1¬ãŽj\rQ™p°ð*FÈÜËÏK¤Š!<)…G@œñIî! 20¸{tÅé'¥PÒm‹Ó´\rÄx3ª…ñ\0Seä”Ñ¬ä¾	„`xl ÙD‚¤Td.!?4ØK#ñE)Œ‡“~{ßzIFå[1pž\0U\n …@ŠÀ§@D¡0\"ÎâÞ‡‰äYêÞ|I äDÐÑÏaï	‰)¦…^e©ˆ“šsÂ›LUñT×Ñ']C\0T¨\rªäÂ¡`Ž#;sèÖÉr6tÞ¸i{€ó©ºJ¾Yä­hŒÈè‘SrfH#·& (+\0Ó‘¯‹\nü+(žHJ0:PòŠ&žbob™ê^Hî\"—ÓBnH¥J(ËÉz`ä´dåHì¹—UÐ¨WÊí\0ÆU¡Ñ¥\rœ“ƒ•#	°ìˆª\0ôV	œ¡ÞžX\n+*¶/á¸½¦f¬Ucˆ±„Â…4Ê’˜`v2Ý_³EYW(cÂ=.ù'˜ÂJåÉû-&yÐ°ÓC\\Œµ„¸µ†³2‘ÓÅ˜•!qe~‹A9,ÁHÈ½ƒôL´E¤†ªäZ¼‚ T!\$	DLü{qV6´Û\0Ûƒ‘•i%[]eÎàÖ\0 à‚ô–Â±–	i?-<2)~x]5×n¡<%¸{¬“ï0èD\0–ß}C­÷k˜Á_»úQo‰Œ?8¸vKb9;1.Ñj²0iOxe—¡¥'’×~±#uÏ**·ƒîo†px¤:’¹òíC®.w\r¸ãâ;h˜Wë.ŸÕ­3WÎE XŒÂBÁê:%ˆÔŽpäŠ€PW¡‹+\"¬‘T°>#É7‡ªT/w±ê‘Q¬Ò0Î–h¼VT‹‘rÑ—	É0¶yYªtª¯é®G¤é…ë¾Í¯¦E]-·Aœ™N1ÈÊv!Zºmu“‘±.˜6Ù%¦k&•&mªêàE£XZw:Ÿªz³ˆ8°	@µ’³\n‹Ú’¡¥¶ÝëƒwBg¾¨~:å‹êòÐÒ¬™ÊÓ¬¶«R¥¢Ó,•­+87 P¹¨ eT@§`Ÿª=LâaÒÐ–ø–íö¶bÉãÊ{šjMÉI7ˆÓÕYö6ºT7˜Þ»ßwe=í]w–ÌÝáo\"{ˆ‚¸à¨Fÿa…\"ÛÓ 'ƒÜnOîâÂ-ˆœVÄp»Žö˜Zñ\\õÀ´¡žÓ†Vë²Ù®ä\\¯–·]úêác´Ú‰\$†YvmÈÑS:˜*«²w\r¢RÎ!‹(9—¤mÎQ2Ç¿+6Zö”U¼³ëjžcÐ‹d¿…¸ÖVž—£\rƒte7d·•^Ij5\röj[+¢Dã~µÖÃ®-<ë¹‚¬Ôüâo—®êü!¸gš‚æ®DD_®FˆÒú0è\\˜E¼÷‘Éž+R¾ÌøÍ¡’¾!ÔÇÐäË®­úb`\\²…Çß¡		š*(¥³Ñ›‹Â|Ÿ2â¼'Àé÷Wîùç7.þ`Ž®úÇçÉš\ríä2*FÕ~/i¬~7å|Ïœ†U=_4å#\"‰Ú|/(uk§ï©¯9Ì¿\"çü˜ê‘6¿)~ñ§øìü?­@¨ò}Ô}ƒøÚ\0Ö£B4£Äÿ„”üì¦ýãw\0Oð%oõ\0ê¨AO¯î@0 @\$¹é:¶Hè÷-&µhè÷­èp<y­úóÏˆ>åè0OžjÐDEf§Í\0òÅ~\n¯ûÙßŽ\"Z	t?\$hø\\Hë6£(dùbüqOªÅî  ŒþÀ° §'»\nbÊíbÚžX'\"âä-Ã\0}é?Âþ#ƒ\\*†—CàãÎ6W…¬À¢”1ky\r§•\rë%-€Œ#Òcœ\r€V’¢¶Ã9jðŽíxý…XEœíƒÜ£b¦XPà\n ¨ÀZ \rÃr` ÎÄÎ&dŠìÆ+ä8©ªjNB]*X©ëðjÍ6®Âž\$çZe‚öµ\$2NíÇY‚8m‹mÑÉV‘B¦#ÊŽâZEäˆ/ÐØ&Cª\rä¾8]…‚Ó©Vh`-gÞ#Ö·¢Ìç&®‰nz3^4àæ,bÊä1ÈÓhZ\$‚1(Z¢ÑÜ\$1Êc‘äéhvvƒýíSÎ›°Ü.P“ƒZ3ã(êbèr¬Ê7dÂ¯çòî1Ì\$%]…ö®ÊÍ \"Ü/\rZ%Æ  ª\\Wêã¦&ëÛÅ8o Ò.„0ÂM\\\"A†–Ò\" À‚-…0 Å˜\"Â±IPØcg†œ¢ Þ¢g¡ïô¥ê+(æ¦Ìª~ûÏÔ À §ãÐ³à‚b‰ªÖE^Œ¤,À	\0t	 š@¦\n`";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6¼#(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tr8I£…,‚I(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñGÓ”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsIÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²‘ám°‘¼rVÇqìt’¥¼@¼‘d®TÚ0Ùn9M`æ1ÜŽõþçdöt™g¤´@í.sÊé`”Ù?P±Š˜¶14tI~ØOd=*AuI‰O=/[Û„áxjzT/–]Q£„í/<#ë2P>‡m˜â”IeYg~Aà´ùÏÓ½B?Ø£š¦¡©?Z8äÒ4ÁºÖ\rã0Ì6Y8\\ÕéI g‚ Þ×· ò¶°êÃ¹a™£\0ØÃ9á`°Ý‡'öC8a< ‚	‚Uò²pu8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹39D3oçh R˜CÈ€ƒ7UZü	A~‰à*•Ênƒ2Í‹\\ñ\0‚±ÖHrl­pÈ²³VªÝ\\•ÎÉÁ<!x/& …Ù*#íøA”6pÇ‰ðŸwÈñ=\"\ncaú¡x“C­ä;(…º„ÐÂÎr69‡uš¾C(x¥[@]U hVÊá]+Å|°ÄXÐae,Åœ´”‘Z«]l‚õ¶ròàKˆ6.EÌºRì]Ñ•y•ê·ÃBø_KÔ0†³XÀM‚Ê!¹wFxÒ—ãYÄ˜Ÿ“Ø•d7‡(t@¡ùIêAÈA	„(`È1ž4³À ‚	Ah5¡&/Hxˆ*\$<™¢¢?3ÓbD¦h2Ä‰Œ\$9Us°ÑÂE	2l}ñéX*DŠ‘ÒHó™\nÂb|P\nDÈi¶U0Öx’ØÐ&#C\rÄùŒRø“QDB«,SnAHJd‚I/”2•òkšBü\rËäâ`@­ƒ‹M‘\0€3 ÞbtP™’(â-@à:ü7gÝ N`P	áL*9ÖŸQA&¢›ˆ Dr5¦U¹ë(’š …Õ5qÍÂ œ¸‹^ƒ T\nÔ‹Mi\rt3jÉÍéù\r;Œ\rÏñu†õŒù\0b\r!œ/à™U\r©¬6ŠÐ#@ ùª\\]K5¤LŠ«UÁüF­e—‘H%‡HƒxÎÄºˆQN×€åM¤'„à@B€D!P\"€«š E	ê”z¤åâ\n”^zß[ýŒ±Â¸î»SØ{¡\0Š9¢á&!HPDµó¡ð–‰=R>õÝuSU½N0gDÅ…öå±ùð+¡\$Ã¥ïµ8ÿO&ì<@X¾½Œ……ë+e¥P–ªÒ a÷Âžß1f²9ÄP¶Â&bÁ“TmgD<Mchf'xPžsŽ{QÄF§ß†<*%R‰á+#P‚†dsÜk(5Êm\$p¿<ÒHwƒHziÁ«‡4Ó‚˜e6ÁŒáCÞ|O™uˆ4EM„Øò]‚—?RD†–—˜C*ù6”;•F  Ø’yŽÉçVÄƒ„®ŽZAºÖ2GÛ[¡M]@(ÔÏ4µ¾¸	í±;Üíáb[#ùCEjœï«	‹Ôì8A©GVGó;LZ©X‘ñ^^D8º=‚l¼‹Ý&/2ÙXm‚&‚ŸµÖ¿ê5ƒ\$7FôqÓ\n!„€ATVPi7/™[ÐßRMðp¶š3¼‚Á¯5‹([¼T“^x Þæm4näèÁ˜¡3x.?Ótz[‚SóÀˆ!#è A9&¦'A…0æ&vï}|ñwú€à\$ˆÃ|Aˆ‰\0ä‚00Ò*°wD”ˆ¢•wŸh.%Rêgš\"rIX÷8Lé¶OÑ9óœ×&„-4(§d–Xâ“[ˆrÀ®C~mAn‘ùï^0\\/ª¦è_ØðåÑ®‘Ê YX­l|€Aï^¢Ê¿ b sŠBð9EŠS¬dsa9Dp»@5Þlƒ dŒ£#d¬žšà“çÃpk=dŒ›y	&B9„²¢äÜ‰?%ç&¡–3c”h³ØðFp\$~‡eÆ7ì8g´ó>Û/¯ˆ^—¬88AåÝI/7tg	§fŽL#Ò(åÐŽkgd_„ÊSKfýU/ö>ÔlÊOï‘ÿÃ÷æúGÑ°ìtLé4~÷^·öéNÒ™Ù¤ùoúAÏÂòR\"0\r¤`ì\"uïbÁOæøpÀ:Ò¥\"¡&ît¢¥ÎOL\0Œ<ÂO~ÄD±/ˆ¿Ð4À,ðþBøLÏ¸vo*öPP{LòÖçFÖp^uðVrP&þ0^¡\"ÊØ\"Â*ŠLvM˜×®¢ð.àÊf_.Æ1k~¸+†bp!Ð@ÔP¨Ô®\0÷\"Å	p´ÔbäM±ð¾ô1¡xÍ8#í< ª\\cæô\"´22ä–éhL Å(ŽÂôLîcD,ê÷M:ÓïaVþ¡xD#:ãhg#F\"¾äØ0þ0‘ãj^ª~¿¸\\mÔ&h\$ÍfÐÆ#\nÇKð²añ[¯,öpÎö¡Ðí€e°k1g<Íðï3Ãó0Ë\nOâ?q†j¡¦.¡jAÈC(Á^ÁÊcô Ve¡ÊÃg4:0„RðŠùg¡§§b9k!£Ùg'§¤r¦®IÍ+ç\\ Èò…\0Ç(JcñüdF¬¥SÌI \$ƒ ’fXÄáým*Lé¢`Ácì\nñ‹/[#%#pŒÀði/·#R9qaÒC%2G#C\$B?\$–0ÊÚ…\0Hdþ¢äNP[#ê^÷a~’vH‹Ø£cÔ½ñ(Â?'})2~Irg(¥)*¡'-\\Õp­±~×m_Ðu\$ÞÕAÖU)£Û,dé-nÑ Ñé-2ÊîòrJj¢x*í Nòu*2‚Î\"9*…%‘ÿ0Í­±†		\r\r1ìV'vw¡3á\\v@Ó*wÍ*á,ðª\\GÎ%ˆòÄò:nnAÏ±®/ÒPL‡ÞmŠ,±*ÜAÓZç6°ãÇFóïCà†€ä\r€V¬\0Ò`Ö²´”iƒ†ð\r Ìf9€Œµ%êª¦IŽ³`ª\n€Œ p¢ŠŠŠ<C˜ážxxFÙ4²AŠöï|L(j,,*æ®ª,à	³³;qô9Ãï2l™çT2#&âK*„\nÇz'ó^1À˜³ÓÞ<tB³àÚY£X8/!\nïjÌÁ9§œ\$Ó”§8Q~øÏ_?¢0aÊp4w?Žnâ¢8ŽÑ%ÓõG‘L÷Å ¨9#l7CR5kBª¼\ràà€ÒYÄ’ÔhE-ßMí“ŠkïÛCæÞqîÇ%I/öÒM!N\"ì°*è3B¥\0\nÀÂ`ê ÛC¡\0Â„’‹òG\rF'¦Ù(bVxã¦cä@¨Tp8&œG†\$è'¨sÐH›Nô€p\"ëTT‚Ò'!HôË&k#a#o˜Ñ.c*G+Ù/DxñRôUB0@";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûäèAðaÚL«ùUÇËü<û‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo¹ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯ Ê9Ãxä3…ã(Ýd(Ü9#}–7Ã\rŽ2Ž•¾æŒ#pÖÂHÚ87#m”:xÂDaÌãã#|àmx¦(‰ƒKŠ sDÕ6K´ùØP–‘fZBOif@!…êDÃÏì^†XrVÌEKÚS‘‰‰I	#7•\nÆQÒªþKÀ3’þ^’‡YRL¹4|u‘äÉØS¯³ð\"Vê6\0ì0ƒ¨Ê¿…ÚAÌÈ9Pv'û.ƒÀÈc¤A‘1‘TT&%ªJeY“¿DCøý¬ØtgÆùBLœªÌr€ zÈŸ–«š×ŽcºðßiT–”ÎOºÏMÒ}'‰á«ý&vE!ÖS‘†+É \\¯/Ì¦u€Àx\$º[K«ù:\\Aª1‘ÄàðNØ°ÌCJcxé'Ø`·íZQô=\"¯R|ç)ËsF•¦Z\0äÓµ!¬×ã0Ì6XWå-L,Îé6AB ÞÙ\r¶èò¶xê1Œmàæ3gá\0Ø7Œï æ7Ã—ÖC8a<€‚‚Uä°Cpu8  9‚“ža»b@™„0¦‚1Í(@‹\0\\{H	\naF%ÙŽÁFJZCè…ï·À%_ä\n†±oÐÌ±ŸbÐ< € ¬„ŸàcZK@2,0@«r°VEQpE¤q g]+¬çˆC*!IË—c¢ŒFAóÜ‡kßUHn§^PBhag98ÔÃºÆ^A”<\0Ò«Ã\$‰¡W«f­Uº¹Wjõ_À…†±V:ÉYqÑg-¤Ö¡ËZëd-°Ø·Vúá\\k•sÅ5ØUrØ\rÅy®àÂÍzú6k\rô†åÏbº%IíFHUÉBI\nD‹Í0P	A óÒAT,è%1Ø.P@!(\"âÈG‹<ÀF%}\n¨%#.UM}·¡\"Sª#Å\$u”²h¡	‘7A”^â@vEáEÆÈF:ç¡í/ªÆT=.I/T2•älZ\nõ\rËÈãœ@«Ã‹F`€3 Þaä>•Ñ´ã¬ @ßºõ7Ç Þ‡\0JP	áL*Õü£“dÌJE¬V´²/M)‘¦Ï\rG”ÒžThõ‚î¢Ô,Pš\n]©ØR\$,_@¦ ²Þ=CTßƒsì\\½_½`@ƒHgÜ&QÃpkÍº­ÁRb-ÕäWÆh2ªŽÑð@½C‘®X…üL‹Ö-ŠcËkí…±„ðœ¨P*Pc\0D¡0\"ÙWG‘B€OBÀÊ°BV+n%i¤UQ@‘]	õ>åüAˆÿ~m¿Á	½Õ=7x‰±ã8êª'‰lý_—	â¦å\$å¨\n:?B€NO©´P]8q·>¤Ì×ž'e´f«¯	Æ\\[žïXó ¢QBôìe\\{L¬é5ÙmZYü”\nîŠTUäÂ˜ƒ¶]Lr¨¥g HŽÚ²^„NÔÏ-±0÷tbÏiM!Ñðáš8S¦ä1œPÈ~OÝ½›³|™§–çÀTi¥¢a Ê¼¸eìÛ°WrÄD¥´\$™M©¥ú,SƒšaÇx’¼––Åýôr#²ÂØ{ç®‹¢¶lÆÃUªŸ’­ËçÎÙ…8§…c)e±º`(¢r 	˜uŠ1P;DZ9´\"É*(»Év<G×¡ß²(C	\0‚Œ¬0Òo²¯6¾ˆœá^±¹Ïê–­NW_@ô\0¼2Aþ› —t€\"	u§â0ŸÚ‰ºÕvÃu=ÖG=ºjòk<¦©|w–¥°‹™|hõÑ¦ÔC³UU­Y¯DN¹¨7cV·P¾VA£ÁÝ2±R„Å¨ËÎà¡’rVKIy1!gÝb¸&BD¼ûÙ3m;ßÃBÓ¹Ú\0(+†PÅ3SÁ*ÛÅp2²'ežûÓâ•·*\n•K&[3\"@ïH0‘Cèy²'¼QuÓ\\dØÉ™S.^˜ÂcB×Hýí+•ÊÊ>Ù E´¡-¼¶™A”_˜ð„.fîG.×x[ r±tî¯7ºæIˆZ­˜ ½èF›ôæHJ¢Ó4<ã—õSÄ“údæ0S¤Ùx,ÅÁöE_<&˜±Û_n0¤“¶ŽÈ±hObíI:ÃÜ¤îèëÖìW©Í¼ß²K*G\"Õ¢€R“»ÊQ¹—ç<‹¡Rº?-éZÄÓgû‡vü¶ž´*«‹ê/Œ®ñéwgÏÞo-àXçZõ^qùëšñÓ‡ð}KÍï=¨äÜó˜Õžfêx_~ç^akË9—ãÿò}×Qù¶Ê‹œ's¾yBÊ+7|Ò¦¼µ¯>ð_KÞóŸ©•ˆ6X©WS/ý<©a¬Géòù+÷e_ã‹èYwýoÕ˜íÚ=¢–¾á%b¼¢˜f†l\$â¸*ˆM„ÀÎdÞ@ÌŸ!*L‹”pAR®4#Ávµ>%â´úïêª0òa`™†+ÂÀ â¼°1N†ýïÐ±N¼wl¤so¶'FðLzú-pü®_Ixº/ˆé.¸èp©òö/ööo|_n*Oôx?	Vüp‹	¯;\nJ«\nÍÇ7&@ŒÁ<3ØBZ‹„dç,Q;¡\"ifq#¨ûð+pÐv0üÏ,”FLíí	Fœj¨Ì:1bq0Ò ñ!'‚`\"rÎDèIKª¤ð¢ýŠ ýÄ<±D÷/–gOÜlÄì&ò÷q^CíóÌ—1V¾0Å\r\$v@­ªÄ„H(çÎXø°ñ~O¤~µéËÁ:ål´ÝqƒÑ†Na;Ñ¬FÂ=;„é‡pÌ,¼ª\rYÁ`úl¸ÌQÑoÉc±ÎBqZ>ñÙÂžª#LÇ@I PìúÐ1ÑŽlñº>Qq Ñ™†\n	Ô\roÏ²@!Ôu=«4&Ç#'RÅ¡niáL½kÛËàþcìAë¨#ÐÜÎ¦:šOøö‹°ðAjÅ\"?hK¡a%Ì[&0à€Ëºæb\0æÑä»\0†€ä\r€V¥\0Ò`Ö¤¬Æ†h£Œ}â\r Ì}eô( Œ­åÜª6IR¬ ª\n€Œ p”ˆJ<®tü>çÇX\\#&Î˜Âî®»Æ–¼\rƒ/Œc+rºK¡hafI®J2Ã0rìÖKSäã&Ab¼,âšÁ\0ræ²	ŠÉ.#Í4\nÊ\r¥Œ5ã†9nBk¤\"PZaxèŽ¬BÒ˜}¦ü8±Øé®¿/ä@Â%\rnžüAg'\$0øÓe7nŒé¦\nƒ˜7#z5ƒ\\¬àÊ¤ÀÞ\0è¯l3’wið=°®õŠŠjËîk#Bì%\"¤ñ¬õì“=†N@a8kÍ¬\nÀÂ`ê Ú/â’:×/DdÐìi©tSF¬Ð| å6Ãˆhâ~ VöÏ(÷\0Áäþf²CpãÂQFR„Lµæ¤:K^ßMÖOD<K€t#á";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–æ¹lZæ¨ã*VæŒ£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:ºø  4#²\\ýL³; •-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7áV93Ã¤ö/µ£Ü5„Að’6¿r2â:xÂ@AxÔK-;D9²¢˜¢&;Ã*H ŽÖâ’âãŠRË¶†X#­†b•c“À¼¯këxÈ ô2Zn=¬â.’6à½ãª–—±C\n¸µ£ @ô»Ê\0vÝè Î‚^wuà:.Îj6¢€\"(h—ÕpšÔ Ž­@\$Ã.Ž€Pˆ2¤ª9l%ƒ¨ÊXþ#MXÇ3\rèh‚3¸×¾O‰#*¸Š¯ìØæ:Ž@P¤€+óÊ•Êë`Ô•\"Ã¥²9CÀUyEBá¢ÌâÍ&Œ¨æ•¡¹ Ø65mk*9Œu›]„¬¯6m\r+ØäíOÃ¨÷Z‹æ|X¸D½\0Ì —ª¸höÀ4HÏ\0§gg'Â¹‚%½Þ³	.—ñr<È4³lîP†Ôã‚Ç¦B*QÏB’—\n#×\næþ Vó.Ëã\$æŒ|\$dO*9œ±ìŒ&Êã0Ì6Quøè”ÎC:þ*\rè²V7;-*:Œc>9ŒØÒÞ7¬Ô¨XÓíá³¾ãrswQCv2…˜R’!ëšl³Þéx†)ŠB5l-@•3>M}\08>XÃk)o<Õ6à@‡¡Ë\$)hôHò@g?¦UõbRpÒ3)A†MQ’ðÌXÛ)):\0€ ¨•žøcRä¤2\$@“ÃOdéRžÒÐƒ:­Uä)™÷6»Ä)IÐ—¯4äÃH.^*5z}Êá–6a¨‘’TÙ\r˜(såwPð\rñzŠPà4'”öŸSúPj;¨x\\Pƒ’SŠALFe(¥”ÂšB\nq)õB¨Õ+.R!+t¬‘€hV¬8•‘£îÒIyê®\"Dd.€HŠ( !å¬vpGƒÐ8„aä´×àb¹û?¡¤4†òÖ[S¹B#ÇÐËÅƒó(QJ;C@\$ô¹þ@\0€§ÞC‘ƒ€~„xÌ¿7’Ñ [z(c|aj²\$ä¤•’Ò^\\jW,µ –\0]ÁÝAÄÚ)&²jMb±¦'F¼…‡“ Þi–6Ä0¸®ãPjŽ0qcÇ‡\$w#¼65Ä2D®\r9©%äDÏ@¡\r‹Ù´Ša<)…I²ì¸ pí\0_#X®ëËŒñ\r(8Œ> äzOÒˆm´¸ÓPÜ‹*Ð l¾>£†‰%!öŸ`)ÞÑUDÙOØoQ‰w–ZTÙ*p[€`©1 	÷U~KÐÚ®RŒ:Ep±£\"qI:1R„<½Ø˜È¡h\\ÅQ1Sp°kár_Ìi€Äªr¶gÅwMd\rYÐëNûX:A±©â\\„¤¤Hn]nL“¸winUŠú¶Šâý´DhŽä®‘ƒÈnLk¨P’ÂÎa¦‹ó:	Þ˜9ú%É#ŽoNÅÉQµDŠm¼\"¶d¥ÜÒzbß’äpá­Ä‘ë{q\"d\rïX9ÎÔƒmPK¶á…E\"ãÊ ©q,2=%¼€Â•‹7ócK+<©©:LiÆœ^‡Õð¿K½43ÈÒ«ª2²A1U®7&‘Óhì8>´\\s–Íu¼Lüf•»!ŽÕ#È¼\\Ë%¶Â+¸úyº¶‹Ù\rÁ‹Šd Ý\rIBCn«|ÞãvžK€PÅ²e06¬ÙÒÞg×í¶Ë9}[oÅ¦ kð\"Ê’QL³§Àå¤+îZm#Ðv‡ºÖ(Qkk0!«´õƒ%Be&\0W3ºî]›g5ÓœFŽ…JQà!P*†\nË~›AÊÍÃƒ¤ÃD%Ê\"öÙ[:(%Å)¯@^S—¢é]aÍ|„„u.¢1‚Ì]2ÚS¹ÎÄÍORNà'¡;7€\\/›A.Ö\"¿Y˜R™õ¹G#ÚëS‚í}«öØØº×d¢Žöe´1²Ü·k9„€[6ÀÓWt»uÝ¸v	²ÚDSZÍKº7\nÖ[°ÂÂ-ß´7&ë\r{´’mè_ÚYÞ8¡¼;µ’bvYlx–HŸÄ0F8H—áe_JÒ€kâÍhIrÔpÔn¬OÅ­%’[oíö²ÉœpÖ\\ÖkB<gëìÒØéeeÂÌˆ&1:MAp¶CcpÇmÝ›d‰yø°Ë‹çN‘NvµG›^Höou,ÜÆn¬¶Sœ;xÉ'[ÁÝC\\bnÅ2f}ìØ6d\\k‚‹SG /†—’Wil¸Ñ\$Ë0Ðó2y9ˆtß5—G	aÍ;¡È9Ÿô‡á<aÿ3JÈW~ìûÇzÆØàÙMM’àM~>%\r\r%%ÿaMP(jDØÛ>ßdKVy¹îG®‘ÐÏ:eÁq÷`KÉ”•d5«÷wAÉvž±ð}•¾º>ôˆõ‚ñ!+ëÖ×|ÿ¢ú»‰ÄßAÛK?ðy7.¿wl½T-‡´ö>ÙÔ}“këÜßùVçßÿ¥wjªßóuÄQ?¿8ÿôß‡ÎÔÍ´”¾ÄÃpÊ\n®.(\".¾é‰¹\0ãÇ%‡pêÙ\"^ÊiÂû.²\$Œ„È„dj#~#¢PÃÃTÏP4	N]éT#Æ\"\":Ñ‚:sÇ¿€çËÈkïN#`òEéL,Xcˆ¯CÚ)iJ,ï8âƒ®·©·î^(¢ŽgÎ000ÈÐJ,îºuL¶oœ<«8ÉÐP\\lÀB@Ò[p(ùÎ›ÐÐ¸Ð•Ì_ìbøÏ´›‹¦º¦9CÀ0,ì5Pú‹Æêlê\"ý¢I‘rŽÔ›Ž†Zíæá,ÁçPßB0¿eBÂMhœ,#Î!±ßiÔMæä6c«\nÎÌúkl÷/Çüÿ\r®£ÑNþÝ‚oí”#æJeãÁ\0æXi©oúZOÏ¢<{%G‘Šøñ‚ü‘†<\0‰Ô²/H`¤CÑTú¯¶AÏ°íI;`¨í(ÿ*á1—qÄh`±³\$ô±øî›ÎlW„3Ã˜ÊÌ½°Þé±øË\rI¹ \$™:<ÑÈË¤“±\$Ë‚ÈËÑ*	„R-Q>FdœÐÎ—Î—2J¸¹Ç¡ oòß¤'#N)ÎšÈ@ÒÀä/ÌÝOÌÏ‡å\nð]eœ/åè3/È6B‚a¢'..Ô²x»ŠÞ}E‚6q€ÙÒwmó)ƒm(\$H;'EÜä&l–À(”MP+\0/ìýÏ¾Ùoê×eÖÿD× ’Á,ÍV\$€†X Øj,\r Æ\r`@Rê¨è<VÅdK2Zz#¼'£82 Ú²åÞ2§È\n ¨ÀZ\0@.(dŸ\0Î\$Ô¶¥Ð#+HÝÓ*­î ´õ2®38ÄÂ#žGdîwj\\Øó@›/ÀÌ&t\"¸Ë#ŒZ¬–	ÂÆ-‚öQCŠÉE®8Îî.ò(´£Ú€s~Z£’.ú,d²‚DÆ%Ä¨Ff\nºŒŠiJ¥2S´ªh8ÆðÍ fÎ(8ÀôcK0-NÎïEÞ ìj\"¸+aB?ÃBëSZro|µ“êì3ï'â*ÎJìÆ“ÙñW?cÂ5‚à%ã&E³¢€ÞJ¢UèÔiSúDÐó\rÊf&fZë®@0¸í¦>IÎæFo’CVsDf¢²„g\"‚m=â^>“êéËÀ<¤\$`ê Ú@ŸBE<ãÜ\"Ðx”…+ÐH<t €æn\0¨lÓæ¶ðÀI3ô#Êj>CíCïhu«W3ÃÍB\$ÌÉhŠ\"¤p j€EK,Ì£\n2)Dº‡\\5„&";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ìb’²OcÜ†JPÊ™ËÐÒa•hkø:#‚HÉ\$Ì#\"\"(iãúÀ¼¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±Z†ÚŒ#šH<É#(Úæ¡®\$*ùC›¶0Êb¸Â1 î¦¸ TXÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€Pxî\rpÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ñÐÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—JI˜èã}„b7¥-R	'˜£#¥iªÿÊœœ¹i\\æ1«*:=¶(ê:Ž@P¬¯áè8I²uÚ£¶²OlvÐ'+Ã­ª4¥r˜J”ŒCÊVÝiÝ‰oÌ‚ÆD²(‡ ÈCrLìBë[\rÉä„»Î³0Ê3#¨ØŽÃØ:È¢\\Ã¨ÝbâìlRÈ‹Iû–º¸˜“š»XÌˆ‚3%ñ2PÃŒ±3•	\ri(@ÂŒé^ŽDøËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.›{3É•Å¯l²\"œÁ); Ô=/Î¶6»›&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ms›¶C^/‡Ú,Ê\nì¥ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæëYœðÂ3ÆŠ*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–2:Yî:ŒË²v!º@à®Œ·7-Ì#on’7ƒ8ÈšŠŒàÝš„‹Ž:À3¨@ Œ²ëkãÚ\r?P\n­HC:\n±W9eª“—	^*%Lâ2ÒÈûÔ3ÏYì.b¢`Ic™2äÝ\$œuÀÓÅ?­é¡·þ“ëP\n	B(eÔSñQ¡ÉG©Å\$”¢\0RðáMe8@”ú¡|ê‘º%úªÕj¯*ªÄ…hOœá*\$\r™6Bö¿‰¨Stˆ	X“òˆ÷Òøt\r&y’>a‹ùÂ?Ðé\"Æ’ŠP]ù@\$G\n™#hfÈ5¶“²AUwd]Þ§†ÂêË½XD›“’vOS¢)8nøá4{Ã£ÈyQ8 RjH y3G\\4•ÂœEIšµ6EM(Íƒ1L'¯Áùsbpƒ/WÄÙ­‚8MB€O\naP¸C¸lÊK)²eä˜¢äìÏäN;ÅðƒÊS®’ÚA8’p3rYß¨nC¡h@ ÊM\\p h…Öòbµ‰ÀhÏ¤ÓÃJw0TŽÅl¨ªvQßL²•ÈâPŒ]ƒ)x(¤1(\0§êa b\"á8P T´L@Š-KÔ—†Ô¶”ÂÙK„†ÒtŒLÙÊE71‰…cò~ÍŽ'é¼'†Ù¸EÃkáZGŒò·s˜F#„‡˜Í¥'VÐš`eD\rGñ¦d—Sn\rö«8RX1‘\n1Ñ›´‘Ù\r+pÂœÒLó´K8ˆ2 H–¬£œuŽêZo‘`‚IÓ³¾ZÁ± Z†v—)‰9‹îˆSC[+hS\r\$(/µNÀÒ,ZX„­<¼¦¼yª<…Ž-¬ƒ¶BjMÖ5k#Ä(”šPÊÖ’Ô±æ\r¹–0ðdSY2¶å«®\"ŠaÌ„ü¾×ðÝÌ’áž…†W\\Ië\nÈ.é¸†‘`©tÈáÇ¬\n±Ø¬ª Éz1n\\:õ£r›!CUŒ7º0È´8E3Ëø‹5D®…Þ­Ûdtd*†®!±qÈ@@Ã™¬ovrƒ¢ìðr\$@”‚ðA…¡^¤Ê™¢Å0‘]€ŸœS¬¼L«ßin\nL€œ>C\\ñî˜‘b|8Gä¨eb¼7b_	Œ‘Âi!‘¥·…Œ‰TöÄ¦]xá=‚]\$,!³c3½‰_À8(WCYržUÆ‰–ò^c\"‘Ôb\r\ráÜ‹”‚gi0&G37ŒæKgvw6xÈÔ&¸ž	¨V>é:‚Ð@„8ˆ+;Xlë?1–f9LÕ]<CSéÁÀ(\"¾uºôlÁ,FD¿Ç²½œÊ–‡*Kˆ ¢¨ókÌU¸]2L9YôE'õšt#‹‚L·5ÓÍQ;õTô7ó‰­Ž+ä­Ž]¤Ý{±Vîºk˜³e:]Lmn+gR}¹œïYÙŒQ‹Q¬w­¸[âèbô§tÓLuîß·Ûf3'÷¢\$DÔ{ÐPÎ	X)\\{Â®µYíTª¥Nªí¨ƒ¢~j­OjÖi†½{Äªÿ×‘e¶kM‘UZÕ¥;›Jôñn9Èžû^l‰íÞ\\–s/eî¾‹+ãWi†tÍÙ:œ˜ó7Ìóç5ÄÜßÆòÎõíÊ¡70PÎ=QvK¡+¦ÜíëÆú•Ë¹·=Þò]{p-Eç^â½ú¿bí,(¬D¢¼ò1ü˜Ä©|Æ`ÔŽ³Õ#D É—«u££Ö›Ï³ªÙãQÁ8ýìÝ’:kÑ,îqé˜n•Õ(bf¸†ŽØr·Q·å%;§|È­;_Õ÷½±ôû¨U_Lµy'HÐ+QÀ]9|ÈÉµ¼#[ûuT=×¨\$¤Öù{ÿƒìv§¾_ÎäÏ‹òïÓY‡Õ£J4–æ†Û»0ÛÛ˜íŸ†SCIÐ½u“Ÿ£oYTýï>½èÛiuÕÌþG&ciž|Æ±Ì?'ëã7ûÿ66ÝÏ¢ÿÚü¯ööÆÞyƒ´îö‹LcnÖ¯Z‹ Ë§FÞ®½P(%‚8åBðä&bø>åf³âg¯l\nŽêüî_MÏeÂY‡4î°R»«zºâð»/„Ùðp»N)ã/ì·Ë¥«òº¸YtH¯ž­â¿N£\ncß	gzë°C`ù\"þ3€æ äò\nLÛ#!bfŠëjY‚deâ4p*cPÒ¬[/É	¾\$¦’âéÚ\r'FÐÅâvcT_âúú­,21×.4Þì´]¤*oÚõ †Y€Ø`Ö#ÂBi#ú8M¼;#øH)¼!L’9\rbòÉêV'Ø bF‚ê*\n€Œ pEçêwäê&¬P#ï€Œ¢8Çiüo‚Ù,´è±v8£…¡_âV÷¢0#B‚#âBóŒ¨*†«o@	¥h\r ÌÂfÞ(Jh\"ÂFGËî>cø#ÇÎ\0E#SQD&QIñ°h2êR‘&Ú7€èI\$ŒÎOÄ	Œä‹¤l˜ÀÊbä´dÁ&A‹f#£¬î(\"æØ‹!Ï\"íb%Äøfh8FÀîïi\"½r&(¯t8P­\"F‚*c8‚bFÈ@àŒEµ«#£‚íe¨\"ÆC\rGd(ª–M-8N­²j†n¦t·#ý(¤êgRˆ\nÃ*mÌp<\$¾Yä¦¦btbB¥&;`ØJ´_eü)‚äÐÀº¢V/ ˜2Ã\"ñð*d¶»BÇ .pÇ•#†\"Åê¼Xä©\",ä.~.C|Þ¥€%Db	\0@š	 t\n`¦";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B°pè»#Ã+rç·«dn(!LŠ.7:Ccž¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á’`xŒ!óìAƒ Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒxÂ\nÊ‚\0<C êåˆ­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-¹@P‚:¬‹`ÖŸZlpÊ3#¨ØéËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË:Cž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|\0002…©˜Ø	ØòÜ#z0¹Ã0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†:yæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iH¨4b\rÌÒR¾8‚2aHW.1Î(3€ÊR¤­,(³øÉ8Á÷ÍD¥&05ºVÀØŽ—m¶Ï0Îôx²*,Ã\rË:’VTC-è´)†üŸ¤…*­ô°–ƒ¢\\KÉ1&DÌrhMIÈ2¦Ò–œ’tZ‰Ý<§¶ ŸÚ²„)h¡õ¨¢è£Tzd¢›ãJiÝù;5f0é €ä’¡›í}áÑ‘BvMˆÀm8aÙ¶ŒxC\"‘€\"””—æSÂ°>eÃÅóÜ|b§‰ä‚4…\0laB„ü šàPQAIM -Éß”²æþœ§u.­ÿ?”ˆ¾H0n‡fD9®÷‚JÊy/&&I›JO×¹ï)½Erúï_¹KG¡~hºDCËz HPàÞÑ]ÂŽTÄø8®sÐƒ‘žzïf=™’˜Òr––FŠ—2iù¤lŠ‹€ÒîšCÍð”2ãñŒ\rÎ\\¼9JN‰á>>…2-ŸfPœI0gUdzG2üOŸ€iCÐÇ@Ödˆá&äˆ’I’@TÀL¤™«¦‚ PB)A5ˆ†]%ÂSšÈÀ¥”…¸ƒ n_†P#´P¾ZNT(@‚-!\"„À‹JJËIri7Åæfƒ’5Fá2l®‚Üº©ãƒBl|ê’Ö \"\$u¤‘t*™õ9xN¡Õ¢¨ƒA%-*¬ÇR0ô\n{Smì	èºj»8Œí¶ÉWRP\rí09žc¬›ài.Ôp)£õTÚáì‘ÀéEÐ`A£„rŒd`¢¸\$îîX\r„±¡àOÉpTðTbg‡R\0¨]¦ê)\r!é!2Ê\n¤§ì\"Kš— ª«¬i­\" ò^5¤R*ÁY*Eb¬ìú¹0æ0–µ–jan\$Ö\"d†„ÓL[Õ©Èµ	¹Z._hÐ¸y…¼*—TÍÓ7·U\0¤’\"9’†dp¥±øã]e È°P¤¶ ú´m¬!¥Ãzz‘™Ë¤áP „0%­·?§¸ÕÊæŠIX… 2’r2oì'…·¬P@Ê¾1A‘b)F`Yncë`3D#¤Â[—ÄF.\0e`ˆL8¦KbÌ\\1†2ÄÆ,¡Å¼oŽbéˆ)Œ¥z2¹¼iññ<p8z{ãÐé‹Iæ/	`»‚«Šò¾?Æ¤%†¨„‰“)Ò—!Ýµ””œHÈé¤º~gfb	T¨dÖzcAHR0A\\2†*&B¨±¹–!ÿ?A}’äžß*²jÃ6-á!–…b³IÙ1¶mjòŠ’RÈ…0¡×T8ó@Vª›Qê¥nKÙ‹‡ºµ\$Œó­±.š¶²ëƒ7uaa†[`+†@gãDØÛ6S¦+Ë\")Gæ¥¾D`_Œ97åBG4<…w3‘«ÀåîÈ÷v±äGŠÄå—’}JËÖÚÍ¬úbœc³1€¤êiW	L¬¤óM]'§Ž©Q¾SLa “Un¬pi´uã¼O|³YèÙÝÛ½Øœ„”ò‰¢tŠ âµ´;Îa²¹6dÅZÆü\$½i”MþBW±kœpó@M÷Îû=Jf³Ð±9ÈÝ\$.»¯FWá	6ZÓ‡Öj,ÏèÅÙ»}3}gÞ¯Øº×Læ]zåº¦áBÔeÏœôÈ¡Å#Nô*óA•¥¬÷/;‰§Šˆd¡ÂÙrq©§îÍÍ”÷I·Ü!õ`'o•\"|h®¯v)¥>8ýØ.ÇY'äªç«‚ðÎ®•ÔÂÞ7€.‹Ê¹Â¶¬þ¿›]‹ìÕ—°Ö»Jz©[Rmâ³·ï¦uÝaðáŸdç7ëäìŸwË=AB¿mz¶˜@Ëôëë|`¡L6-†\n4äR.HØå‰Ä¥‹ºå9})3|ï=?g>ä¾È½óÞÔ×ùŸÑ\$«·u£{¢#¶®búnä„­†ˆÿdúÿ¯©\0ð( É\0b0eV@Ä0\"œm®H /Þå°.„ïîú®Ø0@×”þô(0F„ðlQšYî¸öçbÿØÿâdßÐl(HKº¼Â¤ýÐdY«¼8ðJÙ‰@ãðløëŽ¼«¾9pv0 @@¨B€	Ž„„FBP‡Ïç	ÄÚšž†0c2¾Ïì@Ž™ã¶žB”jƒ–»¢œ=†ä«&\"ÃÐrÎ®¯¼éø—*è(cßò	e–Wå\$’¦\n í\nÆnˆ¬L†{ïéèd\0\r€V\rcÌ!=­¾™èv‡ãPgi´?¶óO5iž\n ¨Àpn+¦O¥ _\"Sh\r*7ípË®£ñ‚E	èÅ/y\"SånÚ‚–ú0\"Î-Ê9cŠÔÄ<O(8ÍàHt4ƒ†ßCX\"Ã]ê*0(æ£¤NHCj˜=šåDF#.\\Jü0e›\\ájÄ0ƒÞe1„žŽØQúâ±þ:Fþ€¦ÙÒ¬.:FR\ré ‘ø(PÀú\n6R0áŠÆ©Bf2*ì×öÙÍ 7¯‚meö»NøÂïLØC–	©^-TQ¼¸f'&ìüV.øÖ,ˆÛBw ê]F…\$\"Ü*\0\"Ú©”\nf|!\"e«` Œ©¨ÂÃ\$çÊÞg2®€…“\"…ã¤Þ0®€æPfJ\n†-h Bd*\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*2(0ÞšBcÈà>ÌŒÏ\$c'£läOã0¯ð@1C\n2!\r*\0å\nhz’ã(ßƒ’ì	ŠË„\nLLbÖC\n\np\"h9;ÉŒ=£ï8‘%#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(#C 3¡Ð:ƒ€æáxïC…ÃÈº¿ƒ\\7ŽC8^ˆRcÂ7McxÜ„Mm\"2Ž“è¾1\rˆðÖÂHÚ8\r‰r :xÂA#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…Àƒšg#¼Ûj¡í¤¢M¢t.2È‰Œ‰3:!-Û&NãyÝì¨î	cxÙ¨Èá~GõxÂöBê§HÜ1²3‚`êrü´cjPM§ñábØåà#£pÖÓ­Â\n8þŒ9D =YÌX3ŒƒÒ£\rŠÎ)Ò#žÕ³±\n1ËÒ*ê:0éHêÿbêR0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çcj®‚> ¯–›šÁº5õ€&Cxè;²¸Dbç=·¯&¾dÍ“1Ì»ÕÄ9Ì‰tXïn{ªåÂ\r6)ð©èéw ;û“2Š¬àÃ\"³ë+ü³}UV>9i*uÓé¯Y½—Ù6ï“\n=ËÊÎOïfBºàPÙ ¼h*„„xÌ3\$Oâm¬LóKÙ4O²V–Ž³/°²£AèÂîˆÂ#çºãcû*Z¹¨7•oánX\\úƒ'¬«Œ¾Ïo2{…Ÿ¼ø1v|‹h9>sXúRÁ F(%v¨Æ_›õ~ïaí?ÇÌÿžúh|-žÁpÄúÔ	WÐ-÷@àèM‚qsD82%Ðî@Špk\"\0€!…0¤r¿ƒÇ‡2ROÈfR´:ªWcãÏ0\0¶>ÆˆI?!äØ*…L­¢r>©¬7p@TZ5@‘¢)€Ò  O\0=TøŠ‚¨4e\0:#PÎ¬U™6J!Ì5^Öáð‚|o±è¦¤Øß¢A-yì…ª´ØØ—\$ ä¥}5òWä€a‡1®6Æôþ T…Pæ]E(Ä£Ôˆ/UŠUK©•6§KâŸT ‰QªVLª\riUjµ‰3èð­¼?a¸bUn¨Iô*¾¡ÂæÓaJ „° ÌòRMOA=ke\0ýg’¤Kš©ÔÔ‡p@@P3èÇ†ôïP+gC]¨£ø\\çlï@ŽõqN€ }Iy1&eÙ¡7¶ÇÉLÅFu_&³è\\›äÅrÏð\0Rþ&ë“4ghLÉ±\nC,+Œð¹_&%}9S@¡¬ø#B­ÉÉ;hc\$` p2¥ü¢rÉÑrAO˜šú1Ã¹0S]ä²0TÑ.Q‚S×ÈŒChk#æ±†,V«Jì‰¥Ì“Ñ§ïCD9Z¥lùMôì&X±H)U¡ï‡W¼©ø™¨%Íkêh\0f\r)¤ŽÐ`Õ_êWõ_*ÂFj[z·&ð‚— îG\"J›‰Ð9%2Ýáq*OûB»QŒºul‡†Òl×ý›áŒ·:y*·[is(­ÒvÂ@C‚Š\$•ðÜ«|ïÕÂ\$¥±’ÈpÆÂrN:0utkÃ\\`é½P êÒDKjÂðàËŒA×š”pî£ßXO	¡œÁº¦ÛÞAo‰B4FT”ãÀx©º'ÅÄ4Òöø@«A˜IØ!ý†‚æ|Ká)™×58Í†°z§Û”>•¡Ä7GaDvÁ©#5ÊZA]#z¯Ë,¾B2ÖÌ}V¨ ¨>Ë>KÃ*	š\r6bJ64#!>‰²†LOr¶ðÛ·H\rr­#D<¢Þ;Ê©J07h¥–‡¥4[ŽýñDp¨ÎÒ2UÈÃº„æÅÉ BìH²ófk‹emœ# {³¡‘ÎÈ‹(äDÃ£A:7NÐ£]Nç˜¹€¢Î’¦¤Q3bá†Ä˜»lKoTô]•KBô¥ê…ú{.¡;:±Äy§œ)‹‹YCpç¼7ÛGìˆ©Ì•“CÐb§ŠC‹+Péd:è`JÆa!P*†\0q¹¸‚‚¯š«“<ÁÖS1B^úní°Ý÷ÜÊóî]*@2/sdw`yÝÛ¬Éâ“g¹	/8+±¸¤j½}À­VnõÕw¹|}{éMoÈŸ¿‰o!ä~—î­àdàƒôá6ç†	ïÃâ¸ŽwŠ®Ýèe´(Ë&ŠK‡÷JrLPcœ/—pÞû·\nŠ`\$(#þ!¾y¯)ö£ÒžyÏ¹@åý\rö!¼\"!\"Vû0Í4¹3àñ}˜}v8’¢9n:ÙU_Td¡B²óÎ6\$a) DDU	µš²ÎÏ¼Áw“\"?Ÿrï›\$‚@Ié¬œ×\"à†K†¨H™~Ù%c,ƒ…•I7‰0@(\$\$e ÚÂ0chìÀ˜8x|ƒÉ\rgKV®¬5„[Â•Â\$Ž/j0†¨}‹<:“àÓœ]¹6ô»³åïQËÔTÊ%ßa#súq“HOáúñ8\røYûçj‚‚ÂêIìúHŽé6Œ¢l?4y1Š:‚sùg2'å¸(1S’¡äý®£÷–ë±tîô4æÀ+±_Î6\r\0Bª¤ö,\$än(í@¨CC|\rÍ»åú_àÚ›€PÑ«Äi Rû‹²Kè®ŠúÏTù*àùoî(,¢l¨\0Îù`„LLú°Rû í0YÐ9\0‰\"6îH(ôÍP`õ/ã…§rP~>¦çj£‡ðu\0ïZ\n®ðW Ú=ÌNÖï‰¯\ndn%n˜äçæÖl¥£‚êá°¿\0ðÂõî3ƒKÐ²õ¶®ó\rb\r®\råÔ_K^Óg\0o\$âõ«a\r2ÓqøÐU	eùM4 ÐO´7\"l­2­|\$\\4khLë¦g\0((ˆ>J\$\$ãò æÀk¸l„-gÈcâ% ÜAàè%£òÐÄ*îq@(„.£Y\"\$ IÅn-ƒæ˜ÄJæß„ö@‚ °ÎÕ\$ao˜ú‘DDÐ‹k«+ìÏ%¸ºpÐú'b§Œ÷ï®<@/‘ÖE´ÏKqÐû0h&Ç\\ÃÈ…ºM¦°Øz}pÐW‘áL,2¡~?ï¢íR`ò\nPpW“é°ÐŽË!¢ZÃ§#²(¡Œ’F	Šiæ% Æ=€8ÆˆÌe|XÃÀðR\$fÎ³ë~TQ‹X»ðåñÐB¥MkpÏQ­(²ñó	R•#vdÃ”9’83’™ÄÛ²C*m{+g^ˆð¯+R¬ë\nvãTCD 2\"haìe)Ò…RÖ\rrÚ4ðêùòŸï–J2érß)ŸM\"Zäé/²Ý,üqrÙ/ÄÛ á²è©PÑ/.Òõ²92@ÃòÒ`f°Ô‘¯2²âõ³>:\r>6Ðq)3H3A5#3.&Ò8ÔsLÔ²¹3“h'ÍJ d×òl:@ªtDî3E2/Y“„Ù0\"0£9\$@*Ó*:Ïr7h¬erlÏÙ,b:;ÈWÄ†Ì%Ä3c;;ÎÞ@­NæåÚ[Á\niðÇ<ÆÌé“Ôt Ó=©á=î>+xå#3bª0¥Ø¿CÀZÐ­> Ó&ƒ€ì¤ÅPúà°Ä~’#Íâ‚4A_¤H Ø`Ö*ª¶(Oüi©˜\$â¢C)Ã )+^1+X±³û\$Ö\$Ãð)BØ/‚Ëîæ\n ¨ÀZlâÏM2«RUfzƒn3GÍãê¤+UHs°~tŒÞ£-!çÙIoÌÇÄÈåE|Dº#	³àÄ#¦0Á©ðm#_0cÄÕ­>×ÔK?Ó‚>ãXÕbJ9öÚÔE01V>ƒ üÆšJ `/c/øóL÷#à¯PM,¯+h5Œ8…ì0v.° /D:Lú(ˆG´\r&0›&U´‘'\"Z•Õ8Ê5*õlk@À´›5)SòãTbýT¯\0`à8F€öè7VZ5\"Œê[«Œô&`XÏWÕô3ä”ÈÓäÊ\n`ÖüTVI	Ü.¦Õ¤6õ«‚t·¥üžå¬\rG-ÄŠ¦â‚äëzE6¼‹ÍVÏlf\"€Îü\nhV…¡tûˆV¼¨/ST@jyGcøIŒZËî3á6`ƒi^s-ÂÜK`ä%æª³ª	ç,\r¤^F\$Ö-ÂZ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯:V	ŒËŠ1-¢[„2ÀR£q;(:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxDßC<‹?ãØža|\$£ƒ_9Áà^0‡ÐXA‰øÈÙ¶¯ð¦(É*ü²×ŒtÃ•5IˆûÎå6/8ê:³pÄ±lk”•+ÐÝ Æ&6B¼9Yvl6'\rã²3³í¢[ŒCÊ„·EÔØBÞ6«Ì8^2#.,€Ü1³µch6[â¡9ãä\"¯Ðê6ÝzH\"šJ2Ø.k#^®´x.«¯¢‚‚l1ÛÎ0âá™Z\rƒ{½‰ã”2¼¸ÐÎ\0Ø Îtƒ\$ÑˆJr§©üŒ¡4ªä ãÈÄ‡¤ÌE*lpÝ|§ƒrWb`Á¼€PÎïÍìU°Ç%²“ý(X–~Íi%­Ž\\ùk­µ¹Ãb(ç¼KûT­+C–L4µÈÚïUòÇˆ£ÇÁ8ÛªV–êL(1MgŠo[ÀÎÜ±– ã4m*Y*\rã0ÌõÃ*p€Tfp‰¶)œ*\rêz<¿ìê1 É\0Í‡æzîÉ˜åÞ#8Â¼…ÛYºHP9…=xÞ5¥\0†)ŠB7¢”¨OZbTå%ë Û‡¥‹‹T·`]t²/¨Obö·bÝûµ&ääÓ†àÖlƒ1üRá¸3°@Èìˆ;ÉaFI²ôòi“â~*\n˜¤“Ÿr°'Yür¸	ª/%Å“öÜSk~p&˜gôGL0såÑ[ÂrjuDOl5?(¡2ˆê*¨Ðä£Ôê’S(”)sš¦”âžŠQ*ELâUY(…X•f‘U²¸Va…î=\"‰‰=ŒDà ›#&þ\"U\$„	d§Cž[a2á¡	ÅDÓ‚q(\r\0‚ 2ü¥˜ù²\n (3l]Ž@’r¼„ÌXs#Èˆ’Âp{ãg-4Œ—€ìùQa'Dáœéb”\n	C(²5*åRGÈéh(Ž`ÂbÑ#è>ä´ý.#¤€#T*œ‰“H€‘ªb)Ù[«SzgYq^?\$Ø2 å	˜n ¬ÄÿMäJó_°P	áL* \$j•Iâ—p €3¦æ´ë?Ô…’ã|ÖZ4×3AŸ9°gcü¼9¸˜64Ý+Y¢šíXÿª Þ†(pb.Íq^ÒkØ‘+*IRz­Ê+ÓŒø»@äI\"zñ4ä‘-²z§¡IaA±Qœóš‚xNT(@‚-H©A\"„À‹Tê0žÇ1z/eÁV’€P%ƒQ+CÐN¨Ar	áÁ2@ÈIŠÂ%¦°a‹2ˆQ›u8‡	¸‚ËºòËÃ, Ž`4‡„|œiÀ\noÉ¥Í¾9^(_4²±IM¸HIÏ[²…H1‹,\nä”\\Í–FNHåX·4–JÕKæ±™@\"(Ÿ‰B\$†dô­R‚±vÄd¨¥dnSt¯(|é©Xª_dœ•*	 »O¶Q­õË+0½'7\"¼åY×væÂ‘@¦˜’\nòU+-Š±pÆBC \nGåÄ¹Ðê@H\$®–g›“)uCÑÔ¥!”;Ûƒ2Ë.³C0ŠŒ1Ö‰ŠðZíÀ\nÜðjAuSÁµ¬’ð\\°ZÙ8ÕÁŒ»0‡NÒ¢ÉŸÕgL\$§ƒ‘Ã–}#|P‚„ÂŽG9˜€ÖveX­75÷’äÉ­i‹`I¬’ädÅ¤%«.“§4¹SÂ Aa 2âê‚<Ú’ÁÁÇÄÒŠ¹y¢pˆ!·¦ËÓt	(7®ÅošÍ^Nû2—æ0²áSÉÍF{60Ì‘\\.9Ï2,ìÊ\$Ì+)ù¿>gý &I‘HÿRóW`´>x§/N	èTêI1\\Îú\$æf\r\0ýtœ9ºz;j\r3¢M“\nÔÆTñ¨Ì{@\r,D›r(âdÁÊ1¥,ôlF†ÃBTúÑpN!<im2 íˆQö’Z˜„´;†PÄ‚õ¶¸™…T¦cÜHŽeæ0±“q-ÝoÔ“îâ(Uu.¬*æ*—bØ‰z/k“>’SØ^o§4\nÍ·­ž£M¤f<FRú¬tìËü²\\XÂðÅ£Ã¸ÝÜTd»lú²à\r÷E'[‚ô]Q¬HêÍ%ŠÄB+‹®i“›œúÚ¼*ÿ(ç¡¦VræbgH¦Áè(£qó¤B¢Ý˜7¥€ª†½H (Ö7‚žOdÛ]¢@œg„Y+MØŒá(H¨œvyíeØ+äÝ¹bqéUÉ¯uð³@ÛVùÜ{ïy@=7»À<>Ñ.¾tÐÚ‹DgÚ]“\$ßAê¶âõ¿7ëF:dsÿ“AžÔâ*~U¸Ç|äÞ“Óèê;²Òõx‚O,_\ny'r²QÖ®u‹*K°“Ýoå{Ç£6xÚ<geÙõ'’†})&§ü.–Iá‰Ö+Ïß&œ,ŠÝÎ\r>rP°gßÐÄ?JœúÏkˆýFã­³ïîþœcñ_:÷«Ø+\$¢ðd²OúµNæ°ÿÏrí…ânÂZZƒ=,Š`p\nˆ°\"(éð+ð¾Œ2mÓðrpBŒBä2\"Dc\$(¥â…L`é´N‚2¹åTÐŒÈ	Ž(°Lïnj€pp:tÈÏbáÐ|dð€Èp:†29F8++´þÉT®pŒÈPMm„c°Ÿ\nÐ¤È0‚\\Î¢#Ä¾bcðJ@é\rÖK&VaT_êUnÊ„`Ë\r0Öý:²F-PØÿð–äÐ>9C'ÑGiV\"¾+nÈï±	#	g(êQ9åðÄÂìÅy‡^Äæ_\0‰1*eïÑ(ÅÂ­ãÃ£•¬^ 	ª\n¤ÂLfã+éL›‡BqTp\"[(	\rÔ\rè>Clæ˜ñNq0€8Ç¦µ‡‚Ýcf˜Q0ÍÂ;Â@˜iFf&p\\ãTW/nn1ç¦×c6ô\r ò‘ÒRÏ\$sd,<àØ`Æ=f\\bBAMÖC: ÐÄ®m1¦b*jNJ‡ÞœC|j–\n€Œ pû1h'öò*bØ'ÏÆ˜6qm\"Bš#„<RéJv‹<ÿBãŒÁ`ò½C\nçâ)†Ð>qfuj€Ñv9K¯‚ôBX'\0 (GŽCa†F (¢ä	Š?\"Ã»)Ê@(Ñþ7é.¹Ãã°¼äCyEêéò¾ëE¸_ëì{*Þ6R]+èMÂ½‰bAŽ,5ãdöƒ{¦…¼÷‡*ThGùÃuã~ARì§º\ràà9å¿ É0Ž.@ŠRZ¦Jn@ê3%†±¢ó-R¼X®Z­¸±„±4|êo­\$‚oK:Â2I ì3²dóÎ\\e\0©À ‚/1~8Ër.¦á&R~1ìM,&Ê¯CÌ¯Žèsjþºàá&0î°Õ,TSÆµ)\0FêøC1ºì¦¾äp";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œˆcÈ•Œ)ÐÒ·ØÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ Pè„ÀE‹È)°Ø#Œ¯£Þ¾Ã¢c>Å\"âœ–ƒÃ¢š–©,Ûï”1k¶•µÀP„Ç<pÜ\rFb+£³b`Þ¿Ñ8äžÉZ‘°ÐÑŒÁèD4ƒ à9‡Ax^;Ðt4¨Î#\\¾ázWGHæ¼ÁxDáŽC;ß=ãØŸ\ra|\$£ƒkº!à^0‡ÐsqŽŠ\0ÈÜÀP¦(ÉK<¶ÚŒt£ªÞ©(¸š‘=OL:Žƒ¬r#b\r4	jHÙ–rc=VE•‰Ãz¿ 4¯RôÖcòƒ7 As È¸†7ƒ«\$ UßT‘êôËmðŽ6Cè¡ªcôö¿£­h°C¨Ë]Œµë Ê×‘†SÁm½˜ÉbøÊ.(4ã¶Í¦Œh…„bÁBxå\r°,Ü7~¶èS£‡ÉJŒæÎ\n\nñ ÔŠô ã¶¦*6%,U<ñŽc}{>‰ò«[‰€SóOÃ˜ÊY¶{«/À3ë¶º`Ûäï¨‡\$lãžÓˆ»vL[Ã0Ì˜ûf4ˆòÿÔ‰\nÊ£Çø^Ûc†ÆSàPÅ0gó‚n;~²÷bYˆg3mSX—¼cxÌ3\rŒ\0Êã,Òt7¨)ðó2ã¨Æ…\$c6”Ío(X‚Ž]xÂ3õ3kVtE2…˜RœŠƒxÖ•„¦)Ï\"X¡ôªH\\LÉkªŽËàÛ…%ëËb»_;À’··[C!L“{æ5ÃpÖÜ|)„\0Àá\0‚AwlË•FPMjxOEaQ“tƒ:ªU‡Û­2ÆáŒÒ.íÁÃüLPgaÀµ\0†å¼O“ê	¦9g’Ã¹|Ve8¤‚öàBw©å=§Ôþ T…Pî™E(Å¥PA+RgAK)…4âžT\n‰Àªtå•iX\nÁY+BzóÏ tMÉÁ9cv_\rú633ó`mÏ­1mðÉ½£8GB‰0è„¸€Ñ²0ÊJ6…\0´gpr€RJ‹22AÌ†âlJ	ÉòNA¥´æŠG\0v{P0“¢uŒ¤LE¢ixÚr¥DÅ=7•\$JÃÃñ–ïlýúMÉ€a@p¥WI’*MZ*†Æ1ƒ²p£då˜þrÿà	0V/@1²¤¬Npwï¨(ð¦ŠgäõI¦@@ÑÉÙtà @êC‰‰Ãg¤rdÌ'Ò\$6*eÙÈÀDG‘ÌŸ˜ )Ï’|€•0oCTu—à@Õã|<ox`©\"‘ä–D20ÍSèE’™C¸“ sLO”Ô\"ì¤å(ËBp \n¡@\"¨iÀ &Z~F2c9ëÅy­ÔbäB/b‰X¶xOŠ-uwþ\\ÉÕœ¢”p°É<ÁW§Ö´2ƒêCÁzH´¥ç Ø›ËÖ”B…ìÊU˜³‘loà7†š8žób„˜XðäÛY.±µÝ¼94”Y¥y d0U…gÊPÉ9Ÿr–`íb•p:UÔbÊ!RˆQ´{µD€š¬I`ÅÕ[`‚²Li!Æmw©ù>NŒYI·	‡¯pàñìY‹2Ä8Fä”+Ô£ŽÐ­g’çJ’\nÑ\r!”;€ ¬gËÈqˆtaˆÓ³XÓeZ–÷»FZ_TÐm=‘ÀÀ45¬šÝ`WÄÀ!ÒÃÆÜV)Þ°d_…4ªñ’±Žð¿`ð\n>NL¤À·Ö+Mè\nÏˆßW ÞtŒs”\$çE„Fòâl•:EKéf@¨BHœ¾ ×A3\$HppðÝÊ#NX´EK9® ^ZWQ£\\&t«<¤’Í:î:.uF\"² Ó»Ê&“, Ì{Ó .+½ØäÃ\r—ÌQ½ÌY[2dLs>q5øŸ 3žœ\n¬âG9½‘rº²S\nM¸”åíŽ~FÍ§5hŒ·¢Œq:4<g4n6’1ZQÊiÝšJ1R4A¼;‘w©3+Ëî‘˜ª˜µ‘MD&ÜâGLã_‚.!†i‘ÃÌ•âÌB%|ªìtJL¸eJ»Réâ`W\na7Âä¼ñ†œÊAã!g­aÒòa¸'þãFa!%Œ1f_X5·(Ú	Êz\0ÒlôÎ«ˆþXV~msÑ9	ûë)¾\rüoŽ¥ßÍ;åpfX´øl1å31Û`“»×¿l1(Õ&Åq[’§øÆ÷kÜtqcÈWé.±U9¼8³Š8tÙ6y•3q8ƒ rcÛoaá7Ï\n\\c\\²¥U‡qù¡|cA<Ü^Ûêƒ_É<äK]`¼Ä?¸Hè­éíB¦#`Q¨êÀo5!×ûeQ7°îþ\r»e—ißÆŽ#ÛÙ»…ƒå	#’v~ãa,1‚äuû¹Væ»Paº±ÛÂÝt	Ú¹Oñ­¿ø.¨N±®'¦l)bslu6`ÎOÑo¼ž3CÚ>whOEý&WÎÆãÔg£_ð)¯Àô¿AŸ+âöÑÀÏsÞSâoÿwØ>äØ`‰ãñ¼Fþò<wP/å¦S|/ÏA»–kûŸ{(*¨Ä9”rÕÝÚæbgëé„·g<zfš}}vÏþô&9ÄsÙoÄð!bVW©ÜýMÄý…ó/tøŒúÔäæÄ¿ˆL¬àÞ2I:kŒ\$Àj–úêþ¼ëPùíÐ80¯ø@½:òø¯Ë\":¥¤½/\nÅnd÷îØñ‡¹ð/“€‹ÎöåO0Xp(¬«dä/PV&ˆÅƒ*,!ZbLD(ÅìƒE˜·CèTÌÐ&\nÆ6ä¦k‰èóÃKø/Xóï+0ÅÏ¢°Ï¦Ø’—Æ,c¨¾JÄ³c\$_ì`:§l,0áÇ¬bH\"¥èëìæ§\"4ndP\"Ø\$¤&‚\rÐ”¢àËÁU]±'¤Wñ#Î©\r†¼Üñ+±0C°Ž¥-íò\nŽ¯PiÂCN)\r¯Î^±R*eêà`¨ÁÆQpfóyÉ|àðsNK‘hóä&zÂ¢À,'àÎÂÀ¨ åë	.dß\$®_QaºK'Ís‘ÂE±–' 1ÀÐGðÐj H1¢p1\0003eÕÇhÜBYåÍ,ª³Pþ\$näG#*>ê¥ìeG4]OôæC0nŒ2…Ô*CBñ,óÒ&RMû Š\"òcÔ\r€V› Òdâ,\ràÄ4ió£öÐKb:àÂ¦T' Œ£H¶@Ä1‡¬§@¨ÀZU&ÎŽ\nä-æÖTÌn\n°’9))Ïb23¢<\$DRbN%#0W0FÎLq°€“€òGãèB/\n¢¦»çBÃ‡ì:Ã'\r¸‹r‡¦Ú7òY\0à (dØ½tYÂŒ/DÔCGø¶ê\$x®”\$:æÍ0*«w\nÑ¶#q+í2ê#EäiÄ+s&ãó*/Ž¤®‰Höî,6£pøc›€Þ†¬‰2NK3ÒœêN5³6½SLŽCa5\$Û5b¦*+À‡™6*ºKÄ\0iÂ`ïC3«ÖXLNÙ*®'î°°kŸg\"ýëà´iÄbâ8I@ì4rÉ)«Ì&D@f[7«„kƒáC6´Âû.ÒÉ%Ã7³22ŠÛ.M=-ïÓ©>æ Ç‘\0J¼SC²C­‚G	_’C§4\0";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¯ÀÒš/!%cÂ1¿P ¨4¤l^·ƒK\nà¯-4 AŽ@PˆÅ%ŽË€¤\$´n80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÈLBq\r‘ó¼B„&ºŒ P„Â0ÌC3òó:&\rã<&œ	šŠ7¨:%ƒCÈ3¡Ð:ƒ€æáxïM…ÊR™DArð3…ôMJ<CK¸„NS÷.Ò\"øÄ6#pÖÂHÚ82²âã|¨©ÒãŽ7ŒŽ„Ð„˜¢ÿ nk(2Æc: ÆQ#Ü¬¦‘¢:‰¶@Ò—%sÈ8<ƒÕñ¼·3r:ì‹&6& RþÐ5Šêp76LèKdö¨èßáÁ P‡V¬ìŸ…Kw\\&4Ž¸SÈ˜F©`ÂËlS:\"£666+C²ú:ÌVªèˆÈÇ0ÎòPO&‡¤4î¼ ,;¤¼]€SÕ¼\\#8?Ê`èþ #:Ñ¸ºj:æ*´€À™hØ›^P«WZºVx@8åó¡+‘Ÿn}¬ÒÝ×Ór°SÄ]= `Vãx[{PÊ¢âÛ~„oÒ¥Â¥ŒÔƒÅî,(7MàË§f5Ðá 3¢(ñËŽZX†û=®UæqSÌ]=ðãFÿ:´,®VöY\$ŠØ£t3Ómž‰(\"c›\nƒ{qC0s@:Œj¸æ9ŒÊÙ@¾c³#”à´úB2…˜Ržˆb˜¤#YC]I8Ò17pA*ËÊC4œËÂŠªÁ?G|ÍF\r?’V	èT6ŠØ§?R¼HHnà€ ”²öLÞ‘ÛC&¯(À@£™\n‘*Jà2ÃzÂ€)0¡š@PÑBÎm˜§¤”	:áØëÁ%¨d_É™0+ð:“ÐšJÉ3#ñ\09‡rð²KpEg…÷Ah0¤’”RÊaM)Å=Õ\n£T¡¹SªÒªÕiã7ÁÑX«5j­ÕÊ»W«®¬2¤QèhY(ø¾gÐV”(rPë­iBpÜäž˜eMPœ3®K”!xëDÓ!hƒ\nâò#R8Åžs\$o¼dÜ!uBd)Ãhx÷‚¤÷ÓJGaÑ£òðBÜC†\nÒJ†fþÖÑ=#IšbŠQÈò/\$«àÖ£¢šåãûìB¤±ú•’9+\rî‡á¨¼ò‡ñ&É•’¿\nÑ¡\rË\$ãœ“ÈÙ\nÁZÐÀ@Õ?Ž;ço=fNRœ	¾‡Å`0†¢†xS\n’ÔÜµŠypT/-)+rŠAÉ	QœÅ¶Ò7/	y–Du.ËÔ`w	qFH\$2¸È–I;CaÌØMÂV`NÏ)P©ö@µœ\nÚ7d°#@ G'èWm;’ÙØNC‘;T,)Õy<”@\n;jÑÁãìI`m\\K‘Ä’&OÑ¾fÌ€°ÃíGé’ˆf2íiÑµ/Z£LM=\0²òÖ	‰¡œëÌ5ÊÞŠt˜d\"Xa`‰0 šÌŠÂ»¡q¦ŒÅ—¶L›C!eNÆ¶¸ÔöGÜÍ+L`™šª€Û©…nôQ9÷ém[ŽLd–.†V¢p\nÌNK™S¤ÐBµ¥bŠ – t±ì“á¤–\0‘OÊ’%í/¤`n=Ñ/êî0à„[{ª„«#c\$´Î’>µ©l7¦Êˆd±§ä™ŸÀ¦áN¹{;g‘Y¨~~®bm]K\$Ý†Pî•*è«¨3 ©yË±Ÿ0áà†3öÜïÌã,XTéÉio¸o\rê­áƒKXÝ|=Íø™\\ª ÇÖ¢´\rÄÁ7³¬Q^×‰yõˆƒ<Õ®4H\0¦¼´S¯cÚŠ4©Å¢òdvY°F~Æ)8Ã®0©ï ï4“³	`u@E'qý_7œ™k]×M‰¹  ¨C	\r²“\"œí§„rø“ÐŽÅÄÉ£\r•öÄÎ†ÌDÖH/ ÔÌEôÁLÃh…u˜…ÊñKÔg!Ñé0]\$¾MDÄ¤®\\€,LôÀxÓFGN\"jµ-«K½¹§¹tiÈWÁéÆ2ôÙ=`ºTê³´†tÕ\0·,ëý6N6„ô°9­VŸß‘Z†ÞÆ/tbÝ	r—«ØÀ.RT æa\\4O<¯N’qu	ž¼Ãäõz‘R‰öê£Ñ½BïtÑµ¶Ú+{‰30li´–äÃA-u²‰Cz/@¦Ó<VKÅÌaD0‡W2xœÁikÝš\"4dy!U¢=æl9o=È¹*ÜvÓ1•©†¿ÕšäŽO“nˆßÍ&qô&r’\0á‡Ð-`´½yôr[Íu´Ô0ÊtîTk,¦ôQ!Ö³5åÕW£1•˜ŽÝÓ*Î^èÎ3·n|9ÖS]®1¬r%’ÃCÜ!C1NHÊ·±\\%†ËÌË´=CY·-He€RO(eï	µ6bÂëI×Ò¹¥ÀÃ‘¸t^–nÕYé+Óæu¤B|ºÈºgÊzä0õ—œˆ2{émŸéÀûKŸ9é½— +^®{kîêŠ/¨ô=+ÑÙ¯~êþZëÔügï5¯¶*Êƒî¡^ÆàVÛ+­ý;«ôv¡ùú¢\0Ÿ¯Ê¶v¬ÈùXðýí]£t™®´cèxwÁSIeO\rÇ_Ùú.Z³@†ÿ\\ÿcÜün¤ù¤¯òUg\0’ö‹)\0Q	–+Ä¼F¨†P\n}oø*ïª¡> îÆË/<§¥éÅ¬>…dÂµ‹VQã\\\rÁŠc®IB}4\rìªn#€Â°fº\0©­}Œ^4¬^nì;lFÂêþÆìT­z3¤ªÁL]†4þÈöÐª]&\$¬ïúøþõÌ\nÐ¾jfùolµÃHÏÌfÌÄQ&ž N¬êHå£.Ìpê\$Bm\0ÏØí«ŒËéœ)FpP@è‡ÍF<]gp@ËîFÜ¬\$#¤Á†@ä;&–'å¨gC¦:¤J8iíÚfÇ ¶ì°FPÿÎ]o»Ñ\0÷«5OÛ±\rKý£ÜËŽà\\|71X[ç\r±€¤‘Žt/¹&G†<‚Eâòf!„nîÌb\n!„q_N]ñ²Q1·°ÉE©A7‘½¯£®¤:ñÔqØ!ñ»qé×7vñ\$4I±¾?M©\r‡Bìcn‡¬IcÜìqõ!äp6æb¡B¬Qé2€,u#ÿPo#¤Aïk’zr.MÇ2VH¤nWqŒÊ@ª•ŒMê=27&ÒpÍ‚ñ#.£2E&é['R…\rBz	€uKåZ3  PÇæ3ÂÞ&æ@ÎêôSë¬`±š¥Ìði+¤¤1rÀý‹LaGž¸‡`^å”2\"l_ï*@2A(ƒ®ÓÍ`˜£-,rò÷¢q/Â/'ÀKÀØiæn`ÖÞÃp²î\"å\n Bh…G†ü„:\0Ú´2pp\0ª\n€Œ pBÂN\\HØE’I†Y'Òs­ŽÙ3X\$ÑZ>j‡6	’b:#âB\$gZ†ã³èttC)!¥Æläª¼d4CÂ3Ftì³\"‘+>%Ò‡ÌVv©üH†c‚,Â®þ²\0'¤äiÂøBj•‡\0P”=úâ%’«NP8¤êäPÜÁsÒ1Eë	%¦ðQvãi?ƒ+?ÎU3mXñ­©bêìD¹†óAt\r”å´9c~6ƒl2gÎÄSÔ½@Èê„*IPÞÁeÖ%/cn°n¾·Æej•”÷óF»FkVñ…¨;#¤Ÿ®á'ÖMîþ\$‚·m€ë€	àáCåÔúÂøÀKÂas(.«Ã\n¤&3 ‡@<nBÐƒ/®qDJo	´º4¦‰C£ëßÑü±óff#®^Iev(m€<‚@	\0t	 š@¦\n`";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=	óä¦–±¾nZS±LòB„A±zD«Ð;î´(P1 W¥j¡tæ¬EŒ#\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\Sq¤Ú¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯\\Á‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!@:8(Ê:]âøÄ6#pÖÆƒ€î\$-äƒ(Gaà^0‡ÉUVÄÂKˆæ „;îäHÔ\reAØv+“˜¢&\r8bê€È²<}e¹ÓZå:S‚l@&.#	ªuòÌ†Åº––ägDÄI L&K< ?FƒvíÈ+©C9W¯A\\Ž˜J25iÒjï{êúýpæÝ¿f;7aD+²š_£\$Òò§íH{r¡Ì¨É Åq*~ íSóœöäMúú¹S–ÊŒ’ë•Ðì¶¬˜©òm?&„t‰·iU1H˜§ÊY¦Ö†‡6—ÌkÓ•á¦–RóYW%’T¨‘Ü=U—0ñÜT˜K“Õ½I“fräí}Ñ M©ª{£MäÉóD)q•7E[•¶ÍÍýÏâWÙ-uBsÛyý`)¡ÀZÝÏ:\$d’˜’–ÕZH)ˆ­¡s¦ÙÛK\\‚Î	“’£„lˆ´kE:\r#TàhÎâ˜k\$iº,\n! °GPÁÏAÂ´ `ùa„CA¦?×&€TûÍWÅ=&=Â2+NK@-PA\"¢dld\0?ƒE¸Â³X´O\\9Z°Ì†¹â2ZIXI°:\$ˆm”±bgˆ€Þ)cF„š9TJ'ÄÀèÊsØÂÌ½–G”:ŸZ¯ñ@3s‡! ÄªÀ–pLc™‚(/øð³UvwË„‡Ð‡ˆ3– Áp	WQÙ0´ç¯	#Ü}DÄÆ(H(Bm[ÁÈ®\$]H„¨,\$\\</29Þ2ƒ›Êd”'ãEÐ¡™2áŸQS“ÄØEÊFv¥+“Eæ>%hý+\$:–\nY«‰l´åÌB2ôª¥)‚Ý\$²<“ÆdÙ:Û™Ü#ïÑ: UT1caL)`[!šqò—+lÄÀ–ÆtL9\$¤2¤nW’ñ+Ž\$Î·‚¸•_ãN“„Æ6”ÃB¹H)G\n¡Ž†°æ3Õ‡àÎ\ný_ìš6 Ãƒ#¡u.ÅÜ‹“ Œ@0‡EþÙS,O	êZ¡©è}Ñ¤.()Î#\n>MŠøºf“)[žåÇ0Y9D\\.*<·!M!)\nÏˆvNRÍAÕ\\¯9OZí]ëÅy¯Uî¾Cºû¦L0FÂS\rÌ9ˆö\$Å³LiŽ1æ@Èˆk%)©>rËú’Ëa!Œ4ŒÉšLIÎWó-AÉªì–á%å‚|‹ÃþöJ	ô¬¨i\nUÒjá^!\r9êLF¸§‰åHä0¡ÔÈUg¼9ÄÄìÕä”ÐÔ©vqŠæ&(J°,Ûü#óÌ¡¡cè‡ëL6  ¹’êu]2Ý)¬õÿ:Sè¦³<P«ÏÅ’•ÏâÁ®+”U\$ILñô“½˜=‚Bü_IPŸåÒ’ÇÝq®{¥”ÑNbÏX³¤ûxrÅ²™r(Õæ%	I3‘‘*S#iŠP(šØrÄ_ðÑKhA¢Xv‰&À	f˜¯ë	VñüIORF`%²\nÔ‘cp­S<šMNkhŒŽõŽì\$aA\0P	áL*@xµ+ç\nL1Ú_½ƒåŠîic=ƒDEWQy‰l ½XŽb+Í­ã’^BÉV!äç5uóÉ²?âçD“‹Œ™•{!7%&îÓz“AÙaBe¤Ã— ,ÿ'%ôžK@‚ PR§]rà‰Ðäã{ö´½;3ÆvÊ@mk¦æk® Ñ×Z!›Í`œ±lEø¶µ”æ2êUÚ•>CÍ°·B x¤mh¡ýŽéoÒ®Ü„Ës\"Œ‚ô9X}“¸?9Ë=O£fÀîƒ´„Ž‰YsªÐî\rüB6TZÒë‚*¼ÁÑ\0·#8 áfÅM|8K®¼\\ëç…©šye·ëNÚJôÙÅn<Íwi15î8“ø÷%½Q8–E]È„1ÏPíX(é½|I+Ãª…÷ð)/hy“AÅLº²\0Qk:á.@é™Â„ÿ»‘ßJîxò\\£:œŽøÇP>©Ø€žpó	‘–F­ïºã–X€çŸ¾«‹¹ûŽÍÆÙ…¢ªÄDÙ˜Âr¼£>[7*Êt5/\\0¾.Èª×\\Ç‹K\rÒÚaD ò[\n2Ûxg6\r§Ý½#ŽïMÃzÁ‚}jŸ‰„nV\rïO``ûêJ3Ä–AÕr)§¼m\rm2\$¡¾øåQ¸[d÷qD:}ó1ò>eñÏeò„Ê³¥{.°C7éºIº§l[5‚÷dª:\\ÎX›2i¡pÄš‘‘K”o¿íóè¡ö®äjÊ!x’ÒŠAx‚\$¸UÅ\$ãïàæ…¦ßËôX‚X¿…Y  ¨\n€‚`€ì’‘ÏpH¼evÙå¼Ùbl\$á.¥¶Î#XÔÄ‚ Ê\"Føãp+¦©‚@p¬¡ÁqzWX%°D<fîá\$À®¡z«o6ö„N0	5&ò™ÇZÈŽÈP–êº+ðžÈnDÂÂŒ}	|±	kæÆúÐ¾!Ð ƒ\$NDä­\n°ÐVE½äzÑ(~@hÏþÆLH\$pÈE°[Üè¸Œ\nÂ#¨”¢ãÜ”0ñHZQq/j*;1(\$‘,pÐC¤<1§f“Âƒï§w}î@°ƒÁ¡\"\\&%¶ÕbªÕ§Ü\\dxá0Ž\$'&\"YPMQNuÑˆØ\"‹hFè4—\"ã(dÒÕ„Ö.CÔ<HÊ§IÕæ¿rj1›´ÚnÙM°ÍB›'.ì²td¦ë‡£D’é‡NS1âˆ.GÎÞ8Cˆ»Ð,¸Cà1s#%)°³P¦.±tV2&Û)„Ú§Ý#\$\$áPµe,ôOPuÂêï'ïe¤|bþäï\"äú%¨Š’^*’b³pÇòW&È¦xc×&	†èˆžÏ/,…Ë)\rò7€ïo®OÅ)ÏV€PŽÂçadM‡jP‡n|®Ü5«TâÄ^I’ÂZ2ÆúíÖ%Û)¤æ¥õ¥–Ð®\njo®m^!¯bgPéM'äþÀò;Œ!¨z> @4}¢@&ç)gpq¥ ã®Hçia(‡Þ-%NB‹t›K€Æå¥Ç“°ì|’?3³(ýä»\$²bÚ2à@‘°&Çó>Äs1P¥3…^6+3.I#Ò“c\r´[Ï&4S~OhZP¢ƒRh ©-D‚á#'Q5:sQ4l‚ÿ¦Â“Â°f‘.o\n>Eós'“w#éE:óD¬3´Ý£×S¼ÑÁa<QI\$\$a(‰­9ðêJ©=’M“©6Oöè#ƒ>“íŽ|QSB-“÷/±TØ‰VØÂšùÍ’ÙaA¤×\"¥	\$(T(L°üú57KCÅ¯Bo›Dm”˜”K6*.³¼&-„,4ÍlG¤J‰8/ÞÿEDPn•ê¶zIŒ£LCÙgTÎñýÇMÑ#-ýG¯n*¶ýã\\#ñ¨Š‰…¥F¤+£“Ää~¨Z:T?4DùôZú+0“ËG»Ic\nPï&ŠR]¯‡'®ÚûpûP\$q†ÌïM%ÈÜô4³ù/ÑDô¯@ôõÝÓ]Ó5Ra}FUm²SQU*×Âó8±`WC‘61éR58Mò‰ÆrTGK?Re3uGZÒõ_;ø•S5X¸5)V`‡5xƒtk¤1(ÕjE æÕŽÎpYR”¸Ë4Ç\"Ò\"„Õª\$\$,l0üÂ«åîîD‚´ÿPÐ·>sÁ'3ÛV5'6uÐÿ”]r‡;×Q±;^»^dQgß(ÕE)4úö‘\0‡„;GÍ`k¾kÓå_†±Ysª'\r'sbY,µöžOþ…a%T#ŒC\$+ÒçA„u¼QãƒM/‚J«¦…Cu/8Sg8“*ZJÀXNÚVTžVX¿Ì&ü#¥f\"gf™[ëxgé~ò#ÝeöcDÓû55‰OÆgh‹g¶’{ö[i£%cbÖ«e®l”kkV€X–¸EÖ¾qÓC’<¶õK2£GãO)Äþ.¶ø±ÜÒç!T’böìTbìúo¼Ñ]]Â£Etâôú·\r& *wW	qÂÓpõ‚Ï6ñB6û—(¶Áow+t¤y+ñWµŸUoÀò0+iOƒEög	ÔdÀ)gíKD³ÑDâvq÷u¶Ív÷1`bþÔA!“·Z½]6.V<¬H¦GÒ2+qÚTÔ\0Mp»ÑèC3ÿW	„Ã×µa®†‘S×|®&Æ£	5|×ºCÂêrBF9Z{Óª9ª¦×©ÙWÄñ—«9×9\nwµ\nÓË{óD·uðå8?Õ}3EW2{|“Ç#WöÄÑbq†º#€†Œ Øa )îSæšeÈB+¬´Ò¶&R°»á´¦lq+P!«_w6ôÀ¢3ñƒzÔÄVãå4.Ôx×DöMàª\n‰ü6Öê×7ñ@yk°|—	Dm˜{—ŒÝ°îoŠi¢f™Ø¬ÚTÀC«ù}Ø¹ŠEq‰flA,¬“ÒkÔ´¾Çöm²nïgaeL –]}±FÀCg»M%Mo&×ÌvšÌ,›,2Ój»Ð”Pgj0¬W…W»;\n4wdkh„tjr™'»lmª4¥3 ’#x&OÓ•1vkd„Íþ¢nñ¾{2(y+8Xcôþ¯U%¬¤P2ˆ·ox;GU/òk*¨¨äy†X.ßîS'ù”ï…ÆÃr5‰âÃšY€€U\08ØÍîU—øîäidTI“Øˆ6+‘œRƒ\0÷cURîîŒS¢˜©´OOX9N*A*™¶Š…´wŒê+ô5ŽíL¼ÎÓ©È“(ÁdDWœÔƒJóÎ\n÷y>œesc¬0‚š3/œø³'ŒuÇõžøÕâXÄyOït¾-úGÅ· ÎinŽá×¦Eç¤ÿÙ`%é=…Møƒ¹j•î™ê¨K„|rNçŒ–”9–9KvËèî‚gmc€<SÈ)“\"lÃU–º(N·M•ª& ";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+°È<îKdŸŽcY†TµƒÈà<F!óŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´U9A\0ÉFbÐÞú½ŽË%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\fŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘P%ÈéÍ¶PË\"êÖ„L9µ˜éPCê6‰ãÆ:ÃÖPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒg—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼÷ô¸Ž‰²<ÆdnÓxÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔX'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„f;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:Œpèæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3‰Ñ{`\riÈ@!ŠbŒÅ;DÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4IHT4\n¬ÕÀr(S€nà€ †GÔÞú\nS¡¥ Dþ\nƒE9V†E>™Î²¶WDÕ)àÜKYå<a…ï§˜\$V[)4?!ÌýÀÈII+ŠP8#°æÈšõ*áÀ4±ÀÉ\0!¼9PŠD(¥£ƒº…ÊL9)Pä¥ÔËY'1Pª8î’U:©UjµÏ«&%•ÉNWi%_/V0zßËçd¬\$9<æ%¸iSí­Ž+2tŠ Jp\"Áˆ<”BjMÉÊ'%%ä½—Ó0@)çcŽuä€–sM5ò|³,S1Ž€ä*¡†/N”¯RÄVË3ÎAN~±ù¦yy‘ÜÅf%0ˆÄ.‰¼œA§äãJ—îzÉi/&/>ÎY&r%Cö™+ÀóÀ\0´tê×‚±N*”âRHXy3Ë:pÞÉVn‘ÆÐÕ±ÀâÊ\nÈ ÇäþBØ^EëúdaÊÚße%'àó¼#ÊO&E@'…0¨³–„öVg–ÓB_Î	8\"P2|O¨pFÍZ@ê|30êqDhe\rTŽ-¤Bô'ð\nw`³Äs^HáÁ^ÅÌ,@™DˆùL1DX#@ phSçVM’¬z%EbWR€(!‡PÈ¥¸k'äBr–¢&r±É–€('„à@B€D!P\"ØK(L¶1vÓC3löUÊÙxºIUá%FT #0¬Ð…ô¤KDxŽÄy1è?©—‘ˆ¯˜å«¶„è]H|\\Z†1ù72æÈ³­M\$¤\"97\\å^x@€•’Ø(\\äª>w\r½Üæü|ÜKs»©¡Ê®µ¥C	ü-a½ë‹u'‘;1&4ÿ×‚,SÒºC¨(ŠÎ~f]±–rÜ§Z´Ùç1Á(7ç„ðÅšR[?.l˜X\$úé0„84‡¤<Ò8p}‰Xœ3d, dºÄÁÎÜIªýQ9qç®,¦sþ^Þ^¦(2‡t´ÙÒäÃÁ£64ÐÂ,o8´å—\\‘’ƒ!ù\rUÑõË“05­9aŽ»©Ÿ^…õ|¬0sRørÊÍhù˜ÿ¥£ÿ%•£öº‘·ÙŽVMx\nÐ!Z»Ø€Öâ,\n¤rŽ@Ò…àu™.f½—[\nP „0(~75GŽPjkÝ*%!4C».Kþ ëÔ•åöfaðk_æbV˜Mg¬\n¤‚µ·N(0¯›tÔ:½û¥ž	_yyÊ¤à\\uÞ½‚Úþpì(=\nMÒ\r; œÊ”Q²ËjN0»@¶kÃÙ¯ ÎÕƒºãl“rBàvìò\r5zìËÐND«2²¹¶ng,HêUH0”Î\r‚|aþr_pûTìþ\r¶Ý§—œ.ƒŸ»¸	˜ó'Šjò|øŒj5¸ü‡r@	'l¨Inò‹®t.Ä·Š…O	‘ynRàé6'|”­*âOúë*E]0@à¼ð?‹ âˆŠÊqå‡¥—ó)ˆõTÔ°a&-JðQJ÷ëGÑ„*0ÅšKYG\n´£Iz¹ËÇ•\$”~¼e7;¡äõ2íH÷sVï(Ë£Ç‡f/îíÙyH«¤wMÜ©0‡äUíÞ³ž+»KÊdKKåü&ð»>M†y_?ãÏíáó–q¦AÇTPa7è”7çi‘#kÁL‘µ\"Ð)1Ë˜ZEâ´Ê`N²Ðpük€˜ªE™«Ýo¶ýÞ„(©óÐ¢¯Ð¬Ë	s@2ZEä\n}eî¹·ú-uRV,õ­Ê~ßQ•Ÿ‰&2ï9_ïoTñOè¹ïìó²ñ@¦Æoþó/âópOÜõ&äõpv'\"õÿn¨çFz?þYát\$°\" p8.ÍŒœ02~íÀÙ«ÒÙð<C°AP01.õÏ@û\r’âmêÜ+ÒÜp^ÐCpI¢aâ@Û‹²öíèxß\0ìÔlºËêöCŒôºð“\n\nï\nLÃ\n\nÐSL¼¤\npªØçi\0)Žç¬¢\ràÔ]ÄP\"É¶'ðà³:WhP/evY¬&&dL~ãb]Çî„T{âf^°æÑRPì³KÒÛiB™éH·Å.¯ô~ìœ*ê´#fÜÿDPYên\"ÉC„(+)Š\$ðÅŒÄÊ„À]ÁBll4Z'2dÖËQüL~È&s\rqv\\qzlOá	Ìðy\nÐÓgìY ò¼%ÀÈ„;\r(BˆõŠþOÐcÇÃ—~ô‘¸£‘®ó–\"oVíãª(Ší¢†2gNqC—±Èo\0Âí„Î8fSäa`–\$Á|YïnÇérA	Ê'PÈ c¤˜¦?ðcq³Ð5!Å¹QÂ¤có+1Î™ÏHÉc€{&`\r+Í©9å¸pñžÑc—\$F»\$RO#PB]o”sBJ`iŽE àJÀÖ'¤‘°ÅPôh‰'ârkÒ9%qÑ(•\rã\"b\$Å…)ƒ%Q prŸ)2`a á\nÒ#&ûÑ)‰œ¯\0ôGRaÑâ¼RxÌ‚æÌòÅ(‘²äÍ‚(ØðÃ/2é,ðÕ-L®u,ÊÌòc.×0Ä\\Gq©ÃîÑ¤BÒ}.¯5,„¶¤ºKâ0S/33%RÑî¨4Ëý&‹DKnti@´\$LÿÃàÇ£ Ê’áEê½g¬âë¦[%? ìb_st5MÆàÃ]6ÉÌã“s##Tãà–\$®1…öC Ø(\$ª\n³liS„ð#\"A¯@\$#V òss’\r\rFI@Ø`Öx@Ös¤èÉè£Œ('¾[B&Æ#¤C¤-‘TÏJÃJ\"ƒº°à¨ÀZ\0A)\"6:Î\nœ\"\\t±3	mìÙÀáêÕB80w„Ÿ7‚CAêÙ3•	”8ãì†ÃB’NBª˜B:#è6v§n2`›A`ÌE€¬™aJ\$dX5îàÂ-:ôB’6F\$/vúH;3\"@1<ÜôybP`°°^JüF\$~À	€Þ/ƒ­Jô²^­ðÓ¦øS©'iñJbô¯<jïPv‡2-ÒMg(,zgÖbo:ÃO¬ºohei›îòÒ‡2¯VÈbp5c@'¥ì*ÈŽ\rààÐÅ\$ÇTþö\n´\\1…FÀó…›JpõÏM6#¥,²z\nÊSÊltÕGïºÉµ	xRCT5¤0Ö´l,¸¤ªsðïZg ‚&o‘Wc\ndIMÜ9#sz1†TºôÝGËv¶Æ÷Câ0©k”ºuN•¡tøÂfz\nr»(\$Ô‚@Ü1«0UCÁ\$t! 	\0t	 š@¦\n`";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›%ìºï½‹¢ì\rkÒ8/†)@€²Ã¦ƒª8Ú!#\n*!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`×<CP§œZECš@K4,ò)³\0Š P¨ÖHó'(±ð°x›µƒ(Ì„C@è:˜t…ã¼Ü6Ñ² 9ÈÐÎ¾3Àð€Ã˜Ò7ÁxDÎDLÈé2íB5„Að’6Ž¼Z7à^0‡Ïã7ŽƒCêÎ2C¨æ\nbˆ˜÷¥î¢êÊ oÀè–B€Þ5Œ)L=íhÈ1-\"š2Òi3Â3²ã#‰_Ø4\"ë%‰Ã{÷_Œ”âûIˆè„¶¥¬0ÛÐÔ’Û¡«oÙÎ\"T6(Ç+AàP—>+˜äâ(ÈÈ2Ë,“Â™¡#(ì…¨Ð¼Ä0Ž£bƒ¬«U¬ #£pÖ1Ê2¨´2C­m\n:nÂ¾\rj0äž'N\"4’Ë#l˜÷èSÆËœ.7•´´–*˜€â`Ùe2è Æ…»õ£{R‰‹PÈƒC›•YŠMjUî¢ÙiÖÒ*§×ýY¬£.M€›ê’«Êãr¨ª;\rð;©¶@úàé¯.K¢ì´ê³W±CK«†¯˜5æÅ1‘¢3ÉÒ —‰ã\$¤“Tr°ÞÉ\r¨XòÏO£¨Ç´Žc˜Í‚„	Û>½Q.0¾m£il„ê€…˜SßË´¤øÔ	kš!ŠbŒ“°Ü=á\0Ì\r¸,D;†\$ÖŽ‰|¡)&õÒì#Éx¨ÇbLßŽ93ÓðÜ3„\r¢·a¯PÇ@O×¿Á/±¨,Æ)hÉ@%.=-L5WÂnQ•i,\r…YàždüFOQá-Ø´%D¶ãÈ	/	¨x€¾\0à‡ƒ˜w#GØ2‡„ ^žðL/Í3&„Ô›pwN9§PäÓÌO‰ù@(%	ÑrˆQLIF¨õ\"°‹ûS%!Ö¢å<}Œë•(„°×*T£Ò>¨\$ÞuG\0É­\\D“\"ÀÞÙh>%Y&SzýÍ	ú\"ÅIÜ)óÂÒÃ‘%\rÞ4¬èªðB@P\0 ¤’:I’Ól7½Ú”¤T›h%ÄÀ™A\0Â\r\$€ûÈ\"ŒC#™á7\n\0+õFHŒ„€§ž*ÕøB–ùGj¤‰‡“IÃIö-ýQ†èiÙ,(Ÿ<cÌG2ra¦Ü2@¨Í¥ n¢EžWjN’,o?1Ø=p Â˜Txj'†£°µˆ‘_ÒM}*ãôúÂYÒ:pSž…#¹ýN43šgÉ¶mò4‡\$È€&á*G¢}Aì'ñ03Kô¨‰štJÆè“³pXø\n:¡¤Ø°«C™ø5ì:–EXu+\0¤ª<æhÓE³,Ö©ÃZÌÙ©##È”£ÒzIY™(7dy%PÈpLÂO#a„5›(À¼ætJ6OÜ¸8Ò|lLÏí‘'ôš©i’š¦P8³¦ßé9fkmu5:Ôq¢õ2a½Î.U|FÏ‹ÄÊÀ€0ª˜iÝ&Êh)£&PÌ”h?\$ÞjÇˆôR‰”JRlæ“Àéal€OdÍ[\0 ´{¨êU\nØËœFü•B,½*£3.È\nÆF<9 r/!ŒzZl’	ÁPÓ:kö0”;«¾±Kå£YhX\$Ëc¢kÚ¹&-ËÜ5¹ÞF€PC’a©c×„HÁ»C&î‹’wiì“GÅòðT\"(A/HlGÊÆ'µâèKr?:‘Ff\n\\ÙFy¦ãRààƒYœ`˜!YF’øÜ›¡ëH(ù¨C	\0‚]¸5:)‘–†~…Td\n`º´'\nµ¿5v_`/+°Âf†¸q©%b˜àÂã Ë1µÆÅµjÀè\0õƒ+Ø2Y2@3ÔÚ¼—åácÓU€J²É™dd|¡’E\rÉ™:÷Ýé.ä™üÊ¸Ø4‚ì²òÜV“„\$d£f±vdÊ˜øÖÔN2³iÍÙk<dLäQs¦_ÎÙŒ0äü¢Ô£œ\0Æš’`êÑ¦¡7Ërïè¬Âd²é'¹À<þxsŽnk_O‘LÓ25¥\$Î³Th\\_ª´ô\r¤0;X¦ƒ­3†¶.ºãVk¬æ5é2[-ªl_„L<ÁÜŠ„í”­Š*%…§k@3çR6ÉB\rz (µéh%æö«ä”zNÐ²ÜE>+CðèTæíEìÆYgYI1¡ÜU¬¹¥2¤mqIäVjÔ‘‘Eêdˆö)bØ)g\"ŒÇÌ0\n¥ìŸ‘òá3–Š.Üú”2ô‹ÒœÜ‡†¿zF|yEFS‘\0bÿeÕ¤ÊqV²èÇÎn^äÏq¤=”­Î·\"¢nh‹)*šfiË²UXjÈ™ZÀhŒ%F-eYÐô½ÉÒ­¸Ý{°BgLˆ	ëåÛ³WòõÖêÍº‰øŠj\rCÒ9Í½.uÒãÝTfÁ„“º’bNÜ•Œ9VXÉWùÚ¿=…ôo!Òk`ré¾&ÆÀ†¤üÛ{r¾.ÚxãT˜é~kŸ¶/Gç»¼dVTX„ÒøÉÔöÜ‡¹ŸòÂTºC^ŽÏ‰kIf¼u–=ÆW9°ÞR~PþDÌú¸›é<Ù›¾Oºù’Oçÿô}}î¹ÿ˜r\\~É÷sß}ï¡™~–ÜŸ[=£u²(¹	ôœ÷˜Q;Èÿ!èNîþÏþ¼ÐËÏV’íœm„FºCšbƒpkü]GZ<DŒEË¤0ÅZŽ¨AÀàx\0ž@Bª\$°*‹K¦:#jž«¶“\r\\¥æ(Žch*B¨&ÐH‹&X¿¤Äa£âF)ÔÁÐÿ»0V&î €kºè‹Ø¼0Z]Ô¸Åˆ¨Ðøh¥	ãì€¬°¦X¯TkÐÓ¯VP¨Á#ê(oöñ®|\rÂ–‹ðÆÜoa\nPÄº¶éú®ð>ì(p¼Â'ïä~¶eú%…ÜÜÅÖæÊ˜lÊÄ©\0\rc\ræžáL\r¬ô°ÎŠQ\rŠ[\0l\nùñ,|0k¢xÆ\"bd¢jË¼Q+*Û\$b€ÔàŒ\"ý¯€/£ZÔ£d\$ à®\0Ö&`ÜhpÊôÑqFÓ/XèÄg#ã0Úþ1ˆY°(qÑRTqbÒ\nŽõ/ù\rØ…°èY1mY*î¾\$|ÜƒêªêýQÊVËä'p£CT¾Ýð‘=¬ËÃ¼Â£‚Gä~CÐßÀÂqà€ÒEñÖ/HRðÝ!#ÛÍ±´¶bx/cb-%eëÀBøq ì¬m-H!O–ÊŠæs°P:·LÒÖƒÌs‘&RXr\r–>ËàsŒÚýt5Í#%Ò~3Eœ%ïpP\n8&#‰H.7e³%D:»‘¾>).þr|å\$\\ÍÒ®è¨­&²¶æD\\Ë¾úmw&ÒÈ\$²¼îàÓ(­O+‚TÂ^d^\r€VöÆ.Þ§èî£~¯Â^Ê\0u®”\\B6€ª\n€Œ pŽ>£Ž/ØñÒ´ÐlËÖ§¦¤úÈÐ2ƒ3jÊÏÏèüÍU2°Ï-ó.ü£\"Â0#E€Îã¬%”ê*x/`Ì \nBì1Xl0\nŒÁò\"x³„gnÒjÆ KóâÝ98 2ú0ÃU!ÀÜ³Ãl8\$,	€Þ6ÃŽeóº>È² CBBÆÒgî¼¿ì¹N¢üs€K	¾¬ÓØh-vY\n˜è©>lü'ˆ>¾Î=­w\nðÏ?\"è2ã61Ã .¨ÚJFËƒ?æ‚6…†¹:%ûcó93j€`Ñ	Î¨°	¡/É¤UåËDw/ÐNº¤žœÈì¾\n\\+\0¬Ð\"û7ÀêC@	ô=ý)«¸\"ßGfR™Ê\"áBÊ0Ÿ>C)Ê£>ã\$æ2ŒÄ­ô–©¯nûÔyñŽmPGãö%\rð:jJëâb";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-ed]H\$H·2)ã\\õ¬ºÉJjÄRH±R²I\$¡,_ª,RÆÕ¶”€Œ#LtU;²’i’PÊòX\$ŠTf·À´|˜^@­b1'¢òüe1+K!|ø5HuD)²âØ3ª‚¯4Ç2Š’ôRs!ÐfDÅ<ï”¥Y>´x0·£Ê3¡Ð:ƒ€æáxïg…ÃÈ6ÀC(ä\rãÎŒ£u¸<:ãpæ4öðDè6ÐÊ:X¢û¾0ÃXD	#hàå¶èèã|-òìã# én¦(‰ƒK®Ñ1Œë?KN•bÚšBµ‹#\"Ð0|º‹¼²å‹«Q@%¯ŒÒYÂ1ÆNÙÇó8Ï'ù1 ¢6Ê\\»^Ôá.\rš<è`Ÿ Œþ‚ÎhyþŒœ,54“©Ê²I-M{VŒÈTÉ H'ixZžÑHÂ¾Dk/@‰aŒ#¨Ø:°Â6£*IâJC\"’*5.ÉºÍ³²ãÚÄªŠûûXNÓŽÄÉÑ™£\$  ™b[ŒÌ\nCöó±ë«;V“	Ü)BW	´5¾ñ¤£ËAOYÔ™.>œi ™š;ì5YÀ²æa1ìIJkÔ)òÖ!«›6Åâp‹ÿ†FcKf<jÂ¬F@Rxñ¼­ºq—¦YNŠÅ–è¬¥U¹NhyF=µY±IÊ´°×sÃi‘y›’— 1‹¦-%1SŠRxÏ‘èöæc ·(f,Ä¸³ìðÛ©clÙ£1¾KkV¯Õ;«S\$ª™£5í¬9“vIÁ\rá˜3ÅªZÄò8Qm8*óˆW€yÕqPÆÎpsÍ¨ÀÞÐs‡@9C ÂÃ\nI¢-@ÜN¸(`¤µ”BÆ‘PAá)… ŒòQè. Œh»2ÖRK«QE…H„ˆGØEK[å\"\$øÖ!Âºø!™·(APß/ž–Ì;\\h¦µC”Kk•q†E¬úÁXk´/0È¹N²ëñ·.üH<5„EÙ³¢Ì|Ùp\$âÂ%¶Â¬ÓR5•P\\Æ½„Cs:áÈâÌæÖË¡à8•„#T™\r	b,e²–bÎZJ+-e°¶–âÞ™k…q®P^¹Îêê]€‰wÅà¼—¢ö_êR/öÀÃC`ì0†³‚ÃŽ*Ö‡¹}´V‰ŸátPè°ŠeLYT€d¨qÁET„%[~!Å¬Ì\"™äq¥V¡\$tÄ¼†)A<Ä4!A\0P	B¼Õ\\\\Qý.†Õ¸3/bé2ŒLš›X‹ùku±•TlM^[°•Š„Îc\\ÑSiïf0è\r¨XÓ0Ž5xF¤UR’/zµ£’´Ž‚I!0œ2–pÛc	\rÌì°@°ƒ‹q˜@€3 Þdl “ì­Ð@â3	:hç‡žjR€Ièµ2ÓžÂ¥*ƒ\$Î³PuqÊyné\r+EHIš  ÔEœÆ*Ú]“æO©v45ˆìd¨m§vH±á3Ü–èX,áÌ¡£x×„;^á½iB€@ƒHg,&XC”pNJÀÁRš/W²Ùm”ÂØrDµŽ×=.*Ÿ§D¸&IÙ[‹ètPºrJŒ“Öpá<'\0ª A\n‰lD­šž5HðžYºZ{‰P° +\0ˆB`EÁx7¸ò\$ï˜±QDEÃ,6ÍÞáVô d*QN2{å}Å¨…p›Ý9”q°ÄÄ»\"ò…_ý6~Eß³ÄŠDûÊnÉÒ?²ÄLå(\\\"§%^£;óPY1©®eàõià­Ž4ÙñVUPSÉM¯¦ìè…ˆ5@T1RaÅ˜ÙˆB&¢­sø{¢\r¼>ÂnûÞÚ©{Ù­ð¿ÕjI‰öep*ìŒûF\\llË-`ª`DIZË#!DtçÜ£ˆTX:`•4šR`&Þõ2¦•o6\$ÜªÜD·W§Üˆ—BâSuQh\$‚{\n“'Q|àu¬Ã}-AŒÃHznAÃ‡°Ü‚˜e9aŒë†HžRE0rªSšK,#Ýþ>Rüë-`ÒÛöˆe`Ç\$2‡uaC#sSx†‚‘§'TëåfhÊo÷Y§Ð¹RkB˜›‰—°„‘NIs„BúRäaW¯ÎÃL´Ø­ñÀQiA42J´Cµ;NNcý›UMÌžiF4Z&µixh\nºe2Fø+ò+ïz@œ]”3°7]ÆŒVè•~\n\n!„€A`wqÎ…áúòtÃ…êÞE¬I¸š(Î³±ååÌŒŽ°`^;)²{-'µRnØù™Ë5=Ž§òwÊD~)¹Ý:Ñ2«Ú#(î²ó+¢ª€Lîšß»—Xúc{å¹ïÕƒÀ0gÍ*s¯„-Çî°V_ÜÉ¸‚ð~6>?ûäYè¾W¶ëCoàó_…ó†6Ž%TwòtÍP¾Ê–-J§Ö·Ñ‘nñãý9€>§Ãöÿ†¸§aøÞ;Ów¿•ï}WžøEÖÖÊâuôý/zSÿ_É?:PvÿØ4ì5j6ËÉ%–nê–×Ÿ,²6T%:à¡O ñŒ˜%ú+ÂÀ-äŠ<,èÊe0lDÞþÐ§zdœ&Ab£ejÊ\"œvÃL>-þç`Ð âPøÅ\\ìJ³ŒPr.¼,†2C&8ÐcÞzo÷ƒòëä*s¤ªW„”ØdÈRD:Bæ®ªíŠB«úfbŽ§\rnúìòDëê7\rA	\rl•ï®A£úÝkç\nBã0¨¨Í\n\rš„)föy	­%lßh\$ûÂè÷¬4ÐÁ\rPÇ	p8Ì‡B*Ê‚Ç,‚ÄËÅB5\n¾¯x3¥(4†GÐpþ<ÌlIËt.Ê çÌœE¨/MÿÂr5kE\rd*QJ‘\"BÂlàÂx×\rÃù¤²\"A~Tr.¦iìÂ)l¥cÚuäÅñ2Óã0Ç%Vãëa	P©®Žy¡¨,Ñ‹GBjèŒÉdûðÍìÔlæ•0©­	ïkÌäÍ±°&±P5¯a Ü‡—ƒÐiÑÑ\rŽ.fÂ×ñÃ\r£\rï;\n*rÊIQàd,Lãäõ	fVóo›ÒH‚ºñ†K ¬…!Î!b`öpðñ1û Qî6Nnu)h`-\"îâö4ðÏÎ<.*tN.¿,ñÔÜô§ò\\Q'ªça&C×&°þþ‚3'0î¾Î1&oaQç(oÒáDùBÈÂ¨¸§ybèÕÎNÑc>û£ãøxdÐ H–v.WL%b¯+Ä{r¹Ñ&àò–òº¨äM\"&fx¢\r-'*ó¥b0¥ª!ð\\Îò£,¢ç(’w(Ò|ä¡ á„5*gURòý0†C®\$äÎ¸†mæXÉ¤}	qÇ(JS:{2Œ÷4rÿˆÝ)%.0òÌÄÔóS=³XçnA4×²˜-“nðÃÏ(õ7¬’e“q80é5ðî'ÍÎu8®Æ†ÝS7îxçÄÈxúDŽN@¤ˆäBI‡6¥†*úÈ@ü¤>&'\$Žm\"’I4óyÓÚ¹2#qó1ö-sç Óêws•10 àG²cÁoG`ÈÇ;Tâ\r(-Í.†FH}M\rpg@£ÚorÈvt\$æQ·8,ÒÇ²?6ŽkNx&eˆƒóá&ät¨4TñˆíC“aE\"Ÿ8Sñ7´¸ÍÌ€Ó¥6PP5Ôxj‚{EpE§¥ Ñ[91å9nGK’ð5‹~tGâLÔPbäN9HÏ5T²\"NIFÑÈðî5KTÃIBeFgÉ9®CLÐ´däôÚätÞ<fñ7Ç:ÐJèô€T¹¢×OòoP4Å4BÖF5\0Äó]Irv-aJï4:1³Ù\$cå6ÒèE®4M1üMNÓCòÈ•oŠqÌ(nÙTM/D‚úULFò:h•T)YT²·TäúIÄE³ºd5vôæ|Ëõn=u¢±‡ôß7X°O0uZóU–ó¯€íõ	&=\n’W#‚š(@†€ä\r€VÌ,Ï%@kv.ê,~ñÆk(@Œ»æ«Iþ\rÌ\n€Œ pº’jê@oƒ\$óLñƒÚÂÏšð2.ó¼­bÆŒ-ÖíòP<ÕKaZÌbÕÂ&ÑkRúè\"P\nÕ.æjÐ€š` ÒÀòãB[]\$;]¬ÅOÇ+âåM÷sî¬\r¶±\"õÒ¢	ã³<wNåõŸ†Nã¶ŽÂbò&0JDzTSåH&3‚ßMœwï¢ÝdÓD£vµ¢tó,ƒ¨ú)#LøÇ/Ëa¤—¶!0öÚ+.ílÑ‰EŒùn±9k¤X12}£î6÷\r6·*bÄ:©r^uc–Ý…jEqF\"5Lì…j^ ƒ=î\n¹X@¬j3è0ù1­Ù@nâ@¬ Æ ê\rµ:¹7Túuâ¬³P}írŽl§ œè…hE0u6B¡eê—(\$Qr1<ªÑ,àÎÑ•03di#R4±¢Øì`÷‘ÿu£æ¬n5ÖsoíggìB¢æ";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæÀ.Š­'â˜èôE\\µªŠÒW\"¥u,ˆÍ±»Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­änã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑàP)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘5À•NB¤I’pD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢±^\rãÎŒ£vÑ<í3äü„OˆÃ³]º˜¾ÿŒ#pÖÂKNö]ƒpèã|¿¾cò7Œ‹ç˜¢&\r/»\"9n\r—·0¥™nMór•3^ë„ClDŠa¤C)JVêá•Ms×-ôEe’/ºZ¾á0Ö2RÒîg;U=òu%/wQå6Ñ\rsÖKŽ®ƒãØþD3 X7\$AM²!Aôò¸KÆÒ=e°üqÅ£åÇý¾eÒÚÍ”1pÕŽ›soeŸ¼ŽœAþûWÄ{ÔY* €\n•ú‰Â#Q!Ô6@@ƒl¡•Ý¹òœ_QIL¥5Z„`êƒtO©î\n ôF¯ ºi3†v Ï´#`§›#õl@Rº\"…5:\"WJæd}P™jbtÂX\\>w.™ÕCµ¤CÂ¬€êE)=Ç†²Òiy€è¸¥´—9``lnGüñ0ÆÞQC“)iö+7ôP{À‘qÄXqfY¤7„i#ÔwïXÖºµ\"í\"Y0HèEw¦h^©}6,ÑÖ?è•\"Ö‹Ñ)Z%§6…d“1}ÑåsJ%Tƒd*Ñ’ÉºE=GXæ•ê5èa	JøÜyH ÑÄ¸˜ˆ–œK<†\n©Ò“hä“Ò:Äx,5¿Ê,’DÇä¾+‘òûy¤EçÁÃ«'ž™^PÇÆY6å,æfQmäÌ)V²b\\Œ‚¤ÅØ1. ÙOYð49\0£¶w[™â\rá˜3ÆÄpùy-érc\$ ¨Ï(mo!äAðæCc=áÌ3@À@PÃ:+`°ø‡*(a‚+©ô¶ÜO¸(`¤¯0¦‚1H6fÛL4v« Ô]^Æôš@D Ar8[éÊ?\$™\0Íp®voÊD¬£ZŽÞñdiLÐFÐ‰òñ\n‡gñ6£&r‘Bf\"ôYñrDâ©JrÈ+ÁPï·£à›-Oˆ°ÉK˜}\$iù>FkOj-LÀ7ÀÈŸ¡Š,pŽ\0Ï‘nU©ük‰ÕT¿C—Zª3õœ·Æ×‚_jI£ª5MåDª€ÑHG‹ÄF4²¼C°áÂÜ‡0îÙ\\heÀ4µ\0ÉRlHhj\rIª5f°Öšã^l\rˆ96FÌÚUÂOM¹µ7úÝ£vo\ré¾L×\0Ú\\…péÝÅ‡ã\rg‰ÊžfDƒuè²µ\nË¢2@\rw„öÑ4›²ž¬Ô½CEÍ—Âmkm\\«Ñ9B«´Ûp2k-¡@Dj†cœè\n\n (ŒXÎ~MøP³ÛY†¯Iù€Ã§^¢™dˆf<U0¨â—ûŠt9Q0¡`höoäX%óX³Ó×4ÿ—‰)db1Ùüš\\r‰\nÇ³‘GËä,}ÿÊÞ©ãp¡åÒ õFcºÕFÈ¦Õ§©Q0»ˆ2èàâhBiß%¢À²[ˆ)iä½™Fˆ««j0’>Nà ¥ÆžHÇƒs?'ì5\0ãØ ÁÉu×Úÿuˆhm €1”7!¦Ï…¼=Çe|¶kt4Ã‘øó*\0žÂ¦tœëŠY‹S:´=ž¨nÁHÉÆæ±rœy9¦—ìøæó…Lhª_ÐQ`Ãpf\r!œ:‡(bŸ´•Å°„ô†\\;#óþ‹%kHÆpÝEJDq­81n7#·ìá¥§`©‰[Ë\r&žgÒ¸¨õ+b\rŒÏVºãŠ—d%šX˜FR³µþYá<'\0ª A\nr@@(L¼­T,#²±ÍA‘°÷\"¡”Ì´Ù¬Ø‹HÕ=Ò~˜aqL}õT%ê«y­QR•sŠÏLÊ¼¨\\èšr¸I<\"Œ¥2DŸYÐdíåÐI†4íôõž’’ª,ãµ³i†è;Gê;=ëG}¡±Yò¼ˆYiúÚwgö¡rý·bEúÙžBã‹)&UÍÑ0[áë<Fx½‡m<¦f}ç±+ùê¶qVxŸ]¿u¨÷ä*nz›óÖpÄìœõ°q¼–Ð£žT)U2”EÞ¾¢ëgÞ¿‚³sà‘’™³ªÄˆYÁ) H<Ç©Óú¯ÍÚþþ8yÞ´ùÔÔ3†€Aˆñ.OpÄ/If\"wSU¿€À-–sd9ca¡I¨µ\0æ\r@Jƒx&ÎBTÇJ›%äëGžE\0ÒH(eÖ\n`‚€¦£Ø„ ÊŽöœ„ ƒF’¬¼4i0©ð\ncO€¤†ô#|#\0P	 Ü‚\nq ¦mT¢JhKp>ãÐ‚0. îžgzâî¨y+LôœãZïìp~Î6Åæ7ËŽ’p˜ð¢Î:‰¼'ð¤¸MÞ‰ÌþzÂ`BªÛn‚1Œ©Êøi\"JOrëi ƒ.2çNÆ&ÎÊÑLìwDŽ®ø/ïLÀõ‚Œ ãœ‘°H‚Î‚úbÎN&z³á`*EpÛ„4÷	òêjÚ‹+Zœ¡ÿERt	”ÎüÆÊ¢I +äÚBÇØÍh\n'ÏœøËb.±dùïŽWÍ˜m”eGÀb¯à¨ÆfM¯fÑ	:öÉ@8ÎT\n€‚`\r>aàÒ=à@ #Æ\rí.()œCî¸î*N\\ø…”Ží”Ð	ˆ7¯FIGÒ—\"6|±Ð²7'ÑNqï&è0æ×‰HÃîÆçïÍê¨{„ó\\Ë'˜ÎJH}1îç#¨XpÀ®, /4ÊMªÀÇÄu®zõEêo¸ëñþ\",¡!çRAA ±àZdP ç°ØlÝo\$/8¿qôE•#d0ô„Ì‘H× L¦¡PŸ)à¨hÄ»+I&’.Ÿ22«O5Ä!±ùr ÎR% ÌW\"²–1¨1Rlþò:ÿ2]*Ò`×’d¶iÓ,r¤î\0r†ÂÍHâB0Œ»ªží0H'â‚(b‹\n²ñ,Ä%*/Š†¡§ª«“\0ß3R`òò=*EÄ€W®†TÂ!-q„[2L,ãQ„Hv9®ª4l—NÝ å”QÓM/ë0²ZG1Z©â§\r-’µÅ AæŽ)	¤¬l÷¦ˆ-êÀd3z,ëe%'¥'Ë\\³JŒµ“m“vª±èÈ8€IæHfÛÀ†=†æ`ª®Z/H“3žAD,J\$°ö“bµ¥„fÑ52“\r'Ò#=sK>gÃ=ç¯\$SÚÉ°ñ2¯32ò`Sì{³ðÛ+G¦Ã¤3íŸ*’ÏòD8*ð›ˆ®ò´ «BJB’_ lêìÔ¨ÍãC”\"Î\"#@EQîyé7=ŒV“ìEÇBÔ&ëÔ]tHî›&oN†á\\ÑfGGJRe*N	i­È­ÞÉ“b‰r¾ë¯õ¢ß'å91ØÅ4¬–ñm:ns²k)ÎÜ+ñBÊÔªËôÅ\nÎµ!£JðZÓ+„=ð¿DÒFÔC'ô?NºÑNŠí”–°¹NÀð\0¨ àÝÎjZçç4.4ÛÓàêHbtÑ	¯Xñ”./aË_“¨˜r?@TEG)M\nõ<µAGòÙ3òOEBo@cóÇ3\"ÏuZP4dœUFÉó-O³ëU5tôOJudwõi>’°’iÝ&ic«CUƒY²ATôþ±(‘	áZ”c>ôgCt!ÕMOÔXèI)M³\$’Jx´÷\\´;GuÒ5¦-6ª*j^Ôç?óÛh—3IN¿Â!\$ŠÏRPè0àÍ­¥]S»>wBr'QT_uE_³Ê¡]9så6³`¥*³/òK	µ(4ÅV5á1¶#Y4ä1`Æg-N«1‰©Q8³ã`VE[5ÑVös/Ðã)1Û/rVtmYÔWh”ÁgRÿ\"•'\\4\r\\u¯i¶…X¬<Stœˆ2~16œ6%\nß4J¬Ù6Ês´ë\nt¦ÏÎ/:Ê€J'ŽÍk^TS,¶õ¦I\0Pÿ€ÌaæÒ£Gå1Ã§5§ú1BA°í&òË£n±nMpÊÊ“áR	;mröX¶ã(sH¨¯nMÖÄæ÷<çtŒç¶ùS·%G…æÅ¨…IÎT5  ¬:ÃV8†…qÔe2‹HêÑrÖ‹añ\reaGVõuÔ`ÈÖ¿=V)Ëtî1u0¶ãW‡VïL‡VŒ–#%vëTµ‰Yäv˜‰®{ZÖC|ÕõhkQ|Y)ÀÇÔhÈvñVµµ]'y|\$öV¬~q‰{„¥ú.4dâ'àŠ<'Ã·ÝháCÕÓ	‡Jƒ†ëÑO6_%˜+^– Yqi#zdÅñA8=‚8kC?õ±\\ö¹ƒ5ƒXTƒJÔ4€Q…©¡eØz§j`ñe…*m˜|Ã·ïkJJD?[O%lÔCb'÷¼`¬4/P8oiŠh—v6(ì,ÃLó‰ÓøP×ó:·¾ž¶3rµøò•E}õ‡~6¹4ûce•|„!kUÏU1Žñ4ÌX—Xå@7Ïi÷æƒÈ@„MÑzwB‹”€ÃõÚÙÏW]ø‚8ÙÝ™Ù€°ÔJR0)É[]×³“•“ÃŠ„´µnH©agòg3]yY'C8ã‚˜ç‚ØK9eZn¹WÕÅ™mØé}yNPŸ”iˆë™Ùui'Y™ÍiU—;Ycšg	í	”Ù•¥õSQ¸%–·»h8i˜•m™ÆÝØ^ö¸cœøGy¹œÁU6í½¸A’è¢0‘6¯˜žq	cDÝrRµÉ@ù›[d‘ ·+g—•™TOvÃ…¢1i«—Ú›Õ…˜Yq~p÷rš7jŽu”¸ôY	¤Ñû£šS’¹ßùˆNÈ˜M?ˆ¸8ïÜb³nª1WÎÝgÏ-˜5ÍŽêŒU£€ûŠÞGz…cZ‰SSixE–ú¥íç§õ_ª”c‹£Ø	ž7õ¡™‡‘\n@·-UXÙÞè3Æš©–{Oy§ÌÀxŒøs”%k+PÞú±î+™ámÛ8×!*dk¢ô?÷†Æw¹])›\n\\ÓŠ®É±R=±–pZµ8+F;äýQÃFBÓË1ÇÓŸª‡²·_ƒÅ<©%+X—„sõ¥e6^6fx[¶Te¶štÆ}lû[s³PPñ@e>\r€VÕ Ò`Ö\rÐiÐ`‚kà\r§\r Ì¢‡*+ÀŒ=cÄ\r¯²ÀÄ¾î\n ¨ÀZ\0Ap{²E‚½°S4ŒÛ‰»†ÊÐ¸á‘±A’œ)Åëžtq·vS'_Ûéz\$JÉ›óø~ãGH7»ÿ«7³¶%Gm”›ºdôÔt,ï¿¼ A¹GŒo»\r(×–	»³»sìÍ¬]Nø\rÎOhg_7¤ÃÓOÄ©6¸Çš˜Bˆâ¤“ÐHéß4œ0’Îy:œP«E¡|8¶Ú¹k7ÙÈØZ)w§À˜ßDVE¼®(«âl£Ä>£û‹ÆŒ‰NvÇ|AŠ…ÁÚÏEè¯n™IÊÍ¤býœ@äƒèÏ0oE¹éG—ž ;?Ãt¹¢Ö·˜”*~LWÃ¸La‚¹sŒ¾‰'Zˆz‡^ºÂùigùåÂ\\@€¨?ÃØ>¾< A¼­V\rãPáp{\\õÀ=-eŒ‰tXÍÃbù²2qoUM—cÔ=Õ¹ïuèi´…H˜8˜zE†Ä†|ÿ8áFfDÍQ3gtƒìà¦ ‚™¯À³O’`ê Û>ÚBvšÈ8¢~	ýNl0`«`êý?C@N%R^­¢t¯¹˜Ã{<žg¤ƒ\"Ë«NƒÍÙ’\0©Î¨@>ÛH\"WA}m…W54k?¤“³Õ“îØóïO¯nõ³Þ1Ðÿ€ä½YŸÛY¥–Ñs=uÂÃnþKr;gÐìö4ØÃúÔ	\0t	 š@¦\n`";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¸0äãCŽÜºŸ+*5NeÄ·	 âÌÀMhÚÚ<)é2×Â2<DA4’ˆ€VŽlã,5È;›,+dƒµE„;˜€&iüdÇÛ(UGT6Ý­§©œÓ;ªËÉ?IééGwYü³i Z…ZÕrb¢¬¯åÅ¾ï×U“6LV\nz¤9D×SÖ€ZÎ»6‘bw”·60»Ñ+;¤ŸÄ…ïF«ùApYÞ7ó›¸Y\ná’^ÐÓƒ,EŠªg+ƒÖ9£0z\r è8aÐ^Žúh\\0Œƒlx2ŽApÞ9áxÊ7kCÄ\n7cHß®OðÃ¬£¦†/Á£Ü5„Að’6ŽÈÛ­Žà^0‡Ô¸A»ÀãxÈÿ@›Þ)Š\"`Ó¸¶š:ï»y†5]¬MÓ·D©“r­Û¬\r6-ÍYKûQFŽßIÏN3±OÑÄ]5á9uQÂàÞM=–Øõòc…Q;}Í{†·ŒrCÁªpÒ]ÛŽü±'q¡€.s±(¬Ò‰Ú{<¹´£‚\\\\ÒJàËbÛ)ÂÞSQU‘¿Õ	'pã‚ZB&‚0Ž£`èÃØC*æK!‚œ„O	ÈS¬H˜õ†ï“Š'éÄP•’lJê”Z*àº\"c¶FŽ’Ú_\n(ìª<ùYJ7*0žœ†vŸÊ~+&=ó´8õÞh¸N\$ôª\"zœJÚá.(EW²²æYbµ+©Ø®¼ŒŸÈllÈ4÷‡0ÆÛ ±\0|Ê&–€@âc°QeQ¾„‚@üV®¬\\;(Lí\rZ0LbáŠ¬%Ä˜œš£r°Ž6FçP‰c`‡X4PÚJÊ‰#†ÄòÈ0Ç!d8\n\nr>C3èïãœu.nIF1ÉJp¸æ!(’ËÓPŽy@Y>päcžwù=¼7²C\nÌšBRqÉé'\$\$D#€n@? äAêlç¼7†`Ìš•©=r&eêÉÈT\rçÊC†àò«`¡Œ1ŸÀæŸÈ \r¼3£Àæðr›á„3†x'¸%pmH7T\n\n˜)q°åo#‡=-Ýø aL)bLrŽ±\0JH¼í›bx«Žrñ•Á-Î’,„§mÎ¥5%4œ.óY³XFOá*¢‚Qáx*TÄ)ÊÀT=¼þ†f¯8\n=¨µ0å<cl!‘ªzÏÚC1\rÄ264;zo…`)ÎfÄ”s(±í7v‘”,MåZ³zÌ™×CFÚ[<UÀ[ÑwÊE`€šCšGÎÀ0îÕÜeÀ4´\0Èªs>\r\r¡4FŒÒSLiÍB~5F¬ÖÓ\\±M}°¶0^ÙP[hm@‰¶ÆÜÜ“tnÍâ­7ÓßÛHhpN¿†Ö{ÜYój“u¼*ŠhæŽj²zÅõ_¹å…êóc8§TÞ¯j4¡¡Š”LÆ>:ñuÓâˆwÉØÄ¼@P\0 Ä•…#r‰‡‡Ž‰\\ÆµÎQU*åfŽ9BÇu•IôXïžhg‹Øsñèð¨’Øæo4s,)Ù,U:‹\nél.ÇØQõxsNÜL­.úµ¦¤‘)\\˜¤j\\¬’JOH ¥ÁŸöáƒsƒ@è\$4\0ã\0, ÁÈ7†Ú‡QCuM@íl9Öáò?¡ÂzTcÒX¾Â‰Q,Ql%+etž•\\<.±¦V¸„…(\"g‰o”,wÂZ‡âut…-DX@¹æR§~¥¦oÐæ-›xBËTR©¾õé=|cëm@3àÄC<_q9üóîÏ‚0T½M¹Á†–èÕßÝÁÈyAµCÜÕbÌm¦ªt™²\"\"äK„\"¯.äñ(¤âcÐ¢ÂA<'\0ª A\naìPˆB`EÙoQPjõ&zŒz[QÉƒŸ¯/žw9§H·§aÚŒ‡Ä]b>… \"|8¡F.øß”RR†åM+SWCMayÞÌ…\r@øM˜X<%rk¤±\nã¢×àT^Ž£\n \\0yÀ’c1N%–åõGo‡ÖuO\0œ|˜;ré‹Ü~*ÇS¤©sÜ²;ª^Ã+.»wØF»æJ†°Vø^hßwHŒZ’”vDd„þâBà&AÖƒErÛÁ.Ý›Û¢õ‰^œX{)„¹¼‚õ¼QÊLrÌÝ¤ë&[é¯`*ƒ›¢nÑ\$ƒHz€!\"‡	ý\0jéùh2%sp¤\$•¡ø\0Çñš+qð5°A¥ÿwÊàÏ¸eë&1»Ý{ÝGB,®“øìK„8Ò«âçéŽ2”áŽ{7a˜(CÛŒN—Ô§Çk¡µ|YâÓ­Þj×„¬¡DêóYßÜÛÏ;yã¦ÜÇDIØðÁu;ÒNïCâg—è¹®Nü®wÈ¼£jæÃ~[+‹™ïVnt¢ˆ4¥ö±ïÈ½þŽf\ndB,xkšŽm„Ù@¨ †	\0@Çæ¨\r#øÒ¦€>\0ÞÆä\rPòä&m\n¤Ã5äJ(}Ê.[Iô\0^3ND¤¤óÅdf„ZYårDP8-HºsNH¦å;y¸äfR”çª.n„ºjìQŽÆÁãÂËc¤1æKé®'pdêb&+VÚð;	DIè„h—‹è¦ÇxAð¤¥°bDF\nc§jGöÈ€îb²}¡pý¢¶öD¨2e8íÄ ;ä9ÎÒÂ¥6âÏ¾r~¹oî‘fRCAéª„eô_¤øà\nàÊGM^ÓƒòRï›	FBQ9C)ŽÒTLÑ~B‡Í%Qº.Ejšej'â@D§00%j6¾^±f_c›ÅbçÃº~BP\\Âf÷ˆÞúdJ9E	B¯ŠQˆpQNrèPº¯.K„Êö^ÐÎ-ƒÂÞÇps¢²;n–‡fèEñÈFød—ŽNDFlíékñºrÏ¡é.–q­Qõ¯úæHç \rì5Î¢1è‡D`1bî±Øô/\\BQçŽ<bÎjâ‹ü‹&%­èE®6àÑz–:B„ì„ø+g2B³\$­Ì”2RH\r¸ÚÒ09ÐÇ\$ë·%Oæy¤ô÷c\"tï|Ž.õ¤ÂSÎM!Í©'Ï&ç2CH%íbE²E§¤½mÐ.èz.áN2j¤)rãî\\¿Ñ³'Ó r”ôèäÂç\"\r¬æÆ“Ë!ªp•ïüwN##Râ.B®£ ùB¡rÔ÷ƒ¤õO(²òéOö,rÑ.©~ñRËÒ“1É(ñßÎbàs&«“*’ÐhÖõ(pêvÓ6\\Êa«í†,þÌBQá\$\rdÞóVXb_ª;p[2'ÏR-D¡jðO/`Ínæ°?7Ñ·1³‰6sŒ‡-lD¥ÆsÓb¹3E(Há4¯4ïŠÖs¤T—9s>Iëµ3Rè8¨>5‡=	ÌR%Šl¥³B÷äòn&r¨Q„8zPHÀ°‘\"²˜ÏŽm,…js/Œ‡DŸ?lÜå\$Xãh„SGÏ*^YpÑ1eöÿãÂE¸’è…?Dzø*SæÿïrOÓžøÂÈÚó¦8Ó«\"®ô¼5sèE¯u¥xE¨IECÈåDäÜôó³#42Ö÷³¶õ“Òó‡]9ƒI#»IsÊ¯3ÏC¼øRC\n‹¶w¥jþ¨;pÿ1ä®“œþŽˆ-”½L‡;‹4t4ÔKtÏB\nøó}JguN4Ù0“´u2‰G»NqN©KO…F'ˆ×´ÐíôÁ5¯?²zÁc¢6Ž¬þÑªB•F¥Ì'r\"V³Î<#Q5'8MxQ#ÂPÀ\nCÒ†§2ôÅ9³äõTŸÕ[MtþÖTÝOÓ¹(´“VuXÉ5]r=Ë0r‚vut @Š\0Üðj¿(qO®ŒøæÈ‰Ê€êhí ÉY•œlu¶àuª\rõ¯[(Ž&hV¥nB“î.{=Èr0¨›Cï«°Y£ßI’ÏV2•^È_ƒ<ÇAO4Ë_Æ¶œ¶DÔ÷XèßY4á` Ë^öVÕwa“\rVãQ1©%b5ÿbt¢röPó'ef„u×_TÉ_’ë]|9¶Ocó3J”â;qœ*b·åš ×\\4©;•ÓeÉC\0%ysm5 ¨> Îû6,ÖRâÑ÷hï°©¶(´aÓ»I6¡i6¥f‡fU‹H”ùY¦á@Ak/³gƒOl¶‘lèG\n¥£NUN”¿ÔÇf\r\0vˆ¹ÓHTÒÓl-4Y\nÖï6¶õ;vùev»/„`ï]5ˆíI °\0Ñ5È8„®\rKÌ0þÌ6'¥Û5EjKì€ÌÃ7DŸTŒç38|Å ¦µ‹ueòLAfxå&å ÑjÅæVDTktp³–å·^pûIÊòRÀ†€ä\r€VÉÀÒ`ÖÎ¢\09õ;f”n’è.5¢°Í:oàêÈ Ä¸\nÀ\n ¨ÀZ\0A`ç«°y7¶¸+³€­Ô«,Ü-x(7?AŒt&kô@›} Ì-bÝ\$ZQ'Ì9óö 	Fyƒf£”YŽT6Ñ7qûf×©'\rª¤6X}\néau£lMê£\"¿nÒF‡BðÆ\$Ál@˜\ræ «i†ÉöjãÞ@daˆ)nÎ`V±“8¥üS²`–T½w˜œ(®@ªÝ´a7ÄòÿäóuñYv#b|Ø“dS“rÆË3¼óò&<7…Vœäà¨Aƒò?£Ø=ÀA|l˜\ràáU†¤ïKŠXËB†Ju­Ù'Õ(í3àL»‹§E@¶ÏŽ9#3Œ)=+#…+c„ˆý/i:öÙ Ü-×H2œôo_%çƒÌNÜîðXÝ€¬ Æ ê\r´r»Ö|šõD”)FŒen'¡=IHF¤¢zd¨AH‚î&TQ\$Xâ\"®òþ;eô»zßh9Tt]Š¤šß‡fCƒÃ.,“\rºàÙ¤w÷t|Ñ\"6—g`ÕñDž|Å(+§3M1Lxq_H7[r¢à;yÐ.g®	\0@š	 t\n`¦";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtê„2í{äî§Ã†:/’BºŒÊ0ŽKt 4\r@ñ\r®êPX9ã`Ò*˜#Œ£z˜:A‚cJÐÁn¤V‘:ƒ¨Ü:©ð·01b\n€ÞîB²^-ãq½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ì#\"7#ÁrJ3…éŒâ<?H3–„LÔ ËŽ’à¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤ò>ˆ¦NÄŒ#‚|Á–(Â49´0ˆŽKÀÜ¼\r«Â¢2ªrQ>:=’âœ'Š’¨²×ˆ³'>qb×´¤Œ<Ž€Mš›0Mp—¹ktÄ¤£¨Ú	ìÜ3^\ra\0‚9J0ˆ‰-.Ó\n;-ƒ«¦)Ô5Œåh2HÛÂ\r}h2Ñš4•Ö9.ˆò:ê(+d¨0¼O˜9§Ï¥ˆ(od6ª˜ê¾-Ä\$ß4õüôæÃ.¥4øDÉÖ>0Ô@PÖã¸‡’Ç¥o\\Ø•éŠO\$VVwa×yö„øëb°<÷çÒË â‘ÚR•¶èô7QHbÖÓÝIòË(zöÁ_.ZN9¦B)u?¨§ÀV âw¨6Eây4CxÌ3CÓbNaéð×±,Â Þ¹Ã#pòFCœh1³˜ÌíÎac49qãÎ0¥‰e§5§C(P9…)<I®H0ô¦)ÁH@58Xê¸ä6§Öæá	\$n“ˆCÆóä(½EÃq¥JòŒ‰òN*1£uòÉ/ ƒ\rÃ=Í5 H÷<1¹h2;„JÁ±-KŠ-™Í‰EÑ©=ÂÓVñA&`÷“0Ø«ž\r…à:bbfƒ+ÇBa\$–W¬©¨\n	¡…Và@ àsä•JPð`eø¿4¶—RúaLi•3¦”Ö›Szq\rÉÍ:†”îž[|OÊï(5\n¡É‰Š8¢C€¤”¡› ‡8Ñ“\nóQ/ø‡(G`ê¹7áÐç4~†Ca>{)H“…SÄ’‰†\rdHÌ<bB›P	@èÇux‚È ` ¢»¦\n)Ø9ï?…<Â¬\"ªˆ×©vGÀ4†Ô<b¹,mÄÀÀðÌÄà aÄ9¬¦«(‹+Ø{@€&@È@âjÂ#Ò\0÷J%ÐPX©'	\$<’,Ò¥‰…RäpÑšP@–CŠòU€9\"gÏ\rØ@t\r<1—%/1LÌ 2îC˜rl^Éx\\¡@'…0¨lˆùsÒl<žö [‰&¦}GÊ\",òHÒlF]òðêC:2mH@çAtG%Ä1Dð1× ¡Ãzi”DØ4¾e20%¡¤‹„`©ê”’¡À’˜X­3&r—M¸¤=SºRò<ÌÉJ‘bw!Ae!<'\0ª A\nÚˆT–ž1ï5f.¶xÑHúv!”®\nz(Lµ¢ÔpÍRAKY`€ê¸Ø¥êª×.D\r4·zÊY”Q¬Fæ6cšôk‰°é!„ŒI9g6>0³^\"©4ôÙ62¦ÞpŸn5–H;	'&ÓÒF>Št—µÌPÈ3¦Î6òàŽ1iöfÔ4¦Ø†Ë)¸s(¼ƒGJžËÛZoÄÐæ‚U :Qîz&Ç¨ùcñ¥=äÀïÐ3š¹\\Ù‚ÄZ@w´„‹Ñ€¦¶J›ÙÒÊR)r¦gT½\0 †‰ƒƒ©:Œ\0002†3BqmuâžI€@ÔÐÉ'ƒj¶Ž!âô¥¨eèX+%hÚy×k´\"‚ ºX§<¿˜çQˆèf¶Í	„J\\þi‹¹L*\0Ó_Kv&\\¸ŒãF”rPÒ1S>iD8G\riTRUn#?%—èO;E§ôl|Ð)CµÊí¦¢\0¨C	\0‚d’ó1-Á\"v’.ˆTIÂšo³Ñ(%E¦ÊºÓfj¡h­4ÒpNl:™‰j<õO(Ulq¦Uˆ¥3y…Íu0à!ÒchÁp	Ì3ìž\$lì,^ˆ Ï8ºœ¥,ûŸëžpÐuBÉÍD>z:TóÊ¹C[-0¥Ô“­3•£3¨Ÿ±:GIçºu…Ž‰ÍÆÇWÐc¬óÀ§ÔZ“>ÍÍ†®Ê\nEDÂÌÐîDJI5#\$m÷‘#îª¶¡/ 1Ž2áÙ˜’4Ìhj&‡pÊ²Ú3)îH¨Ÿv«µŠR¨Ò[Jl„¤‚A \"ù-¦ÊR£“NrË}YõS´àé&²¢œ€¤¼J@CÑ|\nŠÓÂ¢mmÎ©–†@ÚN5XÈÈ¼\rÎPíè~=Xƒ¤MÄds^çÇ9cÛ5ÎG3Ú£§ùsjiy2/@w‚+›q\r¡¼Í´ä!)UAóhrÍ­Wôf¿&ø¶bòK0„FºŸU¯ÝaZtwS„ÿL]X9¬°ŽkT	ŸÁ­a\"\\xkÖÄƒcFÝŽ‰ðëUB\rðµmÁTó\r?Þí9ôð@€Òí¾Î±{Oðk%6¾xv E¥j¡øt“øósiûÌ´}÷ã¢ïçþh‹ùnoÇœ a±ûÜÅcã{¼ýPŸÔ±¯Lhã¡#&ž´€'Öãÿ`Tý™>ÓlÂéØïÚ°ý0l@qÚ[¨Äü¢Ä/ÓxŸŸ©~!çM³Ñ£…´ÓÃ,²µžiìÎ¬ÂŠÇ‘ÖÕ>ò«ßåžiéhû`b;HËø*“ÑÁ>È\0éK0‘b ŒíDúï¢û&ÎÃ´³\"äÃl\$WªÔ9k\nÀlý…fêŒ\"æÏ­4ë¯8uÌ\näNºÉoBçÐI.*7ÐPÉ¬„0O˜´N='ú¯0Ì†ûoEÀÈo*W8W°mˆºI‹\"HÂ;ÊŒa0CBÞC,€i\rR‹Ä2ÝïzõðFÇ¯}\r?0\\ôò ^ç¼\"¨|Fp:ªŸ#BðÐ…d#Åò\r%÷Ìš0Ü\$PðUÄ†6‚6/,ýOØÁCßnÖ=ð^ç°É0ÖñsÉÛå{Ñ[O×oo»…lôÑ9¬R\\‘4æ1JÄñ(ôç¶ÅPûìJWˆÄôÑ[Ñ.CzCPlÈäpGQNÓã²FãéÐ¼ääoçpSòxcº>jéÓ @SÑ¦÷*Â-ˆÖB%¦WKd9Eø¡\r,¦èÖ×M\00061½‘Á\ro®à,H6Pï^Y¬ç1¶!e(ø¸÷QÌÓ-YOŠ÷/ŽãÌrìÐ…ðâæÂ˜\\¬tâXãÚ4@†E\0Ød¢/å”\rÂNÊ4x‰–Hª `ª\n€Œ p7îFRcˆÕ±÷ Ov	Ükë×þöÑù!ä†9ÆÀØ®€RìvQFƒRXÀòCd<,­B#h/.2ì©å‹!²c\"dã²)…¨ÆCÆ'ÆªgCãIrA ò“æ&[0ôƒ¤=ÂH]J`\"é>â\".³	Ã-BøýC}\0êf.\\üÂÈÖFñ'Òú‚k»‘ÄæE~üÍS	GÓa·1òTr\n\0 C\$\"0ÄÑXÁÌ1í§.¨E³ž‹0 ’ˆè¦lSêìî†=ÒHJï5 „\rè,iî>Šf\nÀÂ)å¼/¢Ÿê s.4DøW§#@ôV‚ø]dÙ7H7£Ø\0Š5Óflfñ	•.fnò‚~\"ó\nn\"Þ±…¯1„3D9Ã*’Ä>ièîBñr#„¨1¥P@";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ4ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!®0Þ£(épï0Â7\ra|\$£ƒ¤6ß xŒ!ô°b\0Þ2:îÈæä\nbˆ˜4»ËZ©–1|<Ý¦)q-f\$Ñ ”ÚOÄ‰I\rZYÒ„&®7Ö_irÝèsži¶-HÙ´vÃjÿ¤ª¾n˜Í*\n'B‹^„»A±3Û&Ìœ¥ó™eW©©\"@†ÇHÔÎ©—û… ‡%Ìõ)™š„4˜oyËfÉIºÞZßW’–ø‡Á‚%¼0Ž£`èÃØ:Œ±Y—YkcWº-èK£\\UEi1‡LÜæ’–|e°DhF¹kUM›mi>L¬:l¡!	]„‡êÑkAH¦R·!Ak\n’X3¨rÄF)JB7*6`o39Œx\\“Cé^ºA#E”æÞ11=8”¾chôèŠOä‚lùºžRÙŠ¨i­™­4ˆ!HëÙ\$Ðƒ\$\nÎ†Œ3p*›g¨ØZÚjxë[¿Ic¨Pu(¬Íc¡¨üºÂfzû¼V/íh¡F¦éF‹V¬â\0*x9`’ Q†É—œ°rGá°CÃ0f\r‹Á•5“ZyË\r¬,<‚\0ê¿C¨cgT9†g*`oè@9£Àè¢èaá…êÙXâ§x0RZÌÑ»Ni!/µ@Â˜RÏUš·À\\AãÆ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Väb´”&¬Ýá«#l.	àT8¬0ëeé—òw/\0ä\0_Á‘x‚´·òà,ì820º„;c%­U•è#ßL,h¦D’£r¢#â.vÈÔÐ£„ÖŽÉ²´r\nKNAe+RŸ“h|†¤bxCs;ÁÈæOæ×£ ¡à8•º\$|Ç\ruo®Æ¹W:é]kµw†åâ¼×ª÷_4\r~/æ\0Øä`¬0ØÂØkb,MŠÍ&4YØã\r}±ÀÂÎC(9‹Æ-Ñ`Ü&¢ZÃDKŸ¤TTÈk2…=—Ÿæ·M\nV\"\$÷ü”ÍšŠ1„hßÒ’’…¸ \n (ÓùUÒ£|F  ³‚”y'JQN7ÈÑž:˜#›hŒ*\">p¸“ü›A.5P…¸áÐöÅ#Ø*JykOf!\"¦’˜‰(°¡;7bHl7­(¤ÔÝ&…”wÊe£ZŒ®Ût-(ÎrMärJ§ôNn4DÙ.–	àI\"áäá\0ÈYÊrìŒ72ÀxÝ.r}\0Ìƒxm—rö‹OÃÀ¾\0c,Œëž¬#e=I8IPBšš›Y\$žžÅåb	áL*;˜7m“ø­VövÚ‹ë}Ê¡3õÆÝ8ÂŽì°-FFH¶Ò¾Ì*ËÖ*FÉ¦¶æMÉ*eÎ¼KœŠùCt^bA½v‚¶ƒHg”&]c¢r‚ÛÁP(bë›˜ŠôrôêëÝ’0¼N:òBma™8ê”šÊ5xNLÎ¶ä6JÈ4 ANÀh+ƒL&!é'ÐŽe™—È!iÀ64!YÌ¦e`'†‘HYû4jZHÔõBñQz RH½è·¥hQaNÄšÔ!êàîòêJ¥EY„BÚJA{*áV-WGS4¹XlÝÏ3‹Ôâ¸\$µé¿Åïø…-jþPÊ½cRÐCS•NSV¡,ZÞS •píÿêgõUT2Ïî%Ë±­jÌÓ­(ß£ô-BmÐ-¸ßš\0Dj&k”°°ía¬u–³¥°}jKK¿%ÏN•’%R7BëtoA ‹g©²6Š`ý›çÜÎÐåQËjY3à¸néhiNt!ÝáÜèS§H1àÉ©uëòÎ„)÷B³hs¼A(“Üî¯Òæ¸ed@2‡}JÒJ1ºØ˜µ#E—!!\r)„)ë¦WðÓµAs)=Î&ø‚Ô\"ÚmÈ\nkvQöãOL¶OS2òS“\$Š¾yB«dÍšJ¬SsFµÑ¤‹ØP•~×—R¦ø[ž‚/¾Æí F‹l(„½	¿RÔ»í†2…#B ™¤ì¨Š–÷øbL kñeéÍ=‡~œQXA\nP „0.Ÿ.:¸¹nœßrÎÐpÈ\\Èµê¥AÝç:=›/¯¿Ç€^^£Â”çE4]6£qðÌ¨¸øß	˜Z6Þ4Kê€ºï=4A:r©tJsÖÜ•Nó‰?Ág¿\rš‚àôçÓˆŠÐýz˜ñ;ÜCïä¸ýÄÒÓ\$°üÿEL /¨ýˆ\$ïÞ®Lœ#ïºþ‡ü&@ù‡ààËˆOv€¦Ü€Nýbšý­ââx¶úOýÆç\0/°þ´DÍ†pÿ¦Ž\$°\0Tð*I\0¡}æÁ/xàÏÿðE\0nIFú«B5¦N]ç.»\0î#/ÐËb†¤ÑÂÂY\"FBp”ò£bñ2“\$¸’¢\n›#@ÐByÁj=	ZU‚Uˆ†Kp l:åZEÂ…\$òÏø?p`*Pœ-Áv>CVM-Ž>	¾Úä„µïniN Ò)”.œpÃ:êëJ•cbHù\"44nÓI®E‰¸ž0üt#Lñ¤\r&ŽZ¥A×C¤|×¯À½p<(1L”æ·Wfº*`œQN±Î	L´ž¢Öá¨lçáêã\"c¢?îzDÍ²‚çjœ¯æûç§Nçé±nÎï0V'œ\n¨Ö¬ì†®|jŽþh, Y\$'#\$yÄ})²#ÄBNO>áb¨#CLJ	Ù.0ñì+QòjlénÝ±þ{#ÓGêFél4H‘ç\nñ°Á¼€‘fLÄÐéN…!¨(pŒòB£F“\0Pµ-\$«B2ÏÈ†Ö‡üÙío\"1PD‘-fTm‹%±ŸÓ¤æyŽNLWÒi%ˆX‘‰\0Nó*µ2„‡È#(±£\"’~ˆÙòo²`Ôò*nTØ²¯(Í”Þ•*ˆ'*ÃW·Q|Ô£*¾\$tF2ÎT\$}-°X½‘\0ñcN©ˆŒGPý\$‡*c-Q’üäd×2å.²Ý.ÂœWM²ñ²ô·Í²üîÓ-2¥Ó	.(/.dLœí[1rñ1Ï2û¥­r]**¿*cÒìJfNÇ-®ÊóÒµ5„TÉ¯¶b	6L¥2²'5rÖý\\ÉÓxì“5\$7)dÙ28 ÌôC1GÍâ±h„ÑÒ8*âê%bª¾l6ëµªÞtËH2ÃòCf±:3­:rHï§jeï1éŽŠk*±d2XB ¯²ßs¤2:œ®Ê’ê÷S¨±¤¼.ÈR K×8³vP“ziL¤ê±EG©Q˜Ïn²Õ\rx1²:=’>ææ”çSR¦ecíD£w6²²áS‡ENpÿ¡9q¹*m¾\$Ï4Ô,CEŽwÏ%sRˆ‘U*olF…¯Dóo#IsF²Fó†èèÙ‘IÆ­G3™JÄ–+¦¬ÕI¸g&jUï¾‡z`\$)­2ƒ¢èO\rÍ¥ZR„§”â~\$!Ä.ƒ³ñ‰ñò½.2^×’c\"¡>ÛüñÆƒIS/,uO²óPÍ0ÒÁh\"´©£ð‡F…‡^jÕ2ëDÕ>3Oæƒ9ÔtM¥§S+SÔ½U·>R5O\"Æð­é=³ØU‚â¯*öî-©\$MDKÊóEÕ	6ó‡Là®ssX‹9T£Rô@‚©Õ‡Mõ‹Hs-8RÇT.’S+)Zµ›[	/Vg>©U¬±KNç†ñXÍ™VÂJÃ)5ç[Èh>\\Í—;ÐnÎÞQ5áH³†V+Õ[•ça…Ev	Zï9¯Ñ÷a!_Ôv?\nê*nÒ+Äê2mÅHœRÔÒó«VV¥`µ*vNM¯<5–W[S‚þ³‡eåeg+ñµU6(¤*JsìDù45LˆÍ\n%* †çBÿº¬õDWÕ›0ËN22î1(/Ì¶u)jãN¯ìlIkk;k³4åj¦z·¥~ž¶±4´ÛPnåAEjYp8àâM‚?vØqÔ­Ve«jV¿05P\"HvÑjwa–ãÅ4ÿV½mU·fÂ•4±H¶ hÞ\r€Vì«]•Ÿ\r‚S!í?r=SUTB'MW)@ŒÆæ8«ªJrÅ ª\n€Œ pð˜+ŽB07oÇ\$M­9C|#È\\Ï}3îù\r‡jrw\\OBÐLùw³Qg—«y³Ÿ\0000d¾(ú†ZˆÖ±È[\0šcàÒÀòBadYãt%1\$>¤J@ôS”Tó–ayÃVYI?zÔï®®ëu®“1©è2qÖái¨H¦þ)&ë@k 	ŒYxd%ƒŒZ\r¥è9¸<‡ÚÛI0>­œ´…¢ð’-}ˆq:Öx2\$6i=\"±xc0s,E«b˜sC\$3†wð)®\n‡`ñ–áø‡.)IEñzªny†M„Ô\$÷_‡òëäfQ©1É?¬i|L¡PgÔ=<\$2ô1‰Ù \n˜À‘ÐßãÔÁòÚŽËì+ñ#té®5Ô*q&ˆ*/Ïð›Dè\nÀÂ`ê ÚÑ8²®Ã}…vòL§ý°µ“<ÚCêä¶7ÄÐÐ\$:t!=\$6äM\"Úuzá4)FœqÃ¨­šÖÒ‡Ž\r9‡ÙV#E\r¡µ]Ssƒ&pîkrèxÃ]<)\rL&¼±@";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÈ!ªpK(«0³N)b()Á7&hÐÐb,+]’/ÄP!\0Ï“ P›k¼<ÈH\n3°Ã|•/Ð\"1‚'\0\0P¦¦‹RÙ!”1êdœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘9Ü˜„ˆA¯¯™Z8B<NË(4=9%3÷.—sd|4Ê Px¡Ê3¡Ð:ƒ€æáxïW…ÃÈ6º(ä\rãÎŒ£ux<•èæ4¿áxDŽ5ÐÊ:T¢øÄ6J£XD	#hà6£mz:xÂBR-–4\rã\"87„¨æ2„˜¢&\r6\n\\,[/S*Ë³2Õ‚h	KŽFt†Æì @§Ž´I†V\rÏC”Ø-òcë!×0Ä<Ø!@æÃïÐèÝIÊÄ>‹—I¢`™0Ô’¤œEql¶•6?ƒ°Â6£+·lÃð\nœ)ØÝ•0ÉÁ*»#Å*an¸Öà—ìRôR¿—évTÊDÜ°EÑ^”Í¤N»(]>lNM¤š‘Ää4È	 íI/+|´¢ÊÙt&\n#©†T¿ƒ£ºP ‹t¼¯on´Í\rŠl­w	€Pñž\rÃ41î\\J¤‚¦\"r¬?;(hÉ æ™[,*˜]XÑÖã¥ÕþþàIßEÒ\\T]µëR‚Ò”N¥ÔîíÄ]¶?×”7Cb¶sÔùÞÏ5ð“7=—iË±Y ä#{5dÝƒxÌ3P#pÊ¥ÜŽö>Ð qñ†Z¢c\nH:(©\"žÈKá§pIí7 ` \"â‘ÓÒäJÃù3@•s&q•\$¹!¡–žN×-\rÑ ŒþCL	hõ)BR’‰ bDâÍ‘t*Ã©.P©ŽÑBÁÿïÁh‡0@•ÊéXeØ «5j Hc?ë2+`@§àR¢T€ˆ¤-0ÈÃt:n­ò\\@iLåPsžSIÚC'Ì_‡HT†ð‘eFmãÂò±’t>iÝ¬Ç3²q-Šê‚-*UNªUZ­UáÝXÄçÜ­ÕÊ»Wªý`†å†±V8tY!e¬Õž´V™‡=\$P“(Øc*àeÄ²=¦¬\$]@»Eá —æÐ|O™#q‰Ì‰†Pç'Éi‹4ˆh 9~‘Sê	?E°Ð@Ý]@ºçð(€ Mš#Â\\þ“„2L—AH)oõƒ®Bß\nƒP?AE®û3Ã¤{:¦\$\0QÐÈvMBìQŸÉjÛ RJƒ(àþÐ1:]Ž)?JtLÒ.*N!þ?x¼Ã8j@aÀ)%Á\$‰—ÌzƒJæ\rÁ¼þ.°Ü¹ˆèiˆÊˆÔLcøñ×‰ªÒK“EzAC`o]s‚#\0Ã)	pD^êÌ’èQ	`/\n<)…Hw¡y9‘A\"<)¶ÊÁÙ93#´ÂQ;¦Ñ;Ÿ* Ò¯éÄÂÒ°(.J§\nHR)Ÿ¡S2ú0Ž)=%D°õ&âì‚¤ß7Å‹©ëb×CÕOg%?TµYì­°øò2ì[XŠEC,’OyëcS¤ï&kÕÛ›'\\ä£•\n~¬+u0Èˆ]„Æ.Äk\rbf\$ì%ˆ\rL  –«0XÈîI âÞ²6+\"%;–µÝ„Éáf]Ó£»ÑÉ¼Ë«W¥é¸ ‚î´Wa{/SJ¤Ì9¥‹Š/împK!	¨\\\"ÒhJ‘³ñ¢5XG¦„‰HŸÓvo†U€°– nÁ,lbþz®ÉLøLÝS®›ezqiQÞl‰y1¬DÔ›“’Ój0ddâà¸|s`m(oý¤NbPäI4Œ*ÙN(ôW1Ï¡ÜÅ°“fEØezq©1435ìü]åtqÑÕ¼* *â¦rîN~03ÙäJÃ–Î+Â5†¹ñ(c.—dW;š‚E™‚.JÍ%€ ¤ù£î\"ˆÝÁòLÃjSÚ©r÷=ÉC“joA*@‚ÂDÈ“>ƒ7K˜uÁ\\¬É/KÆ@D‡ö!v·VD>2‚€€‚Œ’I”Lw\\ô}ç#P\$·“<XŸK²-8D]ì5zH³@ ñ\nÉrH+îÆKì’ívAµ¾@×\$Îò&2H»ˆ&d¨¿Y±×Ùº\r*ÐþàîE}€BµA†åV®Ð§Ñ\"|æH[Ê\"Þ#¶\rµ&Ã2²MFcZFL9q2”Î.î,'LDy2å]ßY’™8eØ§Ú]bˆÑ/Êû#\\Õ”Hn‘t®9\"·ZÖ\nPÊ»Tâ8—bZÁC„‚D´Ä¢ÔN‘@mYHÙpçÄ:1.š»DHõNçÐ÷[#w Ð1GZ’Qži˜ˆ€«\$ÏÎ)7”ó6ª°ZtÐ­2ç=Æ†´¿#KBÄ¶wáDA+D­K=®`wøg™BŽîè(Eã<»–?ì¸·³½sm³v\\ËÄã0ä'úQqmÐ4±Ï‡ïVï=g@\$NÁ†¬%Ýéèd«éouí}ãœ.¦ø:OwyêÃÞÇ_Þ»sþ4ëþ©Ð?žK‚>4D»wq³ütHe\$wéüMªdv¹‹³„kÐÞN¯ò:?ê«²y¡#ÙŽA¯%Ä[õæßêìîóŽÐv	z£ƒÊ\"v±lðRä.ÅJ,áBîMæ£È™É„ÚI¶ôO0­J4­¯Nk0Dþ{eúC®&IÃêž8¢ª®¤<ÿæÿÆDìP@eLøavt6:Ðcâ,ÉÈø®ìÿ<ú~aFöKÌöŽÉð…\0ˆù¤(½æ	è«89-_o˜øIrú°µg\$ùŽÒzð·lÎ(pÂÑÍrÒ§beÄÑì¤ãøÚAN7 –Îãª`d’nn\"ÇýFHh‡†-ú.ŒA-V°ºü°r\$¾ü0È½ñ'ËeªÞ#ð¾nH\$¬ÀzÑÜ×dòDöïÌïö\0ì5d¦««k	N°½¢ù«\n‡®/Žçb†2x¶¨‰DÛbÕèäG«kK8ÑÈi­-0çðâ†‡²P/ñ©Ê±Ë¦IQ~ËqÀµqÅ0Ë¦Â C‰ƒ\"ñÔIG6MbHGå:Ñã\r°±-0°¤ßfÒìZSCìý-‰DÓ ­2ý(:ñëZ«ˆÚÃPi+Ž_ÂP5~5ƒ¬‚w#CVa­vŒC²¿&ÝŽºC#Öåh†9€Â²*.Q‚å!w%†+CàáÏÉÂ\\	Ãæ¢bÐ\r‘`7æ¦Ì.Gï&ï)g¤(ãð,\$ŒI\"ö/O4¤BNÂ\n ¨ÀZŽµP«\nØQ³‹0.‚¢S@|ÎÒe\r'z¤ª¡\"LQp\$/Át¥¬·)²wå7)kÌ6‚\\„g¨º¯¶ª6d”Q…è„N£-ñ¶pÆø¼¡2`ìúy¬KÜï\"U\"dïÒìN´´0¡\0Gó&\r`³G¦ìrRáïá4ì§sT¢\"H7lê°\n°œÊ&˜†œjÌ²Êš-\rj•‚w6\$>zÍÜîä7Žè<à–¬\"i#Ó(_3¯ÊÆÅªÊ·ïFË2iS’AK¬aÉpÚÄ˜Ò+ÖláribÕ7cxO*ÊÂDÈ@„@äFÌ¶·á^0 ˜ÃÉ¥ÃÚD'~QJ¡Þ²“¶{‰Ú@+¡A\"(\$J9³X£gpÐ,€fPÂÃ:S5¦gÌôÆCF* ";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*Œb KœåaLŒ–K#Üs¹ÎX—g)<·Ì<&Â©q>så±ÒK–ˆÁtF>ÄÙÊDË!zH¸\$âÐC”*r“eñÊ^”Né.º=ç9f]¸(r\\§‘E	ÊLÉ°Ü:„‘«A^Cå–°ìJ\n]k!3—¤«vs„	Ï5Èópx0²#Ê3¡Ð:ƒ€æáxïC…ÃÈ6¹ƒ(ä\rãÎŒ£u(<5cpæ4ô°DÒ4Ê:O¢ûf0ÃXD	#hàÏ´¨èã|£4u‹Z7Œ#L9²¢˜¢&\r-[jtIÌE•1+Å%¤Á|s”…Ó‚IœÄñÛÇ1(\\9\r\"Öå½p.ªQ`r—eÕ3!õì&tIdnK¬‘EeAÒC‘OU¤QPr”DõþGB\$ö0Ž£`èÃØ:Œ U‘eY‘ù{gcDÝÆH	i Nå¤’“—g1¡—¤iÎ^•ÉiÀXcÀ§ç/AÈ‘Šx—‡5¥jO!Ç8)P€GÂ6\"6T\r›*9Œu@a	‡)\"oøIœ¥ãÒr6íÍÍoÝìQË4meÉÌTJÅæÆ×nçºá›lÏlÄÐSLg1:AéRñxêñG)³ïau&L–~þ–î›.udÙeH‰LkT,¨Þ3ÃeÚœ×éÒJ=\" ÞÌ\rµ@ò´Ðê1Œmæ3b!\0Ø7Œî`æ4ƒ—n0Œã˜yá-{F\rÃ«VaOXÂÄ¤@@!ŠbŒ\$å!ÎD‘ŠµþF¤—YHÙ	ªêr‘¤¬×væ–Eì`¨d•I£ÊEÜ)³š\n‹Q¡Éä5:¦Ã\"Ž	Ý<§´úQÕXdS¦¨æuh­¨SwÊp7,°‡ED1ÖûSšl~ÅÜ&†æjÃ‘™†ÁÌ;©zCÀp\r)è2è&žBzO‰ù@(%¡”BŠzŠ9H)%(¥¢™Sjt©ób¨• \"TÁ±T*¥X«•‚²ƒêÜ£‚tâ¾Á„5™UŠfTsµ\rÊÊÂ5;	…ø…\"„]ŽD*ÈH¯=¥Ø–bà\\áþ@¼¸‰Å”%zpNDè\0‘?éGÈ£ÜCAG!‚%=Á*\"p­LÆ0ta\nIq0&Fš“rr!˜æÂÕg0²¬y»ÌP+ƒH˜yta4«Ó.ÄÖ\0nW¦´×‚ôXÄ7˜9ðÛ T{‡&µJ‚\0ÆðÖ¤5ÆŒ8<ÀÊmI‹‡N\0žÂ¤¡L¦(«8áPD‹~C…è@Y•3À \"™3F¼Ø!Œ1ÆA¬ÂSNðÔS¤ˆ4†p@×'ž2¦u<`©(B½\r*¹H±8ï9'0 XÈÊ(òÐ)³¯f£˜P%a^.@PO	À€*…\0ˆB E©5,\"P˜j‰h¢^aT¸Zx‚YÕ|t‰Q~ÛÅ3Y2¤s²]aÓ0ŒEEÝuuà²\nqvx®\rù·‰4\$ƒ‘¹ß<64Æ6çlbir-ê¹tj9Å@‹^îPrˆñ0ÂË Š:B1Æ×Ï`Äà¬@ò¨^ÇÈzä\\ž\n‰\0+„Õ¤Zö¬9ÑnûImEµñ®¦CÓs˜8=f3Œøc5aîØ£Ä:Dèžu¢U½¹£\raÀib× 2«Ó:C¹ã\\K’â¤ÖTÙSsh[«}”Š+àKEÐ,‚mnŠÜIh·D\"(P‚%ªáÖtH¥sßdÜ˜§Áo¿6.ˆ0š\"L_a`ËÛdq÷Å·j´\$,Åšg§äì‡*¼0…¹C *¨@‚Â@ œ\n84š'HžŒ°o›œ8S[Êëø¥<—ÙÇºñ2¼A\0/B¸Ü“’Ïà§®¸Šñ+ Ëb<K¤qb9D˜AR>KQwË!…^Y®30¸bã•Å}öAÏé‚¢±–…é.ùË@€¥ˆ£œåöõ’‚>HEJ'¥6»ià9Ü\$‹ABw%04¦ÁR²XA\\2†->•pvÖØû	\náª‘ûI‚eaÊ Dàæ¬¬]ˆVŒ´Ö®N<‚¼´åÆ#ÐÈæð—‚ô_\nþx>Äë[=ü°âÈs	±hûvÆÚ.ðž¹]Â+NãÚ·Y&m»ä¹÷nêAâ!¼¹2ë-˜K·Às	1Æ…Ø˜&ÂrˆxwWŒZËéðËÂ¸w\n«üƒÂ}ß}/x¼†d²úß>ˆxj÷•–³‹¡M*ËFú\"¢À´n»dvÛë¢és˜o,!ÍW²âíÊÊØ]·by{™nÜÿz9+»Ð÷—;èâ>Z\"ñ>)mâ?8Ž\"ó½®Ã3fŒÕÍ¶±áÀÕwûæ.{è›×´˜½~W¸åB3lßÑÜdƒD\"ßÉm².Ot'Mû¯¸XTÅGu¨ÜD	r>9{Ì„.H\\\n®;ÆŽ‰œx÷Kû	äQ	½B;Ž T+÷Ýœ§;-&f/~Z,¹Úá\\i¢nË×í;õöK‘	tUÛîÒ/¯è‡ÎËÙþ)(ínKä’’ïÎþiÝÞ¿E²“ÚYÚØ©HW·q]\\DCK9´Ãu	þ¸¢Ìõ?Ž¹Ê‡ìÅ]3Ü¹/ãÔ™ÉŒçn9˜vâ…,RúOìïúåŒ!\02<a~óa6Ï\nä.\\ìFr^ï–]®§Ž’ìÏáoÿP4[ð.ñ°Ð8_Ðì'Ìá®äVùð>0-ÌcO…ÁŒýå¿,(KYÌ`ìð„Â°ÂPtÔMjEäbú\"|Ä´ðyP§Œe\n‚î	l\rÊê/Úg¬<°g-të\0Ê¶²ë2Òáv°mv§âžGÐ¡b&ÁB(Ë¨80àI,Â;mÎ³¬ÊÖ¬ÎÍ#`è@ØiÞ\r Æ\r`@äðb¦.5‡hW€ÒÇnX£jÊTÀêœ@ÄŽÈJ\n ¨ÀZ\0@R¨šƒš6¬ÂËkç0Oô#B8«YƒÈÉEÒ	±5êaÐ!(mâ-ˆ8Íž/£æ‘qœ96Ã¬>pÃ­1~â‹!j»’—\"ßà˜\råƒ­\rÇ¦R#*5#b%¡äZå²GÍÈÙbÊÞÉõáÐ¡X¯\râ%„˜ýIoœç-æÝî.à¨6C>4c\$2ŠF©Ú\rààŠf¼ˆŠ½®äFn\\¯I„ÆN¾¦ü-4ß­þoÎH­Èã!+%®LÅã\$^C-^ÿÀ¬ Æ ê\r¢0‚¤,á²¿AÌqäÉ%¸&\$ºÙA#ÇÊðFåÖ­lÁ²2§êýF™ÊN¬hfñàîâ	¤`@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ˆÊ9Ãxä3…ã(ÝN\r€Ü9#}>5#\r62Ž”0¾Ü#pÖÂHÚ84ƒm<:xÂAíEtÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qód D…yÎRPa s-¯a~WÄ¡r’GALKI·ÉsZËÍÚë±\$ñÒPOdÙ\\‡ØÃòØ˜S%Û,N·&%ÙÐS”o1U¤Y+hÄÌP\"Pƒê6\0ì0ƒ¨ËlZV¢ZC—±Qqld1ÊH\nY N(KqÈ]—g1GÇÇ9{}œÄq%)öÁ2¨ÅPQŠÅÁ7§‰ò\nƒ-B\$©o)Én\$€€P•KpÍcbçY‡)\"^æï)ÌD’q²Ür·õÝr—7Œ£)ïw„Ÿy/–õÁ»—vëç¿I¼5Ã¿Mç1<[pêYX§©iWÏÇ/6råÒ[Äœü_½/7O7õSoPTqËu£i’d8ŽL“(ULÐÞ3Ãe,ÝO“ŸCª\rìèÛX!\0ëQŽ£ÆÓŽc66\rƒxÎèŽacR9y£Î0º!ÊØÔ¨Ü:àˆŒÅDBib˜¤#Xã]<¿>DYÒ!Äi×O‚ñ“ø9D°®B\" Ÿ¡>ñ]\0º2!PË«#P”ÓÎT‡H(¥ƒ“Þj™RE.‚PŠ¤+@È©yÑêõ_› ¦õ(nPY-ŒH`Œ¯þ\0˜x !E)‘	¡„9›\0äg¢`sêic5`àTdÐ¡@†…¡T:‰Qj5G©&ú”º™SjuOµeD©0/UÙUªÐD«Ãb±VjÕ[«•w\rH4,U Ãú|Ìt8)w–•Ü6‡\nš‹ôF(@èB¬r‰X|‰#H ”ƒLar,Ü]¤•Ê+Ç0Ì(€ 0…A)B\"\nA2…ø	WäMG0†# VÌ2Vy…²#\"8—düÐÐæÂÕ•?ò‰2à€'å³¿Ãæ½G(ŠBg„ÌË»¥cÆ:²CrÆ6FÐ(0âÈ¢h ÁÈ7†Ø;ä„O6Jx7²²MI³5ÁñStxS\n€È\nF PóMe\neºqÌ\"b\"©`‚æLEi!–g™3*Ú¡Ñ¬{*MÞ\0ÄC8 Ya234h”F\nAÞO—Ì­ÔÓYÔ\n‚Pe’ŒÊ˜%¢KA|!‡H¥,P\n„ÂxNT(@‚(\n­ €\"P˜k‚KeèürˆñÊ«Øç&Ka­5ÆH.¸…0Ç`O£¸w:\"‚ìödÈ¸§g‹ÌYŽ!‚S26†N!SòxÄÈ¤2.ÍjZGFâ„]®L‚Ts‰Ò*[D?)1ÔŽ\\\"™Qb\0sRÜR8‰ÈVÁ5 ‘Ø‡ÒÖ[ÊIu)¥êÁN6lFBŠ.®qH[\0ë˜1Ÿ‡5e¬îµ(.Ð¦CÓ#t8>ÆG\rÍ c6ðÚƒË(Ÿ/tî4Z­òÛz—\r,‚øUŒhƒ(w)b©t®µÚãHç‚ˆr‹Ä”9|ÃXsÊ¾9…Ð\"ëé‰—.l\\è«•z°V#Ì)ÅÄ©~×º[cŽ1Ö<ÉÝ<¢1\0(Öñæˆ±ãÞ‘y‡Z-‚·\"é¢ŽAtvÅØ¶½…çŸ3ÚˆB\"U¼*†ÿÁFÞ(36ç¹¬G¡Ì'Å(è\"Šžñ>:\\Ùç<¯ ð@¿y-âÜÇç|óžÂxKˆ/ Ç×Óö/EˆéâþT—6ÜÜØ¤¯®sE˜ô2…W».¤rêQB#zÆ@(<g¡D†upŒK5J±ÚÃž'8’g°Ši:ØÐðs‹a'&¤àˆ‹ë–Òî;*Û6Š96ÀœKÂ¡	‹µ«tf¯Ü¬œ]h	`.ÒÂ´QÑˆÅ\nÚ[›»A€ L.\0B±pˆíI0&\rÎQP:Dñ;u|Šèy´-=œ‡ƒ˜M‹C¯bG:úÔâÉz®@¾§a,Ù›;ŒÚœ0_f/‡˜w‹›G€à:æó›ºä›`l¨G-@\$)‚-å—ÞÁ‘Aáé§¯¦^ÐÏJ%¼ë®lGÐ¥èH‘uw/ÚË[BšaÑ #lY´ó–Ú©Ÿ\"\"ômõîÒr1Êé3®Mü¸/h»½¦<G“—»ýà-8vÃøNºß|—ŽîâG'ˆôá”­ÒãçI†CÆ4ÆšÓÓÅÚ’Wjýa¾[šúüiì¼}°öÞÆ±iŠ	ñú¢HåbÁP”~–^â —yUÈQ`9DÕ¿vFJ£°øß!\rì_•&%R\0@]2<%: À^ïüÂ¥öPÎ3÷•®OËñ~11N@ýu´zòåÐ]EØ/Žüõ¡I\0,-\07¯!æU¬)\0EÚõ‹üÊÌ°Ïho0fð5nþ¶:Ë/|òðFËPBÇÐN[,·%ÂpÁ:!ÁÌæŠû\"ŠN'Á|†ðBÏüî¯@Ê6\\Â¢‚ïrÇÐ‹ðJö¦P¸/\n(|ÊLº·0žEpª^â|*PŽ%¡6DÂDúÎÌñKü·Cõ	)ÎÊ‹wasÁ/	¦ù\rÐ«P,<ÄpÐÎ¡	Ÿ\n0ï0÷ðalr,žKðÙŒƒ~òÍµàÈ ÇRqq)â¬FdjFäs1ä>>Â°ØËñHDPóCÉž	˜\r\"ëph‚–Ë–rçFK8Ðf\0  ‡¦`æN*8“dMæÞ¡Ð…ªaz\"áp¢\\-b‡d\"ákè_fäî,ãöõ-62 †€ä\r€V¡ÀÒ`Ö	(P&>d#byEŠ\r Ìy¥œ7@Œ¨ÉªC4| ª\n€Œ p<„iæ:Ctî‡>‰\r(Õéˆ#B8µ‡jÏD„ò@	±÷¥°á8\0áC˜0±X9nGlÀ¬i\n+VÛÂ–œ!Ëc¸^á×`ÞRhe'Êx\r¥43C\\6Â–+ˆ.gÆÂãnâÊåîFz+'*ŽbòNVÙñ ¤ÿÍšb„Z²¹\0È&6ãH5.3*|ª\ràà€ÒR«â‹L¶uï‡'\$À*«HÆff¢ZÃÎ‰/.Ò°ÏÈbk\níró*MÚÂ,Ñ°°\nÀÂ`ê Û&á\0 fsÁ,êG\$ÅEÐÑÅÝ'!RàÄö,£Í*ë&?#¡l Á¶S\\³CÍ+òÃF‚P¨û!Ì¦Q8FÄp	\0@š	 t\n`¦";break;}$Qh=array();foreach(explode("\n",lzw_decompress($f))as$X)$Qh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Qh;}if(!$Qh){$Qh=get_translations($ca);$_SESSION["translations"]=$Qh;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Lf=array_search("SQL",$b->operators);if($Lf!==false)unset($b->operators[$Lf]);}function
dsn($jc,$V,$G){try{parent::__construct($jc,$V,$G);}catch(Exception$Ac){auth_error(h($Ac->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$bi=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
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
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$ec=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$id,$kf=array(),$z=1,$E=0,$Tf=false){global$b,$x;$Kd=(count($id)<count($M));$H=$b->selectQueryBuild($M,$Z,$id,$kf,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$id&&$Kd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($id&&$Kd?"\nGROUP BY ".implode(", ",$id):"").($kf?"\nORDER BY ".implode(", ",$kf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$dh=microtime(true);$J=$this->_conn->query($H);if($Tf)echo$b->selectQuery($H,format_time($dh));return$J;}function
delete($R,$cg,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$cg):" $H$cg"));}function
update($R,$O,$cg,$z=0,$Kg="\n"){$si=array();foreach($O
as$y=>$X)$si[]="$y = $X";$H=table($R)." SET$Kg".implode(",$Kg",$si);return
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
queries("ROLLBACK");}}$ec["sqlite"]="SQLite 3";$ec["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Of=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Qc){$this->_link=new
SQLite3($Qc);$vi=$this->_link->version();$this->server_info=$vi["versionString"];}function
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
__construct($Qc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Qc);}function
query($H,$bi=false){$De=($bi?"unbufferedQuery":"query");$I=@$this->_link->$De($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
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
__construct($Qc){$this->dsn(DRIVER.":$Qc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Qc){if(is_readable($Qc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Qc)?$Qc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Qc")." AS a")){parent::__construct($Qc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Rf){$si=array();foreach($L
as$O)$si[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$si));}}function
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
fields($R){global$g;$J=array();$Rf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Sb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Sb,$B)?str_replace("''","'",$B[1]):($Sb=="NULL"?null:$Sb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Rf!="")$J[$Rf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Rf=$C;}}$ah=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ah,$qe,PREG_SET_ORDER);foreach($qe
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ah=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ah,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$qe,PREG_SET_ORDER);foreach($qe
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$bh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$Ag){$v["columns"][]=$Ag["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$bh[$C],$ng)){preg_match_all('/("[^"]*+")+( DESC)?/',$ng[2],$qe);foreach($qe[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Jc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Jc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Jc));return
false;}return
true;}function
create_database($m,$pb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Ac){$g->error=$Ac->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$pb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){$mi=($R==""||$Xc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$mi=true;break;}}$c=array();$tf=array();foreach($p
as$o){if($o[1]){$c[]=($mi?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$tf[$o[0]]=$o[1][0];}}if(!$mi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$tf,$Xc))return
false;if($Ma)queries("UPDATE sqlite_sequence SET seq = $Ma WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$tf,$Xc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$tf[$y]=idf_escape($y);}}$Sf=false;foreach($p
as$o){if($o[6])$Sf=true;}$hc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$hc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Ud=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$tf[$d])continue
2;$e[]=$tf[$d].($v["descs"][$y]?" DESC":"");}if(!$hc[$Ud]){if($v["type"]!="PRIMARY"||!$Sf)$w[]=array($v["type"],$Ud,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Xc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Ud=>$q){foreach($q["source"]as$y=>$d){if(!$tf[$d])continue
2;$q["source"][$y]=idf_unescape($tf[$d]);}if(!isset($Xc[" $Ud"]))$Xc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Xc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($tf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$tf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($tf)))." FROM ".table($R)))return
false;$Wh=array();foreach(triggers($R)as$Uh=>$Eh){$Th=trigger($Uh);$Wh[]="CREATE TRIGGER ".idf_escape($Uh)." ".implode(" ",$Eh)." ON ".table($C)."\n$Th[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Wh
as$Th){if(!queries($Th))return
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
drop_views($xi){return
apply_queries("DROP VIEW",$xi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$xi,$wh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Vh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Vh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Te=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Te?" OF":""),"Of"=>($Te[0]=='`'||$Te[0]=='"'?idf_unescape($Te):$Te),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Vh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Vh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
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
trigger_sql($R,$hh){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$hf){list($y,$X)=explode("=",$hf,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Mc);}$x="sqlite";$ai=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$gh=array_keys($ai);$hi=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$fd=array("hex","length","lower","round","unixepoch","upper");$kd=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ec["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Of=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$vi=pg_version($this->_link);$this->server_info=$vi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$bi=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
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
as$O){$ii=array();$Z=array();foreach($O
as$y=>$X){$ii[]="$y = $X";if(isset($Rf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$ii)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$ai,$gh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$gh[lang(23)][]="json";$ai["json"]=4294967295;if($g->server_info>=9.4){$gh[lang(23)][]="jsonb";$ai["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
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
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
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
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$ie,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$eb=$U.$wa;if(isset($Ca[$eb])){$K["type"]=$Ca[$eb];$K["full_type"]=$K["type"].$ie.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$ie.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ph=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $ph AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $ph AND ci.oid = i.indexrelid",$h)as$K){$og=$K["relname"];$J[$og]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$og]["columns"]=array();foreach(explode(" ",$K["indkey"])as$_d)$J[$og]["columns"][]=$e[$_d];$J[$og]["descs"]=array();foreach(explode(" ",$K["indoption"])as$Ad)$J[$og]["descs"][]=($Ad&1?'1':null);$J[$og]["lengths"]=array();}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){$c=array();$bg=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$ri=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$bg[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$ri!="")$bg[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($ri!=""?substr($ri,9):"''");}}$c=array_merge($c,$Xc);if($R=="")array_unshift($bg,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($bg,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$bg[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$yb!="")$bg[]="COMMENT ON TABLE ".table($C)." IS ".q($yb);if($Ma!=""){}foreach($bg
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$fc=array();$bg=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$fc[]=idf_escape($X[1]);else$bg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($bg,"ALTER TABLE ".table($R).implode(",",$i));if($fc)array_unshift($bg,"DROP INDEX ".implode(", ",$fc));foreach($bg
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($xi){return
drop_tables($xi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$xi,$wh){foreach(array_merge($T,$xi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($wh)))return
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
set_schema($Dg){global$g,$ai,$gh;$J=$g->query("SET search_path TO ".idf_escape($Dg));foreach(types()as$U){if(!isset($ai[$U])){$ai[$U]=0;$gh[lang(24)][]=$U;}}return$J;}function
create_sql($R,$Ma){global$g;$J='';$ug=array();$Mg=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Vc=foreign_keys($R);ksort($Vc);$Wh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Oc=>$o){$_f=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$ug[]=$_f;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$qe)){$Lg=$qe[1];$Zg=reset(get_rows("SELECT * FROM $Lg"));$Mg[]="CREATE SEQUENCE $Lg INCREMENT $Zg[increment_by] MINVALUE $Zg[min_value] MAXVALUE $Zg[max_value] START ".($Ma?$Zg['last_value']:1)." CACHE $Zg[cache_value];";}}if(!empty($Mg))$J=implode("\n\n",$Mg)."\n\n$J";foreach($w
as$yd=>$v){switch($v['type']){case'UNIQUE':$ug[]="CONSTRAINT ".idf_escape($yd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$ug[]="CONSTRAINT ".idf_escape($yd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Vc
as$Uc=>$Tc)$ug[]="CONSTRAINT ".idf_escape($Uc)." $Tc[definition] ".($Tc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$ug)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$yd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($yd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Oc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Oc)." IS ".q($o['comment']).";";}foreach($Wh
as$Sh=>$Rh){$Th=trigger($Sh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Th['Trigger'])." $Th[Timing] $Th[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Th[Type] $Th[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$hh){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Mc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$ai=array();$gh=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$ai+=$X;$gh[$y]=array_keys($X);}$hi=array();$ff=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$fd=array("char_length","lower","round","to_hex","to_timestamp","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ec["oracle"]="Oracle";if(isset($_GET["oracle"])){$Of=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$bi=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
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
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$ie="$K[DATA_PRECISION],$K[DATA_SCALE]";if($ie==",")$ie=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($ie?"($ie)":""),"type"=>strtolower($U),"length"=>$ie,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$yd=$K["INDEX_NAME"];$J[$yd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$yd]["columns"][]=$K["COLUMN_NAME"];$J[$yd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$yd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){$c=$fc=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$fc[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$fc).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
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
drop_views($xi){return
apply_queries("DROP VIEW",$xi);}function
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
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Mc);}$x="oracle";$ai=array();$gh=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$ai+=$X;$gh[$y]=array_keys($X);}$hi=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$fd=array("length","lower","round","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ec["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Of=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$Bd=sqlsrv_server_info($this->_link);$this->server_info=$Bd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$bi=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
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
query($H,$bi=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
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
as$O){$ii=array();$Z=array();foreach($O
as$y=>$X){$ii[]="$y = $X";if(isset($Rf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ii)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
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
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$ie=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($ie?"($ie)":""),"type"=>$U,"length"=>$ie,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Xc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Xc)$c[""]=$Xc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$fc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$fc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($xi){return
queries("DROP VIEW ".implode(", ",array_map('table',$xi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$xi,$wh){return
apply_queries("ALTER SCHEMA ".idf_escape($wh)." TRANSFER",array_merge($T,$xi));}function
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
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Mc);}$x="mssql";$ai=array();$gh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$ai+=$X;$gh[$y]=array_keys($X);}$hi=array();$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$fd=array("len","lower","round","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ec['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Of=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$ki=explode(':',$N);$this->service_link=ibase_service_attach($ki[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$bi=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
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
get_databases($Wc){return
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
table_status($C="",$Lc=false){global$g;$J=array();$Mb=tables_list();foreach($Mb
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
support($Mc){return
preg_match("~^(columns|sql|status|table)$~",$Mc);}$x="firebird";$ff=array("=");$fd=array();$kd=array();$mc=array();}$ec["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Of=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$bi=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$kh=0;foreach($I
as$Od)$kh+=$Od->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$kh,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Od){$K=array();if($Od->Name!='')$K['itemName()']=(string)$Od->Name;foreach($Od->Attribute
as$Ja){$C=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($pc){return(is_object($pc)&&$pc['encoding']=='base64'?base64_decode($pc):(string)$pc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Vd=array_keys($this->_rows[0]);return(object)array('name'=>$Vd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Rf="itemName()";function
_chunkRequest($vd,$va,$F,$Ec=array()){global$g;foreach(array_chunk($vd,25)as$ib){$yf=$F;foreach($ib
as$s=>$t){$yf["Item.$s.ItemName"]=$t;foreach($Ec
as$y=>$X)$yf["Item.$s.$y"]=$X;}if(!sdb_request($va,$yf))return
false;}$g->affected_rows=count($vd);return
true;}function
_extractIds($R,$cg,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$cg,$qe))$J=array_map('idf_unescape',$qe[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$cg.($z?" LIMIT 1":"")))as$Od)$J[]=$Od->Name;}return$J;}function
select($R,$M,$Z,$id,$kf=array(),$z=1,$E=0,$Tf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$id,$kf,$z,$E,$Tf);$g->next=0;return$J;}function
delete($R,$cg,$z=0){return$this->_chunkRequest($this->_extractIds($R,$cg,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$cg,$z=0,$Kg="\n"){$Tb=array();$Fd=array();$s=0;$vd=$this->_extractIds($R,$cg,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$vd))$Tb["Attribute.".count($Tb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Qd=>$W){$Fd["Attribute.$s.Name"]=$y;$Fd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Qd)$Fd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$Fd||$this->_chunkRequest(($t!=""?array($t):$vd),'BatchPutAttributes',$F,$Fd))&&(!$Tb||$this->_chunkRequest($vd,'BatchDeleteAttributes',$F,$Tb));}function
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
support($Mc){return
preg_match('~sql~',$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$qb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Lc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Lc){$Ce=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Ce){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$Ce->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Mb,$y,$gg=false){$Va=64;if(strlen($y)>$Va)$y=pack("H*",$Ba($y));$y=str_pad($y,$Va,"\0");$Rd=$y^str_repeat("\x36",$Va);$Sd=$y^str_repeat("\x5C",$Va);$J=$Ba($Sd.pack("H*",$Ba($Rd.$Mb)));if($gg)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($sd,$F['AWSAccessKeyId'],$Gg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$sd)."\n/\n$H",$Gg,true)));@ini_set('track_errors',1);$Pc=@file_get_contents((preg_match('~^https?://~',$sd)?$sd:"http://$sd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Pc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Gi=simplexml_load_string($Pc);if(!$Gi){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($Gi->Errors){$n=$Gi->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$vh=$va."Result";return($Gi->$vh?$Gi->$vh:true);}function
sdb_request_all($va,$vh,$F=array(),$Dh=0){$J=array();$dh=($Dh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Gi=sdb_request($va,$F);if(!$Gi)break;foreach($Gi->$vh
as$pc)$J[]=$pc;if($z&&count($J)>=$z){$_GET["next"]=$Gi->NextToken;break;}if($Dh&&microtime(true)-$dh>$Dh)return
false;$F['NextToken']=$Gi->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Gi->NextToken);return$J;}$x="simpledb";$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$fd=array();$kd=array("count");$mc=array(array("json"));}$ec["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Of=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$if=array();if($V!=""){$if["username"]=$V;$if["password"]=$G;}if($m!="")$if["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$if);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Od){$K=array();foreach($Od
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Vd=array_keys($this->_rows[0]);$C=$Vd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Rf="_id";function
select($R,$M,$Z,$id,$kf=array(),$z=1,$E=0,$Tf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Wg=array();foreach($kf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Hb);$Wg[$X]=($Hb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Wg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$Ac){$this->_conn->error=$Ac->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Wc){global$g;$J=array();$Qb=$g->_link->listDBs();foreach($Qb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Lc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$rg=$g->_link->selectDB($m)->drop();if(!$rg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Wb=array();foreach($v["key"]as$d=>$U)$Wb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Wb,);}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf){global$g;if($R==""){$g->_db->createCollection($C);return
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
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Hb);$e[$d]=($Hb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Mc){return
preg_match("~database|indexes~",$Mc);}$x="mongo";$ff=array("=");$fd=array();$kd=array();$mc=array(array("json"));}$ec["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Of=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Ff,$Cb=array(),$De='GET'){@ini_set('track_errors',1);$Pc=@file_get_contents($this->_url.'/'.ltrim($Ff,'/'),false,stream_context_create(array('http'=>array('method'=>$De,'content'=>json_encode($Cb),'ignore_errors'=>1,))));if(!$Pc){$this->error=$php_errormsg;return$Pc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Pc;return
false;}$J=json_decode($Pc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$Bb=get_defined_constants(true);foreach($Bb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($Ff,$Cb=array(),$De='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Ff,'/'),$Cb,$De);}function
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
select($R,$M,$Z,$id,$kf=array(),$z=1,$E=0,$Tf=false){global$b;$Mb=array();$H="$R/_search";if($M!=array("*"))$Mb["fields"]=$M;if($kf){$Wg=array();foreach($kf
as$nb){$nb=preg_replace('~ DESC$~','',$nb,1,$Hb);$Wg[]=($Hb?array($nb=>"desc"):$nb);}$Mb["sort"]=$Wg;}if($z){$Mb["size"]=+$z;if($E)$Mb["from"]=($E*$z);}foreach($Z
as$X){list($nb,$df,$X)=explode(" ",$X,3);if($nb=="_id")$Mb["query"]["ids"]["values"][]=$X;elseif($nb.$X!=""){$zh=array("term"=>array(($nb!=""?$nb:"_all")=>$X));if($df=="=")$Mb["query"]["filtered"]["filter"]["and"][]=$zh;else$Mb["query"]["filtered"]["query"]["bool"]["must"][]=$zh;}}if($Mb["query"]&&!$Mb["query"]["filtered"]["query"]&&!$Mb["query"]["ids"])$Mb["query"]["filtered"]["query"]=array("match_all"=>array());$dh=microtime(true);$Fg=$this->_conn->query($H,$Mb);if($Tf)echo$b->selectQuery("$H: ".print_r($Mb,true),format_time($dh));if(!$Fg)return
false;$J=array();foreach($Fg['hits']['hits']as$rd){$K=array();if($M==array("*"))$K["_id"]=$rd["_id"];$p=$rd['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$rd['fields'][$y];}foreach($p
as$y=>$X){if($Mb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Mc){return
preg_match("~database|table|columns~",$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Lc=false){global$g;$Fg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($Fg){foreach($Fg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$oe=$I[$R]['properties'];if(!$oe)$oe=$I[$g->_db]['mappings'][$R]['properties'];if($oe){foreach($oe
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
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$ff=array("=","query");$fd=array();$kd=array();$mc=array(array("json"));}$ec=array("server"=>"MySQL")+$ec;if(!defined("DRIVER")){$Of=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Kf=null,$Vg=null){mysqli_report(MYSQLI_REPORT_OFF);list($sd,$Kf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$sd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Kf)?$Kf:ini_get("mysqli.default_port")),(!is_numeric($Kf)?$Kf:$Vg));return$J;}function
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
query($H,$bi=false){$I=@($bi?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
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
query($H,$bi=false){$this->setAttribute(1000,!$bi);return
parent::query($H,$bi);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Rf){$e=array_keys(reset($L));$Pf="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$si=array();foreach($e
as$y)$si[$y]="$y = VALUES($y)";$jh="\nON DUPLICATE KEY UPDATE ".implode(", ",$si);$si=array();$ie=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($si&&(strlen($Pf)+$ie+strlen($Y)+strlen($jh)>1e6)){if(!queries($Pf.implode(",\n",$si).$jh))return
false;$si=array();$ie=0;}$si[]=$Y;$ie+=strlen($Y)+2;}return
queries($Pf.implode(",\n",$si).$jh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$ai,$gh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$gh[lang(23)][]="json";$ai["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Bg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Bg;return$J;}function
get_databases($Wc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Wc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Kg=" "){return" $H$Z".($z!==null?$Kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$qb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
tables_generated_columns($oh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `GENERATION_EXPRESSION`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$oh:"SHOW TABLES");}function
tables_generated_columns2($oh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$oh:"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Lc=false){global$g;$J=array();foreach(get_rows($Lc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"is_virtual"=>(strpos(strtolower($K["Extra"]),"virtual")!==false),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$af;static$Hf='`(?:[^`]|``)+`';$J=array();$Ib=$g->result("SHOW CREATE TABLE ".table($R),1);if($Ib){preg_match_all("~CONSTRAINT ($Hf) FOREIGN KEY ?\\(((?:$Hf,? ?)+)\\) REFERENCES ($Hf)(?:\\.($Hf))? \\(((?:$Hf,? ?)+)\\)(?: ON DELETE ($af))?(?: ON UPDATE ($af))?~",$Ib,$qe,PREG_SET_ORDER);foreach($qe
as$B){preg_match_all("~$Hf~",$B[2],$Xg);preg_match_all("~$Hf~",$B[5],$wh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Xg[0]),"target"=>array_map('idf_unescape',$wh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
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
alter_table($R,$C,$p,$Xc,$yb,$uc,$pb,$Ma,$Cf,$Ge,$ub){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Xc);$P=($yb!==null?" COMMENT=".q($yb):"").($uc?" ENGINE=".q($uc):"").($pb?" COLLATE ".q($pb):"").($Ma!=""?" AUTO_INCREMENT=$Ma":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$Cf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);foreach($c
as$Td=>$ab){foreach($Ge
as$y=>$Ji){$ch=substr($Ji,7,strpos($Ji,"` ")-6);$rb=substr($ab,5,strlen($ab)-5);$sb=substr($ab,0,4);if(($sb=="DROP")&($ch===$rb))unset($Ge[$y]);}}foreach($ub
as$Ji){foreach($c
as$Td=>$ab){$rb=substr($ab,7,strpos($ab,"` ")-6);$rb=substr($rb,1,strlen($rb)-2);if($Ji===$rb)unset($c[$Td]);}}if($Ge){foreach($Ge
as$y=>$Ji){$ch=substr($Ji,7,strpos($Ji,"` ")-6);foreach($c
as$Td=>$ab){$Ga=substr($ab,strpos($ab,"NULL")+4,strlen($ab));$rb=substr($ab,strpos($ab,"CHANGE")+7,strpos($ab,"` ")-6);if($ch===$rb){unset($c[$Td]);$c[$Td]=$Ji.$Ga;unset($Ge[$y]);}}}foreach($Ge
as$Ji)$c[]=$Ji;}return($c||$Cf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Cf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($xi){return
queries("DROP VIEW ".implode(", ",array_map('table',$xi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$xi,$wh){$pg=array();foreach(array_merge($T,$xi)as$R)$pg[]=table($R)." TO ".idf_escape($wh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$pg));}function
copy_tables($T,$xi,$wh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($wh==DB?table("copy_$R"):idf_escape($wh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($xi
as$R){$C=($wh==DB?table("copy_$R"):idf_escape($wh).".".table($R));$wi=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $wi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$wc,$Dd,$ai;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Yh="((".implode("|",array_merge(array_keys($ai),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$wc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Hf="\\s*(".($U=="FUNCTION"?"":$Dd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Yh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Hf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Yh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Hf\\s*,?~is",$B[1],$qe,PREG_SET_ORDER);foreach($qe
as$xf){$C=str_replace("``","`",$xf[2]).$xf[3];$p[]=array("field"=>$C,"type"=>strtolower($xf[5]),"length"=>preg_replace_callback("~$wc~s",'normalize_enum',$xf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$xf[8] $xf[7]"))),"null"=>1,"full_type"=>$xf[4],"inout"=>strtoupper($xf[1]),"collation"=>strtolower($xf[9]),);}if($U!="FUNCTION")return
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
trigger_sql($R,$hh){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($hh=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Mc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Mc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$ai=array();$gh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$ai+=$X;$gh[$y]=array_keys($X);}$hi=array("unsigned","zerofill","unsigned zerofill");$ff=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$fd=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$kd=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.2-dev";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Wc=true){return
get_databases($Wc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$ec;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$ec,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($me,$G){global$x;if($x=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($nh){return
h($nh["Name"]);}function
fieldName($o,$kf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($nh,$O=""){echo'<p class="links">';$le=array("select"=>lang(39));if(support("table")||support("indexes"))$le["table"]=lang(40);if(support("table")){if(is_view($nh))$le["view"]=lang(41);else$le["create"]=lang(42);}if($O!==null)$le["edit"]=lang(43);foreach($le
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($nh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$mh){return
array();}function
backwardKeysPrint($Pa,$K){}function
selectQuery($H,$Ch){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($Ch)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Yc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$sf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(44,strlen($sf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Tf=array();foreach($v["columns"]as$y=>$X)$Tf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Tf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$fd,$kd;print_fieldset("select",lang(50),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($fd||$kd?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$fd,lang(52)=>$kd)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$bb="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$bb'",$e,$X["col"],"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$bb),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($kf,$e,$w){print_fieldset("sort",lang(55),$kf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$e),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Bh){if($Bh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Bh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($w
as$v){$Lb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Lb)$e[$Lb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($rc,$e){}function
selectColumnsProcess($e,$w){global$fd,$kd;$M=array();$id=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$fd)||in_array($X["fun"],$kd)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$kd))$id[]=$M[$y];}}return
array($M,$id);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$_b=" $X[op]";if(preg_match('~IN$~',$X["op"])){$xd=process_length($X["val"]);$_b.=" ".($xd!=""?$xd:"(NULL)");}elseif($X["op"]=="SQL")$_b=" $X[val]";elseif($X["op"]=="LIKE %%")$_b=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$_b=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$_b.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$_b;else{$tb=array();foreach($p
as$C=>$o){$Md=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Md)){$C=idf_escape($C);$tb[]=($x=="sql"&&$Md&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($tb?"(".implode("$_b OR ",$tb)."$_b)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Yc){return
false;}function
selectQueryBuild($M,$Z,$id,$kf,$z,$E){return"";}function
messageQuery($H,$Ch){global$x;restart_session();$pd=&get_session("queries");$t="sql-".count($pd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$pd[$_GET["db"]][]=array($H,time(),$Ch);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($Ch?" <span class='time'>($Ch)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($pd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$mc;$J=($o["null"]?"NULL/":"");foreach($mc
as$y=>$fd){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($fd
as$Hf=>$X){if(!$Hf||preg_match("~$Hf~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(48);return
explode("/",$J);}function
editInput($R,$o,$Ka,$Y){if($o["is_virtual"])return"<label $Ka>".h($Y).'</label>';else{if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ka value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ka value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ka,$o,$Y,0);}}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$hh,$Nd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($hh)dump_csv(array_keys(fields($R)));}else{if($Nd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($hh&&$i){if($hh=="DROP+CREATE"||$Nd==1)echo"DROP ".($Nd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Nd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$hh,$H){global$g,$x;$se=($x=="sqlite"?0:1048576);if($hh){if($_POST["format"]=="sql"){if($hh=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$Fd="";$Ya="";$Vd=array();$jh="";$Nc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Nc()){if(!$Vd){$si=array();foreach($K
as$X){$o=$I->fetch_field();if($p[$o->name]['is_virtual']){$Ai[]=idf_escape($o->name);continue;}$Vd[]=$o->name;$y=idf_escape($o->name);$si[]="$y = VALUES($y)";}$jh=($hh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$si):"").";\n";}if($_POST["format"]!="sql"){if($hh=="table"){dump_csv($Vd);$hh="INSERT";}dump_csv($K);}else{if(!$Fd)$Fd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Vd)).") VALUES";foreach($K
as$y=>$X){if(in_array("`".$y."`",(array)$Ai)){unset($K[$y]);continue;}$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Bg=($se?"\n":" ")."(".implode(",\t",$K).")";if(!$Ya)$Ya=$Fd.$Bg;elseif(strlen($Ya)+4+strlen($Bg)+strlen($jh)<$se)$Ya.=",$Bg";else{echo$Ya.$jh;$Ya=$Fd.$Bg;}}}if($Ya)echo$Ya.$jh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($ud){return
friendly_url($ud!=""?$ud:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($ud,$He=false){$vf=$_POST["output"];$Hc=(preg_match('~sql~',$_POST["format"])?"sql":($He?"tar":"csv"));header("Content-Type: ".($vf=="gz"?"application/x-gzip":($Hc=="tar"?"application/x-tar":($Hc=="sql"||$vf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($vf=="gz")ob_start('ob_gzencode',1e6);return$Hc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($Fe){global$ia,$x,$ec,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Fe=="auth"){$Sc=true;foreach((array)$_SESSION["pwds"]as$ui=>$Pg){foreach($Pg
as$N=>$pi){foreach($pi
as$V=>$G){if($G!==null){if($Sc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Sc=false;}$Qb=$_SESSION["db"][$ui][$N][$V];foreach(($Qb?array_keys($Qb):array(""))as$m)echo"<a href='".h(auth_url($ui,$N,$V,$m))."'>($ec[$ui]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Fe&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.2-dev",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$le=array();foreach($T
as$R=>$U)$le[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$le).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Fe);if(DB==""||!$Fe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$Fe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Fe){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Ob=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'$Ob>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Fe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'$Ob>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$ff;function
page_header($Fh,$n="",$Xa=array(),$Gh=""){global$ca,$ia,$b,$ec,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Hh=$Fh.($Gh!=""?": $Gh":"");$Ih=strip_tags($Hh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Ih,'</title>
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
';if($Xa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$ec[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Xa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Xa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Xa
as$y=>$X){$Vb=(is_array($X)?$X[1]:h($X));if($Vb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Vb</a> &raquo; ";}}echo"$Fh\n";}}echo"<h2>$Hh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$ji=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Be=$_SESSION["messages"][$ji];if($Be){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Be)."</div>\n";unset($_SESSION["messages"][$ji]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Fe=""){global$b,$Lh;echo'</div>

';switch_lang();if($Fe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$Lh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Fe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Je){while($Je>=2147483648)$Je-=4294967296;while($Je<=-2147483649)$Je+=4294967296;return(int)$Je;}function
long2str($W,$Ci){$Bg='';foreach($W
as$X)$Bg.=pack('V',$X);if($Ci)return
substr($Bg,0,end($W));return$Bg;}function
str2long($Bg,$Ci){$W=array_values(unpack('V*',str_pad($Bg,4*ceil(strlen($Bg)/4),"\0")));if($Ci)$W[]=strlen($Bg);return$W;}function
xxtea_mx($Ii,$Hi,$kh,$Qd){return
int32((($Ii>>5&0x7FFFFFF)^$Hi<<2)+(($Hi>>3&0x1FFFFFFF)^$Ii<<4))^int32(($kh^$Hi)+($Qd^$Ii));}function
encrypt_string($fh,$y){if($fh=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($fh,true);$Je=count($W)-1;$Ii=$W[$Je];$Hi=$W[0];$ag=floor(6+52/($Je+1));$kh=0;while($ag-->0){$kh=int32($kh+0x9E3779B9);$lc=$kh>>2&3;for($wf=0;$wf<$Je;$wf++){$Hi=$W[$wf+1];$Ie=xxtea_mx($Ii,$Hi,$kh,$y[$wf&3^$lc]);$Ii=int32($W[$wf]+$Ie);$W[$wf]=$Ii;}$Hi=$W[0];$Ie=xxtea_mx($Ii,$Hi,$kh,$y[$wf&3^$lc]);$Ii=int32($W[$Je]+$Ie);$W[$Je]=$Ii;}return
long2str($W,false);}function
decrypt_string($fh,$y){if($fh=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($fh,false);$Je=count($W)-1;$Ii=$W[$Je];$Hi=$W[0];$ag=floor(6+52/($Je+1));$kh=int32($ag*0x9E3779B9);while($kh){$lc=$kh>>2&3;for($wf=$Je;$wf>0;$wf--){$Ii=$W[$wf-1];$Ie=xxtea_mx($Ii,$Hi,$kh,$y[$wf&3^$lc]);$Hi=int32($W[$wf]-$Ie);$W[$wf]=$Hi;}$Ii=$W[$Je];$Ie=xxtea_mx($Ii,$Hi,$kh,$y[$wf&3^$lc]);$Hi=int32($W[0]-$Ie);$W[0]=$Hi;$kh=int32($kh-0x9E3779B9);}return
long2str($W,true);}$g='';$od=$_SESSION["token"];if(!$od)$_SESSION["token"]=rand(1,1e6);$Lh=get_token();$If=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$If[$y]=$X;}}function
add_invalid_login(){global$b;$Qc=get_temp_dir()."/adminer.invalid";$dd=@fopen($Qc,"r+");if(!$dd){$dd=@fopen($Qc,"w");if(!$dd)return;}flock($dd,LOCK_EX);$Id=unserialize(stream_get_contents($dd));$Ch=time();if($Id){foreach($Id
as$Jd=>$X){if($X[0]<$Ch)unset($Id[$Jd]);}}$Hd=&$Id[$b->bruteForceKey()];if(!$Hd)$Hd=array($Ch+30*60,0);$Hd[1]++;$Ng=serialize($Id);rewind($dd);fwrite($dd,$Ng);ftruncate($dd,strlen($Ng));flock($dd,LOCK_UN);fclose($dd);}$La=$_POST["auth"];if($La){$Id=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Hd=$Id[$b->bruteForceKey()];$Pe=($Hd[1]>30?$Hd[0]-time():0);if($Pe>0)auth_error(lang(78,ceil($Pe/60)));session_regenerate_id();$ui=$La["driver"];$N=$La["server"];$V=$La["username"];$G=(string)$La["password"];$m=$La["db"];set_password($ui,$N,$V,$G);$_SESSION["db"][$ui][$N][$V][$m]=true;if($La["permanent"]){$y=base64_encode($ui)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Uf=$b->permanentLogin(true);$If[$y]="$y:".base64_encode($Uf?encrypt_string($G,$Uf):"");cookie("adminer_permanent",implode(" ",$If));}if(count($_POST)==1||DRIVER!=$ui||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($ui,$N,$V,$m));}elseif($_POST["logout"]){if($od&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80).' '.lang(81,'https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($If&&!$_SESSION["pwds"]){session_regenerate_id();$Uf=$b->permanentLogin();foreach($If
as$y=>$X){list(,$jb)=explode(":",$X);list($ui,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($ui,$N,$V,decrypt_string(base64_decode($jb),$Uf));$_SESSION["db"][$ui][$N][$V][$m]=true;}}function
unset_permanent(){global$If;foreach($If
as$y=>$X){list($ui,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($ui==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($If[$y]);}cookie("adminer_permanent",implode(" ",$If));}function
auth_error($n){global$b,$od;$Qg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Qg]||$_GET[$Qg])&&!$od)$n=lang(82);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(83,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Qg]&&$_GET[$Qg]&&ini_bool("session.use_only_cookies"))$n=lang(84);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(85),lang(86,implode(", ",$Of)),false);page_footer("auth");exit;}$g=connect();}$dc=new
Min_Driver($g);if(!is_object($g)||($me=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($me)?$me:lang(87))));if($La&&$_POST["token"])$_POST["token"]=$Lh;$n='';if($_POST){if(!verify_token()){$Cd="max_input_vars";$we=ini_get($Cd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$we||$X<$we)){$Cd=$y;$we=$X;}}}$n=(!$_POST["token"]&&$we?lang(88,"'$Cd'"):lang(79).' '.lang(89));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(90,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(91);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$nf=array(),$z=0){global$x;$le=array();$w=array();$e=array();$Ua=array();$ai=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Pd=0;$Pd<count($K);$Pd++){$o=$I->fetch_field();$C=$o->name;$mf=$o->orgtable;$lf=$o->orgname;$J[$o->table]=$mf;if($nf&&$x=="sql")$le[$Pd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($mf!=""){if(!isset($w[$mf])){$w[$mf]=array();foreach(indexes($mf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$mf]=array_flip($v["columns"]);break;}}$e[$mf]=$w[$mf];}if(isset($e[$mf][$lf])){unset($e[$mf][$lf]);$w[$mf][$lf]=$Pd;$le[$Pd]=$mf;}}if($o->charsetnr==63)$Ua[$Pd]=true;$ai[$Pd]=$o->type;echo"<th".($mf!=""||$o->name!=$lf?" title='".h(($mf!=""?"$mf.":"").$lf)."'":"").">".h($C).($nf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ua[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($ai[$y]==254)$X="<code>$X</code>";}if(isset($le[$y])&&!$e[$le[$y]]){if($nf&&$x=="sql"){$R=$K[array_search("table=",$le)];$_=$le[$y].urlencode($nf[$R]!=""?$nf[$R]:$R);}else{$_="edit=".urlencode($le[$y]);foreach($w[$le[$y]]as$nb=>$Pd)$_.="&where".urlencode("[".bracket_escape($nb)."]")."=".urlencode($K[$Pd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Jg){$J=array();foreach(table_status('',true)as$oh=>$R){if($oh!=$Jg&&fk_support($R)){foreach(fields($oh)as$o){if($o["primary"]){if($J[$oh]){unset($J[$oh]);break;}$J[$oh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$tb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$tb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$qb,$Zc=array(),$yi){global$gh,$ai,$hi,$af;$U=$o["type"];echo'    <td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($ai[$U])&&!isset($Zc[$U]))array_unshift($gh,$U);if($Zc)$gh[lang(92)]=$Zc;echo
optionlist($gh,$U),'</select>
    <td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';if($o["is_virtual"])textarea(h($y)."[virtual1]",$yi,$L=2,$tb=40);else{echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(93).')'.optionlist($qb,$o["collation"]).'</select>',($hi?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($hi,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(94).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Zc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(95).")".optionlist(explode("|",$af),$o["on_delete"])."</select> ":" ");}}function
process_length($ie){global$wc;return(preg_match("~^\\s*\\(?\\s*$wc(?:\\s*,\\s*$wc)*+\\s*\\)?\\s*\$~",$ie)&&preg_match_all("~$wc~",$ie,$qe)?"(".implode(",",$qe[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$ie)));}function
process_type($o,$ob="COLLATE"){global$hi;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$hi)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $ob ".q($o["collation"]):"");}function
process_field($o,$Xh){global$x;$Sb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Xh),($o["null"]?" NULL":" NOT NULL"),(isset($Sb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Sb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Sb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Sb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Sb))?$Sb:q($Sb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$qb,$U="TABLE",$Zc=array(),$zb=false,$Rg){global$g,$Dd;$p=array_values($p);echo'    <thead><tr class="wrap">
        ';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'        <th id="label-name">',($U=="TABLE"?lang(96):lang(97)),'        <td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
        <td id="label-length">',lang(98),'        <td>',lang(99);echo'            ';if($U=="TABLE"){echo'        <td id="label-null">NULL
        <td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'        <td id="label-default">',lang(49),'            ',(support("comment")?"<td id='label-comment'".($zb?"":" class='hidden'").">".lang(47):""),'            ';}echo'        <td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
    </thead>
    <tbody onkeydown="return editingKeydown(event);">
    ';foreach($p
as$s=>$o){$s++;$of=$o[($_POST?"orig":"field")];$Zb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$of=="");echo'    <tr',($Zb?"":" style='display: none;'"),'>
        ',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Dd),$o["inout"]):""),'        <th>';if($Zb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'        <input type="hidden" name="fields[',$s,'][orig]" value="',h($of),'">
        ';$zi=$Rg[$o["field"]];edit_type("fields[$s]",$o,$qb,$Zc,$zi);echo'        ';if($U=="TABLE"){echo'        <td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'        <td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php

echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
        ',(support("comment")?"<td".($zb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":""),'    ';}echo'        ',"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.2-dev' alt='^' title='".lang(101)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.2-dev' alt='v' title='".lang(102)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($of==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.2-dev' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$ce=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$ce,0,array($o));break;}if(isset($o["field"]))$ce=$D;$D++;}}elseif($_POST["down"]){$bd=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$bd){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($bd));break;}if(key($_POST["down"])==$y)$bd=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($gd,$Wf,$e,$Ze){if(!$Wf)return
true;if($Wf==array("ALL PRIVILEGES","GRANT OPTION"))return($gd=="GRANT"?queries("$gd ALL PRIVILEGES$Ze WITH GRANT OPTION"):queries("$gd ALL PRIVILEGES$Ze")&&queries("$gd GRANT OPTION$Ze"));return
queries("$gd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Wf).$e).$Ze);}function
drop_create($fc,$i,$gc,$_h,$ic,$A,$Ae,$ze,$_e,$We,$Me){if($_POST["drop"])query_redirect($fc,$A,$Ae);elseif($We=="")query_redirect($i,$A,$_e);elseif($We!=$Me){$Jb=queries($i);queries_redirect($A,$ze,$Jb&&queries($fc));if($Jb)queries($gc);}else
queries_redirect($A,$ze,queries($_h)&&queries($ic)&&queries($fc)&&queries($i));}function
create_trigger($Ze,$K){global$x;$Eh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Ze.$Eh:$Eh.$Ze).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($yg,$K){global$Dd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($Dd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $yg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$af;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($af)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($af)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Qc,$Jh){$J=pack("a100a8a8a8a12a12",$Qc,644,0,0,decoct($Jh->size),decoct(time()));$hb=8*32;for($s=0;$s<strlen($J);$s++)$hb+=ord($J[$s]);$J.=sprintf("%06o",$hb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Jh->send();echo
str_repeat("\0",511-($Jh->size+511)%512);}function
ini_bytes($Cd){$X=ini_get($Cd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Gf){global$x,$g;$li=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Gf[$x]?"<a href='$li[$x]$Gf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Lh,$n,$ec;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(104),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(105),drop_databases($_POST["db"]));page_header(lang(106),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(107),'privileges'=>lang(68),'processlist'=>lang(108),'variables'=>lang(109),'status'=>lang(110),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(111,$ec[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(112,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Eg=support("scheme");$qb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(113)."</a>"."<td>".lang(114)."<td>".lang(115)."<td>".lang(116)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(117)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$xg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$xg' id='$m'>".h($m)."</a>";$pb=nbsp(db_collation($m,$qb));echo"<td>".(support("database")?"<a href='$xg".($Eg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$pb</a>":$pb),"<td align='right'><a href='$xg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Lh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(120),true);page_footer("ns");exit;}}$af="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Db){$this->size+=strlen($Db);fwrite($this->handler,$Db);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$wc="'(?:''|[^'\\\\]|\\\\.)*'";$Dd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$dc->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(121):lang(122):lang(123)).": ".h($a),$n);$b->selectLinks($S);$yb=$S["Comment"];if($yb!="")echo"<p>".lang(47).": ".h($yb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(124)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(125)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(92)."</h3>\n";$Zc=foreign_keys($a);if($Zc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(126)."<td>".lang(127)."<td>".lang(95)."<td>".lang(94)."<td>&nbsp;</thead>\n";foreach($Zc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(128).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(129)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(130)."</h3>\n";$Wh=triggers($a);if($Wh){echo"<table cellspacing='0'>\n";foreach($Wh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(128)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(131)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$qh=array();$rh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$qe,PREG_SET_ORDER);foreach($qe
as$s=>$B){$qh[$B[1]]=array($B[2],$B[3]);$rh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Mh=0;$Ra=-1;$Dg=array();$lg=array();$ge=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Lf=0;$Dg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Lf+=1.25;$o["pos"]=$Lf;$Dg[$R]["fields"][$C]=$o;}$Dg[$R]["pos"]=($qh[$R]?$qh[$R]:array($Mh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$ee=$Ra;if($qh[$R][1]||$qh[$X["table"]][1])$ee=min(floatval($qh[$R][1]),floatval($qh[$X["table"]][1]))-1;else$Ra-=.1;while($ge[(string)$ee])$ee-=.0001;$Dg[$R]["references"][$X["table"]][(string)$ee]=array($X["source"],$X["target"]);$lg[$X["table"]][$R][(string)$ee]=$X["target"];$ge[(string)$ee]=true;}}$Mh=max($Mh,$Dg[$R]["pos"][0]+2.5+$Lf);}echo'<div id="schema" style="height: ',$Mh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$rh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Mh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Dg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$xh=>$mg){foreach($mg
as$ee=>$ig){$fe=$ee-$qh[$C][1];$s=0;foreach($ig[0]as$Xg)echo"\n<div class='references' title='".h($xh)."' id='refs$ee-".($s++)."' style='left: $fe"."em; top: ".$R["fields"][$Xg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$fe)."em;'></div></div>";}}foreach((array)$lg[$C]as$xh=>$mg){foreach($mg
as$ee=>$e){$fe=$ee-$qh[$C][1];$s=0;foreach($e
as$wh)echo"\n<div class='references' title='".h($xh)."' id='refd$ee-".($s++)."' style='left: $fe"."em; top: ".$R["fields"][$wh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.2-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$fe)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Dg
as$C=>$R){foreach((array)$R["references"]as$xh=>$mg){foreach($mg
as$ee=>$ig){$Ee=$Mh;$ue=-10;foreach($ig[0]as$y=>$Xg){$Mf=$R["pos"][0]+$R["fields"][$Xg]["pos"];$Nf=$Dg[$xh]["pos"][0]+$Dg[$xh]["fields"][$ig[1][$y]]["pos"];$Ee=min($Ee,$Mf,$Nf);$ue=max($ue,$Mf,$Nf);}echo"<div class='references' id='refl$ee' style='left: $ee"."em; top: $Ee"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ue-$Ee)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(132),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Gb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Gb.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Gb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Hc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Ld=preg_match('~sql~',$_POST["format"]);if($Ld){echo"-- Adminer $ia ".$ec[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$hh=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Ld&&preg_match('~CREATE~',$hh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($hh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Ld){if($hh)echo
use_sql($m).";\n\n";$uf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$yg){foreach(get_rows("SHOW $yg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $yg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$uf.=($hh!='DROP+CREATE'?"DROP $yg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$uf.=($hh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($uf)echo"DELIMITER ;;\n\n$uf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$xi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Mb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Mb){if($Hc=="tar"){$Jh=new
TmpFile;ob_start(array($Jh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$xi[]=$C;elseif($Mb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Ld&&$_POST["triggers"]&&$R&&($Wh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Wh\nDELIMITER ;\n";if($Hc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Jh);}elseif($Ld)echo"\n";}}foreach($xi
as$wi)$b->dumpTable($wi,$_POST["table_style"],1);if($Hc=="tar")echo
pack("x512");}}}if($Ld)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Pb=array('','USE','DROP+CREATE','CREATE');$sh=array('','DROP+CREATE','CREATE');$Nb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Nb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(133)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(134)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Pb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(135)):"").(support("event")?checkbox("events",1,$K["events"],lang(136)):"")),"<tr><th>".lang(115)."<td>".html_select('table_style',$sh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(130)):""),"<tr><th>".lang(137)."<td>".html_select('data_style',$Nb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$Lh,'">

<table cellspacing="0">
';$Qf=array();if(DB!=""){$fb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".lang(115)."</label>","<th style='text-align: right;'><label class='block'>".lang(137)."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$xi="";$th=tables_list();foreach($th
as$C=>$U){$Pf=preg_replace('~_.*~','',$C);$fb=($a==""||$a==(substr($a,-1)=="%"?"$Pf%":$C));$Tf="<tr><td>".checkbox("tables[]",$C,$fb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$xi.="$Tf\n";else
echo"$Tf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$fb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Qf[$Pf]++;}echo$xi;if($th)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Pf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Pf%",$m,"formUncheck('check-databases');","block")."\n";$Qf[$Pf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Sc=true;foreach($Qf
as$y=>$X){if($y!=""&&$X>1){echo($Sc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Sc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(138)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$gd=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($gd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$gd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$qd=&get_session("queries");$pd=&$qd[DB];if(!$n&&$_POST["clear"]){$pd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$dd=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$dd=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($dd?fread($dd,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$ag=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$pd||reset(end($pd))!=$ag){restart_session();$pd[]=array($ag,time());set_session("queries",$qd);stop_session();}}$Yg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ub=";";$D=0;$tc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$xb=0;$yc=array();$zf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Nh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$kc=$b->dumpFormat();unset($kc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Yg*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Ub=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Ub)."\\s*|$zf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($bd,$Lf)=$B[0];if(!$bd&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{if(!$bd&&rtrim($H)=="")break;$D=$Lf+strlen($bd);if($bd&&rtrim($bd)!=$Ub){while(preg_match('('.($bd=='/*'?'\\*/':($bd=='['?']':(preg_match('~^-- |^#~',$bd)?"\n":preg_quote($bd)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$Bg=$B[0][0];if(!$Bg&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{$D=$B[0][1]+strlen($Bg);if($Bg[0]!="\\")break;}}}else{$tc=false;$ag=substr($H,0,$Lf);$xb++;$Tf="<pre id='sql-$xb'><code class='jush-$x'>".$b->sqlCommandQuery($ag)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Yg*+ATTACH\\b~i",$ag,$B)){echo$Tf,"<p class='error'>".lang(139)."\n";$yc[]=" <a href='#sql-$xb'>$xb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Tf;ob_flush();flush();}$dh=microtime(true);if($g->multi_query($ag)&&is_object($h)&&preg_match("~^$Yg*+USE\\b~i",$ag))$h->query($ag);do{$I=$g->store_result();$Ch=" <span class='time'>(".format_time($dh).")</span>".(strlen($ag)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ag))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Tf:""),"<p class='error'>".lang(140).($g->errno?" ($g->errno)":"").": ".error()."\n";$yc[]=" <a href='#sql-$xb'>$xb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$nf=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Qe=$I->num_rows;echo"<p>".($Qe?($z&&$Qe>$z?lang(141,$z):"").lang(142,$Qe):""),$Ch;$t="export-$xb";$Gc=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(70)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$kc,$xa["format"])."<input type='hidden' name='query' value='".h($ag)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$Lh'></span>\n";if($h&&preg_match("~^($Yg|\\()*+SELECT\\b~i",$ag)&&($Fc=explain($h,$ag))){$t="explain-$xb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$Gc","<div id='$t' class='hidden'>\n";select($Fc,$h,$nf);echo"</div>\n";}else
echo$Gc;echo"</form>\n";}}else{if(preg_match("~^$Yg*+(CREATE|DROP|ALTER)$Yg++(DATABASE|SCHEMA)\\b~i",$ag)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(143,$g->affected_rows)."$Ch\n";}$dh=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($tc)echo"<p class='message'>".lang(144)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(145,$xb-count($yc))," <span class='time'>(".format_time($Nh).")</span>\n";}elseif($yc&&$xb>1)echo"<p class='error'>".lang(140).": ".implode("",$yc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Cc="<input type='submit' value='".lang(146)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$ag=$_GET["sql"];if($_POST)$ag=$_POST["query"];elseif($_GET["history"]=="all")$ag=$pd;elseif($_GET["history"]!="")$ag=$pd[$_GET["history"]][0];echo"<p>";textarea("query",$ag,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>$Cc\n",lang(147).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(148)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Cc":lang(149)),"</div></fieldset>\n","<fieldset><legend>".lang(150)."</legend><div>",lang(151,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(152).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(153))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(154))."\n","<input type='hidden' name='token' value='$Lh'>\n";if(!isset($_GET["import"])&&$pd){print_fieldset("history",lang(155),$_GET["history"]!="");for($X=end($pd);$X;$X=prev($pd)){$y=key($pd);list($ag,$Ch,$oc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Ch)."'>".@date("H:i:s",$Ch)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$ag)))),80,"</code>").($oc?" <span class='time'>($oc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(156)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(157)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$ii=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(!isset($o["privileges"][$ii?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($ii?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$di=unique_array($_GET["where"],$w);$dg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(158),$dc->delete($a,$dg,!$di));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($ii){if(!$O)redirect($A);queries_redirect($A,lang(159),$dc->update($a,$O,$dg,!$di));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$dc->insert($a,$O);$de=($I?last_id():0);queries_redirect($A,lang(160,($de?" $de":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(isset($o["privileges"]["select"])){$Ha=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ha="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ha="1*".idf_escape($C);$M[]=($Ha?"$Ha AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$dc->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$dc->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($dc->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary));}}}edit_form($a,$p,$K,$ii);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Af=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$Af[$y]=$y;$kg=referencable_primary($a);$Zc=array();foreach($kg
as$oh=>$o)$Zc[str_replace("`","``",$oh)."`".str_replace("`","``",$o["field"])]=$oh;$qf=array();$S=array();if($a!=""){$qf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(161),drop_tables(array($a)));else{$p=array();$Da=array();$mi=false;$Xc=array();$pf=reset($qf);$Aa=" FIRST";$Ge=array();$ub=array();$vb=array();$Rg=tables_generated_columns("'".$K["name"]."'");$Sg=tables_generated_columns2("'".$K["name"]."'");foreach($K["fields"]as$y=>$o){$q=$Zc[$o["type"]];$Xh=($q!==null?$kg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Yf=process_field($o,$Xh);$Da[]=array($o["orig"],$Yf,$Aa);if($Yf!=process_field($pf,$pf)){$p[]=array($o["orig"],$Yf,$Aa);if($o["orig"]!=""||$Aa)$mi=true;}if($q!==null)$Xc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Zc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Xh["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$mi=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$pf=next($qf);if(!$pf)$Aa="";}if($o["virtual1"]){$Zh="";$ub[]=$o["orig"];if($o["length"])$Zh=$o["type"]."(".$o["length"].")";else$Zh=$o["type"];if(($Rg[$o["field"]]!=$o["virtual1"])||($o["field"]!=$o["orig"])||($Sg[$o["field"]]!=$Zh)||($Aa)){$vb[]=$o["orig"];if($o["length"])$Ge[]="CHANGE "."`".$o["orig"]."` "."`".$o["field"]."` ".$o["type"]."(".$o["length"].") as (".$o["virtual1"].")";else$Ge[]="CHANGE "."`".$o["orig"]."` "."`".$o["field"]."` ".$o["type"]." as (".$o["virtual1"].")";}}}$Cf="";if($Af[$K["partition_by"]]){$Df=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$Df[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Cf.="\nPARTITION BY $K[partition_by]($K[partition])".($Df?" (".implode(",",$Df)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Cf.="\nREMOVE PARTITIONING";$ye=lang(162);if($a==""){cookie("adminer_engine",$K["Engine"]);$ye=lang(163);}$C=trim($K["name"]);foreach($ub
as$y=>$Ai){foreach($vb
as$Bi){if($Ai==$Bi)unset($ub[$y]);}}queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ye,alter_table($a,$C,($x=="sqlite"&&($mi||$Xc)?$Da:$p),$Xc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$Cf,$Ge,$ub));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ai["int"])?"int":(isset($ai["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($qf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$ed="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $ed ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$Df=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $ed AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Df[""]="";$K["partition_names"]=array_keys($Df);$K["partition_values"]=array_values($Df);}}}$qb=collations();$vc=engines();foreach($vc
as$uc){if(!strcasecmp($uc,$K["Engine"])){$K["Engine"]=$uc;break;}}echo'
<form action="" method="post" id="form">
    <p>
        ';if(support("columns")||$a==""){echo'            ',lang(164),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
            ';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo'        ',($vc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(165).")")+$vc,$K["Engine"])."</select>":""),'        ',($qb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(93).")")+$qb,$K["Collation"]):""),'            <input type="submit" value="',lang(14),'">
        ';}echo'
        ';if(support("columns")){echo'    <table cellspacing="0" id="edit-fields" class="nowrap">
        ';$zb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$zb){foreach($K["fields"]as$o){if($o["comment"]!=""){$zb=true;break;}}}$Rg=tables_generated_columns("'".$K["name"]."'");edit_fields($K["fields"],$qb,"TABLE",$Zc,$zb,$Rg);echo'    </table>
    <p>
        ',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
        ',checkbox("defaults",1,true,lang(166),"columnShow(this.checked, 5)","jsonly"),'        ';if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo'        ',(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($zb?" checked":"").">".lang(47)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($zb?'':' class="hidden"').'>':''),'    <p>
        <input type="submit" value="',lang(14),'">
        ';}echo'
        ';if($a!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'        ';if(support("partitioning")){$Bf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(167),$K["partition_by"]);echo'    <p>
        ',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$Af,$K["partition_by"])."</select>",'        (<input name="partition" value="',h($K["partition"]),'">)
        ',lang(168),': <input type="number" name="partitions" class="size',($Bf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
    <table cellspacing="0" id="partition-table"',($Bf?"":" class='hidden'"),'>
        <thead><tr><th>',lang(169),'<th>',lang(170),'</thead>
        ';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'    </table>
    </div></fieldset>
    ';}echo'    <input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$zd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$zd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$zd[]="SPATIAL";$w=indexes($a);$Rf=array();if($x=="mongo"){$Rf=$w["_id_"];unset($zd[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$zd)){$e=array();$je=array();$Wb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$ie=$v["lengths"][$y];$Vb=$v["descs"][$y];$O[]=idf_escape($d).($ie?"(".(+$ie).")":"").($Vb?" DESC":"");$e[]=$d;$je[]=($ie?$ie:null);$Wb[]=$Vb;}}if($e){$Dc=$w[$C];if($Dc){ksort($Dc["columns"]);ksort($Dc["lengths"]);ksort($Dc["descs"]);if($v["type"]==$Dc["type"]&&array_values($Dc["columns"])===$e&&(!$Dc["lengths"]||array_values($Dc["lengths"])===$je)&&array_values($Dc["descs"])===$Wb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$Dc)$c[]=array($Dc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(171),alter_indexes($a,$c));}page_header(lang(124),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(172),'<th><input type="submit" class="wayoff">',lang(173),'<th id="label-name">',lang(174);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='<?php echo
lang(100),'\'></noscript>&nbsp;
</thead>
';if($Rf){echo"<tr><td>PRIMARY<td>";foreach($Rf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Pd=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Pd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Pd][type]",array(-1=>"")+$zd,$v["type"],($Pd==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Pd][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(45)."'",($p?array_combine($p,$p):$p),$d),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Pd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(98)."'>":""),($x!="sql"?checkbox("indexes[$Pd][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Pd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Pd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.2-dev' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Pd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(175),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(176),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$ih=true;$ce="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$ih=false;$ce=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($ce),lang(177),$ih);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(178));}}page_header(DB!=""?lang(64):lang(107),$n,array(),h(DB));$qb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$qb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$gd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$gd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($qb?html_select("collation",array(""=>"(".lang(93).")")+$qb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.2-dev' alt='+' title='".lang(100)."'>\n";echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(179));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(180));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(181));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(182).": ".h($da),$n);$yg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$xd=array();$uf=array();foreach($yg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$uf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$xd[]=$s;}if(!$n&&$_POST){$Za=array();foreach($yg["fields"]as$y=>$o){if(in_array($y,$xd)){$X=process_input($o);if($X===false)$X="''";if(isset($uf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Za[]=(isset($uf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Za).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(183,$g->affected_rows)."\n";}while($g->next_result());if($uf)select($g->query("SELECT ".implode(", ",$uf)));}}echo'
<form action="" method="post">
';if($xd){echo"<table cellspacing='0'>\n";foreach($xd
as$y){$o=$yg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(182),'">
<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ye=($_POST["drop"]?lang(184):($C!=""?lang(185):lang(186)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$wh=array();foreach($K["source"]as$y=>$X)$wh[$y]=$K["target"][$y];$K["target"]=$wh;}if($x=="sqlite")queries_redirect($A,$ye,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$fc="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$fc,$A,$ye);else{query_redirect($c.($C!=""?"$fc,":"")."\nADD".format_foreign_key($K),$A,$ye);$n=lang(187)."<br>$n";}}}page_header(lang(188),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Zc=foreign_keys($a);$K=$Zc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Xg=array_keys(fields($a));$wh=($a===$K["table"]?$Xg:array_keys(fields($K["table"])));$jg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(189),':
',html_select("table",$jg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(190),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(126),'<th id="label-target">',lang(127),'</thead>
';$Pd=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Xg,$X,($Pd==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$wh,$K["target"][$y],1,"label-target");$Pd++;}echo'</table>
<p>
',lang(95),': ',html_select("on_delete",array(-1=>"")+explode("|",$af),$K["on_delete"]),' ',lang(94),': ',html_select("on_update",array(-1=>"")+explode("|",$af),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(191),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$rf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$rf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ha=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ye=lang(192);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$rf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ha,$A,$ye);else{$yh=$C."_adminer_".uniqid();drop_create("DROP $rf ".table($a),"CREATE $U ".table($C).$Ha,"DROP $U ".table($C),"CREATE $U ".table($yh).$Ha,"DROP $U ".table($yh),($_POST["drop"]?substr(ME,0,-1):$A),lang(193),$ye,lang(194),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($rf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(195)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(121)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Gd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$eh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(196));elseif(in_array($K["INTERVAL_FIELD"],$Gd)&&isset($eh[$K["STATUS"]])){$Cg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(197):lang(198)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Cg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$Cg)."\n".$eh[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(199).": ".h($aa):lang(200)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(174),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(201),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(202),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(203),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Gd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(110),'<td>',html_select("STATUS",$eh,$K["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(204)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$yg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$yh="$K[name]_adminer_".uniqid();drop_create("DROP $yg ".idf_escape($da),create_routine($yg,$K),"DROP $yg ".idf_escape($K["name"]),create_routine($yg,array("name"=>$yh)+$K),"DROP $yg ".idf_escape($yh),substr(ME,0,-1),lang(205),lang(206),lang(207),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(208):lang(209)).": ".h($da):(isset($_GET["function"])?lang(210):lang(211))),$n);if(!$_POST&&$da!=""){$K=routine($da,$yg);$K["name"]=$da;}$qb=get_vals("SHOW CHARACTER SET");sort($qb);$zg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($zg?lang(19).": ".html_select("language",$zg,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$qb,$yg);if(isset($_GET["function"])){echo"<tr><td>".lang(212);edit_type("returns",$K["returns"],$qb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(213));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(214));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(215));else
redirect($_);}page_header($fa!=""?lang(216).": ".h($fa):lang(217),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(218));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(219));}page_header($ga!=""?lang(220).": ".h($ga):lang(221),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Vh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Vh["Timing"])&&in_array($_POST["Event"],$Vh["Event"])&&in_array($_POST["Type"],$Vh["Type"])){$Ze=" ON ".table($a);$fc="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Ze:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($fc,$A,lang(222));else{if($C!="")queries($fc);queries_redirect($A,($C!=""?lang(223):lang(224)),queries(create_trigger($Ze,$_POST)));if($C!="")queries(create_trigger($Ze,$K+array("Type"=>reset($Vh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(225).": ".h($C):lang(226)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(227),'<td>',html_select("Timing",$Vh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(228),'<td>',html_select("Event",$Vh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Vh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$Vh["Type"],$K["Type"]),'</table>
<p>',lang(174),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Wf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$Eb)$Wf[$Eb][$K["Privilege"]]=$K["Comment"];}$Wf["Server Admin"]+=$Wf["File access on server"];$Wf["Databases"]["Create routine"]=$Wf["Procedures"]["Create routine"];unset($Wf["Procedures"]["Create routine"]);$Wf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Wf["Columns"][$X]=$Wf["Tables"][$X];unset($Wf["Server Admin"]["Usage"]);foreach($Wf["Tables"]as$y=>$X)unset($Wf["Databases"][$y]);$Le=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Le[$X]=(array)$Le[$X]+(array)$_POST["grants"][$y];}$hd=array();$Xe="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$qe,PREG_SET_ORDER)){foreach($qe
as$X){if($X[1]!="USAGE")$hd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$hd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Xe=$B[1];}}if($_POST&&!$n){$Ye=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ye",ME."privileges=",lang(229));else{$Ne=q($_POST["user"])."@".q($_POST["host"]);$Ef=$_POST["pass"];if($Ef!=''&&!$_POST["hashed"]){$Ef=$g->result("SELECT PASSWORD(".q($Ef).")");$n=!$Ef;}$Jb=false;if(!$n){if($Ye!=$Ne){$Jb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ne IDENTIFIED BY PASSWORD ".q($Ef));$n=!$Jb;}elseif($Ef!=$Xe)queries("SET PASSWORD FOR $Ne = ".q($Ef));}if(!$n){$vg=array();foreach($Le
as$Se=>$gd){if(isset($_GET["grant"]))$gd=array_filter($gd);$gd=array_keys($gd);if(isset($_GET["grant"]))$vg=array_diff(array_keys(array_filter($Le[$Se],'strlen')),$gd);elseif($Ye==$Ne){$Ve=array_keys((array)$hd[$Se]);$vg=array_diff($Ve,$gd);$gd=array_diff($gd,$Ve);unset($hd[$Se]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Se,$B)&&(!grant("REVOKE",$vg,$B[2]," ON $B[1] FROM $Ne")||!grant("GRANT",$gd,$B[2]," ON $B[1] TO $Ne"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ye!=$Ne)queries("DROP USER $Ye");elseif(!isset($_GET["grant"])){foreach($hd
as$Se=>$vg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Se,$B))grant("REVOKE",array_keys($vg),$B[2]," ON $B[1] FROM $Ne");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(230):lang(231)),!$n);if($Jb)$g->query("DROP USER $Ne");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(138)),$n,array("privileges"=>array('',lang(68))));if($_POST){$K=$_POST;$hd=$Le;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Xe;if($Xe!="")$K["hashed"]=true;$hd[(DB==""||$hd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(232),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($hd
as$Se=>$gd){echo'<th>'.($Se!="*.*"?"<input name='objects[$s]' value='".h($Se)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(123),"Columns"=>lang(45),"Procedures"=>lang(233),)as$Eb=>$Vb){foreach((array)$Wf[$Eb]as$Vf=>$yb){echo"<tr".odd()."><td".($Vb?">$Vb<td":" colspan='2'").' lang="en" title="'.h($yb).'">'.h($Vf);$s=0;foreach($hd
as$Se=>$gd){$C="'grants[$s][".h(strtoupper($Vf))."]'";$Y=$gd[strtoupper($Vf)];if($Eb=="Server Admin"&&$Se!=(isset($hd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(234)."<option value='0'".($Y=="0"?" selected":"").">".lang(235)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Vf=="All privileges"?" id='grants-$s-all'":($Vf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Xd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Xd++;}queries_redirect(ME."processlist=",lang(236,$Xd),$Xd||!$_POST["kill"]);}page_header(lang(108),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(237).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(238,max_connections()),"<p><input type='submit' value='".lang(239)."'>\n";}echo'<input type="hidden" name="token" value="',$Lh,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Zc=column_foreign_keys($a);$Ue="";if($S["Oid"]){$Ue=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ue));}parse_str($_COOKIE["adminer_import"],$ya);$wg=array();$e=array();$Bh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){if($o["is_virtual"])continue;$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$Bh=$b->selectLengthProcess();}$wg+=$o["privileges"];}list($M,$id)=$b->selectColumnsProcess($e,$w);$Kd=count($id)<count($M);$Z=$b->selectSearchProcess($p,$w);$kf=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$ed=($M?implode(", ",$M):"*".($Ue?", $Ue":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$jd=($id&&$Kd?"\nGROUP BY ".implode(", ",$id):"").($kf?"\nORDER BY ".implode(", ",$kf):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ei=>$K){$Ha=convert_field($p[key($K)]);$M=array($Ha?$Ha:idf_escape(key($K)));$Z[]=where_check($ei,$p);$J=$dc->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$Ei=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$gb=array();foreach($_POST["check"]as$db)$gb[]=where_check($db,$p);$Ei[]="((".implode(") OR (",$gb)."))";}$Ei=($Ei?"\nWHERE ".implode(" AND ",$Ei):"");$Rf=$gi=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Rf=array_flip($v["columns"]);$gi=($M?$Rf:array());break;}}foreach((array)$gi
as$y=>$X){if(in_array(idf_escape($y),$M))unset($gi[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$gi===array())$H="SELECT $ed$Ei$jd";else{$ci=array();foreach($_POST["check"]as$X)$ci[]="(SELECT".limit($ed,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$jd,1).")";$H=implode(" UNION ALL ",$ci);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Zc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($gi===array()&&is_array($_POST["check"]))||$Kd){$I=($_POST["delete"]?$dc->delete($a,$Ei):($_POST["clone"]?queries("INSERT $H$Ei"):$dc->update($a,$O,$Ei)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Di="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$dc->delete($a,$Di,1):($_POST["clone"]?queries("INSERT".limit1($H,$Di)):$dc->update($a,$O,$Di)));if(!$I)break;$za+=$g->affected_rows;}}}$ye=lang(240,$za);if($_POST["clone"]&&$I&&$za==1){$de=last_id();if($de)$ye=lang(160," $de");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ye,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(241);else{$I=true;$za=0;foreach($_POST["val"]as$ei=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$dc->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($ei,$p),!($Kd||$gi===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(240,$za),$I);}}elseif(!is_string($Pc=get_file("csv_file",true)))$n=upload_error($Pc);elseif(!preg_match('~~u',$Pc))$n=lang(242);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$tb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Pc,$qe);$za=count($qe[0]);$dc->begin();$Kg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($qe[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Kg]*)$Kg~",$X.$Kg,$re);if(!$y&&!array_diff($re[1],$tb)){$tb=$re[1];$za--;}else{$O=array();foreach($re[1]as$s=>$nb)$O[idf_escape($tb[$s])]=($nb==""&&$p[$tb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nb))));$L[]=$O;}}$I=(!$L||$dc->insertUpdate($a,$L,$Rf));if($I)$I=$dc->commit();queries_redirect(remove_from_uri("page"),lang(243,$za),$I);$dc->rollback();}}}$oh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $oh",$n);$O=null;if(isset($wg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Zc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(244).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($kf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Bh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$cd=$g->result(count_rows($a,$Z,$Kd,$id));$E=floor(max(0,$cd-1)/$z);}$Hg=$M;if(!$Hg){$Hg[]="*";if($Ue)$Hg[]=$Ue;}$Fb=convert_fields($e,$p,$M);if($Fb)$Hg[]=substr($Fb,2);$I=$dc->select($a,$Hg,$Z,$id,$kf,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$sc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$id&&$Kd&&$x=="sql")$cd=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Qa=$b->backwardKeys($a,$oh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$id&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(245)."</a>");$Ke=array();$fd=array();reset($M);$fg=1;foreach($L[0]as$y=>$X){if($y!=$Ue){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$fg):($X["fun"]?"*":$y));if($C!=""){$fg++;$Ke[$y]=$C;$d=idf_escape($y);$td=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Vb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($td.($kf[0]==$d||$kf[0]==$y||(!$kf&&$Kd&&$id[0]==$d)?$Vb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($td.$Vb)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(53).'" class="text jsonly"> =</a>';echo"</span>";}$fd[$y]=$X["fun"];next($M);}}$je=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$je[$y]=max($je[$y],min(40,strlen(utf8_decode($X))));}}echo($Qa?"<th>".lang(246):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Zc)as$Je=>$K){$di=unique_array($L[$Je],$w);if(!$di){$di=array();foreach($L[$Je]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$di[$y]=$X;}}$ei="";foreach($di
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$ei.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$id&&$M?"":"<td>".checkbox("check[]",substr($ei,1),in_array(substr($ei,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Kd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ei)."'>".lang(247)."</a>"));foreach($K
as$y=>$X){if(isset($Ke[$y])){$o=$p[$y];if($X!=""&&(!isset($sc[$y])||$sc[$y]!=""))$sc[$y]=(is_mail($X)?$Ke[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$ei;if(!$_&&$X!==null){foreach((array)$Zc[$y]as$q){if(count($Zc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Xg)$_.=where_link($s,$q["target"][$s],$L[$Je][$Xg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$di))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($di
as$Qd=>$W)$_.=where_link($s++,$Qd,$W);}$X=select_value($X,$_,$o,$Bh);$t=h("val[$ei][".bracket_escape($y)."]");$Y=$_POST["val"][$ei][bracket_escape($y)];$nc=!is_array($K[$y])&&is_utf8($X)&&$L[$Je][$y]==$K[$y]&&!$fd[$y];$Ah=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$nc)||$Y!==null){$ld=h($Y!==null?$Y:$K[$y]);echo"<td>".($Ah?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$ld</textarea>":"<input name='$t' value='$ld' size='$je[$y]'>");}else{$ne=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ne?2:($Ah?1:0)).($nc?"":", '".h(lang(248))."'").");\">$X";}}}if($Qa)echo"<td>";$b->backwardKeysPrint($Qa,$L[$Je]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$Bc=true;if($_GET["page"]!="last"){if(!+$z)$cd=count($L);elseif($x!="sql"||!$Kd){$cd=($Kd?false:found_rows($S,$Z));if($cd<max(1e4,2*($E+1)*$z))$cd=reset(slow_query(count_rows($a,$Z,$Kd,$id)));else$Bc=false;}}if(+$z&&($cd===false||$cd>$z||$E)){echo"<p class='pages'>";$te=($cd===false?$E+(count($L)>=$z?2:1):floor(($cd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(249)."', '".($E+1)."'), event); return false;\">".lang(249)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($te,$E+5);$s++)echo
pagination($s,$E);if($te>0){echo($E+5<$te?" ...":""),($Bc&&$cd!==false?pagination($te,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$te'>".lang(250)."</a>");}echo(($cd===false?count($L)+1:$cd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(251).'...\');" class="loadmore">'.lang(252).'</a>':'');}else{echo
lang(249).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($te>$E?pagination($E+1,$E).($te>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($cd!==false?"(".($Bc?"":"~ ").lang(142,$cd).") ":"");$ac=($Bc?"":"~ ").$cd;echo
checkbox("all",1,0,lang(253),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$ac' : checked); selectCount('selected2', this.checked || !checked ? '$ac' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(245),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(241).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(118),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(237),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$ad=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($ad['sql']);break;}}if($ad){print_fieldset("export",lang(70)." <span id='selected2'></span>");$vf=$b->dumpOutput();echo($vf?html_select("output",$vf,$ya["output"])." ":""),html_select("format",$ad,$ya["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$id&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($sc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Lh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(110):lang(109));$ti=($P?show_status():show_variables());if(!$ti)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ti
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$lh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($lh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($ah=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($lh[$y]))$lh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($lh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$uh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($uh&&!$n&&!$_POST["search"]){$I=true;$ye="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ye=lang(254);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ye=lang(255);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ye=lang(256);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ye=lang(257);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ye=lang(258);}elseif(!$_POST["tables"])$ye=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ye.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$ye,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(259)."</h3>\n";$th=tables_list();if(!$th)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(260)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$bc=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(123),'<td>'.lang(261).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(114).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(262).$bc,'<td>'.lang(263).$bc,'<td>'.lang(264).$bc,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(265).$bc,(support("comment")?'<td>'.lang(47).$bc:''),"</thead>\n";$T=0;foreach($th
as$C=>$U){$wi=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($wi?"views[]":"tables[]"),$C,in_array($C,$uh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($wi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(121):lang(122)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(125)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($th)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$qi="<input type='submit' value='".lang(266)."'".on_help("'VACUUM'")."> ";$gf="<input type='submit' name='optimize' value='".lang(267)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>".($x=="sqlite"?$qi:($x=="pgsql"?$qi.$gf:($x=="sql"?"<input type='submit' value='".lang(268)."'".on_help("'ANALYZE TABLE'")."> ".$gf."<input type='submit' name='check' value='".lang(269)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(270)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(271)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(119)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(272).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(273)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(274)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Lh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(195)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(135)."</h3>\n";$_g=routines();if($_g){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(174).'<td>'.lang(46).'<td>'.lang(212)."<td>&nbsp;</thead>\n";odd('');foreach($_g
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(128)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(211).'</a>':'').'<a href="'.h(ME).'function=">'.lang(210)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(275)."</h3>\n";$Mg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Mg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($Mg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(217)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$oi=types();if($oi){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($oi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(221)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(136)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."<td>".lang(276)."<td>".lang(201)."<td>".lang(202)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(277)."<td>".$K["Execute at"]:lang(203)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(128).'</a>';}echo"</table>\n";$_c=$g->result("SELECT @@event_scheduler");if($_c&&$_c!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($_c)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(200)."</a>\n";}if($th)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();
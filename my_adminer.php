<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version experiment
*/error_reporting(6135);$Jc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Hh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Hh)$$X=$Hh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress(" ‚ \$I´ào9#AÐèp9Ž…âói„ðc2…Æ#y¼ès:Œ'ÄhÆo6‹ÌÆóqÐZa;™Nrƒ(¼h.‹†óÌç*–K¦) ¸Úi“O„B	°Ø;Ž'¹9²:˜ÇªÕ@Âc5™ÎFó©¸ÉX\rÆF!˜Àw+–Ž‡#(¼b.\rDc)ÈÈa7E„‘¦š,\$M‡c)ÐÒcÁð1iÎúi3â§#= un>˜j†ú±Ê±\\­ŽgC)â\\d2ÉäXé`èÝ,2Žô#£±¤æiÖ4z]>¦»»6R\rc£A¿rw›î–ÏÍçðêõž6«Y®ì6F¡¸ueØ¹&íÎ„]ß:s9×ÞÖ›¹¨ÕëuûGÒÚ¶ïct0…ÃPê9hÐÅ“²ª»mCŽ4#Úà—7ãÐÊ!ªèÍ,ã<·È2)8t(Ú1r „=!j8‡%àà<	›’2s!­êZ˜#:Û!ªŸ>Ð“T1+ë\nÆô-RØÐ\r”-#C0Ü;³lëÌ@dGa\0Z‡ØwÄñLWÅñˆÛ¯Ëìl‘Èc6ÇÃL€†Hw(8¯Ä/#Œ²L–ÛŽRr¼°,K\"Í,­kkt4rú[HRO)KQó8¶„±DóOSLÒÝ%t¨÷2ÄmÐé ƒÄ6£ØïCƒD9DÕµÄÏ]WÖoÌÐä\\MslÐ·#“ëMlF“õÐqå 3’ P—EÔaLùØ3ãpÇ­%\\£\rÏtß…ÙwU#L4¹CãívX£Ý²ô³÷|üÂÉW	{\\ƒ=Íu_·þ9OñÀÛ\\X¥ñ‹_XÅ×vÎq4P7EKÅ§vFX0Ñ…J´Ì°†a¨f0†‹òð)²KÍxŽ•ÔKà—¹#;Ì1Œ©jû”Î¹dVeá®cbŒºF®kÙœ©LJôØG¬{KT>ŒÃK22Ã ÷c€Ø0!Òõ·.{È\ršf„[ú¦W–ëQ|YYS¾³iÚøÞAzÇò†·C…ŸWñÑ}«r#ê\n3{ó¦ðZpt£Äö\$ÐWaGg=‰cMs`ñv°]Jw3ú“¶¦ÉM,é'ŽZŽ‹F>íN¨:KLì/ºHÉ„zž´ìá;­ä+ rÃ£3æóvcÐŽnýD:íEyÙ²ð½\r©`ÞÝJùí)À:‡@¶Èp ô‚†ÎBë¥/­ýÔ4Të#®tAº@\\l0a¡±¹Çj‚0oîMz/@F\ráº€p<ÐâCKÍ8P˜Ê†ˆS\nájm^êAÈhECÂÀe„7Âx|!T,ˆI¶\"A¸:ƒ»x\rá˜3¶ˆ“z‰wIÍÿœþy•ò>€§´•bÀÜÍóvo\0é_†òÀnqÏ7ä°ú¨ÓR‘UªÀÝV‡Ô\nÁ\0.\r\nØàX¸j‘–Â¦Ý#“y@1²IH’ªChndßžPuM\$kQfíÅÃ2ø™±f¯@†Pi-Ã†NÅà­4b‚/-Ë(­øÁ/Œ…Dˆ8=©mÃ¼Ìi!¡„I•4IÂ‘f°Ê¢V ŸŒl›5]Í£«7`\nLR¥6<ÒÆ£è#¡”†`jæ%ƒe’ÎV`f˜8–³´9Nð@ž3ã=ðâ3Š@ÊIFu)iI‘’óÅDƒÌ¢§ËÈ¡‡nÐ!§q‘ô`Ÿ@å‚:+q2%<*çÜ´Üú²4\0¸1Ãéàô”x/æ²xÔP¥E;±à1„BTÞ„óž³Þ<ôNöªQZA‘KÐ©dôCjvž ²À³C,ž¬Á¬ëLéZˆk­À°V×ÂÍgÕ#>Ï™ôWÕ!Œu¦üÅµ6ÀÁ»Á˜²†3ÊÚ\\<Ì@†ÇŠCô²-6ÉªZ„yiX6mÁÙF‹` JÁXa‘b¡Æ´îí]­„J.9‰Ãå‘Y`Xå„íÞ\00005 îØ¬kfí¬x7¡”;¿s+zW§&\\Èb¾cŒeÎ¢i,ŽÊ¹!ƒ˜qnï4Ñ\\Räm!¡j1åè\0óIlx1ñòó'äï¨¥öwwª¯ÏÓlC°y¾Dœó=‰á'ÚŒŠ ¹0ÛûX±µÃÈ,69 ÆC‘3zè2<\"Xåe”Í´<dfÇ˜l_Iê]5`jœ˜Y}rkË\$JRðEz+\0Ä1£d£Áë\rr\"òÍ°Ë:&üÐ™”Ø¤ÛMp^.*Áœ²7)‰1s‰Œ’–3ÊpÅa«·7'Ó²¬‰Ÿëì˜‘~_› GF*F!Ë†ÖTÉTãA‹º§Xµ-p@[V¶bA­a=ÅòÝ}AË1ÍíD:‚5L%ÚxF1h+œbÇºcëÓÇuAdËáìù‡ ÌU¡\\‹DíG7e2Á`#Wªü™Ni¹\0002LË\$`ïRêx£qõhoLÙXë5±5•h·h–Q`…8–óv5„µö™í	N–¦,Ò\r[<¦ÚsNM\0#nì³9Flé—åNa˜Å»C¶ø‚”ùqiïm²ÙjžtPb¼1‡)AB¾FÉo%k¹I¹£FèÎÛ«1îÀÊ¼ž,ÙÍ-)ëð’ô&î)‹¯=çŸþ“On7?&„Þœ]Ø}hR¬Çö–xì¦“r]6p QžçH)	*èmRžÖØ‡:z‹káçÄF>)žkw»ä¿ÐôP:~·†ÅS€v¤k8`Ë1Î·c’bå]‘Y±–—ÆlŠÂþ@š“–Ã%]þ˜Ì·Â2ö`=½£öèkÃËëQjƒ§åÜë*¹VÑø‹Çp©UÜ´ã\"HI‰ÖÈ1{»Qð„£ÉgVÿµÁ¹êå Ø„9Hl	wj¦tÝ~–¦z§~ÇGHÿyÜ=ðtö@º”kð¤M,£K<9dçý‡ÈÊ[*Åî—™þÀÞð¬”í^8}êÏz¬u­îvôcû ï¦»¿7õ˜úÜC`düW¥ç&÷‡ãü<<Ö¨¾þ§~þäöýod†h<‹ ò‹h»\0(\n\ràvÉèÂQ,¢ûÆï‚öMÎ0P0\"wã@\n0E\0Â)‚œ)‚Ì\0P‰Â£zjlÁàt\0pw@R`\\ÿìA° åLà­Ê”Â@?Ér¼Ï´û¦¤ÚŽ”â\rºå-Ä0Hñ£kfþciŠÌo2r¯6èÜDÍúßïæ>/´ÿ©@öÉðÆû¤ûéˆÉðšú05¯áÑãt°D:ÃÑÃ\nÚžecèàn¦î“N¼åP×	M*\rÀZÍòßp¾þQ\0©®šF¢Fši«4à)Îõ**€ú¤PÍ²õ£ÆæQÁ‹Ä~£DÇ+Ø\$KÜy‡œ7H\0#DA*¼@¾x…‚ÆãP\0B ¢!#\0h®^?ƒfË®fÑv\r˜‘ñ£¯d0D\n@ä¼ Ùê¬­1±\"™1xòNZ+±—q±Ä:L\rã½.a£j=úo‘pÙ‘ÈA+.ž&´@Ìƒ3´ à\r\0àèn\rñ© ²!±y!`¾7 A2! Ê#Ò*%â#q¸âG!‘÷Ã«\$;\$r?!òQÒ2’6lc£\$l.\$rÈQü@ÄÄL@rd@í4{ê~¿ÀF²q'D¢!z¾2	’.òa\$mõ2\n\r¢}Ò§#ËÅ\$²p1N¸‹p±ñ„ñe(FvrŒ™Œžg…,hÎÎÎ>1ß,¢»,ê–©n‹«.Ck.ò„¨1Òæ,»ÃÔãhŠƒ²½/JH2Ô–àv“\no@ÜÝèêŽéˆÓ\$r-Ê\$Þ%&I©Ø´‡Th€vtÇ\0u#Ìƒ\\ê£(P ê§¢^±Ìº\" Ü\r(êHÎÌSbA+¯6£7F?ÂXQl0ÃIÀ\râ5€ärP²^æp–Ép¸Ž\n¾&.Âìn²ìÒÀífê Þêóº2³¾ë¤5ÎÈëSÎí#s<²ë=Î@^Bæƒ*`DÄDäÝî:CŒ³\nÂDERàå0BW&s¯\nD¬	þÀdJeºc‡ ŒHÄgã÷Dô0J¨3>Ê\0T!BE´Ç@FÇÀ` €©O6‹²Ê¦øa²ðJt½r…DtK\nÇ¡ETXìÄ%Èx… …m^1¥e@ @ô&Fbåú] \\\"ò]Ô†‰è£HâM•I…ò_fMJ4§E°ÅF7CÄ\"Çn¿ªJ@bg kG’…BÅFN6T˜¸äÝ;T‚´@ìœE*ô×ˆ\nÝðn(Á?NR\r’ÖŒAFªº–,-\n sƒÍõî‰AgG÷Rcs	cã@§3QmŽ)’SŠ½R2÷:RýCU0Ñê,Ñï1G‡çæ5Ña‰Ò•5¯1fygë)c£\0zC`XX@º•Y(Y‚Æ¡+ÏË>ˆ¦G‹ôuóŒïcL ó–°ÄÁ?VÑ0Z`ÃYU™,ž²ZHŒ€Õ©Y`ÉZõ¡U*¢žŽ‡LU‘]µªÊl«[5[dÛI•¸¿t'F“Ž*õÈjSš°ä6ÕÕ`îV€µ÷LÃìèJ¨¥\n\n*ë2V¥‚ôuÚ\r/LÂ‚\"b&j1>Ë¶ë©Ö)åRæÑB)ó(ŽföãdlÀ×Vç8ƒÌ)0§žûÂâ@¸£òtRÛOê(Œ¢ùJ\\ŽŽ!NHÏIeFóe‚[eÂ‰f3>wåN–n+£lötŽ3+g£Ùgèíh5+h“-hã€Ï‘úóë#ãiŠ>¯Ö¡\r§TŽTÔM–0±dÆ@Â`Ðy ÌU–ÍEYuä6àè!rW(@M.·0\$™sw:á÷>ÎátwkKk¶We¶^&–e4hUÁgÙ2vÝg“/gÓ3n‘å–íhÃ/i0“oöšÇ€apqjD—p×r.—+—1u§ÙeKk÷elj\"HÖgg3ì\$Ôà“Em±	wÓ1h…x‰MxÖ•w’Wy—œU÷¡Tg…zw=r È”\0á{6Ku×¹kÀul\0élVa|%G|wwm6×}7y}fónx7ßCVŠ\rÖñy\r§yJ>žwòL×÷@—ûtàÍz×A€\"\r€–³{v¹e7cl7gl—Åv×É‚WÑf¸*“3-}¶çƒueƒ¸?~˜C~×–w›j2ß…7©rw+WÂ†Muøi{Øm|klØ)‡—Égx/wöãƒVë~8=xøyØ•„`É„¬›‰îS×«Šr“Šµ÷€¸dTwa‹X†ø%Ø!‹÷s|øÃw¸ÇˆHïŒì»~VóoØÚ¸@ËŽÝp¬¢ÈL‰…WRß¦º5˜­€Øg{¸{ø‹ª)‚9‚x}ŒXƒxÝ‘ƒk‘ØA—\0\0i‰·¢—\r	BÑÂ™“W*~ Ò7¥€Ãù?b]¹G‹yKl¹O‰wX)•˜1nYxx9nøÕ’\0-`Å’˜O—p—ØéŠWAtU³•˜4×ÃÈSM? bÄå—\$—\rëÍoµ\$¤Ãs–/ð6Ñ©›œ·SäÀ×´´y±ˆ£ÏV“@TB+ù:näH\\Çú,È|Ñ™É˜Ï<ùkxù‹9—ø¹™ÓC‡ØÁwy©Œ˜3•úRÓå›–š¡j”!Z£—Bð Ã£ø±”X—i¤×omS‡¥-¥yxCÁhxÑˆúe„`qœäÚ:s£x£…—,<…|#-¨†ºI™¸s‹ÚQ©9‚Ù[Œº]©÷á‘¸Ó~z§’ÎRX¹Š7Suxó†:A™:E¨y”ÚOw£ÚU‘Û¥¸‡Ÿ™µ®šs’:k®ùtxYxyÚµ÷A@é¬YC	¤ºÏ™úÓ±9U©{š¸Í¥÷‹®y²yj kªÚðs/¦Ê”][O›”š‹´»©Q©IÙ©™]±û]ª9·¶Zf¾¬qµ+ÒšA\"\r±¼\r²6\$ûµ&BQÃa#r)\$ržŠ\0Ç#rŸ»›Ñ!&=’6’[Ú»Þ`¿¼Èú,FñºR!×!#Øûúë”JÀ`†He±M5X;bÒSªw²Ÿ%Q«ÂR ß¾<%²7\$2µ¼9%c’5’M\$Q«%<-Ã ¿%»îy­Yº²\r½’B£€` ŒQ\\]Â<,àìD<ÇoÄ±}ÇÎ{gpº›õ\"Ü` éÂÙ\"\\}À2CÉr)ü…¥8)ÆûØ‡ÈHKÚâœèÎ?\\W Ïâ}ÃbÌÉ'£È’ÄòGÍ¼ÕÊQyÎ\\?ÍœÒ'¼× ¼åÇ`ÙUU!EÚÆÀ¾’\\ÑÍÊÉÏÝÂœëÍ=ÏœÓÎý%Ñ\\÷ÑüÝÏÛ¶'ÝQ²…ò•üÐN+ÁòÌ’6\0Û¼Éºœâ!ÝSÕrAÖ_ÒÝÍ]n!¢ž eÀÜÈâ_Í=7Ý'\$ýÇBšž nWÀÆ‹€ûç¡Ù`ÅÙ²\${à­€ó¾`¿ÛèA=†½®§«Î\"Ù]™ÙÜ]¾štšo¼›Ù»ÅòÛòŸÞÝ!=)¿rƒ«Þ<qÄœ§Ýò¶5ýÉ>ß@¾\0ÏÞÜ™Þ|áá¾ákÅà½ñØÞ!2­áž/ÍþÉ1*ï‡âóãÒ&\$@ÆX)ãœ?¾N­=ïÄjÐ' ÀŒ^mÔÑy*>!çR+2Gã2°\$\\;+œ-&òs'|\\²û¶\r’‚¡½A \\Ž)]²GÎõ9%Øá*‘y#ñ|Aß¾¹\"Þ%ò7èÍ\$~YåÇ>âX\rEêZŒŽƒH»þ_ã^!~Áâñäœ¢4^çw}\nþ÷Ò¿Î¼•í¾õí²Ÿïüñ|2#ÀeêE–\\À4ÃZœ\"|ŒàQÂZ	Ñ¾§Œ0¾\0è\nnl§‰ú]ÃÝ²g'ì…&?Y'Är7©J:Ëµ‡Wvz‰èþíG4äœêrºû³»bQøÛ±Å½Þ_¼Ü½^_¼q«¾¥ »á¾Å¿Ë\0áÀ;ÿÀ<ÆEm5ƒA²…æœkÆ½ßò7Ûò%ú¾Ã]Éã±­Ä~‡Ä^Gþ½¿#üUû<Xçõ¼ÆN4q³ËÜœãÇ—¹=ÄÈ'ƒŠø\0¼T\rï)€;Þ6åˆ…ÈmŠr»ËÜ´G.:ŒQˆž3»QªæG\\:ÕÎp*vûœœôï;<YÓ+v;Ÿ\0¬'ó¿ ¯8L\n§HÀÎ®t»±Üÿ—9AÎÈc¦ÛèI\$• Prëú@`óG`:¡\$nªuaŸ„é‡X¸yÖŽÇû±Üôë‡X¿Á¬EéWû@ªÂŒ  †ìIÄ‚»@¿Ðuƒ»°Âí—k7ÑÛ‰#vüà`îX:b®éo£ºà¾òG¾»ÉåOwx›ËßòïW¼¹âôxˆa5x<‘áP‘cËáG	W‘B†Oh€¤Þ\nÈKB©)ïk„ûÞa\\òHZ<¥Æ0Uy«ÍÝ€óÇ„C\0A/>F«Ú ô'°¸‰+¯ºJ+ÒFô¤™=2\n0Svª;aŽ4j½Yaæ0«Öž&ö×¯#}ðèÛ„Ì8ÒöXsB±í°¹‡1žà'¹7>%Ý}ëÆáHä×Cš!…ß%ò>Îmˆâ_Û—Æ<Pø‡óä`@ùBÿ>XQ™kæÂXùÕbÑô°}AGœúeó¾ 4¯ª#ìRh1÷ÚT8O`£å[`´âDP£/œ|ôFŸBw§ÒD€X\"Cê‘öŠwàô");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)Äùé5•pí˜hù°ëéÃà¹\"0hL5\0˜7 æÚŒÚ‡Ÿ{ïÀÝ¿¸Ýðî´<åk‚²\r+üXÅblåè/ØX ìAC¨s\na¤‘l÷Çí°}·~Ý´— drx(\rè3ÎnGrÃTÄ+àQÏÁJ¹éï†PÌ\nØ'?À€Ä´n~º:· µòâQà8€»¦†`{ÙaÜÊ æ4:„ôLê:Ò öð§›ÉÜuMó„®ßŽM¯IÁ…,†`ÍBgN€¯Âÿ\rBº•\r\0ûÂoé\"¼/‡2^D2)n¸\razR\$à7¢`ÍØ¹¨äèL³p®*Ò{`Oqt–z%%éHg§¹¦ 0¸…ÍKÃf&Ì)\\ÐQW¦öù‡†\0dp¾Ü<Q\"è„c”ÑÏ'ÿ/ÃQ7>¾+ù¿j#\0åîÈºÐ‘_ðÈôk3ëJº(óÜê%OêŒ£\0³Tm4³k:lÊž¤mD\$°¦¬×\0éê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãHjnæ¾5€ðNlŠŽÌþþ‹šfj&›Mí•OüÓdbÓ°RÓð´OdiiÞNÐ(¿%-4+Ð:HpR¦§?BàM0š¶JF¢.ÚòÏ1Mö»f~U¬Tê°ŠÒlË 0…þËÀòUÅÂ|âÀÐ‚@òˆX4àbgè ]Pè?@z `…â<ðÐRîÔú`úí-¸þF˜ÎI\0Ñåþã¬¦|Ðž…ð¸ê¸Å¬TkQk°F@0Lõì˜Pƒ\rÀšˆ#ÎuØÍËïàÜ²pXÿ^Ñ±ap\0\r y´Pt%\0^8ÆÒ\r¤Àµ‘Šk©£\0Ç¡1“\n¢dñ…â B± §.\níQjq\$\rMË¾F£ê®oî²êî(ï¸‰ [‘ .#>¦ð¬Q„`Y`íMÑÊ,ÿJ†ñí\n<³‘uÑzÔ+I ÒÃ!)Üï+ØtñìÅŠ¼Åâºÿ¯lÆœm\"\"17\"jÀ0#N±m– ÂÙ¢æ–O pRÂK#ŒRÅç7#C´&ãÉ!2\$ÅÒ>†Ïœ”CÞ.R\"Ír‚ã\"PÈyË°7¨\rçÜ¼¤s)Õ%Ð#‡U\rOÄEÐ€Ôøî«Æy”xCt@Ð¿¨û*HàÇ é+@ÀàÈ0Õ\r’˜‡I‚¡ŽìL²¸²˜‚ˆ/ \\\rNR\r\0¨@+û\$Š©/*w0ËS\nt¢\"ä–\0ær‘/¬ÃPøÃðí\0ù3L¿°í%rïRÈ2R*º+÷0Ó\"¿-¾3N1âD7(tb’ê/@Ý12º†M6â†¬dÈ(á“c7‹*–Épãl8²„å(t·0ÚKpÚ2Ù-ÐæÇðÞFbîƒ\$¼Røï(/ó+2îã,Ì²ËlºËï8¬Ïø–éróK!ç©6\"»Sa0bxÓà¾\$O\0\re‰ ¨\r\"8ˆ'‘ót³Œ\r³ù+£Pá@Y1°£Yb”Râ¹°Ú\\jK)÷438 hÌ1ó7 z`pðRŽR“CÒñBöîô<»Åöõ…”F	4çDtJ-¶tVå©D6\0NLåTå”v_â0ó‹\"qJ†ëIÅ•è*Ì.ô¾«àqÂR|´¯HÀÎ t]>ˆ\0€OL(#énŽ.®2Bn9Jm‘@R s2|”Úh”ÞtãNn6B“cO+âšÒ†È e­¤ÊåÐËBO=,ÀÀC:Ô6ô:¸M<àä—BV\\`¦/BŒïÚ§Û,w:‘H°Í¸û2xpšM„nbn«¢Õ„‹0†ÎÕ	1Ö,4µV§#& lËâ×ÍjKCš\n‰gÍâl\rè¶IcY@ÏY‰h–3Û\nU’]@Î	 ÂÔ\rLÕhú'\nå‡'ñü<\$O\0ðœe,. ú–\"t\r¯q\\Ã{]Ã]gTµÝ^\0Ñ	k=£P¿Ž8`ÊF\"QZu¹ZÂH\$ÍW`–Yušï-WZ•½\\BòdTÖ‰z‰5ðpÕÒ(æ#_Õ¿`Ybu»[õÂœ‰ ÉT\0÷6 t•G\"e@\r€à!Åe'µVPä¶w'c\"úf(RÅ‡&#~À–qUË\\òë]Pž¿ö›'OÈ<v«d¡d`OjgR5Gô*­/¹UÖŠû‰¤þ­pì¶ýo,ï¸+´Ôþ)X¯ëk.ÿ0`ÿsðÓ0h“r“°o`\nIb	*µpŸB\"åmçOn-õ§%Æ0Æü“jÒxú+Ø Õ[àP7\"*hPP„\rc¡]€X[`æëVÒ â7å:`‹˜Uà°à(–I¢ƒv*dã¶;·n	—rwvG tjÀ‚8d\0ž@Ôjw|vš —Ÿz7¦ bŽ	¨püàæñÃx-þ\n€ , u:)âÕ\"uw…:îW>B<S†b1ñò2éC×âS·èd†%YuÀ÷sÕ¿~cpqMú!þà#P‘ì·#@ E€c\"@|d%ku£\"* xñíƒ w€×äuX¦Âl&XIS…B'uà@6ChÂ»^V€·ã…‡@ÊêÓ†ƒ[T÷Ü1àßæþb\"Ð\n\0ž\n`©I\0Ž¸ž+—E/Æ\"lWaxÆ´—Š¦DøCâ(è€1Äp¶wÐ¼…®Ä À^\0ZJ`î¨b·D#ãŒ5€É^WÛ‹H“‹¥;‹äâ(à°¸ü!`È¯#^\"»|…ß§ƒˆ¨VGrßÂ_ïµsGåhÂQjd'2I-øÀh¤ ^Àda)×“…:HØLå+ãt…tÈs•GBám­…y[NŽ\"`™i•—þù~@…c Ë1àè-ø!!8\$%ø(!ÎX0*ôåêV…¹‡àOƒøB€xw—8\\4ÙqùÃwÈÁ†cV#ømN(o˜³“£ÎU QŠõN7Ã–—;‡c\$ÛèŠ¬IU\0A„—CFVúYhšF\"&fÐ(ço˜ek˜£Ï™w Db ø®úˆ”‰ˆWRu@·J‡rŠi8HÈ0øè1ux6ëRèqq¡UØ ¶ok¾@³öœ\n)oÑr³Êý%rÔeöÄòÊí^&ç¸%…—u¢ÌÞÆ)”ª¸\$`HàÓÇ“Y¯%‘/ 9ð7s£2f­”¤*žì\0øFe–\ràù9	rš¦\$š«ªéÖÀ:µ,pÍ:ð4ó}7 öb%a0bÉŽàÊ\n ¤	(€\r¹ŠGFžª@ØìÃû\r±\0ß±E 1ÓÄÐ“S¢Âs+£X‡´%@u«‡9}fS¡{\0\r@ÞDBŽÍ _wDÂé¯EÀÕ Bî>š­«÷*@Ð}kã¶7E“È½à¸à\\P’,\"ª-]ƒÉ¦°®·	tZsz£™ý•¿’ŽREš àñ˜ó\r/×—1 Ð\$»Ðì„üPÅD€¾w9ê¢ÌÃ-&7¹rÑÎÑQ÷oqû°‚ÃBi‘¤.ù‚ÂI-ˆ~Çàè‚<Â+ø€î0€ÜåÓµ1Tk+ÔnèsÇFúØ4ÑÁ²nÅSîÏóW2ü<@óìckþÊÅWÂŽ]º‚GS·•ÆMfme÷Z„D!*vÅxX	‰û0Êw0ÇŒ1Š|x\$&Ô‰+~ÃìGRH!rÔ-ù24‘oµ¦\rÐå\r™0ãÞÊt<Æ…Æ·–è:ÅDSÀdú—QóÑ\r\\æaò°Ëç¹EôbGŽÏà„m äg¢x-T’¶±ÈwÈY{É¢‡tp0®?¡†Frx	ï2]\"WÄR;'\nÂ€‡ÄKùŒb1ÝGÑDG™µcå’Ro\$µ¼RÄïtD†äpó< h€e\"ªÕ+ùm+š@ cG5¸™ÑÉXmALIØîbbmVþ°Té·^bQq#P€ê\0`\$WÕ6ñ¿Ê…]G€rV\0u’e\næ(ÜÃlÃ‰m9/Þ<jnÇÊƒÜ\nV®o´Nïp\n€Þã\$EÃF×àåG\0²þ=,2 enÝþ–…CÂ<~\" eààRÕ™3¾7ã¨’¥[à›0þPž@U»ÀûCÇÒ~J¦'A¨BåÄ\\ƒÈwÄW%_Ðç<h“h@§>6	ÚOÊf3©c9²‰ØœŒ e‹¿ wâÁt…ÀìŽx*»\\{\"5›'±;³t0;[Úž7Þ´»Ã¢[Èt<lç9nÞÜ1ù‰¼}X–,×í:M2mWq0ŸÕ£ïü€Æ\rWÞB\r~u:…eðÝî~^[ò	·ÝûèË+«.ëã|¥,ÿ6\rÂZGbß•_ã]ÿ^Äå¢’ÄfpJŠ€Z–0Ÿ¨@VãÿQ'Ÿ'xöÆyÆÌ	€ÞCñR'Nö…—?ø%–Ök €è\$cöáÎ à=6ì¿¢í	çyzì>PíRì¢Jð•ë^ö·_nÊx>¯ ŽËºù3»3µ:ß>f]õÊÊ~£3¬. é:ß¥—˜î>ø˜`ò>e\rý7Hf×1ž<üh/AÈúÀò—è¥¼žÉÃP€xüs¿„ýÇ—7ÛøÄ†‰É‡'„~±Ù]˜„&ãÕª¯ì8áÒÇÜûs­\0­Ù+7~Ë¢Þxüà‘¾Ûj:\n¨XŽ—Ô8%T@P?9ÍØÖ×ä=\nuˆðDb8­àŽœ#j¹¡àç€	ð\0„Kp³ì7ÆÒYûÑ@àôtä‘)émï:È™JQÖ‹™}£+†@€bÁ³A¸u)¬Ü‡\"XÅºžYÜ¥E©FäQÂÍ\$³¦ž\\\"Z8ôg¤AˆTMîX×É*ô\" #)Fä ÀK—¥B-éŽ=™¯JÛv·l¿\"x‹\\ÒÊ‚™B@–C?/ˆ´ÅªÙ‚Uuê)3ûJ’†8WŽ]M›ìITèÜ“!„ª…²s‰¥\n2›Ð€D:qïB	tå-5/ÐÈB‚à—F!]7œ3‰,:˜-Ã	p¿tôÆÙ“ˆŠpÍ¬3á@…°CN0Õ ,6#\r¨0Ãr\nW’Ïá•Á–CµÐï7hhÛÐÌ„ÈŒ|©LBvã£?.!iû_ÊÞbšöŸB	P„XÚá\\ 8…q®Õ\nÈ%êÁQ„ù*P–'¶	À‘B‡«•GFä.[>Ú‰;#JJÈ›Xn§1Ãb‚AkÅÓQ94NÏÐ†­Qƒ(aÌP˜„ 4B¼y\0'0T\"˜øžDù÷£IzÇT `2¨ øçÒ!|YFPàD¶¥m¦8éwÞ&óõEÐÚ/Dá	4B1+Àlz«<®@Éf¥D:vEö´=&ÅÓjîYh¥“›µ§«åj+\$WbÉ•Þ±²ÃX€ÐÙqj¿ã@>Ý¡<W1”XÙ\0ÝÐ6\nå8¯µX\0£Xjï£q:ÏÀù&F>×áŠ70mêLèÜªP/¨ì\rbJvÀDŸð‡¹€CÄ8…sÆh0Bªð‰Ýæ¸4-\rB\"\0Sz×DA½z@=2Œ.„öž8QêSHÌ¾Óñ_*G	,}\0{HûäohrA4€IõéH†¬1#\0@©´:`qbd0œðO`\n€Î’ït!È8>€sp™Ã!i€¾C±¿&DpaÔ‚¶ô	ÌÔoZPÂôØäˆŠ9qìLŒ£–&õ†ªMïoˆéÑ¤añ(QÂàg(z9MÏ\0D};œ£0tI#Ej¸Ü¤p­Q)8S@RÞ€Â µ2YFz<‘–qá×7­Ëb;Kü“!\$j•%,>Ñƒ#LþtpžÄ>±òZXAÐ.<+€,ê~á\n‹ù?y2I™4Z¼<5Z’º&ˆ‹Oh^q8¡©¥,* €òpÕ‚3Ô—áfrÒa”=\0ˆÊ`LyC×&°ð¹£ÔI–Qƒ¦ÀÈ(\"I€=’”-+tTœ¤ DPâ\\ÌG+yZ‘Ï‰}5L­årrtUlÍ¡èiÍätáz›ÚYÊK–Œ´ÀË-VÒ\$j,ax–BÑBRYd%\"-¤×NÚ”\0æƒ–QAÐÈ!Ñ5‹+.ØîK¥F¹–Ü®¥ºÔ™jZêÑ7´¸C~‰\\Kpå2Ò˜·ÃÉ0™L.[ÒÕ˜¶eÆmÓêŸ…lÇÛ Á4ƒ0GhD|Ð’P úÕ¾Ê\rË‡yÄ!¢I	zÆ¨ÍR\$ÄD4) þLéÓ‚ÙãÒ¶ÙVv—Ûç4DVdêêH³¦ÀÎ~u¡]QŽ›Fš1+Ù•.\0S-H:ŽK¢6óùš Î„›#[@¬ ŸÄd@=k öƒ£€]HÂÆ7x¤dS„ÙU†9ÉDldC\$èUXŽÒÄmHœxÿ8@ª¢q5|)ŒEÑ–Œ »(§™˜[nÀ\$, |X¢€(LÜGqP'W7ÐÔN‚tQ)A=ƒ®`\"? %#¤LRÂª¥„,(Š lpÚ#û4°¤œ%œpÀm5TXŒ!u›œÝ@ð0É´>ÍÊÇF\0í€Â`3ð˜Ž¨Ÿ\0@ÔÕ„“O\"\0¾`€ŠîŸ˜ˆšÚÁÞN©EñŸdÔUT#	Å¤bp\nµœÉBªŒ)É¥úxÅ³E4Õ€¶Œ!\\£\n?3å\"¨l'\$‡òÎZ633ðœ:©¼OnóÃœÄ:„9¹«ÆcóÉIIh2‰þÂð*0§1=\0ê†„‘ä¡1“¨‹O\"jc)-Àrä’y£ÁGUDY:°5†¼-à!#¤D1·\0œÍà.i…+â´†²ha*ìBT€ŠðS¾âÃöP/…@SÅqõèæÊ7„`b°§pˆã¼\n£>†¸DßG±#ÜS¦šsIÂð\0003k¤øÔhØÅH0à`BH\0À¯\$n\ruPd¢lÆÏØ|’i¬ûŠ¸5\"ƒ{;‘•Ÿ´´ë\0h\rÏâ°BÉôh”§+	e@m=³ˆ?‹Í\0žÑ¸Îj‘O\0{78ºU¾eTÆ’Ð@ZÐ“Jm`/(ÁÀÁMÒ˜MÚuó0œ£i[m7²Ò®U´ÍZiCOMF¡\0´B¹£u5(LÀòÓ•Ùtš5'nx#5†¡s„0RªåBÔ“8^4iÀ¾ç ÙÁ€Ê¡£ú)`i„RÁð…šDœ\nÑµQ‘IRhVµVFC\nT¢Î0¤8*‘)Ê4˜°³\rÐ«F©£tô(èoûòŒJ8Ý(ÌDá´T€#³ÐmNÉsSà:Ñž¨3Ðª÷+O€÷Q°Á•PÈ@wPƒŠÆª‹¦B†òkŠ­“õY«˜Z,8 x¡CŸ‡Å¸\nú2±G _tÛB(ÀUØóÖžÃ_iXÎ…ž`¿†GQ ‹LpiÈ¤]agQ&¡/\"±Oj\"=Z{µÆR­åïmxaOêñ8¹”ýk•’[µà÷%~M0º5È­Àæñ:ÏÖždÍÿEµjá\0ø6µÓ\\©uk€d€I’Ql0g<\nÀ°\0´ .œ*¢`OÚßÖ«È\$L\\›‰ë]1\0¼æµËvA\\Ò«h·ÈŒIf¶Íxíw¤¤hâJÖ°ØUâ®@Þæ²YÙ,Öð¤µÂ™Ò{z /ˆ‰Ê–Ÿx¡ó^É˜½ÜÐ’eoË`f™©*˜È5Ñ®uKV€Êâ¡È®Us\\ä¿„s«Vä)“>&Ê†Z§Pû\$ê«éWôÄØ	Ïwwr0,s ˆ~±):ìNOÖ½6žM‚äÝX:²éÚ¢PË€\0ËJi2VûöI!¨A–ƒ7×h\"%nêT8r§.tá-þ³à,[ºÑ¥‡ŒQêu²˜Ë¬cJ´R&ô¦5à\\Ÿ%dã/ÍFÊ/’‹p\\«&Äò‹¤R-´ÏÔ³û\"\n(/ª-[*ÜÓ(¦–,FÜšE.ƒ7Wê_UúÂ\rÅ®8-XIé jÇ–+\r• =dw ­ u™´:]ƒŸYÁÉD°—ÇxEž±FYøÚFF4²Ã—J4«UY¶HjÑcÿV2ÓÖ2•à0M°íK@RÝÈÔHÑµRi+×Â¬m;?Å|‹¥+i“]§„Ú‰iX’`m`Ä¡IŸ\\À18öSÓùjÁ‘Öx*n[žÝ! ·[UZ°ìYÖ”˜#áŒkhd­ØN»w5hW4Ü·Ømú.K{XÙ¼¤ñ!zâP®c¢¶»ý.†,›nKE‚Å¡ÍŠ‰L·­ÀÀªlùÀs±•‰'p0‚luMŠmÙ:ér~gýA´¿¹0lfªb-(\$„/3ŒòZ‘mùF³jâ„x¸-È@Hk½ÌB\r¨nÖPÂ8œ‰Ÿ}Áˆ“oøTÛáÍ·º\rÈB!0ç\rvèñ¢‡°D®–Î»¦Ý<¤à[ é@Þ\n×î]L1\$·	ˆÇ*'€•\\&ë7ºÜÃn?t ƒ}hTùÍÒ#G{³Ñbí /¹IL‚6\nºñ¶&»ã¶›jÒtÜ†ð4b”·ïvK¥é‚,m½'-ïyP>¬ågg`E]#‚hQFT\r¦1á®Ê@=ˆ·N˜0Np0ë]@Vè·TîôZ›f\r@ÃŠw7Üœe r•\"©=Äf/¸b[/`{ÙC\"Kh~i0©V¥CTÜê·ºÅò?8_9I—Ñ=ôÒ?pËk¨aþ0o´BpPÙµ”Ð?kál‰s¡‚2–‹AU¾8ò'ŒùÚÛ\n‘€,­-«Q²0ù†À\"à€D9*MÃ`'À¸§ŒOÓÀ)6D(áûmTÔÑfÚ¸âŠµ€g”0ÊÃÑÚ¯!¨ŽÅ£‚ã¦ñQ5f+MõïeM`±–Œ¿ý•>bªg¸úÿôÒ¿ëÝÈÀê`ÚX\rÓ…\nôê°6€Gl@+­&°*FÆåàbÂ(>ð9†+J;8ñÛ\nîÀW…¬®_âÌµn\r\0ÝƒaF_ÿv¬v\nÅ p¤nO@\nm¿«imŠŒ6¿'h§Nö_Ë~,ˆÇ#ð°\0rUæ­IQ\$­(D]:Ú×¶ 9SŠk‰K#fU—CÄ@ÉƒSv‹ÒÓƒÎ¾»ÒƒYo%¾N‹uÐ!\0!ˆ@	-B‚?8¡qj’Ü\\b5`'!ˆXH?sr ªç³SÄ!Ž¨À‚bãÏ#óƒˆ‹Ú¨ãØÕTA‡MH Nbˆ'@Äê_žÙ¥ƒ…Åè!³/b÷Èƒ!WoFsìnƒ÷uáßvŠ¼ã¶¤ÄdÉ[ñ,n¸¥p)ïzL„cêS‹8¥êÖzdndD8”¥—4]k.zšÐ­¸ÐMšµCÆW„t˜d¡'7e©êhuÈÒè	CsJò>cñ®fÎr{	Ðs@ÝV«C_r•y9>…œÏÌ~…¶VŠ.–¤\\rÜÝ6€*îÚþµ¨Å	ÿ+mmL\"ìþvÖA·ò»i7fÏT+ 1@âæÃ]rèäº…œîSÂ·,˜:roA\\ªÏèz+\\ (GíÊ%¢Ù+Ü£äƒ)9\"òãrß’\\§Ínø ­«g+n·òNMnPä§Êø3*«œ1‘ƒ.ò\$@¹mP’ÄEñ¥«®Â	rÙ2*Óf2¼éÌ{Oâ8j	-ÌæÛè>¥f¬7‘Z¡3ÈB[µ\"E`vœ+-ÇÉË‚ä2å“:]åÖy¸L¬¹¨P.¸ÉÄ«‘0µðMê-^êV´ðkÊ³g å^ÄÀ0w›\"œ1¢-ÊU•²ˆ±F­•‚NPâÚÍQ@µ'ªÕŠWLô\0{½òBŸ’WP)´ {'Hâˆðeª4ðâˆX\\º­iW–\nã„†­Ê\nèU\0zbSê`ùÒH\0W TÀ¶¬\\)þ¥8ó™V¬çÒñÁÚÎ¦Pî#“¬¿æncz)Î‰Ï4:}ù£\"6:\r!6ƒÙÍ†™¹·%	:¦ILB7l´áƒ×ÌöfÎ¬c\0ˆ	 N @°!\\é!úJV‘Lâ\$\0Ê·Í)ÌFá—Ó g•ëk‹Èk4Uµ<f'4f¸¡þ{&–y¦×½Y’ˆì!†Í7à¤6„!2Ôq4€\\Î g7™¡Þ–†¹¥ÌÓQYn³ÐÓµwæQ=.\ne™“U‘©P|ù#5½ûGùaÔB5ÀU'¶‚mf0@¾_ibÃ×g¡ÁÄÏ^žƒTKN‹EõeKb¾Bù\r|Ž”h(5B«I¤C­j\0“gU«ËÇ8—b°(-¼!0	À¨­ÀÈ•CW;µu®Ýl©Ó¥,£‚5sý8kTñHå£íÂÅ¬t>»]Ã’Óð\0ïH[ÖÙÛÐ÷Ök¦1ëàÚxƒZÈ@ @ P  x•ä£çÐ€x`hÀûâ‰âX!çK’œÎž= _à?Ùj…þÚ1t5ô(v*¦ÄGÊ´¡éá\0tdŽ3ƒÅ\0îÕÛ2xhc€³œœlÝàGÚv2ˆø÷â¯žÄL¬óyËeSíQ;¦ÂFeÅØ4ÊxHb`ñ:mT[YÚÛÃ€[\0ý°¶VÉ)ÞÄu+^tŸÇÅÐ,Ö3³•”•jp´©“+\nSÝûEŒG³Äò•5ýã	ç<œê¶øOR·… çŒy~ã™¸ò†‘'¥{(Þ tá‚iN`[ÜÀñŽ60.€ÿtB²Ý\"C\nk‰o€ëu vxí•ª F#í¥Bm%21â€bÓ®:l0	G¹Mw5I /ðÔàhÁ³?¨Çwî¸žªT0&átàað’í\\›¿u˜îÚËbòp€-ÞÐ\nwƒº[UohØ›¾\n¨ªRk¼RžÌ—=¨ýÛ{p`)!JtRûäß`	÷Ý»Ó.<O{»ß\r±7´Ýñ—|ÎÉÞ¶úO¾¾\0ï´\r¢ŒÞ¶j·èœcYÕ[ùŒ¶ÿ8#¿î	¹´ÌbõÛ¡=\0ÈP2Æ`Úþu²GNéw™–R€»†[Ëž–ópÀÓž°™¡¥»÷~ª!ïJÉ»BÝÎØS´Äw‰ñzÛ·NïvÕ½ø×z›ÄÝ­óà³>\$C|UƒÈ[Àwƒm·âUÜNý­T*¦:È<Þ	D•D.Áê¼8W8µ‡­({Úw8¾/]û“©ˆüju •ÈÃáÔñ Ž[îÛ˜d¸M-UUÌRÁàä	h6±½®?rMÞ.¯Û8@zèJíi+Bt(ÖZ^Mm>b¦õÚ˜¹ö«º±ºrjýÔ½IzPyjVˆËVÃbçÛ.Ï¶Î0C—›3d×Ä|7¾MmB[õÊ}­ó²ÑˆòrÁ\0Ì@£ˆ\nÐäP·€¯€sPg§,\$^Ð\"Ü8ÀSóka9\"0fù¼ÒIÂs‡œ|äç6[	ª&É6ìÍ—F>æëHÝ«Hë…xÂÁÿ6¾I~GO^ÝrºlÛ]°³…© X‰¶!°üˆxDõ%\$Å@'€…BVïkXÀX5\nJÄ_wªzâw‘P\$‡:Ë;Mê¶’{Œ „Tè0s\0°÷¨Ñ;©y–aˆ]ŠtÌŠ¬ó_,¶žpŒµ9ëÕtÆ:èØLø˜—’øô±ô…êºlaÞ¨.7ªÛ£_ÀÉN­ðo•È²*Ò\\NCfõXöÅFçÂuôMæò9o„pîÅþöw‚Z²(³®JíŽ­ÐÅåÑ6†°\reT@-OÀ~s¬ŠždÛÂ¡^BÓÄÂ%vrÄ 2×Y;@'Ç¦ÅØ.Ãë'ÄËØ¸	RO l<I—; 5>KÓ²‚\r`ûM³|Z¯'·çš¦-{<›¾ÐbüïU#“°¹@ˆ¾›\"ª-'³ØóŸº³®–„|N}Qéë‚R`G¥ö/†ƒ‹DZ b­|\$·ªêRÏ†Tëþ”£s½—¬{uö-Ã¥©¿b\næÀ[\rô");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€· Jv]©ºD§f€7¨FÌá±³ËùŒ,/+:¾‹íÚXIi­\0U¢â@Nµá´\r Ê¢,².½i¶‡ª³m_ûFŒàÖõäÀYiUÔÓJ¯!©gûLj‹ãÑú¬D“iKAà6²õª-U«KfÖ_N€\0ö-3©ìÀã3+¥dãiûD	\"ö¯µM¥ml‹L…XÜãã¯¸Œ>‹&|UÕÑõ`Ïh¾ù2¦ÑÐn6Ý…·ÉI+ØnÃ©-nDÃ×`„µ†®°É”°@ã¬B!;X™smÈ¯·†pC`‘p5Á°¬¡O‰%Z/Õè5”³é#CK`‚XˆªÂcb°Q#«§Qa»–Ž…ƒ¸q…èpÚÝ÷)™®G+~Û–ß÷\"ðlM_^zò©šæ!ÌÉàE«”Ð¥’®šÀ‡ïa úØp86ì„åˆn+oì’Jâ¶ö¥¾,¹¡ó‡¢ºw\n¢]ÍƒpëŠÛRÁõ'§eÖJÕqµ'Ü¨%£'€nlO‹h@>NBÈŠX5,ˆ‡‹¢ÊrGr¹ Z l\r(ªË‘jIù†±lŸ¬%b‡;s+±× ¤Wg7¨)’*e…¸1µ•ÞÑ3“L e@(»p\0 ÐÃŽèds®AñÖD\0Ã\\bD§\nuê/&1¬ÞXR×¥Eæ¥‚5¡Tœ\r§}7õ§”ªîÔþ”AÙ¬áÉkâ\\–øöÍµ´ŸÇqà2Ü€öZ-wo´“tßZùƒ‹¯]ó-yq2j+Õ†¾Õ­Ã«¬€n¾XA«Û\0†\0º¾+S•+ïY6_BúV7z®nZ@Ì†²Ô·Æ´]´-UMJc*¢ü¸´®í¢s\"ß+\0·ï¯x´B3^«öà0\r÷ÜÀÎïÁcðÖ\\jÆÆ*¬P-\\Q8ˆÊŽ·…l•cË%XþÉVB‡}‘,€þ;(‰`*Qú	\$áïÛrßÂ{ÁKøìCúÖ%¬\r¥ˆx	ÞøQû…,¶Ø¾¥×/‰vàä\" pÁã¶ð~ Óáã ÅJ5eãü®Eš-^âX;c²\\©¶×¬m‹´7£?˜6C*åº®†,7®HfÄ/Â9eÌ0[@ñ¤!bê®íÅþUÐ‘=›Äi.Jocñj;ø—B³\0¼ƒï]Õ”ÑúvÙGÃÜ8àO\\\0ÀÇŠüO©›\$Ž•.&	p‘\\‹H1bØpø’:F\"8Å¶…þ‰ŠøVx©ÅýµR®–xä=À3Æf1Š+|Ò»\0ÂBÀ¼kbÌPÇLÑ’£ô\$zÌáàÎc	¢ÇÐi,Pcb,pÃn(¥Æ,¸ì`'/»~êÙkÖµ‚Îp€q-›ÁÈ±¹VÀÜÜ†Ü\rÙž	\0á‘‹dSˆÓÈÚÍ+º\"Šéˆ­1\0(Ä-’Ì1~útcªþfý¸àBÛ‘b}Ø ’Ã0<1\r°¨¨L’€»\$¸ˆ2d\"1ž&ì™Æ€BÃ³N…Ô\ràB\rrƒ«\"?vädäZá±.\".\0?wä¼9€oÃà\rÄ0¥Ñœ!¢ÍdR€‚ë¤¶\0‘ÃÇHëÜra%ÐŠØ+\0yrƒH¾sÏ’4W#œ,\$èô \0„*xBó\nPÌòü|„ 8@/ \0ø2U’°ábíÝè¢ÂÎÎªxÀ!¨d§°óúNÿ3SÔ?£ÑP»…€(òg\n8·‡ppŸˆü€S9õ@‘'  Ç\0úyµÿ\0¦y46¡H<‚öÌ×ô\n`S’ˆ…¼ÈûCY¹’„”³jp:\0N(ÓŒáX4ŒkÌÈÓgßDy‹<–n4™£ØrS<ÒÏýˆó¯?¥\nÀÇBãúf('™Ì~dgÓ™SËÏ?<³ÓVg(1™éãæƒ2ù£ž­—²)ÕôŸf`éZ€¼a“>t{ÀœÉŸô’>ñø\0ŠìPû`O¼\\sŒ<õ?4äwÞ~³ÜÇf@z™ÿÍ~hBW Ìø³á´ŠxhA¡¡ÜO'=úPÖŒ×²Üö±ë=óúc[ysèÌûgâ|¹‹ÏæŽ³%™Mè,Q³ÆÒ8'X žhlUs®…§Ù¢ú é4ËÃqDýÂx*8g§NLšBÈ–¨;§}%eû@YìŸv ho!\$æ›NcCXì³@Ð;YH'Á°@^ à·Rf^x„\0^osÜ_fª—“;¨Ópj]²:’Ô¤ïõ.mLêl\rš®V¨\0ó@Ü€¶Ê\"ÓÕÄ1%Œ!_êô@-]8f¤ç -Õþ±äa]Y¯WšÏˆh`(‘¬äJë@…ÁÖ\rˆ—õ€Y	kB(€xÖÂ:5˜B\\QkO[:Õ0˜Â¼¡­uk›X¥\\×P\0ë[öx¹ÀÅ®`ŠRIGÕÐk5°ðª§YzÍ×PÒ™¬=†l=áõÖe€\0ç•2=k` Å[K¼‡Bê½Ìû8ž¶C±Í}k«c{#ÖØ¢„ølŸdfF.Ìµü-›AºÿÙ6º†K­’•¤ÐÖ×Pàv„'¢lHiAÝÚ8C¶“®	G„`GbyÙ¾·Í- 0•Ä¬;[*_ˆ¡ãmlH{(;Uo¶ÕÑ*Ä]Š,Ä‹åŒÖÆÈþôXË“¡80Cµ°K	­!N¼õÔ(I`¨³	V¾Dv½§íšwá·rpc,ðåŒÃÓ\0ää 9~s»Xnã¦‡¢žŸr[ec·4dçpÅi	\\…Èe2âãl±ÄaZCk»gl÷bB„™¶7x%¿êè½ží€Å»Ùk`ì\nÁ(@Åº«®„5åÝ˜¥Ï­cÌ‡#t›–Ü–éãE½}Å„sñ–Lvö÷E¹ï\nQQÛ”Þæú76}õ‹Or»çj§b¯%@7‹˜àÛµßh³wÍ¹÷n£kÙ`Víq·±Íòï³~›™ß~ø„4{Œßþå÷ë¾óË;òßï8p2mP+ dÖaX8&,=Òn›}ü!/øK&\rŠÿt´H™Ó)/øYÜ”†6@å¯=}ðŠðEU§lKÃü\\kÓb[×â1Gø®­M­)™J¨xXÚEïTä¾	/¸\"-‘ë…<4ßxDˆ¥ÅíÐpÄ(¼3ÞÊŸ·ß´'È+Û\$\r†¶<rí×n`H\\t\"þ¶70=ä·Y×Wéhsð­\rÏw¼~°!ù0@6l‹\\† •§/þBò7’¼‰–ßÏ>Fÿ‘Ü‰\\¶¼RÙ¾-Çn‡€þÜ§\n¸?F~†œaÞ×+xÉÁýëñ¨\rœl,fúCß+­Žîw•i¢GøÛËî.X!¼_à71ymÌ~ñ„œDå¦È7åÊé	÷š¼ÆåîûÅGÍ¾gówƒàb/89¯ËxÑ@!R–9¸eÍJq˜Y¼hß'3¹ÏÍÄ¬*÷ñXw‹Ë®^—ÛË	¾7ŸÎî5óÀûåÖ`ö:î#È+Û­0˜ž·œS¯ˆ@0óo7:&~r(Z·‘G1zÐþˆ€·¢pÝÎñdNŒï“£›`ç¿/Fz@8Ñt0ŠZÌ_ ‰ªÎ0³™{Úè¿Lén•‡×‡oEËÃÑâ=rû¡‚Gj]õ H•¥›²Ò·…»ÞAf+ªÈèVº•º­mžœ7ýåßB‹ÛÓî*q‚þ}cãwØ³=Û„g¥»wE¢-H·°€»·¦½&Rh4—ªMêžZÕ_L½©]WV'ÁÕ¦§Íñ\"uŒ@-ÜaMÃsº@9êL:ÈÕ’]ù#‚ÝaëoybÝ\n\0[Øêrðp*}Qí‚bwßÛÓ¦?†ºâÿ;Vc¾Ê°›»	«.Ûsç´¢XíÖ°ûy·R=§&d”ã·rûO«žçõ2Åj!Ïux¥ÜÎÔ§R{NÖ&øµÑ»®5ö„}£ßvyÛ°Ž1o8Z#žþ{ÛNärû½ÝÑï‡Q:BÕHzW{òïW{:ìržÞ÷ó¶}D\$§j7)àP€÷ëÁÐÝCvV¬X—¾ýdí¨D7óá®€·¼,Ôh»÷á_ø]·^í—qÏƒÜŸxO»]­ïŠö¬?p{Æ\"ˆðOŠ8Qáµ?xw}ùJâ?9kâÞüx½5buÛ&÷øÏo›ÅÆ^ñ†õ¼Ÿ¬>õw“g]çíh¼#ä?+÷‹ mï(³¼¹àÿ/ngŒ	é5â5<ù;‡ñüòÈ…¼Ë³½œxÍ%‡³‘;ì(³ÞVóŸ–;Çço-ìóË½ëòÿ.eänkpËÂÀ_ËFäXõ9ÓWjQ¥ÓàCBØ§åv3R=°ì†¦;aÙ][yËÈ»4Þ/¢|óÃ##v	@_Ç­}UçM>ùßÌþ1§»\rC£MúqƒCÞÄÆädÄ˜U#[ÓÉ¦Ÿm\n\\Ä\r6ô'Ï>‰ôÃiI;€R\0X€ç<rW0[ÀE°dHSèH\n^×\\”¥3ÂTû´ÀF÷xB™îÀ\$	Òi÷´-‚­'ûÛÝÕ÷Xf¼}\0#É¤	1êo·BÆ€*;Û1±(\0ø~@)ü§Òh>³ª{³â~Ûøw·ÉH/vL\n9È?doÒÑð°,‹x)#>˜#b`',úgTð¤È~¯tˆ	€YÐ}Ùï°/]-'Òüž\0¾(ØÈ þñ@Ï¡î/Ÿëä…>¶Š~ðolH‹âžÜöÿ·½À/qû–DƒTúéö~¾¡o|ÓìaÉþ°°#|F8ÍûdœÏ¥ò/±|“ì¿u÷¿€Vîâ©hø\n>Û÷ÿ°{´	Þõ÷ˆýçï_{þGâ IaùE½÷&{VNñžod¡õÃFÆBÀXûï×½ÙñÀ(I¦N@Yû¿Çÿøÿ·ýÇð9»üÉ¿\n-èû{çã@RýoÛ½Ù&‘o^3Y¹÷ï»>ð¯†|”òŸø—îþ-ñóö¶ùä~åý/»ò?*ù`\nÏú?—Sæ!VùŸîÏ©óœüïîÿ>ÎèÕ¸}ïãþOâŸ•ü¿Å>îýRMïûºƒõãø?b@\nOÚ?þà0¯s\0ˆ¢IèÏ€’ú+èà'¾’úX¯¦À,úƒò`'¾¦óê¯Ô?€úÓñ¯å\0‚Kà¯¸¬úCéO…À2út©>¨LO¬¾¢Lïv3ŠàúÒ\0ŠÎ[ï£PÎ›ïlë¬H\nhä²Îlr\$/Àý\0+½Øý\0	»£ž¨	©\r@ ?Kå)<#PøÓîïs\0Žø ” ÂÎ?Kæ@Ì@\0ÃæÏê€±ø\0²%,p)?#£îïÄ\$ø\niL€¦¤°3è[Ìå3˜’“îð?²¬ @Ï´O¼\0ªýö°A|P\0™ôD?²N@\$Á,£Ý/ÞÀÿ€\$B?0ýÃø\0‚\$¯²\0Vú’LhÍ…¼Žˆ	èé€ùŒ£é½Ê>¤#6ý+ù€>öR:p¾>«7#÷…½\\Ð³lÎ“ãAoãüÉ<3lø	pe#7ÚA@)À±ðü¯Ü@ÒÔ#ýAV?hýãøƒ	0*ÐZ\0“°*Ð\\AuƒüÐ_>kÃöÐb?>«ïÀ\"…½cæ©#6>ÒBÃö’Òü \"\0ž>Ü\0psÁÒ?ÛDPvA\\#þà(>Ò÷3EPŒ¿>ûÓ:­Â<\n´OÅ\0ˆüd\"ï@A\0ô°AêŽûð‘Áò”ð”Â5ìÞÁÿ	“ø #¿‡	´ cþ©	“þ€+´@ÃùhØ€ø÷¤€\$\0øŽ‹:M3nø’3cêÞ`ûèØÂ„ÑT+I8¿Bò3@*ÀÆÐø	@'Â”\\pM¤8Olòüøû¯†‚­»ÝM€Ÿcî#üÂíÄð7B÷h`,	àâ6oŒÂ\\\\.S>¤›DÌÙCù˜ÿ0ŠË´ÐÆ£S\$2ÃòB‚ù«ù@&AŠ>ºLðkù¬4ÎAóÜ­3˜÷Ô°Ð@½;öÍ>pùÐüÉ¤‡\r¨\n°3|Î\0\nO‹Aø:6ƒô\0¥d7à«@8ýœ%`#Ã‰ˆ[ÐÀ=ÚDåÀÐ\n°ýÌÜ3u’LãóC™¢9ÏBCÔ:`£Ž‘\$!hÚ\$Ó“;ÐêB”20uÁ[¬8°ñC×	Ä<ôÃäúóç¯ŸÃëdPŠÃß|=q€2pí€V>˜û°áÃ÷	|*1\0Âç\rÐE\0©dAov´PÎt'?d,P­D*ü@	/Ÿ#6øÔCP‹BO\n¬©8Ä',5ÃÑüE€ ½ËLq\r?m¤Eq\nÂzþC@+¤är60åCê?3ß/¡Ì“ˆ\nPÜÙlHð•D—ü¯Í¤5\nóü°°ÂÆãói)D°„1(ú£Dƒï£7ƒæÏu>Üà\nà\$Aæüj4Í\0˜?ê4Áª?”ÑLK	Aæ¢>Ï½?Œü‹û€ÀqDI@³£\$;ð†D®Ž8	 &¾?;°c€—ÄJØ£bÑPû¯ÐÅþ\0	ðBÅ#3í`Â‚øˆ)ªÁ»ÌOÐ3CMZ50âEO6èÔC¯ì\0ÂÀŒ\\\$èÍÔûp[Ð9BãíÁª#cj<‘1Ä1B;còÅDBhÔ?Ëô@`*€ƒ¬.qbÄÐøX	o?;\0KÜp¤3¥8	ÐRCÌú6/®¤—ˆ\$>lÍ¤pIÀª,!€*\0®+ÜÀ>=÷]±wÅã\nT^pgÅºú#ó\0ž?\$J@Ä	\0*CÈ*É7Æh\nñj?“ê:pArø”]Y€’ùÔL‹ËDbÑŒàúïBÑ4d@(Dä”ÌcÀEçÛâ@>\$Òà	4¾Ø‘þÑ†©</¶Ð?\n€/Äº>¬gpŽ>šŒü± ¤I6i8¾;³êÃèÆ‰cÝ1¢AZ6€!Æ}<j±¤D¢¤jÉ(F’?dÀÂÅ'óêït\0†üTeÂØø´1– ú ü£þAv?lnos3˜’„50†#Æ>¼ÈòÂœ_¯«Ûd°©¿³¬UÐºÁZPú©4DŽ|;Ðr£‘ÃCðñ€ˆø[9£ê¤¥ú5IÇ5²I‘É\0ûEOÜB\0{9q C‡|\"pUÇZÎPû` €²øý´GcœQCëGPúJO‹ñÂ6(ÚBïóÇz>Ú7ðÏFøöÈ0IÂ:¼vOŠÇ‘¢BÏuEäµ·,\\0ŽÇ¸r8îÂÈûqgA6>ÀýÑ74D÷0qÇG¥ûêÍ>-SE@# ÑÈÎGÒ÷¤.à*\0i\n\\-`*\0q\n\\eñ½ÁÿØ±\"Â—Œ)qu¤ýÃï³nùô@`>DÔ8	\0/Ä@þ„_±Ú€¤üw#îÇlƒÒG‚>Ô„²¾-+ß6¿Wl%°6½·l0®\$5´sÔÅ&Œ\r *\0e!èrÇÿœ€qIÂ” \"ÀæÑ> È˜3EILÅ\"‹â‰94G\$/ñ¦\0—´‚©\0¯ Ñ-2>/„ƒìå€˜üèÓGg\nà/¿LŒq®BP€\"#7ôzñáHMÔ…O‹ÈO\0Ì &£¶2L‘ƒÁT^P@Zúd¨À=”]Q—=çÌKCïEã\0ŒQO¢Æ\\øôs0¤¤>ƒèq—Czù¬†±—G„>¤†²¿ü	ÌÄ@?Œ0Â?ü\\oÂ¿³–èø4Md1‰9€‰\0¼ÍGò?m\rDÆÑü(Ô´LdòÃ\\KJ8\rE’Ðù-24U 0VAÛ”…R=ÈEäe£þ¤5!Ì2m³qðüÏÓAEÛô²V\$ÆüÏ•ÉâŒØÅI9Óü‘	C&ù\\GÀ)D «ü§½òü4çIç#pú«#ÆøŒ—ññCˆù\\x£ø¿C(\$òƒHÍ:NI(J\0Î‹ß\"w\0¿,)PØÇ¬‹íÏ‹4<þÔ!òŽ=ÞúœGošÄó‹âP‡¿6üìN±QDë\r[;‹A|KÒ'AAäP\0¥C:šÊ„Ì‰Ñ4Åã*To‘†£ÕD˜F^ÈûÉ‘\$)Ï¢»¬\n«É’àÍ)’(Sà‰\0ò’È(ý\$:ä­@à‚²Y8’‹JÐà#ÅÐ‚ë+œ¯\nQ5ß+`a+ ¸iþ`6xð‘¤ª†è: ÚŒà.ÐT‚:‰þa˜\0øŸcv(ƒ^X¨€Â¼H˜O.\"JÊðO\rÎË>ex-¾¨J¸€èKPïû¤rÔ‚-`2²€ÜË_à7€Å-!\"JØô¶òÝJêH.²ÚËo-ø.²Ý\$ª<¸BOÐ€`> ©dáµ\nêH\"òØ†o+›“§s‚Øè 3ƒ‘+¢± ©6¿/¡ƒa.Ð\r²ð†nd»²ïË¨é’?ˆô£z1\0¥àð‚?‰¨ 7€ˆâà<À?âãø\$Ó\n`+Aw*MQ¼Ã<Pýo¿°?,)#P>”àÂ€šøÌ„\0¦?jŒÞÄ“ÄVqÀ?“£ñ³\$¡	9¯õÆ-üÄ2ŒÌIÄÐîD9Ì³Lg1h[ÌÛÏ1ŒÄsC1sÞ©9Lz?à	 LWdÈovLŠþ#ðÐ9`Í¨0æ€Þ‰É¦W·–ˆh>\0>¦¢Å/)Dáü²·Lº¢¡ÀÌÀ\$ÍaÀ†¨9*ƒ<:C+àJËìKPJ¸\"—L\\Ã*bÌò 1ÔÀä6ë4ja+\0î%Qf ;KœE¬¹ÀÔš`è> >7¦tÒHw€¾MPn3I:fàD <LÄÊRÈ'¾.\$ðíBO\\²\nû	Ðø5ã86ÄÌ¹D1‰<\r¼³\$Z…œð’ƒ„ï4Š%rÌƒ¬²×àúÌþ\$€ƒË¶§»éo™^Ú\\°È\0øf[z“e…í6|Ö“gŒ&ñ8+M=6È5ˆ³\0Ò1Idì{™^fqdè¶ˆs7(|©tM.]HSó[€ø¬Ô ÕÍ;7yC„—šÎ¸mÎÌÞI|A‚Ê:`c †Êß8\rÒ…iÔÉƒ¤ßÓ@¬‚P`È~\rlËa=M3ã€áf‰<ëÀRå\0Ï!ûÀ@’ØeØ«ríÍdO‘t ¬‰T°³-æXY9A“˜:38áOÊÞadÐ¥ö’gL³fxË=4K\n&€ôu0KòÍ¨Ç,ô³o7¤€ëÄ†Ó,à½Î3Ë:h|’ÎKbá)AN¬úÄ`ì€Ñ:ØÎŒ€×;´ €Í»*sI&”á«Rsµ>\rX\r!\0\nÀàBsVM63˜KâO×:Ä®ƒƒc5„× úÎæ‰X!AœQ9z%`º{:èHòºDëE€îcv!‚Î,Èôá“:Xƒ)¬(üº%˜Ë2a&Œ«,ðl3Ó8j1è|’Í‡É=CRrÍË<â\$óŽ\"KB3äöÁ'9…:|÷)`Oj+îÀ9	}-õSÒ>2¬ëUU5ÜôBUNàóô÷²ÑNÄäìS¾NÄüì«ÈO²äû3±KNìÐŽˆ†¨ ×@:/ç7£ÄQ†¨ç!Ô@.’(&v9ÔédÓøŒ^þ“‡’Ø¬!ï¦[.pGc K#?¸füÐpÃe“Oæçd®€2\0k6)„,\rÿ65GmOFV™dåiÈx,ÿa=O@s³þc6…`Â¤Ø\rJ\0å;‰³H†(ù*ŽrÅ-Œ¾.íMÛ[ BÎ !(àóM¸LP«bUèÛpJÔ:î1úÞE“»¦º!:¢,ô:‚YB‚ò*KRÞ¤¾rÍ0Ø¬Lî“a6Å;6+2Æí)èUB`JsV0È:Ô0_B14/ÎúíAOáœNeúÈ)A~\rÚÈ öÃÌ –NPów“,È´C„î3œæ®¹ÌÞ°T3öq9}SQ\$ÄãA‚P“DÐ;!:À!îæ¸YŒÐsÄÎû6Ø“ÑÑRÔŒFt›#C¨Ï€øQ\\`rXr…<í'ò×72Ø¼´O-„w9Ó¤ùËb8à5€Å3{¡\0Ä7ø\ra\"ƒ\nh[j·ŸåFÛa)”Ñ+€2Ï<%’´M¢ê|®m¸|\nÀ54pˆþ	&bUQ¨8\0EŽÑ¥4AAN,ËàìËFØ•To(ÉG`šO•GA›³êËGlý`:†=è\0<\0Ðëê”ƒ²ŒTÌNÏ¬=.û´ 6Î–(ûSBÄ°ô\0,Jð?”.º(é†%“…,Ê?B.<2ðhMÎƒI`éÎŒá4ô¶*éË¯G°ëì'ÙI¸ÛíÊÑ9š¾ôžRX—E%,O\r,Êˆs³Ï*•(”}<Ú—@c©öRœj]Dþ`UR÷Î³,˜.²÷·d£¥rø¦’	\\·N•ÒÆl¸ÀØRÏ-ó“´µËšÜëkô·Q•K„½”¹,ƒIå.ÒíÒêšT·@1\0ÉK 4¼Òý/]04¾K›K\nC¨&•F,¶ô³SF0“ÔµS.-´ÉÊéKÅ2ÔÀRÏLe'ÀìÓ7L…0”ÏËoKõ3TËS.å4T‘:XÌ¾4‰Î9/:WRò9.Í62ôËËJ6ÀŽS	.ðc´¡Sv^ 0®»ËèO|L±MD%3î 4z3Id\n»ö•áú#tPq5h{!7Z‘Û»2 „ÆthÊ !îK€Ñ7YÝó1S³<»áh‹µ©½Ç-<ÎÍpÆø€jéÍÖà<4øÓ¹O˜%@‰OKBø°ôS¶!10Ô‡SÚÒëôõ‚YF…?UR4ÏÁ›ÓÜÇ!•õŒ~ÂXl´=¨ÇH|¶5QHýC&¸\"1M'µ8¯5a`Å?¢SPlõ`0—\\ÝmËÈTM,8'1eQaA&	\nÇTRèI¡ÑGÌ¿´ýÍZxôâ6yQÃ´ôñ¼aÀJÀ‹¼üûkU&ÿOXHá‚ÔphQEN†â=Cµ\"ˆLÉ›( ÚçQe@\0;ÐñQ®ÓPÔÅD\"€/—ú\rBà¼–tãµTžì\r<eÐÔeS}Om¾—EP­P\rüÓ«P5B•4U\rR==õBSÏR}Hã“Tè#µE\0Îô¥U‚=QE‚J<ýSð` Û‚¼1x\0ãU:óéOá/‚¼€+µN J`P!t8Õ\rT¥µ7 SõR58\nc>ÇÆºÈâ!ÊõŒ1{Ã€úÓ¼uE€ÚM4{Ö”4TÞíGa;Ž|ðñà5\"SÎÕýNkSä8»DÄÔ?JcU0Õ¯RtB¸{ð5qSåB„Ï,±\0ÆpÐàÔj†!‡\0006K¼1å ÂƒX@¦D¨V­å_ .Ô(¥_`-Öð`ÆD¼àua .‹•X\rFÃÕöðõRõ…ÐFD½•‚S÷RxhÁª<mXjïb­ÖWù_G\nVšÄ©èS¸ï\00074Ù\0ÒLRÁ\$QíX›pˆÄÓðù ×ê\$°Nó¡Ö&83&a+²€|l³Õ‰ÏÉQsÀA£…CXšú]Î_X]‚\0á+8+UzƒsRPÎ¨Q\0Ü\08Õ™PóOÝMU¶ÔH6!ªVX¤5†˜X…a¤ÇV/kÓVF”ý`‰TŸZ\0D5FÑOS½nákÖóTMSÕ¾U\rTMZÒºBðÍìoÓîÜEgÿWGµfµÅ„-YÁ(µ}V7T0BÀ©œ4Úð’Âòƒ[9‘5ÖX´åm¯ÿXhét>×LU`4\nÍŒTÑõ††o9­vÓ×FÊUm®Ö\"ýu†DÕ€	\rw+Ö˜\r`©V(ýVÏãPËÆÓjô]Kâœ4°ìoT.\$mDÄµ¶	S’à‚­e@3ÿ×­;@7mŒ:Èë¥¥“´dðÈ!õâ¥Zð£ôá»Q[œåõÑ5P•µ7;Sôº/BÖ!McÃG¹ÉT»Wõå(V–ÖÔòä¯•<7ó[lÓt…‡^Êô×ø\ri0ÁPÕÐÍa£|VX‰•áÌƒa[x9Hˆõ]¿õ¬^&m¹‚¼ƒÒ¤ù\0ÙXlã¤«Ìú•‚•Þ€»T‹ÐáOXl0£öØ(ô,Ï`€ØoaÈÕu€×ø3½‡U#Îô'0+Ó½8ñ]HT!XX\ryW@è¡\$ÛMQb¹‘-ä)ÓX	oõ†‚\n|Å`-qÎ-bÙ¶U‘VcŠÇÒÖ ‘3N=5vAg\rýŒÀ8<IGPBÔ9O^8.	Xk®ö;+\"Cµü×Z/åÂUUo[i`Ö\$×ïd].âÙ(s¼Ñå“ÔèÕ`-•Öâ½€óqªûe‘-ÂN¿=#[ÖMÙPè…ÅÑO^(B †”6ÍÏ_u–¶2:0mx ­Yg^5”-‘YG8”´AØÝc¯VVßÉdô6Í\">\ra­è™^íÈÐ®0õ\"ä±¿R¤¬–,·3Dä¯Åøß¡2iGÈ5§Í?:\rT!ƒwg„óM[7;[v{ÖªCs\rU9d×`ØÈyh\0h@ØÈ~ŸqT4Ì×_QVÍvÃø•F5ÔPƒs*ÄMc]Ió9Ú1T0m†V)S•ÓXÖ[üâÍ*Œ¨c“dA+Œ1hóbõ:×IhõM@Ýs>P¬ÛÍÞ9ûvuTË>¥Ž‚Ö½`	O5ÙccÛÍöjÏ?QëTmq\$¼¹—=(VÏ6F\rTr¶®~¥šÃ\0Ø|m•CÚ)[Õ‚N¨ÖÆ,dÐ+;µQm™-Å‡ðê\$µo²B-žsšÚÇRˆ­ÕàN›:’È/8‰>øb.°Û40>‡ÆÚñ,‹.tÚºJ¶\rÛ\rk®•6Û	WMmØ3[Ñx5œËêqÕÉÑìLb´6Í;`•Lm‹ÿ4•Iµ6^d!5`7¤:aOÕh4õµÀÐ-3üÒHÈUm˜€¶Ú’³^_ÀÔNTê±²[PHðÙØa=UH\rE µ\rjM¶•”SåPsN6ºMXQ 5Œæ	Ã\r’Û­YKqsþ[¾s-\0Öé®ï]¼aN³d5?ó+—Cf¼ÍÀRe^ø+@Ø[ÓP€5­ËÐGa‹öôÒµoM@w\0QyoKŽõUÛøe}¼Õ[¶_oK’Ž@Ûán»wxVýpEºäùPuo5öR“ñ8c·.¥	Uo5Áw\0ò\n(%ÓNp¤ëVÖ®ˆJàˆ AqtÏ×Zæ#Õˆ³òÜk6””ÜiEÜØV‹R{qü×fØ{3l@äPqH‹r!VS]úÈ6¥Ú'q«Ð@>R=E\0ùêSñ+UjõÊ”øYÓ[ÅºuUÕ¸Õ»rÌÜÇp»6Öõs]h'tË	mJ ¬8ñQUUuD’­m2z›Ð„àˆB¡K”ßÜÝv'P¿l]AAfËchÈ\"RåV«p´ÓXÌü;UË5öÜŽÆåÒcƒÖ°zPTuUQYëõíZ¯5åU¹…ýJen5ÀÜnÞÕovÅs=Hu½ÙÅZõoa‚itÝoUÀÚ»uuH5nÝ=jSÐÀUPZMNÄàˆÿQmobF·A>´]i\\¨G\rTŸvÏÖ‚Ôâ\"•Ä2Ø×v4Î³=]¶2åz\n=:¢\rh*s¯×fÅÓw_ÔäÊUt8Å[Ý„8]Ÿ+=•ÐëGÕ×7z=n…Û—JÝòßuè8|«Å4u]ô	caÈÝzà×€YwíÊt]ÜªÔÕáÅä^€ˆÎrÌÞ)w­]Œ%‚i,˜¦õí¤e}w—0<Õ3ÕäµnÛLr½å.³Ýiy-Þ7(K&‡\r_;f‰[­Ìˆ\\\rXÃ+Hï…çÔøa=Ü³bÞnôc€	,c’!£Õ8\$m“VõvRæJ]g -†W¹OsˆôŽƒR( êÞ5]WHVC\\5@DÝ!s%Î’²^×sdñ%NÐÞ9úÈ7·Öƒ{U™¡+ÜÙI-îÕ¼€ïP\0\"FÐˆS5…ÒFÞÏ[Òâµz¶Åsk(7ÄEz•Ÿ÷ÇÖ1-å@ÝxñÌ¹Ú>M³g‡ïWM£âjÔ»n\nÈ ƒ^«tLµ·ÓUc}AÃVRÜúõ™@;ÕX-<sÔ<×t…¹C8^!P}Ì3q´d·\\Î¶LÄ3uÀÖúÛû\\-\rSlX{sàLÅNlÙåïL™ßŸnà‹¶&ZÅpút6_[\r±¢°¬ƒVÅV÷è„C~ÈIªE…?W%üUöÜ«u…[ÓATAW\rü÷•¦\rdáwøßÅV½ÛkÝù¶þÏh,8£ÅŠÏ”Üí×D×ÈØ»¦Ë­|añ¸6-_1O×Ã`j…ýo?7>\nÀXsôY‘nã^cÑÙ{jÈ7®ÚÄÚÊ:ÈÜ]E\"JVJe~×.ÙQHgžT3r…cÆÙVßBceø“3e^Õ€…9®8¤\nò ™Zð(ää‡ª½	;tæzôãÕ#	üq#à\0V.\nÂS/DkË/Èk4 Ÿ‰Ìø(iJÊ`¼†êuM5´l£GÀ–'¢Ò\0n`¼‹54èÁ\rÃ5 «t“B¡}´ÞÒZH€4iƒ:x4µÓŠæ5¡ö¡æ3àæö&ú`Ä¡£úamnÍ-³ön\r©èWƒ†¤a§ØÐËMXC´õ„KQm4ìÔþÈˆ™5…AXGˆîÕ@'€€ï…ºŸÀ:L¶Ô Y 3»\"˜@W÷ƒ²¨ÆŽ»,Õ°ïMà¼õQØ[apfJÂ;…îø`ÕÁ†ÈØc=RÞ°ËÀ¶~ÙV¸o¸—†éŸ¢žwócXn‘Ñ‡8K8t·j×â'øt5Ôèe¯B°:øãkx®yaîà£¾­ý‡›¤Íð·Fn×	”îî |:a09¶\$ècuöfâ\nï‹‹˜‰ºˆw>\"ÏËaˆÆ!8~Zð\\ƒÀx‡ºM‡¨#ØŒ·‹JÖ\$À×y‰HhMØQ‰H \$ù\0ó‰ƒ]ÀÓó‰`@3bS‡Ö#®×Ñ<KXïLµ…~Xf5S…¸«˜haw†˜åØjÔ6þ–§€^Ú“šŽß¼˜Õ³r€#€ªÎÖj\0%\0º¤%q;)9„ãg‰.Æ,bBD®£DÔ€~íË:rX3¾¯\nvßÅL­ü5Ü0 R•ìê¥Â/Í²NÐn_¹–ƒ‚!…)SPÒØ¡%þ0†=»ö+Š@BÖ9ùof`œö~)=§DŠp°@L>¼wÐˆ‚¬?L§2YIÌ>»ø!Ì?,šƒì@€÷Ð[ØÔG¤>¼˜ðÃÌ>÷,ROsÅ*dRð’cG¼Q¬ÜÅG!ðÐÃ¹œs°èÃq|øåAóìXqæ£ÔøPP%Éñ\\Px×Ã¿TI8ÖÅ¶Î¤s#ç£µ#„ ÅžŽˆ #ÄÏL<p_Å¹Ûà¼ÃûŽ>¯lEÿ;Cøô¾ó;øôÈ#£ÝQ}H_LY˜­Jy\$ÒKL/~=1Jãñ(ýÿäÀ¯ÎÇÁœ0d/\$ÙAe)lüÅËE‚­/ÔmÏ¡É54)QÅ€—ìt±÷GdqQÅÇÔQ1E£Ž„p0ùãÕ	ôd13Áñt¹!CÇæ?™\$ÃñŽ^>QÌÁñ|¹!B?ŽF9!cÿ„ '€WhAñLYÑÃä…pû1—Áñ–K±\\¬”y*ä½&ÆM£éA{Ôð~d=“Óà/ƒÃ“äpdå“tPRjÂæEAäí‘\\(Y:Ã\n,yP@iDy)9B\r´!Ód‡f=ÙLÄ4p d >ž>p™d©•V˜ýÂ•	–KpïÂe&PhBe“&Ap™dÑ'D&Y6es“ŽU:Bd?îO†å5\rŒ'Ke•FD™de•FE¢Cõ\0t(ï—´“|)-Çó#”)ð!Èm\nÜŠðl4?[âÒ›I\rL^r5cU1™ÒÂý\r,Rr?ãdRØãÍÜsÃþ£7&Ž^É!ÅõÔO1ðF°ÿÖ[Ñ-Æý,\0ù)ø\n°Æ¤BÃéäÓ”}¬ß?‹”^a¹æ!ó9pe?•»ùêf1n)ôNÎ†û³¢a¯~í¦ÓWËË}†eSèŒø>Ëø¢¼ÒJOÆæBµ\nÁ¡Pœë%\nÔ*AIleq™EØŒä^Ñ}€QD2p	G•ÄfmJ”Ðü¤íÊ\$Ë}Ò¹+’³-”ó5Eôg\0QTF6ÆYì	#òcé*ìÊƒçK4@[s‡Î8L¼ÖaN)CX•DÆ[ImRò\0006N9fƒz3‘ÎM=å~Ÿå9`%sgÏÝ=>¶‚ÏG9Œæ—ï¶¤T´ê²ƒ4ˆZø„Ïtlà†ç‚³86!‚_KthIÁŽÊÇvìÐ<LìC¢7I/!6t“bQû.²êÔŠMÍfÚózOF\\Î2¶gj\$²ò	‡OþçU@Wº54Ð™Ð\$öv´‹P3-Æ,\\Q;ž½áPÍ•4½·ºÚNGH72ÈTèè—Ïù6iSjgŽ#üÝÌ¹T2ãùŒ@9Ù7@l3ã˜p\n€\r#<O—7ž\0øNu;¬ý”.„¬Þ|õ“agóq††Wç”¤ùrÔO—=Ê©ö\$¼„ùy—Lßb(×Ææ]:…Iè(nqó³ÏËI`‹Õ„ÖàÉ†ÕÒu@%!Àœ5;ÀÃÇ3èK¡Ý`Ü›C,œä¯dVq X\0003Nù€>ÓOo3x»S„ÌÆ#³ÓÐ1†õ(©XIeVòÉÒx%UTº#q¢Np ‚Ò#\$­Œ®L)×f|CÝ3´»Ë¹Mäßb¿MGÍ%d4½—L»]KÁ³±èÛmÍwš6Þfé…˜è£ 8\rvÜËu9ÀrÓÔA¡x‹á\0h^‰´:bdghE4¤R™}Ðx˜ßAHÙ|ºEÝ¤9¡|ZIVs¤N’ºCÏ—.Ö‘Ö¢çnw<õZNÑDC.Ìèªò¶Ñ'IEµF=Q3?rÈ+K[Tô®—FÔÍ4\r)“@Ñpx—OÑx3à4ÍÌ—â<ÓÚ`˜qD…ò…0ÙÇ¥…óÍåè[A€PõÕiœ”‡úcXÛIšÏZé›EØdéœí¶4YQY§ô\\éÉE¥®óQEÕviK\0B\0WÚÝˆOZ?fOkEÇÙ’ïB^dÖ·éöâèLó1M„Æ5¦xÔÿ¨,+WgStØO\"Lý¨6 SH=C¬æ¹æ54ms:¹”eRô4›[‚&£¡¨£”:Ýšé½jûÝ#mºÓûÙ‘tÕ–6©•©lÕŽjbX5Š.KÕYb…Igje©ÈLú	)j–§\n_VÆ¦öªjwLÜZ¢j•©.§N™qT¼èn:ÉCIx@4Ô—žctÚ¬IªÝRîÍ.1~«:°^wö¬c+j¾s½€ŽóêÓ«.­—òƒù«~­vÓºg«–ªoJjÞÔí´»©,î¤Æ/!ždî­qêÿ¬%È\$Zb\rv°†·cOV% Œé×¬EJ!g5Ü(þ°õKÎëB£yôk)«R:Ìê˜ÆŸZÊa9~oÍŠênµ\0¨ëTØÞµ‰+ë\\Ä\0000¹›Ü‹‰ŽÔ=ƒ_¢Þª€¬…hmÔs—ç˜e½ÚÝjKzÐ»oXž`­DÕÚ¯T®¹€•¹UîºKþ-g€<N;žf¶ÚíU\r5~:îiõ®ö£¶ÆQA¶yšòUCÐrš’ëÕQLëZî6<mµ·*ç™qíDë‡|û Zýk¬ôg\"ñË­«kÑZ¦ëý=0IÕçëøêŽÀæM^ŸT½åZåë¬1¥Òº’™Ð^ÑU8l,&Ã‘Ýå}P6:’Ë«:vÃºIÑžfÄ{·?°õí%ÌlCžfÅWc<ß`vÄõKìc°È5{Þ«°ÞÄµ9lh|jïtä>MNRîôæ=Œæ(´èŠøZôD…=SÛø°lœ,95M¹7/qÆÉ˜°ÔUAÛCèS²ÎÊa…^ne~Ì\0º—³²ÕámÍ)³(%€¬…¢ÖP!÷3ìÕJFÊ;&ìÍ²–ÌÅA[¸‘Ksñlë³FÍÒö1Ë§ÜËV2§8ÖÍ”5é´p!!lü	VÏ\0–m\"1øI–\rí±&ÎÛIm3´¥ø5*‡|Ûågš.Zü¬N´tˆ6œ2å€³qMZ¦®c£ô]\rt-‘k ÄåZà/A¶Ô{YèpåíåWÉÐ›sÃ” _tÚ†vºàC´Úi;Eìã«vÑÛIí’.Ñ„Õm¶QŠð¶‚ŒYÜ™3#O…”ËGíšâ°mÀaÀZ1úáFƒUJþ±t!s\\‡¨M‚ÍÏsÜ´\r‹Ú«·£1H¸]=,²ŽÍItŽ×5(ˆ5Ýèx«X5o\\ð€–“Y°ö‹—§ˆÐVmARuøY•Vszˆ\";…Ò¿?;*PZ­,úLßA3X•U^§!OÙRÈ‘eµ&å4Œ].qáe:MÕiŽºf…	5cÃ3Ö–²ë}7t.·­ÓžvŸÏhŒë9Þ‘°%¥Aå€;Œéè:úõ³7z„òôh™díÕW%S]h‹¢Ð©{“É÷öâ×·Dùá;Ù¥·e³ ã]i¼î;µg&µV›¸]«»YOâ¹õ,>ä äÐýõök€Æ2åÊàÛ‚\"±-R@2à%þð€úo\rTRS1è_¼eÄ!C£_¼EÖ–UÉ‹µåuà\\ÙyS¢/Ë¼ê WÒNmJø!·¨€ð@–ÙÐ­P\r`9M¨ss#|X½ŽönÎµ½ÅïA¡ùw^õtýîÇtìÜZ?=´ÓÌ×èý§¬þ_eB•×\rèÏû`Î}óP]ÞPe:›èXÕºØI–UNËë6é‚CSíóòØÎÑRéoúMÛ­%Û–žõ`À¡PÞs>@CÁ!]EUj•ÔüNíûƒl*B…{\nˆSYÅ‰ÔúƒuOP&¤ÄÔ¿ÈDU\0^e\\\rõRLýµÞ¶U’¹rV“iõ5»·fóÀ¾í¶~Î=t¬ëU'ëèýŠ<[k=ÏUChø.Ý|üà2ïURkËÍI•CpG°é‚£!@ –Û<ƒ@õŠ¼Þã·¯µ'Ýfâ:?J0]T5î7YèeGµI÷¸ì­ÁfØœ*U\rS \rz%ðGuYþU'²ãÃŽ!¿ÀÕPÕÔðK®ø6œË/ÁM4<pËÂ‹öj3UÍIî\"mÁ?]í7*Ñ¼×|õsÁKA·ý‚FWÜö5üÕÀ·L6UÝ\\è@ÅÅäó@]t]MÛ6ˆ”Â\ro[Úmãž®#Œ­BÅ\"+ñ?ª±OÉöoÝ€eoXÆMv½Õgƒ\n†­Óö-ºu\0·SÄ\nèT<X_¡O¼Zß ×œ][¹p(¼^ñ…tàUiiyÆ<×`8ñ‚Uúöñ˜àÅÃƒNgFÕÏ2ÜW6{„dÕEÆÔË»Á€êkn|pNMµ<››„¼GÇSqÑ«ßÚXÒrqÌ·6U\nð#:qñ=8A9Ð»ÇÈ_Á Y;ÇÝ@õ½r	nFÝ‚ 7MsÉz€î^C¬ˆ<ãÄÿT>\\-žxð\\p£ØÜrqÙCV·31LMÄtÔ«j]·¯àAXöÅ×Ëßy¡NÔ÷“]Õz¥õ|\n]ß²íAS¾Ñ¼UâÙÉÍÛa'_w\$ñ¼EY+»ÍçF6]h%»‹ë‹¸É>Uôí'ÇŽûõtË]³G*œo—]+'*wñ³¸ð•\\®„™ÊÕTØòÅ´ì¬€1\0Ïas;KrÕË`\"\0ŒZ“Æþä¼µœÈóW.TÜ‚¥q’ò\0×T!Ç¤Òã*ÚÝW€‡]lrr‰Ó‹oÏÌ;*•z]!€uªõ¯O•Ì6Õ®\n`4/se´TDH.èŽêCW?7E¨é%“î’X9\0_gÈ<U_‘xÅKM¼ab¤AqOxˆ•\\Urá´·5œªÐhÚÍyš­Nµ[&”žqV¼Ï|â¶¿¼ìáõ¡ókTðU_•Aw9Üåîi7=º•”Ù­¤©_Vð6³¥7;;8íNEø&³ep!\n´¦ÒŒù¨¡ˆQ -³ê¡`êá4Ñ¾\r¸8Ö `à-€t\0‰ÅàÆc‘•Ø:l”CñgÁÜî@ÒaB—þüóŒÅ_o@¸H(7Ï_@`‡á*ÒÁ>IÕsäÒÇ>œû`×„ãLM4(ÓnÍ'‹…+Ù­ô&Ó£OøVtZÓÙ	\r>´ê #Odá^¡Žm:ahÍ)Nd).)¯TôtÔO=Ï;†p®fWt‰…ö`ò€Ý;l=)‘Ð°žíu[µ¥|­¶tµÒ°Ã\r”¶%ÒÙ\rˆ¶¡Ò•j½2ë,×J½4Œ0â{bI*t§¬r÷ôÈPpkÝ:¸?ÒÛÄ<·åÓ·J|\\tüá“Ó#ô„4[}ô™Ô8‘Øj\\\nëº?»/‹ëŽZ¡õ\nô×G}ômÒSÔ=E˜çÒx@X¶\0ã_J=K¨zöG\n´hÄWR05yŒÎ´çsÑÐ>=0Ø³¥|“Cì¤ãNGñ~ÂŒæRý]Â•Œ/ÙbÁ—	æPÐ‚å5”†ZÏB•\nÐúqÒ¤¤÷¡-YvÁ¡ì¹|É¢ŽœgøîãÉÖ`€*æüvHOŸD“4‘›ãÛ‘ŽGQEãvboÜäWó¯ÿÀÝ×Œ\0±¥¿\0003öQœÀ'_>@÷‹ö~ÀkøO¾¹_#ïõöøï`Ïù¾&<íu¿ìŽ°]È ù¬”¹Æç'†:ÑNEÅäÉH[‘Á¤-‹p+À³þI‘ÏHù“ühÑžÆ~ÿD¾ñ¡F½/g1£öwœ&0ö´Ed ÏlÄ÷hÝœÇ}„{qìä\0Ñ­FZ“|žÍv©ã9ÔÇíœ€ƒêH R4ñÈ–@r	Èl…‘¾#>?\$rñ3À×’61ÌIAê62Â»%ÔlpáÃo\"4\\à>J@Ðü‰ÍÈ¡\"¼ŠqyIëßrD´UšIiwÛòÒI\0\$£CìàÉI%<0‘fIeÐT›2W¿fäZñ~Ç;&BDCéÇÙ†7ÙeÓt5OàÉ£&¨ÑFBÛDñNI®Œãû]~@ìQ,´?)ža1,3™ ®a8J˜üh\"3pRs-¶æÀÔNú8æ“RYh\\ËæÖÚé{¦3F·ˆu5¢D!?{åS÷¹Ç\$ƒç19|ãE¿Ì§-¼Ê¹µÍš­\"åÓ´5¡syÙå51ç‰6'y<Ck‹O¨7w]0¼„Í¨îSœ SÞK“9tôyÃ…	ha¤:–MÈ0R¬çnÉ\$Ö¤K;;˜ €ˆ¸GÊ°l&B\nÁ¥Ð4\$éiE6–à•l²xû\"`·ŒØ\"huUŒõ:5Èí#Þåî÷*Ý(€4ð[7œ•¡,?îå{YÞÙTMs!€Ü…{ÒÅ“P\0,”Üâ)\$~SðßÐî¦äƒcûÀø¬±G4ÌÅYºÊí2s98A¤WÂe~ïü˜õP¦SUÜpÕQ–ÁÐ¿i÷;|­]©Êýë•P9PÁ3S–ªú:eÉý5ïW6‚Œ›#÷}_!tpYX^ûàúÍÇDdý®Hëéâ×4ÔPnŠ\\˜¸ãf¾£>MÔc¿äµ¶°ºÈÙ…¯:—Ñå\$Ó@…ÙÏgO•gùIu£\\wBŒéå•­^±VÃžT%jÅ#¸[¸òÉåÕéÂäó¤Ãßæ#q—voÏe;›8uæbI\0–ãq[¼òìÕ>3ôlÏ0ò Á‰\ræÌCJ&ô1„§=Ìü§ÍÏÇD­2\rˆe™5}óãÑ8.Ý€ÛÑšÊ^xYÑ¸'€.ôž*†CyÆÕ7S˜fœæ \rË)8#Gˆgë%‚V*\0a‰˜Lìf(s˜ \0b¸\$¨Ñz0¸\0€hŸ£À9ú2À`¡øâß¤Ë8\0jÞ’ú2°\0\0ké—¤\0úAéÇ¤`\0oé’Ì€úSê\0\0z}é—§Àz‹ê@þ”úè¿¥¾”zkêBÎ\0\0sê` zWèÀ”\0mêß¤À€n°’z¡èÈ \0nçÏª úmêG£~·úÏé÷­Àzqë\"Îª\0oê7§\0úËé¿®~©zŸég£`€rŸ®Þ¹úFÏ­žúj—±>Â,Éê·°Âz5èç²>úF·¦-\0Ä°~¿úÁèÏ¤\0ú¯ìðÞ±z…ì®Ü¾Ð\0aì‡´þËz“í§Þ½û;í—«>Áú¸‚k>Øú¸Ï¥Êú¹éG±¤\0sëß³>–€d¯¨þ¹úÔ‡¶þúÉí§\0ú_ìo« \0kî­³‰záëw¶žâ{£éo·ž—úqêw¬ÞÂz›è×´~±{@¢B@1û ‡¬~Û±_ïŸ¨ÞÝzÃì¾ÀúËï×£>Þz»êÇ®^õzÇêo©Þ\0síµ¾±z¬™‡®~Ôû­êG­^û«é§½¾‘€gîç´ž½ü9îÏªÞ½\0sðç©¾¦ü!ì·µ {ûì°\$©¬úqî\0¿\0Ä¨\$ž¯üIî\0ûð¦¾Ãû}éh {·êÇ°þ¢zýñ?³_\rzˆ§Á~¢N%ï­Þìz¥ñ'ºß{Œ ÞÆúÇê/À úUêG´·z±òÿ¬þ½üîO±ÞÐ{iðwÍö|›ó/ÉŸ{ïwªž”üÛòÍþÙ\0iï§ÉÀûÇé?Àÿ\n\0ièÏ¯¾è|Wèÿ±ûQðw¤+ûAëï¸ÿ?úÅé×Éò{_óÿ§ß ûÛî°^ôú¹êo¯ž¹üƒìçÎ¿R|#ð©ž¡|¥òç§š€iïoÆ?2|\rë'Çžš{‹õ°ßzÕô®&{±ñ_CúÂ§¤íËì?Ð~Žz™ì7Íœû!î7¥þ•üëXazãîƒ•þùz•óßÅiýƒò×Ãú¸Æ?_ü…ïOÛÞ¼ýEéÒ¾Ò\0gð²@mz‹î×Ìë|?êOÓß {­ò×§¿5ú÷ö·©>×ü_éàÃzaò_ÄVû_öè^—N%ñÿ´žÃý1íOÕþª}\rôw¥~ûý·õ	¿y}ë?¨>ï{ýõ¿¶_\rüôŸØžž{ø‚ÎÃ~!î°\$¿“€gòÇß?ˆüüØÿ™€còÇ®à’þYé Ÿ“ý÷úÆŸ€z¥ñ?zUöoÁ~è|—ðŸÔ_!}ìÿµ@~_é¨>ôþ5òçÆ^×{—ôÇ§ß úáîgÒ_b~wùÇ³þÐû—ñçÚ¾²ú‘ì_ë_yzí²k2zîÐžÿzÓðO¾žì{Sö®IþYëOÉŸ•\0mø‚Ìž£}Ûôš^Ÿ´{êwåÿ&|úð¿û\rû÷ß~øûæ³‡¶?­û§ùWîßûù?¯ß¨{-é‡¸Ð}%éOô>õ~gî?§Ÿ=üyòäŸD|™ö_ÇúkýŸØŸ6¬áèïòß¼}Sþð?\rþ‘ê¬_;üiîÇàßt~©êoÌ_8Qü×©_{YûO¬¿u|Qê÷×zëùïá>Àÿþ Ÿ~ýúOížÄ|ïñÏÍ¿Ãú‡þ/È_0{Còï¬¿±}qêÿÚE{%ë/ÑþÏ}öñþsÿ÷Ø/qŸI¾©\0jüÕõé×üŸŸ¸½ó|0üõþ‹Ùgù/ßb>í{&ùÉïSëG½¯Y²=ç}ªöÝ·+ðçË0¾¢z”þ-ì{û7ÌÏ«_¥@\$÷Yÿ‹×7ÜFž½=~} ÿ•ï‹Õ÷©¯‘`=¶€<ô‰ð»Ö'¼ïH‚½YÖýæ\0’q'àoŠ¿Å€øE8“óWå¯äÞÜ\0002€,ÿÕüCÖWÞ`^¦¾:zöþÿkð÷íKŸ`¾í{j÷5ì³éÏoå¾Ð~fõQìcòÇª¯–Ÿ¿°~@õ•÷ƒñØOžß6½M{Íqñ£óØÏ™_-¿,zšö™ùëùWÅŽ`?3z¦øEèÓòÇåoµž½’ô|Hû´'¶à@|DúañçÇÌ¯M^Þ=pHô•ësÒ(/sžíÀr{\0¡óóú·Ç/½Þë@R\rí“í‡§”_>¿'I]ðÛì×¯Ïáß:¿©FùùñàWÝðà>e|`úéî„g­O‡ß¬¾yz¸þêSóØ\npÞè@r|öùié·òÐ6Þ°¾´}šõŽûÿ·¥0ŸjÀH~s}øÑ˜\r¯œ¤Àì{\0!é«á·Õ¯HŸ†>4{¡\0\rüíG¸ÏRŸ¾ƒ|¨õ‘ñ#ÒÏzž¿A{~öðûÜ\rïå >ŸzTý]éáøO¶`=À¥|Êõ‘÷#ê—þÏež‘Àó|Põ©ó[Øˆ\"/žÁ˜¯­Õð¼èOþžŒ=Aù•ñ '­ÌÞ‘?{|àùî{ã—Ç¤ß->|\\öyéCâ7ìïà^@RzaUé3ÔãCàGÁzÒúIò¬·êÐ0À?Û‚dÛ•8“ÓhÐ9@’>÷%èþ-ñƒöÕïýwÀ›{öFâ4âP¬¿~!öø×üOø_=Œ‚#åéãÖ¨JŒé|rõª¨)H0ÏVŸË¿w‚—¥ëÛÞØ!O¦ß,¿‹ƒ+¥÷Ò×ðïÿ`ÀÝ|Àö>ÛÒ‡ïžÞêÀ}a)÷¬7²ÏÎà»½êzk\0väh!t4A6.KÒ\nÃÜÇô‹_0=V~Øú¾3ùx\nOÁ {@BŠûUêÄ‡£ïH`åAd€pù•÷—¨Pß À”zñ™ööÇ¨°pÞä=Lz5Yê+æ·ÙÀßí>IzÔý¡ð“ìá÷ O>‹ ø®	sä'«¯÷^Ð½ˆ~Nø-î¤w¨Oû^®¾Z€9õïˆ>°>Ÿ9¿ïƒVõ}ó»óª ß–%|bú¥ø;×8AÐFžõ¾½}Mæ{Ü8Ð q@ƒÿÔ¨(ïöß¬ž¿y°ðÅçÉíš QÑµžì#Ž|D÷R”H©!ÃòžÔEÖ<ø“3óöˆ»ã#„xƒ!	º'Z)!«ÒFoö\n”I”¡€KA’|µ	 –¤0ð’‘\\¤JuÔ…Žº,t<D”˜ù1ÚE†ìí/Ø†F°Ý¶ŸR„³	‘*TÃ9Ýo2\\E\nÁš8MŒk‹ŸÚ@‡	Â4D^Ñ€¤Ð˜–Á[«5àDœÑG¢ìA&ÇÖ‚\$–i§íÃì‡î©	ôÁ*çÛ÷’\ndh}±t)„whhlBK„¬}qrp\n`QD‘œI¡	UêJ°©ò;®…PÐúâÔW°¬Y¢äc@|.›8MÐÏ¶\"ÿ%B~Ü’’Q¦a-þC‚%šx6SF0ãˆ‚yad¸‚dRÿ°}ƒô,¤ÏÆ¥ŽJâ¥pã¹ÁZ,ÄCëÂÛG”†ÙÂ˜L.¯á#…\$,:Ø„ré‡Ù>žÿu“	…š5CÜÈ	„!>vÍ~Ê\0Óâ@·˜ø²¤„½É'©¢t†Çºó¢ä\$ÞËH?,0pp£ÀÌC\nG„ËF['è`ÂÁª2×…·Zùá{@aQ½ÃBâÓÀßÈŸ ' á’éfKª\rPøÒ(_¨pá/ ·Ba Ñ`Sá\$ž!”2Ú†j‚æ\n8\0jŽÙ‘ƒTXnDÛêVr²ˆØ¡s¦+…Ò‰Å4hQ(¹\0¤,Jà]í-ÀÄ­¯‰C1EÊM\0ªðÎãÁª!hF\0¢ñþWt ·™r¤ï†Z°¨\$!@R{³F†ÂˆáªPHÆQ”¦†9Q+ˆafb¡’\0(eÇ‚ä/ä\$*ÁÔTù\nEùU`Òæ¥^ŠÉºBð§†BL\0P’Y*8T°«€«C–I<Íš9t”h,¡\"²#hJ…\0‚ôÄ\"ZQN€(C\\{ñ’ô5ðåSC–‡^Æ²óãñPí!OBé®“NŠ:Hx'üQ91Å\$Ç‰!÷À0®»ØãÞCy\nS(U¶¨¤Âî…u\r3/t\\‰8“ Ž#8@¢à\nìÑ€9ÃybHœé›*7]R_3^8ˆ‰à>ò'„g aY~ÂEC`ì\0+»àj‰Ü\rØ8Žâ@£­ÈV`\n\"3D\$pØ€®°	8DD¾*5DGÇÂáŽ…wIQõ°	S“\$ÄFYÄ1ÌˆQ† H‹ÁDx¨ŠÛ²BcÖÉ+®FKÄf[BEL˜\0­“¯OÁÿ@&’…Òƒà?ä*ÈTÂZ¡TD:CŒtùÒ\$ƒgÒâ²J„‡\rš!‹\$xX(âb#!÷†Š“®\"¨}fEž¨\0PDÔ\róçÉ…¢*²TˆÊí	:<Ôrè Rv€C„‰ýØ[%æJˆ€¢-Cmˆ‹Å”#´@ú1PB—ˆðÌQq\"Hl„yb7ÃØˆdÊ\$FÄò¢C³@©žà˜LÑÐÃÄ\$ÞŠ\\EX’Äœ‡Þ@ý\nÙ’Ò‘‡îv;À=úÈ\0ID9\$lb*ÂT‡;\n~\$l%4‰Oà2‰ˆª˜é2	&@(Ù!D¸ˆn†R!k%ä\$©-\"`²„?;%S&ôÀÑ_BRCš~©ET4.R¡¡‡?bG\"&‘ˆ˜¬ÅéDQd„ÉÂ Ò„›R6 ¦ˆÔ|.'\"¤Q9â6(ˆÝB%ã'8™§â¢r\"*ˆ‚6'D(s€\náËDù=÷ lET‘,azŸÃŠÚ&H´¿QP¢ÄU‡žË‚t3ˆŠ±PB¡ÿ…ø‡t’HÄ&QØöÄŠ6Fd”ÌCdVqas2š3|Â!ó1¨H1aÍÂ§‰_¥	”(3þ1’0ÄLŠUò\"z+x†(Lñ™Ñ#ÝQñT#‘\"’²ŸˆëpDEèˆŒp¢1\0IˆÉFhª}uýC­,Nè±F™MDsF\0LGh¥ñPZ\"G›î*œUð‘¡u2š‰’„OZQŸj‰ÇR+\$I¸eQ\$EyH^%AúÈ®‘^¢N¢¶La%W8­¬§âLÅt>¥²+¤JèŸ‘,™³L>‹A‘9¢ˆ¬‘/‘Y²­Š¸Ê~,ä9”=çãP™DÃBOv+¤Lx´Œ¦ƒë¤‚‰™	FÚhšÏbºDÓÑÄü:,¬‘I\"ÅÂA‰»­”üN¸bqÅt‰Ë¬¬F¸¬‘qâ«Â¸Ùj+“4fWñ<âá …„f‹&.¨~ÈžÈöbÅË‰õº,œSSP¨âÂ¤ŠÉ\rÖC°˜\\l°â„E½C7­”üPØ®‘CÐ»¡€H#’(£!T›qEÏÐÅ‹Ç¦!¤Rlñ\"m3‰Ìg.)Aô8ÀÑ:áÍB­‹ÁZ0;j3Še%%¦ÇÀÙ†\$oŠãèük4‘PÑ²ÆAM\0ôT˜‹ñb1Â÷cÓJ12(«Ìz¢äÅÎ?ÍB)ÔHÈÅñ\":Ea‰sA‘4G×vÑ‚ÐèEwE¹\n´XD:‘_\0#ÆHA\$~†\$‚Óõq“£%æ\$ñ#è±,Ñ˜ôÅŒc®2ã\"h²Q†E–‰h{þ/k˜´(Gâ]ÅÿdM®/ÐÄ1›ÒYÅ§ŒæÌ2-Tdèµ¤ƒ^Å°C€q¼[HËñ2\$Å·C|%ùï¸L,„PÄÔ‹q^»!À±‡SE¿Œ44ñsc,²&‹˜Z'dU”ÑŽc73HÙ	J4¼]Hw‘ãLÆ\rˆ‡‚+iFDpþ#L²\$Œ.5’“þ±®@«EôBøÉ~|kÄ0!<\"ŠÅûLmhûáy\$¬AþÆÏ#Ž‚60	 	ib ¤ŠAHúl;(ÚÀ\0/¡ŽAH´H˜ÛñdçÆˆz}\rÑ¢„I0ºb– rEÁv7jD¨Ý.´cvqŒ¸Pt,Àùà£&¢ìJH€%#t)P	h8€&ƒ>¸Ê†\\+d)JÏ¶P\0 kÜÂ„7ÐiÐb§B”\$åZde3ë‘À£‚B”A¹û¸W¡ôøBÀ?C	z7œn¸W©ÈÍ¢#Õ®6é˜åhå#”ŸêŽf˜á/Ê+ÄÃ¯@'ÜcaÖ!ü,?‘>#¡!]iö\$º.\0	ÄxãžCÂ…c²18ê0ŒFýuÉlùñ 	ÉAé2WKì—à>¹ùÔñ»ã¯»:F¤)	øçf©~P¡%ö…Å­©ÿh	pÃl¡’4FˆèÜ˜ûÇ@‰Sª\$’(åñÞCé#kŽø|T0hðñ·£Â1«EÈŽüÿ°(ïº£ÉGŒ(žÜcäp¼b˜¿4f0ôy˜‹hà!ËŠ‘\"S²ó‘èG¨\0²ì†=.hóÑèÙ¾ˆ¼F¢ |.¦=¡õÙ…G²Hopt=rç¼ÝÓ2…å‚=¤z¸_QéãÐ:Ñ2²>ÈóæoLåÇ·Fh€5/¹&çæ#ì\"	HAÍ}ØûD“\"Â÷Dj-1øÈ^QöR2 NŒ6Í~?dw†1\"PtÃ\0ŽÒ„¶<œˆ©ÑßãüG–BZF?Ê&¹\0ÿ¤!0Ž÷q\\€pÿ!Ð£{â¾?øÒ4è¼\"Ã)^(W¨H¡ôH\nŠõ'²\08ÞÊÎ\0_BZŽp>ÀÓé°Ø\$n…ƒ^A\"3Ö;¨¢˜êGòA ÅÚ<kðÊQ.È1F« ö’š2aœ\"A&˜ùòtm#d\$Fê\0šLúz;8òÉ€\$#€¥!1B3Øâ aQ£=-í;³„gˆ¯¡¢ÇJ­!‘Óâ°ÕÕÆî®CzéÐÐ\$GßË	†C©*t`È‘d5£b M	£! ü’Ñ_\0S\r^ä‡èüôÄµC]\\¾ÅjBÜ6Ëò\$cwG–w‹’9j&¯ aO©\$‘4…Ž@REè^áôD´ÅL4,7èÜˆõãŸ{=Ê”?K%±IUãÁ£*G\rPÎâ0Ø{².Y`3	DìBDŠ'hƒNãá¤C—\$„GñøÆh\$cÈZ‡»!ê9Š0VR3Qâ¡ÿ‘¢~6CÔ€©2£uÇ‡0ƒ¦4,MXrG¹ÐÈã\0œ”:ü9ÜÑP\$ÕJH‘/üy§¾dwÇÛ@=‘1N(æ@a@()\n3#ñ[¯yôä\"ÜLsŠGà~˜^älÉ HDÔˆ.<y`\n\0À\"\"ˆeÐ˜†H¤}(‹`Õ	,F¡Ûj¨yh	Ð¡\"	DåvI<|v([\$\nÃË#~\$÷,;<d˜Ø­E¨‡\\h0zY'ˆ!à²¤@J”u!(_0ëƒôÆÝ@°„2\n>(EèÑÏ¨GVD“\"•Äi)6\$y fd~€fC4d:¤ †3›²¼•âJRWHÎF¸A‰À ÀC TŠ–Z@Í%¨Ìq2.(£rF…’‚9”„¢	PQ#G’ºFRbAŒ¥‘?‡Ù¡\"ù!`\nÈŸäÅGiG8‰ü©ï4ÚQÎHCAbLš(òh8¤ÍG–“8M,•4¿HñdÏ%NÜ~YÜœŽ”ÈÑ.»;@q&°ûs³¹5k3B¤@å%uœƒù6(Ñ\$× ØU%š7²'ˆHgìÏ¤¤	I¬‚6!9ñèL1	ÒŸÈ‘\$ñ&µ\$›95L‰#nÃ²#6{–¹þ£Eääí -'v@Qù²8ä…¢\0Ç:?GN7T@è^òhäHÉ£,•\n;Hcv-@)ŠbfK“5é>@³¤úIö\0É%®Kh¶°0©ú¥ŽjFs)âÓ|P0©U#‹°yxZ§-‚á£CC€þ¼åÜg¼‰/.O:ItFçäÓšCM€]¦ŸP`XÀ3àbŒÏ\0.&llÐÀ3Ò‹ÀÇ46<h¹Ô4¡F(Ì-K+øtˆ¼\$qªàAÌ0\0001€d\0^	í3ÚÄýÃ–7´\0\\ðOÎà+\0000z&o}ÂÈm‚u°2†÷JX6ÂRÛÔYK¦õ¥,†/\nø\0ÖSciÒ˜¾\0006”ÒáÒS3óMò™e0€8”ç)|-¬¦2å5ÊyH’SâÙ©KR•CÑÐ”É)âTR²¡¥5J‚_)Tœ¨Bä)À’€4•%)‚R¬¦‰Q’œ%J=Ð•/)æR¨ySò¢_òÊ£•üúU4©IP¦å:@V~ñ*¦Ut¨±cÒ¡å>Ê‰~³*¥íÛÉW¢¥TÁ@•*ÎTl©8(¬†•J´•~\n©U’¢Á@•-+.U¬¬ØAÒ¯@’Ên•¡+\nª)Zò°€’Êv•·)‚\n§¹[òž`o€0•RùUü¬YX2˜#ÊÄ”½+DûäyYR°%N>G•Ÿ+ÒS£äySR¾%fJñ•«+žS”®9KO‘åoJü•àùW°iXï_¥UË\n•',2WL®ùap%T½d•u,1|±i]Ò±¥IË•ç+ªTä±i^òÈ%:K•÷,’Wì±iZÒÃ¥0K•µ,²SÌ±i`²Ê%xK–,ÒV<	\\ÒÆ\0/Á –#,rYl±IgH%Ë–;2X«ÞYi\$ÖeT½–/,ÂRÔ´écrºå<ËN–‹-Z¬©YU0	åŸËT”µ\0žZœ©ÈòÕå¯/€O,ŽZ4¦òÉå´Êy€O,®YÄ©8òËå¸Ëj•»-nUD³Ç©RÃeºËn{y-v[´)jÙ \0Kx~w.[dµ‰kïo%¸Km—ôn\\4³9qÒáÓKx€­.Z\\§H ’ØeÍ=¯–É.ö¹iq2Ù@/Á—.*\\#Ö©rÒä¥Ô\0_,É->[ì¥©uòç%~Ë¯—?)Ò]|¶‰u²ëåÑÊœ—_.ž]\$ºùn’äå×Kw–y.¾Y¼¼BÌ’ß%åK•S/.]¤¯	yríåÚËH—-*^¼´É{2ðåÝ¾—žø*^ü¹yzðN¥T…|—a/_4½Xòù¥êJð—Í.ê]\$¾iw²%óKÀ•9/š^áÐ³˜²¯%Få”¹/ö_Ü¦)€>%iÌ8)+þ`1Â‰`2°%ÿJ¥˜qŠ[ÌÀÉró’Ì•_0<ÞÔ¸)]Rÿ¥[Ìw/Z`”Áits%àL—ó0r]d¿©‚Òòf\nÌ—Å0†atµÙÏV¥4Ì3–É0Î_„Ã9„rþÞ˜L5˜y0žaäÂ™†rÍÀ€izÒû2lÂ©…Ó&#={zø®_óÚ‡ÓwÌS˜œJb´À§¨Sf?3˜¹0eðÜÅùƒï[¦1\0s{ÿ1•þÌÆ‚^“=Ìl˜e/íõ|ÆÉ†ó&Ìp˜w0òÄÆÉˆ&!Lp˜Y1*`S×éKæAÌs˜ôŠdÇy€ïŸ¦AÌ{™1öd<ÇùÏY&4>Y™+-NdœÈi€ïŠ¦JÌŠ˜örd¬Èé“ó\$&MÌ’—öôrcCÖ¹•3&&SÌš˜õîeLÉé‚XæTÌ¢™g2’e|Êi€R¦4=™{2²eÜÊé‚µf^Ì²˜2ôÖeìËi˜ó.&aÌº˜Y’cCØÉš30&gÌÂ˜2ùfŒÌiƒïÒfhÌÊ™·32f¼Ìã…_&2Ê™Êö¾g<Í`7`I&:°ø‚Ë3ža)ÌP\$“7ž“L˜a3ú´ÎY‚“ 1?x˜ß3¹ëLÏ©OI¥ÃÌš	3jh\$Ï =¼Là™×.Vh3Ö™gs=æ~Ëäš#0Òh¼Ð7ð“9^åÍšpRb<ÑÉ¡ÏIž«Lå˜¥4Fb¬Ò‰š“8æ-Í(™Û4‚cÒ‰¡b&“Lâ™û1¶h‹è9œ³fœÍ}‰4îhCó¹£ó8ß Í;šFüîi±½§Ü“Dæ\rÌò|i3–d\$Ñ\0óT&—Ìã{·5BjÏ×§C{.g\0Íê	1¾WÜ’Ý&®‚šÀöÆkÕ°YY@æA:~E3òjSÜÉªRfuÌ”š#2Zk¼Ò¹Ÿ¯h&rÌœšï5e×y¡M&¾ÍtzÃ50éÌÏ)•SD^•Låz›6:j¬Ï×ºÓc¦¬ÍJzÅ6:j;Øiœ¯ŽfÍÍ™‰4EéÙ¹²³:ÞŸLå™¡4Ff”Ú‰¯SRžÃÍ¦›#6²jÍÉµQßÌe”«6ÚgDÐh\nÓ@à+M¯wZhDi´a§úM¸šGZl4©±NA:™þpRkÛiƒ³E\ríA:›|q÷\$Ý)¸pN¦zA:›4Bn¤Ûù…óSX|=Z›Ÿ76hÄÞÓ§fÛK¡›u4vo|Ý¹uS{æãÍ%	 Æ8˜YGN­#ídp|Ö4ÌcÅèÑqÆ¥AM¬\\_xØQg§ ²Œ½utØÉÀ‘ ¯… >DdŒè¨`\"ùF™œ0%¦pÑñX×H}¢IÆ™f9-‘2CXû‘¦P\0KJy:?L“hÍIVÑ5Æz(¼XxÓ1o#I2ñ‡Ž|´:.8Õ,°cTÅx…\nŽMôdè n­YcÌœ•¾rTf–DÒY˜ôÎunÈº1	œ²A((¢EÛ\$¡t÷DcXVÉ(!^Â¥‡[\nÞ%%é¿Ð§b,È/ˆ&)ê)T%±ØûÎtŠª†÷|=Js##Å	G.\\Ž`xŒ¨'ÆÁŠ	&2ÜEXËÌ˜gÅíAñ8QERS0 ÏÙÄ­>Ý8€”Ìá¹Äs¥u\$ë@'8ˆ\n²T91gÎ¤#i8­ÄâÙÅñBgUE˜#´Gr%¼ç9Õ‘cõN³?-8Ö(L;xšÑç\\Æ“qópÿ³PŽDäCÿ¦r\$P“ô³¬§_Åä\$¥š(LP6PNg'NÑœ¡;Fts\$);¨°'XE	’Ìƒâpì.H´‰€ç-Dne	.âØ§ŽÖ!ÅtŽ‘9¾/réÎ±]#ÎyŠÈŽ\\’\\çÙÞ(­fÎ‡ç;îpDà©ßsƒ\"é2šŒ¼ëý\\á(®“¤'Nû&îî+\$áùÓÓ¦§P»‹#:^xœê\0s¨xÈ›÷:–+¤â£ÿÑ]'VÅÙ?:ÒI´ZYÆ‘™\\Ã²=ø…‚uäï¸·Œ®aãNÂcÛ9\n.3!™Ñ=\"ã\0Y‹Ë\"šwÜ^†Xs“gžOA¯=/jÆQ3·\"ñ2Ÿ’ÌË:5Û5ô)³‘aŸËfŒ{Ñ2CV‘!Š³«5	Ä3T*0Õ­Èšœ~Š\n5¤7hq1;‰hÃ\$ÞHû.äe0ó	CÔwjŠNJÜ=©+pÊ‘Í¥C¢Š–ò(·Œt¡6Ä†‡ë ZoµyLågÅ·O¢|X¡À5ƒ\$åÉgànõ7´ùdÎ*2º'ðgB™½o¦˜iúÕ#’‚Vê)ù>Y>ÈP'Óïªò#^ý>ø´éÂ’Ó‹˜70m`[P9iiÎë¦~Ÿr0~}ë””¶Á	\\Ã}VX¸íšó5@>@¢’Ó©‰?5K€4)ù©¡gé§âkj¥R~j”ÀNóö[ÚÏÍW”›ø\$ŒýrÞSóZ]KŸ®v§{[P‡Ê'§ÙOêiîx‘§³OæÍmJf%š\0ÄáèÌS€À³³þ„¶'†pà ,•K<Õ˜RP´»•À`\\Ô³@]góyR\\8hØ `RÞ'ã7†À™H„çBc(7çf¼­1’¸c\0wMo3ÔsG@‘ä`7zg§žFP\"(Š@–mðÃÆÎH§:N3>eK:t%,†(ª´ L—MEâŠAVŸO¿M:qè¸5E‰ƒ“¨%-ŒŸ)@ŠjÚ†SL—…ME>dA“es¬•ø«Ÿ™Azˆ7Dë\nÙ‡µÐ.JÝ\rƒ5ÕlÄK•³\0n Út@\n2¹ð:Ã?Vš§º ®\"ƒ†5lÉ­³&×S†šê€Q[	}\0Ø³‚Ké>tG0T¾‰ãÃ»Ø:Ž¬\nÈj!YÞ+!Â¶š„° íŠÁ(-mØÁj!\nŽjÍ´(E Ð©â…!5@JÓé•}6 –Ò…áêT+A&¡bðZ‚èVE6iÎž«KŠ8BècaY(_®'QôÒWÕ	%`”\$£}n\\3Ì£º-4N«Ô¡¦ÆÝÂŒô5ÁEPÙáŽ†ˆsJ\"Ü½P*	hÒ‡+?åÂSë”ÐÑUbwfèHÑt'/\\xÐî¡\nrô\riF“T=¨y5¶P­A<J”<²Pæbüd*ÿP¢¯óPöFæ¨¥\re8'PÓÕ+µf¼'È¸¤Ó´D@0Ñ‘DmNê\")©À7Ñ Ê,E7X6\$dUÙî\r¢V&0¹Ú%fæ@¤4×UäP²g)Úa¦ži†Ó…¦ÓNdí7a<ˆ(¦·æ‰tJ\",áè¥¯² ¹>dë¸E€:Âæ(¦ÑRPQ S-Å84†³ˆ–OU?Í´û3°x`Gœ=gK¤øPb±ê	À'ðƒ¾xBk8.b4¨FV%U¨ÅXkJœxQŽ›ÝÌðÅá\nÇƒ/TãFŒ¥¥šÔaÏ\0m_eF\"‹¢å°!êš‡\rYm1F2RÓp I“þhÄµG¢òÔ(Øz¶Z3 “hÏ¸ém>‹Úhss4dsÑ„Qf¢Âq©\0Nä°Q2ÎÕXñ©5Ý âDÕŽ¡¤5žÑˆàTÔpû‰†k-BŠŽ\"ÛÚÊœ‚_Ñ¹^n}ùÞ¦¯thÝ£qqG8õ S-s§øQÄ¢Á>|+:-¬Ë“âˆ–hU-€x4±IÎ“åÑém×Gâù–€´hð·ôGÔ‰Ô0ÓåÑôªUËÕÚ>ôÉèB“£ðîôú”¸4.ZM„9[¸Ð…ôôôI`P:£ñC¼•ÃbÌýœÂÝs\nuÌ(V€€º–\n¢Øsú%T‰Ö£P¡'Bâ|Ë3êDæRQ\n ]?”¤þŠ6€aT_OÌ¤xâ¸C90ÍÜÁªQÖ5ÝI\n,¤TàT’«qC @*5J…ŽåÒMŸ©IT°èI¨‚£y’œê’ð>ªJ«„i&\n[I1¬Š‘šM\rcÀˆ˜å¤˜jþ“y±cŒîy™‡:ã±Nãž—BìM*t6ieÏ«\nÓ±ÀàÒyz\nj¦R\"tÐà‰ÂJ/ý; ”h‰>«|Òÿ½f¶\0¼ÃZ‘órÀÔC€ez&k`ŠÒp‡ šÅ\0s.„\$t†\$éSÆ#DM4xCšU‹ð)WÒ„\0ËJ…§¥*jV€¥\0*§\0\0ÏJ´ ólb€–ù\0¬`Z•¹×£vT°Mø=¡I'€ŠÞD¦¨_„™ZWà·ç³¸PÑô+½ê\n¥2NŒGS\"›€šf\$üj˜ª6ˆVž6µÉ5pTŠ>“Ò€3ZóXkÈ");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$Qd=substr($u,-1);return
str_replace($Qd.$Qd,$Qd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Hf,$Jc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Hf)){foreach($X
as$Fd=>$W){unset($Hf[$y][$Fd]);if(is_array($W)){$Hf[$y][stripslashes($Fd)]=$W;$Hf[]=&$Hf[$y][stripslashes($Fd)];}else$Hf[$y][stripslashes($Fd)]=($Jc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Na=false){static$uh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Na?array_flip($uh):$uh));}function
charset($h){return(version_compare($h->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$db,$Md="",$Oe="",$ib="",$Nd=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($db?" checked":"").($Nd?" aria-labelledby='$Nd'":"").($Oe?' onclick="'.h($Oe).'"':'').">";return($Md!=""||$ib?"<label".($ib?" class='$ib'":"").">$K".h($Md)."</label>":$K);}function
optionlist($Ue,$sg=null,$Ph=false){$K="";foreach($Ue
as$Fd=>$W){$Ve=array($Fd=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Fd).'">';$Ve=$W;}foreach($Ve
as$y=>$X)$K.='<option'.($Ph||is_string($y)?' value="'.h($y).'"':'').(($Ph||is_string($y)?(string)$y:$X)===$sg?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Ue,$Y="",$Ne=true,$Nd=""){if($Ne)return"<select name='".h($D)."'".(is_string($Ne)?' onchange="'.h($Ne).'"':"").($Nd?" aria-labelledby='$Nd'":"").">".optionlist($Ue,$Y)."</select>";$K="";foreach($Ue
as$y=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($Ja,$Ue,$Y="",$uf=""){return($Ue?"<select$Ja><option value=''>$uf".optionlist($Ue,$Y,true)."</select>":"<input$Ja size='10' value='".h($Y)."' placeholder='$uf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$Vd,$ai=false,$Oe=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Oe)."return !toggle('fieldset-$t');\">$Vd</a></legend><div id='fieldset-$t'".($ai?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($K=' class="odd"'){static$s=0;if(!$K)$s=-1;return($s++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Kc=true;if($Kc)echo"{";if($y!=""){echo($Kc?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Kc=false;}else{echo"\n}\n";$Kc=true;}}function
ini_bool($sd){$X=ini_get($sd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($Wh,$O,$V,$H){$_SESSION["pwds"][$Wh][$O][$V]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$h;return$h->quote($Q);}function
get_vals($I,$e=0){global$h;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$i=null,$jh=0){global$h;if(!is_object($i))$i=$h;$K=array();$i->timeout=$jh;$J=$i->query($I);$i->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$i=null,$n="<p class='error'>"){global$h;$ub=(is_object($i)?$i:$h);$K=array();$J=$ub->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$K;}function
unique_array($L,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$K=array();foreach($v["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$C))return$C[1].idf_escape(idf_unescape($C[2])).$C[3];return
idf_escape($y);}function
where($Z,$p=array()){global$h,$x;$K=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=escape_key($y);$K[]=$e.(($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$x=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$y],q($X)));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$K[]="$e = ".q($X)." COLLATE ".charset($h)."_bin";}foreach((array)$Z["null"]as$y)$K[]=escape_key($y)." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$e,$Y,$Qe="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Qe:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$N=array()){$K="";foreach($f
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$Ga=convert_field($p[$y]);if($Ga)$K.=", $Ga AS ".idf_escape($y);}return$K;}function
cookie($D,$Y,$Xd=2592000){global$ba;$G=array($D,(preg_match("~\n~",$Y)?"":$Y),($Xd?time()+$Xd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;return
call_user_func_array('setcookie',$G);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Wh,$O,$V,$m=null){global$Xb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xb))."|username|".($m!==null?"db|":"").session_name()),$C);return"$C[1]?".(sid()?SID."&":"").($Wh!="server"||$O!=""?urlencode($Wh)."=".urlencode($O)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($C[2]?"&$C[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($B,$le=null){if($le!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($B!==null?$B:$_SERVER["REQUEST_URI"]))][]=$le;}if($B!==null){if($B=="")$B=".";header("Location: $B");exit;}}function
query_redirect($I,$B,$le,$Rf=true,$wc=true,$Dc=false,$ih=""){global$h,$n,$b;if($wc){$Hg=microtime(true);$Dc=!$h->query($I);$ih=format_time($Hg);}$Fg="";if($I)$Fg=$b->messageQuery($I,$ih);if($Dc){$n=error().$Fg;return
false;}if($Rf)redirect($B,$le.$Fg);return
true;}function
queries($I){global$h;static$Lf=array();static$Hg;if(!$Hg)$Hg=microtime(true);if($I===null)return
array(implode("\n",$Lf),format_time($Hg));$Lf[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$h->query($I);}function
apply_queries($I,$T,$sc='table'){foreach($T
as$R){if(!queries("$I ".$sc($R)))return
false;}return
true;}function
queries_redirect($B,$le,$Rf){list($Lf,$ih)=queries(null);return
query_redirect($Lf,$B,$le,$Rf,false,!$Rf,$ih);}function
format_time($Hg){return
lang(1,max(0,microtime(true)-$Hg));}function
remove_from_uri($if=""){return
substr(preg_replace("~(?<=[?&])($if".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Db){return" ".($F==$Db?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($y,$Kb=false){$Hc=$_FILES[$y];if(!$Hc)return
null;foreach($Hc
as$y=>$X)$Hc[$y]=(array)$X;$K='';foreach($Hc["error"]as$y=>$n){if($n)return$n;$D=$Hc["name"][$y];$qh=$Hc["tmp_name"][$y];$wb=file_get_contents($Kb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$qh":$qh);if($Kb){$Hg=substr($wb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Hg,$Xf))$wb=iconv("utf-16","utf-8",$wb);elseif($Hg=="\xEF\xBB\xBF")$wb=substr($wb,3);$K.=$wb."\n\n";}else$K.=$wb;}return$K;}function
upload_error($n){$ie=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($ie?" ".lang(3,$ie):""):lang(4));}function
repeat_pattern($sf,$z){return
str_repeat("$sf{0,65535}",$z/65535)."$sf{0,".($z%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$z=80,$Og=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$z).")($)?)u",$Q,$C))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$z).")($)?)",$Q,$C);return
h($C[1]).$Og.(isset($C[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Hf,$ld=array()){while(list($y,$X)=each($Hf)){if(!in_array($y,$ld)){if(is_array($X)){foreach($X
as$Fd=>$W)$Hf[$y."[$Fd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Ec=false){$K=table_status($R,$Ec);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$K[$X][]=$q;}return$K;}function
enum_input($U,$Ja,$o,$Y,$mc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$de);$K=($mc!==null?"<label><input type='$U'$Ja value='$mc'".((is_array($Y)?in_array($mc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($de[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$K.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$K;}function
input($o,$Y,$r){global$h,$Ch,$b,$x;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$ag=($x=="mssql"&&$o["auto_increment"]);if($ag&&!$_POST["save"])$r=null;$Uc=(isset($_GET["select"])||$ag?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$D]'";if($o["type"]=="enum")echo
nbsp($Uc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$Kc=0;foreach($Uc
as$y=>$X){if($y===""||!$X)break;$Kc++;}$Ne=($Kc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Kc > f.selectedIndex) f.selectedIndex = $Kc;\" onkeyup='keyupChange.call(this);'":"");$Ja.=$Ne;$cd=(in_array($r,$Uc)||isset($Uc[$r]));echo(count($Uc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Uc,$r===null||$cd?$r:"")."</select>":nbsp(reset($Uc))).'<td>';$ud=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($ud!="")echo$ud;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$de);foreach($de[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$s]' value='".(1<<$s)."'".($db?' checked':'')."$Ne>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Ne>";elseif(($gh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($gh&&$x!="sqlite")$Ja.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ke=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$C)?((preg_match("~binary~",$o["type"])?2:1)*$C[1]+($C[3]?1:0)+($C[2]&&!$o["unsigned"]?1:0)):($Ch[$o["type"]]?$Ch[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$ke+=7;echo"<input".((!$cd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($ke?" data-maxlength='$ke'":"").(preg_match('~char|binary~',$o["type"])&&$ke>20?" size='40'":"")."$Ja>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Hc=get_file("fields-$u");if(!is_string($Hc))return
false;return
q($Hc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Wb;$K=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$D=bracket_escape($y,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Wb->primary),);}return$K;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Qc){echo"<ul>\n";$Qc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($Qc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($jd,$ue=false){global$b;$K=$b->dumpHeaders($jd,$ue);$gf=$_POST["output"];if($gf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($jd).".$K".($gf!="file"&&!preg_match('~[^0-9a-z]~',$gf)?".$gf":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$Ic=@tempnam("","");if(!$Ic)return
false;$K=dirname($Ic);unlink($Ic);}}return$K;}function
password_file($j){$Ic=get_temp_dir()."/adminer.key";$K=@file_get_contents($Ic);if($K||!$j)return$K;$Sc=@fopen($Ic,"w");if($Sc){chmod($Ic,0660);$K=rand_string();fwrite($Sc,$K);fclose($Sc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$A,$o,$hh){global$b,$ba;if(is_array($X)){$K="";foreach($X
as$Fd=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Fd):"")."<td>".select_value($W,$A,$o,$hh);return"<table cellspacing='0'>$K</table>";}if(!$A)$A=$b->selectLink($X,$o);if($A===null){if(is_mail($X))$A="mailto:$X";if($Jf=is_url($X))$A=(($Jf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$o);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($hh!=""&&is_shortable($o))$K=shorten_utf8($K,max(0,+$hh));else$K=h($K);}return$b->selectVal($K,$A,$o,$X);}function
is_mail($jc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$sf="$Ha+(\\.$Ha+)*@($Vb?\\.)+$Vb";return
is_string($jc)&&preg_match("(^$sf(,\\s*$sf)*\$)i",$jc);}function
is_url($Q){$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Vb?\\.)+$Vb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$C)?strtolower($C[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($R,$Z,$_d,$Xc){global$x;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($_d&&($x=="sql"||count($Xc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Xc).")$I":"SELECT COUNT(*)".($_d?" FROM (SELECT 1$I$Yc) x":$I));}function
slow_query($I){global$b,$rh;$m=$b->database();$jh=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Kd=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$rh,'&kill=',$Kd,'\');
}, ',1000*$jh,');
</script>
';}else$i=null;ob_flush();flush();$K=@get_key_vals($I,$i,$jh);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$Of=rand(1,1e6);return($Of^$_SESSION["token"]).":$Of";}function
verify_token(){list($rh,$Of)=explode(":",$_POST["token"]);return($Of^$_SESSION["token"])==$rh;}function
lzw_decompress($Ra){$Rb=256;$Sa=8;$kb=array();$cg=0;$dg=0;for($s=0;$s<strlen($Ra);$s++){$cg=($cg<<8)+ord($Ra[$s]);$dg+=8;if($dg>=$Sa){$dg-=$Sa;$kb[]=$cg>>$dg;$cg&=(1<<$dg)-1;$Rb++;if($Rb>>$Sa)$Sa++;}}$Qb=range("\0","\xFF");$K="";foreach($kb
as$s=>$jb){$ic=$Qb[$jb];if(!isset($ic))$ic=$ei.$ei[0];$K.=$ic;if($s)$Qb[]=$ei.$ic[0];$ei=$ic;}return$K;}function
on_help($pb,$_g=0){return" onmouseover='helpMouseover(this, event, ".h($pb).", $_g);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$L,$Kh){global$b,$x,$rh,$n;$Tg=$b->tableName(table_status1($a,true));page_header(($Kh?lang(10):lang(11)),$n,array("select"=>array($a,$Tg)),$Tg);if($L===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$Lb=$_GET["set"][bracket_escape($D)];if($Lb===null){$Lb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Lb,$Xf))$Lb=$Xf[1];}$Y=($L!==null?($L[$D]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Kh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Lb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$D]:($Kh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Kh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Kh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$rh,'">
</form>
';}global$b,$h,$Xb,$fc,$pc,$n,$Uc,$Zc,$ba,$td,$x,$ca,$Pd,$Me,$tf,$Lg,$dd,$rh,$wh,$Ch,$Jh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Jc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Pd=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$De=null){if(is_string($u)){$wf=array_search($u,get_translations("en"));if($wf!==false)$u=$wf;}global$ca,$wh;$vh=($wh[$u]?$wh[$u]:$u);if(is_array($vh)){$wf=($De==1?0:($ca=='cs'||$ca=='sk'?($De&&$De<5?1:2):($ca=='fr'?(!$De?0:1):($ca=='pl'?($De%10>1&&$De%10<5&&$De/10%10!=1?1:2):($ca=='sl'?($De%100==1?0:($De%100==2?1:($De%100==3||$De%100==4?2:3))):($ca=='lt'?($De%10==1&&$De%100!=11?0:($De%10>1&&$De/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($De%10==1&&$De%100!=11?0:($De%10>1&&$De%10<5&&$De/10%10!=1?1:2)):1)))))));$vh=$vh[$wf];}$Ea=func_get_args();array_shift($Ea);$Pc=str_replace("%d","%s",$vh);if($Pc!=$vh)$Ea[0]=format_number($De);return
vsprintf($Pc,$Ea);}function
switch_lang(){global$ca,$Pd;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Pd,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Pd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Pd[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$de,PREG_SET_ORDER);foreach($de
as$C)$ua[$C[1]]=(isset($C[3])?$C[3]:1);arsort($ua);foreach($ua
as$y=>$Kf){if(isset($Pd[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($Pd[$y])){$ca=$y;break;}}}$wh=&$_SESSION["translations"];if($_SESSION["translations_version"]!=869005343){$wh=array();$_SESSION["translations_version"]=869005343;}function
get_translations($Od){switch($Od){case"en":$g="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦«ÁËžN›t¼Å~9‚ˆ™ÈöBØ­8¦:-pÎüˆKXÂ9,¢pÊ:ë8Öã(ß\0À‹(˜ž½ P¬4¯îzÚ)*ŠÂÔ/Ìhäé/È¤ê:ãœ\"9Ó8Šºí8˜7­Cs¨¿\r­èÊØôz½,H¼\"(04\rïú4:»˜£\r³­#2Œjk6¸µ€îƒÀƒ¬º„´âØÎŽA&2ŽàTÕ64(³OLkÄN¤#òÎ3àA?3¯È§-Ë PŒ:ÒëÊ¾NC8Î€ŒìåAcÐ7£Èîð -BÎ¼ŒŠHÇ!®ð3––¶Â£‹\"Èc;¿9QÍ}:¦Sªp9ŒmëQ+„\rpÛ µ“êÌ/c%¯#{çm4å5¯Á¿:s«^<! /âM,#l¸ŒQÍÇnÜÂƒ\$Ê>‚JÅQB(ð8^—\0Ëq]¸kÝ.˜§r[Ëê/DÍq[ƒAnàÌ3\r‹[FåÇˆ*ò*\rèÕˆ<£käÍSŽc˜Í\\H±ã€2ðbEJ­møÜŸ¤#ke,8Æ5Nã¨@ÇdY\$“å8ã 0å¹m™\rÖ:’”/c°Ãˆ¤\"¦)Ì¸Þ5ÈapAC·Îú3,é††µ¥ØÏ‹ øú“ž’ÖCG½c„@šåíöìgù~Æ7%	TM6ŽŒf©û’2kAâF4 #0z\r è8aÐ^ŽüÈ\\ið\\³Œá|‡Ñ<RçG…áB92£§/¢ÍèÖ×–ífxÂ'éôŸ(êÒpÃ¬7êkæ9X’¥mí~Ò8_\\¨Ðm¢);qr4âôÔºÞâë.ðyþ‹:Š@ õ¼};Ì\n\0R‘ )œ“4Z`Ý§jòƒKO0Ä¨–â`ÒCi÷M¯‰§“2jIIÈ„ø§ªrjMZÑÕnäñF®°zÑ „»’–SKë]3äø€‡fõ1ƒ&29ÔÚ×™xc#Ç`ïšeIC6Pe¤\0žÂ¢ÖFíh)TÌgŠ27|)´µ¬¨6øÈM5Á¸’œàä¥žqw *8Æ’†°Mé™#Ä€‘D0ÎÖÖ7 FL‘„`¨úÏñ¿^g¼HdAÑKžQEœ2––^Ö(\n5ÄÊ0#àž\0U\n …@Š¤x &Y,·Ãxl%ì½p ‚Ã\nZ²”CäŽ•Š³	åGŸ“Žƒ\n¸)¯ðÙÊ†ò“d„Ç”†óTG&)ª(áÝDÐÛ1;Miá¤°rJÚèG\$øÅš£îÖ±ƒza0t¼Ø	§_Kˆâ&9¬t×pog‰!ä\0S²†.!Ñ*Â|ŠŸpnNõñ˜0êÃDE}O±î¼â€Å”:ô‡ÄØbRTØC”!²FÊÓD¡‰ÔêBáÁ¥NT¸ùÏÔâ/Oîi’¸¹IBNy;J	DQñ{T¡àú-¨¨k\nyô\nd9*z<ëzÓM“›HI\$D­-D9˜hê™•EaA \$\$ˆÄCr	ë’ŒØLà\n\nLY‰ŠcM„¶Fë}p™Ó²_“T\n!„€A‹ô'Ì4á”ÇÊ¨ç EFŸ×ófƒa!à‚È˜# I	ƒ0 ((Øö9PCJ\$!<%²…f‰¤ð`ÙÒýgéå¡|à‚ÒZk2a,ªK³À¬%‰Þ\r iD¡AXUp­¤ÖbÇX-r }Ê^¶Æ’¡¶dSlÑù(„àŽF´kvÈÝ#÷Âu¢ö\n8(¨pÊ¯ZÕŽNöµ(È ¿Î|,¼¿XÄÂa/Øl³ö,³Ÿ‡9egY—hûKÑ&,ŸMö^©NLä	8HÅw«8â_ÃXI&áL>ËÎ~|ñÑaÜ*g\0dœGÍì…L[‰°±1M““'l]‰ßòûÅtÐœJÅbÄÐe—é74ø^Œùxn	û(by²®RyÒ°+dåãP)äÜ4Ù§ã·³NŠx •ÇÎ›J7àEÐ1ß%ºTšy²¶8Æ_ÎLï:qþ9 2•ìçõÕž§V?šth|=Žs)~œ“®»NôÁ^Ïs…gcCI¦4›ÑY\r®ÍC84‹‡%VµŽÄµ<9­Ñ˜YdÆmÖ+:¸Ø¾\r¬‰–´´öâÔ†kVök9©ò#XéÉÇ²*pgá•Žküu¤¶†ÊÚUCjlÝG9*	Tæ¬ÿ ·Z°e£wÉP¦ÍØ Aó¬J.'Äù²†¼ý^™M>æ­—S»÷^ç‘{«r,•¤”lZé;v´8PöŽÓ,¸Ú¤Õû:ŒZM3tSt}L“ÖÕ3“lÜe§y\$ä:kD×]'Ë“w*^µÃvòÌùÊÍoy[7‘óži·¹sÙ§Å;šWL„m:*Aeä\"¬^ud|9¤g%¸“ kUl×ÜÛgiî³«úÞ/ÕSUuý{žzæßè]’(Åjº‘žQ9PéF¿Û²º>îÆ@ÁªpÈš+R!,¼²fÅ`8O&Ï¯gÃ›?µ»RZñ‘vIÉÐËï“\\ÃÌøêšûGbæû> ÊþÑûZtð¾o£ïCN*ÊÕÚÜŸÒU\"ÓV¹ç–Æ¾Å6ù‚J:öõã½ü*©+Ii§çFÁ{Þ¹í:ñïö]sž’¥ó½AÑd \$sÀuæHñæDÐìÕÍ:‚îSÏk²LEÜEÌým¬Ënìû¶ÙÁgnÊ²Ò2.\"Ú	oÞÿ¬8äMrµ…O@ÚÌI¼ÓmpØËvÿD\r€V‡@Ò`ÖßâF—‚0cD¢\r Ìc‚ð=\"pß'ªeÉ\"\n€Œ p)Åä¸‹nåo²%§Íg‚Ç0l±²\"lZ3¤î\0âéŠ.ðBð*8ï#ò6¢òúBœ.âš¬23	Ÿ	8‡©þËÂP”ã¢£‚¢b‚@70Äf)ÞEÌSéB B!ÖÈêÌlrL¥ûpáL€™ãÆª>Ã°Ñ%œ‚0øŸ0ým6úy¯ìÇ%œ@\nCbæà¤Þ³eS*áoü£åê@ÌÎà@	‰bSlÐ?%ÎŽ¢4êÖ³bTMˆb\"v\$.@žËB%é0–†d'dä-€ó@†<0ð'D\n¤íÃø™0:|-ï\r	Ó	@æƒÉ§.b¦oHf@5Èïåü\"š-Jà2ï’² Ê¤‚\$Íš…\"¤¹‘Ï Ùs€\\";break;case"ar":$g="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸ŽÊÚV¨?\$W¡‰¡FÃÂE{ü‡-‰:>W9ÏJ|Á¨eRhY¨+dxB&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4R+\r#è:Œ#cüÆ—D_-‘A\nûÇLH÷!Ñ<Rˆ'¬lþ\$êÉbŽ¨kbB‰•(\$’§hD(š0ÏzpëºkŒW+RC1.š'F0t“!+LâHÚ85ãhÊ7Š[gO7£xÈÚ6Ã›J)Š\"`ÒÝ©é	blÑ´ªÐ,„tÃÖu«¨Ã\$äªTIn¬QD ••iBE”lÀQ²TÆ–ª²në\"HµO\$(ýv¶@ËÝ\0’EñB²¸Ù‰ÂZ—)¥ˆ›kR<ô‘Jº#@Ù•Å\$P’°Y=\\\\löŒæ„±yKkÖo8#£`ØÚ8Mz61Œ#tÐG©ÍX&Y…•º¿!)tó*£ËRV¦Ž3ÁfOvt¤ÈOs“©?¨˜:Èæ†ÀÅ¾Å±¯3\"˜h:ù¤–èZ×fÔVq\\Ðn£Wýußxm²‡Z¶=Èl<’;Î¿±¬ñš@óío@_Öüã¦Y‰¶ÅKRó<Ð#“J7ŒÃ0ØíŒ¬+ð­Y¤\r:¦àP¨7µn2<„¨Ü9Ž£ÆÙc6\"\rƒxÎíŽach9rƒÎ0»aZÔãk¶:·a@æ©é:Y¦)È\"¨¤ª#¨V…Ùü\0ñl‹kÞ¸ÖÑöJ†Æ3”é›E|ZŒÂ§4ŸqI\"ù?1«êÙähˆBöC¡6zƒ(b®CiÕ¢\\A ‘\\ö½pô?À¢”šÑ&a40‡3vLaÜ7‡%NCÀpK!”2<xM~Àô€è€s@¼‡xLƒdvA¸2‡ ]C8/SðÈ<·.Cxnà‰Š#b à_8ld5‚ |¦”àeSÊ€ðÂ• T¡S*ˆ¤CY¥Uæ¦¹(X¨‰u\"T”Ÿµ˜Cî.O<„¡sø„L€¯xET’¡”:VØW!Èµ]ÐQ?f†¶ç†U£±Z+)ð§µ6â­ \n•Žo‚-UM…I3dÌÃ>b¶ÈˆQÔf±Èêb†QJ9ò9iMJ¼˜èVjŠ\$ñ•ùª\"fHÐy3à€2•NiÕ\nª\rÊœÞ›ð@ßƒˆu6J„3 ÞA\0A…NÕ>¡UFÐß0àêœ)íZhÜþ!@@xS\n„,ˆ³…fÛŒ1•ÉM5,Bö”Éñ¤›.§”~ç#Ô}¤<çÏDü¿ÚÊ|!iLëÈX¢Jšk-zP½\0 —l`79U8áH ƒˆ4†p@ÇÁ\0f5Æ”ÖÁ€Œ…\"˜n¹MÀÕCælÏ#p´ÒBãÚqÐ¡U¯ä­†p‘”RÀd¤|T\0 ž\0U\n …@‹Sª€D¡0\"ÕdÐ÷TQû%².¯¦¤0„ttKè„¬®Ó¨Á[U\\tP@ÊƒT!Ù.Ì¦a„ÊÅ\0”¶ê’‰±JLúU?¢\\\"Q‹ v4üQ€‰Oƒ3OMµ[Hæu(d;Å’ÅL=ÄÔM…/±kYÕpÜPº!ÑÕ“³[Pló[!ç•*¿[7B›{9«]»¤»4Ê(sVa†@Pµ¸ßZ^%º&Ê*¤â{Ð2})€€E¦ý#â:âñÜôZ§=TKõ5(W¾¢J‘|’˜ÝVÂñ¶u-~\\B€Ú‚˜iA”9ž¦\na”×†3vi\"%‰¦I5­hË“èW‹.â-iX£Â_!¢‘#×EŒ³“XØÄ†?VwŒDÓº\$}ˆ @³ÅŽ£˜]ƒ'v«’“2Mj!8¨Ì¤ê0t„•Þ9°ŒÛ#Gh×–#MBw å8³ +yE#çÒê—'¸›Š/EmØÈ/ù@mÉ-æLb=U\n!„€A2ahi6T‰¿`ß0M¸p¦ÐRM\$Ò€þ-“Bm:ˆ¨§¤~˜êgv\0€‚µQ{BÆ%îöØ¢R{ÅƒÑpú@¼ÇM¤Ú„¤QH¯L­l\\ÌK”™2eå’¡ÖHA—:t!dø¹´B J¨°´ÆW_ìD(iÕ	\$„>bj€KÓØ”@ê¨ç»-ò™5¯¶¡\"J¹Ù*œÈãâ–ˆdŸc]ÔJ™ú¸v„˜ò¨!\$Ñ-¼\n)2g\n»h~ú ›õ3'3S,‰)ÚÕ\r\"¥”ÐÞÔŸ‡Q·7b¶*øág(\\ ñu^‰Í´@¡‹u˜ŒJ¨®œG½–bw†ÒÓœNÔ¡¹Dµ	&ÃåÏü Ÿ¶Îob\nÆ][sçŒ,yÕ¨'ê)hJÞƒÎïré¦§¶VŒz§Sß•g¶•‹‰²ÁKô2°1Ü|[K`¶H´ü¡¦—Ék5n]d½´Äæ®¸¯Ùš<¡½ºôóôÏz‰üÅ}ÅV×•àña‘1ÈVõ¢\nQ}õLûIóZÛ.Rµö~ÓP6HS+6P¨d§Ú€Ô-¹r·(SunGmlã7ójëwüodý‡™·ÏÖ>–ÌÑî=¶|ÂÏôþ•Í±sLõ¹±³âŸ•ß–o/nw„[Û	 ®gOÑèÐ4s©—ÌH†tÚ¥[jËÃÈŽ°NNÃaÙŠ†šÎ>?ýü‡!6ÿkôyáQþ;{òÔ_ìê¯˜ûÎìçÎÿ¯êOâž±Â÷Cþl)@D0ÆkT#âúò ã*XC¼\r˜8áf`äDtÂ«°.~ƒP0 †ŒoÄ­^¢æ¬Oc#â0 ÷oˆ¸l\\VbúŒÇ­„=+À/pQÊÆ‘FÚß/÷\0¢ç\0ìˆéŽ¼ð\$Ø}pjÆÅ\"°L–mÌ@‘bbúbúBäYAlý¤Øþnz-°Ç\0xùªÃ\ržõÏ›N‚ýÅlÌVþð¾ÿ&ï\rO~ë	.@ðúê&\"kõ½Ã”X‚&ãfÈ±GØaÄàZF\\9’1­T(&Ë\n†òŽVÏÀ:á\r¶ÌGÎ¯Â³\r.¢Bb‚HÏlÅabúkÃ%ðÖûÃo}g›/²ð­àæð¹‡»ã¨Gë*Ö/—±\0}ñ©½±›£ëñ±ÑœHÑë½<ÂOºÄE0ÿ\nÛn!jØ%Q‚äqâ­Îfò®–(,šL±IìŠ_Á_Q„QQöCñ¡o› ¦CpggOÇ”ÍäÍ±lN2,!’Í¬S#a\n{T*¦\"§írØãæû/È¹Qˆ<ðt=J#ã¼kãÂòý„@pîTÒn\$Å%ÔDF‰'vÃä0Â_ÅªýþýOL)\"–‚¬\n€ä\r€V› Ò`Ör¤@@¯€Ø™H¬\r¥L\r Ìr…^&`Œ¥h¤¨\0Ä‹J:\n ¨ÀZ\0@SàÇ,ã¸çM•äË*bÕ¦#¥¼0âFäd_dbë¥Ì1@›,òÒÃæ:dåw¥k…¦'±@2¢\0Dêx=Oð²gØµ!NnÈ¢ž(¢R“Ä®BÚ>À˜¤	z;Ç7¤£J7#ƒ'¥ö/¯L^íØX®fff„Dp¡îœÚKŸ ¿î©:®@³¦0S«ñ™9³¨ë`¨b¬ö4CI.@ÊšàÞ\0è\r'dÀr¨ë1d’G™\r§ÅÜAn1(3½;E¤ìÄbh®òÌæk!T)ô\nLTÄ¨Ü?èØ“ë6³g0À€ˆ\r\$ºÀH(° î@¬ Æ ê\r«ðïRNehÄ²ób(ƒ”:M¼ms–²3¥%‚Œòë~fÏV g²|K!:#1«°À¦ü7CJrT/C3Ý,,õCñ²/Ÿ%i\$…ä^®}£øÌ„\\	\0@š	 t\n`¦";break;case"bg":$g="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß.-Òä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi2=é^ËÁ¨¬ÄÂ9-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-j\nÃHä:£ÙAA1c‰A/ˆK»ÃÆ>•BOÃÇKm\r52!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0P’6Ž`Ê6Œ£pè-Áˆ:\rxÈƒx@:Žc(@)Š\"`Ò:«6ä¦,´(à,ªãô”Õå\r:Á©úÊ£äú]>8k#Á5«¨{óxÞmÛK{,‘í>òÐÅƒD¯Kb¾¬O±qŒYôúÒ‰!.\"ÕbjÝâ¯\\0½y7.Lþ%åÅ(E0ŠDž“)ËÞhTªH¬WªË¶‰4ªFPÙ¸(8@6®žkÂ5›’Z4‹êT¶/ÎKÀMêÄW&¦è{ye\njTŸ-ë½»Ñnñ<ÏVÀ˜†Æ\"Rý#äƒ¶ŠO“\")93	ôŸ\"µs:£ç±6ÅU¹­=×åK^÷¶1ÜÜM_yqååëUà(•g†oU=Õ”2÷?	rì’ÀçÒœû‰Ôb\\¤ËV;Ü»¦îÃJ\\L„\"hü-©ÊÝæ_ÑÂý7³4ûGó£ü›¬†Üõu€u]\r+pñOŽ\rƒ äÜ¥òDX†³j!«Œ ©èÎ?©)‘Ö¾Ó;LòVœ¤{\nLª¥ßÈã\r©ÕUf	ö‹DFW™âEil–vÀÂÎ:Èb%‰r¶€Jš8Ìu}7×èWŸ±y(!þ“ír„6+Hr`IA|h ýÀø:- ‘\r‚‚ô‘·³˜X!åUŒÐŸ#‚~¿Né}nÔG@\\CVù%7y?øN@Ì¹”t1T½:nÒz!åAòƒ´MÅóêBñ	ÅœPýËÑDœÌ“c+e±5BL_8;‡HBÈ!Žú33	À¸§§Îa	ã³\$ÄÍÇ¾y‘ŽûÈ+—›2yÁàa 9PÌAhÐ80tÁxw–@¸0†@ÚCpe@¸7‡ ÎÖ,Àp70ÒÃp/K@0ËàÊ%@_A°0†àÖðÐ}j|ªŸ„XxaË 9È8ªÑà;Ïv„øG®X¤mÚÌ3wi4Í¯ò²·•¡ÇwŒ¡;®fçKû%<.ðÒš£ºôYz6åNoyîpŽq§¡eY)æˆÏI	n(È¼=ƒfÒÀÐNíñ…\0©–¢ˆåšG@\np)/1ñ›0DæJ¡ü›~)N@Ô®§’Ê’D-„˜Âw£	‹‰F?e%¹5ãüCEŠý4ù…»4[©Ñ¬¡Ï¤†”dO!L€¦ÄŠ#öêo_ºäeÑY•jjÏ\nª„çXî6#¤§…¸ 2Ú\\K©ÒècAT|lËŸf\\Ð›Q…CQf·*üI\nåXpðt§H7êüê:;‰é¨¨œú«\nñªzÎÂÌÂ”Z@Ï+~9N#¾5’`âÓƒ.ªí2ãÑB)a0­çv¤•äï(E‘Bsøš¥£¾ý­™aZëd³—BÖM5yÁR”B£ôCa	/wLý ™XfŒÝM!RåAokbj*)n&Í¦ÕÂûá<Z^“Ùë¹ˆUé/pŽäï¯fâCÎL‘cShÓ<‹\"©ÅdRª)>á ž•3 ,jœOE#úô×Sx	–˜\n}UESí‘‰¢¼Ãaá[!	¼ìƒ=°466Fø¾¾÷@“\rC§fÏØªclZñÑ Jˆ„Aããžê¯Új§EF!IåVó•]¥ÅT®+Œ‹r•Pi*Îá)år¬ð¯±j}» å]«Ó\$)´®f{‚º0Ä\0I\$Á°Wu8k£Ã&ƒNeùD&²Éë\\õ„É¹dœ§xØOð:œ™Ø¬WšMJš7¢¯É­NB>ÔJÃ*‰O?ÔLC´Qn#øTì°ŠêÙHþ&húN÷*v¢T[IæzxBCµNúÓ9î¹9&mÕn/r2dVy\$ä³V«ëÕ8‘¨Ë™èo¥ÍKËTú¨¯ànÜÚ‘I}÷ÍÈª¼&Ï-Öˆ±q½3´D241`{mÈÌXìqy9vJó‘KÞÌ™ž›¯M1â×æñù3¤‰L­ýæ×¶ô±­‰¦§Që½.Lüâq+ìfóÄú]ø`ÞTö F‚cÍ9éâ:\\\\ñ÷šœÓ¥ƒn B T!\$\0âeÐi³–f­`ÜÖ8s¡À8KÕ¸\$m‚%†@\"gm'óbÀ€‚ OËYçº dÉÔ	\\´õµ®“’²ˆúŸ\\¦•Ñ°•ƒ=€ Ç^éì§°ÓH±»)Àìðç®4ôªûa`íî‡)Ñ_Z‘½:>÷‚¿Þ¨¹DênË°v/K{Ëò==k§WZ‹Êçwó?JlÏ4=wiP:Žú›båðlIŸ šrÑ†Õö£Iš¸Hßë½¹jïÝ¬ÔØŠ[ux/w‰Jè-‚â!?¹Ú[XÏ3Kt©àúIu³ãç¯ÎüZ„ä†ðÅF¸S§²š´ª¿É**,#â•~¬\0WOöã¸¹íšv‹tãïÀÆ&n@Bj½! BÈ:Åf´J(ìhüP.0udu¨èFE>ŒäukæöÐª¢Œl¸Ç4ebÌ/\nf\r¢`†Öi¹íâ¬Àì\"âÕæ±+o\"®ÎÆò¥ªZ=- Ö\r¥p¯–x¢pÜ	>¿ŽyP\\O’­g¬RŒ4Ã…8I«â~gÄ%T¨0á¥ÄÜÄÞB³P”K‡¦BúõÌE‡DïpÃ£jCOÛ-†pFuLºÄçäû¢“§`ÛððÚd@+ÂÈ	ôì¤îÂa`0œ#ìªvP`Ë0xü#ŒÈðj=¨UPwÐ<)P.oçEQÇg2¼0”*0˜±QR\\Q>rÈU*®_¬PóHì7ŽL¶FÊÌÑ<Íç¤ä”ÈðagB²G±zuÑÉñ[	1~ˆjz‘ î±/,ù®÷D†+­Q(K‚^þë~^ëäPÃò\$c*í¶SÈp;ïíÑ›h2U1ÊÎËP·Ï5ÑØãB¡°U`ô:í¢»KÊSÍêöq“©ßÂgqœÇÒê1¥r'îÍ	¬ö,3Q•1PÚîGhf¿ðÜ¤0LÎ2¹í:8jÊ#Nl#®£¦œ4t&ÉJdF]j\n7Ë‚DƒžDîÓ#è^ëÿM,ÜÄoXHƒxpb¨Ñmkì+FzðpÖ&*G@ÜÍØsKèÝç&Þ%É)ÑÚÇ®›mœÆlÛ\"KäÀ²>ôÒêiÒï#‹%ŽàÌrû*ÒJÎq«	‘zt\0ö¯BBó\nV§¨eZkOq–ØQî§NÄjÞœê¡/uèë3³*¬‡ç0ñ}\$çäùBÛ†'.:…&µ3±«1Ñ]4ê0÷‡â3! C¦#rfczÏD’g\"H†îœ;e0¢Œ’âòi7ÓDËÓ4Ì1Q:N3:Ž/ðe#²ôòe;ƒeÒIs5ƒ!¬Nsb¸`!dKt?®@âíÚs…Ws»=®ä³åµ>dždeÿ3'åÆ¿³ö^s§?ÎÑ£D,Teîl(niã¡\rPèOò#03;0lcc7CfÍŠ„3Cðe\$ÅÏ%	ñD¨ Jˆ’T&½D¤%E{<Qw=²Ó>SFT3EmEF©A3o@N4gCTSC§À§“ÁGgö%ÓoQJSCt]	p;Gëèv²ÁÔ\0xÑ‚^ôÇ2Fb!.ßt§R(uSßØ+´ÝKsÃ/4z!Pnß.	#t[=t_Kó_?3ây4ü›³m@4ÎlõÅeaD&zx“uD‹ò+ZKƒIO©D2+ôcRó=FÕ73y4‡ÓRÎWS\r>ŒU8:4»¨èÄ5ô:¯’Ñ	ÍN@¡<ŒÒ(7'?‚ÿUñÍ)‚îl.àó’;‹ ËPIA¥<gBI!RÚ¨LøÎ¯\0¦øF}ZÆÂ¿o'\rLnaÕ‘!/T\\ÓÇ¬¶ðÑ]u°g¼\r€V/£¦&,ta-p³G\"d¯ìÐ}<kLHQ(ª*Ä\0ª\n€Œ p‰mV½®éNÓUÒõ‡vhU¨1c²íZPù)ƒdM&ljr„tª°¸cÓIG“°tm•-PÎîC×QIGöNú©sì?ïª{PBˆ: Eh³ê)–…tyHîÊDY®V¤‡˜x4LiÆhVÄí\0j>6Æ¨ðpÄŠLì±+£&Šdu ®.´+prÖL¯eJMjrŠ‘nÒÉ>ËAv÷0\"þRK5p\r¥o#Ç^\"¸n/¾q0W,wW35?[Y£q—Uh`­è(°«rvqoªîó\"zfc9ò-åíÕý\nÊå =Å\$uŒì\$Û¬ÐÎmwl\"4Ñm±)’tRÐÌ~rÔÐ4# Ã”VÈhÇëñ³#[,\$…L§•ld*%¦÷x„/{æznÃ@–Z@³ñmbÞè¢¶66Üv97ÙROùLæŸF€Iã=.ñiˆLØ,p0/úÚ—#tÊäõ^En³³Pˆ…ñ{/Ï9tNÆ”‹C¬ÔM÷¯úS›PoŽ…•\$#ã€";break;case"bn":$g="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊS·2bÙ!¯«|–Æð;I7ÅÒäŠë#´Û=ÀÐõMó“TŒRí/Ô\rÒž®­ÓY'ERj!*§¹ôâØƒÅ5eO¯;w4Ë‚°Ò9ƒ¨Â6Fö;ÂÎKq]ÏÊ\$³?)ô…%PQ“ý`¼ZéjØ¨Öå<×lÍå\nžP­—\\9FŠ|NKÐÅEPÂ”ª­Õ#!×½ò	#hà÷\r£(Ü:./–þ\rã#æúŽo ¦(‰ƒKõXWí8ÄØ2\nÜ¯»i@HdZŸ|ÅxãQ\$_,#MM7¸‹ÄD¥Ð¾R§Ú°åƒDN4?s8¹ÚKYÈªöORXð]ÿRZziâZµ8!.³RksT\nÐ@åÎ™ªkfM}JŽ,:ÌÚ.É>IíºðOÇôMƒ`/jM¬2ë¯kô—§ê¥5úâÖ–Å¾¼+¹TÝUèÓâˆÕ¯ÅP@'nDâÛÂP.ð€2\$E7“\n#EÉïV<]¹0ê6\rœ÷\$Â7F8À[7&7ý}pÞ…×Áýd×ESÂ×æ*¯a”Ü_Ïh°‡•\noÅ5àâÞSÝé›ÄK³ãM6>ù¼ùzEOî)®~àÍé¯Õ0Å?MHùB`»×‰l3…¸¸?C\nýœêžÆ¥Ö“Ò0• !·sJ`‚ÂûÓQOM…¢ÁgNµ·7+¢'ôéßêi~oz\0œX“Dr¯`¥,x0É*ú\rÐ9\0£ºwÃr<¼3`Ø+`B˜–\ne#B o<áµÝ‡@Cps¡Œ1Ÿæ˜ \r¼3£@æ˜rŠÁ„3†h#{^µSô\n˜)c…mñ?±NS\nAK8sZ[ˆM,Ð|ƒ¶´Ž_axeÈ¼p(8—b{£nEâÓ\nÜJÂ-ÅGà£«6ëˆÐçÒHqQ‚Ü «…)<h 6f@dˆgÄ\r(È’œCs?AÈôLæÃxrbA”<–C .\0ð0ž„è\"\rÐ:\0æx/ó¬Épe@ºh†p^Â§¸x?Qd4†ðÜÁ¶GÀ:N¾€Øk@ù‚°pÊÂXX<á„0ØæXƒ>‘Ì0†³ÈÆDòŠ“Å…±Ã[›‚¦Cñ—•8uÔTÃM’í¡K\$¾l”Òeðl¢‚¬%K/g„28s¨@P¥PaÅ¬rÊ™ÞU>6å*”‚‚ä\ndŠ= k­¯é5PËÊƒ3ÉE¢3”\nº_^\n>Ô¢h\n\"©Ò-¡”BgT%ò†å±é¬r²TÓªð,_#_ó…˜Þ\\IZž)«lÄ±i¼Õ¦#0ö“y¹+)Ýy½\"ôˆm‰˜¶9‚ðòw\0d\r,Hó0Æ*¨Ñý>Q8‡SâÃ0r\rá´ß&aüa@€1Æ6*|í”Í>qM¥€Ðžø¼@'…0¨Cžûw*²(™BÖ{`Ù„a¡’[\$¢Ê\0¥uŽËe(¨DbPós¤(•öò²¨qÜW`á¾w	ºƒHg\\&\0Ì{O!ì›¡*T§vÄƒKš,2[›vH'‘ãžeÙÓÌ\$ÜñTV,2‰ÎËâiÄ^\n0O”úÛv yÆ¸¥_Ê¶@¹\rE‚V+“+•ÃÈ4!8¥¸U÷K#3©S˜Ù¤7\0(f.Í†eŸm›ª#Mö<ŠgVö\\!aI­²'4…(ZÓ{‹•N0¢XQ`Ó;œÄ^ÅJzY3¦cG9R U²…Y£Nh—eÏÂãnsÔŒlZ9z62ÙHrP âE¨ÄOwÅ2byÜÅi¼¼à# †Í¤â¶»úÙá4ÅÇ‚hò	ŸÚC…/Éÿ®k(ýp¸Öæ”¬4´J‰É©Qnz…ô*¤õvŽ,Ëo(¨\\Ó\r	Þ¤Tªñ*’Œª†÷#¹Ó&—Èur«eŸ',°J‰x€rüS2ÅÝT#—6âÙ2(sg‹6Vsê2½}•¥Û S\r!è2€ ‡nÃ„vá¡L2žàÆ~ƒ#uiÚq*ií{dœ~ÎŒ7ËI–‰„<ïÝ?’_¢Ï™ëƒŠvÊª9’FÒÜÙ>>FÎŸ9\0R\"œG%íxrŸ;|½qâD1‰NyI¥o¿Nä›¿X7ÃAð7){ÔŸSÌÇ9—ëÄ¯ˆr–Ð¥c<“XSäÆ3	Gµ\rÉMö‰OH}ÐŒ®kÍÔ1ž‘5÷öéwu£Ø[Å¿°´ÝrÀ,K*!P*†µžA¤øàh„yC}®>ÁÃ\rÍ†9Nžx]™êˆ¢¤r;m`ðAí43­k­xºÖoà:‹ÁÙÝâsí\nùš|¡§òãmûÅrn›ÏZÚÚò9iE¦õ(¤/u¼?Wñ«1Æù?vQ”šut9ØÐ¿KZ¬ò¬gÙFíãôÎ¬‚ö™6éê¬ ¾Â\$É\nÂ)Ìwï‚û¯T…ª,äNúmæéF“Æ^þ\rH/ovÁg|ûRÙèPçm0@°å\räJi6gïoÈûöþi8D.Êêàc(èa‹tâBm¦ÂhŒb/BÂÞíòÉcx‰†ÅBdÿÁLjNHëG˜Ë¤ÊgOdäæŠ]ƒ\núeÄcÂÜâž­D÷*WI!%BäéÐr!ÆLX¢ØFšUfœMoÔ3Ü‚¾õÏˆ/Øà+\$Ã&­âØ„ÃTØm\rëBfÜfPô[¥>XäúèÐ¼m^@¢jhŽjékô\\q&ú†¤Mcrq-bÿN7ƒ5gñÊ”¥\\X1:hQ@˜bÆCn“My	ñQOfhF¢Ýf¨Î°úðÍBìD”ÍP^ÿ	júð¢Pj~à¥D¢ãòãÑm1’”Ñ–ïÁÑ5	ÍAñªåbÝˆJ oêQ¹ï–þN,rÜ¥ÆæòÌC\nI¥ŽÍ‡¾XðBU/ôqŒ‚\\¨#\nSŠò†bðÜäô•±û\nXîþ¬¡ZÌE*;1àäÅaÌæ\"†Ï0<ç°!!ÏÄgŠe±¨±¥0nrÏ0zcV{±*Wà@ô„ð¾Ê'T&ÎÈÚF|b¿ñHJ±O\$±Ô…'¨#Â”Ö+æ8¥¤-ï­1U'm)™‘Ê×fõ\$‘‘\$ÉLÒGÂ…âß/‘\$R¤Ô2‰*²'Q+/…bä§ðÓOdÓ±MoˆQqS,üPï	íp÷ÒÒÔDTþ2Øq(d}r>ü&•	ñk\$’÷1ý®õ² iñ+\$qÑ2Ï!oÐ÷Òe¦Ê«\r|r,“;£¶ûd0ï…‚þæ‰23W/³>ÒoÔ÷§—&2:Ô3LýsPýªç*s)\nBÎR_Ç+lû§¯+Ò©/ÓŽªg…1.çñ3-U(r¿(³¦ÜS«+P0²×/Ã‚êzTcrE-Ë&V¤.åó—\nx-­g'“Úl!U¢Ø&¯Z–§Ä—3òÊðÆ“âÇ³HúÓèPàÎR…\$Ñ=b9~¾0Nhªî…Œhñ¬Úøç©±?ƒŠ&­@—ŒZxbPs¾êZHì•!Mëi†‡ª`Tˆ0°¬Ù%òNÈIÎPXæm1±µ;Si8“Y\nD³HQñ9ók”f³Ä“9IûJnSJ­ubÜðT.“RíœßÑ§;²ÙKê¦ð’ÌþÇñHòÕMýMMÅM’ãJÓÉNP¥NT‰,ôßMtü2·idJ.÷ƒŠ¼k\nì‚ëQp³Q‚ñQÔ\0Vó&:ÇØ\\C”oH8Bî…n÷!f_LrƒS¡8¥T³p¥£…;CP1K¥U³0ï´¸ò·Ló£8ÂØmõa9q1Vs!PS€oB¢Xñî«R:òA1í@ìÎ°P¤q†Ÿ0tñ;nÏY\$YoXõ4\\UµK¯#2å‚­\"ˆn'ÂÉ­Ç”5a]I²îã²ó2MGK*ØÜ„¢°æWo¡<“'I5öÌUúßUÿOôÝXõk-V_IL²&_ÕçaS³VˆWbVëV+PÓ	[Ž±]¢[^”É(Rõ_5oÅ_?tî:ô¯aÖQò®PÖXøônHQ}3U‘dHWs•ZŽVëëS’IÕíJmfN³hTchKXµ¥eñ½,‚ß¹ uËW”ájrŠøtojõ=V5¢;17kÂ1l}+……Õ§Pˆ@PÈžI¯óhµë5ïJ6”ñvé6ŸVV£O5~Qî„qöýk6+¶õj­412ñ\r6&VßO½L5ÐXã<Åoq7¢rŠN0SyA3|yÓb N6¥<«óA4õ”‚WC#‚•täÕu4ô§\"‰”€hª÷9bÂMa.&¿W·MNÖAstW’jq?Â	s¦õ5/ÝqmØhx\r€V¸ Ò`Ö	üÀÀ@ËÀØ¶Æ&Žf\"\r ÌŠÆ4. ŒÂæ©”\0Ä£àÜ\0ª\n€Œ pwÖF¢êŽW[\nsE7¡s7å¬×ÓÑP¶·uB›u—9Ö]4wd!ØýxZ—qpvTå†‡×~d±Š5sþÅî¢Bl’	·×}¶Ø|¨0Wv-XÈMñ\"ÆâH1g\r\"VüÍgUM¶/	îÚÁ2WKðïÃC•©\nC0zl’h*7~–BÜðbÀ‹TF¸¶À Úš#È?†-|³*0>P¯°8³`;X?2˜Üú‘,(ŽÕñäSåÅ‚6e8ïD.8ÕcqŽ³FˆIVIU6ói6¨\n‡nó£Â<wì«†\rààŒ2áoMq°¯%H.„÷ï‘xß†þ6gKÂ\0Â‰Œ]-¶g lŸ&¬¤KöÜ)Lg3Ò¯Å—(1—c˜)ë\ncÍÑnÈ8”Ót:à™	–\r%Ÿ”\$Y@Êà\nÀÂ`ê ÚÐƒ‰32,€—Dã\n‚’ÑÜçXWh•²ºs©L(Øå–á]ø‡*Í'+Ï´>-ŠÁE…õ‘ -\0•X ÖÖPáÈ„?#ÈŠ™§š®bCÙ›9õbv\\©7SrPDµ!uÄDU&úº?_ 	\0@š	 t\n`¦";break;case"bs":$g="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰sàºhr†5 š°Ò¯#’¶*#«ð‚Ë¢8ÆB¢¦ƒ/+²¸‰¬™Š_ PŽ2ì`éG\"cäè\nÃHä:«º/!¨¸Ê9&c“ÞýÃDkôâÅ‚br¢ª‹ÊÜ€«\n@Ã.Š-­£RŒÑLôr\$£ƒNÆ\rÃ¤ÕÇÃDÖ\$ãš)Š2ÁKüž‚L(úFL¯hÃ»±øê5Éê1º#8ŠÀÎÓŒ”Å4ºM+í6RâpÞË «ðí.„° Ä˜Ž€MbVcRý[VU¥W7Ð¬èÃ¨Ü5Œl; Ý\rc¬å6¹ôc'Œ#<r14ÍhÎ2#”bææ&+à0£ÃPêšº:Ú‡qÈˆ:Ò\n2DäSCŠc[&‡]i3õ8´ìscSÙtó£Hõ0:¤kF¶½ó~§vS14É}MÔµ˜ôÍÑ+ô»cŽ#Ð2´¸Œ¹°Õ.O”F)A” 8ò¯£óÜœ§m;@S	 %ã\nØäÔÌPcÓq‘G9–h\r6\r\r‘û0Í'Ã2«%Â}¹7E£{Z6£CÊN7c¨Æ1µC˜Ì:ˆÞ3¨£˜X¾Ž[uª0¨®(Ý@Œ0Ý†¡@æ¥ÂpÊËFï!ŠbƒŒpA2«.û(þæë‚vÙ`ê—\n©HÊô(ÐÚË%ÂµP 3ðç{¿èD†5£;üØä¿Óô%Ó% P› ã“Ecºç£Àá#2œðx€˜Ì„C@è:˜t…ã¿Ô\\œTž.c8^ç~cÂ¸\r#xÜ„U0äjC£àæÜ°D“‚re8:À^Aòw	å=’&˜Ýòv%AÉ¶dêK©m?Èõ½®qTBG¡f‚\nAMRÊ%Åè¾„Ä—BrÊ#Î=¦VŽphsá (vžÎÊˆÄg§\"äÔx¾<DužÀÊK“+4dî“6ÀÖîÛ`l!Êá¨ŒN‰áˆˆE`ž˜ @}Hø7§‰Z„Ðˆ¨yk4 Bà“ðn@†ÈÚ ÊC©ªNÁ™€‚sÎ6G82Xñ¤!«\\f¦,2‚{H P	áL*!(nç¡	#®æ•ÃüÈSÅ hH™“XêL:.ƒ†àÌBˆ`aY/èŽ½…(i#°s%ÆdÍ®×³‰bäkªà…\0A¦!”€„`©XJX+	âÈ¹ƒï\"ëR1¼ÌPÜ™‰\ne´;³HF–èO	À€*…\0ˆB E\0 Ñ5þ€ƒ™3Fé¸†R§Ð &Z@è)íG±ÚOŠÑCÑ¤`ê 6•jAH—mGÅµ†à‰€¾.Ô@8,•º(f-á;ePt‚t/ÉH\"3ˆÌw¡Ó–[ÇiC P@ÖýKYEÒ§†|^ú1.HÚ4yêÍRü¦g%R–æo\rÝÉ›j§šŽ¶F„Õ‹¡þcÊ¥£OCŒªÌÝs¬M@‹½pç,K`on•ýi#Õ”‰ìÈd|”V”i\nmPH¬ÐÞMLØPˆ‘¤ ’˜Ö’÷4°Àü†ßdÊm¡.¾™yé=Œ²Ñ\nŒ%‡£ Ñèpq•¼¿®²âyO9éf,Í¶D’MWmy—\n\ríP\"ÕNŽOÕ\$'í\nA\"ö2¨Ôäf(§†/žHÐ”‚¦7ì‘R.Š¹Ujë “¹sˆÚ ‡ñC17œâûàpSA1(ÄÍB´\"Rm#,#à()0ÂŠt**Ö‚D˜˜›–G–I/Uw­*Õ0 Aa H…jšë_ägN2çQÒ6(\$Í¬ãú¥Õ¸/E0È¯\$1ÇÙ_˜§®‰1(zäqØÖªŠbÛVøÙÞµÛ°ºÁp	\n¸ÿ&ä%•‘N):…b„çd¬je+NNcw”Ÿå¦r­ÿÈ‚„Ðä|·—\\F9Wù6(²RáÌŠÿa\$æãÑCá.Vø» Œ­šónZ‹yGAãüÃ¡Ý~lÈÚ+.f\\q¡AÍZGDä*òZ[1)Ã'dDíŸ¬©%ÐžU¬±]„“íVQÐi\"2æêt%Ý®P|¯òà2†-z“ÑÍË_G8‚„³@PZ§hDJ\rFÃ>*Qj4ª1úŽlµOÛG@\$#â›C¥¾Gò·ÔÈÇjìZ¯Ó.ø=VÊÿ™wžÞ›¸Ÿkµ\\‚JnMbñlËÛ6•¼òÎö#\\çäÖ«¿wàü	qðG\"[©¶%g@ƒFU¼k©–Æm¢£).ÏŸYRÌ¬r¢8Ï“…gåi“NPbBMÕ‹çvµ[b	pT¥ÎîXK¢‰Š0(”Ä»Pþb—¡|°ß\\%pºËÔb?S-”ûœå¾aê\\#éS/ØzÅháÜøŸoÒ\\ÊàåÙW¹u–£q8Ekê»á©\\]kÅ{1.ï½ç¶îÜ·ƒÖñÇ„)cæOòö9Î™>'\0›–N¸^MñÅÛÈãlÃs!]òÌóÌ’o7ä3Ž<U„›Ð)Ìï:ïQù'··µð Üngeëöeµñoì×ºâ7Š;sœ¡©V;\$žü®IHE–M5æR´Ëí.-ÿæ&¢óÊ7Òf¿VíÝeÖ@H&G.kË†þ\"\n¹!ù…6wzI[Å[‚Ÿ¹ö_^š .4#&¨ð£¾ˆÌü.¹e>2zçïŽ[Ð@‹ŽÞ®ö‹™ŽþøÏ~&\n¼…0\"D†ö7lŒÐ&öÂ¡,8&÷ÐNÁPFø­TLÆîBqÅÃŠìˆÐl7ë–žD=äÒ\"ä1-¤ä BH\\3ÌÞ À¯ðl2ðœ.Ðí®\"%Ð¦(Ð2âÐdd¨ÌnåŽ¦Å.¼Žä°&èée,À.âT°À^ÅÍ\rFZS¤Eâ%V„HÆCÂ^j¯k°ö/‚Lu0Ö‰Ðÿ\n¯\rðÈT¢h0pi¥ áªÚ%Ä=\r*%Ñ8ô§	~!ÃÐCª\\½èú81\$ÞæÊ¾ïyp÷àŸ‰q/«ÊŒËíb‡å«â½À¬äÄXÁ0D\\\$.6‚\rqK‘†C#ÛÃž÷ãôC‹Ð	\r\"õÂã&v¦‚rñEoÌ@È\$8q`èÑ„	\r†n\"Of0LqRbŠa‡’]ää» Reœ4%b1E°7ån@î¦õ¯ÏÅZ3ÂFÄŒÄÎÈ®Ç Xò^d~\r€Vx–¿njå’Ë-Üueˆ›H&%ì0Ÿ€¨ÀZ\0@9ÀÆ@bŠíËð\$ÐÊŠOnÇlÁ!Hær­,Éc(Îlƒ&î¼‰è&„­pË%2cñ\0%.0€Ú'Ã lÉv1.°ã#æØ†?#²®'Ã6UnJ—D&+¯€ºb°©À¡£¾E\\ÜÚ(’Þ?\0Ô\rãÐ¯ftFè5£&cæ²Ànãr¹£¨®¹Æ”!Ôër¢Ò-g0ó4òx¤²í' `“ŠÛ2ó!@Þæ0ÏäŽƒ3<TZf ¦J÷!#7\0-À_~DeÞ^&œ­\na6ÎˆEåð%€Ä@cBìl	(\$Îygš\r\"îj°H ÊàvÀÆ¤L¦“Bj ê¼b~ jC'@Â8Xk—«ühâß5&PYCø\$âŽRÂîr»8H²©Ø1bàRú2iT‚ó9+l@ƒK9°þñ@¤@ÉÆ2ƒ	-œ—|:¬";break;case"ca":$g="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb*\r#ƒæ)ã`NùŽ©(ÒË£(9ºƒ\nHã0K« !£îú†KÌD	(ðÈã+Ð2Ž‹³ &?ŠüP+\r#é¯Š¾ôŠi{\\2.±\$9Žq\nìpL‚0 ãpòÈS:§§\n4P\$ÃHÆ4¦ŒZ¡£&fçÎƒLìÕ¨#ÜïŽˆš*Ž(IšÈ@Þ26oÊ\nbˆ˜–7óÂ81ÍðJ‹Åj//„ò‡ Ž£–92ó•°µ\nh× 5M4Õ“ŠhÄ±l»J”´-ÑƒòÜ6\0Aa7D£KÓ+Ð#\$VlP ŒìðÃ7ÎÒâ^ÂI ã& ã°Þ”ƒ`Þ1Bxä£YÓPÆïÝ”˜a•©µå¯]£%-Ä\n4Äõ;Ú+0·È3\n7]7[)HRLˆÆÊWÈóôô oeÐ7ÄÃ(5VU\\Ý[Xó493Ó€UUZduN¡Ûõì^Ê?ÃrN9æ/JœÀvKGÍH ÖµèD)A\"ÒS \"JI.fÊõƒ±L€Å“h3PŽ¹ÏB’f6H SFÒ¤¨èÞ3Ïäþà(c?ÔÌ€¨7«‰ôÅ©K4Äè31UÞ¼2OÄ‚<£Ã8Â¼¸ÙµŒ›\rÏÐÊaL.7nø@!ŠbÆŽÈø2Áî9jpÜ×\$©:¬ººªí¸{Ý?§“Þä92›ªb™ÎhÆÓ+£„“pË¯SÆÍÓ€äÏú“•L\rÂL8L˜îºÑ'ŒÊt\0xš\r Ì„C@è:˜t…ã¿ä#ü‚^.£8^ïÿp+¾FPH/L9èúùOÁ¬â(}Uê€€¼0ƒåPÒ‹Q¤ùÌœ`èŸ“zPÅ–bÍÏa	0%Œ1PAPò)äá ”—1]@ÉÕ;—ãfL\$9C¦ÉC´‚‚€H\n7´”T§\0(* ¥!B,›Mô\$|}7—²\n^] tpÜ)‚s4öW,uÅhô1ÒjNÉë'3a„Š À@›œ\$dÐ¨“’DCÉ¤Šª0­ÁôÂ£\rÒQ˜T@ !‘ûctæƒæQò\$úbïÍ’i6A@'…0¨A“³6'Ä`š-Tý‚et°ªC\náy*ù’çz{³=vÄ¬„ª…°,ÐY¢L,üŸPÞGÈòÇ.ì@&‚8` ÁR%§åOZt‘òDÉš‚`—±È¹?¢†äEdò6˜ë¤'\0ª A\nz\0ˆB`EŸiY˜EÆCjÎ/Áµ“’—°ˆ2€)!¤P‘	+Š'¤8-#¨C0a1P~`†Æº—ü{Ka3ƒ´JNáÞ9Êy´!Âö i¤Ñjç”ðšÂzeQ£Xe	©Ð:\"nôã)ƒfÉfŸ/ilAZ¼4ŽRŠ2+Æ¦™úg¨hÌ!µÿ&\rYªl¥\"6zk:t\"à(+\"&€šÚ±P!X—ÃÄ”<tLº\"¿÷†SâLK*4¡Û†Vëç}x°rÄ3\"u¸—gƒ„ZìŠR*à|CÓ²hÜ)kn!Ï<TüòµÆeQc7&)!XÙV«J)5	2F†âŒê³V®¸‚¯Kl@FKÔ|€¯FUn™\0¥¦ÆZÕù3H‰Tì2`òê´îYÊ\$DyS™‚•“[\rË”0Œ1O!à.§²Ü(BŠ€PR?Eå„SPHÑ@De5t2³U–‘ú\n!„€@ÌK±²m1²CV,Š£¼.¤›''l–[!XÀ¼ÕØ\r\0eX¸}£bP—L•#BD¸1Ÿ¢?AåŸŽŠ\0ü,l@Ø‰­È0¡Ð\0œQ†Z°Ø¸œ²ë/ñ™#Æ¸Ï¶\"\nqÒ*†èÀÃÎù¼OÊÎBÅ¤’s¬l/ŠŠîC\$™Ýä…}rô6¤qdCe™q–gkyµ§©:\$ºÓ\$‰Ý²®R‰'™ì7LxåŸë¬( lœ¢]Û¾ôÂ+6;iH›¥PŒƒÉ1Q¡©Ì9%<&Ã(bÎy‰	 â±xB\n§uF\"H5rMvÉ|¼*xÐB¶NŠm¼\$øH9\"€ØF²HVŠ¦Ô\0Šs-QFÍ@Ô’iS!jTJœøÌMºK/göí8õ6±š;¼’mÖ_µ	}Ü;>ÑÔää®*F×Ç,‹³íàLvq›f›u[Ùg§Bã–ïßÀ+(D«[W6½„ž–ªf<•cQ‚œˆl‚%â|_€PSWÆžjÙá_uÊ¬£ÉE½¶þÜ!t3=¾¶öÂ„50P¹ƒrù¡¢MÖA·nÒ&•F­SdÕ¾7“uœ ”ë~ÐêF(} ÍG”TÏº%cèüÿ(oN®œºËYêmBþ½*ÅØ–VòÚ÷i2öp×I÷T0›î¾vöeÜ·›,Þª‹»w¡Qùû¨ûòEß2õ’ä^%Çw½\"¬{¾|·gÁËÃÑ?yV¡Ò2v®ƒá.y¥j ½wæÙ÷¡º>“xõ^é…·«OÏL&fúBM‘u.îhÀ¦¢+M36†ee~TTre?[Ûµ?|½ díÙqÆÛ|^‹R ¯˜—ÅÄáQ*RWBd\$ÂOcèý®NI¡QÜd`êð\rÙ¹­M¹[¾};#ðŠÀ’wŽÖÝÅ^¬ÎðêÏ÷\0NÈf°µ­òÿîÚ«îÜðäêùðõæ_‹ŽëÐ&PjBOêPP«Ìºc\njèp£l~JGZ“Ð‚¸çðð(=Jë\$NPfFÐ*¿°dò¢bekvNG\0Ð«)Z(êÐ]ãWÐ:«ð†žkø¿Ð’–J~9Ê*Cc(àÇP¾óæ| àâ;¨]ZîpyàË!yhºôÐnÙðÓAQ~Ê0Ñ\rPØNšjpÁPÉ¼(ï’>pvêñåèoÅ[ê-c\0©®ÚÛ+¼ºÉÏ.¼ÜÑ(»âë±4ÑÑ-°4CÑ7Ñ«À¢…z}¦·»MÌDE\rÑ2eÑdvoÑn\r\"b	À\r	d¾/*@Žô…–%Äs.~EBêå	\"˜A€ÙÆm…Pƒñž’Þ#.üÅ4ÃÌ(Ù‚ö`\rUÑjXÅxÌñ¦ÚîMçºÝ8&.  «¶d‚\r€V“\$Üš+¶¤¬&…4dgž\\Ñäh¢j>h>B:q€ª\n€Œ pÂ†ä1Îrï	À½qœÉ†Â41Öü2.iQ±#LLÂ*\"â2a\"YˆŽu®µð€+â%&âð¨iãÖ= è=êø¼c¼ÏÄ1Í\r ò0¢L)¤‚÷®01eÚ\$£(Ud™ò(:`™*Lraãn2ótDìTóŽJfã9mº6Epìq¨Ñƒê¼¡NëòÌ²ÒÑŒŒxÒÜ7’àó¯Ã*žj„BêÞ6C5Ž§4‰£Ø&Ë2tÔ6CÿŠ¸[e6¨‡4û2Î·0µ*.r%Žvà)nkR«3%ôà.bånf °0%Ê\r\"áæŠS¯ŽHCù1 @I\0ÊêØZàê¡\n90ãú`ô?’r2\nè.Åk&*igj0ÐF¸’×qøu&ÈUÎ«kò(s›-¤¸Ø2é\0ãpøÇ¬Nb–I°\r3jOñdÞF`EÊWÌ b¤¨/E	\0@š	 t\n`¦";break;case"cs":$g="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡Æ)02Ž ô1Œ P„4§£“L\ni©ŠRB8Ê7±€ä4Æ¢˜Ê=#Ãl:+\r#“^0‘àò£Clx2ŽJ\0å²š‚	,D7Ä­k\0¶Æ¢‚,4‘B9·£œj*K²¤0›ÍóŠDï§‹»âìå@4Ð@)Š\"cŽ&‚w\"Ð{öH­ŠiX­\rŽn:(¿BÐÞ÷<“¨è¥mz–\nxô6´ƒsz‰N-EaYV+zÙ°CXê‡µn¢\$Ü\rq J2Âý6]›gÃV™g?K›Ø8T,XŒ:Ã\\h#8ä2ŒîdkO×55Œ2t4ŽÒÚ,0µ,\\ì­Ž\r6QÃk\"\"C~ý¥´ ÜShä¹ŒcB&FŽ”2ÀX0í&O„ÊkdW#`	0ÏJ1c{ö;2åkÁ\rïÃá^V­íG5”#ÓXÖyªˆË1%>:'3~~4h1æ€T¼näÔ1M€R\0´7ôv\$¨”¤£Æ´Åèz*.×c\r¨›êÌ“¥¼`PíP<ÃeVó¨ÌðÌ3(CpÊ•‰ã\$ý9²3v<V¨Ný07\rø“ak˜ABPÓùC@•¡`@=q”»cËñ³þßÚXÜØ6ÀOšð©ðÛÄqH—Çr¾ÿD&¼·0:î«ò5&5|üftMƒÓe½OÄÐŽqØc³…É´Ý·2Žs}ç=ËôpØ3HŒF:&…ït5§\0†)ŠB0\\o£+¾Òã2R6°Sù3Îw»æýçò‰»ä\"q#AØàs(°ŠšfN¼7ô6ÃÜš#rÊÙ\"3¾¥Ó³þ>b´ú½cl¬ûˆ(À83LâƒBfDp8€¨FúÁá¿\$”3ÐD t[€è‚ðïÁrøtIpÎÃsådý†èx\"/Á„9ta\r‚øbDk„æ°¤ƒ+(+‡ìðÂ”Â0\"e0¨9c\0I»ß#i,\nwCœOƒJô70î	ªÍbô’‚t EI+/%î? ôwÑð™r„=þ†BŠk×ê{1ò1= \$ÑÆ|,D\0Ž’´‹?ÐPTKÝRF¶?AGœEE	Æra‹¢(„y\rŒu#ˆùO/3„Î@ÈbvøNÇ¤èš¾°´Ûà¹ 0lú •v°–`jw15Í‘#¾*äI%@ÒåÁ\0A‘9bþÍ{›(ÍQp¹öY\$Ù+tî4¸b€`Î P	áL*4âÿ5”¢€RìÜ«’‡/6ì\$\"n × ƒHg§F¨“R¹ÕjôŽx+.ø˜Ù%\$åX6—3Œá\$Ši†Ðß.É°F\n’ ß©RlPräq;%Ô¹ÂiRè“YŽZÉI«'¡Ø‘#·;Ùé¥4ŠÁ7ÓÇTÅ\n;	É²&pêkmP8E@Â¦UxTCh•‚¬“NƒOlEYH\$[ÙR\$	ižGíYº£iÇxð\nÛ ™—&\$”è”¬7fA°;„ém>ÕPbÈ€s4ˆê6„ØJÑ1³M‹6aG'>ÃV0§²ÓÐæpÎcDf-ŒŽš²Mo›MÀII2»Á¤hãEz°>Qð¸#Âþ½ihrE<9ƒ¥91œ¥”ò¥YJ¹Z¢J…yÎIò† ÂQ.õé	á‰Î¸³k\r\r].áQ²˜CPJ—G„HâRþbÂ}Ì˜÷U¾Û…mj5«ÁÍ¶âIØdWðÚWà¦Fkxe`)’¯ð‡Yä|7¨ã!Ð´jA\rÔ*\\T|}’9µL›UQZq0ÚGñX9bŒrqÕ]!È™Ö'ÄDÙŒkðgçO.•?5Ž8ðÌ¸iÏ„ÊKœëbÐƒÍÂhÀ€û¦ZPQ¨D±!ê8¨C	^q\\y?(Map%a4Ó³hËøzXkH•õ¥—ˆkZÆY@pó¤ô€k[T\rA¨\0&Ó‰ÈœÚT2,'-`fajÎýË–Ôšž#ƒÓ³oOêépÌÀuÔöÕËÇÅkJÖeh¹‰;XiÃÉ§ ÃÖúg][B3¯Uªµ#KKa\$Òç\"Œ™•‚Œ|ô¨¦Þ€¯Ð­%kKmŠÝfÿöN¢×ÒîFZÈ#†´Ù1ÃeêH¤÷+ qÛËPlýë®hò«‚¤£0`ot‚!ä~~H‘LÕxNá„Š®Vž‚ÜszQ38žòVªb\\KËªq¾G\0w¤£ŸZ›Èð¸‰ÕªTYuÕ½eb'¶±ªePÎ¦˜u»lSBØÈJ1)I°âtŽfnŒ@v7¬±É«µoõA¿už®án¬ÌEòÉÙÆþ÷¥2„–-iëÊÇ«•ÆOÍÁ<ëØq`õ‰„oíº«·*×¹ßÞí\nõW|%}Ñƒvößš¤‘3U²)áÔ;/Mä¬aZÁ±,yF¬BAIYCHP¦˜d'mH2f7‡k•Û€„OÓÅ†(Û*C¸”¬Ç\rQ<	¥·uè8XVy& ˆŒÆ*X0)!õ±4Û&ÕÛûÉjÝ{3Ü’9Öf jR§Å|Ûõû¼ñÊØ4ûgö=ÏÝl7\r›~frs‚žÙÄkè÷³KÇšSHiþæ–Äã¢¦þMPwm|þî> bt<ÅF‚\n NÞ<¢rNB<×mS\0¨Ú\\®íŠ>P¤nþ7ð šŽÕqÍ€Õ¦rI§‡l·ÏÑ\$0)\0¢þíXÚªîÚìfªJ¨:L~­œqàÈÁÅjÐpxÇ°|8‚ý0Œòì}	MPüOþ\rÎ>Æ\0Þ\rEŠ/£~¨2àbøDhàæ\"beÂ?`ÔšFX§ÄC@àrÂ<Y¹\r†âL®	Þ~Æ&Æ ƒ¸†„pû|\rÌL7Ð„d	Dµ¤ÕI+.œ8Àé	°zªÁÆgPí/î¬lgËÔ²JÜølFV%Û	p,ÂñG\n/êjÑLÃ0‚ðð¦SÏüý‰¦]¬ÄÌˆFûRðQjŽÉ/ð,ëÀªÌqyïÃË†ü…vÕCz±„#.\nýl×‘l1`´,\n3£Ö±fôÄ`–\"¡|Ìazb%v´dÁi<«Bl³°\\ü1r4®×[í ¬Qàà,µ±éËÎëÀ´Æà@ËåÂ9±6WÉPXq ¸’\\C!eo!\nFXjäÃß\r‚ü¯d”\rb€@oÀ…qÞû²7#°Âûøñ.½\$by\$¯Âý.Öf’#r9%r,ÖNÒf@cœ÷ƒ\$/Cq[&ÏÂñ”5Ê÷\"Œ‚ÉD¹'°†ïQU)l‡)°£	’¤È’‚üp© ¬/Ì„Ér‘+Ò˜Kä>E‘wÃtBLÞ˜qQ)ï¥¤À^’×k+`«-D)+1^æÀÐ—.0YEw##¤.g#Ì˜)†±Ê§ÊÜ‘äS 1Há1ˆÁpN›kžxs#S,4sq\rY3DÍ@–#':<Å¤b§ÈKC¡2á23qã´^WSS&×ƒV(CD×ðo-‰7mŸ7³lÚSƒ7*jíU`Øc¢(eüRîPXñ((‡,U¤¸Of\"F…/(¤äÐô0ú\$ˆBáf’Î*Q ª\n€Œ p%sf¨Ä¥SpØma2|k*ŽûO‡3³ökï¸Úmƒ8Pt\"	>\"¢.Ùè2må¸ÉúXqÿ€¬BþÐ ­âêC	b8÷\"üC6°ê8Þ\"L?ô3ÍJØô811\"ºÉø¯ÉØÃ*Ôâkò'Äìájv\$k&•k|F*b~Êl2áO0œÞˆ-¢Þ×ï¿¯l×ˆ(´…J/Ig.(€à&®«¯wJTµ\$4ÃK/nqààæcÆìóýK3ÅpÃ\$ž%ÚTQ€…€¡CA†O\"\$o&Àˆ„eÜ¥¢…PbH÷àð[@¬'Hý®’/03´%£öHéÜí\rH”âWE>é¢Œ2\"MU3È#ÀØ54<À´@EV'ULjt`[f¨-Ì²àæ³+D’ÂšGöµÆÕWu”¹KÕM,#ÇRàÓTµ6|U:ÃRU#È@«£iÉ Ebo@";break;case"da":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎOÙíÂŽ‡“…üœ—8ƒ“Ð\rî;j˜ŒŽ€èž®#+°µ°œ2Žƒ´\"5¸C*É\n-\0P˜§¦°¬4ŽC ê¶ºÊ ²ŠhSÁ?\rúØ;\rÈ˜Þ‘,ðHˆÐ.£\n9\\(!LŠ.74(úÕ‰#j<Ø)M\nˆ8ƒ Ñ¦(ê ˜£¦©8¬Â\r¨ÉQæ‚Ác¨×@FÒ#°Ò2ŽàTå:5)ð'-`‹¡£ @1P#(ÐÔBj9Í3#¸#\"³xÒ7¢ð¦0® Ü34rÖî\niÓ¸4Ë8æ²3Iû¦Ü/õ\0Ø‘>ðÒ6,0¨¦§cF3¤@PÉƒJVsèØŽc\$èKáhÖ²HÃ Þ#ªÆ.{O0Æ\n»F­”õ9Œ,Î:G±ü÷t£šÈB{«\n ·˜ÃÝƒ|úß@P ´NËÂÔ¿É£…a©^Þ·»C~Ï×]Û\nxÔ\rX,è ÂÒã0Íc*’j:Á\" ßÈÃÊ87c¨Æ1¾£˜Ì:³ÒRÖ9…‰€å™#8Âµ¹*\r\\\rÖÐÊaJN*ŒãÍf´´\"¦)ÁjÆ„©ah@×ÔNR•C6ã•<“‰ŽCÎ<\rXòÆ‰<Z9 ÔÂæ¡e•ñp»4;Úï¼/C!#,BN”ª•¥ÃC’EA ;êuÀÁ\0x0„Bz3¡ÐËŽ˜t…ã¿T\$:bò³Œáz•Ù	®iKÁxDºKéÐ‹ãf7\ra}„¯ã|òÊ§ Û,ê×´³íÎ]WÃûµ2RŽíœ÷*;‡´7’Û¸B7|RßêN¸1àÉ;=qÿè¹íéfHƒ‘8'F\\Í‚\0 €-eàŸ\n\n ))„Î½±LƒOrjmU«— @’ŽJ†\räy6S~âÉQ,%Æ}\$>°ÌOƒ¢35½¯#z¾¦n3žCÞ[Èˆyd\$4¨`ÜßKg& §›ÀÊC©õ4!˜ëð‚t3E,1‘ô¸•¢hph¬¤”’¸Â˜T Hò	œxjá»uì³‚Uú´3äE‹ÃVP¡Ô'dôö°ÒõœzŸ-!Ô9pR‰9¬ÉÂ<Hñs'U/ÀZz[€is*FRs#ê*9È‹ä€\nË|âCš.9”J­¥F½Bp \n¡@\"¨f\0 &YŽˆù)A…0&F§¡íšˆÔ*Ä#Ê\nÅ´î@Ê¨á¡Å¶(£e:”Yœ™’P@sE1ÏÁ±@œpá,§áÌ/’È5ÐÕ±¾kõÉx¿Š¨(O2žÒt‰«uR\"™2Ð¶.ÄL´÷fLZˆ æÙÀs<G>q–‚ë.‚šìDÊA)ÃWpž´¡sÀ¸‹HÁDeNúRÉN*dHJú|€¥vJÍË—áPº—rþÃHzAÁ²œšg!†‡ZÐˆ:úWÒbNéæª© ¦!p\$D¬¿®óJ•á	d•`„Ñ†)KuvAÁP’†bt´´/’Þ\\Ø2ÐÍýƒ°¶¡“~À’+áI|µ¡‚öÍXé –EœÈ˜`¤¶‹Y	ü—ôv»)øGx¿Ì`¨BHB_S>ib;é|êÀ2pÊŒô‡m'Ô8=Âä{( åYFÃBTZ†1B˜Æ  –[T3,°ÄìÐ„ð–Ðn­Û1€‚æŠTìˆKu7}dÞ'¹yo;Jº×p„Û{ï‹óA¥-i©ÕˆÊ ~×Œž’{«%/¨dÁ—à]™'x0]÷˜“„·¸­•Á¡:ÁÝHƒ<GHù!–SÛIˆÛJ«úø•¥FT\\_Â¸eR¼…IùíP°ñ;6Ä•B8vÚ.9nMRLŠ›l’°‘g õ8Xè_ˆ	m/\0(\"†Ò.å-B„Ÿ.åøÛ×YQ£Y”2¥2„ðRB\$õ¶«¼ß˜¨ÖtùØ€ÚÃ-œê®{ÌìJŒèU€Pm‰,FFýÐ‰}/áA‘“b¦2<ÖDªæG -)¦ô»4Ñ	ŒS9\$î€«•yTK>ÁuáFµMP›Õ¾i\0QS‰\")þm¯Æ/Ÿ9x¢Ù…\nh]}IJXhdfÛœÉû¨u¢:Ëlk_¯ãn~ÌvÄÐÒEþtÒøÎûm±“`w„{WrîÁ¶¨ÕôA6œ˜¤xÛ}¯%è»W\\Œ_ôI€@Nôµ;|\"]õ~îíì¯ømË3a-la¬Åùãpû©¸”€ÕÙþYX©mÆÞêÐ›n½«0ÊØŽDx°Nh©•òúöQà ªpâQãöZ\0åæyjRƒ!¤f½©R¿¬¾Y\\\nSA9õU’÷>TIêk3¼ì¦çÊxtïãòã-×ë\0Å,\nè'µ:É‹‹Ñæ’i­{¤Ñq½¶ˆÓÇl¥[’w\0ïÛ7_t\$êuVµ…k*ÀîpZ½]àvÏnð¾BíNô¹Óàhñˆý{R%áî…1Ò§@6-¥„‹ÓI|6Ìó	=Ê€¡è«#\\{n?^­G­Õ©ÒzÎC?·e°^âj ¼/aÖg±ù\\d¥}÷Æ4'V”Éƒ‹Úpæì`¦žiíüÆE¡¯ëm2…Þ}yÐú¥+ï{=^IýÙ@ûŸ“ncoÖÍ*tÞð\\SøŸÝø67»ú·ý…K²/æñïü²Â¢Ø\ràÎoÿ\0¯ü/õ\$ùK*²þ°„ðÃèºcO²Ûp2AŽÚöƒî¶<ÿ\r¶X`æ3KLö\$àÒÏƒ¢’`äÿÃ&J_Âäº/˜¥(ö¥E´Ð¬-frÁ ÍÏÂ	i¢º\"Æ]‚Ü0Šó£º¥ß®ßìÆÂÐ¦¿Ðª¾\r¶d\r€V\rcÄ\rn§ ç­LzŒ²4-´4ÃZÅn\$}Nx}¢2˜@¨ÀpkÀÊçˆFåFÁÍö¿‚‚ %n}ÔÂ«Òß‚*IR—®8»é½nzL¢0ìX÷îÆ/bfÔ\"þ7¬°;£¶‰Ã|Ç¥‡°ÁPÚVk\rúnÊ~—hŠ9êä©ˆ0Š9Ç¢]DÐU¢0ê)Ò4(©Í2XØ**_ÎZizÏ1†=±Í†dåØÌõ‘ž¢†Z`àÔñ˜5Q¬âp­Wí„_F&#\"¥qQ¼ûã¾­e T©p£ÐëÂþ	­@M®×€AÍbÆ/®:æ,õbCñ€¥ÃÄ«EîÄ'@ìf£¸^ÑÐ-¢ž¶¢ØŸ‘j\nŠ\n³ÀÊŒBz@PCŸiúêeˆ.m¼GòL0À–„mN@†'±€J’”RôDìOÄýò7\"<Yà ¯à@-Di¨ŠB.\r@";break;case"de":$g="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	fÂÏã:9#c2/KÞ-)SÞ¡µîz-:`T`æÍ0èíH49BpÊÎ:CÖã(Þ6Çë Ê	£Þ+\r#“|»²ãÃ ƒËÔ6»h`ì¸Ãòâ(#˜æ;ò”\"‘£’´k&\rã:L“4Ñ) ï¼Æ	#hà·ÉŠ 9„@é c Þ×6ˆ £&¤Š¤ØŽŒ#¬ÎÍENPè9­èêêÊìê‹'«C¸@Í NH¾¯í½NRU/z2Ž¨b…IŽiô‡ bò’!-{_¥³[TIŠ<B3ÊÞ)Þ Œê0Ê3¤vŠöå®CV«CŠ¹DØ¿=UýZÃsr7?â Ê<ƒeP–B\r¡fYÌ@:/Ëz1ÊîÝ‰r:r\r÷Ëø7…¢LjáÐ#¥Ïw\$¬œcM²¸×WÖ.Sœä.D…äˆcÔÛ±’®=©ÈÔµr\\ú8M0ª÷ˆ£Æq)8O}XÀ`YRI–cƒtÝ!ŠyÂY/xÙM»jÒ€ cxÌ3\rˆ=|ŒR@Ø±‚Ót;+Z(ä3\réXØ7Ñ¢dâ€…¢¶Un¡apAÆè0à9\r÷vŽ´	h@€ªš€¿ˆ0Ü‹	âœp³#ÛJ†m›vàƒnSÝºîîFõ¾(;ÿ ðš·\rÄXAØüzÉ\rÜ¢f!ŠbŒ\nƒ{Lò^Ž¦¢ôð\nÙ Â4Ò6Ž¨ÌAI§£øÝŒPÂá¦bÂÀ÷«ÎÚÊó>Å]ã8æ2Rµ²ü–'É@ÜÖÜ[ïª½úò¾Å²RT\"jzƒ-N©œ¸rœö‚•~MèÀÂhNf ˆ¯‡@àÁÐ/áÞâ4ZðrÉ¤3‚ò6×™‹!€‚%þaÉ`t‚a|1”jó7Pq0ÜxaÄ«<Åì‘úˆ¦µ¸cŒ˜\\<Yèœ­âfO‹F2/¤“™ª@P¡L–Â³0¡T²„7ˆU´²^‰™ykÀ€\"‡#¤bˆaþ4„§¦ºVÌ¤s@§<êã\"g<`ŒQÖ;HôGAAQ0§‘ðäh•Iƒ‹ã!RX¹|•ˆ†æÙÊÒ0a«’nå©>(P‡¤RNäF”gU\n*qx_Ã’.ô™7·•È`h),Á…r8ë^Y³–’˜ûÉòºjÖY!’³ªK\r¢©)æˆ¿¿6JŠÑJ4†æ(ØÉ	˜P	áL*Ó.ÕÎ¹7”¦ôj_zu‘h`ŽQÊIK¾A¥ðäQŠDê<tØšIœžcˆl&SU?*L \re 7-·pA§äêQÁ2{&ÂMÁ\0F\n@Ð¹2Ùq±Jät›È¨s‡OÌåÖ0ŒÅ\"^Âñ3ðÛHÊY<'\0ª A\n¹UPˆB`E«g€°ÜRB=­-Ã&Cî¡™R«A)1{¤°ž*’æ\nÐÑ¤žJ\nqo2l\$6±SEH	¹=¦L'‡\"àO}vç”íSâ|×3.KúN¼†’ÒÍ wSôâY‚ÁgØñ»RÁÝL+P–3D=áAÀÔÌ×OP\n\nÆ4°êÀ\rðs·L©m(0uáO‘@¶F8ò¼ù^ÆQ”òu.ŠúJváÖTóHY¶µÔˆ”°ÉÐkz7t ©bYk!*\$‡Àù“êÓ×+óîÎ†rf”(w¼*´·ÖF¦Íˆi¶À)‰+lÉUPU˜-üÿ#&Ò†„d+6¤T£#SIØh±!ÖÅ´\"èµKˆTÄä°êâ%Ý‰‹}²\\0†c¨joŽ¤°1Û„ó¥C\nA¼þ5ãXÎ>6\$ý;D>õY]®«AP „0ŠµIQ¨áßÞ…Ã¨pgä2TbR[åâVÁMƒ½àÍ5R[±å‰Ø™urg	ÎÆi¶ÞL2•d°ö†„¤ksª¸WH5Mµ¨svpµZ2è]âU¼*Ï†wF8¶„#‘°Œ,2(¹-&ã¥šG@>6Úù]¾‚Ð†GCóJÁn¬YNsWœ2½¤õ˜¼Ö¯uKidV®4Ù/ë´Î²Ú]P³ÝfõÁÍ2IM#ï%¤*²£ûþ‘È\"^.39ìî\$\r³Ê‹\$ÚcÃ\nI¥Ò*T¸Ñ`s”ý1Ìï¹Œ.«S“Hy®‚Ù˜À‚«Ž¹ˆ¹Û:h»Dˆ)A€)bÓçnhøŠ¨@¼WEÄÃÈÛ¸Ø!žÓ´5]ÈÝ—9<–ñnQ>Ã/+dÏ“0._lL\r§±©\"Š^j’ÎáÍ€6YÑ\$º÷Cëé[ Öz­{faÐ­y f½:u¶¬kç ‚·u´¨½óÁ¸)ÃÎd”‰ž\r^`´*W3—·A\0(	•ÔÖªÓf˜ÿ7åGŽ¶–txÁ®\r³–÷Ö:–9¼ÁhíMIwëSËû2°ã~7Ã±þqkšk(þC‰pCVgïÇ‰Ê6ŸÌ³7à|Š±´÷·7âCßò){ðC`i]i¥ôO\r3šwG@ì¯²åúËÛl/qž¶A›Ó…ÿFéóQÙI#|Ú¾õ}{åFÃ¿N¦}_gÈ}O“ÃŸG}Ó÷ÜßŠh–œ(«SiÈZm!Ì8mÒ:~¡¤§³ì·£M®>\$â5§zÌ…l§ä0èþÇpÔ&+-ª<¢ˆÈ\"pjéBBzðüÂ:^d(¨¯Æ\r¯¤%Oò\rŒ,0\0À„–Ã,6íì4,FÄ£ÀLóŽÎ´ðpýxïcâ¿åKÏ/†òæx×ÀÎÇÐ‰NÉ‹	tòNf1°•\nO¢g\n–)¬ VP¹	SN >6@”°Î²G\"kÚm,|I’þÆfÈ‚åÐ³	Âføç\noUpí°²ýNr¨Åž¯0¾1‹h\rã:|#ªìãYÄkÆN‹k\rMó®Ú\n*P€¤2 Æ\re°/êüX¨ÈË\"8P|~&óä»Ý‘ñ‘^V±cÏÅñmQ!±RÊhPó…ìóÂ¾æ‘‡oG9±7d1ŒT(¬Y	¯±%VÅem«lP:¯DñnKQ\n…eÑ«¤f‚Ñ\nÌ’)¬šLQÁ1®´äÂAñæöÃ\n±îÉñÂýbf	Ê!`É¯bIhê–CÞ\nàÒ@¥8~Exë‘/\0éÀQLÄÖÇcklQ²*\rò.Ž&Þ\\Çb‰À­,”-ê;Gb&€4Âvù<`e6\r€V	f»(¦6\n; @ì\"Z*†¬BPP€ª\n€Œ p4ªBÐ0or#ŒïN^'\r¢æmnÏo• #²°ÚŽÐaÄÎ–î¶çâNÌéÀ%ã'Lfc\0¤Þá#²=ñúhŠ4Œrcãs'ƒáHð@‰¤P’„c>¹ÂÜGàô¾`˜#D–	¢RÜåŽ¦ãÞH¥r\r£¨ÇŒ|Àq¢ý:~àO\0PScÊ`‚H.håªxeB²çâ:å:\rr<BÓSÓbãC	Îâ‡\0Q3†Y3Ê¯q6Ó„0Js„\nfð)‚;6À;¢¹…àkÆ’¢\nÁ6´OÆ8Fögb¼i#3+¢hM‚è8p·Cð®¨®ä*„ºBtKKº¶ƒ#\"Rþ¤”‡Ä™4#I4e8\rÓL®êbCvV#,Rnþ¡Ç´©Ê¸i‚!EÂ=æºc†M…=Kzk³Ú¬QRDã¦Oæ\nlÍæ%Œx#ƒI`/b";break;case"el":$g="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTIF™äl–Ìh¤ÊªÂFtŠ.KLê\$ºË@Jyn”ÅÒ\$m/Jé4¤J¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñ€¬4ŽC ê0‰GLÚzžäØ1,ú©îb\nƒ¿œš¬oiœÙÓÖílèWÔ3[uArLï¼ÕjÌ^ºíµL¥,s{3Šúq:Hfu¶Fàª¼z\$£€Ø2£(Ü:AŒŽƒ@Þ2 Þ£˜Ê\nbˆ˜4Žƒ+~É.EÚÌ_<‰rFÇ\\—úT\nãêŸ¾¹´™~ç·J—¡>RQ9B(R¼ø§ÐŒ‹ioŽ›\néè\\9/ðuÀN¬Ñ2z‡9óQŸ,ºA.H19ˆ·†b ¤¹IvlŽ¡21ZPÞÝRÉq¡*kÍ¿	À¥³ïPkÍB²ª¨¥®Žå€Iðß\"gÐ³u)9©[RXÆq9´¨…Þ>Êz¢±¢.Rê®!ÎÎ3ïoÂ)97Í*êj;ÒpVWïf€\$œ¯{–eÑóü¯ÛõØ†TÜôÍä]«’ÅÅ¬óå&˜ùëžÖ|¤4Æµô@ZïŠ‚¨ðo«À]I¼ûtœÞý»÷-L\rú®çØ%+AjŽp²¢Wl¹‹¡Ï=õæ4­ÒÒÁeÉþ•%bÔ‘™»wbÉ}/ÒzÏ+³`0\0»³zVY«|KA°:\"@\$Ž©H+œ„Å~È² báƒ5ãº¨šiˆp™Ïœ&JU{6nÈ”¸BuY¡®R<Ü52*AT¢wQXªD¸Š„H°,gGÔÒ°ÅÎFt%\"°ëÃÖ<Þáy¬À%¼ÄòqPÙeŠˆÑA“´Ns\$[:Æ¥­F'´d‰LEƒ¹ášBË@òÇ'HLwfÑäƒŠÃ\n–T1>)Ò'òRKBS\nA­³öCê{zÍ¬šÅ¾I¤ñ“A%Âd,ƒOLp,)6E¢Ž‹Œ(—Džcª\\ÊŒRŽ\$\"5#‰ZmšrRH4÷6ä4¦\$\"<dRI‹ š[Ž¡×iä{¬½Kè@eÀô€è€s@¼‡zƒd\r¡¤7Päƒxrà½QÀðÌCps\r!¼7ðDÉC\r¡Ò‚ðÄn\r`ˆ<ÄhŠÓ±õ.J|ýƒÀ^AòC¥VxÇC™&.%Ì¿ êIPsÜ*óœ^0§bRZ\\;…dìžæÍQ±8…JœŸgöìØk_5ñ|ª»éÜÊ¤ÔgepæâHaM™µ‹„š'5†dÏÊŠVÅÐ§«ÂM\n‚!U¬ˆCÄäê³Ô¬QYBCû\0¢lPP	@ƒ\nYÑà)\r…#+âVZNáya‚Ý™T³8j%M\\/…ÄžC\"º+¡*0¢”ÉÂ(]Úò|*%Åh%)˜VŠäys¥ˆŠˆW®©K+–„g¼¨Jš&úk.“‰,S‡O#°sAÚ\"	nJ±2œçôÖTè¯9¤¿°ê\0¡\0ƒD¨¥›±sšYF³ááü¶çÞ¡JöJp±-Y½ÇI\n\$9\n<)…HJêÓÉ«À(½œroS…Ë&\$™£ŸÙ·xJ @p\0ýcJ“\n+{0A(Â@ÂO™O3žÙHbzOÔES‡¬ù%ò±ˆ2¥½èË„UH ÁRÎ6\$?ˆÜ¬>‚!ÜÇdŸïrý\\N¶­\\oçAE õŸ ëþ\\•ð¬AŒ7†Ê`)n°bDÃ*\"LSPFã9g,ìøŒ„¾{Ï¢G?Œé¤°DÊ¢ÈÈPé'C¢WZQ=¹™½¼M¦¥üÞJð¥e¥&–¦šêus\"ÇÓí’J‘Ü]P)Bý^HÞû>kä†&˜É«6ƒ•fFÌtPîR«J.ÕÕd+´nš…p‹ÓÕÜw¸m1¾ÎAÛBàÈÂÕ‡!”+b%ZõŸŽœü¨p/¬>Ò@'ò¼„¶™\$‘C(–Uz¬Î7²¢Î'>òJnæ»ƒ{ŠŠ/\$ÜB`\r«˜«ÆNix’mœZJÉüR*ºÊÁÞ«.\\Œw*&•ž5àuR2yÊ(Ÿ‘òÐZìÕœ0L¹0m2eÑ«Qmã>6DñØ\ny×;ç–XÞª,Îæ¢µo®°¸Ž*}¦õõÍh\\‰q6”XÛ	ê•E4ª@U¿\\CDw½Ý]¤^À×FJ†2¿¸F²E_õ~L7›‚g]žZhUðR[KÒŽë»½9iÏ©PëKÍØiÂM8«ÜlÜ‰8ƒ–vÅýn8¤XA×Ž!od:^œ¯Na+²«Ï]˜•ÑéÈàˆy³ì_«\"·°í*é9ºîÚO\\ '9Ó—æÈœðWü‰—ƒ±À( …@¨BHÄ:Ñ`ÒjM)ea¸7±ÀæC€p£,Ä2U¶–rF›‡…‘+LÖ^ˆË\$àƒüàc´2fæd‹ÿî8Ï¯è(¤¾þëäP£ÈßÅºCLÞ4“\rl;K’ãïî7†;\0K0+‰L…8ì¾\"ç‰nfËRÅP4Ð%ˆ²-¬u	ßP6ÿÊ´ˆåø2\nÖxc,HÂÄyÆŒ«È|î¨ð“‚Q¢¬þ°‚önŠý°QðWHöÏ¦Í(óâs	ÐL\$p¢±Ì¬ª¨vÊþöé*ñªÆƒ‹rª¥ïÂÚðDFª8ëä1)¹©Ö‹dŒËë&àÊÊ.E^-\"úÌ).ÄXóÄMÃ,=jîGÌÀâ´g¥Ì­¤|RÅ\"åægLÆ_Ñ&]\0@àÊPÈãpŠj/'pð¶q\"2L`5¯@@pvÉjº*àogÀlŠ¾ª­Ì'PqÊžF¬¯\r„¢Üh‘æl€EÀ+Š·%ìã¤,›è!\rŽœ¯¯\$UŽ\$/%b+äºyER‡ÆÐJæÖÀ‘ Þ«\0ß0š1½„±K˜p”BÍò!Ðø®½a\\Žã²!cð(âÒµÞ„ÚlHƒn¼ÞðgQþl	Àˆ-JkdîBñûò+2™%1Îƒ¤—\$Ó%ÚÔ2(@£Ò\$\\-É×ÏéÚë(°7\rxÔ…Ô)…\\õ\0}-¢¨iÒsž~Ð´\\Xg¤M&HZãÏÏ¦\0­à´¢î²+gÞïA²\"ßE0Õ\r¾˜ÂP¯åB–Ä.ŠK:,­XuÀRÓò>wmÞQ4‚0=1â©¢„²ÐUg,¨ß2ÑÎÝ¨gR2Ýr7*rï,òô_Rï#í*R-Ï˜\\¯œƒÂæá…ì²‡-\$¬ÞÒÙ#³\"€xDÒ0ù²5\"	%3M7)Ò¡óA-¬Ñ±Jè2ðiƒü¬‡\n¡\nI¸¸ð-2ë10k\0p=\n©¥6ªí³gókyÉ›G7qâ's{£¶ˆðBòPíF|,‹üóó)’\r5G0þŒÒ-³°­´¬à B‚|óO0ò87“D‡È,ÍPI=ˆÍåû;Åû/®Ç/óBÝä>Ó‰G!‹„D<S‹êOOìˆ¼«dISjðäB©ËÈÁù=²¬é»B#‚ÊêšRkÌ®æÒ²r‚—hxA²½AÃZðåeDCß%,JKÉ:ÓìÍ‹dæÏ”ëLÑ>³Í>ñ†òçu;®Ù\$DXPoF-ZÏ†l½#¢Øˆ¾ò¿E­:éÓ‚Úfªh¬	0³Þ§sã0&¤í,híé ³/>QºÛÆ‡Lòù3Òý52:Tå?îMÔºw®.˜!Ñ\r²	-qÍM©O‹P2›=ÓQ1ÅPâÎ¬‡›PS;1“?QÓ1Q&õlïŒ—§ñ1gùNk\rOõ?ÍZ8\"ƒ†T%œAµZ°g‘N:Pê„¼”¼”ø-¬4ï„ª­¤â?4ÚkSc8•2ÕL“„ø,±4ÏB´Å05õ‰8lÛRµGO1PÇÍ)êÊïj†ÍïSO]Oµ5&ËƒeëãùI\rUÈ.e'^.ÞƒTîàËÞ•Ö8õÊ]Jû«’—ŒDv’\\[S«¶Ó¦öt‰ž.tÓP”/›L’263•ß1´Qí¶,à¶3=µ¼Sté[•Î~/Šô¢6.\"V3]Óý_Bçd]dUÚ]A?C†›\"ä«<×.öv&t; u±^\r[rï[³OSmº+vŠJuñRÕH=ö i¶¥.´HKåb5‘bv´ôÄ4Ô5!Êudö–*Ö·lv!cu/Lu§i•ŸeU8¬BdSQõ'ómÖª«ï9ohÕ¡V¯‰SÕgBLú+Àx¿MU“Zvv]äÈ[µdµ¡m!q7&±Öo•µn\nžî u¶MiAj\$~ÀnÚèë²Ld¾wç>ç©;rnsX€B9è\$°œWÑ­]‰¡\nÇwm:z’.\r_Å£t6ÙuÐG¦è®-4ØJ£vÉ}Q¢ê­]73›6ÉBd‘éÙ\n¶(³ux¢m‚¥±ÂÖL.PRO`†† Ø`Æ\r€Ò`Ö”øD«,Õš#!l³§cò<“çì˜ÛÔ\$«¬ÚDx PÉðÅÓß\\\0@\n ¨ÀZ”8HíìËQô-Ñúw£:SjPqò/1÷ßnçG.´©ŠãÆŽÙ®†La\$&Ã\$c\re.ôñŽi2LZL¤Ž]Mm·’E§vú-¢a•“‹ÜŒ©(!dê¸ø˜Ew”DÊ–DÔG€ÔÂúL„Å/ï€ª®ÌåµÂÁ#Q8Ä3\\\$B÷nþŠ¢YŽ‰{<Î€¨hÚ\$ÏãkÉGÅü…Q¹NÈ¾«hö¢Í@±@E9‡ÈDŒŠ¹‰z+Òì'c)2IK(YOA}¢¹05’;‡å¢Šæ%÷ ùK”ß¹P²–½¹]¹a’.H%'âz—+k&²£Ly^M+•,¬HÒRíP¢]Wd%g?×]9g¹ÅuÇ!™\$»O†udä(òNÛ2Ã o“§››œe_”RÍxgGìÚ 4\nÆJÆ\\G„XV\$Ka¶MG†™tÏÂÓ±{A%ÅwŸ5×dÉ„T)ØëÝ(¶ÌXöAxúèåX= ×Ì0ä²÷c'‘ŒÓ²òÝÍšâñÃ¤LäÒYV>×Ø÷´íj•ì\$Ù÷b÷/Ÿ×OY˜qùœovCaÅ˜Lç©{\n^øÖÅ4¸CÂÓ¤Q£;\$Þ(²~5œ ";break;case"es":$g="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&B Ò#\n\n³9ÈÂH”¿›‘\"kPÚ2²àPŒ2¥¯Û‚4-Ã!Œ*ôO4@)9MàÊõ£ äa•±p™¤Ã˜+\r)+pº0#£âþŒKò@þµÒtŒ)Ä+œÝ½°ûž!¸‘ô¤œÅÂ¤þJmz6	ƒzâ7:­òPá¸£”ÆXÅÂJFÄn(@¤éT:\nbŒ†¼&RD<¹#Ó:@CKœ0,³~‹ÇÃ¨Æ:!1sÁ°¬:PÒ 5Â0Íûi	Ã¨Ê¢Ç¬|ç„´(Ä<¯\0MrWkÄLÌMØŒüŒp Ü‹±,[Åî#d˜eœàç9©\r	ã”dÄ(#˜Æ¼°oË6<¯Ú´\r5\nþ¯ÄœÄŒv¥­£bj0£ÖÓ8L	»šŠÑ\"`\$Ã>ÉÉXë''…ŒáCj7bPRaLUu+3>ò¤Õaãµk’9Ž5“Ö!±”ÞQ•EÈR2¦óE3äR°(42HÓÒH“7b(ñ¡±`ËW_ø(ä3Nu™f\0S)\"D£d|Ì³i[\rã0ÌòYi‡NÉBŽZ³€¨7§cÜà¿0õê‹Žc5òÿMË8æ/c“‚0Œã\nÎìÏô(Úã¯@æÂ#xÖÉb˜¤#;#²ò9Áp@+VC`ìýÁ£sJßˆÛù‘Í	PÌ·\r·ÊO&RÆÙk>K“ÉI5ÎˆeJ}'v¨¸Ó¶¸Q=Œ<6ù¦>Ž¿pó„ÿ´°ÝY&ü¼%‚ü9Žëu\nªK•ÏØÐÆÁèD4ƒ à9‡Ax^;ÿtbâÖXrÅ¸3‚òó—‘y#‡‚\"öIÍ@t~A|¾†àÖóBO‡„ðÂ“ùPJCw&HC¡DŒð“ ˆC’S†üÏ#L»^a?äaµ¬¢.LŒyž8%Q@´àŽ™ù?gö ˆÀP	@‚†ökˆÀ()\0¤£\"`Ã™,Ëô™%×fECÈ/\"¡ì%2„ÝÃ™,ç9Å>JXx\\f\rÞŸ÷’qT²1P\$ô‘D²@aÉª­v©b6ç(zÄ0‡VH;\"!å®ÇÀ@T¡I9¦Å™0ÊÌÈ	ò!A´É\0!±2Q°’)_¨&A@'…0¨êÉ2h&äq‘SÜŠžG:‡£‡	±8'M‡IsýßRŸ%òßã\nB²ö/RdÍÅþ~ƒ©Gîp@Á]Éœ`©&A!‘\$–J£ÔARÊ\$lÑ´ŒDDH~’1Ã?óˆÄ„ÉZÂ U!0\$… ‚¨h A<)*.]Chbkçö…IdfE)\r#\$@“5B€R#I°âÜ‚xpY(#Bóæ¾aK£\rŠÉh°ÈÎ³L¡ˆ0&€”rÞ”XåL%iD5òhyOÑ»dº`:¨æ[£±&&Um\nµ'TO\$\0‡/¯U”ÇÙÅfHÍ(ß½µg;+]HÉ\rT³`àB—qHÁYÙ´Õ˜@	2—\nÈ‘ÛÎ7ñI[3ï²Íxœ€ÞAýŠQP¤SCQ1]óP„#€ÌcI\rô-ã¯p¨ÓKñÐR+€‡¹ÒÅm/ñÕƒÕ¡û,îhP¹Âb‘Ò\".µåõhÔ0ÚŒØBÓYŠV*c³t’2Ý.äBòYÎ}ÔcÆìÅT”çbprFa¾\$ì–Öeå1¤¢0^éŠÑCu\$,9BÃ‹n®DÎÁ53»\0r)áMaÐTÖ/e¤¢3óžB T!\$f[ÍI'4!¾PšÆ†úÉœu’„¨2†¤PÃÔ™ÄCÍi+ð^VUûW2Á½_(\\t­ëž2¨7<`kœ9gøì•†dQbIˆ	Lk!‘l‹‘Þk‰”ÊØËäÜŸ1LÁ5(PŽÏ,[‹Ú\$Ÿ:e¨½6çHj…”H	d½Pã‹2½‰?qÒ°†.±í\0¿ì\$4 Qž3D9wÑ×/çògžLBCqp¤…vƒ>óK9í·iÄÍ´ÕepÔòLõˆ¹ý;ih·’œQ\nÚK28”xai.%W•vIÔÞm/ÚÄ‹b£v±LU?óY´å˜\"Õ-ìRÂgVŠrÕq‚MjÕ¬:Ò\\³†ÜÉŒYR*ÝÃ’Õº€oÈ“(!`Jmñ®ÝÅõ@²S¼©ŽïaM/|RŠEW#ò¯b¸“VØGSj\rÊG²0ý-\nXIL5o|:·‡±8¡H7û6â¼E¶¤rç³š	Í0Ø…O¤µ#˜ŠØ‰‘.;›IØ(u+±wž0c¥yJµŸoðØñÎZz”ÅJ”¼ÊÇÎfûèÝ®s¸E½º]t%m›tâfËîð­YÂà3^•×:Ã5Ü—Vb“ ™²íVTÆ™[DäŒµÈV^Žîw)d.×™ò6zÉ8ûteÐÃ“»œE÷¢ƒ^¤Ïz„>zî]ïÏÂŠ|èá2Ýð%¹è\0þ–ë¶^Ž\ná8Æˆ ÃôvÝjAìX½ò§éI»ä ü¼[Ë}Šu\$7ÍPSè¯ÀCÀŠ¿H^s©ÎMÄÈ\$D“éÇ!º™ÿcâÑËÉQN^9ãŒEòp©ÎÕó‘_{ß\n:`ÖãÏÿf{òÞC	Ï;’Lðk\rýÝnãàÌñ®Èëòo,¸ëÄdÀ@ÿÌÂF–%^fâ#žÂÎEç˜1\"TÍÉÒG£~`DDŒ\rèöÁ,ëMÀ¸æyLqoþý-Í0pY®¿\0Î %ŽÐŽ;\0ë¬¯ðUCÁn¤>Eµ¦\0þ°}pf^jdØŠ„Iâ@ÇB\$Ã ÅïÐ°LçÇŠÈÐ®þMøçä±?p\\ñãêLëƒ»\nÐÆHÐ›.Ê¦.Tò­ùÏÀ%Œ¦p‡cž½ˆÂØ·LáípËq\rCã°Ï AkÞÕ¯Ä7ñ\$¾ðèfŠgãžÂ¤	‹ÂvêáPí`/ÀÐ´¦.E¢a.<âFÁvWð’\"íbR®éÌ°DÑOò#ˆ1~2Dœ\$Âè…ð?§ÎƒpJïì¿qšfŒ# ð#0d|\r€VƒŠ®2­	æãçÂØ,Û\0äu\"e‰äv)Rù‡\n ¨ÀZ,a%V-dÉL¸ŽM0ì­ø‚0\$H®ðLÄCB6Ì­d­ªv«+,àKÄ+J­\0Ã!¥™\$¸8ÃÈ\\d8/+ôfÌÓëì”Å RDæÏÈlð@  dÞEÂÔkB~¦„b:rdqMœ˜\\µ†ùP4#åæóf¶03ÏN‘ÑÆù\"üx­ê4¤HwèšUã0ûO2ŠÍ\n‹\ræ‰¯öÜ’ß%û(o¬X\0Ê2H¬8ÇLQ*B08%PH¤h>Ë¬éÑîâúd„œ7eÖ¦Àê]êä¦Ži/&lå‹¤êçÄ§cü#®pÜL€S^D\nwc”sãÀî<ÈÉ,§\0á,ŽN¼ƒôwkT\$bJ#vGì7mªÐ­Ž\rê¤?lHNÆnè.¬©p@LÒi&Z6n|¶e)“%%e\råš\\†b/QÄbÆŽNZ˜ 	\0@š	 t\n`¦";break;case"et":$g="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj€(L3|²ˆðÄ4Œ€Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-á\0000°€!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nÃHä©¦@P‚…È/ò“\rã{OŠp#7Á8Âß\rÉ2ÎôŽRªß'Œ’ŠF‹	ƒzØŠ°L%8-ã¶ƒÈ(j	#hà‚È#sâ¤8£+\\7 í8@£%\"˜£#5‰¨¬‘·ŒdÒºÂN\n¤ß°ª(Ö©¨‹8š¾·ì’ICF¢°’\"ŠñåFª7íŠŽS£­>¡­@TŒ9Ä2PÔ2¢;ü©!-„ŒŽ‹;¼É\"ï]>J³##*NÝ€'Ž‰ÐÉ\rBV‚°L\\±lÊzÉ\rƒ (\r2Rþ*EJT4cZ´ƒµî#£`ØÓ.H**1±ŒŠÃ›'<ò(ÁÝ(­púCÀPÝM7°ÃF-Hµxè7mú~¦Ëý^¿´Õ)¯•‚+!ÖÕs6³Õ­n¢IÒ€Ë)'H¬D2 Q†J­td#>¥c’J©Î“¥æ”Z€.k~UÍla›Å÷µ™tÅì«/%#xÌ3#iêk6ÍéqH67Ë„ªâ±ƒÍ7(CÆÂc5ú¼MÈPæ4Ã–ì0ŒèËØ…?ÂóŒ¡@æ¶ƒ|6Œ*˜@!ŠbÂSØ•Å,3HËHÛ©7cM\$àî	—k#¥¨Üž°ª3i¾\r6ŠöD£;Öªt\0¶tê[81#*j›°°\"T€ŽqÎ”£Àá% Áp@7ã@ä2ŒÁèD4ƒ à9‡Ax^;þrIkArÒ3…ï§ò<5›Çzx\"`eC>`¾lŒ`k@ù¤(èà/ øü\$‚¡ÔIžsˆ\"TÁ=PNìÄ»ÐÞ´ ùš\$„\r@ðØ\\ÉT&¡¨òô|ƒIô‡|À%¤`‰Q,#¢ñô28iÔ41 á@\$q±…F¥!Ê4ÃüËKãYæ9«—²n€\\Á<%®ÀßÆRù ¦½=ãÓÏaB(éÄ“òŸ y2À€’s:|L4Æ¼>0âO¸fL®¬ ¦’P¤ôŒ6ó â¡4„Ô(ð¦kW5Ñô;ó¨I”€W¹ã6åºBã«)gHAÔõhÄåƒ§PÀ4\0Z`Õ8t2‘í‚ÃS%aY¿Aáœ(à˜1¢u `©”´OËŠŸ¬>~¨À—£\"\\-NAŽ˜´”ðÎ{yG…R-Õd[ÂxNT(@‚(\nŸ €\"P˜h0<e&NºÑpaO)ŽPâÎñ­z/b,¤É™TAò1¶\"º\$AÝH\nÃ\"åtuN\0¤;+Z—´SÞGÌ!+%”Õá)UüiÒà­\0™âàzÓL1–J]žTÐÊÉÑ„ïb˜¶#GJRDÈŽ5vx®›™C Uy¬…Ê¶]äf¡È%*#Žc+ZR‹ÝB%µ¡	ÁÔp†-Ä A\"pmJ°ì6W’`‰)’¥°½Xb,dD°.{#È\\Zª*0!é`4€„= ¡ŒÖ!¼îOSrÄÅÍ6~æ*Û™]öX·…js‚I@(E“›òC	Ê˜+ùzú\"Ãèeµ]ªYÊ-cA/Y+¬àœR½ˆ8(¢œÒ\$ysIUÕ—]…@¤B8G¡I0‘xN›Hkœ¼5T‚.ê”¢ë¬æª\"ÈòPhÈÔ\"…`Š‚ SG•=µÄ{këqŸáP „0\$<?4­’†¥f\$M¥“Œ(7<\"a	A4.%`‚\0^1ij¨Ì&™×jíÍÙFp´—ßXÙ_±u°Åì%Ýdih\n¡ý&«ðã\\KU´©!\nhÐÆÈd±H:ÉÔ÷(Ucâò¢›§w0žŒIÏŠeäX¦¸†H!%¦™µ˜Ôa3Šb'²™Ÿ’,Æ–cD?9Y¶pè;c³ ¤\r9U‘ÖbR¥Ò`Ó’yZ¥#\$Í¹ kPA7Ð½á.°êfMÅËD2Ø„¡«QD‰F7wL9“[!¡/ÇçZÕ|T%S ÙEˆ”´\\-¤¦Øyx„ô½˜ìÂ³©i©Í—”Ž1TPÐËd5]•Ur”•Qshæê,«\"S°IX´£2BNImÇcZ!”È²VÌ&L4A%•*î´·æøßôU1_=èÑ“åº'RŽ.íýˆ|^T°Ìvæà3ÔF¨R™€¡í¯RŒwÁŒó‡lÊ±³öç#M|—)ä*ô«^V/|¨€òÍ‹`ùK:gŠÑ­³\"9ÄKö¹vÚÍÝVPÔ÷I\n|õ\\sl¿³¹‘´é…§8\rÆ^úZžf]WlÌÇ‘tVŒ¿IZþtÙéW–×]8ïò‚r¯³šéÍ…¸*¿PØèÇ¹Ý	Ï:v™Žîü<â—Ý¶^ûçtºÛkwƒã¸¡Ù{	–PÖÔ@œA›@…R™\"ì€^Œ?s]‡z5yèåmÂ¯3möÒÿ@1BÊˆqor¯ÖýPÜlhP…~á¾ÎyòuèKU°œöèÎ‚Î`_@-žúª—«ÇQm÷r§U*­VõÏ\r˜ÔŸÚ\n©Vž«ÉúÙŒßî~o³<†ÜÁÍMS~¿È«LM-O÷å/ÐØì\0Œ’îÿ¦\"è\0ÿCŒ Pñîp‹ÅH\"°QEOæ @çb\nÀà¨Áh^Õ/&¯f< ’ÅG­`b\nb73\0Oö¬eü0ŽÆ­ú’Ù­^ÌjÌì†T/Ú¬ºÛ¾Û{Î›/ã\\oÀÜYíô­Æ\\÷æf¬&§	Ð Z.ŒjB\n}íq-xâïVNbH7ðrÿìÆ	PÒê°–&°Üerë¯yð\"Œ¤Šnpô²dõoÎïM õ@á]Ç·±ºHºÅ’F×PŒ¼K®lfuNÔâ\"5m¸²¿Ñ#Î¯PËQ ^‘0Rð-CëÇ`P¼ËÐ½KØIÄM\0000<¬#\rOðØÛ„ºAC\0±~ÙìëãÜKñ}mŠ:¬Æ	¬,Èn\0 %º‹Û\n°ÄIæJiŠˆ\rŒg\n£ê¯ˆæH§@\\*@*O9\nÐ„«²XÏÝì¥íŽ	mÄ\rÊTãÌ†Ñëd&ÎÛE~BâàÊdÞ¯\n<í.''6H`Ø`Ö&ehDb)i¥câ.h:=€ª\n€Œ p{\0Üe9¢jiÒ\$¥äÉŒd\"jÜ­ä«‡hk\rtè‚,	²RÀò‡©,C.º/äc—²9÷ªøKÒ)BB!Bm`Ê[¬À#ãœøBXÚ\$†+¤ð¨ù *0ÑEf»L_¦€áÚò&¨Vq4ñÃL,¥~âM¹¨nžéi	EÚ§­&’ã\0Þöh~ü\n¹/+i/qìï0vÜ†4£23`@.i%0e’\$ë8/s\0òåL´ªß\"MÑVªO„üÅs-þg%.”n:£Îâ¢95åîRcü¢†¡à¤B\0ê&Í<H‚73 @I ÊíÜsr @á2ê,äž&OT[@–„ä† ‚6ß…,]òèŽŠy)ÍA\0ŽtMbÎZ’ü¥SW †|m<nƒY8\0Ó8CC8°Ð/Ë²0l3\$ãÁc|1e˜Ièo‰ìDBÞ	\0@š	 t\n`¦";break;case"fa":$g="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9P“&—!”×%E‹ðö2Íz˜'esÎª 0“´–ˆr«41\"Èˆ=Ò	P¥?Ä:¢‰–oñÄèR@\nÃHä:£ØÒÊ’\nÒ¤lœd¨ª,\\¥²ïªbÅÉ„#®é½i4ÌŽÁ,òZÂN‘«úC³S*Ë@–1\"K Ó’6Ž`Ê6Œ£pé€è4\rã @:\rá\0ê9Œ¡\0¦(‰ƒHè2Å*Œ(ÁÂÔ:W?£¤3dî\$¨jBÁÂŒ»ø*ÐÄzî3MÓ<Þ\$¬kúáŒ	D¿SS‚W§Èµ4úØePÚiUªÃÕPªLÀ¿K,õÜ’À81;\$D#¨Yc±¥::€­0¤/³=b©±ò›‚(ö;Úˆ•L\ndD2îõº÷òW‚ÄÒbÍ.%~´/ÌÍQT–âhúXmëb‰m*wÃ…º.ÓüìÂ¡³<Àn´ûWåöhžVñ½tÝÞ,¦xÚ×96‡\\&B»=ª»øç°ˆ\nÛªx}6¬ÙSû…¤7SÎ¬L:w Ä¸½‘<iyµ]§Ð>}£BQ½YoËrûxÙ\$¥¬ÿ³È<Cå²\"Ÿ°:ûUBHÐsSb®%9ÚC½é¡Zoé›IF=¤’•·¨=fF9 LÍÄ««?½\\‹>Úr˜	±ËÛ:=ÎsÖÐ\$¯×Fôµ•Ôpj\0†)ŠB567t\\‚=—²!Áwt°å,è†—)–\$ääî3¯Çwx\"K¹½-æµ_rO¥Xp”Û«ÒË¿è®öÖ¢e:h¬â¢SbÌ\"e .PÄ@ÉÃîOæÑ½¥±\n%3 €@eÀô€è€s@¼‡x\\ƒd\r§„2‡ \\ÃgêF‡…Nƒ˜i\rá¸‚%6aÈe/† ØCpk@ù™“¶Ø­P1€¼0ƒä×\\ò¹o-ù6²\n@*¶*o‘™¾æ¦µ:reùãÔ°Ñ9©&‡°¨‡@Hœ\$mJ'\rdÐõº1]¨\r‰”³¬³£™„cè-!ºÐ ƒJH1½mG/‰@((`¥¢3Xé„+€t‰=§W¬nRŽ-¨ÊäÜr±I)e5Ð¡Dh«É™YA®´‚4û™B-‚Oiþ 3d“Ud.èC¾@’FƒÈo €2•4ƒz“T¹M)pÒÁ!!Ô2‡5&ƒo\r € Ã(h”ØhzAŒ6õA>g8 „3ª…v¹£45ÊÚ#R‰ZëÙ(Ô ©A6(•™Ce‘û¾dDGÑ©\$™ðlô „RËI'±È®2wFžI°o¢O®íFÐù^'\nŒ&Q9fW–u\$’&7¹\0Œ\$Ì]äM‡ø\"¤Hò|†¨RÂI !˜WÅuò'|•Œóë5ÔýršqPç\0PO	À€*…\0ˆB E­5¬\"P˜kŠûM1ap¯©š£jmM(Ý3«\"Âº97?\nâ+!¼Èñh¤ÎÌ®‘l¸™z\"\"µAv¶z‘¡în'èÇÒRç¤ëÃ[ˆNÈÚdí\0Ù£È_NTøˆÐž›U*®2D=abVí‹L’µ†Ý'Ex I*AkoÀû7\"V…ì5O”%¨,6Èý.“Mº‰Ñc-~I™ÅYezB¯4n.Ž’W³'­f/²+‰DJQ!ÀUEôrD\"*»‚8êÍe¯\$¢åÓ.\"|Êårv6³˜´oY«BÏ_µ‚ƒ–4ÆÀÁ'm¶o!y@Ûn:dg­¬[ÅÏ\"I[xÆìÐa&ÎÆ¤#b¼„I¥‰TÙ‹³+©?áC®ƒ	Q€JÇöÛcƒ¶gìéT,­ú¯8:Ä›k%„ºOy+Í”ÊÞ\rNtázÀøÌ¢\\,Ê8†ÇÜ( ‰ó8H—ùÓlŠ®P „0'\\5\r3´D…C8'uÂ*pÈrŒ§Aæ‰5™1MS– å±Ü“ÊˆµÖ™¦dÉ0°èôÞmm\$¹OkJé©z6/AÚ‹æ`å%ëSVGÔ–SDžkœ#¹Ó„X½Bq¦Yø×ëË0'}´´Ê¯u=’óÿ)ÍŠ©[5IýRSŠä|8”E‡)US¼?h€ÉáíÁUö9¼-õdßR<¯SuR;5‹E×GÅ½[šf×Ef|HŽm¹JÕl­`¬XBRr\"m·1Q;krngYºÄÉ¹BÓC	ÔŸÔdZt\rŽ\$@síãx¸â\\~![1_ÈÜ`òH#u¦Á¯ëáX§Ï«Ó=UærÉ¬K*6,¹õ0i)' ZliŸ/CNÔ¬¯c|Lzº´¯½c¹Pq¹àÛîåJÅbdæS}êå,Y¦JúBB\0Y\0¦½ov]îjáÛÃó;¢ïíÊ~Œ:£ž5«€ÚnÅ7ÄFëó+ƒÞ{—+ë—3˜fþïpšr\rÄM¤ÛNés#SH–5¡r?2ÛêÃ0Èë–‹RIO£[Gè¯•FÁ|07äîb,TFÑeç'À'2úÛì)¿2š”m†¤JýÎÁÉ­	ö\$É¾P©»è—æÓþµŽ}'ùR±Ç&ÇÌyz€d•c¨uÈÿ¦D©VBVî˜ZŸÁ©@c!JÛÉç(ò’pÈcä¼ä;L’HÃ€ýŠüÅi¦ñFvî°go¡ÇNô8€ÏûïìÍæ0\"¹Š¬Í/ôNXäpC¬ÞhÀ~ÇPN¢¬Úð°^OÅ”Õíçð>âNeÀI‰R§BŒ?a°ìÛ#åãòõl‚0>*­ï®ôfEÏXåð0ó°Yöh¬‚à¯°dBäàÄb¯ë«\näK…ÉPS#‹lLjbã¬¦üÀ°Ò1+òÐòäpððlÝ°Zû0²gLubæ1É•	¬Tìüð®ëFd°ÐÓ¤0°åÊMçOul§\n0J¹„)\rQ\0+q(ÇQJÊq1ZïŒGƒí	PD5æJ¥'¯À-ãc{JºMÚzñ0å¬4áêMæˆjžjkfEŠØ‡FJ8kEôw.~¼džöãs°÷„^c8(,íBœN/h îc~5í*ãë\0øâBù-FÓòYŽ@ pzîF¡ÊÃ\rbÞCRçJB\0Æ€ä\r€VŸ€Ò`ÖÑ®3]ÖD¨C`ª\n€Œ pŽãx|ˆöÊ³1ðÙ/B×>µªKì8nl<ÿÂrþ½cxGëž@ÆòlÅ¨æ1BàRMÉ‰'¯²ò­¹J,úR'\"¸¦ CjMæ2t\"ŽµÍ˜©ªÁBY+ž6ˆ %høÙÆMn,årlcæ¤äë\$Ü«äèë¯ñ-åŽ&ïÜ¹«I\n”îåÏÜI‹òøK–åá/pšëÓ.L47ç=.Ë˜ÿÏÜ£‰PÇrvÊ£]CV@¯Ää.i/%’æêlê«‚/Ä`Åû(îÆ!†2ŠâV±†©*ÒPÇÐ4*¤z`n(°Ál1ëÈsÈÕ%Ë*EüÚJâãÜ—ÊhÓo¤,%r%°k…Tµ£‰*N»d»RþwÌ·/“¬Y3|JPà‘PÓnünvÁÑÍqhn*U7EøG²½‹Èp£8";break;case"fi":$g="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ½Ï[ØÉ§‹@ò84àPœ:¦C“æð4¯Pæß„>Ä	«›Š4¾Ct6!'mJt7.àP­ €PŽ2éè1`ê‰|6+\r#’‚–BRØ9?hÒ^6±Â‚X—&ÄÔ‚b4¦É`Ã¶è¢,°Ãs”òÉ€È:BBXÙ'ƒ€ò9-p×\"°\rë.ì@’6Ž\ne3>Ðüt4\rã\"†‚Ž®Ø@)Š,T‚šŠÉcOG%@œõ=ºÐ9ÀSÑ#£rØ52ƒ²¶ÔiK^Ø±­½ÌqúE%#°ê„µÀÃ]1ª~íB4ö5¨Ø‚3ŒãÊ3°öHé6Œ#(Ã3óºXå	ÓO  +sš2 èÔ¸)?MÀÊÿ(“‹Nœ\"b¢EAÂƒ%¬%©*ø¿'ƒbÙ\n\roTÍ.R`Z‚PhØ ´QÍ£v®á¯-È;”ºmÜHœUÊ\"¤33Qcˆë‹1, A“·A‘e€PžÏ´7µ¦*0˜d‹gQõôØ/Ë>]2ÌîóƒØv°ÙæHè¥ŒÃ4ª2…ª\"MA“ÄÔ¡/¨Ë49@6©•pÊ8-Š`ÜäÏm\\ÿ»`Ý;Í3Ó‘:'KB4¶™Z³©ÅìñìUîÆË´Oªà¿(\r\\±[\ny²dHöÐRm[`Ý·#»ƒS¹ë[³<ï3›Ù¾©<\0ÊpC/¦ÑNG7Ä§œ^ÝÇgcÐ2¦k²x!ŠbŒÜ©L3…Á\0˜¶wtèÙ‡4`ë{:kºj*ùãžé<¨=–#Ì£C¨Òš‰?Ì‚ ãww3m£§QÐÍ~—¨€úÕ¿ ŽAl«ä*³6gK¹©\$\$Å/ ·’èhYÁ˜‚ ÐP€s@¼‡x,‰;Þ@¸7‡ ÎË¼ 	7ò˜Á¯ƒÄ\n…ðÄI›˜\"ËÉ ª@xÃ>P µ(’@vÐŠëA-uŸð@œ“ vTçýò>b6PSº+\näÒ*³˜[	©zbFý›µr‚i§så\r”\0€H\nâ.ÃýÁAN&h¬:¶{Ò\nX4È*,;—vïNÛO{fÁîœ’Š|É¨K.åžÓ˜·Êw&*¨Åª¤–kƒÉ?Håä„´¾AÕqÄqB“P”gsy‰¹³V)TG!å31ldƒH¾‡2ú~å|±?êèš¹Å/‰É \n<)…@Z¦d°¤.†R43Ãlk”É>Œ®Oœ;(¥!NoÁ¸3ÎNIcÈŒÀddHšy&S\$Hœ,âxÁZ¬‡(äð#@ ¬„UÆø ¨—:ÄOù@b\$¬–’òbKÉJ”\"Çtà\"CÖ™9‹D4†öd\0U\n …@‹GÁ\0D¡0\"Òdº§Ímg ðƒŽ@‘x ¦ip*K0à…ïQ¬.@ŸÙÓHœ¡°”*b›‰ª;då£fÀ¦˜ “2Ø‰™d‹VRñ<(11öˆÿ™Y/%h¡²nÓÊdG<Qä ©E,sLŒ…n2¥à­+5|1A\r´N¼`c…À3{b'.P˜(XÑ£aúÇn¨Z‘ 	Asr	N öä[,©Nw)Ý½žÙQG(ñ¹6+M|#Uºö–²Â]ëN±ž3ÐÑ£¡ \r•¬š©±HªQ´64¼0š\0CröëMV‘ÒwtŽÙ“1/1{TÀÑwn«_ª\$‰¥ú,ˆ‹Ã‘%f.Œ^(LMë?åà('0óRUDäQ®‘3|èðRq\$í\n›’WÐÁÀAo2’Ðql»T”*†\0qGäé×\"Nœô§ðu †J\$î£²s%éÌì+p@Á.2!¥^(¬fc‚^*\rå¶·Â]@o»í°8lfNÜ~9³˜ñðFlƒñùöÆÁ¤Ódƒß˜Ho7Òúšt€¯ßé5pÊ£%ãÜˆãó:N¦«&¾#*aÉˆ]ÈÓ‘Üg4f™Ž@ER¸’bø‡èbT¡çN²ÎÈ»ÉIÇwÑ)Ðâdtâ“®®’q#@ß tq3#²æ\r0vC	šÄu å}0¤fŽ.—Ñ©VuçË<Mòë-—&ú‹¿\r6(uÎð¼\\càj¨¹<×1ýi„ƒ“—MÁi‹ª™VC7Ëa¬¥Õ‡\næ\0n**×jš\\½#2±RÚ“‰‰ŠMÁ¶®Q~Š[Xä¤\0êTZ²ŠGÑníàlb‘~>{¿t§ºt–ÀSd>dlYú”¥Ó	ð˜N\n6Ì¡7\n„Äò°¾†î…Ø¦Oy±ÍísîŒE4ôú :lôAB(*4¡n¸™z®®;±'8Ý·`\\­q¦rmù=yÍëß9_¦ºí>baøîõæØ;Rs†‹˜+–íÜò&ào¢‰•¤ö`8\\{©žƒE/³–ml¯¯»|ž2&RSÙSl¸üÕûp¯™¿eÍÚ²>èH…ÎófëÌö¿KïgtñÞrwÌœŸ\\è¾¾ìóÑ7ãË—}ª\"	å]0#ëÙ—×xVÊ!Si—!*~[çup|œÐ^ÃêP_§ ºÜ†7¢	²ßO’ˆØM€”èÜßOaë–~Ê‰wÄ?ß’¶BfÛÅ’*KÜªÉêŸZ×ä@*ã½+¦üúŠ¤×x¥Ñ~Ü±Ï¾Bb²­™õKn8 …n¿ÑWìé_ÅoÏâ÷Hïãßf	’šüÿzeBRÿìagž]â&	.©\"&”ã&ÂêÇgNì„%†îNÞÛ#6N/Þß2Àòñ.”è°>ìoôè«ª\0ÌXå¤ceHˆë\n\"éêÚF}PX£®˜bMi’¦¢LOB4ä†]b\\„¨ŒûÎjè §‚î°ïÿbm	ŒõÙO²ÿ^;`×«1ÐkP¸?â)N£	.Ûd&B†\$èÏ/LB½\0P„këâDKæýÏ¾ò&À¾O&Æþ©‹pìïî‡\nR¾ødN™/\0‚Dci\0‚=JÂC\\æŠéä®´Ï û\r°ë*K#\\êÐÎMÀæw`ÉÄK€šN¡l7lp<Åü-§\rB2uÈŒyâå\nìkn°âKp®‘'ž)†FÌdDDã 11„<”í'¯D~×g¬%ðîÇÄíQ¤wƒ¶~ †G`Øcn‚)›î.ëg8¹«|m\nÏ„\"S†µêB\n‡†x0‚ŒÌŒíˆÈ>nÛ¬n5J\nî\rî/ÊÐ”eÞ ÊïÃ”&èw…¦8c\ndd®5Ò\$8£?vDò,±c?Ç\\/cX5ÉÀ6c,W@Ê¢dwÃ\$é¼d2ZÑ&\$1h›%®_(È{-úÐç<†––È¤-Ô6É7 £DŠCþ«òŠßªàv­.£¥ß(Ã}	¯)ˆ¤Òâˆl’£*Ã|üï¸ÜÅ¨ui²Uâü¬€š\rîË¬›ÅÜåb&ã.E-¥àF@Â­mH\$Ð0íƒ	£€.fÂ:éà}ªtTò¾ªÌ¨#†d²\$F6ìvs7-P¬…ðM-“(q`-ª¼«\\#hˆb*ôèòa3i¦©„)1j!Gñ/ã0+G0k0°—pš¡&DeöMÄ-\r˜D\$FL\">";break;case"fr":$g="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@*#‚•((Â7\0Pœ7£*Žˆ‘zPÝ„DÊBÐ0˜es\nŽˆKðÓB“82Œ#¨#²q£&±'	Ü\n#¢´–:«ø¦<¹æPÝBšÔÆ0Z9ÇQ‹¨©-c]B]\nÂ®ÈÜÉ l;LjkÃo³:PŽÚµD;-b¡°®ÐÊ\$	;Ð¨ªuF1iðÞ!	@¦(‰¤L ¿\nd\"¥“õ\0ŽÕŠÔ|®‰ëž90S€Å1Œr»\n´`PÐŠzÃ¤ñ’È2&62tÚ.2xÆ€HKl[Vâ:)Úc-·D°®ˆŒìÜðã\0003³eHÏH>Â•Í[¦Ì{L–\$)}²a—18ä®C#&1¶iÂôÕ#mT»/ü~”Ž©ðËRâ\rÚû\nc©TPrQ\\§ÎE/{#©†U AN&2Eª2»A¢:F”FSK¬˜£š9²ÛàYbžŒSÞAXÓùS@è±d9¦Ö¨Ã Þ)ƒŽj¥J‡4ëªA’i06—Yièè¡®ö¡P3Ð(ýú:\"(ñ¹±â³a°¹*Îl³âS´P8èÑ«P2OmLû¢Ñ¡–X¥\r	s^¾0©Ð‰ƒÏØ½\rã†@ìi¼ô9i)²Y…Šö<µV“€7YòŠS…Ã¶Æ7dAp*,}ëÒ0ª/Oƒò¹VÓÖ s‡`Õ·áh:µ=°ÉÜý<îK‰Ð¨7y @!ŠbŒö¬°\"’êÁRƒØ²£r\rØW\nÊ\\6³È{*0,ÐÊA’X )¥æ¨”FZ€u©±»äYºY%uè½7ªPúž\réÐ”ÒFJ	ëÄêƒÂz¨f ˆ4ÀàÁÐ/áÞàÂÙ9%Áœ³HzÆÑÙà‰’‡&à!X_\$Ì,5‚ |Ü–£^f„=À^AóGSÉ]Ê§U:I¡™N¤Éø›(:¤Ø\\S4H&š³ôvÍKõ!(‘¨ær¢\$R%„±½FL ŒÂ|Bèf=@@P#Ô875fAT\"†˜¯˜ÀæHCq%9*	FE5Ç	™y­§Á—hLªž(„°:†×FÉO9ä¤ÉÁã\$*_dl}ñ¸:†u6Lòi\r+Ò=#NjM\\+ÏÈ7‡“&BÛ-2¬¥•²Ò’Q	0àˆÇZQÜ±3RnÄâ²ÓZÜÓ„!!@'…0¨Ož ^-Tœ*C\$Ùv,Ÿ¾ò¤lgRÙb©F_E9öO_K‹ÆÅì2GHMør^Œ‚DE1M¼ÈTÀ6ønÖŒÊð\$E,­“^ŠèF\n’)3C:ª‰‰+%¤¼®Íy²LIBI°ê\$¢BR½?É™&ÕÌZÁ<'\0ª A\nTÀ@(LµMgJèÆONÅtµuŠR€ÂS1½Dè¥K„Æ\"wQˆO….”v&ki©“?(9 £E6þ˜ÉÂdOÔÖ4†D\0S›4pýâkÉBC¯–*ÆµŠS©À l§ÜüŸ´òÒ“«LiÅ(ˆ>’ð‰ŠÁ	p&Å>´ÙvJŠW™ævF°:ÐÚIÒä..P®˜´à[=®m-a@7ÂQp-êKH–ØU´óH@\n\nÁ…²eÆh+âR)ÐtöHIw'¨I‹ÈH\rEoœ‚DÒg¾\"ÍYØ »åQ&Æ\n\$‘JÙÑ	*X9T„îV°TºÈœ‡¾ô‚QÌlM+•Ú0PÁJi‘‡È–÷ÕŸAG´æ‰\0`&þÃ}b0¦@¤‡†ˆbà8!\$C¦“†BÒšRíDËX&è©íH™õ…†zˆ¥ìUHf‹äÜ+LmH%£©\$á»\"ÂpfQPrR‘OÔ²ºò’/I¤í¤p0ÄHvLÆM£‹”Þ®.8Tˆ=8#£T‚ Aa 3¶R®¡(v…FÚ7€Èrƒ‘•7ÞC2I¦Êœš×\0¼h¤Ì*Þ[?/2ËX»AÊ›Ç\"ÃcLÁÍÖ½­(Jn(½’”éiªŽÃÆššpÔ.mA¨…F¤{:MÌ­R°CJ³†	b€Ú¥«ÑÓ.¦Á“§µ¡õz#ÖZÓOk}Fï¶xešŽMí6Ó§u±Ô;\\ék˜ÝÓÆæÀ˜ëÒ:Ü‰v7kjÙ‚ÊdÜèšuÞ„ÂJ™ÈÞs¥±!–l [3N©à\nÈ†`+Â˜W¡‹rë%_I\nnoÐ:¼®¾&<lA9ÐGDÅ£àGJšŠx¨¯h~GBB[/lîÎXÓ¢÷ÐtØ?{-6fÍIí²2.Ú’Ã&UÁ?>Š]Ôk>‡¯Ô7G'}&ÝóðéúlÏ\"Þµ–É™·Yèa”ü¥\0Uúùgì=uOñ2è\"§§¥ãÙë%_î*_Tæë¥]²-(É5ì:\0 ¡uÝ½&ãÃxƒi»Ë#'µãÄ¹û¦Iò.\$bý·UÇzÖŠ‰I+\rØ·b\"P\n+7E†Þ½f­­´d'¹÷\\ûm»Çp¹ÊGûYžük÷¹iÅÁÜ,ñØ»±“ø^Á³\\Ÿí>GPÕh›44ûó¢Vdîœ¶{ïº·èÒãî5Ç×¾ÿÈfB§©Í†?œØ? ÈÕ¡Ï	ì}Ë°ƒäl³éÀÊÔ­xÒ\rPÕOæ-\0îô›®Öî‹ÚÜÏþMvÝ°!/¥\0ï<îtèlx¨aP•/âì‹:ùp6éª„ÇÐ>ÿŽÙðHŠ0LÇ¬®êýor)JÂs«X#Œ^Gh8Ÿìºß ÞàVš©RŸ(¶Ct'ÊØu¢€pch\0òÓ°‚oƒÚÄ©ŽBÄ0pib /ÉB=ØûM¾^ Ì=ì†‘åcFjsÄJ§ ‡Ð;€ÃÂd.énÆpÆ¬¸¤QêÆîPéðùqKÚì­Díê;±èphàO«…Š@z,ÄÈåoâüKné'16éW¯ÉñDÀ8ýNîüŒi\n‘BÌqT=1'1E¬±B†åÎnRiº:\$„.hÄ\"Mb`e)é%2èO_fû¬&÷3L¹ã‘§ÑqZDÑ^‹@Ì]‰BÄîvW&>c¾7/¬p~Ì™qØXƒä[QÓjØd*gbî	ngl™kg/Æµt2qü!qù/Ùqú;±ÿ!1±ÐóÂ9 ÒÆâo²ÈjÚ0Ñï‹ïÊ’?•Ò&³2HEKˆúÌÕ%r:É,„É„|Ðr@Â’DýÆÉL‡&¢»ñLƒ2w&l›!1\"12Rkr†Élš0\n’—'¤~Dì\0…ì¾Ì1pÊìE„Í¦'1ý¤&Í„ã'ï£(.§+„\\ÍÒ¢t	ôüì¶EŒFê„ð¥ì ÇÂÑQæ!bF‚ºƒ6eŽŽÒK/Ã:!+a0.70RóÐÞ;#{GlgÁ@ƒ1­Ð{N”Sr!(3\r3¨§1Fk­€3‚tbÄ\r€V©\0ÒgcV3¯®¡-6ò)ârû‚ßk·	ÃS4¦X•,†1c8™jœ\n€Œ pÙÐï_âìóÔóH¶1,\ng\0<ÞêíDê–ëx]”ïqÈ“åèI¥ ^‚;7¢MÒºŸfFÉà@SØˆ“lþB`œ¢Q6Šzðæà`¢“,~H\$†ˆÑfð±ƒ@Ãâ\r‡\"ùÏfEâ3£>Eé–;nx)E˜)Sí‚Ä;)¨·tïsªùv²­…D43DnØ;DëSDE³4³¯NÍD_E4b* Å>NØt#¶aÐîóÐè)Dy\":^Åò¿¥nÐ‹ !4RÄîü­Ãü®\njV•JOUJªbÅ†.:I.±£Û-InKP*ºQ(nœº²ºP¤´êª®bXBÞ\rÂŽL„=è&I©jÏ.n,`ÜÎË–¥r²Ë¦lAÉR÷o‹Aë)Pfòt&	#3÷Lä_O5ì2P %Ë\0Ëá\0ÍMS3Ãä`ä\nGh\rÀ";break;case"gl":$g="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ ¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„Bòßˆc\n†ßˆNêQBÊ¡BÀÊ7Ä£ äa•­ûÔÝ`P¬™6kð§4©È)©MJ Ê½Ñ®!¢²ÂŽ¯£cË/¤*£†:DòàÜ2¶O‚”œÍc”h¬ØÐ:âJHD£pé\\2&ðó’)Š/SJšJ‰\0Æ1Ä+êS3ÄâÚŽ;hä:¶HK~&ìjŠÜ5-ÐPTIspÞ7È˜Þú¬3ã4!´ Ä<´ HK[Wä¦2ÑÔ‚*ÇˆÏÍ!²@P‚3³c<eˆO¸ÆÇ¢ª¢\r¦®3\0Ç¨cœäèÖc(&HŠcÈ&\"ªgB*	ºÅZ4|H§5¥s¬ö2Í\n›vÃ± T¹8]´@˜È\rÃ7>ß£ë4'Å\n:CÄÊVs´ÊÕMF”ˆS\"§2ÅQ>;·#ˆê2ÊB7LåYc~€f)ÎF.ŽLÍ’É\"ƒPÕAñ<ô’¤ì¨Š<hŒ~\\2ÕxœÌ¹\$Ñ\$æ™\\¤ƒX4‹~Ï²­ÜþÎ³ZdB„ØÂ9åæ7E’;g¿¯fÖª›d‰ýYŒ*B¯Ö«B)ƒv7\"&Ü4îÔ©æû¶Ço;”ý¾æüWÁWt»ÃÉ\" Þ5ðB¦)ÛÐìÐ\\£wVVê!4•BÙâ¦•ŒËÈÚÏFãzi³%ã{î°¨2;dN‹1uxXeNxÁ“µoÓä3>“c98|Í_è¦Û½0.­;»HM¦2zƒ¯^0£C63¡Ð:ƒ€æx/ð#'\nRqyà¼À@Ãþ`éàˆ›’€Î¿È_#çT5‚ |ÐÕ“—€¼0ƒâT HÂh]¥X×ƒæœéI)gUp“@‚^SkBÁ”18#8ÑQk5F8þ\"À€ò\0ykÐ'³òañý]ðB\0 \rí\$þ\0PUI¹7…M²vG‰4ie\r„¸Ä!ûÁ, ½ê¾cÐúda;®¬PºÒ ×¨x|<Â•äH‰¡@¡(\n]È†H†ÓyMCH+=·ºJXs\$%YF7òÀ`\rI±&HÝ–&ÚÙà„á2@rR¬Þ`plè:R‡~‘Cº\n<)…FFN[zíY‡Unºôtü\r»¸_ÎAêÉ•Âõ£!›6A¤;²BØIi= g†¨M1G4ü ’ŒWAfóÒHâtO³0¡*E“¹#É1uoÒ¨•™4¬^X„Æš)‡\"ú’CÀoíù:ódR0(N¡°6\"¥\"\nVQ6!*P‚HZ!J/ðœ¨P*Z0I°B	áH)R:KIÂ E	–Ñ‚(‰WóÍ\rÔ6—Õ]P\n P%\r  „ÈÚã]%4:£Àž&âÉ\nÓè”’VF“º[H\rð½wb³Œki<MíSªôæJÑt­´LB÷Yk…1ì…5#ZúÏ:w1KÖ¼ÒBŽóÖ?­BÌ²9'ZÊÃd‰µ6ËÉK€0­A›©D’‘ÑYT)94OVËÓ\$\rPÝ ¬R¢Y*Àé@³ÐêÅK¹‰1QæT˜°˜vM«µ}ûhU‘ÈeÆmoð±B¨bÓ›f–æEê'EJq£Q§:ÜNÒÙuo\0Ê¨ÔÙVl!#FÍ9³SÝc®II@ßÝÃzÀRåC¨¦üaˆÓ¢K•ó'UD¥\"_ûJ¶KÚâqDî|t—©FG4—ŸBCAj0DŒ¦½+«êÏ„Ôž=	]q†•œ¥Šo†•°)›S†‚3¾d¨å‡£f©@Óò'E6Y¥›„²ðVPT\n”l\$b^1(“ÉüÎ‡ˆŽÌXr)õæ™#<IÕ¨ à](L·–ImË¨&Š¤”ÔgLú	±‡£ ÂÞ\\îa6‚á˜ ™ò¾jÍ†ƒ7¸<È—Þ¶tÏ’¯@ÒóX\"5çû=’‚hç[hEe‹F¾ë”¬šÙHç˜¥šïƒyºa6é©£L©ê\\Æã9\$–†^b[(éæ|z²Íõ‘]‡aÌÂø‡Ÿ	¦*“õ*¡£*V³fóûc\0ï.GÕ™z”z%yZv™›”ªœ¥”ÁÈ@e‡)\"p”zbŒ„»m…êsÕZ¡¯¨¯¼xN°cs&˜=ã—7SA42&M\"omÿ¾qÌœ½.~¼ƒ\r}ìüÞËÿˆF£7Ãf‚¬11¤qEZ¥ÓA•«hvêÚ4v¿\$‰}í””J{\$öŒ®×”ë!\$ÓöI¹i.mi*®+à‚gÊU‡\"»øþàSiP’¡\0\\õ•B\rËªª†Z}Xø^\râlâÊWé\0ŽŠú%ão®Øé\0Òû\\¯½›}ª<K»Mœ²¶>Ë´Ë'Úì÷YÞ»ù”µkÚ87}f]µT§_g/tj0„äÊ„?Æ Se8¾ç	œ´\r‚8zoÇHï A<š6òÙüþ†›¤\0E°½ï‡aZnè7íÅ´úì/ýGýoÛ{û\r›\0oéúa—¬Ö‹ï”oÐô‹7v LäŒ)Äm¼”8z’„ä\"Ý19;mDê%³°ÿ¢ÆèîŸ½®7ëCâÆSƒ—ŠÂÞøßñ©¬Èða_zA¶q˜ü>­*„ü%>önàëeJ\$ãõnÓ\0îþâð¾tT‹èïN0slpà*Úð°*,0.z/\0ï€Ë¯íë¤v:î£p°N2.t:ím„bÅà‚_\$€@ˆàº(ð+F\rçÀá0çë©p{æÐïŠäðfPX¨ÚlŒ7–(pRÅŒçlz««I	†æ©î”féªä†F>£>Þnëb¼c\0R÷c’zðÜýpœUNÓ\r¦WÐ3ƒqPÞq°9Pë©Oúp‘BB%qðKQOTÞ61 æ}¬F/1!ìDYïâî±=,9úe5‘6ñ«0SQ@©æXª0U1+\rnøŽ*Ë¯DB÷P7Ç¢	¾&\0ÈÆ(F+ã*GCêÂ;	m¸w­(bœ4,ÇCZw«dq®î€†êCs§MNLGQÈàVôÏ4xLÆßŽô¯NèÔH@Ø`Æu Æ‹F/©â«ˆZAÍàC¤×\"‰bŒCpN¯\nYìª¥\0¨ÀZÀ5KÞÖ¬ÜÓlã#ã#HŠUÂ.#\$*BkÎkI0áå[\nqšXb;¤’GcKæZÄëzÂîŽ•`P0	¨~\$0ËÀ –êŒ3>('¤Eœ:ÒšcIîò¹Œò¸kã®Ý‚ŽèKÐì@·cû,(Ô‹d2ÊyÎ»°Þ’½,ÒX1)\0ªâœ)ŒQ-Ž‡-ÒêKà,\$Y„’Z+šRgu«º­®BªN¦ª„ÌëÓê“\"\"áZÀÅÄ ÚB„Œ ÞŒâ>\\MÌ«æ”¢rº‡u£nÅò¸&C/Ô6ã*\$Â6Æ•¢.’_+5­Ý,jÞ%F…Îå2S€ñ²ÔiQ[…EC¾6³V7ä©§I ‚Íc¢7â(]ÉoNŽYà+àÜ";break;case"hu":$g="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­« PŒ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:ð1e³Xò #d·‰f=7ÀPŽ2¤ªKdï‰Š¶\nÃHä‘0\0‚ÞŽƒ(­ÅläÖ1ÐøÙÀr%%4HœKÑC.1	B®8: PŠ6¾Œ ô=”Z	#hàÛ2Nt‰)#B.Ü„SZ)Š2j²›Šƒ§*¤¯\0è9£ZTÆ»âr®Á)H™f’lÂöïOŠø¿\"Q%QU;®ù†M\rI\n®¬À(Èƒ&ƒ _X\n%…bMÃPè	m›ÿUpðê7\rcÓ\riÀÎ3©<FŠÙ‹RúÍÃ•\0\ncxä1&*@Ü¹±oªò•l ÝwR¬PÙqdtÉµ(#ò˜¥‹XÛYb0ê6CÛŠcÂ7<‹aKbkÊp: ck|®EJšWƒÎ¬ÎÑÁÀUeÊíôÝ.V5:	Z\"®ø¦«ãÙfÌÖ¯p˜ÃJEÅæ³f]-¸W<\n\r“húãHê6öÍ8]KÝö·ˆ£Æ±)Õ¨¢û Wzß¢UƒÛ¤EyøŽÖ|\$îIKÓ5³Z7ŒÃ2€…&öké:>¢ Þ×ãÍ7c¨Æ1°£˜Í…Ã#~£Æ‰ä<¦8Â»„ˆ6®øàÊaJna‘2ú®Ñ×ˆ@@!ŠbŒ˜CxÝ™ç…˜\\	k`Ø2WïPä˜Œ3æ\nùŒ:Ä(ð+—Aðn‹ic\r\n¤Ã#(ÔŠJ|Ë*Û9ÓÔøƒ½%ÐÕã¸ïä‹Žc˜ïuWã.½).]øx˜\n@ÌAhÐ80tÁxw@¹µ:Brêà¼„A@ðV\\`iw@¼0äÊL\0íj |ÕÔ!É€¼0ƒådŒÒ‹ dèÂ:”FC“‰9(T6½‡´B\nHe\rd(5‚Pä`ÐnAD\"B®vJÑ¬zd¡>@ÜN1//M¤\"@“¨N.ñlÉ¹ÄäQÌØt3ªèPµG<@à \n (EÄÎ°()ˆ(9‘÷Vë[ˆ©vX7°Õaá;'§üá ôgSTm\rå*3¥7òÿxj 3™óa :AdÜ\$‘òiÁ\0dF¦¸¥GÕÞpH!ÔÂ” Ì‰( Jð8dÃa5¦há\0Ã¡ŒCZ\"“ Â˜TÆø»5R-—©ÉjýäÍ5JUÊAÊŽd;Lw8¤ÔÜPäÿ•fxE^{xJB›¹‚Ú‰\r2uHÂdmMi´&!*GV&¯Éë_)H8™K‚ARù”…ÎHPÖÂØÔe æ°ç€©nPUK<9käÇ¡l|Î\$A<ÃLàTÃ)¬iŒ`£>òLŠ(EGéªV²ØEá”3R§(l–‡”É™PÎW‰ox+ü:'¨ÖÐÚ#jg©ˆ“Ÿ@*\$gNÄ¤Šc°Í{¬uÒíHI¼ËÊ	Omi¼á‚H§-rhõÑ,â~´ê·W-ª½§\0ŒvËÚ7ÍU(òbÅšÙb†<Ù&CH*`+h’QÇ3Â…-æ%ÁšËD‡‘ý!£¡§Ñ²’Uq}\"‹d)Ê‚%E%dð`ÆVC%c®å®@:úÚùƒ?&êˆTªFÂ«Îý,T¹@.÷í®©séÞ*³¿aÃ’~\\'žUew[ I¢ŽÊ‹†È·V*ÓE\n†Ém‘¥[}!\0r`)ìŠ_X\r™¾_-¡fØ€ÂWQ>F@()1Âïc,}4Aå£0”@€!Vwî¬ÄæŠB T!\$	fF¢ÁoR±ˆºþOÐi]“äÛ¹À¼‰b‹•õˆEƒ’ÃWù!1ÕWâ7+G 9½Üì¤\nÜ¦©eNW3×Qé(åÜ¬À0\\k6(øàå±œarWÊYP:eb—òÌàË…%\nf“˜ò^eÉ¦'È\\¢ÐƒU9_8_¬äs³¥ËŒvg5h”j‰V˜ÏÈ|™È.5ÉUD›…m”ô\nËI®¥K€î[Â2&D¢“VC—mÊ†ª«º´ë`A9d(t6¹´¿£‚4˜‘@\\2†#§DoÑQC1k&8vîö1Æy åHVM;mÁÞ™¦§[2\$Çåò>[T¤¶N}+H–~&é%ãÜõy8WE`”+ªNJÃa¬B³‹zÑ÷âª·Õ˜Þjðö¦£^w‘{lf}á†úñ¯IÏ\nV\n™TT}öØ•ƒA{Ä¯/\\þ…Iùj„Çüá\$°l‘ÙÓ-%2®aÈPRÚék;¥¾AJÑ‚@É)†šƒdiŸ=çôÂ™V£•Ì	Â|.÷j!IÆâOìyÛC¡&ë]´NŠUeÒ\rô¼iÂ\nHéW?!>XD²Û8ewá’i†NÏ_Jü¦ñF,öÎÍ\\4ËeãbÛŽ÷jæÌ8¡âØW¼!žôÐÙë7,æ»pîâ™Ï{ýñçùcà\\i6©œ4ƒóƒuÖÖ2~tV‡lÝ–46[Ñxú@É½'¦Ðy¿#z“eêó¯®ô^sÏz}ËsŸ½FÞ‹QŽqÃx}øOã]Ï2óþù—»¼•‚‘äûé×¼'w-PÇÁº}mª†àÃ3]Ë»/Fc¬ÏÎ÷j|@\rnd˜ýñR†?.j®‡ªêÎš6Ïâˆ‡2=øÀ*ªlé&)NÌüÈŠCB´ŠãZ0†ùO¤½¦4¼î†Æ±® lí ¥jZël8¿¬<U‚räHùÏåF{ù-å¸òN8yë™.4ñ>OŒÐÂnÒñÎ!Œ\$¸ÐTóNÙ°‰(&ì\"#ðˆó\nÐ;ð›Ðrlæz	b´¸-<(@<®–!â\$ã*ª*H“ƒ:B¶ÞE8ô0s\ro^¼ïžB°à°”ã¦ZŽ‡\n	ÞU€Š\r‡¾+Ä20å\n%¥E®Ãpªm¥Àû‘g¤¢Ýc¸(ã¢%éÀèãÀ]FÎ=^ññ8H‚•ï+#Øó])qOÑU±Fðð¬ÜJtøîÔ×ªrëúÌ¦lî&C£ªSq{Ž¿	{î sIö¿0Šyî#Kõ…)‘[£¾¾qž—±\"h«ÔFð¦¸Íä«¤ÈÃ\$I\r®ÖÕdÆÃ…\$+ÑÜ'ñÓÄc6¸/tNÀÜ‰¨ž>ê¢J\n@HŠÌ@‚ÞX€Ì±`Ê®\0/ì‹!#³!g»!Ã2¯2#!F=!’,×‡ÃGv§ÂVÝlÐ¥|É:!¥~ß„0ÐìºÎ¥‰%€÷¿&%vÞ²\\Ñ+pS`Øi€çÈŠwIò©)hQ†¨•@Ìs„&àŒ \r¾b”}@\n ¨ÀZ>/.<m,÷êk#ÿ#Pt%,,R½,®],íz#Â@\$BH\$ànBbb^&.\$F#Ë+r’Á„ä.~MŽÝã?dD'éÕ0cª=‚œ°m	(0I._%V\"††&ã°7¤\0cƒ°U!f«àÞmCÇ4Iðj‚•#|VÁm\$Žp)B¸ÅJÜ\r¢â.0&*º0Ãˆ«R/0ÛÄb3h N¶%öˆ¤b'Â,ß3|Uí½…(8ƒl £TŠBvN¶×GH0@È™3œ3Ì°d+%³Ý\058åØb€š’lŽ	©ÀÜ®¨»FÝl*bˆ]‹‚ºK¨	£|Åª¶Å~J Êä  Æ¦¦§óµ@&ˆ@þ#òçÉò	CVUD<M3ó7…–²c4%\0=”+ŠÞm…Ø-aD3†¼Â*¬ëÆ)þ'D\r4.Mn‹\rñD±†‚²\r²9<\$ˆâF£:ÇBÖk8\0à@Ú\r ";break;case"id":$g="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶éi*<ÒŽðÎñº\0Î•\"IÌó¸¡\0îƒ=mpèÊ,ÂÂBS»Â8Ê7£°šÔ\"#2à9B°Ò9=o;„÷Œ£k\\”1±@¡@úµ:î;d¸BjV:r†‹@#Úœ£ÀP’Õ³\rÊ6¤#ƒ+F7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ:½ã”ˆõÅ«’®\r[.ïNJ2à¹B(Ý\$Éê…Ë#ÂèL‹HÐÉÎ½BÎ93)ZÔ!Ã ÒŽ'(¨ÖŠ³pè¿7#¬ÜÖºë‚\"('#T§½¨Š&€¼ TÉZSsØÊ6Â>•²P„.	,¼&IÃp×JJT°@'Ž‘4½Cˆè/m…A9Ð1ôÐO/H×ºê\"–×]L,›Ûâƒ(Ë3˜Ë'5c|P\"½Ã…ô—\\èÝt6Z·|~è\nwh8L´XÙ	L;™1ÃxÌ3-#pÊ–‰uÝÏ\nƒ{#%·RÛâ:Œc`9ŒÃ­x6\rã:9…Šxä<¨Iga,²6¡\r¸ÊaJ[Üj†)ŠB2ž¶\"	 \\	q[U-¶ƒ8@3_Cn]©iC½×—Ù®‰…6ÅÐÙ¢!;¨ãð‹(¹’[!F	š29Žc½õ,Œ£ÆJš˜x Ì„C@è:˜t…ã¿,(z49×ÐÎ£Ý\0ðø/k(^4Ã“4:q‚øÄÚ\ra}'ŽŠ<:xÂ>r¬¯,Ú4åÇž#rNIÛ¥¢\$‰G67³äÅÍÉ¼ 4ŒÉmù>5Î ·O¯wIMŠ@ œ'TÐÉå§ABéìùH½ÌÚ À&#Bèü¨ÌÅ\r3Ž£kÐqNIg¸Õ?×ÈÖ”Ñ='äå© äxO i\rmÄ¤Ð’CÃÉˆ'idÈ&Â<ð\r!7RÄ:“6ƒ’ 29¢PSÃA˜/h`€	šy\$h…\0žÂ¢°E³“Bbç¢¦AJm4\"àbRI'ˆäíJ² CËnÁ¤@óåXŒfÄÏ3†P‰4\\­™seˆF\nŒœ¥“†¾ˆÚakp¤6‘hJá!jmKbÄQT€O	À€*…\0ˆB ER(@Š,‘A80¤°A!Ñ›“ªxð\"P†Oú«U¨*I¹FC0aeÄl;xJ‚Z väÉ†Õ¸½	è9òŠ	%LHNùÔ:Ì&¿2¤ýJ\\Ì‡„Ð963.NÌ\\ÊLl5nšU¾¹—Aƒ[ÓLÁ¦à‰122P¥ç\"“\\UÚ#GU’ˆ¾äèd@FÅX½ð@ø_HHÍÎ?6tš3\$e4ÖË™Z‚¤ð`…ä=/p†ˆ¡¡Ff`1šÉ2g£	\\¶gµ)zÃ\r¢	O”:P„’¬WÜ!è÷çúrÍüGO	Î^­Ãš¤B/e™´\0Æ èŒ¾(È£(5ä§J)’%Ö&È£éAHÛ„úcMj\$Hâ£ƒ¸¤B T!\$H°ÌÛ1á½6åü‹+…Aó®‚‰'dü%2ŠðAa'*Ô	v	Mœ¹¬«>P&P›šä€Pân~Åü©ê¤…+&=dYM*ça,!ÍXsRÇ“»LNJý¯«(ï&€FáHw\"!T‘c–M–QÄŒÅ”~S”ÒK*Æs˜Hü‘©õ)¤Ý{]^Ã(b¡(jÓÜcìDBC·‚FÄ5^3Å_C¡ß9æ™;ÆâHÊ-é\nA¥[ÒSØh/ÅÕ?›Øü×Ž‚~P9K+Å56N«ÖOæRÖ`RwTiÁH‰*`FÈNÎ9|¹”D¹`Ü/Îž	¥JïMu4S›G¢X—•¬F‰lœ“ÌÚ‡&Ó½(<ï*ÄX^”Ú¥TJØ™!Œ¥&?ÈøådÓBo…±0iÅ˜ÿãKK²t¸\rìÂ>‚ƒX«ˆø)”K­ÍéÈØ°v ›DºiXNÉý1òŒçÍÇ›²†-ÅáÓ;flñš0þRÅ,pæÖ»s~jÄTŠOg’wžË¦ˆÑØŸAªÂDÍm\\.êÁÿ©£X€Ì½‘P¦Ê’‹1BÃ­›±uBT6µ¤Ó6!>š® È]_ 2ŽSÕRVßía¤2Ö\\\"Þ#ÍNŠÐ:©U ’T©`ð¨¤¶§K#é1Ù)Ar;³`’›¦jÅÄÔÜm›ŽÊzER\\kÊ„ppæ\$ÛGm’JzQ¥2©4 åkŒ[®±Uíß³W4ë×¾ôÆ‰ÅÌ¥°Ù¿\rhE¬+N%µ‡\0«üchþLJ0e¬ò\$šYpa-AM]“TŒÊÓXH°ì[CÌº²õåúië*KyåÞàšt°[QÊC¤™2Ç^U7\$éD}HVI×Óß:(Ê¨#ZNðD%	[Šk'“ØÈÞ¿ãý‰Jvž;¥)7IŸ]·©w4­*2¶Oíüu¾õÐòH[›G¼õ/µ*(i¨ý—5øŸÆtª1ñF'µc@Ijg“ê^f£€ ®„5¨Ü‘Ïˆ½\"ôÞB“z”	ÑøýV†!Uººª	9–§<î)x®e|V…úÉ-àÁ/\rýøŽ«M>ìÑ-hL6¸iâˆ±eÕ³š&F–£8L\$´#Fâ8u{s<(!T*`Z€’Û%b{ý­+åÎW¸rA¾›Œh	¯ÀÀò«evRÀ?ú,Ã¶<†â2j  p.ìâ´DˆJ«„[Œ¬(­ÄÊÂZ:BŠd€²Â4„P	€Þ(cƒHÎ\r¥ô1Å¾å†Î³M¸ªíâW`,BÈWëQ.a…h¿P~Åm`&&2ÅL:çÎÌÄptï`Þ IkÝ¬:ØÎÓ\0S‰ªþ°mOF•bt¬E†´Ë\naÀ@%éÄÍ‹(HË,\r#Î'ªòT îÊŽ©[\ncÎ/Â£Žæh\$&.f0mÂËPz@ìz¦bHn'†œLü p<ôq!ƒZ\npê5 †R‚41Ë”Xpê¢¤²2ÐôœîÐC\"†AæU‚AÏ@ˆCàB# ";break;case"it":$g="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iPÒpôÆ£ÞÜfÚ6ã«Êª-ãª(ˆB#LâCfç8@ÊN¤)° Ž2è¤ êµP ¬4ŽC£z65ñÊœµì,9;0&('C˜î´L1'P˜ƒ\"­Úú=<ð˜˜7­I(àÁ'#tƒ	‰#hà&c£ÔCÃBòÐ#	BB)Š.²¨–ÄlBÚ4CÓÀÓ0³,O4MHcDÃ’ü¼/Kâ`Î*sºò½¢Mbèñ/ÂrÈ;#ÜW è8ÈCÊ¨„´}\"ª!¢\"\$‹ðŒÄÓ@ Œã8ä2±µ&!°KêÎ±Ãˆë	‰ã’ô¶KÒRŠ£H´ŒéÀ‚c3ÂSJaL,Â\rTSï¦¥#Ü‡C¶ÈŒLeG#XÇSÊ´hÂÍ0®Ûk?O4J¹GŽ8<Pê1ÂQ`‡S¦	MêÙÞ‘\\×vG P Í³¬,¢8-“ 9á*ý{Œ¶:æº¯×Zç€ŠwìXã¤\nü69ÀS É\"	Þ3Î”œ–ˆ¬ *\rèÄš<¹l@Æ1°ã0êŽ\r’CŒ4–h0±«XA£R²Ãxª˜RúãZ*b˜¤#)É+déZápA-lâ`6&è4¼Œs²Â.J†QÄÐ[p§æÙÂv7¥´Òw\"ÞcÉ:\0Ã \"Èäš¦)¼]éÒ¨931¬o[*ÃñSŒšðx˜\r8Ì„C@è:˜t…ã¿ToÃjÖÁË@Î¢½ ðò¦© ^5ƒ“<:tøÅ²\rÃXD`ò¤‚ã}+Ë2ÛBœêZ<­%ŽRl‚–‰‰½¤ÈËD3;®húVÓ*¸_pó½)•S¸ü+»éóÄ¼ˆ¯rz\0P	@†6\\8((À¤˜°ÇÂŠ	-b\nõ\"&v²Øi#GÔ‚ðn™økÁ@ÁÓ*ZBH,”õ’L‰1Qä+?U\rI«TêÈòÒA\0AŽ¹'9pÔÃ=8æ Õ9=|?)²’`xS\nx)A¢©Ú9þ?¤aÁ¥XXÙ	Š§ta¤Û¦æˆðg a…UBÖEKé%4lõ¿a8 [%\0¦¶ @‚¤ZÍ)0—­éEÎÀ‡“~{ÜzNFåB,°ž\0U\n …@Š¤ø &YL[Ðé!“„‘\\(äS²9çÙ„å†±ST¨\n„Â„@Êœ ƒµY­@Ú¸U¥\r+ôœÓžØB}€¦¾l¶ÒÔ@T]\rªb£´{àË]GL%‘³¦[\rÛySg±uÜÄ	€nqqŠ{!3¢EMÉ™ Øš€ ¬D\"´:F¾(Ð¬`Ÿù!(Àé+Ègúy‰¼€g©m 2\$hMÉ¢…h–¢Ð®o“©—±7öŠCÒ«C¡Á \"Ò@Ê¢9:3½~/¹Ð™çU/TµA¶E¨ÏCr¸0è•.ôþžš8n©†)»\$Ÿ* ƒpŠ5x'ªK4Ãqj#° ÆV¤Yyi3ÈÁRMúÂzP‚¥0D¸µ†³2“•W‹¦!e‹A9,ÁHÈ›¹4L³öAFì‡/ƒDŒ•T\n!„€A‰Ÿ…ÒÁæ\\ÉÐD0\$å	eÕ›BQÀ€‚VZC\n”Qå¥	0°Ê@£©áašð–ÐM°ª.<Ã °\\Ym·¶åŠZƒomùE¶f1	\\7ÎNßa-	ÆÄ·9žµˆÁ¥=ê :¢GÚÒmåãŽO®7ÀVnaÛÅ²¹Í\nõ^SNnI+u¾°ãÞºèë’±ä4‡¶b&£\$\"«¡õpà˜úN•\r%¨(Žpä‹ÀPW¡‹\"üI.MëÁ42(ÀR¡háEN*iØ†R¢0Î–'´•P‹¶eÙÉ0µu@¢gF£gþ\rÑ¿2Ç”E£\$Ò¤ùèdr.QªŽ%n0*RèÑÎ¡r>¹X˜ÚŸGÛVU¨¤Áo±µ,%ºìb€+/cT'AÙé V‚c–²VaQ¢%MÒ»£ònæ&h\$!Àˆh\nYœCªDôååÒ_g‹/>ëwE³Š-	€(\r’ü2¬`S §\\ý*K\"ÍB»I	\$z•ÆX½E™rf®Õ	c/é>'æ¨5ìhâjL²ãÍ>Ö›`¯íi£ò`C’È²Â '^n6Z¸LÆÝgèvòÐ	Ù¶Ymå´ÌZÄ8ªûkÝ•™Y=f¬Ó,OÕ`=eŸc¯¹÷ŽéÞ{¬Ü/ŒÎ÷[HIØµß\$ónFŠ™Ô¹‘D“·Îþ™êr¾ƒI›s”FŒ±ïÂÄ†î–º˜÷™Üh–u\$ð>.[#¯ ŠgõÏ>pÝtŽð»Ê³ÔKšêÌkQ8‰Áý[kbäjá2¶Ý½³?E×´ó¤¢É¿›V¸OŒ*Ä`Û“:®HÞ©ëSušA¿œf<^OFXÖ\"T,If0î¿ºùQºL(A#Ž>\"h7è‹™,á°»?«æ}·³ú?\\m]ÿì6ÕØ‰ƒ:åô³ÄP ÞÎúvìÞ%PRÍpf¼} Žs…2JÊKE°ó—ô½JÚ”×¤N>yz¬»­w¿8þ»ÉÉ/i//u?—„ÿ e¨úfTâ§ë;Jx½÷Ø}‡ØqFOÞS?ß!Â MpnþÄ÷M\0}T&+T%ï¹Sð¹Gÿ!Œ­{÷3|ÍÐUsúÿ–T'b#;J\n¾ÿñ’ßöàÏÎÖÏü÷ï–% 'D\$G/Fd˜«O8Q\\i/0 (qâÇëJ0ãÒ-p,,­\"j/Æ’hÂ..BÜ0>JF#ƒgjãàÜk¤ÔeÉŽ)C¯b¿fª0jQDª\r\"ZÀÂ= †9ÀØh’ *ì1–™lâÐhK\0\" g°Š=ÉÆ*e!€ª\n€Œ p*\0Ü7%nâZ¸#&d€ëŒ¾Kh8©aÄÆ¦Í:o‹tbLÆ‚âNm…Ð/jÐCÈÐ0¬mpØgŠêëe{/¨À‡‚¦#¶…ZF„’/Ð`&Cª\ræü8]…ËÈÀbÀÃ#^¯¢ÌàÔlZ3ú4àæ,bÊÜÑXÊÇ¼\$‚1'¼›±l\$1ZZtNGØncñå.±s|žÚÌB@5c(ã\"èjh¢7g\\¦+BÌQ”6î¦UeZŸ1¿\$&/Ü—ÊÂ˜þQ¥…m:N.< \$&±cÒ:BèBë©çØ\"\$Ï€@D`Êê\"@ÉPq¶˜ ‚-ƒ¤XÅ¨\"ÂP‰Â>â 6qhaI°\ré´hÉ¬÷‰ØBr6O¥©ï&4ë9þ´« oFVoJ`H¬=\n¼#@Eož3FÒ¡L¦@	\0t	 š@¦\n`";break;case"ja":$g="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$Ê¨S/äl˜ ÑÎ_')<E§¤©`­’éé.RœÄËsÄ<r‘J8H*ìAU*‰¹•dB8WÇ*Ô†EÂ>U#‰ÂŽR‰8#åÊ8DB°Ò9ƒ¨Â6*„<r_£ˆa˜EÉÎTÇIBý#êe+ÆñÉlr’j¨HÎ³þA‘4\rBÇ%Ê¨—E‚®Y§¥pîäÔ£•EUu`’6Ž\r°Ú2Ã¤FWî Þ27mèæÖ\nbˆ˜4¸Nb9ARd~ž”äYÒ@=Èá&Ž±É\$ ‘'16Z/´û¬%uÉs]I@BœäÙ]ÂäáÌD•‘+ªóÁÒ@—1ý\$±DsHÀS\$CSÁÌR‡9hQ9¥Ùvs„|Ñ\nÒsL‘·“)*Ø±žÊ2œ«\$©o/\$Y+|B0ê6\rÛ’Û˜Æ0Îõœ–há<Ži5@g9+.a0A9Ï+¥iÔd\rDNÄÆR\\·<Ñ°¥ù	=wìÔé´¦\$<ô½om±m[‰éPT¾WíVŽ´üð¬ÉDðÓÝjQ%|ß{ñjQ&½Rìèþá¥aØ&ý\rƒ äÒ4Á\0Â95ƒxÌ3\rËi%Èýn”QÆD*\ríxÛ¢!\0ê7c¨Æ1·#˜Í„`Þ3¼#˜XÝŽ]èÂ3Œ/Aë¶@ÚðŽ®P9….aÈ\\§1[\r%P†)ŠB4ï2éŒarÙ)\0@¹Éh@Ç¼<ˆ3+V®È”÷làÄ»%D}™ˆ2†ÒWi>íõ*(!ALlU-üƒ¯QhuŸââ²°šC™ÂFÂ0îÃ’È¡à8'°Êp „Ô:€ÌAhÐ80tÁxw‰@¸0†G¶ƒ(rÐÀ3‚õƒÁÂx¤7†à^™ðr7Ò ó”ÑX\"Êí^†U~°Aà/ ùa¬PÐ±ÖJÄ!¬Ö-a]ÜPX+JÀ±`y&'Â\$ö'ehþßê(~@zƒrBC¡\n2gd,Äð(€ ‚PZ\rAèE	‹Ò\"\n‰&h¨À¤¾ûÄ)–â±\"cÿUœ¢4oò¾r›ŒW\n±£ô‚#Å|œB¯¤Ÿ„G2d\$•P0Ån\$‡@¶4	ˆÐ¿±>üŠˆ \$Ã”Q¬Ë‘„p•ù\0 ’EƒË¥¥då„²ÃrÈ8‡:€âMÊÂÁÈ7†Ð@bs®…g`\0Æò–Y»8¦è8=7^‚€O\naQ®-UŠŠ	5\$Ü@Á#‘«ò¤®UH”Ñ.§X°’H†IÁÕ„ZÃ V£Ù×5é\\\"’*JBWHiÚnwÊô7Ä×Liàf„À@©¬6ð#@ é¨×WÁaGêCZQ5qH¼ŠA,:D…nÔBŠv\"É‡(ºcÁ<'\0ª A\nX@@(L¶,¼¥U0¦‡(SzË—”ÎÌYœ\$>µWÐˆC0agk;'úšjni©áºÃÜøÄQÍ	ù\nB‚%­ÔÅ}!Ê÷,×Óª¢¤Ê‘j¶Æ|-ì ,…ˆˆÓ;s&`lƒÂ	å\$àe‚Àt\ni%7.*Ö»\r¹Ç‹Õô¿\n¡-U)D¾3î)…=u\\¬4sˆ¡l9„*D*,j¦¨ÓxšÀoÜJP¡*dÌ¬šHS»,TJ¤È#ÂVHhfG=}¯âˆX'Ü\\iÞ\r!è2€ ‡CCƒÝÅ¡L2›`Æpƒ!ï>'ÌºˆD\"¤rlq\r½O©·ÄáPøœÀK*’X°¢AÂTº±|¦‚[bè#ì°&‡,¢”dYfº×zòæ—µnÏ½-‘ü;’ófBÍäÅvæ¥º Ôãj#‰zÙ§ErGÅyyâèö	²ò/r¼cÆ	ˆ˜š\nB†¶w)Ê©UªŽÛ¾(*†Š!¤ÜºgPkC|ÿ7ÁÂ¶CyáËmRkµÂÁRLð àƒ\\™´Ñ¬3òˆ\\dÍÝ(A9ÌkÙ±e9‹ÎÄ „, ÓZ^TxÂ˜s(õÎ€ÖºËa´ßÝÓ ÄGskåžöÖè’lR®ã ,»¾J}PïTNR	.´—9‹}²f#>>‘¤Ð…¦…\$ÜRÆ³ÚÒ3iÀÃ(b¦¬‡ˆ¢bÀ0¦þãæfñTÑ¬u¾³]Â€Z1²9D\nú¬cqòœè½Ä¿ b sŠBð9EŠL« sa9Dp»@4ºGƒ ÃØró^«ßfÝç³î§Q^‹ÚE.t ª·NÇ\"AÍyu¾¨\$‡1–3cuäÁãg_V\$}‡hÂüã9#cl°ºužìº»ÎšK÷¶÷þðRlîãi)§GÞQG(€>„s<·ü Ô‡#=M©ÿ/ædFòžxú6Ó,ï‘>™G+ìÖÈ¼;`\">°^\"Ü™Ò —•öK\"ò¦HÀ°Ò—]ËÜÞãŽû™bÝ^ËáÞ¯‹vWm—¢\$›úég9>]Õrmväd;Û{üÊìW[ç}Û³¼'Ìü—R¡kÜä\\ÎDÏ]Wä{«ÜÛr\$ÙÛûòio¬öÒÝ\"ÊÐbÂ*‰¸n-Ïí›\0¢‚²ÙŽõ\0OÄÚ~¯\nô\\O¦þ°Ì°8Í«åÎÿ°6ÌïäØOÿ¬¶ý¡p¬¾#ìÂ—iÈ]Æ^\"´ÖNN}\"Sˆ. ÎÀÈIB4BÎ¦OœÌÄèðrohD#:ÛÇîýcF\"¾„Ø0ˆ0ŽÛÉÊ”iê·ðHŽÜÅ,È÷/ö=Kl*ŒÉMÊõðO%¼\\<îP\\Èðñ°[ÐøÉ%ÄðLtº0Bý2ë0ÿ.ÚÌ‘j¡Ê[\"ê¡t2Ìá¡6?B\0Eeø¡|0Vk#£E?¯ûïàÑ~0m¢°Ñ±a‹àa&HÌ±Œ´—ˆ4¥ÀÇÐ]ÑxaÆ›Åðýëà%‘~G1…/À'¡¾õL°LèG!cÏPìóE«p¹Ïùñ€#ñÄñoÏ]\$êÌ‘³1¹‚8vÅGe™¤éÑýA?P´©ÉÁ\rÃÛrGDy!úHqå e-\"\$}\"aÄÞÍ¡Îo ïÒ:ÎP=‘\0LR=\$Å²ûRU\$ÎU\"²bÍÂþ]±I¡a\"x*í\$Ní-2BÇ‘ï\"ñc²Ól_ …\0Ð†ñQ…roFø/ÁÈa0|a*†úËÎŠœ„’ÙQ˜™+èüáxæPñ)ÂýäÈv&B™ \n† Ç\$-e2ßíÂlEàëïúgD\r€V¢àÒ`ÖºªëZ\rŠ ÚXàÒÇzZ˜ÊÂX€ê…*°ª¤\n ¨ÀZ\0@X\0Ç3Ä9•Æþgd2É\$o\nnîÅò»g?*X˜BÎ@›35ÁD9Ãîž2l3S˜2#&ÚŠ~*„\nÀ¢z'òÜ1À˜ª©ö<@;ê­2íN8/!\nçjÌÁ9\r.òtG~hc…svÉ¢°lB0aÊfÓððö\$í®#)&ò_>TòDœ®²\n†~Ô£R5sF¢ Þ\0è\r'¶ÅˆqANÖ0â×±0†(Ê3¬NaÖ/ÀÅXýk@Ê­´^.Êp¥c4 ‰½8ƒ‚ÔdþÅhnô îO Â`ê Û;a\0`d‚‹€J\r=ç\$ÑÁ(bVpÃ¦]Ä€@¨SëGk*\\-hûk–ùå:`“û?ì©M&l¶×\0†uvHT\r4{C€@6”„MÎQàQ/ãoI¶2¤¤´²tJŽ•'@uJ\0t#\$";break;case"ko":$g="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ²0T«ï“¡Á‡i0J¯äAW¯ðóìBGYXÊ“ÄƒC\0«L´ˆuˆÊ“daÚ§ ÑØ	,RÌxu•EJ\\NB°Ò9ƒ¨Â6H¤i`­¤\$&†É¤TEAä\\Èv‰e\"Äg«GYM'—\$!Öûe‘lßN3š!å\$Š—E»*NÒ1u°@@„áx—&ue;OÒ\"HÚ87#hÊ7‘A[8ãxÈß8›^)Š\"`Òâ¨'\\Ý8NRÝJv%„ŠY–“ÚYaz‘0ô+kÛ%•¶ƒ•³Rö”äbbRBHÍE±”¤¦¿…ÚAÌˆ9Pv'û.ƒÀÈc¤A‘2)TT&%ªJeX¿’ïÑþ?k5·#IQ.¯AŠ…?& (\n#£`Øß9È@9ŒcÜðØ¯iT–”Êÿ\$dy2vÄëìüIo;§IY”´ëvÅ´¿ÎÇiRe9pitÎ¨jO›êûÙÐ£-–Ò±*þgî„W]ŠŒŠA16¤jíL3Å—EÔIí6••I–”­K«Ó¶˜iúŠC>^×À6ƒ“NÔ„ä×ã0Ì6<ƒ-“NSË3ºM`P¨7¶Cn\\<„¨Ü9Ž£ÆÞc6J\rƒxÎòac|9uÎ0¼‚×ãkÈ:¸¡@æ¹ì\$À]d‚f!ŠbŒƒ×±XÏj…ZìNØviAÃñ6…ó¤¯?ÐÏŒ©\nœê7QFF{¯t<öó•„6ùÈSh(!40‡3ŠœaÜ7‡%~CÀpLá”2=ÐxM[“Àô€è€s@¼‡xLƒdxÁ¸2‡ ]C8/VðÈ<WVCxnà‰”#v à_9¬¸5‚ |¬• eVÊàðÂ•Ò¼\r\nù`+°ÂÍzÇ6pµÓBÅpsÄ#òAd©@¡‘RÿßD\$H9!\$(h\r/4Á@\$ƒÏH P³ò<”G`¹A@„ X‹‹!,ñÉ•ô*žƒÒ±X0²LNYú äÌ¤¢˜AÔQ2&è R‹Â<HÈ¼ h¸Ò€ˆÇ\\¥=¥õC 8\0‡£PI#¡åÈ@Ò¯ÍŠ¹XA¹_œs’˜q¦ñ\\†`äÃh 0©ÌÀƒŽ­Á\0cv«ßƒzóšA@'…0¨{VZ”NQù(±XVÒ¸½4¦Ft7Å*SJyQ–2˜v\nCºŠP±Bh)]'ÁHÐ±|Aš[F—ÔãÍS-\rÎ¥ZøRäA\0b\r!œ,@˜1¸5æÞ`©™r¿\r*Î«˜µ3¦ƒ+…¦ºñ2.X¶“í=…°ÖÂp \n¡@\"¨@U@\"„À‹QØ[Pª¿‹*´IX¬Lu<%±pÇ×¥ð\"PÌY*¹É®e—ñz%X©µyŽÃèÏËøƒ%ý÷2üÅi»7‘òEVÎ–úœ›ûG3“Ì 4IÔÑ”ÂvŸh\\ý\n9*äeomÄÙ¡,œB÷±¢\0ÐñØ Ú›±öuÀ´…Òº×híŠ(—¿2Ì“¡L\$é/ÛN W¹ü*‡µ?TUÔtŽÃ¶6G’¨¦ä  HŽ¼–²^„NÔõ‡-ÆæbÏiA”9 Eä\na”Ü†3ŠÉû°O=èÉÆšáZ’ÓnI¹-á)TkÈ‰\$Ê…P,¡cmíãUÄ•Á/uÂ'Öšá[c²›Óšwgçåwk•ÒœPÊœµÃíj¼*%H+EÀ)Åü[@uÁ\0·bŒTÑ“BJJFÕXu¥TInÖÁµT`¨BH*†“xä\\™°\róà‡\n[x¿Ut2K‘äC,KóÄ\0¼.âAþZ–¶L€\"	f%j0•ù‰‘P–”¸³=ÎG=æòk(ä9|nµm†‹˜àhóÑ¦ÌC³5PÌÙŸDNy±™ó70UŒñ•ÌÏè‘•‰ø&*Ön%“’²ZKÉ‰>è²Á½%åf‰‘©õFÓâŸ\$æA\\2†(þŸ‰V(—Sa‘;5ÓhÌum B¥?D‰–h|R¿EÒA„ŠCÌ@ý!‹ãe˜3dØÉ™S.^—*aBÊÊÙq-¬tžè\\ÈXû`q½·}™(7\rro=Ž…ÌØžºJW%»ŽL^ë[·‚g»½³¶á¦šþð…âJŸªë4;Ã‚ðþ,G±ÍT4&0S¤HÜ,ÅÁöE_&÷çË_.0¤“–ŽÇçÈMTåEÿˆÜd¥–	Ïç8šl­½]Iqé SÏ9ÊO°Íù:YìÙÂÏßF8÷ª83—jœÿãÀú‹ã+¬7ÕŽÇÖ±LÙ>2Þ8ßië–#ªÚÞÝÅïZ³]OºuäíÛÂíj×àµÚ±e»ÑÏ¾ícÂá–¶ <Kƒjî»ñ.‰¬¬n2¢æíŽ¼i˜æÁWø’¦¯ó®ÿè]çËï5…ˆ3…´[ù_N½ŽjŽpïo…ûu¯î£¢ÈÓÒQZ‹ç´¥ÛòVÇ\nc9gdžMÏVŠ—±’M@šU	TÅÁmÀíÛ\$x]Õ¡>J §û¯‰Ÿ£ß„~Zx°r¼%~ïß÷ØWÜ5~<1+Àõj¢Ä†¸i+öò¥´ò0ÏáZã°ŸN‚øJø0Y!n*NÞo-¾ÝÏz4ÏWP(î/Š³NðH°(ðIpÃ0D%§ï QÊl;¡\"hÈ:ÃÒH¯>Æï<Æ°\0P†ô‚¶!*_bpË°€#¢÷eÇ	eøÚÆï ú0RmE®a2',bOD‚²á\0:N€Ÿh OlCÁÛ®Ú´4ò÷Æ&×÷ŽÒ_„>O°¥pÛË]\nïPD\nF¢<¬l»!:áPé„hÈJG\$vû-þ®ÏöÑ!Ñ'*OPúÈQ„ò°’n,BÃÊÍÒ\"ÃŒE®‚ïcbŸgñnÃ±sPOQYP¶Çä„\0Ç!dÇdedlðæ)l…	ñ¤>P6] € Ð‚}„FÂú¬,4&Ä“n_lÌËd¶ö2°ÎB!`Aë,#Ð^óÅÔIå¦«ä#ñPx„·c÷Ð`…Ü²mê \rñËg\r€V›@Ò`Ör£\nÖ\r‰–Š ÚWÀÒÇPXâ‚ÊDW`ê€Ê2‹*&\n ¨ÀZ\0@VàÇ\$ÊßoP3íþl¡@lá21JàË¾âèþq+FÏðª1Ò‚@›\$DKah[!fHÊ2Ã0j,TÅªÜã&Ab¼,P‘\0j-,¢É|< 	’ÌWh5ã†9mÂa\$\"OâaxÿæèBÇuFZ8±bàð(„@Â%–â³ÎÑüCõ/ñ ò ¨e,ž5ƒ]%i°\rààŠV¼L±1Ãë.ÃÛ.Ôžæ´æ\näd4¤äB*¾+Nxýn~DNšE @a8aFE)ƒˆÉ¤×3Å~LÀÊäÊ Æ ê\r¢þ)# ¸~H¡mÅò…A¬Nt@å/“zH¢–/’þØ²K®P¦tê¥¨Ê¼§'7¨¬€àÓ7ëÆWão8pý\rÇDÊÆ_Ã¤¬b=å\0CÀt§!B>\0";break;case"lt":$g="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nÃäÐ´#RìÓ(‹Ê)h\"¼°<¢ Â:/»~6 Ê*©D@†ˆƒ°Ê5±Î›<+8×!¢8Ê7±ŠÈ¥¹®[‚B³|¤%ŽjŽ2¥nhÊ9EË\"Áí²”µ\nq á¥ðÞšÅŠLz7BoHô¶B„¤4C« ¿Š\nB;%ÏÔ×6º	RÔ\$¯Ü˜¸ŽAµûNÑl¨¦(‰ŽðÊ’#£Æ5¸ƒ\$Ä¸Æ‚”¾í¡”ëJ¥Xäð/+ÚúÞ²=•#S¸‹‚ä¸/xê¥¥ìPÂ®-A(È=.ò€×Ö3 –%`Ž‹°HÒkø7\rcØ7¡¢ÎãY´€\$Œªâ*¿³c˜ê9B’4¯Ï*W.­ƒRT‹•PåThÛaDñK†‹3‹4¦2 #šV†Úc`ØÕµ¬¨æ1Œ#s›F¬»¶m•ž:´!\0’7n4Æ:PøÒ½ŽNØü:uJ¾]¡-.3(Ã3“/6á£ØxÑ&<?s¸™ö€æ”¼É\0ÌËb_£I³PÒÍ³¶º>V©F³ËVK›ùœæsm3’îhÇŸÉ°ý¢ò£—CÈÁÌ¨Þ3ÃbÏGÙã¢S<ëø¨7¢ÉXÜ<â£uÌ1Œløæ3¸ZD³qÁcO”„BÎûÉÍ}ØàÊaJH‡®i²Ïd%â¦)Ô:4´@a\0…ˆ¦o–\0gˆúÆ6Û–”Õe3¹i •P¥ðÿ7ïë+Ò¢ÉK‡&[	 ¦ÏêÁ‘¿)SÒ_`ú¤ºR—¦7wÏº¸Ë6cRF’ÎR{ô cºÆ¯Ã(xø½>ÀxˆCAÆÀô€è€s@¼‡x,ƒdt‰<0ÎËŒ ÍÇÞx\"5aÈÏHÍk\r`ˆ5‚àÈÁà/ ùA(@Ð¡˜é+#GÝ@‡žâ”Þ|I\0‘H@CË4ëœ%BqÃ„En¬Ä\"öCL&-eµ”\"<}»ò?19£Ä&@P?GðKŸä\0A:uD9³·^GŒË®p‹Íã3G€Ò)¾0ˆ­A’rRJÉi/..–\0Ú„ÐHlˆÍù	ÔRMŸbq&¤Õø(äkÈXy2É“™clCŠ¿5¨ãêgÔfHð4ßÍù¨. €1’%iÍI/\"&x’ô^Í£í	áL*HVÔ]ÁB]âùJfÒÍPž\rdaÎ‡#ÒþåÝ4ÄT7bÊ¨HÞx®”á¡ø¢}‰ÑŽ•lAÐš2E\\êÀ,³eŠNâàªK\0 ÁR9;ÃîŸZÔD#òì6Ë¡‘\\,hÌ‚RNŒ€TN.aó8Ð­Ë;d†áIR’äsJDš.†`‰A”fÁÓJ*]¿µU)))\0\"-\\60\"K‘\0tŠ)\"R@åT\nª%¡”óHd@@ÈkRU±ÔîãÁ3—¹‹¾„\"¸³«#„y.¤ÀòÄ“Š¼oÇ’>:ÒRtßik¶F“!›[Ne¡u—'»NIKsšÓ‚¾+V„Ú!¤á¨ûW«ÎSPor!ÎL\$%v(KPK,è}¢óÊžq,\$éT¤÷AÒ‚ˆÆþ8G(¿Wtä'I¥;½C‚KÐÊ¶6íHÙ;FyBe#¦å¨&(hú’Pzª\rL“‹€c.a’œ×+]cõx!½&ÄŠªËÙ\r¹ªÎ:S+&Ñ£‹ù\"2õ`oCuó%¸Q@K#²'`¨átªõÛo<`TnÜÖB¥â,©=`Š¶q)ižTb¾Ä';\$ReÙ{£\"…3ÆðÐùj³.D2O°`q;µ1¥’cìŠ©AÈ@¥\0‚ Aa Kl(gç+×•ë˜85û¶I\\O/lU‹¢B\\Rª¢Åå9b«¥xÖQØHa§0åã,ÀPUÊ¬e‘ŒdLÑ¡\$ìîFeÓ³gÊ\0.9¨_1‚]›E~o0¥1öç2ŽG³¶cÏYó?#± ³Ž…#Eè›>ccnÍñ¹\0±lû•¬áw êÿOhÝ¤\nfaÔºâæâ)œîªÍd¹	êà×œ/0VÕì©}ãŠÃ»&'bq‰výN	ñœÖ¤d¶lr¢ÖyÄtY(Æ-’ŽøÚ˜P7¤]vq	œh5 Ög<géSÊÊWÕMá‚ºˆ%é:Ký–qT™Uöf+–þ†KÏÅ-.[Kg‰•¡§¬ˆà¹~Ö.k Ø\$EëlÅ±ýÝîI8•ÏzNzñ‹cbÎ+çØ\"#OîY\r^Ä¿Òò@JàmäÇ!…ºZ•—29ˆ`ß592ÒO<AÌÿ¤N…Ñ!5>¦Çþœrð×ÌZqÒ¿7Ò@p‚:kú™(^ˆU,SàKÁC&À¦œòŽ˜Z«ü×±¢^Á¢[Gy»MŒi½²ÙönGÜkßsä<?»´«Ý:µæÇ\rŽÅ÷–oc¯!+â¶‚¹ò0§âQhžÈq¼é®vùåÅeêxj}¿¡4¶_òÚQ€Ÿ7‹UžÖú\rözAÕxçWôÒïyÝçýj¿ÌÈLˆûÌn0d´£û<ˆñh·ˆþ	/Áò3ÞùyðÂR›?ÉqI°3`£6Ÿ×‹¡ Š‹+‘æ:DHîH#­eÍÒQ\\ä³ü°<£¦Y? «8”œö”¸¤,ëô6N\0007êôÆÏîÜâŠ(åÚ5ê4ú/”ølýâÎâ†Ê¹êrö/4,Œ.g¯æ#Î\r%Xø‘ÒñbXíðH½¨äM¤ðcˆUPL<ÆCTø¯BI¢)ðGlc¦ŸÉßEPÖÐ==	8MH2’¢ÂN'Ð,#Î!°xÖé*N¦X6c«+4óS¼ÏNöÏšÒ‰šöÀ-Ïªä`–Î‚<r‡à[ÃÁ\râlR‰\rOPTnväPâZé®ù0¿cÀðø’®˜ëj†IÄ3NÞ‰Q\r¯E(¼ð,¡	`œqÇ%„j¨q ài¨PZï¥Ç‚ýmÇd(\",Œ5ÏŒÚL%n÷ÑKL)qP‘TÃxÃc›Ç6Âqˆ	„J-P®F„¨Ç…pNøñžJÇìð°\ræxAŒwÑNòi¿ÀÒ—BüÅPôó±Šu°ðp%xSâþX£3ð2Æ8 qÜÏ,Ã+6£®mÐðÏQá\rMC…\$6o¦ÊD{ÞWí´\\­º	Ñë ÄágDÌNÏDã*ÌÂ	#(õÍ0e\$\r€V˜ Ò`ÖN *¤–åPd¿g;Âz3ƒ*\rªX*sàª\n€Œ pârb:HõÍž#\nÔÎ,ÊÎåy	b2¬@Ó u)ÌÎØŠÄ¼Â#G„BnDlV.Jº\0›& Ì%Ò\"¸Â£ŒTÌ	ÂÆ-‚ö_cŠÀÅP8Î`.d'è£Ú~2Ú96x‘è,d¾y¤Ò%Ä´FŠ†²_ Þéc¢	“\"tbÆ2£J,%ÊÙãŒJ Å+Õ,gÎ ì`¸+aB?ÃBâ3D?DŸ)kã(è(%>\rèM¤­5‹ØæoŒ°à¨5‚à%ã&EÒt˜sl#¥öº@ÈãÓv}DDÇPLH…À\\EP²Ä³fª„¨å„hï&ìF®ë æ`\nŠF‘”&ÓJ%ãé5l`Ìgð.bÉ3”Œ î¼àÆ ê\r 	ä¶%P@Àà‚-ý3ÃÜN/Ü<r&F@æe@¨bÓR»êÓ*C°yJ¼¯\n²äÓ5ò¤ª³nÀà†8Ä?&ôG>4\n/J>ÑÅñ)ÜDÊŽÄ#\n2(ž²\0/cÒ@";break;case"nl":$g="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ì“Ø÷!ƒ’”2¦C2ô4˜eZþƒÈà’2I3ÈˆŠxþ°/+…¤¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤¬ˆ­Žƒ¨Â¾Å,Â9¤ƒÌ’2®jâBO”*9»c²+Œ#Ð:êkŠJ-¬§\"‰#r^3¼:<5\"Ž ÜŽHC`È	#j],&hªHMˆÞ”µH\$¨\nbŒŽ•¦«ür7*r¢ä1¥ps˜Æ¬H¨èöÓƒ¨ê9RXÊ;„Ðá)Ê”ûjŽÕ©=^9Ö Pœ¯µ`Ò•Ë!*R1)Xa\$V,H%À@PŒ:ÔåšÆÄÌˆ´Ÿ¹k«‰'¹«µ:Èˆ#2_¥8Ë¹QxÖ’„(Î•B\r¥Yì#hÛ%ƒ˜ÆÞÒ\"`@7µ£”Ë3Þ#­7'’ï=®·##€:mìÚ1Mõ¨Ý[×\"œÍ,; Ô=/Ž4ƒ®æKlâx­õ’ P¤2ÌÊ%A[Èk\"\"†kO1•˜Ù‹dì‹])JŽn7’C]š6TlÃ5VÆÃxÍq/C*j*×óœëPQ	8ò‚S¨Æ1¤ƒ˜Ì:çóšô9ºÕ¾0Œñ¢Š½*‰HÚ½`Ã(P9…-ÄöŽŒ‹À@!ŠbŒŸ9ap@ñBÒmNƒ!2ì£Èmþ8+£-{«ë(ÛÁ¤àÎ2jõd©\\+ÊŠ¦â\\k @¿ò¬÷/Ì×ª‹–kLºo\$¸øÄÒâ¿¹ÌkqAã¸4AÃ0zLã£táxïé…ÉŽî½ŽArì3…éŸºÿÇCJÄ„M äŽžX¾Û\$ãXDP4„7à^0‡Ð-\rZ|×HaQ k¡’—·èMB›e@J Ÿ”G@™C i3È|„‘ó_Îþ@xÉ\"‚àHà \n (<6IRf=ìPì‚\0PU[éoéù®Ò6tžSÔ›“’vOSÒ&8n\0á4{Ã£Šqô RjH yiî®â*LÔa²*h88‡RŽ1L'¡2=w,lNc%ê<Ø›5^G	¨P	áL*Ö†w\r™P)e6\$¸³\\›¡ü§x¾pÒJcºÿ\"‡&s®K8c,Hh3ªr†W‰©™ «ì¢šÂ^LUi\"pKö0bXiNàF\n”­•hˆ¿ŒŠ+‡#ˆMB1v¥à¢Ä¬¤‘„’åˆ‹„à@B€D!P\"ÌP@(L³0³òS\nY\ne1\"6Lb\"H¡0™®ôŠn`Š\$”3Ð@Ã²O‹À(!¤æIŽÊ©?'ìØâ~Bxm‘¤\\6º%RxÏ+69„bÃXîÅ¡5e.ž!‡&<q\"l(i¹G©¦`·Îb»sF\$ëÑº ‘BLl†í\$ERvCK>dD™&‘eqe@ŠDÂ(I	Ÿ\"Á“§Ç\0«Cb@´í+Ãs'¬Â,ôÁ˜SšHTôH!Á¼¥¥6JÓûŒ¢ô*PÙÊØá5UAÞªÙ«5ÒÊq&AàÈ×#üp•r°2!¦ÀˆOËíDbõèæK˜Žåèemä ©òîi\n–<Žtõc@PP!°B»‚ôbÚÀt1ê¢Ã2R‡fiRTè\"Ã èE“j]BŽZË†³2Â Aa EÒÎÉŸŠÁÌÖ3©`ñqš–%ß òD	H/@ÊõŽJL©‘\n1zçE~X	ùÅ:Ë Êºm¢H	»d5¯žàéxýã»~\"†Q†+Ãpv%÷\"V\018W¸•J{ÂeÖEÍk÷±’BÂÏïuð8 ºëÛÛ¸•ˆ«b¥x>ï^ó½xSý¡´fE#·tÃ¹+(-Éâ`LŽf+)À–Éühlð‰\$LÖÙÀV£î•%±\rD\0001dˆ‚±KÆR¶÷b3˜ÍPp\\’ˆ5F”‚(n!ŒýÉ7“XŒ‰ee{,†T•ÈADåL‘£êê°(­cÂj8'¢8­âNtK\nÕC™ÿFOAƒÎ4'9èi—:SÏ:Ÿè‹Lô[>œ•ªœÜfu\0wÓÂÌ˜#sžrúvX+õ›6õ,é29]ƒÃÎú*'–=bˆQo%äô.âV\nUÑÔK4NSÐ€ÕF(•&b¤íðÛFv&²c—£d´BY¢3ÆÕ£›^ÆcÌžÑÎáÄÎTe‘±Í¥£óÎåd®2Fç-9”¤7¶@Éjðî—Êêå[*u4†Þ›Û|c›G¾Û®ýƒÄ7€g›\r.ì@ —Úc¡ùq.¥ç±[KlÜ›bl[Ýb¾‚ÔXuì\0k®ÎMâ‹<J)„(6cù\"uÁ,d¨7g,FˆA“/UÏ\$'§/#Ý*!R÷•Á“‚qú²¤t×¡òY\"I\$ü_ñ«Ÿ_Èé‚­Î0­ÖI­®ÎéßIEyVmhª{gÙÁUî~Z»µ[6µB‚’Jw„£=ñúwè)Û‰)5ð„¿÷m©–-scßÈ÷ªg§´³\0Pa›.m5¨ŽÙøi…44Q½mR6ð<W9ð?S·ÿõÛÝhîî³–‚óòVÓðOj­½âÏZ:«Ëo;Sí=…˜eé4í©Ä–­òÑØ´[Á@€Ëô['Žà?B/}-ØG÷väúÿwìîÖC“ÿ3û6`*N.åÅ§\n#ûZ/÷~f·û¿e”rÞ¯¹Ù2ð²®8íïü²,¨­¦ûp\0\nòWÎÿP\n#-¼1‚tH¯¶CÞÿmŒîcâ¶pÖoÄ*þe*£8bOà¤¹M*1¢&hPèAÀÖ[%4oP*cPÊ+Ó«S‚‹&\0Ï ˆ“ÀÒlŒ„Yè5Ið/¬ `Èº…~Kñ,+\n Ú*oÏ †T`Ø`Ö#ÂB`ú8M4ÕÂXH)!L\n92àŒ”Å¥Ø\$gl˜à¨ÀZX’GObj¼‚>ðÇ€#‹î•âVâÌ*»\"Šïî«ìæ#4(\">\$.Ägâ £Å8¬€šQ`ÒËžeâ„\",Í£#Ì´\0EÃ”|°Ð&PÕ£Š6XþÃ.›bò;bâA„’HÌ^ôÀ˜ÅèFÈîL.H@2‚Hä­¤On­â:.m\0gÃLh8‚]Ð„6°8NwŽT¼þ\r1åð3j.B¦3‡d\$c…\"t«‘.œ8nØ\"Å¯¦æ(ªMì°Om*M¥Úœ¥àÖOeá!\0¬2¦\\¾ƒ˜&å:¦\"<!BR­j^eLK)Ð'Dž*BU\0‚;`ØJÒJ«Pb?2V	\"%búœ„êq‘º(b¦L+,,qŒÙF‹&ÃxµêßÊÈd5æ»\"òG#QøUo¸ýDHÜ­î.C|ÚE.%D\\	\0@š	 t\n`¦";break;case"no":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß¾õ¡C ò80r`6° Â²zd4ŒŒèÐ8îúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b°ÒßŽ«s<ª+39CÎ[Àñ!Khì7B‚<ÎŽPŒ:.ÈðÊÜ¹íêÙ\nS\"‹ÎØç­‹€Ú8/0D¢û@è4\rã\"d7„ª‚\nbˆ˜4¤	KÈ67£\$0QSD½c êåˆ­KV;\r#(îO­R1\"6xœ<¸ŒZ1CÊ@„´…\$þÎ©øÎÈªZ5\rè»–)Œ#l´3AcrÙMŠiÛ¼4ËC:6³*\0èÀ­@6­ˆKS#Šc[7! P¨§#íÎÆBC\$2<Ë•8:¶-zðŽc\$ÀÍAhÖ²Éã Þ#ªÉ^§ÒÕnÓ¸Ž·t\$üŒNTDyPÈ(Ö5¬ˆ'¤l³¤9ßwìé!Èª	~_Â‚Ó@/+[\0\$ÊõË\0\"¥£…sà0å¬ØW®``·ôìCÃtð2…©˜Ø	ØòÜ#z0¹Ã0Íhª²@ÎÞÜÖ0ß2Iôb*9Ž£ÆþŽc5¨ŽJ™PXÏÑ°Â¶0ª\$Å^\r×0ÊaJR*ŒãÈØ¿.A\0†)ŠB6Z7×Á\0[4)s—}aƒŒŒ÷ãf\n£¤§ŸÕa<Ø(C”˜dÀÖé\\Ãbv8:[žR7<Ã;ÑÁÉH°@88cu\$:%)Z¢9£„~´LJ#Éô\0x0„B|3¡Ð›˜t…ã¿„1zâô´áz—å	T4Ô!xDºŽK˜éÜ‹ã;bAö),_ª\\Pã|öËÓ\n034Š+|Ò´ûêvÕ±Ž”9IÿÇ–ÀèNÉ±\r§;!ƒVÁdLN€R’’â\\ÊbæPÌ ˜x {Œ ¯ü\\@4@P°Iò‚kAE%4€²æúRË›™g­‘³6‡:æJ« Á¹ö?‚<¨ù+)ä¼˜™\$ˆµC1?ˆè¦ôkë{rÅ-Ìž…\\} q,Ø!\0@ƒ{n¤È4ˆCˆu?§H3#<C#Æ…¦d¦4¦™ÒüfuEÌ¤B>iZYd`4·†âÁ| e€È`csS/+“¢xO¡L‡Ùo*LÓÜ?T!Ì¿çPó¤1Ä5™\"8G‰¹\"\$…Ò?Òi&\rŽ4»@Œ‚\rILTß•#X~ŒQ!HÔ¥”…Ò‚ nUÆP\$Pª×øNT(@‚,Ù\"„À‹8˜oJgò&#Öp©LÐr¡Q¤p™#Ò8V-Êl\"UPµv-ÑªtªgÄÎ÷gè>]R@§c£A¤ŽˆQ\".„B2üžN²¶rÔ@“˜bHÄ¥„R(NFC8='˜Â3°H%RoN4…{›¨¾£&Hì87°ª\\‰çË8—¯hÀ4ˆžƒ™\r4Q> ¤¸ ¤ „P’\n‚ŠÏž±Ó ¥–§UpŽß¥”m*yc’Ó€Å‹JÒ\n…ÚIª0Ò’8C,¡Á¯'Yö­Â\$n¢Ò6–Á“rPu­DÎ™Ö»‹‰Œ%¬]y˜[#™'Y4Óõ\nr-eÄ–g—Ù¤.Qo\n…¥Ÿ•#sfMí›Be©\n¤Ø|”‘KX¥ñ¤ÊŽ§A‘VáIsÆ.ÊUÓ9†ôõ#ƒ—7Â Aa F’ M‹ñ„‚‡RFÅƒ!H¤œŒ›ãúè	áA-êTò¯yPdR‰Šô˜\0–[¥ÚæÏÌéð–ÔïA‹sæ™@\"é\0MïZ·Êúí~/a‹(p2þßøb\nbßTË<7ÉCO	ã=¼’·‡KæO/¨K×¬aËã‡°-ö%!,5?4L¯”nõ\$¤¥2FGHüØÆ²Ë3@J¥&²¨#L™@PW¡‹#©sw*¾,~gÅ	K'_I-Û-éØôÝ(’IÖj'-\nc²c_×ôŠ/äø\$p¥‚ŠaC¥ÈqÅ€¬ß\$!eÕ\0—³û³’:I,”ØI'œHs€2«CèPÛ©–Ðµ³GhŒôÀ³®\r“´6ÆÈ¨Ò!©g‘—ã\0ùPˆ\r!PLÃž«9z¿UJ9Úy\n9v%d] ¼åV¼¬ÓÖÃ*P²Œ`)A8÷£ÊJ‘Še) /i60:_v|'v´ªùŠSè¶þÍ¤”Óm9e¦%VÙÑäHçV\0vØõ9^ë¼·¼åµåVôçKs1ÝJwÑ‘ÞÛ³`b»á­êPÏ8`ßà…ïâ+ÁÀ&ÞcíÖ™qF á×´€àÎ%r*ýš~Ðñ}L&w\"³Ê¸„›,ó»r%š<°Ÿñ}Ï%PK²L²a%Û+'l9C€fž”UJ‚)Gž­MúóãOPÉB)…²Çß³OÐÙzßè2Gž²#ê¬ã<I9Gö†tâšSÝ;=ä4™ÚZJ¬ªˆ/âÌY«¹Ö¶4ù°\\Ô(jcÞ÷æ‰ßAwÎo¿î70ŠA(KÉ¼Ž|\\_˜‹ãô·‡åÐ¡\\9¼ eóÕœ+p¦2·	 ò&&œlpü˜LåÞ¾+o´·'Î¾ß…kþü^øO6ßÞnË¾µ=¬Uœsñ¸ †Ff‘÷{\$¿ yÿ¤véé}ùùØÁ§´	Ne;—ÁsŽøŠ_äÒÿ›ð†¿Çå8/Ê(?»ôýf=üÿÆž¹çÝhÏöß¯@ø‹ûï øbdØ‹Fµ‚¤÷/#+J4^þ08ï…\0,êø£?C–ú&<µpXÄ Y¦ê„ÄŽFâü¯Ï|ÒCþ¸ÏÖñœc2·o‚@Ž£¶•”bC–´bœ=†\\¤EŠ¼°§È0¥ÏRqlI¦˜(cß		iÖQäÆˆån í\nn¿. ¬	P¸Án\"¿Ìêd&\r€V\rcÌ!¬=­J¨z~ú~‰šSƒòìÎ 5i\n\n ¨Àpe«2X„ÂUbSŒò\r)ˆE-ØÈÏ¢&•Ì‚pâæcãdó¸Ç\rdCŠÍpZ=‘:8àZÙÖ4ƒ†Ý©Ž?Œ®×0ê\nhJšª€9‡OC¤A	N`V¢0'Ëj¨ãXÍ(6JP¥M¨0ƒÞ[éŠÑ‘‚>­¤¥mª\$ª\"ñ\r5‘ˆ¥ƒ¤[àà×Q”Q-}7c\\(qŠ:BD&c\"<ÉjÚç¯ÆcŠæD»®äÑÃ–	¨Â-NqH0ëlŠP.’NŒî0VšâÜ­ì°EO¨Âw êSfÒ²\0‚-ª\"²\0¦_‚û‡T9EÈÑVà#¤³c\$áMä‚²FtiÓ#\0b|Ah&BÓ êàLQÚý¯ß¤ d°[` 8bÖ€\$B\".\r ";break;case"pl":$g="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*#‚û0j3<‘Œ Pœ:°#’=?Œ8Â¾7Á\0Æ=(È¨È Ãzh¼\r*\0åŠhz’ã(ßŽƒ’ì	ŠË„\nÃHäÂ'ÀP¤ÄÅ`Ä0  P§&ƒ“¼˜Ã1’>ó‰jR7¯¢‚Å7#ÐÝƒxÎãcK–æŒ+«–¾5ƒš\n5NbHÚ8\r‰r :A#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…ÀƒšO#¼çR¡íD¢Nbtd2È‰Œ‰3:!-{)Nƒa×ì¨îµR´¹xÃ¨Ü5´ëp‚Ž?£\r«+Tóã ô‡¨Ãb†óŠc|–ÂIí>£É\"®££”Ž¯òü éÓ Ü£Çbºx0Œê\n”¿òŽt¶è#ê\nùQ¹¬£GR` Žªp@\$Ã!¸ PÞ:ì«ØEŽsÛXTò›æLÓ3L×šVCœÔ—DîöY—.YðÑ ^Âž~žÐ™²493XªÎ0Ú »>²àé\rKöP?Uì\"§[—¡e¥›ÙY“žm3£ÚŒ­¥è,àôþí¤+®\r’Æ‚ èH@7ŒÃ2Dþ&Ø4Û7°Í“Dû%ihë¨MX{*1\\dèŒ!b0Îrî6Ã‰¥«šƒaPñ®Bå…ÀO2r\n¸ËÉî<¯@YóÖ(»sÕPåÐµ¼EMzº¸Ž[×ö<—(4rÝÇ37sx¯{ÛŒ]ßÒx?Õ‰°œ‡êˆpÉ1Žèœ5¢\0†)ŠB0]Gû7Ò9¥#ò3]ChêkxMYÄ‡—tG‰[a\r¤ M“òM’¸s\rEô°—ð œë¦qiÁ93ˆK\\JÎ`kì¥„Å\0g%+)†’¸+	Ãó…4\0ÌAhÐ80tÁxwˆ@¸0†Grêà½@ðÊ8nN/l‚#Zƒ8eà/†(\0´Á>6A¥?¨PaP<á„'òÃpÄª-“èTñ}Bäª§\"”A	aA„¤šž‚zÂJú Î1Auó “Ù©à€(€ fÑ\rè	» V*†(»ˆ§ð¹É©8º²’¡@ú’òbLË²ðmD…“‘[WQÉÄú&m™Ì´@»)¡\rÚ'rB¾0ÊùCKç%DÑœ¨èÅJš\rgÁ½²VOIÓ'ó\0‘\"°Ä}•/à€-ã–N‹’\noäÄ×ÌgÒå²—D …²0^Ù.A##T	Q`m\rd|Ö2%*ÀæËw‚ð ¹’yì^{óT¥lùHÄø&Jt\$˜.T6W0§p™žÍSèãÎ\0f\r)¼ŽË0ÕKÔ+‰ƒ³ÁG(FjXê‡&ð‚— îGÑJ‘)è9%™jÝ‹ˆ ÁRVUz‹##f)Îì—`—IeÌŒe¹³BÅZÆË™@\rmx+°ò\")\$¥†àÝVÖì…k‰%-‹J†4†’¡Ð•ÛJTN±h9T&…W¸‚_,C€ žØW€4„¤£GÈI?C¡-¨8{LA×3(î£ßD	¡’a—';^Am‰B4FT”ãÀx¦ui'ÅÄ4Íå|@ih3	Q§»W ‰|%1î¾'y\nÁT¨¸çÑç¶†ˆK”À—ìâî¤XøÃÃ}cmyšRå6_!\nê¦	¨TT4µ%áŽ`Øõ¡‚eû‘žùÄÙC&'¹uVj¹p«Y–Bf¹@‘¢Ql¥–‹Á¥›´H¶®‚%;öÅ>C;4_AhÍ ©ª•VpŽ†/ÖŒ7ÒPÚPønˆÀÝ3ÃBqÜá”åß‹9¤™D6*˜ñZ“`ër\ráŠYž‹\0%É‡19=ôå|@„êlú Nó…\"âÿï‚Ð­÷Þ“JC‘5!™i-BzTžHaMe«T†ÛÃRÌ|*@‚Â@ !Õõ\r\0TsP‡€8U£Jf	LrW²M˜±¢?c@/+Î¡\\® È±Ìy‘ÔÁçTjS'{\ržž\$¤à)«õ pesÆÝ«ÜmIªŒ›ËÖ%ñÒëG·­ V¸%ºî–ÜVñµJº;	lMfu¬¤Ù6‡e×={³õúºYO‹(]¶6<ØÁ–‚ì]ÐP7WØlmÖ…²¶¾Ù)ûËj¹Íë½öæùÝ;íÓoÓAu©†^¥B\0ï|ªC¥§ÄÊÏÄŠªÊ˜å”Kuãˆd(Z#	bƒžä~*_\$@§zÆ¦¤)xŽ6I€“ÓY\$ë½p•È1i‘2ì0b–Sn|`€PHHË©!°dWÙ0oØù’Î–fWEÎèÏ£êxúwÚi;`U~ºJ]2Ÿ¤ø4ÝMºÖ¦¿BAˆ-ÌÔ	°TÂ…º](Q^û\r †8È¢wÎÏ\n5áØýç½õÎêPYø=ž-X-…\rƒ&Ž®«6QëöæÝ„ü·6rCTÞó¾™%ú‚Ýaìpõ¦œØY¤—è\rƒ\$È\$ïÇwê³^Ü…BÀßc¤ac­&6‘ ¢iY8H\n|­ˆL¯çûÙõä;/‹Ë\\{šÎ¾³ùÛÞ( \\¿©s¿e‹«ø0„™®OéïŸòÝæÕ/’¥Ü¹ÍÍ£´ÏÒëëª¤ÆiOúDïþò/Ø ( n…ï®¼ñ-œì`ªå¥\r£Ü›ŒÞT0üLà®\\.­ŽÙ‚üŽÕÀÈÞ°0v4ðï!„~ÙÊþJì­¦,Ú¬pTðÏ>°]M¿mÄ2Ê¼Ê*Ä O\0y@«ð<ÊL©	êüp#°Ÿðýo&7\"l¬ˆ2¬Ž°CªÍÄÚ°KÆâ‚Ãä¼Cð)BaÀæ±f8BÖsÆÂ!ÂZ\rÄ‚Z?,€F	ÜÊÇ Ê5Ît¥ÔJ…-ƒæŽd«<ÖÈl@‚ ¦Ç	°ŒÊlªïLgBˆsl–V!ÏÌŸëlÅÃ\"ÆtïÏçp`Å äUQR¬ïå	O´ð`¡X°P6ýO\$ý¢l\n¦†þåQ,^U¤æ`ÌònçK¥û+¬€±–—OÒ?ïèºàóqšðåN@&Ì|ã‘´:Q„m&Ö}1Æô«Ó¥û	§¶!àÆ=€8ÅäÄ¥RÃÀæñ²´æ®aH@¢Gz Ò±Ðo1VúñlNñq,á!/Å) ðs°o,èZc”9‘Â3ŒÝDç«¿#lí\$q†€RE^êjn#T²®\rbhd«ë¯±\0/¶JÃ#&£O\"}/ë&r}&ðY\n)\$õ&‘*£ïìmr—(¤æøpï\$+1QBTðé)âå+æËÄW*²tìrÆ:°6Ð“\"P¸ÊÒÔÄµ(NÇ,».,;\$‘‰.â|Ëâ\0E¬ñ‚ZKcîÐ\$6*Ñ{!r¯0„»0ïÿ-Ð\$kF¸\$oþ:Æã\0Â„ÀæQ&(ô²VC¦¦3°òHlFVC74Q\\C«nÌ-â(Hä_°P“¦(à…\\¦¶\r3bK\n(ujkmÆ0ã6*¥Ù7‚0D¥5bC€âã¤½­MLypdÚM³œ×Å{Ó~d‚\r€V\rbª¡‚„óèH\"N i€9\n¶©*¼12§³…dâ\$ÐÚëâø!Ïƒ ª\n€Œ p&ÍÂÔÓ*²lG«´2p¤÷ÇM@¯o3§[A#(2Ñ«A¤ÿ@ÌMMÈQÇhLb0ƒ©jB:?/«,/1+£ÄÌÌ°ÎóÔ]€ªKƒXÌ‚J9hõ\n…ø>ƒ öèH‚\n\0Ç»jéñU0`¯HŒ¸¯±\n¹ }+³îªêã¥‚ˆQÑz @Þvâbü„Â”¬ðâªZŠq/J…ý,T(Ãhz´º/Ô¾î«©	tÛJ´Ðë€à8EÜí´Øñ”ÜE\"Ñf}#Ð>E¼æåáâJG*bï\nMD¬\ro7=äœ“bê€4˜IãoRÐþ'JØÆ©HTÀÔgÂÜH©Ì(3´ÂEJDííŽÜ#ÆQT=ž„‹-NéÄí¥Ø\"€\$Eº0À¦|§ÎO*|µjÈ´¶\r#¶ã>!CFø£øJK™I•”V!7ÃiEÒR6Æ™Uuxz©Oñedç(’š-ÄÃ I¼©,	é‚\r¤TE„â-ÂZ";break;case"pt":$g="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ¨4£ÍÈ2¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›Lº P†0ÃiX!/\nê¹\nN ÊãŒ¯ˆÊóÇBc2Á\"‚²j:8kÛÚ%°Ø@!0Ã,-7²ƒ¥QB+#KoüJ4Äë¤¾ŸF²Ãý+K±pŠçLxš€®“C”‚2sc 6Ž\r|XçAaX:'ã#fÚ¿Â˜£%+òû^1®+Ì«EÌJ½:¥­‹Î:Ê¨Ä±lk”•+Ñ­HÆ&.U<9T­D'\rã²3 ³í¢ECÊ„µå|ØÒC-(æ±â0ê¬ºðJ( º¶mˆ(&ÃdÇŽ2²ƒ„`ÞÇ/bxå\rÒÀT61³£šçHrPÚ4¡)Êvž§ð2„Ð‚ë;PØ“0C^‰±Ãtlø§ª@AG	Œ€Ýt )Ch5â¡9ãäÁ¼€PÎïÎÌUXÇ%³t¹.S¥WSS£¶ùk­]—¨j\"æ™´Ë“L³Š)j\r-r6»ÅÂM\0º0N0Š<#ÈC˜¥inÂC³žå/Nrù3µÌ\\6<àSFÒ¥’ÐÞ3ÏXÜ2ÂÈ=ßK\"mŠBŒ'#z€ž/û\$:Œh2@3©5¼»²Acf9o#Î0¯`ÐÎ‚aL,7i@@!ŠbÇ%*Ö¤Áæ•9Izè6ð)bâÕ-Ô\")îKê9mñÂ	 Cžù¹&òú@¾«ƒ‚kÝpÚkòýÓ³¦OØx\"k\rÛ£¬0æ;®”WŠšº(x‚\rèÌ„C@è:˜t…ã¿ÜGz.ƒ8^”~÷ÊP9Ò¡xDoƒgHï/°\"zÁ>hÊˆœàxÃ>PªD¨µ\\ËŽ„u·Ö\$N	²2o\rg%²H@”ò{9å¹c.šg`'€Ð€\"/ÈÂP 6Í!Ý PTI'+ÈLÅ‡2<‡‰ l'½‰20Â¿¹xÎ‰†pNÎ‹©X ”2‹RÑŽhè…·/>GËñ1hÒŸrZ~•±Ò@I-¦DƒÉ¤@H|ÕA´ú¢”A½3«l¯’l@–ƒòjDÌ7U¼¤J!qM°\0žÂ¢F)lž?Å0:u\rÈmÒ¤ÈHY.7ÄðŸ™cÚì rÎÂ¸Ðsq0céÖ,˜üØ¤?ê7£‰v‹³Qçä4°7P0Tˆ,%Ç4r¤qñn!È’\"pÍ9\$@ŠlžÀ'ŽEÒÿ7*Tðœ¨P*Yë=Â E	~¦4Y(Ž`lYhÕZPt¬	`ÃJô!r<¼¥¡?ž¡Á~,ä^‡%Ã`º…\$0†‘Žr>. )h*r`Ãe£*5j·,wqž›NWªAV\r!á '‰ÊŽÚºpe.‚-ŠGªD#k€“ž·r€ÉÃ´Rt½’Ô–P—šÊ\rÊÔ‚5dßWÑrJU)”Ö-÷€“]qB\$†e­\"‚±nsõ(SrbØ©CGMý s/â	PI)Å°§xÁÒ¥‰@½'£IÃdW:íÐK2Ešh¤ÇÄ8*‡V–1	€) ”jŽÎy‹QqÒWƒ2”l²ò³ÈÖÌP°0Äl«&+•ªÒZH®~ž¥ÖÚ>W‹Ár¸¬’–µŽÜ'A¨KJ¾v•dj.dK>ëUÇ]¯ƒ­­B6 Övb¸­75Õ›’äµ+q‹vIÈ’ä\\Œ+2%ª‚j§¤Å? Aa -²ê‚›,…ˆAÁ¦Ú¢pC‘W/3ß6jäyar\ru%†õ€¢±! \"”½áâü±•È)ø ÏbR’:˜À'aÓ‹Öµv.ã\\UñÌt\"°Ù\0ÉhÂ©Í@+˜Á¤“‡ Æ±n?eÄ›)äts0Î9vM³áÇ“˜qËã*D\\Á/IÜ|Âù³/eÜ¼àoäRÄHîUJbÂ¶h¾¥cRÉ²63Ì·‚pÉãL)©h‚¤So%¡Ü2†+\$ÒónAúˆ)ÂN@Œps(÷oÝ\">yÎVªÌdŸV‘@’é‘ucV,¢åÒbàÙz/jãSØ^m®Ä4\n‘*m“‘¡PtŽ7¡caj®Çw[ZÝìÅJ«tuºÛ •îÊ\rõ»E*W‚ô]Q¬HNÞ«¢íJÆo3M“¤°çÑÕ‰¹èF÷\r3w-åÓoî\rÖAEo˜ì•EµY·%!ÏA‚£!¼Ðd†Ï*UTØÕ^¨r\nÐlŒícE›n¨¼ö|AY–áäÒŠªpÈ­¸k\r]¬üÑ95³§Umµ¶Õ\0îLtÖ­ŽÞæïì“Ë.sqõ„Í¦ã\"cF½’+±7ÇC3õ,½Õ1™œÚÀ0ãŽ²ƒ.É©»ºwe.²*‡i»s³¶]î•³»ŒéîzÃº¼~a¹j„!¡4/Eë˜æ™=Ð¬p˜Íž5ì¡‰F6h`7¸d7Ú‹ù5?ä\näp¢Nóˆ²âÅçÂ¡¿Vå–)boˆƒ’…))ü½Ûó3™w¨•ß;mßÚöež©ë£M¸i¥·\\åz4j“«_6ïãäcþGÐj‡Íw|Ç¸à*F’Ù½ýb?d<‹öŠÍÜ{ðwþtÎWßbEËœºoÀÃ‰ÇA¥;©:ºS{#.ò4Ÿî¿\"Šým²Þ¢p¿å\0+üîïÇ\0¥ª:bnŒ¶¯Ð%¥”Yƒ±b;«ôýdlúÇÆèýªÛ\0ëö'/(LªH?¬k¥ÒÕD¾[!†F%pú\n²°aO^üÍÂvsbùMÀª02p~õð:j&ãâV\"Ž!¯ºBÐO'¢üFHòj.ý£ž¢ëÀ½¸ûŽ Î¼PáÇƒPÉ\nƒ\nÃ•\rºª\\Y[\rÃŒ Ž=/Þ\n¤ÎM%:íîLËðöS[\r@	\rX\rãž/&aä„8ÈÃŒrFxf°¢Ì±2\$àÞŽ‚4\$l[ÅÊr6ƒ/mJ1ç ^6ì¬’ëQ^‡Ž°e)Î<àØ`Æ=e¶¤bAMTC:–PR%¬¢:m€ Z[Â¦š¤´u‰0‡@Ÿ\0¨ÀZ>cCíŒ¬êÌl×¨ˆtŒÊõHáFœÉH\\)¢8C'øŠ&â«pä—k:j†V+X0­ü\"„º‘\0DÆÌ[¢ð\rq\nt fÀ âY\0¢„p„jatlŠ.@˜™±º;²*™Â£p0@].º±ËH5åu«>på–áÃã>aãr§,¥ƒe\$ÒVÄh K\\‹¤³£^6Ol0‡4cGŒ{²dÝ#\n6RlN¨QÊ°·Rz4Ë´¨ Ês@Þž]àõ(’h@®U&~6%²3#”åïH¶¦ÍÚ'N6ªd]-Eèâ/:¸f´§#¬#\$”Ã;&¼eR^fR\0QDœ îÝÅ¬@	ë*ër\"òDÃ¯\"êe‘ó0êV\\8Ã§ÃÌ¨fgÊ{\rêNðf Ë%è.vâW/ï¯0P^°cž€IW!á\0Fj€CqDî\0qDh";break;case"pt-br":$g="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œŠƒJBÜƒ(ÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ C!Œ0ëLP¼BËB8Êú=ëìl&3ìR.+3C£¨ÁŠrj\nhZZ¤³o¼NPÅ.ÚV×GŒsÇÀ±Ì^\"º1«6&\rëøÝŽIèÜ• Ì¨Ú86±k£7hè Ì\0ŠbŒ˜³ÌM¨Æ¼°)ƒz¤¢âjDõ<M0ë)F P‚6 Óp@–¤ˆÝ=P!tËÕMŽ´èœ7«òJõ/A-\n1(0[Â‹Ë4u ÊÃªÂSÁm½<ÉvD‹Š\r8ÇV²‰£š!a\0Ø€°@Pž9GL¤:1´cšèŒ T˜¨Ï)Üì @¯<‹Ðƒf¬@UŠ6%,PÄÚ¢Ã}¾‰ò«D‰Œ¨Ýr óÂ8 Óo¢†©ŒkÓóOÃ˜ÊSõª!L×ŒÓJTøò`ÛÛ¨‡%dãžS¹pë+äY4Rq}¢›\r#b<¿ÅâLö¾>\0PŠ<\$(c)•¥É…üÆCCœMH¾c—ã/uè2•6Õ5‰{Æ7ŒÃ0ØÀ®0ÂÍ'Cz‚Ÿ0.:ŒhRF3©M·9ab\n9n#ÏµÎlBª.šaL07iX@!ŠbŒò%ŠÎ¤…ÁØ–º¨àÌ¾\r»Ê^¼¶+´ýF8é+{^´12É7®3oR¬zC5Œ;ö’þ?É†÷™…°ÝX'“ÆÒ	¬uB1Ã˜î¾P« àÍH|èy\r\rÌ„C@è:˜t…ã¿ÔG<J/ƒ8^•þw¢V9ÒxDáŽC;Þøúÿ'Á¬æ„ŸiÑ€¼0ƒå\0„PÄõÈž@è²x8Æí¢4df	ÉC”ØsàkL[=2npÎÀÐ…PC÷Ra1 4dŒ2	\$‹<\0´iPà€RJ‹22AÌ†âlJ	ÉòO¥°%ðgL\0vsEP0“¢uŒ\\M¢hnxØC7=:•\$BÃÃ³îtýúMÉ€a@o)@E*MZ*†Æ™ƒ²p£[˜þrC#îiÁ¡É5¶€TÂ	å…\0žÂ¢i1KÄž¿„Ô:5;-¤\$ ÈHq18k¼ŽHôêàô‚4eL»2&*øgZ‘\\Ž ðØI>@Ið7£@Œƒ~ þ3ÓÆè\0F\n‘ƒF†C ´>„Y->ônk‰:4Äùÿ;².ÅWá¾†a<'\0ª A\noOPˆB`EŸda\$&“ž26Uèµ‘^0Å‚=hd“¢xOŠÞágžÄ=•£0LÍ‚:´~½Œ“[R\$€Ó”RŽó‚Ù*<ú©bOZié!zn™Yºgj®b-\n7Tð fÉž¡)CøÃLÏ“n\rÚ¨ÐËJ˜ûS©¨½¦W/Z•Adh½&hÏK·EáYÓ”2NgÚ5f;AX…»…\0 y¾F±hT¡ÄePQ‡Ñ\0¬.¤ã)Ø©G¯ ¥#Hq›a¼6‰EŒe•XAtÙ4ö¦×JÁªä2)ê¦e»3@‘f-ÂÄ î,ÃP²t!Œ1vCKvdª¤˜[qn–ù~ ôx³ìªrË·+˜9ÐxÙŠ˜;Á•Ý“¢úßðr\"òBåµÆuîÈ\n\n@Ÿ'…´`YàuÈØ#:C}OyÒ1Í“^ª7e“ÙRu< Aa -‚úƒ[„ˆ!Á¤ÚC 9`FRý*l¯yiW†Yšuv¡pâM4ä^É·<,aªº›wû\ršLDLƒ1ïM@¸â\\+(Ë&)1F÷b\\i‘aÆ8ìÔCB~€Îzv*²mâ…¦|	Ê¼ÂæQ²âSŽr{¼9øCKŒi”Ž†71ÄX8åpñŽá¸b¹pÅeæ™òÊo(ÅHÑðîEà;D:¤Ì¯¬òÒ¦#\"Ï…6Ÿ…ÿ\n±ÝH/@†¤\nG2[/Šy•ò«¤Q	0á”1(ßš	\\)„ÞñóÄBs)Œ…žµ-:É†ª—«\"ð“F³/¬Uul˜ÑŽ¼Ï_‹zVãõiSêŠ6¹œ„ý‹‡]P™ö9³èY³•–/+!ÌdBVÁ;³(ÉÑÕQœÌ\rUÑ{ˆÆíÃÇ·Vá1{·r”•Uh]B8{ŒuêfëbÛ\\¯@2(E©tmX&\r'„:8²·Í¡Ú6Ëðø²‚y¸¶Öýº4jB7z©Rˆa\rj²:+xã¶ˆÈfÚ0ÁMEµ&¥²&rn7¨a´ûÇšµJ½MÇE®ópsÚ·Î6’ä%Üò­V>‘Ty\n5ªµt˜tn±-K4ç<ìœu†eÖºN÷ë»;¬ Nsr1œç¢æl)__ó†*ÇŽÑll#±“œ=¶ùdîäï{¦!Èã¼dCRnq¯º®é»½ÝÎôS“¹î{ÆNÜ›Ù÷‡‘ñ&ÂèÊ¯-¹;KÑYªÊP˜FLn»’©—ã¯NB6‚Ü£^Jßì%0ú;\$[êS«lôœ¯Ó¡ßXXå—‚Øïx…’µ)ýÎ¬÷aÈœù¿t¼ý±²¼Ú\\j`d¢«¥72ƒÐš“kÌ/˜ä^GôÞ¶àº'ç3ÿ§Ðÿ¨¨ÿš¦ì—ÕzøÿàÚç<ÿ¢êÑ\0\0‹\0M¸éNÒRÏÀ·#«\0æ¿F›\0000\"2ÂJkeô(Änw…<#‹NÊKF8•®Ü0/üª\"ïŽÞÝÐpNô\n£MÔíìXË.c«x­äubôþæðXåòþðD­#%Âtä¦D.ÎdIv/‡Ž©\$²&‚ab]/âÑp¦DáU\nÐdÞÏDÜ·\n¯ŸÏ2+plœ©¯ŸCª3×Íˆ¢ªOþìmÃ	MëŽ»ED*j*þñ\0/Mœ\n‹À[/ÞªñÂü»0ÌäQèìþ¨YÃ«‹°!k”áMÃBt ê+ìØ„¼¤ð±\0JLPýN¥RE0ìBr	\rƒ&ad‡HHfØWŠnÍTÛ…Bq,fÃðx­Nãâ\n*Þädn[e\"\"%\nõ¥ê1Câc(W‚¤4.rÈqˆt©ñ˜ð¦ªú£Ô\r€V’ÀÒ[,\ràÄ4ie	ƒöÉŠþ:àÂ¥¶' ŒšÈ @.1‡0žÀ¨ÀZTa`Þ2C¼Ê,|Ú\r¸×ÌôïLZÚ–'‰¼Á±Î…¢¬\$DN%#0XK¼™íäßŠ€òH#áâ/ÆŠ\n¢¦Ú¦Æ¼àÜ\rc¬2nÔÈ!!h©ÆZ7ñèú‹Ä(däFÁ†E@(ÂôNr0¿)ÇâéDFÅÊÊ‹>@^ÃpÝ‹5’0UfÍ\"·+­ç+î=#\n|‹ÜCj7&1‰*\rç®{%=,ÍÇ\"âÜñŒ@Ä08„. ÊrRè*b¢Rí+ÌÆ<oÐ£ „@RJ†02ð1¥*¾-&]Î^æËó3B~äÏ|·%Òf)6Y¢8I€ì4rY\"Ç˜7Ã2±óP¤  îJØZd[Ó²80-ª2Šè/¯Âí€ËÃ7Å2*`¦íFCÒÉ®¬æó—K&Ve`Ë5È!5Ä•&…\n%³hLPâùë¶Ã²FÍFˆÏ±žFÇ/€Â";break;case"ro":$g="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¢ Ò/!àÒÂ¸+ËMc\"1Ic²à)	ìü\r)¤[¥cÂ1¿P\$T80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp ­\"¤Kë¥0®’t™ÆìBpÆQ¢ð\nšê0BÃ1TÏËÌè˜7Œðšp8&j(Ü2 Lè’6Ž¬¸**t¸ãã#€á4!\0¦(¿ÈšÊ²cØÎˆ2TH÷+)¤˜†Om24¥ÉCÜò õF<o-dÌÖ®»\"É‰¨¿´\rbºœ\rÍ“:ÓC}L:6€Ai pLÔÊÔÎˆŒ€ŒpHÓ\0Œï%\nòBÐËºò€°î’ñ^L;Vò5pŒæÿ)ƒ£ú€ŒêCFàBé¨ëqªÐJ[ãbmaÂ­XÂ7:U\0@8Ž©˜ót¼‰„š–)¶Å3·°Æä^#›ŸS´µýh4ÖÌ÷O¨—X5fN2¨¸æYk¡ÜpéhIc] ñ{‹\n\rÓx2à78^lèŠ<jƒ•ü!¾Ïk•bZ<ùOÚ ÑžO\r\r¸Í½ PÙ/MŠ7CZã0Ì6/l³<‚&7@¨7·Pó4¨Æ«Žc˜Ì¡”#è8—0Ð°lk)‹aJz!ŠbMt`A ÀãHÄÞÁ«/)Òp3/\n*«ôûã4m?¬E2\n†Ð¡(4ŽBÚÄŠÅr•„:ã³®íÑr`ÃÜ3,\rš:§¢hÂ¬¦hÿ¾9ŽëÅ4±+ÃÖ‡‰`ÐòÁèD4ƒ à9‡Ax^;ÿr”æIáxà½F@@ð†IÜàˆå´ºü‚øb\rŒL5‚ |ÔÔ’¼€¼0ƒå*QèhS*løºWNV”@rQJñQ¼PÜÓÜˆeLœ3®K”9x…êˆÓ!gÀò`A2‡¥`Åžs\$o¼/dÜ!uBa©Ã^l÷‚¤ç“jEéÁ¼'\"¼ÊˆØpNÐNµÊî•Y=#HàšbŠQÈò/\$«\$Ö¤ršÕ!{«B¤±Ú’8ŒM­{Á¨¼=r¥IèI\"áäÙ\"àÒ¦–iZ4!¹Ms’yÄD%¯8–ÞJñÇtÁÆ©Ù,S£¾{¥`0†¢†xS\n‘•CŸcâyhT/+õ+rŠAÉ	QmÅÆˆJI|‡ŒI)KÆ×xw	qIH\$2´—Ô“I;CaÌØHÒV`N)O!Õ†u<Å‰r7d°#@ G\$£§RÎÉ´¶NC‘;N}³xœ”X\n;pMÅža,\rªÍZ®Ú{ÏÑ¾]FR™-¨obsV,¨t&GRìm`à)'¯ðÜÀRâ\\\$…£°Ê™oØ¾±•Ò–Õâ\r!Õ\0˜êÎ¼sVÌÜ 3æB¨s¨„Â£`A!*Qø¢(=5æ”hÌY{¦à2Tòa#4˜„á’ÔV˜ñ34%U³#Xš[>4£¢Vj³q¥?Åd–+•¤V¢s\nÔê#™S¤½µj§j,– uÝì@‰á¤–\0‘;Ê’wí/§xl}™/êAç0à„Ye7 „ƒ7ã\$©:»¦ê@ @¦©0dUH™ŸÀ¦ÐŽ¹{;g‘&Uäª®C*» K´*ZòìÐ3QÒP±ÅÆÎ…Áºâë\"\r-¿\ráÁ›ÐË²idó!¨¹“+%@í”ŒL˜ª4º/M?XEä3Ñ @\n=ó\r×Õ‚šz¾¼)…j4Ò£Ã‹É‘Ù]Ú˜¤èóŠ¸dºÇ¼ƒ¸²N¸ˆAÏl¡Âõ&Í°rkŒþ.#;ìŽ‚T\n!„†.ÆMiNn’F¤²@Ã!=ìtLš0ÙPjt™rDMMðA“\rLtYkUMG5îWWQÇ±*UØ‚ÖÊË(ÑKÌJãH	ËLiäåã#˜\nŽU5Y‘Ðµ€Ìôj4êPí©0ôÒIÆ]w¹¼ž­l•—Æn1@»*cv4pÞ‚ËäâÈ˜ç7\0SWÍÊ	Ø•§œêRÈI,Ä—!øÚ±Ì¶%T­êkW¢!8³„Ï?Þ{E	¼øŸDø®\">¢5ÒlÓZëÔumÖ½È­ ‚2Fra‘•BªD·ÜlìŠÞñY/QtÂAZ±âgç,…ÌˆÒQäyö´	“6µ¶¨\rÛV·HùYòŠÍ3U{s5\rÑAÊ–ëßÐ™ÅDSsŠ÷Õ§xpu‰Âk4~ÎÌ¿4pã)Ä7c¼>ÁÓ[ÑZ.ÀÖX«ÞK8¥±{™6S#š[G2Ùµ·¥v-qÑBÁÇÉa¡æoq§Y™HiáŸ0÷p¼Ç²7Æx\r‡‰<¡—¾†Á—ÐœA¸ë‚…‹IØaÀÈ¨:,Z¿[ÚR~à\\/w=áWª«ci}O=¾Ä=í5Ã±p¢´k*Çhf}†\"ñµÒsÄi®My±wNbÑ{eìÛÆß¶r‹â{ÇlÍ£ÄøÑW‚\nˆ2§D ÷ìÛ â¡¹¯øi%få”³/vÌÙßË÷çxÎ’Íø'aé²ŽW5Äs£ï-žWLý%“ÿªïUZPžñ\n÷ü_+™ü—Ëš¿“?ê¼‚êTiEÇ¹By!™¼qÕt–©Åä’á¾ø\\‚^†PÑèäEûZ/~¸7QF:ä~ 'N»mr£*6‚`ZÿË8«Ï¤½Ïˆ3«šXŽr;kÈ»\n†¿+Ö™î¦3«ŽWJr–ÏT÷ï«“æøîÊù+Œ«¹Ezd<û0k£®W<¹eÐÄ…`Bã\rðá1LLW|âO ã2Ä°x\$BlõB”]e	,<”Äæ|gàË\n¤ºÞB®\$ü\n`ÌaDC²_Â~T¥Ú:cªD£†Ø¨^eEÐi¯FVùÎî,/d”ùïXòPäÃ0èû6«Ð¦=Ì<æebÌïiDðÅjçé¨ðq\0åV(cÈ\$KàG\$4A„ntÄ¢\n!„pë0î'±?%qJòVT±DqIÐCñ	CÝ`Ç¢±%±A‘Zq‚jHCD…ãôÓkÎJ6ç¸¼¯XXDWd€J\rô¤‹ø¢PŠÝ±žE1¾×Ñs°—B›.6{±xr1ÖM‘¢¿qæGDTR“p¬\n¤b‹¬_/á Äã 1ÚéŽ'²\r k O²' {æÎ·PþöÑ*4  Q'd3ÂÖ†`@`ßôs+<ZÊüq\r/zÒJJC%j­eÒq«m¥Sc\"&Å ¤’8ø¤óÐD:ìÄÎhê2Ï_%®ÿâq(¯P/'>KÀØiHf\0Ö×#p«kîPåx&‡p/ C¨`\rª’+C'\0`@\n ¨ÀZ,\$åf¤í\nS@äŽe4u´Ñm.¢Lôƒæžrò‡‚4#‚=ÂFmEJ2*Æ‘Ãä\"ìg6J«W£Â3EÚäò¶#ê41b\\õn(ô+\"•¦D™Èf8\"Àä`Aï-\"zN¦/€&¤bg¥)CÐ?ª4SJÝCŠO\rÈu6CXÐ\"TŽ-¼qFékœ¬*Êé\r&âÃ+8î3‹(fÓ‹:jÉ)R&\"2¢œ6ƒl2gL¼sfFgÖ¤“šÃ“nUdlfBUl¢kë`¤³ä;¬Þ`oÞ]&&F3ölnœT£²:HÄaM˜uDØYtFÇ¼?NY=4L`Êà°gz¢À	àá<åvó‚ø‹«RºyÏ6m«ŽBc:s’ÜZ\$,0\"û>Šê=Óú	´`4« }#£Ã(´ /´\$¦beBÑ>æQj±…EÊ#­äHh&Çz<‚@	\0t	 š@¦\n`";break;case"ru":$g="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)ø´@%9¨í*I.’Z¤3¹Â{“AZ(š˜ÂTq\0(`1ÆƒQ°Üp9Œ¯ðXi\$fi'BÝãðûæ2’•,l±Æ„~C>Ò4P·üT!ÕHæˆkš‚®hRðóHbúˆ°šÊ4ø½i6FFc{Y”…3¦-j´rÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Ü¹”)#d¡µîÃ ŒÀ©),zn™¥LÓŠÖ®ém&êÜ0¸NÄ.„A%Â\noÒ7ðd\r«‹’”ÂŒC8¡”h…*ôš¨ªhéZ¨]9kcFhÉ0¦:î2¢FHÈ1s ©SŒÑ¯*in‚²hÙÉ‰9!©ôL«.™Hµ—hé¡\rË,	Á°²dÄ¦«šë3H¡(¤J’XãD’ÂØí4ÆNì()|Œ’‰€¿F³Úí†‰¦Ð¹t™ÒŠ#Œšë\nÇ1Pqsåšã,îJšSæ„\në³î\rH+\r#è:Œ#eKÎk¼‘]H(BÑ')Ôô+ÐË½Ã»JrOÒÐ¼¦Œ«êÊ¬\r‰\nÓ®ò»†Œ“Îb[k¥	•J!E,àP’6ŽpÚ2Ã¢Þù_ïàÞ2>o¨æò\nbˆ˜4¿Kš%I’¸ãTwè(²bá0Dh,ÓL9BÍýÝQpŒNh	’Ïc”¹ Ü»6FZÔµæêÐw»¢áºtš:#S£¶úNŠÕ/r\$æø­`R&)ò–C)¥Â2H%ÐñgKk•Â3‹Ò\n3zÐ¤vZ%U«8ZÅÉ.Dá¨tE-!Ê3”–±D‘‘Œ“jjžçÔ­ÒÀ¿QJ\\oRÑ—u‘ºÃ¨Ø6>pÜ‹ŒcÝaÉRXëo)6¾Ä0õ¦öìU(RƒQ¸ÒÍ¡¸”³íMYzJÃ©y&©t!5I¹†e“GZZ²‚¥N`6Y\"äFxëCNghÞôä^l¯é–ÿ¾§Ó„AyË¢hm	}Õ\$µNÍã)òŠ`A#%kƒ(@Û¾êLsÕfÌàÝ³·ÌèÞi-yîýs«£dC_#k*‰,¬\$ÐØ\n;§|0‡#ÈÃ0f\rˆ¬2±\"¨º• T\rçœ6¹àò¨naÔ1†3âÃ3–°7†tVÁaóP¼0†pÂŠÁHiAµ‡Sô\n˜).gM98ŽTRSUEX!…0¤²ÊM ¸•.ÓÊYaÏ0å»-J‘á^,…f36ÐJá`ËMŒÒAÒö3ëà‚ Fòp`LVOGaî”\\S0¸%R›ñuJ™Co½{>óŽ½Jb^’	w=QÂhagè9‰TÃ¸oL 2‡€à°C(dŒ€ð0ž<è\"\rÐ:\0æx/ó,Épe@ºYp^À&¸x?PÈ4†ðÜÁ™GÀ:L¾€œðk@ù}¯ÐÊ¿Ø<á„00@ÁCCa3Ü0†³ÈÄDÒ…³E€ DòPdŒ	JK\$Ò— Ç\n\"£*\"8hºÒÃÒs0)Ú»‚š£b¡\$¦˜y8„RÒ“ÍŽ=¦Q£GóÄgè™/´·JDÎì@À@\n„R:D64å\n•\$ó²DÊuŸ¨H´¡Î<YZE6@´·‰AsR´V68þÔ›‰J’‚£Ç£XK	ñÈ¢ÎåÙ;ØªÉ‡D”(æRWÔlé³-1h\n2ˆ¶]bñ[£„’,Nð ¥„fÂÃs?‡øAàâO‹ÁÈ7†Ð@f|\$•§ñ€\0ÇYó?§È8DXJ‹Õ/WÍÁ·Ô{dqŠ±wIb*\0 Â˜T«’›*øÅí•±°oMÜ/8XíÐÑ·Šr •Í\$ëzrYÕ¾ŠØ#Xuê¹-Vª„•VâNQ1/NðU²—s`º`MgÄ4Û¬K\rÐÁ~†ùœ%èb\r!œ0Ð˜1í<‡²^„`¨0‘‰+òY0*fìéšGŽi®‚}keåm´UR!êtS—±Æ~ÈÜ¢:<üÄû´¥&ªOŒ\\ËšóìÆK¹Ú¢UHÏÄ5åmT<ƒŠk²¼Bñ ‚2ŸÕhÐR®*´¹ªä²H\n”3,Àƒ²Å³dMržÌÈy·v…URœgÍ(„q- ©ÊâÉåÎ&5nˆ!ÞIDw\"ÜŒ×ãr•‚ÜRP=î<£«uW+Ð¥Íp¾}!qS!*	¤GV«h„y—»¿òY\0h†50B;G¨ß©2.WD;3Š4Zä(-Mög[™¤KtY•qÔ©æ]°„‘E’H¸©ìI­ðH\n\0¶—S7±ñApI2€’¦zªÆNÎÛC@O4ljÉÈÉ¾;Xœ^bšlÊñkÔW%ÔÜ]Æt\"Ñ@iA”;:\"vü\na”÷3ô4*äÑEžªŠ²\"ÕiZO{?‹çŒv¸´ÞÙä2ýèÑ­‹\\|#C2Ð³ŒÖ‰Ð'Ä|í8âô³FxÑUý’}ðÌsñeË,SÕ¾ñ™./xµm£F—« Šgw6æ‰\r(!ò~klmŒ´rü¥n—~xVÅ7©”\\é±0\\¬ùŽóbØÆRL¦æÖ>žÙ°“|m|„ÔŒŠW†áŠ¦JtºäÖ²\$ÉÃYw· ÖªïÛÂ¹R·[¼êd?ÑêrÕ{uIO„¨C	\0‚ËÍ Ò|p<¡¾ÇŸ`á…eÉs]·<Õ1™FÐM#ß(˜Ö•]U iÌuPÆ!qîýÂÊ#\"\\–û Ð3Ó\"+¥|^ÉŠi¯ðû‹-íÑ´#p	ÒkqèºÏUùd;ç<z=so·Ôø­¤\\}Ÿ·ñ]/ßù+ñüÛ±ÐKm+Ø6•£¨­ÇÈ,h%´^‚¨©ÏòFA(ïøú¯ŒþDö,Pú!z#§øÄHû0þ¼\\p&È“ˆî:ð4Ð8ýOº@Ív ð„3bó®’M=­Ðaè˜`K8â0ýâB%æD ÂXy!¢'\"ö'¤;\"†ù/†%°„&\"XõÐŽN¬/ç‘Ðš(¯ÁdxdÎ,A…ìÏÏ’å! Mð’N\"á	@;D—B­„û‡fNã9Ð*¢D]àÜíe)\$@ÏXWÍ„.¤¤*G`KKdDÏZÇäž3ˆÚ~eÚ~Lxx­Ô\\„Bv¯&¢ö\$ìç¬0\"R&-çf\$ähÍÊÌãŠ=1A\"Q\ro-…1¦mÇOÂZ€p\\fÿÄå±_êä1€*‚úþï¡ÌŸ­í\"ÅmhÔì‘6Èì|N£›ÍîEXðžâJÖ‘ˆøNBŸåRD®œÝ#Vå‹¸¢£ÅÅ¢æñ²&L„É(æ€}Å¸¼\"BÉ§|åNhåÅùîbýxP°åbqÐÌä¢Øäå|/ÀPC¨\$\0RÈÑôÉLØM*\r`ÒJb7¥À5e0íÒM±–<©fL{qw%¦4Òêï\$ñ…­IF\\r`§Òd\\rdÒXØqücd&ÔM_(§Ö(ÎÇÓBBÆêÒ ÃÄS\rÎÑ®)*É|rüÐe'#òœá#P@*‚Ye0øÎøãKÖ\$ƒ£¬hR}&r’üñvûRß%o.CŽúMl@Òîd2ôúp»*/ä»00e	.,Rçä*ïfU/!a/pU2B·1‚RQ™!plÃÐjélD¢j+/ñ†*¼!Æ\$ÿ+e6}6A6„¼ún³rÃóv£óbéÓg&MÝ+ÓpÌc\"ÅG*D-‰6ïçHD&¦äL­+f¾£\0¾…'…Ì“êCÍ\\¶Æñs”vë ­Å\$,FvSªCDÓ\$î;²\$É1(®ÚPªfzgìnò‰3®ŽÂNNçnË6«3]D×9.ŸÃµ=\$¦LB`Nê(0’Å±¢äfbÿˆHnˆÍîe>Üalä<ãLYL‡53+--tXã.6e´c.\n[+uFÌuG_GòC2Š[³œ}ò¹)¯!E´s+L³)†þU‡eFTzáRoIt¦¾”«G“W)S[JJ’HâïI4D1›Ð[Kt¢ðÒ¼€TÛLrBÈÌI+#:ä”R!A\r:BCn4Ø.¾)Œ]2/’¶N„‘¤^îäuFó4\$2’¯K–ã;RñR2ŽS-F±aRÂK1³ERS›(\"çMNckc°pnMtšÖõEC/Õ:•WâiUÔàññå40ïÔV Î1+Cˆ „èÂP\0AV×ªFe³ªZî|*GÞ®¡Dã%Tñ)uz}2Àg­YÍÞR#\\J¤©XFu´(õÈ¹ÍSÐ[\nËZêI[\$ã83Y+n`z†9\\ŒWZUçZµÔØ‚Q[Ujobo`Y`Q7`ˆõ[.‚šók[³Ÿ)”’/åYQÃTôhëSÅa2ÛYl¢N¤/Ñ6•¸P¯˜OÖRê‚8;8v`VâñfBÓ9’€yÖADVEf.½cU|C¯z½6T!c–Úê˜ôÝNµ ¬ª¡Z…³)ñ•bö]c'ÚòJ£^„§f”ifÎ¿jVj¤i55KgÎë±51'ßQÕCR±ls:¡u\"·C‡0°”úµþ³!1vâ×OÝo“TþoÅ&÷.Ê\$K×&ÎÿWX¡d.lË>'ˆDvá‚‘ÂðÿnþÝ¡pÒÏh_p0 hW%S­8ý3#\"gv2+Kó“’ù4Ïþß¨0\r€W7¢šTdÕâe‡¨È‚»§Rðèátwxf”Ìžàê•`@Iþ¿`ª\n€Œ p\0fE`Ïdê´1sÒ¿2‚®,ûFc}¦í}õÄWä¤rý·í@WÝ=w÷wÆ~cƒ\0°ÑqT…\nNñ(¢ü©BVŒ1Žg.^	·ÒÀóB”WLJã*Å€”á•Q_Ä:L'Rü˜ÅãY*oäP‘Ò0eâÕ—/.¦Év„u]¥AQ‘~ävÆãFSÅ<@˜¿ËE˜•‰‰î–CÈ?\0mdóm¯BË¼cqŸ‚è\nPTe.t&“Ü4‘Œä1Œá0LCÅkŒ­;‹¸Ñ‹åì­Íg~\n/ŽQ½;Ãwj(à¨sO@<#Ç{ Ê´ Þ\0è\r(˜ßiuMí;ÙIÔ‡J`.åzIF€t>}l¡MÈj¡6íÛ\$¨]™E”’?w0EÂŽÖ.çdnF¥ˆ%DIR•€ÒX­ô— @X\0Êà\nÀÂ`ê Û•4¾‡&VÚ^l¼qPŠù¡n\nþv‡‹óèÄ‡eîo,×ÙiœD&mŽ5fÃCMZÔr¤Ï™ÈÐ‹\"˜ï^c”h<?#È…¹u—™Ù˜5›YõáaÖ»bìLV&7Ã(7qcO<™e™‰%QÀt’š2@¡B";break;case"sk":$g="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸ì2;’Ù'ã˜Öa•-`ò8 QˆF<ã˜Ø0B\"`­?ˆ³Œ0¡¢Ê“½ƒÊKª`9.œÆã(Þ6Œ££2ô I˜ÛŠÃL\0:¼hpò¬Äjÿ§£(3ÐÉ[\r§Åð\$5IZ0¶ëlXü\r#@Ø˜n\0ç\nƒ““9Ä-,å:'0`\$£‚q\$\rÃ¤I Ðµpæ¦\nbˆ˜4¶IH­Å.P@2Eñ`´7¾¯c€òÉC¨Ö:\"\nCÓD8ÐÐŸ¯•}¢6ì€:Bs£MØ×£ @1 ƒ bØöHóeØÖ@ÔÖŽÏ˜áN±‚0ê7\rc ŒãÊ3º+ÛçY—Ëã”\rc\$7§éëåQÉP`ÈÉCÒ„­….6Óiˆ]2X«Ú€PƒnÜÖÐØ65Œp†cÜ‡RÁÖóØcÖ:µ¡\0“ÜT@è¸Ž‰²<Æ®û&õVî[bÀ-µäÀ=V\n æéK5å7”®YÖxTµà§¡½tüÙš#ÔJ'ãeìŒ\r×5@\0PŠ<k>•8Ë^fcÜ‡i`íN³»6I@S:¤£ª`Þ3Ãbê2¥\"xÉ?”3«*\réÖ7!¶9Ž£t9Žc6Z\$ Ü9…`åÄŒ#8Âº„™€\rÙ\0ÊaJR'#1Xè´ˆÖœ„¦)ÁpA¿;I0¦Èž‹9”( ôÑ¹;îÿâRzª˜µŒ£Ë9\$#¶4¹3Cª¢ÕN£xÜþ­o+Æ0ó3÷™\0ÎøÓò9¿aŽä)JV¬¿øÔh9ŽèŒ«Ž”îá\$”3ÐD tÌð^à€./Žÿ‚â&Áy9ƒ!àÙ9pÒ÷x\"b!ÈÔ‡HÍÃ\r`ˆ5uNC <á„(µ£Ö3!=nÍÐ¨ àÜ<0{nB½÷ ¢	Ò!h©Ô‹ òQ	©7'(€”—’ö_LÁ<§q<åzƒŸ_f¾\$‚¶eŠb#A‘¬?`t¢Èz‹b¶.žp@\n\nsªW®µ6FWÌ‚Þ)„@Ž!p„MßR\r?')»ÖKIy1q^FCã‘£xhzéÌV» ´tê¨yï­ö”âRHXy3Ê|4¬cF¢žl96†­qêj”Pf?'ð †H(Es´dIšÉfýI)?½Rx™Pú!\n<)…E>¨dòˆ<®þkŠþpIÁ}Ò‚Qq+ÊJÅÌ:œQCT¬\\J­\r8™LÜ¥[{æ¼Ã‚±Ë˜ R¡0N¶&bˆ°F\n@à†åŒKšì= ²ì†%È*‚uê0²~D\$aj\"g »˜¼Âp \n¡@\"¨@U(\"„À‹KÕém90:00àÅiËM§aÀŽ†I@PTDl	‚X—€¾‰È¶Z¢“Ü·A-#Ã~—Èñ<ˆòcÐ~\rRÛ\"G®*ÁZIÓfDÝ^;ÅJc`sj-L‹6TÜJB#KlÍ5Ä‘&ôÙY-‚…ªECç]Ù•‚f§Í 2³–òƒJM­5^*7QŸPoqç\"·Ä„@C‹úÕ\nÇþŽbœ”Z:@Á@\$PÃó«4]Œ:°'™#N	A¶ð'†'¾ùjdÂ“( ¨`Ñ„!Á¤=#°†‘Ãƒ¦Kdà1› ÉLC%Š&\rV¼GÇ^ˆ hK/Å/†õÐ­ny0h°)ÓÑuÃƒ¡Å]³ÈrËªîô2ÕFa?V×þÞÖ#–èÐzŽÔx_RRHðg5.o©åë†ú_ˆZ;ébô¬šðž/¬‰ªÔJHäÄ¥ª(Ø\"‚aÂ©6&TYK‚ Aa Kcþƒ\r[u\"á¾XöºÿèÀh>‡v1ûªAÖ0/+Ë0Ì†C†´ÄW0™£2”«2Åk‘/IG±¬Ö3Pus6÷(‹€³0“MIÀ¸çäô3¤ˆÎïc›sé9Šh‡@Ôœat)lÎ'³9½=õónŽ&ä…œi)2SV6³á´äES+Þ›iÄˆþ †,ƒ	L‡ÎÇÅï1lWª2éìÐšëH6½mVffËÚc]=]xLõ>ÉÊ‡³VŸ=lcú˜‹!Ü†I­Êcì*j»oX³¡c#â(ôíçF¢N\"I)TtU=öŒ„ˆ¡NÖÝèÉsø¤÷©!×d¬§mðzQ¥©V\$x#ü“-(¥dpÜµTÂBbÍ%©³Œ…WÁ‡\$¦(¢cÊ’J\ríXQ4›ÐòzÈv™Z‚òÄWpJÑãº‘¸˜s>W¾¬1Ý7qLP’›ãty±±)*ñôNt/šÇåºFÆôZ“Ô*wRæí®Êôê‚¾ž³b(”ˆô<ñP½:DnŽÉÏ•(R Kºfœ¸Ö­/÷¡±„êtõˆßz\rŠð\$¹^‰Y°¤ßHj[*z2#t7ì<4kí~#¸d`|ÔõûI`lÙë]*ðôË×½Lô]D¨ŽyÕ½Mƒõ}O®2¯QdšoIêy¯´#èZ3iôxžñz~dÚ/SD÷^Ô‰õæòZO¬ñÝx-žZ}ÏÊ:Tè’ü2M‘YvÏr#éâm+ ª6„?Óíýß¥õ¿	0üvòÞÏªôÇëûJ·Ý}þZüN´ÔŒüÚ-RÒÊŒÚª2£l&£át8Î´øL±¡z%0ÂAZ@ðÌøþ°&£#l+¡ï˜Ž°:L\n\ràÔWäB\"É'ðX§Š|GE¨˜Q…<¹BfCçb6%~v èDg2&eá}æKîb°’‰hì‰Âˆ]ÉÖy\r|v,*éþ#f:ç„BT	¼\"È–/`@B‚²~O?ì(ÂÌL¥~&\"¾JœÁk¬%<+*|«òLÞZ/É\0lVæpûî–±p%EiÍvë§`S@ò²¥b½Ñ;r(Bˆõ‘\né¯ŽÇÇÃ–úQ\0êÑ8˜‘.ö‘öÑ69ã€£Q:(c&÷«,qQ+ÎãäØ8j¶{Ä¿ –\$Á|TÔ:dÀŒD‘‚uâíd6Æoöûu/Œç±˜Æ±œûÑB™O³ÝÑKü8\$[…¼³¦rîÑ²ý¦}ï| ¥¶a‘Ó¡åZWŽüjBJZ àK`Ö'¤Q0ô±ùÄÅ¼ùqÔŽ®¬\nr\n'2ÍMFoª+²\r1ÞÈ–Rr-åx©@á’Q©/\$ÏJ‘®fñÆÂ©qa%±öO\"æÃrDø±Ãf~°7;&L@\"’Q!2U…pÃ,6ÇñÖÃòŽDäi‘Z>ì„CLŠ'òk2†L\0êLDÉ*’w\"0;+µ*a}’…®4Ë‘¦ý¤Þ’îêá>÷#×G©ÞüÅŒ-lhB\0Ø’ê{ÑŒþÒó æÙG/àÝ01‚Øô´`ì% –\$¨1…˜G@Ø(\$´\n²ì_˜X#´2\$\0+Å&¦‘£¥„”\r€V\rfô\rfª@\"f“cÎ8Â‚s%V\"kÐ:Dt@2Yì^#â˜‰ezO&¥@¨ÀZÆA\"6:Ír‘\n \"e©\n­€ÕM/¯t%:¹:ðIí‡0ó¦@y1oîIÍªèæÆ\"¢ªb:#íœZæÚ]`›9àÌJä¢FD£^äpê%)#dZbBíð‚zò²2\$M9?ã«8ëÅ†¤DT@g`@˜\râø:Ô5C…ŒÕ…Ä³DY2Í~”.ÌÃå=Ž²õ†Öj\"Üê®ŸFõ‡ q‡JUŽ­EƒëM ìóè¹M|ò¯F‘Ÿ\$q£Gf\$5IÌ4%Ž*Ç¾\rààÇf\0º ÉFk¢s‡¯¤ 0úSÐ¼›îÂëâ:RMkV0q<›¦¼š×\nï*1ª¢Œ¦\0—Ð\nLÔD¢V6C2oT¬¢ î1 ÂÂ\0êKF¡JŽtìÖ\"fï•1€¦A”Ôc’1†¡@St`-ôG\nÖ®o&žHöDJ­@®QsH0Ì2`†\\L‹ø/tü@bxA•!’; ä¾x†.\nÊxbÃ¸f! 	\0t	 š@¦\n`";break;case"sl":$g="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›/bè†;Zä4ŽáŠP ,°Â)ƒ êŽ6ˆHÂŠ°Nè!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãjø+\r#”,¸*á 9|†\rnü1A\nxÙÅ TT9¤úÍ	¼£JlÀ\"ƒ(*5£R<ÉÊÌ|&\$£ƒ/ÉúE£ Ðú³Œê9 B˜¢&=é{¨º²ˆð:% P 7c\nD“C;Z2KH¦‚³BLðŒì¸ÈâR“8º.ËHœ7¿t€É6¡ï°Ä˜Ž€HKSU\rUV\rI-^Tõ@éº£+(Ã¨Ü5Œr´´-ƒëCÂ.›°„¯ƒZŒ9'‰Óˆ\$²êÈÛ&#z-O²ç\n\rãe/¥Š¤(2¸\n5x:ƒe6Ô C˜Æ…»ô+{;	Ž ÂŒŒ—BÑ?&vØì…ÝOªnTeL¾)5N=QØce„Ò+HªŸ`sî(Œ¹4Šo‡ËO+Œ1ËB¨ì7ÃÎ¦Obã¦2¹S’Ž	µxð4×5ØÙLS*#0Ì*	xž2Jé4é-ìÚ…,ðÜ9Ž£H9Žc5Ø\$n¦õEúˆÂù¶¥W6-ÃªaJ^‹§2»ã8¥®h†)ŠB0\\PnÃp÷„246Ý‘@ì>ûZ:%ò¬®›Îc€Êì#ÍUÐ›¨ÓòX6*ÛãÌ9½{Ôð­µÿ:LJ—‰°Ú9 pØæ;£O°Ê<A«Öö&í`Ê3¡Ð:ƒ€æáxïå…Í´l¨Ar43…ïª< :˜Ò7ÁxEMŽLÈéà‹íB5„AôÉ3R/ˆèã|þ3slÞû3ºzˆ’ uÖžTK`ÇˆÞtèæHÉ­V„“\"ÀÞÖÐ>%YSzùú\"ÅI¹§Â!%\rÜÐŸ¨\nß@P\0 ¤’:I’û'7½·†VâcÊ“dd¸˜\"h#\\ÉØB!¤xdQˆd#<&à9• 	ñ†Žxó‘—F¨!ú¨(áÍ=0òbÉ8i>Å Ÿ§@Üþ\r!› ¡Ä:™¢~1*Œ·+£FÜÃ u	¸Ò»2ãH)9'fJŸ•A	Â€O\naQ½…§þŽÄZpâ†!ÄY\n \$9Rqa\r+GŽz„çõžÆæsLù 6À–À@¾D F\0›„`©\nˆYö=°Ÿ¿Èà‹Èr&oE-›¢LÍÀuY€(ê£––ˆ:~gàÔ.êYéÖ4¬k¦EâJƒ`p^gM»Z›Mj[A‹q2<‰I\nC'¤•s†`Â»	û\r‘´´Xû‘à%îP)c‚f¡!¬ÙA\0ä ¨U\$Ð`¸4r|lL6.É]/³2^‹2ñ2AèÇ‡(¢ÑUÂ|aÅ™‹1„E’aê9/³&Úº·Qälø·ðì HÏ/ªèî“gèŸ¡“(fJBRoI!D*)A0‡h˜sIàt©L'‡2f¡ÀPZ=ÆÅuFb–‚›8KA\rÕZ°edK…ªJ‡›…‡41è¥C){KlÅšN\$Îœg:&½‰bÜ¿C[KeDh8ˆ”Å<Dü´,næA¹!6fxÄDˆ_,å\"„Ò†Äˆ Ÿñ}Íp·\$S¨ýÁŸ¥	„gJTó\ráÁ. .*ƒ„¥ñ–²óÖx’A;Ba*@‚Â@ Šè4™©XALŒe3òòÀ¶ðÂ(Y7T!½œ5_8/+\rœÂeæ¬ï©%X7àÂß Ë/µÁ½¶S¥’Š@œ‹“+ÿ†G8zƒ›‰`£ŸkòaÊ°	Px7º‡3‚\\¡’Á¸>ÕÙ¨Ò‹™üÂ×ôÃ†]†¯`z½Øv&àŒ#‚°f2°8“âcãH±Q8ÅŒ“á¼t£ 653Øß›<0“\r„nfúd6ÞIƒªöõCCC¿“0Y’ÃÄžä4ç2	áÃ˜e‹¹,šU06eÌä™³æ¬Ž{±~mÇ‹1fG¹™ðª~Ã„¸ç¬ß’³‘\nˆ¹×ã4õ‘ËâÝ‡˜;¡Â?iJ*%Šx¶9Ÿ¦JkÀàî1X ¶ËA/7´]É¤;¤…ú…6¶¬Ë‡B G5b('f2©×jODõ-.i`©[ÑrT\"†\$dQ}™\"=±ÖÇT†à¬Ã‚){'ä|¸[›u8›AÌ…È\r¾‹µášpbjŸÌ¨Ñrks!Ø¿Õr_Y‹®hs4ÂRx)¾¶Ä¯¶ƒ¹[¾xseÈ‹	§©Êië‰dïrª`ô‹¥™z-]AšÐô¿IÒ~¸<{Bg9ãåÛ“% ­Æ§™|	6*È´¬Å”Hf÷A‡2ÈnC‰a«”+¢‹Œ0‚’`wC²Rªî’ïê>”÷I=IðjAÒñ·\\7¥p,{Á:åÍ¥êÒ–1ÖŸ¨÷å&ÐLÕWÞÏ‡éw[í›¯sˆ( æA¥ð%“©O¨ÏrîÝD©É¼!ÝµU¾Øg¾áƒšæ|Òð…Ããæ'Š|UúÅÀ'Æ÷ÿ!<•Ãòœ\r4DŒæL>„ó¤/Àzè¼7¤>8Ÿ)è.b&- ™\$'´tÞÖ·¹º†eÝG×ý.î÷?ÝünáÖ¢FdèŽÇÕ‚n<ºá°é²u2JlÌ2~„ª€ÙPàÞÂz*¿~“{tuŸ×KÁ¦“ï´°a´*EP›~ÃÄ\rC\$  ÌWCâF)6¹o‚÷KD«*²åÈ°‹2à‹P³¢(èPk\0>Ç2ùfùP0RÏzß¯~¯ð@ùæ2ú,¾ëI7+Œ>¢‡.ÔùK8¸ð_np)n&²\rFáPNùJwCï„ŠìDúƒ„¬ Â[bXŸ­J±\rè¡fB¤jù Ö1€ÞaCÈ¸O\nN€OíplòÐ¼òmEÎËp%|X¬b+4“p¾(pR¹Æ´Wåƒ\0æìo^ð¢ú5¬Îü©ÖF`Ö&`Ü^p¸÷è)Qdvî.¹CãÂìçàÚbb‡m„¹Äéq\"- ¨çn™O• á¯¡\rÞ3‰×„HPë\\'mF>ª.™ï\"GpÊ^0oKMÌîQsÆÄ«Zµñ]dµáˆ„7« HË H‘j‘nà¤±…ÐÅƒÛÑ‡\nì'‚ö6\"ÒPpâH«8†Bøhî,R.øÏâñíµ†®ÅéüÌÑê€Ï0>Ñð3Oƒ–šlÒ<Æ®óqöCH’ñ2!4T^ï§¸™Ë0\npª½vUp™‚c/“ÒÜç1Œà±ü&ìê/DÚÃ2NÄâ(2RW\$7%ì¥!Ê”ÞTÂ^d^\r€Vï-D†.`'ÈN£~™â^ÉdMŽV‚6€ª\n€Œ p>/`Üâðdíý'nÍ’¼÷ìQ%LV¾Ï6dÉâÇòbÈ/nÐ’Ô×ïk-Ì¬\"Â0#E\"ÉÃ¬%&`ß\$´	£ê\r Ì \nNàæ¸²°+˜Hç1eÒå(°ß‚ª-Ó\"3Ž2°.6\$£TEåè®ÀÈ8\$&	€Þ6ÃŽSL•h CBBfH]Î<·`èàêã-³K©\"¥\0002òÚS*à¨y7¬€'‡r¶Mî¬òÚí*O8bè2ã61Ã .¨:JFÎ.““/Ã˜OÐ2æE–‚OÄ?3\$]î\r‚‚\0Ü¨bt'’Œ’è4\nÎY=ÉzæŽ|¹IT'>3°úÀ'ZuàÒ“S²p î/ Â`êBà	ó¬=q\"À\"ßB%¬ÛÉ‡\"Ê0ˆ\rst2>ÛÇô6CöX ê‚Èb\n cÊ%	“Ž³\0† ¢R#f2”°\"p»´\nd¯¨H´J¶B8CF¨™Š";break;case"sr":$g="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-q,2ž5ÏZÈû¡¬”¦¬E\$‹+\$’JòÅðz¢Å,mZHQ&EÔ‚A6”€Œ#LtU8²’i’RÚrX\$ŠTf·B°Ò9ƒ¨Â6@´|˜^@­b1'¢ñ\"ÜÈËŠÒÈ_>\rRFÅ‘\nl¸¶ê «ÌqÌ…\"¤„ýúÐfDÅ<ï”¥]Èt’6ŽXÚ2Ã @´[²7ŒŽƒ¤9¸\"˜¢&\r.»DÆ3¬ý=7V«ji\n×LŒ‹@Áóº.òÎÔJ,@\"­E\0–¾3gÇ³g]¬ã<ŸÞ¦‚ˆÛ)s½yX¶®ó¡€N‚3øƒ9‰aØªp°<É\$/p©ŠHR<¨ÔìC&ë4\nÎÎÏkª+ïís8MhÃ;}Ñ˜\$  —Ú[tTjCöó±ë«;[	Ü)BX	´5”g\$£ËAOXL™;>™É ™š9D5EÀ³µÿ.æÉJkÕIòÖ!«›6ÅÜP‹ÿmÆcK`Òv—…©ì·²‘pÇ¦*”2'ÊÛðfG{ÍØªžŠÊQemVw ûÃíV\nRh-,5²Á0Úd^`¥GN¥áìbérÉL_2€©Ê‚¥¹qÊÇk1¹n¡±lNm2mùÆ]à¼•gÊÇ«nY^õSzÉVxÆ×ƒ äÜ·a\0Â98#xÌ3\rÊµ“ÑÂóbÑ‚ Þâ\r£Ü<„¨Ü9Ž£Æçc0ê\0l\rá0Xt“ô!œ0  A˜˜m@AÔë‚€æ\nKYD,iA%Â˜RÍÕ‚âºK²ü_Ôº”äúîˆH„t\$Tµ¸ò\"Ob+®YõžbÖÐÝ1'†°ˆµöYƒ\n.œX@vü©ZdF±\ræ×tP‚hag\\9X´Ã¸oKT2‡€à¤Ã(d„Àð0›×Àè\"\rÐ:\0æx/ñìÉƒpe@º1p^³\$8x:ïÜ4†ðÜÁÐ{ç4:G¾wßk@ùc¬Ê²Öh<á„,óž´ƒBÔZËD0†³‚·N,‚~2f–´V‰‰tPè°ŠeLWÌ<^ˆq–G—ÉäF¥¬Ì\"˜ó]‹Ïg%e7’2ÄU†)A7„4!A\0P	Bg·•n\\Qû)&¦Õw2ã/`É2ƒˆNuª×t„K\\(zE}Î£²ò]»\\ˆª¨Îc\\Å9ï`ÕÝ\r¨XÒìà…´8BdT‹2.Aeb1bV‘ÀPI\$!åî†@ÒµNÎ[¹j“¶\0q§9g`äÃh 1ýóEÓ²³\0c€K`è£ž [çfký'¢Ô¿8BxS\n“iç:--Ö,G(A»¶d4Xª¤Ñ&j¦ŒÅU@R¨ñtNA>§xHFFŒ22Rö¬µäXÛ˜£N³ŽJb„nàc~OÕd†øü÷\0b\r!œ- ˜1Ê8'&6„`©9’Õ\r+\"1,éaM©Á\"GAž–k;Órv\$ì­Á´:(Zmk%FIÆ3 ž\0U\n …@ŠDO\"TeSš¤xO*lÝ=Ä¨XmÁ\0D¡0\"Ûëp™Ùm	´X¥²\"ÌHÎ`Æ-W*ÞP	²(ŠÈ‰^fŒÓTBÀNdH_¦–¦eËé1-z€ ˆC0aë8;)zf¨¥ÝpB4¹bŠ„[\0ƒÈ¤O·fB›¡ÚûDÍ¡™ÒUÍ«¸5\$Òôç€XÑÂX°íå:Ça9èª±rbj°ã„BÄ©*uR]ûÒ·ÞªâKuÖ‹vzñSÄŠÕ¯äW)g3˜W¤˜Ÿb–X°ÈÁ0e^ÂŒ\\\n¥´Ud•Á/\"GN}1H…õƒ©MM)0nRqNJ”Rlÿ”Õ.u,SîDK¡q)¹¸´A=r	“T´ÏÙ^ÒPÌ•óp+'ø)†ô@PC§Â\ni€¦NXc:á‘Þc´¶‡KÑ “¦eD˜olO”ù—ªù¼h™‚	<.W¤ä3ú‡\\zÿ_\n§^×½©hn˜›‰•üL—Æ\rš½w<:×-Yú/Îb¶Š]¤æA(°š%m¶ÕõY×Ž²¦«6<O2®gUÔð4{2ˆWp³ƒôQPîÚj%¯<:ð•áñF7y§+‹zC	\0‚™H Òsžóà8A¾•0ágcIklÒb0œrywŠò#«T‚Vl¶ƒæHXs' ÂÉ©å(ØhnR!ÑMÇI¾a•XÄ×¿<uúÌ˜º €K¹çyèóørczkè´C£­W!òzú-Ý;XõtMÄJA{Ã u‚\$í—|ýë¼Ï;›~Õ”0Öÿ¢6f‹@v)ñy}¿¢D–CŠHÕµuRëÕÓïYî%W¨x¢ëWØN8í}YÓy	Ö7{4<ÛÅ¤/Ï¼è^É÷²ƒ²=¨Kr	,ênÉ%‰˜º9rÜÕÕëé.j¨§WD)Ö:¡ ×ƒÞ–ÒÂqºÆø]P3lì~|KHÇ=Ä¤âd,P‚ãú¹wr(\r¯ï¾Ë\\dK’Ž|­Ï¶X¸wi»3ÞHYB]y‹:\\|Î/ì?.JB¦’J¥ˆ!KÅ4C¤.5fœBž´Æ(éÐÏOÇ„NµpÌ&Ï(ð„?­cF E¡ÌB÷Ð6Nlùnîz„0Ç°4-pXzÈ™ã#Mm\$xèŽlå\0¯Fñl¼§‹ÆÖ\$„«Q:S àGÔxoøUK\\o\nÔ­‚ì˜rÁÐ|˜\$ý\nM}	\$-\nÊ©Ä*P´J¹­Š.	’\"Ÿtïd°¾dÄØŒ\$×ærD­rXK‚›cÚjƒä¼BrNA 3ØVŒ¬P+ða­q¼Œ]¬lîîÅ¬ÉpfÆOÅì¤ˆP>lBeQ)EÀÆ±GH?v-mè1GDÝF(¼ŽÃF\$Tnñ]03b×°~Ð0‚i¢­gW‚k‘`ôMd¡†Â‰ìH‚ºê…è\"ÄÂ>Næé0,ìNšòŽ£\nGmO*ø*ÑºØO3/Šìqcq«Ñ°ßFª‰¥žëÑØç4éŽô1£Â´é¼F\nµ‘G#2Q-¬µ2\nÛQ²Q‘!Í²=nïÌQ€Ù+ÒAFºÙ²>¸¬J&¬âÝLž3ï0>0ø¦ÞLB€òBCB¨‡fÑ\$¢¯\$æmòWM|ko!¢¯%‡zh1®`FãÏˆX hé¸-°ÀÏÎÇB¿’jñ)!®!ãÖ\$™&…„Vò’×pr4ÍÁ\rÇ&êî`°¤_l\"GÐ-ÃYIá±ß-òá„u#'/-#R‚éâàía*2ÜÚ\r¤2b¾ˆK!}.¢ÙóÁòã,²æò“ßÓ#1ŽÚÈjsiË3‚ŠàÌ’þ,ï4†‰\n\"Üµ©ÎDÔ@¤ˆÜ¯Ø1i¶#¨y‰Œ>¯Z&&Z\$óKñ/0eSÒÃ1Ñ_31¡8ó…ó<_ñQ-žBCî†Jk‹øi/ÖsQØ_*ËgÔ^g>t3<èc;&Ne3ÊÞ³Î¡NËM ?ØEŽ´-ª¯‹ê¼g©8‘ƒ\"sø)ï†SÝ:iã?³/9oy@\r‚Ú0íóLáüÕ‚Ÿ{?Ñ'.³õ:1O#“ª¯2^'¬5ŠäiÇLLèÛÊÛÔ1!3\$}4VÜò#ôF%FRÿ3óCí†Ü”n@ÆG<Ð„¡BF4€Ô_ñß¢Q1Œáƒ\\¬t2K&‚Å4¢Tg9”\0ápeK49#s@\$Jí³¦)³%zÜ1Ê)Ê2Û„Æ*¦åë…>HˆôætŸòæTë\$,¸ìN=²UOQ“O“ãOÏºê•O\\IPE³b^ò&5ò=k\"±âkÿPµ2þñL›SÎÈ.o*ëÕ5…ÛõL4Ï^g´\r€V,‹‰KE„è”­¢ï7r‡3\nàb„Ë\$Z ê‹k•àÜ· ¨ÀZ\0@Y€ÆZ„ïM¡O“N‘•\0£u·mcÍ[MV	â 	xÉê¶ð‡ŒP_,Fý`›Z€Ì-¸%µxC²äiÔžÇ©€ûÄ@Éï_¡zÉæ1ÙW‰!r*g\$¦'’ÞlÎsUE	åìÛö.¸Âò&‡dPtüèE\n§3Ò0Z'O54\$P4U\rk	Xì5àè’4É—frÆ!äƒP%T…è:ÇöxÒuHès µweVigÖZ)ÃgD1Žqh–™g¤ïTà&i!ƒ7, ÷Ò¦r•åÐžW¤V5˜›ÅÀ5Kís‡l*ªvkï:)'ç@«Ð3çšóÑEd&rç\0‹(¸\r%.ÒÈÒ\$ îR Â`ê ÛN\nùjoøq¦¶*ÊœÍ‡HÏ–póYj\nÝí_\n•ý\n6nˆ–]…Þ=©{åeÌðšLøzWXL5,4¶„4à†|¬8'ãp÷Òåª97xaNmð%~ÃeúqÕ|ÏQWWp\$‚æ";break;case"ta":$g="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæ¸Ú\"¨\"+I\\Š•Ô²#6Æî|\"Ü¢Êµ(„+är\0Ü7¨¼CUÄðRl·,ÊA\\«'\rí{E­H_*Ñ4èØ©ðP)ŽDXÕÒ\$B\0Tº2º&4\ršR¾BÕ\$žÏ.k{¡Îk=8ÞFá@Ž2ãhËfµN=ÂÞ®}Îß%\0P¬4ŽC ê0‘t\\)Äý“YcÈæû¶‚®«Š±2§,5Í–2ŽOå‡SHr­OTÙe\n£ž1‡VHŽ\rrC\nRR¥BÍ„Áå54BÆæhŽE)Õ–¼1+%’\\à«I‘‘À•R¤I’i)ôSG‰-;Ùw\rÃ¢þø]ÏÈÞ2>/žL\nbˆ˜4¾îhˆæ¸~nÜÂ–½7ÍÊTÍ|Õ1\rµ\")†¡HC.®+PV	Ls'ï(Šù`g²C\r^¥)Ý.ænEAÈ'RRðWo|ãmÖ„¸êé<Í}ÍC2qsA´Û pï9+„»¢Ù%\0OkUémµ¢¾á&ÛŸ¤nÊmX#£pÆ:O³ß‡¡ÖjwŽ#8Î9=¯·£‡xÂûV bŠ)³¤K¼8:>û`ðñ¬ë'X–)õ¯¼O-i¢BˆÚAˆ|j‘šF|“KËV¥%2±æÞòÃ¨l\r‡ÄÿÂ@ÃnE\r˜¤6×:ÊÙÑ¹+â=Ó,>ÿ uoÔ†\"âbŒsäEœ>ÕfÜ¤JpœÐºx+k~R.ü\$zèœ¬;rå9_›xßàŒˆÎõÑ”‡\\†›J~ðýµ¿¦Ý\r7*.n!!˜ˆ›‰„S%‘yá¨“Px\$ø¼‚Þäˆ‹±C	Ä³ÆXæãI´xq]ü‘(pÅš¨p\rëõ‡BHzäQ,‡ñ:Ã5_\"LW±fA¥bÍ\$²øAjªDèË¤,itÂ!éÂ÷äo^:d)o)†ÅšŽÙÝ/pðÌƒb+§\0Ï—’Þ—\$\nJ\n¼ò†Ø2AÍaÔ1†3ÞÃ43¢°æˆrš„3†V';»\r¨¬:ŸpPÁI^aL)blÌ2ˆ‹ÈíRÀÉg(ŒsèI#…Âœ¡ÂI‡DÁ'\nç\nøœdý5¨íØF¤ÏlÄ²=Ì¨wÜþÊzÁ˜ª†c¬2p½¨TAîbÐH\\h»X.­CÅÆDa]!‡ŒT_”…Êø‰L AT]zCÝõiŒþ*Qu‚haal`óU æä[`¡à8/ÀÊ((<'yî`zƒ@tÀ9ƒ ^Ã½qÅu†æ0¤Xgá”7W´ó_â~àŠ\n#Ü+8_?ðd5‚ }\"Z½|€ð†|ÖÁ]\r\r}°ÙÂÏh<ÌbgWf²€hÝ1D3ð¤º±bn*jX—,Þi|&Õ!µ:4ƒãáÏM ¢­§ ænÅrk-¡@?J\0o	h\n\n (ZÖr›U>N‰à*¥”`.i×7¦ýc¿úK¤cMè=Ù@\"ù”KÕG—\"ÞG7E	|’“¶Ù\r/:‚ƒMm9m®ÉÎ—kÔ£¢‘Žyõ_1\\«¨qN7\n-ºJ#Í·eL„ÔK®Ôm‰ŠŸÍÞ…äï~Q\r,WíNÌ<£«€K{m¸2ø¸§ñF@PI#áäî\0È[äkL˜76ò~ÁÜ!Ô÷µ Ì—h !’ºÕCó_\0c(m#Ÿ\0á9&_@…¥¹¼²oA\n<)…D)—!¯%¶Úot êˆ÷ïâÇ7}pî-‹îâ„B˜ †›€(iø3ÎC“ÞOØú¯<óÒnk¥£ˆC>Ñƒµ`Ànš%¢6\nÆ´sdƒš6ªÆ‚¥Õƒ-€4šyÖ­OÊ,™Œ×s=I¢bi¸H<êFÇØ„™ŠÃÀÊu|„ðœ¨P*P³\0D¡0\"íV…?íîƒ~[L`ÙúJÓ2Õq¦µ¤i^_@P—a…®²wy?×º¤Í²@z¥(Æ¿•ÖòcÊTÜ\0PD¡˜0Á´˜L+éFŽ–yP”‘òFX}\"Gi\\ÜçÑpÓ«ÑÞ!Ó3‚£‡)¢¡*Ð9;>ä\\ª…rÄ¤“(o!“ÙÖPÃ[^ÎÑ3ÈZ´¢ô»žoˆƒjå,Ú0`î~ý­­òŸ¼ã>a›úÞ˜,(*PgÑ£8‡(y¹=m…ˆå¡Çã\\õZüíœ¥aA\\°êÉ¤'1¡ÅàWŠ9`Ätü/ö„’t‚“–riGº‘?\nÒì4ÁSÞÃˆˆ\"-\0”ù\r¢Vaö³ÀŸ´äïdQV`üå\0êÃ@ ºwVâØ¢Ö×’!^ì‚cJñèÌj§7 êz\n—{Ì42„¨o	¶ËZo³Œ¯IBèQ@iA”5Ú'oÔ\na”ö<ú¿·ùÌ[ãCÆx¥*úæèŠ‚ôÓŽàcˆÀ(	!»ˆLÀÃh4Á†xÊ×Ø.si*ëÂ\"ú[(°èbÎ:ˆœíïÕgzåÒþ`È«b©BÆmŠ¤#HþL‹ÊŠ‡Ž‡â`Bª…(1‹hJPÓPFJKttÉ MÊ~ŸÃª@ïlê«„•'Ø8PLÂ'~÷oÞØÈT ð~àh:i0‡PpßNd,äâh®Œ¤’èÖŒÌàC@àÌÂê’+á,hxnevëÉ™ÀèaÄÚBÈ?ËXhO\$ (–F^Æ+¼…N–ÜFdPod¦HxgdÚî¨\nîêçD”Ú€¨ †	\0@Éf0\r#Þ	v<L„\$‚‘Eú«ë~GNz-ãÍð„©Œ7¦v9¢6lë*}IdtvÍÅP#(¯Úé…ÐãÍÒëï>ÃovŒ.¬pÏsÇ&/©ÀwqtÜp ¡jÅKùÌ¿ñŽ €Øq=jˆé±¥UOzÀŒ9±“Lï‘_‰ûÐ\0v1Š¨BÐé*_±wê îfr)!\nHlˆ;0òï«ä©Kè;»‘°ëQ—)e±½\n“Qÿr ]+´N‘>ê(BÁÇ’Ä#ÑÁ\"‹_¦oŽ´µ\rñrI\$æÀléÖkL âB0…€L,•Â¸™(|Þ‚(b‹òukºñ.Jùd£®‚(\rI(£FHäçQ£\"PÞ¥h+W’€¥·Ñ¶¹^€òec@FÏÒæ’Â¼ÌÁ°u/a(òâ~\$ë\n²EFè¢.ÔAæž)	¥‘ÈÜÊ–¥f(°Ä,æŸ‡I,nÏ(x©ã*ÎF}‘Ò½Êj‰h¸Cf% PcØ—f¢gzãd‰xéÏŽ„¤îÒverßÒõ%ŽÄ/£5Òê êzÁJ‡5ìÉ0äjÃJ%J71\"Î°‘¹°š‹lk9Sk8Å0’‘ÊqCn‰.¨ï.g:S‹Ón¥Ð:í†t0C3G#*ò^wÓl¨c€ù³ÚÜSÌ€ÞØhµ#Ó½=“¨13ß;ñå'Bˆmï\"À|\\Âê-éøKJ%0¹93¸âŠ0'îáŽÓ+õ.²“#äo/° -óLµñQ1&FNT7A´=D¢Ïà£mò}ÊìOBÑ	P1Qi\nð\$'ð(«o<òšÓ‘‡P<3û;±g	Hu(ãG>\0@\n€ò\r0Ûð“rÄ:‚6EBF9EÍÔnÝ#®ÀgH©hB3Õ#	>m”ÈÃîE²[-ÑÛè™Mr/HÔÞ‹ÑÒçÉI­Bñ2”‡=t‹=ÔûIÿT»PO	O3†êó§<ç‘µPå&\$;Psê½sïˆ~ˆ'zâò¦ý¹PÓóQ3Ž”ÕJŠ5N‡±	Sõ8UM“ã:¨ÉUôhüõeH\r6Sw%5-U§6iâ¿\r³ýmA¤{#Y´5?R&¤‘Lcâ!ñ[ñ_X¡R€|F¡ÔE?‘®•ðÜë4ÒŸ‘ÙYá]1tÕRq¿Yr´Rµ°!•µts ”9[Ð\0è3Ç\nõÈC·Qå;+Æé(fÄPkKUSZSi?Ì:£I]ò7¬-U%Vô÷RöH%bõ»>’ËTg8•©Ut¹Áec‹M®îô²Ü¯.ÁÃ[ÎTÜ;G ñCRØ3RŸ´\$ð¶OR–\$í°öNqBøc\nøšÆÀÚq¹¦Úà”fˆŠvA§ŠínãË´àuÔ¢,ège«Ô[a2ô•1¶(,ýe‰:ìöÑZ¶ÕgH‘0•1;¿[l6Ð§Þa¤4¢  «š¹UØ46²½V·Fµmkëwl+|ïv@ìößµÃe/ž‰0TfÄÌTñ(4¬¢ùEQ×nì§Ï?öjoýr´'R'OXu+eSùuõƒLöu–#sTÜAOþW×tÓuV·yeYec…x)!S“OSÖKxÕDæððD0êŸÐîbÀŠ<&²¹³·UWihôù	è½zæ\\L—µ{×_×gw·“v÷ÉIÍA7Ò²K›x±VÔõX—m7äÌ†!A#z ÊQ··~×Ùawÿ|¸{0»€×Õ~õ	7VJD?X«àïUb^¯aaË”/…·5g_t	ƒ’Ìã”E¶ðAÅ@÷…\rT4üÆõ“5r²¡«Yws£|7}|uÑ^˜pX1ÝxUå+³XØe5˜Á×ð§v!yÉU§˜yÇ ÒweR¿/.Ž•UdÅØ„ Šm-Š×‰‚x‚±ë‚S‹Œ÷u ‹)zg¦¸nÁWJ‰Y_V×V(MÃxö‡¶=n¶1‰3ŒØeIÝŠ6W—Oˆ“ˆsÓˆµ‘—áI6íÐ®Š¸¯Œõ“&xSQVw£Ž84ÜTšSJ—½×Á‘tÛ‡Ô˜Ñ9VÓÞ“yM‘X¡–9¶–îïð;–­3t8±•—”˜áŒøäAPl6EØýhµçX‘Ð¬¨7-mx¿HUW’×ý™™¯t’šI™9ÀywW9/šÐ›“”8‰W+3a_™°ƒa˜÷ÙË—•”ä˜x©K~&Û~x~gd¥Dv¡°ß4Ãš5ãc—ø EHS%¹tÓ¡fC¡¹;qYa›ÆÎobSje¢ø£4í–ñ\rŸ¹u7ßÀªOô˜j8x€ùm×¦ÅC%ï‚¿ ŽæÐí‹\$Ï!V>”C«Q¹ùf®¦Žö¹L¸—“#Pvï•Û!¹“©S\n,ìWyÒOc±æ!ƒ€öðï4ýJ£FBÔBÅ‡vßcy¥:±~:·­gÇXËSù69åw&^uÆrš£®Óu¯8)Z÷[æû¯ØS\"º¾ëoªY Øl´\r Æ\rizÔJÆþ¬˜³ ÚkàÒÉ m¼ÃÖ<@Úóf´KBÔ@ª\n€Œ pŸ³ÄX+Úí‘ÙÈ¹Õ…	R’TxÖÉ˜ÕØy¥±­¶ögGQm/vüLQFO~‘-o9Ô\\)Åï£­ý´U”˜æâãîÌn»ª7¥8¨¸NíŒlAëê„@›³ÛAA™¹u´V‚~ø ØÒDö|Vçk\\„F.ŒâÃÁ¶3=0œBÔ\$âòñ@5§˜g å\n§’ôqw'\"WÀä”‘3·Ð’`˜Ô¤VE¼>(«2‘cÄ>£û„Æœîý›ÿ3‹¹TwÅsç5‰WšZŸD'•@äy¨0>â»x£»¨u¬N»-’Mwkbs¬wë×ÁÆ+¾Ždb¢¹f6âŒÇy‰X‘>Èƒ«{øŸ¥™¼¥À¨ñÃà;ãÂTË\0Þ5\rjúQ9É³ãËÐ‰ Ø],w_‘K/–óªÈuË•‹ÎŠu®\$&Ä@Ô ³\0ŠE‰„|’ýúNeYg&” ˆ>Í^{©“ù¾eòª#î=ÎÀ_`Êåô Æ ê\r»á\r¥D¢'àŸÍÉÖúo C`ŽºÍÆTïÂÐ=tr0ÇW¤5¡\$Ü,¥A	ÜmWàP\nœzyÃí­	\rm¹' û…‚WO°µ:^ZðönzèæýÎåj‡\\¨_ †{®³ÝFñ©‚úfÀ=]S­ÑÕÙ58cý¹s;¹;&‚Hö‰«„Ÿë±§ü]\0	\0@š	 t\n`¦";break;case"th":$g="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¨ÔTI9—Ü&€‹35 khð§¤Ë_ÈñÒH\"U¹³Œ°×Fò™q8Åã·.§Îe|€Õö’&“l UPÛIú¶ž¦sLìJ«/\$ý'§¥+\r#è:Œ#eÛa·òÊæ‘jYfIŠŠ²¿Û±ÅaY93dÅ\\!WÙqJC”Mc=b6¥¬ïT	Ü^RÛQShžÑ+;¤ŸÄ…ýF«ùapYÞ+›‘.ù*á”_°Óƒ,EŠªg+	#hàü£(Ü:Rá‹ã#ý\0ox¦(‰ƒL\nâ¹²Ã;y¢ãFcíÓ·D©“r­¦iûÃD£‹ËmU2Å>ÇÔQ£·¸°6ZP‹îçwÎ[¼Dð¸7‹Oa6%>\$žÔNß\rZbmãéÊœ4—`×üE­ÂêÊÃ<.E;„R,}unN0Ò8”*ÊØ«´¥‘W®‘3¶:VÏ5E;5ó,fm”ÜÑ‰ë‘ŸÏ¤ð¬±þ·sºž§u{8«w¿eYèÚ³²æb»;+¼w¼#£`ØÿAÈ@9ŒcÝéeëWJ´˜™mI+‚vðj6Í–ª%šà\"'hpà‹Fú¢Ê¢?YI€!ô0îÛÀ¸oîùÀš´`˜ÅÂÕ8Eu¯\"Æ<Dà{r.\rÕÁ‘ûÃh¡´0•–Ø˜,0†PÐ8cÃ\n‚{-æ+•Â˜¡2²,PÙ½»A0ÞÜÊ|,ÎDÇrwÚäL8m¹¼¸U¸žÜ‚”:Åf\"—8JØ!D>‡pÕÝµ£¾†`t@(ô ÂxoÁ˜6#ÀÊƒÑc\\\"Ý3/ÆTnB o>PÐ7@Cps¡Œ1ŸÀæŸH \r¼3£Àæðr‘Á„3†x%8%iÁµT\n\n˜)k´‘Ö#M)… ŒIŽQÖ 	I³`òŸÁeŠìrd\"Ö>_eÉÒEŽôíËT¦¤¤og\nB¢6rîÉû½TNª\$.õJ˜…9X\nrX4†ðÜ ¥ËÂEŽ0¸„Œ ¦êh'*±¯2FcÙÄ‡šIo–ô@¶ÔR‘Vå`&†æC‘ó¡ÁÌ;†ðäÓƒ(xÔ2†@\\äA\rà3ÐD tÌð^é€.!’VàÊuà½£SÀðdŒí\rÀ¼>Àä~Ã¥&è5ù°DšC†m:À^AóIia¡¦´ö”CYïjÇÎ›ÈÊ¨ƒæ9ß55T§bªÃ”‘‚3²wSªoWê„;ª:D×Zcõ¯Mé9(…¸‰ÜC<\0€(€ Aˆ*	\nAµõÃ/ªÙ¼Äc”UJ¹YŒó8¨Ws¥1}i{g™æ‚WT1jEí®z¼+xK\nvKUN¢Âº[±Â6	ÜeXvß\$ø[“é5\$ˆ ’ÞÜÔRå`\$’PòzA\0d\r-8ø´†¢šrA ‚<ê@fA¼6‚\0ƒM#õ@í96ÔOò?¡ÂRGûE9m\$²¥ÂÁÖ¸k½+etžÖò’.±¦¸ñ4L¨\"gs,»Å[‚Z`\\åt…-DM——v|•\r¦1Í&ZZçì\\\r™<S][âÔôyîÃñèMÓ0ACiïåª\0Ì~y÷ˆ!*X÷äÓƒKB¢Í\"±Þ«Øûé¹î§Òqu:LÙ1k¸Á2ã#‚êæÚW ('„à@B€D!P\"æÌÜ(L¹ÑƒËi¥‹^ÚXC„íÌúÂsùÎÆVcœÓ‚‹n†V¥Î·?Dã£³|Y(q^Á÷8qÀPD¡˜0¾–—Íç+3Æz*Å(pEÃü¹ê1wAÇÌ¢’“Ð*iZs29Ìò&c‡eNß`…D–	c\\nê¼HBÆí'F¸ZŠj–ÂŒ¨KhÄ¤±µŽÚX€{†tK==6¶|#Àó7i2\nû‚Û„˜vÐ3 äâû€Öëšµ\$ú†­^*íeW´KRRˆÈŒŸÛ–\\È:Å‚á‹®2»`ø	[Ó*†ÆXå/“‹e®÷^\$b\rÑ[R–ï{F6b¢³9Ý1ù©Œã7p–ÈS\r!è2€ ‡{„®ç³¬ü†4\n¹¸OÂ5ÌLc÷™¶°î§g²y»oÐ³A(Í\n÷Ð‹+¤Â7èVŸ8>È€:MO6,²›ÎÝTq/²àXŸ¡I‘n¢le‡î3Ë¥’„fJ¸‹AYB‰Õ!á7·¤{úJ'R‡!¸æˆ“±áuêw…ÕåºÎþõv–[E‡:·yF8Èkgô_€ÊâÚÕö×}\\½ØîÞ‹M·_Bb¨Øn“®0Œg0¨BHš›†“ùãÁð\r÷y\0‡§GPy3x*%û¶nŸf»œÆÀfU\0^f?*%J]\\\\*šNÖ3ƒÿkÅyÎâTØ0îTî~ZŠm(.mö®ÊQŽHÅÅ6é–ÅC1æRýÉþD÷áJ+Ò¡·C<.¢xP\0BGÈåæÚÜ‡U¸e0\$ƒð(Fª•†½`îb²€ïÚ(îÞJƒ&SŒÊJ¾CTåLFSm¦óˆ”àêÝK6aãAåÆ9\0wf‹m\nàÊF¢L´ÈÌãâÜ~¨@áp›C*Õg\0-†Êö§hx& °¥[Æ9©œ>íÐxLh9âzXLU‚~\$< .BY(wbf…H8òJ9ŒEº¡Fòž'¢ß-lÆP:ÜIìTâ³‡+j<-jq«2þäŒS\"^10DPN¢U‡úÄ2YdmƒQ‘K‘*b¶‹ÅŒqMÞ÷§ÑcŒ0‘„L- ±kïí‡Æe«ncMÔØ'¶Ý§¤cüÖdZµM‰F\nS¤(NÇHO‚¶l¡D+1Å\nP»Ä€ÐðÜ{qªÑPxð‘Êí„8Ø‡^5®òƒNÎƒ°jƒãÂl¤8ìC#1dÐñ¦¶ÍúxR.nÈ¡¸B-ËË Ð\r.QŽ6àSDpŒ Þ¼ü	ŠDMÆ*rì¨>ƒhY‘æEäô³\$±•!q†ØRg’îbÆ¸‘“!IÓò\\ï’íMÒánä™òo(rrç­)RI'Èz‡èi‹%c(hÔˆ°ÿÐê÷‡)©Õ*Èƒ\$Ï­ŽÌ:HX8È]+mÌœ-õ	/†ÍoQ§z+±Z9²å§ ³¾!Oò%ïö˜¶ýrÐ çÀwr|£Æû*O,¾Ÿïô¯û\$í›.¸œÓ&øÄÀð710œï®ôpí4†Í(S! \r‹3¯8Ï„:†íá3DJås-Œ4œé¼UT÷®îƒ‘ê&r*E±öËÎ¥!å5’Ä’§)ƒšl¬º°‡Ÿ0M\0Óí°o3— Ñ¥!\$De2–DBå6§¶ó(Žµn¶DMO‚¥7ÈpÁâvq“Vðs\\TŒÆw'èë1-NìÃEÉefE\"°2)=N¼öîª;²÷5‹ Rß,…€‚ããB°“f`±‰6Ñ]ÐRêÏdY\"Ù\rð”(B,ÕÔE	qD°ˆÿÓÝ%²4òóUD,gDleEÓE)ñ%Q…F(U-’AãšögkD”,3ÞlÔEn[”\\\\´=9/b-C¢6Ž.¶±&v”tF¥´'rbwsh<#Q4³\0LdQ#ÂPÀ\nCÒˆý+ó1!N	]Nt{HSJƒ”iAôoOä¦ÔèIóiCtS-TeH”p`@}\0ÜèÊ…(”f…µ>€Þ’ È¨ð÷tš…õ!RIÝSÍà>k×SU8ç±=7£šUÄ)8bà'³t¡1È>€Hz¯™R#ßG³3B	×Wi+PªPòÇFõ‚¼õyX“GF²Q”þps5Y&Xt÷QT†ïu ’·W5…W³/PÔ5Xô€Yq7çwUÕ}NÔoUpøU°»C(·QÚ8Ñv9B·•ßUÕICrgY]N(a‹Œ®jø€¨> ÎòÕ™+T!a/*¦öO•Ÿ[U£[–aVWÕ*A•+-Õb¦õú4àAd,[Oâ'”pÖYJrµ`o`¯…`ë=^µ±O²Úí&ò÷æMfÄÃ.²ŒTÒqI“Éhg`Ë;h­Ê@¡ÀÐbO^ Í‰\r|¶«‚'¥Ù.eXKì‚ì0­üÎMPy\\*B‡‚XéÍ]°Ò 6!frˆ…!å!	G\"R¯Ý?öÇñUJ-q+0=1Œ)	-1IvŽ@Økì\r Æ\rl: ŸLuí@3Ï¢V+\0`Úª\0Ä¬IÞ\n ¨ÀZ\0AZ¦šG€ÏÇ*8ÓmC¶+°>Ÿ´8ûðêÑŽn(6¾–Ç¶üVÒŒf´\0	·^ÀòÒÂî'ex#Ÿ8áp‰ç3s\$N\\\$¿fï0o/70Ï¥Ãr±íLuþB(gv+4ÌlâÃ\"´,F†Fé&1°Í€Þ¦wa|\rª,=äAf\$uäÝÅYó#n±Ò¶²ä’â@©dà“õ6WO/zO6ám–äLGƒÍjÞ2F÷2}6ÑŸ„5×B´n\n‡ÚùãØ=×H«è\ràáNIXçŠ=‚˜7†RN4@ÆÔ´ÁâXr»„O!ˆ›9ÓÑ)(Í9èQ#Wžp¯<çµ<.è¡6E²;Š†ó;“˜%ñØÏØ‚ôbà4­—×y\$ù¥òçj:è î^`Â`ê Û@qa|é½¤ìBˆž‚\\'¡=B#¢9©­böÒLfÍ\\Q\$XÙÖçÃ;f:m6e±òRB³ƒš×g\0t£‰¸H™ç·m‰“Ã…pºx6æ6–êhñj¾¢\0Ó¸pïŽU½YI+Džx%(+°ÏGtˆ DUeO£·˜Bæz 	\0t	 š@¦\n`";break;case"tr":$g="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtëTù;©ðÆ¡Ž‹Àä£î£òŒ#’Ý#Cd<CkºëLºPX9ã`Ò*˜#Œ£z˜:A\"cJÐÁ\0P¬ö'kc©¤N ê7ª{_\0>b\nhÞîEÉx@·ŒP~#½ƒJÊI‹ÞÆ¼…Œ0BHÚ87	‹\n¢ Ž\0Ð7ŒŒÓ89´B˜£4)8­#MNÄŒ#‚|Á–(Â49´0pŽKÀÜ¼\r«Â¢2ªrq>:=zâœ'Š’¨²Ñp³)>Yb×³,’<Ž€M:›0NË9B3–5 É#oµô Ë.ÄhÒNOXäº#Èë¨ ­’ÀÂñ>`PæŸ>”µ†¡¼1¸Ø:ªcªú<·{|ÓÑìÔÞËP˜øDÉÕ¤'³pµ5„å*ÁÃ\rP5¸îŠÛRKèúPôM)F˜¤òEM_4~_Ð°A!Ž´ ëM÷¥±%-ÿcÇéJVÛ£ÐÜå##[O‰òË¨xî?G.X=Ÿ…AÉv¸I@UûØÕ<æ6EKA­Þ3ÐðÜ2¤æŸ\ryÌ*\rëœ,7!n9Ç#09ŒÎÐ@¹èæ3C–¢0Œã\nX–ThpÐ…˜R“Ä˜ØäƒA\0P!ŠbŒ„S€åŽ¡pAUCjxÐnmv’;c\nN!9Ïj\"ó–‘¥.“«Ê2'É=É…Ž­ðç3zf6ƒ®À6/ Ì˜³C/£jËÌÎÏ¨&Œ3â<èæ;¤³(Ê<`Ê2pAâ.4C(Ì„C@è:˜t…ã¿¼#&ÔÉ(Î¦?@ðý ÎX^[C“.:z‚úâîa}-K‰¼xaÅÌ¢tÆ™LÙ9Æˆ4˜PàGšz^sÄì9:ï”I¿‡<¤4,	óœJÄœ*ž Ü•L0k\"FaÄ†@Â€H\nF(Ä@ˆé¾+N®yü)æITFÍˆót>¤6¡ãÅ‰c.&\rØe†wáó\"\niŠ3ÂÊæÜè 	Žµ×4À¤ˆô7=Ìñu”IÂI\$ŠD4¦S\"aSA4f”=âa` ÁÉ.—Ä@øt\rÀ1—\$ÑÌËÁ2íC˜rl^Éx]@'…0¨lˆùlH<žõ†[©&¦~3Â,âÈÓC~N–5‡PòÑ»*[k ‹;“ç8n\$æ(ž3ºÔ’ào|,ð›Îô‚&´4‘pŒ!™ÝL±08Sd„tDy—‡0wCÖA§˜/\0åÅ‰ÜR…\0 ž\0U\n …@ŠÝ‚CËzN ÷š³\"ˆ`JTÄÐ\ng´ø&Yý@(f €‚ƒ)¹¡COss´@%¤3–Ï!@[hèÒ‚|[0\n„«8:Â §ÒdH0£\n‹d€gPT6¥nzHË9°Ðé…šjÉÉ§ž‘•4äDý/:¥µ¸Šx’B%ïaçÑ7úÆyŠhA4ÖV^½«K61*b)/V Âb,¦á­£B\r\n×ÐŸ\reíŒ„GAQS£Š^Ðu`†0ÍÙCSJ{Éß—G5t5Ò>íåì`\$œ·—£\0ƒg„òQsÑ,\$‚å;©zA\rtté¹!f„2#:¹`bHY¸(¡@o5ô˜ïB@‘mÎbðÝ€¨¥*qƒÈn9À*€‘ÐÍ`(Zd\"ÅÛÎ‰Ô®ì©Ó\n‡\0004Ó¢Ý{Eé8Ð€X£åHTÏšUM¤_ „S”L¨f~&«\0žw£%èíÆ£Ò‡^[DP*†%æb6(îDìÝ]o,“…7ÌebTK\nŒ•uF¼Â¡To„à)œbu1:¤rIÞ,'\"ØÒ—e¢²)—\\aAÎ&5°\0œLü‰âIÇbÅÊ}}'šVÈE\"G²LSÉ—ìCãûÉjòÔñ3tµÂaK©'Tg+(c¡?T2®WÈºxÂ,›ŒÍŽt—Û<cÑO™²Éçuw2hŒÐƒ‘Q0²;‘’MHÉ#¬€û§­4KÈƒ—T6bTnŽqBLÜ2†,@Ž\n{T*'ÝŠ#îž2¶‡Ë>î/„Xs\"î¥\":Õ*­	çL»âMÓ‘I÷¬€‡¢ø%Ç…DÚØK±AëT8­»~‘xš±ÛÉ{ŽŽ‡DÁzHæãµÅÏpïHjœE_d}Ôo-ðÊ˜N‚®¡ÀÜš\\Ãho3l1ì\$ñ£Bc!Sªù.-e/q˜›Äøê„à÷‚4Ø[žÆÞú`{ó1Ý\"Y¶,Yx¹eÊ,Ón´øu¢Þ°ÚÄÌÆõÌ|ú»/u\r.¡åT3~Öî\\Î‚‡iÔôîŠPúZMé«Ï§×vWÀ™“\"ýq³6\rÔ\$ý›aÐ«­Ö³F5Y+`3{®{˜ŸÑP‹!ÒŒk—Ì.a…Ù0˜ å;ÁSïdû¾ø\rE˜·ã¼·jó‘\nAËg?”c÷W}’1™Ùçšv£õ[±v—A‘wypsCÍ+—Åu@¼Çs‘ÖUüfÉ£>´åžiY[¹6;HßÜ'“”„øví3ºÄ\"¡³4æô™“Ý×¤½K•àíè:’óJ˜ˆî6çä]g–n4þ-¬bƒ±¾ZµþoÃú÷¤êœóþžEé'¶ý›‰Ï¯ÈóÍÆÀãàXþoú`Èÿ0ÿ ¯eº9k¸wä*BâÞBÌ\n`ÌÜ¨‡z¥ïñÈ˜gŠîïþëp:îïäíERUb*\r'\0óŽV1)b4.”íÍ÷ ÜU€ÒUÐì\0³\"Eh(ˆåè6‚6/nökCßð•ÒôÎ]Î˜å«ž”°¤¼KŸ	Äæw	¹P¦i\nð¶@Ð´½åÎÿmí\rÛ\0´‹áP½eƒ/ÉÒÿ\0´[ƒ½\0@òÁƒæ@JÒòíØG‘O0FÌc²Á±OL	iéB¨¥.ƒcÞaªç\n8-‰€!i¶¯p~9E^#ŒøÑkFTLºÆ¥¯‘IlÓT\ràà\"Äˆ3d¸îå:ÇKì^SO­±TïÌg=†HÏÈ)…ÐÀN%º=£DdP\r€VJ¢þSI„U)¦pÄø&È `ª\n€Œ p7íÐLƒˆÎDÊñÑ¤HÃœcëDÏñWìbéä”Æ<ªdàÄãdº­‡wÀÍâRCÂÊÉD6‚òÛÊ*qŽWùbdÛ¦0)‹îëò'Æ(_ã‡t8@òŠÅzƒ¤=ÂHd	Ò\"è¬ÚÂ.®©3%ÂøögDpPÞo^,Œîgî¹/^ªJ²=\r(hÍÑjX1L´rŒv¼ß^v	l—1¢B#Øü­îQï^1í2þÎ4c2˜ðòo…l	®\$®¸Ÿ ô¦…£	QÍ.no. „\rçnçÍÈ‰Øw„úš¤</DÊEàÊä\\Í`êt\"ú r²—2¸4GæQ¦Œ#@ôP‚ø¡&‡0Ô7±˜£]/fFg «à¬.®'â/)\n^-ê¦¤²žH€†z#@4EÌ%âØ!–š“	DZ-àÖ2¨šCî|…Ä)ƒ>Vå4@";break;case"uk":$g="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.ëYD’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÓL•·‘A¡;–Szu CD´RöJ©‘`hr@=„¼®Á†BƒÎs;â+\r#è:Œ#b5MÈrJ¨Û­)ŠS3NéjfBÔðª²ƒQˆÑ54Ni|ÖÉèÑ>É«)ŒF#D]VD¨kgZhI…„˜—;ršFêöH‹¡	#hàé\r£(Ü:KÒð\rã#®ìŽn@¦(‰ƒK¼µ *™cÃÍÚb—QF…†GF‚Sn¿%,@5j,¨b&®7ÖvirÝâó~5o6-HÙ´wjÿ¤ª¾˜Ìª\n'yB‹^„¹£A›3ÙÆtœ×ÍñeßØ¬¶5hj€Ñ®„º4H>Ð³'¦76»Db(ÕÿF„`[µ¬ƒ_AchÃ¦Ê@`h~U´¢e+!ôÌï–@*I`Î¡ÊPtÀ#£`Øë¼®’01Œ#t|Cé^bAiðÒaIÏ	›%&å÷û}cÊHr£T+|Þ11;ãÎÖÈt/ã)œšáJz—¶Ùý‚“Õm&‰\nŽð\nhƒH=–ßxµ5ä3ufw—ÌÖmgau6šHöiÆ\rU°ô¾&Öhä¬~ºû¸‡)å¦'S[¦Nhå:Õ—½àU—så÷þmÙEÊÎ|C`t@(àœ0ÂŽ@oÁ˜6!\0Ê¿i­\n¼å†×A\0u\rÁÌ:†0ÆuC˜fp €6ðÎ„š<€P`0†pÂ„0g+¹S¼\n˜)-fhÝ¨bê³–  aL)føÂ. „q@Ô¦Q‹¢–…^ÂÊ4DI	@„¬[ÁÌA‘)\$\$ïñ\$DòjÂ›J½&4\\µ6¸Ã‘|ldÈ’TnTDb<EÍqšp™ÑÙ6lªÅú,£J©eQÛ2ò‘‰àM!Ìï#™\$Ã˜w\ráÉyPðe‘(‰0=A :@àÁÐ/áÞZàÂl@ºM†p^º¥øx;Ðl4†ðÜÁˆGP:J ¾yœhk@ùr®pÊºWX<á„.ÕÞŠó]Á„5œ…ôs(r‚Á¹uHÜ…WÑçé7F†ZÛ?Ì½â¬D!Ù¶ogñÚ¥3f£La7Çô¤¤¡n€H\n\0¶‚%}R¸(,à¥E‚”S:¾HR0¨å|#\nˆNpÿ&¤B!Gíÿ?ÅŽCÄ³·%¨eB»óúSË[w¥'Ø»-ÂQB*u\"›×èoXñH7©ª)°#ßé{»wÓÑc&ñe‹J3±Ý’¨ôJ\\õQJEv)%‚xH¸y8@€2•är—bõ\rËÈð Aˆu:«°3 ÞA\0A—èë†…Ô%^¶6¿[Ðš²‰®]æN§¢	M+i;‹Ê Â˜TkïIgÖÒÜ‰sXÕTZ1£iH!Ÿ£õ¡7ºeIç¢0¦ªR‘;zßJ‘²]©œâpTÐ;\0j‚\\àW7 Êç\ròÜJ`ÄC8 ^á0c¢r„¦ÁP(]Ú÷W4›]“žÂØr1:N<»Bl±‚:A©F¤É¹E>J¼†ÉYzè)ª°a i„Á=\$ùí‘Áµð \"aA &Æƒâ#˜XÌ¬´Øï\\¹?fLÄÉø«Z/UjU‘¤ÆTÅúvEMæ§\"ÂtÀPD¡˜0¸UØ•-‚WE6Ø-Å.Á[»õ}‘e°àå<IOcu±¼¥‡•ã‚Ln vˆýQ1´`õÍGžÂéÕZ¥­eEÈÏk*Ü{DÖt©ÆE@1òÿÌ7ÈÜð´éWŽñ!¢ÊíŽÐë_01ã|.Ñü~a¡;©îÁtJxËB¨Â¢]zXW.‡Ñ'E]\rÇnˆ,ª%†‰ –œeÏl|]j²Ï¤y²6Šlý´,Bð\\÷S)ŽÝ>ö˜ƒCHz (!Øpá\r¶˜S§H1àÉ™óóªÄ¤)Óšœï_Ê«z¢ct-1±1dÆ‹«µŒSZR+{E\$¦¦ü ­{\"xÈaØïÚ’¯Õ“¤Ã¤‹JÆ\"4)­éGÓÜPÇþ‡ïäN§‡\0ž«Êî¯(š‡ØÃÉ/\"+ÍY5âtçíJØ1L¯×|›ÒbY¤@×ŠQ	z>Š7†S2±tÙ\nFŒQAf´hÓqÕ;ÔE°€úêÁ¬O€( …@¨BHt†“«w`AÉ\rõäíå(‹^k*¦…#Øääùä3åê©}ÞSEÓ>7üÊ‹ß˜Phc@ô¹'eŸ.czDD§#ë<Œv-Ð“÷Ö!ßØ@.>1˜x÷ø¢*w“Ôt‚ÿÿ2Æ(o“óÌ}@ÆßGãTâò¡¶’W±}h¾õüÎeåâCB¦[«»»*¼íã>÷œ\$Ü“ÈfËüwºôûãÞùFÕÆ¤¢úì/Üå²§ôýQPûþY~&iù;ÃB÷qY{ïÕë<¹ÝŸLÖ¯™r]‹â2ôŒ`gÚ@'Ø,%¨\$k2A\"\\6.ŠÙH¨Kˆ  ¨ä4Š¹§D!#Ð,®Wj-‚Ük–Üâ!Eþ(P>VÎy\0‚œýB¥0F>CVLª´>ðèèÎ0åV*bŒÙì‰¸áNâ*¥l˜ŽÅ<#CFaÄÐpA Èê‘N(Áä\n50ˆvePf!ÍÃVŒO ÏÏ8=JHpÀAÄeï`./Û¤æ,ðÒ4/¢Øìa|LMäÍ&SpÖGÐÉ\rá Ù‡Ü4G%X+oˆoPôÙ­èÕ,ôFìP\$Ê0%JÎÌN}­æexRâ ¶E¨BjœŽ­f7'\"ŽB<D\$Ül¦ÚÖxOÂ´¬Òvc¡FNÄ±06ê+\0=1F2QJS'¶!®oÎæü·o4ö/ÂÞ,p.mø¹ˆyMBe‚=ƒFŠ`PªÂÇ‚T1tÅçöÎ§jÒGpÏ&·Æ&-’ÿE’UÍ\r!hÇ#ÚMë`EOêÎ‘åíQ÷Ðœ}J[r\0ÎQìCðÛÜê‡ŠÑ!f4Ñ˜¤’‘çðy2Cr\r\"O#(­#qóq_¤Î³ätF1~¤DÉ\0oPt1¶éL´ÄxüpÎ(2Q°Üü/FFPÔU’g%ÆÚ~Šh2r‡®˜2|û\"êLÑ×\rrSÏõ(²bþr”Í¢œéžéd_'¯ß'åÃÑ#’«ö!kúòåÀ<Àr7Ý\$Hã/Ø`Ž9.£#(2ÛCÓ/‹ý.rZãÓ-r	\"Q+2JÅ\"Åd3„|ÓêŽs\$0Å\"®.¢Vîs:>Î2.£¦˜ª#,?\$7á2©êÁŠrf)£à±©ŽŒçPÊWƒt7ª¹*¨ý1H¤¥*¸“0KÂì|Ó\r.N].Œ2.Ñøo‘…2à'bÜL:âÇÙ	Ñ°B±¶Ìæ:ÝÃw0Q#ÒY<ïi.äI/2Ü RcÍß\$2\nW“æÔ2FÑ†9>ÆA)\nãÓàÏ³åNœ+¡=RU#Ô\\Sñ1Ò2I!íŽžãÓ#„Ó„—ANXO„ŠGåtø“ZY ÞÂdØ&:1Æ\r9MÜŽP@b§d>èg\\ÍM5,rv‘²®£òð(²ôôv4ôzÑô~Œr³(rH’ÅHÆ)GÒrG>s¹ãð†’|f¨eT®dpwH²uJ1­BN,¶it@}9LòÃ)Ô¡Ñ  ê:‹1îEL®.*N¥.XNŽpEKúoê«I1ÛHSæ`âë©ö Õ¸J“õA!OÇOP½QÕ	\r“×!¿MÎbÒÑ½Q•.ŠT7?³gRuAQjpª”æô\nÍßBŒo4u\$U##Õ:w‹’Ç4ÙTÆHLŽ@¤nT+õ#”#ÁDä%mA’µVU”Q”\"ÑG‹JÒ…LêE>¥sW®ªd•žåa NDû@T2S-ìëÈëQ(ï£>5\rUÊM.²lÄùY”™B•ÞP‰^uk?5§AJB¤¦eêz”ŸLpBÊ\"RŸ§Þhïq\n	LW(ÑØûNRôjöFi6Ž’(/D¬5ÕFPYbéøÒocj•c¶%+9d!¢YVFúö5'-N7ì–ŒS–lÅ¬úð¶(â›E°Fmc6tÄfV=bt—Ib½e§ST)R¦ü¶O+–?iÕ›i/àW¯”Úˆ\r€W1-/UjÛ&ÉX6¿ê<¶²àM'BAE¢xËÎ]Àê’€@IÌ»\0ª\n€Œ pÔeâB\0ÎúÏŽóñ¼Ój7Â<|´FMÚð÷ö²Cq…8ls\$÷¯Üðoù÷{Ÿs1úÜeV\$D³çˆò\r3S±±8\\`›p`Ì\$&E´7BRð >¤J@ó˜urXêõáqãVZ¨µró„Fñ•m#Õmsº}’rCñƒlï«CfÆv\$t#J®}­”@˜»jêB7½|Ü“c;ƒÈt¬°ŠcêÒ*Ô3ÎƒpöÙÉñi£2CfÊ‘‘75³cS1ñ åÁ/Wù—ëj·r)­‹vwæÞ—ÿ¿]‰ü§u×ýdÌ\$÷4O`%8`˜/¦˜OGù=ÎþuaPb7XÍÿÑ5€ÁwÄüËQ@-´k…Ç§\n#Õ‡KLàQfo5ç?g‡8c£'8jðŠ¼I\$’ ÒT­¢”@@T\0Êà\nÀÂ`ê ÚÇØ:(dß}ÖpPF õ0+ŒÓ4ÒƒêÜ´:PRY)°;Ð¥7;Ì¿¨àvcýKb2	æÒï˜Ý€Xò#Eøwí¨º9-ŠX¨ÚEä:³OµSP&h1leì&-à He¤ö2mH§\0";break;case"vi":$g="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÊ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹ÀñÈ@3Äè!ªpK P›k¼<ÈH\n3°Ã|•’/Ð\"1J'\0\0P¬4ŽC ê0€P¦¦‹RÙ!”1²dœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘Ü˜„ˆA¯¯™Z8B<@Ë(4}#=%3÷2—s¤n4Ê P’6Ž`Ê6Œ£sø¤H£*:7ŒˆàÞ£˜Ê\nbˆ˜4Žƒ*\\,UoS*Ë³3‚h	KFt†Æ @§Ž´‰†V\rÏC”Ø-òcë!Õ¨Ä<Ø!@æ»u\\w\0¡)ÁRÔÕÄœ«²<QÒ‚¥¶ën	~Å/E+ùf—eL a”MË]é@ðìÒ‘ÂDë²…ÓáJÄÚHù qØÑ,Ó P\$ƒµ4¼­ó‹+DÐZØ(Ž¦RþŽé@‚-Ð^X½½¸c46)²µz&0×²Kf0d˜<]ÃcpÃ\rm˜’© †)ˆšC«JÂH9¦U[\n¦ U¾È4lÑÝhZIÞ·®Y£T]µëR‚Ó\$”O¥ÔþíÇÅÖÃIU»b¶t	ØÏ5“7;^Û¨1CbÐ#{40ŽUØÞ3ÔHÝajŽéB:3òRàa–¨˜Â’Š*H§ÉÚOšÐqNI¡À`@‹”q²:ôèŠÇdÍµ«åi?ƒs*0¥Ò3€§®´(zØ¤#vCO…âFÑM8”ÉI ÅlÓò]cª]FÈ•›¼þøÎ—\nÞQ×9å4¡t2|Åøt|ha«‰”ù…Ò“}aê§¤ø|Óû€çdþ2ZáC\r„3ÐD tÌð^á€.!6\0ÊpoAœªØzna¤ÿ‚ðDG\0gVP˜/† Ø•CX\"ÆôaBL \0m€¼0ƒæÂGÕÇaF/¢€ÐKs>'Ì‘³ôöDÃ(sˆgü—B¢†IB “ô[\r|.ì¡°‹¡n€H\nÑ¢<%Ïé8C\$É[”‚–í–¸hw2	!ãÀãÉ‚JÁfÇ°èÒŽ©‰À€?D2“»gñ‹–>ë‹Qý–\"t»R~”\n”\$\\TœCü~Ñü}oe÷â\nIpI\"AåÏ Ò­Cpo?Šè7+R:Cš	¦¢8ŸÀÌŽ¸A†Ø9EZAC`oWR2p‡\0Ã‰pDXê\$Ì’èQ	`/\n<)…GvwŸA9ƒá\"FöÀ	„X#²ÄÂQ&ˆ·'rHVÞðÖÚV¢ÏáBI\nDÐu¦†<<xÀUãiÅ'¤¨–¤ì]‚0T‘fø£A%O»Pg%COµü—|W“.¨ò;šN[W\nEC,’JX%Oa\$äï&êjÂÛT'\\ä£ ™S’\n?TÙ”d|.ÈBkb5n„@Ê{šÙ0PÊÈ–‘4¢)eq˜“°p”¢<5/d‚SB¬´Ic\"±d|‚ŠÞZÈØd¢‰îUÖæh^~\r2Áv\"Á\\1 W@AgÜCiµíq¤%D¬ÒÅ‡ö>¥„À–èT-&„©zžÿCKÿqhI«\0Q\"dXeˆ\n¶9†ëšºÒÑ=VlŽ&û®nŠ)×@ÌyÖ³äŒ(êI;qi0%Ø2iEjþ¨¥‘ŠèvÝQÌl¡´¡»…õ\$‰CD\$ÑÕ­¥¹JÍ“nAn±2Ô5ëÄ]àôqÑo* )ú²µ[9ˆ`j„ªÐƒÀxÅ©_¿ð×â1Œ·Ð%ãPH°àDéYŒ¤°œðt†ÄQ\"G°I«­FY- P«tâMÕ\nuNà( …@¨BHwpÜ4Ç@èÜÙ›aÔ8t°C%¢!	 ×ô]Øm	÷Ñæ‚\0^tá2I&Jå@,IÝ\$É¥ý<\"ÞLÉ®PåÙ\"	sÙµ„Y x…d_\$»@<5–Ivu ÙÇg2g—‰xÄ]“2TJYÓº9› Ó\rOáþäQ´S+@î\ra+ÒT'i¯ìu¥g¶¢RŠPÛ>i¹R×å¡ÿ¤dÓ…iL\$Ój¤}±}uUJdàU—bŸUKÆlH;ëKÒLDñ`äŠÛñWqþ`Íð½ã”‰jŸ˜H•X”UŽýq–Á0H¤M—¡ñ.<3„6°‡¸™ÕXŠ:6âd½5½`*¡j‘~JMÄ‘<Ìr„„O\$4J6žú?Ö³àBÄ¶saDA(Á&Uz5ów‡Sº–å¨(Eß\\+„=¥ã™C8óm«FÂÄãì+ml\r+±YIª8\0ßÈg‹ÝÚkgø:*ù6ÙµÞâM8·3k=Ô&!Kel3õª\"wíêvºLÚ¼'w#½å±x6Ù	pG¾Õ§I6@ðuÈNáx¸ãt‘ÒF.¦bgÓ²¹j\"Þ”3õž6\$xéÈ5øÖzîÛ=‡Tãí¦4L”n\\«Ù¿¬ñáé‡±‹ºwZï°:¼(õtl‡ë]BÌz=×þ,X§ŽEDT~ðuÉ”øóüâ•ZL‡½^%õ¯§…ñ®‡«ŸmeªlcXH²Ù6d]nu/r’Od[ìÿC6ÿ‚íRuPÀÐöä ö/ïÎè[ðÏ9,ŒYoj¯äïp0ùfŠñGqð3%¼ZÐ>ÈíjÉ†Ô'JÉ\nVïˆJ&47,j8Fp\"å¦I!vH\n¨Zì`:¥¦x@Èom¨,©2ógPÏÏ<‹î÷	hmKe\nGNÖ/þf>¼/ã\nh#ÁN\$¬1Š@€+bîJ¾Ž”Pn\\´é\"/jö5d¦¡ªÊõÜíPc x§.îÞ¢‡dl¬°±¤ëŠËån€Ñ-P’¡Ž}°©o˜0,'&LÉG)P@D1Pož²¤•ì'+SoîeoÆ& Q,[ïÆQZ;ðÉ„”j„æ\$„pT¬‹­jð/X—l¤ôlýÉJlNñ&ÉÀÏìôg¬èêº¡ˆ»¯Œ_kYÂP5î5ƒ¾w¥ºÎ¬„;+x[OÃÖÜ§ö9€Â¨)ˆR‚Üaw…Êücà´°žââ\\	Ãæ¢bÐ\r‚(Æ\n€K´G–åæb\$\0B·\"H¼ñ¤PbôçƒJG¤ü €ª\n€Œ pîê|%\0J¦Ìøû‡&Ql4…@\$1%	ùl@n¤¾èšQo”/Át›l'!®ñÅG!pÜ6‚\\{‡²ï(J£fIE(X‡¶ÄR`¨âÎgFx­l_vÇ3ËP%QªAA.ôn2âJ¢õð AÑàfÀà´J”½r¼âVý¯ý	|\$ƒq,Æ€#o·ö¤\$Ü†\0`F1EÍÄ-åÂGgMc„åxåCÎ½¯Œ¢l ¢¥%0l½Ó,'\n*®N¶Â1èû©û\r«0[ÈÈÒ\$ð%‚EHQ ô¥jK`ÊñèµÆ2%ú-Rð7€çÂ¬°d>{'¶D^Âjäã\n	‹ÂÐz=¤znå \$¦< §¨’¦Ÿ£FŠë%:PH#›-iŠGgC5…v¿“[5àÓ6%j9ókqÊÔÉBÞd²\nË´¥ÅEk*^bŒÀ4b¢";break;case"zh":$g="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*ŒcÚTÄAns–%ÙÊO-Ç3¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdŒDcìMœ¤Al²¤‹‚N-9@€§)6_¥éDî’ë£Þ+\r#è:Œ#bÈY—n\n—)äQBr“/|'\n–èI´ä1ÎP)kÄ ¥Ñ&²0ÑzJ·g1@œó¬“<	#hàÏ£(Ü:(Í\nÖã#HÓl¨¦(‰ƒKVÚ\$seL<Ä1Ii0_å!tà’g1<B6ÅqÌJ'ANCHÅõ[WÖ+ª”X¥ÙuOÎ}RYLÓtì‚^ÓàQÒMÖ„–’áÎZIi9vsŠzFœåé\\–‘ÌtGÙÄÊŸs¼da#Eiâ\\VÕJ]<„sœ¤QP€H0ê6\r#dÏ„˜Æ0ÀU&&¤Š<]¼GAU_¥AÊQÇIt?„™Ê^='#nÜÖõ…€Å³–R\\œÅD¾^]Ìq_f9žA7å“‘ÌSGAM6œÄé|Íã«¤œ¤:Ï›W¥Ô7TŒçœäwE‘N PØ:Lk#“*7ŒÃ0Øæ­©ÌY•I(ôŠƒ{06áƒÈ@:Ã˜ê1Œmæ3`a\0Ø7Œî`æ4ƒ–ô0Œã˜ra-6¹ƒ«VaNÜÂÃÄ@@!ŠbŒ\$å!ÎD‘Š¶<F¤•áHÓ)ªêr‘¤¬¸nD+}Dû)ðCHÞ7idûñ\">=c>ÎÝÒî&Œ#›V93>Èæ;ã•2„¢2Œp@,ŽÌ3¡Ð:ƒ€æáxïý…ÃÈæpe@¹ð†p^¡ 8x5mõãà^˜0r4!Ñø…ófÃX\"ÊA†U\n¡Áà/ ùD‚j„Á„5™U,f`x€*Ú¼@æàkÉâtŠv:«!\"½	 ¢à\\áþ@¼¸‰Å6%zzO„è\0I?éGÄCÜCAG!‚%:*\"h­N0ta\nó	q0&Fš“rr!\0æÂÕO±áU\"ec‹ôP(“H˜yla4¨ã.¢ˆnQÆ´×‚ÌC©¢Q˜9ðÚÿmpÖ¨`@Ü:‘4†¸Ñ‡ ÛK@¤cáÅ@ Â˜T‹,ðÅ’¶š#Ê‘ej¸D¡\0!XØž”tˆUÀ¸˜‹†0Çò\r;‡Í ÒÁ˜ÏS:ûB0T‹1G•øTD/“’y„À#)\0åˆ–nKŒs\n¾+ÅÈ\n	á8P T´\n‚@Š-\nE‚^=TÌZx‚Sô]!¤8³„¨¿e¢™g)¨{@B eÁ…¨€ì•dÉ-w‚EpvÀ€.‚0é˜M„QtØEÔ\"È)ÅÙà<H˜Ã‰†ËD™ŒyHäïžžœŒc[Sµ]9µp%ŒD¼ªŒ_‰±Î*Z9Iªèrˆñ1‹ Š:B6”r(\"jpœˆ1ÁêZŠÁB- ªcBÕð9ÑnìIlþ´\0ñ« ¦CÐeAO5fž!Ÿf¬2Úªx‡HÍ¼Jµ†išµ²§¾µE°ÈÓÃ&UÊÁkŠ+pKEÐ,‚mW\nËÉh·CB(Pô%²Õ´H¦h\"»R÷MÙÝbÐ&ÅÑC¤I‹áÌ#Œ{dM:È´¦h‹…g­+°ü‚PÕ\r^Tç¹2\0ªC	\0‚L@ Òh›#f2Á¾Hpá<Cnâ”ò[æœÜ„ÊÂ\0¼aªvKpž?‚žjx+Ä«ÏrÀƒˆñ.’Eˆåb6#DÑ4]L@xŽ˜ÌVÑKŽ!öù;õú‰DN\$.´»ãÌ–”«˜Qt;ØÔJù!(ž”ÑpH	:í\"äÑ;…º\\_©}0€ ®CjK×[+‹k}„…;Î©|	A2‰…°å\"ps\nÕ².Ä*õTŠ›A^Zr´èÌsˆxxKÁz/†¸ˆ;hƒª¥J¤ãžâU,Š&Å£±Ôz”»¼ªzuuX®A:·Pê”“µ0²·Jã\\kDvŽ½%‰:‹ÛÌ\$ÄrÎb`›\nAÊ áÝV‚1S¡”6[‘ÎÓiâ#ml] Zv»·–Ü^=bYomÅÚé20šCHãh€S‹\rÁ¯í=\\×.¾h¦mõ¯¯Öÿ%+q3\nÅV5nÀg®ë]òÌšÎ¹à<B×ëîk£ùwÀA¡;á|™hÇ\\oŽÅúýŠéÞ:ÆËp\rlxntû×<˜Ý%Â¯¤¹òô–kƒZ‡(’š’âˆ~áê¶>'jApBz:˜{©<ò¦*:\$ýèÂ K‘ñËÒ!ñr@¢àUnÊtHÈ”Ý'º;ÔþÀ†êÕ¼ê}Ü>ŠÔø)hw2ÚðAnÕ±HüÞÓ«%iàùuÙðÊÖ©s‘÷¾¡<7Ô¦s>þ®<¡(æ÷gÌ’’ïÁ|éÝó‚êû/ÆH[r¨h©lW³Q]OBú9“ÃuTù~Î·Æ´r-à\n‡¼¾|gë[³ðyç1œÐC¬ÃËÞeòôME¦üíí~¾h¬¨M‰î©¶8uJä5«ÍýEÏù8·—V®|¿Ô.b!¿_ÇÈûŸ¿ùU÷÷óÿ¿ïý?òÚÊ>÷\n»k¨ºÏ~×»¤Âÿ´»‹«oöð¥\0¬ÚûãÞÐREoC\0J”±Ao\0ëx¿„-@1€{ Ð}>÷¥Ø¼êœhÂÐA>©L4;dn¾LÄjœÐÉb)ät-\n\"l\"Œ´£ƒ¤–Åc¶Ö*ÚÅáWzÆ,f1€†l\0ØiP\r Æ\r`@xé¸¥àØ“(T\r¥\r ÌoE,6 Œœ¨L§´›¨\\y\0ª\n€Œ ppÎ9£jå–ªa^iCùb4#z«AR<Œ(W@›ðÓAf†L.!ÑãŒÓBú>d'c¼‹Ì½Š:ÏßžŠ²!jµ\$–Ž\"Ù ˜\rçü9ƒi·Ì5#b%¡wÎšeRÄ€ÕÍ,,¦¤.­rzŠ„ØKfªaI<ø­ðÖñ”.à¨`ì2C)IL\ràà‰Ü³#.„ñålêäœ@AÌZ«z˜bÐÜ­ŽÙ)†ÝÊDJHìÁ+\nF¿RFlôùç°{`ÒJ±ÌQÄ  î@¬ Æ ê\r¢0‚¤,ÚET¸AÌg|ÂeZ&\$ÎÒ¡Çª„G%x­Á«’SÊ‘åö³fÌ5C*o!K2QÃ;!Ðf˜¸<n9î®ONŒ ð4E@	\0@š	 t\n`¦";break;case"zh-tw":$g="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²/kÞÁ)ÒP“Ç)<·Ä©p¨’êY.R®DùÌLGI,I¥¥i.Oc’t’\0F¢å±dtì)Ê\\—È*ð’ëÚ¬+\r#è:Œ#cÌ»/ÉÊ]g9f]Á…‹Ø^K’ LªÇ)pYÊr•ä2´.«ºó-•h¹2]¥Å*–X!rBœóÜú	#hàÒ\r£(Ü:AíEÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qó¬²CåyÎRPa s-¯a~WÄ¡r’GALKIÕ•i[TËÍzë±\$ñÒPP„Ù\\‡ÒÃòØ˜STTU\"ZC—±)qTd1ÊH\nY N(KqÈ]—g1GÇç9{eœÄq%-‘õA2¨ÅPQP“Ç1pMÚiâ|ƒB Ê<RI*[Ëe2ZE£¥é8Ã¨Ø65-»HcÂ79ÔáÊH—·;ÊtåQËˆ_–*–D’q’Ür·õ}Z—6µ.fö±a/•ua™—ukçIÚcO1<[hjYX§©iWÐç.®råÒ[¢œú>~½/’¼íÏ:F‚ZÕõCQ’d86ƒ“\$ÊäÍ\rã0Ì6:#+uBÏšî\n7³£n><„¨Ü9Ž£ÆÓŽc6,\rƒxÎèŽacR9qƒÎ0º!JÒÃk¢:Ú—ŒÄ¤Bib˜¤#Rã]¿>DYÒC‘®½\n^G‰‚ør’Åt\"D'ÄQ?Âk…Ó\")òƒHÞ7¡eP‘ÑjFw½ÿ‚Ãú)JÈ‰£æØL÷Ô9ŽãxåK`ã„¢2Œp@,¶öè\"\rÐ:\0æx/ð,Èêƒpe@¹ùp^£ »QÁÍëà^˜Èr4ÁÒ\0…ópÇÃX\"Ê%E†U£Áà/ ùH‚&ª—†Á…Ý:e  “Š‚*<Ý=@ç»ÙèxPÐ(…Xå¯<ø0F*A(-˜Âä\"W8»IJÔWŽa-˜P	A a\n‚R„0D‚\"b³°®ÈšŽa\$G@­¬ód< Dq.&ÉÙ¢Ì+…ªÚwå>‰Á\0OÊ	gw‡ÍbŽQ(„„	!˜–ðJ–3ŠAL†å,l  oaÄ:šu ƒo\r € À÷ûM’ŽÌ©“RlÍ@ptN\0žÂ  i‚‘•ü¿„ÙB\rŒs…x‡dìŸ†®Ì˜ŠÒB\$Ô„2fU=ƒXæ`syˆ4†p@¦Â` ÆŒÍ'ú‚ Po2¹Ó(§ä¤ôú—2íL‡#3Éh¤Ã_aÒ#E©K„¡\$\0ž\0U\n …@Š¨ø &ZL“ú@¢<A­ªb9É’¨Dˆ·0¦.˜soXâ@ÊƒRÙ*ËSÌ*ØèâŒÃ<vŽáÞ<èŠ³Ø.]]\"âœ]žB/£à„i‰pÈÖ¸¢…OÉã\"È¶õI[šûF@f¼&Ñ*9Ä‚r-z”šÙG@®Kh‹ˆ±\09„)n)œDˆ‚ä+`š)\0÷¹£dYñn9)õYD`„(¢êÌ”…Pð¹ƒ*sQº:Ù’Ê½\na¤=PåÐpu–ùê@Æl!á®G–+»ÈØÚKlhhDU+•v¯[Ri?D\\Z\n!Ê/XäVlàsÝÛ¿xh¨æB@‹¬¤&Yè¹ª²v‰QJ-F0§r¦ŠòØD]R¿bd^_Ò¬9”‚CÂ\0QªãÌ/;†¶¸^/ZqaÒõ‚èí‹±mnÍÿ>hhø„:©(T!\$	iƒI§o-ìÍ†ùXk…ès	ñJ:H¢xg¼OŽ–®yÏ+¨\0¼,ÃKDø·1ø÷äžÞû¨1ôÌý‹Ñb:Dø¿‹ÅÍ‘²Qv))›XÊ&<È½¥Ž·„@©¹¬PˆÄ¥\nÇÙ\0QfÜè#\0RuJB\\‡pæRÉ)M'D„Yè‚pSˆþŒ{Cœ[	8ŸDœCy´_UtÈ™°2A{b€@ŽM>'8¨BB\"Óg<¥uZ×Y2£Ë¦G0­D´A¡áBª•f´ÉÆÅˆyDF…,\\!êæEÌ	ƒkT‘|EN£Y\"¹íizãYžÐæbÐëÔ1Î²³jX†+s,©BK4ž•ÛõÎìÖÛ ñÐ­âWâç{6tœö·Ó8ß¶åã‰Nç@‚9T\n!9P	h?+xFìšvˆÏ=|LrñZoNx‰-ß7[^[½x\"µæ¼}ñ‹\r)ó\rŽä·ƒpŒ@ÚÖó®’7[™inÝ&õ°6&Îž:gÝ¶sÎ‹€[xäFôñK²Ò„_C½?«Ý\"ÛÒy#9Þâ£¬fÑ#DzyÂö\níìÿ–C!ÛÙ{0f.sÕk™?¢tV‹‹^Á¾ûÕöï½k§øùFÍé½vr‰#•{…BZ?C–%¬qK…¼_ÜèœH¢jÎ¹e<{åS²y\$ô•‰±}\0 .MyÎ—\rÜþê¼¹Rô™¶úøz3¹Õ§‘»7Æù˜¦™vøaW\né^ÎµÞ'Ëºÿ;žWŸô¾i}éÕëì+ÞïrðÞÝýœ~Ïøþ¯D¯_›!žÃû0ÿ[ýxsóª-a‹B¤8s\nõêô‚‰º'Á|†hBÎ¦çNÖÃ/ÈVÂ¢ï¯P/Üð°±Ž”'¸ÂìD°2DÐ>Xâ|*P\"%¡6D\"Dô.\\® °£õl/¡s.giðvûãÉŽ²ý/äÀ%mFâægË–ÀKøMm	ÌÀÐdhëõ	ï´%7\nL\n¿Ð‡\nÌ¬FdFá/ Ä„8°m\rLM\r„éðÜC£\"	Ô\rð\"ë^‚–Ë,jf¾JÌÉLò\0 —'&ˆàP4àRšH A×-vHT¡F¢.z%ÁbÎç²@B.±\"×E˜Ï-ÚÛ?a1èÌ#\"fê\r€V˜€Ò`Ö’ª˜\r‰j‡@ÚR ÒÇSÃtÉø†Àê}iæ3GJ\n ¨ÀZ\0@QÀÇ¤7NrkgÌËLê\"4#Šìn,€HnÆ@›„U.ÐØÍ 9ƒ\rC–ÚDxÁ¦Ø¾Ð6®­H)i,°\n;…Ž-\rè:#¦	’u'ä3C\\6Æ^±âæhA<bmÂÙ¡Î,­êý!Ð¡«²2%‹²Þ--¡Ñî¦Ò&(EJìnt2 ¨cLd2ã3i„\ràà€ÒuKz.nßïû¦ÊôŠÜÅÆ\\¢Z¼æîb¨¸äá+)fgR.Öa,\"Ì§GÒ}€ÒJ«x\0@J\0Êà\nÀÂ`ê Û\0 fkA,ã&œ½…pÊ…}ÁRÙ…,£Í#Šº?#¡l Á¯²ø¬ƒÍ\$’Lfö5ã4qRµ+’vE,\"ZÃ+\r¡%ÏHÁéÎEäbF`	\0@š	 t\n`¦";break;}$wh=array();foreach(explode("\n",lzw_decompress($g))as$X)$wh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$wh;}if(!$wh)$wh=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$wf=array_search("SQL",$b->operators);if($wf!==false)unset($b->operators[$wf]);}function
dsn($cc,$V,$H){try{parent::__construct($cc,$V,$H);}catch(Exception$uc){auth_error($uc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$Dh=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$Xb=array();class
Min_SQL{var$_conn;function
__construct($h){$this->_conn=$h;}function
select($R,$N,$Z,$Xc,$We=array(),$_=1,$F=0,$Df=false){global$b,$x;$_d=(count($Xc)<count($N));$I=$b->selectQueryBuild($N,$Z,$Xc,$We,$_,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$_&&$Xc&&$_d&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Xc&&$_d?"\nGROUP BY ".implode(", ",$Xc):"").($We?"\nORDER BY ".implode(", ",$We):""),($_!=""?+$_:null),($F?$_*$F:0),"\n");$Hg=microtime(true);$K=$this->_conn->query($I);if($Df)echo$b->selectQuery($I,format_time($Hg));return$K;}function
delete($R,$Mf,$_=0){$I="FROM ".table($R);return
queries("DELETE".($_?limit1($I,$Mf):" $I$Mf"));}function
update($R,$P,$Mf,$_=0,$ug="\n"){$Uh=array();foreach($P
as$y=>$X)$Uh[]="$y = $X";$I=table($R)." SET$ug".implode(",$ug",$Uh);return
queries("UPDATE".($_?limit1($I,$Mf):" $I$Mf"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$Bf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Xb["sqlite"]="SQLite 3";$Xb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$zf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Ic){$this->_link=new
SQLite3($Ic);$Xh=$this->_link->version();$this->server_info=$Xh["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Ic){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Ic);}function
query($I,$Dh=false){$re=($Dh?"unbufferedQuery":"query");$J=@$this->_link->$re($I,SQLITE_BOTH,$n);$this->error="";if(!$J){$this->error=$n;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$sf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($sf\\.)?$sf\$~",$D,$C)){$R=($C[3]!=""?$C[3]:idf_unescape($C[2]));$D=($C[5]!=""?$C[5]:idf_unescape($C[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Ic){$this->dsn(DRIVER.":$Ic","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Ic){if(is_readable($Ic)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Ic)?$Ic:dirname($_SERVER["SCRIPT_FILENAME"])."/$Ic")." AS a")){parent::__construct($Ic);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Bf){$Uh=array();foreach($M
as$P)$Uh[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Uh));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$_,$E=0,$ug=" "){return" $I$Z".($_!==null?$ug."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($m,$nb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$h;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$K=array();$Bf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$Lb=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Lb,$C)?str_replace("''","'",$C[1]):($Lb=="NULL"?null:$Lb)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($Bf!="")$K[$Bf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$Bf=$D;}}$Fg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Fg,$de,PREG_SET_ORDER);foreach($de
as$C){$D=str_replace('""','"',preg_replace('~^"|"$~','',$C[1]));if($K[$D])$K[$D]["collation"]=trim($C[3],"'");}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Fg=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Fg,$C)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$C[1],$de,PREG_SET_ORDER);foreach($de
as$C){$K[""]["columns"][]=idf_unescape($C[2]).$C[4];$K[""]["descs"][]=(preg_match('~DESC~i',$C[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$o){if($o["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$Gg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$L){$D=$L["name"];$v=array("type"=>($L["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$i)as$kg){$v["columns"][]=$kg["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Gg[$D],$Xf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Xf[2],$de);foreach($de[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$K[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$K[""]["columns"]||$v["descs"]!=$K[""]["descs"]||!preg_match("~^sqlite_~",$D))$K[$D]=$v;}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$q=&$K[$L["id"]];if(!$q)$q=$L;$q["source"][]=$L["from"];$q["target"][]=$L["to"];}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($D){global$h;$Cc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Cc)\$~",$D)){$h->error=lang(21,str_replace("|",", ",$Cc));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$A=new
Min_SQLite($m);}catch(Exception$uc){$h->error=$uc->getMessage();return
false;}$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(22);return
false;}}return
true;}function
rename_database($D,$d){global$h;if(!check_sqlite_name($D))return
false;$h->__construct(":memory:");$h->error=lang(22);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){$Oh=($R==""||$Mc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Oh=true;break;}}$c=array();$ef=array();foreach($p
as$o){if($o[1]){$c[]=($Oh?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$ef[$o[0]]=$o[1][0];}}if(!$Oh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$ef,$Mc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$p,$ef,$Mc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$ef[$y]=idf_escape($y);}}$Cf=false;foreach($p
as$o){if($o[6])$Cf=true;}$ac=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$ac[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Id=>$v){$f=array();foreach($v["columns"]as$y=>$e){if(!$ef[$e])continue
2;$f[]=$ef[$e].($v["descs"][$y]?" DESC":"");}if(!$ac[$Id]){if($v["type"]!="PRIMARY"||!$Cf)$w[]=array($v["type"],$Id,$f);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Mc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Id=>$q){foreach($q["source"]as$y=>$e){if(!$ef[$e])continue
2;$q["source"][$y]=idf_unescape($ef[$e]);}if(!isset($Mc[" $Id"]))$Mc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Mc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($ef&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$ef).") SELECT ".implode(", ",array_map('idf_escape',array_keys($ef)))." FROM ".table($R)))return
false;$_h=array();foreach(triggers($R)as$yh=>$kh){$xh=trigger($yh);$_h[]="CREATE TRIGGER ".idf_escape($yh)." ".implode(" ",$kh)." ON ".table($D)."\n$xh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$w))return
false;foreach($_h
as$xh){if(!queries($xh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$Bf){if($Bf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Zh){return
apply_queries("DROP VIEW",$Zh);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Zh,$bh){return
false;}function
trigger($D){global$h;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$zh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$zh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$C);$Fe=$C[3];return
array("Timing"=>strtoupper($C[1]),"Event"=>strtoupper($C[2]).($Fe?" OF":""),"Of"=>($Fe[0]=='`'||$Fe[0]=='"'?idf_unescape($Fe):$Fe),"Trigger"=>$D,"Statement"=>$C[4],);}function
triggers($R){$K=array();$zh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$zh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$L["sql"],$C);$K[$L["name"]]=array($C[1],$C[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$I){return$h->query("EXPLAIN QUERY PLAN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($og){return
true;}function
create_sql($R,$La){global$h;$K=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$v){if($D=='')continue;$K.=";\n\n".index_sql($R,$v['type'],$D,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($Gb){}function
trigger_sql($R,$Mg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$h->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Te){list($y,$X)=explode("=",$Te,2);$K[$y]=$X;}return$K;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Fc);}$x="sqlite";$Ch=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Lg=array_keys($Ch);$Jh=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Uc=array("hex","length","lower","round","unixepoch","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Xb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$zf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Xh=pg_version($this->_link);$this->server_info=$Xh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($Gb){global$b;if($Gb==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($Gb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$Dh=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$e);$K->name=pg_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$e);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($Gb){global$b;return($b->database()==$Gb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Bf){global$h;foreach($M
as$P){$Kh=array();$Z=array();foreach($P
as$y=>$X){$Kh[]="$y = $X";if(isset($Bf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Kh)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$_,$E=0,$ug=" "){return" $I$Z".($_!==null?$ug."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$nb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){$I="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$I.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$I.="
ORDER BY 1";return
get_key_vals($I);}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' WHEN 'mv' THEN 'materialized view' WHEN 'f' THEN 'foreign table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v','mv','f')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$K=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$L["full_type"],$C);list(,$U,$z,$L["length"],$wa,$Fa)=$C;$L["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$L["type"]=$Ca[$cb];$L["full_type"]=$L["type"].$z.$Fa;}else{$L["type"]=$U;$L["full_type"]=$L["type"].$z.$wa.$Fa;}$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$C))$L["default"]=($C[1][0]=="'"?idf_unescape($C[1]):$C[1]).$C[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Ug=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ug AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ug AND ci.oid = i.indexrelid",$i)as$L){$Yf=$L["relname"];$K[$Yf]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$Yf]["columns"]=array();foreach(explode(" ",$L["indkey"])as$pd)$K[$Yf]["columns"][]=$f[$pd];$K[$Yf]["descs"]=array();foreach(explode(" ",$L["indoption"])as$qd)$K[$Yf]["descs"][]=($qd&1?'1':null);$K[$Yf]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Me;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$C)){$L['source']=array_map('trim',explode(',',$C[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$C[2],$ce)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ce[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ce[4]));}$L['target']=array_map('trim',explode(',',$C[3]));$L['on_delete']=(preg_match("~ON DELETE ($Me)~",$C[4],$ce)?$ce[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Me)~",$C[4],$ce)?$ce[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$K=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$C))$K=$C[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($C[3]).'})(.*)~','\\1<b>\\2</b>',$C[2]).$C[4];return
nl_br($K);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();$Lf=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Th=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Lf[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Th!="")$Lf[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Th!=""?substr($Th,9):"''");}}$c=array_merge($c,$Mc);if($R=="")array_unshift($Lf,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Lf,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$Lf[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$rb!="")$Lf[]="COMMENT ON TABLE ".table($D)." IS ".q($rb);if($La!=""){}foreach($Lf
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$j=array();$Yb=array();$Lf=array();foreach($c
as$X){if($X[0]!="INDEX")$j[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Yb[]=idf_escape($X[1]);else$Lf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($j)array_unshift($Lf,"ALTER TABLE ".table($R).implode(",",$j));if($Yb)array_unshift($Lf,"DROP INDEX ".implode(", ",$Yb));foreach($Lf
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Zh){return
drop_tables($Zh);}function
drop_tables($T){foreach($T
as$R){$Ig=table_status($R);if(!queries("DROP ".strtoupper($Ig["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Zh,$bh){foreach(array_merge($T,$Zh)as$R){$Ig=table_status($R);if(!queries("ALTER ".strtoupper($Ig["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($bh)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
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
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Xf))return$Xf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($ng){global$h,$Ch,$Lg;$K=$h->query("SET search_path TO ".idf_escape($ng));foreach(types()as$U){if(!isset($Ch[$U])){$Ch[$U]=0;$Lg[lang(23)][]=$U;}}return$K;}function
use_sql($Gb){return"\connect ".idf_escape($Gb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Fc){global$h;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($h->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill)$~',$Fc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
max_connections(){global$h;return$h->result("SHOW max_connections");}$x="pgsql";$Ch=array();$Lg=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Ch+=$X;$Lg[$y]=array_keys($X);}$Jh=array();$Re=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Xb["oracle"]="Oracle";if(isset($_GET["oracle"])){$zf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($Gb){return
true;}function
query($I,$Dh=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$e);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($Gb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$_,$E=0,$ug=" "){return($E?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($_+$E).") WHERE rnum > $E":($_!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($_+$E):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$nb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();$pg=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $pg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $pg":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$z="$L[DATA_PRECISION],$L[DATA_SCALE]";if($z==",")$z=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($z?"($z)":""),"type"=>strtolower($U),"length"=>$z,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$L){$nd=$L["INDEX_NAME"];$K[$nd]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$nd]["columns"][]=$L["COLUMN_NAME"];$K[$nd]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$nd]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$I){$h->query("EXPLAIN PLAN FOR $I");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=$Yb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Yb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Yb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Yb).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){$K=array();$I="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($I)as$L)$K[$L['NAME']]=array("db"=>$L['DEST_DB'],"table"=>$L['DEST_TABLE'],"source"=>array($L['SRC_COLUMN']),"target"=>array($L['DEST_COLUMN']),"on_delete"=>$L['ON_DELETE'],"on_update"=>null,);return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Zh){return
apply_queries("DROP VIEW",$Zh);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($og){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($og));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Fc);}$x="oracle";$Ch=array();$Lg=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Ch+=$X;$Lg[$y]=array_keys($X);}$Jh=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("length","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Xb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$zf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$rd=sqlsrv_server_info($this->_link);$this->server_info=$rd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($I,$Dh=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(!$J)return
false;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$o["Name"];$K->orgname=$o["Name"];$K->type=($o["Type"]==1?254:0);return$K;}function
seek($E){for($s=0;$s<$E;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($Gb){return
mssql_select_db($Gb);}function
query($I,$Dh=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($E){mssql_data_seek($this->_result,$E);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Bf){foreach($M
as$P){$Kh=array();$Z=array();foreach($P
as$y=>$X){$Kh[]="$y = $X";if(isset($Bf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Kh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$_,$E=0,$ug=" "){return($_!==null?" TOP (".($_+$E).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$nb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$K=array();foreach($l
as$m){$h->select_db($m);$K[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$z=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($z?"($z)":""),"type"=>$U,"length"=>$z,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$K[preg_replace('~_.*~','',$d)][]=$d;return$K;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Mc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($Mc)$c[""]=$Mc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Yb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Yb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Yb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Yb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$I){$h->query("SET SHOWPLAN_ALL ON");$K=$h->query($I);$h->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$q=&$K[$L["FK_NAME"]];$q["table"]=$L["PKTABLE_NAME"];$q["source"][]=$L["FKCOLUMN_NAME"];$q["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Zh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Zh)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Zh,$bh){return
apply_queries("ALTER SCHEMA ".idf_escape($bh)." TRANSFER",array_merge($T,$Zh));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($ng){return
true;}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Fc);}$x="mssql";$Ch=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Ch+=$X;$Lg[$y]=array_keys($X);}$Jh=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("len","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Xb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$zf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=ibase_connect($O,$V,$H);if($this->_link){$Mh=explode(':',$O);$this->service_link=ibase_service_attach($Mh[0],$V,$H);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($Gb){return($Gb=="domain");}function
query($I,$Dh=false){$J=ibase_query($I,$this->_link);if(!$J){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($J===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;}function
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
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases($Lc){return
array("domain");}function
limit($I,$Z,$_,$E=0,$ug=" "){$K='';$K.=($_!==null?$ug."FIRST $_".($E?" SKIP $E":""):"");$K.=" $I$Z";return$K;}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$nb){}function
engines(){return
array();}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
tables_list(){global$h;$I='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$J=ibase_query($h->_link,$I);$K=array();while($L=ibase_fetch_assoc($J))$K[$L['RDB$RELATION_NAME']]='table';ksort($K);return$K;}function
count_tables($l){return
array();}function
table_status($D="",$Ec=false){global$h;$K=array();$Eb=tables_list();foreach($Eb
as$v=>$X){$v=trim($v);$K[$v]=array('Name'=>$v,'Engine'=>'standard',);if($D==$v)return$K[$v];}return$K;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$h;$K=array();$I='SELECT r.RDB$FIELD_NAME AS field_name,
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
ORDER BY r.RDB$FIELD_POSITION';$J=ibase_query($h->_link,$I);while($L=ibase_fetch_assoc($J))$K[trim($L['FIELD_NAME'])]=array("field"=>trim($L["FIELD_NAME"]),"full_type"=>trim($L["FIELD_TYPE"]),"type"=>trim($L["FIELD_SUB_TYPE"]),"default"=>trim($L['FIELD_DEFAULT_VALUE']),"null"=>(trim($L["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($L["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($L["FIELD_DESCRIPTION"]),);return$K;}function
indexes($R,$i=null){$K=array();return$K;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ng){return
true;}function
support($Fc){return
preg_match("~^(columns|sql|status|table)$~",$Fc);}$x="firebird";$Re=array("=");$Uc=array();$Zc=array();$fc=array();}$Xb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$zf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Gb){return($Gb=="domain");}function
query($I,$Dh=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$Pg=0;foreach($J
as$Dd)$Pg+=$Dd->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Pg,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($J){foreach($J
as$Dd){$L=array();if($Dd->Name!='')$L['itemName()']=(string)$Dd->Name;foreach($Dd->Attribute
as$Ia){$D=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($ic){return(is_object($ic)&&$ic['encoding']=='base64'?base64_decode($ic):(string)$ic);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Jd=array_keys($this->_rows[0]);return(object)array('name'=>$Jd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Bf="itemName()";function
_chunkRequest($kd,$va,$G,$yc=array()){global$h;foreach(array_chunk($kd,25)as$gb){$jf=$G;foreach($gb
as$s=>$t){$jf["Item.$s.ItemName"]=$t;foreach($yc
as$y=>$X)$jf["Item.$s.$y"]=$X;}if(!sdb_request($va,$jf))return
false;}$h->affected_rows=count($kd);return
true;}function
_extractIds($R,$Mf,$_){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Mf,$de))$K=array_map('idf_unescape',$de[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Mf.($_?" LIMIT 1":"")))as$Dd)$K[]=$Dd->Name;}return$K;}function
select($R,$N,$Z,$Xc,$We=array(),$_=1,$F=0,$Df=false){global$h;$h->next=$_GET["next"];$K=parent::select($R,$N,$Z,$Xc,$We,$_,$F,$Df);$h->next=0;return$K;}function
delete($R,$Mf,$_=0){return$this->_chunkRequest($this->_extractIds($R,$Mf,$_),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$Mf,$_=0,$ug="\n"){$Mb=array();$vd=array();$s=0;$kd=$this->_extractIds($R,$Mf,$_);$t=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$kd))$Mb["Attribute.".count($Mb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Fd=>$W){$vd["Attribute.$s.Name"]=$y;$vd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Fd)$vd["Attribute.$s.Replace"]="true";$s++;}}}$G=array('DomainName'=>$R);return(!$vd||$this->_chunkRequest(($t!=""?array($t):$kd),'BatchPutAttributes',$G,$vd))&&(!$Mb||$this->_chunkRequest($kd,'BatchDeleteAttributes',$G,$Mb));}function
insert($R,$P){$G=array("DomainName"=>$R);$s=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$s.Name"]=$D;$G["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$Bf){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
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
support($Fc){return
preg_match('~sql~',$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$nb){}function
tables_list(){global$h;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Ec=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Ec){$qe=sdb_request('DomainMetadata',array('DomainName'=>$R));if($qe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$L[$y]=(string)$qe->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($h,$I){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($I,$Z,$_,$E=0,$ug=" "){return" $I$Z".($_!==null?$ug."LIMIT $_":"");}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Eb,$y,$Qf=false){$Ua=64;if(strlen($y)>$Ua)$y=pack("H*",$Ba($y));$y=str_pad($y,$Ua,"\0");$Gd=$y^str_repeat("\x36",$Ua);$Hd=$y^str_repeat("\x5C",$Ua);$K=$Ba($Hd.pack("H*",$Ba($Gd.$Eb)));if($Qf)$K=pack("H*",$K);return$K;}function
sdb_request($va,$G=array()){global$b,$h;list($hd,$G['AWSAccessKeyId'],$qg)=$b->credentials();$G['Action']=$va;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$y=>$X)$I.='&'.rawurlencode($y).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$hd)."\n/\n$I",$qg,true)));@ini_set('track_errors',1);$Hc=@file_get_contents((preg_match('~^https?://~',$hd)?$hd:"http://$hd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$Hc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$fi=simplexml_load_string($Hc);if(!$fi){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($fi->Errors){$n=$fi->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$ah=$va."Result";return($fi->$ah?$fi->$ah:true);}function
sdb_request_all($va,$ah,$G=array(),$jh=0){$K=array();$Hg=($jh?microtime(true):0);$_=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$C)?$C[1]:0);do{$fi=sdb_request($va,$G);if(!$fi)break;foreach($fi->$ah
as$ic)$K[]=$ic;if($_&&count($K)>=$_){$_GET["next"]=$fi->NextToken;break;}if($jh&&microtime(true)-$Hg>$jh)return
false;$G['NextToken']=$fi->NextToken;if($_)$G['SelectExpression']=preg_replace('~\d+\s*$~',$_-count($K),$G['SelectExpression']);}while($fi->NextToken);return$K;}$x="simpledb";$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Uc=array();$Zc=array("count");$fc=array(array("json"));}$Xb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$zf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($O,$V,$H){global$b;$m=$b->database();$Ue=array();if($V!=""){$Ue["username"]=$V;$Ue["password"]=$H;}if($m!="")$Ue["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$O",$Ue);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
query($I){return
false;}function
select_db($Gb){try{$this->_db=$this->_link->selectDB($Gb);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($J){foreach($J
as$Dd){$L=array();foreach($Dd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$L[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Jd=array_keys($this->_rows[0]);$D=$Jd[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{public$Bf="_id";function
select($R,$N,$Z,$Xc,$We=array(),$_=1,$F=0,$Df=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Cg=array();foreach($We
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Ab);$Cg[$X]=($Ab?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Cg)->limit(+$_)->skip($F*$_));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];$this->_conn->last_id=$P['_id'];return!$K['err'];}catch(Exception$uc){$this->_conn->error=$uc->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases($Lc){global$h;$K=array();$Jb=$h->_link->listDBs();foreach($Jb['databases']as$m)$K[]=$m['name'];return$K;}function
collations(){return
array();}function
db_collation($m,$nb){}function
count_tables($l){global$h;$K=array();foreach($l
as$m)$K[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$K;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($D="",$Ec=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$h;foreach($l
as$m){$bg=$h->_link->selectDB($m)->drop();if(!$bg['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$K=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$v){$Pb=array();foreach($v["key"]as$e=>$U)$Pb[]=($U==-1?'1':null);$K[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Pb,);}return$K;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){global$h;if($R==""){$h->_db->createCollection($D);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$bg=$h->_db->selectCollection($R)->drop();if(!$bg['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$bg=$h->_db->selectCollection($R)->remove();if(!$bg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$h;foreach($c
as$X){list($U,$D,$P)=$X;if($P=="DROP")$K=$h->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$f=array();foreach($P
as$e){$e=preg_replace('~ DESC$~','',$e,1,$Ab);$f[$e]=($Ab?-1:1);}$K=$h->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($K['errmsg']){$h->error=$K['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Fc){return
preg_match("~database|indexes~",$Fc);}$x="mongo";$Re=array("=");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$zf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($qf,$wb=array(),$re='GET'){@ini_set('track_errors',1);$Hc=@file_get_contents($this->_url.'/'.ltrim($qf,'/'),false,stream_context_create(array('http'=>array('method'=>$re,'content'=>json_encode($wb),'ignore_errors'=>1,))));if(!$Hc){$this->error=$php_errormsg;return$Hc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Hc;return
false;}$K=json_decode($Hc,true);if($K===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$vb=get_defined_constants(true);foreach($vb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
query($qf,$wb=array(),$re='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($qf,'/'),$wb,$re);}function
connect($O,$V,$H){$this->_url="http://$V:$H@$O/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($Gb){$this->_db=$Gb;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$Xc,$We=array(),$_=1,$F=0,$Df=false){global$b;$Eb=array();$I="$R/_search";if($N!=array("*"))$Eb["fields"]=$N;if($We){$Cg=array();foreach($We
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Ab);$Cg[]=($Ab?array($lb=>"desc"):$lb);}$Eb["sort"]=$Cg;}if($_){$Eb["size"]=+$_;if($F)$Eb["from"]=($F*$_);}foreach($Z
as$X){list($lb,$Pe,$X)=explode(" ",$X,3);if($lb=="_id")$Eb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$eh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($Pe=="=")$Eb["query"]["filtered"]["filter"]["and"][]=$eh;else$Eb["query"]["filtered"]["query"]["bool"]["must"][]=$eh;}}if($Eb["query"]&&!$Eb["query"]["filtered"]["query"]&&!$Eb["query"]["ids"])$Eb["query"]["filtered"]["query"]=array("match_all"=>array());$Hg=microtime(true);$pg=$this->_conn->query($I,$Eb);if($Df)echo$b->selectQuery("$I: ".print_r($Eb,true),format_time($Hg));if(!$pg)return
false;$K=array();foreach($pg['hits']['hits']as$gd){$L=array();if($N==array("*"))$L["_id"]=$gd["_id"];$p=$gd['_source'];if($N!=array("*")){$p=array();foreach($N
as$y)$p[$y]=$gd['fields'][$y];}foreach($p
as$y=>$X){if($Eb["fields"])$X=$X[0];$L[$y]=(is_array($X)?json_encode($X):$X);}$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
support($Fc){return
preg_match("~database|table|columns~",$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){global$h;$K=$h->rootQuery('_aliases');if($K){$K=array_keys($K);sort($K,SORT_STRING);}return$K;}function
collations(){return
array();}function
db_collation($m,$nb){}function
engines(){return
array();}function
count_tables($l){global$h;$K=$h->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$h;$K=$h->query('_mapping');if($K)$K=array_fill_keys(array_keys($K[$h->_db]["mappings"]),'table');return$K;}function
table_status($D="",$Ec=false){global$h;$pg=$h->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$K=array();if($pg){foreach($pg["facets"]["count_by_type"]["terms"]as$R)$K[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($D!=""&&$D==$R["term"])return$K[$D];}return$K;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$J=$h->query("$R/_mapping");$K=array();if($J){$be=$J[$R]['properties'];if(!$be)$be=$J[$h->_db]['mappings'][$R]['properties'];if($be){foreach($be
as$D=>$o){$K[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($K[$D]["privileges"]["insert"]);unset($K[$D]["privileges"]["update"]);}}}}return$K;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$h;return$h->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$h;$K=true;foreach($T
as$R)$K=$K&&$h->query(urlencode($R),array(),'DELETE');return$K;}$x="elastic";$Re=array("=","query");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb=array("server"=>"MySQL")+$Xb;if(!defined("DRIVER")){$zf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$V="",$H="",$Gb=null,$vf=null,$Bg=null){mysqli_report(MYSQLI_REPORT_OFF);list($hd,$vf)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$hd:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),$Gb,(is_numeric($vf)?$vf:ini_get("mysqli.default_port")),(!is_numeric($vf)?$vf:$Bg));return$K;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Gb){return
mysql_select_db($Gb,$this->_link);}function
query($I,$Dh=false){$J=@($Dh?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($I,$Dh=false){$this->setAttribute(1000,!$Dh);return
parent::query($I,$Dh);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$Bf){$f=array_keys(reset($M));$_f="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$Uh=array();foreach($f
as$y)$Uh[$y]="$y = VALUES($y)";$Og="\nON DUPLICATE KEY UPDATE ".implode(", ",$Uh);$Uh=array();$z=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Uh&&(strlen($_f)+$z+strlen($Y)+strlen($Og)>1e6)){if(!queries($_f.implode(",\n",$Uh).$Og))return
false;$Uh=array();$z=0;}$Uh[]=$Y;$z+=strlen($Y)+2;}return
queries($_f.implode(",\n",$Uh).$Og);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){$h->set_charset(charset($h));$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$K=$h->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($lg=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$lg;return$K;}function
get_databases($Lc){global$h;$K=get_session("dbs");if($K===null){$I=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Lc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$_,$E=0,$ug=" "){return" $I$Z".($_!==null?$ug."LIMIT $_".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$nb){global$h;$K=null;$j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$j,$C))$K=$C[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$j,$C))$K=$nb[$C[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$K=array();foreach($l
as$m)$K[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$K;}function
table_status($D="",$Ec=false){global$h;$K=array();foreach(get_rows($Ec&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$h;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($h->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$C);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$C[1],"length"=>$C[2],"unsigned"=>ltrim($C[3].$C[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$C[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"is_virtual"=>($L["GENERATION_EXPRESSION"]=="is_virtual"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra|GENERATION_EXPRESSION"],$C)?$C[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$h,$Me;static$sf='`(?:[^`]|``)+`';$K=array();$Bb=$h->result("SHOW CREATE TABLE ".table($R),1);if($Bb){preg_match_all("~CONSTRAINT ($sf) FOREIGN KEY ?\\(((?:$sf,? ?)+)\\) REFERENCES ($sf)(?:\\.($sf))? \\(((?:$sf,? ?)+)\\)(?: ON DELETE ($Me))?(?: ON UPDATE ($Me))?~",$Bb,$de,PREG_SET_ORDER);foreach($de
as$C){preg_match_all("~$sf~",$C[2],$Dg);preg_match_all("~$sf~",$C[5],$bh);$K[idf_unescape($C[1])]=array("db"=>idf_unescape($C[4]!=""?$C[3]:$C[4]),"table"=>idf_unescape($C[4]!=""?$C[4]:$C[3]),"source"=>array_map('idf_unescape',$Dg[0]),"target"=>array_map('idf_unescape',$bh[0]),"on_delete"=>($C[6]?$C[6]:"RESTRICT"),"on_update"=>($C[7]?$C[7]:"RESTRICT"),);}}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$K=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$d){$K=false;if(create_database($D,$d)){$Zf=array();foreach(tables_list()as$R=>$U)$Zf[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$Zf||queries("RENAME TABLE ".implode(", ",$Zf)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ma="";break;}if($v["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$D,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Mc);$Ig=($rb!==null?" COMMENT=".q($rb):"").($nc?" ENGINE=".q($nc):"").($d?" COLLATE ".q($d):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$Ig$nf");if($R!=$D)$c[]="RENAME TO ".table($D);if($Ig)$c[]=ltrim($Ig);return($c||$nf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$nf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Zh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Zh)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Zh,$bh){$Zf=array();foreach(array_merge($T,$Zh)as$R)$Zf[]=table($R)." TO ".idf_escape($bh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$Zf));}function
copy_tables($T,$Zh,$bh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($bh==DB?table("copy_$R"):idf_escape($bh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Zh
as$R){$D=($bh==DB?table("copy_$R"):idf_escape($bh).".".table($R));$Yh=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Yh[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$h,$pc,$td,$Ch;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar","json","GENERATION_EXPRESSION");$Bh="((".implode("|",array_merge(array_keys($Ch),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$pc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$sf="\\s*(".($U=="FUNCTION"?"":$td).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Bh";$j=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$sf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Bh\\s+":"")."(.*)~is",$j,$C);$p=array();preg_match_all("~$sf\\s*,?~is",$C[1],$de,PREG_SET_ORDER);foreach($de
as$if){$D=str_replace("``","`",$if[2]).$if[3];$p[]=array("field"=>$D,"type"=>strtolower($if[5]),"length"=>preg_replace_callback("~$pc~s",'normalize_enum',$if[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$if[8] $if[7]"))),"null"=>1,"full_type"=>$if[4],"inout"=>strtoupper($if[1]),"collation"=>strtolower($if[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$C[11]);return
array("fields"=>$p,"returns"=>array("type"=>$C[12],"length"=>$C[13],"unsigned"=>$C[15],"collation"=>$C[16]),"definition"=>$C[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$I){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ng){return
true;}function
create_sql($R,$La){global$h;$K=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
trigger_sql($R,$Mg){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Mg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$K){if(preg_match("~binary~",$o["type"]))$K="UNHEX($K)";if($o["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$K="GeomFromText($K)";return$K;}function
support($Fc){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Fc);}function
kill_process($X){return
queries("KILL ".number($X));}function
max_connections(){global$h;return$h->result("SELECT @@max_connections");}$x="sql";$Ch=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295,"json"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(31)=>array('GENERATION_EXPRESSION'),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Ch+=$X;$Lg[$y]=array_keys($X);}$Jh=array("unsigned","zerofill","unsigned zerofill");$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text|json"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="experiment";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($j=false){return
password_file($j);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Lc=true){return
get_databases($Lc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Xb;echo'<table cellspacing="0">
<tr><th>',lang(32),'<td>',html_select("auth[driver]",$Xb,DRIVER),'<tr><th>',lang(33),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(35),'<td><input type="password" name="auth[password]">
<tr><th>',lang(36),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(37)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(38))."\n";}function
login($Zd,$H){global$x;if($x=="sqlite")return
lang(39,'login()');return
true;}function
tableName($Sg){return
h($Sg["Name"]);}function
fieldName($o,$We=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Sg,$P=""){echo'<p class="links">';$Yd=array("select"=>lang(40));if(support("table")||support("indexes"))$Yd["table"]=lang(41);if(support("table")){if(is_view($Sg))$Yd["view"]=lang(42);else$Yd["create"]=lang(43);}if($P!==null)$Yd["edit"]=lang(44);foreach($Yd
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($Sg["Name"]).($y=="edit"?$P:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Rg){return
array();}function
backwardKeysPrint($Oa,$L){}function
selectQuery($I,$ih){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$I))."</code> <span class='time'>($ih)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($I)."'>".lang(10)."</a>":"")."</p>";}function
rowDescription($R){return"";}function
rowDescriptions($M,$Nc){return$M;}function
selectLink($X,$o){}function
selectVal($X,$A,$o,$df){$K=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$K=lang(45,strlen($df));return($A?"<a href='".h($A)."'".(is_url($A)?" rel='noreferrer'":"").">$K</a>":$K);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($N,$f){global$Uc,$Zc;print_fieldset("select",lang(46),$N);$s=0;$N[""]=array();foreach($N
as$y=>$X){$X=$_GET["columns"][$y];$e=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Uc||$Zc?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(47)=>$Uc,lang(48)=>$Zc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$w){print_fieldset("search",lang(49),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$f,$X["col"],"(".lang(50).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($We,$f,$w){print_fieldset("sort",lang(51),$We);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(52))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,lang(52))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(53)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($_)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($hh){if($hh!==null){echo"<fieldset><legend>".lang(54)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($hh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(55)."</legend><div>","<input type='submit' value='".lang(46)."'>"," <span id='noindex' title='".lang(56)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($w
as$v){if($v["type"]!="FULLTEXT")$f[reset($v["columns"])]=1;}$f[""]=1;foreach($f
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($kc,$f){}function
selectColumnsProcess($f,$w){global$Uc,$Zc;$N=array();$Xc=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Uc)||in_array($X["fun"],$Zc)))){$N[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Zc))$Xc[]=$N[$y];}}return
array($N,$Xc);}function
selectSearchProcess($p,$w){global$h,$x;$K=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$K[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$tb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$md=process_length($X["val"]);$tb.=" ".($md!=""?$md:"(NULL)");}elseif($X["op"]=="SQL")$tb=" $X[val]";elseif($X["op"]=="LIKE %%")$tb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$tb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$tb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$K[]=idf_escape($X["col"]).$tb;else{$ob=array();foreach($p
as$D=>$o){$Bd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Bd)){$D=idf_escape($D);$ob[]=($x=="sql"&&$Bd&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($D USING ".charset($h).")":$D);}}$K[]=($ob?"(".implode("$tb OR ",$ob)."$tb)":"0");}}}return$K;}function
selectOrderProcess($p,$w){$K=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$K[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$K;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Nc){return
false;}function
selectQueryBuild($N,$Z,$Xc,$We,$_,$F){return"";}function
messageQuery($I,$ih){global$x;restart_session();$ed=&get_session("queries");$t="sql-".count($ed[$_GET["db"]]);if(strlen($I)>1e6)$I=preg_replace('~[\x80-\xFF]+$~','',substr($I,0,1e6))."\n...";$ed[$_GET["db"]][]=array($I,time(),$ih);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(57)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($I,1000).'</code></pre>'.($ih?" <span class='time'>($ih)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ed[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$fc;$K=($o["null"]?"NULL/":"");foreach($fc
as$y=>$Uc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Uc
as$sf=>$X){if(!$sf||preg_match("~$sf~",$o["type"]))$K.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$K.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$K=lang(58);return
explode("/",$K);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$D=$o["field"];$K=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$K="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$K=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$K=idf_escape($D)." $r $K";elseif(preg_match('~^[+-] interval$~',$r))$K=idf_escape($D)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$K);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$K="$r(".idf_escape($D).", $K)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$K="$r($K)";return
unconvert_field($o,$K);}function
dumpOutput(){$K=array('text'=>lang(59),'file'=>lang(60));if(function_exists('gzencode'))$K['gz']='gzip';return$K;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$Mg,$Cd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Mg)dump_csv(array_keys(fields($R)));}else{if($Cd==2){$p=array();foreach(fields($R)as$D=>$o)$p[]=idf_escape($D)." $o[full_type]";$j="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$j=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($j);if($Mg&&$j){if($Mg=="DROP+CREATE"||$Cd==1)echo"DROP ".($Cd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Cd==1)$j=remove_definer($j);echo"$j;\n\n";}}}function
dumpData($R,$Mg,$I){global$h,$x;$fe=($x=="sqlite"?0:1048576);if($Mg){if($_POST["format"]=="sql"){if($Mg=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$J=$h->query($I,1);if($J){$vd="";$Xa="";$Jd=array();$Og="";$Gc=($R!=''?'fetch_assoc':'fetch_row');while($L=$J->$Gc()){if(!$Jd){$Uh=array();foreach($L
as$X){$o=$J->fetch_field();$Jd[]=$o->name;$y=idf_escape($o->name);$Uh[]="$y = VALUES($y)";}$Og=($Mg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Uh):"").";\n";}if($_POST["format"]!="sql"){if($Mg=="table"){dump_csv($Jd);$Mg="INSERT";}dump_csv($L);}else{if(!$vd)$vd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Jd)).") VALUES";foreach($L
as$y=>$X){$o=$p[$y];$L[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$lg=($fe?"\n":" ")."(".implode(",\t",$L).")";if(!$Xa)$Xa=$vd.$lg;elseif(strlen($Xa)+4+strlen($lg)+strlen($Og)<$fe)$Xa.=",$lg";else{echo$Xa.$Og;$Xa=$vd.$lg;}}}if($Xa)echo$Xa.$Og;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($jd){return
friendly_url($jd!=""?$jd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($jd,$ue=false){$gf=$_POST["output"];$Ac=(preg_match('~sql~',$_POST["format"])?"sql":($ue?"tar":"csv"));header("Content-Type: ".($gf=="gz"?"application/x-gzip":($Ac=="tar"?"application/x-tar":($Ac=="sql"||$gf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($gf=="gz")ob_start('ob_gzencode',1e6);return$Ac;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(61)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(62):lang(63))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(64)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(65)."</a>\n":"");return
true;}function
navigation($te){global$ia,$x,$Xb,$h;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($te=="auth"){$Kc=true;foreach((array)$_SESSION["pwds"]as$Wh=>$yg){foreach($yg
as$O=>$Rh){foreach($Rh
as$V=>$H){if($H!==null){if($Kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kc=false;}$Jb=$_SESSION["db"][$Wh][$O][$V];foreach(($Jb?array_keys($Jb):array(""))as$m)echo"<a href='".h(auth_url($Wh,$O,$V,$m))."'>($Xb[$Wh]) ".h($V.($O!=""?"@$O":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$te&&DB!=""){$h->select_db(DB);$T=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=experiment",'"></script>
<script type="text/javascript">
';if($T){$Yd=array();foreach($T
as$R=>$U)$Yd[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Yd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($te);if(DB==""||!$te){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(57)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(66)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(67)."</a>\n";}if($_GET["ns"]!==""&&!$te&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(68)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($te){global$b,$h;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Hb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(69)."'>DB</span>: ".($l?"<select name='db'$Hb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($te!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".lang(70).": <select name='ns'$Hb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$Ig){echo'<a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(71)."</a> ";$D=$this->tableName($Ig);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($Ig)?"view":""),"structure")." title='".lang(41)."'>$D</a>":"<span>$D</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Re;function
page_header($lh,$n="",$Wa=array(),$mh=""){global$ca,$ia,$b,$Xb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$nh=$lh.($mh!=""?": $mh":"");$oh=strip_tags($nh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(72),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$oh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=experiment",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=experiment",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=experiment",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=experiment",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(72),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(73)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$Xb[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(33));if($Wa===false)echo"$O\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Ob=(is_array($X)?$X[1]:h($X));if($Ob!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Ob</a> &raquo; ";}}echo"$lh\n";}}echo"<h2>$nh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Lh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$pe=$_SESSION["messages"][$Lh];if($pe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$pe)."</div>\n";unset($_SESSION["messages"][$Lh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($te=""){global$b,$rh;echo'</div>

';switch_lang();if($te!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(74),'" id="logout">
<input type="hidden" name="token" value="',$rh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($te);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($we){while($we>=2147483648)$we-=4294967296;while($we<=-2147483649)$we+=4294967296;return(int)$we;}function
long2str($W,$bi){$lg='';foreach($W
as$X)$lg.=pack('V',$X);if($bi)return
substr($lg,0,end($W));return$lg;}function
str2long($lg,$bi){$W=array_values(unpack('V*',str_pad($lg,4*ceil(strlen($lg)/4),"\0")));if($bi)$W[]=strlen($lg);return$W;}function
xxtea_mx($hi,$gi,$Pg,$Fd){return
int32((($hi>>5&0x7FFFFFF)^$gi<<2)+(($gi>>3&0x1FFFFFFF)^$hi<<4))^int32(($Pg^$gi)+($Fd^$hi));}function
encrypt_string($Kg,$y){if($Kg=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Kg,true);$we=count($W)-1;$hi=$W[$we];$gi=$W[0];$Kf=floor(6+52/($we+1));$Pg=0;while($Kf-->0){$Pg=int32($Pg+0x9E3779B9);$ec=$Pg>>2&3;for($hf=0;$hf<$we;$hf++){$gi=$W[$hf+1];$ve=xxtea_mx($hi,$gi,$Pg,$y[$hf&3^$ec]);$hi=int32($W[$hf]+$ve);$W[$hf]=$hi;}$gi=$W[0];$ve=xxtea_mx($hi,$gi,$Pg,$y[$hf&3^$ec]);$hi=int32($W[$we]+$ve);$W[$we]=$hi;}return
long2str($W,false);}function
decrypt_string($Kg,$y){if($Kg=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Kg,false);$we=count($W)-1;$hi=$W[$we];$gi=$W[0];$Kf=floor(6+52/($we+1));$Pg=int32($Kf*0x9E3779B9);while($Pg){$ec=$Pg>>2&3;for($hf=$we;$hf>0;$hf--){$hi=$W[$hf-1];$ve=xxtea_mx($hi,$gi,$Pg,$y[$hf&3^$ec]);$gi=int32($W[$hf]-$ve);$W[$hf]=$gi;}$hi=$W[$we];$ve=xxtea_mx($hi,$gi,$Pg,$y[$hf&3^$ec]);$gi=int32($W[0]-$ve);$W[0]=$gi;$Pg=int32($Pg-0x9E3779B9);}return
long2str($W,true);}$h='';$dd=$_SESSION["token"];if(!$dd)$_SESSION["token"]=rand(1,1e6);$rh=get_token();$tf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$tf[$y]=$X;}}function
add_invalid_login(){global$b;$Ic=get_temp_dir()."/adminer.invalid";$Sc=@fopen($Ic,"r+");if(!$Sc){$Sc=@fopen($Ic,"w");if(!$Sc)return;}flock($Sc,LOCK_EX);$yd=unserialize(stream_get_contents($Sc));$ih=time();if($yd){foreach($yd
as$zd=>$X){if($X[0]<$ih)unset($yd[$zd]);}}$xd=&$yd[$b->bruteForceKey()];if(!$xd)$xd=array($ih+30*60,0);$xd[1]++;$wg=serialize($yd);rewind($Sc);fwrite($Sc,$wg);ftruncate($Sc,strlen($wg));flock($Sc,LOCK_UN);fclose($Sc);}$Ka=$_POST["auth"];if($Ka){$yd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$xd=$yd[$b->bruteForceKey()];$Be=($xd[1]>30?$xd[0]-time():0);if($Be>0)auth_error(lang(75,ceil($Be/60)));session_regenerate_id();$Wh=$Ka["driver"];$O=$Ka["server"];$V=$Ka["username"];$H=(string)$Ka["password"];$m=$Ka["db"];set_password($Wh,$O,$V,$H);$_SESSION["db"][$Wh][$O][$V][$m]=true;if($Ka["permanent"]){$y=base64_encode($Wh)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$Ef=$b->permanentLogin(true);$tf[$y]="$y:".base64_encode($Ef?encrypt_string($H,$Ef):"");cookie("adminer_permanent",implode(" ",$tf));}if(count($_POST)==1||DRIVER!=$Wh||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Wh,$O,$V,$m));}elseif($_POST["logout"]){if($dd&&!verify_token()){page_header(lang(74),lang(76));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(77));}}elseif($tf&&!$_SESSION["pwds"]){session_regenerate_id();$Ef=$b->permanentLogin();foreach($tf
as$y=>$X){list(,$hb)=explode(":",$X);list($Wh,$O,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Wh,$O,$V,decrypt_string(base64_decode($hb),$Ef));$_SESSION["db"][$Wh][$O][$V][$m]=true;}}function
unset_permanent(){global$tf;foreach($tf
as$y=>$X){list($Wh,$O,$V,$m)=array_map('base64_decode',explode("-",$y));if($Wh==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($tf[$y]);}cookie("adminer_permanent",implode(" ",$tf));}function
auth_error($n){global$b,$dd;$n=h($n);$zg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$zg]||$_GET[$zg])&&!$dd)$n=lang(78);else{add_invalid_login();$H=get_password();if($H!==null){if($H===false)$n.='<br>'.lang(79,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$zg]&&$_GET[$zg]&&ini_bool("session.use_only_cookies"))$n=lang(80);$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header(lang(37),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(81),lang(82,implode(", ",$zf)),false);page_footer("auth");exit;}$h=connect();}$Wb=new
Min_Driver($h);if(!is_object($h)||($Zd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($h)?$h:(is_string($Zd)?$Zd:lang(83))));if($Ka&&$_POST["token"])$_POST["token"]=$rh;$n='';if($_POST){if(!verify_token()){$sd="max_input_vars";$je=ini_get($sd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$je||$X<$je)){$sd=$y;$je=$X;}}}$n=(!$_POST["token"]&&$je?lang(84,"'$sd'"):lang(76).' '.lang(85));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(86,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(87);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($J,$i=null,$Ze=array(),$_=0){global$x;$Yd=array();$w=array();$f=array();$Ta=array();$Ch=array();$K=array();odd('');for($s=0;(!$_||$s<$_)&&($L=$J->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ed=0;$Ed<count($L);$Ed++){$o=$J->fetch_field();$D=$o->name;$Ye=$o->orgtable;$Xe=$o->orgname;$K[$o->table]=$Ye;if($Ze&&$x=="sql")$Yd[$Ed]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($Ye!=""){if(!isset($w[$Ye])){$w[$Ye]=array();foreach(indexes($Ye,$i)as$v){if($v["type"]=="PRIMARY"){$w[$Ye]=array_flip($v["columns"]);break;}}$f[$Ye]=$w[$Ye];}if(isset($f[$Ye][$Xe])){unset($f[$Ye][$Xe]);$w[$Ye][$Xe]=$Ed;$Yd[$Ed]=$Ye;}}if($o->charsetnr==63)$Ta[$Ed]=true;$Ch[$Ed]=$o->type;echo"<th".($Ye!=""||$o->name!=$Xe?" title='".h(($Ye!=""?"$Ye.":"").$Xe)."'":"").">".h($D).($Ze?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($L
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(45,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Ch[$y]==254)$X="<code>$X</code>";}if(isset($Yd[$y])&&!$f[$Yd[$y]]){if($Ze&&$x=="sql"){$R=$L[array_search("table=",$Yd)];$A=$Yd[$y].urlencode($Ze[$R]!=""?$Ze[$R]:$R);}else{$A="edit=".urlencode($Yd[$y]);foreach($w[$Yd[$y]]as$lb=>$Ed)$A.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($L[$Ed]);}$X="<a href='".h(ME.$A)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$K;}function
referencable_primary($tg){$K=array();foreach(table_status('',true)as$Tg=>$R){if($Tg!=$tg&&fk_support($R)){foreach(fields($Tg)as$o){if($o["primary"]){if($K[$Tg]){unset($K[$Tg]);break;}$K[$Tg]=$o;}}}}return$K;}function
textarea($D,$Y,$M=10,$ob=80){global$x;echo"<textarea name='$D' rows='$M' cols='$ob' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$nb,$Oc=array()){global$Lg,$Ch,$Jh,$Me;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($Ch[$U])&&!isset($Oc[$U]))array_unshift($Lg,$U);if($Oc)$Lg[lang(88)]=$Oc;echo
optionlist($Lg,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(89).')'.optionlist($nb,$o["collation"]).'</select>',($Jh?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Jh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(90).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Oc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(91).")".optionlist(explode("|",$Me),$o["on_delete"])."</select> ":" ");}function
process_length($z){global$pc;return(preg_match("~^\\s*\\(?\\s*$pc(?:\\s*,\\s*$pc)*+\\s*\\)?\\s*\$~",$z)&&preg_match_all("~$pc~",$z,$de)?"(".implode(",",$de[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$z)));}function
process_type($o,$mb="COLLATE"){global$Jh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Jh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$Ah){global$x;$Lb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Ah),($o["null"]?" NULL":" NOT NULL"),(isset($Lb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Lb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Lb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Lb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Lb))?$Lb:q($Lb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$nb,$U="TABLE",$Oc=array(),$sb=false){global$h,$td;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(92):lang(93)),'<td id="label-type">',lang(94),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(95),'<td>',lang(96);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(58),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(97),(support("comment")?"<td id='label-comment'".($sb?"":" class='hidden'").">".lang(98):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=experiment' alt='+' title='".lang(99)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$af=$o[($_POST?"orig":"field")];$Sb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$af=="");echo'<tr',($Sb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$td),$o["inout"]):""),'<th>';if($Sb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($af),'">
';edit_type("fields[$s]",$o,$nb,$Oc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($sb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=experiment' alt='+' title='".lang(99)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=experiment' alt='^' title='".lang(100)."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=experiment' alt='v' title='".lang(101)."'>&nbsp;":""),($af==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=experiment' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){ksort($p);$E=0;if($_POST["up"]){$Qd=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$Qd,0,array($o));break;}if(isset($o["field"]))$Qd=$E;$E++;}}elseif($_POST["down"]){$Qc=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$Qc){unset($p[key($_POST["down"])]);array_splice($p,$E,0,array($Qc));break;}if(key($_POST["down"])==$y)$Qc=$o;$E++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($C){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($C[0][0].$C[0][0],$C[0][0],substr($C[0],1,-1))),'\\'))."'";}function
grant($Vc,$Gf,$f,$Le){if(!$Gf)return
true;if($Gf==array("ALL PRIVILEGES","GRANT OPTION"))return($Vc=="GRANT"?queries("$Vc ALL PRIVILEGES$Le WITH GRANT OPTION"):queries("$Vc ALL PRIVILEGES$Le")&&queries("$Vc GRANT OPTION$Le"));return
queries("$Vc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Gf).$f).$Le);}function
drop_create($Yb,$j,$Zb,$fh,$bc,$B,$oe,$me,$ne,$Ie,$ze){if($_POST["drop"])query_redirect($Yb,$B,$oe);elseif($Ie=="")query_redirect($j,$B,$ne);elseif($Ie!=$ze){$Cb=queries($j);queries_redirect($B,$me,$Cb&&queries($Yb));if($Cb)queries($Zb);}else
queries_redirect($B,$me,queries($fh)&&queries($bc)&&queries($Yb)&&queries($j));}function
create_trigger($Le,$L){global$x;$kh=" $L[Timing] $L[Event]".($L["Event"]=="UPDATE OF"?" ".idf_escape($L["Of"]):"");return"CREATE TRIGGER ".idf_escape($L["Trigger"]).($x=="mssql"?$Le.$kh:$kh.$Le).rtrim(" $L[Type]\n$L[Statement]",";").";";}function
create_routine($hg,$L){global$td;$P=array();$p=(array)$L["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$P[]=(preg_match("~^($td)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $hg ".idf_escape(trim($L["name"]))." (".implode(", ",$P).")".(isset($_GET["function"])?" RETURNS".process_type($L["returns"],"CHARACTER SET"):"").($L["language"]?" LANGUAGE $L[language]":"").rtrim("\n$L[definition]",";").";";}function
remove_definer($I){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$I);}function
format_foreign_key($q){global$Me;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Me)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Me)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Ic,$ph){$K=pack("a100a8a8a8a12a12",$Ic,644,0,0,decoct($ph->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($K);$s++)$fb+=ord($K[$s]);$K.=sprintf("%06o",$fb)."\0 ";echo$K,str_repeat("\0",512-strlen($K));$ph->send();echo
str_repeat("\0",511-($ph->size+511)%512);}function
ini_bytes($sd){$X=ini_get($sd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($rf){global$x,$h;$Nh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($h->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($rf[$x]?"<a href='$Nh[$x]$rf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$h;if(!$h->select_db($m))return"?";$K=0;foreach(table_status()as$S)$K+=$S["Data_length"]+$S["Index_length"];return
format_number($K);}function
set_utf8mb4($j){global$h;static$P=false;if(!$P&&preg_match('~\butf8mb4~i',$j)){$P=true;echo"SET NAMES ".charset($h).";\n\n";}}function
connect_error(){global$b,$h,$rh,$n,$Xb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(36).": ".h(DB),lang(103),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(104),drop_databases($_POST["db"]));page_header(lang(105),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(106),'privileges'=>lang(65),'processlist'=>lang(107),'variables'=>lang(108),'status'=>lang(109),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(110,$Xb[DRIVER],"<b>".h($h->server_info)."</b>","<b>$h->extension</b>")."\n","<p>".lang(111,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$og=support("scheme");$nb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(36)." - <a href='".h(ME)."refresh=1'>".lang(112)."</a>"."<td>".lang(113)."<td>".lang(114)."<td>".lang(115)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(116)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$gg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$gg' id='$m'>".h($m)."</a>";$d=nbsp(db_collation($m,$nb));echo"<td>".(support("database")?"<a href='$gg".($og?"&amp;ns=":"")."&amp;database=' title='".lang(61)."'>$d</a>":$d),"<td align='right'><a href='$gg&amp;schema=' id='tables-".h($m)."' title='".lang(64)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(117)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(118)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$rh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(70).": ".h($_GET["ns"]),lang(119),true);page_footer("ns");exit;}}$Me="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($xb){$this->size+=strlen($xb);fwrite($this->handler,$xb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$pc="'(?:''|[^'\\\\]|\\\\.)*'";$td="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$Wb->select($a,$N,array(where($_GET,$p)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?lang(120):lang(121)).": ".h($a),$n);$b->selectLinks($S);$rb=$S["Comment"];if($rb!="")echo"<p>".lang(98).": ".h($rb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(122)."<td>".lang(94).(support("comment")?"<td>".lang(98):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(58)."</i>":""),(isset($o["default"])?" <span title='".lang(97)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(123)."</h3>\n";$w=indexes($a);if($w){echo"<table cellspacing='0'>\n";foreach($w
as$D=>$v){ksort($v["columns"]);$Df=array();foreach($v["columns"]as$y=>$X)$Df[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($D)."'><th>$v[type]<td>".implode(", ",$Df)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(124)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(88)."</h3>\n";$Oc=foreign_keys($a);if($Oc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(125)."<td>".lang(126)."<td>".lang(91)."<td>".lang(90)."<td>&nbsp;</thead>\n";foreach($Oc
as$D=>$q){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.lang(127).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(128)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(129)."</h3>\n";$_h=triggers($a);if($_h){echo"<table cellspacing='0'>\n";foreach($_h
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(127)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(130)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(64),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Vg=array();$Wg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$de,PREG_SET_ORDER);foreach($de
as$s=>$C){$Vg[$C[1]]=array($C[2],$C[3]);$Wg[]="\n\t'".js_escape($C[1])."': [ $C[2], $C[3] ]";}$sh=0;$Qa=-1;$ng=array();$Vf=array();$Ud=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$wf=0;$ng[$R]["fields"]=array();foreach(fields($R)as$D=>$o){$wf+=1.25;$o["pos"]=$wf;$ng[$R]["fields"][$D]=$o;}$ng[$R]["pos"]=($Vg[$R]?$Vg[$R]:array($sh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$Sd=$Qa;if($Vg[$R][1]||$Vg[$X["table"]][1])$Sd=min(floatval($Vg[$R][1]),floatval($Vg[$X["table"]][1]))-1;else$Qa-=.1;while($Ud[(string)$Sd])$Sd-=.0001;$ng[$R]["references"][$X["table"]][(string)$Sd]=array($X["source"],$X["target"]);$Vf[$X["table"]][$R][(string)$Sd]=$X["target"];$Ud[(string)$Sd]=true;}}$sh=max($sh,$ng[$R]["pos"][0]+2.5+$wf);}echo'<div id="schema" style="height: ',$sh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Wg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$sh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($ng
as$D=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($D).'"><b>'.h($D)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$ch=>$Wf){foreach($Wf
as$Sd=>$Sf){$Td=$Sd-$Vg[$D][1];$s=0;foreach($Sf[0]as$Dg)echo"\n<div class='references' title='".h($ch)."' id='refs$Sd-".($s++)."' style='left: $Td"."em; top: ".$R["fields"][$Dg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}foreach((array)$Vf[$D]as$ch=>$Wf){foreach($Wf
as$Sd=>$f){$Td=$Sd-$Vg[$D][1];$s=0;foreach($f
as$bh)echo"\n<div class='references' title='".h($ch)."' id='refd$Sd-".($s++)."' style='left: $Td"."em; top: ".$R["fields"][$bh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=experiment'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}echo"\n</div>\n";}foreach($ng
as$D=>$R){foreach((array)$R["references"]as$ch=>$Wf){foreach($Wf
as$Sd=>$Sf){$se=$sh;$he=-10;foreach($Sf[0]as$y=>$Dg){$xf=$R["pos"][0]+$R["fields"][$Dg]["pos"];$yf=$ng[$ch]["pos"][0]+$ng[$ch]["fields"][$Sf[1][$y]]["pos"];$se=min($se,$xf,$yf);$he=max($he,$xf,$yf);}echo"<div class='references' id='refl$Sd' style='left: $Sd"."em; top: $se"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($he-$se)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(131),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$_b="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$_b.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($_b,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ac=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Ad=preg_match('~sql~',$_POST["format"]);if($Ad){echo"-- Adminer $ia ".$Xb[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$h->query("SET time_zone = '+00:00';");}}$Mg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($h->select_db($m)){if($Ad&&preg_match('~CREATE~',$Mg)&&($j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($j);if($Mg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$j;\n";}if($Ad){if($Mg)echo
use_sql($m).";\n\n";$ff="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$hg){foreach(get_rows("SHOW $hg STATUS WHERE Db = ".q($m),null,"-- ")as$L){$j=remove_definer($h->result("SHOW CREATE $hg ".idf_escape($L["Name"]),2));set_utf8mb4($j);$ff.=($Mg!='DROP+CREATE'?"DROP $hg IF EXISTS ".idf_escape($L["Name"]).";;\n":"")."$j;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$L){$j=remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($L["Name"]),3));set_utf8mb4($j);$ff.=($Mg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($L["Name"]).";;\n":"")."$j;;\n\n";}}if($ff)echo"DELIMITER ;;\n\n$ff"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Zh=array();foreach(table_status('',true)as$D=>$S){$R=(DB==""||in_array($D,(array)$_POST["tables"]));$Eb=(DB==""||in_array($D,(array)$_POST["data"]));if($R||$Eb){if($Ac=="tar"){$ph=new
TmpFile;ob_start(array($ph,'write'),1e5);}$b->dumpTable($D,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$Zh[]=$D;elseif($Eb){$p=fields($D);$b->dumpData($D,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($D));}if($Ad&&$_POST["triggers"]&&$R&&($_h=trigger_sql($D,$_POST["table_style"])))echo"\nDELIMITER ;;\n$_h\nDELIMITER ;\n";if($Ac=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$D.csv",$ph);}elseif($Ad)echo"\n";}}foreach($Zh
as$Yh)$b->dumpTable($Yh,$_POST["table_style"],1);if($Ac=="tar")echo
pack("x512");}}}if($Ad)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header(lang(67),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ib=array('','USE','DROP+CREATE','CREATE');$Xg=array('','DROP+CREATE','CREATE');$Fb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Fb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$L);if(!$L)$L=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($L["events"])){$L["routines"]=$L["events"]=($_GET["dump"]=="");$L["triggers"]=$L["table_style"];}echo"<tr><th>".lang(132)."<td>".html_select("output",$b->dumpOutput(),$L["output"],0)."\n";echo"<tr><th>".lang(133)."<td>".html_select("format",$b->dumpFormat(),$L["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(36)."<td>".html_select('db_style',$Ib,$L["db_style"]).(support("routine")?checkbox("routines",1,$L["routines"],lang(134)):"").(support("event")?checkbox("events",1,$L["events"],lang(135)):"")),"<tr><th>".lang(114)."<td>".html_select('table_style',$Xg,$L["table_style"]).checkbox("auto_increment",1,$L["auto_increment"],lang(58)).(support("trigger")?checkbox("triggers",1,$L["triggers"],lang(129)):""),"<tr><th>".lang(136)."<td>".html_select('data_style',$Fb,$L["data_style"]),'</table>
<p><input type="submit" value="',lang(67),'">
<input type="hidden" name="token" value="',$rh,'">

<table cellspacing="0">
';$Af=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(114)."</label>","<th style='text-align: right;'><label class='block'>".lang(136)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Zh="";$Yg=tables_list();foreach($Yg
as$D=>$U){$_f=preg_replace('~_.*~','',$D);$db=($a==""||$a==(substr($a,-1)=="%"?"$_f%":$D));$Df="<tr><td>".checkbox("tables[]",$D,$db,$D,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Zh.="$Df\n";else
echo"$Df<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Af[$_f]++;}echo$Zh;if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(36)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$_f=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$_f%",$m,"formUncheck('check-databases');","block")."\n";$Af[$_f]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Kc=true;foreach($Af
as$y=>$X){if($y!=""&&$X>1){echo($Kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Kc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(65));$J=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Vc=$J;if(!$J)$J=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Vc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(34)."<th>".lang(33)."<th>&nbsp;</thead>\n";while($L=$J->fetch_assoc())echo'<tr'.odd().'><td>'.h($L["User"])."<td>".h($L["Host"]).'<td><a href="'.h(ME.'user='.urlencode($L["User"]).'&host='.urlencode($L["Host"])).'">'.lang(10)."</a>\n";if(!$Vc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(137)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$fd=&get_session("queries");$ed=&$fd[DB];if(!$n&&$_POST["clear"]){$ed=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(66):lang(57)),$n);if(!$n&&$_POST){$Sc=false;if(!isset($_GET["import"]))$I=$_POST["query"];elseif($_POST["webfile"]){$Sc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$I=($Sc?fread($Sc,1e6):false);}else$I=get_file("sql_file",true);if(is_string($I)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($I)+memory_get_usage()+8e6));if($I!=""&&strlen($I)<1e6){$Kf=$I.(preg_match("~;[ \t\r\n]*\$~",$I)?"":";");if(!$ed||reset(end($ed))!=$Kf){restart_session();$ed[]=array($Kf,time());set_session("queries",$fd);stop_session();}}$Eg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Nb=";";$E=0;$mc=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$qb=0;$rc=array();$kf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$th=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$dc=$b->dumpFormat();unset($dc["sql"]);while($I!=""){if(!$E&&preg_match("~^$Eg*+DELIMITER\\s+(\\S+)~i",$I,$C)){$Nb=$C[1];$I=substr($I,strlen($C[0]));}else{preg_match('('.preg_quote($Nb)."\\s*|$kf)",$I,$C,PREG_OFFSET_CAPTURE,$E);list($Qc,$wf)=$C[0];if(!$Qc&&$Sc&&!feof($Sc))$I.=fread($Sc,1e5);else{if(!$Qc&&rtrim($I)=="")break;$E=$wf+strlen($Qc);if($Qc&&rtrim($Qc)!=$Nb){while(preg_match('('.($Qc=='/*'?'\\*/':($Qc=='['?']':(preg_match('~^-- |^#~',$Qc)?"\n":preg_quote($Qc)."|\\\\."))).'|$)s',$I,$C,PREG_OFFSET_CAPTURE,$E)){$lg=$C[0][0];if(!$lg&&$Sc&&!feof($Sc))$I.=fread($Sc,1e5);else{$E=$C[0][1]+strlen($lg);if($lg[0]!="\\")break;}}}else{$mc=false;$Kf=substr($I,0,$wf);$qb++;$Df="<pre id='sql-$qb'><code class='jush-$x'>".shorten_utf8(trim($Kf),1000)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Eg*+ATTACH\\b~i",$Kf,$C)){echo$Df,"<p class='error'>".lang(138)."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Df;ob_flush();flush();}$Hg=microtime(true);if($h->multi_query($Kf)&&is_object($i)&&preg_match("~^$Eg*+USE\\b~i",$Kf))$i->query($Kf);do{$J=$h->store_result();$ih=" <span class='time'>(".format_time($Hg).")</span>".(strlen($Kf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Kf))."'>".lang(10)."</a>":"");if($h->error){echo($_POST["only_errors"]?$Df:""),"<p class='error'>".lang(139).($h->errno?" ($h->errno)":"").": ".error()."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($J)){$_=$_POST["limit"];$Ze=select($J,$i,array(),$_);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ce=$J->num_rows;echo"<p>".($Ce?($_&&$Ce>$_?lang(140,$_):"").lang(141,$Ce):""),$ih;$t="export-$qb";$_c=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(67)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$dc,$xa["format"])."<input type='hidden' name='query' value='".h($Kf)."'>"." <input type='submit' name='export' value='".lang(67)."'><input type='hidden' name='token' value='$rh'></span>\n";if($i&&preg_match("~^($Eg|\\()*+SELECT\\b~i",$Kf)&&($zc=explain($i,$Kf))){$t="explain-$qb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$_c","<div id='$t' class='hidden'>\n";select($zc,$i,$Ze);echo"</div>\n";}else
echo$_c;echo"</form>\n";}}else{if(preg_match("~^$Eg*+(CREATE|DROP|ALTER)$Eg++(DATABASE|SCHEMA)\\b~i",$Kf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(142,$h->affected_rows)."$ih\n";}$Hg=microtime(true);}while($h->next_result());}$I=substr($I,$E);$E=0;}}}}if($mc)echo"<p class='message'>".lang(143)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(144,$qb-count($rc))," <span class='time'>(".format_time($th).")</span>\n";}elseif($rc&&$qb>1)echo"<p class='error'>".lang(139).": ".implode("",$rc)."\n";}else
echo"<p class='error'>".upload_error($I)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$wc="<input type='submit' value='".lang(145)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Kf=$_GET["sql"];if($_POST)$Kf=$_POST["query"];elseif($_GET["history"]=="all")$Kf=$ed;elseif($_GET["history"]!="")$Kf=$ed[$_GET["history"]][0];echo"<p>";textarea("query",$Kf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$wc\n",lang(146).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(147)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$wc":lang(148)),"</div></fieldset>\n","<fieldset><legend>".lang(149)."</legend><div>",lang(150,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(151).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(152))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(153))."\n","<input type='hidden' name='token' value='$rh'>\n";if(!isset($_GET["import"])&&$ed){print_fieldset("history",lang(154),$_GET["history"]!="");for($X=end($ed);$X;$X=prev($ed)){$y=key($ed);list($Kf,$ih,$hc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$ih)."'>".@date("H:i:s",$ih)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Kf)))),80,"</code>").($hc?" <span class='time'>($hc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(155)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(156)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Kh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Kh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$B=$_POST["referer"];if($_POST["insert"])$B=($Kh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$B))$B=ME."select=".urlencode($a);$w=indexes($a);$Fh=unique_array($_GET["where"],$w);$Nf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($B,lang(157),$Wb->delete($a,$Nf,!$Fh));else{$P=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Kh){if(!$P)redirect($B);queries_redirect($B,lang(158),$Wb->update($a,$P,$Nf,!$Fh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$J=$Wb->insert($a,$P);$Rd=($J?last_id():0);queries_redirect($B,lang(159,($Rd?" $Rd":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($D);$N[]=($Ga?"$Ga AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$Wb->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$p){if(!$Z){$J=$Wb->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($Wb->primary=>"");}if($L){foreach($L
as$y=>$X){if(!$Z)$L[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Wb->primary),"auto_increment"=>($y==$Wb->primary));}}}edit_form($a,$p,$L,$Kh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$lf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$lf[$y]=$y;$Uf=referencable_primary($a);$Oc=array();foreach($Uf
as$Tg=>$o)$Oc[str_replace("`","``",$Tg)."`".str_replace("`","``",$o["field"])]=$Tg;$cf=array();$S=array();if($a!=""){$cf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$L=$_POST;$L["fields"]=(array)$L["fields"];if($L["auto_increment_col"])$L["fields"][$L["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($L["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(160),drop_tables(array($a)));else{$p=array();$Da=array();$Oh=false;$Mc=array();ksort($L["fields"]);$bf=reset($cf);$Aa=" FIRST";foreach($L["fields"]as$y=>$o){$q=$Oc[$o["type"]];$Ah=($q!==null?$Uf[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$L["auto_increment_col"])$o["auto_increment"]=true;$If=process_field($o,$Ah);$Da[]=array($o["orig"],$If,$Aa);if($If!=process_field($bf,$bf)){$p[]=array($o["orig"],$If,$Aa);if($o["orig"]!=""||$Aa)$Oh=true;}if($q!==null)$Mc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Oc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Ah["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Oh=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$bf=next($cf);if(!$bf)$Aa="";}}$nf="";if($lf[$L["partition_by"]]){$of=array();if($L["partition_by"]=='RANGE'||$L["partition_by"]=='LIST'){foreach(array_filter($L["partition_names"])as$y=>$X){$Y=$L["partition_values"][$y];$of[]="\n  PARTITION ".idf_escape($X)." VALUES ".($L["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$nf.="\nPARTITION BY $L[partition_by]($L[partition])".($of?" (".implode(",",$of)."\n)":($L["partitions"]?" PARTITIONS ".(+$L["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$nf.="\nREMOVE PARTITIONING";$le=lang(161);if($a==""){cookie("adminer_engine",$L["Engine"]);$le=lang(162);}$D=trim($L["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$le,alter_table($a,$D,($x=="sqlite"&&($Oh||$Mc)?$Da:$p),$Mc,($L["Comment"]!=$S["Comment"]?$L["Comment"]:null),($L["Engine"]&&$L["Engine"]!=$S["Engine"]?$L["Engine"]:""),($L["Collation"]&&$L["Collation"]!=$S["Collation"]?$L["Collation"]:""),($L["Auto_increment"]!=""?number($L["Auto_increment"]):""),$nf));}}page_header(($a!=""?lang(43):lang(68)),$n,array("table"=>$a),h($a));if(!$_POST){$L=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Ch["int"])?"int":(isset($Ch["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$L=$S;$L["name"]=$a;$L["fields"]=array();if(!$_GET["auto_increment"])$L["Auto_increment"]="";foreach($cf
as$o){$o["has_default"]=isset($o["default"]);$L["fields"][]=$o;}if(support("partitioning")){$Tc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$J=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Tc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($L["partition_by"],$L["partitions"],$L["partition"])=$J->fetch_row();$of=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Tc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$of[""]="";$L["partition_names"]=array_keys($of);$L["partition_values"]=array_values($of);}}}$nb=collations();$oc=engines();foreach($oc
as$nc){if(!strcasecmp($nc,$L["Engine"])){$L["Engine"]=$nc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(163),': <input name="name" maxlength="64" value="',h($L["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($oc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(164).")")+$oc,$L["Engine"])."</select>":""),' ',($nb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(89).")")+$nb,$L["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$sb=($_POST?$_POST["comments"]:$L["Comment"]!="");if(!$_POST&&!$sb){foreach($L["fields"]as$o){if($o["comment"]!=""){$sb=true;break;}}}edit_fields($L["fields"],$nb,"TABLE",$Oc,$sb);echo'</table>
<p>
',lang(58),': <input type="number" name="Auto_increment" size="6" value="',h($L["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(165),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($sb?" checked":"").">".lang(98)."</label>".' <input name="Comment" id="Comment" value="'.h($L["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($sb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}if(support("partitioning")){$mf=preg_match('~RANGE|LIST~',$L["partition_by"]);print_fieldset("partition",lang(166),$L["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$lf,$L["partition_by"])."</select>",'(<input name="partition" value="',h($L["partition"]),'">)
',lang(167),': <input type="number" name="partitions" class="size',($mf||!$L["partition_by"]?" hidden":""),'" value="',h($L["partitions"]),'">
<table cellspacing="0" id="partition-table"',($mf?"":" class='hidden'"),'>
<thead><tr><th>',lang(168),'<th>',lang(169),'</thead>
';foreach($L["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($L["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($L["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$od=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($h->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$od[]="FULLTEXT";$w=indexes($a);$Bf=array();if($x=="mongo"){$Bf=$w["_id_"];unset($od[0]);unset($w["_id_"]);}$L=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($L["indexes"]as$v){$D=$v["name"];if(in_array($v["type"],$od)){$f=array();$Wd=array();$Pb=array();$P=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$e){if($e!=""){$z=$v["lengths"][$y];$Ob=$v["descs"][$y];$P[]=idf_escape($e).($z?"(".(+$z).")":"").($Ob?" DESC":"");$f[]=$e;$Wd[]=($z?$z:null);$Pb[]=$Ob;}}if($f){$xc=$w[$D];if($xc){ksort($xc["columns"]);ksort($xc["lengths"]);ksort($xc["descs"]);if($v["type"]==$xc["type"]&&array_values($xc["columns"])===$f&&(!$xc["lengths"]||array_values($xc["lengths"])===$Wd)&&array_values($xc["descs"])===$Pb){unset($w[$D]);continue;}}$c[]=array($v["type"],$D,$P);}}}foreach($w
as$D=>$xc)$c[]=array($xc["type"],$D,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(170),alter_indexes($a,$c));}page_header(lang(123),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($L["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$L["indexes"][$y]["columns"][]="";}$v=end($L["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$L["indexes"][]=array("columns"=>array(1=>""));}if(!$L){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$L["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(171),'<th><input type="submit" class="wayoff">',lang(172),'<th id="label-name">',lang(173);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=experiment' alt='+' title='<?php echo
lang(99),'\'></noscript>&nbsp;
</thead>
';if($Bf){echo"<tr><td>PRIMARY<td>";foreach($Bf["columns"]as$y=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".lang(52)."</label> ";}echo"<td><td>\n";}$Ed=1;foreach($L["indexes"]as$v){if(!$_POST["drop_col"]||$Ed!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ed][type]",array(-1=>"")+$od,$v["type"],($Ed==count($L["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$e){echo"<span>".select_input(" name='indexes[$Ed][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(122)."'",($p?array_combine($p,$p):$p),$e),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Ed][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(95)."'>":""),($x!="sql"?checkbox("indexes[$Ed][descs][$s]",1,$v["descs"][$y],lang(52)):"")," </span>";$s++;}echo"<td><input name='indexes[$Ed][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Ed]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=experiment' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Ed++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["database"])){$L=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$D=trim($L["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(174),drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),lang(175),rename_database($D,$L["collation"]));}else{$l=explode("\n",str_replace("\r","",$D));$Ng=true;$Qd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$L["collation"]))$Ng=false;$Qd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Qd),lang(176),$Ng);}}else{if(!$L["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$L["collation"])?" COLLATE $L[collation]":""),substr(ME,0,-1),lang(177));}}page_header(DB!=""?lang(61):lang(178),$n,array(),h(DB));$nb=collations();$D=DB;if($_POST)$D=$L["name"];elseif(DB!="")$L["collation"]=db_collation(DB,$nb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$Vc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Vc,$C)&&$C[1]){$D=stripcslashes(idf_unescape("`$C[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" maxlength="64" autocapitalize="off">')."\n".($nb?html_select("collation",array(""=>"(".lang(89).")")+$nb,$L["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(118)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=experiment' alt='+' title='".lang(99)."'>\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["scheme"])){$L=$_POST;if($_POST&&!$n){$A=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$A,lang(179));else{$D=trim($L["name"]);$A.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$A,lang(180));elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$A,lang(181));else
redirect($A);}}page_header($_GET["ns"]!=""?lang(62):lang(63),$n);if(!$L)$L["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($L["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(118)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(182).": ".h($da),$n);$hg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$md=array();$ff=array();foreach($hg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$ff[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$md[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($hg["fields"]as$y=>$o){if(in_array($y,$md)){$X=process_input($o);if($X===false)$X="''";if(isset($ff[$y]))$h->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($ff[$y])?"@".idf_escape($o["field"]):$X);}$I=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$x'>".h($I)."</code> <a href='".h(ME)."sql=".urlencode($I)."'>".lang(10)."</a>\n";if(!$h->multi_query($I))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$J=$h->store_result();if(is_object($J))select($J,$i);else
echo"<p class='message'>".lang(183,$h->affected_rows)."\n";}while($h->next_result());if($ff)select($h->query("SELECT ".implode(", ",$ff)));}}echo'
<form action="" method="post">
';if($md){echo"<table cellspacing='0'>\n";foreach($md
as$y){$o=$hg["fields"][$y];$D=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$D];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(182),'">
<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$L=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$le=($_POST["drop"]?lang(184):($D!=""?lang(185):lang(186)));$B=ME."table=".urlencode($a);$L["source"]=array_filter($L["source"],'strlen');ksort($L["source"]);$bh=array();foreach($L["source"]as$y=>$X)$bh[$y]=$L["target"][$y];$L["target"]=$bh;if($x=="sqlite")queries_redirect($B,$le,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($L)))));else{$c="ALTER TABLE ".table($a);$Yb="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$Yb,$B,$le);else{query_redirect($c.($D!=""?"$Yb,":"")."\nADD".format_foreign_key($L),$B,$le);$n=lang(187)."<br>$n";}}}page_header(lang(188),$n,array("table"=>$a),h($a));if($_POST){ksort($L["source"]);if($_POST["add"])$L["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$L["target"]=array();}elseif($D!=""){$Oc=foreign_keys($a);$L=$Oc[$D];$L["source"][]="";}else{$L["table"]=$a;$L["source"]=array("");}$Dg=array_keys(fields($a));$bh=($a===$L["table"]?$Dg:array_keys(fields($L["table"])));$Tf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($L["db"]==""&&$L["ns"]==""){echo
lang(189),':
',html_select("table",$Tf,$L["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(190),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(125),'<th id="label-target">',lang(126),'</thead>
';$Ed=0;foreach($L["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Dg,$X,($Ed==count($L["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$bh,$L["target"][$y],1,"label-target");$Ed++;}echo'</table>
<p>
',lang(91),': ',html_select("on_delete",array(-1=>"")+explode("|",$Me),$L["on_delete"]),' ',lang(90),': ',html_select("on_update",array(-1=>"")+explode("|",$Me),$L["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(191),'"></noscript>
';}if($D!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$L=$_POST;if($_POST&&!$n){$D=trim($L["name"]);$Ga=" AS\n$L[select]";$B=ME."table=".urlencode($D);$le=lang(192);if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($x=="pgsql"){$Ig=table_status($D);$U=($Ig?strtoupper($Ig["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$D&&$x!="sqlite"&&$U!="MATERIALIZED VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$Ga,$B,$le);else{$dh=$D."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($D).$Ga,"DROP $U ".table($D),"CREATE $U ".table($dh).$Ga,"DROP $U ".table($dh),($_POST["drop"]?substr(ME,0,-1):$B),lang(193),$le,lang(194),$a,$D);}}if(!$_POST&&$a!=""){$L=view($a);$L["name"]=$a;if(!$n)$n=error();}page_header(($a!=""?lang(42):lang(195)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(173),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$L["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$wd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Jg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$L=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(196));elseif(in_array($L["INTERVAL_FIELD"],$wd)&&isset($Jg[$L["STATUS"]])){$mg="\nON SCHEDULE ".($L["INTERVAL_VALUE"]?"EVERY ".q($L["INTERVAL_VALUE"])." $L[INTERVAL_FIELD]".($L["STARTS"]?" STARTS ".q($L["STARTS"]):"").($L["ENDS"]?" ENDS ".q($L["ENDS"]):""):"AT ".q($L["STARTS"]))." ON COMPLETION".($L["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(197):lang(198)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$mg.($aa!=$L["EVENT_NAME"]?"\nRENAME TO ".idf_escape($L["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($L["EVENT_NAME"]).$mg)."\n".$Jg[$L["STATUS"]]." COMMENT ".q($L["EVENT_COMMENT"]).rtrim(" DO\n$L[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(199).": ".h($aa):lang(200)),$n);if(!$L&&$aa!=""){$M=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$L=reset($M);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(173),'<td><input name="EVENT_NAME" value="',h($L["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(201),'<td><input name="STARTS" value="',h("$L[EXECUTE_AT]$L[STARTS]"),'">
<tr><th title="datetime">',lang(202),'<td><input name="ENDS" value="',h($L["ENDS"]),'">
<tr><th>',lang(203),'<td><input type="number" name="INTERVAL_VALUE" value="',h($L["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$wd,$L["INTERVAL_FIELD"]),'<tr><th>',lang(109),'<td>',html_select("STATUS",$Jg,$L["STATUS"]),'<tr><th>',lang(98),'<td><input name="EVENT_COMMENT" value="',h($L["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$L["ON_COMPLETION"]=="PRESERVE",lang(204)),'</table>
<p>';textarea("EVENT_DEFINITION",$L["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$hg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$L=$_POST;$L["fields"]=(array)$L["fields"];if($_POST&&!process_fields($L["fields"])&&!$n){$dh="$L[name]_adminer_".uniqid();drop_create("DROP $hg ".idf_escape($da),create_routine($hg,$L),"DROP $hg ".idf_escape($L["name"]),create_routine($hg,array("name"=>$dh)+$L),"DROP $hg ".idf_escape($dh),substr(ME,0,-1),lang(205),lang(206),lang(207),$da,$L["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(208):lang(209)).": ".h($da):(isset($_GET["function"])?lang(210):lang(211))),$n);if(!$_POST&&$da!=""){$L=routine($da,$hg);$L["name"]=$da;}$nb=get_vals("SHOW CHARACTER SET");sort($nb);$ig=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(173),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
',($ig?lang(19).": ".html_select("language",$ig,$L["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($L["fields"],$nb,$hg);if(isset($_GET["function"])){echo"<tr><td>".lang(212);edit_type("returns",$L["returns"],$nb);}echo'</table>
<p>';textarea("definition",$L["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$L=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);$D=trim($L["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$A,lang(213));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$A,lang(214));elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$A,lang(215));else
redirect($A);}page_header($fa!=""?lang(216).": ".h($fa):lang(217),$n);if(!$L)$L["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($L["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(118)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$L=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$A,lang(218));else
query_redirect("CREATE TYPE ".idf_escape(trim($L["name"]))." $L[as]",$A,lang(219));}page_header($ga!=""?lang(220).": ".h($ga):lang(221),$n);if(!$L)$L["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(118)."'".confirm().">\n";else{echo"<input name='name' value='".h($L['name'])."' autocapitalize='off'>\n";textarea("as",$L["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$zh=trigger_options();$L=(array)trigger($D)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$zh["Timing"])&&in_array($_POST["Event"],$zh["Event"])&&in_array($_POST["Type"],$zh["Type"])){$Le=" ON ".table($a);$Yb="DROP TRIGGER ".idf_escape($D).($x=="pgsql"?$Le:"");$B=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Yb,$B,lang(222));else{if($D!="")queries($Yb);queries_redirect($B,($D!=""?lang(223):lang(224)),queries(create_trigger($Le,$_POST)));if($D!="")queries(create_trigger($Le,$L+array("Type"=>reset($zh["Type"]))));}}$L=$_POST;}page_header(($D!=""?lang(225).": ".h($D):lang(226)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(227),'<td>',html_select("Timing",$zh["Timing"],$L["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(228),'<td>',html_select("Event",$zh["Event"],$L["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$zh["Event"])?" <input name='Of' value='".h($L["Of"])."' class='hidden'>":""),'<tr><th>',lang(94),'<td>',html_select("Type",$zh["Type"],$L["Type"]),'</table>
<p>',lang(173),': <input name="Trigger" value="',h($L["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$L["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($D!=""){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Gf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$L){foreach(explode(",",($L["Privilege"]=="Grant option"?"":$L["Context"]))as$yb)$Gf[$yb][$L["Privilege"]]=$L["Comment"];}$Gf["Server Admin"]+=$Gf["File access on server"];$Gf["Databases"]["Create routine"]=$Gf["Procedures"]["Create routine"];unset($Gf["Procedures"]["Create routine"]);$Gf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Gf["Columns"][$X]=$Gf["Tables"][$X];unset($Gf["Server Admin"]["Usage"]);foreach($Gf["Tables"]as$y=>$X)unset($Gf["Databases"][$y]);$ye=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$ye[$X]=(array)$ye[$X]+(array)$_POST["grants"][$y];}$Wc=array();$Je="";if(isset($_GET["host"])&&($J=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($L=$J->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$L[0],$C)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$C[1],$de,PREG_SET_ORDER)){foreach($de
as$X){if($X[1]!="USAGE")$Wc["$C[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$L[0]))$Wc["$C[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$L[0],$C))$Je=$C[1];}}if($_POST&&!$n){$Ke=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ke",ME."privileges=",lang(229));else{$_e=q($_POST["user"])."@".q($_POST["host"]);$pf=$_POST["pass"];if($pf!=''&&!$_POST["hashed"]){$pf=$h->result("SELECT PASSWORD(".q($pf).")");$n=!$pf;}$Cb=false;if(!$n){if($Ke!=$_e){$Cb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $_e IDENTIFIED BY PASSWORD ".q($pf));$n=!$Cb;}elseif($pf!=$Je)queries("SET PASSWORD FOR $_e = ".q($pf));}if(!$n){$eg=array();foreach($ye
as$Ee=>$Vc){if(isset($_GET["grant"]))$Vc=array_filter($Vc);$Vc=array_keys($Vc);if(isset($_GET["grant"]))$eg=array_diff(array_keys(array_filter($ye[$Ee],'strlen')),$Vc);elseif($Ke==$_e){$He=array_keys((array)$Wc[$Ee]);$eg=array_diff($He,$Vc);$Vc=array_diff($Vc,$He);unset($Wc[$Ee]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ee,$C)&&(!grant("REVOKE",$eg,$C[2]," ON $C[1] FROM $_e")||!grant("GRANT",$Vc,$C[2]," ON $C[1] TO $_e"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ke!=$_e)queries("DROP USER $Ke");elseif(!isset($_GET["grant"])){foreach($Wc
as$Ee=>$eg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ee,$C))grant("REVOKE",array_keys($eg),$C[2]," ON $C[1] FROM $_e");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(230):lang(231)),!$n);if($Cb)$h->query("DROP USER $_e");}}page_header((isset($_GET["host"])?lang(34).": ".h("$ha@$_GET[host]"):lang(137)),$n,array("privileges"=>array('',lang(65))));if($_POST){$L=$_POST;$Wc=$ye;}else{$L=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$L["pass"]=$Je;if($Je!="")$L["hashed"]=true;$Wc[(DB==""||$Wc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(33),'<td><input name="host" maxlength="60" value="',h($L["host"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="user" maxlength="16" value="',h($L["user"]),'" autocapitalize="off">
<tr><th>',lang(35),'<td><input name="pass" id="pass" value="',h($L["pass"]),'">
';if(!$L["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$L["hashed"],lang(232),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(65).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Wc
as$Ee=>$Vc){echo'<th>'.($Ee!="*.*"?"<input name='objects[$s]' value='".h($Ee)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(33),"Databases"=>lang(36),"Tables"=>lang(121),"Columns"=>lang(122),"Procedures"=>lang(233),)as$yb=>$Ob){foreach((array)$Gf[$yb]as$Ff=>$rb){echo"<tr".odd()."><td".($Ob?">$Ob<td":" colspan='2'").' lang="en" title="'.h($rb).'">'.h($Ff);$s=0;foreach($Wc
as$Ee=>$Vc){$D="'grants[$s][".h(strtoupper($Ff))."]'";$Y=$Vc[strtoupper($Ff)];if($yb=="Server Admin"&&$Ee!=(isset($Wc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".lang(234)."<option value='0'".($Y=="0"?" selected":"").">".lang(235)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$D value='1'".($Y?" checked":"").($Ff=="All privileges"?" id='grants-$s-all'":($Ff=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(118),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Ld=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Ld++;}queries_redirect(ME."processlist=",lang(236,$Ld),$Ld||!$_POST["kill"]);}page_header(lang(107),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$L){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($L
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$L[$x=="sql"?"Id":"pid"],0):"");foreach($L
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$L["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($L["db"]!=""?"db=".urlencode($L["db"])."&":"")."sql=".urlencode($X)).'">'.lang(237).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(238,max_connections()),"<p><input type='submit' value='".lang(239)."'>\n";}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Oc=column_foreign_keys($a);$Ge="";if($S["Oid"]){$Ge=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ge));}parse_str($_COOKIE["adminer_import"],$ya);$fg=array();$f=array();$hh=null;foreach($p
as$y=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$y]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$hh=$b->selectLengthProcess();}$fg+=$o["privileges"];}list($N,$Xc)=$b->selectColumnsProcess($f,$w);$_d=count($Xc)<count($N);$Z=$b->selectSearchProcess($p,$w);$We=$b->selectOrderProcess($p,$w);$_=$b->selectLimitProcess();$Tc=($N?implode(", ",$N):"*".($Ge?", $Ge":"")).convert_fields($f,$p,$N)."\nFROM ".table($a);$Yc=($Xc&&$_d?"\nGROUP BY ".implode(", ",$Xc):"").($We?"\nORDER BY ".implode(", ",$We):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Gh=>$L){$Ga=convert_field($p[key($L)]);$N=array($Ga?$Ga:idf_escape(key($L)));$Z[]=where_check($Gh,$p);$K=$Wb->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$n){$di=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$di[]="((".implode(") OR (",$eb)."))";}$di=($di?"\nWHERE ".implode(" AND ",$di):"");$Bf=$Ih=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Bf=array_flip($v["columns"]);$Ih=($N?$Bf:array());break;}}foreach((array)$Ih
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Ih[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Ih===array())$I="SELECT $Tc$di$Yc";else{$Eh=array();foreach($_POST["check"]as$X)$Eh[]="(SELECT".limit($Tc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Yc,1).")";$I=implode(" UNION ALL ",$Eh);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$Oc)){if($_POST["save"]||$_POST["delete"]){$J=true;$za=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Ih===array()&&is_array($_POST["check"]))||$_d){$J=($_POST["delete"]?$Wb->delete($a,$di):($_POST["clone"]?queries("INSERT $I$di"):$Wb->update($a,$P,$di)));$za=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ci="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$J=($_POST["delete"]?$Wb->delete($a,$ci,1):($_POST["clone"]?queries("INSERT".limit1($I,$ci)):$Wb->update($a,$P,$ci)));if(!$J)break;$za+=$h->affected_rows;}}}$le=lang(240,$za);if($_POST["clone"]&&$J&&$za==1){$Rd=last_id();if($Rd)$le=lang(159," $Rd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$le,$J);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(241);else{$J=true;$za=0;foreach($_POST["val"]as$Gh=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$J=$Wb->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Gh,$p),!($_d||$Ih===array())," ");if(!$J)break;$za+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(240,$za),$J);}}elseif(!is_string($Hc=get_file("csv_file",true)))$n=upload_error($Hc);elseif(!preg_match('~~u',$Hc))$n=lang(242);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$J=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Hc,$de);$za=count($de[0]);$Wb->begin();$ug=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($de[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$ug]*)$ug~",$X.$ug,$ee);if(!$y&&!array_diff($ee[1],$ob)){$ob=$ee[1];$za--;}else{$P=array();foreach($ee[1]as$s=>$lb)$P[idf_escape($ob[$s])]=($lb==""&&$p[$ob[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$M[]=$P;}}$J=(!$M||$Wb->insertUpdate($a,$M,$Bf));if($J)$Wb->commit();queries_redirect(remove_from_uri("page"),lang(243,$za),$J);$Wb->rollback();}}}$Tg=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(46).": $Tg",$n);$P=null;if(isset($fg["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($Oc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".lang(244).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($We,$f,$w);$b->selectLimitPrint($_);$b->selectLengthPrint($hh);$b->selectActionPrint($w);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Rc=$h->result(count_rows($a,$Z,$_d,$Xc));$F=floor(max(0,$Rc-1)/$_);}$rg=$N;if(!$rg){$rg[]="*";if($Ge)$rg[]=$Ge;}$zb=convert_fields($f,$p,$N);if($zb)$rg[]=substr($zb,2);$J=$Wb->select($a,$rg,$Z,$Xc,$We,$_,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($_*$F);$lc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$_&&$Xc&&$_d&&$x=="sql")$Rc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$Tg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Xc&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(245)."</a>");$xe=array();$Uc=array();reset($N);$Pf=1;foreach($M[0]as$y=>$X){if($y!=$Ge){$X=$_GET["columns"][key($N)];$o=$p[$N?($X?$X["col"]:current($N)):$y];$D=($o?$b->fieldName($o,$Pf):($X["fun"]?"*":$y));if($D!=""){$Pf++;$xe[$y]=$D;$e=idf_escape($y);$id=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ob="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($id.($We[0]==$e||$We[0]==$y||(!$We&&$_d&&$Xc[0]==$e)?$Ob:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($id.$Ob)."' title='".lang(52)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(49).'" class="text jsonly"> =</a>';echo"</span>";}$Uc[$y]=$X["fun"];next($N);}}$Wd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$Wd[$y]=max($Wd[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(246):"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Oc)as$we=>$L){$Fh=unique_array($M[$we],$w);if(!$Fh){$Fh=array();foreach($M[$we]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Fh[$y]=$X;}}$Gh="";foreach($Fh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($h).")").")";$X=md5($X);}$Gh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$Xc&&$N?"":"<td>".checkbox("check[]",substr($Gh,1),in_array(substr($Gh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($_d||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Gh)."'>".lang(247)."</a>"));foreach($L
as$y=>$X){if(isset($xe[$y])){$o=$p[$y];if($X!=""&&(!isset($lc[$y])||$lc[$y]!=""))$lc[$y]=(is_mail($X)?$xe[$y]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($y).$Gh;if(!$A&&$X!==null){foreach((array)$Oc[$y]as$q){if(count($Oc[$y])==1||end($q["source"])==$y){$A="";foreach($q["source"]as$s=>$Dg)$A.=where_link($s,$q["target"][$s],$M[$we][$Dg]);$A=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$A;if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$A=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Fh))$A.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Fh
as$Fd=>$W)$A.=where_link($s++,$Fd,$W);}$X=select_value($X,$A,$o,$hh);$t=h("val[$Gh][".bracket_escape($y)."]");$Y=$_POST["val"][$Gh][bracket_escape($y)];$gc=!is_array($L[$y])&&is_utf8($X)&&$M[$we][$y]==$L[$y]&&!$Uc[$y];$gh=preg_match('~text|lob|json~',$o["type"]);if(($_GET["modify"]&&$gc)||$Y!==null){$ad=h($Y!==null?$Y:$L[$y]);echo"<td>".($gh?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$ad</textarea>":"<input name='$t' value='$ad' size='$Wd[$y]'>");}else{$ae=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ae?2:($gh?1:0)).($gc?"":", '".h(lang(248))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$M[$we]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$vc=true;if($_GET["page"]!="last"){if(!+$_)$Rc=count($M);elseif($x!="sql"||!$_d){$Rc=($_d?false:found_rows($S,$Z));if($Rc<max(1e4,2*($F+1)*$_))$Rc=reset(slow_query(count_rows($a,$Z,$_d,$Xc)));else$vc=false;}}if(+$_&&($Rc===false||$Rc>$_||$F)){echo"<p class='pages'>";$ge=($Rc===false?$F+(count($M)>=$_?2:1):floor(($Rc-1)/$_));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(249)."', '".($F+1)."'), event); return false;\">".lang(249)."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($ge,$F+5);$s++)echo
pagination($s,$F);if($ge>0){echo($F+5<$ge?" ...":""),($vc&&$Rc!==false?pagination($ge,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ge'>".lang(250)."</a>");}echo(($Rc===false?count($M)+1:$Rc-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$_).', \''.lang(251).'...\');" class="loadmore">'.lang(252).'</a>':'');}else{echo
lang(249).":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($ge>$F?pagination($F+1,$F).($ge>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($Rc!==false?"(".($vc?"":"~ ").lang(141,$Rc).") ":"");$Tb=($vc?"":"~ ").$Rc;echo
checkbox("all",1,0,lang(253),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Tb' : checked); selectCount('selected2', this.checked || !checked ? '$Tb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(245),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(241).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(117),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(237),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Pc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Pc['sql']);break;}}if($Pc){print_fieldset("export",lang(67)." <span id='selected2'></span>");$gf=$b->dumpOutput();echo($gf?html_select("output",$gf,$ya["output"])." ":""),html_select("format",$Pc,$ya["format"])," <input type='submit' name='export' value='".lang(67)."'>\n","</div></fieldset>\n";}echo(!$Xc&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(66),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(66)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$rh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Ig=isset($_GET["status"]);page_header($Ig?lang(109):lang(108));$Vh=($Ig?show_status():show_variables());if(!$Vh)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Vh
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($Ig?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Qg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$S){json_row("Comment-$D",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$D",nbsp($S[$y]));foreach($Qg+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$D",($y=="Rows"&&$X&&$S["Engine"]==($Fg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Qg[$y]))$Qg[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$D");}}}foreach($Qg
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Zg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Zg&&!$n&&!$_POST["search"]){$J=true;$le="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$J=truncate_tables($_POST["tables"]);$le=lang(254);}elseif($_POST["move"]){$J=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(255);}elseif($_POST["copy"]){$J=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(256);}elseif($_POST["drop"]){if($_POST["views"])$J=drop_views($_POST["views"]);if($J&&$_POST["tables"])$J=drop_tables($_POST["tables"]);$le=lang(257);}elseif($x!="sql"){$J=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$le=lang(258);}elseif(!$_POST["tables"])$le=lang(9);elseif($J=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($L=$J->fetch_assoc())$le.="<b>".h($L["Table"])."</b>: ".h($L["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$le,$J);}page_header(($_GET["ns"]==""?lang(36).": ".h(DB):lang(70).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(259)."</h3>\n";$Yg=tables_list();if(!$Yg)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(260)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(49)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Ub=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.lang(121),'<td>'.lang(261).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(113).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(262).$Ub,'<td>'.lang(263).$Ub,'<td>'.lang(264).$Ub,'<td>'.lang(58).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(265).$Ub,(support("comment")?'<td>'.lang(98).$Ub:''),"</thead>\n";$T=0;foreach($Yg
as$D=>$U){$Yh=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$D);echo'<tr'.odd().'><td>'.checkbox(($Yh?"views[]":"tables[]"),$D,in_array($D,$Zg,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($D)."' title='".lang(41)."' id='$t'>".h($D).'</a>':h($D));if($Yh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.lang(42).'">'.(preg_match('~materialized~i',$U)?lang(266):lang(120)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.lang(40).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(43)),"Index_length"=>array("indexes",lang(124)),"Data_free"=>array("edit",lang(44)),"Auto_increment"=>array("auto_increment=1&create",lang(43)),"Rows"=>array("select",lang(40)),)as$y=>$A){$t=" id='$y-".h($D)."'";echo($A?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$A[0]=").urlencode($D)."'$t title='$A[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($D)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($D)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($Yg)),"<td>".nbsp($x=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Sh="<input type='submit' value='".lang(267)."'".on_help("'VACUUM'")."> ";$Se="<input type='submit' name='optimize' value='".lang(268)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(117)." <span id='selected'></span></legend><div>".($x=="sqlite"?$Sh:($x=="pgsql"?$Sh.$Se:($x=="sql"?"<input type='submit' value='".lang(269)."'".on_help("'ANALYZE TABLE'")."> ".$Se."<input type='submit' name='check' value='".lang(270)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(271)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(272)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(118)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(273).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(274)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(275)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$rh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(68)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(195)."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.lang(276)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(134)."</h3>\n";$jg=routines();if($jg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(173).'<td>'.lang(94).'<td>'.lang(212)."<td>&nbsp;</thead>\n";odd('');foreach($jg
as$L){echo'<tr'.odd().'>','<th><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($L["ROUTINE_NAME"]).'">'.h($L["ROUTINE_NAME"]).'</a>','<td>'.h($L["ROUTINE_TYPE"]),'<td>'.h($L["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($L["ROUTINE_NAME"]).'">'.lang(127)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(211).'</a>':'').'<a href="'.h(ME).'function=">'.lang(210)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(277)."</h3>\n";$vg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($vg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(173)."</thead>\n";odd('');foreach($vg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(217)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$Qh=types();if($Qh){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(173)."</thead>\n";odd('');foreach($Qh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(221)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(135)."</h3>\n";$M=get_rows("SHOW EVENTS");if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(173)."<td>".lang(278)."<td>".lang(201)."<td>".lang(202)."<td></thead>\n";foreach($M
as$L){echo"<tr>","<th>".h($L["Name"]),"<td>".($L["Execute at"]?lang(279)."<td>".$L["Execute at"]:lang(203)." ".$L["Interval value"]." ".$L["Interval field"]."<td>$L[Starts]"),"<td>$L[Ends]",'<td><a href="'.h(ME).'event='.urlencode($L["Name"]).'">'.lang(127).'</a>';}echo"</table>\n";$tc=$h->result("SELECT @@event_scheduler");if($tc&&$tc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($tc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(200)."</a>\n";}if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();
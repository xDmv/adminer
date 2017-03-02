<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.6-dev
*/error_reporting(6135);$Jc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Hh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Hh)$$X=$Hh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress(" ‚ \$I´ào9#AÐèp9Ž…âói„ðc2…Æ#y¼ès:Œ'ÄhÆo6‹ÌÆóqÐZa;™Nrƒ(¼h.‹†óÌç*–K¦) ¸Úi“O„B	°Ø;‚A¡¡[/˜ÌÍ¦QtôçK¦Óã†CÉîNl„„f1Å²Ø;1Lf³9ÈÞu7-C!¸ÈÄ3årÑÐä`%ŒEÃ!¨€¬e9&ã°‚r4ÓE„ƒ)°ìe:LySžLæ-9ä\r&aÜTäg¤°'Ó\r˜ßh9Z­ÖÑÀìèe<KŒ†Y<‹C,¥†QÞÐtv4œÍ;ó&ÛqºÞ[ùÆÊA¬th7çÎBÃ?£Ó2Þ¼.µ¦×ÙÞïø\"ÞÃÇ7¯3—pÜæ6sä:;ï ö·/{vß8ˆ„>ãKå?îhÂ\rC¨æ4£C:8@¯bÎ÷7nÐÐl\\éC(t†¬;Z0µí‹8# È¤áÐ\\£h@È+‚þ¨â”Eã€ð&nàÈaÌ¬Á(!jb4Œèk’„\"ª|GÄ­êâ¹®«ºò½¯«ûf4QL³EÑ„d×6È`Oaa'hbIÁÜqG‘ô!HƒlŒÈ²J<:I(2˜FSÜÆìAqT´2Ë’ó”9L+‚äº.ÏÜØ¿0hÐÎJ¼·.À•=SQN‘{\0Æq«óFÏ“ãš•ÕÜñ9£¤¦:#Ø2c½2:\r}9`YsÕ›hÚvTi<ÅòA?PÛŽR\rÍ×#Ò4¤AKIôÄ¦×®!@`_wè\\…4|‘iŒÐ%é(6ôÈA|7Õù‡†þ^\r1k¶pYlwcøÙ`T‹1\\I·®{Œ÷ÍûˆbYåIIcnK„JX^S†åwöCG1ØÝ±w5ÿ\"ã#F;UÍ5pF†¡˜Â0cæ¦ËÎ:Y°ôrc^îïÈÆ2¥¬†yDgñðe¡º%°2ëxÖß¸èÓ=Y5/AÖïèú3\r,èÈÔŽƒÜv9Ž`Â<‡JCüæ<MF6kú¨uylùö¶ÈQü‹nÑ[eÍueÙí*JÁËš8\\VC!]H> £8÷È´Jo+°‡J<uiô­œv·ñ-ZöÌý?ŸT°'—B©;‡£ÍlÖ´ÑÀå²küÞc+ó®7/[!®˜ßÍôD?^9»i3XF!¬`0õ~ÿZ¹#³} ÔhÜ«[f\$Å˜ÐÚK{ˆ.H\0¤\0êØt!À2ƒÒ\nC8e®ÜÈ9'tÕã¾Úè,qÃÁ„:†Ç\nG:G!¼;³6ÁÁ7ˆG6\nÁp\\÷Ãˆu\r/|êÃƒP!Ü=‡êƒÄÈ‰¢1MŸ¿0ßb€d‡ú*(­ax.î,7†`ÌÚ¸:PJqæ(h\"tÐ‘ùZ)F 6Z›†:.%Åƒ¥¤Ë™ÍÇˆéÄ¨\râX*êôu€PÀs\0¸4)“†`.9AªMI’X+‡Ž1\nGéI&Ë8u\r¡¸=s¤~Ô{6ñõOsÝcô{A¾ fA¤ÉneD˜°n¹’\"OhiÀ­ÐZ¼£”Îh’Š àû%	Êóy®†6&äã\$kVN›óPŽ:€qúuMõ;Dï‚i}TÙd°r‘àŒ2†Pj«ª˜MâbËäÁ3‡*Ønçî†v—Dh™ÌTJÝS&	ý&\nÙ>„Qñ)Àr”í£“QI1@D¡¥&–ËV{3\\ä›Qk\0.gb±M™]Š	ñ&Ydý©ÔÜ7K*¤|\$Pb)Ð²¾*AèLŠ\rèéöUrØƒ\"ª{41ñ7¶û\"¥}J8­pY`‡‹™éœf»×:ë_kÊÏn­\"aÑÓÜþÐ5’`Ð•¹tŒófbŒX±€\\‹Àc?í¯BƒòÈÈlŠª¡´1 {:Ø,ûÑ©çÜÐU©iÜµ k2\r­E¬Â/m¯6ÛÛ˜h¥ãª“¼8‰4jVšZ¯\$'ã€íêÙ·á¾àÈ£ C¼	5ii¸Õ w&\\˜.F„ÏÝªHàl­2`9‡÷Í­Ñ0 á`S\"óaËÜ\rÐIï’Ùh¤uòPjè2Lóo´ÄSæP;›þIÏËê X&ü¨Î“¥Ë·d\\ù0‡ƒc¬aÔ97Ò‡äR8„!ÎZÇypàÁéHÌÅGd£fciªLÉÝBW©µc\n> bÒ 2R(ÿ¹5|gheŸSÆqMêˆRm²¹±ÖL€Î]Ü,Ö›\0¹ÎGioeÈb†üß\\FA–ªIhG0=ÿMhã4Nh#+uWæs‘.ƒd¼t\0ÅæTŒrWP 0§6¢Ö££‰À@å¢g¦ÈA¬Pîi×¤7>¸Öf=eé)J3&éËXc¼ Œ2f öƒf-öN£¦ÉžrñH`°­¤L§Äî‚YRn’0w¬5”cºzà7§œŸ¯5òÓÙúöºÜtq-0J¯MÙçòZÿÍŽ©Ÿiµ¡G¨æÌ¸¦ŸcÆÍRï6Mƒ¤AÛCª“9å¹›LÓÓÊ8>‚0Å| cRÊŒ‡|£”ÑvUØÒÛxÇ­ç w®nÞá•‚ÜÜq¶[ÒmV8/hýòR2—\$`ÛûC›.•ÓÖãPJæðTOY¤‹^>¨B\\JÙ\$Šîâ.:mSUÈÈóv¤¤–—´z¯Ð‹„Ã˜cCÄWpà[A´uâ’áï¸«Èsl@µ\r)qÉËjŒ1³§Ù\rK/ìöi/¡^Ôz˜a“{Ejj,~Ílâå©õBâ<JZ`yŸÌÜW4æ´Ô:’AïQŽÈØñg[Í^sd?¼%ÇœÍûSäª•ùn¢\\·¼ÕEÊ<¨w°CaœÎÆRxEò(„†À@œ:¯.æ{§BÔŸ{¦eÇïŸ\$:{à]NGù²nÒ¿ƒ\0V+±÷ŸLeìÁ8â09keÉŽZÊàø;‹º5ÀîèvKŸBý¯Íôø7á\\3ðqÝ–ËOÚQÇ@Oo†þoŒûŒTØâÿç¢ãÉ¶øèŠ†Ö(Úð‚àÞl´Že8z¤÷ÍÚ2`Îù@Ï`êÿ¤	†H6`€+dvïBÂ)‚ò\0P‹Cè£ lgÃ`t\0py€R`],Yå(Ï0LôÐ\$\"™käü¯Ðl­¾ÎÏÂ[G©-ÞóC‘	‡\$eÉ®ÍÏJf¯NéînákI	s¶ùÐˆoÉ\rï\rºýI¬ËOå\r¤©¤rÿpÓ0Ž û£Ò3-23\r¿FÒÌø•G•ŽÔà°ë\nm@êÌîÒ°ùïùî)ÈcQ<\$iÊœñBuŽŸ/jŸ…SDvÍ2³„ãìç±\"ÃÜ€ãjÈªrâD¿g¼|š‚B4C\$65Üç¬¥‘v|bØ\0B ¢!#&ktAãŒÍ|“ˆ\r˜”1·Ï|2¤0CD8½ Ù\nÆ®ÑÅb™qŠÄEj±gkƒÊÂNp-ñèçŒÐ?c qñ‚ÚñÜC‹F fÚ@ÌƒYQÈ à\r\0àè’\rñ½!ò+\"ñ‹\" ¾9r4C’#\"`Ê#Ò>%â\$±ÌâG\"ÒÑ%RO%²S#2eòF’JLãÉ%¬F\$˜É²@ÄÄrBÒxCMJ~*™`k(RˆJqž*Q¤¿Ò²Bòu%®r\r¢}ò·%Ý%ò+füîrp¸‹6ÈdJ<iÀg!`hæ³ fz’Ô }-•,ÊÔ£kî˜É™C›/#‘RØç1bçq®9\0?®PŠè_/ÒÜ=Òá.@wÉ\nqÎPI)\0\rrèÔ„˜0*FßŠJŸ¢ž¶xjàvw&wcò…G€ì#NR€êêB^³LÐ\" Ü\r(,ëÈòÍ³nC‹Ç7c'7ÈjB\"XSÌHÄÉä\râ7àät°ÂaF—0`i	Î.\$Ö&.ÚíîÊîC:íêìÄîÍ<®èçÓi=SÈ¹.ÒB³Æ5Ù>c˜þfõ®~5*N dP­ôåD^Ì¼\$DvC@u.îk t%r{2‹­‘–¢ dÀdLÅàeêZŽ…;³?1³AÓL‰BjgBª!C4]¬*l’\n#2H.—3t¼¬ÀqæA1\"ß2¤BÔYÌŒ¤ýFnØíÂ\\‰ÈtŒHz×C@X´ZfÆTbøÀb1†IHÂŒtœ!D÷J4¦a†g4±KTi4nEÔJ£ÊGÂÕK bj\0kHQ—CÅ;G.PT¦ºe<´ CRêgëðØè.ßP*pˆå@.j\r¨×ìYG„ÍEj ¢J)D•DQ#RøÉô\$­tS-êj9¨ã´uu\"ÚB™/µ)/çêÁU1;	—S‰q1òz±Ò€£ƒÍÑ *q§VK\nSëô¿‘€.c(+`zC†Zc~@º#YÀÃZ¤.ÀáZÒý?FJh~æ‡ƒ97\":+\$NsþGÍ(à•³Yè;ZSËZ »)U°‹1^•¢•½ZÕanš¬5™_µ·^¯¼‚õÁV5ÄPÉbyCtw9¢Ó]fË:k&EÀ]^4Ó[U¹a`é`TÚ=Ö\n¸Ož¢ÂÒ´¥Z_[`Òö@Œ( ‚+\"i?«ÏIüWŽƒgBŸ3G3ƒÿ3É4pÍCÃ0|/Ò0€DŠa(€E.Œ´<ú¨BÎ8!\\K/af'fb[f¢ˆ+vq4ÎÓ5ú\$\0ò»¥tŸÖ€q ÜßI‘6Ž9’5F°þ¯\n³ùd	iê`±V§òí\níZÚÃ'kVZcq¸ ¶\r¾ÀUZ LÕµ£_#”€Qr7'r DÒÑs RK÷9sÎ9t\0Lï—Iq–¸»V¿fVifÖÍ4°mâŸg–Úâ*Mgéöån“>jD¶ð\rÖ”:i{\nWjŽ²êd•V6—PÀIrÑÍs7\\Ö^ö6ÃvvÊ¤D³g7qmv{|öãhL¥n¶1q­S¶åy6™y€upWŸz%…zd½z·!rWSrÀÈ–@á{–Yu÷¿l\0ul@él‚µ|…mm}}w‚w×ns;}×‰Qýx÷éym½yª` ·ôO7ø@—ýz÷³t8 Ø\rkw½kÖavVÇv˜ %×Íw¸)mØu‚÷…h¸71—åo6—„Á~÷œw¡j—æ·ÿs÷-Xb…ö[vg|8k|vÏvøuwXymX}ƒ7‡nãóˆ—•p‘„`É„¬°ËXS€±Š2¤˜©e||X‹fI|ø½w˜Áwó7ƒ‡ƒXÉ~võˆÖj\0a„˜™z<É¬Ÿz÷TáFà7øë†\"¯v8±¸m“NWdç}8{Vƒ—ÛŒwáxØËy\0i‰w\r’k\n8BÓ\"™’—,€`Ò:¦Åy3k¹7Šøó‹8÷vØû‹¹G‚·Õ”×ƒŒXøÍ~¸C\"üXØêØÝ\nðM—XŸ€7CtuÁn84Ù#îSY@€bÅ–¤½Neo‰°^‹ ¹ƒ¦•49™1Ó	¿œ7){Sï{–JLŠ±™Üy¹à@“øÀUWõu24á:é“;0ÒùÁ—™Ç ¶€ù4%Ù9˜ù=‹Y•”6w™¸¾U8Ã¹T>x„—«‘XDÇ›xN·ODÄVš!Z£—Dò\"+˜x­Öo¤öÓ”I'”™q}–‰nÙWƒ¹[ƒùa‘€Êq›¹op7ŽWrãîZ Â5:8i¤¹“|¸%ÚUYš©Ú¯D9ˆº¶×ó‘÷úz…±—xáuWY£øa˜šE˜Ú““ú™‚xÿ‚Úí•«}úa~:e•Úù§øÓ¦ÀË«øšÛš¬x¡t1Ž›ŠºÙ“º•vºá‹–Õ²9ŸªY‡ú­²ùY¯xÏ³™b k´luoºÙ¬Á{»P[Z—µù—¶:ç²[i”ûm²×‹«ušØ– q›Já’ý*¤8! Û\0Û\$¢O¼²x%Ð8rK#Ò[*èÄrK*ûÏ¾r%#£ÿ\$©I¿\0Ë¿@æûâ‘âêq{»*Ò%¾Ò&?àïÁ\0¾³	iC¥8o•BŠ<Ü,\0Œ©1¿*òiü;#\0ê\rûùÁ’o\$²W,QÏÄòj;ƒ&YògÄ<PòoÀG¾ÖûÁ\"ï%j¥Ü3ÃRÃœBàìFœÈ¯£ÆÉ‘g®†¼\$v é7Ã{ï#œ‘Á’WÊ¼ƒ¾ü™¶XuÇ2®ŠlN4áìÙV<rZ\0Ï}ÄÂÍÉKãî’)ÆR[Î¼åË‘‹Ï\\UÎœâ+Üù8œãÈ ÙTsVœ+ÂÀŒ¼¼ØéIÎì®=ÎÜ?Ï¼ãÒÒÏÒcÒý%Î};Ð£5'‚}Ô2²!œ'T£ÝÃ=`Ü¢šèA\$ ð\r±ÏÍ›¿Ï\"ÖÝq%]{×*×}…Î](â!é7êOØ½3ÐœíÏýGÎÝ‘è,G•ÒýE?Úý³Ö{ö\r`Ê;üýÄ|ò[Ùà[Ü=ÇÐrL\rý¬Ä¿Ç;ö{çmÍ[ß¾ñÍÝÜ…Åü»\"}÷ß2'Ú\\\ràÆ7ýùÊüñÊÞ\rÅŠíà\\]Á€àþáœïßÞ\nþ'â½ÿâ>!+Þ9ã=Õ*þ@½Þà}?ã¤ e§äþ/ÁžWå¾!Çš+ÂÀ…æýC’³âÞw!òÃ%¾KþÉ^âòƒ(r‹Ç+G¼ÀÙ)j=!2!²\n)w[ÍbÌNÄ=gßr¹²S1»ÅcÑì|7âžMëä9è>Í!þcRQ¦Õ¾©±ëÒ½~!ä<¥\"r+í¾3ï\\uå\0ßî»™¥ŸÍhAïÝ¡ñ]ßñžûí_Åßß¿'¾òn^¨SúfSã€žb| QâZ	ÑÒ+¬H¿ è\nn‚+ª`\$ò{)# –ãÒ¼Úã‡_5³[v:ÿ:{ÿ>%ŸB€ÿGô¯\rõUwX7]êgY\0cš");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
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
as$y=>$Kf){if(isset($Pd[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($Pd[$y])){$ca=$y;break;}}}$wh=&$_SESSION["translations"];if($_SESSION["translations_version"]!=284803914){$wh=array();$_SESSION["translations_version"]=284803914;}function
get_translations($Od){switch($Od){case"en":$g="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦«ÁËžN›t¼Å~9‚ˆ™ÈöBØ­8¦:-pÎüˆKXÂ9,¢pÊ:ë8Öã(ß\0À‹(˜ž½­@ò¨¬-BüÆŽN’üŠ@.£®9Â#Èý3ˆ«®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FëÒÄ‹À1ò€C@Þÿ£C«°)Š0Û:Ò9(Æ¦³k‹Q%è<:ÊèKN Œèä2c(îL“3B‹4ðtº¼D!*B1,è;Ã:üŠr¬®Ã¨Ý+¼«äØ3ŒèÎÎQ11\0Sz<ŽïÔ,ëÈÈ¤Œqêï9ikl*8±üz3»óe×Ðƒªe7§˜ÆÞµˆ@×\r±ÛY6¬Âö1 2*ò7¾qÀæÓM“*üK1“§6Ùõ³ÁBþ ô¢Â0ÆˆÅÛ¶½À(2L£è\$¬Tè\"…Ým¶åÄ‹VÆéŠvõ°¾¢ôË±4îÃ0Øµ´n\\l‚¯\" ÞWÃÊ6¾Læ9ŒÕ”8c/\$TzÖßÉúB6¶R˜‰b”¾.„xÖ9HG‹:O“Ï™`Ý`©)Bö;8ZB!ŠbŒËã\\z|ï C2Î˜g«ZQŒø‚Œ©9¸Ù*ctKÖ8\r(É‘#·«±œå:èÜ”%QÎ8EqjB§í›v¨\$cB3¡Ð:ƒ€æáxïÉ…É„¿Ë8ÎÇ¼ãÅŽtH^4#“*:q\"ú,Þa}vn60xŒ!ò~ŸI2^¡\$:“~¦¾c•}ªQÒ×ìc…äá%ÊŒúÚ\"“€È”0./AH­î @î²ï“å³© \$\n[ÇÐ¼Á\0P )‘i	3E£\rÚF•]íÞ Ó¤°ÉRXK‰ƒC\r§Ý3½Æ’LÉ©\$\r' 2âž¨I©5j‡U¹Å¶ÎÁè/D@‚bîHJYM/­\\Ï“âM›ÎÆ˜ÈåÓ;Xe!Œƒ¾há•%Á>–@xS\n‹Aµ@¤MSž(ÈÅí¦rÖ± «Ý I×âJsƒ’yÜ€¨ƒJ*»7¦dEC;UWDÜ2F‚£å?Æývœ\"ðI!aDnaBpÊZYKRCà(×(´ŽxNT(@‚(\n‘ €\"P˜d‚Ù\rá°—²”PiÂ‚(agÉð’4Uj´'–5~N8f*È¦¿cg&•ëÄM’RRÍQ—æ¨£‡tqÃlÀ4í¤†’B¾‘™(?k‰“ãjº=Z\råA\$DÀRÂ1_fz-Ãˆ—fÓ]½›#ô8‚²iÁ@è“ˆa>D 7§n÷Luá¢¾GÌõÞA@aÊ2yýB¢<+)*T!É°Ù!å9¢Pêr!pàÑ&úV|'ên§ë3I\nÖ[ä +@´Ö\rš“µµ>¢Ô‰Æ°§Ÿ@¦AC’¡£.™¬ÔÍ.É´~\0‚AJrÑC‘ù…Çþ§™TJÒ<GÌ,7!0ž°hùyÍlÎ\0 ¤Äaù¦4ØKb¶VÙ;%ù6@¨BH ¿@²|ÁÎL{êvoPä`éÝ{6h0†^,i‚0‰ì˜3\n‚‹bÔô1´BBÂ[\"O–X‘0šE€M™/ÖnœY×Â-¢²¦¿Úd¯7Œ\n¼WÐ5ÝÙÆˆJå|d–ú×Ú\0]e,U}2×Üeßkie…6Ë’ˆNäeE÷\\]’?o,wYoH¡Ç“‚‰\0PW¡Šó¬øØíë2†Ká¬‡¶ÊKõˆKfû†Ë7aË9ù	p³–P†u‘)vŽð½Ò`bÉôÙe*|äÍà“ƒŒQ×yóhŽ%œ-ƒ’>Ãl¤àçÃÍÂ!–mI¸|ÞN«“Í7©†3ÄXIü/\\OŒ‰Ä¦Ul0ýYe-CI…(¨¿—†Ôž2a±6'›(äç‘)§Œœ]tòœMcMZN7Æ4Ø§‚	P|é”}D]ðR[¥§škHc¼Y„ñ|ÞÎscÂ'ñŽ{\\™ÚmEù gƒÃXó0—é½9k”é@KùÂè¼ï6ÖF04šS>é}\r×êæÓ³kF¸%³ƒ+:ÁašŽÀrkl¬’]6Û€Rl^Ö„Õ¤ËW²­cmC5§Æ5Œ€Ô¹«4ÄÝØu(3ÈÊÅµÖ6ÑÛ/bìÚ™³öFŸ›Ôü„ªVÐ[§WrnN»„œSf¼J ùÆ\"â|ÙX}ï4¦ŸsVÊ)½÷ŠN—qH]Ë·ÌFÑÊ­‘¹ÏZ({3gZaQ\nj÷œ†-&9y¸éš8¥©«djY½ÆÒîÑÅÚgÒí³\\t(M¹wÖÍÑ¥±nyÆ5­âqÕ©¹¢>Ú;kÓ¢Ë«†>6 ²òUÿ4±>Ñã’ÚŒ‰Iuš´kžaž9&1Öú¯hñîµÕs¯WÇº”sæ:¡òš8çÆFvD…7¤Ê†Uèã¸¨C\"b¬È<„²’Éš\r|à›#‘ì¤©à¶÷;åÇÀ›?×y¼ÞçÅ÷ÄNNUå<uBÌý‡ó³åO'è\\÷›îÿ-Ð½5N-5[Âs(wUVÌ^¿ÕûÅÏ;/¥@žÕ÷_wT%9-4üä¼žÿmçzÇ†DÉŸÙm2Qñ¾g·ñd \$sÀ‹úÙÄB‘dØw°ìÔM:|í“·h†²LEÞÈüm”Ënœkùµæ1ÀçnÈ²r2\\KhKüÿ×uÝhµøN€ÚËÉ°ÒífØ+nþD\r€V†€Ò`ÖßBF–Â0b„–\r ÌbÂð=\"pÞ‡že	\n€Œ p)Åä¸fä.Ä%§Á\0W\0‚Ç\\°Œb\"lR3\0¤MöâI~.ð2ïj.í#ò6¯Š;ŒÊºwi“,†éôÉF”#¢¢â¢aÂ@70°ehüÝ¥ÀS)6 B!ÊÈÚËìxKåìÍLj™#Æ,r.l3\0­\nYJ5°fÒï\nÓPÛŒjY\0£ôžŽ\0M+.P%& ŽþÊ4]äÈŒæ\0˜•e*Ì€ñÑ0\\(Þ #N¬ë.%DÌf'bBä	à+:%é\$•ÆX'dØ-€ó@†< ïfømªœîCø˜p*{måÉÇ	4åDw©›VMDDò¥\0[Îò_\0‚)¢Ô­ƒ.øK\" ZGbLÙF*K‘ÑÀ\rÜÇ‘ÆÀ";break;case"ar":$g="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸ŽÊÚV¨?\$W¡‰¡FÃÂE{ü‡-‰:>W9ÏJ|Á¨eRhY¨+dxB&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4S!ÄÀËdPB¾ñä=ÈtO¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0’6Ž\rxÚ2Ã¢–ÙÒíèÞ26°æÒŠbˆ˜4·jzBX›´m\$*³Ó!0õe\\ê0É9ª•[«P(%WVÏ±eW°4€•1¥ª¬›ºÈ’-PI\n?Z-2÷<¤‘|P¬®6*p–£åÊi^¦ÅZÔ=\$R®ˆÏV-YmÉì†lOd½•6!¬^RÚcÎÃ¨Ø66Ž^ŒcÝ0¤êsR‰–)ek/ÈJ]9J¨òÔ‡©£ŒðX³¥)2¤ÖêO\nö„å.²6!°1o~±lkÌÈ¦ÖxþhEºµÅ™}˜ÖSã¨ÆBñYâ—¦\ri!Öun›\$Žó¯ìE8å°<íXO7½±5h¶*m­ÅÃè6Ló@0ŽM(Þ3Ãc¶2°¯Âµ`º4Ü›B ÞÔ\r¸ò£pæ:Œcd9ŒØP@6\rã;¶9… åÇŒ#8Âí„@KP\r®ØêÝ…˜R§¤èidb˜¤# Š¢>’¨Ž¡ZgÅ®­¯zãWÇØòÍsn_ðÊ3\nœÑoÂ¤‹äîÆ¯«g‡ž¡Ù„Ù\n lŠ¹\r£Õ©q‚Es¢õÁPÝFYI˜šC™»F¦\00îÃ’ ¡à8–ò <&…¼†`zƒ@tÀ9ƒ ^Ã¼!Á„2:ÐÜC.œ©ˆZ\rÛ’\r!¼7ðDÃC‘±\\/œ6\$Á>RjT2©u2xaÊl)ÐÐ§ÕM!¬ÒªƒS\nl'S*¨º‘*JOÚÁ1©i¾’äòˆJ?ˆDÈ\n÷zUI*C¥m~5‹U™©\rÁâ‘3ö`ÈkgwÅZ9¢²J{LmJ½þ(èÞïÈ\"ÎPdØT“6>ÇL3á+ll…F]Ž¡(e£Ÿ#–”ÔsÄŽi¨2Or›&a\$“> iTM*0Ü¨\ré¿\rä8‡Sd¦ƒ0r\rá´Jßà½S\0€1¹ÅFm\rñ³•ÀÕ˜Ïâ@'…0¨BÈ‹1UœÀT”Ó½/iLŸñjA	²ãx§îp<÷ÐCÎ|ðNëá©'R”Î¼‰„¡v V¤ÕäëË\n (ÙnÄCsR¡¾&ƒHg`c\\iMlÁP(Qé~êT¤SQZdÌ²7\n\r\$)=§\nQZý\nÑf)A«–<GÅ@\n	á8P Tµ*¦@Š-RL/aAŸ²[!êÚcC@·GüAÑ/_ÍŽ‡-Ê ‚ eÁ……) ìCdÆe1tA¡lP	Kg¨¨»V‰èBÉñr~¤¸D¢¤Íå2+G‚Å\"SàË›fUò)™ÉÙð\$‘A’]1“a`KìzàE–mX¶¤.HtqdºÁ8ÕyåJ¯ÂÌÐfÐÌ£ÊÐn	.Ì2ÓØ)-R5ÖWn	²ƒ¨„¸„ôŠ` Q1f>õú÷N¸‚<w5£iÇEÚöLiùí(\"ƒ#^Ú½GÄä¦6å¢º­G^· 60¦CÐeAe‡_€‚˜e5áŒÝ†FLH‰DÞh²=gÚäøÕªÄ¸K(šUèéYÈh¤Hõ½_¬tÈ61Ä•à‘4à‰:(,Õ`(v	_ÉÝ*ä¤Ì“Z€N*\":‹å™¡%iì/È‘´š5uzÑÆ9NÈ\nÄ^QHùôºeÉÃ­¶Ô‹Ñ[o2¨þOÅ\r?²;>¹DÁ„ÁTB Aa LXPM•o&˜7ËÓn)e‚	1!Åë`ÎÅG¡ª\ræŸ¦,˜X àiÔÞÎñy{½u ”žñ`óŽ/1Ðé“(’»ï2¢å%L™ycÈuŽeÀ›lAêÓ…TXZC*ˆl¡Óè;PÍôRÖ¢I!„š‚àóµýØZOÄu6ÊZ‰ëì\rx•;­SS(;‘Ç»,É>Æ{œ•3„5plù01åPBIb[w”]ÍÔïuP½îA7Ò_M†¤XâS°ëEJ)¡½¥>£gmålUð¾(ÎP¸ CV©wÛ(bÝb£ª+¦ñïd¸•Â!…v²ô×´ènO,ÒI¯¹cú('í€ó{Ô‚±vUUüñà‹qi‰úƒY2§Ÿó›Ü\\ºY„é­yŸžƒ©Ôw­aY\r‰CâÂl®«=«Œ[ÒØ-’-;(i‰ïÚ­.¯ª+,G”&Ü_:Å®»Y‰L“±w¾cÓž.)çÕ ¬¢<Yà±}]±¸JÖ@J/îÝ7¤pëgf™…­³¶’°BB—™z~C\$};SÆ“mK•·Bœãªf»‹m-ció}4ý3bëüÃKóJÌ§úÞCåí÷ªf›Aó7ŠÑ}fjlŸä{EË[eßö½Gë•Ótjóí\0êeÓ!§Uú«LO³«öF¾²Ôý2|{û5MAmãÚã^ž†{+âüÉ<|›tùnÿ,|”/ø#Âž±b·ÌXkI@D0Æ+P#âúè ã*Wc»Í”8áf`Dt\"«p*}ã, \r\n~cøñ\r]Âæ«Ïr%Ð áÐ¶ÏvœLNU‚úŒ'£D=+¼/pMŠ¾ÆÌÞÏÜ2ØEl€m^ëŠ?.6ÆLhQJüÉ&ÎÃÉ&/œeO .E†ÏÔL¯àçbÛN¦ùO¸«°Î÷°ÔêÐÂçïÖUìÄoèùîtÂäÐÒÿðÖ´Pöp0¼{pê|†¾û‘\nyz\"n0kªÐ|æM%–dãXCÕ‚kÇÌúïˆò¥^ûÃ®Ðïnž{¢²ËÑE±êÉ\\+qQOl‘Ž#\n°¾yújã%ÐüêÃ(\$Œ÷Ï¸`‘núïÝ®kdŒïñ<:„~?|ÿÑVUñ›­`øêÄÅqŸ‡·M_Îª ‘¼WÑ”ÂhCBð±¡\$°DQ`þÂ\"U]EÍ±ÌUì–KÑG,†^á_l×ì‹ìMf±­!øCpøi'o),NÍ¤¿±á\"¤ÌÍÒ\0Õ\"ÂzïR*¥ù§mn²ŠûÃç‰>Uñ„ìÃ\"¸.ãÎþ1‹Â°6/'V’Ëª@­*áìN\\jÓÒrÇ,:@ñ1îYÎ:?í\\z\"’ý,€ä\r€Vš Ò`Öh£À@®êò7‡SàÒÇUfÊN‰ ê€ @Hª£ ª\n€Œ p0rÌ;ŽpÑ©VKÍ‘MW‚ªö¢FÕ‹`^„bëe¾1@›,ÒÐÃ¦,diåj¥˜'±>2ž\0DéÈn=PðöçÎ´áMŽú>¢ž(¢R’ŒÀ­¢Ú>À˜£‰r;Á6ÈšJ7#‚Dô/¯J^\rÓ‚re†vðÂ‚£êM °Ðò¿“šë3Ÿ'ähêä&²&øÓ±®˜\n†Ï#D4’â©¦\ràà€Òu¬Ðsº¿«!°ÁÌ4]°â²„éS²­Ž¼{¡&þâ\$%ü[T)ôð,FCþ	)“g6.ÞNþ€@Ò¯\0Ð@@\nÌðà\nÀÂ`ê Ú¾Îç\$æH‹¤€8âl`G:P”l“’±Ë%‚Œ æÊø0nŸî>\$ë:W:Ìo#t4§BÔ1=²ÃC¤_«çEpŠNrH]eÜá‡Ð?ŒÄEÀ	\0t	 š@¦\n`";break;case"bg":$g="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß.-Òä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi2=é^ËÁ¨¬ÄÂ9-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKm\r%2!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0P’6Ž`Ê6Œ£pè-Áx:\rxÈƒx@:Žc(@)Š\"`Ò:«&ä¦,´(à,ªãô”Ôå\r*Á©úÊ£äú]>8k#Á5«¨{ótÝmÛKw,‘í.òÐÅƒD¯Kb¾¬O±qŒXôºÒ‰!.ÕajÝÒ¯[0½i7.Lþ%åÅE0ŠDž“)ËÞhTjH¬VªË¶‰4ªF@Ù¸((@6®ž[Â5[’Z4‹êT¶/ÎŒKÀMêÄW&¦èkud\njTŸ-ë½»Ñmòñ<ÏV€˜†Æ\"Rý#äƒ¶ŠO“\")93	ôŸ\"µs:£‹æ±6µ‹T¸Ã­=×¥;{]÷v!ÛÜ\rOupååÛQß(•W‚nTýÅ2öþùnëRÀçÑœ»‰Ða\\dËR;Ü{¦îÃJ\\L„\"hü-¥ÊÝ¦OÍÂü÷¯4ûòó£ü[¬†Ûõ5€t\\Åý+oñO~\rƒ äÜ¥òDX†³j!«Œ ©çÎ?\r¥)‘Ö®Ó;LòVœ¤zÊLª¥ß¹Â6®­FÁ|¥¤FW™âEil–v°ÀÎ:Àa%‰r¶€J’8ÌUy7WØWŸqy~(!ú“í\0Áq„5þ*Çþr`	A{h ýÀx*- Q\r‚ô‘·3˜X!åTŒ°Ÿ#‚~½Né}mÔG@\\CV¹%7Y?ø>@Ì¹”s14½:nÒz!åAîƒ´MÅóâBðéÁœPûËÑ~DœÌ“[+e±52L^ø;†HBHŽú33	À¸§§¾a	ã«\$ÄÍÃ½øü‘ŽûÀ+ä—›2yÁàa 9PÌAhÐ80tÁxw•@¸0†@ÚCpe@¸7‡ ÎÕì¸P70ÒÃp/K 0Ë`Ê%\0_A°0†àÖðÐ|j\\ªŸ„XxaË\09Ç¸šÏßûÇu„øG­Ø”mÚŒ+vi4Í¯r²µ•aÇvŒ;­—VåKû<.ÐÒš£ºòz6åNkyÞpŽq§ eY)fxÍI	m(È¼=fÐ€ÐNímí…\0©–¡ˆå–G@\np)/1Ñ—/ÄæJ¡¼“})N@T®¥’ÊŠD-d˜Á÷“‹‰F?e%µ5cüCEŠõ4Ùº´[©‘¬ Ï„†”dOLx¥ÄŠ#öÚo_zÜdÑ9•jjÏ\n¢ƒçXî5£¤¥…¸ 2ºXK)ÂæcT{kèËŸfLÎ›…CQF³)—ìI\nåPoðT§G·Úúéú;ˆé¨¨œú›\nñªyÎ¢ÈÂZ@Ï+v9Må#½µ‚`â“{.ªÍ2ãÑ@)!0¬çv •äï(‰BsØš¥£¾û­YaYëD³—BÖM5qÁRB#ôC`É/vLÝœ™XVŒÝ\rQåAkkRj)ém&Í¦Õ²ùàüR]“¹ç¹E©/oŽÄï®æÒCÎL‰bSHÓ<§…\\Qª})>a ž”ó˜,j|OD£úò×p	’˜\nmSRíq‰¢¼Áa¡[!	¼ìƒ;¯ô.6Fø¾¾w0“\rCŸeÏ¸ªbëûXñ‘ Jˆ„Aãcžè¯šj¦EFIeFñ•ÅP­«|‹rUHh*®Ý)ebªïÑ¯°j]ºŒã]kË\$)´®eûr¸0ƒøI\$Á¬Võ(k£ƒ‚NEõC¦¢ÇëíƒÉ¹`œ§hÖOð:›™¸¬W=Hš7¡¯©©MÂ>ÒJÃ\"ˆNå?Ó‹<C´n#ø4ì°\nÚ×Hþgú.ó)ö’T[	æyx\"C5>øÓ9î¸9iÔ“n/qòdUyä3V©«Í8‘ˆË™è_£ÍKÃSúˆ¯ß^ÚÚQI|÷­Äª<Í-–€°q3³Ä241`{MÄÌHêq99u*ï‘KÎÊ™žš¯-1âVöäñMñ3¤‰H­|òä×vì°­i¢§Qëµ.LÜâp«Üfó„ò\\ø@ÞS–æ F‚cÌ9ÉÞ9ÜLï÷Z”Ò¥ƒ‹n B T!\$\0âei³vb¬àÜÕøs¡À8KU¨\$-z%f?¢gk'³aÀ€‚OË\rXç¶ dÉÒÉ\\³õ•ª“’²ˆú_T¥•±¬•ƒ=~ ‡Vèì‡¬ÒÈ¡ºéÀëðÇª4t¨û!`ìîg%Ð‡OXQ¼:÷¿Ü¨yDén«¬u¯\nK{‹ê==K£VÚ{ÊçoòFlO\r3Û5wIL:ê›b¥èkIŸšrÑ„ÔÕî¢Iš·ÈÏé½yjîÝŒÔØ\nKtÙx/wiFç…€áá?¸Ú:þXO#ItiàùIq³cç­ÎüRƒä‚ðE6¶Ÿ±š°ª?¹)ê,#â•z«ðWOöÛ·¸áéŠë-—û¥— \"j¼! BÈ*ÄV³JëhìP.0tdu\0¨ØFE.‹äu[ææÏª’‹l¨Ç\$dbË.úe\r’_†ÆŽi©\0íá¬°ë\"âÔåö°+_\"®ÍÆâ¤ªJ=-Õ\r•p\r¯†w¢pÛ	.¾òxPLO’¬gœQŒ\$Â…(I«Ò}füÃ%D§/öà¥´Û´ÝB³P„K‡–BúôÌ5‡4Œï`Â£jCOÚ-\0…p6tLªÃçÔú¢’§PÚðàÙd@+ÂÈ	äë¤îÁa`0Œ#ìšuPPÊ0hû#ŒÇðZ=˜TPgÐ,)PnçEAÇW\"»0„*0ˆ°QB[Q.qÈE*ž^¬@òHÜ7Ž<µFºËÑ,Ìç”ã„ÇðQWB²G±jtÑ€ÈñK1n‡jy‘í±,éžöD†+­A(;‚^ýën]ëÔPÃò\$c*ì¦RÈ`;îòìÑ‹h\"T1ºÍË@¶Ï%ÑÈâB¡ TPó*ì¢»KºRÍÚõqƒ©ÏÂgqŒÆÒé1•rî½¬æ,#Q…ñ1@ÙÞGhV¾àÛ¤0LÎ\"¸í*8iüÉ#Nk#®¢¦Œ4d&ÈüJdF\\iú7ËrDƒžDÞÒ#è]ëï=ÛÄœoHHƒxoR§Ñ]kÜ+6yð`Õ%û)G0ÛÍÈrKØÜçÝ%¹(ÐþÙÇžšmŒÅlË!KÔ¿².óÒÚhÒß\"‹ŽÐËrë)Ò:Íq›‘jsðõ¯2BòúU§˜dJjOoq†×QÞ¦>ÃjÎ›ê‘.eèÛ2³«‡×/ñm#çÔø2Ú…ñ&.*„&¥2±›0ÑM3ê ö‡Ò3! C¦#reczÎD‘g\"H…îŒ;e ¡Œ‚áñòh'Ó4ÊÓ\$Ë1A9N#9Ž.ðU\"²äñU:ƒeÒ9s4s ¬>rb¸_!cKd?®0áíÊr…Gs«<žã³\nä¥=džceþ3å¶¾³æ]s—>Î\nÐ£D,Ddíük(^hã¡PØOò/#:0\\bc7BVÌŠt3\nÿBðU#Å¿\$	áC¨Jˆ‚S&­C¤%Dk;Qg<²Ã=CET#D]DF™@3_?N\n4WBTCB§°¦“±Fgæ%ÒônPóIS3tMp+FëØu¢ÀÓðwÑr]ô·1FR!-öÞt—RtRöÞÈ+´ÍJs³.4j!P^Þ-ù\"tK<tOJóO>3Òx4ìš³]?4¾kõÄeQC&jw“eC‹â+JKƒIN™C2ôSQó-EÕ'2i3‡ÃQÎGR\r.‹U(:4«ø¨ØÃq4ô9¯‚Ð	Í>@¡<‹Ò7>‚ÿTñ½(‚îk.Ðò’+‹ÊP9@¥,fBI BÙ¨<÷Îžÿ¦èFmYÆ²¾oL^`Õ .õS[Ó·\0¬¦ïÑ\\u g¬\r€V/£¦&,d`,ó\rp£F\"d®ìÀœm;k<HPq'©ÿ)Ä\0ª\n€Œ pˆmF¼®ÙNÃUÂô‡fgôT¨!b²ÝYPé(scMkjbƒtš~°¨bÃHGƒ°dl”û,P¾íCÖQ9FæNê¨sÜ?ïšzPBˆ: Eg³ÚŽ)†„tiGÞÉDY®F£‡ˆw4<hÆXUÄìÿZ>6¶§ïøoÄŠLì¡*£&‰du®.´pbÕLŸd:MiøqŠmÒ¹=Ë1vç/\"þQK%o\r•n#Ç]\"¸m/®p0G+wW\r25/ZI“p–øThP¬è¯«qvanšíóyfS8ò,åÝÕí	Éå=ÅtŒìÚ¬ÀÍ]vl4Ñ\rm¡(’dQÀË€}rÄÏ4Ã”UÈXÆëð³Z+ò\$…<¦•\\c%¦çw„/zæjmÃ@Œ–J@³álbÝè’µ6&Ûv87ÉQOéKæžFpIã=-ñYˆ<×,`0/êÙ—tºãõ]E^²³@‡…áz/¿8t>Å”{B¬ÄMö¯êS‹Oo~„•#ã€";break;case"bn":$g="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊS·2bÙ!¯«|–Æð;I7ÅÒäŠë#´Û=ÀÐõMó“TŒRí/Ô\rÒž®­ÓY'ERj!*§¹ôâØƒÅ5eO¯;w4ÓÓ…‚Á°³’ÜWFóò‰,ÏÊ}!ITdÿX/‚Z¶*5¹O5ÚSyB§”+eÉQ„âŸ’ô1QT0¥*«qÈÈuáyBHÚ8=ÃhÊ7‹‹å?ƒxÈù¾£›È)Š\"`Òý@–íN16†Â·+Â.ÚP§Þ%1A8ÔcIËÁSMî\"ñ)Eô/‘)öt9`ÑT?o¸¹¢KYÈªöARXð]ñRYš)áyÛµ8!.£RjsT\nÐ@åÎ‰*kf?yÊŽ,:ÌÙò®ÉíºðOÇôMƒ`/jM¬2Ý¯kô—£é¥5ìâÖ–°¼+¹ÝU”Ö…7µkÁqT	Û‘8¶ð”¸ ‰DÍäÂˆÑq{•En@Œ:ƒcç\0½É\0Æ0ÑŽ\"ÍÉñ_[\$éõKtñTðµùK\n«Øe6ð—òöT!áÂ›±Mt¸·\\÷væ‚ì÷óMºn>&wÓûJkœ83zkñÄŒ1OÏÃ>B˜]RØÎ-Ë‡Úa_{–Y&¥ÓÒ0•Ÿé·rj`‚ÂúQOMie@ç@³YÉ·7+ž'æè²i}]ýWø“q­ã¬x ÇQ*ó\rÐ9\0£ºwÃr<¼3`Ø+_b˜–\ne#B o<áµÚ@Cps¡Œ1Ÿæ` \r¼3£@æ˜r‰Á„3†h#;VµSô\n˜)b¥mí¿ANS\nAK7óZ[ˆM,Ð\\ƒ¶¤Ž_)xdè¼p(8‡b;œmLÄÞ¦öÒãÙÒ;j ·'WmÖÙ -Ï â&£¹AW\n0£¸À@\",0&Ëè€2Y\0ÍÈQ%8&†æ~ƒ‘è—ÁÌ;†ðäÂÃ(x¦@\\àa<è3ÐD tÌð^ç\0.!’6àÊtÆà½ÎÀð~¢ˆi\rá¸‚'^€tšÁ};@Öòþ`•0@xÃ>`Ñ¬2°–}#Xa\rg‘‰ž‰Ï'3b¦N²‚¢° ƒƒm%F\nu.d°gr/›%t™D(…FL”©<Ê©'Lüê\02^¥‘QÁJhmé±€ÈÈ”z@×\"-^òJœ—•g’‹=fHq=¨ ºTt+©DÐD±Ë+eƒ…™¦yayly‹¬ U4èßŒt K’ÈWîße©·•§lÀ¢6Œ¼\\‚|[âé¦órVSºìy&EåÚÿ.¤iN	\$|<à@K<Ì‡êO”:!Ôø°PÌƒxmrD	‚ qm‡;Q0ƒSiD 3·°/\0P	áL*ç°ÛÊ¬‚&P•›Wg¨F !—d€GGÇhZ€)Ec²UËGZ9J…ÅÈÉ×ŽkœéD®wm‘Ã{tí\"{\0\róŒM ÄC8 b0cÚydÒÁR ;FWüÆ`´V×ÛA9Ïè.Î‚[¦ç| ±aäHè]ÖQN\"éQ‚|§Ö+ÈÆ,Ä\nþP1•ºj+Â±[¸Å\\­¬lA ÉÅ-Â¨§¹é)œÅ­´\0 ˆC0auŒ;Ùkm†0µí<ŠgHô›áaI­’#4(ZÓ{ƒ“î¢W±`Ñ;•Ä^À'Ò[*©]Ëhç%ŠcˆTV’e­žÜ÷1	¹ÏPz­h…ÚÖÛZ|!É@€X9£=ÕÉ‰àÊÃ¢î¢ì¬fõØæÄÊ[ø8ðz]b÷²þôIƒÏÑ!ÂR•ì[Œ£†YR±3›Ð&´Hé·Âª“ÕÐ8°,S-LŽTN¡rL0'z}P+r	MõFT›¥\\±“Kä:³ÕŽFÏ•ŠYzÃ:Ä5ÏT!DR„I2(sgˆÅ6Ms\n2\r½\r‰câ1\r!è2€ ‡lC„nà¡L2žàÆ~ƒ#mhÚY*iT)£¡œŽÙ¢\0†éfYjÁ0g~@}ë¦rí@ùÓ9oöÙÊŠqÒM½Ö€Ìß\0R\"œG%ßuòW3{Üána´1‡vÔ!9Y…l>§@âšÕ‰X7›>o·yTšHé…¿Tt÷Ãš¥\\!XÏÖù!¡ÌÂQÆM\"JÒÝ–SÒj#+—pg¤DM}×c]=^ôV¿\\:Úö¿[è‚T\n!„€Ajç8i>7öPßi°pÂA–gS·u²2ö=ÎPx¤@m	!¤× @¼5« EûUjúÓ3_¶¼þ9\\½(ás{âÑäÅ‚(ûWÙ«“tÜz–Îí—jÅ;²Ý`ìÈ	w;™Þ{¾mŸ‘(ø:zWŠ¬NÇØù:Á`Ö7õ>~Ÿ62O¡ûþœ‚ö“6\røéêL{H–?ªÅ;»púŽÜúÄ\n,äNùGøúãˆÏO´ý\r*(ïdÀGnúgw\0(@æfº:°€Íô¯Øhø“Dngï°{æŽÖæFbHØ`«`âBl¦²g¬P/BÂÝíâÈCxˆ†€Ä\"dþÁLiN:êGŠË~êSORPoh¨P4þ\"\0bâÜâž«¨4@¥Ê0¯”[e\n/%`Î\"cåŠ-„`h¥VhÄÖü#0-È!Ð +ð8S¤z)éNJ#&¬‚ØƒÃTðÎîOŽ¾&U…¬SåŽO®}\nÂFðä\n&¦zßïÚ8Å¹O–iDÖ7'Õäâd¦Þ.-ï¶ý%ýmûíÌiŒÚ—/PÅ#n’MSÐBúq(gq.—0,ÒK¬ô&þÌjPÓQ?±Bä‚ÝfzÒ‰4ÒðØ~1	/Ö“1‰³0Ñ^ýQ„gh8ðh_1¦•O	6ßq†Æ|;.S>I¥ŽÌ‡°Xð2U/äpŒp[%š#ÐªO€B¬Ç)Ep®ÐåŽßPKí )*Ü¹î>VøkÎ`Ø.d’p.èO}k±¼“1`ýcådŒÿÇ˜5g­…~\0Q¶t'F&¾ÆîüÙBð„âß\$¢â‘91]ñ˜.ÿ&-Æ­WËÒÆˆDA’0ù²5Ò^Ðò|{†‹%-lnQ©'R7'’`ÔD™M\"ñ»)…2–Ñ²šÔrž„RãÇãÒl3RqC’¿,ìã¦æ~-fö²ºüòÞQqA.G…GÉ\"’ýÇã²ÜÓ²úä@î…\r.»²ókø…-å”öMí6©­rnP¨’¼ûƒ¶úD1ÑÖBæ{0Ò3.3) ^ö²O\"Dù3Äq“>ü³W4Síçñ¸…q4Î²Øz§)2Á7ŠoÏy8hP5SC1%,ózéÌãHA(ïÏ*’”ÎÈ¦eF7!2²±k5hÎªd-­]&ÈPÁU\rÂØ&¯H•G¶é_,L<Äã=ŠXs×\r,Ñ#Ó®Û3Ä!Ó{sª¦pzºlVë.thpjÐ²Ç>gâ–,Hw‚:l8ë³®È3ËhûfyjLTˆ ¯lÉ\$“þëQtÌLJÙ¦]+N‰+’‹'3.D²Xæ^+òks†ÞÔy.3wGîu;\r21«8ô”ˆÔ˜Ö±\$-Îðí³ûHQÁ‰73¤ýt¬©õG	9ò¥KÑÁ7tÂÛ´Ç,´›Gs‹IôÎó«r-0®¼îôÅNÇå*%§@ií 8«²¯a~Ç¥Fù\n0F-•>Åo/t%¥¶éd‚„(ýèFî2\0eÕH„«TŸ.U= ª<÷³O4ÌþÑ'uSæ.ôß:·G³wfÏU3™\"³œÓPQQMt#Ú©égNñ£GUƒÉôÝJŠþê²5b¢XõŠÕ&[uiZŠ×Í?P˜hç´Èlú¬g†5a]&”¶â²Û>ÓM*Â’¤¢¯§Jt1VÍ8ETäýjÅ(Ué]5‘+tõUÍÕ]õ`ãå\\êýµWWñ%_¦_õí2Õ—\\‡]Q]”»`µõ7E\\b[boÃ_	WKôI>ËEd…ó|P6O“ãYób¯AEn©XóHs…TtcÑšÞB1fõ/UTñaÔ;“f¶ƒRµ·ftÏ:5ágð„°1óa–Š;1%iN§i‚P£QåÇtmM…SlHŽI°g5×&ö7Võ÷lÇ­ö­Y6r5_*¥\rlö¸ðµ¹d–‘.G…•ÕO1Äœ°+ú´°‚-à3ÌDõÓ]3¤×b¡33e3gŽX\"•³NîýPr3jnW(-!³iw7M·=j‚ypå”®3€,\$Öo½2µs„ÔðèÕtQe±-âùlüŠÑsâöàÈh\r€V·`Ò`Ö	æ¿ @Ê¬®?h–a@ÒÈœbbêÌ`ê—à@J(\rÀ@\n ¨ÀZ\0@``Ç{Äj.·ƒ ³^x—N+æ»6…ž±s¿OÖýW›t7õù67P!ØüXY³µ2S»È×hcÓ5sêÄÍ´Bl€	·½|À{È WvG-€M9!fÒH1edßEÒ€ðP>ôÉU4ìaL%t½îÜL5+v3“wÉY\"£v‰N-Án@˜¿k@F¸¡ŠHÖ˜ÃÈ?„«±£\nBÆÊånQ®ùfz(Ã‹Ãµ‚uKŒ±žðžÏå†våd•)gØÝ‚å\08–Giòõ`Öðê4P­w.61-vyN8ð\n‡`òcÂ<wÒ«r\rààŒ ào8b¸,g“ÂC°5HlîÙwìÎ§žÆõJ¢\0Â‰TjÑŠ¼Ü–ºÈì’KöÄ)LU\n3ÀÛ%¶ÈÕÃ–£˜)êöbíÇKX>6x€—©€\r,­“\nÏ\$à\nÀÂ`ê ÚÏ£‰pÒ¥\\X*X/XœA”THË®z)E*G,ýxÐ/Ô§X=†óÛ)’°ëŒëB¸äÍ˜ég+ŸLÙŸŒ÷ŸÔöM8øàÈt?#È‰™›™îacØ¹©žuýhQõ(ÎÒ<yµ¦÷õù†ÕŽá@	\0t	 š@¦\n`";break;case"bs":$g="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰sàºhr†5 š°Ò¯#’¶*#«ð‚Ë¢8ÆB¢¦ƒ/+²¸‰¬™Š_ PŽ2ì`éG\"cäè\nrÚ‹Œ£’f9=ïÜ4F¿N,X&'**¨¼­È\n°¤2¸¡ 2ÑjÚ5(ÍÔÏG\"HÚ84ì`Ü:AM\\|4@mbN9¡˜£! ìô¿É(\$¶¤`T¾öŒ1»»Ž£Xè† Pƒ¡ƒLÇ	í8ÉIR‹¥.Û%tˆœ7²È*ü;Já,1&# U`Ô¿Uõ][RM3û\0ºB0ê7\rc\"K£¬Ù3¹ô3'Œ#<r14ÍhÎ2#”2ææ&+à0£ÃPêšº:Ú‡qÈˆ:ÑJ2DäRVŠc[&‡\\i3õ5´ìsc@4è¼öüÇ¨Ò=I©\0ZÑ­¯Büß¤)Ýx”ÀÌM&_R´½X=3tý+âx«ˆô£m\"#.l5/d@QŠPd(.«Àhü»s')Ýú*§cÐÂg)xÂ¶9+íùHâòÖcÇ9^Z\r5Õ\r‘û0Í'Ã2«%Â}©4E£{Z6£CÊN7c¨Æ1µC˜Ì:ˆÞ3¨£˜X¾Ž[5š0¨®(Ý@Œ0Ý‚Œ¡@æ¥ÂpÊËFï!Šb€pA/«.û(þæ‚vÙ(ê—\n©HÊô(ÐÎË%ÂµP 3Àçw¿èD†5£;¼Ìä¿ÓÄ%Ï% P› ã“Ecºç£ÀáK2œ°x€˜Ì„C@è:˜t…ã¿Ä[œ’.c8^ç}cÂ´\r#xÜ„ZäÔŽžÀ¾Û£CXD“Rld'8:À^Aòq	Í:’—]²p%AÉ²dÞK©m?Èõ¹­ñTG 5™´þAMRÃ%Åè¾„¸•ÂrÃ#Íý:¥¸FŽphrá (vŽÌÍÃ‡Äc§âÔH¾<Duš“ÀÊK’û-d\rü“6@ÖìÛ l!ÊÅ¨|N‰áˆ‡E`ž˜ @}Hø7§‰V„ÎÈ¨yj4 BàœÀn@†ÈÚ ÊC©ªN™€‚3Æ6G82Xï£á«[f¦(2‚{H P	áL*!(^å É#®Æ\n•ÃüÆ’éÅ hH™“XÚL2.€àÌBˆ`aXOÈŽ½i#ps%ÆdÍ®Vþ±‰bÜjªÄ…ô¦!”€„`©XR+É8×A!aBJ|ä]fE·p·Š‹1!L¶‡b6iÒÕ	á8P T €2½Ðs&hÝ4°Â\n@Tó\"„À‹>§äþ=¨ö.IãAÙðz4Œ\0006\"b­FhÚÛ-¨ø¶¢ÐÒ\"èÅÚ„‡„µB eÁ…¸'-GNðMÅù&FcŽô2qËXí(\n:×¨‹ºTrpÍÝÃò1.(Ú4	ÜË’ÌžfER–æaÝ‰›i§š‹5ÆvÓ‹¡þbê‰ŸÎÓŒ©Ýk«M ‹¼ðç*K`om•Ýe#Õ†‰ìÀœ„|”V’èÒgP(¬ÐÞMLØP‡ø¤ ’˜ÖRï4° ü†ßbÊm	 Nž•‘yÛ;Ì²É\n‹ñ\"4Ó Ñèpp•œ¿®2âyO9éeL±²DMUm9—\n\rÍM\"ÕøŽOÕ\r¤ýÇ¤^Ä”ê–8…ðÅsÉ`C4ÆýŽ©å³O–ê¦\\ds­ñBPá(f&ð@ßzN\nb&%™§övJM¢½d¤|&\nQN…>YÃH“pÈòÂ%ê’ò\$ãÚ¤‚ T!\$	\0 MSUjñÜ‚¬i¶AÜª:FÂ…™µŒTŠ°à€ˆ C&¬~#ØÇ«ƒóÓ&%<Ž:ƒZÓQLSnêÃ»V«tW.!Wdlv°ññÅ'PŒPœì‡‹Œ¥aÈìRïü•“&ö:¿ôPš•2³€ÆJã#D–<\\!Y‘^ì‚B|Îz()%ÊÃã’“ó&fÊqO%gÌq–´§Ì¸ÿAå\\½ŒséÌXóEh,ƒ£ž<Ê†%!dàˆƒ½˜#ÆQ•\$®ÊµŽ!k€Ð’c½©\n:\r\$F\\ÝN–¹µ’UÞXPÅ­’J9¸kÈçBƒ¡(\nTÑ¨\"é?è gÄjC•F1P\rŽ©Lèƒä|S8t¡7¬þVz‹íƒUIÛªÉ]òöê²Û·s“íh©ÐIMÈÌB)™{V`ÎF¬h`oëÀŒ-ÞÄ»˜ö¶÷ë‰-ÔmP/Ò\rV°d-¬b¢Ú™¦ŠŒ¤³>|eaÊ²±ÉâýMU’\0­È'\"1!&çEs»X¸I>12“·ë«_.M   2R¢íB9ZX„ò£yå-ßÁjïK‡ý4¶Sîs•ÆñUg¦nÂÄ4q—ë}J°pêsŒ»\$‚—J/W.»nÙoéûÅ¥[Ý]Ø;A.î½y¦ö}ãpÃÖZÄë‚ä`åÉþWÆY·\$D`à-O^ðçÏÄæ¬_–³v]+¾=šøRMäË·ŠÆª”“y›¥œ'%ã?\$öów.Ìå¼ž°¡öns½ª¼¾×»ºÿqYØqV;žü.ƒrÈEŽLuÆR´Ëí'-ßâ&BñÊ7Êeß6ê\\õÆ@H&@.k«ƒý¢\n·!¹„6WvÈÛ·Y‚Ÿ²õs¢óÝ¯Š@xª9ïµþöSú8£Å\"¸e22lçO\0E4õÊÊŠ‰\0zÐ†|ªÈC\0e6ÀCvÀ¨¼·íÜõâ np.84ïÐ:Àp0áï|ö8ËŽØ‡ÐH[\"aPYã~¸iÒccÞLb.AÙn4QD\$þÒãÙ+üòŽùjÊ2ðŠ.Ð\n9Î¿¯ëÍøì\"\\»°Vmå€¥å#\nÅ.¯&Øè¯¿NÖRð°]Å½FL8¼2… ZÄR#è¶CÂ^i°Þ‚Lt0ÆˆÐæ/BöðQƒˆ!ÆuêÜˆ&t\nŽ{Næ%Ä=Ð!H½Jb–â=:¤ëÐŽ£ƒ°ø	ëà÷é»!\r\n¯‹Ëß‚‡\rW«Ô¼î^XdYÌ[\$.6‚\rq=vC#Û	£ŸôC{~	\rôâã	k˜§ÈÀ jZ'/VÖ5ltC‡\n@‘²Ñ¸`£Æ1ÂÉÑÆ\$ ™ØEXÃBUCZ~Vé¯Lûñ¾TÃ<\$l:ËlÞ‰ìcâô¯õ\0†GàØgqkèæEÀç#œtezšH%à0üž ¨ÀZ\0@9ÀÆ@bŠìöËÇJ‰O`ÆŒ³èÖq­Èƒ(Í’X´Ž°ˆèƒ­bÊE\0002cðâ¥\"0€Ú'Ã kÉf1/ö1šCæ×¦1\"L¤Üã6TŽ>–D&+¯Rà¢Ös)dLã½eNÛ2Æ(’Ê?\0Ô\rãÐ®ffFØ5£&c¢¿Ž4ñþ¸“¨ž¸Î\0!Ò4R„ÌY/²ï0L¹rÙ%Óµ’ó	\rá1²ÿàÞæ0ÏãÎ1Ð&SLYf¥jçÃ6ÿ&Èõ\$F\\åÒhÊÀ¥3VçÄ^^XD4.Þ\nRnL'†x Ò.ë\\@€¬\r ÊàuÀÆ¤L¥³.i ê»‚~ j50Â8W‹‡Kîhß3æBXcø\$âŽðâV\"Üc.¦ØR…;ÎF1bàQ@c&”H7“|P4³‡¯\nD›c(1R\$Øé`äX*À";break;case"ca":$g="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb*\r#ƒæ)ã`NùŽ©(ÒË£(9ºƒ\nHã0K« !£îú†KÌD	(ðÈã+Ð2Ž‹³ &?ŠüPø«ïH¦—µÃ\"ëCøç®ÀP‡È#\n7,€…-#ªzp£EHÜ4ŒcJhÅ Ê2a–n|Ü4Î\rZ‚0Îøè‰¢¨â„‘Ái¬€4\rã#fü á\0¦(‰‰c9#ƒÓ¨±ŒP&¢òÈA(rê1ŽˆS!L1É[M¦rQÐ£MM5¦ŒKË´©@Ë?Ïa-1-À]ãq#ÖÔ”½B2EI²@P‚3³ÃÓ8JÉ{\n&ƒŒB6 ã°Þ”ƒ`Þ1Bxä£Y ÆïÝØ˜a•©µÝ¯\r£%-ÄgXÖ¥•p±|ƒ0£uËs²”UÈŒl¥p?OBö\\ƒ|L2S%YRÍ…ƒ0C“\r,T•v;M„êµ[Åì£ü7\$ãžVô œTcôLÅ‘Š\rk^„B“â,9\$€PŠ<hz(‡—?+ÖÅ2AÌš6d:å€S=\nH1˜Ù MJ’££xÌ3?“Ë€¡ŒpLóP2 Þ®'Òæ›)ÒSpÌÅSczðÉ?òã\nòãfl7?C(P9…0¸Þ5»á\0†)ŠB7; oàÈå§BCs\\’¤ê²ê6ê¶Ö9í£tòžN»häÊn	Šg6£¡fÓ+£€Ò9E\\\nëÒqDÔ9³ÎšÆd’Óp“Ðæ;®´4	á2œø@&ƒC(3¡Ð:ƒ€æáxï÷…Èÿ—…Ë¨Î»ÿÄ\nï£0H^˜r6!Ñò…ò6žX\"ÄPú«tôxaÊ¡¥\n¡Éó”8ÁÑ;&êž‰Š0%,­˜žÂ`Jb ‚¡ä6SÈ;½A(1+bº“zq/ÆÌ˜Hl‡M’‡‚…\00ohh©K\0PTAJB„Y3›èB÷Núi/d¼¹Á@ç¡ Sæië-òXêJÑèbäÔ“ÖBfÃ	A€30ØHÉ¡Q&!\$ˆ‡“I”1[ƒ‰mC¤(£+ \$¨9€@C#ó\$ÆéÊ†5Ä¢d1ô&ÅÝ\$Æl‚€O\naPƒ'`OˆÁ4Z	â9… ÊÁaSrz&•Âó•Ã1ÎàöfnìIY	x‹MßÇ¦ÃØ)ù>¡¼‘å‚]ØPL)p:p@‚¤HO\nž´˜7#\$q“5Á+b\n‘ryE\r´ŠÉ´m1(NT(@‚,ñ\"„À‹>‚0‹|:†Õ_ƒk!%/T98*e\0RCH¡\"W\nN(pYˆ à†`Âb ä¾\ra+#øð•Bf!h”Ã¼s”ÃcC…í=ÓœÔ)á5„ôÊ£F¦È“#›s¤ÝèF#Ì;^RÌ‚µ(cäüaX«0šTäÃP›K¬¼š¹|Îj½3j©®3sX¸ÓqAY0\$Õ‰\"{\nÄ¾ °t cˆbe	þ;èß¢AQ¤®È2·9;+½‚•Á™­t¯;[úÒwÔFÖóâ˜ÅCFáHXSpyâ§‡•šµ‚}P¢ù7&!Z²ÙF¡Ii2F†âŒº­Uî¤‚¯l@FKQN¯In˜êÎ¥FÆYó6}‰Té2P™|“ƒ’(¥4®æ³¥/HúO¡¹p††)àì<ÔöQ‹…‘P\n\nGè¼£0Šj	dui—¨„¨ˆç¸T!\$V]“d2Ú´™^U¹u\$ìÁ6;¦×Ì‚Àà€†¨f¶h*¿ÃÍ\"„®d©%ÁŒýúíìôqOGá`aöºMnA…€¸â|.ŠÐ%…Å¤àÍ—YyŒ‰4Äf}®PÛŽQT4FvM²~Vr,\$“‘`alRWr\$ÈŽÛ#«Œy—a ˆ8¯!›,ÉŒs3FÍFÔ¹îÑ \$H¬‘‚°‰'™è7LHÞUÊR \$\r”K«uÞ…ãˆ›¤ðŒƒÉ1Q¡I´9\$Ü\$Ã(bÎY…	 ìþ³•ÄÂf\"Fµ\"MŸI|Ð\n`ÐUÖ\$Smá'Â7d†¸0Å’B´5*ž„S˜Aj„6iî£J“£:œOÐ€çÆ2iwÖÙýƒ›J;ã½ªfŽÁ/®5ïi’9³H5¢©i±YT]­Žæ:g´˜îˆìŠ·•z\"7îÍô²xtIõ±q]˜:ÈiR cÙPÆ)hg†`((^Ä÷å5|Yå-N]R>Ö”ùB‹z+mý¸Bèf‚{}mí…iÀ¡qåêC )D›gn­£Uiýb({×w°WOÉII[¡<j«U-ÑÖ÷Û}UˆÃ»ò~ñß	³¦µN†•šeÎë½[žnš•´YKWe@Â2í·ÚY·lÞ›y)ÎÔO¢½Dì¬6¢u9}ÖJ‘“õžèŠ±æö.ÆÝœ/\0|6DýÍW‡N®f¶y=ç÷>Ýˆ^»—†ò¬âKyÙÑç÷wQíÞ’èztðôfn ”ÙRîåL\nd B´Ó3`VWÁ5EG(öQ3ñ…}›N÷KÁàNÓ–ÜE·ÅÈ±t\"\nøÉ|YMU£¥&@^!õ·J×&ÄÅqEl5tØåœ«œÛmŠÈÝ‰Ž÷åTI;—™Ýj¦²÷.¤gîzøyéªµ­ÐÿNÐ«ðÛÏæäŠ÷oüõe9ŽëPONÀ«fš\$ð¤¤þ¼ë¦0¦¤†ª0ÇÄ˜u	*=ËnËüñÃØôÊþŽê&`FÐ\"«p^ñâbd«vM†öÐ«'ÆN(êÎ]cW2«‚TYk'\0lûé^§ƒœ¢D62Žtkã\0î|ïÂ#º…p„õ.ÛFqðÂÆô0MÐÄ‹PzÊÎ°ÁÔ‹P—\0ß\$Õ°ºŠ>prßhi…OîXÄÎÂfÎíë¾ºËÂœëQ(Ññ/±6¼±p,CÑ*ºäŸ\n½‹°¢%n}F°¹fPDE\r‘5d§®÷D¤¿âb	´\r	^¾O@Žóäö•Å¼rŽÊEEDƒ…â˜A€Ù«¼Õ-ñ)]b0\"ïÄRŒ:Õn\$‚ø1±pXlÌÑªäO(þ¢ {MÊòÂbá‚\nÏ †H Øi,M	œÏªDÂHSã\ny…Å¦~&£æƒ€Ä#§\n ¨ÀZ&m£æÎä›«Ù,–kƒC¯»#F‰#É„Nb*\"â2`bR*¨\$Íüµð|+ä%\$âp¦h£Ö= è=êö¼ƒ¼ï¼1Í\r phu\0Â‘JB/bê&  1eÒ\$£(x‚d™’.:`™*Ìpa#n2Æ@e¸ðl~Ê.xfØ0Ð@ÛcdVN¿Í>«Ìî·-k+-±Üm§….cy.¯.OÌ<m£.ƒëà¨­Ãd0cPX Êr¨”=‚l³>ü£d0/î«%¬Rª‚r¯«-‹s2ªæÂXç\rú–ŠÆ^“B^äåÎPæ\0z£\\ Ò!Ngå.ød„?“ X î­e¤ª\n£3?¥œ/Cù'£ ®bìUòj¡ƒ  9ˆráþt†¾ÕNÆúÓ§:²äJÍ/0–7„zdÕ7	_\0³xNPïÄf	\\¥6ÉæIÂôO`	\0t	 š@¦\n`";break;case"cs":$g="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡Æ)02Ž ô1Œ P„4§£“L\ni©ŠRB8Ê7±€ä4Æ¢˜Ê=#Ãl:)*406Çƒ(ä P‹!	¨ P2ÄC|JÖ°lj(\"ÃHÐé#›z9Æ¢¤®0ºKèá4Íi¾ž.ïŠ5;¢óÉC=´Ð@)Š\"cŽ&‚w\"Ð{öH­ŠiX­\rŽn:(¿BÐÞ÷<“xè¥mz–\nxô6´ƒsz‰MmEYWV\r+zÙ°CXê‡µn¢\$Ü\rq J2Âý6=“eÃVm‘e?K›Ø8S¬XŒ:Ã\\h#8ä2ŒîdkMÖ´ø5Œ2t4ŽÒª,0µ,\\à­Ž\r6QCk\"\"C~ý¥¬ ÛÓ8ä¹ŒcB&F“ªüÀW²}›²åmŠ=\\\r‚4\$Àw ÅïØíŒ±lÞü>ÅbÞÓó)B=9Õm_—¨øl§Sc¢s4ç#FwgEKÆîLƒÌ 	C}GbHÚ‰LXŠ<jŒ^{Ÿ¢ív(ÚYŽ•™É:+ÆÔãÌ6Tï:ŒÏÃ2„7©Xž2PSsáŒ¨Ný(7\røs_k˜A?Ïeš…\0õÂRmÀÏûg_Ãs`Û3A2šï©ðÛÀpH—	ÃqPÏ…oÇŽ»züI_-YË`Âó»àÓ¿t|þàö=F1ÕO]cM×òç%Úò¼w/ÜÇ\rƒ4ˆÄc¢h^öcZxb˜¤#Áî2»éÝ&3%#k=<Ÿm»o_Z›¾CI5£C³€eÌ¢¾*i7ðÜOÐÛuˆÆ¨ÔˆÎú“NàùŠÓêô\r²¬{.\0£Ö@Í3‚\r	À‚žÑå†üPÌAhÑl ^Ã¼9ËÑÌ¥`\\JC8/aÌ•“ö (nà‰‰‡ ÎŒ!€_Hn‚ |Ô”pedepýƒÀ^Aò”FL¦`É7{\$`%!BNàs‰0Q\\†âà¥‰5Y#^’BpN“à©%eä½ÇsäŽú>.´‡¿pÈQMzùCX_HY&€dj‡í°Ð@@PDŠÒ,ýÁAP/]GØï ùß8ÁŽ=1tE€B!±ã cäqùã%æp™Ç¨þNÞÙÀ˜øWÊ›L#„\nŸT­ÕòÈ\rNÊ#¹\"\$c×¡@Å\\‰\"\$è\\p !’'_Ð9¯rE§-×,ÉäYû%nyÐ;ò|PÔ\n<)…F_æzOjM˜•rPã¦‰ƒÄMÀôƒ0iáÔáˆÕ\njW©^¦k…b‚…Þâˆ	„”“•`Ú\\Ìz0#„x)˜C|´&Á*J#~£II±BtMÇÄà•Ò´a¤=G£¢Mfk%&¬ž‡bDŽÜôèfæ”Ò*ÄÒCOM(ì'&gü˜C¨p[õ•²?ààH•UaQ\r¢V±La:Ht+GÆ«£Ó-ì•´ˆO£ð«Ä]O´ƒ¼xm‹Lp“JhJUûž²n\0ØÂtµŸ:¤1d@9šDuf%h˜Ù¦e“.ãIž…¨SÙh¨;2f‡±Ÿ2¶ºGMY&·-ŽÝ¤¤˜O¬ÔFŽWªÃåK‚</ëÆ“ ôSÃ˜:Sô9ÉùC(Õt¥”ê¨X¸ò^øj%í^Pžœ¡‘U§ÊÓš®]Â£_0†0 ”9 ‘Ä&¥üÅ„û0.‹w¶jÊÑ¦MÃ›f3íÀ“°È¯É´¯LŒÖÊÀS ]¡á³hêoQÆ#C¡h2 Ô‚ T8½ØÃŽsji6©â´âa„ŽâxrÄ©¦Æªz5qñ¬:Op‰±³À\nÏ¶›\\êrj(äi7á™n0“ž	”9Ö±ž›zÐ÷Kf´ £P‰aÔi!P*†\n¼Û¸RfMšÂàJÂh=§fÏðô¯Öp/+ë:\0.ÐÖ´Œ³Ÿ€!çHhÐÖµ§ã<Qý	´Ör&þ’ŠùÆ×¹yVÚƒ¸qÅµ&‚çzçôÔ˜/î^Vë|f®¥¶::«H²+ÇIÚ»L±½9­5·€:æ×‘x¬U‰YÛ&—9dÌª€&¬n4 vÒ€¯¸­%k;mk§µ«ÿÔPHn]¹¹Ó\\iÖÚYÎnF2ÆÜ4ÔÓ¯ódïI÷}ÁF_„ÀÞèÔCÈüõE\"–ª°ÂIV¬|-¸fè¡f9<\rä¬-Td¬–ùTá·l\0îIEVhÄn¤*°¦ˆtMè-P¢Ë¦¬êû\r=µuQ*Fi3­×b\n½¥àÒQ‰JH=‡£ó#tb±½dî±[¬C©øs¬5_	õVV/–.Í7÷¬×Îpô°k]U½X¨v\"~n	ç]Ã*÷«Ë³l•=´V=ÊýwXKª;Ù+îl·6œÏ\"Èñš¬ÌO\r!Ùlo ]¯¢ö¿ãš'`ÐÐ\n\nJ¸2B…3!;i“0\nÐØ‡ke×ÄOÒ†Å~(£%C¸ˆ¬ÆM|¥¶ÕÐ8RVy|ŒÀ*X)!õ™1ÚÖÉÛ»Ájw2\\B9Ö%èjR£ÄüÛuõû´ðýÆÕ´›]ö=ÏÝkvù˜~ffs‚žÙ¤kè÷£KÆÚ#BhÝùþæf¸ãB¦þMLvzþî8 bt<ÄüF‚\n NÜ<¢rM‚<×MO\0¨ÚmX¹\rˆ>P£Žü7ð ™®ÓqÍ~ÕffI§yl±ÏÑ\$0)\0 þíTÚ‹ÚÌ`©Šœ:Lx­špàÈÁebÐxÇP|8‚ý0ŒòÌw	MLüOþ\rÎ8Å Þ\rE‚/£~§B2åBøDh\0æBb¢Ž?`Ô™%>X'¸C@àq¢<Y¹\r…ýâL­IÐ}ÐÆ&Æ”£¸…Äpû|\rÌF7Ð„ci8µÉHô+.š8Àé	°zªÆ@íîŒfgÌ±ªÐøl@U¥Ó	p,Â‘G\n/êjLÂÐ‚ðÐ¦SOüý‰˜],¾Ì(:ûRð1jé!ð,ë ªÌyïÃË|ü…nÕz±„#.ýlÑ‘l1`´,3£Ö°ÆèÄ\0–\"¡|Ì(\rn³ÄÁô<ªþBl­°\\ü1r4®Õ[íž«‘àßì¯±éËÆë ´Æ€@Ë…º9±6WHýPWñ ·ò[Ã!eg!\n8WêØÃß\r‚ü®¤”\rb€@oÀ„±Þû²7#°Âûøñ»\$by\$¯Âý.ÔeÒ#r9%r,ÐNf@cœ÷ƒ\$/Cq[&ÏÂ‘”5Êë\"Œ|Èä­'°†ï1U)l)°£	’¤È2‚üp© ¬/Ì~É‘+Ò˜K\$>E‘wÃtBLØ—‘Q)ï¥¤´^×k+`«-D)+1^æ Ð\"¡C\"ã‘ôVð\"21ªBæf<Ét—€ë¡{íÉE233€Ìë”Ly1b52ãG1ç\0ÕS6¹‚V	b2rƒÌYÆ\"{Ä¨:0£#1g;EàÕ01052v5b„4M}ð2ØsxÙÓ}6í£8St¥á^ÐN\r€V:\"†_E&ä¥‡‚ˆq¥RJÉ&a¤hRrŠANGHõ¢HÄ.iâE\n\n ¨ÀZW6Š€j±7-„ÕÓ*÷Æ¦¨/¹ðq8“=?†²û¤Ø‡B “\"*\"íœ‚fÒ[ŽW†Áñ8\nÀô/íJÒ N¢1`–#r/Ä0rK¢¨Ò\"LÔ?%&É­7C£+¤žªðœ¬,¬Ž ¾Â|N¦¢F±ÉJ· b(ø'ì ÂÎðcÙ­ä\"Ú-í|ðKôöÍvP6wt¤ñ´˜qÂˆjà\nÆ÷t§KrCLT´öçd<b„ìóÙLÆ+ÅhÂÊø%ÒSÑÔ)1A†O \$o\$¿¢ˆƒ¥Ô¤Â…P¢H÷àðZÀ¬'Hï®/03¬%£öHîÍ'¹NelSn˜(Ã\" ×SqÔ\"<ôôÜ<À´@EN'Q iŽ 2%64ÜÁ‹\$k(³©)¤p’kRl•sWq©K´¿V2Â<u2\r5L¶”‹SÌ/%R<ƒJ®1†™\$V!Æè";break;case"da":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎOÙíÂŽ‡“…üœ—8ƒ“Ð\rî;j˜ŒŽ€èž®#+°µ°œ2Žƒ´\"5¸C*É\n-\0P˜§¦°¦<ª(¦…<ðß­ƒ°Ü‰éÏˆê0¨óµÁ\"‚È¢ãsB­Qx’6£Í‚”Ð¨ˆ:\rŠaŽª\0@)Š0új“ŠÌ ØÚŒ‘°+)è,:c ëd3HŒÃHÊ;SlÞÔ§ÀPœ<´-‚.†Œ\0Å> HK@Ði¨ç1ËÎàŒŠÍ#HÞ‹ÄCÚâ\rÃ3@7-nà¦;ƒ@ì³Žk#4ŸºmÂÿM\r‰é\r#hÒÃ\nŠjp64c:D	Èñ84}[<\rhæ1²N„²k\$€2\ràP‚:¬aà1§´Ãa«´^ÙN³pÈÒÌ#¤oÎ×09¡,ˆ'º°¢vŒ0Ì1G­è\nDâ¼-KüŽ8UPŠ•àƒ“\rx2Ö rÜðp§}Ì”XÙBÈÞ‚-(Þ3Ö©6£¬*\rð,€<£ƒpæ:Œcê9ŒÃ«=\"-c˜X˜Y`Â3Œ+[’¡Ð5Ýj¡@æ¤â¨Î<Õ«KB!ŠbŒ¬hJ–„\r}8å)Tn9S	8˜ä<áÀÕ,`è“Äãš\rI®jM\\³C®lîûÂñ´1â2Ä\$éJ 9Y‘Œ49\$Sê»§[Ð\\ƒ@4'£0z\r¸à9‡Ax^;ôrC£/+8Î©]`ðšåÔÜ„K ä¹œØ¾1&cpÖØñm!Aà^0‡Ï,\nqM²Î¡Ž~rÐ:ur^OîÈÉI{†gÙ ¨îÐÝ‹nÕÝuÁKy3©:àÄ#ƒ\$âõÇ?zç´¤YjD9'	Ó.fÁ\0P	@²gæOŠ”Âg^°¦A§ˆ¹4ÖžÔK H‡%@†ò<‰ù¿p¤¨–ã>Ÿ0f'ÁÑš€ÞŠWa½^MqP6¦þÏ!ï-äD<±²Tn\rï‘°“\0Ð™Ièq§ÔÐ†c¬KÂdu<Í°ÆGÒ²PL¡ÁŸ²2RJàO\naP#hqá€k†M¼²ÌˆmW*¸Ï‘ S\rYB†¯ô“ÓØRÃKÐq*d´¦³@ìŠQ'1à€5™\"8G‰ù.dáç¥€˜OKj\r.X#@ ˆÊH`¤b:Dç-QL‰Alœ@ÈsEÀg2€)R°¢§WxNT(@‚,¹\"„À‹0\"Å(0¢åøÇT²=³5…Cøƒ‚dsAÁX¶ÀˆTÓ64!Ø¶Ä´`¥Ò[/ódS rJh¦9á6'ÃŽ%\\õ9…òU†£ÚšsP7Ñ•{¯™—Á@5	ÞSÀù‘5mê0S%úÄWzñ9Œ±ˆP”¿C{2gˆçÍÂÐ]e˜S\\É©E¤Ø`ìÓÐ“NZ@H\r A(Œ‘ÜAÂ\nY);kÈñ\\O ­IY¹`²à*Rî_Â˜iH8!–@àÒÝ0ÁëOŠ\"ôK‰É:TÓU2Tš.ˆ•—õÒiQâ¶/á,’«°š0Å)n­è8*PÌNƒQ¶•¥òXK*øZ9¿¯•úÀ3ÂÒo×â?{‰\n\r´0^Ù{4¬³™–¡k/á Ñ¿BþW5a¡ˆïù~C	\0‚%KsêgÍ,B|‰UBŽCQž-Œú‡®\\b€\0¼«(sxbÈJ†P&(SÄËjdÕüšžÙÝÎº†0\\aJœC‘	mà&ì,;¶õîõàh—>ê’y¯Eê}È4¥¬Õ.¯ƒyBz—¼²;#opd»Œ(]ð]t¤eÙ~8.ø’p–õÕ‚²4'X;¨²gˆé\$2®wâ#éx^R˜£‡)NŠøW¡ŠT©1;éÞ'fØ’ ¨=\r›À-ÌVFSm•â ,ä£“¢Ë‹óÓ (\"†Ò.ãˆ-B„Ÿ*åxÏ—)Q¢yt2¤Ò„Þ¢<\$õš§”¼Ï–¨žl9¸€ÚS-šêvsËôj‰gƒU@Pmˆe+æ:ü‰}/áAŽ“b¤òÏaJÎD -¤ô{.Ð	tS8Ää€«]rT/:Á%ÕDõ\rIšõ¢e‚\0QQK‰\")êj/f#x¡ùe\ngÝmGŠXhc¦ÛQ³™5(=¡YìËkëQ­ã>vËv©yQÕòt¢òÍú÷i±3`vÑƒÛ7níœ±´¨íA6€˜¤ÏUáºw@Œ_€ÓzrØ	Ý–‹\\o\0é¼¯¥Ö¼µâüí9Xl%u…5˜£8bÞaZ›;Ê»+ø‹uÜYói×EZZáÈŽUåfÌ¥(¼ß6Â<KJ.~Ïë;| Ï!m:PdôŒ™'W…‹ÉkIJgg\";ªR^æJ‰=z&wšÂœáÙbX—‚QÏ—ºy¯uÆ‹Ð&Zc¬›„ÑqM¦™Ÿd¤{r‰ö€ïÙ7l\$éîqÖEyiiÎ¸íoþ‰ÚMMÞvfï½â?ìÎä¸S¸hðˆå†//ßîM*Ñ§@6-ExŠS|6ÌÛ=zr ¨s[ïwm¾ø^­¥Ô©¾‰úN5=÷%¯~mßiŸº¯)ÖfDžíHš¤=·4'V—ÄÖƒ‹ÚjaZ­†³ÀË½{×ß7çì²…Ü}9Ð)¿W×î‚OìÊÎ)J/á_·øê<×ï\\7ôŸÝqö5÷³æ;òÿ:b,WëðáSüpûÏî±ïüðÏ²þOú@Oë\0î¸A.ü>‹’EpúM§ì¯X>ë[¯àÚezc4³ïRAÀŽ\r ì÷0H)&@Oø1b`\$¥ð.K”øŠDŽªFZŒúÂdflÐjû –™K”,eÌ-Àƒ*0ËœOÍêàî¿L!	Kï	ð¢`†A`Ø`Ö<@ÖàaJyNlÓÇ¤3ãBÚCL5¬HágÊæ§Ð#)v\n€Œ° ÎwÄbS¢N¼MèŒåb|lÄÁðð¾¢„*ID–Î*»	\0¼ŽlKâ0ë,æöïz/bfÓ\"þ7¬¢;£¶7‚øÊ ZX¶lpÅÏpUÍ[âún\np–ˆ€9êÖ¨¨0~9Ç–\\„ÄTâ0éIÄ4(¨ìò2H×*^CÎY©lÎ1v=¢‚ *×fBO|ÎQyñ|×eš\r?ƒUîÿqŠÔq¡%äƒÂb2*I±uï®;êÈQe>–*/\r‘–`šÐdÙí`WDÕ,R‚QìâÉbF\$\"þ%\$B“cÄªeíÄ'@ìeã¸^Â-¢žµÂØž±Z\n‰ü²àÊ‹‚z@P‹Cž‰ìé…|.m¬G2@0À–ƒÍ>@†'±pIÑp¤ò\nóDâNo´üO¡QR#Å’\n\nðz°H5B.\r@";break;case"de":$g="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	fÂÏã:9#c2/KÞ-)SÞ¡µîz-:`T`æÍ0èíH49BpÊÎ:CÖã(Þ6Çë Ê	¤V‘£ƒÃ ƒËÔ6»h`ì¸Ãòâ(#˜æ;ãéÊt¥ÉƒxÎ€SÅ2LÈ;Âï1‚HÚ8-òCâ¨a:C(è7µÍ¢(É©\"©4·c¬ÆÍENPè9­èêêÊlêŠ÷ŠÊÐî3H’/«ûoR•3ÇŒ£ª¡M#šF=!è„<¤€HK]W‰lÐÅ„òb\$\0PŒò·£J@÷ˆ#:Œ2Œéœ½¹C«ÆUJÐÄ¢®Q°/ÏU>?V˜ÜÜÏø¨2 ÙR¥€PƒfÙ6[‹òÞƒŒr›·F¢\\Žœ C}ìþ\ráh“¸sôÏN¤¬œaÊ2˜×VUÎSœã.<…äcÔÛ±Œ¼Ö5Ã*r5-\\—=,*†=â(ñšÌÎßT°þL’eÄÕ;xøÂXÏxÙK»jÒ€ cxÌ3\rˆ={R@Ø±‚Ót;+Zä3\réXØ7ÑBdÜ€…¢¶Mm!apAÆè0à9\röþpŽ´	h@€ªš€¿ˆ0Ü‹	âœp±#Û*†mVØƒmÓxÝ¸înFí¼(;ÞûŸp—ÂWáØœZÇ\rÜ‚f!ŠbŒ\nƒ{Lò]¬Žž¢ôp\nÙ Â4Ê6Ž¨ÌAH95ŠŸr¡HO~™ˆ:ë\0002?ÉæÏ´Újó>Å]ƒ8æ25•81%‰òP75¶þóï/oãwÚûp‚E@¦¯PäS’cfÎ§·Ø`KïnÀ€BpÃ0=E|:\0æx/ðl ÚÖƒ.L¡œ‘°^¼Y\$\0¼/ÃK¤áˆŒ£PD™¢}#ŒÜá†àxÃ> Iä(\\Ô(e5¨µÁ`äÂ!ÚÅ7Dåm“0ª|Z‘|¤œÈP €-\nd¶…¤”	¼B­­rôLËËZ9#Cñ¤ %85’¶e#’9çP§8±\"üaŽ‘ØêG’:\n\nˆ)€…<‡#D©ŒWï	\n’À@_Ã_¬876ˆžµ–yƒHœ“w ÷‰ñ@ Ò€=\"’w ‚3ù:¨QRÂþÁto\$É»¼hŒCAH!f+‘ÇRñÍœ³”§ÞOÓV²èA|½RXm1O4Eýø0TVŠQ¤4!EF8îLÂ€O\naP™v¦t\rÈ (Á¼¥7cR÷Ó¨ˆs@ƒrŽRJX \rò	-‡\"ŒR'Iã fÄÒLÔêƒ\$‚`Ò”¢©¹P`Í\0k)¹l;B\r>çJ‹	“Õ(hœ0T\n…Æ–À‹ŠS#¤|ØF0åC\\{fÎ ™„f\"Âó‰ˆÀ†ÒFPªÉ	á8P T¥Êª@Š-Z<èÅ†àÂ’ígxî	0uÉ•B	I‹Ñ%„ðáTWV„f ”òPS‹y“`Áµ‰r*@MÉí2a8ü8Öú{ìc³<§h\"Ÿæ¸ÙS9òl^<0Î£Ì[+4ÝMÓxweËFejEIŠE+j¬ÓCh'¼(7Ã:˜šÉêAXÃ†•ü}Wé¾ví“-u\0¢4)ò\$È³§j€^Ëµ—?—¦ ½Ò^æøà†ÿSŒ\rUØÁ\$J:@Pk'A­æº†É`wR=%ÙSäôY.ÓX¯Ï©8ñ-Ú¢¼j¨·Ö;è˜y²¶ø ›nÈU8U˜\rìÿ#&Ê†„c«*£Ô“#S	Øh±ÖÅ3òè´‹ˆTÄä°êâ%×‰‹}3 0†c¨jlŽ„°1Û†ò¥:g\nA¼þ5£®>6ý;>÷™=å«!P „0‹ê6fìá‚…Ã¨pg„2TRR[åÚVaM‚=Í5[­å‰Ö™ulgñÎÆiµÌÞL3é¾”ö†„ÌksªµVè5Kµhsvpµ„³Bèw\n­!N|3º1¾5t!Híƒa‘DIY.ØþmYþO9‡ÀpÊö“Ð†GCóJn‘ÐwW½`ìô”Ö‰™ì)-*“ôÉ›ÓeýuÖSKjc½ÌÒ¡·ù±¦	)¤/Ó|…VD~LëÕ=KEÆf†#iOÕš*,`“h-Žc)&—(©NãE}`NStÃ3«6(¹ì9NL¡æ¹‹fZc\n«:æ\"çìøS¢í\" ¤æ\0¤!‹S¸…¥âj•ñ}gg#nÓa+RÐ_\"röXäò{ÈA¹Tú¼p­“>P¿ù²06¦Æ\$Š(uyºK;‡5ÿÙW<’ëÕ¯…lƒWõäµ-¡‡BµâôãÔŒR×²«Ÿ‚\nÛÔÖ¸\n¢Ä“`§K9¦Äì«À…Järöð 2ºšÓZ,ÊTç<°ññëCf¹‰¯œ”ë¿1žõÆ²ƒDiöƒÃ1¾cÚoñ*s«ÊÚQÑñ·Šš³?æyÌÀñV§Ì2HãùŸ‘æ¬/7âCßò){ó\\KYiPé¢3×ZsG@ì¯²æ;Y‹Íkî6Á˜ÓD¿èÝ<`ê3.©c›BwÞï¿}¨¸wêT¿­ìùUÖ§è†ß¦J¾©€ü_Ñ4RU‘´à-6Pæ6ñ\r¿¦¤yô-ähù èA(Ü #ZpG˜LIVjnþ£\0þïòv€@Á%àBb²ÚÃÊ hŠ‚þ .˜\$% ÿo¼=b°‡„ ü¯Î©L@ÂÃ\0_¬Il2Ãnà¾ƒBÄlJ1…B¥FõÒµ0so´îZÜDýoýÐ‰PŽh¬(¬}Ð„ûCÖ\0Ï	ðxõNÕ	°ª)° ý®v&pµ	îÒÈð©	ï,¸¤>6@”°Ö²'@‚ØÍ†{¬hß`È‚æ‚ïƒâ&o€ŽP®üqQ0¼ñe”YŠðÂ^¶ Þ3§¸:°Çdk°Î1‘!M÷*â\n(P ¤2 Æ\reª/êúXHÆË\"8÷oP^nóÄ³…×¬¢ô€Ë‘\\óoS‘fVQk±WwÎÝ^ó¢¾æÐô1o‘A±	kÊÅBŠÅ¡ÎNÅego\$U¸:±œônm11‘¬Å«Äf‚±\nl’)¬šKÑÅ¯³ñæAñêöÅä»Qm‚*L\"òö+êIb=à®\r\$\nSÞW.¼¶ÈÈæNÌMlu±6ŒŽ'\"êîŽÖ\\gZi¾¬äÎ”\rî;GZ&z4Âvù­:@e.\r€V	f³¨¤6\n; @ìbZ*†¤BPP ª\n€Œ p4ªBÐ\n0máã9ÂpÚNjÖìöÙPøâB;*íªíPæLilë®‚\$ìÎÛ‚T×l0ÃFDf¯Þác²=ñþÙÊ&¦ìrccs'ƒáˆî@‰¢P2„c>¹âÜGàôì€˜#D–	¢R@Å ¦ÃÞH¥l\r£¨ÇŒ|Àkf#®T#§Ú.ê.<¦\$€RæÎ^§fL!K0nƒ3Î4# Ö\rààBÓUóe+ÂyNä†øS3†Pýb;6Ä*ƒïW6*që†\nfè)‚;6#À;¢¹¥ÚkFŒ¡êfeL¸½¢8Fîg¼hÃ3+‚hJè8\$~·cð®¬®Ó’½É@'D¬½Ëj22\"5/ðIHzI“D4“HS\0Ý4àÊîÆ~ä\n2ÄÒµjC¼TZÄ@ÊœŠ6ë¾c†J=‹|k3Þ€ïñZDã¦O†lMê%Œx#ƒI /b";break;case"el":$g="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTIF™äl–Ìh¤ÊªÂFtŠ.KLê\$ºË@Jyn”ÅÒ\$m/Jé4¤J¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓ6…^§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÓÖµlèWÔ3[iArLï¼ÕjÌ^ºêAj©KÞÌÄâ¾œN’§LßÊ¼z\$£€Ø2£(Ü:AˆŽƒ@Þ2 Þ£˜Ê\nbˆ˜4Žƒ+~É.EÚÌ_<‰rFÇ[·ºT\nãêŸ¾¹t™zæ·—>RQ9B(R¼ø§Ð|‹hoŽ‹\nèè\\9/ðu²N¬Ñ2z‡9óQŸ,ºA.819H³FR d¹IvlŽ¡21ZPÞÚRÉq*kÍ±	À¥³ïPjÍB²ª¨¥®Žå|IðßgÐ³u)9©[RXÆq9´¨…Þ>Êz¢±¢.Rê®!ÎÎo3îoÂ)97Í*êi;’pVWïeô€\$œok’dÑóü¯ÛØ†TÜ´Íà\\«’ÁÅ¬òå&ˆùêž–\rx¤4Æ¥ð@Z¯z‚¨ðo›¼ZI®ûs›ÓßöBÿzÕ}­ßræù¡…g-1ÊTJë–ùt9ç±º¼C†• bZX/Ì¹?R¤¬ZR37nÌY/%êOY¡eukåþ>ÒôH\réYe­Ñ-Àè‰\0’:¤- ®_ùÿ\"È~“…þÕŽê¢h¤Á÷.pY)Uì¹ùº¢Rß	ÔOe†¹H,ópÒÈ©RˆYÙE©aú\"À±™SJÁTC1Ð<”ŠÃ¯\rØ³s…&°\0–ãIÄKCe–'#ENÑ9ÌX‘Të–¥Œœ\\>Ñz\"0–\0å„dh:4-Ëüo!1Å—G2+*YPÄHø¤G8ŸÉI-aL)h<µÙK©íç62hWÁ&“MD4CÐ²\r=1¨°¤ØU\n:.0¢],RxyŽ©s*125ˆÈdŒL%i¶fÈé@ÓÜÕ€ˆä}‘I&,‚ijºLI§aì]²ÜA/ xA\0hA”3ÐD tÌð^è@.!6†ÜC.\ráÈ3‚ö%EƒÃ)\rÁÌ4†ðÜÁ4P2‡IüÃl!¸5‚ |ñ¢+NÇÔ¹)óöxaÈB\$,}Y£d˜¸—2þ€O©%AÏP«ÎxÀÝIIgpî“²{šôFÆ<â*f}Ÿ›«`Í\\×Å’ªí§BC*“9™•Ã˜#‰!…6fÖ+hHÖ“?*)[Bž¬^É4@*…VR!\r““ Ï2®E	kÒ‰°@\$\0@\n)fG€¤5”Œ¯‰Yi;…å‚‹vVARÌÛ§Õm=—yŠá­Ä¨ÂŠS\$w¡wjÉð¨— ”¦1Z+‘ÍÊ–\"*!^z¥,®:Âžð òh›)¬ºMÄX±N6ŽÍh>ˆ%‰(eÄÊpŸÓYR\"ŒàræÀ¨„\r¡ÔBkÃ©ÂidêÏ†ÇòØŸzy&›™(1ÂÆ4æç¦!¤ä(ð¦ ó£O&®ý öpm™½N˜’f~f­Ú!*¿ƒô}*L(«õèÀ”8£	>dQ<ÎY 	é?Q6³dL”sÀeÆ Ê–÷-áT €#K,Öþq°â¼c‰’½ÕmºX´q¿œEƒÖ:ƒ¯ÉrWÂ°0Þ)Pt£¡º¾‰¨‰1LUBuŒåœ³³²2ù×;‰ò3¦bÁ*ˆg#!C£ÎƒË‘{axlƒbcPÒiDöÍ„¯–ZRhjhù­'G0ŸÜw>Ù©Å¥\0Ð)Õdë³f®AØ)Ò`øm¹ÁZ§!æ\n§·U¥Zè±åÔ7M\"µE‰ÞnÔ6˜Çd í—nä1jÂÉÊ±­JÏÆŽ^Q7—ÆŸ) ùF\0Aë@’H¡”K*½ÖW\n›™Qf‡v¥H)qÝÈ=ÅE’mûŸ¯ÖÐË•tã'4¼I6¦'%dÿL}]_o%‘F®&8•JÍ°:¨Y\$‚ä´OÇ¸Üb-vRË'ù[þÁ˜rÐÕ¨¶ášÊ\"wˆl<ßœs›8«HïSgcOôÕ¶Bº²ß8)èr›•ùÖµ‰l’%¶ØQcd\$–RÒ©	–ÄpñÚô#uu{ü\\-ÍP¯BQ^[ãQ\"¯ ú¾¦\rÌOA3®\r4*ø,%¹GtÝÊ™´gÄ¨u…‡æLá&œI‚îhDœ-Ç:âþµ\\, ëgÄ··°É˜/N7M0-(Ág{Œ*åé¤pD8´r!oaÑ‘ÛÖ†vs„Ýw­”ÓKÓcíý¸öDË¡ÃØ€B T!\$\0âh€iµ‘²0ÜØ s¡À8Q6R*ÔK9NÃbÈŠ•¦e„í°‚2Ç+ÙÚ2m¯üY*¨ÓE8â½bæP£Èß%¬CLÝa4’Md;K†ãOä7†*ÿ¤ŽÞ(êÎïÞ(¤¾þKÙ\0ÉbeËFÄ(ÐÈ¦-¬iHöÞ°*ÀôÕÃ\n^ƒ ¬§v2ÄŒ,GŒgÊ°‡àöKö E*Ïá°/fØ¯P°\"˜kÐ8ñï4'0“G	‹Ê\n•	ç\\¯)¦õ«¨*¶jž]ðaŽ Ñ„Di£Ž½ƒ‹Žœ¨ªHÌ²±®«âäUâÒ/¬¶ìE2DÐâ2ÃÖ®\$|ËNº†j[êÎGÅ,R.F½¦dË¥íÅÂ\0î Åâ«)§±\n-íŽêÈ6NÌT5¯6@plÈª®*Öng°kŠ²©íÂ'PpÊ’F¬£ä¢Ûq`‘&\\E²+~¶eÜã,›(í4®ïUŽ/%b+äºxER‡ÀJæÆ¿ÑÞ\nôÞd0™qµ±ËŒ~pŠBÍè!Èø±á\\Ž#²!cð(âÒ´ÍÔƒ.ÎkHwî°ÞP[Ñök	´‡mBjdîBñór\n+1ú˜e1Íþ‚Ä—’ÓeÊ—2í@UÂÜ\rtñ)œî¦ŠCp×\r@ZB˜UÏFoÂÙ‘D§ )çüã%²Ò†jDÒZ0ªðlî`®/Ì¢æ.Þ¶R{îç!d!­êS\rHÛI(ìÊíD.‰‹.,­PtÀRsÍ8{\rÝ±*B¹ QÚ©–ƒÒÄUg#pY,ñß-r(ù-!’-²ÒÅ!.è>Ò›.ðg\0Êë¢°QÎ¿'ÄLÝò²àr\$nfR*ÜÒ/)Ò	D@ìÞ+gÏ)ji.ÓxÁxÑjCü«P}	b¡	©¬¸0!hÓháÑëì™†‰5nÏ5°C5ð¶7P˜ðT\$sk bwïòÿéë2pìÉ\0ŠÄ,‹ðòcòÆJÍã1Ò3\0/0<fÓ¬œìÔ Bƒ)Põ4S¿ŒÆ-³Ç:¤ˆÍ%ë;Eë2³	=ƒx0­ÖS.öGr–¢²ïÑ¼CÅ8½äôð.¼‹\nªD{5ïD*»Ì~“Ó*!~šô8,¢¨å&¯Q#(¢¯'p¼\nÕ?ò±A#ZðEeC£ß¥,JK½<3¦ÌËXæ/ŠêŒÅ:Sá:‘~òGe;.Ì@²\$\$ÏEmRÎÆ\\¼c¢×è²ñf¯E	!-²glÅS=47?S37œi¦{Ó,³½?t©KîÉ“ï.“-K’ð‚tÙ?1«M¯\0¬èâpÑ ÉTÍ3BÎ«Ç‹\rù4ý#ÿ\0004ðø)é2”âà2ÿ4g½3ê¾îÊ{Qtôô‡ã0O’‚âçSSIÊô\"(8eBYÄTÊúxúã§‹½L(Ìv£T·q¬äâ?4©5B«7ôù;´ýK³RàxÊT²ð¤*¦µXS{W¬Ï.e½S³/0	!NêðâLÍ/INDY%“ÔðÒe;n˜q©[¯Z2ê°¦ñ[ŽÓNÑM«\0ÝåÛC‘è¦\\†–Ì8u’“C\r4Ñ+TšŒ†2)’.tÇX©5ªí†æs–1u9.µ##6nvà#=5)Kv+Q5¿&5m`h÷`¢%b/‡buä.vHV!^å¤ô.h²&J±Á,Ò3fBg`k?!YtßRtµdGz+v\0Juà~–VÂöŒh¶‘\0.¨HKÙa1Ãav ô\$5#•ZÕ3‚*Ö£k6eSócó3hU}5°«‚dSQTV“0n°m¯g'í4åj÷æ¿Q…ßeÎL…­ö©gÿfW]+!·/µ•kÓø\$Ï˜»TKMuãl¶€0©ã\\u\rqòî\$t¿®ÎèK¦Ld¾vç.ç	:òdrXB8bè\$°’WÑ¥^É”ŽÂ™uð«v0Ivp^áwn8æöˆ%nÕ‡YhŽxmŠÖÓ†\\='uÉq\n±šéíU6s‘6	6c‘á†É*ï{{91Û9p®*Qã°dèBådöh^\r€V`Ø\r Æ\ri4O„J°r´¨„ûXÈö2s¯šÇ–¾È”B%%Cj­EÄLDj®x79Rµ°\n ¨ÀZ”“p*mâÊ‘ì-ÑòŽ·˜ÿÃ·ñê/1ï„ÞÄ¨³ƒ³Â\\—î2gí†ê(XÅR!H‡gm¹RÎ_1,NL¤ŽZMe.x‡fù˜õ<’ËÐ‹énð7¤S‰\$[S÷ÿCØ=xˆÄìFþXª,Â_p²!Œ5‚C1xEÂ@s/lïHž%˜Þ–óàçjzŒâLý‘®»Ôp^ÈG¬ëËÞµÏ`,É;nå³?±ù‡ˆ¼ªÑ–â½6Âw?„?#®ˆOŽ%}B¹3*ÝY/‡f²H(þx²U1µƒ“òˆSñ”e£\\YQ9Q•y•Ë'âz–k_&™YyTM#•ì HÒIM3^ZWT%g?ËVØþf¹Äµ·!Dƒo|tdä(òDÚ’·ï‰‹\r‘›¥íË í¦gœX 9ÅŠº[!GùŽ\$Kaô·FÆ\r˜´¯BÓgzÁ%%÷”T7TÈD„T)ÌêBÝ(ÂË˜ìAxðèEYzPâ.6K/l2wóNØàÍÐ€:0óq»£lÙ\r…Ñº×GåQï”\$Ùë`µ“GÈóšŽÇN¹‘cKcE˜Lç(ùz™ÿoå¦†ôªÊÓ£q›<„Þ(²t5 ";break;case"es":$g="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&B Ò#\n\n³9ÈÂH”¿›‘\"kPÚ2²àPŒ2¥¯Û‚4-Ã!Œ*ôO4@)9MàÊõ£ äa•±p™¤Ã˜ÀŽ‹ú1/Éú×I20§4®svöÃîx†âGÒjsRkù'5èØ&\rëˆÜê·ÉC†âŽRñc	)?¸¡Dc¤X25Pê@)Š2ð™\nÐ{pòMüß\r.tŽË®K,:Œc¢0,\nÃ¥\r*N0L#ß¶‘pœ:Œª,pÊÇÎxK@CÊðÖaj¼HÌ,ÄÏÈÇ\rÈ»Å±°Ì^â0v†YÍnsš Ñpž9FLB‚9ŒkËðŒ³;ÊñM@ÓMPêð<I,HÇgZ0ê6&£\n=j0ó\\¶›¹¨­&BHÜ1±“Ä’•Ž²JxP¸Î6Ò“‹w&=S¥ï'ÌµíKO·è¸ãV=bŽyÊõ Ro1×S9(BƒHÓ ð\$:¤‰3v\"ë“µEìÿRf72f™nI2’\$J6GÌË6•±\0Þ3Ï%Š™q&\$‚¢ãMŸ5Šƒzv0Îó]è¸æ3^oôÒ³Žabö98#Î0¬îÌõ@\r®:ðaL\"7l†)ŠB3²; o#œµX6ÏÜ74­øØ¿˜ìÆ•ËpÛy¤ð\"e)£›;ä¹Q‘‹÷7„RŸI=~ËÙ0ã%1ÛoPÛæ˜RØ\":ýÃÎþÐfuX˜0òð”ðæ;­Ô¨8\r,`ÉÌØÐÆÁèD4ƒ à9‡Ax^;þtcÂØ£\\·ázòÿ—ay#‡‚\"öIÍ@t}A|¾†àÖó<Nç„ðÂ“ÑO©ý@“wHC¡D‹ðð“ ˆC’\"ìøÎ¯cL¹Ý±?ä`ƒ@5Šfyž8%QCb&tÏÉû?°Í\0À%ˆjB€H\n7´#\\FAH%CÈÑf^äÉ,:Ò*Ayo='&âÈ©g8aÈÆ)ÂRÃÂÝ0f¸ÿ;vØqs„'¤Š!HÝ p„kH‘·0|	CÇ>!„:°b@Ø	-^9‚¥H1Í6(<É†VT@O‘\n\r € †Gð‰\r‰’Œdl'é8öMA2\n<)…GJI“7#ˆÄŠ˜¶ØP\\Â8xAèÃ¡ÂlN	ÓZa::ŸÇÂŠ3f	¼Â„â¼Ô3Fq|Ÿ€àèÑ‰+WEÀ/÷fGÁ¡*D¹~Hd%„„õ6@ähÒ/Œ„b\"Cô‘Žÿ›\$&J@†¨A	\$-¥A\0B	áH)PâêCY?´F£2)F(Ñ \nœ§Ò‘Lç¸®€Ã‚Ã@©Ÿ5ç\\èlU‹-ƒEåŽeAŸ\r`·¤Å'P×°a\rG<šSônØÔe–î’5èÚI‰•QB­1ÒSÈþ!‹¾#ë½bú¢Ì‚fh†ýé*ÓöÒª•iHÉ\rQ³\0àB–ìhHÁYÖ´uŒ@	2’\nÈ‘Ø­2 ÌâK®PTÕ¹›?P²?±&%”ŠVj%áÂ=A¾ÄYdpŒbÜha¾6eâ9~:¤=.öJáJuŒ¼CÇSŒCNegì³¹ABå‰ˆ\nQ*Ž”Z•—Nƒj3`K5c)ÕL¨ÍÌHË\\¸	È	g9÷9³Ptdˆ¡É„DöSŠVX×|Æ’ˆ¯z%ã?\rÔH å	-².jEgT™Y­x9G”ð¦`Šh*fŒu²rQKyÏ!P*†*-æ¤“šß&\rc=9E.6H²TCR(a*8â!æ¨‹•È/+*å¨™`Þ®5V)-ªnƒqHcÅf¹½cFs‰Xfšð\0œ{‹¥Æ(ÅV0ä\\s‘ñÞIÉhd™óR…ìèÊY\nbÐZ‹ÑÃ_Ž\\†¨	2€–Ì8Ÿ ä7oU²\\ŽÉªç7—œã\r3™Î¹PŒFº®sÑ3Ðf!!¸XBBƒ»;ž0±Šöx[‰4ØfV­‡3<G¡~T„Ä\\þ´ª[ŒIN(…j%I\nJ¼(ƒ:+)›ðƒªŠƒ5\$ì‡4—íXE±)»WÊV&ù˜Ø‹rÆ		g–ö_3‹?9j Á&e^ÔŠ_.Y³kä† ÅÞ\rÁÛªÅ=·„I`n\r¨/¤¦Üä#jSãTûºâî¶Ñw¥£5HÿÀrúÃðþ¨¯ŽŽÐš3”dúYTŒ’˜jÊö5Ga±#oªB8—l÷¹ì–vsL6S*.ÖKÃ1Juú@ävãÑÓö\næ]\0¦‹ï´hÌªäüÛ\\*7óv—TÈÁŒ*TÛUžqÐ'Þ•™ºM¿sú.\rh¬g£×\"fÊZ~ì¬²Ý2ýï“:».?}=fÀ™±­>ÅúZäG'U\nËQ¹Ëäì[ûfdx¿~çºÀC¼Söò ÞwÔ|Ÿ\$ýoÁâ<ð½'|sÐ˜€(åÉ@ô·]RôpVÙÆ4E—£¶éÓâbí	†öõé<Yw|'à½r«˜E“ ˆžfúCvŽï¤Uô\"LülÏ°2	Ù“`ÄÙ…HnlEë£=Õ¿R|+»L[¨]åßÓu¤å×	\"v=äðyíÃÊ>z~§oÒ¹íkT?”™à†W·mÁÀøÇu¸þÈÄéK‚»†0öÁ.¤7ð]¦áÃžÂÎEçl1\"TÍI¾G£~_„DŒ\rèäÀŒëM¶¸&mÌp¯øìçŒ0pQ.¾Íº‚`kLMpf7êïÐ\\<þCäXPo'±°@]®Pf\nrIB@Ç6\$Ã ÅOŽðÍÚç¤¦ÈP¦òŽ£\nåYÏÌñíé\"P Ð±ÐˆlÊÏêPõ°DáMÓ\rc\0oÎU[ãŒ¥KÌ‹\rvJÐÚìò¾ùMÂ„ËÏcã#bQñûËÀ½-PBFV¥P9ì @úÍ‘2'pç„<‹Ð´Í€/ÀÐ@¤a\"äYfàãÎ\$l7esjòÕ… î±fÀJôLqnÉô8ƒW#\$I\"L.ˆOqd{È' ÂÉNè&,p%&VÀ¢1¬·À†GÀØhÆ0È˜ßd9	g°×b,Ú`ätbe	Ðui@…'\n ¨ÀZp8c-dÈÎâ-&É‘¢øb0\$HÌ¼CB6Ì-Z¬jd©éšU/¸Àó\n¼2XÑ1\0ª8ÃÈ[¤8/+èfÓKà“«öQ¤ÜÑŸÀ  dÔEÂÔj‚~¥db:rdp’–æ \"ì~9Ë4NÄz9ï.6kR#<ôÉ\n2(ùžwÍâ4¤H8ˆë(Búäò†³GÀ¬-êˆðëbüÝåï(W@Ê2Hš8Ç\nµ§Ç+\$\08%DH¤h>Ë ®OpßÈfRd’7eÊ¥ ê].r¥ne/f`öÎBêç²¦Cü#£\"QöW£^DQƒ”s#Àî8ÈI¥àá,ÎJ»Ãôv£vµâIƒvGà7m ù\r„\rêkDºf.~êÊ…„·*ó>dã`&ç¯1ëY222¹\ndŒ1E¼EÀŠ/J¼Þ&.V—€	\0@š	 t\n`¦";break;case"et":$g="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj€(L3|²ˆðÄ4Œ€Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-á\0000°€!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd(\\‚ÿ )0Þ7´ñx§3q|óŒ-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€P’6Ž,‚7>*CŠ2µÃzÓ„\n2R)Š23XšŠÉxÆLk¬\$àªMû\n¢jšˆ³‰«ë~É\$”j+	\"(¯Sª£~Ø¡¨å.:Ó*ÔHÃœB4ŽCPÊˆ ïò¤„µê2:,îó\$‹½tÊu'ËpŒŒ©;uØž:'@S\$4TIZ\nÀ-0fÅ³)ë\$6€P 4×ø©X‰PÒ5j4NÒ×Œ:ƒcL¹ ¨¨ÆÆ0HZ(;h ¼òÁÜˆ­dúCÀPÝJ7°ÃC-Hµlè7mú~¦ËýR¿„É&¯•R+!ÖÕg3³Õ}b¢`òPË&'H¬D2 Q†J­t4#;¥c’J©Î‹£æ*}®k~M›Ì¬Y™Å÷rEì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍ\n7(CÆÂc5ð¼MPæ4Ã–ä0ŒèËØ…?’óŒ¡@æ¶ƒ|6Œ*˜@!ŠbÀSØ•Å,3HËHÛ§7cMàí‰–ûh£¥¨Üž°ª3i¼\r6böD£;Öªsœöø¶tjS51#*j›°°\"T€ŽqÎŒ£Àá\\ Áp@7ã@ä2ŒÁèD4ƒ à9‡Ax^;ýrIhŽArÒ3…ï§ê<5›§r7áövTâæÈÆ°Dš\"z>ÐðÂÁH*A™ç(ˆR%HÊÔøíÌK¹\rë6\r™¢H@ÓÑ¿\r‡õÊ•BjJO/GÈ4Ÿ@ÈwÌT@†•Â:/!£#†@BÒ@P†ØûTjRƒH?Á¬´½õ”cš™{&èÊÂZë\rñd¡É‘â\na‹ÓÚ=0¬ö\"‰\rœ!)?)ØŠ“,	)3§ÄÁ³LkÁß!Ôû†d¾éÂ\nc%Ê?Ÿ@@Ã`o0qþ9ÓHMB€O\naPµ3XÜ#»:¤™GÅežj[.8²Vl„!/UÌ>V:4ü@p¦\rP‡C)×ùì52F›ôÁˆ	€€3'I)\0F\n‘)HA”ð·`ÉñÉ\0ŠÃ§âŒ	z2%ÂÔäàP‹IOç±”xY\"ØU…¼'„à@B€D!P\"€©ê E	~#ÆQA[\$ë™æÈå\n,áPàà¹—zñ\"Ê4™•@a«ŽBÔ€žÌ2.V‡Tà\nC²´i[A=ä|Â²YL]ò_!†›-°ŠÏ	‘~.­1ÂÙ\\¤YÁ5LLœxFõ!¹‹a´hðDeLˆãSg\nÑ·”2Vš¨PKëQÜF*€Âœ8áÖ0µe¼“òUYpŒA\0bÐLF\"%ÔŸ\rÃeu)5’™\"[Õ‚\"ÁVBJÂàpg‘r<…Å¨¢£•ØCHÁÆC’\nÍb;ÎÔð…7\$L\\°sgnR«¹UÕd‹xV ç8\$˜Ô„Y¿!D0œ© ‚¾Wy°’*>FSP•ªŸœ\"Ö2õˆ¹Ž	ÁE+Äƒ‚Š Í rG—\$•]ItÑ¨T\nA\$#„pŠ‘ã„é²†¹ÀÚÃUD\"î™G.jÆ`áº›B!L\$¦„B(V¡8*4yRÐËM«Ç¶¼¶ÙöC	\0‚AÃ³JØ(JPaÁÁ¢Ú0ÁCs¾ F”#BáUà àƒ–ª„Á)qÍv.ÌÝ”g\0I}ñë[^Â]ÒF–pªÒj°nî1Ä5AXJR¥\rh…Ë\0ƒ¡Ì•NreR>!¯()XÒwréáHÄœø¥ðîEŠa‡äZašP)ŒÆ6¥Â{(™Ù\"ËéN2C³•šfî}c6+0\n@Ó”Xñ@\\Á–#)ýõ	Ñ=9'‘c)ò2AÌÛ•Ñ†±\$èVï—0u3&âã¢dBPÕ¤¡Ä£»B¦É­ŒŽÀ—ãGk¬ê¸WIú§lšÃJ\rV.ÂQkì´BúXËöQVÔtƒSfÆÉÇª(]°ÚŽÅª9:H¨-¯³3UU&×ä ZQ!'\$Ž6£±«ÐÊ^X‹R%º·sY»ß|ïZ\"—/~ïhIÚÛ©?vÖ¿>/VeûkoÊ¢ÔL€Põ×FG;€`†qÂv=TÙ[_&^A“ˆòyÕŸ)¾J@y>À¯ü‘›3…\\ÕÙqá…ûZ;-\\íªá¨iû‹>p¬¹Ž[Ù<´Útr‰Ò[æÞ/}L2î¡µf_È:D_d¡~:DðÎ+·i.LoŽyÇ¸ýÕ‹YÅsˆæ½ÛuO¥ì\$cÛ®dãœ»8Çw.qKîÖ/}ß·ÜÎã´{™ñÛ°Ü½„Ë kj MOÍ B©	L‘v@/6¹O\$Â¼ò¶óÒzŠ‹Ç®à	×”¶{U}\r¡E@8·x9W«vŠ(N24(B½p]	¼Ñ:ó…ªÖNñsg!g0/Ï=KJÕ³¤¶{¥Pª5J©ú¿Ëê7ê‚…H©OPä]3êF/½õÿ~Øþ/kà¦ž¨?7ßTæþ¦6Ÿú²wãØWð^_é&áða®vÿoê8Â\0/æh´SÂ+\0¥ï„TýÂp @PÀ,\nŒ…mHñÁjõÃÂ	,QÐ@Õf¥£yúþÊ¾_#ëÊÈ¿)\rÕL¾¬N¾×Å6ï Ë-¦ûM¯béhýeFô\rÅ”ßÍJ3ðsBÏI˜Y-èYŽ‚iÂïD^.'\nÖî\$ôÄÚ\$ƒôËà•Ž¡Âk\r&IŽ°ðG—ˆÂH¦ß«A¯LüNêÙoJ×PæePÂzð¯« ‹¤X„iÐû+¼ºf¾fÐzì®±£VÚë1#‘êQdŒ­eße#*ºiñF»ñ<Ä¼‹Ì½DÏøÿÃÊÁ°Êñÿí®Jä7ðM.´=Ä³0|ØªËàºBÌ†`P	[\0È½0·Fjd&¨\0ØÅð¶1. ÷îZ‰ñªÀ£‚¤òðµ(Bº¥‚ý1„ÉÑÄØ@–Û Ü¤Î2ÇíµÂlíÆ!%r.®Øà*\\Þ\0<í&''.H`Ø`Ö&e\\Db)i\0Ãâ.h2=€ª\n€Œ pz€Üe9¢jh‚Ò\$¥ÚÉ\\\"jÜ\rÚ«`jjçâ,	²FÀò‡)\$C.°/äcRí¨9÷\nðK(‚B!BlàÊ[¸#ãœ÷h:WdÎ\$†\r*ää(ñŠ(ÐÅZºƒL_xàqÐñ† U±*ñ#L,¥tá­¯fžia¥Ð§-…%Ò×`ÞõÈvûj±.ka.±âîlÛåø4£23`@.i/¥ˆ\$ë0/rôòE@´)üÞ‚ML©„NÄðDør­ôf¥\"“î0£Nâ95%äQ£ü\"†¡`¤B\0ê&Í4H‚72`@\nÈjíÒsfŸÀá2*,ä’&OJZ –„d† ‚6Þå ]RÜŽ\nq)\r8ÿîjL°£.ä°¤ÒüV`†{í4nY7@Ó7ƒB³\rÈNqÀÊÂ²B0Œ7ÃXä’†qŽžDD-à	\0t	 š@¦\n`";break;case"fa":$g="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9P“&—!”×%E‹ðö2Íz˜'esÎª 0“´–ˆr«41\"Èˆ=Ò	P¥?Ä:¢‰–oñÄèR@ÒÊ’\nÒ¤lœd¨ª,\\¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘«úC³RêË<–1\"K ÒØ’6Ž`Ê6Œ£pé@è4\rã @:\rá\0ê9Œ¡\0¦(‰ƒHè2Å*Œ(ÁÂÓúW;£¤3dî\$¨jBÁÂŒ»ø*ÐÄzî3MÓ<Þ\$¬kúáŒ	D¿S‚W§Èµ\$ú×ePÙiUšÃÔPªLÀ¿K,õÛ’À81;\$D#¨Yc±¥::€­0¤/³=R©±ò›‚(õûÚˆ•L\n`D2îõº÷²W~ÄÒbÌ.%}z´/Ì½MS–¢húWmëa‰i*wƒº.ÓüìÂa³8Àn´ëSäõÕXžUñ½dÝÝ,¦hÚÖ8öwX&B»9ª{øç°ˆ\nÛªx<ó2¬Ùû¤7Î¬L:wœÄ¸}8hyuM£ÏþmŸBQ½IkŽC ØØ6I)D«?ìòÀ¹ìˆ§ì®ÕO’4ÔÁ˜k†@£ÉNfÀïzDF(V[úA&ÄQ}Îi\$„B%mêU‘ŽH/pJêÏÃn„Ï¶œmòlr„þr¼½Fs)+õÎ\$<õU[ô;â€!ŠbIã]Ó eÜ§DÈp]Ù¬9û6!¥Êe…98ûŒëðý¥ø’íoKy}­WœƒèUÜ%6êãô…òú«ú–dºéÅn,JlYC}K¤Æ˜ƒ þˆ8|éÜÚ\"w¦ž•áC\$¦tÀÂ@r¡˜‚ Ð p`è‚ðï	Ápa´ð†Päƒxrà½DÃ@ð§Ãps\r!¼7ðD¤Ã2¡Ò…ðÄn\r`ˆ2²vÙj\"\0ð†|˜ßó—V-É»¡ÆAHUÅMî²·ÎÒÖa@®0³¾²z•Ú'5\$ÐöpæI}ŒÉDá ÂÌ˜j7F+•°²–u–4l0Œ]¤7L@PhI4-(Ôä Y(¢Fkø…o.u'¢”ÚóÍÂ\nA‚±Â4™N™ŽS¯)%,¦¹¤(93+(5ÓFs_; E°-é¿d¢ô‹i¬eÙˆwºHÐy\ráÔ@Ò¤ƒpoQj`7)%C˜ ƒAÄ:†Pæ¢Ã0r\rá´WC’“\r,1†ÀÞ¦'”àÀ0†u@¬Öô_†¹W@tbÈQ+UzE€•(Ã³Nèl²?¾ˆˆú5\$“\"\n„€ÊYi\$ñú5•Æ0Ìè›Ânõ¼I…²}¨¢+ÄáM„Ê+\nòÆ£²(Ó¦w‚¤’Kœ‰±ƒPýDC­‚iLÔúXI#ý3\nØ®½ÔÒO’±ž|†ºœ-ÓN*¨\n	á8P TµŠ²@Š-j^i†(­•å fL©…¥õTXWÿ&çáXDô C—Y-}ÖÂÒ-–Á“/DDV±h ÔÏR4=Í¤ýøìJ\\¼–w‹Q	Ø«>›Ÿã,x+ÉÇØ“b¡ÅUÂÈž,JÝªh’:­[4Ø­	%H-MôŸfÔJÐ½ze©Ò4…v×mËh·56+å’bÉ38«¯GåÖÅÑÒJöHõ¬EæCEq(‚@éF\$\"ÂöJ¨¾ch„DçbG!¬µ”\\¹õ´AïaC{Î2ÃVêýaXëÖ¬ÐÆ–×ÃÑ\$í–Î-d/&[-ÀKŒÕžÕj·ä#+nüÝš×Ø”}kWt‰\"ô¢‘*c)u…u'âìuÐa*0	XþÚübvÌý–*…•»ÕvùVÓ-]¯·-ë¥y•Ùº¨îdü.ØÔ~‚+\rAíƒSÑ>f	ßb³‚\"Âeu¤*†ä…Á¦s‚¦fÌÛ¡À8C>Qƒ4è<Ñ&3&)ª:Ê\0¼¶;\"yOVzË4Ìy&™Í¡£·\réèí'-†Åá;Q`Ì¤¡{ª9êÈf/Ió(“Ís}vZT‚ê’W¦Ž4Ä?áuaôíã~y9ë'2^r­2°uc#‰1¨Šq\\Ž§…\"ƒðãjro‚Gí</¶j†»ÆWi»,ÜG•ªf©gf­è2:âø·ª“0Úè<Á‡QÍ°)Z‘‘«“µ‰HJNDM–î%ªk®Åà«U7Zh):“p‹N±ÂÈ¦|ÜSœKÂ`^+øÿ€k®;®|¹×Uá^œ+ø5B_£\nœÎXÅyc†Å>¦\r%\$ôKÍ3Þç‰º’ìa‡ÏW<±6yô#,i±²7;ÿz\\9JªLœÃnÝ@¥‹4¹]ˆ@(@\0×2l.“¶Ì|tñNYrÅ²NÑkPóV¥n[\rÌ·ÆøˆÝWn»—käVâòœÑÜ-ÛFA¸mž4[Ûn,ch§Ã3®9ä›=Qe^rajR	)ôjhýò2hÖ/Mÿâ\\ÈÅzÀYìµä\0¸åïMaýM0âfSO-¢Ò‰_²×Y>RÄxÿÃ7aüjqÔñ—âŸæÕÈÖÖùWîoð€’£,u¹óè•*ÇÚ³ËKá8!ñ—ôlcñ@ú™ âä®DN1áò¼	 íd\$Œ8Ê®ìH™fnÝ\0ffù0t:ò§þð¯°ððÈ,ÂoŽUKŠ©ìÄðï6ä®9P,Ípû'Ó\0¬g\nÌÎýìXMB@ÎÐ~#î!DÖ[˜”Jf(Ãöpí¤0ŽP?/H¿è©ð€ú8cP>ô®Q/-°:Þ†zÇMüú&4.MþF*ð¹Ð D°ª[GP´8°¸ÃæF(ð:ÈünëýC¸/N9.øÌð¢€PíÏ¥\nFdÆpãNU0Þ˜pŒÄn³îüíÐ¦eJÿPC\0[¤Îw0æöq(É•ËŠB‘*Ð°Ç\"·¬gÌ™PEÎâgÄx>Ð‡c^cªDzQdÝPø7°ÖªÄÉÇ¡.LÂnýÄÎg†‘	–µ„X÷Ízst¢¦¤^Gdç¸Iï`1ç-‘:EáV3‚‚¿nÆ)ÄÒõª\0á¨7ã^ÑÎ0¯/€\$/„Ó\"nEˆã\"ö' ãŠ«QrÕMÖ5.f£@@`è@Øiê\r Æ\rmâPJôñêÜ„@Y„6\n ¨ÀZà7‡º÷¯^ªQE-„óMcL£ÑÀÂ¦ÖÂïî'/ÒºñH7„~¹\0Œa%ìLƒ í÷dÌ—²lïÝïÚ°v¡ï—!ô+ZiD6¤Îb'4(ëNØªŠÙÌ%’ªÙh\"VŽ­‚ÀÈÎcÐhàbÎV&¶1Ž\\MN¤LÊ°MŽ¬þ2ÐWânüëŒ³°’ïi3.Nüä˜¾Ov¸ŽC-2éÎ¯/rÖÂc~ròÞ¸¯îüê*”,i&Œœ1¥Ä5d\nûn4å²äX.`¥îœ°Hûeü^²€ë‚b( %k\ni’Ÿ\$,obªG¥ößARŠ,Àó»§.Œp´[²–^Í– î =ÉnŒ/úÖ…b%¢j…D´Ã‰J@º1Vºrðvì©.³œX2ú{jBß±Bó`ûŽhÀðöÌ‘Zm*G6eèG²‚¼«ºoÃ8";break;case"fi":$g="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ½Ï[ØÉ§‹@ò84àPœ:¦C“æð4¯Pæß„>Ä	«›Š4¾Ct6!'mJt7.àP­ €PŽ2éè1`ê‰|6%-ƒ“ö%ãk(%‰r`¼A­AI&#Jl–0[nŠ\"ÈÛ79O,ŒØƒ¨\$%’x8#˜ò×\rcLÆÑ±‚îÄ	#hà€¦SíÇC@Þ2(h(êí„˜¢ÅH)¨¬–4ôBPÄ	ÏSØ;­œ0m:7-ƒXó%;+m:”µí‹*ÐëÜ»¡´\"R; HKY5£G§îØ#N£Z‰\rˆ#8Î9£;aŽ“8Â2L3?8¥ŽP˜ý4ò\n·9£*JÂ“ôÜ¯ò‰5´éÂ&*\$Sì(2ZZ‚¯‹òx6- ÖõLµ&¨\$úBEÙw:î:ðòÜƒ±	K¦ÝÄ‰ÅP¢ J@Ã00ôæ,Ž¸ØƒÂq.ãXæL	ìûCxY¢£	~ÆH¶i^‚ü³åüÂï1={h\r‘ÞX€ŽŠXÌ3Iã(Z¢\$ÐT90¬Ê/¨Ë48Ø@6©•@Ê8-Š`ÜäÎ­Pÿ»`Ý8Îj‘7'KB4¶™*³©ÅàñëÕ¾¾Ë´Oªà¿(\r\\±Zêy°cˆöÈRlÛ@Ýµ#»cS·ê†äÅ;¬Úöo*Nø2ë°ËÀ)´#‘Ëð©çµqY¨ä4©šìžb˜¤#¶úSÄáp@&-Å.6a\rSx:kºj*ùƒžáªóñ„ÝíJj\$£S¬ƒÝÄÁ´Ž/;«([ògÜÌ³ ŽAl¨ãj³6Î®íJBLRÊxÀðŽ†…è\"\r\080tÁxw‚@¸“ºòæƒxrà¼»ÁÀðCqÿ)€¼ø4@ H_D™·‚ |»\nž€¼0ƒäþQÒƒ\$m®Tb×)ÿ	±7eBÞûáLÌþ™´ÑUÉ¤T§0¶RôÃ9û7jåÓNæÊ?((\0\0ÄY?‡ú2‚œ\nLÑXuì÷¤¤iTUvÎáÝ¶’õÜò9%ù“P–]Ê6'§1l”\"îLU!‹T‰×’~ËÆ	idƒª‚ˆâ&¡(Î4†òRn=f¬R*H†CÊ`bØÉ‰Ñão!Ì¾Ÿ¹Y+ú´&®5¯KÂrH€O\naP©9&)¡”Œ¬ØÛå&GO£%“‡\0ŽÉùBS›ÐnÁ¤3“’D¿XÂ#0	&’I”™' ž/öŸ!\n9<ÁP(§dç•A¾(*\rÌ°³þPY+%¤¼˜’òR£ˆ±Ý8„ƒÐÕšAbË\r!½–à@B€D!P\"ÑÐ@(L´‘+©“@ÂÛ9È< ã\$^)ŠV\n’À8!CÀºT;Çö?4r¡æñèG,\r\n˜¦ÚjŽÙ9hÙ®)¢\$´³\"fY9Ut°DÏ\n\0KŒeŸ?¦JKÉZg¬lÛ´’™Ïv(*9HEÆóZÌ‘u*êÉ^Œ@PCGm“¯X±A0ÆÃ‰ÀKƒ”\"Iþ2ÆxÒ~£YÛ£)þ£G÷ÖP\\¼RÈ=·Ë&S²qnç¶RÑª8nMŠÍ^HÕk½e ¯JÍ¬'Œô4âhei&ªTR*%Hm\r-&€Ü¼#bÍTätÝ¶dÌKÉ^(4]»¦Öêy¢)fŠ\"\"ðãIY‹¢×ÿ\0ÓzOùx\n	´<ÄcT“Ñ9k\$LÁŸ:8œ);B¦ä•À´0p\0PD›ŒŒ‚ÇD[.Å#\n!„€@Qù:uh…dSƒç<©ìH!’ˆ;xæ›Izm;\nÄðA‹ˆiVÊ˜à—Š`y@­ð†—JîëÝ>ØÐ4šbvâñ½šÇNWãüƒr˜È­qø˜öôÀÃy¾—dÓ¤¢mÉ«‚TY+½×˜±Âo5Y21™SÝLBâ>FœŽãŸ4Lr*•¼“Ä?B’u\r:uŽuE¨°JN;»ˆi6†#¦HòH(e#@ß 4i3#²Ú\\07š”r å|0DfŽ.—Ñ‰>tç»8Mòã-—ù‹»Ž6&uoÁ)c]EIæ¹‹4\$œ¸nLZT\n˜âi´´Úíc(. 8W•\nŠ¯Ú†—.Èœ´‘üàa¢“oe[`_´†Õ9)\0:•tl´Ã4[³w _¢fõ^Ôá*€¦À|ÈÙ:³µ 9Jšá ›Ôe–B.‰å9`¼\rÜë¬LžñbÛÒæÜø‚iéå>\ntÑç„(PT8)BÛô©W—#[÷V’®{I”ªŠßLdÃÏ}ïKšV]îa9Ÿ-æ¦o70Ù%xèvö(×\r×¹d5¾ßoÉ¸¢p¸ßP=Š^gÙÙ/\\v™82d'Œr8	ÀS°\níØÛÖOŒyG´eP­xÐüQ>¼Ãktvj\\ßœÝØÙÇõžgÝüyØÿ|Ý‘IwZr  žAÒâ>¼‰}w%`Ì ²6B§¡¥¼wÿÉ\rê>¥€º‹Z.¯D]¼Ÿ%°Zá)Ñ¹¼žÃ×,<á³ñwÅ^k¸Ì7{S×±R“Õ2´.%ÆÕ¿yW-Û¯n*£5Ýó§ó?£ö³Z÷è]œS…Cø\r¦nDwîs/¯óýënïÕüg3ºf¿ûùüÿâýf\ny…Ò\"`˜ÒêŽ\"iH0Âl.¬rtŽÂØ\"Xn`íl¨‰ÎœýÂkÌý\nèÎgŽÀÏÆ0F>\0ÌX%˜b¥<ˆk\"éæÚ/Ë&ÞXoþ^L©Ž¦bLN‚4ä%ü\\¢\\„(„ý¯ê&Ð„.ë\nÿ/®\np“Hü&¾ðÏ®ÿc¶\rp†°£ü°¯#þ\"*äÛÀBd(aŽöôD)n“¶½äD¾-Òï®f½æ'o	\np@ü†¸¾öüOÿkÝ8ÿñ\"ð\$Fý0ÀãÐ´l 5Îcn«D¦ÏªÚñ.Ž«H¾ðÒÛäÐgp*ëä¬	¤ÞÃvÆÃÌ_ÚpPp#'VˆG˜.OêÆp]‹\n\$°þ©y‚˜c¬ÄDDN:ãÈÈÊÊ¯~×g¤%äî@ê\$žÛQ¤Ê †G`Øcn§<›®(ë0¹k{ÍÏd\"RÏ€õàª\n‡€p0‚ŒŽÎÊhÂ>m±Lj5JíôÞ®”Ò Êëƒ”&èw%š8c\nc¤¢5Ò 8£?vDò(±#?ÇV/cX5É¼6c,V€ÈÂdwc\$é¸crVÑ1güšå¢^hÂz«/ÍsAHh©fÒÐ-Cl“­Âx?ê»(’r4M  „(ÏÞÝã}Î8Üò˜­í.(†À]2ŠD\r–úMÈYÇPšåR/ÊÄ	 Þà¸Á)¸]P\"n,ãòÜ]Dd*ÒÔ‚M¬¦1Àš8æk£¯*BüÏ²¸ê¸”	àá+BD`£nÇ ç1£rÕ\nÄ^DÆÙ…¢Ú«Š¬5Â6ˆéJË%Ó8š*•)ä¬ü¢~“\0001s)’¾ý” æ\nDeêLÎZ-\r–D\$FKb>";break;case"fr":$g="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@*#‚•((Â7\0Pœ7£*Žˆ‘zPÝ„DÊBÐ0˜es\nŽˆKðÓB“82Œ#¨#²q£&±'	Ü\n#¢˜òç˜eCt\nhcSÀQhçF,R¢¤µtMt+\n»#s&°t|í1©¬_\r¾Ìé?»jÕìµˆb†Â»C*<\$ïB¢ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü)Š”2O3Ú;S«Qòº6'®xäÁÅ\$Å1Œr»\n´^P0ŠzÃ¤ñ’È2&62t².2xÆ€HKjZÖÄ»gŒ¶½Âº\"3³qCŒ\0ÎÍ•#=û\nW\rd›1í2X¥ö©†\\Äã’¸Œ˜ÆÙ¤cÓR\rµ*vì¿ñúR:§Ã,1I7Cì)Œx2¥NÁÉEhŸ9•â8Ž¦T˜È`vˆÊíˆéPy%\$²_ÎŽ^æËo€bWÉŠz1NØÝX7OELù DIæ›Z#ƒv&\"9¨*É¬(xÞ?¢@Ú5[¥#¢…ü»Ú@Ï>#÷Âèˆ£ÆÜÇˆz¥~Âä8°NéNÇ>cF¢@É=®3î‹F„YÙ:”4%ÍzøÂ§B&<âT%ú7ŽÛ±¤s0åœT¦È=\\+Ø(òÕYÎ\0ÝeÊ)N\rÚ˜HÝŽ…ÀH¨±ó³‡>Â¨½Èd»'PÍ}[Vß„xêÔö#'f[tË¹.'B Þ5åá\0†)ŠB3Ú²ÀŠK«AJXÊÈ7WY«)pÚÏ!ìªtÀ³C*\r%„Èò\"#	-=º„Î‚ÝaqŒÉD,RºósÐ¨}L†ôÞJ\ri#%õ‰@5ØuAá=\rT3ÐD\ràp`è‚ðïÁpaŽØœ’àÎÙ|8bhhì‚ðDÈ“k˜/’fÁ>m«A¬²òà/ ù¡)”®ä‚˜\$ÐÌ§dû\r”QÌ'\$\rYú;f¥ø”HÔ s9Pì’(ÂÂXÞ{!O¦a;¡t3Lˆ \n (Àêr®\0 ªCLWÌ`s\$!¸’œ”ú¡ârc'„Ì¼7LÒ £¯F¦UL”BXCkžHd€§œòRdàÉ’/ž3¾¨ÒC:–&y2•‚ii§5&®•çÚÃÉ“!Fí”VHÉ™AI(„„fDc¨(îD™¨çXqYA­mnU¿ Â˜T'Îð.¶…ŽªN!’j:Æ>OßQR63•j±£.btö'¯‘‡E“bôØûŸ&‡ü9.ö7 Â¢˜Þa©ðà|2j¦eu’\"–VÉƒ*N%t#I\nyT¤Ä•’Ò^Wf”Ô&\$¡\$ÎuL!)^†ŸäÂ“	jÒ\r- ž\0U\n …@Šª8 &Zœ²¥L^'§bŒ:\n°Ãéa\r©„Þ¢tR¤‚c;¨Ä'‡	8GB±GaÆ¶˜3òƒ’\n4RÏÕŠ&:ü\raóHd@9aSEÏÑ0†¼”\$:ña¬AûX%:™‚À}ÏÉûN84v’Rˆƒä/˜¬–ølSÃH‘Gd¨¥y”gdBþ¬m5ÀÅ—\$UoŠÕ6F¦žÛ¹(·vvr¥¤K>¬\nÖy WüÈRé ¯ 9H6¦ÓÔ!%Üž¡&%à\r»R^“I”÷Hs0fÀ‚ì•D›èjE+gD\$©åPÓeZARè\"rú’	G0a±2[y9gÁ@s)’CŸ\"XcÜQ|eÑš\$ÐC\rõtÂ™’ù‹ÔÌ„‘>™H2U]â%|`+óoSíâ¡ÌªxÁƒ=?RV¡²õèn~1£r½ÒpÝÏá83(¨9(øŠjY\\Ù5¤ÒvÒ8\nb\$;&\n¥‘ÅÅn·©ôšÑÑ©¡P „0²þ)A†R:ò£l˜d9AÈÊ›‡e XüÎd®9i‚\0^4*æm-M–YƒeI äöÌMHcÁŒ1¦æê®%·”öîtŒÐGaãJ‡M.j›Ó¢£O½MäÊV¤WºšÚGµ€vjN3J:JþNž®‚ÕHVêý3¬´ó¹Ù!–g¸ä/³[&˜Ö&wNm¥«63oKL'c®ëm%ØÉ«+þ)kn¡ÉÃw	 g#PiË²‚Â†Y¦l­5¦à(#\"vlX‡aÁ\\2†-¿«UU)¹«>j¢º÷XÉ±ä3>vA*V'bB½Ÿù		l½³k1bN‹ÚAÐW]˜ýà³Ùs0'¶¸TÈkbK™Wüâ&ó§G«¹îºP=ô1S´Zèó(ˆK(>NÖ;!f=Ož†Sð~µ?Xo\$ËŠž‘Í:^ü'Ž\rõÂ»;\n3«,{¬·­IšnmrÈ\"Wpè‚†t;x˜WOà¤q«õj‘ø75\\I>@ÃÌK´^aS«2*%\$¬7b|5‡	@(«¬4Ü`¾åØ®©³ä'²ö|ñl»kõ-úÞç>Üû+×±hvsÕH¯[2™h©÷V[Þ{OWÖùç•×ˆ›1´«ƒñ\rÄö¤t¬5wÖIï¿ç¾¿ K2wMçÙíß¦}VŸõÚïÚù]0 È…™Í‰ìxË·äìSÒ. Öú/Qê]N.ÖþI°ùÌ¼íÀþè\nÖÍÎÿ‚éO, b®«h˜èêzÇ!P”ÔëË2øljç¬n§Ð.þ\né/üíP\$ÆÎÍ¬u\0ŽÎüŽÔ)J¸sP#ŒRGh.ŸL°Þ`ÞßNJš	Hžˆ¬Ct'ÊÎu€oÃh\0òÓvnãÚÃé¢ÃpdhÂ /É8=Ì³É]€Ì=ì|‘EY†`s\$J§\0‡p?Ä€Ãd.édÅ®jÍL„ùðb«ÎÖXPDìðùp\"X#»‹Îëí;Ño€î\røùª6%ôé£&Ë¡PËîJýO¸¶n…,¼¿Q*íÐúü®Q(èÏ“ÃÔ¬‡Q'ƒÓQFïë(nPæ%›¢H@ÂåÌ42\$Ì&Hð¦RŽxìPo,Á¯aÑH×o‡±ç°\\DÆ˜XÂf\\é8Ä0æŠ£äZÃ¾WK~ùÌf~,q]«“©é\rªÎcc*fdbíidfÌÎ|ÁËf´…j2qì!q¦íã&øqê;±ï 1>ß‘®Vqú1þRQÒX\nÇÊÐ0Ñß.¿4ýQMŒF&@è¬ñÆÈrFER6`,ŠÇÄ|ÏÒ1OÊB¦ÈÌ‘!J‚’TÇ¬%¢»#ÑñºjÒs&’xÆ®Èr‡%„~Dëô…L´Ë‘6ZMàE„Í1	¨EÌÓ&Ñ ûÒ¦ÌäÙ'¯Ç'à	ôúì¬EŒ:êzïåâ Ç¸Ð±¾!bFnÜÎƒ6dî‚Ñ±Ö¹bµ’òâ²øòâu\r#²1çªv&f!Ì3ÜGªè…-+ÎÒÚE©2ˆ0&`ù2ó\0†,@Øj†\r&l5c:ùêÏÃo!”'/¾!-êº°53:déHÇÃ3‰Œ© ¨ÀZ\rÿqíÅîÝoþÔ-ÐZ³;bÀ¥Ïðó\rÔŽÎcidpÏ	5Å‘I4]äšY…Þ#°ú1äÓ*©ìcÌ”\0E<`ä‡ó[5ãˆ™‘ïJpð&Ö`’ŒtH\$†ˆ1Xïñu?Ãâ\r‡úOVEØ3£>EéŒ;nl)S·3‹[9ÂÄ;)ž×«Jí”\$íÒT²%\\CâB3™BpZs–ó3DSþ²³C ºF²ÓÒù'8;f/1\rÂ”Gô#¥â^‹îVLþ±”B¿¤Ý)jÒ?ÊÖ¦V¸´’ô”˜¥ŒLbC¤’K=²¶–Dµ‹›\"†éŸ*¤ö¹«Fª\nÜ%„ Í@Ü(ä¾@ãÞÄš–è1çwBÃº:+ V‹\$±qÔfIHöp¸·Ôòæ\nò€fènÑÕIKL\0ÒÂâÀ² Òí,â\\¯Œ´ÊÔ“*>F@ uàÜ";break;case"gl":$g="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ ¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„Bòßˆc\n†ßˆNêQBÊ¡BÀÊ7Ä£ äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷D¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‰)\"AÃ¤H1pÈ›ÃÎH¦(½M*h)Œ©\0Æ1Ä+êS1DâÚŽ;hä:¶HK~&ìjŠÜ5-ÐNSÉspÞ7È˜Þú¬3»1¡³øÄ<´ HKYVŒäŸEQˆ«#?4dÉBÎÍŒñ”N!>ãŠªˆ4š¸Ì¡Žsk£WŒ P™\") ˜Š¨\rœþ¨&ë` Ñp tÌ•Î°Ë1ªmÛÄR¼×tPbc 7lÜñ|#¬ÆŸ*tà#(Y.Ó+R\r4úR!KêœÁDøÆ4ÜŽ#¨Ë'lÝ+’äíú–'8ð@º93A\$Š\rCUÄóªJ“²¢(ñŸ±ùHËSßmþi0có“—äÒr\r^Q­û>Ê´wKû8LÊ†\n;ä3—pÝe¨í”þ¼u{Zªk}†\$SÍ^0¨I\n¿V0\n¬þ¦\rØPÞˆ›HÓµî°™n:ô	ºm³Îñ™oi^û[ÏŽï\$Šƒx×¾ˆb˜¤#n£²6CAp@\"Ý1[¦ªUfêšV3/#k=é¦Â—ïºBÂ Èí‡7¬ÅËÞß±•1à„&Ë¹£OÌú>MŒÚáò•_˜›k’Ì¶º´îí8|–pÉçŽ½PxÂØÌ„C@è:˜t…ã¿ü‘“€)@¸¼†p^` 9ÿ0tŠ‚ðDMÉ@g^ïÐ/‘óªÁ>gÊ¹ÉÀ^Añ*O„a1®‚¬kAóM¨t¤”³ª·	 A?¯³!`Ê›éœhµˆš£\r`@ù\0<eÞYù0‹äþ®¨\rA\0P	@‚†öˆ\0(*À¤Ü›Â¦„Ù;#Ä€š4b†Á:‹(}Þ^ô	è|a².×L(]AP@ëÀ<=²žaJò\$DÐŒP”&ã	\$Ci¨¦¡¤^³Ø%,%ƒ’¬¡ÛÑ`0¤Ø“šnŠKlÌymÂ ‚ )Uï86\$(?FÈ¡Ú…\0žÂ£'-©t,sª¶R:}fÝÙ¯—ô\$¢Üz1|Í› ÒÙ!k„´„…„3¾S¦˜Î†#š~PIF+ €³)|i\$I:'€×PŒ\"¡Ü‘D˜º·™JJÌšQ/+ôÂcMƒ‘}I!à7†vò›Íy²)F˜'\0ØR+›†¨A	\$-¥BxNT(@‚-\$Ø!ð¤¨õ ¤A\"„À‹J(™D«åäÀêKêª§eP(‚HP\nBdmo.BšQàO]biêJI+ÉÉ+\$î^Ž»¬Y&5²&ì¨ÕZn%èºV‰ý\$Ë¡{¬.¡Àö8ÍZi­|Ç9¥á]é!GyèŸÖ—\r¦1“\rQ_1¶:ÍšrýeD¥½˜V–Ì”‚IHè¬ª›Cš'ªÅéˆ’žnŽV)Q‹`tžÍÙètÂ¥ÚDHžñê\$S@Ëõ8¦…Ð½C}¯*Èä2†c6¶LxX ´gMcKqâÍ¢8ŠÑ0¨Ò\\äé'iXº†7veTCTkáÀ(åàÙ…ŽÎÔ€ ¬“\rý×7«ñ+Óê€oÆ:\$¹]2%LJR%û´P½­×\n@Né×¿×5xdsIyô\$4 „HÀkÒ’º¬X=GásÐ”–ðiY!êV&¨_YÂ™µ8`(#;–@ŽXR6ióù<¢tSdZ1¸JŽñb…@©E‚@ e…èÓ‰2žŒèpgèìÅ‡\"_^A’3ÄX‚\0^²ÊùT–Ñ²‚h‚IL¦tÏ àð™ØR2-ÑÌeÓaVíñŠ9)ælÐh3[~Ì	ièçñÚÉ„\r/!¡³^³¹(&Ža®fDVX´KÜN:¾ÉP]—ônu‰¹žïg÷‘¥F–š\$Êž¥Ân3rIgÅæ•²Ž'™'ªŒËWØlÌ!‡Ùàš`r©>‚2¡jöe>v ðÞÝ´-I8PY×¨§¢UehY‘J©*IJ„Xrr'		1—¦Ç¶Ô^=S©ÚæHðKÂ„J%“¶âi‚Þ	ÉrÐq1“C\"dÒ&òß{×Ézÿ¼\nþò_WÎ¿oŽa¸de3{åáñ}jU*M1™Z¬‡n…žGkÞFØôØ	D¢±¯TÊí9D°ÒM:cñG”’æÍ{ªºº&|¥X\"+¾î1¶	!JÐ¯å¼¾Ù@!ÐÜ¹j€e§5{ƒ¸)2ì½±W¯¢^¯e¬}ym¯³>Ãbcß9=‚¼vŽ\$Ñìwm³=Wxï¦HÔk÷dà]Ý–ïu:ÆIwWr×£¼FSNL¨Cðý\\‚.S‹îlOù»>×Ó‡¥üT‰ñ„Ç£o%žÏèaÏÙª=ÞNÙpŒþ¶Ô†÷ò‹ê'î^³·û%êËì1ka¿¥çÍ~^³:,[A¼Ã‚,dÝ²|3’§¶èPáÁþI“|‹t„Úìså§ô\nÌC¬‹{µ~T.48¡KN^ÛáC~ªOÝÁ}æ†Ù¼cðÝd§¿mMúïáåB\$ã¼®Ë\0.òâp\0¾ÞTàîŽîÀÊÆú­JN÷-ì²Dð\$yŒ7\0‹°5D2.l:íˆläbÅ`‚^„€@‡dÖ¹ððCN\rç¶à&çkŸË=F`ç˜ïNíðsNý£pXÐkð>«?&ÝbRÅ‚æìs\n€(p„©NŒfI ä<>£>Ýî¬áâ»Ã\0QnÖ9PÔü°’ðœì°ÒdÐåè7ï\rg\náØiðïo›pîÑfGñÏMîì1 æ}>/1ÿñ&ÃÅ”ýp5Ñ)Ñ;+š-¬0Ÿp³Ñ8Ä\0¨dê™0§.ê\$%J±IÈØ¬jïqvD\"h	´&\0ÈÆ F+#*GCêÁ‡1Ã8vàÞÐb†)ÃBËñ ´#úwcÑ¬ë`†éÃsúLbNK§‘Èß‚VôO,w¬¾Þ„ô/FHÊH@Ø`Æu\0ÆŠ¦%ÉØªèPAÍØC¤Ö¢ˆfX‹£pN”·âÀ\n ¨ÀZ¸5KÔÖ,ÔÒìÛ#Ù#H€UB.#\$*ŒbBjdÎW¥™oàÿ°•e6#ºI\$v1Ä§\rçPÄkpÂn†”qDOý¨t\$0ÃÀ–J‚3>('šE’:Òšb©Næ¸ìë\"ìV\rÐ(î|°Œù%®ÒUb0°nÖ?²ÀŒ¨¬@AC,‡‡,Ë±\0n+²ÊâÃj¤)Â˜Ä’ÖçòÛ.„´RÀEI%˜¹v±Ê»\nÐãªšéêžL.Å1®¡2.¬[¢\0}\0ô(HÀ\rèÄ#åºØŒÂ½ËàO„T;ãj6ìW+bd1òîÞn2 ‚Kƒlh°^!Bé&D2³XÝE8­é–x\$²ìÎäfêÜ)Kxñ+&“J'+žpçQ5C~QãeŠÌã¢7â(])n®†Y@+àÜ";break;case"hu":$g="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­« PŒ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:ð1e³Xò #d·‰f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q[95Œt>6D0„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åBHÚ86Ì“¢JHÐ‹·!TÖŠbŒš¬¦â Â9;cbJðƒê5¥Lk¾'*ì”‰–i æÌ/nðø¯‹ò%TU#ºï˜dÐÔªêÌ\0Œˆ2h:5Åt¢W•ôÎ5€P–Ù¿ðK£pÖ11 Öœã:3Äh­Œ¸Ôo¬Î9Pp\0¦7ŽCb¤\rË›ú¯)XÖÂ\rÑ¸×r*Å\r‹GL›R‚0Ï)ŠXµµŠ#£d0í¸¡\0æ1Œ#sÁE6~¼§ª6·ÊäT©¥xÜÉíOÖ(ƒ(Ìò­WP •r*ïŠj¾1•Õ¬Í^ðfIŒ4¤Pl^_2ÊR£…nã\0P Ù6 Î4Ž£hßiÏC…È½Þ«xŠ<jT…NŠ/¹Õkž\rùõL0åWœPhídÂNè”±Í3QGµ£xÌ3(Roc¾“kê*\rí~0ÑÐÃpæ:Œc\n9ŒØ,27é|0XŽCÊ`3Œ+¸AÍWÃjï‹¡@æ¦æ,*íl„¦)É€ô7ÙnlY…Á\0–¶\rƒ%rõIˆÃ:ßï˜Ã©B¹nnúè¸öhÖ0ÏÊL22H¥!É²­³9Î¨;Ò]\r^ŽþAøˆæ9Ž÷%r2ëJ2w!âb4)0z\r è˜:à¼;ÀP\\Ùñ\n@¹rp^B xx+.4»@^Žrå%ý…öº³>j)ôäƒÀ^Aò€2FiB2taÙJ#!ÉÁœ”*^“Ô!\$2†²Á¢qpT7 ¢Ã!W;%hÖ<ÒP†ðn\r'Ç——šƒˆÒ I¸'x¬dÜ²k(æl:Õh(Zs˜ oø\0\"º‹GXÄÈû¥tí¬Tº£,‰‚QiðÜ“ÓþpŒz3©Ž4ò•”rw*q|»ÕÌù‚0Ð ²nHˆy4à€2#S\\R£Âé8¤êaJPfD”2xFŽ¬jJ<J²\nQ¦1h€LB€O\naR@›àBëU¶]ç\$9«—‡3TùW)(:90í0\\±þ’³Y@sþU™±y-È0É\0nÔ“d&4É…	‘µ5¦Ð˜„`©j¹'­d¥ âe,ÉxKjO—87 [b‘€ƒšÃž¥‘ATlØå¯3J…±ó:4xó¤ƒS¦±£1\"ŒúHU,>(¡¥ø©(pZI†PÌX)J›á²WžS&eC8y]e½Ý¯èœã3=gÍ‘›¥²N}\0PL§Ñ‰7’’(ŽÃ.-î™ÔGÓµæÃ)(%=²¦ƒ„J	 b›õ±36h®ÚÉúÊfêÅY¶Jë[‹xF;åêæž‚±ÿ f,Y­1† X3Ç‘Ä4‚¥’¶‰\$éLrq¸(Y’Þb[é¬³ÈyÑº.jM))¹TÒ(´Â™ (!’TRVO–ed2UÚâZãÛ©¬ïy…3’n§Jžkj¤ïÒ`õJÊé~öè—0ðÍ²¥;ö9'u´âQåU—e·šë(ˆlŠÕJª3ð¨l–©T÷Â\r‡%ö¥íTÁ Ù›åæØ–1=‡l\rräd‚“.ö\"ÇƒDZD	ag}êœIgá*@‚Â@ •Äj)Vé)ØQ» ’Hý•Í<Í°k›K¨èv¯y_WÄX9+Õs1ó\n\\•fã2´z›Ë-Î²>-`Êj–\$ßrxír’Ž]ÊËþÀ&­c\"[\nÉF&|”¦R)xÿ*Í¬°RP¦\\È¹#æ’a2\\€É¬ð0åÃ”óeöÍÇ;8\\x½es6|X†¨•ay€ðL7ÇyŒ‚ãRÉ½‰9Ÿ>¬TšçŠT³ö“\"QH*ñË¶eCRÕ}Pu° ›ò\0:\\Ò_ÑÁK!ÈÎ \0®CÓ¡wØ¨¡‚˜‡µk;wkâüÈr¤ œöÐïLsS‹­ybÇr÷- RZÝ!>•ŒK>³t’¹„mº¨œ+B°J¥!%a°Ö!Y¹¼(ËëT›ÖÊnål{S®{´½µÓ>ïC}r×ç‚ª¥@¨ªökŠ©½‚W–®_?Â¤ü´âc‚	~oÒD6Hœá•”W0‹L((ýj´¢Ù ¥hÁ Z¤M;±´·œsªUK+!Êådá:—{­d½x%-„í¡Ð“t®º'E*šçúR\n\n4Û\$t«Ÿ‚kóA°¸ð>¿3C'beHÆ˜ÄÈ©Ùû\rjÒ­‹n1Ü+k*áäˆ´ä†{£=fìÄT³:áÂx„f|Uì÷g“â‰{päÚ£pÐfÎ	Ö»DÉùqZ³VTÐY_Be æœÓ óÞƒ?æ¼…èÍ—¥Î>£Îyo1èt(Íübóz!D¹ŸáT7ß<ßv<›É÷´?ã^®æV\nGîç^îÜ¬ACJçõfžƒÇvnÔ½Ž¦c?×©0ì5¹2cöEJû”¡§¹¾¡©úA¶ýpýÉž‡î¿ªžl))NÂü€CB´ŠCZ0†ø˜½&(¼âŒæº±é„Š¹ÊPÃòÃEL'.6SÏï°@S§¬ðï†Ý°BzÏâç’¹Dâ¯ÃdêÌŒìápjÁË…o(ìðm°ZñÂnÁ¢?¯\$¬C¿ÐoFÂfà–+KzÓH6<®Œ!Ô\$ã*©j<’ã:B¶Ý¥,ópq\"soR¼o’B°Ð†ãYÎ}	)ÒTÀŠ\r‡²+¼20Õ	E™E¢ÂðœlP—´úÑfà¬£Dˆ9Dî9b^›N„<Èl#Ù±ð î®0\\igo\$ï±AÉ²e‹Lðq4=‘Ûªhø.Ê×\nfêq8R¬žl.f7™OŸÐgç(ž«ë®Íkâ¾ÑGñ‘°Þy+ß‰q†o1“¦Á„òFÁ\"Mðx¬ÍÚªäºÂ¤IÎÔÄ¸Â„…Ç’*&DB±ž&ãöc6·¯hMàÜ‰”>ê–±5nb[E|Ë°¢”6ÉÎßbþÈ2;2zò3*ç!Òc²&ÖæöÂÇj§VÜÌÈpÈ’6!¥rÞä0Ðl²Î%}%OtöL·%åjÞXÐ«hR Øivç(€v‰æ¨i^P¦œ” ÌrÄ&àŒŸM´b”|G4\n ¨ÀZ>/.<m\$÷*jcÿ\"¯Dsd÷+Â,¹,nS,­p#Â@\$BH\$Ôm‚a¢^&.F#Ë+2ŽÁÖ.tM„ÝC¤¼'éÉ0#ª=‚›ðlI0INTù\nÄ\"†z&ã°7¤\0bÃ°Taf« ÞlƒÇ4	äiÂ”ƒ|Vm\$Nf~lSí¶ÙŽâbbªã8Š©\"‘dâm²F#6‰`ôß‹Z^¨€F\"|\"Íé7eRÛ11Cˆ6Â\n5Hš çXêÍjsÃ~Ž38®c‹’‡…§\n\"ÜÿÐ)8…ÌaÀš‘Ì†	©´ÜžºÅöÜÆ€aDˆ\\Ë{N¬<£|Ä€Â(² î±\0Â`êiªs:óú #þ«¢?ðî{Ð¿à”5eHÂ@Ù6óíBë3BQÃÑ8â¸­&Ì\\ÂÖ4=8Ä\"ªÂ»â‘?btAàÓAsþ6”‘B°Ë‚²\r±þ90\$ˆØF£:ÆÂÖk0\0à@Ú\r ";break;case"id":$g="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶éi*<ÒŽðÎñº\0Î•\"IÌó¸¡\0îƒ=mpèÊ,ÂÂBS»Â8Ê7£°šÔ\"#2à98OxÊ6µÉC\nß +S®ã¶K€&¥c¨×Ç¨´9\r©Ê<	-[0Ü£jB82´cxÈÎ«)Š\"`ÒÐ¥¢ƒ.4¤­¡-1hÛÞ9GÏ\\P*°i*àÕ²îôØ£.\"ÑL™¨\\¦1Kn„¼´\0PŒŒëØ Œã“2•­B02\r(ârºh«4‹ór:Í\rk®¸\"\"‚r5AJ{Úˆ¢hÊKÕu+:Œ£`@Ì#éPáX%Bà’Ëd7\rtt™Hxé#KÐ1GÎ‚öØSSl÷L@Tæôq[ !¨Ò!nÈ­uÈÁR	½²(2Œ³09Œ²CV7Å+Ü8^‰uÂÖƒeŸtÇ.€§sC„¿B˜Ã±)“7ŒÃ2Ò7©h—ZÜ1@¨7²2+u*¾#¨Æ1¦˜Ì:ÖÃ`Þ3¡˜X§ŽCÊ„‘¡jÊcjÛŒ¡@æ¥¸Ýº ˆb˜¤#)ëb ’Á\0–4²ƒlªÚá\0Íz\r¹F ¥¥Z÷[[£f2º&«@eÈ„â RÏÂ,¢å‰ly&hÈæ9Ž÷¤¦252i¡â4QÃ0z\r è8aÐ^Žüˆ\\¡çX ä^ƒ8^scÃà½¬¡xDÓLÐéÃ‹ãh5„Aô’8Ihðèã|ùÉòŒ§eÒÖîlÈx÷d–ˆ‘õØÞ“4&ð€Ò3%·´TøÖzRÝ;½Üý*(	‚pRƒ'Œ\n@S¤°å÷3jƒ\0˜£ò£3Â:¯@A4)Ò+ÜjŸÃßjªPž“òrÓNr<'4†¶ØR	hI!áäÄ´¦d1wf›¨àâIÁÉ\0‚©()á \0ÆÊ—„+@„Í<B4@Â€O\naQU\"ŠØ‰¡1rí9P ¥*˜Šp1)“Ä\"v£ƒYP!åˆ7`ÒH Qò‚.\n†3bg™QC(Dš+‚‚ÕŒ¹Ž2Ä#G¼NR™Ã^„m-µhHÔ—€rEìX†5*¤1b(ª('„à@B€D!P\"€©\n E	F\0 œR( H‚KI…0x	(C'ýRªt#œb#¡˜0²‚6< A-;\"d‚CjÖ^„ôù;H’ \$'|êfqR~.cÃrhšñ—'f.b¥ÖµÍ*Ù\\ˆÁ­‰œ`Ó@\nDˆ˜™(Hò@PV0…ÅZ¡\"4ugI(‹N5ÜDlU[Úqï„€Ûˆ€e0lÐ4ZHÊi­–’µIØ¿‹Èz^!\rCB‹LÀc4!’bO·ŸDÊi’áƒD¨\\œ	\$U­¥¬B'±î5Ïàå›ø„œ“l¸ZÇ47Gâ„^Ë21gA>ÐérQ\rCO«±K”S\$J­:M}C5‚4‚‘·!	ÜÆšÔHŽ¦ÛÀFGqE…@¨BH}^™¶cÃzf3Ëà9Q²ZÏ:â(’bMB(Ÿ\0/p,à—_”©Ëš!±—³„öe	¹¡H&‡â_Ê‘n©èQ_²ÖE”¢¨upÀÕ{3ìY;´Dä Úò±òZgDnr\"IF9dÙ^õHÌYA·e9J\$R¡kg„ 1êQÂmrÑz T\rZ;„}ˆˆHvP4Ø†«¸x«Èt;ç<Ó'\0ØÛ	E¼AH4 òxŠa{\røº§“{@ZÉÐO	êÅ)l¥&¡Õz)äÊZ‹üNâb|\r8\r\$ëú×ÉÙÇ/—\"‡,\r„0ÓÀTZáy¤¥ªmh4?_ðÒ´Ñ-’òe~€¢;P\$²q±!…åM]KÒ•SêqX\" ¢±\\ŸÇ,:bMð~\r8†‘ŸàÜii^G–a½•5 PkA2ur£y³7ÚîÃ3T—LÒá‰IÙ#¾Æ>Où™7³>IÄØ :fü¿œsÉx‰}MÌÌÀ—>hÌxnÉœäNó¡tÐ:gÅLH“‰­«%ÝU?¥(k—±©üÂYQe(@u²öžÇú€Õtb`ÃGÓRSéª3ÎJÉšŽ>êkïªtNSÊ¤BšB¢y©¹AygU'³¢ÒAÁ\0j”Œ4´ŠÓiLx;0+a'ÂnGv4\rR´ÁU Øš\r³lØo4ªK=kOÎÃ¤Ç`ÒâINŠ4›E•’œ­c‰µž#¼ÛÚhf-U™7¦‘ÐX}”µ÷yw©­µwàéÂán©ß5sˆï}Áwq%µw>‘¾6‘Âk(%¨)«RaÈÑiP:jòº‹`y—ð]ü£I³]SÃ‰o5ºû÷=q>uÀõÊÛjÊ!Et#&XÃ+âE‡¡‘õÓ::ðéR'“}@ŠÌi;Á”%ªÞ']#zãŒuÅØø¶¤}\n{v~:EûT4¼ß°w,‘Úx&)ã;&Rvý•ÕUåJëù’¡š‰ÀøŸ…ðý“½tdWá“ïPñõt Ÿx­F\$ˆîx<7æÐâZ:±žNÆ*œ,€ª¬U¥D¯PIÌ°DÍó{·r+Â®/Ö9e—ýv¯·»oxYéùïe‰hCBa°ÂÿE‹,c–\rˆÑ1Ô¤óÙ’[%¡4‘Ã«Ú±A\n¡P#Ðpðcúä|–ØëÝùæJŽN\\W‹Ó±f¾-	¿\\3š°V¥ Cð¾ÂÌ;cÈmƒ&©¢\0bîÍK<GÄž·Å¬ÉâŠÛlž%£¤(¦<K\$ ÃHE\0˜\râ†80BŒ@Ú^ƒ[.JlK,1KüÃ…lÕ\"Ä,…r´Õ.ð`Å\\¾plÄR&&&Äl,îŽÎð\ràà*Š¼ðzÂÍ~á\r\"E\$À¨¯f¤ÿFÊóIL'J¾PP¶j¬¢¥°º^›¬Ê²€²@Ò<âzé @\nÀÒ î Â¨‡ð•”<âü Ø8îX¢båƒÛL§„ÆÊ`\$†ØwÉºÎâ¯50x5 §\rƒZe#C¸Å{\rŠ\$Jc-IÄî\$4„_ÅL Dòèz>\"2\0";break;case"it":$g="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iPÒpôÆ£ÞÜfÚ6ã«Êª-ãª(ˆB#LâCfç8@ÊN¤)° Ž2è¤ êµP\"\0©Œ©Ë^Á2Ã“³Âb‚t9Žë@ÉÁcu	ˆ0*Ý¯£ÓÏ	‰ƒzÔ’Žr7Gp˜’6Ž	f:=A<4/-0”\$\"˜¢ë*‰h¬Õ7®ô=<\r3/±hÓ1¦\n˜åˆü¼/Kâ`Î*sšò½¢Mbèñ/ÂrÈ;#ÜKè8ÈCÊ¨„´]ª!¢\r\$‹ðŒÄÓ@ Œã8ä2±´ì&!°KêÎ±Ãˆë	‰ã’ô¶KÒRŠ£H´€éÀ‚c3ÂSc@òQ\"\rLSoü¦¥#Ü‡C¶pÈŒKBe?#XÇQÉôHÂÍ0®Ûk=N³ëJ¹FÎ8:O‹ê1ÂQ0‡QÍ·„JÙÞÉíÎ¹ÆàP Í³¬,–8-“ 9àƒ–\ryŒ©…Ðº¯×ÝÓ	ŠwÊüã¤êü69ÀS É\"	Þ3Î”–ˆ¬ *\rèÄŽ<¹l@Æ1°ã0êŽ\r’Œ4–`0±«XA¡R2“xª˜RúãZ*b˜¤#)É+déZapA-lâ`6&à4¼Œs²Â.J†IÎ0[p§æY¢v7¥´²wÝãÉ9àÃ\"Èäš¦)º]iÒ¨931|cY*ÃñQŒšÐx˜\rÌ„C@è:˜t…ã¿LoCjÖÁË@Î¢½€ðò¦© ^5ƒ“<:s‚øÅ°\rÃXD`rtvã}(Êr«BœéÚ¡\"ŽR<v–‰‰»¤ÈËB3;®húVÓ*¸?hó½)‰Q¸ü»éóÄ¼ˆ¯jô€a£a%ÈÓ‚‚Œ\nI‹{¡ˆ ’Ö®Qòjj «†’4}H p?à‰Ÿ†´2¥¡ò dvÈOQI!aäÈ“HÒƒñQaÐÔšµF«! ´Èê’CŒ†<1³“Žj\rS3Ð`7Á£ò™  i&@'…0¨Ö‚” j¡ŸãúFúO…\r€˜ª7>M±zmá¸tä©¡K…¥ô’š6rÞ0œ-R€SZð ÁR\0-&†“+Ò‡Ht†\"‡XCI¿=î-\$\0£r 8O	À€*…\0ˆB ERh@Š,¡-ètÉrH­q¡È‰¡“ž}˜!.Wë2J0à§L(D¡™¿±È([UzÐ\r«uOªÒ¯ÏIÍ9áM‚'˜kæ«i-AÔEÚ æ\n5FðN\nµ”hº':e°Ý·U.yÓ,è]L0˜ç—âê:\$TÜ™’Ü‰¨\n\nÄB)@Ã¤kà\"‰\nÆ	ý’Œ’Œ'˜›¿×þz–º\"F„Ü‘J Q¦ij-\nÐ!†ù0ÙYs.¬Q5ªt:Ò'\$Œª#3£:×Âñž¥>r¸Š^©JlAœ†åh`Ñ*]ií;40ÝRL(SuÉ&QÀÆÙJìNÔ†g†âÔGa!Œ\$­8<²²Òg‘R ›uxô¡B`‰qk\rfe#,ê©LC4Ê\$#‚rY‚‘‘7rT\"™gä‚Ù^†‰)ð¨C	\0‚?\n!„ƒL2¹S ˆ\$\\I\nÊ*ö|¢\0/ ´† ¢ËJ`á”GÃ,«0	á-ž4[[SœY‡A`¸²›hm³´¦\nÝ[Â‹lb¸Œ¾‚ZŒ9‰mó-iƒJ{Õ u\r*Œ–´[sx#sçp™˜vékî[>½ˆÓ›’JÜos(8÷¦¸º¤ A¹\r!íŠZ‘b0S=/«v?’lùN•	%¨(ŽpäŠ@PW¡‹\"œF.5éÁ´\"&À¡h!%KMÉ¶“€Ît±=¡ª\$]±( ÍÎI…«Iõ8¹õ>ðdêˆí”<l\rfu#È‡C#rS°±+qR•ZL„u‘õÊ±6ÔÊ6Ù²¥B&m†å™W,˜z€Yw!:ÎHŒþ³³µ’³\n‹˜RkžÑgƒw039!C?ÒŒÞZO '§.®Rû;YY÷[:)šTI^L@l—a•69çËø:Y–j&bÉ¤q#P›…é©uf§Ñ«·%ÏIðÄÍ{*,8†+Nµve×ÚëY§mJäŠ&°(	Õ›’‚ííÐ1·Mø¼²v]ƒ•»<¹m°*ºÚ·YdVÏXÃ+0Êó±³WÕGXdJY{GîÝÍº†d¸dºVâÚŒöªšº6äh©K’ø);|oÙœÅ(ËŽ’6ç(cß…‰\rÚ-u%í3xÉ+ª1à{Ü¶G;Ïëš|aºé\rÜw…d¨7(7ÕhÎ¡q…úµUÚ¿È¢hm;/¥äBq5æìèÓ[}fmlž5…Qîœj^¥‘ú&q^Žj÷Ž×sßQ)†•YŒz¯Ž®Qîs\nHã‹ˆ	ø\"†C7lÍÝ{ïlìÞ³ß;ÊHØ;ï°mË)G…ŸÁ½š7¹iÙ<2œ¥ØÍxË:œ¦ê d”:”Š‰áÇ,éU³)oB™<fôÊ¿Ño=á7¢m¾œ¿kcí4‹'Çï)ãÄ€QgTÕG×‰¬êhM/¿p×¯bh>.t?—xÿü\n©­ßºøßOß –„Â¥g„=ïRþZ=v´ü¿‰ÆtÞ¿óëuhò÷ó×cA1ÿgQ!WàþGÿ„’ý-Œÿï‚ýÂZ	tBDfï©*„ªªï2P…Th¯* \r&qbÇË‰‰þ0ãÒ-p0,­ jŠ/ÆŠhB..BÜ0BI†#ƒfêcàÜ+ž×eÀËˆ)C¯0f¾Ðj©ÐnPÄž\r\"ZÀÂ= †9ÀØhŠ *æ1–˜ìàÐHBïàäg0Ž=É¾*eÀª\n€Œ p*\0Ü7%fëÊÚB`&H¸kà¶#Š‘Ü…,c&ð¶æËjv\$¢NmÈ/jÊCÀÐþlðÚg\nå\0Dúz‘/¨¸‡¦#®„‚ZEÄ†/Ðd&Cª\ræô8]ÅË¨¸_`#b¯BÌ{\$ü¥b\$‚0O#NbÆ,­ÉÌÒY‘dáÇÐ!‰³\"Cn\0003hß£ñQ^~ñcÈÔNª},Â\$V2Ž,.†ž‰£vu@ô³¬´¨GðŠ\$H!ÅRž±aŠ–Í©t«Éxž%WÑØÓPãbBk=#¤.„.º\$&	§Ð\"\$Õ¥KàÊê\"@ÉFŒñ¸— ‚-„Ä—ªJ\"ÂÍH²Ðo\nqn`É¨\ré¬hI¤ú‰äb‘‚Z’òN¯ã‘ +:Š2\nôX—  ŠCÐ«`‚XiÎDò Ì¤@	\0t	 š@¦\n`";break;case"ja":$g="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$Ê¨S/äl˜ ÑÎ_')<E§¤©`­’éé.RœÄËsÄ<r‘J8H*ìAU*‰¹•dB8WÇ*Ô†EÂ>U#‰ÂŽR‰8#åÊ8D*„<r_£ˆa˜EÉÎTÇIBý#êdÿ+ÆñÉlr’j¨HÎ³þA‘3Ì÷>Ç%Ê¨—E‚®Y§¥pîäÔ£•Eu ’6Ž\r°Ú2Ã¤FVî Þ27mèæÖ\nbˆ˜4¸Nb9=Qd~ž”äYÒ@=Èá&Ž±É\$ ‘'16Z/´»¬%u¹o\\I@BœäÙ]ÂäáÌD•+ªóÁÒ@—1ý\$±DsHÀS\$CRÁÌR‡9hQ9¥Ùvs„|Ñ\nÑsL‘·S)*ØqžÊ2œ«\$©o/\$Y+xB0ê6\rÛ’Û˜Æ0ÎõŒ–há<Žh4Æ@g9+.`0A‹9Ï+¥eÓdý@NÄ¶R[¶üÑ¬¥øÉ=sëÔ©°¦\$<ô½om¡iZ‰éPT¾W­FŽ´¼ð¬É@ïÕÃŒÜjQ%xÞ{±fPæ­NëèþÑ¡`×åüý\rƒ äÒ4Á\0Â95ƒxÌ3\rËe%Èý^”QÆ4*\ríxÛž!\0ê7c¨Æ1·#˜Í™„`Þ3¼#˜XÝŽ]¨Â3Œ/Aç¶\0ÚðŽ®P9….aÈ\\§1[\r%P†)ŠB4ï2èŒarØé\0@¹Éh@Ç|= Ù[Õ%ÿ\\ÞÄ»%D}•ˆ2†ÐW)>íÕ*'¡ALkûT-Üƒ®ÑhuŸ¢~â²0šC™ÂFÂ0îÃ’À¡à8—@p „Ô:\0ÌAhÐ80tÁxwˆ@¸0†G¦ƒ(rÐ 3‚õqƒÁÂw¤7†à^™°r7Òó”ÏX\"ÊÍZ†Un®Aà/ ù]«ÐÐ¯Ö\n¼!¬Ö,ƒa]œHW+*\0À1`9&'Â\$ö'eXüßª(~?’zƒrBC¡\n2gd,Äð(€ ‚PZ\rAèE	‹Ò\"\n‰&h¨À\$¾ùÄ)•â±\"cýU\\š4omî½ò›LV\n‘£ô‚#Å|”B¯„Ÿ„G2c\$•L0E^\$‡@¶4	ˆÐ¿1>úŠˆ \$Ã”QªË‰ƒpuõ\0 ’EƒË¥`åt°ÃrÀ8‡:\0âMÊºÁÈ7†Ð@b3¦„g\\\0Æð–»8¦è8<·N‚€O\naQª,ÔøŠŠ	5\$Ü@Á#‘«ê£®5D”Ñ.§°‘H†EÁÓ„Z» V£ÙÇ3é‘\nFA×8iÙØnvÊÔ7ÄW<iàb„À@©¬6Ð#@ ç§ËÏV¡]GjAYÌI5q(¼ŠA,:D}mÔBŠvÇ‡(ºbÁ<'\0ª A\nWÀ@(L¶¼¥U ¤‡(SZÇ—”ÎÊY\\>´ôWÐˆC0afjè;Ù@CEMÍ<6ÃØ{žØŠ9¢á\"!HPDµ³—¯‚`8Â>ãšºuSTyN,Ö²¶Ï…¶ƒ±Woî+X\$Ëí~¯ø1:¤[ø@LXM\"¦¥¾Y×E³8qz¼—¡T%ª‚(¶}Å0§­«u‚Žq-‡0…H…E|,ÔÕš!Wñ÷‚	:%‘”“)©÷U€Š‰T˜xAŠÈýLÈç®µÜP0ŠôàÛK…;Á¤=Pè(pz¸˜)†SlÎd=çÄù—QƒDT†MŽ³©u Ö¸ƒ[)ÿIcRKH8J—V“Kd\\}Œ5„Ðã”\0²€lk)VÚß\\\\’ÚµÍ¹ó¥²?…²&eÇy ˜®\\ÆµD”lDq/ZÄè¬Hø¯/\"]Á6^EîKŒXÁ1‘ÑAHOÖ²á¸Õ³QÛZq¦Á@‚Â@ Ÿñ\$4›—<è\rhožæø8V@ËC,™E®VøGI0^À€‚\rffõN¯ÕŠm7ràÄß1¯Dköµ”¶Þ/:ø‚²>‚EhyáLIc\naÌL›Öyç]L\rx@Í~w0ƒÁ®;ÓWT;¢I QJ»†²Îõ©u3»Ñ9H\$ººXå½êÆeXŒøÞB“BšSiK·hHM˜#\0PW¡Š–±ž‰Š6úÁ»ãŒ˜-ÃÓF«Ö:µs\nhÂJÈå+ÈV±\ruÈójï\"üŠÎ)Àå)0V®Ì-„@åÂí\0Òivƒ`Ë­v®ýrOžÉ¹½-v.é·Ò‚¢Ü{‰5ÕÕzp’ÆXÌu-Ë‘D…œ}@‘õ½”Gó„ãÍm®Á~ÝÔû‚âîzM,w~ÏÞ{‘I²ºé ¦w„z=¢\0úÌäÚKð‚CQüŽ@u&¥ü“#Çy‚?æ¼«D²¾,úd¬¡±ÚâèìÂˆúaxˆW2gJ‚^SÙ„A*‹Ê‘#ÃFÝq»^4í¥‹rzÏ{xýýÒ\\¶<rˆ’oê%\\Üø·9Åµ[ƒ/5èï¿®\\ÿ‘õî>Èïßï\\:…¯;‰r8÷9ôÿ…êîv<rm¨“fÿáúÿ›Cú«ñîa\"ÊÏ‚Â*‰¨m-Ï\rŽÿâ¦œ€ØÎèÿ¸ÙKp®\nä[OšýïúËÐ,Ì%›%¾þð*ÌØ×Žøþì¨üáo¬°#ì´–i¸\\ÆN\"´ÊNN|\"Rˆ Î´Çi24BÎ¥OË,¶è0fo\\D#:ÛÞü£F\"¾ƒØ0|0‚Û	º“iÚ·<ŽÐÄLºöoê=K^*Œ‚Èm¾õ0Ce¬[0íPÈåðOìÈE´ïŒf¹P6üP&êpónÎË°üi¡ÊZ\"ê¡t2Ìá¡6?B\0Eeè¡|0Vj#£\0…/\0ï\nû/ÔÐ°}/öl¢°ÐÑUËÒ`&HÌ£\rÌ¦–ˆ\$€¥\0¿çÀ\\Ñl`ÆšÅàý+Ò%‘rG1yo´'¡½¡ôŒ¢LèG!cOÃàò…›°¸ïí1t#ñ¸ð¯ÃÐQEdêË±§q­Â8uÅ\0Gdþ˜¤OÝüB?\0³©	±\rÛ±üGDy QîHqÙ¥!d}!¡ÞÌÁÍƒCï.Íp1ÐôLR1#Fµñöú’I\$I!òVÌâþ\\°üI¡`\"x*íNír6Æ±ã\"1WòÒ1`^ „\0ÐÔñEÅbnFè.úÁÈa0{a)ÆêÊ!Î~›„’Ø‘Œ˜+Úü!xæ@ñý\$Èu&2˜ \nv ÆD,Ád2Ó-¶kEÐë/îg4\r€V¡àÒ`Öª©ëJ´ã†vE~\r Ìv¥9€Œ«%x¨Bªê©@ª\n€Œ pps\"<C˜Ø náo&3+Ò:ïáî,Bîk¨rðv¤‰t,à	³#2q€Cœ1ÁÎé#&ÂQToá%8£\"2mœ¦â¨@«ü'¢-	ŠšžcÄS°©ÀÚ…X8/!\næÁjÌÁ9næsGngc…³hÈÂ°kB0aÊeÓäïSê\$í¢#)&2S=“û28›®¦\n†nÓÃR5s8¡ Þ\0è\r'¦Ä­Pðj\\W\rme\nRüaŒ•9äæMVð«þTÊ³œÐA+EBì¦\nF3BšÓz8-8´ÌHÔà@\nÍ:à\nÀÂ`ê Û:\0_d‚‹rJ\r='Ðá(bVoÃ¦\\Ä€@¨SßFË[-\\ú«ˆù%*_“ï?,›L¦\\µ4\0Ö@†tlŽHD\r4qBÀ@6€ËGÑÛ1¬ýqªðÐøšc*JK;&„¨è’hT˜B0@";break;case"ko":$g="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ²0T«ï“¡Á‡i0J¯äAW¯ðóìBGYXÊ“ÄƒC\0«L´ˆuˆÊ“daÚ§ ÑØ	,RÌxu•EJ\\NÈ¤i`­¤\$&†É¤TEAä\\Èv‰e\"Äg«GYM'—\$!Öûe‘,ÏM3Z!å\$Š—E»*NÑ1u°@@„áx—&u%+KÑ\"HÚ87#hÊ7‘AW8ãxÈß8›^)Š\"`Òâ¨'\\Í4MRÝ:v%„ŠY–“ÚYaz‘0óëgÚ%•¦ƒ•³Rö”äbbRBHÍoA±”d¦¿…ÚAÌˆ9Pv'û.ƒÀÈc¤A‘2)TT&%ªJeX¿’ïÑþ?k5§#IQ.¯AŠ…/& (ú#£`Øß9È@9ŒcÜð×¯iT–”Êÿ\$dy2vÄëìüIo;§EX”tÛv…¤¿ÍÇiRe9lhtŽ¤iO›êûØÐ“-–Ò±*þfî„W\\ŠŒŠA16dfìL3Å—ÄIì6U…E–”mG«ÓvˆhúJC:]×€6ƒ“NÔ„ä×ã0Ì6<ƒ-ƒJRË3ºM`P¨7¶CnL<„¨Ü9Ž£ÆÞc6:\rƒxÎòac|9tÎ0¼rÖãkÈ:¸¡@æ¹ì\$À]d‚f!ŠbŒƒ×qXÏj…YìNÈviAÃñ&…ò¤¯/ÌÎŒ©\nœé7FFz¯t<öò•D7ï¡[‚&Œ#›Š›ýaÜ7‡%nCÀp\r.,2=PxM[‹Àô€è€s@¼‡x<ƒdwÁ¸2‡ ]C8/Uð¨<WFCxnà‰#v  _9¬˜5‚ |ª•`eUÊÀðÂ•’´\r\nÙ\\+0ÂÍz¿6p•ÏBE`sÄ#êAd©<¡‘Rýßú\$H9!\$(h\r/4Á@\$ƒÏH P³r<”G`¹A@„ X‹‹!,ñ©•ô*žCÊ~‘T02LNYº äÌ¤¢˜AÔ2&è R‹Â<HÈ¼ h¸Ò€ˆÇ\\=¥õ? 7ð‡£I#¡åÄ@Ò­ÍŠ±WA¹[œs’Xq¦ñX†`äÃh 0‰ÈÀŽ«Á\0cuªèßƒz³’A@'…0¨{VŒMQÙ(±XVÒ¸½4¦Fp7ESJyQ•2xv\nCºŠP±Bh)Y'AHÐ±|AšWFÄáÍS%\rÎ…VøBâA\0b\r!œ+À˜1¸5æÞ`©™2·\r*®«¥1¦C#„¦ºñ2.X¶’í°VÂp \n¡@\"¨@U8\"„À‹OØA[O©ü¿‹*²IX¬Lu8%±pÅ×dÿð\"PÌXê±Á„6L2þ/D ë\"`v®±Ø}¹b¿¾c_˜m/eòDªYÂÝSSwgæru”y8™òMÓÍŸ¡@'%„°ÍÍžØ+Ò%S€]âv0?š;K²–\"Ë7–€¸Wå¢QA÷Ò¤YRb)‘ %ëh\nï?…Pö§s JŠ£²‘¸vÆHâUœŒ\0é×\"ÖKÐ‰Ú\"¢š°e¨ÚÌYá\r!è2€ ‡2ƒÀ»¡L2›ÆqC!ù?uíã¼™(Ñ[ëJYm¡e6¥¬%*Mr\$™L©…„,m…µi¢’·¥Þ¶DúË[+LvRúcLìÄô®\rR¶Ó\n	>oªS•¸a©W4§bà·%8¿‹b`(¢p ÐQŠÚ\"Òb(P©IDÚ;\0²¢ê{I-ºÔ¶*|C	\0‚aBPÒoK‹6¾]áIC,\r/âýQÐIG‘©/Îðð@¹ˆ1ÊyV©Y–2A,Œ¥FŸ.1ªÐ–Öi'¹¬çæqAÉ²ô(è´¾6Ú¦ÁEÌh4yÌÓeÁÙ•%mŒ 4	iI¡\$.vJùß+ŽÑ!#+ÐLU,.ÚJ'%d´—“}Ñe|y\$\$Kèû±Ý>)ÒJi ®CwÖ\$PÉë‘¦‘0‹šI°e¬®´!Rž¢DË3Œ²)_bá ÂE¡æ~Åê±ëù€	2ldÌ©—/Ku0¡dóc¬†Ž²FHJîDi°ˆ°À-wn¬Õ¡MêÜ[Û˜ÍÌå«î½÷ß›£Êc\$µq‘‹Íø/‚çNÂWI*}«ŒÐêî\rÃÌJ×©iàK˜ÁN‘#0³ØI|^™ß_&| Â’NN;YÆU3’ûü#p‹•X8ïm!a¯åÿ¶U%Ç&,VO61537dÙeôP‚àœû€tÛÓí6WãtXQ|eunë°øÞÒ©ÄÛ‡ì]ZÄÚnÏœï\r4Ý³²¦ìxÜ+N¾%®Ìõ#÷Ü¤-ðjó	51à:‚oÝ¿†uN/ƒL¨¹ºƒ¯âö(J”EoÝ<[:5o›·‡<î>;‡yA›í™±øcÄüL½Fiœ÷ÎoMìgµ§°ïy\n`Z\n+Pb<ö”»pJØ¡Lf,Ì“É9ÚÏRö+I¨\0³J!*˜¸5±»Pº¤'ÉAñæTÃœ)ò«úŽË ¯W„¯Öû—×á0Û0SMbxuª4èñ…¤õ«æŒÎúêojF/ý\0‰<í	þ÷®~X!n*Pï.ü±ðôP.÷p\0ë&î‹Nò–<3ØBZ}ð>i¥Ãºb Á6‹ƒ¬=\$Šò¬`îæã¬]ïEO-T¥æ'¯§ò:/f[p„ÏP€lPŽùP@lE­2',TND‚²\0:NtžVŸP!AÛnÌ³,&ðïHöÆÖ\0öŽÄ^„>N°“0Ç‹NmðrÇ\$\nF¢<«l¯\ná:ànÿ\r)\nOPöÇj\0G\$vúMà­ï\r1F‘ÑN!;põDm­då	¬2ÂÂžŸMáa\0L*ÃqHçná4ÂñVð¦oÑDÃ{1aP¢Ç„ðÆAdÆ„eäm¦0ùÑÇp&l@ ÐÊ0|Æ°kEJ¦CB`áÔk/œn^lÌVµ°â2°ºÞ\$±â=Ï(\\HøíO}¡j½b?çxKaa))Pw‹>ÍæÞ°8( †p Øi¤\r Æ\r`@†* ¬jÊ8Ç:VÀÒÇ@Wâ‚Ê4V`êÊ\"Š*\n ¨ÀZ\0@UàÇ\"ƒÊ(,Ú3íàk¡@ká21‘âàë°â(îp+8&©61Òj@›\"’,KahZ!fHÀ2Ã0i,FÄ2’ÜC&Ab¼,>\0i%ú	Š–ÃÊÒr¶Vh\n5ã†9m¸`\$\"A`”/îáMàp§Dd£‹ã2pD\\!‚Q'ëìâßd0ñ×.±\0@¨d,5ƒ]#é \rààŠF»l£&Ëî”#Û.Æåô´ú4.<IïÒMD\"ªâ´æÏÈç\$DèäPa†cR€8ŒŒ¬“ Và¬Èàî@¬ Æ ê\r¢þ)# ·2fH¡m¥âŒ…0YajÄ4Rß6Š )RøS>í®ÌºúfN”ùs”‹«¼qs`‰Çþ\r3d»…n6àË6ðÅ†ôDÊ¶^Ã¤«b=¤ðCÀt¦!B>\0";break;case"lt":$g="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nÃäÐ´#RìÓ(‹Ê)h\"¼°<¢ Â:/»~6 Ê*©D@†ˆƒ°Ê5±Î›<+8×!¢8Ê7±ŠÈ¥¹®[‚9ª8Ê•¹£(å,ˆl¶ÊRÔ)Äƒ„@b—Ãzk)1èÝ	½#ÒØ\nhÒ5®‚þ((\rì—?S4Ðè%KP’6¿r:â:@AzÔKM;D9²¢˜¢&;Ã*H ŽÖâ’êã\nRÓ¶†Q£­b•c“À¼¯këxÈ ô2Sî=Dâ.’6à½ãª–—±C\n¸µ£ @ô»Ê\0\\×h Î‚WõÕx:.ÀUG/â4Ò5Œs8Þ†ˆ#;aÚ2\0’2«ˆªþÍŽc¨ä\nHÒ¿<©\\°¶\rIR,:T£”2Qm{Å.,Î,ÒpÊ€ŽiZg\rƒcVÖ²£˜Æ0Îm²ÄnÙ¶VPêÐ„HÜ1¸ÒðèCãJö9;`Sðê=ÕùtŒx¸ÌÄL¼×û†aCDŽð\ntÕÄâg9Û˜\"RRü0­‰~ƒ\$L£K6ÎÚHlî8,qX\"¥¤)çÐz=V®oæi—KÙŒÄK¹£u\$CöcÊŽ\\l{#2£xÌ3\r‹=e‰Læ3¯â Þ‹%cpóˆ\r×Æ1³ã˜Ì:àÉÍÄ…>H9;î7'5Õì7bã(P9…)\"¹¦Ë=†—ˆb˜¤#PHÒÑ„™¾XL›£ëÛiåº+U‘„Ìå¤‚U8—ÃûôÒ3¿¬¯@‹%.i¤‚›?¨„ò¥N©}yèéH\\i¾pÝÜ¾êã,ÙIK6ÉOÒ€9Žët2ƒ|^Ÿ8<D! ã`zƒ@tÀ9ƒ ^Ã¼Á„29ô”‹gåÆ\r‡‚æâCHo\rÀ¼°ägƒ¤æµ†°Dš™pcÀð†|ŸSøhP,`•‘£îŸ‚Jp©íì½´\$€HŠ\$ !åuÄGƒœ8„a¿¢·Lb	û?¡¦–²ÚˆJ>†]öŸ˜’‰Qâ\n (£ø%Ïò\0\0 :RŒY³ª#ÆeÔ·õÜðY{†@`(+ãŠÓñ'%\$¬–’òàÈ’Á`\r¨M†È‚ÞP™ÝE\$Ùó¦ÂjM_Z‰@F¼…‡“ ËY–6Ä0¸«£PjŽ0q¦}>`ä\0A‚­èßš‚â\"P†œÔ’ò\"g‰ P~¥ìÚ>€žÂ¤€l¥Ü3ÕÔ/‘´¢lŒÁ\0É ÖFÀr=/ÚOÍ“LECpf,ªp­—€è‰‡ØéNÂÜá£\$PQÌ+²Ë5X|ê.\n°\0Œ#k·>éáªÃò?-Ãl¬Ip\\éÂÆŒÈ!Å\$èÈDòäß|-\nÈ³°Æ>nm%.G4¤Ibèf”Fl	2 àÂŸå»öT²‚\"Ôƒbý!Ä¹H˜‘ e\$A>*RZO4D†´ÕQáÞ<)y¸¦+è r+‹&®¢8G’ÂG,56+vòy#»¨%'AÍ¶Œ°[9\$h’³4—ìZ1r{Ô”¶é¥7+Â°g¡­Ÿ‘êFµv¯¬Ñ2†÷ä¢BVÂ„µ²Îˆ²/<¡	å—ÂN•\"JoÁ„'Ø‚oã\\m‹U`7Nt™“Ï8\$½¡[[mÔe³ç”&QúfZ‚b{Uï•\"‡ª Ñàpt)\$¸2æ)­n¸uÆ<×BÚ’9LŠ˜½Û’«£},r]1 È¾R#*Ufô7^òPK€PÅ²8¢v\0Ž\"ª]á‘E¸ËEí­` j<ð\"Ê’æªç”™å<+ì\"n±Å&[—º*(Qs7`nù–«*ã\$ìZf\0W3»R(y!¶.ÆªD„\nQà!P*†²Â~p½)V¸CƒZºä%Ä¢öÄ’\$%Å*¨,\0^S–µVáÍb„†rîZ1‚Ì\\¢Å	ÅÄÍIÒNÍ¤FY;6l à™…ó%Ù¤Wæ³\nSFo(ä{9eüíž3Ñ²;û6è4QÑ…³f6/ì×PÏ9JÌr®´Ö‰Ïš0¦eÝC§j\"™±ìjlÎKžª\ry²ñmVÉW©Þ8¡¼;°2bv&ø—o4ÐŸÍbFKfÃ(–*ç\\?D’d]Ø¨á>Ÿ¡„|„ÖçÆyQ\rfl#Æ~“<\\|T¶ ;˜‚^S¤¾‘ùa79’ß&X¸/ÁHd¼üR’å³·Öt˜Ú\nxÈ>–íBá±nAÞvÂ[µÚßä“‡\\·í£ç¹Q¼†5ÜÚ½8Ý~\"4îãÕâ@[É\r/\$®ÞDr3 ¨Ñ½vòã˜†\rñÃRó–Óºƒ™ÿHœã úaÉý4åa¯–´“¥}o„{à„t×õP»ÐªS¥·°—‚…øMM5é†½Í;%ëú%³÷‹²Ø†‘Ú-Hãý¶»öþ;Âû›E¯½Ã©Þ,h×¬?ufV*ð¾#g+\n~ð¦ß¼gÎ×mž\\N^§f£ÛzIe¿%¤	òø¥Nù­gŸß?³KŒuOE-ñG™Ñ~oÔ«¬Ä„È­¼FãK\n7²ÈŠØÞ’ü\"=Ï“~ðñûå²üw\$—êþ#5÷/oú3i]lºž®â‘cDŽäB:Õ©%¾I0Ÿ¸Ê0‰Å“ð\n³‰HÏiK‰¥žû-ø7êìÆOæÜbŠ(åÐ5ê,ù¯Œ÷ëüýbÎâÀ¹jjõ¯,,Œ&gÞ#Æ\r%Nøúd‹ÊðâXíp@¼ ãÍœïãˆT°D<ÅÃTø/ÂI\")p?ì[&•IÞÅFÖP5‚=Œ0L¨(’\"ÂM‡Æ,#Î!°pÖi\"NN6c««,óK¼OFöO’Ò	’ö¸-Ï¢ãà–Î<qçÖ[#Á\rblQè÷ÏHSÎnãÐÚYðá.ñ°·ãÀðð’.’ë\n~I\$3ÎÖˆ±\r.üE(²ï¬™\r‰X›ðüÆ¥	j§ñßé§ÐRï\rGxüí¿ä(,Œ-O„ÙÌî÷QCÌ!ñHqLÂ‘pÂã›G,Áñ€	„J-P¦F„žÇfŒ­üøq–J'âð0fnAŒoQFñé¿@Ò–ÂüÄÐìó1‚uèo…nSBþX3oü2Æ. qÔÎ¬»«.£.ePèÎÑÙÍ;6ožÉ‚DzqÖWM¬\\\r²	Ñã D×ç:ËÎÎÄÙ’\"ÌB	\"’ õM(e\r€V˜ Ò`ÖDŸªœ–eOÄµç;Âz3ƒ*\rªˆWc*s@ª\n€Œ pârZ:HõM–#\nÌÍ¬ÂÎeoâ2«ÀÓm)LÆØ\n¼¼B#\nG„Bm¤lUŽB¹€›% Ì%È\"¸Â#ŒT,	ÂÆ-‚ö^ÃŠÀEF8ÎX.\\'Þ£Ú}’Ò96wñà,d´yÈ%ÄªFŠ~±‹ú^€Þ¦C¡1‰øwãŒe¬JEÀÙcŒJ˜Ä«Í+çÄ ì_b¸+aB?ÃBá³<?D•(ëâ¨Þ(%4\rçüM£5Ðåï„°`¨5‚à%ã&EÒl—ód#¥ì¹ÀÈãSn|¤DÆÐDH…¶[¥F²D3^ªžåhî„&ëæ¤êÀæ_j‚F‘Œ&ÓB%ãé4ìXËçæ.bÉ³Œ	\n î¼`Æ ê\r 	ä¬%P8À`‚-ó3CÜMÔ<rF@æd ¨b3J»jË)Ã°xª´¯²dÉ5rœª3fÀ`†8Ä?&t?=´/J	>QÅq)ÔDÊ†Ã£\n2(”±€/cÒ@";break;case"nl":$g="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ì“Ø÷!ƒ’”2¦C2ô4˜eZþƒÈà’2I3ÈˆŠxþ°/+…¤¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±B†ÚŒ#šH<É#(Úæ¡®\$\$ùB£›¶0Êb¸Â1 î¦¸ TRÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€P’6¥Ò’fª¡„ØéKT‚IÁ\0¦(ÈéZj¿Ç#r§'.CW9ŒjÄŠŽm,:Ž£++Ã¸A:lL¶¨íN“Õ#V	ÊðëS\r)\\¦¥#ò•5âE_Ä‚\\Ã¨ÝKXìlLÈ‹Iû–º¸ƒ\nú)®Ô»\" ŒÉ|F”0ã,FåEãZJ0£:V6dId°£l–c{E‰\0ÞÖŽRüÃv´8ÜžHK¼êºÛìöé·³<™DÕS\")Ì“¸ò\rCÒñ‰â£k¹ZxpÅ4¢¸èÂ\nC,À¢OSå²†²\"(ð8eôÃV•z20ÚmtÑ'9¹05Øãe:Ì3U<l7ŒÖêô2¦¢­s6ÍôÕ“(%\$:ŒcH9ŒÃ®s6¯C›­Në#Ï(«Ò¨”«Ö2…˜RÜN¨èÈ¼¦)Éó–,:T:ŒË²v!·Ðà®Œµ¾£©£on’7ƒ8É¨ÔÒud¯**›‰o,ÿÈ3Ü—)[ª,\nYª2é¼’ãÖ#œÆâ¿¹œkpã¸4AÃ0zL#£táxïç…ÉŽâ½ŽArì3…éŸ²ÿÇCJÄ„M äŽž8¾Û\$ãXDOsì„7à^0‡Ð-\r*}«¡ŠŠ¸Øñ{~Ô)µô ‰ùDsi|:“<‡ÈI0Åüáä\0WŒ‘Â(-ìŽ\0 ƒ½‚ä‘&ÞÈÎÈ U»‘vòžÚè#g@Èå\$MI¹9'dõ:\"c†ÞŽ#AÇ¼:8GþHÚ&¡\$Š–’ÞÊáN\"¤ÍC\"¦ƒƒˆu(à€3ÂzC#Ór&Äá2^¢M‰³U\$pš…\0žÂ -gÇpÙ•–Sb+…1EÉ·Çòw‹á\r\$¦9¯¢(q\"@g:ä±@†2Ä†ƒ:¡(exš™’\n½Š)¬%äÅS’&ø¾\"á¦%†”î`©JÙQeÁÈ«˜¹¢˜r8„Ô#`Ê^\n)J\0*GI&Xˆ¸NT(@‚,Á\"„À‹2\0PK?)-¥0 vRá!³TÆ\"\$Š	šêH¦æ¢@ˆC0alD;-h´‚A}ä˜ìª3ò~ÍŽ'é¼'†ÙEÃkTgŒò³˜F Ü1Žl'VDš]5\rGÏ¦d—C¡eKhæ+W*bN½M ((Æ¼nÒ@tTgd4³†&IœAP'\0†T T„‰îÈÂ,I:voJœ6 4@ÎÒ¶1'2xËéÊÍÌ…9¡¤…O‚šTR¤­<¸f0y¨</ƒŒ”ƒ±âj©(wªvhÍ4¦šÉx25Àÿ&\"¬ŒˆB)‡0\"òûPs¹22Ö!†yr[I'dœ»¦âE‚¥#‡:X³˜lOîÌ½¶¤z¢°Œx¡ÒJL†\n\$°Ø:f•Ð£‘²¬ñm…@¨BHd†Às²gâs5ŒÒV<f¥iE·È<‘RÁÎ2„}`’“*dBŒZ¹„\\–~qN²Â2®m~³ÈŠnÉ\rk'¸:]ä?xn±ˆ!”aŠðÜ‰}Æ‚…}†EúÊÎì%RŽï™u…rÚÍÂk¤°³›Ù{Ž(.º¶îí%*×)>\r»—´ï]ôógí	‘HíÅ†ðîEŠÊA2h˜#™ŠJF.%²o<I´Oœû¤édC@Q\0Xøâ ¬cQñ„©½˜„æ3Tüž\rQrä\0 Šˆc9q­ÌÀ–#\"_×©²CÌ©d¤¬Â\n'*dW5uÃ•_Cñ/7§B8¬b*zWJÕCY÷EOAƒÎËÖ¶s—MÏ:Wh‹Hô[8›“…§œÜbuàwÓº’˜rò˜rZvV+•5õ,åq/9]Ã:Îú*%–=bˆQm%äô.’V\nU¡ÔJt=DœM	Ev!, çhŸ†Ý‘H˜…Ab×š‡mY¢3ÆÕgû^Å[LšÉ´Ð¬R²Íu4„ÜqŒ1§<åí²öœ2Zœ7„%ðºyNÉî‹ÏIC{^Þ¨ÛÚòÛ÷Ü!»úZKip%Öá¢yÎãØ[b[ÎÙâ²ÞÃq¬¶žé0õì¢Ã¯_ƒ]n}ð\"mYÚQ\\Y\n\r˜þH]pKÐj\rÇYÈ‘¢dËÕqÈÉÑÉH·7ÊHT¹åPTàœ~|@ì™5è|–HRF‚É?\râÜzæ×Ò:`«c†+t]\$ºwÌhTÛcZ*5KÄ¨¥gíûŸjvêÒÎ¬¶Vµ€€ä’¸¨­«OýòvÂJM|ððŽóºr/@ëº³ñýãoim=¥—ÚzÌh9pé­DvÏÃF)¡¤èZnj·âz€p-íá³Ï­õq¼èüò²V^ªò&GÙp?i`Žg¸]ÞQiûß_·V›)qh•Mä©o\\£¢]ÇçÅ¯£È=´¿A¯9½Ú^(¬û„³ï¦ÿÅõ¾ïy\n“{¸qOÖˆþÇ›¿ÃòžÙú¬“‘õ_RÈ—‹&ä4ÿ«²¤û#ÿ0°&\$S0øƒÎ'DŠñë`=ïôún(>+c-fðð&B¯âî¢þ3€æ äò\nKÒ£!bf€Dô~\re¦XCFôâ¦5ž¼ðd´êð(°l_lò‰4\r&¼È„mÃTž…®Éå¾ºErJP\0ÖŒ'	 Ú*o`& †S Ø`Ö#ÂB_cú8M4ÕÂXìÂd!L92àŒ”E¥Î\$gb˜`¨ÀZX‘ÆöN¢j¼B>ñbR#‹ê•bVÎl&ºâŠï®+‰m\n#4(\">\$.Àg\" RŠ6ì€šP ÒËše\"„œ¢,Íƒ®Œ#Ì°\0EC”|0È°Í#Š6È#íÜ2é®/#¶.\$I\$ŒÅ¯J	ŒZlŽ`Á¢ä¬d¸FŒA0°üáBä(\r\0g\\!¢]p~6¨8Ns‚_b¼ýÑ»î©ìâðjÐ\"ä*c8u¢F8P|'J¨¸ÍDã‚åÅJ\"Å£FÚ(ª¤l¯ŠaÅÐœ%ÖÖN¥× À¬2¦P¾C˜&å.¥¢<!BRíJVe@JiÈ'E¬*BT@‚;`ØJFªÐ\\?2R	%búœÞpÑ²(b¦Kk(,q†ÚÊ‘&«Z­ à+Æld5æ¯\"²C#†T¯ª&jNh0HlIÆ@R\"TEÀ	\0t	 š@¦\n`";break;case"no":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß¾õ¡C ò80r`6° Â²zd4ŒŒèÐ8îúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B0Pè»#Ã+rç·«dn(!LŠ.7:Ccž¶.hà¼ÁcìA Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒXÂ\nÊ‚	¼C êåˆ­KV;\r#(îO-R1¶xœ<¸ŒZ.ŒCÊ@„´eþÎ	øÎÈªZ5\rè¼R0²¨ÍËe.)§nðÐ;-èÚÌ¨£´E\0PÚ¶!-L„)lPÜ„B¢œ¶C;	Èó.TÀêØµëÀZ9Œl“2…£ZË%ƒx Ž«%pŸJµ“L8\"àR:ÝÐÒ16Ð’\rÛA £XÔ2² Pž‘²Îç{_|} (7ýï|ŠLø¼­l\0“)VŒ\0Š–Ž¥õ~C–‹b^%w€_3ˆæCÃr>Ÿ©˜Ø	ØòÜ#z0¹Ã0Íf*²ÎÞÜ6ß/ÉTB*9Ž£ÆþŽc5žŽIù0XÏÑ\r°Â¶0ª\$»[×ÊaJR*ŒãÈØ¿.A\0†)ŠB6R7×!\0[1©rìzàãŒŒ÷»f\n£¤ÔÁ<Ø(C”˜dÀÖé\\#bv8:[~J7<Ã;Ñ¿È¨°@88cu:%)Z¢9£„t´KªÇô\0x0„B|3¡Ð›˜t…ã¿|1zÂô´áz—ã	L4Ó¡xDºŽK˜éÚ‹ã;_„Aö)ß\n\\Pã|öË2â034Š+|Ò´ûÊvÕ±Ž”9I^÷Å–˜è¦ÈÀÚpÃ²5küð†Dºç)).%Ì¦.ø|Ê	‡‡¸øÄæÿ	\n (Ø„	ùA5À ¢‚’š@YSy)eÍÊ³–ÀØ›#™r‰S`Üú¡Sì•”ò^LL’?Z˜Ÿ‡DjSz0€…õ»¹\"–åOB©>Ð(ˆ‡–d@€ \rÁ½7d‘>!Ôþ ÌŒðA\n’˜ÒrbKIÉÓ2iù¤c©Uc€ÒÝ‡ð”áYŒ\rÍ<¼8¤N‰á>>…2e²§I0gNðéN‡2üOœXiCÎ€Ç@Ödˆá&äˆ’Hò@S L¤˜68 Òì0T\n5\"±~Taú1D…#–R\"¹T™@ŽÑB¦_A8P T³L@Š,Ú\"a½'ÈŽŽ¢ 3AÊs…D‚d‰HAX·)pˆUÏ:AØ·FIÆ¨^ó40Å ùjuI˜\rŽ}’:CºËÞv7ÆÂØËQMÁ‰ ’–G!\rÐôžcÎÁ ”‰©6Qµän¢Òˆc´!0ÞÁiB'žlÒ[½c\0Ñúvdoª%C°t•Óã°ƒpvÁ0QYÓÒ:d²Ôz ÛÔ¬Œå@ï,\"Zp‰iY¡P»HÔRCÒBe”85¤á=UD:Ñ†ÊÁ˜\niO©þ²(YÇ9WIq1„µ‰.ã`ä1\$ë&šbÞ N@e ¬¨’Ì’û3Ã†-áP´³²¤nl‘½²ˆLµ!T‘RZM)k\0¾4@ÙPTÁh2*È).ØÄ™*µ`g0Þž¤fræÈT!\$ÆB“é¢ Qj.PêHØˆd)”“‘“|\\á<(%½H‚\0^UîéŠŠA.Þ#\0Ëtµ\\!™÷ žÚ}á1nlÓ'ÀäB]\0	½BõÞÐA{ïå1e_kñŒAL[J…eùiïé<g7vSßÀé{	åî	`ºò+z°½þ½ä¤%†§Þ‰•¹ÒÝ‘””œHÈéšXºVcfb	T ÄÖRi‡!‘€\n\ná”1d,î­PÄ¯¼ø¡)Xà‹é%º…½‘›—	:ÈDå¡>¬vLkÂù…ü€Þ”„°L(t¡8pš\$T'¡¡Áx öbßVkAgI#šû#sQÍöRgób]\nq2Ùú²è}œ×înÐÁ²s†Ø¸YJ?5,Ð2#ü`É¿*ì¡¡ä#¨I˜sÔ‡/Tj9;9Ï\"<O§.Á,3ë¢Wt¤Öµ~w×õ;Ö)Œ ('ôoGÒ	L¤dë&uýJsvÈ„NÆ’^ÁJaöØØÔz—m2‡+4Œ¤ÚZ €è¬Ü¾ÎÛ¦kÉ^7Vïšö„¤Ý²émö1¡	Nó2;¿rëœIzs}¶IyË›ü¢`=õ\r7ÝÃ€›k÷\"`Ä8gƒÞbx^SZeª’l³–ƒ¥S!|L«1f¸ŽæÇ¼s“ñþ#¸3l¤	v,2¶ôÿÅ++[V\0¡ó¨AU£Uw´÷â– (E0¶X‹èiùÇ:œšü¥´ôÇOª®8“à©ãEe9òÃ§Dû’P;fxù*±Ê¼/;#dî¯;ê‰Â½ïÃP ©_uÞºx×¤ýÝ¹†ø·”ÄÂ'Äü -ÏäY¸\"øÊ‰O{Ü¿{ò>ÜP­ËÝ&2ùš€ÍS\r‹…YŒ‚yëJ68bI&\"ï?_¶ú?ÅÊOeÀõÇx/|Êy¿-d:šÕJwË¹¸ÐPC#/H[¡~’_…ü×Í;tÜ¾ü¬Þ`Óº@†§2]½ß9Žùû¥/ïéÃ÷_Þå;ûâ”Óù>‹ýßy`ÎþCßªÎ^ßØo´ùo*&Mz³‹J*Ohÿ³Ã@ÎO X+:8ïzÜ/\"ÿÐ0˜c+IE‚Bn(BHDd!/ÀðPB÷-?ë~üÏY æ3+h÷€èþ;iD)F9k8)ÃØeJ8Xºújp‚ŠPôŽïŽi†=ð†ð@–œ¥KÈ„V@‚Ð–VKäá!JÀÐŠÀCâîá‰Hd&\r€V\rcÌ!ž=­<èp}Žî~	ŽSòéN€\$2Éª\n€ŒR²E~K…L%0®Î@Ò—ÄP¿0®Ñ,sÌì\"iPÇG.f46O.úìbÕ`8¬ÉÙCŽ­‚|ãH8mÌ˜#øÊ\re ¦„	ž§C˜tq^:DäÜE`#¼ŸD0e‚Ñ£d¤JHÙ£=å´—íÃêÙjJÙÂJ¡oÒq“*L:E´\rgå\nÖðFòÑ 5Â‡C¤\$Bf2#ÌÑ°¬Éx–ÄüdeP³.†vþí9`š‹‚Ð1ÄÝ#±ôÇÄûìÞÀqébÒ-ÊÐÊ\$âðê€'p¨¥._qÇ Ë\"Ú¡k\neî!®tÃ”[àí¥dÑœ:K(2NÝh#\$G>œq¬0\0†'ÑvK–ãÌ­\$ºðÄþ0OÞdÃ\0\n„ d¦ZÀ 8bÖ¤B\".\r ";break;case"pl":$g="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*#‚û0j3<‘Œ Pœ:°#’=?Œ8Â¾7Á\0Æ=(È¨È Ãzh¼\r*\0åŠhz’ã(ßŽƒ’ì	ŠË„\nLLXÖC\n\np\"h9;ÉŒ3#ï8‘¥#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ\$£€Ø—\"¤9„\0ÐÄµIZØ2„˜£\" ê˜Þ5Œ)‹D-Âœ‚:l\":Ö¯Í€´ºÀÈ\\9¡”Èò;Í´úÐSŠ\$Ú'FH Éˆ˜È“1c ÖòhÔáWuírÊŽëUH—€PŒ:Ã[N·(ãú0Ùò€õL1`PÎ2HzŒ6(o8¦7ŽL#žÏs±\n1ËÒ*ê:0éHêÿ!/Ê0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çH_®‚> ¯”ëšÁº4E&Bê§HÜ1²‚\rã îÊ½€TXç=µUC&¾dÍ'1Ì¹uX9Ì‰tNïdÙBåœ\rÕà)ç)ìý˜ S“2Š¬àÃ\r¢³ë+Ô³bSÀár^*u­Ü¹æNY½•hÙ6æ\n=¥Ê.vÎOîÎBºàPÙ ¼h*„„xÌ3\$Oâm€LóKÙ4O²V–ŽºTÉ„²£AÂÆNˆÂ#ç\"ãkxjZ¹¨5åãnX\\ñ'«Œ¼n×ÇóEŸ%ÊaË·1R\\ÛYÎË	YÖë«ˆátýOWÆqÃG!ÙrsG+‡öýˆÅÎ\rü÷}Ðø= è›	È~œ‡’èî)ÃZ b˜¤#ÔO¤ã|cšR0¿#5È6Ž£`Ã²÷š‡]¡%ml6’6OÈy6J!Ì5ÆÀß‚rîÂ¦¤ØÌŸé-pk!~¯R”äœ”¬FJà|!/´Ðd0=A :@àÁÐ/áÞàÂË3‚ôôÃ(x á¹5½P^hrá”:C ¾ŸÒÍ@øÙ”òžÙæ€¼0ƒâ„üÃ˜n‚@ÅC}\nƒ˜/¨\\ƒ4ôØRˆ!,(1Ô”“SÐOX@?D¾†(\"¼ãÚu5!Ü\0Áz1á½7\nÃÀPÅpüþ9'%P#qU’8(R^LI™v]A¥²` £Z+j*!5ŸBäÌ#[3•  ¨—Y Óñ£;BdîGçº^øi|\$¨š35\0XyS@¡¬ø\"·ªJÉé:`\$þ\\’\$V p2¥ü¢rÉÑrAMä˜šù~øÃ¼¯R\"„£VFÕ EÈ Äj š,\r¡¬šÆ8£×ìÒn0F2O0][É}ª|­Ÿ)\n„ÉNƒÒéÇ†ÀêäƒÔç3¤¹ª\0Ý£aÀÁ¥4‘ÙX©Bpp^t¨„ôHÍKP\$À^RäÈãô)R	:\$§+›q*JZ’­Ñd^l9Ú’âlèô²¡Œ·6L©Ø©s(­¬v@C„?\$””ÜªÌÜ­j\$¥±fApÆÂrN:\0o¢»^ii¾* ê„ÐªñKÍpÃ‚Õ\nïî‚”hà)	'èt%£ôúþÏiˆ:ñêaÃt{èYá4203²„Ûj-ª(FˆÊ’“¼xÇ¬Dø¸†™®®\r\ra'4—^òƒÑñ/„¦:WTã˜ê”7\0ú<–ÄÏ‰b2—2á™]d‹XHo«Í¬2êN¥Ká„#!]QÀÔþ‚\nƒ •Ä¼1Ë’ ™žs P4£_2ß›(dÄ÷.J¿UmÝd2ÈL×'²4CÊ-±ñ`4¢³v‰¥ÉD§~Õ!ç¼gfSâ M¡5F©NÐÁ…úÎú<JY\rÁ‘¦lhQ®4›Rd\\»‘g2ÒðC(†ÅP+DbëåY.A¼1JÃÑ`_Ô²0æ'\$><¡†PFžd	Àžp¤\\_ÍéYOÝžûÄiC¨r F¤3,ÅœAAŠ’é\")L§hÐÃUwªAŒ…@¨BHÄ: B Úˆ_©øð\n¦iLÁ)jÞF2¶(Gì;¢åyÑ+5È	2:|<ê<dï)³Òäñœ)|à4®`Ûµ§u“xº¨¾9ýZõu|Ö\$·ZRk|¿^¢Vç]¡m{«Î®“»\nÍlJÙ­¶F¸V‹îaSE\n6ŽÀš8ÌÀ}}¸JÙªñŠºp öÐÚE?uìç-»·†ÕÞ[‹z:\rìhþ®0Ë¸4§ãàï]AsôÜ’¢9X8YUX“\0¡‰`ºðÔ~Da)PÜƒ/Dã¨ïXdÈä÷°æÉ zk\$ep­!’µ†-\$&]VR\nHáaMÍÌ\n		r\$6\0Šà2;0&\rø òAƒYÒËêÐ¹Ü©æ}ON;1\$kš¡Õ‰K S!ÔŸ›“~‰·SÓ÷ÆäÇÁ·ÚQ6\n˜4 öÛ—«§Z£0¯”NëØ!µ#û¹wN«ÛŠž'³Â!êôÄ0i°aoÌÑÕR5e\n=wÛû”Ÿ–à¡eHjšþ[Ï®_B[¬{­>˜Ó›&¹|É°cØèø~ï>ö3ÕÈP8ìfŒ,=ÅòL»OŽ°)}ß¼Ÿm<üOY‚åñîxûq™§Ï~{_Á”‰ón?Úï™ra®ø“Âü]×Üýë®Ù%ºNº·¶´øºÅÎ£=q¢dNÿü©ôFÜOÎìêïØî¸\n®LP`Ú=ÉªÍ7\0ï¶Í êäâêØ\rŠ!ïºß­NÝ'Uo\0ñ0GíŽ /ÛÎ¼Ù€ÌÊ¹nþñëð2(6ÛXÛc,ªì”«iöðòïGˆJ±ì–É°‚íÏ¹P}	\0Èñƒr&ÁŠÇ£*È\nö:¬ÎLêö¯¬`('ð>K¶?” æka„-g0kb% ÜAàè%£òÇ\$`M¾«¼£Y>\\„œP\"Ø>hØHÐì²í^†\"\n^pPì˜ÉÎæÅö(‡*È…VŒîÉ\0µìN2,Snîý9,LEIJÀýp†únø\nBTÊ÷ÆñoÌ&Àªg¯àTQTÅNM¦\0ÎFâsñlPÏ¤¹çÿ‰füCþý« 1™Ï\0PÐ¦ã\"lÆî+c¥fÆl§Ç<¼Q^ðŒz¢cÐ8Œ]Œ<Q <aK@j&€d\n àäxGž\r+%¡äã0DÍ2ûpñ²Q]\0000¨ï‘´Í¥š9C™C8ÌðFM±¼»(Íò9‡ù àäU î¥ÆÖ5KJ Ö&†>½Ñlú/ôú„ 22\\4òðýÒY&òa°šñ±´N’[Ê0ýæË(’|M¯y\0’ÿnäB°¥EC\r².R°`®Er&n¹+ƒ Ê#mR\n¬Ÿ,l3*rvë‘´ÊÒÔÂÒ;²à'Ì° ZÎ1ê%¤ª>ìôCb­Ò	*úJó\0ÿÏf¨jÂFÿ¬mq²(@eaÏ=\$„:i£;D†Ã…X3s7ä:¶´ÝB„eï),aÍúU\nj Ó5D¤¡§E5ÆªÛƒ3bª0¥l¶cÀT!5`Óc€â¤¼Ím>x°VÙ0?ÓÖåoópd‚\r€V\rbª ¢„ó<ŽBN ir9\n¨¨J®11ú¦Ów„Ö\$ÐÌëø!Ïu@ª\n€Œ p&Í´Óó*¤k‡ŸÓö2p–öçA?ïa2ÇO@c(2Ñ@äó@ôLºQ\\K¢0‚é\\B:?/+O#*ÃÄËì¢ÎÉ7€ªJÃXË¢J9Zç	¥ì>ƒ ö<IòÆ.­¯\\éG/€¯GÌª®Ðü¸@|k¥œê¥¢ˆQl @Þv\"bû¯vÁ´ ð©\"Z‰±!IÄöüLF(Ãhyô®/Ô²íË›”ÏIôÄê à8EÐìÔÌð´ÐE\"ñX|cÐ>E°æáI‡b.üL„ \ro)=\$’‚êtŒI#oRð'JÊÅÉ:T\0ÔgÜH©¾(3¨Áe>Díì®Î#Æ	qF=ƒËN)¶ìÓx\"€\$E®0À¦{çÂO{õ^ÇÔ«8s‚–fø4o|?„˜¸´Œ¶>qÎ6”Q\$ClhÕKVÇž—4óqhM²{(ÂÜKqöšêƒàž—@ÚEDXMbÜ% ";break;case"pt":$g="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ¨4£ÍÈ2¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›Lº P†0ÃiX!/\nê¹\nN ÊãŒ¯ˆÊóÇBc2Á\"ŒKh–Ãa\0„Ã°ªÜDÊ•E¬+?ñ(Ó®’Ò}Êoô£,EÂ+œ91âjºLnRÉÌì€Ú85ñc„`èŸŒ›jÿ\nbŒ”¯ËMxÆ¸¯2„q1*ôà–¶/8ê:³€Ä±lk”•+Ñ­@Æ&.U29Stìj'\rã²3 ³í¢BŒCÊ„µÅtØÑ£-æ±â0ê¬ºðJ( º¶M€(&Ã\\ã.Ùj á\0Ø7±ËØž9Ctˆ\rŒlèæƒ9Ò”6(Jr§©üŒ¡#Ål ºÎÅŒ6\$ÌÄ×¢lpÝ>)êQ\"c 7\\¨\nPÚ\r6ø¨NxÆ¹0o 3»ó‹T1ÉlÓ+Êôœ›ÔTÀçl>BëUecªˆ¹Žg0dsØŠZK\\®ñp“=®ŒŒ\"òÇåÉZ[0 PÅ*gY3Ó›>Lík\r8Ñ´©dª7ŒÃ3Ö7°²vR(›b£	ÈÞ '£ËþÉ£ÃªMm®ìXÙŽ[°Â3Œ+ÀAÅW´ „…˜S\rãZPb˜¤#qiJ„õ©pA7%NR^º\r»òX¸µKtýF\n{zú„Ž[dp‚bèç¼íé¼´/ªààšöü”ü¿tÄß’u½ðšÃvˆë9Žë¥á&®§D ƒC:3¡Ð:ƒ€æáxïõ…ÑÆØƒ…Ë Î¥¥ì”t€^7ÃÎ‘ß__äô5‚ |ÐÓã9Àð†| „PÊ0¹gëk'¬<œddÞÊJÄ)”ìsËr\"Æ\\4!4\nþÀN%¡\0D_1!„A@\$&mš+·6@ ¨’NW™‹dy@ØN{d…|™rðœú\$à(œ3’‰A(e%SÑk]¨|—âbÑ¢>ä´ý+#¤€zU*@‰“H€ùªƒ	áB¨3zgVÁ^?\$Ø,ÇÞÓÉ˜n «lÿHdBáÛH\n\n<)…DŒR±<*LtàÛ¢H!:²\\o‰á>#1ü0Ç…Ò@ä…”æâ`Ç„U#1í¯ÇöÓàoGà1f¢Èi`”`©˜3‹h„\"È³âÛƒ‘\$Dà!šrH±=ïŠ1uønT€\n	á8P T³Êz@Š,úKÈ²OœÀØ±Õz_J!@–1D B#Ë¾X“ùäÊÊEèrZµÐ@[¨:Ciç#ââ–a1R(Ö1fQ\n2ŸV+d8Çq)”âzIÀ50ÒsœHíª&¶LçbÀ¡tn¢Bªˆ	9ëvÈœ;JÙEd©e¦œ Ü¬H#SMUm\$¥J˜\rbÜw¤P+:²„IËW0E bÜ&çPå8ER†Ž›÷@æ^Câ ’Sˆ`îä7ƒ¤JázN§‘†È¨uÛ‰:0–XŠ4ÇHˆpSi«,\"\0RA(Õ\rš²Â	âË¡®¦ekY5ßfÑ­•¡\0(aˆÙPLV§e\$hVÛö÷<‹«ÿ\r´l¯‚åp•IÆ¥+\r¶ÎSP•U\\ê*ÈÔ*\\—þ–Y‹º‡)\${¿& ÓhOíœ5˜¨+MÂ\ruä¹-\nÔbÝzm\$‡9#\n¸ËÉj›šIÕ.Ï¨BH`º ¦Å ¡øpiVœœPäUËÌ½wmu¸Ð^X\\kZIa½^(\\Dh¥#op¿,%6ñJ~&3ØŒ†dŽ¤Áp	ÅXlÁbÕ¥\\ÃƒÄ8Ïc\\oH¬3@2X°zkO\næ.hÄáÆ±|WYY&Ê8ýÛœÌ/Ý{iÄ¸i¿\$Â&rÐxÊQ/K¢wp®jË‡u®Ó8Ã¹:R˜ž°—/©DÆ”²l†Œð-ÆàœB2xÒâeAÚ£èô·	hw¡ŠÇ´Œ×ŸP~¡Š\\“#Ê=ØÂ÷<žs•ª3	'ÕdP\$\$º\\]X½ˆ(¹<ô˜¸0^‹Ú´Æ„”ö›e°e\n§cäChTéãˆXÁ˜Z£±]¾Ô·)PìÊ™f¶²å%z2²S}n\0QFIõÔ½Dk´ªh»Q±j°GS.õ\r4e`+\nnú˜[±m®kyo¯\n(ÛtÇdŠ%ªn%ÆHsº„\0P`¨¨o;–¦¼ÆwµêLg5¨Ú¾‹6Ï©ñ·qržGY\r—Š{’®ÕšÇ'ÒÍ­fHbo<*ÖÃ/¶\\é›ó%El®±<²‡7XÖn22ky¹“|uÓ3/NËC™ÍC6ê¨2ë›²§^PªG·šNk±:{EÛÛœÎ¦v^ß«»‹Ä ½\n¦Aê\rB4A.¹.]’\\Ú¿ÌÙã^jØ”cf†{ƒC}˜¿“Sþ@‰\$ï,›.(^|\nðÅnWâv ÷È9(Qò“ÉÝ+8Ñ·nˆýã´ÝÍ«e™Ò™¹ÔË†û§½üú5\nÉ,‚tm¼N>gç½²¦|œ{Ëy¦\0£ÿôß¶!òö3¾¿X l¾ö¾ç{Üo;ï¯¶ÃË—5tq…’%†ƒJ*6vòis%´ìF]Ì	hßÒû”_ÐäØwËìïü¿ŽæèðZ#©\0¦ úÈ÷¢ZXÅ; d\";KðýlúFûfâýJÓ\0‹ò'/ L\n@?¢kEÌÕ´Z¡†F%p\0ØÊ˜v0]VüNSÀëðbø¯ÊÜ*ÕàËðfœmÐŒõb(áðfÇH#Ðt¶P†iï!	É\nëº.Ë¿	ëekÌ[/Œûä,»Å³Ãü¢[Î÷å‰\rpÌ8Â\0h«@ªLDÈSÖû\"qì0Ù‡}ÄLRb[\r\0	\rR\rãž/&a„„8ÈcŒq°Bw£fPøÌq2\$ÚÞPì…¶\\Gðãh0BöÔcq¥Ú3nÂÈî­Èrê†LœƒÎ\r€VcÖ[\n>!DÕ\0Ä3©_âZÉã¦×ÀÂ¥¶*i¤J§R‘Cs©ê\n€Œ póf.1nÐÊŽ¤Ævˆ'BÌoL±Âil…bš#„2(œmÊ¯\répÜ,÷ƒ+R0­ø\"Æ1ñ³é^½‘Ñ fº âX'\0 (GF¡†Fº(¢ä	‰•ƒ»\"‰–(Ñˆ7EÌë+´#^VÑè0ÇXî\$Î.U†7 ÊrjP6RJ6@ÌF‚µh´A‹45ãdöCræ.xgµ&-Î0²i&Ð¼0Íµ'ƒLºêz§.\ràà9åØR‡&c–T„˜½b3#”ãï@f¦MÖ'N2åpš^	dL2á&®¦£¬#\$”Ã;&¶I²\\eäL:€@ø`ÊíØZD\0žR¨¶À‚/1\n8Êì.¦S1‘RXd*r[#Ì§Ž^ç(¦n–ðeÀË%È(v‚W/e\n%Rÿ°{VYgþ•f§„7PhGF€";break;case"pt-br":$g="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œŠƒJBÜƒ(ÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ C!Œ0ëLP¼BËB8Êú=ëìl&3ìR.)É¨<l)¡ij’Í¾ñ9C»i[]1Ï;Ç1xŠèÆ¬Ø˜7¯ãtF9'£rVƒ2£hàÚÅ®ŒÜE£¢€270)Š2bÏ.¶£òÀ¦\rê’‹‰©Ôñ4Ã¨è:Æ P‚6 ÓH@–¤ˆÝ5N!t£ÕKS°œ7«òJõ/A-\0001(0Y¢\r'½ÔS ÊÃªÂSÁm½4Év\$‹Š\r8ÇT³i£š!a\0Ø€°@Pž9GL¤:1´cšèŒ T˜¨Î‰Üâ @¯<‹Ðƒd¬@U‚6%,PÄÚ¢Ã}¾‰ò«B	Œ¨Ýp óš8 ÒÏ¢†©ŒkÓóOÃ˜ÊStëª!L7lÉGÔxÒ`ÛÚ¨‡%dcžK¹Pë)cØä1ÑÑ}š›\r#b<¿ÅâLì¾>\0PŠ<\$(c)“¥É…ôÆC;šL¨¾[•âµíÊSŒÛTÖ%ïÞ3Ãc\0002¸Ã4\rê\n|<ÀL¸ê1¡IÌ:¥6¼Ú9…ˆ(å¶#>Í70u\0¨ºh0P9…0ÀÞ5¥a\0†)ŠB3È–({’:Zê£ƒ2ø6î‰zòØ®ÓÍã¤­írÐÄÈS\$Þ¸Í½B±èŒÔr0ï:+øÿ&¶^À#uXžN{ &±Ôê@Çcºù@,ƒƒ5!óäd44c0z\r è8aÐ^Žÿ(]ðˆX\\¾ázW÷^	XçE…á†9ï¶/ßiðÖó>Nì\$èƒÀ^Aò{	õ?¨zã tMéÅ9œcvÐ23b¡ÀÊl\r¹ð5¦-œ™7.gàhB¨!ù(²0—2@Æ’E–€H\nZ´hf\n\nÀ)%E™\n™ æHCq6%äù'0Ò‡×òô3¦\0;9R¨IÈQ:‡F+¦2„Q\n42<kùŸ›‚žœ\n’!@áá×F§0~‰ý&äÀ0 7Šžâa&­•CcŒÁÙ8Ñ­BÌ\r9!‘ô´ ÐãC×@)øáúñ‚€O\naQ2¥ÚO_še–Èd¤8˜œ5ÖG#äutÐf>š2¦]˜ó\rÈ|3ª˜¤Gx\nkd\$Ÿ \$îÑÈ FAˆ¿Éãs`€#HvÀ#?!FDB,•_R75Äšb|þ]±b+àßBàž\0U\n …@Š¶§€D¡0\"Ïb0’!Ï\r‹	UPÆ	xÃIôõ¡’BN‰á>(h8/E–{ôuSŠ|Á2ö\0é‘úò2JùFNQJ;ÇU‹T0¨£ê¤I<tiÁ¤<¤„QéŠ`fi‰¨¹8ª(\\´XS@™&*x£Ïào\r3*K7ç`¢-\$cm>£¢öu^¸iÔí¢ô˜Y£& .É…gDPÉ9ŸhU€íbìÓØ:FùÅQR‡”,AFvÃ²°¹“d¢b%¹Wð‚¥Ìi!Æl!†ðØeý1–='Ø¥ËcS²–\\©QD`È¦ªi”jl½EH­	Â±Ÿ^¤îÉ£k@ÑØÃ§d4·B©I%¶–Ùm—âF1€^J‘4¬{jÕÉ€Cœg–©3¼]±:/¡ü‡\"/\"î:¿iWNê€  T	òsZÆ\0005žR‚3Ÿ7ÔØ7#Ð‰9ÑEá¨£vQ<Q5!SAP*†Ô/¨5®Çøx-ž2ÈÓ–e.‘2œFÊà–•phÕy§Vê\$ÓNEìknÂF¨©gnÞp¹¤ÃÄÈ3ôÊ€N!Â2x²bSoqFÅF™[ÍD/'èç§«%‘®\$YçÀœ«Œ Ý\$ó*%8×%»sŸƒ1t³Æ8èc3EƒŽSÙÛ›†#–VZhY*¦¢ŒToä^4ªLÊñzÎ­_±ìðS`ñø_p—Ô ‚òÈaš@¤pó%bø¦‰_*º5“\0îC{Íy˜Â˜Mîñ/<D!2xÈYëR3˜˜jifJ°b/		4a‹2úÄW1FÉ\rëÌ¥ð¶¥F;V&¥¡Ók	ÈOØ8eÎÔ©•b„û)Wb²±±™æD%lZÃ¶	Fo05?Cíë¶Ü›tÅí÷=R×.©ê­Ð—cÀQG^&n³-uÂòÃ rƒº‡DÕ\"`Ñx!S¢ËzSÈpKøRÄT[ô¾,`žn-•»A®yÒ©TzCZœŽŠÞ4À-‚2¦‰ðS?ÑmC¨¬yš›ßSë·ÛœÍ¨TŽnhÞ-ç\\ÊªUÞm³·CÐüòªôz—ÇÑ­OªäÃ¦tmhÙ‡76‡i¹–]ÖzBJë½au«‰‹ç3aJö˜\nó›168pF‹a`Ü}‹œ¸	í—»%wqÜðî<7ß ú‡r}Ìœ×=ÛnŽ¹¡œuËë×:tdžÍº¼‡ˆ66RùTeÍúNäÌÖ:‚AâctÜmF¸/	v’ry´\\6å‚ò6ò‡a‡ÑYÝR=Pš Ï£å>™ú²Ç+|Ã{\$,•¨©Eî5GºDçÍx¯)tÎæ¬?é¥\"d¢ƒ¤w\"PJ‡jk‡—äCô^µãöçí3¾ƒ±T.¦§íR¢ÙAø¯ç.Æÿ­šéîÏ\0&ÛB'\nTüj:¯øaKìi'3\0F\$¥|^ÂŒFçnSB8°h„@à\\\$ªc	Pí£ÿêœòöíÍÑ\0°UÏ>ì-äÐÎÎŽ%„²&2·\nÄ§L/Oîne†^¯ï*Æ2Pz'NFcÂìßÆ<–ÂøxJ†J‚h f%ÐPéIœ°¦P«-àþ­¹\nDO¯0+pj›ð·°\":£1\roœØ\n\0np©ÐÙPçÅPrSÂ¦¡ïïâõ¸Z¯ß\0îÛ±\nŽ-œêÑ‚üº°ôÞPù\r ©kŒàÑ\"'B¡ð¾M€K*C\nî»„¶toÔê1SnÐ	\rƒ\0`ä‡¨HfÎWˆn-LÛ:pŒ^Ãpv¬ŽŽã¢\n*Üä\$nZå\"%\0õ…â1C¡ŠW¤4.´Çñ‹Hj©1”ð†¢úƒÔ\r€V’ ÒZ‚,\ràÄ4i[	cöÉ\nò:àÂ¥®' Œš(@\$1‡&ž ¨ÀZT`àÞ2C¼É¬tÙ°×Lìï,RÙ‘’'‰²Á1Ê…¬\$D~bN%#0Q/ÈFOµhž\$‚1®\"ñxh ª*m¢kËÆ\rÀÖ:Ã&àíDr‰ðe#O¦»Â†M¤latS‚Œ/DÖG#\0;ò–pn*“¤l\\, °Céåä7µ\"£E„_Ä+r´Ý«)R,§®ðËX6£pòC’\0ÞzG¨SRÆµ²¸%FÅ’Â²RØ„ca-äÝ.\"¦* õ.r¶9ÏÚ¢à„@üQªz02ê1¥ ½­]NZæ‹ë2Â~äz¶¥Êe©,Y\"8I€ì4rS\"‡Ž7Ã2±3\nPR îJÌYä[S±F00-¢2ŠÜ/¯Âí`Ëƒ7ò¾2Š`Z±è&%,É.ªæªT§+PdàË5H5D•&%\0%³`K°à%Ë®#²FÍFˆÅqšFÆú/€Â";break;case"ro":$g="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¢ Ò/!àÒÂ¸+ËMc\"1Ic²à)	ìü\r)¤[¥cÂ1¿P\$T80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÆìBpÆQ¢ð\nšê0BÃ1TÏËÌè˜7Œðšp8&j(Ü2 Lè’6Ž¬¸**t¸ãã#€á4!\0¦(¿ÈšÊ²cØÎˆ2TH÷+)¤˜†N‚m*4¥ÉCÜò õD<o-\\ÌÖ.»\"É‰¨¿´\rbºœ\rÍ“:ÒÃ}D:6`Ag pLÌÊÔNˆŒ€ŒpHÓ\0Œï%òBÐKºò€°î’ñ\\L;Vò5pŒÞÿ)ƒ£ú€ŒêCFàBé¨ëoªÐJ[cbm_Â­XÂ7:Tà@8Ž©˜ór¼‰„š–)¶Å3·Æä]£›ŸQ´µÝ`4ÖLïO(•WµFF2¨¸ÆQi¡¼pégÉc[ ñ{‹\n\rÓx2ß¶ý8]ìèŠ<j•ô!¾Ïk•`ZñOZ\0ÑœN\r°Í½ PÙ/MŠ7AZc0Ì6/l³<‚&7 ¨7·0ó4¨Æ«Žc˜Ì¡”è8–þ0Ð0li)‹aJz!ŠbKt@A ÀãHÄÞÁ«/)Òp3/\n*«ô{Ã4m?¬E2\n†Ð¡(4ŽBÚ¤ŠÅqƒ•\0„:ã³®íÐò`ÃÚ3,\r’:§¢hÂ¬¦hÿ¶9ŽëÅ,±+ÃÔ‡‰`ÐòÁèD4ƒ à9‡Ax^;ÿr•Ê§‹ÀÎÔD\0`„À^ŽQûK¯¸/† ØÃÃX\"Í=G+€xÃ>R%.†…*¥Ï‹¡teiB%®ûÁ\rÍ-Æ†PÄÀÉÀs:ä¹A—ˆV§2{(rVYç2FðëÂ°ÆAÍÂQ&œ5ÞÈp(*Ni4¡T^›¢n+Ì˜‡åáÑ‹\\.ÙS“Ò4Ž	¡6(¥\"òJ±MjG)­Bºt*KY#ˆÄÐ:—´‹ÃÓ ÊDž„’.M’.\r*Yd•£B”±Ç9'‘ŠDZòˆðA)mÔ¯wDÜJ™’E:/ç²Vj(a@'…0©Tö>'‘Ô…Bò¾R±(¤ •Ø\\\\(„¤—È8¼’”œiwp—´”‚C+E|É04“´6Í„‰%fá¸’”ñ8gSLH—!SvK0T\nrH:5»á—Kdä9°äæÛ‰AÉC€£·ÐIÜPIÐ&ÀÚ«ÕŠé §¼ýåÈ@u)’Ê†ö4bªƒBdu.Æ–’zû\rËõ. ºA˜:;¡™Ž¶°@‹ë\\©m\\!0ÒP	‰¡œëÆõdÌÊ-ä :‡:€L*&£Š³ZhÆŒÅ—º`Ý!eN¦P3	€Né-@åi3BUP.0µy£³£HÏ%f+!eSüVIbµYÅ`Ê&ð­M¢•:KÀ+Vjn¡ÉaRPmÜÃÈ–I`P	¬© h^ÒñŠw†ÅÙRþ£PsE”S:\0A¨z2J€é#4ÒÙ fAMP* Èªq3?MŸrövÏ\"L«IUZ†Un@—HTµeÚØMàÜ¢¤b!‹}š2Ë}tCÅÓ:D2[xÃƒ3¡XÒÉ¦;Os7&V:~Ú!(y01TYr^jv¯‹Èg¡À€{à¯’54åzxK	ÔI¥G†-“#²¹3±1IÁåpÉtÏypäoƒžØB);…j=™`»^ÖN¼XFwÍ¨C	MŠšÒœÜ\$mD\rT†BzØÈ™4a²žÔ©*ãˆš–àƒ\$š˜à±ÖŠ–ëÌ®­ð£[ùbT+ :8Å¥”Ö1¢(—Œ•ÆP•Ø³ÅËfG.•¤j³\n- êñ–'¨ÌiÔÛQáé¢“Œ´îsa=ZY,‡ŒÖbvQÆŒXáŒÿ—	Å1Îîl\0¦§šÓó­+O(;Ôeˆ’Yi.Cñ¥a˜dJ¨[Ôuô¯Dqf	ž|»¤öˆyé=‰ñ\\DmBktÑ¥ô3×HêÚ-;‹YA`ŒdÃ!ªEL‰o  Ùy	ºâ²^,‚å!„<‚µ#ÄÎÎ\núX‹‰¤£Èñ#Íd&l9k=J·\"©nâ±äå’fªÖãi›–•-Ñ½O¡3Š¦å”=é«.íà‹ƒV(õœÙ^eáfS†î—p}ƒ¦´¢4M«þ(°Vú1¼5þoK\"÷1l†D4¶~cÛ5BÁ¡]*,p–OaÐÒp£s&œóvKÌw#|[ˆP˜p“Ê{çì	oÜÚ-sâŠÁ¤kø0à4T\r[­m=oþºÍí«UE¯´~½¦ÏßžöJÙ×x9Z5•S±²þ¹xqZè¹Ö2Öæ´×»}³h=ž†vÝoEðÏ¶&Éá;Þe«ABS¢{ÎjÐ@Ü×¼.’²öoÉù‹¸æ<éä»`	ó[GæÌ\r…O\n¬ô9;*â9Ð÷¯‘ÎË–|’É÷Ô<%eB{¸!ûÛÙð=/ºï¿hûèLþG™ñŸ-Qxï'O\$/ ÷tŽ:c®’Õ\0a¢|ƒò,1ÝÃ+ŒKÐº<ÃÜˆ¡ßfEï°×áŠ(Îº? .Žìkj*úÀÂ¯î³\n´ù‹Ö÷ã:¹E€æ£¶¼+ª§ëì½	–¹Ã:¸…l¦©dù,Èñ°,¸Ð0_ïJøNÄí„¨«Š¸årc¤ã\nÅgÐ.¹ÈÄ%_Ââ­êá-+ŒFWpáð6ã-,ÄPl\$Blô¢”\\åP<ˆÄ†tg`Ë	äºÝâ®¶C¤Á†@ä;%ô'åB]#¦:¤J8m„…fL\\†’óÅXø.Àøjµ\rl-\r°4ôïObIOI	£ÜÃnnU¬ÈõðØINü†e¸š=Êõ`å\$V(cÈ\$KÚG.rAVæÌD  ÂAw\rÍØÝÑ1E‘=né‘FT16q;ðêâ/ÀA`Ç¢Ñ±3‘Jqrj@CD…\nÌsp\\H zç³cÜäQväCn[él!JíÔ?M+«ô×qbèÄR¿1¯ðVª‘šôëñÄÐk\rÁDÐEEpk\n\0ªF(²Å‘°ð®QêM±ñŽ‰\"{±îF±òúbz	¶lko>3  P§\\3ÂÖ&X@VÞ£ôr«4ZQwT÷õ#d¤1r<ö\nÎ\\§±ÒX….2\"lYŠA\"N @/2ùC®ËìàŽ#-\$2o\"q'OF/'6KÀØi@e€ÖÖÃpªëèPep&‡ˆo°6C¨X\rªŠ+C&ÿ€@\n ¨ÀZ,\$å^¤mRÀäå,t†¬Ñ\r-\"LóãæòÚ‡4#‚<¶BFlÅB2*¾‘CãÂìf†.J«Nç#Â3EÒä’ž#ê,1b\\ôÑdTçpméU Âl…ã‚,A#\"zN%ú/€&¤bg\$þ)CÐ?ª,RÊÜãŠNÂm4ÃXPT„úM¶q8èë–«ªÂè âc+7n-« fSs8êÁ\$Q²¬ÆíC*)Ãh6Ã&tKÁ4ë\\ÇÊA8,36aÌFÀ†c³(¨sIÄV\\¦F,Ø_ïÑ=Ã»>&¾éN^&#¤‹ÆÙ'LMˆö¤l{Côå3º\0¬&@îJþw*\$@ž¸Vï./ˆ²´«` G”òÆÒ¸„&3 ‡7­ºe\"BÈ£/³(®#Ý>`›D£J¶Ê:1Øë¢‹@¢û@ãv´iñ~±u\reÂ#­ÞH(gr<‚@	\0t	 š@¦\n`";break;case"ru":$g="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)ø´@%9¨í*I.’Z¤3¹Â{“AZ(š˜ÂTq\0(`1ÆƒQ°Üp9Œ¯ðXi\$fi'BÝãðûæ2’•,l±Æ„~C>Ò4P·üT!ÕHæˆkš‚®hRðóHbúˆ°šÊ4ø½i6FFc{Y”…3¦-j´rÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Ü¹”)#d¡µîÃ ŒÀ©),zn™¥LÓŠÖ®ém&êÜ0¸NÄ.„A%Â\noÒ7ðd\r«‹’”ÂŒC8¡”h…*ôš¨ªhéZ¨]9kcFhÉ0¦:î2¢FHÈ1s ©SŒÑ¯*in‚²hÙÉ‰9!©ôL«.™Hµ—hé¡\rË,	Á°²dÄ¦«šë3H¡(¤J’XãD’ÂØí4ÆNì()|Œ’‰€¿F³Úí†‰¦Ð¹t™ÒŠ#Œšë\nÇ1Pqsåšã,îJšSæ„\në³î\rHhR±Ìæ»ÉÔ‚„-rOB°Í»Ñ,;´¨×\$ý-ÊhÊ¾¬§ðúÀØ­:ï+¸hÉ<æ%¶ŠPÀ‘éQd RRÎ	#hà÷\r£(Ü:-ï•òþ\rã#æúŽo ¦(‰ƒKô¹ 2T™!ÚÎ5Gn9‚[&.@ ¶RÍ4Ã‘¤,ßÝÅÄæ0™,ñ–-Kš\rË°Cc¨Õ¡K]®­xº!.˜§I¨Ÿ5:o¡çíR÷ QNc‡Ö\"bŸ)d2š\\#\$‚]t¶­\\#8 à£7}\nGh¢UZ³…¬\\’ãŽ‡DRÒ£9IkIÈÉ6¦©î}JÝ,õ¥Æõ-tX[pŒ:ƒcç\0½È¸Æ0ÑF•%Ž¶æ“k,CZn®ÅR…(5,Ðj‰K0ŽÔÕ”¤¬:—Žrj™BT›•e™u¢«(*Tà6e)Þg‹´4æjîŽEÚÀú>iaû*}1¥HÔ°ùf†Ä‘§Ý\"KTìŸ(¦2V¸2„\r¸íé“]çæ“vÍ_xäµä»•Â®‘\r{Í”ª\$²°“C`t@(îðÂ oÁ˜6\"°ÊÃ\n¢äTP7žpÚæÈ ¡¸9‡PÆÏˆsÎ@ÀÞÑXs‡Ì9BÂÃ\n+	¢ÔVOÐ(`¤¹40âÌâ9QIMU`†ÂF6Ë4‚âT¹Ì;#dÇ<À–à²Ä*G…x²˜@@ÌÛ;+…€_,Ö\$SHy7KÀÏ¯\"\n™Á€qA=‡®P]ALDÂà•GÒlWÅÔ;*d\r¾•àúN:î\\i‰wGÅÐô„G	¡„9Ÿ äz% sá¼90 Ê€iƒ’/ÀÂx Àf ˆ4@è˜:à¼;ÌP\\C\$F\rÁ”9éXÁzúš!àýBÀÒÃp/NL9\0é.Âús¬åê½Ã*ù_`ð†|¿Aÿ\rÏÂÏ#\n=2ÌµöÉA‘p\r),3Hj^S(ŠŒ¨ˆá¢éËMHQ´À¦w^ìŠj‰Ä|’˜bbuä²KHbL5Øê™FCÎùœ¢d¾ÎÒÜO(hm7·¥\0(.0éØÄs”*T“±)Ör¡\"¢‡8ñMfØöÎÎBØ%ÍJÑÕX×cËLme*E=ªƒ\ra,'Ç\"ˆ;7Xê‹b¨O&PC™Gß!³¦œ\\Åá (Ê\"ÓtË­i/ÒŽH°y;À€2–y—ã\rÌþàAˆu>+ð3 ÞA\0A™0zSŸÅô6`§ÌþŸ áàú.7T¥_6¦ÓPmaÆ*ÅÝ%ˆ¨€O\naP­è\nl«³µ–®¾¼×dºè±c¶ƒFÛ)È‚W­)ÉdVš_\ra×ª\$µZªUZy9DÄ½;Àö¾]Í‚ã€t]úœ3@Ól°n\\7B¥îæ@ –áˆ4†p@ÁÂ` Ç´òÉn‚ P¿V.!¯iX¿'Õ•²ä^f9š¸‰ôs¬×}³ÐõH‡©¡N^ø#rˆHèÃíîº‘š©0B1C(k›.‡^‰Uù[ï\r×5©OqÜ)®²í!º‚ÊU«´¸WU\\fCA2†`Âäàv!²É‘4]Ê{-!æÝ×UJqŸR¡Q¬H¶‚§+[!“K ˜@u¬Z VqxeÙ‹r3^ÄVYI@—¬ñ­Ï[ï(B—5¶øtU¿L„x¨&’Ú|¡Pã[êâþIcû¡X¼ÁíV£Nž\\¹^;¹ëN(ÑjÒ\$ ´×Í›î6‹,M¹cUgF§™F¼EE,Âà§&· (ÚQJ”ÞÁÄEÁ\$É¢J™ê{8;#j\r<Ð1{!#&øíbyˆéƒ%Äï9\\—Squ™ ‹E¤=Pì¸p‰Ø)†SÜÏÐdÏë{Alv©úÂŠ•f=Œò,ž+Ú\"Óuc„Êws@µmYí¿AN3T\$(Ÿó´âÌÌYÊ<D÷êI÷“*]­”,QLCVËÀcø¥ßÕVÞ~|(IÙÛ:4hp‡É9•®µÒÑÊrfh]9É[ÞšQsv¾@Â=o³†/ÌcI0&˜šCXøû6¼MñïR2)]ë€*™Ïë3ZÆÈ'\rMúÞ|fƒZ{¹nJåJÝç¨ÿA©=êÔÅ>B T!\$#3Iñ¿P`ò†û}ƒ†²ÑsZÄLj˜œgLŽŽïfˆÌkD­êˆ4†.¨bà¸öÞÍb‘.K}fÊgYÑŽÒ¾/d•.×8eÂ–ö~çYÜ}€¸~çµˆsO§übò^\r¸÷ÃçüÆ.>§Öøí|=‰÷¾EÒçe‚ŒGV‰êÛŒ¢GR´=âÀˆZ…Ü*Šþ„dâŽþï ø/ÚObÅ\0¯˜¢:~Ì4\$©OÖû%»Ì}\0É,Ž#¯¡}ïÊûÖ¢\0pC0</0@èhèÓ ÜFˆÅø²Àî#Ô\$\"^c‚%‡†\"r/bxù£²(oˆ÷Â[¢b%SDàZþpÉ	ŠûpLG†@â^ðøŽFß„â.¦“C´Ipª!À×®u¤î3ƒbª\$OJÄÍÂÏfF‘„¹/PãœJ‡TKOLhFÆdž3ˆÎ}¥Î}ŒlwíÈ[ÄBuï¡Dö\$ìÛo¢0\"R&-bç\ríZ\$ähêMÂÆ*Ç/ÌúPÌð\"ØS.f,£¸.‚ZÍd[¦óäåñhOÑnÞt*‚úþO—“.7bÅ­\\Ô,…¬t&LxÈh¶Ýî6å%Xð”áŠÊÈìNBžJL<D®ÜcVäË¬¡D£¹B¢æ1¦%‘ªDÄêF1 ¯N:ZË¶\$,ŽwHåÎPPO”åoÇ\0ºNJ!§.>-ŽBWÂü0pŠÆ,Œ…Å´5e0í\r¡š'ñ<Ò±#¦(Ò*ã\$QxŽD<¨¦@z§\nÑÒ=%K£Ñ A1jÑèÕRC'» ¦A\$ízFêBm8Õ2@€Ç¸áñ{\$ÒfñÆS\rÂÐîÎj(+Q Ò¦ ©’’àÁ#7,cŽù­`@Îìâ‹Ê\$w¬g’Y¤½ñ~ú²Ï\$qa-QªSƒ-æ7.O6 RîK²ˆüPc/’Ñ/âÅ,’xB®êd’âç³!«ge%+ò‹,1ŠÃŠ¡òï*\"B*/Žaèµ“NWÓRóW/,Ä+Â636J35‘5RpÝw7l½’#ê-‰*ï'\0HD&¦\$L¬kZ½ã\0½Å&Í’EÞCÍP¶åÓ‚v+”­\$,FuŠ99„Ó\$Nƒ:r\$É%)®ÎPªZy§àn%»=d4,&.NçbÊ1*ªsK¤×8“µ;ä¦LB`Nê0’°9±pãŽTyÄ†çÌÒå“Ì½êfÂCÎ(ÄÑfØ3Ž³q4gÒâ4Dâ¦NÇ³AÍ)5²cEŽ'EÑQÒ„¤òtÓÐG*’Ë2ÔoD”^ÊRŽo%Xu”b¤ôgH´HêGT—4SEgóIÝIRÑG‚ï8´¬çQ0QKŒðv”ÇJ28fÊÈÒ¥&ãÔ<!A\r8âBCn(×n²)ŒQ1ˆµŽxä^î\$uD-c0“31g\rI´s®%-Ó0AJ[Q“.;RáR…\n”ºÓÑjeoæwÆ^Žøj£°o´ÀåpõR®î¼¦kLÏT5G\"iTÕ\\ÔD'0uÅÄ8ÑèI”\$HB‹e\0A„mn£¦O=e¢ç¤}*Þ„N2KF’V±¢/ï]µŠÝ%\"7ænbµ˜¨PNFu¢(õ¶¸U»RÕ¾©•Ä×ÂQZ5%\"@.u=L'Ÿ[lKY5ÖZJ¿YÊ=ZwH*&õñõõµÂŽ•ŸZ1“!5§EêW‹}[¬*Ñ·^ÂeÄ;;–8.Ž˜/Ñ5v5Ódn/œ!so1¢§5î—e.¯ds‡ë}c>êp¼vD!v:eöweN±,M¢¨Ô¯MFR|ï©uøJvIQSt®#\"ea§)Q‰^6£jqÈJŠ•Yv®F“A8–níða’Ö}5	QÕ-0±÷Sb µFF1MÄû¯¡O¯á0òÚ\$­f0!ý6ó4/Üû²coÕpÖ•ç2GEöý÷þ÷pE .l¿<ç|DrÊ9i/ìàQ5o–ïp²‡c5ä/Òé1*§qË§E4ªï7Wbgp”·^7'3—hÿMî‚@Øsh)¥FMQÂ&Q¼yÁ‡k®toWAwt(àŒÀ‰â©J\0ÄŸ+ê\n ¨ÀZ\0@_@Æ`\$Vö0}çïA×92¯d£ÏhâªewÐnÕ[èé0ïxŽïÑ~3ñ}3Ã~É-}®ªbO÷5’!ˆìP¤ïÊ>Šˆ%q®ãFfå ›|€Ì4>ÕdÃî&«—ÿ@n\r^µP„Âto·xìR5‘Æ Ð\\ý¥	c]mMpRÑ9U·eÕA]ávqÔ-[•ô!áSÀ	‹ð°¤Yˆ¸Žž)X<ƒð@ÊO1:Ú4»+1±‚eF0øæ‚i<ƒI²ø·-ù\$<V¸ÀÒø±‚XÈ^\nÐÕ·Ö¢8ÛB³‹˜\rØ\n‡(óCÂ<w°«>\ràà€ÒˆÍêô‘mŒme9ØÏE´‰G,T.åzI:±„9ÉQ¸ÛÆžStÜò)Ù<¶¹C!SãdEÖâµä¸uj¶‘'FT	I	F”ÀÒËmèô`@\nÏ2à\nÀÂ`ê Ú\\ÇZ½Ç&VÐ]NkS¨p€9mfèÏç2Úè‡¥ânF ×ÙAÑ,xôkt Ôí;)§ÊÎøÒÏG!øå_c”h0?#È„ùq—YØ¹\\öÆ5”t¶ÃaPåa 7Ã(7hÇ\r…&Âîu…5XrQáNA )!9£D\n ";break;case"sk":$g="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸ì2;’Ù'ã˜Öa•-`ò8 QˆF<ã˜Ø0B\"`­?ˆ³Œ0¡¢Ê“½ƒÊKª`9.œÆã(Þ6Œ££2ô I˜ÛŠcÊ³\r¨sþžŽ@P ÏC%l6ŸÀPÕ\$hÂÛ­±cð4b`9¸œX*NLÝ´³lÞœÁ€P’6Ž	Ä7xA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´G¹A\0ÉÅ‚ÐÞú½ŽË%£Xèˆ)Mà#CB~¾USâˆÛ°J\0ê	ÎBv7c\\XŒ\0Ä‚€MaXƒÍ`ØcSZ;>c…0ÆÃ¨Ü5Œsè‚3ŽC(Îè¯o\\_/ŽP5ŒhÞŸ§¯•=%Aƒ#\$J´8.ÛIÅ¦!tÈWÍb¯gB\r±pÚ£`ØÖ0	Â1Œ#rH„[Ï_X(êÖ„LnÐc¢â:&Èó:»ì›ÕY9m‹\0¶ÖòØõU¨ƒ›¥*Vô¶H¹f¹¹R6Öâž|õÓS>^PQ(Ÿ‹#²07\\3ú5\0B(ñ©äYÖJàVŒo—SJ¡Åƒµ.VÎL`Ù%Lê’Ž©ƒxÌ3\r‹¨Ê”‰ã\$ôPÎ`¨7¤/XÜ<„°æ:ŒqÐæ9ŒÙ@@.ƒpæ5ƒ—0Œã\nêsv=ö7cc(P9…)HœŒÅc¢t^ÑƒZrb˜¤#Áòí&4š˜3\"zÜP¢ƒÓFäï×Gj\nbÖ2ŒC,ÚŽØªäÍª‹U8\rãsúµ¼¯ÃÊO><9b¯Èæý„0¥)Z²ÿâ± æ;¢v\n®8\r6èÉÚ‡ˆ²HC0=A :@àÁÐ/áÞâøçÏø.\"aœ“˜*\r“’\r/d‚&Ht€A|Ü1ÖóRPDä:À^Aò†Q\n)`±ÃÖëœâ…ýÁBÇ¬âàÛÚyj\"€œ°b%š“rrˆ	Iy/eôÌ#ÊyÖëÉW1)¥ìkâ( ;fX¦ b4›ëugJ*‡¨®+bÉç\0 §:Upê<a|(Ñõ­’˜DâDÝò Óòq¢{¬=d´—“ô¤D:9:5†‡¤›…kµG@^ª7”ùŸAN%!\$…‡“<¦ƒJÁ4jäCShjÖèq¦©B†còd‚QDºðÆHq¬•ïÄÔ’“ðyÛ©å'‰¢ Â˜TSJrM(3Êî¦˜¡/çœ'Ó'\$ð †’¬¤ €Ì\\Ã©Å¡”5J…º©Ó„”M¶S±´kÉ|8+¹‚ çaÆ(‹`¨nX\$¹¬Cš-ÈbW‚ (!‡PÈ¢àk'äBD¢&r±É‹A<'\0ª A\nR@@(L´­\\ÓC¢þBš´ŠnèaQ”DF¿Wù@EYu‹è”‹`\0ae\n;K0Ò<,GéhÃÀx!æ=àÕ-b QRÝ«•”/öZMÕ»·T1Ó‡6˜Óˆ³`M\$¤\"4fÂÒ!n €•’Ø(Z|P>uÍ–×æ`|ÙÛ&9oˆ4TÐÒºžxU	ò†÷r+\\DD8¿­\0¬èÁ)ÀéC#¤E?1º±E˜¸Sªâlxò\$à”YnxbxkÍ-Ÿ–œL)}\n†Z˜BCÒ;i8:¬N²”´2Xb`Ô+¤xuH‡†„¨ûÐo\\jÂå˜‹9Pì1§êUÑ++¼,º®ñ~C!ù\rTQõc~íÍ^9aŽ‹¨åF…õµsRå°J™^Xÿ¥¨xÄac«°‘ŒÑ†/JÉ¯AÞ¢ú¹g¨D¡TŽL\0èQjœ²\rn&%Ì\"—“:`E”¨*†²?è0Õ·.åa¯k”„0Ð}ì^/÷Dƒ¬^W–9™‡\re™ˆ¦a3.b(+BcŠÖ1!^jŠaoE©æpêå,éPvñcàæ“p	Í¹½åç	ž\$)64ç¢sÑ}-©8Âè\"Ù›fpyÚéf­MÉ3ÑòT¦¬ýfÃiÈŠ&V*1m0ÒIýAE™œÏ‹Ùb8ŸRå£Ù u¾lÚÎ0¬|Ç–ô®·zä™êM”fª>zÌÆ/¥'C¹\r “ZÇÎTÕNÛ°çBÄEÍ¾Qé»É‹±4œDRR§¨Šu?í	B¬C»Ì’gñGo\"<C®©YN;Ôô£KJ«ð :Gù&*\n0QJÃáY^§„„*0ÅšKRÇ\n¯3ILQDÇ•\$”Ò¯bI7;¡äõ2í1µ\0å(®Þ•£Çt#Q0æ£{Ø#ºnâx¡%7¶æó2-aRUßè=æ^õ…Ê´u‰èU¦Ô®ŸÍ5‘étõz½ºP)7èx7âaztˆÝ)“(\"P¤@—LÉ9qWÝÅäCb%	ÔÙè‘¾î¸H#r­±ëý`I¾ÔV\$Tô4Fç/¸xh7ÊúG0È¿¹)ë–‚¾ÙrÕú=Ýé6#­ùÖçùô…P|ç©újÿê:‡Yd¾–Ç4ŽÔzÛZg–7Ï4Éè1Þôœ½±Þfíý‘ëmã4OSâúØZ1<¨ûŸ”t¦ÅÑ%ø›\"²íž\$'ÐÄZK?Ô-~1‡Øû_?éýâaø,â¼Ÿ“Ti_ÑõÕG·ûœ«ïõ}BÏmœÔÍ&¨M¤¢ª.Áê6CŒêï‚ôk¬ªÁ°Â0°þP ¢\$¤0Ï/’Ž02L\ràÔWDB\"Èü'ðP§\ntGE¨På2¸ÂfCçX6%tu€èDg(&eƒa}e÷ËæbŠˆèä‰Bˆ])Îxmvu‹ú*éö#f0ç\$BSi´\"ÈŽ/`@B‚²}bO0Œ ÂLLt&½Ê”Àëˆ«¥2+*t«êKkÖYÃ\0NæóŽ°ðÅ_MpëGVR ò²%X½Q\n;j(Bˆõ1éOˆÆƒÇC–ùðøêq0˜&ö1öq.9ã€¢Ñ2(c&÷K\$p±#N\nã„Î8j®{\$¾ –\$Á|SnÎ:d¶‹Ä‘u‚í6Åïðû/o¯†çQÆ1”ûq:˜Ï­×QËô8Zå²³&hîqªýFsov %¬`ñËˆ™ePVîöi¢JYíy àJÀÖ'¤Ñ(ôQùdE²ùÌŽ.¦\nr'2MGÆe*#2\r1ÖÇƒ–QÒ%en¨ÀáýÐú¨¯\n‘.`ñf¸¨ñY%1îN‚æÂò<øQÂ’^~ó†Â²a\$‘³r Ãl.ÇqÏ(:DäiR>ì|CL‚'òcÒL½ êK¤¿)Òo2Kr¦ÇòªÐ2¢úC@<°±ïÔMI&îN\nCïl1np±‚oÆX\"ÖÆ -ƒ.³Oç.‘ªm’Ôô\rÒù­{.«>ÂR	bA\nXät\r‚‚J «.%æXåx;C\"A¯ü°€ìP òiÉ:LªI@Ø`Ön Öj&i.<ãŒ('(TÂ&¼ƒ¤GD%ÆÅb>)ˆŽP§šò\nL\n€Œ qä#c¬ÖÉ¡‚&Yð¢×­NÐðñ'8PŸ¥\0džØ9Ä\0ç3þ„œÚNˆkÂ**¨Î#¢>Ùe¤mÌ	³”ÄJ\nÈÜ¢FD£^äâŒ¥)#dYÂBízzR¶›¬Ó3ö:³v¾1WÊ<EDu`	€Þ/ƒ­B´.X-R[«,E“\"×‰9BLÆ>SÎêÏRlÆ˜-Î¤éÜ`/RygtNêtN0Ž®Ñ®É=ëŒ×oê”_r?´la£TœCBXB¬{@Þn_k¢t€¹§.zPó> ó%3I¶ëÎ«-ƒ¥\$Qî´ãI²k)™LÐ¦òC©¨Â_ihì ¤ÌäJ%cd3&ëJ @\nÄã,¤ªitžæîº\\À‚&nóPã\ndIM@9#isø1…-Ebß?´f¬êÞò	ÙCï^DªÉSjÝ´yC&eºÈ0iNâ÷O\$'”û\\  wæ\$\nÊpb#·„f! 	\0t	 š@¦\n`";break;case"sl":$g="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›/bè†;Zä4ŽáŠP ,°Â)ƒ êŽ6ˆHÂŠ°Nè!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`ÖïÀÃP§œZECšA¬Ð›Ê4¦Ì(2B£Z5#Ìœ ÇÂbHÚ82ñhÜŸ©Z:\r«8É£š)Š\"cÞ—º‹«(¿¢Z\nxÖ0¤I0ô3µ£ Ä´Šh Ë1\$ÏÎËŒŽ%F3‹¢ì´‰Ã{÷E“:ûIˆè„µD0Ô•0Ô’Õ!CUÓN›ª2²€PŒ:ÃXÇ(J‚ÐÈ9´\"é»Jø5¨Ã’x8ˆÒK+¬²b7¡2¤å.p Þ6P2ÊXªBƒ+€£VÃ¨Ø6R­B9Œh[¿?·³€˜â(ÈÉq-ÂgjŽÈ]Èú àPæåFT›â“T#Õƒ6X´Š©õû;áÈË“E¦øL¨ò¸Ã¨*ŽÃ|<êd0ö\":bk•-%á0›WŒCMgZ‘xÅ1‘¢3ÉÒ —‰ã\$¢“MÒ¨ÞÉ\r¨XòÏ\rÃ˜ê1ãÃ˜æ3\\Á@¶é¯T_¥Œ/›hÚT³2Ü: !@æ¥èºs(¾3ZZæˆb˜¤#Áúì7x@3#CmÍÃá\\µ£¢_'Ê)¼Ú8®Â<Õ\\Iº<%ƒb­»<Ã›Ð7½O\nÐ;_3tµ¡ )x›\r #’\rŽcº4û£Ä½n¡ânÖ£0z\r è8aÐ^Žþ(\\ÛFÊ€ä#C8^øùãÂ¦#xÜ„T¨äÌŽØ¾Ô!cXDKÓøŽà^0‡Ïã73Í/³;¤¨‰\"Zi*„ÇÃàxMÓs“#&µWBL‹xgZ‚4ø•d>AMèdO'è‹&Úšd „”4sB~Ÿûv	@‚\nHé&K,„ÜöÒ[Y*MŽ’â`L‰ rga†’@}áaF!tð›‚äÔRn\$GÆ9ƒÎF\\êš‡*ˆ£‡4èDÃÉ‹\$á¤û‚~›ƒsò4†l‚‡êf‰øf<Äp ©ÒÜ­\rmdÑ&ƒJêÌË‡ ¤ä™(2~TÔ!\n<)…FêŸÈj;QÀŠ{ãúz\$}FÅ\$4ªÈ9èFŸÖo—iÍ3ä€Û2[òopøn‚¤\$!gØôÂ~ý£R,JaÈ™¼´ªn‰0k7Õc\0£ªMŠä éà9ŸƒP¸Ã©dNçXÒ¯é¢——Y*\rÁv4ZêÍjg5©U-¥¸HÈò%\$(ôž’UÂƒ\næ'ëô6FpÑcèDKh”¹4¤	˜IÄl0†³eƒ’| ”“A\"àÐIñ±00À»%²ËIxB,Ë¬É£¢[?VIÙ„f Ä‘*SFI„¨„h½L˜oj*ÅD‘³âÞC²{ ù*ehwI³îO¸É”3% ù7£ÐŠŠ–Ã´F9¤ð:T:œÃ™3P (-é’•£+JM™%@†‹ƒd¬eØ2†2¤BÕCÍªŠÃ(\0ÃüQá”½¥VVË¦ÓŒgN0^Ã	1n^á­¢²B4‚>\rJJ›\"@ˆ~\rÚ7sÜ›):áò>/–^~‘B	hb>Oà…¾†¬[‘ùÔ~ ‚O\"R„Â3}%)òv†ðà‚–Ô\n—>ÁòøÉÙIë<I¡0‚ Aa FehLÔ¦ ¦F/™ùm_Ha›©°ÞÌ‰š†/„•†Âa2íU·À’«»æao¨e¾÷ÆÞ^Šø¨R™E N-ÆŠóƒ#–=AÍ†D'\$QÏµô0åX§Ü€“ÀŽ8É`Œi¬¬Bh…ÌþaðaÃH.Â·œ=^œ1ðÀ¸×Ì?ƒ1	ñ£˜”œbv=Š°¶5PÐìe‡\ržBÆø5ƒÁ×'{ñói\$ÁÕxH—…áqßÈøÉa’OrrØððá|(Ä\\fH*˜0f\"LØs.B=Ø«4c<»—rûÖÌXA<ar\\s®jÈ¹´…Cüá‹1rtÈEñk¿cÌÐá´\0•Å0GÚí<Ò…5à @õ˜|\nZ¥ —›Ú\"ãQíÍB‡ý?›[LeÃ¡P#š³S«!¡º²“—4¤T­ã¸‰ù@2(½L‘ØJöá)¤Co1†A½“ò>\\-|Lúy™M@æBãÖÚEÚxðÌØ%3ÏŽáS¨¹2¹0ì_ê‘/¬%×1¹:<a)ÞeÛâÏ@\\}~Þ›õ6²„Eƒ“¤ß4õ°²@—­SÃ°zEÒ´½¤ŸMhz^äé<[Î3ÆÉ!3›Ä	q¢íÈiï¥ð\$Ø[Ñ2îL!›ÉË·Î%­°–‡-ÐÂ\nIÝÉ2¥ïj?¾hÊMÜ„ôDÅûÀh×EÆ<9pŽ‰¿qÆÿê×\"”ªêLÅÚNžÞô€_@ÓU^;¥W³v±Ì r}˜D F—À–N¥ž=Ë£r’§ð_pÓÙBøáNï„Îk“ïs3¿?ŽXn\$ð—×€ŸÞ|T>ñ–ûÇoäÅ±ß“0ùÿË¾õæ»ïœðxøâ,Ÿ0‘ˆ—önažÅÑû(nÞFèYÉˆ#t÷Yóû§Ùûßkð;WTˆZ)¢;sUÙ¸ò+nÁ&gýÓI)³0Éâ©£dICƒu	èªý˜MìQÑÕßE,˜:O¾¢»ƒ¦Ð©Bmùj2D3+CâF)*¸Ïvö‹:« ²E¼¯ë(ßëF³(çKOªö>Ç&øOZø\$Rnßr¯P4ù&&ùl´ê‰+k‚>¢‡nÈø‹.¸PS®d)n±m<à°BøŠkƒïÄ~ë„î‚Px«€ÂZ¢Xží@°mÞ ¦6£ª\nøàÖ1€Þ`ƒÈ·®ÿJBá\n°`ò°ñ­;oepWD ak*’°²(pF¹&¨W%vÿPÚë¯Rïâú5¬ÄûéÊF`Ö&`Ü]°¬÷(ücÐjín­ƒãÐ¶ëNÛ Úa¢‡­z¹\$Ý±- ¨æ®‰`áï•PÒ3‰ËÄ>P+R'm<>ª\"§ubG°¾]pc‹CÐÀí‘gÄPµQQQXµAˆ„7ëH–GÑ^‘bàñy¹ÃÛ{Jâ'‚ö6\"ÒO°ÖGë.…‚øh.\"QnìÏBñ,ø´æ¢ÅIðÌ1Þ€\$>Ñä3O\rÃ–™¬È<Æ¢ò±êCH†ðqõ C4SB^îç¬™b8ž¼cvT°Ò#!\nŠÝg24ÁÐ&ìà/DÎÂ’C2\$­Ä\$¬U%2Éò%²²^\r€Vîm:…nT'ÈB£~§‚^ÉXLÎ\nUÂ6€ª\n€Œ p2/`Üâðd-ó#bÌò¬÷,G\$ŒL¾/*d	ÖÇB(2ODÇí+l›+¢\"Â0#EÉ#¬%&TÞ„¨	£ê\r Ì \nMù æ¸€¯‹ŽH&õ0eÆäˆ¤Þâ©o„-Ó3Ž(¯Ž-%Îr60„ƒ‚B`˜\rãl8à3©J€b4\$&cÅÐã+lŽ­’Ê\"€ÖJé¤Mö2ó^Rj\nàm6¬v'‡fµ­ä¬S^ìjC7bè2ã61Ã .¨.JFÎ\$“ƒ.Ã˜O&å…Š¸?3]-ø\rx@Ü/®N'’|’((§Âu<ÉnåÎp¸©\0Sg23°î¿‡Nu Ò’“¢\0¬»\0î/ Â`êBà	óœ=e\"&\"ßA% Û){\nbÊ0%6AC\"-²~ƒd?e~¨ëÆ¡F0¡7ë&b\n%\"1EC)?Jø'ü8‘'f>ùÄC‹Z#„4iÉŒŸ ";break;case"sr":$g="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-q,2ž5ÏZÈû¡¬”¦¬E\$‹+\$’JòÅðz¢Å,mZHQ&EÔ‚A6”€Œ#LtU8²’i’RÚrX\$ŠTf·À´|˜^@­b1'¢ñ\"ÜÈËŠÒÈ_>\rRFÅ‘\nl¸¶ê «ÌqÌ…\"¤„ýúÐfDÅ<ï”¥YÈt’6ŽXÚ2Ã @´²7ŒŽƒ¤9¸\"˜¢&\r.»DÆ3¬ý-7U«ji\nÖLŒ‹@Áóº.òÎÔJ,@\"­E\0–¾3gÇsg\\¬ã<ŸÝ¦‚ˆÛ)s½iT¶möó¡€N\n‚3øC9…`Øjp°<É\$/l©ŠHR<¨ÔìC&ë4\nÎÎÏkª+ïíc8MhÃ;yÑ—Û\$  —š[pSjCöó±ë«;W	Ü)BW	´5f\$£ËAOX™;>™‰ ™š95EÀ³µï.åÉJkÔIòÖ!«›6ÅÛP‹ÿiÆcK_’v—…©ì·®‘pÇ¦*”2'ÊÛïfGwÍØjžŠÊQe]}U7ûÃíUúRg-,5®Á0Úd^_¥G>¥àìbénÉL_\"€©Ê‚¥µpÊÇ[‹1yn¡±lN]2løÂÆ]ß¼UWÆÇ«nIZôSjÉUwÝ¶×ƒ äÜ·a\0Â98#xÌ3\rÊµ“ÑÂó^Ñ‚ Þâ\r£Ü<„¨Ü9Ž£Æçc0ê6`Þ3ÀC˜Xt“ì!œ0  A˜Xm@AÔë‚€æ\nKYD,iA%Â˜RÍµ‚â¸K²ô^Ôº”äúìˆH„s\$Tµ¸r\"Ob+®9ñžbÖÎÜñ'†°ˆµvYƒ.œX?öì§ZdF°íâ×dP‚hag\\9X¤Ã¸oK42‡€à^ÀdƒÀð0›×°è\"\rÐ:\0æx/ñÌÉƒpe@º-p^±#øx:ï¼4†ðÜÁÐzç4:F¾wßPk@ù_¬Ê°Ö(<á„,sž²ƒBÌYË\$0†³‚µN,z}1åb–´V‰ItPè°ŠeLWŒ4]ˆq’G‡Éä>¥¬Ì\"˜ñ]KÇf%a72ÄM†)A74!A\0P	Bc·^\\Qû!&¦Õs2c/`‰2‚ˆNqªWd„K\\ yE}Ê£²ò]{T‡ªˆÎc\\Ã9ï_µÙ\r¨XÒìØ„´AäT‹2.Aeb0âV‘ÀPI\$!åê†@Ò³NÆZ¹f“¶Àq§9c`äÃh 1ÝïES²±\0cK@è£ž ßekÝ'¢Ô¿6BxS\n“Iã:+ÕÄ\$G(A·µä4XªdÉ&j†ˆÄÕ0R¨±tN!>§x8FFŒ*2RÖ¨µdXÙ—Ã›N²âŠIâ„nàc}Oµ`†øìõ\0b\r!œ- ˜1Ê8'&2„`©7RÍ\r+-,iQK©\"G=ž–[9Órv\$ì­Á4:(Z-c%FIÂ2 ž\0U\n …@ŠDG\"TEOš¤xO*,Õ=Ä¨XkÁ\0D¡0\"Ûkqn™™l	´X¥²\"ÊHÆ_Æ-S*ÎP	²(Š¨‰]æ|ÑTB¸NdH_¦––e‹á1-Z{€ ˆC0a~ë;ÙJÔÔ³¡\rè@&—QPƒc_Y‰öÜÆSt3^h™œ`\$38J¹µv¤š^\\î3·Jö¼'Hê&ý\rU.,MUœSˆXƒT%Bê©Ë¯xV»Í[In¬:Qn¿o#w‘:±ã,|ã!,Þr\nÔ“ìDÉÙ&‚+XA€«ATµŠŒ’·¥ÔBˆéÏ¢†)¾0u'¢i¥&mÆM©¹@òRMžòz¡Î%z}È‰t.%73–‚H'®2i–yÝÚ«ÊJR¶mdÿ0Òƒ(\ntÀ8@Í\"Ã)Ëg\\2;Lh–Ðâ)y3òpÌ(ƒíIòž2Ò^·}0	'„ÊÔœ‘¦o>ë‡^ëÁPëjçžtõÀ£@Sq2½‰’ðÀÓ ÷®gw?Ú¥£\"Â?¥ù¼VÑK¬›È%C\$«¶¢¶ª:ÕÒTUVÅ‰æNÌAÌ\"jªž€ nfQ\ní¦`~Š*ÁÛ1Dµgpg]Ò´>(Æë4eamB Aa R¨ôNsÖ{7Ò#¦,¨eŒMüËÆŒ.ê]Duf‚ðAÉ\r–Éb¥	Vâ15<‰¢-ÊD2)¸Í7Ë²ªÿØZïæ®ŸV÷Bp	v<Ó9“¾qLo<¬|ú„tšâ1†H^E»£ê®•ÌÉ¸‚èh/tóž¢Drçž½[–goØòNß ¦ÌCcogÎ¾>/´sØspÈqBè3š«ö>œ]z‚}ê]¨ªôŸ]j»Æ=“§¹ïßz›žî†‡—øD…á¹¿ˆòÜïÌxÎèPv™Ô )j@¥KÃ¹#\$±¯G[šzµ|%ÍQêØ…:M\"\$ì{bÚXS®*öxÃ)†]OÈˆiç¸œL…Š[;+mÕ´=¿Òj‚’	rQÍÕyöÊ6îé6æjË8òàC+‘g;óWïã¥‘\n´ªW‚Ïä¼RD:BãVhÄ Ië<_BŽœæï¬jDë@7»ŒäˆúA£úÕP`bYÃOo„èÕïˆî˜Cmb×§œˆP144ÐHÑg~‡æ¾P\nän(È+ºw°^lbHA¡\n´R3¥(\rö|Gvþ¥D´Æà¬JÈ.ÉpV,érOÐ–Öð„BÐž©nB¡%\nd©\n°¼×Âà˜\" ÉSnèKÖLMzÁmpf\$JÖEt·)¦=¦˜>K´'\$ä0¼…XÀêµÐ10\"Éð9K¸ÄñÅîàà,C	ì‰ŒVïŒPÉhu´&Pw±[]b4ƒù‚ÖÝ£sMÆa‹¸ëQ#‚HÔfßðUPx-qmõFŠ*Ñxtq:&°Û/6Õj`Äˆ+®š]‚,L#äíŽ…î¶èÏéP–uÐ&ðÑ¤®‚­ÍvòQd÷Î¹Q¹Ñ¿-æi¨ŠXî¯®cnŠîc<+>šÄ` ËIp\"3EÙëCÍ§Ý p2ÚCÖî>Ä1‚Ç-„¼\$j­#zÃÂjÍMÆÉ>ò#ã\0|läÄ Gÿ#D4*ˆfl<*ò@eÑa\$æÖæ &ò*òJv¦sôm0N÷¥pB~š‚Û,â[ìf!+é%Ï!²àr=bHØ²ZWE_(MiCLÛ1\"Û’`­åû	eæÁD}ñŽ56­Ñ \nGQ”2rãò''IÎ.\0Õ2•,í’Ùc&+èps±1’ÆòÜ-‘Ñ0Œ-R½-0Mï0²%\rž…§&›³*(­þÈOÔÎ:g”-ËJ›äHÜd\nH¼ü£šb0i‡ˆ—ÃêôÂbd¢HÞQ¦¾åqw71ß+S%37qá2åï1„Ù\$>ác¦¨¾†‚ü‡%¥â ,¨|EÖrç3/CÎ…3¤cæC;ÍÝ<\nà,¦Ù#ñ,¤XêbÚŸêè½«¶y“{R>¢žðÈU<ó˜3í2ˆö³ò×M’Â.Ñ3îÎíJ)ðâ'³ï’Ý>s•+9Êã%zÀÃX­FŒsÄÀ½ªÛÍ¯B21gÃDÁ!Q‘?4R\"TW/1/t0×»Fcs¿j)ÔUG!¡eï-ì%\nÀ.\n5Ê·@QsBD²g,EIAuE“‹?.	t¥B²)3\"H®Í9‚›8ñÄV­µÂœ¢-ªLb¡ŽP·SÖ‡@fIï nWMÒ4Ê®²äÛ\$tçTë=TîúÎ›OiÄôää\$[5EÑQ`£QNCÐè&¢+&±³ýROÒÿÖÈÕ.ë¢æñÎ¯Rp\\°1SãLõ\0†z@ØbÈ·”¦WN{@êÊ.ói'“\"­(@Œ±E’¨¦°)N\rËb\n€Œ pˆe˜@@ÎðQæÙ4â¸1¶è1ËO*'Z‘’åñè<Õ¦ÐUR)ð–ŒªnúwÅ\0Eò¶_È	µšÀòÚ¢[V¤;-fIl—®Dï•ì¬`¥µj—	!ÆbJby-¼æPSp]Í±b|/\"`JuENîvPœx9\0-Âtòp%Ae@•BÕÐƒd®µ].r)#L˜vY+‚H4ôTHN‚¬qf­S®y1+Af–Ge¶odÂœ11¨sCæ6{h¶lANâ„Môe’\n1sdÉ/o)‡]po	jEcY©¬[T½Ðù7–´©§V½ó’2’pp\$\n¼>x¯/v4f!A@îbH¢Š€Ò¿Íã@@\nÎ à\nÀÂ`ê ÛM*éiêp¦¦*ÊŒÌ§8Î¶oóKi2üÝ\rQ	µï	V`‡•õ\\¥Î=©kUìâ™LêyWLL54¶v4à†{¬8'ÓpÒš9 ËqõMdÉ7\"Pç(^§\rVìâTgvBH.`";break;case"ta":$g="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæ¸Ú\"¨\"+I\\Š•Ô²#6Æî|\"Ü¢Êµ(„+är\0Ü7¨¼CUÄðRl·,ÊA\\«'\rí{E­H_*Ñ4èØ©ðP)ŽDXÕÒ\$B\0Tº2º&4\ršR¾BÕ\$žÏ.k{¡Îk=8ÞFá@Ž2ãhËfµN=ÂÞ®}Îß%t\\)Äý“YcÈæû¶‚®«Š±2§,5Í–2ŽOåƒSHr­OTÙe\n£ž!ƒVHýrC\nRR¥BÍ„Áä54BÆåhŽ5)Õ–¼1+%’\\à«I‘‘À•B¤I’qi)ôSG‰-;Ùw\rÃ¢þø]ÏÈÞ2>/ž<\nbˆ˜4¾îhˆå¸>^ÜÂ–½7ÍÊTÍ|Õ1\rµ\")†‘HC.®PV	Ls'î(Šù`f²C\r^¥)Ý.æmEAÄ'RRðWn|£mÖD¸êè<}ÉC2qsA´Û o¯)+„ºÅ¢Ù%\0O[U]élµ¢¾á&Û_¤mÊmX#£pÆ:O³ßwÖjw~#8Î9=¯·“ƒw‚ûV ]bŠ)³¤K¸89þë`ïñ¬ë'XVñ¯¼i¢CèG·@ãm&l“KÊÿV¥%2±fÎðÃ¨l\r‡ÄÿÂ@ÃnE\rx¤6W*ÈÙ‘¹+â=Ï,>ýË…to´†\"âbŒÚräE˜>UfÜcþJp|Ð¹÷ö+kvR-ùø\$zæœl3qå9_›hÝßÓ„‡ÎÕÍ”‡L†›B}ðÝ±¿&Í/*.N!˜x›‰„K%‘YÝ¨“Hw\$ø¼Þâˆ‹©C	Ä³ÅØÖáI´pp]ø‘(`Ãšhp\ráÈ:0h9\r\\J%âþ#AxV«âdA‰ñö(Ç´£\nYd_-U@(c”}Œ.xD<¸Núë¿L…-á\"pØ³@QÛ;¡…ê\0Þƒ0lEa”àòò[ÒäyIAP7žPÛCÈ x¡Ì:†0Æ{Ã˜f €¡†tVÁañS\$0†pÂŠÁàvaµ‡Sî\n˜)+Á)… ŒR\r™†QYªX	+\$ÙŽ|	 @‚äp¸S”0I0È˜\$á\\ß^Ó„žÆµº‚ÈÒ™ —°D9ùŸ™OX2ùPÌ†N´û*ˆ=ÈCYû	\0·bë½•¨h¸ÈŒ#£PÑ†‹ò¹^Ñ)ƒ*~«¢A¨C¶¡M›ÄÊ £\0PM,\rˆj–Ã¼ƒk”<\0Òõ\$þ„ï=@ÌAhÐ80tÁxw­@¸¢Î@ÜÄtƒà¼2†êèžkª|OÀ¼@Àä{ƒ¥`çþ†°D¤O®¡ÐðÂš˜ j¡¡«µ›\$CYâl™ˆLzÞÔP\r¥H†z”ƒAV#\$MÅMS«ãCÛ’\r/„Ú £ö—DÐ|t9é¤UDôÍØ®Me ”(Ù>Má-A@\$LÌSbŠ¦éÁq;…T²ŒÆ:æôß¬wïG¡¢Ô‹i½º§ðD^ò‰y¨òàÂÛºäèi/‘rZ×¡¥çNi­¦M•Õ9RíxÔt;R1¢ë¾+Ø+•u)ÆáCÅ79Oá\$q¶‰~Ð*{tMª1SÝ·Ð2üï’!¤ªý¥Ù„uoÑol¶ê>^§ü(\n	\$|<À@KX<Iæ°~OØ zÄ:žö¤ƒ’í2Vêš~k¨ e\r­äà&ì¼+è³´7'~ÖMá#@'…0¨…!Rä5ä¢a†ËL.LCþúa¬JäïvÄÑ]ØPCÓh?`ÒÃ¨rzÉûÕpÊñÏHe¸ÎvŠ¡íDNÖ6‚ºe\"ˆÖ*àbÐír\nhhzªàF\n—:µ€ÒiäR³y#%1æ#\\õˆ‰¦Ý ó©\"e+ÿ©ÕòÂp \n¡@\"¨@VÈ\"„À‹³ÙÔø¶Ùñõké#§±+LËUÂšÖf‘¥A~BZªÇÝ¤ø^ê‘û6H4ÿè2”¢:æSÛY&±hA2†`ÃZv!³\"•ô£E‹<¡JHù#,0‘#t§msÌ¸iuŒhîØ‡h™¥QÃÑ\rÐ•g‰›qÞK@ù:RI”ŽI|Ý&¡m¨fh™à-ZCxN]È7ÄA±rF]0?:}ÖºõÏngp•önKöÎ‹&sTgÑj˜Ã<Úžv¼Ã’´ãñ]ÿxíFoÍrs® ®Nudš@’¸´âïË·°*:}ß>ÈÊ3H94¢ý4Ÿ…ih`iï`ÄÁ‘pJ|gÐK0ûYÒFÏ‚Zqw–\$ƒ«\"~rHuá \\Ëo«ËÉjkÉ¯v1/å@óÆ²ÇÓ›€u6K‚½@æT7„Ûb­7ÉÅ¤šs( 4‡ Ê‚í›ç…0Ê{8e›gšE>&hô_‰R“žÝþ~¨/1íf8Œ€’¸TºkL1†ƒLgT¦púï}¹9ë\"\"ùgþ[( çÂÎ:ˆŒíOÍ\0çjŽåÒýàÈª‚)4Å~£CHýÌ}J|†Ž†â`Bª„(1‹ZJ@Ò>JKfsÉMÊpžãª@ïbêv”GÈ8PDÁGnöÏÖØD ðvßÐ`:i\"†PhÞŽZ,äâg®‚¤’Æ‹Ìßƒ@ßEÌÂ\n„+á,hhmevêf\0É˜é\n+äÚBÈ/KJgO •fNÅK®„NŒÛ†TPoZ¥hhfdÚîúîIöæ¤”ÙÀ¨ †	\0@È† \r#Þ	h<Lv\$‚IûKpGNp-ãÍ\0ƒ©~7¦f9¢6kÛªo\0ÉVduÍ¹Ð¨/ÒèåÐã-ÆëO4Âl‹.¢oÎørÇ/©²vqlÛ° ‰öÄkëÄ¿†Ÿ ×±5éóé‡EÏp¿¬+1‹ÌáW	íOøu1‚§bÐèŠQ1ojíÆb)	È\\ˆ+°êïÖ¨kÚ;»¨ê±©W1µŠ…Ñ÷ñý ]«¦N‘6éˆ2Àç‚Ã2Q¹\"Q‘žnŽª´-åòA¤æ kéÈjL’âB0…L”â¸˜HlÝB‚(b‹rmë¬ðŽ@øp\\¢Îx(\r=(#FHÜæ±›!ÐÖ¥h€+I¥·Q®¸'Nò]ã@FÏÊåòº»ìÀ0¨t/W(rÚ}\$ë\n2=ÆØ¡NÊAæŽ)	¤±ÀÜ\nˆ¤†~°¼,æ9¬`ÎHh¨'Ó*N<|‘Ê¼ê\\ˆh¨Cf% PcØ–†¡‡jâÄˆpé/„„¤î2ˆuerßí\$‘yº/£5Râ \nlÀjy5l»0djÂjs\$Éù6±\"N¦¸Ð’Šl]8Óc8E0‘±ÂpCnˆ.žîŽ]9ÓƒSf¤ïý:mzs0;2Ç*rVvÓd§ƒ€ùÒÛ“ÄÒ×¨¥#Sµ= 13×;qÝ§2‡mã!’¸{\\Âê-éêKB%0±8³°áê\"'îàÎÒkç.2‹#do/0˜-óDµI0¦6NT/A45D\"Ï‡Ð¢æ|Âë¯8Ð(ûÐ)Ña\np'ð ª<r’ÒÑÏÿ;³ó;1_Èe¨ÓG6\0@\n€ò\r\$Û0’’¼:‚5ÅB€F)EMÈ€nÓ#.¶fH¨ˆA³Í“\"‰0l”ÀÃwE2S-QÓh‰Lò'HTÖŠÑÊç);ˆAŽç2<ôƒ=TóH”÷Ô³OÎÿN³~êSŸ;•æñ­OŽÛ%¤;Oóâ¼“çn‡'jâRžü”±PSëP³†“õB‰5F†±Su7ÕMÛ:(¹Ut`üu]G*So\$µ%U'&hðÑ4òª Éë{VSW*¤*õS¢!qSqWW‘™Qˆp{F‘T=?¦•Ôê”ËY4ˆV•–ÓLÕsôC¤foÓZÑF²C´ÿŽy;ð§\\äR¦/+FÙ'^ÃpcJÕKYÕR1ÝVÖG¥\"ñ’Áð=QÕgNõ'b5zìV’Uv6ôÂÃÆXûÔÉJnåJ­¾òL5°ä­½4r(ÄMw4©íAÏ5ó>Ó¹ÔØd‘®÷n\nb\nê™æ°Ù±¸ÆÊßÔ^‡ŠhA§zìÎÙK¦ßµÌ¡LÚfvD[Y2t16u'¬î¸ï„Ýl’H¶jˆR“¨ëU®ÂŒü|æiÀƒI ²\n\0Š¸Ë‡]\n@hV­A•kkik«nîÖ%cÖÏ:TÓnðˆ6PÞÇ¿é'´¤¡6óDÑÏfì79²îioõr4Q§?a¶KMDÿe}Lv>—ahV?WW·lÓmV7qd—ud×zà514u5,58’Ç@ò(­)ïf£Âj+:õMw5Qb¡H—¤dÄÉz·®µ÷u÷‰{·y	w£@£z ×È±kx6E#TíXw6ÜË¦}×©03z×å|öwÛ}ô\n¤8|·çd*hûÉM\rN—SÄ¤”sX÷Pn&¸bø[sNtì·3ß\\*´´@¸Œ,¥@öå\rS´ôÆŠ8uã\\åƒ{VGh7ÕGû\\°{YƒWk]ò¨ê•…\\˜g‡Ì~˜xxq<Rx‡Œy\ruØ+rêèX,Î—I€ˆ:X Ò§x…ÓQ00%8³õ_y—…‚‡–·,`ÀwB‰K^öÏU¨L»‰•!v4ñŽÖçAVëuÓ‰Ö!lÙfˆÅbÓÈÂ5O‘×nV+P¦‰¸©‹¹’¹”ŒOyh¡®ëô’SJ³W·÷+ctÐYNÒY@’™EH™YV¹'•ù/@ÙaIùe“*LÞ£	4˜×”8—Äv»b•³vù\r‰¹[ˆ°u\nJurVç‹”}’9£b§™«¹¯>Ù–«ùšq‡D‘™P{aï‹y€ˆ¹“š—A ðe“ùÅ˜ØÈæÅ„ãI=}—Á×ÆïÓÎ¤dv Ð×´»V·tŸeHS%	…\rˆ†3¡9ß›Y«ìØõ…6¥tË ú+NYgYŽŠÙo>÷ô	\n–þÏ·‡xŽøÍË¦B¥ï¾wªæ0åŠÄÏ Ö81øæ+šIfœö±L8‡›uÅÚ2¨“,ìIy2GcQÞ!ƒ€îðOu3„ýJ#FBÔ:Ä§g˜I7¨qæXS¬=§ÓmóZˆV\$X¥ç[ç8r-žèû®Wù©ø<¦®òÄÃÒeš\r€VÊ`Ò`Ö–Í8«âÈ«,\r¦®\r Ì™&À+ÀŒ=cÄ\r¯,j@Ä³M8\n ¨ÀZ\0Ai{.E‚½©™b²éWÖÝ¦o6÷IÖ3•EBœ^úOX%1¯y)ttn¸;hûÌCEÛpÖ		·må··ïaÒOr“Û?˜Ôm.4ì&Û·ƒzSŠ|¥êt–¨‹’©;/³4›7S]%”÷€ØÑdö{OŸBm„‹ÇE®‚â#ÀÙ®¢›\$BÔâRé?´-¿•4uD¸žLUa‡qò{n?H“3 2^ÓäVE ˜Óë\$cÄ>£û„(úg	nÐA¸-¼83º“…ºÈegÕ›•áx±¢'åšx¨ >âHuQÅÃ««Ž±-Eº8ýcsØÏ¤çÀÆ]NZa¢¹e—œ‹Çi¡¸‹ÈõƒÇÚ]Ö3Œ\n>¾< A´l¢\rãPÕï›YÊó«FÐë DT}©Ò7/í!(ƒÊÓ÷Í¶éªEl¡4@˜0\0P¤X—g±õÀó¯MåYfü³ÑÄNƒìÕ'¨ùù7¸‘d©#í®Í&°\nÑàðÀÆ ê\r»Óœ­¤³P'àŸÌéÈùÏC`¹íºTïÁïû<ôj0ÇG£•™­Ì7…THøò\0¨\\qÓ¦\r¿|íýfÓZrE¨×N8®GÈ2¹Û(oÈ‹ÈZ­yä¼6\0†z:²ãî=>ùÆ°=@ËÔ3ž¹;UÎŸvÄ¼|ôùMï5!ÈkÆIšqdÐAã`	\0@š	 t\n`¦";break;case"th":$g="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¨ÔTI9—Ü&€‹35 khð§¤Ë_ÈñÒH\"U¹³Œ°×Fò™q8Åã·.§Îe|€Õö’&“l UPÛIú¶ž¦sLìJ«/\$ý'§¥Ûa·òÊæ‘jYfIŠŠ²¿Û±ÅaY93dÅ\\!W™qJC”Mc=a6¥¬ïT	Ü^RÛQShžÑ+;¤ŸÄ…íF«ù!pYÞë›.øêá^°Óƒ,EŠªg+	#hàü£(Ü:Rá{ã#ý\0ox¦(‰ƒL\nâ¹²Ã;ybãFbíÓ·D©“r­¦iûÃD£‹ËmU2Å>ÇÔQ£·´°6ZP‹í×wÎ[|Dð¸7‹Oa6%>žÔNÞýZamãèÊœ4—_×¼E©ÂêÊÃ<.E;€R,}unN0Ò8”*ÊØ«´¥‘W®‘3¶:VÏ%E;5ã,em”ÜÑ‰ë‘›Ï¤ð¬±ýË·3ºž§u{8«w¯eYèÚ³®åb»;+¼7¬#£`ØÿAÈ@9ŒcÝådëW:´X™mI+‚wÜd°ãm¯äµšßâ'hpà‹Fê¢Ê¢?YI€!ô0ìÛ€¸nîÙ¼š´`˜ÅÂÕ8Eu«\"Æ,Dà;j.\rµÁùÃh¡´0•–È˜,(…P°8S\nÃ\n‚z-Æ\r+•Â˜ ò²,P¹¹ºÁ0ÜÜŠ{,®DGbwÚ¤D8m™¸·Õ¸žÜB”:Åf—8:Ö!6†pµÙµ#¾†`t@(ô ÂxoÁ˜6#ÀÊƒÑcT\"Ý3/FDnB o>P°7@Cps¡Œ1ŸÀæŸ \r¼3£ÀæðrÁ„3†x\$ø%hÁµT\n\n˜)j°‘Ö\"ÒM)… ŒIŽQÖ 	I³`ðŸe‰ìR`\"Ö._e‰ÒEŽÔíÊÔ¦¤£Ägg\n>¢6bìÉûµTNŠ .õJ˜…9X\nr84†ðÜ ¥‹ºEŽ¸Œ ¦ªh'*±«1ÆcÙ„™)o–ô@¶ÔR‘Vå`&†æC‘ó ÁÌ;†ðäÑƒ(x¦8@\\ä9\rÀ3ÐD tÌð^é@.!’RàÊuà½ŸS@ðdLå\rÀ¼>@ä~Ã¥è5õ°D™Ë;…lø:À^AóAha¡¢´v„CYïiÇÎ—ÈJ˜ƒåùß55T§bªÁ”‘‚~3’sSªoWª„;ª:DWJc´þ®MÉ9(…¸‰Ü;<\0€(€ Aˆ*	\nA5ó»/ªÙ¸Ãã”UJ¹Y‹ó¨Vó¥/}azg™ârWT1jEíŽv»«xK\nvKUN¢Âº[±Â6	ØeXvÞäð[“É5\$ˆ’ÞœÌRå`\$’PòzA\0d\r-ø´’š2A ‚8ê\0fA¼6‚\0ƒK#µ	@ìø9&ÒOò?¡ÂNG{57lä±¥Â½Ö8kµ+etžÖr’.±¦·ñL¨\"gq,{½[‚Z\\\\et…-DMw—vl•\r¥û1ÍVZgÜ\\Í‘<S=[âTôyîƒéœèIÒ°ACiïÅ¦\0Ì~y÷‡!*XwÔÑƒK:¡Í­Þ+Èùéyî¦²mu:LØñj¸¡2â£‚èæšW ('„à@B€D!P\"æLÌ(L¹±Êé•‰^šXC„íÌêÀs¹ÎÅVCœÓ‚‹.~V¥Î³>Äã¡stY(q^Áw(qÀPD¡˜0¾€ƒl»åftÎÅX¥¸~—F.è(÷”RRyM+Mæ77žÄoì‰Ï»l\0¨’Áá,kÙAwyX›ƒèÂ\\—A?íØAñu	l¨„–6yÛKïmN	W¥¦–Èƒwþbì¶1]páÚrüniöd\\WoÁsV\$Ÿ>PÕ©ŸëÅ]¬£JÞ–‰jJPù’ûpË€™X\\0õÆWkÞú+zEPØK¥â’qa¬•ÚàòÂÌAº+jRÙîø¶ÊTV_;¦?11VßŽÙ\na¤=Pï p”ÜÚqŸÆC\"W7\0)ôF9qgŒ~Ù€ÒÔìà–O0lùág¥Ÿ^º`t˜AíÓç\0Ø/çE©æµöqÚÊŽ!õì©Sô!2-³°Ámƒªð½È&yT²P²‰Wh+(Q:¤<ôôOxIDêLã£÷Ñv<.Nð3º¼·!ßÝÎ²Çbˆ åVâ/(Ç\rlr~‹ïÙ\\[Z¢ÖïB•¯»ÚñI²ëx0¬UÑu¦\r€¬ÖC	\0‚ïRðÒ1¼p>¾ë á’Ã-}ŽåD¾ö½Ò,—l—×álÊ @ÌÇÞD©K¨…S>IÚÆ`p\\™ýCoæûPG`Ã¸Ó¹ö™,KÑ…ÏzVéøQŽ:ÄÅýã<,D1ãd/ÎÏÒDOp¢°üJ\0ýÉŸ\0¯²—¯òvg¶ÿ‹\"þ\$ŒU¸d0‚ðFš”†€¼`îb²ïÌ(îÐJƒ&SŒºJ¾CFäl6Sm˜ò¨„à\nÌåÊ­Zƒd\\c_f_ˆ¦ÏÀ® Äi äÊL|È0-ÇÚƒ		x2­HoØk¯\\u‡ra\núQ…¼_Cš)°#îÏ\0gt¿Áp6ƒž'¥ˆóåX'â@‚ÉòãE’€Çf&hD‚D£·ÄQ\nn)Òy-äÕìTéMŒÅN+0wpøµ£ÂÕÇ­ºp%2%ãPQ9EéEX~¬1…–Aí¶ê15?ðßâ¦+h¬QH±q*Ýlo0(²ÿð=¤ÂÐ	úåñbÏð6µÍìÜNíf²ÅÅ-XE«D×°ê_¥:B„ìs„ø+fºB³p›¾Hÿ\r'¦µâÍÊCztãZîH\$ì+è.<&ºCŽ¶21y±˜ˆ¬9ñþì®¸}ŽªB,øÊËÏ\rQŽ(àSdp‹’Ý­¯äŸñ‹ Ž¼‚è&„‘„XÝo2zmÝ\$)Âöˆ`‡’6öNØ,ky’%òF„C¤„ƒŒ„Æ\$Ümu%’;%Ä…íÓ(1£#’j†¨n…‘OäDÛ‚¡ˆÄ‡¢ÿàö¦ÿ(ÒœèÒ<DÊÈëòzî±øìr½\r±ó²´åÏOj+±P9©²Þk&`êÕ\0ê—¶ü’Â;g±LDïi¼Êéîð<þð1rÒ ù1OrËKÿÓðÒÇ\$‘ômÎíRs0éüO3(ïãŒð(1R‘ñY'CŒä“\0ì\$›é¬UFöÎà‚‘Ü E±èÊÎ—å5ñ› òh˜åXk¬ª¯‡Ž!L•Ç¦Ú&ã8r8’DFCDD.R’zo\$‡ëFê„DÏdø*Sm&'E§	4R×4Œñ4Ì¶v'ØêQ…,nÞÂEÉÅfE¯3y<n®öœ;²ë3ñó,±÷(\"N.Ÿ02§5¤A”	*R·=e*±{1¯nžõe’-Æ ÎûRA44<Åt@ÅTEÏñ<ó9A=,óACDÔô?O_Dt)5r»DÒvîfñF49¯Xu´C@T+)4mEpV\\´78/T-C¢6Ž µ±u”RF¥´'rPvr<#Q4«mÂPÀ\nCÒˆí+3D´i%ôØ”ÔßAÔ]'ŽéA&÷B×M´ï3)ÿGŽcOÔ@ô÷HFöÀ\rÎ~§Qñ\$²Ì„Ãæ¼i€êŽ`Ý5‘œÕ7õ*\rõ/S.m3j9¥\\B“wÂï6J\0000§»@²œo‹QÃßAÓ!DÕl»õqNŸP‘wNiÄµn‘µ,T\rRTù´ýW¦}Yñ3tõH(KO²\\†µWÕ¥PF¶_³Y[5Qå[H7ó#õÉUuuXTfÙ‘i?DO<ÔvuWT-w^¥Y]Ž`‹}‹*a ¨> Îñõ’Û¤!+ÖñÊ_`õY•YÖ`–\r]µÁGµ‰R3;Zñú`ª__ccÖ)d0–DE‘ImSI´ŸAõú÷5þ÷pŠ²Ô}O4€‚–\"ìv^cÖbL/yf–3Ív÷y/6,ÅM € ÀÐaOPŸÍ{klµ«r'¥Ù/XKìì/­îÍóLÎaD(w%Ž›Ô}‚\0_#bg‡QžRõ=\"wK6Ëeã/%­öÂt)0gµ0¶úŠvÓ0If@ØkÜ\r Æ\rl+ììŸ£Ã”làB°Ð¬\r ê à@J´œàª\n€Œ p¢h¤xð\"q£0¼.oõ(bY--š:L#=Výk3 Q•Q„&k0@›u@Ì-.âvQ'r9ó~Žr7'?eÂKödò&âò’üðÑ\\7ÐQ;ñ.Vce¶b<\"¤R„hcn…}0L\rêWuwæÆÀÚ¡ÃÞ@daGHýmÎU‘4q¹€kÒr±ÕSÄ©Tß³é54(O/lO6Ónáqmƒhw1rÕÍÕ&mË(¶Óƒ­w\\öDÀ¨|¯=ƒÝsàÊ½€ÞÜ”ŽjúX\rƒÅ„šÊùC¬]JÌv¤À+¸Hæ2\n<1 ‹Ò™j\"d[\"³ÀzS´í¸›yFðyø¢n3« (%¬í‡Ï8.JØÞü—‰£êÔ.hú @\nÏŽà\nÀÂ`ê Û?±W‰óL°ˆèUÂzÅ€Ð¬ðÕÆBv\rÅlÀdÅEm‘’1£¶_#¦ÒfKÆ+8(I­ho1)X•8ó·r.]“c…°w84´ÎnŽªê\r8Õ† @>àËŽ¡WXIçs}†KH÷¥ˆ6N‚â{V·—¢æy 	\0t	 š@¦\n`";break;case"tr":$g="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtëTù;©ðÆ¡Ž‹Àä£î£òŒ#’Ý#Cd<CkºëLºPX9ã`Ò*˜#Œ£z˜:A\"cJÐÁ¤V‘:ƒ¨Ü:©í|\0ú@eˆ(A£{¸\nÉx@·ŒPt#½ƒJÊI‹ÞÆ¼…Œ0BHÚ87	‹\n¢ Ž\0Ð7ŒŒÓ89´B˜£4)<‚¢)†S±#àŸ0eŠ0m#£C’ð7/jð¨Œªœ”OŽd¸§	â¤ª,´L,ÉÏ„XµÁ,Ã\"# M&Ìƒ7N3–5 É#oµôË,ÄhÒMïXäº#Èë¨ ­’ Âñ>`PæŸ>”~¡¼1Ø:ªcªú<·{|ÓÑŒÔÞÊ“0˜øDÉÕœ'³pµ5„å(ÁÃÞ\rn; HV¤ŒúP”5#E¤òEKÞ´…|_P°A´ˆëMo}åz,·Ý‡%)[nCs|„ m<\"'Ë,¡ãÕ¹`v^\r%ÓfŸWÍ÷aT€PÙ1,XA´CxÌ3CÃpÊ“˜d:|5ã«0¨7®p°Ü<„çlÀæ3;Aä3 C˜XÍZ`Â3Œ)bYP 1›BaJObÃ’=@†)ŠB0R\rN–:…ÁL9\r©ãB5¹µºHíŒ)8„0ãÏ= ‹ÍúŠºNO(ÈŸ\$÷:·ÃœÌ=é˜Ø2ºØØ¼ƒ2bÍ¼\$ŒI+/)9¾ Pš0Ï(ð@8w˜î’Ì#(ð8=ƒ(É¾‡ˆ¸Ð9£0z\r è8aÐ^ŽþÈ\\0Œ›*<\$£8^˜ücÃôƒ9axEkL¸éç‹ë‹º5„Aô­,\$RÐxŒ!òˆfQ:_L&l‚ãDL(p#Í)-9’vœâ„w*ß‡Cž@Ñò\r„ùË¥\"NOnJ&5‘#0àÉ> a@\$£\nTJ Dt‚‚ŠÝÕ §VÇ¼þó\n£Êª#T„y·Ÿ\0ÒPñˆb\$±”“êÃ2¿;ŒÜù‘.ÃÙ¹erÎ`ÇPêˆ\\Qäzæn¹Ê\nÄ\$á\$‡’ES	‘0©Ž3J`q°œ`ä‰—+Ý Nè:‡VË’dŽÆeÞv€!Ì96/ä¼.@ Â˜T6D|ƒ5¸šOz¿-‰D“S>ÿÙ¹pÄiŸ>×Aƒ¨yèÉ’­uÈE¡óƒ§œ7sOÝi©`7½ÆnMƒHgj>“ZH¸F\n¸î¦Ž	)…ö?¹Ò<ÊJC“;¡…è ÓÌ»lZ'qH”,‚xNT(@‚+q	æ¸3ÞjÌ  Š)\"@{ )žÈ\"P˜gÄúŸš\n\0¦&]=Í¸2Ð –Ž[7ƒ¨ík¢w™H™`T@À*, ë	BœCgÇI¼ÐÂvŒ(v-‘íšÁ\0Ú“‘é\",æÂó¦i{NÆžu\"<TÐ#Œì°ê–ÖØ)â!“l(¸\$dÔKØYæ(dž†@ÓWÙU]^‰‘u©HÍV²E^Œ“¡²Ên²/ Ð™{	ðÖ^Ø Dstý.9áxŸ…àmOý­¥ÈYl04§¼˜ùjsW#X#îÊ\\E±bIËyz0¦©Îº¤º'zD.Sœê— Ñ0p'GN˜’ÆhC\".ªÑ\r·U¦…›Z}Oê‘†ó_HðD!	Ü¦%—ê‡RG<†ãœ§ÙÕò‚¨¦8,]”ãœªÞÈ0¨pM4-×¡r^SÅŠ9T%Lù¥ÐZöA¥7ÄzzgâB¬	çqÇ°‚^œB8(uÑD0t@ Aa G¢^f#9¢ŽD@ÎÍ…Îñ‰8S|!ÖS¥¨¨yWTµ:©å@÷–Å§Sª\"šo-tYë˜q…Å”à!ÒcYp	ÄO´ž\$\\n,\\x ÇWÂv¥,|Q2±Ètc\"Äì‘}Ä>;¼\n\"4Úi‚¹ZÝ0¥Ô“ª•“1°Ÿ©YG)ãÌÊèÜÂŸË8Ç7Ë<ãœñÈ§ÌYTóç‹?˜4dJ@)Ã¹)\$ÔŒ‘²:ÆÏºwÒÄ¼€ÁX/tCf!FHÓ!t¸Ã(bÃˆÌ§´ò¢}Øy>é×)h,©¢pH4_0pæEÝ\"8Du¨‚MX“¶•w\$š!&ò’ï9Eò•X›†/\n‰µ°R€ÖHgYöå#\"ð75·‘÷‰rò‘ÍÁj‹žÞÝÖ€Ô8€½Èû£ÝûÕ’°\\|¸´¡ÐÞfØB\r×éÖ*Æ4Å£UrH[:{_âÑ#ˆq¥Á.äd°7-‰«}î¿÷Î_¹Ä³jØ‹Ž\\¡ªÉ6ë0O‡ZmË	®)ˆQ¬¿Î™Y?X€€ÒéÞOA·Õh«•Ë²mþv'JçkÓ£¤ž’¼+OLNØ2²ÖE÷–_eÌ®9¾IûÀ —K«eö‚j†‹1AË\0k^à'ô,Çô‹å³—aNH=Ïºã¢§ÞI÷{ïÚ{/n¿xnµãçµ—ÇN/\"Æ®Žø\$«ËNO1ÙxQº—Yrù\rv–ç0<Ò¥zWaÓùd°kÄìj'êNYæ”õ™‰c´Œ½¢v1ù8O‡nÍ0«„=*g1NÆÍüº¬»/6¸—+¹ÛuæÜ-ÉÇú¯)Ü	ð[X…b|žß¸?—k›ïAÔ8äüÜÐO	úwŸö0^g”y½ÀÀoöýîÎÿMhü0ßªêqjî[#–»tB¤.-ä,À&Í*|wXðƒzÿ¿C|ü/ü—ÇpôEL\rÅP”öÿ‹¦)X4.ŒímðPNU\0ÒUPßãâE.ºD„Ø6‚6/dõî\\åp8ñË—ÎÌôP‘®åiA‹½	oêå°’´\r	BàNZPp\r®½²½eÇ\nÄ´É°¼½(ü0ÕïêE°;Ð\0,>d¬n|Ý\$odí\n¾;,¸þN×G\0;©u0F§å(‚ÃÞMcËª,-‰v!i¬®ðz9EV#Œîƒ¬’ÅãbPêñÑÊÉ×KŽ,Gã6K6SLiñ2Åe.ïñ\$ð*ÎÏNøÈQrñ‘xqCØ_¤„ü\"˜\\‹øâXÛCÚ4@†E\0Ød¢/å.—°h™ÇO\"l€â\n ¨ÀZ~Ü¤À8ŒÚL/d„9Æ4³ÑFÏq€Å®ˆm©Bc*”ÐÍèZªÙ„²¬ÇmàÍRCÂÊÈÄ6‚òÛj*qNQ1ë‚dÛF&)‹æëê'Æ^ƒã§j8@òŠ%…°\\ƒ¤=ÂHciÈ\"è¢Úb.®	)%øõç:oeÖÞV,Œäfqà¸¯V©‹K\r'G^Í1\\W²‰kVuîÂßeõgV–)f c\$\"0½Ó(^1í*þn.b’Œî’c¥d	®\$®°=êZæešCY-¥—-à„\rçda-Â‰Îväôš</DÂ\nÀÒ îH\0Â)ç8/¢*‰i*ãD}Åh\"4E/ŠgÒô¼Ã{ Š5ÒêcÆfIŠ¤]ª¶êeˆ\"ò„¥*¤eŠ?)\$~g˜4D\\B^-‚xÉŸ0’àE¢Þ\rc*‰>a(RBê3åfRàä";break;case"uk":$g="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.ëYD’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÓL•·‘A¡;–Szu CD´RöJ©‘`hr@=„¼®Á†BƒÎs;ãMNrJ¨Û­)ŠS3NéjfB£TÝ…ÑˆÑ54T4´62(Ñ>É«)ŒF#DMRD¨kgVhI…t˜—;ršFêöH‹¡	#hàé\r£(Ü:KÂð\rã#®ìŽn@¦(‰ƒK¼µ *™cÃÍÚb—QF…vGF‚Sj¿%,@5jmKpš¸ßX×Ì|Y¤mËw‡Mø¬Ø´	#fÑÛm«þ’ªøc2¨(Õ\n,IxåmZÏeùŠr—Íå”G{_rØÕ¡ªFºèÑ ûBÌž†ÜÙìA„£W¼môZÕ³Fq[Ï›(HE}¡ùZÐR‰”¬‡Ó3¾G\0©%ƒ:‡(4EAÓ\0PŒ:ƒc®òºHÀÆ0Ðmá¥yA£CI…'®¶l”›“^íõ)!ÈlP­óxÄÄôúRúQ°¾1ˆ&pY)ê^ÉcôêOC°\$*;»”)¢\r õ8/kÛá´×~ÍÔ™–M3Xµ]uÐYi#Ù¢š5FÃÒõ³YŸ±úëêa_„˜w}=jB˜ñ£j6å}U]‡…Ûx”{e+8#â6ƒà¸cärxfÁ±UèÉ\rhT\rç,6¸@ò¨naÔ1†3ªÃ3|°7†t Ñãùá„3† !;0\\È@:àPÁIk3FíCUŒ³\0C\naH#76\0æAq#Š\0®¥2Œ]°Œ,\nÐ®Q¢\"HJ%bÞ¦b‰I!'~i\"#VØ©¶­Wè#ÜCÚbD’£r¢#â.jhÔÐ£„ÎŽÉ²·PÐÒ\$GAe¢‰¨|†¤bxCs;ÁÈæHæÃxr]A”<\0ÒÿÃ\$A„â?ðÌAhÐ80tÁxw•@¸0†@ÛC.’!œ®)jô\r!¼7ðDßÃ‘Ô’€/žgÁ>[«|2®ÆxaË•s†…Òº×0a\rg!yÀÊ hn\\AÒ2!U²4D¹úEEMÍ!–¤¾Oó&wf…+dm›‘üu‰LÙ¨ÓFñý))([‚\0 €-ŸIF~T®\n8)G‘<¥ç<ÎT)ãDG3TD|qrgù5 ‚\\g¹\n?oÕù«ò%q-C*ÛÒžZÛu >ÅÙjBˆöŠS§ô¸†¾³zÅJA½MQ)}†íI“µJùœÄÒŒã¤nG\$ª8º4ÞåÚ|}‰Eœž’.N ¥u¥È»Crê<ˆ?ðâNªäÁÈ7†Ð@et°:á¡q\0Çmƒ®Â@d&ª¢#ŽG¤9)èpSEŠÒNâòƒð¦³ÉXõXô¶’]Xhñ\$dhÙ²gè­^rÅ)Ø“:‘…,R”a×OÖèT’åLä€—‚¦×ÃKç´¸0Ýøo• ‚N ÒÁï	€€3t\$àF\nBêWP·¤Šä›µî¾‘‰¾qåŠdkñÌ/ÂeJ5MÊ)í³”6JÈ3ÎAM1\rL&!é'ÏHŽeŸÈ!\nh4q64ÉÁ¦ea¦ÇhãˆYû4jf!Ï%HØ‘z£R¨¼&2¦/Ó²*në”‚ eÁ…¾.@ìCexVE6Ó-E.¿[sì|qA¬`U^¶uDŠ\$î®òyQA	‰;&Îßb&6‹þÙñ˜1ª\"µ¬(§­RŽHšÉ•8°æg¶5^ïÕ|æ‡[˜XŠÈw/Z;4@†‹+«J:'8¬Œ°}b:??GñóÎfrìgjýÐiâˆF£#1¹K\0êáPZBh[˜·Í­•D°ÎãÊË‹™Ñ‹­HYñ¬…6FÑMŸ³|¡X2ž˜\rL¦;`ùš\r\r!è2€ ‡_C„-Ù¡L2 Æwƒ&`Îî‡§:bj+´~\nŒXEZvQÐ´Å¤ÅŽš,¬ÕñMh(­è”’˜B›ª‚´¬eÞ¡‡Q½êklŽo\n,žhLpÐÕ|£éûŒhöC÷Î\"Òû/~(â¹‰æ1E^§òI¨|l’ñâ¼ÓSQ¾'NMêTë±ÛµMé1¬R F‹k¼(„½	ºBÁ©~“WºT…#B šl|Æ™i§u¡WÊ@|U<Ö'ÀB T!\$\nï7ÃIÕºüä†úÞvƒ…é²g¤•SBŽ‘ìiq\\Þòõ\n”¾é)¢éš›ŽôeEÇ}ï+ê£³¡ z\\K©Î·\r¸¢óK¢Sµv:†ÖIûÃïL\0\0ŸÉüSóQÇiÚ-}Hÿ”aôÇy–, cžñ\nqx¿FÙ	?¦×Þ _z­ùåË2êðn_ÒÉÜK9uÑi{uT‚Éä*dÞ'Úú-åî<{aâ²Îý&í2éSùÞ”¨}¯\"ˆ>ë+ûýÏ_ûo®ª½ÏåôþHîoœkWŒ¯\\•ð;‘Ÿ>Àö|„|bÂY‚F±ä%Ãbè	Ún-Í\"ï¦B‡x¸‡2!#ÐŒ^ Å^~D·\0Áv¸MÂV\\(P6B¦_¯f?oÊ*P	ä5dÊª#àî„‹ÃTb¦(Í’À¨~ŠnâFp¶j“ˆ¥<#CFØ,¬ŒäX‰¦|4ÎŠ@Ð‚bE¯P,Î5h²ñlîòãÐô‡¤æLõbâý´NbÏÎG«þ!lûÖØíÜÐá\r}0ØãmØÌG¤}f¤Ž¤?\rP.Ü°î|­ÜæFì>\$Ê%IîÍì<|Úcîna‹jåD&¨¨ØÕDúhÒ#ÄBMÆ¸ùæ,„ü+HøÌGT0ñZJ^cÌ9Ãn¡qjnãÓ%E2zBàë-‰kbò¯YÑ\0ÅâæÞË~H‡‚ÓfF!Ø4h”\nš!lf%@SìL~LÜuuìå°øD‚c¯êX%LÏíµÃÚMëLEOàÍ±ß§Ûð¼)D6|)ý¥KøÍqåïí7 MúÌñöÍMU§†£M\n+±×á|Œ’*q \rƒ!ÐÅ\"Ç\$0‹B·!q˜^¤Î²¤tF1þ}ošDÈîn0n1¤èª6~¤xûÐÈ(2\r2Xþ¯<FPÎT’k&È}jV2v†ŽŽ«‚ù†‹ÒS!O,ý&oÝ)ŒÌ)Î‡*.ŒEò~ýR‚[\"(rW+q˜=.(üåøâæ*¿R‡#B‹#Ç.+êPËï.£#-‘•\rrÞEKèòRý%î2ò %i\$§¾ELDC0rGÍ2§Ç ‡Èp.¢VíÂ®¸\"EV¢f†©,?\$7§Ï2‰ÖÀj`ŽEó)ãßñ£‚æ°ÊE#t7ª¦.°v2j:‰*@ªgç2ä¼.Ç® Rö!sâÆJãô#N‘ðnpñE2ßgPÛŒ(â'Ç	ŒBB±°Ì(Ýw0Q2]<ï_.ñÕ/3Øä¦*Ý3\$s!Žžwbsêbð|éPõ\$/™>-‡ŒÈF…µ=R‹#®“AJ9>ó÷tóñÐÐsBC!®¡\$–+¦B_èØ`†\0VO5e€\rà&MtÊ§–.„éo¿….Jq€Cî|=ÌÆÒ’É'¬ÿ+'çÔGƒOGÒ/òU0rôyrÇH®Gô‘2Ió¹ƒð†€{F–d4ªcPqH’yIñ§BdÒZÔ°ËtµD(Ð“ù64Á*FÝl^¢h¡dTUââ£Ê@åbsÓKËS@Á#s!DTûb¾†ì©’³1ÇyP£!PéãQ5\0¶õ(’Ý ”»!å8©Æ+OÒùQt×TËÕ<Ò5&¥ê—NB>íPþÅÕ[PUBÇBîFL•G!Çg4Zã°QUÌÃ”*ãŠ2äÂ¿RòÛr	XÓèQ”%M•láÕzä‹wC£ñZÊvV! NDû@4 S-àêf¶ê§‹J4ƒV™\\¤Òê…pO”S4+]Åk\nõåV“ñQðþ¤*JfFþ™*œÅ“¾ÄÍã;Ïf4+JÅ?)ãthalõ¦W6Nˆ(/:ªò“I0\0Ô*²«,V[™+¶:6&¶¥…dO¥cvŒÃ~Èh³9EpYÏ¤ØŽ)´\\ÿåaFµ9f	ÌX5ÕYs)R€ú–5e#hÒ9doÖS¯cc–›IOi/Á-Ad'€† Øs7Ã*¾•-bSÐ.¾Ê(µrµaÂ'B@Ê¢xË¼\\Àê‘@@I¸¹àª\n€Œ pÄeÒB\0Îú/„óQ¶S7Â<{„‹2ŒõÎÿ+£Õ:z³lûqO‰-uiq×2{·7 ˆgÂd²§vñl÷311J8@›p Ì\$&E¤7BRð\0>¤J@ó–Sò\\êUßr%\nHä“7î\\FñmcÕm´¼Cvƒ'í‰#ÇÈâ’GB4©ÇÉ 	‹¤­d#|7Æ\\É\"9¸<‡8ÒÈ”>­©Œ{Í‘55ô€1\$6l™V1Ù	Ý]Qé vM2ë3WŠñ}\0ÖÓ³1ŠÔ\r¬ó\"hx&µBœ>”%8_„ÅíÜ¦\ng>“Ð)…>3-\0¦s±~ÓVçjOÊ6¬%˜ÏK4ÕÍ\0yA løv³ù–dðÃ_:Ç&aâ£'xlïí.‘	\r,€ÙnÖ\0¬ì î@¬ Æ ê\r¬j?x<õwãfåhïHÒ8Êržàí¿T·„LŒRC¦|Ð Cs¼Ñø	—ëN2	ÒÑLáÍ.Ê|Qv×‚ÙÇþ;£¸£Šm˜]C ¸³ÂëU\rR0‡fL¿bÝB4B¬Oc&ÓÊ^";break;case"vi":$g="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÊ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹ÀñÈ@3Äè!ªpK P›k¼<ÈH\n3°Ã|•’/Ð\"1J'\0\0P¦¦‹RÙ!”1²dœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘Ü˜„ˆA¯¯™Z8B<@Ë(4=9%3÷.—sdn4Ê P’6Ž`Ê6Œ£sø¤H£*:7ŒˆàÞ£˜Ê\nbˆ˜4Žƒ*\\,ToS*Ë³2Õ‚h	KFt†Æ @§Ž´I†V\rÏC”Ø-òcë!ÕhÄ<×!@æ»uw\0¡)ÁRÔ•´œ«²<QÑ‚¥¦ën	~Å/E+ùb—eL a”MË]é@ðìÑ‘ÂDë²…ÓáFÄÚHù qØÑ,Ó P\$ƒµ\$¼­òÒ‹+DÐZØ(Ž¦RþŽé@‚-Ð^H½½¸#46)²µj&0×rKe0d˜<\\ÃcpÃ\rm”’© †)ˆš§J‚H9¦U\n¦ U~¸4kÑÝdYIÞ§ªYcT]µëR‚Ò”N¥ÔîíÇÅÕüÃIU{b¶sÔù×Ï5€“7;Ë¤1CbÐ#{40ŽU˜Þ3ÔÝ]iŽéB:3òRàa–¨˜Â’Š*H§ÉÙÃO–ÏqN9À`@‹”q²:ôçŠÇTÍµkåe?ƒs*0¥Ò3|§®´(z˜¤#uCOuÞFÑM(”ÉI ÅlÓò]cª]BÈ•[¼þøÎ—\nÜÎ¢»ž¦§p¼2|Åøt{ha§‰„÷…Ò‹|aæ§\$è|Ó»çdþ1‚ZáC\rd3ÐD tÌð^á@.!6\0ÊpoAœªXjÈna¤ÿ‚ðDGÀgUPx/† Ø•CX\"ÆôaBLŸÀm€¼0ƒæ²GÔÚ¿`F+¢€ÐKs>'Ì‘³tæDÃ(s‡gü—B¢†ŒI> “ô[\r|.ì¬‹¡n€H\nÑ}¢<%Ïé8C\$ÉW”‚–ë–xhv1é!ã¾ãÁJ¡bÇ0èÐŽ©‰À€>Ä2“P»gñ‡–.é‹Qý•\"t»R~”\nŒŽ\$\\TœCü~Ñü|oEóÒ\nIpI\"AåË Ò«Cpo?ŠÈ7*Ò:Cš	¦¢4ŸÀÌŽ¸A…¸9EJAC`oVRl‡\0Ã‰pDWêÌ’èQ	`/\n<)…GfwŸ9‚á\"E’ö¾	„P#²¤ÂQ\$ˆ·'r}DVÎîÖšVmžÏaBI\nDÈt¦†8;ø°Uã)Å'¤¨–¤Ü]‚0Tfø£@ˆM{…Og%?O5ú—<O’.ˆò;>[VÊEC,’IØM!\$Äï&jZÀÛL'\\ä£ ™Q’\n…?T¹d|.ÈBcb5j„@Ê{’Ø0†ÀêXÒÊ&”%,­³vŒG†¥èJXU–I,cV@ñYËY”1 ÊªÚÂcÙŒ¢ÌA&H.ÄX ª‚†0êØ,Ã€l6¡ª4¨•ƒšX°þÄQ”²—ÒÕ\n…¤Ð•\"/Qß¨i~î\r	!P\n\$ƒ°áRÆ°Ýq—\n\nÅüõYB8™îº(§]1gJÍ’0£¨\$íÁ¤À—_	¥!«ØV¢–4N+aÛtG1®†Ò†ì”Š%ð“FÔz´–¥#6M™ºDxNLt8Ë0×®‘w‚P1ÇFuœª€§ØLRÊÍkæ!|I*\0F«\0\nãbEnýÃ\\nˆÆ.Þà—ŠA\"ÂÂA¥f\"’ÀPRrÁÒD`‰&­´ù`¶B«ÓI7S)µ7€ ‚ Aa!ÙÂðÓA˜VsFi‡Pà!’¹–l„_Ä€_‘w`´CÞçŠx !ÓdÈ\$™)”À±'ts!Z'äî‹y3&¹(O—dLpˆ&oÎ¤jÒf€Aâ‘\\RlôîÖ!%Ù¼ƒf»ù›I›þ]\$	ßvfLÈ1Q)d{KçÌÚnƒL-?‡ø;‘FÁJP¬øZ¸€®É@Hf¹°öyšÚ:)Clñ¥åK\\–‡î‘“L¥0“Kíž‘ö•ïÔ”9)“V]Š}M/™ ëÌ«¬2?H!1Å’+o•UÃSÙ7B÷ŒÒ%£}bA\"TâQT7ÛíÃ’;ha\"‘6.~;Äº<ðnÖ‚á¤oQR(è›‘ô¶ò€ªu¨Åù)7\$ó1J\0Z<tÏõ(ÚÜýX\"Äck`]ÙÌ¢™UhÇÌ]ÝFçª;“ ¡{ð~\n8ö{‹d®0áÌ!¶¬;Œ\${°,¤hµ4®Eíb¬î¢á;ë|!ž#uém˜à(d«ä{XÕ{Y4âµ¨öð˜…-]©ÏŒ‰ßW™ÙhóbïÝÄŽ÷6µß[%ö%ÁøVù\"ØÂ6?Á×9÷uá`/‡ÑFGFº‰ˆÄå=‹yðÏÔø¨‘âç ×ßïMê8?fõ];Œ¶Á0Q¹r®fþ¬Ä/†%ÞÀ.é½g¾@êî£”eÐñÿªtª'/è·Y÷ñBš8•Oû‘×&RàÏsŠUhòô¸Ó¾Å8>«^d]µ˜u±]Y\"ËDÙ‘u©Ó=œŠõ‹^ÿC6þÂìOFtOúÀö\$ õoïÜZðø9,€Xoi¯Øî°\$ø¦zð‡pð'e¬YÐ2È-^ÈÆÄ'>ÈJFï|J&\$7,^8F`\"å–I!vH\n˜YìT:¥–w@Ènmœ ¨&ò§@Ï0Šîë¨]‹W	‡>Õoý¦.»o×	GX#ÁN\$¬%Ê0+TíÍ>½ÎˆOnP´	/jæ5d¦ ªºôPÐì‘£ w§.âÝâ‡¤l«°¥äÛÊ»%^Ðú-P† ‚|°¯Œ0,f<È‡4D1Oo’±Ä•,kE¯\0í¥_ Q ZïºQN;ð½Ä”i„Ö\$„pS¬í^ïoL–l˜ó¬ñCÉŠ\\MñÉ\0ÏCìó§œè*ª ‡òºï€^kXÂP5Þ5ƒ½GgåªÍìx;+jZCÖÛçæ9€Â§)xQ‚Û¡wÅºû£à³Ð’â\"\\	Ãæ¢bÐ\rv(ÅúK¨GŠå&R\$ôB«bH¼1˜ObôæÃJG¤ì €ª\n€Œ pî*l%\0J¥ÌìúÇPkü4…0\$!\$Ié¬4m êJ§v) PÚø‚üI¦Á²îQ\0Sr\rh%Ç¨p‹ ñÄª6d”Q…xzl9%J~,ædfŠÆÅ0dvldâpà´\"Uäï:ân©/SDF\\6¨KË+.´Îÿ–ÂH7Âg6ú°þª2LÁX_ôb(PlÐ@Ô[\$vpÄÆ8ND7ŽH<ëÎø\nÉJOòGÑ2\"p¡ªÔê¬Ï®ž°Î²%¬‹N\0ÂW äS…@ÊU ¬ÊàïËNb!r^¢Õ.cxNp*ÊøCç¢z`äEì­A^0 ˜»híãÚG¦ÞQJbÂ\npÊy)Éê4hž±s›\0ä‚9²Ì—¤vs3NVkí5T\r3XU£ž³bÝ\nÄÉ2Ý¤²ºc:S5«]R‹À4b¢";break;case"zh":$g="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*ŒcÚTÄAns–%ÙÊO-Ç3¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdŒDcìMœ¤Al²¤‹‚N-9@€§)6_¥éDî’ë£Þs–eÛ‚‡%ÊyPœ¤Ìž÷B¥ºF­ys”\nZÃ±()tI¬„Ì4^’­ÙÌF'<Ý\$Î\"HÚ83ãhÊ7Š3G?5£xÈÒ4Ã›*)Š\"`ÒÕ¶§I\0DœÄYS1RZLÇ9H]8\$™ÌO±\\s…ÉÐSÒ1}SURê¥)v]SJCÄA–RT¥- —´Àt“ui D%¤8s–’ZN]œÄ\"†^‘§9zW%¤s\0]ö92§ÜAÈÑZx—‡59OO!Çg)T \0Œ:ƒcHÙ3á\0æ1Œ#pF	‡)\"oÐC•W±Pr”DñÒCÜ/á&r—IÈÛ·5…S\\±G,×‘'1Q,—sVùVYŒÍ,ÖsÄÐSLÇ1:AÞS	xêèG)³åõ±u'LôÌÕ6fXåÃ`Ò¥H6ƒ“Ç„äÊã0Ì69ƒ+jseAÒJ=\" ÞÌ\r¸(ò£pæ:ŒcD9Œ×à@6\rã;˜9… å¹Œ#8Âæ`KC®`êÕ…˜S³°°ñb˜¤#	9Hs‘\$b­‹‘©%jG’4’jºœ¤i+m;Y\nÞdQ>Æ\n{ØÒ7ÁY>Ä<H†FÏQÕNÓf»‰£æÕŽLÏ¤9ŽãxåCŒ£Àà4ëã \\ƒ#¯ŒÁèD4ƒ à9‡Ax^;þpÂ2r#pÊ9ÞÐÎÓü\0­»;ðÜÁÿF„:> ¾lØ(k@ù='ÀÊŸ”\0<á„( @¡B†Q|0†³*£ÌËûn/é@WzÃœxBüBŽ‘B.Ç@¢d\$W¡4\\‘ü?È\0·—8¥ ¯NiÔ\0 € ˆGý\"ˆøz{ˆ`ˆ(ä0D §2%DCF©¤Æl!^).&ÈÀ“RnND\" Â¸Z©†.#Ê±äKÌU{\ncI-p2•eÔ\nŠ\rÊÖšð@×Ãˆu4J3 ÞA\0A\r•êšÔþ€QF×0àâ[1hŒDR8šxS\n‘Iš˜²VÑ„yA,‘Sˆ‚ô +Ñö‘\n¶VÛ\na‚Æã Á	§pÝ®‚\0ÄC8 a\0€3ã*g_0F\n‘E‚¨pÒžÞÒ…VK°'öeäªÍ­na@–x¹A<'\0ª A\n}ÏÐˆB`E h°KÇ1j—Ë@Jbˆ!„4‡8•ì˜S,u'\r§ÐD¡˜0¯Åƒl’DµÚˆqFÁØ\0ºÃ¦`0DT]ÓO §g€ñ\"c\"%ã&f1á£“¾xjJk1QKUØÒYˆ–1Ö¥1~&Ç8¨hå&«1Ê#ÄÄw,‚(éÌQÈ ‰©pV x¶/c¡=hN'…¦€myÈM.×`æwE»ª%³ÜrÏ“Æ¬Â˜iA”9.”w¦|1š°Èwjyâ\"tO6*ÔYleUŠºÇžúÈY‹N,}Sª• (­‘-B@²	µN(;(%¢Ý\r¡@Lg˜”[Š¬SVq\"–mpˆf\r,SÜ×Yt@›DM‘&/‡0Ž0eí´{ÐÙj,†±®Sòv	CMWUaP%Ä,¨T!\$	\"þÃI¢k­|ËùiÃ„é¯ˆ–‰ñJy-ÃGmbe]‚\0^0­5Á¸<WŠ#ø)é©¦Â¼J¼‡1é\$XŽQ&#aüF3)ÑC‘W‡é©ŒÄìø¸àì ðÝÂöD¢'\nL]ñÆFJ9È¨,ì:%|Š”OJh¸\$‹vy²@ÁìA*¯d°–€PW¡‹2¥{¡”…µ>ÂBšç‚¼D ™DÂØrˆ89…jÒbw)Õ?„Ï ¯-9Vˆôf9…Ä5<%à½ÃÚ„®AÕ:¢RÏoªbÂlZ:­=¨¾@:†SŠäªtÙÞ¨‰;P‹+h¬u¦°A÷I¥k’X“¨…²ÂLG,qv&	°¤¢\0^ÕZ#Ce¹ìö\"6¶ÁÙ…¡k{mlEãÏ%–ÞÙQm¦“\"Èé£Tr. ¶E8°ÛšîÐÕmjê&R_ÞÚêúo²Xðöó)«•KTëÆcÀê¾±Þ¬­©k]ûÃ-Nºà6¢<qÐ,½W±“ümÅøÌX¯žšãlY‹±†üÖG†äOMkÀymÊáÜíŠK“-‰`æ·ur‰!§íø‡çÒ!¡bb>Ÿ'Ÿ“©y¹ãÈ*b£ On„\"¹½—\$\n.VäÜ'DŒ‰MÊ{£…IëˆhÞ¡SÍ§¥½è-3€–ˆùq­\0öÕUZ´Ìí\n«U½ÿ•]?«ªg4ðéyéÃÃ{Êg/ïjÇÈŽgtü©).üÌß0.¯‚õc¥°·*|•{.ÔØD/1 #˜ù¼7U7•ì¡[zëò]ð¨{‹ÛÅwþ±º~÷Ž.Ì:Å0ì¡âÞÏ<Òš7ÊÞWÓæÖ*½Ù„ØžêS…TN;Y<¿Ð\\ƒ‰y5S÷úÇÇüÂçô\"éû|oµû…[ÿ?7úþßÏþ»JŒ{Oº«œºv×\0ºä´þ‹¨ºËŸ\0ïîï‹™\0,ÐúcÞÏdREo:ÿÊˆ°„-\0kl¾Áo9\"î	¤\rãor\\«Â©~-têˆÂ£¶FëØË¡v©\r•BžGBÐ¡b&ÁB(Ë>80tIlN;mZ¬ìVj¬ZÅãf²\r€V” Ò`Ö€šªP¥CXn\r Ìne6 Œ›È>§¦šÈNx ª\n€Œ pþpÆ9£jäŒŒ©¡^hcøâ4#zªR<ŒV`›pËáf†>.!ÑCŒÒ¢ú>d'ã»ËÀ¼F|:Ï×\r–Š¦!j´d–BØ ˜\rçî9ƒé¨\r§´2£R6\"Z'né!vTA<H€Ò\"ÊibêÖ¡Ð¡X§|µªšzóO‚Þgâî\n†\0ÀC\$2Ü“àÞ\0èœë\$ÁcjØ|ñe^êdœ@AÌYËn—‚ÐÜ-†Ø©xÝJ6J:ìA+Ê8¾C¤RFlêùg¢z€Ò¥1ÆPà¬À î@¬ Æ ê\r¢0‚¤,ÙÅF·ÌgnÁÅL&\$ÀÒ£ÇJxG%j¬øÁªÒOj……è²¦¾5C*n2\r!&Pã:²þA®¦Nn„ ð,E@	\0@š	 t\n`¦";break;case"zh-tw":$g="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²/kÞÁ)ÒP“Ç)<·Ä©p¨’êY.R®DùÌLGI,I¥¥i.Oc’t’\0F¢å±dtì)Ê\\—È*ð’ëÛâ»/ÉÊ]g9f]Á…‹Ø^K’ LªÇ)pYÊr•ä2´.«ºó)•h¹2]¥Å*–X!rBœóœê	#hàÒ\r£(Ü:AíE\nÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qól¢CåyÎRPa s-¯a~WÄ¡r’GALKIÕUYWSËÍjë±\$ñÒPO„Ù\\‡ÑÃòØ˜SPSTâZC—±)qPd1ÊH\nY N(KqÈ]—g1GÇç9{aœÄq%)‘õ2¨ÅPQL“Ç1pMÙiâ|ƒB Ê<QI*[Êe2ZE£¥é8Ã¨Ø65-»HcÂ79Ô¡ÊH—¶ûÊtåQË„^•ê–D’q’Ür·õmV—5Ì¥*eõÄ¡]/•5Q•—u+ç™IÙÕS™N1<[gjYX§©iWÏç.žråÒ[žœùþn½/6·8kÓv¸ThKu3M’d86ƒ“\$ÊäÍ\rã0Ì6:#+u>Îš­ú7³£n.<„¨Ü9Ž£ÆÓŽc6\rƒxÎèŽacR9pƒÎ0º!:ÑÃk¢:ÙVöŒÄ¤Bib˜¤#Qã]¿>DYÒC‘®¼ú^G‰‚ør’Åt\"D'ÄQ?¾j…Ó\")ñƒHÞ7¡eL‘ÑjFv½¿rÃù)JÈ‰£æØL÷Ä9ŽãxåG_ã€Ó¹Œp@,¶æ3¡Ð:ƒ€æx/ðÈèƒpe@¹õp^¡ {\0PÁÍçà^˜ˆr4ÁÑü…ópÅÃX\"ÊA†U\n¡Áà/ ùD‚j…Á…Ù9å S‚*Ý<Àç{ÑèxPÐ(…Xå¯ø0F*A(-˜Âä\"Vø»IJ´WŽa-XP	A a\n‚R„0D‚\"bs¨®¨šŽa\$G@­Ž¬ód< Dq.&ÉÕ¢Ì+…ªÒvå:‰Á\0OÊ	gv‡Í^ŽQ(„|	!˜–àJŽ3Š!H†ål  naÄ:šuƒo\r € ÀvòùM’†È©RlÍ@psMè\0žÂ  h‚‘‘ü½„ÙB\rls…h‡d¬—…®¬˜ŠÒB\$”|2fU‹=Xä`3qˆ4†p@¤Â` ÆŒÍ'ê‚ Pn2™Ï('Ô¢´ò–2ÍH‡#3Éh¤Ã_aÒ#E©K„¡\$\0ž\0U\n …@Š¨¸ &Z<“º@¢<A­*R9É’ D‰³06\n³Â¿ (\"PÌXrˆÁ„6JÓÌ*ØèâŒÃ<vŽáÞ<èŠ³Ø.]U\"âœ]žB/£ „h‰PÈÖ8’…OÉã\"È¶u9Yš»>@f¸&Q*9Ä‚j-v”š×G@®KH‹ˆ±\09„)n)œDˆ‚ä+`š)\0÷©£\$QŒñN5(”åWD`„(¢êÈ”…@î¹ƒ)üsQ:*ØRŠµ\na¤=Påpt–Ùæ@Æl!á­G–'º™¸ÖÚµTåµŠ¥b¬Õ«@kµø‹‹AD9EâKŠ­˜{­v.Õ\rÂèHu„‚DË556JÐªC¨æâáÝŽTÁ\\ZÈ‹©WÐL‹ËìU‡2xOHx@\n5Ly…â'oÖ¶ÿÅÛL+àº]£]±v-­y¿Í\rÐ‡@U\n!„€A+ Pi4íÅ¹™°ß)\r`pŸá•ø”±>)G@©Nì÷‰ñÒÓÏ9åt\0€‚ˆcÉhŸæ<sc|r(‚xKzî€ÇÒ³ö/Eˆéâþ+66ÇEØ¤¥mC%ó\"ô•úÖ¤ræQB#zŽ@('c¬Ï›„`\nR®‰DKîÊY%)¤è‹=N\nqÐ¯Hs‹a'âHˆo3‹êž—õÿH/LPÉ¦â_HDYìÛ’ó~¤YâëÅÔ`9tæ¢ˆ–ˆ4<(U¤Õ¹˜Ø1anð€Çâ¥‹„=ZÈ¹0m@BŠÒ Ïˆ©Ó‹W=-!ZjóÒÂlZzt9ÖgBªðÅmõ…&IfŒÑÛbµÝ\"û7sÒ»jÜ\\Ö[ïÐ®ófÙ±\$ê_LoÊ€P		º€KAùZÂ7aS4FxxYëáC—†oôµÂ	nù»Šºï]{³®ýÙCè‡‡×èØÀ˜ ºÑ¼–‰LÕfz[²¶GÌÑj>_¥5›qÖ°Ö›pç»é›tÉÍ¹ýúkìÓ™ž#É»›/=½'¨\\¦wÐøÛ1Þí“«\\Îl\$oðN8B¾¡]¯ž2˜d1û_,e¬¹Ón?¡t6‡‹^±½;•ïî½K¤÷žéDÍâ¼•ør‰#•yÅBR?C–!«ñK…¼WÜœH¢jÌ¹4zåQ²xôWˆ±]\0 .;x—\rÜ~ƒè¼yRó™ž÷wú#¸g‰Ý×ªö¦ˆ~¸Ê>ë*ÁY+BùÔºukø—CãójÑÒ~_ÆÝû§è\\ïŠ­{äÂ˜X[wvaöÖÿÝùÜú¹~.†zÏæÃOòá_Â¨µ|U,èNáÌ+×oœ Â2j“á|†XBÏ‚æŽÈÂO¼UÂ¢\nîø®PoÐï °Žˆ'¨Â6¯&DÐ2Wâ|*P%¡6D\"Dó.J­’ÌL\$¯Ð¿*ú?P0^ð\"fg0nû*×Á£çjUÐy®epP¸kö¾¤Á0’¿«ÿËô¾p”úkÕ	«ü¾ïØ¿0¬ÓD^F\$fGO¹\0pRÃ¤8°cŒ?ÏÇ,8>¤7\r#\"	Ä\rh\"êö]‚–Ëif®J¼Èlæ\0 –'‡àP4àR™HAÖMhHS¡F¢.z%ÁbÎ'¢@B.±ÖeˆÎmÌÚ¡?a1ÚËc\"fÚ\r€V—€Ò`Ö‚~ª†¨£bp%\r Ìp…,7@Œžˆ\\§Æc4s ª\n€Œ pqv:Ctæf¦{Ì¨Íèâ#B8­ÆÒÇ\$†ë`	±w¥@á8\r~Ù#˜0°È9m–GŒ¹KßªÚÓ¢–‘ÁÊÿã¸WáÏ@Þ€Ã¢:`™çB}C45Ãldë.ftÆÛMŒâÊÝÎzz*«\"àëmÔÑñ\"&ø-b„S²9#\"\n†\$Åc.31Œ—@Þ\0è\r'D¶¬jÞ/ú/°*ªÌÅ¶[¢Z».Ã!2å\nnôîD¦ÎU(’\$Õ,\"Ì™‡Â|€Ò¨‹hÆ€@\nÌTà\nÀÂ`ê Ûá\0 fjA,âŒ¼¥`É¤ìÞqò-ŠO‚Ê<Ò.ª£ò1\nÂjë.ê¸<Ò?\$ †nc^3G*’­&À@4@Ë+n]!%8Áé¿¤dF€	\0t	 š@¦\n`";break;}$wh=array();foreach(explode("\n",lzw_decompress($g))as$X)$wh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$wh;}if(!$wh)$wh=get_translations($ca);if(extension_loaded('pdo')){class
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
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$C);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$C[1],"length"=>$C[2],"unsigned"=>ltrim($C[3].$C[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$C[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"is_virtual"=>($L["VIRTUAL"]=="is_virtual"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$C)?$C[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
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
routine($D,$U){global$h,$pc,$td,$Ch;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar","json");$Bh="((".implode("|",array_merge(array_keys($Ch),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$pc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$sf="\\s*(".($U=="FUNCTION"?"":$td).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Bh";$j=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$sf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Bh\\s+":"")."(.*)~is",$j,$C);$p=array();preg_match_all("~$sf\\s*,?~is",$C[1],$de,PREG_SET_ORDER);foreach($de
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
max_connections(){global$h;return$h->result("SELECT @@max_connections");}$x="sql";$Ch=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295,"json"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Ch+=$X;$Lg[$y]=array_keys($X);}$Jh=array("unsigned","zerofill","unsigned zerofill");$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text|json"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.6-dev";class
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
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Xb,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($Zd,$H){global$x;if($x=="sqlite")return
lang(38,'login()');return
true;}function
tableName($Sg){return
h($Sg["Name"]);}function
fieldName($o,$We=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Sg,$P=""){echo'<p class="links">';$Yd=array("select"=>lang(39));if(support("table")||support("indexes"))$Yd["table"]=lang(40);if(support("table")){if(is_view($Sg))$Yd["view"]=lang(41);else$Yd["create"]=lang(42);}if($P!==null)$Yd["edit"]=lang(43);foreach($Yd
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
selectVal($X,$A,$o,$df){$K=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$K=lang(44,strlen($df));return($A?"<a href='".h($A)."'".(is_url($A)?" rel='noreferrer'":"").">$K</a>":$K);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($N,$f){global$Uc,$Zc;print_fieldset("select",lang(45),$N);$s=0;$N[""]=array();foreach($N
as$y=>$X){$X=$_GET["columns"][$y];$e=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Uc||$Zc?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(46)=>$Uc,lang(47)=>$Zc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$w){print_fieldset("search",lang(48),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$f,$X["col"],"(".lang(49).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($We,$f,$w){print_fieldset("sort",lang(50),$We);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(51))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,lang(51))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(52)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($_)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($hh){if($hh!==null){echo"<fieldset><legend>".lang(53)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($hh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(54)."</legend><div>","<input type='submit' value='".lang(45)."'>"," <span id='noindex' title='".lang(55)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($w
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
messageQuery($I,$ih){global$x;restart_session();$ed=&get_session("queries");$t="sql-".count($ed[$_GET["db"]]);if(strlen($I)>1e6)$I=preg_replace('~[\x80-\xFF]+$~','',substr($I,0,1e6))."\n...";$ed[$_GET["db"]][]=array($I,time(),$ih);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(56)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($I,1000).'</code></pre>'.($ih?" <span class='time'>($ih)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ed[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$fc;$K=($o["null"]?"NULL/":"");foreach($fc
as$y=>$Uc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Uc
as$sf=>$X){if(!$sf||preg_match("~$sf~",$o["type"]))$K.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$K.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$K=lang(57);return
explode("/",$K);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$D=$o["field"];$K=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$K="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$K=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$K=idf_escape($D)." $r $K";elseif(preg_match('~^[+-] interval$~',$r))$K=idf_escape($D)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$K);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$K="$r(".idf_escape($D).", $K)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$K="$r($K)";return
unconvert_field($o,$K);}function
dumpOutput(){$K=array('text'=>lang(58),'file'=>lang(59));if(function_exists('gzencode'))$K['gz']='gzip';return$K;}function
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
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(60)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(61):lang(62))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(63)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(64)."</a>\n":"");return
true;}function
navigation($te){global$ia,$x,$Xb,$h;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($te=="auth"){$Kc=true;foreach((array)$_SESSION["pwds"]as$Wh=>$yg){foreach($yg
as$O=>$Rh){foreach($Rh
as$V=>$H){if($H!==null){if($Kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kc=false;}$Jb=$_SESSION["db"][$Wh][$O][$V];foreach(($Jb?array_keys($Jb):array(""))as$m)echo"<a href='".h(auth_url($Wh,$O,$V,$m))."'>($Xb[$Wh]) ".h($V.($O!=""?"@$O":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$te&&DB!=""){$h->select_db(DB);$T=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.6-dev",'"></script>
<script type="text/javascript">
';if($T){$Yd=array();foreach($T
as$R=>$U)$Yd[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Yd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($te);if(DB==""||!$te){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(56)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(65)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(66)."</a>\n";}if($_GET["ns"]!==""&&!$te&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(67)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($te){global$b,$h;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Hb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(68)."'>DB</span>: ".($l?"<select name='db'$Hb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($te!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".lang(69).": <select name='ns'$Hb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$Ig){echo'<a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(70)."</a> ";$D=$this->tableName($Ig);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($Ig)?"view":""),"structure")." title='".lang(40)."'>$D</a>":"<span>$D</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Re;function
page_header($lh,$n="",$Wa=array(),$mh=""){global$ca,$ia,$b,$Xb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$nh=$lh.($mh!=""?": $mh":"");$oh=strip_tags($nh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(71),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$oh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.6-dev",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.6-dev",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.6-dev",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.6-dev",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(71),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(72)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$Xb[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$O\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Ob=(is_array($X)?$X[1]:h($X));if($Ob!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Ob</a> &raquo; ";}}echo"$lh\n";}}echo"<h2>$nh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Lh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$pe=$_SESSION["messages"][$Lh];if($pe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$pe)."</div>\n";unset($_SESSION["messages"][$Lh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($te=""){global$b,$rh;echo'</div>

';switch_lang();if($te!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(73),'" id="logout">
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
as$zd=>$X){if($X[0]<$ih)unset($yd[$zd]);}}$xd=&$yd[$b->bruteForceKey()];if(!$xd)$xd=array($ih+30*60,0);$xd[1]++;$wg=serialize($yd);rewind($Sc);fwrite($Sc,$wg);ftruncate($Sc,strlen($wg));flock($Sc,LOCK_UN);fclose($Sc);}$Ka=$_POST["auth"];if($Ka){$yd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$xd=$yd[$b->bruteForceKey()];$Be=($xd[1]>30?$xd[0]-time():0);if($Be>0)auth_error(lang(74,ceil($Be/60)));session_regenerate_id();$Wh=$Ka["driver"];$O=$Ka["server"];$V=$Ka["username"];$H=(string)$Ka["password"];$m=$Ka["db"];set_password($Wh,$O,$V,$H);$_SESSION["db"][$Wh][$O][$V][$m]=true;if($Ka["permanent"]){$y=base64_encode($Wh)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$Ef=$b->permanentLogin(true);$tf[$y]="$y:".base64_encode($Ef?encrypt_string($H,$Ef):"");cookie("adminer_permanent",implode(" ",$tf));}if(count($_POST)==1||DRIVER!=$Wh||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Wh,$O,$V,$m));}elseif($_POST["logout"]){if($dd&&!verify_token()){page_header(lang(73),lang(75));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(76));}}elseif($tf&&!$_SESSION["pwds"]){session_regenerate_id();$Ef=$b->permanentLogin();foreach($tf
as$y=>$X){list(,$hb)=explode(":",$X);list($Wh,$O,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Wh,$O,$V,decrypt_string(base64_decode($hb),$Ef));$_SESSION["db"][$Wh][$O][$V][$m]=true;}}function
unset_permanent(){global$tf;foreach($tf
as$y=>$X){list($Wh,$O,$V,$m)=array_map('base64_decode',explode("-",$y));if($Wh==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($tf[$y]);}cookie("adminer_permanent",implode(" ",$tf));}function
auth_error($n){global$b,$dd;$n=h($n);$zg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$zg]||$_GET[$zg])&&!$dd)$n=lang(77);else{add_invalid_login();$H=get_password();if($H!==null){if($H===false)$n.='<br>'.lang(78,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$zg]&&$_GET[$zg]&&ini_bool("session.use_only_cookies"))$n=lang(79);$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(80),lang(81,implode(", ",$zf)),false);page_footer("auth");exit;}$h=connect();}$Wb=new
Min_Driver($h);if(!is_object($h)||($Zd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($h)?$h:(is_string($Zd)?$Zd:lang(82))));if($Ka&&$_POST["token"])$_POST["token"]=$rh;$n='';if($_POST){if(!verify_token()){$sd="max_input_vars";$je=ini_get($sd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$je||$X<$je)){$sd=$y;$je=$X;}}}$n=(!$_POST["token"]&&$je?lang(83,"'$sd'"):lang(75).' '.lang(84));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(85,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(86);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($J,$i=null,$Ze=array(),$_=0){global$x;$Yd=array();$w=array();$f=array();$Ta=array();$Ch=array();$K=array();odd('');for($s=0;(!$_||$s<$_)&&($L=$J->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ed=0;$Ed<count($L);$Ed++){$o=$J->fetch_field();$D=$o->name;$Ye=$o->orgtable;$Xe=$o->orgname;$K[$o->table]=$Ye;if($Ze&&$x=="sql")$Yd[$Ed]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($Ye!=""){if(!isset($w[$Ye])){$w[$Ye]=array();foreach(indexes($Ye,$i)as$v){if($v["type"]=="PRIMARY"){$w[$Ye]=array_flip($v["columns"]);break;}}$f[$Ye]=$w[$Ye];}if(isset($f[$Ye][$Xe])){unset($f[$Ye][$Xe]);$w[$Ye][$Xe]=$Ed;$Yd[$Ed]=$Ye;}}if($o->charsetnr==63)$Ta[$Ed]=true;$Ch[$Ed]=$o->type;echo"<th".($Ye!=""||$o->name!=$Xe?" title='".h(($Ye!=""?"$Ye.":"").$Xe)."'":"").">".h($D).($Ze?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($L
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Ch[$y]==254)$X="<code>$X</code>";}if(isset($Yd[$y])&&!$f[$Yd[$y]]){if($Ze&&$x=="sql"){$R=$L[array_search("table=",$Yd)];$A=$Yd[$y].urlencode($Ze[$R]!=""?$Ze[$R]:$R);}else{$A="edit=".urlencode($Yd[$y]);foreach($w[$Yd[$y]]as$lb=>$Ed)$A.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($L[$Ed]);}$X="<a href='".h(ME.$A)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$K;}function
referencable_primary($tg){$K=array();foreach(table_status('',true)as$Tg=>$R){if($Tg!=$tg&&fk_support($R)){foreach(fields($Tg)as$o){if($o["primary"]){if($K[$Tg]){unset($K[$Tg]);break;}$K[$Tg]=$o;}}}}return$K;}function
textarea($D,$Y,$M=10,$ob=80){global$x;echo"<textarea name='$D' rows='$M' cols='$ob' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$nb,$Oc=array()){global$Lg,$Ch,$Jh,$Me;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($Ch[$U])&&!isset($Oc[$U]))array_unshift($Lg,$U);if($Oc)$Lg[lang(87)]=$Oc;echo
optionlist($Lg,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(88).')'.optionlist($nb,$o["collation"]).'</select>',($Jh?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Jh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(89).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Oc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(90).")".optionlist(explode("|",$Me),$o["on_delete"])."</select> ":" ");}function
process_length($z){global$pc;return(preg_match("~^\\s*\\(?\\s*$pc(?:\\s*,\\s*$pc)*+\\s*\\)?\\s*\$~",$z)&&preg_match_all("~$pc~",$z,$de)?"(".implode(",",$de[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$z)));}function
process_type($o,$mb="COLLATE"){global$Jh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Jh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$Ah){global$x;$Lb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Ah),($o["null"]?" NULL":" NOT NULL"),(isset($Lb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Lb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Lb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Lb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Lb))?$Lb:q($Lb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$nb,$U="TABLE",$Oc=array(),$sb=false){global$h,$td;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(91):lang(92)),'<td id="label-type">',lang(93),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(94),'<td>',lang(95);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(57),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(96),(support("comment")?"<td id='label-comment'".($sb?"":" class='hidden'").">".lang(97):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.6-dev' alt='+' title='".lang(98)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$af=$o[($_POST?"orig":"field")];$Sb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$af=="");echo'<tr',($Sb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$td),$o["inout"]):""),'<th>';if($Sb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($af),'">
';edit_type("fields[$s]",$o,$nb,$Oc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($sb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.6-dev' alt='+' title='".lang(98)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.6-dev' alt='^' title='".lang(99)."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.6-dev' alt='v' title='".lang(100)."'>&nbsp;":""),($af==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.6-dev' alt='x' title='".lang(101)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
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
connect_error(){global$b,$h,$rh,$n,$Xb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(102),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(103),drop_databases($_POST["db"]));page_header(lang(104),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(105),'privileges'=>lang(64),'processlist'=>lang(106),'variables'=>lang(107),'status'=>lang(108),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(109,$Xb[DRIVER],"<b>".h($h->server_info)."</b>","<b>$h->extension</b>")."\n","<p>".lang(110,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$og=support("scheme");$nb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(111)."</a>"."<td>".lang(112)."<td>".lang(113)."<td>".lang(114)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(115)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$gg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$gg' id='$m'>".h($m)."</a>";$d=nbsp(db_collation($m,$nb));echo"<td>".(support("database")?"<a href='$gg".($og?"&amp;ns=":"")."&amp;database=' title='".lang(60)."'>$d</a>":$d),"<td align='right'><a href='$gg&amp;schema=' id='tables-".h($m)."' title='".lang(63)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(116)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(117)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$rh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(69).": ".h($_GET["ns"]),lang(118),true);page_footer("ns");exit;}}$Me="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($xb){$this->size+=strlen($xb);fwrite($this->handler,$xb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$pc="'(?:''|[^'\\\\]|\\\\.)*'";$td="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$Wb->select($a,$N,array(where($_GET,$p)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?lang(119):lang(120)).": ".h($a),$n);$b->selectLinks($S);$rb=$S["Comment"];if($rb!="")echo"<p>".lang(97).": ".h($rb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(121)."<td>".lang(93).(support("comment")?"<td>".lang(97):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(57)."</i>":""),(isset($o["default"])?" <span title='".lang(96)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(122)."</h3>\n";$w=indexes($a);if($w){echo"<table cellspacing='0'>\n";foreach($w
as$D=>$v){ksort($v["columns"]);$Df=array();foreach($v["columns"]as$y=>$X)$Df[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($D)."'><th>$v[type]<td>".implode(", ",$Df)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(123)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(87)."</h3>\n";$Oc=foreign_keys($a);if($Oc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(124)."<td>".lang(125)."<td>".lang(90)."<td>".lang(89)."<td>&nbsp;</thead>\n";foreach($Oc
as$D=>$q){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.lang(126).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(127)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(128)."</h3>\n";$_h=triggers($a);if($_h){echo"<table cellspacing='0'>\n";foreach($_h
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(126)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(129)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(63),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Vg=array();$Wg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$de,PREG_SET_ORDER);foreach($de
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
as$bh)echo"\n<div class='references' title='".h($ch)."' id='refd$Sd-".($s++)."' style='left: $Td"."em; top: ".$R["fields"][$bh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.6-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}echo"\n</div>\n";}foreach($ng
as$D=>$R){foreach((array)$R["references"]as$ch=>$Wf){foreach($Wf
as$Sd=>$Sf){$se=$sh;$he=-10;foreach($Sf[0]as$y=>$Dg){$xf=$R["pos"][0]+$R["fields"][$Dg]["pos"];$yf=$ng[$ch]["pos"][0]+$ng[$ch]["fields"][$Sf[1][$y]]["pos"];$se=min($se,$xf,$yf);$he=max($he,$xf,$yf);}echo"<div class='references' id='refl$Sd' style='left: $Sd"."em; top: $se"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($he-$se)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(130),'</a>
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
pack("x512");}}}if($Ad)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header(lang(66),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ib=array('','USE','DROP+CREATE','CREATE');$Xg=array('','DROP+CREATE','CREATE');$Fb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Fb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$L);if(!$L)$L=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($L["events"])){$L["routines"]=$L["events"]=($_GET["dump"]=="");$L["triggers"]=$L["table_style"];}echo"<tr><th>".lang(131)."<td>".html_select("output",$b->dumpOutput(),$L["output"],0)."\n";echo"<tr><th>".lang(132)."<td>".html_select("format",$b->dumpFormat(),$L["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Ib,$L["db_style"]).(support("routine")?checkbox("routines",1,$L["routines"],lang(133)):"").(support("event")?checkbox("events",1,$L["events"],lang(134)):"")),"<tr><th>".lang(113)."<td>".html_select('table_style',$Xg,$L["table_style"]).checkbox("auto_increment",1,$L["auto_increment"],lang(57)).(support("trigger")?checkbox("triggers",1,$L["triggers"],lang(128)):""),"<tr><th>".lang(135)."<td>".html_select('data_style',$Fb,$L["data_style"]),'</table>
<p><input type="submit" value="',lang(66),'">
<input type="hidden" name="token" value="',$rh,'">

<table cellspacing="0">
';$Af=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(113)."</label>","<th style='text-align: right;'><label class='block'>".lang(135)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Zh="";$Yg=tables_list();foreach($Yg
as$D=>$U){$_f=preg_replace('~_.*~','',$D);$db=($a==""||$a==(substr($a,-1)=="%"?"$_f%":$D));$Df="<tr><td>".checkbox("tables[]",$D,$db,$D,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Zh.="$Df\n";else
echo"$Df<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Af[$_f]++;}echo$Zh;if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$_f=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$_f%",$m,"formUncheck('check-databases');","block")."\n";$Af[$_f]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Kc=true;foreach($Af
as$y=>$X){if($y!=""&&$X>1){echo($Kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Kc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(64));$J=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Vc=$J;if(!$J)$J=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Vc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($L=$J->fetch_assoc())echo'<tr'.odd().'><td>'.h($L["User"])."<td>".h($L["Host"]).'<td><a href="'.h(ME.'user='.urlencode($L["User"]).'&host='.urlencode($L["Host"])).'">'.lang(10)."</a>\n";if(!$Vc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(136)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$fd=&get_session("queries");$ed=&$fd[DB];if(!$n&&$_POST["clear"]){$ed=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(65):lang(56)),$n);if(!$n&&$_POST){$Sc=false;if(!isset($_GET["import"]))$I=$_POST["query"];elseif($_POST["webfile"]){$Sc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$I=($Sc?fread($Sc,1e6):false);}else$I=get_file("sql_file",true);if(is_string($I)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($I)+memory_get_usage()+8e6));if($I!=""&&strlen($I)<1e6){$Kf=$I.(preg_match("~;[ \t\r\n]*\$~",$I)?"":";");if(!$ed||reset(end($ed))!=$Kf){restart_session();$ed[]=array($Kf,time());set_session("queries",$fd);stop_session();}}$Eg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Nb=";";$E=0;$mc=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$qb=0;$rc=array();$kf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$th=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$dc=$b->dumpFormat();unset($dc["sql"]);while($I!=""){if(!$E&&preg_match("~^$Eg*+DELIMITER\\s+(\\S+)~i",$I,$C)){$Nb=$C[1];$I=substr($I,strlen($C[0]));}else{preg_match('('.preg_quote($Nb)."\\s*|$kf)",$I,$C,PREG_OFFSET_CAPTURE,$E);list($Qc,$wf)=$C[0];if(!$Qc&&$Sc&&!feof($Sc))$I.=fread($Sc,1e5);else{if(!$Qc&&rtrim($I)=="")break;$E=$wf+strlen($Qc);if($Qc&&rtrim($Qc)!=$Nb){while(preg_match('('.($Qc=='/*'?'\\*/':($Qc=='['?']':(preg_match('~^-- |^#~',$Qc)?"\n":preg_quote($Qc)."|\\\\."))).'|$)s',$I,$C,PREG_OFFSET_CAPTURE,$E)){$lg=$C[0][0];if(!$lg&&$Sc&&!feof($Sc))$I.=fread($Sc,1e5);else{$E=$C[0][1]+strlen($lg);if($lg[0]!="\\")break;}}}else{$mc=false;$Kf=substr($I,0,$wf);$qb++;$Df="<pre id='sql-$qb'><code class='jush-$x'>".shorten_utf8(trim($Kf),1000)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Eg*+ATTACH\\b~i",$Kf,$C)){echo$Df,"<p class='error'>".lang(137)."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Df;ob_flush();flush();}$Hg=microtime(true);if($h->multi_query($Kf)&&is_object($i)&&preg_match("~^$Eg*+USE\\b~i",$Kf))$i->query($Kf);do{$J=$h->store_result();$ih=" <span class='time'>(".format_time($Hg).")</span>".(strlen($Kf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Kf))."'>".lang(10)."</a>":"");if($h->error){echo($_POST["only_errors"]?$Df:""),"<p class='error'>".lang(138).($h->errno?" ($h->errno)":"").": ".error()."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($J)){$_=$_POST["limit"];$Ze=select($J,$i,array(),$_);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ce=$J->num_rows;echo"<p>".($Ce?($_&&$Ce>$_?lang(139,$_):"").lang(140,$Ce):""),$ih;$t="export-$qb";$_c=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(66)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$dc,$xa["format"])."<input type='hidden' name='query' value='".h($Kf)."'>"." <input type='submit' name='export' value='".lang(66)."'><input type='hidden' name='token' value='$rh'></span>\n";if($i&&preg_match("~^($Eg|\\()*+SELECT\\b~i",$Kf)&&($zc=explain($i,$Kf))){$t="explain-$qb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$_c","<div id='$t' class='hidden'>\n";select($zc,$i,$Ze);echo"</div>\n";}else
echo$_c;echo"</form>\n";}}else{if(preg_match("~^$Eg*+(CREATE|DROP|ALTER)$Eg++(DATABASE|SCHEMA)\\b~i",$Kf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(141,$h->affected_rows)."$ih\n";}$Hg=microtime(true);}while($h->next_result());}$I=substr($I,$E);$E=0;}}}}if($mc)echo"<p class='message'>".lang(142)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(143,$qb-count($rc))," <span class='time'>(".format_time($th).")</span>\n";}elseif($rc&&$qb>1)echo"<p class='error'>".lang(138).": ".implode("",$rc)."\n";}else
echo"<p class='error'>".upload_error($I)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$wc="<input type='submit' value='".lang(144)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Kf=$_GET["sql"];if($_POST)$Kf=$_POST["query"];elseif($_GET["history"]=="all")$Kf=$ed;elseif($_GET["history"]!="")$Kf=$ed[$_GET["history"]][0];echo"<p>";textarea("query",$Kf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$wc\n",lang(145).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(146)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$wc":lang(147)),"</div></fieldset>\n","<fieldset><legend>".lang(148)."</legend><div>",lang(149,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(150).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(151))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(152))."\n","<input type='hidden' name='token' value='$rh'>\n";if(!isset($_GET["import"])&&$ed){print_fieldset("history",lang(153),$_GET["history"]!="");for($X=end($ed);$X;$X=prev($ed)){$y=key($ed);list($Kf,$ih,$hc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$ih)."'>".@date("H:i:s",$ih)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Kf)))),80,"</code>").($hc?" <span class='time'>($hc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(154)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(155)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Kh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Kh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$B=$_POST["referer"];if($_POST["insert"])$B=($Kh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$B))$B=ME."select=".urlencode($a);$w=indexes($a);$Fh=unique_array($_GET["where"],$w);$Nf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($B,lang(156),$Wb->delete($a,$Nf,!$Fh));else{$P=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Kh){if(!$P)redirect($B);queries_redirect($B,lang(157),$Wb->update($a,$P,$Nf,!$Fh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$J=$Wb->insert($a,$P);$Rd=($J?last_id():0);queries_redirect($B,lang(158,($Rd?" $Rd":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($D);$N[]=($Ga?"$Ga AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$Wb->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$p){if(!$Z){$J=$Wb->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($Wb->primary=>"");}if($L){foreach($L
as$y=>$X){if(!$Z)$L[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Wb->primary),"auto_increment"=>($y==$Wb->primary));}}}edit_form($a,$p,$L,$Kh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$lf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$lf[$y]=$y;$Uf=referencable_primary($a);$Oc=array();foreach($Uf
as$Tg=>$o)$Oc[str_replace("`","``",$Tg)."`".str_replace("`","``",$o["field"])]=$Tg;$cf=array();$S=array();if($a!=""){$cf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$L=$_POST;$L["fields"]=(array)$L["fields"];if($L["auto_increment_col"])$L["fields"][$L["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($L["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(159),drop_tables(array($a)));else{$p=array();$Da=array();$Oh=false;$Mc=array();ksort($L["fields"]);$bf=reset($cf);$Aa=" FIRST";foreach($L["fields"]as$y=>$o){$q=$Oc[$o["type"]];$Ah=($q!==null?$Uf[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$L["auto_increment_col"])$o["auto_increment"]=true;$If=process_field($o,$Ah);$Da[]=array($o["orig"],$If,$Aa);if($If!=process_field($bf,$bf)){$p[]=array($o["orig"],$If,$Aa);if($o["orig"]!=""||$Aa)$Oh=true;}if($q!==null)$Mc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Oc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Ah["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Oh=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$bf=next($cf);if(!$bf)$Aa="";}}$nf="";if($lf[$L["partition_by"]]){$of=array();if($L["partition_by"]=='RANGE'||$L["partition_by"]=='LIST'){foreach(array_filter($L["partition_names"])as$y=>$X){$Y=$L["partition_values"][$y];$of[]="\n  PARTITION ".idf_escape($X)." VALUES ".($L["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$nf.="\nPARTITION BY $L[partition_by]($L[partition])".($of?" (".implode(",",$of)."\n)":($L["partitions"]?" PARTITIONS ".(+$L["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$nf.="\nREMOVE PARTITIONING";$le=lang(160);if($a==""){cookie("adminer_engine",$L["Engine"]);$le=lang(161);}$D=trim($L["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$le,alter_table($a,$D,($x=="sqlite"&&($Oh||$Mc)?$Da:$p),$Mc,($L["Comment"]!=$S["Comment"]?$L["Comment"]:null),($L["Engine"]&&$L["Engine"]!=$S["Engine"]?$L["Engine"]:""),($L["Collation"]&&$L["Collation"]!=$S["Collation"]?$L["Collation"]:""),($L["Auto_increment"]!=""?number($L["Auto_increment"]):""),$nf));}}page_header(($a!=""?lang(42):lang(67)),$n,array("table"=>$a),h($a));if(!$_POST){$L=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Ch["int"])?"int":(isset($Ch["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$L=$S;$L["name"]=$a;$L["fields"]=array();if(!$_GET["auto_increment"])$L["Auto_increment"]="";foreach($cf
as$o){$o["has_default"]=isset($o["default"]);$L["fields"][]=$o;}if(support("partitioning")){$Tc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$J=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Tc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($L["partition_by"],$L["partitions"],$L["partition"])=$J->fetch_row();$of=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Tc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$of[""]="";$L["partition_names"]=array_keys($of);$L["partition_values"]=array_values($of);}}}$nb=collations();$oc=engines();foreach($oc
as$nc){if(!strcasecmp($nc,$L["Engine"])){$L["Engine"]=$nc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(162),': <input name="name" maxlength="64" value="',h($L["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($oc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(163).")")+$oc,$L["Engine"])."</select>":""),' ',($nb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(88).")")+$nb,$L["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$sb=($_POST?$_POST["comments"]:$L["Comment"]!="");if(!$_POST&&!$sb){foreach($L["fields"]as$o){if($o["comment"]!=""){$sb=true;break;}}}edit_fields($L["fields"],$nb,"TABLE",$Oc,$sb);echo'</table>
<p>
',lang(57),': <input type="number" name="Auto_increment" size="6" value="',h($L["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(164),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($sb?" checked":"").">".lang(97)."</label>".' <input name="Comment" id="Comment" value="'.h($L["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($sb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}if(support("partitioning")){$mf=preg_match('~RANGE|LIST~',$L["partition_by"]);print_fieldset("partition",lang(165),$L["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$lf,$L["partition_by"])."</select>",'(<input name="partition" value="',h($L["partition"]),'">)
',lang(166),': <input type="number" name="partitions" class="size',($mf||!$L["partition_by"]?" hidden":""),'" value="',h($L["partitions"]),'">
<table cellspacing="0" id="partition-table"',($mf?"":" class='hidden'"),'>
<thead><tr><th>',lang(167),'<th>',lang(168),'</thead>
';foreach($L["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($L["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($L["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$od=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($h->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$od[]="FULLTEXT";$w=indexes($a);$Bf=array();if($x=="mongo"){$Bf=$w["_id_"];unset($od[0]);unset($w["_id_"]);}$L=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($L["indexes"]as$v){$D=$v["name"];if(in_array($v["type"],$od)){$f=array();$Wd=array();$Pb=array();$P=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$e){if($e!=""){$z=$v["lengths"][$y];$Ob=$v["descs"][$y];$P[]=idf_escape($e).($z?"(".(+$z).")":"").($Ob?" DESC":"");$f[]=$e;$Wd[]=($z?$z:null);$Pb[]=$Ob;}}if($f){$xc=$w[$D];if($xc){ksort($xc["columns"]);ksort($xc["lengths"]);ksort($xc["descs"]);if($v["type"]==$xc["type"]&&array_values($xc["columns"])===$f&&(!$xc["lengths"]||array_values($xc["lengths"])===$Wd)&&array_values($xc["descs"])===$Pb){unset($w[$D]);continue;}}$c[]=array($v["type"],$D,$P);}}}foreach($w
as$D=>$xc)$c[]=array($xc["type"],$D,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(169),alter_indexes($a,$c));}page_header(lang(122),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($L["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$L["indexes"][$y]["columns"][]="";}$v=end($L["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$L["indexes"][]=array("columns"=>array(1=>""));}if(!$L){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$L["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(170),'<th><input type="submit" class="wayoff">',lang(171),'<th id="label-name">',lang(172);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.6-dev' alt='+' title='<?php echo
lang(98),'\'></noscript>&nbsp;
</thead>
';if($Bf){echo"<tr><td>PRIMARY<td>";foreach($Bf["columns"]as$y=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".lang(51)."</label> ";}echo"<td><td>\n";}$Ed=1;foreach($L["indexes"]as$v){if(!$_POST["drop_col"]||$Ed!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ed][type]",array(-1=>"")+$od,$v["type"],($Ed==count($L["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$e){echo"<span>".select_input(" name='indexes[$Ed][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(121)."'",($p?array_combine($p,$p):$p),$e),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Ed][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(94)."'>":""),($x!="sql"?checkbox("indexes[$Ed][descs][$s]",1,$v["descs"][$y],lang(51)):"")," </span>";$s++;}echo"<td><input name='indexes[$Ed][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Ed]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.6-dev' alt='x' title='".lang(101)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Ed++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["database"])){$L=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$D=trim($L["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(173),drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),lang(174),rename_database($D,$L["collation"]));}else{$l=explode("\n",str_replace("\r","",$D));$Ng=true;$Qd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$L["collation"]))$Ng=false;$Qd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Qd),lang(175),$Ng);}}else{if(!$L["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$L["collation"])?" COLLATE $L[collation]":""),substr(ME,0,-1),lang(176));}}page_header(DB!=""?lang(60):lang(177),$n,array(),h(DB));$nb=collations();$D=DB;if($_POST)$D=$L["name"];elseif(DB!="")$L["collation"]=db_collation(DB,$nb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$Vc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Vc,$C)&&$C[1]){$D=stripcslashes(idf_unescape("`$C[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" maxlength="64" autocapitalize="off">')."\n".($nb?html_select("collation",array(""=>"(".lang(88).")")+$nb,$L["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(117)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.6-dev' alt='+' title='".lang(98)."'>\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["scheme"])){$L=$_POST;if($_POST&&!$n){$A=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$A,lang(178));else{$D=trim($L["name"]);$A.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$A,lang(179));elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$A,lang(180));else
redirect($A);}}page_header($_GET["ns"]!=""?lang(61):lang(62),$n);if(!$L)$L["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($L["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(117)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(181).": ".h($da),$n);$hg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$md=array();$ff=array();foreach($hg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$ff[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$md[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($hg["fields"]as$y=>$o){if(in_array($y,$md)){$X=process_input($o);if($X===false)$X="''";if(isset($ff[$y]))$h->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($ff[$y])?"@".idf_escape($o["field"]):$X);}$I=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$x'>".h($I)."</code> <a href='".h(ME)."sql=".urlencode($I)."'>".lang(10)."</a>\n";if(!$h->multi_query($I))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$J=$h->store_result();if(is_object($J))select($J,$i);else
echo"<p class='message'>".lang(182,$h->affected_rows)."\n";}while($h->next_result());if($ff)select($h->query("SELECT ".implode(", ",$ff)));}}echo'
<form action="" method="post">
';if($md){echo"<table cellspacing='0'>\n";foreach($md
as$y){$o=$hg["fields"][$y];$D=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$D];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(181),'">
<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$L=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$le=($_POST["drop"]?lang(183):($D!=""?lang(184):lang(185)));$B=ME."table=".urlencode($a);$L["source"]=array_filter($L["source"],'strlen');ksort($L["source"]);$bh=array();foreach($L["source"]as$y=>$X)$bh[$y]=$L["target"][$y];$L["target"]=$bh;if($x=="sqlite")queries_redirect($B,$le,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($L)))));else{$c="ALTER TABLE ".table($a);$Yb="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$Yb,$B,$le);else{query_redirect($c.($D!=""?"$Yb,":"")."\nADD".format_foreign_key($L),$B,$le);$n=lang(186)."<br>$n";}}}page_header(lang(187),$n,array("table"=>$a),h($a));if($_POST){ksort($L["source"]);if($_POST["add"])$L["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$L["target"]=array();}elseif($D!=""){$Oc=foreign_keys($a);$L=$Oc[$D];$L["source"][]="";}else{$L["table"]=$a;$L["source"]=array("");}$Dg=array_keys(fields($a));$bh=($a===$L["table"]?$Dg:array_keys(fields($L["table"])));$Tf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($L["db"]==""&&$L["ns"]==""){echo
lang(188),':
',html_select("table",$Tf,$L["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(189),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(124),'<th id="label-target">',lang(125),'</thead>
';$Ed=0;foreach($L["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Dg,$X,($Ed==count($L["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$bh,$L["target"][$y],1,"label-target");$Ed++;}echo'</table>
<p>
',lang(90),': ',html_select("on_delete",array(-1=>"")+explode("|",$Me),$L["on_delete"]),' ',lang(89),': ',html_select("on_update",array(-1=>"")+explode("|",$Me),$L["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(190),'"></noscript>
';}if($D!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$L=$_POST;if($_POST&&!$n){$D=trim($L["name"]);$Ga=" AS\n$L[select]";$B=ME."table=".urlencode($D);$le=lang(191);if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($x=="pgsql"){$Ig=table_status($D);$U=($Ig?strtoupper($Ig["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$D&&$x!="sqlite"&&$U!="MATERIALIZED VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$Ga,$B,$le);else{$dh=$D."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($D).$Ga,"DROP $U ".table($D),"CREATE $U ".table($dh).$Ga,"DROP $U ".table($dh),($_POST["drop"]?substr(ME,0,-1):$B),lang(192),$le,lang(193),$a,$D);}}if(!$_POST&&$a!=""){$L=view($a);$L["name"]=$a;if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(194)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(172),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$L["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$wd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Jg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$L=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(195));elseif(in_array($L["INTERVAL_FIELD"],$wd)&&isset($Jg[$L["STATUS"]])){$mg="\nON SCHEDULE ".($L["INTERVAL_VALUE"]?"EVERY ".q($L["INTERVAL_VALUE"])." $L[INTERVAL_FIELD]".($L["STARTS"]?" STARTS ".q($L["STARTS"]):"").($L["ENDS"]?" ENDS ".q($L["ENDS"]):""):"AT ".q($L["STARTS"]))." ON COMPLETION".($L["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(196):lang(197)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$mg.($aa!=$L["EVENT_NAME"]?"\nRENAME TO ".idf_escape($L["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($L["EVENT_NAME"]).$mg)."\n".$Jg[$L["STATUS"]]." COMMENT ".q($L["EVENT_COMMENT"]).rtrim(" DO\n$L[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(198).": ".h($aa):lang(199)),$n);if(!$L&&$aa!=""){$M=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$L=reset($M);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(172),'<td><input name="EVENT_NAME" value="',h($L["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(200),'<td><input name="STARTS" value="',h("$L[EXECUTE_AT]$L[STARTS]"),'">
<tr><th title="datetime">',lang(201),'<td><input name="ENDS" value="',h($L["ENDS"]),'">
<tr><th>',lang(202),'<td><input type="number" name="INTERVAL_VALUE" value="',h($L["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$wd,$L["INTERVAL_FIELD"]),'<tr><th>',lang(108),'<td>',html_select("STATUS",$Jg,$L["STATUS"]),'<tr><th>',lang(97),'<td><input name="EVENT_COMMENT" value="',h($L["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$L["ON_COMPLETION"]=="PRESERVE",lang(203)),'</table>
<p>';textarea("EVENT_DEFINITION",$L["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$hg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$L=$_POST;$L["fields"]=(array)$L["fields"];if($_POST&&!process_fields($L["fields"])&&!$n){$dh="$L[name]_adminer_".uniqid();drop_create("DROP $hg ".idf_escape($da),create_routine($hg,$L),"DROP $hg ".idf_escape($L["name"]),create_routine($hg,array("name"=>$dh)+$L),"DROP $hg ".idf_escape($dh),substr(ME,0,-1),lang(204),lang(205),lang(206),$da,$L["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(207):lang(208)).": ".h($da):(isset($_GET["function"])?lang(209):lang(210))),$n);if(!$_POST&&$da!=""){$L=routine($da,$hg);$L["name"]=$da;}$nb=get_vals("SHOW CHARACTER SET");sort($nb);$ig=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(172),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
',($ig?lang(19).": ".html_select("language",$ig,$L["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($L["fields"],$nb,$hg);if(isset($_GET["function"])){echo"<tr><td>".lang(211);edit_type("returns",$L["returns"],$nb);}echo'</table>
<p>';textarea("definition",$L["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$L=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);$D=trim($L["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$A,lang(212));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$A,lang(213));elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$A,lang(214));else
redirect($A);}page_header($fa!=""?lang(215).": ".h($fa):lang(216),$n);if(!$L)$L["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($L["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(117)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$L=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$A,lang(217));else
query_redirect("CREATE TYPE ".idf_escape(trim($L["name"]))." $L[as]",$A,lang(218));}page_header($ga!=""?lang(219).": ".h($ga):lang(220),$n);if(!$L)$L["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(117)."'".confirm().">\n";else{echo"<input name='name' value='".h($L['name'])."' autocapitalize='off'>\n";textarea("as",$L["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$zh=trigger_options();$L=(array)trigger($D)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$zh["Timing"])&&in_array($_POST["Event"],$zh["Event"])&&in_array($_POST["Type"],$zh["Type"])){$Le=" ON ".table($a);$Yb="DROP TRIGGER ".idf_escape($D).($x=="pgsql"?$Le:"");$B=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Yb,$B,lang(221));else{if($D!="")queries($Yb);queries_redirect($B,($D!=""?lang(222):lang(223)),queries(create_trigger($Le,$_POST)));if($D!="")queries(create_trigger($Le,$L+array("Type"=>reset($zh["Type"]))));}}$L=$_POST;}page_header(($D!=""?lang(224).": ".h($D):lang(225)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(226),'<td>',html_select("Timing",$zh["Timing"],$L["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(227),'<td>',html_select("Event",$zh["Event"],$L["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$zh["Event"])?" <input name='Of' value='".h($L["Of"])."' class='hidden'>":""),'<tr><th>',lang(93),'<td>',html_select("Type",$zh["Type"],$L["Type"]),'</table>
<p>',lang(172),': <input name="Trigger" value="',h($L["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$L["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($D!=""){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Gf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$L){foreach(explode(",",($L["Privilege"]=="Grant option"?"":$L["Context"]))as$yb)$Gf[$yb][$L["Privilege"]]=$L["Comment"];}$Gf["Server Admin"]+=$Gf["File access on server"];$Gf["Databases"]["Create routine"]=$Gf["Procedures"]["Create routine"];unset($Gf["Procedures"]["Create routine"]);$Gf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Gf["Columns"][$X]=$Gf["Tables"][$X];unset($Gf["Server Admin"]["Usage"]);foreach($Gf["Tables"]as$y=>$X)unset($Gf["Databases"][$y]);$ye=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$ye[$X]=(array)$ye[$X]+(array)$_POST["grants"][$y];}$Wc=array();$Je="";if(isset($_GET["host"])&&($J=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($L=$J->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$L[0],$C)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$C[1],$de,PREG_SET_ORDER)){foreach($de
as$X){if($X[1]!="USAGE")$Wc["$C[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$L[0]))$Wc["$C[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$L[0],$C))$Je=$C[1];}}if($_POST&&!$n){$Ke=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ke",ME."privileges=",lang(228));else{$_e=q($_POST["user"])."@".q($_POST["host"]);$pf=$_POST["pass"];if($pf!=''&&!$_POST["hashed"]){$pf=$h->result("SELECT PASSWORD(".q($pf).")");$n=!$pf;}$Cb=false;if(!$n){if($Ke!=$_e){$Cb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $_e IDENTIFIED BY PASSWORD ".q($pf));$n=!$Cb;}elseif($pf!=$Je)queries("SET PASSWORD FOR $_e = ".q($pf));}if(!$n){$eg=array();foreach($ye
as$Ee=>$Vc){if(isset($_GET["grant"]))$Vc=array_filter($Vc);$Vc=array_keys($Vc);if(isset($_GET["grant"]))$eg=array_diff(array_keys(array_filter($ye[$Ee],'strlen')),$Vc);elseif($Ke==$_e){$He=array_keys((array)$Wc[$Ee]);$eg=array_diff($He,$Vc);$Vc=array_diff($Vc,$He);unset($Wc[$Ee]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ee,$C)&&(!grant("REVOKE",$eg,$C[2]," ON $C[1] FROM $_e")||!grant("GRANT",$Vc,$C[2]," ON $C[1] TO $_e"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ke!=$_e)queries("DROP USER $Ke");elseif(!isset($_GET["grant"])){foreach($Wc
as$Ee=>$eg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ee,$C))grant("REVOKE",array_keys($eg),$C[2]," ON $C[1] FROM $_e");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(229):lang(230)),!$n);if($Cb)$h->query("DROP USER $_e");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(136)),$n,array("privileges"=>array('',lang(64))));if($_POST){$L=$_POST;$Wc=$ye;}else{$L=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$L["pass"]=$Je;if($Je!="")$L["hashed"]=true;$Wc[(DB==""||$Wc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($L["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($L["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($L["pass"]),'">
';if(!$L["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$L["hashed"],lang(231),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(64).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Wc
as$Ee=>$Vc){echo'<th>'.($Ee!="*.*"?"<input name='objects[$s]' value='".h($Ee)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(120),"Columns"=>lang(121),"Procedures"=>lang(232),)as$yb=>$Ob){foreach((array)$Gf[$yb]as$Ff=>$rb){echo"<tr".odd()."><td".($Ob?">$Ob<td":" colspan='2'").' lang="en" title="'.h($rb).'">'.h($Ff);$s=0;foreach($Wc
as$Ee=>$Vc){$D="'grants[$s][".h(strtoupper($Ff))."]'";$Y=$Vc[strtoupper($Ff)];if($yb=="Server Admin"&&$Ee!=(isset($Wc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".lang(233)."<option value='0'".($Y=="0"?" selected":"").">".lang(234)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$D value='1'".($Y?" checked":"").($Ff=="All privileges"?" id='grants-$s-all'":($Ff=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(117),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Ld=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Ld++;}queries_redirect(ME."processlist=",lang(235,$Ld),$Ld||!$_POST["kill"]);}page_header(lang(106),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$L){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($L
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$L[$x=="sql"?"Id":"pid"],0):"");foreach($L
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$L["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($L["db"]!=""?"db=".urlencode($L["db"])."&":"")."sql=".urlencode($X)).'">'.lang(236).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(237,max_connections()),"<p><input type='submit' value='".lang(238)."'>\n";}echo'<input type="hidden" name="token" value="',$rh,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Oc=column_foreign_keys($a);$Ge="";if($S["Oid"]){$Ge=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ge));}parse_str($_COOKIE["adminer_import"],$ya);$fg=array();$f=array();$hh=null;foreach($p
as$y=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$y]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$hh=$b->selectLengthProcess();}$fg+=$o["privileges"];}list($N,$Xc)=$b->selectColumnsProcess($f,$w);$_d=count($Xc)<count($N);$Z=$b->selectSearchProcess($p,$w);$We=$b->selectOrderProcess($p,$w);$_=$b->selectLimitProcess();$Tc=($N?implode(", ",$N):"*".($Ge?", $Ge":"")).convert_fields($f,$p,$N)."\nFROM ".table($a);$Yc=($Xc&&$_d?"\nGROUP BY ".implode(", ",$Xc):"").($We?"\nORDER BY ".implode(", ",$We):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Gh=>$L){$Ga=convert_field($p[key($L)]);$N=array($Ga?$Ga:idf_escape(key($L)));$Z[]=where_check($Gh,$p);$K=$Wb->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$n){$di=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$di[]="((".implode(") OR (",$eb)."))";}$di=($di?"\nWHERE ".implode(" AND ",$di):"");$Bf=$Ih=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Bf=array_flip($v["columns"]);$Ih=($N?$Bf:array());break;}}foreach((array)$Ih
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Ih[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Ih===array())$I="SELECT $Tc$di$Yc";else{$Eh=array();foreach($_POST["check"]as$X)$Eh[]="(SELECT".limit($Tc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Yc,1).")";$I=implode(" UNION ALL ",$Eh);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$Oc)){if($_POST["save"]||$_POST["delete"]){$J=true;$za=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Ih===array()&&is_array($_POST["check"]))||$_d){$J=($_POST["delete"]?$Wb->delete($a,$di):($_POST["clone"]?queries("INSERT $I$di"):$Wb->update($a,$P,$di)));$za=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ci="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$J=($_POST["delete"]?$Wb->delete($a,$ci,1):($_POST["clone"]?queries("INSERT".limit1($I,$ci)):$Wb->update($a,$P,$ci)));if(!$J)break;$za+=$h->affected_rows;}}}$le=lang(239,$za);if($_POST["clone"]&&$J&&$za==1){$Rd=last_id();if($Rd)$le=lang(158," $Rd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$le,$J);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(240);else{$J=true;$za=0;foreach($_POST["val"]as$Gh=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$J=$Wb->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Gh,$p),!($_d||$Ih===array())," ");if(!$J)break;$za+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(239,$za),$J);}}elseif(!is_string($Hc=get_file("csv_file",true)))$n=upload_error($Hc);elseif(!preg_match('~~u',$Hc))$n=lang(241);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$J=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Hc,$de);$za=count($de[0]);$Wb->begin();$ug=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($de[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$ug]*)$ug~",$X.$ug,$ee);if(!$y&&!array_diff($ee[1],$ob)){$ob=$ee[1];$za--;}else{$P=array();foreach($ee[1]as$s=>$lb)$P[idf_escape($ob[$s])]=($lb==""&&$p[$ob[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$M[]=$P;}}$J=(!$M||$Wb->insertUpdate($a,$M,$Bf));if($J)$Wb->commit();queries_redirect(remove_from_uri("page"),lang(242,$za),$J);$Wb->rollback();}}}$Tg=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(45).": $Tg",$n);$P=null;if(isset($fg["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($Oc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".lang(243).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($We,$f,$w);$b->selectLimitPrint($_);$b->selectLengthPrint($hh);$b->selectActionPrint($w);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Rc=$h->result(count_rows($a,$Z,$_d,$Xc));$F=floor(max(0,$Rc-1)/$_);}$rg=$N;if(!$rg){$rg[]="*";if($Ge)$rg[]=$Ge;}$zb=convert_fields($f,$p,$N);if($zb)$rg[]=substr($zb,2);$J=$Wb->select($a,$rg,$Z,$Xc,$We,$_,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($_*$F);$lc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$_&&$Xc&&$_d&&$x=="sql")$Rc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$Tg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Xc&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(244)."</a>");$xe=array();$Uc=array();reset($N);$Pf=1;foreach($M[0]as$y=>$X){if($y!=$Ge){$X=$_GET["columns"][key($N)];$o=$p[$N?($X?$X["col"]:current($N)):$y];$D=($o?$b->fieldName($o,$Pf):($X["fun"]?"*":$y));if($D!=""){$Pf++;$xe[$y]=$D;$e=idf_escape($y);$id=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ob="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($id.($We[0]==$e||$We[0]==$y||(!$We&&$_d&&$Xc[0]==$e)?$Ob:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($id.$Ob)."' title='".lang(51)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(48).'" class="text jsonly"> =</a>';echo"</span>";}$Uc[$y]=$X["fun"];next($N);}}$Wd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$Wd[$y]=max($Wd[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(245):"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Oc)as$we=>$L){$Fh=unique_array($M[$we],$w);if(!$Fh){$Fh=array();foreach($M[$we]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Fh[$y]=$X;}}$Gh="";foreach($Fh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($h).")").")";$X=md5($X);}$Gh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$Xc&&$N?"":"<td>".checkbox("check[]",substr($Gh,1),in_array(substr($Gh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($_d||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Gh)."'>".lang(246)."</a>"));foreach($L
as$y=>$X){if(isset($xe[$y])){$o=$p[$y];if($X!=""&&(!isset($lc[$y])||$lc[$y]!=""))$lc[$y]=(is_mail($X)?$xe[$y]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($y).$Gh;if(!$A&&$X!==null){foreach((array)$Oc[$y]as$q){if(count($Oc[$y])==1||end($q["source"])==$y){$A="";foreach($q["source"]as$s=>$Dg)$A.=where_link($s,$q["target"][$s],$M[$we][$Dg]);$A=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$A;if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$A=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Fh))$A.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Fh
as$Fd=>$W)$A.=where_link($s++,$Fd,$W);}$X=select_value($X,$A,$o,$hh);$t=h("val[$Gh][".bracket_escape($y)."]");$Y=$_POST["val"][$Gh][bracket_escape($y)];$gc=!is_array($L[$y])&&is_utf8($X)&&$M[$we][$y]==$L[$y]&&!$Uc[$y];$gh=preg_match('~text|lob|json~',$o["type"]);if(($_GET["modify"]&&$gc)||$Y!==null){$ad=h($Y!==null?$Y:$L[$y]);echo"<td>".($gh?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$ad</textarea>":"<input name='$t' value='$ad' size='$Wd[$y]'>");}else{$ae=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ae?2:($gh?1:0)).($gc?"":", '".h(lang(247))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$M[$we]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$vc=true;if($_GET["page"]!="last"){if(!+$_)$Rc=count($M);elseif($x!="sql"||!$_d){$Rc=($_d?false:found_rows($S,$Z));if($Rc<max(1e4,2*($F+1)*$_))$Rc=reset(slow_query(count_rows($a,$Z,$_d,$Xc)));else$vc=false;}}if(+$_&&($Rc===false||$Rc>$_||$F)){echo"<p class='pages'>";$ge=($Rc===false?$F+(count($M)>=$_?2:1):floor(($Rc-1)/$_));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(248)."', '".($F+1)."'), event); return false;\">".lang(248)."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($ge,$F+5);$s++)echo
pagination($s,$F);if($ge>0){echo($F+5<$ge?" ...":""),($vc&&$Rc!==false?pagination($ge,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ge'>".lang(249)."</a>");}echo(($Rc===false?count($M)+1:$Rc-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$_).', \''.lang(250).'...\');" class="loadmore">'.lang(251).'</a>':'');}else{echo
lang(248).":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($ge>$F?pagination($F+1,$F).($ge>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($Rc!==false?"(".($vc?"":"~ ").lang(140,$Rc).") ":"");$Tb=($vc?"":"~ ").$Rc;echo
checkbox("all",1,0,lang(252),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Tb' : checked); selectCount('selected2', this.checked || !checked ? '$Tb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(244),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(240).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(116),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(236),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Pc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Pc['sql']);break;}}if($Pc){print_fieldset("export",lang(66)." <span id='selected2'></span>");$gf=$b->dumpOutput();echo($gf?html_select("output",$gf,$ya["output"])." ":""),html_select("format",$Pc,$ya["format"])," <input type='submit' name='export' value='".lang(66)."'>\n","</div></fieldset>\n";}echo(!$Xc&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(65),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(65)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$rh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Ig=isset($_GET["status"]);page_header($Ig?lang(108):lang(107));$Vh=($Ig?show_status():show_variables());if(!$Vh)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Vh
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($Ig?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Qg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$S){json_row("Comment-$D",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$D",nbsp($S[$y]));foreach($Qg+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$D",($y=="Rows"&&$X&&$S["Engine"]==($Fg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Qg[$y]))$Qg[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$D");}}}foreach($Qg
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Zg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Zg&&!$n&&!$_POST["search"]){$J=true;$le="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$J=truncate_tables($_POST["tables"]);$le=lang(253);}elseif($_POST["move"]){$J=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(254);}elseif($_POST["copy"]){$J=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(255);}elseif($_POST["drop"]){if($_POST["views"])$J=drop_views($_POST["views"]);if($J&&$_POST["tables"])$J=drop_tables($_POST["tables"]);$le=lang(256);}elseif($x!="sql"){$J=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$le=lang(257);}elseif(!$_POST["tables"])$le=lang(9);elseif($J=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($L=$J->fetch_assoc())$le.="<b>".h($L["Table"])."</b>: ".h($L["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$le,$J);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(69).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(258)."</h3>\n";$Yg=tables_list();if(!$Yg)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(259)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(48)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Ub=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.lang(120),'<td>'.lang(260).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(112).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(261).$Ub,'<td>'.lang(262).$Ub,'<td>'.lang(263).$Ub,'<td>'.lang(57).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(264).$Ub,(support("comment")?'<td>'.lang(97).$Ub:''),"</thead>\n";$T=0;foreach($Yg
as$D=>$U){$Yh=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$D);echo'<tr'.odd().'><td>'.checkbox(($Yh?"views[]":"tables[]"),$D,in_array($D,$Zg,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($D)."' title='".lang(40)."' id='$t'>".h($D).'</a>':h($D));if($Yh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(265):lang(119)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(123)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$A){$t=" id='$y-".h($D)."'";echo($A?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$A[0]=").urlencode($D)."'$t title='$A[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($D)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($D)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(237,count($Yg)),"<td>".nbsp($x=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Sh="<input type='submit' value='".lang(266)."'".on_help("'VACUUM'")."> ";$Se="<input type='submit' name='optimize' value='".lang(267)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(116)." <span id='selected'></span></legend><div>".($x=="sqlite"?$Sh:($x=="pgsql"?$Sh.$Se:($x=="sql"?"<input type='submit' value='".lang(268)."'".on_help("'ANALYZE TABLE'")."> ".$Se."<input type='submit' name='check' value='".lang(269)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(270)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(271)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(117)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(272).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(273)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(274)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$rh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(67)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(194)."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.lang(275)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(133)."</h3>\n";$jg=routines();if($jg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(172).'<td>'.lang(93).'<td>'.lang(211)."<td>&nbsp;</thead>\n";odd('');foreach($jg
as$L){echo'<tr'.odd().'>','<th><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($L["ROUTINE_NAME"]).'">'.h($L["ROUTINE_NAME"]).'</a>','<td>'.h($L["ROUTINE_TYPE"]),'<td>'.h($L["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($L["ROUTINE_NAME"]).'">'.lang(126)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(210).'</a>':'').'<a href="'.h(ME).'function=">'.lang(209)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(276)."</h3>\n";$vg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($vg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."</thead>\n";odd('');foreach($vg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(216)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$Qh=types();if($Qh){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."</thead>\n";odd('');foreach($Qh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(220)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(134)."</h3>\n";$M=get_rows("SHOW EVENTS");if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."<td>".lang(277)."<td>".lang(200)."<td>".lang(201)."<td></thead>\n";foreach($M
as$L){echo"<tr>","<th>".h($L["Name"]),"<td>".($L["Execute at"]?lang(278)."<td>".$L["Execute at"]:lang(202)." ".$L["Interval value"]." ".$L["Interval field"]."<td>$L[Starts]"),"<td>$L[Ends]",'<td><a href="'.h(ME).'event='.urlencode($L["Name"]).'">'.lang(126).'</a>';}echo"</table>\n";$tc=$h->result("SELECT @@event_scheduler");if($tc&&$tc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($tc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(199)."</a>\n";}if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();
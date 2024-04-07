<?php

$text = isset($_GET["text"]) ? $_GET["text"] : "Ehsan";

$alphabet = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
$fonts = [
    "ⓐ,ⓑ,ⓒ,ⓓ,ⓔ,ⓕ,ⓖ,ⓗ,ⓘ,ⓙ,ⓚ,ⓛ,ⓜ,ⓝ,ⓞ,ⓟ,ⓠ,ⓡ,ⓢ,ⓣ,ⓤ,ⓥ,ⓦ,ⓧ,ⓨ,ⓩ,Ⓐ,Ⓑ,Ⓒ,Ⓓ,Ⓔ,Ⓕ,Ⓖ,Ⓗ,Ⓘ,Ⓙ,Ⓚ,Ⓛ,Ⓜ,Ⓝ,Ⓞ,Ⓟ,Ⓠ,Ⓡ,Ⓢ,Ⓣ,Ⓤ,Ⓥ,Ⓦ,Ⓧ,Ⓨ,Ⓩ",
    "🅐,🅑,🅒,🅓,🅔,🅕,🅖,🅗,🅘,🅙,🅚,🅛,🅜,🅝,🅞,🅟,🅠,🅡,🅢,🅣,🅤,🅥,🅦,🅧,🅨,🅩,🅐,🅑,🅒,🅓,🅔,🅕,🅖,🅗,🅘,🅙,🅚,🅛,🅜,🅝,🅞,🅟,🅠,🅡,🅢,🅣,🅤,🅥,🅦,🅧,🅨,🅩",
    "🄰,🄱,🄲,🄳,🄴,🄵,🄶,🄷,🄸,🄹,🄺,🄻,🄼,🄽,🄾,🄿,🅀,🅁,🅂,🅃,🅄,🅅,🅆,🅇,🅈,🅉,🄰,🄱,🄲,🄳,🄴,🄵,🄶,🄷,🄸,🄹,🄺,🄻,🄼,🄽,🄾,🄿,🅀,🅁,🅂,🅃,🅄,🅅,🅆,🅇,🅈,🅉",
    "𝚊,𝚋,𝚌,𝚍,𝚎,𝚏,𝚐,𝚑,𝚒,𝚓,𝚔,𝚕,𝚖,𝚗,𝚘,𝚙,𝚚,𝚛,𝚜,𝚝,𝚞,𝚟,𝚠,𝚡,𝚢,𝚣,𝙰,𝙱,𝙲,𝙳,𝙴,𝙵,𝙶,𝙷,𝙸,𝙹,𝙺,𝙻,𝙼,𝙽,𝙾,𝙿,𝚀,𝚁,𝚂,𝚃,𝚄,𝚅,𝚆,𝚇,𝚈,𝚉",
    "𝐚,𝐛,𝐜,𝐝,𝐞,𝐟,𝐠,𝐡,𝐢,𝐣,𝐤,𝐥,𝐦,𝐧,𝐨,𝐩,𝐪,𝐫,𝐬,𝐭,𝐮,𝐯,𝐰,𝐱,𝐲,𝐳,𝐀,𝐁,𝐂,𝐃,𝐄,𝐅,𝐆,𝐇,𝐈,𝐉,𝐊,𝐋,𝐌,𝐍,𝐎,𝐏,𝐐,𝐑,𝐒,𝐓,𝐔,𝐕,𝐖,𝐗,𝐘,𝐙",
    "ᗩ,ᗷ,ᑕ,ᗪ,E,ᖴ,G,ᕼ,I,ᒍ,K,ᒪ,ᗰ,ᑎ,O,ᑭ,ᑫ,ᖇ,ᔕ,T,ᑌ,ᐯ,ᗯ,᙭,Y,ᘔ,ᗩ,ᗷ,ᑕ,ᗪ,E,ᖴ,G,ᕼ,I,ᒍ,K,ᒪ,ᗰ,ᑎ,O,ᑭ,ᑫ,ᖇ,ᔕ,T,ᑌ,ᐯ,ᗯ,᙭,Y,ᘔ",
    "𝒂,𝒃,𝒄,𝒅,𝒆,𝒇,𝒈,𝒉,𝒊,𝒋,𝒌,𝒍,𝒎,𝒏,𝒐,𝒑,𝒒,𝒓,𝒔,𝒕,𝒖,𝒗,𝒘,𝒙,𝒚,𝒛,𝑨,𝑩,𝑪,𝑫,𝑬,𝑭,𝑮,𝑯,𝑰,𝑱,𝑲,𝑳,𝑴,𝑵,𝑶,𝑷,𝑸,𝑹,𝑺,𝑻,𝑼,𝑽,𝑾,𝑿,𝒀,𝒁",
    "卂,乃,匚,ᗪ,乇,千,ꮆ,卄,丨,ﾌ,ҝ,ㄥ,爪,几,ㄖ,卩,디,尺,丂,丁,ㄩ,ᐯ,山,乂,ㄚ,乙,卂,乃,匚,ᗪ,乇,千,Ꮆ,卄,丨,ﾌ,Ҝ,ㄥ,爪,几,ㄖ,卩,디,尺,丂,丁,ㄩ,ᐯ,山,乂,ㄚ,乙",
    "𝚊,𝚋,𝚌,𝚍,𝚎,𝚏,𝚐,𝚑,𝚒,𝚓,𝚔,𝚕,𝚖,𝚗,𝚘,𝚙,𝚚,𝚛,𝚜,𝚝,𝚞,𝚟,𝚠,𝚡,𝚢,𝚣,𝙰,𝙱,𝙲,𝙳,𝙴,𝙵,𝙶,𝙷,𝙸,𝙹,𝙺,𝙻,𝙼,𝙽,𝙾,𝙿,𝚀,𝚁,𝚂,𝚃,𝚄,𝚅,𝚆,𝚇,𝚈,𝚉",
    "𝐚,𝐛,𝐜,𝐝,𝐞,𝐟,𝐠,𝐡,𝐢,𝐣,𝐤,𝐥,𝐦,𝐧,𝐨,𝐩,𝐪,𝐫,𝐬,𝐭,𝐮,𝐯,𝐰,𝐱,𝐲,𝐳,𝐀,𝐁,𝐂,𝐃,𝐄,𝐅,𝐆,𝐇,𝐈,𝐉,𝐊,𝐋,𝐌,𝐍,𝐎,𝐏,𝐐,𝐑,𝐒,𝐓,𝐔,𝐕,𝐖,𝐗,𝐘,𝐙",
    "𝓪,𝓫,𝓬,𝓭,𝓮,𝓯,𝓰,𝓱,𝓲,𝓳,𝓴,𝓵,𝓶,𝓷,𝓸,𝓹,𝓺,𝓻,𝓼,𝓽,𝓾,𝓿,𝔀,𝔁,𝔂,𝔃,𝓐,𝓑,𝓒,𝓓,𝓔,𝓕,𝓖,𝓗,𝓘,𝓙,𝓚,𝓛,𝓜,𝓝,𝓞,𝓟,𝓠,𝓡,𝓢,𝓣,𝓤,𝓥,𝓦,𝓧,𝓨,𝓩",
    "𝕒,𝕓,𝕔,𝕕,𝕖,𝕗,𝕘,𝕙,𝕚,𝕛,𝕜,𝕝,𝕞,𝕟,𝕠,𝕡,𝕢,𝕣,𝕤,𝕥,𝕦,𝕧,𝕨,𝕩,𝕪,𝕫,𝔸,𝔹,ℂ,𝔻,𝔼,𝔽,𝔾,ℍ,𝕀,𝕁,𝕂,𝕃,𝕄,ℕ,𝕆,ℙ,ℚ,ℝ,𝕊,𝕋,𝕌,𝕍,𝕎,𝕏,𝕐,ℤ",
    "𝔞,𝔟,𝔠,𝔡,𝔢,𝔣,𝔤,𝔥,𝔦,𝔧,𝔨,𝔩,𝔪,𝔫,𝔬,𝔭,𝔮,𝔯,𝔰,𝔱,𝔲,𝔳,𝔴,𝔵,𝔶,𝔷,𝔄,𝔅,ℭ,𝔇,𝔈,𝔉,𝔊,ℌ,ℑ,𝔍,𝔎,𝔏,𝔐,𝔑,𝔒,𝔓,𝔔,ℜ,𝔖,𝔗,𝔘,𝔙,𝔚,𝔛,𝔜,ℨ",
    "𝖆,𝖇,𝖈,𝖉,𝖊,𝖋,𝖌,𝖍,𝖎,𝖏,𝖐,𝖑,𝖒,𝖓,𝖔,𝖕,𝖖,𝖗,𝖘,𝖙,𝖚,𝖛,𝖜,𝖝,𝖞,𝖟,𝕬,𝕭,𝕮,𝕯,𝕰,𝕱,𝕲,𝕳,𝕴,𝕵,𝕶,𝕷,𝕸,𝕹,𝕺,𝕻,𝕼,𝕽,𝕾,𝕿,𝖀,𝖁,𝖂,𝖃,𝖄,𝖅",
    "𝐚,𝐛,𝐜,𝐝,𝐞,𝐟,𝐠,𝐡,𝐢,𝐣,𝐤,𝐥,𝐦,𝐧,𝐨,𝐩,𝐪,𝐫,𝐬,𝐭,𝐮,𝐯,𝐰,𝐱,𝐲,𝐳,𝐀,𝐁,𝐂,𝐃,𝐄,𝐅,𝐆,𝐇,𝐈,𝐉,𝐊,𝐋,𝐌,𝐍,𝐎,𝐏,𝐐,𝐑,𝐒,𝐓,𝐔,𝐕,𝐖,𝐗,𝐘,𝐙",
    "𝗮,𝗯,𝗰,𝗱,𝗲,𝗳,𝗴,𝗵,𝗶,𝗷,𝗸,𝗹,𝗺,𝗻,𝗼,𝗽,𝗾,𝗿,𝘀,𝘁,𝘂,𝘃,𝘄,𝘅,𝘆,𝘇,𝗔,𝗕,𝗖,𝗗,𝗘,𝗙,𝗚,𝗛,𝗜,𝗝,𝗞,𝗟,𝗠,𝗡,𝗢,𝗣,𝗤,𝗥,𝗦,𝗧,𝗨,𝗩,𝗪,𝗫,𝗬,𝗭",
    "λ,ß,ƈ,đ,ë,ƒ,ǥ,ħ,ï,j,ƙ,ł,м,ŋ,ø,ρ,q,Я,ƨ,ŧ,ų,v,ш,х,¥,ƺ,Λ,ß,Ƈ,Ð,Ë,Ғ,Ɠ,Ħ,Ï,J,Ҡ,Ł,₥,Ŋ,Ø,P,Ǫ,Я,Ƨ,ŧ,ų,V,Щ,Ж,Ϋ,Z",
    "ค,๒,ƈ,๔,ę,ᵮ,ʛ,ħ,เ,ʝ,ƙ,ɭ,๓,ภ,๏,ƥ,ɋ,ᴦ,ร,ŧ,ย,ש,ฬ,א,ץ,ƶ,ค,๒,ƈ,๔,ę,ᵮ,ʛ,ħ,เ,ʝ,ƙ,ɭ,๓,ภ,๏,ƥ,ɋ,ᴦ,ร,ŧ,ย,ש,ฬ,א,ץ,ƶ",
    "🅰,🅱,🅲,🅳,🅴,🅵,🅶,🅷,🅸,🅹,🅺,🅻,🅼,🅽,🅾,🅿,🆀,🆁,🆂,🆃,🆄,🆅,🆆,🆇,🆈,🆉,🅰,🅱,🅲,🅳,🅴,🅵,🅶,🅷,🅸,🅹,🅺,🅻,🅼,🅽,🅾,🅿,🆀,🆁,🆂,🆃,🆄,🆅,🆆,🆇,🆈,🆉",
    "🅰️,🅱️,🌊,↩️,📧,🏳️,🌀,🔀,ℹ️,🌴,🎋,💪,ⓜ️,⚡️,🍩,🅿️,🍳,®️,💲,🍄,🌙,✌️,🌵,❌,🎉,💤,🅰️,🅱️,🌊,↩️,📧,🏳️,🌀,🔀,ℹ️,🌴,🎋,💪,Ⓜ️,⚡️,🍩,🅿️,🍳,®️,💲,🍄,🌙,✌️,🌵,❌,🎉,💤",
    "ａ,ｂ,ｃ,ｄ,ｅ,ｆ,ｇ,ｈ,ｉ,ｊ,ｋ,ｌ,ｍ,ｎ,ｏ,ｐ,ｑ,ｒ,ｓ,ｔ,ｕ,ｖ,ｗ,ｘ,ｙ,ｚ,Ａ,Ｂ,Ｃ,Ｄ,Ｅ,Ｆ,Ｇ,Ｈ,Ｉ,Ｊ,Ｋ,Ｌ,Ｍ,Ｎ,Ｏ,Ｐ,Ｑ,Ｒ,Ｓ,Ｔ,Ｕ,Ｖ,Ｗ,Ｘ,Ｙ,Ｚ",
    "⒜,⒝,⒞,⒟,⒠,⒡,⒢,⒣,⒤,⒥,⒦,⒧,⒨,⒩,⒪,⒫,⒬,⒭,⒮,⒯,⒰,⒱,⒲,⒳,⒴,⒵,🄐,🄑,🄒,🄓,🄔,🄕,🄖,🄗,🄘,🄙,🄚,🄛,🄜,🄝,🄞,🄟,🄠,🄡,🄢,🄣,🄤,🄥,🄦,🄧,🄨,🄩",
    "ᴀ,ʙ,ᴄ,ᴅ,ᴇ,ꜰ,ɢ,ʜ,ɪ,ᴊ,ᴋ,ʟ,ᴍ,ɴ,ᴏ,ᴘ,Q,ʀ,ꜱ,ᴛ,ᴜ,ᴠ,ᴡ,x,ʏ,ᴢ,ᴀ,ʙ,ᴄ,ᴅ,ᴇ,ꜰ,ɢ,ʜ,ɪ,ᴊ,ᴋ,ʟ,ᴍ,ɴ,ᴏ,ᴘ,Q,ʀ,ꜱ,ᴛ,ᴜ,ᴠ,ᴡ,x,ʏ,ᴢ",
    "ɐ,q,ɔ,p,ǝ,ɟ,ɓ,ɥ,ᴉ,ſ,ʞ,l,ɯ,u,o,d,b,ɹ,s,ʇ,n,ʌ,ʍ,x,ʎ,z,Ɐ,ᗺ,Ɔ,ᗡ,Ǝ,Ⅎ,⅁,H,I,ᒋ,ꓘ,⅂,ꟽ,N,O,Ԁ,ტ,ᴚ,S,Ʇ,Ո,Λ,M,X,⅄,Z",
    "ᵃ,ᵇ,ᶜ,ᵈ,ᵉ,ᶠ,ᵍ,ʰ,ⁱ,ʲ,ᵏ,ˡ,ᵐ,ⁿ,ᵒ,ᵖ,q,ʳ,ˢ,ᵗ,ᵘ,ᵛ,ʷ,ˣ,ʸ,ᶻ,ᴬ,ᴮ,ᶜ,ᴰ,ᴱ,ᶠ,ᴳ,ᴴ,ᴵ,ᴶ,ᴷ,ᴸ,ᴹ,ᴺ,ᴼ,ᴾ,Q,ᴿ,ˢ,ᵀ,ᵁ,ⱽ,ᵂ,ˣ,ʸ,ᶻ",
    "ﾑ,乃,ᄃ,り,乇,ｷ,ム,ん,ﾉ,ﾌ,ズ,ﾚ,ﾶ,刀,の,ｱ,ゐ,尺,丂,ｲ,ひ,√,W,ﾒ,ﾘ,乙,ﾑ,乃,ᄃ,り,乇,ｷ,ム,ん,ﾉ,ﾌ,ズ,ﾚ,ﾶ,刀,の,ｱ,ゐ,尺,丂,ｲ,ひ,√,W,ﾒ,ﾘ,乙",
    "𐌀,𐌁,𐌂,𐌃,𐌄,𐌅,ɠ,𐋅,𐌉,ɉ,𐌊,𐌋,𐌌,𐌍,ꝋ,𐌐,𐌒,ɽ,𐌔,𐌕,𐌵,ʋ,ꮤ,𐋄,𐌙,ɀ,𐌀,𐌁,𐌂,𐌃,𐌄,𐌅,Ɠ,𐋅,𐌉,Ɉ,𐌊,𐌋,𐌌,𐌍,Ꝋ,𐌐,𐌒,Ɽ,𐌔,𐌕,𐌵,Ʋ,Ꮤ,𐋄,𐌙,Ɀ",
    "å,b̊,c̊,d̊,e̊,f̊,g̊,h̊,i̊,j̊,k̊,l̊,m̊,n̊,o̊,p̊,q̊,r̊,s̊,t̊,ů,v̊,ẘ,x̊,ẙ,z̊,Å,B̊,C̊,D̊,E̊,F̊,G̊,H̊,I̊,J̊,K̊,L̊,M̊,N̊,O̊,P̊,Q̊,R̊,S̊,T̊,Ů,V̊,W̊,X̊,Y̊,Z̊",
    "҈a҈҈,b҈҈,c҈҈,d҈҈,e҈҈,f҈҈,g҈҈,h҈҈,i҈҈,j҈҈,k҈҈,l҈҈,m҈҈,n҈҈,o҈҈,p҈҈,q҈҈,r҈҈,s҈҈,t҈҈,u҈҈,v҈҈,w҈҈,x҈҈,y҈҈,z҈҈,A҈҈,B҈҈,C҈҈,D҈҈,E҈҈,F҈҈,G҈҈,H҈҈,I҈҈,J҈҈,K҈҈,L҈҈,M҈҈,N҈҈,O҈҈,P҈҈,Q҈҈,R҈҈,S҈҈,T҈҈,U҈҈,V҈҈,W҈҈,X҈҈,Y҈҈,Z҈",
    "⧼a̫⧽,⧼b̫⧽,⧼c̫⧽,⧼d̫⧽,⧼e̫⧽,⧼f̫⧽,⧼g̫⧽,⧼h̫⧽,⧼i̫⧽,⧼j̫⧽,⧼k̫⧽,⧼l̫⧽,⧼m̫⧽,⧼n̫⧽,⧼o̫⧽,⧼p̫⧽,⧼q̫⧽,⧼r̫⧽,⧼s̫⧽,⧼t̫⧽,⧼u̫⧽,⧼v̫⧽,⧼w̫⧽,⧼x̫⧽,⧼y̫⧽,⧼z̫⧽,⧼A̫⧽,⧼B̫⧽,⧼C̫⧽,⧼D̫⧽,⧼E̫⧽,⧼F̫⧽,⧼G̫⧽,⧼H̫⧽,⧼I̫⧽,⧼J̫⧽,⧼K̫⧽,⧼L̫⧽,⧼M̫⧽,⧼N̫⧽,⧼O̫⧽,⧼P̫⧽,⧼Q̫⧽,⧼R̫⧽,⧼S̫⧽,⧼T̫⧽,⧼U̫⧽,⧼V̫⧽,⧼W̫⧽,⧼X̫⧽,⧼Y̫⧽,⧼Z̫⧽",
    "Ꭿ,Ᏸ,Ꮸ,Ꭰ,Ꭼ,Ꮀ,Ꮆ,Ꮋ,Ꭸ,Ꮰ,Ꮶ,Ꮭ,Ꮇ,Ꮑ,Ꮎ,Ꮲ,Ꮕ,Ꮢ,Ꮥ,Ꮦ,Ꮼ,Ꮙ,Ꮿ,Ꮂ,Ꮍ,Ꮓ,Ꭿ,Ᏸ,Ꮸ,Ꭰ,Ꭼ,Ꮀ,Ꮆ,Ꮋ,Ꭸ,Ꮰ,Ꮶ,Ꮭ,Ꮇ,Ꮑ,Ꮎ,Ꮲ,Ꮕ,Ꮢ,Ꮥ,Ꮦ,Ꮼ,Ꮙ,Ꮿ,Ꮂ,Ꮍ,Ꮓ",
    "ꋬ,ꃳ,ꉔ,꒯,ꏂ,ꊰ,ꍌ,ꁝ,꒐,꒻,ꀘ,꒒,ꂵ,ꋊ,ꄲ,ꉣ,ꆰ,ꋪ,ꇙ,꓄,꒤,꒦,ꅐ,ꉧ,ꌦ,ꁴ,ꋬ,ꃳ,ꉔ,꒯,ꏂ,ꊰ,ꍌ,ꁝ,꒐,꒻,ꀘ,꒒,ꂵ,ꋊ,ꄲ,ꉣ,ꆰ,ꋪ,ꇙ,꓄,꒤,꒦,ꅐ,ꉧ,ꌦ,ꁴ",
    "ᗩ,ᙖ,ᙅ,ᗫ,ᙓ,ᖴ,ᘜ,ᕼ,ᓰ,ᒍ,K,ᒪ,ᙏ,ᑎ,O,ᕵ,ᕴ,ᖇ,S,ᖶ,ᙀ,ᐯ,ᙎ,᙭,ᖻ,ᘔ,ᗩ,ᙖ,ᙅ,ᗫ,ᙓ,ᖴ,ᘜ,ᕼ,ᓰ,ᒍ,K,ᒪ,ᙏ,ᑎ,O,ᕵ,ᕴ,ᖇ,S,ᖶ,ᙀ,ᐯ,ᙎ,᙭,ᖻ,ᘔ",
    "₳,฿,Ȼ,Ɖ,Ɇ,Ŧ,Ǥ,Ħ,ł,J,₭,Ⱡ,₥,₦,Ø,₱,Q,Ɽ,₴,₮,Ʉ,V,₩,Ӿ,Ɏ,Ƶ,₳,฿,Ȼ,Ɖ,Ɇ,Ŧ,Ǥ,Ħ,ł,J,₭,Ⱡ,₥,₦,Ø,₱,Q,Ɽ,₴,₮,Ʉ,V,₩,Ӿ,Ɏ,Ƶ",
    "𝒶,𝒷,𝒸,𝒹,ℯ,𝒻,ℊ,𝒽,𝒾,𝒿,𝓀,𝓁,𝓂,𝓃,ℴ,𝓅,𝓆,𝓇,𝓈,𝓉,𝓊,𝓋,𝓌,𝓍,𝓎,𝓏,𝒜,ℬ,𝒞,𝒟,ℰ,ℱ,𝒢,ℋ,ℐ,𝒥,𝒦,ℒ,ℳ,𝒩,𝒪,𝒫,𝒬,ℛ,𝒮,𝒯,𝒰,𝒱,𝒲,𝒳,𝒴,𝒵",
    "𒀀,𒁀,𒐏,𒁓,𒀼,𐎣,𒋝,𒀂,𒐕,𒑟,𒐞,𒁇,𐎠,𒐖,𒆸,𒇬,𒌒,𒇲,𒂍,𒈦,𒑚,𐎏,𒉼,𒉽,𒌨,𒑣,𒀀,𒁀,𒐏,𒁓,𒀼,𐎣,𒋝,𒀂,𒐕,𒑟,𒐞,𒁇,𐎠,𒐖,𒆸,𒇬,𒌒,𒇲,𒂍,𒈦,𒑚,𐎏,𒉼,𒉽,𒌨,𒑣",
    "​🇦,​​🇧,​​🇨,​​🇩,​​🇪,​​🇫,​​🇬,​​🇭,​​🇮,​​🇯,​​🇰,​​🇱,​​🇲,​​🇳,​​🇴,​​🇵,​​🇶,​​🇷,​​🇸,​​🇹,​​🇺,​​🇻,​​🇼,​​🇽,​​🇾,​​🇿,​​🇦,​​🇧,​​🇨,​​🇩,​​🇪,​​🇫,​​🇬,​​🇭,​​🇮,​​🇯,​​🇰,​​🇱,​​🇲,​​🇳,​​🇴,​​🇵,​​🇶,​​🇷,​​🇸,​​🇹,​​🇺,​​🇻,​​🇼,​​🇽,​​🇾,​​🇿​",
    "ꋬ,ꃳ,ꉔ,꒯,ꏂ,ꊰ,ꍌ,ꁝ,꒐,꒻,ꀘ,꒒,ꂵ,ꋊ,ꄲ,ꉣ,ꆰ,ꋪ,ꇙ,꓄,꒤,꒦,ꅐ,ꉧ,ꌦ,ꁴ,ꋬ,ꃳ,ꉔ,꒯,ꏂ,ꊰ,ꍌ,ꁝ,꒐,꒻,ꀘ,꒒,ꂵ,ꋊ,ꄲ,ꉣ,ꆰ,ꋪ,ꇙ,꓄,꒤,꒦,ꅐ,ꉧ,ꌦ,ꁴ",
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Font Beautifier Online</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-3">
    <form class="mb-4" method="get" action="">
      <div class="form-group mb-2">
        <label for="inputText">Enter your name:</label>
        <input type="text" class="form-control" id="text" name="text" placeholder="Example: Ehsan">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>Beautifed Font:</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($fonts as $font)
        {
            $beautified_font = str_replace($alphabet,explode(",", $font),$text);
            echo '<tr>
                    <td>'.$beautified_font.'</td>
                  </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjT+8qQvZruvHBKsD/3OMKxyi+NqSeqpbTyONa7/OZhkaLgy" crossorigin="anonymous"></script>
</body>
</html>

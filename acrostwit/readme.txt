
Twit-crostic maker.

Reads in a file of words and a file of 'tweets'. Parses the tweets to see which internet poets have made beautiful acrostic poems.
This readme and the results are done by the PHP file in this repository. 


A few notes:
1) make sure to trim and lowercase everything
2) No external libraries were used for this, because it wasn't really necessary
3) 3 < 4
4) there's some duplicates -- in the list of words. I have left them in on the assumption that they're meant to be there. Because one tuba is never enough.
The code goes through all the tweets and tries to make a 'word' out of the first letter of each word in the tweet. If the word is too short or contains invalid characters, it's discarded. Otherwise the word gets saved into an array as the key alongside the original tweet.

Results are listed below, after some tests.



Test Values (Key = test, Value = result of test. Blank = fail, or if value == key its success.)
Array
(
    [req a-z 4+ chars] => Array
        (
            [benbenbenbenben] => benbenbenbenben
            [1sadpuppy] => 
            [#notmychristian] => 
            [hashtagnotmychristian] => hashtagnotmychristian
            [MyWifiPasswordIsMyNameSixTimes] => 
            [My Wifi Password Is My Name Six Times] => 
            [RT@b3nb3nb3n] => 
            [abc] => 
        )

    [get_first_letters] => Array
        (
            [My attitude towards college: https://t.co/8VaStW8SSV] => match
            [Love is not jealous] => linj
            [let this be your motivation to go to sch😂😂✋😘] => ltbymtgts
            [RT @SuryaElyna: @ayeulfa 😂😂 let this be your motivation to go to sch😂😂✋😘] => 
            [RT @sis_bi32: スマホでこっそりお小遣い稼ぎの裏ワザ！] => 
            [Please sunshine] => 
            [De nada] => 
        )

)
abas - as brothers and sisters.
adai - Another day, another injury
affy - A follow from you
alas - ALSO, LIKE AND SUBSCRIBE!
alca - A la cadenita ah
alem - a llegado el momento!
alto - And listening to oxy…
amor - a m o r.
amor - a m o r
antre - agr noes ta rindo ehehuhue
asok - Allah, sizi ona kavuştursun..
bark - Bir anda rahatladığın kitaplar...
barn - Bored asf right now
base - boys are so embarrassing
beid - Batakda eşin iyi değilse
bias - Baby I'm a sociopath
cask - Cattle assignment strategies.: knm
clot - Con los otros tmbb
coop - Cadê o onibus porra?!
dama - Dodo avec mon am'!
dash - Dope ass song http://t.co/CUXgW026zf
deal - Dovrei essere a letto
decal - don't even come around lol
depa - Descanse em paz avô.
diet - Dios incomparable eres tú
duff - Designated ugly fat friend
egbo - everything's gonna be ok
erma - estpy re mamado ajjsjajsjajsjs
esth - Ele sabe tudo. http://t.co/ERJrZFUND6
flob - Face lift or Botox?
follow - F O L L O W
gait - Got a interview tomorrow😈
ganja - Got a new job ayyyyyy
geum - grind em up maya😭😭💀💀💀
geum - grind em up maya😭😭💀💀💀
gutt - Getting used to this😂
hand - have a nice day!
hask - Herkesin acısı, sevgisi kadar.
hask - Herkesin acısı, sevgisi kadar
hech - High End Cleaning  https://t.co/66nO3xDc5V
hosta - how others say they are
iconic - I C O N I C
immi - I miss my iPad
imshi - I mean so have I
kola - kiss of life aHAHAHHA
lath - lmao allllllll t http://t.co/13nVXrPHUU
lina - Love is not arrogant
lina - Love is not arrogant
lith - Lazarus in the house.
mari - minute and read it?
massa - My attention span short af
match - My attitude towards college: https://t.co/8VaStW8SSV
mias - me: it's a surprise
momo - McCandless: Okay, Mike. Over.
most - maybe others should too
nodal - No one deserves a liar
odel - One Direction en Latinoamerica?
omit - Oh my, Isco's touch.
omit - o meu irmao tem;
pact - Predicting a cancellation tomorrow
plan - Pershing lame af na
prig - per rimettersi in gioco!
rimy - Remember I made you
sage - Satarsan alonsoyu görürsün ebeninkini
same - s a m e
sang - Such a nice game
sasa - Se agacha se agacha
sate - siempre aquí te espero
scyt - siain cewek yang t…
seba - Só esse bm amanhã
sert - Stellinare e ritwittare tutti
shou - Soğuk havalarda onları unutmayalım!.
sish - Salut i Swing. http://t.co/q8j8JpAUkC
skiv - Sadece konuşup,dertleşmeye ihtiyacım var
soar - SO OBRIGADA A RIR
soma - Santi ortiz me ama
spass - Some people are so selfish
special - S P E C I A L
stag - Star TV'de altyazı geçiyor;
steg - Se terminó el Gpe-Reyes
sudd - Sabah uyandım duygulu duygulu
sugh - sadece uyurken güzel hayat
taft - The Absolutely Fabulous Thunderbirds
taum - TE AMOO UN MON…
temp - Todo es muy paja
tete - TAKİP EDENİ TATİL EDERİM
thad - These hips are dangerous
thio - Turning hope into obsession
tiff - Today, I feel fugly
tite - This is the end.
toad - Theory of a Deadman&gt;
tuba - Ta uma bagunça aqui
tuba - Ta uma bagunça aqui
waif - Why am i freezing😭
wait - W A I T
wall - Walsall are loving life
wash - we are super... http://t.co/sWrRbOBDXY
will - wish it lasted lo…
will - wish it lasted lo…
wiss - Wow im so sore
witess - Why is the everything so stressful
yaba - yaşasın aybukenin babası asdsadsdads
yeth - Ya en Tijuana http://t.co/hstzkJajOI

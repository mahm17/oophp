---
---
Redovisning
=========================

Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/redovisning.md`.



Kmom01
-------------------------

###Hur känns det att hoppa rakt in i objekt och klasser med PHP, gick det bra och kan du relatera till andra objektorienterade språk?

Jag tycker att det har gått rätt bra än sålänge. Var lite krångligt att förstå allt i början men jag tycker att guiden gjorde ett bra jobb att förklara det mesta som behövdes än så länge. Och här fick man också prova hur allt fungerade med hjälp av alla olika filer. Jag kan dra kopplingar till OOPYTHON med hur man använder klasser. Att båda språken använder sig utav en konstruktor som initierar klassen från början, och att man också lägger alla olika metoder i klassen istället för att ha det i en annan PHP-fil.

###Berätta hur det gick det att utföra uppgiften “Gissa numret” med GET, POST och SESSION?

Jag hade problem i början då jag inte visste hur jag skulle lägga upp själva filerna, att jag kunde använda `$_GET` och så i själva index filerna. Men när jag kom på hur man kunde använda sig utav det så gick det bra att komma igång med uppgiften. Videoserien som var till uppgiften hjälpte också mycket då man kunde se exempel på kod för att lösa uppgiften och få det förklarat för en på ett bra sätt. Sen hade jag också en del problem med det numret man skulle gissa på. Lyckades aldrig få så att det blev random utan det blev alltid -1. Men det var en väldigt enkel lösning på det som jag inte tänkte på, fick lite hjälp av en klasskamrat med det.

###Har du några inledande reflektioner kring me-sidan och dess struktur?

Det är väldigt mycket filer och mappar till en början. Men än så länge så är det inte så mycket att hålla koll på själv. Och ju mer vi arbetar med den så kommer det bli lättare att hitta. Men nu fick jag kika runt lite i alla mappar tills jag hittade tex vart man ändrade footern och headern. Det påminner en hel del om den strukturen som var i design-kursen, men den lärde man sig tillslut så då ska det nog inte vara några större problem här.

###Vilken är din TIL för detta kmom?

Min TIL för detta kursmomentet är hur objekt och klasser funkar i PHP sen också hur man kan använda `$_GET` och liknande variabler för att få ut information i formuläret. Tex hur man använder isset för att visa fusk-delen i den här uppgiften.




Kmom02
-------------------------

###Hur gick det att överföra spelet “Gissa mitt nummer” in i din me-sida?

Det gick rätt så felfritt för mig. Det jag hade mest problem med var att få bort min session, då jag redan hade en startad så kunde jag inte använda samma på me-sidan. Men jag löste det sen genom att göra en destroy så nu ska allt funka. Sen la jag också in POST och GET på sidan då jag hade lite tid över. Dom två versionerna hade jag inga problem med att lägga in, dom funkade nästan direkt utan att behöva ändra något. Det jobbigaste med uppgiften var däremot alla filer och mappar man skulle hålla på och jobba i. Det var lätt att man glömmde av sig och inte visste vart man skulle leta efter tex routes. Men det är nog något som sätter sig ju mer vi jobbar med ramverket.

###Berätta om din syn på modellering likt UML jämfört med verktyg som phpDocumentor. Fördelar, nackdelar, användningsområde?

Jag tycker det är ett bra sätt att planera hur man ska bygga upp sin kod. Man får en överblick snabbt om vilka klasser och metoder osv som ska finnas, och hur dom är kopplade. Men jag tycker det är svårt att göra det själv, har inte så bra koll på när vilka pilar man ska använda för att det ska se rätt ut.

###Vad tycker du om konceptet make doc?

Ska jag vara helt ärlig så förstår jag inte riktigt vad man använder det till. Eller vad som händer när man skriver make doc. Men vad jag har läst och vad som har sagts på föreläsningar så verkar det som en bra grej eftersom den genererar dokumentationen på något sätt.

###Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?

Jag tycker att det känns bra, lite jobbigt som sagt med att skriva koden i ramverket då man måste skriva kod i så många olika filer vilket gör det svårt efter en stund om man har många olika routes och template filer. Men det är också bra att lära sig det då man får en bra struktur på sin kod och när man jobbat med det mer kan lära sig vart de delarna man ska lägga till eller ändra på ligger.

###Vilken är din TIL för detta kmom?

Min TIL är hur namespaces fungerar och hur man kan använda dom.

Kmom03
-------------------------
###Har du tidigare erfarenheter av att skriva kod som testar annan kod?

Ja, vi gjorde ungefär samma sak i OOPython. Där testade vi också våran kod på ett liknande sätt. Den stora skillnaden var att man kunde inte se hur mycket codecoverage man hade på sin kod, vilket jag tycker är väldigt bra att man kan göra nu.

###Hur ser du på begreppen enhetstestning och att skriva testbar kod?

Jag tycker att det kan vara bra saker att göra, så att man vet att om man gör vissa saker med koden så returnerar den rätt saker. Hur testbar kod ser ut vet jag inte riktigt men jag märkte att det var vissa grejer som var väldigt svåra att testa i min egen kod, så jag får nog ta och lära mig hur man gör det bättre och hur man gör så att koden blir lättare att testa i slutändan.

###Förklara kort begreppen white/grey/black box testing samt positiva och negativa tester, med dina egna ord.

White box testing kan man säga är när man testar det som händer inuti applikationen. Men bestämmer hur man ska testa sig genom koden och vilka resultat du ska få för att testet ska klara sig. Black box testing är när man testar kodens funktionalitet utan att kolla på det som händer inuti applikationen. Grey box testing är ungefär som en blandning utav white och black box testing. Positiva tester gör man för att testa så att koden verkligen gör det som man vill att den ska utföra. Negativa tester är när man testar så att något går fel. Man kan skicka in fel parametrar till en funktion till exempel och då vill man att det ska hanteras på ett visst sätt, gör det det så går testet igenom.

###Berätta om hur du löste uppgiften med Tärningsspelet 100, hur du tänkte, planerade och utförde uppgiften samt hur du organiserade din kod?

Jag började tänka på vilka klasser jag vill ha och jobba med. Jag kom fram till att ha en klass som har koll på själva tärningen, det slumpmässiga numret och returnera det rummet. Så min Dice klass blev inte så jättestor. Sen ville jag också en klass som höll på poängställningen och all annan spellogik. Det mest av min kod ligger i klasserna vilket gör att man router fil inte är så full med kod utan bara en if-sats som kollar vilken knapp i formuläret man klickar på och sedan skickar det vidare till en metod i klassen. Sen extendade jag Dice klassen i Game klassen så att jag kunde initiera ett Game objekt med ett nytt Dice objekt. Sen använde jag inte tex `$_POST` och liknande utan använda mig utav ramverkets egna sätt att hantera POST requests och liknande vilket gjorde det smidigare.

###Hur väl lyckades du testa tärningsspelet 100?

Jag tycker att jag lyckades hyfsat. Lyckades inte få 100%, sen vet jag inte riktigt hur jag ska testa Functions och Methods bättra samt hur man testar Classes och Traits. Men jag gjorde så bra jag kunde med den koden jag hade. Lyckades få fram en hel del tester iallafall. Tycker det var krångligt hur jag skulle göra min tester då jag hade en del if satser som kollade olika värden men det gick väl helt okej. Var vissa rader som jag inte listade ut hur jag skulle testa.

###Vilken är din TIL för detta kmom?

Min TIL för detta kursmomentet är hur PHPUnit funkar och hur man använder det för att testa sin kod.

Kmom04
-------------------------

Här är redovisningstexten



Kmom05
-------------------------
###Några reflektioner kring koden i övningen för PHP PDO och MySQL?

Nej jag tyckte att allt flöt på bra. Var inte så svårt att förstå hur det funkade att ansluta sig till databasen och sedan utföra vissa SQL satser då det liknade det vi gjorde i databas kursen med express.

###Hur gick det att överföra koden in i ramverket, stötte du på några utmaningar?

Stötte inte på några större utmaningar utan allt flöt på bra. Det enda jag hade lite problem med var routesen för CRUD delen. Mina knappar funkade inte utan skickade mig bara till en 404 sida. Men sen ändrade jag routen till en any route istället för en GET eller POST route vilket löste problemet.

###Berätta om din slutprodukt för filmdatabasen, gjorde du endast basfunktionaliteten eller lade du till extra features och hur tänkte du till kring användarvänligheten och din kodstruktur?

Då jag har hamnat efter i kursmomenten så la jag bara till grundkraven. Hade jag haft mer tid på mig så hade jag försökt lägga till de optionella kraven också. Jag tänkte inte så mycket på själva strukturen utan gjorde ungefär så som i exemplet, den som jag skulle vilja ändra är väl att jag har rätt mycket kod i route filen nu som jag skulle kunna flytta till klasser istället. Men eftersom jag mest ville bli klar så fort som möjligt så blev det att koda i routen nu.

###Vilken är din TIL för detta kmom?

Min störta TIL är ju hur man använder PHP och PDO samt ramverket för att ansluta sig till en databas och hur man sen kan köra olika SQL satser. Sen lärde jag mig också hur man gör för att ansluta sig till en annan server i det här fallet studentservern.

Kmom06
-------------------------

###Hur gick det att jobba med klassen för filtrering och formatting av texten?

Jag tycker att det gick väldigt bra. Det enda som jag inte förstod i början var hur jag skulle lösa parse funktionen. Men sen kom jag på att man kunde använda en switch case sats som kollade vad man skickade med för parameter. Sen förstod jag inte riktigt hur alla dom andra funktionerna fungerade med det är för att jag inte är så insatt i regex vilket jag antar är det dom bygger på.

###Berätta om din klasstruktur och kodstruktur för din lösning av webbsidor med innehåll i databasen.

Jag använde mig inte utav några fler klasser för att lösa detta då jag kände att jag kunde lösa allt i route filen. Blev väl lite mycket kod i routen men jag kände att jag inte hade så mycket tid på mig att skriva en till klass med funktioner för att lösa allt, så gjorde på det sättet som kändes enklast. Hade jag haft mer tid på mig så hade jag nog försökt lägga allt i klasser för att route filen inte skulle bli så full på kod.

###Hur känner du rent allmänt för den koden du skrivit i din me/redovisa, vad är bra och mindre bra? Ser du potential till refactoring av din kod och/eller behov av stöd från ramverket?

Jag tycker att min kod blev helt okej. I dom tidigare uppgifterna så har jag försökt att använda mig av klasser så mycket som möjligt för att få routsen så “rena” som möjligt. Tycker ramverket har varit till bra hjälp när det kommer till formulär och liknande då det är väldigt enkelt att få ta tag på värden på det sättet med $app->request och liknande.

###Vilken är din TIL för detta kmom?

Min TIL för detta kmom är hur ett textfilter funkar och vad man kan använda det till. Kan verkligen se användningsområden för detta i framtiden.

Kmom07-10
-------------------------

###Del 1

###Krav 1

Detta kravet gjorde det rätt enkelt att komma igång med projektet. Här fick man veta tydligt vad som skulle finnas på sin sida.

Det som var svårast för mig var att komma på vad för produkt jag ville marknadsföra. Tillslut kom jag på något som jag inte vet om alla vet om, men det finns vissa klädmärken eller mode kanske man ska kalla det som har väldigt dyra kläder, tex Supreme, Bape, så jag har gjort en liten “flum” sida och inte direkt marknadsför just en specifik sort av produkter utan bara massa olika klädesplagg.  Jag ville skämta lite om dessa sorters kläder då dom inte borde kosta så mycket då dom ser ut som vilka kläder som helst nästan, så då kom jag på idén att försöka sälja billiga sådana kläder istället.

###Krav 2

Allt gick bra för mig på det här kravet då jag tog en kopia av min redovisa sida så hade alla filer på sin plats redan. Det enda jag behövde göra var mest att rensa upp bland filerna då det var många som inte används. För ER-diagrammet använde jag Workbench reverse engineering för att få en överblick av mina tabeller. Så det var inte några problem att lösa det då jag inte hade många tabeller att jobba med.

Test delen däremot var lite problem. Jag kom på det rätt sent att jag har ju inga klasser jag jobbar med, utan använder mig mest av $app i min routes (vilket inte är det finaste eller det smartaste) men det var så jag gjorde och det jag tyckte gick snabbast då jag började rätt sent med projektet. Den enda klassen jag använder är en login klass för att kolla om man är inloggad som admin eller inte, och den har bara en funktion. Så jag löste test till den funktionen iallafall. Sen hade jag velat testa min TextFilter klass också men hade inte tid över till att göra det.

Make doc tror jag inte var några problem då allt ska ha varit fixat på redovisa sidan. Om jag inte har missat något.

###Krav 3

På det här kravet använde jag mig som sagt av en klass som kollar ifall man är inloggad som admin genom att ändra värdet i en array från 0 om man inte är utloggad till 1 om man är inloggad. Sen startar jag även en session när man går in i min login route så att jag kan spara det värdet även om man går in på andra routes. Så när man är inloggade så valde jag att istället för att göra en sorts admin sida som man gjorde i kmom06 att ha länkar på produkt och blogg sidan där man kan lägga till, redigera eller ta bort saker. Är man inte inloggad så syns inte dessa länkar. Jag vet inte riktigt vad som kunde varit bäst att ha en tabell som admin eller som jag har att ha länkar som bara funkar om du är admin. Jag tycker att det blev rätt bra på mitt sätt ändå. Det krångliga här var dock att få markdown att funka när man redigerar inlägg och lägger till nya. Men löste detta efter lite funderande genom att man får skriva om man tex vill ha en header i namnet på en produkt så parsas det senare i vyn.

###Del 2

Jag tycker att projektet har gått helt okej. Jag hade gärna velat komma igång tidigare så att jag kunde löst några av extra kraven. Jag tycker att det var en bra svårighetsgrad på det som behövdes göras för att få godkänt, vissa delar var svårare än andra såklart men så ska det ju vara så att man får använda sig utav det man har jobbat med tidigare. Är lite besviken på mig själv då jag inte har använt mig av klasser på ett sådant sätt som jag ville utan har mest använt mig utav det som finns i ramverket. Det som tog mest tid för mig måste nog ha varit CRUD delen. Det är väldigt mycket kod som ska in och som man måste hålla koll på. Speciellt när man måste göra CRUD för både produkter och blogginlägg. Men det funkade tillslut.

Jag tycker att det har varit ett rimligt projekt då man har fått använde sig av mycket av det som man har lärt sig tidigare i kursen. Tycker även det är kul när man får fundera själv på vad man vill lägga in på sidan.


###Del 3

Jag tycker att den här kursen har varit väldigt rolig och lärorik. Vissa delar har varit svåra att komma genom som tex kmom03 och 04 som jag tyckte tog extra lång tid då det var väldigt mycket man skulle göra i dom, speciellt kmom03. Detta är också anledningen till att jag inte har gjort färdigt kmom04 än, jag ville inte hamna efter så mycket så hoppade över det och gick vidare till 05 istället vilket gick mycket bättre. Jag ska göra 04 så fort jag får tid att göra den.

Föreläsningar har varit till stor hjälp när det kommer till att lösa uppgifterna. Men det som jag har använt mig mest utav under denna kursen är de videos som var länkade till varje kursmoment. Dom har verkligen hjälpt mig att ta mig genom kursmomenten, kändes bra när man kunde kolla på lite exempel på att lösa uppgifterna för att senare kunna göra om dom till sina egna lösningar. Jag är nöjd med denna kursen har lärt mig mycket som man kan använda sig utav i framtiden. Jag skulle definitivt rekommendera denna kurs till andra som är intresserade av antingen PHP eller objektorienterad programmering eller både och.

Jag ger kursen 9/10.

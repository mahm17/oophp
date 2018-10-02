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

Här är redovisningstexten



Kmom06
-------------------------

Här är redovisningstexten



Kmom07-10
-------------------------

Här är redovisningstexten

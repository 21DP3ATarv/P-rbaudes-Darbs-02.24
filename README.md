# Pārbaudes-Darbs-02.24
A. Tarvida, DP3-3, 2023/2024 m. g.

# Kas ir API?
Lietojumprogrammas saskarne (application programming interface, API) ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums (bibliotēkas, servisi), kuru iespējams izmantot ārējiem programmatūras produktiem.

# Kā deklarēt mainīgo PHP valodā?
Mainīgo PHP valodā var deklarēt sekojoši:

$mainigais = "Vērtība";

# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel ir moderns, populārs PHP programmēšanas rīks un ietver MVC (Model-View-Controller) arhitektūras modeli. 
Šī arhitektūra nodrošina labu struktūru un atdalīšanu starp datiem (modeļi), lietotāja saskarni (skati) un biznesa loģiku (kontrolieri). 

# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM ir saīsinājums no "Object-Relational Mapping", kas nozīmē objektu-reklašu attēlošanu. Tas ir programmēšanas rīks, kas ļauj attēlot datu bāzes tabulu struktūras kā objektus programmēšanas valodā (piemēram, PHP, Java, Python utt.). 

Izmantošanas iemesli:

ORM nodrošina abstrakciju pāri datu bāzes specifiskajiem vaicājumiem. Tas nozīmē, ka programmētājam nav nepieciešams zināt datu bāzes konkrētu sintaksi un funkcijas, lai veiktu darbības ar datiem.

ORM var samazināt kodu apjomu, jo tas neprasa tiešu SQL vaicājumu rakstīšanu. Tā vietā datu pieprasījumus var veidot, izmantojot programmēšanas valodas sintaksi.

ORM var nodrošināt platformu neatkarību, t.i., jūs varat izmantot to pašu ORM bibliotēku ar dažādām datu bāzēm, bez nepieciešamības rakstīt atšķirīgus vaicājumus katrā platformā.

# Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. 	Lietotāju tabulas struktūra:
Doto pieprasijumu var izdarīt sekojoši:

$lietotaji = User::where('rating', '>', 4)->get();



<?php

namespace LilPecky\DriverGenerator\Providers\fi_FI;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Aake", "Aapeli", "Aapo", "Aappo", "Aarne", "Aarni", "Aaro", "Aatto", "Aatu", "Ahti", "Aimo", "Akseli", "Aku", "Aleksi", "Anssi", "Antero", "Antti", "Antton", "Ari", "Arto",
        "Arttu", "Artturi", "Asko", "Atte", "Aune", "Auvo", "Beeda", "Briitta", "Daniel", "Eeli", "Eelis", "Eemeli", "Eero", "Eetu", "Eino", "Ekku", "Elias", "Eljas", "Elmeri", "Elmo",
        "Emil", "Ensio", "Erkki", "Erkko", "Esa", "Eskil", "Esko", "Evert", "Hampus", "Hannu", "Harri", "Heikki", "Helmi", "Hemminki", "Henri", "Henrikki", "Herkko", "Hermanni", "Hugo", "Iiro",
        "Ilja", "Ilkka", "Ilmari", "Isto", "Jaakko", "Jake", "Jalmari", "Jani", "Janne", "Jari", "Jarkko", "Jarno", "Jasper", "Jere", "Jeremias", "Jeremy", "Jesper", "Jesse", "Jimi", "Jirko",
        "Joakim", "Joel", "Johan", "Joni", "Joona", "Joonas", "Joonatan", "Jore", "Jorma", "Jouko", "Juha", "Juhana", "Juho", "Jukka", "Julius", "Junnu", "Jussi", "Justus", "Jusu", "Juuso",
        "Jyrki", "Kaapo", "Kaarle", "Kai", "Kaj", "Kalevi", "Kalle", "Kari", "Kasper", "Kasperi", "Kaste", "Kauto", "Keijo", "Kerkko", "Kim", "Kimmo", "Klaus", "Konsta", "Kristian", "Kustaa",
        "Lari", "Lasse", "Lassi", "Lauri", "Leevi", "Lenni", "Leo", "Levin", "Luca", "Lukas", "Luukas", "Magnus", "Marko", "Markus", "Matias", "Matti", "Mauno", "Mauri", "Miika", "Mika",
        "Mikael", "Mikko", "Miro", "Neo", "Nico", "Niklas", "Niko", "Nuutti", "Oiva", "Oliver", "Olli", "Onni", "Oskari", "Osmo", "Ossi", "Otso", "Otto", "Oula", "Paavo", "Pasi",
        "Patrik", "Paulus", "Peetu", "Pekka", "Pekko", "Pentti", "Pertti", "Petri", "Petteri", "Pyry", "Raimo", "Rami", "Rasmus", "Riku", "Risto", "Roope", "Sakari", "Saku", "Sami", "Sampo",
        "Samu", "Samuel", "Samuli", "Santeri", "Santtu", "Sauli", "Seppo", "Simo", "Sisu", "Sulo", "Taneli", "Tapani", "Tarmo", "Tatu", "Teemu", "Teijo", "Tenho", "Teppo", "Tero", "Teuvo",
        "Timo", "Toivo", "Tomi", "Tommi", "Topi", "Touko", "Tuomas", "Tuomo", "Turkka", "Tuukka", "Unto", "Urho", "Valtteri", "Veeti", "Veikko", "Veli", "Veli-Matti", "Verner", "Vesa", "Vilho",
        "Viljo", "Ville", "Voitto", "Väinö", "Werneri", "Wiljami", "Yrjö"
    ];

    protected static array $givenNamesFemale = [
        "Aada", "Aamu", "Ada", "Aina", "Aino", "Aira", "Airi", "Aki", "Aliina", "Aliisa", "Amalia", "Amanda", "Amelia", "Amira", "Anissa", "Anita", "Anna", "Anne", "Anni", "Anniina",
        "Annikki", "Annilotta", "Annu", "Anu", "Asta", "Astrid", "Atte", "Auli", "Aune", "Aura", "Aurora", "Bella", "Cara", "Celina", "Christa", "Christel", "Clara", "Cornelia", "Dani", "Eerika",
        "Eeva", "Eevi", "Eija", "Eila", "Eini", "Eira", "Elea", "Eliina", "Elina", "Elisa", "Elise", "Ella", "Ellen", "Elma", "Elsi", "Elviira", "Emilia", "Emma", "Emmaliina", "Emmi",
        "Enna", "Enni", "Ennika", "Erja", "Erna", "Esa", "Essi", "Esteri", "Eva", "Eveliina", "Fanni", "Fiona", "Hanna", "Hannele", "Hanni", "Heidi", "Heli", "Helinä", "Helmi", "Helmiina",
        "Helvi", "Henna", "Henni", "Henniina", "Hertta", "Hilda", "Hilja", "Hilkka", "Hilla", "Hilma", "Hilppa", "Iia", "Iida", "Iina", "Iines", "Iiris", "Iita", "Ilmi", "Ilona", "Inari",
        "Inka", "Inkeri", "Inna", "Irene", "Irma", "Isabella", "Jaana", "Jade", "Jadessa", "Jami", "Janette", "Janika", "Janina", "Janita", "Janna", "Janne", "Janni", "Jasmiina", "Jasmin", "Jemina",
        "Jenika", "Jenna", "Jenni", "Jermia", "Jessica", "Johanna", "Joni", "Jonina", "Jonna", "Jonna-Maria", "Jooa", "Julia", "Jutta", "Juttamari", "Juulia", "Kaarina", "Kaija", "Kaisa", "Kaisla", "Kaisu",
        "Karla", "Karri", "Kati", "Katja", "Katri", "Kerttu", "Kia", "Kimi", "Kirsi", "Kirsti", "Klaara", "Krista", "Kukka", "Lahja", "Lari", "Laura", "Lauri", "Lea", "Leena", "Liisa",
        "Lila", "Lilja", "Linnea", "Lotta", "Loviisa", "Lumina", "Maarit", "Maia", "Maija", "Maiju", "Maire", "Maisa", "Malla", "Mari", "Maria", "Marianna", "Mariel", "Marika", "Marja", "Marjatta",
        "Marjo", "Marjukka", "Martta", "Matleena", "Meea", "Meeri", "Meri", "Mervi", "Mette", "Mia", "Miia", "Miina", "Mikaela", "Milla", "Mimi", "Mimmi", "Mimmu", "Mimosa", "Minea", "Minna",
        "Minttu", "Mira", "Mirella", "Mirja", "Mirva", "Miska", "Nadja", "Natalia", "Nea", "Neea", "Nella", "Nelli", "Netta", "Nia", "Niina", "Nina", "Ninni", "Noora", "Olga", "Oliivia",
        "Olivia", "Oona", "Outi", "Paula", "Pauliina", "Peppi", "Petra", "Pia", "Pihla", "Piia", "Pilvi", "Pinja", "Piritta", "Pirjo", "Pirjo-Riitta", "Pirkko", "Päivi", "Raija", "Raila", "Raili",
        "Raisa", "Reeta", "Reetta", "Riia", "Riikka", "Riina", "Riitta", "Ritva", "Roni", "Ronja", "Roosa", "Saana", "Saara", "Saija", "Salla", "Sanna", "Sanni", "Sari", "Satu", "Seija",
        "Selma", "Siiri", "Sirpa", "Siru", "Susanna", "Taika", "Tanja", "Tara", "Taru", "Tea", "Terhi", "Tiia", "Tiina", "Tiiu", "Tinja", "Veera", "Venla", "Viivi", "Vili", "Vilja",
        "Vilma", "Wilma"
    ];

    protected static array $familyNames = [
        "Aakula", "Aalto", "Aaltonen", "Aarnio", "Aaronen", "Aavikkola", "Ahmala", "Aho", "Ahokas", "Ahola", "Ahomaa", "Ahonen", "Ahoniemi", "Ahopelto", "Ahovaara", "Ahtila", "Ahtiluoto", "Ahtio", "Ahtisaari", "Ahto",
        "Ahtola", "Ahtonen", "Ahtorinne", "Aija", "Aijala", "Ainola", "Airaksinen", "Aitio", "Aitolahti", "Aitomaa", "Aittasalmi", "Akkala", "Akkanen", "Ala-aho", "Alahuhta", "Alajoki", "Alajärvi", "Alakoski", "Alanen", "Alanko",
        "Alapuro", "Alasalmi", "Alatalo", "Alho", "Alhola", "Alijoki", "Alén", "Ankkala", "Ankkuri", "Annala", "Annunen", "Anttila", "Anttinen", "Anttonen", "Ara", "Arhila", "Arhinmäki", "Arhosuo", "Arinen", "Arjamaa",
        "Arjanen", "Arkkila", "Armio", "Arnio", "Aro", "Aronen", "Arosuo", "Arponen", "Arvola", "Asikainen", "Astala", "Attila", "Aunela", "Aura", "Auramies", "Auranen", "Autio", "Auvinen", "Auvola", "Avonius",
        "Avotie", "Bräysy", "Davidsainen", "Dufva", "Eerikäinen", "Eerola", "Einel", "Eino", "Einola", "Einonen", "Eklund", "Ekman", "Ekola", "Ellilä", "Ellinen", "Elo", "Eloharju", "Elomaa", "Eloranta", "Eno",
        "Enola", "Enäjärvi", "Erkinjuntti", "Erkki", "Erkkilä", "Erkkinen", "Erkko", "Erkkola", "Ernamo", "Erola", "Eronen", "Ervola", "Eräharju", "Erämaja", "Eränen", "Eskelinen", "Eskelä", "Eskola", "Evelä", "Evilä",
        "Filppula", "Finni", "Forsberg", "Forsström", "Frändilä", "Fränti", "Grönberg", "Haahka", "Haahkola", "Haanpää", "Haapakorpi", "Haapala", "Haapanen", "Haapaniemi", "Haaparanta", "Haapasalmi", "Haapasalo", "Haapio", "Haapkylä", "Haapoja",
        "Haapola", "Haaponen", "Haataja", "Haavisto", "Haikala", "Haikara", "Hakala", "Hakkarainen", "Hakki", "Hakula", "Halinen", "Halkola", "Halkonen", "Halla", "Hallaper", "Hallapuro", "Hallikainen", "Hallila", "Hallonen", "Halme",
        "Halmela", "Halmelahti", "Halonen", "Halttunen", "Hammas", "Hanhela", "Hanhinen", "Hannula", "Hannunen", "Hannus", "Hapola", "Harjamäki", "Harju", "Harjula", "Harjunen", "Harjunpää", "Harkimo", "Hartikainen", "Hattunen", "Hautakangas",
        "Hautakoski", "Hautala", "Hautamäki", "Haverinen", "Havukoski", "Heikkilä", "Heikkinen", "Heimola", "Heino", "Heinola", "Heintikainen", "Heinälä", "Heinänen", "Heiskanen", "Heiskari", "Hekkaharju", "Helenius", "Helinen", "Helismaa", "Hellgren",
        "Hellman", "Helmel", "Helovirta", "Helppolainen", "Helstel", "Hentinen", "Hento", "Hepomäki", "Heponen", "Herranen", "Hervanta", "Hervanto", "Hiesu", "Hietala", "Hietanen", "Hiltunen", "Hirvelä", "Hirvi", "Hirvikangas", "Hirvonen",
        "Hoikkala", "Hoikkanen", "Holappa", "Holkeri", "Holm", "Holmberg", "Holopainen", "Hongisto", "Honkanen", "Hovi", "Huhta", "Huhtala", "Hukkala", "Hukkanen", "Huopainen", "Huotari", "Huovinen", "Huttunen", "Huuhka", "Huurinainen",
        "Huusko", "Huvinen", "Hyppölä", "Hyppönen", "Hytölä", "Hyvärinen", "Hyypiä", "Hyyppä", "Häkkinen", "Häkämies", "Hämäläinen", "Hänninen", "Härkönen", "Ihalainen", "Ikola", "Ikonen", "Ilmarinen", "Ilomäki", "Iloniemi", "Ilvesniemi",
        "Immonen", "Inkeri", "Inkinen", "Isokangas", "Isoluoma", "Isomäki", "Isotalo", "Itkonen", "Itävaara", "Itävuori", "Jaakkola", "Jaakkonen", "Jaakola", "Jaakonmaa", "Jaatinen", "Jakkila", "Jalonen", "Jauhiainen", "Jauho", "Joenhaara",
        "Johto", "Jokela", "Jokelainen", "Jokihaara", "Jokimies", "Jokinen", "Jortikka", "Joru", "Junkkari", "Juntti", "Junttila", "Juppi", "Jurva", "Jurvala", "Jurvanen", "Jussila", "Juustinen", "Juuti", "Juutilainen", "Juvanen",
        "Juvonen", "Jylhä", "Jänis", "Jäppinen", "Järvelä", "Järvinen", "Järviö", "Jääskeläinen", "Kaakko", "Kaija", "Kaikkonen", "Kaillomäki", "Kainulainen", "Kaista", "Kaivola", "Kakkola", "Kakkonen", "Kalinainen", "Kalkkinen", "Kalliala",
        "Kallio", "Kallioinen", "Kalliomäki", "Kalmo", "Kalvo", "Kamari", "Kamppinen", "Kanala", "Kanerva", "Kangas", "Kangaskorte", "Kangasluoma", "Kangasniemi", "Kangassalo", "Kankaanpää", "Kannelmaa", "Kannelmäki", "Kannisto", "Kantele", "Kantola",
        "Kapanen", "Kaplas", "Karalahti", "Karhu", "Karhula", "Kari", "Karjalainen", "Karlsson", "Karpela", "Karppanen", "Karppinen", "Karukoski", "Karvonen", "Katainen", "Kataja", "Kattelus", "Kauhala", "Kaukovaara", "Kauppala", "Kauppi",
        "Kauppinen", "Kaurismäki", "Keinänen", "Kekkonen", "Kerava", "Kerttula", "Keränen", "Keskinen", "Keskioja", "Ketola", "Ketonen", "Kettula", "Kettunen", "Kieli", "Kiianen", "Kiille", "Kiiski", "Kimalainen", "Kinnula", "Kinnunen",
        "Kiskonen", "Kissala", "Kivi", "Kiviniemi", "Kivistö", "Koirala", "Koivisto", "Koivula", "Koivulehto", "Koivuniemi", "Kokkonen", "Kolehmainen", "Komulainen", "Konttinen", "Kontunen", "Korhonen", "Koriseva", "Kortesjärvi", "Koskela", "Koskelainen",
        "Kosonen", "Kotanen", "Koukkula", "Kouvonen", "Kovalainen", "Krapu", "Krekelä", "Kujala", "Kujanpää", "Kukkala", "Kukkamäki", "Kukkonen", "Kultala", "Kumpula", "Kumpulainen", "Kunnas", "Kuoppala", "Kuosmanen", "Kurkela", "Kurki",
        "Kuusijärvi", "Kyllönen", "Kynsijärvi", "Kynsilehto", "Kärki", "Kärkkäinen", "Laakkola", "Laakkonen", "Laakso", "Laaksonen", "Laatikainen", "Lahdenpää", "Laine", "Lainela", "Lakka", "Lampinen", "Lappalainen", "Lassinen", "Laurila", "Lauronen",
        "Lavola", "Lehmälä", "Lehtimäki", "Lehtinen", "Lehtisalo", "Lehto", "Lehtonen", "Leino", "Lepistö", "Lepomäki", "Leppilampi", "Leppäkorpi", "Leppälä", "Leppävirta", "Leskinen", "Liimatainen", "Lind", "Linnala", "Linnamäki", "Lippo",
        "Litmanen", "Litvala", "Liukkonen", "Loiri", "Lukkari", "Lumme", "Luoma", "Luukkonen", "Lyly", "Lyytikäinen", "Lähteenmäki", "Lämsä", "Maahinen", "Made", "Maijala", "Makkonen", "Malmi", "Malmivaara", "Mannila", "Manninen",
        "Mannonen", "Mansikka-aho", "Mansikkaoja", "Marila", "Marjala", "Marjamäki", "Marjola", "Marjomaa", "Marjonen", "Markkanen", "Markkula", "Markuksela", "Markus", "Martikainen", "Marttinen", "Masala", "Masanen", "Matomäki", "Mattila", "Maunola",
        "Maunula", "Melasniemi", "Merelä", "Merilä", "Meriläinen", "Merimaa", "Metsoja", "Metsälampi", "Metsäoja", "Mielonen", "Miettinen", "Mikkola", "Mikkonen", "Muhonen", "Mujunen", "Murola", "Mustapää", "Mustonen", "Muurinen", "Myllymäki",
        "Myllypuro", "Myllys", "Mylläri", "Mäenpää", "Mäkelä", "Mäki", "Mäkinen", "Mäntylä", "Määttä", "Möttönen", "Naula", "Naulapää", "Neuvonen", "Nevala", "Niemelä", "Niemi", "Nieminen", "Niemistö", "Niinimaa", "Niinistö",
        "Niiranen", "Nikkanen", "Nikkilä", "Nikula", "Nikulainen", "Niskala", "Nisukangas", "Niukkanen", "Nokelainen", "Nokkonen", "Notkonen", "Nousiainen", "Nukka", "Nummelin", "Nuotio", "Nurkkala", "Nurmela", "Nurmi", "Nurminen", "Nurminiemi",
        "Nuutti", "Nykänen", "Nyman", "Närvälä", "Näätänen", "Oikkonen", "Oikonen", "Oinonen", "Oja", "Ojala", "Ojamäki", "Ojanen", "Ojaniemi", "Oksala", "Oksanen", "Ollikainen", "Ollila", "Ollinen", "Oravainen", "Oravala",
        "Otsamo", "Outinen", "Ovaska", "Paajanen", "Paakkanen", "Paananen", "Paasikivi", "Paasilinna", "Paasonen", "Paavola", "Pahajoki", "Pahkasalo", "Pajumäki", "Pajunen", "Pakarinen", "Pakkala", "Pakola", "Pallas", "Paloheimo", "Palola",
        "Palomäki", "Parkkonen", "Pekkala", "Pekkarinen", "Pelkonen", "Peltomaa", "Pennanen", "Pennilä", "Pentikäinen", "Penttilä", "Perniö", "Pesola", "Pesonen", "Peuranen", "Peuraniemi", "Pietilä", "Piippola", "Piirainen", "Pikkarainen", "Pirttijärvi",
        "Pirttikangas", "Pitkämäki", "Pohtamo", "Porkkala", "Poronen", "Poropudas", "Puhakainenä", "Puhakka", "Pukkila", "Pulli", "Puolakka", "Puuperä", "Pyykkö", "Pyykkönen", "Päivälä", "Päivärinta", "Pääkkönen", "Pöllönen", "Pöntinen", "Pöysti",
        "Raappana", "Raatikainen", "Raatila", "Rahka", "Rahkala", "Raiski", "Raiskio", "Raitanen", "Raittila", "Rajamäki", "Ramu", "Ranta", "Rantamaa", "Rapala", "Rasila", "Rasmus", "Rauhala", "Rauhanen", "Rautaporras", "Rautavirta",
        "Rautio", "Rehu", "Reinikainen", "Reinikka", "Rekomaa", "Repo", "Repola", "Riihimäki", "Riikonen", "Rimmanen", "Rinne", "Rinta", "Rintamäki", "Ristilä", "Ritari", "Rokko", "Ronkainen", "Roponen", "Ruhanen", "Rumpunen",
        "Runtti", "Ruohoniemi", "Ruonala", "Ruonansuu", "Ruotsalainen", "Ruuhonen", "Ruuskari", "Ruusula", "Ruutti", "Ryhänen", "Ryti", "Ryysyläinen", "Räikkönen", "Räisänen", "Räsänen", "Saanila", "Saarela", "Saarenheimo", "Saari", "Saarikivi",
        "Saarnio", "Saarnivaara", "Saastamoinen", "Saikkonen", "Saksala", "Salenius", "Salmela", "Salmelainen", "Salo", "Salolainen", "Salonen", "Saloranta", "Samulin", "Sannala", "Santanen", "Saraste", "Sarasvuo", "Saukko", "Savioja", "Savolainen",
        "Selänne", "Seppelin", "Seppälä", "Seppänen", "Servo", "Setänen", "Siekkinen", "Sievinen", "Sihvonen", "Siira", "Sikala", "Silakka", "Sillanpää", "Siltala", "Siltonen", "Silvennoinen", "Simo", "Simonen", "Sinnemäki", "Sipilä",
        "Sipola", "Sirkesalo", "Sirviö", "Soikkeli", "Soini", "Sonninen", "Soppela", "Sorajoki", "Sormunen", "Sorsa", "Suhonen", "Suikkala", "Summanen", "Suomela", "Suominen", "Suosalo", "Susiluoto", "Sutinen", "Suuronen", "Suutarinen",
        "Suvela", "Sydänmäki", "Syrjä", "Syrjälä", "Säkkinen", "Särkkä", "Taavettila", "Taavila", "Taavitsainen", "Taipale", "Takkala", "Takkula", "Tamminen", "Tammisto", "Tanskanen", "Tapio", "Tapola", "Tarvainen", "Taskinen", "Tastula",
        "Tauriainen", "Tenkanen", "Teppo", "Tervo", "Tervonen", "Teräsniska", "Tiainen", "Tiilikainen", "Timonen", "Toijala", "Toikkanen", "Toivanen", "Tokkola", "Tolonen", "Torkkeli", "Tuisku", "Tukiainen", "Tulkki", "Tuomela", "Tuominen",
        "Tuomisto", "Tuppurainen", "Turpeinen", "Turunen", "Tuutti", "Tynkkynen", "Typpö", "Tyrninen", "Törrö", "Törrönen", "Ukkola", "Ulvila", "Unhola", "Uosukainen", "Urhonen", "Uronen", "Urpalainen", "Urpilainen", "Utriainen", "Uusikari",
        "Uusikylä", "Uusisalmi", "Uusitalo", "Vaara", "Vahala", "Vahanen", "Vahvanen", "Vainio", "Valjakka", "Valo", "Valtanen", "Vanhanen", "Vanhoja", "Varjus", "Vartiainen", "Vasala", "Vauhkonen", "Veijonen", "Veini", "Vennala",
        "Vennamo", "Vepsäläinen", "Vesa", "Vesuri", "Veteläinen", "Vierikko", "Vihtanen", "Viikate", "Viinanen", "Viinikka", "Vilhola", "Viljanen", "Vilkkula", "Vilpas", "Virkkula", "Virkkunen", "Virolainen", "Virtala", "Voutilainen", "Vuokko",
        "Vuorenpää", "Vuorikoski", "Vuorinen", "Vähälä", "Väisälä", "Väisänen", "Välimaa", "Välioja", "Väyrynen", "Väätänen", "Wettenranta", "Wiitanen", "Wirtanen", "Wiskari", "Yliannala", "Ylijoki", "Ylijälä", "Ylikangas", "Ylioja", "Ylitalo",
        "Ylppö", "Yläjoki", "Yrjänen", "Yrjänä", "Yrjölä", "Yrttiaho", "Yömaa", "Äijälä", "Ämmälä", "Änäkkälä", "Äyräs", "Äärynen", "Översti", "Öysti", "Öörni"
    ];
}

<?php

namespace LilPecky\DriverGenerator\Providers\lt_LT;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Abramas", "Abraomas", "Achilas", "Adalbertas", "Adamas", "Adas", "Adolfas", "Adolis", "Adomas", "Adrijus", "Agatas", "Agnius", "Aidas", "Ainius", "Aistis", "Aivaras", "Akimas", "Akvilinas", "Albertas", "Albinas",
        "Albrechtas", "Aldonas", "Aleksandras", "Aleksas", "Alenas", "Alfas", "Alfonsas", "Alfredas", "Algimantas", "Algirdas", "Algis", "Alius", "Almantas", "Almis", "Almonas", "Aloyzas", "Alpas", "Alpis", "Alvidas", "Alvydas",
        "Ambraziejus", "Anatolijus", "Anatolis", "Andreas", "Andriejus", "Andrius", "Andžejus", "Anicetas", "Anisimas", "Antanas", "Antonas", "Antonijus", "Antonis", "Anupras", "Anzelmas", "Apolinaras", "Apolonijus", "Aras", "Arijus", "Arimantas",
        "Aristarchas", "Aristidas", "Arkadijus", "Armantas", "Arminas", "Arnas", "Arnoldas", "Aronas", "Arsenas", "Arsenijus", "Artas", "Artiomas", "Artūras", "Arvaidas", "Arvydas", "Arūnas", "Astijus", "Audrius", "Audronius", "Audrys",
        "Augis", "Augustas", "Augustinas", "Aurelijus", "Aurimas", "Aušrius", "Aušrys", "Baltazaras", "Baltramiejus", "Baltrus", "Balys", "Banguolis", "Bartas", "Bartvydas", "Bazilijus", "Benas", "Benediktas", "Benius", "Benjaminas", "Benonas",
        "Bernardas", "Beržas", "Bijūnas", "Bogdanas", "Boguslavas", "Boleslavas", "Boleslovas", "Bonifacas", "Borisas", "Bronislavas", "Bronislovas", "Bronius", "Brunas", "Brunonas", "Cecilijus", "Celestinas", "Cezaris", "Chaimas", "Charitonas", "Ciprijonas",
        "Dainius", "Daivis", "Dalius", "Damijonas", "Danas", "Dangerutis", "Dangiras", "Danguolė", "Danielius", "Danila", "Danius", "Darijus", "Darius", "Dariušas", "Daumantas", "Davidas", "Deimantas", "Deividas", "Deivis", "Demetrijus",
        "Demjanas", "Denis", "Denisas", "Dimitrijus", "Diomidas", "Dionizas", "Dmitrijus", "Dobilas", "Domantas", "Domas", "Dominykas", "Donaldas", "Donatas", "Dovilis", "Dovis", "Dovydas", "Drąsius", "Drąsutis", "Džeraldas", "Džiraldas",
        "Džiugas", "Džonis", "Edgaras", "Edmundas", "Eduardas", "Edvardas", "Edvinas", "Egidijus", "Eidimantas", "Eidminas", "Eidvydas", "Eimantas", "Eimis", "Einius", "Eitvydas", "Eivydas", "Eldaras", "Eligijus", "Elijus", "Elmantas",
        "Elvinas", "Emanuelis", "Emilijonas", "Emilijus", "Emilis", "Enrikas", "Erazmas", "Erdvilas", "Erichas", "Erikas", "Ernestas", "Ervinas", "Eugenijus", "Eugeniušas", "Evaldas", "Fabijonas", "Fabijus", "Faustas", "Fedoras", "Felicijonas",
        "Felicijus", "Feliksas", "Ferdinandas", "Filipas", "Fiodoras", "Flavijus", "Florijonas", "Foma", "Francas", "Francišekas", "Fredas", "Fridrikas", "Gabrielis", "Gabrielius", "Gailimantas", "Gailius", "Galmantas", "Gasparas", "Gaudenis", "Gaudrimas",
        "Gaudvydas", "Gavrila", "Gavrilas", "Gedas", "Gedgaudas", "Gediminas", "Gedmantas", "Gedmas", "Gedminas", "Gedvaldas", "Gedvilas", "Gedvydas", "Geivydas", "Genadijus", "Gendrius", "Genrichas", "Georgijus", "Geraldas", "Gerardas", "Gerdas",
        "Gerimantas", "Germanas", "Germantas", "Gerutis", "Gervydas", "Giedrius", "Gilbertas", "Gintaras", "Gintas", "Gintautas", "Gintis", "Girius", "Girmantas", "Girvydas", "Girėnas", "Gitanas", "Gordejus", "Gotfridas", "Gracijonas", "Gracijus",
        "Gražvydas", "Grigalius", "Grigas", "Grigorijus", "Gunaras", "Gustas", "Gustavas", "Gustis", "Gvidas", "Gvidonas", "Gytautas", "Gytis", "Haraldas", "Haris", "Haroldas", "Hektoras", "Helmutas", "Henrikas", "Henris", "Herbertas",
        "Herkus", "Hermanas", "Hilarijus", "Horacijus", "Horstas", "Hubertas", "Ignacas", "Ignas", "Ignotas", "Igoris", "Ilja", "Imantas", "Indrius", "Ingvaras", "Inocentas", "Ipolitas", "Irenijus", "Irmantas", "Irtautas", "Irvydas",
        "Isaakas", "Isakas", "Ivanas", "Izidorius", "Izoldas", "Jacekas", "Jakovas", "Jakubas", "Janas", "Janis", "Jankelis", "Janušas", "Jaroslavas", "Jaunius", "Jaunutis", "Jegoras", "Jemeljanas", "Jeronimas", "Jevgenijus", "Ježis",
        "Joanas", "Jogaila", "Jogintas", "Jogirdas", "Jokimas", "Jokūbas", "Jolantas", "Jomantas", "Jonaras", "Jonas", "Jonis", "Joris", "Jorūnas", "Josifas", "Jotautas", "Jovaldas", "Jovaras", "Jovitas", "Judrius", "Julijonas",
        "Julijus", "Julius", "Juljanas", "Juozapas", "Juozapatas", "Juozas", "Juras", "Jurgis", "Jurijus", "Justas", "Justinas", "Juvencijus", "Juzefas", "Jūras", "Jūris", "Kajetonas", "Kajus", "Kalikstas", "Kalnius", "Kamilis",
        "Kaributas", "Karlas", "Karolis", "Karpas", "Kasparas", "Kastantas", "Kastytis", "Kazimieras", "Kazys", "Kimas", "Kipras", "Kiprijonas", "Kirilas", "Klaudas", "Klaudijus", "Klemas", "Klemensas", "Klementas", "Kleopas", "Klevas",
        "Klimas", "Klimentijus", "Kondratas", "Konradas", "Konstantinas", "Kornelijus", "Kostas", "Kovas", "Kozmas", "Krescencijus", "Kristijonas", "Kristinas", "Kristoforas", "Kristupas", "Ksaveras", "Kuprijanas", "Kęstas", "Kęstautas", "Kęstutis", "Kšištofas",
        "Laimis", "Laimonas", "Laimutis", "Laisvis", "Laisvydas", "Laisvūnas", "Lauras", "Laurentijus", "Lauris", "Laurynas", "Lavrentijus", "Leandras", "Leonardas", "Leonas", "Leonidas", "Leopoldas", "Levas", "Libertas", "Linas", "Lionginas",
        "Liubartas", "Liubomiras", "Liucijonas", "Liucijus", "Liudas", "Liudvigas", "Liudvikas", "Liutauras", "Livijus", "Liūtas", "Lozorius", "Lukas", "Lukrecijus", "Makaras", "Makarijus", "Maksas", "Maksimas", "Maksimilijonas", "Mamertas", "Manfredas",
        "Mangirdas", "Mantas", "Mantautas", "Mantrimas", "Mantvydas", "Maratas", "Marcelijus ", "Marcelinas", "Marcelius", "Marekas", "Margiris", "Marianas", "Marijonas", "Marijus", "Marinas", "Marius", "Markas", "Martas", "Martinas", "Martynas",
        "Matas", "Mateušas", "Matvejus", "Mažvydas", "Medardas", "Medas", "Mefodijus", "Melanijus", "Melchioras", "Mendelis", "Merkys", "Merūnas", "Mečislavas", "Mečislovas", "Mečys", "Michailas", "Michalas", "Miglius", "Mikalojus", "Mikas",
        "Mikolajus", "Milanas", "Mildas", "Milvydas", "Mindaugas", "Mingaudas", "Minijus", "Mintaras", "Miroslavas", "Modestas", "Morkus", "Motiejus", "Mozė", "Mykolas", "Naglis", "Napalis", "Napalys", "Napoleonas", "Napolis", "Narcizas",
        "Narimantas", "Narsutis", "Narvydas", "Natanas", "Natas", "Naumas", "Nauris", "Nazaras", "Nazarijus", "Nedas", "Neimantas", "Neivydas", "Nemunas", "Nerijus", "Nerimantas", "Nerimas", "Neringas", "Nerius", "Nidas", "Nikandras",
        "Nikas", "Nikiforas", "Nikita", "Nikodemas", "Nikola", "Nikolajus", "Nilas", "Nojus", "Nomedas", "Norbertas", "Normanas", "Normantas", "Nortautas", "Norvilas", "Norvydas", "Oktavijus", "Olegas", "Oliverius", "Orestas", "Orintas",
        "Oskaras", "Osmundas", "Osvaldas", "Otas", "Otilijus", "Otonas", "Ovidijus", "Pakalnė", "Palemonas", "Palmyras", "Patricijus", "Patrikas", "Paulis", "Paulius", "Petras", "Pijus", "Pilypas", "Pilėnas", "Piotras", "Platonas",
        "Polikarpas", "Polis", "Povilas", "Pranas", "Pranciškus", "Putinas", "Radvila", "Rafaelis", "Rafailas", "Rafalas", "Raigardas", "Raimondas", "Raimundas", "Rainoldas", "Ralfas", "Ramintas", "Ramonas", "Ramūnas", "Rapolas", "Rasius",
        "Raulis", "Redas", "Regimantas", "Reginaldas", "Reinhardas", "Remas", "Remigijus", "Renaldas", "Renatas", "Renius", "Richardas", "Rikardas", "Rimantas", "Rimas", "Rimgaudas", "Rimtas", "Rimtautas", "Rimtis", "Rimvydas", "Rinatas",
        "Ričardas", "Robertas", "Robinas", "Rodrigas", "Rokas", "Rolandas", "Rolfas", "Romanas", "Romas", "Romualdas", "Ronaldas", "Rostislavas", "Rubenas", "Rudolfas", "Rufas", "Rufinas", "Rupertas", "Ruslanas", "Rytas", "Rytautas",
        "Rytis", "Ryšardas", "Rūtenis", "Sabinas", "Sakalas", "Saliamonas", "Salvijus", "Samsonas", "Samuelis", "Samuilas", "Sandras", "Santaras", "Saulenis", "Saulius", "Sava", "Sebastijonas", "Semas", "Semionas", "Serafinas", "Serapinas",
        "Sergejus", "Sergijus", "Seržas", "Severas", "Severinas", "Sidas", "Sidoras", "Sigis", "Sigitas", "Sigizmundas", "Sikstas", "Silverijus", "Silvestras", "Silvijus", "Simas", "Simeonas", "Simonas", "Sirvydas", "Skaidrius", "Skaistis",
        "Skaistutis", "Skalmantas", "Skalvis", "Skirgaila", "Skirmantas", "Skomantas", "Sonetas", "Stanislavas", "Stanislovas", "Stasius", "Stasys", "Stefanas", "Stepanas", "Stepas", "Steponas", "Svajus", "Svajūnas", "Sviatoslavas", "Tadas", "Tadeušas",
        "Tamošius", "Tarasas", "Tauras", "Tautginas", "Tautrimas", "Tautvydas", "Tedas", "Teisius", "Teisutis", "Telesforas", "Teodoras", "Teofilis", "Terentijus", "Tiberijus", "Timas", "Timotiejus", "Timotis", "Timūras", "Titas", "Tomas",
        "Tomašas", "Tonis", "Traidenis", "Trofimas", "Tumas", "Ubaldas", "Ugnius", "Ulrikas", "Uosis", "Urbonas", "Utenis", "Vacius", "Vaclovas", "Vacys", "Vadimas", "Vaidas", "Vaidevutis", "Vaidila", "Vaidis", "Vaidotas",
        "Vaidutis", "Vaigaudas", "Vaigirdas", "Vainius", "Vainoras", "Vaitiekus", "Vaižgantas", "Vakaris", "Valdas", "Valdemaras", "Valdimantas", "Valdis", "Valentas", "Valentinas", "Valerijonas", "Valerijus", "Valius", "Valteris", "Valys", "Vasaris",
        "Vasilijus", "Venantas", "Venjaminas", "Vergilijus", "Verneris", "Vestas", "Viačeslavas", "Vidas", "Vidimantas", "Vidmantas", "Viesulas", "Vigilijus", "Viktas", "Viktoras", "Viktorijus", "Viktorinas", "Vilenas", "Vilgaudas", "Vilhelmas", "Vilijus",
        "Vilius", "Vilmantas", "Vilmas", "Vilnius", "Viltaras", "Viltautas", "Viltenis", "Vincas", "Vincentas", "Vingaudas", "Virgaudas", "Virgilijus", "Virginijus", "Virgintas", "Virgis", "Virgius", "Virmantas", "Vismantas", "Visvaldas", "Visvaldis",
        "Vitalijus", "Vitalis", "Vitalius", "Vitas", "Vitoldas", "Vladas", "Vladimiras", "Vladislavas", "Vladislovas", "Vladlenas", "Voicechas", "Voldemaras", "Vsevolodas", "Vydas", "Vydimantas", "Vydmantas", "Vygandas", "Vygantas", "Vygaudas", "Vygintas",
        "Vygirdas", "Vykantas", "Vykintas", "Vylius", "Vytaras", "Vytas", "Vytautas", "Vytenis", "Vytis", "Vyturys", "Vėjas", "Vėjūnas", "Zacharijus", "Zakarijus", "Zbignevas", "Zdislavas", "Zenius", "Zenonas", "Zigfridas", "Zigmantas",
        "Zigmas", "Zinovijus", "Zygfridas", "Zygmuntas", "Ąžuolas", "Česius", "Česlovas", "Čiogintas", "Šarūnas", "Šiaurys", "Švitrigaila", "Ūdrys", "Ūkas", "Žanas", "Žeimantas", "Žibartas", "Žilvinas", "Žvaigždžius", "Žybartas", "Žydrius",
        "Žydrūnas", "Žygaudas", "Žygimantas", "Žygintas", "Žygis", "Žymantas"
    ];

    protected static array $givenNamesFemale = [
        "Ada", "Adelija", "Adelina", "Adelė", "Adolfa", "Adolfina", "Adriana", "Adrija", "Adrijana", "Agata", "Agnetė", "Agnietė", "Agnieška", "Agnija", "Agnė", "Agota", "Agripina", "Aida", "Aidė", "Aimana",
        "Aimantė", "Aina", "Ainė", "Airida", "Airė", "Aistra", "Aistė", "Aitra", "Aivara", "Akvilina", "Akvilė", "Alana", "Alanta", "Alberta", "Albertina", "Albina", "Alda", "Aldona", "Aleksandra", "Aleksandrina",
        "Aleksė", "Aleta", "Alfonsa", "Alfonsė", "Alfreda", "Algimanta", "Algimantė", "Algina", "Algirdė", "Algutė", "Algė", "Alicija", "Alina", "Aliodija", "Aliona", "Alisa", "Alma", "Alona", "Aloyza", "Alva",
        "Alvita", "Alvyda", "Alvydė", "Alė", "Amalija", "Amanda", "Ana", "Anastasija", "Anastazija", "Andrė", "Andrėja", "Andžela", "Anelė", "Aneta", "Anetė", "Angelina", "Angelė", "Aniceta", "Antanina", "Antonida",
        "Antonija", "Antonina", "Anzelma", "Anė", "Apolinarija", "Apolonija", "Ara", "Ariadnė", "Arija", "Arimantė", "Arina", "Aristida", "Armina", "Arminta", "Arnolda", "Arnė", "Arvydė", "Arūnė", "Asta", "Astija",
        "Astra", "Astrida", "Atėnė", "Audra", "Audronė", "Audrė", "Augustina", "Augustė", "Augutė", "Auksuolė", "Auksė", "Aura", "Aurelija", "Aurora", "Aurėja", "Austra", "Austė", "Austėja", "Aušra", "Aušrinė",
        "Ašara", "Banga", "Banguolė", "Barbara", "Barbora", "Bargailė", "Bartė", "Basia", "Beata", "Beatričė", "Benedikta", "Benigna", "Benita", "Benjamina", "Benė", "Bernadeta", "Bernarda", "Bernardina", "Berta", "Beta",
        "Biruta", "Birutė", "Bitė", "Boleslava", "Boleslova", "Božena", "Brigita", "Bronislava", "Bronislova", "Bronė", "Bytautė", "Cecilija", "Cecilė", "Celestina", "Celina", "Cezarija", "Cilė", "Cintija", "Dagmara", "Dagna",
        "Dagnė", "Daina", "Dainora", "Dainė", "Daiva", "Daivita", "Daivutė", "Dalia", "Dalija", "Dalytė", "Dalė", "Dana", "Dangerutė", "Dangira", "Danguolė", "Dangė", "Daniela", "Danielė", "Danuta", "Danutė",
        "Danė", "Darata", "Daria", "Darija", "Darja", "Daugailė", "Daumantė", "Debora", "Deima", "Deimantė", "Deivilė", "Deivė", "Demetra", "Diana", "Dijana", "Dina", "Dinara", "Dita", "Ditė", "Doloresa",
        "Doma", "Domantė", "Domicelė", "Dominika", "Dominyka", "Dona", "Donalda", "Donata", "Dora", "Dorota", "Dorotė", "Dorotėja", "Dovilė", "Džeinė", "Džeralda", "Džesika", "Džilda", "Džina", "Džiuginta", "Džiugė",
        "Džiulija", "Džiuljeta", "Džordana", "Džulija", "Edita", "Egida", "Egidija", "Eglė", "Eidvilė", "Eimantė", "Einara", "Eiva", "Ela", "Elada", "Elegija", "Elena", "Eleonora", "Elfrida", "Elija", "Eliza",
        "Elma", "Elona", "Elvira", "Elvyra", "Elytė", "Elza", "Elzė", "Elė", "Elžbieta", "Ema", "Emanuelė", "Emilija", "Emilė", "Enrika", "Erdvilė", "Erika", "Ermina", "Erna", "Ernesta", "Ernestina",
        "Ervina", "Esmeralda", "Estela", "Estera", "Eufrozina", "Eugenija", "Eulalija", "Eva", "Evalda", "Evelina", "Fabija", "Faina", "Faustina", "Felicija", "Felicita", "Feliksa", "Fernanda", "Filomena", "Freda", "Frida",
        "Gabeta", "Gabija", "Gabriela", "Gabrielė", "Gailiūtė", "Gailutė", "Gailė", "Gaiva", "Gaivilė", "Gaja", "Galia", "Galina", "Gaudencija", "Gaudrė", "Geda", "Gedimina", "Gediminė", "Gedmantė", "Gedmintė", "Gedvyda",
        "Geida", "Geismantė", "Geistė", "Gelena", "Gelmė", "Gema", "Gena", "Genadija", "Gendrė", "Genovaitė", "Genovefa", "Genutė", "Genė", "Georgina", "Gerarda", "Gerda", "Germantė", "Gerta", "Gertruda", "Gertrūda",
        "Gertė", "Geta", "Giedra", "Giedrė", "Gilda", "Gilija", "Gilma", "Gilė", "Gina", "Gintara", "Gintarė", "Gintautė", "Gintė", "Girstautė", "Girstė", "Gita", "Gitana", "Gitė", "Gizela", "Glorija",
        "Gluosnė", "Goda", "Gotautė", "Gotė", "Gracija", "Grasilda", "Gražina", "Gražvyda", "Gražyna", "Greta", "Grita", "Grytė", "Grėtė", "Gunda", "Guoda", "Gustina", "Gustė", "Gytė", "Gėlė", "Halina",
        "Hana", "Helena", "Helga", "Henrieta", "Henrietė", "Henrika", "Herma", "Hiacinta", "Hilda", "Honorata", "Hortenzija", "Ida", "Idalija", "Ieva", "Ievutė", "Ignota", "Ignė", "Ilma", "Ilmena", "Ilona",
        "Ilzė", "Imantė", "Ina", "Indra", "Indraja", "Indrė", "Inesa", "Ineta", "Inga", "Ingeborga", "Ingita", "Ingrida", "Ingė", "Ira", "Irena", "Irida", "Iridė", "Irina", "Irma", "Irmanta",
        "Irmantė", "Irmina", "Irmutė", "Irta", "Irtautė", "Irutė", "Isabela", "Iva", "Ivana", "Iveta", "Ivona", "Iza", "Izabela", "Izabelė", "Izidora", "Izidė", "Izolda", "Jadviga", "Jadvyga", "Jadzė",
        "Jana", "Janina", "Januarija", "Janė", "Jaunutė", "Jaunė", "Jekaterina", "Jelena", "Jelizaveta", "Jeronima", "Jevdokija", "Jieva", "Joana", "Jogailė", "Jogilė", "Jogintė", "Jola", "Jolanta", "Joleta", "Jolita",
        "Jomantė", "Jomilė", "Jonė", "Jorigė", "Jorė", "Jorūnė", "Jotvingė", "Jovilė", "Jovita", "Judita", "Judra", "Judrė", "Juliana", "Julija", "Julijana", "Julijona", "Julita", "Julytė", "Julė", "Juozapina",
        "Juozapota", "Juozė", "Jura", "Jurga", "Jurgina", "Jurgita", "Jurgė", "Justina", "Justė", "Juta", "Juventa", "Juzefa", "Jūra", "Jūratė", "Jūrė", "Kaja", "Kamila", "Kamilė", "Karina", "Karla",
        "Karmela", "Karolina", "Karolė", "Kasia", "Kastytė", "Kastė", "Katarina", "Katažina", "Katažyna", "Katerina", "Katia", "Katrė", "Kazimiera", "Kazimira", "Kazytė", "Kazė", "Kira", "Klara", "Klarisa", "Klaudija",
        "Klema", "Klementina", "Kleopa", "Kleopatra", "Klotilda", "Konstancija", "Konstantina", "Kornelija", "Kostė", "Kotryna", "Krista", "Kristijona", "Kristina", "Kristė", "Krystyna", "Ksavera", "Ksaverija", "Ksenija", "Kunigunda", "Kęstė",
        "Lada", "Laima", "Laimona", "Laimutė", "Laimė", "Laisvyda", "Laisvydė", "Laisvė", "Laisvūnė", "Lana", "Lara", "Larisa", "Lauma", "Laura", "Laurena", "Laurentina", "Lauryna", "Leandra", "Leda", "Leila",
        "Lelija", "Lena", "Leokadija", "Leona", "Leonarda", "Leonida", "Leonija", "Leonila", "Leonilė", "Leonora", "Leontina", "Leonė", "Leopolda", "Leta", "Leticija", "Leva", "Levutė", "Liana", "Liauda", "Liberta",
        "Lida", "Lidija", "Liepa", "Lijana", "Liliana", "Lilija", "Lilijana", "Lilė", "Lina", "Linda", "Lingailė", "Linė", "Liongina", "Lionė", "Liuba", "Liubarta", "Liubovė", "Liucija", "Liucilė", "Liucina",
        "Liucė", "Liuda", "Liudmila", "Liudvika", "Liutaura", "Liva", "Liveta", "Livija", "Liza", "Lizaveta", "Liūnė", "Lola", "Lolita", "Longina", "Lora", "Lorena", "Loreta", "Lorija", "Lucyna", "Luisa",
        "Luiza", "Luknė", "Lukrecija", "Lėja", "Lėta", "Magda", "Magdalena", "Magdė", "Mairita", "Maja", "Malda", "Malgožata", "Malvina", "Mamerta", "Mamertina", "Mantautė", "Mantvydė", "Mantė", "Manuela", "Mara",
        "Marcelija", "Marcelina", "Marcelė", "Marcijona", "Marcė", "Margarita", "Margita", "Mariana", "Marija", "Marijona", "Marilė", "Marina", "Marita", "Marta", "Martina", "Martyna", "Marytė", "Marė", "Matilda", "Matriona",
        "Mažvydė", "Meda", "Medeina", "Medėja", "Megana", "Megė", "Meilutė", "Meilė", "Melanija", "Melda", "Melisa", "Mečislava", "Mečislova", "Michalina", "Miglė", "Mika", "Mikalina", "Mila", "Milda", "Mildutė",
        "Milena", "Milvydė", "Mindaugė", "Mingailė", "Minija", "Mintara", "Mintarė", "Mintautė", "Mintė", "Mira", "Mirga", "Mirta", "Modesta", "Mona", "Monika", "Morta", "Mykolė", "Mėnulė", "Mėta", "Nadežda",
        "Nadia", "Nadiežda", "Nadė", "Naktis", "Narciza", "Nastasija", "Nastazija", "Nastia", "Nastė", "Nata", "Natalija", "Neda", "Neimantė", "Nela", "Nelė", "Nemira", "Nemunė", "Nendrė", "Neringa", "Nerita",
        "Nida", "Nijolė", "Nika", "Nikė", "Nila", "Nilė", "Nina", "Ninelė", "Noja", "Nomeda", "Nona", "Nora", "Norberta", "Norgailė", "Norma", "Normantė", "Nortė", "Norvilė", "Norvyda", "Odeta",
        "Ofelija", "Oksana", "Oktavija", "Oktiabrina", "Olga", "Olimpiada", "Olimpija", "Oliva", "Olivija", "Ona", "Onorata", "Onutė", "Onė", "Oresta", "Orinta", "Otilija", "Ovidija", "Palma", "Palmira", "Palmyra",
        "Pamela", "Pasaka", "Patricija", "Paula", "Paulina", "Paulė", "Pelagija", "Pelagėja", "Petra", "Petronė", "Petronėlė", "Petrutė", "Petrė", "Pija", "Polina", "Polė", "Povilė", "Pranciška", "Pranė", "Praskovja",
        "Prima", "Pulcherija", "Rachilė", "Rada", "Radmila", "Radvilė", "Radvyda", "Rafaela", "Rafaelė", "Raimonda", "Raimunda", "Raistė", "Rakelė", "Raminta", "Ramona", "Ramunė", "Ramutė", "Ramybė", "Ramūnė", "Rasa",
        "Raselė", "Rasuolė", "Rasvita", "Rasytė", "Rasė", "Rebeka", "Reda", "Rega", "Regimanta", "Regimantė", "Regina", "Rema", "Remigija", "Rena", "Renalda", "Renata", "Renatė", "Renė", "Rikarda", "Rima",
        "Rimanta", "Rimantė", "Rimgailė", "Rimgaudė", "Rimtautė", "Rimtė", "Rimutė", "Rimvilė", "Rimvyda", "Rimvydė", "Rina", "Ringa", "Ringailė", "Rita", "Ritė", "Ričarda", "Roberta", "Robertina", "Rolanda", "Roma",
        "Romana", "Romina", "Romualda", "Romė", "Rosita", "Roza", "Rozalija", "Rožė", "Rufina", "Rugilė", "Ruslana", "Rusnė", "Ruta", "Ryta", "Rytė", "Rėda", "Rūstė", "Rūta", "Rūtelė", "Rūtenė",
        "Rūtilė", "Sabina", "Sabrina", "Salomėja", "Salvija", "Salvinija", "Salvė", "Salė", "Samanta", "Sandra", "Santara", "Sauga", "Saulena", "Saulenė", "Saulutė", "Saulytė", "Saulė", "Selena", "Selma", "Serafima",
        "Serafina", "Serena", "Severija", "Severina", "Sibilė", "Siga", "Sigita", "Sigrida", "Sigutė", "Silva", "Silverija", "Silvestra", "Silvija", "Sima", "Simona", "Sintija", "Sintė", "Siuzana", "Skaidra", "Skaidrė",
        "Skaiste", "Skaistė", "Skaiva", "Skalvė", "Skirgailė", "Skirma", "Skirmanta", "Skirmantė", "Skolastika", "Smilga", "Smiltė", "Snaigė", "Snežana", "Sniegena", "Snieguolė", "Sniegė", "Sofa", "Sofija", "Solveiga", "Sonata",
        "Soneta", "Sonia", "Sotera", "Stanislava", "Stanislova", "Staselė", "Stasė", "Stefa", "Stefanija", "Stela", "Stepė", "Sulamita", "Svaja", "Svajonė", "Sveta", "Svetlana", "Taika", "Taisa", "Taisija", "Tamara",
        "Tania", "Tatjana", "Taura", "Tautvilė", "Tautvydė", "Tautė", "Teklė", "Teodora", "Teofilė", "Tera", "Teresė", "Tereza", "Terezija", "Terėzija", "Tesa", "Tilija", "Tina", "Toma", "Ugnė", "Ula",
        "Ulijona", "Uljana", "Ulrika", "Ulė", "Una", "Undinė", "Unė", "Uoginta", "Upė", "Ursula", "Urtė", "Uršula", "Uršulė", "Vaclava", "Vaclova", "Vacė", "Vaida", "Vaidilutė", "Vaidota", "Vaidotė",
        "Vaiga", "Vaigalė", "Vainora", "Vaiva", "Vakarė", "Valda", "Valdemara", "Valdonė", "Valdė", "Valentina", "Valeriana", "Valerija", "Valerijona", "Valia", "Valė", "Vanda", "Varvara", "Vasa", "Vasara", "Vasarė",
        "Vasilisa", "Vena", "Venanta", "Venera", "Venta", "Vera", "Verena", "Vergilija", "Veronika", "Verutė", "Vesta", "Vida", "Vidimanta", "Vidmanta", "Vidmantė", "Vigilija", "Vija", "Vijolė", "Vika", "Vikta",
        "Viktorija", "Viktorina", "Viktė", "Vilena", "Vilhelma", "Vilhelmina", "Vilija", "Vilita", "Vilma", "Vilmanta", "Vilmantė", "Vilnė", "Viltara", "Viltautė", "Viltenė", "Viltė", "Vilė", "Vilūnė", "Vincenta", "Vincentė",
        "Vincė", "Viola", "Violeta", "Violina", "Virdžinija", "Virga", "Virginija", "Virmantė", "Vismantė", "Vita", "Vitalija", "Vitalė", "Vitė", "Vlada", "Vladislava", "Vladislova", "Vladlena", "Vladė", "Vyda", "Vydmantė",
        "Vygantė", "Vygintė", "Vykintė", "Vylė", "Vyta", "Vytautė", "Vytenė", "Vytė", "Vėja", "Vėjūnė", "Vėtra", "Zabelė", "Zanė", "Zelma", "Zenė", "Zigfrida", "Zigmantė", "Zina", "Zinaida", "Zita",
        "Zofija", "Zoja", "Zosė", "Zuzana", "Zylė", "Šalna", "Šalnė", "Šarlota", "Šarūnė", "Šatrija", "Šilė", "Šviesa", "Šviesė", "Švitrigailė", "Ūla", "Žana", "Žaneta", "Žara", "Žeimantė", "Žemyna",
        "Žibuoklė", "Žibutė", "Žiedė", "Žilvinė", "Živilė", "Žoržeta", "Žydronė", "Žydrė", "Žydrūnė", "Žygimantė", "Žyginta", "Žymantė"
    ];

    protected static array $familyNames = [
        "Adamkus", "Aleksa", "Bajoras", "Balčiūnas", "Baranauskas", "Bartkus", "Brazauskas", "Butkus", "Dambrauskas", "Dovydaitis", "Gailius", "Gedgaudas", "Giedraitis", "Girnius", "Gudaitis", "Ivanovas", "Jankauskas", "Janušaitis", "Jonauskas", "Juozapaitis",
        "Juška", "Kairys", "Kazlauskas", "Kazokas", "Klimas", "Kubilius", "Kudirka", "Kukauskas", "Landsbergis", "Lapė", "Laurinaitis", "Lukoševičius", "Macijauskas", "Makauskas", "Malinauskas", "Margevičius", "Matulaitis", "Mazuronis", "Mačiulis", "Mickevičius",
        "Mikalauskas", "Mikulėnas", "Milaknis", "Mockus", "Morkūnas", "Navickas", "Norkus", "Oželis", "Pakalniškis", "Paplauskas", "Pavilonis", "Petrauskas", "Pečiulis", "Pocius", "Rackauskas", "Ragauskas", "Rakauskas", "Rauba", "Rimkus", "Sabaliauskas",
        "Sakalauskas", "Saulius", "Simkus", "Sinkevičius", "Sirutavičius", "Stankevičius", "Stankus", "Stonkus", "Sudavičius", "Sukys", "Sutkus", "Tamošaitis", "Tamulaitis", "Taraškevičius", "Tautkus", "Tumėnas", "Urbšys", "Valiulis", "Vasiliauskas", "Venclovas",
        "Vilimas", "Vilkelis", "Vilčinskas", "Vingrys", "Vyšniauskas", "Zabulionis", "Zalatorius", "Zigmantas", "Zukas", "Zulonas", "Čepulis", "Šakalienė", "Šaltenis", "Šeduikis", "Šeraitis", "Šimkus", "Šimulionis", "Širvinskis", "Šliogeris"
    ];

    protected static array $familyNamesMale = [
        "Baranauskas", "Butkus", "Jankauskas", "Kateiva", "Kavaliauskas", "Kazlauskas", "Paulauskas", "Petrauskas", "Pocius", "Sakalauskas", "Stankevičius", "Urbonas", "Vasiliauskas", "Žukauskas"
    ];

    protected static array $familyNamesFemale = [
        "Balčiūnaitė", "Butkutė", "Jankauskaitė", "Jankauskienė", "Kavaliauskaitė", "Kavaliauskienė", "Kazlauskaitė", "Kazlauskienė", "Lukoševičiūtė", "Navickienė", "Paulauskienė", "Petrauskaitė", "Petrauskienė", "Pociūtė", "Stankevičienė", "Stankevičiūtė", "Urbonienė", "Vasiliauskaitė", "Vasiliauskienė", "Žukauskienė"
    ];
}

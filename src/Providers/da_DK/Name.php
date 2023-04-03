<?php

namespace LilPecky\RandomPersonGenerator\Providers\da_DK;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aage", "Adam", "Ahmad", "Ahmed", "Aksel", "Albert", "Alex", "Alexander", "Alf", "Alfred", "Ali", "Allan", "Anders", "Andreas", "Anker", "Anton", "Arne", "Arnold", "Arthur", "Asbjørn",
        "Asger", "Aske", "August", "Axel", "Bendt", "Benjamin", "Benny", "Bent", "Bernhard", "Birger", "Bjarke", "Bjarne", "Bjørn", "Bo", "Brian", "Bruno", "Børge", "Carl", "Carlo", "Carsten",
        "Casper", "Charles", "Chr", "Chris", "Christian", "Christoffer", "Christopher", "Claus", "Dan", "Daniel", "David", "Dennis", "Ebbe", "Edmund", "Edvard", "Egon", "Eigil", "Einar", "Ejgil", "Ejler",
        "Ejnar", "Ejner", "Ejvind", "Elias", "Emanuel", "Emil", "Erik", "Erland", "Erling", "Ernst", "Esben", "Evald", "Felix", "Ferdinand", "Finn", "Flemming", "Folmer", "Frank", "Freddy", "Frederik",
        "Frits", "Fritz", "Frode", "Georg", "Gerhard", "Gert", "Gunnar", "Gunner", "Gurli", "Gustav", "Hans", "Harald", "Harry", "Hartvig", "Hassan", "Heine", "Heinrich", "Helge", "Helmer", "Helmuth",
        "Henning", "Henrik", "Henry", "Herluf", "Herman", "Hermann", "Hjalmar", "Holger", "Hugo", "Ib", "Ibrahim", "Ingemann", "Ingolf", "Ingvard", "Ivan", "Jack", "Jacob", "Jakob", "Jan", "Janne",
        "Jannik", "Jens", "Jeppe", "Jesper", "Jimmi", "Jimmy", "Joachim", "Johan", "Johannes", "John", "Johnny", "Jon", "Jonas", "Jonathan", "Josef", "Jul", "Julius", "Jørgen", "Jørn", "Kai",
        "Kaj", "Karl", "Karlo", "Karsten", "Kasper", "Keld", "Kenneth", "Kent", "Kevin", "Kjeld", "Klaus", "Knud", "Kresten", "Kristian", "Kristoffer", "Kurt", "Lars", "Lasse", "Laurids", "Laurits",
        "Lauritz", "Laust", "Leif", "Lennart", "Leo", "Leon", "Liam", "Louis", "Lucas", "Ludvig", "Lukas", "Lynge", "Mads", "Magnus", "Malthe", "Marc", "Marcus", "Marinus", "Marius", "Mark",
        "Markus", "Martin", "Martinus", "Mathias", "Matthias", "Max", "Michael", "Mikael", "Mike", "Mikkel", "Mogens", "Mohamad", "Mohamed", "Mohammad", "Morten", "Nick", "Nicklas", "Nicolai", "Nicolaj", "Niels",
        "Niklas", "Nikolaj", "Nils", "Olaf", "Olav", "Ole", "Oliver", "Oluf", "Oscar", "Oskar", "Osvald", "Otto", "Ove", "Palle", "Patrick", "Paul", "Peder", "Per", "Peter", "Philip",
        "Poul", "Povl", "Preben", "Rasmus", "Rene", "René", "Richard", "Richardt", "Robert", "Robin", "Rolf", "Ruben", "Rudolf", "Rune", "Sebastian", "Sigfred", "Sigurd", "Simon", "Simone", "Sofus",
        "Steen", "Stefan", "Steffen", "Sten", "Stig", "Sune", "Sven", "Svend", "Søren", "Tage", "Theis", "Theodor", "Thierry", "Thomas", "Thor", "Thorkild", "Thorvald", "Tim", "Tobias", "Tom",
        "Tommy", "Tonny", "Torben", "Tore", "Troels", "Uffe", "Ulf", "Ulrik", "Vagn", "Vagner", "Valdemar", "Vang", "Verner", "Victor", "Viggo", "Viktor", "Vilhelm", "Villiam", "Villy", "Walther",
        "Werner", "Wilhelm", "William", "Willy", "Yannick", "Yousef", "Zacharias", "Åge", "Åke", "Øivind", "Øjvind", "Ørnulf", "Øyvind"
    ];

    public static array $givenNamesFemale = [
        "Aase", "Agathe", "Agnes", "Agnete", "Agnethe", "Alberte", "Alexandra", "Alfrida", "Alice", "Alicia", "Alma", "Alvilda", "Amalie", "Amanda", "Amelia", "Andrea", "Ane", "Anette", "Anine", "Anita",
        "Anja", "Ann", "Anna", "Annalise", "Anne", "Anne-Lise", "Anne-Marie", "Anne-Mette", "Annelise", "Annette", "Anni", "Annie", "Annika", "Anny", "Antoinette", "Asta", "Astrid", "Augusta", "Aurora", "Benedikte",
        "Bente", "Berit", "Bertha", "Betina", "Bettina", "Betty", "Birgit", "Birgitte", "Birte", "Birthe", "Bitten", "Bodil", "Bolette", "Britt", "Britta", "Camilla", "Carina", "Carla", "Caroline", "Cathrine",
        "Cecilie", "Charlotte", "Christa", "Christen", "Christiane", "Christina", "Christine", "Clara", "Conni", "Connie", "Conny", "Dagmar", "Dagny", "Diana", "Ditte", "Dora", "Doris", "Dorte", "Dorthe", "Dorthea",
        "Ebba", "Edel", "Edith", "Eleonora", "Eli", "Elin", "Eline", "Elinor", "Elisa", "Elisabeth", "Elise", "Ella", "Ellen", "Ellinor", "Elly", "Elna", "Elsa", "Else", "Elsebeth", "Elvira",
        "Emilie", "Emma", "Emmy", "Erna", "Ester", "Esther", "Eva", "Evelyn", "Frede", "Frederikke", "Freja", "Frida", "Gerda", "Gertrud", "Gitte", "Grete", "Grethe", "Gudrun", "Gunhild", "Gunvor",
        "Hanna", "Hanne", "Hansine", "Hardy", "Harriet", "Hedvig", "Heidi", "Helen", "Helena", "Helene", "Helga", "Helle", "Henny", "Henriette", "Herdis", "Hilda", "Iben", "Ida", "Ilse", "Ina",
        "Inga", "Inge", "Inge-Lise", "Ingeborg", "Ingelise", "Inger", "Ingrid", "Irene", "Iris", "Irma", "Isabella", "Jane", "Janni", "Jannie", "Jeanette", "Jeanne", "Jenny", "Jensine", "Jes", "Jette",
        "Joan", "Johanna", "Johanne", "Jonna", "Josefine", "Josephine", "Juel", "Juliane", "Julie", "Jytte", "Jørgine", "Kaja", "Kamilla", "Kamma", "Karen", "Karin", "Karina", "Karla", "Karoline", "Kate",
        "Kathrine", "Katja", "Katrine", "Ketty", "Kim", "Kirsten", "Kirsti", "Kirstine", "Kjersti", "Klara", "Krista", "Kristen", "Kristiane", "Kristina", "Kristine", "Laila", "Laura", "Laurine", "Lea", "Lena",
        "Lene", "Lilian", "Lilli", "Lillian", "Lilly", "Linda", "Line", "Lis", "Lisa", "Lisbet", "Lisbeth", "Lise", "Liselotte", "Lissi", "Lissy", "Liv", "Lizzie", "Lone", "Lotte", "Louise",
        "Lydia", "Lykke", "Lærke", "Magda", "Magdalene", "Mai", "Maiken", "Maj", "Maj-Britt", "Maja", "Majbritt", "Majken", "Malene", "Maren", "Margit", "Margrete", "Margrethe", "Maria", "Mariane", "Marianne",
        "Marie", "Marlene", "Martha", "Martine", "Mary", "Mathilde", "Matilde", "Merete", "Merethe", "Meta", "Metha", "Mette", "Mia", "Michelle", "Mie", "Mille", "Minna", "Mona", "Monica", "Nadia",
        "Nancy", "Nanna", "Nicoline", "Nielsine", "Nikoline", "Nina", "Ninna", "Oda", "Olga", "Oline", "Olivia", "Orla", "Paula", "Pauline", "Pernille", "Petra", "Petrea", "Petrine", "Pia", "Poula",
        "Pouline", "Ragna", "Ragnhild", "Randi", "Rasmine", "Rebecca", "Rebekka", "Rigmor", "Rikke", "Rita", "Rosa", "Rose", "Ruth", "Sabrina", "Sandra", "Sanne", "Sara", "Sarah", "Selma", "Severin",
        "Sidsel", "Signe", "Sigrid", "Silke", "Simone", "Sine", "Sofia", "Sofie", "Solveig", "Solvejg", "Sonja", "Sophie", "Stephanie", "Stine", "Susan", "Susanne", "Sussi", "Sørine", "Tanja", "Thea",
        "Theodora", "Therese", "Thi", "Thora", "Thyra", "Tina", "Tine", "Tove", "Trine", "Ulla", "Ulrike", "Valborg", "Vera", "Vibeke", "Victoria", "Viktoria", "Vilhelmine", "Viola", "Vita", "Vivi",
        "Vivian", "Winnie", "Yrsa", "Yvonne"
    ];

    public static array $middleNames = [
        "Aagaard", "Abildgaard", "Andersen", "Astrup", "Bach", "Bagge", "Bak", "Balle", "Bang", "Bank", "Bay", "Bech", "Beck", "Berg", "Bille", "Birch", "Birk", "Bisgaard", "Bjerg", "Bjerre",
        "Bjerregaard", "Bjerring", "Bjørn", "Bloch", "Bonde", "Borch", "Borg", "Borup", "Brandt", "Bredahl", "Brinch", "Brink", "Brix", "Bro", "Brogaard", "Bruhn", "Brun", "Bruun", "Brøndum", "Buch",
        "Buhl", "Bundgaard", "Busk", "Buus", "Bæk", "Bækgaard", "Bødker", "Bøgelund", "Bøgh", "Bülow", "Christensen", "Christiansen", "Clausen", "Dahl", "Dalgaard", "Dalsgaard", "Dam", "Damgaard", "Damkjær", "Damsgaard",
        "Daugaard", "Degn", "Due", "Egede", "Egelund", "Egholm", "Elkjær", "Ellegaard", "Engelbrecht", "Fabricius", "Falk", "Fischer", "Fisker", "Fogh", "Friis", "Frost", "Fuglsang", "Gade", "Gammelgaard", "Gram",
        "Green", "Greve", "Groth", "Grønbæk", "Grønlund", "Guldager", "Guldberg", "Haahr", "Hald", "Hammer", "Hansen", "Hartmann", "Haugaard", "Hauge", "Hedegaard", "Hein", "Hjort", "Hjorth", "Hoffmann", "Holm",
        "Holmgaard", "Holst", "Hougaard", "Hovgaard", "Husted", "Hvid", "Hviid", "Hyldgaard", "Høgh", "Høj", "Højer", "Højgaard", "Højlund", "Høyer", "Ingemann", "Iversen", "Jacobsen", "Jensen", "Jessen", "Johansen",
        "Juel", "Juhl", "Juul", "Jørgensen", "Kaae", "Kaas", "Kamp", "Kirk", "Kirkegaard", "Kjeldgaard", "Kjeldsen", "Kjær", "Kjærgaard", "Kjærsgaard", "Klarskov", "Klitgaard", "Knudsen", "Koch", "Kofod", "Kofoed",
        "Kold", "Korsgaard", "Kragh", "Krarup", "Kristensen", "Krog", "Krogh", "Krogsgaard", "Kronborg", "Kruse", "Kvist", "Ladefoged", "Lange", "Larsen", "Laursen", "Lehmann", "Lerche", "Leth", "Lind", "Lindberg",
        "Linde", "Lindegaard", "Lindgaard", "Lindholm", "Lund", "Lundgaard", "Lundsgaard", "Lykkegaard", "Lyng", "Madsen", "Meldgaard", "Meyer", "Mikkelsen", "Mohamed", "Mose", "Munch", "Munk", "Mølgaard", "Møller", "Mørch",
        "Mørk", "Nedergaard", "Nielsen", "Nissen", "Nyborg", "Nygaard", "Nyholm", "Nymann", "Nøhr", "Nørgaard", "Nørregaard", "Nørskov", "Olesen", "Olsen", "Overgaard", "Pedersen", "Petersen", "Pihl", "Pilgaard", "Ploug",
        "Poulsen", "Qvist", "Rahbek", "Rask", "Rasmussen", "Ravn", "Riber", "Riis", "Rohde", "Rosenberg", "Rosendahl", "Rosendal", "Rye", "Rytter", "Rømer", "Sand", "Sandberg", "Schack", "Schmidt", "Schou",
        "Schrøder", "Schultz", "Skaarup", "Skjødt", "Skou", "Skov", "Skovgaard", "Skriver", "Skytte", "Sloth", "Smedegaard", "Sommer", "Sonne", "Stampe", "Steen", "Stokholm", "Storgaard", "Storm", "Strøm", "Svane",
        "Sylvest", "Søgaard", "Søndergaard", "Sønderskov", "Sørensen", "Tang", "Thomsen", "Thorup", "Toft", "Torp", "Vad", "Vedel", "Vendelbo", "Vestergaard", "Vestergård", "Vinther", "Weber", "Westergaard", "Winther", "Wulff",
        "Yde", "Ørum", "Østergaard", "Østergård"
    ];

    public static array $familyNames = [
        "Aagaard", "Abildgaard", "Abrahamsen", "Adamsen", "Ahmad", "Ahmed", "Albertsen", "Albrechtsen", "Ali", "Andersen", "Andersson", "Andreasen", "Andreassen", "Andresen", "Antonsen", "Asmussen", "Astrup", "Axelsen", "Bach", "Bager",
        "Bagge", "Bagger", "Bak", "Balle", "Bang", "Bay", "Bech", "Beck", "Bendixen", "Bendtsen", "Bengtsson", "Bentsen", "Bentzen", "Berg", "Bergmann", "Bertelsen", "Berthelsen", "Bidstrup", "Birch", "Birk",
        "Bisgaard", "Bjerg", "Bjerre", "Bjerregaard", "Bjerrum", "Bjørn", "Bloch", "Blom", "Boesen", "Boisen", "Bonde", "Borch", "Borg", "Borup", "Boye", "Boysen", "Brandt", "Brink", "Brix", "Bro",
        "Broberg", "Brodersen", "Brogaard", "Bruhn", "Bruun", "Brøndum", "Buch", "Buhl", "Bundgaard", "Busch", "Busk", "Buus", "Bæk", "Bødker", "Bøgh", "Børgesen", "Callesen", "Carlsen", "Carlsson", "Carstensen",
        "Caspersen", "Christensen", "Christiansen", "Christoffersen", "Christophersen", "Clausen", "Clemmensen", "Dahl", "Dalgaard", "Dall", "Dalsgaard", "Dam", "Damgaard", "Damm", "Damsgaard", "Danielsen", "Daugaard", "Davidsen", "Degn", "Dideriksen",
        "Dinesen", "Ditlevsen", "Drejer", "Due", "Dupont", "Duus", "Ebbesen", "Eliasen", "Elkjær", "Enevoldsen", "Erichsen", "Eriksen", "Ernst", "Esbensen", "Eskildsen", "Espersen", "Fabricius", "Falk", "Fischer", "Fisker",
        "Foged", "Fogh", "Frandsen", "Frank", "Frederiksen", "Friis", "Frost", "Fuglsang", "Gade", "Gammelgaard", "Geertsen", "Gotfredsen", "Gram", "Graversen", "Gravesen", "Green", "Gregersen", "Greve", "Groth", "Grøn",
        "Gundersen", "Haagensen", "Hald", "Hammer", "Hansen", "Hansen-Krone", "Hansson", "Hartmann", "Hassan", "Haugaard", "Hauge", "Hedegaard", "Hein", "Hemmingsen", "Hendriksen", "Henningsen", "Henriksen", "Hermann", "Hermansen", "Hertz",
        "Hinrichsen", "Hjort", "Hjorth", "Hoffmann", "Holm", "Holmberg", "Holmgaard", "Holst", "Holt", "Hougaard", "Hussain", "Husted", "Hvid", "Hvidt", "Hviid", "Høgh", "Høj", "Højbjerg", "Højgaard", "Høyer",
        "Ibsen", "Ipsen", "Isaksen", "Iversen", "Jacobsen", "Jakobsen", "Jansen", "Jensen", "Jensenius", "Jensenius-Kruse", "Jeppesen", "Jepsen", "Jeremiassen", "Jespersen", "Jessen", "Jochumsen", "Joensen", "Johannesen", "Johannessen", "Johannsen",
        "Johansen", "Johansson", "Johnsen", "Jonassen", "Josefsen", "Juhl", "Justesen", "Juul", "Jæger", "Jønsson", "Jørgensdatter", "Jørgensen", "Jürgensen", "Kaas", "Karlsen", "Karlsson", "Kaspersen", "Keller", "Khan", "Kirk",
        "Kirkegaard", "Kjeldgaard", "Kjeldsen", "Kjær", "Kjærgaard", "Kjærsgaard", "Kjøller", "Klausen", "Klitgaard", "Knudsen", "Koch", "Kock", "Koefoed", "Kofod", "Kofoed", "Korsgaard", "Krag", "Kragelund", "Kragh", "Kramer",
        "Krarup", "Kristensen", "Kristiansen", "Kristoffersen", "Krog", "Krogh", "Krogsgaard", "Kruse", "Kvist", "Ladefoged", "Lang", "Lange", "Larsen", "Larsen-Kjer", "Larsson", "Lassen", "Laugesen", "Lauridsen", "Lauritsen", "Lauritzen",
        "Laursen", "Laustsen", "Lehmann", "Leth", "Lind", "Lindberg", "Lindegaard", "Lorentsen", "Lorentzen", "Lorenzen", "Ludvigsen", "Lund", "Lundberg", "Lundgaard", "Lundsgaard", "Lyberth", "Lykke", "Lynge", "Madsen", "Magnussen",
        "Marcussen", "Mark", "Markussen", "Martinsen", "Martinussen", "Mathiasen", "Mathiassen", "Mathiesen", "Matthiesen", "Matzen", "Meier", "Meldgaard", "Meyer", "Michaelsen", "Michelsen", "Mikkelsen", "Mogensen", "Mohamed", "Mortensen", "Mouritsen",
        "Mouritzen", "Munch", "Munk", "Mølgaard", "Møller", "Mørch", "Mørk", "Müller", "Nedergaard", "Nguyen", "Nicolaisen", "Nicolajsen", "Nielsen", "Nikolajsen", "Nilsson", "Nissen", "Nyborg", "Nygaard", "Nørgaard", "Nørregaard",
        "Nørskov", "Odgaard", "Olesen", "Olsen", "Olsson", "Ottesen", "Ottosen", "Overgaard", "Ovesen", "Pallesen", "Paulsen", "Pedersen", "Persson", "Petersen", "Petersson", "Philipsen", "Pihl", "Pilgaard", "Poulsen", "Povlsen",
        "Qvist", "Rahbek", "Rask", "Rasmussen", "Raun", "Ravn", "Riis", "Roed", "Rohde", "Rosenberg", "Rømer", "Rønne", "Samuelsen", "Sand", "Sandberg", "Schmidt", "Schneider", "Schou", "Schrøder", "Schultz",
        "Schwartz", "Severinsen", "Simonsen", "Sivertsen", "Skaarup", "Skjødt", "Skou", "Skov", "Skovgaard", "Skriver", "Skytte", "Skøtt", "Sloth", "Smed", "Smidt", "Smith", "Sommer", "Sonne", "Steen", "Steffensen",
        "Stokholm", "Storgaard", "Storm", "Strøm", "Svane", "Svendsen", "Svenningsen", "Svensson", "Søgaard", "Søndergaard", "Sørensen", "Terkelsen", "Terp", "Therkelsen", "Therkildsen", "Thomasen", "Thomassen", "Thomsen", "Thorsen", "Thorup",
        "Thrane", "Thuesen", "Thygesen", "Thøgersen", "Toft", "Tolstrup", "Torp", "Tran", "Troelsen", "Truelsen", "Tønnesen", "Vad", "Vang", "Vester", "Vestergaard", "Vestergård", "Vilhelmsen", "Villadsen", "Villumsen", "Vinther",
        "Voss", "Wagner", "Weber", "Westergaard", "Westh", "Willumsen", "Wind", "Winther", "Wolff", "Wulff", "Würtz", "Yde", "Østergaard"
    ];
}

<?php

namespace LilPecky\DriverGenerator\Providers\sv_SE;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Abraham", "Adam", "Adrian", "Agaton", "Agne", "Albert", "Albin", "Aldor", "Alex", "Alexander", "Alexis", "Alexius", "Alf", "Alfons", "Alfred", "Algot", "Allan", "Alrik", "Alvar", "Alve",
        "Amandus", "Anders", "Andreas", "André", "Anselm", "Anshelm", "Antero", "Anton", "Antonius", "Arne", "Arnold", "Aron", "Arthur", "Artur", "Arvid", "Assar", "Astor", "August", "Augustin", "Axel",
        "Bengt", "Bengt-Göran", "Bengt-Olof", "Bengt-Åke", "Benjamin", "Benny", "Berndt", "Berne", "Bernhard", "Bernt", "Bert", "Berth", "Berthold", "Bertil", "Bill", "Billy", "Birger", "Bjarne", "Björn", "Bo",
        "Boris", "Bror", "Bruno", "Brynolf", "Börje", "Carl", "Carl-Axel", "Carl-Erik", "Carl-Gustaf", "Carl-Gustav", "Carl-Johan", "Casper", "Charles", "Christer", "Christian", "Christoffer", "Claes", "Claes-Göran", "Clarence", "Clas",
        "Conny", "Conrad", "Crister", "Curt", "Dag", "Dan", "Daniel", "David", "Denis", "Dennis", "Dick", "Donald", "Douglas", "Ebbe", "Eddie", "Eddy", "Edgar", "Edmund", "Edvard", "Edvin",
        "Efraim", "Egon", "Eilert", "Einar", "Eje", "Ejnar", "Elias", "Elis", "Ellert", "Elmer", "Elof", "Elon", "Elov", "Elving", "Elvir", "Emanuel", "Emil", "Enar", "Engelbert", "Engelbrekt",
        "Enok", "Erhard", "Eric", "Erik", "Erland", "Erling", "Ernfrid", "Ernst", "Esbjörn", "Eskil", "Eugen", "Eugén", "Evald", "Eve", "Evert", "Fabian", "Felix", "Ferdinand", "Filip", "Fingal",
        "Finn", "Folke", "Frank", "Frans", "Franz", "Fred", "Fredrik", "Fridolf", "Friedrich", "Fritiof", "Fritjof", "Frits", "Fritz", "Gabriel", "Georg", "George", "Gerhard", "Gert", "Gideon", "Gilbert",
        "Gillis", "Glenn", "Gottfrid", "Gotthard", "Greger", "Gudmund", "Gunder", "Gunnar", "Gustaf", "Gustav", "Göran", "Görgen", "Gösta", "Göte", "Hadar", "Halvar", "Halvard", "Hampus", "Hans", "Hans-Erik",
        "Hans-Olof", "Hans-Åke", "Harald", "Hardy", "Harry", "Hartvig", "Hasse", "Heinrich", "Heinz", "Helge", "Helmer", "Henning", "Henric", "Henrik", "Henry", "Herbert", "Heribert", "Herman", "Hilbert", "Hilding",
        "Hilmer", "Hjalmar", "Holger", "Holmfrid", "Hubert", "Hugo", "Håkan", "Inge", "Ingemar", "Ingmar", "Ingvald", "Ingvar", "Isak", "Isidor", "Ivan", "Ivar", "Jack", "Jacob", "Jakob", "James",
        "Jan", "Jan-Eric", "Jan-Erik", "Jan-Olof", "Jan-Olov", "Jan-Ove", "Jan-Åke", "Janne", "Jarl", "Jean", "Jens", "Jerker", "Jerry", "Jesper", "Jim", "Jimmy", "Joachim", "Joacim", "Joakim", "Joel",
        "Johan", "Johannes", "John", "Johnny", "Johny", "Jon", "Jonas", "Jonathan", "Jonny", "Josef", "Josefin", "Juhani", "Julian", "Julius", "Justus", "Jöns", "Jöran", "Jörg", "Jörgen", "Kai",
        "Kaj", "Kalevi", "Karl", "Karl-Axel", "Karl-Erik", "Karl-Gunnar", "Karl-Gustaf", "Karl-Gustav", "Karl-Johan", "Kennert", "Kennet", "Kenneth", "Kenny", "Kent", "Kenth", "Kjell", "Kjell-Åke", "Klas", "Knut", "Konrad",
        "Konstantin", "Krister", "Kristian", "Kristoffer", "Kurt", "Kåre", "Lage", "Lambert", "Lars", "Lars-Eric", "Lars-Erik", "Lars-Gunnar", "Lars-Göran", "Lars-Olof", "Lars-Olov", "Lars-Ove", "Lars-Åke", "Lasse", "Laurentius", "Leander",
        "Leif", "Lennart", "Leo", "Leon", "Leonard", "Leopold", "Levi", "Levin", "Liam", "Linné", "Linus", "Loke", "Lorentz", "Louis", "Love", "Ludvig", "Magni", "Magnus", "Malkolm", "Malte",
        "Manfred", "Manne", "Mans", "Marcus", "Marian", "Marius", "Markus", "Martin", "Mathias", "Mats", "Matti", "Mattias", "Matts", "Maurits", "Mauritz", "Max", "Melker", "Micael", "Michael", "Mickael",
        "Mikael", "Mikko", "Morgan", "Måns", "Mårten", "Napoleon", "Natanael", "Nicklas", "Niclas", "Niklas", "Nikolaus", "Nils", "Nils-Erik", "Noel", "Nore", "Odd", "Ola", "Olaus", "Olav", "Olavi",
        "Ole", "Oliver", "Olle", "Olof", "Olov", "Orvar", "Oscar", "Oskar", "Ossian", "Osvald", "Otto", "Ove", "Owe", "Patric", "Patrick", "Patrik", "Paul", "Peder", "Per", "Per-Anders",
        "Per-Arne", "Per-Erik", "Per-Ola", "Per-Olof", "Per-Olov", "Per-Åke", "Percy", "Peter", "Petrus", "Petter", "Philip", "Pierre", "Pontus", "Pär", "Ragnar", "Ragnvald", "Ralf", "Ralph", "Rasmus", "Raymond",
        "Reidar", "Reine", "Reinhold", "Reino", "Richard", "Rickard", "Rikard", "Robert", "Robin", "Roger", "Roine", "Roland", "Rolf", "Ronald", "Ronnie", "Ronny", "Roy", "Ruben", "Rudolf", "Runar",
        "Rune", "Runo", "Rutger", "Salomon", "Sam", "Samuel", "Sanfrid", "Sebastian", "Set", "Seth", "Seved", "Severin", "Sigfrid", "Sigmund", "Signar", "Sigurd", "Sigvard", "Simon", "Sivert", "Sixten",
        "Sonny", "Staffan", "Stanley", "Stefan", "Stellan", "Sten", "Stephan", "Steve", "Stig", "Sture", "Sune", "Svante", "Sven", "Sven-Erik", "Sven-Olof", "Sven-Olov", "Sven-Åke", "Sverker", "Sölve", "Sören",
        "Tage", "Ted", "Teodor", "Theo", "Theodor", "Thomas", "Thor", "Thorbjorn", "Thorbjörn", "Thord", "Thore", "Thorsten", "Thorvald", "Thure", "Tobias", "Toivo", "Tom", "Tomas", "Tommy", "Tonny",
        "Tony", "Tor", "Torbjörn", "Tord", "Tore", "Torgny", "Torkel", "Torsten", "Torvald", "Tryggve", "Ture", "Tyko", "Ulf", "Ulrik", "Uno", "Urban", "Valdemar", "Valentin", "Valfrid", "Vallentin",
        "Valter", "Veine", "Verner", "Victor", "Vidar", "Viggo", "Viking", "Viktor", "Vilgot", "Vilhelm", "Villiam", "Villy", "Vincent", "Vitalis", "Waldemar", "Walter", "Werner", "Wilhelm", "William", "Willy",
        "Xander", "Yngve", "Yonas", "Zacharias", "Åke", "Örjan", "Östen"
    ];

    protected static array $givenNamesFemale = [
        "Ada", "Adela", "Adele", "Adelia", "Adina", "Adolfina", "Adéle", "Agda", "Agnes", "Agneta", "Aina", "Aino", "Albertina", "Alexandra", "Alfhild", "Alfrida", "Alice", "Alida", "Ally", "Alma",
        "Alva", "Amalia", "Amanda", "Amelia", "Andrea", "Anette", "Angela", "Anita", "Anja", "Ann", "Ann-Britt", "Ann-Charlott", "Ann-Charlotte", "Ann-Christin", "Ann-Christine", "Ann-Katrin", "Ann-Kristin", "Ann-Louise", "Ann-Margret", "Ann-Mari",
        "Ann-Marie", "Ann-Sofi", "Ann-Sofie", "Anna", "Anna-Carin", "Anna-Greta", "Anna-Karin", "Anna-Lena", "Anna-Lisa", "Anna-Maria", "Anna-Stina", "Anne", "Anne-Charlotte", "Anne-Marie", "Anneli", "Annelie", "Annette", "Anni", "Annica", "Annie",
        "Annika", "Annikki", "Anny", "Antonia", "Arvida", "Asta", "Astrid", "Augusta", "Aurora", "Axelia", "Axelina", "Barbro", "Beata", "Beatrice", "Beda", "Berit", "Bernhardina", "Berta", "Betty", "Birgit",
        "Birgitta", "Blenda", "Bodil", "Boel", "Borghild", "Brita", "Britt", "Britt-Inger", "Britt-Louise", "Britt-Mari", "Britt-Marie", "Britta", "Camilla", "Carin", "Carina", "Carita", "Carola", "Carolina", "Caroline", "Catarina",
        "Catharina", "Cathrine", "Catrin", "Cecilia", "Charlott", "Charlotta", "Charlotte", "Christel", "Christin", "Christina", "Christine", "Clara", "Clary", "Constance", "Cristina", "Daga", "Dagmar", "Dagny", "Daisy", "Davida",
        "Desideria", "Desirée", "Diana", "Disa", "Dora", "Doris", "Dorotea", "Ebba", "Edit", "Edith", "Edla", "Eira", "Eivor", "Ejvor", "Elaine", "Elena", "Eleonor", "Eleonora", "Elfrida", "Elida",
        "Elin", "Elina", "Elinor", "Elisabet", "Elisabeth", "Elise", "Ella", "Ellen", "Ellinor", "Elly", "Elma", "Elna", "Elsa", "Else", "Else-Marie", "Elsi", "Elsie", "Elsy", "Elvi", "Elvira",
        "Elvy", "Emelia", "Emelie", "Emerentia", "Emilia", "Emma", "Emmy", "Erika", "Erna", "Ester", "Esther", "Estrid", "Ethel", "Eufemia", "Eugenia", "Eva", "Eva-Britt", "Eva-Lena", "Eva-Lotta", "Eva-Marie",
        "Evelina", "Evelyn", "Evy", "Ewa", "Fanny", "Felicia", "Filippa", "Florence", "Fredrika", "Frida", "Frideborg", "Gabriella", "Gerd", "Gerda", "Gertie", "Gertrud", "Gisela", "Greta", "Gudrun", "Gull",
        "Gull-Britt", "Gullan", "Gullbritt", "Gulli", "Gullvi", "Gully", "Gun", "Gun-Britt", "Gunborg", "Gunbritt", "Gunda", "Gunhild", "Gunilla", "Gunn", "Gunnel", "Gunni", "Gunvor", "Gurli", "Gustava", "Gärd",
        "Görel", "Göta", "Hanna", "Harriet", "Hedvig", "Helen", "Helena", "Helene", "Helfrid", "Helga", "Helmi", "Helny", "Helén", "Heléne", "Henny", "Henrietta", "Henriette", "Herta", "Hilda", "Hildegard",
        "Hildur", "Hillevi", "Hilma", "Hjördis", "Hulda", "Ida", "Ines", "Inez", "Ing-Britt", "Ing-Mari", "Ing-Marie", "Inga", "Inga-Britt", "Inga-Lena", "Inga-Lill", "Inga-Lisa", "Inga-Maj", "Ingalill", "Ingbritt", "Ingeborg",
        "Ingegerd", "Ingegärd", "Ingela", "Inger", "Ingrid", "Ingvor", "Irene", "Iris", "Irma", "Iréne", "Isabella", "Jane", "Janet", "Jeanette", "Jennie", "Jenny", "Jessica", "Johanna", "Jonna", "Josefin",
        "Josefina", "Judit", "Judith", "Julia", "Juliana", "Justina", "Kaarina", "Kajsa", "Karin", "Karina", "Karla", "Karola", "Karolina", "Katarina", "Katharina", "Katrin", "Katrina", "Kersti", "Kerstin", "Klara",
        "Konstantia", "Kornelia", "Kristin", "Kristina", "Kristine", "Laila", "Laura", "Leila", "Lena", "Leontina", "Liisa", "Lilian", "Lill", "Lillemor", "Lillian", "Lilly", "Lina", "Linda", "Linnea", "Linnéa",
        "Lisa", "Lisbet", "Lisbeth", "Lise-Lott", "Lise-Lotte", "Liselott", "Liselotte", "Lizzie", "Lola", "Lotta", "Louise", "Lovisa", "Lucia", "Lydia", "Madeleine", "Madelene", "Magda", "Magdalena", "Magnhild", "Maj",
        "Maj-Britt", "Maj-Lis", "Maja", "Majbritt", "Majken", "Majlis", "Majvor", "Malin", "Malvina", "Margaret", "Margareta", "Margareth", "Margaretha", "Margit", "Margita", "Margot", "Margret", "Margreta", "Mari", "Mari-Ann",
        "Maria", "Mariana", "Mariann", "Marianne", "Marie", "Marie-Louise", "Mariette", "Marika", "Marina", "Marion", "Marit", "Marita", "Marja", "Marjatta", "Marlene", "Marta", "Martha", "Martina", "Mary", "Mathilda",
        "Matilda", "Maud", "May", "Mia", "Michaela", "Mikaela", "Mildred", "Mimmi", "Mirjam", "Moa", "Mona", "Monica", "Monika", "Märit", "Märta", "Märtha", "Naemi", "Naima", "Nancy", "Nanna",
        "Nanny", "Natalia", "Nathalie", "Nelly", "Nina", "Nora", "Olga", "Olivia", "Ottilia", "Paula", "Paulina", "Pauline", "Pernilla", "Petra", "Petronella", "Pia", "Ragna", "Ragnhild", "Rakel", "Rebecka",
        "Regina", "Renée", "Rigmor", "Rita", "Ros-Mari", "Ros-Marie", "Rosa", "Rose", "Rose-Marie", "Rosita", "Runa", "Rut", "Ruth", "Sabina", "Saga", "Sally", "Sandra", "Sanna", "Sara", "Selma",
        "Serafia", "Sibylla", "Sigbritt", "Signe", "Signhild", "Sigrid", "Siri", "Siv", "Sofi", "Sofia", "Sofie", "Solbritt", "Solveig", "Solvig", "Sonja", "Stina", "Susann", "Susanna", "Susanne", "Suzanne",
        "Svea", "Sylvia", "Synnöve", "Syster", "Tea", "Tekla", "Terese", "Teresia", "Therese", "Theresia", "Therése", "Thyra", "Tilde", "Tina", "Tora", "Torborg", "Tove", "Tyra", "Ulla", "Ulla-Britt",
        "Ulla-Britta", "Ulrica", "Ulrika", "Ursula", "Valborg", "Vanja", "Vega", "Vendela", "Vendla", "Vera", "Veronica", "Veronika", "Victoria", "Viktoria", "Vilhelmina", "Vilma", "Viola", "Virginia", "Vivan", "Viveca",
        "Viveka", "Vivi", "Vivi-Ann", "Vivi-Anne", "Vivian", "Viviann", "Vivianne", "Wilhelmina", "Ylva", "Yvonne", "Älva", "Åsa", "Åse", "Örjan"
    ];

    protected static array $familyNames = [
        "Abrahamsson", "Ahlberg", "Alm", "Andersson", "Andreasson", "Arvidsson", "Axelsson", "Bengtsson", "Berg", "Berggren", "Berglund", "Bergman", "Bergqvist", "Bergström", "Björk", "Björklund", "Blom", "Blomqvist", "Carlsson", "Claesson",
        "Dahl", "Dahlberg", "Danielsson", "Ek", "Eklund", "Ekström", "Eliasson", "Engström", "Eriksson", "Falk", "Forsberg", "Fransson", "Fredriksson", "Gunnarsson", "Gustafsson", "Haglund", "Hall", "Hallberg", "Hansen", "Hansson",
        "Hedlund", "Hellström", "Henriksson", "Hermansson", "Holm", "Holmberg", "Holmgren", "Holmqvist", "Håkansson", "Isaksson", "Ivarsson", "Jakobsson", "Jansson", "Johansson", "Jonasson", "Jonsson", "Jönsson", "Karlsson", "Kjellberg", "Kjellström",
        "Knutsson", "Kronberg", "Larsson", "Lilja", "Lind", "Lindberg", "Lindgren", "Lindholm", "Lindqvist", "Lindström", "Ljungberg", "Lund", "Lundberg", "Lundgren", "Lundin", "Lundqvist", "Lundström", "Löfgren", "Magnusson", "Martinsson",
        "Mattsson", "Moberg", "Månsson", "Mårtensson", "Nilsson", "Norberg", "Nordin", "Nordström", "Nyberg", "Nyström", "Olofsson", "Olsson", "Palm", "Persson", "Pettersson", "Pålsson", "Rosenberg", "Sahlberg", "Samuelsson", "Sandberg",
        "Sandström", "Sjöberg", "Sjögren", "Sjöholm", "Sjöström", "Skoglund", "Ström", "Strömberg", "Sundberg", "Sundqvist", "Sundström", "Svensson", "Söderberg", "Södergren", "Söderlund", "Viklund", "Wallin", "Westerberg", "Westerlund", "Wikström",
        "Winqvist", "Åberg", "Åkesson", "Åström", "Öberg", "Östberg", "Östlund", "Öström"
    ];
}

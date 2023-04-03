<?php

namespace LilPecky\DriverGenerator\Providers\id_ID;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Abdul", "Abyasa", "Adam", "Ade", "Adhiarja", "Adi", "Adiarja", "Adika", "Adikara", "Adinata", "Aditya", "Agus", "Ahmad", "Ajiman", "Ajimat", "Ajimin", "Ajiono", "Akarsana", "Akbar", "Alambana",
        "Aldi", "Among", "Anggabaya", "Anom", "Argono", "Ari", "Arief", "Arif", "Aris", "Arman", "Armando", "Arnold", "Arsipatra", "Arta", "Artanto", "Artawan", "Asep", "Asirwada", "Asirwanda", "Aslijan",
        "Asmadi", "Asman", "Asmianto", "Asmuni", "Aswani", "Atma", "Atmaja", "Bagas", "Bagiya", "Bagus", "Bagya", "Bahuraksa", "Bahuwarna", "Bahuwirya", "Bajragin", "Bakda", "Bakiadi", "Bakianto", "Bakidin", "Bakijan",
        "Bakiman", "Bakiono", "Bakti", "Baktiadi", "Baktianto", "Baktiono", "Bala", "Balamantri", "Balangga", "Balapati", "Balidin", "Balijan", "Bambang", "Banara", "Banawa", "Banawi", "Bancar", "Budi", "Cagak", "Cager",
        "Cahya", "Cahyadi", "Cahyanto", "Cahyo", "Cahyono", "Caket", "Cakrabirawa", "Cakrabuana", "Cakrajiya", "Cakrawala", "Cakrawangsa", "Candra", "Candrakanta", "Capa", "Caraka", "Carub", "Catur", "Caturangga", "Cawisadi", "Cawisono",
        "Cawuk", "Cayadi", "Cecep", "Cemani", "Cemeti", "Cemplunk", "Cengkal", "Cengkir", "Chandra", "Dacin", "Dadap", "Dadi", "Dafi", "Dagel", "Daliman", "Dalimin", "Daliono", "Damar", "Damu", "Danang",
        "Daniswara", "Danu", "Danuja", "Dariati", "Darijan", "Darimin", "Darmaji", "Darman", "Darmana", "Darmanto", "Darsirah", "Dartono", "Daru", "Daruna", "Daryani", "Dasa", "Deden", "Denny", "Dewa", "Dewanto",
        "Dicky", "Digdaya", "Dimas", "Dimaz", "Dipa", "Dirja", "Dodi", "Dodo", "Doni", "Dono", "Drajat", "Dwi", "Edi", "Edison", "Edward", "Ega", "Eja", "Eka", "Eko", "Elon",
        "Eluh", "Elvin", "Eman", "Emas", "Embuh", "Emil", "Emin", "Emong", "Empluk", "Endang", "Endra", "Enteng", "Erik", "Estiawan", "Estiono", "Fadli", "Fajar", "Farhan", "Fathur", "Fauzi",
        "Ferdi", "Fikri", "Gada", "Gadang", "Gading", "Gaduh", "Gaiman", "Galak", "Galang", "Galar", "Galih", "Galiono", "Galuh", "Galur", "Gaman", "Gamani", "Gamanto", "Gambira", "Gamblang", "Ganda",
        "Gandewa", "Gandi", "Ganep", "Gangsa", "Gangsar", "Ganjaran", "Gantar", "Gara", "Garan", "Garang", "Garda", "Gatot", "Gatra", "Gede", "Ghani", "Gilang", "Ginanjar", "Gunawan", "Guntur", "Hadi",
        "Hafiz", "Hairyanto", "Halim", "Hamzah", "Handoko", "Handoyo", "Hansen", "Hardana", "Hardi", "Hari", "Harimurti", "Harja", "Harjasa", "Harjaya", "Harjo", "Harsana", "Harsanto", "Harsaya", "Hartaka", "Hartana",
        "Harto", "Hasan", "Hasim", "Hasta", "Hendra", "Hendri", "Hendrik", "Heri", "Heru", "Hery", "Heryanto", "Himawan", "Ian", "Ibrahim", "Ibrani", "Ibun", "Ichsan", "Idham", "Ihsan", "Ikhsan",
        "Ikin", "Ilyas", "Imam", "Indra", "Irfan", "Irnanto", "Irsad", "Irsan", "Irwan", "Iskandar", "Ismail", "Ivan", "Iwan", "Jabal", "Jaeman", "Jafar", "Jaga", "Jagapati", "Jagaraga", "Jail",
        "Jaiman", "Jais", "Jaka", "Jalu", "Jamal", "James", "Jamil", "Januar", "Jarwa", "Jarwadi", "Jarwi", "Jasmani", "Jaswadi", "Jati", "Jatmiko", "Jaya", "Jayadi", "Jayeng", "Jefri", "Jinawi",
        "Jindra", "Johan", "John", "Joko", "Joni", "Jono", "Jufri", "Jujun", "Julian", "Jumadi", "Jumari", "Kacung", "Kadir", "Kairav", "Kajen", "Kala", "Kalim", "Kamal", "Kambali", "Kamidin",
        "Kamil", "Kanda", "Kardi", "Kariman", "Karja", "Karma", "Karman", "Karna", "Karsa", "Karsana", "Karta", "Kartika", "Karya", "Kasim", "Kasiran", "Kasusra", "Kawaca", "Kawaya", "Kayun", "Kemal",
        "Kemba", "Kenari", "Kenes", "Kenzie", "Kiki", "Koko", "Komar", "Kuncara", "Kunthara", "Kurnia", "Kusuma", "Labuh", "Laksana", "Lalu", "Lamar", "Lanang", "Langgeng", "Lanjar", "Lantar", "Lasmanto",
        "Lasmono", "Laswi", "Latif", "Lega", "Legawa", "Lembah", "Leo", "Liman", "Limar", "Luhung", "Luis", "Lukita", "Lukman", "Luluh", "Lulut", "Lurhur", "Lutfan", "Luthfi", "Luwar", "Luwes",
        "M. Adi", "M. Iqbal", "M. Yusuf", "Mahdi", "Mahesa", "Mahfud", "Mahmud", "Makara", "Makmur", "Makuta", "Malik", "Maman", "Manah", "Mangara", "Mansur", "Maras", "Marcel", "Mardiyanto", "Margana", "Mariadi",
        "Mario", "Marsito", "Marsudi", "Martaka", "Martana", "Martani", "Maruf", "Marwata", "Maryadi", "Maryanto", "Masyhur", "Maulana", "Mauludi", "Mawardi", "Maya", "Miftah", "Mitra", "Mohamad", "Muhammad", "Mujur",
        "Mukhlis", "Mulya", "Mulyadi", "Mulyanto", "Mulyono", "Mumpuni", "Munawar", "Muni", "Mursinin", "Mursita", "Mursyid", "Murti", "Musa", "Mustafa", "Mustika", "Mustofa", "Najam", "Najib", "Nalar", "Nanda",
        "Naradi", "Nardi", "Narji", "Nasab", "Nasim", "Nasrullah", "Nico", "Niyaga", "Nrima", "Nugraha", "Nugroho", "Nyana", "Nyoman", "Okta", "Okto", "Olga", "Oman", "Omar", "Opan", "Opung",
        "Oscar", "Oskar", "Ozy", "Paiman", "Panca", "Pandu", "Pangeran", "Pangestu", "Panji", "Pardi", "Parman", "Perkasa", "Praba", "Prabawa", "Prabowo", "Prabu", "Prakosa", "Pramono", "Pranata", "Pranawa",
        "Prasetya", "Prasetyadi", "Prasetyo", "Prastowo", "Prayitna", "Prayoga", "Prayogo", "Prima", "Purwa", "Purwadi", "Purwanto", "Putu", "Raden", "Radika", "Radit", "Raditya", "Rafi", "Rafid", "Raharja", "Rahman",
        "Rahmat", "Raihan", "Rama", "Rangga", "Ratno", "Reksa", "Rendy", "Reno", "Respati", "Reza", "Ricky", "Ridho", "Ridwan", "Rio", "Rizal", "Rizki", "Rosman", "Rudi", "Rusman", "Saadat",
        "Sabar", "Sabri", "Saeful", "Saiful", "Saka", "Sakti", "Salman", "Samsul", "Sandy", "Sapto", "Satria", "Satya", "Sayed", "Setya", "Sidiq", "Sigit", "Simon", "Slamet", "Sofyan", "Soleh",
        "Sudarsono", "Sugeng", "Sulaiman", "Surya", "Suryadi", "Syafruddin", "Syamsul", "Tasdik", "Tasnim", "Taswir", "Taufan", "Taufik", "Teddy", "Tedi", "Teguh", "Timbul", "Tirta", "Tirtayasa", "Tomi", "Tono",
        "Toto", "Tri", "Tugiman", "Uda", "Udin", "Umar", "Umay", "Umaya", "Unggul", "Upik", "Usman", "Utama", "Vega", "Vero", "Viktor", "Viman", "Vino", "Vinsen", "Virman", "Wadi",
        "Wage", "Wahyu", "Wakiman", "Waluyo", "Wardaya", "Wardi", "Warji", "Warsa", "Warsita", "Warta", "Wasis", "Wawan", "Wibowo", "Wira", "Wisnu", "Xanana", "Yahya", "Yoga", "Yono", "Yosef",
        "Yusuf"
    ];

    protected static array $givenNamesFemale = [
        "Ade", "Agnes", "Aisyah", "Ajeng", "Alia", "Alika", "Alinda", "Almira", "Amalia", "Amanda", "Amelia", "Ami", "Ana", "Anastasia", "Angel", "Angela", "Ani", "Anisa", "Anita", "Annisa",
        "Ariani", "Arin", "Arum", "Asep", "Aurora", "Ayu", "Azalea", "Belinda", "Bella", "Berlian", "Betania", "Bunga", "Calista", "Candra", "Cantika", "Carla", "Cathy", "Celine", "Cempaka", "Chelsea",
        "Ciaobella", "Cici", "Cindy", "Cinta", "Cinthia", "Citra", "Clara", "Cornelia", "Dalima", "Dea", "Deasy", "Devi", "Dewi", "Dhini", "Diah", "Dian", "Diana", "Dina", "Dinda", "Dini",
        "Dita", "Dwi", "Eka", "Eli", "Elisa", "Elisabeth", "Ella", "Ellis", "Elly", "Elma", "Elsa", "Elvina", "Emma", "Endah", "Eni", "Erika", "Eva", "Evi", "Faizah", "Farah",
        "Farhunnisa", "Farida", "Fathonah", "Febi", "Fenny", "Fitri", "Fitria", "Fitriani", "Gabriella", "Galuh", "Gasti", "Gawati", "Genta", "Ghaliyati", "Gilda", "Gina", "Gita", "Hafshah", "Halima", "Hamima",
        "Hana", "Handayani", "Hani", "Happy", "Harini", "Hasna", "Henny", "Hesti", "Hilda", "Humaira", "Icha", "Ida", "Ifa", "Ika", "Ikke", "Ilsa", "Ina", "Indah", "Indri", "Ines",
        "Intan", "Ira", "Irena", "Iriana", "Irma", "Ismi", "Ivonne", "Jamalia", "Jane", "Janet", "Jasmin", "Jasmine", "Jelita", "Jenny", "Jesica", "Jessica", "Jihan", "Juju", "Juli", "Julia",
        "Julianti", "Kamaria", "Kamila", "Kani", "Kania", "Karen", "Karimah", "Karina", "Kartika", "Kartini", "Kasih", "Kasiyah", "Kayla", "Keisha", "Kezia", "Kiandra", "Kiki", "Laila", "Lala", "Lalita",
        "Laras", "Latika", "Lia", "Liana", "Lidya", "Lili", "Lina", "Linda", "Lingga", "Lintang", "Lisa", "Lita", "Maida", "Maimunah", "Mala", "Malia", "Malika", "Mamik", "Maria", "Maya",
        "Mega", "Meli", "Melinda", "Mella", "Melly", "Michelle", "Mila", "Mira", "Mita", "Monica", "Murni", "Mutia", "Nabila", "Nadia", "Nadine", "Najwa", "Nani", "Natalia", "Nia", "Niken",
        "Nilam", "Nina", "Nova", "Novi", "Nunung", "Nur", "Nurul", "Ocha", "Oktavia", "Oliva", "Olivia", "Oni", "Ophelia", "Padma", "Padmi", "Paramita", "Paris", "Patricia", "Paulin", "Pia",
        "Puji", "Puput", "Puspa", "Puti", "Putri", "Qori", "Queen", "Rachel", "Rahayu", "Rahmi", "Raina", "Raisa", "Ratih", "Ratna", "Restu", "Riana", "Rika", "Rina", "Rini", "Ririn",
        "Rita", "Rizka", "Ros", "Rosalia", "Rosita", "Rusdi", "Ruth", "Sabrina", "Sadina", "Safina", "Sakura", "Salimah", "Salsabila", "Salwa", "Samiah", "Sandra", "Sarah", "Sari", "Septi", "Shakila",
        "Shania", "Silvia", "Siska", "Siti", "Sofia", "Sonya", "Sri", "Suci", "Sulastri", "Sulis", "Syahrini", "Talia", "Tami", "Tania", "Tantri", "Tari", "Tasya", "Tiara", "Tina", "Tira",
        "Titi", "Titin", "Tuti", "Uchita", "Ulfa", "Uli", "Ulva", "Ulya", "Umi", "Unjani", "Usyi", "Vanesa", "Vanya", "Vera", "Veronika", "Vicky", "Victoria", "Vina", "Violet", "Vivi",
        "Wahyu", "Wani", "Wida", "Widya", "Winda", "Wirda", "Wulan", "Yance", "Yani", "Yanti", "Yasmin", "Yenny", "Yessi", "Yulia", "Yuliana", "Yuni", "Yunita", "Yurike", "Zaenab", "Zahra",
        "Zalindra", "Zamira", "Zelaya", "Zelda", "Zizi", "Zulaikha", "Zulfa"
    ];

    protected static array $familyNames = [
        "Abdullah", "Adi", "Adnan", "Adrianto", "Agus", "Ali", "Amir", "Ananda", "Angga", "Arifin", "Budi", "Cahyono", "Chandra", "Damanik", "Darma", "Daryanto", "Daud", "Dharma", "Dwi", "Firdaus",
        "Gumilar", "Gunawan", "Hakim", "Hamid", "Harahap", "Harianto", "Hartanto", "Hidayat", "Ibrahim", "Idris", "Ihsan", "Imanuel", "Joko", "Kartono", "Kusuma", "Laksana", "Lazuardi", "Lestari", "Lubis", "Makarim",
        "Mansur", "Marpaung", "Martono", "Maulana", "Maulidiyah", "Mukti", "Mulia", "Mulyadi", "Muslim", "Nasution", "Nugraha", "Nurhadi", "Nurhayati", "Octavia", "Prabowo", "Pranata", "Pribadi", "Prihastomo", "Purnomo", "Putra",
        "Rachman", "Ramadhan", "Ramli", "Ratnawati", "Riyanto", "Rochman", "Rohman", "Rosadi", "Santoso", "Saputra", "Sari", "Sastro", "Setiadi", "Setiawan", "Setyawan", "Simanjuntak", "Simbolon", "Sinaga", "Siregar", "Sitorus",
        "Sudirman", "Sugianto", "Suhadi", "Suharto", "Sukarno", "Sukiman", "Sukri", "Sumadi", "Supriadi", "Suprianto", "Suryadi", "Susanto", "Syarif", "Tambunan", "Tanjung", "Taufik", "Triyono", "Wahyudi", "Wardoyo", "Wibowo",
        "Widodo", "Wijaya", "Winarno", "Wongso", "Yulianto", "Yusuf", "Zainuddin", "Zulkarnain"
    ];

    protected static array $familyNamesMale = [
        "Adriansyah", "Anggriawan", "Ardianto", "Budiman", "Budiyanto", "Dabukke", "Damanik", "Dongoran", "Firgantoro", "Firmansyah", "Gunarto", "Gunawan", "Habibi", "Hakim", "Halim", "Hardiansyah", "Haryanto", "Hidayanto", "Hidayat", "Hutagalung",
        "Hutapea", "Hutasoit", "Irawan", "Iswahyudi", "Jailani", "Januar", "Kurniawan", "Kusumo", "Kuswoyo", "Latupono", "Lazuardi", "Mahendra", "Maheswara", "Mandala", "Mangunsong", "Mansur", "Manullang", "Marbun", "Marpaung", "Maryadi",
        "Maulana", "Megantara", "Mustofa", "Nababan", "Nainggolan", "Najmudin", "Napitupulu", "Narpati", "Nashiruddin", "Natsir", "Nugroho", "Pangestu", "Permadi", "Prabowo", "Pradana", "Pradipta", "Prakasa", "Pranowo", "Prasasta", "Prasetya",
        "Prasetyo", "Pratama", "Prayoga", "Putra", "Rajasa", "Rajata", "Ramadan", "Saefullah", "Salahudin", "Samosir", "Santoso", "Saptono", "Saputra", "Saragih", "Setiawan", "Sihombing", "Sihotang", "Simanjuntak", "Simbolon", "Sinaga",
        "Sirait", "Siregar", "Sitompul", "Sitorus", "Situmorang", "Suryono", "Suwarno", "Tamba", "Tampubolon", "Tarihoran", "Thamrin", "Utama", "Uwais", "Wacana", "Wahyudin", "Waluyo", "Wasita", "Waskita", "Wibisono", "Wibowo",
        "Widodo", "Wijaya", "Winarno", "Zulkarnain"
    ];

    protected static array $familyNamesFemale = [
        "Agustina", "Andriani", "Anggraini", "Aryani", "Astuti", "Farida", "Fujiati", "Halimah", "Handayani", "Hariyah", "Hartati", "Haryanti", "Hasanah", "Hassanah", "Hastuti", "Kusmawati", "Kuswandari", "Lailasari", "Laksita", "Laksmiwati",
        "Lestari", "Mandasari", "Mardhiyah", "Maryati", "Mayasari", "Melani", "Mulyani", "Namaga", "Nasyiah", "Nasyidah", "Novitasari", "Nuraini", "Nurdiyanti", "Oktaviani", "Padmasari", "Palastri", "Permata", "Pertiwi", "Prastuti", "Pratiwi",
        "Pudjiastuti", "Purnawati", "Purwanti", "Puspasari", "Puspita", "Rahayu", "Rahimah", "Rahmawati", "Riyanti", "Safitri", "Suartini", "Sudiati", "Suryatmi", "Susanti", "Usada", "Usamah", "Utami", "Uyainah", "Wahyuni", "Wastuti",
        "Widiastuti", "Wijayanti", "Winarsih", "Wulandari", "Yolanda", "Yulianti", "Yuliarti", "Yuniar", "Zulaika"
    ];
}

<?php

namespace LilPecky\DriverGenerator\Providers\hy_AM;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Ara", "Ararat", "Armen", "Artak", "Artash", "Artur", "Ashot", "Avedis", "Avet", "Babken", "Bagrat", "Barkev", "Barsam", "Bedros", "Berge", "Berj", "Boghos", "Davit", "Dikran", "Edgar",
        "Edik", "Eduard", "Edward", "Eghishe", "Elias", "Elise", "Emanuel", "Emil", "Emma", "Erik", "Ernest", "Ervand", "Eugen", "Evgen", "Felix", "Gagik", "Garabed", "Garbis", "Garen", "Garik",
        "Garo", "Gevorg", "Ghazar", "Ghevont", "Gor", "Gourgen", "Grigor", "Grikor", "Gurgen", "Haig", "Hamo", "Harout", "Harutyun", "Heghine", "Hmayak", "Hovannes", "Hrach", "Hrachya", "Hrant", "Hripsime",
        "Ishkhan", "Ivan", "Jivan", "Kamo", "Karapet", "Karekin", "Karen", "Karlen", "Kegham", "Kevork", "Khachatur", "Khoren", "Koryun", "Krikor", "Levon", "Lilit", "Manuk", "Markar", "Martik", "Matevos",
        "Matthew", "Mayis", "Mekhak", "Mher", "Mihran", "Mikael", "Minas", "Moses", "Movses", "Murad", "Nareg", "Narek", "Nerses", "Norayr", "Nshan", "Ohan", "Ohanes", "Ohannes", "Onnik", "Pargev",
        "Pars", "Petros", "Raffi", "Razmik", "Robert", "Ruben", "Sargis", "Sarkis", "Satenik", "Sedrak", "Serge", "Seroj", "Sevan", "Shahan", "Shant", "Shavarsh", "Shirak", "Smbat", "Sos", "Stepan",
        "Taniel", "Tatev", "Tigran", "Toros", "Vahagn", "Vahan", "Vardan", "Vazgen", "Viken", "Viktor", "Vilen", "Vosgan", "Vram", "Yeghishe", "Yegor", "Yervand", "Yervant", "Yeznik", "Zabel", "Zareh",
        "Zaven", "Zavenar", "Zohrab"
    ];

    public static array $givenNamesFemale = [
        "Aghavni", "Aida", "Alik", "Alina", "Alis", "Alvard", "Amalya", "Anahid", "Anahit", "Ani", "Anoush", "Anush", "Araks", "Araksy", "Araksya", "Araxi", "Araxia", "Armine", "Arpine", "Arsine",
        "Artakhshet", "Arus", "Arusiak", "Arusyak", "Astghik", "Astine", "Astrid", "Avag", "Avetis", "Avetisyan", "Diana", "Dzovag", "Elen", "Eleni", "Elina", "Ella", "Elvira", "Emma", "Emmik", "Erepouni",
        "Erna", "Eva", "Gayane", "Gohar", "Gorune", "Greta", "Gulizar", "Haykanush", "Hripsik", "Hripsime", "Hripsimia", "Hripsimine", "Hripsimyan", "Huri", "Irina", "Iskuhi", "Ivetta", "Izabella", "Jasmine", "Karina",
        "Lala", "Lara", "Larisa", "Lida", "Lilit", "Lilith", "Lina", "Linda", "Lucine", "Lusine", "Lusya", "Madlen", "Manya", "Margaret", "Marguerite", "Maria", "Marina", "Marine", "Mayda", "Mayranush",
        "Mayya", "Melanya", "Melina", "Meline", "Meri", "Mery", "Meryem", "Mona", "Naira", "Nana", "Narine", "Natalie", "Nelli", "Nelly", "Nona", "Nuneh", "Ophelia", "Ovsanna", "Ovsya", "Parandzem",
        "Rita", "Roza", "Ruzanna", "Sara", "Satenig", "Seda", "Sofia", "Sona", "Sophie", "Sosy", "Stella", "Suren", "Susanna", "Talar", "Tatev", "Tina", "Vahanush", "Valya", "Varda", "Varduhi",
        "Vardui", "Varoujan", "Vartouhi", "Vera", "Veronika", "Vika", "Violet", "Yelena", "Yeranuhi", "Yesenia", "Yeva", "Yulia", "Zabel", "Zarouhi", "Zaruhi", "Zemfira", "Zina", "Zita", "Zvart", "Zvartnots"
    ];

    public static array $familyNames = [
        "Aghabekyan", "Amiryan", "Arakelyan", "Araratyan", "Arevshatyan", "Avagyan", "Avanesyan", "Ayvazyan", "Badalyan", "Badoyan", "Barseghyan", "Bazikyan", "Bekaryan", "Budaghyan", "Chalabyan", "Darbinyan", "Davtyan", "Dekermenjian", "Dilanyan", "Dumanyan",
        "Gabrielyan", "Galstyan", "Gasparyan", "Gevorgyan", "Ghazaryan", "Ghukasyan", "Ginosyan", "Grigoryan", "Guloyan", "Gyulnazaryan", "Harutyunyan", "Hayrapetyan", "Hayrumyan", "Hayryan", "Haytyan", "Hovakimyan", "Hovhannisyan", "Hovsepyan", "Hunanyan", "Isahakyan",
        "Jivanyan", "Kadzhikyan", "Karamyan", "Karapetyan", "Karapetyan-Tadevosyan", "Karapetyants", "Karapetyants-Kokhbetsyan", "Kazaryan", "Khachatryan", "Khachikyan", "Khachumyan", "Khalatyan", "Khazaryan", "Khechoyan", "Kirakosyan", "Kocharyan", "Kostanyan", "Kotanjyan", "Kotcharian", "Koyunyan",
        "Krikoryan", "Kurdoghlian", "Kurkchyan", "Kurkjian", "Kurumlian", "Kyureghyan", "Manukyan", "Mardanyan", "Marsubyan", "Melikyan", "Melkonian", "Mikayelyan", "Minasyan", "Mkhitaryan", "Muradyan", "Murazyan", "Nalbandyan", "Nersesian", "Nikoghosyan", "Nshanian",
        "Ohanjanian", "Ohanjanyan", "Ohanyan", "Papazyan", "Parsadanyan", "Petrosyan", "Poghosyan", "Poladyan", "Safaryan", "Saghatelyan", "Sahakyan", "Sargsyan", "Saribekyan", "Saryan", "Sekoyan", "Smbatyan", "Sukiasyan", "Tadevosyan", "Tavadyan", "Tavakalyan",
        "Ter-Grigoryan", "Ter-Minasyan", "Tigranyan", "Tovmasyan", "Tsagharyan", "Vardanyan", "Vartanian", "Vartanyan", "Yeranosyan", "Yeremyan", "Yeritsyan", "Yerjanikyan", "Zakaryan"
    ];
}

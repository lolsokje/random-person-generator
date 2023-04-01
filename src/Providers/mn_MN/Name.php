<?php

namespace LilPecky\DriverGenerator\Providers\mn_MN;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Abaas", "Aguulang", "Altangadas", "Amarbat", "Ariunbold", "Avirmed", "Azjargal", "Baatar", "Badarch", "Bagabandi", "Baldandorj", "Bataar", "Bayaraa", "Bayarkhuu", "Bolormaa", "Bum-Erdene", "Buyanjargal", "Byambadorj", "Byambajav", "Byambasuren",
        "Chadraabal", "Chagdarjav", "Chimed", "Chuluun", "Dambadarjaa", "Damdin", "Dashdondog", "Dashdorj", "Dashnyam", "Davaadorj", "Davaajav", "Davaasuren", "Demberel", "Dorj", "Dorjpalam", "Dugerjav", "Dulguun", "Dulmaa", "Enkhtaivan", "Enkhtsetseg",
        "Erdene", "Erdene-Ochir", "Erdenebaatar", "Erdenebat", "Erdenebayar", "Erdenechuluun", "Erdenejargal", "Erdenezul", "Ganbaatar", "Ganbold", "Gankhuyag", "Gantulga", "Ganzorig", "Gombosuren", "Gonchig", "Gunchin", "Jargal", "Javkhlan", "Jigjidsuren", "Khaliun",
        "Khangai", "Khishgee", "Khurelbaatar", "Lkhagva", "Lkhagvajav", "Lkhagvasuren", "Mend-Ooyo", "Mendbayar", "Narangerel", "Naranjargal", "Narantsetseg", "Naranzun", "Ochir", "Ochirbat", "Odbayar", "Odkhuu", "Odonbat", "Odsuren", "Purev", "Purevbat",
        "Purevdorj", "Purevjargal", "Sainbayar", "Sainkhuu", "Sainzaya", "Sodnom", "Sukhbaatar", "Suvd", "Suvd-Erdene", "Suvdaa", "Tegshee", "Togtokh", "Tolga", "Tsagaan", "Tsagaankhuu", "Tsevegmed", "Tumenbayar", "Tumendemberel", "Tuvshin", "Uugan-Erdene",
        "Uuganbayar", "Yondon", "Zolzaya"
    ];

    protected static array $givenNamesFemale = [
        "Altantsetseg", "Amarjargal", "Ariunaa", "Battsetseg", "Bayarmaa", "Bolormaa", "Bulgan", "Bulganbayar", "Byambasuren", "Byambatsogt", "Chimeddorj", "Chimgee", "Chinbat", "Davaasuren", "Dolgormaa", "Dulamsuren", "Enkhjargal", "Enkhmaa", "Enkhzaya", "Erdenebat",
        "Erdenechimeg", "Erdenetuya", "Erdenezul", "Ganbaatar", "Gantsetseg", "Gerel", "Gereltsetseg", "Javzandolgor", "Khaliun", "Khulan", "Khurelbaatar", "Lkhagvasuren", "Lkhagvazul", "Lkhamjav", "Lkhamsuren", "Mandakhnaran", "Mandakhzul", "Munkhbayar", "Munkhchimeg", "Munkhdulguun",
        "Munkhjargal", "Munkhzul", "Narangerel", "Narantsetseg", "Naranzul", "Nergui", "Nomin", "Nomin-Erdene", "Nominjin", "Nyambayar", "Nyambu", "Ochirbat", "Odonchimeg", "Odontuya", "Oyun", "Oyunchimeg", "Oyundari", "Oyungerel", "Oyuntungalag", "Purevsuren",
        "Sarnai", "Saruul", "Sodnom", "Sonompil", "Soyol-Erdene", "Tegshee", "Tugsbayar", "Tuguldur", "Tumurbaatar", "Tuvshinbayar", "Tuvshinjargal", "Tuvshintur", "Tuya", "Tuyakhuyag", "Undarmaa", "Undrakh", "Uyanga", "Uyangaa", "Uyangaajargal", "Uzumchin",
        "Zolzaya", "Zul-Erdene", "Zulaa", "Zulgerel", "Zulgur", "Zulmaa", "Zundui"
    ];

    protected static array $familyNames = [
        "Altangerel", "Amar", "Ariunbold", "Avirmed", "Bagabandi", "Battulga", "Bayanmunkh", "Bayar", "Bayarsaikhan", "Bayartsogt", "Bilegt", "Bolormaa", "Bumtsend", "Chuluun", "Chuluunbaatar", "Chuluunbat", "Dagvadorj", "Dagvasuren", "Dashdorj", "Dashnyam",
        "Dashzeveg", "Davaajav", "Davaasuren", "Dorjsuren", "Dulguun", "Enkhbat", "Enkhbold", "Enkhjargal", "Enkhtsetseg", "Erdenbat", "Erdene", "Erdenebaatar", "Erdenebat", "Erdenechimeg", "Erdenejargal", "Erdenejav", "Erdenetuya", "Erdenezul", "Ganbaatar", "Ganbold",
        "Gantulga", "Ganzorig", "Gurragchaa", "Jambal", "Javkhlan", "Jigjidsuren", "Khaliun", "Khangai", "Khishgee", "Khosbayar", "Khurelbaatar", "Luvsan", "Mendbayar", "Mendeecee", "Munkh-Orgil", "Munkhbat", "Munkhbayar", "Munkhjargal", "Munkhtsetseg", "Narangerel",
        "Naranjargal", "Narankhuu", "Narantsetseg", "Nergui", "Nyam-Osor", "Nyamjav", "Ochirbat", "Ochirpurev", "Odonchimeg", "Odonchuluun", "Odsuren", "Oyuntsetseg", "Purev", "Purevdorj", "Purevjargal", "Sainbayar", "Sainjargal", "Saruul", "Ser-Od", "Sodbileg",
        "Tsend", "Tsend-Ayush", "Tsogbadrakh", "Tsogt", "Tsogtgerel", "Tsolmon", "Tulga", "Tulgaa", "Tumendemberel", "Tuvshin", "Tuvshinbat", "Tuvshintur", "Uyanga", "Uzzei", "Zorig"
    ];
}

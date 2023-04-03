<?php

namespace LilPecky\RandomPersonGenerator\Providers\ar_EG;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Abdallah", "Abdel", "Abdelaziz", "Abdelhamid", "Abdelkader", "Abdelkarim", "Abdelmoneim", "Abdelrahman", "Abdou", "Adel", "Ahmad", "Ahmed", "Akram", "Alaa", "Ali", "Amin", "Amir", "Amr", "Anwar", "Ashraf",
        "Assem", "Atif", "Awad", "Ayman", "Aziz", "Bahaa", "Bakr", "Bassem", "Diaa", "Ehab", "Emad", "Emile", "Essam", "Ezzat", "Fadi", "Faisal", "Farag", "Farid", "Fathi", "Fathy",
        "Fayek", "Fikry", "Fouad", "Galal", "Gamal", "Ghassan", "Hadi", "Hamdi", "Hamed", "Hamza", "Hani", "Hassan", "Hatem", "Hazem", "Helmi", "Hesham", "Hussein", "Ibrahim", "Ihab", "Ihsan",
        "Islam", "Ismail", "Jabir", "Jamal", "Jumaa", "Kamal", "Karim", "Khairy", "Khaled", "Khalid", "Labib", "Lutfi", "Magdi", "Magdy", "Maged", "Mahmoud", "Mahmud", "Makram", "Mamdouh", "Mamoun",
        "Mansour", "Marwan", "Marzouk", "Mazen", "Medhat", "Mekawy", "Mina", "Mohamad", "Mohamed", "Mohsen", "Montasser", "Morad", "Mostafa", "Muawia", "Mukhtar", "Mursi", "Mustafa", "Mutassem", "Nabih", "Nabil",
        "Naguib", "Nagy", "Naser", "Nasr", "Nasser", "Nour", "Omar", "Osama", "Ossama", "Othman", "Qadry", "Qasem", "Qusai", "Rabie", "Raed", "Rafik", "Ragab", "Rami", "Ramy", "Rashed",
        "Rashid", "Reda", "Rida", "Riyad", "Saber", "Sabry", "Sadek", "Saed", "Said", "Salah", "Saleh", "Salim", "Sameh", "Samer", "Samir", "Samy", "Sayed", "Seif", "Selim", "Shaf",
        "Sherif", "Tarek", "Wael", "Yasser", "Youssef"
    ];

    public static array $givenNamesFemale = [
        "Abeer", "Afaf", "Afrah", "Ahd", "Ahlam", "Aida", "Aisha", "Alia", "Alisa", "Amal", "Amani", "Amira", "Anhar", "Aya", "Ayesha", "Aziza", "Badriya", "Bahia", "Basma", "Buthaina",
        "Dalal", "Dalia", "Dina", "Ebtisam", "Eman", "Enas", "Esmat", "Fadia", "Fadila", "Fajr", "Fakhera", "Farida", "Fatima", "Fawzia", "Fayrouz", "Fedaa", "Galila", "Gamila", "Ghada", "Hadeel",
        "Hagar", "Hala", "Hana", "Hanan", "Haneen", "Hania", "Hanifa", "Hanouf", "Hanyaa", "Hasna", "Hatoon", "Hawaa", "Hayam", "Hazar", "Hend", "Hessa", "Hoda", "Houria", "Huda", "Ibtisam",
        "Iman", "Intisar", "Israa", "Itidal", "Jala", "Jamila", "Jihan", "Jomana", "Kahira", "Kamila", "Karam", "Karima", "Kawthar", "Khadiga", "Khadija", "Khalida", "Khalila", "Khawla", "Laila", "Lamia",
        "Leila", "Lina", "Lubna", "Lujain", "Madiha", "Magda", "Maha", "Mahassen", "Maisa", "Malak", "Manal", "Marwa", "Maryam", "Mays", "Maysoon", "Menna", "Mervat", "Mina", "Mona", "Mounira",
        "Nadia", "Nagla", "Nahed", "Nahla", "Naima", "Nargis", "Nefertiti", "Nermine", "Nesma", "Nihad", "Nihal", "Nisreen", "Noha", "Nour", "Noureen", "Nura", "Omayma", "Omayra", "Omnia", "Rabea",
        "Radwa", "Ragda", "Raja", "Rajaa", "Rania", "Rasha", "Rawda", "Rawia", "Rihab", "Rokia", "Sabah", "Sabra", "Sadeem", "Saffiya", "Safia", "Safiya", "Sahar", "Saida", "Salama", "Salwa",
        "Samah", "Samar", "Samiha", "Samira", "Samya", "Sanaa", "Sawsan", "Sayeda", "Seham", "Shahira", "Shaimaa", "Shaza", "Shereen", "Sherine", "Shorouk", "Siham", "Sireen", "Soad", "Soha", "Soheir",
        "Souad", "Sumaya", "Tahani", "Tala", "Tamadur", "Thanaa", "Ula", "Umnia", "Wafaa", "Yasmin", "Yomna", "Youmna", "Zeinab"
    ];

    public static array $familyNames = [
        "Abdel Aziz", "Abdel Fattah", "Abdel Ghaffar", "Abdel Hadi", "Abdel Halim", "Abdel Hamid", "Abdel Karim", "Abdel Latif", "Abdel Monem", "Abdel Nasser", "Abdel Rahman", "Abdel Razek", "Abdel Samad", "Abdel Tawab", "Abdel Wahab", "Abdullah", "Abou El Fadl", "Abou Hagar", "Abou Seif", "Abou Zeid",
        "Abu El Ella", "Abu El Fadl", "Abu El Ghar", "Abu El Kheir", "Abu El Magd", "Abu El Naga", "Abu El Wafa", "Abu Hamed", "Abu Hashim", "Abu Hassan", "Abu Khatwa", "Abu Saada", "Abu Saleh", "Abu Samra", "Abu Seada", "Abu Seria", "Abu Shadi", "Abu Shakra", "Abu Sharkh", "Abu Taleb",
        "Abu Zeinah", "Afifi", "Agamy", "Ahmed", "Ali", "Aly", "Amin", "Ammar", "Arafa", "Asaad", "Ashour", "Assaad", "Attia", "Awad", "Aziz", "Badawi", "Badr", "Bahgat", "Bakr", "Barakat",
        "Bassiouni", "Basta", "Basyouni", "Bayoumi", "Bekhit", "Bishay", "Botros", "Dawood", "Dawoud", "Ebeid", "Ebrahim", "Eid", "El Abras", "El Adawy", "El Ahmady", "El Alfy", "El Ali", "El Amin", "El Amir", "El Andaloussi",
        "El Ansary", "El Ashmawy", "El Askalany", "El Assal", "El Attar", "El Awadi", "El Azzazy", "El Badawy", "El Bagoury", "El Banna", "El Baradei", "El Bardisy", "El Batouty", "El Baz", "El Behery", "El Beltagy", "El Boghdady", "El Borai", "El Deeb", "El Dib",
        "El Din", "El Emam", "El Etreby", "El Fadaly", "El Fakharany", "El Faramawy", "El Farouk", "El Farra", "El Fayoumy", "El Fekky", "El Gendy", "El Ghannam", "El Gharably", "El Ghazaly"
    ];
}

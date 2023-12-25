<?php

namespace Database\Seeders;

use App\Models\Alquran;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlquranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alquran::create(
            [
                "surah_id" => 1,
                "nama_surah" => "Al-Fatihah",
                "terjemah" => "Pembukaan",
                "jumlah_ayat" => 7
            ],
            [
                "surah_id" => 2,
                "nama_surah" => "Al-Baqarah",
                "terjemah" => "Sapi",
                "jumlah_ayat" => 286
            ],
            [
                "surah_id" => 3,
                "nama_surah" => "Ali 'Imran",
                "terjemah" => "Keluarga Imran",
                "jumlah_ayat" => 200
            ],
            [
                "surah_id" => 4,
                "nama_surah" => "An-Nisa'",
                "terjemah" => "Wanita",
                "jumlah_ayat" => 176
            ],
            [
                "surah_id" => 5,
                "nama_surah" => "Al-Ma'idah",
                "terjemah" => "Hidangan",
                "jumlah_ayat" => 120
            ],
            [
                "surah_id" => 6,
                "nama_surah" => "Al-An'am",
                "terjemah" => "Binatang Ternak",
                "jumlah_ayat" => 165
            ],
            [
                "surah_id" => 7,
                "nama_surah" => "Al-A'raf",
                "terjemah" => "Tempat Tertinggi",
                "jumlah_ayat" => 206
            ],
            [
                "surah_id" => 8,
                "nama_surah" => "Al-Anfal",
                "terjemah" => "Rampasan Perang",
                "jumlah_ayat" => 75
            ],
            [
                "surah_id" => 9,
                "nama_surah" => "At-Taubah",
                "terjemah" => "Pengampunan",
                "jumlah_ayat" => 129
            ],
            [
                "surah_id" => 10,
                "nama_surah" => "Yunus",
                "terjemah" => "Yunus",
                "jumlah_ayat" => 109
            ],
            [
                "surah_id" => 11,
                "nama_surah" => "Hud",
                "terjemah" => "Hud",
                "jumlah_ayat" => 123
            ],
            [
                "surah_id" => 12,
                "nama_surah" => "Yusuf",
                "terjemah" => "Yusuf",
                "jumlah_ayat" => 111
            ],
            [
                "surah_id" => 13,
                "nama_surah" => "Ar-Ra'd",
                "terjemah" => "Guruh",
                "jumlah_ayat" => 43
            ],
            [
                "surah_id" => 14,
                "nama_surah" => "Ibrahim",
                "terjemah" => "Ibrahim",
                "jumlah_ayat" => 52
            ],
            [
                "surah_id" => 15,
                "nama_surah" => "Al-Hijr",
                "terjemah" => "Hijr",
                "jumlah_ayat" => 99
            ],
            [
                "surah_id" => 16,
                "nama_surah" => "An-Nahl",
                "terjemah" => "Lebah",
                "jumlah_ayat" => 128
            ],
            [
                "surah_id" => 17,
                "nama_surah" => "Al-Isra'",
                "terjemah" => "Memperjalankan Malam Hari",
                "jumlah_ayat" => 111
            ],
            [
                "surah_id" => 18,
                "nama_surah" => "Al-Kahf",
                "terjemah" => "Goa",
                "jumlah_ayat" => 110
            ],
            [
                "surah_id" => 19,
                "nama_surah" => "Maryam",
                "terjemah" => "Maryam",
                "jumlah_ayat" => 98
            ],
            [
                "surah_id" => 20,
                "nama_surah" => "Taha",
                "terjemah" => "Taha",
                "jumlah_ayat" => 135
            ],
            [
                "surah_id" => 21,
                "nama_surah" => "Al-Anbiya'",
                "terjemah" => "Para Nabi",
                "jumlah_ayat" => 112
            ],
            [
                "surah_id" => 22,
                "nama_surah" => "Al-Hajj",
                "terjemah" => "Haji",
                "jumlah_ayat" => 78
            ],
            [
                "surah_id" => 23,
                "nama_surah" => "Al-Mu'minun",
                "terjemah" => "Orang-Orang Mukmin",
                "jumlah_ayat" => 118
            ],
            [
                "surah_id" => 24,
                "nama_surah" => "An-Nur",
                "terjemah" => "Cahaya",
                "jumlah_ayat" => 64
            ],
            [
                "surah_id" => 25,
                "nama_surah" => "Al-Furqan",
                "terjemah" => "Pembeda",
                "jumlah_ayat" => 77
            ],
            [
                "surah_id" => 26,
                "nama_surah" => "Asy-Syu'ara'",
                "terjemah" => "Para Penyair",
                "jumlah_ayat" => 227
            ],
            [
                "surah_id" => 27,
                "nama_surah" => "An-Naml",
                "terjemah" => "Semut-semut",
                "jumlah_ayat" => 93
            ],
            [
                "surah_id" => 28,
                "nama_surah" => "Al-Qasas",
                "terjemah" => "Kisah-Kisah",
                "jumlah_ayat" => 88
            ],
            [
                "surah_id" => 29,
                "nama_surah" => "Al-'Ankabut",
                "terjemah" => "Laba-Laba",
                "jumlah_ayat" => 69
            ],
            [
                "surah_id" => 30,
                "nama_surah" => "Ar-Rum",
                "terjemah" => "Romawi",
                "jumlah_ayat" => 60
            ],
            [
                "surah_id" => 31,
                "nama_surah" => "Luqman",
                "terjemah" => "Luqman",
                "jumlah_ayat" => 34
            ],
            [
                "surah_id" => 32,
                "nama_surah" => "As-Sajdah",
                "terjemah" => "Sajdah",
                "jumlah_ayat" => 30
            ],
            [
                "surah_id" => 33,
                "nama_surah" => "Al-Ahzab",
                "terjemah" => "Golongan Yang Bersekutu",
                "jumlah_ayat" => 73
            ],
            [
                "surah_id" => 34,
                "nama_surah" => "Saba'",
                "terjemah" => "Saba'",
                "jumlah_ayat" => 54
            ],
            [
                "surah_id" => 35,
                "nama_surah" => "Fatir",
                "terjemah" => "Maha Pencipta",
                "jumlah_ayat" => 45
            ],
            [
                "surah_id" => 36,
                "nama_surah" => "Yasin",
                "terjemah" => "Yasin",
                "jumlah_ayat" => 83
            ],
            [
                "surah_id" => 37,
                "nama_surah" => "As-Saffat",
                "terjemah" => "Barisan-Barisan",
                "jumlah_ayat" => 182
            ],
            [
                "surah_id" => 38,
                "nama_surah" => "Sad",
                "terjemah" => "Sad",
                "jumlah_ayat" => 88
            ],
            [
                "surah_id" => 39,
                "nama_surah" => "Az-Zumar",
                "terjemah" => "Rombongan",
                "jumlah_ayat" => 75
            ],
            [
                "surah_id" => 40,
                "nama_surah" => "Gafir",
                "terjemah" => "Maha Pengampun",
                "jumlah_ayat" => 85
            ],
            [
                "surah_id" => 41,
                "nama_surah" => "Fussilat",
                "terjemah" => "Yang Dijelaskan",
                "jumlah_ayat" => 54
            ],
            [
                "surah_id" => 42,
                "nama_surah" => "Asy-Syura",
                "terjemah" => "Musyawarah",
                "jumlah_ayat" => 53
            ],
            [
                "surah_id" => 43,
                "nama_surah" => "Az-Zukhruf",
                "terjemah" => "Perhiasan",
                "jumlah_ayat" => 89
            ],
            [
                "surah_id" => 44,
                "nama_surah" => "Ad-Dukhan",
                "terjemah" => "Kabut",
                "jumlah_ayat" => 59
            ],
            [
                "surah_id" => 45,
                "nama_surah" => "Al-Jasiyah",
                "terjemah" => "Berlutut",
                "jumlah_ayat" => 37
            ],
            [
                "surah_id" => 46,
                "nama_surah" => "Al-Ahqaf",
                "terjemah" => "Bukit Pasir",
                "jumlah_ayat" => 35
            ],
            [
                "surah_id" => 47,
                "nama_surah" => "Muhammad",
                "terjemah" => "Muhammad",
                "jumlah_ayat" => 38
            ],
            [
                "surah_id" => 48,
                "nama_surah" => "Al-Fath",
                "terjemah" => "Kemenangan",
                "jumlah_ayat" => 29
            ],
            [
                "surah_id" => 49,
                "nama_surah" => "Al-Hujurat",
                "terjemah" => "Kamar-Kamar",
                "jumlah_ayat" => 18
            ],
            [
                "surah_id" => 50,
                "nama_surah" => "Qaf",
                "terjemah" => "Qaf",
                "jumlah_ayat" => 45
            ],
            [
                "surah_id" => 51,
                "nama_surah" => "Az-Zariyat",
                "terjemah" => "Angin yang Menerbangkan",
                "jumlah_ayat" => 60
            ],
            [
                "surah_id" => 52,
                "nama_surah" => "At-Tur",
                "terjemah" => "Bukit Tursina",
                "jumlah_ayat" => 49
            ],
            [
                "surah_id" => 53,
                "nama_surah" => "An-Najm",
                "terjemah" => "Bintang",
                "jumlah_ayat" => 62
            ],
            [
                "surah_id" => 54,
                "nama_surah" => "Al-Qamar",
                "terjemah" => "Bulan",
                "jumlah_ayat" => 55
            ],
            [
                "surah_id" => 55,
                "nama_surah" => "Ar-Rahman",
                "terjemah" => "Maha Pengasih",
                "jumlah_ayat" => 78
            ],
            [
                "surah_id" => 56,
                "nama_surah" => "Al-Waqi'ah",
                "terjemah" => "Hari Kiamat",
                "jumlah_ayat" => 96
            ],
            [
                "surah_id" => 57,
                "nama_surah" => "Al-Hadid",
                "terjemah" => "Besi",
                "jumlah_ayat" => 29
            ],
            [
                "surah_id" => 58,
                "nama_surah" => "Al-Mujadalah",
                "terjemah" => "Gugatan",
                "jumlah_ayat" => 22
            ],
            [
                "surah_id" => 59,
                "nama_surah" => "Al-Hasyr",
                "terjemah" => "Pengusiran",
                "jumlah_ayat" => 24
            ],
            [
                "surah_id" => 60,
                "nama_surah" => "Al-Mumtahanah",
                "terjemah" => "Wanita Yang Diuji",
                "jumlah_ayat" => 13
            ],
            [
                "surah_id" => 61,
                "nama_surah" => "As-Saff",
                "terjemah" => "Barisan",
                "jumlah_ayat" => 14
            ],
            [
                "surah_id" => 62,
                "nama_surah" => "Al-Jumu'ah",
                "terjemah" => "Jumat",
                "jumlah_ayat" => 11
            ],
            [
                "surah_id" => 63,
                "nama_surah" => "Al-Munafiqun",
                "terjemah" => "Orang-Orang Munafik",
                "jumlah_ayat" => 11
            ],
            [
                "surah_id" => 64,
                "nama_surah" => "At-Tagabun",
                "terjemah" => "Pengungkapan Kesalahan",
                "jumlah_ayat" => 18
            ],
            [
                "surah_id" => 65,
                "nama_surah" => "At-Talaq",
                "terjemah" => "Talak",
                "jumlah_ayat" => 12
            ],
            [
                "surah_id" => 66,
                "nama_surah" => "At-Tahrim",
                "terjemah" => "Pengharaman",
                "jumlah_ayat" => 12
            ],
            [
                "surah_id" => 67,
                "nama_surah" => "Al-Mulk",
                "terjemah" => "Kerajaan",
                "jumlah_ayat" => 30
            ],
            [
                "surah_id" => 68,
                "nama_surah" => "Al-Qalam",
                "terjemah" => "Pena",
                "jumlah_ayat" => 52
            ],
            [
                "surah_id" => 69,
                "nama_surah" => "Al-Haqqah",
                "terjemah" => "Hari Kiamat",
                "jumlah_ayat" => 52
            ],
            [
                "surah_id" => 70,
                "nama_surah" => "Al-Ma'arij",
                "terjemah" => "Tempat Naik",
                "jumlah_ayat" => 44
            ],
            [
                "surah_id" => 71,
                "nama_surah" => "Nuh",
                "terjemah" => "Nuh",
                "jumlah_ayat" => 28
            ],
            [
                "surah_id" => 72,
                "nama_surah" => "Al-Jinn",
                "terjemah" => "Jin",
                "jumlah_ayat" => 28
            ],
            [
                "surah_id" => 73,
                "nama_surah" => "Al-Muzzammil",
                "terjemah" => "Orang Yang Berselimut",
                "jumlah_ayat" => 20
            ],
            [
                "surah_id" => 74,
                "nama_surah" => "Al-Muddassir",
                "terjemah" => "Orang Yang Berkemul",
                "jumlah_ayat" => 56
            ],
            [
                "surah_id" => 75,
                "nama_surah" => "Al-Qiyamah",
                "terjemah" => "Hari Kiamat",
                "jumlah_ayat" => 40
            ],
            [
                "surah_id" => 76,
                "nama_surah" => "Al-Insan",
                "terjemah" => "Manusia",
                "jumlah_ayat" => 31
            ],
            [
                "surah_id" => 77,
                "nama_surah" => "Al-Mursalat",
                "terjemah" => "Malaikat Yang Diutus",
                "jumlah_ayat" => 50
            ],
            [
                "surah_id" => 78,
                "nama_surah" => "An-Naba'",
                "terjemah" => "Berita Besar",
                "jumlah_ayat" => 40
            ],
            [
                "surah_id" => 79,
                "nama_surah" => "An-Nazi'at",
                "terjemah" => "Malaikat Yang Mencabut",
                "jumlah_ayat" => 46
            ],
            [
                "surah_id" => 80,
                "nama_surah" => "'Abasa",
                "terjemah" => "Bermuka Masam",
                "jumlah_ayat" => 42
            ],
            [
                "surah_id" => 81,
                "nama_surah" => "At-Takwir",
                "terjemah" => "Penggulungan",
                "jumlah_ayat" => 29
            ],
            [
                "surah_id" => 82,
                "nama_surah" => "Al-Infitar",
                "terjemah" => "Terbelah",
                "jumlah_ayat" => 19
            ],
            [
                "surah_id" => 83,
                "nama_surah" => "Al-Mutaffifin",
                "terjemah" => "Orang-Orang Curang",
                "jumlah_ayat" => 36
            ],
            [
                "surah_id" => 84,
                "nama_surah" => "Al-Insyiqaq",
                "terjemah" => "Terbelah",
                "jumlah_ayat" => 25
            ],
            [
                "surah_id" => 85,
                "nama_surah" => "Al-Buruj",
                "terjemah" => "Gugusan Bintang",
                "jumlah_ayat" => 22
            ],
            [
                "surah_id" => 86,
                "nama_surah" => "At-Tariq",
                "terjemah" => "Yang Datang Di Malam Hari",
                "jumlah_ayat" => 17
            ],
            [
                "surah_id" => 87,
                "nama_surah" => "Al-A'la",
                "terjemah" => "Maha Tinggi",
                "jumlah_ayat" => 19
            ],
            [
                "surah_id" => 88,
                "nama_surah" => "Al-Gasyiyah",
                "terjemah" => "Hari Kiamat",
                "jumlah_ayat" => 26
            ],
            [
                "surah_id" => 89,
                "nama_surah" => "Al-Fajr",
                "terjemah" => "Fajar",
                "jumlah_ayat" => 30
            ],
            [
                "surah_id" => 90,
                "nama_surah" => "Al-Balad",
                "terjemah" => "Negeri",
                "jumlah_ayat" => 20
            ],
            [
                "surah_id" => 91,
                "nama_surah" => "Asy-Syams",
                "terjemah" => "Matahari",
                "jumlah_ayat" => 15
            ],
            [
                "surah_id" => 92,
                "nama_surah" => "Al-Lail",
                "terjemah" => "Malam",
                "jumlah_ayat" => 21
            ],
            [
                "surah_id" => 93,
                "nama_surah" => "Ad-Duha",
                "terjemah" => "Duha",
                "jumlah_ayat" => 11
            ],
            [
                "surah_id" => 94,
                "nama_surah" => "Asy-Syarh",
                "terjemah" => "Lapang",
                "jumlah_ayat" => 8
            ],
            [
                "surah_id" => 95,
                "nama_surah" => "At-Tin",
                "terjemah" => "Buah Tin",
                "jumlah_ayat" => 8
            ],
            [
                "surah_id" => 96,
                "nama_surah" => "Al-'Alaq",
                "terjemah" => "Segumpal Darah",
                "jumlah_ayat" => 19
            ],
            [
                "surah_id" => 97,
                "nama_surah" => "Al-Qadr",
                "terjemah" => "Kemuliaan",
                "jumlah_ayat" => 5
            ],
            [
                "surah_id" => 98,
                "nama_surah" => "Al-Bayyinah",
                "terjemah" => "Bukti Nyata",
                "jumlah_ayat" => 8
            ],
            [
                "surah_id" => 99,
                "nama_surah" => "Az-Zalzalah",
                "terjemah" => "Guncangan",
                "jumlah_ayat" => 8
            ],
            [
                "surah_id" => 100,
                "nama_surah" => "Al-'Adiyat",
                "terjemah" => "Kuda Yang Berlari Kencang",
                "jumlah_ayat" => 11
            ],
            [
                "surah_id" => 101,
                "nama_surah" => "Al-Qari'ah",
                "terjemah" => "Hari Kiamat",
                "jumlah_ayat" => 11
            ],
            [
                "surah_id" => 102,
                "nama_surah" => "At-Takasur",
                "terjemah" => "Bermegah-Megahan",
                "jumlah_ayat" => 8
            ],
            [
                "surah_id" => 103,
                "nama_surah" => "Al-'Asr",
                "terjemah" => "Asar",
                "jumlah_ayat" => 3
            ],
            [
                "surah_id" => 104,
                "nama_surah" => "Al-Humazah",
                "terjemah" => "Pengumpat",
                "jumlah_ayat" => 9
            ],
            [
                "surah_id" => 105,
                "nama_surah" => "Al-Fil",
                "terjemah" => "Gajah",
                "jumlah_ayat" => 5
            ],
            [
                "surah_id" => 106,
                "nama_surah" => "Quraisy",
                "terjemah" => "Quraisy",
                "jumlah_ayat" => 4
            ],
            [
                "surah_id" => 107,
                "nama_surah" => "Al-Ma'un",
                "terjemah" => "Barang Yang Berguna",
                "jumlah_ayat" => 7
            ],
            [
                "surah_id" => 108,
                "nama_surah" => "Al-Kausar",
                "terjemah" => "Pemberian Yang Banyak",
                "jumlah_ayat" => 3
            ],
            [
                "surah_id" => 109,
                "nama_surah" => "Al-Kafirun",
                "terjemah" => "Orang-Orang kafir",
                "jumlah_ayat" => 6
            ],
            [
                "surah_id" => 110,
                "nama_surah" => "An-Nasr",
                "terjemah" => "Pertolongan",
                "jumlah_ayat" => 3
            ],
            [
                "surah_id" => 111,
                "nama_surah" => "Al-Lahab",
                "terjemah" => "Api Yang Bergejolak",
                "jumlah_ayat" => 5
            ],
            [
                "surah_id" => 112,
                "nama_surah" => "Al-Ikhlas",
                "terjemah" => "Ikhlas",
                "jumlah_ayat" => 4
            ],
            [
                "surah_id" => 113,
                "nama_surah" => "Al-Falaq",
                "terjemah" => "Subuh",
                "jumlah_ayat" => 5
            ],
            [
                "surah_id" => 114,
                "nama_surah" => "An-Nas",
                "terjemah" => "Manusia",
                "jumlah_ayat" => 6
            ]

        );
    }
}

# 🎮 Simple Guessing Game

Selamat datang di Game Tebak Angka Sederhana! Ini adalah game berbasis web di mana Anda dapat menebak angka yang benar dalam rentang tertentu. Game ini dibuat menggunakan PHP dan menggunakan konsep Pemrograman Berorientasi Objek (OOP).

## 📝 Project Structure

├── classes
│ └── GuessingGame.php
├── img
│ └── nyan-cat.gif
└── index.php

## 📄 How to Play

1. Masukkan teks pada kolom "Masukkan text".
2. Masukkan jumlah loop pada kolom "Masukkan jumlah loop" (minimal 50 angka loop dan maksimal 150 angka loop).
3. Klik "Start Game" untuk memulai.
4. List baru akan muncul di mana Anda dapat menebak angka yang benar.
5. Masukkan tebakan Anda dan klik "Cek" untuk melihat apakah tebakan Anda benar.

## 📂 File Descriptions

### `classes/GuessingGame.php`

File ini berisi kelas `GuessingGame` dengan metode berikut:

- `__construct($text, $jumlahLoop)`: Menginisialisasi game dengan teks dan jumlah loop yang diberikan.
- `validateInput()`: Memvalidasi bahwa jumlah loop berada antara 50 dan 150.
- `displayForm()`: Menampilkan formulir untuk input tebakan pengguna.
- `displayResults()`: Menampilkan hasil game, menunjukkan teks dan pesan khusus di posisi acak.
- `checkGuess($tebakan, $hasil_tebakan)`: Memeriksa apakah tebakan pengguna benar dan menampilkan pesan menggunakan SweetAlert2.

### `index.php`

File ini mengatur tampilan utama dalam game dan penginputan form:

- Menyertakan kelas `GuessingGame`.
- Menampilkan formulir awal untuk input pengguna.
- Memvalidasi input dan memulai game.
- Menampilkan hasil dan menangani pengecekan tebakan.

## 🖼️ Assets

- `img/nyan-cat.gif`: GIF Nyan Cat yang digunakan dalam pesan sukses.

## 🎨 Using Tailwind CSS

Proyek ini menggunakan [Tailwind CSS](https://tailwindcss.com/) untuk styling. Anda dapat melihat link CDN untuk Tailwind CSS di dalam file `index.php`.

## 🌟 Features

- Game tebak-tebakan yang sederhana dan interaktif.
- Validasi input dengan SweetAlert2 untuk pesan yang lebih menarik.
- Pesan sukses animasi dengan GIF Nyan Cat.

## 📜 License

Proyek ini bersifat open-source dan tersedia di bawah [Lisensi MIT](LICENSE).

## 👤 Author

- **Hadi Prasetiyo** - [hadiiyok](https://github.com/hadiprasetiyo)

---

Enjoy the game! 🎉

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kegiatan Kampus</title>
</head>
<body>

    <header>
        <h1>Pendaftaran Kegiatan Kampus</h1>
        <p>Seminar Nasional: Membangun Website dengan HTML5 Semantik</p>
    </header>

    <nav>
        <a href="#deskripsi">Deskripsi Kegiatan</a> | 
        <a href="#jadwal">Jadwal</a> | 
        <a href="#pendaftaran">Formulir Pendaftaran</a> | 
        <a href="https://www.perbanas.ac.id" target="_blank" rel="noopener noreferrer">Website Kampus</a>
    </nav>

    <main>
        <section id="deskripsi">
            <h2>Tentang Kegiatan</h2>
            <article>
                <h3>Seminar Pengembangan Web</h3>
                <p>Kegiatan ini bertujuan untuk meningkatkan pemahaman mahasiswa mengenai pentingnya penggunaan HTML5 dan elemen semantik dalam pembuatan struktur halaman web modern. Peserta akan diajak untuk mempraktikkan langsung cara menyusun elemen yang bermakna.</p>
                
                <figure>
                    <img src="Seminar2.jpg" 
                         alt="Suasana Seminar Teknologi" 
                         width="1000">
                    <figcaption>Ilustrasi suasana seminar teknologi di lingkungan kampus.</figcaption>
                </figure>
            </article>
        </section>

        <section id="jadwal">
            <h2>Jadwal Kegiatan</h2>
            <table border="1">
                <caption>Rundown Seminar Web Development</caption>
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Nama Kegiatan</th>
                        <th>Pemateri / Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:00 - 09:00</td>
                        <td>Registrasi Peserta</td>
                        <td>Panitia Kemahasiswaan</td>
                    </tr>
                    <tr>
                        <td>09:00 - 11:00</td>
                        <td>Materi: Pengenalan HTML Semantik</td>
                        <td>Reyzar Galih</td>
                    </tr>
                    <tr>
                        <td>11:00 - 12:00</td>
                        <td>Tanya Jawab & Penutup</td>
                        <td>Moderator</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <aside>
            <h2>Informasi Tambahan</h2>
            <p>Pendaftaran ditutup pada tanggal 25 Oktober 2026. Kapasitas ruangan terbatas hanya untuk 100 orang peserta pertama.</p>
            <p>Hubungi panitia via <a href="mailto:panitia@contoh.ac.id">Email</a> atau <a href="tel:+6281234567890">Telepon</a>.</p>
        </aside>

        <section id="pendaftaran">
            <h2>Formulir Pendaftaran</h2>
            <form action="proses_daftar.php" method="post">
                <div>
                    <label for="nama">Nama Lengkap:</label><br>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <br>
                <div>
                    <label for="nim">NIM:</label><br>
                    <input type="text" id="nim" name="nim" required>
                </div>
                <br>
                <div>
                    <label for="email">Alamat Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <br>
                <div>
                    <label for="telepon">Nomor Telepon:</label><br>
                    <input type="number" id="telepon" name="telepon" required>
                </div>
                <br>
                <div>
                    <label for="prodi">Program Studi:</label><br>
                    <select id="prodi" name="prodi" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                    </select>
                </div>
                <br>
                <fieldset style="width: fit-content;">
                    <legend>Jenis Kelamin:</legend>
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="L" required>
                        <label for="laki-laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required>
                    <label for="perempuan">Perempuan</label>
                </fieldset>
                <br>
                <fieldset style="width: fit-content;">
                    <legend>Pilihan Sesi (Bisa lebih dari satu):</legend>
                        <input type="checkbox" id="sesi_pagi" name="sesi[]" value="Pagi">
                        <label for="sesi_pagi">Sesi Pagi (08.00 - 12.00)</label><br>
                        <input type="checkbox" id="sesi_siang" name="sesi[]" value="Siang">
                    <label for="sesi_siang">Sesi Siang (13.00 - 16.00)</label>
                </fieldset>
                <br>
                <div>
                    <label for="alasan">Alasan Mengikuti Kegiatan:</label><br>
                    <textarea id="alasan" name="alasan" rows="4" cols="40" required></textarea>
                </div>
                <br>
                <div>
                    <input type="checkbox" id="persetujuan" name="persetujuan" required>
                    <label for="persetujuan">Saya menyetujui seluruh ketentuan kegiatan ini.</label>
                </div>
                <br>
                <button type="submit">Daftar Sekarang</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Program Studi Sistem Informasi - Pendaftaran Kegiatan Kampus</p>
    </footer>

</body>
</html>
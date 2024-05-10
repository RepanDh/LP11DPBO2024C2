# LP11DPBO2024C2
Saya Repan Dhia Nararya NIM [2202331] mengerjakan Latihan Praktikum Desain Pemrograman Berorientasi Objek dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## desain
Program ini terdiri dari beberapa komponen utama:

1. **Model**: Berisi kelas-kelas yang merepresentasikan objek dalam aplikasi, seperti `Pasien`, dan juga kelas-kelas yang berinteraksi dengan database, seperti `TabelPasien`.

2. **View**: Berisi kelas-kelas yang menampilkan data ke pengguna dan mengumpulkan input pengguna. Kelas `TampilPasien` adalah contoh dari View.

3. **Presenter**: Berisi kelas-kelas yang bertindak sebagai perantara antara Model dan View. Kelas `ProsesPasien` adalah contoh dari Presenter.

## Alur Program

1. Pengguna membuka aplikasi dan melihat daftar pasien yang ada.

2. Pengguna dapat memilih untuk menambahkan pasien baru, mengubah data pasien yang ada, atau menghapus pasien.

3. Jika pengguna memilih untuk menambahkan atau mengubah data pasien, mereka akan diarahkan ke form yang sesuai di mana mereka dapat memasukkan atau mengubah data.

4. Setelah pengguna selesai memasukkan atau mengubah data, mereka dapat mengklik tombol "Update" / "Submit" untuk menyimpan perubahan mereka. Data kemudian akan dikirim ke Presenter.

5. Presenter akan memproses data dan memanggil metode yang sesuai pada Model untuk menyimpan data ke database.

6. Setelah data berhasil disimpan, pengguna akan diarahkan kembali ke halaman utama di mana mereka dapat melihat daftar pasien yang diperbarui.

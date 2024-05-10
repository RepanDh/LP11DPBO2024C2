<?php

include("KontrakPresenter.php");


class ProsesPasien implements KontrakPresenter
{
	private $tabelpasien;
	private $data = [];

	function __construct()
	{
		//konstruktor
		try {
			$db_host = "localhost"; // host 
			$db_user = "root"; // user
			$db_password = ""; // password
			$db_name = "mvp_php"; // nama basis data
			$this->tabelpasien = new TabelPasien($db_host, $db_user, $db_password, $db_name); //instansi TabelPasien
			$this->data = array(); //instansi list untuk data Pasien
			//data = new ArrayList<Pasien>;//instansi list untuk data Pasien
		} catch (Exception $e) {
			echo "wiw error" . $e->getMessage();
		}
	}

	function prosesDataPasien()
	{
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$this->tabelpasien->getPasien();
			while ($row = $this->tabelpasien->getResult()) {
				//ambil hasil query
				$pasien = new Pasien(); //instansiasi objek pasien untuk setiap data pasien
				$pasien->setId($row['id']); //mengisi id
				$pasien->setNik($row['nik']); //mengisi nik
				$pasien->setNama($row['nama']); //mengisi nama
				$pasien->setTempat($row['tempat']); //mengisi tempat
				$pasien->setTl($row['tl']); //mengisi tl
				$pasien->setGender($row['gender']); //mengisi gender
				$pasien->setEmail($row['email']); //mengisi email
				$pasien->setTelp($row['telp']); //mengisi telp


				$this->data[] = $row; //tambahkan data pasien ke dalam list
			}
			//tutup koneksi
			$this->tabelpasien->close();
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
	}

	function geteditDataPasien($id)
	{
	
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$this->tabelpasien->getPasienById($id);
			$row = $this->tabelpasien->getResult();

				$this->data[] = $row; //tambahkan data pasien ke dalam list
	
			//tutup koneksi
			$this->tabelpasien->close();

	}

	function tambahPasien($data) {
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$hasil = $this->tabelpasien->tambahPasien($data);
			$this->tabelpasien->close();
			if ($hasil) {
				echo "Data berhasil ditambahkan! <script>document.location.href = 'index.php'</script>";
		} else {
			echo "Data gagal ditambahkan! <script>document.location.href = 'index.php'</script>";
			}
			//tutup koneksi
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
				
	}
	
	function ubahPasien($data) {
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$hasil = $this->tabelpasien->ubahPasien($data);
			$this->tabelpasien->close();
			if ($hasil) {
				echo "Data berhasil diubah! <script>document.location.href = 'index.php'</script>";
		} else {
			echo "Data gagal diubah! <script>document.location.href = 'index.php'</script>";
			}
			//tutup koneksi
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
	}
	
	function hapusPasien($id) {
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$hasil = $this->tabelpasien->hapusPasien($id);
			$this->tabelpasien->close();
			if ($hasil) {
				echo "Data berhasil dihapus! <script>document.location.href = 'index.php'</script>";
		} else {
			echo "Data gagal dihapus! <script>document.location.href = 'index.php'</script>";
			}
			//tutup koneksi
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
		
	}
	function getId($i)
	{
		//mengembalikan id Pasien dengan indeks ke i
		return $this->data[$i]['id'];
	}
	function getNik($i)
	{
		//mengembalikan nik Pasien dengan indeks ke i
		return $this->data[$i]['nik'];
	}
	function getNama($i)
	{
		//mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]['nama'];
	}
	function getTempat($i)
	{
		//mengembalikan tempat Pasien dengan indeks ke i
		return $this->data[$i]['tempat'];
	}
	function getTl($i)
	{
		//mengembalikan tanggal lahir(TL) Pasien dengan indeks ke i
		return $this->data[$i]['tl'];
	}
	function getGender($i)
	{
		//mengembalikan gender Pasien dengan indeks ke i
		return $this->data[$i]['gender'];
	}
	function getEmail($i)
	{
		//mengembalikan email Pasien dengan indeks ke i
		return $this->data[$i]['email'];
	}
	function getTelp($i)
	{
		//mengembalikan telp Pasien dengan indeks ke i
		return $this->data[$i]['telp'];
	}
	function getSize()
	{
		return sizeof($this->data);
	}
}

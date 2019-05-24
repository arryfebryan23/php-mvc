<?php 

class Mahasiswa_model{

	private $dbh; // database handler
	private $stmt;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=php-mvc';

		try{
			$this->dbh = new PDO($dsn, 'root', '');
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	// private $mhs = [
	// 	[
	// 		"nama" => "Arry Febryan",
	// 		"npm" => "201610225200",
	// 		"email" => "arryfebryan23@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Siapa Kek",
	// 		"npm" => "201610225210",
	// 		"email" => "siapaya@gmail.com",
	// 		"jurusan" => "Teknik Mesin"
	// 	],
	// 	[
	// 		"nama" => "Abdullah",
	// 		"npm" => "201610225201",
	// 		"email" => "abdullah23@gmail.com",
	// 		"jurusan" => "Teknik Agama"
	// 	]
	// ];

	public function getAllMahasiswa()
	{
		// return $this->mhs;

		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>
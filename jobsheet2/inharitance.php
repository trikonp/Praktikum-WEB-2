<?php
class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}

class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

$informatika = new mahasiswa();
$informatika->panggil_nama("Triko Nanda");
$informatika->panggil_mahasiswa("Pangestu");

echo "Nama Depan " . $informatika->nama_saya;
echo "<br>Nama Belakang " . $informatika->nama_mahasiswa;

?>

<p><br><br><br>Latihan privat dan protected</p>

<?php
class manusiaa
{
    public $nama_depan;
    private $nama_belakang;
    protected $nama_panggilan;

    public function panggil_depan($depan)
    {
        $this->nama_depan = $depan;
    }

    public function setpanggil_belakang($belakang)
    {
        $this->nama_belakang = $belakang;
    }

    public function getpanggil_belakang()
    {
        return $this->nama_belakang;
    }

    public function setnama_panggilan($panggilan)
    {
        $this->nama_panggilan = $panggilan;
    }

    public function getnama_panggilan()
    {
        return $this->nama_panggilan;
    }
}

class mahasiswaa extends manusiaa
{
    public $nim;

    public function panggil_nim($nim)
    {
        $this->nim = $nim;
    }
}

$triko = new mahasiswaa();
$triko->panggil_depan("Triko Nanda");
$triko->setpanggil_belakang("Pangestu");
$triko->setnama_panggilan("Triko");
$triko->panggil_nim("220202095");

echo "Nama Depan : " . $triko->nama_depan;
echo "<br>Nama Belakang : " . $triko->getpanggil_belakang();
echo "<br>Nama Panggilan : " . $triko->getnama_panggilan();
echo "<br>NIM : " . $triko->nim;
?>
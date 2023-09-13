<html>
<head>
  <title>Aplikasi Perhitungan</title>
</head>
<body>
  <?php
  // Membuat kelas Calculator
  class Calculator {
    // Membuat properti untuk menyimpan hasil perhitungan
    private $result;

    // Membuat konstruktor untuk menginisialisasi properti result dengan nilai 0
    public function __construct() {
      $this->result = 0;
    }

    // Membuat metode untuk menambahkan dua bilangan
    public function add($a, $b) {
      // Menambahkan nilai a dan b dan menyimpannya di properti result
      $this->result = $a + $b;
      // Mengembalikan nilai properti result
      return $this->result;
    }

    // Membuat metode untuk mengurangi dua bilangan
    public function subtract($a, $b) {
      // Mengurangi nilai a dan b dan menyimpannya di properti result
      $this->result = $a - $b;
      // Mengembalikan nilai properti result
      return $this->result;
    }

    // Membuat metode untuk mengalikan dua bilangan
    public function multiply($a, $b) {
      // Mengalikan nilai a dan b dan menyimpannya di properti result
      $this->result = $a * $b;
      // Mengembalikan nilai properti result
      return $this->result;
    }

    // Membuat metode untuk membagi dua bilangan
    public function divide($a, $b) {
      // Memeriksa apakah b tidak sama dengan 0
      if ($b != 0) {
        // Membagi nilai a dan b dan menyimpannya di properti result
        $this->result = $a / $b;
        // Mengembalikan nilai properti result
        return $this->result;
      } else {
        // Jika b sama dengan 0, maka mengembalikan nilai null
        return null;
      }
    }
  }

  // Membuat objek dari kelas Calculator
  $calc = new Calculator();

  // Memanggil metode add dengan argumen 10 dan 5 dan menampilkan hasilnya dalam tag <p>
  echo "<p>10 + 5 = " . $calc->add(10, 5) . "</p>";

  // Memanggil metode subtract dengan argumen 10 dan 5 dan menampilkan hasilnya dalam tag <p>
  echo "<p>10 - 5 = " . $calc->subtract(10, 5) . "</p>";

  // Memanggil metode multiply dengan argumen 10 dan 5 dan menampilkan hasilnya dalam tag <p>
  echo "<p>10 * 5 = " . $calc->multiply(10, 5) . "</p>";

  // Memanggil metode divide dengan argumen 10 dan 5 dan menampilkan hasilnya dalam tag <p>
  echo "<p>10 / 5 = " . $calc->divide(10, 5) . "</p>";

  // Memanggil metode divide dengan argumen 10 dan 0 dan menampilkan hasilnya dalam tag <p>
  echo "<p>10 / 0 = " . $calc->divide(10, 0) . "</p>";
  
?>
</body>
</html>

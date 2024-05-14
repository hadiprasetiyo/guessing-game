<?php
  class GuessingGame {
    private $text;
    private $jumlahLoop;
    private $angkaRandom;
    private $textTemukanAku;

    public function __construct($text, $jumlahLoop) {
      $this->text = $text;
      $this->jumlahLoop = $jumlahLoop;
      $this->angkaRandom = rand(1, $jumlahLoop);
      $this->textTemukanAku = 'coba tebak aku??';
    }

    public function validateInput() {
      if ($this->jumlahLoop < 50) {
        echo '<script>
                Swal.fire({
                  icon: "warning",
                  title: "Oops...",
                  text: "Anda harus memasukkan jumlah loop lebih dari 50",
                })
              </script>';
        exit();
      }
      // footer: "<a>Why do I have this issue?</a>"
      if ($this->jumlahLoop > 150) {
        echo '<script>
                Swal.fire({
                  icon: "warning",
                  title: "Oops...",
                  text: "Jumlah maksimal loop adalah 150",
                });
              </script>';
        exit();
      }
    }

    public function displayForm() {
      echo '
        <form method="POST">
          <div class="container mx-auto flex flex-col items-center bg-gray-800 shadow-lg rounded-lg p-6 my-10">
            <p class="text-lg mb-2" >Masukkan tebakan anda ada di nomor berapa, text yang berbeda :</p>
            <input type="number" name="tebakan" class="w-full px-3 py-2 mb-4 bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:border-blue-500" />
            <input type="hidden" name="angka_random" value="'.$this->angkaRandom.'"/>
            <button type="submit" name="proses_tebakan" class="w-full bg-blue-500 hover:bg-blue-600 py-2 rounded-md text-lg font-bold">Cek</button>
          </div>
        </form>
      ';
    }

    public function displayResults() {
      $noUrut = 1;
      for ($i = 1; $i <= $this->jumlahLoop; $i++) {
        if ($i == $this->angkaRandom) {
            echo '<div>'.$noUrut.'. '.$this->textTemukanAku.'</div>';
        } else {
            echo '<div>'.$noUrut.'. '.$this->text.'</div>';
        }
        $noUrut++;
      }
    }

    public function checkGuess($tebakan,$hasil_tebakan) {
      if ($tebakan === $hasil_tebakan) {
        echo '<script>
                Swal.fire({
                  icon: "success",
                  title: "Yeayy!!",
                  text: "Tebakan anda benar!",
                  backdrop: `
                    url("img/nyan-cat.gif")
                    left top
                    no-repeat
                  `
                })
              </script>';
      } else {
        echo '<script>
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Maaf jawaban anda salah :(",
                });
              </script>';
      }
    }
  }
?>
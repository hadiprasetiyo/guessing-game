<?php
  include 'classes/GuessingGame.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guessing Game</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white p-10 min-h-screen">
  <div class="flex flex-col justify-center items-center">
    <div class="container mx-auto p-6 bg-gray-800 shadow-lg rounded-lg">
      <h2 class="text-2xl font-bold text-center mb-4">Welcome to the Guessing Game</h2>
      <form action="#" method="POST" class="flex flex-col items-center">
        <label for="text" class="text-lg mb-2">Masukkan text :</label>
        <input type="text" id="text" name="text" class="w-full px-3 py-2 mb-4 bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:border-blue-500" required>
        <label for="jumlah_loop" class="text-lg mb-2">Masukkan jumlah loop :</label>
        <input type="number" id="jumlah_loop" name="jumlah_loop" class="w-full px-3 py-2 mb-4 bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:border-blue-500" required>
        <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-blue-600 py-2 rounded-md text-lg font-bold">Start Game</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>
</html>

<?php
  echo '<div>';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
      $game = new GuessingGame($_POST['text'], $_POST['jumlah_loop']);
      $game->validateInput();
      $game->displayForm();
      echo '<div class="grid grid-cols-5 items-center gap-4">';
        $game->displayResults();
      echo '</div>';
  }
  echo '</div>';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses_tebakan'])) {
    $game = new GuessingGame("", 0);
    $game->checkGuess($_POST['tebakan'], $_POST['angka_random']);  
  }
?>

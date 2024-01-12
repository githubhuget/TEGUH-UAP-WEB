<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel dengan Warna Baris Ganjil</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin: 20px auto;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Warna hijau pada baris ganjil */
    tr:nth-child(odd) {
      background-color: #00ff00;
    }
  </style>
</head>
<body>
  <h2>Tabel dengan Warna Baris Ganjil</h2>
  <table>
    <thead>
      <tr>
        <th>Kolom 1</th>
        <th>Kolom 2</th>
        <th>Kolom 3</th>
        <th>Kolom 4</th>
        <th>Kolom 5</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Loop untuk membuat baris
        for ($i = 1; $i <= 10; $i++) {
          echo "<tr>";

          // Loop untuk membuat kolom
          for ($j = 1; $j <= 5; $j++) {
            echo "<td>Baris $i, Kolom $j</td>";
          }

          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>

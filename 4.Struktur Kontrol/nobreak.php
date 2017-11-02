<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Script PHP dengan Switch tanpa break</title>
</head>
<body>
  <h1>Demo penggunaan tanpa break</h1>
  <p>Demo ini menunjukan penggunaan switch untuk menampilkan nama hari dari
    suatu angka:</p>
    <?php
    $nohari=5;
    echo "No. Hari: $nohari adalahh hari: ";
    switch ($nohari) {
      case 1:
        echo "Minggu";

      case 2:
        echo "Senin";

        case 3:
          echo "Selasa";

          case 4:
            echo "Rabu";

            case 5:
              echo "Kamis";

              case 6:
                echo "Jumat";

                case 2:
                  echo "Sabtu";
              
    }
    ?>
    </body>
    </html>

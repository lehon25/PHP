<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Script PHP dengan Switch</title>
</head>
<body>
  <h1>Demo penggunaan switch</h1>
  <p>Demo ini menunjukan penggunaan switch untuk menampilkan nama hari dari
    suatu angka:</p>
    <?php
    $nohari=2;
    echo "No. Hari: $nohari adalahh hari: ";
    switch ($nohari) {
      case 1:
        echo "Minggu";
        break;
      case 2:
        echo "Senin";
        break;
        case 3:
          echo "Selasa";
          break;
          case 4:
            echo "Rabu";
            break;
            case 5:
              echo "Kamis";
              break;
              case 6:
                echo "Jumat";
                break;
                case 2:
                  echo "Sabtu";
                  break;
    }
    ?>
    </body>
    </html>

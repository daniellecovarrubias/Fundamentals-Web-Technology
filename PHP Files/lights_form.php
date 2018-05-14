<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> Light Bulbs</title></head>
  <body>

  <p>
  <?php
    $name = $_POST['name'];
    $battery = $_POST['battery'];
    $card = $_POST['card'];
    $bulbs = $_POST['bulbs'];
    $bulbsPrice = 0;

    if (array_key_exists('bulbs', $_POST)){
      foreach ($bulbs as $type) {
        if($type=='four_reg'){
          $bulbsPrice += 2.39;
        }
        elseif($type=='eight_reg'){
          $bulbsPrice += 4.29;
        }
        elseif($type=='four_longLife'){
          $bulbsPrice += 3.95;
        }
        else{
          $bulbsPrice += 7.49;
        }
      }
    }


    $batteryPrice = $battery * 10.42;
    $basePrice = $bulbsPrice + $batteryPrice;
    $totalPrice = $basePrice *1.175;

    echo "<br/>Thanks, $name for submitting your order! The following information has been received: <br/>";
  ?>
  </p>

  <table border = "border">
        <caption> Order Information </caption>
        <tr>
          <th> Product </th>
          <th> Unit Price </th>
          <th> Quantity Ordered </th>
          <th> Item Cost </th>
        </tr>
        <?php
        if (array_key_exists('bulbs', $_POST)){
          foreach ($bulbs as $type) {
            if($type=='four_reg'){
              echo "<tr align = 'center'>
                <td> Four 100-watt light bulbs </td>
                <td> $2.39 </td>
                <td> 1 </td>
                <td> $2.39 </td>
              </tr>";
            }
            elseif($type=='eight_reg'){
              echo "<tr align = 'center'>
                <td> Eight 100-watt light bulbs </td>
                <td> $4.29 </td>
                <td> 1 </td>
                <td> $4.29 </td>
              </tr>";
            }
            elseif($type=='four_longLife'){
              echo "<tr align = 'center'>
                <td> Four 100-watt long-life light bulbs </td>
                <td> $3.95 </td>
                <td> 1 </td>
                <td> $3.95 </td>
              </tr>";
            }
            else{
              echo "<tr align = 'center'>
                <td> Eight 100-watt long-life light bulbs </td>
                <td> $7.49 </td>
                <td> 1 </td>
                <td> $7.49 </td>
              </tr>";
            }
          }
        }
        ?>

        <?php
        if ($batteryPrice!=0){
          echo"
          <tr align = 'center'>
            <td> Battery Packs </td>
            <td> $10.42 </td>
            <td>  $battery  </td>
            <td>";  printf ("$ %3.2f", $batteryPrice);
          echo "</td>
            </tr>";
        }

        ?>
        <tr align = "center">
          <td colspan = '2'> Credit Card Used: <?php print ("$card"); ?> </td>
          <td colspan = '2'> Total Cost: <?php printf ("$ %3.2f", $totalPrice); ?> </td>
        </tr>
      </table>

  </body>
  </html>

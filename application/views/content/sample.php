<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .parent{
      width: 100%;
    }
    .child{
      width: 49%; /* dikurangi border */
      display: inline-block;
    }
    .child table{
      width: 100%;
    }
    .child th, td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div class="parent">
    <?php 
      $count = count($arr); //objectnya
      $bagi4 = $count / 4;
    ?>
    <?php for ($i=0; $i < $count; $i++) {?>  
      <?php if($i % $bagi4 == 0){?>
        <div class="child">
          <table>
            <thead>
              <tr>
                <th>Head 1</th>
                <th>Head 2</th>
                <th>Head 3</th>
              </tr>
            </thead>
            <tbody>
        <?php }?>

            <tr>
              <td><?="A".$arr[$i]?></td>
              <td><?="A".$arr[$i]?></td>
              <td><?="A".$arr[$i]?></td>
            </tr>
            
        <?php if($i % $bagi4 == $bagi4-1){?>
            </tbody>
          </table>
        </div>
      <?php }?>     
    <?php }?>
  </div>
</body>
</html>
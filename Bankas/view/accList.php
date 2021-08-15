   <?php
    require __DIR__ . '/main.php';
    ?>

   <p>Acc list</p>

   <style>
input {
    border: none;

}

table.td {
    text-align: center;
}
   </style>



   <table>
       <th>Vardas</th>
       <th>Pavarde</th>
       <th>Saskaitos numeris</th>
       <th>Asmens kodas</th>
       <th>Pinigai</th>
       <th>Veiksmai</th>
       <?php
        // echo '<pre>';
        // var_dump($bank);

        foreach ($bank as $key => $value) {
        ?>

       <tr>
           <td><?php echo $bank[$key]['name']; ?></td>
           <td><?php echo $bank[$key]['surrname']; ?></td>
           <td><?php echo $bank[$key]['account']; ?></td>
           <td><?php echo $bank[$key]['personalId']; ?></td>
           <td><?php echo $bank[$key]['funds']; ?></td>
           <td>
               <form style="display: inline-block;" action="https://localhost/lape/Bankas/index.php?route=add-funds-page" method="POST">
                   <input type="hidden" name="account" value="<?php echo $bank[$key]['account']; ?>">
                   <button>Prideti lesu</button>
               </form>
               <form style="display: inline-block;" action="https://localhost/lape/Bankas/index.php?route=remove-funds-page" method="POST">
                   <input type="hidden" name="account" value="<?php echo $bank[$key]['account']; ?>">
                   <button>Nurasyti lesas</button>
               </form>
               <form style="display: inline-block;" action="https://localhost/lape/Bankas/index.php?route=delete-acc" method="POST">
                   <input type="hidden" name="account" value="<?php echo $bank[$key]['account']; ?>">
                   <button>Istrinti saskaita</button>
               </form>
           </td>
       </tr>
       <?php } ?>

   </table>
   <?php
    require __DIR__ . '/main.php';
    ?>

   <!-- <style>
label {
    display: block;
    width: auto;
}
   </style> -->

   <p>Lėšų isemimas is saskaitos</p>
   <label>Vardas</label>
   <p><?= $temp['name'] ?></p>
   <label>Pavarde</label>
   <p><?= $temp['surrname'] ?></p>
   <label>Saskaitos Nr.</label>
   <p><?= $temp['account'] ?></p>
   <label>Lesos</label>
   <p><?= $temp['funds'] ?></p>
   <form action="https://localhost/lape/Bankas/index.php?route=remove-funds" method="POST">
       <input type="hidden" name="account" value="<?= $temp['account'] ?>" />
       <input type="text" name="funds" />
       <button type="submit" name="Pridėti" value="remove-funds">Nurasyti lesas</button>


   </form>
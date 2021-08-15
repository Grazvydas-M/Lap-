   <?php
    require __DIR__ . '/main.php';
    ?>
   <p>Add account</p>
   <form action="https://localhost/lape/Bankas/index.php?route=create" method="POST">
       <label>Vardas:</label><input type="text" name="Vardas">
       <label>Pavarde:</label><input type="text" name="Pavarde">
       <label>Asmens kodas:</label><input type="text" name="ak">
       <button type="submit" name="Pridėti" value="Pridėti sąskaitą">Pridėti sąskaitą</button>

   </form>
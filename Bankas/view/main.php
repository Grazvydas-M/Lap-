<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
    <style>
    div {
        margin: 5px;
        padding: 7px;
        border: 1px solid #ccc;
        font-size: 12px;
    }

    label {
        display: inline-block;
        width: 140px;
    }
    </style>
</head>

<body>

    <form action="https://localhost/lape/Bankas/index.php?route=acc-list" method="POST">
        <div>
            <label>Sąskaitų sąrašas: </label>
            <button type="submit">Acc List</button>
        </div>
    </form>

    <form action="https://localhost/lape/Bankas/index.php?route=create-acc" method="POST">
        <div>
            <label>Pridėti sąskaitą: </label>
            <button type="submit">Create Acc</button>
        </div>
    </form>

</body>

</html>
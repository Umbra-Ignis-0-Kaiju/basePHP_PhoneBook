<?php
$contacts = json_decode(file_get_contents('dataBase.json'), true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Телефонный справочник</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Телефонный справочник</h1>

    <h2>Добавить контакт</h2>
    <form action="addContact.php" method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="phone" placeholder="Телефон" required>
        <button type="submit">Добавить</button>
    </form>

    <h2>Список контактов</h2>
    <ul>
        <?php foreach ($contacts as $id => $contact): ?>
            <li>
                <?php 
                echo $contact['name']; 
                ?> : <?php 
                echo $contact['phone']; 
                ?>
                <form action="removeContact.php" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit">Удалить</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
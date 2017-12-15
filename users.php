<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <table>
            <tr>
                <th>ИД</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Город</th>
                <th>Имя</th>
                <th>Дата регистрации</th>
                <th>Активация</th>
            </tr>
    <?php
$host = 'localhost';
$user = 'root';
$password = 'vkoRF269';
$database = 'rk-company';

$mysqli = new mysqli($host, $user, $password, $database);
$mysqli->set_charset('UTF8');
$users = $mysqli->query("SELECT * FROM users ORDER BY id DESC");
foreach ($users as $user) {
    if ($user['activate'] == 0) {
        $status = 'Не активирован';
    } else {
        $status = 'Активирован';
    }
    ?>
        <tr>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $user['id']; ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $user['email']; ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $user['tel']; ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $user['country']; ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $user['name']; ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo date('Y-m-d', $product['date_register']); ?></td>
            <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $status; ?></td>
        </tr>
    <?php
}
?>
    </table>
</body>
</html>
    
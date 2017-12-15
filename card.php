<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <table>
            <tr>
                <th>ИД</th>
                <th>Артикул</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма корзины</th>
                <th>Дата</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Имя</th>
                <th>Город</th>
            </tr>
    <?php
$host = 'localhost';
$user = 'root';
$password = 'vkoRF269';
$database = 'rk-company';
$date = strtotime("2017-09-01");

$mysqli = new mysqli($host, $user, $password, $database);
$mysqli->set_charset('UTF8');
$products = $mysqli->query("SELECT * FROM purchase_history AS ph JOIN list_baskets AS lb ON lb.id = ph.baskets_id JOIN users ON users.id = lb.user_id WHERE lb.date > ". $date." ORDER BY lb.id DESC");
    foreach ($products as $product) {
        ?>
            <tr>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['baskets_id']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['vandor']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['price']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['quantity']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['maxsum']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo date('Y-m-d', $product['date']); ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['email']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['tel']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['name']; ?></td>
                <td style="text-align: center; padding: 2px; border: solid 1px;"><?php echo $product['country']; ?></td>
            </tr>
        <?php
    }
?>
        </table>
    </body>
</html>

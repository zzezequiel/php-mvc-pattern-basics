<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Missions Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Mission</th>
                <th class="tg-0lax">Type</th>
                

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $mission) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $mission["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $mission["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $mission["type"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>
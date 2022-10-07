<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <h1>Rockets Dashboard Page</h1>
<table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $rocket) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $rocket["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $rocket["name"] . "</td>";
                echo "</tr>";
            }
            ?>
        
        </tbody>
    </table>
    <a id="home" class="btn btn-secondary" href="./">Back</a>

</body>
</html>
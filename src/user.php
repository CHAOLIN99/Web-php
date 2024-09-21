<?php include("head.php"); ?>

<h2>Welcome!</h2>

<table cellspacing="8" class="center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
    $connection = mysqli_init();
    if (!$connection->real_connect($_ENV["DATABASE_HOST"], $_ENV["DATABASE_USER"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_DB"])) {
        die("Connection failed: " . $connection->connect_error);
    }

    $result = mysqli_query($connection, "SELECT id, name, email FROM users ORDER BY id DESC");

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><a href='profile.php?id=" . htmlspecialchars($row["id"]) . "'>" . htmlspecialchars($row["id"]) . "</a></td>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "</tr>";
        }
        mysqli_free_result($result);
    } else {
        echo "<tr><td colspan='3'>Error: " . mysqli_error($connection) . "</td></tr>";
    }

    $connection->close();
    ?>
</table>

<?php include("foot.php"); ?>
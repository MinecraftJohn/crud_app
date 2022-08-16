<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crudhub - Create Read Update and Delete</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/library.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/navigation.js" defer></script>
</head>
<body>
    <script>
        // NAVIGATION VARIABLES
        var navMobileBackground = document.getElementsByClassName("nav_mobile_background");
        var navIcon = document.getElementsByClassName("nav_icon");
        var navMobileContainer = document.getElementsByClassName("nav_mobile_container");
    </script>
    <?php include "navigation.php" ?>
    <section>
        <h1 class="pageHeaderTitle">Hello there, Welcome to Crudhub.</h1>
    </section>
    <section>
        <p class="tip_container responsive_width border_radius border_container">Do you already know what C.R.U.D means?
            <a href="https://www.educative.io/answers/what-are-create-and-read-operations-in-crud-php" class="">Learn here!</a>
        </p>
    </section>
    <section>
        <div class="table_title_container responsive_width">
            <h3 class="table_title_text">Fictitious Employees</h3>
            <button class="secondary_button border_radius">+ &nbsp Add New</button>
        </div>
        <table class="table_content_container responsive_width border_radius border_container">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Eren Yeager</td>
                <td>eren.yeager@gmail.com</td>
                <td>09123456789</td>
                <td>Edit | Delete</td>
            </tr>
            <tr>
                <td>Mikasa Ackerman</td>
                <td>mikasa.ackerman@yahoo.com</td>
                <td>09987654321</td>
                <td>Edit | Delete</td>
            </tr>
        </table>
    </section>
</body>
</html>
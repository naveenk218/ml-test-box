<?php
session_start();

if (!isset ($_SESSION['user'])) {
    header("Location: index.php");
}

include('header.php');


$file = fopen("dataset/testms.csv","r");

?>
<div class="py-5"></div>

<header class="">
    <div class="container h-100">
        <h2>Employees</h2>
        <table class="table table-responsive">
            <tbody>
            <?php
                $header = true;
                while(! feof($file))
                {
                    $row = fgetcsv($file);
                    if ($header) {
                        echo "<tr><th>" . $row[0] . "</th><th>" . $row[1] . "</th><th>" . $row[2] . "</th><th>" . $row[3] . "</th><th>" . $row[8] . "</th><th>" . $row[17] . "</th><th>&nbsp;</th></tr>";
                        $header = false;
                    } else {
                        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[8] . "</td><td>" . $row[17] . "</td><td><button class='btn btn-success' onclick=getAPIResponse($row[0])>SUBMIT</button></td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</header>

<?php
fclose($file);

include('footer.php');
?>
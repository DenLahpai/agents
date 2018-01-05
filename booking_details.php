<?php
require "conn.php";

$visitDate = $_REQUEST['visitDate'];
$pax = $_REQUEST['pax'];
$tourId = $_REQUEST['tours'];
if (isset($_REQUEST['guide'])) {
    $guide = "Yes";
}
else {
    $guide = "No";
}

$today = date('Y-m-d');

if($visitDate < $today) {
    header("location: home.php");
    $_SESSION['msg_error'] = 'Please choose a proper date!';
}
else {
    $_SESSION['msg_error'] = NULL;
    if($pax <= 0) {
        header("location: home.php");
        $_SESSION['msg_error'] = 'Please specify a proper number of pax!';
    }
    else {
        $_SESSION['msg_error'] = NULL;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $headTitle = "Booking Details";
        include "head.html";
        ?>
        <style media="screen">
            main {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
            }

            main div {
                padding: 6px;
                border: 1px solid black;
            }

            main div:nth-child(odd){
                background: gray;
                color: white;
            }

            /*styles for desktops*/
            @media screen and (min-width: 992px) {
                main {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
        </style>
    </head>
    <body>
        <div id="pax" style="display:none;">
        <?php echo $pax; ?>
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = $_SESSION['userId'];
            $database = new Database();

            //getting the reference number
            $query_generateReference = "SELECT id FROM groups ;";
            $database->query($query_generateReference);
            $r = $database->rowCount();
            $reference = $database->generate_Reference($r+1);
            //inserting data to the table groups
            $insertGroup = new Database();
            $query_insertGroup = "INSERT INTO groups(
                reference,
                pax,
                userId,
                method
                ) VALUES(
                :reference,
                :pax,
                :userId,
                :method
                )
            ;";
            $insertGroup->query($query_insertGroup);
            $insertGroup->bind(':reference', $reference);
            $insertGroup->bind(':pax', $pax);
            $insertGroup->bind(':userId', $userId);
            $insertGroup->bind(':method', 'Online');
            $insertGroup->execute();

            //getting the group Id
            $getGroupId = new Database();
            $query_getGroupId = "SELECT id FROM groups WHERE reference = :reference ;";
            $getGroupId = $database->query($query_getGroupId);
            // $groupId =


            //inserting data to the table visits
            $insertVisit = new Database();
            $query_insertVisit = "INSERT INTO visits (

                ) VALUES(

                )
            ;";

            headers("location:bookings.php");
        }
        ?>
        <form class="" action="index.html" method="post">
            <div class="content"><!-- content -->
                <?php include "nav.html";
                $pageTitle = "Booking Details";
                include "header.html";
                ?>
                <main>
                <?php
                $i = 1;
                while ($i <= $pax) {
                    include "visitorsForms.php";
                    $i++;
                }
                ?>

                </main>
                <aside>
                    <button type="submit" name="button">Submit</button>
                </aside>
        </form>
        <?php include "footer.html"; ?>
        </div><!-- end of content -->
        <script type="text/javascript" src="js/persDetails.js"></script>
    </body>
</html>

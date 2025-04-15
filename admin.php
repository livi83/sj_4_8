<?php
include('partials/header.php');

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();

// Vymazanie správy
if (isset($_GET['delete'])) {
    $contact->destroy($_GET['delete']);
    header("Location: admin.php");
    exit;
}

?>

<section class="container">
    <h1>Vítaj admin</h1>

    <h2>Kontakty</h2>
    <a href="contact-create.php" class="button">Create Contact</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Sprava</th>            
            <th>Delete</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
        <?php foreach($contacts as $con){
            echo '<tr>';
            echo '<td>'.$con['id'].'</td>';
            echo '<td>'.$con['name'].'</td>';
            echo '<td>'.$con['email'].'</td>';
            echo '<td>'.$con['message'].'</td>';
            echo '<td><a href="?delete='.$con['id'].'" 
            onclick="return confirm(\'Určite chcete vymazať túto správu?\')">Delete</a></td>';

            echo '<td><a href="contact-edit.php?id='.$con['id'].'" ">Edit</a></td>';
            echo '<td><a href="contact-show.php?id='.$con['id'].'" ">Show</a></td>';


            echo '</tr>';
        } ?>
    </table>



    </table>



</section>

<?php
include('partials/footer.php');
?>
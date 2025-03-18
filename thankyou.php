<?php
  include('partials/header.php');
?>
<main>
    <section class="banner">
      <div class="container text-white">
        <h1>Ďakujeme</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $contact_name = $_POST['meno'];
                  if (empty($contact_name)) {
                    echo "Empty contact name";
                  } else {
                    echo "<h2>$contact_name ďakujeme za vyplnenie formulára</h2";
                  }    
                }  
            ?>
        </div>
      </div>
    </section>
</main>
<?php
  include('partials/footer.php');
?>
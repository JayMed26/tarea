<!DOCTYPE html>
<html lang="en">

<?php include "fragments/head.php"; ?>

<body>

    <?php include "fragments/header.php"; ?>

    <main class="content">
  <div class="card">
            <div class="card-content">
                <form id="contact" method="post" action="/contact">
                    <h1>Contact Us</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="name" type="text" placeholder="Gemma Smith">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    <label for="message">Message</label>
                    <textarea required id="message" name="message" rows="5" cols="30" placeholder="Hello there"></textarea>
                    <button type="submit" class="form-button">Send</button>
                </form>
            </div>
        </div>
         
    </main>
 <?php include "fragments/footer.php"; ?>
</body>

</html>
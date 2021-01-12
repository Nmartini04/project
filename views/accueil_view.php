<!DOCTYPE html>
<html lang="fr">
<?php include_once 'views/includes/head.php'; ?>

<body>
    <?php include_once 'views/includes/header_acceuil.php'; ?>

    <div class="barnoir"></div>
    <main>
        <div class="container">
            <div class="carre-blanc">
                <h3>Lovely</h3>
                <h1>HAIRCUT</h1>

            </div>
            <div class="carre-noir">
                <h3>Change</h3>
                <h1>COLORING</h1>

            </div>
            <div class="carre-blanc">
                <h3>Perfect</h3>
                <h1>HAIRSTYLES</h1>

            </div>
        </div>
        <div class="tarif">
            <h3>Express Yourself</h3>
            <h1>PRICE</h1>
            <button class="btntarif"><a href="pricing">VIEW</a></button>
        </div>


        <div class="love">
            <h2>Makeover</h2>
            <h1>LOVE IS IN THE HAIR</h1>
        </div>

        <div class="picture">
            <img src="./assets/img/pictureAcc.png" alt="">
        </div>
        <div class="picsPort">
            <div class="picturePort">
                <img src="./assets/img/imgPort1.png" alt="">
                <img src="./assets/img/imgPort2.png" alt="">
                <img src="./assets/img/imgPort3.png" alt="">
                <img src="./assets/img/imgPort4.png" alt="">
                <img src="./assets/img/imgPort5.png" alt="">
            </div>
        </div>
        <div class="viewrea">
            <div class="text">
                <h2>Beauty</h2>
                <h1>READY TO IMPRESS</h1>
            </div>

            <div class="image_rea">
                <img class="imgR1" src="./assets/img/imgdec.jpg" alt="">
                <img class="imgR" src="./assets/img/pics.png" alt="">
            </div>
        </div>
        
        <div class="fin">
            <section id="contact">
            <h1>CONTACT ME</h1>

                <div class="container_contact">

                    <form name="" method="post" action="toyousender.php">

                        <input type="text" name="first_name" placeholder="NAME" required>

                        <input type="email" name="email" placeholder="MAIL" required>

                        <textarea name="comments" placeholder="MESSAGE" required></textarea>

                        <button name="send" type="submit" class="submit">SEND</button>

                    </form>

                </div>
            </section>
        </div>



    </main>

    <?php include_once 'views/includes/footer.php'; ?>
</body>

</html>
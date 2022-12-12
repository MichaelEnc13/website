<div class="btn_goTop">
    <i class="fa-solid fa-circle-arrow-up"></i>
</div>


<footer class="footer">
    <div id="contact" class="footer__title">
        Contáctanos
    </div>

    <div class="footer__socials">
        <div class="footer__socials__content">
            <h3>Correo Electronico</h3>
            <p><?php echo $mail; ?></p>
        </div>
        <div class="footer__socials__content">
            <h3>Instagram</h3>
            <p><?php echo $instagram; ?></p>
        </div>
        <div class="footer__socials__content">
            <h3>Telefono</h3>
            <p><?php echo $tel; ?></p>
        </div>
        <div class="footer__socials__content">
            <h3>Recibe novedades</h3>
            <form onsubmit="return false" class="suscriptionForm">
                <input class="footer__socials__content__input" name="email" type="email" placeholder="Correo@mail.com" type="email">
                <button class="footer__socials__content__btn" name="suscription" id="suscription">Suscribirme</button>
            </form>

        </div>




    </div>

    <div class="footer__rights">
        <p>Dotsell Solutions 2022 - Todos los derechos reservados</p>

    </div>

</footer>


<script src="src/libs/jquery.min.js"></script>
<script src="src/libs/sweetAlert.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="src/js/script.js"></script>

</body>

</html>
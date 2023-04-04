<?php
include 'views/header.php';
include 'views/menu.php';
?>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quienes Somos</h5>
                    <p>Este trabajo fue realizado por:</p>
                    <ol>
                        <li>Juan Pablo Garcia</li>
                        <li>Danilo Garcia</li>
                        <li>Carolina Franco</li>
                        <li>Santiago Cardona </li>
                    </ol>
                    <p>
                        Este trabajo cumple con los 10 items propuestos por la profesora y algo mas. 
                        Oculto dentro de la funcionalidad de la plataforma hay un reto que el que sea
                        capaz de resolver se gana 20 mil Pesitos. <strong>Buena suerte</strong> 🤞.
                    </p>
                    <h3>Reto Valido solo hasta 11/04/2023</h3>
                    <h4> Quedan <span class="reto"><?php echo 11 - date('d');?></span> dias, para que se venza el reto.</h4>
                </div>
            </div>

        </div>

    </div>
</section>
<script src="assets/vendor/bootstrap/js/bootstrap.modal.js"></script>
<?php
include 'views/footer.php';

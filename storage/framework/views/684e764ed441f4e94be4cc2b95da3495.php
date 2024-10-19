<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Pediátrico</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container"></div>
    <div class="text-content">
        <h1>CONSULTORIO</h1>
        <p>Programa tu consulta.</p>
        <a href="<?php echo e(route('reservar')); ?>" class="button">Reservar</a>
        <p>O llámanos al <strong>994 113 202</strong></p>
    </div>
    <div class="image-content">
        <img src="doctor-virtual.jpg" alt="Consulta Virtual">
    </div>
</div>

<section class="beneficios-section" id="beneficios">
    <h2>NUESTROS BENEFICIOS</h2>
    <div class="beneficios-container">
        <div class="beneficio">
            <img src="imagenes\Productos.png" alt="Productos">
            <p>Productos para recien nacidos</p>
        </div>
        <div class="beneficio">
            <img src="imagenes\examendiagnos.png" alt="Exámenes Diagnóstico">
            <p>Exámenes de diagnóstico para niños</p>
        </div>
        <div class="beneficio">
            <img src="imagenes\atencioncliente.png" alt="Atención al Cliente">
            <p>Atención al cliente</p>
        </div>
    </div>
    <div class="info-text">
        <p>Informacion sobre los productos</p>
    </div>
</section>

<section id="reservar">
    <h2>Reserva tu Cita</h2>
    <ol>
        <li>Ingresa a la web y haz clic en "Reserva tu cita".</li>
        <li>Programa tu consulta y realiza tu pago en línea.</li>
        <li>Recibirás un correo con los detalles de tu consulta.</li>
    </ol>
    <a href="<?php echo e(route('reservar')); ?>" class="button">Reservar</a>
</section>

<section id="atencion">
    <h2>Cómo Realizamos la Atención</h2>
    <div class="attention-grid">
        <div class="attention-item">
            <h3>Atención Presencial</h3>
            <p>Brindamos una atención personalizada en nuestras instalaciones, asegurando el mejor cuidado.</p>
        </div>

        <div class="attention-item">
            <h3>Soporte Telefónico</h3>
            <p>Contamos con una línea telefónica exclusiva para resolver tus consultas y brindarte orientación inmediata.</p>
        </div>

        <div class="attention-item">
            <h3>Atención 24/7</h3>
            <p>Estamos disponibles las 24 horas del día, los 7 días de la semana, para urgencias y consultas rápidas.</p>
        </div>
    </div>
</section>

<section id="especialidades"> 
    <h1>Nuestras Especialidades</h1>

    <div class="specialty-item">
        <img src="imagenes\crecimientoydes.png" alt="Crecimiento y Desarrollo Especializado">
        <h2>Crecimiento y Desarrollo Especializado</h2>
    </div>

    <div class="specialty-item">
        <img src="https://via.placeholder.com/800x200" alt="Pediatría">
        <h2>Pediatría</h2>
    </div>
</section>

<footer>
    © 2024 Consultorio Pediátrico Coral Kids - Todos los derechos reservados.
</footer>

</body>
</html><?php /**PATH C:\Users\fabal\Herd\CoralKids\resources\views/Inicio.blade.php ENDPATH**/ ?>
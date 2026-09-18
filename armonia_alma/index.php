<?php
// 1. Creamos nuestro banco de comentarios (puedes agregar todos los que quieras aquí)
$banco_testimonios = [
    [
        "texto" => '"Pensé que mi relación no tenía solución, pero con el amarre de amor recuperé a mi pareja en solo 5 días. ¡Súper confiables!"',
        "autor" => "Mariana L. ✓ Verificado"
    ],
    [
        "texto" => '"Me quitaron un bloqueo energético muy fuerte. Mi negocio volvió a prosperar de inmediato tras la limpieza de vibras."',
        "autor" => "Alejandro M. ✓ Verificado"
    ],
    [
        "texto" => '"La lectura de cartas fue increíblemente exacta. Me advirtió de cosas que pasaron tal cual a la semana siguiente. Excelente guía."',
        "autor" => "Beatriz G. ✓ Verificado"
    ],
    [
        "texto" => '"Gracias a la limpia espiritual que me hicieron, mi hogar recuperó la paz y las discusiones con mi esposo terminaron."',
        "autor" => "Carlos S. ✓ Verificado"
    ],
    [
        "texto" => '"Estaba escéptico, pero los resultados hablan por sí solos. Mi pareja regresó más cariñosa y atenta que nunca."',
        "autor" => "Jonathan D. ✓ Verificado"
    ],
    [
        "texto" => '"Excelente atención y total discreción. Sentí un cambio de energía inmediato desde la primera consulta."',
        "autor" => "Elena R. ✓ Verificado"
    ]
];

// 2. Mezclamos la lista de forma aleatoria
shuffle($banco_testimonios);

// 3. Tomamos los primeros 2 comentarios ya mezclados
$testimonios_del_momento = array_slice($banco_testimonios, 0, 2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santuario Místico - Conecta con tu Destino</title>
    <style>
        :root {
            --fondo-pantalla: #0b0816;
            --fondo-tarjeta: #130f26;
            --color-dorado: #dfb15b;
            --color-texto: #e2e0eb;
            --color-texto-mutado: #a5a1b8;
            --borde-boton: #231c42;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: var(--fondo-pantalla);
            color: var(--color-texto);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .linktree-container {
            width: 100%;
            max-width: 520px;
            min-height: 100vh;
            background-color: var(--fondo-tarjeta);
            padding: 2.5rem 1.5rem;
            text-align: center;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .perfil-foto {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            border: 3px solid var(--color-dorado);
            background: linear-gradient(45deg, #1a152e, #3c2f63);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        h1 {
            font-size: 1.6rem;
            color: var(--color-dorado);
            margin: 0 0 0.5rem 0;
            letter-spacing: 1px;
        }

        .descripcion {
            font-size: 0.95rem;
            color: var(--color-texto-mutado);
            line-height: 1.5;
            margin: 0 0 2rem 0;
            padding: 0 10px;
        }

        .enlaces-grupo {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .btn-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 1.1rem;
            background-color: #1c1736;
            border: 2px solid var(--borde-boton);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.05rem;
            transition: all 0.2s ease;
            box-shadow: 0 5px 0px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .btn-link:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0px rgba(0, 0, 0, 0.3);
        }

        .btn-whatsapp { border-color: #25D366; color: #25D366; }
        .btn-instagram { border-color: #E1306C; color: #E1306C; }
        .btn-facebook { border-color: #1877F2; color: #1877F2; }

        .testimonios-seccion {
            width: 100%;
            margin-top: auto;
            border-top: 1px solid rgba(223, 177, 91, 0.15);
            padding-top: 1.5rem;
        }

        .testimonios-seccion h3 {
            font-size: 1rem;
            color: var(--color-dorado);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .testimonio-item {
            background-color: #17132e;
            padding: 1rem;
            border-radius: 15px;
            font-size: 0.88rem;
            line-height: 1.4;
            margin-bottom: 0.8rem;
            text-align: left;
            border-left: 3px solid #4ade80;
        }

        .testimonio-item .autor {
            display: block;
            margin-top: 0.4rem;
            color: var(--color-dorado);
            font-size: 0.8rem;
            font-weight: bold;
        }

        footer {
            margin-top: 1.5rem;
            font-size: 0.75rem;
            color: var(--color-texto-mutado);
        }
    </style>
</head>
<body>

    <div class="linktree-container">
        
        <div class="perfil-foto">🔮</div>

        <h1>Santuario Místico</h1>
        
        <p class="descripcion">
            Especialistas en alta magia espiritual. Te ayudamos a recuperar el amor, limpiar las malas energías y descubrir los secretos de tu futuro. 100% garantizado.
        </p>

        <div class="enlaces-grupo">
            <a href="https://m.me/61591920838079" class="btn-link btn-messenger" target="_blank">💬 Chatear por Messenger</a>
            <a href="https://www.instagram.com/rmninterior/" class="btn-link btn-instagram" target="_blank">📸 Síguenos en Instagram</a>
            <a href="https://www.facebook.com/profile.php?id=61591920838079" class="btn-link btn-facebook" target="_blank">🔵 Visítanos en Facebook</a>       
        </div>

        <!-- Bloque de Comentarios Dinámicos -->
        <div class="testimonios-seccion">
            <h3>Resultados de Nuestros Clientes</h3>
            
            <?php 
            // Recorremos los 2 testimonios elegidos al azar y los imprimimos en HTML
            foreach ($testimonios_del_momento as $testimonio) { 
            ?>
                <div class="testimonio-item">
                    <p><?php echo $testimonio['texto']; ?></p>
                    <span class="autor"><?php echo $testimonio['autor']; ?></span>
                </div>
            <?php 
            } 
            ?>
        </div>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> Santuario Místico</p>
        </footer>

    </div>

</body>
</html>
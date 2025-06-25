<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body style="background-color:#00b19d; margin:0; padding:50px 0; font-family:Arial, Helvetica, sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <!-- Contenedor principal -->
            <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden;">
                <!-- Encabezado -->
                <tr>
                    <td style="padding: 20px; border-bottom: 1px solid #ededed;">
                        <table width="100%">
                            <tr>
                                <td width="50%" align="left">
                                    <img src="https://choco.travel/assets/images/logo2.png" alt="Chocó Travel" width="180" style="display:block;">
                                </td>
                                <td width="50%" align="right">
                                    <h2 style="margin:0; font-size:18px; color:#333;">Verifica tu cuenta</h2>
                                    <p style="margin:4px 0; font-size:12px; color:#555;">Correo: {{ $email }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Cuerpo -->
                <tr>
                    <td style="padding: 30px 40px; color:#666; font-size:15px;">
                        <p style="margin-bottom: 20px;">
                            <strong>¡Hola, {{ strtoupper($name) }}!</strong><br><br>
                            Gracias por hacer parte de <strong>CHOCÓ TRAVEL</strong>.
                        </p>

                        <p style="margin-bottom: 20px; text-align:center">Necesitamos que verifiques tu cuenta.</p>

                        <!-- Botón -->
                        <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0px auto;">
                            <tr>
                                <td align="center" bgcolor="#00b19d" style="border-radius:5px;">
                                    <a href="{{ $url_verify }}" target="_blank" style="display:inline-block; padding:12px 30px; font-size:14px; color:#ffffff; text-decoration:none; font-weight:bold;">
                                        VERIFICAR MI CUENTA
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 30px 40px; color:#666; font-size:15px;">O pega este enlace en tu navegador: {{ $url_verify }}</td>
                </tr>

                <!-- Pie de página -->
                <tr>
                    <td style="text-align:center; padding:20px 0; border-top:1px solid #ededed;">

                        <img src="https://choco.travel/assets/images/logogober.png" alt="Gobernación del Chocó" width="140" style="display:block; margin:auto;">

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

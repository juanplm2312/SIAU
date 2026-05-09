<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#8093ff,#79c7ff);
}

.contenedor{
    width:90%;
    max-width:1600px;
    height:90vh;
    background:#f5f5f5;
    border-radius:25px;
    border:5px solid #3b3b3b;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

.barra-superior{
    background:#2f2f2f;
    color:white;
    height:70px;
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
    font-size:22px;
    font-weight:bold;
}

.botones-ventana{
    position:absolute;
    left:20px;
    display:flex;
    gap:10px;
}

.circulo{
    width:12px;
    height:12px;
    border-radius:50%;
}

.rojo{
    background:#ff5f57;
}

.amarillo{
    background:#ffbd2e;
}

.gris{
    background:#999;
}

.contenido{
    display:flex;
    height:calc(100% - 70px);
}

.menu-lateral{
    width:220px;
    padding:20px;
    display:flex;
    flex-direction:column;
    gap:15px;
}

.menu-lateral a{
    text-decoration:none;
    background:white;
    padding:15px;
    border-radius:15px;
    text-align:center;
    font-size:20px;
    font-weight:bold;
    color:black;
    border:3px solid #73d9ff;
    box-shadow:0 0 10px rgba(183,0,255,0.4);
    transition:0.3s;
}

.menu-lateral a:hover{
    transform:scale(1.05);
    background:#f0faff;
}

.panel-principal{
    flex:1;
    padding:25px;
    text-align:center;
}

.panel-principal h1{
    font-size:45px;
    margin-bottom:20px;
}

.tarjetas{
    display:flex;
    justify-content:center;
    align-items:flex-start;
    gap:40px;
    margin-top:20px;
    flex-wrap:wrap;
}

.tarjeta1{
    background:white;
    border:3px solid #73d9ff;
    box-shadow:0 0 10px rgba(183,0,255,0.4);
    border-radius:15px;
    padding:20px;
    width:260px;
    min-height:180px;
    position: relative;
    left: 5px;
    
}

.tarjeta2{

    background:white;
    border:3px solid #73d9ff;
    box-shadow:0 0 10px rgba(183,0,255,0.4);
    border-radius:15px;
    padding:20px;
    width:260px;
    min-height:180px;
    position: relative;
    left:290px;
}

.icono-usuario{
    width:90px;
    height:90px;
    border:4px solid black;
    border-radius:50%;
    margin:0 auto 15px auto;
    position:relative;
}

.icono-usuario::before{
    content:'';
    position:absolute;
    width:35px;
    height:35px;
    background:black;
    border-radius:50%;
    top:15px;
    left:50%;
    transform:translateX(-50%);
}

h1{
    position:relative;
    right: 140px;
}

.icono-usuario::after{
    content:'';
    position:absolute;
    width:55px;
    height:30px;
    background:black;
    border-radius:50px 50px 0 0;
    bottom:10px;
    left:50%;
    transform:translateX(-50%);
}

.texto{
    margin-top:15px;
    font-size:16px;
    font-weight:bold;
    line-height:1.6;
}

@media(max-width:900px){

    .contenido{
        flex-direction:column;
    }

    .menu-lateral{
        width:100%;
        flex-direction:row;
        flex-wrap:wrap;
        justify-content:center;
    }

    .menu-lateral a{
        width:180px;
    }
}

</style>

</head>
<body>

<div class="contenedor">

    <div class="barra-superior">

        <div class="botones-ventana">
            <div class="circulo rojo"></div>
            <div class="circulo amarillo"></div>
            <div class="circulo gris"></div>
        </div>

        Menu Principal - Status Alumno

    </div>

    <div class="contenido">

        <div class="menu-lateral">

            <a href="#">Alumno</a>
            <a href="#">Registros</a>
            <a href="#">Servicios</a>
            <a href="#">Horario</a>
            <a href="#">Soporte</a>
            <a href="#">Eventos próximos</a>

        </div>

        <div class="panel-principal">

            <h1>Menu principal</h1>

            <div class="tarjetas">

                <div>
                    <div class="tarjeta1">
                        <div class="icono-usuario"></div>
                    </div>

                    <div class="texto">
                        Estatus de Alumno<br>
                        - Calificación.<br>
                        - Clases pendientes hoy
                    </div>
                </div>

                <div>
                    <div class="tarjeta2">
                        <p style="font-weight:bold; line-height:1.5;">
                            Notas de eventos próximos,<br>
                        </p>
                    </div>

                    
                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="/allcars/chat/css/style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                       <center><h4> Car-Bot </h4></center> 
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola, soy Car-Bot <br> ¿En que puedo ayudarte?</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" class="text" name="chat" id="chat" placeholder="Preguntame algo" style=" font-family: cursive; font-size: 15px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                    
                                </div>
                    </form>
                    <a href="/allcars/index.html"><input type="submit" value="Regresar" name="btningresar" class="botons" ></a>
        </div>
    </div>    
    <script src="app.js"></script>    
</body>
</html>
<?php session_start();
echo $_SESSION['m_id_user'];

?>
   <html>
    <head>
       <meta charset = "utf-8">
        <title></title>
        <script src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       <div class="status">
           
       </div>
        <div class="MainWindow">
            <div class="UserMessage question">
             <span class="date">2017-05-17 23:30</span>
               
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ea minima nobis magnam deleniti repellendus, reprehenderit cum id voluptatem a eaque eligendi quo doloribus, quas sit commodi facilis blanditiis eos.
            </div>
           
            <div class="UserMessage answer">
               <span class="date">2017-05-17 23:30</span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore explicabo et doloremque ipsum, quidem veritatis, ratione fugiat ea aspernatur. Officia iure aut explicabo culpa, laudantium laboriosam ratione, fugiat molestiae. Placeat.
            </div>
           
        </div>
        <div class="Message">
            
            <textarea></textarea>
        </div>
        <button class="Send">Send</button>
    </body>
</html>

<script src="js/script.js"></script>
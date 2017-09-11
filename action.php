<?php session_start();

try{
    $PDO = new PDO("mysql:host=localhost;dbname=base","root","");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOExeption $e){
    echo $e->getMessage();
}



if(isset($_POST['target']) && $_POST['target'] == "send") {
if(!isset($_SESSION['m_id_user']) || empty($_SESSION['m_id_user'])){
    $_SESSION['m_id_user'] = md5(uniqid(rand()));
}

$message = addslashes($_POST['message']);

$query = $PDO->query("INSERT INTO message (m_message,m_id_chat,m_id_user) VALUES ('$message','1','$_SESSION[m_id_user]')");
if($query){
    echo 1;
}else{
    echo 0;
}
    
}



if(isset($_POST['target']) && $_POST['target'] == "get") {
    $res = $PDO->query("SELECT * FROM message WHERE m_id_chat=1")->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res)."|".$_SESSION['m_id_user'];
    
    /*while($result = $res->fetch(PDO::FETCH_ASSOC)){
        
        if($result['m_id_user'] == $_SESSION['m_id_user']){
            $class = 'question';
            
        }else{
            $class = 'answer';
        }
        $while_result .= "
                    <div class='UserMessage $class'>
                     <span class='date'>$result[m_time]</span>

                        $result[m_message]

                    </div>
        ";
    }
    echo $while_result;*/
}


?>
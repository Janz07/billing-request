<?php
    // require 'config/database.php';



    if( isset($_POST['q1']) && isset($_POST['v_nit']) && isset($_POST['v_name']) && isset($_POST['v_address'])
     && isset($_POST['v_email']) && isset($_POST['v_phone']) && isset($_POST['v_amount']) && isset($_POST['v_des_amount']) ){

        
        $radio = $_POST['q1'];
        if ($radio == 'new') {

            $mysqli = NEW MySqli('localhost', 'root', '', 'sol_fact');

            $count = count($_POST['v_amount']);
            $nit = $_POST['v_nit'];
            $name = $_POST['v_name'];
            $address = $_POST['v_address'];
            $email = $_POST['v_email'];
            $phone = $_POST['v_phone'];
            $amount = $_POST['v_amount'];
            $desamount = $_POST['v_des_amount'];
            $remark = $_POST['v_remark'];

            foreach ($amount as $key => $value) {
                $query = "INSERT INTO amountnew(v_nit, v_name, v_address, v_email, v_phone, v_amount, v_des_amount, v_remark)
                VALUES ('"
                .    $nit    .
                "','"
                .    $name   .
                "','"
                .    $address    .
                "','"
                .    $email    .
                "','"
                .    $phone    .
                "','"
                .    $mysqli->real_escape_string($amount[$key]) .
                "','"
                .    $mysqli->real_escape_string($desamount[$key]) .
                "','"
                .    $remark    .
                "')
                ";

                $insert = $mysqli->query($query);
                
                
            }

            if (!$insert) {
                echo $mysqli->error;
            }else{
                echo "<script>
                     alert('Sus respuestas se enviaron correctamente');
                     //location.href='index.php';
                 </script>";
            }

            $mysqli->close();
        }
    }elseif ( isset($_POST['q1']) && isset($_POST['v_nit']) && isset($_POST['v_amount']) && isset($_POST['v_des_amount']) ){
        
        
        $radio = $_POST['q1'];
        if ($radio == 'old') {

            $mysqli = NEW MySqli('localhost', 'root', '', 'sol_fact');

            $count = count($_POST['v_amount']);
            $amount = $_POST['v_amount'];
            $nit = $_POST['v_nit'];
            $desamount = $_POST['v_des_amount'];
            $remark = $_POST['v_remark'];

            foreach ($amount as $key => $value) {
                $query = "INSERT INTO amount(v_nit, v_amount, v_des_amount, v_remark)
                VALUES ('"
                .    $nit  .
                "','"
                .    $mysqli->real_escape_string($amount[$key]) .
                "','"
                .    $mysqli->real_escape_string($desamount[$key]) .
                "','"
                .    $remark .
                "')
                ";

                $insert = $mysqli->query($query);
                
                
            }

            if (!$insert) {
                echo $mysqli->error;
            }else{
                echo "<script>
                     alert('Sus respuestas se enviaron correctamente');
                     //location.href='index.php';
                 </script>";
            }

            $mysqli->close();

            

            $null = '';

 
        }   
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de facturación</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script type="text/javascript" source="assets/js/jquery-3.5.1"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/css/fontello.css">
</head>
<body>
    

    <form action="index.php" method="POST">
        <div class="title">
            <h2>Formato para solicitud de facturación</h2>
        </div>

        <div class="client">
            <label for="">Cliente:</label>
            <input type="radio" name ="q1" value="new" id="id_new">Nuevo
            <input type="radio" name ="q1" value="old" id="id_old">Antiguo
        </div>

        <div class="new">
            <label for="">NIT:</label>
            <input type="text" name="v_nit" id="id_nit" required>
            <label for="">Nombre:</label>
            <input type="text" name="v_name" id="id_name" disabled> 
            <label for="">Dirección:</label>
            <input type="text" name="v_address" id="id_address"disabled>
            <label for="">Correo:</label>
            <input type="text" name="v_email" id="id_email" disabled>
            <label for="">Teléfono:</label>
            <input type="text" name="v_phone" id="id_phone" disabled>
        </div>

        <!-- <div class="old">
            <label for="">NIT:</label>
            <input type="text" name="nit_old">
        </div> -->

        <ul class="amount_list" id="id_list">
            <li class="amount_list_item">
                <div class="amount">
                    <label for="">Monto a facturar:</label>
                    <input type="text" name="v_amount[]">
                    <label for="">Descripción del servicio:</label>
                    <input type="text" name="v_des_amount[]">
                    <button class="btn_add" id="add_amount" type="button" >
                        <span class="icon-plus-circle" href="#" ></span>   
                    </button>
                </div>
            </li>   
        </ul>

        <template id="id_template_amount">
            <div class="amount">
                    <label for="">Monto a facturar:</label>
                    <input type="text" name="v_amount[]">
                    <label for="">Descripción del servicio:</label>
                    <input type="text" name="v_des_amount[]">
                    <button class="btn_less" id="less_amount" type="button">
                        <span class="icon-minus-circle" ></span>
                    </button>
                    </br>
                    
                </div>
        </template>
            

        <div class="remark">
            <label for="">Observaciones:</label>
            <input type="text" name="v_remark">
        </div>

        <div class="sub">
            <input type="submit" value="Enviar" name="send" id="send">
        </div>
        

    </form>
    

    <script src="assets/js/client.js"></script>
</body>
</html>
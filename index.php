<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(105,64,195);
            color: white;
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            align-content: center;
            align-items: center;
            height: 100vh;
        }
        .fmain{
            background: rgb(38,31,82);
            padding: 10px 0px;
            width: 990px;
            height: 535px;
            display: inline-block;
            margin: 0;
            border-radius: 20px;
            box-shadow: 5px 20px 11px 5px rgb(67,18,112);
        }
        a{
            color: white;
            text-decoration: none;
            margin: 0px 20px;
            font-family: 'Courier New', Courier, monospace;
        }
        .smain{
            float: right;
            padding: 0px 10px;
            margin: 5px 0px;
            width: 550px;
            border: 2px solid black;
            padding: 1px;
        }h1{
            font-size: 45px;
        }
        .content{
            text-align: right;
            position: relative;
            top: 90px;
            float: right;
            margin: 0px 40px;
        }#tmain{
            background: url("bgg.png");
            background-size: cover;
            margin: 0;
            height: 550px;
            border-radius: 20px;
            float: left;
            padding: 1px;
            width: 455px;
            
        }
        input{
            text-decoration: none;
            border: 2px solid white;
            background: none;
            border-radius: 10px;
            padding: 2px 0px;
            width: 55px;
            margin: 5px 15px;
            outline: none;
            color: white;
            font-size: 15px;
            text-align:center;
        }::placeholder{
            font-size: 15px;
            color: white;
            font-family: 'Courier New', Courier, monospace;
        }fieldset{
            float: right;
            border: none;
            border-right: 8px solid rgb(29, 22, 61);
            height: 500px;
            box-shadow: 5px 0px 11px 5px rgb(76, 22, 126);
            width: 355px;
            margin-left: 40px;
            text-align: center;
            background: rgb(38,30,83);
            align-items: center;
            align-content: center;
            border-radius: 20px;
        }legend{
            text-align: left;
            color: white;
            font-weight: bold;
            font-size: 15px;
            margin: 5px 0px;
        }
        img{
            display: inline-block;
            position: relative;
            top: -50px;
            border: 3px solid white;
            border-radius: 50%;
            cursor: pointer;
        }.scontent{
           margin: 0px;
           float: right;
           margin-right: 100px;
           margin-top: 10px;
        }#txtfor{
            cursor: pointer;
        }#txtfor:hover{
            color: green;
        }.mgtxt{
            width: 100px;
            text-align: center;
            cursor: pointer;
            font-size: 15px;
            border: 1px solid white;
        }.mgtxt:hover{
            color: green;
        }
    </style>
</head>
<body>
    <form  method=post>
    <div class="fmain">
        <div id="tmain"></div>
        <div id="smain">
            <div class="scontent">
            <fieldset>
            <legend>G R A D E S</legend>
            <legend>M I D T E R M</legend>
        
            <input type="text" name=mq1 placeholder="M Q 1" >
            <input type="text" name=mq2 placeholder="M Q 2" >
            <input type="text" name="mq3" placeholder="M Q 3" >
            <br>
            <input type="text" name="mq4" placeholder="M Q 4" >
            <input type="text" name="mcs" placeholder="M C S" >
            <input type="text" name="mexam" placeholder="M-EXAM">
            <br>
            <label for="mbtn">Result: </label>
            <input id="mbtn" name=mbtn class="mgtxt" type="submit" value="CLICK ME">
            <hr>
            
            <legend>F I N A L</legend>

            <input name="fq1" type="text" placeholder="F Q 1" >
            <input name="fq2" type="text" placeholder="F Q 2" >
            <input name="fq3" type="text" placeholder="F Q 3" >
            <br>
            <input name="fq4" type="text" placeholder="F Q 4" >
            <input name="fcs" type="text" placeholder="F C S" >
            <input name="fexam" type="text" placeholder="F-EXAM" >
            <br>
            <label for="fbtn">Result: </label>
            <input id="fbtn" name=fbtn class="mgtxt" type="submit" value="CLICK ME">
            <hr>

            <legend>TOTAL - RESULT</legend>
            <input style="width: 90px; margin: 5px" type="text" placeholder="F-GRADE">
            <input style="width: 90px; margin: 5px" type="text" placeholder="TOTAL-GRADE">
            <input style="width: 90px; margin: 10px 5px" type="text" placeholder="EQUIVALENT">
            <br>
            <input class="mgtxt" type="text" placeholder="RESULT" disabled>
            <hr>
            <legend>R E M A R K S</legend>
            <input  style="width: 200px; padding: 10px 0px; cursor: pointer;" type="text" placeholder="REMARK" disabled>
            </fieldset>
        </div>
    </div>
</form>
<?php
if(isset($_POST['mbtn']) && $_POST['mcs'] && $_POST['mq4']){
    $mq1 = (int)$_POST['mq1'];
    $mq2 = (int)$_POST['mq2'];
    $mq3 = (int)$_POST['mq3'];
    $mq4 = (int)$_POST['mq4'];
    $mcs = (int)$_POST['mcs'];
    $mexam = (int)$_POST['mexam'];

    $result = ($mq1 + $mq2 + $mq3 + $mq4 + $mcs + $mexam) / 6;
    print("<script>
    let mbtn = document.getElementById('mbtn');

    mbtn.value = $result; 
</script>");
}
else if(isset($_POST['fbtn']) && $_POST['fcs'] && $_POST['fq4']){
    $fq1 = (int)$_POST['fq1'];
    $fq2 = (int)$_POST['fq2'];
    $fq3 = (int)$_POST['fq3'];
    $fq4 = (int)$_POST['fq4'];
    $fcs = (int)$_POST['fcs'];
    $fexam = (int)$_POST['fexam'];

    $result = ($fq1 + $fq2 + $fq3 + $fq4 + $fcs + $fexam) / 6;
    print("<script>
    let fbtn = document.getElementById('fbtn');

    fbtn.value = $result; 
</script>");
}
?>
</body>

</html>
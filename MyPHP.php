
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
   <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
   <style>
      
      *{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }

      h1{
         text-align: center;
         line-height: 20vh;
         background-color: #6c63ff;;
      }

      

      .main-div{
         with: 100%;
         height: 80vh;
         justify-content: space-around;
         display: flex;
         align-items: center;
      }

      .left-side{
            background-color: #fff;
            
      }

      .left-side img{
         width: 250px;
         height: auto;
         padding: 20px;
      }

      .right-side{
         width:400px ;
         height: 300px;
         background-color:#dfe6e9;
         border-radius: 15px;
         justify-content: center;
         align-items: center;
         display: flex;
         flex-direction: column;
      }

      .input1{
         width: 250px;
         height: 40px;
         padding: 5px;
         outline: none;
         border-radius: 1px solid grey;
         

      }
      .selection{
         width: 100%;
         margin: 10px 0;
      }

      .btn{
         padding: 10px 16px;
         outline: none;
         border-radius: 5px;

        background-color: #6c63ff;
        color: #000;
        font-size: 0.9rem;
      }

      p{
        margin: 20px 0 0 0;
      }




   </style>
</head>
<body>
<header>
   <h1>Welcome To My Teamperature Conversion Website</h1>
   <div class="main-div">
      <div class="left-side">
        <img src="/images/img_5.png">
        <img src="/images/img_6.png">
     
      </div>

      <div class="right-side">
         <form method="POST">
            <input type="text" name="num" placeholder="Enter your value" class="input1" autocomplete="off">

            <div class="selection">
               <label>cel</label>
               <input type="radio" name="units" value="cel">
               
               <label>faren</label>
               <input type="radio" name="units" value="fren">

            </div>

            <input type="submit" name="submit" value="Convert Now" class="btn">

         </form>
         <div>
            <p>
               <?php

               if(isset($_POST['submit'])){
                  $num = $_POST['num'];
                  $temp = $_POST['units'];

                  if($temp == "cel"){
                  $result = $num * 9 / 5 + 32;
                  echo "The conversion value of cel in faren is  $result °F";

                  }else{
                     $result  = ($num - 32) * 5 / 9;
                     echo "The conversion value of fren in cel is  $result °C";
                  }
               }
            ?>
            </p>
      </div>
   </div>
</header>
</body>
</html>










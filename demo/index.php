<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Üyelik Sınıfı - Demo</title>


    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/sweetalert.min.js"></script>

    <style>

        #general {
            width:100%;
            float:left;
        }

        .left {
            width:33%;
            float:left;
        }


        .kayitol {
            width:100%;
            float:left;
        }

        .kayitol input {
            width:98%;
            float:left;
            padding:10px 10px 10px 2%;
            border:1px solid #ccc;
            font-family: Tahoma;
            font-size:13px;
            margin:0 0 10px 0;
            border-radius: 3px;;

        }

        .kayitol button {
            padding:10px;
            float:right;
            color:#fff;
            background: #2980b9;
            border-radius: 4px;
            border:none;
        }

        .center {
            width:33%;
            float:left;
        }

        .right {
            width:33%;
            float:right;
        }

       .container {
           width:980px;
           margin:0 auto;
       }
    </style>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#kayitol").on("click",function(){

                var kadi	=	$("#kadi").val();
                var email 	= 	$("#email").val();
                var password 	= 	$("#password").val();
                var ad 		= 	$("#ad").val();
                var soyad 		= 	$("#soyad").val();
                var Data 		=	"kullanici_adi="+kadi+"&email="+email+"&sifre="+password+"&ad="+ad+"&soyad="+soyad;

                $.ajax({
                    type : "POST",
                    url  : "kayit.php",
                    data : Data,
                    success : function(SendSuccess){
                        if(SendSuccess == 1) {
                            swal("TEBRİKLER", "Başarılı bir şekilde kayıt oldunuz..", "success");
                        }else{

                            swal("HATA",SendSuccess,"error");
                        }
                    }
                });
            });
        })
    </script>
</head>
<body>
    <div id="general">
        <div class="container">
            <div class="left">
                    <h2>Kayıt Ol</h2>
                <form action="" onsubmit="return false;" class="kayitol">
                    <input id="kadi" type="text" name="kullanici_adi" placeholder="kullanici_adi">
                    <input id="email" type="email" name="email" placeholder="email">
                    <input id="password" type="password" name="sifre" placeholder="şifre">
                    <input id="ad" type="text" name="ad" placeholder="ad">
                    <input id="soyad" type="text" name="soyad" placeholder="soyad">
                    <button id="kayitol" type="submit"> Kayıt Ol </button>
                </form>
            </div>
            <div class="center">

            </div>
            <div class="right">

            </div>
        </div>
    </div>
</body>
</html>

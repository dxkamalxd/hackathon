
<!DOCTYPE html>
<head>
    <title>West Coast</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--
    Polygon Template
    https://templatemo.com/tm-400-polygon
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
   <!-- <link rel="stylesheet" href="css/shope.css"> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
<style>
    .form{
        background-color: white;
        color: black;
        margin: 20px;
        padding: 10px;
        border:1px solid #3333;
        border-radius: 5px;
    }
    .input form-control{
        background-color:#3333;
        width: 90%;
        padding: 10px;
    }
</style>

</head>
<body dir="rtl">
    <div class="container">
        <div style="text-align: center">
        <h2>التقديم للوظيفة</h2>
        </div>
      <form class="form" action="Form-jobs.php" method="post" enctype="multipart/form-data">
                        <input name="name" type="text" class="input form-control" id="fullname" required placeholder="الاسم" maxlength="40" style="padding:10px;border: 1px solid #333;border-radius: 3px;border:none">
                      <input name="liv" type="text" class="input form-control" id="LE" required placeholder="السكن" maxlength="40" style="padding-bottom: 10px;border: 1px solid #333;border-radius: 3px;border:none">
              
                      <input name="phone"  class=" input form-control" id="phone" placeholder="رقم الهاتف" required maxlength="40" style="padding-bottom: 10px;border: 1px solid #333;border-radius: 3px;border:none">
        
                        <input name="email" type="email" class=" input form-control" id="email" placeholder="البريد الالكتروني" required maxlength="40" style="padding-bottom: 10px;border: 1px solid #333;border-radius: 3px;border:none">
        
                        <input name="jobs" type="text" class=" input form-control" id="jobs" placeholder="اماكن العمل" required maxlength="40" style="padding-bottom: 10px;border: 1px solid #333;border-radius: 3px;border:none">
                    <div style="text-align:center">
                            <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gn" required id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                     ذكر
                                    </label>
                                  </div>
                                  <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gn" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          انثى
                                        </label>
                                      </div>
                   <div class="mb-5 ">
                            <label for="formFile" class="btn btn-primary"> رفع CV </label>
                    <input name="cv"   type="file" class="form-control" id="formFile" placeholder="السيرة الذاتية" style="display: none" >
                 </div>
                <input type="submit" value="ارسال" name="send" class="btn success bg">
                <!-- <button type="submit" name="send" class="btn btn-success bg">ارسال</button> -->
            </div>
            </form>
        </div>
            <!-- footer start -->
<div class="templatemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <span>Copyright &copy; 2022 Company Name | Design: West Coast</span>
            </div>
            <div class="col-md-3 col-sm-12 templatemo_rfooter">
                <a href="#">
                    <div class="hex_footer">
                        <span class="fa fa-facebook"></span>
                    </div>
                </a>
                <a href="#">
                    <div class="hex_footer">
                        <span class="fa fa-twitter"></span>
                    </div>
                </a>
                <a href="#">
                    <div class="hex_footer">
                        <span class="fa fa-linkedin"></span>
                    </div>
                </a>
                <a href="#">
                    <div class="hex_footer">
                        <span class="fa fa-rss"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
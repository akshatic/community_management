
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Community management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .border1{
            border: 0.36rem solid transparent;
            border-left: none;
            border-right: none;
            border-image: linear-gradient(to left, turquoise, greenyellow) 1 0;
            border-image-slice: 1;
        }
        .border2{
            border: 0.36rem solid transparent;
            border-top: none;
            border-bottom: none;
            border-image: linear-gradient(to left, turquoise, greenyellow) 1 0;
            border-image-slice: 1;
        }
        
    </style>
</head>
<body id="body-pd">  
    <header class="header" id="header">
        <div class="header_toggle"> <svg xmlns="http://www.w3.org/2000/svg" id="header-toggle" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg> </div>
        <div class="header_img"> <img src="image/back.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">        
        <nav class="nav">
            <div> <a href="dashboard.php" class="nav_logo"> <svg xmlns="http://www.w3.org/2000/svg" class="nav_logo-icon" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
              </svg> <span class="nav_logo-name">Dashboard</span> </a>
                <div class="nav_list">

                    <a href="bill.php" class="nav_link "> <svg xmlns="http://www.w3.org/2000/svg" class="nav_icon" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                      </svg> <span class="nav_name">Your Bills</span> </a> 

                      <a href="raise.php" class="nav_link "> <svg xmlns="http://www.w3.org/2000/svg" class="nav_icon" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg> <span class="nav_name">Raise Issue</span> </a> 

                    <a href="time.php" class="nav_link "> <svg xmlns="http://www.w3.org/2000/svg" class="nav_icon" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      </svg> <span class="nav_name">Timings</span> </a> 

                     <a href="laf.php" class="nav_link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" class="nav_icon" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                      </svg><span class="nav_name">Lost And Found</span> </a> 

                     <a href="impco.php" class="nav_link "> <svg xmlns="http://www.w3.org/2000/svg" class="nav_icon" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
                      </svg> <span class="nav_name">Important Contacts</span> </a> 

                     <a href="commi.php" class="nav_link active"> <svg xmlns="http://www.w3.org/2000/svg" class="nav_icon" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                      </svg> <span class="nav_name">Know the committee</span> </a> </div>
            </div>
                <a href="logout.php" class="nav_link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" class="nav_icon" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                  </svg> <span class="nav_name">LogOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid">

      <div class="row"  style="padding-top:0.5vh">
        <div class="border1" style="height:30vh ;width: 32%;">
          <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
            <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
            <p style="text-align: center; ">President</p>
          </span>
        </div>
        <div class="border2" style="height:30vh ;width: 32%; margin-left: 2%;">
          <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
            <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
            <p style="text-align: center;">Vice-President</p>
          </span>
        </div>
        <div class="border1" style="height:30vh ;width: 32%; margin-left:2% ; ">
          <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
            <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
            <p style="text-align: center;">Treasurer</p>
          </span>
        </div>
        </div>

        <div class="row" >
          <div class="border2" style="height:30vh ;width: 32%;">
            <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
              <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
              <p style="text-align: center;">Cultural Head</p>
            </span>
          </div>
          <div class="border1" style="height:30vh ;width: 32%; margin-left: 2%;">
            <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
              <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
              <p style="text-align: center;">Sports Head</p>
            </span>
          </div>
          <div class="border2" style="height:30vh ;width: 32%; margin-left:2% ; ">
            <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
              <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
              <p style="text-align: center;">Events Head</p>
            </span>
          </div>
          </div>

          <div class="row" style="padding-bottom:0.5vh">
            <div class="border1" style="height:30vh ;width: 32%;">
              <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
                <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
                <p style="text-align: center;">Fest Coordinator</p>
              </span>
            </div>
            <div class="border2" style="height:30vh ;width: 32%; margin-left: 2%;">
              <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
                <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
                <p style="text-align: center;">Women Representative</p>
              </span>
            </div>
            <div class="border1" style="height:30vh ;width: 32%; margin-left:2% ; ">
              <span><img src="image/profile.png" style="height: 15vh; margin-left: 35%;margin-top: 5%;" alt="profile">
                <p style="text-align: center;margin-top: 2%;">Mr.Akshat Singh</p>
                <p style="text-align: center;">Youth Representative</p>
              </span>
            </div>
            </div>
     

    </div>
    
    
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="navbar.js"></script>
</body>
</html>
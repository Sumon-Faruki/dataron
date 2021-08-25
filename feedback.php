<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Nav</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="1"> -->
        <style>
            * {
                  box-sizing: border-box;
                }
                body{
                    /* background-color: rgb(179, 162, 206);
                    background-size: contain; */
                }

            header{
                 color: rgb(226, 219, 154);
                 text-align: center;
                 padding: 20px;
                 font-size: 30px;
                 font-family:cursive;
            }

            .left {
                 background-color:transparent;
                 padding: 40px;
                 float: left;
                 width: 15%; /* The width is 20%, by default */
               }

            .main{
                background-image: url(2515731.jpg);
                float: left;
                background-size: 100% 100%;
                height: 500px;
                width: 70%;
            }

            .divmain{
                background-image:none;
                background-color: transparent;
                float: left;
                background-size: 100% 100%;
                height: 500px;
                width: 63%;
            }
            .rightmain {
                background-image:none;
                background-color: transparent;
                float: left;
                /* padding:05px; */
                width: 37%; /* The width is 20%, by default */
                height: 500px;
            }
            
            .inp {
                border:none;
                border-bottom: 1px solid #1890ff;
                padding: 5px 10px;
                outline: none;
             }
         
            [placeholder]:focus::-webkit-input-placeholder {
                transition: text-indent 10s 0.0s ease; 
                text-indent: -100%;
                opacity: .9;
             }

            @media screen and (max-width: 600px) {
              .left, .main, .right {
                width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
              }
            }

            /* Here is nav bar css... */
            .topnav {
                overflow:hidden;
                background-color: #e9e9e9;
                position: -webkit-sticky; /* for safari Browser*/
                position: sticky;
                top: 0;
                height: 48px;
            }

            .topnav a{
                float: left;
                display: block;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            
            .topnav a:hover{
                background-color: #ddd;
                color: black;
            }

            .topnav a.active{
                 background-color: #2196F3;
                 color: white;
            }

            .topnav .search-container {
              float: right;
            }

            .topnav input[type=text] {
              padding: 6px;
              margin-top: 8px;
              font-size: 17px;
              border: none;
            }

            .topnav .search-container button {
              float: right;
              padding: 6px 10px;
              margin-top: 8px;
              margin-right: 16px;
              background: #ddd;
              font-size: 17px;
              border: none;
              cursor: pointer;
            }

            .topnav .search-container button:hover {
              background: #ccc;
            }

            @media screen and (max-width: 600px) {
              .topnav .search-container {
                float: none;
              }

              .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
              }
              .topnav input[type=text] {
                border: 1px solid #ccc;  
              }
            }

        </style>
    </head>
    <body  style="background-color: black;">
      
        <header>
          <h1>Welcome in <strong>Data-Ron</strong></h1>
        </header>


        <div class="left">
          </div>
        <div class="main"> 

            <!-- section artical part -->
            <div class="divmain">
                <p style="color: rgb(179, 162, 206);font-size: 30px; padding-left: 20px;height: 45px;">Send us your concern...</p>

              <form action="#">
                    <div style="padding-left: 10px; height: 50px; margin-bottom: 30px; overflow:auto">
                      <input type="text" class="inp" name="name" id="name" placeholder=" Full Name" style="background-color: transparent; color: thistle;  font-size: 15px; height: 35px;  width: 55%;">
                    </div>
        
                    <div style="padding-left: 10px;height: 50px; margin-bottom: 30px;">
                      <input type="text" class="inp" name="Email" id="Email" placeholder=" Email ID" style="background-color: transparent; color: thistle;  height: 35px;  width: 55%;">
                    </div>
        
        
                    <div style="padding-left: 10px;height: 50px; margin-bottom: 30px;">
                      <input type="text" class="inp" name="Subject" id="Subject" placeholder=" Subject" style="background-color: transparent; color: thistle;  height: 35px;  width: 55%;">
                    </div>
        
        
                    
                    <div style="padding-left: 10px;height: 110px;">
                      <textarea class="inp" placeholder="Write your message..." name="message" id="Message"  rows="5" cols="20" style="background-color: transparent; color: thistle; width: 55%;"></textarea>
                    </div>
        
                    <div style="padding-left: 10px;">
                      <input type="submit" style="background-color: transparent; color: thistle;">
                    </div>
              </form>
            </div>


            <div class="rightmain">
                <p style="color: rgb(179, 162, 206);font-size: 30px; padding-left: 1px;height: 10px;">Contact us</p>

                <div style="padding-left: 10px; overflow: auto;">
                    <p style="color: rgb(179, 162, 206);font-size: 15px; padding-left: 10px;height:85px;">We're open to get your suggestion. It's very important for us. You can contact us anytime from anywhere.</p>
                </div>

                <div style="padding-left: 10px;">
                    <p style="color: rgb(179, 162, 206);font-size: 15px; padding-left: 5px;height: 95px;">
                    <img src="addrs.jpg" alt="Address" height="20px" width="20px">
                        <b> Address:</b> Bishnudanga,
                        Adibasi Beldanga, Sagardighi,
                        Murshidabad, West Bengal, 742223
                    </p>

                </div>


                <div>
                    <p style="color: rgb(179, 162, 206);font-size: 15px; padding-left: 10px;height: 45px;">
                        <img src="ph.jpg" alt="Address" height="18px" width="20px">
                            <b> Phone:</b>: 8240464092
                        </p>
                </div>


                <div>
                    <p style="color: rgb(179, 162, 206);font-size: 15px; padding-left: 10px;height: 45px;">
                        <img src="em.jpg" alt="Address" height="18px" width="20px">
                            <b> Email:</b>Ex.10@outlook.com
                        </p>
                </div>


                <div>
                    <p style="color: rgb(179, 162, 206);font-size: 15px; padding-left: 10px;height: 15px;">
                        <img src="web.jpg" alt="Website" height="18px" width="20px">
                            <b> Website:</b>Ajexter.com
                        </p>
                </div>
            </div>
        </div>

        <footer>
          <h1>s</h1>
        </footer>

    </body>
</html>
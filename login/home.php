<!DOCTYPE html>
<html>
    <head>
        <title> Simple website </title>
    </head>    
        <style >
            *{ padding:0; margin:0;box-sizing:border-box;}
            body{ 
            background-color:black;
          }
            nav{
              height: 60px;
              background-color:grey ;
              padding: 0;
            }
            .logo{
              text-align:center;
              color:white;
              font-size: 2em;
              letter-spacing:2px;
            }
            .menu{
               font-size:20px;
               text-align: center;
            }
            .menu ul{
              display: inline flex;
              list-style: none;
              color: white;
            }
            .menu ul li{
              width:100px;
            }
            .active,.menu ul li:hover{
              background-color:rgb(143, 180, 225);
              border-radius:3px;
            }
            .menu .fi{
              margin-right:8px;
            }          

           .h{
            max-width: 650px;
            position: absolute;
            top: 400px;
            left:650px ;
            transform: translate(-800,-600);
            text-align: center;
            color: white;
            transition: 0.4s;
           }
           .h a:hover{
                background:transparent ;
                border: 1px solid indianred;
           }
           .hspam{
            font-size:30px;
           }
           .h a{
            text-decoration: none;
            background-color: indianred;
            color: white;
            padding: 10px 20px;
            letter-spacing: 5px;
           }

        </style>
    
    <body>
       <nav>
          <div class="logo"> Your Web page</div>
          <div class="menu">
            <ul>
                <li><a class="active" href="a">logout</a></li>
            </ul>   
       </nav>
        <section class="h">
          <span>Logined sucessfully</span>
            <h1 >Explore in your way </h1> 
            <br>
            <a href="#">visit now</a>
            </section>
    </body>
</html>           

        

             
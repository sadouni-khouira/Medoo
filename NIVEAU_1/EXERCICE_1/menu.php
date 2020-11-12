<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    nav{
       width:100% ;
       background: #00316b;      
    }
    ul{
        width: 80%;
        margin:0 auto;
        padding: 0;;
    }
    ul li{
        list-style: none;
        display:inline-block;
        padding: 20px;
    }
    ul li:hover{
        background: #e91e63;
    }
    ul li a {
        color:#fff;
        text-decoration: none;
    }
   .toggle{
       width: 100%;
       padding: 10px 20px;
       background: #001f44;
       text-align:right ;
       box-sizing: border-box;
       color:#fff;
       font-size: 30px;
       /*display: none;*/
   }
   @media(max-width:768px)
   {
    .toggle
    {
        display: block;
    }  
    ul
    {
        width: 100%;
        display: none;
    }
    ul li
    {
        display: block;
        text-align:center ;
    }
    .active
    {
        display: block;  
    }
   }
</style>    


</head>
<body>
    <nav>
        <div class="togle"> 
            <i class="fa fa-bars  menu" aria-hidden="true"></i>

        </div>
    
            <li><a>>CREATE</a> </li>
            <li><a href="#">READ</a> </li>
            <li><a href="#">UPDATE</a> </li>
            <li><a href="#">DELETE</a> </li>
        </ul>

    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.menu').click(function(){
            
        $('ul').toggleClass('active');
    })
})

</script>
</body>
</html>
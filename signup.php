<html>
    <head>
        <title> SAGEBOOK | Signup</title>
    </head>

    <style> 
    #bar {height:100px; 
    background-color:darkblue;
     color: white;
    padding: 4px;}

     #signupST {
        background-color:green ;
        width: 80px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
     }

     #loginBR{
        background-color:white;
         width:800px;height:400px;
          margin:auto;
        margin-top: 50px;
        padding: 10px;
        text-align: center;
        padding-top: 50px;
        height: auto;
        font-weight: bold;
     }

     #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border:solid 1px grey;
        padding: 4px;
        font-size: 14px;
     }

     #button{
        width: 300px;
        height: 40px;
        border-radius: 4px;
        font-weight: bold;
        border: none;
        background-color: darkblue;
        color: white;
     }
</style>

    <body style = "font-family:tahoma;background-color:gray;">
        <div id = "bar"  >
        <div style = "font-size: 40px;">SAGEBOOK </div>
        <div id ="signupST" >Login </div>
        </div>

        <div id= "loginBR">
            Signup to SAGEBOOK <br><br>

            <input type="text" id="text" placeholder="Email or Phone Number"><br><br>
            <input type="password" id="text" placeholder="First Name"><br><br>
            <span style = "font-weight:normal;"> Gender: </span> <br>
            <select id = "text">
                <option>Male</option>
                <option>Female</option>

            </select>
            <br> <br>

            <input type="password" id="text" placeholder="Last Name"><br><br>

            <input type="password" id="text" placeholder="Password"><br><br>
            <input type="password" id="text" placeholder="Retype Password"><br><br>

            <input type="submit" id="button" value="Sign up"> <br>

        </div>
    </body>
</html>
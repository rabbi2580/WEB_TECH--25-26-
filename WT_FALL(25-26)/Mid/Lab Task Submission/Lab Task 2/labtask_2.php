<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                    font-family: 'Times New Roman', Times, serif;
                    padding: 10px;
                    background-color: white;
                    color: black;
                    
                }
            h2,h1{
                text-align: center;
            }
            .section-box{
                background-color:white;
                padding: 15px;
                width: 200px;
                margin: auto;
                border-radius: 10px;
            }
            input,button{
                width: 100%;
                padding:5px;
                margin: auto;

            }
            button{
                background-color: blue;
                color: white;
                cursor: pointer;
                border-radius: 5px;
            }
            #error{
                color: red;
                text-align: center;
                margin-top: auto;
            }
            .activity{
                background:#e8e8e8 ;
                padding: 15px;
                margin-top: auto;
                border-radius: 10px;
                
            }
            
            .remove_button {
                background:red ;
                padding: 15px;
                margin-top: auto;
                border-radius: 10px;
                cursor: pointer;
                
            }
            
            </style>
            

    </head>
    <body>
        <h1>Participant Registration</h1>
    <div class="section_box">
        <h3>Full Name:</h3>
        <input type="text" id="name">
        <h3>Email:</h3>
        <input type="text" id="email">
        <h3>phone Number:</h3>
        <input type="text" id="phone">
        <h3>password:</h3>
        <input type="password" id="pass">
        <h3>confirm password:</h3>
        <input type="password" id="conpass"><br>
        <button onclick="register()">Register</button>
        <div id="error"></div>
        <div id="output"></div>

    </div>
    <h2>Activity Selection</h2>
    <div class="section-box">
        <input type ="text" id="activityname" placeholder="Activity name">
        <button onclick="addactivity()">Add activity</button>
        <div id="activitylist"></div>
    </div>
    <script>
    function register()
    {
        var Fullname=document.getElementById("name").value.trim();
        var email=document.getElementById("email").value.trim();
        var phone=document.getElementById("phone").value.trim();
        var password=document.getElementById("pass").value.trim();
        var conpass=document.getElementById("conpass").value.trim();
        var errordiv=document.getElementById("error");
        var outputdiv=document.getElementById("output");
        errordiv.innerHTML="";
        outputdiv.innerHTML="";
        if(Fullname===""||email===""||phone===""||password===""||conpass==="")
        {
            errordiv.innerHTML="Fill the form";
            return;

        }
        if(!email.includes("@"))
        {
            errordiv.innerHTML="invalid email"
            return;
        }
        if(isNaN(phone))
        {
            errordiv.innerHTML="phone must be a numeric"
            return;
        }
        if(phone.length>14)
        {
            errordiv.innerHTML="phone number must be less";
            return;

        }
        if(password!==conpass){
            errordiv.innerHTML="password must be same"
            return;
        }
        outputdiv.innerHTML=`
        <strong>Registration Successful</strong><br>
        Fullname:${Fullname}
        email: ${email}
        phone:${phone}
        `;
    }
    function addactivity()
    {
        var activityname=document.getElementById("activityname").value.trim();
        var activitylist=document.getElementById("activitylist");
        if(activityname==="")
            {
                alert("please enter")
                return;
            }   
        var div=document.getElement("div")
        div.className="acticvity";
        div.innerHTML=`
        ${activityname}
        <button class="remove_button"onclick="removeactivity(this)">Remove</button>
        `;
        activitylist.appendChild(div);
        document.getElementById("activityname").value="";

    
    }
    function removeactivity(button){
        button.parentElement.remove();

    }


</script>
</body>
</html>
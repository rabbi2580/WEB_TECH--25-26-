<!DOCTYPE html>
<html lang="en">
<head><title>Doctors deshboard</title>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
        
        margin: auto;
        display: flex;

    }
    #sidebar{
        width: 300px;
        background: wheat;
        padding: auto;
        height: auto;

    }
    .menu{
        padding: 20px;
        margin: auto;
        background-color: aliceblue;
        cursor: pointer;
        transition: 0.2s;

        }
    .menu:hover{
        background-color: blueviolet;
    }
    .highlight{
         background: #d6f5d6;
            border-left: 4px solid #28a745;
            font-weight: bold;
            color: #1f7a1f;
    }
    #contant{
        padding: 20px;
        flex-grow: 1;
    }
</style>
</head>
<body>
    <div id="sidebar">
        <h1>Doctors deshboard</h1>
        <div class="menu" data="Dashboard">Dashboard</div>
        <div class="menu" data="patient profile">patient profile</div>
        <div class="menu" data="appointment">appointment</div>
    </div>
    <div id="content">
        <h2>Welcome</h2>
        <div id="output"></div>
    </div>
    <script>
        let usage={
            "Dashboard":0;
            "patient profile":0;
            "appointment":0;
        };
    const sidebar=document.getElementById("sidebar");
    const items=document.querySelectorAll("menu");
    items.forEach(item=>{
        item.addEventListener("click",function(){;
        usage[name]++;
        document.getElementById("Output").innerHTML=
        `<h3>${name}</h3><p>Usage Count: ${usage[name]}</p>`;
        reorderMenu();
    });
});
function reorderMenu(){
    
}

</body>



</html>
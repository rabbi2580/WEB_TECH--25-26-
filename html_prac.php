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
        color: white;
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
        <div class="menu" data-name="Dashboard">Dashboard</div>
        <div class="menu" data-name="patient profile">patient profile</div>
        <div class="menu" data-name="appointment">appointment</div>
    </div>
    <div id="contant">
        <h2>Welcome</h2>
        <div id="output"></div>
    </div>
    <script>
        let usage={
            "Dashboard":0,
            "patient profile":0,
            "appointment":0,
        };
    const sidebar=document.getElementById("sidebar");
    const items=document.querySelectorAll(".menu");
    items.forEach(item=>{
        item.addEventListener("click",()=>{
            const name=item.dataset.name;
        usage[name]++;
        document.getElementById("output").innerHTML=
        `<h3>${name}</h3><p>Usage Count: ${usage[name]}</p>`;
        reorderMenu();
    });
});
function reorderMenu(){
    const sorted =Object.entries(usage).sort((a,b)=>b[1]-a[1]);
                document.querySelectorAll(".menu").forEach(i => {
                i.classList.remove("highlight");
            });

            // Rebuild sidebar menu items in new order
            sorted.forEach(([name, count], index) => {
                const element = document.querySelector(`.menu[data="${name}"]`);

                // Add highlight for frequently used items
                if (count > 0) {
                    element.classList.add("highlight");
                }

                sidebar.appendChild(element); // moves the element
            });
        }
    </script>



</body>



</html>
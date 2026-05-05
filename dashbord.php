<?php
include_once("db.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Dashbord</h2>

    <form action="save_health.php" method="post">
        <input type="number" name="tension" placeholder="tension">
        <input type="number" name="heart" placeholder="Frequence cardiaque">
        <button>ajouter</button>
    </form>
    <canvas id="chart"></canvas>
    <script>
        fetch("get_health.php")
        .then(r=>r.json())
        .them(data=>{
            let t = data.map(d=>d.tension);
            let d = data.map(d=>d.created_at);
            new chart(document.getElementById('chart'),{
                type:'line',
                data:{
                    labels:d,
                    datasets:[{label:"tension",data:t}]
                }
            });
        });
    </script>
</body>
</html>
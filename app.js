fetch("api/getData.php")
.then(res=>res.json())
.then(data=>{
    let tension = [];
    let dates = [];
    data.forEach(item => {
        tension.push(item.tension);
        dates.push(item.created_at);
    });
    const ctx = document.getElementById('healthchart');
    new chart(ctx,{
        type:'line',
        date:{
            labels:dates,
            datasets:[{
                label:'Tension',
                data:tension,
                borderWidth:2
            }]
        }
    });
});
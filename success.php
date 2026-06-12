<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background: linear-gradient(135deg,#0f172a,#1e293b);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.dashboard{
    width:800px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:40px;
    color:white;
    text-align:center;
    box-shadow:0 0 25px rgba(0,255,255,0.2);
}

h1{
    font-size:40px;
    margin-bottom:15px;
    color:#00ffff;
}

p{
    font-size:18px;
    margin-bottom:30px;
}

.cards{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.card{
    width:180px;
    background:rgba(255,255,255,0.1);
    padding:20px;
    border-radius:15px;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
    background:rgba(0,255,255,0.2);
}

.icon{
    font-size:40px;
    margin-bottom:10px;
}

.logout{
    margin-top:30px;
}

.logout a{
    text-decoration:none;
    background:#00ffff;
    color:black;
    padding:12px 25px;
    border-radius:10px;
    font-weight:bold;
}

.logout a:hover{
    background:white;
}

</style>

</head>

<body>

<div class="dashboard">

    <h1>✅ Login Successful</h1>

    <p>Welcome to Vidyalankar Polytechnic Student Portal</p>

    <div class="cards">

        <div class="card">
            <div class="icon">👨‍🎓</div>
            <h3>Profile</h3>
        </div>

        <div class="card">
            <div class="icon">📅</div>
            <h3>Attendance</h3>
        </div>

        <div class="card">
            <div class="icon">📚</div>
            <h3>Subjects</h3>
        </div>

        <div class="card">
            <div class="icon">📊</div>
            <h3>Results</h3>
        </div>

    </div>

    <div class="logout">
        <a href="index.html">Logout</a>
    </div>

</div>

</body>
</html>
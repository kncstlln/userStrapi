<html>
    <head>
        <title> Registration Form </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> </link>
    <style>
    body {
        background-color: #2a2b38;
    }
   .card {
 width: 190px;
 padding: 1.9rem 1.2rem;
 text-align: center;
 background: #2a2b38;
 margin-left: auto;
 margin-right: auto;
margin-top: 10em;
border-radius: 30px;
box-shadow:  29px 29px 57px #1a1b23,
             -29px -29px 57px #24252f;
}

/*Inputs*/
.field {
 margin-top: .5rem;
 display: flex;
 align-items: center;
 justify-content: center;
 gap: .5em;
 background-color: #1f2029;
 border-radius: 50px;;
 padding: .5em 1em;
}

.input-icon {
 height: 1em;
 width: 1em;
 fill: #ffeba7;
}

.input-field {
 background: none;
 border: none;
 outline: none;
 width: 100%;
 color: #d3d3d3;
}

/*Text*/
.title {
 margin-bottom: 1rem;
 font-size: 1.5em;
 font-weight: 500;
 color: #f5f5f5;
}

/*Buttons*/
.btn {
 margin: 1rem;
 border: none;
 border-radius: 4px;
 font-weight: bold;
 font-size: .8em;
 text-transform: uppercase;
 padding: 0.6em 1.2em;
 background-color: #ffeba7;
 color: #5e6681;
 box-shadow: 0 8px 24px 0 rgb(255 235 167 / 20%);
 transition: all .3s ease-in-out;
}

.btn-link {
 color: #f5f5f5;
 display: block;
 font-size: .75em;
 transition: color .3s ease-out;
}

/*Hover & focus*/
.field input:focus::placeholder {
 opacity: 0;
 transition: opacity .3s;
}

.btn:hover {
 background-color: #5e6681;
 color: #ffeba7;
 box-shadow: 0 8px 24px 0 rgb(16 39 112 / 20%);
}

.btn-link:hover {
 color: #ffeba7;
}
</style>
<body>
<div class="card">
  <h4 class="title">Sign Up</h4>
  <form action="registration.php" method="POST">
  <div class="field">
  <i class="fa-regular fa-user"></i>
      <input autocomplete="off" id="username" placeholder="Username" class="input-field" name="username" type="text">
    </div>
    <div class="field">
    <i class="fa-solid fa-at"></i>
      <input autocomplete="off" id="email" placeholder="Email" class="input-field" name="email" type="email">
    </div>
    <div class="field">
    <i class="fa-solid fa-lock"></i>
      <input autocomplete="off" id="password" placeholder="Password" class="input-field" name="password" type="password">
    </div>
    <div class="field">
    <i class="fa-solid fa-key"></i>
      <input autocomplete="off" id="conpassword" placeholder="Confirm Password" class="input-field" name="password" type="password">
    </div>
    <button class="btn" type="submit">Register</button>
  </form>
</div>
</body>




<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Keyboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
        <script src="js/index.js"></script>

    </head>
    <body class="img" onload="addListener()">
        <div class="container-fluid" >
            <div class="row one"></div>
            <div class="row txt text-center">
                <div class="col-12">
                    <h1>ТИ ИСПИША:</h1>
                    <p id="one"></p>
                </div>  
            </div>
            <div class="row one"></div>  
            <div class="row m list-group list-group-horizontal ">
                <button  class="btn buttons_click" value="Q">Q</button>
                <button  class="btn buttons_click" value="w">W</button>
                <button  class="btn buttons_click" value="E">E</button>
                <button  class="btn buttons_click" value="R">R</button>
                <button  class="btn buttons_click" value="T">T</button>
                <button  class="btn buttons_click" value="Y">Y</button>
                <button  class="btn buttons_click" value="U">U</button>
                <button  class="btn buttons_click" value="I">I</button>
                <button  class="btn buttons_click" value="O">O</button>
                <button  class="btn buttons_click" value="P">P</button>
            </div> 
            <div class="row l list-group list-group-horizontal">
                <button class="btn buttons_click" value="A">A</button>
                <button  class="btn buttons_click" value="S">S</button>
                <button  class="btn buttons_click" value="D">D</button>
                <button  class="btn buttons_click" value="F">F</button>
                <button  class="btn buttons_click" value="G">G</button>
                <button class="btn buttons_click" value="H">H</button>
                <button  class="btn buttons_click" value="J">J</button>
                <button  class="btn buttons_click" value="K">K</button>
                <button  class="btn buttons_click" value="L">L</button>        
            </div> 
            <div class="row r list-group list-group-horizontal">
                <button  class="btn buttons_click" value="Z">Z</button>
                <button  class="btn buttons_click" value="X">X</button>
                <button  class="btn buttons_click" value="C">C</button>
                <button  class="btn buttons_click" value="V">V</button>
                <button  class="btn buttons_click" value="B">B</button>
                <button  class="btn buttons_click" value="N">N</button>
                <button  class="btn buttons_click" value="M">M</button>
            </div>
            <div class="row s">
                <button class="buttons_click text-white space border border-dark" value=" ">SPACE</button>
            </div>
            
            <div class="row m list-group list-group-horizontal ">
                    <button  class="btn buttons_num_click" value="1">1</button>
                    <button  class="btn buttons_num_click" value="2">2</button>
                    <button  class="btn buttons_num_click" value="3">3</button>
                    <button  class="btn buttons_num_click" value="4">4</button>
                    <button  class="btn buttons_num_click" value="5">5</button>
                    <button  class="btn buttons_num_click" value="6">6</button>
                    <button  class="btn buttons_num_click" value="7">7</button>
                    <button  class="btn buttons_num_click" value="8">8</button>
                    <button  class="btn buttons_num_click" value="9">9</button>
                    <button  class="btn buttons_num_click" value="0">0</button>
            </div>

            <div class="row m list-group list-group-horizontal ">
                <button  class="btn buttons_num_click" value="+">+</button>
                <button  class="btn buttons_num_click" value="-">-</button>
                <button  class="btn buttons_num_click" value="*">*</button>
                <button  class="btn buttons_num_click" value="/">/</button>
                <button  class="btn buttons_num_click" value="=">=</button>
            </div>
            
        </div>
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
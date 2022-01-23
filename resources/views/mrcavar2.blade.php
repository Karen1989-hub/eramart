<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color:#1A4200;}
  #name{height:200px;
      width:100%;
      border:solid 1px black;
      text-align:center;
      background-color:#838996;}
#cont{height: 130px;
                width:100%;
                border:solid 1px black;
                margin-top:1%;
                background-color:#A38D8D}

       #d1{height: 100px;
           width:100px;
           border:solid 1px black;
           background-color: red;
           float:left;
           cursor: pointer;



           }
           #d2{height: 100px;
           width:100px;
           float:left;
           cursor: pointer;


           border:solid 1px black;
        background-color: blue;

           }

           #d3
           {height: 100px;
           width:100px;

           float:left;

           border:solid 1px black;
           background-color: yellow;
           cursor: pointer;

         }
         #d4
           {height: 100px;
           width:100px;

           float:right;


           border:solid 1px black;
           background-color:#73AB16 ;
           cursor: pointer;

         }

}
    </style>
</head>
<body>
<div id="name"><h1>2-րդ Մարզիչ</h1></div>
    <div id="cont">
        <form action="{{ route('chackMrcavar') }}" method="post">
            @csrf
            <input type="hidden" name="mrcavarId" value="2">
            <input type="hidden" name="mrcguyn" value="red">
            <button id="d1" type="submit"></button>
        </form>
        <form action="{{ route('chackMrcavar') }}" method="post" >
            @csrf
            <input type="hidden" name="mrcavarId" value="2">
            <input type="hidden" name="mrcguyn" value="blue">
            <button id="d2" type="submit"></button>

        </form>
        <form action="{{ route('chackMrcavar') }}" method="post" >
            @csrf
            <input type="hidden" name="mrcavarId" value="2">
            <input type="hidden" name="mrcguyn" value="yellow">
            <button id="d3" type="submit"></button>
        </form>
        <form action="{{ route('chackMrcavar') }}" method="post" >
            @csrf
            <input type="hidden" name="mrcavarId" value="2">
            <input type="hidden" name="mrcguyn" value="green">
            <button id="d4" type="submit"></button>
        </form>

    </div>

</body>
</html>

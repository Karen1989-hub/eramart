<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .inp1{width: 100px;}
        .in1{width:100px;}
        .in2{width:40px;}
         .inp1{width: 40px;}

        .inp2{width: 40px;}
        .inp3{width: 40px;}
        .inp4{width: 40px;}
        .inp5{width: 40px;}
        .inp80{width: 40px;}
        body{background-color:#FFFAF0;}
        .tr1{background-color:green;}
        .filtr{background-color:#006259;}




    </style>

</head>
<body >




<form action="{{ route('createMarzik') }}" method="post" enctype="multipart/form-data">
    @csrf
        <h2>Մարզիկների գրանցում</h2>
        <input type="text" name="name" placeholder="Անուն">
        <input type="text" name="lastName" placeholder="Ազգանուն">
        <input type="text" name="coacհName" placeholder="Մարզիչի անունը">
        <input type="number" name="weight" placeholder="Մարզիկի քաշը(կգ)" >
        <select name="weightClass" >
            <option  selected=''>Քաշային կարգը(կգ)</option>
            <option value="44">44.00</option>
            <option value="48.00">48.00</option>
            <option value="52.00">52.00</option>
            <option value="56.00">56.00</option>
            <option value="60.00">60.00</option>
            <option value="67.50">67.50</option>
            <option value="75.00">75.00</option>
            <option value="82.50">82.50</option>
            <option value="90.00">90.00</option>
            <option value="100.00">100.00</option>
            <option value="101">100+</option>
            <option value="110.00">110.00</option>
            <option value="125.00">125.00</option>
            <option value="140.00">140.00</option>
            <option value="141">140+</option>
        </select><br><br>
        <select name="country" id="">
            <option  selected=''>Երկիր</option>
            @foreach($allCountry as $country)
                <option value="{{$country['id']}}">{{$country['name']}}</option>
            @endforeach

        </select>
        <select name="city" id="">
            <option  selected=''>Քաղաք</option>
            <option value="1">Երևան</option>
        </select>
        <input type="text" name="team" placeholder="Թիմ">
        <input type="file" name="imgName" placeholder="Ընտրել նկար">

        <input type="submit" value="Հաստատել" >
    </form>
        <form action="{{ route('updateTablo') }}" method="post">
            @csrf
            <h2> Մարզիկի տվյալ պահին կատարվող մարզաձեւը, մոտեցումը եւ ծանրաձողի քաշը  </h2>
            <input type="number" name="katarvoxQash" placeholder="կատարվող քաշ">
            <select name="katarvoxMarzadzev">
                <option value="1m">1 m</option>
                <option value="2m">2 m</option>
                <option value="3m">3 m</option>
                <option value="4m">4 m</option>
                <option value="5m">5 m</option>
            </select>
            <select name="motecum" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="rekord">Rekord</option>
            </select>
            <input type="submit" value="Հաստատել">
        </form><br><br>

        <form action="{{ route('updateTimer') }}" method="post">
            @csrf
            <h2>Տրվող ժամանակահատված</h2>
            <input type="text" name="timer" placeholder="Ժամանակ (վայրկյան)">
            <input id="timerSubmit" type="submit"  value="Հաստատել">


        </form>
        <form action="{{ route('stopTimer') }}" method="post">
            @csrf
            <input type="hidden" value="0" name="stopTime">
            <input id="timerStop" type="submit"  value="Stop">
        </form>


        <h2>Մարզիկների տվյալներ</h2>
        <h2>44 կգ քաշային կարգ</h2>

    <table border="3">
    <tr class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt1" onclick ="f1()">
    min <br>max

</button></th>
        <th> <div class="ud1"> 1վ,1մ</div></th>
        <th> <div class="ud1">1վ,2մ</div> </th>
        <th> <div class="ud1"> 1վ,3մ</div> </th>
        <th> <div class="ud1"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr" >
        </form></div></th>
        <th> <div class="ud1"> 1վ ռեկորդ</div> </th>
        <th><button id="bt2" onclick ="f2()">
            min <br>max

        </button></th>
        <th> <div class="ud2"> 2վ,1մ</div></th>
        <th> <div class="ud2"> 2վ,2մ</div></th>
        <th> <div class="ud2">2վ,3մ</div> </th>
        <th> <div class="ud2">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud2"> 2վ ռեկորդ</div></th>
        <th><button id="bt3" onclick ="f3()">
            min <br>max

        </button></th>
        <th> <div class="ud3">3վ,1մ</div> </th>
        <th> <div class="ud3">3վ,2մ</div> </th>
        <th> <div class="ud3">3վ,3մ</div> </th>
        <th> <div class="ud3">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud3"> 3վ ռեկորդ</div></th>
        <th><button id="bt4" onclick ="f4()">
            min <br>max

        </button></th>
        <th> <div class="ud4"> 4վ,1մ</div></th>
        <th> <div class="ud4"> 4վ,2մ</div></th>
        <th> <div class="ud4"> 4վ,3մ</div></th>
        <th> <div class="ud4"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud4"> 4վ ռեկորդ</div></th>
        <th><button id="bt5" onclick ="f5()">
            min <br>max

        </button></th>
        <th> <div class="ud5">5վ,1մ</div> </th>
        <th> <div class="ud5"> 5վ,2մ</div></th>
        <th> <div class="ud5"> 5վ,3մ</div></th>
        <th> <div class="ud5"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud5"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="44" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" >
        </form></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_44 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td>

            </td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp1" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp1" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp1" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp1" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp1" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp2" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp2" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp2" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp2" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp2" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp3" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp3" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp3" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp3" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp3" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp4" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp4" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp4" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp4" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp4" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp5" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp5" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp5" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp5" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp5" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>

          <br>
          <br>



          <h2>48 կգ քաշային կարգ</h2>

          <table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt6" onclick ="f6()">
    min <br>max

</button></th>
        <th> <div class="ud6"> 1,1մ</div></th>
        <th> <div class="ud6">1վ,2մ</div> </th>
        <th> <div class="ud6"> 1վ,3մ</div> </th>
        <th> <div class="ud6"> 1վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud6"> 1վ ռեկորդ</div> </th>
        <th><button id="bt7" onclick ="f7()">
            min <br>max

        </button></th>
        <th> <div class="ud7"> 2վ,1մ</div></th>
        <th> <div class="ud7"> 2վ,2մ</div></th>
        <th> <div class="ud7">2վ,3մ</div> </th>
        <th> <div class="ud7">2վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud7"> 2վ ռեկորդ</div></th>
        <th><button id="bt8" onclick ="f8()">
            min <br>max

        </button></th>
        <th> <div class="ud8">3վ,1մ</div> </th>
        <th> <div class="ud8">3վ,2մ</div> </th>
        <th> <div class="ud8">3վ,3մ</div> </th>
        <th> <div class="ud8">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud8"> 3վ ռեկորդ</div></th>
        <th><button id="bt9" onclick ="f9()">
            min <br>max

        </button></th>
        <th> <div class="ud9"> 4վ,1մ</div></th>
        <th> <div class="ud9"> 4վ,2մ</div></th>
        <th> <div class="ud9"> 4վ,3մ</div></th>
        <th> <div class="ud9"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud9"> 4վ ռեկորդ</div></th>
        <th><button id="bt10" onclick ="f10()">
            min <br>max

        </button></th>
        <th> <div class="ud10">5վ,1մ</div> </th>
        <th> <div class="ud10"> 5վ,2մ</div></th>
        <th> <div class="ud10"> 5վ,3մ</div></th>
        <th> <div class="ud10"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud10"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="48" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_48 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp6" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp6" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp6" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp6" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp6" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp7" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp7" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp7" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp7" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp7" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp8" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp8" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp8" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp8" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp8" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp9" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp9" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp9" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp9" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp9" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp10" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp10" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp10" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp10" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp10" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>

<br>
<br>




<h2>52 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt11" onclick ="f11()">
    min <br>max

</button></th>
        <th> <div class="ud11"> 1,1մ</div></th>
        <th> <div class="ud11">1վ,2մ</div> </th>
        <th> <div class="ud11"> 1վ,3մ</div> </th>
        <th> <div class="ud11"> 1վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud11"> 1վ ռեկորդ</div> </th>
        <th><button id="bt12" onclick ="f12()">
            min <br>max

        </button></th>
        <th> <div class="ud12"> 2վ,1մ</div></th>
        <th> <div class="ud12"> 2վ,2մ</div></th>
        <th> <div class="ud12">2վ,3մ</div> </th>
        <th> <div class="ud12">2վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud12"> 2վ ռեկորդ</div></th>
        <th><button id="bt13" onclick ="f13()">
            min <br>max

        </button></th>
        <th> <div class="ud13">3վ,1մ</div> </th>
        <th> <div class="ud13">3վ,2մ</div> </th>
        <th> <div class="ud13">3վ,3մ</div> </th>
        <th> <div class="ud13">3վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud13"> 3վ ռեկորդ</div></th>
        <th><button id="bt14" onclick ="f14()">
            min <br>max

        </button></th>
        <th> <div class="ud14"> 4վ,1մ</div></th>
        <th> <div class="ud14"> 4վ,2մ</div></th>
        <th> <div class="ud14"> 4վ,3մ</div></th>
        <th> <div class="ud14"> 4վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud14"> 4վ ռեկորդ</div></th>
        <th><button id="bt15" onclick ="f15()">
            min <br>max

        </button></th>
        <th> <div class="ud15">5վ,1մ</div> </th>
        <th> <div class="ud15"> 5վ,2մ</div></th>
        <th> <div class="ud15"> 5վ,3մ</div></th>
        <th> <div class="ud15"> 5վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud15"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="52" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_52 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp11" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp11" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp11" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp11" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp11" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp12" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp12" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp12" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp12" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp12" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp13" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp13" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp13" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp13" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp13" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp14" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp14" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp14" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp14" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp14" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp15" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp15" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp15" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp15" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp15" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>






    <br>
<br>




<h2>56 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt16" onclick ="f16()">
    min <br>max

</button></th>
        <th> <div class="ud16"> 1,1մ</div></th>
        <th> <div class="ud16">1վ,2մ</div> </th>
        <th> <div class="ud16"> 1վ,3մ</div> </th>
        <th> <div class="ud16"> 1վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud16"> 1վ ռեկորդ</div> </th>
        <th><button id="bt16" onclick ="f17()">
            min <br>max

        </button></th>
        <th> <div class="ud17"> 2վ,1մ</div></th>
        <th> <div class="ud17"> 2վ,2մ</div></th>
        <th> <div class="ud17">2վ,3մ</div> </th>
        <th> <div class="ud17">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud17"> 2վ ռեկորդ</div></th>
        <th><button id="bt17" onclick ="f18()">
            min <br>max

        </button></th>
        <th> <div class="ud18">3վ,1մ</div> </th>
        <th> <div class="ud18">3վ,2մ</div> </th>
        <th> <div class="ud18">3վ,3մ</div> </th>
        <th> <div class="ud18">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud18"> 3վ ռեկորդ</div></th>
        <th><button id="bt18" onclick ="f19()">
            min <br>max

        </button></th>
        <th> <div class="ud19"> 4վ,1մ</div></th>
        <th> <div class="ud19"> 4վ,2մ</div></th>
        <th> <div class="ud19"> 4վ,3մ</div></th>
        <th> <div class="ud19"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud19"> 4վ ռեկորդ</div></th>
        <th><button id="bt19" onclick ="f20()">
            min <br>max

        </button></th>
        <th> <div class="ud20">5վ,1մ</div> </th>
        <th> <div class="ud20"> 5վ,2մ</div></th>
        <th> <div class="ud20"> 5վ,3մ</div></th>
        <th> <div class="ud20"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud20"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="56" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_56 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp16" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp16" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp16" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp16" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp16" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp17" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp17" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp17" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp17" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp17" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp18" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp18" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp18" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp18" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp18" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp19" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp19" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp19" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp19" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp19" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp20" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp20" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp20" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp20" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp20" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>





    <br>
<br>




<h2>60 կգ քաշային կարգ</h2>

<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt21" onclick ="f21()">
    min <br>max

</button></th>
        <th> <div class="ud21"> 1,1մ</div></th>
        <th> <div class="ud21">1վ,2մ</div> </th>
        <th> <div class="ud21"> 1վ,3մ</div> </th>
        <th> <div class="ud21"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud21"> 1վ ռեկորդ</div> </th>
        <th><button id="bt21" onclick ="f22()">
            min <br>max

        </button></th>
        <th> <div class="ud22"> 2վ,1մ</div></th>
        <th> <div class="ud22"> 2վ,2մ</div></th>
        <th> <div class="ud22">2վ,3մ</div> </th>
        <th> <div class="ud22">2վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud22"> 2վ ռեկորդ</div></th>
        <th><button id="bt22" onclick ="f23()">
            min <br>max

        </button></th>
        <th> <div class="ud23">3վ,1մ</div> </th>
        <th> <div class="ud23">3վ,2մ</div> </th>
        <th> <div class="ud23">3վ,3մ</div> </th>
        <th> <div class="ud23">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud23"> 3վ ռեկորդ</div></th>
        <th><button id="bt23" onclick ="f24()">
            min <br>max

        </button></th>
        <th> <div class="ud24"> 4վ,1մ</div></th>
        <th> <div class="ud24"> 4վ,2մ</div></th>
        <th> <div class="ud24"> 4վ,3մ</div></th>
        <th> <div class="ud24"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud24"> 4վ ռեկորդ</div></th>
        <th><button id="bt24" onclick ="f25()">
            min <br>max

        </button></th>
        <th> <div class="ud25">5վ,1մ</div> </th>
        <th> <div class="ud25"> 5վ,2մ</div></th>
        <th> <div class="ud25"> 5վ,3մ</div></th>
        <th> <div class="ud25"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud25"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="60" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_60 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp21" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp21" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp21" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp21" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp21" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp22" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp22" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp22" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp22" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp22" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp23" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp23" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp23" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp23" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp23" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp24" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp24" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp24" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp24" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp24" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp25" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp25" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp25" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp25" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp25" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>


    <br>
<br>




<h2>67 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt26" onclick ="f26()">
    min <br>max

</button></th>
        <th> <div class="ud26"> 1,1մ</div></th>
        <th> <div class="ud26">1վ,2մ</div> </th>
        <th> <div class="ud26"> 1վ,3մ</div> </th>
        <th> <div class="ud26"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud26"> 1վ ռեկորդ</div> </th>
        <th><button id="bt27" onclick ="f27()">
            min <br>max

        </button></th>
        <th> <div class="ud27"> 2վ,1մ</div></th>
        <th> <div class="ud27"> 2վ,2մ</div></th>
        <th> <div class="ud27">2վ,3մ</div> </th>
        <th> <div class="ud27">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud27"> 2վ ռեկորդ</div></th>
        <th><button id="bt28" onclick ="f28()">
            min <br>max

        </button></th>
        <th> <div class="ud28">3վ,1մ</div> </th>
        <th> <div class="ud28">3վ,2մ</div> </th>
        <th> <div class="ud28">3վ,3մ</div> </th>
        <th> <div class="ud28">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud28"> 3վ ռեկորդ</div></th>
        <th><button id="bt29" onclick ="f29()">
            min <br>max

        </button></th>
        <th> <div class="ud29"> 4վ,1մ</div></th>
        <th> <div class="ud29"> 4վ,2մ</div></th>
        <th> <div class="ud29"> 4վ,3մ</div></th>
        <th> <div class="ud29"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud29"> 4վ ռեկորդ</div></th>
        <th><button id="bt30" onclick ="f30()">
            min <br>max

        </button></th>
        <th> <div class="ud30">5վ,1մ</div> </th>
        <th> <div class="ud30"> 5վ,2մ</div></th>
        <th> <div class="ud30"> 5վ,3մ</div></th>
        <th> <div class="ud30"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud30"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="67" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_67 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp26" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp26" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp26" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp26" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp26" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp27" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp27" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp27" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp27" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp27" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp28" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp28" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp28" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp28" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp28" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp29" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp29" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp29" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp29" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp29" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp30" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp30" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp30" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp30" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp30" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>


    <br>
<br>



<h2>75 կգ քաշային կարգ</h2>


<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt31" onclick ="f31()">
    min <br>max

</button></th>
        <th> <div class="ud31"> 1,1մ</div></th>
        <th> <div class="ud31">1վ,2մ</div> </th>
        <th> <div class="ud31"> 1վ,3մ</div> </th>
        <th> <div class="ud31"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud31"> 1վ ռեկորդ</div> </th>
        <th><button id="bt32" onclick ="f32()">
            min <br>max

        </button></th>
        <th> <div class="ud32"> 2վ,1մ</div></th>
        <th> <div class="ud32"> 2վ,2մ</div></th>
        <th> <div class="ud32">2վ,3մ</div> </th>
        <th> <div class="ud32">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud32"> 2վ ռեկորդ</div></th>
        <th><button id="bt33" onclick ="f33()">
            min <br>max

        </button></th>
        <th> <div class="ud33">3վ,1մ</div> </th>
        <th> <div class="ud33">3վ,2մ</div> </th>
        <th> <div class="ud33">3վ,3մ</div> </th>
        <th> <div class="ud33">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud33"> 3վ ռեկորդ</div></th>
        <th><button id="bt34" onclick ="f34()">
            min <br>max

        </button></th>
        <th> <div class="ud34"> 4վ,1մ</div></th>
        <th> <div class="ud34"> 4վ,2մ</div></th>
        <th> <div class="ud34"> 4վ,3մ</div></th>
        <th> <div class="ud34"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud34"> 4վ ռեկորդ</div></th>
        <th><button id="bt35" onclick ="f35()">
            min <br>max

        </button></th>
        <th> <div class="ud35">5վ,1մ</div> </th>
        <th> <div class="ud35"> 5վ,2մ</div></th>
        <th> <div class="ud35"> 5վ,3մ</div></th>
        <th> <div class="ud35"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud35"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="75" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_75 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp31" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp31" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp31" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp31" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp31" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp32" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp32" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp32" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp32" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp32" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp33" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp33" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp33" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp33" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp33" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp34" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp34" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp34" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp34" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp34" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp35" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp35" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp35" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp35" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp35" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>





    <br>
<br>



<h2>82.50 կգ քաշային կարգ</h2>


<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt36" onclick ="f36()">
    min <br>max

</button></th>
        <th> <div class="ud36"> 1,1մ</div></th>
        <th> <div class="ud36">1վ,2մ</div> </th>
        <th> <div class="ud36"> 1վ,3մ</div> </th>
        <th> <div class="ud36"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud36"> 1վ ռեկորդ</div> </th>
        <th><button id="bt37" onclick ="f37()">
            min <br>max

        </button></th>
        <th> <div class="ud37"> 2վ,1մ</div></th>
        <th> <div class="ud37"> 2վ,2մ</div></th>
        <th> <div class="ud37">2վ,3մ</div> </th>
        <th> <div class="ud37">2վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud37"> 2վ ռեկորդ</div></th>
        <th><button id="bt38" onclick ="f38()">
            min <br>max

        </button></th>
        <th> <div class="ud38">3վ,1մ</div> </th>
        <th> <div class="ud38">3վ,2մ</div> </th>
        <th> <div class="ud38">3վ,3մ</div> </th>
        <th> <div class="ud38">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud38"> 3վ ռեկորդ</div></th>
        <th><button id="bt39" onclick ="f39()">
            min <br>max

        </button></th>
        <th> <div class="ud39"> 4վ,1մ</div></th>
        <th> <div class="ud39"> 4վ,2մ</div></th>
        <th> <div class="ud39"> 4վ,3մ</div></th>
        <th> <div class="ud39"> 4վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud39"> 4վ ռեկորդ</div></th>
        <th><button id="bt40" onclick ="f40()">
            min <br>max

        </button></th>
        <th> <div class="ud40">5վ,1մ</div> </th>
        <th> <div class="ud40"> 5վ,2մ</div></th>
        <th> <div class="ud40"> 5վ,3մ</div></th>
        <th> <div class="ud40"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud40"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="82" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_82 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp36" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp36" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp36" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp36" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp36" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp37" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp37" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp37" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp37" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp37" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp38" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp38" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp38" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp38" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp38" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp39" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp39" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp39" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp39" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp39" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp40" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp40" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp40" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp40" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp40" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>



    <br>
<br>




<h2> 90.00 կգ քաշային կարգ</h2>

<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt41" onclick ="f41()">
    min <br>max

</button></th>
        <th> <div class="ud41"> 1,1մ</div></th>
        <th> <div class="ud41">1վ,2մ</div> </th>
        <th> <div class="ud41"> 1վ,3մ</div> </th>
        <th> <div class="ud41"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud41"> 1վ ռեկորդ</div> </th>
        <th><button id="bt42" onclick ="f42()">
            min <br>max

        </button></th>
        <th> <div class="ud42"> 2վ,1մ</div></th>
        <th> <div class="ud42"> 2վ,2մ</div></th>
        <th> <div class="ud42">2վ,3մ</div> </th>
        <th> <div class="ud42">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud42"> 2վ ռեկորդ</div></th>
        <th><button id="bt43" onclick ="f43()">
            min <br>max

        </button></th>
        <th> <div class="ud43">3վ,1մ</div> </th>
        <th> <div class="ud43">3վ,2մ</div> </th>
        <th> <div class="ud43">3վ,3մ</div> </th>
        <th> <div class="ud43">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud43"> 3վ ռեկորդ</div></th>
        <th><button id="bt44" onclick ="f44()">
            min <br>max

        </button></th>
        <th> <div class="ud44"> 4վ,1մ</div></th>
        <th> <div class="ud44"> 4վ,2մ</div></th>
        <th> <div class="ud44"> 4վ,3մ</div></th>
        <th> <div class="ud44"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud44"> 4վ ռեկորդ</div></th>
        <th><button id="bt45" onclick ="f45()">
            min <br>max

        </button></th>
        <th> <div class="ud45">5վ,1մ</div> </th>
        <th> <div class="ud45"> 5վ,2մ</div></th>
        <th> <div class="ud45"> 5վ,3մ</div></th>
        <th> <div class="ud45"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud45"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="90" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_90 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp41" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp41" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp41" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp41" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp41" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp42" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp42" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp42" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp42" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp42" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp43" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp43" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp43" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp43" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp43" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp44" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp44" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp44" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp44" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp44" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp45" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp45" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp45" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp45" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp45" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
    </table>





    <br>
<br>




<h2> 100.00 կգ քաշային կարգ</h2>

<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt46" onclick ="f46()">
    min <br>max

</button></th>
        <th> <div class="ud46"> 1,1մ</div></th>
        <th> <div class="ud46">1վ,2մ</div> </th>
        <th> <div class="ud46"> 1վ,3մ</div> </th>
        <th> <div class="ud46"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud46"> 1վ ռեկորդ</div> </th>
        <th><button id="bt47" onclick ="f47()">
            min <br>max

        </button></th>
        <th> <div class="ud47"> 2վ,1մ</div></th>
        <th> <div class="ud47"> 2վ,2մ</div></th>
        <th> <div class="ud47">2վ,3մ</div> </th>
        <th> <div class="ud47">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud47"> 2վ ռեկորդ</div></th>
        <th><button id="bt48" onclick ="f48()">
            min <br>max

        </button></th>
        <th> <div class="ud48">3վ,1մ</div> </th>
        <th> <div class="ud48">3վ,2մ</div> </th>
        <th> <div class="ud48">3վ,3մ</div> </th>
        <th> <div class="ud48">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud48"> 3վ ռեկորդ</div></th>
        <th><button id="bt49" onclick ="f49()">
            min <br>max

        </button></th>
        <th> <div class="ud49"> 4վ,1մ</div></th>
        <th> <div class="ud49"> 4վ,2մ</div></th>
        <th> <div class="ud49"> 4վ,3մ</div></th>
        <th> <div class="ud49"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud49"> 4վ ռեկորդ</div></th>
        <th><button id="bt50" onclick ="f50()">
            min <br>max

        </button></th>
        <th> <div class="ud50">5վ,1մ</div> </th>
        <th> <div class="ud50"> 5վ,2մ</div></th>
        <th> <div class="ud50"> 5վ,3մ</div></th>
        <th> <div class="ud50"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud50"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="100" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_100 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp46" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp46" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp46" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp46" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp46" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp47" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp47" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp47" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp47" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp47" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp48" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp48" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp48" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp48" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp48" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp49" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp49" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp49" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp49" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp49" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp50" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp50" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp50" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp50" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp50" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>



                <br>
<br>



<h2> 100+ կգ քաշային կարգ</h2>

<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt51" onclick ="f51()">
    min <br>max

</button></th>
        <th> <div class="ud51"> 1,1մ</div></th>
        <th> <div class="ud51">1վ,2մ</div> </th>
        <th> <div class="ud51"> 1վ,3մ</div> </th>
        <th> <div class="ud51"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud51"> 1վ ռեկորդ</div> </th>
        <th><button id="bt52" onclick ="f52()">
            min <br>max

        </button></th>
        <th> <div class="ud52"> 2վ,1մ</div></th>
        <th> <div class="ud52"> 2վ,2մ</div></th>
        <th> <div class="ud52">2վ,3մ</div> </th>
        <th> <div class="ud52">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud52"> 2վ ռեկորդ</div></th>
        <th><button id="bt53" onclick ="f53()">
            min <br>max

        </button></th>
        <th> <div class="ud53">3վ,1մ</div> </th>
        <th> <div class="ud53">3վ,2մ</div> </th>
        <th> <div class="ud53">3վ,3մ</div> </th>
        <th> <div class="ud53">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud53"> 3վ ռեկորդ</div></th>
        <th><button id="bt54" onclick ="f54()">
            min <br>max

        </button></th>
        <th> <div class="ud54"> 4վ,1մ</div></th>
        <th> <div class="ud54"> 4վ,2մ</div></th>
        <th> <div class="ud54"> 4վ,3մ</div></th>
        <th> <div class="ud54"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud54"> 4վ ռեկորդ</div></th>
        <th><button id="bt55" onclick ="f55()">
            min <br>max

        </button></th>
        <th> <div class="ud55">5վ,1մ</div> </th>
        <th> <div class="ud55"> 5վ,2մ</div></th>
        <th> <div class="ud55"> 5վ,3մ</div></th>
        <th> <div class="ud55"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud55"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="101" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_101 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp51" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp51" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp51" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp51" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp51" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp52" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp52" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp52" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp52" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp52" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp53" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp53" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp53" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp53" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp53" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp54" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp54" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp54" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp54" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp54" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp55" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp55" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp55" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp55" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp55" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>





                <br>
<br>




<h2> 110.00 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt56" onclick ="f56()">
    min <br>max

</button></th>
        <th> <div class="ud56"> 1,1մ</div></th>
        <th> <div class="ud56">1վ,2մ</div> </th>
        <th> <div class="ud56"> 1վ,3մ</div> </th>
        <th> <div class="ud56"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud56"> 1վ ռեկորդ</div> </th>
        <th><button id="bt57" onclick ="f57()">
            min <br>max

        </button></th>
        <th> <div class="ud57"> 2վ,1մ</div></th>
        <th> <div class="ud57"> 2վ,2մ</div></th>
        <th> <div class="ud57">2վ,3մ</div> </th>
        <th> <div class="ud57">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud57"> 2վ ռեկորդ</div></th>
        <th><button id="bt58" onclick ="f58()">
            min <br>max

        </button></th>
        <th> <div class="ud58">3վ,1մ</div> </th>
        <th> <div class="ud58">3վ,2մ</div> </th>
        <th> <div class="ud58">3վ,3մ</div> </th>
        <th> <div class="ud58">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud58"> 3վ ռեկորդ</div></th>
        <th><button id="bt59" onclick ="f59()">
            min <br>max

        </button></th>
        <th> <div class="ud59"> 4վ,1մ</div></th>
        <th> <div class="ud59"> 4վ,2մ</div></th>
        <th> <div class="ud59"> 4վ,3մ</div></th>
        <th> <div class="ud59"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud59"> 4վ ռեկորդ</div></th>
        <th><button id="bt60" onclick ="f60()">
            min <br>max

        </button></th>
        <th> <div class="ud60">5վ,1մ</div> </th>
        <th> <div class="ud60"> 5վ,2մ</div></th>
        <th> <div class="ud60"> 5վ,3մ</div></th>
        <th> <div class="ud60"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud60"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="110" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_110 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp56" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp56" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp56" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp56" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp56" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp57" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp57" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp57" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp57" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp57" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp58" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp58" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp58" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp58" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp58" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp59" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp59" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp59" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp59" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp59" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp60" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp60" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp60" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp60" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp60" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>






                <br>
<br>




<h2> 125.00 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt61" onclick ="f61()">
    min <br>max

</button></th>
        <th> <div class="ud61"> 1,1մ</div></th>
        <th> <div class="ud61">1վ,2մ</div> </th>
        <th> <div class="ud61"> 1վ,3մ</div> </th>
        <th> <div class="ud61"> 1վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud61"> 1վ ռեկորդ</div> </th>
        <th><button id="bt62" onclick ="f62()">
            min <br>max

        </button></th>
        <th> <div class="ud62"> 2վ,1մ</div></th>
        <th> <div class="ud62"> 2վ,2մ</div></th>
        <th> <div class="ud62">2վ,3մ</div> </th>
        <th> <div class="ud62">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud62"> 2վ ռեկորդ</div></th>
        <th><button id="bt63" onclick ="f63()">
            min <br>max

        </button></th>
        <th> <div class="ud63">3վ,1մ</div> </th>
        <th> <div class="ud63">3վ,2մ</div> </th>
        <th> <div class="ud63">3վ,3մ</div> </th>
        <th> <div class="ud63">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud63"> 3վ ռեկորդ</div></th>
        <th><button id="bt64" onclick ="f64()">
            min <br>max

        </button></th>
        <th> <div class="ud64"> 4վ,1մ</div></th>
        <th> <div class="ud64"> 4վ,2մ</div></th>
        <th> <div class="ud64"> 4վ,3մ</div></th>
        <th> <div class="ud64"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud64"> 4վ ռեկորդ</div></th>
        <th><button id="bt65" onclick ="f65()">
            min <br>max

        </button></th>
        <th> <div class="ud65">5վ,1մ</div> </th>
        <th> <div class="ud65"> 5վ,2մ</div></th>
        <th> <div class="ud65"> 5վ,3մ</div></th>
        <th> <div class="ud65"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud65"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="125" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_125 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp61" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp61" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp61" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp61" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp61" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp62" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp62" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp62" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp62" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp62" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp63" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp63" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp63" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp63" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp63" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp64" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp64" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp64" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp64" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp64" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp65" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp65" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp65" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp65" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp65" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>




                <br>
<br>




<h2> 140.00 կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt66" onclick ="f66()">
    min <br>max

</button></th>
        <th> <div class="ud66"> 1,1մ</div></th>
        <th> <div class="ud66">1վ,2մ</div> </th>
        <th> <div class="ud66"> 1վ,3մ</div> </th>
        <th> <div class="ud66"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud66"> 1վ ռեկորդ</div> </th>
        <th><button id="bt67" onclick ="f67()">
            min <br>max

        </button></th>
        <th> <div class="ud67"> 2վ,1մ</div></th>
        <th> <div class="ud67"> 2վ,2մ</div></th>
        <th> <div class="ud67">2վ,3մ</div> </th>
        <th> <div class="ud67">2վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud67"> 2վ ռեկորդ</div></th>
        <th><button id="bt68" onclick ="f68()">
            min <br>max

        </button></th>
        <th> <div class="ud68">3վ,1մ</div> </th>
        <th> <div class="ud68">3վ,2մ</div> </th>
        <th> <div class="ud68">3վ,3մ</div> </th>
        <th> <div class="ud68">3վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud68"> 3վ ռեկորդ</div></th>
        <th><button id="bt69" onclick ="f69()">
            min <br>max

        </button></th>
        <th> <div class="ud69"> 4վ,1մ</div></th>
        <th> <div class="ud69"> 4վ,2մ</div></th>
        <th> <div class="ud69"> 4վ,3մ</div></th>
        <th> <div class="ud69"> 4վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud69"> 4վ ռեկորդ</div></th>
        <th><button id="bt70" onclick ="f70()">
            min <br>max

        </button></th>
        <th> <div class="ud70">5վ,1մ</div> </th>
        <th> <div class="ud70"> 5վ,2մ</div></th>
        <th> <div class="ud70"> 5վ,3մ</div></th>
        <th> <div class="ud70"> 5վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud70"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="140" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_140 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp66" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp66" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp66" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp66" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp66" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp67" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp67" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp67" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp67" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp67" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp68" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp68" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp68" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp68" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp68" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp69" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp69" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp69" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp69" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp69" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp70" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp70" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp70" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp70" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp70" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>





                <br>
<br>




<h2> 140+ կգ քաշային կարգ</h2>
<table border="4">
    <tr  class='tr1'>
        <th>№</th>
        <th>Մարզիկի նկար</th>
        <th>Կատարում է</th>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Սեփական քաշ</th>
        <th>Քաշային կարգը</th>

        <th><button id="bt71" onclick ="f71()">
    min <br>max

</button></th>
        <th> <div class="ud71"> 1,1մ</div></th>
        <th> <div class="ud71">1վ,2մ</div> </th>
        <th> <div class="ud71"> 1վ,3մ</div> </th>
        <th> <div class="ud71"> 1վ մեծագույն  <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="v1_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud71"> 1վ ռեկորդ</div> </th>
        <th><button id="bt72" onclick ="f72()">
            min <br>max

        </button></th>
        <th> <div class="ud72"> 2վ,1մ</div></th>
        <th> <div class="ud72"> 2վ,2մ</div></th>
        <th> <div class="ud72">2վ,3մ</div> </th>
        <th> <div class="ud72">2վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="v2_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud72"> 2վ ռեկորդ</div></th>
        <th><button id="bt73" onclick ="f73()">
            min <br>max

        </button></th>
        <th> <div class="ud73">3վ,1մ</div> </th>
        <th> <div class="ud73">3վ,2մ</div> </th>
        <th> <div class="ud73">3վ,3մ</div> </th>
        <th> <div class="ud73">3վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="v3_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div> </th>
        <th> <div class="ud73"> 3վ ռեկորդ</div></th>
        <th><button id="bt74" onclick ="f74()">
            min <br>max

        </button></th>
        <th> <div class="ud74"> 4վ,1մ</div></th>
        <th> <div class="ud74"> 4վ,2մ</div></th>
        <th> <div class="ud74"> 4վ,3մ</div></th>
        <th> <div class="ud74"> 4վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="v4_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud74"> 4վ ռեկորդ</div></th>
        <th><button id="bt75" onclick ="f75()">
            min <br>max

        </button></th>
        <th> <div class="ud75">5վ,1մ</div> </th>
        <th> <div class="ud75"> 5վ,2մ</div></th>
        <th> <div class="ud75"> 5վ,3մ</div></th>
        <th> <div class="ud75"> 5վ մեծագույն   <form action="{{ route('nermucum') }}" method="post">
            @csrf
            <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="v5_summ" name="weightClassFilterSumm">
            <input type="submit" value="filtrel" class="filtr">
        </form></div></th>
        <th> <div class="ud75"> 5վ ռեկորդ</div></th>

        <th>Ընդհանուր գումար <input type="hidden" value="141" name="weightClassFilter">
            <input type="hidden" value="summ" name="weightClassFilterSumm">
            <input type="submit" value="Winner" class="filtr" ></th>
        <th>Ներմուծում</th>
        <th>Ջնջել</th>

    </tr>


    @foreach($marziks_141 as $val)
    <tr>
        <td>{{ "$val->id"}}</td>
        <td><div class="marzikImg" style="width:50px; height:50px; background-size:100% 100%;background-image:url('{{ asset('marzikImg/'.$val->imgName) }}')"></div></td>
        <form action="{{ route('katarox') }}" method="post">
            @csrf
            <input type="hidden" name="kataroxId" value="{{$val->id}}">
            <td><button type="submit"
                style="background: <?php
                    if($val->performer){
                        echo "green";
                    } else {
                        echo "red";
                    }
                    ?>"
                >Կատարում է</button></td>
        </form>


        <form action="{{ route('updateMarzik') }}" method="post">
            @csrf

          <input type="hidden" name="marzikId" value="{{ $val->id }}">
        <td><input type="text" name="name" value="{{ $val->name}}"></td>
        <td><input type="text" name="lastName" value="{{ $val->lastName}}"></td>
        <td><input class="in2" type="text" name="weight" value="{{ $val->weight }}"></td>
        <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
        <div >
            <td></td>

   <td >
       <input
            @if($val->v1_1m < 0)
                style="background: red";
            @endif

            @if($val->v1_1m > 0)
                style="background: green";
            @endif


             class="inp71" type="text" name="v1_1m" value="{{ $val->v1_1m}}" >
            </td>


        <td>
            <input
            @if($val->v1_2m < 0)
            style="background: red";
        @endif

        @if($val->v1_2m > 0)
            style="background: green";
        @endif

            class="inp71" type="text" name="v1_2m" value="{{ $val->v1_2m}}" >
        </td>

        <td>
            <input
            @if($val->v1_3m < 0)
            style="background: red";
        @endif

        @if($val->v1_3m > 0)
            style="background: green";
        @endif

            class="inp71" type="text" name="v1_3m" value="{{ $val->v1_3m}}" >
        </td>
        <td>
            <input  class="inp71" type="text" name="v1_summ" value="{{ $val->v1_summ}}">
        </td>
        <td>
             <input
            @if($val->v1_record< 0)
            style="background: red";
        @endif
        @if($val->v1_record > 0)
            style="background:green ";
        @endif
            class="inp71" type="text" name="v1_record"value="{{$val->v1_record}}">
        </td>
        <td></td>
        <td>


        <input
            @if($val->v2_1m < 0)
            style="background: red";
        @endif
        @if($val->v2_1m > 0)
            style="background: green";
        @endif
            class="inp72" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
        <td><input
            @if($val->v2_2m < 0)
            style="background: red";
        @endif
        @if($val->v2_2m > 0)
            style="background: green";
        @endif
            class="inp72" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
        <td><input  @if($val->v2_3m < 0)
            style="background: red";
        @endif
        @if($val->v2_3m > 0)
            style="background: green";
        @endif
        class="inp72" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>

        <td><input class="inp72" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
        <td><input
            @if($val->v2_record< 0)
            style="background: red";
        @endif
        @if($val->v2_record> 0)
            style="background: green";
        @endif
            class="inp72" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td></td>
        <td><input  @if($val->v3_1m < 0)
            style="background: red";
        @endif
        @if($val->v3_1m > 0)
            style="background: green";
        @endif
        class="inp73" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
        <td><input @if($val->v3_2m < 0)
            style="background: red";
        @endif
        @if($val->v3_2m > 0)
            style="background: green";
        @endif
        class="inp73" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
        <td><input @if($val->v3_3m < 0)
            style="background: red";
        @endif
        @if($val->v3_3m > 0)
            style="background: green";
        @endif
        class="inp73" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
        <td><input class="inp73" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
        <td><input
            @if($val->v3_record< 0)
            style="background: red";
        @endif
        @if($val->v3_record> 0)
            style="background: green";
        @endif
            class="inp73" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td></td>
        <td><input @if($val->v4_1m < 0)
            style="background: red";
        @endif
        @if($val->v4_1m > 0)
            style="background: green";
        @endif
        class="inp74" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
        <td><input @if($val->v4_2m < 0)
            style="background: red";
        @endif
        @if($val->v4_2m > 0)
            style="background: green";
        @endif

        class="inp74" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
        <td><input @if($val->v4_3m < 0)
            style="background: red";
        @endif
        @if($val->v4_3m > 0)
            style="background: green";
        @endif
        class="inp74" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
        <td><input class="inp74" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
        <td><input
            @if($val->v4_record< 0)
            style="background: red";
        @endif
        @if($val->v4_record> 0)
            style="background: green";
        @endif
            class="inp74" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td></td>
        <td><input @if($val->v5_1m < 0)
            style="background: red";
        @endif
        @if($val->v5_1m > 0)
            style="background: green";
        @endif
        class="inp75" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
        <td><input @if($val->v5_2m < 0)
            style="background: red";
        @endif
        @if($val->v5_2m > 0)
            style="background: green";
        @endif
        class="inp75" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
        <td><input @if($val->v5_3m < 0)
            style="background: red";
        @endif
        @if($val->v5_3m > 0)
            style="background: green";
        @endif
        class="inp75" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
        <td><input class="inp75" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
        <td><input
            @if($val->v5_record< 0)
            style="background: red";
        @endif
        @if($val->v5_record> 0)
            style="background: green";
        @endif
            class="inp75" type="text" name="v5_record"value="{{$val->v5_record}}"></td>

        <td><input class="inp80" type="text" name="summ" value="{{ $val->summ}}"> </td><br>
        <td><button type="submit">Թարմացնել</button></td>



        </form>
 <td><a href="/deleteMarzik/{{ $val->id}}"> <button>Ջնջել</button></td>
         </tr>



          @endforeach
                </table>












<script>
let timerSubmit = document.getElementById('timerSubmit');
timerSubmit.addEventListener('click',f2);

function f2(){
    localStorage.setItem('test', 2);
    localStorage.setItem('refreshCounter', 2);
    localStorage.setItem('refresh',1);
}

// timerStop function//
let timerStopBut = document.getElementById('timerStop');
timerStopBut.addEventListener("click",timerStop);
function timerStop(){
    localStorage.setItem('test', 1);
    localStorage.setItem('refreshCounter', 1);

}



</script>

<script>
    var x= document.getElementsByClassName("ud1");
    var z= document.getElementsByClassName("inp1");

    let y = 1;
    function f1(){
        y++;
        if(y%2 == 0){
            for(let i=0;i<z.length;i++){
            z[i].style.display = "none";

        }
            for(let p=0; p<x.length;p++){
                x[p].style.display = "none";
            }
        } else {
            for(let i=0;i<z.length;i++){
            z[i].style.display = "block";

        }
        for(let p=0; p<x.length;p++){
                x[p].style.display = "block";
            }
        }


    }


    var x1= document.getElementsByClassName("ud2");
    var z1= document.getElementsByClassName("inp2");

    let y1 = 1;
    function f2(){
        y1++;
        if(y1%2 == 0){
            for(let i1=0;i1<z1.length;i1++){
            z1[i1].style.display = "none";

        }
            for(let p1=0; p1<x1.length;p1++){
                x1[p1].style.display = "none";
            }
        } else {
            for(let i1=0;i1<z1.length;i1++){
            z1[i1].style.display = "block";

        }
        for(let p1=0; p1<x1.length;p1++){
                x1[p1].style.display = "block";
            }
        }


    }
    var x2= document.getElementsByClassName("ud3");
    var z2= document.getElementsByClassName("inp3");

    let y2 = 1;
    function f3(){
        y2++;
        if(y2%2 == 0){
            for(let i2=0;i2<z2.length;i2++){
            z2[i2].style.display = "none";

        }
            for(let p2=0; p2<x2.length;p2++){
                x2[p2].style.display = "none";
            }
        } else {
            for(let i2=0;i2<z2.length;i2++){
            z2[i2].style.display = "block";

        }
        for(let p2=0; p2<x2.length;p2++){
                x2[p2].style.display = "block";
            }
        }


    }



    var x3= document.getElementsByClassName("ud4");
    var z3= document.getElementsByClassName("inp4");

    let y3 = 1;
    function f4(){
        y3++;
        if(y3%2 == 0){
            for(let i3=0;i3<z3.length;i3++){
            z3[i3].style.display = "none";

        }
            for(let p3=0; p3<x3.length;p3++){
                x3[p3].style.display = "none";
            }
        } else {
            for(let i3=0;i3<z3.length;i3++){
            z3[i3].style.display = "block";

        }
        for(let p3=0; p3<x3.length;p3++){
                x3[p3].style.display = "block";
            }
        }


    }



    var x4= document.getElementsByClassName("ud5");
    var z4= document.getElementsByClassName("inp5");

    let y4 = 1;
    function f5(){
        y4++;
        if(y4%2 == 0){
            for(let i4=0;i4<z4.length;i4++){
            z4[i4].style.display = "none";

        }
            for(let p4=0; p4<x4.length;p4++){
                x4[p4].style.display = "none";
            }
        } else {
            for(let i4=0;i4<z4.length;i4++){
            z4[i4].style.display = "block";

        }
        for(let p4=0; p4<x4.length;p4++){
                x4[p4].style.display = "block";
            }
        }


    }


  </script>
  <script>

var x5= document.getElementsByClassName("ud6");
    var z5= document.getElementsByClassName("inp6");

    let y5 = 1;
    function f6(){
        y5++;
        if(y5%2 == 0){
            for(let i5=0;i5<z5.length;i5++){
            z5[i5].style.display = "none";

        }
            for(let p5=0; p5<x5.length;p5++){
                x5[p5].style.display = "none";
            }
        } else {
            for(let i5=0;i5<z5.length;i5++){
            z5[i5].style.display = "block";

        }
        for(let p5=0; p5<x5.length;p5++){
                x5[p5].style.display = "block";
            }
        }


    }



    var x6= document.getElementsByClassName("ud7");
    var z6= document.getElementsByClassName("inp7");

    let y6 = 1;
    function f7(){
        y6++;
        if(y6%2 == 0){
            for(let i6=0;i6<z6.length;i6++){
            z6[i6].style.display = "none";

        }
            for(let p6=0; p6<x6.length;p6++){
                x6[p6].style.display = "none";
            }
        } else {
            for(let i6=0;i6<z6.length;i6++){
            z1[i1].style.display = "block";

        }
        for(let p6=0; p6<x6.length;p6++){
                x6[p6].style.display = "block";
            }
        }


    }



    var x7= document.getElementsByClassName("ud8");
    var z7= document.getElementsByClassName("inp8");

    let y7 = 1;
    function f8(){
        y7++;
        if(y7%2 == 0){
            for(let i7=0;i7<z7.length;i7++){
            z7[i7].style.display = "none";

        }
            for(let p7=0; p7<x7.length;p7++){
                x7[p7].style.display = "none";
            }
        } else {
            for(let i7=0;i7<z7.length;i7++){
            z7[i7].style.display = "block";

        }
        for(let p7=0; p7<x7.length;p7++){
                x7[p7].style.display = "block";
            }
        }


    }


    var x8= document.getElementsByClassName("ud9");
    var z8= document.getElementsByClassName("inp9");

    let y8 = 1;
    function f9(){
        y8++;
        if(y8%2 == 0){
            for(let i8=0;i8<z8.length;i8++){
            z8[i8].style.display = "none";

        }
            for(let p8=0; p8<x8.length;p8++){
                x8[p8].style.display = "none";
            }
        } else {
            for(let i8=0;i8<z8.length;i8++){
            z8[i8].style.display = "block";

        }
        for(let p8=0; p8<x8.length;p8++){
                x8[p8].style.display = "block";
            }
        }


    }



    var x9= document.getElementsByClassName("ud10");
    var z9= document.getElementsByClassName("inp10");

    let y9 = 1;
    function f10(){
        y9++;
        if(y9%2 == 0){
            for(let i9=0;i9<z9.length;i9++){
            z9[i9].style.display = "none";

        }
            for(let p9=0; p9<x9.length;p9++){
                x9[p9].style.display = "none";
            }
        } else {
            for(let i9=0;i9<z9.length;i9++){
            z9[i9].style.display = "block";

        }
        for(let p9=0; p9<x9.length;p9++){
                x9[p9].style.display = "block";
            }
        }


    }





    var x10= document.getElementsByClassName("ud11");
    var z10= document.getElementsByClassName("inp11");

    let y10 = 1;
    function f11(){
        y10++;
        if(y10%2 == 0){
            for(let i10=0;i10<z10.length;i10++){
            z10[i10].style.display = "none";

        }
            for(let p10=0; p10<x10.length;p10++){
                x10[p10].style.display = "none";
            }
        } else {
            for(let i10=0;i10<z10.length;i10++){
            z10[i10].style.display = "block";

        }
        for(let p10=0; p10<x10.length;p10++){
                x10[p10].style.display = "block";
            }
        }


    }



    var x11= document.getElementsByClassName("ud12");
    var z11= document.getElementsByClassName("inp12");

    let y11 = 1;
    function f12(){
        y11++;
        if(y11%2 == 0){
            for(let i11=0;i11<z11.length;i11++){
            z11[i11].style.display = "none";

        }
            for(let p11=0; p11<x11.length;p11++){
                x11[p11].style.display = "none";
            }
        } else {
            for(let i11=0;i11<z11.length;i11++){
            z11[i11].style.display = "block";

        }
        for(let p11=0; p11<x11.length;p11++){
                x11[p11].style.display = "block";
            }
        }


    }




    var x12= document.getElementsByClassName("ud13");
    var z12= document.getElementsByClassName("inp13");

    let y12 = 1;
    function f13(){
        y12++;
        if(y12%2 == 0){
            for(let i12=0;i12<z12.length;i12++){
            z12[i12].style.display = "none";

        }
            for(let p12=0; p12<x12.length;p12++){
                x12[p12].style.display = "none";
            }
        } else {
            for(let i12=0;i12<z12.length;i12++){
            z12[i12].style.display = "block";

        }
        for(let p12=0; p12<x12.length;p12++){
                x12[p12].style.display = "block";
            }
        }


    }


    var x13= document.getElementsByClassName("ud14");
    var z13= document.getElementsByClassName("inp14");

    let y13 = 1;
    function f14(){
        y13++;
        if(y13%2 == 0){
            for(let i13=0;i13<z13.length;i13++){
            z13[i13].style.display = "none";

        }
            for(let p13=0; p13<x13.length;p13++){
                x13[p13].style.display = "none";
            }
        } else {
            for(let i13=0;i13<z13.length;i13++){
            z13[i13].style.display = "block";

        }
        for(let p13=0; p13<x13.length;p13++){
                x13[p13].style.display = "block";
            }
        }


    }


    var x14= document.getElementsByClassName("ud15");
    var z14= document.getElementsByClassName("inp15");

    let y14 = 1;
    function f15(){
        y14++;
        if(y14%2 == 0){
            for(let i14=0;i14<z14.length;i14++){
            z14[i14].style.display = "none";

        }
            for(let p14=0; p14<x14.length;p14++){
                x14[p14].style.display = "none";
            }
        } else {
            for(let i14=0;i14<z14.length;i14++){
            z14[i14].style.display = "block";

        }
        for(let p14=0; p14<x14.length;p14++){
                x14[p14].style.display = "block";
            }
        }


    }



    var x15= document.getElementsByClassName("ud16");
    var z15= document.getElementsByClassName("inp16");

    let y15 = 1;
    function f16(){
        y15++;
        if(y15%2 == 0){
            for(let i15=0;i15<z15.length;i15++){
            z15[i15].style.display = "none";

        }
            for(let p15=0; p15<x15.length;p15++){
                x15[p15].style.display = "none";
            }
        } else {
            for(let i15=0;i15<z15.length;i15++){
            z15[i15].style.display = "block";

        }
        for(let p15=0; p15<x15.length;p15++){
                x15[p15].style.display = "block";
            }
        }


    }


    var x16= document.getElementsByClassName("ud17");
    var z16= document.getElementsByClassName("inp17");

    let y16 = 1;
    function f17(){
        y16++;
        if(y16%2 == 0){
            for(let i16=0;i16<z16.length;i16++){
            z16[i16].style.display = "none";

        }
            for(let p16=0; p16<x16.length;p16++){
                x16[p16].style.display = "none";
            }
        } else {
            for(let i16=0;i16<z16.length;i16++){
            z16[i16].style.display = "block";

        }
        for(let p16=0; p16<x16.length;p16++){
                x16[p16].style.display = "block";
            }
        }


    }

    var x17= document.getElementsByClassName("ud18");
    var z17= document.getElementsByClassName("inp18");

    let y17 = 1;
    function f18(){
        y17++;
        if(y17%2 == 0){
            for(let i17=0;i17<z17.length;i17++){
            z17[i17].style.display = "none";

        }
            for(let p17=0; p17<x17.length;p17++){
                x17[p17].style.display = "none";
            }
        } else {
            for(let i17=0;i17<z17.length;i17++){
            z17[i17].style.display = "block";

        }
        for(let p17=0; p17<x17.length;p17++){
                x17[p17].style.display = "block";
            }
        }


    }

    var x18= document.getElementsByClassName("ud19");
    var z18= document.getElementsByClassName("inp19");

    let y18 = 1;
    function f19(){
        y18++;
        if(y18%2 == 0){
            for(let i18=0;i18<z18.length;i18++){
            z18[i18].style.display = "none";

        }
            for(let p18=0; p18<x18.length;p18++){
                x18[p18].style.display = "none";
            }
        } else {
            for(let i18=0;i18<z18.length;i18++){
            z18[i18].style.display = "block";

        }
        for(let p18=0; p18<x18.length;p18++){
                x18[p18].style.display = "block";
            }
        }


    }


    var x19= document.getElementsByClassName("ud20");
    var z19= document.getElementsByClassName("inp20");

    let y19 = 1;
    function f20(){
        y19++;
        if(y19%2 == 0){
            for(let i19=0;i19<z19.length;i19++){
            z19[i19].style.display = "none";

        }
            for(let p19=0; p19<x19.length;p19++){
                x19[p19].style.display = "none";
            }
        } else {
            for(let i19=0;i19<z19.length;i19++){
            z19[i19].style.display = "block";

        }
        for(let p19=0; p19<x19.length;p19++){
                x19[p19].style.display = "block";
            }
        }


    }

    var x20= document.getElementsByClassName("ud21");
    var z20= document.getElementsByClassName("inp21");

    let y20 = 1;
    function f21(){
        y20++;
        if(y20%2 == 0){
            for(let i20=0;i20<z20.length;i20++){
            z20[i20].style.display = "none";

        }
            for(let p20=0; p20<x20.length;p20++){
                x20[p20].style.display = "none";
            }
        } else {
            for(let i20=0;i20<z20.length;i20++){
            z20[i20].style.display = "block";

        }
        for(let p20=0; p20<x20.length;p20++){
                x20[p20].style.display = "block";
            }
        }


    }


    var x21= document.getElementsByClassName("ud22");
    var z21= document.getElementsByClassName("inp22");

    let y21 = 1;
    function f22(){
        y21++;
        if(y21%2 == 0){
            for(let i21=0;i21<z21.length;i21++){
            z21[i21].style.display = "none";

        }
            for(let p21=0; p21<x21.length;p21++){
                x21[p21].style.display = "none";
            }
        } else {
            for(let i21=0;i21<z21.length;i21++){
            z21[i21].style.display = "block";

        }
        for(let p21=0; p21<x21.length;p21++){
                x21[p21].style.display = "block";
            }
        }


    }

    var x22= document.getElementsByClassName("ud23");
    var z22= document.getElementsByClassName("inp23");

    let y22 = 1;
    function f23(){
        y22++;
        if(y22%2 == 0){
            for(let i22=0;i22<z22.length;i22++){
            z22[i22].style.display = "none";

        }
            for(let p22=0; p22<x22.length;p22++){
                x22[p22].style.display = "none";
            }
        } else {
            for(let i22=0;i22<z22.length;i22++){
            z22[i22].style.display = "block";

        }
        for(let p22=0; p22<x22.length;p22++){
                x22[p22].style.display = "block";
            }
        }


    }



    var x23= document.getElementsByClassName("ud24");
    var z23= document.getElementsByClassName("inp24");

    let y23 = 1;
    function f24(){
        y23++;
        if(y23%2 == 0){
            for(let i23=0;i23<z23.length;i23++){
            z23[i23].style.display = "none";

        }
            for(let p23=0; p23<x23.length;p23++){
                x23[p23].style.display = "none";
            }
        } else {
            for(let i23=0;i23<z23.length;i23++){
            z23[i23].style.display = "block";

        }
        for(let p23=0; p23<x23.length;p23++){
                x23[p23].style.display = "block";
            }
        }


    }

    var x24= document.getElementsByClassName("ud25");
    var z24= document.getElementsByClassName("inp25");

    let y24 = 1;
    function f25(){
        y24++;
        if(y24%2 == 0){
            for(let i24=0;i24<z24.length;i24++){
            z24[i24].style.display = "none";

        }
            for(let p24=0; p24<x24.length;p24++){
                x24[p24].style.display = "none";
            }
        } else {
            for(let i24=0;i24<z24.length;i24++){
            z24[i24].style.display = "block";

        }
        for(let p24=0; p24<x24.length;p24++){
                x24[p24].style.display = "block";
            }
        }


    }

    var x25= document.getElementsByClassName("ud26");
    var z25= document.getElementsByClassName("inp26");

    let y25 = 1;
    function f26(){
        y25++;
        if(y25%2 == 0){
            for(let i25=0;i25<z25.length;i25++){
            z25[i25].style.display = "none";

        }
            for(let p25=0; p25<x25.length;p25++){
                x25[p25].style.display = "none";
            }
        } else {
            for(let i25=0;i25<z25.length;i25++){
            z25[i25].style.display = "block";

        }
        for(let p25=0; p25<x25.length;p25++){
                x25[p25].style.display = "block";
            }
        }


    }

    var x26= document.getElementsByClassName("ud27");
    var z26= document.getElementsByClassName("inp27");

    let y26= 1;
    function f27(){
        y26++;
        if(y26%2 == 0){
            for(let i26=0;i26<z26.length;i26++){
            z26[i26].style.display = "none";

        }
            for(let p26=0; p26<x26.length;p26++){
                x26[p26].style.display = "none";
            }
        } else {
            for(let i26=0;i26<z26.length;i26++){
            z26[i26].style.display = "block";

        }
        for(let p26=0; p26<x26.length;p26++){
                x26[p26].style.display = "block";
            }
        }


    }


    var x27= document.getElementsByClassName("ud28");
    var z27= document.getElementsByClassName("inp28");

    let y27= 1;
    function f28(){
        y27++;
        if(y27%2 == 0){
            for(let i27=0;i27<z27.length;i27++){
            z27[i27].style.display = "none";

        }
            for(let p27=0; p27<x27.length;p27++){
                x27[p27].style.display = "none";
            }
        } else {
            for(let i27=0;i27<z27.length;i27++){
            z27[i27].style.display = "block";

        }
        for(let p27=0; p27<x27.length;p27++){
                x27[p27].style.display = "block";
            }
        }


    }

    var x28= document.getElementsByClassName("ud29");
    var z28= document.getElementsByClassName("inp29");

    let y28= 1;
    function f29(){
        y28++;
        if(y28%2 == 0){
            for(let i28=0;i28<z28.length;i28++){
            z28[i28].style.display = "none";

        }
            for(let p28=0; p28<x28.length;p28++){
                x28[p28].style.display = "none";
            }
        } else {
            for(let i28=0;i28<z28.length;i28++){
            z28[i28].style.display = "block";

        }
        for(let p28=0; p28<x28.length;p28++){
                x28[p28].style.display = "block";
            }
        }


    }

    var x29= document.getElementsByClassName("ud30");
    var z29= document.getElementsByClassName("inp30");

    let y29= 1;
    function f30(){
        y29++;
        if(y29%2 == 0){
            for(let i29=0;i29<z29.length;i29++){
            z29[i29].style.display = "none";

        }
            for(let p29=0; p29<x29.length;p29++){
                x29[p29].style.display = "none";
            }
        } else {
            for(let i29=0;i29<z29.length;i29++){
            z29[i29].style.display = "block";

        }
        for(let p29=0; p29<x29.length;p29++){
                x29[p29].style.display = "block";
            }
        }


    }

    var x30= document.getElementsByClassName("ud31");
    var z30= document.getElementsByClassName("inp31");

    let y30= 1;
    function f31(){
        y30++;
        if(y30%2 == 0){
            for(let i30=0;i30<z30.length;i30++){
            z30[i30].style.display = "none";

        }
            for(let p30=0; p30<x30.length;p30++){
                x30[p30].style.display = "none";
            }
        } else {
            for(let i30=0;i30<z30.length;i30++){
            z30[i30].style.display = "block";

        }
        for(let p30=0; p30<x30.length;p30++){
                x30[p30].style.display = "block";
            }
        }


    }

    var x31= document.getElementsByClassName("ud32");
    var z31= document.getElementsByClassName("inp32");

    let y31= 1;
    function f32(){
        y31++;
        if(y31%2 == 0){
            for(let i31=0;i31<z31.length;i31++){
            z31[i31].style.display = "none";

        }
            for(let p31=0; p31<x31.length;p31++){
                x31[p31].style.display = "none";
            }
        } else {
            for(let i31=0;i31<z31.length;i31++){
            z31[i31].style.display = "block";

        }
        for(let p31=0; p31<x31.length;p31++){
                x31[p31].style.display = "block";
            }
        }


    }

    var x32= document.getElementsByClassName("ud33");
    var z32= document.getElementsByClassName("inp33");

    let y32= 1;
    function f33(){
        y32++;
        if(y32%2 == 0){
            for(let i32=0;i32<z32.length;i32++){
            z32[i32].style.display = "none";

        }
            for(let p32=0; p32<x32.length;p32++){
                x32[p32].style.display = "none";
            }
        } else {
            for(let i32=0;i32<z32.length;i32++){
            z32[i32].style.display = "block";

        }
        for(let p32=0; p32<x32.length;p32++){
                x32[p32].style.display = "block";
            }
        }


    }

    var x33= document.getElementsByClassName("ud34");
    var z33= document.getElementsByClassName("inp34");

    let y33= 1;
    function f34(){
        y33++;
        if(y33%2 == 0){
            for(let i33=0;i33<z33.length;i33++){
            z33[i33].style.display = "none";

        }
            for(let p33=0; p33<x33.length;p33++){
                x33[p33].style.display = "none";
            }
        } else {
            for(let i33=0;i33<z33.length;i33++){
            z33[i33].style.display = "block";

        }
        for(let p33=0; p33<x33.length;p33++){
                x33[p33].style.display = "block";
            }
        }


    }

    var x34= document.getElementsByClassName("ud35");
    var z34= document.getElementsByClassName("inp35");

    let y34= 1;
    function f35(){
        y34++;
        if(y34%2 == 0){
            for(let i34=0;i34<z34.length;i34++){
            z34[i34].style.display = "none";

        }
            for(let p34=0; p34<x34.length;p34++){
                x34[p34].style.display = "none";
            }
        } else {
            for(let i34=0;i34<z34.length;i34++){
            z34[i34].style.display = "block";

        }
        for(let p34=0; p34<x34.length;p34++){
                x34[p34].style.display = "block";
            }
        }


    }

    var x35= document.getElementsByClassName("ud36");
    var z35= document.getElementsByClassName("inp36");

    let y35= 1;
    function f36(){
        y35++;
        if(y35%2 == 0){
            for(let i35=0;i35<z35.length;i35++){
            z35[i35].style.display = "none";

        }
            for(let p35=0; p35<x35.length;p35++){
                x35[p35].style.display = "none";
            }
        } else {
            for(let i35=0;i35<z35.length;i35++){
            z35[i35].style.display = "block";

        }
        for(let p35=0; p35<x35.length;p35++){
                x35[p35].style.display = "block";
            }
        }


    }

    var x36= document.getElementsByClassName("ud37");
    var z36= document.getElementsByClassName("inp37");

    let y36= 1;
    function f37(){
        y36++;
        if(y36%2 == 0){
            for(let i36=0;i36<z36.length;i36++){
            z36[i36].style.display = "none";

        }
            for(let p36=0; p36<x36.length;p36++){
                x36[p36].style.display = "none";
            }
        } else {
            for(let i36=0;i36<z36.length;i36++){
            z36[i36].style.display = "block";

        }
        for(let p36=0; p36<x36.length;p36++){
                x36[p36].style.display = "block";
            }
        }


    }

    var x37= document.getElementsByClassName("ud38");
    var z37= document.getElementsByClassName("inp38");

    let y37= 1;
    function f38(){
        y37++;
        if(y37%2 == 0){
            for(let i37=0;i37<z37.length;i37++){
            z37[i37].style.display = "none";

        }
            for(let p37=0; p37<x37.length;p37++){
                x37[p37].style.display = "none";
            }
        } else {
            for(let i37=0;i37<z37.length;i37++){
            z37[i37].style.display = "block";

        }
        for(let p37=0; p37<x37.length;p37++){
                x37[p37].style.display = "block";
            }
        }


    }


    var x38= document.getElementsByClassName("ud39");
    var z38= document.getElementsByClassName("inp39");

    let y38= 1;
    function f39(){
        y38++;
        if(y38%2 == 0){
            for(let i38=0;i38<z38.length;i38++){
            z38[i38].style.display = "none";

        }
            for(let p38=0; p38<x38.length;p38++){
                x38[p38].style.display = "none";
            }
        } else {
            for(let i38=0;i38<z38.length;i38++){
            z38[i38].style.display = "block";

        }
        for(let p38=0; p38<x38.length;p38++){
                x38[p38].style.display = "block";
            }
        }


    }

    var x39= document.getElementsByClassName("ud40");
    var z39= document.getElementsByClassName("inp40");

    let y39= 1;
    function f40(){
        y39++;
        if(y39%2 == 0){
            for(let i39=0;i39<z39.length;i39++){
            z39[i39].style.display = "none";

        }
            for(let p39=0; p39<x39.length;p39++){
                x39[p39].style.display = "none";
            }
        } else {
            for(let i39=0;i39<z39.length;i39++){
            z39[i39].style.display = "block";

        }
        for(let p39=0; p39<x39.length;p39++){
                x39[p39].style.display = "block";
            }
        }


    }


    var x40= document.getElementsByClassName("ud41");
    var z40= document.getElementsByClassName("inp41");

    let y40= 1;
    function f41(){
        y40++;
        if(y40%2 == 0){
            for(let i40=0;i40<z40.length;i40++){
            z40[i40].style.display = "none";

        }
            for(let p40=0; p40<x40.length;p40++){
                x40[p40].style.display = "none";
            }
        } else {
            for(let i40=0;i40<z40.length;i40++){
            z40[i40].style.display = "block";

        }
        for(let p40=0; p40<x40.length;p40++){
                x40[p40].style.display = "block";
            }
        }


    }


    var x41= document.getElementsByClassName("ud42");
    var z41= document.getElementsByClassName("inp42");

    let y41= 1;
    function f42(){
        y41++;
        if(y41%2 == 0){
            for(let i41=0;i41<z41.length;i41++){
            z41[i41].style.display = "none";

        }
            for(let p41=0; p41<x41.length;p41++){
                x41[p41].style.display = "none";
            }
        } else {
            for(let i41=0;i41<z41.length;i41++){
            z41[i41].style.display = "block";

        }
        for(let p41=0; p41<x41.length;p41++){
                x41[p41].style.display = "block";
            }
        }


    }

    var x42= document.getElementsByClassName("ud43");
    var z42= document.getElementsByClassName("inp43");

    let y42= 1;
    function f43(){
        y42++;
        if(y42%2 == 0){
            for(let i42=0;i42<z42.length;i42++){
            z42[i42].style.display = "none";

        }
            for(let p42=0; p42<x42.length;p42++){
                x42[p42].style.display = "none";
            }
        } else {
            for(let i42=0;i42<z42.length;i42++){
            z42[i42].style.display = "block";

        }
        for(let p42=0; p42<x42.length;p42++){
                x42[p42].style.display = "block";
            }
        }


    }

    var x43= document.getElementsByClassName("ud44");
    var z43= document.getElementsByClassName("inp44");

    let y43= 1;
    function f44(){
        y43++;
        if(y43%2 == 0){
            for(let i43=0;i43<z43.length;i43++){
            z43[i43].style.display = "none";

        }
            for(let p43=0; p43<x43.length;p43++){
                x43[p43].style.display = "none";
            }
        } else {
            for(let i43=0;i43<z43.length;i43++){
            z43[i43].style.display = "block";

        }
        for(let p43=0; p43<x43.length;p43++){
                x43[p43].style.display = "block";
            }
        }


    }

    var x44= document.getElementsByClassName("ud45");
    var z44= document.getElementsByClassName("inp45");

    let y44= 1;
    function f45(){
        y44++;
        if(y44%2 == 0){
            for(let i44=0;i44<z44.length;i44++){
            z44[i44].style.display = "none";

        }
            for(let p44=0; p44<x44.length;p44++){
                x44[p44].style.display = "none";
            }
        } else {
            for(let i44=0;i44<z44.length;i44++){
            z44[i44].style.display = "block";

        }
        for(let p44=0; p44<x44.length;p44++){
                x44[p44].style.display = "block";
            }
        }


    }

    var x45= document.getElementsByClassName("ud46");
    var z45= document.getElementsByClassName("inp46");

    let y45= 1;
    function f46(){
        y45++;
        if(y45%2 == 0){
            for(let i45=0;i45<z45.length;i45++){
            z45[i45].style.display = "none";

        }
            for(let p45=0; p45<x45.length;p45++){
                x45[p45].style.display = "none";
            }
        } else {
            for(let i45=0;i45<z45.length;i45++){
            z45[i45].style.display = "block";

        }
        for(let p45=0; p45<x45.length;p45++){
                x45[p45].style.display = "block";
            }
        }


    }

    var x46= document.getElementsByClassName("ud47");
    var z46= document.getElementsByClassName("inp47");

    let y46= 1;
    function f47(){
        y46++;
        if(y46%2 == 0){
            for(let i46=0;i46<z46.length;i46++){
            z46[i46].style.display = "none";

        }
            for(let p46=0; p46<x46.length;p46++){
                x46[p46].style.display = "none";
            }
        } else {
            for(let i46=0;i46<z46.length;i46++){
            z46[i46].style.display = "block";

        }
        for(let p46=0; p46<x46.length;p46++){
                x46[p46].style.display = "block";
            }
        }


    }

    var x47= document.getElementsByClassName("ud48");
    var z47= document.getElementsByClassName("inp48");

    let y47= 1;
    function f48(){
        y47++;
        if(y47%2 == 0){
            for(let i47=0;i47<z47.length;i47++){
            z47[i47].style.display = "none";

        }
            for(let p47=0; p47<x47.length;p47++){
                x47[p47].style.display = "none";
            }
        } else {
            for(let i47=0;i47<z47.length;i47++){
            z47[i47].style.display = "block";

        }
        for(let p47=0; p47<x47.length;p47++){
                x47[p47].style.display = "block";
            }
        }


    }

    var x48= document.getElementsByClassName("ud49");
    var z48= document.getElementsByClassName("inp49");

    let y48= 1;
    function f49(){
        y48++;
        if(y48%2 == 0){
            for(let i48=0;i48<z48.length;i48++){
            z48[i48].style.display = "none";

        }
            for(let p48=0; p48<x48.length;p48++){
                x48[p48].style.display = "none";
            }
        } else {
            for(let i48=0;i48<z48.length;i48++){
            z48[i48].style.display = "block";

        }
        for(let p48=0; p48<x48.length;p48++){
                x48[p48].style.display = "block";
            }
        }


    }

    var x49= document.getElementsByClassName("ud50");
    var z49= document.getElementsByClassName("inp50");

    let y49= 1;
    function f50(){
        y49++;
        if(y49%2 == 0){
            for(let i49=0;i49<z49.length;i49++){
            z49[i49].style.display = "none";

        }
            for(let p49=0; p49<x49.length;p49++){
                x49[p49].style.display = "none";
            }
        } else {
            for(let i49=0;i49<z49.length;i49++){
            z49[i49].style.display = "block";

        }
        for(let p49=0; p49<x49.length;p49++){
                x49[p49].style.display = "block";
            }
        }


    }

    var x50= document.getElementsByClassName("ud51");
    var z50= document.getElementsByClassName("inp51");

    let y50= 1;
    function f51(){
        y50++;
        if(y50%2 == 0){
            for(let i50=0;i50<z50.length;i50++){
            z50[i50].style.display = "none";

        }
            for(let p50=0; p50<x50.length;p50++){
                x50[p50].style.display = "none";
            }
        } else {
            for(let i50=0;i50<z50.length;i50++){
            z50[i50].style.display = "block";

        }
        for(let p50=0; p50<x50.length;p50++){
                x50[p50].style.display = "block";
            }
        }


    }

    var x51= document.getElementsByClassName("ud52");
    var z51= document.getElementsByClassName("inp52");

    let y51= 1;
    function f52(){
        y51++;
        if(y51%2 == 0){
            for(let i51=0;i51<z51.length;i51++){
            z51[i51].style.display = "none";

        }
            for(let p51=0; p51<x51.length;p51++){
                x51[p51].style.display = "none";
            }
        } else {
            for(let i51=0;i51<z51.length;i51++){
            z51[i51].style.display = "block";

        }
        for(let p51=0; p51<x51.length;p51++){
                x51[p51].style.display = "block";
            }
        }


    }

    var x52= document.getElementsByClassName("ud53");
    var z52= document.getElementsByClassName("inp53");

    let y52= 1;
    function f53(){
        y52++;
        if(y52%2 == 0){
            for(let i52=0;i52<z52.length;i52++){
            z52[i52].style.display = "none";

        }
            for(let p52=0; p52<x52.length;p52++){
                x52[p52].style.display = "none";
            }
        } else {
            for(let i52=0;i52<z52.length;i52++){
            z52[i52].style.display = "block";

        }
        for(let p52=0; p52<x52.length;p52++){
                x52[p52].style.display = "block";
            }
        }


    }

    var x53= document.getElementsByClassName("ud54");
    var z53= document.getElementsByClassName("inp54");

    let y53= 1;
    function f54(){
        y53++;
        if(y53%2 == 0){
            for(let i53=0;i53<z53.length;i53++){
            z53[i53].style.display = "none";

        }
            for(let p53=0; p53<x53.length;p53++){
                x53[p53].style.display = "none";
            }
        } else {
            for(let i53=0;i53<z53.length;i53++){
            z53[i53].style.display = "block";

        }
        for(let p53=0; p53<x53.length;p53++){
                x53[p53].style.display = "block";
            }
        }


    }



    var x54= document.getElementsByClassName("ud55");
    var z54= document.getElementsByClassName("inp55");

    let y54= 1;
    function f55(){
        y54++;
        if(y54%2 == 0){
            for(let i54=0;i54<z54.length;i54++){
            z54[i54].style.display = "none";

        }
            for(let p54=0; p54<x54.length;p54++){
                x54[p54].style.display = "none";
            }
        } else {
            for(let i54=0;i54<z54.length;i54++){
            z54[i54].style.display = "block";

        }
        for(let p54=0; p54<x54.length;p54++){
                x54[p54].style.display = "block";
            }
        }


    }

    var x55= document.getElementsByClassName("ud56");
    var z55= document.getElementsByClassName("inp56");

    let y55= 1;
    function f56(){
        y55++;
        if(y55%2 == 0){
            for(let i55=0;i55<z55.length;i55++){
            z55[i55].style.display = "none";

        }
            for(let p55=0; p55<x55.length;p55++){
                x55[p55].style.display = "none";
            }
        } else {
            for(let i55=0;i55<z55.length;i55++){
            z55[i55].style.display = "block";

        }
        for(let p55=0; p55<x55.length;p55++){
                x55[p55].style.display = "block";
            }
        }


    }



    var x56= document.getElementsByClassName("ud57");
    var z56= document.getElementsByClassName("inp57");

    let y56= 1;
    function f57(){
        y56++;
        if(y56%2 == 0){
            for(let i56=0;i56<z56.length;i56++){
            z56[i56].style.display = "none";

        }
            for(let p56=0; p56<x56.length;p56++){
                x56[p56].style.display = "none";
            }
        } else {
            for(let i56=0;i56<z56.length;i56++){
            z56[i56].style.display = "block";

        }
        for(let p56=0; p56<x56.length;p56++){
                x56[p56].style.display = "block";
            }
        }


    }



    var x57= document.getElementsByClassName("ud58");
    var z57= document.getElementsByClassName("inp58");

    let y57= 1;
    function f58(){
        y57++;
        if(y57%2 == 0){
            for(let i57=0;i57<z57.length;i57++){
            z57[i57].style.display = "none";

        }
            for(let p57=0; p57<x57.length;p57++){
                x57[p57].style.display = "none";
            }
        } else {
            for(let i57=0;i57<z57.length;i57++){
            z57[i57].style.display = "block";

        }
        for(let p57=0; p57<x57.length;p57++){
                x57[p57].style.display = "block";
            }
        }


    }

    var x58= document.getElementsByClassName("ud59");
    var z58= document.getElementsByClassName("inp59");

    let y58= 1;
    function f59(){
        y58++;
        if(y58%2 == 0){
            for(let i58=0;i58<z58.length;i58++){
            z58[i58].style.display = "none";

        }
            for(let p58=0; p58<x58.length;p58++){
                x58[p58].style.display = "none";
            }
        } else {
            for(let i58=0;i58<z58.length;i58++){
            z58[i58].style.display = "block";

        }
        for(let p58=0; p58<x58.length;p58++){
                x58[p58].style.display = "block";
            }
        }


    }

    var x59= document.getElementsByClassName("ud60");
    var z59= document.getElementsByClassName("inp60");

    let y59= 1;
    function f60(){
        y59++;
        if(y59%2 == 0){
            for(let i59=0;i59<z59.length;i59++){
            z59[i59].style.display = "none";

        }
            for(let p59=0; p59<x59.length;p59++){
                x59[p59].style.display = "none";
            }
        } else {
            for(let i59=0;i59<z59.length;i59++){
            z59[i59].style.display = "block";

        }
        for(let p59=0; p59<x59.length;p59++){
                x59[p59].style.display = "block";
            }
        }


    }

    var x60= document.getElementsByClassName("ud61");
    var z60= document.getElementsByClassName("inp61");

    let y60= 1;
    function f61(){
        y60++;
        if(y60%2 == 0){
            for(let i60=0;i60<z60.length;i60++){
            z60[i60].style.display = "none";

        }
            for(let p60=0; p60<x60.length;p60++){
                x60[p60].style.display = "none";
            }
        } else {
            for(let i60=0;i60<z60.length;i60++){
            z60[i60].style.display = "block";

        }
        for(let p60=0; p60<x60.length;p60++){
                x60[p60].style.display = "block";
            }
        }


    }

    var x61= document.getElementsByClassName("ud62");
    var z61= document.getElementsByClassName("inp62");

    let y61= 1;
    function f62(){
        y61++;
        if(y61%2 == 0){
            for(let i61=0;i61<z61.length;i61++){
            z61[i61].style.display = "none";

        }
            for(let p61=0; p61<x61.length;p61++){
                x61[p61].style.display = "none";
            }
        } else {
            for(let i61=0;i61<z61.length;i61++){
            z61[i61].style.display = "block";

        }
        for(let p61=0; p61<x61.length;p61++){
                x61[p61].style.display = "block";
            }
        }


    }


    var x62= document.getElementsByClassName("ud63");
    var z62= document.getElementsByClassName("inp63");

    let y62= 1;
    function f63(){
        y62++;
        if(y62%2 == 0){
            for(let i62=0;i62<z62.length;i62++){
            z62[i62].style.display = "none";

        }
            for(let p62=0; p62<x62.length;p62++){
                x62[p62].style.display = "none";
            }
        } else {
            for(let i62=0;i62<z62.length;i62++){
            z62[i62].style.display = "block";

        }
        for(let p62=0; p62<x62.length;p62++){
                x62[p62].style.display = "block";
            }
        }


    }




    var x63= document.getElementsByClassName("ud64");
    var z63= document.getElementsByClassName("inp64");

    let y63= 1;
    function f64(){
        y63++;
        if(y63%2 == 0){
            for(let i63=0;i63<z63.length;i63++){
            z63[i63].style.display = "none";

        }
            for(let p63=0; p63<x63.length;p63++){
                x63[p63].style.display = "none";
            }
        } else {
            for(let i63=0;i63<z63.length;i63++){
            z63[i63].style.display = "block";

        }
        for(let p63=0; p63<x63.length;p63++){
                x63[p63].style.display = "block";
            }
        }


    }

    var x64= document.getElementsByClassName("ud65");
    var z64= document.getElementsByClassName("inp65");

    let y64= 1;
    function f65(){
        y64++;
        if(y64%2 == 0){
            for(let i64=0;i64<z64.length;i64++){
            z64[i64].style.display = "none";

        }
            for(let p64=0; p64<x64.length;p64++){
                x64[p64].style.display = "none";
            }
        } else {
            for(let i64=0;i64<z64.length;i64++){
            z64[i64].style.display = "block";

        }
        for(let p64=0; p64<x64.length;p64++){
                x64[p64].style.display = "block";
            }
        }


    }

    var x65= document.getElementsByClassName("ud66");
    var z65= document.getElementsByClassName("inp66");

    let y65= 1;
    function f66(){
        y65++;
        if(y65%2 == 0){
            for(let i65=0;i65<z65.length;i65++){
            z65[i65].style.display = "none";

        }
            for(let p65=0; p65<x65.length;p65++){
                x65[p65].style.display = "none";
            }
        } else {
            for(let i65=0;i65<z65.length;i65++){
            z65[i65].style.display = "block";

        }
        for(let p65=0; p65<x65.length;p65++){
                x65[p65].style.display = "block";
            }
        }


    }

    var x66= document.getElementsByClassName("ud67");
    var z66= document.getElementsByClassName("inp67");

    let y66= 1;
    function f67(){
        y66++;
        if(y66%2 == 0){
            for(let i66=0;i66<z66.length;i66++){
            z66[i66].style.display = "none";

        }
            for(let p66=0; p66<x66.length;p66++){
                x66[p66].style.display = "none";
            }
        } else {
            for(let i66=0;i66<z66.length;i66++){
            z66[i66].style.display = "block";

        }
        for(let p66=0; p66<x66.length;p66++){
                x66[p66].style.display = "block";
            }
        }


    }

    var x67= document.getElementsByClassName("ud68");
    var z67= document.getElementsByClassName("inp68");

    let y67= 1;
    function f68(){
        y67++;
        if(y67%2 == 0){
            for(let i67=0;i67<z67.length;i67++){
            z67[i67].style.display = "none";

        }
            for(let p67=0; p67<x67.length;p67++){
                x67[p67].style.display = "none";
            }
        } else {
            for(let i67=0;i67<z67.length;i67++){
            z67[i67].style.display = "block";

        }
        for(let p67=0; p67<x67.length;p67++){
                x67[p67].style.display = "block";
            }
        }


    }

    var x68= document.getElementsByClassName("ud69");
    var z68= document.getElementsByClassName("inp69");

    let y68= 1;
    function f69(){
        y68++;
        if(y68%2 == 0){
            for(let i68=0;i68<z68.length;i68++){
            z68[i68].style.display = "none";

        }
            for(let p68=0; p68<x68.length;p68++){
                x68[p68].style.display = "none";
            }
        } else {
            for(let i68=0;i68<z68.length;i68++){
            z68[i68].style.display = "block";

        }
        for(let p68=0; p68<x68.length;p68++){
                x68[p68].style.display = "block";
            }
        }


    }

    var x69= document.getElementsByClassName("ud70");
    var z69= document.getElementsByClassName("inp70");

    let y69= 1;
    function f70(){
        y69++;
        if(y69%2 == 0){
            for(let i69=0;i69<z69.length;i69++){
            z69[i69].style.display = "none";

        }
            for(let p69=0; p69<x69.length;p69++){
                x69[p69].style.display = "none";
            }
        } else {
            for(let i69=0;i69<z69.length;i69++){
            z69[i69].style.display = "block";

        }
        for(let p69=0; p69<x69.length;p69++){
                x69[p69].style.display = "block";
            }
        }


    }


    var x70= document.getElementsByClassName("ud71");
    var z70= document.getElementsByClassName("inp71");

    let y70= 1;
    function f71(){
        y70++;
        if(y70%2 == 0){
            for(let i70=0;i70<z70.length;i70++){
            z70[i70].style.display = "none";

        }
            for(let p70=0; p70<x70.length;p70++){
                x70[p70].style.display = "none";
            }
        } else {
            for(let i70=0;i70<z70.length;i70++){
            z70[i70].style.display = "block";

        }
        for(let p70=0; p70<x70.length;p70++){
                x70[p70].style.display = "block";
            }
        }


    }

    var x71= document.getElementsByClassName("ud72");
    var z71= document.getElementsByClassName("inp72");

    let y71= 1;
    function f72(){
        y71++;
        if(y71%2 == 0){
            for(let i71=0;i71<z71.length;i71++){
            z71[i71].style.display = "none";

        }
            for(let p71=0; p71<x71.length;p71++){
                x71[p71].style.display = "none";
            }
        } else {
            for(let i71=0;i71<z71.length;i71++){
            z71[i71].style.display = "block";

        }
        for(let p71=0; p71<x71.length;p71++){
                x71[p71].style.display = "block";
            }
        }


    }


    var x72= document.getElementsByClassName("ud73");
    var z72= document.getElementsByClassName("inp73");

    let y72= 1;
    function f73(){
        y72++;
        if(y72%2 == 0){
            for(let i72=0;i72<z72.length;i72++){
            z72[i72].style.display = "none";

        }
            for(let p72=0; p72<x72.length;p72++){
                x72[p72].style.display = "none";
            }
        } else {
            for(let i72=0;i72<z72.length;i72++){
            z72[i72].style.display = "block";

        }
        for(let p72=0; p72<x72.length;p72++){
                x72[p72].style.display = "block";
            }
        }


    }

    var x73= document.getElementsByClassName("ud74");
    var z73= document.getElementsByClassName("inp74");

    let y73= 1;
    function f74(){
        y73++;
        if(y73%2 == 0){
            for(let i73=0;i73<z73.length;i73++){
            z73[i73].style.display = "none";

        }
            for(let p73=0; p73<x73.length;p73++){
                x73[p73].style.display = "none";
            }
        } else {
            for(let i73=0;i73<z73.length;i73++){
            z73[i73].style.display = "block";

        }
        for(let p73=0; p73<x73.length;p73++){
                x73[p73].style.display = "block";
            }
        }


    }

    var x74= document.getElementsByClassName("ud75");
    var z74= document.getElementsByClassName("inp75");

    let y74= 1;
    function f75(){
        y74++;
        if(y74%2 == 0){
            for(let i74=0;i74<z74.length;i74++){
            z74[i74].style.display = "none";

        }
            for(let p74=0; p74<x74.length;p74++){
                x74[p74].style.display = "none";
            }
        } else {
            for(let i74=0;i74<z74.length;i74++){
            z74[i74].style.display = "block";

        }
        for(let p74=0; p74<x74.length;p74++){
                x74[p74].style.display = "block";
            }
        }


    }






  </script>


</body>
</html>

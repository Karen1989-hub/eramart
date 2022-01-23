<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Կատարում է</th>
            <th>Մարզիկի նկար</th>
            <th>Անուն</th>
            <th>Ազգանուն</th>
            <th>Սեփական քաշ</th>
            <th>Քաշային կարգը</th>
            <th>1վ,1մ</th>
            <th>1վ,2մ</th>
            <th>1վ,3մ</th>
            <th>1վ մեծագույն</th>
            <th>1վ ռեկորդ</th>
            <th>2վ,1մ</th>
            <th>2վ,2մ</th>
            <th>2վ,3մ</th>
            <th>2վ մեծագույն</th>
            <th>2վ ռեկորդ</th>
            <th>3վ,1մ</th>
            <th>3վ,2մ</th>
            <th>3վ,3մ</th>
            <th>3վ մեծագույն</th>
            <th>3վ ռեկորդ</th>
            <th>4վ,1մ</th>
            <th>4վ,2մ</th>
            <th>4վ,3մ</th>
            <th>4վ մեծագույն</th>
            <th>4վ ռեկորդ</th>
            <th>5վ,1մ</th>
            <th>5վ,2մ</th>
            <th>5վ,3մ</th>
            <th>5վ մեծագույն</th>
            <th>5վ ռեկորդ</th>
            <th>Ընդհանուր գումար</th>
            

        </tr>
        @foreach($marziks as $val)
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
             <td><input class="inp1" type="text" name="weight" value="{{ $val->weight }}"></td>
            <td><input class="in1" type="text" name="weightClass" value="{{ $val->weightClass}}"></td>
            <td><input class="inp" type="text" name="v1_1m" value="{{ $val->v1_1m}}"></td>
            <td><input class="inp" type="text" name="v1_2m" value="{{ $val->v1_2m}}"></td>
            <td><input class="inp" type="text" name="v1_3m" value="{{ $val->v1_3m}}"></td>
            <td><input class="inp" type="text" name="v1_summ" value="{{ $val->v1_summ}}"></td>
            <td><input class="inp" type="text" name="v1_record"value="{{$val->v1_record}}"></td>

            <td><input class="inp" type="text" name="v2_1m" value="{{ $val->v2_1m}}"> </td>
            <td><input class="inp" type="text" name="v2_2m" value="{{ $val->v2_2m}}"></td>
            <td><input class="inp" type="text" name="v2_3m" value="{{ $val->v2_3m}}"></td>
            <td><input class="inp" type="text" name="v2_summ" value="{{ $val->v2_summ}}"></td>
            <td><input class="inp" type="text" name="v2_record"value="{{$val->v2_record}}"></td>
            <td><input class="inp" type="text" name="v3_1m" value="{{ $val->v3_1m}}"> </td>
            <td><input class="inp" type="text" name="v3_2m" value="{{ $val->v3_2m}}"> </td>
            <td><input class="inp" type="text" name="v3_3m" value="{{ $val->v3_3m}}"></td>
            <td><input class="inp" type="text" name="v3_summ" value="{{ $val->v3_summ}}"> </td>
            <td><input class="inp" type="text" name="v3_record"value="{{$val->v3_record}}"></td>
            <td><input class="inp" type="text" name="v4_1m" value="{{ $val->v4_1m}}"></td>
            <td><input class="inp" type="text" name="v4_2m" value="{{ $val->v4_2m}}"></td>
            <td><input class="inp" type="text" name="v4_3m" value="{{ $val->v4_3m}}"></td>
            <td><input class="inp" type="text" name="v4_summ" value="{{ $val->v4_summ}}"></td>
            <td><input class="inp" type="text" name="v4_record"value="{{$val->v4_record}}"></td>
            <td><input class="inp" type="text" name="v5_1m" value="{{ $val->v5_1m}}"></td>
            <td><input class="inp" type="text" name="v5_2m" value="{{ $val->v5_2m}}"></td>
            <td><input class="inp" type="text" name="v5_3m" value="{{ $val->v5_3m}}"></td>
            <td><input class="inp" type="text" name="v5_summ" value="{{ $val->v5_summ}}"></td>
            <td><input class="inp" type="text" name="v5_record"value="{{$val->v5_record}}"></td>
            <td><input class="inp" type="text" name="summ" value="{{ $val->summ}}"> </td><br>




            </form>

             </tr>


              @endforeach
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="refresh" content="{{ $timer + 3 }}" id="meta1">
    <title>Document</title>
    <style>
        *{margin:0;
          padding:0;}
       #con{height:300px;
            width:25%;
            border:solid 1px black;
            float:left;
            }
       #img{height:200px;
            width:100%;
            border:solid 1px black;
            float:left;
            background-size: 100% 100%;
       }
       #name{height:100px;
             width: 100%;
             border:solid 1px black;
              margin-top:200px;
              text-align:center;
              font-size:20px;
            }
        #name h2{margin-top:8%}



       #con1{
            height:300px;
            width:24.5%;
            border:solid 1px black;
            float:right;

           }
       #weightclass{
        height:73px;
            width:100%;
            border:solid 1px black;
            float:left;
            font-size:19px;
       }
       #weightclass h2{margin-left:5% }
       #weight{
        height:73px;
            width:100%;
            border:solid 1px black;
            float:left;
            font-size:19px;
       }
       #weight h2{margin-left:5% }
       #motecum{
        height:73px;
            width:100%;
            border:solid 1px black;
            float:left;
            font-size:19px
       }
       #motecum h2{margin-left:5% }
       #coacհname{height:73px;
               width:100%;
               border:solid 1px black;
               float:left;
               font-size:19px;
           }
           #coacհname  h2{margin-left:5% }
       .mrcvo{height:300px;
               width:90%;
               margin:0 auto;
               border:solid 1px #004218;

                }
                #monitor{height:638px;
                          width:100%;
                          border:solid 1px white;

                           }

                #time{height:24%;
                      width:50%;

                      border:solid 1px #004218;
                      text-align: center;
                      border:solid 1px black;

                     margin-left:25.3%;
                     }
                    #brqsh{height:23%;
                      width:50%;
                      border:solid 1px black;
                      text-align:center;
                      margin-left:25.3%;
                    }
                    #brqsh p{font-size:40px}
                    #brqsh h2{font-size:50px;
                               }

                .d1{
                    height: 220px;
                    width:220px;
                    border:solid 1px black;
                      border-radius: 50%;
                    float: left;
                    margin-left: 11%  ;
                   margin-top:2% ;         }
                   body{}

                   #jamanak{
                       color: #fff;
                       font-size: 2em;

                   }
                   #tmr{height: 100px;
                        width:100px;
                        font-size:70px;
                         border:solid 1px black;
                          justify-content:space-between;}
                          #tmr p{margin-top:7%}

                    #tmv{ height: 100px;
                          width:100px;
                          font-size:70px;
                         border:solid 1px black;
                          justify-content:space-between;}
                        #tmv p{margin-top:7%}

                    #dot{height: 100px;
                        width:100px;
                          font-size:70px;
                          border:solid 1px black;
                          justify-content:space-between;}
                    #dot p{margin-top:7%;}

                 #tm{height:68%;
                              width:40%;
                              border:solid 1px;
                              margin:0 auto;
                              margin-top:5%;
                              display: flex }

                #clng{opacity:0;}
        .country{
            width: 200px;
            height: 300px;
            border: 1px solid;
            float: left;
        }
        .flag{
            width: 100%;
            height: 150px;
            border: 1px solid;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .countryName{
            font-size: 2em;
        }
        .teamName{
            font-size: 2em;
        }
    </style>
</head>
<body>
<input type="hidden"  id="databaseTimer" value="{{ $timer }}" >

    <div id="monitor">
    <div id="con">
  <div id="img"
  @if(isset($marzikInfo->imgName))
  style="background-image: url('{{ 'marzikImg/'.$marzikInfo->imgName }}')"
  @endif
  ></div>

  <div id="name" > <h2> @if(isset($marzikInfo->name)){{ $marzikInfo->name }} {{ $marzikInfo->lastName }}@endif</h2></div>
</div>




<div id="con1">

    <div id="weightclass"><p>Քաշային կարգը(կգ)</p> <h2>@if(isset($marzikInfo->weightClass)){{ $marzikInfo->weightClass}}@endif</h2></div>


     <div id="weight"> <p>Մարզիկի քաշը(կգ)</p> <h2>@if(isset( $marzikInfo->weight)){{ $marzikInfo->weight}}@endif</h2></div>


     <div id="motecum"><p>Մոտեցում</p><h2>  @if(isset($parformer->marzadzev))  {{ $parformer->motecum }}@endif</h2></div>

     <div id="coacհname"><p>Մարզիչի անունը</p><h2>@if(isset($marzikInfo->coacհName)){{ $marzikInfo->coacհName}}@endif</h2></div>
</div>
<div id="time">
    <div class="country">
        <div class="flag" style="background-image: url('@if(isset($marzikInfo->getCountryInfo()->flag_img)){{ asset("flags/".$marzikInfo->getCountryInfo()->flag_img) }}@endif');"></div>
        <div class="countryName">@if(isset($marzikInfo->getCountryInfo()->name)){{$marzikInfo->getCountryInfo()->name}}@endif</div>
        <div class="teamName">@if(isset($marzikInfo->team)){{$marzikInfo->team}}@endif</div>
    </div>
    <div id="tm">
    <div id="tmr">
        <p id="jamanakr"></p>
                          </div>
        <div id="dot">
            <p>:</p>
        </div>

         <div id="tmv">
   <p id="jamanakv"> </p>
                          </div>
                        </div>
 </div>
<div id="brqsh"><p>Բարձրացվող քաշը (կգ) <h2>@if(isset($parformer->karatvoxQash)){{ $parformer->karatvoxQash }}  @endif</h2></p></div>

<div class="mrcvo">

@if($mrcavar1!="chnshvac" && $mrcavar2!="chnshvac" && $mrcavarGlx!="chnshvac")
    <div class="d1"
    style="background: {{ $mrcavar1 }}"
    ></div>
    <div class="d1"
    style="background: {{ $mrcavar2 }}"></div>
    <div class="d1"
    style="background: {{ $mrcavarGlx }}"></div>
    @endif
</div>
</div>

<audio  controls id="clng" src={{ asset('muzik/muz.mp3') }}>

    <source   type="audio/mpeg">

</audio>
<script>

    let jamr = document.getElementById('jamanakr');
    let jamv = document.getElementById('jamanakv');
    let databaseTimer = document.getElementById("databaseTimer").value;
    let n = databaseTimer;

let set = setInterval(f1,1000);
function f1(){

    let timerTest = localStorage.getItem('test');
    let refreshCounter = localStorage.getItem('refreshCounter');
    let refresh = localStorage.getItem('refresh')

    if(refresh == 1){
        location.reload();
        localStorage.setItem('refresh',0);
    }

    let r1=n/60;
    let v=n%60;
    let r2=r1%1;
    let r=r1-r2;
        n--;

        refreshCounter = localStorage.getItem('refreshCounter');
    if(refreshCounter == 1){
        n=0;
        // let meta = document.getElementById('meta1');
        // meta.setAtribute('content',3);
        location.reload();
    }


    if(n==0){

        refreshCounter--;
        localStorage.setItem('refreshCounter', refreshCounter);

    }

    if(n==0 && refreshCounter==1){

        localStorage.setItem('test', 1);

    }
    console.log(n);
    if(timerTest == 2 && refreshCounter==2 && n>=0 && v>0){
         v--;
        jamr.innerHTML = r;
        jamv.innerHTML = v;


        console.log(timerTest);
    }

    if(r==0 && v==30 && refreshCounter==2){
        console.log(refreshCounter);

        var audio = new Audio('http://eramart2.loc/muzik/muz.mp3');
        audio.play();
    }

}

</script>
</body>
</html>

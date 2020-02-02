@extends('layouts.app')
@section('content')

<div class="container bg-dark mt-3 mb-3 rounded content human_body">
    <div class="container">

        <div class="text-center p-5">
            <h1 class="mb-3 text-white">أجهزة جسم الإنسان</h1>
            <p class="text-white">
                في هذه الصفحة توضيح لجميع أجهزة جسم الإنسان وأعضائه، اضغط على الجهاز
                او العضو الذي تودّ القراءة عنه، لتحصل على كافة المعلومات عن تركيبه
                ووظائفه والأمراض والفحوصات والمقالات المتعلقة به
            </p>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <h1 class="text-white">أضغط علي الجهاز المرغوب</h1>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <div class="border" style="width: 100px; height: 2px;"></div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <map name="Devices">

     @foreach($humanbody as $humanbod)



         @php
         if($humanbod->title=="الجهاز العصبى")
         {
            echo "<area shape='circle' coords='452,44,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";
         }elseif($humanbod->title=="الجهاز المناعى"){

            echo "<area shape='circle'coords='485,169,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

         }elseif($humanbod->title=="الجهاز الهضمى"){

            echo "<area shape='circle'coords='518,293,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

              }
              elseif($humanbod->title=="الجهاز اللمفاوى"){

echo "<area shape='circle'coords='544,425,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }
  elseif($humanbod->title=="الغدد الصماء"){

echo "<area shape='circle'coords='530,557,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  } elseif($humanbod->title=="الجهاز اللحافى"){

echo "<area shape='circle'coords='469,686,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }elseif($humanbod->title=="جهاز الدوران"){

echo "<area shape='circle'coords='161,101,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }
  elseif($humanbod->title=="الجهاز التنفسى"){

echo "<area shape='circle'coords='78,232,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }elseif($humanbod->title=="الجهاز البولى"){

echo "<area shape='circle'coords='42,374,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }
  elseif($humanbod->title=="الجهاز التناسلى"){

echo "<area shape='circle'coords='47,524,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }elseif($humanbod->title=="الجهاز الهيكلى والعظمى"){

echo "<area shape='circle'coords='94,672,42' href='/bodies/{$humanbod->id}' alt='Nerve' />";

  }
         @endphp


     @endforeach

            <!--area shape="circle" coords="452,44,42" href="/bodies/{body}" alt="Nerve" /-->





        </map>
        <img src="{{ asset('/imgs/body2.png') }}" alt="Body" usemap="#Devices" />
    </div>
    <div style="height: 20px;"></div>
</div>



@endsection

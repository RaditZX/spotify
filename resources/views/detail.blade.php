@extends('main')
@section('container')

<style>
    body{
        font-family:sans-serif;
        color:white;
    }
    .main{
        width: 80em;
        height: 15em;
    }
    .container{
        width: 15em;
        height: 15em;
        background-color:white;
        display: flex;

      margin-top: 10em;
      margin-left: 25em;
      
    }
    .container1{
        display: flex;
        flex-direction:column;
        margin-left: 2em;
        width: 100em;
    }
    audio{
        margin-top:2em ;
    }
    .button {
 /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {
    background-color: #008CBA;
  color: white;
}

.button1:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
.button2 {
    background-color: #f44336;
  color: white;
}

.button2:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
</style>

<div class="main">
   <div class="container">
   @foreach($musics as $music)@endforeach
      <a href="/detail/{{ ($music->id) }}"><img style="  width: 15em;height: 15em;" src="{{asset('storage/'.$music->image)}}" alt=""></a>
   @if ($music->user_id!= auth()->id())
     <div class="container1">
        <h1>{{ $music->name }}</h1>
        <h3>Auhtor:{{ $music->composer }}</h3>
        <audio controls src=" {{asset('storage/'.$music->music)}} "></audio>
     </div>
     @else
     <div class="container1">
        <h1>{{ $music->name }}</h1>
        <h3>Auhtor:{{ $music->composer }}</h3>
        <audio controls src=" {{asset('storage/'.$music->music)}} "></audio>
       
        
     </div>





    </div>
    <p style="margin-left:25em;">{{ $music->lyric }}</p>
    <a href="/edit/{{ ($music->id) }}"><button style="margin-left:25em;" class="button button1">Edit</button></a>
<a href="/delete/{{ ($music->id) }}"><button class="button button2">Delete</button></a>
@endif
</div>


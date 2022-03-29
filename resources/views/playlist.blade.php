@extends('main')
@section('container')

<style>
  body{
    color:black;
  }
  .main{
    padding:50px;
  }
 .cards {
   display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(6, minmax(100px, 1fr));
  
  
}

.card {
  margin: 20px;
  padding: 20px;
  width: 15em;
  height: 20em;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
   background: 	#181818;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}


</style>



 
  <div class="main">
  <H1 style="margin-left:2rem" >Playlist</H1>
    <div class="cards">
    @foreach ($Musics as $music)
    <div class="card ">
    
      <a href="/playlistdetail/{{ ($music->id) }}"><img width="200em" src="{{asset('storage/'.$music->imageplaylist)}}" alt=""></a><br>
      <h3>{{ $music->playlistname }}</h3>
      <a  href="/detail/{{ $music->id }}" style="text-decoration:none; color:white;">Listen Now! </a>
    
  
    </div>
    @endforeach
    </div>
</div>








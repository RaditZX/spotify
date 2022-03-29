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
  @foreach ($musics as $music)
  <H1 style="margin-left:2rem" >Playlist {{ $music->playlistname}}</H1>
  @endforeach
    <div class="cards">
    
    @foreach ($playlists as $playlist)
    <div class="card ">
    
      <a href="/detail/{{ ($playlist->id) }}"><img width="200em" src="{{asset('storage/'.$playlist->image)}}" alt=""></a><br>
      <h3>{{ $playlist->name }}</h3>
      <a  href="/detail/{{ $playlist->id }}" style="text-decoration:none; color:white;">Listen Now! </a>
    
  
    </div>
    @endforeach
    </div>
</div>








@extends('main')
@section('container')

<style>
 body {
 
 color:white;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
 width: 100%;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
 margin-top: 6px;
 margin-bottom: 16px;
 resize: vertical;
}

input[type=submit] {
 background-color: #04AA6D;
 color: white;
 padding: 12px 20px;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}

input[type=submit]:hover {
 background-color: #45a049;
}

.container {
 border-radius: 5px;
 background-color: #696969;
 padding: 20px;
 margin-top: 5em;
}
input[type="file"] {
   display: none;
}


.custom-file-upload {
   border: 1px solid #ccc;
   display: inline-block;
   padding: 6px 12px;
   cursor: pointer;
}

</style>

<div class="container">
    @foreach ($musics as $music)    @endforeach
  <form action="{{ url('music',$music->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method ("PUT")
      <h1> Music</h1>

        <input type="text" placeholder="Music Name" value="{{ $music->name }}" name="name"/>
    
      <h4>Music</h4>
      <label class="custom-file-upload">Choose FIle
      <input class="form-control" type="file" id="music" value="{{ $music->music }}" name="music"  " >
       </label>
         
      <h4>Cover</h4>
       <label class="custom-file-upload">Choose FIle
      <input class="form-control" type="file" id="image" value="{{ $music->image }}" name="image"  " >
</label><br><br>
  

        <input type="text" placeholder="Password" value="{{ $music->composer }}" name="composer"/>
   

        <input type="text" placeholder="Password" value="{{ $music->lyric }}" name="lyric"/>
    
     
  
    <input type="submit" >
   

  </form>
</div>
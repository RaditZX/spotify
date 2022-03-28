<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
    body {
    background-color:  #000000;
    font-family:sans-serif;
    }
    .main-nav {
  grid-area: mn;
  padding: 0 30px 0 20px;
  top: 20;
  left: 5em;
position: fixed;
width: 100%;
z-index: 1;
}

.main-nav a {
  color: var(--light);
  text-decoration: none;
  margin: 5px;  
  
}
.netflixLogo {
  grid-area: nt;
  object-fit: cover;
  width: 100px;
  max-height: 100%;
  
  padding-left: 30px;
  padding-top: 0px;  
  top: 20;
position: fixed;
width: 100%;
z-index: 1;
}

.netflixLogo img {  
  height: 35px;     
}
#logo {
  color: #7CFC00;  
  margin: 0; 
  padding: 0; 
  text-decoration: none;
}

.main-nav a:hover {
  color: var(--dark);
}
.sub-nav {
  grid-area: sb;
  padding: 0 40px 0 40px;
  top: 10;
  left: 92em;
  position: fixed;
width: 100%;
z-index: 1;
}

.sub-nav a {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}
.sub-nav h3 {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}


.sub-nav a:hover {
  color: var(--dark);
}
/* Style the search box inside the navigation bar */
button {
  background-color: #7CFC00;
  border: none;
  color: white;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  padding: 8px 20px;
  border-radius: 4px;

  
}
input{
    padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}


</style>
<header>
<div class="netflixLogo">
        <a id="logo" href="#home" style="font-weight: bold;">GOFY</a>
      </div>      
<nav class="main-nav">       
                 
       
      
@if ($music->user_id!= auth()->id())
                 <a href="/list">Home</a>
                 
@else

<a href="/list">Home</a>

<a href="/add">Add</a>
                
</nav>
@endif
<nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
 
        <form class="form-inline">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <a href="#">{{ Auth::user()->name }}</a>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
             
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
</div>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ url('signout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
                 
    </header>

<body>
   
    <div>@yield('container')</div>
</body>
</html>
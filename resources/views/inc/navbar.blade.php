<div id="home">

     <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="{{asset('/img/pp.jpeg')}}" width="60" height="60" class="d-inline-block align-top rounded-circle" alt="">
  </a> 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/#aboutme">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/#features">Features</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/#skills">Resources</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="/#clients">Clients</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/#contact">Contact</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Blogs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">cat1</a>
          <a class="dropdown-item" href="#">cat2</a>
          <a class="dropdown-item" href="#">cat3</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('blogs')}}">All blogs</a>
        </div>
      </li>

      
    </ul>
  </div>
</nav>
     <!-- end Navigation bar -->

   

</div>
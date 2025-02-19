<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'myGym')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg bg-primary bg-gradient ">
        <div class="container-fluid">
       <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M1002.133183 487.460573v47.250226c0 13.458962-10.933408 24.360401-24.392369 24.360401h-67.710406v-95.971028h67.710406c13.458962 0 24.39237 10.901439 24.392369 24.360401z" fill="#5FCEFF" /><path d="M910.030408 559.0712v132.991165c0 13.5229-5.466704 25.735069-14.322125 34.59049a48.727196 48.727196 0 0 1-34.590491 14.322125c-27.01383 0-48.912616-21.898786-48.912616-48.912615v-361.953358c0-13.5229 5.466704-25.735069 14.322126-34.590491 8.855421-8.855421 21.067591-14.322125 34.59049-14.322125 27.01383 0 48.912616 21.898786 48.912616 48.912616v228.962193z" fill="#FFB578" /><path d="M788.100528 559.0712v193.956105c0 13.490931-5.466704 25.735069-14.322126 34.59049a48.727196 48.727196 0 0 1-34.59049 14.322126c-27.01383 0-48.880647-21.898786-48.880647-48.912616V269.144067c0-13.490931 5.466704-25.735069 14.322125-34.590491 8.823452-8.855421 21.035622-14.322125 34.558522-14.322125 27.01383 0 48.912616 21.898786 48.912616 48.912616v289.927133z" fill="#FF4893" /><path d="M334.364085 463.100172h355.94318v95.971028H334.364085z" fill="#5FCEFF" /><path d="M334.364085 559.0712v193.956105c0 27.01383-21.898786 48.912616-48.912616 48.912616-13.490931 0-25.735069-5.466704-34.590491-14.322126a48.78474 48.78474 0 0 1-14.322125-34.59049V269.144067c0-27.01383 21.898786-48.912616 48.912616-48.912616 13.490931 0 25.735069 5.466704 34.59049 14.322125a48.78474 48.78474 0 0 1 14.322126 34.590491v289.927133z" fill="#FF4893" /><path d="M212.434204 559.0712v132.991165c0 27.01383-21.898786 48.912616-48.912616 48.912615-13.490931 0-25.7031-5.466704-34.558521-14.322125a48.727196 48.727196 0 0 1-14.322125-34.59049v-361.953358c0-27.01383 21.898786-48.912616 48.880646-48.912616 13.490931 0 25.735069 5.466704 34.590491 14.322125 8.855421 8.855421 14.322125 21.067591 14.322125 34.590491v228.962193z" fill="#FFB578" /><path d="M114.640942 463.100172v95.971028h-65.216822c-13.458962 0-24.360401-10.901439-24.3604-24.360401v-47.250226c0-13.458962 10.901439-24.360401 24.3604-24.360401h65.216822z" fill="#5FCEFF" /><path d="M690.307265 581.449521H334.364085a22.378321 22.378321 0 1 1 0-44.756642h355.94318a22.378321 22.378321 0 1 1 0 44.756642zM812.205176 581.449521h-24.104648a22.378321 22.378321 0 1 1 0-44.756642h24.104648a22.378321 22.378321 0 1 1 0 44.756642zM977.740814 581.449521h-67.710406a22.378321 22.378321 0 1 1 0-44.756642h67.710406c1.112522 0 2.014049-0.888739 2.014048-1.98208v-47.250226a1.998064 1.998064 0 0 0-2.014048-1.98208h-67.710406a22.378321 22.378321 0 1 1 0-44.756642h67.710406c25.789417 0 46.770691 20.96529 46.77069 46.738722v47.250226c0 25.770235-20.981274 46.738722-46.77069 46.738722zM690.307265 485.478493H334.364085a22.378321 22.378321 0 1 1 0-44.756642h355.94318a22.378321 22.378321 0 1 1 0 44.756642zM114.640942 581.449521h-65.216822c-25.773432 0-46.738722-20.968487-46.738721-46.738722v-47.250226c0-25.773432 20.968487-46.738722 46.738721-46.738722h65.216822a22.378321 22.378321 0 1 1 0 44.756642h-65.216822a1.98208 1.98208 0 0 0-1.982079 1.98208v47.250226c0 1.093341 0.888739 1.98208 1.982079 1.98208h65.216822a22.378321 22.378321 0 1 1 0 44.756642z" fill="#4F46A3" /><path d="M285.451469 824.321439a70.83378 70.83378 0 0 1-50.411964-20.875777 70.83378 70.83378 0 0 1-20.878973-50.418357V269.144067c0-39.309119 31.978621-71.290937 71.290937-71.290937 19.047148 0 36.953002 7.413618 50.41516 20.875776s20.875777 31.368012 20.875777 50.415161v483.883238c0 39.312316-31.981818 71.294134-71.290937 71.294134z m0-581.711667c-14.632225 0-26.534295 11.90207-26.534295 26.534295v483.883238c0 7.093928 2.758927 13.759471 7.765277 18.76582a26.380844 26.380844 0 0 0 18.769018 7.771672c14.632225 0 26.534295-11.905267 26.534295-26.537492V269.144067c0-7.093928-2.758927-13.756274-7.768474-18.765821s-11.671893-7.768474-18.765821-7.768474z" fill="#4F46A3" /><path d="M163.521588 763.353301a70.779432 70.779432 0 0 1-50.383191-20.878973 70.824189 70.824189 0 0 1-20.875776-50.411963v-361.953358c0-39.309119 31.96903-71.290937 71.258967-71.290937 19.047148 0 36.953002 7.413618 50.415161 20.875777s20.875777 31.368012 20.875776 50.41516v361.953358c0 39.309119-31.981818 71.290937-71.290937 71.290936z m0-459.778589c-14.613044 0-26.502326 11.905267-26.502325 26.534295v361.953358c0 7.093928 2.758927 13.756274 7.765277 18.762623a26.329693 26.329693 0 0 0 18.737048 7.771671c14.632225 0 26.534295-11.905267 26.534295-26.534294v-361.953358c0-7.093928-2.758927-13.759471-7.768474-18.769018s-11.671893-7.765277-18.765821-7.765277zM739.187912 824.321439c-39.293135 0-71.258968-31.981818-71.258968-71.294134V269.144067a70.820992 70.820992 0 0 1 20.878973-50.415161c13.39822-13.452568 31.304074-20.875777 50.379995-20.875776 39.309119 0 71.290937 31.978621 71.290937 71.290937v483.883238a70.84337 70.84337 0 0 1-20.87258 50.418357c-13.474946 13.458962-31.374406 20.875777-50.418357 20.875777z m0-581.711667c-7.090731 0-13.733895 2.749337-18.70508 7.736505a26.387237 26.387237 0 0 0-7.797246 18.794593v483.883238c0 14.632225 11.889282 26.537492 26.502326 26.537492a26.368056 26.368056 0 0 0 18.769017-7.771671 26.364859 26.364859 0 0 0 7.765278-18.765821V269.144067c0-14.632225-11.905267-26.534295-26.534295-26.534295z" fill="#4F46A3" /><path d="M861.117792 763.353301c-39.312316 0-71.294134-31.981818-71.294134-71.290936v-361.953358c0-19.050345 7.413618-36.956199 20.878974-50.418357a70.83378 70.83378 0 0 1 50.41516-20.875777c39.309119 0 71.290937 31.981818 71.290937 71.290937v361.953358c0 19.050345-7.413618 36.956199-20.878973 50.41516-13.455765 13.465355-31.361618 20.878973-50.411964 20.878973z m0-459.778589a26.364859 26.364859 0 0 0-18.76582 7.765277 26.368056 26.368056 0 0 0-7.771672 18.769018v361.953358c0 14.629028 11.905267 26.534295 26.537492 26.534294a26.33289 26.33289 0 0 0 18.762624-7.768474 26.348875 26.348875 0 0 0 7.771671-18.76582v-361.953358c0-14.629028-11.90207-26.534295-26.534295-26.534295z" fill="#4F46A3" /></svg>
          <a class="navbar-brand ms-3 text-light" href="/">MyGym</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/contact">Contacts</a>
              </li>
              @auth
              @if (Auth::user()->role === 'admin') 
              <li class="nav-item">
                <x-responsive-nav-link class="nav-link text-light" :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                  {{ __('Dashboard') }}
              </x-responsive-nav-link>
              </li>
             @else 
              <li class="nav-item">
                <x-responsive-nav-link class="nav-link text-light" :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                  {{ __('Dashboard') }}
              </x-responsive-nav-link>
              </li>
              @endif
              @endauth
            </ul>

           <ul class="navbar-nav">
     @guest
         <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('login') }}">Login</a>
          </li>
     @endguest
      </ul>
            @auth
     {{-- se utente loggato --}}

  <ul class="navbar-nav">
       <li class="nav-item dropdown">
  
        <a class="nav-link dropdown-toggle  text-light" href="#" role="button" data-bs-toggle="dropdown"
  
        aria-expanded="false">
  
        {{ Auth::user()->name }}
  
      </a>
  
      <ul class="dropdown-menu dropdown-menu-end  bg-primary bg-gradient">
  
        <li>
  
          <a class="dropdown-item  " href="{{ route('profile.edit') }}">Profile</a></li>
  
          <li>
  
            <form method="POST" action="{{ route('logout') }}">
  
              @csrf
  
              <button class="dropdown-item  "  >Logout</button>
  
            </form>
    </li>
  </ul>
  </li>
</ul>
     @endauth
          </div>
        </div>
      </nav>

    <div class="container-fluid">
        <div class="row justify-content-center my-3">
            @yield('main-content')
        </div>
    </div>
    <footer class="text-center p-4 bg-body-tertiary">All rights reserved &copy;</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
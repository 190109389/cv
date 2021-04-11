
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <div class="menu" style="width:100%; background-color:white; 
    
    box-shadow: 2px 2px 12px 2px rgba(0, 0, 0, 0.2); 
    margin:auto;
    text-align:center;
    position:fixed;
    z-index:999;">
      <ul style="width:100%;
      margin:auto;
      padding:15px 0px;">
        <li style="display:inline-block;
        padding:5px;"><a href="/" style="text-decoration:none;
    color:black;
    background-color:#DDD;
    transition:0.4s;
    padding:5px 25px;">{{ __("HOME") }}</a></li>
        <li style="display:inline-block;
        padding:5px;"><a href="/skills" style="text-decoration:none;
    color:black;
    background-color:#DDD;
    transition:0.4s;
    padding:5px 25px;">{{ __("SKILLS") }}</a></li>
        <li style="display:inline-block;
        padding:5px;"><a href="/contact" style="text-decoration:none;
    color:black;
    background-color:#DDD;
    transition:0.4s;
    padding:5px 25px;">{{ __("CONTACT") }}</a></li>
      
    
     @php $locale = session()->get('locale'); @endphp
     <li class="nav-item dropdown" style="display:inline-block;
     padding:5px;">
         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  style="text-decoration:none;
            color:black;
            background-color:#DDD;
            transition:0.4s;
            padding:5px 25px;">
             @switch($locale)
                 @case('en')English
                 @break
                 @case('kz') Қазақ тілі
                 @break
                 @case('ru') Русский язык
                 @break
                 @default English
             @endswitch
             <span class="caret"></span>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="en"> English</a>
             <a class="dropdown-item" href="kz"> Қазақ тілі</a>
             <a class="dropdown-item" href="ru"> Русский язык</a>
         </div>
     </li>
  
      </ul>
   </div>

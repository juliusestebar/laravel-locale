<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <h1>Hello, {{ __('locale.world') }} !</h1>
    <h1>@lang('locale.thank_you') !</h1>
    <h1>{{ __('locale.see_you_again') }}, {{ __('locale.goodbye') }} !</h1>

        <ul class="nav navbar-nav float-right ml-5">
          <li class="dropdown dropdown-language nav-item ">
            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon {{ __('locale.flag-icon') }}"></i><span class="">{{ __('locale.selected') }}</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
              <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                <i class="flag-icon flag-icon-us mr-50"></i> English
              </a>
              <a class="dropdown-item" href="{{url('lang/ar')}}" data-language="sa">
                <i class="flag-icon flag-icon-sa mr-50"></i> Arabic
              </a>
              <a class="dropdown-item" href="{{url('lang/es')}}" data-language="es">
                <i class="flag-icon flag-icon-es mr-50"></i> Spanish
              </a>
              <a class="dropdown-item" href="{{url('lang/ja')}}" data-language="jp">
                <i class="flag-icon flag-icon-jp mr-50"></i> Japanese
              </a>
              <a class="dropdown-item" href="{{url('lang/zh_HK')}}" data-language="hk">
                <i class="flag-icon flag-icon-hk mr-50"></i> Hong Kong
              </a>
              <a class="dropdown-item" href="{{url('lang/zh_CN')}}" data-language="cn">
                <i class="flag-icon flag-icon-cn mr-50"></i> China
              </a>
            </div>
          </li>
        </ul>
 <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

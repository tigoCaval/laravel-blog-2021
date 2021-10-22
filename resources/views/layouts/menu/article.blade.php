<a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="true">
    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
    <p>{{ __('Artigos') }}
      <b class="caret"></b>
    </p>
</a>
<div class="collapse show" id="article">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'article' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('articles.index') }}">
         <!-- <span class="sidebar-mini"> UP </span>-->
          <span class="sidebar-normal">{{ __('Artigos Publicados') }}</span>
        </a>
      </li>
    </ul>
</div>
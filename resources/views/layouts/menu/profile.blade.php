<a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="true">
    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
    <p>{{ __('Perfil') }}
      <b class="caret"></b>
    </p>
</a>
<div class="collapse show" id="profile">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
         <!-- <span class="sidebar-mini"> UP </span>-->
          <span class="sidebar-normal">{{ __('Perfil do Usuário') }}</span>
        </a>
      </li>
    </ul>
</div>
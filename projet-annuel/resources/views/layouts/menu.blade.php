<div class="content">

    <div id="menu">
        <ul class="fixed-nav-bar nav">
            <li class="item-r"><a href="{{ route('home') }}"> <img src="\images\logo.png" alt="AT"></a> </li>

            {{-- <li><a href="#">Comment appeler <i class="fas fa-chevron-down"></i></a></li> --}}

            <li><a href="{{ route('listepays') }}" @if(\Request::route()->getName()=="listepays") class="active" @endif>Liste des pays <i class="fas fa-chevron-down"></i></a>
                <ul>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Europe']) }}">Europe</a></li>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Amerique du sud']) }}">Amerique du sud</a>
                    </li>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Amerique du nord']) }}">Amerique du nord</a></li>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Afrique']) }}">Afrique</a></li>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Asie']) }}">Asie</a></li>
                    <li class=><a href="{{ route('listepays', ['continent' => 'Océanie']) }}">Oceanie</a></li>
                </ul>
            </li>

            <li class=><a href="{{ route('indicatif') }}" @if(\Request::route()->getName()=="indicatif") class="active" @endif>Liste des indicatifs</a></li>

            {{-- <li class=><a href="{{ route('indicatif') }}">Actualités</a></li> --}}
            <li class=><a href="{{ route('blogetc.index') }}">Actualités</a></li>
        </ul>

    </div>
</div>

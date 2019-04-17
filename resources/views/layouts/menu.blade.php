@foreach ($menu_categories as $menu_category)

    @if ($menu_category->childrenCat->count())
    {{--Если у категории есть вложенный и опубликованный пункт, тогда отрисовать вот так:--}}
        <li>
            <a href="{{ route('shop.categories', $menu_category->slug) }}">
                {{ $menu_category->name ?? '' }}
            </a>
            <ul class="sub-menu">
                @include('layouts.menu', [
                    'menu_categories' => $menu_category->childrenCat,
                    'isChild' => true
                ])
            </ul>
        </li>
    @else
    {{--Если у категории нет вложенного и опубликованного пункта - проверка, загружены ли сейчас в шаблон вложенные пункты?--}}
        @isset ($isChild)
            {{--Если да - отображаем ссылки для вложенных - будут отображаться во вложенном <ul></ul>--}}
            <li>
                <a href="{{ route('shop.categories', $menu_category->slug) }}">{{ $menu_category->name ?? '' }}</a>
            </li>
            {{--Покидаем текущий цикл - следующие вложенные каты будут загружены при следующем проходе--}}
            @continue
        @endif
        {{--Разметка для пунктов без вложенных пунктов--}}
        <li>             
            <a href="{{ route('shop.categories', $menu_category->slug) }}">{{ $menu_category->name ?? '' }}</a>
        </li>
    @endif
    
    
@endforeach
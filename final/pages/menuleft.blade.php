<aside class="menu__news--left">
    <h2 class="title__menu--left">
        Recipes List
    </h2>
    <ul>
        {{-- <li><a class="item-links" href="">Home</a></li> --}}
        @foreach ($category as $item)
            @if (count($item->SubCategory)>0)
            <li class="menu_sub"><a href="/category/{{$item->id}}_{{$item->Sort_Name}}.html" class="item-links item-linkss" >{{$item->Name}}</a>
                <ul class="submenu">
                    @foreach ($item->SubCategory as $sc)
                    <li><a class="item-links" href="/subcategory/{{$sc->id}}_{{$sc->Sort_Name}}.html">{{$sc->Name}}</a></li>
                    @endforeach
                </ul>
            </li> 
                    
            @else
            <li><a href="/category/{{$item->id}}_{{$item->Sort_Name}}.html" class="item-links" >{{$item->Name}}</a></li>  
                
            @endif
        @endforeach
        <li><a class="item-links" href="">Introduction</a></li>
        <li class="menu_sub"><a class="item-links item-linkss" href="">News</a>
            <ul class="submenu">
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
            </ul>
        </li>
        <li class="menu_sub"><a class="item-links item-linkss" href="">News</a>
            <ul class="submenu">
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
                <li><a class="item-links" href="">Video</a></li>
            </ul>
        </li>

        
    </ul>
</aside>
@foreach($modules as $module)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-list"></i>{{$module->name}}</a>
                        <ul class="sub-menu children dropdown-menu">
                            @foreach($module->Menus as $menu)
                            <li>
                                <i class="fa fa-pencil-square-o"></i>
                                <a href="{{route($menu->url)}}">{{$menu->name.' '.$menu->url}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach

@foreach($menus as $menu)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-list"></i>{{$menu->name}}</a>                       
                    </li>
                    @endforeach
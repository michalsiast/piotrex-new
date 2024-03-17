@if($items->count() > 0)
    <ul class="nav navbar-nav me-auto">
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                }
                else {
                    $url = url()->to($item->url);
                }

                if($item->target) {
                    $target = $item->target;
                }

                $isActive = request()->fullUrlIs($url);
            @endphp
            @if($item->navItems->count() > 0)
                <li class="nav-item dropdown">
            @else
                <li class="nav-item">
                    @endif
                    @if($item->navItems->count() > 0)
                        <a href="{{$url}}" class="nav-link dropdown-toggle {{ $isActive ? 'active' : '' }}" data-bs-toggle="dropdown">
                            @else
                                <a class="nav-link" href="{{$url}}">
                                    @endif
                                    {{$item->label}}
                                </a>
                                @if($item->navItems->count() > 0)
                                    <ul class="dropdown-menu">
                                        @foreach($item->navItems as $subItem)
                                            @php
                                                $isActive = false;
                                                $url = null;
                                                $target = '_self';
                                                if($subItem->page) {
                                                    $url = route($subItem->page->type);
                                                }
                                                else {
                                                    $url = url()->to($subItem->url);
                                                }

                                                if($subItem->target) {
                                                    $target = $subItem->target;
                                                }

                                                $isActive = request()->fullUrlIs($url);
                                            @endphp
                                            <li {{ $isActive ? 'active' : '' }}">
                                            <a href="{{$url}}" >
                                                {{ $subItem->label }}
                                            </a>
                </li>
                @endforeach
    </ul>
    @endif
    </li>
    @endforeach
    </ul>
@endif

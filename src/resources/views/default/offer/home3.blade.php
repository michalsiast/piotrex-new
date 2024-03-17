@foreach($items as $item)
        <li>
            <a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a>
        </li>
@endforeach







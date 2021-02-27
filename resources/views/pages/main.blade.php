@if(!isset($data))
    @php($data = (object)[])
@endif
<home-component :data="{{json_encode($data)}}"></home-component>
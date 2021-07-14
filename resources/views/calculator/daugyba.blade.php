<h1>Daugybininkas</h1>
@if($rezultatas)
    <h2>Rezultatas: {{$rezultatas}}</h2>  
@endif
<form action="{{route('do-math')}}" method="POST">
    <input type="text" name="x" value="{{$x}}">
    <input type="text" name="y" value="{{$y}}">
    <button type="submit">Daugink!</button>
    @csrf
</form>

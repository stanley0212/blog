@foreach($newpost as $newpost2)    
<ui>
<li style="margin-top: 20px;"><a href="/article/{{$newpost2 -> id}}">{{$newpost2 -> title}}</a></li>
</ui>
@endforeach
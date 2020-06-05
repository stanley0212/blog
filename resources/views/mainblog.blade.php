<div id="Box">
  <div id="Box-a">
    @foreach($blog as $blogs)
    <H1 style=color:#000;>{{ $blogs -> title }}</H1><br/>
    <pre style="text-align:left; font-size:16px; white-space: pre-wrap;-webkit-line-clamp: 4;display: -webkit-box;-webkit-box-orient: vertical;overflow:hidden;">{{ $blogs -> info }} </pre><a href='/article/{{ $blogs -> id}}'><更多></a>
    @endforeach
  </div>
</div><!--left div-->
<div id="Box-b">最新文章
    <div><br/>
    @foreach($blog as $blogs)
    <pre style="text-align:left; white-space: pre-wrap;"><a href='/article/{{ $blogs -> id}}'>{{ $blogs -> title }}</a></pre>
    @endforeach
  </div>
</div><!--right div-->



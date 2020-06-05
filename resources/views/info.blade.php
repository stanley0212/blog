<div id="Box">
  <div id="Box-a">
    <H1 style=color:#000;>{{ $info -> title }}</H1><br/>
    <pre style="text-align:left; font-size:16px; white-space: pre-wrap;">{{ $info -> info }} </pre>
</div>
  </div><!--left div-->
  <div id="Box-b">最新文章
  <div><br/>
        <pre style="text-align:left; white-space: pre-wrap;"><a href='/article/{{ $info -> id}}'>{{ $info -> title }}</a></pre>
    </div>
    </div><!--right div-->
</div>


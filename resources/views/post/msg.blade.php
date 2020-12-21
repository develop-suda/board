<h1>掲示板</h1>
@foreach ($msgs as $value)
    <form action="post/delete" method="post">
        <table>
           @csrf
           <tr><th>message: </th><td><p>{{$value->message}}</p></td></tr>
           <input type="hidden" name = "id" value={{ $value->id }}>
           <tr><th></th><td><input type="submit" value= "削除" ></td></tr>
        </table>
    </form>
@endforeach
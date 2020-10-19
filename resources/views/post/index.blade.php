<form action="post" method="post">
    <table>
       @csrf
       <tr><th>message: </th><td><input type="text"
          name="message"></td></tr>
       <tr><th></th><td><input type="submit"
          value="send"></td></tr>
    </table>
</form>
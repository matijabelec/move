<h1>Stadiums</h1>

<table>
    {% foreach($stadiums as $stadium) %}
    <tr>
        <td>{{$stadium->id}}</td>
        <td>{{$stadium->name}}</td>
        <td>{{$stadium->place}}</td>
    </tr>
    {% endforeach %}
</table>

{% extends:'_layouts.crud-index' %}

{% block:page_title %}Stadiums{% endblock %}

{% block:table %}
    <table>
        {% foreach($stadiums as $stadium) %}
        <tr>
            <td>{{$stadium->id}}</td>
            <td>{{$stadium->name}}</td>
            <td>{{$stadium->place}}</td>
            <td>
                <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}"><i class="material-icons">pageview</i></a>
                <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}/edit"><i class="material-icons">edit</i></a>
                <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}/delete"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        {% endforeach %}
    </table>
{% endblock %}

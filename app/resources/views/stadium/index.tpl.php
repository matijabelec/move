{% extends:'_layouts.crud-index' %}

{% block:page_title %}Stadiums{% endblock %}

{% block:table %}
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
            <tr>
                <th>Id</th>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Place</th>
            </tr>
        </thead>
        <tbody>
            {% foreach($stadiums as $stadium) %}
                <tr>
                    <td>{{$stadium->id}}</td>
                    <td class="mdl-data-table__cell--non-numeric">{{$stadium->name}}</td>
                    <td class="mdl-data-table__cell--non-numeric">{{$stadium->place}}</td>
                    <td>
                        <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}"><i class="material-icons">pageview</i></a>
                        <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}/edit"><i class="material-icons">edit</i></a>
                        <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadium/{{$stadium->id}}/delete"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            {% endforeach %}
        </tbody>
    </table>
{% endblock %}

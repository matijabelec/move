{% extends:'_layouts.crud-form' %}

{% block:page_title %}Stadium{% endblock %}

{% block:form %}
    <div>
        <p>{{$stadium->id}}</p>
        <p>{{$stadium->name}}</p>
        <p>{{$stadium->place}}</p>
    </div>
{% endblock %}

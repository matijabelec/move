{% extends:'_layouts.crud-form' %}

{% block:page_title %}New stadium{% endblock %}

{% block:form %}
    <form method="POST" action="">
        <input type="hidden" name="id" value="{{$stadium->id}}"/>
        <input type="text" name="name" value="{{$stadium->name}}"/>
        <input type="text" name="place" value="{{$stadium->place}}"/>
        <input type="submit" value="Update">
    </form>
{% endblock %}

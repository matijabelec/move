{% extends:'_layouts.crud-form' %}

{% block:page_title %}New stadium{% endblock %}

{% block:form %}
    <form method="POST" action="">
        <input type="text" name="name" value=""/>
        <input type="text" name="place" value=""/>
        <input type="submit" value="Create">
    </form>
{% endblock %}

{% extends:'_layouts._default' %}

{% block:content %}
    <main>
        <h1>{{ block:page_title }}{{ endblock }}</h1>
        
        <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" href="/stadiums"><i class="material-icons">list</i></a>
        
        {{ block:form }}{{ endblock }}
    </main>
{% endblock %}

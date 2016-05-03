{% extends:'_layouts._default' %}

{% block:content %}
    <main>
        <h1>{{ block:page_title }}{{ endblock }}</h1>
        
        {{ block:table }}{{ endblock }}
    </main>
    
    <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" href="/stadium/create"><i class="material-icons">add</i></a>
{% endblock %}

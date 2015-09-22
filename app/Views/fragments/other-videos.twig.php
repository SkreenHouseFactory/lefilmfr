<div class="col-lg-4 col-md-5" id="other-videos">
    <h3>Autres bande-annonce</h3>
    <ul>
      {% for p in teasers %}
        <li class="row">
           <a href="{{ p.seo_url|split('/')[4] ? p.seo_url|split('/')[4] : p.seo_url|split('/')[3] }}">
            <div class="col-lg-5 col-md-5 col-sm-2 col-xs-5 thumb" style="background-image: url('{{ p.picture }}');"></div>
            <div class="col-lg-7 col-md-7 col-sm-10 col-xs-7">
                <h4>{{ p.title }}</h4>
                <p>{{ p.format.name }}, {{ p.year }}</p>
            </div>
           </a>
        </li>
      {% endfor %}
    </ul>
</div>

<div class="recommendations">
    <div class="container-fluid ">
        <div class="row">
          {% for r in film.related %}
            <div class="col-lg-5">
              <div class="clear"></div>
              <h2>{{ r.title }}</h2>
              <div class="film films-form-left">
              {% for p in r.programs if p.format.name in ['Film', 'Documentaire'] %}
                <div url="{{ p.seo_url|split('/')[4] ? p.seo_url|split('/')[4] : p.seo_url|split('/')[3] }}">
                    <div class="film-wrapper image" style="background-image:url('{{ p.picture }}');">
                        <div class="internShadow"></div>
                        <section class="film-infos">
                            <h2>{{ p.title }}</h2>
                            <p>
                                <span>{{ p.format.name }}</span>
                                <span>{{ p.year }}</span>
                                <span>{{ p.duration }}</span>
                            </p>
                            <div class="film-play">
                                <button><i class="fa fa-play"></i></button>
                            </div>
                        </section>
                    </div>
                </div>
              {% endfor %}
              </div>
            </div>
          {% endfor %}
        </div>
    </div>
</div>
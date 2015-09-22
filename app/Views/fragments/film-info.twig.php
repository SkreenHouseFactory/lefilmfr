<article itemscope itemtype="http://schema.org/Movie" itemref="more-info" class="col-lg-8 col-md-7">
    <div class="player-container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                <div id="player" itemprop="video" itemprop="trailer" itemscope itemtype="http://schema.org/VideoObject">
                    {% if film.teaser.player is defined and film.teaser.player and film.teaser.player.url %}
                      <a name="teaser"></a>
                      <div id="program-teaser" itemscope itemtype="http://www.schema.org/VideoObject" itemref="md-about">  
                        <meta itemprop="thumbnail" content="{{ film.picture }}" />
                        <meta itemprop="thumbnailUrl" content="{{ film.picture }}" />
                        <meta itemprop="duration" content="{{ film.duration }}" />
                        <meta itemprop="embedURL" content="{{ film.teaser.player.url|replace({'http://': 'https://', 'http%3A%2F%2': 'https%3A%2F%2'}) }}" />
                        <meta itemprop="width" content="637" />
                        <meta itemprop="height" content="368" />
                        <meta itemprop="playerType" content="Flash" />
                        <meta itemprop="url" content="/{{ p.seo_url|split('/')[4] ? p.seo_url|split('/')[4] : p.seo_url|split('/')[3] }}" />
                        <meta itemprop="name" content="{{ film.title|replace({'"': ''}) }}" />
                        <meta itemprop="isFamilyFriendly" content=true />
                        <meta itemprop="description" content="{{ film.description_text|striptags|replace({"\n": ' '})|slice(0,400) }}..." />
                        <div id="program-teaser-meta" class="player-meta"></div>
                        <div id="program-teaser-player" data-play-api="{{ {url: film.teaser.player.url}|json_encode }}" data-autoplay="1">
                          <iframe src="{{ film.teaser.player.url }}" scrolling="no" frameborder="0"></iframe>
                        </div>
                      </div>
                    {% else %}
                      <div id="program-teaser">  
                        <div id="program-teaser-player" data-play-api="{{ {AdOnly: true, programId: film.id}|json_encode }}" data-autoplay="1">
                          <iframe src="http://player.myskreen.com/ad?program_id={{ film.id }}&fromWebsite=1{{ app.environment == 'dev' ? '&env=dev' : '' }}" scrolling="no" frameborder="0"></iframe>
                        </div>
                      </div>
                    {% endif %}
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12 film-info">
                {#<div class="rank" title="Note" itemprop="aggregateRating">
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star"></i>
                </div>
                #}
                <div class="film-info-wrapper">
                    <h1 itemprop="name">{{ film.title }}</h1>
                    <p><strong>Date de sortie:</strong> <time itemprop="datePublished">{{ film.year }}</time></p>
                    <p itemprop="duration" content="PT{{ film.duration }}M"><strong>Durée:</strong> {{ film.duration }}</p>
                    <p itemprop="genre"><strong>Genre:</strong> {{ film.format.name }}</p>
                    {#<p><strong>Nationalité:</strong> <?php print $film["country"]; ?></p>#}
                </div>
                <div class="film-info-wrapper">
                    <p itemprop="director"><strong>Réalisateur:</strong> 
                    {% for relation,persons in film.casting if relation in ['Réalisateur'] and persons|length %} 
                    {% for pers in persons   %}
                      <div {% if relation != 'out' %} itemprop="{{ relation }}" itemscope itemtype="{{ relation == 'productionCompany' ? 'http://schema.org/Organization' : 'http://schema.org/Person' }}"{% endif %} data-id="{{ pers.id }}">
                        <span {% if relation != 'out' %}itemprop="url"{% endif %} class="fav fav-person" data-name="{{ pers.name }}" data-placement="right"><span {% if relation != 'out' %}itemprop="name"{% endif %}>{{ pers.name }}</span></span> 
                      </div>
                    {% endfor %}
                    {% endfor %}
                    </p>
                </div>
                <div class="film-info-wrapper">
                    <p itemprop="actors"><strong>Avec:</strong>
                    {% for relation,persons in film.casting if relation in ['Acteur'] and persons|length %} 
                    {% for pers in persons   %}
                      <div {% if relation != 'out' %} itemprop="{{ relation }}" itemscope itemtype="{{ relation == 'productionCompany' ? 'http://schema.org/Organization' : 'http://schema.org/Person' }}"{% endif %} data-id="{{ pers.id }}">
                        <span {% if relation != 'out' %}itemprop="url"{% endif %} class="fav fav-person" data-name="{{ pers.name }}" data-placement="right"><span {% if relation != 'out' %}itemprop="name"{% endif %}>{{ pers.name }}</span></span> 
                      </div>
                    {% endfor %}
                    {% endfor %}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="synopsis-container">
        <p itemprop="description">{{ film.description|raw }}</p>
    </div>
</article>

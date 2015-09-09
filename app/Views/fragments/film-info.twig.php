<article itemscope itemtype="http://schema.org/Movie" itemref="more-info" class="col-lg-8 col-md-7">
    <div class="player-container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                <div id="player" itemprop="video" itemprop="trailer" itemscope itemtype="http://schema.org/VideoObject">
                    <meta itemprop="duration" content="T1M33S">
                    <meta itemprop="thumbnail" content="">
                    <meta itemprop="playerType" content="Flash">
                    <meta itemprop="url" content="">
                    <meta itemprop="name" content="{{ film.title }}">
                    <meta itemprop="isFamilyFriendly" content="true">
                    <meta itemprop="description" content="{{ film.description }}">
                    <i class="fa fa-play"></i>
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
                    <p itemprop="duration" content="PT119M"><strong>Durée:</strong> {{ film.duration }}</p>
                    <p itemprop="genre"><strong>Genre:</strong> {{ film.format.name }}</p>
                    <p><strong>Nationalité:</strong> <?php print $film["country"]; ?></p>
                </div>
                <div class="film-info-wrapper">
                    <p itemprop="director"><strong>Réalisateur:</strong> <?php print $film["realisator"]; ?></p>
                </div>
                <div class="film-info-wrapper">
                    <p itemprop="actors"><strong>Avec:</strong> <?php print $film["with"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="synopsis-container">
        <p itemprop="description">{{ film.description }}</p>
    </div>
</article>

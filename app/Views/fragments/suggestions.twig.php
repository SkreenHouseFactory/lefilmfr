<div class="recommendations">
    <div class="container-fluid ">
        <div class="row">
          {% for r,k in related %}
            <div class="col-lg-5">
              <div class="clear"></div>
              <h2>{{ r.name }}</h2>
            {% for p in r.programs %}
              <div>
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
            {% endfor %}>
              </div>
           </div>
          {% endfor %}
            {#<div class="col-lg-5">
                <div class="clear"></div>
                <h2>Divergente, toute la saga !</h2>
                <div class="film films-form-right">
                    <div class="first">
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/divergente.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Divergente</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h19</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/divergente2.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Divergente 2</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2015</span>
                                    <span>1h59</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col-lg-5">
                <div class="clear"></div>
                <h2>Prochainement dans les salles</h2>
                <div class="film films-form-left">
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/amy.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Amy</h2>
                                <p>
                                    <span>Documentaire</span>
                                    <span>2015</span>
                                    <span>2h07</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/insidious3.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Insidious 3</h2>
                                <p>
                                    <span>Horreur</span>
                                    <span>2015</span>
                                    <span>1h38</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/minions.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Minions</h2>
                                <p>
                                    <span>Animation</span>
                                    <span>2015</span>
                                    <span>1h31</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/magicmike.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Magic Mike XXL</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2015</span>
                                    <span>1h55</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="clear"></div>
                <h3>Les sorties de la semaine</h3>
                <div class="slider">
                    <div class="film films-form-right show">
                        <div class="first">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/lesprofs2.jpg');">
                                <div class="internShadow"></div>
                                <section class="film-infos">
                                    <h2>Les profs 2</h2>
                                    <p>
                                        <span>Comédie</span>
                                        <span>2015</span>
                                        <span>1h32</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div>
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/terminator.jpg');">
                                <div class="internShadow"></div>
                                <section class="film-infos">
                                    <h2>Terminator Genisys</h2>
                                    <p>
                                        <span>Action</span>
                                        <span>2015</span>
                                        <span>2h06</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="last">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/taleoftales.jpg');">
                                <div class="internShadow"></div>
                                <section class="film-infos">
                                    <h2>Tale of Tales</h2>
                                    <p>
                                        <span>Fantastique</span>
                                        <span>2015</span>
                                        <span>2h13</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="film films-form-right hide">
                        <div class="first">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/lesprofs2.jpg');"><div class="internShadow"></div></div>
                        </div>
                        <div>
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/terminator.jpg');"><div class="internShadow"></div></div>
                        </div>
                        <div class="last">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/taleoftales.jpg');"><div class="internShadow"></div></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="actions">
                    <a href="" class="see-more">En voir plus ...</a>

                    <div class="controls">
                        <a href="javascript:prev();"><i class="fa fa-arrow-circle-left"></i></a>
                        <ul>
                            <li><a href="javascript:changeThumb(0);" class="active"><i class="fa fa-circle"></i></i></a></li>
                            <li><a href="javascript:changeThumb(1);"><i class="fa fa-circle"></i></a></li>
                        </ul>
                        <a href="javascript:next();"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="clear"></div>
                <h3>Avec les mêmes acteurs</h3>

                <div class="film films-form-left">
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/amy.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Amy</h2>
                                <p>
                                    <span>Documentaire</span>
                                    <span>2015</span>
                                    <span>2h07</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/insidious3.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Insidious 3</h2>
                                <p>
                                    <span>Horreur</span>
                                    <span>2015</span>
                                    <span>1h38</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/horsdutemps.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Hors du Temps</h2>
                                <p>
                                    <span>Romance</span>
                                    <span>2009</span>
                                    <span>1h50</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/magicmike.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Magic Mike XXL</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2015</span>
                                    <span>1h55</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/holiday.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>The Holiday</h2>
                                <p>
                                    <span>Romance</span>
                                    <span>2006</span>
                                    <span>2h11</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/tattoo.jpg');">
                            <div class="internShadow"></div>

                                <section class="film-infos">
                                    <h2>Tattoo</h2>
                                    <p>
                                        <span>...</span>
                                        <span>2002</span>
                                        <span>1h50</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="actions">

                    <div class="controls">
                        <a href="javascript:prev();"><i class="fa fa-arrow-circle-left"></i></a>
                        <ul>
                            <li><a href="javascript:changeThumb(0);" class="active"><i class="fa fa-circle"></i></i></a></li>
                            <li><a href="javascript:changeThumb(1);"><i class="fa fa-circle"></i></a></li>
                        </ul>
                        <a href="javascript:next();"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="clear"></div>
                <h3>Vous aimez ce réalisateur ? Vous aimerez aussi :</h3>
                <div class="slider">
                    <div class="film films-form-right show">
                        <div class="first">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/flightplan.jpg');">
                                <div class="internShadow"></div>

                                <section class="film-infos">
                                    <h2>Flight Plan</h2>
                                    <p>
                                        <span>Thriller</span>
                                        <span>2005</span>
                                        <span>1h38</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div>
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/tattoo.jpg');">
                                <div class="internShadow"></div>

                                <section class="film-infos">
                                    <h2>Tattoo</h2>
                                    <p>
                                        <span>...</span>
                                        <span>2002</span>
                                        <span>1h50</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="last">
                            <div class="film-wrapper image" style="background-image:url('/images/dummy/horsdutemps.jpg');">
                                <div class="internShadow"></div>
                                <section class="film-infos">
                                    <h2>Hors du Temps</h2>
                                    <p>
                                        <span>Romance</span>
                                        <span>2009</span>
                                        <span>1h50</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="clear"></div>
                <h3>On parie que vous aimez aussi</h3>
                <div class="film films-form-left">
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/hamlet.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Hamlet</h2>
                                <p>
                                    <span>Drame</span>
                                    <span>1997</span>
                                    <span>4h02</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/3royaumes.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Les trois royaumes</h2>
                                <p>
                                    <span>Action</span>
                                    <span>2009</span>
                                    <span>2h25</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/holiday.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>The Holiday</h2>
                                <p>
                                    <span>Romance</span>
                                    <span>2006</span>
                                    <span>2h11</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/holdup.jpg');">
                            <div class="internShadow"></div>

                            <section class="film-infos">
                                <h2>Hold Up</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2015</span>
                                    <span>1h50</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/divergente.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Divergente</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h19</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div>
                        <div class="film-wrapper image" style="background-image:url('/images/dummy/magicmike.jpg');">
                            <div class="internShadow"></div>
                            <section class="film-infos">
                                <h2>Magic Mike XXL</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2015</span>
                                    <span>1h55</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            #}
        </div>
    </div>
</div>

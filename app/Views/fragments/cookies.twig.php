<div id="cookies-container" style="display:none;">
    <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies</p>
    <div>
        <button class="c-close">Fermer</button>
        {#<button class="c-more">En savoir plus</button>#}
    </div>
</div>
<script type="text/javascript">
if (!Cookies.get('cookie')) {
  $("#cookies-container").slideDown()
}
$("#cookies-container").on("click", function() { 
  Cookies.set('cookie', 'hide', { expires: 30 });
  $(this).hide() 
});
</script>

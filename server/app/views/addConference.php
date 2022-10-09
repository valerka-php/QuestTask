<div class="block">
    <div class="add-form">
        <form action="/conference/save" method="post">
            <input class="form-control" name="title" placeholder="title" required minlength="2" maxlength="255">
            <input class="form-control" name="date" type="datetime-local" placeholder="select your date">
            <select class="form-select form-select-lg mb-3" id="countries" name="country">Choose your Country:</select>
            <input type="hidden" name="lat" id="lat" >
            <input type="hidden" name="lng" id="lng" >
            <div class="footer-form">
                <a class="btn btn-outline-dark" href="/"> back </a>
                <button class="btn btn-outline-success" type="submit" > save </button>
            </div>
        </form>
    </div>
    <div id="map"> </div>
</div>


<script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgUPnpJCLbzeLYdAfIhvnlvlABgNPztPk&callback=initMap">
</script>
<script src="../js/map.js"></script>
<script src="../js/countries.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script> flatpickr("input[type=datetime-local]", {}) </script>

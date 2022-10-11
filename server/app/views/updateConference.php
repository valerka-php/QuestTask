<div class="block">
    <div class="add-form">
        <form action="/conference/saveUpdated" method="post">
            <?php foreach ($data as $item): ?>
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <input
                        class="form-control"
                        name="title"
                        placeholder="title"
                        required
                        minlength="2"
                        maxlength="255"
                        value="<?= $item['title'] ?>"
                >
                <div class="select">
                    <input
                            class="form-control"
                            name="date"
                            type="datetime-local"
                            placeholder="<?= $item['date'] ?>"
                            value="<?= $item['date'] . 'T00:00' ?>"
                    >
                    <select class="form-select form-select-lg mb-3" id="countries" name="country">Choose your Country:
                        <option selected="selected" value="<?= $item['country'] ?> "> <?= $item['country'] ?>  </option>
                    </select>
                </div>
                <div class="input-group mb-3 address">
                    <input class="form-control" name="lat" id="lat" placeholder="latitude" value="<?= $item['lat'] ?>">
                    <input class="form-control" name="lng" id="lng" placeholder="longitude" value="<?= $item['lng'] ?>">
                </div>
                <div class="footer-form">
                    <a class="btn btn-outline-dark" href="/"> back </a>
                    <a class="btn btn-outline-danger" onclick="deleteConfirm()"> delete </a>
                    <button class="btn btn-outline-success" type="submit"> save</button>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
    <div id="map"></div>
</div>


<script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgUPnpJCLbzeLYdAfIhvnlvlABgNPztPk&callback=initMap">
</script>
<script src="../js/updateMap.js"></script>
<script src="../js/countries.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script> flatpickr("input[type=datetime-local]", {}) </script>
<script>
    function deleteConfirm() {
        if (confirm("Do you want delete it ?")) document.location = '/conference/delete?id=<?= $item['id'] ?>';
    }
</script>

<div class="conference">
    <div class="body-conference">
        <?php foreach ($data as $item): ?>
            <label>Title</label>
            <textarea class="element-p area" disabled> <?= $item['title'] ?> </textarea>
            <label>Date</label>
            <div class="element-p"> <?= $item['date'] ?> </div>
            <label>Country</label>
            <div class="element-p"> <?= $item['country'] ?></div>
        <?php endforeach; ?>
    </div>
    <div class="map">
        <?php
        if (!empty($item['lat'] && !empty($item['lng']))): ?>
            <div id="map">

            </div>
        <?php endif; ?>
    </div>
    <div class="footer-conference">
        <a href="/" class="btn btn-outline-dark"> back </a>
        <a onclick="deleteConfirm()" class="btn btn-outline-danger"> delete </a>
    </div>
</div>

<script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgUPnpJCLbzeLYdAfIhvnlvlABgNPztPk&callback=initMap">
</script>
<script>
    function initMap() {
        const uluru = {lat: <?php echo $item['lat'] ?>, lng: <?php echo $item['lng'] ?> };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
            center: uluru,
            mapId: "4504f8b37365c3d0",
        });
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }

    window.initMap = initMap;

</script>
<script>
    function deleteConfirm() {
        if (confirm("Do you want delete it ?")) document.location = '/conference/delete?id=<?= $item['id'] ?>';
    }
</script>
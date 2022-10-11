function getConferences() {
    fetch('/api/conferences')
        .then((response) => response.json())
        .then((data) => {
            for (let key in data) {
                let list = document.getElementById('conferences');
                list.innerHTML += ` 
                <div class="conf-list">
                    <div class="title" id="${data[key].id}">${data[key].title}</div>
                    <div class="date"> ${data[key].date} </div>
                    <div class="nav">
                        <a class="open-conference btn btn-outline-primary" href="/conference/show?id=${data[key].id}"> open </a>
                        <a class="open-conference btn btn-outline-warning" href="/conference/update?id=${data[key].id}"> update </a>
                        <a class="btn btn-outline-danger" id="${data[key].id}"> delete </a>
                    </div>
                </div>`
            }

            const conferences = document.querySelectorAll('.btn-outline-danger');
            conferences.forEach((element) => {
                element.onclick =  function() { deleteConfirm(element.id) };
            })
        });
}

function deleteConfirm(id) {
    if (confirm("Do you want delete it ?")) document.location = `/conference/delete?id=${id}`;
}

getConferences();
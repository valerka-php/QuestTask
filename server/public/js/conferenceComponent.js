export function getConferences() {
    fetch('/api/conferences')
        .then((response) => response.json())
        .then((data) => {
            for (let key in data) {
                let list = document.getElementById('conferences');
                list.innerHTML += ` 
                <div class="conf-list">
                    <div class="title" id="${data[key].id}">${data[key].title}</div>
                    <div class="date"> ${data[key].date} </div>
                    <a href="/conference/show?id=${data[key].id}"> open </a>
                    <button id="delete-${data[key].id}" class="btn btn-outline-danger"> X </button>
                </div>`
            }
        });
}


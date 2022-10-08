import {getConferences} from "./conference.js";

getConferences().then((data) => {
    for (let key in data) {
        let list = document.getElementById('conferences');
        list.innerHTML += ` 
            <div class="conf-list">
                <div class="title" id="${data[key].id}">${data[key].title}</div>
                <div class="date"> ${data[key].date} </div>
                <div class="delete"> X </div>
            </div>`
    }
})

function open(id){

}
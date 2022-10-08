export async function getConferences(){
        let response = await fetch('/api/conferences');
        return await response.json();
}


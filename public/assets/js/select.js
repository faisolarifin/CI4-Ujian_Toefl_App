document.getElementById("select").onchange = function() {
    val = this.value;
    if (val == 1 || val == 2) {
        document.getElementById('formTopik').style.display = 'block';
        fetch(`http://localhost:8080/topikby/${ val }`, {
            method: "get",
            headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest"
            }
        }).then(response => {
            console.log(response.status);
            return response.json();
        }).then(data =>  {
            options = "";
            for (var i = 0; i < data.length; i++) {
                options += `<option value="${ data[i].id_topik }"> ${ data[i].nm_topik } </option>`;
            }
            document.getElementById('topik').innerHTML = options;
        }).catch(err => {
            console.log('Fetch Error :-S', err); // deal with error
        });
    } else {
        document.getElementById('formTopik').style.display = 'none';
    }
}
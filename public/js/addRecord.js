
document.addEventListener('click', function(e){
    if(e.target.classList.contains('btn_add_new_record')){
        let newRecord = document.querySelector('#add_new_record_form');
        let id = document.querySelector('#student_id').value;

        fetch('/record/add', {
            method: "POST",
            credentials: "same-origin",
            body: new FormData(newRecord)
        })
            .then(function(response){
                return response.text();
            })
                .then(function(data_from_fetched_page){
                    window.location.replace(`/records/${id}`);
                })
    }
})
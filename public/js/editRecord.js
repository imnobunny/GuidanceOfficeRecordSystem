document.addEventListener('click', function(e){
    if(e.target.classList.contains('btn_update_record')){
        let updated_record = document.querySelector('#edit_record_form');
        let id = document.querySelector('#record_id').value;

        fetch(`/record/update/${id}`, {
            method: "POST",
            credentials: "same-origin",
            body: new FormData(updated_record)
        })
            .then(function(response){
                return response.text();
            })
                .then(function(data_from_fetched_page){
                    window.location.replace(`/record/view/${id}`);
                })
    }
})
// document.addEventListener('click', function(e){
//     if(e.target.classList.contains('btn-update-student-info')){
//         let id = document.querySelector('#student_id');
//         let student_id = id.value; 
//         let form_edit_student_record = document.querySelector('#edit_student_form');

//        fetch(`/update/student/${student_id}`, {
//            method: "POST",
//            credentials: "same-origin",
//            body: new FormData(form_edit_student_record)
//        })
//         .then(function(response){
//             return response.text();
//         })
//          .then(function(data_from_fetched_page){
//              window.location.replace(`/view/student/${student_id}`);
//          })
//     }
// })
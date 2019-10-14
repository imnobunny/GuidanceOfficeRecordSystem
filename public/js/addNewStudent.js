// document.addEventListener('click', function(e){
//     if(e.target.classList.contains('btn_save_new_student')){
//         let form_add_new_student = document.querySelector("#add_new_student_form");
        
//        fetch(`/save/student`, {
//            method: "POST",
//            credentials: "same-origin",
//            body: new FormData(form_add_new_student)
//        })
//         .then(function(response){
//             return response.text();
//         }).then(function(data_from_fetch_page){
//             window.location.replace(`/home`);
//         })
//     }
// })
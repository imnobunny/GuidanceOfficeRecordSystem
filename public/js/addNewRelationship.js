// document.addEventListener('click', function(e){
//     if(e.target.classList.contains('btn-add-new-relationship')){
//         let newRelationship_form = document.querySelector('#add_new_relationship_form');
//         //console.log(newRelationship_form);

//         fetch(`/admin/relationship`, {
//             method: "POST",
//             credentials: "same-origin",
//             body: new FormData(newRelationship_form)
//         })
//             .then(function(response){
//                 return response.text();
//             }).then(function(data_from_fetched_page){
//                 window.location.replace(`/admin`);
//             })
//     }
// })
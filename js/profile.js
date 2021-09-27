

const editBtn = document.getElementById('edit_option');
const userInfoTable = document.getElementById('user_info_container');
const editForm = document.getElementById('edit_form');
const cancelEditBtn = document.getElementById('cancel_edit_btn');

editBtn.onclick = function(){
 
    userInfoTable.classList.toggle('edit_mode');
    editForm.classList.toggle('edit_mode');
}

cancelEditBtn.onclick = function(){
 
    userInfoTable.classList.toggle('edit_mode');
    editForm.classList.toggle('edit_mode');
}

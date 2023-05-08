let deleteItemID = 0;
let currentModal = "";

function openItem(item){
  item.classList.add('modal-show');
  item.classList.remove('modal-hide');
}
function closeItem(item){
  item.classList.add('modal-hide');
  item.classList.remove('modal-show');
}

function openModal(item, ID){
  let modal = document.querySelector(`.${item}-modal`);
  deleteItemID = ID;
  currentModal = modal;
  openItem(modal);
  

}
function closeModal(item){
  let modal = document.querySelector(`.${item}-modal`);
  closeItem(modal);
}

function deleteItem(){
  closeItem(currentModal);
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              // Item deleted successfully, update the table
              window.location.reload();
          } else {
              // Handle error
              console.error(xhr.responseText);
          }
      }
  };
  // Replace 'delete_item.php' with the PHP script that handles the deletion
  xhr.open("POST", "controllers/delete-item.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id=" + deleteItemID)
}

let deleteBtn = document.getElementById("remove");
deleteBtn.addEventListener("click", deleteItem);
let deleteItemID = 0;
let currentModal = "";

function openItem(item){
  item.classList.add('modal-show');

}
function closeItem(item){
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

  fetch(
    '/delete', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'id=' + deleteItemID
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          // Item deleted successfully, update the table or show a success message
          window.location.reload();
      } else {
          // Handle error or show an error message
          console.error(data.message);
  }
})
.catch(error => {
    console.error(error);
});
}

let deleteBtn = document.getElementById("delete");
deleteBtn.addEventListener("click", deleteItem);

const updateButtons = document.querySelectorAll('#update');

updateButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    const row = button.closest('tr');

    const id = row.querySelector('#id-cell').innerText;
    const first = row.querySelector('#first-cell').innerText;
    const last = row.querySelector('#last-cell').innerText;
    const age = row.querySelector('#age-cell').innerText;
    const grade = row.querySelector('#grade-cell').innerText;
    const section = row.querySelector('#section-cell').innerText;

    document.getElementById('update_id').value = id;
    document.getElementById('firstname').value = first;
    document.getElementById('lastname').value = last;
    document.getElementById('age').value = age;
    document.getElementById('grade').value = grade;
    document.getElementById('section').value = section;

  });
});




let deleteItemID = 0;

function sendID(ID){
  deleteItemID = ID;
}

let modal_add = document.querySelector('#acc-add');
let modal_update = document.querySelector('#acc-upt');
let modal_delete = document.querySelector('#acc-del');

let addOpen = document.querySelector('.add-open');
let addClose = document.querySelector('.add-close');

let updateClose = document.querySelector('.update-close');
let removeClose = document.querySelector('.remove-close');

const removeButtons = document.querySelectorAll('#remove');


addOpen.addEventListener( 'click',()=>{
  modal_add.showModal();
} );


addClose.addEventListener("click", () => {
  modal_add.setAttribute("closing", "");

  modal_add.addEventListener(
    "animationend",
    () => {
      modal_add.removeAttribute("closing");
      modal_add.close();
    },
    { once: true }
  );
});


updateClose.addEventListener("click", () => {
  modal_update.setAttribute("closing", "");

  modal_update.addEventListener(
    "animationend",
    () => {
      modal_update.removeAttribute("closing");
      modal_update.close();
    },
    { once: true }
  );
});


removeButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    const row = button.closest('tr'); 
    const id = row.querySelector('#id-cell').innerText;
    modal_delete.showModal();
  })
});


removeClose.addEventListener("click", () => {
  modal_delete.setAttribute("closing", "");

  modal_delete.addEventListener(
    "animationend",
    () => {
      modal_delete.removeAttribute("closing");
      modal_delete.close();
    },
    { once: true }
  );
});

function deleteItem(){
  
  
  removeClose.addEventListener("click", () => {
    modal_delete.setAttribute("closing", "");

    modal_delete.addEventListener(
      "animationend",
      () => {
        modal_delete.removeAttribute("closing");
        modal_delete.close();
      },
      { once: true }
    );
  });

  
}

let deleteBtn = document.getElementById("delete");
deleteBtn.addEventListener("click", deleteItem);


const updateButtons = document.querySelectorAll('#update');

updateButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    const row = button.closest('tr');
    modal_update.showModal();
    const id = row.querySelector('#id-cell').innerText;

  });
});






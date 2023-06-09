let deleteItemID = 0;

function sendID(ID){
  deleteItemID = ID;
}

//modals
let modal6 = document.querySelector('#modal6'); //add
let modal7 = document.querySelector('#modal7'); // update
let modal8 = document.querySelector('#modal8'); // remove
let view = document.querySelector('#view-modal'); // view

const viewButtons = document.querySelectorAll('#view'); //getes all view btn
let viewClose = document.querySelector('.view-close');

//OPENS REMOVE MODAL
viewButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    view.showModal();
  })
});

//CLOSE REMOVE MODAL
viewClose.addEventListener("click", () => {
  view.setAttribute("closing", "");

  view.addEventListener(
    "animationend",
    () => {
      view.removeAttribute("closing");
      view.close();
    },
    { once: true }
  );
});


let addOpen = document.querySelector('.add-open'); // open buttons for add
let addClose = document.querySelector('.add-close'); // close buttons

//opens ADD MODAL
addOpen.addEventListener( 'click',()=>{
  modal6.showModal();
} );

//closes ADD MODAL
addClose.addEventListener("click", () => {
  modal6.setAttribute("closing", "");

  modal6.addEventListener(
    "animationend",
    () => {
      modal6.removeAttribute("closing");
      modal6.close();
    },
    { once: true }
  );
});

const removeButtons = document.querySelectorAll('#remove'); //gets all button from remove
let removeClose = document.querySelector('.remove-close');

//OPENS REMOVE MODAL
removeButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    modal8.showModal();
  })
});

//CLOSE REMOVE MODAL
removeClose.addEventListener("click", () => {
  modal8.setAttribute("closing", "");

  modal8.addEventListener(
    "animationend",
    () => {
      modal8.removeAttribute("closing");
      modal8.close();
    },
    { once: true }
  );
});

let deleteBtn = document.getElementById("delete3");

// script for deleting item
function deleteItem(){
  
  removeClose.addEventListener("click", () => {
    modal8.setAttribute("closing", "");

    modal8.addEventListener(
      "animationend",
      () => {
        modal8.removeAttribute("closing");
        modal8.close();
      },
      { once: true }
    );
  });

  fetch(
    '/delete3', {
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

deleteBtn.addEventListener("click", deleteItem);

//script for opening update modal and sending data from table
// to modal
const updateButtons = document.querySelectorAll('#update');
let updateClose = document.querySelector('.update-close');

updateButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    const row = button.closest('tr');
    modal7.showModal();
    // const id = row.querySelector('#id-cell').innerText;
    // const date = row.querySelector('#date-cell').innerText;
    // const off = row.querySelector('#off-cell').innerText;
    // const com = row.querySelector('#com-cell').innerText;
    // const res = row.querySelector('#res-cell').innerText;
    // const def = row.querySelector('#def-cell').innerText;
    // const action = row.querySelector('#action-cell').innerText;
    // const status = row.querySelector('#status-cell').innerText;
    // const dateRes = row.querySelector('#dateRes-cell').innerText;

    // document.getElementById('update_id').value = id;
    // document.getElementById('date').value = date;
    // document.getElementById('off').value = off;
    // document.getElementById('com').value = com;
    // document.getElementById('res').value = res;
    // document.getElementById('def').value = def;
    // document.getElementById('action').value = action;
    // document.getElementById('status').value = status;
    // document.getElementById('dateRes').value = dateRes;

  });
});

//closes Update MODAL
updateClose.addEventListener("click", () => {
  modal7.setAttribute("closing", "");

  modal7.addEventListener(
    "animationend",
    () => {
      modal7.removeAttribute("closing");
      modal7.close();
    },
    { once: true }
  );
});





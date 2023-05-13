let deleteItemID = 0;

function sendID(ID){
  deleteItemID = ID;
}

let modal3 = document.querySelector('#modal3');
let modal4 = document.querySelector('#modal4');
let modal5 = document.querySelector('#modal5');

let addOpen = document.querySelector('.add-open');
let addClose = document.querySelector('.add-close');

let updateClose = document.querySelector('.update-close');
let removeClose = document.querySelector('.remove-close');

const removeButtons = document.querySelectorAll('#remove');


addOpen.addEventListener( 'click',()=>{
  modal3.showModal();
} );


addClose.addEventListener("click", () => {
  modal3.setAttribute("closing", "");

  modal3.addEventListener(
    "animationend",
    () => {
      modal3.removeAttribute("closing");
      modal3.close();
    },
    { once: true }
  );
});


updateClose.addEventListener("click", () => {
  modal4.setAttribute("closing", "");

  modal4.addEventListener(
    "animationend",
    () => {
      modal4.removeAttribute("closing");
      modal4.close();
    },
    { once: true }
  );
});


removeButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    modal5.showModal();
  })
});


removeClose.addEventListener("click", () => {
  modal5.setAttribute("closing", "");

  modal5.addEventListener(
    "animationend",
    () => {
      modal5.removeAttribute("closing");
      modal5.close();
    },
    { once: true }
  );
});

function deleteItem(){
  
  
  removeClose.addEventListener("click", () => {
    modal5.setAttribute("closing", "");

    modal5.addEventListener(
      "animationend",
      () => {
        modal5.removeAttribute("closing");
        modal5.close();
      },
      { once: true }
    );
  });

  fetch(
    '/delete2', {
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

let deleteBtn = document.getElementById("delete2");
deleteBtn.addEventListener("click", deleteItem);


const updateButtons = document.querySelectorAll('#update');

updateButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    const row = button.closest('tr');
    modal4.showModal();
    const id = row.querySelector('#id-cell').innerText;
    const date = row.querySelector('#date-cell').innerText;
    const off = row.querySelector('#off-cell').innerText;
    const com = row.querySelector('#com-cell').innerText;
    const res = row.querySelector('#res-cell').innerText;
    const def = row.querySelector('#def-cell').innerText;
    const action = row.querySelector('#action-cell').innerText;
    const status = row.querySelector('#status-cell').innerText;
    const dateRes = row.querySelector('#dateRes-cell').innerText;

    document.getElementById('update_id').value = id;
    document.getElementById('date').value = date;
    document.getElementById('off').value = off;
    document.getElementById('com').value = com;
    document.getElementById('res').value = res;
    document.getElementById('def').value = def;
    document.getElementById('action').value = action;
    document.getElementById('status').value = status;
    document.getElementById('dateRes').value = dateRes;

  });
});






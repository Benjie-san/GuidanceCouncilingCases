let deleteItemID = 0;

function sendID(ID){
  deleteItemID = ID;
}

let modal = document.querySelector('#modal');
let modal1 = document.querySelector('#modal1');
let modal2 = document.querySelector('#modal2');

let addOpen = document.querySelector('.add-open');
let updateOpen = document.querySelector('.update-open');
let removeOpen = document.querySelector('.remove-open');

let addClose = document.querySelector('.add-close');
let updateClose = document.querySelector('.update-close');
let removeClose = document.querySelector('.remove-close');
const removeButtons = document.querySelectorAll('#remove');


addOpen.addEventListener( 'click',()=>{
  modal.showModal();
} );


removeButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    modal2.showModal();
  })
});

addClose.addEventListener("click", () => {
  modal.setAttribute("closing", "");

  modal.addEventListener(
    "animationend",
    () => {
      modal.removeAttribute("closing");
      modal.close();
    },
    { once: true }
  );
});


updateClose.addEventListener("click", () => {
  modal1.setAttribute("closing", "");

  modal1.addEventListener(
    "animationend",
    () => {
      modal1.removeAttribute("closing");
      modal1.close();
    },
    { once: true }
  );
});


removeClose.addEventListener("click", () => {
  modal2.setAttribute("closing", "");

  modal2.addEventListener(
    "animationend",
    () => {
      modal2.removeAttribute("closing");
      modal2.close();
    },
    { once: true }
  );
});

function deleteItem(){
  
  
  removeClose.addEventListener("click", () => {
    modal2.setAttribute("closing", "");

    modal2.addEventListener(
      "animationend",
      () => {
        modal2.removeAttribute("closing");
        modal2.close();
      },
      { once: true }
    );
  });

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
    modal1.showModal();
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






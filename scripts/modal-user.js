let view = document.querySelector('#view-modal'); // view
let viewButtons = document.querySelectorAll('#view');
let viewClose = document.querySelector('.view-close');

viewButtons.forEach( (button) => {
  button.addEventListener('click', ()=>{
    view.showModal();
    // const row = button.closest('tr');
    // const id = row.querySelector('#id-cell').innerText;
    // console.log(id);
    // $.ajax({
    //   url: '/get-data',
    //   type: 'POST',
    //   data: { id: id },
    //   success: function(response) {
    //     // Process the response and update the modal with the retrieved data
    //     $('#modal-body').html(response);

    //     view.showModal();
    //   },
    //   error: function(xhr, status, error) {
    //     console.log(error);
    //   }
    // });
    
  });
});

//CLOSE VIEW MODAL
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

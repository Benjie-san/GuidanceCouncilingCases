<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/modal-style.css">

<!-- ADD MODAL -->
<dialog id="acc-add" class="modal add-modal">
      
      <div class="modal-content">
        <div class="header modal-header">
          <span class="add-close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>Add User</h1>
          <span></span>
        </div>
        
        <form class="modal-form" method="POST" >
          <input type="text" name="USERNAME" id="" placeholder="USERNAME" required>
          <input type="text" name="EMAIL" id="" placeholder="EMAIL" required>
          <input type="number" name="NUMBER" id="" placeholder="NUMBER" required>
          <input type="text" name="PASSWORD" id="" placeholder="PASSWORD" required>
          <input type="text" name="ROLE" id="" placeholder="ROLE" required>


          <input class="btn" type="submit" name="submit" value="Add">
        </form>
      </div>
</dialog>

  <!-- UPDATE MODAL -->
<dialog id="acc-upt" class="modal update-modal">
  <div class="modal-content">
    <div class="header modal-header">
      <span class="update-close"><i class="arrow bi bi-arrow-left-short"></i></span>
      <h1>Update Information</h1>
      <span></span>
    </div>
    
    <form class="modal-form" method="POST" >
      <input type="hidden"  id="update_id" name="ID"/>

      <input type="text" name="USERNAME" id="firstname" placeholder="USERNAME" required>
      <input type="text" name="EMAIL" id="lastname" placeholder="EMAIL" required>
      <input type="number" name="NUMBER" id="age" placeholder="NUMBER" required>
      <input type="text" name="PASSWORD" id="grade" placeholder="PASSWORD" required>
      <input type="text" name="ROLE" id="section" placeholder="ROLE" required>


      <input id="update-item" class="btn" type="submit" name="submit" value="Update">
    </form>
  </div>
</dialog>

  <!-- REMOVE MODAL -->
<dialog id="acc-del" class="modal remove-modal">
  <div class="modal-content remove">
    <h2>Are you sure you want to remove this item?</h2>

    <div class="">
      <button id='delete' class="btn">Yes</button>
      <button class="btn remove-close">No</button>
    </div>
  </div>
</dialog>
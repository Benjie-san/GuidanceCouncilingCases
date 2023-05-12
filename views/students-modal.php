<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/modal-style.css">

<!-- ADD MODAL -->
<dialog id="modal" class="modal add-modal">
      
      <div class="modal-content">
        <div class="header modal-header">
          <span class="add-close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>Add Students</h1>
          <span></span>
        </div>
        
        <form class="modal-form" method="POST" >
          <input type="text" name="FIRSTNAME" id="" placeholder="FIRSTNAME" required>
          <input type="text" name="LASTNAME" id="" placeholder="LASTNAME" required>
          <input type="number" name="AGE" id="" placeholder="AGE" required>
          <input type="number" name="GRADE" id="" placeholder="GRADE" required>
          <input type="text" name="SECTION" id="" placeholder="SECTION" required>

          <input class="btn" type="submit" name="submit" value="Add">
        </form>
      </div>
</dialog>

  <!-- UPDATE MODAL -->
<dialog id="modal1" class="modal update-modal">
  <div class="modal-content">
    <div class="header modal-header">
      <span class="update-close"><i class="arrow bi bi-arrow-left-short"></i></span>
      <h1>Update Information</h1>
      <span></span>
    </div>
    
    <form class="modal-form" method="POST" >
      <input type="hidden"  id="update_id" name="ID"/>

      <input type="text" name="FIRSTNAME" id="firstname" placeholder="FIRSTNAME" required>
      <input type="text" name="LASTNAME" id="lastname" placeholder="LASTNAME" required>
      <input type="number" name="AGE" id="age" placeholder="AGE" required>
      <input type="number" name="GRADE" id="grade" placeholder="GRADE" required>
      <input type="text" name="SECTION" id="section" placeholder="SECTION" required>

      <input id="update-item" class="btn" type="submit" name="submit" value="Update">
    </form>
  </div>
</dialog>

  <!-- REMOVE MODAL -->
<dialog id="modal2" class="modal remove-modal">
  <div class="modal-content remove">
    <h2>Are you sure you want to remove this item?</h2>

    <div class="">
      <button id='delete' class="btn">Yes</button>
      <button class="btn remove-close">No</button>
    </div>
  </div>
</dialog>
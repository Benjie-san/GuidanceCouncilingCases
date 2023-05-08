<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/modal-style.css">

<!-- ADD MODAL -->
<div id="" class="modal modal-hide add-modal">
      
      <div class="modal-content">
        <div class="header modal-header">
          <span onclick="closeModal('add')" class="close"><i class="arrow bi bi-arrow-left-short"></i></span>
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
  </div>

  <!-- UPDATE MODAL -->
  <div id="" class="modal modal-hide update-modal">
      <div class="modal-content">
        <div class="header modal-header">
          <span onclick="closeModal('update' )" class="close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>Update Information</h1>
          <span></span>
        </div>
        
        <form class="modal-form" method="POST" >
          <input type="text" name="FIRSTNAME" id="" placeholder="FIRSTNAME" required>
          <input type="text" name="LASTNAME" id="" placeholder="LASTNAME" required>
          <input type="number" name="AGE" id="" placeholder="AGE" required>
          <input type="number" name="GRADE" id="" placeholder="GRADE" required>
          <input type="text" name="SECTION" id="" placeholder="SECTION" required>

          <input class="btn" type="submit" name="submit" value="Update">
        </form>
      </div>
  </div>

  <!-- REMOVE MODAL -->
  <div id="removeModal" class="modal modal-hide remove-modal">
      <div class="modal-content remove">
        <h2>Are you sure you want to remove this item?</h2>
        <div class="">
          <button id='remove' class="btn">Yes</button>
          <button id='update' onclick="closeModal('remove')" class="btn">No</button>
        </div>
      </div>
  </div>
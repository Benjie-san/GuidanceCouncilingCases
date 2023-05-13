<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/modal-style.css">
<link rel="stylesheet" href="styles/nat-modal-style.css">


<!--VIEW MODAL -->
<dialog id="view-modal" class="modal add-modal">
      
      <div class="modal-content">
        <div class="header modal-header">
          <span class="view-close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>Add Cases</h1>
          <span></span>
        </div>
        
        <!-- DISPLAY DATA HERE -->
      
      </div>
</dialog>


<!-- ADD MODAL -->
<dialog id="modal6" class="modal add-modal">
      
      <div class="modal-content">
        <div class="header modal-header">
          <span class="add-close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>Add Cases</h1>
          <span></span>
        </div>
        
        <form class="modal-form" method="POST" >
          <div class="formContainer">
            <div class="form1">
              <input type="text" name="DATE_ISSUED" id="" placeholder="DATE ISSUED" required>
              <input type="text" name="OFFENSE" id="" placeholder="OFFENSE" required>
              <input type="text" name="COMPLAINANT_NAME" id="" placeholder="COMPLAINANT NAME" required>
              <input type="text" name="RESPONDENT_NAME" id="" placeholder="RESPONDENT NAME" required>
            </div>
            
            <div class="form2">
              <input type="text" name="DEFENDED_BY" id="" placeholder="DEFENDED BY" required>
              <input type="text" name="ACTION_TAKEN" id="" placeholder="ACTION TAKEN" required>
              <input type="text" name="CASE_STATUS" id="" placeholder="STATUS" required>
              <input type="text" name="DATE_RESOLVED" id="" placeholder="DATE RESOLVED" required>
            </div>
          </div>
          
        
          <input class="btn" type="submit" name="submit" value="Add">
        </form>
      </div>
</dialog>

  <!-- UPDATE MODAL -->
<dialog id="modal7" class="modal update-modal">
  <div class="modal-content">
    <div class="header modal-header">
      <span class="update-close"><i class="arrow bi bi-arrow-left-short"></i></span>
      <h1>Update Information</h1>
      <span></span>
    </div>
    
    <form class="modal-form" method="POST" >
      <input type="hidden"  id="update_id" name="ID"/>

     <form class="modal-form" method="POST" >
          <div class="formContainer">
            <div class="form1">
              <input type="text" name="DATE_ISSUED" id="date" placeholder="DATE ISSUED" required>
              <input type="text" name="OFFENSE" id="off" placeholder="OFFENSE" required>
              <input type="text" name="COMPLAINANT_NAME" id="com" placeholder="COMPLAINANT NAME" required>
              <input type="text" name="RESPONDENT_NAME" id="res" placeholder="RESPONDENT NAME" required>
            </div>
            
            <div class="form2">
              <input type="text" name="DEFENDED_BY" id="def" placeholder="DEFENDED BY" required>
              <input type="text" name="ACTION_TAKEN" id="action" placeholder="ACTION TAKEN" required>
              <input type="text" name="CASE_STATUS" id="status" placeholder="STATUS" required>
              <input type="text" name="DATE_RESOLVED" id="dateRes" placeholder="DATE RESOLVED" required>
            </div>
          </div>
          

      <input id="update-item" class="btn" type="submit" name="submit" value="Update">
    </form>
  </div>
</dialog>

  <!-- REMOVE MODAL -->
<dialog id="modal8" class="modal remove-modal">
  <div class="modal-content remove">
    <h2>Are you sure you want to remove this item?</h2>

    <div class="">
      <button id='delete2' class="btn" style="background: #ff4d4d">Yes</button>
      <button class="btn remove-close">No</button>
    </div>
  </div>
</dialog>
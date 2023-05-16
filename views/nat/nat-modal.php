<link rel="stylesheet" href="styles/global.css">
<link rel="stylesheet" href="styles/modal-style.css">
<link rel="stylesheet" href="styles/nat-modal-style.css">


<!--VIEW MODAL -->
<dialog id="view-modal" class="modal">
      
      <div class="modal-content" id="modal-content">
    
        <div class="modal-header">
          <span class="view-close"><i class="arrow bi bi-arrow-left-short"></i></span>
          <h1>NCAE</h1>
          <span></span>
        </div>
        
        <div id="modal-body">
            <!-- DISPLAY DATA HERE -->
        </div>

      </div>
</dialog>


<!-- ADD MODAL -->
<dialog id="modal6" class="modal add-modal">
      
  <div class="modal-content">
    <div class="header modal-header">
      <span class="add-close"><i class="arrow bi bi-arrow-left-short"></i></span>
      <h1>Add NCAE Data</h1>
      <span></span>
    </div>
    
    <form class="modal-form" method="POST" >
      <div class="formContainer">
        <div class="row1">
          <div class="form1">
            <h1>General Info</h1>
            <div class="sub-form">
              <input type="text" name="EXAMINEE_NO" id="" placeholder="EXAMINEE #" required>
              <input type="text" name="SURNAME" id="" placeholder="SURNAME" required>
              <input type="text" name="FIRSTNAME" id="" placeholder="FIRSTNAME" required>
              <input type="text" name="MI" id="" placeholder="MIDDLE INITIAL" required>
              <input type="text" name="GENDER" id="" placeholder="GENDER" required>
            </div>
            
            <div class="sub-form">
              <input type="text" name="BDAY" id="" placeholder="DATE OF BIRTH" required>
              <input type="text" name="LRN_NO" id="" placeholder="LRN #" required>
              <input type="text" name="EXAM_DATE" id="" placeholder="EXAM DATE" required>
              <input type="text" name="SCHOOL_ID" id="" placeholder="SCHOOL ID" required>
              <input type="text" name="HS" id="" placeholder="HIGHSCHOOL" required>
          </div>

          </div>
         
          <div class="form2">
          <h1>Average Percentile Rank</h1>
            <div class="sub-form">
              <input type="text" name="SA" id="" placeholder="SA" required>
              <input type="text" name="RC" id="" placeholder="RC" required>
              <input type="text" name="VA" id="" placeholder="VA" required>
              <input type="text" name="MA" id="" placeholder="MA" required>
              <input type="text" name="LRA" id="" placeholder="LRA" required>
            </div>
            <div class="sub-form">
              <input type="text" name="GSA" id="" placeholder="GSA" required>
              <input type="text" name="CA" id="" placeholder="CA" required>
              <input type="text" name="NVA" id="" placeholder="NVA" required>
              <input type="text" name="VMS" id="" placeholder="VMS" required>
              <input type="text" name="TVA" id="" placeholder="TVA" required>
            </div>
            <div class="sub-form">
              <input type="text" name="HUMMS" id="" placeholder="HUMMS" required>
              <input type="text" name="STEM" id="" placeholder="STEM" required>
              <input type="text" name="ABM" id="" placeholder="ABM" required>
              <input type="text" name="AcadT" id="" placeholder="AT" required>
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="form3">
          <h1>Average Percentile Scores</h1>
              <div class="sub-form">
                <input type="text" name="SCORE_A" id="" placeholder="A.SCIENCE" required>
                <input type="text" name="SCORE_B" id="" placeholder="B. NATURAL SCIENCE" required>
                <input type="text" name="SCORE_C" id="" placeholder="C. AGRICULTURE" required>
                <input type="text" name="SCORE_D" id="" placeholder="D. ENGINEERING" required>
                <input type="text" name="SCORE_E" id="" placeholder="E. BUSINESS" required>
              </div>
              <div class="sub-form">
                <input type="text" name="SCORE_F" id="" placeholder="F. PROFESSIONAL SERVICES" required>
                <input type="text" name="SCORE_G" id="" placeholder="G. PERSONAL SERVICES" required>
                <input type="text" name="SCORE_H" id="" placeholder="H. TECHNOLOGY" required>
                <input type="text" name="SCORE_I" id="" placeholder="I. MEDIA & COMM" required>
                <input type="text" name="SCORE_J" id="" placeholder="J. COMMUNITY SERVICES" required>
              </div>
              <div class="sub-form">
                <input type="text" name="SCORE_K" id="" placeholder="K. ARCHITECTURE" required>
                <input type="text" name="SCORE_L" id="" placeholder="L. THE ARTS" required>
                <input type="text" name="SCORE_M" id="" placeholder="M. FASHION" required>
                <input type="text" name="SCORE_N" id="" placeholder="N. MILITARY" required>
                <input type="text" name="SCORE_O" id="" placeholder="O. SPIRITUAL VOCATION" required>

              </div>
            </div>
            <input class="btn add-btn" type="submit" name="submit" value="Add">
        </div>

      </div>
          
        
      
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
    
    <form class="modal-form" id="update-form" method="POST" >
        <div class="update-body"></div>
    </form>
  </div>
</dialog>

  <!-- REMOVE MODAL -->
<dialog id="modal8" class="modal remove-modal">
  <div class="modal-content remove">
    <h2>Are you sure you want to remove this item?</h2>

    <div class="">
      <button id='delete3' class="btn" style="background: #ff4d4d">Yes</button>
      <button class="btn remove-close">No</button>
    </div>
  </div>
</dialog>
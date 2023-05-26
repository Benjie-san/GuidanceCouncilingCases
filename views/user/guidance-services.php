<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/admin-style.css">
  <link rel="stylesheet" href="styles/guidance-services-style.css">
  <script src="scripts/multiselect.js"></script>
</head>
  <body>
    <div class="container">
      <?php include_once 'components/nav.php' ?>
      <div class="main">
        <?php include_once 'components/topBar.php'?>
        <div class="header">
          <h2 class="title">Create Request</h2>
          <span></span>
        </div>
        <br>
        <br>

        <div class="request-form flex">
          <form method="POST" class="req_form flex">
          <div class="inputs-container flex">
            <div class="column1 flex">
              <h3>Date: <?php echo date("d/m/Y")?></h3>
              <div class="input-div flex">
                <h3>Case No.:</h3>
                <h2>01</h2>
              </div>
              <div class="select-container">
                <h3>Case Code: </h3>
                <select id="code" name="code" placeholder="Select" >
                <option disabled selected value>    Select Case Code    </option>
                <option value="001">000 - None</option>

                  <option value="001">001 - Cheating</option>
                  <option value="002">002 - Bullying</option>
                  <option value="003">003 - Tardiness</option>
                  <option value="004">004 - Insubordination</option>
                  <option value="004">005 - Possession of Illegal Drugs</option>
                  <option value="004">006 - Possession of Weapon</option>
                  </optgroup>

                </select>
              </div>  
              <div class="">
                <h3>Type of Guidance Service: </h3>
                <select id="type" name="type">
                <option disabled selected value>    Select Service    </option>
                  <option value="council">Counciling</option>
                  <option value="consult">Consultation</option>
                  <option value="visit">Visitation</option>
                  <option value="visit">Faculty Assistance</option>
                  <option value="visit">Barangay Assistance</option>

                </select>
              </div>  
              
            </div>
            <div class="column2 flex">
              <div>
              <h3>Recipient:</h3>
                <select id="participants" name="participants" multiple multiselect-search="true">
                
                  <optgroup label="Students">
                    <option value="">Student1</option>
                    <option value="">Student2</option>
                    <option value="">Student3</option>
                  </optgroup>
                  <optgroup label="Teacher">
                    <option value="">Teacher1</option>
                    <option value="">Teacher2</option>
                    <option value="">Teacher3</option>
                  </optgroup>
                  <optgroup label="Guidance Council">
                  <option value="">Councilor1</option>
                  <option value="">Councilor2</option>
                  <option value="">Councilor3</option>
                  </optgroup>
                </select>
              </div>
              <div>
                <h3>Remarks:</h3>
                <textarea id="remarks" name="remarks" rows="8"  placeholder="Add remarks here"></textarea>
              </div>            
            </div>
          </div>

            <input type="submit" value="Submit" class="btn">
            
          </form>
        </div>

      </div>
    </div>

    <script type="text/javascript" src="scripts/nav-script.js">

    </script>
  </body>
</html>
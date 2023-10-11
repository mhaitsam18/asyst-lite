<!-- Main -->
<main class="main-container">
<div class="container2" id="blur">
    <div class="main-title">
        <p class="font-weight-bold">KNOWLEDGE MANAGEMENT</p>
    </div>

	<form action="#" >
		<div class="add">
			<input href="#" onclick="toggle()" type="submit" value="Add New">
		</div> 
	</form>

    <div class="input-group">
        <div id="search-autocomplete" class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div class="box_knowledge">
        <table width="100%">
            <thead>
                <tr>
                    <td>NAME</td>
                    <td>VERSION</td>
                    <td>DOCUMENT</td>
                    <td>TIMESTAMP</td>
                    <td>CREATED BY</td>
                    <td>NOTED</td>
                    <td>ACTION</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amelia Millati Azka</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h5>Business Integration</h5>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>

                    <td class="edit"><a href="<?= base_url('#') ?>" class="material-icons-outlined text-red">delete_outline</a>
                        <a href="<?= base_url('#') ?>" class="material-icons-outlined text-green">edit_note</a>
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amelia Millati Azka</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h5>Business Integration</h5>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>

                    <td class="edit"><a href="<?= base_url('#') ?>" class="material-icons-outlined text-red">delete_outline</a>
                        <a href="<?= base_url('#') ?>" class="material-icons-outlined text-green">edit_note</a>
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amelia Millati Azka</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h5>Business Integration</h5>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>

                    <td class="edit"><a href="<?= base_url('#') ?>" class="material-icons-outlined text-red">delete_outline</a>
                        <a href="<?= base_url('#') ?>" class="material-icons-outlined text-green">edit_note</a>
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amelia Millati Azka</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h5>Business Integration</h5>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>
                    <td class="role">
                        <p>-</p>
                    </td>

                    <td class="edit"><a href="<?= base_url('#') ?>" class="material-icons-outlined text-red">delete_outline</a>
                        <a href="<?= base_url('#') ?>" class="material-icons-outlined text-green">edit_note</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<form>
        <div id="popup">
        
          <div class="content">
            <form action="#">
              <div class="user-details">
                <div class="input-box">
                  <span class="details2">Add New Knowledge Management</span>
                  <!-- <hr opacity= "0.5" width= "103%" color ="#cccccc"> -->
                  <br>
                  <br>
                  <span class="details">Name</span>
                  <input type="dropdown" placeholder="Enter certificate" required>
                </div>
                <div class="input-box">
                  <span class="details">Version</span>
                  <input type="dropdown" placeholder="Enter type" required>
                </div>
                <div class="input-box">
                  <span class="details">Document</span>
                  <input type="link" placeholder="Input link document" required>
                </div>
                <div class="input-box">
                  <span class="details">Notes</span>
                  <input type="text" placeholder="" required>
                </div>
              <div class="button">
                <input href="#" onclick="toggle()" type="submit" value="Save">
              </div>
            </form>
          </div>
        </div>
      </form>
      </main>

      
      <script type="text/javascript">
        function toggle(){
          var blur = document.getElementById('blur');
          blur.classList.toggle('active')
          var popup = document.getElementById('popup');
          popup.classList.toggle('active')
        }
  
      </script>

<form>

</main>
<!-- End Main -->
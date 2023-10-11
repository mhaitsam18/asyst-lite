<!-- Main -->
<main class="main-container">
<div class="container2" id="blur">
    <div class="main-title">
        <p class="font-weight-bold">AMALA</p>
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

    <div class="box_inventorylist">
        <table width="100%">
            <thead>
                <tr>
                    <td>NAME</td>
                    <td>DESCRIPTION</td>
                    <td>USER</td>
                    <td>OS</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amala</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <p class="paragraf">- Loyalty Management System : untuk memberikan loyalty kepada pelanggan berupa poin dan dapat ditukarkan redemption tiket penerbangan dan dapat melihat member siapa saja yang telah mendapatkan poin tersebut.
                            - Mail Management : Untuk mengirimkan email atau informasi dari template yang sudah ada kepada user yang telah mendaftar Garuda Miles.
                            - Partner Portal : Untuk file management & voucher verification by partner</p>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>Active</p>
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
                        <h6>Business Integration</h6>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>Active</p>
                    </td>

            </tbody>

            <tbody>
                <tr>
                    <td class="people">
                        <div class="people-de">
                            <h5>Amelia Millati Azka</h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h6>Business Integration</h6>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>Active</p>
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
                        <h6>Business Integration</h6>
                        <!-- <p>Web dev</p> -->
                    </td>

                    <td class="active">
                        <p>Active</p>
                    </td>

                    <td class="role">
                        <p>Active</p>
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
                  <span class="details2">Add New Inventory</span>
                  <!-- <hr opacity= "0.5" width= "103%" color ="#cccccc"> -->
                  <br>
                  <br>
                  <span class="details">Name</span>
                  <input type="text" placeholder="Enter application" required>
                </div>
                <div class="input-box">
                  <span class="details">Description</span>
                  <input type="text" placeholder="Enter description" required>
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
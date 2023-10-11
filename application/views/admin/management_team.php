<!-- Main -->
<main class="main-container">
<div class="container2" id="blur">
	<div class="main-title">
		<p class="font-weight-bold">MANAGEMENT TEAM</p>
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

	<div class="box_mgtteam">
		<table width="100%">
			<thead>
				<tr>
					<td>Name</td>
					<td>Description</td>
					<td>Status</td>
					<td>Application</td>
					<td>Action</td>

					<!-- <td>
						<span> class="material-icons-outlined" type="text"

						</span>
					</td> -->

				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="people">
						<img src="images/scoups.jpg" alt="" />
						<div class="people-de">
							<h5>Amala</h5>
						</div>
					</td>

					<td class="people-des">
						<h5>-</h5>
						<!-- <p>Web dev</p> -->
					</td>

					<td class="active">
						<p>Active</p>
					</td>

					<td class="application">
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
						<img src="images/scoups.jpg" alt="" />
						<div class="people-de">
							<h5>Value Add</h5>
						</div>
					</td>

					<td class="people-des">
						<h5>-</h5>	
						<!-- <p>Web dev</p> -->
					</td>

					<td class="active">
						<p>Active</p>
					</td>

					<td class="application">
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
						<img src="images/scoups.jpg" alt="" />
						<div class="people-de">
							<h5>Amelia Millati Azka</h5>
						</div>
					</td>

					<td class="people-des">
						<h5>-</h5>
						<!-- <p>Web dev</p> -->
					</td>

					<td class="active">
						<p>Active</p>
					</td>

					<td class="application">
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
						<img src="images/scoups.jpg" alt="" />
						<div class="people-de">
							<h5>Amelia Millati Azka</h5>
						</div>
					</td>

					<td class="people-des">
						<h5>-</h5>
						<!-- <p>Web dev</p> -->
					</td>

					<td class="active">
						<p>Active</p>
					</td>

					<td class="application">
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
              <div class="user-details1">
                <div class="input-box">
                  <span class="details2">Add New Team</span>
                  <!-- <hr opacity= "0.5" width= "103%" color ="#cccccc"> -->
                  <br>
                  <br>
                  <span class="details">Name</span>
                  <input type="text" placeholder="Enter team" required>
                </div>
                <div class="input-box">
                  <span class="details">Description</span>
                  <input type="text" placeholder="Enter description" required>
                </div>
                <div class="input-box">
                  <span class="details">Status</span>
                  <input type="checkbox" id="active">
                  <label for="active">Active</label>    
                  <input type="checkbox" id="deactive">
                  <label for="deactive">Deactive</label>  
                  <!-- <label class = "details">
                    <input type = "checkbox" value = "">Java
                  </label>
                  <label for="active" class = "details">
                    <input type="checkbox" id="active" value="">C++
                  </label>
                  <label class = "details">
                    <input type = "checkbox" value = "">C
                  </label>           -->
                </div>
                <div class="input-box">
                  <span class="details">Application</span>
                  <input type="text" placeholder="Input application" data-toggle="dropdwon" required>
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
             <!-- Begin Page Content -->
             <main class="main-container">
                 <div class="main-title">
                     <p class="font-weight-bold">Profile</p>
                 </div>
                 <div class="charts-card">
                    <div class="content">
                         <form action="#">
                             <div class="user-details">
                                 <div class="input-box">
                                     <span class="details">NAME</span>
                                     <input type="text" placeholder="Enter Your Full Name" required>
                                 </div>
                                 <div class="input-box">
                                     <span class="details">TEAM</span>
                                     <select id="team" name="team">
                                         <option value="" disabled selected hidden>Choise Your Team</option>
                                         <option value="amala">Amala</option>
                                         <option value="valueadd">Value Add</option>
                                         <option value="bo">Business Operation</option>
                                         <option value="bi">Business Integration</option>
                                     </select>
                                 </div>
                                 <div class="input-box">
                                     <span class="details">ROLE</span>
                                     <select id="role" name="role">
                                         <option value="" disabled selected hidden>Choise Your Role</option>
                                         <option value="admin">Admin</option>
                                         <option value="user">User</option>
                                     </select>
                                 </div>
                                 <div class="input-box">
                                     <span class="details">PASSWORD</span>
                                     <input type="password" placeholder="Enter your password" required>
                                 </div>
                             </div>
                             <div class="button">
                                 <input type="submit" value="Save">
                             </div>
                             <div class="buttonn">
                                 <input type="submit" value="Cancel">
                             </div>
                         </form>
                    </div>
             </main>

             <style>
                 select {
                     height: 45px;
                     width: 92%;
                     outline: none;
                     font-size: 16px;
                     border-radius: 5px;
                     padding-left: 15px;
                     border: 1px solid #ccc;
                     border-bottom-width: 2px;
                     transition: all 0.3s ease;
                 }
             </style>
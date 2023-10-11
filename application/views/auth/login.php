<body>
    <style>
        body {
            font-family: 'poppins';
            background-color: #98A8F8;
        }

        .registration-form {
            width: 835px;
            height: 150px;
            margin-left: 70px;
            margin-top: 55px;
            border-radius: 25px;
            background-color: #BCCEF8;

        }

        /* .logo {
            width: 150px;
            height: 20px;
            padding-top: 10px;
            padding-left: 460px;
        } */

        .registration-form form {
            background-color: #F9F9F9;
            margin-top: -87px;
            width: 200px;
            height: 250px;
            border-radius: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form form i {
            font-size: 45px;
            color: #98A8F8;
            padding: 10px 85px 20px;
            /* padding-bottom: 50px; */
        }

        .registration-form input[type='text'],
        .registration-form input[type='password'] {
            font-size: 13px;
            font-family: 'Poppins';
            display: black;
            padding: 7px 20px;
            margin-left: -60px;
            width: 275px;
            border-radius: 3px;
            border-color: #98A8F8;
        }

        .p {
            padding-left: 30px;
            margin-top: 20px;
        }

        .registration-form button {
            padding: 10px 20px;
            font-size: 15px;
            width: 100px;
            margin-top: 20px;
            font-weight: 400;
            background-color: #98A8F8;
            border-radius: 5px;
            border-color: #98A8F8;
        }
    </style>

    <div class="">
        <!-- Content here -->
        <div class="logo">
            <img src="gambar/logo.png" style="width: 100px; padding-top: 70px; padding-left: 190px;">
        </div>


        <div class="registration-form">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth'); ?>" method="post">
                <i class="fa-sharp fa-solid fa-circle-user"></i>

                <div class="form-group">
                    <input type="text" class="form-control item" name="email" placeholder="email" value="<?= set_value('email'); ?>" id="username">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <br>

                <div class="form-group">
                    <input type="password" class="form-control item" name="password" placeholder="password" id="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="p">
                    <input type="checkbox" id="remember" name="remember" value="true" />
                    <label for="remember"> Remember Me </label>
                </div>

                <center><button type="submit" name="login" class="btn btn-primary">Login</button></center>

            </form>
        </div>
    </div>


</body>
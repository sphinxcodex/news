<div class="comment-form">
    <h2>Create an account</h2>
    <form name="form" action="db_signup.php" method="post" onsubmit="return validate()">
        <div class="form-group">
            <input name="username" type="text" class="form-control" id="subject" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" id="subject" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
        </div>
        <div class="form-group">
            <input name="repassword" type="password" class="form-control" id="subject" placeholder="Confirm" onfocus="this.placeholder = ''" onblur="this.placeholder = 're-enter password'" required>
        </div>
        <div class="form-group">
            <input name="full_name" type="text" class="form-control" id="subject" placeholder="Fullname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full name'" required>
        </div>
        <div class="form-group">
            <input name="phone_number" type="tel" class="form-control" id="subject" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required>
        </div>
        <div class="form-group">
            <input name="email_address" type="email" class="form-control" id="subject" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
        </div>
        <input class="primary-btn submit_btn" type="submit" value="Register" name="submit" />
    </form>
</div>

<script>

    function validate() {
        var x = document.forms['form']['password'].value;
        var y = document.forms['form']['repassword'].value;

        if (x !== y) {
            alert('passwords do not match');
            return false;
        }
    }


</script>
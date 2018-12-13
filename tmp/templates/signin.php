<div class="comment-form">
    <h2>Log in to your account</h2>
    <form name="form" action="db_signin.php" method="post">
        <div class="form-group">
            <input name="email" type="email" class="form-control" id="subject" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" id="subject" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
        </div>
        
        <input class="primary-btn submit_btn" type="submit" value="Log in" name="submit" />
    </form>
</div>

<script>

    function validate() {
        var x = document.forms['form']['password'].value;
    }
</script>

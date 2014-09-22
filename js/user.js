var user = {
    registerUser: function(username, password) {
        var _seed = generateRandomString(32),
            _hash = jQuery.sha256(password + _seed),
            _encpass = _hash + ":" + _seed;

        $.ajax({
            url: ajaxPath + 'user.register.php',
            data: {username: username, enc: _encpass},
            type: 'post',
            dataType: 'json',
            success: function(data) {

            },
            error: function() {
            }
        });
    }
};
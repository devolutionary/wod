var user = {
    registerUser: function(username, password) {
        var _seed = generateRandomString(32),
            _hash = jQuery.sha256(password + _seed),
            _enc = _hash + ":" + _seed;

        jQuery.ajax({
            url: ajaxPath + 'user.register.php',
            data: {username: username, password: _enc},
            type: 'post',
            dataType: 'json',
            success: function(data) {
                if (!data.success) {
                    switch(data.error) {
                        case 'INVALID_PARAMETERS':
                            break;
                        case 'WRITE_ERROR':
                            break;
                        case 'USER_EXISTS':
                            break;
                    }
                }
            }
        });

    },
    verifyPassword:function (pass, enc) {
        var split = enc.split(':'),
            _hash = split[0],
            _seed = split[1];
        return (jQuery.sha256(pass + _seed) == _hash);
    }
};
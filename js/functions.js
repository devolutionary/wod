function generateRandomString(length, mode) {
    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
        str = "";

    if (typeof length == "undefined" || typeof length != "integer")
        length = 32;
    if (typeof mode != "undefined") {
        if (mode == "alpha")
            chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        else if (mode == "numeric")
            chars = "0123456789";
    }

    while (length-- > 0)
        str += chars[parseInt(Math.random() * chars.length)];

    return str;
}
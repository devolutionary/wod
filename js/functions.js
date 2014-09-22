function generateRandomString(length, mode) {

    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghijklmnopqrstuvwxyz";
    var string_length = 32;

    if (typeof length == "integer")
        string_length = length;

    if (typeof mode != "undefined") {
        if (mode == "numeric")
            chars = "0123456789";
        else if (mode == "alpha")
            chars = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghijklmnopqrstuvwxyz";
    }

    var str = "";

    while (string_length--)
        str += chars.substr(Math.floor(Math.random() * chars.length), 1);

    return str;
}

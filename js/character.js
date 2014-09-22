var character = {
    buildCharacterSheet: function() {
        character.setDots();
    },
    setDots: function() {
        jQuery.each($('#charactersheet').find('.dots'), function() {
            if (typeof $(this).data('current') == "undefined")
                $(this).data('current', $(this).data('min'));
            character.bindDots($(this));
        });
    },
    bindDots: function(obj) {
        var min = parseInt(obj.data('min')),
            max = parseInt(obj.data('max')),
            current = parseInt(obj.data('current'));
        obj.html('');

        for (var i = 0; i < max; i++) {
            if (i < current)
                obj.append('<img src="images/dot-filled.png" />');
            else
                obj.append('<img src="images/dot-empty.png" />');
        }

        var dots = obj.find('img');

        dots.click(function() {
            var ind = $(this).index() + 1;
            if (ind > current)
                obj.data('current', ind);
            else if (ind == current && ind != min)
                obj.data('current', ind - 1);
            else if (ind >= min)
                obj.data('current', ind);
            character.bindDots(obj);
        });
    }
};
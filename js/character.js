var lores = ['Lore of the Fundament',
    'Lore of Humanity',
    'Lore of the Celestials',
    'Lore of Flame',
    'Lore of Radiance',
    'Lore of Awakening',
    'Lore of the Firmament',
    'Lore of the Winds',
    'Lore of the Earth',
    'Lore of Paths',
    'Lore of the Forge',
    'Lore of Light',
    'Lore of Patterns',
    'Lore of Portals',
    'Lore of Longing',
    'Lore of Storms',
    'Lore of Transfiguration',
    'Lore of the Beast',
    'Lore of the Flesh',
    'Lore of the Wild',
    'Lore of Death',
    'Lore of the Spirit',
    'Lore of the Realms'];

var backgrounds = [
    'Allies',
    'Contacts',
    'Eminence',
    'Fame',
    'Followers',
    'Influence',
    'Legacy',
    'Library',
    'Mentor',
    'Pacts',
    'Paragon',
    'Resources',
    'Status'
];



var character = {
    buildCharacterSheet: function() {
        $.each($('.ability-block'), function() {
            character.setSecondaryAbilities($(this));
        });
        character.setBackgrounds();
        character.setLores();
        character.setDots();
    },
    setSecondaryAbilities: function(obj) {
        obj.append('<div class="row"><input class="secondaryability" /><input class="specialisation" /><div class="dots" data-min="0" data-max="5"></div></div></div>');

        var secondary = obj.find('.secondaryability').last();

        character.bindDots(secondary.parent().find('div.dots'));

        secondary.blur(function() {
            obj.find('.secondaryability').filter(function() { return $(this).val().trim() == ""; }).parent().remove();
            character.setSecondaryAbilities(obj);
        });
    },
    setBackgrounds: function() {
        var block = $('.background-block');
        block.append('<div class="row"><select class="background"><option>&nbsp;</option></select><div class="dots" data-min="0" data-max="5"></div></div>');
        var select = block.find('select').last();

        jQuery.each(backgrounds, function(i,l) {
            select.append('<option value="' + l.toLowerCase().replace(' ', '') + '">' + l + '</option>');
        });

        character.bindDots(select.parent().find('div.dots'));

        select.change(function() {
            block.find('select').filter(function() { return $(this).val() == ""; }).parent().remove();
            character.setBackgrounds();
        });
    },
    setLores: function() {
        var block = $('.lore-block');
        block.append('<div class="row"><select class="lore"><option>&nbsp;</option></select><div class="dots" data-min="0" data-max="5"></div></div>');
        var select = block.find('select').last();

        jQuery.each(lores, function(i,l) {
            select.append('<option value="' + l.toLowerCase().replace(' ', '') + '">' + l + '</option>');
        });

        character.bindDots(select.parent().find('div.dots'));

        select.change(function() {
            block.find('select').filter(function() { return $(this).val() == ""; }).parent().remove();
            character.setLores();
        });
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

        var filled = "images/dot-filled.png",
            empty = "images/dot-empty.png";

        if (typeof $(this).data('type') != "undefined" && $(this).data('type') == "block") {

        }

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
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
        character.setHealthBoxes();
        character.setMeritFlaws();
        character.setDots();

        $('#charactersheetsubmit').click(function() {
            character.submitCharacterSheet();
        });
    },
    setMeritFlaws: function() {
        var block = $('.meritflaw-block');
        block.append('<div class="row"><input class="meritflaw" /><input class="meritflawcost" maxlength="3" /></div>');

        var meritflaw = block.find('.meritflaw').last();

        meritflaw.blur(function() {
            block.find('.meritflaw').filter(function() { return $(this).val().trim() == ""; }).parent().remove();
            character.setMeritFlaws();
        });
    },
    setHealthBoxes: function() {
        var health = $('.health-block');

        health.find('div.healthbox').click(function() {
            if ($(this).html() == "/")
                $(this).html('X');
            else if ($(this).html() == "X")
                $(this).html('');
            else
                $(this).html('/');
            $(this).blur();
        });
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
            character.bindDots($(this));
        });
    },
    bindDots: function(obj) {
        if (typeof obj.data('current') == "undefined")
            obj.data('current', obj.data('min'));

        var min = parseInt(obj.data('min')),
            max = parseInt(obj.data('max')),
            current = parseInt(obj.data('current'));
        obj.html('');

        var filled = "images/dot-filled.png",
            empty = "images/dot-empty.png";

        if (obj.data('type') == "block") {
            filled = "images/box-filled.png";
            empty = "images/box-empty.png";
        }

        for (var i = 0; i < max; i++) {
            if (i < current)
                obj.append('<img src="' + filled + '" />');
            else
                obj.append('<img src="' + empty + '" />');
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
    },
    submitCharacterSheet: function() {
        var $sheet = $('#charactersheet'),
            $sections = $sheet.find('.cs-section'),
            $characterinfosection = $sections.eq(0),
            $attributes = $sections.eq(1),
            $abilities = $sections.eq(2),
            $advantages = $sections.eq(3),
            $traits = $sections.eq(4),
            $additionalinfo = $sections.eq(5);

        var charactermodel = {
            characterinformation: {},
            attributes: {},
            abilities: {
                talents: {},
                skills: {},
                knowledges: {}
            },
            backgrounds: {},
            lores: {},
            virtues: {},
            apocalypticform: {
                low: {},
                high: {}
            },
            faith: {},
            torment: {},
            willpower: {},
            health: {},
            meritsflaws: {},
            additionalinformation: {}
        };

        $.each($characterinfosection.find('input,select,textarea'), function() {
            charactermodel.characterinformation[$(this).prop('name')] = $(this).val();
        });

        $.each($attributes.find('div.row'), function() {
            var dots = $(this).find('div.dots'),
                current = dots.data('current'),
                field = $(this).data('field'),
                specialisation = $(this).find('.specialisation').val();
            charactermodel.attributes[field] = {name: field, specialisation: specialisation, value: current };
        });

        $.each($abilities.find('div.row'), function() {
            var group = $(this).parent().data('group'),
                dots = $(this).find('div.dots'),
                current = dots.data('current'),
                specialisation = $(this).find('.specialisation').val().trim(),
                field = ($(this).data('field')? $(this).data('field'): $(this).find('input.secondaryability').val().trim()),
                id = ($(this).find('input.secondaryability').length == 1? $(this).find('input.secondaryability').val().trim() + (specialisation != ""? "-"+specialisation:""): $(this).data('field'));
            if (field.trim() != "")
                charactermodel.abilities[group][id.toLowerCase()] = {name: field, specialisation: specialisation, value: current };
        });

        console.log(charactermodel);
    }
};
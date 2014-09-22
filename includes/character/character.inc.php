<div id="charactersheet">
    <div class="cs-section">
        <h2>Character Information</h2>
        <div class="cs-block half">
            <div class="row">
                <label for="charactername">Character Name</label>
                <input id="charactername" name="charactername" maxlength="60" />
            </div>
            <div class="row">
                <label for="characteralias">Aliases</label>
                <input id="characteralias" name="charactername" />
            </div>
            <div class="row">
                <label for="charactersex">Sex</label>
                <select id="charactersex" name="charactersex">
                    <option>&nbsp;</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>
            <div class="row">
                <label for="characterage">Age</label>
                <input id="characterage" name="characterage" maxlength="3" class="short" />
            </div>
            <div class="row">
                <label for="characterconcept">Concept</label>
                <textarea id="characterconcept" name="characterconcept"></textarea>
            </div>
            <div class="row">
                <label for="characterdescription">Description</label>
                <textarea id="characterdescription" name="characterdescription"></textarea>
            </div>
            <div class="row">
                <label for="characterimage">Image (URL)</label>
                <input id="characterimage" name="characterimage" />
            </div>
        </div>
        <div class="cs-block half">
            <div class="row">
                <label for="characternature">Nature</label>
                <input id="characternature" name="characternature" />
            </div>
            <div class="row">
                <label for="characterdemeanour">Demeanour</label>
                <input id="characterdemeanour" name="characterdemeanour" />
            </div>
            <div class="row">
                <label for="charactervisage">Visage</label>
                <select id="charactervisage" name="charactervisage">
                    <option>&nbsp;</option>
                    <option value="bel">Bel, the Visage of Celestials</option>
                    <option value="nusku">Nusku, the Visage of the Flame</option>
                    <option value="qingu">Qingu, the Visage of Radiance</option>
                    <option value="dagan">Dagan, the Visage of Awakening</option>
                    <option value="ellil">Ellil, the Visage of the Winds</option>
                    <option value="anshar">Anshar, the Visage of the Firmament</option>
                    <option value="antu">Antu, the Visage of Paths</option>
                    <option value="kishar">Kishar, the Visage of the Earth</option>
                    <option value="mummu">Mummu, the Visage of the Forge</option>
                    <option value="nedu">Nedu, the Visage of Portals</option>
                    <option value="ninsun">Ninsun, the Visage of Patterns</option>
                    <option value="shamash">Shamash, the Visage of Light</option>
                    <option value="adad">Adad, the Visage of Storms</option>
                    <option value="mammetum">Mammetum, the Visage of Transfiguration</option>
                    <option value="ishhara">Ishhara, the Visage of Longing</option>
                    <option value="zaltu">Zaltu, the Visage of Beasts</option>
                    <option value="ninurtu">Ninurtu, the Visage of the Wild</option>
                    <option value="aruru">Aruru, the Visage of the Flesh</option>
                    <option value="namtar">Namtar, the Visage of Death</option>
                    <option value="nergal">Nergal, the Visage of Spirits</option>
                    <option value="ereshkigal">Ereshkigal, the Visage of the Realms</option>
                </select>
            </div>
            <div class="row">
                <label for="characterhouse">House</label>
                <select id="characterhouse" name="characterhouse">
                    <option>&nbsp;</option>
                    <option value="devil">Devil</option>
                    <option value="scourge">Scourge</option>
                    <option value="fiend">Fiend</option>
                    <option value="malefactor">Malefactor</option>
                    <option value="defiler">Defiler</option>
                    <option value="devourer">Devourer</option>
                    <option value="slayer">Slayer</option>
                </select>
            </div>
            <div class="row">
                <label for="characterfaction">Faction</label>
                <select id="characterfaction" name="characterfaction">
                    <option>&nbsp;</option>
                    <option value="cryptic">Cryptic</option>
                    <option value="faustian">Faustian</option>
                    <option value="luciferan">Luciferan</option>
                    <option value="ravener">Ravener</option>
                    <option value="reconciler">Reconciler</option>
                </select>
            </div>
            <div class="row">
                <label for="characterlegion">Legion</label>
                <select id="characterlegion" name="characterlegion">
                    <option>&nbsp;</option>
                    <option value="alabaster">Alabaster</option>
                    <option value="crimson">Crimson</option>
                    <option value="ebon">Ebon</option>
                    <option value="iron">Iron</option>
                    <option value="silver">Silver</option>
                </select>
            </div>
            <div class="row">
                <label for="charactercelestialname">Celestial Name</label>
                <input id="charactercelestialname" name="charactercelestialname" />
            </div>
            <div class="row">
                <label for="charactertitles">Titles</label>
                <textarea id="charactertitles" name="charactertitles"></textarea>
            </div>
        </div>
    </div>
    <div class="cs-section">
        <h2>Attributes</h2>
        <div class="cs-block">
            <h3>Physical</h3>
            <div class="row" data-field="strength">
                <label>Strength</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="dexterity">
                <label>Dexterity</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="stamina">
                <label>Stamina</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
        </div>
        <div class="cs-block">
            <h3>Social</h3>
            <div class="row" data-field="charisma">
                <label>Charisma</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="manipulation">
                <label>Manipulation</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="appearance">
                <label>Apperanace</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5" data-current="1"></div>
            </div>
        </div>
        <div class="cs-block">
            <h3>Mental</h3>
            <div class="row" data-field="perception">
                <label>Perception</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="intelligence">
                <label>Intelligence</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row" data-field="stamina">
                <label>Stamina</label>
                <input class="specialisation" />
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
        </div>
    </div>

    <div style="clear: both;"></div>
</div>

<script type='text/javascript'>character.buildCharacterSheet();</script>
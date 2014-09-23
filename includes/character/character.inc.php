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
                <select id="charactersex" name="charactersex" style="width: 90px;">
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

    <div class="cs-section">
        <h2>Abilities</h2>
        <div class="cs-block ability-block" data-group="talents">
            <h3>Talents</h3>
            <div class="row" data-field="alertness">
                <label>Alertness</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="athletics">
                <label>Athletics</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="awareness">
                <label>Awareness</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="brawl">
                <label>Brawl</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="dodge">
                <label>Dodge</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="empathy">
                <label>Empathy</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="expression">
                <label>Expression</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="intimidation">
                <label>Intimidation</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="intuition">
                <label>Intuition</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="leadership">
                <label>Leadership</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="streetwise">
                <label>Streetwise</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="subterfuge">
                <label>Subterfuge</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
        </div>

        <div class="cs-block ability-block" data-group="skills">
            <h3>Skills</h3>
            <div class="row" data-field="animalken">
                <label>Animal Ken</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="crafts">
                <label>Crafts</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="demolitions">
                <label>Demolitions</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="drive">
                <label>Drive</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="etiquette">
                <label>Etiquette</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="firearms">
                <label>Firearms</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="melee">
                <label>Melee</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="performance">
                <label>Performance</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="security">
                <label>Security</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="stealth">
                <label>Stealth</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="survival">
                <label>Survival</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="technology">
                <label>Technology</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
        </div>

        <div class="cs-block ability-block" data-group="knowledges">
            <h3>Knowledges</h3>
            <div class="row" data-field="academics">
                <label>Academics</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="computer">
                <label>Computer</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="finance">
                <label>Finance</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="investigation">
                <label>Investigation</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="law">
                <label>Law</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="linguistics">
                <label>Linguistics</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="medicine">
                <label>Medicine</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="occult">
                <label>Occult</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="politics">
                <label>Politics</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="religion">
                <label>Religion</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="research">
                <label>Research</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
            <div class="row" data-field="science">
                <label>Science</label>
                <input class="specialisation" />
                <div class="dots" data-min="0" data-max="5"></div>
            </div>
        </div>
    </div>

    <div class="cs-section">
        <h2>Advantages</h2>
        <div class="cs-block background-block">
            <h3>Backgrounds</h3>
        </div>
        <div class="cs-block lore-block">
            <h3>Lores</h3>
        </div>
        <div class="cs-block virtue-block">
            <h3>Virtues</h3>
            <div class="row" data-field="conscience">
                <label>Conscience</label>
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row spacer"></div>
            <div class="row" data-field="conviction">
                <label>Conviction</label>
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
            <div class="row spacer"></div>
            <div class="row" data-field="courage">
                <label>Courage</label>
                <div class="dots" data-min="1" data-max="5"></div>
            </div>
        </div>
    </div>

    <div class="cs-section">
        <div class="cs-block apocalyptic-block">
            <h3>Apocalyptic Form</h3>
            <h4>Low Torment Abilities</h4>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <h4>High Torment Abilities</h4>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
            <div class="row">
                <input class="apocalypticability" />
                <input class="apocalypticcost" maxlength="1" />
            </div>
        </div>
        <div class="cs-block">
            <h3>Faith</h3>
            <div class="row" data-field="faith">
                <div class="dots center" data-min="3" data-max="10"></div>
            </div>
            <div class="row" data-field="faithtemporary">
                <div class="dots center" data-min="0" data-max="10" data-type="block"></div>
            </div>
            <h3>Torment</h3>
            <div class="row" data-field="torment">
                <h5>Permanent</h5>
                <div class="dots center" data-min="3" data-max="10"></div>
            </div>
            <div class="row" data-field="tormentemporary">
                <h5>Temporary</h5>
                <div class="dots center" data-min="0" data-max="10"></div>
            </div>
            <h3>Willpower</h3>
            <div class="row" data-field="willpower">
                <div class="dots center" data-min="1" data-max="10"></div>
            </div>
            <div class="row" data-field="willpowertemporary">
                <div class="dots center" data-min="0" data-current="1" data-max="10" data-type="block"></div>
            </div>
        </div>
        <div class="cs-block health-block">
            <h3>Health</h3>
            <div class="row">
                <label>Bruised</label>
                <span class="healthpenalty"></span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Hurt</label>
                <span class="healthpenalty">-1</span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Injured</label>
                <span class="healthpenalty">-1</span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Wounded</label>
                <span class="healthpenalty">-2</span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Mauled</label>
                <span class="healthpenalty">-2</span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Crippled</label>
                <span class="healthpenalty">-5</span>
                <div class="healthbox"></div>
            </div>
            <div class="row">
                <label>Incapacitated</label>
                <span class="healthpenalty"></span>
                <div class="healthbox"></div>
            </div>
        </div>
    </div>
    <div class="cs-section">
        <h2>Additional Information</h2>
        <div class="cs-block meritflaw-block">
            <h3>Merits & Flaws</h3>
        </div>
        <div class="cs-block">
            <h3>Background Information</h3>
            <textarea class="largetext" name="additionalinfobackgrounds" id="additionalinfobackgrounds"></textarea>
            <h3>Pacts & Followers</h3>
            <textarea class="largetext" name="additionalinfopacts" id="additionalinfopacts"></textarea>
            <h3>Apocalyptic Form</h3>
            <textarea class="largetext" name="additionalinfoapocalypticform" id="additionalinfoapocalypticform"></textarea>
            <h3>Rituals</h3>
            <textarea class="largetext" name="additionalinforituals" id="additionalinforituals"></textarea>
        </div>
        <div class="cs-block">
            <h3>Equipment</h3>
            <textarea class="largetext" name="additionalinfoequipment" id="additionalinfoequipment"></textarea>
            <h3>Relics</h3>
            <textarea class="largetext" name="additionalinforelics" id="additionalinforelics"></textarea>
            <h3>Personal Notes</h3>
            <textarea class="largetext" name="additionalinfopersonalnotes" id="additionalinfopersonalnotes"></textarea>
        </div>
    </div>
    <div style="clear: both; height: 24px;"></div>

    <div style="padding: 24px 0; background: #222; margin-top: 48px;">
        <button id="charactersheetsubmit">Save Character</button>
    </div>
</div>

<script type='text/javascript'>character.buildCharacterSheet();</script>


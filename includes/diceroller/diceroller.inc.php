<div id="diceroller">
    <div id="diceroller-control">
        <div>
            <label for="charactername">Character Name</label><input name="charactername" id="charactername" />
        </div>
        <div>
            <label for="action">Action</label><input name="action" id="action" />
        </div>
        <div>
            <label for="number">Dice #</label><select name="number" id="number"><?php
                for ($i = 1; $i <= 20; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
                ?></select>
            <label for="difficulty">Diff</label><select name="difficulty" id="difficulty"><?php
                    for ($i = 2; $i < 10; $i++) echo '<option value="'.$i.'"'.($i == 6?"selected":"").'>'.$i.'</option>';
            ?></select>
        </div>
        <div>
            <label for="rollagain">Roll 10s Again</label><input type="checkbox" name="rollagain" id="rollagain" />
            <label for="willpower">Willpower</label><input type="checkbox" name="willpower" id="willpower" />
            <label for="bonussuccesses">Bonus Successes</label><select name="bonussuccess" id="bonussuccesses"><?php
                    for ($i = 0; $i <= 10; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
                ?></select>
        </div>
    </div>
    <div id="diceroller-output">

    </div>
</div>
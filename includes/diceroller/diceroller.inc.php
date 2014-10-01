<div id="dicerollerpanel">
    <label>Character Name</label><input name="charactername" id="charactername" />
    <label>Action</label><input name="action" id="action" />
    <label>Dice #</label><select name="number" id="number"><?php
        for ($i = 1; $i <= 20; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
        ?></select>
    <label>Diff</label><select name="difficulty" id="difficulty"><?php
            for ($i = 2; $i < 10; $i++) echo '<option value="'.$i.'"'.($i == 6?"selected":"").'>'.$i.'</option>';
        ?></select>
    <label>Roll 10s Again</label><input type="checkbox" name="rollagain" id="rollagain" />
    <label>Willpower</label><input type="checkbox" name="willpower" id="willpower" />
    <label>Bonus Successes</label><select name="bonussuccess" id="bonussuccesses"><?php
            for ($i = 0; $i < 5; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
        ?></select>
</div>
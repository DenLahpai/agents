<div class="mini form">
    <ul>
        <li class="list_title">
            <?php echo "Visitor $i"; ?>
        </li>
        <li>
            <label for="">Title</label>
        </li>
        <li>
            <select name="<?php echo "selectTitle$i";?>" id="<?php echo "selectTitle$i";?>">
                <option valubackground: snow;e="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
            </select>
        </li>
        <li>
            <label for="<?php echo "textFirstName$i";?>">First Name:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textFirstName$i";?>" id="<?php echo "textFirstName$i";?>"
            placeholder=Required*>
        </li>
        <li>
            <label for="<?php echo "textLastName$i";?>">Last Name:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textLastName$i";?>" id="<?php echo "textLastName$i";?>"
            placeholder="Last Name">
        </li>
        <li>
            <label for="<?php echo "textIdNo$i";?>">Passport or Id No:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textIdNo$i";?>" id="<?php "textIdNo$i";?>"
            placeholder="Passport or Id Number">
        </li>
        <li>
            <label for="<?php echo "textEmail$i";?>">Email:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textEmail$i";?>" id="<?php echo "textEmail$i";?>"
            placeholder="Required*">
        </li>
        <li>
            <label for="<?php echo "textMobile$i";?>">Mobile:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textMobile$i";?>" id="<?php echo "textMobile$i";?>"
            placeholder="Mobile Number">
        </li>
        <li>
            <label for="<?php echo "dateDateOfBirth$i";?>">Date of Birth</label>
        </li>
        <li>
            <input type="date" name="<?php echo "dateDateOfBirth$i";?>" id="<?php echo "dateDateOfBirth$i";?>">
        </li>
        <?php
        if ($i > 1) {
            echo "<li>";
            echo "<input type=\"checkbox\" name=\"checkboxVisitor$i\" id=\"checkboxVisitor$i\" style=\"display:inline-block;\"
            onchange=\"copyAddress($i);\">";
            echo " Copy contact details of the visitor above.</li>";
        }
        ?>
        <li>
            <label for="<?php echo "textAddress$i";?>">Address:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textAddress$i";?>" id="<?php echo "textAddress$i";?>"
            placeholder="Address">
        </li>
        <li>
            <label for="<?php echo "textCity$i";?>">City:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textCity$i";?>" id="<?php echo "textCity$i";?>"
            placeholder="City">
        </li>
        <li>
            <label for="<?php echo "textState$i"; ?>">State:</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textState$i"; ?>" id="<?php echo "textState$i";?>"
            placeholder="State or Province">
        </li>
        <li>
            <label for="<?php echo "textCountry$i"; S?>">Country</label>
        </li>
        <li>
            <input type="text" name="<?php echo "textCountry$i"; ?>" id="<?php echo "textCountry$i";?>"
            placeholder="Country">
        </li>
    </ul>
</div>

<?php

function setInput($title, $type, $name)
{
    echo "
    <div class='form-box'>
        <label class='inp-lbl'>$title</label>
        <input type='$type' name='$name' class='inp' id='$name'>
    </div>
    ";
};

function setOption($title, $name)
{
    echo "
    <div class='form-box'>
    <label class='inp-lbl'>$title</label>
    <select name='$name' class='inp' id='$name'>
    <option value='' disabled selected>Select State--</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Assam</option>
    <option>Bihar</option>
    <option>Chandigarh</option>
    <option>Chhattisgarh</option>
    <option>Daman and Diu</option>
    <option>Delhi</option>
    <option>Goa</option>
    <option>Gujarat</option>
    <option>Haryana</option>
    <option>Himachal Pradesh</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerala</option>
    <option>Lakshadweep</option>
    <option>Madhya Pradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Odisha</option>
    <option>Puducherry</option>
    <option>Punjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Telangana</option>
    <option>Tripura</option>
    <option>Uttar Pradesh</option>
    <option>Uttarakhand</option>
    <option>West Bengal</option>
    </select>
    </div>
    ";
}
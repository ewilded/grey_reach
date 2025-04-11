<?php
if ($_GET['one'] == "true") {
    if ($_GET['two'] == "true") {
        if ($_GET['three'] == "true") {
            // Block 1: one=true, two=true, three=true (base case)       
        } else {
            // Block 2: one=true, two=true, three=false            
        }
    } else {
        if ($_GET['three'] == "true") {
            // Block 3: one=true, two=false, three=true
        } else {
            // Block 4: one=true, two=false, three=false
        }
    }
} else {
    if ($_GET['two'] == "true") {
        if ($_GET['three'] == "true") {
            // Block 5: one=false, two=true, three=true
        } else {
            // Block 6: one=false, two=true, three=false
        }
    } else {
        if ($_GET['three'] == "true") {
            // Block 7: one=false, two=false, three=true
        } else {
            // Block 8: one=false, two=false, three=false
        }
    }
}
?>
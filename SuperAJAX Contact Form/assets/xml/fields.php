<?php if(basename(__file__) == 'fields.php') exit; ?>
<?xml version="1.0" encoding="utf-8"?>
<xml><Fields><field><alias>name</alias><name>Name</name><message>This field can't stay empty</message><func>notempty</func><is>name</is></field><field><alias>email</alias><name>Email</name><message>Enter with a valid email!</message><func>email</func><is>email</is></field><field><alias>phone</alias><name>Phone</name><message>Only digits are accepted!</message><func>numeric</func><is>custom</is></field><field><alias>sales</alias><name>Sales</name><is>subject</is></field><field><alias>message</alias><name>Message</name><message>This field can't stay empty</message><func>notempty</func><is>custom</is></field><field><alias>security_code</alias><name>Security Code</name><message>The security code is wrong!</message><func>sec1</func><is>sec1</is></field></Fields></xml>
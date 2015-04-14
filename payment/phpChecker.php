<?php
$discount = $DB->get_record('enrol_payment_discount', array('id' => $enrolid, 'enrol' => 'peyment'), '*', MUST_EXIST);
<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_stripepayment', language 'en'.
 *
 * @package    enrol_stripepayment
 * @copyright  2015 Dualcube, Arkaprava Midya, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['secretkey'] = 'Stripe Secret Key';
$string['publishablekey'] = 'Stripe Publishable Key';
$string['secretkey_desc'] = 'The API Secret Key of Stripe account';
$string['publishablekey_desc'] = 'The API Publishable Key of Stripe account';
$string['cost'] = 'Enroll cost';
$string['costerror'] = 'The enrollment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrollment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Stripe enrollments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrollment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrollment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrollment is valid. If set to zero, the enrollment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrollment is valid, starting with the moment the user is enrolled. If disabled, the enrollment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrollment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrollment expires. Please note that some user data and settings are purged from course during course unenrollment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:stripe_enrolment'] = 'Stripe enrollment messages';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['stripe:config'] = 'Configure Stripe enroll instances';
$string['stripe:manage'] = 'Manage enrolled users';
$string['stripe:unenrol'] = 'Unenroll users from course';
$string['stripe:unenrolself'] = 'Unenroll self from the course';
$string['stripeaccepted'] = 'Stripe payments accepted';
$string['pluginname'] = 'Stripe Payment';
$string['pluginname_desc'] = 'The Stripe module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via Stripe';
$string['status'] = 'Allow Stripe enrollments';
$string['status_desc'] = 'Allow users to use Stripe to enroll into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenroll yourself from course "{$a}"?';
$string['messageprovider:stripepayment_enrolment'] = 'Message Provider';

$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can stripepayment enroll. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to stripepayment-enroll was already reached.';

$string['canntenrol'] = 'Enrollment is disabled or inactive';
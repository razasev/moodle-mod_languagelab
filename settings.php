<?php

/**
 * *************************************************************************
 * *             OWLL LANGUAGE LAB Version 3 for Moodle 2                 **
 * *************************************************************************
 * @package     mod                                                       **
 * @subpackage  languagelab                                               **
 * @name        languagelab                                               **
 * @copyright   oohoo.biz                                                 **
 * @link        http://oohoo.biz                                          **
 * @author      Nicolas Bretin                                            **
 * @author      Patrick Thibaudeau                                        **
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later  **
 * *************************************************************************
 * ************************************************************************ */
$settings->add(new admin_setting_configtext('languagelab_red5serverprotocol', get_string('red5serverprotocol', 'languagelab'),
                get_string('red5serverprotocol_help', 'languagelab'), 'rtmp', PARAM_RAW));
$settings->add(new admin_setting_configtext('languagelab_red5server', get_string('red5server', 'languagelab'),
                get_string('red5server_help', 'languagelab'), '', PARAM_RAW));
$settings->add(new admin_setting_configtext('languagelab_red5serverfolder', get_string('red5serverfolder', 'languagelab'),
                get_string('red5serverfolder_help', 'languagelab'), 'oflaDemo', PARAM_RAW));
$settings->add(new admin_setting_configtext('languagelab_folder', get_string('red5folder', 'languagelab'),
                get_string('red5folder_help', 'languagelab'), 'moodle', PARAM_TEXT));
$settings->add(new admin_setting_configtext('languagelab_prefix', get_string('prefix', 'languagelab'),
                get_string('prefixhelp', 'languagelab'), 'mdl', PARAM_RAW));
$settings->add(new admin_setting_configtext('languagelab_max_users', get_string('maxusers', 'languagelab'),
                get_string('maxusershelp', 'languagelab'), '25', PARAM_INT));
$settings->add(new admin_setting_configcheckbox('languagelab_stealthMode', get_string('stealthmode', 'languagelab'),
                get_string('stealthmodehelp', 'languagelab'), '0', 1, 0));
$settings->add(new admin_setting_configtext('languagelab_adapter_server', get_string('red5_adapter_server', 'languagelab'),
                get_string('red5_adapter_server_help', 'languagelab'), '', PARAM_TEXT));
$settings->add(new admin_setting_configtext('languagelab_adapter_file', get_string('red5_adapter_file', 'languagelab'),
                get_string('red5_adapter_file_help', 'languagelab'), 'adapter', PARAM_TEXT));
$settings->add(new admin_setting_configcheckbox('languagelab_adapter_access', get_string('red5_adapter_access', 'languagelab'),
                get_string('red5_adapter_access_help', 'languagelab'), '0', 1, 0));
$settings->add(new admin_setting_configtext('languagelab_salt', get_string('salt', 'languagelab'),
                get_string('salt_help', 'languagelab'), '', PARAM_TEXT));
$settings->add(new admin_setting_configtext('languagelab_secondsRefreshHistory', get_string('secondsRefreshHistory', 'languagelab'),
                get_string('secondsRefreshHistoryhelp', 'languagelab'), '30000', PARAM_INT));
$settings->add(new admin_setting_configtext('languagelab_secondsRefreshClassmonitor', get_string('secondsRefreshClassmonitor', 'languagelab'),
                get_string('secondsRefreshClassmonitorhelp', 'languagelab'), '5000', PARAM_INT));
$settings->add(new admin_setting_configtext('languagelab_secondsRefreshStudentView', get_string('secondsRefreshStudentView', 'languagelab'),
                get_string('secondsRefreshStudentViewhelp', 'languagelab'), '5000', PARAM_INT));
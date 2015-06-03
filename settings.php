<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('block_html_extradata_allowcssclasses', get_string('allowadditionalcssclasses', 'block_html_extradata'),
                       get_string('configallowadditionalcssclasses', 'block_html_extradata'), 0));
}



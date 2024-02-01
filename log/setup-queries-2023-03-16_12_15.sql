ALTER DATABASE CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE `tpl_base` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `name` (`name` (95)), `label` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `description` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `finalclass` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Template', INDEX `finalclass` (`finalclass` (95))) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `tpl_field` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `template_id` INT(11) DEFAULT 0, INDEX `template_id` (`template_id`), `code` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `code` (`code` (95)), `label` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `order` INT(11) DEFAULT 0, `mandatory` ENUM('no','yes') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'no', `input_type` ENUM('date','date_and_time','drop_down_list','duration','hidden','radio_buttons','read_only','text','text_area') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'text', `values` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `initial_value` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `format` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '') ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `tpl_extradata` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `template_id` INT(11) DEFAULT 0, INDEX `template_id` (`template_id`), `obj_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `obj_class` (`obj_class` (95)), `obj_key` INT(11), INDEX `obj_key` (`obj_key`), `data` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, INDEX `obj_class_obj_key` (`obj_class` (95), `obj_key`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_event_notification` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `survey_id` INT(11) DEFAULT 0, INDEX `survey_id` (`survey_id`), `contact_id` INT(11) DEFAULT 0, INDEX `contact_id` (`contact_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_quizz` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `name` (`name` (95)), `description` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'EN US', INDEX `language` (`language` (95)), `title` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `introduction` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `scale_values` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `conclusion` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_element` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `quizz_id` INT(11) DEFAULT 0, INDEX `quizz_id` (`quizz_id`), `order` INT(11) DEFAULT 0, INDEX `order` (`order`), `title` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `title` (`title` (95)), `description` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `mandatory` ENUM('no','yes') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'yes', `finalclass` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'QuizzElement', INDEX `finalclass` (`finalclass` (95))) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_scale_question` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_new_page` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_value_question` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `choices` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_free_text` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_survey` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `quizz_id` INT(11) DEFAULT 0, INDEX `quizz_id` (`quizz_id`), `status` ENUM('closed','new','running') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'new', `date_sent` DATETIME, INDEX `date_sent` (`date_sent`), `on_behalf_of` INT(11) DEFAULT 0, INDEX `on_behalf_of` (`on_behalf_of`), `target_phrase_id` INT(11) DEFAULT 0, INDEX `target_phrase_id` (`target_phrase_id`), `email_on_completion` ENUM('no','yes') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'no', `email_subject` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `email_body` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_survey_target` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `survey_id` INT(11) DEFAULT 0, INDEX `survey_id` (`survey_id`), `contact_id` INT(11) DEFAULT 0, INDEX `contact_id` (`contact_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_survey_targetanswer` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `survey_id` INT(11) DEFAULT 0, INDEX `survey_id` (`survey_id`), `token` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `token` (`token` (95)), `date_response` DATETIME, `contact_id` INT(11) DEFAULT 0, INDEX `contact_id` (`contact_id`), `status` ENUM('finished','ongoing') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'finished', `nb_notifications_sent` INT(11) DEFAULT 0, `last_question_id` INT(11) DEFAULT 0, INDEX `last_question_id` (`last_question_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `qz_survey_answer` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `survey_target_id` INT(11) DEFAULT 0, INDEX `survey_target_id` (`survey_target_id`), `question_id` INT(11) DEFAULT 0, INDEX `question_id` (`question_id`), `value` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `communication` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `ref` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', INDEX `ref` (`ref` (95)), `start_date` DATETIME, `end_date` DATETIME, `status` ENUM('closed','ongoing') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'ongoing', `org_id` INT(11) DEFAULT 0, INDEX `org_id` (`org_id`), `icon` ENUM('information','none','scoop','tip','warning') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'none', `title` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `message` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, `org_match_type` ENUM('cascade','direct') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'cascade') ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `lnkcommunicationtoorganization` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `org_id` INT(11) DEFAULT 0, INDEX `org_id` (`org_id`), `communication_id` INT(11) DEFAULT 0, INDEX `communication_id` (`communication_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `tpl_request` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `service_id` INT(11) DEFAULT 0, INDEX `service_id` (`service_id`), `servicesubcategory_id` INT(11) DEFAULT 0, INDEX `servicesubcategory_id` (`servicesubcategory_id`)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
ALTER TABLE `priv_user` CHANGE `contactid` `contactid` INT(11) DEFAULT 0
ALTER TABLE `priv_async_task` CHANGE `event_id` `event_id` INT(11) DEFAULT 0, CHANGE `remaining_retries` `remaining_retries` INT(11) DEFAULT 0, CHANGE `last_error_code` `last_error_code` INT(11) DEFAULT 0
ALTER TABLE `priv_async_send_email` CHANGE `version` `version` INT(11) DEFAULT 1
ALTER TABLE `priv_change` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop` CHANGE `changeid` `changeid` INT(11) DEFAULT 0, CHANGE `objkey` `objkey` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_setatt_log` CHANGE `lastentry` `lastentry` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links` CHANGE `item_id` `item_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_links_tune` CHANGE `link_id` `link_id` INT(11) DEFAULT 0
ALTER TABLE `priv_module_install` CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0
ALTER TABLE `priv_app_dashboards` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_shortcut` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_shortcut_oql` CHANGE `auto_reload_sec` `auto_reload_sec` INT(11) DEFAULT 60
ALTER TABLE `priv_app_preferences` CHANGE `userid` `userid` INT(11) DEFAULT 0
ALTER TABLE `priv_auditrule` CHANGE `category_id` `category_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_notification` CHANGE `trigger_id` `trigger_id` INT(11) DEFAULT 0, CHANGE `action_id` `action_id` INT(11) DEFAULT 0, CHANGE `object_id` `object_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_restservice` CHANGE `code` `code` INT(11) DEFAULT 0
ALTER TABLE `priv_event_loginusage` CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_event_onobject` CHANGE `obj_key` `obj_key` INT(11)
ALTER TABLE `priv_link_action_trigger` CHANGE `action_id` `action_id` INT(11) DEFAULT 0, CHANGE `trigger_id` `trigger_id` INT(11) DEFAULT 0, CHANGE `order` `order` INT(11) DEFAULT 0
ALTER TABLE `priv_bulk_export_result` CHANGE `user_id` `user_id` INT(11) DEFAULT 0, CHANGE `chunk_size` `chunk_size` INT(11) DEFAULT 0
ALTER TABLE `priv_ownership_token` CHANGE `obj_key` `obj_key` INT(11), CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_sync_datasource` CHANGE `user_id` `user_id` INT(11) DEFAULT 0, CHANGE `notify_contact_id` `notify_contact_id` INT(11) DEFAULT 0, CHANGE `full_load_periodicity` `full_load_periodicity` INT(11) UNSIGNED, CHANGE `delete_policy_retention` `delete_policy_retention` INT(11) UNSIGNED
ALTER TABLE `priv_sync_att` CHANGE `sync_source_id` `sync_source_id` INT(11) DEFAULT 0
ALTER TABLE `priv_sync_att_linkset` CHANGE `attribute_qualifier` `attribute_qualifier` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '\''
ALTER TABLE `priv_sync_log` CHANGE `sync_source_id` `sync_source_id` INT(11) DEFAULT 0, CHANGE `status_curr_job` `status_curr_job` INT(11) DEFAULT 0, CHANGE `status_curr_pos` `status_curr_pos` INT(11) DEFAULT 0, CHANGE `stats_nb_replica_seen` `stats_nb_replica_seen` INT(11) DEFAULT 0, CHANGE `stats_nb_replica_total` `stats_nb_replica_total` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_deleted` `stats_nb_obj_deleted` INT(11) DEFAULT 0, CHANGE `stats_deleted_errors` `stats_deleted_errors` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_obsoleted` `stats_nb_obj_obsoleted` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_obsoleted_errors` `stats_nb_obj_obsoleted_errors` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_created` `stats_nb_obj_created` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_created_errors` `stats_nb_obj_created_errors` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_created_warnings` `stats_nb_obj_created_warnings` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_updated` `stats_nb_obj_updated` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_updated_errors` `stats_nb_obj_updated_errors` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_updated_warnings` `stats_nb_obj_updated_warnings` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_unchanged_warnings` `stats_nb_obj_unchanged_warnings` INT(11) DEFAULT 0, CHANGE `stats_nb_replica_reconciled_errors` `stats_nb_replica_reconciled_errors` INT(11) DEFAULT 0, CHANGE `stats_nb_replica_disappeared_no_action` `stats_nb_replica_disappeared_no_action` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_new_updated` `stats_nb_obj_new_updated` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_new_updated_warnings` `stats_nb_obj_new_updated_warnings` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_new_unchanged` `stats_nb_obj_new_unchanged` INT(11) DEFAULT 0, CHANGE `stats_nb_obj_new_unchanged_warnings` `stats_nb_obj_new_unchanged_warnings` INT(11) DEFAULT 0, CHANGE `memory_usage_peak` `memory_usage_peak` INT(11) DEFAULT 0
ALTER TABLE `priv_sync_replica` CHANGE `sync_source_id` `sync_source_id` INT(11) DEFAULT 0, CHANGE `dest_id` `dest_id` INT(11) DEFAULT 0
ALTER TABLE `priv_backgroundtask` CHANGE `total_exec_count` `total_exec_count` INT(11) DEFAULT 0
ALTER TABLE `inline_image` CHANGE `item_id` `item_id` INT(11) DEFAULT 0, CHANGE `item_org_id` `item_org_id` INT(11) DEFAULT 0
ALTER TABLE `approval_scheme` CHANGE `obj_key` `obj_key` INT(11) DEFAULT 0, CHANGE `current_step` `current_step` INT(11) DEFAULT 0, CHANGE `abort_user_id` `abort_user_id` INT(11) DEFAULT 0
ALTER TABLE `attachment` CHANGE `item_id` `item_id` INT(11) DEFAULT 0, CHANGE `item_org_id` `item_org_id` INT(11) DEFAULT 0, CHANGE `user_id` `user_id` INT(11) DEFAULT 0
ALTER TABLE `priv_changeop_attachment_added` CHANGE `attachment_id` `attachment_id` INT(11) DEFAULT 0
ALTER TABLE `organization` CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0, CHANGE `parent_id_left` `parent_id_left` INT(11) DEFAULT 0, CHANGE `parent_id_right` `parent_id_right` INT(11) DEFAULT 0, CHANGE `deliverymodel_id` `deliverymodel_id` INT(11) DEFAULT 0
ALTER TABLE `location` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `contact` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `person` CHANGE `location_id` `location_id` INT(11) DEFAULT 0, CHANGE `manager_id` `manager_id` INT(11) DEFAULT 0
ALTER TABLE `lnkpersontoteam` CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `person_id` `person_id` INT(11) DEFAULT 0, CHANGE `role_id` `role_id` INT(11) DEFAULT 0
ALTER TABLE `document` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `documenttype_id` `documenttype_id` INT(11) DEFAULT 0
ALTER TABLE `ticket` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `caller_id` `caller_id` INT(11) DEFAULT 0, CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `agent_id` `agent_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttoticket` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `workorder` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `team_id` `team_id` INT(11) DEFAULT 0, CHANGE `owner_id` `owner_id` INT(11) DEFAULT 0
ALTER TABLE `osversion` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0
ALTER TABLE `model` CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0
ALTER TABLE `iosversion` CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0
ALTER TABLE `functionalci` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `physicaldevice` CHANGE `location_id` `location_id` INT(11) DEFAULT 0, CHANGE `brand_id` `brand_id` INT(11) DEFAULT 0, CHANGE `model_id` `model_id` INT(11) DEFAULT 0
ALTER TABLE `datacenterdevice` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `enclosure_id` `enclosure_id` INT(11) DEFAULT 0, CHANGE `nb_u` `nb_u` INT(11), CHANGE `powera_id` `powera_id` INT(11) DEFAULT 0, CHANGE `powerB_id` `powerB_id` INT(11) DEFAULT 0
ALTER TABLE `networkdevice` CHANGE `networkdevicetype_id` `networkdevicetype_id` INT(11) DEFAULT 0, CHANGE `iosversion_id` `iosversion_id` INT(11) DEFAULT 0
ALTER TABLE `server` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0, CHANGE `oslicence_id` `oslicence_id` INT(11) DEFAULT 0
ALTER TABLE `softwareinstance` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `software_id` `software_id` INT(11) DEFAULT 0, CHANGE `softwarelicence_id` `softwarelicence_id` INT(11) DEFAULT 0
ALTER TABLE `middlewareinstance` CHANGE `middleware_id` `middleware_id` INT(11) DEFAULT 0
ALTER TABLE `databaseschema` CHANGE `dbserver_id` `dbserver_id` INT(11) DEFAULT 0
ALTER TABLE `webapplication` CHANGE `webserver_id` `webserver_id` INT(11) DEFAULT 0
ALTER TABLE `ospatch` CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `softwarepatch` CHANGE `software_id` `software_id` INT(11) DEFAULT 0
ALTER TABLE `licence` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `oslicence` CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `softwarelicence` CHANGE `software_id` `software_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttolicence` CHANGE `licence_id` `licence_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttopatch` CHANGE `patch_id` `patch_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnksoftwareinstancetosoftwarepatch` CHANGE `softwarepatch_id` `softwarepatch_id` INT(11) DEFAULT 0, CHANGE `softwareinstance_id` `softwareinstance_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoospatch` CHANGE `ospatch_id` `ospatch_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttosoftware` CHANGE `software_id` `software_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `subnet` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `vlan` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `lnksubnettovlan` CHANGE `subnet_id` `subnet_id` INT(11) DEFAULT 0, CHANGE `vlan_id` `vlan_id` INT(11) DEFAULT 0
ALTER TABLE `physicalinterface` CHANGE `connectableci_id` `connectableci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkphysicalinterfacetovlan` CHANGE `physicalinterface_id` `physicalinterface_id` INT(11) DEFAULT 0, CHANGE `vlan_id` `vlan_id` INT(11) DEFAULT 0
ALTER TABLE `lnkconnectablecitonetworkdevice` CHANGE `networkdevice_id` `networkdevice_id` INT(11) DEFAULT 0, CHANGE `connectableci_id` `connectableci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkapplicationsolutiontofunctionalci` CHANGE `applicationsolution_id` `applicationsolution_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkapplicationsolutiontobusinessprocess` CHANGE `businessprocess_id` `businessprocess_id` INT(11) DEFAULT 0, CHANGE `applicationsolution_id` `applicationsolution_id` INT(11) DEFAULT 0
ALTER TABLE `group` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0, CHANGE `parent_id_left` `parent_id_left` INT(11) DEFAULT 0, CHANGE `parent_id_right` `parent_id_right` INT(11) DEFAULT 0
ALTER TABLE `lnkgrouptoci` CHANGE `group_id` `group_id` INT(11) DEFAULT 0, CHANGE `ci_id` `ci_id` INT(11) DEFAULT 0
ALTER TABLE `rack` CHANGE `nb_u` `nb_u` INT(11)
ALTER TABLE `enclosure` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `nb_u` `nb_u` INT(11)
ALTER TABLE `pdu` CHANGE `rack_id` `rack_id` INT(11) DEFAULT 0, CHANGE `powerstart_id` `powerstart_id` INT(11) DEFAULT 0
ALTER TABLE `pc` CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0
ALTER TABLE `faq` CHANGE `category_id` `category_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_incident` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `cumulatedpending_timespent` `cumulatedpending_timespent` INT(11) UNSIGNED, CHANGE `tto_timespent` `tto_timespent` INT(11) UNSIGNED, CHANGE `tto_75_passed` `tto_75_passed` TINYINT(1) UNSIGNED, CHANGE `tto_75_overrun` `tto_75_overrun` INT(11) UNSIGNED, CHANGE `tto_100_passed` `tto_100_passed` TINYINT(1) UNSIGNED, CHANGE `tto_100_overrun` `tto_100_overrun` INT(11) UNSIGNED, CHANGE `ttr_timespent` `ttr_timespent` INT(11) UNSIGNED, CHANGE `ttr_75_passed` `ttr_75_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_75_overrun` `ttr_75_overrun` INT(11) UNSIGNED, CHANGE `ttr_100_passed` `ttr_100_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_100_overrun` `ttr_100_overrun` INT(11) UNSIGNED, CHANGE `time_spent` `time_spent` INT(11) UNSIGNED, CHANGE `parent_incident_id` `parent_incident_id` INT(11) DEFAULT 0, CHANGE `parent_problem_id` `parent_problem_id` INT(11) DEFAULT 0, CHANGE `parent_change_id` `parent_change_id` INT(11) DEFAULT 0
ALTER TABLE `knownerror` CHANGE `cust_id` `cust_id` INT(11) DEFAULT 0, CHANGE `problem_id` `problem_id` INT(11) DEFAULT 0
ALTER TABLE `lnkerrortofunctionalci` CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0, CHANGE `error_id` `error_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttoerror` CHANGE `document_id` `document_id` INT(11) DEFAULT 0, CHANGE `error_id` `error_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_problem` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `related_change_id` `related_change_id` INT(11) DEFAULT 0
ALTER TABLE `ticket_request` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `servicesubcategory_id` `servicesubcategory_id` INT(11) DEFAULT 0, CHANGE `cumulatedpending_timespent` `cumulatedpending_timespent` INT(11) UNSIGNED, CHANGE `tto_timespent` `tto_timespent` INT(11) UNSIGNED, CHANGE `tto_75_passed` `tto_75_passed` TINYINT(1) UNSIGNED, CHANGE `tto_75_overrun` `tto_75_overrun` INT(11) UNSIGNED, CHANGE `tto_100_passed` `tto_100_passed` TINYINT(1) UNSIGNED, CHANGE `tto_100_overrun` `tto_100_overrun` INT(11) UNSIGNED, CHANGE `ttr_timespent` `ttr_timespent` INT(11) UNSIGNED, CHANGE `ttr_75_passed` `ttr_75_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_75_overrun` `ttr_75_overrun` INT(11) UNSIGNED, CHANGE `ttr_100_passed` `ttr_100_passed` TINYINT(1) UNSIGNED, CHANGE `ttr_100_overrun` `ttr_100_overrun` INT(11) UNSIGNED, CHANGE `time_spent` `time_spent` INT(11) UNSIGNED, CHANGE `parent_request_id` `parent_request_id` INT(11) DEFAULT 0, CHANGE `parent_incident_id` `parent_incident_id` INT(11) DEFAULT 0, CHANGE `parent_problem_id` `parent_problem_id` INT(11) DEFAULT 0, CHANGE `parent_change_id` `parent_change_id` INT(11) DEFAULT 0
ALTER TABLE `contract` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `contracttype_id` `contracttype_id` INT(11) DEFAULT 0, CHANGE `provider_id` `provider_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttocontract` CHANGE `contract_id` `contract_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontracttodocument` CHANGE `contract_id` `contract_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `service` CHANGE `org_id` `org_id` INT(11) DEFAULT 0, CHANGE `servicefamily_id` `servicefamily_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdocumenttoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `document_id` `document_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcontacttoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0
ALTER TABLE `servicesubcategory` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `approvalrule_id` `approvalrule_id` INT(11) DEFAULT 0
ALTER TABLE `sla` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `slt` CHANGE `value` `value` INT(11)
ALTER TABLE `lnkslatoslt` CHANGE `sla_id` `sla_id` INT(11) DEFAULT 0, CHANGE `slt_id` `slt_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttoservice` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `sla_id` `sla_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttoprovidercontract` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `providercontract_id` `providercontract_id` INT(11) DEFAULT 0
ALTER TABLE `lnkcustomercontracttofunctionalci` CHANGE `customercontract_id` `customercontract_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `deliverymodel` CHANGE `org_id` `org_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdeliverymodeltocontact` CHANGE `deliverymodel_id` `deliverymodel_id` INT(11) DEFAULT 0, CHANGE `contact_id` `contact_id` INT(11) DEFAULT 0, CHANGE `role_id` `role_id` INT(11) DEFAULT 0
ALTER TABLE `fiberchannelinterface` CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `tape` CHANGE `tapelibrary_id` `tapelibrary_id` INT(11) DEFAULT 0
ALTER TABLE `nasfilesystem` CHANGE `nas_id` `nas_id` INT(11) DEFAULT 0
ALTER TABLE `logicalvolume` CHANGE `storagesystem_id` `storagesystem_id` INT(11) DEFAULT 0
ALTER TABLE `lnkservertovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `lnkdatacenterdevicetosan` CHANGE `san_id` `san_id` INT(11) DEFAULT 0, CHANGE `datacenterdevice_id` `datacenterdevice_id` INT(11) DEFAULT 0
ALTER TABLE `hypervisor` CHANGE `farm_id` `farm_id` INT(11) DEFAULT 0, CHANGE `server_id` `server_id` INT(11) DEFAULT 0
ALTER TABLE `virtualmachine` CHANGE `virtualhost_id` `virtualhost_id` INT(11) DEFAULT 0, CHANGE `osfamily_id` `osfamily_id` INT(11) DEFAULT 0, CHANGE `osversion_id` `osversion_id` INT(11) DEFAULT 0, CHANGE `oslicence_id` `oslicence_id` INT(11) DEFAULT 0
ALTER TABLE `logicalinterface` CHANGE `virtualmachine_id` `virtualmachine_id` INT(11) DEFAULT 0
ALTER TABLE `coverage_windows_interval` CHANGE `coverage_window_id` `coverage_window_id` INT(11) DEFAULT 0
ALTER TABLE `holidays` CHANGE `calendar_id` `calendar_id` INT(11) DEFAULT 0
ALTER TABLE `remoteapplicationconnection` CHANGE `remoteapplicationtype_id` `remoteapplicationtype_id` INT(11) DEFAULT 0
ALTER TABLE `priv_action_webhook` CHANGE `remoteapplicationconnection_id` `remoteapplicationconnection_id` INT(11) DEFAULT 0, CHANGE `test_remoteapplicationconnection_id` `test_remoteapplicationconnection_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoticket` CHANGE `ticket_id` `ticket_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoprovidercontract` CHANGE `providercontract_id` `providercontract_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkfunctionalcitoservice` CHANGE `service_id` `service_id` INT(11) DEFAULT 0, CHANGE `functionalci_id` `functionalci_id` INT(11) DEFAULT 0
ALTER TABLE `lnkvirtualdevicetovolume` CHANGE `volume_id` `volume_id` INT(11) DEFAULT 0, CHANGE `virtualdevice_id` `virtualdevice_id` INT(11) DEFAULT 0
ALTER TABLE `change` CHANGE `requestor_id` `requestor_id` INT(11) DEFAULT 0, CHANGE `supervisor_group_id` `supervisor_group_id` INT(11) DEFAULT 0, CHANGE `supervisor_id` `supervisor_id` INT(11) DEFAULT 0, CHANGE `manager_group_id` `manager_group_id` INT(11) DEFAULT 0, CHANGE `manager_id` `manager_id` INT(11) DEFAULT 0, CHANGE `parent_id` `parent_id` INT(11) DEFAULT 0
ALTER TABLE `approval_rule` CHANGE `level1_timeout` `level1_timeout` INT(11) DEFAULT 70, CHANGE `level1_substitute_timeout` `level1_substitute_timeout` INT(11), CHANGE `level2_timeout` `level2_timeout` INT(11) DEFAULT 70, CHANGE `level2_substitute_timeout` `level2_substitute_timeout` INT(11), CHANGE `coveragewindow_id` `coveragewindow_id` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userprofile` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `profileid` `profileid` INT(11) DEFAULT 0
ALTER TABLE `priv_urp_userorg` CHANGE `userid` `userid` INT(11) DEFAULT 0, CHANGE `allowed_org_id` `allowed_org_id` INT(11) DEFAULT 0

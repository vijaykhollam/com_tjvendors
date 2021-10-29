ALTER TABLE `#__tjvendors_passbook` CHANGE `vendor_id` `vendor_id` INT(11)  NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_passbook` CHANGE `currency` `currency` VARCHAR(255)  NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_passbook` CHANGE `reference_order_id` `reference_order_id` VARCHAR(255)  NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_passbook` CHANGE `client` `client` VARCHAR(255)  NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_passbook` CHANGE `transaction_id` `transaction_id` VARCHAR(255)  NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_passbook` CHANGE `status` `status` TINYINT(1)  NOT NULL DEFAULT 1;
ALTER TABLE `#__tjvendors_passbook` CHANGE `params` `params` VARCHAR(255)  NOT NULL DEFAULT '';

ALTER TABLE `#__tjvendors_fee` CHANGE `vendor_id` `vendor_id` INT(11)  NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_fee` CHANGE `currency` `currency` VARCHAR(255)  NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_fee` CHANGE `client` `client` VARCHAR(255)  NOT NULL DEFAULT '';

ALTER TABLE `#__vendor_client_xref` CHANGE `vendor_id` `vendor_id` INT(11)  NOT NULL DEFAULT 0;
ALTER TABLE `#__vendor_client_xref` CHANGE `client` `client` VARCHAR(255)  NOT NULL DEFAULT '';

ALTER TABLE `#__tjvendors_vendors` CHANGE `user_id` `user_id` int(11) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `vendor_title` `vendor_title` varchar(255) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `country` `country` int(3) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `region` `region` int(5) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `city` `city` varchar(50) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `other_city` `other_city` varchar(50) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `zip` `zip` varchar(50) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `phone_number` `phone_number` varchar(50) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `website_address` `website_address` varchar(250) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `vat_number` `vat_number` varchar(50) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `alias` `alias` varchar(255) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `vendor_logo` `vendor_logo` varchar(255) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `state` `state` tinyint(1) NOT NULL DEFAULT 1;
ALTER TABLE `#__tjvendors_vendors` CHANGE `ordering` `ordering` int(11) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `checked_out` `checked_out` int(11) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `params` `params` varchar(255) NOT NULL DEFAULT '';
ALTER TABLE `#__tjvendors_vendors` CHANGE `created_by` `created_by` int(11) NOT NULL DEFAULT 0;
ALTER TABLE `#__tjvendors_vendors` CHANGE `modified_by` `modified_by` int(11) NOT NULL DEFAULT 0;

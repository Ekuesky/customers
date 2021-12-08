-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;

DROP TABLE IF EXISTS cu_moral_signatories;


DROP TABLE IF EXISTS cu_moral_documents;


DROP TABLE IF EXISTS cu_morals;


DROP TABLE IF EXISTS cu_individuals;


DROP TABLE IF EXISTS cu_customer_photos;


DROP TABLE IF EXISTS cu_customer_documents;


DROP TABLE IF EXISTS cu_account_stake_holders;


DROP TABLE IF EXISTS cu_membership_status_changes;


DROP TABLE IF EXISTS cu_members;


DROP TABLE IF EXISTS cu_customers;


DROP TABLE IF EXISTS cu_memberships;


DROP TABLE IF EXISTS cu_member_categories;


DROP TABLE IF EXISTS cu_addresses;


DROP TABLE IF EXISTS cu_stake_holder_types;


DROP TABLE IF EXISTS cu_sex;


DROP TABLE IF EXISTS cu_membership_status;


DROP TABLE IF EXISTS cu_member_types;


DROP TABLE IF EXISTS cu_marital_status;


DROP TABLE IF EXISTS cu_documents_type;


DROP TABLE IF EXISTS cu_district;


DROP TABLE IF EXISTS cu_countries;


DROP TABLE IF EXISTS cu_civil_states;


DROP TABLE IF EXISTS cu_cities;


DROP TABLE IF EXISTS cu_business_links;


DROP TABLE IF EXISTS cu_activity_sectors;



-- ************************************** cu_stake_holder_types

CREATE TABLE IF NOT EXISTS cu_stake_holder_types
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(45) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_sex

CREATE TABLE IF NOT EXISTS cu_sex
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label enum('m', 'f') NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_membership_status

CREATE TABLE IF NOT EXISTS cu_membership_status
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(100) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_member_types

CREATE TABLE IF NOT EXISTS cu_member_types
(
 id         int unsigned NOT NULL AUTO_INCREMENT ,
 label      varchar(45) NOT NULL ,
 created_at datetime NULL ,
 updated_at datetime NULL ,
 disabled   tinyint(1) unsigned NOT NULL DEFAULT 0 ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_marital_status

CREATE TABLE IF NOT EXISTS cu_marital_status
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(45) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_documents_type

CREATE TABLE IF NOT EXISTS cu_documents_type
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(45) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_district

CREATE TABLE IF NOT EXISTS cu_district
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(100) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_countries

CREATE TABLE IF NOT EXISTS cu_countries
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(100) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_civil_states

CREATE TABLE IF NOT EXISTS cu_civil_states
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(50) NOT NULL ,

PRIMARY KEY (id)
);
-- ************************************** cu_cities

CREATE TABLE IF NOT EXISTS cu_cities
(
 id    int unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(100) NOT NULL ,

PRIMARY KEY (id)
) ENGINE=INNODB;
-- ************************************** cu_business_links

CREATE TABLE IF NOT EXISTS cu_business_links
(
 id    smallint unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(100) NOT NULL ,

PRIMARY KEY (id)
);
-- ************************************** cu_activity_sectors

CREATE TABLE IF NOT EXISTS cu_activity_sectors
(
 id    bigint unsigned NOT NULL AUTO_INCREMENT ,
 label varchar(255) NOT NULL ,

PRIMARY KEY (id)
);
-- ************************************** cu_memberships

CREATE TABLE IF NOT EXISTS cu_memberships
(
 id             bigint unsigned NOT NULL AUTO_INCREMENT ,
 type           int unsigned NOT NULL ,
 status_id      int unsigned NOT NULL ,
 closed_at      datetime NULL ,
 deactivated_at datetime NULL ,
 created_at     datetime NULL ,
 updated_at     datetime NULL ,
 validated_at   datetime NULL ,
 revoked_at     datetime NULL ,

PRIMARY KEY (id),
KEY membership_type_fk (type),
CONSTRAINT FK_828 FOREIGN KEY membership_type_fk (type) REFERENCES cu_member_types (id),
KEY memberships_status_id_fk (status_id),
CONSTRAINT FK_833 FOREIGN KEY memberships_status_id_fk (status_id) REFERENCES cu_membership_status (id)
);
-- ************************************** cu_member_categories

CREATE TABLE IF NOT EXISTS cu_member_categories
(
 id             int unsigned NOT NULL AUTO_INCREMENT ,
 member_type_id int unsigned NOT NULL ,
 label          varchar(45) NOT NULL ,
 disabled       tinyint(1) NOT NULL DEFAULT 0 ,
 created_at     datetime NULL ,
 updated_at     datetime NULL ,

PRIMARY KEY (id),
KEY member_categories_member_type_id_fk (member_type_id),
CONSTRAINT FK_738 FOREIGN KEY member_categories_member_type_id_fk (member_type_id) REFERENCES cu_member_types (id)
);
-- ************************************** cu_addresses

CREATE TABLE IF NOT EXISTS cu_addresses
(
 id                 bigint unsigned NOT NULL AUTO_INCREMENT ,
 city_id            int unsigned NOT NULL ,
 district_id        int unsigned NULL ,
 country_id         int unsigned NOT NULL ,
 address            varchar(255) NULL ,
 phone_number       varchar(20) NULL ,
 other_phone_number varchar(20) NULL ,
 postal_box         varchar(145) NULL ,
 email              varchar(190) NULL ,
 prefecture         varchar(190) NULL ,
 municipality       varchar(150) NULL ,
 detail             longtext NULL ,
 created_at         datetime NULL ,
 updated_at         datetime NULL ,

PRIMARY KEY (id),
KEY addresses_city_id_fk (city_id),
CONSTRAINT FK_513 FOREIGN KEY addresses_city_id_fk (city_id) REFERENCES cu_cities (id),
KEY addresses_country_id (country_id),
CONSTRAINT FK_519 FOREIGN KEY addresses_country_id (country_id) REFERENCES cu_countries (id),
KEY addresses_district_id (district_id),
CONSTRAINT FK_516 FOREIGN KEY addresses_district_id (district_id) REFERENCES cu_district (id)
);
-- ************************************** cu_membership_status_changes

CREATE TABLE IF NOT EXISTS cu_membership_status_changes
(
 id                 bigint unsigned NOT NULL AUTO_INCREMENT ,
 membership_id      bigint unsigned NOT NULL ,
 current_status_id  int unsigned NOT NULL ,
 previous_status_id int unsigned NOT NULL ,
 reason             varchar(255) NULL ,
 date               datetime NOT NULL ,
 created_at         datetime NULL ,
 updated_at         datetime NULL ,

PRIMARY KEY (id),
KEY `m_status_changes_ membership_id_fk` (membership_id),
CONSTRAINT FK_825 FOREIGN KEY `m_status_changes_ membership_id_fk` (membership_id) REFERENCES cu_memberships (id),
KEY status_changes_current_status_id_fk (current_status_id),
CONSTRAINT fk_customer_has_status_status1 FOREIGN KEY status_changes_current_status_id_fk (current_status_id) REFERENCES cu_membership_status (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
KEY status_changes_previous_status_id_fk (previous_status_id),
CONSTRAINT FK_791 FOREIGN KEY status_changes_previous_status_id_fk (previous_status_id) REFERENCES cu_membership_status (id)
) ENGINE=INNODB;
-- ************************************** cu_members

CREATE TABLE IF NOT EXISTS cu_members
(
 id                 bigint unsigned NOT NULL AUTO_INCREMENT ,
 status_id          int unsigned NULL ,
 membership_id      bigint unsigned NOT NULL ,
 activity_sector_id bigint unsigned NOT NULL ,
 business_link_id   smallint unsigned NOT NULL ,
 activity           varchar(190) NOT NULL ,
 created_at         datetime NULL ,
 updated_at         datetime NULL ,

PRIMARY KEY (id),
KEY members_activity_sector_id_fk (activity_sector_id),
CONSTRAINT FK_815 FOREIGN KEY members_activity_sector_id_fk (activity_sector_id) REFERENCES cu_activity_sectors (id),
KEY members_business_link_id_fk (business_link_id),
CONSTRAINT FK_811 FOREIGN KEY members_business_link_id_fk (business_link_id) REFERENCES cu_business_links (id),
KEY members_membership_id_fk (membership_id),
CONSTRAINT FK_836 FOREIGN KEY members_membership_id_fk (membership_id) REFERENCES cu_memberships (id),
KEY members_status_id_fk (status_id),
CONSTRAINT FK_797 FOREIGN KEY members_status_id_fk (status_id) REFERENCES cu_membership_status (id)
) ENGINE=INNODB;
-- ************************************** cu_customers

CREATE TABLE IF NOT EXISTS cu_customers
(
 id                bigint unsigned NOT NULL AUTO_INCREMENT ,
 marital_status_id int unsigned NOT NULL ,
 sex_id            int unsigned NOT NULL ,
 civil_state_id    int unsigned NOT NULL ,
 address_id        bigint unsigned NOT NULL ,
 firstname         varchar(50) NOT NULL ,
 lastname          varchar(50) NOT NULL ,
 profession        varchar(25) NULL ,
 birthdate         date NOT NULL ,
 nationality       varchar(100) NOT NULL ,
 birthplace        varchar(190) NOT NULL ,
 created_at        datetime NULL ,
 updated_at        datetime NULL ,
 second_firstname  varchar(50) NULL ,
 second_lastname   varchar(50) NULL ,
 spouce_firstname  varchar(50) NULL ,
 spouce_lastname   varchar(50) NOT NULL ,
 children          smallint unsigned NOT NULL DEFAULT 0 ,

PRIMARY KEY (id),
KEY customers_address_id_fk (address_id),
CONSTRAINT FK_483 FOREIGN KEY customers_address_id_fk (address_id) REFERENCES cu_addresses (id),
KEY customers_civil_state_id_fk (civil_state_id),
CONSTRAINT FK_510 FOREIGN KEY customers_civil_state_id_fk (civil_state_id) REFERENCES cu_civil_states (id),
KEY customers_marital_status_id_fk (marital_status_id),
CONSTRAINT `fk_cu.profiles_cu.marital_status1` FOREIGN KEY customers_marital_status_id_fk (marital_status_id) REFERENCES cu_marital_status (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
KEY customers_sex_id_fk (sex_id),
CONSTRAINT `fk_cu.profiles_cu.sex1` FOREIGN KEY customers_sex_id_fk (sex_id) REFERENCES cu_sex (id) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=INNODB;
-- ************************************** cu_morals

CREATE TABLE IF NOT EXISTS cu_morals
(
 id              bigint unsigned NOT NULL AUTO_INCREMENT ,
 member_id       bigint unsigned NOT NULL ,
 address_id      bigint unsigned NOT NULL ,
 category_id     int unsigned NOT NULL ,
 social_reason   varchar(100) NOT NULL ,
 legal_form      varchar(45) NOT NULL ,
 receipt_number  varchar(20) NULL ,
 approval_number varchar(20) NULL ,
 created_at      datetime NULL ,
 updated_at      datetime NULL ,

PRIMARY KEY (id),
KEY morals_address_id_fk (address_id),
CONSTRAINT FK_761 FOREIGN KEY morals_address_id_fk (address_id) REFERENCES cu_addresses (id),
KEY morals_category_id_fk (category_id),
CONSTRAINT FK_780 FOREIGN KEY morals_category_id_fk (category_id) REFERENCES cu_member_categories (id),
KEY morals_member_id_fk (member_id),
CONSTRAINT FK_787 FOREIGN KEY morals_member_id_fk (member_id) REFERENCES cu_members (id)
) ENGINE=INNODB;
-- ************************************** cu_individuals

CREATE TABLE IF NOT EXISTS cu_individuals
(
 category_id int unsigned NOT NULL ,
 member_id   bigint unsigned NOT NULL ,
 customer_id bigint unsigned NOT NULL ,
 created_at  datetime NULL ,
 updated_at  datetime NULL ,
 id          bigint unsigned NOT NULL AUTO_INCREMENT ,

PRIMARY KEY (id),
KEY individuals_category_id (category_id),
CONSTRAINT FK_465 FOREIGN KEY individuals_category_id (category_id) REFERENCES cu_member_categories (id),
KEY individuals_customer_id_fk (customer_id),
CONSTRAINT FK_507 FOREIGN KEY individuals_customer_id_fk (customer_id) REFERENCES cu_customers (id),
KEY individuals_member_id_fk (member_id),
CONSTRAINT FK_794 FOREIGN KEY individuals_member_id_fk (member_id) REFERENCES cu_members (id)
) ENGINE=INNODB;
-- ************************************** cu_customer_photos

CREATE TABLE IF NOT EXISTS cu_customer_photos
(
 customer_id bigint unsigned NULL ,
 file_id     bigint NOT NULL ,
 created_at  datetime NULL ,
 updated_at  datetime NULL ,
 id          int unsigned NOT NULL AUTO_INCREMENT ,

PRIMARY KEY (id),
KEY customer_photos_customer_id (customer_id),
CONSTRAINT FK_440 FOREIGN KEY customer_photos_customer_id (customer_id) REFERENCES cu_customers (id),
KEY customer_photos_file_id_index (file_id)
);
-- ************************************** cu_customer_documents

CREATE TABLE IF NOT EXISTS cu_customer_documents
(
 id               bigint unsigned NOT NULL AUTO_INCREMENT ,
 document_type_id int unsigned NOT NULL ,
 customer_id      bigint unsigned NOT NULL ,
 reference        varchar(45) NOT NULL ,
 expired_at       date NULL ,
 file_id          bigint unsigned NOT NULL ,
 created_at       datetime NULL ,
 updated_at       datetime NULL ,

PRIMARY KEY (id),
KEY customer_document_customer_id_fk (customer_id),
CONSTRAINT FK_638 FOREIGN KEY customer_document_customer_id_fk (customer_id) REFERENCES cu_customers (id),
KEY customer_document_type_id_fk (document_type_id),
CONSTRAINT FK_635 FOREIGN KEY customer_document_type_id_fk (document_type_id) REFERENCES cu_documents_type (id),
KEY customer_documents_file_id_index (file_id)
);
-- ************************************** cu_account_stake_holders

CREATE TABLE IF NOT EXISTS cu_account_stake_holders
(
 id          bigint unsigned NOT NULL AUTO_INCREMENT ,
 type        int unsigned NOT NULL ,
 customer_id bigint unsigned NOT NULL ,
 account_id  bigint unsigned NOT NULL ,
 created_at  datetime NULL ,
 updated_at  datetime NULL ,
 is_active   tinyint(1) unsigned NOT NULL DEFAULT 0 ,

PRIMARY KEY (id),
KEY account_stake_holder_customer_id_fk (customer_id),
CONSTRAINT FK_579 FOREIGN KEY account_stake_holder_customer_id_fk (customer_id) REFERENCES cu_customers (id),
KEY account_stake_holder_type_fk (type),
CONSTRAINT FK_576 FOREIGN KEY account_stake_holder_type_fk (type) REFERENCES cu_stake_holder_types (id),
KEY stake_holders_account_id_index (account_id)
);
-- ************************************** cu_moral_signatories

CREATE TABLE IF NOT EXISTS cu_moral_signatories
(
 customer_id bigint unsigned NOT NULL ,
 moral_id    bigint unsigned NOT NULL ,
 created_at  datetime NULL ,
 updated_at  datetime NULL ,
 id          bigint unsigned NOT NULL AUTO_INCREMENT ,

PRIMARY KEY (id),
KEY `moral_ signatories_customer_id_fk` (customer_id),
CONSTRAINT FK_525 FOREIGN KEY `moral_ signatories_customer_id_fk` (customer_id) REFERENCES cu_customers (id),
KEY `moral_ signatories_moral_id_fk` (moral_id),
CONSTRAINT FK_528 FOREIGN KEY `moral_ signatories_moral_id_fk` (moral_id) REFERENCES cu_morals (id)
);
-- ************************************** cu_moral_documents

CREATE TABLE IF NOT EXISTS cu_moral_documents
(
 moral_id         bigint unsigned NOT NULL ,
 document_type_id int unsigned NOT NULL ,
 reference        varchar(45) NOT NULL ,
 expired_at       date NULL ,
 file_id          bigint NOT NULL ,
 created_at       datetime NULL ,
 updated_at       datetime NULL ,
 id               bigint unsigned NOT NULL AUTO_INCREMENT ,

PRIMARY KEY (id),
KEY moral_documents_file_id_index (file_id),
KEY moral_documents_moral_id_fk (moral_id),
CONSTRAINT FK_617 FOREIGN KEY moral_documents_moral_id_fk (moral_id) REFERENCES cu_morals (id),
KEY moral_documents_type_id_fk (document_type_id),
CONSTRAINT FK_625 FOREIGN KEY moral_documents_type_id_fk (document_type_id) REFERENCES cu_documents_type (id)
);

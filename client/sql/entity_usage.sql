CREATE TABLE IF NOT EXISTS /*_*/wbc_entity_usage (
  eu_row_id         BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  eu_entity_id      VARBINARY(255) NOT NULL, -- the ID of the entity being used
  eu_aspect         VARBINARY(37) NOT NULL,  -- the aspect of the entity. See EntityUsage::XXX_USAGE for possible values.
  eu_page_id        INT NOT NULL             -- the ID of the page that uses the entities.
) /*$wgDBTableOptions*/;

-- record one usage per page per aspect of an entity
CREATE UNIQUE INDEX /*i*/eu_entity_id ON /*_*/wbc_entity_usage ( eu_entity_id, eu_aspect, eu_page_id );

-- look up (and especially, delete) usage entries by page id
CREATE INDEX /*i*/eu_page_id ON /*_*/wbc_entity_usage ( eu_page_id, eu_entity_id ) ;


CREATE TABLE IF NOT EXISTS /*_*/wbc_statement_usage (
  eu_entity_id               VARBINARY(255) NOT NULL, -- the ID of the entity being used
  eu_property_id             VARBINARY(37) NOT NULL,  -- the property ID used from the entity.
  eu_page_id                 INT NOT NULL,            -- the ID of the page that uses the entities.
  eu_user_specified_value    Boolean,                 -- true if property value specified in lua module
  eu_property_exists         Boolean,                 -- true if entity table has value for property          

 ) /*$wgDBTableOptions*/;


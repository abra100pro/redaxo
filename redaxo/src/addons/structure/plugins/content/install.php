<?php

rex_sql_table::get(rex::getTable('article_slice'))
    ->ensureColumn(new rex_sql_column('id', 'int(10) unsigned', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('article_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('clang_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('ctype_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('module_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('revision', 'int(11)'))
    ->ensureColumn(new rex_sql_column('priority', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('status', 'tinyint(1)', false, '1'))
    ->ensureColumn(new rex_sql_column('value1', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value2', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value3', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value4', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value5', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value6', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value7', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value8', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value9', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value10', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value11', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value12', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value13', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value14', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value15', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value16', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value17', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value18', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value19', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('value20', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('media1', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media2', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media3', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media4', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media5', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media6', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media7', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media8', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media9', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('media10', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('medialist1', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist2', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist3', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist4', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist5', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist6', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist7', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist8', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist9', 'text', true))
    ->ensureColumn(new rex_sql_column('medialist10', 'text', true))
    ->ensureColumn(new rex_sql_column('link1', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link2', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link3', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link4', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link5', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link6', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link7', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link8', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link9', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('link10', 'varchar(10)', true))
    ->ensureColumn(new rex_sql_column('linklist1', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist2', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist3', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist4', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist5', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist6', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist7', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist8', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist9', 'text', true))
    ->ensureColumn(new rex_sql_column('linklist10', 'text', true))
    ->ensureGlobalColumns()
    ->setPrimaryKey('id')
    ->ensureIndex(new rex_sql_index('slice_priority', ['article_id', 'priority', 'module_id']))
    ->ensureIndex(new rex_sql_index('find_slices', ['clang_id', 'article_id']))
    ->removeIndex('clang_id')
    ->removeIndex('article_id')
    ->ensure();

rex_sql_table::get(rex::getTable('template'))
    ->ensureColumn(new rex_sql_column('id', 'int(10) unsigned', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('key', 'varchar(191)', true))
    ->ensureColumn(new rex_sql_column('name', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('content', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('active', 'tinyint(1)', true))
    ->ensureGlobalColumns()
    ->ensureColumn(new rex_sql_column('attributes', 'text', true))
    ->ensureColumn(new rex_sql_column('revision', 'int(11)'))
    ->setPrimaryKey('id')
    ->ensureIndex(new rex_sql_index('key', ['key'], rex_sql_index::UNIQUE))
    ->ensure();

rex_sql_table::get(rex::getTable('action'))
    ->ensureColumn(new rex_sql_column('id', 'int(10) unsigned', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('name', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('preview', 'text', true))
    ->ensureColumn(new rex_sql_column('presave', 'text', true))
    ->ensureColumn(new rex_sql_column('postsave', 'text', true))
    ->ensureColumn(new rex_sql_column('previewmode', 'tinyint(4)', true))
    ->ensureColumn(new rex_sql_column('presavemode', 'tinyint(4)', true))
    ->ensureColumn(new rex_sql_column('postsavemode', 'tinyint(4)', true))
    ->ensureGlobalColumns()
    ->ensureColumn(new rex_sql_column('revision', 'int(10) unsigned'))
    ->setPrimaryKey('id')
    ->ensure();

rex_sql_table::get(rex::getTable('module'))
    ->ensureColumn(new rex_sql_column('id', 'int(10) unsigned', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('key', 'varchar(191)', true))
    ->ensureColumn(new rex_sql_column('name', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('output', 'mediumtext'))
    ->ensureColumn(new rex_sql_column('input', 'mediumtext'))
    ->ensureGlobalColumns()
    ->ensureColumn(new rex_sql_column('attributes', 'text', true))
    ->ensureColumn(new rex_sql_column('revision', 'int(10) unsigned'))
    ->setPrimaryKey('id')
    ->ensureIndex(new rex_sql_index('key', ['key'], rex_sql_index::UNIQUE))
    ->ensure();

rex_sql_table::get(rex::getTable('module_action'))
    ->ensureColumn(new rex_sql_column('id', 'int(10) unsigned', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('module_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('action_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('revision', 'int(10) unsigned'))
    ->setPrimaryKey('id')
    ->ensure();

$sql = rex_sql::factory();
$sql->setQuery('SELECT 1 FROM ' . rex::getTable('template') . ' LIMIT 1');
if (!$sql->getRows()) {
    $sql
        ->setTable(rex::getTable('template'))
        ->setValue('id', 1)
        ->setValue('name', 'Default')
        ->setValue('content', 'REX_ARTICLE[]')
        ->setValue('active', 1)
        ->setValue('attributes', '{"ctype":[],"modules":{"1":{"all":"1"}},"categories":{"all":"1"}}')
        ->setRawValue('createdate', 'NOW()')
        ->setRawValue('updatedate', 'NOW()')
        ->insert();
}

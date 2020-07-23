<?php

class BlueprintPlugin extends Gdn_Plugin {
    /**
     * This method is called when plugin is enabled.
     *
     */
    public function setup() {
        $this->structure();
    }

    /**
     * Add example table and alter existing table.
     *
     * This method will also be called from /utility/structure is your plugin
     * is enabled.
     *
     */
    public function structure() {
        /**
         * The column method takes the parameters:
         * $name, $type, $nullDefault = false, $keyType = false
         *
         * Depending on database encoding, 191 characters might be the maximum
         * for varchar fields. Don't use higher numbers, consider using a text field instead.
         *
         * If a table does not exist, it will be created. If it already exists,
         * it will be altered.
         */

        // Create table
        Gdn::structure()->table('Blueprint')
            ->primaryKey('BlueprintID')
            ->column('Name', 'varchar(191)')
            ->column('Body', 'text', false, 'fulltext')
            ->column('SomeBoolean', 'tinyint(1)', 0) // defaults to 0
            ->column('DateInserted', 'datetime', false)
            ->set();

        // Add one column, change one column.
        Gdn::structure()->table('Blueprint')
            ->column('InsertUserID', 'int')
            ->column('SomeBoolean', 'tinyint(1)', 1) // change default value
            ->set();
    }
}

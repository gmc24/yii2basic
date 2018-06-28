<?php

use yii\db\Migration;

/**
 * Handles the creation of table `event`.
 */
class m180628_203856_create_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('event', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'dt' => $this->dateTime()->notNull(),
            'creator_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('event');
    }
}

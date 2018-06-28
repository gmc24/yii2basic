<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180628_202756_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'access_token' => $this->string(),
            'auth_key' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}

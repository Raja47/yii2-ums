<?php

use yii\db\Migration;

/**
 * Class m240930_183409_seed_user_table
 */
class m240930_183409_seed_user_table extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin123'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'role' => 'administrator',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('user', [
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('user1'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'role' => 'user',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        $this->insert('user', [
            'username' => 'user2',
            'email' => 'user2@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('user2'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'role' => 'user',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        $this->insert('user', [
            'username' => 'user3',
            'email' => 'user3@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('user3'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'role' => 'user',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function safeDown()
    {
        $this->delete('user', ['username' => 'admin']);
        $this->delete('user', ['username' => 'user1']);
        $this->delete('user', ['username' => 'user2']);
        $this->delete('user', ['username' => 'user3']);
    }
}

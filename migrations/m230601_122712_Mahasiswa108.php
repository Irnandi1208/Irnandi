<?php

use yii\db\Migration;

/**
 * Class m230601_122712_Mahasiswa108
 */
class m230601_122712_Mahasiswa108 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Mahasiswa108}}',[
            'id108'=> $this->primarykey(),
            'nim108'=> $this->string(25)->notNull()->unique(),
            'nama108'=> $this->string(225)->notNull(),
            'kelas108'=> $this->string()->notNull(),
            'status108'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230601_122712_Mahasiswa108 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230601_122712_Mahasiswa108 cannot be reverted.\n";

        return false;
    }
    */
}

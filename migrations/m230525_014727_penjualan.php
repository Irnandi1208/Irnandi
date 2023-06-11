<?php

use yii\db\Migration;

/**
 * Class m230525_014727_penjualan
 */
class m230525_014727_penjualan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%penjualan}}',[
            'id_suplayer'=> $this->primarykey(),
            'nama_barang'=> $this->string(15)->notNull()->unique(),
            'transaksi'=> $this->string(32)->notNull(),
            'pembeli'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230525_014727_penjualan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230525_014727_penjualan cannot be reverted.\n";

        return false;
    }
    */
}

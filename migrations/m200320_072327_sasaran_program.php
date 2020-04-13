<?php

use yii\db\Migration;

/**
 * Class m200320_072327_sasaran_program
 */
class m200320_072327_sasaran_program extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200320_072327_sasaran_program cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('sasaran_program','kode','varchar(255)');
        return true;
    }

    public function down()
    {
        $this->dropColumn('sasaran_program','kode');
        return true;
    }

}

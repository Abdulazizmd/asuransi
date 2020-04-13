<?php

use yii\db\Migration;

/**
 * Class m200320_080059_kode
 */
class m200320_080059_kode extends Migration
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
        echo "m200320_080059_kode cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('indikator_kinerja_kegiatan','kode','varchar(255)');
        $this->addColumn('sasaran_kegiatan','kode','varchar(255)');
        return true;
    }

    public function down()
    {
        $this->dropColumn('indikator_kinerja_kegiatan','kode');
        $this->dropColumn('sasaran_kegiatan','kode');
        return true;
    }

}

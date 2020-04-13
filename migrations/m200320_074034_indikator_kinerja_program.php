<?php

use yii\db\Migration;

/**
 * Class m200320_074034_indikator_kinerja_program
 */
class m200320_074034_indikator_kinerja_program extends Migration
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
        echo "m200320_074034_indikator_kinerja_program cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->addColumn('indikator_kinerja_program','kode','varchar(255)');
        return true;
    }

    public function down()
    {
        $this->dropColumn('indikator_kinerja_program','kode');
        return true;
    }
}

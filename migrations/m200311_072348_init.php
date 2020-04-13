<?php

use yii\db\Migration;

/**
 * Class m200311_072348_init
 */
class m200311_072348_init extends Migration
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
        echo "m200311_072348_init cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'status_aktif' => $this->integer()->notNull()->defaultValue('1'),
            'id_role' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%kak}}', [
            'id' => $this->primaryKey(),
            'id_instansi' => $this->integer()->notNull(),
            'id_unit_eselon' => $this->integer(),
            'id_sasaran_program' => $this->integer()->notNull(),
            'id_kegiatan' => $this->integer(),
            'id_sasaran_kegiatan' => $this->integer(),
            'keluaran' => $this->integer(),
            'volume_keluaran' => $this->integer(),
            'satuan_keluaran' => $this->string(),
            'dasar_hukum' => $this->string(),
            'gambaran_umum' => $this->string(),
            'penerima_manfat' => $this->string(),
            'strategi_capaian_keluaran' => $this->string(),
            'metode_pelaksanaan' => $this->string(),
            'tahapan_pelaksanaan' => $this->string(),
            'waktu_pelaksanaan' => $this->string(),
            'kurun_waktu_keluaran' => $this->string(),
            'biaya' => $this->string(),
            'penanggung_jawab_nama' => $this->string(),
            'penanggung_jawab_nip' => $this->string(),
        ]);

        $this->createTable('{{%instansi}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->integer(),
            'id_unit_eselon' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%program}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%sasaran_program}}', [
            'id' => $this->primaryKey(),
            'id_program' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%indikator_kinerja_program}}', [
            'id' => $this->primaryKey(),
            'id_sasaran_program' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%kegiatan}}', [
            'id' => $this->primaryKey(),
            'id_program' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%sasaran_kegiatan}}', [
            'id' => $this->primaryKey(),
            'id_kegiatan' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%indikator_kinerja_kegiatan}}', [
            'id' => $this->primaryKey(),
            'id_sasaran_kegiatan' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%kak_indikator_kinerja_program}}', [
            'id' => $this->primaryKey(),
            'id_kak' => $this->integer()->notNull(),
            'id_indikator_kinerja_program' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%kak_indikator_kinerja_kegiatan}}', [
            'id' => $this->primaryKey(),
            'id_kak' => $this->integer()->notNull(),
            'id_indikator_kinerja_kegiatan' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%kak_keluaran}}', [
            'id' => $this->primaryKey(),
            'id_kak' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
        ]);


        $this->batchInsert('user', ['id','username','password','status_aktif','id_role'],[
            [ 1, 'dashboard','$2y$13$5Myme6HMZNEDxaHsZEZtOeR2HpNXgDh7dLdGqHKkEs3iM3oM9NAOu',1,1],
        ]);


        return true;
    }

    public function down()
    {
        $this->dropTable('user');
        $this->dropTable('kak');
        $this->dropTable('instansi');
        $this->dropTable('program');
        $this->dropTable('sasaran_program');
        $this->dropTable('indikator_kinerja_program');
        $this->dropTable('kegiatan');
        $this->dropTable('sasaran_kegiatan');
        $this->dropTable('indikator_kinerja_kegiatan');
        $this->dropTable('kak_indikator_kinerja_program');
        $this->dropTable('kak_indikator_kinerja_kegiatan');
        $this->dropTable('kak_keluaran');
        return true;
    }
}

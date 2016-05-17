<?php

use yii\db\Migration;

class m160517_085320_insert_admin_user extends Migration
{
    public function up()
    {
        // insert ADMIN account
        $this->insert('user', array(
                    'username' => 'admin',
                    'auth_key' => 'bwCxoHmtAgn3lua8qN2FBmfFXgxhei-T',
                    'password_hash' => '$2y$13$t.dNEsNbpwjsptcYk6sz/eq0qUfmRW47FLFVszzNlGBhQ0KiQLRQe', //asdf1234
                    'email' => 'armand@myvisuallistings.com',
                    'status' => '10',
                    'created_at' => time(),
                    'updated_at' => time()
        ));
    }

    public function down()
    {
        $this->delete(
            'user',"username = 'admin'"
        );
    }

}

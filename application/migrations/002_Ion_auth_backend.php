<?php

/**
 * Fecha:   20.07.2020
 * Autor:   Andrés Hume
 * Descripción:
 * Esta migración se ocupa de generar las tablas correspondientes al framework de autenticación
 * Ion_Auth. Además inserta los primeros registros que son necesarios para que el framwork de
 * autenticación funcione correctamente.
 *
 * Class Migrations_Ion_auth_backend
 */

class Migration_Ion_auth_backend extends CI_Migration {

    public function up() {
        $this->load->database();

        # Creación de tablas
        $this->db->query("CREATE TABLE `Grupos` (
                                  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
                                  `name` varchar(20) NOT NULL,
                                  `description` varchar(100) NOT NULL,
                                  PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE `Usuarios` (
                 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                 `ip_address` varchar(45) NOT NULL,
                 `username` varchar(100) NULL,
                 `password` varchar(255) NOT NULL,
                 `email` varchar(254) NOT NULL,
                 `activation_selector` varchar(255) DEFAULT NULL,
                 `activation_code` varchar(255) DEFAULT NULL,
                 `forgotten_password_selector` varchar(255) DEFAULT NULL,
                 `forgotten_password_code` varchar(255) DEFAULT NULL,
                 `forgotten_password_time` int(11) unsigned DEFAULT NULL,
                 `remember_selector` varchar(255) DEFAULT NULL,
                 `remember_code` varchar(255) DEFAULT NULL,
                 `created_on` int(11) unsigned NOT NULL,
                 `last_login` int(11) unsigned DEFAULT NULL,
                 `active` tinyint(1) unsigned DEFAULT NULL,
                 `first_name` varchar(50) DEFAULT NULL,
                 `last_name` varchar(50) DEFAULT NULL,
                 `company` varchar(100) DEFAULT NULL,
                 `phone` varchar(20) DEFAULT NULL,
                 PRIMARY KEY (`id`),
                 CONSTRAINT `uc_email` UNIQUE (`email`),
                 CONSTRAINT `uc_activation_selector` UNIQUE (`activation_selector`),
                 CONSTRAINT `uc_forgotten_password_selector` UNIQUE (`forgotten_password_selector`),
                 CONSTRAINT `uc_remember_selector` UNIQUE (`remember_selector`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE `Usuarios_Grupos` (
                                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                                `user_id` int(11) unsigned NOT NULL,
                                `group_id` mediumint(8) unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `fk_users_groups_users1_idx` (`user_id`),
                                KEY `fk_users_groups_groups1_idx` (`group_id`),
                                CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
                                CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
                                CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `Grupos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE `Login_Attempts` (
                                  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                                  `ip_address` varchar(45) NOT NULL,
                                  `login` varchar(100) NOT NULL,
                                  `time` int(11) unsigned DEFAULT NULL,
                                  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

        # Inserción de primeros registros
        $this->db->query("INSERT INTO `Grupos` (`id`, `name`, `description`) VALUES
                                (1,'admin','Administrator'),
                                (2,'members','General User');");
        $this->db->query("INSERT INTO `Usuarios` (`id`, `ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES ('1','127.0.0.1','administrator','$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');");
        $this->db->query("INSERT INTO `Usuarios_Grupos` (`id`, `user_id`, `group_id`) VALUES
                            (1,1,1),
                            (2,1,2);");

    }

    public function down() {
        $this->load->dbforge();

        # droppear las tablas que se crearon en el paso anterior
        $this->dbforge->drop_table("Login_Attempts");
        $this->dbforge->drop_table("Usuarios_Grupos");
        $this->dbforge->drop_table("Grupos");
        $this->dbforge->drop_table("Usuarios");
    }
}



ALTER TABLE `pegawai` ADD FOREIGN KEY (`id_kelamin`) REFERENCES `gender`(`id_kelamin`) ON DELETE NO ACTION ON UPDATE NO ACTION; ALTER TABLE `pegawai` ADD FOREIGN KEY (`id_kota`) REFERENCES `asal`(`id_kota`) ON DELETE NO ACTION ON UPDATE NO ACTION; ALTER TABLE `pegawai` ADD FOREIGN KEY (`id_status`) REFERENCES `status`(`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;
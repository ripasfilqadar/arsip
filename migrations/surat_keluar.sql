CREATE TABLE `waris`.`surat_keluar` ( 
    `id` int AUTO_INCREMENT NOT NULL, 
    `perihal` varchar(2000) NOT NULL, 
    `description` text NOT NULL, 
    `no_surat` varchar(1000) NOT NULL, 
    `tanggal_surat` datetime NOT NULL, 
    `tujuan` varchar(3000) NOT NULL, 
    `created_date` datetime NOT NULL, 
    `deleted_date` datetime NULL, 
    `file_surat` varchar(3000) NOT NULL,  
    PRIMARY KEY (`id`)
)

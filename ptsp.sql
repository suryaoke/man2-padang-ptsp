-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `laravelcontoh` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `laravelcontoh`;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `gurus`;
CREATE TABLE `gurus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_gr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_gr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `informasi_surats`;
CREATE TABLE `informasi_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tujuan_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_naskah` int(11) DEFAULT NULL,
  `no_agenda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `informasi_surats` (`id`, `tujuan_surat`, `perihal`, `id_naskah`, `no_agenda`, `tgl_surat`, `no_surat`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	'1',	'demam',	1,	'55',	'11 Jul, 2024',	'011',	'1',	NULL,	1,	NULL,	'2024-07-11 07:06:47',	'2024-07-11 07:07:16');

DROP TABLE IF EXISTS `isi_surats`;
CREATE TABLE `isi_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `isi_surats` (`id`, `id_informasi`, `isi`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	1,	'<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>ff</p>\r\n</body>\r\n</html>',	NULL,	1,	1,	'2024-07-11 07:06:53',	'2024-07-11 07:07:16');

DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE `jabatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `jabatans` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5,	'Admin 👌',	1,	NULL,	'2023-02-26 01:38:48',	NULL),
(6,	'Kepala Sekolah',	1,	NULL,	'2023-05-22 21:21:52',	NULL),
(7,	'Wakil Kepala Sekolah',	1,	NULL,	'2023-05-22 21:22:10',	NULL),
(8,	'Verifikator',	1,	1,	'2023-05-22 22:09:13',	'2023-05-22 22:09:21');

DROP TABLE IF EXISTS `lampiran_surats`;
CREATE TABLE `lampiran_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `mapels`;
CREATE TABLE `mapels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ruangan` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_100000_create_password_resets_table',	1),
(2,	'2019_08_19_000000_create_failed_jobs_table',	1),
(3,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(4,	'2023_02_25_043411_create_jabatans_table',	1),
(5,	'2023_02_25_095146_create_gurus_table',	1),
(6,	'2023_02_26_061253_create_users_table',	1),
(7,	'2023_02_26_111906_create_mapels_table',	1),
(8,	'2023_02_27_063241_create_surat_masuks_table',	1),
(9,	'2023_02_28_045333_create_surat_masuk_terkirims_table',	1),
(10,	'2023_03_03_023525_create_surat_masuk_disposisis_table',	1),
(11,	'2023_03_03_045456_create_naskahs_table',	1),
(12,	'2023_05_25_143059_create_tamus_table',	1),
(13,	'2023_05_29_150312_create_tujuan_surats_table',	1),
(14,	'2023_05_29_150501_create_lampiran_surats_table',	1),
(15,	'2023_06_02_150618_create_tembusan_surats_table',	1),
(16,	'2023_06_04_041442_create_verifikasi_surats_table',	1),
(17,	'2023_06_04_152626_create_informasi_surats_table',	1),
(18,	'2023_06_04_152810_create_isi_surats_table',	1),
(19,	'2023_06_06_143248_create_tanda_tangan_surats_table',	1);

DROP TABLE IF EXISTS `naskahs`;
CREATE TABLE `naskahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `naskahs` (`id`, `isi`, `nama`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	'<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>ff</p>\r\n</body>\r\n</html>',	'contoh',	NULL,	1,	NULL,	'2024-07-11 07:05:18',	NULL);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `surat_masuks`;
CREATE TABLE `surat_masuks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `asal_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perihal` text COLLATE utf8mb4_unicode_ci,
  `tgl_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `surat_masuk_disposisis`;
CREATE TABLE `surat_masuk_disposisis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sm` int(11) NOT NULL,
  `id_pengirim` int(11) DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_penerima` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `surat_masuk_terkirims`;
CREATE TABLE `surat_masuk_terkirims` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sm` int(11) NOT NULL,
  `id_pengirim` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tamus`;
CREATE TABLE `tamus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `individu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tamus` (`id`, `nama`, `jabatan`, `individu`, `tujuan`, `no_hp`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	'tamu 1',	'Instansi',	'kepala madrasah',	'ribut',	'083182718860',	'1',	NULL,	1,	NULL,	'2024-07-11 07:05:55',	'2024-07-11 07:06:04');

DROP TABLE IF EXISTS `tanda_tangan_surats`;
CREATE TABLE `tanda_tangan_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tembusan_surats`;
CREATE TABLE `tembusan_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tujuan_surats`;
CREATE TABLE `tujuan_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tujuan_surats` (`id`, `id_informasi`, `id_user`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	1,	'surya',	NULL,	1,	NULL,	'2024-07-11 07:06:53',	'2024-07-11 07:06:53');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `username`, `profile_image`, `jabatan`, `role`, `ttd`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Surya Sahputra',	'suryasahputra07@gmail.com',	'surya123',	'1768832051770345.jpg',	0,	'4',	'0',	NULL,	'$2y$10$JvrOj.Ppl.U1qx.5W5W9/uo9.vmKTgDwidZiPNAeXczJ94l8Ij7ku',	NULL,	'2023-02-25 23:14:42',	'2023-06-15 21:28:17'),
(2,	'Marliza,S.Pd.,M.Pd',	'kepsek@gmail.com',	'kepsek01',	'1768832037705245.jpg',	6,	'1',	'1768832037756817.png',	NULL,	'$2y$10$bQkQZl5PxaHmvVIyUuyWZuMrEuNGA5aZbQyeCef.f.XW3PyZ/4xg2',	NULL,	'2023-04-10 23:52:19',	'2023-06-15 21:28:04'),
(3,	'Ridafdal',	'Wakil@gmail.com',	'wakil',	'1768832021903682.JPG',	7,	'2',	'0',	NULL,	'$2y$10$GapT504bWfB6rM/4l1DK8.RbBI47wK4MxrzWqoispL41W4PHcv76y',	NULL,	'2023-04-11 08:00:17',	'2023-06-15 21:27:49'),
(4,	'Yasnimarlis',	'verifikator@gmail.com',	'verifikator',	'1768832002092560.JPG',	8,	'3',	'0',	NULL,	'$2y$10$5eHVCX7BRxbgyYiBoqZpn.HcUcQIaB/jtFXgK3CgsBsIHOoVBqABy',	NULL,	'2023-05-27 23:22:39',	'2023-06-15 21:27:30'),
(6,	'Amri J',	'wakil01@gmail.com',	'wakil01',	'1768832011865297.JPG',	7,	'2',	'0',	NULL,	'$2y$10$jd6g7MHVvcQPODCARL5xzuPoGuWx3h4ENJm3DbXbOYQbHqMJxsvQa',	NULL,	'2023-06-15 07:48:17',	'2023-06-15 21:27:39');

DROP TABLE IF EXISTS `verifikasi_surats`;
CREATE TABLE `verifikasi_surats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_informasi` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `verifikasi_surats` (`id`, `id_informasi`, `id_user`, `status`, `ket`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1,	1,	4,	'0',	'-',	NULL,	1,	NULL,	'2024-07-11 07:07:16',	'2024-07-11 07:07:16');

-- 2024-10-04 16:40:26

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `error_technologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_users`
--

CREATE TABLE `my_users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_users`
--

INSERT INTO `my_users` (`user_id`, `full_name`, `email`, `password`, `created_by`, `is_admin`, `created_on`) VALUES
(1, 'Admin', 'admin@gmail.com', 'ef622a70d7927bab746a7d9f0335d22fadc2e0d2a048a3ea8adcb4c6b4c38ada634cefd1bbbb99988936dcc6e633f5e52c8f147653e7f627e8c28df6bf154c70DP4jyFzc00YD2XyfANAo6rM7/elM3tu8LgOpAsR9s0A=', 1, 1, '2021-06-03 10:26:59'),
(2, 'Rohan Sharma', 'rohan921310@gmail.com', 'ef622a70d7927bab746a7d9f0335d22fadc2e0d2a048a3ea8adcb4c6b4c38ada634cefd1bbbb99988936dcc6e633f5e52c8f147653e7f627e8c28df6bf154c70DP4jyFzc00YD2XyfANAo6rM7/elM3tu8LgOpAsR9s0A=', 1, 1, '2021-06-03 10:27:58'),
(10, 'Rajesh', 'sharmarajesh1077@gmail.com', '7462ce44a1173cc195305b2a5bc5f0d69b23114034372fce9e675aec3a3a201828c336fb696c672cb2c2bb2da690fafcce737d73be2950630f270b57b1a3416dxnhSCrunP2cdIsOxblGyRg3oDiGUa/6x1RcsFeqdBIk=', 1, 0, '2021-06-04 12:03:11'),
(11, 'rohan', 'rohan@gmail.com', '2d31e3350bdad99da8298dceb87ac39fc63a44a5ca138092ba32ba6b6bfc5a572b99b819894e7df87f1679e1cbed7373047cf09250d9691808bd5ab9ed0100cb+T358U1ENrmihLaJQV1NNMa5xvkfx+a4XwywXdlOK+4=', 1, 0, '2021-06-04 12:03:15'),
(12, 'Rajesh', 'sharmarajesh1077@gmail.com', 'da17f17cfac70665c95e481a850b6be0b74036a89de3bbcc2cdc774d41a55adb2ca5ece51cfb8ac94c810fe3e370346e78401b144b20e9d857c13d1dac772a2aRG04Dso+agzoDaqiWeqRu1OmnN7cGBLl6ZdtqWPTCik=', 1, 0, '2021-06-04 12:05:56'),
(13, 'rohan', 'rohan@gmail.com', 'a6e8370865a926eadc194c49d1bc7b3053d3fbd5bb07b9bfaf29341e836e6fae0a2fcf6dd296e6a1cc3c2b440a0fccccd0cafcbb3bb2980860283755329d217cyUnkfuWgbmWY/DxZ7+H0gIJ7c1/XeHBcXdc/IaLdp7c=', 1, 0, '2021-06-04 12:05:59'),
(14, 'Rajesh', 'sharmarajesh1077@gmail.com', '097487efc0eacf9c83a9673cdf622b90cb38b26b29b496a28ab8ee843c206c784455c0d436dbf728e8ecd608498c9357cdec515d0340787b086941eea96a74bfJhhuZRn8M8vZBtvPfD0+QpJkW6xPyRMux8cRGeLoZIM=', 1, 0, '2021-06-04 12:11:59'),
(15, 'rohan', 'rohan@gmail.com', 'cffe88db962dbad82751d3ea8d566b2526a1ed6b85342755699d7dcf4ac2edd677b1d64a0c4ef36a1cfa9461a1c01ed41490c13ef9babc1d08a42260a645ce86FSLPyKgB/nECpXhuCR+AjP8AcNrXKoIHieGl+tQUdlc=', 1, 0, '2021-06-04 12:12:03'),
(16, 'Rajesh', 'sharmarajesh1077@gmail.com', 'a2e4273308a19660f920e3fcef438cb2a6260d4212d2805fca9927016334ef78b2bb845c86bec160bac303f2432fa878141d0ea180d0f250250876dead5d7700ZnDVyvK5vvxGKb5Or6RCiWRhgxGEdNkY5um63heZBiQ=', 1, 0, '2021-06-04 12:13:11'),
(17, 'rohan', 'rohan@gmail.com', 'b30efbd53685c17eb86b8cb34ac605adbe284f94cfb70be95c496756c6b8e9cf87a9ac1d2ceb6fb23b5532083a4a724c27529e1e819c01f404a594a9f98c31e5kk88f2skuuTrFyzGfGuFLGKoWFdwPFWxsWxXTg1OZoI=', 1, 0, '2021-06-04 12:13:15'),
(18, 'Rajesh', 'sharmarajesh1077@gmail.com', '6cf44932901d694eb938e2219df334cb21df7c214028e11bdccef86a52b79cd863d541fba23c7e00527e4b371b2ce84f50bbdafa1944550d28638937d5093185XAqKeRn7R1dPsqREZl9wkOD+4btuCZ83g2ncpKkxsEs=', 1, 0, '2021-06-04 12:14:47'),
(19, 'rohan', 'rohan@gmail.com', 'dde238f8e9ce5b8b44b3957b1193cb9b107950905fddcbffe2369610776e1e1b99156e851c39cc3926154c617e6f2d3d4f5fb3499177bb80e6aa98056c7eef7d3o6SdZ0Sp+9AjBTe8A4Vcvwj7jI0Dcrz30Mw7DuKImA=', 1, 0, '2021-06-04 12:14:51'),
(20, 'Rajesh', 'sharmarajesh1077@gmail.com', 'ba25fa2d974fe4fb1610e9aa9186aaeb8cecddf25b75515e724880afb8d3c6c53be206d1be7967ec343ee29200645629bc796d34e7c513ec787c3e228d6d0d8fhALal/TpZN59C73Qjm9juomcKiS79gxYKdyr8qIyUOw=', 1, 0, '2021-06-04 12:15:17'),
(21, 'rohan', 'rohan@gmail.com', '35ea5a9b1ddf5ebe9b6272ef62f64cad77f4d69d4a00bcdfd77b20a18fd664bc71d2b52a6b42732fd2fed3288437c1f7811bac01b3003a3f2d8ad5924f6e7cb9t7vg279O1rndDJsid36zMOgVc2bCcwJV/F8oEInAOW8=', 1, 0, '2021-06-04 12:15:20'),
(22, 'Rajesh', 'sharmarajesh1077@gmail.com', 'db4b02b6a95f488e60d020276d7ef6580895153e8fda8e301552f200b70996915f34140e21887261d6ca072d730aef338ba25165b2cfbdd9ed481ffc64fb48b38eWe9zYa/uBGJrOIUJ/e6D8sBzc3D06eVSSlucGMtVI=', 1, 0, '2021-06-04 12:17:37'),
(23, 'rohan', 'rohan@gmail.com', '5dce3981d595fda731869f0f4efd2f992ebabd17978567fbf9995199e2db9db4b6151b07b5a3c3da40a33c710e05d1fd1f3a9e56b170a554f80472e18061b47dhn8zwfXullrLna2mf9fuTdUeG3NlAEZ5KOi7bL79wyQ=', 1, 0, '2021-06-04 12:17:39'),
(24, 'Rajesh', 'sharmarajesh1077@gmail.com', '66fb090a6426cc76f5a14521bd6d6dc7bbe09f88d97ff404b6a1a848fc06603caa0f58f0f6d284aa79957667006b95cdeddb2d34455f6da54d8ddedcb3ff49bf59E8o6VZgJitHWRRltWmRDU3UZgEstneqSyuvdaM44M=', 1, 0, '2021-06-04 12:23:04'),
(25, 'rohan', 'rohan@gmail.com', '3803b59e2be9c1e44753a9295cd18a58562682c6e09a1e92af817840af4e59f454994d16f2651c6b4462307fd847efff73693bde09139667e4487134f39bdddbISjb+Uts0kwnFOxpqtuvtif8Tnwh02oFlsBDlO+DHL0=', 1, 0, '2021-06-04 12:23:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

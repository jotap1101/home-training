-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2023 às 16:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hometraining_db`
--
CREATE DATABASE IF NOT EXISTS `hometraining_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hometraining_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Table of contact';

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `user_id`) VALUES
(15, 'Maria Clara', 'mariaclara@gmail.com', 'ola, boa tarde', 16),
(19, 'Sofia Vitoria', 'sofiavaguiar12@gmail.com', 'qualquer coisa', 41),
(7, 'erik', 'erik@gmail.com', 'parabÃ©ns pelo trabalho', 9),
(8, 'Renato', 'renato@gmail.com', 'ParabÃ©ns', 10),
(9, 'Veridiane', 'veridiane@gmail.com', 'OI', 11),
(17, 'Fabiana', 'fabi.ribeiro@hotmail.com', 'Adorei o site de vocÃªs, serÃ¡ muito Ãºtil pra mim que nÃ£o acho um tempo pra ir a academia. ParabÃ©ns.', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `series` int(11) NOT NULL,
  `repetitions` int(11) NOT NULL,
  `pause` time NOT NULL,
  `example` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `exercise`
--

INSERT INTO `exercise` (`id`, `name`, `series`, `repetitions`, `pause`, `example`) VALUES
(2, 'Abdominal', 2, 20, '00:00:30', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/T6rjxLP0S_U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Agachamento Livre', 3, 20, '00:00:30', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KkU9m878Q20\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `physical_data`
--

CREATE TABLE `physical_data` (
  `id` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_profile` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Table of users';

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `image_profile`, `usertype`, `registration_date`) VALUES
(1, 'Joao', 'joao@gmail.com', '$2y$10$tVTUijUiniNXoafuc43e0.M9YHNCoDQ8/MagE8p4h53cSnT6AMXKi', '', 'admin', '2022-06-28 03:06:11'),
(2, 'Fabio', 'fabio@gmail.com', '$2y$10$87sZU/caT0ieLnd8.v8XYekKg2f3SRcjap1L/3Lt1whYWbtTqy/p.', '', 'admin', '2022-06-28 03:08:17'),
(3, 'Vantuil', 'vantuil@gmail.com', '$2y$10$8YkMWyOnN3JEimBSjNBPWeqdkJXpDOE645YUnxiiNlfYVN7da8XEW', '', 'admin', '2022-06-28 03:10:28'),
(4, 'Lucas', 'lucas@gmail.com', '$2y$10$gw4aBgdB7jynAmqaCTSH3.0ySty5dpUutVEbgUFfhk/fA/soWsrEK', '', 'admin', '2022-06-28 03:11:19'),
(5, 'Paulo', 'paulo@gmail.com', '$2y$10$bmqM.Ag8Kj0E9QsRFypWc.4lxHxlcRO9ncagEABOeb9Qd9kipQesm', '', 'admin', '2022-06-28 03:11:43'),
(6, 'User', 'user@gmail.com', '$2y$10$iXJrAO4ZEM09P9WNCP86HOWVPRZKQirALa6D9yLQFUq/X7TuWkaca', 'Screenshot_20220221-224429.png', 'user', '2022-06-28 03:14:18'),
(8, 'Pedro', 'pedro@gmail.com', '$2y$10$A2CKde3FFSLiK/NeTOogjuDUGGvtYMRFxlP4f8Kqf2kyZYSG2J0nC', '', 'user', '2022-06-28 16:20:49'),
(9, 'erik', 'erik@gmail.com', '$2y$10$4/uvU40xW7cX3xhE1ix/PuMuonlPiql2cIiWQxtbHCh54zXWCKsba', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 16:31:57'),
(10, 'Renato', 'renato@gmail.com', '$2y$10$yroVx88qHwUXW3wSVY.bp.CbJ/Mz3tcUQIjEnzcFwYEVQv852EURG', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 16:40:01'),
(11, 'Veridiane', 'veridiane@gmail.com', '$2y$10$u2dq/heDznGjjLlNR1qAhOxVjwJp8JVkMG1t9.7KMwLAwl3.F0UO6', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 16:55:16'),
(12, 'Luis', 'luis@gmail.com', '$2y$10$sRP/c/zInsezu.TD6LbRgea13xeiQGARekKAXDK7ndnh9pbII.M1a', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 17:06:19'),
(13, 'Giuliana Carvalho', 'giu@gmail.com', '$2y$10$GzVTDteSGIi7DGsAbCN6Jek5LtJo153rrvTXjb9kNq7OxMNMI8PmG', '', 'user', '2022-06-28 17:29:07'),
(14, 'Samuel', 'samuel@gmail.com', '$2y$10$pjPpmhqEGIWB6bEmafx8YenQpTAOXoVZ7VD689HBFWk2q7tSsUFLC', 'ff81fba05b3e32867d1fd7ed7316fdee.png', 'user', '2022-06-28 17:37:33'),
(15, 'Ana Clara', 'anaclara@gmail.com', '$2y$10$IGzzVrmX30Z.ngiGWYUmE.bxZvHtAD.MI3oJZrlPup4l0z1lAwX4m', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 18:05:19'),
(16, 'Maria Clara PossidÃ´nio', 'mariaclara@gmail.com', '$2y$10$5s3Xfbt0eRnNeuXeeaRi9.qPVz0zY1n3EC.5VGMbjpLKEonsAkD12', '5307ef37224391.57397a56d79da.jpg', 'user', '2022-06-28 18:24:50'),
(17, 'ana luisa', 'ana@email.com', '$2y$10$TnkeF5mNJk/MSFwhK3/ON.NX/1iyBymQCZIvFVxAJaQN11NP6/q2y', '', 'user', '2022-06-28 18:32:45'),
(19, 'Lucas Raphael', 'lucasmbhta@hotmail.com', '$2y$10$6KLbnMY5pO41h3E7lj3Mle/1kT.hwUS5xZwR45pXOloZNL5pHNkMi', '', 'user', '2022-06-29 19:14:40'),
(20, 'Guilherme', 'guilherme@gmail.com', '$2y$10$VX9NeQeWsTwZqT4D1gAoKu.ZL1iE5ljPju5rpjwVJ0Wsr2y8kmnQO', 'cdsc.jpg', 'user', '2022-07-12 18:46:10'),
(21, 'Abc', 'abc@gmail.com', '$2y$10$.1e.zQ4430PWbmwyyjfDTOky5XRqoDgrKQNLHhZxmlgUZVc5kkxda', '', 'user', '2022-08-10 13:23:44'),
(22, 'Adriano Leite', 'leitinhomotos@yahoo.com.br', '$2y$10$Hp8k1uWFuIuQkgmjAPoQZOuKR2nidr./IYs8BARBY/rkQubyKjvM.', '', 'user', '2022-08-10 14:02:06'),
(23, 'Junior karuncho', 'karunchosonora@hotmail.com', '$2y$10$Pc1qGhmXniS4NQlMMDurjOBWwVHsdK53edonaqSy1qJDPFcco5fX6', '', 'user', '2022-08-10 14:32:29'),
(24, 'Nicolas Carvalho de Paula', 'nicolascvgamervkcn@gmail.com', '$2y$10$d0jHoOuvSxhKdzAV5tM6rOqwyodx4/XxEoPPdfkXldutihto8Axnu', '', 'user', '2022-08-10 15:17:43'),
(25, 'Fabiana Ribeiro de Paula', 'fabi.ribeiro@hotmail.com', '$2y$10$/EbYqjuouq8L/KZkC1fFmeNAW5e0f7NLAYI3Ta9pjf1pjDkoIUr0i', '', 'user', '2022-08-10 20:59:42'),
(26, 'sussurros na floresta', 'fabiovaleriano1313@gmail.com', '$2y$10$calPAQ7w9rxDjwNwaGVPQuCur1Wq0cyjFpk5d/YTYs3h2pc4gECq.', '', 'user', '2022-08-17 11:36:47'),
(27, 'BRUNO JOSE VALERIANO', 'bruno.valeriano11@gmail.com', '$2y$10$/r5RTy5njLZ3tFgaluXE8.Niy8GKztU4MV/TqDpgOsFVqFxlZqQaq', '', 'user', '2022-08-17 11:46:58'),
(28, 'Luis Felipe', 'silvaluisfelipe023@gmail.com', '$2y$10$anuC4MWljb2kLY9rgPsR1.xaOY99S.a84fi9kpXzjwU/.iKfWEg0q', '', 'user', '2022-08-17 12:36:49'),
(29, 'LavÃ­nia', 'laviniav30@gmail.com', '$2y$10$vJyRNjTRrhOLVvIB3TZVEOYcmFDNsv9lo783u1rCqaiY1od43IfdS', '', 'user', '2022-08-17 12:50:09'),
(30, 'Ana Julia Marques', 'anajuliaferreira786@gmail.com', '$2y$10$GbKpFagbbHPo0hTPynzzQuvcV0GXlxG1XWC8cpEQDvK2fAbeF4Bu6', '', 'user', '2022-08-17 12:50:09'),
(31, 'Larissa', 'larissafigsilva@gmail.com', '$2y$10$YVS4TnkiN9jzikZ30t8VDeGZ48/orzvE2JtGYbgQJyRcdEDAuQH7e', '', 'user', '2022-08-17 12:50:51'),
(32, 'Michael Douglas', 'michaeldouglas.toco@gmail.com', '$2y$10$FX0yENnU1pz27szjvwKJ2uo29Az80VQpSKcZq9V0ziMLaErxHcWS.', '', 'user', '2022-08-17 13:08:37'),
(33, 'Marcelo Costa', 'marolofut1@gmail.com', '$2y$10$rJ17vFlyLeKuIAz2tnkqpOBD.59byecebJZOSTl0kLbw.24XmFFNS', '', 'user', '2022-08-17 14:54:30'),
(34, 'Lorrana', 'lorranadomingues854@gmail.com', '$2y$10$Ku9W.NvZASIda2X6bOYLJ.dl7/r8F2fD6zTrwfMHzOKBM4vqsd5xe', '', 'user', '2022-08-17 15:34:41'),
(35, 'LetÃ­cia valeriano', 'valerianoleh@gmail.com', '$2y$10$pf2MTjYx2cbads2xrmCKhOVPx8g0y2rH2YTGUsKAFej.mgR5s6s7O', '', 'user', '2022-08-17 16:21:56'),
(36, 'Eric', 'eric@gmail.com', '$2y$10$UHC3KLbwAhw9PE7tiEVMFuC11a9fBRl2pdfqG3S76BvCE7LT5ujhi', '', 'user', '2022-08-19 10:56:40'),
(37, 'Marcos Paulo â¤ï¸', 'marcosmpcde941@gmail.com', '$2y$10$S.PC7PZcwZY4Qq818GNY0OLEDPByxjKMchkbvyhy7Pz/TTPa28Q0C', '596C567D-7548-4BEE-9DD5-AA808766E21D.jpeg', 'user', '2022-08-19 14:37:32'),
(38, 'CauÃª de Oliveira Soares', 'freeza1x@gmail.com', '$2y$10$39aATZhSzzQc2ntxQFolgecNTFgBFVG4RQnZ8yPaaiiJvrInGd.Du', '', 'user', '2022-08-19 17:39:14'),
(39, 'Erik Torres', 'fabiovaleriano9@gmail.com', '$2y$10$cYP/MYkmbjNsWoQMb7bDX.NireH1sH5PagTKmJxFMerzAAASJzi1.', '', 'user', '2022-09-12 12:25:47'),
(40, 'Anita Ilanah Silva', 'anitasilvanr@gmail.com', '$2y$10$tWzMfGkZKl9suPzJB.qRX.DGaxabkR06UePONY6xfaz.hXiqjp28K', '', 'user', '2022-09-16 11:55:21'),
(41, 'Sofia Vitoria', 'sofiavaguiar12@gmail.com', '$2y$10$HXfjaBhkQk8D02aEPRS26.16amcgv/M2YLDlbWTlJbykYey7h3d8e', '', 'user', '2022-09-25 00:40:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `physical_data`
--
ALTER TABLE `physical_data`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `physical_data`
--
ALTER TABLE `physical_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

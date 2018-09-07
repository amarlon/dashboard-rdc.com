-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 07, 2018 at 05:06 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(5) UNSIGNED NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `img_news`
--

CREATE TABLE `img_news` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `data` date NOT NULL,
  `id_ref` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20180722143514);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_n` int(11) NOT NULL,
  `text` text NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'av.jpg',
  `date` datetime NOT NULL,
  `ref_users` varchar(255) NOT NULL,
  `img_delete` tinyint(1) DEFAULT '0',
  `link` text NOT NULL,
  `subjet` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_com`
--

CREATE TABLE `news_com` (
  `id_nn` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `id_ref_n` varchar(60) NOT NULL,
  `av_users` text NOT NULL,
  `users` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `lang` varchar(40) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'assets/images/avatar.png',
  `profession` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `about` text,
  `website` text,
  `gallery_desc` text,
  `password` text NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_origin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `image` text,
  `image_bytes` int(10) UNSIGNED NOT NULL,
  `image_public_id` text,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(4) NOT NULL DEFAULT 'Fr',
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `img_news`
--
ALTER TABLE `img_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_n`);

--
-- Indexes for table `news_com`
--
ALTER TABLE `news_com`
  ADD PRIMARY KEY (`id_nn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_news`
--
ALTER TABLE `img_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `news_com`
--
ALTER TABLE `news_com`
  MODIFY `id_nn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

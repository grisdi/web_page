-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2024 at 04:49 PM
-- Server version: 10.11.6-MariaDB-0+deb12u1
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `veeb`
--

CREATE TABLE `veeb` (
  `id` int(11) NOT NULL,
  `pealkiri` varchar(100) NOT NULL,
  `tekst` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `aeg` datetime NOT NULL,
  `pildi_aadress` varchar(500) DEFAULT NULL,
  `minust` text DEFAULT NULL,
  `kontakt_email` varchar(100) DEFAULT NULL,
  `kontakt_telefon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veeb`
--

INSERT INTO `veeb` (`id`, `pealkiri`, `tekst`, `autor`, `aeg`, `pildi_aadress`, `minust`, `kontakt_email`, `kontakt_telefon`) VALUES
(1, 'Kuidas teha nisujuuretist?', 'How To Make Sourdough Starter Day 1:\r\n\r\nOn day one, mix one cup of flour and one cup filtered water. Stir vigorously, making sure to scrape down the sides and incorporate everything. Place a clean tea towel over the bowl and set aside. Allow it to sit for 24 hours.\r\n\r\nDay 2:\r\nOn day two, discard half of the mixture and repeat the process. Add one cup flour, one cup water, stir vigorously, and cover.\r\n\r\nWhy do you have to remove half the mixture? By day four, you would have sourdough starter overflowing from your bowl. Also, removing half ensures that the right amount of flour and water is feeding the growing colony of beneficial yeast. If you weren’t discarding half, the cup of flour wouldn’t be enough to feed them on days three and four. Basically, you would end up with a lot of extra starter by the end of the process, and none of it would be mature.\r\nDay 3-5\r\n\r\nRepeat the day two instructions for days three, four, and five.\r\nDay 6-7\r\n\r\nOn days six and seven, do the same but feed it every 12 hours, instead of every 24.\r\n\r\nBy day seven, there should be enough beneficial bacteria and yeast present to bake sourdough bread and other fermented sourdough goodies, like pancakes and english muffins.\r\n\r\nYou will know it’s working if it bubbles, and doubles in size.', 'Lisa Bass', '2024-05-06 15:54:56', 'https://www.farmhouseonboone.com/wp-content/uploads/2021/05/sourdough-starter-12-683x1024.jpg', NULL, NULL, NULL),
(2, 'Kuidas teha hapusaia?', 'Vaja läheb\r\n\r\n160-250g juuretist\r\n500g vett\r\n700 g nisujahu (kasutan 405 jahu või 550 jahu või täistera jahu, segan neid omavahel. Endale sobiva segu leiad ajaga, ei ole ühte ja õiget.)\r\n1 tl soola\r\n\r\nJa ongi kõik!\r\n\r\nNagu ma olen juba korduvalt maininud, et mulle meeldib võimalikult lihtsalt asju teha, siis mina segan taigna valmis taignasegajaga. Kulub vähem aega, taigen saab õige ning masin teeb suurema töö ära.\r\n\r\nVajalikud abivahendid:\r\n\r\nTaignasegaja\r\nKergitamiseks korv või kauss\r\nKaanega malmpott (saab ka potita, kuid kuna sai vajab esimesed umbes 20 minutit käredat kuuma, siis suudab seda pööritada pöördõhk)\r\nPuhas käterätt\r\nKüpsetuspaber\r\n\r\nPane kõik koostisosad kaussi, lülita masin tööle alguses kõige madalamale kiirusele ning siis muudkui tõsta kiirust (väga kiireks ei saa panna, sest nt minu masin astub sel puhul laualt minema lihtsalt).\r\n\r\nSeda kõike saab teha ka käsitsi. Segada tuleb taigent seni, kui muutub läikivaks. \r\n\r\nLase taignal seista.\r\n\r\nVoltida võiks tainast umbes iga 30 minuti tagant ja nii umbes 6 korda. Teed käe veega märjaks ja sellest piisab (väga kuumadel päevadel olen kergitanud tainast külmkapis, kergem voltida ja ei kerki nii kiiresti üle).\r\n\r\nSiis jahutad käteräti jahuga üle, lappad taigna kenaks päsikeseks ning paned kergitusvormi või kaussi (kaussi pane ikka käterätt vahele) külmkappi kerkima, ideaalne temperatuur on 4-5 kraadi. Anna kerkida umbes 18 tundi (mina panen õhtul külma ja hommikul küpsetan).\r\n\r\nPane malmpott ahju ning ahi 230 kraadi peale soojenema. Nii, kui ahi on saavutanud temperatuuri 230, siis kummutad külmast võetud pätsikese küpsetuspaberile, jahutad kergelt (ehk puistad läbi sõela pätsi peale jahu), lõikad mustri peale ning tõstad pätsikese potti. Potile kaas peale ja ahju 20 minutiks.\r\n\r\nPeale 20 minutit võtad kaane maha, kui veab, siis on pätsike kerkinud vaat, et kaaneni.\r\n\r\nNüüd küpsetad kaaneta veel 20 minutit, kuniks pealt on ilus pruun.\r\n\r\nPeale seda keerad ahju kinni, avad natuke ahjuukse ning lased puhata veel oma 20 minutit. ', 'Triin', '2024-05-06 15:54:56', 'https://triinh.ee/wp-content/uploads/2020/10/20201030_150437-1024x498.jpg', NULL, NULL, NULL),
(3, 'Hakkliha-värskekapsahautis', 'Koostisosad:\r\n400 g kodust või veisehakkliha\r\n1 sl õli\r\n1 sibul\r\nveidi vett\r\n1 kg värsket kapsast\r\n2 porgandit\r\nsoola ja musta pipart\r\nhakitud värsket peterselli või tilli\r\n\r\nServeerimiseks:\r\nkeedetud kartulit\r\nhapukoort\r\n\r\nValmistamine:\r\nKuumuta potis veidi õli, lisa peeneks lõigatud kapsas ning jämedalt riivitud porgand. Kuumuta minut aega, siis lisa kuum vesi, kata pott kaanega ning hauta kapsas valmis. Sega aeg-ajalt.\r\n\r\nPrae pannil sibul ja hakkliha läbi, lisa peaaegu valmis kapsale. Hauta valmimiseni. \r\n\r\nMaitsesta soola, pipra ja rohke peterselliga.\r\n\r\nLisandiks keedetud kartulid.\r\n\r\nNipid ja soovitused:\r\nVee kogus oleneb sellest, kas tahad rohkem või vähem kapsaleent. Mina panen tavaliselt niipalju vett, et kapsad oleksid poolenisti kaetud. \r\nHautamise aeg oleneb kapsa vanusest, kapsatükkide suurusest, soovitus krõmpsusastmest jne. Minimaalselt pool tundi, keskmiselt tunnike.\r\n', 'Nami-nami', '2024-05-06 16:08:38', 'https://nami-nami.ee/files//recipes/3941/kapsahautis.jpg', NULL, NULL, NULL),
(4, '', '', '', '2024-05-06 16:38:33', 'https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEwL2xhdXJhc3RlZmFubzI2Nl8zZF9yZW5kZXJfY2hhcmFjdGVyX29mX2FfY2hlZl95b3VuZ2N1dGVfY2FydG9vbl8yYmMzNDVhYy1lNDk2LTQwZjMtOTQ4NC0yYjYxNjI0ZTBlZWNfMS5wbmc.png', 'Kokk Mart \r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus corrupti nostrum omnis et saepe quibusdam voluptatem fuga nam ad repellat! Sequi, quos iste. Minima saepe quas praesentium debitis quisquam quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque ipsum atque vitae odit ducimus dolorem illum, explicabo eius sed, incidunt quasi autem similique ratione neque aut saepe, soluta dignissimos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. \r\n      Vel voluptates iusto reprehenderit delectus quo voluptatem eos repellendus, voluptatum ab fugiat facilis aut placeat minus soluta dicta, repudiandae, earum dolore. Tempora?\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sit eveniet cumque eligendi illum eius voluptates maxime! Veritatis laboriosam accusamus minima provident nesciunt id sequi amet earum consectetur! Minus, eveniet.\r\n  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis itaque recusandae voluptatibus sequi fugiat eveniet ipsum soluta. Earum, voluptates cupiditate natus facilis cumque provident ex possimus eligendi explicabo adipisci.', 'kokk_mart@example.com', '+372 5885 8858');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veeb`
--
ALTER TABLE `veeb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veeb`
--
ALTER TABLE `veeb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

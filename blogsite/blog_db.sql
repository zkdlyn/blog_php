-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 01:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_entry`
--

CREATE TABLE `blog_entry` (
  `postID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_entry`
--

INSERT INTO `blog_entry` (`postID`, `title`, `content`, `userID`) VALUES
(17, 'haha hehe', 'blog entry haha hehe sampol', NULL),
(36, 'long text', 'Vivamus convallis nec erat in laoreet. Pellentesque sed sagittis eros, non tincidunt quam. Fusce consequat fringilla sem vitae ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi at vulputate tortor, vitae rutrum purus. Nulla vel ex turpis. Vivamus ultrices augue mauris, cursus tempor ex ultricies eget. Ut ut faucibus turpis, sed auctor ante. In quis venenatis massa. Aenean non dapibus erat. Ut aliquet orci ut mauris facilisis malesuada. Nullam bibendum elit sem, at bibendum odio feugiat et. Suspendisse convallis velit arcu, ultrices luctus turpis luctus in. Proin fermentum, neque non rhoncus commodo, nibh augue ultricies ligula, eget interdum ligula mauris sed nisi. Donec dignissim mi eu massa ultricies, sit amet fringilla nunc pharetra. Nam fringilla, massa eget dignissim eleifend, dui mauris rutrum magna, a hendrerit urna sem nec mi.\r\n\r\nPellentesque egestas efficitur lectus, a ornare risus dictum vel. Suspendisse sed nunc odio. Curabitur consequat id diam sed dapibus. Nullam condimentum ut mi in hendrerit. Quisque facilisis ultricies ornare. Maecenas tincidunt urna ut enim tristique, a tristique leo laoreet. Suspendisse in nibh ligula. Mauris vitae interdum odio. Vestibulum iaculis at orci id euismod. Nullam sagittis tristique arcu, ut laoreet metus sodales ut. Morbi euismod purus vitae velit venenatis, at pharetra arcu vulputate. Etiam metus nunc, lacinia eu consectetur et, interdum sit amet tellus. Integer scelerisque dictum hendrerit.\r\n\r\nCurabitur volutpat nulla sit amet metus vestibulum dapibus blandit nec sem. Quisque dictum tortor sit amet molestie laoreet. Vivamus mattis tempor orci, quis commodo eros venenatis sed. Nam nisl metus, efficitur id iaculis vel, maximus at quam. Donec luctus porta facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris vitae auctor risus, in vulputate velit. Curabitur imperdiet ornare dui at vehicula. Nam metus purus, aliquet ac enim eu, dapibus mollis quam. Ut gravida vel lectus a sodales. Phasellus dui magna, volutpat vitae ante eget, malesuada iaculis ligula.', NULL),
(38, 'title sample edit ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet lorem id justo congue dapibus id ut orci. Suspendisse tempus dolor non sagittis finibus. Aliquam pellentesque congue turpis, eu facilisis neque cursus vel. Proin porttitor finibus est, ac aliquet eros sagittis nec. Duis in diam aliquet, tristique elit vitae, egestas turpis. In eget accumsan nunc. Phasellus in lectus tellus. Mauris sit amet elit massa. Donec consequat lacus at aliquam gravida. Morbi dolor nisl, scelerisque eget gravida eget, bibendum vitae felis. Integer et leo id purus tincidunt ullamcorper ac vitae massa. Nam mollis et libero non tincidunt. Nullam non erat at nulla pellentesque lacinia. Curabitur pulvinar auctor libero, ac porta diam rhoncus ut.\r\n\r\nSed pretium dolor vel posuere ultricies. Nullam turpis arcu, volutpat lobortis leo non, fringilla scelerisque lectus. Nulla dui orci, elementum nec ullamcorper nec, pretium sagittis eros. Phasellus pretium nunc lacus, sed scelerisque lacus mattis porta. Integer non imperdiet elit, vel tristique arcu. Duis venenatis quis enim quis hendrerit. Morbi suscipit porta justo elementum porta. Etiam et ultrices lectus, tristique commodo nisi. In tempor dolor justo, ut vehicula odio pulvinar sit amet. Mauris euismod pulvinar orci rutrum malesuada. Aenean nec risus ultrices, tristique mauris sit amet, iaculis felis. Vestibulum egestas suscipit arcu non placerat. Aenean aliquet aliquet dapibus. Proin fringilla, magna ut condimentum ultricies, lorem turpis fringilla nibh, vitae semper tellus nunc eget dui. Quisque ut ornare est, non congue nulla.\r\n\r\nCras mi dui, accumsan maximus ligula nec, fermentum commodo justo. Nam egestas mi vel aliquam vehicula. Curabitur aliquet, elit a condimentum lacinia, ligula ligula rutrum nibh, vitae aliquam justo nisl et lorem. Aliquam facilisis, ante ac volutpat ullamcorper, eros mauris finibus urna, eget vehicula elit nulla eget justo. Vestibulum placerat dignissim enim, ut scelerisque diam. Morbi lobortis sem dui, et ultrices dolor luctus quis. Vivamus vitae tristique dolor. Vivamus tincidunt purus neque, eu tristique lacus hendrerit vitae. In facilisis mi cursus lorem faucibus vestibulum. Nullam nibh est, porta a tellus id, ornare vulputate ligula. Aenean fermentum justo id diam sagittis bibendum.\r\n\r\nMorbi ullamcorper quis ipsum eget suscipit. Nunc pulvinar tellus arcu, in aliquet elit convallis a. In hac habitasse platea dictumst. Maecenas nunc sem, mollis sed nunc ut, egestas commodo eros. Nullam in risus id nisl aliquet congue sed nec erat. Praesent vel commodo ligula. Curabitur massa leo, dignissim accumsan maximus sed, hendrerit vitae ipsum.\r\n\r\nMauris eget ipsum et quam imperdiet rhoncus scelerisque eget ligula. Morbi viverra lorem et rutrum tincidunt. Curabitur pulvinar, nulla quis tempus fermentum, magna mi commodo dui, quis faucibus orci ante viverra risus. Etiam semper ornare consequat. Nunc rhoncus neque a rutrum auctor. Nunc eget nibh nec urna venenatis efficitur. In porta, lorem id mattis dignissim, elit nisi dignissim mi, a sollicitudin libero arcu ut libero. Sed mattis enim vel pretium ultrices. Fusce feugiat ante sed tincidunt rhoncus. Donec luctus vulputate justo ut maximus. Fusce quis elit enim. Vivamus tincidunt sapien a odio dignissim, vel auctor nisl porttitor. Nunc et imperdiet lacus. Fusce id ante bibendum, mollis libero id, rhoncus metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n\r\n', NULL),
(39, 'chill kill', 'Ooha\r\nOohah yeah\r\n\r\neodiseo wanni horyeonhi\r\ngoyohaetteon sesange Crath\r\nChill Kill-e deungjang machi Thunder\r\ngeu jjaritame micheosseo\r\n\r\ndalkomhaejin oryu burwanjeone chanmi\r\nmweoga geomnatgesseo? Always and forever\r\nneomu shwiun neon nae geora\r\nmamdaero kkyeoango meottaero bonaesseo\r\n\r\ndashi nega bogo shipeo\r\njukdorok huhwehajana\r\nYeah don’t care if it hur-hur-hurts\r\nnege eoullineun Perfect soul\r\ndashi neol butjabeul su isseulkka?\r\n\r\n(Hey!) Don’t think about tomorrow\r\n(Yoo hoo!) neon yeojeonhi banjjagyeo\r\nbyeonhal geoya ijeseoya\r\nnunmuri heulleo eoreumeul nogyeo\r\n\r\nWhat a chill kill\r\nI know you will\r\nBring me lightning like a winner\r\nyeogiseo neol gidaryeo\r\nHappy ending-euro\r\nWhat a chill kill\r\n\r\ngin bam deungdaereul kyeo (Ah)\r\nnega gil ilchi anke (I’m here)\r\nhokdokan bamira\r\non sesangeun sumjugyeo\r\n\r\nnal jalmot gildeuryeo\r\nna bakke mollatji\r\nwae geuri jalhaenni (Oh-eh)\r\nnaega jagyeok inni (Together)\r\nneon jakku meollimeolli domangchimyeo\r\nmiweohandago wecheo\r\ngeu mare kkeute mangseoryeotjana\r\nnuneul matchweojweotjana (Don’t run away)\r\n\r\ngeochilgo seotun Nights were young\r\nchagapdeon bameul deuja\r\nYeah bwa bwa mani dallajeotji\r\nnaega jebeop byeonhaetji\r\nneol han beon deo aneul su isseulkka?\r\n\r\n(Hey!) Don’t think about tomorrow\r\n(Yoo hoo!) neon yeojeonhi banjjagyeo\r\nbyeonhal geoya ijeseoya\r\nnunmuri heulleo eoreumeul nogyeo\r\n\r\nWhat a chill kill\r\nI know you will\r\nBring me lightning like a winner\r\nyeogiseo neol gidaryeo\r\nHappy ending-euro\r\nWhat a chill kill\r\n\r\nSay say say\r\nNow are you ready ready? (You ready?)\r\nSay say say\r\nNow are you ready? (Ah yeah)\r\n\r\nneo ttaemune ulji ana\r\nneo ttaemune useul subakke eopteon geoya\r\n(Up in the sky) Yeah it’s love\r\n\r\norenjibit haeneun geoye jeomureo\r\nneoye ongiman piryohae\r\nUntil the end (Till the end of time yeah yeah)\r\nEnd of time\r\n\r\n(Hey!) Don’t think about tomorrow\r\n(Yoo hoo!) neon kkeudeopshi banjjagyeo (Oh yeay yeah)\r\nbyeonhal geoya ijeseoya\r\nnunmuri heulleo [Wen/All] geu eoreumeul nogyeo\r\n\r\nDon’t think about tomorrow (Oh yeah)\r\nForget about your sorrow\r\nbyeonhal geoya neoneun nal mot tteona\r\nnunmuri heulleo geu eoreumeul nogyeo\r\n(geu eoreumeul nogyeo)\r\n\r\n(What a chill kill I know you will)\r\nDon’t think about tomorrow (Oh oh oh)\r\n(Bring me lightning like a winner)\r\nneon kkeudeopshi banjjagyeo (Oh yeah)\r\nbyeonhal geoya nan ijeya', NULL),
(40, 'Oratrice Mecanique D’Analyse Cardinal', 'In accordance to his role as the Chief Justice, Neuvillette takes the court and trials very seriously, handing out verdicts with impartiality. He is notably perceptive, being able to hear Paimon\'s whispers and is able to deduce the additional details from the evidence provided to him during a trial. He utilizes the Oratrice Mecanique d\'Analyse Cardinale to make the final decision, honoring its request regardless of his own feelings on the matter as per protocol.\r\n\r\nDue to his position and ties to the Hydro Archon, he is popular among Fontaine\'s people as a symbol of justice and honor. As a member of the Seven Sovereigns, Neuvillette is unfamiliar with human customs and feelings, using the court to help him process and understand them. He rarely spends his time out in public, as he does not enjoy unwanted attention, and in the few times he speaks to humans, he appears to be aloof, though honest in his words. However, when interacting with Melusines, he is extremely friendly, seen as the ideal father by them; likewise, he is fiercely protective of them, considering them the pride of Fontaine and investigating matters himself should he hear of a Melusine being bullied or threatened. This stems from his failure to protect his friend and subordinate, Carole, when she was driven to death due to Fontainian\'s prejudice, and Neuvillette being forced to sentence his other friend, Vautrin, for carrying out a revenge killing for Carole, he had since resolved to prevent such tragedy from happening ever again.\r\n\r\nWhen he was initially reincarnated, Neuvillette was left with many questions about himself, leading to him accepting a position as the Iudex. His time overseeing trials led him to experience a plethora of human experiences and emotions, which was secretly prepared by Focalors in the hopes that his newfound perception would save the people of Fontaine from a looming prophecy that would exterminate them. Upon learning the full extent of Focalors\' deception, he admitted that she was devious and was both saddened and shocked by her self-sacrifice. Indeed, having seen humanity positively, Neuvillette used his fully restored powers to save the people and left aside fragments of his power in the form of Visions for those worthy of them.\r\n\r\nNeuvillette opposes the Heavenly Principles, and by extension The Seven, as they usurped the authority of the Dragons that once ruled Teyvat.\r\n\r\nDespite his appearance, Neuvillette enjoys water and is an avid taster, being able to discern the properties of where the water came from and how it\'s prepared; as a result, this also extends to him liking food with plenty of sauce. He does not like deep fried food and grilled food with no sauce, especially taking great offence to Charcoal-Baked Ajilenakh Cakes.', NULL),
(41, 'Ikaw at ako', '11 years\r\nK🌻D\r\nPagibig.\r\n\r\nSa mundo, buhay at sa limitadong oras na tayo ay nandito,\r\nIsang malaking biyaya ang pagmamahal.\r\nAng mahalin ka. At mahalin mo.\r\n\r\nAng mga alaala natin ay laging kong baon sa aking puso at\r\nmagiging liwanag sa mga madidilim kong araw.\r\n\r\nThank you for dancing with me during my highs\r\nand thank you for singing with me during my lows\r\n\r\nOur lives may drift away,\r\nbut our love will still ride that tide.\r\n\r\n\r\nKathniels, Maraming salamat sa pag mamahal ninyo. maraming\r\nsalamat sa napaka gandang pinag samahan natin. Hinding hindi\r\nnamin ipag papalit at hindi nila pwedeng sirain yun. This is beyond\r\nshow business. Pamilya kayo at mga kaibigan.\r\nMagiging mahirap pero kailangan natin yakapin ang kinabukasan.\r\n\r\nI pray for us to grow, and heal.\r\n\r\n\r\nBal, ang pag mamahal ko sayo ay walang hanggan at walang katapusan.', NULL),
(42, 'tender juicy hotdog', 'Anniversary ng TENDER JUICY HOTDOG NGAYON. Ipasa moto sa 10 tao bago matapos ang araw, kung hindi, magiging hotdog ka. Wag kang tumawa yung tita ko hotdog na. Ayaw kitang maging hotdog. Pls pass', NULL),
(43, 'Nessun Dorma', 'Kafka is described as being very beautiful and charming—a young woman with red wine-colored hair that she ties in a messy ponytail with two loose bangs hanging on either side of her face. Her eyes are of a similar, lighter color, and she wears dark pince-nez sunglasses on top of her head along with a pearl earring in her right ear.\r\n\r\nShe wears a white dress shirt along with a black jacket that hangs off her shoulders. There\'s a silver butterfly pin on its left lapel, and on the back there is a large, spider-like pattern in the center, along with webs on both shoulders and a burgundy inside. There are also wine-colored straps with golden accents on both her jacket and thighs, and gloves of a similar shade.\r\n\r\nShe wears black, high waisted shorts and nylon tights, with a thigh garter on her right leg. She also wears black boots with two different lengths: the right goes over her knee, while the left goes slightly over her ankle.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'kai', 'erigom@gmail.com', '8c5781246fcb0296e1f11cd4e2eee68d', 'user'),
(4, 'Darlyn', 'darlyn.baybayon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(5, 'Erza', 'erza@mail.com', '80153c3b6fea0d00d08ebf3833c2ac7a', 'user'),
(6, 'Stelle', 'stelle@nameless.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_entry`
--
ALTER TABLE `blog_entry`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_entry`
--
ALTER TABLE `blog_entry`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_entry`
--
ALTER TABLE `blog_entry`
  ADD CONSTRAINT `blog_entry_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

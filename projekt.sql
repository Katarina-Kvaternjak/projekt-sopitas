-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 12:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `naslov` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `kategorija` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `sazetak` text COLLATE utf8_croatian_ci NOT NULL,
  `sadrzaj` text COLLATE utf8_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `arhiva` int(1) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `naslov`, `kategorija`, `sazetak`, `sadrzaj`, `slika`, `arhiva`, `datum`) VALUES
(1, 'Test', 'zabava', 'dasdadas', 'dasdasdadasfasdfasfasfasfasfasdfsafasf', 'background.png', 0, '2021-12-06'),
(2, 'Lorem ipsum', 'zabava', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar libero tristique metus sagittis elementum. Praesent vel auctor quam. Aenean laoreet lobortis volutpat. Sed placerat convallis quam, eget convallis est laoreet non.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar libero tristique metus sagittis elementum. Praesent vel auctor quam. Aenean laoreet lobortis volutpat. Sed placerat convallis quam, eget convallis est laoreet non. Ut sodales justo vitae sapien lobortis vestibulum. Vivamus pharetra nulla id justo pulvinar, at porttitor ipsum vehicula. Morbi luctus maximus lectus eu pretium. In dictum mi quis massa convallis luctus volutpat et justo. Ut vehicula urna erat, sit amet condimentum ipsum pharetra in. Suspendisse justo enim, bibendum vel nibh non, semper bibendum risus. Nam a lectus odio. Pellentesque dapibus est nec dolor condimentum placerat. Nullam molestie enim eget congue placerat.', 'party.jpg', 1, '2021-01-02'),
(3, 'Integer congue scelerisque', 'zabava', 'Integer congue scelerisque elit, eget mollis nibh interdum quis. In sed arcu nisi.', 'Integer congue scelerisque elit, eget mollis nibh interdum quis. In sed arcu nisi. Curabitur sodales metus ultrices eros vestibulum, a convallis tellus egestas. Donec metus velit, suscipit sit amet porttitor eu, vestibulum sed lectus. Donec at elit a lacus iaculis euismod quis quis mi. Curabitur aliquet mauris nec nunc efficitur, id posuere neque hendrerit. Aenean ac magna vitae neque tincidunt condimentum.\r\n\r\nNullam pulvinar non nibh ac posuere. Morbi fermentum mollis finibus. Ut tempor massa eu quam consectetur dictum. Suspendisse potenti. Suspendisse volutpat elit elit, at ornare risus rhoncus ac. Aliquam auctor feugiat sagittis. In in lacinia turpis. Curabitur eget interdum velit, vel pulvinar felis. Suspendisse potenti. Sed tempor ipsum fermentum tellus consequat, at accumsan sapien auctor. Aliquam in velit rhoncus, cursus orci id, auctor urna. Praesent vel volutpat turpis. Phasellus congue volutpat laoreet. Duis suscipit efficitur nisl eget congue.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec venenatis neque id turpis suscipit, lobortis congue mi eleifend. Phasellus elementum est vitae tortor dictum tincidunt. Etiam aliquet ante eros, at laoreet tellus imperdiet suscipit. Etiam nec maximus lacus. Mauris in augue non est hendrerit rhoncus. Duis eu nisi condimentum, faucibus libero nec, pulvinar leo. Integer hendrerit ex eu augue aliquam ultricies ut nec libero. Ut vitae mauris porttitor, ullamcorper dui vel, condimentum lorem. Ut ultricies arcu quis lorem posuere molestie. Etiam blandit quam tristique, lacinia est at, ornare sapien.', 'movies.jpg', 1, '2021-06-01'),
(4, 'Phasellus congue', 'sport', 'Phasellus congue in neque id cursus. Integer pretium eros a metus blandit auctor. Sed nulla lacus, posuere a metus auctor, tincidunt ornare quam. Cras in nisl eget nisi imperdiet tempor a a neque. Sed non erat quis tellus porttitor vehicula.', 'Phasellus congue in neque id cursus. Integer pretium eros a metus blandit auctor. Sed nulla lacus, posuere a metus auctor, tincidunt ornare quam. Cras in nisl eget nisi imperdiet tempor a a neque. Sed non erat quis tellus porttitor vehicula. Praesent in viverra tellus, et porttitor orci. Duis fringilla, eros ac accumsan consectetur, leo leo pellentesque orci, vel tempus elit leo sit amet odio. Vivamus egestas sed purus eu tristique. Etiam efficitur sem non neque euismod maximus. Curabitur vitae magna eu leo mollis euismod et vitae dui. In hac habitasse platea dictumst. Curabitur volutpat metus eget sapien sagittis, et imperdiet dui sagittis.', 'klizanje.jpg', 1, '2021-05-11'),
(5, 'Integer et augue', 'tehnologija', 'Integer et augue nec purus hendrerit efficitur. Sed lobortis, sapien id luctus bibendum.', 'Integer et augue nec purus hendrerit efficitur. Sed lobortis, sapien id luctus bibendum, purus diam aliquam dui, id feugiat dolor odio fringilla leo. Donec efficitur nec metus vel maximus. Etiam facilisis est sed sem placerat dapibus. Morbi accumsan varius nunc, a dictum ex aliquet eu. Aliquam eu erat quam. Nunc faucibus mauris vitae enim ornare condimentum. Mauris faucibus, ex a dapibus tempor, nisl velit aliquam dui, eget vehicula metus ex eget eros. Phasellus lacus nunc, consequat tempor tincidunt ac, imperdiet ac massa. Curabitur vitae risus quam. Morbi ultricies tristique massa, vel tristique neque rhoncus ac.', 'android.jpg', 1, '2021-06-20'),
(6, 'Pellentesque ut justo', 'tehnologija', 'Praesent at mi ut magna pharetra suscipit. Etiam placerat sed sapien a lacinia.', 'Praesent at mi ut magna pharetra suscipit. Etiam placerat sed sapien a lacinia. Pellentesque ut justo neque. Nunc ut metus congue, aliquet est eu, ullamcorper odio. Quisque iaculis leo id massa cursus pulvinar. Duis tincidunt pharetra purus, vitae lobortis sem bibendum vel. Aenean sodales nunc ut neque mattis, id molestie ante lacinia. Fusce vestibulum urna non tellus fringilla porta. Pellentesque aliquam porttitor nibh, non ultricies arcu scelerisque a.', 'chip.jpg', 1, '2021-04-01'),
(7, 'Ut non tincidunt', 'tehnologija', 'Nam efficitur pretium turpis, id aliquam enim laoreet non.', 'Nam efficitur pretium turpis, id aliquam enim laoreet non. Nullam quis turpis vitae nulla congue accumsan. Nunc non risus in sem convallis tempus quis ut libero. Morbi laoreet lacus eget erat fermentum, nec sagittis turpis luctus. Sed quis molestie felis. Ut non tincidunt purus. Integer maximus eget odio a vestibulum. Donec id nibh a neque consectetur rhoncus. Maecenas euismod tincidunt leo, sit amet suscipit leo sagittis sed.', 'console.jpg', 1, '2021-02-10'),
(8, 'Nullam venenatis', 'tehnologija', 'Ut eleifend, ex ac bibendum efficitur, odio ex dapibus elit, eget dignissim enim sem nec mauris. Nullam venenatis consectetur pellentesque.', 'Ut eleifend, ex ac bibendum efficitur, odio ex dapibus elit, eget dignissim enim sem nec mauris. Nullam venenatis consectetur pellentesque. Aliquam massa lorem, viverra et bibendum semper, viverra ac mi. Phasellus eget mi turpis. Suspendisse metus elit, faucibus quis mattis in, commodo ac ligula. Integer faucibus massa quis purus interdum dignissim et nec nulla. Nullam mattis nisi sit amet scelerisque elementum. Suspendisse vestibulum pulvinar orci sed facilisis. Aliquam blandit lacinia tempus. Aenean eleifend enim sapien, in tristique erat rhoncus sed. Aenean egestas efficitur dui ac tincidunt. In lacinia lacinia nisi, a ultricies neque facilisis fermentum. Nulla faucibus id nisi non accumsan. Ut aliquam orci nec eros posuere viverra. Pellentesque molestie euismod dui in egestas. Sed sollicitudin dolor id libero venenatis, eget pulvinar augue imperdiet.', 'server.jpg', 1, '2020-11-07'),
(9, 'Aenean', 'zabava', 'Aenean venenatis eget risus sit amet ornare. Ut lorem ipsum, aliquam ac laoreet eu, rutrum sed lacus.', 'Aenean venenatis eget risus sit amet ornare. Ut lorem ipsum, aliquam ac laoreet eu, rutrum sed lacus. Phasellus vel commodo purus, sit amet commodo dui. Nullam fringilla dui eu lectus aliquam, quis maximus metus sodales. Mauris suscipit nunc ac tortor elementum auctor. Phasellus sagittis elit massa, ac interdum velit aliquet ut. Cras nec ante vel sem gravida accumsan et ut massa. Cras a erat a nibh mattis facilisis congue vitae dui. In hac habitasse platea dictumst.', 'kittens.jpg', 0, '2020-12-24'),
(10, 'Pellentesque ipsum leo', 'zabava', 'Pellentesque ipsum leo, suscipit a felis id, mollis scelerisque lectus. Sed iaculis, enim quis pretium pretium, augue arcu porta tortor, sed placerat velit tellus id lacus.', 'Pellentesque ipsum leo, suscipit a felis id, mollis scelerisque lectus. Sed iaculis, enim quis pretium pretium, augue arcu porta tortor, sed placerat velit tellus id lacus. Nam ac varius sem, eu finibus mauris. Aliquam placerat risus eget libero varius consectetur. Vivamus laoreet, est ac ullamcorper blandit, elit velit dapibus tellus, ut dictum dui libero vitae est. Pellentesque ut varius eros, vel viverra enim. Aliquam aliquet neque non enim feugiat iaculis. Mauris sed pellentesque dui. Fusce tristique maximus lectus, eu bibendum libero blandit eget. Sed mollis lorem erat, et ullamcorper ex tristique quis. Donec id vestibulum ex. Morbi tincidunt justo libero. Proin imperdiet mollis efficitur.', 'hobi.jpg', 1, '2021-06-09'),
(11, 'Vivamus', 'zabava', 'Vivamus velit ex, laoreet sed pulvinar vitae, luctus sit amet neque.', 'Vivamus velit ex, laoreet sed pulvinar vitae, luctus sit amet neque. Sed scelerisque dolor felis, quis consequat ex facilisis in. Duis suscipit venenatis rutrum. Curabitur sed cursus enim, a varius risus. Vivamus sed venenatis massa. Ut tempor cursus magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed lectus odio, dictum et ligula vel, suscipit semper leo. Pellentesque sodales maximus mauris eu gravida.', 'belot.jpg', 1, '2021-03-17'),
(12, 'Radi li javascript?', 'politika', 'fasdfasdgasdgasdf', 'fasdfasdfasdfjaslčfjaslčfjaslfjaslfkjaklfjasdlfjasdfkljasdlfkjasfklčjasfklasjdflčkasdjfklaf', 'frieden-1600.jpg', 0, '2021-05-29'),
(15, 'Datum Test', 'politika', 'dfasdfasdfasdfsafas', 'fasdfasdgasgasdfgasdgasdgasdgasdgasgasdgasdgasdgasdg', 'd272772e5eb985dd1a517c0068288c37.jpg', 0, '2021-06-12'),
(16, 'Duis ultrices orci', 'politika', 'Etiam vitae mi porta, eleifend eros vitae, placerat erat. Donec quis consectetur eros.', 'Etiam vitae mi porta, eleifend eros vitae, placerat erat. Donec quis consectetur eros. Praesent sit amet diam congue, mollis odio euismod, tempor nisi. Nullam velit justo, convallis quis nulla eu, mattis aliquam leo. Aenean blandit lacus ut egestas molestie. Ut a maximus lorem. Duis ultrices orci quam, eget pretium nulla congue sit amet. Aliquam ornare porttitor ipsum. Donec tincidunt orci non dui convallis, id vestibulum ex finibus. Phasellus accumsan ex quis velit blandit, ac finibus ante efficitur. Curabitur consectetur iaculis lacus, vel accumsan dui volutpat id. Pellentesque ac magna vel ligula finibus consectetur vitae ut quam. Curabitur tempor finibus enim et varius.', 'frieden-1600.jpg', 1, '2021-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `razina` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Katarina', 'Kvaternjak', 'admin', '$2y$10$HcN.CK2PcQGS9fpif3s2mOX7eS7mQQgxGn/KZnVlakfRjaw41jYRu', 1),
(2, 'Test', 'Testić', '12345', '$2y$10$QACpT3TOS30l9tQpBzE4Lu.8JaiEraKlNRZDd3XPO4/E5cjag3c8m', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisničko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

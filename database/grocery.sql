-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 09:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `prisce` varchar(200) NOT NULL,
  `discripstion` varchar(200) NOT NULL,
  `quanity` varchar(200) NOT NULL,
  `weight` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `name`, `img`, `prisce`, `discripstion`, `quanity`, `weight`) VALUES
(3, 'Tata Sampann White Poha 500 g', 'tata-sampann-white-poha-500-g-product-images-o491614721-p491614721-0-202203150346.webp', '40', 'Poha (Rice Flakes) is a popular Indian breakfast, especially for those who are on a weight watch. It is made from beaten rice. Serve a hot plate of delicious poha topped with bhujia and coriander, alo', '100', 'kg'),
(5, 'Elina Long Grain Rice 1 kg', 'elina-long-grain-rice-1-kg-product-images-o491173885-p491173885-0-202203151443.webp', '65', 'Guests coming over for dinner? Put on your cooking aprons and cook some delicious rice recipes with Elina Long Grain Rice. The slender long grained rice is aromatic and nutritious at the same time. It', '100', 'kg'),
(8, 'Nutri Binge 500g California Almonds Vitals', 'nutri-binge-500g-california-almonds-vitals-product-images-orvsieytggg-p603409804-0-202307311613.webp', '300', 'Surely natural, these are raw, unsweetened, unsalted, no additives, no preservatives or added flavours. Relish the authentic taste of the nuts and stay healthy and happy. Munch a handful on the go or ', '10', 'kg'),
(9, 'Nutri Binge 500g Whole Cashews', 'nutri-binge-500g-whole-cashews-product-images-orvwcs3vbmj-p603178535-0-202307250820.webp', '400', 'Rich, buttery and delicious and perfect for making raw cashew milk or snacking. Excellent source of protein, fiber and minerals. Suitable for vegetarians. Cashews are an incredible nutritional powerho', '10', 'kg'),
(10, 'Good Life Yellow Kishmish 500 g', 'good-life-yellow-kishmish-500-g-product-images-o491203242-p491203242-0-202306141844.jpg', '150', 'If nutrition is on your mind, Raisins are a perfect choice. Full of important nutrients for your well-being, this dry fruit is rich in Vitamin B and contains Potassium and Iron. Good Life Yellow Kishm', '10', 'kg'),
(11, 'Horaira Nutz Dry Fruits Combo Pack 1Kg Cashews 250g , Figs 250g , Raisins 250g , Almond 250g', 'horaira-nutz-dry-fruits-combo-pack-1kg-cashews-250g-figs-250g-raisins-250g-almond-250g-product-images-orvwzwpx3n4-p592458748-0-202207090431.webp', '700', 'Helps prevent blood diseases. Limited quantities of cashew nuts, when eaten regularly, can help in preventing blood diseases. ... Good for hair. ... Good for heart. ... Great for skin. ... Helpful in ', '20', 'kg'),
(12, 'Anjani Anjeer 100% Natural Anjeer (Dry Figs) 500g', 'anjeer-100-natural-anjeer-dry-figs-500g-product-images-orv65puj0pk-p590837091-0-202110290358.webp', '400', 'Rich Source of Fibre Calcium and Iron  They Contains zero trans fat and Zero Cholestrol  Gluten Free, high in proteins suitable for vegetarian  Non-GMO figs are low in calories and Fat free  Our glute', '10', 'kg'),
(13, 'Nutraj Jumbo California Walnuts in Shell 1 kg', 'nutraj-signature-jumbo-california-walnuts-in-shell-1-kg-product-images-orvo4h5dzz9-p590811334-0-202303301535.webp', '500', 'These walnuts are plant-based and purely vegetarian. It does not contain any GMO. There is zero trans-fat and is cholesterol free making it a highly nutritious nut to munch on. Walnuts are good for th', '20', 'kg'),
(14, 'Good Life Arabian Dates 500 g (Pouch)', 'good-life-arabian-dates-500-g-product-images-o492571107-p591219105-0-202204261852.jpg', '90', 'Good Life Arabian Dates are so versatile they can be added to cakes, puddings, biscuits or used in stews, tagines, in stuffings or salads. Or try stuffing them with ricotta or blue cheese for an elega', '10', 'kg'),
(15, 'Bharat Chana Dal 1 Kg', 'bharat-chana-dal-1-kg-product-images-o494260170-p606721409-0-202401271413.webp', '60', 'Nutrient-Rich: Bharat Chana Dal is a powerhouse of essential nutrients, including protein, fibre, iron, and essential vitamins. Incorporating this dal into your diet can contribute to a balanced and n', '25', 'kg'),
(16, 'Aashirvaad Superior MP Atta 10 kg', 'aashirvaad-superior-mp-atta-10-kg-product-images-o490750662-p590150649-0-202401260852.jpg', '480', 'Aashirvaad Superior MP Atta is made using the 4-step advantage process which ensures pure and natural whole wheat atta and retention of its natural dietary fibres and nutrients Sourced directly from t', '200', 'kg'),
(17, 'Sri Sri Tattva Toor Dal - Split Pigeon Pea, 1kg x Pack of 2', 'sri-sri-tattva-toor-dal-split-pigeon-pea-1kg-x-pack-of-2-product-images-orvd0oepw74-p604460837-0-202309061943.webp', '350', 'Sri Sri Tattva is committed to bring you the quality of food that you desrve. Our products are sourced from certified organic farms. They are cleaned and packed in the most hygienic conditions in food', '60', 'kg'),
(18, 'Patanjali Traditional Chakki Whole Wheat With Bran Atta 10 kg', 'patanjali-traditional-chakki-whole-wheat-with-bran-atta-10-kg-product-images-o491210600-p491210600-0-202206231932.webp', '400', 'Patanjali Traditional Whole Wheat Chakki Atta with Bran is believed to be the magical blend of taste and health to provide your guests and family with wholesome goodness. Patanjali Whole Wheat Atta co', '230', 'kg'),
(19, 'Besan 500 g', 'besan-500-g-product-images-o491349648-p491349648-0-202206231932.webp', '40', 'Besan is one of the most commonly used ingredients in Indian kitchens. Zunka Bhakri is traditionally made with chickpeas or besan paste which is further cooked with onions, curry leaves, ginger. Khand', '60', 'kg'),
(20, 'Good Life Whole Moong 500 g', 'good-life-whole-moong-500-g-product-images-o491187309-p491187309-0-202308311426.webp', '90', 'Good Life Whole Moong is one of the light meal to digest. It is often given to people who prefer diet for fitness. It contains antioxidants which are very healthy for the good functioning of the human', '40', 'kg'),
(21, 'Catch Garam Masala 100 g', 'catch-garam-masala-100-g-product-images-o490000150-p490000150-0-202203142038.webp', '50', 'Using Garam Masala in Indian cooking is a trend that is followed since ages. Garam Masala is acclaimed for its aroma and flavour. Catch Garam Masala Powder is a unique assortment of traditional spices', '15', 'kg'),
(22, 'Bhikharam Chandmal Bikaneri Bhujia 1 kg', 'bhikharam-chandmal-bikaneri-bhujia-1-kg-product-images-o491416476-p491416476-0-202307131822.webp', '200', 'Bhikharam Chandmal from Rajasthan have introduced various types of namkeens, sweets, bhujia, etc. that have gained immense popularity. Bhikharam Chandmal Bikaneri Bhujia is a crunchy, tasty and flavou', '30', 'kg'),
(23, 'Balaji Aloo Sev 400 g', 'balaji-aloo-sev-400-g-product-images-o491336859-p491336859-0-202311301536.webp', '80', 'Balaji is a major wafers and other grains snack-food-manufacturer and distributor company, with over 65+ product range. Balaji Aloo Sev is a thin noodle-like snack originating from Rajasthan. It is co', '30', 'kg'),
(24, 'Balaji Farali Chevdo 450 g', 'balaji-farali-chevdo-450-g-product-images-o491336857-p491336857-0-202311301544.webp', '90', 'Balaji is a major wafers and other grains snack-food-manufacturer and distributor company, with over 65+ product range. Balaji Farali Chevdo is a traditional crunchy fried snack originating from Gujar', '20', 'kg'),
(25, 'Balaji Ratlami Sev 400 g', 'balaji-ratlami-sev-400-g-product-images-o491336858-p491336858-0-202311301544.webp', '70', 'Balaji is a major wafer and other grains snack food manufacturer and distributor company, with over 65+ product ranges. Balaji Ratlami Sev is another speciality from the Ratlam region of Madhya Prades', '20', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(26) NOT NULL,
  `a_bank_detail` varchar(26) NOT NULL,
  `a_contact` varchar(10) NOT NULL,
  `a_email` varchar(45) NOT NULL,
  `a_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`a_id`, `a_name`, `a_bank_detail`, `a_contact`, `a_email`, `a_password`) VALUES
(8, 'rajan', '111111111111', '9510459100', 'rb@gmail.com', 'rajan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_imag` varchar(200) NOT NULL,
  `c_des` varchar(200) NOT NULL,
  `c_prise` varchar(200) NOT NULL,
  `c_quan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `c_name`, `c_imag`, `c_des`, `c_prise`, `c_quan`) VALUES
(11, 'Tata Sampann White Poha 500 g', 'tata-sampann-white-poha-500-g-product-images-o491614721-p491614721-0-202203150346.webp', 'Poha (Rice Flakes) is a popular Indian breakfast, especially for those who are on a weight watch. It is made from beaten rice. Serve a hot plate of delicious poha topped with bhujia and coriander, alo', '40', '3'),
(15, 'Elina Long Grain Rice 1 kg', 'elina-long-grain-rice-1-kg-product-images-o491173885-p491173885-0-202203151443.webp', 'Guests coming over for dinner? Put on your cooking aprons and cook some delicious rice recipes with Elina Long Grain Rice. The slender long grained rice is aromatic and nutritious at the same time. It', '65', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `payment_id`, `added_date`) VALUES
(1, 1, 'pay_MXY8ppDGcA3NiC', '2023-09-02 10:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `register form`
--

CREATE TABLE `register form` (
  `u_phone` varchar(20) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(9) NOT NULL,
  `u_confirmpassword` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register form`
--

INSERT INTO `register form` (`u_phone`, `u_id`, `u_name`, `u_email`, `u_password`, `u_confirmpassword`) VALUES
('9879639459', 77, 'kishan', 'kp@gmail.com', 'Kp@123456', 'Kp@123456'),
('9510459100', 78, 'rajan', 'rajan@gmail.com', 'Rb@12345', 'Rb@12345'),
('9510459100', 79, 'rajan', 'rb@gmail.com', 'e2a5eb9fe', 'Rb@12345'),
('9510459100', 80, 'rajan', 'rajan@gmail.com', 'Rb@12345', 'Rb@12345'),
('9510459100', 81, 'rajan', 'rajan@gmail.com', 'rajan', 'rajan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register form`
--
ALTER TABLE `register form`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`,`u_name`,`u_phone`,`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register form`
--
ALTER TABLE `register form`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

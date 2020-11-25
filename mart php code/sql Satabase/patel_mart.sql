-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 02:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patel_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `car_id` int(20) NOT NULL,
  `car_cust_id` int(20) NOT NULL,
  `car_pro_id` int(20) NOT NULL,
  `car_contity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`car_id`, `car_cust_id`, `car_pro_id`, `car_contity`) VALUES
(2, 71, 111, 11),
(3, 71, 115, 5),
(4, 71, 129, 2),
(5, 71, 117, 2),
(6, 71, 119, 1),
(7, 71, 123, 1),
(8, 71, 121, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ad_login`
--

CREATE TABLE `ad_login` (
  `ad_id` int(20) NOT NULL,
  `ad_name` varchar(20) NOT NULL,
  `ad_password` varchar(20) NOT NULL,
  `ad_order` varchar(5) NOT NULL,
  `ad_product` varchar(5) NOT NULL,
  `ad_customer` varchar(5) NOT NULL,
  `ad_admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_login`
--

INSERT INTO `ad_login` (`ad_id`, `ad_name`, `ad_password`, `ad_order`, `ad_product`, `ad_customer`, `ad_admin`) VALUES
(1, 'admin', '123', '1', '1', '1', '1'),
(2, 'ad', '12', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cat_products`
--

CREATE TABLE `cat_products` (
  `cat_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_products`
--

INSERT INTO `cat_products` (`cat_id`, `sub_id`, `cat_name`) VALUES
(1, 1, ''),
(227, 54, 'Potato, Onion & Tomato'),
(228, 54, 'Cucumber & Capsicum'),
(229, 54, 'Root Vegetables'),
(230, 54, 'Cabbage & Cauliflower'),
(231, 54, 'Leafy Vegetables'),
(232, 54, 'Beans, Brinjals & Okra'),
(233, 54, 'Gourd, Pumpkin, Drumstick'),
(234, 54, 'Specialty'),
(235, 55, 'Lemon, Ginger & Garlic'),
(236, 55, 'Indian & Exotic Herbs'),
(237, 56, 'Apples & Pomegranate'),
(238, 56, 'Banana, Sapota & Papaya'),
(239, 56, 'Kiwi, Melon, Citrus Fruit'),
(240, 56, 'Seasonal Fruits'),
(241, 56, 'Mangoes'),
(242, 56, 'Fruit Baskets'),
(243, 57, 'Cut Fruit, Tender Coconut'),
(244, 57, 'Fresh Salads & Sprouts'),
(245, 57, 'Cut & Peeled Veggies'),
(246, 57, 'Recipe Packs'),
(247, 58, 'Exotic Fruits'),
(248, 58, 'Exotic Vegetables'),
(249, 59, 'Organic Vegetables'),
(250, 59, 'Organic Fruits'),
(251, 60, 'Marigold'),
(252, 60, 'Other Flowers'),
(253, 60, 'Roses'),
(254, 61, 'Atta Whole Wheat'),
(255, 61, 'Sooji, Maida & Besan'),
(256, 61, 'Rice & Other Flours'),
(257, 62, 'Raw Rice'),
(258, 62, 'Poha, Sabudana & Murmura'),
(259, 62, 'Basmati Rice'),
(260, 62, 'Boiled & Steam Rice'),
(261, 63, 'Toor, Channa & Moong Dal'),
(262, 63, 'Cereals & Millets'),
(263, 63, 'Urad & Other Dals'),
(264, 64, 'Sugar & Jaggery'),
(265, 64, 'Salts'),
(266, 64, 'Sugarfree Sweeteners'),
(267, 65, 'Blended Cooking Oils'),
(268, 65, 'Sunflower, Rice Bran Oil'),
(269, 65, 'Ghee & Vanaspati'),
(270, 65, 'Soya & Mustard Oils'),
(271, 65, 'Gingelly Oil'),
(272, 65, 'Other Edible Oils'),
(273, 65, 'Olive & Canola Oils'),
(274, 65, 'Gingelly, Groundnut Oils'),
(275, 66, 'Organic Sugar, Jaggery'),
(276, 66, 'Organic Dals & Pulses'),
(277, 66, 'Organic Dry Fruits'),
(278, 66, 'Organic Flours'),
(279, 66, 'Organic Rice, Other Rice'),
(280, 66, 'Organic Masalas & Spices'),
(281, 66, 'Organic Edible Oil, Ghee'),
(282, 67, 'Whole Spices'),
(283, 67, 'Powdered Spices'),
(284, 67, 'Cooking Pastes'),
(285, 67, 'Blended Masalas'),
(286, 67, 'Herbs & Seasoning'),
(287, 68, 'Almonds'),
(288, 68, 'Raisins'),
(289, 68, 'Cashews'),
(290, 68, 'Other Dry Fruits'),
(291, 68, 'Mukhwas'),
(292, 69, 'Milk'),
(293, 69, 'Paneer, Tofu & Cream'),
(294, 69, 'Butter & Margarine'),
(295, 69, 'Curd'),
(296, 69, 'Buttermilk & Lassi'),
(297, 69, 'Condensed, Powdered Milk'),
(298, 69, 'Cheese'),
(299, 69, 'Flavoured, Soya Milk'),
(300, 69, 'Yogurt & Shrikhand'),
(301, 70, 'Brown, Wheat & Multigrain'),
(302, 70, 'Milk, White & Sandwich'),
(303, 70, 'Buns, Pavs & Pizza Base'),
(304, 71, 'Premium Cookies'),
(305, 71, 'Khari & Cream Rolls'),
(306, 71, 'Rusks'),
(307, 71, 'Healthy Organic Cookies'),
(308, 71, 'Bakery Biscuits, Cookies'),
(309, 72, 'Croissants, Bagels'),
(310, 72, 'Gourmet Bread'),
(311, 72, 'Panini, Focaccia & Pita'),
(312, 72, 'Bagels & Baguette'),
(313, 73, 'Bread Sticks & Lavash'),
(314, 73, 'Cheese & Garlic Bread'),
(315, 73, 'Organic & Free From'),
(316, 73, 'Breadcrumbs & Croutons'),
(317, 73, 'Puffs, Patties, Sandwiches'),
(318, 74, 'Ice Creams'),
(319, 75, 'Tea Cakes & Slice Cakes'),
(320, 75, 'Muffins & Cup Cakes'),
(321, 75, 'Pastries & Brownies'),
(322, 75, 'Birthday & Party Cakes'),
(323, 75, 'Doughnuts & Mousses'),
(324, 76, 'Packaged Water'),
(325, 76, 'Spring Water'),
(326, 76, 'Flavoured Water'),
(327, 77, 'Kids (5+Yrs)'),
(328, 77, 'Children (2-5 Yrs)'),
(329, 77, 'Men & Women'),
(330, 77, 'Diabetic Drinks'),
(331, 77, 'Glucose Powder, Tablets'),
(332, 78, 'Leaf & Dust Tea'),
(333, 78, 'Green Tea'),
(334, 78, 'Tea Bags'),
(335, 78, 'Exotic & Flavoured Tea'),
(336, 79, 'Ground Coffee'),
(337, 79, 'Instant Coffee'),
(338, 80, 'Soda & Cocktail Mix'),
(339, 80, 'Cold Drinks'),
(340, 80, 'Sports & Energy Drinks'),
(341, 80, 'Non Alcoholic Drinks'),
(342, 81, 'Unsweetened, Cold Press'),
(343, 81, 'Juices'),
(344, 81, 'Syrups & Concentrates'),
(345, 82, 'Oats & Porridge'),
(346, 82, 'Muesli'),
(347, 82, 'Kids Cereal'),
(348, 82, 'Flakes'),
(349, 82, 'Granola & Cereal Bars'),
(350, 83, 'Instant Noodles'),
(351, 83, 'Pasta & Macaroni'),
(352, 83, 'Cup Noodles'),
(353, 83, 'Hakka Noodles'),
(354, 83, 'Vermicelli'),
(355, 83, 'Instant Pasta'),
(356, 84, 'Marie, Health, Digestive'),
(357, 84, 'Cream Biscuits & Wafers'),
(358, 84, 'Glucose & Milk Biscuits'),
(359, 84, 'Salted Biscuits'),
(360, 84, 'Cookies'),
(361, 85, 'Frozen Vegetables'),
(362, 85, 'Frozen Veg Snacks'),
(363, 85, 'Frozen Non-Veg Snacks'),
(364, 85, 'Frozen Indian Breads'),
(365, 86, 'Chips & Corn Snacks'),
(366, 86, 'Namkeen & Savoury Snacks'),
(367, 87, 'Honey'),
(368, 87, 'Choco & Nut Spread'),
(369, 87, 'Mayonnaise'),
(370, 87, 'Tomato Ketchup & Sauces'),
(371, 87, 'Chilli & Soya Sauce'),
(372, 87, 'Jam, Conserve, Marmalade'),
(373, 87, 'Vinegar'),
(374, 87, 'Dips & Dressings'),
(375, 88, 'Breakfast & Snack Mixes'),
(376, 88, 'Home Baking'),
(377, 88, 'Dessert Mixes'),
(378, 88, 'Soups'),
(379, 88, 'Papads, Ready To Fry'),
(380, 88, 'Heat & Eat Ready Meals'),
(381, 88, 'Canned Food'),
(382, 89, 'Chocolates'),
(383, 89, 'Mints & Chewing Gum'),
(384, 89, 'Gift Boxes'),
(385, 89, 'Toffee, Candy & Lollypop'),
(386, 90, 'Lime & Mango Pickle'),
(387, 90, 'Chutney Powder'),
(388, 90, 'Other Veg Pickle'),
(389, 90, 'Non Veg Pickle'),
(390, 91, 'Tinned, Packed Sweets'),
(391, 91, 'Chikki & Gajjak'),
(392, 91, 'Fresh Sweets'),
(393, 92, 'Mouthwash'),
(394, 92, 'Toothpaste'),
(395, 92, 'Toothbrush'),
(396, 92, 'Floss & Tongue Cleaner'),
(397, 93, 'Sanitary Napkins'),
(398, 93, 'Intimate Wash & Care'),
(399, 93, 'Panty Liners'),
(400, 93, 'Hair Removal'),
(401, 93, 'Tampons & Menstrual Cups'),
(402, 94, 'Hand Wash & Sanitizers'),
(403, 94, 'Bathing Bars & Soaps'),
(404, 94, 'Shower Gel & Body Wash'),
(405, 94, 'Talcum Powder'),
(406, 94, 'Bathing Accessories'),
(407, 94, 'Bath Salts & Oils'),
(408, 94, 'Body Scrubs & Exfoliants'),
(409, 95, 'Hair Oil & Serum'),
(410, 95, 'Shampoo & Conditioner'),
(411, 95, 'Hair & Scalp Treatment'),
(412, 95, 'Hair Color'),
(413, 95, 'Hair Styling'),
(414, 95, 'Tools & Accessories'),
(415, 95, 'Dry Shampoo & Conditioner'),
(416, 96, 'Antiseptics & Bandages'),
(417, 96, 'Cotton & Ear Buds'),
(418, 96, 'Adult Diapers'),
(419, 96, 'Everyday Medicine'),
(420, 96, 'Sexual Wellness'),
(421, 96, 'Slimming Products'),
(422, 96, 'Supplements & Proteins'),
(423, 97, 'Shaving Care'),
(424, 97, 'Face & Body'),
(425, 97, 'Hair Care & Styling'),
(426, 97, 'Bath & Shower'),
(427, 97, 'Moustache & Beard Care'),
(428, 97, 'Combos & Gift Sets'),
(429, 97, 'Talc'),
(430, 97, 'Deodorant'),
(431, 98, 'Body Care'),
(432, 98, 'Face Care'),
(433, 98, 'Lip Care'),
(434, 98, 'Eye Care'),
(435, 98, 'Aromatherapy'),
(436, 99, 'Gift Sets'),
(437, 99, 'Women\"s Deodorants'),
(438, 99, 'Men\"s Deodorants'),
(439, 99, 'Perfume'),
(440, 99, 'Body Sprays & Mists'),
(441, 99, 'Eau De Cologne'),
(442, 99, 'Eau De Parfum'),
(443, 99, 'Eau De Toilette'),
(444, 100, 'Nails'),
(445, 100, 'Eyes'),
(446, 100, 'Lips'),
(447, 100, 'Face'),
(448, 100, 'Makeup Accessories'),
(449, 100, 'Makeup Kits & Gift Sets'),
(450, 101, 'Dishwash Liquids & Pastes'),
(451, 101, 'Detergent Powder, Liquid'),
(452, 101, 'Dishwash Bars & Powders'),
(453, 101, 'Fabric Pre, Post Wash'),
(454, 101, 'Detergent Bars'),
(455, 101, 'Imported Home Care'),
(456, 102, 'Toilet Cleaners'),
(457, 102, 'Floor & Other Cleaners'),
(458, 102, 'Kitchen, Glass & Drain'),
(459, 102, 'Imported Cleaners'),
(460, 102, 'Metal, Furniture Cleaner'),
(461, 103, 'Kitchen Rolls'),
(462, 103, 'Garbage Bags'),
(463, 103, 'Wet Wipe, Pocket Tissues'),
(464, 103, 'Aluminium Foil, Clingwrap'),
(465, 103, 'Toilet Paper'),
(466, 103, 'Paper Napkin, Tissue Box'),
(467, 104, 'Mosquito Repellent'),
(468, 104, 'Air Freshener'),
(469, 104, 'Insect Repellent'),
(470, 105, 'Utensil Scrub-Pad, Glove'),
(471, 105, 'Dust Cloth & Wipes'),
(472, 105, 'Brooms & Dust Pans'),
(473, 105, 'Toilet & Other Brushes'),
(474, 105, 'Mops, Wipers'),
(475, 106, 'Hangers, Clips & Rope'),
(476, 106, 'Laundry, Storage Baskets'),
(477, 106, 'Buckets & Mugs'),
(478, 106, 'Dustbins'),
(479, 106, 'Soap Cases & Dispensers'),
(480, 106, 'Bath Stool, Basin & Sets'),
(481, 106, 'Other Plastic Ware'),
(482, 107, 'Lamp & Lamp Oil'),
(483, 107, 'Camphor & Wicks'),
(484, 107, 'Candles & Match Box'),
(485, 107, 'Agarbatti, Incense Sticks'),
(486, 107, 'Other Pooja Needs'),
(487, 107, 'Pooja Thali & Bells'),
(488, 108, 'Shoe Polish'),
(489, 108, 'Shoe Shiners & Brushes'),
(490, 108, 'Car Freshener'),
(491, 108, 'Car Polish & Cleaners'),
(492, 109, 'Caps, Balloons & Candles'),
(493, 109, 'Disposable Cups & Plates'),
(494, 109, 'Decorations'),
(495, 109, 'Seasonal Accessories'),
(496, 109, 'Gift Wraps & Bags'),
(497, 109, 'Rakhi'),
(498, 109, 'Gifts'),
(499, 109, 'Holi Colours & Pichkari'),
(500, 110, 'Pen, Pencils'),
(501, 110, 'Scissor, Glue & Tape'),
(502, 110, 'Notebooks, Files, Folders'),
(503, 110, 'Colours & Crayons'),
(504, 110, 'Exam Pads & Pencil Box'),
(505, 110, 'Erasers & Sharpeners'),
(506, 111, 'Pet Meals & Treats'),
(507, 111, 'Pet Cleaning & Grooming'),
(508, 111, 'Pet Feeding Support'),
(509, 111, 'Health Supplements'),
(510, 111, 'Pet Collars & Leashes'),
(511, 111, 'Pet Toys'),
(512, 112, 'Plates & Tumblers'),
(513, 112, 'Bowls & Vessels'),
(514, 112, 'Steel Storage Containers'),
(515, 112, 'Steel Lunch Boxes'),
(516, 113, 'Fertilizers & Pesticides'),
(517, 113, 'Pots, Planters & Trays'),
(518, 113, 'Gardening Tools'),
(519, 113, 'Seeds & Sapling'),
(520, 114, 'Pressure Cookers'),
(521, 114, 'Tawa & Sauce Pan'),
(522, 114, 'Cookware Sets'),
(523, 114, 'Kadai & Fry Pans'),
(524, 114, 'Cook And Serve'),
(525, 114, 'Microwavable Cookware'),
(526, 115, 'Battery & Electrical'),
(527, 115, 'CFL & Led Bulbs'),
(528, 115, 'Coffee Maker & Kettles'),
(529, 115, 'Grills & Toasters'),
(530, 115, 'Juicer, Mixer & Grinders'),
(531, 116, 'Plates & Tumblers'),
(532, 116, 'Bowls & Vessels'),
(533, 116, 'Steel Storage Containers'),
(534, 116, 'Steel Lunch Boxes'),
(535, 117, 'Vacuum Flask'),
(536, 117, 'Lunch Boxes & Bottles'),
(537, 117, 'Casserole'),
(538, 118, 'Glassware'),
(539, 118, 'Cups, Mugs & Tumblers'),
(540, 118, 'Dinner Sets'),
(541, 118, 'Plates & Bowls'),
(542, 118, 'Cutlery, Spoon & Fork'),
(543, 119, 'Bakeware Moulds, Cutters'),
(544, 119, 'Baking Tools & Brushes'),
(545, 119, 'Bakeware Accessories'),
(546, 120, 'Wall Hooks & Hangers'),
(547, 120, 'Containers Sets'),
(548, 120, 'Racks & Holders'),
(549, 120, 'Water & Fridge Bottles'),
(550, 120, 'Lunch Boxes'),
(551, 120, 'Cloth Dryer & Iron Table'),
(552, 121, 'Farm Eggs'),
(553, 121, 'Protein Eggs'),
(554, 121, 'Country Eggs'),
(555, 121, 'Organic Eggs'),
(556, 121, 'Other Eggs'),
(557, 122, 'Frozen Chicken'),
(558, 122, 'Fresh Chicken'),
(559, 122, 'Duck & Goose'),
(560, 122, 'Turkey'),
(561, 123, 'Frozen Mutton'),
(562, 123, 'Fresh Mutton'),
(563, 123, 'Steaks & Ribs'),
(564, 124, 'Pork & Ham'),
(565, 124, 'Chicken Sausages'),
(566, 124, 'Turkey & Duck'),
(567, 124, 'Lamb'),
(568, 125, 'Fresh & Frozen Pork'),
(569, 126, 'Frozen Fish & Seafood'),
(570, 126, 'Dry Fish'),
(571, 126, 'Canned Seafood'),
(572, 126, 'Fresh Fish'),
(573, 126, 'Other Seafood'),
(574, 126, 'Prawns & Shrimps'),
(575, 127, 'Marinated Meat'),
(576, 128, 'Extra Virgin Olive Oil'),
(577, 128, 'Canola & Rapeseed Oil'),
(578, 128, 'Pure, Pomace Olive Oil'),
(579, 128, 'Balsamic & Cider Vinegar'),
(580, 128, 'Regular & White Vinegar'),
(581, 128, 'Flavoured & Other Oils'),
(582, 128, 'Organic & Cold Press Oil'),
(583, 128, 'Wine & Rice Vinegar'),
(584, 129, 'Flavoured & Greek Yogurt'),
(585, 129, 'Tofu'),
(586, 129, 'Milk & Soya Drinks'),
(587, 129, 'International Cheese'),
(588, 129, 'Gourmet Ice Cream'),
(589, 129, 'Butter & Cream'),
(590, 129, 'Cream & Cheese Spreads'),
(591, 130, 'Nachos & Chips'),
(592, 130, 'Dry Fruits & Berries'),
(593, 130, 'Roasted Seeds & Nuts'),
(594, 130, 'Gourmet Popcorn'),
(595, 130, 'Healthy, Baked Snacks'),
(596, 130, 'Trail & Cocktail Mixes'),
(597, 131, 'Pastas & Spaghetti'),
(598, 131, 'Imported Noodles'),
(599, 131, 'Imported Soups'),
(600, 131, 'Jasmine & Sushi Rice'),
(601, 132, 'Curry Paste, Coconut Milk'),
(602, 132, 'Cooking Chocolate, Cocoa'),
(603, 132, 'Exotic Sugar & Salt'),
(604, 132, 'Flours & Pre-Mixes'),
(605, 132, 'Baking, Cake Decorations'),
(606, 132, 'Quinoa & Grains'),
(607, 132, 'Herbs, Seasonings & Rubs'),
(608, 132, 'Baking Accessories'),
(609, 133, 'International Chocolates'),
(610, 133, 'Luxury Chocolates, Gifts'),
(611, 133, 'Crackers & Digestive'),
(612, 133, 'Cookies, Biscotti, Wafer'),
(613, 133, 'Marshmallow, Candy, Jelly'),
(614, 134, 'Chocolate, Peanut Spread'),
(615, 134, 'Jams, Marmalade, Spreads'),
(616, 134, 'Honey & Maple Syrup'),
(617, 134, 'Mustard & Cheese Sauces'),
(618, 134, 'Hummus, Cheese, Salsa Dip'),
(619, 134, 'Thai & Asian Sauces'),
(620, 134, 'Salad Dressings'),
(621, 135, 'Imported Oats & Porridge'),
(622, 135, 'Cereal & Granola Bars'),
(623, 135, 'Muesli & Rice Cakes'),
(624, 135, 'Gourmet Flakes'),
(625, 136, 'Health Drinks'),
(626, 136, 'Non-Alcoholic Beer, Wine'),
(627, 136, 'Cocktail Mixes'),
(628, 136, 'Coffee & Pre-Mix'),
(629, 136, 'Gourmet Tea & Tea Bags'),
(630, 136, 'Aerated, Still, Sparkling'),
(631, 136, 'Gourmet Juices & Drinks'),
(632, 137, 'Beans & Pulses'),
(633, 137, 'Olive, Jalapeno, Gherkin'),
(634, 137, 'Fish & Tuna'),
(635, 137, 'Tomatoes & Vegetables'),
(636, 137, 'Fruits & Pulps'),
(637, 138, 'Diapers'),
(638, 138, 'Baby Wipes'),
(639, 138, 'Nappies & Rash Cream'),
(640, 139, 'nfant Formula'),
(641, 139, 'Baby Food'),
(642, 139, 'Organic Baby Food'),
(643, 140, 'Baby Creams & Lotions'),
(644, 140, 'Baby Laundry'),
(645, 140, 'Baby Bath'),
(646, 140, 'Baby Oil & Shampoo'),
(647, 140, 'Baby Powder'),
(648, 140, 'Baby Oral Care'),
(649, 140, 'Baby Health'),
(650, 140, 'Baby Buds'),
(651, 140, 'Baby Gift Sets'),
(652, 141, 'Maternity Health Supplements'),
(653, 141, 'Maternity Personal Care'),
(654, 142, 'Bibs & Napkins'),
(655, 142, 'Sippers & Bottles'),
(656, 142, 'Baby Dishes & Utensils'),
(657, 142, 'Nursing Tools'),
(658, 143, 'Combs, Brushes, Clippers'),
(659, 143, 'Soothers & Teethers'),
(660, 143, 'Other Baby Accessories'),
(661, 143, 'Baby Toys'),
(662, 143, 'Baby Gear & Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_userid` int(11) NOT NULL,
  `log_username` varchar(20) DEFAULT NULL,
  `log_phonenumber` varchar(20) DEFAULT NULL,
  `log_email` varchar(30) DEFAULT NULL,
  `log_address` varchar(50) DEFAULT NULL,
  `log_pincode` int(6) DEFAULT NULL,
  `log_state` varchar(20) DEFAULT NULL,
  `log_distric` varchar(20) DEFAULT NULL,
  `log_city` varchar(20) DEFAULT NULL,
  `log_area` varchar(50) DEFAULT NULL,
  `log_password` varchar(20) NOT NULL,
  `log_login` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_userid`, `log_username`, `log_phonenumber`, `log_email`, `log_address`, `log_pincode`, `log_state`, `log_distric`, `log_city`, `log_area`, `log_password`, `log_login`) VALUES
(71, 'kevin patel', '8140169137', 'kpatel9899s@gmail.com', 'Raviratanpark', 360005, 'Rajkot', 'Rajkot', 'Rajkot', 'Near indira circle', '5261', 0),
(72, 'kevin', '9426443408', 'kevypatel99@gmail.com', 'gangotripark', 66666, 'rajkot', 'aa', 'rajkot', 'r', '21', 0),
(73, 'kevin', '94264434081', 'kevypatel99@gmail.com', 'gangotripark', 66666, 'rajkot', 'aa', 'rajkot', 's', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
-- Error reading structure for table patel_mart.product: #1932 - Table 'patel_mart.product' doesn't exist in engine
-- Error reading data for table patel_mart.product: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `patel_mart`.`product`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `producta`
--

CREATE TABLE `producta` (
  `pro_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `pro_simelar` int(20) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_brand` varchar(50) NOT NULL,
  `pro_contype` varchar(20) NOT NULL,
  `pro_contity` int(100) NOT NULL,
  `pro_pack` varchar(50) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_sellprice` float NOT NULL,
  `pro_dis` int(20) NOT NULL,
  `pro_save` float NOT NULL,
  `pro_finelprice` float NOT NULL,
  `pro_detail` varchar(150) NOT NULL,
  `pro_returntime` varchar(20) NOT NULL,
  `pro_stock` int(100) NOT NULL,
  `pro_img` varchar(150) NOT NULL,
  `pro_imgb` varchar(200) NOT NULL,
  `pro_imgc` varchar(200) NOT NULL,
  `pro_imgd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producta`
--

INSERT INTO `producta` (`pro_id`, `sub_id`, `pro_simelar`, `pro_name`, `pro_brand`, `pro_contype`, `pro_contity`, `pro_pack`, `pro_price`, `pro_sellprice`, `pro_dis`, `pro_save`, `pro_finelprice`, `pro_detail`, `pro_returntime`, `pro_stock`, `pro_img`, `pro_imgb`, `pro_imgc`, `pro_imgd`) VALUES
(111, 227, 111, 'Onion', 'FRESHO', 'kg', 1, 'Multipack', 15, 22, 20, 0, 17.6, 'Onion is a vegetable which is almost like a staple in Indian food. This is also known to be one of the essential ingredients of raw salads. They come ', '1d', 10000, 'productimg/10000148_24-fresho-onion.jpg', 'productimg/', 'productimg/', 'productimg/'),
(112, 227, 111, 'Onion', 'FRESHO', 'kg', 2, 'Multipack', 30, 44, 20, 0, 35.2, 'Onion can fill your kitchen with a thick spicy aroma. It is a common base vegetable in most Indian dishes, thanks to the wonderful flavor that it adds', '1d', 10000, 'productimg/1201413_1-fresho-onion.jpg', 'productimg/', 'productimg/', 'productimg/'),
(113, 227, 111, 'Onion', 'FRESHO', 'kg', 5, 'Multipack', 80, 110, 20, 0, 88, 'Onion can fill your kitchen with a thick spicy aroma. It is a common base vegetable in most Indian dishes, thanks to the wonderful flavor that it adds', '1d', 10000, 'productimg/1201414_1-fresho-onion.jpg', 'productimg/', 'productimg/', 'productimg/'),
(115, 227, 115, 'Potato', 'FRESHO', 'kg', 1, 'Multipack', 19, 40, 48, 0, 20.8, 'Fresho Potatoes are nutrient-dense, non-fattening and have reasonable amount of calories. Include them in your regular meals so that the body receives', '1d', 10000, 'productimg/10000159_25-fresho-potato.jpg', 'productimg/', 'productimg/', 'productimg/'),
(117, 227, 117, 'Tomato - Hybrid', 'FRESHO', 'kg', 1, 'Multipack', 10, 28, 39, 0, 17.08, 'Tomato Hybrids are high-quality fruits compared to desi, local tomatoes. They contain numerous edible seeds and are red in colour due to lycopene, an ', '1d', 10000, 'productimg/10000200_17-fresho-tomato-hybrid.jpg', '', '', ''),
(118, 227, 177, 'Tomato - Hybrid', 'FRESHO', 'gm', 500, 'Multipack', 5, 15, 43, 0, 8.55, 'Tomato Hybrids are high-quality fruits compared to desi, local tomatoes. They contain numerous edible seeds and are red in colour due to lycopene, an ', '1d', 10000, 'productimg/10000200_17-fresho-tomato-hybrid.jpg', '', '', ''),
(119, 227, 119, 'Potato Onion Tomato 1 kg Each', 'FRESHO', 'kg', 3, 'Multipack', 50, 99, 30, 0, 69.3, 'Click here for delicious vegetable recipes ', '1d', 10000, 'productimg/1200045_1-fresho-potato-onion-tomato-1-kg-each.jpg', 'productimg/', 'productimg/', 'productimg/'),
(120, 227, 120, 'Sweet Potato', 'FRESHO', 'kg', 1, 'Multipack', 60, 84, 20, 0, 67.2, 'With flesh colours ranging from white, orange and yellow, sweet potatoes are ovate and cylindrical with golden brown or white-brown skin and a delicio', '1d', 10000, 'productimg/10000193_12-fresho-sweet-potato.jpg', '', '', ''),
(121, 227, 121, 'Baby Potato', 'FRESHO', 'kg', 1, 'Multipack', 30, 40, 20, 0, 32, 'These small baby potatoes are a sweeter variety than normal ones and come with a creamy off white interior. Baby potato is a starchy vegetable that ad', '1d', 10000, 'productimg/10000316_15-fresho-baby-potato.jpg', 'productimg/10000316-2_2-fresho-baby-potato.jpg', 'productimg/10000316-3_1-fresho-baby-potato.jpg', 'productimg/'),
(122, 227, 121, 'Baby Potato', 'FRESHO', 'gm', 500, 'Multipack', 10, 16, 20, 0, 12.8, 'These small baby potatoes are a sweeter variety than normal ones and come with a creamy off white interior. Baby potato is a starchy vegetable that ad', '1d', 10000, 'productimg/10000316_15-fresho-baby-potato.jpg', 'productimg/', 'productimg/', 'productimg/'),
(123, 227, 123, 'Tomato - Cherry', 'FRESHO', 'gm', 250, 'Multipack', 30, 45, 20, 0, 36, 'Having the size, colour and juiciness of cherries, cherry tomatoes are sweeter to taste than regular varieties. We pick these tomatoes from reputed fa', '1d', 10000, 'productimg/10000198_9-fresho-tomato-cherry.jpg', 'productimg/', 'productimg/', 'productimg/'),
(124, 227, 124, 'Onion - White', 'FRESHO', 'kg', 1, 'Multipack', 40, 57, 20, 0, 45.6, 'White onions have an all-white skin and flesh. White onions are not as pungent as yellow varieties or as sweet as red onions. White onions are an imme', '1d', 10000, 'productimg/30000597_12-fresho-onion-white.jpg', 'productimg/', 'productimg/', 'productimg/'),
(127, 227, 127, 'Tomato - Hybrid', 'Fresho Premium', 'pcs', 8, 'Multipack', 15, 28, 20, 0, 22.4, 'Tomato - Hybrid', '1d', 10000, 'productimg/40129529_2-fresho-premium-tomato-hybrid.jpg', 'productimg/', 'productimg/', 'productimg/'),
(128, 227, 128, 'New Potato', 'FRESHO', 'kg', 1, 'Multipack', 10, 19, 20, 0, 15.2, 'Fresho New potatoes are freshly picked from the best of farms and as the name suggests they are a new crop. Because of this, they have a thinner skin ', '1d', 10000, 'productimg/40048457_4-fresho-new-potato.jpg', 'productimg/', 'productimg/', 'productimg/'),
(129, 228, 129, 'Capsicum - Green', 'FRESHO', 'kg', 1, 'Multipack', 70, 99, 20, 0, 79.2, 'Leaving a moderately pungent taste on the tongue, Green capsicums, also known as green peppers are bell shaped, medium-sized fruit pods. They have thi', '1d', 10000, 'productimg/10000067_23-fresho-capsicum-green.jpg', 'productimg/', 'productimg/', 'productimg/'),
(130, 228, 129, 'Capsicum - Green', 'FRESHO', 'gm', 250, 'Multipack', 16, 29, 20, 0, 23.2, 'Leaving a moderately pungent taste on the tongue, Green capsicums, also known as green peppers are bell shaped, medium-sized fruit pods. They have thi', '1d', 10000, 'productimg/10000067_23-fresho-capsicum-green.jpg', 'productimg/', 'productimg/', 'productimg/'),
(131, 228, 129, 'Capsicum - Green', 'FRESHO', 'gm', 500, 'Multipack', 36, 52, 20, 0, 41.6, 'Leaving a moderately pungent taste on the tongue, Green capsicums, also known as green peppers are bell shaped, medium-sized fruit pods. They have thi', '1d', 10000, 'productimg/10000067_23-fresho-capsicum-green.jpg', 'productimg/', 'productimg/', 'productimg/'),
(139, 235, 139, 'Coriander Leaves', 'FRESHO', 'kg', 5000, 'Box', 50, 100, 10, 0, 90, 'Coriander leaves are green, fragile with a decorative appearance. They contain minimal aroma and have a spicy sweet taste. Now do not bother wasting t', '1d', 10000, 'productimg/10000099_9-fresho-coriander-leaves.jpg', 'productimg/', 'productimg/', 'productimg/');

-- --------------------------------------------------------

--
-- Table structure for table `pro_brand`
--

CREATE TABLE `pro_brand` (
  `bra_id` int(20) NOT NULL,
  `bra_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_brand`
--

INSERT INTO `pro_brand` (`bra_id`, `bra_name`) VALUES
(15, ''),
(16, 'FRESHO'),
(17, 'Fresho Premium');

-- --------------------------------------------------------

--
-- Table structure for table `pro_category`
--

CREATE TABLE `pro_category` (
  `cat_id` int(20) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_category`
--

INSERT INTO `pro_category` (`cat_id`, `cat_name`) VALUES
(1, ''),
(27, 'Fruits & Vegetables'),
(28, 'Foodgrains, Oil & Ma'),
(29, 'Bakery, Cakes & Dair'),
(30, 'Beverages'),
(31, 'Snacks & Branded Foo'),
(32, 'Beauty & Hygiene'),
(33, 'Cleaning & Household'),
(34, 'Kitchen, Garden & Pe'),
(35, 'Eggs, Meat & Fish'),
(36, 'Gourmet & World Food'),
(37, 'Baby Care'),
(38, 'View All');

-- --------------------------------------------------------

--
-- Table structure for table `pro_contity`
--

CREATE TABLE `pro_contity` (
  `con_id` int(20) NOT NULL,
  `con_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_contity`
--

INSERT INTO `pro_contity` (`con_id`, `con_name`) VALUES
(1, ''),
(8, 'kg'),
(9, 'gm'),
(10, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `pro_packing`
--

CREATE TABLE `pro_packing` (
  `pac_id` int(20) NOT NULL,
  `pac_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_packing`
--

INSERT INTO `pro_packing` (`pac_id`, `pac_name`) VALUES
(1, ''),
(5, 'Multipack'),
(6, 'Box');

-- --------------------------------------------------------

--
-- Table structure for table `pro_ret`
--

CREATE TABLE `pro_ret` (
  `ret_id` int(20) NOT NULL,
  `ret_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_ret`
--

INSERT INTO `pro_ret` (`ret_id`, `ret_name`) VALUES
(1, ''),
(3, 'noreturn'),
(7, '1d'),
(8, '2d'),
(9, '3d'),
(10, '4d'),
(11, '5d'),
(12, '6d'),
(13, '7d'),
(14, 'd8'),
(15, '9d'),
(16, '10d');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `cat_id`, `sub_name`) VALUES
(1, 2, ''),
(54, 27, 'Fresh Vegetables'),
(55, 27, 'Herbs & Seasonings'),
(56, 27, 'Fresh Fruits'),
(57, 27, 'Cuts & Sprouts'),
(58, 27, 'Exotic Fruits & Veggies'),
(59, 27, 'Organic Fruits & Vegetables'),
(60, 27, 'Flower Bouquets, Bunche'),
(61, 28, 'Atta, Flours & Sooji'),
(62, 28, 'Rice & Rice Products'),
(63, 28, 'Dals & Pulses'),
(64, 28, 'Salt, Sugar & Jaggery'),
(65, 28, 'Edible Oils & Ghee'),
(66, 28, 'Organic Staplesv'),
(67, 28, 'Masalas & Spices'),
(68, 28, 'Dry Fruits'),
(69, 29, 'Dairy'),
(70, 29, 'Breads & Buns'),
(71, 29, 'Cookies, Rusk & Khari'),
(72, 29, 'Gourmet Breads'),
(73, 29, 'Bakery Snacks'),
(74, 29, 'Ice Creams & Desserts'),
(75, 29, 'Cakes & Pastries'),
(76, 30, 'Water'),
(77, 30, 'Health Drink, Supplement'),
(78, 30, 'Tea'),
(79, 30, 'Coffee'),
(80, 30, 'Energy & Soft Drinks'),
(81, 30, 'Fruit Juices & Drinks'),
(82, 31, 'Breakfast Cereals'),
(83, 31, 'Noodle, Pasta, Vermicelli'),
(84, 31, 'Biscuits & Cookies'),
(85, 31, 'Frozen Veggies & Snacks'),
(86, 31, 'Snacks & Namkeen'),
(87, 31, 'Spreads, Sauces, Ketchup'),
(88, 31, 'Ready To Cook & Eat'),
(89, 31, 'Chocolates & Candies'),
(90, 31, 'Pickles & Chutney'),
(91, 31, 'Indian Mithai'),
(92, 32, 'Oral Care'),
(93, 32, 'Feminine Hygiene'),
(94, 32, 'Bath & Hand Wash'),
(95, 32, 'Hair Care'),
(96, 32, 'Health & Medicine'),
(97, 32, 'Men\"s Grooming'),
(98, 32, 'Skin Care'),
(99, 32, 'Fragrances & Deos'),
(100, 32, 'Makeup'),
(101, 33, 'Detergents & Dishwash'),
(102, 33, 'All Purpose Cleaners'),
(103, 33, 'Disposables, Garbage Bag'),
(104, 33, 'Fresheners & Repellents'),
(105, 33, 'Mops, Brushes & Scrubs'),
(106, 33, 'Bins & Bathroom Ware'),
(107, 33, 'Pooja Needs'),
(108, 33, 'Car & Shoe Care'),
(109, 33, 'Party & Festive Needs'),
(110, 33, 'Stationery'),
(111, 34, 'Pet Food & Accessories'),
(112, 34, 'Steel Utensils'),
(113, 34, 'Gardening'),
(114, 34, 'Cookware & Non Stick'),
(115, 34, 'Appliances & Electricals'),
(116, 34, 'Kitchen Accessories'),
(117, 34, 'Flask & Casserole'),
(118, 34, 'Crockery & Cutlery'),
(119, 34, 'Bakeware'),
(120, 34, 'Storage & Accessories'),
(121, 35, 'Eggs'),
(122, 35, 'Poultry'),
(123, 35, 'Mutton & Lamb'),
(124, 35, 'Sausages, Bacon & Salami'),
(125, 35, 'Pork & Other Meats'),
(126, 35, 'Fish & Seafood'),
(127, 35, 'Marinades'),
(128, 36, 'Oils & Vinegar'),
(129, 36, 'Dairy & Cheese'),
(130, 36, 'Snacks, Dry Fruits, Nuts'),
(131, 36, 'Pasta, Soup & Noodles'),
(132, 36, 'Cooking & Baking Needs'),
(133, 36, 'Chocolates & Biscuits'),
(134, 36, 'Sauces, Spreads & Dips'),
(135, 36, 'Cereals & Breakfast'),
(136, 36, 'Drinks & Beverages'),
(137, 36, 'Tinned & Processed Food'),
(138, 37, 'Diapers & Wipes'),
(139, 37, 'Baby Food & Formula'),
(140, 37, 'Baby Bath & Hygiene'),
(141, 37, 'Mothers & Maternity'),
(142, 37, 'Feeding & Nursing'),
(143, 37, 'Baby Accessories');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `ad_login`
--
ALTER TABLE `ad_login`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `cat_products`
--
ALTER TABLE `cat_products`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_userid`);

--
-- Indexes for table `producta`
--
ALTER TABLE `producta`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_brand`
--
ALTER TABLE `pro_brand`
  ADD PRIMARY KEY (`bra_id`);

--
-- Indexes for table `pro_category`
--
ALTER TABLE `pro_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pro_contity`
--
ALTER TABLE `pro_contity`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `pro_packing`
--
ALTER TABLE `pro_packing`
  ADD PRIMARY KEY (`pac_id`);

--
-- Indexes for table `pro_ret`
--
ALTER TABLE `pro_ret`
  ADD PRIMARY KEY (`ret_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ad_login`
--
ALTER TABLE `ad_login`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat_products`
--
ALTER TABLE `cat_products`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=663;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `producta`
--
ALTER TABLE `producta`
  MODIFY `pro_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `pro_brand`
--
ALTER TABLE `pro_brand`
  MODIFY `bra_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pro_category`
--
ALTER TABLE `pro_category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pro_contity`
--
ALTER TABLE `pro_contity`
  MODIFY `con_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pro_packing`
--
ALTER TABLE `pro_packing`
  MODIFY `pac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pro_ret`
--
ALTER TABLE `pro_ret`
  MODIFY `ret_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

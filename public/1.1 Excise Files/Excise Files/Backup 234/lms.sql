-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 12:28 AM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', NULL, '2023-10-03 14:03:09'),
(2, 'React', 'react', NULL, NULL),
(3, 'Mern Stack', 'mern-stack', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcat_id` int(11) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `long_descp` text DEFAULT NULL,
  `post_tags` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blogcat_id`, `post_title`, `post_slug`, `post_image`, `long_descp`, `post_tags`, `created_at`, `updated_at`) VALUES
(1, 3, 'Two of Amazon\'s Most Popular Prime', 'two-of-amazon\'s-most-popular-prime', 'upload/post/1778854741002902.png', '<p>11At the center of the case are two features popular with consumers: the \"Buy Now\" button and the shipping component of Amazon Prime. The FTC is arguing that Amazon undergoes an imbalance of power in its business model for sellers: making it easier to sell through them, and entirely through them, by making it very difficult to sell anywhere else. This cycle, the complaint argues, stifles competition, reinforces an unfair monopoly, and harms sellers and consumers.</p>\r\n<p>Amazon, however, told&nbsp;<em>Entrepreneur</em>&nbsp;in a statement that the practices the FTC is challenging \"have helped to spur competition and innovation across the retail industry,\" the company said. \"If the FTC gets its way, the result would be fewer products to choose from, higher prices, slower deliveries for consumers and reduced options for small businesses &mdash; the opposite of what antitrust law is designed to do.\"</p>\r\n<p>Karen Weise, a technology correspondent for&nbsp;<em>The New York Times</em>, explained on a Monday podcast episode of&nbsp;<a href=\"https://www.nytimes.com/2023/10/02/podcasts/the-daily/amazon-ftc.html\">The Daily</a>&nbsp;that the \"Buy Now\" feature is under scrutiny by the FTC because of the subsequent punitive measures imposed on sellers who may sell their product elsewhere.</p>\r\n<p>\"Amazon has these machines that go across other websites, and if they find it\'s even one penny less elsewhere, they will essentially punish the seller for that happening,\" Weise said on the podcast.</p>', 'jQuery,laravel,react,11', '2023-10-04 13:35:00', '2023-10-04 13:35:00'),
(2, 1, 'Free Webinar: What CEOs Want in a CFO', 'free-webinar:-what-ceos-want-in-a-cfo', 'upload/post/1778853196808883.png', '<p>One company that knows this very well is Oracle NetSuite. They interviewed more than a dozen CEOs to find out&nbsp;<a href=\"https://www.netsuite.com/portal/assets/pdf/wp-what-ceos-want-in-a-cfo.pdf\" target=\"_blank\" rel=\"noopener\">what they seek in a CFO</a>&nbsp;and what makes for a top finance partner. The good news: These traits are also CFO career-building powerhouses. While there were variations based on industry, some general sentiments remained constant.</p>\r\n<p>Join us for our free webinar,&nbsp;<em>What CEOs Want in a CFO</em>, presented by Oracle NetSuite and&nbsp;<em>Entrepreneur</em>. We\'ll cover seven top skills CEOs say they want from their financial partners and how CFOs can deliver.</p>\r\n<div class=\"center\"><a class=\"btn\" href=\"https://attendee.gotowebinar.com/register/1324798696020699482?source=NativeArticle\">Register Now</a></div>\r\n<p>The conversation will be led by moderator Terry Rice. He will be joined by&nbsp;<a href=\"https://www.linkedin.com/in/garymeisner/\" target=\"_blank\" rel=\"noopener\">Gary Meisner</a>, a 25+ year career CFO/VP Finance/Controller veteran, an MBA/CPA (inactive) with experience in public and private equity-backed companies, and now a Principal Value Management Consultant with Oracle NetSuite.</p>\r\n<p>Attendees of this webinar will:</p>\r\n<ul>\r\n<li>Understand how CEOs are looking for their CFOs to go well beyond the financials to serve as strategic partners who contribute to growth.</li>\r\n<li>Learn the seven key skills that were identified as critically important to CEOs.</li>\r\n<li>Get insight into the fundamental ways in which they can shape their experience and to assure they have the needed skills.</li>\r\n</ul>', 'jQuery,vue js,react', '2023-10-03 19:13:26', NULL),
(3, 2, '3 Ways to Build a Customer', '3-ways-to-build-a-customer', 'upload/post/1778853248795644.png', '<p>ompany culture is one of the hot-button issues in C-suites today, and for good reason. Providing an exceptional customer experience is directly dependent on culture. Success relies on employees to make judgment calls and creatively apply their understanding of customer needs far beyond what any rulebook could cover. Traditional customer service training and best practices will get you started, but, beyond those, you need to build and model a top-down culture of customer service.</p>\r\n<p>The essence of building a strong customer service culture is simple and straightforward, as long as you don\'t distract yourself with superficialities &mdash; the mountain bikes and ping-pong tables, the beer taps in the breakroom, the endless jargon about \"de-siloing\" and the like. It is, in fact, relatively easy to understand and to get a start on implementing. It just takes interest, a drive to succeed, and a little of what\'s (ironically) called common sense.</p>\r\n<p><strong>Related:&nbsp;<a href=\"https://www.entrepreneur.com/article/249174\" target=\"_self\" rel=\"follow\">10 Examples of Companies With Fantastic Cultures</a></strong></p>\r\n<p>Here are three steps leaders can take toward establishing and sustaining a culture of customer service:</p>\r\n<h2>1. Define your culture\'s purpose in a sentence or two.</h2>\r\n<p>Write a sentence or two that defines the purpose of your business and describes the type of behaviors you expect from every associate, manager and executive in your organization &mdash; and make sure they understand it. The definition of purpose should be direct, clear and free from the \"consultant-ese\" and jargon. As an example, one of the most powerful definitions of purpose that I know of is the one that guides the Mayo Clinic:</p>\r\n<p><em>The needs of the patient come first.</em></p>', 'jQuery,python,java,javascript', '2023-10-02 19:13:31', NULL),
(4, 1, 'Hotel Management is the Best Policy', 'hotel-management-is-the-best-policy', 'upload/post/1778853386263133.png', '<p>One company that knows this very well is Oracle NetSuite. They interviewed more than a dozen CEOs to find out&nbsp;<a href=\"https://www.netsuite.com/portal/assets/pdf/wp-what-ceos-want-in-a-cfo.pdf\" target=\"_blank\" rel=\"noopener\">what they seek in a CFO</a>&nbsp;and what makes for a top finance partner. The good news: These traits are also CFO career-building powerhouses. While there were variations based on industry, some general sentiments remained constant.</p>\r\n<p>Join us for our free webinar,&nbsp;<em>What CEOs Want in a CFO</em>, presented by Oracle NetSuite and&nbsp;<em>Entrepreneur</em>. We\'ll cover seven top skills CEOs say they want from their financial partners and how CFOs can deliver.</p>\r\n<div class=\"center\"><a class=\"btn\" href=\"https://attendee.gotowebinar.com/register/1324798696020699482?source=NativeArticle\">Register Now</a></div>\r\n<p>The conversation will be led by moderator Terry Rice. He will be joined by&nbsp;<a href=\"https://www.linkedin.com/in/garymeisner/\" target=\"_blank\" rel=\"noopener\">Gary Meisner</a>, a 25+ year career CFO/VP Finance/Controller veteran, an MBA/CPA (inactive) with experience in public and private equity-backed companies, and now a Principal Value Management Consultant with Oracle NetSuite.</p>\r\n<p>Attendees of this webinar will:</p>\r\n<ul>\r\n<li>Understand how CEOs are looking for their CFOs to go well beyond the financials to serve as strategic partners who contribute to growth.</li>\r\n<li>Learn the seven key skills that were identified as critically important to CEOs.</li>\r\n<li>Get insight into the fundamental ways in which they can shape their experience and to assure they have the needed skills.</li>\r\n</ul>', 'jQuery,java', '2023-10-04 13:13:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Development', 'development', 'upload/category/1774873546607394.png', NULL, '2023-08-21 14:55:16'),
(3, 'Business', 'business', 'upload/category/1774874802168135.png', NULL, NULL),
(4, 'It & Software', 'it-&-software', 'upload/category/1774874812846960.png', NULL, NULL),
(5, 'Finance & Accounting', 'finance-&-accounting', 'upload/category/1774874823911162.png', NULL, NULL),
(6, 'Design', 'design', 'upload/category/1774874836407870.png', NULL, NULL),
(7, 'Personal Development', 'personal-development', 'upload/category/1774874849043705.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_discount` varchar(255) NOT NULL,
  `coupon_validity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `instructor_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `instructor_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'ARIYAN', '10', '2023-10-29', 1, NULL, NULL, '2023-09-10 15:16:07', NULL),
(2, 'ADMIN', '20', '2023-09-16', 1, NULL, NULL, '2023-09-10 17:08:11', '2023-09-10 17:08:11'),
(4, 'INS', '25', '2023-11-18', 1, 2, 7, '2023-09-29 13:44:19', NULL),
(5, 'LARAVEL1', '15', '2023-11-16', 1, 2, 1, '2023-09-29 14:13:22', '2023-09-29 14:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `course_image` varchar(255) DEFAULT NULL,
  `course_title` text DEFAULT NULL,
  `course_name` text DEFAULT NULL,
  `course_name_slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `resources` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `prerequisites` text DEFAULT NULL,
  `bestseller` varchar(255) DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `highestrated` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `subcategory_id`, `instructor_id`, `course_image`, `course_title`, `course_name`, `course_name_slug`, `description`, `video`, `label`, `duration`, `resources`, `certificate`, `selling_price`, `discount_price`, `prerequisites`, `bestseller`, `featured`, `highestrated`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 'upload/course/thambnail/1775148881872977.png', 'Laravel 9 Build Advanced Complete Point Of Sale Project A-Z', 'Laravel 9 Build Advanced Complete Point Of Sale Project A-Z', 'laravel-9-build-advanced-complete-point-of-sale-project-a-z', '<p class=\"fs-15 pb-2\">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p class=\"fs-15 pb-2\">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>', 'upload/course/video/1692913896.mp4', 'Begginer', '40', '4', 'Yes', 200, 95, 'Enhance Your Skills with\r\nBest Online Courses', '1', '1', NULL, 1, '2023-08-24 15:51:36', '2023-09-10 13:37:21'),
(2, 3, 6, 2, 'upload/course/thambnail/1775215956577043.png', 'n This Course, You Will Build Real Estate Property Listing Complete Project with Laravel 10 And Build It From Scratch', 'Laravel 10 - Build Real Estate Property Listing Project A-Z', 'laravel-10---build-real-estate-property-listing-project-a-z', '<p>Are you ready to embark on an extraordinary learning journey that will transform your knowledge and skills? Look no further! I am thrilled to introduce myself as your<strong>&nbsp;best-selling online instructor.</strong></p>\r\n<p>With a track record of empowering<strong>&nbsp;70+ thousands of students worldwide</strong>, I have cultivated a reputation as a leading expert in Laravel,React,Vuejs,MERN Stack. My passion for teaching and dedication to student success have driven me to create an exceptional online learning experience tailored to your needs.</p>', 'upload/course/video/1692977864.mp4', 'Begginer', '40', '6', 'Yes', 199, 120, '✔️ You have to know basic PHP\r\n✔️ Basic HTML, CSS, Bootstrap\r\n✔️ Local Server : Xampp/Wampp/Vertrigo/Mamp', NULL, '1', NULL, 1, '2023-08-25 09:37:44', NULL),
(3, 1, 2, 2, 'upload/course/thambnail/1775216132073560.png', '1In This Course, You Will Build Build Complete Multi Vendor Ecommerce Project A-Z And Build It From Scratch', 'Laravel 9 -Build Complete Multi Vendor Ecommerce Project A-Z', 'laravel-9--build-complete-multi-vendor-ecommerce-project-a-z', '<p>Are you ready to embark on an extraordinary learning journey that will transform your knowledge and skills? Look no further! I am thrilled to introduce myself as your<strong>&nbsp;best-selling online instructor.</strong></p>\r\n<p>With a track record of empowering<strong>&nbsp;70+ thousands of students worldwide</strong>, I have cultivated a reputation as a leading expert in Laravel,React,Vuejs,MERN Stack. My passion for teaching and dedication to student success have driven me to create an exceptional online learning experience tailored to your needs.</p>', 'upload/course/video/1692978031.mp4', 'Middle', '40', '4', 'Yes', 200, 120, '✔️ You have to know basic PHP\r\n✔️ Basic HTML, CSS, Bootstrap\r\n✔️ Local Server : Xampp/Wampp/Vertrigo/Mamp', '1', '1', NULL, 1, '2023-08-25 09:40:31', NULL),
(4, 6, 15, 2, 'upload/course/thambnail/1775234017399973.png', '11In This Course, You Will Build Laravel 9 Build Inventory Management System A-Z And Build It From Scratch', 'Laravel 9 Build Inventory Management System A-Z11', 'laravel-9-build-inventory-management-system-a-z11', '<p class=\"fs-15 pb-2\">111Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p class=\"fs-15 pb-2\">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>\r\n<p class=\"fs-15 pb-1\">- Lorem ipsum dolor sit amet, consectetur.</p>\r\n<p class=\"fs-15 pt-3 pb-2 lh-22\"><strong class=\"font-weight-semi-bold text-black\">Are you aiming to get your first Java Programming job but struggling to find out what skills employers want</strong>&nbsp;and which course will give you those skills?</p>\r\n<p class=\"fs-15 pb-2\">This course is designed to give you the Java skills you need to get a job as a Java developer. By the end of the course, you will understand Java extremely well and be able to build your own Java apps and be productive as a software developer.</p>', 'upload/course/video/1692996457.mp4', 'Begginer', '40', '6', 'No', 199, 120, '✔️ You have to know basic PHP11\r\n✔️ Basic HTML, CSS, Bootstrap11\r\n✔️ Local Server : Xampp/Wampp/Vertrigo/Mamp', '1', NULL, NULL, 1, '2023-08-25 09:44:13', '2023-08-25 14:47:37'),
(6, 4, 8, 2, 'upload/course/thambnail/1775954156710679.png', 'In This Course You Will Build complete Real Time Live Chat Application by using MongoDB, Express, React, and Socket io', 'MERN Stack Real Time Chat App With Express, React, MongoDB', 'mern-stack-real-time-chat-app-with-express,-react,-mongodb', '<p>Welcome to&nbsp;<strong>\"MERN Stack Real-Time Chat Application Project\".&nbsp;</strong>In this course, we will be building an in-depth full-stack Live Chat application using&nbsp;<em>Express, React, Node.js, Socket io,&nbsp;</em>and&nbsp;<em>MongoDB</em>&nbsp;along with&nbsp;<em>ES6+</em>. We will start with a blank text editor and end with a deployed full-stack application. This course includes...</p>\r\n<ul>\r\n<li>\r\n<p>Building backend API with Node.js &amp; Express</p>\r\n</li>\r\n<li>\r\n<p>Extensive API testing with Postman</p>\r\n</li>\r\n<li>\r\n<p>Integrating React with our backend in an elegant way, creating a great workflow</p>\r\n</li>\r\n<li>\r\n<p>Connect with Socket io.</p>\r\n</li>\r\n<li>\r\n<p>Building User Authentication with JSON Web Token</p>\r\n</li>\r\n<li>\r\n<p>Get and Post Request using MongoDB</p>\r\n</li>\r\n<li>\r\n<p>and much more...</p>\r\n</li>\r\n</ul>\r\n<p>This course project is probably the biggest and most exciting project you have built so far. It is packed with hundreds of tips and tricks that can help you build almost any type of full-stack app .</p>\r\n<p>Master the art of building FullStack/MERN Stack apps by enrolling in this course and never look back. What you are now and what you will become after completing this course is going to be a groundbreaking step in your mern stack career.</p>\r\n<p>You can build the biggest and most complex apps of your dream or as required at your job. Master the stack of all stacks and become the most productive and innovative developer of your team. I welcome you to be a part of this incredible journey.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How i design This course :</strong></p>\r\n<p>This course will be all in one complete MERN Stack project course. For that reason first, you will learn JavaScript all fundamentals which is very important to build your strong foundation. Then you will learn react js by creating one complete project. you will learn node js/ express js / MongoDB and Socket io all basic fundamentals that you should know.</p>\r\n<p>After compete total basic journey then you will build one complete real-time chat application from scratch.</p>\r\n<p>In this Live Chat Application project, you will learn.</p>', 'upload/course/video/1693681866.mp4', 'Middle', '40', '6', 'Yes', 84, NULL, 'Anyone that wants to learn how to build a full stack MERN application\r\nWho want to become MERN Stack Developer.', '1', '1', NULL, 1, '2023-09-02 13:11:06', NULL),
(7, 5, 13, 2, 'upload/course/thambnail/1775954306207146.png', 'In this course you learn A-Z Tailwind CSS 3 Basic Fundamental Then Build one Blog Project and Ecommerce Project.', 'Tailwind CSS 3 | Learn By Building Multiple Projects A-Z', 'tailwind-css-3-|-learn-by-building-multiple-projects-a-z', '<p>learn Tailwind CSS 3 seriously then that will be the best course for you. First, what is tailwind CSS?&nbsp; Tailwind is a utility-first CSS framework to rapidly build modern websites without ever leaving your HTML. it\'s a massive collection of tiny CSS utility classes for quickly and consistently building good-looking websites and it\'s a most demanding CSS framework nowadays.</p>\r\n<p>&nbsp;</p>\r\n<p>✔️<strong>&nbsp;How i design this course</strong></p>\r\n<p>First, you will learn all the basic fundamentals of<strong>&nbsp;Tailwind CSS 3</strong>&nbsp;. You will learn all&nbsp;<strong>tailwind&nbsp;</strong>CSS utility classes with one-by-one live examples so it will help you to build one strong foundation of&nbsp;<strong>tailwind CSS</strong>. Then together with all fundamental experiences, you will develop multiple real-life projects. In Our first project will be you will build one complete basic blog site design then you will go deeper and you will complete this total journey by developing one complete professional eCommerce template design from scratch.</p>\r\n<p>&nbsp;</p>\r\n<p>✔️<strong>&nbsp;Blog Project</strong></p>\r\n<p>I don\'t want to jump right into the projects, though you certainly could if you want. So the first three sections, we will be working on the basic fundamentals of<strong>&nbsp;Tailwind CSS 3</strong>. Then you will start to build One complete blog project. In to this blog project you will build one home page and post a details page where I will use multiple&nbsp;<strong>tailwind&nbsp;</strong>CSS utility classes. And also you will learn how to make this so much responsive website with using tailwind.</p>\r\n<p>&nbsp;</p>\r\n<p>✔️<strong>&nbsp;Ecommerce-Projects</strong></p>\r\n<p>Next, we will take what we learn in the basic fundamentals and blog project.&nbsp; Then you will start to build one complete professional eCommerce template design from scratch. You will create all most every pages for the eCommerce site. Like</p>\r\n<p>&nbsp;</p>', 'upload/course/video/1693682009.mp4', 'Advance', '40', '4', 'Yes', 199, 120, 'Having some experience with CSS are necessary. \r\nExperience with other CSS frameworks like Bootstrap will help but are not mandatory.\r\nUsing a code editor', NULL, '1', NULL, 1, '2023-09-02 13:13:29', NULL),
(8, 6, 15, 2, 'upload/course/thambnail/1775954458436542.png', 'In This Complete Course You Will Learn How to Create Professional Opencart Multi Vendor eCommerce Store.', 'Opencart 3 Complete Ecommerce Project With Multi Vendor', 'opencart-3-complete-ecommerce-project-with-multi-vendor', '<p><strong>opencart tutorial | opencart multi vendor</strong></p>\r\n<p><strong>Best Opencart Course on Udemy.</strong></p>\r\n<p><strong>Opencart</strong>&nbsp;is an open-source PHP based eCommerce software. It helps you set up your own online store and run your eCommerce business cost-effectively and&nbsp;one of the fasted growing E-Commerce software that is very fast, lightweight on the server, easily customizable, and&nbsp;open source.</p>\r\n<p>This comprehensive course is designed for opencart beginners and step by step take&nbsp;you the basics to the master level of opencart that you all you need to know. You will be able to build a fully &ndash; functional&nbsp; A -Z&nbsp;<strong>Multi-Vendor&nbsp;</strong>online store with opencart 3.&nbsp;</p>\r\n<p>I create this course from my professional experience so at the end of the course I think you will get all that answer that you want to know. My goal is to become you expert, that you can earn money from your new skill.&nbsp;&nbsp;</p>\r\n<p><strong>When i update&nbsp;something new,</strong> I add it to the course - at no additional cost to you! This is a course that will continue to add more and more to every aspect of your life.</p>', 'upload/course/video/1693682154.mp4', 'Begginer', '40', '4', 'Yes', 200, 120, 'Beginners who wants to Setup Multi Vendor E-Commerce Website in OpenCart 3.3.x\r\nAnyone Wants to Make his Own Online Business\r\nAnyone Wants to Know How to Sell Products Online', '1', '1', NULL, 1, '2023-09-02 13:15:54', '2023-09-10 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `course_goals`
--

CREATE TABLE `course_goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `goal_name` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_goals`
--

INSERT INTO `course_goals` (`id`, `course_id`, `goal_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Stock Management System2', '2023-08-24 15:51:36', '2023-08-24 15:51:36'),
(2, 1, 'Multi-Authentication as User-Agent-Admin22', '2023-08-24 15:51:36', '2023-08-24 15:51:36'),
(3, 1, 'Stock Management System2', '2023-08-24 15:51:36', '2023-08-24 15:51:36'),
(4, 2, 'Multi-Authentication as User-Agent-Admin', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(5, 2, 'Advance Property Search Option', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(6, 2, 'Multi-Authentication as User-Agent-Admin', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(7, 2, 'User Roles and Permission', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(8, 2, 'Property Mailing System', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(9, 2, 'Property Wishlist Option', '2023-08-25 09:37:44', '2023-08-25 09:37:44'),
(10, 3, 'Multi-Authentication as User-Agent-Admin', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(11, 3, 'Advance Property Search Option', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(12, 3, 'Multi-Authentication as User-Agent-Admin', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(13, 3, 'User Roles and Permission', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(14, 3, 'Property Mailing System', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(15, 3, 'Property Wishlist Option', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(16, 3, 'Property Compare Option', '2023-08-25 09:40:31', '2023-08-25 09:40:31'),
(48, 4, '11Create Complete News Portal Project', '2023-08-25 15:49:24', '2023-08-25 15:49:24'),
(49, 4, 'Multiple Language Option', '2023-08-25 15:49:24', '2023-08-25 15:49:24'),
(50, 4, '11Laravel 8 A-Z Basic Fandamentals', '2023-08-25 15:49:24', '2023-08-25 15:49:24'),
(51, 4, 'Adding Professional Theme for Frontend', '2023-08-25 15:49:24', '2023-08-25 15:49:24'),
(52, 4, 'Adding Professional Theme for Backend', '2023-08-25 15:49:24', '2023-08-25 15:49:24'),
(56, 6, 'Build Complete Live Chat App', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(57, 6, 'React js Fundamental', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(58, 6, 'Express js Fundamental', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(59, 6, 'Socket io Fundamental', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(60, 6, 'User Data Store in Redux', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(61, 6, 'Functional Component, Redux', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(62, 6, 'Send Emoji and Image Message', '2023-09-02 13:11:06', '2023-09-02 13:11:06'),
(63, 7, 'How to customize Tailwind', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(64, 7, 'Using Tailwind in VS Code', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(65, 7, 'Deploying it to WebServer', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(66, 7, 'Create Complete Ecommerce Template', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(67, 7, 'Ecommerce Home Page Setup', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(68, 7, 'Ecommerce Product Details Page Setup', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(69, 7, 'Ecommerce User Account and Register', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(70, 7, 'Wishlist and Checkout Page Setup', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(71, 7, 'Ecommerce Cart and Order Page Setup', '2023-09-02 13:13:29', '2023-09-02 13:13:29'),
(72, 8, 'Install and Setup OpenCart 3.3 E-Commerce Platform', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(73, 8, 'Setting Up Marketing , Affiliates, Coupons, Gift Vouchers', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(74, 8, 'Setting Up Theme, Modules, Mega Menu, Layer Sliders', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(75, 8, 'Opencart Backup and Restore, SEO, Security', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(76, 8, 'Install New Module and Customize Module', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(77, 8, 'One Page Checkout System Setup', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(78, 8, 'Adding New Product, Categories, Filters, Options', '2023-09-02 13:15:54', '2023-09-02 13:15:54'),
(79, 8, 'Install and Setup Multi Vendor In Opencart', '2023-09-02 13:15:54', '2023-09-02 13:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `course_lectures`
--

CREATE TABLE `course_lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `lecture_title` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_lectures`
--

INSERT INTO `course_lectures` (`id`, `course_id`, `section_id`, `lecture_title`, `video`, `url`, `content`, `created_at`, `updated_at`) VALUES
(7, 7, 4, 'Introduction To Tailwind', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 15:53:05', '2023-09-03 15:53:05'),
(8, 7, 4, 'Installing Node', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 15:53:29', '2023-09-03 15:53:29'),
(9, 7, 4, 'Installing VS Code', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 15:53:45', '2023-09-03 15:53:45'),
(10, 7, 5, 'Tailwind Installation', NULL, 'https://www.youtube.com/embed/e8eSfqaaGXQ?list=RD01XopxDxQI8', NULL, '2023-09-03 15:54:17', '2023-09-03 15:54:17'),
(11, 7, 5, 'Utility-First Approach Part 1', NULL, 'https://www.youtube.com/embed/j8PvKoeHO1Y', NULL, '2023-09-03 15:54:42', '2023-09-03 15:54:42'),
(12, 7, 5, 'Utility-First Approach Part 2', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 15:54:57', '2023-09-03 15:54:57'),
(13, 7, 5, 'Responsive variants - Tailwind Breakpoints', NULL, NULL, '✔️ How i design this course\n\nFirst, you will learn all the basic fundamentals of Tailwind CSS 3 . You will learn all tailwind CSS utility classes with one-by-one live examples so it will help you to build one strong foundation of tailwind CSS. Then together with all fundamental experiences, you will develop multiple real-life projects. In Our first project will be you will build one complete basic blog site design then you will go deeper and you will complete this total journey by developing one complete professional eCommerce template design from scratch.', '2023-09-03 15:55:35', '2023-09-03 15:55:35'),
(14, 7, 6, 'Hover Focus & Other State Variants', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 15:55:50', '2023-09-03 15:55:50'),
(15, 7, 6, 'Dark Mode Variants Part 1', NULL, 'https://www.youtube.com/embed/WFb0_jqUj9U', NULL, '2023-09-03 15:56:05', '2023-09-03 15:56:05'),
(16, 7, 6, 'Dark Mode Variants Part 2', NULL, 'https://www.youtube.com/embed/38jCCWeuHeU', NULL, '2023-09-03 15:56:18', '2023-09-03 15:56:18'),
(17, 6, 7, 'Development Environment Setup', NULL, 'https://player.vimeo.com/video/151390908?h=955cb14d46&title=0&byline=0&portrait=0', NULL, '2023-09-03 15:58:42', '2023-09-20 14:55:56'),
(18, 6, 7, 'Uses of Console and Comments in JavaScript', NULL, 'https://player.vimeo.com/video/43014286?h=d8a2fc3f50', NULL, '2023-09-03 15:58:55', '2023-09-20 14:56:29'),
(19, 6, 7, 'What is ES6', NULL, NULL, 'Welcome to Motion Graphics in After Effects.\r\nIn the next lectures you will start creating your first animation and animate imported footage.\r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes,\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.\r\nOccaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.\r\nEt harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,', '2023-09-03 15:59:15', '2023-09-20 14:54:21'),
(20, 6, 8, 'Declare a Variable', NULL, NULL, '✔️ How i design this course\n\nFirst, you will learn all the basic fundamentals of Tailwind CSS 3 . You will learn all tailwind CSS utility classes with one-by-one live examples so it will help you to build one strong foundation of tailwind CSS. Then together with all fundamental experiences, you will develop multiple real-life projects. In Our first project will be you will build one complete basic blog site design then you will go deeper and you will complete this total journey by developing one complete professional eCommerce template design from scratch.', '2023-09-03 15:59:38', '2023-09-03 15:59:38'),
(21, 6, 8, 'Uses of Let and Const', NULL, 'https://www.youtube.com/embed/e8eSfqaaGXQ?list=RD01XopxDxQI8', NULL, '2023-09-03 15:59:53', '2023-09-03 15:59:53'),
(22, 6, 8, 'Primitive Data types', NULL, 'https://www.youtube.com/embed/8cD0kL4gUeA?si=pztj7naNgL4xVCSa', NULL, '2023-09-03 16:00:06', '2023-09-20 15:15:06'),
(23, 6, 9, 'Reference types: Object (Basics)', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 16:00:20', '2023-09-03 16:00:20'),
(24, 6, 9, 'Reference types: Array (Basics)', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 16:00:39', '2023-09-03 16:00:39'),
(25, 6, 10, 'Template Literals', NULL, 'https://www.youtube.com/embed/WFb0_jqUj9U', NULL, '2023-09-03 16:00:55', '2023-09-03 16:00:55'),
(26, 6, 10, 'Arithmetic Operators', NULL, 'https://www.youtube.com/embed/38jCCWeuHeU', NULL, '2023-09-03 16:01:08', '2023-09-03 16:01:08'),
(27, 1, 11, 'Install Laravel 9', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 16:03:05', '2023-09-03 16:03:05'),
(28, 1, 11, 'Create Database and Configuration', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 16:03:17', '2023-09-03 16:03:17'),
(29, 1, 11, 'Install Laravel Breeze', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 16:03:31', '2023-09-03 16:03:31'),
(30, 1, 12, 'Admin Template Setup', NULL, 'https://www.youtube.com/embed/e8eSfqaaGXQ?list=RD01XopxDxQI8', NULL, '2023-09-03 16:03:51', '2023-09-03 16:03:51'),
(31, 1, 12, 'Dashboard Page Segmentation', NULL, 'https://www.youtube.com/embed/j8PvKoeHO1Y', NULL, '2023-09-03 16:04:05', '2023-09-03 16:04:05'),
(32, 1, 12, 'Admin Logout Option', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 16:04:22', '2023-09-03 16:04:22'),
(33, 1, 13, 'Employee Management Part 1', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 16:04:37', '2023-09-03 16:04:37'),
(34, 1, 13, 'Employee Management Part 2', NULL, 'https://www.youtube.com/embed/WFb0_jqUj9U', NULL, '2023-09-03 16:04:51', '2023-09-03 16:04:51'),
(35, 1, 13, 'Employee Management Part 3', NULL, 'https://www.youtube.com/embed/38jCCWeuHeU', NULL, '2023-09-03 16:05:04', '2023-09-03 16:05:04'),
(36, 1, 14, 'Customer Management Part 1', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 16:05:19', '2023-09-03 16:05:19'),
(37, 1, 14, 'Customer Management Part 2', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 16:05:31', '2023-09-03 16:05:31'),
(38, 1, 14, 'Customer Management Part 3', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 16:05:48', '2023-09-03 16:05:48'),
(39, 2, 15, 'Frontend Template Setup Part 1', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 16:07:15', '2023-09-03 16:07:15'),
(40, 2, 15, 'Frontend Template Setup Part 2', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 16:07:27', '2023-09-03 16:07:27'),
(41, 2, 15, 'Frontend Template Setup Part 3', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 16:07:37', '2023-09-03 16:07:37'),
(42, 2, 15, 'Frontend Template Login Page Setup', NULL, NULL, '✔️ How i design this course\n\nFirst, you will learn all the basic fundamentals of Tailwind CSS 3 . You will learn all tailwind CSS utility classes with one-by-one live examples so it will help you to build one strong foundation of tailwind CSS. Then together with all fundamental experiences, you will develop multiple real-life projects. In Our first project will be you will build one complete basic blog site design then you will go deeper and you will complete this total journey by developing one complete professional eCommerce template design from scratch.', '2023-09-03 16:07:57', '2023-09-03 16:07:57'),
(43, 2, 16, 'User Profile Design Part 1', NULL, 'https://www.youtube.com/embed/e8eSfqaaGXQ?list=RD01XopxDxQI8', NULL, '2023-09-03 16:08:13', '2023-09-03 16:08:13'),
(44, 2, 16, 'User Profile Design Part 2', NULL, 'https://www.youtube.com/embed/j8PvKoeHO1Y', NULL, '2023-09-03 16:08:23', '2023-09-03 16:08:23'),
(45, 2, 16, 'User Profile Design Part 3', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 16:08:37', '2023-09-03 16:08:37'),
(46, 2, 17, 'Property Type Crud Part 1', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 16:08:51', '2023-09-03 16:08:51'),
(47, 2, 17, 'Property Type Crud Part 2', NULL, 'https://www.youtube.com/embed/WFb0_jqUj9U', NULL, '2023-09-03 16:09:02', '2023-09-03 16:09:02'),
(48, 2, 17, 'Property Type Crud Part 3', NULL, 'https://www.youtube.com/embed/38jCCWeuHeU', NULL, '2023-09-03 16:09:13', '2023-09-03 16:09:13'),
(49, 3, 18, 'Agent Template Setup', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 16:10:27', '2023-09-03 16:10:27'),
(50, 3, 18, 'Agent Logout Option', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 16:10:39', '2023-09-03 16:10:39'),
(51, 3, 18, 'Agent Profile & Image Update', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 16:10:50', '2023-09-03 16:10:50'),
(52, 3, 19, 'Manage Agent In Admin Page Part 1', NULL, 'https://www.youtube.com/embed/e8eSfqaaGXQ?list=RD01XopxDxQI8', NULL, '2023-09-03 16:11:03', '2023-09-03 16:11:03'),
(53, 3, 19, 'Manage Agent In Admin Page Part 2', NULL, 'https://www.youtube.com/embed/j8PvKoeHO1Y', NULL, '2023-09-03 16:11:14', '2023-09-03 16:11:14'),
(54, 3, 19, 'Manage Agent In Admin Page Part 3', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 16:11:24', '2023-09-03 16:11:24'),
(55, 3, 20, 'Add Property From Agent Part 1', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 16:11:36', '2023-09-03 16:11:36'),
(56, 3, 20, 'Add Property From Agent Part 2', NULL, 'https://www.youtube.com/embed/WFb0_jqUj9U', NULL, '2023-09-03 16:11:48', '2023-09-03 16:11:48'),
(57, 3, 20, 'Add Property From Agent Part 3', NULL, 'https://www.youtube.com/embed/38jCCWeuHeU', NULL, '2023-09-03 16:11:59', '2023-09-03 16:11:59'),
(58, 4, 21, 'Design Buy Package Agent Dashboard', NULL, 'https://vimeo.com/151390908', NULL, '2023-09-03 16:15:21', '2023-09-03 16:15:21'),
(59, 4, 21, 'Agent Buy Packages Option Part 1', NULL, 'https://vimeo.com/197536889', NULL, '2023-09-03 16:15:37', '2023-09-03 16:15:37'),
(60, 4, 21, 'Agent Buy Packages Option Part 2', NULL, 'https://vimeo.com/191739596', NULL, '2023-09-03 16:15:54', '2023-09-03 16:15:54'),
(61, 4, 22, 'Package sales Report In Agent Dashboard Part 1', NULL, 'https://www.youtube.com/embed/Hu-Bdubnnj0', NULL, '2023-09-03 16:16:14', '2023-09-03 16:16:14'),
(62, 4, 22, 'Package sales Report In Agent Dashboard Part 1', NULL, 'https://www.youtube.com/embed/jbxaUpJTb2M', NULL, '2023-09-03 16:16:23', '2023-09-03 16:16:23'),
(63, 4, 22, 'Get Type Wise Property', NULL, NULL, '✔️ How i design this course\n\nFirst, you will learn all the basic fundamentals of Tailwind CSS 3 . You will learn all tailwind CSS utility classes with one-by-one live examples so it will help you to build one strong foundation of tailwind CSS. Then together with all fundamental experiences, you will develop multiple real-life projects. In Our first project will be you will build one complete basic blog site design then you will go deeper and you will complete this total journey by developing one complete professional eCommerce template design from scratch.', '2023-09-03 16:16:42', '2023-09-03 16:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

CREATE TABLE `course_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sections`
--

INSERT INTO `course_sections` (`id`, `course_id`, `section_title`, `created_at`, `updated_at`) VALUES
(4, 7, 'Section 1: Introduction To Course & Installing Required Tools', NULL, NULL),
(5, 7, 'Section 2 : Tailwind All Features', NULL, NULL),
(6, 7, 'Section 3 : Tailwind Css Basic All Element', NULL, NULL),
(7, 6, 'Section 1 : Getting Started with JavaScript', NULL, NULL),
(8, 6, 'Section 2 : Variables and Data Types', NULL, NULL),
(9, 6, 'Section 3 : JavaScript Operators', NULL, NULL),
(10, 6, 'Section 4 : Conditional Statements', NULL, NULL),
(11, 1, 'Section 1 : Multi Auth with Breeze Create Auth for User / Admin', NULL, NULL),
(12, 1, 'Section 2 : Project Admin Panel Setup', NULL, NULL),
(13, 1, 'Section 3 : Employee Management System', NULL, NULL),
(14, 1, 'Section 4 : Customer Management System', NULL, NULL),
(15, 2, 'Section 1 : Project Frontend Template Setup', NULL, NULL),
(16, 2, 'Section 2 : Project Frontend User Profile Setup', NULL, NULL),
(17, 2, 'Section 3 : Project Backend Property Type Setup', NULL, NULL),
(18, 3, 'Section 1 : Project Agent Panel Setup', NULL, NULL),
(19, 3, 'Section 2 : Manage Agent In Admin Dashboard', NULL, NULL),
(20, 3, 'Section 3 : Backend Add Property From Agent', NULL, NULL),
(21, 4, 'Section 1 : Backend Agent Buy Packages Option', NULL, NULL),
(22, 4, 'Section 2 : Package Sales Report In Agent Dashboard With PDF', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_20_202509_create_categories_table', 2),
(6, '2023_08_22_195042_create_sub_categories_table', 3),
(7, '2023_08_23_210009_create_courses_table', 4),
(8, '2023_08_23_210952_create_course_goals_table', 4),
(9, '2023_08_26_201730_create_course_sections_table', 5),
(10, '2023_08_26_201748_create_course_lectures_table', 5),
(11, '2023_09_05_212338_create_wishlists_table', 6),
(12, '2023_09_10_204348_create_coupons_table', 7),
(13, '2023_09_17_210710_create_payments_table', 8),
(14, '2023_09_17_210737_create_orders_table', 8),
(15, '2023_09_18_195749_create_smtp_settings_table', 9),
(16, '2023_09_21_200912_create_questions_table', 10),
(17, '2023_09_30_191102_create_reviews_table', 11),
(18, '2023_10_03_190656_create_blog_categories_table', 12),
(19, '2023_10_03_203415_create_blog_posts_table', 13),
(20, '2023_10_05_194858_create_notifications_table', 14),
(21, '2023_10_05_213932_create_site_settings_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('09c5da16-cdc7-4ebd-9052-e5ddd089d874', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 2, '{\"message\":\"New Cod Enrollment In Course\"}', '2023-10-05 15:21:12', '2023-10-05 14:46:12', '2023-10-05 15:21:12'),
('639b45b5-7aaa-449d-8d82-f5ff8bf73d49', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 2, '{\"message\":\"New Cod Enrollment In Course\"}', '2023-10-05 15:20:47', '2023-10-05 14:38:53', '2023-10-05 15:20:47'),
('a7f68cbe-07f6-4d66-b296-26fb663106b5', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 6, '{\"message\":\"New Cod Enrollment In Course\"}', NULL, '2023-10-05 14:46:12', '2023-10-05 14:46:12'),
('f0c0b65a-4eb3-47a8-8786-9fab6cf93c47', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 6, '{\"message\":\"New Cod Enrollment In Course\"}', NULL, '2023-10-05 14:38:53', '2023-10-05 14:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL,
  `course_title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `payment_id`, `user_id`, `course_id`, `instructor_id`, `course_title`, `price`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 1, 2, 'Laravel 9 Build Advanced Complete Point Of Sale Project A-Z', 95, '2023-09-17 17:04:28', '2023-09-17 17:04:28'),
(3, 2, 3, 2, 2, 'Laravel 10 - Build Real Estate Property Listing Project A-Z', 120, '2023-09-17 17:04:28', '2023-09-17 17:04:28'),
(4, 4, 3, 7, 2, 'Tailwind CSS 3 | Learn By Building Multiple Projects A-Z', 120, '2023-09-18 13:43:32', '2023-09-18 13:43:32'),
(5, 5, 3, 6, 2, 'MERN Stack Real Time Chat App With Express, React, MongoDB', 84, '2023-09-18 15:17:49', '2023-09-18 15:17:49'),
(7, 7, 3, 3, 2, NULL, 120, NULL, NULL),
(8, 8, 5, 1, 2, NULL, 95, NULL, NULL),
(9, 9, 5, 2, 2, 'Laravel 10 - Build Real Estate Property Listing Project A-Z', 120, '2023-09-27 16:41:31', '2023-09-27 16:41:31'),
(10, 11, 5, 3, 2, 'Laravel 9 -Build Complete Multi Vendor Ecommerce Project A-Z', 120, '2023-10-05 14:25:57', '2023-10-05 14:25:57'),
(11, 12, 5, 7, 2, 'Tailwind CSS 3 | Learn By Building Multiple Projects A-Z', 120, '2023-10-05 14:27:42', '2023-10-05 14:27:42'),
(12, 13, 5, 4, 2, 'Laravel 9 Build Inventory Management System A-Z11', 120, '2023-10-05 14:29:24', '2023-10-05 14:29:24'),
(13, 14, 4, 1, 2, 'Laravel 9 Build Advanced Complete Point Of Sale Project A-Z', 95, '2023-10-05 14:38:48', '2023-10-05 14:38:48'),
(14, 15, 4, 3, 2, 'Laravel 9 -Build Complete Multi Vendor Ecommerce Project A-Z', 120, '2023-10-05 14:46:07', '2023-10-05 14:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `cash_delivery` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `order_date` varchar(255) DEFAULT NULL,
  `order_month` varchar(255) DEFAULT NULL,
  `order_year` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `address`, `cash_delivery`, `total_amount`, `payment_type`, `invoice_no`, `order_date`, `order_month`, `order_year`, `status`, `created_at`, `updated_at`) VALUES
(2, 'User', 'user@gmail.com', '012233', 'Uttara Dhaka', 'handcash', '194', 'Direct Payment', 'EOS88073965', '17 September 2023', 'September', '2023', 'confirm', '2023-09-17 17:04:28', '2023-09-19 14:45:33'),
(3, 'User', 'user@gmail.com', '012233', 'Uttara Dhaka', 'handcash', '86', 'Direct Payment', 'EOS56320321', '17 September 2023', 'September', '2023', 'pending', '2023-09-17 17:06:50', '2023-09-17 17:06:50'),
(4, 'User', 'user@gmail.com', '012233', 'Uttara Dhaka', 'handcash', '108', 'Direct Payment', 'EOS60074987', '18 September 2023', 'September', '2023', 'pending', '2023-09-18 13:43:32', '2023-09-18 13:43:32'),
(5, 'User', 'user@gmail.com', '012233', 'Uttara Dhaka', 'handcash', '84', 'Direct Payment', 'EOS36914306', '18 September 2023', 'September', '2023', 'confirm', '2023-09-18 15:17:49', '2023-09-19 14:57:21'),
(7, 'User', 'user@gmail.com', '012233', 'Uttara Dhaka', NULL, '108', 'Stripe', 'EOS85338918', '27 September 2023', 'September', '2023', 'pending', '2023-09-27 16:35:28', NULL),
(8, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', NULL, '86', 'Stripe', 'EOS96908393', '27 September 2023', 'September', '2023', 'pending', '2023-09-27 16:40:45', NULL),
(9, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', 'handcash', '120', 'Direct Payment', 'EOS41180613', '27 September 2023', 'September', '2023', 'pending', '2023-09-27 16:41:31', '2023-09-27 16:41:31'),
(10, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', 'handcash', '95', 'Direct Payment', 'EOS70289704', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:25:05', '2023-10-05 14:25:05'),
(11, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', 'handcash', '120', 'Direct Payment', 'EOS59437066', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:25:57', '2023-10-05 14:25:57'),
(12, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', 'handcash', '120', 'Direct Payment', 'EOS61235543', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:27:42', '2023-10-05 14:27:42'),
(13, 'Raju', 'raju@gmail.com', '5566', 'Uttara Dhaka', 'handcash', '120', 'Direct Payment', 'EOS57965687', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:29:24', '2023-10-05 14:29:24'),
(14, 'khan', 'khan@gmail.com', '4343434', 'Uttara Dhaka', 'handcash', '95', 'Direct Payment', 'EOS62437884', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:38:48', '2023-10-05 14:38:48'),
(15, 'khan', 'khan@gmail.com', '3434', 'Uttara Dhaka', 'handcash', '120', 'Direct Payment', 'EOS75006858', '05 October 2023', 'October', '2023', 'pending', '2023-10-05 14:46:07', '2023-10-05 14:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `question` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course_id`, `user_id`, `instructor_id`, `parent_id`, `subject`, `question`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 2, NULL, 'I need some help', 'Plz let me know How i can catch you', '2023-09-21 14:33:38', NULL),
(2, 6, 3, 2, NULL, 'I don\'t understand', 'I don\'t understand this session', '2023-09-21 14:36:02', NULL),
(3, 6, 3, 2, 2, NULL, 'plz tell me more details about this issues', '2023-09-22 13:35:21', NULL),
(4, 6, 3, 2, 1, NULL, 'Plz give me your email address', '2023-09-22 13:40:17', NULL),
(5, 7, 3, 2, NULL, 'Need to change hosting one domain', 'how i can do this plz help me', '2023-09-22 14:27:49', NULL),
(6, 7, 3, 2, 5, NULL, 'Yes tell me how i can help you?', '2023-09-22 14:28:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `instructor_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `course_id`, `user_id`, `comment`, `rating`, `instructor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'This is very nice course', '5', 2, '0', '2023-09-30 14:27:26', NULL),
(2, 2, 3, 'I like this course', '4', 2, '1', '2023-09-30 14:28:20', '2023-10-02 14:02:52'),
(3, 1, 3, 'This instructor is very much helpful', '4', 2, '1', '2023-09-30 14:46:56', NULL),
(4, 2, 3, 'nice', '4', 2, '1', '2023-10-01 14:43:15', NULL),
(5, 2, 3, 'not good', '1', 2, '0', '2023-10-01 14:43:32', '2023-10-02 14:05:46'),
(6, 4, 3, 'Thank your so much', '5', 2, '1', '2023-10-02 14:06:23', '2023-10-02 14:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1778954829126984.png', '0155668899', 'support@easylearningbd.com', 'Melbourne, Australia, 105 South Park Avenue', 'https://www.facebook.com/easy', 'https://twitter.com/easy', '© Easy Learning 2023', NULL, '2023-10-05 16:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailer` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `encryption` varchar(255) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `mailer`, `host`, `port`, `username`, `password`, `encryption`, `from_address`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'sandbox.smtp.mailtrap.io', '2525', '007307d810463b', '46dad6d8da8939', 'tls', 'support@easylearningbd.com', NULL, '2023-09-18 14:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Development', 'web-development', NULL, NULL),
(2, 1, 'Mobile Apps', 'mobile-apps', NULL, NULL),
(4, 1, 'Game Development', 'game-development', NULL, NULL),
(5, 3, 'Finance', 'finance', NULL, NULL),
(6, 3, 'Entrepreneurship', 'entrepreneurship', NULL, NULL),
(7, 3, 'Real Estate', 'real-estate', NULL, NULL),
(8, 4, 'It Certificatio', 'it-certificatio', NULL, NULL),
(9, 4, 'Hardware', 'hardware', NULL, NULL),
(10, 4, 'Network & Security', 'network-&-security', NULL, NULL),
(11, 5, 'Accounting', 'accounting', NULL, NULL),
(12, 5, 'Cryptocurrency', 'cryptocurrency', NULL, NULL),
(13, 5, 'Blockchain', 'blockchain', NULL, NULL),
(14, 6, 'Graphic Design', 'graphic-design', NULL, NULL),
(15, 6, 'Web Design', 'web-design', NULL, NULL),
(16, 6, 'Design Tools', 'design-tools', NULL, NULL),
(17, 7, 'Personal Transformation', 'personal-transformation', NULL, NULL),
(18, 7, 'Productivity', 'productivity', NULL, NULL),
(19, 7, 'Leadership', 'leadership', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` enum('admin','instructor','user') NOT NULL DEFAULT 'user',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `last_seen` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$tNc188SbHBgxQji01YE3M.P5Hkm/XWszv.FgyZH5YLjks5QiwY0.y', '202308172154121859823-male-avatar-icon-or-portrait-handsome-young-man-face-with-beard-vector-illustration-.jpg', '0112', 'usa', 'admin', '1', '2023-10-05 22:23:52', NULL, NULL, '2023-10-05 16:23:52'),
(2, 'Instructor', 'instructor', 'instructor@gmail.com', NULL, '$2y$10$.4V.edPpbEbcLESb6oCfCejUxSGsp.ugV8INlkTCWJJgZIp.mfEq.', '202308182056ariyan.jpg', '0144', 'India', 'instructor', '1', '2023-10-05 21:20:41', NULL, '2023-09-02 20:40:25', '2023-10-05 15:20:41'),
(3, 'User', 'user', 'user@gmail.com', NULL, '$2y$10$J7lsvshjYBeElXv80vzeE.Kgymywf7Bade1Y0dfF1HAY7/JPR54E2', '202308192225handsome-young-man-with-new-stylish-haircut_176420-19637.jpg', '012233', 'Uttara Dhaka', 'user', '1', '2023-10-02 21:26:48', NULL, NULL, '2023-10-02 15:26:48'),
(4, 'khan', NULL, 'khan@gmail.com', NULL, '$2y$10$/A7I5n21MILgPQC9ZnvMou9yCEMkCKH2odPpaCTo5aCdjdGIn1mXi', NULL, NULL, NULL, 'user', '1', '2023-10-05 20:38:03', NULL, '2023-08-15 13:38:19', '2023-10-05 14:38:03'),
(5, 'Raju', 'raju', 'raju@gmail.com', NULL, '$2y$10$0GJrf4INe8uVtkIReSQNH.gWbNXZntNbmVQpLtM0Mvs5kgiu9oIjC', '202308192219download.jpg', '5566', 'Uttara Dhaka', 'user', '1', '2023-10-05 20:24:02', NULL, '2023-08-19 14:35:29', '2023-10-05 14:24:02'),
(6, 'Ariyan', 'ariyan', 'ariyan@gmail.com', NULL, '$2y$10$L./ZNPCuQ7PQFDqegDlSZ.sp3pZxhP0Q73.NKpgQtIAK7EzfqnwCK', NULL, '01225', 'usa', 'instructor', '1', NULL, NULL, NULL, '2023-09-09 15:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2023-09-05 15:59:50', NULL),
(3, 3, 3, '2023-09-05 16:09:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_goals`
--
ALTER TABLE `course_goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lectures`
--
ALTER TABLE `course_lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_course_id_foreign` (`course_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_goals`
--
ALTER TABLE `course_goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `course_lectures`
--
ALTER TABLE `course_lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

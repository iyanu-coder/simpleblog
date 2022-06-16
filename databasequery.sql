
CREATE DATABASE 'userdb'

CREATE TABLE `tbusers` (
  `id` int(11) AUTO_INCREMENT NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
   `password` timestamp current_timestamp(),
)

    -- FOR SIGNUP

INSERT INTO `tbusers` (
    'id',
    `fullname`, 
    `username`, 
    `email`, 
    `password`,
);

  
  CREATE TABLE `post_tb` (
    `id`,  int(11) AUTO_INCREMENT NOT NULL,
    `title`, varchar(500) NOT NULL,
    `content`, int(1000) NOT NULL,
) 

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (
    `id`, 
    `title`, 
    `content`,  
    )

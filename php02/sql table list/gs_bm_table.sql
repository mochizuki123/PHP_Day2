-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-12-20 01:28:26
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_bm_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `favorite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `url`, `comment`, `date`, `favorite`) VALUES
(22, '夢をかなえるゾウ', 'https://smartlog.jp/210265#55950021', '自分をなかなか変えられずにいる僕のもとに、人生の秘訣を教えにきたガネーシャ。人生を変えるヒントを探している人が読むべき作品\r\n靴を磨いたり、お釣を募金したり、ガネーシャからのアドバイスはどれも簡単なことばかりなので、すぐに実践できる\r\nこてこての関西弁や丸っこい体など、神様っぽくない愛らしいビジュアルで親近感が沸く', '2024-12-20 08:53:09', 0),
(23, 'アルジャーノンに花束を', 'https://smartlog.jp/210265#55950031', '能力がある者が必ずしも幸せというわけではない、人生や幸せなど人の本質について考えさせられる作品\r\nチャーリイの知能に合わせて最初や幼稚な文体で始まり、物語が進むにつれ知的な文章に変わっていく、表現の面白さが魅力\r\n日本でも2度ドラマ化されているので、原作と合わせて観るとより理解が深まる', '2024-12-20 08:54:17', 0),
(24, '下町ロケット', 'https://smartlog.jp/210265#55950041', 'どんなに窮地に立たされても、プライドと誇りを忘れない佃製作所の面々に感動\r\n佃製作所をじわりじわりと追い詰める企業たち。少しずつ状況を打開し最後にはスカっとする展開が待っている\r\n仕事に対し、これでもかというほど真剣に向き合う姿に働くことの意味を感じさせられる', '2024-12-20 08:54:50', 0),
(25, '銀河鉄道の夜', 'https://smartlog.jp/210265#55950050', '孤独な少年ジョバンニが親友と共に銀河鉄道に乗って美しくも悲しげな夜空を旅するシーンが幻想的\r\n「銀河鉄道の夜」を含む14編の作品は、どれも奥深く心に残るものばかり\r\n一つ一つの作品が長くないので、活字が苦手な方でも読みやすい', '2024-12-20 09:12:41', 0),
(26, 'ボッコちゃん', 'https://smartlog.jp/210265#55950060', '著者が選んだ50編が収録されている作品集。初めて星新一の作品を読む方におすすめ\r\n短い作品ばかりなので、サクッと結末まで読めてしまう\r\nSF的なものから童話的なものまで、ブラックユーモアを交えて描かれた独特の世界観に引き込まれる', '2024-12-20 09:13:20', 0),
(27, '博士の愛した数式', 'https://smartlog.jp/210265#55950070', '数学者の博士と家政婦とその息子が、数学を通して慈愛を深めていく穏やかなストーリー\r\n登場人物は3人のみで、ゆったりと時間が過ぎる作品なので、刺激の少ない作品を読みたい人におすすめ\r\n博士が語る数学の話が物語のアクセントになり、数学に興味がない方でも面白いと思える', '2024-12-20 09:13:52', 0),
(28, '流星ワゴン', 'https://smartlog.jp/210265#55950080', 'どうしようもない状況に追いやられた主人公が、時空を超えた度の中で再度やり直しを図っていこうとする姿に前向きな気持ちになれる\r\n軽やかな文体でテンポよく物語が進んでいくので、長編だけどスラスラ読める\r\n人物描写が丁寧でより世界観に引き込まれる', '2024-12-20 09:14:41', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

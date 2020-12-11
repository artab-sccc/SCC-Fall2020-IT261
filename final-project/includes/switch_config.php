<?php

// This switch_config file is to store the PHP for my switch.php page

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
        $day = 'Risshakuji Temple in Tamagata Prefecture';
        $daypic = 'mondayphoto.png';
        $alt = 'Risshakuji Temple';
        $content = "Today's picture is of Risshakuji Temple. More commonly known as Yamadera (mountain temple), it is an isolated Buddhist temple, hidden away in the mountains northeast of Yamagata City. The area is a magnet for photographers because of its stunning natural scenery, and the famous Japanese poet Basho is said to have visited once, composing a poem when inspiration struck. The temple complex begins at the foot of the mountain, and the thirty-minute ascent to the highest point is lined with stone lanterns, observation points and gates marking the entrance to the lower, middle and upper levels of the complex.";
        break;
    case 'Tuesday' :
        $day = 'Candle Island in Shimane Prefecture';
        $daypic = 'tuesdayphoto.png';
        $alt = 'Candle Island';
        $content = "Today's picture is of Candle Island. Known as Rosoku-jima in Japan, Candle Island gets its name not just from its curious shape. When evening approaches, onlookers eagerly gather at the lookout point on Dogojima, a large island in the Oki Island chain, to see the sun set the candle alight. These remote islands in Shimane, which are recognized as a UNESCO Global Geopark, have no shortage of gorgeous views and breathtaking scenery, but according to the Japan National Tourism statistics, hardly any visitors from overseas make the trek out to see them.";
        break;
    case 'Wednesday' :
        $day = 'Hachiman-bori Canal in Shiga Prefecture';
        $daypic = 'wednesdayphoto.png';
        $alt = 'Hachiman-bori Canal';
        $content = "Today's picture is of the Hachiman-bori Canal. Omihachiman's historic canals are famous among Japanese, and the traditional townscape has been used as the set for multiple period dramas and samurai flicks. The best way to discover the town is by boat, and in nice weather or even in rain, the traditional wooden boats are manned and ready. The Hachiman-bori Canal was once used for the shipment of rice and other agricultural products during the feudal era when Omihachiman thrived as a merchant town. The waterways are fed from Lake Biwa, Japan's largest lake.";
        break;
    case 'Thursday' :
        $day = 'Kaike Onsen Area in Tottori Prefecture';
        $daypic = 'thursdayphoto.png';
        $alt = 'Kaike Onsen Area';
        $content = "Today's picture is of the Kaike Onsen Area. Tottori remains one of Japan's most undiscovered regions among overseas visitors, although its coastal sand dunes and remote mountain temples attract millions of domestic tourists each year. About two hours away from the Tottori Sand Dunes and one hour from Kurayoshi, one of Japan's many quaint historic towns with koi-filled canals, the Kaike Onsen area is one of the few places in the world where saltwater hot springs are the main attraction. The area is located directly on the coast next to the Sea of Japan, and it's worth splurging on an upscale ryokan or hot springs resort to get ocean views while relaxing in the baths.";
        break;
    case 'Friday' :
        $day = 'Takachiho Gorge in Miyazaki Prefecture';
        $daypic = 'fridayphoto.png';
        $alt = 'Takachiho Gorge';
        $content = "Today's picture is of the Takachiho Gorge. Takachiho Gorge was carved by the eruptions of Mount Aso, one of the largest active volcanoes on Earth, and filled with the pure mountain spring waters of the Gokase River. The best way to experience the gorge is by boat, and rentals are available in every season at 2,000 JPY for 30 minutes. Within the small town of Takachiho, there are also hot springs, fishing spots, scenic waterfalls and ponds, local shrines and a kagura hall, which is a kind of musical theater most active in western Japan.";
        break;
    case 'Saturday' :
        $day = 'Kanchogai-dori in Aomori Prefecture';
        $daypic = 'saturdayphoto.png';
        $alt = 'Kanchogai-dori';
        $content = "Today's picture is of the Kanchogai-dori. Kanchogai-dori is recognized as one of the loveliest streets in Japan, lined with fluffy pink cherry blossoms in spring and hardy black pines all year round. The lifelike statues of wild horses are a tribute to the city's history, to when it had a reputation for producing the finest horses around. Officially, the street is known as Komakaido, but more commonly called Kanchogai-dori meaning 'Government Office Street' because of the over 40 official government agencies located here.";
        break;
    case 'Sunday' :
        $day = 'Mount Koya in Wakayama Prefecture';
        $daypic = 'sundayphoto.png';
        $alt = 'Mount Koya';
        $content = "Today's picture is of Mount Koya. Mount Koya is the spiritual home of Shingon Buddhism, a sect founded more than 1,200 years ago by one of Japan’s most important religious figures, Kobo Daishi. The sect’s head temple, Kongobu-ji, is set on the forest-covered mountaintop of Mount Koya. Over 100 other temples have been established around Mount Koya, many of which offer visitors an overnight stay.";
        break;
}

?>


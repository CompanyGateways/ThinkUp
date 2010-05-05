<?php
class Facebook {

    public $api_client;

    public function __construct($api_key, $secret, $generate_session_secret = false) {
        $this->api_client = new FacebookRestClient($api_key, $secret, null);
    }

}

class FacebookRestClient {

    public function & stream_get($viewer_id = null, $source_ids = null, $start_time = 0, $end_time = 0, $limit = 30, $filter_key = '', $exportable_only = false, $metadata = null, $post_ids = null, $query = null, $everyone_stream = false) {

        switch ($viewer_id) {
            case '606837591': //return two posts with no comments
                $stream = unserialize('a:2:{s:5:"posts";a:2:{i:0;a:21:{s:7:"post_id";s:25:"606837591_108956622464235";s:9:"viewer_id";s:9:"606837591";s:9:"source_id";s:9:"606837591";s:4:"type";s:2:"46";s:6:"app_id";s:0:"";s:11:"attribution";s:0:"";s:8:"actor_id";s:9:"606837591";s:9:"target_id";s:0:"";s:7:"message";s:50:"The Pacific is really good. Can\'t wait for part 3.";s:10:"attachment";a:1:{s:11:"description";s:0:"";}s:8:"app_data";s:0:"";s:12:"action_links";s:0:"";s:8:"comments";a:4:{s:10:"can_remove";s:1:"1";s:8:"can_post";s:1:"1";s:5:"count";s:1:"0";s:12:"comment_list";s:0:"";}s:5:"likes";a:6:{s:4:"href";s:82:"http://www.facebook.com/social_graph.php?node_id=108956622464235&class=LikeManager";s:5:"count";s:1:"0";s:6:"sample";s:0:"";s:7:"friends";s:0:"";s:10:"user_likes";s:1:"0";s:8:"can_like";s:1:"1";}s:7:"privacy";a:6:{s:11:"description";s:12:"Only Friends";s:5:"value";s:11:"ALL_FRIENDS";s:7:"friends";s:0:"";s:8:"networks";s:0:"";s:5:"allow";s:0:"";s:4:"deny";s:0:"";}s:12:"updated_time";s:10:"1269488627";s:12:"created_time";s:10:"1269488627";s:10:"tagged_ids";s:0:"";s:9:"is_hidden";s:1:"0";s:10:"filter_key";s:34:"f8c16f44b43083fc2545a46d-606837591";s:9:"permalink";s:82:"http://www.facebook.com/profile.php?v=feed&story_fbid=108956622464235&id=606837591";}i:1;a:21:{s:7:"post_id";s:25:"606837591_107266209295210";s:9:"viewer_id";s:9:"606837591";s:9:"source_id";s:9:"606837591";s:4:"type";s:2:"46";s:6:"app_id";s:0:"";s:11:"attribution";s:0:"";s:8:"actor_id";s:9:"606837591";s:9:"target_id";s:0:"";s:7:"message";s:23:"SHAKE IT LIKE A POM-POM";s:10:"attachment";a:1:{s:11:"description";s:0:"";}s:8:"app_data";s:0:"";s:12:"action_links";s:0:"";s:8:"comments";a:4:{s:10:"can_remove";s:1:"1";s:8:"can_post";s:1:"1";s:5:"count";s:1:"0";s:12:"comment_list";s:0:"";}s:5:"likes";a:6:{s:4:"href";s:82:"http://www.facebook.com/social_graph.php?node_id=107266209295210&class=LikeManager";s:5:"count";s:1:"0";s:6:"sample";s:0:"";s:7:"friends";s:0:"";s:10:"user_likes";s:1:"0";s:8:"can_like";s:1:"1";}s:7:"privacy";a:6:{s:11:"description";s:12:"Only Friends";s:5:"value";s:11:"ALL_FRIENDS";s:7:"friends";s:0:"";s:8:"networks";s:0:"";s:5:"allow";s:0:"";s:4:"deny";s:0:"";}s:12:"updated_time";s:10:"1269411918";s:12:"created_time";s:10:"1269411918";s:10:"tagged_ids";s:0:"";s:9:"is_hidden";s:1:"0";s:10:"filter_key";s:34:"f8c16f44b43083fc2545a46d-606837591";s:9:"permalink";s:82:"http://www.facebook.com/profile.php?v=feed&story_fbid=107266209295210&id=606837591";}}s:8:"profiles";a:1:{i:0;a:5:{s:2:"id";s:9:"606837591";s:3:"url";s:0:"";s:4:"name";s:12:"Gina Trapani";s:10:"pic_square";s:60:"http://profile.ak.fbcdn.net/v222/1942/94/q606837591_9678.jpg";s:4:"type";s:4:"user";}}}');
                return $stream;
                break;
            case '6068375911': //return two posts, one with one comment
                $stream = unserialize('a:2:{s:5:"posts";a:2:{i:0;a:21:{s:7:"post_id";s:25:"606837591_108956622464235";s:9:"viewer_id";s:9:"606837591";s:9:"source_id";s:9:"606837591";s:4:"type";s:2:"46";s:6:"app_id";s:0:"";s:11:"attribution";s:0:"";s:8:"actor_id";s:9:"606837591";s:9:"target_id";s:0:"";s:7:"message";s:50:"The Pacific is really good. Can\'t wait for part 3.";s:10:"attachment";a:1:{s:11:"description";s:0:"";}s:8:"app_data";s:0:"";s:12:"action_links";s:0:"";s:8:"comments";a:4:{s:10:"can_remove";s:1:"1";s:8:"can_post";s:1:"1";s:5:"count";s:1:"1";s:12:"comment_list";a:1:{i:0;a:4:{s:6:"fromid";s:9:"606837591";s:4:"time";s:10:"1269548986";s:4:"text";s:5:"Yes. ";s:2:"id";s:32:"606837591_108956622464235_157806";}}}s:5:"likes";a:6:{s:4:"href";s:82:"http://www.facebook.com/social_graph.php?node_id=108956622464235&class=LikeManager";s:5:"count";s:1:"0";s:6:"sample";s:0:"";s:7:"friends";s:0:"";s:10:"user_likes";s:1:"0";s:8:"can_like";s:1:"1";}s:7:"privacy";a:6:{s:11:"description";s:12:"Only Friends";s:5:"value";s:11:"ALL_FRIENDS";s:7:"friends";s:0:"";s:8:"networks";s:0:"";s:5:"allow";s:0:"";s:4:"deny";s:0:"";}s:12:"updated_time";s:10:"1269548986";s:12:"created_time";s:10:"1269488627";s:10:"tagged_ids";s:0:"";s:9:"is_hidden";s:1:"0";s:10:"filter_key";s:34:"f8c16f44b43083fc2545a46d-606837591";s:9:"permalink";s:82:"http://www.facebook.com/profile.php?v=feed&story_fbid=108956622464235&id=606837591";}i:1;a:21:{s:7:"post_id";s:25:"606837591_107266209295210";s:9:"viewer_id";s:9:"606837591";s:9:"source_id";s:9:"606837591";s:4:"type";s:2:"46";s:6:"app_id";s:0:"";s:11:"attribution";s:0:"";s:8:"actor_id";s:9:"606837591";s:9:"target_id";s:0:"";s:7:"message";s:23:"SHAKE IT LIKE A POM-POM";s:10:"attachment";a:1:{s:11:"description";s:0:"";}s:8:"app_data";s:0:"";s:12:"action_links";s:0:"";s:8:"comments";a:4:{s:10:"can_remove";s:1:"1";s:8:"can_post";s:1:"1";s:5:"count";s:1:"0";s:12:"comment_list";s:0:"";}s:5:"likes";a:6:{s:4:"href";s:82:"http://www.facebook.com/social_graph.php?node_id=107266209295210&class=LikeManager";s:5:"count";s:1:"0";s:6:"sample";s:0:"";s:7:"friends";s:0:"";s:10:"user_likes";s:1:"0";s:8:"can_like";s:1:"1";}s:7:"privacy";a:6:{s:11:"description";s:12:"Only Friends";s:5:"value";s:11:"ALL_FRIENDS";s:7:"friends";s:0:"";s:8:"networks";s:0:"";s:5:"allow";s:0:"";s:4:"deny";s:0:"";}s:12:"updated_time";s:10:"1269411918";s:12:"created_time";s:10:"1269411918";s:10:"tagged_ids";s:0:"";s:9:"is_hidden";s:1:"0";s:10:"filter_key";s:34:"f8c16f44b43083fc2545a46d-606837591";s:9:"permalink";s:82:"http://www.facebook.com/profile.php?v=feed&story_fbid=107266209295210&id=606837591";}}s:8:"profiles";a:1:{i:0;a:5:{s:2:"id";s:9:"606837591";s:3:"url";s:0:"";s:4:"name";s:12:"Gina Trapani";s:10:"pic_square";s:60:"http://profile.ak.fbcdn.net/v222/1942/94/q606837591_9678.jpg";s:4:"type";s:4:"user";}}}');
                return $stream;
                break;
            default:
                return null;
                break;
        }
    }
    public function & users_getInfo($uid, $fields) {
        switch ($uid) {
            case '606837591': //return user profile
                $details = unserialize('a:1:{i:0;a:8:{s:8:"about_me";s:0:"";s:16:"current_location";s:0:"";s:10:"first_name";s:4:"Gina";s:9:"last_name";s:7:"Trapani";s:3:"uid";s:9:"606837591";s:10:"pic_square";s:60:"http://profile.ak.fbcdn.net/v222/1942/94/q606837591_9678.jpg";s:8:"username";s:11:"ginatrapani";s:7:"website";s:0:"";}}');
                return $details;
                break;
            default:
                return null;
                break;
        }
    }

    public function & fql_query($q) {
        switch ($q) {
            case 'SELECT page_id, name, page_url FROM page WHERE page_id IN (SELECT page_id FROM page_fan WHERE uid = 606837591)': //return list of pages for this user
                $data = unserialize('a:43:{i:0;a:3:{s:7:"page_id";s:11:"44280134817";s:4:"name";s:18:"Eric and the Adams";s:8:"page_url";s:39:"http://www.facebook.com/ericandtheadams";}i:1;a:3:{s:7:"page_id";s:11:"10496731901";s:4:"name";s:10:"Eric Himan";s:8:"page_url";s:52:"http://www.facebook.com/pages/Eric-Himan/10496731901";}i:2;a:3:{s:7:"page_id";s:11:"33661287787";s:4:"name";s:7:"You 2.0";s:8:"page_url";s:48:"http://www.facebook.com/pages/You-20/33661287787";}i:3;a:3:{s:7:"page_id";s:15:"112470425432290";s:4:"name";s:15:"American Beauty";s:8:"page_url";s:61:"http://www.facebook.com/pages/American-Beauty/112470425432290";}i:4;a:3:{s:7:"page_id";s:15:"107596389263408";s:4:"name";s:37:"Eternal Sunshine of the Spotless Mind";s:8:"page_url";s:83:"http://www.facebook.com/pages/Eternal-Sunshine-of-the-Spotless-Mind/107596389263408";}i:5;a:3:{s:7:"page_id";s:15:"106527789383680";s:4:"name";s:20:"Shawshank Redemption";s:8:"page_url";s:66:"http://www.facebook.com/pages/Shawshank-Redemption/106527789383680";}i:6;a:3:{s:7:"page_id";s:15:"106096099421165";s:4:"name";s:16:"The Painted Veil";s:8:"page_url";s:62:"http://www.facebook.com/pages/The-Painted-Veil/106096099421165";}i:7;a:3:{s:7:"page_id";s:15:"103765199667294";s:4:"name";s:17:"Date Night (2010)";s:8:"page_url";s:36:"http://www.imdb.com/title/tt1279935/";}i:8;a:3:{s:7:"page_id";s:15:"108161739212424";s:4:"name";s:20:"Battlestar Galactica";s:8:"page_url";s:66:"http://www.facebook.com/pages/Battlestar-Galactica/108161739212424";}i:9;a:3:{s:7:"page_id";s:12:"150237430472";s:4:"name";s:12:"In Treatment";s:8:"page_url";s:35:"http://www.facebook.com/intreatment";}i:10;a:3:{s:7:"page_id";s:12:"140731500326";s:4:"name";s:7:"Mad Men";s:8:"page_url";s:30:"http://www.facebook.com/MadMen";}i:11;a:3:{s:7:"page_id";s:11:"64709311067";s:4:"name";s:9:"KUSI News";s:8:"page_url";s:30:"http://www.facebook.com/KUSITV";}i:12;a:3:{s:7:"page_id";s:11:"27718836983";s:4:"name";s:14:"Six Feet Under";s:8:"page_url";s:39:"http://www.facebook.com/SixFeetUnderHBO";}i:13;a:3:{s:7:"page_id";s:11:"14352220141";s:4:"name";s:7:"30 Rock";s:8:"page_url";s:33:"http://www.facebook.com/nbc30rock";}i:14;a:3:{s:7:"page_id";s:10:"5991693871";s:4:"name";s:8:"The Wire";s:8:"page_url";s:31:"http://www.facebook.com/TheWire";}i:15;a:3:{s:7:"page_id";s:15:"110253595679921";s:4:"name";s:31:"The Shawshank Redemption (1994)";s:8:"page_url";s:36:"http://www.imdb.com/title/tt0111161/";}i:16;a:3:{s:7:"page_id";s:15:"114311838606326";s:4:"name";s:20:"Mark &#x2762; Wilkie";s:8:"page_url";s:28:"http://www.buzzfeed.com/mark";}i:17;a:3:{s:7:"page_id";s:12:"291918831100";s:4:"name";s:10:"sippey.com";s:8:"page_url";s:52:"http://www.facebook.com/pages/sippeycom/291918831100";}i:18;a:3:{s:7:"page_id";s:12:"266359020183";s:4:"name";s:12:"Mitch Wagner";s:8:"page_url";s:55:"http://www.facebook.com/pages/Mitch-Wagner/266359020183";}i:19;a:3:{s:7:"page_id";s:12:"181784937278";s:4:"name";s:17:"A Hamburger Today";s:8:"page_url";s:39:"http://www.facebook.com/ahamburgertoday";}i:20;a:3:{s:7:"page_id";s:12:"180621463047";s:4:"name";s:11:"Expert Labs";s:8:"page_url";s:54:"http://www.facebook.com/pages/Expert-Labs/180621463047";}i:21;a:3:{s:7:"page_id";s:12:"168926019255";s:4:"name";s:12:"Serious Eats";s:8:"page_url";s:35:"http://www.facebook.com/seriouseats";}i:22;a:3:{s:7:"page_id";s:12:"135712342353";s:4:"name";s:22:"Picture the Impossible";s:8:"page_url";s:44:"http://www.facebook.com/picturetheimpossible";}i:23;a:3:{s:7:"page_id";s:12:"127882247420";s:4:"name";s:16:"Jillian Michaels";s:8:"page_url";s:39:"http://www.facebook.com/jillianmichaels";}i:24;a:3:{s:7:"page_id";s:12:"112110770020";s:4:"name";s:36:"Scott Thigpen: Illustrative Designer";s:8:"page_url";s:89:"http://www.facebook.com/pages/Atlanta-GA/Scott-Thigpen-Illustrative-Designer/112110770020";}i:25;a:3:{s:7:"page_id";s:12:"105014211842";s:4:"name";s:15:"JetBlue Airways";s:8:"page_url";s:31:"http://www.facebook.com/JetBlue";}i:26;a:3:{s:7:"page_id";s:11:"88327122707";s:4:"name";s:12:"Copper Robot";s:8:"page_url";s:54:"http://www.facebook.com/pages/Copper-Robot/88327122707";}i:27;a:3:{s:7:"page_id";s:11:"65878196434";s:4:"name";s:11:"How-To Geek";s:8:"page_url";s:36:"http://www.facebook.com/TheHowToGeek";}i:28;a:3:{s:7:"page_id";s:11:"64467830480";s:4:"name";s:9:"FailWhale";s:8:"page_url";s:51:"http://www.facebook.com/pages/FailWhale/64467830480";}i:29;a:3:{s:7:"page_id";s:11:"63811549237";s:4:"name";s:15:"The White House";s:8:"page_url";s:34:"http://www.facebook.com/WhiteHouse";}i:30;a:3:{s:7:"page_id";s:11:"49730654352";s:4:"name";s:12:"Susie Bright";s:8:"page_url";s:39:"http://www.facebook.com/thatsusiebright";}i:31;a:3:{s:7:"page_id";s:11:"49151102903";s:4:"name";s:7:"Drinkup";s:8:"page_url";s:62:"http://www.facebook.com/pages/San-Diego-CA/Drinkup/49151102903";}i:32;a:3:{s:7:"page_id";s:11:"19192438096";s:4:"name";s:62:"AAAS - The American Association for the Advancement of Science";s:8:"page_url";s:36:"http://www.facebook.com/AAAS.Science";}i:33;a:3:{s:7:"page_id";s:11:"14880351266";s:4:"name";s:35:"The Science of Battlestar Galactica";s:8:"page_url";s:77:"http://www.facebook.com/pages/The-Science-of-Battlestar-Galactica/14880351266";}i:34;a:3:{s:7:"page_id";s:11:"14696440021";s:4:"name";s:15:"Mozilla Firefox";s:8:"page_url";s:31:"http://www.facebook.com/Firefox";}i:35;a:3:{s:7:"page_id";s:10:"7826953993";s:4:"name";s:13:"SXSW Festival";s:8:"page_url";s:36:"http://www.facebook.com/SXSWFestival";}i:36;a:3:{s:7:"page_id";s:10:"7568536355";s:4:"name";s:10:"Lifehacker";s:8:"page_url";s:34:"http://www.facebook.com/lifehacker";}i:37;a:3:{s:7:"page_id";s:10:"7427236382";s:4:"name";s:11:"Leo Laporte";s:8:"page_url";s:34:"http://www.facebook.com/LeoLaporte";}i:38;a:3:{s:7:"page_id";s:10:"7155422274";s:4:"name";s:4:"CNET";s:8:"page_url";s:28:"http://www.facebook.com/cnet";}i:39;a:3:{s:7:"page_id";s:10:"6815841748";s:4:"name";s:12:"Barack Obama";s:8:"page_url";s:35:"http://www.facebook.com/barackobama";}i:40;a:3:{s:7:"page_id";s:10:"5556196543";s:4:"name";s:8:"Macworld";s:8:"page_url";s:32:"http://www.facebook.com/Macworld";}i:41;a:3:{s:7:"page_id";s:10:"5281959998";s:4:"name";s:18:"The New York Times";s:8:"page_url";s:31:"http://www.facebook.com/nytimes";}i:42;a:3:{s:7:"page_id";s:11:"19292868552";s:4:"name";s:17:"Facebook Platform";s:8:"page_url";s:32:"http://www.facebook.com/platform";}}');
                return $data;
                break;
            default:
                return null;
                break;

        }
    }

}



?>

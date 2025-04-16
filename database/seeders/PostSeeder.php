<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->truncate(); // Clears all records in the 'posts' table

        // Get all user IDs to randomly assign to posts
        $userIds = User::pluck('id')->toArray();

        // Counter for post IDs
        $postIdCounter = 1;

        $posts = [
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Have you listened to Monica\'s new single?',
                'content' => 'Have you watched the music video for Monica\'s new single?It doesn\'t sound quite as good as it looks.A treat for the eyes but punishment for the ears...',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Am I the only one who doesn\'t understand modern art?',
                'content' => 'Went to an exhibit recently. When the old capital fell, the Ballet Twins weren\'t as corrupted by the Hollow as they are now, so Investigators managed to save a number of exhibits.After seeing them, I have to say, did Investigators really need to risk their lives for these things?I disliked "Gentleman With a Bangboo" and "Ballet Brothers on Ethereal\'s Back" most. They feel like parodies of masterpieces to me, while also sucking up to the Ballet Twins\' owners. The artist is Kinston Bird. I hear he never studied at any of the academies and just copies other peoples\' work. I guess anything goes these days.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Intel) Change in Activity: Lemnian Hollow',
                'content' => 'I got some info today from a pro that the activity in the Lemnian Hollow has plummeted!Proxies, we\'re in business~',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) What flavor is Scarlet Noble\'s Founding Day commemorative flavor?',
                'content' => 'I heard you can win a prize by pulling the tabs on Founding Day so I bought a whole case.It says "Founding Day Special Edition," but after drinking a whole can, I still can\'t tell. It just tastes salty. The ingredients list is just a bunch of scientific-sounding names and mentions no flavor.Could it be... building materials flavor?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) When are they gonna finish fixing the road???',
                'content' => 'How long have they been doing repairs on the road on Sixth Street? I can\'t even remember. Has the construction team just forgotten about it?Having to go the long way every time I go that way is so annoying. Even worse, so many people ignore the warnings and just waltz through!I hope they get tar on their shoes!',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) "Vision Demolition Case" Starting Soon',
                'content' => 'The New Eridu Judiciary has announced the first hearing of the sensational "Vision Demolition Case" is about to get underway. On the day before the trial, all relevant personnel from the case including the defense (Perlman) and legal counsel (the odd-job agency the Cunning Hares) will board a special airship in line with regulations to arrive at the Supreme Court.Reports claim the case will take on a public hearing format, with 300 seats available for registration by all New Eridu citizens over the legal age. Moreover, eight media companies including Ridu TV have expressed interest in livestreaming court proceedings.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Notice) Beginner\'s Guide to the Hollows: Selecting the right workplace',
                'content' => 'Commissions on Inter-Knot generally include these three things: where to go, what to do, and what to give.Newcomers tend to focus on the latter two, and care little about "where to go" — they\'re all going into a Hollow anyway, so who cares which one?This thinking could cost you your life. Hollows are not all the same, and each has its own characteristics: the terrain, the Ether environment, and the Ethereals inhabiting them can all be different. Rushing into a workplace that doesn\'t match your abilities can result in loss of life.New Inter-Knot users can choose what work they take on according to their own ability based on the official Hollow classifications.1) Original Hollows (not recommended for novices)Cretan, Lemnian, Hawara, Pursenas, Solove and Papago — As the six primary hollows they are large in scale, with complex environments, Ethereals of varying strength and many other characteristics best suited to veteran Proxies and Hollow Raiders.2) Companion Hollows (recommended for novices)A sub-Hollow resulting from the expansion of a certain primary Hollow is termed a "companion Hollow." They are smaller in scale and possess lower Ether concentrations, making them suitable places for newcomers to engage in commissions. There are exceptions, however, such as the infamous "Dead End Hollow." Gather information, listen to the opinions of others, and carefully consider your own abilities before choosing the right Hollow to enter.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Can anyone recommend a good street to live on?',
                'content' => 'Some things have happened recently and I\'m planning on moving. Anyone got any suggestions?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Super dope Proxy names?',
                'content' => 'I regret using such a random name. I only registered the account to browse the posts here, but now I want to start working as a Proxy and my username is... Ugh! I guess I\'ll just have to make a new account with a cooler name!',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Inquiry) What do people think of the Hollow Raiders\' Ballet Twins Day Trip Adventure?',
                'content' => 'Everyone knows the Ballet buildings right? It\'s one of the most famous spooky places in New Eridu.It used to be one of the most popular business hubs before the fall of the old capital. But the Ballet Group suffered heavy losses after the fall and eventually went bankrupt. The building, which symbolized the rise and fall of the Ballet fortune, was also caught in a Hollow and has been corrupted all this time. Only a small safe area remains exposed.Officials have designated the area as high-risk and are restricting entry, but that just makes it more exciting, right?I\'m a veteran Proxy with 10 years experience and offer day trips to the Ballet buildings. I have a 100% survival rate, I\'m trustworthy, and very affordable. Send a direct message if you\'re interested!',
                'user_id' => $this->getRandomUserId($userIds),
            ],
        ];

        // Insert first batch
        DB::table('posts')->insert($posts);

        $posts = [
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Help) Emergency Search!',
                'content' => 'Who\'s got any info on an Inter-Knot user called Rain?He (she?) took on my commission but hasn\'t replied to me since last week. I\'m worried sick!If anyone has any information, I would be eternally grateful!',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) BREAKING! PERLMAN ON THE RUN!',
                'content' => 'OMG, did you see the news? Perlman escaped on his way to the court for the Vision case! They said on the news that his airship\'s signal disappeared after reaching the Outer Ring, and now there\'s a warrant out for him from Public Security!',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(URGENT) COURT AIRSHIP HIJACKED BY HACKER, SUSPECT ESCAPES',
                'content' => 'Breaking News: On the eve of the Vision trial, an airship transporting personnel was hijacked by hackers on its way to the Supreme Court. Thankfully, an intelligent construct passenger was able to manually land the aircraft on the rooftop of the Ballet Twins, averting the potential tragedy of an airship plunging into the Hollows.This passenger claims that a powerful anesthetic was released from a suitcase that belongs to the defendant of the Vision trial, Mr. Perlman. It knocked out all passengers except for himself. The passenger rushed to the cockpit and found the airship was being hijacked. After crash-landing the airship, this passenger immediately evacuated the remaining passengers from the airship, but was unaware that Perlman had woken up, who then took off with the airship.Public Security has confirmed the testimony regarding the anesthetic and the hijacking, but further investigation is underway.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Legal Help) I got a cleaning lady but she injured three home invaders',
                'content' => 'I ordered a cleaning service for my place today. The cleaning lady kept apologizing for being five minutes late because of traffic and road works.I was angry at first, but after seeing her so humble I felt a bit guilty and decided to let it go.I went to watch a movie after explaining what I wanted done. Halfway through the movie, Public Security called and said three people had broken into my house to rob it. I remembered the cleaning lady, a young girl at that, was still there, so I asked if she was okay. Public Security said the three robbers had called and given themselves up — she\'d given them a beating and sent them to the emergency room. Now they\'re looking for a lawyer to claim medical expenses from me. Anyone know the law and knows what I should do?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Info) Proxy Must-Knows: Carrots',
                'content' => 'Investigators and Proxies always talk about Carrots, so what exactly are they? We obviously don\'t mean the vegetable! Essentially, Carrots are time-sensitive Hollow maps.Although the space in Hollows is ever-changing, it\'s still possible to trace patterns within a certain period of time. The Hollow Investigative Association is able to map out the best path out of a Hollow, import the data in a chip and distribute it to Investigators\' Bangboo to ensure Investigators can safely travel through the Hollows. The data used is called a "Carrot." But how do Hollow Raiders get hold of various Carrots? Please give your answer in the comments below~',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Anyone got their hands on the latest Bangboo model yet?',
                'content' => 'Anyone shelled out for a Marcel HP-601c yet? It\'s the Bangboo on the poster! Sounds really dope from the product description! It\'s got the newest Ethereal alert, 1-second super fast Carrot import, super long battery life and in-Hollow navigation, 4 custom module expansion slots, and 16 outfits... Any feedback? I only see pros, no cons.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Notice) Welcome to Inter-Knot!',
                'content' => 'Please familiarize yourself with the following rules before starting your Inter-Knot journey:1) Verbal assault directed at any member, post, or comment on Inter-Knot is strictly forbidden.2) Due to the private and unique nature of the Proxy business, please do not reveal your true identity in any posts and publicly mention that you are using Inter-Knot.3) Please strictly abide by the process when accepting or delivering commissions. It is forbidden to accept commissions in the form of verbal agreements or make commission payments privately. Inter-Knot will not be responsible for unnecessary losses.4) Users are welcome to share all kinds of information intelligence, and discuss their experience exploring Hollows, but these actions cannot raise users\' Inter-Knot Level. This can be done by carrying out Proxy events and undertaking commissions. When dealing with commissions, your Inter-Knot Level can be seen as a visual representation in judging a user\'s reliability.5) Anything goes on Inter-Knot. No matter who you are, you can use Inter-Knot however you like, as long as you can afford the price.May those who peer into the Hollows find what they desire.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Belobog Industries wins bid to build metro',
                'content' => 'The resurgent Belobog Industries recently landed the contract with an absolute advantage for the old capital metro renovation project with their second-round bid. A metro project once stagnant for quite some time is finally back up and running.Belobog Industries put out a press statement immediately after winning the bid, pledging not to use explosive demolitions but rather to recycle the existing metro structures as much as possible to reduce waste. To achieve this, Belobog Industries is carrying out over 50% of the construction inside the Hollows, which would be a significant challenge for most large-scale construction operators, but Belobog Industries has stated that with the company\'s self-developed "in-Hollow intelligent heavy-duty machinery," they can get the job done.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Can I work in the Hollows as a transporter with this Ether aptitude score?',
                'content' => 'I\'m a high school student. My dad bought an Ether aptitude test kit for work reasons and I tried it out of curiosity and ended up with an 80. My old man immediately jumped up from his chair and asked me to take the test again... Apparently, 50 points is the threshold to work in the Hollows and 80 is a very high score. Does this mean I can work in the Hollows as a transporter?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Question) What\'s it like working at the Hollow Investigative Association?',
                'content' => 'I\'ve been unemployed for five years and got scolded by my mom today. It really hurt my self-esteem, so I decided to go out for some fresh air when I saw an HIA recruitment ad on Sixth Street. It was basically:*Assist in official investigations for a stable source of income*Had a dazzling PR image about looking good in front of your family (at least my mom will stop nagging)*Generous benefits like a competitive salary, flexible holidays, and free buffets at the company canteen.Looking at the dashing Ace Investigator in the ad, I was thinking my mom would be very happy if I ever got a job like that. But is it really such a good job?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
        ];

        // Insert second batch
        DB::table('posts')->insert($posts);

        $posts = [
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Is Rescue From Hell any good?',
                'content' => 'Everyone\'s so hyped about Rescue From Hell lately, but I\'ve seen different opinions online. Is it any good?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Discussion) What food rations should I take into the Hollow?',
                'content' => 'I\'m going on a very demanding commission which I expect to be very time-consuming so I\'m preparing food to take into the Hollow. I\'ve got some St. Leen anti-corruption nutrition packs. It\'s paste-like so can be a bit unpleasant to eat, but it\'s peach flavor, which I quite like. The rest is just some fast food, cookies, snacks. Any suggestions?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) The old metro is about to explode!',
                'content' => 'The Old Capital Metro renovation project has begun. The contractor Vision Corporation is about to launch the first demolition operation on the project site. Vision estimates 30 demolition operations will be needed to complete the project. A special demolition command center has been set up, and is currently transporting Ether explosives to the site of the first explosion: Canvas Street. Two voices remain consistent in commentary about this metro renovation project: "Recycle it" and "Rebuild over it." Vision is in the latter camp. Recently, several media pundits interviewed Charles Perlman, chief representative of Vision, and this newcomer to the industry repeatedly expressed the necessity of rebuilding the metro and Vision\'s determination to do so.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Demolition delayed? What gives?',
                'content' => 'Anyone see the news? They said today\'s demolition of the metro is gonna be delayed for "technical reasons." But based on my professional experience, Vision\'s explosives don\'t use any sophisticated tech and there are no complicated facilities involved in the blast zone, so it\'s highly unlikely to be delayed for any technical reasons. Anyone know what\'s really going on?',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Vision\'s shocking scandal exposed — Perlman is going to jail!',
                'content' => 'Charles Perlman, chief representative of the Vision Corporation, was immediately arrested following revelations that Vision tried using explosives to kill residents of Canvas Street and avoid paying compensation to the relocated residents. Survivors from Canvas Street claimed that Vision promised them proper resettlement even up to the day of the blast, demanding they wait in place. Meanwhile, Vision blocked off civilian signals to the blast zone, masquerading as law enforcement to seal off the zone and stop any residents from finding out the truth. But the residents still discovered Vision\'s evil plot and managed to get out of trouble thanks to the services of a certain odd-job agency. The agency will also be acting as legal counsel for the survivors in their civil case to help them get the compensation they deserve.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => 'A painful lesson to learn. Don\'t underestimate safety in the Hollow.',
                'content' => 'Really, don\'t overestimate your Ether aptitude, especially if your score isn\'t very high...Yesterday, my childhood friend and I took a commission to go find something in a Hollow but stayed too long. Within minutes, crystals had formed on my friend\'s body and he lost his senses. He couldn\'t talk straight.I managed to pull him out but he\'s still in a coma in the hospital and the doctors say he\'s only one step away from becoming fully corrupt.And because I didn\'t give him the inhibitor in time (it\'s too expensive, and we didn\'t take it seriously), he\'d suffered internal damage to several organs...I don\'t ever feel like going near a Hollow ever again...',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => 'Have you got any recommendations for Thiren hair products?',
                'content' => 'As per the title.I\'m a beast Thiren, and it\'s so much trouble trying to look after my fur. It\'s both frustrating and funny to admit that during the transition from Fall into Winter, I suffer from allergies due to my own hair loss.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Post) Someone attacked a Bangboo merchant. Second I\'ve seen this week.',
                'content' => 'Looks like there\'s a lot of newcomers to the industry lately. Let me say what everyone is thinking: Bangboo merchants are no good in a fight, and nobody is in charge in the Hollows, so why do business with them when I can just break it and take the goods by force?People used to do it, though not as often as they do now. So here\'s a heads up — this doesn\'t end well for anyone.To put it bluntly, making enemies in the Hollows is doing nothing for your chances of survival.Not to mention destroying a Bangboo will only add Pressure to yourself, increasing your chances of corruption. Even if you escaped the Hollow, you\'d have the Investigative Association knocking on your door in a day or two.These Bangboo merchants are sent into the Hollows by officially recognized merchant associations, and they carry special microchips with transaction records. Even when sabotaged, other Bangboo merchants can still read the chip. Usually, the merchant associations won\'t investigate trade records, but if a Bangboo is messed with, well, it\'s easy enough to find the culprit.If you wanna last in this business, you\'re better off dealing with the merchants honestly.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Notice) The results of the 3rd "Tin Master Championships" are in!',
                'content' => 'As you all know, the first Coff Cafe started off as a small, run-down coffee cart.Today it\'s become a mega-chain with more than 60 stores. As it continues to expand, the original Tin Master running the coffee cart is nowhere to be found, replaced by a dedicated Tin Master at each store.SO!Where\'s the original Tin Master with the best, most authentic taste now?Some say, as a unique model, he\'s been carefully stored away, while others claim he\'s hidden among over 60 other Tin Masters!This year\'s Tin Master Championship was judged by 15 highly regarded coffee experts in New Eridu (compared to 9 last year). Each judge was a regular at the original Coff Cafe and an old friend of the original Tin Master!They evaluated not only the taste, aroma, and color of the coffee, but also the posture, gestures, range of motion, and volume levels of the Tin Masters as they worked. The winner was awarded the title of "The Masterest of Tin Masters"!With all that said, it\'s time to reveal the results. Let\'s see if your favorite Tin Master made the list!First Place: Twenty-Second Street Flagship Store\'s Tin Master (successfully defending his title)Second Place: Twenty-Seventh Street Themed Experience Store\'s Tin MasterThird Place: Sixth Street Store\'s Tin MasterFourth Place: Thirtieth Street Store\'s Tin MasterFifth Place: Takeaway Delivery Stand\'s Tin MasterSixth Place: Fifty First Street Store\'s Tin Master...',
                'user_id' => $this->getRandomUserId($userIds),
            ],
            [
                'image_url' => $postIdCounter++ . '.png',
                'title' => '(Recruit) Looking for Proxy for large corporate commission',
                'content' => 'Recent financial reports show a company is doing well. Looking at their accounts over the last three years, I\'d expect them to expand into Ether technology research.I predict a huge job from them in the future, and have confirmed through contacts the company will be working more closely with the authorities soon, so they need specific data on Hollow danger zones.It\'s a dangerous job the Hollow Investigative Association won\'t take on due to investigator protection regulations, so that leaves us Proxies. I don\'t have the capacity alone, so I\'m recruiting reliable Proxies to work with. At least five years of experience required. Direct message me with your resume.',
                'user_id' => $this->getRandomUserId($userIds),
            ],
        ];

        // Insert third batch
        DB::table('posts')->insert($posts);

        $this->command->info('Posts seeded successfully');
    }

    /**
     * Get a random user ID from the available users
     */
    private function getRandomUserId($userIds)
    {
        return $userIds[array_rand($userIds)];
    }
}

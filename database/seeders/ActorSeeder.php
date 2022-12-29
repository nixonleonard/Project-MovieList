<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('name');
        // $table->string('gender');
        // $table->string('biography');
        // $table->date('DOB');
        // $table->string('POB');
        // $table->string('image');
        // $table->float('popularity');

        DB::table('actors')->insert([[
            'name' => 'Chris Hemsworth',
            'gender' => 'Male',
            'biography' => 'Christopher "Chris" Hemsworth was born on August 11, 1983 in Melbourne, Victoria, Australia to Leonie Hemsworth (née van Os), an English teacher & Craig Hemsworth, a social-services counselor. His brothers are actors, Liam Hemsworth & Luke Hemsworth; he is of Dutch (from his immigrant maternal grandfather), Irish, English, Scottish, and German ancestry. His uncle, by marriage, was Rod Ansell, the bushman who inspired the comedy film Crocodile Dundee (1986).

            Chris saw quite a bit of the country in his youth, after his family moved to the Northern Territory before finally settling on Phillip Island, to the south of Melbourne. In 2004, he unsuccessfully auditioned for the role of Robbie Hunter in the Australian soap opera Home and Away (1988) but was recalled for the role of Kim Hyde which he played until 2007. In 2006, he entered the Australian version of Dancing with the Stars (2004) and his popularity in the soap enabled him to hang on until show 7 (Dancing with the Stars: Episode #5.7 (2006)) when he became the fifth contestant to be eliminated.

            His first Hollywood appearance was in the science fiction blockbuster Star Trek (2009), but it was his titular role in the superhero blockbuster Thor (2011) which propelled him to prominence worldwide. He reprised the character in the superhero blockbusters Avengers Assemble (2012), Thor: The Dark World (2013), Avengers: Age of Ultron (2015), Thor: Ragnarok (2017), Avengers: Infinity War (2018) and Avengers: Endgame (2019).

            Chris\'s American representative, management company ROAR, also manages actress Elsa Pataky, and it was through them that the two met, marrying in 2010. The couple have a daughter and twin sons. He was appointed Member of the Order of Australia at the 2021 Queen\'s Birthday Honours for his services to the performing arts and to charitable organisations.
            ',
            'DOB' => '1983/08/11',
            'POB' => 'Melbourne, Victoria, Australia',
            'image' => 'storage/images/endgame/chris.jpg',
            'popularity' => '9.55'
        ],
        [
            'name' => 'Jake Gyllenhaal',
            'gender' => 'Male',
            'biography' => 'Jake Gyllenhaal was born on December 19, 1980 in Los Angeles, California as Jacob Benjamin Gyllenhaal, the son of producer/screenwriter Naomi Foner and director Stephen Gyllenhaal, and the younger brother of actress Maggie Gyllenhaal. He is of Ashkenazi Jewish (mother) and Swedish, English, and German (father) descent.

            He made his movie debut at 11 in City Slickers (1991). From the late 1990s through the early 2000s, he starred in October Sky (1999) & Donnie Darko (2001), receiving an Independent Spirit Award Best Actor nomination for the latter. He followed up w/ roles in Bubble Boy (2001), The Good Girl (2002), Moonlight Mile (2002) & The Day After Tomorrow (2004).

            He made his theater debut in a revival of This Is Our Youth in London. The play was well-received & played for 8 weeks on West End. He then starred in Jarhead (2005) & Proof (2005). However, it was his performance in Brokeback Mountain (2005) that won him critical acclaim. He won the BAFTA Award for Best Actor in a Supporting Role while also being nominated for the Outstanding Performance by a Male Actor in a Supporting Role SAG Award, the Best Supporting Actor-Motion Picture Satellite Award & the Best Supporting Actor Academy Award. Afterwards, he starred in Zodiac (2007), Brothers (2009), Prince of Persia: The Sands of Time (2010) & Love & Other Drugs (2010). For Love & Other Drugs (2010), he was nominated for the Best Actor-Motion Picture Musical or Comedy Golden Globe Award.

            In the 2010s, he starred in Source Code (2011), End of Watch (2012), Prisoners (2013), Nightcrawler (2014), Southpaw (2015) & Demolition (2015). For Nightcrawler (2014), he was nominated for the Best Actor in a Motion Picture Drama Golden Globe, the Outstanding Performance by a Male Actor in a Leading Role SAG & the Best Actor in a Leading Role BAFTA Award. Leading Role BAFTA Award.
            ',
            'DOB' => '1980/12/19',
            'POB' => 'Los Angeles, California, USA',
            'image' => 'storage/images/nightcrawler/jake.jpg',
            'popularity' => '8.74'
        ],
        [
            'name' => 'Stephen Lang',
            'gender' => 'Male',
            'biography' => 'Stephen Lang is a distinguished and award-winning actor who commands considerable respect, and is equally at home on the Broadway stage, on television, and in film.

            Though he is arguably most well-known for his acclaimed performance in James Cameron\'s Avatar (2009), Lang began his career in theater. Broadway roles include his Tony-nominated performance as Lou in "The Speed of Darkness", Happy in the Dustin Hoffman revival of "Death of a Salesman", Colonel Jessep in "A Few Good Men", and Mike Tallman alongside Quentin Tarantino and Marisa Tomei in "Wait Until Dark".

            Off-Broadway credits include John Patrick Shanley\'s "Defiance", Anne Nelson\'s "The Guys", Arthur Miller\'s "Finishing the Picture" and his own play, "Beyond Glory", for which he received numerous accolades. The play premiered in Washington, D.C. and has played the Goodman Theatre in Chicago, the Roundabout in New York City and a USO tour to various military bases and battleships around the world. In the fall of 2010, Lang received the Patriot Award from the Medal of Honor Society in honor of his theatrical and charitable works for the United States military.
            ',
            'DOB' => '1952/07/11',
            'POB' => 'New York City, New York, USA',
            'image' => 'storage/images/avatar/lang.jpg',
            'popularity' => '6.98'
        ],
        [
            'name' => 'Mark Ruffalo',
            'gender' => 'Male',
            'biography' => 'Award-winning actor Mark Ruffalo was born on November 22, 1967, in Kenosha, Wisconsin, of humble means to father Frank Lawrence Ruffalo, a construction painter and Marie Rose (Hebert), a stylist and hairdresser; his father\'s ancestry is Italian and his mother is of half French-Canadian and half Italian descent. Mark moved with his family to Virginia Beach, Virginia, where he lived out most of his teenage years. Following high school, Mark moved with his family to San Diego and soon migrated north, eventually settling in Los Angeles.

            Mark first took classes at the Stella Adler Conservatory and subsequently co-founded the Orpheus Theatre Company, an Equity-Waiver establishment, where he worked in nearly every capacity. From acting, writing, directing and producing to running the lights and building sets while building his resume.

            Moving into film and TV, Mark\'s inauspicious movie debut was the drifter role of Christian in the horror opus Mirror Mirror 2: Raven Dance (1994) and returned to the film series in the role of Joey with Mirror Mirror 3: The Voyeur (1995). He continued on through the 1990\'s rather indistinctly with more secondary roles in the horror film The Dentist (1996) starring madman Corbin Bernsen; an amusing perf in the obscure dramedy The Last Big Thing (1996); a third billed role in the Jerry Stiller/Anne Meara bickering senior comedy A Fish in the Bathtub (1998); and the war drama Ceremony... The Ritual of Love (1976) directed by Ang Lee.
            ',
            'DOB' => '1967/11/22',
            'POB' => 'Kenosha, Wisconsin, USA',
            'image' => 'storage/images/zodiac/mark.jpg',
            'popularity' => '8.99'
        ],
        [
            'name' => 'Michael Papajohn',
            'gender' => 'Male',
            'biography' => 'A native of Birmingham, Alabama, Michael graduated from Vestavia Hills High School in 1983.

            The Texas Rangers drafted him in 1985, but he chose instead to attend Louisiana State University on a baseball scholarship. He was the starting center-fielder on the first LSU team to go to the College World Series in 1986, and again in 1987.

            In 1987, _Everybody\'s All-American (1988)_ came to shoot in Baton Rouge, and Michael was chosen as Dennis Quaid stunt double for the football scenes. He caught the attention and earned the admiration of Director Taylor Hackford, who encouraged Michael to pursue a career in stunt work.

            While filming Charlie\'s Angels (2000), Michael was kicked in the jaw with a stiletto boot. He found himself in an emergency room, insisting that he was not the victim of domestic violence. The spousal abuse representatives had a hard time believing that he had been kicked by Cameron Diaz.

            Michael is most widely known as "The Carjacker" in Spider-Man (2002), whose actions ultimately lead Peter Parker to become Spider-Man. Michael first met director Sam Raimi when he played Kevin Costner\'s nemesis in For Love of the Game (1999).

            Another notable role was as Guard Papajohn in The Longest Yard (2005) for producer Adam Sandler. They met when Michael did all of Adam\'s stunts in The Waterboy (1998), making the hard hits as Bobby Boucher. In The Longest Yard, things came full circle when Michael had his own stuntman.
            ',
            'DOB' => '1964/11/07',
            'POB' => 'Birmingham, Alabama, USA',
            'image' => 'storage/images/nightcrawler/michael.jpg',
            'popularity' => '6.29'
        ],
        [
            'name' => 'Robert Downey Jr.',
            'gender' => 'Male',
            'biography' => 'Robert Downey Jr. has evolved into one of the most respected actors in Hollywood. With an amazing list of credits to his name, he has managed to stay new and fresh even after over four decades in the business.

            Downey was born April 4, 1965 in Manhattan, New York, the son of writer, director and filmographer Robert Downey Sr. and actress Elsie Downey (née Elsie Ann Ford). Robert\'s father is of half Lithuanian Jewish, one quarter Hungarian Jewish, and one quarter Irish, descent, while Robert\'s mother was of English, Scottish, German, and Swiss-German ancestry. Robert and his sister, Allyson Downey, were immersed in film and the performing arts from a very young age, leading Downey Jr. to study at the Stagedoor Manor Performing Arts Training Center in upstate New York, before moving to California with his father following his parents\' 1978 divorce. In 1982, he dropped out of Santa Monica High School to pursue acting full time. Downey Sr., himself a drug addict, exposed his son to drugs at a very early age, and Downey Jr. would go on to struggle with abuse for decades.
            ',
            'DOB' => '1965/04/04',
            'POB' => 'Manhattan, New York City, New York, USA',
            'image' => 'storage/images/endgame/rdj.jpg',
            'popularity' => '9.76'
        ],
        [
            'name' => 'Reese Witherspoon',
            'gender' => 'Female',
            'biography' => 'Laura Jeanne Reese Witherspoon was born on March 22, 1976 in New Orleans, Louisiana to Betty Witherspoon, a registered nurse & John Draper Witherspoon, a military surgeon. Reese spent the first 4 years of her life in Wiesbaden, Hesse, Germany, where her father served as a lieutenant colonel in the US Army reserves. Shortly after, the family moved back to the USA & settled in Nashville, Tennessee.

            Reese was introduced to the entertainment industry at a very early age. At age 7, she began modeling. This led to appearances on several local television commercials. At age 11, she placed first in a Ten-State Talent Fair.

            In 1990, she landed her first major acting role in Robert Mulligan\'s The Man in the Moon (1991). Her role as a 14-year old tomboy earned her rave reviews. Roles in bigger films such as Jack the Bear (1993) and A Far Off Place (1993) followed shortly after.
            ',
            'DOB' => '1976/03/22',
            'POB' => 'New Orleans, Louisiana, USA',
            'image' => 'storage/images/sing2/reese.jpg',
            'popularity' => '7.15'
        ],
        [
            'name' => 'Sam Worthington',
            'gender' => 'Male',
            'biography' => 'Samuel Henry John Worthington was born August 2, 1976 in Surrey, England. His parents, Jeanne (Martyn) and Ronald Worthington, a power plant employee, moved the family to Australia when he was six months old, and raised him and his sister Lucinda in Warnbro, a suburb of Perth, Western Australia.

            Worthington graduated from NIDA (Australia\'s National Institute of Dramatic Art) in 1998 at the age of 22. He received critical acclaim for his portrayal of "Arthur Wellesley" in his first professional role in the Belvoir Street Theatre production "Judas Kiss" (directed by Neil Armfield). He then went on to work in Australian television on such shows as Water Rats (1996) and "Backburner" and then on the American TV show JAG (1995)\'s 100th episode (Boomerang: Part 1).

            Worthington made his film debut in the highly acclaimed Australian movie Bootmen (2000), a film about a troop of "tap dogs". Minor roles proceeded in Hart\'s War (2002) and A Matter of Life (2001) before he was cast in another hailed Australian drama, Dirty Deeds (2002), co-starring Toni Collette and John Goodman.

            The following year, he starred in yet another Aussie film, opposite David Wenham in Gettin\' Square (2003). The director of the film, Jonathan Teplitzky, originally tested actors who were up to 8 years older than the then-27-year-old Worthington. Teplitzky wasn\'t sure Sam "could convincingly play a tough guy and also have elements of the leading man about him", but in the end Teplitzky decided he was "fantastic", and had "David playing the older, slightly more streetwise accomplice" proclaiming "it worked".
            ',
            'DOB' => '1976/08/02',
            'POB' => 'Godalming, Surrey, England, UK',
            'image' => 'storage/images/avatar/sam.jpg',
            'popularity' => '8.01'
        ],
        [
            'name' => 'Scarlett Johansson',
            'gender' => 'Female',
            'biography' => 'Scarlett Ingrid Johansson was born on November 22, 1984 in Manhattan, New York City, New York. Her mother, Melanie Sloan is from a Jewish family from the Bronx and her father, Karsten Johansson is a Danish-born architect from Copenhagen. She has a sister, Vanessa Johansson, who is also an actress, a brother, Adrian, a twin brother, Hunter Johansson, born three minutes after her, and a paternal half-brother, Christian. Her grandfather was writer Ejner Johansson.

            Johansson began acting during childhood, after her mother started taking her to auditions. She made her professional acting debut at the age of eight in the off-Broadway production of "Sophistry" with Ethan Hawke, at New York\'s Playwrights Horizons. She would audition for commercials but took rejection so hard her mother began limiting her to film tryouts. She made her film debut at the age of nine, as John Ritter\'s character\'s daughter in the fantasy comedy North (1994). Following minor roles in Just Cause (1995), as the daughter of Sean Connery and Kate Capshaw\'s character, and If Lucy Fell (1996), she played the role of Amanda in Manny & Lo (1996). Her performance in Manny & Lo garnered a nomination for the Independent Spirit Award for Best Lead Female, and positive reviews, one noting, "[the film] grows on you, largely because of the charm of ... Scarlett Johansson", while San Francisco Chronicle critic Mick LaSalle commentated on her "peaceful aura", and wrote, "If she can get through puberty with that aura undisturbed, she could become an important actress."
            ',
            'DOB' => '1984/11/22',
            'POB' => 'Manhattan, New York City, New York',
            'image' => 'storage/images/endgame/scarlett.jpg',
            'popularity' => '9.61'
        ],
        [
            'name' => 'Sharon Tay',
            'gender' => 'Female',
            'biography' => 'Sharon Tay was born on October 15, 1966 in Singapore. She is an actress, known for Independence Day (1996), Fast & Furious 5 (2011) and Eagle Eye (2008).',
            'DOB' => '1966/10/15',
            'POB' => 'Singapore',
            'image' => 'storage/images/nightcrawler/sharon.jpg',
            'popularity' => '6.36'
        ],
        [
            'name' => 'Tori Kelly',
            'gender' => 'Female',
            'biography' => 'Tori Kelly was born on December 14, 1992 in Wildomar, California, USA. She is a music artist and actress, known for Sing (2016), Sing 2 (2021) and Jerry & Marge Go Large (2022). She has been married to André Murillo since May 19, 2018.',
            'DOB' => '1992/12/24',
            'POB' => 'Wildomar, California, USA',
            'image' => 'storage/images/sing2/tori.jpg',
            'popularity' => '6.98'
        ],
        [
            'name' => 'Zoe Saldana',
            'gender' => 'Female',
            'biography' => 'Zoe Saldana was born on June 19, 1978 in Passaic, New Jersey, to Asalia Nazario and Aridio Saldaña. Her father was Dominican and her mother is Puerto Rican. She was raised in Queens, New York. When she was 10 years old, she and her family moved to the Dominican Republic, where they would live for the next seven years. While living there, Zoe discovered a keen interest in performance dance and began her training at the prestigious ECOS Espacio de Danza Dance Academy where she learned ballet as well as other dance forms. Not only did her training provide an excellent outlet for the enthusiastic and energetic youngster, it would also prove to be a fortunate precursor for the start of her professional acting career. At age 17, Zoe and her family moved back to the United States where her love for dance followed and an interest in theater performance became stronger.

            She began performing with the Faces theater troupe which put on plays geared to provide positive messages for teens with themes dealing with issues such as substance abuse and sex. These performances not only gave her valuable experience but also a source of great pride knowing that she was making a difference in the lives of young people like herself. While performing with the Faces troupe and also the New York Youth Theater, Zoe was recruited for a talent agency and her dance training years before coupled with her acting experience greatly helped her land her first big screen role as Eva Rodriguez, the talented and headstrong ballet dancer in the film Center Stage (2000). Since her professional career began several years ago, Zoe\'s talent and determination have allowed her to be involved in blockbuster films and act with major actors, actresses and industry insiders at a pace that very few young professionals have experienced.
            ',
            'DOB' => '1978/06/19',
            'POB' => 'Passaic, New Jersey, USA',
            'image' => 'storage/images/avatar/zoe.jpg',
            'popularity' => '8.38'
        ]
        ]);

    }
}

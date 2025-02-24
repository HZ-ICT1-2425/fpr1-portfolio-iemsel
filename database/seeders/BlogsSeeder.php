<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    private $data = [
        [
            'title' => 'First Feedback',
            'slug' => 'first-feedback',
            'body' => '<h2>Feedback Pitch day</h2>
                <p>The feedback I received in short: to change the way my dashboard works, to add more faqs for the design,
                    blogpost add name, a return button for the blogs, to add a footer and too make the whole blog items clickable.
                </p>
                <h1>What I did with it:</h1>
                <p>
                    To change the way my dashboard works, I did what was asked cuz it was a totally fair feedback since I misunderstood how the EC system worked.
                </p>
                <p>To add more faqs for the design, the reason why the page needed more faqs was so that I could add the star design that would look weird if it had less faqs</p>
                <p>Blogpost add name, I made a simple mistake by forgetting to add my name on the blogs and a teacher assistent spotted it so i fixed it now.</p>
                <p>A return button for the blogs, I didnt add this feedback to my website because then I would have two buttons that do the same thing on the same page,
                    and I found that unnecessary and was afraid it would ruin the design.</p>
                <p>To add a footer, since it was suggested i added one, though it doesnt really add much value in my oppionin.</p>
                <p>the whole blog items clickable, this was another change that was kinda really needed since its much easier,
                    than only being able to click on the titel, so I implemented this feedback.</p>
                <h2>Final feedback</h2>
                <p>
                    At PCO graded assessments with Paula, I recieved the last bits of feedback.
                    The feedback was seprate javascript file, create multiple css files and try to shorten the css code.
                    With the feedback I also got the reason behind the feedback which I agreed with so also implemented it on my website.
                    Its smart to have seprate javascript file because then the future maintainer can see more easily that javascript was used on the website.
                    It also helps to find the javascript and make the dashboard html file easier to read.
                    By creating multiple css files it avoids loading unnecessary code. And with making the css shorter its easier to change certain things on the website and way easier to find things.
                </p>'
        ],
        [
            'title' => 'ICT Field',
            'slug' => 'ict-field',
            'body' => '<h2>Careers and Opportunities</h2>
                <p>The Information and Communication Technology (ICT) field is one of the fastest-growing industries today,
                    offering many career opportunities. ICT includes the use of technology to handle communication, data,
                    and information processing. This covers a wide range of jobs, from software development to managing networks and cybersecurity.
                </p>
                <p>
                    The ICT field is constantly changing and expanding, making it an exciting career choice. Whether youre interested in coding,
                    networks, or cybersecurity, ICT offers many paths to explore.
                    As technology continues to evolve, so will the demand for skilled ICT professionals.
                </p>'
        ],
        [
            'title' => 'Programming Experience',
            'slug' => 'programming-experience',
            'body' => '<p>
                    My experience programming, when I was still a kid,
                    my dad let me watch him do his job and there he tried to explain some codes but I was too small to understand.
                    When I was in primary school I went to a programming class one time,
                    back then I didnt have any interest in what I was doing in that class.
                    Though these two experiences where from when I was really young I still count them as experiences since I
                    learned from them.
                </p>
                <p>
                    My real experience programming started in middle school, the first year.
                    In my first year i had a class called O and T, which stands for "Onderzoek en Techniek".
                    In this class we learned basic things how the computer works like how to save files, how excel works,
                    and craftwork the first year.
                    I had this class also 2nd and 3rd year and then we learned how to program with microbits and turtle in python.
                    I preformed very good in this class and also enjoyed it, so I choose Informatica for the 4th and 5th year.
                </p>
                <p>
                    Informatica was great aswell I learned so many things and had fun projects.
                    My experience grew the most in informatica, I learned how to make the base of a website,
                    binaire, flowgorithm, python, databases (SQL-Light), how to make a app with guizero and so much more.
                    My favourite experience from this class was making a website that tells the weather and
                    making my own game, which worked so good that I played it lots with friends even outside school.
                    On the home page there are pictures of my website that I made that tells the weather.
                    Below this text is a picture of my app that I made.
                </p>
                <section class="flex">
                    <p class="rightText">
                        This game was a group project, I did all the coding and my friend did the documents and user experience reports.
                        You start the game by choosing one of the list or fill in 8 words and then click submit.
                        Once submited a window will pop up asking you to pick a number between 1 and 20,
                        after you selected the number you click submit again then the window closes and
                        you have to select a symbool, once you selected a symbool and press sumbit again you get your result.
                        The result can be one of the random words you filled in or one of the words of the lists that you selected.
                        This game is basicly the online version of the paper game!
                    </p>
                </section>
                <p>
                    Lastly I had a vacation job in the ICT Field This summer (2024),
                    thanks because of my sister I was able to work on a website for the company Progression.
                    I learned there a bit how to work with wordpress, xampp and how to install windows on computers.
                    This is all my experience in the ICT field when im not counting the small extra things like adding/mantaining
                    mods in games.
                </p>'
        ],
        [
            'title' => 'Study Choice',
            'slug' => 'study-choice',
            'body' => 'I chose to study HBO-ICT at HZ for several reasons. First, its close enough to my home, so I dont have to move into student housing, which is convenient for me.
                    Also, a few of my friends have chosen HZ as well, so it is nice to have familiar faces around.
                    The program itself is very interesting and aligns with my passion for ICT, which has been influenced by my family is background in the field,
                    especially my dads work as a programmer. Additionally, HZ offers an international class, which I find appealing because it allows me to connect with people from different cultures and learn in a global context.
                    Further more i also did bilingual eduction on my previous school,
                    and i was able to pass the cambridge exam with C1 level.'
        ],
        [
            'title' => 'Personal SWOT Analysis',
            'slug' => 'swot',
            'body' => '<p>
                    A SWOT analysis is a tool used to assess a business, project, or individual by looking at four key areas: Strengths, Weaknesses, Opportunities, and Threats.
                    A SWOT analysis helps you understand what youre doing well, what needs improvement, what opportunities you can pursue, and what risks to watch out for.
                </p>
                <h2>Strenghts</h2>
                <p>
                    My strengths are that im very good at learning, school wise looking I always got great marks.
                    And that i am quite commited to something when i start with it.
                    Im also very creative and well behaved according teachers and parents.
                </p>
                <h2>Weaknessess</h2>
                <p>
                    My weaknesses would be my lack of socail skills and that im dyslexic so spelling isnt easy for me.
                </p>
                <h2>Opportunities</h2>
                <p>
                    So right now i already took one of the opportunities i saw, for summer job im work in a IT company 2 days a week. I need to finishs a website for them and help around where is needed.
                    Furthermore my dad and older sister are both working in the IT so they could help me in this study.
                </p>
                <h2>Threats</h2>
                <p>
                    I feel like i dont have many threats, the things that could be threats i mentioned them in weaknesses.
                    Ig a threat of mine could be that i might not have the perfect laptop for this study (but im trying to fix this)
                </p>'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data as $item) {
            Blog::create($item);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsSeeder extends Seeder
{
    private $data = [
        [
            'question' => 'Programming Tips for Beginners',
            'answer' => 'You go to the link and follow the instructions there.',
            'link' => 'https://print.hz.nl'
        ],
        [
            'question' => 'How can you scan a document and send it to your laptop at HZ?',
            'answer' => 'You walk up to the scanner, log in,
                and select "Scan." You choose to send it to your email,
                adjust the settings, and place your document on the scanner.
                After pressing “Start,” the scan completes, and moments later,
                the file arrives in your inbox. Task done!'
        ],
        [
            'question' => 'How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?',
            'answer' => 'You go to the link and order something',
            'link' => 'https://webshop.hz.nl/WebshopApp/'
        ],
        [
            'question' => 'How can you book a project space?',
            'answer' => 'Just click on the link below and directly reserve a room',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?origin=sspTile&unid=222efc2f5baa4a5ba75647c7bec4482a&from=a59949b7-517c-4418-9ebc-c928dc9781a8" target="_blank" rel="noopener noreferrer'
        ],
        [
            'question' => '>What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'First you get a permit after that,
                you can drive into HZ’s parking lot, display your permit,
                and find a student spot. After parking, you quickly check the signage,
                then head inside, confident your car is parked properly.',
        ],
        [
            'question' => 'Are you required to attend class?',
            'answer' => 'For most classes attendance is not required but you should always ask when your unsure.',
        ],
        [
            'question' => 'Who and how should you ask for help?',
            'answer' => 'You should first try to ask classmates for help, if they dont know either you can ask for help on the lectureHub,
              or during the checkpoint to a teacher or teachers assistents. If you still dont have a awnser you can mail the teachers.
              But mailing is one of the last resorts when it comes to class related questions.
              Non-class related questions you can ask your coach by mail.',
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data as $item) {
            Faq::create($item);
        }
    }
}

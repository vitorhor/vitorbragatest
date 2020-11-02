<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageContent::create([
            "page_name" => "home",
            "top_title" => "CDA Interview Guide",
            "top_image" => "home_top_image.jpg",
            "description" => "<p><strong style=\"color: rgb(0, 0, 102);\">Ultimate Guide to CDA Structured Interview: Tips &amp; Proven Strategies to Help You Prepare &amp; Ace Your CDA Interview</strong></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">Overview:</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">The purpose of the dental school interview</span></p><p><span style=\"color: rgb(55, 55, 55);\">History and rationale of the CDA interview</span></p><p><span style=\"color: rgb(55, 55, 55);\">Types of Questions</span></p><p><span style=\"color: rgb(55, 55, 55);\">The Seven Competencies</span></p><p><span style=\"color: rgb(55, 55, 55);\">Structure of the CDA interview</span></p><p><a href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">How to prepare for your CDA Interview</a></p><p><a href=\"https://cdainterview.com/sample-cda-interview-questions.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">Sample CDA interview questions</a></p><p><a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">BeMo CDA-structured interview prep program</a></p><p><a href=\"https://cdainterview.com/contact-us.php\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">Contact us</a></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">What is the purpose of the dental school interview?</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate.</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">What are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc.</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are \"conscientious\" and \"open to new experiences\" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association's structured interview or CDA structured interviews.</span></p><p><br></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">History, rationale, and the structure of the CDA interview</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association's earlier decision to commission a \"new structured interview based on state-of-the-art contemporary interview techniques\" (i.e. CDA structured interview)</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, \"a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions.\" Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.</span></p><p><br></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">Types of Questions</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">\"You are babysitting your sister’s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?\"</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Conversely, PBDI type questions, ask the candidates \"about past behaviour with the assumption that past behaviour is the best predictor of future behaviour.\" An example of a PBDI type questions is:</span></p><p><br></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.</span></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">The Seven Competencies</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">1. Communication: does the applicant have excellent communication skills?</span></p><p><span style=\"color: rgb(55, 55, 55);\">2. Conscientiousness: is the applicant thorough, careful to do tasks well?</span></p><p><span style=\"color: rgb(55, 55, 55);\">3. Integrity : is the applicant honest with themselves and others?</span></p><p><span style=\"color: rgb(55, 55, 55);\">4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?</span></p><p><span style=\"color: rgb(55, 55, 55);\">5. self-control : Does the applicant remain calm and in control in difficult situations?</span></p><p><span style=\"color: rgb(55, 55, 55);\">6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?</span></p><p><span style=\"color: rgb(55, 55, 55);\">7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.</span></p><p><br></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">Structure of the CDA interview</strong></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Click&nbsp;</span><a href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">here</a><span style=\"color: rgb(55, 55, 55);\">&nbsp;to learn how to prepare for your CDA interview</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Click&nbsp;</span><a href=\"https://cdainterview.com/sample-cda-interview-questions.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">here</a><span style=\"color: rgb(55, 55, 55);\">&nbsp;to practice with our sample CDA interview questions</span></p><p><br></p><p><span style=\"color: rgb(55, 55, 55);\">Click&nbsp;</span><a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\" style=\"color: rgb(255, 102, 0);\">here</a><span style=\"color: rgb(55, 55, 55);\">&nbsp;to learn more about our money-back guarantee CDA interview preparation programs.</span></p><p><br></p><p><strong style=\"color: rgb(55, 55, 55);\">Reference</strong><span style=\"color: rgb(55, 55, 55);\">:</span></p><p><br></p><p>Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</p>",
            "meta_title" => "Main Page",
            "meta_description" => "Description of Main Page"
        ]);

        PageContent::create([
            "page_name" => "contact",
            "top_title" => "",
            "top_image" => "contact_top_image.png",
            "description" => "<div class=\"message-text\"><span style=\"font-size:17px; font-weight:bold; \">BeMo Academic Consulting Inc. </span><br><span><span style=\"font-size:13px; font-weight:bold; \"><u>Toll Free</u></span><span style=\"font-size:13px; \">: </span><span style=\"font-size:14px; \">1-855-900-BeMo (2366)</span><span style=\"font-size:13px; \"><br></span><span style=\"font-size:13px; font-weight:bold; \"><u>Email</u></span><span style=\"font-size:13px; \">: </span><span style=\"font-size:14px; \">info@bemoacademicconsulting.com</span></span></div>",
            "meta_title" => "Contact Page",
            "meta_description" => "Description of Contact Page"
        ]);
    }
}

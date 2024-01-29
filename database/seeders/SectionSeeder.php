<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\SectionTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{


    public function run(): void
    {
        DB::table('sections')->delete();
        DB::table('section_translations')->delete();

        for ($i = 1 ; $i<=3 ; $i++) {
            Section::create([
                'id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }



        //ar
        SectionTranslation::create([
            'locale' => 'ar',
            'description' => 'قسم الجراحة، المعروف أيضاً بقسم العمليات الجراحية أو الوحدة الجراحية، هو قسم متخصص داخل مستشفى أو مرفق طبي مخصص لممارسة الجراحة. يعتبر هذا القسم مكانًا يتم فيه إجراء العمليات الجراحية من قبل جراحين مدربين بشكل جيد وفرقهم الطبية. يلعب القسم دورًا حاسمًا في تشخيص وعلاج مختلف الحالات الطبية التي تتطلب تدخلاً جراحيًا، مثل الإصابات والأمراض والاضطرابات. عادةً ما يتضمن القسم غرف جراحية مجهزة بمعدات جراحية متقدمة، ومناطق للرعاية ما قبل وما بعد العمليات الجراحية، وأماكن للتعافي. يتخصص الجراحون في هذا القسم في مجموعة متنوعة من المجالات الجراحية، بما في ذلك الجراحة العامة والجراحة العظمية وجراحة القلب والأوعية الدموية، وغيرها. الهدف الرئيسي لقسم الجراحة هو تقديم رعاية جراحية آمنة وفعالة للمرضى، بهدف تحسين صحتهم وجودة حياتهم من خلال الإجراءات الجراحية.

',
            'section_id' => 1,
            'name' => 'قسم الجراحة'
        ]);


        SectionTranslation::create([
            'locale' => 'ar',
            'description' => 'الأطفال، المعروفين أيضاً بأطفال أو شباب، يمثلون المرحلة المبكرة من الحياة البشرية من الرضاعة إلى المراهقة. إنهم مجموعة عمرية حيوية في المجتمع، تتطلب رعاية وتعليمًا فريدين لضمان نموهم الصحي. الأطفال يخضعون لتغييرات جسدية وعاطفية وعقلية كبيرة مع نموهم، وغالبًا ما يتم تصنيفهم إلى فئات عمرية مختلفة، بما في ذلك الرضع والأطفال الصغار والأطفال قبل سن المدرسة والأطفال في سن المدرسة. توفير التغذية المناسبة، والرعاية الصحية، والتعليم، وبيئة تربية مشجعة مهم لرفاهيتهم. الطب الأطفال هو مجال طبي متخصص يركز على الاحتياجات الطبية للأطفال، ويتعامل مع مشاكل تتراوح بين الأمراض الشائعة والتطعيمات إلى الحالات الطبية الأكثر تعقيدًا. مستشفيات الأطفال وأطباء الأطفال هم أطراف أساسية في تعزيز صحة ورفاهية الأطفال، بهدف تقديم أفضل بداية ممكنة في الحياة.

',
            'section_id' => 2,
            'name' => 'قسم الأطفال'
        ]);



        SectionTranslation::create([
            'locale' => 'ar',
            'description' => 'الأعصاب هي أجزاء أساسية في الجهاز العصبي للإنسان، والذي يقوم بنقل الإشارات بين أجزاء مختلفة من الجسم والدماغ. تعتبر الأعصاب الشبكة التواصلية للجسم، حيث تمكن الجسم من استشعار المحفزات والاستجابة لها، والتحكم في الحركات، وأداء وظائف جسمانية متنوعة. تتكون الأعصاب من خلايا عصبية تُسمى العصبونات، والتي تحتوي على هياكل متخصصة مثل الأكسون والشجيرات لنقل الإشارات الكهربائية. الجهاز العصبي ينقسم إلى فئتين رئيسيتين: الجهاز العصبي المركزي (CNS)، الذي يتضمن الدماغ والحبل الشوكي، والجهاز العصبي الطرفي (PNS)، الذي يشمل جميع الأعصاب خارج الجهاز العصبي المركزي. الأعصاب تلعب دورًا حاسمًا في الإدراك الحسي، والوظيفة الحركية، وتنظيم العمليات الجسمانية مثل معدل ضربات القلب والهضم والتنفس. الأضرار أو الاضطرابات في الأعصاب يمكن أن تؤدي إلى مشاكل عصبية مختلفة، بما في ذلك العصبوبة، والشلل، ومتلازمات الألم. دراسة وعلاج اضطرابات الجهاز العصبي تندرج تحت مجال الطب العصبي، حيث يُعرف المحترفون الطبيون المتخصصون بهذا المجال بأخصائيي الأعصاب، والذين يتخصصون في تشخيص وإدارة الحالات المرتبطة بالأعصاب.',
            'section_id' => 3,
            'name' => 'قسم الأعصاب'
        ]);



        //en
        SectionTranslation::create([
            'locale' => 'en',
            'description' => 'A surgery section, often referred to as a surgical department or surgical unit,
                              is a specialized division within a hospital or medical facility that is dedicated to the practice of surgery.
                              This section is where surgical procedures are performed by highly trained surgeons and their medical teams.
                              It plays a crucial role in diagnosing and treating various medical conditions that require surgical
                              intervention, such as injuries, diseases, or disorders. The surgery section typically includes operating
                              rooms equipped with advanced surgical equipment, pre-operative and post-operative care areas',
            'section_id' => 1,
            'name' => 'Surgery section'
        ]);



        SectionTranslation::create([
            'locale' => 'en',
            'description' => 'Children, often referred to as kids or youngsters, represent the early stage of human
                              life from infancy to adolescence. They are a critical demographic in society, requiring unique care,
                              education, and support to ensure their healthy development. Children undergo significant physical,
                              emotional, and cognitive changes as they grow, and they are often categorized into different age groups,
                              including infants, toddlers, preschoolers, and school-age children. Providing appropriate nutrition,
                              healthcare, education, and a nurturing environment is essential for their well-being. Pediatric medicine
                              is a specialized field of healthcare that focuses on the medical needs of children, addressing issues
                              ranging from common illnesses and vaccinations to more complex medical conditions. Childrens hospitals
                              and pediatricians are key stakeholders in promoting the health and welfare of children, aiming to give
                              them the best possible start in life.',
            'section_id' => 2,
            'name' => 'Children section'
        ]);




        SectionTranslation::create([
            'locale' => 'en',
            'description' => 'Nerves are essential components of the human bodys nervous system, which is responsible for
                              transmitting signals between different parts of the body and the brain. Nerves serve as the bodys communication
                              network, allowing it to sense and respond to stimuli, control movements, and carry out various bodily functions.
                              Nerves are made up of nerve cells called neurons, which have specialized structures, including axons and dendrites,
                              to transmit electrical impulses. The nervous system is divided into two main categories: the central nervous system (CNS), consisting of the brain and spinal cord, and the peripheral nervous system (PNS), which includes all the nerves outside the CNS. ',
            'section_id' => 3,
            'name' => 'Nerves section'
        ]);

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Commented out

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 1,
            'fullName' => 'Blaire James Olaes',
            'section' => 'AI31',
            'contact' => '0915 280 5633',
            'email' => 'blaireolaes2002@gmail.com',
            'gitHub' => 'N/A',
            'insta' => 'N/A',
            'facebook' => 'N/A',
            'twi' => 'N/A',
            'password' => 'BlaireOlaes',
        ]);

        \App\Models\firstModel::factory()->create([
            'id' => 1,
            'introduction' => 'Hello, Im , a passionate and dedicated third-year student at Leyte Normal University. My journey in the realm of programming has equipped me with a diverse skill set, enabling me to create web and software projects proficiently. As an aspiring full-stack web and software developer, I find joy in crafting seamless user experiences and solving complex problems through code.',
            'bio' => 'I hail from [Your Hometown], a place that has witnessed my growth and evolution as a programmer. Born on [Your Birthdate], I carry a deep sense of curiosity and a relentless drive to explore the ever-evolving world of technology.',
            'edu' => 'Currently in my third year at Leyte Normal University, I am pursuing a degree in [Your Degree Program]. My academic journey has been a fusion of theoretical knowledge and hands-on experience, laying the foundation for my future endeavors in the field of web and software development. ',
            'skill1' => 'Programming Languages',
            'skill1Dis' => 'Proficient in Python, Java, JavaScript, PHP',
            'skill2' => 'Web Technologies',
            'skill2Dis' => 'HTML, CSS, React Native',
            'skill3' => 'Other Skills',
            'skill3Dis' => 'Experienced in creating both web and software projects, adept at utilizing various tools for efficient development.',
            'Hob' => 'Beyond the lines of code, I find balance and inspiration in a variety of activities:',
            'Hob1' => 'Working Out',
            'Hob1Dis' => 'Physical fitness is not just a hobby but a lifestyle that keeps me energized and focused',
            'Hob2' => 'Gaming',
            'Hob2Dis' => 'Immerse myself in the virtual realms, appreciating the creativity and innovation in game development',
            'Hob3' => 'Reading Books',
            'Hob3Dis' => 'A particular interest in finance literature, constantly expanding my knowledge beyond the tech world',
            'Like1' => 'Problem-Solving',
            'Like1Dis' => 'Whether its debugging a complex code or strategizing in a game, I find joy in overcoming challenges.',
            'Like2' => 'Innovation',
            'Like2Dis' => 'Embracing and contributing to the ever-evolving landscape of technology excites me. ',
            'Like3' => 'Continuous Learning',
            'Like3Dis' => 'The world of programming is vast and dynamic, and I relish the opportunity to learn and grow.',
            'Dis1' => 'Redundancy',
            'Dis1Dis' => 'Repetition without purpose tends to dampen my enthusiasm.',
            'Dis2' => 'Closed-mindedness',
            'Dis2Dis' => 'I believe in the power of diverse perspectives and open-minded collaboration. ',
            'Dis3' => 'Stagnation',
            'Dis3Dis' => 'Complacency is the enemy of progress; I thrive in environments that encourage constant evolution and improvement.',
        ]);
    }
}

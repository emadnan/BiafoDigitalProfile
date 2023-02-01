<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            'Java',
            'Python',
            'C++',
            'C#',
            'Ruby',
            'PHP',
            'Swift',
            'Go',
            'Kotlin',
            'Scala',
            'Perl',
            'R',
            'JavaScript',
            'HTML',
            'CSS',
            'React',
            'Angular',
            'Vue.js',
            'Node.js',
            'Ruby on Rails',
            'Django',
            'Laravel',
            'Express.js',
            'ASP.NET',
            'Android',
            'iOS',
            'React Native',
            'Xamarin',
            'Flutter',
            'SQL',
            'Oracle',
            'MongoDB',
            'Cassandra',
            'PostgreSQL',
            'MySQL',
            'Microsoft SQL Server',
            'Firebase',
            'Amazon RDS',
            'AWS',
            'Azure',
            'Google Cloud',
            'IBM Cloud',
            'Oracle Cloud',
            'Alibaba Cloud',
            'Rackspace',
            'Heroku',
            'Agile',
            'Scrum',
            'Waterfall',
            'Kanban',
            'Lean',
            'Six Sigma',
            'PMP',
            'SEO',
            'PPC',
            'Social Media',
            'Content Marketing',
            'Email Marketing',
            'Affiliate Marketing',
            'Influencer Marketing',
            'Marketing Automation',
            'Graphic Design',
            'UX/UI Design',
            'Web Design',
            'Logo Design',
            'Branding',
            'Product Design',
            'Motion Design',
            '3D Design',
            'Microsoft Office',
            'Google Suite',
            'LibreOffice',
            'Communication',
            'Time Management',
            'Leadership',
            'Problem Solving',
            'Teamwork',
            'Adaptability',
            'Critical Thinking',
            'Interpersonal Skills',
            'Conflict Resolution',
            'Emotional Intelligence'
        ];

        foreach ($skills as $skill) {
            DB::table('skills')->insert([
                'skill_name' => $skill
            ]);
        }
    }
}

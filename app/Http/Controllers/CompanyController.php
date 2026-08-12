<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController 
{
    /**
     * Display the Home page.
     * Route: GET /
     */
    public function home()
    {
        $company = [
            'name' => 'Vanguard Solutions',
            'tagline' => 'Building Digital Solutions for Tomorrow',
        ];

        $featuredServices = [
            [
                'title' => 'Web Development',
                'description' => 'Custom, responsive websites and web applications built for performance.',
                'icon' => '💻',
            ],
            [
                'title' => 'Mobile Development',
                'description' => 'Native and cross-platform mobile apps for iOS and Android.',
                'icon' => '📱',
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and deployment for growing businesses.',
                'icon' => '☁️',
            ],
        ];

        return view('pages.home', compact('company', 'featuredServices'));
    }

    /**
     * Display the About page.
     * Route: GET /about
     */
    public function about()
    {
        $team = [
            ['name' => 'Ma. Sofia Ballescas', 'role' => 'CEO & Founder', 'avatar' => 'images/team/sofia-ballescas.jpg'],
            ['name' => 'JM Pitargue', 'role' => 'Lead Developer', 'avatar' => 'images/team/jm-pitargue.jpg'],
            ['name' => 'JM Pitargue', 'role' => 'UI/UX Designer', 'avatar' => 'images/team/ana-reyes.svg'],
            ['name' => 'JM Pitargue', 'role' => 'Project Manager', 'avatar' => 'images/team/mark-lim.svg'],
        ];

        $coreValues = [
            'Integrity' => 'We do what is right, even when no one is watching.',
            'Innovation' => 'We constantly seek better ways to solve problems.',
            'Excellence' => 'We deliver quality work in everything we build.',
            'Collaboration' => 'We grow stronger by working together.',
        ];

        return view('pages.about', compact('team', 'coreValues'));
    }

    /**
     * Display the Services page.
     * Route: GET /services
     */
    public function services()
    {
        $signatureServices = [
            [
                'title' => 'Web Development',
                'keyword' => 'ship faster',
                'image' => 'images/services/web-development.jpg',
            ],
            [
                'title' => 'Mobile Development',
                'keyword' => 'go native',
                'image' => 'images/services/mobile-development.jpg',
            ],
            [
                'title' => 'UI/UX Design',
                'keyword' => 'design with intent',
                'image' => 'images/services/ui-ux-design.jpg',
            ],
            [
                'title' => 'Cloud Solutions',
                'keyword' => 'scale on demand',
                'image' => 'images/services/cloud-solution.jpg',
            ],
            [
                'title' => 'Cybersecurity',
                'keyword' => 'stay protected',
                'image' => 'images/services/cyber-security.jpg',
            ],
            [
                'title' => 'IT Consulting',
                'keyword' => 'grow with a plan',
                'image' => 'images/services/it-consulting.jpg',
            ],
        ];

        $services = [
            [
                'icon' => '💻',
                'title' => 'Web Development',
                'description' => 'We build fast, secure, and scalable websites and web applications tailored to your business needs.',
            ],
            [
                'icon' => '📱',
                'title' => 'Mobile Development',
                'description' => 'Cross-platform and native mobile apps designed for a seamless user experience.',
            ],
            [
                'icon' => '🎨',
                'title' => 'UI/UX Design',
                'description' => 'User-centered design that combines aesthetics with usability and accessibility.',
            ],
            [
                'icon' => '☁️',
                'title' => 'Cloud Solutions',
                'description' => 'Cloud migration, hosting, and infrastructure management for reliable performance.',
            ],
            [
                'icon' => '🔒',
                'title' => 'Cybersecurity',
                'description' => 'Protecting your systems and data with modern security best practices.',
            ],
            [
                'icon' => '📊',
                'title' => 'IT Consulting',
                'description' => 'Strategic technology guidance to help your business make informed decisions.',
            ],
        ];

        return view('pages.services', compact('services', 'signatureServices'));
    }

    /**
     * Display the Contact page.
     * Route: GET /contact
     */
    public function contact()
    {
        $contactInfo = [
            'address' => '1st Gate, Laguna State Polytechnic University, Sta Cruz Laguna, Philippines',
            'email' => 'hello@vanguardsolutions.com',
            'phone' => '+63 912 345 6789',
            'social' => [
                'Facebook' => 'https://facebook.com/',
                'LinkedIn' => 'https://linkedin.com/company/vanguardsolutions',
            ],
        ];

        return view('pages.contact', compact('contactInfo'));
    }
}

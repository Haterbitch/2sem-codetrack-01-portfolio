<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controller;
use App\Dto\ProjectDto;
use App\Http\Request;
use App\Http\Response;

/**
 * Controller for handling requests to the projects page.
 *
 * Provides actions for rendering the projects page with a list of projects.
 */
class ProjectController extends Controller
{
    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function index(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'projects', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }


    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function afrika(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'albums/afrika', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }

    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function sydafrika(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'albums/sydafrika', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }

    /**
     * Get list of projects to display.
     *
     * @return array<int, ProjectDto>
     */
    private function getProjects(): array
    {
        return [
            new ProjectDto(
                title: 'Veninde Bog',
                description: 'Velkommen til min Guestbook, det er en venindebog som vi kender den fra 90 og start 00. Den er slet ikke færdig. ',
                technologies: 'PHP, CSS, Figma',
                image: 'images/guestbook.png',
                code: 'https://github.com/Haterbitch/2sem-codetrack-02-guestbook',
                link: 'https://guestbook.artbybukh.dk/',
            ),

            new ProjectDto(
                title: 'WildFrame',
                description: 'Velkommen til WildFrame galleri.',
                technologies: 'PHP, CSS, Figma',
                image: 'images/WildFrame.png',
                code: 'https://github.com/Haterbitch/project-presentation',
                link: 'presentation.artbybukh.dk',
            ),

            new ProjectDto(
                title: 'Style Switcher',
                description: 'Style switcher i kode sporet opgave. Den er under ombygning!',
                technologies: 'PHP, CSS, Figma',
                image: '#',
                code: 'https://github.com/Haterbitch/style-switcher',
                link: 'styleswitcher.artbybukh.dk',
            ),
            new ProjectDto(
                title: 'Remember?',
                description: 'I developed an app that helps young people and neurodivergent users manage everyday anxiety by remembering small tasks like locking the door or turning off the lights. The design is simple, intuitive and built mobile first with a focus on familiarity from popular apps.',
                technologies: 'HTML, CSS, Bootstrap, FIGMA, Photoshop, OpenAI',
                image: 'images/remember.png',
                code: 'https://github.com/Haterbitch/eksamen1sem',
                link: 'https://remember.artbybukh.dk/',
            ),
            new ProjectDto(
                title: 'Simple Glæde ',
                description: 'We developed an interactive web app that presents Køge as an Instagram friendly destination for young tourists. The project combined research, design and coding and resulted in a user friendly digital guide to the city’s most photogenic spots.',
                technologies: 'HTML, CSS, FIGMA, Bootstrap, OpenAI',
                image: 'images/tema6.png',
                code: 'https://github.com/Haterbitch/tema6',
                link: 'https://koege.artbybukh.dk/?fbclid=IwZXh0bgNhZW0CMTEAAR59_VXCD_l6PawsokV2-qpSjcg9WKWwWa59QqNJLPpk9nCT5hy8JDuW5dZPcg_aem_zNTd4IJ1VN35Lf2_FuQiOQ',
            ),


            new ProjectDto(
                title: 'Browser Game',
                description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/webgame.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: '#webgame',
            )
        ];
    }
}

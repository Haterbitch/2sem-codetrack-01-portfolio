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
     * Get list of projects to display.
     *
     * @return array<int, ProjectDto>
     */
    private function getProjects(): array
    {
        return [
            new ProjectDto(
                title: 'Remember?',
                description: 'Jeg udviklede en app, der hjælper unge med en “always on”-livsstil og særligt neurodivergente med at slippe den hverdagsangst, der kan opstå, når man glemmer små ting som at låse døren eller slukke lyset. Appen gør det muligt at oprette og afkrydse personlige huskelister, så man får ro i hverdagen. Designet er simpelt, intuitivt og bygget til mobile first, med fokus på genkendelighed fra andre populære apps.',
                technologies: 'HTML, CSS, Bootstrap, FIGMA, Photoshop, OpenAI',
                image: 'images/remember.png',
                code: 'https://github.com/Haterbitch/eksamen1sem',
                link: 'https://remember.artbybukh.dk/',
            ),
            new ProjectDto(
                title: 'Simple Glæde ',
                description: 'Vi udviklede en interaktiv webapp, der præsenterer Køge som en Instagram-venlig destination for unge turister. Projektet kombinerede research, design og kodning, og resulterede i en brugervenlig digital guide til byens mest fotogene spots.',
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

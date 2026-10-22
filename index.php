<?php
$name = 'Ejay Andante';
$title = 'Software developer building things that ship.';
$lede = 'I turn ideas into working products — from the database up to the interface someone actually uses. I care about code that is still easy to read six months later.';
$email = 'ejayandante26@gmail.com';
$github = 'https://github.com/ejayandante26-boop';
$linkedin = 'https://linkedin.com/in/ejayandante';
$location = 'San Miguel, Digos City, Davao Del Sur, Philippines';

$about = [
    "I'm <strong>$name</strong>, a software developer focused on building web applications end to end. I like owning a problem from the first schema design through to the interface a user actually touches, and I'd rather ship something simple that works than something clever that doesn't.",
    "My day-to-day is a mix of frontend and backend work, with an eye for the details — load times, error states, and the small interactions that make an app feel considered instead of assembled."
];

$traits = [
    ['Readable code', 'Naming and structure that make sense to the next person who opens the file.'],
    ['Full lifecycle', 'Comfortable moving between data models, APIs, and the UI layer on top of them.'],
    ['Performance-minded', 'Fast load times and smooth interactions are part of the spec, not an afterthought.'],
    ['Clear communicator', 'Async-friendly, writes things down, and flags risk early rather than at the deadline.']
];

$stack = [
    'Frontend' => ['HTML', 'CSS', 'JavaScript'],
    'Backend' => ['PHP', 'MySQL'],
    'Tooling' => ['Git', 'VS Code']
];

$projects = [
    [
        'name' => 'Project One',
        'desc' => 'Placeholder: what it does and the problem it solves.',
        'tags' => ['PHP', 'MySQL'],
        'source' => '#',
        'live' => '#',
    ],
    [
        'name' => 'Project Two',
        'desc' => 'Placeholder: my role and a key technical decision.',
        'tags' => ['PHP', 'JavaScript'],
        'source' => '#',
        'live' => '#',
    ],
    [
        'name' => 'Project Three',
        'desc' => 'Placeholder: the impact for the user or the business.',
        'tags' => ['PHP', 'CSS'],
        'source' => '#',
        'live' => '#',
    ],
];

$year = date('Y');

include __DIR__ . '/home.php';

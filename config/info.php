<?php

return [
    'sitename' => 'Yash Rahangdale',
    'navlinks' => [
        [
            'id' => 'college',
            'name' => 'College',
            'url' => '/projects/college',
            'image' => 'images/college.jpeg',
        ],
        [
            'id' => 'technology',
            'name' => 'Technology',
            'url' => '/projects/technology',
            'image' => 'images/technology.jpeg',
        ],
        [
            'id' => 'events',
            'name' => 'Events',
            'url' => '/projects/events',
            'image' => 'images/events.jpeg',
        ],
    ],
    'pagelinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Twitter',
            'name' => 'icons.twitter',
            'url' => 'https://x.com/',
        ],
        [
            'title' => 'Facebook',
            'name' => 'icons.facebook',
            'url' => 'https://www.facebook.com/share/17wmGs4pRH/?mibextid=qi2Omg',
        ],
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/yash_r21?igsh=MXh5c2E3Z3hqdXVjNw==',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/yash-ramkrushna-rahangdale-664b6b293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
        ],
    ],
    'taglist' => [
        [
            'id' => 'trends',
            'name' => 'Trends',
        ],
        [
            'id' => 'tips',
            'name' => 'Tips',
        ],
        [
            'id' => 'ideas',
            'name' => 'Ideas',
        ],
        [
            'id' => 'security',
            'name' => 'Security',
        ],
        [
            'id' => 'gaming',
            'name' => 'Gaming',
        ],
        [
            'id' => 'climate',
            'name' => 'Climate',
        ],
        [
            'id' => 'gear',
            'name' => 'Gear',
        ],
        [
            'id' => 'reviews',
            'name' => 'Reviews',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'blog',
            'path' => '/blog/{articleId?}',
            'view' => 'blog',
        ],
        [
            'name' => 'projects',
            'path' => '/projects/{category?}',
            'view' => 'projects',
        ],
        [
            'name' => 'contact',
            'path' => '/contact/{category?}',
            'view' => 'contact',
        ],
        [
            'name' => 'tag',
            'path' => '/tag',
            'view' => 'tag',
        ],
        [
            'name' => 'Yash',
            'path' => '/Yash',
            'view' => 'Yash',
        ],
    ],
   'articles' => [
    [
        'id' => '1',
        'title' => 'Exploring Quantum Computing',
        'image' => 'images/featured-article-02.jpeg',
        'description' => 'Quantum computing represents a monumental shift in how we process information. By leveraging the principles of quantum mechanics, these advanced computers can solve complex problems exponentially faster than traditional computers. Industries ranging from pharmaceuticals to finance are beginning to explore quantum applications, promising breakthroughs that could revolutionize our world. As research continues to evolve, the potential for quantum technology to address pressing global challenges is becoming increasingly clear.',
        'category' => 'Technology',
        'duration' => '8 mins',
        'date' => 'Sep 28, 2024',
    ],
    [
        'id' => '2',
        'title' => 'The Rise of Artificial Intelligence',
        'image' => 'images/featured-article-03.jpeg',
        'description' => 'Artificial intelligence (AI) is transforming industries by automating tasks and providing insights that were previously unattainable. From natural language processing to machine learning, AI technologies are being integrated into everyday applications, enhancing user experiences and driving efficiency. As organizations embrace AI, ethical considerations and the need for transparency are gaining prominence, ensuring that this powerful tool is used responsibly for the betterment of society.',
        'category' => 'Technology',
        'duration' => '7 mins',
        'date' => 'Sep 28, 2024',
    ],
    [
        'id' => '3',
        'title' => 'Blockchain Beyond Cryptocurrency',
        'image' => 'images/featured-article-04.jpeg',
        'description' => 'While blockchain technology is often associated with cryptocurrency, its potential extends far beyond digital currencies. By providing a decentralized and secure method for recording transactions, blockchain is being adopted in supply chain management, healthcare, and even voting systems. This transparency and security could reshape trust in various sectors, leading to more efficient and accountable systems. As organizations explore its capabilities, the future of blockchain looks promising.',
        'category' => 'Technology',
        'duration' => '5 mins',
        'date' => 'Sep 28, 2024',
    ],
    [
        'id' => '4',
        'title' => 'The Impact of 5G Technology',
        'image' => 'images/featured-article-05.jpeg',
        'description' => '5G technology is set to revolutionize connectivity by offering significantly faster data speeds and more reliable connections. This advancement will enable the growth of the Internet of Things (IoT), smart cities, and augmented reality applications, creating a more connected and efficient world. As businesses and consumers alike embrace 5G, the potential for innovation across various sectors is limitless, paving the way for a new era of technology-driven solutions.',
        'category' => 'Technology',
        'duration' => '6 mins',
        'date' => 'Sep 28, 2024',
    ],
    [
        'id' => '5',
        'title' => 'Sustainable Tech Innovations',
        'image' => 'images/featured-article-06.jpeg',
        'description' => 'As the world faces environmental challenges, technology is stepping up to provide sustainable solutions. From renewable energy sources to smart grids and eco-friendly materials, innovations are being developed to minimize environmental impact. Companies are investing in sustainable practices and technologies, aligning with global efforts to combat climate change. The integration of sustainability into technology not only benefits the planet but also drives economic growth and innovation.',
        'category' => 'Technology',
        'duration' => '6 mins',
        'date' => 'Sep 28, 2024',
    ],
],

];

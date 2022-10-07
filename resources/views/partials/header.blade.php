<div class="container">
    <figure>
        <a href="/">
            <img src="" alt="Dc Logo">
        </a>
    </figure>

    @php
        $links = [
            [
                'text' => 'Characters',
            ],
            [
                'text' => 'Comics',
            ],
            [
                'text' => 'Movies',
            ],
            [
                'text' => 'TV',
            ],
            [
                'text' => 'Games',
            ],
            [
                'text' => 'Collectibles',
            ],
            [
                'text' => 'Videos',
            ],
            [
                'text' => 'Fans',
            ],
            [
                'text' => 'News',
            ],
            [
                'text' => 'Shop',
            ],
        ];
    @endphp

    <nav class="navbar">
        <ul class="navbar-container">
            @foreach ($links as $link)
                <li class="navbar-item">
                    <a href="#">
                        {{ $link['text'] }}
                    </a>
                </li>
        </ul>

    </nav>
</div>

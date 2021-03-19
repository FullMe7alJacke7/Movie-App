<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * @test
     */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenreIds(),
        ]);

        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSee('Now Playing Fake Movie');
//        $response->assertSee('Animation, Adventure, Fantasy, Family, Action');
    }


    public function fakePopularMovies()
    {
        return Http::response([array (
                'page' => 1,
                'results' =>
                    array (
                        0 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/hJuDvwzS0SPlsE6MNFOpznQltDZ.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 16,
                                        1 => 12,
                                        2 => 14,
                                        3 => 10751,
                                        4 => 28,
                                    ),
                                'id' => 527774,
                                'original_language' => 'en',
                                'original_title' => 'Raya and the Last Dragon',
                                'overview' => 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.',
                                'popularity' => 3673.696,
                                'poster_path' => '/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg',
                                'release_date' => '2021-03-03',
                                'title' => 'Fake Movie',
                                'video' => false,
                                'vote_average' => 8.5,
                                'vote_count' => 1310,
                            ),
                        1 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/gzJnMEMkHowkUndn9gCr8ghQPzN.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 53,
                                        1 => 28,
                                        2 => 18,
                                    ),
                                'id' => 793723,
                                'original_language' => 'fr',
                                'original_title' => 'Sentinelle',
                                'overview' => 'Transferred home after a traumatizing combat mission, a highly trained French soldier uses her lethal skills to hunt down the man who hurt her sister.',
                                'popularity' => 2336.237,
                                'poster_path' => '/fFRq98cW9lTo6di2o4lK1qUAWaN.jpg',
                                'release_date' => '2021-03-05',
                                'title' => 'Sentinelle',
                                'video' => false,
                                'vote_average' => 6.2,
                                'vote_count' => 202,
                            ),
                        2 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/6TPZSJ06OEXeelx1U1VIAt0j9Ry.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 28,
                                        1 => 80,
                                        2 => 53,
                                    ),
                                'id' => 587996,
                                'original_language' => 'es',
                                'original_title' => 'Bajocero',
                                'overview' => 'When a prisoner transfer van is attacked, the cop in charge must fight those inside and outside while dealing with a silent foe: the icy temperatures.',
                                'popularity' => 2087.294,
                                'poster_path' => '/dWSnsAGTfc8U27bWsy2RfwZs0Bs.jpg',
                                'release_date' => '2021-01-29',
                                'title' => 'Below Zero',
                                'video' => false,
                                'vote_average' => 6.5,
                                'vote_count' => 436,
                            ),
                        3 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/fev8UFNFFYsD5q7AcYS8LyTzqwl.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 28,
                                        1 => 35,
                                        2 => 10751,
                                        3 => 16,
                                        4 => 12,
                                    ),
                                'id' => 587807,
                                'original_language' => 'en',
                                'original_title' => 'Tom & Jerry',
                                'overview' => 'Cinephiles Alley Return',
                                'popularity' => 2060.442,
                                'poster_path' => '/6KErczPBROQty7QoIsaa6wJYXZi.jpg',
                                'release_date' => '2021-02-11',
                                'title' => 'Tom & Jerry',
                                'video' => false,
                                'vote_average' => 7.6,
                                'vote_count' => 847,
                            ),
                        4 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/z8TvnEVRenMSTemxYZwLGqFofgF.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 14,
                                        1 => 28,
                                        2 => 12,
                                    ),
                                'id' => 458576,
                                'original_language' => 'en',
                                'original_title' => 'Monster Hunter',
                                'overview' => 'A portal transports Cpt. Artemis and an elite unit of soldiers to a strange world where powerful monsters rule with deadly ferocity. Faced with relentless danger, the team encounters a mysterious hunter who may be their only hope to find a way home.',
                                'popularity' => 1692.2,
                                'poster_path' => '/1UCOF11QCw8kcqvce8LKOO6pimh.jpg',
                                'release_date' => '2020-12-03',
                                'title' => 'Monster Hunter',
                                'video' => false,
                                'vote_average' => 7.2,
                                'vote_count' => 1137,
                            ),
                        5 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/srYya1ZlI97Au4jUYAktDe3avyA.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 14,
                                        1 => 28,
                                        2 => 12,
                                    ),
                                'id' => 464052,
                                'original_language' => 'en',
                                'original_title' => 'Wonder Woman 1984',
                                'overview' => 'A botched store robbery places Wonder Woman in a global battle against a powerful and mysterious ancient force that puts her powers in jeopardy.',
                                'popularity' => 1660.582,
                                'poster_path' => '/8UlWHLMpgZm9bx6QYh0NFoq67TZ.jpg',
                                'release_date' => '2020-12-16',
                                'title' => 'Wonder Woman 1984',
                                'video' => false,
                                'vote_average' => 6.9,
                                'vote_count' => 4279,
                            ),
                        6 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/vKzbIoHhk1z9DWYi8kyFe9Gg0HF.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 35,
                                    ),
                                'id' => 484718,
                                'original_language' => 'en',
                                'original_title' => 'Coming 2 America',
                                'overview' => 'Prince Akeem Joffer is set to become King of Zamunda when he discovers he has a son he never knew about in America – a street savvy Queens native named Lavelle. Honoring his royal father\'s dying wish to groom this son as the crown prince, Akeem and Semmi set off to America once again.',
                                'popularity' => 1392.834,
                                'poster_path' => '/nWBPLkqNApY5pgrJFMiI9joSI30.jpg',
                                'release_date' => '2021-03-05',
                                'title' => 'Coming 2 America',
                                'video' => false,
                                'vote_average' => 7,
                                'vote_count' => 853,
                            ),
                        7 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/drulhSX7P5TQlEMQZ3JoXKSDEfz.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 18,
                                        1 => 14,
                                        2 => 878,
                                    ),
                                'id' => 581389,
                                'original_language' => 'ko',
                                'original_title' => '승리호',
                                'overview' => 'When the crew of a space junk collector ship called The Victory discovers a humanoid robot named Dorothy that\'s known to be a weapon of mass destruction, they get involved in a risky business deal which puts their lives at stake.',
                                'popularity' => 1249.796,
                                'poster_path' => '/lykPQ7lgrLJPwLlSyetVXsl2wDf.jpg',
                                'release_date' => '2021-02-05',
                                'title' => 'Space Sweepers',
                                'video' => false,
                                'vote_average' => 7.3,
                                'vote_count' => 381,
                            ),
                        8 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/pcDc2WJAYGJTTvRSEIpRZwM3Ola.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 28,
                                        1 => 12,
                                        2 => 878,
                                        3 => 14,
                                    ),
                                'id' => 791373,
                                'original_language' => 'en',
                                'original_title' => 'Zack Snyder\'s Justice League',
                                'overview' => 'Determined to ensure Superman\'s ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions.',
                                'popularity' => 1117.822,
                                'poster_path' => '/tnAuB8q5vv7Ax9UAEje5Xi4BXik.jpg',
                                'release_date' => '2021-03-18',
                                'title' => 'Zack Snyder\'s Justice League',
                                'video' => false,
                                'vote_average' => 8.7,
                                'vote_count' => 209,
                            ),
                        9 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/fRrpOILyXuWaWLmqF7kXeMVwITQ.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 27,
                                        1 => 53,
                                        2 => 12,
                                        3 => 9648,
                                    ),
                                'id' => 522444,
                                'original_language' => 'en',
                                'original_title' => 'Black Water: Abyss',
                                'overview' => 'An adventure-loving couple convince their friends to explore a remote, uncharted cave system in the forests of Northern Australia. With a tropical storm approaching, they abseil into the mouth of the cave, but when the caves start to flood, tensions rise as oxygen levels fall and the friends find themselves trapped. Unknown to them, the storm has also brought in a pack of dangerous and hungry crocodiles.',
                                'popularity' => 953.328,
                                'poster_path' => '/95S6PinQIvVe4uJAd82a2iGZ0rA.jpg',
                                'release_date' => '2020-07-09',
                                'title' => 'Black Water: Abyss',
                                'video' => false,
                                'vote_average' => 5.1,
                                'vote_count' => 156,
                            ),
                        10 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/lOSdUkGQmbAl5JQ3QoHqBZUbZhC.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 53,
                                        1 => 28,
                                        2 => 878,
                                    ),
                                'id' => 775996,
                                'original_language' => 'en',
                                'original_title' => 'Outside the Wire',
                                'overview' => 'In the near future, a drone pilot is sent into a deadly militarized zone and must work with an android officer to locate a doomsday device.',
                                'popularity' => 896.597,
                                'poster_path' => '/6XYLiMxHAaCsoyrVo38LBWMw2p8.jpg',
                                'release_date' => '2021-01-15',
                                'title' => 'Outside the Wire',
                                'video' => false,
                                'vote_average' => 6.5,
                                'vote_count' => 853,
                            ),
                        11 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/vfuzELmhBjBTswXj2Vqxnu5ge4g.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 53,
                                        1 => 80,
                                    ),
                                'id' => 602269,
                                'original_language' => 'en',
                                'original_title' => 'The Little Things',
                                'overview' => 'Deputy Sheriff Joe "Deke" Deacon joins forces with Sgt. Jim Baxter to search for a serial killer who\'s terrorizing Los Angeles. As they track the culprit, Baxter is unaware that the investigation is dredging up echoes of Deke\'s past, uncovering disturbing secrets that could threaten more than his case.',
                                'popularity' => 895.501,
                                'poster_path' => '/c7VlGCCgM9GZivKSzBgzuOVxQn7.jpg',
                                'release_date' => '2021-01-28',
                                'title' => 'The Little Things',
                                'video' => false,
                                'vote_average' => 6.5,
                                'vote_count' => 582,
                            ),
                        12 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/7KL4yJ4JsbtS1BNRilUApLvMnc5.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 18,
                                        1 => 53,
                                    ),
                                'id' => 649087,
                                'original_language' => 'sv',
                                'original_title' => 'Red Dot',
                                'overview' => 'On a hiking trip to rekindle their marriage, a couple find themselves fleeing for their lives in the unforgiving wilderness from an unknown shooter.',
                                'popularity' => 856.787,
                                'poster_path' => '/xZ2KER2gOHbuHP2GJoODuXDSZCb.jpg',
                                'release_date' => '2021-02-11',
                                'title' => 'Red Dot',
                                'video' => false,
                                'vote_average' => 6.3,
                                'vote_count' => 344,
                            ),
                        13 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/6hgItrYQEG33y0I7yP2SRl2ei4w.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 10749,
                                        1 => 18,
                                    ),
                                'id' => 613504,
                                'original_language' => 'en',
                                'original_title' => 'After We Collided',
                                'overview' => 'Tessa finds herself struggling with her complicated relationship with Hardin; she faces a dilemma that could change their lives forever.',
                                'popularity' => 824.378,
                                'poster_path' => '/kiX7UYfOpYrMFSAGbI6j1pFkLzQ.jpg',
                                'release_date' => '2020-09-02',
                                'title' => 'After We Collided',
                                'video' => false,
                                'vote_average' => 7.3,
                                'vote_count' => 3436,
                            ),
                        14 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/nz8xWrTKZzA5A7FgxaM4kfAoO1W.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 878,
                                        1 => 28,
                                    ),
                                'id' => 651571,
                                'original_language' => 'en',
                                'original_title' => 'Breach',
                                'overview' => 'A hardened mechanic must stay awake and maintain an interstellar ark fleeing the dying planet Earth with a few thousand lucky souls on board... the last of humanity. Unfortunately, humans are not the only passengers. A shapeshifting alien creature has taken residence, its only goal is to kill as many people as possible. The crew must think quickly to stop this menace before it destroys mankind.',
                                'popularity' => 783.185,
                                'poster_path' => '/13B6onhL6FzSN2KaNeQeMML05pS.jpg',
                                'release_date' => '2020-12-17',
                                'title' => 'Breach',
                                'video' => false,
                                'vote_average' => 4.5,
                                'vote_count' => 302,
                            ),
                        15 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/jeAQdDX9nguP6YOX6QSWKDPkbBo.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 14,
                                        1 => 28,
                                        2 => 878,
                                    ),
                                'id' => 590706,
                                'original_language' => 'en',
                                'original_title' => 'Jiu Jitsu',
                                'overview' => 'Every six years, an ancient order of jiu-jitsu fighters joins forces to battle a vicious race of alien invaders. But when a celebrated war hero goes down in defeat, the fate of the planet and mankind hangs in the balance.',
                                'popularity' => 728.97,
                                'poster_path' => '/eLT8Cu357VOwBVTitkmlDEg32Fs.jpg',
                                'release_date' => '2020-11-20',
                                'title' => 'Jiu Jitsu',
                                'video' => false,
                                'vote_average' => 5.3,
                                'vote_count' => 318,
                            ),
                        16 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/yR27bZPIkNhpGEIP3jKV2EifTgo.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 16,
                                        1 => 10751,
                                    ),
                                'id' => 755812,
                                'original_language' => 'fr',
                                'original_title' => 'Miraculous World: New York, United HeroeZ',
                                'overview' => 'During a school field trip, Ladybug and Cat Noir meet the American superheroes, whom they have to save from an akumatised super-villain. They discover that Miraculous exist in the United States too.',
                                'popularity' => 725.881,
                                'poster_path' => '/kIHgjAkuzvKBnmdstpBOo4AfZah.jpg',
                                'release_date' => '2020-09-26',
                                'title' => 'Miraculous World: New York, United HeroeZ',
                                'video' => false,
                                'vote_average' => 8.4,
                                'vote_count' => 485,
                            ),
                        17 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/3ombg55JQiIpoPnXYb2oYdr6DtP.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 878,
                                        1 => 28,
                                    ),
                                'id' => 560144,
                                'original_language' => 'en',
                                'original_title' => 'Skylines',
                                'overview' => 'When a virus threatens to turn the now earth-dwelling friendly alien hybrids against humans, Captain Rose Corley must lead a team of elite mercenaries on a mission to the alien world in order to save what\'s left of humanity.',
                                'popularity' => 713.718,
                                'poster_path' => '/2W4ZvACURDyhiNnSIaFPHfNbny3.jpg',
                                'release_date' => '2020-10-25',
                                'title' => 'Skylines',
                                'video' => false,
                                'vote_average' => 6.1,
                                'vote_count' => 218,
                            ),
                        18 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/6XVqVAMOsKL5C26pHesiAawuGYW.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 27,
                                        1 => 53,
                                    ),
                                'id' => 630586,
                                'original_language' => 'en',
                                'original_title' => 'Wrong Turn',
                                'overview' => 'Jen and a group of friends set out to hike the Appalachian Trail. Despite warnings to stick to the trail, the hikers stray off course—and cross into land inhabited by The Foundation, a hidden community of mountain dwellers who use deadly means to protect their way of life.',
                                'popularity' => 706.333,
                                'poster_path' => '/4U1SBHmwHkNA0eHZ2n1CuiC1K1g.jpg',
                                'release_date' => '2021-01-26',
                                'title' => 'Wrong Turn',
                                'video' => false,
                                'vote_average' => 6.3,
                                'vote_count' => 249,
                            ),
                        19 =>
                            array (
                                'adult' => false,
                                'backdrop_path' => '/fX8e94MEWSuTJExndVYxKsmA4Hw.jpg',
                                'genre_ids' =>
                                    array (
                                        0 => 28,
                                        1 => 12,
                                        2 => 80,
                                    ),
                                'id' => 604822,
                                'original_language' => 'zh',
                                'original_title' => '急先锋',
                                'overview' => 'Covert security company Vanguard is the last hope of survival for an accountant after he is targeted by the world\'s deadliest mercenary organization.',
                                'popularity' => 696.571,
                                'poster_path' => '/mKvw1Ic9enfFlCPBNJGiejRPMUO.jpg',
                                'release_date' => '2020-09-30',
                                'title' => 'Vanguard',
                                'video' => false,
                                'vote_average' => 6.4,
                                'vote_count' => 235,
                            ),
                    ),
                'total_pages' => 500,
                'total_results' => 10000,
            ), 200]);
    }

    public function fakeGenreIds()
    {
        return Http::response([array (
                'genres' =>
                    array (
                        0 =>
                            array (
                                'id' => 28,
                                'name' => 'Action',
                            ),
                        1 =>
                            array (
                                'id' => 12,
                                'name' => 'Adventure',
                            ),
                        2 =>
                            array (
                                'id' => 16,
                                'name' => 'Animation',
                            ),
                        3 =>
                            array (
                                'id' => 35,
                                'name' => 'Comedy',
                            ),
                        4 =>
                            array (
                                'id' => 80,
                                'name' => 'Crime',
                            ),
                        5 =>
                            array (
                                'id' => 99,
                                'name' => 'Documentary',
                            ),
                        6 =>
                            array (
                                'id' => 18,
                                'name' => 'Drama',
                            ),
                        7 =>
                            array (
                                'id' => 10751,
                                'name' => 'Family',
                            ),
                        8 =>
                            array (
                                'id' => 14,
                                'name' => 'Fantasy',
                            ),
                        9 =>
                            array (
                                'id' => 36,
                                'name' => 'History',
                            ),
                        10 =>
                            array (
                                'id' => 27,
                                'name' => 'Horror',
                            ),
                        11 =>
                            array (
                                'id' => 10402,
                                'name' => 'Music',
                            ),
                        12 =>
                            array (
                                'id' => 9648,
                                'name' => 'Mystery',
                            ),
                        13 =>
                            array (
                                'id' => 10749,
                                'name' => 'Romance',
                            ),
                        14 =>
                            array (
                                'id' => 878,
                                'name' => 'Science Fiction',
                            ),
                        15 =>
                            array (
                                'id' => 10770,
                                'name' => 'TV Movie',
                            ),
                        16 =>
                            array (
                                'id' => 53,
                                'name' => 'Thriller',
                            ),
                        17 =>
                            array (
                                'id' => 10752,
                                'name' => 'War',
                            ),
                        18 =>
                            array (
                                'id' => 37,
                                'name' => 'Western',
                            ),
                    ),
            ), 200]);
    }

    public function fakeNowPlayingMovies()
    {
        return Http::response([[
            'dates' => [
                'maximum' => '2021-03-24',
                'minimum' => '2021-02-04',
            ],
            'page' => 1,
            'results' => [
                0 => [
                    'adult' => false,
                    'backdrop_path' => '/hJuDvwzS0SPlsE6MNFOpznQltDZ.jpg',
                    'genre_ids' => [
                        0 => 16,
                        1 => 12,
                        2 => 14,
                        3 => 10751,
                        4 => 28,
                    ],
                    'id' => 527774,
                    'original_language' => 'en',
                    'original_title' => 'Raya and the Last Dragon',
                    'overview' => 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.',
                    'popularity' => 3581.218,
                    'poster_path' => '/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg',
                    'release_date' => '2021-03-03',
                    'title' => 'Now Playing Fake Movie',
                    'video' => false,
                    'vote_average' => 8.5,
                    'vote_count' => 1366,
                ],
                1 => [
                    'adult' => false,
                    'backdrop_path' => '/fev8UFNFFYsD5q7AcYS8LyTzqwl.jpg',
                    'genre_ids' => [
                        0 => 28,
                        1 => 35,
                        2 => 10751,
                        3 => 16,
                        4 => 12,
                    ],
                    'id' => 587807,
                    'original_language' => 'en',
                    'original_title' => 'Tom & Jerry',
                    'overview' => 'Cinephiles Alley Return',
                    'popularity' => 1984.233,
                    'poster_path' => '/6KErczPBROQty7QoIsaa6wJYXZi.jpg',
                    'release_date' => '2021-02-11',
                    'title' => 'Tom & Jerry',
                    'video' => false,
                    'vote_average' => 7.6,
                    'vote_count' => 863,
                ],
                2 => [
                    'adult' => false,
                    'backdrop_path' => '/z8TvnEVRenMSTemxYZwLGqFofgF.jpg',
                    'genre_ids' => [
                        0 => 14,
                        1 => 28,
                        2 => 12,
                    ],
                    'id' => 458576,
                    'original_language' => 'en',
                    'original_title' => 'Monster Hunter',
                    'overview' => 'A portal transports Cpt. Artemis and an elite unit of soldiers to a strange world where powerful monsters rule with deadly ferocity. Faced with relentless danger, the team encounters a mysterious hunter who may be their only hope to find a way home.',
                    'popularity' => 1837.655,
                    'poster_path' => '/1UCOF11QCw8kcqvce8LKOO6pimh.jpg',
                    'release_date' => '2020-12-03',
                    'title' => 'Monster Hunter',
                    'video' => false,
                    'vote_average' => 7.2,
                    'vote_count' => 1148,
                ],
                3 => [
                    'adult' => false,
                    'backdrop_path' => '/srYya1ZlI97Au4jUYAktDe3avyA.jpg',
                    'genre_ids' => [
                        0 => 14,
                        1 => 28,
                        2 => 12,
                    ],
                    'id' => 464052,
                    'original_language' => 'en',
                    'original_title' => 'Wonder Woman 1984',
                    'overview' => 'A botched store robbery places Wonder Woman in a global battle against a powerful and mysterious ancient force that puts her powers in jeopardy.',
                    'popularity' => 1630.787,
                    'poster_path' => '/8UlWHLMpgZm9bx6QYh0NFoq67TZ.jpg',
                    'release_date' => '2020-12-16',
                    'title' => 'Wonder Woman 1984',
                    'video' => false,
                    'vote_average' => 6.8,
                    'vote_count' => 4304,
                ],
                4 => [
                    'adult' => false,
                    'backdrop_path' => '/vfuzELmhBjBTswXj2Vqxnu5ge4g.jpg',
                    'genre_ids' => [
                        0 => 53,
                        1 => 80,
                    ],
                    'id' => 602269,
                    'original_language' => 'en',
                    'original_title' => 'The Little Things',
                    'overview' => 'Deputy Sheriff Joe "Deke" Deacon joins forces with Sgt. Jim Baxter to search for a serial killer who\'s terrorizing Los Angeles. As they track the culprit, Baxter is unaware that the investigation is dredging up echoes of Deke\'s past, uncovering disturbing secrets that could threaten more than his case.',
                    'popularity' => 881.897,
                    'poster_path' => '/c7VlGCCgM9GZivKSzBgzuOVxQn7.jpg',
                    'release_date' => '2021-01-28',
                    'title' => 'The Little Things',
                    'video' => false,
                    'vote_average' => 6.4,
                    'vote_count' => 592,
                ],
                5 => [
                    'adult' => false,
                    'backdrop_path' => '/3ombg55JQiIpoPnXYb2oYdr6DtP.jpg',
                    'genre_ids' => [
                        0 => 878,
                        1 => 28,
                    ],
                    'id' => 560144,
                    'original_language' => 'en',
                    'original_title' => 'Skylines',
                    'overview' => 'When a virus threatens to turn the now earth-dwelling friendly alien hybrids against humans, Captain Rose Corley must lead a team of elite mercenaries on a mission to the alien world in order to save what\'s left of humanity.',
                    'popularity' => 682.485,
                    'poster_path' => '/2W4ZvACURDyhiNnSIaFPHfNbny3.jpg',
                    'release_date' => '2020-10-25',
                    'title' => 'Skylines',
                    'video' => false,
                    'vote_average' => 6,
                    'vote_count' => 223,
                ],
                6 => [
                    'adult' => false,
                    'backdrop_path' => '/6XVqVAMOsKL5C26pHesiAawuGYW.jpg',
                    'genre_ids' => [
                        0 => 27,
                        1 => 53,
                    ],
                    'id' => 630586,
                    'original_language' => 'en',
                    'original_title' => 'Wrong Turn',
                    'overview' => 'Jen and a group of friends set out to hike the Appalachian Trail. Despite warnings to stick to the trail, the hikers stray off course—and cross into land inhabited by The Foundation, a hidden community of mountain dwellers who use deadly means to protect their way of life.',
                    'popularity' => 667.858,
                    'poster_path' => '/4U1SBHmwHkNA0eHZ2n1CuiC1K1g.jpg',
                    'release_date' => '2021-01-26',
                    'title' => 'Wrong Turn',
                    'video' => false,
                    'vote_average' => 6.4,
                    'vote_count' => 253,
                ],
                7 => [
                    'adult' => false,
                    'backdrop_path' => '/fX8e94MEWSuTJExndVYxKsmA4Hw.jpg',
                    'genre_ids' => [
                        0 => 28,
                        1 => 12,
                        2 => 80,
                    ],
                    'id' => 604822,
                    'original_language' => 'zh',
                    'original_title' => '急先锋',
                    'overview' => 'Covert security company Vanguard is the last hope of survival for an accountant after he is targeted by the world\'s deadliest mercenary organization.',
                    'popularity' => 652.044,
                    'poster_path' => '/mKvw1Ic9enfFlCPBNJGiejRPMUO.jpg',
                    'release_date' => '2020-09-30',
                    'title' => 'Vanguard',
                    'video' => false,
                    'vote_average' => 6.3,
                    'vote_count' => 240,
                ],
                8 => [
                    'adult' => false,
                    'backdrop_path' => '/mGJuQwMq1bEboaVTqQAK4p4zQvC.jpg',
                    'genre_ids' => [
                        0 => 28,
                        1 => 878,
                    ],
                    'id' => 399566,
                    'original_language' => 'en',
                    'original_title' => 'Godzilla vs. Kong',
                    'overview' => 'In a time when monsters walk the Earth, humanity’s fight for its future sets Godzilla and Kong on a collision course that will see the two most powerful forces of nature on the planet collide in a spectacular battle for the ages.',
                    'popularity' => 749.035,
                    'poster_path' => '/pgqgaUx1cJb5oZQQ5v0tNARCeBp.jpg',
                    'release_date' => '2021-03-24',
                    'title' => 'Godzilla vs. Kong',
                    'video' => false,
                    'vote_average' => 0,
                    'vote_count' => 0,
                ],
                9 => [
                    'adult' => false,
                    'backdrop_path' => '/cjaOSjsjV6cl3uXdJqimktT880L.jpg',
                    'genre_ids' => [
                        0 => 10751,
                        1 => 14,
                        2 => 16,
                        3 => 35,
                    ],
                    'id' => 529203,
                    'original_language' => 'en',
                    'original_title' => 'The Croods: A New Age',
                    'overview' => 'Searching for a safer habitat, the prehistoric Crood family discovers an idyllic, walled-in paradise that meets all of its needs. Unfortunately, they must also learn to live with the Bettermans -- a family that\'s a couple of steps above the Croods on the evolutionary ladder. As tensions between the new neighbors start to rise, a new threat soon propels both clans on an epic adventure that forces them to embrace their differences, draw strength from one another, and survive together.',
                    'popularity' => 632.643,
                    'poster_path' => '/tbVZ3Sq88dZaCANlUcewQuHQOaE.jpg',
                    'release_date' => '2020-11-25',
                    'title' => 'The Croods: A New Age',
                    'video' => false,
                    'vote_average' => 7.5,
                    'vote_count' => 1744,
                ],
                10 => [
                    'adult' => false,
                    'backdrop_path' => '/kf456ZqeC45XTvo6W9pW5clYKfQ.jpg',
                    'genre_ids' => [
                        0 => 10751,
                        1 => 16,
                        2 => 35,
                        3 => 18,
                        4 => 10402,
                        5 => 14,
                    ],
                    'id' => 508442,
                    'original_language' => 'en',
                    'original_title' => 'Soul',
                    'overview' => 'Joe Gardner is a middle school teacher with a love for jazz music. After a successful gig at the Half Note Club, he suddenly gets into an accident that separates his soul from his body and is transported to the You Seminar, a center in which souls develop and gain passions before being transported to a newborn child. Joe must enlist help from the other souls-in-training, like 22, a soul who has spent eons in the You Seminar, in order to get back to Earth.',
                    'popularity' => 631.76,
                    'poster_path' => '/hm58Jw4Lw8OIeECIq5qyPYhAeRJ.jpg',
                    'release_date' => '2020-12-25',
                    'title' => 'Soul',
                    'video' => false,
                    'vote_average' => 8.3,
                    'vote_count' => 5281,
                ],
                11 => [
                    'adult' => false,
                    'backdrop_path' => '/wzJRB4MKi3yK138bJyuL9nx47y6.jpg',
                    'genre_ids' => [
                        0 => 28,
                        1 => 53,
                        2 => 878,
                    ],
                    'id' => 577922,
                    'original_language' => 'en',
                    'original_title' => 'Tenet',
                    'overview' => 'Armed with only one word - Tenet - and fighting for the survival of the entire world, the Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.',
                    'popularity' => 474.155,
                    'poster_path' => '/k68nPLbIST6NP96JmTxmZijEvCA.jpg',
                    'release_date' => '2020-08-22',
                    'title' => 'Tenet',
                    'video' => false,
                    'vote_average' => 7.3,
                    'vote_count' => 4720,
                ],
                12 => [
                    'adult' => false,
                    'backdrop_path' => '/uQtqiAu2bBlokqjlURVLEha6zoi.jpg',
                    'genre_ids' => [
                        0 => 80,
                        1 => 18,
                    ],
                    'id' => 544401,
                    'original_language' => 'en',
                    'original_title' => 'Cherry',
                    'overview' => 'Cherry drifts from college dropout to army medic in Iraq - anchored only by his true love, Emily. But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.',
                    'popularity' => 654.881,
                    'poster_path' => '/pwDvkDyaHEU9V7cApQhbcSJMG1w.jpg',
                    'release_date' => '2021-02-26',
                    'title' => 'Cherry',
                    'video' => false,
                    'vote_average' => 8.1,
                    'vote_count' => 264,
                ],
                13 => [
                    'adult' => false,
                    'backdrop_path' => '/vQJ3yBdF91tzd73G8seL5bOxfvG.jpg',
                    'genre_ids' => [
                        0 => 53,
                        1 => 27,
                        2 => 18,
                    ],
                    'id' => 599281,
                    'original_language' => 'en',
                    'original_title' => 'Fear of Rain',
                    'overview' => 'A teenage girl living with schizophrenia begins to suspect her neighbor has kidnapped a child. Her parents try desperately to help her live a normal life, without exposing their own tragic secrets, and the only person who believes her is Caleb – a boy she isn’t even sure exists.',
                    'popularity' => 364.262,
                    'poster_path' => '/b2shaNA4F8zNIwoRYr33lPTiFfl.jpg',
                    'release_date' => '2021-02-12',
                    'title' => 'Fear of Rain',
                    'video' => false,
                    'vote_average' => 7.5,
                    'vote_count' => 154,
                ],
                14 => [
                    'adult' => false,
                    'backdrop_path' => '/sNKnz0ZU8u55yCFreZUSOIBMSuY.jpg',
                    'genre_ids' => [
                        0 => 35,
                        1 => 10751,
                    ],
                    'id' => 638597,
                    'original_language' => 'en',
                    'original_title' => 'Yes Day',
                    'overview' => 'A mom and dad who usually say no decide to say yes to their kids\' wildest requests — with a few ground rules — on a whirlwind day of fun and adventure.',
                    'popularity' => 514.525,
                    'poster_path' => '/rejrD9ovTHJbfmpLM0mbEliEPV6.jpg',
                    'release_date' => '2021-03-12',
                    'title' => 'Yes Day',
                    'video' => false,
                    'vote_average' => 7.2,
                    'vote_count' => 222,
                ],
                15 => [
                    'adult' => false,
                    'backdrop_path' => '/8rIoyM6zYXJNjzGseT3MRusMPWl.jpg',
                    'genre_ids' => [
                        0 => 10751,
                        1 => 14,
                        2 => 12,
                        3 => 35,
                        4 => 27,
                    ],
                    'id' => 531219,
                    'original_language' => 'en',
                    'original_title' => 'Roald Dahl\'s The Witches',
                    'overview' => 'In late 1967, a young orphaned boy goes to live with his loving grandma in the rural Alabama town of Demopolis. As the boy and his grandmother encounter some deceptively glamorous but thoroughly diabolical witches, she wisely whisks him away to a seaside resort. Regrettably, they arrive at precisely the same time that the world\'s Grand High Witch has gathered.',
                    'popularity' => 286.738,
                    'poster_path' => '/b1C0FuXp4wiPmHLVKq4kwtDMgK6.jpg',
                    'release_date' => '2020-10-25',
                    'title' => 'Roald Dahl\'s The Witches',
                    'video' => false,
                    'vote_average' => 6.7,
                    'vote_count' => 1390,
                ],
                16 => [
                    'adult' => false,
                    'backdrop_path' => '/las0P4Dua54XrZ73VQmGUaH1z0U.jpg',
                    'genre_ids' => [
                        0 => 16,
                        1 => 28,
                        2 => 18,
                        3 => 878,
                    ],
                    'id' => 283566,
                    'original_language' => 'ja',
                    'original_title' => 'シン・エヴァンゲリオン劇場版:||',
                    'overview' => 'In the aftermath of the Fourth Impact, stranded without their Evangelions, Shinji, Asuka, and Rei search for refuge in the desolate red remains of Tokyo-3. But the danger to the world is far from over. A new impact is looming on the horizon—one that will prove to be the true end of Evangelion.',
                    'popularity' => 331.219,
                    'poster_path' => '/jDwZavHo99JtGsCyRzp4epeeBHx.jpg',
                    'release_date' => '2021-03-08',
                    'title' => 'Evangelion: 3.0+1.0 Thrice Upon a Time',
                    'video' => false,
                    'vote_average' => 7.7,
                    'vote_count' => 3,
                ],
                17 => [
                    'adult' => false,
                    'backdrop_path' => '/5TbtcmRySXPAEXBzwhiOYYDQmgv.jpg',
                    'genre_ids' => [
                        0 => 27,
                        1 => 9648,
                    ],
                    'id' => 723072,
                    'original_language' => 'en',
                    'original_title' => 'Host',
                    'overview' => 'Six friends hire a medium to hold a séance via Zoom during lockdown — but they get far more than they bargained for as things quickly go wrong. When an evil spirit starts invading their homes, they begin to realize they might not survive the night.',
                    'popularity' => 238.733,
                    'poster_path' => '/h7dZpJDORYs5c56dydbrLFkEXpE.jpg',
                    'release_date' => '2020-12-04',
                    'title' => 'Host',
                    'video' => false,
                    'vote_average' => 6.7,
                    'vote_count' => 208,
                ],
                18 => [
                    'adult' => false,
                    'backdrop_path' => '/4qu4kO5HVTKMK2hvmCXeviZ233l.jpg',
                    'genre_ids' => [
                        0 => 35,
                        1 => 80,
                        2 => 18,
                    ],
                    'id' => 741228,
                    'original_language' => 'en',
                    'original_title' => 'Locked Down',
                    'overview' => 'During a COVID-19 lockdown, sparring couple Linda and Paxton call a truce to attempt a high-risk jewellery heist at one of the world\'s most exclusive department stores, Harrods.',
                    'popularity' => 237.643,
                    'poster_path' => '/svHelD0Hb3TXPAQoPsoBwdDMTvf.jpg',
                    'release_date' => '2021-02-25',
                    'title' => 'Locked Down',
                    'video' => false,
                    'vote_average' => 5.2,
                    'vote_count' => 17,
                ],
                19 => [
                    'adult' => false,
                    'backdrop_path' => '/vX5JtEcumMQvMCLVcIqfetc7hdg.jpg',
                    'genre_ids' => [
                        0 => 35,
                        1 => 80,
                        2 => 53,
                    ],
                    'id' => 601666,
                    'original_language' => 'en',
                    'original_title' => 'I Care a Lot',
                    'overview' => 'A court-appointed legal guardian defrauds her older clients and traps them under her care. But her latest mark comes with some unexpected baggage.',
                    'popularity' => 222.242,
                    'poster_path' => '/gKnhEsjNefpKnUdAkn7INzIFLSu.jpg',
                    'release_date' => '2021-02-19',
                    'title' => 'I Care a Lot',
                    'video' => false,
                    'vote_average' => 6.8,
                    'vote_count' => 936,
                ],
            ],
            'total_pages' => 41,
            'total_results' => 817,
        ], 200]);
    }
}

<?php
    if (isset($_GET['lang']) && $_GET['lang'] == 'el') {
        $locale = 'el_GR.utf8';
    }
    else {
        $locale = 'en_US.utf8';
    }
    // echo "Locale is: $locale\n";
    // putenv("LC_ALL=$locale") or die('putenv LC_ALL failed');
    // putenv("LANGUAGE=") or die('putenv LANGUAGE failed');
    // putenv("LANG=") or die('putenv LANG failed');
    setlocale(LC_ALL, $locale) or die('set locale failed');
    bindtextdomain('messages', './locale');
    // echo 'New domain is: ' . $textdomain . "\n";
    textdomain('messages');
    // echo 'Current message domain is: ' . $messagedomain . "\n";
?>
<!DOCTYPE HTML>
<!--
    Read Only by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?= _('Smart Contracts Day') ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="icon" type="image/png" href="images/favicon.png" />
    </head>
    <body>

        <!-- Header -->
            <section id="header">
                <header>
                    <span class="image avatar"><img src="images/avatar.jpg" alt="" /></span>
                    <h1 id="logo"><a href="#"><?= _('Smart Contracts Day') ?></a></h1>
                    <p><?= strftime('%e %b %Y', strtotime('March 31st, 2017')) ?><br />
                    <?= _('Athens, Greece') ?></p>
                </header>
                <nav id="nav">
                    <ul>
                        <li><a href="#one" class="active"><?= _('About') ?></a></li>
                        <li><a href="#two"><?= _('Speakers') ?></a></li>
                        <li><a href="#three"><?= _('Venue') ?></a></li>
                        <li><a href="#four"><?= _('Schedule') ?></a></li>
                    </ul>
                </nav>
                <footer>
                    <ul class="icons">
                        <!-- <li><a href="#" class="icon fa-twitter"><span
                            class="label">Twitter</span></a></li> -->
                        <li><a
                                href="https://www.facebook.com/events/113909635805921/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="?lang=el"><img width='20' src='images/gr.png' alt='Greek' /></a></li>
                        <li><a href="?lang=en"><img width='20' src='images/uk.png' alt='English' /></a></li>
                        <!-- <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                        <li><a href="#" class="icon fa-envelope"><span
                        class="label">Email</span></a></li> -->
                    </ul>
                </footer>
            </section>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <div id="main">

                        <!-- One -->
                            <section id="one">
                                <div class="container">
                                    <header class="major">
                                        <h2><?= _('Smart Contracts Day') ?></h2>
                                        <p><?= htmlspecialchars(_('Cryptography & Law:
                                           Information, Privacy and Smart
                                           Contracts')) ?></p>
                                    </header>
                                    <p><?= _('A single day in which expert
                                    speakers will present talks on the
                                    topic of Information, Privacy and
                                    Smart Contracts in the
                                    interdisciplinary field merging
                                    Cryptography and Law.') ?></p>

                                    <p><?= _('The talks will be high level targeting a
                                    general public audience.') ?></p>

                                    <p><?= _('We have an excellent programme lined up
                                    for our conference, and we hope to see you
                                    in Athens.') ?></p>
                                </div>
                                <div class="container">
                                <h3><?= _('Tickets') ?></h3>
                                <p><?= _('The conference is <strong>free of
                                        charge</strong>. However, entrance to the venue is limited by
                                        capacity to 150 people.') ?>
                                        <strong>
                                            <span style='color: #4acaa8'>
                                                <?= _('We have increased the capacity of the venue to 150 tickets.') ?>
                                            </span>
                                        </strong>
                                        <?= _('Please book soon to avoid disappointment.') ?>
                                        </p>
                                        <ul class="feature-icons">
                                            <li class="fa-ticket"><a
                                                    href='https://www.eventbrite.com/e/smart-contracts-day-tickets-32639710252'>
                                                    <strong><?= _('Reserve your ticket') ?></strong></a></li>
                                        </ul>
                                </div>
                            </section>

                        <!-- Two -->
                            <section id="two">
                                <div class="container">
                                    <h3><?= _('Invited Speakers') ?></h3>

                                    <p><?= _('Four of the world\'s experts on Smart
                                    Contracts will be speaking in our invited
                                    talks capturing different aspects of
                                    cryptography and law.') ?></p>

                                    <div class="features">
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/aggelos.jpg"
                                                alt="<?= _('Aggelos Kiayias') ?>" /></a>
                                            <div class="inner">
                                            <h4><a href='http://www.kiayias.com/'><?= _('Aggelos Kiayias') ?></a></h4>
                                                <p><?= _('Prof. Aggelos Kiayias is Chair in Cybersecurity and Privacy and director of the Blockchain Technology Lab at the University of Edinburgh, UK, Associate Professor of Cryptography and Security and head of the Crypto.Sec group at the National and Kapodistrian University of Athens (on leave), and Professor in residence at the University of Connecticut. He is also the chief scientist at blockchain company IOHK.') ?></p>
                                            </div>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/burkhard.jpg"
                                                alt="Burkhard Schafer" /></a>
                                            <div class="inner">
                                                <h4><a href='http://www.law.ed.ac.uk/people/burkhardschafer'>Burkhard Schafer</a></h4>
                                                <p><?= _('Prof. Burkhard Schafer is Professor of Computational Legal Theory and director of the SCRIPT Centre for IT and IP law at the University of Edinburgh. He is also co-founder and co-director of the Joseph Bell Centre for Legal Reasoning and Forensic Statistics.') ?></p>
                                            </div>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/christoph.jpg"
                                                alt="Christoph Sorge" /></a>
                                            <div class="inner">
                                                <h4><a href='http://www.uni-saarland.de/en/lehrstuhl/prof-dr-christoph-sorge/team/christoph-sorge.html'>Christoph Sorge</a></h4>
                                                <p><?= _('Prof. Dr. Ing. Christoph
                                                Sorge is the holder of the
                                                juris professorship of legal
                                                informatics, co-director of the
                                                Institute of Law and
                                                Informatics, and member of the
                                                Center for IT Security, Privacy
                                                and Accountability (CISPA) at
                                                Saarland University. He is also
                                                a senior fellow of the German
                                                Research Institute for Public
                                                 Administration Speyer.') ?>
                                               </p>
                                            </div>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/peter.jpg"
                                                alt="Peter Van Valkenburgh" /></a>
                                            <div class="inner">
                                                <h4><a href='http://www.petervv.com/'>Peter Van Valkenburgh</a></h4>
                                                <p><?= _('Peter is Director of
                                                Research at Coin Center, the
                                                leading non-profit research and
                                                advocacy group focused on the
                                                public policy issues facing
                                                cryptocurrency technologies
                                                such as Bitcoin. He is a
                                                graduate of NYU Law, as well as
                                                a self-taught designer and
                                                coder.

                                                He drafts the Center’s public
                                                regulatory comments, and helps
                                                shape its research agenda. He
                                                has briefed policymakers and
                                                regulatory staff around the
                                                world on the subject of Bitcoin
                                                regulation. Previously, he was
                                                a Google Policy Fellow and
                                                collaborated with various
                                                digital rights organizations on
                                                projects related to privacy,
                                                surveillance, and digital
                                                copyright law.') ?>
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="container">
                                    <h3><?= _('Writing Smart Contracts') ?></h3>

                                    <p><?= _('How do you actually write a smart
                                    contract? And what is the future of smart
                                    contract language? Two researchers in the
                                    area  will present a short
                                    introduction for non-experts:') ?></p>

                                    <div class="features">
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/darryl.png"
                                                alt="Darryl McAdams" /></a>
                                            <div class="inner">
                                                <h4><a href='https://iohk.io/team/darryl-mcadams/'>Darryl McAdams</a></h4>
                                                <p><?= _('Darryl is a type theorist at
                                                IOHK in San Francisco, United States') ?></p>
                                            </div>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/dionysis.jpg"
                                                alt="<?= _('Dionysis Zindros') ?>" /></a>
                                            <div class="inner">
                                                <h4><a href='https://dionyziz.com'><?= _('Dionysis Zindros') ?></a></h4>
                                                <p><?= _('Dionysis is a cryptography
                                                PhD student at the University
                                                of Athens in Greece.') ?></p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="container">
                                    <h3><?= _('Panel discussion') ?></h3>

                                    <p><?= _('What is the future of Cryptography and
                                    Law? Insights from an academic, policy,
                                    legal and industry perspective, moderated
                                    by Aggelos Kiayias, with an Introduction by
                                    Chalres Hoskinson CEO of IOHK, one of the
                                    co-founders of Ethereum.') ?></p>

                                    <div class="features">
                                        <article>
                                            <a href="#" class="image"><img
                                                src="images/charles.jpg"
                                                alt="Charles Hoskinson" /></a>
                                            <div class="inner">
                                                <h4><a href='https://iohk.io/team/charles-hoskinson/'>Charles Hoskinson</a></h4>
                                                <p><?= _('Charles is the CEO of IOHK
                                                in Colorado, United States') ?></p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>

                        <!-- Three -->
                            <section id="three">
                                <div class="container">
                                    <h3><?= _('Venue') ?></h3>
                                    <p><?= _('The conference will be held at the
                                    five-star <a href="http://divanicaravelhotel.com/">Divani Caravel hotel</a> in central
                                    Athens.') ?></p>
                                    <img src="images/divani.jpg" alt="Divani
                                    Caravel" style='width: 100%; border-radius:
                                    5px' />
                                    <p><?= _('The hotel is a 10-minute walk from the
                                       Evangelismos metro station and also
                                       accessible by car and bus.') ?></p>
                                </div>
                            </section>

                        <!-- Four -->
                            <section id="four">
                                <div class="container">
                                    <h3><?= _('Schedule') ?></h3>

                                    <ul class="feature-icons one-column">
                                        <li class="fa-pencil"><strong>09:30</strong>: <?= _('Registration') ?></li>
                                        <li class=""><strong>10:00</strong>:
                                            <?= _('Aggelos Kiayias') ?>:
                                            <span>
                                                <?= _('Cryptography
                                                and Law, an Unexpected Encounter
                                                that was Obvious all
                                                Along') ?>
                                            </span>
                                            <p><a href='assets/slides/kiayias.pdf'><?= _('Slides') ?></a></p>
                                        </li>
                                        <li class="fa-coffee"><strong>10:45</strong>: <?= _('Coffee break') ?></li>
                                        <li class=""><strong>11:15</strong>:
                                            Burkhard Schafer:
                                            <span><?= _('Blockchain assisted e-voting and the
                                            law: Balancing transparency, secrecy
                                            and inclusivity') ?></span>
                                            <p><a href='assets/slides/schafer.pptx'><?= _('Slides') ?></a></p>
                                        </li>
                                        <li class=""><strong>12:00</strong>: Peter Van Valkenburgh
                                            <span><?= _('Blockchains and Regulation: Why Open Matters') ?></span>
                                            <p><a href='assets/slides/valkenburgh.pptx'><?= _('Slides') ?></a></p>
                                        </li>
                                        <li class="fa-cutlery"><strong>12:45</strong>: <?= _('Lunch break') ?></li>
                                        <li class=""><strong>14:15</strong>:
                                            Christoph Sorge:
                                            <span><?= _('Legal requirements for cryptographic security: Necessity, annoyance, or both? (tentative)') ?></span>
                                            <p><a href='assets/slides/sorge.pdf'><?= _('Slides') ?></a></p>
                                        </li>
                                        <li class=""><strong>15:00</strong>:
                                            Darryl McAdams &amp; <?= _('Dionysis Zindros') ?>:
                                            <span>
                                                <?= _('Writing Smart Contracts') ?>
                                            </span>
                                            <p><a href='assets/slides/mcadams.pdf'><?= _('Darryl Slides') ?></a> - <a href='assets/slides/zindros.pdf'><?= _('Dionysis Slides') ?></a></p>
                                        </li>
                                        <li class="fa-coffee"><strong>16:00</strong>: <?= _('Coffee break') ?></li>
                                        <li class="fa-comments-o"><strong>16:30</strong>:
                                            <?= _('Panel discussion:') ?>
                                            <span><?= htmlspecialchars(_('The future of Cryptography & Law')) ?></span>
                                        </li>
                                        <li class="fa-comments-o"><strong>17:30</strong>: <?= _('Closing remarks') ?></li>
                                    </ul>

                                    <div class="features">
                                        <article>
                                            <p<?= _('This event is made possible only
                                            because of our wonderful funding
                                            partners.') ?>>
                                            <strong><?= _('Thank you!') ?></strong></p>

                                            <a href='https://erc.europa.eu/' class='image'>
                                                <img
                                                src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/European_Research_Council_logo.svg/339px-European_Research_Council_logo.svg.png"
                                                alt='<?= _('The ERC logo') ?>'
                                                style='margin: auto; display:
                                                block; width: 50%'
                                                />
                                            </a>
                                        </article>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="container">
                                    <h3><?= _('Open access') ?></h3>

                                    <p><?= _('We believe everyone should have access
                                    to knowledge. That\'s why admission to the
                                    conference is completely free. However,
                                    bitcoin donations are always welcome.') ?></p>

                                    <p class='donation'>
                                    <?= _('<a href="bitcoin:16ETtvZ8zMBMrJwWhpnhPdeMEQNnLBfZ5n">Donate
                                    bitcoin</a>
                                    to enable us to organize more conferences
                                    in the future.<br />We greatly appreciate your
                                    support!') ?></p>

                                    <p><?= _('We actively engage in open research and
                                    are committed to providing open access to
                                    everyone, even if they can\'t make it.
                                    Videos of all talks and slides will be
                                    published under a Creative Commons 4.0
                                    Attribution license.') ?></p>

                                    <p><?= _('We welcome diversity and are striving to
                                    offer equal opportunities to all
                                    participants.
                                    We are dedicated to providing a
                                    harassment-free conference experience for
                                    everyone, regardless of gender, sexual
                                    orientation, disability, physical
                                    appearance, body size, race, or
                                    religion.') ?></p>

                                    <ul class="feature-icons">
                                        <li
                                        class="fa-bitcoin"><?= _('Free admission') ?></li>
                                        <li
                                            class="fa-creative-commons">Creative Commons 4.0 Attribution</li>
                                        <li
                                        class="fa-smile-o"><?= _('Everyone welcome') ?></li>
                                    </ul>
                                </div>
                            </section>

                        <!-- Five -->
                        <!--
                            <section id="five">
                                <div class="container">
                                    <h3>Elements</h3>

                                    <section>
                                        <h4>Text</h4>
                                        <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                                        This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                                        This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                                        <hr />
                                        <header>
                                            <h4>Heading with a Subtitle</h4>
                                            <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                                        </header>
                                        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                                        <header>
                                            <h5>Heading with a Subtitle</h5>
                                            <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                                        </header>
                                        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                                        <hr />
                                        <h2>Heading Level 2</h2>
                                        <h3>Heading Level 3</h3>
                                        <h4>Heading Level 4</h4>
                                        <h5>Heading Level 5</h5>
                                        <h6>Heading Level 6</h6>
                                        <hr />
                                        <h5>Blockquote</h5>
                                        <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                                        <h5>Preformatted</h5>
                                        <pre><code>i = 0;

    while (!deck.isInOrder()) {
        print 'Iteration ' + i;
        deck.shuffle();
        i++;
    }

    print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                                    </section>

                                    <section>
                                        <h4>Lists</h4>
                                        <div class="row">
                                            <div class="6u 12u(xsmall)">
                                                <h5>Unordered</h5>
                                                <ul>
                                                    <li>Dolor pulvinar etiam magna etiam.</li>
                                                    <li>Sagittis adipiscing lorem eleifend.</li>
                                                    <li>Felis enim feugiat dolore viverra.</li>
                                                </ul>
                                                <h5>Alternate</h5>
                                                <ul class="alt">
                                                    <li>Dolor pulvinar etiam magna etiam.</li>
                                                    <li>Sagittis adipiscing lorem eleifend.</li>
                                                    <li>Felis enim feugiat dolore viverra.</li>
                                                </ul>
                                            </div>
                                            <div class="6u 12u(xsmall)">
                                                <h5>Ordered</h5>
                                                <ol>
                                                    <li>Dolor pulvinar etiam magna etiam.</li>
                                                    <li>Etiam vel felis at lorem sed viverra.</li>
                                                    <li>Felis enim feugiat dolore viverra.</li>
                                                    <li>Dolor pulvinar etiam magna etiam.</li>
                                                    <li>Etiam vel felis at lorem sed viverra.</li>
                                                    <li>Felis enim feugiat dolore viverra.</li>
                                                </ol>
                                                <h5>Icons</h5>
                                                <ul class="icons">
                                                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                                    <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h5>Actions</h5>
                                        <ul class="actions">
                                            <li><a href="#" class="button special">Default</a></li>
                                            <li><a href="#" class="button">Default</a></li>
                                            <li><a href="#" class="button alt">Default</a></li>
                                        </ul>
                                        <ul class="actions small">
                                            <li><a href="#" class="button special small">Small</a></li>
                                            <li><a href="#" class="button small">Small</a></li>
                                            <li><a href="#" class="button alt small">Small</a></li>
                                        </ul>
                                        <div class="row">
                                            <div class="3u 6u(medium) 12u$(xsmall)">
                                                <ul class="actions vertical">
                                                    <li><a href="#" class="button special">Default</a></li>
                                                    <li><a href="#" class="button">Default</a></li>
                                                    <li><a href="#" class="button alt">Default</a></li>
                                                </ul>
                                            </div>
                                            <div class="3u 6u$(medium) 12u$(xsmall)">
                                                <ul class="actions vertical small">
                                                    <li><a href="#" class="button special small">Small</a></li>
                                                    <li><a href="#" class="button small">Small</a></li>
                                                    <li><a href="#" class="button alt small">Small</a></li>
                                                </ul>
                                            </div>
                                            <div class="3u 6u(medium) 12u$(xsmall)">
                                                <ul class="actions vertical">
                                                    <li><a href="#" class="button special fit">Default</a></li>
                                                    <li><a href="#" class="button fit">Default</a></li>
                                                    <li><a href="#" class="button alt fit">Default</a></li>
                                                </ul>
                                            </div>
                                            <div class="3u 6u$(medium) 12u$(xsmall)">
                                                <ul class="actions vertical small">
                                                    <li><a href="#" class="button special small fit">Small</a></li>
                                                    <li><a href="#" class="button small fit">Small</a></li>
                                                    <li><a href="#" class="button alt small fit">Small</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <h4>Table</h4>
                                        <h5>Default</h5>
                                        <div class="table-wrapper">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Item One</td>
                                                        <td>Ante turpis integer aliquet porttitor.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Two</td>
                                                        <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                        <td>19.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Three</td>
                                                        <td> Morbi faucibus arcu accumsan lorem.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Four</td>
                                                        <td>Vitae integer tempus condimentum.</td>
                                                        <td>19.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Five</td>
                                                        <td>Ante turpis integer aliquet porttitor.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>100.00</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                        <h5>Alternate</h5>
                                        <div class="table-wrapper">
                                            <table class="alt">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Item One</td>
                                                        <td>Ante turpis integer aliquet porttitor.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Two</td>
                                                        <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                        <td>19.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Three</td>
                                                        <td> Morbi faucibus arcu accumsan lorem.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Four</td>
                                                        <td>Vitae integer tempus condimentum.</td>
                                                        <td>19.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Five</td>
                                                        <td>Ante turpis integer aliquet porttitor.</td>
                                                        <td>29.99</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>100.00</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </section>

                                    <section>
                                        <h4>Buttons</h4>
                                        <ul class="actions">
                                            <li><a href="#" class="button special">Special</a></li>
                                            <li><a href="#" class="button">Default</a></li>
                                            <li><a href="#" class="button alt">Alternate</a></li>
                                        </ul>
                                        <ul class="actions">
                                            <li><a href="#" class="button special big">Big</a></li>
                                            <li><a href="#" class="button">Default</a></li>
                                            <li><a href="#" class="button alt small">Small</a></li>
                                        </ul>
                                        <ul class="actions fit">
                                            <li><a href="#" class="button special fit">Fit</a></li>
                                            <li><a href="#" class="button fit">Fit</a></li>
                                            <li><a href="#" class="button alt fit">Fit</a></li>
                                        </ul>
                                        <ul class="actions fit small">
                                            <li><a href="#" class="button special fit small">Fit + Small</a></li>
                                            <li><a href="#" class="button fit small">Fit + Small</a></li>
                                            <li><a href="#" class="button alt fit small">Fit + Small</a></li>
                                        </ul>
                                        <ul class="actions">
                                            <li><a href="#" class="button special icon fa-download">Icon</a></li>
                                            <li><a href="#" class="button icon fa-download">Icon</a></li>
                                            <li><a href="#" class="button alt icon fa-check">Icon</a></li>
                                        </ul>
                                        <ul class="actions">
                                            <li><span class="button special disabled">Special</span></li>
                                            <li><span class="button disabled">Default</span></li>
                                            <li><span class="button alt disabled">Alternate</span></li>
                                        </ul>
                                    </section>

                                    <section>
                                        <h4>Form</h4>
                                        <form method="post" action="#">
                                            <div class="row uniform">
                                                <div class="6u 12u(xsmall)">
                                                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                                </div>
                                                <div class="6u 12u(xsmall)">
                                                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="12u">
                                                    <div class="select-wrapper">
                                                        <select name="demo-category" id="demo-category">
                                                            <option value="">- Category -</option>
                                                            <option value="1">Manufacturing</option>
                                                            <option value="1">Shipping</option>
                                                            <option value="1">Administration</option>
                                                            <option value="1">Human Resources</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="4u 12u(medium)">
                                                    <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                                    <label for="demo-priority-low">Low Priority</label>
                                                </div>
                                                <div class="4u 12u(medium)">
                                                    <input type="radio" id="demo-priority-normal" name="demo-priority">
                                                    <label for="demo-priority-normal">Normal Priority</label>
                                                </div>
                                                <div class="4u 12u(medium)">
                                                    <input type="radio" id="demo-priority-high" name="demo-priority">
                                                    <label for="demo-priority-high">High Priority</label>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="6u 12u(medium)">
                                                    <input type="checkbox" id="demo-copy" name="demo-copy">
                                                    <label for="demo-copy">Email me a copy of this message</label>
                                                </div>
                                                <div class="6u 12u(medium)">
                                                    <input type="checkbox" id="demo-human" name="demo-human" checked>
                                                    <label for="demo-human">I am a human and not a robot</label>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="12u">
                                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="12u">
                                                    <ul class="actions">
                                                        <li><input type="submit" value="Send Message" /></li>
                                                        <li><input type="reset" value="Reset" class="alt" /></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </section>

                                    <section>
                                        <h4>Image</h4>
                                        <h5>Fit</h5>
                                        <span class="image fit"><img src="images/banner.jpg" alt="" /></span>
                                        <div class="box alt">
                                            <div class="row 50% uniform">
                                                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                            </div>
                                            <div class="row 50% uniform">
                                                <div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                            </div>
                                            <div class="row 50% uniform">
                                                <div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                            </div>
                                        </div>
                                        <h5>Left &amp; Right</h5>
                                        <p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                                        <p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                                    </section>

                                </div>
                            </section>
                        -->

                    </div>

                <!-- Footer -->
                    <section id="footer">
                        <div class="container">
                            <div style='font-size:90%'>
                                <p>&copy; <a
                                href='https://crypto.di.uoa.gr'><?= htmlspecialchars(_('Cryptography & Security Lab')) ?></a>,
                                    <?= _('University of Athens.') ?> <?= _('Some rights reserved.') ?></p>
                                <p><?= _('This conference is licensed under <a href="https://creativecommons.org/licenses/by/4.0/">Creative
                                          Commons 4.0 Attribution</a>.') ?></p>
                            </div>
                            <ul class="copyright">
                                <li><?= _('Design: ') ?> <a href="http://html5up.net">HTML5 UP</a></li>
                                <li><?= _('Photos: ') ?> <a
                                        href='https://www.flickr.com/photos/ntrinkhaus/32134972523/in/photolist-QXE8Lp-RKRPU5-RBZbsY-QJK6FR-CqRE75-raGyjB-DxMaaM-noxdQR-qvbts9-iDNuTz-77ZGME-4nNUeY-gR8HRJ-QKqw3Z-961k7N-wYPyhd-NKBZPL-8u8xZ7-s35d2B-A9PjLY-RrJAwv-4nGiyw-qfHCWg-48J8jc-FGKE-dmJAW9-89FW8j-j58MpE-7D7s7j-5AvfaU-mivfWi-HFCGU4-7LNuZB-dChTTi-8U7Wnb-cstWi3-Rh4iNG-dAPqYM-6uR73b-95HJMx-kopSt9-bmLMgn-8h1CMK-4nCfmx-hTCjTt-hU3Qie-87SJcT-rbTXS2-rcZebc-fpiHZX'>Nico
                                        Trinkhaus</a>, <a href='https://commons.wikimedia.org/wiki/File:Metal_Handshake.jpg'>Grey Geezer</a></li>
                                <li><?= _('Icons: ') ?> <a
                                        href='http://delapouite.com/'>Delapouite</a></li>
                            </ul>
                        </div>
                    </section>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollzer.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>

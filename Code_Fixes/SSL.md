## .htaccess

Force SSL.  Place after End WordPress

    ## FORCE HTTPS ##
    RewriteCond %{HTTPS} !=on
    RewriteCond %{SERVER_PORT} 80
    RewriteCond %{HTTP_HOST} ^sportsannouncersreportcard\.com$ [OR]
    RewriteCond %{HTTP_HOST} ^www\.sportsannouncersreportcard\.com$
    RewriteRule ^(.*)$ https://www.sportsannouncersreportcard.com/$1 [R,L]
    
Redirect homepage only in .htaccess
    
    RewriteEngine on
    RewriteCond %{HTTP_HOST} mysite\.com [NC]
    RewriteCond %{REQUEST_URI} ^/$
    Rewriterule ^(.*)$ http://mysecondsite.com/ [L,R=301]

Unknown throwaway code for sportsannouncersreportcard.com

    AddHandler phpCGI .xml .php
    Action phpCGI /cgi-bin/php5.6fcgi
    # for php5 and securewebexchange
    <IfDefine SSL>
    AddHandler phpCGI .xml .php
    Action phpCGI https://securec45.securewebsession.com/sportsannouncersreportcard.com/cgi-bin/php5.6fcgi
    </IfDefine>
    
Redirects

    ## Redirect URls ##
    RedirectMatch ^/$ http://www.sportsbroadcastjournal.com
    Redirect 301 / http://www.sportsbroadcastjournal.com/

    Redirect 301 /blog/will-marv-albert-be-the-first-network-play-by-play-announcer-to-call-games-in-his-80s http://www.sportsbroadcastjournal.com/will-marv-albert-be-the-first-network-play-by-play-announcer-to-call-games-in-his-80s/
    Redirect 301 /blog/tears-of-appreciation-costas-enberg-glickman-scully-and-joe-tait http://www.sportsbroadcastjournal.com/tears-of-appreciation-costas-enberg-glickman-scully-and-joe-tait/
    Redirect 301 /blog/verne-lundquist-a-hearty-laugh-and-natural-warmth-that-might-never-be-replaced http://www.sportsbroadcastjournal.com/verne-lundquist-a-hearty-laugh-and-natural-warmth-that-might-never-be-replaced/
    Redirect 301 /blog/halbys-morsels-preakness-nhl-random-reviews-tales-and-notes http://www.sportsbroadcastjournal.com/halbys-morsels-preakness-nhl-random-reviews-tales-and-notes/
    Redirect 301 /blog/jerry-schemmel-rockies-radio-voice-and-survivor-of-deadly-united-airlines-crash-tests-lifes-limits http://www.sportsbroadcastjournal.com/jerry-schemmel-rockies-radio-voice-and-survivor-of-deadly-united-airlines-crash-tests-lifes-limits/
    Redirect 301 /blog/in-his-45th-season-reds-voice-marty-brennaman-doesnt-hold-back http://www.sportsbroadcastjournal.com/in-his-45th-season-the-reds-marty-brennaman-is-taking-it-one-year-at-a-time/
    Redirect 301 /blog/jim-paige-who-inspired-my-sportscasting-pursuit-now-suffering-from-als http://www.sportsbroadcastjournal.com/jim-paige-who-inspired-my-sportscasting-pursuit-now-suffering-from-als/
    Redirect 301 /blog/espns-linda-cohn-longest-tenured-woman-anchor-on-network-tv http://www.sportsbroadcastjournal.com/espns-linda-cohn-longest-tenured-woman-anchor-on-network-tv/
    Redirect 301 /blog/jim-rome-pioneer-network-sports-talk-host-stresses-knowledge-and-uniqueness http://www.sportsbroadcastjournal.com/jim-rome-pioneer-network-sports-talk-host-stresses-knowledge-and-uniqueness/
    Redirect 301 /blog/mike-emrick-is-less-vin-scully-and-more-dick-enberg-on-steroids http://www.sportsbroadcastjournal.com/mike-emrick-the-voice-of-hockey-is-dick-enberg-on-steroids/
    Redirect 301 /blog/richard-sandomir-delves-into-his-the-pride-of-the-yankees-lou-gehrig-gary-cooper-and-the-making-of-a-classic http://www.sportsbroadcastjournal.com/richard-sandomir-delves-into-his-the-pride-of-the-yankees-lou-gehrig-gary-cooper-and-the-making-of-a-classic/
    Redirect 301 /blog/nbc-sports-boss-mark-lazarus-talks-talent-nfl-and-networks-growing-portfolio http://www.sportsbroadcastjournal.com/nbc-sports-boss-mark-lazarus-talks-talent-networks-growing-portfolio/
    Redirect 301 /blog/bulls-voice-chuck-swirsky-talks-his-career-and-breaks-down-nba-playoffs http://www.sportsbroadcastjournal.com/bulls-voice-chuck-swirsky-talks-career-nba-playoffs/
    Redirect 301 /blog/the-5-all-time-top-play-by-play-announcers-in-americas-10-biggest-markets http://www.sportsbroadcastjournal.com/the-5-all-time-top-play-by-play-announcers-in-americas-10-biggest-markets/
    Redirect 301 /blog/like-the-rest-of-us-announcers-deal-with-baggage-too http://www.sportsbroadcastjournal.com/like-the-rest-of-us-announcers-deal-with-issues-too/
    Redirect 301 /blog/the-bruising-battle-of-the-blazers-brian-wheeler-from-abuse-to-obesity-and-a-sidelining-ailment http://www.sportsbroadcastjournal.com/the-bruising-battle-of-the-blazers-brian-wheeler-from-abuse-to-obesity-and-a-sidelining-ailment/
    Redirect 301 /blog/play-by-play-from-the-studio-embrace-it http://www.sportsbroadcastjournal.com/play-by-play-from-the-studio-embrace-it/
    Redirect 301 /blog/warner-wolf-lets-go-to-the-video-tape http://www.sportsbroadcastjournal.com/warner-wolf-lets-go-to-the-video-tape/
    Redirect 301 /blog/hall-of-fame-columnist-peter-vecsey-unleashes-his-opinions-of-nbas-tv-announcers http://www.sportsbroadcastjournal.com/peter-vecsey-unleashes-opinion-of-nbas-tv-announcers/
    Redirect 301 /blog/al-mccoy-suns-voice-soon-85-looks-forward-to-his-47th-season-this-fall http://www.sportsbroadcastjournal.com/al-mccoy-suns-voice-looks-forward-to-47th-season/
    Redirect 301 /blog/nhl-playoffs-chuck-kaiton-predicts-first-round-winners http://www.sportsbroadcastjournal.com/nhl-playoffs-chuck-kaiton-predicts-first-round-winners/
    Redirect 301 /blog/the-2018-masters-review-of-televisions-coverage http://www.sportsbroadcastjournal.com/2018-masters-review-of-televisions-coverage/
    Redirect 301 /blog/monte-moore-longtime-as-voice-my-worst-year-was-1970-with-harry-caray http://www.sportsbroadcastjournal.com/monte-moore-worst-year-1970-with-harry-caray/
    Redirect 301 /blog/alex-faust-an-nhl-broadcast-rookie-succeeding-a-legend-bob-miller http://www.sportsbroadcastjournal.com/alex-faust-nhl-broadcast-rookie-succeeding-bob-miller/
    Redirect 301 /blog/halbys-morsels-college-hoops-announcers-milestones-and-the-praiseworthy http://www.sportsbroadcastjournal.com/college-hoops-announcers-milestones/
    Redirect 301 /blog/dick-vitale-for-almost-40-years-on-espn-college-basketballs-colorful-cheerleader http://www.sportsbroadcastjournal.com/dick-vitale-for-almost-40-years-on-espn/
    Redirect 301 /blog/wfans-mr-met-bob-heussler-attending-45th-straight-home-opener http://www.sportsbroadcastjournal.com/wfans-mr-met-bob-heussler-attending-45th-straight-home-opener/
    Redirect 301 /blog/sam-rosen-21-years-covering-the-nfl-on-fox-and-34-seasons-as-voice-of-the-ny-rangers http://www.sportsbroadcastjournal.com/sam-rosen-21-years-covering-nfl-34-seasons-ny-rangers/
    Redirect 301 /blog/march-madness-announcers-review http://www.sportsbroadcastjournal.com/march-madness-announcers-review-tv-radio/
    Redirect 301 /blog/cnns-wolf-blitzer-cosell-inspired-so-many-journalists-to-follow-his-lead http://www.sportsbroadcastjournal.com/cosell-inspired-so-many-journalists-to-follow-his-lead/
    Redirect 301 /blog/costas-howard-cosells-unmistakable-delivery-imitated-by-all http://www.sportsbroadcastjournal.com/howard-cosells-unmistakable-delivery-imitated-by-all/
    Redirect 301 /blog/howard-cosell-brilliant-and-occasionally-uncivil http://www.sportsbroadcastjournal.com/howard-cosell-brilliant-and-occasionally-rude/
    Redirect 301 /blog/howard-cosell-magnetizing-and-overpowering-sports-first-broadcast-personality-born-100-years-ago http://www.sportsbroadcastjournal.com/howard-cosell-sports-first-broadcast-personality-100/
    Redirect 301 /blog/rudy-martzke-respected-sports-media-critic-assesses-tourney-announcers http://www.sportsbroadcastjournal.com/rudy-martzke-assesses-tourney-announcers/
    Redirect 301 /blog/big-dance-remains-filled-with-big-cliches http://www.sportsbroadcastjournal.com/big-dance-remains-filled-with-big-cliches/
    Redirect 301 /blog/billy-packer-cant-work-today-due-to-political-correctness-dean-smith-best-overall-coach http://www.sportsbroadcastjournal.com/billy-packer-cant-work-today-due-to-political-correctness/
    Redirect 301 /blog/billy-packer-reminisces-reagan-shot-before-81-title-game-vitale-spat-musburger-fired-eve-of-90-title-game http://www.sportsbroadcastjournal.com/billy-packer-reminisces/
    Redirect 301 /blog/qa-with-billy-packer-the-early-years-with-curt-gowdy-dick-enberg http://www.sportsbroadcastjournal.com/qa-billy-packer-early-years-curt-gowdy-dick-enberg/
    Redirect 301 /blog/after-34-straight-final-fours-billy-packer-hasnt-attended-a-basketball-game-in-10-years http://www.sportsbroadcastjournal.com/billy-packer-hasnt-attended-basketball-game-in-10-years/
    Redirect 301 /blog/turner-boss-david-levy-a-self-made-man-pumped-on-eve-of-tourney http://www.sportsbroadcastjournal.com/david-levy-turner/
    Redirect 301 /blog/is-tim-ryan-network-tvs-most-versatile-announcer-ever http://www.sportsbroadcastjournal.com/is-tim-ryan-network-tvs-most-versatile-announcer-ever/
    Redirect 301 /blog/halbys-morsels-and-jottings-3512 http://www.sportsbroadcastjournal.com/morsels-and-jottings-3-4-18/
    Redirect 301 /blog/mike-patrick-will-miss-espn-crew-opposes-putting-play-by-play-team-in-studio http://www.sportsbroadcastjournal.com/mike-patrick-will-miss-espn-crew/
    Redirect 301 /blog/following-two-giants-woody-durham-at-north-carolina-and-bob-harris-at-duke http://www.sportsbroadcastjournal.com/following-two-giants-woody-durham-nc-bob-harris-duke/
    Redirect 301 /blog/really-brooklyns-andy-furman-a-cincinnati-radio-legend http://www.sportsbroadcastjournal.com/brooklyns-andy-furman-a-cincinnati-radio-legend/
    Redirect 301 /blog/steve-levy-a-ubiquitous-iron-man-hes-here-there-and-everywhere http://www.sportsbroadcastjournal.com/steve-levy-a-ubiquitous-iron-man/
    Redirect 301 /blog/halbys-morsels-and-jottings-21918 http://www.sportsbroadcastjournal.com/jottings-2-19-18/
    Redirect 301 /blog/streaming-of-orange-sports-creates-even-more-on-air-opportunities-for-syracuse-students http://www.sportsbroadcastjournal.com/streaming-of-orange-sports-syracuse/
    Redirect 301 /blog/nfl-says-interest-in-radio-row-is-still-very-strong http://www.sportsbroadcastjournal.com/nfl-says-interest-in-radio-row-is-still-very-strong/
    Redirect 301 /blog/play-by-play-streaming-a-wild-west-frontier-announcers-needed http://www.sportsbroadcastjournal.com/play-by-play-streaming-announcers-needed/
    Redirect 301 /blog/a-candid-al-jaffe-talks-espn-talent-and-the-networks-future http://www.sportsbroadcastjournal.com/al-jaffe-talks-espn-talent/
    Redirect 301 /blog/a-lifetimes-lesson-in-a-single-session-with-marty-glickman http://www.sportsbroadcastjournal.com/meeting-marty-glickman/
    Redirect 301 /blog/hollywood-writer-and-sports-announcer-ken-levine-reviews-coverage-of-super-bowl-lii http://www.sportsbroadcastjournal.com/as-i-see-it-coverage-of-the-2018-super-bowl/
    Redirect 301 /blog/halbys-morsels-and-jottings-random-notes-and-observations-from-the-recent-sportscasting-past http://www.sportsbroadcastjournal.com/halbys-jottings-recent-sportscasting-news/
    Redirect 301 /blog/rich-eisen-the-face-of-nfl-network http://www.sportsbroadcastjournal.com/rich-eisen-the-face-of-nfl-network/
    Redirect 301 /blog/classic-jim-cramer-on-sports-broadcasting http://www.sportsbroadcastjournal.com/jim-cramer-sports-broadcasting/
    Redirect 301 /blog/kevin-harlan-the-energetic-radio-voice-of-the-super-bowl http://www.sportsbroadcastjournal.com/kevin-harlan-radio-voice-super-bowl/
    Redirect 301 /blog/qa-with-greg-amsinger-host-on-mlb-network http://www.sportsbroadcastjournal.com/mlb-networks-greg-amsinger-talks-baseball-broadcasting/
    Redirect 301 /blog/remembering-the-great-ernie-harwell-on-his-100th-birthday http://www.sportsbroadcastjournal.com/remembering-ernie-harwell-100th-birthday/
    Redirect 301 /blog/getting-caught-up-with-retired-and-fabled-usa-today-sports-media-columnist-rudy-martzke http://www.sportsbroadcastjournal.com/getting-caught-up-with-retired-usa-today-sports-media-columnist-rudy-martzke/
    Redirect 301 /blog/you-know-keith-jackson-was-the-king-of-saturday-college-football-broadcasting http://www.sportsbroadcastjournal.com/keith-jackson-saturday-college-football-broadcasting/
    Redirect 301 /blog/dick-enberg-grace-was-his-middle-name http://www.sportsbroadcastjournal.com/dick-enberg-grace-was-his-middle-name/
    Redirect 301 /blog/interview-with-jack-whitaker http://www.sportsbroadcastjournal.com/jack-whitaker-enjoying-life-90s/
    Redirect 301 /blog/an-nhl-radio-legend-a-qa-with-the-inimitable-voice-of-the-carolina-hurricanes-chuck-kaiton http://www.sportsbroadcastjournal.com/qa-carolina-hurricanes-chuck-kaiton/
    Redirect 301 /blog/qa-with-steve-herz http://www.sportsbroadcastjournal.com/qa-sports-agent-steve-herz/
    Redirect 301 /blog/a-qa-with-wfuvs-bob-ahrens http://www.sportsbroadcastjournal.com/a-qa-with-wfuvs-bob-ahrens/
    Redirect 301 /blog/remembering-the-great-marty-glickman-on-his-100th-birthday http://www.sportsbroadcastjournal.com/remembering-marty-glickman/
    ## Redirect URls ##

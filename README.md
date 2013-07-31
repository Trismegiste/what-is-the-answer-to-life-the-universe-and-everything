# What is the answer to Life, the Universe, and Everything website

Homage to [Douglas Adams][42]

## WTF ?

Check the result at http://whatistheanswertolifetheuniverseandeverything.info/

and press F5 !

## Feel free to contribute

This [Silex][2] app belongs to the very strange [single serving sites][1] club like :

 * http://www.turnofftheinternet.com
 * http://www.thispagecannotbedisplayed.com
 * http://www.khaaan.com
 * http://www.sometimesredsometimesblue.com
 * http://estcequecestbientotleweekend.fr/ (in french)

The single controller scans the directory /views/answer for [Twig][3] templates
and randomly renders one of them.

Currently you can haZ [PureCSS][4] but I will consider to add another CSS framework like Twitter Bootstrap.
or Zurb Foundation.

## One Rule to Ring Them All

Forty-two (42) must appears on the screen. This can be the number 42 in unary, binary, cuneiform or
whatever, as long as you can count 42 : 42 stars, 42 octocats or 42 african swallows...

## How to use ?

See the template layout.html.twig in "views" folder, you can check what blocks are
avaliable to overriding. You can also extend default.html.twig if PureCSS fits you.

And remember : "Keep It Simple and Smart", by Hell ! The lighter your PR is, the more
PR will be merged into this.

Adobe Flash and sound effects with autoplay will be sentenced to slow and painful death.

Opensource only.

## What about javascript ?

I will be reluctant to merge PR with tons of javascript except from trusted sources.

Use HTML5 and CSS3 to make fancy animations, that's the challenge (see animate.html.twig
for example)

## Requirements

Prefer mobile devices and last versions of modern browsers (Chrome, Firefox, IE >= 10 )

[1]: http://knowyourmeme.com/memes/subcultures/single-serving-site
[42]: http://en.wikipedia.org/wiki/Douglas_Adams
[2]: http://silex.sensiolabs.org/
[3]: http://twig.sensiolabs.org/
[4]: http://purecss.io/

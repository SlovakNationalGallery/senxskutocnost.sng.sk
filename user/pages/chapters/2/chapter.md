---
title: 'Jeden národ, jedna strana, jeden vodca'
published: true
disabled: true
date: '05-12-2016 13:00'
slug: chapter-2
routes:
    default: /chapters/2-jeden-narod-jedna-strana-jeden-vodca
    canonical: /chapters/2-jeden-narod-jedna-strana-jeden-vodca
    aliases:
        - /chapters/2
chapterNumber: 2
titleStyled: "<span class='f-uni-grotesk-bold'>Jeden národ,<br></span> <span class='f-moyenage'>jedna strana, jeden vodca</span>"
description: '2. kapitola: Jeden národ, jedna strana, jeden vodca'
image: teslik-oslavy.jpg
emailCTA: 'Chcem vedieť o nasledujúcich udalostiach.'
emailPlaceholder: 'e-mailová adresa'
emailButton: 'informujte ma'
---

## Ahoj Lukas! 

<span class="drop-cap">A</span>ll page content is specified in [markdown](https://daringfireball.net/projects/markdown/basics), which is an human-readable way to specify markup that can be auto-converted to HTML.

Main things to know:
* read the basic info https://daringfireball.net/projects/markdown/basics
* you can read details about syntax at https://daringfireball.net/projects/markdown/syntax
* simply separate paragraphs by an empty line
* all other elements (like the ones below) are included in the current chapter 1 file as an example, feel free to keep them around whilst editing...
* Main headers in the chapter content are `<h2>` elements, which you can specify like:
`## Your Title Name’ (preceded and followed by an empty line)
* consecutive titles lower in hierarchy like h3, h4, etc can be written as `### your smaller title` and `#### your even smaller title`
* include images like this: 
```
![Chamberlain, Daladier, Hitler, Mussolini, and Ciano pictured before signing the Munich Agreement, which gave the Sudetenland to Germany.](photo-staatschefs.jpg "Munich Agreement”)
```
* add a drop-cap like this:
```
<span class="drop-cap">P</span>rvá svetová vojna ...
```
* add a highlight paragraph (perex) like this:
```
<div class="highlight">
<p>
Píše sa rok 1938, keď si nacistické Nemecko tzv. anšlusom násilne pripája Rakúsko. Hitler sa zároveň netají snahami zlikvidovať susedné Československo
</p>
</div>
```
* add a date subtitle like this:
```
### 29. 9. 1938 {.title-date}
```
* btw, when the page is disabled it won't be clickable in the nav bar, but still accessible e.g. ch2 via [senxskutocnost.sng.sk/chapters/2-jeden-narod-jedna-strana-jeden-vodca](/chapters/2-jeden-narod-jedna-strana-jeden-vodca)
* this is how you can add subobject-end-of-section-links:
{% include 'partials/subobjects.html.twig' with {
    'title': 'Example subobjects',
    'subobjects': [
        {
            'name':'Autonómia', 
            'thumbnail': page.media['Autonomia.jpg'],
            'href': '2/autonomia'
        },
        {
            'name':'Another Subobject', 
            'thumbnail': page.media['Autonomia.jpg'],
            'href': '2/autonomia'
        }
    ]
}%}
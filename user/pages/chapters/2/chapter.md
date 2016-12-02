---
title: 'Jeden národ, jedna strana, jeden vodca'
published: true
disabled: false
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
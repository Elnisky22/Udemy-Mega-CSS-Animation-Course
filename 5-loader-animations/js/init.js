/* global Fancybox */

//--Outer Height-------------------------//

function outerHeight(el) { // Calculate the outer height (el + padding + margin) of an element
    const curStyle = el.currentStyle || window.getComputedStyle(el);
    let outerHeight = el.offsetHeight;
    outerHeight += parseInt(curStyle.marginTop);
    outerHeight += parseInt(curStyle.marginBottom);
    return outerHeight;
}

//--Main Height--------------------------//

function mainMinHeight() {
    const main = document.querySelector('main'),
        headerHeight = document.querySelector('#header').clientHeight,
        footerHeight = document.querySelector('#footer').clientHeight;
    let mainHeight = window.innerHeight - (headerHeight + footerHeight);
    main.style.minHeight = `${mainHeight}px`;
}

if (document.querySelector('#header') !== null && document.querySelector('#footer') !== null) {
    window.addEventListener('load', mainMinHeight);
    window.addEventListener('resize', mainMinHeight);
}

function toggleFlex() {
    const main = document.querySelector('main');
    main.classList.contains('flex') ? main.classList.remove('flex') : main.classList.add('flex');
}
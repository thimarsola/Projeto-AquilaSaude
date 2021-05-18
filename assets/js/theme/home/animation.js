let hero = gsap.timeline({
    scrollTrigger:{
        trigger: '.hero'
    }
});

let about = gsap.timeline({
    scrollTrigger:{
        trigger: '.about',
        start: 'left bottom'
    }
});

let specialties = gsap.timeline({
    scrollTrigger:{
        trigger: '.specialties',
        start: 'left center'
    }
});

let invisalign = gsap.timeline({
    scrollTrigger:{
        trigger: '.invisalign',
        start: 'left center'
    }
});

let team = gsap.timeline({
    scrollTrigger:{
        trigger: '.team',
        start: 'left bottom'
    }
});

let gallery = gsap.timeline({
    scrollTrigger:{
        trigger: '.gallery',
        start: 'left center'
    }
});

let testimonial = gsap.timeline({
    scrollTrigger:{
        trigger: '.testimonial',
        start: 'left bottom'
    }
});

hero.from('.hero__row__image',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Back.easeInOut'
})
    .from('.hero__row__content__image',{
        opacity: 0,
        duration: 1,
        x: 150,
        ease: 'Power4.easeInOut'
    })
    .from('.hero__row__content__text',{
        opacity: 0,
        duration: 1.5,
        y: -150,
        ease: 'Power4.easeInOut'
    });

about.from('.about__row__content',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Back.easeInOut'
})
    .from('.about__row__information',{
        opacity: 0,
        duration: 1,
        x: 150,
        ease: 'Power4.easeInOut'
    });

specialties.from('.specialties__content',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Expo.easeInOut'
})
    .from('.specialties__grid__card',{
        opacity: 0,
        duration: 1,
        y: 100,
        ease: 'Expo.easeInOut'
    });

invisalign.from('.invisalign__row__card__body__animation__01',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Expo.easeInOut'
})
    .from('.invisalign__row__card__body__animation__02',{
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Expo.easeInOut'
    });

team.from('.team__row__body',{
    opacity: 0,
    duration: 1.5,
    x: 150,
    ease: 'Circ.easeInOut'
});

gallery.from('.gallery',{
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

testimonial.from('.testimonial',{
    opacity: 0,
    duration: 2,
    y: 20,
    ease: 'Bounce.easeInOut'
});
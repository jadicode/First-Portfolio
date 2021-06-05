/* INDEX */

const srtop = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

srtop.reveal('#scroll1', {})
srtop.reveal('#scrollbutton', { delay: 200 })


const srleft = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: 2000,
    reset: true
});

srleft.reveal('#scroll2', { delay: 300 })
srleft.reveal('#scrollbutton2', { delay: 400 })

const srright = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

srright.reveal('#scroll3', {})
srright.reveal('#scrollbutton3', { delay: 200 })

/* ABOUT ME */

const title = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: 2000,
    reset: true
});

title.reveal('#scrolltexttittle', {})


const img = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: 2000,
    reset: true
});

img.reveal('#scrollimgabout', {})

const bottom = ScrollReveal({
    origin: 'bottom',
    distance: '80px',
    duration: 2000,
    reset: true
});

bottom.reveal(".hr", { delay: 200 })
bottom.reveal("#scrollabout1", { delay: 400 })
bottom.reveal("#scrollabout2", { delay: 400 })


const cardleft = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: 2000,
    reset: true
});

cardleft.reveal('#scrollcard1', { delay: 400 })
cardleft.reveal('#scrollcard2', { delay: 400 })
cardleft.reveal('#scrollcard3', { delay: 400 })
cardleft.reveal('#scrollcard4', { delay: 400 })
cardleft.reveal('#scrollcard5', { delay: 400 })


/* CONTACT */

srtop.reveal('#formscroll', {})

/* PROJECTS */

srtop.reveal('#scrollproject', {})
cardleft.reveal('#scrollproject2', { delay: 400 })
srright.reveal('#scrollproject3', { delay: 500 })
srright.reveal('#scrollproject4', { delay: 600 })
srright.reveal('#scrollproject5', { delay: 700 })
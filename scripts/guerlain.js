// alert('JS connected!');

// *Récupération du nom de la boutique sélectionnée
const selector_btk = document.getElementById('selector_btk');
selector_btk.addEventListener('click',()=>{
    let nom_btk = selector_btk.value;
    document.getElementById('btk_choisie').textContent = 'Vous avez sélectionné la boutique : '+nom_btk;
    document.cookie = "selected btk = " + nom_btk + "; ls_options =";
});


// *Au changement de boutique générer la liste du staff de la boutique sélectionnée
selector_btk.addEventListener('change', ()=>{
    selector_btk.reset
    var options = document.querySelectorAll('#selector_profil option');
    for(let opt of options)
    {
        opt.classList.add('inactif');
        if(opt.classList[0] == selector_btk.value)
        {
            opt.classList.remove('inactif');
        }
        if(selector_btk.value == '')
        {
            var profil = document.getElementById('selector_profil');
            profil.value = '';
        }
    }
})


// console.log(options);
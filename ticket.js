const vol = [
    {
        compagnie : "UA",
        heure : "22h30",
        prix : 300000,
    },

    {
        compagnie : "AA",
        heure : "00h30",
        prix : 250000,
    },

    {
        compagnie : "US",
        heure : "13h00",
        prix : 330000,
    },

    {
        compagnie : "WN",
        heure : "4h00",
        prix : 130000,
    },

   

]

const compagnie = document.querySelector(".compagnie");
const heure = document.querySelector(".heure-dep");
const prix = document.querySelector(".prix");
const section = document.querySelector(".tickets");
const bouttons = document.querySelectorAll(".btn-offre");

window.addEventListener('DOMContentLoaded', () => {
    let displayVol = vol.map(function(item) {
        return `<div class="ticket-container">
        <div class="col-item">
            <p>Compagnie</p>
            <h2 class="compagnie">${item.compagnie}</h2>
        </div>
        <div class="col-item">
            <p>Heure Départ</p>
            <h2 class="heure-dep">${item.heure}</h2>
        </div>
        <div class="col-item item-prix">
            <h2 class="prix">${item.prix} FCFA</h2>
            <button class="btn-offre">Voir l'offre</button>
        </div>
        
        
    </div>`
    })
    displayVol.join("");
    section.innerHTML = displayVol;
})

function openModal() {
    document.querySelector('#myModal').style.display = 'block';
}

function closeModal() {
    document.querySelector("#myModal").style.display = 'none';
}

bouttons.forEach(function(btn) {
    btn.addEventListener("click", function(e) {
        console.log(e.currentTarget);
        openModal();
        
    })
    
})



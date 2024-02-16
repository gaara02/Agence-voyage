/*const vol = [
    {
        compagnie: "UA",
        heure: "22h30",
        prix: 300000,
        heureArrive: '00h45',
        distance: 850,
        aeroportDep: "IAD",
        aeroprtArv: "TPA",
        dateVol : "2024-01-03",
    },
    {
        compagnie: "AA",
        heure: "00h30",
        prix: 250000,
        heureArrive: '05h45',
        distance: 450,
        aeroportDep: "IND",
        aeroprtArv: "BWI",
        dateVol : "2024-01-06",
    },
    {
        compagnie: "US",
        heure: "13h00",
        prix: 330000,
        heureArrive: '17h00',
        distance: 440,
        aeroportDep: "IND",
        aeroprtArv: "JAX",
        dateVol : "2024-01-04",
    },
    {
        compagnie: "WN",
        heure: "4h00",
        prix: 130000,
        heureArrive: '9h30',
        distance: 650,
        aeroportDep: "IND",
        aeroprtArv: "MCO",
        dateVol : "2024-01-05",
    },
];

const section = document.querySelector(".tickets");
const Modal = document.querySelector(".content-to-loaded");

window.addEventListener('DOMContentLoaded', () => {
    let displayVol = vol.map(function (item, index) {
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
                <h2 class="prix"> ${item.prix} FCFA</h2>
                <button class="btn-offre" data-index="${index}" onclick="openModal(${index})">Voir l'offre</button>
            </div>
        </div>`;
    });

    section.innerHTML = displayVol.join("");
});*/

function openModal(index) {
    const modal = document.querySelector('#myModal');
    const item = vol[index];

    Modal.querySelector('.compagnie-modal').textContent = `Compagnie: ${item.compagnie}`;
    Modal.querySelector('.heure-modal').textContent = ` ${item.heure}`;
    Modal.querySelector('.prix-modal').textContent = `Prix: ${item.prix} FCFA`;
    Modal.querySelector('.heure-arrivee').textContent = `${item.heureArrive}`;
    Modal.querySelector('.distance').textContent = `Distance: ${item.distance} km`;
    Modal.querySelector('.aeroport-dep').textContent = `${item.aeroportDep}`;
    Modal.querySelector('.aeroport-arv').textContent =  `${item.aeroprtArv}`;
    Modal.querySelector('.date-vol').textContent = `Date vol: ${item.dateVol}`;

    modal.style.display = 'block';
}

function closeModal() {
    document.querySelector("#myModal").style.display = 'none';
}


function formatDate() {
    // Récupérer la valeur de l'input date
    var inputDate = document.getElementById('dateInput').value;

    // Formater la date comme "YYYY-MM-DD"
    var formattedDate = new Date(inputDate).toISOString().split('T')[0];

    // Appliquer le format à l'input date
    document.getElementById('dateInput').value = formattedDate;
  }
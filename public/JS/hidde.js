let hiddenTexts = document.getElementsByClassName("ToHidde");

// je cache les réponses au chargement
for(let description of hiddenTexts) {
    description.style.display="none";
}

// Fonction déclenchée par le bouton d'aide
function displayContent($id) {
// On récupère et on modifie le paragraphe et le span
    let content = document.getElementById($id);
    if (content.style.display==="none"){
        content.style.display="flex";
    }
    else {
        content.style.display="none";
    }
}
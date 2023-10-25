var ingredCounter = 1; //initial number of ingredient fields

function addIngredFields(e) {

    e.stopPropagation();
    var clicked = e.target;

    if( clicked.classList.contains('add-ingredients')) {

        var lastIngredField = '#ingred'+ingredCounter;
        var ingredTemplateEl = document.querySelector(lastIngredField);
        var clone = ingredTemplateEl.cloneNode(true);
        
        ingredCounter++;
        clone.id = "ingred" + ingredCounter;
        ingredTemplateEl.after(clone);

        var prevIngredBtn = document.getElementsByClassName('add-ingredients')[0];
        prevIngredBtn.remove();
    } 
}

var addIngredEl = document.querySelector('#ingredients-outer');
if(addIngredEl) {
    addIngredEl.addEventListener('click', addIngredFields);
} 
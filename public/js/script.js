var ingredCounter = 1; //initial number of ingredient fields
var newIngredCounter = 0; //initial number of new ingredient fields
var addNewIngred = false; //initially set to false, changed after first use

function addIngredFields(e) {

    e.stopPropagation();
    var clicked = e.target;

    if( clicked.classList.contains('add-ingredients')) {

        var lastIngredField = '#ingred' + ingredCounter;
        var ingredTemplateEl = document.querySelector(lastIngredField);
        var clone = ingredTemplateEl.cloneNode(true);
        
        ingredCounter++;
        clone.id = "ingred" + ingredCounter;
        ingredTemplateEl.after(clone);

        var prevIngredBtn = document.getElementsByClassName('add-ingredients')[0];
        prevIngredBtn.remove();
    } 

    if( clicked.classList.contains('add-new-ingredient')) {
        e.preventDefault();
        
        if (!addNewIngred) {

            addNewIngred = true;
            newIngredCounter++;
            var firstNewIngred = document.querySelector("#new-ingred1")
            firstNewIngred.setAttribute("style", "display:block");

        } else {
            
            var lastNewIngredField = "#new-ingred" + newIngredCounter;
            var newIngredTemplateEl = document.querySelector(lastNewIngredField);
            var clone = newIngredTemplateEl.cloneNode(true);
            newIngredCounter++;
            clone.id = "new-ingred" + newIngredCounter;
            newIngredTemplateEl.after(clone);
        }
    }
}

var addIngredEl = document.querySelector('#ingredients-outer');
if(addIngredEl) {
    addIngredEl.addEventListener('click', addIngredFields);
} 
let tasks = document.getElementsByClassName("taskDivs");
let tasksCollection = [];

window.addEventListener("load",function(){
    readFromDivs();
    display();
    
    let monthBtns = document.getElementsByClassName("month");
    for(let i = 0; i < monthBtns.length; i++){
        monthBtns[i].addEventListener("click", function(){
            readFromDivs();
            display();
        });
    }
});
        


function readFromDivs(){
    for(let i = 0; i < tasks.length; i++){
     
        let task = tasks[i];
        let taskChildren = task.children;
        let taskObj = {};
        let fields = [];

        for(let p = 0; p < taskChildren.length; p++){  
            taskObj[taskChildren[p].id+""] = taskChildren[p].innerHTML;
        }

        tasksCollection.push(taskObj);
    }
}

function display(){       
    for(let i = 0; i < tasksCollection.length; i++){
         
        let { [`${i}_DataInici`]:dInici, [`${i}_DataFi`]:dFi} = tasksCollection[i];
        
        let selector = `div[data-date-val="${dInici}"]`;
       
        let dayContainer = document.querySelector(selector);
        
        if(dayContainer != null) setupTask(dayContainer, i);
    }  
}

function setupTask(dayDiv, taskIndex){
    dayDiv.classList.add("bg-warning");
    
    let i = taskIndex;
    
    dayDiv.addEventListener("click", taskClick.bind(null,i));
}

function taskClick(taskIndex){
    
    var taskObject = tasksCollection[taskIndex]; 
    var eventsArea = document.getElementsByClassName("event-list")[0];
    var div = document.createElement("div");
    
    


    console.log("click");
    
    if(taskObject == undefined) console.log("what");
    
    //eventsArea.removeChild(eventsArea.firstChild)
    deleteChildren(eventsArea)

    //div styling
    div.classList.add("event-container");
    div.classList.add("bg-success");
    div.classList.add("text-center");
    div.classList.add("d-flex");
    div.classList.add("flex-wrap");
    div.classList.add("p-2");

    var camps = [obs, acabada, inici, fi] = Object.values(taskObject)
    var inputs = createTextFields(obs, acabada, inici, fi);
    
    inputs.forEach((item) => {
       div.appendChild(item);
    });
    
    eventsArea.appendChild(div);
}

function createTextFields(obs, acabada, inici, fi){
    var arr = [];
    var campObs = createTextField(obs);
    var campAcabada = (acabada == "NO") ? createCheckBox(false) : createCheckBox(true);
    var campInici = createTextField(inici);
    var campFi = createTextField(fi);
    
    arr.push(campObs);
    arr.push(campAcabada);
    arr.push(campInici);
    arr.push(campFi);
    
    return arr;
}

//crear un camp de text
function createTextField(text){
    var textField = document.createElement("input");
    textField.type = "text";
    textField.value = text;
    textField.setAttribute("readonly", true);
    
    textField.classList.add("m-2");
    textField.classList.add("w-100");
    
    return textField;
}

//crear un checkbox
function createCheckBox(checked){
    var wrapper = document.createElement("p");
        
    var checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    if(checked) checkbox.setAttribute("checked", true);
    
    checkbox.classList.add("w-100");
    checkbox.classList.add("h-100");
    
    
    wrapper.classList.add("m-0");
    wrapper.classList.add("w-100");
    wrapper.classList.add("d-flex");
    wrapper.classList.add("justify-content-around");
    
    wrapper.innerHTML = "<p class='w-50 ml-2 text-white mb-0'>Completada: </p>"+checkbox.outerHTML;
    
    return wrapper;
}

function deleteChildren(element){
    for(var i = element.children.length-1; i >= 0; i--)
        element.removeChild(element.children[i])
}
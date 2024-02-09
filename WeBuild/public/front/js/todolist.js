



    document.addEventListener('DOMContentLoaded', function () {
    const todoList = document.getElementById('todo-list');
    const doingList = document.getElementById('doing-list');
    const doneList = document.getElementById('done-list');

    function addItem(text, list) {
    const li = document.createElement('li');
    li.textContent = text;
    list.appendChild(li);
    li.addEventListener('click', function () {
    moveToNextState(li);
});
}

    function moveToNextState(item) {
    const parentList = item.parentNode;
    if (parentList.id === 'todo-list') {
    doingList.appendChild(item);
} else if (parentList.id === 'doing-list') {
    doneList.appendChild(item);
} else if (parentList.id === 'done-list') {
    parentList.removeChild(item);
}
}

    function handleSubmit(event, input, list) {
    event.preventDefault();
    const task = input.value.trim();
    if (task !== '') {
    addItem(task, list);
    input.value = '';
}
}

    document.getElementById('todo-form').addEventListener('submit', function (event) {
    handleSubmit(event, document.getElementById('todo-input'), todoList);
});

    document.getElementById('doing-form').addEventListener('submit', function (event) {
    handleSubmit(event, document.getElementById('doing-input'), doingList);
});

    document.getElementById('done-form').addEventListener('submit', function (event) {
    handleSubmit(event, document.getElementById('done-input'), doneList);
});
});


//-----------------------------------------------------------------------------------------------------//




/*document.addEventListener("DOMContentLoaded", function () {
    var add = document.getElementById("addTaskButton");
    var removeFinished = document.getElementById("removeFinishedTasksButton");
    var task = document.getElementById("taskInput");
    var list = document.getElementById("taskList");
    var body = document.querySelector("body");
    var prior = document.getElementById("taskPriority");

    //To do counter
    var toDo = document.createElement("span");
    body.insertBefore(toDo, list);
    var allTasks = document.querySelectorAll("li");
    var counter = allTasks.length;
    toDo.innerHTML = "Tasks to do: " + counter;
    //Add task
    add.addEventListener("click", function () {
        if (task.value.length >= 5 &&
            task.value.length <= 100 &&
            prior.value > 0 &&
            prior.value <= 10) {

            //Add task to the list

            var newTask = document.createElement("li");
            newTask.dataset.priority = prior.value;
            var all = document.querySelectorAll("li");
            var index = all.length;

            for (var i = 0; i < all.length; i++) {
                if (parseInt(newTask.dataset.priority) < parseInt(all[i].dataset.priority)) {
                    index = i;
                    break;
                }
            }

            list.insertBefore(newTask, all[index]);
            var taskName = document.createElement("h1");
            newTask.appendChild(taskName);
            taskName.innerHTML = task.value;

            //Add delete button
            var delBtn = document.createElement("button");
            newTask.appendChild(delBtn);
            delBtn.innerHTML = "Delete";
            delBtn.classList.add("delete");

            //Add complete button
            var complBtn = document.createElement("button");
            newTask.appendChild(complBtn);
            complBtn.innerHTML = "Complete";
            complBtn.classList.add("complete");

            counter++;
            toDo.innerHTML = "Tasks to do: " + counter;

            //Mark completed in red and adjust counter
            complBtn.addEventListener("click", function () {
                if (this.parentElement.style.color === "") {
                    this.parentElement.style.color = "red";
                    this.parentElement.setAttribute("done", "yes");
                    counter--;
                    toDo.innerHTML = "Tasks to do: " + counter;
                } else if (this.parentElement.style.color === "red") {
                    this.parentElement.style.color = "";
                    this.parentElement.removeAttribute("done");
                    counter++;
                    toDo.innerHTML = "Tasks to do: " + counter;
                }
            });

            //Delete selected item and adjust counter
            delBtn.addEventListener("click", function () {
                this.parentElement.parentNode.removeChild(this.parentElement);
                counter--;
                toDo.innerHTML = "Tasks to do: " + counter;
            });

            task.value = "";
            prior.value = "";

        } else {

            event.preventDefault();
            alert("Task should have from 5 to 100 characters. Priority should be an integer between 1 and 10");
        }
    });

//Remove completed items
    removeFinished.addEventListener("click", function () {
        var tasks = document.querySelectorAll("li");
        for (var i = 0; i < tasks.length; i++) {
            if (tasks[i].hasAttribute("done")) {
                tasks[i].parentNode.removeChild(tasks[i]);
            }
        }
    });

});*/

jQuery(document).ready(function($){
    $(".form").submit(function (e) {
        e.preventDefault();
        
        var formData = {
            content: $('#content').val()
        };
        
        Livewire.emit('storeTodo', formData.content);
    });

    $(".delete-form").submit(function (e) {
        e.preventDefault();
        
        var formData = new FormData(this);

        Livewire.emit('deleteTodo', formData.get('_method'), formData.get('_token'));
    });
});  
  document.addEventListener('livewire:load', function () {
    Livewire.on('todolistUpdated', function () {
        Livewire.emit('refreshComponent');
    });
});


    // Скриване на <div class="edit">...</div> при зареждане на страницата
    document.addEventListener("DOMContentLoaded", function() {
        var editDivs = document.querySelectorAll(".edit");
        editDivs.forEach(function(editDiv) {
            editDiv.style.display = "none";
        });
    });

    // Показване на <div class="edit">...</div> при натискане на бутона
    var editButtons = document.querySelectorAll(".btn-edit");
    editButtons.forEach(function(editButton) {
        editButton.addEventListener("click", function() {
            var editDiv = this.parentElement.querySelector(".edit");
            var oldContentDiv = this.parentElement.querySelector(".oldContent")
            if (editDiv.style.display === "none") {
                editDiv.style.display = "block";
                oldContentDiv.style.display ="none";
            } else {
                editDiv.style.display = "none";
                oldContentDiv.style.display ="block";
            }
        });
    });




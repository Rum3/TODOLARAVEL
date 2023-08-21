
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
        Livewire.emit('refreshComponent'); // Примерно изпращане на събитие за обновление
    });
});
function delert(form){
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            form.submit();
        }
    })
}

function editModal(form, name){
    event.preventDefault();
    Swal.fire({
        title: 'Edit \'' + name + '\'.',
        input: 'text',
        inputValue: name,
        showCancelButton: true,
        inputValidator: (value) => {
          return !value && 'Please enter some value!'
        }
    }).then((result) => {
        if (result.value && name != result.value) {
            form.name.value = result.value;
            form.submit();
        }
    })
}
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

function excelModal(id, fname){
    var link = 'ViewerJS#../uploads/'+id+fname;
    document.getElementById('excelIFrame').src = link;
}

function editExcel(obj, plc, qrt, xlid){
    document.getElementById('obj'+obj).selected = true;
    document.getElementById('plc'+plc).selected = true;
    document.getElementById('qrt'+qrt).selected = true;
    document.getElementById('xlid').value = xlid;
}

// function apiExcel(id){
//     $("#loadExcel").empty();
//     $("#loadExcel").load("/revision/show/"+id)
//     .then(function(){
//         var clusterize = new Clusterize({
//             scrollId: 'scrollArea',
//             contentId: 'contentArea'
//         });

//     });

// }
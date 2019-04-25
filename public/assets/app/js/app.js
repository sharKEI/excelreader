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

function editFile(id, name, qrt){
    document.getElementById('name').value = name;
    document.getElementById('qrt'+qrt).selected = true;
    document.getElementById('file_id').value = id;
}

function pdfview(url){
    document.getElementById('pdfview').src = '/pdfjs/viewer.html?file='+url;
}

function addRev(xlid){
    document.querySelector('#excelId').value = xlid;
}

function modalMap(obj){
    var map = document.getElementById('mapsrc');
    var mapTitle = document.getElementById('mapTitle');
    var mapUser = document.getElementById('mapUser');
    map.src = obj.querySelector('.map').src;
    mapTitle.innerHTML = obj.querySelector('#passTitle').innerText;
    mapUser.innerHTML = 'Uploaded by: ' + obj.querySelector('#passUser').value;
}

  $(document).ready(function() {

    $(".btn-success").click(function(){
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click",".btn-danger",function(){
        $(this).parents(".control-group").remove();
    });

    $('.edit-att').click(function(event){
      // event.preventDefault();
      // event.stopPropagation();
      var form=$(this).next().children();
      var name=$(this).text();
      console.log(form)
      Swal.fire({
          title: 'Edit \'' + name + '\'.',
          input: 'number',
          inputAttributes: {
            max: 100,
            min: 0
          },
          inputValue: name,
          showCancelButton: true,
          inputValidator: (value) => {
            // return !value && 'Please enter some value!'
            if(!value)
              return 'Please enter some value!'

            if(value<0||value>100)
              return 'Must be between 0-100'
          }
      }).then((result) => {
        console.log(result.value)
          if (result.value && name != result.value) {
              // form.attacc.value = result.value;
              form.children('.percentage').val(result.value)
              form.submit();
          }
      })
    })

    // $('.edit-att').hover(function(){
    //   $(this).css('cursor', 'pointer')
    //   $(this).css('box-shadow', '10px 10px 5px grey')
    // });
    $(".edit-att").mouseenter(function() {
      new Tooltip($(this), {
        placement: 'top', // or bottom, left, right, and variations
        title: "Top"
      });
      $(this).css('cursor', 'pointer')
      $(this).css("border", "1.5px solid #000000");
      $(this).css("box-shadow", "5px 5px 5px #555");


    }).mouseleave(function(){
      $(this).css("box-shadow", "0px 0px 0px #555");
      $(this).css("border", "0px solid #8a4419");
    });


  });



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

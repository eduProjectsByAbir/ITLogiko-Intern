// Name validation
function nameCheck(){
    //select all id
    var fname = document.querySelector('#fname');
    var flen = fname.value.length;
    var lname = document.querySelector('#lname');
    var llen = lname.value.length;

    // other selections
    var wfname = document.querySelector('#wfname');
    var name = fname.value + lname.value;
    
    if(name.length > 30 || name.length <= 2){
        wfname.innerHTML = "Name can't be more then 30 letter or less then 2 letter!";
        fname.classList.add('is-invalid');
        lname.classList.add('is-invalid');
    } else {
        wfname.innerHTML = "";
        fname.classList.remove('is-invalid');
        lname.classList.remove('is-invalid');
        if(flen < 30){
            fname.classList.add('is-valid');
        } else {
            fname.classList.remove('is-valid');
        }
        if (llen < 30) {
            lname.classList.add('is-valid');
        } else {
            lname.classList.remove('is-valid');
        }
    }
}
// email validation
function validateemail() {
    var x = document.querySelector('#email').value;
    var wemail = document.querySelector('#wemail');
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        wemail.innerHTML = "Enter Valid email";
        document.querySelector('#email').classList.remove('is-valid');
        document.querySelector('#email').classList.add('is-invalid');
    } else {
        wemail.innerHTML = "";
        document.querySelector('#email').classList.remove('is-invalid');
        document.querySelector('#email').classList.add('is-valid');
    }
}

// password validation
function passVal(){
    var password = document.querySelector('#password1');
    var password2 = document.querySelector('#password2');
    var passLen = password.value.length;
    var wpass = document.querySelector('#wpass');
    if(passLen > 30 || passLen < 6){
        wpass.innerHTML = "Password can't be more than 30 character or less then 6 charecter!";
        document.querySelector('#password1').classList.remove('is-valid');
        document.querySelector('#password1').classList.add('is-invalid');
        x = true;
    } else {
        wpass.innerHTML = "";
        document.querySelector('#password1').classList.remove('is-invalid');
        document.querySelector('#password1').classList.add('is-valid');
    }
    if (password.value !== password2.value) {
        wpass.innerHTML = "Password not matched";
    }
    
}
// data insertion
    $(document).ready(function () {
        var form = $('#form1');
        $('$submit').click(function () {
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: $("#form1 input").serialize(),
            });
        });
    });

// data view
var htmls = "";
var i = 0;
$(document).ready(function () {
    $.ajax({
        url: 'index.php',
        method: 'GET',
        success: function (data) {
            // var result = $.parseJSON(data);

            //console.log(data);
            $("#tbody").html = "";
            $.each(JSON.parse(data), function (key, data) {
                i++;
                htmls += "<tr id='tr_" + data['id'] + "'><th>" + i + "</th><td>" + data['username'] + "</td><td>" + data['email'] + "</td>" +
                    "<td>" + data['city'] + "</td><td><div class='dropdown'>" +
                    "<button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'>Action </button>" +
                    "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>" +
                    "<button class='dropdown-item text-danger' onclick='deleted(" + data['id'] + ")'>Delete</button>" +
                    "<button class='dropdown-item' onclick='edit(" + data['id'] + ")'>Edit</button>" +
                    "<button class='dropdown-item text-info' onclick='detials(" + data['id'] + ")'>Details</button></div></div></td></tr>";
            })

            $("#tbody").html(htmls);
            //for data table
            $('#myTable').DataTable();
        },
        error: function () {
            $.notify("There are some problemes", "error");
        }
    });
})
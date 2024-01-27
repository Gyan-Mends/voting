//login authentication
//login authentication
$("#submit").click(function(event){
    //preventing the default behaviour of the form
    event.preventDefault();

    //accepting user input
    var email = $("#email").val();
    var password = $("#password").val()

    $.ajax({
        url : "./api.php",
        type : "POST",
        data : {
            email : email,
            password : password,
            login : "Login"
        },

        success: function(response){
            if(response.status == 200){
                window.location.href="./dasboard.html"
            }else{
                Swal.fire({
                    icon : "error",
                    title : "invalid email or password"
                })
            }
        }
    })
})

//candidates registeration
//candidates registeration
$("#candidateReg").click(function(event){
    //preventing the click default behaviour
    event.preventDefault()

    //request
    Swal.fire({
        html : `
                <P>hi</p>
        `
    })
})
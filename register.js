$(document).ready(function(){
    $('#submit').click(function(){
        alert("You are Successfully Registered!!");
        window.scrollTo(0,0);
        var Id=$("#Id").val();
        var Name=$("#Name").val();
        var Fathers_Name= $('#Fathers_Name').val();
        var Date=$('#Date').val();
        var Email=$('#Email').val();
        var Contact=$('#Contact').val();
        var Parent_Number=$('#Parent_Number').val();
        var Address=$('#Address').val();
        var Course=$('#Course').val();
        var Blood_Group=$('#Blood_Group').val();
        var School_Name=$('#School_Name').val();
        var College_Name=$('#College_Name').val();
        var Quota=$('#Quota').val();
        $.ajax({
        url:"insert.php",
        type:"POST",
        data:{
        "Id":Id,
        "Name":Name,
        "Fathers_Name":Fathers_Name,
        "Date":Date,
        "Email":Email,
        "Contact":Contact,
        "Parent_Number":Parent_Number,
        "Address":Address,
        "Course":Course,
        "Blood_Group":Blood_Group,
        "School_Name":School_Name,
        "College_Name":College_Name,
        "Quota":Quota
    },
    success:function(data){
        $("#result").html(data);
    }
    
    }) ;
    clearinput();  
});
});
function clearinput(){
    $("#Name,#Fathers_Name,#Date,#Email,#Contact,#Parent_Number,#Address,#Course,#Blood_Group,#School_Name,#College_Name,#Quota").each(function(){
        $(this).val('');
    })
   }
function numberonly(input){
    var num = /[^0-9]/gi;
    input.value = input.value.replace(num,"");
}
function characteronly(input){
    var num = /[^a-z ]/gi;
    input.value = input.value.replace(num,"");
}
function ValidateEmail(Email){
    var Email = /[^a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
}
function Apply(){
    window.scrollTo(610,610);
}
    function sub(){
        window.scrollTo(0,0);
    }
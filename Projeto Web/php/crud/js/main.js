$("#btn_gravar").on("click",function(){
    var txt_nome = $("#nome").val();
    var txt_email = $("#email").val();
    
    console.log(txt_email + " - " + txt_nome);

    $.ajax({
        url: "create.php",
        type: "post",
        data:{
            nome: txt_nome, email: txt_email
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados registrado com sucesso...");
    })
})

$("#btn_atualizar").on("click",function(){
    var txt_nome = $("#nome").val();
    var txt_email = $("#email").val();
    var txt_id = $("#id").val();
    
    console.log(txt_email + " - " + txt_nome);

    $.ajax({
        url: "update.php",
        type: "post",
        data:{
            nome: txt_nome, email: txt_email, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados atualizado com sucesso...");
        window.location="read.php";
    })
})
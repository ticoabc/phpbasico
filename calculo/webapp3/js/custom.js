//alert("Carregou!!!")
const munici = document.getElementById("iduf");
if(muncip){
    listarMunici();
}

async function listarMunici(){
    await fetch('listar_uf.php');
}
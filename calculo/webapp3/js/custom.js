//alert("Carregou!!!")
const munici = document.getElementById("id_uf");
if(muncip){
    listarMunici();
}

async function listarMunici(){
    await fetch('listar_munici.php');
}
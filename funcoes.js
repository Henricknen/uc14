function validaret()
{
    dtsai = new Date(document.getElementById("saida_h").value);
    vret = document.getElementById("ret").value;
    // troca data do retonro do calendário AAAA-MM-DD para AAAA/MM/DD
    vret = vret.replace("-","/");
    vret = vret.replace("-","/");
    dtret = new Date(vret);
    if(dtret >= dtsai)
    {
        document.getElementById("butvalida").disabled = true;
        document.getElementById("subgrava").disabled = false;
    }
    else
    {
        alert("Data de Retorno não pode ser inferior a data de Saída");
    }
}
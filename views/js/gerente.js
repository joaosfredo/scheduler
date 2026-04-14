function verifica(value){
	var input = document.getElementById("input");

  switch (value) {
    case "AV1":
        input.disabled = false;
        break;
    case "AV2":
        input.disabled = false;
        break;
    case "Simulado":
        input.disabled = true;
        break;
}
};

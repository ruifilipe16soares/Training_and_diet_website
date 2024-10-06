document.getElementById("pdfButton").addEventListener("click", function() {
    // Enviar uma solicitação para o arquivo PHP para gerar o PDF
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "gerar_pdf.php", true);
    xhr.responseType = "blob";
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Criar um URL temporário para o arquivo PDF
            var blob = new Blob([xhr.response], {type: "application/pdf"});
            var url = URL.createObjectURL(blob);

            // Abrir o PDF em uma nova janela ou guia
            window.open(url, "_blank");
        }
    };
    xhr.send();
});
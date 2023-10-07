 var buttons = document.querySelectorAll(".learnmore");

 buttons.forEach(function(button) {
    button.addEventListener("click", function() {
        var pdfUrl = null;
        var link = document.createElement('a');  
        var dataInfo = button.getAttribute("data-info");
        
        if (dataInfo == 1) {
            pdfUrl = 'assets/example1.pdf';
            link.download = 'example1.pdf';
        }
        else if (dataInfo == 2) {
            pdfUrl = 'assets/example2.pdf';
            link.download = 'example2.pdf';
        }
        else if (dataInfo == 3) {
            pdfUrl = 'assets/example3.pdf';
            link.download = 'example3.pdf';
        } 

        else if (dataInfo == 4) {
            pdfUrl = 'assets/example3.pdf';
            link.download = 'example3.pdf';
        }
        
        link.href = pdfUrl;
        link.target = '_blank';
        link.click();
    });
});

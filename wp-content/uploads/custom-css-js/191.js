<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 


    // Wait until the iframe loads
    document.getElementById('crictimes-widget').onload = function() {
        let iframeDocument = document.getElementById('crictimes-widget').contentDocument || document.getElementById('crictimes-widget').contentWindow.document;
        
        // If access to the iframe document is allowed (not cross-origin restricted)
        if (iframeDocument) {
            let links = iframeDocument.getElementsByTagName('a');
            for (let i = 0; i < links.length; i++) {
               links[i].removeAttribute('target'); // Force links to open in a new tab
            }
        }
    };

</script>
<!-- end Simple Custom CSS and JS -->

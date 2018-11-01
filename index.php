<html>
<head>
</head>
<body>
<script> 
    function functionRotate() {
        var img = document.getElementById("image");
        var t = img.style.transform.match(/(\d+)/g) || [0];  // on met ||[0) pour le 1st passage
        var val = ( t[0] *1 +90) % 360;                      // incrémentation de 90
        img.style.transform = 'rotate(' +val +'deg)';
    }
</script> 
 
    <section>
        <img id="image" src="test.jpg" >   
        <button onclick="functionRotate()"> Rotate </button>
    </section>
</body>
</html>
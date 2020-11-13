window.onload = function(){
    var lookupbtn = document.getElementById("lookup");

    lookupbtn.addEventListener('click', function(e){
        e.preventDefault();
        var lookupqueryfunc = document.getElementById("country").value;
        var hrequest = new XMLHttpRequest();

        var urlcode = "world.php?country=" + lookupqueryfunc;

        hrequest.onreadystatechange = function() {
            if (hrequest.readyState == XMLHttpRequest.DONE){
                if (hrequest.status == 200) {
                    var country = hrequest.responseText;
                    var result = document.getElementById("result");
                    result.innerHTML = country;

                } else{
                    alert("Error Detected");
                }

            }
        }

        hrequest.open("GET" , urlcode, true);
        hrequest.send();
    });

}
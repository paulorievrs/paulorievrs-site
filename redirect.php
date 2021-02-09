<script>

function countDown(secs,elem) {
    
    const redirect = "https://linktr.ee/paulorievrs";

    let element = document.getElementById(elem);
    
    element.innerHTML = "Redirecionando em: "+secs+" segundos...";
    
    if(secs < 1) {
    
        window.location.replace(redirect);
        
        
        let timer = setTimeout('() => {}',1000);
        
        element.innerHTML = "<a href=" + redirect +">Se não tiver sido redirecionado clique aqui.</a>";

    }

    secs--;
    
    let timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);

}

</script>
    
    <p>Olá, visite <a href="paulorievrs.site" target="_blank">paulorievrs.site</a></p>
    
    <div id="status"style="font-size:20px;"></div>

<script>countDown(3,"status");</script> 
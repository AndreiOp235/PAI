var loginGlobal = window.loginGlobal || false; // Default to false if not defined
var visibilitate = true;


window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const prompt_ts = params.get("prompt_ts");
    const selectie = params.get("selectie");

    console.log("Prompt:_boss", prompt_ts);
    console.log("Selectie:", selectie);

    const selectieElement = document.getElementById("selectie");
    if (selectie) {
        selectieElement.value = selectie;
    }

    if (prompt_ts != null && selectie != null) {
        insereaza(prompt_ts, selectie);
        const butonA = document.getElementById("A");
        const butonQ = document.getElementById("Q");
        butonA.disabled = true;
        butonQ.disabled = true;
    }

    if(loginGlobal === false) {
        console.log("Nu sunteti logat !");
        karma= document.getElementById("karma");
        karma.style.display = "none";
        username= document.getElementById("numeUtilizator");
        username.innerText = "Nu sunteti logat !";
        butonLogout= document.getElementById("butonLogout");
        butonLogout.style.display = "none";


    }
    else {
        console.log("Sunteti logat !");
        karma= document.getElementById("karma");
        karma.style.display = "inline";


        butonLogin= document.getElementById("butonLogin");
        butonLogin.style.display = "none";
    }
});

function toggleLogin() {
    if (visibilitate){
        header=document.getElementById("br_header");
        header.style.display = "none";

        visibilitate = false;
    }
    else {
        header=document.getElementById("br_header");
        header.style.display = "inline";
        visibilitate = true;
    }

    if(loginGlobal === false) {
        butonLogout= document.getElementById("butonLogout1");
        butonLogout.style.display = "none";
    }
    else {
        butonLogin= document.getElementById("butonLogin1");
        butonLogin.style.display = "none";
    }
}

function insereaza(prompt_ts, selectie) {
    area=document.getElementById("arieText");
    area.value = ""; // Clear the textarea before inserting new text
    aboveText = document.getElementById("aboveText");
    aboveText.innerText = "1. Scrie textul aici"; // Clear the textarea before inserting new text
    for (let i = 0; i < prompt_ts.length; i++) {
        setTimeout(() => {
            area.value += prompt_ts[i];
        }, 300*i );
    }
    // Update the label after text is inserted (optional: delay this if needed)
    setTimeout(() => {
        aboveText.innerText = "2. Apasa butonul de raspuns!";
        butonA = document.getElementById("A");
        butonA.disabled = false; // Enable the button after inserting text
        butonQ = document.getElementById("Q");
        butonQ.disabled = false; // Enable the button after inserting text
    }, 300 * prompt_ts.length);
    
}

function generareLink() {
    var textArea = document.getElementById("arieText");
    var text = textArea.value;
    const selectie2 = document.getElementById("selectie").value;
    var tinta= document.getElementById("copyLink");
    var d = new Date();
    var hash = d.toLocaleTimeString() + d.toLocaleDateString();
    hash = md5(hash);
    console.log(hash);
    var link = "localhost/pai/index.php?prompt_ts=" + encodeURIComponent(text) + "&selectie="+selectie2+"&hash="+hash;
    tinta.value = link;
    const ceva = "https://example.com/link";
    navigator.clipboard.writeText(link)
    .then(() => console.log("Copiat cu succes!"))
    .catch(() => console.log("Nu s-a putut copia!"));

    // Prepare data
    const data = {
        prompt_ts: text,
        selectie: selectie2,
        hash: hash
    };

    // Send POST request
    fetch("pages/c.php", { // replace with your PHP file if different
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams(data)
    })
    .then(response => response.text())
    .then(result => {
        console.log("POST succeeded:", result);
    })
    .catch(error => {
        console.error("POST failed:", error);
    });

}

function generareRapsuns()
{
    var textArea = document.getElementById("arieText");
    var text = textArea.value;
    const selectie2 = document.getElementById("selectie").value;
    var tinta= document.getElementById("copyLink");
    var d = new Date();
    var hash = d.toLocaleTimeString() + d.toLocaleDateString();

    const params = new URLSearchParams(window.location.search);
    const prompt_ts = params.get("prompt_ts");
    const selectie = params.get("selectie");
    const hash2 = params.get("hash");

    const data = new URLSearchParams();
    data.append('prompt', prompt_ts);
    data.append('model', selectie);
    data.append('hash', hash2);
    data.append('client', window.usernameGlobal);
    
    fetch('pages/rapsuns.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: data
    })
    .then(response => response.text())
    .then(text => {
        console.log('Server says:', text);
        var tinta= document.getElementById("copyLink");
        tinta.value= JSON.parse(text).response;
        // Resize the textarea to fit the content
        tinta.style.height = "auto"; // Reset height
        tinta.style.height = (tinta.scrollHeight) + "px"; // Set the height to scrollHeight

    })
    .catch(error => console.error('Error:', error));

    

}

function injectareIntrebare()
{
    var textArea = document.getElementById("arieText");
    var text = textArea.value;
    const selectie2 = document.getElementById("selectie").value;

    var currentUrl = window.location.href;

    // Define the query parameters
    var params = new URLSearchParams(window.location.search);

    // Add or modify parameters as needed
    params.set('prompt_ts', text);  // Adds or updates param1
    params.set('selectie', selectie2);  // Adds or updates param2

    // Build the new URL with query parameters
    var newUrl = window.location.origin + window.location.pathname + '?' + params.toString();

    // Reload the page with the new URL (GET request with params)
    window.location.href = newUrl;



}
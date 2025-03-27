window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const prompt_ts = params.get("prompt_ts"); // "I`m blue "
    const selectie = params.get("selectie"); // "gpt3"

    console.log("Prompt:", prompt_ts);
    console.log("Selectie:", selectie);

    insereaza(prompt_ts, selectie);
});


function insereaza(prompt_ts, selectie) {
    area=document.getElementById("arieText");
    for (let i = 0; i < prompt_ts.length; i++) {
        setTimeout(() => {
            area.value += prompt_ts[i];
        }, 300*i );
    }
}